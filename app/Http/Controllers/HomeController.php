<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Product;
use App\Models\Product_comment;
use App\Models\Customer;
use App\Models\Product_attribute;
use App\Models\Category_product;
use App\Models\Attribute_value;
use App\Models\Wishlist;
use App\Models\Banner;
use App\Models\Advertisement;
use App\Models\Config;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function home()
    {
        $pro=Product::where('status',1)->paginate(10);
        $new_pro=Product::orderBy('id','DESC')->where('status',1)->paginate(10);
        $sale_pro=Product::orderBy('id','ASC')->where('status',1)->where('sale_price','<>',0)->paginate(10);
        $banners=Banner::limit(3)->get();
        $advs=Advertisement::all();
        $config = Config::all();

        return view('home',compact('pro','new_pro','sale_pro','banners','advs','config'));
    }

    public function about()
    {
        return view('about');
    }

    public function blog_detail()
    {
        return view('customer.blog_detail');
    }

    public function contact()
    {
        $config=Config::where('key','map')->first();
        return view('contact',compact('config'));
    }

    public function post_contact(Request $request)
    {
        Mail::send('email.contact',[
            'name'=>$request->name,
            'content'=>$request->content
        ], function ($message) use($request) {
            $message->from($request->email);
            $message->to('nhokimlien1411@gmail.com',$request->name);
            $message->subject('Feedback');
        });

        return back();
    }

    public function faqs()
    {
        return view('faqs');
    }

    public function order_tracking()
    {
        return view('order_tracking');
    }

    public function product_single()
    {
        return view('product_single');
    }

    public function shop(Request $request)
    {
        $size_arr = session('size_arr') ? session('size_arr') : [];
        if(!in_array($request->size, $size_arr) ){
             array_push($size_arr, $request->size);
            session(['size_arr' => $size_arr ]);
        }
        $size = implode('-',$request->session()->get('size_arr'));

        $color_arr = session('color_arr') ? session('color_arr') : [];
        if(!in_array($request->color, $color_arr) ){
                array_push($color_arr, $request->color);
                session(['color_arr' => $color_arr ]);
        }
        $color = implode('-',$request->session()->get('color_arr'));

        $sortby = ['name','ASC'];
        if ($request->orderby == 'none' || empty($request->orderby)) {
            $sortby = ['name','ASC'];
        }else{
            $sortby=explode('-',$request->orderby);
        }
        $orderby=$sortby[0];
        $order=$sortby[1];

        $fillter_price=explode('-',$request->price);

        if (count($fillter_price)==2) {
            $min_price = $fillter_price[0];
            $max_price = $fillter_price[1];
        }else{
            $min_price = $fillter_price[0];
            $max_price = '';
        }
        $pro_cat=$request->product_cat?$request->product_cat:'';

        $param=['size'=>$size,'color'=>$color,'orderby'=>$orderby,'order'=>$order,'min_price'=>$min_price,'max_price'=>$max_price,'product_cat'=>$pro_cat];
        $fillter_pram=array_filter($param);

        return redirect()->route("product",$fillter_pram);
    }

    public function product(Request $request)
    {
        $sizes = explode('-',$request->size);
        $colors = explode('-',$request->color);

        $pro_cat = explode('-',$request->product_cat);
        $orderby = $request->orderby;
        $order = $request->order;
        $min_price=$request->min_price;
        $max_price=$request->max_price;

        $sz=[];
        foreach ($sizes as  $value) {
           if (!empty($value)) {
                array_push($sz,$value);
           }
        }
        $sizes2=implode(',',$sz);

        $clr=[];
        foreach ($colors as  $value) {
           if (!empty($value)) {
                array_push($clr,$value);
           }
        }
        $colors2=implode(',',$clr);

        $cate=Category_product::orderBy('name','DESC')->get();
        $size=Attribute_value::orderBy('name','ASC')->where('attribute_id',1)->get();
        $color=Attribute_value::orderBy('name','ASC')->where('attribute_id',2)->get();

        if ($request->orderby && $request->order) {
            $pro=Product::orderBy($orderby,$order);
        }else{
            $pro=Product::orderBy('id','ASC');
        }

        if ($request->size) {
            $pro=Product_attribute::select('products.id','products.name','products.image','products.image_list','products.price','products.status','products.sale_price')
            ->join('products','product_attributes.product_id','=','products.id')
            ->whereIn('product_attributes.attribute_value_id',[$sizes2]);
        }

        if ($request->color) {
            $pro=Product_attribute::select('products.id','products.name','products.image','products.image_list','products.price','products.status','products.sale_price')
            ->join('products','product_attributes.product_id','=','products.id')
            ->whereIn('product_attributes.attribute_value_id',[$colors2]);
        }


        if ($min_price && $max_price) {
            $pro=$pro->whereBetween('price',[$min_price,$max_price]);
        }elseif($max_price){
            $pro=$pro->where('price','<',$max_price);
        }elseif($min_price){
            $pro=$pro->where('price','>',$min_price);
        }

        if ($request->product_cat) {
            $pro=$pro->select('products.id','products.name','products.image','products.image_list','products.price','products.status','products.sale_price')
            ->join('category_products','category_products.id','=','products.category_pro_id')
            ->where('category_products.name',$pro_cat)
            ->where('products.status',1);
        }

        $pro = $pro->paginate(8);

        return view('product',compact('pro','size','color','cate'));
    }

    public function shopping_cart()
    {
        $cus_id=Auth::guard('cus')->user()->id;
        $cus=Customer::find($cus_id);

        return view('shopping_cart',compact('cus'));
    }
    public function wishlist()
    {
        $wl=Wishlist::orderBy('id','ASC')->get();
        return view('wishlist',compact('wl'));
    }

    public function view($slug)
    {
        $modal=Category_product::where('slug',$slug)->first();
        $pro=Product::where('id',$slug)->first();
        $cmt_pro=Product_comment::where('status',1)->where('pro_id',$slug)->get();

        if ($modal) {
            return view('shop',compact('modal'));
        }
        return view('product_single',compact('pro','cmt_pro'));
    }


    public function getProductAjax($id)
    {
        $pro=Product::find($id);
        $cmt_pro=Product_comment::where('status',1)->where('pro_id',$id)->get();
        return view('product_ajax',compact('pro','cmt_pro'));
    }
}

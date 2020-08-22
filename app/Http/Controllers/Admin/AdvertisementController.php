<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use App\Http\Requests\AdvertisementRequest;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advertisement = Advertisement::orderBy('id','desc')->paginate(10);

        return view('admin.advertisement.index',compact('advertisement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.advertisement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdvertisementRequest $request)
    {
        $filename=str_replace(url('uploads').'/','',$request->image);
        $request->merge(['image'=>$filename]);

        $create=Advertisement::create($request->all());

        if ($create) {
            return redirect()->route('admin.advertisement.index')->with('success','Thêm mới thành công !');
        }
            return redirect()->back()->with('error','Thêm mới không thành công !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function show(Advertisement $advertisement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $advs = Advertisement::find($id);
        return view('admin.advertisement.edit',compact('advs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function update(AdvertisementRequest $request, $id)
    {
        $request->offsetUnset('_token');
        $request->offsetUnset('_method');

        $filename=str_replace(url('uploads').'/','',$request->image);
        $request->merge(['image'=>$filename]);

        $edit=Advertisement::where('id',$id)->update($request->all());

        if ($edit) {
            return redirect()->route('admin.advertisement.index')->with('success','Cập nhật thành công !');
        }
            return redirect()->back()->with('error','Cập nhật không thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Advertisement  $advertisement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Advertisement::find($id)->delete();
        if ($delete) {
            return redirect()->back()->with('success','Xóa thành công !');
        }
        return redirect()->back()->with('error','Xóa không thành công !');
    }
}

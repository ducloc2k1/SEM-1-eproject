<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Bill;
use App\Models\Bill_detail;
use App\Models\Customer;

use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bill=Bill::orderBy('id','DESC')->paginate(10);

        if(request()->key){
            $key=request()->key;

            $bill=Bill::select('customers.*','bills.*')
            ->join('customers','customers.id','=','bills.cus_id')
            ->where('customers.display_name','LIKE','%'.$key.'%')
            ->paginate(10);
        }

        return view('admin.bill.index',compact('bill'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bill=Bill::find($id);
        $bill_detail=Bill_detail::where('bill_id',$id)->get();

        return view('admin.bill.edit',compact('bill','bill_detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->offsetUnset('_token');
        $request->offsetUnset('_method');

        $edit=Bill::where('id',$id)->update(['status'=>$request->status]);

        if ($edit) {
            return redirect()->route('admin.bill.index')->with('success','Cập nhật thành công !');
        }
        return redirect()->back()->with('error','Cập nhật không thành công !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bill  $bill
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Bill::find($id)->delete();

        if ($delete) {
            return redirect()->back()->with('success','Xóa thành công !');
        }
        return redirect()->back()->with('error','Xóa không thành công !');
    }
}

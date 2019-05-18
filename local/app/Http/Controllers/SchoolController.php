<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
class SchoolController extends Controller
{
    function getDanhSach(){
        $school = DB::table('Schools')->get();
    	return view ('manager.truong.danhsach', ['school' => $school]);
    }

    function getSua($id){
        $school = DB::table('Schools')->where('id', '=', $id)->get();
    	return view ('manager.truong.sua', ['school' => $school]);
    }

    function postSua(Request $request, $id){

        $this->validate($request,
            [
                'Ten'=>'required|min:3|max:250',
                'DiaChi'=>'required|min:3|max:250'
            ],
            [
                'Ten.required' => 'Tên trường không được để trống',
                'Ten.min' => 'Tên trường có độ dài giới hạn từ 3 đến 250 kí tự',
                'DiaChi.required' => 'Địa chỉ không được để trống',
                'DiaChi.min' => 'Địa chỉ có độ dài giới hạn từ 3 đến 250 kí tự',
            ]
        );


        $name = DB::table('Schools')->where('id', '=', $id)->get();
        


        if($request->hasFile('Logo')){
             $file = $request->file('Logo');
             //File::delete('image/logo/' .)
            $request->file('Logo')->move('image/logo', $name[0]->id .  "." .$file->getClientOriginalExtension());
             DB::table('Schools')->where('id', '=', $id)->update(['name'=>$request->Ten, 'address'=>$request->DiaChi, 'logo'=> $name[0]->id . "." . $file->getClientOriginalExtension()]);
        }
        else{
            DB::table('Schools')->where('id', '=', $id)->update(['name'=>$request->Ten, 'address'=>$request->DiaChi]);
        }

        return redirect('manager/school/sua/' . $id)->with('thongbao', 'Thay đổi thành công');

    }

    function getThem(){
    	return view ('manager.truong.them');
    }

    function postThem(Request $request){
            $this->validate($request,
            [
                'Ten'=>'required|min:3|max:250',
                'DiaChi'=>'required|min:3|max:250'
            ],
            [
                'Ten.required' => 'Tên trường không được để trống',
                'Ten.min' => 'Tên trường có độ dài giới hạn từ 3 đến 250 kí tự',
                'DiaChi.required' => 'Địa chỉ không được để trống',
                'DiaChi.min' => 'Địa chỉ có độ dài giới hạn từ 3 đến 250 kí tự',
            ]
        );

        if($request->hasFile('Logo')){
             $file = $request->file('Logo');
             do{
                $name = str_random(5);
             }
             while(file_exists('image/logo/' . $name . "." . $file->getClientOriginalExtension()));
             
            $request->file('Logo')->move('image/logo', $name .  "." .$file->getClientOriginalExtension());

             DB::table('Schools')->insert(['id'=> $name, 'name'=>$request->Ten, 'address'=>$request->DiaChi, 'logo'=> $name . "." . $file->getClientOriginalExtension()]);
        }
        else{
            DB::table('Schools')->insert(['id'=> $name, 'name'=>$request->Ten, 'address'=>$request->DiaChi]);
        }

        return redirect('manager/school/them/' )->with('thongbao', 'Thêm thành công: ' . $request->Ten);
    }

    function getXoa($id){
       // DB::table('users')->where('sid', '=', $id)->delete();
       // DB::table('fschool')->where('sid', '=', $id)->delete();
        DB::table('Schools')->where('id', '=', $id)->delete();
        return redirect('manager/school/danhsach')->with('thongbao', 'Xóa thành công');
    }
}

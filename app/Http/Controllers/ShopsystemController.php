<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Shopsystem;
use App\Http\Requests\AddshopsystemRequest;
use DateTime;

class ShopsystemController extends Controller
{
   public function getlist()
   {
        $data = Shopsystem::all();
        return View ('back-end.shopsys.list',['data'=>$data]);
   }
   public function getadd()
   {    
        $data = Shopsystem::all();
        return View ('back-end.shopsys.add',['data'=>$data]);
   }
    public function postadd(AddshopsystemRequest $rq)
   {
    //  dd($rq);
    //die();      
        $pro = new Shopsystem();
        $pro->tencuahang = $rq->txtName;
        $pro->diachi = $rq->txtDc;
        $pro->sdt = $rq->txtpromo;        
        $pro->map = $rq->txtDes;
        $pro->created_at = new datetime;
        $f = $rq->file('txtimg')->getClientOriginalName();
        $filename = time().'_'.$f;
        $pro->hinhanh = $filename;       
        $rq->file('txtimg')->move('uploads/cuahang/',$filename);
        $pro->save();       
        return redirect()->route('getshopsys')
        ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
   }
   public function getedit($id)   {
      $pro = Shopsystem::where('id',$id)->first();
      //$data = Shopsystem::all();
      return View ('back-end.shopsys.edit',['pro'=>$pro]);
   }
   public function postedit($id,AddshopsystemRequest $rq)
   {
        $pro = Shopsystem::find($id);
        $pro->tencuahang = $rq->txtName;
        $pro->diachi = $rq->txtDc;
        $pro->sdt = $rq->txtpromo;        
        $pro->map = $rq->txtDes;
        $pro->created_at = new datetime;
        $file_path = public_path('uploads/cuahang/').$pro->hinhanh;
         if ($rq->hasFile('txtimg')) {
            if (file_exists($file_path))
                {
                    unlink($file_path);
                }
        $f = $rq->file('txtimg')->getClientOriginalName();
        $filename = time().'_'.$f;
        $pro->hinhanh = $filename;       
        $rq->file('txtimg')->move('uploads/cuahang/',$filename);}
        $pro->save();       
        return redirect()->route('getshopsys')
        ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa thành công !']);
   }
        public function getdel($id)
    {       
            //$pro = Shopsystem::where('id',$id)->first();
            $pro = Shopsystem::find($id);
            $pro->delete();
            return redirect()->route('getshopsys')
            ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã hủy bỏ thông tin :  '.$id.' !']);
    }



}

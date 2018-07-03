<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Info;
use App\Http\Requests\AddInfoRequest;
use DateTime;

class InfoController extends Controller
{
   public function getlist()
   {
        $data = Info::all();
        return View ('back-end.info.list',['data'=>$data]);
   }
   public function getadd()
   {    
        $data = Info::all();
        return View ('back-end.info.add',['data'=>$data]);
   }
    public function postadd(AddInfoRequest $rq)
   {
    //  dd($rq);
    //die();      
        $pro = new Info();
        $pro->web_name = $rq->txtName;
        $pro->diachi1 = $rq->txtDc1;
        $pro->diachi2 = $rq->txtDc2;
        $pro->gioithieu = $rq->txtAbout;
        $pro->sdt_hotline = $rq->txtpromo1;
        $pro->sdt_htkh = $rq->txtpromo2;
        $pro->sdt_tongdai = $rq->txtpromo3;        
        $pro->url_fb = $rq->txtfb;
        $pro->url_yt = $rq->txtyt;
        $pro->decript = $rq->txtDes;
        $pro->created_at = new datetime;
        $f = $rq->file('txtimg')->getClientOriginalName();
        $filename = time().'_'.$f;
        $pro->logo = $filename;       
        $rq->file('txtimg')->move('uploads/info/',$filename);
        $pro->save();       
        return redirect()->route('getinfo')
        ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
   }
   public function getedit($id)   {
      $pro = Info::where('id',$id)->first();
    
      return View ('back-end.info.edit',['row'=>$pro]);
   }
   public function postedit($id,AddInfoRequest $rq)
   {
        $pro = Info::find($id);
        $pro->web_name = $rq->txtName;
        $pro->diachi1 = $rq->txtDc1;
        $pro->diachi2 = $rq->txtDc2;
        $pro->gioithieu = $rq->txtAbout;
        $pro->sdt_hotline = $rq->txtpromo1;
        $pro->sdt_htkh = $rq->txtpromo2;
        $pro->sdt_tongdai = $rq->txtpromo3;        
        $pro->url_fb = $rq->txtfb;
        $pro->url_yt = $rq->txtyt;
        $pro->decript = $rq->txtDes;
        $pro->created_at = new datetime;
        $file_path = public_path('uploads/info/').$pro->logo;
         if ($rq->hasFile('txtimg')) {
            if (file_exists($file_path))
                {
                    unlink($file_path);
                }
        $f = $rq->file('txtimg')->getClientOriginalName();
        $filename = time().'_'.$f;
        $pro->logo = $filename;       
        $rq->file('txtimg')->move('uploads/info/',$filename);}
        $pro->save();       
        return redirect()->route('getinfo')
        ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa thành công !']);
   }
        public function getdel($id)
    {       
      die();
           // $pro = Info::where('id',$id)->first();
            $pro = Info::find($id);
            $pro->delete();
            return redirect()->route('getinfo')
            ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã hủy bỏ thông tin Website :  '.$id.' !']);
    }



}

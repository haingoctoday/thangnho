<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Banners;
use App\Nhanqc;
use App\Http\Requests\AddBannersRequest;
use DateTime;

class BannersController extends Controller
{
   public function getlist()
   {
		$data = Banners::all();
		return View ('back-end.banner.cat-list',['data'=>$data]);
   }
   public function getadd()
   {	
		$data = Banners::all();
		return View ('back-end.banner.add',['data'=>$data]);
   }
   public function postadd(AddBannersRequest $rq)
   {
   //	dd($rq);
   	//die();
		$cat = new Banners();
     // $cat->id= $rq->sltCate;
      // $cat->name= $rq->txtCateName;
       $cat->user_id = '1';
        $cat->created_at = new DateTime;

        $f = $rq->file('txtimg')->getClientOriginalName();
    	$filename = time().'_'.$f;
    	$cat->url_banner = $filename;    	
    	$rq->file('txtimg')->move('uploads/banner/',$filename);

      $cat->save();
      return redirect()->route('getbanners')
      ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
         
   }
   public function getedit($id)   {
      $cat = Banners::where('id',$id)->first();
      $data = Banners::findOrFail($id)->toArray();
      return View ('back-end.banner.edit',['cat'=>$cat,'data'=>$data]);
   }
   public function postedit($id,AddBannersRequest $rq)
   {
      $cat = Banners::find($id);
      // $cat->name= $rq->txtCateName;
       $cat->user_id = '1';
        $cat->created_at = new DateTime;

    	$file_path = public_path('uploads/banner/').$cat->url_banner;
    	 if ($rq->hasFile('txtimg')) {
            if (file_exists($file_path))
                {
                    unlink($file_path);
                }
            
            $f = $rq->file('txtimg')->getClientOriginalName();
            $filename = time().'_'.$f;
            $cat->url_banner = $filename;       
            $rq->file('txtimg')->move('uploads/banner/',$filename);
        }

      $cat->save();
      return redirect()->route('getbanners')
      ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa']);

   }

        public function getdel($id)
    {       
    	$oder = Banners::where('id',$id)->first();

    		$oder = Banners::find($id);
        	$oder->delete();
        	return redirect()->route('getbanners')
         	->with(['flash_level'=>'result_msg','flash_massage'=>'Đã hủy bỏ ảnh số:  '.$id.' !']);
    }
       public function getnhanqc()
   {
    $data = Nhanqc::all();
    return View ('back-end.nhanqc.list',['data'=>$data]);
   }
}

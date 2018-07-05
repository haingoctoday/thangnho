<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Chinhsach;
use App\Http\Requests\AddChinhsachsRequest;
use DateTime;

class ChinhsachController extends Controller
{
   public function getchinhsach()
   {
		$data = Chinhsach::all();
		return View ('back-end.chinhsach.list',['data'=>$data]);
   }
   public function getaddchinhsach()
   {	
		$data = Chinhsach::all();
		return View ('back-end.chinhsach.add',['data'=>$data]);
   }
   public function postaddchinhsach(AddChinhsachsRequest $rq)
   {
   //	dd($rq);
   	//die();
		$cat = new Chinhsach();
    $cat->name= $rq->txtName;
    $cat->chitiet= $rq->txtdetail;
    $cat->created_at = new DateTime;
    $cat->save();
      return redirect()->route('getchinhsach')
      ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã thêm thành công !']);
         
   }
   public function geteditchinhsach($id)   {
      $cat = Chinhsach::where('id',$id)->first();
      $data = Chinhsach::findOrFail($id)->toArray();
      return View ('back-end.chinhsach.edit',['cat'=>$cat,'data'=>$data]);
   }
   public function posteditchinhsach($id,AddChinhsachsRequest $rq)
   {
      $cat = Chinhsach::find($id);
      $cat->name= $rq->txtName;
      $cat->chitiet= $rq->txtdetail;
      $cat->created_at = new DateTime;
      $cat->save();
      return redirect()->route('getchinhsach')
      ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã sửa']);
   }

        public function getdelchinhsach($id)
    {       
    	$oder = Chinhsach::where('id',$id)->first();

    		$oder = Chinhsach::find($id);
        	$oder->delete();
        	return redirect()->route('getchinhsach')
         	->with(['flash_level'=>'result_msg','flash_massage'=>'Đã hủy bỏ số:  '.$id.' !']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Contact;
use App\Http\Requests\AddCategoryRequest;
use DateTime;

class ContactsController extends Controller
{
   public function getlist()
   {
		$data = Contact::paginate(10);
		return View ('back-end.contact.list',['data'=>$data]);
   }
  
   public function getedit($id)   {
        $data = Contact::find($id);
      return View ('back-end.contact.detail',['oder'=>$data]);
   }
   public function postedit($id)
   {
      $oder = Contact::find($id);

      $oder->status = 1;
      $oder->save();
      return redirect('admin/contact')
         ->with(['flash_level'=>'result_msg','flash_massage'=>' Đã xác nhận thành công !']);       

   }
   public function getdel($id)
   {
            $pro = Contact::where('id',$id)->first();
            $pro->delete();
            return redirect()->route('getcontact')
            ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã hủy bỏ liên hệ :  '.$id.' !']);
   }
}

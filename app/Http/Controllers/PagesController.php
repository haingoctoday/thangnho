<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Products;
use App\Category;
use App\Pro_detail;
use App\News;
use App\Oders;
use App\Oders_detail;
use App\Banners;
use DB,Cart,Datetime;
use Illuminate\Support\Facades\Input;
use App\Info;
use App\User;
class PagesController extends Controller
{
    public function index()
    {
        $pc = DB::table('products')
                ->join('category', 'products.cat_id', '=', 'category.id')
                ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
              //  ->where('category.parent_id','=','19')
                ->select('products.*','pro_details.cpu','pro_details.ram','pro_details.screen','pro_details.vga','pro_details.storage','pro_details.exten_memmory','pro_details.cam1','pro_details.cam2','pro_details.sim','pro_details.connect','pro_details.pin','pro_details.os','pro_details.note')
                ->paginate(10);
              //  dd($pc);
                $data_menu = Category::all();
                 $data_banner = Banners::all();
    	return view('home',['pc'=>$pc,'data_menu'=>$data_menu,'banners'=>$data_banner]);
    }
    public function addcart($id)
    {
        $pro = Products::where('id',$id)->first();
        Cart::add(['id' => $pro->id, 'name' => $pro->name, 'qty' => 1, 'price' => $pro->price,'options' => ['img' => $pro->images]]);
        return redirect()->route('getcart');
    }

    public function getupdatecart($id,$qty,$dk)
    {
      if ($dk=='up') {
         $qt = $qty+1;
         Cart::update($id, $qt);
         return redirect()->route('getcart');
      } elseif ($dk=='down') {
         $qt = $qty-1;
         Cart::update($id, $qt);
         return redirect()->route('getcart');
      } else {
         return redirect()->route('getcart');
      }
    }
    public function getdeletecart($id)
    {
     Cart::remove($id);
     return redirect()->route('getcart');
    }
    public function xoa()
    {
        Cart::destroy();   
        return redirect()->route('index');   
    }
    public function getcart()
    {   $data_menu = Category::all();
        $all = [];
    	return view ('detail.cardorder',['data_menu'=>$data_menu,'all'=>$all])
        ->with('slug','Chi tiết đơn hàng');
    }
    public function getoder()
    {
         $data_menu = Category::all();
         
        if (Auth::guest()) {
            return View ('me.me',['data_menu'=>$data_menu]);
        } else {

            return view ('detail.orderorder',['data_menu'=>$data_menu])
            ->with('slug','Xác nhận');
        }        
    }
    public function postoder(Request $rq)
    {
        $oder = new Oders();
        $total =0;
        foreach (Cart::content() as $row) {
            $total = $total + ( $row->qty * $row->price);
        }
        $oder->c_id = Auth::user()->id;
        $oder->qty = Cart::count();
        $oder->sub_total = floatval($total);
        $oder->total =  floatval($total);
        $oder->note = $rq->txtnote;
        $oder->status = 0;
        $oder->type = 'cod';
        $oder->created_at = new datetime;
        $oder->save();
        $o_id =$oder->id;

        foreach (Cart::content() as $row) {
           $detail = new Oders_detail();
           $detail->pro_id = $row->id;
           $detail->qty = $row->qty;
           $detail->o_id = $o_id;
           $detail->created_at = new datetime;
           $detail->save();
        }
        Cart::destroy();   
        return redirect()->route('getcart')
        ->with(['flash_level'=>'result_msg','flash_massage'=>' Đơn hàng của bạn đã được gửi đi !']);    
        
    }
    public function getcate($cat)
    {
         $data_menu = Category::all();
    	if ($cat == 'mobile') {
            // mobile
            $mobile = DB::table('products')
                ->join('category', 'products.cat_id', '=', 'category.id')
                ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
                ->where('category.parent_id','=','1')
                ->select('products.*','pro_details.cpu','pro_details.ram','pro_details.screen','pro_details.vga','pro_details.storage','pro_details.exten_memmory','pro_details.cam1','pro_details.cam2','pro_details.sim','pro_details.connect','pro_details.pin','pro_details.os','pro_details.note')
                ->paginate(12);
    		return view('category.mobile',['data'=>$mobile]);
    	} 
        elseif ($cat == 'laptop') {
            // mobile
            $lap = DB::table('products')
                ->join('category', 'products.cat_id', '=', 'category.id')
                ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
                ->where('category.parent_id','=','2')
                ->select('products.*','pro_details.cpu','pro_details.ram','pro_details.screen','pro_details.vga','pro_details.storage','pro_details.exten_memmory','pro_details.cam1','pro_details.cam2','pro_details.sim','pro_details.connect','pro_details.pin','pro_details.os','pro_details.note')
                ->paginate(12);
            return view('category.laptop',['data'=>$lap]);
        }
        elseif ($cat == 'pc') {
            // mobile
        $pc = DB::table('products')
                ->join('category', 'products.cat_id', '=', 'category.id')
                ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
                ->where('category.parent_id','=','19')
                ->select('products.*','pro_details.cpu','pro_details.ram','pro_details.screen','pro_details.vga','pro_details.storage','pro_details.exten_memmory','pro_details.cam1','pro_details.cam2','pro_details.sim','pro_details.connect','pro_details.pin','pro_details.os','pro_details.note')
                ->paginate(8);
            return view('category.pc',['data'=>$pc]);
        }
        elseif ($cat == 'tin-tuc') {
            $new =  DB::table('news')
                    ->where('cat_id',35)
                    ->orderBy('created_at', 'desc')
                    ->paginate(3);
            $top1 = $new->shift();
             $all =  DB::table('news')
             ->where('cat_id',35)
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
            return view('tin-tuc',['data'=>$new,'hot1'=>$top1,'all'=>$all,'data_menu'=>$data_menu]);
        } 
        // else{
        //     return redirect()->route('index');
        // }
    }
    public function detail($cat,$id,$slug)
    {
         $data_menu = Category::all();
        if ($cat =='tin-tuc') {
            $new = News::where('id',$id)->first();
            return view('detail.news',['data'=>$new,'slug'=>$slug,'data_menu'=>$data_menu]);
        } elseif ($cat =='mobile') {
            $mobile = Products::where('id',$id)->first();
            if (empty($mobile)) {
                return view ('errors.503');
                } else {
                   return view ('detail.mobile',['data'=>$mobile,'slug'=>$slug]);
               }
        }
        elseif ($cat =='laptop') {
            $lap = Products::where('id',$id)->first();
            if (empty($lap)) {
            return redirect()->route('index');
            } else {
           return view ('detail.laptop',['data'=>$lap,'slug'=>$slug]);
            }
        }
        elseif ($cat =='detail') {
            $lap = Products::where('id',$id)->first();
            if (empty($lap)) {
            return redirect()->route('index');
            } else {
           return view ('detail.detail',['data'=>$lap,'slug'=>$slug,'data_menu'=>$data_menu]);
            }
        }
        elseif ($cat =='pc') {            
            $pc = Products::where('id',$id)->first();
            if (empty($pc)) {
                return redirect()->route('index');
            } else {
                return view ('detail.pc',['data'=>$pc,'slug'=>$slug]);
            }
        } else {
            return redirect()->route('index');
        }
    }
    public function getdanhmuc($id)
    {   

//print_r("123123");
       $pro_cat = Category::where('id',$id)->first();
      // dd($pro_cat);
        //$pro =  DB::table('products')
       //             ->where('cat_id',$id)
       //             ->orderBy('created_at', 'desc')
       //             ->paginate(12);
           $pro = DB::table('products')
                ->join('category', 'products.cat_id', '=', 'category.id')
               ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
                ->where('products.cat_id', '=', $id )
             ->select('products.*','pro_details.cpu','pro_details.ram','pro_details.screen','pro_details.vga','pro_details.storage','pro_details.exten_memmory','pro_details.cam1','pro_details.cam2','pro_details.sim','pro_details.connect','pro_details.pin','pro_details.os','pro_details.note','category.name_vi as namevi','category.name_en as nameen')
                ->paginate(12);           
         $data_menu = Category::all();
      //   dd($pro);
        return view ('danhmuc',['data_menu'=>$data_menu,'pro'=>$pro,'pro_cat'=>$pro_cat])
        ->with('slug','Chi tiết đơn hàng');
    }
    public function getvideo()
    {   

//print_r("123123");
       // $pro = Product::where('cat_id',$id)->paginate(12);
         $all =  DB::table('news')
             ->where('cat_id',34)
                    ->orderBy('created_at', 'desc')
                    ->paginate(3);
        $pro = array();
         $data_menu = Category::all();
        return view ('videolist',['data_menu'=>$data_menu,'pro'=>$pro,'all'=>$all])
        ->with('slug','Chi tiết đơn hàng');
    }
    public function getvideodetail($id)
    {   
        $pro =  DB::table('products')
                    ->where('cat_id',$id)
                    ->orderBy('created_at', 'desc')
                    ->paginate(1);
        $new = News::where('id',$id)->first();             
         $data_menu = Category::all();
        return view ('videodetail',['data_menu'=>$data_menu,'pro'=>$pro,'new'=>$new])
        ->with('slug','Chi tiết đơn hàng');
    }
     public function gettimkiem()
    {   
 $term = Input::get('q', false);

         $all =  DB::table('news')
             ->where('cat_id',34)
                    ->orderBy('created_at', 'desc')
                    ->paginate(3);
        $pro = array();
        $mobile = DB::table('products')
                ->join('category', 'products.cat_id', '=', 'category.id')
               ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
                ->where('products.name', 'LIKE', '%' . $term . '%')
             ->select('products.*','pro_details.cpu','pro_details.ram','pro_details.screen','pro_details.vga','pro_details.storage','pro_details.exten_memmory','pro_details.cam1','pro_details.cam2','pro_details.sim','pro_details.connect','pro_details.pin','pro_details.os','pro_details.note')
                ->paginate(12);
           //     dd($mobile);
       // $mobile = Products::where('name', 'LIKE', '%' . $term . '%');
         $data_menu = Category::all();
        return view ('timkiem',['data_menu'=>$data_menu,'pro'=>$pro,'all'=>$all,'data'=>$mobile,'timkiem'=>$term])
        ->with('slug','Chi tiết đơn hàng');
    }

    public function getme()
    {
        $data_menu = Category::all();
         if (Auth::guest()) {
          //  return redirect('login');
            return View ('me.me',['data_menu'=>$data_menu]);
        } else {


$id = Auth::user()->id;
          //data_order
          $data_user = User::where('id',$id)->first();
          
           // $data_order = Oders::where('c_id',$id);
             $data_order =  Oders::where('c_id',$id)
                    ->orderBy('created_at', 'desc')
                    ->paginate(3);
           // dd($id);
            return view ('me.melogin',['data_menu'=>$data_menu,'data_order'=>$data_order,'old'=>$data_user])
            ->with('slug','Xác nhận');
        }       

        
    }
      public function postedituser(Request $rq)
   {

$id = Auth::user()->id;

      $cat = User::find($id);


      $cat->name = $rq->name;
      $cat->email = $rq->email;
      $cat->phone = $rq->phone;
      $cat->address = $rq->address;
      $cat->updated_at = new DateTime;
      $cat->save();
      return redirect()->route('getme')
      ->with(['flash_level'=>'result_msg','flash_massage'=>'Đã cập nhật thông tin người dùng']);

   }
   public function changeLanguage($language)
    {
         \Session::put('website_language', $language);

    return redirect()->back();
    }
}

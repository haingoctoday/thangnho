<?php

 Route::auth();

// admin route 
Route::get('admin/login', ['as'  => 'getlogin', 'uses' =>'Admin\AuthController@showLoginForm']);
Route::post('admin/login', ['as'  => 'postlogin', 'uses' =>'Admin\AuthController@login']);
//Route::get('admin/password/reset', ['as'  => 'getreser', 'uses' =>'Admin\AuthController@email']);

Route::get('admin/logout', ['as'  => 'getlogin', 'uses' =>'Admin\AuthController@logout']);

//Route::get('/', ['as'  => 'index', 'uses' =>'PagesController@index']);

Route::group(['middleware' => 'locale'], function() {
   
    Route::get('change-language/{language}', 'PagesController@changeLanguage')->name('user.change-language');

    Route::get('/', ['as'  => 'index', 'uses' =>'PagesController@index']);

    Route::get('/user', 'HomeController@index');
    Route::get('/user/edit', 'HomeController@edit');
    Route::get('login', ['as'  => 'getlogin', 'uses' =>'Auth\AuthController@getLogin']);
    Route::get('/video-huong-dan', ['as'  => 'getvideo', 'uses' =>'PagesController@getvideo']);

    Route::get('/video-huong-dan/detail/{id}-{slug}', ['as'  => 'getvideodetail', 'uses' =>'PagesController@getvideodetail']);
    Route::get('/me', ['as'  => 'getme', 'uses' =>'PagesController@getme']);
    Route::post('edituser', ['as'  => 'postedituser', 'uses' =>'PagesController@postedituser']);
    // cart - oder
    Route::get('gio-hang', ['as'  => 'getcart', 'uses' =>'PagesController@getcart']);
    Route::get('tim-kiem', ['as'  => 'gettimkiem', 'uses' =>'PagesController@gettimkiem']);
    //http://localhost:8000/danh-muc
    // them vao gio hang
    Route::get('gio-hang/addcart/{id}', ['as'  => 'getcartadd', 'uses' =>'PagesController@addcart']);
    Route::get('gio-hang/update/{id}/{qty}-{dk}', ['as'  => 'getupdatecart', 'uses' =>'PagesController@getupdatecart']);
    Route::get('gio-hang/delete/{id}', ['as'  => 'getdeletecart', 'uses' =>'PagesController@getdeletecart']);
    Route::get('gio-hang/xoa', ['as'  => 'getempty', 'uses' =>'PagesController@xoa']);

    // tien hanh dat hang
    Route::get('dat-hang', ['as'  => 'getoder', 'uses' =>'PagesController@getoder']);
    Route::post('dat-hang', ['as'  => 'postoder', 'uses' =>'PagesController@postoder']);
    // category
    Route::get('/{cat}', ['as'  => 'getcate', 'uses' =>'PagesController@getcate']);
    Route::get('/{cat}/{id}-{slug}', ['as'  => 'getdetail', 'uses' =>'PagesController@detail']);
    //ngoc
    Route::get('/danh-muc/{id}', ['as'  => 'getdanhmuc', 'uses' =>'PagesController@getdanhmuc']);


    Route::resource('payment', 'PayMentController');
});

//me




// --------------------------------cac cong viec trong admin (back-end)--------------------------------------- 
Route::group(['middleware' => 'admin'], function () {
      Route::group(['prefix' => 'admin'], function() {
        
       	Route::get('/home', function() {         
         return view('back-end.home');       	
       });

               // -------------------- quan ly chuc nang----------------------
        Route::group(['prefix' => 'banners'], function() {
          
           Route::get('add',['as'        =>'getaddbanner','uses' => 'BannersController@getadd']);
           Route::post('add',['as'       =>'postaddbanner','uses' => 'BannersController@postadd']);

           Route::get('/',['as'       =>'getbanners','uses' => 'BannersController@getlist']);
           Route::get('del/{id}',['as'   =>'getdellcat','uses' => 'BannersController@getdel'])->where('id','[0-9]+');
           
           Route::get('edit/{id}',['as'  =>'geteditcat','uses' => 'BannersController@getedit'])->where('id','[0-9]+');
           Route::post('edit/{id}',['as' =>'posteditcat','uses' => 'BannersController@postedit'])->where('id','[0-9]+');
      });

               // -------------------- quan ly thong tin----------------------
        Route::group(['prefix' => 'info'], function() {
          
           Route::get('add',['as'        =>'getaddinfo','uses' => 'InfoController@getadd']);
           Route::post('add',['as'       =>'postaddinfo','uses' => 'InfoController@postadd']);

           Route::get('/',['as'       =>'getinfo','uses' => 'InfoController@getlist']);
           Route::get('del/{id}',['as'   =>'getdelinfo','uses' => 'InfoController@getdel'])->where('id','[0-9]+');
           
           Route::get('edit/{id}',['as'  =>'geteditinfo','uses' => 'InfoController@getedit'])->where('id','[0-9]+');
           Route::post('edit/{id}',['as' =>'posteditinfo','uses' => 'InfoController@postedit'])->where('id','[0-9]+');
      });
                       // -------------------- quan ly he thong cua hang----------------------
        Route::group(['prefix' => 'shopsys'], function() {
          
           Route::get('add',['as'        =>'getaddshopsys','uses' => 'ShopsystemController@getadd']);
           Route::post('add',['as'       =>'postaddshopsys','uses' => 'ShopsystemController@postadd']);

           Route::get('/',['as'       =>'getshopsys','uses' => 'ShopsystemController@getlist']);
           Route::get('del/{id}',['as'   =>'getdelshopsys','uses' => 'ShopsystemController@getdel'])->where('id','[0-9]+');
           
           Route::get('edit/{id}',['as'  =>'geteditshopsys','uses' => 'ShopsystemController@getedit'])->where('id','[0-9]+');
           Route::post('edit/{id}',['as' =>'posteditshopsys','uses' => 'ShopsystemController@postedit'])->where('id','[0-9]+');
      });
       // -------------------- quan ly danh muc----------------------
       	Route::group(['prefix' => 'danhmuc'], function() {
           Route::get('add',['as'        =>'getaddcat','uses' => 'CategoryController@getadd']);
           Route::post('add',['as'       =>'postaddcat','uses' => 'CategoryController@postadd']);

           Route::get('/',['as'       =>'getcat','uses' => 'CategoryController@getlist']);
           Route::get('del/{id}',['as'   =>'getdellcat','uses' => 'CategoryController@getdel'])->where('id','[0-9]+');
           
           Route::get('edit/{id}',['as'  =>'geteditcat','uses' => 'CategoryController@getedit'])->where('id','[0-9]+');
           Route::post('edit/{id}',['as' =>'posteditcat','uses' => 'CategoryController@postedit'])->where('id','[0-9]+');
    	});
         // -------------------- quan ly danh muc--------------------
        Route::group(['prefix' => '/sanpham'], function() {
           Route::get('/{loai}/add',['as'        =>'getaddpro','uses' => 'ProductsController@getadd']);
           Route::post('/{loai}/add',['as'       =>'postaddpro','uses' => 'ProductsController@postadd']);

           Route::get('/{loai}',['as'       =>'getpro','uses' => 'ProductsController@getlist']);
           Route::get('/del/{id}',['as'   =>'getdellpro','uses' => 'ProductsController@getdel'])->where('id','[0-9]+');
           
           Route::get('/{loai}/edit/{id}',['as'  =>'geteditpro','uses' => 'ProductsController@getedit'])->where('id','[0-9]+');
           Route::post('/{loai}/edit/{id}',['as' =>'posteditpro','uses' => 'ProductsController@postedit'])->where('id','[0-9]+');
      });
       // -------------------- quan ly danh muc-----------------------------
        Route::group(['prefix' => '/news'], function() {
           Route::get('/add',['as'        =>'getaddnews','uses' => 'NewsController@getadd']);
           Route::post('/add',['as'       =>'postaddnews','uses' => 'NewsController@postadd']);

           Route::get('/',['as'       =>'getnews','uses' => 'NewsController@getlist']);
           Route::get('/del/{id}',['as'   =>'getdellnews','uses' => 'NewsController@getdel'])->where('id','[0-9]+');
           
           Route::get('/edit/{id}',['as'  =>'geteditnews','uses' => 'NewsController@getedit'])->where('id','[0-9]+');
           Route::post('/edit/{id}',['as' =>'posteditnews','uses' => 'NewsController@postedit'])->where('id','[0-9]+');
      });
        // -------------------- quan ly đơn đặt hàng--------------------
        Route::group(['prefix' => '/donhang'], function() {;

           Route::get('/',['as'       =>'getpro','uses' => 'OdersController@getlist']);
           Route::get('/del/{id}',['as'   =>'getdeloder','uses' => 'OdersController@getdel'])->where('id','[0-9]+');
           
           Route::get('/detail/{id}',['as'  =>'getdetail','uses' => 'OdersController@getdetail'])->where('id','[0-9]+');
           Route::post('/detail/{id}',['as' =>'postdetail','uses' => 'OdersController@postdetail'])->where('id','[0-9]+');
      });
        // -------------------- quan ly thong tin khach hang--------------------
        Route::group(['prefix' => '/khachhang'], function() {;

           Route::get('/',['as'       =>'getmem','uses' => 'UsersController@getlist']);
           Route::get('/del/{id}',['as'   =>'getdelmem','uses' => 'UsersController@getdel'])->where('id','[0-9]+');
           
           Route::get('/edit/{id}',['as'  =>'geteditmem','uses' => 'UsersController@getedit'])->where('id','[0-9]+');
           Route::post('/edit/{id}',['as' =>'posteditmem','uses' => 'UsersController@postedit'])->where('id','[0-9]+');
      });
       // -------------------- quan ly thong nhan vien--------------------
        Route::group(['prefix' => '/nhanvien'], function() {;

           Route::get('/',['as'       =>'getnv','uses' => 'Admin_usersController@getlist']);
           Route::get('/del/{id}',['as'   =>'getdelnv','uses' => 'Admin_usersController@getdel'])->where('id','[0-9]+');
           
           Route::get('/edit/{id}',['as'  =>'geteditnv','uses' => 'Admin_usersController@getedit'])->where('id','[0-9]+');
           Route::post('/edit/{id}',['as' =>'posteditnv','uses' => 'Admin_usersController@postedit'])->where('id','[0-9]+');
      });
      // ---------------van de khac ----------------------
    });     
});
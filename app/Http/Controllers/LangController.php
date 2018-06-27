<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use Session;

  class LangController extends Controller
  {
      public function postLang($localea,Request $request)
      {
          Session::set('locale', $localea);
          return redirect()->back();
      }
  }
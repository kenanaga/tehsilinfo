<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    public function index(){
       $data['news']= News::orderBy('id','DESC')->simplePaginate(20);
        return view('front/index',$data);
    }

    public function singlepost($id){
        $data['news']= News::where('id',$id)->get();
        $data['related']= News::orderBy('id','DESC')->simplePaginate(3);
         return view('front/singlepost',$data);
     }


}

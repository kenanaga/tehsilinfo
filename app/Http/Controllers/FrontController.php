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
       $data['special']= News::where('category_id',12)->orderBy('created_at','Desc')->lazy();
       $data['news']= News::orderBy('id','DESC')->simplePaginate(20);
        return view('front/index',$data);
    }

    public function singlepost($id){
        $data['news']= News::where('id',$id)->get();
        $datas=News::where('id',$id)->first();
        $data['pspecial']= News::where('category_id',12)->orderBy('created_at','Desc')->lazy();
        $data['related']= News::where('category_id',$datas->category_id)->orderBy('created_at','Desc')->lazy();
         return view('front/singlepost',$data);
     }

    public function category($cat){
        $data['pspecial']= News::where('category_id',12)->orderBy('created_at','Desc')->lazy()->skip(0)->take(2);
        $id=Category::where('slug',$cat)->first();
        $data['cnews']= News::where('category_id',$id->id)->orderBy('created_at','Desc')->simplePaginate(20);
        return view('front/categorynews',$data);
    } 


}

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

class AuthController extends Controller
{   

    public function adminindex(){
        $data['categories']=Category::all();
        return view('admin/adminindex',$data);
    }

    public function post(){
        $datanews['news']=News::all();
        return view('admin/post',$datanews);
    }

    public function addPost(Request $request){

        $validated = $request->validate([
            'title'   => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $path = public_path('public/upload');
        $file = $request->file('image');
        $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
        $file->move($path, $fileName);

        DB::table('news')->insert([
            'title'   => $request->input('title'),
            'content' =>  $request->input('content'),
            'image'   => $fileName,
            'slug'    => Str::slug($request->title),
            'user_id' => $request->input('user_id'),
            'category_id' =>  $request->input('category'),
            'hit'=>'1',
            'created_at' =>date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        return redirect()->route('admin.index');
        return back()->withErrors('');
    }

    public function login(){
        return view('admin/login');
    }
    
    public function loginPost(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('adminindex');
        }

        return back()->withErrors([
            'email' => 'Email və ya şifrə yanlışdır',
        ])->onlyInput('email');


    }


    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}

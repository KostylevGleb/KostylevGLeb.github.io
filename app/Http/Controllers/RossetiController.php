<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RossetiController extends Controller
{
    public function docallShow(){
        return view('docall',['documents'=>Document::all()]);
    }
    public function docindustryShow(){
        $docind = DB::table('documents')->where('category_id', '=', '2')->get();
        return view('docindustry',['documents'=>$docind]);
    }
    public function doccorporateShow(){
        $docind = DB::table('documents')->where('category_id', '=', '1')->get();
        return view('doccorporate',['documents'=>$docind]);
    }
    public function addUser(Request $request){
        $params = $request->all();
        DB::table('users')->insert([
            'name' => $params['name'],
            'login' => $params['login'],
            'password' => Hash::make($params['password'])
        ]);
        return redirect()->route('home');
    }
    public function addUserShow(){
       return view('adduser');
    }
    public function about(){
        return view('about');
    }
}

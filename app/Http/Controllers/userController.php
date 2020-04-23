<?php

namespace App\Http\Controllers;

use App\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class userController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('user')) return $next($request);
            abort(403,'anda tidak memiliki cukup hak akses');
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function beranda()
    {
        $title='User';
        $Pelanggan=Pelanggan::paginate(20);
        return view('user.beranda',compact('title', 'Pelanggan'));
    }

}

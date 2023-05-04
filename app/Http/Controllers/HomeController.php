<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\addcompany;



class HomeController extends Controller
{
    /**
     * 
     *
     * @return void
     */
   public function __construct()
   {
       $this->middleware('auth');
   }
 
   /**
    * 
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function index()
   {
       return view('home');
   }
 
   /**
    * 
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
   public function adminHome()
   {
    $fm = addcompany::all();
       return view('adminHome',compact('fm'));
   }
}

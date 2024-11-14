<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TesteController extends Controller
{
   public function testar(){
    return view('teste');
   }

   public function galeria(){
    return view('galeria');
   }

   public function faleconosco(){
    return view('faleconosco');
   }

   public function home(){
    return view('home');
   }

}

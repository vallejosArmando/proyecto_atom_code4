<?php

namespace App\Controllers;

class Prueba extends BaseController
{
    public function index()
    {
      //  return view('welcome_message');
      echo "esto es la funcion index";
    }
    public function test(){
      echo"es la funcion test";
    }
    public function test2(){
      echo"es la funcion test2";
    }
}

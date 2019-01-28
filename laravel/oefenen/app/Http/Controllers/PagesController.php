<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function product()
   {
    return view('product', [
        'foo' => 'foobar',
        'tasks' =>['some tasks']
    ]);
   }

   public function home()
   {
    return view('welcome');
   }
}

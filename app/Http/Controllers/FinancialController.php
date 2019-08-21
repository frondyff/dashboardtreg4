<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Financial;

class FinancialController extends Controller
{
   public function daftar(Request $req){
     	$data=Financial::all();
     return view('admin.pages.financial',['data'=>$data]);
   }

}

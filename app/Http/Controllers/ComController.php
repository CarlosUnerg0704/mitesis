<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ComController extends Controller
{
    public function leer(){
    	$leer = DB::selectOne("SELECT * FROM [192.168.1.105].[erpcom].[dbo].[usuario]");
    	dd($leer);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ComController extends Controller
{
    public function leer(){
    	$leer = DB::select("select cab.SOPTYPE, cab.SOPNUMBE, 'J000000000', cab.CUSTNMBR, cab.DOCDATE, cab.SUBTOTAL, cab.TAXAMNT, cab.DOCAMNT
			from [TWO].[dbo].[SOP30200] as cab
			where  CAB.SOPTYPE = 3");
    	
    	dd($leer);
    }
}

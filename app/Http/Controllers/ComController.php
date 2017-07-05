<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use AUTH;
use App\Cabecera;
use Session;


class ComController extends Controller
{
	
    public function leer(Request $request){
    	
    	$leer = DB::select("select cab.SOPTYPE, cab.CUSTNAME, cab.SOPNUMBE, cab.TXRGNNUM, cab.DOCDATE, cab.SUBTOTAL, cab.TAXAMNT, cab.DOCAMNT
			from [192.168.1.111].[TWO].[dbo].[SOP30200] as cab
			where  CAB.SOPTYPE = 3");
    	
    	foreach($leer as $cab){
    		$vali = null;
    		$vali = DB::select("select [nro_doc] from [test1].[dbo].[cabecera_doc] where nro_doc = ?  ",array($cab->SOPNUMBE));
    		
    		if($vali <> null){  
    			$a = $vali[0]->nro_doc;
    			$a1= $cab->SOPNUMBE;
    		
    		if($a <> $a1){
    			$cabecera = new Cabecera;
	    		$cabecera->tipo = $cab->SOPTYPE;
	    		$cabecera->nom_cliente = $cab->CUSTNAME;
	    		$cabecera->nom_proveedor = $request->get('empresa');    		
	    		$cabecera->nro_doc = $cab->SOPNUMBE;
	    		$cabecera->rif_cliente = $cab->TXRGNNUM;
	    		$cabecera->fecha = $cab->DOCDATE;
	    		$cabecera->subtotal = $cab->SUBTOTAL;
	    		$cabecera->impuesto = $cab->TAXAMNT;
	    		$cabecera->total = $cab->DOCAMNT;	    		
	    		$cabecera->save();
	    		Session::flash('messages','Los Datos se han Actualizado Correctamente');    		
    		}else{
    			Session::flash('messages','Los Datos se han Actualizado Correctamente');
    		} 
    			
    		}else{
				$cabecera = new Cabecera;
	    		$cabecera->tipo = $cab->SOPTYPE;
	    		$cabecera->nom_cliente = $cab->CUSTNAME;
	    		$cabecera->nom_proveedor = $request->get('empresa');    		
	    		$cabecera->nro_doc = $cab->SOPNUMBE;
	    		$cabecera->rif_cliente = $cab->TXRGNNUM;
	    		$cabecera->fecha = $cab->DOCDATE;
	    		$cabecera->subtotal = $cab->SUBTOTAL;
	    		$cabecera->impuesto = $cab->TAXAMNT;
	    		$cabecera->total = $cab->DOCAMNT;	    		
	    		$cabecera->save();    			
    			Session::flash('messages','La primera factura se ha guardado exitosamente');	
    			
    			
    		}
    		
    		
    	}
    	   	
    	return view('home');
    	
    }
}

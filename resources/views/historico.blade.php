@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Historico</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>                                        
                                        <th>Tipo</th>
                                        <th>Numero de Control</th>
                                        <th>Numero de Documento</th>
                                        <th>Rif Proveedor</th>
                                        <th>Rif Cliente</th>
                                        <th>Fecha</th>
                                        <th>SubTotal</th>
                                        <th>Impuesto</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cabecera_doc as $cabecera)
                                    <tr class="gradeX">
                                        <td>{{$cabecera->tipo}}</td>
                                        <td>{{$cabecera->nro_control}}</td>
                                        <td>{{$cabecera->nro_doc}}</td>
                                        <td>{{$cabecera->rif_proveedor}}</td>
                                        <td>{{$cabecera->rif_cliente}}</td>
                                        <td>{{$cabecera->fecha}}</td>
                                        <td>{{$cabecera->subtotal}}</td>
                                        <td>{{$cabecera->impuesto}}</td>
                                        <td>{{$cabecera->total}}</td>
                                    </tr>
                                    @endforeach
                                    
                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>

@endsection
@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Historial de pruebas en pacientes</h3></div>
          <div class="pull-right">
          <div class="btn-group">
              <a href="{{ route('paciente.index') }}" class="btn btn-warning" >REGRESAR</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>id</th>
               <th>Nombre</th>
               <th>Apellido paterno</th>
               <th>Fecha de la prueba</th>
               <th>Resultado de la prueba</th>
               <th>Lugar</th>
             </thead>
             <tbody>
              @if($pacientesHasPruebas->count())  
              @foreach($pacientesHasPruebas as $paciente)  
              <tr>
                <td>{{$paciente->id}}</td>
                <td>{{$paciente->paciente['nombre']}}</td>
                <td>{{$paciente->paciente['apellido_p']}}</td>
                <td>{{$paciente->prueba['fecha']}}</td>
                @if($paciente->prueba['resultado'] == 1)
                    <td>POSITIVO</td>
                @else
                    <td>NEGATIVO</td>
                @endif
                <td>{{$paciente->prueba->catalogo['tipo']}}</td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
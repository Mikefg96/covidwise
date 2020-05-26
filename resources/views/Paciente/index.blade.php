@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista de pacientes</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a style="margin-right: 15px;" href="/paciente/historial" class="btn btn-info" >Ver historial</a>
              <a href="{{ route('paciente.create') }}" class="btn btn-success" >Añadir paciente</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>id</th>
               <th>Nombre</th>
               <th>Apellido paterno</th>
               <th>Apellido materno</th>
               <th>Género</th>
               <th>Edad</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($pacientes->count())  
              @foreach($pacientes as $paciente)  
              <tr>
                <td>{{$paciente->id}}</td>
                <td>{{$paciente->nombre}}</td>
                <td>{{$paciente->apellido_p}}</td>
                <td>{{$paciente->apellido_m}}</td>
                @if($paciente->genero == '1')
                    <td>Hombre</td>
                @else
                    <td>Mujer</td>
                @endif
                <td>{{$paciente->edad}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('PacienteController@edit', $paciente->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('PacienteController@destroy', $paciente->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>
          </table>
          <p>*Al eliminar un paciente, se eliminará su historial de pruebas de igual manera.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
<?php

namespace App\Http\Controllers;

use App\Prueba;
use App\Paciente;
use App\PacienteHasPrueba;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function historial()
    {
        $pacientesHasPruebas = PacienteHasPrueba::with('paciente', 'prueba', 'prueba.catalogo')->get();
        return view('Paciente.historial', compact('pacientesHasPruebas')); 
    }

    public function index()
    {
        //
        $pacientes = Paciente::orderBy('id', 'ASC')->get();
        return view('Paciente.index', compact('pacientes')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Paciente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nombre'=>'required',
            'apellido_p'=>'required',
            'apellido_m'=>'required',
            'genero'=>'required',
            'edad'=>'required',
        ]);
        Paciente::create($request->all());
        return redirect()->route('paciente.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $paciente = Paciente::find($id);
        return view('paciente.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'nombre'=>'required',
            'apellido_p'=>'required',
            'apellido_m'=>'required',
            'genero'=>'required',
            'edad'=>'required',
        ]);

        Paciente::find($id)->update($request->all());
        return redirect()->route('paciente.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // PacienteHasPrueba::where('idPaciente', '=', $id)->delete();
        Paciente::find($id)->delete();
        return redirect()->route('paciente.index')->with('success','Registro eliminado satisfactoriamente');
    }
}

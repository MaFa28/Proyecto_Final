<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Mascota;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');///->except('index','show');
        //only('create');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Auth::user()->citas;
        //$citas = Cita::all();
        return view('vistascitas.index',compact('citas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $mascotas = Mascota::all();
        return view('vistascitas.citas', compact('mascotas'));
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
        $request->validate([
            'nombre' => 'required|max:255',
            'correo' => 'required',
            'telefono' => 'required|max:20',
            'tipomascota' => 'required|max:20|min:3',
            'raza' => 'required|max:20|min:3',
            'comentario' => 'required',
        ]);

        $request->merge(['user_id' => Auth::id()]);
        $cita=Cita::create($request->all());

        $cita->mascotas()->attach($request->mascota_id);

        return redirect('/citas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        //
        return view('vistascitas.citasShow',compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        Gate::authorize('editar-cita', $cita);
        return view('vistascitas.citasEdit',compact('cita'));
    }
     /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        //
        $request->validate([
            'nombre' => 'required|max:255',
            'correo' => 'required',
            'telefono' => 'required|max:20',
            'tipomascota' => 'required|max:20|min:3',
            'raza' => 'required|max:20|min:3',
            'comentario' => 'required',
        ]);

        Cita::where('id', $cita->id)->update($request->except('_token','_method'));

        return redirect('/citas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        //
        //$this->authorize('delete',$cita);
        $cita->mascotas()->detach();
        $cita->delete();
        return redirect('/citas');
    }
}

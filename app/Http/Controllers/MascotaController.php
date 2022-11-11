<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MascotaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$mascotas = Auth::user()->citas;
        $mascotas = Mascota::all();
        return view('vistasmascota.index',compact('mascotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vistasmascota.mascotas');
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
            'tipomascota' => 'required|max:20|min:3',
            'raza' => 'required|max:20|min:3',
            'edad' => 'required',
        ]);

        //$request->merge(['user_id' => Auth::id()]);
        Mascota::create($request->all());

        return redirect('/mascotas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        //
        return view('vistasmascota.mascotasShow',compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit(Mascota $mascota)
    {
        //
        return view('vistasmascota.mascotasEdit',compact('mascota'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascota $mascota)
    {
        //
        $request->validate([
            'nombre' => 'required|max:255',
            'tipomascota' => 'required|max:20|min:3',
            'raza' => 'required|max:20|min:3',
            'edad' => 'required',
        ]);

        Mascota::where('id', $mascota->id)->update($request->except('_token','_method'));

        return redirect('/mascotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
        //
        $mascota->delete();
        return redirect('/mascotas');
    }
}

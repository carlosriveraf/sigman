<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nivel;
use App\Models\Seccion;


class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $salones = Nivel::all();
        $secciones = Seccion::all();

        /* return view('administrador.salon-index', $salones); */
        /* return view('administrador.salon-index', compact('salones')); */
        return view('administrador.salon-index', ['salones' => $salones, 'secciones' => $secciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seccion = new Seccion;
        $seccion->nivel = $request->nivel;
        $nextLetter = chr(ord($request->lastLetter) + 1);
        $seccion->letra = $nextLetter;
        $seccion->save();
        return back();
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $secciones = Seccion::where('nivel', $id)->get();
        
        if ($secciones->count() > 1) {
            $lastSeccion = $secciones->last();
            $deleteSeccion = Seccion::where([
                ['nivel', '=', $id],
                ['letra', '=', $lastSeccion->letra]
            ])->delete();

            
        }

        return back();
        
    }
}

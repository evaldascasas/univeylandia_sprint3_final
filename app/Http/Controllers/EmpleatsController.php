<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\dades_empleat;

class EmpleatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $dades_empleats = dades_empleat::all();

    return view('gestio/empleats/index', compact('dades_empleats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gestio/empleats/create');
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
        
        $dadesEmpleat = new dades_empleat([
            'codi_seg_social' => $request->get('codi_seg_social'),
            'num_nomina' => $request->get('num_nomina'),
            'IBAN' => $request->get('IBAN'),
            'especialitat' => $request->get('especialitat'),
            'carrec' => $request->get('carrec'),
            'data_inici_contracte' => $request->get('data_inici_contracte'),
            'data_fi_contracte' => $request->get('data_fi_contracte'),
            'id_horari' => $request->get('id_horari')
        ]);
        $dadesEmpleat->save();

        return view('gestio/empleats/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dades_empleats = dades_empleat::findOrFail($id);

        return view('gestio/empleats/show', compact("dades_empleats"));
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dades_empleats = dades_empleat::findOrFail($id);

        return view('gestio/empleats/edit', compact("dades_empleats"));
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
         $dades_empleats = dades_empleat::findOrFail($id);

         $dades_empleats->update($request->all());
        return redirect('gestio/empleats/');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dades_empleats = dades_empleat::findOrFail($id);
        $dades_empleats->delete();
        return redirect('gestio/empleats/');
    }
}

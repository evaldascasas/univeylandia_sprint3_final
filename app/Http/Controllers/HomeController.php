<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Incidencia;
use \App\PrioritatIncidencia;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Add Verified middleware
        //$this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function noticies()
    {
      return view('noticies');
    }
  
    public function promocions()
    {
      return view("promocions");
    }
    
    public function atraccions()
    {
      return view("atraccions");
    }
  
    public function entrades()
    {
      return view("entrades");
    }
  
    public function login()
    {
      return view("login");
    }
  
    public function contacte()
    {
      return view("contacte");
    }
  
    public function gestio()
    {
      return view("gestio/index");
    }

    public function perfil()
    {
      return view('perfil');
    }

    public function incidencia()
    {
      $prioritats = PrioritatIncidencia::all();

      return view('incidencia', compact('prioritats'));
    }

        /**
     * Store a newly created client resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_incidencia(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'priority' => 'required|integer'
        ]);

        $user = Auth::user();

        $incidencia = new Incidencia([
            'titol' => $request->get('title'),
            'descripcio' => $request->get('description'),
            'id_prioritat' => $request->get('priority'),
            'id_estat' => 1,
            'id_usuari_reportador' => $user->id,
        ]);
        
        $incidencia->save();

        return redirect('incidencia')->with('success', 'Incidència reportada correctament');
    }
}

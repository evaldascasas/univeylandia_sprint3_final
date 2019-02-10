<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    
    public function atraccions(){
      $atraccionetes = DB::table('tipus_atraccions')
      ->join('atraccions', 'atraccions.tipus_atraccio', '=', 'tipus_atraccions.id')
      ->get([
        'tipus_atraccions.tipus as nom',
        'tipus_atraccions.id as id_tipus',
        'atraccions.nom_atraccio',
        'atraccions.tipus_atraccio',
        'atraccions.data_inauguracio',
        'atraccions.altura_min',
        'atraccions.altura_max',
        'atraccions.accessibilitat',
        'atraccions.acces_express',
        'atraccions.id',
        'atraccions.path',
        'atraccions.descripcio'

      ]);

      return view("atraccions", compact('atraccionetes'));
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use \App\dades_empleat;
use \App\User;

class EmpleatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //$dades_empleats = dades_empleat::all();
    $users = User::whereNotNull('email_verified_at')
                          ->where('id_rol','!=',1)
                          ->whereNotNull('id_dades_empleat')
                          ->leftJoin('dades_empleats','dades_empleats.id','users.id_dades_empleat')
                          ->leftJoin('rols','rols.id','users.id_rol')
                          ->leftJoin('horaris', 'horaris.id', 'dades_empleats.id_horari')
                          ->get([
                            'users.id',
                            'users.nom',
                            'users.cognom1',
                            'users.cognom2',
                            'users.email',
                            'users.password',
                            'users.data_naixement',
                            'users.adreca',
                            'users.ciutat',
                            'users.provincia',
                            'users.codi_postal',
                            'users.tipus_document',
                            'users.numero_document',
                            'users.sexe',
                            'users.telefon',
                            'users.cognom2',
                            'users.id_rol',
                            

                            'dades_empleats.codi_seg_social as codi_seg_social',
                            'dades_empleats.num_nomina as num_nomina',
                            'dades_empleats.IBAN as IBAN',
                            'dades_empleats.especialitat as especialitat',
                            'dades_empleats.carrec as carrec',
                            'dades_empleats.data_inici_contracte as data_inici_contracte',
                            'dades_empleats.data_fi_contracte as data_fi_contracte',
                            'dades_empleats.id_horari as id_horari',


                          ]);
    
    return view('gestio/empleats/index', compact('users'));
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

        $usuari = new User([
            'nom' => $request->get('nom'),
            'cognom1' => $request->get('cognom1'),
            'cognom2' => $request->get('cognom2'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
            'data_naixement' => $request->get('data_naixement'),
            'adreca' => $request->get('adreca'),
            'ciutat' => $request->get('ciutat'),
            'provincia' => $request->get('provincia'),
            'codi_postal' => $request->get('codi_postal'),
            'tipus_document' => $request->get('tipus_document'),
            'numero_document' => $request->get('numero_document'),
            'sexe' => $request->get('sexe'),
            'telefon' => $request->get('telefon'),
            'id_rol' => $request->get('id_rol'),
            'id_dades_empleat' => ($dadesEmpleat->id),
            'actiu' => 1
        ]);
        $usuari->save();


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

        $user = User::findOrFail($id);

        $dades = dades_empleat::find($user->id_dades_empleat);

       
        return view('gestio/empleats/show', compact(['user','dades']));
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::findOrFail($id);
        $dades = dades_empleat::find($user->id_dades_empleat);

        return view('gestio/empleats/edit', compact(['user','dades']));
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
         $user = User::findOrFail($id);
        $user->nom = $request->get('nom');
        $user->cognom1 = $request->get('cognom1');
        $user->cognom2 = $request->get('cognom2');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->data_naixement = $request->get('data_naixement');
        $user->adreca = $request->get('adreca');
        $user->ciutat = $request->get('ciutat');
        $user->provincia = $request->get('provincia');
        $user->codi_postal = $request->get('codi_postal');
        $user->tipus_document = $request->get('tipus_document');
        $user->numero_document = $request->get('numero_document');
        $user->sexe = $request->get('sexe');
        $user->telefon = $request->get('telefon');
        $user->id_rol = $request->get('id_rol');
        $user->save();

        $dades = dades_empleat::find($user->id_dades_empleat);
        $dades->codi_seg_social = $request->get('codi_seg_social');
        $dades->num_nomina = $request->get('num_nomina');
        $dades->IBAN = $request->get('IBAN');
        $dades->especialitat = $request->get('especialitat');
        $dades->carrec = $request->get('carrec');
        $dades->data_inici_contracte = $request->get('data_inici_contracte');
        $dades->data_fi_contracte = $request->get('data_fi_contracte');
        $dades->id_horari = $request->get('id_horari');
        $dades->save();

        $user->update($request->all());
        $dades->update($request->all());
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

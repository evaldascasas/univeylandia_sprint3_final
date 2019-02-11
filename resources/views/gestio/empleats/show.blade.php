@extends("layouts.gestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("body")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Gestio d'Empleats - Mostrar dades</h1>
          </div>

          <form method="post" action="">
            @csrf
            <h3 class="h3">Dades Generals</h3>
            <div class="form-group">
                <div class="col-md-6 mb-3">
                  <label for="nom">Nom: </label>
                  <input type="text" class="form-control form-control-sm" name="nom" value="{{ $user->nom }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cognom1">Cognom1: </label>
                  <input type="text" class="form-control form-control-sm" name="cognom1" value="{{ $user->cognom1 }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cognom2">Cognom2: </label>
                  <input type="text" class="form-control form-control-sm" name="cognom2" value="{{ $user->cognom2 }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="email">Email: </label>
                  <input type="text" class="form-control form-control-sm" name="email" value="{{ $user->email }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="password">passwd: </label>
                  <input type="text" class="form-control form-control-sm" name="password" value="{{ $user->password }}">
                </div>
           
                <div class="col-md-6 mb-3">
                  <label for="data_naixement">data_naixement: </label>
                  <input type="date" class="form-control form-control-sm" name="data_naixement" value="{{ $user->data_naixement }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="adreca">adreça: </label>
                  <input type="text" class="form-control form-control-sm" name="adreca" value="{{ $user->adreca }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="ciutat">ciutat: </label>
                  <input type="text" class="form-control form-control-sm" name="ciutat" value="{{ $user->ciutat }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="provincia">Provincia: </label>
                  <input type="text" class="form-control form-control-sm" name="provincia" value="{{ $user->provincia }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="codi_postal">codi_postal: </label>
                  <input type="text" class="form-control form-control-sm" name="codi_postal" value="{{ $user->codi_postal }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="tipus_document">tipus_document: </label>
                  <input type="text" class="form-control form-control-sm" name="tipus_document" value="{{ $user->tipus_document }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="numero_document">numero_document: </label>
                  <input type="text" class="form-control form-control-sm" name="numero_document" value="{{ $user->numero_document }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="sexe">sexe: </label>
                  <input type="text" class="form-control form-control-sm" name="sexe" value="{{ $user->sexe }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="telefon">telefon: </label>
                  <input type="text" class="form-control form-control-sm" name="telefon" value="{{ $user->telefon }}">
                </div>

                <div class="col-md-6 mb-3">
                  <label for="id_rol">ID ROL: </label>
                  <input type="text" class="form-control form-control-sm" name="id_rol" value="{{ $user->id_rol }}">
                </div>
               




                <h3 class="h3">Dades Empleats</h3>
                <div class="col-md-6 mb-9">
                  <label for="codi_seg_social">codi_seg_social: </label>
                    <input type="text" class="form-control form-control-sm" name="codi_seg_social" value="{{ $dades->codi_seg_social }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="num_nomina">Num nomina: </label>
                    <input type="text" class="form-control" id="num_nomina" name="num_nomina" value="{{ $dades->num_nomina }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="iban">IBAN: </label>
                    <input type="text" class="form-control" id="IBAN" name="IBAN" value="{{ $dades->IBAN }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="especialitat">especialitat: </label>
                    <input type="text" class="form-control" id="especialitat" name="especialitat" value="{{ $dades->especialitat }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="carrec">carrec: </label>
                    <input type="text" class="form-control" id="carrec" name="carrec" value="{{ $dades->carrec }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="date_inici_contracte">Data inici contracte: </label>
                    <input type="date" class="form-control" name="data_inici_contracte" value="{{ $dades->data_inici_contracte }}">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="date_fi_contracte">Data fi contracte: </label>
                  <input type="date" class="form-control form-control-sm" name="data_fi_contracte" value="{{ $dades->data_fi_contracte }}">
                </div>

                <div class="col-md-6 mb-3">
                  <label for="date_fi_contracte">Horari: </label>
                  <input type="text" class="form-control form-control-sm" name="id_horari" value="{{ $dades->id_horari }}">
                </div>
              </div>
         </form>
        </main>
@endsection

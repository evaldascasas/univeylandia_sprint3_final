@extends("layouts.gestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("body")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Gestio d'Empleats - Inserir</h1>
          </div>

          <form method="post" action="{{ route('empleats.store') }}">
            @csrf
            <h3 class="h3">Dades Generals</h3>
            <div class="form-group">
                <div class="col-md-6 mb-3">
                  <label for="nom">Nom: </label>
                  <input type="text" class="form-control form-control-sm" name="nom">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cognom1">Cognom1: </label>
                  <input type="text" class="form-control form-control-sm" name="cognom1">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="cognom2">Cognom2: </label>
                  <input type="text" class="form-control form-control-sm" name="cognom2">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="email">Email: </label>
                  <input type="text" class="form-control form-control-sm" name="email">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="password">passwd: </label>
                  <input type="text" class="form-control form-control-sm" name="password">
                </div>
           
                <div class="col-md-6 mb-3">
                  <label for="data_naixement">data_naixement: </label>
                  <input type="date" class="form-control form-control-sm" name="data_naixement">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="adreca">adreça: </label>
                  <input type="text" class="form-control form-control-sm" name="adreca">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="ciutat">ciutat: </label>
                  <input type="text" class="form-control form-control-sm" name="ciutat">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="provincia">Provincia: </label>
                  <input type="text" class="form-control form-control-sm" name="provincia">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="codi_postal">codi_postal: </label>
                  <input type="text" class="form-control form-control-sm" name="codi_postal">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="tipus_document">tipus_document: </label>
                  <input type="text" class="form-control form-control-sm" name="tipus_document">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="numero_document">numero_document: </label>
                  <input type="text" class="form-control form-control-sm" name="numero_document">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="sexe">sexe: </label>
                  <input type="text" class="form-control form-control-sm" name="sexe">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="telefon">telefon: </label>
                  <input type="text" class="form-control form-control-sm" name="telefon">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="id_rol">Rol del treballador: </label>
                    <select class="form-control" name="id_rol" id="rol">
                        <option value="2">Gerent</option>
                        <option value="3">Treballador</option>
                    </select>
                </div>




                <h3 class="h3">Dades Empleats</h3>
                <div class="col-md-6 mb-9">
                  <label for="codi_seg_social">codi_seg_social: </label>
                  <input type="text" class="form-control form-control-sm" name="codi_seg_social">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="num_nomina">Num nomina: </label>
                    <input type="text" class="form-control" id="num_nomina" name="num_nomina">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="iban">IBAN: </label>
                    <input type="text" class="form-control" id="IBAN" name="IBAN">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="especialitat">especialitat: </label>
                    <input type="text" class="form-control" id="especialitat" name="especialitat">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="carrec">carrec: </label>
                    <input type="text" class="form-control" id="carrec" name="carrec">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="date_inici_contracte">Data inici contracte: </label>
                    <input type="date" class="form-control" name="data_inici_contracte">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="date_fi_contracte">Data fi contracte: </label>
                  <input type="date" class="form-control form-control-sm" name="data_fi_contracte">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="horari">Horari: </label>
                    <select class="form-control" name="id_horari" id="horari">
                        <option value="1">Mati</option>
                        <option value="2">Tarda</option>
                        <option value="3">Nit</option>
                    </select>
                </div>
              </div>
            <button class="btn btn-primary" type="submit" value="Crear">Crear</button>
            <button class="btn btn-secondary" type="reset" value="Cencel·lar">Cancel·lar</button>
         </form>
        </main>
@endsection

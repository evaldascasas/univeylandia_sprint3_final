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
              <div class="form-group">
                <div class="col-md-6 mb-3">
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
                  <label for="horari">date_fi_contracte: </label>
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

@extends("layouts.gestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("body")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Gestio d'Empleats - Modificar (acualitzar)</h1>
          </div>

          <form method="post" action="/gestio/empleats/">
            @method('PUT')
            @csrf
              <div class="form-group">
                <div class="col-md-6 mb-3">
                  <label for="codi_seg_social">codi_seg_social: </label>
                  <input type='text' class='form-control form-control-sm' name='codi_seg_social' value='{{$dades_empleats->codi_seg_social}}'>

                </div>
                <div class="col-md-6 mb-3">
                  <label for="num_nomina">Num nomina: </label>
                    <input type="text" class="form-control" id="num_nomina" name="num_nomina" value='{{$dades_empleats->num_nomina}}'>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="iban">IBAN: </label>
                    <input type="text" class="form-control" id="IBAN" name="IBAN" value='{{$dades_empleats->IBAN}}'>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="especialitat">especialitat: </label>
                    <input type="text" class="form-control" id="especialitat" name="especialitat" value='{{$dades_empleats->especialitat}}'>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="carrec">carrec: </label>
                    <input type="text" class="form-control" id="carrec" name="carrec" value='{{$dades_empleats->carrec}}'>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="date_inici_contracte">Data inici contracte: </label>
                    <input type="date" class="form-control" name="data_inici_contracte" value='{{$dades_empleats->data_inici_contracte}}'>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="date_fi_contracte">Data fi contracte: </label>
                  <input type="date" class="form-control form-control-sm" name="data_fi_contracte" value='{{$dades_empleats->data_fi_contracte}}'>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="horari">date_fi_contracte: </label>
                    <select class="form-control" name="id_horari" id="horari" value='{{$dades_empleats->id_horari}}'>
                        <option value="1">Mati</option>
                        <option value="2">Tarda</option>
                        <option value="3">Nit</option>
                    </select>
                </div>
              </div>
            <button class="btn btn-primary" type="submit" value="Modificar">Modificar</button>
            <button class="btn btn-primary" type="reset" value="Borrar els camps">Borrar camps</button>
            <button class="btn btn-secondary" type="reset" value="Cancel·lar">Cancel·lar</button>
         </form>
        </main>
@endsection

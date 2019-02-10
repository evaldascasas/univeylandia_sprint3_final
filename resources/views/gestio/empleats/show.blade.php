@extends("layouts.gestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("body")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <style>
      .uper {
        margin-top: 40px;
      }
    </style>
    <div class="uper d-none">
      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div>
      @endif
    </div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Administrar Empleats SHOW</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary" value="Exportar">
                  <span data-feather="save"></span>
                  Exportar
                </button>
              </div>
            </div>
          </div>

            <h1>{{$dades_empleat->especialitat}}<h1>

    </div>
   </main>
@endsection

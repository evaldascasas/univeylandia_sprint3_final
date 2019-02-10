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
            <h1 class="h2">Administrar Empleats</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary" value="Exportar">
                  <span data-feather="save"></span>
                  Exportar
                </button>
              </div>
            </div>
          </div>

            <form method="post" style="margin-top=50px;">
              <div class="form-row">
                <div class="col-10">
                  <input class="form-control" type="text" name="busqueda_habitacio" placeholder="Filtrar...">
                </div>
                <div class="form-group row">
                  <div class="offset-sm-2 col-sm-10">
                    <input type="submit" class="btn btn-primary" name="buscar_habitacio" value="Filtrar">
                  </div>
                </div>
              </div>
            </form>

            <div class="table-responsive">
                <table class="table table-bordered table-hover table-sm">
                    <thead class="thead-light">
                        <tr>
                        <th>ID</th>
                        <th>Codi Seg Social</th>
                        <th>Num nomina</th>
                        <th>IBAN</th>
                        <th>Especialitat</th>
                        <th>Carrec</th>
                        <th>Data Inici</th>
                        <th>Data Fi</th>
                        <th>Horari</th>
                        <th colspan="2">Acció</th>
                        </tr>
                    </thead>
                <tbody>

                    @foreach($dades_empleats as $dades_empleat)
                    <tr>
                        <td>{{ $dades_empleat->id }}</td>
                        <td>{{ $dades_empleat->codi_seg_social }}</td>
                        <td>{{ $dades_empleat->num_nomina }}</td>
                        <td>{{ $dades_empleat->IBAN }}</td>
                        <td>{{ $dades_empleat->especialitat }}</td>
                        <td>{{ $dades_empleat->carrec }}</td>
                        <td>{{ $dades_empleat->data_inici_contracte }}</td>
                        <td>{{ $dades_empleat->data_fi_contracte }}</td>
                        <td>{{ $dades_empleat->id_horari }}</td>
                        <td><a class="btn btn-primary" href="{{ route('empleats.edit', $dades_empleat->id) }}">Modificar</a></td>
                        <td>
                            <form action="{{ route('empleats.destroy', $dades_empleat->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" value="Eliminar">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </main>
@endsection

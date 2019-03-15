@extends("layouts.gestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("content")
<main role="main" >
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Titol</td>
          <td>Descripcio</td>
          <td>Usuari</td>
          <td>Document usuari</td>
          <td>Categoría</td>
          <td>Path imatge</td>
          <td colspan="2">Acció</td>
        </tr>
    </thead>
    <tbody>
        @forelse($promocions as $promocio)
            <td>{{$promocio->id}}</td>
            <td>{{$promocio->titol}}</td>
            <td> {!!html_entity_decode(str_limit($promocio->descripcio, $limit=25, $end = "..."))!!}</td>
            <td>{{$promocio->nom}} {{$promocio->cognom1}} {{$promocio->cognom2}}</td>
            <td>{{$promocio->numero_document}}</td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModal{{$promocio->id}}">{{$promocio->path_img}}</a></td>
            @if (! is_null($promocio->path_img))
            <!-- MODAL FOTO -->
            <div class="modal fade" id="exampleModal{{$promocio->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content" style="width:120%;">
                  <div class="modal-body">
                    <img src="{{ asset($promocio->path_img) }}" style="display:block;margin:auto;width:100%">
                  </div>
                </div>
              </div>
            </div>
            <!-- FI MODAL FOTO -->
            @else
            @endif

            <td><a href="{{ route('promocions.edit',$promocio->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('promocions.destroy',$promocio->id)}}" method="post" onsubmit="return confirm('Estàs segur de que vols eliminar la promoció?');">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <p style="background-color: #e05e5e;text-align: center;font-weight: bold;"> No hi han promocions a llistar</p>
        @endforelse
    </tbody>
  </table>
  <div style="display: table;margin: 0 auto;"> {{ $promocions->links() }} </div>


@endsection

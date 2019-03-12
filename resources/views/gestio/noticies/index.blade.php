@extends("layouts.gestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("content")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
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
        @forelse($noticies as $noticia)
            <td>{{$noticia->id}}</td>
            <td>{{$noticia->titol}}</td>
            <td> {!!html_entity_decode(str_limit($noticia->descripcio, $limit=25, $end = "..."))!!}</td>
            <td>{{$noticia->nom}} {{$noticia->cognom1}} {{$noticia->cognom2}}</td>
            <td>{{$noticia->numero_document}}</td>
            <td>{{$noticia->categoria}}</td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModal{{$noticia->id}}">{{$noticia->path_img}}</a></td>
            @if (! is_null($noticia->path_img))
            <!-- MODAL FOTO -->
            <div class="modal fade" id="exampleModal{{$noticia->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content" style="width:120%;">
                  <div class="modal-body">
                    <img src="{{ asset($noticia->path_img) }}" style="display:block;margin:auto;width:100%">
                  </div>
                </div>
              </div>
            </div>
            <!-- FI MODAL FOTO -->
            @else
            @endif

            <td><a href="{{ route('noticies.edit',$noticia->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('noticies.destroy',$noticia->id)}}" method="post" onsubmit="return confirm('Estàs segur de que vols eliminar la noticia?');">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <p style="background-color: #e05e5e;text-align: center;font-weight: bold;"> No hi han noticies a llistar</p>
        @endforelse
    </tbody>
  </table>
  <div style="display: table;margin: 0 auto;"> {{ $noticies->links() }} </div>


@endsection

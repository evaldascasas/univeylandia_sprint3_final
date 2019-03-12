@extends("layouts.gestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("content")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Editar noticia</h1>
        </div>

        <form class="needs-validation" method="post" action="{{ route('noticies.update', $noticia->id)}}" enctype="multipart/form-data">
          @method('PATCH')
          @csrf
            <div class="form-group">
              <label for="cognom1">Titol</label>
              <input type="text" class="form-control" name="titol" value={{ $noticia->titol }}>
            </div>
            <div class="form-group">
              <label >Descripcio</label>
              <textarea name="descripcio" id="descripcio_atraccio">{{ $noticia->descripcio }}</textarea>
            </div>
            <div class="form-group">
              <label for="nom">Categoría</label>
              <select class="form-control" name="categoria">
                <option value={{ $categoria->id }}>{{ $categoria->nom }}</option>
                @foreach($categories as $cat)
                @if ($categoria->id != $cat->id)
                <option value={{ $cat->id }}>{{ $cat->nom }}</option>
                @else
                @endif
                @endforeach
              </select>
            </div>
            <div class="form-group">
              @if (! is_null($noticia->path_img))
              <label>Imatge</label> <img src="https://image.flaticon.com/icons/png/512/16/16647.png" data-toggle="modal" data-target="#exampleModal{{$noticia->id}}" style="width:20px">
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
              <label>Imatge</label>
              @endif
              <input type="file" name="image" class="form-control">
            </div>

          <button class="btn btn-primary" type="submit">Modificar</button>
          <a href="{{ url()->previous() }}" class="btn btn-primary">Cancel·lar</a>
        </form>

      </main>
  </div>

@endsection

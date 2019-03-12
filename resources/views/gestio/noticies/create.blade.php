@extends("layouts.gestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("content")

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Registrar noticia</h1>
        </div>

        <form class="needs-validation" method="post" action="{{ route('noticies.store')}}" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label for="cognom1">Titol</label>
              <input type="text" class="form-control form-control-sm" name="titol">
            </div>
            <div class="form-group">
              <label >Descripcio</label>
              <textarea name="descripcio" id="descripcio_atraccio"></textarea>
            </div>
            <div class="form-group">
              <label for="nom">Categoría</label>
              <select class="form-control" name="categoria">
                @foreach($categories as $categoria)
                <option value={{ $categoria->id }}>{{ $categoria->nom }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Imatge</label>
              <input type="file" name="image" class="form-control" required>
            </div>
          <button class="btn btn-primary" type="submit">Crear</button>
          <a href="{{ url()->previous() }}" class="btn btn-primary">Cancel·lar</a>
        </form>

    </main>
  </div>
</div>


@endsection

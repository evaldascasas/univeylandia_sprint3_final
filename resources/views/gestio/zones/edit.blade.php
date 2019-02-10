@extends("layouts.gestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("body")
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<div class="card uper">
  <div class="card-header">
    Edit Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('zones.update', $zona->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="nom">Zona Nom:</label>
          <input type="text" class="form-control" name="zona_nom" value={{ $zona->zona_nom }}>
        </div>
        <button type="submit" class="btn btn-primary" value="Actualitzar">Actualitza</button>
      </form>
  </div>
</div>
@endsection

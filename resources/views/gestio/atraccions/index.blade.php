@extends("layouts.gestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("body")
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

  @if(session()->get('success'))
  <div class="uper">
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  </div>
  @endif

  <div class="container">
		<form action="/gestio/atraccions" method="POST" role="search">
			{{ csrf_field() }}
			<div class="input-group">
				<input type="text" class="form-control" name="q"
					placeholder="Search users"> <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</form>
		<div class="container">
			@if(isset($details))
			<p> The Search results for your query <b> {{ $query }} </b> are :</p>
			<h2>Sample User details</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Name</th>
					</tr>
				</thead>
				<tbody>
					@foreach($details as $user)
					<tr>
						<td>{{$user->nom_atraccio}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@elseif(isset($message))
			<p>{{ $message }}</p>
			@endif
		</div>


  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nom Atraccio</td>
          <td>Tipus Atraccio</td>
          <td>Data Inauguracio</td>
          <td>Altura Minima</td>
          <td>Altura Maxima</td>
          <td>Accessibilitat</td>
          <td>Acces Express</td>
          <td>Foto</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($atraccionetes as $atraccio)
        <tr>
            <td>{{$atraccio->id}}</td>
            <td>{{$atraccio->nom_atraccio}}</td>
            <td>{{$atraccio->nom }}</td>
            <td>{{$atraccio->data_inauguracio}}</td>
            <td>{{$atraccio->altura_min}}</td>
            <td>{{$atraccio->altura_max}}</td>
            <td>{{$atraccio->accessibilitat}}</td>
            <td>{{$atraccio->acces_express}}</td>
            <td><a href="#" data-toggle="modal" data-target="#exampleModal{{$atraccio->id}}">{{$atraccio->path}}</a></td>

            @if (! is_null($atraccio->path))
            <!-- MODAL FOTO -->
            <div class="modal fade" id="exampleModal{{$atraccio->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content" style="width:120%;">
                  <div class="modal-body">
                    <img style="width:100%" src="{{ asset($atraccio->path) }}" style="display:block;margin:auto;">
                  </div>
                </div>
              </div>
            </div>
<!-- FI MODAL FOTO -->
@else
@endif
            <td><a href="{{ route('atraccions.edit',$atraccio->id)}}" class="btn btn-primary">Modificar</a></td>
            <td>
                <form action="{{ route('atraccions.destroy', $atraccio->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Suprimir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</main>
@endsection

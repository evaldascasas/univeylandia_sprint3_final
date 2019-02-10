@extends("layouts.gestio")

@section("navbarIntranet")
@endsection
@section("menuIntranet")
@endsection
@section("body")
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
          <td>Nom Atraccio</td>
          <td>Tipus Atraccio</td>
          <td>Data Inauguracio</td>
          <td>Altura Minima</td>
          <td>Altura Maxima</td>
          <td>Accessibilitat</td>
          <td>Acces Express</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($atraccio as $atraccions)
        <tr>
            <td>{{$atraccions->id}}</td>
            <td>{{$atraccions->nom_atraccio}}</td>
            <td>{{$atraccions->tipus_atraccio}}</td>
            <td>{{$atraccions->data_inauguracio}}</td>
            <td>{{$atraccions->altura_min}}</td>
            <td>{{$atraccions->altura_max}}</td>
            <td>{{$atraccions->accessibilitat}}</td>
            <td>{{$atraccions->acces_express}}</td>
            <td><a href="{{ route('atraccions.edit',$atraccions->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('atraccions.destroy', $atraccions->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection

@extends("layouts.plantilla")

@section("menu1")
@endsection
@section("menu2")
@endsection
@section("content")
<div class="container px-5 py-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 22rem;">
            <div class="card-body">
                <img src="/img/hotel.jpg" class="rounded-circle" alt="imatge de perfil" width="304" height="236">
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Nom: </strong>{{ Auth::user()->nom }}</li>
                <li class="list-group-item"><strong>Cognoms: </strong>{{ Auth::user()->cognom1 }} {{ Auth::user()->cognom2 }}</li>
                <li class="list-group-item"><strong>Data naixement: </strong>{{ Auth::user()->data_naixement }}</li>
                <li class="list-group-item"><strong>Adreça: </strong>{{ Auth::user()->adreca }}</li>
                <li class="list-group-item"><strong>Ciutat: </strong>{{ Auth::user()->ciutat }}</li>
                <li class="list-group-item"><strong>Telèfon: </strong>{{ Auth::user()->telefon }}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Modificar Perfil</a>
                <a href="#" class="btn btn-secondary">Eliminar Perfil</a>
            </div>
        </div>
    </div>
</div>


@endsection
@section("footer")
@endsection

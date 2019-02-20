@extends("layouts.plantilla")

@section("menu1")
@endsection
@section("menu2")
@endsection
@section("content")

<div class="container jumbotron mt-3">
    

</div>

<h1 class="text-center"> Coneix les tendes i restaurants del parc</h1>
<h4 id="subtitol" class="text-center">No et pergues la <b>MILLOR</b> part del parc</h4>

<div id="div_taula">

</div>

<script>
function tableCreate() {
  var div_taula = document.getElementById('div_taula')[0];
  var taula = document.createElement('table');
  var thead = taula.appendChild(document.createElement('thead'));
}



</script>

@endsection

@section("footer")
@endsection

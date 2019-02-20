@extends("layouts.plantilla")

@section("menu1")
@endsection
@section("menu2")
@endsection
@section("content")

<h1 class="text-center"> Coneix les tendes i restaurants del parc</h1>
<h4 id="subtitol" class="text-center">No et pergues la <b>MILLOR</b> part del parc</h4>

<div id="div_taula">

</div>

<!-- DOM CREATE TABLE -->
<script>
    function tableCreate() {
        var div_taula = document.getElementById('div_taula')[0];
        var taula = document.createElement('table');
        var thead = taula.appendChild(document.createElement('thead'));
    }
</script>

<!-- GET ELEMENT BY ID -->
<script name="text/javascript">
    var h4tag = document.getElementById("subtitol");
    h4tag.style.fontFamily = "verdana";
    h4tag.style.fontSize = "32";
    h4tag.style.color = "darkgrey";
</script>
@endsection

@section("footer")
@endsection

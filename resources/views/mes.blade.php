@extends("layouts.plantilla")

@section("menu1")
@endsection
@section("menu2")
@endsection
@section("content")
<body onload="insertMessage()">
<h1 class="text-center"> Coneix les tendes i restaurants del parc</h1>
<h4 id="subtitol" class="text-center">No et pergues la <b>MILLOR</b> part del parc</h4>
<p id="gelatilandia">Gelatilandia ...</p>
<div id="div_taula">

</div>
</body>
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


















<!-- DOM: Insereix un node abans d'un altre node -->
<script type="text/javascript">
    function insertMessage() {
        var newPara = document.createElement("p");
        var newText = document.createTextNode("Univeypizza ...");
        // If you copy this, don’t break the lines.
        newPara.appendChild(newText);
        var firstPara = document.getElementById("gelatilandia");
        document.body.insertBefore(newPara, firstPara);
    }
</script>

@endsection

@section("footer")
@endsection

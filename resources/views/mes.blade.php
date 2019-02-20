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
<p id="para1">Avui es un gran dia per a estar al nostre parc d'atraccions ja que
   les nostres tendes sortejen un gran premi.</p>

<p id="para2">Per cada compra et donarem una papereta, totes tenen premis, però
  només serà una la guanyadora.</p>


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
<!-- US GET ELEMENT BY ID -->


  <script type="text/javascript">
    document.write("<p>⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇⬇</p>");
    ptxt1=document.getElementById("para1").innerHTML;
    ptxt2=document.getElementById("para2").innerHTML;
    document.write("<p style='background:yellow'>"+
        ptxt1.toUpperCase()+ "</p>");
    document.write("<p style='background:yellow'>" +
        ptxt2.toUpperCase()+ "</p>");
  </script>
@endsection

@section("footer")
@endsection

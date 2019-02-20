@extends("layouts.plantilla")

@section("menu1")
@endsection
@section("menu2")
@endsection
@section("content")
<style type="text/css">

    table {
      width:380px;
        border: 2px solid #4286f4; }
    th { font-size: larger;
        font-family:arial}
    td { border: 1px solid #4286f4;
        padding: 5px;
        background-color:#ffffff;
        font-family:arial;
    }
</style>
<body onload="insertMessage()">
<h1 class="text-center"> Coneix les tendes i restaurants del parc</h1>
<h4 id="subtitol" class="text-center">No et pergues la <b>MILLOR</b> part del parc</h4>
<p id="gelatilandia"><b>Gelatilandia ...</b></p>

<div id="TableContainer" align="center"></div>
<br>
<div id="div_taula">
  </div>
<p id="para1">Avui es un gran dia per a estar al nostre parc d'atraccions ja que
   les nostres tendes sortejen un gran premi.</p>

<p id="para2">Per cada compra et donarem una papereta, totes tenen premis, però
  només serà una la guanyadora.</p>


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

<!-- DOM: Insereix un node abans d'un altre node -->
<script type="text/javascript">
    function insertMessage() {
        var newPara = document.createElement("p");
        var newText = document.createTextNode("Univeypizza ...");
        // If you copy this, don’t break the lines.
        newPara.appendChild(newText);
        var firstPara = document.getElementById("gelatilandia");
        document.body.insertBefore(newPara, firstPara);


        /* DOM: Crear una taula */

        // Create the table elements
        var Table = document.createElement("table");
        Table.setAttribute("id","myTable"); // Create id
        var THead = document.createElement("thead");
        var TBody = document.createElement("tbody");
        var Row, Cell;
        var i, j;

        // Insert the created elements into Table
        Table.appendChild(THead);
        Table.appendChild(TBody);

        Row = document.createElement("tr");
        TBody.appendChild(Row);

        Cell = document.createElement("td");
        Cell.innerHTML = "Foto 1";
        Row.appendChild(Cell);
        Cell = document.createElement("td");
        Cell.innerHTML = "Foto 2";
        Row.appendChild(Cell);

        Row = document.createElement("tr");
        TBody.appendChild(Row);
        Cell = document.createElement("td");
        Cell.innerHTML = "Foto 3";
        Row.appendChild(Cell);
        Cell = document.createElement("td");
        Cell.innerHTML = "Foto 4";
        Row.appendChild(Cell);

        // Insert the table into the document tree
        Tcontainer=document.getElementById("TableContainer");
        Tcontainer.appendChild(Table);
    }
</script>

@endsection

@section("footer")
@endsection

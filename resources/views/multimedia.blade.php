@extends("layouts.plantilla")

@section("menu1")
@endsection

@section("menu2")
@endsection

@section("content")
  <div class="container jumbotron text-center d-flex justify-content-center align-items-center" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-12">
        <h3 class="font-weight-bold text-center text-uppercase">Multimèdia</h3>
      </div>
      <div class="col-sm-12">
        <p class="text">Vídeo de l'atracció Dragon Coaster</p>
        <video width="100%" controls preload autoplay>
          <source src="{{ asset('storage/multimedia/dragon_coaster.mp4') }}" type="video/mp4">
          El teu navegador no té suport per a elements de video.
          </audio>
      </div>
      <div class="col-sm-12">
        <p class="text">So d'ambient del parc</p>
        <audio controls>
          <source src="{{ asset('storage/multimedia/amusement_park.mp3') }}" type="audio/mpeg">
          El teu navegador no té suport per a elements d'àudio.
        </audio>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
      </div>
    </div>
  </div>

  <!-- Anunci -->
  <div class="container jumbotron text-center d-flex justify-content-center align-items-center" style="margin-top:30px">
    <div class=row>
      <div class="col-sm-12">
        <h5>Anuncis</h5>
        <iframe src="{{ asset('storage/anunci/anunci.html') }}" height="255" width="304"></iframe>
      </div>
    </div>
  </div>
  <!-- Fi Anunci -->




@endsection

@section("footer")
@endsection
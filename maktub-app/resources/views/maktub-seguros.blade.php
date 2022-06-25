<x-layout title="Planos">

  <div class="container">
    <img src="{{asset('/assets/img/Capturar.PNG')}}" width="100%" alt="">
  </div>

  <div class="container d-flex justify-content-between mt-5 mb-5">
    <div>
      <img src="{{asset('/assets/img/bradescologo.png')}}" width="75%" alt="">
    </div>
    <div>
      <img src="{{asset('/assets/img/allianzlogo.png')}}" width="75%" alt="">
    </div>
    <div>
      <img src="{{asset('/assets/img/portologo.png')}}" width="75%" alt="">
    </div>
  </div>

  <div class="container">
    <hr>
  </div>


  @foreach ($planos as $p)
  <div class="container d-flex justify-content-around mt-5 mb-5">
    <div class="card" style="width: 18rem; border-radius:25px; padding:30px;">
      <div class="card-body ">

        <h5 class="card-title">{{$p->operadora}}</h5>
        <h5 class="card-title">{{$p->nome}}</h5>
        <p class="card-text">Coparticipação {{$p->coparticipacao}}%</p>
        <p class="card-text">{{$p->cobertura}}</p>
        <p class="card-text">Principais Hospitais:</p>
        <p class="card-text">{{$p->hospitais}}</p>
        <p class="card-text">A partir de: {{$p->valor}}</p>
        <a href="#" class="btn btn-primary">Saiba Mais</a>
      </div>
    </div>
  </div>
  @endforeach
  
</x-layout>
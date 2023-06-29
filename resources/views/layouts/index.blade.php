@extends('masters')

@section('content')

<section class="banner d-flex justify-content-center align-items-center pt-5">
  <div class="container my-5 py-5">
    <div class="row">
      <div class="col-md-6">

      </div>
      <div class=" red col-md-6">
        <h1 class="text-uppercase py-3 redressed banner-desc">Evitez le stress.
        <br/>
        Expediez vos 
        <br/>
        Bagages
      </h1>
        <h5>Avec KiloShare l'expediction des bagages </h5>
        <h5>n'a jamais ete aussi facile.</h5>
        <p>
          <button class="btn btn-order btn-lg rounded-0 merriweather">je veux expedier</button>
          <button class="btn btn-outline-info btn-lg rounded-0 merriweather">je veux transporter</button>
        </p>
      </div>
    </div>
  </div>
  
</section>
<div class="container-blue" style="background-color: white; height: 150px;">
  <div class="row row-cols-4">
    <div class="col">
  
      
     
      
      <img src="/img/avion.png" alt="" class="align-top" style="background-color: green; height:45px;">
      
      <p class="align-bottom"> vous partez d'ou?</p>

    </div>
    <div class="col">vous <allez-ou></allez-ou></div>
    <div class="col">date d'arrivage</div>
    <div class="col">suivez le colis</div>
  </div>
</div>
@endsection
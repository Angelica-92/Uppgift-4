
@extends('master')

@section('content')

<div class="row">
  <div class="col-md-1">
  </div>
  <div class="col-md-10">
    <h2>Välkommen till Media.se</h2>
<p>Vi visar de nyast datorerna, mobilerna och surfplattorna till de bästa priserna.</p>
<p>Se även i vilka affärer du kan köpa dem.</p>
</div>
<div class="col-md-1">
</div>
<br>
<br>
<div class="row">
</div class="col-md-1">
<div class="col-md-10">

<div class="container" style="width: 700px;">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <div class="item active">
      <img src="https://www.o2.co.uk/shop/homepage/images/shop15/brand/apple/iphone-5s/iphone5s-gallery-img-2.jpg" alt="Iphone 5s" style="width:100%;">
      <div class="carousel-caption">
        <h3>Iphone 5s</h3>
        <p>2999</p>
      </div>
    </div>

    <div class="item">
      <img src="https://www.att.com/catalog/en/skus/images/samsung-galaxy%20s7-black%20onyx-450x350.png" alt="Galaxy s7" style="width:80%;">
      <div class="carousel-caption">
        <h3>Galaxy s7</h3>
        <p>Kristaller</p>
      </div>
    </div>

    <div class="item">
      <img src="https://cdn.macrumors.com/article-new/2016/10/macbook-pro-late-2016-800x701.jpg" alt="MacBook Pro" style="width:70%;">
      <div class="carousel-caption">
        <h3>MacBook Pro</h3>
        <p></p>

  </div>
  </div>
</div>
</div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<br>
<br>
<br>
  </div>
  <div class="col-md-1">
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="space">
    </div>
  </div>
</div>

@endsection

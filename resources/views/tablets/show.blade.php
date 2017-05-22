
@extends('master')

@section('content')

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <div class="mobile">
      <h2>{{ $tablet->title }} </h2>
        <img src="{{ $tablet->image }}" alt="{{ $tablet->title }}" style="width:100%;">
        <div class="caption">
          <p class="title"> {{ $tablet->price }} </p>
          <p class="title">{{$tablet->brand}}</p>
          <p>{{$tablet->description}}</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-2">

  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="space">
    </div>
  </div>
</div>

@endsection

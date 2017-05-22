
@extends('master')

@section('content')


<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <div class="mobile">
      <h2>{{ $computer->title }} </h2>

        <img src="{{ $computer->image }}" alt="{{ $computer->title }}" style="width:100%;">
        <div class="caption">
          <p class="title"> {{ $computer->price }} </p>
          <p class="title">{{$computer->brand}}</p>
          <p>{{$computer->description}}</p>
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


@extends('master')

@section('content')

<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
    <h2>Datorer</h2>
    @if (session('success'))
      <div class="alert alert-info" role="alert">{{ session('status') }}</div>
    @endif
    <br>
    <br>
     @foreach($computers as $computer)
     <div class="media">
       <img src="{{ $computer->image }}" alt="{{ $computer->title }}" style="width:230px;height:170px; margin-left: 12px;">
       <a class="noDecoration" href="computers/{{ $computer->id }}"><p class="title"> {{ $computer->title }} </p></a>
     </div>
     @endforeach
  </div>
  <div class="col-md-4">

  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="space">
    </div>
  </div>
</div>

@endsection

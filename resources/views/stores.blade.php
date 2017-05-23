
@extends('master')

@section('content')

<div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <h2>Surfplattor</h2>
    @if (session('success'))
      <div class="alert alert-info" role="alert">{{ session('status') }}</div>
    @endif
    <br>
    <br>
     @foreach($stores as $store)
     <div class="media">
       <h2>Du hittar produkterna i butikerna</h2>
       <h4> {{ $store->name }} </h4>
       <p>{{ $store->city }}</p>
     </div>
     @endforeach
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

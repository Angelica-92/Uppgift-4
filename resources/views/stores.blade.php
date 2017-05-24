
@extends('master')

@section('content')

<div class="row">
  <div class="col-md-1">
  </div>
  <div class="col-md-10">

    @if (session('success'))
      <div class="alert alert-info" role="alert">{{ session('status') }}</div>
    @endif
    <br>
    <br>
     <h2>Du hittar produkterna i butikerna</h2>
     @foreach($stores as $store)

       <li> {{ $store->name }}, {{ $store->city }} </li>


     @endforeach
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

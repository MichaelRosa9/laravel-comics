@extends('layouts.main')

@section('content')
    
@include('partials.jumbotron')

<main class="home">
<div class="container flex-between wrap">
  {{-- <Card v-for="(comic, index) in Comics" :key="index" 
    :card="comic" class="card"
  /> --}}
</div>
  
<button class="button-blue">
  Load More
</button>
</main>

@endsection
@extends('layouts.app')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    @foreach ($movies as $movie)
      <div class="carousel-item {{$loop->first ? 'active' : ''}}">
        <img src="{{$movie->image}}" class="d-block w-100" alt="{{$movie->title}}">
      </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

 <div class="container">
    <h2 class="my-5 text-uppercase">Suggestions</h2>

    <div class="row row-cols-5 gy-3">
        @foreach ($movies as $movie)
        <div class="col">
            <a href="{{route('singlemovie',['id' => $movie->id, 'name'])}}">
              <div class="poster">
                  <img src="{{$movie->image}}" class="card-img-top" alt="{{$movie->title}}">
                  <div class="thumb-title">{{$movie->title}}</div>
              </div>
            </a>
                {{-- <div class="card-info">
                     <h3 class="title">{{$movie->title}}</h3>
                     <div class="original-title">{{$movie->original_title}}</div>
                     <div class="nationality">{{$movie->nationality}}</div>
                     <div class="date">{{$movie->date}}</div>
                     <div class="vote">{{$movie->vote}}</div>
                </div> --}}
        </div>       
        @endforeach
    </div>
 </div>
@endsection


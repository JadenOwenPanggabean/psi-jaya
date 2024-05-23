@extends('layouts.app')

@section('content')

<!-- Primary Page Layout
	================================================== -->

<div class="section big-35-height over-hide z-bigger">

    <div class="parallax parallax-top""></div>
    <div class=" dark-over-pages"></div>

    <div class="hero-center-section pages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 parallax-fade-top">
                    <div class="hero-text">Berita</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section mt-4 padding-bottom-smaller z-bigger background-grey">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="text-center padding-bottom-small">Berita Terbaru</h3>
            </div>
            <div class="section clearfix"></div>
            @foreach ($news as $new)
            <div class="col-md-6 col-xl-6">
                <div class="room-box background-white">
                    <img src="{{'/storage/'. $new->image ?? 'https://via.placeholder.com/150?text=Tidak+ada+gambar'}}"
                        alt="">
                    <div class="room-box-in">
                        <h6 class="">{{$new->title}}</h6>
                        <p class="mt-3">{{$new->description}}</p>
                        @if (Auth::user()->role == 'admin')
                        <a class="mt-1 btn btn-primary" href="{{route('delete.news', $new->id)}}">HAPUS</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>



@endsection
@extends('layouts.app')

@section('content')

<div class="section big-55-height over-hide z-bigger">

    <div class="parallax parallax-top" style="background-image: url('{{url('img/rooms.jpg')}}')"></div>
    <div class="dark-over-pages"></div>

    <div class="hero-center-section pages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 parallax-fade-top">
                    <div class="hero-text">Toba Nest</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section padding-top-bottom over-hide background-grey">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($homestay as $item)
            @if ($loop->first)
            <div class="col-md-6">
                <div class="room-box background-white">
                    <div class="room-name">{{$item->name}}</div>
                    <img src="{{'/storage/'. $item->images[0]->image_location ?? 'https://via.placeholder.com/150?text=Tidak+ada+gambar'}}"
                        alt="" style="aspect-ratio: 3 / 2; object-fit: cover;">
                    <div class="room-box-in">
                        <h5 class=""><a href="/homestay/{{$item->slug}}">{{$item->name}}</a></h5>
                        <p class="mt-3">
                            {{$item->description}}
                        </p>
                        <a class="mt-1 btn btn-primary" href="/homestay/{{$item->slug}}">Pesan</a>
                        <div class="room-icons mt-4 pt-4">
                        </div>
                    </div>
                </div>
            </div>

            @elseif ($loop->iteration == 2)
            <div class="col-md-6 mt-4 mt-md-0">
                <div class="room-box background-white">
                    <div class="room-name">{{$item->name}}</div>
                    <img src="{{'/storage/'. $item->images[0]->image_location ?? 'https://via.placeholder.com/150?text=Tidak+ada+gambar'}}"
                        alt="" style="aspect-ratio: 3 / 2; object-fit: cover;">
                    <div class="room-box-in">
                        <h5 class=""><a href="/homestay/{{$item->slug}}">{{$item->name}}</a></h5>
                        <p class="mt-3">
                            {{$item->description}}
                        </p>
                        <a class="mt-1 btn btn-primary" href="/homestay/{{$item->slug}}">Pesan</a>
                        <div class="room-icons mt-4 pt-4">
                        </div>
                    </div>
                </div>
            </div>

            @else
            <div class="col-md-6 mt-4" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
                <div class="room-box background-white">
                    <div class="room-name">{{$item->name}}</div>
                    <img src="{{'/storage/'. $item->images[0]->image_location ?? 'https://via.placeholder.com/750?text=Tidak+ada+gambar'}}"
                        alt="" style="aspect-ratio: 3 / 2; object-fit: cover;">
                    <div class="room-box-in">
                        <h5 class=""><a href="/homestay/{{$item->slug}}">{{$item->name}}</a></h5>
                        <p class="mt-3">
                            {{$item->description}}
                        </p>
                        <a class="mt-1 btn btn-primary" href="/homestay/{{$item->slug}}">Pesan</a>
                        <div class="room-icons mt-4 pt-4">
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</div>


@endsection
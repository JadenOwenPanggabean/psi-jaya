@extends('layouts.app')

@section('content')
<div class="section big-55-height over-hide">

    <div class="parallax parallax-top" style="background-image: url('{{url('img/rooms.jpg')}}')"></div>
    <div class="dark-over-pages"></div>

    <div class="hero-center-section pages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 parallax-fade-top">
                    <div class="hero-text">{{$homestay->name}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section padding-top-bottom z-bigger">
    <div class="section z-bigger">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mt-4 mt-lg-0">
                    <div class="section">
                        <div class="customNavigation rooms-sinc-1-2">
                            <a class="prev-rooms-sync-1"></a>
                            <a class="next-rooms-sync-1"></a>
                        </div>
                        <div id="rooms-sync1" class="owl-carousel">
                            @foreach ($homestay_images as $img)
                            <div class="item">
                                <img src="{{url('/storage/'. $img->image_location)}}" alt=""
                                    style="aspect-ratio: 3 / 2; object-fit: cover;">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="section">
                        <div id="rooms-sync2" class="owl-carousel">
                            @foreach ($homestay_images as $img)
                            <div class="item">
                                <img src="{{url('/storage/'. $img->image_location)}}" alt=""
                                    style="aspect-ratio: 3 / 2; object-fit: cover;">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="section pt-5">
                        <h5>discription</h5>
                        <p class="mt-3"></p>
                    </div>
                    {{$homestay->description}}
                    <div class="section pt-4">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="mb-3">Overview</h5>
                            </div>
                            <div class="col-lg-6">
                                <p><strong class="color-black">Room size: </strong>{{$homestay->room_size}}</p>
                                <p><strong class="color-black">Occupancy: </strong>{{$homestay->occupancy}}</p>
                                <p><strong class="color-black">View: </strong>{{$homestay->view}}</p>
                                <p><strong class="color-black">Smoking: </strong>{{$homestay->smoking}}</p>
                            </div>
                            <div class="col-lg-6">
                                <p><strong class="color-black">Bed size: </strong>{{$homestay->bed_size}}</p>
                                <p><strong class="color-black">Location: </strong>{{$homestay->location}}</p>
                                <p><strong class="color-black">Room service: </strong>{{$homestay->room_service}}
                                </p>
                                <p><strong class="color-black">Swimming pool: </strong>{{$homestay->swimming_pool}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="section pt-4">
                        <h5>Features</h5>
                        <p class="mt-3">
                            {{$homestay->features}}</p>
                    </div>
                </div>
                <div class="col-lg-4 order-first order-lg-last">
                    <form method="post" action="{{ route('addorder') }}" class="section background-dark p-4">
                        @csrf
                        <input type="text" name="homestay_id" value="{{$homestay->id}}" hidden>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-daterange input-group" id="flight-datepicker">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-item">
                                                <span class="fontawesome-calendar"></span>
                                                <input required class="input-sm" type="text" autocomplete="off"
                                                    id="start-date-1" name="start" placeholder="tanggal mulai"
                                                    data-date-format="DD, MM d" />
                                                @error('start')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <span class="date-text date-depart"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 pt-4">
                                            <div class="form-item">
                                                <span class="fontawesome-calendar"></span>
                                                <input required class="input-sm" type="text" autocomplete="off"
                                                    id="end-date-1" name="end" placeholder="tanggal selesai"
                                                    data-date-format="DD, MM d" />
                                                @error('end')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <span class="date-text date-return"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 pt-4">
                                        <select name="peoples" class="wide" required>
                                            <option data-display="jumlah orang" value="">jumlah orang</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                        @error('peoples')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 pt-4">
                                <button type="submit" class="booking-button">pesan</button>
                            </div>
                        </div>
                    </form>
                    <div class="mt-4 text-center" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
                        <p class="mb-0" style="color: #000; font"><b>Hubungi nomor di bawah ini untuk memesan:</b></p>
                        <h4>+{{$user_no_hp}}</h4>
                    </div>
                    <div class="col-12 pt-4">
                        <a class="booking-button"
                            href="{{$homestay->user_id == Auth::id() ? route('available.homestay', $homestay->id) : 'javascript:void(0)'}}"
                            style="{{$homestay->available === 'true' ? 'background-color: #6dc234 !important' : 'background-color: red !important'}}; {{$homestay->user_id == Auth::id() ? '' : 'pointer-events: none'}}">
                            {{$homestay->available === 'true' ? 'Tersedia' : 'Tidak Tersedia'}}
                        </a>
                    </div>
                    @if (Auth()->check())
                    @if ($homestay->user_id == Auth::id() || Auth::user()->role == 'admin')
                    <div class="col-12 pt-4">
                        <a href="{{route('delete.homestay', $homestay->id)}}" class="booking-button"
                            style="background-color: red;">
                            Hapus Homestay
                        </a>
                    </div>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
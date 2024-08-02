@extends('layouts.app')

@section('content')
<div class="section big-55-height over-hide">

    <div class="parallax parallax-top" style="background-image: url('{{url('https://laketoba.id/images/beranda/bgpa.jpeg')}}')"></div>
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

<div class="section mb-5 m-3 mr-3">
    <div class="section ">
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-8 mt-4 mt-lg-0">
                    <div class="section">
                        <div class="customNavigation roo    ms-sinc-1-2">
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
                        <h4>Description</h4>
                        <p class="mt-3">{{$homestay->description}}</p>
                    </div>
                    {{-- {{$homestay->description}} --}}
                    <div class="section pt-4">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="mb-3">Overview</h4>
                            </div>
                            <div class="col-lg-6">
                                <p><strong class="color-black"> <i>Room size</i> : </strong>{{$homestay->room_size}}</p>
                                <p><strong class="color-black"> <i>Occupancy:</i> </strong>{{$homestay->occupancy}}</p>
                                <p><strong class="color-black"> <i>View:</i> </strong>{{$homestay->view}}</p>
                                <p><strong class="color-black"> <i>Smoking:</i> </strong>{{$homestay->smoking}}</p>
                            </div>
                            <div class="col-lg-6">
                                <p><strong class="color-black"> <i>Smoking:</i> </strong>{{$homestay->bed_size}}</p>
                                <p><strong class="color-black"> <i>Location:</i> </strong>{{$homestay->location}}</p>
                                <p><strong class="color-black"> <i>Room service:</i> </strong>{{$homestay->room_service}}</p>
                                <p><strong class="color-black"> <i>Swimming pool</i> : </strong>{{$homestay->swimming_pool}} </p>
                            </div>
                        </div>
                    </div>
                    <div class="section pt-4">
                        <h5>Features</h5>
                        <p class="mt-3">
                            {{$homestay->features}}</p> 
                    </div>
                </div>
                 <!--Pesan Fasilitas-->
                 @if (Auth::check())
                 @if (Auth::user()->role == 'user') 
                 <div class="col-lg-4 order-first order-lg-last">
                    @if ($homestay->available === 'true')
                    <form method="post" action="/addorder/{{$homestay->slug}}" class="section background-dark p-4">
                        @csrf
                        <input type="text" name="homestay_id" value="{{$homestay->id}}" hidden>
                        <div class="row">
                            <div class="col-12">
                                <div class="datepickers" id="">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-item">
                                                <label for="start-date-1" class="input-label">
                                                    <span class="fontawesome-calendar"></span>
                                                    <input required class="input-sm" type="date" autocomplete="off"
                                                        id="check_in_date" name="check_in_date" placeholder="tanggal mulai" />
                                                </label>
                                                @error('check_in_date')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <span class="date-text date-depart"></span>
                                            </div>
                                        </div>
                                        <div class="col-12 pt-4">
                                            <div class="form-item">
                                                <label for="end-date-1" class="input-label">
                                                    <span class="fontawesome-calendar"></span>
                                                    <input required class="input-sm" type="date" autocomplete="off"
                                                        id="check_out_date" name="check_out_date" placeholder="tanggal selesai" />
                                                </label>
                                                @error('check_out_date')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <span class="date-text date-return"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-12 order">
                                <div class="row">
                                    <div class="col-12 pt-4">
                                        <input type="number" name="people_count" id="people_count" required min="1" placeholder="Number of people">
                                        @error('people_count')
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
                        <p class="mb-0" style="color: #000;"><b>Harga per malam:</b></p>
                        <h4>Rp. {{ number_format($homestay->price, 0, ',', '.') }}</h4>
                    </div>
                    @endif
                    <div class="mt-4 text-center" data-scroll-reveal="enter bottom move 50px over 0.7s after 0.2s">
                        <p class="mb-0" style="color: #000;"><b>Hubungi nomor di bawah ini untuk memesan:</b></p>
                        <h4>+{{$user_no_hp}}</h4>
                    </div>
                    <!--Button Booking-->
                    <div class="col-12 pt-4">
                        <a class="booking-button"
                            href="{{$homestay->user_id == Auth::id() ? route('available.homestay', $homestay->id) : 'javascript:void(0)'}}"
                            style="{{$homestay->available === 'true' ? 'background-color: #6dc234 !important' : 'background-color: red !important'}}; {{$homestay->user_id == Auth::id() ? '' : 'pointer-events: none'}}">
                            {{$homestay->available === 'true' ? 'Tersedia' : 'Tidak Tersedia'}}
                        </a>
                    </div> 
                </div>
                 @endif
                 @endif
                <div class="col-lg-4">
                    <!--Edit Fasilitas-->
                    @if (Auth()->check())
                        @if ($homestay->user_id == Auth::id())
                        <!-- Button modal hapus--> 
                        <div class="col-12 pt-4">
                            <a type="button" class="delete-button" style="background-color: red;" data-toggle="modal" data-target="#exampleModalCenter{{ $homestay->id }}">
                                Hapus Fasilitas
                            </a>
                        </div>
                        <!-- Button modal edit--> 
                        <div class="col-12 pt-3">
                            <a type="button" href="{{ route('edit.fasilitas', $homestay->id) }}" class="edit-button" >Edit Fasilitas</a>
                        </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
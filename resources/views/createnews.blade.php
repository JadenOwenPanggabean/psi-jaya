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

<div class="section padding-top z-bigger">
    <div class="container">
        <form method="post" action="{{ route('store.news') }}" enctype="multipart/form-data"
            class="row justify-content-center padding-bottom-smaller">
            @csrf
            <div class="col-md-8">
                <div class="subtitle with-line text-center mb-4">Admin</div>
                <h3 class="text-center padding-bottom-small">Buat Berita</h3>
            </div>
            <div class="section clearfix"></div>

            <!-- Nama -->
            <div class="col-md-4 ajax-form">
                <p class="name-input">Judul:</p>
                <input name="title" type="text" autocomplete="off" required value="{{ old('title') }}" />
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="section clearfix"></div>

            <!-- Deskripsi -->
            <div class="col-md-8 mt-5 ajax-form">
                <p class="name-input">Deskripsi:</p>
                <textarea name="description" autocomplete="off" required>{{ old('description') }}</textarea>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="section clearfix mt-5"></div>

            <!-- Gambar -->
            <div class="col-md-4 mt-5 mt-md-0 ajax-form">
                <p class="name-input">Gambar:</p>
                <input name="image" type="file" accept="image/*" autocomplete="off" required />
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="section clearfix"></div>
            <div class="col-md-8 mt-3 ajax-form text-center">
                <button class="send_message" type="submit" data-lang="en"><span>submit</span></button>
            </div>
        </form>
    </div>
</div>
@endsection

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
        <form method="post" action="{{ route('store.homestay') }}" enctype="multipart/form-data"
            class="row justify-content-center padding-bottom-smaller">
            @csrf
            <div class="col-md-8">
                <div class="subtitle with-line text-center mb-4">Owner</div>
                <h3 class="text-center padding-bottom-small">Daftarkan Homestay</h3>
            </div>
            <div class="section clearfix"></div>

            <!-- Nama -->
            <div class="col-md-4 ajax-form">
                <p class="name-input">Nama:</p>
                <input name="name" type="text" autocomplete="off" required value="{{ old('name') }}" />
                @error('name')
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

            <!-- Fitur -->
            <div class="col-md-4 mt-5 mt-md-0 ajax-form">
                <p class="name-input">Fitur:</p>
                <input name="feature" type="text" autocomplete="off" required value="{{ old('feature') }}" />
                @error('feature')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="section clearfix mt-5"></div>

            <!-- Ukuran Kamar -->
            <div class="col-md-4 mt-5 mt-md-0 ajax-form">
                <p class="name-input">Ukuran Kamar:</p>
                <input name="roomsize" type="text" autocomplete="off" required value="{{ old('roomsize') }}" />
                @error('roomsize')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="section clearfix mt-5"></div>

            <!-- Jumlah Hunian -->
            <div class="col-md-4 mt-5 mt-md-0 ajax-form">
                <p class="name-input">Jumlah Hunian:</p>
                <input name="occupancy" type="text" autocomplete="off" required value="{{ old('occupancy') }}" />
                @error('occupancy')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="section clearfix mt-5"></div>

            <!-- Pemandangan -->
            <div class="col-md-4 mt-5 mt-md-0 ajax-form">
                <p class="name-input">Pemandangan:</p>
                <input name="view" type="text" autocomplete="off" required value="{{ old('view') }}" />
                @error('view')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="section clearfix mt-5"></div>

            <!-- Boleh Merokok -->
            <div class="col-md-4 mt-5 mt-md-0 ajax-form">
                <p class="name-input">Boleh Merokok ?</p>
                <input name="smoking" type="text" autocomplete="off" required value="{{ old('smoking') }}" />
                @error('smoking')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="section clearfix mt-5"></div>

            <!-- Ukuran Tempat Tidur -->
            <div class="col-md-4 mt-5 mt-md-0 ajax-form">
                <p class="name-input">Ukuran Tempat Tidur:</p>
                <input name="bedsize" type="text" autocomplete="off" required value="{{ old('bedsize') }}" />
                @error('bedsize')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="section clearfix mt-5"></div>

            <!-- Lokasi -->
            <div class="col-md-4 mt-5 mt-md-0 ajax-form">
                <p class="name-input">Lokasi:</p>
                <input name="location" type="text" autocomplete="off" required value="{{ old('location') }}" />
                @error('location')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="section clearfix mt-5"></div>

            <!-- Layanan Kamar -->
            <div class="col-md-4 mt-5 mt-md-0 ajax-form">
                <p class="name-input">Layanan Kamar:</p>
                <input name="roomservice" type="text" autocomplete="off" required value="{{ old('roomservice') }}" />
                @error('roomservice')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="section clearfix mt-5"></div>

            <!-- Kolam Renang -->
            <div class="col-md-4 mt-5 mt-md-0 ajax-form">
                <p class="name-input">Kolam Renang:</p>
                <input name="swimmingpool" type="text" autocomplete="off" required value="{{ old('swimmingpool') }}" />
                @error('swimmingpool')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="section clearfix mt-5"></div>

            <!-- Harga -->
            <div class="col-md-4 mt-5 mt-md-0 ajax-form">
                <p class="name-input">Harga: *(250000)</p>
                <input name="price" type="number" autocomplete="off" required value="{{ old('price') }}" />
                @error('price')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="section clearfix mt-5"></div>

            <!-- Banyak Gambar -->
            <div class="col-md-4 mt-5 mt-md-0 ajax-form">
                <p class="name-input">Banyak Gambar:</p>
                <input name="image[]" type="file" accept="image/*" multiple autocomplete="off" required />
                @error('image.*')
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
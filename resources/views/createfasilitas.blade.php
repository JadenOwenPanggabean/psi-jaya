@extends('layouts.app')

@section('content')
<div class="section big-55-height over-hide z-bigger">

    <div class="parallax parallax-top" style="background-image: url('{{url('https://laketoba.id/images/beranda/bgpa.jpeg')}}')"></div>
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

<div class="section padding-top ">
    <div class="container">
        <form method="post" action="{{ route('store.fasilitas') }}" enctype="multipart/form-data"
            class="row justify-content-center padding-bottom-smaller">
            @csrf
            <div class="col-md-8">
                <div class="subtitle with-line text-center mb-4">Owner</div>
                <h3 class="text-center padding-bottom-small">Daftarkan Fasilitas</h3>
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
<div class="col-md-8 mt-5 ajax-form">
                <p class="name-input">Deskripsi:</p>
                <textarea name="description" id="description" autocomplete="off" required>{{ old('description') }}</textarea>
                <p id="error-message" class="text-danger"></p>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror 

                <script>
                    document.getElementById('description').addEventListener('input', function() {
                        const textarea = this;
                        const words = textarea.value.split(/\s+/);
                        const errorMessage = document.getElementById('error-message');
                        
                        let hasError = false;
                        for (let word of words) {
                            if (word.length > 15) {
                                hasError = true;
                                break;
                            }
                        }

                        if (hasError) {
                            errorMessage.textContent = 'No word should exceed 15 characters.';
                        } else {
                            errorMessage.textContent = '';
                        }
                    });
                </script>
                {{-- <textarea name="description" autocomplete="off" required>{{ old('description') }}</textarea> --}}
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <!-- Deskripsi --> 
            
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

            <!-- Kapasitas -->
            <div class="col-md-4 mt-5 mt-md-0 ajax-form">
                <p class="name-input">Kapasitas:</p>
                <select id="occupancy" name="occupancy" class="mt-3"> 
                    <option value="Up to 3 Adults">Up to 3 Adults</option>
                    <option value="Up to 5 Adults">Up to 5 Adults</option>
                    <option value="Up to 7 Adults">Up to 7 Adults</option>
                </select>
                {{-- <input name="occupancy" type="text" autocomplete="off" required value="{{ old('occupancy') }}" /> --}}
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
            <div class="col-md-4 mt-5 mt-md-0 radio-input ">
                <p class="name-input">Boleh Merokok ?</p>
                <div class="row text-center mt-3">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="" type="radio" name="smoking" id="smoking" value="Yes" checked>
                            <label class="form-check-label" for="smoking">
                              Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6"> 
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="smoking" id="smoking" value="No">
                            <label class="form-check-label" for="smoking">
                              No
                            </label>
                        </div>
                    </div>
                </div>
                {{-- <input name="smoking" type="text" autocomplete="off" required value="{{ old('smoking') }}" /> --}}
                @error('smoking')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="section clearfix mt-5"></div>

            <!-- Ukuran Tempat Tidur -->
            <div class="col-md-4 mt-5 mt-md-0 radio-input">
                <p class="name-input">Ukuran Tempat Tidur:</p> 
                <select id="bedsize" name="bedsize" class="mt-3"> 
                    <option value="Reguler Size">Reguler Size</option>
                    <option value="Standard Size">Standard Size</option>
                    <option value="Queen Size">Queen Size</option>
                </select>
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
            <div class="col-md-4 mt-5 mt-md-0 radio-input">
                <p class="name-input">Layanan Kamar:</p>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="" type="radio" name="roomservice" id="roomservice" value="Yes" checked>
                            <label class="form-check-label" for="roomservice">
                              Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6"> 
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="roomservice" id="roomservice" value="No">
                            <label class="form-check-label" for="roomservice">
                              No
                            </label>
                        </div>
                    </div>
                </div>
                {{-- <input name="roomservice" type="text" autocomplete="off" required value="{{ old('roomservice') }}" /> --}}
                @error('roomservice')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="section clearfix mt-5"></div>

            <!-- Kolam Renang -->
            <div class="col-md-4 mt-5 mt-md-0 radio-input">
                <p class="name-input">Kolam Renang:</p>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="" type="radio" name="swimmingpool" id="swimmingpool" value="yes" checked>
                            <label class="form-check-label" for="swimmingpool">
                              Yes
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6"> 
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="swimmingpool" id="swimmingpool" value="No">
                            <label class="form-check-label" for="swimmingpool">
                              No
                            </label>
                        </div>
                    </div>
                </div>
                {{-- <input name="swimmingpool" type="text" autocomplete="off" required value="{{ old('swimmingpool') }}" /> --}}
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
                <a class="booking-button btn btn-primary"  data-toggle="modal" data-target="#exampleModalCenter">
                    Tambah Fasilitas
                </a>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header"> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2"
                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                        Apakah Anda Yakin Untuk Menambah Data Ini?</h3> 
                    </div>
                    <div class="modal-footer">
                    <a type="button" class="text-gray-400 mr-3 dark:text-gray-200" data-dismiss="modal">Close</a> 
                    <button class=" btn btn-primary" type="submit" data-lang="en"><span>submit</span></button>
                    </div>
                </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
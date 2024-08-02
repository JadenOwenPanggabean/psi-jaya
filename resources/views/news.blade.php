@extends('layouts.app')

@section('content')

<!-- Primary Page Layout
	================================================== -->

<div class="section big-35-height over-hide z-bigger">

    <div class="parallax parallax-top" style="background-image: url('{{url('https://laketoba.id/images/beranda/bgpa.jpeg')}}')"></div>
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

<div class="section mt-4  ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="text-center padding-bottom-small">Berita Terbaru</h3>
            </div>
            <div class="section clearfix"></div>
            @foreach ($news as $new)
            <div class="col-md-6 col-xl-6 mt-3">
                <div class="room-box background-white">
                    <img src="{{'/storage/'. $new->image ?? 'https://via.placeholder.com/150?text=Tidak+ada+gambar'}}"
                        alt="">
                    <div class="room-box-in">
                        <h6 class="">{{$new->title}}</h6>
                        <p class="mt-3">{{$new->description}}</p>
                        <!-- Button trigger modal -->
                        @if (Auth::check())
                        @if (Auth::user()->role == 'admin') 
                        <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#exampleModalCenter">
                            Delete
                        </button>  
                        @endif
                        @endif 
                    </div>
                </div>
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
                        Are you sure you want to delete this data?</h3> 
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> 
                    {{-- <form id="delete-form" method="POST" action="">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form> --}}
                    <form action="{{ route('delete.news', $new->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                      </form>
                    {{-- <a class="mt-1 btn btn-primary" href="{{route('delete.news', $new->id)}}">Delete</a> --}}
                    </div>
                </div>
                </div>
            </div>
            <script>
                function openDeleteModal(id) {
                    var form = document.getElementById('delete-form');
                    form.action = '/news/' + id; // Adjust the URL if necessary
                    $('#exampleModalCenter').modal('show');
                }
            </script>
            @endforeach 
        </div>
    </div>
</div> 




@endsection
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
            <div class="col-md-6 col-xl-6">
                <div class="room-box background-white">
                    <img src="{{'/storage/'. $new->image ?? 'https://via.placeholder.com/150?text=Tidak+ada+gambar'}}"
                        alt="">
                    <div class="room-box-in">
                        <h6 class="">{{$new->title}}</h6>
                        <p class="mt-3">{{$new->description}}</p>
                        <!-- Button trigger modal -->
                        @if (Auth::check())
                        @if (Auth::user()->role == 'admin') 
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
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
                    <a class="mt-1 btn btn-primary" href="{{route('delete.news', $new->id)}}">Delete</a>
                    </div>
                </div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</div> 


  
@if (session('warning'))
<div class="success-modal" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <svg class="mx-auto mb-4 text-blue-500 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path fill="currentColor" d="m18.774 8.245-.892-.893a1.5 1.5 0 0 1-.437-1.052V5.036a2.484 2.484 0 0 0-2.48-2.48H13.7a1.5 1.5 0 0 1-1.052-.438l-.893-.892a2.484 2.484 0 0 0-3.51 0l-.893.892a1.5 1.5 0 0 1-1.052.437H5.036a2.484 2.484 0 0 0-2.48 2.481V6.3a1.5 1.5 0 0 1-.438 1.052l-.892.893a2.484 2.484 0 0 0 0 3.51l.892.893a1.5 1.5 0 0 1 .437 1.052v1.264a2.484 2.484 0 0 0 2.481 2.481H6.3a1.5 1.5 0 0 1 1.052.437l.893.892a2.484 2.484 0 0 0 3.51 0l.893-.892a1.5 1.5 0 0 1 1.052-.437h1.264a2.484 2.484 0 0 0 2.481-2.48V13.7a1.5 1.5 0 0 1 .437-1.052l.892-.893a2.484 2.484 0 0 0 0-3.51Z"/>
                <path fill="#fff" d="M8 13a1 1 0 0 1-.707-.293l-2-2a1 1 0 1 1 1.414-1.414l1.42 1.42 5.318-3.545a1 1 0 0 1 1.11 1.664l-6 4A1 1 0 0 1 8 13Z"/>
            </svg>  
            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                {{ session('warning') }}
            </h3>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
        </div>
        </div>
    </div>
</div> 
    @endif


@endsection
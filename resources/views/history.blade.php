@extends('layouts.app')

@section('content')
<div class="section big-55-height over-hide z-bigger">

    <div class="parallax parallax-top" style="background-image: url('{{url('https://laketoba.id/images/beranda/bgpa.jpeg')}}')"></div>
    <div class="dark-over-pages"></div>

    <div class="hero-center-section pages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 parallax-fade-top">
                    <div class="hero-text">History</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section padding-top-bottom over-hide background-grey">
    <div class="container-fluid"> 
        <table class="table table-hover"> 
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Check In</th>
                <th scope="col">Check Out</th>
                <th scope="col">Jumlah Kamar</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $number = ($history->currentPage() - 1) * $history->perPage() + 1;
                @endphp
                @foreach ($history as $index => $data)
                <tr>
                    <th scope="row">{{$number++}}</th>
                    <td>{{$data->check_in_date}}</td>
                    <td>{{$data->check_out_date}}</td>
                    <td>{{$data->people_count}}</td>
                    <td>{{$data->total}}</td>
                    <td>{{$data->status}}</td> 
                    <td>
                    @if ($data->status == "Verifikasi")
                        <span class="cursor-not-allowed">Konfirmasi</span>
                    @else 
                        <!-- Button trigger modal -->
                        <a type="button" class="font-medium hover:underline text-center" data-toggle="modal" data-target="#exampleModalCenter{{ $data->id }}">
                            Konfirmasi
                        </a>
                    @endif
                    </td>
                </tr>     
                <!-- Modal -->
                <form action="{{ route('updateStatus', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal fade" id="exampleModalCenter{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content text-center">
                            <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah Anda yakin ingin mengkonfirmasi Pesanan ini?</h3>
                                <button type="submit" class="mr-3 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Konfirmasi</button>
                                <button type="button" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400" data-dismiss="modal">Batal</button>
                            </div> 
                        </div>
                        </div>
                    </div>
                </form>
                @endforeach
            </tbody>
        </table>
        <nav class="bg-white flex items-center flex-column flex-wrap md:flex-row justify-between p-4" aria-label="Table navigation">
            <span
                class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">
                Showing
                <span class="font-semibold text-gray-900 dark:text-white">{{ $history->firstItem() }}</span>
                to
                <span class="font-semibold text-gray-900 dark:text-white">{{ $history->lastItem() }}</span> of
                <span class="font-semibold text-gray-900 dark:text-white">{{ $history->total() }}</span>
            </span>

            <div class="w-full md:w-auto text-right">
                <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                    <!-- Previous Page Link -->
                    @if ($history->onFirstPage())
                        <li aria-disabled="true" aria-label="Previous">
                            <span
                                class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 cursor-not-allowed">Previous</span>
                        </li>
                    @else
                        <li>
                            <a href="{{ $history->previousPageUrl() }}"
                                class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                aria-label="Previous">Previous</a>
                        </li>
                    @endif

                    <!-- Pagination Elements -->
                    @foreach ($history->links()->elements[0] as $page => $url)
                        @if ($page == $history->currentPage())
                            <li aria-current="page">
                                <span
                                    class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $page }}</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach

                    <!-- Next Page Link -->
                    @if ($history->hasMorePages())
                        <li>
                            <a href="{{ $history->nextPageUrl() }}"
                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                                aria-label="Next">Next</a>
                        </li>
                    @else
                        <li aria-disabled="true" aria-label="Next">
                            <span
                                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 cursor-not-allowed">Next</span>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div> 
</div>


@endsection
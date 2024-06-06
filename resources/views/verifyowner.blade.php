@extends('layouts.app')

@section('content')
<div class="section big-55-height over-hide z-bigger">
    <div class="parallax parallax-top" style="background-image: url('{{url('https://laketoba.id/images/beranda/bgpa.jpeg')}}')"></div>
    <div class="dark-over-pages"></div>
    <div class="hero-center-section pages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 parallax-fade-top">
                    <div class="hero-text">Verify Owner</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section padding-top-bottom z-bigger">
    <div class="section z-bigger">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-9">
                    @foreach ($users as $user)
                        <div class="address">
                            <div class="address-in text-left">
                                <p class="color-black">{{ $user->name }}</p>
                            </div>
                            <div class="address-in text-right">
                                @if ($user->role !== 'admin')
                                    <form action="{{ route('ver.owner', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" style="color: black" class="btn btn-link">
                                            {{ $user->verified == 'true' ? 'Verified (Click to Unverify)' : 'Not Verified (Click to Verify)' }}
                                        </button>
                                    </form>
                                    <span>{{ $user->verified == 'true' ? 'Verified' : 'Not Verified' }}</span>
                                @else
                                    <span>Admin - Cannot Verify</span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

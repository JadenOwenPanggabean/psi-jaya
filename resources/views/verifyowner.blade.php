﻿@extends('layouts.app')

@section('content')
<div class="section big-55-height over-hide z-bigger">

    <div class="parallax parallax-top" style="background-image: url('{{url('img/rooms.jpg')}}')"></div>
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
                            <p class="color-black">{{$user->name}}</p>
                        </div>
                        <div class="address-in text-right">
                            <a href="{{route('ver.owner', $user->id)}}">
                                {{$user->verified == 'true' ? 'Verified' : 'Not Verified'}}
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
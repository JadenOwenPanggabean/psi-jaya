@extends('layouts.app')

@section('title')
    <title>Register - TobaNest</title>
@endsection

@section('content')

    <div class="container">
        <div class="login-box">
            <h2>Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="input-group">
                    <label for="name">Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required>
                </div>
                @error('name')
                    <strong>{{ $message }}</strong>
                @enderror

                <div class="input-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                </div>
                @error('email')
                    <strong>{{ $message }}</strong>
                @enderror

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                @error('password')
                        <strong>{{ $message }}</strong>
                @enderror

                <div class="input-group">
                    <label for="password-confirm">Konfirmasi Password</label>
                    <input type="password-confirm" id="password" name="password_confirmation" required>
                </div>

                <button type="submit">Register</button>
            </form>
            <br>
            <a href="/login">Masuk Akun Sekarang</a>
        </div>
    </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom 1.js"></script>
@endsection

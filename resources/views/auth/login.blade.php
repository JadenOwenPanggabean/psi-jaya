@extends('layouts.app')

@section('title')
    <title>Login - TobaNest</title>
@endsection

@section('content')
    <div id="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1993.078992715522!2d99.06432591773388!3d2.3394131508166915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304f43e83df31823%3A0x1941dd20de23f74!2sBalige%2C%20Humbang%20Hasundutan%20Regency%2C%20North%20Sumatra!5e0!3m2!1sen!2sid!4v1649108799181!5m2!1sen!2sid"
            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

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

                <button type="submit">Login</button>
            </form>
            <br>
            <a href="/register">Daftar Akun Sekarang</a>
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

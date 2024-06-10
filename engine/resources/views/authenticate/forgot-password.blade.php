<!-- resources/views/auth/forgot-password.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="w3l-mockup-form">
        <div class="container">
            <div class="workinghny-form-grid">
                <!-- ... Konten HTML yang ada di dalam body ... -->
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>
@endsection

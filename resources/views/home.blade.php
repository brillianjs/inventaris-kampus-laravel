@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
                <div class="card-header">Selamat Datang Di Aplikasi SIMI</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                    SIMI atau singkatan dari Sistem Informasi Manajemen Invenntaris adalah Aplikasi yang ....
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
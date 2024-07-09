@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div> -->
                <div class="card-header">
                    <h1>SIMI - Sistem Informasi Manajemen Inventaris</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Selamat datang di aplikasi SIMI</p>
                    <!-- <p>SIMI atau singkatan dari Sistem Informasi Manajemen Inventaris adalah Aplikasi yang ....</p> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
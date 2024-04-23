@extends('layouts.gentella')

@section('title')
    Beranda
@endsection

@push('before-script')
    @if (session('status'))
        <x-sweetalertsession tipe="{{ session('tipe') }}" status="{{ session('status') }}" />
    @endif
@endpush

@if (Auth::user()->tipeuser == 'admin')
    {{-- @include('pages.admin.dashboard.dashboard_admin') --}}
@elseif (Auth::user()->tipeuser == 'pemain')
    {{-- @include('pages.admin.dashboard.dashboard_admin') --}}
@else
    {{-- @include('pages.admin.dashboard.dashboard_admin') --}}
@endif

@section('content')
    <div>
        <span><img src="{{ url('/') }}/assets/upload/logo_smp.png" width="200px" alt="logo" />
            {{-- <span>{{ Fungsi::app_nama() }}</span> --}}
        </span>
        <h2 class="underline">Selamat Datang {{ Auth::user()->name }} , anda masuk sebagai Admin</h2>
    </div>
@endsection

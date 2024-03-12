@extends('layouts.base')

@section('body')
    <x-default-navbar/>
    <main class="overflow-hidden">
        @yield('content')
    </main>
    @isset($slot)
        {{ $slot }}
    @endisset
    <x-default-footer/>
@endsection

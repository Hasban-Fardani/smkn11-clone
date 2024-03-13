@extends('layouts.base')

@section('body')
    <x-default-navbar/>
    <main class="overflow-hidden">
        @yield('content')
        @isset($slot)
            {{ $slot }}
        @endisset
    </main>
    
    <x-default-footer/>
@endsection

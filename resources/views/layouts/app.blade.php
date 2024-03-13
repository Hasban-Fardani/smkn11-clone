@extends('layouts.base')

@section('body')
    <x-default-navbar/>
    <main class="overflow-hidden">
        @yield('content')
    </main>
    
    <x-default-footer/>
@endsection

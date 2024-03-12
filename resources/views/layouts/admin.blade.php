@extends('layouts.base')

@section('body')
    <div class="drawer lg:drawer-open">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col items-center justify-center">
            <!-- Page content here -->
            <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">Open drawer</label>
            <main>
                @yield('content')
            </main>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                <!-- Sidebar content here -->
                <li><a>Dashboard</a></li>
                <li><a>Post</a></li>
                <li><a>User</a></li>
                <li><a>Setting</a></li>
            </ul>
        </div>
    </div>
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection

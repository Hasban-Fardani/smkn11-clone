@extends('layouts.base')

@section('body')
    <div class="drawer lg:d-drawer-open min-h-screen">
        <input id="my-d-drawer-2" type="checkbox" class="d-drawer-toggle" />
        <div class="d-drawer-content flex flex-col items-center justify-center">
            <!-- Page content here -->
            <label for="my-d-drawer-2" class="btn btn-primary d-drawer-button lg:hidden">Open drawer</label>
            <main>
                @yield('content')
            </main>
        </div>
        <div class="d-drawer-side">
            <label for="my-d-drawer-2" aria-label="close sidebar" class="d-drawer-overlay"></label>
            <ul class="d-menu p-4 w-64 bg-primary text-white font-semibold min-h-screen">
                <!-- Sidebar content here -->
                @can('admin')
                    <li>
                        <a class="w-full" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                @endcan
                @can('creator')
                    <li>
                        <a class="w-full" href="{{ route('creator.dashboard') }}">Dashboard</a>
                    </li>
                @endcan

                <li>
                    <a class="w-full" href="{{ route('editor-posts.index') }}">Post</a>
                </li>
                
                @can('admin')
                    <li>
                        <a>User</a>
                    </li>
                @endcan
                <li>
                    <a>Setting</a>
                </li>
            </ul>
        </div>
    </div>
@endsection

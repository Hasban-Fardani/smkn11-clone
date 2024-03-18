@extends('layouts.base')

@section('body')
    <div class="d-drawer lg:d-drawer-open min-h-screen">
        <input id="my-d-drawer-2" type="checkbox" class="d-drawer-toggle" />
        <div class="d-drawer-content flex flex-col items-center justify-start">
            <!-- Page content here -->
            <div class="flex justify-between w-full px-4 py-2">
                <label for="my-d-drawer-2" class="lg:hidden hover:cursor-pointer">
                    <x-icon name="bars-3-bottom-left" class="w-8 h-8"/>
                </label>
                <div class="hidden lg:block">

                </div>
                <div class="flex items-center gap-2">
                    <h2>Hello, {{ auth()->user()->name }}</h2>
                    <x-dropdown>
                        <x-slot:action>
                            <x-avatar x-on:click="show = !show" color="white" class="hover:cursor-pointer"/>
                        </x-slot:action>
                        <x-dropdown.items icon="cog" text="Settings" />
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <x-button icon="arrow-left-on-rectangle" text="Logout" class="w-full !justify-start"/>
                            </form>
                    </x-dropdown>
                </div>
            </div>
            <main class="mt-6">
                @yield('content')
                @isset($slot)
                    {{ $slot }}
                @endisset
            </main>
        </div>
        <div class="d-drawer-side">
            <label for="my-d-drawer-2" aria-label="close sidebar" class="d-drawer-overlay"></label>
            <ul class="d-menu p-4 w-64 bg-primary text-white font-semibold min-h-screen">
                <!-- Sidebar content here -->
                @can('admin')
                    <li>
                        {{-- active when route is on admin.dashboard --}}
                        <a @class(['w-full','d-active' => request()->routeIs('admin.dashboard')]) href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                @endcan
                @can('creator')
                    <li>
                        <a @class(['w-full','d-active' => request()->routeIs('creator.dashboard')]) href="{{ route('creator.dashboard') }}">Dashboard</a>
                    </li>
                @endcan

                <li>
                    <a @class(['w-full','d-active' => request()->routeIs('creator-post')]) href="{{ route('creator-post') }}">Post</a>
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

@isset($tinymce)
    @push('js')
    <script src="https://cdn.tiny.cloud/1/xmbkvq3c55a3out0mcazzve3hsj1oi9dxwrt25my8prdh9qx/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#editor',
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
    </script>
    @endpush
@endisset
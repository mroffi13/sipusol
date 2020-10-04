@extends('layouts.app')

@section('app')
    <x-navbar />
    <div class="row m-2">
        <div class="col-md-3">
            <x-sidebar />
        </div>
        <div class="col-md-9">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('app')
<x-navbar />

<main class="py-4">
    @yield('content')
</main>
@endsection
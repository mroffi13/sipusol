@extends('layouts.backend')

@section('content')
    <div class="card">
        <div class="card-header">List Books</div>
        <div class="card-body">
            @if (session('class'))
                <div class="alert alert-{{ session('class') }}">
                    {{ session('message') }}
                </div>
            @endif
            <livewire:book>
        </div>
    </div>
    
@endsection
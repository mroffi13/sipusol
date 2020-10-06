@extends('layouts.backend')

@section('content')
    <div class="card">
        <div class="card-header">Create Book</div>
        <div class="card-body">
            <form action="{{route('books.store')}}" method="post">
                @csrf
                <x-input type="text" name="title" id="title" label="Title" />
                <x-combo-box name="category_id" id="category" label="Category">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </x-combo-box>
                <x-combo-box name="bookshelves[]" id="bookshelves" label="Bookshelves" type="multiple">
                    @foreach ($bookshelves as $bookshelf)
                        <option value="{{ $bookshelf->id }}">{{ $bookshelf->name }}</option>
                    @endforeach
                </x-combo-box>
                <x-input type="text" name="author" id="author" label="Author" />
                <x-input type="text" name="publisher" id="publisher" label="Publisher" />
                <x-input type="text" name="year" id="year" label="Year" />
                <x-input type="text" name="isbn" id="isbn" label="ISBN" />
                <x-input type="number" name="stock" id="stock" label="Stock" />
                <button type="submit" class="btn btn-primary float-right">Create</button>
            </form>
        </div>
    </div>
@endsection
@extends('backend.layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    <div class="container">
        @foreach ($products as $product)
            {{ $product->name }}
            <form action="/admin/products/{{ $product->id }}" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="supprimer">
            </form>
        @endforeach
    </div>

    {{ $products->links() }}

    @isset($success)
        {{$success}}
    @endisset

@endsection

@include('backend.includes.first')

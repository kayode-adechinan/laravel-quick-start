@extends('backend.layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    <form method="POST" action="/admin/products/{{ $product->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <label>name</label>
        <input type="text" name="name"  value="{{ $product->name }}"> {{$errors->first('name')}}
        <label>price</label>
        <input type="text" name="price"  value="{{ $product->price }}"> {{$errors->first('price')}}
        <input type="submit" value="mettre à jour">

    </form>


    @isset($success)
        {{$success}}
    @endisset

@endsection

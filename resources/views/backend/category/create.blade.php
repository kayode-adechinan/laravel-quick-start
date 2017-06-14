@extends('backend.layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    <form method="POST" action="/admin/products" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label>name</label>
        <input type="text" name="name"  value="{{ old('name') }}"> {{$errors->first('name')}}
        <label>price</label>
        <input type="text" name="price"  value="{{ old('price') }}"> {{$errors->first('price')}}
        <label>img</label>
        <input type="file" name="img" />
        <input type="submit" value="créer">

    </form>


    @isset($success)
        {{$success}}
    @endisset

@endsection

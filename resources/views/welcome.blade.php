<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>

<p>home</p>

{{--

# include php
--------------
@php
   ...
@endphp

The current UNIX timestamp is {{ time() }}.


# loop
------------
@foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
@endforeach


# isset
------------------
@isset($records)
    // $records is defined and is not null...
@endisset

# if
------------------
@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif


# javascript
----------------
Hello, @{{ name }}.


# summernote
------------------------
Hello, {!! $content !!}.

--}}

</body>
</html>
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Nurul Blog | About</title>
</head>
<body>
    <h1>Halaman About</h1> --}}
    {{-- <h1>@php
        echo $name;
    @endphp</h1>
    <p>@php
        echo $email;
    @endphp</p> --}}

@extends('layouts.main')
@section('container')

    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3> 
    <h3>{{ $email }}</h3>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection

{{-- </body>
</html> --}}


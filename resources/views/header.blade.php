<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ивентомания</title>
  <link rel="stylesheet" href="{{ asset('assets/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
  <link rel="icon" sizes="32x32" type="image/svg+xml" href="{{ asset('assets/logo 1.svg')}}">
  <script src="{{ asset('assets/bootstrap.min.js') }}"></script>
</head>
<body>
  
  @if (Auth::check())
  <header class="container d-flex flex-wrap mt-3 align-items-center justify-content-between">
    <a href="/" class="d-flex flex-nowrap justify-content-center justify-content-md-start mx-auto mx-xl-0">
      {{-- проблема с а --}}
      <img class="col-3 px-0" src="{{ asset('assets/logo 1(1).png') }}" alt="logo">
      <h1 class="text-primary px-0 col-auto">Ивентомания</h1>
    </a>
    <a href="list" class="btn btn-primary px-4 py-2 mx-auto mt-4 mt-md-0 mx-md-0">Пошел нахуй, хуила</a>
  </header>
  @else
  <header class="container d-flex flex-wrap mt-3 align-items-center justify-content-between">
    <a href="/" class="d-flex flex-nowrap justify-content-center justify-content-md-start mx-auto mx-xl-0">
      {{-- проблема с а --}}
      <img class="col-3 px-0" src="{{ asset('assets/logo 1(1).png') }}" alt="logo">
      <h1 class="text-primary px-0 col-auto">Ивентомания</h1>
    </a>
    <a href="list" class="btn btn-primary px-4 py-2 mx-auto mt-4 mt-md-0 mx-md-0">Выбрать<br>Мастер-класс</a>
  </header>
  @endif
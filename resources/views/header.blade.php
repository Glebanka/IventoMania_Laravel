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
  @php
    $user = Auth::user();
  @endphp
  @if (Auth::check() &&  $user->user_type_id == "1")
  <header class="container d-flex flex-wrap mt-3 align-items-center justify-content-between">
    <a href="/" class="d-flex flex-nowrap justify-content-center justify-content-md-start mx-auto mx-xl-0">
      {{-- проблема с а --}}
      <img class="col-3 px-0" src="{{ asset('assets/logo 1(1).png') }}" alt="logo">
      <h1 class="text-primary px-0 col-auto">Ивентомания</h1>
    </a>
    <div class="d-flex">
      <a href="list" class="btn btn-primary px-4 py-2 mx-auto mt-4 mt-md-0 mx-md-0">Выбрать мастер-класс</a>
      <a href="" class="d-flex">
        <div class="d-flex flex-column">
          <p class="fs-4 m-0">{{$user->fullname}}</p>
          <p class="m-0">Слушатель</p>
        </div>
        <svg width="48" height="47" viewBox="0 0 48 47" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M24 19.5833C24.9001 19.5833 25.7914 19.406 26.623 19.0616C27.4546 18.7171 28.2102 18.2123 28.8466 17.5758C29.4831 16.9393 29.988 16.1837 30.3324 15.3521C30.6769 14.5206 30.8542 13.6293 30.8542 12.7292C30.8542 11.8291 30.6769 10.9378 30.3324 10.1062C29.988 9.2746 29.4831 8.51901 28.8466 7.88254C28.2102 7.24607 27.4546 6.7412 26.623 6.39674C25.7914 6.05229 24.9001 5.875 24 5.875C22.1822 5.875 20.4388 6.59713 19.1534 7.88254C17.868 9.16794 17.1458 10.9113 17.1458 12.7292C17.1458 14.547 17.868 16.2904 19.1534 17.5758C20.4388 18.8612 22.1822 19.5833 24 19.5833ZM6.375 39.95V41.125H41.625V39.95C41.625 35.5633 41.625 33.37 40.7712 31.6937C40.0202 30.2198 38.8219 29.0215 37.348 28.2705C35.6717 27.4167 33.4783 27.4167 29.0917 27.4167H18.9083C14.5217 27.4167 12.3283 27.4167 10.652 28.2705C9.17813 29.0215 7.97983 30.2198 7.22883 31.6937C6.375 33.37 6.375 35.5633 6.375 39.95Z" stroke="#1384D6" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>
  </header>
  @elseif (Auth::check() && $user->user_type_id == "2")
  <header class="container d-flex flex-wrap mt-3 align-items-center justify-content-between">
    <a href="/" class="d-flex flex-nowrap justify-content-center justify-content-md-start mx-auto mx-xl-0">
      {{-- проблема с а --}}
      <img class="col-3 px-0" src="{{ asset('assets/logo 1(1).png') }}" alt="logo">
      <h1 class="text-primary px-0 col-auto">Ивентомания</h1>
    </a>
    <div class="d-flex gap-3">
      <a href="create_event" class="btn btn-primary px-4 py-2 mx-auto mt-4 mt-md-0 mx-md-0">Создать<br>мастер-класс</a>
      <a href="lector_cabinet" class="d-flex align-items-center">
        <div class="d-flex flex-column align-items-end justify-content-between ">
          <p class="fs-24 bold m-0 text-primary lh-1 deco-none">{{$user->fullname}}</p>
          <p class="fs-20 m-0 bold text-primary lh-1 deco-none">Лектор</p>
        </div>
        <svg width="48" height="47" viewBox="0 0 48 47" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M24 19.5833C24.9001 19.5833 25.7914 19.406 26.623 19.0616C27.4546 18.7171 28.2102 18.2123 28.8466 17.5758C29.4831 16.9393 29.988 16.1837 30.3324 15.3521C30.6769 14.5206 30.8542 13.6293 30.8542 12.7292C30.8542 11.8291 30.6769 10.9378 30.3324 10.1062C29.988 9.2746 29.4831 8.51901 28.8466 7.88254C28.2102 7.24607 27.4546 6.7412 26.623 6.39674C25.7914 6.05229 24.9001 5.875 24 5.875C22.1822 5.875 20.4388 6.59713 19.1534 7.88254C17.868 9.16794 17.1458 10.9113 17.1458 12.7292C17.1458 14.547 17.868 16.2904 19.1534 17.5758C20.4388 18.8612 22.1822 19.5833 24 19.5833ZM6.375 39.95V41.125H41.625V39.95C41.625 35.5633 41.625 33.37 40.7712 31.6937C40.0202 30.2198 38.8219 29.0215 37.348 28.2705C35.6717 27.4167 33.4783 27.4167 29.0917 27.4167H18.9083C14.5217 27.4167 12.3283 27.4167 10.652 28.2705C9.17813 29.0215 7.97983 30.2198 7.22883 31.6937C6.375 33.37 6.375 35.5633 6.375 39.95Z" stroke="#1384D6" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>
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
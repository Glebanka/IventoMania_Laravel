@include('header')

<div class="d-flex gap-5 flex-column container">
  <h2 class="text-primary align-self-center bold">Войти</h2>
  <form class="gap-4 d-flex flex-column align-items-center" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Номер телефона</p>
      <input type="tel" class="width-600 fs-5 cardochka border-0 bold" placeholder="+79006332423" name='tel'>
    </div>
    @error('tel')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Пароль</p>
      <input type="password" class="width-600 fs-5 cardochka border-0 bold" placeholder="q1w2e3r4t5y6" name="password">
    </div>
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <input type="submit" class="btn btn-primary px-5 py-3 w-fit-content fs-4 mt-5" value="Войти"></input>
    <p class="text-primary fs-4 bold">или <a href="registration">Зарегистрироваться</a></p>

  </form>
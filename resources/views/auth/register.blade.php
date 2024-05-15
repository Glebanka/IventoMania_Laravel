@include('header')

<div class="d-flex gap-5 flex-column container">
  <h2 class="text-primary align-self-center bold">Зарегистрироваться</h2>
  <form class="gap-4 d-flex flex-column align-items-center" method="POST" action="{{ route('register') }}">
      @csrf
    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Номер телефона</p>
      <input type="tel" class="width-600 fs-5 cardochka border-0 bold @error('tel') is-invalid @enderror" placeholder="+79006332423" name="tel" value="{{ old('tel') }}" required autocomplete="tel">
      @error('tel')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>

    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">ФИО</p>
      <input type="text" class="width-600 fs-5 cardochka border-0 bold @error('fullname') is-invalid @enderror" placeholder="Иванов Иван Иванович" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname">
      @error('fullname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
      @enderror
    </div>

    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Сколько вам лет?</p>
      <input type="number" class="width-600 fs-5 cardochka border-0 bold @error('age') is-invalid @enderror" placeholder="16" name="age" value="{{ old('age') }}" required autocomplete="age">
      @error('age')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
      @enderror
    </div>
    
    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Email</p>
      <input type="email" class="width-600 fs-5 cardochka border-0 bold @error('email') is-invalid @enderror" placeholder="example@mail.com" name="email" value="{{ old('email') }}" required autocomplete="email">
      @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
      @enderror
    </div>
    
    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Пароль</p>
      <input type="password" class="width-600 fs-5 cardochka border-0 bold @error('pass') is-invalid @enderror" placeholder="q1w2e3r4t5y6" name="pass" value="{{ old('pass') }}" required autocomplete="new-password">
      @error('pass')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
      @enderror
    </div>
    
    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Повторите пароль</p>
      <input type="password" class="width-600 fs-5 cardochka border-0 bold @error('pass_confirmation') is-invalid @enderror" placeholder="q1w2e3r4t5y6" name="pass_confirmation" value="{{ old('pass_confirmation') }}" required autocomplete="new-password">
      @error('pass_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
      @enderror
    </div>
    
    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Кто вы?</p>         
      <select name="role" class="width-600 fs-5 cardochka border-0 bold bg-white">
        <option value="1">Слушатель</option>
        <option value="2">Лектор</option>
      </select>
    </div>

    <input type="submit" class="btn btn-primary px-5 py-3 w-fit-content fs-4 mt-5" value="Зарегистрироваться"></input>

    {{-- <p class="text-primary fs-4 bold">или <a href="{{ route('login') }}">Войти</a></p> --}}

  </form>
  
</div>
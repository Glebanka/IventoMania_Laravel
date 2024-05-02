@include('header')

<div class="d-flex gap-5 flex-column container">
  <h2 class="text-primary align-self-center bold">Зарегистрироваться</h2>
  <form class="gap-4 d-flex flex-column align-items-center" method="POST" action="{{ route('registration') }}">
    @csrf
    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Номер телефона</p>
      <input type="tel" class="width-600 fs-5 cardochka border-0 bold" placeholder="+79006332423" name="tel">
    </div>

    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">ФИО</p>
      <input type="text" class="width-600 fs-5 cardochka border-0 bold" placeholder="Иванов Иван Иванович" name="fullName">
    </div>
    
    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Email</p>
      <input type="text" class="width-600 fs-5 cardochka border-0 bold" placeholder="example@mail.com" name="email">
    </div>
    
    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Пароль</p>
      <input type="password" class="width-600 fs-5 cardochka border-0 bold" placeholder="q1w2e3r4t5y6" name="pass">
    </div>
    
    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Повторите пароль</p>
      <input type="password" class="width-600 fs-5 cardochka border-0 bold" placeholder="q1w2e3r4t5y6" name="passConfirm">
    </div>
    
    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Кто вы?</p>         
      <select class="width-600 fs-5 cardochka border-0 bold bg-white">
        <option>Слушатель</option>
        <option>Лектор</option>
      </select>
    </div>

    <input type="submit" class="btn btn-primary px-5 py-3 w-fit-content fs-4 mt-5" value="Зарегистрироваться"></input>

    <p class="text-primary fs-4 bold">или <a href="login">Войти</a></p>

  </form>
  
</div>
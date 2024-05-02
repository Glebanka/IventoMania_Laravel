@include('header')

<div class="d-flex gap-5 flex-column container">
  <h2 class="text-primary align-self-center bold">Создать мастер-класс</h2>
  <form class="gap-4 d-flex flex-column align-items-center">

    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Название</p>
      <input type="text" class="width-600 fs-5 cardochka border-0 bold" placeholder="Введите название">
    </div>
    
    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Описание</p>
      <input type="text" class="width-600 fs-5 cardochka border-0 bold" placeholder="Введите описание">
    </div>
    
    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Выберите зону <strong class="fs-5 my-0 bold text-gray">(не отличаются)</strong> </p>         
      <select class="width-600 fs-5 cardochka border-0 bold bg-white">
        <option>1 зона</option>
        <option>2 зона</option>
        <option>3 зона</option>
      </select>
    </div>
    
    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Выберите время </p>         
      <select class="width-600 fs-5 cardochka border-0 bold bg-white">
        <option>8:00-8:50</option>
        <option>9:00-9:50</option>
        <option>10:00-10:50</option>
        <option>11:00-11:50</option>
        <option>12:00-12:50</option>
        <option>13:00-13:50</option>
        <option>14:00-14:50</option>
        <option>15:00-15:50</option>
        <option>16:00-16:50</option>
        <option>17:00-17:50</option>
        <option>18:00-18:50</option>
      </select>
    </div>
    
    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Не хватает времени?</p>
      <div class="width-600 cardochka bg-primary d-flex flex-column align-items-center py-3 cursor"><svg width="61" height="61" viewBox="0 0 61 61" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="30.5" cy="30.125" r="30.125" fill="white"/><path d="M45.5623 25.104H35.5207V15.0623C35.5207 13.7307 34.9917 12.4537 34.0501 11.5121C33.1085 10.5705 31.8314 10.0415 30.4998 10.0415C29.1682 10.0415 27.8912 10.5705 26.9496 11.5121C26.008 12.4537 25.479 13.7307 25.479 15.0623L25.6572 25.104H15.4373C14.1057 25.104 12.8287 25.633 11.8871 26.5746C10.9455 27.5162 10.4165 28.7932 10.4165 30.1248C10.4165 31.4564 10.9455 32.7335 11.8871 33.6751C12.8287 34.6167 14.1057 35.1457 15.4373 35.1457L25.6572 34.9674L25.479 45.1873C25.479 46.5189 26.008 47.796 26.9496 48.7376C27.8912 49.6792 29.1682 50.2082 30.4998 50.2082C31.8314 50.2082 33.1085 49.6792 34.0501 48.7376C34.9917 47.796 35.5207 46.5189 35.5207 45.1873V34.9674L45.5623 35.1457C46.8939 35.1457 48.171 34.6167 49.1126 33.6751C50.0542 32.7335 50.5832 31.4564 50.5832 30.1248C50.5832 28.7932 50.0542 27.5162 49.1126 26.5746C48.171 25.633 46.8939 25.104 45.5623 25.104Z" fill="#1384D6"/></svg>
      </div>
    </div>
    
    <div class="d-flex flex-column gap-3">
      <p class="fs-4 text-primary my-0 bold">Цена</p>
      <input type="text" class="width-600 fs-5 cardochka border-0 bold" placeholder="Введите цену вашего мастер-класса">
    </div>

    <input type="submit" class="btn btn-primary px-4 py-3 w-fit-content fs-4 mt-5" value="Создать"></input>
    
  </form>
</div>

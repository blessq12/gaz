@extends('layouts.front')

@section('title', 'Заголовок')
@section('desc', 'Описание')
@section('content')
    <x-front.hero 
        image='/assets/banner.jpg'
    >
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col">
                <h1>
                    Строительство газопровода и подключение к газу в томске и области
                </h1>
                <h4>Комплексный подход:</h4>
                <ul>
                    <li>Помогаем получить технические условия</li>
                    <li>Оптимально проектируем и грамотно монтируем газопровод и оборудование</li>
                    <li>Сдаем надзорным органам</li>
                </ul>
                <p class="text-danger">Внимание! Мы НЕ подключаем к газу бесплатно по социальной программе. Благодарим за понимание.</p>
            </div>
            <div class="col d-flex align-items-center">
                <form action="" class="border border-light p-3 w-100" onsubmit="event.preventDefault()">
                    <div class="row mb-2">
                        <div class="col">
                            <h5>Оставьте заявку уже сегодня!</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Ваше имя</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="tel">Номер телефона</label>
                                <input type="text" name="tel" id="tel" class="form-control" data-maska="+7 (###) ###-##-##">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-light">Оттправить</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </x-front.hero>

    <section>
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="section-header">Мы подводим и подключаем</h2>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 g-2 g-lg-4">
                @php
                    $items = [
                        (object) ['name' => 'Частные дома', 'image' => '/assets/home-regular.jpg'],
                        (object) ['name' => 'Коттеджи', 'image' => '/assets/cottage.jpg'],
                        (object) ['name' => 'Дачи', 'image' => '/assets/dacha.jpg'],
                        (object) ['name' => 'Промышленные помещения', 'image' => '/assets/prom.jpg'],
                        (object) ['name' => 'Автосервисы', 'image' => '/assets/serv.jpg'],
                        (object) ['name' => 'Магазины и кафе', 'image' => '/assets/market.jpg'],
                        (object) ['name' => 'Многоквартирные дома и таун-хаусы', 'image' => '/assets/house-tall.jpg'],
                    ]
                @endphp
                @foreach ($items as $el)
                    <div class="col mb-2">
                        <div class="where">
                            <div class="header rounded bg-image" style="background: url({{ $el->image }})"></div>
                            <div class="content p-2">
                                <h5>{{ $el->name }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row mb-4">
                <div class="col">
                    <h2 class="section-title">Сколько стоит провести газ</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2">
                <div class="col mb-4 mb-lg-0">
                    <p>
                        Осуществление проекта газификации в каждом доме — сложная и ответственная процедура, требующая наличия всех уставных документов и профессионализма. 
                        В целях поддержки частных и физических лиц, необходимое подведение к газораспределительной системе можно заказать на нашем сайте. 
                        Учитываем все нюансы, условия и подготавливаем уникальные доступные решения!
                    </p>
                    <p>Главные достоинства фирмы:</p>
                    <ul>
                        <li>Бюджетная стоимость. Быстрое газопроведение по стандартному алгоритму.</li>
                        <li>Консультации сотрудников по всем возникающим вопросам, связанным с подключением энергии.</li>
                        <li>Полностью прозрачный прайс, без дополнительных наценок и скрытых платежей, которые часто присутствуют в предложениях других фирм.</li>
                        <li>Профессиональное сопровождение при оформлении и выполнении работ.</li>
                    </ul>
                    <p>
                        Для того, чтобы уточнить больше о стоимости, достаточно зайти на наш вебсайт и связаться со специалистами. Подробно проконсультируем и поможем в организации газификационной процедуры уже завтра, а смета на установку приятно удивит вас! Приглашаем ознакомиться с прайсом и предложениями компании поближе!
                    </p>
                </div>
                <div class="col">
                    <div class="bg-image h-100 w-100 rounded" style="background: url(/assets/cost.jpg);min-height: 250px"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
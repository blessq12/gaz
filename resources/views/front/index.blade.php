@extends('layouts.front')

@section('title', 'Заголовок')
@section('desc', 'Описание')
@section('content')
    <x-front.hero 
        image='/assets/banner.jpg'
    >
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col col-lg-10">
                <h1>
                    Строительство газопровода и подключение к газу в томске и области
                </h1>
                <h4>Комплексный подход:</h4>
                <ul>
                    <li>Помогаем получить технические условия</li>
                    <li>Оптимально проектируем и грамотно монтируем газопровод и оборудование</li>
                    <li>Сдаем надзорным органам</li>
                </ul>
                <div class="btn-group mt-3">
                    <a href="" class="btn btn-light">Позвонить</a>
                    <a href="" class="btn text-light" style="background: #128c7e">
                        <i class="fa fa-whatsapp"></i>
                        Написать в WhatsApp
                    </a>
                </div>
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
                    <div class="col mb-2">
                        <a href="{{ $company->wa }}" target="_blank" class="text-decoration-none">
                            <div class="where">
                                <div class="header rounded bg-image text-light d-flex align-items-center justify-content-center" style="background: #128c7e">
                                    <div class="text-center">
                                        <i class="fa fa-whatsapp fa-5x d-block mb-2"></i>
                                        Бесплатная консультация
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col mb-2">
                        <a href="tel:{{ $company->telAdd }}" target="_blank" class="text-decoration-none">
                            <div class="where">
                                <div class="header rounded bg-image text-light d-flex align-items-center justify-content-center" style="background: #128c7e">
                                    <div class="text-center">
                                        <i class="fa fa-phone fa-5x d-block mb-2"></i>
                                        {{ $company->telAdd }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
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
                    <div class="bg-image h-100 w-100 rounded" style="background: url(/assets/cost.jpeg);min-height: 250px"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cta rounded">
                        <div class="row">
                            <div class="col">
                                <h2>Бесплатная консультация!</h2>
                                <p>
                                    Каждый дом или участок по-своему уникален и невозможно разработать универсальную схему для просчета любых случаев,
                                    Мы оказываем бесплатные консультации с профессиональной точки зрения и чтобы не вводиить людей в заблуждения о стоимости
                                </p>
                                <p>
                                    Выберите способ для связи:
                                </p>
                                <div class="btn-group">
                                    <a href="tel:{{ $company->phone }}" class="btn btn-light">
                                        <i class="fa fa-phone"></i>
                                        Позвонить
                                    </a>
                                    <a href="tel:{{ $company->phone }}" class="btn btn-outline-light">
                                        <i class="fa fa-whatsapp"></i>
                                        Написать WhatsApp
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
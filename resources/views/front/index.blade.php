@extends('layouts.front')

@section('title', 'Газификация в Томске и области. ' . $company->name )
@section('desc', $company->desc )
@section('content')
    <x-front.hero 
        :image="session('city') == 'tomsk' ? asset('/assets/tomsk.png') : asset('/assets/asino.jpg')"
    >
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col col-lg-10">
                <h1>
                    @if (session('city') == 'tomsk')
                        <span>Газификация в Томске: Обеспечьте себе комфорт и безопасность с нашими профессиональными услугами, которые мы предоставляем под ключ!</span>
                    @elseif (session('city') == 'asino')
                        <span>Газификация в Асино: Доверьте нам подключение газа и наслаждайтесь уютом и теплом в вашем доме с гарантией качества!</span>
                    @endif
                </h1>
                <h4>Комплексный подход:</h4>
                <ul>
                    <li>Помогаем получить технические условия</li>
                    <li>Оптимально проектируем и грамотно монтируем газопровод и оборудование</li>
                    <li>Сдаем надзорным органам</li>
                </ul>
                <div class="btn-group mt-4 d-none d-lg-inline-block">
                    <a href="tel:{{ $company->phone }}" class="btn  btn-light btn-lg">Позвонить</a>
                    <a href="{{ $company->wa }}" class="btn text-light btn-lg" style="background: linear-gradient(135deg, #25D366, #128C7E);" target="_blank">
                        <i class="fa fa-whatsapp"></i>
                        Написать в WhatsApp
                    </a>
                </div>
                <div class="d-flex d-lg-none justify-content-center w-100 gap-2 mt-4">
                    <a href="tel:{{ $company->phone }}" class="btn btn-light btn-lg">
                        <i class="fa fa-phone"></i>
                        Позвонить
                    </a>
                    <a href="{{ $company->wa }}" class="btn text-light d-flex align-items-center justify-content-center" style="background: linear-gradient(135deg, #25D366, #128C7E);" target="_blank">
                        <i class="fa fa-whatsapp mx-2 fa-2x"></i>
                        WhatsApp
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
                    <div class="col mb-1">
                        <div class="where">
                            <div class="header rounded bg-image" style="background: url({{ $el->image }})"></div>
                            <div class="content p-2">
                                <h5 class="mb-0">{{ $el->name }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div class="col mb-2">
                        <a href="{{ $company->wa }}" target="_blank" class="text-decoration-none">
                            <div class="where">
                                <div class="header rounded bg-image text-light d-flex align-items-center justify-content-center" style="background: #128c7e">
                                    <div class="text-center">
                                        <i class="fa fa-whatsapp fa-3x d-block mb-2"></i>
                                        Бесплатная консультация
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col mb-2">
                        <a href="tel:{{ $company->phone }}" class="text-decoration-none">
                            <div class="where">
                                <div class="header rounded bg-image text-light d-flex align-items-center justify-content-center" style="background: #128c7e">
                                    <div class="text-center">
                                        <i class="fa fa-phone fa-3x d-block mb-2"></i>
                                        {{ $company->phone }}
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
                                        {{ $company->phone }}
                                    </a>
                                    <a 
                                        href="{{ $company->wa }}" 
                                        class="btn btn-outline-light" 
                                        style="background: linear-gradient(135deg, #25D366, #128C7E);" 
                                        target="_blank"
                                    >
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
    <city-approve
        :city='@json(session('city'))'
    ></city-approve>
@endsection
<footer>
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 mb-4">
            <div class="col">
                <div class="logo mb-3">
                    <img src="/assets/logo-light.png" alt="">
                    <p>{{ $company->title }}</p>
                </div>
                <p class="">{{ $company->description }}</p>
            </div>
            <div class="col d-none d-lg-block"></div>
            <div class="col">
                <h5 class="border-bottom pb-2">Контакты</h5>
                <ul>
                    <a href="tel:{{ $company->phone }}">
                        <li>
                            <i class="fa fa-phone"></i>
                            {{ $company->phone }}
                        </li>
                    </a>
                    <a href="mailto:{{ $company->email }}">
                        <li>
                            <i class="fa fa-envelope"></i>
                            {{ $company->email }}
                        </li>
                    </a>
                    <a href="{{ $company->navigator }}">
                        <li>
                            <i class="fa fa-map-marker"></i>
                            {{ $company->address }}
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="row border-top py-3">
            <div class="col">
                <div class="d-flex gap-2">
                    <p class="mb-0">© 2024 {{ $company->title }}</p>
                    <div class="vr"></div>
                    <a href="{{ route('front.privacyPolicy') }}">Политика конфиденциальности</a>
                </div>
            </div>
        </div>
    </div>
</footer>
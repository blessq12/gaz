<footer>
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3">
            <div class="col">
                <div class="logo mb-3">
                    <img src="/assets/logo-light.png" alt="">
                    <p>{{ $company->name }}</p>
                </div>
                <p class="">{{ $company->desc }}</p>
            </div>
            <div class="col d-none d-lg-block"></div>
            <div class="col">
                <h5 class="border-bottom pb-2">Контакты</h5>
                <ul>
                    <a href="tel:{{ $company->telAdd }}">
                        <li>
                            <i class="fa fa-phone"></i>
                            {{ $company->telAdd }}
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
    </div>
</footer>
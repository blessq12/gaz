<nav>
    <div class="container">
        <div class="row row-cols-2 row-cols-lg-3 align-items-center">
            <div class="col">
                <div class="logo">
                    <img src="/assets/logo-light.png" alt="{{ $company->name }}">
                    <p>{{ $company->name }}</p>
                </div>
            </div>
            <div class="col d-none d-lg-block">
            </div>
            <div class="col d-flex justify-content-end">
                <div class="btn-group">
                    <a href="tel:{{ $company->tel }}" class="btn btn-light px-3 btn-sm">
                        <i class="fa fa-phone"></i>
                        Звонок
                    </a>
                    <a href="{{ $company->wa }}" class="btn px-3 text-light btn-sm" style="background: #128c7e" target="_blank">
                        <i class="fa fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
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
                <a href="{{ $company->wa }}" class="btn btn-success btn-sm d-none d-lg-block">
                    <i class="fa fa-whatsapp"></i>
                    Написать в WhatsApp
                </a>
                <div class="d-lg-none">
                    <mobile-menu></mobile-menu>
                </div>
            </div>
        </div>
    </div>
</nav>
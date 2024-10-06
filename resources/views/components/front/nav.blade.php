<nav>
    <div class="container">
        <div class="row row-cols-2 align-items-center">
            <div class="col">
                <a href="{{ route('front.index') }}">
                    <div class="logo">
                        <img src="/assets/logo-light.png" alt="{{ $company->title }}">
                    <p>{{ $company->title }}</p>
                    </div>
                </a>
            </div>
            <div class="col d-flex justify-content-end align-items-center gap-3">
                <div class="d-flex gap-2 align-items-center justify-content-end">
                    <span>Город: </span>

                    <select class="form-select form-select-sm" onchange="window.location.href = this.value">
                        <option value="{{ route('front.setCity', ['city' => 'tomsk']) }}" {{ session('city') == 'tomsk' ? 'selected' : '' }}>Томск</option>
                        <option value="{{ route('front.setCity', ['city' => 'asino']) }}" {{ session('city') == 'asino' ? 'selected' : '' }}>Асино</option>
                    </select>
                </div>
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
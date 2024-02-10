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

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();
    for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
    k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
 
    ym(96427890, "init", {
         clickmap:true,
         trackLinks:true,
         accurateTrackBounce:true,
         webvisor:true
    });
 </script>
 <noscript><div><img src="https://mc.yandex.ru/watch/96427890" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
 <!-- /Yandex.Metrika counter -->
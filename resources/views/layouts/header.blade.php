<header class="header">
    <div class="navbar">

        <nav class="navbar-top">
            <div class="container-navbar">

                <?php

                if ($_SERVER['REQUEST_URI'] == '/') {  ?>
                <a href="javascript:void(0);" class="logo">
                    <img src="/public/img/interface/logo.png" alt="логотип компании Артель и С">
                </a>
                <?php }

                else { ?>
                <a href="/" class="logo">
                    <img src="/public/img/interface/logo.png" alt="логотип компании Артель и С">
                </a>

                <?php } ?>

                <ul class="navbar-top__block">
                    <li>
                        <span>Реконструкция</span>
                        <span>Строительство</span>
                        <span>Ремонт</span>
                    </li>
                    <li>
                        <a href="https://t.me/artelistroy" target="_blank" rel="nofollow"><img src="/public/img/interface/telegram_icon.webp" alt="telegram icon" title="telegram"></a>
                        <a href="https://wa.me/79162527728" target="_blank" rel="nofollow"><img src="/public/img/interface/whatsapp.png"
                                                                                                alt="whatsApp" title="WhatsApp"></a>
                        <a href="javascript:void(0);"><img src="/public/img/interface/mail.png" alt="Email" title="E-mail"
                                                           class="mail__open"></a>
                    </li>
                    <li>
                        <a href="tel:+74952589397" rel="nofollow">+7 (495) 258-93-97 </a>
                        <a href="mailto:info@arteli-stroy.ru" target="_blank" rel="nofollow">info@arteli-stroy.ru</a>
                    </li>
                    <li>
                        <a href="tel:+74952589397" rel="nofollow">+7 (495) 258-93-97 </a>
                        <button class="button navbar-top__block-button modal-open__call">Заказать звонок</button>
                    </li>
                </ul>

                <!-- /.navbar-bottom__block -->
            </div>
        </nav>

        <div class="header__container"><!-- main menu -->
            <div class="header__menu menu">
                <div class="menu__icon">
                    <span></span>
                </div>
                <nav class="menu__body">
                    <ul class="menu__list" itemscope="" itemtype="https://www.schema.org/SiteNavigationElement"
                        role="menu">
                        <li itemprop="name" role="menuitem"><a class="menu__link" title="О компании" itemprop="url" href="{{route('about')}}">О компании</a></li>
                        <li itemprop="name" role="menuitem">
                            <a class="menu__link" title="Услуги компании Артель и С" itemprop="url" href="{{route('service')}}">Наши услуги</a>
                            <span class="menu__arrow"></span>
                            <ul class="menu__sub-list">
                                @foreach($services as $service)
                                    <li><a itemprop="url" href="{{route('service-one', ['url' => $service->url])}}" class="menu__sub-link">{{$service->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li itemprop="name" role="menuitem"><a class="menu__link" title="Цены компании Артель и С" itemprop="url" href="{{route('price')}}">Цены</a>
                        </li>
                        <li itemprop="name" role="menuitem"><a class="menu__link" title="Спецпредложение Артель и С" itemprop="url"
                                                               href="{{route('special-offers')}}" class="button btn-anim t-shadow">Спецпредложение</a></li>
                        <li itemprop="name" role="menuitem" style="display:none;"><a class="menu__link" title="Отзывы компании Артель и С" itemprop="url"
                                                                                     href="/all-feedback">Отзывы</a></li>
                        <li itemprop="name" role="menuitem"><a class="menu__link" title="Статьи компании Артель и С" itemprop="url"
                                                               href="{{route('articles')}}">Статьи</a></li>
                        <li itemprop="name" role="menuitem"><a class="menu__link" title="Контакты компании Артель и С" itemprop="url"
                                                               href="{{route('contacts')}}">Контакты</a></li>
                    </ul><!-- end navbar-block -->
                </nav>
            </div>
        </div><!-- end header__container -->

    </div>

</header>

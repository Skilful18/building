@extends('layouts.master')

  <meta name="robots" content="noindex,follow">

{{--  <meta name="description" content="<?php echo $description; ?>"> --}}

  <meta property="og:site_name" content="Артель и С">
{{--  <meta property="og:title" content="<?php echo $title; ?>">--}}
{{--  <meta property="og:description" content="<?php echo $description; ?>">--}}
  <meta property="og:type" content="website">
{{--  <meta property="og:url" content="https://arteli-stroy.ru/<?php echo $art['link']; ?>">--}}
{{--  <meta property="og:image" content="https://arteli-stroy.ru/<?php echo $art['img_big']; ?>">--}}
  <meta property="og:image:type" content="image/webp">

@section('styles')

@endsection

<!--  --><?php //require('../../include/plagins-without-timer.php'); ?>

@section('title')
    Услуги по отделки домов 🔨 прайсы на ремонт 🛠 компании – «Артель и С»
@endsection

@section('content')

  <div class="container">

    <section class="section">

      <div class="content-fluid">

        <ul class="navigation" itemscope="" itemtype="https://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
            <meta itemprop="position" content="0">
            <a itemprop="item" href="/"><span itemprop="name">Главная</span></a>
          </li>
          <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
            <meta itemprop="position" content="1">
            <a itemprop="item" href="/service/"><span itemprop="name">Наши услуги</span></a>
          </li>
          <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
          <meta itemprop="position" content="2">
{{--            <span itemprop="name"><?php echo $art['h1']; ?></span>--}}
            <div itemprop="item" itemscope="" itemtype="https://schema.org/Thing">
{{--              <link itemprop="url" href="/<?php echo $art['link']; ?>">--}}
            </div>
          </li>
        </ul>

        <div itemprop="inLanguage" itemscope="" itemtype="https://schema.org/Language">
          <meta itemprop="name" content="Russian">
          <meta itemprop="alternateName" content="ru">
        </div>

{{--        <meta itemprop="name" content="<?php echo $title; ?>">--}}
{{--        <link itemprop="url" href="https://arteli-stroy.ru/<?php echo $art['link']; ?>">--}}
{{--        <meta itemprop="articleSection" content="<?php echo $art['h1']; ?>">--}}
{{--        <meta itemprop="image" content="https://arteli-stroy.ru/<?php echo $art['img_big']; ?>">--}}

{{--        <h1 class="title__left article__title" itemprop="headline"><?php echo $art['h1']; ?></h1>--}}

        <div class="servicePage-block">

          <a href="/service/decoration/otdelka-imitaciej-brusa-ceny">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/decoration/otdelka-imitaciej-brusa-ceny-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Цены на отделку дома имитацией бруса</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/decoration/otdelka-fasadnymi-panelyami-ceny">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/decoration/otdelka-fasadnymi-panelyami-ceny-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Цены на отделку фасадными панелями</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/decoration/stoimost-otdelki-cokolya">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/decoration/stoimost-otdelki-cokolya-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость отделки цоколя</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/decoration/oblicovka-fasada-kamnem-prajs">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/decoration/oblicovka-fasada-kamnem-prajs-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Цены на облицовку фасада камнем</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/decoration/stoimost-otdelki-klinkernoj-plitkoj">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/decoration/stoimost-otdelki-klinkernoj-plitkoj-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость отделки фасада клинкерной плиткой
              </span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/decoration/stoimost-otdelki-blok-hausom">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/decoration/stoimost-otdelki-blok-hausom-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость отделки фасада блок-хаусом
              </span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/decoration/stoimost-chernovoj-otdelki">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/decoration/stoimost-chernovoj-otdelki-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость черновой и чистовой отделки</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/decoration/stoimost-otdelki-derevyannogo-doma">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/decoration/stoimost-otdelki-derevyannogo-doma-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость внутренней отделки деревянного дома</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/decoration/otdelka-bani-pod-klyuch">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/decoration/otdelka-bani-pod-klyuch-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Внутренняя отделка бани под ключ</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/decoration/ehlitnaya-otdelka">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/decoration/ehlitnaya-otdelka-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Элитная отделка домов</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/decoration/remont-doma-v-podmoskove">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/decoration/remont-doma-v-podmoskove-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт дома - расценки</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/remont-i-otdelka-kottedzhej">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/zagorodnyj-kottedzh-300x.webp" alt="загородный коттедж" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт и отделка коттеджа</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/kosmeticheskij-remont-kottedzha">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/kosmeticheskij-remont-300x.webp" alt="Косметический ремонт фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Косметический ремонт коттеджа</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/stoimost-remonta-v-taunhause">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/remont-taunhausa-300x.webp" alt="Ремонт таунхауса фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость ремонта в таухаусе</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/remont-kottedzhej-pod-klyuch">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/otdelka-kirpichom-i-kamnem-300x.webp" alt="Отделка кирпичом и камнем" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт коттеджей под ключ</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/otdelka-sauny">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/finskaya-sauna-300x.webp" alt="Финская сауна фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Отделка сауны</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/chistovaya-otdelka-kottedzha">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/remont-holla-300x.webp" alt="Ремонт холла фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Чистовая отделка коттеджа</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/otdelka-bani-iz-ocilindrovannogo-brevna">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/otdelka-bani-blok-hausom-300x.webp" alt="Отделка бани фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Отделка бани из оцилиндрованного бревна под ключ</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/otdelka-torgovyh-pomeshchenij">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/torgovye-ploshchadi-300x.webp" alt="Торговые площади фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Отделка торговых помещений</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/kosmeticheskij-remont-ofisa">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/remont-ofisa-300x.webp" alt="Ремонт офиса фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Косметический ремонт офиса</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/parilka-pod-klyuch">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/vnutrennyaya-otdelka-300x.webp" alt="Внутренняя отделка парилки фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Парилка под ключ</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/montazh-gipsokartona-cena-za-m2">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/otdelka-gipsokartonom-300x.webp" alt="Отделка гипсокартоном фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Монтаж гипсокартона</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/remont-koridora-pod-klyuch-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/remont-koridora-300x.webp" alt="Ремонт коридора фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт коридора под ключ - цена</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/dvuhurovnevyj-potolok-iz-gipsokartona-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/diagonalnyj-dvuhurovnevyj-potolok-300x.webp" alt="Диагональный двухуровневый потолок фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Двухуровневый потолок из гипсокартона - цена</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/potolok-iz-gipsokartona-cena-za-m2">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/potolok-iz-gipsokartona-300x.webp" alt="Потолок из гипсокартона фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Потолок из гипсокартона под ключ</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/montazh-peregorodok-iz-gipsokartona-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/peregorodka-iz-gipsokartona-300x.webp" alt="Перегородка из гипсокартона фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Монтаж перегородок из гипсокартона, цена за м2</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/otkosy-iz-gipsokartona-cena-za-rabotu">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/otkosy-iz-gipsokartona-300x.webp" alt="Откосы из гипсокартона фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Откосы из гипсокартона цена за работу</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/montazh-koroba-iz-gipsokartona-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/ustrojstvo-imitacii-kamina-300x.webp" alt="Устройство имитации камина фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Монтаж короба из гипсокартона цена</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/zadelka-shvov-gipsokartona-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/zadelka-shvov-300x.webp" alt="Заделка швов фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Заделка швов гипсокартона цена</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/remont-pechej-iz-kirpicha-stoimost-remonta">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/trechiny-300x.webp" alt="Ремонт трещин в печи фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт печей из кирпича - стоимость ремонта</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/vnutrennyaya-otdelka-imitaciej-brusa-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/montazh-imitacii-brusa-300x.webp" alt="Монтаж имитации бруса фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Внутренняя отделка имитацией бруса цена</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/stoimost-rabot-po-otdelke-pomeshchenij">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/remont-kvartiry-300x.webp" alt="Ремонт квартиры фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость работ по отделки помещений</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/remont-doma-pod-klyuch-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/dekorirovanie-akcentnoj-steny-300x.webp" alt="Декоративная стена фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт дома под ключ цена</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/otdelka-doma-pod-klyuch">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/kapitalnyj-remont-vnutri-doma-300x.webp" alt="Капитальный ремонт дома фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Отделка дома под ключ</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/stroitelstvo-i-remont-domov">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/proektirovanie-doma-300x.webp" alt="Проектирование дома фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Строительство и ремонт домов</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/ukladka-dekorativnogo-kamnya-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/dekorativnyj-kamen-300x.webp" alt="Декоративный камень фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Укладка декоративного камня</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/remont-i-otdelka-pomeshchenij">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/kosmeticheskij-remont-300x.webp" alt="Косметический ремонт фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Отделка помещений</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/stoimost-malyarnyh-rabot-za-m2">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/pokraska-sten-300x.webp" alt="Покраска стен фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость малярных работ за м2</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/demontazh-sajdinga-cena-za-m2">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/fasadnye-paneli-pod-kirpich-300x.webp" alt="Фасадные панели под кирпич фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Демонтаж сайдинга цена за м2</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/otdelochnye-raboty">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/otdelochnye-raboty-300x.webp" alt="Отделочные работы фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Отделочные работы</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/vnutrennyaya-otdelka-doma-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/kosmeticheskij-remont-chastnogo-doma-300x.webp" alt="Косметический ремонт фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Внутренняя отделка дома цена</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/otdelka-srubov-homyakovo">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/naruzhnaya-pokraska-300x.webp" alt="Наружная покраска сруба фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Отделка стубов Хомяково</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/otbivka-shtukaturki-cena-za-m2">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/decoration/fasadnaya-otdelka-kamnem-300x.webp" alt="Фасадная отделка камнем фото" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Отбивка штукатурки цена за м²</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

        </div>

        <div class="servicePage-block__text d-block">
          Монтаж кровли- это ответственный этап в строительстве дома. При выборе материалов для устройства силового каркаса кровли и сечения используемого материала, нужно учитывать ветровые, снеговые нагрузки, которые будут воздействовать на один квадратный метр (м²) вашей кровли.
        </div>

      </div><!-- /.-->

    </section>

  </div>

@endsection

@section('scripts')
    <script src="/public/js/script.min.js"></script>
@endsection

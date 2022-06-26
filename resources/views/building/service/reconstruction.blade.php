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

<!--  --><?php //include('../../include/plagins-without-timer.php.php.php'); ?>

@section('title')
    Услуги по реконструкции 🔨 достройке домов 🛠 прайсы 🛠 - Артель и С
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

          <a href="/service/reconstruction/rekonstrukciya-doma">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/8-min-227x120.webp" alt="Реконструкция дома" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Реконструкция дома</span>
            </div>
          </a>

          <a href="/service/reconstruction/rekonstrukciya-dachnogo-doma">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/4-300x.webp" alt="Реконструкция дачных домов" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Реконструкция дачного дома</span>
            </div>
          </a>

          <a href="/service/reconstruction/rekonstrukciya-kirpichnyh-domov">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/reconstruction/rekonstrukciya-kirpichnyh-domov-223x185.webp" alt="Реконструкция кирпичных домов" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Реконструкция кирпичных домов</span>
            </div>
          </a>

          <a href="/service/reconstruction/rekonstrukciya-fundamentov">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/reconstruction/rekonstrukciya-fundamentov-223x185.webp" alt="Реконструкция фундаментов" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Реконструкция фундаментов</span>
            </div>
          </a>

          <a href="/service/reconstruction/snos-rekonstrukciya-domov">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/reconstruction/snos-rekonstrukciya-domov-223x185.webp" alt="Снос, реконструкция домов" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Снос, реконструкция домов</span>
            </div>
          </a>

          <a href="/service/reconstruction/dostrojka-domov">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/reconstruction/dostrojka-domov-223x185.webp" alt="Достройка и реконструкция дачных домов" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Достройка и реконструкция дачных домов: цены</span>
            </div>
          </a>

          <a href="/service/reconstruction/rekonstrukciya-i-perestrojka-starogo-doma">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/reconstruction/rekonstrukciya-i-perestrojka-starogo-doma-223x185.webp" alt="Реконструкция и перестройка старого дома" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Реконструкция и перестройка старого дома</span>
            </div>
          </a>

          <a href="/service/reconstruction/reconstruction-calculator">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/reconstruction/stopgap-223x185.webp" alt="Калькулятор расчета стоимости реконструкции" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Калькулятор расчета стоимости реконструкции</span>
            </div>
          </a>

          <a href="/service/reconstruction/rekonstrukciya-ofisa">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/oblicovka-ofisnogo-zdaniya-300x.webp" alt="Реконструкция офисов" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Реконструкция офисов</span>
            </div>
          </a>

          <a href="/service/reconstruction/rekonstrukciya-mansardy-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/otremontirovannaya-mansarda-300x.webp" alt="Реконструкция мансарды - цена" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Реконструкция мансарды - цена</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-polov-ceny">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/remont-pola-v-dome-300x.webp" alt="Ремонт полов - цена" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт полов - цена</span>
            </div>
          </a>

          <a href="/service/reconstruction/rekonstrukciya-kryshi-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/rekonstrukciya-kryshi-na-dache-300x.webp" alt="Реконструкция крыши - цена" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Реконструкция крыши - цена</span>
            </div>
          </a>

          <a href="/service/reconstruction/rekonstrukciya-chastnogo-zhilogo-doma">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/rekonstrukciya-chastnogo-zhilogo-doma-300x.webp" alt="Реконструкция частного жилого дома" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Реконструкция частного жилого дома</span>
            </div>
          </a>

          <a href="/service/reconstruction/rekonstrukciya-bani">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/zamena-nizhnih-vencov-300x.webp" alt="Реконструкция бани" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Реконструкция бани</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-doma-vency">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/vency-doma-gniyut-300x.webp" alt="Ремонт венцов" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт венцов</span>
            </div>
          </a>

          <a href="/service/reconstruction/zamena-kryshi-starogo-derevyannogo-doma">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/zamena-kryshi-starogo-derevyannogo-doma-300x.webp" alt="Замена крыши старого деревянного дома" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Замена крыши старого деревянного дома</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-chastnogo-doma-v-sergiev-posad">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/remont-fasada-doma-300x.webp" alt="Отделка дома" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт частного дома в Сергиевом Посаде</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-domov-v-krasnogorske">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/dom-obshit-blok-hausom-300x.webp" alt="Отделка блок-хаусом" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт домов в Красногорске</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-domov-v-istre">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/naruzhnaya-otdelka-doma-300x.webp" alt="Наружная отделка дома" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт домов в Истре</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-doma-mozhajsk">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/otdelka-kleevoj-shpaklevkoj-300x.webp" alt="Ремонт дома" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт дома в Можайском районе</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-domov-volokolamsk">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/otdelka-imitaciej-brusa-300x.webp" alt="Отделка имитацией бруса" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт дома в Волоколамске</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-doma-kubinka">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/otdelka-doma-sajdingom-300x.webp" alt="Наружные работы" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт дома в Кубинке</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-doma-solnechnogorsk">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/dom-pokrashen-kraskoj-300x.webp" alt="Покраска вагонки" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт дома в Солнечногорске</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-doma-himki">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/kapitalnyj-remont-doma-300x.webp" alt="Наружная отделка дома" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт дома в Химках</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-doma-zvenigorod">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/vypolnena-otdelka-doma-sajdingom-300x.webp" alt="Дом отделан с помощью сайдинга" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт дома в Звенигороде</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-doma-zelenograd">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/vypolnena-otdelka-doma-300x.webp" alt="Отделка дома" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт дома в Зеленограде</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-doma-dedovsk">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/kapremont-doma-300x.webp" alt="Капитальный ремонт дома" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт дома в Дедовске</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-doma-odincovo">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/vypolnena-restavraciya-doma-300x.webp" alt="Реставрация дома" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт дома в Одинцово</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-doma-aprelevka">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/vypolnena-otdelka-doma-v-aprelevke-300x.webp" alt="Отделка дома" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт дома в Апрелевке</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-doma-pushkino">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/otdelka-doma-blok-hausom-300x.webp" alt="Отделка блок хаусом" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт дома в Пушкино</span>
            </div>
          </a>

          <a href="/service/reconstruction/remont-doma-klin">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/vypolnen-remont-doma-300x.webp" alt="Ремонт дома" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт дома в Клину</span>
            </div>
          </a>

          <a href="/service/restavraciya-fasadov">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/reconstruction/restavraciya-kirpichnogo-fasada-300x.webp" alt="Реконструкция кирпичного фасада" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Реконструкция фасадов</span>
            </div>
          </a>



        </div>

        <div class="servicePage-block__text"></div>

      </div><!-- /.-->

    </section>

  </div>

@endsection

@section('scripts')
    <script src="/public/js/script.min.js"></script>
@endsection

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
    Услуги по ремонту 🔨 строительству крыш от компании - Артель и С
@endsection

@section('content')

  <div class="container">

    <section class="section">

      <div class="content-fluid">

        <ul class="navigation" itemscope="" itemtype="https://schema.org/BreadcrumbList">
          <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" >
            <meta itemprop="position" content="0">
            <a itemprop="item" href="/" ><span itemprop="name">Главная</span></a>
          </li>
          <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" >
            <meta itemprop="position" content="1">
            <a itemprop="item" href="/service/" ><span itemprop="name">Наши услуги</span></a>
          </li>
          <li  itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
          <meta itemprop="position" content="2">
{{--            <span  itemprop="name"><?php echo $art['h1']; ?></span>--}}
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

          <a href="/service/roof/montazh-myagkoj-krovli">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/roof/montazh-myagkoj-krovli-223x185.webp" alt="Мягкая кровля" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Мягкая кровля</span>
            </div>
          </a>

          <a href="/service/roof/montazh-metallocherepicy">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/roof/montazh-metallocherepicy-223x185.webp" alt="Крыша из металлочерепицы" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Крыша из металлочерепицы</span>
            </div>
          </a>

          <a href="/service/roof/vidy-krysh">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/roof/vidy-krysh-223x185.webp" alt="Виды крыш" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Виды крыш</span>
            </div>
          </a>

          <a href="/service/roof/dostrojka-kryshi">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/stroitelstvo-kryshi-v-chastnom-dome-300x.webp" alt="Достройка крыши" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Достройка крыши</span>
            </div>
          </a>

          <a href="/service/roof/krysha-5x5">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/krysha-doma-5-na-5-300x.webp" alt="Крыша 5х5" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Крыша 5х5</span>
            </div>
          </a>

          <a href="/service/roof/krysha-6x6">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/krysha-doma-6-na-6-300x.webp" alt="Крыша 6х6" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Крыша 6х6</span>
            </div>
          </a>

          <a href="/service/roof/krysha-8x8">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/zamena-shifera-na-kryshe-300x.webp" alt="Крыша 8х8" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Крыша 8х8</span>
            </div>
          </a>

          <a href="/service/roof/krysha-9x9">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/obustrojstvo-krovli-300x.webp" alt="Крыша 9x9" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Крыша 9x9</span>
            </div>
          </a>

          <a href="/service/roof/krysha-10x10">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/krysha-10-na-10-300x.webp" alt="Крыша 10х10" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Крыша 10х10</span>
            </div>
          </a>

          <a href="/service/roof/krysha-12x12">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/remont-stropil-300x.webp" alt="Крыша 12х12" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Крыша 12х12</span>
            </div>
          </a>

          <a href="/service/roof/dom-13-na-13-krysha">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/remont-krovli-13-na-13.webp" alt="Крыша 13х13" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Крыша 13х13</span>
            </div>
          </a>

          <a href="/service/roof/krysha-15x15">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/krovelnyj-pirog-300x.webp" alt="Кровельный пирог" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Крыша 15х15</span>
            </div>
          </a>

          <a href="/service/roof/odnoskatnaya-krysha-6-na-6">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/dom-s-odnoskatnoj-kryshi-300x.webp" alt="Односкатная крыша" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Односкатная крыша 6 на 6</span>
            </div>
          </a>

          <a href="/service/roof/montazh-ondulina-na-odnoskatnuyu-kryshu">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/ondulin-na-kryshe-300x.webp" alt="Ондулин на крыше" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Монтаж ондулина на крышу</span>
            </div>
          </a>

          <a href="/service/roof/montazh-ploskoj-krovli">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/skhema-ploskaya-krysha-300x.webp" alt="Схема плоской крыши" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Монтаж плоской кровли</span>
            </div>
          </a>

          <a href="/service/roof/remont-krovli-iz-metallocherepicy">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/montazh-listov-metallocherepicy-300x.webp" alt="Монтаж листов металлочерепицы" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт кровли из металлочерепицы</span>
            </div>
          </a>

          <a href="/service/roof/stoimost-pokrytiya-kryshi-profnastilom">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/montazh-proflista-na-kryshe-300x.webp" alt="Монтаж профлиста на крыше" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость покрытия крыши профнастилом</span>
            </div>
          </a>

          <a href="/service/roof/cena-montazha-metallocherepicy">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/krysha-doma-iz-metallocherepicy-300x.webp" alt="Крыша дома из металлочерепицы" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость монтажа металлочерепицы</span>
            </div>
          </a>

          <a href="/service/roof/metallicheskaya-krysha">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/krysha-iz-metalla-300x.webp" alt="Крыша из металла" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Металлическая крыша</span>
            </div>
          </a>

          <a href="/service/roof/skolko-stoit-perekryt-kryshu">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/perekryvaem-kryshu-proflistom-300x.webp" alt="Перекрытие крыши профнастилом" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Сколько стоит перекрыть крышу</span>
            </div>
          </a>

          <a href="/service/roof/remont-krovli">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/zamena-kryshi-iz-proflista-300x.webp" alt="Замена крыши из профнастила" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ремонт кровли</span>
            </div>
          </a>

          <a href="/service/roof/krovlya-pod-klyuch">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/montazh-krovli-300x.webp" alt="Монтаж кровли" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Кровля под ключ</span>
            </div>
          </a>

          <a href="/service/roof/demontazh-krovli">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/demontazh-kryshi-krovli-300x.webp" alt="Демонтаж кровли" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Демонтаж кровли цена за м²</span>
            </div>
          </a>

          <a href="/service/roof/demontazh-shifera-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/demontazh-krovli-300x.webp" alt="Демонтаж шифера" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Демонтаж шифера цена за м²</span>
            </div>
          </a>

          <a href="/service/roof/podshivka-svesov-krovli-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/otkrytyie-stropyla-300x.webp" alt="Открытые стропила" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Подшивка светов кровли - цены</span>
            </div>
          </a>

          <a href="/service/roof/krovelnye-raboty-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/krovelnye-raboty-300x.webp" alt="Кровельные работы" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Кровельные работы - цены</span>
            </div>
          </a>

          <a href="/service/roof/montazh-krovli">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/montazh-okna-300x.webp" alt="Монтаж окна" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Монтаж кровли</span>
            </div>
          </a>

          <a href="/service/skolko-stoit-uteplit-kryshu">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/roof/uteplenie-potolka-300x.webp" alt="Утепление мансарды" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Сколько стоит утеплить крышу</span>
            </div>
          </a>

        </div>

        <div class="servicePage-block__text">
          Монтаж кровли - это ответственный этап в строительстве дома. При выборе материалов для устройства силового каркаса кровли и сечения используемого материала, нужно учитывать ветровые, снеговые нагрузки, которые будут воздействовать на один квадратный метр (м²) вашей кровли.
        </div>

      </div><!-- /.-->

    </section>

  </div>

@endsection

@section('scripts')
    <script src="/public/js/script.min.js"></script>
@endsection

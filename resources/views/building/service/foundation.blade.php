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

<?php //require('../../include/plagins-without-timer.php'); ?>

@section('title')
    Услуги по строительству фундаментов 🔨 калькуляторы - Артель и С
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

          <a href="/service/foundation/zalivka-plity-garazh">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/zalivka-plity-garazh-223x185.webp" alt="зиливка плиты под гараж" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Цены на зиливку плиты под гараж</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/svajnyj-rostverkovyj-fundament">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/svajnyj-rostverkovyj-fundament-223x185.webp" alt="Свайно-ростверковый фундамент" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Свайно-ростверковый фундамент</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/stoimost-svajnogo-fundamenta-6x6">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/stoimost-svajnogo-fundamenta-6x6-223x185.webp" alt="свайный фундамент 6х6" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость свайного фундамента 6х6</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/fundament-pod-klyuch">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/fundament-pod-klyuch-223x185.webp" alt="фундамент под ключ" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">фундамент под ключ</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/fundament-banya-6x4">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/fundament-banya-6x4-223x185.webp" alt="Фундамент баня 6х4" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text"> Фундамент баня 6х4
              </span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/fundament-12x12-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/fundament-12x12-cena-223x185.webp" alt="Фундаментная плита 12х12" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Фундаментная плита 12х12
              </span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/fundament-dlya-doma-10x10-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/fundament-dlya-doma-10x10-cena-223x185.webp" alt="Фундамент для дома 10х10" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Фундамент для дома 10х10 цена</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/fundament-plita-10x10-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/fundament-plita-10x10-cena-223x185.webp" alt="монолитная плита 10х10" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Цены на монолитную плиту 10х10</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/stoimost-fundamenta-9x9">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/stoimost-fundamenta-9x9-223x185.webp" alt="фундамент 9х9" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость фундамента 9х9</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/stoimost-fundamenta-8x10">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/stoimost-fundamenta-8x10-223x185.webp" alt="фундамент 8х10" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость фундамента 8х10</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/fundament-8x9-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/fundament-8x9-cena-223x185.webp" alt="Фундамент 8х9" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Фундамент 8х9 - цена</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/fundament-8x8-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/fundament-8x8-cena-223x185.webp" alt="Фундамент 8х8" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Фундамент 8х8 - цена</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/fundament-7x7-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/fundament-7x7-cena-223x185.webp" alt="Фундамент 7х7" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Фундамент 7х7 - цена</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/stoimost-fundamenta-6x9">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/stoimost-fundamenta-6x9-223x185.webp" alt="фундамент 6х9" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость фундамента 6х9</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/stoimost-fundamenta-6x8">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/stoimost-fundamenta-6x8-223x185.webp" alt="фундамент 6х8" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость фундамента 6х8</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/stoimost-fundamenta-6x6">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/stoimost-fundamenta-6x6-223x185.webp" alt="фундамент 6х6" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость фундамента 6х6</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/fundament-4x4">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/fundament-4x4-223x185.webp" alt="Фундамента 4х4" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Фундамента 4х4</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/stoimost-fundamenta">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/stoimost-fundamenta-223x185.webp" alt="Фундамент" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Стоимость фундамента</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/fundamentnaya-plita-stoimost">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/fundamentnaya-plita-stoimost-223x185.webp" alt="Фундаментная плита" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Фундаментная плита - стоимость м2</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/lentochnyj-fundament-ceny">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/foundation/lentochnyj-fundament-ceny-223x185.webp" alt="Ленточный фундамент" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ленточный фундамент - цены</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/foundation/podem-doma-remont-fundamenta">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/foundation/podnyatie-stroeniya-s-fundamenta-300x.webp" alt="Подъем дома и ремонт фундамента" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Подъем дома и ремонт фундамента</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/demontazh-fundamenta">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/foundation/vintovye-svai-300x.webp" alt="Винтовые сваи замена" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Демонтаж фундамента</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/monolitnye-raboty">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/foundation/zalivka-betona-300x.webp" alt="Заливка бетона" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Монолитные работы</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/zamena-fundamenta">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/foundation/lentochnyj-fundament-300x.webp" alt="Ленточный фундамент замена" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Замена фундамента</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/stroitelstvo-fundamenta">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/foundation/stroitelstvo-lentochnogo-fundamenta-300x.webp" alt="Строительство ленточного фундамента" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Строительство фундамента</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/fundament-iz-blokov-fbs-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/foundation/bloki-fbs-300x.webp" alt="Блоки ФБС" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Фундамент из блоков ФБС цена</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/ushp-fundament-pod-klyuch-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/foundation/uteplennyj-fundament-300x.webp" alt="Утепленный фундамент УШП" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Ушп фундамент под ключ цена</span>
              <div class="servicePage-block__item-hover"></div>
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

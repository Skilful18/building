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
    Услуги по пристройкам и надстройкам 🔨 от компании - «Артель и С»
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

          <a href="/service/extensions/pristrojka-iz-gazoblokov">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/extensions/pristrojka-iz-gazoblokov-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Пристройка из газоблоков</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/extensions/pristroika-iz-penoblokov">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/extensions/pristrojka-iz-penoblokov-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Пристройка из пеноблоков</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/extensions/pristrojka-k-domu">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/extensions/pristrojka-k-domu-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Пристройка к дому</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/extensions/pristrojka-k-domu-cena">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/extensions/pristrojka-k-domu-cena-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Пристройка к дому цены</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/extensions/pristrojka-k-kirpichnomu-domu">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/extensions/pristrojka-k-kirpichnomu-domu-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Пристройка к кирпичному дому
              </span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/extensions/karkasnaya-pristrojka">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/extensions/karkasnaya-pristrojka-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Каркасная пристройка
              </span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/extensions/pristrojka-4x4">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/extensions/4x4-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Пристройка 4х4</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/extensions/pristrojka-4x5">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/extensions/4x5-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Пристройка 4х5</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/extensions/pristrojka-6x4">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/extensions/6x4-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Пристройка 6х4</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/extensions/pristrojka-k-domu-iz-brevna">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/extensions/pristrojka-k-domu-iz-brevna-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Пристройка к дому из бревна</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/extensions/pristrojka-k-domu-iz-brusa">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/extensions/pristrojka-k-domu-iz-brusa-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Пристройка к дому из бруса</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/extensions/pristrojka-k-derevyannomu-domu">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/extensions/pristrojka-k-derevyannomu-domu-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Пристройка к деревянному дому</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/extensions/pristrojka-garazha-k-domu">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/extensions/pristrojka-garazha-k-domu-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Пристройка гаража к дому</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/extensions/nadstrojka-nad-garazhom">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/extensions/nadstrojka-nad-garazhom-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Надстройка над гаражом</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>

          <a href="/service/extensions/nadstrojka-vtorogo-ehtazha-v-chastnom-dome">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/extensions/nadstrojka-vtorogo-ehtazha-v-chastnom-dome-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Надстройка второго этажа в частном доме</span>
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

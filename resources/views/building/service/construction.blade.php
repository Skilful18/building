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

<!--  --><?php //include('../../include/plagins-without-timer.php.php'); ?>

@section('title')
    Услуги по строительству домов 🔨 от  компании - «Артель и С»
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

          <a href="/service/construction/stroitelstvo-kirpichnyh-domov" rel="nofollow">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/construction/kamennii-dom-223x185.webp" alt="Кирпичный дом" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Строительство кирпичных домов</span>
            </div>
          </a>

          <a href="/service/construction/stroitelstvo-blochnyh-domov" rel="nofollow">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/construction/blochnii-dom-223x185.webp" alt="Блочный дом" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Строительство блочных домов</span>
            </div>
          </a>

          <a href="/service/construction/stroitelstvo-derevyannyh-domov" rel="nofollow">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/construction/derevyannii-dom-223x185.webp" alt="Деревянный дом" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Строительство деревянных домов</span>
            </div>
          </a>

          <a href="/service/construction/stroitelstvo-karkasnyh-domov">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/construction/rfrkasnii-dom-223x185.webp" alt="Каркасный дом" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Строительство каркасных домов</span>
            </div>
          </a>

          <a href="/service/construction/stroitelstvo-domov-fahverk">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/construction/dom-fahverk-223x185.webp" alt="Дом по технологии Фахверк" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Строительство домов по технологии Фахверк</span>
            </div>
          </a>

          <a href="/service/construction/stroitelstvo-doma-vokrug-starogo">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/construction/zalivka-lentochnogo-fundamenta-300x.webp" alt="Фундамент для пристройки" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Строительство дома вокруг старого</span>
            </div>
          </a>

          <a href="/service/rascenki-na-stroitelnye-raboty">
            <div class="servicePage-block__item">
              <img src="/public/img/pages/construction/stroitelnye-prinadlezhnosti-300x.webp" alt="Набор строительных инструментов" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Расценки на строительные работы</span>
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

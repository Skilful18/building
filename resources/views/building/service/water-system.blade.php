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
    Услуги по водоснабжению и канализации 🔨 в Москве - Артель и С
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
          <a href="/service/water-system/vodosnabzhenie-iz-skvazhin-i-kolodcev">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/water-system/vodosnabzhenie-iz-skvazhin-i-kolodcev-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Водоснабжение из скважин и колодцев</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>
          <a href="/service/water-system/montazh-avtonomnyh-septikov">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/water-system/montazh-avtonomnyh-septikov-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Монтаж и подключение автономных септиков</span>
              <div class="servicePage-block__item-hover"></div>
            </div>
          </a>
          <a href="/service/water-system/montazh-perelivnoj-kanalizacii">
            <div class="servicePage-block__item">
              <img src="/public/img/service-page/water-system/montazh-perelivnoj-kanalizacii-223x185.webp" alt="project" class="servicePage-block__item-img">
              <span class="servicePage-block__item-text">Монтаж переливной канализации из Ж/Б колец</span>
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

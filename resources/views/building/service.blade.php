@extends('layouts.master')

<meta name="robots" content="noindex,follow">

<meta name="description" content="<?php /*echo $description; */?>">

<meta property="og:site_name" content="Артель и С">
<meta property="og:title" content="<?php /*echo $title; */?>">
<meta property="og:description" content="<?php /*echo $description; */?>">
<meta property="og:type" content="website">
<meta property="og:url" content="https://arteli-stroy.ru/<?php /*echo $art['link']; */?>">
<meta property="og:image" content="https://arteli-stroy.ru/<?php /*echo $art['img_big']; */?>">
<meta property="og:image:type" content="image/webp">

@section('styles')

@endsection

<?php /*require('../include/3-plagins.php'); */?>

@section('title')
    Услуги по реконструкции 🔨 достройке 🛠 строительству 🛠 отделке
@endsection

@section('content')

<div class="container">

    <section class="section">

        <div class="servicePage content">

            <ul class="navigation" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <meta itemprop="position" content="0">
                    <a itemprop="item" href="/"><span itemprop="name">Главная</span></a>
                </li>
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <meta itemprop="position" content="1">
                    <span itemprop="name">
                        <?php /*echo $art['h1']; */?>
                    </span>
                    <div itemprop="item" itemscope="" itemtype="https://schema.org/Thing">
                        {{--<link itemprop="url" href="/<?php echo $art['link']; ?>">--}}
                    </div>
                </li>
            </ul>

            <div itemprop="inLanguage" itemscope="" itemtype="https://schema.org/Language">
                <meta itemprop="name" content="Russian">
                <meta itemprop="alternateName" content="ru">
            </div>

            {{--<meta itemprop="name" content="<?php echo $title; ?>">
            <link itemprop="url" href="https://arteli-stroy.ru/<?php echo $art['link']; ?>">
            <meta itemprop="articleSection" content="<?php echo $art['h1']; ?>">
            <meta itemprop="image" content="https://arteli-stroy.ru/<?php echo $art['img_big']; ?>">

            <h1 class="title__left article__title" itemprop="headline"><?php echo $art['h1']; ?></h1>--}}

            <div class="servicePage-block">

                @foreach($services as $service)

                    <a href="{{route('service-one', ['url' => $service->url])}}">
                        <div class="servicePage-block__item">
                            <img src="..\..\..\public\storage\{{$service->img}}" alt="project" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">{{$service->name}}</span>
                        </div>
                    </a>

                @endforeach

                    {{--/public/img/service-page/construction-223x185.webp--}}

                {{--<a href="/service/reconstruction/">
                    <div class="servicePage-block__item">
                        <img src="/public/img/service-page/reconstruction-223x185.webp" alt="project" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Реконструкция домов</span>
                    </div>
                </a>

                <a href="/service/decoration/">
                    <div class="servicePage-block__item">
                        <img src="/public/img/service-page/decoration-223x185.webp" alt="project" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Отделка домов</span>
                    </div>
                </a>

                <a href="/service/roof/">
                    <div class="servicePage-block__item">
                        <img src="/public/img/service-page/roof-223x185.webp" alt="project" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Крыши</span>
                    </div>
                </a>

                <a href="/service/foundation/">
                    <div class="servicePage-block__item">
                        <img src="/public/img/service-page/base-223x185.webp" alt="project" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Фундаменты</span>
                    </div>
                </a>

                <a href="/service/extensions/">
                    <div class="servicePage-block__item">
                        <img src="/public/img/service-page/extensions-223x185.webp" alt="project" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Пристройки к дому</span>
                    </div>
                </a>

                <a href="/service/warming/">
                    <div class="servicePage-block__item">
                        <img src="/public/img/service-page/warming-223x185.webp" alt="project" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Утепление домов</span>
                    </div>
                </a>

                <a href="/service/electrician/">
                    <div class="servicePage-block__item">
                        <img src="/public/img/service-page/electrician-223x185.webp" alt="project" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Электрика</span>
                    </div>
                </a>

                <a href="/service/water-system/">
                    <div class="servicePage-block__item">
                        <img src="/public/img/service-page/water-system-223x185.webp" alt="project" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Водоснабжение и канализация</span>
                    </div>
                </a>

                <a href="/service/heating/">
                    <div class="servicePage-block__item">
                        <img src="/public/img/service-page/heating-223x185.webp" alt="project" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Отопление</span>
                    </div>
                </a>

                <a href="/service/remont-ofisov">
                    <div class="servicePage-block__item">
                        <img src="/public/img/service-page/office-repair-223x185.webp" alt="project" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Ремонт офисов и помещений</span>
                    </div>
                </a>--}}

                <div class="servicePage-block__text"></div>
            </div>

        </div><!-- /.servicePage -->

    </section>

</div> <!-- .container -->

@endsection

@section('scripts')
    <script src="/public/js/script.min.js"></script>
@endsection

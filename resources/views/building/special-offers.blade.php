@extends('layouts.master')

<link rel="canonical" href="https://arteli-stroy.ru/special-offers">

<?php
/*
$num = 147;

$articles = mysqli_query($connection, "SELECT * FROM articles WHERE id = $num"); //произвести запрос

$art =  mysqli_fetch_assoc($articles);

$title = "Свежие и актуальные спецпредложения от компании - Артель и С";

$description = "На этой странице мы публикуем наши лучшие предложения для наших дорогих клиентов, заходите! мы обязательно найдем для вас подход";

//mysqli_query($connection, "UPDATE articles SET pubdate = CURRENT_TIMESTAMP() WHERE id = $num");

*/?>

{{--<meta name="description" content="<?php echo $description; ?>">

<meta property="og:site_name" content="Артель и С">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:type" content="article">
<meta property="og:url" content="https://arteli-stroy.ru/<?php echo $art['link']; ?>">
<meta property="og:image" content="https://arteli-stroy.ru/<?php echo $art['img_big']; ?>">
<meta property="og:image:type" content="image/webp">--}}

@section('styles')

@endsection

<?php /*include('./include/plagins.php'); */?>

@section('title')
    Свежие и актуальные спецпредложения от компании - Артель и С
@endsection

<body itemscope="" itemtype="https://schema.org/Article">

<?php /*include('./include/header-test.php'); */?>

@section('content')

<div class="container">

    <section class="section">

        <?php /*include('sidebar_copy.php'); */?>

        <div class="content-900">

            <ul class="navigation" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" >
                    <meta itemprop="position" content="0">
                    <a itemprop="item" href="/" ><span itemprop="name">Главная</span></a>
                </li>
                <li  itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                    <meta itemprop="position" content="1">
                    {{--<span  itemprop="name"><?php echo $art['h1']; ?></span>
                    <div itemprop="item" itemscope="" itemtype="https://schema.org/Thing">
                        <link itemprop="url" href="/<?php echo $art['link']; ?>">
                    </div>--}}
                </li>
            </ul>

            <div itemprop="inLanguage" itemscope="" itemtype="https://schema.org/Language">
                <meta itemprop="name" content="Russian">
                <meta itemprop="alternateName" content="ru">
            </div>

           {{-- <meta itemprop="name" content="<?php echo $title; ?>">
            <link itemprop="url" href="https://arteli-stroy.ru/<?php echo $art['link']; ?>">
            <meta itemprop="image" content="https://arteli-stroy.ru/<?php echo $art['img_big']; ?>">--}}

            <article class="article" itemprop="articleBody">

              {{--  <h1 class="article__title" itemprop="headline"><?php echo $art['h1']; ?></h1>--}}

                <div class="article__block">
                    <p class="bold">Наша компания предлагает Вам специальное предложение на строительство двухэтажного дома под ключ из газосиликатных блоков, площадью 117 м², с внутренней и внешней отделкой, а также с внутренними инженерными коммуникациями. Стоимость – 6 400 000 руб. Спецпредложение действует до 15.06.2022 г.</p>

                    <!-- check__out -->
                    <div class="check__out">
                        <h4>Также можете ознакомиться с нашими акциями и другими страницами</h4>
                        <ul>

                            <li>
                                <a href="/stock" rel="nofollow">
                                    <span class="check__out-text">Акции</span>
                                </a>
                            </li>

                            <li>
                                <a href="/service/reconstruction/dostrojka-domov">
                                    <span class="check__out-text">Реконструкция дома</span>
                                </a>
                            </li>

                            <li>
                                <a href="/service/reconstruction/reconstruction-calculator">
                                    <span class="check__out-text">Калькулятор расчета стоимости реконструкции</span>
                                </a>
                            </li>

                            <li>
                                <a href="/service/reconstruction/snos-rekonstrukciya-domov">
                                    <span class="check__out-text">Реконструкция или снос</span>
                                </a>
                            </li>

                        </ul>
                    </div><!-- end check__out -->

              {{--  <?php include('include/top-bar.php'); ?><!-- TOP BAR -->

                <?php include('include/modal-calc.php'); ?><!-- /.modal-calc -->

                <?php include('include/stopgap.php'); ?><!-- бесплатная консультация -->--}}

                </div><!-- end article__block -->
            </article>

        </div><!-- /.specialOffers -->

    </section>

</div> <!-- .container -->

@endsection

@section('scripts')
    <script src="/public/js/script.min.js"></script>
@endsection

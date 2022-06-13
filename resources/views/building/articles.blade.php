@extends('layouts.master')

<meta name="robots" content="noindex,follow">

<?php
/*
$num = 166;

$articles = mysqli_query($connection, "SELECT * FROM articles WHERE id = $num"); //произвести запрос

$art =  mysqli_fetch_assoc($articles);

$title = "Статьи компании - «Артель и С» 🔨 статьи для ремонта и строительства";

$description = "Множество интересных статей ✅ которые расскажут вам о том как делать ремонт ✅ как делать его грамотно с актуальным на данный момент способом - заходите!";

//mysqli_query($connection, "UPDATE articles SET pubdate = CURRENT_TIMESTAMP() WHERE id = $num");

*/?>

{{--<meta name="description" content="<?php echo $description; ?>">

<meta property="og:site_name" content="Артель и С">
<meta property="og:title" content="<?php echo $title; ?>">
<meta property="og:description" content="<?php echo $description; ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="https://arteli-stroy.ru/<?php echo $art['link']; ?>">
<meta property="og:image" content="https://arteli-stroy.ru/<?php echo $art['img_big']; ?>">
<meta property="og:image:type" content="image/webp">--}}

<?php /*include('../include/3-plagins.php'); */?>

@section('styles')

@endsection

@section('title')
    Статьи компании - «Артель и С» 🔨 статьи для ремонта и строительства
@endsection

<body itemscope="" itemtype="https://schema.org/WebPage">

<?php /*include('../include/header.php'); */?>

@section('content')

<div class="container">

    <section class="section">

        <?php /*include('../sidebar.php'); */?>

        <div class="servicePage content">

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

            {{--<meta itemprop="name" content="<?php echo $title; ?>">
            <link itemprop="url" href="https://arteli-stroy.ru/<?php echo $art['link']; ?>">
            <meta itemprop="articleSection" content="<?php echo $art['h1']; ?>">
            <meta itemprop="image" content="https://arteli-stroy.ru/<?php echo $art['img_big']; ?>">

            <h1 class="title__left article__title" itemprop="headline"><?php echo $art['h1']; ?></h1>--}}

            <div class="servicePage-block">

                <a href="/articles/srub-vneshnyaya-otdelka">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/srub-vneshnya-otdelka-223x185.webp" alt="Сруб: внешняя отделка" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Сруб: внешняя отделка</span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/ustrojstvo-fasada">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/ystroistvo-fasada-223x185.webp" alt="Устройство фасада" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Устройство фасада</span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/sochetanie-cveta-kryshi-i-fasada">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/sochetanie-cveta-kryshi-i-fasada-223x185.webp" alt="Сочетание цветов крыши и фасада" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Сочетание цветов крыши и фасада</span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/otdelka-fasada-shuba">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/otdelka-fasada-shuba-223x185.webp" alt="Отделка фасада «Шуба»" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Отделка фасада «Шуба»</span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/otdelka-fasada-kottedzha">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/otdelka-fasada-kottedzha-223x185.webp" alt="Отделка фасада коттеджа" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Отделка фасада коттеджа</span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/fakturnye-fasady">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/fakturnye-fasadi-223x185.webp" alt="Фактурные фасады" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Фактурные фасады</span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/dranka-dlya-fasada">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/dranka-dlya-fasada-223x185.webp" alt="Дранка для фасада" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Дранка для фасада
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/fasad-kroshka">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/fasad-kroshka-223x185.webp" alt="Фасад крошка" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Фасад крошка
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/otdelka-frontona">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/otdelka-frontona-223x185.webp" alt="Отделка фронтона" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Отделка фронтона
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/otdelka-sehndvich-panelyami">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/otdelka-sendwich-panelyami-227x120.webp" alt="Отделка фасада сэндвич панелями" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Отделка фасада сэндвич панелями
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/lenta-dlya-bani">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/fundament-dlya-bani-223x185.webp" alt="Ленточный фундамент для бани" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Ленточный фундамент для бани
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/fundament-dlya-doma">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/fundament_dlya_doma-223x185.webp" alt="Как выбрать фундамент для дома" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Как выбрать фундамент для дома
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/monolitnaya-plita">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/monolitnaya-plita-223x185.webp" alt="Монолитная плита" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Монолитная плита
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/plita-pod-banyu">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/plita-pod-banu-223x185.webp" alt="Плита под баню" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Плита под баню
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/otdelka-klinkernym-kirpichom">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/otdelka-klinkernym-kirpichom-223x185.webp" alt="Отделка клинкерным кирпичем" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Отделка клинкерным кирпичем
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/shtukaturevanie-fasada">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/shtukaturevanie-fasada-223x185.webp" alt="Штукатурный фасад" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Штукатурный фасад: технология монтажа
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/rekonstrukciya-poloviny-doma">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/rekonstrukciya-doma-fundament-300x.webp" alt="Отделка половины дома" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Реконструкция половины дома
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/peredelka-odnoehtazhnogo-i-dvuhehtazhnogo-doma">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/peredelka-odnoehtazhnogo-doma-v-dvuhehtazhnyj-300x.webp" alt="Переделка одноэтажного и двухэтажного дома" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Переделка одноэтажного и двухэтажного дома
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/rekonstrukciya-shlakozalivnogo-doma">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/osypaetsya-shlakozalivnoj-dom-300x.webp" alt="Реконструкция шлакозаливного дома" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Реконструкция шлакозаливного дома
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/restavraciya-derevyannogo-pola">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/remont-pola-v-dome-300x.webp" alt="Реконструкция деревянного пола" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Реконструкция деревянного пола
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/remont-treshchin-v-dome">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/treshchiny-v-dome-300x.webp" alt="Ремонт трещин в доме" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Ремонт трещин в доме
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/remont-perekrytiya">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/vyravnivanie-balok-s-pomoshchyu-gipsokartona-i-metalloprofilya-300x.webp" alt="Ремонт перекрытия" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Ремонт перекрытия
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/rekonstrukciya-ograzhdeniya">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/remont-zabora-iz-derevyannogo-shtaketnika-300x.webp" alt="Реконструкция ограждений" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Реконструкция ограждений
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/poluchil-razreshenie-na-stroitelstvo">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/razreshenie-na-stroitelstvo-doma-300x.webp" alt="Получил разрешение на строительство, что дальше?" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Получил разрешение на строительство, что дальше?
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/remont-pechki-v-dome">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/chistka-dymohoda-v-pechke-300x.webp" alt="Ремонт печки в доме" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Ремонт печки в доме
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/remont-mansardy">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/oblicovka-gipsokartonom-300x.webp" alt="Ремонт мансарды" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Ремонт мансарды
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/rekonstrukciya-mansardy">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/primer-mansardy-s-odnoskatnoj-kryshej-300x.webp" alt="Ремонт мансарды" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Реконструкция мансарды
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/remont-sip-domov">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/dom-iz-sip-panelej-300x.webp" alt="Ремонт сип домов" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Ремонт сип домов
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/rekonstrukciya-terrasy">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/pol-otremontirovan-na-terrase-300x.webp" alt="Реконструкция террасы" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Реконструкция террасы
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/otrestavrirovat-dom-v-moskve">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/restavraciya-doma-300x.webp" alt="Отреставрировать дом в Москве" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Отреставрировать дом в Москве
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/rekonstrukciya-doma-blokirovannoj-zastrojki">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/koncepciya-blokirovannogo-doma-300x.webp" alt="Реконструкция дома блокированной застройки" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Реконструкция дома блокированной застройки
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/soglasie-na-rekonstrukciyu-doma">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/razreshenie-na-stroitelstvo-300x.webp" alt="Согласие на реконструкцию дома" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Согласие на реконструкцию дома
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/rekonstrukciya-doma-v-snt">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/rekonstrukciya-s-uvelicheniem-ploshchadi-300x.webp" alt="Рконструкция с увеличением площади" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Рконструкция дома в снт
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/vosstanavlivat-doma-v-oblasti">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/otdelka-sajdingom-300x.webp" alt="Восстановление дома" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Восстановление дома в области
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/peredelka-doma-v-banyu">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/peredelka-kryshi-doma-v-banyu-300x.webp" alt="Переделка дома в баню" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Переделка дома в баню
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/peredelka-kryshi-doma">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/kapitalnoe-pereustrojstvo-kryshi-300x.webp" alt="Переделка крыши дома" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Переделка крыши дома
          </span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/odnoskatnaya-krysha-iz-profnastila">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/roof/skhema-odnoskatnoj-kryshi-300x.webp" alt="Схема односкатной крыши" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Односкатная крыша из профнастила</span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/banya-s-ploskoj-kryshej">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/roof/banya-s-ploskoj-krovlej-300x.webp" alt="Баня с плоской кровлей" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Баня с плоской кровлей</span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/ploskie-inversionnye-krovli">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/roof/inversionnaya-krysha-300x.webp" alt="Инверсионная крыша" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Плоские инверсионные кровли</span>
                        <div class="servicePage-block__item-hover"></div>
                    </div>
                </a>

                <a href="/articles/minimalnyj-uklon-ploskoj-kryshi">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/roof/uglomer-na-kryshe-300x.webp" alt="Уклон на крыше" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Минимальный уклон плоской крыши</span>
                    </div>
                </a>

                <a href="/articles/gidroizolyaciya-ploskoj-krovli">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/roof/montazh-gidroizolyacii-300x.webp" alt="Монтаж гидроизоляции" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Гидроизоляция плоской кровли</span>
                    </div>
                </a>

                <a href="/articles/dom-s-ploskoj-kryshej">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/roof/ehkspluatiruemaya-krysha-doma-300x.webp" alt="Кровля эксплуатируемая" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Дом с плоской крышей</span>
                    </div>
                </a>

                <a href="/articles/metallocherepica-ili-myagkaya-krovlya">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/roof/skhema-ukladki-krovli-300x.webp" alt="Схема укладки кровли" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Металлочерепица или мягкая кровля?</span>
                    </div>
                </a>

                <a href="/articles/krovlya-iz-profnastila">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/roof/krovlya-stroeniya-iz-profnastila-300x.webp" alt="Кровля из профнастила" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Кровля из профнастила</span>
                    </div>
                </a>

                <a href="/articles/ukladka-metallocherepicy-instrukciya">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/roof/kreplenie-metallocherepicy-300x.webp" alt="Крепление металлочерепицы" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Инструкция по укладке металлочерепицы</span>
                    </div>
                </a>

                <a href="/articles/montazh-kompozitnoj-cherepicy">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/roof/kompozitnaya-cherepica-300x.webp" alt="Композитная черепица" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Монтаж композитной черепицы</span>
                    </div>
                </a>

                <a href="/articles/pokryt-kryshu-metallocherepicej">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/roof/vishnevaya-metallocherepica-300x.webp" alt="Вишневая металлочерепица" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Покрыть крышу металлочерепицей</span>
                    </div>
                </a>

                <a href="/articles/remont-metallicheskoj-krovli">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/roof/montazh-latok-na-kryshu-300x.webp" alt="Монтаж латок на крыше" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">ремонт металлической кровли</span>
                    </div>
                </a>

                <a href="/articles/montazh-profnastila-na-kryshu">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/roof/montazh-profnastila-na-krovlyu-300x.webp" alt="Монтаж профнастила на кровлю" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Монтаж профнастила на крышу</span>
                    </div>
                </a>

                <a href="/articles/odnoskatnaya-krysha">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/montazh-metallocherepicy-300x.webp" alt="Монтаж металлочерепицы" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Односкатная крыша</span>
                    </div>
                </a>

                <a href="/articles/montazh-vetrovoj-planki-na-metallocherepicu">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/montazh-vetrovoj-planki-300x.webp" alt="Монтаж ветровой планки" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Монтаж ветровой планки на металлочерепицу</span>
                    </div>
                </a>

                <a href="/articles/ehlementy-krovli-iz-metallocherepicy">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/dobornye-ehlementy-300x.webp" alt="Доборные элементы" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Элементы кровли из металлочерепицы</span>
                    </div>
                </a>

                <a href="/articles/montazh-karniznoj-planki-metallocherepicy">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/montazh-planki-karniznoj-300x.webp" alt="Монтаж карнизкой планки" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Монтаж карнизной планки</span>
                    </div>
                </a>

                <a href="/articles/ustanovka-ventilyacionnogo-vyhoda">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/ustanovka-ventilyacii-na-kryshe-300x.webp" alt="Установка вентиляции на крыше" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Установка вентиляционного выхода на металлочерепицу</span>
                    </div>
                </a>

                <a href="/articles/krovelnyj-pirog-pod-metallocherepicu">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/paroizolyaciya-krovli-300x.webp" alt="Пароизоляция кровли" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Кровельный пирог под металлочерепицу</span>
                    </div>
                </a>

                <a href="/articles/holodnaya-krysha-iz-metallocherepicy">
                    <div class="servicePage-block__item">
                        <img src="/public/img/pages/articles/holodnaya-krysha-skhema-300x.webp" alt="Холодная крыша - схема" class="servicePage-block__item-img">
                        <span class="servicePage-block__item-text">Холодная крыша из металлочерепицы</span>
                    </div>
                </a>

                <a href="/articles/montazh-kapelnika-pod-metallocherepicu">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/ustanovka-kapelnika-300x.webp" alt="Установка капельника" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Монтаж капельника под металлочерепицу</span>
                        </div>
                    </a>

                    <a href="/articles/instrukciya-po-montazhu-metallocherepicy">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/kreplenie-cherepicy-na-skheme-300x.webp" alt="Крепление черепицы по схеме" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Инструкция по монтажу металлочерепицы</span>
                        </div>
                    </a>

                    <a href="/articles/tolshchina-metallocherepicy-dlya-kryshi">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/metallocherepica-krupnym-planom-300x.webp" alt="Металлочерепица крупным планом" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Толщина металлочерепицы для крыши</span>
                        </div>
                    </a>

                    <a href="/articles/ugol-naklona-kryshi-dlya-metallocherepicy">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/ugol-naklona-na-skheme-300x.webp" alt="Угол наклона на схеме" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Угол наклона крыши для металлочерепицы</span>
                        </div>
                    </a>

                    <a href="/articles/obreshetka-kryshi-pod-metallocherepicu">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/montazh-obreshetki-pod-cherepicu-300x.webp" alt="Монтаж обрешетки под черепицу" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Обрешетка крыши под металлочерепицу</span>
                        </div>
                    </a>

                    <a href="/articles/krovelnyj-pirog-pod-profnastil">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/uteplenie-krovelnogo-piroga-300x.webp" alt="Утепление кровельного пирога" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Кровельный пирог под профнастил</span>
                        </div>
                    </a>

                    <a href="/articles/kreplenie-proflista-k-obreshetke">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/krysha-iz-proflista-300x.webp" alt="Крепление профлиста к обрешетке" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Крепление профлиста к обрешетке</span>
                        </div>
                    </a>

                    <a href="/articles/dvuhskatnaya-krysha-iz-profnastila">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/dvuhskatnaya-krovlya-300x.webp" alt="Двускатная кровля" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Двускатная крыша из профнастила</span>
                        </div>
                    </a>

                    <a href="/articles/obreshetka-pod-profnastil">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/osi-obreshetki-300x.webp" alt="Оси обрешетки" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Обрешетка под профнастил</span>
                        </div>
                    </a>

                    <a href="/articles/stroitelstvo-kryshi-chastnogo-doma">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/sborka-karkasa-kryshi-300x.webp" alt="Сборка каркаса крыши" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Строительство крыши частного дома</span>
                        </div>
                    </a>

                    <a href="/articles/remont-kryshi-na-dache">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/remont-kryshy-na-dache-300x.webp" alt="ремонт различных крыш" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Ремонт крыши на даче</span>
                        </div>
                    </a>

                    <a href="/articles/remont-derevyannoj-krovli">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/gydrozshchyta-300x.webp" alt="Гидрозащита" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Ремонт деревянной кровли</span>
                        </div>
                    </a>

                    <a href="/articles/vnutrennyaya-otdelka-doma-iz-brevna">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/plastikovye-paneli-v-prihozhej-300x.webp" alt="пластиковые панели в прихожей" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Внутренняя отделка дома из бревна</span>
                        </div>
                    </a>

                    <a href="/articles/gidroizolyaciya-krovli">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/napylenie-zhidkoj-reziny-300x.webp" alt="Напыление жидкой резины" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Гидроизоляция кровли</span>
                        </div>
                    </a>

                    <a href="/articles/otdelka-kirpichnogo-doma">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/otdelka-iz-kamnya-300x.webp" alt="Отделка дома из камня" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Отделка кирпичного дома</span>
                        </div>
                    </a>

                    <a href="/articles/stena-pod-derevo-v-spalne">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/oboi-v-spalne-300x.webp" alt="Обои на стене фото" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Стена под дерево</span>
                        </div>
                    </a>

                    <a href="/articles/osb-dlya-vnutrennej-otdelki-pomeshcheniya">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/osb-plity-300x.webp" alt="Осб плиты фото" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Осб для внутренней отделки помещения</span>
                        </div>
                    </a>

                    <a href="/articles/vidy-dekorativnoj-shtukaturki-dlya-otdelki">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/dekorativnaya-shtukaturka-300x.webp" alt="Декоративная штукатурка фото" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Виды декоративной штукатурки для внутренней отделки</span>
                        </div>
                    </a>

                    <a href="/articles/otdelka-bani">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/montazh-polok-300x.webp" alt="Монтаж полок фото" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Отделка бани</span>
                        </div>
                    </a>

                    <a href="/articles/otdelka-prihozhej-dekorativnym-kamnem">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/dekorativnyj-kamen-v-prihozhej-300x.webp" alt="декоративный камень в прихожей фото" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Отделка прихожей декоративным камнем</span>
                        </div>
                    </a>

                    <a href="/articles/interer-spalni-na-dache">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/spalnya-na-dache-300x.webp" alt="Спальня на даче фото" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Интерьер спальни на даче</span>
                        </div>
                    </a>

                    <a href="/articles/ukladka-dekorativnogo-kamnya">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/process-ukladki-kamnya-300x.webp" alt="Процесс укладки камня" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Укладка декоративного камня</span>
                        </div>
                    </a>

                    <a href="/articles/otdelka-sruba-dzhutovym-kanatom">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/ugol-doma-300x.webp" alt="Отделка джутовым канатом угла дома" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Отделка сруба джутовым канатом</span>
                        </div>
                    </a>

                    <a href="/articles/otdelka-pod-kamen">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/otdelka-pod-kirpich-300x.webp" alt="Отделка под кирпич фото" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Отделка под камень</span>
                        </div>
                    </a>

                    <a href="/articles/otdelka-bani-vagonkoj">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/polki-iz-vagonki-300x.webp" alt="Полки из вагонки фото" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Отделка бани вагонкой</span>
                        </div>
                    </a>

                    <a href="/articles/otdelka-pechi">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/iskusstvennyj-kamen-300x.webp" alt="Отделка печи искусственным камнем фото" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Отделка печи</span>
                        </div>
                    </a>

                    <a href="/articles/otdelka-mramorom">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/otdelka-mramorom-300x.webp" alt="Отделка мрамором фото" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Отделка мрамором</span>
                        </div>
                    </a>

                    <a href="/articles/otdelka-portala-bannoj-pechi">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/portal-iz-kirpicha-300x.webp" alt="Портал из кирпича фото" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Отделка портала банной печи</span>
                        </div>
                    </a>

                    <a href="/articles/otdelka-bani-snaruzhi-varianty">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/fronton-bani-300x.webp" alt="фронтон бани" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Отделка бани снаружи - варианты</span>
                        </div>
                    </a>

                    <a href="/articles/yaponskij-stil">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/tatami-na-polu-300x.webp" alt="Татами на полу фото" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Японский стиль</span>
                        </div>
                    </a>

                    <a href="/articles/remont-v-skandinavskom-stile">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/skandinavskij-stil-300x.webp" alt="Скандинавский стиль фото" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Ремонт в скандинавском стиле</span>
                        </div>
                    </a>

                    <a href="/articles/detskaya-v-yaponskom-stile">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/detskaya-dlya-devochki-300x.webp" alt="Детская для девочки фото" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Детская в японском стиле</span>
                        </div>
                    </a>

                    <a href="/articles/gostinaya-haj-tek">
                        <div class="servicePage-block__item">
                            <img src="/public/img/pages/articles/osvechenie-haj-tek-300x.webp" alt="Освещение хай тек фото" class="servicePage-block__item-img">
                            <span class="servicePage-block__item-text">Гостинная хай тек</span>
                        </div>
                    </a>



                    <div class="servicePage-block__text"></div>

                </div>

            </div>
            <!-- /.servicePage -->

        </section>

    </div> <!-- .container -->

@endsection

@section('scripts')
    <script src="/public/js/script.min.js"></script>
@endsection

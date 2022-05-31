@extends('layouts.master')

<?php
//
//$num = 2;
//
//$articles = mysqli_query($connection, "SELECT * FROM articles WHERE id = $num"); //произвести запрос
//
//$art =  mysqli_fetch_assoc($articles);
//
//$title = "Реконструкция - основной вид деятельности нашей компании - Артель и С";
//
//$description = "Расскажем о компании и основных видах нашей деятельности, а также об опыте работы нашей компании в сфере строительства - Обращайтесь!";
//
////mysqli_query($connection, "UPDATE articles SET pubdate = CURRENT_TIMESTAMP() WHERE id = $num");
//
//?>

{{--<meta name="description" content="<?php echo $description; ?>">--}}

<meta property="og:site_name" content="Артель и С">
{{--<meta property="og:title" content="<?php echo $title; ?>">--}}
{{--<meta property="og:description" content="<?php echo $description; ?>">--}}
{{--<meta property="og:type" content="website">--}}
{{--<meta property="og:url" content="https://arteli-stroy.ru/<?php echo $art['link']; ?>">--}}
{{--<meta property="og:image" content="https://arteli-stroy.ru/<?php echo $art['img_big']; ?>">--}}
<meta property="og:image:type" content="image/webp">

@section('styles')

@endsection

<?php //include('include/plagins.php'); ?>

@section('title')
    Реконструкция - основной вид деятельности нашей компании - Артель и С
@endsection


@section('content')

    <div class="container">

        <section class="section">

<!--            --><?php //include('sidebar_copy.php'); ?>

            <div class="content-900">

                <ul class="navigation" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem" >
                        <meta itemprop="position" content="0">
                        <a itemprop="item" href="/" ><span itemprop="name">Главная</span></a>
                    </li>
                    <li  itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <meta itemprop="position" content="1">
                        <span  itemprop="name">
<!--                            --><?php //echo $art['h1']; ?>
                        </span>
                        <div itemprop="item" itemscope="" itemtype="https://schema.org/Thing">
                            <link itemprop="url" href="/
<!--                            --><?php //echo $art['link']; ?>
                                ">
                        </div>
                    </li>
                </ul>

                <div itemprop="inLanguage" itemscope="" itemtype="https://schema.org/Language">
                    <meta itemprop="name" content="Russian">
                    <meta itemprop="alternateName" content="ru">
                </div>

                <meta itemprop="name" content="
<!--                --><?php //echo $title; ?>
                    ">
                <link itemprop="url" href="https://arteli-stroy.ru/
<!--                --><?php //echo $art['link']; ?>
                    ">
                <meta itemprop="image" content="https://arteli-stroy.ru/
<!--                --><?php //echo $art['img_big']; ?>
                    ">

                <article class="article">
                    <div class="article__block">

                        <h1 class="article__title" itemprop="headline">
<!--                            --><?php //echo $art['h1']; ?>
                        </h1>

                        <p>Уважаемые заказчики, рады приветствовать вас на нашем сайте. Вот немного информации о нас. «Артель и С» – это строительная компания с опытом работы более 15 лет. Мы специализируемся на <a class="link" href="/service/reconstruction/dostrojka-domov">реконструкции</a>, строительстве и частном домостроении. </p>
                        <p>Большой опыт и слаженный коллектив позволяют выполнять работу качественно и в короткие сроки. Каждый год мы сдаем более 30 объектов, постоянно пополняем свою клиентскую базу. К заказам относимся ответственно, осуществляем даже самые сложные технические работы.</p>
                        <p>Мы выполняем <a class="link" href="/service/decoration/stoimost-chernovoj-otdelki">черновую</a> и <a class="link" href="/service/decoration/">чистовую отделку</a> помещений, включая инженерные системы – <a class="link" href="/service/water-system/">водо-</a>, <a class="link" href="/service/electrician/" rel="nofollow">электро-</a>, <a class="link" href="/service/heating/remont-otopitelnoj-sistemy" rel="nofollow">теплоснабжение</a>, а также <a class="link"
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          href="/service/water-system/montazh-avtonomnyh-septikov" rel="nofollow">канализацию</a> и вентиляцию, обустраиваем придомовую территорию.</p>
                        <p>Преимущества, которые помогают нам преуспевать на рынке с 2003 года:</p>

                        <ol class="about-ol">
                            <li><span>никаких скрытых дополнительных работ,</span></li>
                            <li>составляем сметы по ТЗ заказчика без непредвиденных затрат,</li>
                            <li>заключаем официальный договор,</li>
                            <li>гарантируем профессиональный подход и качественный результат,</li>
                            <li>закупаем материалы самостоятельно у проверенных производителей,</li>
                            <li>предоставляем выгодные для клиента условия,</li>
                            <li>соблюдаем сроки согласно заключенному договору,</li>
                            <li>даем два года гарантии на любые строительные работы.</li>
                        </ol>

{{--                    <?php include('include/warranty-period.php'); ?><!-- Гарантия -->--}}

                        <p>Нашим клиентам мы предлагаем выбор типового проекта дома под ключ с возможностью внесения в него изменений. Мы занимаемся <a class="link" href="/service/construction/" rel="nofollow">строительством</a> <a class="link" href="/service/construction/stroitelstvo-kirpichnyh-domov" rel="nofollow">кирпичных</a>, <a class="link" href="/service/construction/stroitelstvo-blochnyh-domov" rel="nofollow">блочных</a>, <a class="link" href="/service/construction/stroitelstvo-derevyannyh-domov" rel="nofollow">деревянных</a>, <a class="link" href="/service/construction/stroitelstvo-karkasnyh-domov" rel="nofollow">каркасных домов</a> в Москве и области, а также в ближайших городах. Наши специалисты проводят <a class="link" href="/service/warming/" rel="nofollow">утепление помещений</a>, <a class="link" href="/service/roof/">кровельные</a> и <a class="link" href="/service/decoration/remont-doma-v-podmoskove">ремонтные работы</a> любой сложности.</p>
                        <p>Мы проводим профессиональную <a class="link" href="javascript:void(0);" class="mail__open">консультацию</a> с заказчиком, где подробно обсуждаем и согласовываем все этапы работ и их стоимость. Мы говорим на одном языке с нашими клиентами, решаем их проблему с учетом бюджета и пожеланий по материалам и срокам.</p>

{{--                    <?php include('include/stopgap.php'); ?><!-- бесплатная консультация -->--}}

                        <p>Приоритет компании «Артель и С» − это изготовление идеальных домов и довольные клиенты. Для этого у нас есть все необходимое в виде профессиональных сотрудников, многолетнего опыта и качественных материалов.

                            <img src="/public/img/about/arteli-stroy.webp" alt="Arteli-stroy">

                            Мы работаем открыто, поэтому постоянно публикуем результаты своей деятельности в <a href="https://t.me/artelistroy" target="_blank" rel="nofollow">социальных сетях</a> и на сайте.</p>

                        <p>За долгое время работы на рынке мы прочно закрепили свои позиции. Наличие постоянных клиентов говорит о доверии и хорошем результате. Организация «Артель и С» неоднократно сотрудничала с такими крупными компаниями, как </p>

                        <div class="img-brand">
                            <div>
                                <img src="/public/img/about/abray-durso.png" alt="абрау-дюрсо" class="m-auto">
                                <p>ПАО «Абрау-Дюрсо»</p>
                                <p class="t-center brand__text bold"><a href="doc/abray.pdf" target="_blanc">Рекомендательное письмо</a></p>
                            </div>
                            <div>
                                <img src="/public/img/about/green-logo.jpg" class="m-auto" alt="Грин Филмс">
                                <p>ООО «Грин Филмс».</p>
                                <p class="t-center brand__text bold"><a href="doc/green.pdf" target="_blanc">Рекомендательное письмо</a></p>
                            </div>
                            <div>
                                <img src="/public/img/about/vilogoshortrgb.png" alt="«Вандерланде Индастрис">
                                <p class="brand__text">ООО «Вандерланде Индастрис».</p>
                            </div>
                        </div>

                        <p>Благодаря нам реконструируются и появляются десятки новых домов ежегодно.</p>

                        <p>Более подробно ознакомиться со <a class="link" href="/service/">списком услуг</a>, <a class="link" href="/all-feedback" rel="nofollow">отзывами</a> и <a href="/specialOffers">специальными предложениями</a> вы можете на нашем сайте. Там же регулярно проводятся <a class="link" href="/stock" rel="nofollow">акции</a> и скидки, где мы предлагаем выгодные условия на различные услуги. Это позволяет нашим заказчикам немного сэкономить и сохранить свой бюджет.</p>
                        <p>Наша компания постоянно развивается, расширяет свой штат, повышает квалификацию сотрудников. Это помогает нам быть конкурентоспособными и оказывать услуги на должном уровне. Все заботы по изготовлению домов мы берем на себя, избавляя наших клиентов от лишних хлопот. </p>

                    </div><!-- end article__block -->

                </article>

            </div>

        </section>

    </div><!-- .container -->


<?php //include('include/footer_copy.php'); ?>
<!-- /.footer -->

@endsection

@section('scripts')
    <script src="/public/js/script.min.js"></script>
@endsection

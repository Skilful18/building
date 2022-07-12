@extends('layouts.master')

{{--

$description = "Стоимость работ по внутренней отделке дома 🔥, таблицы с ценами 2022, калькулятор цен на косметический, капитальный, элитный ремонт — подробнее у Артель и С";
--}}


<meta name="description" content="<?php /*echo $description; */?>">

<meta property="og:site_name" content="Артель и С">
<meta property="og:title" content="<?php /*echo $title; */?>">
<meta property="og:description" content="<?php /*echo $description; */?>">
<meta property="og:type" content="article">
<meta property="og:url" content="https://arteli-stroy.ru/<?php /*echo $art['link']; */?>">
<meta property="og:image" content="https://arteli-stroy.ru/<?php /*echo $art['img_big']; */?>">
<meta property="og:image:type" content="image/webp">

@section('styles')

@endsection

<?php /*include('../include/plagins.php'); */?>

@section('title')
    Внутренняя отделка дома цена в Москве 🔨 расценки 2022 |калькулятор для расчёта
@endsection

@section('content')

    <div class="container">

        <section class="section">

<!--            --><?php //include('../sidebar_copy.php'); ?>

            <div class="content-900">

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
                        <meta itemprop="position" content="3">
{{--                        <span  itemprop="name"><?php echo $art['h1']; ?></span>--}}
                        <div itemprop="item" itemscope="" itemtype="https://schema.org/Thing">
{{--                            <link itemprop="url" href="/<?php echo $art['link']; ?>">--}}
                        </div>
                    </li>
                </ul>

                <div itemprop="inLanguage" itemscope="" itemtype="https://schema.org/Language">
                    <meta itemprop="name" content="Russian">
                    <meta itemprop="alternateName" content="ru">
                </div>

{{--                <meta itemprop="name" content="<?php echo $title; ?>">--}}
{{--                <link itemprop="url" href="https://arteli-stroy.ru/<?php echo $art['link']; ?>">--}}
                <meta itemprop="articleSection" content="Ремонт офисов">
{{--                <meta itemprop="image" content="https://arteli-stroy.ru/<?php echo $art['img_big']; ?>">--}}
                <meta itemprop="datePublished" content="2021-05-15">
{{--                <meta itemprop="dateModified" content="<?php echo mb_substr(strip_tags($art['pubdate']), 0, 10, 'utf-8'); ?>">--}}

                <article class="article">
                    <div class="article__block">

                        <h1 class='article__title' itemprop='headline'><?php /*echo $art['h1']; */?></h1>

                        <div class="article-tile">
                            <a class='button-tile' href="/service/remont-koridora-pod-klyuch-cena">Ремонт коридора под ключ: цена</a>
                            <a class='button-tile' href="/service/decoration/stoimost-otdelki-derevyannogo-doma">Внутренняя отделка деревянного дома цены</a>
                            <a class='button-tile' href="/service/vnutrennyaya-otdelka-imitaciej-brusa-cena">Внутренняя отделка имитацией бруса: цена</a>
                            <a class='button-tile' href="/articles/otdelka-mramorom">Отделка помещений</a>
                            <a class='button-tile' href="/service/montazh-gipsokartona-cena-za-m2">Монтаж гипсокартона: цена за м²</a>
                            <a class='button-tile' href="/service/decoration/stoimost-chernovoj-otdelki">Черновая отделка цена за квадратный метр</a>
                            <a class='button-tile' href="/service/stoimost-malyarnyh-rabot-za-m2">Стоимость малярных работ за м²</a>
                        </div>

                        <!-- start header-statuses -->
                        <ul class="header-statuses">
                            <li>&#128197; 2022-03-28</li>
                            {{--<li>🔄 <?php echo mb_substr(strip_tags($art['pubdate']), 0, 10, 'utf-8'); ?></li>
                            <li>&#128065; <?php echo $art['views']; ?></li>--}}
                            <li>&#128221; <a rel="nofollow" itemprop="author" href="/authors/Anton/">Антон Белоусов</a></li>
                        </ul>
                        <!-- end header-statuses -->

                        <div itemprop="articleBody">

                            <h3>Содержание</h3>

                            <ol>
                                <li><a class='link' href='#1'>Цены на внутреннюю отделку дома</a></li>
                                <li><a class='link' href='#2'>Расценки на виды внутренней отделки</a></li>
                                <li><a class='link' href='#3'>Артель и C: преимущества компании</a></li>
                                <li><a class='link' href='#4'>Этапы внутренней отделки</a></li>
                                <li><a class='link' href='#5'>Отделка помещений</a>
                                    <ul>
                                        <li><a class='link' href='#5-1'>Ванная комната</a></li>
                                        <li><a class='link' href='#5-2'>Спальня</a></li>
                                        <li><a class='link' href='#5-3'>Гостиная</a></li>
                                        <li><a class='link' href='#5-4'>Кухня</a></li>
                                    </ul>
                                </li>
                                <li><a class='link' href='#6'>Вопрос-Ответ</a></li>
                            </ol>

                            <p>Отделка дома внутри — важный и непростой этап, который влияет на комфортность проживания. Допущенные ошибки при обшивке могут негативно сказаться на состоянии жилища, поэтому отделочные работы доверяют профессиональным сотрудникам с большим опытом работы в сфере строительства.</p>

                            <h2 id="1">1.Цены на внутреннюю отделку дома</h2>

                            <p>Ознакомьтесь с ценами ремонта внутри дома. Они указаны по Москве и области. Воспользуйтесь встроенными в таблицы калькуляторами для расчёта стоимости услуг. Бесплатно получить консультацию можно по телефону <a href="tel:+74952589397" rel="nofollow" class="link">+7 (495) 258-93-97</a>.</p>

                            <div class="estimatesContent">
                                <div class="estimates">
                                    <div class="estimates_close"></div>
                                    <div class="estimates__menu">
                                        <menu class="estimates__menu_block">
                                            <li class="active">1. Демонтажные работы</li>
                                            <li>2. Отделочные работы</li>
                                            <li>3. Электромонтажные работы</li>
                                            <li>4. Сантехнические работы</li>
                                            <li>5. Другие работы</li>
                                        </menu>
                                    </div>
                                    <div class="estimates__content">

                                        <!-- start items 1. Демонтажные работы -->
                                        <div class="estimates__items active">
                                            <div class="estimates__typeWork">Демонтажные работы</div>
                                            <table class="table table-tr_td table_td" class="estimates__tableHead">
                                                <tbody>
                                                <tr class="bold">
                                                    <td>Наименование работ</td>
                                                    <td>Ед. изм.</td>
                                                    <td>Количество</td>
                                                    <td>Цена от, руб.</td>
                                                    <td>Сумма</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Обрешётка</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">170</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Снос перегородки из ГКЛ и гипсолита</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">290</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Слой теплоизоляции /звукоизоляции</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">70</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Снятие облицовки со стен</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">250</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Демонтаж штукатурки со стен</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">230</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Демонтаж штукатурки с потолка</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">280</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Разборка реечного потолка</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">80</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Демонтирование подвесного потолка («Армстронг»)</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">100</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Разборка многоуровневого потолочного покрытия</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">250</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Бетонная стяжка толщиной до 3 см</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">500</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Снос межкомнатной перегородки из дерева</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">750</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Демонтаж металлической/стеклянной разделительной стенки</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">350</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Снос бетонных перекрытий толщиной до 10 см</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">875</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Снятие камня / плитки на клее</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">355</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Удаление дощатых полов</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">200</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Обои / 1 слой фанеры</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">85</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Очистка от побелки</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">150</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Очистка от краски</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">250</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Очистка от лака</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">320</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Штучный паркет /керамическая плитка (30х30 см)</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">200</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Демонтаж ковролина</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">100</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Удаление линолеума</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">80</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Удаление ламината</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">180</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Очистка напольного покрытия от клея</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">190</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Удаление краски на масляной основе</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">250</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Зачистка от в/э краски</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">320</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Разборка «Грильято»</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">170</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Очистка от в/э краски и побелки</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">230</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Удаление шпатлёвки</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">230</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Снос межкомнатных перегородок из газобетона/пеноблока</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">280</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Снятие плитки из гипса</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">85</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Разборка труб</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">150</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Удаление дверных порогов</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">150</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Демонтаж кабеля для электропроводки</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">30</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Плинтус</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">100</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Демонтирование деревянных/ПВХ подоконников</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">90</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Снятие осветительных приборов</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">300</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Разборка дверного полотна/блока</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">700</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Удаление выключателей/розеток</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">95</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Разборка оконного блока</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">800</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Демонтирование шарового крана</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">100</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Разборка радиатора</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">450</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Демонтирование ванны</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">700</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- end items 1 -->

                                        <!-- start items 2. Отделочные работы -->
                                        <div class="estimates__items">
                                            <div class="estimates__typeWork">2. Отделочные работы</div>
                                            <table class="table table-tr_td table_td" class="estimates__tableHead">
                                                <tbody>
                                                <tr class="bold">
                                                    <td>Наименование работ</td>
                                                    <td>Ед. изм.</td>
                                                    <td>Количество</td>
                                                    <td>Цена от, руб.</td>
                                                    <td>Сумма</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="estimates__nameWork">Стены</div>
                                            <table class="table table-tr_td table_td" class="estimates__price">
                                                <tbody>
                                                <tr class="calc_row">
                                                    <td>Нанесение теплоизоляционного слоя толщиной 5 см</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">70</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Обрешётка для выравнивания под чистовые работы</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">200</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Установка контробрешётки на стены</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">150</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж пароизоляции</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">80</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Установка ориентированно-стружечных плит</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">300</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Облицовка стен ГКЛ</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">700</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Обработка стен грунтовкой/антисептиком</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">100</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж теплоизоляции/звукоизоляции минеральной водой</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">100</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж теплоизоляции/звукоизоляции пеноплексом и пенопластом</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">140</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Вагонка</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">400</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Блок-хаус</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">460</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Имитация бруса</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">400</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Фанера</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">260</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Нанесение обоев с рисунком</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">330</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Шлифовка фанерного листа</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">70</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Лакировка имитации бруса</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">200</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Окрашивание/пропитка имитированного бруса</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">250</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Облицовка плиточной мозаикой</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">1800</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж венецианской штукатурки</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">1200</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Укладка нестандартных по размеру плит</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">2000</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Облицовка штукатуркой байромикс</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">960</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Шпатлевка стен под окраску </td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">850</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Поклейка стен сеткой «Строби»/«Паутинка»</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">200</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Окрашивание в 2 слоя лазурью</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">200</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Окрашивание в 1 слой маслом</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">100</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Снятие излишней зернистости/исправление неровностей стен</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">90</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Наклеивание обоев из бумаги без рисунка</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">320</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Бамбуковые / жидкие обои на стены</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">1000</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Оклейка стен стеклообоями</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">480</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Обойная облицовка стен (под покраску)</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">220</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Пробковые обои</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">350</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Тканевые обои</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">450</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Фотообои</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">420</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Затирка швов</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">100</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Малярные работы по обоям (больше 2-х цветов)</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">440</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Шлифовка бревенчатых/брусовых стен</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">300</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Окрашивание стен/стеклохолста</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">310</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Установка панелей из мелкодисперсионной фракции древесины</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">480</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Армирующая сетка для штукатурки стен</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">170</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Создание штроб в стенах(штробление)</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">670</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Облицовка откосов (ПВХ, МДФ панели)</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">350</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Окраска откосов (в/э краска в 2 слоя)</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">120</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Штукатурка откосов в виде арок</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">420</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Керамический бордюр</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">950</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Использование обоев больше 5 тыс. за 1 рулон</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">850</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="estimates__nameWork">Потолок</div>
                                            <table class="table table-tr_td table_td" class="estimates__price">
                                                <tbody>
                                                <tr class="calc_row">
                                                    <td>Устройство полочного портала прямоугольной формы</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">400</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Устройство потолочного портала полукруглой формы</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">500</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Шпатлёвка по обойное покрытие </td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">550</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Шпатлёвка под окрашивание</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">850</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Создание ниши под карниз</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">640</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Одноуровневый из ГКЛ (1 слой, ячеечный каркас)</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">440</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Одноуровневый из 2-х слоев ГКЛ</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">520</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Устройство «Армстронг»</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">750</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Устройство «Грильято»</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">1200</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Покраска водоэмульсионной краской в 2 слоя</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">170</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Двухуровневый прямолинейный потолок</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">720</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Двухуровневый криволинейный потолок</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">960</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Трехуровневый прямолинейный потолок</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">1200</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Трехуровневый криволинейный потолок</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">1550</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Создание ниши под светодиодную ленту</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">800</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Врезка отверстий для спотов (точечных светильников)</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">150</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Поклейка боковин</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">250</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Двухслойная окрашивание боковин</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">270</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Встраивание простого короба</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">400</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Встраивание П-образного короба</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">700</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Установка коробки с диодами</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">480</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Полиуретановый молдинг</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">168</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Плинтуса</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">200</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="estimates__nameWork">Пол</div>
                                            <table class="table table-tr_td table_td" class="estimates__price">
                                                <tbody>
                                                <tr class="calc_row">
                                                    <td>Выравнивание бетонной стяжки</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">150</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Укладка шпунтованной доски</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">660</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Покрытие пола лаком + промежуточная шлифовка</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">460</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Армированная стяжка (3 см)</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">1200</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Стяжка с армированием (6 см)</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">1500</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Пол из фанеры / ориентированно-стружечных плит</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">260</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж гранита / мрамора</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">2240</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Нанесения гидроизоляционного слоя</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">350</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Укладывание линолеума</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">200</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Укладывание ковролина</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">150</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Укладывание паркетной доски</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">450</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Пол из керамогранита</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">1700</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Настил подложки для паркета / ламината</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">100</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Обработка грунтовкой (бетоноконтактом)</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">70</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Рулонное средство для защиты от влаги (гидроизоляция)</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">480</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Создание тёплого электрического пола</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">580</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Обшивка ступеней плиткой</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">1400</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж паркета в замок</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">250</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Крепление поливинилхлоридных плинтусов</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">180</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Крепление декоративных узких реек из дерева</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">250</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Крепление керамических плинтусов</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">700</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Крепление декоративных узких реек из шпона</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">300</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж порогов</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">250</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Установка дверного ограничителя</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">200</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- end items 2 -->

                                        <!-- start item 3. Электромонтажные работы -->
                                        <div class="estimates__items">
                                            <div class="estimates__typeWork">Электромонтажные работы</div>
                                            <table class="table table-tr_td table_td" class="estimates__tableHead">
                                                <tbody>
                                                <tr class="bold">
                                                    <td>Наименование работ</td>
                                                    <td>Ед. изм.</td>
                                                    <td>Количество</td>
                                                    <td>Цена от, руб.</td>
                                                    <td>Сумма</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж проводки открытым способом/ проводов в электро-коробе</td>
                                                    <td>п. п.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">85</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Установка светодиодной ленты (LED)</td>
                                                    <td>п. п.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">210</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Прокладка кабеля + протяжка в гофру</td>
                                                    <td>п. п.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">130</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж установочной коробки</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">320</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Установка электроточки на поверхность стены</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">220</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Гипсовая заделка отверстий подрозетников</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">100</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж настенных светильников (бра)</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">380</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж потолочных светильников (люстр)</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">950</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Установка однофазных защитных автоматов/ понижающих трансформаторов</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">360</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж трёхфазных дифференциальных устройств защитного отключения (УЗО)</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">520</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж + подсоединение звонка</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">450</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж + подсоединение кнопки звонка</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">400</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- end items 3 -->

                                        <!-- start items 4. Сантехнические работы -->
                                        <div class="estimates__items">
                                            <div class="estimates__typeWork">Сантехнические работы</div>
                                            <table class="table table-tr_td table_td" class="estimates__tableHead">
                                                <tbody>
                                                <tr class="bold">
                                                    <td>Наименование работ</td>
                                                    <td>Ед. изм.</td>
                                                    <td>Количество</td>
                                                    <td>Цена от, руб.</td>
                                                    <td>Сумма</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Установка посудомойки/стиральной машинки</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">880</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж водонагревающего устройства</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">2000</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж приспособления для мытья рук (раковины)</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">1400</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Установка унитаза / биде</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">1800</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтирование ванны</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">2500</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Устройство кабинки для душа</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">4000</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Крепление смесителя</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">950</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Установка фильтров для воды</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">400</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Подключение полотенцесушителя к системе горячего водоснабжения</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">1500</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Подключение радиатора отопления</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">1000</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                        </div><!-- end items 4 -->

                                        <!-- start items 5. Другие работы -->
                                        <div class="estimates__items">
                                            <div class="estimates__typeWork">Другие работы</div>
                                            <table class="table table-tr_td table_td" class="estimates__tableHead">
                                                <tbody>
                                                <tr class="bold">
                                                    <td>Наименование работ</td>
                                                    <td>Ед. изм.</td>
                                                    <td>Количество</td>
                                                    <td>Цена от, руб.</td>
                                                    <td>Сумма</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Организация рабочего места, хранения оборудования и материалов</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">500</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Устройство простой ниши в перегородке</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">480</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Устройство сложной ниши</td>
                                                    <td>м²</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">950</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтирование поливинилхлоридных окон</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">2000</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Вставка металлический входной двери</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">3000</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж насосов + подключение</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">4000</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Обвязка котла + установка расширительного бака и группы безопасности</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">10000</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Монтаж распределительного коллектора + подсоединение</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">4000</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Газовый котёл (установка + подключение)</td>
                                                    <td>шт.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">6000</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                <tr class="calc_row">
                                                    <td>Прокладка труб для отопления и водоснабжения с утеплителем</td>
                                                    <td>п. м.</td>
                                                    <td class="calc_count">
                                                        <div class="actionButton">
                                                            <div class="minus_count">-</div>
                                                            <input name="input_count" type="text" class="input_count" placeholder="0">
                                                            <div class="plus_count">+</div>
                                                        </div>
                                                    </td>
                                                    <td class="calc_price">150</td>
                                                    <td class="calc_sum">0</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- end items 5 -->

                                    </div><!-- end estimates__content -->

                                </div><!-- end estimates -->

                                <div class="estimates__sum fixed">Итого: <span id="calc_sum">0</span> руб. <span
                                        class="extimates-text">Сделать заказ или получить консультацию:</span>
                                    <a class="mobile-number link" href="tel:+74952589397">+7 (495) 258-93-97</a>
                                </div>

                            </div><!-- end calc table -->

                            <h2 id="2">2. Расценки на виды внутренней отделки</h2>

                            <p>Определитесь, какой тип ремонта вам нужен. Мы предлагаем 3 вида ремонта на выбор: косметический, капитальный и элитный.</p>

                            <p>Для внешнего преображения дома выбирают косметический ремонт. Более радикальных изменений поможет добиться капремонт. Если хотите дорого отремонтировать дом, то выбирайте элитный вариант.</p>

                            <div class="tariff">

                                <div class="tafiff__card"><!-- start card -->
                                    <div class="tafiff__card-list">
                                        <div class="tafiff__card-inner">
                                            <div class="tafiff__card-img">
                                                <img src="/img/pages/decoration/vnutrennyaya-otdelka-doma-cena/kosmeticheskij-remont-chastnogo-doma.webp" title="Косметический ремонт дома" alt="Косметический ремонт дома фото">
                                            </div>
                                            <div class="tafiff__card-content">
                                                <div class="tafiff__card-title">Косметический ремонт</div>
                                                <div class="tafiff__card-price">от 5000 руб./м<sup>2</sup></div>
                                                <div class="tafiff__card-for">Нужен для преображения помещений в доме/квартире</div>
                                                <div class="tafiff__card-subtitle">Включает в себя:</div>
                                                <div class="tafiff__card-list">
                                                    <ul>
                                                        <li>Демонтаж старой обшивки и мебели</li>
                                                        <li>Шпаклевку</li>
                                                        <li>Шлифовку и грунтовку</li>
                                                        <li>Выравнивание поверхностей</li>
                                                        <li>Поклейка обоев с подбором рисунка или без</li>
                                                        <li>Окрашивание</li>
                                                        <li>Облицовку поверхностей/откосов</li>
                                                        <div class="service-block__card-text"><!-- Кнопка подробнее -->
                                                            <a class="service-block__card-open">Смотреть весь список</a>
                                                            <div class="hide__text">
                                                                <ul>
                                                                    <li>Укладку линолеума на пол</li>
                                                                    <li>Укладку ламината на пол</li>
                                                                    <li>Монтаж порожков</li>
                                                                    <li>Установку электрики и сантехники</li>
                                                                    <li>Замену дверей и окон</li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- end подробнее -->
                                                    </ul>
                                                </div>
                                                <div class="tafiff__card-info">Срок выполнения: <span>1-30 дней</span><br>Материалы: <span>от 1600
                            руб./м<sup>2</sup></span></div>
                                                <button class="tafiff__card-button modal-application__open">Заказать замер</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card -->
                                <div class="tafiff__card"><!-- start card -->
                                    <div class="tafiff__card-list">
                                        <div class="tafiff__card-inner">
                                            <div class="tafiff__card-img">
                                                <img src="/img/pages/decoration/vnutrennyaya-otdelka-doma-cena/kapitalnyj-remont-chastnogo-doma.webp" title="Капитальный ремонт дома" alt="Капитальный ремонт дома фото">
                                            </div>
                                            <div class="tafiff__card-content">
                                                <div class="tafiff__card-title">Капитальный ремонт</div>
                                                <div class="tafiff__card-price">от 8000 руб./м<sup>2</sup></div>
                                                <div class="tafiff__card-for">Проводится для кардинальных изменений в помещениях</div>
                                                <div class="tafiff__card-subtitle">Включает в себя:</div>
                                                <div class="tafiff__card-list">
                                                    <ul>
                                                        <li>Демонтаж</li>
                                                        <li>Наклеивание обоев</li>
                                                        <li>Нанесение краски</li>
                                                        <li>Грунтовку / шлифовку поверхностей</li>
                                                        <li>Устройство стяжки пола</li>
                                                        <li>Нанесение штукатурной смеси</li>
                                                        <li>Укладка ламината /линолеума</li>
                                                        <div class="service-block__card-text"><!-- Кнопка подробнее -->
                                                            <a class="service-block__card-open">Смотреть весь список</a>
                                                            <div class="hide__text">
                                                                <ul>
                                                                    <li>Монтаж плинтусов</li>
                                                                    <li>Установку порожков</li>
                                                                    <li>Установку электрики/сантехники</li>
                                                                    <li>Монтаж перегородок</li>
                                                                    <li>Установку подвесных/натяжных потолков</li>
                                                                    <li>Замену дверей</li>
                                                                    <li>Вставку окон</li>
                                                                    <li>Перепланировку</li>
                                                                    <li>Замена канализационных труб</li>
                                                                    <li>Устройство вентиляционной системы</li>
                                                                    <li>Устройство тёплого пола</li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- end подробнее -->
                                                    </ul>
                                                </div>
                                                <div class="tafiff__card-info">Срок выполнения: <span>15-45 дней</span><br>Материалы: <span>от 2500
                            руб./м<sup>2</sup></span></div>
                                                <button class="tafiff__card-button modal-application__open">Заказать замер</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end card -->
                                <div class="tafiff__card">
                                    <div class="tafiff__card-list">
                                        <div class="tafiff__card-inner">
                                            <div class="tafiff__card-img">
                                                <img src="/img/pages/decoration/vnutrennyaya-otdelka-doma-cena/ehlitnyj-remont-chastnogo-doma.webp" title="Элитный ремонт дома" alt="Элитный ремонт дома фото">
                                            </div>
                                            <div class="tafiff__card-content">
                                                <div class="tafiff__card-title">Элитный ремонт</div>
                                                <div class="tafiff__card-price">от 12000 руб./м<sup>2</sup></div>
                                                <div class="tafiff__card-for">Представляет собой дизайнерский вариант ремонта</div>
                                                <div class="tafiff__card-subtitle">Включает в себя:</div>
                                                <div class="tafiff__card-list">
                                                    <ul>
                                                        <li>Демонтаж</li>
                                                        <li>Оклейку обоями</li>
                                                        <li>Покраску потолков / стен</li>
                                                        <li>Укладку напольного покрытия</li>
                                                        <li>Монтаж сантехники / электрики</li>
                                                        <li>Замену труб</li>
                                                        <li>Установку дверных порогов / плинтусов</li>
                                                        <div class="service-block__card-text"><!-- Кнопка подробнее -->
                                                            <a class="service-block__card-open">Смотреть весь список</a>
                                                            <div class="hide__text">
                                                                <ul>
                                                                    <li>Устройство многоуровневых потолков</li>
                                                                    <li>Выравнивание поверхностей</li>
                                                                    <li>Устройство перегородок</li>
                                                                    <li>Укладку тёплого пола</li>
                                                                    <li>Использование винтажных элементов</li>
                                                                    <li>Составление дизайн-проекта</li>
                                                                    <li>Трёхмерную визуализацию</li>
                                                                    <li>Применение дорогих материалов в ремонте</li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- end подробнее -->
                                                    </ul>
                                                </div>
                                                <div class="tafiff__card-info">Срок выполнения: <span>25-75 дней</span><br>Материалы: <span>от 5000
                            руб./м<sup>2</sup></span></div>
                                                <button class="tafiff__card-button modal-application__open">Заказать замер</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <h2 id="3">3. Артель и C: преимущества компании</h2>

                            <p>Вы можете заказать внутреннюю отделку загородного дома, коттеджа или таунхауса у Артель и C — строительной компании с опытом работы более 15 лет. У нас есть штат опытных сотрудников, которые имеют профессиональное образование. Для отделочных работ используем инновационное оборудование и надёжные материалы, закупленные у проверенных поставщиков.</p>

{{--                        <?php include('../include/advantages.php'); ?><!-- Наши преимущества -->--}}

                            <p>Мы работаем на объектах, расположенных в Москве и Московской области. Выбирая нас, вы получаете:</p>

                            <ul>
                                <li>бесплатную консультацию;</li>
                                <li>индивидуальный подход;</li>
                                <li>множество бонусов, скидок и акций;</li>
                                <li>подготовку проектно-сметной документации;</li>
                                <li>доставку надёжных материалов;</li>
                                <li>отсутствие дополнительных скрытых работ и предоплаты;</li>
                                <li>качественную работу;</li>
                                <li>уборку строительного мусора;</li>
                                <li>гарантийный сертификат на 2 года.</li>
                            </ul>

{{--                        <?php include('../include/warranty-period.php'); ?><!-- Гарантия -->--}}

                            <p>Станьте нашим постоянным клиентом и экономьте на всех услугах в каталоге. У нас действуют специальные скидки. Мы работаем открыто, готовые проекты публикуем на официальном сайте или в соцсетях. Каждый год наше портфолио пополняется более 30 проектами. Оставьте свои контакты, чтобы мы связались с вами и провели бесплатную консультацию.</p>

                            <p>Основные этапы:</p>

                            <ol>
                                <li>Подготовка сметы проекта. При её составлении мы учитываем пожелания клиента касаемо внешнего вида, параметров и функциональности жилья. Также берутся в расчёт строительные нормы и правила для обеспечения безопасности. Готовая смета понадобится специалистам для выполнения дальнейших работ.</li>
                                <li>Выбор материалов. Они подбираются в зависимости от типа ремонта и финансового состояния клиента. Дом отделывают эстетичными, долговечными и практичными материалами. Их цена влияет на итоговую стоимость ремонта.</li>
                                <li>Обшивка. К отделочным работам приступают после составления и согласования сметы проекта, закупки выбранных материалов. Вес процесс делится на несколько шагов. Продолжительность выполнения зависит от сложности.</li>
                            </ol>

{{--                        <?php include('../include/how_we_are_working.php'); ?><!-- Как мы работаем -->--}}

                            <p>Весь ремонт сопровождается фото и видеоотчётами. Таким образом вы сможете отслеживать весь процесс, не присутствуя на объекте.</p>

                            <h2 id="4">4. Этапы внутренней отделки</h2>

                            <p>Внутренняя отделка выполняется в следующей последовательности:</p>

                            <ol>
                                <li>Демонтаж. Сначала удаляют старую обшивку, инженерные коммуникации и элементы декора. Жилище избавляют от изношенных покрытий, старых шкафов, электрики, сантехники и т. д.</li>
                                <li>Монтаж окон/дверей. Теперь приступают к установке рам, стеклопакетов, меняют подоконники и откосы. После монтируют дверные коробы, ставят двери, врезают замки и крепят наличники.</li>
                                <li>Монтаж сантехники. Прокладываются скрытые коммуникации. Установка сантехники проводится только после финишной отделки.</li>
                                <li>Монтаж электричества. Прокладываются провода, крепятся распределительные коробки и ставятся щитки. Розетки, осветительные приборы и выключатели монтируются в конце.</li>
                                <li>Обшивка поверхностей. Стены и потолок подготавливают, а затем облицовывают вагонкой, плитками, гипсокартонным листом или другим материалом. На полы укладывают гидроизоляцию, выравнивают их, а после отделывают.</li>
                            </ol>

                            <img class="sib article__img" loading="lazy" width="900" height="500" src="/img/pages/decoration/vnutrennyaya-otdelka-doma-cena/obshivka-sten-gkl.webp" title="Отделка стен гипсокартоном" alt="Отделка стен гипсокартоном фото">

                            <h2 id="5">5.Отделка помещений</h2>

                            <p>При ремонте важно учитывать особенности помещений и строительные нормы. Наши специалисты отлично с этим справляются.</p>

                            <span id="5-1"></span><span id="5-2"></span><span id="5-3"></span><span id="5-4"></span>

                            <div id="wrapper"><!-- TABS-2 -->
                                <div class="content__tabs">
                                    <!-- Tab links -->
                                    <div class="tabss">
                                        <button class="tablinks active" data-country="one"><p>5.1 Ванная комната</p></button>
                                        <button class="tablinks" data-country="two"><p>5.2 Спальня</p></button>
                                        <button class="tablinks" data-country="three"><p>5.3 Гостиная</p></button>
                                        <button class="tablinks" data-country="four"><p>5.4 Кухня</p></button>
                                    </div>

                                    <!-- Tab content -->
                                    <div class="wrapper_tabcontent">

                                        <div id="one" class="tabcontent active">

                                            <p>Сложнее всего выполнить ремонт санузла. Допущенные ошибки в процессе могут привести к неблагоприятным последствиям, поэтому обшивкой ванной должна заниматься профессиональная бригада.</p>

                                            <p>Поверхности ванной комнаты облицовывают влагоустойчивыми материалами: плитами, пластиковые панелями. Они легко моются и заменяются в случае износа. Декоративными панелями оформляют ванную комнату в современном стиле. В санузел монтируют основные коммуникации, душевую кабину или ванну, умывальник, водонагреватель и другую сантехнику.</p>

                                            <img class="sib article__img" loading="lazy" width="900" height="500" src="/img/pages/decoration/vnutrennyaya-otdelka-doma-cena/remont-vannoj-komnaty.webp" title="Отделка ванной комнаты" alt="Отделка ванной комнаты фото">

                                        </div>

                                        <div id="two" class="tabcontent">

                                            <p>При оформлении спальни учитывают высоту потолков, тип освещения, размеры дверных и оконных проемов, а также предпочтения владельца. Спальня в классическом стиле обладает прямоугольной формой с прямыми углами и линиями в интерьере. В современном варианте отделки присутствуют различные ниши и выступы.</p>

                                            <p>Спальню отделывают деревом, камнем, мрамором. На стены наклеивают текстильные, бумажные или бамбуковые обои. Потолки обшивают гипсокартоном, вагонкой, пластиковыми панелями. Нередко материалы комбинируют друг с другом, создавая уникальный стиль интерьера.</p>

                                            <img class="sib article__img" loading="lazy" width="900" height="500" src="/img/pages/decoration/vnutrennyaya-otdelka-doma-cena/remont-spalni.webp" title="Отделка спальни" alt="Отделка спальни фото">

                                        </div>

                                        <div id="three" class="tabcontent">

                                            <p>В этом помещении нередко выполняют перепланировку. Если гостиная находится в квартире или доме небольшой площади, то её объединяют с кухней. Между помещениями устанавливают барную стойку либо ажурную перегородку. При объединении с кухней сносят капитальные стены, вместо которых монтируют стеклянные стенки или сквозные стеллажи для визуального увеличения пространства.</p>

                                            <p>Поверхности в гостиной оформляют в одной цветовой гамме, добавляя разные оттенки. Гостиная лучше всего смотрится в едином стиле. Если она предназначена для гостей, то её окрашивают в тёплые тона. В гостиной для семейных посиделок применяют холодные оттенки зелёного и синего цвета.</p>

                                            <img class="sib article__img" loading="lazy" width="900" height="500" src="/img/pages/decoration/vnutrennyaya-otdelka-doma-cena/remont-gostinoj.webp" title="Отделка гостиной" alt="Отделка гостиной фото">

                                        </div>

                                        <div id="four" class="tabcontent">

                                            <p>Оформление кухни выполняется практически также, как и других помещений. Однако здесь делается упор на безопасность. На кухне устанавливают вытяжную вентиляцию. Чаще всего вытяжку монтируют возле плиты. На кухонный пол укладывают устойчивый к истиранию линолеум. Пол из досок или ламината не подходит, поскольку подвержен проникновению влаги.</p>

                                            <p>Стены покрывают кафельной, глиняной или стеклянной плиткой. Участки возле мойки и плиты также облицовывают плитками. С них легко смыть накопившуюся грязь. В дизайн кухни добавляют кирпичную кладку или мрамор. В помещении выполняют многоуровневые потолки из ГКЛ со встроенный освещением или подвесные. При недорогом ремонте потолок просто оштукатуривают, шпаклюют и окрашивают.</p>

                                            <img class="sib article__img" loading="lazy" width="900" height="500" src="/img/pages/decoration/vnutrennyaya-otdelka-doma-cena/remont-kuhni.webp" title="Отделка кухни" alt="Отделка кухни фото">

                                        </div>

                                    </div>
                                </div>
                            </div><!-- end tabs-2 -->

                            <h2 id='6'>Вопрос-Ответ</h2>

                            <div itemscope itemtype='https://schema.org/FAQPage'>
                                <section class='faq-section'>
                                    <div itemscope itemprop='mainEntity' itemtype='https://schema.org/Question'>
                                        <input type='checkbox' id='q1'>
                                        <label for='q1'><span itemprop='name'>Сколько стоит отделка дома под ключ?</span></label>
                                        <p itemscope itemprop='acceptedAnswer' itemtype='https://schema.org/Answer'>
                                            <span itemprop='text'>Стоимость зависит от типа ремонта, сложности работ и материалов. Косметический ремонт стоит 5000 руб. за 1 кв. м. (стройматериалы — 1600 за 1 кв. м.), капитальный — 8000 за 1 кв. м. (стройматериалы — 2500 за 1 кв. м.), элитный —12000 за 1 кв. м. (стройматериалы —5000 за 1 кв. м.)</span>
                                        </p>
                                    </div>
                                </section>

                                <section class='faq-section'>
                                    <div itemscope itemprop='mainEntity' itemtype='https://schema.org/Question'>
                                        <input type='checkbox' id='q2'>
                                        <label for='q2'><span itemprop='name'>Сколько времени занимает ремонт?</span></label>
                                        <p itemscope itemprop='acceptedAnswer' itemtype='https://schema.org/Answer'><span itemprop='text'>Косметический ремонт занимает 1-30 суток, капитальный —15-45, а элитный — 25-75. Мастера выезжают на объект и приступают к работам на следующей день после подписания официального договора.</span></p>
                                    </div>
                                </section>

                                <section class='faq-section'>
                                    <div itemscope itemprop='mainEntity' itemtype='https://schema.org/Question'>
                                        <input type='checkbox' id='q3'>
                                        <label for='q3'><span itemprop='name'>Как заказать услуги?</span></label>
                                        <p itemscope itemprop='acceptedAnswer' itemtype='https://schema.org/Answer'><span itemprop='text'>Вы можете оформить заявку онлайн на нашем сайте или позвонить по телефону <a href="tel:+74952589397" rel="nofollow" class="link">+7 (495) 258-93-97</a> для связи с менеджером.</span></p>
                                    </div>
                                </section>
                            </div>

                        <?php /*include('../../include/commercial-blocks.php'); */?><!--<!-- Коммерческие блоки -->

                        <?php /*include('../include/stopgap.php'); */?><!-- бесплатная консультация -->

                        <?php /*include('../include/preview-decoration.php'); */?><!-- Рекомендуемые статьи -->

                        <?php /*include('../include/top-bar.php'); */?><!-- TOP BAR -->

                        <?php /*include('../include/modal-help.php'); */?><!-- /.modal-help -->-->

                        </div>

                    </div><!-- end article__block -->

                </article>

            </div><!-- end content -->

        </section>

    </div><!-- end container -->

@endsection

@section('scripts')
    <script src="/public/js/script.min.js"></script>
@endsection

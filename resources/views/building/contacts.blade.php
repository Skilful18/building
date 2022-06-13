@extends('layouts.master')

<?php
/*
$num = 3;

$articles = mysqli_query($connection, "SELECT * FROM articles WHERE id = $num"); //произвести запрос

$art =  mysqli_fetch_assoc($articles);

$title = "Контакты компании ✅ «Артель и С» - телефоны, email, адрес, ИП, ООО";

$description = "На этой странице вы найдете наши телефоны, адреса, реквизиты для ООО и ИП: БИК, ОГРН, ИНН, телефон, email, банк, р/с, к/с, ОКПО, ОКВЭД - заходите!";

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

<?php /*include('./include/plagins.php'); */?>

@section('styles')

@endsection

@section('title')
    Контакты компании ✅ «Артель и С» - телефоны, email, адрес, ИП, ООО
@endsection

<body itemscope="" itemtype="https://schema.org/WebPage">

<?php /*include('./include/header-test.php'); */?>

@section('content')

<div class="container">

    <section class="section">

       {{-- <?php include('sidebar_copy.php'); ?>--}}

        <div class="contacts content-900">

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

            <article class="article-contacts">

                <div class="contacts__block">
                    <div class="contacts__form">
                        <h3 class="contacts__subtitle">Есть вопросы?</h3>
                        <h2 class="article__title">Оставьте свой номер и мы свяжемся с Вами!</h2>
                        <form method="post" action="mail-contacts" class="contacts__form-send" id="form-contacts">
                            <input type="text" name="name-contacts" class="contacts__form-input" placeholder="Имя" required minlength="2" maxlength="15">
                            <input type="tel" name="tel-contacts" class="contacts__form-input phone" placeholder="+7" required >
                            <button class="button contacts__form-button" type="submit">Заказать звонок</button>

                            <div class="contacts-form__checkbox">
                                <input type="checkbox" name="accept" id="accept-contacts" class="checkbox-input" required checked>
                                <label for="accept-contacts" class="checkbox-label">
                                    <span><span>Настоящим подтверждаю, что я ознакомлен(-а) и согласен(-а) с условиями</span><a href="politica.html" target="_blank">Политикой конфиденциальности</a></span>
                                </label>
                            </div><!-- end checkbox -->

                        </form>
                    </div>

                    <div class="contacts__info">

                        {{--<h1 class="article__title" itemprop="headline"><?php echo $art['h1']; ?></h1>--}}
                        <div class="contacts__info-block">
                            <div class="contacts__info-card">
                                <img src="img/contacts/icon-tel.png" alt="tel">
                                <h3 class="contacts__info-subtitle">Позвоните нам</h3>
                                <div class="contacts__text">
                                    <a href="tel:+74952589397" rel="nofollow">+7 (495) 258-93-97</a><br>
                                    <span>
                  <span>WhatsApp</span>
                  <a href="https://wa.me/79162527728" rel="nofollow">+7 (916) 252-77-28</a>
                </span>
                                </div>
                                <button class="button contacts__button modal-open__call">Заказать звонок</button>
                            </div>
                            <div class="contacts__info-card">
                                <img src="img/contacts/icon-email.png" alt="email">
                                <h3 class="contacts__info-subtitle">Напишите нам</h3>
                                <div class="contacts__text">
                                    Идеи? Предложения?<br>
                                    Мы открыты для<br>
                                    любых вопросов!
                                </div>
                                <button class="button contacts__button mail__open">Написать на почту</button>
                            </div>
                            <div class="contacts__info-card">
                                <img src="img/contacts/icon-message.png" alt="message">
                                <h3 class="contacts__info-subtitle">Обратная связь</h3>
                                <div class="contacts__text">Поделитесь мнением<br> о нашей работе, чтобы<br> мы стали лучше!</div>
                                <button class="button contacts__button allFeedback-block__open">Оставить отзыв</button>
                            </div>
                        </div>


                    </div>

                </div><!-- /end contacts__block -->

                <h2 class="article__title">Реквизиты</h2>

                <div class="contacts__price">

                    <div class="contacts__price-left price-wrap price-wrap__left">
                        <h3 class="price-title price-title__left">ООО "Артель и С"</h3>
                        <div class="box box-left">

                            <ul>
                                <li>
                                    <p><span>ОГРН: </span>1165024052863</p>
                                </li>
                                <li>
                                    <p><span>ИНН: </span>5024164085</p>
                                </li>
                                <li>
                                    <p><span>КПП: </span>502401001</p>
                                </li>
                                <li>
                                    <p><span>ОКПО: </span>01766572</p>
                                </li>
                                <li>
                                    <p><span>ОКТМО: </span>46744000</p>
                                </li>
                                <li>
                                    <p><span>ОКВЭД: </span>41.20 - Строительство жилых и нежилых зданий</p>
                                </li>
                                <li>
                                    <p><span>р/с: </span>40702810140000024930</p>
                                </li>
                                <li>
                                    <p><span>к/с: </span>30101810400000000225</p>
                                </li>
                                <li>
                                    <p><span>Банк: </span>ПАО СБЕРБАНК</p>
                                </li>
                                <li>
                                    <p><span>БИК: </span>044525225</p>
                                </li>
                                <li>
                                    <p><span>Тел: </span><a href="tel:+74952589397" rel="nofollow">+7 (495) 258-93-97 </a></p>
                                </li>
                                <li>
                                    <p><span>E-mail: </span><a href="mailto:info@arteli-stroy.ru" target="_blank" rel="nofollow">info@arteli-stroy.ru</a></p>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="contacts__price-right price-wrap price-wrap__right">
                        <h3 class="price-title price-title__right">ИП Сташков Д.В</h3>
                        <div class="box box-right">

                            <ul>
                                <li>
                                    <p><span>ОГРНИП: </span>318692000028191</p>
                                </li>
                                <li>
                                    <p><span>ИНН: </span>593200021646</p>
                                </li>
                                <li>
                                    <p><span>р/с: </span>40802810500000708575</p>
                                </li>
                                <li>
                                    <p><span>к/с: </span>30101810145250000974</p>
                                </li>
                                <li>
                                    <p><span>Банк: </span>АО «Тинькофф Банк»</p>
                                </li>
                                <li>
                                    <p><span>БИК: </span>044525974</p>
                                </li>
                                <li>
                                    <p><span>Тел: </span><a href="tel:+74952589397" rel="nofollow">+7 (495) 258-93-97 </a></p>
                                </li>
                                <li>
                                    <p><span>E-mail: </span><a href="mailto:info@arteli-stroy.ru" target="_blank" rel="nofollow">info@arteli-stroy.ru</a></p>
                                </li>
                            </ul>

                        </div>

                    </div>

                </div><!-- /end contacts__price -->
            </article>

        </div>
        <!-- /.contacts -->

    </section>

</div> <!-- .container -->

@endsection

@section('scripts')
    <script src="/public/js/script.min.js"></script>
@endsection

<script>

    document.addEventListener('DOMContentLoaded', () => {

        const form_contacts = document.querySelector('#form-contacts');
        form_contacts.addEventListener('submit', formSendContacts);

        async function formSendContacts(e) {
            e.preventDefault();

            let formDataContacts = new FormData(form_contacts);

            document.querySelector('.contacts__form').children[2].classList.add('_sending');

            let response = await fetch('/mail-contacts', {
                method: 'POST',
                body: formDataContacts
            });

            if(response.ok) {
                let result = await response.json();
                document.querySelector('.contacts__form').children[2].classList.remove('_sending');
                document.querySelector('.contacts__form').innerHTML = result.message;
                form_contacts.reset();
            } else {
                alert ('Ошибка');
                document.querySelector('.contacts__form').children[2].classList.remove('_sending');
            }
        };

    });

</script>

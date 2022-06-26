{{--<?php include('partners.php'); ?>--}}
{{--<!-- /.partners -->--}}

{{--<?php include('modal-call.php'); ?>--}}
{{--<!-- /.modal-call -->--}}

{{--<?php include('modal-application.php'); ?>--}}
{{--<!-- /.modal-application -->--}}

{{--<?php include('modal-feedback.php'); ?>--}}
{{--<!-- /.modal-feedback -->--}}

{{--<?php include('modal-mail.php'); ?>--}}
{{--<!-- /.modal-mail.php -->--}}

<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
    <link itemprop="url" href="https://arteli-stroy.ru/">
    <div itemprop="logo image" itemscope itemtype="https://schema.org/ImageObject" style="display:none">
        <img itemprop="url contentUrl" src="https://arteli-stroy.ru/img/interface/logo.png" alt="logo">
        <meta itemprop="width" content="300">
        <meta itemprop="height" content="42">
    </div>
    <meta itemprop="name" content="Артель и С">
    <meta itemprop="description" content="Реконструкция, строительство, отделка, утепление, крыши, фундамент, электрика, отопление, водоснабжение и канализация вашего дома!">
    <meta itemprop="address" content="г. Красногорск, ул. Ленина, дом 22а">
    <meta itemprop="telephone" content="+7 (495) 258-93-97">
</div>

<!-- <div class="snowflakes" aria-hidden="true">
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❄
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❄
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❄
  </div>
</div> -->


<footer class="footer">
    <div class="container">
        <div class="footer-block">

            <div class="footer-block__logo">
{{--                           <?php--}}
{{--                         if ($_SERVER['REQUEST_URI'] == '/') {  ?>--}}
{{--                <a href="javascript:void(0);" class="logo">--}}
{{--                    <img src="/img/interface/logo.png" alt="логотип компании Артель и С">--}}
{{--                </a>--}}
{{--                <?php }--}}

{{--                else { ?>--}}
{{--                <a href="/" class="logo">--}}
{{--                    <img src="/img/interface/logo.png" alt="логотип компании Артель и С">--}}
{{--                </a>--}}

{{--                <?php } ?>--}}
            </div>

            <div class="footer-block__list">
                <div>
                    <a href="{{route('construction')}}">Строительство</a>
                    <a href="{{route('reconstruction')}}">Реконструкция</a>
                    <a href="{{route('extensions')}}">Пристройки</a>
                    <a href="{{route('decoration')}}">Отделка</a>
                    <a href="{{route('roof')}}">Крыши</a>
                    <a href="{{route('foundation')}}">Фундамент</a>
                    <a href="{{route('warming')}}" rel="nofollow">Утепление</a>
                    <a href="{{route('heating')}}" rel="nofollow">Отопление</a>
                    <a href="{{route('electrician')}}" rel="nofollow">Электрика</a>
                    <a href="{{route('water-system')}}" rel="nofollow">Водопровод и канализация</a>
                </div>
                <div>
                    <span class="city-footer">регион: <a class="city-open" href="javascript:void(0);">Москва</a></span>
                    <p>г. Красногорск,<br>ул. Ленина, дом 22а</p>
                    <a href="tel:+74952589397" rel="nofollow">+7 (495) 258-93-97</a>
                    <p>
                        График работы:<br>
                        Пн-Пт 9:00 - 21:00<br>
                        Суббота 10:00 - 15:00<br>
                        Воскресенье выходной
                    </p>
                </div>
            </div>
            <!-- /.footer-block__list -->

            <div class="footer-block__network">

                <p>E-mail:<a class="mail__open">info@arteli-stroy.ru</a></p>
                <div>
                    <a href="https://t.me/artelistroy" target="_blank" rel="nofollow"><img src="/img/interface/telegram_icon.webp" alt="telegram icon" title="telegram"></a>
                    <a href="https://wa.me/79162527728" rel="nofollow" target="_blank">
                        <img src="/img/interface/whatsapp.png" alt="whatsApp" title="WhatsApp">
                    </a>
                    <img src="/img/interface/mail.png" alt="Email" title="E-mail" class="mail__open">
                </div>
                <button class="button footer-block__button modal-application__open">Оставить заявку</button>
            </div>
            <!-- /.footer-block__network -->
        </div>
        <!-- /.footer-block -->

        <div class="footer__info">
            <p>Все права защищены. Вся информация на сайте носит чисто информационный характер и не является публичной офертой</p>
        </div>
        <!-- /.footer-block__info -->

        <div class="cities" style="display:none" id="cities">
            <button class="modal-block__close" id="close-cities"></button>
            <div class="cities-block">
                <h2>Города где мы работаем:</h2>
                <div class="cities-list">
                    <div class="cities-item">
                        <dl>
                            <dt><a rel="nofollow" href="/service/reconstruction/remont-domov-v-krasnogorske">Красногорск</a></dt>
                            <dt><a rel="nofollow" href="/service/reconstruction/remont-domov-v-istre">Истра</a></dt>
                            <dt><a rel="nofollow" href="/service/reconstruction/remont-doma-mozhajsk">Можайск</a></dt>
                            <dt><a rel="nofollow" href="/service/reconstruction/remont-domov-volokolamsk">Волоколамск</a></dt>
                            <dt><a rel="nofollow" href="/service/reconstruction/remont-doma-kubinka">Кубинка</a></dt>
                            <dt><a href="/service/reconstruction/remont-doma-solnechnogorsk">Солнечногорск</a></dt>
                            <dt><a rel="nofollow" href="/service/reconstruction/remont-doma-zvenigorod">Звенигород</a></dt>
                            <dt><a rel="nofollow" href="/service/reconstruction/remont-doma-zelenograd">Зеленоград</a></dt>
                            <dt><a rel="nofollow" href="/service/reconstruction/remont-doma-dedovsk">Дедовск</a></dt>
                            <dt><a rel="nofollow" href="/service/reconstruction/remont-doma-aprelevka">Апрелевка</a></dt>
                            <dt><a rel="nofollow" href="/service/reconstruction/remont-doma-klin">Клин</a></dt>
                            <dt>Новопетровск</dt>
                            <dt>Павловская-Слобода</dt>
                            <dt>Шаховское</dt>
                            <dt>Балашиха</dt>
                            <dt>Долгопрудный</dt>
                            <dt>Домодедово</dt>
                        </dl>
                    </div>
                    <div class="cities-item">
                        <dl>
                            <dt>Жуковский</dt>
                            <dt>Коломна</dt>
                            <dt>Королёв</dt>
                            <dt>Люберцы</dt>
                            <dt>Мытищи</dt>
                            <dt>Ногинск</dt>
                            <dt><a rel="nofollow" href="/service/reconstruction/remont-doma-odincovo">Одинцово</a></dt>
                            <dt>Орехово-Зуево</dt>
                            <dt>Подольск</dt>
                            <dt><a rel="nofollow" href="/service/reconstruction/remont-doma-pushkino">Пушкино</a></dt>
                            <dt>Раменское</dt>
                            <dt>Реутов</dt>
                            <dt><a rel="nofollow" href="/service/reconstruction/remont-chastnogo-doma-v-sergiev-posad">Сергиев Посад</a></dt>
                            <dt>Серпухов</dt>
                            <dt><a rel="nofollow" href="/service/reconstruction/remont-doma-himki">Химки</a></dt>
                            <dt>Щелково</dt>
                            <dt>Электросталь</dt>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
</footer>

<a id="scroller"><span class="arrow"></span></a>




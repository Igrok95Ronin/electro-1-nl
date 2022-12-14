<?php
$site_data      = json_decode(file_get_contents('http://templates.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Zonnepanelen plaatsen'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? 'Nederland'));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>
    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <div class="header__box">
                        <div class="header__inner">
                            <img class="header__log" src="assets/icons/logo.png" alt="">
                            <span>Zonnepanelen</span>
                        </div>
                        <a class="linkBtn" href="<?= $phone_href ?>"><span><?= $phone_name ?></span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
        <section class="slider">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container__padding-ziro">
                        <div class="slider__box">
                            <div class="slider__inner">
                                <h1 class="slider__title">Zonnepanelen plaatsen <?= $city ?></h1>
                                <p class="slider__dscr">Vraag nu vrijblijvend een offerte aan</p>
                                <a class="slider-linkBtn" href="<?= $phone_href ?>"><span><?= $phone_name ?></span></a>
                            </div>
                            <div class="slider__single-item">
                                <div class="slider__fon">
                                    <img class="slider__img" src="assets/img/fon3.jpg" alt="">
                                </div>
                                <div class="slider__fon">
                                    <img class="slider__img" src="assets/img/fon2.jpg" alt="">
                                </div>
                                <div class="slider__fon">
                                    <img class="slider__img" src="assets/img/fon1.jpg" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="capabilities">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="capabilities__box">
                            <h2 class="capabilities__title">Energie wordt steeds duurder en het plaatsen van
                                zonnepanelen wordt steeds goedkoper. Ontdek uw mogelijkheden.</h2>
                            <p class="capabilities__dscr">Met het oog op de stijgende energieprijzen zijn zonnepanelen
                                zeer rendabel voor uw energierekening. Zo kunt u met 10
                                zonnepanelen meer dan €1.000 per jaar besparen.</p>
                            <p class="capabilities__dscr">Doe de vrijblijvende dak scan en stel al uw vragen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="solarPanels">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="solarPanels__title">Waarom kiezen voor <span>zonnepanelen?</span></h2>
                        <div class="solarPanels__box">
                            <div class="solarPanels__inner">
                                <img src="assets/img/1flink-besparen.png" alt="" class="solarPanels__img">
                                <span></span>
                                <p class="solarPanels__text">Flink besparen op uw energierekening</p>
                            </div>
                            <div class="solarPanels__inner">
                                <img src="assets/img/2binnen-1-dag.png" alt="" class="solarPanels__img">
                                <span></span>
                                <p class="solarPanels__text">Binnen één dag geplaatst</p>
                            </div>
                            <div class="solarPanels__inner">
                                <img src="assets/img/3duurzaam.png" alt="" class="solarPanels__img">
                                <span></span>
                                <p class="solarPanels__text">Duurzaam en milieubewust</p>
                            </div>
                            <div class="solarPanels__inner">
                                <img src="assets/img/4hogere-woningwaarde.png" alt="" class="solarPanels__img">
                                <span></span>
                                <p class="solarPanels__text">Hogere woningwaarde</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="about__title">Een paar woorden <span>over ons</span></h2>
                        <div class="about__box">
                            <div class="about__left">
                                <img class="about__img" src="./assets/img/about.jpg" alt="">
                            </div>
                            <div class="about__right">
                                <p class="about__text">Wij bieden u zonnepaneel systemen aan op maat, zodat u met plug
                                    en play uw zonnepaneel installatie in een paar uurtjes
                                    voor elkaar heeft. Natuurlijk willen wij u met alle plezier hierbij helpen.
                                    Uiteraard installeren wij ook en kunnen we
                                    alle zorg voor u uit handen nemen tot en met de aanmelding bij uw netwerkbeheerder.
                                    Onze systemen zijn zeer betaalbaar
                                    en van uitstekende kwaliteit. Als u alleen de zonnepanelen, de inverter of iets
                                    anders nodig heeft willen we ook graag
                                    iets voor u kunnen betekenen. We zijn altijd bereid tot een vrijblijvend informatief
                                    gesprek en komen graag bij u langs
                                    om het een en ander toe te lichten.</p>
                                <a class="linkBtn" href="<?= $phone_href ?>"><span><?= $phone_name ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="different">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <h2 class="different__title">Waarin <span>onderscheiden wij ons?</span></h2>
                        <div class="different__box">
                            <div class="different__inner">
                                <h3 class="different__name">Maatwerk</h3>
                                <p class="different__dscr">Zonnepanelen installeren is maatwerk en dat leveren wij.</p>
                            </div>
                            <div class="different__inner">
                                <h3 class="different__name">Expertise</h3>
                                <p class="different__dscr">Sinds 2014 in het vak en dat levert de nodige kennis op</p>
                            </div>
                            <div class="different__inner">
                                <h3 class="different__name">Kwaliteit</h3>
                                <p class="different__dscr">Degelijk materiaal voor een eerlijke prijs.</p>
                            </div>
                            <div class="different__inner">
                                <h3 class="different__name">1ste klas installateurs</h3>
                                <p class="different__dscr">Vakmannen die netjes werk leveren.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ourWork">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container__padding-ziro">
                        <h2 class="ourWork__title">Voorbeelden <span>van ons werk</span></h2>
                        <div class="ourWork__box">
                            <img class="ourWork__img" src="./assets/img/11mt-1131-home-img4-1.jpg" alt="">
                            <img class="ourWork__img" src="./assets/img/22mt-1131-home-img9.jpg" alt="">
                            <img class="ourWork__img" src="./assets/img/33landing-environment-4-960x660.jpg" alt="">
                            <img class="ourWork__img" src="./assets/img/44landing-environment-2-720x459.jpg" alt="">
                            <img class="ourWork__img" src="./assets/img/55mt-1531-carusel-img03.jpg" alt="">
                            <img class="ourWork__img" src="./assets/img/66mt-1531-home-img04.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="reviews">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container__padding-ziro">
                        <h2 class="reviews__title">Beoordelingen</h2>
                        <div class="reviews__box">
                            <div class="reviews__wrapper">
                                <p class="reviews__message">Wij hebben 17 panelen laten plaatsen. Bij de slechte
                                    verkrijgbaarheid van de omvormer overgestapt op Emphase.
                                    Geen moment spijt van gehad. De panelen zijn keurig gemonteerd met oog...</p>
                                <div class="reviews__inner">
                                    <img src="./assets/img/1mess.jpg" alt="" class="reviews__img">
                                    <div>
                                        <p class="reviews__name">Willem Claessens</p>
                                        <p class="reviews__dol">Vaste klant</p>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews__wrapper">
                                <p class="reviews__message">Fijn bedrijf, persoonlijk contact, deskundige en aardige
                                    monteurs Mitchel en Maarten. In een halve dag lagen de
                                    kabels en de panelen er. Daarna legde Mitchel de werking van...</p>
                                <div class="reviews__inner">
                                    <img src="./assets/img/2mess.jpg" alt="" class="reviews__img">
                                    <div>
                                        <p class="reviews__name">Melanie Wouters</p>
                                        <p class="reviews__dol">Vaste klant</p>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews__wrapper">
                                <p class="reviews__message">Wat een fijn bedrijf. Reageren snel, denken mee, zijn
                                    vriendelijk maar blijven professioneel. Samen met de
                                    buren gekozen voor een oplossing met ieder 12 panelen. Eerst wilde we...</p>
                                <div class="reviews__inner">
                                    <img src="./assets/img/3mess.jpg" alt="" class="reviews__img">
                                    <div>
                                        <p class="reviews__name">Juliaan Bosmans</p>
                                        <p class="reviews__dol">Vaste klant</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="consultation">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 container">
                        <div class="consultation__box">
                            <h2 class="consultation__title">Do you need a Consultation?</h2>
                            <a class="linkBtn" href="<?= $phone_href ?>"><span><?= $phone_name ?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="forms">
            <div class="forms__wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 container">
                            <h2 class="forms__title">Contact us:</h2>
                            <div class="forms__box">
                                <form id="jq_form" class="mb-5 mt-3">
                                    <div class="my-0">
                                        <input class="form-control" placeholder="Naam" name="jq_name" type="text">
                                        <div id="jq_name"
                                            style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">
                                            Dit is een verplicht veld.</div>
                                    </div>
                                    <div class="my-4">
                                        <input class="form-control" placeholder="Telefoonnummer" name="jq_phone"
                                            type="text">
                                        <div id="jq_phone"
                                            style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">
                                            Dit is een verplicht veld.</div>
                                    </div>
                                    <div class="my-4">
                                        <input class="form-control" placeholder="Straat" name="jq_street" type="text">
                                    </div>
                                    <div class="my-4">
                                        <input class="form-control" placeholder="Postcode / Stad" name="jq_city"
                                            type="text">
                                    </div>
                                    <div class="my-4">
                                        <input class="form-control" placeholder="E-mailadres" name="jq_email"
                                            type="text">
                                    </div>
                                    <div class="my-4">
                                        <textarea rows="3" class="form-control" name="jq_text"
                                            placeholder="Bericht"></textarea>
                                        <div id="jq_text"
                                            style="font-weight:700;font-size:15px;color:red;padding-top:2px;display:none">
                                            Dit is een verplicht veld.</div>
                                    </div>
                                    <div>
                                        <input class="btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button"
                                            type="submit" id="jq_submit" value="Verzenden">
                                    </div>
                                    <div id="jq_success" style="display:none">Bedankt voor je bericht. ze heeft
                                        Geplaatst.</div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">Copyright © 2022</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/main.min.js"></script>


</body>

</html>
<?php // этот php-код компилирует less/style.less в css/style.css	
require "./assets/less/lessc.inc.php";
function autoCompileLess($inputFile, $outputFile)
{
    // load the cache
    $cacheFile = $inputFile . ".cache";
    if (file_exists($cacheFile)) {
        $cache = unserialize(file_get_contents($cacheFile));
    } else {
        $cache = $inputFile;
    }
    $less = new lessc;
    $newCache = $less->cachedCompile($cache);
    if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
        file_put_contents($cacheFile, serialize($newCache));
        file_put_contents($outputFile, $newCache['compiled']);
    }
}
autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<meta name="viewport" content="width=1200px">-->

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!--<link rel="apple-touch-icon" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="72x72" href="ссылка на фавикон для apple">
	<link rel="apple-touch-icon" sizes="114x114" href="ссылка на фавикон для apple"> -->

    <!-- <meta property="og:image" content="ссылка на картинку для превью"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
</head>

<body>
    <div class="wrapper">
        <div id="mobile-menu">
            <div class="block df">
                <ul>
                    <li><a href="#"><span>Головна</span></a></li>
                    <li><a href="#sec2"><span>Чому ми?</span></a></li>
                    <li><a href="#sec3"><span>Про нас</span></a></li>
                    <li><a href="#sec5"><span>Етапи</span></a></li>
                    <li><a href="#contacts"><span>Контакти</span></a></li>
                </ul>
                <ul>
                    <li class="phone-item"><a href="tel:+380638997789">+38 063 899 7789</a></li>
                    <li class="time-item">09:00 - 17:00</li>
                    <li class="location-item"><a href="#">вулиця Михайла Грушевського, 26/1</a></li>
                </ul>
            </div>
        </div>
        <header id="header">
            <div class="top-info">
                <div class="container">
                    <ul>
                        <li class="phone-item"><a href="tel:+380638997789">+38 063 899 7789</a></li>
                        <li class="time-item">09:00 - 17:00</li>
                        <li class="location-item"><a href="#">вулиця Михайла Грушевського, 26/1</a></li>
                    </ul>
                </div>
            </div>
            <div class="bottom-info">
                <div class="container">
                    <div class="block df jb">
                        <a class="logo" href="">
                            <img src="./assets/img/logo.svg" alt="">
                        </a>
                        <nav>
                            <ul>
                                <li><a href="#header">Головна</a></li>
                                <li><a href="#sec2">Чому ми?</a></li>
                                <li><a href="#sec3">Про нас</a></li>
                                <li><a href="#sec5">етапи</a></li>
                                <li><a href="#contacts">Контакти</a></li>
                            </ul>
                        </nav>
                        <div class="menu">
                            <button id="burger-menu">
                                <div class="box box_item1"></div>
                                <div class="box box_item2"></div>
                                <div class="box box_item3"></div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="sec1">
            <div class="container" data-aos="fade-up">
                <div class="title">
                    <h1>Ми є постачальником рішень, <span>для всього будинку</span></h1>
                </div>
                <ul>
                    <li>РЕМОНТ КВАРТИРИ-СТУДІЇ</li>
                    <li>КОМПЛЕКСНИЙ РЕМОНТ КВАРТИР</li>
                    <li>РЕМОНТ КВАРТИР ПІД КЛЮЧ У НОВОБУДОВI</li>
                </ul>
                <a href="#contacts" class="btn-order">Замовити послуги</a>
            </div>
        </section>
        <section class="sec2" id="sec2">
            <div class="container" data-aos="fade-up">
                <div class="title">
                    <h2>Чому ми?</h2>
                </div>
                <div class="items">
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/wallet.svg" alt="">
                        </div>
                        <p>Працюємо без передоплати за роботи та матеріали</p>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/present.svg" alt="">
                        </div>
                        <p>Робимо технічний проект квартири безкоштовно</p>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="./assets/img/guarantee.svg" alt="">
                        </div>
                        <p>Даємо гарантію на виконані нами роботи</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec3" id="sec3">
            <div class="container">
                <div class="txt" data-aos="fade-left">
                    <div class="title">
                        <h2>Про нас</h2>
                    </div>
                    <div class="texts">
                        <p>Ми компанія, що складається з 8 бригад фахівців-ремонтників.</p>
                        <p>У нашому штаті є як майстри-універсали, які виконують усі роботи: і малярські, і електромонтажні, і сантехнічні. А також окремі спеціалісти - електрики, сантехніки, штукатури-маляри, гіпсокартонники. Усі майстри мають досвід ремонту квартир-новобудов та досвід капітального ремонту вже у житлових будинках. Кожен ремонтник у нашій команді працює більше 3-х років і несе персональну відповідальність за якість ремонту.</p>
                    </div>
                    <a href="#contacts" class="btn-order">замовити послуги</a>
                </div>
            </div>
        </section>
        <section class="sec4">
            <div class="container" data-aos="fade-up">
                <div class="items">
                    <div class="item">
                        <span>350+</span>
                        <p>Задоволених клієнтів</p>
                    </div>
                    <div class="item">
                        <span>85+</span>
                        <p>Професійних працівників</p>
                    </div>
                    <div class="item">
                        <span>400+</span>
                        <p>Проектів виконано</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec5" id="sec5">
            <div class="container" data-aos="fade-up">
                <div class="title">
                    <h2>Порядок надання послуг</h2>
                </div>
                <div class="steps-content">
                    <div class="steps-title">
                        <span>Крок перший</span>
                        <span>Крок другий</span>
                        <span>Крок третій</span>
                        <span>Крок четвертий</span>
                    </div>
                    <div class="steps-items">
                        <div class="step-item" data-number="1">
                            <span>Огляд та заміри квартири</span>
                            <p>Виконуються безкоштовно для кожного клієнта</p>
                        </div>
                        <div class="step-item" data-number="2">
                            <span>Формування кошторису</span>
                            <p>Розрахунок витрат на работи та матерiали</p>
                        </div>
                        <div class="step-item" data-number="3">
                            <span>Підписання договору</span>
                            <p>Вказуються терміни та вартість послуг</p>
                        </div>
                        <div class="step-item" data-number="4">
                            <span>Приймання та здавання робіт</span>
                            <p>Оплата здійснюється після закінчення етапів роботи.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec6">
            <div class="container" data-aos="fade-up">
                <div class="arrows">
                    <div class="swiper-prev"></div>
                    <div class="swiper-next"></div>
                </div>
                <div class="container-swiper">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="./assets/img/slide1.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/img/slide2.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/img/slide3.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/img/slide4.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="./assets/img/slide5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec7" id="contacts">
            <div class="container" data-aos="fade-up">
                <div class="title">
                    <h3><span>Залиште заявку</span> i ми з вами зв'яжемося</h3>
                </div>
                <form action="#">
                    <input type="text" placeholder="Твоє ім'я *" required>
                    <input type="text" placeholder="Адреса електронної пошти *" required>
                    <input type="text" placeholder="твій номер телефону *" required>
                    <button>Надіслати заявку</button>
                </form>
            </div>
        </section>
        <footer>
            <div class="footer-wrapper">
                <div class="container">
                    <a href="#" class="logo">
                        <img src="./assets/img/logo.svg" alt="">
                    </a>
                    <div class="columns">
                        <div class="column">
                            <span class="column-title">Кориснi посилання</span>
                            <ul>
                                <li><a href="#header">Головна</a></li>
                                <li><a href="#sec2">Чому ми?</a></li>
                                <li><a href="#sec5">Етапи</a></li>
                                <li><a href="#contacts">Контакти</a></li>
                            </ul>
                        </div>
                        <div class="column">
                            <span class="column-title">Головний офіс</span>
                            <p>вулиця Михайла Грушевського, 26/1, Київ, Україна, 02000</p>
                            <p><a href="mailto:logo2023@gmail.com">logo2023@gmail.com</a></p>
                            <p><a href="tel:+380638997789">+38 063 899 7789</a></p>
                        </div>
                        <div class="column">
                            <span class="column-title">Часи роботи</span>
                            <p>Пн - Пт : 9:00 - 17:00</p>
                            <p>Сб-Нд : Зачинено</p>
                        </div>
                    </div>
                </div>
            </div>
            <span class="owner">ФОП © 2023. logo2023@gmail.com</span>
        </footer>
    </div>

    <?php require "modal.php" ?>
    <?php require "footer.php" ?>
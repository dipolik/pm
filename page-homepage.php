<?php 
/* Template Name: Homepage */ 

get_header();
?>

	<main id="primary" class="site-main">

	<!-- Banner -->
	<section id="bannerSection" class="section s-banner">
        <div class="s-banner-bg"></div>
        <div class="container banner-container">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-6 ">
                    <div class="s-banner--content-wrapper decor-line">
                        <h2 class="s-title title-line banner-title"><?php pll_e('Терміновий ремонт вашої <br> пральної машини, на дому.'); ?></h2>
                        <div class="banner-achievements w-100 d-inline-flex justify-content-between">
                            <p class="dark-blue"><?php pll_e('ШВИДКО') ?></p>
                            <p class="dark-green"><?php pll_e('ЯКІСНО') ?></p>
                            <p class="light-green"><?php pll_e('від 400грн') ?></p>
                        </div>
                        
						<!-- cf7 Banner Form-->
						<?php echo do_shortcode( '[contact-form-7 id="15" title="Homepage Banner Form"]' ); ?>
                        <?php echo do_shortcode( '[contact-form-7 id="70" title="Homepage Banner Form Extended"]' ); ?>

                        <ul class="list-unstyled list-done">
                            <li class="list-done--item dark-green" ><?php pll_e('24/7 Без вихідних та свят') ?></li>
                            <li class="list-done--item dark-green" ><?php pll_e('Гарантія до 12 місяців') ?></li>
                            <li class="list-done--item dark-green" ><?php pll_e('Час обираєте - Ви!') ?></li>
                            <li class="list-done--item dark-green" ><?php pll_e('Всі райони Києва та передмістя') ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

	<!-- Achivements -->
    <section id="serviceSection" class="section s-achiv">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="container-box">
                            <h2 class="s-title title-line "><?php pll_e('Чому обирають саме нас:') ?></h2>
                            <div
                                class="achiv-wrapper d-flex flex-column flex-md-row flex-wrap justify-content-md-between ">

                                <div class="achiv-item">
                                    <img class="lazy achiv-item--img " 
                                        src="<?php bloginfo('template_url'); ?>/img/loading.png" 
                                        data-src="<?php bloginfo('template_url'); ?>/img/achiv-comfort.png"
                                        data-srcset="<?php bloginfo('template_url'); ?>/img/achiv-comfort.png" 
                                        alt="Комфортний ремонт пральних машин">
                                    <p class="achiv-item--title achiv-item--title_blue "
                                        ><?php pll_e('Комфортний ремонт') ?></p>
                                    <p class="achiv-item--desc " ><?php pll_e('Ми проводимо ремонт на місці. Тож Вам не потрібно нікуди везти пральну машину.') ?></p>
                                </div>

                                <div class="achiv-item">
                                    <img class="lazy achiv-item--img " 
                                        src="<?php bloginfo('template_url'); ?>/img/loading.png" data-src="<?php bloginfo('template_url'); ?>/img/achiv-calendar.png"
                                        data-srcset="<?php bloginfo('template_url'); ?>/img/achiv-calendar.png" alt="Ремонт пральних машин у Києві">
                                    <p class="achiv-item--title achiv-item--title_blue "
                                        ><?php pll_e('10 Років турботи') ?></p>
                                    <p class="achiv-item--desc " ><?php pll_e('Ми ремонтуємо техніку з 2012 року. Ми знаємо все про ремонт пральних машин') ?></p>
                                </div>

                                <div class="achiv-item">
                                    <img class="lazy achiv-item--img " 
                                        src="<?php bloginfo('template_url'); ?>/img/loading.png" 
                                        data-src="<?php bloginfo('template_url'); ?>/img/achiv-masters.png"
                                        data-srcset="<?php bloginfo('template_url'); ?>/img/achiv-masters.png"
                                        alt="Більше ніж 100 майстрів">
                                    <p class="achiv-item--title achiv-item--title_blue "
                                        ><?php pll_e('100+ майстрів') ?></p>
                                    <p class="achiv-item--desc " ><?php pll_e('В нашому арсеналі більш ніж 100 майстрів. Готові приїхати швидко в кожному районі Києва.') ?></p>
                                </div>

                                <div class="achiv-item">
                                    <img class="lazy achiv-item--img " 
                                        src="<?php bloginfo('template_url'); ?>/img/loading.png" data-src="<?php bloginfo('template_url'); ?>/img/achiv-safety.png"
                                        data-srcset="<?php bloginfo('template_url'); ?>/img/achiv-safety.png" alt="Ремонт пральних машин з гарантією">
                                    <p class="achiv-item--title achiv-item--title_blue "
                                        ><?php pll_e('Впевненність клієнта') ?></p>
                                    <p class="achiv-item--desc " ><?php pll_e('Ми несемо відповідальність за наших майстрів. Гарантуємо сервіс високої якості') ?></p>
                                </div>

                                <div class="achiv-item">
                                    <img class="lazy achiv-item--img " 
                                        src="<?php bloginfo('template_url'); ?>/img/loading.png" data-src="<?php bloginfo('template_url'); ?>/img/achiv-service.png"
                                        data-srcset="<?php bloginfo('template_url'); ?>/img/achiv-service.png" alt="Ремонт пральних машин 24/7">
                                    <p class="achiv-item--title achiv-item--title_blue "
                                        ><?php pll_e('Сервіс 24/7') ?></p>
                                    <p class="achiv-item--desc " ><?php pll_e('Ви маєте можливість залишити заявку в будь-який зручний для Вас час.') ?></p>
                                </div>

                                <div class="achiv-item">
                                    <img class="lazy achiv-item--img " 
                                        src="<?php bloginfo('template_url'); ?>/img/loading.png" data-src="<?php bloginfo('template_url'); ?>/img/achiv-health.png"
                                        data-srcset="<?php bloginfo('template_url'); ?>/img/achiv-health.png" alt="Комфортний ремонт пральних машин">
                                    <p class="achiv-item--title achiv-item--title_blue "
                                        ><?php pll_e('Захист здоров’я') ?></p>
                                    <p class="achiv-item--desc "><?php pll_e('Майстри проходять щоденний мед. контроль та виконують свою роботу в масках.') ?></p>
                                </div>

                                <div class="achiv-item">
                                    <img class="lazy achiv-item--img " 
                                        src="<?php bloginfo('template_url'); ?>/img/loading.png" data-src="<?php bloginfo('template_url'); ?>/img/achiv-payment.png"
                                        data-srcset="<?php bloginfo('template_url'); ?>/img/achiv-payment.png" alt="Комфортний ремонт пральних машин">
                                    <p class="achiv-item--title achiv-item--title_blue "
                                        ><?php pll_e('Зручна оплата') ?></p>
                                    <p class="achiv-item--desc " ><?php pll_e('Оплата ремонту зручним для Вас способом, готівкою або переводом на картку.') ?></p>
                                </div>

                                <div class="achiv-item">
                                    <img class="lazy achiv-item--img " 
                                        src="<?php bloginfo('template_url'); ?>/img/loading.png" data-src="<?php bloginfo('template_url'); ?>/img/achiv-time.png"
                                        data-srcset="<?php bloginfo('template_url'); ?>/img/achiv-time.png" alt="Комфортний ремонт пральних машин">
                                    <p class="achiv-item--title achiv-item--title_blue "
                                        ><?php pll_e('Економія часу') ?></p>
                                    <p class="achiv-item--desc " ><?php pll_e('Проводимо ремонт в зручний час, узгодженний з Вами, заздалегіть.') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

	<!-- Half block -->
	<section class="section s-half-block s-half-block--content-left">
        <div class="bg-img">
            <div class="washmachine-img-wrapper">
            <img class="lazy washmachine-img" 
                src="<?php bloginfo('template_url'); ?>/img/loading.png" 
                data-src="<?php bloginfo('template_url'); ?>/img/washmachine-mob.png" 
                data-srcset="<?php bloginfo('template_url'); ?>/img/washmachine-mob.png" 
                alt="Комфортний ремонт пральних машин">
            </div>
        </div>
        <div class="bg-color"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-6 offset-lg-1">
                    <div class="container-box">
                        <h2 class="s-title title-line "><?php pll_e('Ставимось з розумінням до Ваших побажань')?></h2>
                        <p class="half-block--text " ><?php pll_e('Ваша пральна машина відмовляється віджимати білизну, зливати мильну воду, запускати процес полоскання чи зовсім не нагріває воду для прання? Тоді слід негайно викликати майстра та припинити прання речей. Наша компанія пропонує допомогу для всіх жителів Києва, тому що ми маємо величезний досвід роботи з пральними машинами різних моделей та різних брендів, починаючи з 2009 року. 	Завдяки професіоналізму команди наших фахівців, нам вдається впоратися із завданнями всіляких рівнів складності: починаючи з банального чищення фільтра, що засмічений, і закінчуючи складними відновлювальними роботами, заміною комплектуючих, що не підлягають ремонту (заміна підшипників, відновлення електронного модуля та інше).')?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!-- Service Pricelist -->
	<section id="pricelistSection" class="section s-pricelist">
            <div class="bg-gradient">
                <div class="bg-gradient-inner">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="s-title white title-line "><?php pll_e('Розповсюджені несправності')?></h2>
                    </div>
                    <div class="col-12">
                        <div class="d-md-flex flex-md-row flex-md-wrap justify-content-md-between content-box ">

                            <div class="price-card decor-line " >
                                <p class="price-card--title title-line"><?php pll_e('Не віджимає:')?></p>
                                <ul class="price-card--list">
                                    <li class="price-card--item"><?php pll_e('Заміна електронного модуля')?></li>
                                    <li class="price-card--item"><?php pll_e('Заміна ременя приводу барабана')?></li>
                                    <li class="price-card--item"><?php pll_e('Заміна датчика рівня води')?></li>
                                    <li class="price-card--item"><?php pll_e('Заміна амортизаторів')?></li>
                                </ul>
                                <p class="price-card--price"><?php pll_e('від 350 грн')?></p>
                            </div>

                            <div class="price-card decor-line " >
                            <p class="price-card--title title-line"><?php pll_e('Не набирає воду:')?></p>
                            
                                <ul class="price-card--list">
                                    <li class="price-card--item"><?php pll_e('Усунення засмічення')?></li>
                                    <li class="price-card--item"><?php pll_e('Заміна заливного клапана')?></li>
                                    <li class="price-card--item"><?php pll_e('Заміна датчика рівня води')?></li>
                                </ul>
                                <p class="price-card--price"><?php pll_e('від 350 грн')?></p>
                            
                            
                            </div>

                            <div class="price-card decor-line " >
                            <p class="price-card--title title-line"><?php pll_e('Протікає:')?></p>
                                <ul class="price-card--list">
                                    <li class="price-card--item"><?php pll_e('Заміна манжети')?></li>
                                    <li class="price-card--item"><?php pll_e('Заміна помпи')?></li>
                                    <li class="price-card--item"><?php pll_e('Заміна зливного шлангу')?></li>
                                    <li class="price-card--item"><?php pll_e('Заміна патрубків')?></li>
                                </ul>
                                <p class="price-card--price"><?php pll_e('від 400 грн')?></p>
                                
                            </div>

                            <div class="price-card decor-line " >
                            <p class="price-card--title title-line"><?php pll_e('Не зливає воду:')?></p>
                                <ul class="price-card--list">
                                    <li class="price-card--item"><?php pll_e('Усунення засмічення')?></li>
                                    <li class="price-card--item"><?php pll_e('Заміна фільтра зливного насоса')?></li>
                                    <li class="price-card--item"><?php pll_e('Заміна помпи')?></li>
                                </ul>
                                <p class="price-card--price"><?php pll_e('від 450 грн')?></p>
                            </div>

                            <div class="price-card decor-line " >
                            <p class="price-card--title title-line"><?php pll_e('Не гріє воду:')?></p>
                                <ul class="price-card--list">
                                    <li class="price-card--item"><?php pll_e('Заміна ТЕНу')?></li>
                                    <li class="price-card--item"><?php pll_e('Заміна датчика температури')?></li>
                                    <li class="price-card--item"><?php pll_e('Заміна модуля')?></li>
                                </ul>
                                <p class="price-card--price"><?php pll_e('від 450 грн')?></p>
                            </div>

                            <div class="price-card decor-line " >
                                
                                <p class="price-card--title title-line"><?php pll_e('Шумить:')?></p>
                                <ul class="price-card--list">
                                    <li class="price-card--item"><?php pll_e('Видалення стороннього предмету')?></li>
                                    <li class="price-card--item"><?php pll_e('Заміна амортизаторів')?></li>
                                    <li class="price-card--item"><?php pll_e('Заміна підшипників')?></li>
                                </ul>
                                <p class="price-card--price"><?php pll_e('від 800 грн')?></p>
                            </div>

                        </div>
                    </div>

                    <div class="col-12">
                    <p class="text-center price-card--title mb-1 pb-0"><?php pll_e('Діагностика безкоштовно*')?></p>
                     <p class="text-center fz-12"><?php pll_e('*У випадку згоди на ремонт. При відмові від ремонту 250 грн.')?></p>
                    <p class="cta-text text-center "><?php pll_e('Якщо маєте схожі проблеми з пральною машиною, <br> <span	class="bold">радимо не зволікати</span> та одразу <span class="bold">звернутись </span>до нас <span class="bold">за допомогою</span>')?>
                    </p>
                    <a href="#" class="btn btn-theme"><span><?php pll_e('ПОТРІБЕН РЕМОНТ')?></span></a>
                    </div>
                </div>
            </div>
        </section>

		<section class="section s-process">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="s-title title-line "><?php pll_e('Як відбувається ремонт:')?></h2>

                        <div class="process-wrapper">
                            <ul class="number-list process-list d-md-flex flex-md-wrap justify-content-md-between">
                                <li class="number-list--item wow slideInLeft">
                                    <p class="number"><span class="number-inner">1</span></p>
                                    <p><?php pll_e('Заповнюєте форму')?></p>
                                </li>
                                <li class="number-list--item wow slideInRight" >
                                    <p class="number"><span class="number-inner">2</span></p>
                                    <p><?php pll_e('Ми телефонуємо Вам та надаємо первинну консультацію')?></p>
                                </li>
                                <li class="number-list--item wow slideInLeft" >
                                    <p class="number"><span class="number-inner">3</span></p>
                                    <p><?php pll_e('Приїздимо у зручний для Вас час у зручне для Вас місце')?></p>
                                </li>
                                <li class="number-list--item wow slideInRight" >
                                    <p class="number"><span class="number-inner">4</span></p>
                                    <p><?php pll_e('Проводимо огляд та діагностику пральної машини, узгоджуємо ціну')?></p>
                                </li>
                                <li class="number-list--item wow slideInLeft" >
                                    <p class="number"><span class="number-inner">5</span></p>
                                    <p><?php pll_e('Після ремонту, видаємо гарантію. Не залишаємо після себе сміття.')?></p>
                                </li>
                            </ul>
                            <a href="#contactForm" class="btn btn-theme wow slideInRight"> <span><?php pll_e('ЗАМОВИТИ РЕМОНТ')?></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<section id="contactForm" class="section s-form">
            <div class="bg-gradient">
                <div class="bg-gradient-inner">
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="content-box decor-line">
                            <h2 class="s-title title-line "><?php pll_e('Надішліть запит і ми одразу Вам передзвонимо')?></h2>
                            <p class="s-description " ><?php pll_e('Обіцяємо Вам не надсилати спам, не передавади Ваші данні третім особам, та повну конфіденційність')?></p>
								<!-- cf7 Homepage Form-->
								<?php echo do_shortcode( '[contact-form-7 id="20" title="Homepage Contact Form"]' ); ?>
								
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section s-brands">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="s-title title-line"><?php pll_e('Працюємо з усіма брендами')?></h2>

                        <div class="brands-wrapper w-100 d-md-inline-flex justify-content-md-between flex-md-wrap">

                            <div class="col d-flex flex-column justify-content-sm-center align-items-md-start">                            
                            <img class="lazy logo-item align-self-center align-self-md-start" 
                                     src="<?php bloginfo('template_url'); ?>/img/loading.png" 
                                     data-src="<?php bloginfo('template_url'); ?>/img/bosch-logo.png"
                                     data-srcset="<?php bloginfo('template_url'); ?>/img/bosch-logo.png"
                                     width="185"
                                     height="40"
                                     alt="Пральний Майстер">
                                <img class="lazy logo-item align-self-center align-self-md-start" 
                                     src="<?php bloginfo('template_url'); ?>/img/loading.png" 
                                     data-src="<?php bloginfo('template_url'); ?>/img/ariston-logo.png"
                                     data-srcset="<?php bloginfo('template_url'); ?>/img/ariston-logo.png"
                                     width="200"
                                     height="40"
                                     alt="Пральний Майстер">
                                <img class="lazy logo-item align-self-center align-self-md-start" 
                                     src="<?php bloginfo('template_url'); ?>/img/loading.png" 
                                     data-src="<?php bloginfo('template_url'); ?>/img/electrolux-logo.png" 
                                     data-srcset="<?php bloginfo('template_url'); ?>/img/electrolux-logo.png" 
                                     width="202"
                                     height="25"
                                     alt="Пральний Майстер">
                            </div>
                            <div class="col d-flex flex-column justify-content-sm-center align-items-md-center">
                                <img class="lazy logo-item align-self-center" 
                                     src="<?php bloginfo('template_url'); ?>/img/loading.png" 
                                     data-src="<?php bloginfo('template_url'); ?>/img/indesit-logo.png"
                                     data-srcset="<?php bloginfo('template_url'); ?>/img/indesit-logo.png"
                                     width="150"
                                     height="40"
                                     alt="Пральний Майстер">
                                <img class="lazy logo-item align-self-center" 
                                     src="<?php bloginfo('template_url'); ?>/img/loading.png" 
                                     data-src="<?php bloginfo('template_url'); ?>/img/lg-logo.png" 
                                     data-srcset="<?php bloginfo('template_url'); ?>/img/lg-logo.png" 
                                     width="92"
                                     height="40"
                                     alt="Пральний Майстер">
                                <img class="lazy logo-item align-self-center" 
                                     src="<?php bloginfo('template_url'); ?>/img/loading.png" 
                                     data-src="<?php bloginfo('template_url'); ?>/img/whirlpool-logo.png"
                                     data-srcset="<?php bloginfo('template_url'); ?>/img/whirlpool-logo.png"
                                     width="129"
                                     height="40"
                                     alt="Пральний Майстер">
                            </div>
                            <div class="col d-flex flex-column justify-content-sm-center align-items-md-end">
                                <img class="lazy logo-item align-self-center align-self-md-end" 
                                     src="<?php bloginfo('template_url'); ?>/img/loading.png" 
                                     data-src="<?php bloginfo('template_url'); ?>/img/samsung-logo.png"
                                     data-srcset="<?php bloginfo('template_url'); ?>/img/samsung-logo.png"
                                     width="154"
                                     height="52"
                                     alt="Пральний Майстер">
                                <img class="lazy logo-item align-self-center align-self-md-end" 
                                     src="<?php bloginfo('template_url'); ?>/img/loading.png" 
                                     data-src="<?php bloginfo('template_url'); ?>/img/Siemens-logo.png"
                                     data-srcset="<?php bloginfo('template_url'); ?>/img/Siemens-logo.png"
                                     width="169"
                                     height="40"
                                     alt="Пральний Майстер">
                                <img class="lazy logo-item align-self-center align-self-md-end" 
                                     src="<?php bloginfo('template_url'); ?>/img/loading.png" 
                                     data-src="<?php bloginfo('template_url'); ?>/img/smeg-logo.png"
                                     data-srcset="<?php bloginfo('template_url'); ?>/img/smeg-logo.png"
                                     width="182"
                                     height="34"
                                     alt="Пральний Майстер">
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <p class="s-desc"><?php pll_e('Та багатьма іншими...')?></p>
                    </div>
                </div>
            </div>
        </section>


</main><!-- #main -->

<?php
get_footer();
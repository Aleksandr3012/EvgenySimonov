<?php session_start();
$flash = $_SESSION['success'];
$time = $_SESSION['successTime'];
$qwiz = $_SESSION['qwiz'];
?><!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Evgeny Simonov</title>
		<meta name="description" content="о чем страница">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=no">
		<link rel="shortcut icon" type="image/png" href="img/favicon/favicon.png"><meta name="format-detection" content="telephone=no">
		<link rel="image_src" href="http://genrif.ru/assets/i/soc-logo.png">
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="content">
		<meta property="og:title" content="content">
		<meta property="og:description" content="content">
		<meta property="og:url" content="content">
		<meta property="og:locale" content="ru_RU">
		<meta property="og:image" content="path/to/image.jpg">
		<meta property="og:image:width" content="968">
		<meta property="og:image:height" content="504">
		<!-- Custom Browsers Color-->
		<meta name="theme-color" content="#3361d8">
		<link rel="stylesheet" href="libs/swiper/css/swiper.min.css"/>
		<link rel="stylesheet" href="libs/@fancyapps/fancybox/jquery.fancybox.min.css"/>
		<link rel="stylesheet" href="css/main.min.css"/>
	</head>
	<body class="whitePage"><!--[if lt IE 11]><p   class="browsehappy container">К сожалению, вы используете устаревший браузер. Пожалуйста, <a href="http://browsehappy.com/" target="_blank">обновите ваш браузер</a>, чтобы улучшить производительность, качество отображаемого материала и повысить безопасность.</p><![endif]-->
		<div class="main-wrapper">
			<!-- start header-->
			<header class="header section" id="header">
				<!-- start topLine-->
				<div class="topLine" id="topLine">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col d-flex pt-2"><a class="topLine__logo" href="/">
								<svg class="icon icon-logo ">
									<use xlink:href="img/svg/sprite.svg#logo"></use>
								</svg>
								<svg class="icon icon-logo-text ">
									<use xlink:href="img/svg/sprite.svg#logo-text"></use>
								</svg></a>
								<div class="d-none d-sm-block">
									<p>Агентство интернет&#8209;маркетинга и&nbsp;упаковки бизнеса</p>
								</div>
							</div>
							<div class="topLine__col col d-none d-lg-flex">
								<div class="messengers"><a class="messengers__item" href="https://wa.me/79630970990" target="_blank"><span class="messengers__whatsapp">
									<svg class="icon icon-whatsapp ">
										<use xlink:href="img/svg/sprite.svg#whatsapp"></use>
									</svg></span></a><a class="messengers__item viber-link" href="viber://add?number=79630970990" data-desktop="viber://chat?number=79630970990" target="_blank"><span class="messengers__viber">
									<svg class="icon icon-viber ">
										<use xlink:href="img/svg/sprite.svg#viber"></use>
									</svg></span></a><a class="messengers__item" href="https://t.me/evgeny_simonov" target="_blank"><span class="messengers__telegram">
									<svg class="icon icon-telegram ">
										<use xlink:href="img/svg/sprite.svg#telegram"></use>
									</svg></span></a>
								</div><a class="topLine__tel" href="tel:+79630970990">+7 (963) 097-09-90</a><a class="topLine__call btn link-modal" href="#modal-call">Перезвоните мне</a>
							</div>
							<div class="col d-lg-none"><a class="topLine__contact btn link-modal" href="#mob-menu">
								<svg class="icon icon-phone ">
									<use xlink:href="img/svg/sprite.svg#phone"></use>
								</svg></a>
							</div>
						</div>
					</div>
				</div>
				<!-- end topLine-->
			</header>
			<!-- end header-->
			<!-- start sThank-->
			<section class="sThank section" id="sThank">
				<div class="container">
					<div class="section-title text-center"><?php if(isset($flash)) { ?>
						<h2 class="strong"><?php echo $flash; ?>, спасибо, я&nbsp;принял вашу заявку!</h2><?php } else{	  ?>
						<h2 class="strong">Спасибо, я&nbsp;принял вашу заявку!</h2><?php	} ?><?php if(isset($time)) { ?>
						<div class="h6">
							Перезвоню вам в&nbsp;указанное время и&nbsp;отвечу на&nbsp;ваши вопросы.<br>Хорошего дня!</div><?php 	}  else if(isset($qwiz)) { ?>
						<div class="h6">
							Перезвоню вам в&nbsp;ближайшее время, задам дополнительные  вопросы по&nbsp;задаче и&nbsp;озвучу стоимость работ.<br>Хорошего дня!</div><?php } else{	  ?>
						<div class="h6">
							Перезвоню вам в&nbsp;ближайшее время и&nbsp;отвечу на&nbsp;ваши вопросы.<br>Хорошего дня!</div><?php	} ?>
						<div class="h6 text-primary">А&nbsp;пока вы&nbsp;ждете звонка, подписывайтесь на&nbsp;мой профиль&nbsp;в <a href="https://www.instagram.com/simonov__evgeny/">Instagram.</a> Вы&nbsp;узнаете больше обо мне и&nbsp;о&nbsp;нашей компании:</div><a class="section-title__imgWrap" href="undefined"><img class="res-i" src="img/@2x/photo.jpg" alt=""/></a><a class="section-title__inst" href="undefined">@simonov__evgeny</a><a class="section-title__subscribe btn btn-primary" href="undefined">Перейти и подписаться</a>
					</div>
				</div>
			</section>
			<!-- end sThank-->
			<footer class="footer block-with-lazy">
				<!-- start sAbout-->
				<div class="sAbout" id="sAbout">
					<div class="container">
						<div class="row">
							<div class="sAbout__leftCol col-lg-auto">
								<div class="sAbout__item">
									<svg class="icon icon-flag ">
										<use xlink:href="img/svg/sprite.svg#flag"></use>
									</svg>
									<p>Работаем с&nbsp;2015 года в&nbsp;интернет-маркетинге</p>
								</div>
								<div class="sAbout__item">
									<svg class="icon icon-rocket ">
										<use xlink:href="img/svg/sprite.svg#rocket"></use>
									</svg>
									<p>Находимся в&nbsp;Магнитогорске &mdash; работаем по&nbsp;всему миру</p>
								</div>
								<div class="sAbout__item">
									<svg class="icon icon-clock ">
										<use xlink:href="img/svg/sprite.svg#clock"></use>
									</svg>
									<p>с&nbsp;7:00 до&nbsp;18:00 по&nbsp;мск, без&nbsp;выходных и&nbsp;перерыва</p>
								</div>
							</div>
							<div class="sAbout__col col-lg"><a class="sAbout__tel" href="tel:+79630970990">+7 (963) 097-09-90</a><a class="sAbout__call btn link-modal" href="#modal-call">Перезвоните мне</a>
							</div>
						</div>
					</div>
				</div>
				<!-- end sAbout-->
				<div class="container">
					<div class="row justify-content-between">
						<div class="col d-lg-none">
							<div class="footer__write"><span>Напишите нам, мы онлайн:</span>
								<div class="messengers"><a class="messengers__item" href="https://wa.me/79630970990" target="_blank"><span class="messengers__whatsapp">
									<svg class="icon icon-whatsapp ">
										<use xlink:href="img/svg/sprite.svg#whatsapp"></use>
									</svg></span></a><a class="messengers__item viber-link" href="viber://add?number=79630970990" data-desktop="viber://chat?number=79630970990" target="_blank"><span class="messengers__viber">
									<svg class="icon icon-viber ">
										<use xlink:href="img/svg/sprite.svg#viber"></use>
									</svg></span></a><a class="messengers__item" href="https://t.me/evgeny_simonov" target="_blank"><span class="messengers__telegram">
									<svg class="icon icon-telegram ">
										<use xlink:href="img/svg/sprite.svg#telegram"></use>
									</svg></span></a>
								</div>
							</div>
							<div class="footer__soc"> 
								<p>Подписывайтесь в соц. сетях:</p>
								<div class="soc"><a class="soc__item vk" href="#" target="_blank">
									<svg class="icon icon-vk ">
										<use xlink:href="img/svg/sprite.svg#vk"></use>
									</svg><span>ВКонтакте</span></a><a class="soc__item inst" href="https://www.instagram.com/simonov__evgeny/" target="_blank">
									<svg class="icon icon-inst ">
										<use xlink:href="img/svg/sprite.svg#inst"></use>
									</svg><span>Instagram</span></a>
								</div>
							</div>
						</div>
						<div class="footer__col col-lg">
							<p>Юридический адрес и реквизиты:</p>
							<p class="text-light">455038, Челябинская область, г. Магнитогорск <br> ИП Симонов Евгений Анатольевич / ИНН 026701658200 / ОГРНИП 316745600179104</p><a class="footer__polite" href="#">Политика конфиденциальности</a>
							<p>© <span class="curentYear"></span> Все права защищены.</p>
						</div>
						<div class="col">
							<div class="d-none d-lg-block">
								<div class="footer__write"><span>Напишите нам, мы онлайн:</span>
									<div class="messengers"><a class="messengers__item" href="https://wa.me/79630970990" target="_blank"><span class="messengers__whatsapp">
										<svg class="icon icon-whatsapp ">
											<use xlink:href="img/svg/sprite.svg#whatsapp"></use>
										</svg></span></a><a class="messengers__item viber-link" href="viber://add?number=79630970990" data-desktop="viber://chat?number=79630970990" target="_blank"><span class="messengers__viber">
										<svg class="icon icon-viber ">
											<use xlink:href="img/svg/sprite.svg#viber"></use>
										</svg></span></a><a class="messengers__item" href="https://t.me/evgeny_simonov" target="_blank"><span class="messengers__telegram">
										<svg class="icon icon-telegram ">
											<use xlink:href="img/svg/sprite.svg#telegram"></use>
										</svg></span></a>
									</div>
								</div>
								<div class="footer__soc"> 
									<p>Подписывайтесь в соц. сетях:</p>
									<div class="soc"><a class="soc__item vk" href="#" target="_blank">
										<svg class="icon icon-vk ">
											<use xlink:href="img/svg/sprite.svg#vk"></use>
										</svg><span>ВКонтакте</span></a><a class="soc__item inst" href="https://www.instagram.com/simonov__evgeny/" target="_blank">
										<svg class="icon icon-inst ">
											<use xlink:href="img/svg/sprite.svg#inst"></use>
										</svg><span>Instagram</span></a>
									</div>
								</div>
							</div>
							<div class="footer__dev">Разработка сайта —<a class="footer__logo" href="/">
								<svg class="icon icon-logo ">
									<use xlink:href="img/svg/sprite.svg#logo"></use>
								</svg>
								<svg class="icon icon-logo-text ">
									<use xlink:href="img/svg/sprite.svg#logo-text"></use>
								</svg></a>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<div class="d-none">
			<div class="form-wrap modal-win modal-form" id="modal-call">
				<form>
					<input type="hidden" name="example-input-field"/>
					<input class="order" type="hidden" name="order" value="Заявка  с сайта"/>
					<input class="utm_source" type="hidden" name="utm_source"/>
					<input class="utm_term" type="hidden" name="utm_term"/>
					<input class="utm_medium" type="hidden" name="utm_medium"/>
					<input class="utm_campaign" type="hidden" name="utm_campaign"/>
					<div class="row text-center no-gutters">
						<div class="form-wrap__col col d-none d-md-block">
							<!-- picture-->
							<picture class="picture-bg"> 
								<source srcset="img/@2x/webp/photo-modal.webp" type="image/webp" media="(min-width:576px)"/>
								<source srcset="img/@1x/webp/photo-modal.webp" type="image/webp"/>
								<source srcset="img/@2x/photo-modal.jpg" type="image/jpg" media="(min-width:576px)"/>
								<source srcset="img/@1x/photo-modal.jpg" type="image/jpg"/><img class="object-fit-js" src="img/@2x/photo-modal.jpg" alt=""/>
							</picture>
							<!-- /picture-->
							<div class="form-wrap__nameWrap">
								<div class="form-wrap__name">Евгений Симонов
								</div>
								<div class="form-wrap__position">Руководитель агентства
								</div>
							</div>
						</div>
						<div class="form-wrap__form col">
							<div class="text-center">
								<div class="form-wrap__titleMain">Укажите ваши контакты и&nbsp;время для звонка
								</div>
								<div class="form-wrap__subtitle">Я&nbsp;перезвоню вам прямо сейчас или в&nbsp;другое рабочее время. Мы&nbsp;работаем ежедневно с&nbsp;07:00 до&nbsp;18:00 по&nbsp;МСК.
								</div>
							</div>
							<div class="form-wrap__input-wrap form-group">
								<label><span class="form-wrap__title">Введите телефон:</span><input class="form-wrap__input form-control" type="tel" placeholder="+7 (912) 345-67-89" name="tel" required="required"/>
								</label>
							</div>
							<!-- +e.input-wrap-->
							<div class="tabs">
								<div class="form-wrap__group">
									<div class="form-wrap__group-title">Когда вам позвонить:
									</div>
									<div class="tabs__caption">
										<div class="tabs__btn btn active">Сейчас</div>
										<div class="tabs__btn btn">По времени</div>
									</div>
								</div>
								<div class="tabs__wrap">
									<div class="tabs__content active"></div>
									<div class="tabs__content">
										<div class="form-wrap__input-wrap form-group"><input class="form-wrap__input form-control" type="text" placeholder="Например: 21 января в 14:00" name="datetime"/>
										</div>
										<!-- +e.input-wrap-->
									</div>
								</div>
							</div><input class="form-wrap__btn btn btn-primary" type="submit" value="Перезвоните мне"/>
							<div class="form-wrap__polite"><small class="form-wrap__text text-secondary">Нажимая на&nbsp;кнопку, вы&nbsp;даете согласие на&nbsp;обработку своих персональных данных и&nbsp;соглашаетесь с&nbsp;<a href="#">Политикой конфиденциальности</a></small>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="form-wrap modal-win modal-form" id="modal-call-2">
				<form>
					<input type="hidden" name="example-input-field"/>
					<input class="order" type="hidden" name="order" value="Заявка  с сайта"/>
					<input class="utm_source" type="hidden" name="utm_source"/>
					<input class="utm_term" type="hidden" name="utm_term"/>
					<input class="utm_medium" type="hidden" name="utm_medium"/>
					<input class="utm_campaign" type="hidden" name="utm_campaign"/>
					<div class="row text-center no-gutters">
						<div class="form-wrap__col col d-none d-md-block">
							<!-- picture-->
							<picture class="picture-bg"> 
								<source srcset="img/@2x/webp/photo-modal.webp" type="image/webp" media="(min-width:576px)"/>
								<source srcset="img/@1x/webp/photo-modal.webp" type="image/webp"/>
								<source srcset="img/@2x/photo-modal.jpg" type="image/jpg" media="(min-width:576px)"/>
								<source srcset="img/@1x/photo-modal.jpg" type="image/jpg"/><img class="object-fit-js" src="img/@2x/photo-modal.jpg" alt=""/>
							</picture>
							<!-- /picture-->
							<div class="form-wrap__nameWrap">
								<div class="form-wrap__name">Евгений Симонов
								</div>
								<div class="form-wrap__position">Руководитель агентства
								</div>
							</div>
						</div>
						<div class="form-wrap__form col">
							<div class="text-center">
								<div class="form-wrap__titleMain">Укажите ваши контакты и&nbsp;время для звонка
								</div>
								<div class="form-wrap__subtitle">Я&nbsp;перезвоню вам прямо сейчас или в&nbsp;другое рабочее время. Мы&nbsp;работаем ежедневно с&nbsp;07:00 до&nbsp;18:00 по&nbsp;МСК.
								</div>
							</div>
							<div class="form-wrap__input-wrap form-group">
								<label><span class="form-wrap__title">Введите телефон:</span><input class="form-wrap__input form-control" type="tel" placeholder="+7 (912) 345-67-89" name="tel" required="required"/>
								</label>
							</div>
							<!-- +e.input-wrap-->
							<div class="form-wrap__group-title">Когда вам позвонить:
							</div>
							<div class="form-wrap__input-wrap form-group"><input class="form-wrap__input form-control" type="text" placeholder="Например: 21 января в 14:00" name="datetime"/>
							</div>
							<!-- +e.input-wrap--><input class="form-wrap__btn btn btn-primary" type="submit" value="Перезвоните мне"/>
							<div class="form-wrap__polite"><small class="form-wrap__text text-secondary">Нажимая на&nbsp;кнопку, вы&nbsp;даете согласие на&nbsp;обработку своих персональных данных и&nbsp;соглашаетесь с&nbsp;<a href="#">Политикой конфиденциальности</a></small>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-win modal-win--mobMNU text-center" id="mob-menu"><a class="modal-win__tel h6" href="tel:+7(963)097-09-90">+7 (963) 097-09-90</a><a class="modal-win__call btn link-modal" href="#modal-call">Перезвоните мне</a>
				<p>Напишите нам, мы онлайн:</p>
				<div class="messengers"><a class="messengers__item" href="https://wa.me/79630970990" target="_blank"><span class="messengers__whatsapp">
					<svg class="icon icon-whatsapp ">
						<use xlink:href="img/svg/sprite.svg#whatsapp"></use>
					</svg></span></a><a class="messengers__item viber-link" href="viber://add?number=79630970990" data-desktop="viber://chat?number=79630970990" target="_blank"><span class="messengers__viber">
					<svg class="icon icon-viber ">
						<use xlink:href="img/svg/sprite.svg#viber"></use>
					</svg></span></a><a class="messengers__item" href="https://t.me/evgeny_simonov" target="_blank"><span class="messengers__telegram">
					<svg class="icon icon-telegram ">
						<use xlink:href="img/svg/sprite.svg#telegram"></use>
					</svg></span></a>
				</div>
			</div>
			<!-- #modal-call-->
		</div>
		<!-- modal-->
		<script src="js/lazy.js"></script>
		<script src="libs/jquery/jquery.min.js"></script>
		<!-- полифил для picture-->
		<script src="libs/picturefill/picturefill.min.js"></script>
		<!-- полифил для object-fit-->
		<script src="libs/object-fit-images/ofi.min.js"></script>
		<!-- modal libs-->
		<script src="libs/@fancyapps/fancybox/jquery.fancybox.min.js"></script>
		<!-- modal libs-->
		<!-- slider libs-->
		<script src="libs/swiper/js/swiper.min.js"></script>
		<!-- /slider libs-->
		<!-- for svg libs-->
		<script src="libs/svg4everybody/svg4everybody.min.js"></script>
		<!-- /for svg libs-->
		<script src="libs/inputmask/jquery.inputmask.min.js"></script>
		<script src="js/common.js"></script>
	</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<META NAME="keywords" CONTENT="">
	<META NAME="description" CONTENT="">
	<!--Добавить Фавиконки-->
	<!-- <link rel="icon" type="image/png" sizes="16x16" href="favicon.png"> -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<link rel="stylesheet" href="assets/css/main.css">
	<title>Document</title>
</head>
<body >


<?require_once('index.inc.php');?>


<div class="wrapper"> 
<!-- Секция хэдер начало -->
		<div class="sectionHeader">
			<header class="header">
				<div class="header__block1">
					<button class="btnMap" data-number='1' type="button">Найти магазин</button>
					<a class="header__Logo" href="<?=$_SERVER['REQUEST_URI'].'index.php'?>"><img src="assets/image/design/logo.png" alt="логотип интероптика"></a>
					<div class="clearfix"></div>
				</div>
				<nav class="menuMain">
					<ul class="menuMain__items">
						<li><a href="#" data-link='1'>Автомобилисту</a></li>
						<li>/</li>
						<li><a href="#" data-link='2'>Бренды</a></li>
						<li>/</li>
						<li><a href="#" data-link='3'>Зрение</a></li>
						<li>/</li>
						<li><a href="#" data-link='4'>Новости</a></li>
						<li>/</li>
						<li><a href="#" data-link='5'>Акции</a></li>
						<li>/</li>
						<li><a href="#" data-link='6'>О нас</a></li>
					</ul>
				</nav>
			</header>
		</div>
<!-- Секция хэдер конец -->

<div class="sectionContent">
	<main class="content">
		<div class="bannerSingle"><img src="assets/image/content/banner.jpg" alt="GUESS"></div>
		<div class="bannerDual">
			<div class="bannerDual__item"><img src="assets/image/content/img_1.jpg" alt=""></div>
			<div class="bannerDual__item"><img src="assets/image/content/img_2.jpg" alt=""></div>
		</div>
		<div class="sectionForm">
			<h1 class="sectionForm__title">ПОДАРОЧНЫЙ СЕРТИФИКАТ</h1>
			<div class="sectionForm__subtitles"><span>на 1000 руб.</span><br>ПРОСТО ЗАРЕГИСТРИРУЙСЯ</div>
			<form action="" method="post" class="gift">
				<div class="wrapData">
		            <label class="label" for="username">Ф.И.О <span class="star">*</span></label>
		            <input class="field must" id="username" tabindex="0" name="username" placeholder="обязательное поле">
		        </div>
				<div class="wrapData">
		            <label class="label" for="userphone">телефон <span class="star">*</span></label>
		            <input class="field must" id="userphone" tabindex="0" name="userphone"  placeholder="обязательное поле">
		        </div>
		        <div class="wrapData">
		            <label class="label" for="useremail">email <span class="star">*</span></label>
		            <input class="field must" id="useremail" tabindex="0" name="useremail"  placeholder="обязательное поле">
		        </div>
		        <div class="wrapData">
			        <div class="privacyPolicy">
				        <div class="checkbox  checkbox_1">
							<div class="check check_1">
								<label for="privacyPolicy_1"></label>
								<input name="privacyPolicy" type="checkbox" id="privacyPolicy_1">						
							</div>
							<span>Я согласен на <a class="confidentiality__text" href="./polzovatelskoe_soglashenie/">обработку персональных данных.</a></span>
						</div>
					</div>
				</div>


		        <div class="wrapBtnSend"></div>
			</form>
		</div>
		<div class="bannerDual"> 
			<div class="bannerDual__item"><img src="assets/image/content/img_2.jpg" alt=""></div>
			<div class="bannerDual__item"><img src="assets/image/content/img_1.jpg" alt=""></div>
		</div>
		<div class="textBlock" data-linkTo='1'>
			<div class="textBlock__ttl">АВТОМОБИЛИСТУ</div>
			<div class="textBlock__cnt">
				 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, labore at ullam. Eaque nesciunt labore, excepturi eum error ratione deleniti voluptatibus ex, aspernatur nisi nobis magni saepe, adipisci fugit eius.
			 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, labore at ullam. Eaque nesciunt labore, excepturi eum error ratione deleniti voluptatibus ex, aspernatur nisi nobis magni saepe, adipisci fugit eius.
			 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, labore at ullam. Eaque nesciunt labore, excepturi eum error ratione deleniti voluptatibus ex, aspernatur nisi nobis magni saepe, adipisci fugit eius.
			 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, labore at ullam. Eaque nesciunt labore, excepturi eum error ratione deleniti voluptatibus ex, aspernatur nisi nobis magni saepe, adipisci fugit eius.
			 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, labore at ullam. Eaque nesciunt labore, excepturi eum error ratione deleniti voluptatibus ex, aspernatur nisi nobis magni saepe, adipisci fugit eius.
			 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, labore at ullam. Eaque nesciunt labore, excepturi eum error ratione deleniti voluptatibus ex, aspernatur nisi nobis magni saepe, adipisci fugit eius.
			
			</div>
		</div>
		<div class="bannerDual"> 
			<div class="bannerDual__item"><img src="assets/image/content/img_2.jpg" alt=""></div>
			<div class="bannerDual__item"><img src="assets/image/content/img_1.jpg" alt=""></div>
		</div>
				<div class="textBlock" data-linkTo='2'>
			<div class="textBlock__ttl">Бренды</div>
			<div class="textBlock__cnt">
				 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, labore at ullam. Eaque nesciunt labore, excepturi eum error ratione deleniti voluptatibus ex, aspernatur nisi nobis magni saepe, adipisci fugit eius.
			 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, labore at ullam. Eaque nesciunt labore, excepturi eum error ratione deleniti voluptatibus ex, aspernatur nisi nobis magni saepe, adipisci fugit eius.
			 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, labore at ullam. Eaque nesciunt labore, excepturi eum error ratione deleniti voluptatibus ex, aspernatur nisi nobis magni saepe, adipisci fugit eius.
			 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, labore at ullam. Eaque nesciunt labore, excepturi eum error ratione deleniti voluptatibus ex, aspernatur nisi nobis magni saepe, adipisci fugit eius.
			 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, labore at ullam. Eaque nesciunt labore, excepturi eum error ratione deleniti voluptatibus ex, aspernatur nisi nobis magni saepe, adipisci fugit eius.
			 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, labore at ullam. Eaque nesciunt labore, excepturi eum error ratione deleniti voluptatibus ex, aspernatur nisi nobis magni saepe, adipisci fugit eius.
			
			</div>
		</div>



	</main>
</div>
<!-- Секция футер начало -->
<div class="sectionFooter">
    <footer class="footer">
 	<div class="footer__block">
 		<div class="socNet">
 			<div class="socNet__title">ПРИСОЕДИНЯЙТЕСЬ К НАМ</div>
 			<div class="socNet__link">
 				<a href="https://www.instagram.com/inter_optika" target="_blank"><img src="assets/image/design/ins.png" alt=""></a>
 				<a href="https://vk.com/interoptikalook" target="_blank"><img src="assets/image/design/vk.png" alt=""></a>
 			</div>
 		</div>
 		<ul class="footer__menu">
 			<li class="footer__menu__item"><a href="#" data-number='2'>КОНТАКТЫ</a></li>
 			<li class="footer__menu__item"><a href="#" data-link='6'>О НАС</a></li>
 			<li class="footer__menu__item"><a href="#" data-link='2'>БРЕНДЫ</a></li>
 			<li class="footer__menu__item"><a href="#" data-link='3'>ЗРЕНИЕ</a></li>
 			<li class="footer__menu__item"><a href="#" data-link='1'>АВТОМОБИЛИСТУ</a></li>
 		</ul>
 		<div class="clearfix"></div>
 		<div class="footer__contacts">
 			<a href="tel:+73912715563" class="footer__phone">тел: +7 (391) 2715563</a>
			<div class="footer__addr">Салон оптики в г.Красноярск ул. Парижской Коммуны 9</div>
 		</div>
 	</div>
 	<div class="footer__block">
 		<div class="wrapFooter__logo">
 			<a href="index.html" class="footer__logo"><img src="assets/image/design/logo2.png" alt="логотип интероптика"></a>
 		</div>
 	</div>
    </footer>
</div>
<div class="bgMW"></div>
<div class="mw__contacts">
	<div class="wrapMap" itemscope itemtype="http://schema.org/Organization">
		<button class="btnClose" type="button">Закрыть</button>
		<!-- <iframe src="https://yandex.ru/map-widget/v1/-/CBFKf-DA3C" width="100%" height="100%" frameborder="1" allowfullscreen="true"></iframe> -->
		<div class="blockContacts" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			<div class="blockContacts__city" itemprop="addressLocality">Красноярск</div>
			<div class="blockContacts__box1"><span itemprop="name">Интер оптика</span><br> <span itemprop="streetAddress">ул. Парижской Коммуны, д.9</span></div>
			<div class="blockContacts__box2">
				<span>тел: <a class="blockContacts__phone" href="tel:+73912715563" itemprop="telephone">+7  391 271 55 63</a></span><br>
				<span>email: <a href="mailto:krasinter@mail.ru" itemprop="email">krasinter@mail.ru</a></span>
			</div>
			<div class="blockContacts__box3">
				<b>График работы</b><br>
				<b>с 10:00 до 20:00</b><br>
				без выходных <br>
				и праздников
			</div>
			<ul class="blockContacts__box4">
				<li><a href="https://www.instagram.com/inter_optika" target="_blank" itemprop="sameAs">instagram.com/inter_optika</a></li>
				<li><a href="https://vk.com/interoptikalook" target="_blank" itemprop="sameAs">vk.com/interoptikalook</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="mw__pp">
	<div class="wrapBtnClose"><button class="btnClose_pp" type="button">Закрыть</button></div>
	<h2>Пользовательское соглашение</h2>
	<h4>Политика конфиденциальности</h4>

<p>Администрация Сайта стремится защищать и уважать Вашу частную жизнь. Настоящая политика конфиденциальности  определяет, что Сайт получает Ваши личные данные, в том числе контактные и персональные данные. Данные обрабатываются исключительно для исполнения Вашего поручения. Мы просим Вас внимательно прочитать нижеизложенное, чтобы в полной мере понять практику, касающуюся Ваших данных.</p>

<p>Сайт может собирать и обрабатывать данные о Пользователе, которые Пользователь предоставляет через сервисы Сайта. Использование данных осуществляется с Вашего разрешения.
Безопасность</p>
<p>Защита Ваших данных осуществляется с использованием физических, технических и административных мероприятий,  нацеленных на предотвращение риска потери, неправильного использования, несанкционированного доступа, нарушения  конфиденциальности и изменения данных.</p>
<p>Меры обеспечения безопасности включают в себя межсетевую защиту и шифрование данных, контроль физического доступа к центрам обработки данных, а также контроль полномочий на доступ к данным.</p>
<p>Хотя передача информации через Интернет никогда не является полностью безопасной, мы, тем не менее, делаем все  возможное, чтобы защитить Ваши личные данные.</p>
<h4>Персональные данные</h4>
<p>Сайт принимает все разумные меры по защите персональных данных Пользователей и соблюдает права субъектов  персональных данных, установленные действующим законодательством Российской Федерации.</p>
<p>Оформление заказа на Сайте и предоставление своих персональных данных Пользователем администрации Сайта, выражают согласие Пользователя на их обработку (понятие «обработка персональных данных» — согласно п.3 ст.3 ФЗ 152  «О персональных данных»).</p>
<p>Обработка персональных данных осуществляется в целях исполнения Договора (Заказа Пользователя), исключительно на территории Российской Федерации, с соблюдением действующего законодательства РФ. Согласие дается на срок, определенный сроком исполнения Договора. В случае отзыва согласия на использование и обработку персональных данных Пользователя, Пользователь уведомляет об этом Администрацию Сайта письменно или по электронной почте.  После получения данного уведомления Администрацией Сайта предоставление Пользователю услуг прекращается.</p>
<p>Сайт не имеет статуса оператора персональных данных. Персональные данные Пользователя не передаются каким-либо  третьим лицам, за исключением случаев, прямо предусмотренных настоящей Политикой конфиденциальности.
Изменения политики конфиденциальности</p>
<p>Любые изменения политики конфиденциальности в будущем будут размещены на этой странице. При необходимости вам будет выслано уведомление по электронной почте.</p>
<h4>Пользовательское соглашение об использовании сайта в сети Интернет</h4>
<p>Настоящее пользовательское соглашение (далее – «Соглашение») регулирует порядок работы сайта, определяет  условия использования Пользователями контента, материалов и сервисов настоящего сайта (далее — «Сайт»). Настоящее  Соглашение является публичной офертой в соответствии с законодательством РФ. Получая доступ к контенту,  материалам или сервисам Сайта, Пользователь считается присоединившимся к настоящему Соглашению.</p>
<h4>Условия использования сайта:</h4>
<ol>
	<li>Использование контента, любых материалов и сервисов Сайта регулируется нормами действующего  законодательства Российской Федерации. Контент, материалы и сервисы можно использовать только исключительно в законных целях.</li>
	<li>Пользователь вправе знакомиться с материалами сайта, заказывать и приобретать товары и/или услуги предлагаемые на Сайте.</li>
	<li>При наличии технической возможности Пользователь может иметь доступ к платным сервисам и разделам Сайта.</li>
	<li>Администратор Сайта вправе в любое время в одностороннем порядке изменять контент, содержимое, любые  материалы и данные сайта, а также изменять условия настоящего Соглашения и порядок предоставления доступа к сайту.  Такие изменения вступают в силу с момента размещения новой версии Соглашения на сайте или обновления сайта. При  несогласии Пользователя с внесенными изменениями он обязан отказаться от доступа к Сайту, прекратить использование  контента, материалов и сервисов Сайта.</li>
	<li>Все возможные споры, вытекающие из настоящего Соглашения или связанные с ним, подлежат разрешению в  соответствии с действующим законодательством Российской Федерации.</li>
	<li>Все данные, размещенные или размещаемые на настоящем Сайте, находятся на ресурсах на территории РФ.</li>
</ol>
<h4>Обязательства:</h4>
<ol>
	<li>Пользователь соглашается не предпринимать действий, которые могут рассматриваться как нарушающие  российское законодательство или нормы международного права, в том числе в сфере авторского права, интеллектуальной  обственности, а также любых действий, которые приводят или могут привести к нарушению нормальной работы Сайта и сервисов Сайта.</li>
	<li>Использование материалов Сайта без согласия правообладателя не допускается. Для правомерного использования  материалов Сайта необходимо согласие администратора сайта или правообладателя материалов.</li>
	<li>При использовании материалов Сайта, включая охраняемые авторские произведения, ссылка на Сайт обязательна.</li>
	<li>При наличии технической возможности, Пользователь может оставлять комментарии и иные записи на Сайте.  Пользователь соглашается, что комментарии или иные записи не нарушают законодательства России, не являются  экстремистскими, не нарушают общепринятых норм морали и нравственности.</li>
	<li>Администратор Сайта не несет ответственности за посещение и использование Пользователем внешних ресурсов,  ссылки на которые могут содержаться на Сайте.</li>
	<li>Пользователь согласен с тем, что Администрация Сайта не несет ответственности и не имеет прямых или  косвенных обязательств перед Пользователем в связи с любыми возможными или возникшими потерями или убытками,  связанными с любым содержанием Сайта, товарами или услугами, доступными на Сайте или полученными через внешние  сайты или ресурсы, либо иные контакты Пользователя, в которые он вступил, используя размещенную на Сайте информацию или ссылки на внешние ресурсы.</li>
	<li>Пользователь принимает положение о том, что все материалы и сервисы Сайта или любая их часть могут  сопровождаться рекламой. Пользователь согласен с тем, что Администрация Сайта не несет какой-либо ответственности  и не имеет каких-либо обязательств в связи с такой рекламой.</li>
</ol>
<p>Пользователь, используя ресурсы Сайта, подтверждает, что ознакомлен со всеми пунктами настоящего Соглашения и  безусловно принимает их.</p>
</div>
<!-- Секция футер конец -->

<button class="goTop" type="button"><img src="assets/image/design/go_top.png" alt="наверх"></button>
<!-- @import "footer.html" -->


 </div>
	<script src="plug_ins/jQuery3.3.1/jQuery3.3.1.js"></script>
	<script src="plug_ins/ofi.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

<!-- @import "foot.html" -->



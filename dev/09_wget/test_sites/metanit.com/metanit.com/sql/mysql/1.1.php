<!DOCTYPE html>
<html >
<head>
<title>MySQL | Введение</title>
<meta charset="utf-8" />
<meta name="description" content="Что такое СУБД MySQL, ее основные особенности, история развития, установка и настройка сервера базы данных">
<meta name="viewport" content="width=device-width">
<link href='//metanit.com/style35.css' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="container">

<div id="header">
<div id="logo">
<a class="logoTitle" href="/" title="На главную">METANIT.COM</a>
<div class="logoDefinition">Сайт о программировании</div> 
</div>

<div class="socbtns">
<ul>
<li><a title="Посмотреть меню" rel="nofollow" class="fa fa-lg fa-bars"></a></li>
<li><a href="//metanit.com/donations.php" title="Помощь сайту" rel="nofollow" class="fa fa-lg fa-usd"></a></li>
<li><a href="https://vk.com/metanit" title="Группа в ВКонтакте" rel="nofollow" class="fa fa-lg fa-vk"></a></li>
<li><a href="https://twitter.com/Eugene225" title="Твиттер" rel="nofollow" class="fa fa-lg fa-twitter"></a></li>
<li><a href="https://www.facebook.com/metanitcom"  rel="nofollow" class="fa fa-lg fa-facebook"></a></li>
<li><a href="https://www.youtube.com/user/Eugene22584/" title="Канал сайта на Youtube" rel="nofollow" class="fa fa-lg fa-youtube"></a></li>
<li><a href="https://t.me/metanit" title="Телеграмм" class="fa fa-lg fa-tel"></a></li>
<li><i id="toggle-theme" class="fa fa-lg fa-adjust"></i></li>
</ul>
</div>

<div id="search" class="transp">
<form action="https://www.google.ru" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-3716042175333627:1096498938" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" />
    <input type="submit" name="sa" value="Найти" />
  </div>
</form>
</div>
<div class="icon-vk"></div>
<div id="magnifying-glass"></div>

<div class="menuButton" id="menuButton">
	<span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</div>

<div id="menu" class="menu">
<ul class="mainmenu">
   <li><a href="//metanit.com/news/">Новости</a></li>
   <li><a href="//metanit.com/sharp/">C#</a></li>
   <li><a href="//metanit.com/java/">Java</a></li>
   <li><a href="//metanit.com/web/">WEB</a></li>
   <li><a href="//metanit.com/python/">Python</a></li>
   <li><a href="//metanit.com/cpp/">C/C++</a></li>
   <li><a href="//metanit.com/sql/">SQL</a></li>
   <li><a href="//metanit.com/nosql/mongodb/">MongoDB</a></li>
   <li><a href="//metanit.com/go/">Go</a></li>
   <li><a href="//metanit.com/visualbasic/tutorial/">VB.NET</a></li>
   <li><a href="//metanit.com/swift/tutorial/">Swift</a></li>
   <li><a href="//metanit.com/kotlin/">Kotlin</a></li>
   <li><a href="//metanit.com/dart/">Dart</a></li>
   <li><a href="//metanit.com/php/">PHP</a></li>
   <li><a href="//metanit.com/rust/">Rust</a></li>
   <li><a href="//metanit.com/f/">F#</a></li>
</ul>
</div>
</div>
<div id="content_right"> 
<div id="content_right_inner"> 
<div id="content_center"> 
<div id="menC" class="menC">
<div class="articleText" id="articleText">
<h1>Введение в MySQL</h1><h2>Что такое MySQL. Установка сервера</h2><div class="date">Последнее обновление: 03.06.2021</div>

<div class="socBlock">
<div class="share soctop">
<ul>
<li><a title="Поделиться в Вконтакте" rel="nofollow" class="fa fa-lg fa-vk"></a></li>
<li><a title="Поделиться в Одноклассниках" rel="nofollow" class="fa fa-lg fa-odnoklassniki"></a></li>
<li><a title="Поделиться в Твиттере" rel="nofollow" class="fa fa-lg fa-twitter"></a></li>
<li><a  rel="nofollow" class="fa fa-lg fa-facebook"></a></li>
</ul>
</div>

</div>

<div style="margin-top:23px;margin-left:5px;">
<style>
.footer-adaptive { width: 300px; height: 250px; }
@media(min-width: 480px) { .footer-adaptive { width: 468px; height: 60px; } }
@media(min-width: 760px) { .footer-adaptive { width: 728px; height: 90px;  } }
@media(min-width: 1000px) { .footer-adaptive { width: 468px; height: 60px;  } }
@media(min-width: 1122px) { .footer-adaptive{ width: 728px; height: 90px;} }
@media(min-width: 1400px) { .footer-adaptive { width: 970px; height: 90px;} }
</style>
<!-- footer_adaptive -->
<ins class="adsbygoogle footer-adaptive"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="9659512088"></ins>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<p>MySQL представляет систему управления реляционными базами данных (СУБД). На сегодняшний день это одна из самых популярных систем управления базами данных.</p>
<p>Изначальным разработчиком данной СУБД была шведская компания MySQL AB. В 1995 году она выпустила первый релиз MySQL. 
В 2008 году компания MySQL AB была куплена компанией Sun Microsystems, а в 2010 году уже компания Oracle поглотила Sun и 
тем самым приобрела права на торговую марку MySQL. Поэтому MySQL на сегодняшний день развивается под эгидой Oracle.</p>
<p>Текущей актуальной версией СУДБ является версия 8.0, которая вышла в январе 2018 года, но для которой постоянно выходят подверсии.</p>
<p>MySQL обладает кроссплатформенностью, имеются дистрибутивы под самые различные ОС, в том числе наиболее популярные версии Linux, Windows, MacOS.</p>
<p>Официальный сайт проекта: <a href="https://www.mysql.com/" rel="nofollow">https://www.mysql.com/</a>.</p>
<h3>Установка MySQL</h3>
<p>Для установки MySQL загрузим дистрибутив по адресу 
<a href="http://dev.mysql.com/downloads/mysql/" rel="nofollow">http://dev.mysql.com/downloads/mysql/</a> и выберем нужную версию.</p>
<img src="./pics/1.1.png" alt="Загрузка MySQL" />
<p>После выбора версии нажмем на кнопку "Go to Download Page", и нас перенаправит на страницу загрузки дистрибутива. Здесь можно выбрать либо онлайн-загрузчик, либо полный пакет инсталятора. Можно выбрать любой:</p>
<img src="./pics/1.2.png" alt="Загрузка и установка MySQL" />
<p>Дальше может быть предложено залогиниться с помощью учетной записи Oracle. Можно пропустить всю эту байду и без какого-либо логина нажать на ссылку 
"No thanks, just start my download.", и начнется загрузка:</p>
<img src="./pics/1.28.png" alt="Загрузка и установка MySQL и Oracle" />
<p>Сначала будет предложено выбрать тип установки. Выберем тип <span class="b">Developer Default</span>, которого вполне хватит для базовых нужд, и нажмем на кнопку Next:</p>
<img src="./pics/1.4.png" alt="Тип установки MySQL" />
<p>Затем на этапе установки инсталлятор отобразит весь список устанавливаемых компонентов. У меня он выглядит так:</p>
<img src="./pics/1.6.png" alt="Установка компонентов и сервера MySQL" />
<p>Чтобы выполнить установку всех компонентов, нажмем кнопку Execute.</p>
<p>После того, как все компоненты будут установлены, нажмем кнопку Next.</p>
<img src="./pics/1.5.png" alt="Настройка компонентов при установке MySQL" />
<p>Далее отобразится окно с перечнем продуктов, готовых к конфигурации</p>
<img src="./pics/1.7.png"  alt="Конфигурация MySQL" />
<p>Нажмем на кнопку Next и далее будет предложено установить ряд конфигурационных настроек сервера MySQL. В частности, здесь мы видим, что для 
подключения будет применяться протокол TCP/IP и порт 3306. Оставим все эти настройки соединения и порта по умолчанию:</p>
<img src="./pics/1.9.png" alt="Type and Networking in MySQL" />
<p>На следующем шаге будет предложено установить метод аутентификации. Оставим настройки по умолчанию:</p>
<img src="./pics/1.10.png" alt="Authentication Method in MySQL" />
<p>Затем на следующем окне прогаммы установки укажем какой-нибудь пароль, и запомним его, так как он потом потребуется при подключении к серверу 
MySQL:</p>
<img src="./pics/1.11.png" alt="Установка пароля в MySQL" />
<p>Следующий набор конфигураций, который также оставим по умолчанию, указывает, что сервер будет запускаться в качестве службы Windows при запуске операционной системы:</p>
<img src="./pics/1.12.png" alt="MySQL Server as Windows Service" />

<p>И на следующем экране необходимо применить все ранее установленные конфигурационные настройки, нажав на кнопку Execute:</p>
<img src="./pics/1.14.png" alt="Apply configuration MySQL" />
<p>После применения конфигурационных настроек сервер MySQL будет полностью установлен и сконфигурирован, нажмем на кнопку "Finish".
<p>Далее опять отобразится окно с перечнем продуктов, готовых к конфигурации. Нажмем на кнопку "Next"</p>
<img src="./pics/1.13.png"  alt="Конфигурация MySQL" />
<p>И нам будет предложено установить конфигурацию для второго продукта - <span class="b">MySQL Router</span>:</p>
<img src="./pics/1.8.png" alt="MySQL Router Configuration" />
<p>Ничего не будем менять, оставив все настройки по умолчанию, и нажмем на кнопку "Finish".</p>
<p>Далее опять отобразится окно с перечнем продуктов, готовых к конфигурации. Нажмем на кнопку "Next"</p>
<img src="./pics/1.3.png"  alt="Конфигурация MySQL Samples and Examples" />
<p>И далее нам будет предложено установить конфигурацию для третьего родукта - <span class="b">Samples and Examples</span> (Примеры работы с MySQL). 
В частности, надо будет указать экземпляр сервера MySQL для получения примеров для работы с MySql. Установленный экземпляр будет автоматически отмечен в списке. 
Кроме того, предлагает протестировать подключения. В поле <span class="b">Password</span> введем ранее указанный пароль и нажмем на кнопку <span class="b">Check</span>:</p>
<img src="./pics/1.29.png"  alt="Тестирование подключения MySQL" />
<p>Пи успешном подлючении к MySQL отобразится выделенная зеленым цветом надпись <span class="b">Connection succeeded</span>. Нажмем на кнопку Next.</p>
<p>И на последнем окне необходимо будет применить конфигурацию для </p>
<img src="./pics/1.30.png"  alt="MySQL Samples and Examples" />
<p>Далее мы опять увидим окно с перечнем установленных и сконфигурированных продуктов. И нажмем на кнопку Next.</p>
<img src="./pics/1.31.png"  alt="MySQL Instalation" />
<p>На последнем экране мы увидим два отмеченных поля: <span class="b">Start MySQL Workbench after setup</span> и <span class="b">Start MySQL Shell after setup</span>. 
Эти поля позволяют запустить графический и консольный клиенты для управления сервером MySQL. Снимем отметки с этих полей, поскольку пока мы не собираемся запускать соответствующие программы.</p>
<img src="./pics/1.32.png"  alt="Finish MySQL Instalation" />
<p>И нажмем на кнопку Finish. Все! MySQL полностью установлен, сконфигурирован и запущен. И мы сможем с ним работать.</p>
<div style="margin-top:25px;clear:both;">
<style>
.metanit-rect { width: 300px; height: 250px; }
@media(min-width: 500px) { .metanit-rect { width: 336px; height: 280px; } }
@media(min-width: 760px) { .metanit-rect { width: 728px; height: 90px;  } }
@media(min-width: 1000px) { .metanit-rect { width: 336px; height: 280px;  } }
@media(min-width: 1122px) { .metanit-rect{ width: 728px; height: 90px;} }
@media(min-width: 1400px) { .metanit-rect{ width: 970px; height: 90px;} }
</style>
<!-- metanit_rect -->
<ins class="adsbygoogle metanit-rect"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="3119477283"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>


<div class="nav"><p><a href="./">Назад</a><a href="./">Содержание</a><a href="./1.2.php">Вперед</a></p></div></div>
<div class="socBlock">
<div class="share socbottom">
<ul>
<li><a title="Поделиться в Вконтакте" rel="nofollow" class="fa fa-lg fa-vk"></a></li>
<li><a title="Поделиться в Одноклассниках" rel="nofollow" class="fa fa-lg fa-odnoklassniki"></a></li>
<li><a title="Поделиться в Твиттере" rel="nofollow" class="fa fa-lg fa-twitter"></a></li>
<li><a rel="nofollow" class="fa fa-lg fa-facebook"></a></li>
</ul>
</div>
</div>

<style>
.commentABl { margin: 25px 0px 15px 0px;}
@media(min-width: 860px) { .commentABl { margin: 35px 10px 15px 15px;  } }
</style>
<div class="commentABl" style="clear:both;">
<ins class="adsbygoogle metanit-rect"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="3119477283"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<script>const ap = 1845270558;</script>
<script async type='text/javascript' src='//metanit.com/js/lisrc4.js'></script>

<div id="disqus_thread" style="margin-left:8px;margin-right:8px;clear:both;"></div>
<script type="text/javascript">
var disqus_shortname = 'metanitcom';
(function() {
var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
})();
</script>

</div>
</div> 
<div id="menR" class="menR">
<style>
.meta-vert { width: 300px; height: 250px; }
@media(min-width: 500px) { .meta-vert { width: 336px; height: 280px; } }
@media(min-width: 1000px) { .meta-vert { width: 160px; height: 600px; } }
</style>
<!-- meta_vert -->
<ins class="adsbygoogle meta-vert"
     style="display:inline-block"
     data-ad-client="ca-pub-3716042175333627"
     data-ad-slot="4596210485"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<style>
.dn {font-size:12.5px;margin:3px;}
.dh{font-weight:bold;margin-left:2px;}
</style>
<div class="dn">
<div class="dh">Помощь сайту</div>
<div class="dh">YooMoney</div>
<ul>
<li>410011174743222</li>
</ul>
<div class="dh">Перевод на карту</div>
<ul>
<li>Номер карты: 4048415020898850</li>
<li>Номер карты: 4890494751804113</li>
</ul>
</div>

</div>
</div>
</div> 
<div class="menT" id="menT"><ul id="browser" class="filetree"> 
	<li class="closed"><span class="folder">Глава 1. Введение в MySQL</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/mysql/1.1.php">Что такое MySQL. Установка сервера</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/1.2.php">Консольный клиент MySQL Command Line Client</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/1.4.php">Консольный клиент MySQL Shell</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/1.3.php">Графический клиент MySQL Workbench</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Определение структуры данных</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/mysql/2.1.php">Создание и удаление базы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/2.2.php">Создание и удаление таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/2.3.php">Типы данных MySQL</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/2.4.php">Атрибуты столбцов и таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/2.5.php">Внешние ключи FOREIGN KEY</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/2.6.php">Изменение таблиц и столбцов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Основные операции с данными</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/mysql/3.1.php">Добавление данных. Команда INSERT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/3.2.php">Выборка данных. Команда SELECT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/3.3.php">Фильтрация данных. Оператор WHERE</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/3.4.php">Обновление данных. Команда UPDATE</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/3.5.php">Удаление данных. Команда DELETE</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Запросы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.1.php">Выборка уникальных значений. Оператор DISTINCT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.2.php">Операторы фильтрации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.3.php">Сортировка. ORDER BY</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.4.php">Получение диапазона строк. Оператор LIMIT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.5.php">Агрегатные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.6.php">Группировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.7.php">Подзапросы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.8.php">Подзапросы в основных командах SQL</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.9.php">Оператор EXISTS</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Соединение таблиц</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/mysql/5.1.php">Неявное соединение таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/5.2.php">Inner Join</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/5.3.php">Outer Join</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/5.4.php">UNION</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Встроенные функции</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/mysql/6.1.php">Функции для работы со строками</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/6.2.php">Функции для работы с числами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/6.3.php">Функции для работы с датами и временем</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/6.4.php">Функции CASE, IF, IFNULL, COALESCE</a></span></li>
		</ul>
	</li>
</ul></div>
<div id="footer">

<div class="bootomLinks">
<a href="https://vk.com/metanit" title="Присоединиться к группе вконтакте" rel="nofollow">
Вконтакте</a>|
<a href="https://twitter.com/Eugene225" title="Подписаться на твит-ленту" rel="nofollow">
Twitter</a>|
<a href="https://www.youtube.com/user/Eugene22584/" title="Подписаться на канал на youtube" rel="nofollow">
Канал сайта на youtube</a>|
<a href="//metanit.com/donations.php" rel="nofollow">Помощь сайту</a>
</div>
<p>Контакты для связи: metanit22@mail.ru</p>
<p>Copyright &copy; metanit.com, 2012-2022. Все права защищены.</p>
</div>
</div>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<script>
const original = { open: XMLHttpRequest.prototype.open};
XMLHttpRequest.prototype.open = function (method, url) {
 
  if(url.includes("tempest.services.disqus.com")) return false;
  return original.open.apply(this, arguments);
};
</script>
<script type='text/javascript' src='//metanit.com/js/jquery.min.js'></script>
<script type='text/javascript' src='//metanit.com/js/jquery.treeview.min.js'></script>
<script type='text/javascript' src='//metanit.com/js/syntax12.js'></script>
<script type='text/javascript'>SyntaxHighlighter.all();</script>
<script>
$(function() { 
	$("#menuButton").on('click', function(){
          $(this).toggleClass('menu-opened');
          var mainmenu = $('.mainmenu');
          if (mainmenu.hasClass('open')) { 
            mainmenu.removeClass('open');
          }
          else {
            mainmenu.addClass('open');
          }
        });
	$('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open');
			  $(this).children('span').removeClass('open');
			  $(this).children('span').addClass('close');
            }
            else {
              $(this).siblings('ul').addClass('open');
			  $(this).children('span').removeClass('close');
			  $(this).children('span').addClass('open');
            }
          });
  $("#toggle-theme").on("click", function() {
		if(document.documentElement.hasAttribute("theme")){
			document.documentElement.removeAttribute("theme");
			document.cookie="theme=1;expires=Mon, 19 Feb 2001 12:00:00 UTC;path=/;";
		}
		else{
			document.documentElement.setAttribute("theme", "dark");
			var expire = new Date();
			expire.setHours(expire.getHours() + 7);
			document.cookie="theme=1;expires=" + expire.toUTCString() + ";path=/;";
		}
	});
	$('#magnifying-glass').on('click', function() {
            if ($('#search').hasClass('transp')) {
              $('#search').removeClass('transp').show();
            }
            else {
              $('#search').addClass('transp').hide();
            }
          });
		  
	$('#browser').treeview();$('#navigation').treeview({persist: 'location',collapsed: true, unique: true});
	
	$("li:contains('Глава 1.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 1.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава .')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава .')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
	var url = "//metanit.com" + location.pathname;
	
	$('.file a[href="' + url + '"]').addClass('aMItem').parent().addClass('aMItem').closest('li.collapsable').find('span.folder').addClass('aMItem');
	
	$(".fa-bars").on('click', function() {
		$(".menT").toggleClass("menTOpened");
		$("#content_right_inner").toggleClass("contentRightInnerOpened");
	});

    $('#jma').on('click', function() {
            window.open("https://c"+"lck.r" +"u/en89y").focus();
          });
    $('#jmw').on('click', function() {
            window.open("https://c"+"lck.r"+"u/en89V").focus();
          });
	$(".share .fa-vk").attr('onclick','window.open("http://vk.com/share.php?url=' + window.location.href+'","Поделиться в ВКОНТАКТЕ","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
	$(".share .fa-odnoklassniki").attr('onclick','window.open("https://connect.ok.ru/offer?url=' + window.location.href+'","Поделиться в Одноклассниках","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
	$(".share .fa-twitter").attr('onclick','window.open("http://twitter.com/share?url=' + window.location.href+'","Поделиться в Твиттере","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
	$(".share .fa-facebook").attr('onclick','window.open("http://www.facebook.com/sharer.php?u=' + window.location.href +'","Поделиться","width=420,height=230,resizable=yes,scrollbars=yes,status=yes")');
});
</script>
<script>
window.onload= function(){
	setMenC();
};
window.onresize= function(){
	setMenC();
};

function setMenC(){
	if(window.innerWidth >859){
			
		var h = document.getElementById("articleText").clientHeight;
		document.getElementById("menT").style.maxHeight=h + "px";
	}
}
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-35780297-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-35780297-1');
</script>

<script async defer type="text/javascript" src="https://www.google.ru/coop/cse/brand?form=cse-search-box&amp;lang=ru"></script>
</body>
</html>
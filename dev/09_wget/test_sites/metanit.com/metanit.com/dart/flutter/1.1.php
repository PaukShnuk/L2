<!DOCTYPE html>
<html >
<head>
<title>Flutter | Введение в Flutter</title>
<meta charset="utf-8" />
<meta name="description" content="Основные особенности фреймворка Flutter, для чего он нужен, создание кроссплатформенных графических приложений, установка на Windows и MacOS">
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
<h1>Введение в Flutter</h1><h2>Что такое Flutter. Установка</h2><div class="date">Последнее обновление: 10.10.2021</div>

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

<p>Flutter представляет фреймворк от компании Google, который позволяет создавать кроссплатформенные приложения, которые могут использовать однин и тот же код. Спектр платформ широк - это веб-приложения, 
мобильные приложения под Android и iOS, графические приложения под настольные операционные системы Windows, MacOS, Linux, а также веб-приложения.</p>
<p>Особенностью работы с Flutter является то, что приложения под разные платформы могут иметь один и тот же код. Поскольку используемые платформы не эквиваленты, то какие-то отдельные части кода необходимо настраивать под определенную ОС, например, под iOS, но тем не менее 
большая часть кода может совпадать. Это позволяет разработчикам существенно сэкономить время и ресурсы на создание приложений под все поддерживаемые платформы.</p>
<p>В качестве языка разработки используется язык программирования Dart.</p> 
<p>При постороении приложения Flutter транслирует код на Dart в нативный код приложения с помощью Dart AOT (компиляция приложения перед его запуском), которое можно запускать на Android или iOS или 
другой платформе. Однако при разработке приложения для ее ускорения Flutter использует JIT (компиляция приложения в процессе его запуска).</p>
<p>Надо отметить, что Flutter относительно новый фреймворк. Хотя прототип фреймворка появился еще в 2015 году, а первая альфа-версия вышла в мае 2017 
года, но первый стабильный релиз - Flutter 1.0 увидел свет только в декабре 2018 года. Тем не менее регулярно с небольшой периодичностью ыходят подверсии, 
добавляя новую функциональноть и исправляя имеющиеся баги. На момент публикации данной статьи последней стабильной версией является 
Flutter 2, которая вышла в марте 2021 года, но постоянно выходят новые подверсии, которые также привносят нововведения во фреймворк (например, на момент 
написания данной статьи последней подверсией является 2.5).</p>
<p>Что используется для разрабоки под Flutter? Для для написания кода программы можно использовать любой полюбившийся текстовый редактор и затем 
с помощью утилит командной строки из Flutter SDK компилировать приложение. Однако для таких сред как Android Studio и IntelliJ IDEA, а также текстового редактора Visual Studio Code компания Google выпустила специальные 
плагины, которые позволяют упростить разработку. Поэтому зачастую для разработки под Flutter используются именно Android Studio и IntelliJ IDEA.</p>
<h3>Установка Flutter SDK</h3>
<p>На странице <a href="https://flutter.dev/docs/get-started/install/" rel="nofollow">https://flutter.dev/docs/get-started/install/</a> можно найти ссылки на на загрузку SDK для разных операционных систем. Рассмотрим, 
как установить Flutter SDK на Windows и MacOS.</p>
<h4>Установка Flutter на Windows</h4>
<p>Чтобы начать разрабатывать приложения с помощью Flutter, необходимо установить SDK. Но прежде всего следует отметить, что для работы Flutter SDK 
в Windows в системе должен быть установлен Git for Windows, который можно найти по адресу <a href="https://git-scm.com/download/win" rel="nofollow">https://git-scm.com/download/win</a>.</p>
<p>Также Flutter использует Android SDK. Самый легкий способ установить Android SDK - сразу установить <a href="https://developer.android.com/studio#downloads" rel="nofollow">Android Studio</a>, вместе с которой будут установлены вс необходимые инструменты.</p>
<p>Непосредственно для установки Flutter SDK перейдем на страницу <a href="https://flutter.dev/docs/get-started/install/windows" rel="nofollow">https://flutter.dev/docs/get-started/install/windows</a>. 
На этой странице найдем в секции <span class="b">Get the Flutter SDK</span> ссылку на zip-архив с Flutter SDK и загрузим его:</p>
<img src="./pics/1.1.png" alt="Установка Flutter SDK на Windows" />
<p>Далее распакуем архив, например, на диске С. Например, в моем случае архив распакован в папку <span class="b">C:\flutter</span>.</p>

<p>В распакованном архиве в папке <span class="b">flutter\bin</span> мы найдем инструменты для компиляции приложения. Например, 
в моем случае полный путь к этой папке <span class="b">C:\flutter\bin</span>:</p>
<img src="./pics/1.2.png" alt="Установка Flutter SDK на Windows" />
<p>Если мы работаем в Windows, то для добавления переменной среды через поиск найдем найдем параметр "Изменение переменных среды текущего пользователя". Для этого введем в поле поиска "Изменение переменных":</p>
<img src="./pics/1.32.png" alt="Добавление пути к Flutter SDK в Path на Windows" />
<p>Выберем пункт "Изменение переменных среды текущего пользователя". Затем нам откроется окно, где мы можем увидеть все переменные среды. (Также можно перейти через Параметры и пункт <span class="b">Система -&gt;Дополнительные параметры системы -&gt;Переменные среды</span>)</p>
<p>Здесь нам надо изменить переменную Path, добавив путь к папке bin в Flutter SDK. Для этого выберем пункт <span clas="b">Path</span> и нажмем на 
кнопку "Изменить":</p>
<img src="./pics/1.3.png" alt="Добавление пути к Flutter SDK в Path на Windows" />
<p>Далее нажмем на кнопку "Создать" и появившееся поле ввода введем путь к папке bin из Flutter SDK:</p>
<img src="./pics/1.4.png" alt="Настройка Flutter SDK в Windows" />

<p>Чтобы проверить корректность установки Flutter, откроем командную строку и введем команду <span class="b">flutter</span>. Если Windows распознает 
ее, и последует вывод некоторой справочной информации (например, как использовать те или иные команды в консоли), то flutter установлен и настроен.</p>
<img src="./pics/1.5.png" alt="Конфигурация Flutter SDK в Windows" />

<p>В качестве альтернативы установить Flutter SDK можно через Git. Для этого необходимо в командной строке перейти к папке, где должен располагаться 
SDK и далее выполнить в командной строке следующую команду:</p>
<div class="console">
<pre class="consoletext">
git clone -b stable https://github.com/flutter/flutter.git
</pre>
</div>
<p>В данном случае с репозитария на гитхабе будет загружена последняя стабильная версия Flutter SDK. И опять же подчеркиваю, что для выполнения этой команды необходимо 
установить Git for Windows, как было написано выше.</p>

<h3>Установка Flutter на MacOS</h3>
<p>Для установки и обновления Flutter использует <span class="b">git</span>, поэтому необходимо установить git. 
Однако если установлен <span class="b">Xcode</span>, то git устанавливать не надо, так как Xcode уже включает git.</p>
<p>Для установки Flutter SDK перейдем на страницу <a href="https://flutter.dev/docs/get-started/install/macos" rel="nofollow">https://flutter.dev/docs/get-started/install/macos</a> и 
найдем на странице ссылку на Flutter SDK и загрузим его:</p>
<img src="./pics/1.29.png" alt="Установка Flutter SDK на MacOS" />
<p>Далее поместим папку с Flutter SDK где-нибудь на жестком диске. Например, в моем случае Flutter SDK расположен в корневой папке текущего пользователя 
(<span class="b">Users/eugene</span>).</p>
<p>Для использования Flutter SDK в треминале, необходимо добавить путь к папке bin в SDK в системные переменные. Добавление для текущего окна терминала:</p>
<div class="console">
<pre class="consoletext">
export PATH="$PATH:[Путь к папке с Flutter SDK]/flutter/bin"
</pre>
</div>
<p>При первом использовании команды <code>flutter</code> произойдет загрузка Dart SDK.</p>
<h3>Обновление Flutter</h3>
<p>Если впоследствии необходимо будет обновить Flutter, то для этого достаточно будет выполнить в командной строке команду</p>
<div class="console">
<pre class="consoletext">
flutter upgrade
</pre>
</div>
<p>Поскольку Flutter активно развивается, то лучше обновляться регулярно.</p>
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
<li class="closed"><span class="folder">Глава 1. Введение в Flutter</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/flutter/1.1.php">Что такое Flutter. Установка</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/1.2.php">Первое приложение</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/1.3.php">Создание приложения в Android Studio</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/1.4.php">Первое приложение в Visual Studio Code</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/1.5.php">Первое приложение на Flutter в Windows</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.1.php">Введение в виджеты</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Контейнеры и управление компоновкой</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.2.php">Align</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.3.php">Center</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.4.php">Padding</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.5.php">ConstrainedBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.6.php">Container</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.7.php">Column</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.8.php">Row</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.9.php">Expanded</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Встроенные виджеты и создание своих виджетов</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.1.php">Text</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.2.php">RichText</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.3.php">Stack</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.4.php">StatelessWidget</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.5.php">MaterialApp и Scaffold</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.6.php">Image и вывод изображений</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.7.php">Кнопка ElevatedButton</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.8.php">StatefulWidget и состояние State</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.9.php">GestureDetector и обработка нажатий</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.10.php">TextField и TextFormField</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.11.php">TextEditingController</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Списки в Flutter</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/flutter/4.1.php">Виджет ListView</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/4.2.php">Динамическое создание ListView</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/4.3.php">Добавление в список разделителя</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/4.4.php">Выбор элемента в списке</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/4.5.php">ListTile</a></span></li>
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
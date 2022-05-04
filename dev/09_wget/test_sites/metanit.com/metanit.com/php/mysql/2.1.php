<!DOCTYPE html>
<html >
<head>
<title>PHP и MySQL | PDO. Создание подключения</title>
<meta charset="utf-8" />
<meta name="description" content="Создание подключения к базе данных MySQL с помощью языка программирования PHP и библиотеки PDO">
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
<h1>Работа с MySQL через PDO</h1><h2>PDO. Создание подключения</h2><div class="date">Последнее обновление: 07.06.2021</div>

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

<p>Для создания подключения к серверу базы данных в PDO применяется конструктор <span class="b">new PDO()</span>, который принимает в качестве параметров настройки подключения:</p>
<pre class="brush:php;">new PDO("mysql:host=адрес_сервера;port=номер_порта;dbname=имя_базы_данных", "имя_пользователя", "пароль")</pre>
<p>Принимаемые параметры:</p>
<ul>
<li><p>Сначала указывается строка подключечения, которая состоит из ряда настроек. Первая настройка - название драйвера базы данных. Так, в данном случае подключение осуществляется к 
MySQL, то тип баз данных будет <span class="b">mysql:</span>.</p>
<p>Далее идет настройка <span class="b">host</span>, которая задает хост сервера, например, 
<code>host=localhost</code> (если сервер MySQL запущен локально).</p>
<p>Затем дополнительно можно указать номер порта через параметр <span class="b">port</span>. Если он не указан, то используется порт по умолчанию - для mysql это 3306.</p>
<p>И далее идет настройка <span class="b">dbname</span>, которая устанавливает имя базы данных.</p>
<p>Кроме этих настроек строка подключения может включать еще ряд других, но это самые основные.</p></li>
<li><p>Второй параметр задает имя пользователя MySQL</p></li>
<li><p>Третий параметр устанавливает пароль для выше указанного пользователя</p></li>
</ul>
<p>При успешном подключении вызов конструктора <code>new PDO()</code> возвращает созданный объект PDO, который представляет установленное подключение и 
через который мы сможем взавмодействовать с базой данных. Однако если установка подключения прошла неудачно (например, сервер базы данных недоступен, указаны 
неправильные имя пользователя и/или пароль, какая-то еще ошибка), то вызов конструктора генерирует исключение. Соответственно вызов данного конструктора лучше помещать 
в конструкцию <code>try..catch</code></p>
<p>Определим простейший скрипт для подключения к серверу базы данных MySQL:</p>
<pre class="brush:php;">
&lt;?php
try {
    // подключаемся к серверу
	$conn = new PDO("mysql:host=localhost", "root", "mypassword");
    echo "Database connection established";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e-&gt;getMessage();
}
?&gt;
</pre>
<p>Здесь производится подключение к локальному серверу, поэтому в строке подключения параметр <code>host</code> имеет значение "localhost". Поскольку 
база данных пока не важна, то параметр <code>dbname</code> не указан. Подключение производится для пользователя - 
пользователя "root", для которого установлен пароль "mypassword".</p>
<p>"root" - это пользователь по умолчанию, который существует для сервера MySQL. А "mypassword" - пароль, установленный для этого пользователя. Естественно 
в каждом конкретном случае пароль для этого пользователя может отличаться. Однако если на сервере MySQL созданы другие пользователи, то можно указывать этих 
пользователей и их пароли.</p>
<p>При успешном подключении созданный объект PDO будет сохранен в переменную <code>$conn</code>, через которую мы затем сможем взаимодействовать с MySQL:</p>
<pre class="brush:php;">$conn = new PDO("mysql:host=localhost", "root", "mypassword");</pre>
<p>Если произойдет ошибка, то будет сгенерировано исключение типа <span class="b">PDOException</span>. Как и у других классов исключений с помощью метода 
<code>getMessage()</code> мы можем получить сообщение об ошибке.</p>
<p>И при успешном подключении мы увидим в браузере следующее сообщение:</p>
<div class="browser">Database connection established</div>
<p>А если произойдет ошибка, то браузер выведет сообщение об ошибке. Например, сообщение об ошибке при некорректном пароле:</p>
<div class="browser">Connection failed: SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost' (using password: YES)</div>
<h3>Установка режима вывода ошибок</h3>
<p>Если при взаимодействии с MySQL произойдет ошибка, то, как правило, ожидается, что мы получим сообщение об ошибке. Однако реальное поведение 
зависит от редима вывода ошибок, который установлен для объекта PDO. Режим вывода ошибок задается с помощью атрибута <span class="b">PDO::ATTR_ERRMODE</span>, 
который может принимать следующие значения:</p>
<ul>
<li><p><span class="b">PDO::ERRMODE_SILENT</span>: PDO просто устанавливает код ошибки. Для получения которого и для получения информации об ошибке по которому 
необходимо было вызывать специальные методы. Поскольку при этом режиме необходимо вызывать дополнительные методы, то этот способ обычно рассматривался как не самый удобный. 
Он был значением по умолчанию до версии PHP 8.0.</p></li>
<li><p><span class="b">PDO::ERRMODE_WARNING</span>: PDO генерирует сообщение типа <code> E_WARNING</code>. Обычно применяется при отладке или тестировании</p></li>
<li><p><span class="b">PDO::ERRMODE_EXCEPTION</span>: PDO передает информацию об ошибке в объект PDOException, благодаря чему через блок catch в конструкции 
<code>try..catch</code> мы можем отловить ошибку и получить информацию об этом исключении. Этот режим применяется как режим по умолчанию начиная с версии PHP 8.0.</p></li>
</ul>
<p>Если мы хотим получать информацию об ошибке через исключение PDOException и обрабатывать его в блоке <code>catch</code>, то нам нужно 
значение <span class="b">PDO::ERRMODE_EXCEPTION</span>. В PHP 8.0 и выше это значение применяется по умолчанию, однако, если версия ниже 8.0, то необходимо это значение 
установить явным образом с помощью метода <code>setAttribute()</code> объекта PDO:</p>
<pre class="brush:php;">
try {
	$conn = new PDO("mysql:host=localhost", "root", "mypassword");
	// установка режима вывода ошибок
	$conn-&gt;setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connection established";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e-&gt;getMessage();
}
</pre>
<h3>Закрытие подключения</h3>
<p>После завершения работы скрипта PHP автоматически закрывает открытые подключения к базе данных. Но может потребоваться закрыть подключение еще в процессе работы скрипта. 
В этом случае объекту PDO можно присвоить значение <span class="b">null</span>:</p>
<pre class="brush:php;">$conn = null;  // отключаемся от сервера базы данных</pre>
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


<div class="nav"><p><a href="./1.1.php">Назад</a><a href="./">Содержание</a><a href="./2.2.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в работу с MySQL в PHP</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/php/mysql/1.1.php">PDO и MySQLi</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Работа с MySQL через PDO</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.1.php">PDO. Создание подключения</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.2.php">Выполнение запросов в PDO. Создание базы данных и таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.3.php">Добавление данных в PDO и параметризация запросов</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.4.php">Получение данных в PDO</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.7.php">Фильтрация данных в PDO</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.5.php">Обновление данных в PDO</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.6.php">Удаление данных в PDO</a></span></li>
		</ul>
	</li>
		<li class="closed"><span class="folder">Глава 3. Взаимодействие с MySQL через mysqli</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.1.php">MySQLi. Создание подключения</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.2.php">Выполнение запросов в MySQLi. Создание базы данных и таблиц</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.3.php">Добавление данных в MySQLi</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.4.php">Получение данных в MySQLi</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.7.php">Фильтрация данных в MySQLi</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.5.php">Обновление данных в MySQLi</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.6.php">Удаление данных в MySQLi</a></span></li>
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
	
	$("li:contains('Глава 2.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
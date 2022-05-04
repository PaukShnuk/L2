<!DOCTYPE html>
<html >
<head>
<title>Java EE | Как работает сервлет</title>
<meta charset="utf-8" />
<meta name="description" content="Как работает сервлет в Java EE, методы doGet, doPost, doPut, doDelete, service, destroy, жизненный цикл сервлета">
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
<h2>Как работает сервлет</h2><div class="date">Последнее обновление: 17.09.2018</div>

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

<img src="https://metanit.com/metanit-java.jpg" id="jma" style="cursor:pointer;" />
</div>

<p>Сервлет - это класс, который расширяет функциональность класса <span class="b">HttpServlet</span> и запускается внутри контейнера сервлетов.</p>
<p>Сервлет размещается на сервере, однако чтобы сервер мог использовать сервлет для обработки запросов, сервер должен поддерживать движок или 
контейнер сервлетов (servlet container/engine). Например, Apache Tomcat по сути является контейнером сервлетов, поэтому он может использовать сервлеты 
для обслуживания запросов.</p>
<p>Для обработки запроса в HttpServlet определен ряд методов, которые мы можем переопределить в классе сервлета:</p>
<ul>
<li><p><span class="b">doGet</span>: обрабатывает запросы GET (получение данных)</p></li>
<li><p><span class="b">doPost</span>: обрабатывает запросы POST (отправка данных)</p></li>
<li><p><span class="b">doPut</span>: обрабатывает запросы PUT (отправка данных для изменения)</p></li>
<li><p><span class="b">doDelete</span>: обрабатывает запросы DELETE (удаление данных)</p></li>
<li><p><span class="b">doHead</span>: обрабатывает запросы HEAD</p></li>
</ul>
<p>Каждый метод обрабатывает определенный тип запросов HTTP, и мы можем определить все эти методы, но, зачастую, работа идет в основном с методами 
doGet и doPost. Например, определение методов без реализации:</p>
<pre class="brush:java;">
import java.io.IOException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
 
@WebServlet("/hello")
public class HelloServlet extends HttpServlet {
 
    protected void doGet(HttpServletRequest request, HttpServletResponse response) 
		throws ServletException, IOException {
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) 
		throws ServletException, IOException {
	}
	protected void doPut(HttpServletRequest request, HttpServletResponse response) 
		throws ServletException, IOException {
	}

	protected void doDelete(HttpServletRequest request, HttpServletResponse response) 
		throws ServletException, IOException {
		
	}

	protected void doHead(HttpServletRequest request, HttpServletResponse response) 
		throws ServletException, IOException {
		
	}
}
</pre>
<p>Все методы в качестве параметра принимают два объекта: <span class="b">HttpServletRequest</span> - хранит информацию о запросе и 
<span class="b">HttpServletResponse</span> - управляет ответом на запрос.</p>
<h3>Жизненный цикл сервлета</h3>
<p>Для каждого сервлета движок сервлетов создает только одну копию. Вне зависимости от того, сколько запросов будет отправлено 
сервлету, все запросы будут обрабатываться толькой одной копией сервлета. Объект сервлета создается либо при запуске движка сервлетов, либо когда 
сервлет получает первый запрос. Затем для каждого запроса запускается поток, который обращается к объекту сервлета.</p>
<p>При работе с сервлетом движок сервлетов вызывает у класса сервлета ряд методов, которые определены в родительском абстрактном классе HttpServlet.</p>
<ol>
<li><p>Когда движок сервлетов создает объект сервлета, у сервлета вызывается метод <span class="b">init()</span>.</p>
<pre class="brush:java;">
public void init(ServletConfig config) throws ServletException { }
</pre>
<p>Этот метод вызывается только один раз - при создании сервлета. Мы можем переопределить этот метод, чтобы определить в нем некоторую логику инициализации.</p></li>
<li><p>Когда к сервлету приходит запрос, движок сервлетов вызывает метод <span class="b">service()</span> сервлета. А этот метод, исходя из типа запроса 
(GET, POST, PUT и т.д.) решает, какому методу сервлета (doGet, doPost и т.д.) обрабатывать этот запрос.</p>
<pre class="brush:java;">
public void service(HttpServletRequest request, HttpServletResponse response) 
		throws IOException, ServletException
{ }
</pre>
<p>Этот метод также можно переопределить, однако в этом нет смысла. В реальности для обработки запроса переопределяются методы onGet, onPost и т.д., 
которые обрабатывают конкретные типы запросов.</p>
</li>

<li><p>Если объект сервлета долгое время не используется (к нему нет никаких запросов), или если происходит завершение работы движка сервлетов, 
то движок сервлетов выгружает из памяти все созданные экземпляры сервлетов. Однако до выгрузки сервлета из памяти у сервлета вызывается 
метод <span class="b">destroy()</span>.</p>
<pre class="brush:java;">
public void destroy()
</pre>
<p>При необходимости мы также можем его переопределить, например, определить в нем логику логгирования или что иное. В то же время следует 
учитывать, что если сервер вдруг упадет по какой-то причине, например, отключится электричество и т.д., тогда данный метод естественно не будет вызван и его логика не сработает.</p>
</li>
</ol>
<img src="pics/servlet22.png" alt="Жизненный цикл сервлетов в Java EE" />
<p>Поскольку для обработки всех запросов создается один экземпляр сервлета, и все обращения к нему идут в отдельных потоках, то 
не рекомендуется в классе сервлета объявлять и использовать глобальные переменные, так как они не будут потокобезопасными.</p>
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


<div class="nav"><p><a href="4.1.php">Назад</a><a href="./">Содержание</a><a href="4.2.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Java EE</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javaee/1.1.php">Что такое Java EE</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Apache Tomcat</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javaee/2.1.php">Установка Tomcat</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/2.2.php">Структура Apache Tomcat</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/2.3.php">Интеграция Eclipse с Tomcat</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Сервлеты</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.1.php">Введение в сервлеты</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.8.php">Как работает сервлет</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.2.php">Сервлеты в Eclipse</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.3.php">Получение данных в сервлете</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.4.php">Переадресация и перенаправление запроса</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.5.php">web.xml и маппинг сервлетов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.6.php">Параметры инициализации сервлетов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.7.php">Обработка ошибок</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.9.php">Куки</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.10.php">Сессии</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Java Server Pages</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.1.php">Что такое JSP. Первое приложение</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.2.php">Работа с JSP в Eclipse</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.3.php">Основы синтаксиса JSP</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.4.php">Использование классов Java в JSP</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.5.php">Вложение jsp-страниц</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.6.php">Получение параметров строки запроса и форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.8.php">Передача данных из сервлета в jsp</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.9.php">Expression Language</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.7.php">Java Bean</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.10.php">Встроенные объекты Expression Language</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.11.php">JSTL</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.12.php">Основные возможности JSTL</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Работа с базой данных</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javaee/5.1.php">Подключение к MySQL</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/5.2.php">Основные операции с базой данных. Часть 1</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/5.3.php">Основные операции с базой данных. Часть 2</a></span></li>
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
	
	$("li:contains('Глава 3.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 3.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
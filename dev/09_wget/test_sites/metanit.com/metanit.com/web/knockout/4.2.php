<!DOCTYPE html>
<html >
<head>
<title>Knockout | Отправка запроса и получение ответа</title>
<meta charset="utf-8" />
<meta name="description" content="Отправка запроса и получение ответа в KnockoutJS, ajax-запросы с помощью jquery">
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
<h2>Отправка запроса и получение ответа</h2><div class="date">Последнее обновление: 17.05.2016</div>

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

<p>При взаимодействии с сервером в нашем распоряжении есть грубо говоря два подхода: REST API и стандартная отправка данных, например, методом POST. Оба этих 
подхода имеют некоторые различия:</p>
<ul>
<li><p>В зависимости от подхода содержимое заголовка <code>content-type</code> в AJAX-запросе может отличаться. 
По умолчанию при отправке формы через AJAX в jQuery для этого заголовка применяется значение <span class="b">application/x-www-form-urlencoded</span>.
Это значение используется для стандартного запроса POST.</p>
<p>А при применении подхода REST API тот заголовок должен иметь значение <span class="b">application/json</span>, если мы отправляем данные в формате JSON</p></li>

<li><p>Также в зависимости от подхода может отличаться содержимое формы. При отправке данных методом POST данные сериализуются в обычный объект 
JavaScript, который представляет набор пар ключ/значение. А при взаимодействии через JSON в REST API данные формы сериализуются в формат JSON.</p>
<p>Поэтому в зависимости от подхода мы будем использовать разные функции Knockout для сериализации объектов.</p></li>
</ul>
<p>Рассмотрим простейший пример взаимодействия Knockout с сервером. Для этого нам прежде всего надо определить некоторый функционал на стороне сервера с использованием 
одной из серверных технологий, который будет принимать и возвращать клиентскому коду некоторые данные.</p>
<p>Пусть сервер получает две строки (условно логин и пароль), инвертирует их задом наперед и возвращает клиенту.</p>
<p>Если мы на сервере работаем с PHP, то мы могли бы определить такой скрипт:</p>
<pre class="brush:php;">
&lt;?php

if(!isset($_POST['login']) || !isset($_POST['password'])) 
	header('HTTP/1.1 500 Internal Server Error');

$login = strrev($_POST['login']);
$password = strrev($_POST['password']);
$data = array("login"=&gt;$login, "password"=&gt;$password);
header('Content-Type: application/json');
echo json_encode($data);
?&gt;
</pre>
<p>Если технологией стороны сервера является ASP.NET MVC 5, то мы могли бы определить в контроллере следующий метод для обработки запроса:</p>
<pre class="brush:c#;">
[HttpPost]
public JsonResult PostData(string login, string password)
{
    Response.AppendHeader("Access-Control-Allow-Origin", "*");
    login = new string( login.Reverse().ToArray&lt;Char&gt;());
    password = new string(password.Reverse().ToArray&lt;Char&gt;());
    return Json(new { login, password });
}
</pre>
<p>И теперь чтобы обращаться к серверу, определим следующий код клиентской стороны:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="utf-8"&gt;
&lt;title&gt;Работа с сервером в KnockoutJS&lt;/title&gt;
&lt;script src="https://code.jquery.com/jquery-2.2.3.min.js"&gt;&lt;/script&gt;
&lt;script src="https://ajax.aspnetcdn.com/ajax/knockout/knockout-3.4.0.js"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;form data-bind="submit: submitHandler, with: user"&gt;
    &lt;input type="text" name="login" data-bind="textInput: login" /&gt;
    &lt;input type="text" name="password" data-bind="textInput: password" /&gt;
    &lt;button type="submit"&gt;Отправить&lt;/button&gt;
&lt;/form&gt;
&lt;p data-bind="text: ko.toJSON(user)"&gt;&lt;/p&gt;
&lt;script type="text/javascript"&gt;
function AppViewModel(){
	
	self=this;
	self.user = {
		login: ko.observable("login"),
		password: ko.observable("password")
	};
	self.submitHandler = function() {
		var userInfo = ko.toJS(self.user);
		$.ajax({
			//url: 'http://localhost:52321/home/postdata',
			url: 'http://localhost:8080/postdata.php',
			data: userInfo,
			type: 'POST',
			contentType: 'application/x-www-form-urlencoded'
		}).success(self.successHandler).error(self.errorHandler);
	};
	self.successHandler = function(data) {
		self.user.login(data.login);
		self.user.password(data.password);
		alert("Success!");
	};
	self.errorHandler = function() {
		alert("Error!");
	};
};
ko.applyBindings(new AppViewModel());
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Здесь все основные данные инкапсулированы в свойстве <code>self.user</code>, к которым на форме установлена привязка. 
А обработчик отправки формы <code>submitHandler</code> выполняет с помощью jQuery ajax-запрос к серверу и обрабатывает полученные от сервера данные.</p>
<p>Как видно, в данном случае используется стандартный запрос POST. Заголовок <code>contentType</code> имеет значение 
<code>application/x-www-form-urlencoded</code>. А для сериализации отправляемых данных применяется функция <code>ko.toJS()</code>.</p>
<p>В результате после нажатия на кнопку на сервер отправятся введенные в поля формы данные? и затем эти поля отобразят уже инвертированные значения:</p>
<img src="pics/21.png" alt="Отправка на сервер в Knockout" />
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


<div class="nav"><p><a href="4.1.php">Назад</a><a href="./">Содержание</a></p></div></div>
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
		<li class="closed"><span class="folder">Глава 1. Введение в KnockoutJS</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/knockout/1.1.php">Что такое KnockoutJS</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/1.2.php">Паттерн MVVM и синтаксис привязки</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. Основы привязки</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/knockout/2.1.php">Наблюдаемые объекты</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/2.2.php">Формы привязки</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/2.3.php">Привязка массивов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/2.4.php">Наблюдаемый массив. Операции с массивами</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/2.5.php">Обратные вызовы привязки foreach</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/2.6.php">Вычисляемые объекты. Функция ko.computed</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/2.7.php">Привязка if и ifnot</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/2.8.php">Контекст привязки и привязка with</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 3. Работа с формами</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/knockout/3.1.php">Привязка value и textInput</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/3.2.php">Привязка checked</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/3.3.php">Привязка options</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/3.4.php">События форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/3.5.php">Событие click</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/3.6.php">Событие submit</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 4. Взаимодействие с сервером</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/web/knockout/4.1.php">Сериализация объектов</a></span></li>
				<li><span class="file"><a href="//metanit.com/web/knockout/4.2.php">Отправка запроса и получение ответа</a></span></li>
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
	
	$("li:contains('Глава 4.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 4.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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
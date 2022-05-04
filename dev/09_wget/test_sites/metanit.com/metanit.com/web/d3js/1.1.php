<!DOCTYPE html>
<html >
<head>
<title>Введение в D3.js</title>
<meta charset="utf-8" />
<meta name="description" content="Общий обзор библиотеки D3.js, ее использование для обработки и визуализации данных, первое приложение с D3">
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
<h1>Введение в D3.js</h1><h2>Что такое D3.js?</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p><b>D3.js</b> представляет библиотеку на языке JavaScript для обработки и визуализации данных. Само название D3 расшифровывается как 
<span class="b">Data-Driven Documents</span> и как бы делает упор на управление данными, хотя ключевой функциональностью библиотеки 
являются мощные возможности для их визуализации.</p>
<p>Библиотека D3.js основана прежде всего на использовании JavaScript, SVG и CSS в противовес другим подобным библиотекам, которые вместо SVG 
используют элемент canvas и его возможности. Если стандартные механизмы рисования, например, элемент canvas, полагаются на пиксели, то svg 
использует векторы. Применение SVG позволяет создавать структуры с насыщенной графикой, обладающие анимацией и возможностями взаимодействия.</p>
<p>По сравнению с пиксельной графикой SVG обладает рядом преимуществ. В частности, SVG основан на xml, что делает его более читабельным. Кроме того, 
код SVG более легковесный по сравнению файлами изображений.</p>
<p>Во многом благодаря этому D3 в настоящее время является одним из наиболее популярных фреймворков, используемых для графической обработки данных и создания всякого рода диаграмм и графиков.</p>
<p>В отличие от других подобных JavaScript-библиотек D3 не использует jQuery для работы со структурой DOM, хотя в то же время реализует похожие концепции для 
работы с элементами.</p>
<p>Что потребуется для разработки с D3.js? Во-первых, нам надо загрузить саму библиотеку с официального сайта <a href="http://d3js.org/">http://d3js.org/</a>.</p>
<p>Также можно ссылаться на библиотеку напрямую из CDN с официального сайта:</p>
<pre class="brush:js;">&lt;script src="http://d3js.org/d3.v3.js"&gt;&lt;/script&gt;</pre>
<h3>SVG и D3.js</h3>
<p>Как уже говорилось, D3.js использует SVG, предполагающий применение векторной графики для визуализации данных. Сделаем небольшой пример с SVG и D3.js. 
Создадим небольшую html-страницу:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="utf-8"&gt;
&lt;script src="http://d3js.org/d3.v3.min.js"&gt; &lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h3&gt;SVG&lt;/h3&gt;
&lt;svg&gt;
	&lt;rect width="50" height="200" style="fill:red;" /&gt;
&lt;/svg&gt;
&lt;h3&gt;D3.js&lt;/h3&gt;
&lt;script&gt;
d3.select("body")
	.append("svg")
	.append("rect")
	.attr("width", 50)
	.attr("height", 200)
	.style("fill", "red");
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Запустим эту страницу в браузере. Мы получим два идентичных красных столбика:</p>
<img src="pics/1.1.png" alt="SVG и D3.js" />
<p>Вначале подключаем из официального CDN саму библиотеку:</p>
<pre class="brush:xml;">&lt;script src="http://d3js.org/d3.v3.min.js"&gt; &lt;/script&gt;</pre>
<p>Затем создается простейшая графика на svg. Если вы не знакомы с SVG, работать с данной технологией будет относительно не сложно. SVG 
позволяет использовать готовые блоки (линии, круги, прямоугольники и т.д.) для создания графики. В данном случае с помощью элемента <code>rect</code> 
выводится прямоугольник.</p>
<p>Далее идет собственно работа D3.js:</p>
<pre class="brush:js;">
d3.select("body") // получаем элемент body
	.append("svg") // добавляем элемент svg
	.append("rect") // добавляем в svg элемент rect
	.attr("width", 50) // установка у rect ширины
	.attr("height", 200) // установка у rect высоты
	.style("fill", "red"); // установка у rect стиля
</pre>
<p>Фактически здесь будет формироваться с помощью цепочки вызовов тот же элемент svg с идентичным html-кодом, у которого устанавливаются аналогичные 
атрибуты и стиль. Только в данном случае мы уходим от прямого использования технологии SVG в сторону javascript.</p>
<p>Каковы возможности D3.js? Чтобы понять, что можно делать с помощью библиотеки, достаточно посмотреть ряд примеров, которые приводятся разработчиками на странице 
<a href="https://github.com/mbostock/d3/wiki/Gallery" rel="nofollow">https://github.com/mbostock/d3/wiki/Gallery</a>. Это прежде всего, но не только, 
графики, диаграммы, карты с богатой функциональностью и многое другое.</p>
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


<div class="nav"><p><a href="./">Содержание</a><a href="1.2.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в D3.js</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/d3js/1.1.php">Что такое D3.js?</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/1.2.php">Выборка элементов и операторы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Работа с данными</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/d3js/2.1.php">Привязка данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/2.2.php">Функции для работы с данными</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/2.3.php">Фильтрация данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/2.4.php">Сортировка данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/2.5.php">Scale, Domain и Range</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Графические элементы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/d3js/3.1.php">Создание графических форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/3.2.php">Создание путей и групп объектов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/3.3.php">Трансформации и переходы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Графики и диаграммы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.1.php">Координатные оси</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.2.php">Даты и время на осях</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.3.php">Двумерные координаты</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.4.php">Линейная диаграмма</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.5.php">Добавление к графику маркеров и текстовых меток</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.6.php">Диаграммы с областями</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.7.php">Интерполяция и сглаживание графиков</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.8.php">Несколько графиков в одной координатной системе</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.9.php">Гистограммы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.10.php">Гистограммы с нечисловыми данными</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.11.php">Круговые диаграммы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/d3js/4.12.php">Добавление легенды диаграммы</a></span></li>
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
<!DOCTYPE html>
<html >
<head>
<title>Круговые диаграммы в D3.js</title>
<meta charset="utf-8" />
<meta name="description" content="">
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
<h2>Круговые диаграммы</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Круговые диаграммы (pie charts) представляют отображение данных в виде отдельных секторов в пределах окружности. В D3.js 
каждый сектор представлен объектом арки, которая генерируется с помощью метода <span class="bb">d3.svg.arc()</span>. 
Например, у нас есть данные по доли браузеров и нам надо эти данные отобразить:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="utf-8"&gt;
&lt;script src="http://d3js.org/d3.v3.min.js"&gt; &lt;/script&gt;
&lt;style&gt;
body {
	font: 13px Verdana;
}
.arc path {
	stroke: #000;
}
&lt;/style&gt;
&lt;body&gt;

&lt;script type="text/javascript"&gt;
var height = 500, 
    width = 500, 
	margin=30,
	data=[
		{browser: "Google Chrome", rate: 42.52},
		{browser: "Firefox", rate: 16.23},
		{browser: "Opera", rate: 12.6},
		{browser: "Yandex Browser", rate: 9.12},
		{browser: "Internet Explorer", rate: 10.56},
		{browser: "Другие", rate: 8.97}
	];
	
// функция для получения цветов
var color = d3.scale.category10();

// задаем радиус
var radius = Math.min(width - 2*margin, height- 2*margin) / 2;

// создаем элемент арки с радиусом
var arc = d3.svg.arc()
	.outerRadius(radius)
	.innerRadius(0);
	
var pie = d3.layout.pie()
	.sort(null)
	.value(function(d) { return d.rate; });

var svg = d3.select("body").append("svg")
		.attr("class", "axis")
        .attr("width", width)
        .attr("height", height)
		.append("g")
		.attr("transform", 
			"translate(" +(width / 2) + "," + (height / 2 ) + ")");
var g = svg.selectAll(".arc")
.data(pie(data))
.enter().append("g")
.attr("class", "arc");	

g.append("path")
.attr("d", arc)
.style("fill", function(d) { return color(d.data.browser); });

g.append("text")
	.attr("transform", function(d) {
		return "translate(" + arc.centroid(d) + ")"; })
	.style("text-anchor", "middle")
	.text(function(d) { return d.data.browser; });

&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<img src="pics/4.8.png" alt="Круговая диаграмма в D3.js" />
<p>Для создания каждой отдельной арки необходимо два радиуса: внутренний и внешний.</p>
<img src="pics/4.9.png" alt="Радиус круговой диаграммы" />
<p>Внешний радиус будет равен половине ширины или высоты контейнера svg минус отступы. Внутренний радиус равен 0, поэтому дуга фактически будет представлять целый сектор, который отсекается от центра окружности:</p>
<pre class="brush:js;">
var radius = Math.min(width - 2*margin, height- 2*margin) / 2;

var arc = d3.svg.arc()
	.outerRadius(radius)
	.innerRadius(0);
</pre>
<p>Для автоматического создания круговой диаграммы или "пирога" (pie) в D3.js предусмотрена функция <span class="bb">d3.layout.pie()</span>:</p>
<pre class="brush:js;">
var pie = d3.layout.pie()
	.sort(null)
	.value(function(d) { return d.rate; });
</pre>
<p>В соответствии со значением rate у каждого объекта в массиве data ему будет определяться свой сектор.</p>
<p>Далее надо собственно нарисовать дуги, представляющие сектора:</p>
<pre class="brush:js;">
var g = svg.selectAll(".arc")
	.data(pie(data))
	.enter().append("g")
	.attr("class", "arc");	

g.append("path")
	.attr("d", arc)
	.style("fill", function(d) { return color(d.data.browser); });
g.append("text")
	.attr("transform", function(d) {
		return "translate(" + arc.centroid(d) + ")"; })
	.style("text-anchor", "middle")
	.text(function(d) { return d.data.browser; });
</pre>
<p>Но в качестве данных здесь будет использоваться не массив data, а результат вышеопределенной функции pie над этим массивом. Поэтому 
при определении текста на секторе используется не <code>d.browser</code>, а <code>d.data.browser</code>.</p>
<p>Чтобы определить место для метки текста, здесь применяется функция <span class="bb">arc.centroid()</span>, которая вычисляет центральную точку между 
внутренним и внешним радиусом.</p>
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


<div class="nav"><p><a href="4.10.php">Назад</a><a href="./">Содержание</a><a href="4.12.php">Вперед</a></p></div></div>
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
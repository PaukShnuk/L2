<!DOCTYPE html>
<html >
<head>
<title>jQuery | Выборка элементов. Селекторы</title>
<meta charset="utf-8" />
<meta name="description" content="Выборка элементов в jquery, роль селекторов, типы селекторов, примеры их использования">
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
<h1>Выборка элементов</h1>
<h2>Cелекторы</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Одним из важных функциональностей jQuery является выборка элементов. Чтобы что-то делать с элементами, манипулировать ими, применять к ним методы 
jQuery, нам надо сначала их получить. Библиотека предоставляет нам удобный способ выбора элементов, основанный на селекторах. 
Нам достаточно передать в функцию jQuery селектор и мы можем получить нужный нам элемент, который соответствует данному селектору. Например, 
если необходимо получить все эелементы <code>img</code>, то мы можем использовать следующее выражение: <code>$("img")</code>. 
В данном случае "img" будет выступать в качестве селектора.</p>
<p>Рассмотрим основные селекторы jQuery, которые используются для выборки элементов.</p>
<h3>Базовые селекторы jQuery</h3>
<table class="tab">
<tr class="tabhead"><td><p>Шаблон селектора</p></td><td><p>Описание</p></td><td><p>Пример</p></td></tr>
<tr><td><p>$("*")</p></td><td><p>Выборка всех элементов страницы</p></td><td><p>Например, выражение <code>$("*").css('background-color', 'red')</code> окрасит все элементы страницы и саму страницу в красный цвет</p></td></tr>
<tr><td><p>$("Element")</p></td><td><p>Выборка всех элементов с данным именем тега</p></td><td><p><code>$("img")</code> выбирает все элементы <code>img</code>
<br><code>$("input")</code> выбирает все элементы <code>input</code></p></td></tr>
<tr><td><p>$("#id")</p></td><td><p>Выборка элемента с данным значением атрибута id</p></td><td><p><code>$("#btn1")</code> выбирает элемент, у которого значение id равно <code>btn1</code>
(например, <code>&lt;div id="btn1"&gt;&lt;/div&gt;</code>)</p></td></tr>
<tr><td><p>$(".class")</p></td><td><p>Выборка всех элементов с данным значением атрибута class</p></td><td><p><code>$(".redStyle")</code> выбирает элементы, у которого значение class равно <code>redStyle</code>
(например, <code>&lt;div class="redStyle"&gt;&lt;/div&gt;</code>)</p></td></tr>
<tr><td><p>$("selector1,selector2,selectorN")</p></td><td><p>Выборка всех элементов, которые соответствуют указанным селекторам</p></td><td><p>Например, у нас есть такой код:<p>
<pre><span class="bb">&lt;div class="apple"&gt;&lt;/div&gt;
&lt;div class="apple"&gt;&lt;/div&gt;
&lt;div class="orange"&gt;&lt;/div&gt;</span>
&lt;div class="banana"&gt;&lt;/div&gt;</pre><p> то селектор <code>$(".apple, .orange")</code> выберет элементы, выделенные жирным</p></td></tr>
</table>
<h3>Конкретизация выбора</h3>
<p>Мы можем использовать сразу несколько селекторов, чтобы более детально настроить выборку элементов. Например, у нас есть такая веб-страница:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Мир jQuery&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h2&gt;Словарь&lt;/h2&gt;
&lt;table id="tab"&gt;
&lt;tr class="tabhead"&gt;&lt;td&gt;&lt;p&gt;Слово&lt;/p&gt;&lt;/td&gt;&lt;td&gt;&lt;p&gt;Перевод&lt;/p&gt;&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;&lt;p&gt;table&lt;/p&gt;&lt;/td&gt;&lt;td&gt;&lt;p&gt;таблица&lt;/p&gt;&lt;/td&gt;&lt;/tr&gt;
&lt;tr&gt;&lt;td&gt;&lt;p&gt;apple&lt;/p&gt;&lt;/td&gt;&lt;td&gt;&lt;p&gt;яблоко&lt;/p&gt;&lt;/td&gt;&lt;/tr&gt;
&lt;/table&gt;
&lt;script src="jquery-1.10.1.min.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript"&gt;
jQuery(document).ready(function(){

	$("#tab").css('background-color', 'silver');
});
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>В данном случае мы используем селектор #tab, то есть выбираем нашу таблицу, которая имеет id=tab. Выражение <code>css('background-color', 'silver')</code> 
устанавливает цвет элемента - в данном случае серебряный.</p>
<p>Запустив данную страничку в веб-браузере мы получим следующую картину:</p>
<img src="pics/2.1.png" />
<p>Но мы также можем использовать набор селекторов, чтобы более детально произвести действие. Например, нам надо, чтобы была закрашена только первая 
строка, которая имеет атрибут class="tabhead". Тогда мы можем использовать следующий селектор: <code>$("#tab .tabhead")</code>. В этом 
случае селектор выберет элемент с class="tabhead", который находится в элементе с id="tab".</p>
<img src="pics/2.2.png" />
<p>При этом мы можем для сужения выборки использовать множество различных селекторов, например: <code>$("div#menu a.redStyle")</code>. К примеру 
данный селектор может найти например такой элемент:</p>
<pre class="brush:xml;">
&lt;div id="menu"&gt;
	&lt;a href="m.tml" class="redStyle"&gt;Ссылка на сайт&lt;/a&gt;
&lt;/div&gt;
</pre>
<p>В данном случае мы применили иерархический селектор, который подразумевает, что элемент по второму селектору должен находиться в элементе по первому селектору. 
Но кроме того, мы можем также применить еще ряд иерархических селекторов:</p>
<table class="tab">
<tr class="tabhead"><td><p>Шаблон селектора</p></td><td><p>Описание</p></td><td><p>Пример</p></td></tr>
<tr><td><p>родительский_селектор &gt; дочерний_селектор</p></td><td><p>Выборка всех элементов, которые соответстуют второму селектору и являются дочерними для элементов первого селектора</p></td>
<td><p>Например, чтобы получить элемент ссылки в предыдущем примере мы можем использовать селектор <code>$("#menu &gt; a")</code></p></td></tr>
<tr><td><p>селектор1 + селектор2</p></td><td><p>Выборка элементов с селектором 'селектор2', которые располагаются непосредственно 
за элементами 'селектор1'. Причем оба элемента должны находиться на одном уровне</p></td>
<td><p>Например, у нас есть следующий блок ссылок:</p>
<pre>&lt;div id="menu"&gt;
	&lt;a href="1.html" class="open"&gt;1.html&lt;/a&gt;
	&lt;a href="2.html" class="closed"&gt;2.html&lt;/a&gt;
	&lt;a href="3.html"&gt;3.html&lt;/a&gt;
	&lt;a href="4.html" class="open"&gt;4.html&lt;/a&gt;
	&lt;a href="5.html" class="closed"&gt;5.html&lt;/a&gt;
	<b>&lt;a href="6.html" class="open"&gt;6.html&lt;/a&gt;</b>
&lt;/div&gt;</pre> <p>Тогда селектор <code>$(".closed + .open")</code> выберет те ссылки, которые выделены жирным, так как эти элементы с атрибутом class="open" идут непосредственно 
за элементами с атрибутом class="closed".</p></td></tr>

<tr><td><p>селектор1 ~ селектор2</p></td><td><p>Выборка элементов с селектором 'селектор2', которые располагаются на одном уровне с элементами с селектором 
'селектор1'.</p></td>
<td><p>Например, у нас есть следующий блок ссылок:</p>
<pre>&lt;div id="menu"&gt;
	&lt;a href="1.html" class="open"&gt;1.html&lt;/a&gt;
	&lt;a href="2.html" class="closed"&gt;2.html&lt;/a&gt;
	&lt;a href="3.html"&gt;3.html&lt;/a&gt;
	<b>&lt;a href="4.html" class="open"&gt;4.html&lt;/a&gt;</b>
	&lt;a href="5.html" class="closed"&gt;5.html&lt;/a&gt;
	<b>&lt;a href="6.html" class="open"&gt;6.html&lt;/a&gt;</b>
&lt;/div&gt;</pre> <p>Тогда селектор <code>$(".closed ~ .open")</code> выберет те ссылки, которые выделены жирным, так как эти элементы с атрибутом class="open" находятся на одном уровне с 
элементами с атрибутом class="closed".</p></td></tr>
</table>
<h3>Селекторы атрибутов</h3>
<p>Чтобы сузить поиск кроме базовых и иерархических селекторов, рассмотренных выше, мы можем применять селекторы атрибутов. В данном случае jQuery будет 
возвращать элементы в зависимости от значений и определения указанных атрибутов.</p>
<table class="tab">
<tr class="tabhead"><td><p>Шаблон селектора</p></td><td><p>Описание</p></td><td><p>Пример</p></td></tr>
<tr><td><p>[attr]</p></td><td><p>Выборка всех элементов с атрибутом attr</p></td><td><p>Например, выражение <code>$("a[class]")</code> выберет все элементы ссылок, которые имеют атрибут <code>class</code></p></td></tr>
<tr><td><p>[attr='value']</p></td><td><p>Выборка всех элементов, у которых значение атрибута attr равно value</p></td><td><p>Например, выражение <code>$("a[class='redStyle']")</code> выберет все элементы ссылок, которые имеют атрибут <code>class="redStyle"</code></p></td></tr>
<tr><td><p>[attr^='value']</p></td><td><p>Выборка всех элементов, у которых значение атрибута attr начинается со строки value</p></td><td><p>Например, выражение <code>$("a[class^='red']")</code> выбрать элементы ссылок, которые имеют атрибут <code>class="redStyle"</code>, 
так как слово 'redStyle' начинается на 'red'.</p></td></tr>
<tr><td><p>[attr$='value']</p></td><td><p>Выборка всех элементов, у которых значение атрибута attr оканчивается на строку value</p></td><td><p>Например, выражение <code>$("a[class$='Style']")</code> выбрать элементы ссылок, которые имеют атрибут <code>class="redStyle"</code>, 
так как слово 'redStyle' оканчивается на 'Style'.</p></td></tr>
<tr><td><p>[attr~='value']</p></td><td><p>Выборка всех элементов, у которых атрибут attr имеет список значений, разделенных пробелом, и одно из 
этих значений равно value</p></td><td><p>Например, выражение <code>$("a[class~='redStyle']")</code> выбрать элементы ссылок, которые могут иметь следующее значение атрибута <code>class="redStyle closed"</code>.</p></td></tr>
<tr><td><p>[attr*='value']</p></td><td><p>Выборка всех элементов, у которых значение атрибута attr имеет имеет подстроку value</p></td><td><p>Например, выражение <code>$("a[class*='Style']")</code> выбрать элементы ссылок, которые могут иметь следующее значение атрибута <code>class="redStyle1"</code>.</p></td></tr>
<tr><td><p>[attr|='value']</p></td><td><p>Выборка всех элементов, у которых значение атрибута attr представляет либо значение value, либо список значений, разделенных дефисами, и первое значение в этом списке равно value</p></td><td><p>Например, выражение <code>$("a[class|='red']")</code> выбрать элементы ссылок, которые могут иметь следующее значение атрибута <code>class="red-freeStyle-closed"</code>.</p></td></tr>
</table>
<h3>Контекст селекторов</h3>
<p>Выше мы использовали такую запись для выборки элемента: $(селектор). Данное выражение просматривало все дерево DOM на соответствие элемента селектору. 
Однако мы можем ограничить поиск, применив контекст поиска. Контекст представляет собой селектор, в рамках которого наждо производить выборку элементов. 
Например, у нас есть такая веб-страница:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Мир jQuery&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div id="menu"&gt;
	&lt;p&gt;&lt;a href="1.html" class="open"&gt;Ссылка 1&lt;/a&gt;&lt;/p&gt;
	&lt;p&gt;&lt;a href="2.html" class="open"&gt;Ссылка 2&lt;/a&gt;&lt;/p&gt;
&lt;/div&gt;
&lt;p&gt;&lt;a href="3.html" class="open"&gt;Ссылка 3&lt;/a&gt;&lt;/p&gt;

&lt;script src="jquery-1.10.1.min.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript"&gt;
jQuery(document).ready(function(){

	$(".open", "div#menu").css('background-color', 'silver');
});
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>На странице у нас три ссылки, у всех у них определен один и тот же класс, но две из них находятся в элементе div и именно их мы хотим получить. 
Тогда мы используем выражение <code>$(".open", "div#menu")</code> - здесь второй параметр-селектор будет являться контекстом выборки. 
А результатом в данном случае будет следующая страница:</p>
<img src="pics/2.3.png" />
<p>Важно не путать это выражение с выборкой по множеству селекторов, например, <code>$(".open, div#menu ")</code> - это разные выражения, которые будут давать разный результат. </p>
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


<div class="nav"><p><a href="1.2.php">Назад</a><a href="./">Содержание</a><a href="2.2.php">Вперед</a></p></div></div>
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
				<li class="closed"><span class="folder">Глава 1. Введение в jQuery</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/jquery/1.1.php">Начало работы с jQuery</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/1.2.php">Функция jQuery</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 2. Выборка элементов</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/jquery/2.1.php">Cелекторы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/2.2.php">Фильтры jQuery</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/2.3.php">Работа с выборкой</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/2.4.php">Фильтрация выборки</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/2.5.php">Поиск в выборке</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/2.6.php">Навигация по странице</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 3. Манипуляция элементами в jQuery</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/jquery/3.1.php">Атрибуты и свойства элементов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/3.2.php">Изменение стилей CSS</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/3.3.php">Использование классов в jQuery</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/3.4.php">Содержимое элементов</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 4. Работа со структурой страницы</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/jquery/4.1.php">Создание и добавление дочерних элементов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/4.2.php">Обертывание элементов. Метод wrap</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/4.3.php">Добавление сестринских элементов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/4.4.php">Замена элементов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/4.5.php">Удаление элементов</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 5. События jQuery</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/jquery/5.1.php">Регистрация и удаление обработчиков событий</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/5.2.php">Параметры обработчика. Объект Event</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/5.3.php">Всплытие событий</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/5.4.php">Методы delegate и on</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/5.5.php">Метод trigger</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/5.6.php">Специальные методы для обработки событий</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 6. Технология AJAX</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.1.php">Введение в AJAX</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.2.php">Метод load</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.3.php">GET-запросы. Метод get</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.4.php">Объект jqXHR</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.5.php">POST-запросы. Метод post</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.6.php">Получение данных JSON. Метод getJSON</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.7.php">Подгрузка скриптов. Метод getScript</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.8.php">Низкоуровневые запросы. Метод ajax</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/6.9.php">Глобальные события ajax</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 7. Эффекты и анимация в jQuery</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/jquery/7.1.php">Базовые эффекты</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/7.2.php">Эффекты скольжения</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/7.3.php">Эффекты прозрачности</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/7.4.php">Создание анимации. Метод animate</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 8. jQuery UI</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/jquery/8.1.php">Введение в jQuery UI</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/8.2.php">Виджет button</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/8.3.php">Виджет progressbar</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/8.4.php">Виджет слайдер jQuery</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/8.5.php">Виджет Accordion</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/jquery/8.6.php">Виджет Autocomplete. Автозаполнение</a></span></li>
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
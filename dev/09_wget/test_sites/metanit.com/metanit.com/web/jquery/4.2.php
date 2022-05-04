<!DOCTYPE html>
<html >
<head>
<title>Обертывание элементов. Метод wrap</title>
<meta charset="utf-8" />
<meta name="description" content="Создание в jquery родительских элементов для уже существующих с помощью метода wrap и примеры его использования">
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
<h2>Обертывание элементов. Метод wrap</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>В предыдущем параграфе мы вставляли дочерние элементы в уже существующий элемент. Но также мы можем создать новый элемент и обернуть в него 
уже существующие. Для этого используется метод <code>wrap()</code> и похожие методы <code>wrapAll()</code> и <code>wrapInner()</code>. Например, 
нам может потребоваться обернуть некоторые элементы в новый элемент <code>div</code>. Для этого мы и прибегаем к вышеназванным методам.</p>
<h3>Метод wrap</h3>
<p>Метод wrap обертывает элементы выборки тем элементом, которые передается в качестве аргумента в данный метод. Он имеет следующие варианты использования:</p>
<ul>
<li><p><code>wrap('разметка html')</code>: обертывает элементы выборки в элемент, создаваемый из разметки html</p></li>
<li><p><code>wrap(элемент)</code>: обертывает элементы выборки в элемент html, переданный в качестве параметра</p></li>
<li><p><code>wrap('селектор')</code>: обертывает элементы выборки в элемент документа, соответствующий селектору</p></li>
<li><p><code>wrap(jQuery)</code>: обертывает элементы выборки в объект jQuery</p></li>
<li><p><code>wrap(функция)</code>: обертывает элементы выборки в объект, возвращаемый функцией</p></li>
</ul>
<p>Пусть у нас есть следующая разметка:</p>
<pre class="brush:xml;">
&lt;ul class="langs"&gt;
	&lt;li&gt;Java&lt;/li&gt;
	&lt;li&gt;C/C++&lt;/li&gt;
	&lt;li&gt;PHP&lt;/li&gt;
&lt;/ul&gt;
</pre>
<p>Обернем список с помощью метода wrap :</p>
<pre class="brush:js;">
	$('.langs').wrap('&lt;div class="redStyle"&gt;&lt;/div&gt;');
</pre>
<p>После этого разметка будет выглядеть следующим образом:</p>
<pre class="brush:xml;">
&lt;div class="redStyle"&gt;
&lt;ul class="langs"&gt;
	&lt;li&gt;Java&lt;/li&gt;
	&lt;li&gt;C/C++&lt;/li&gt;
	&lt;li&gt;PHP&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;
</pre>
<p>Подобным образом мы можем использовать и другие способы использования метода wrap:</p>
<pre class="brush:js;">
	var header = document.getElementById('header');
	$('.langs').wrap(header);
</pre>
<p>Обратите внимание, что в данном случае список вставляется не в существующий элемент, а просто существующий элемент клонируется, и в эту копию 
обертывается список.</p>
<h3>Метод wrapAll</h3>
<p>Для обертки всех элементов выборки как единого целого в один элемент используется метод <code>wrapAll</code>. Он имеет похожие варианты использования:</p>
<ul>
<li><p><code>wrapAll('разметка html')</code>: обертывает все элементы выборки в один элемент, создаваемый из разметки html</p></li>
<li><p><code>wrapAll(элемент)</code>: обертывает все элементы выборки в один элемент html, переданный в качестве параметра</p></li>
<li><p><code>wrapAll('селектор')</code>: обертывает все элементы выборки в один элемент, соответствующий селектору</p></li>
<li><p><code>wrapAll(jQuery)</code>: обертывает все элементы выборки в один объект jQuery</p></li>
</ul>
<p>Например, имеется следующая разметка:</p>
<pre class="brush:xml;">
&lt;div class="lang"&gt;Java&lt;/div&gt;
&lt;div class="lang"&gt;C/C++&lt;/div&gt;
&lt;div class="lang"&gt;PHP&lt;/div&gt;
</pre>
<p>Обернем все эти элементы в один элемент div:</p>
<pre class="brush:js;">
	$('.lang').wrapAll('&lt;div class="langs"&gt;&lt;/div&gt;');
</pre>
<p>После этого разметка будет выглядеть следующим образом:</p>
<pre class="brush:xml;">
&lt;div class="langs"&gt;
	&lt;div class="lang"&gt;Java&lt;/div&gt;
	&lt;div class="lang"&gt;C/C++&lt;/div&gt;
	&lt;div class="lang"&gt;PHP&lt;/div&gt;
&lt;/div&gt;
</pre>
<h3>Метод wrapInner</h3>
<p>Для обертки содержимого элементов в новый элемент служит метод <code>wrapInner</code>. Он имеет следующие варианты использования:</p>
<ul>
<li><p><code>wrapInner('разметка html')</code>: обертывает содержимое элементов выборки в элемент, создаваемый из разметки html</p></li>
<li><p><code>wrapInner(элемент)</code>: обертывает содержимое элементов выборки в элемент html, переданный в качестве параметра</p></li>
<li><p><code>wrapInner('селектор')</code>: обертывает содержимое элементов выборки в элемент документа, соответствующий селектору</p></li>
<li><p><code>wrapInner(jQuery)</code>: обертывает содержимое элементов выборки в объект jQuery</p></li>
<li><p><code>wrapInner(функция)</code>: обертывает содержимое элементов выборки в объект, возвращаемый функцией</p></li>
</ul>
<p>Исходная разметка будет выглядеть так:</p>
<pre class="brush:xml;">
&lt;ul&gt;
&lt;li class="lang"&gt;Java&lt;/li&gt;
&lt;li class="lang"&gt;C/C++&lt;/li&gt;
&lt;li class="lang"&gt;PHP&lt;/li&gt;
&lt;/ul&gt;
</pre>
<p>Обернем содержимое элементов списка в теги <code>&lt;p&gt;</code>:</p>
<pre class="brush:js;">
	$('li.lang').wrapInner('&lt;p&gt;&lt;/p&gt;');
</pre>
<p>Финальная разметка будет выглядеть так:</p>
<pre class="brush:xml;">
&lt;ul&gt;
	&lt;li class="lang"&gt;&lt;p&gt;Java&lt;/p&gt;&lt;/li&gt;
	&lt;li class="lang"&gt;&lt;p&gt;C/C++&lt;/p&gt;&lt;/li&gt;
	&lt;li class="lang"&gt;&lt;p&gt;PHP&lt;/p&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>
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


<div class="nav"><p><a href="4.1.php">Назад</a><a href="./">Содержание</a><a href="4.3.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 4.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
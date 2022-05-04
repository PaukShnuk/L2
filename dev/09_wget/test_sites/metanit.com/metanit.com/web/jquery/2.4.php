<!DOCTYPE html>
<html >
<head>
<title>Фильтрация выборки</title>
<meta charset="utf-8" />
<meta name="description" content="Фильтрация выборки jquery с помощью метода filter, исключение элементов через метод not, преобразование выборки и метод map, методы slice и has">
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
<h2>Фильтрация выборки</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Ранее мы говорили о фильтрах селекторов, которые помогают нам произвести более качественную выборку. В jQuery также присутствуют специальные 
методы, предназначенные для фильтрации, которые фактически имеют тот же самый эффект, что и фильтры селекторов.</p>
<h3>Метод filter</h3>
<p>Метод <code>filter(условие)</code> принимает в качестве параметра условие фильтрации. И если элементы выборки не соответствуют этому условию, 
то они исключаются из выборки. В зависимости от того, что представляет собой условие, данный метод имеет следующие варианты использования:</p>
<ul>
<li><p><code>filter(селектор)</code>: если объекты выборки не удовлетворяют селектору, то они исключаются</p></li>
<li><p><code>filter(элемент)</code>: если объекты выборки не представляют данный элемент html, то они исключаются</p></li>
<li><p><code>filter(jQuery)</code>: если объекты выборки не представляют данный объект jQuery, то они исключаются</p></li>
<li><p><code>filter(функция)</code>: для каждого элемента выборки вызывается функция, и если эта функция возвращает <code>false</code>, то элемент 
исключается из выборки</p></li>
</ul>
<p>Например, выберем все элементы с атрибутом <code>class="header"</code>, которые также являются элементами строк таблицы:</p>
<pre class="brush:js;">
$(function(){
	//Фильтрация по селектору
	var array = $(".header").filter("tr");
	array.css('background-color', 'silver');
	
	// Фильтрация по элементу html
	var elem = document.getElementsByTagName("tr")[0];
	var array1 = $(".header").filter(elem);
	array1.css('background-color', 'silver');
});
</pre>
<p>Данный вариант является аналогом выражения <code>$("tr.header")</code>, поэтому того же результата мы опять же можем добиться, скомбинировав селекторы.</p>
<p>Теперь посмотрим, как использовать функцию.</p>
<pre class="brush:js;">
$(function(){
	var array = $("tr").filter(function(){
		if($(this).hasClass("header")) { return true;}
		else {return false;}
	});
	array.css('background-color', 'silver');
});
</pre>
<p>Во-первых, функция вызывается для каждого элемента, а текущий элемент мы получаем с помощью выражения <code>$(this)</code>. Далее с помощью 
метода <code>hasClass("header")</code> мы определяем, содержит ли текущий элемент класс header. И если содержит, то возвращаем true.</p>
<h3>Метод not</h3>
<p>Противоположным по действию по сравнению с методом filter является метод <code>not</code>. Он исключает из выборки те элементы, которые соответствуют 
условию. Данный метод может иметь следующие варианты использования:</p>
<ul>
<li><p><code>not(селектор)</code>: если объекты выборки удовлетворяют селектору, то они исключаются</p></li>
<li><p><code>not(элемент)</code>: если объекты выборки представляют данный элемент html, то они исключаются</p></li>
<li><p><code>not(jQuery)</code>: если объекты выборки представляют данный объект jQuery, то они исключаются</p></li>
<li><p><code>not(функция)</code>: для каждого элемента выборки вызывается функция, и если эта функция возвращает <code>true</code>, то элемент 
исключается из выборки</p></li>
</ul>
<p>Например, мы можем в предыдущем примере заменить filter на метод not и тогда получим противоположный результат:</p>
<pre class="brush:js;">
$(function(){
	var array = $("tr").not(function(){
		if($(this).hasClass("header")) { return true;}
		else {return false;}
	});
	array.css('background-color', 'silver');
});
</pre>
<h3>Метод slice</h3>
<p>Метод <code>slice(begin, end)</code> исключает из выборки те элементы, которые не попадают в диапазон, задаваемый параметрами begin и end. 
Подразумевается, что индексация начинается с 0.
Негативные индексы означают, что выборка ведется с конца набора.
Необязательный параметр end задает позицию с которой выборка элементов уже прекращена,
если этот параметр отсутствует, то выборка ведется до конца набора:</p>
<pre class="brush:js;">
$(function(){
	var array = $("tr").slice(1,4);
	array.css('background-color', 'silver');
});
</pre>
<p>В данном случае итоговая выборка будет содержать 3 элемента tr.</p>
<p>Второй вариант функции slice предполагает задание одного параметра - начального индекса, с которого ведется выборка:</p>
<pre class="brush:js;">
$(function(){
	var array = $("tr").slice(3);
	array.css('background-color', 'silver');
});
</pre>
<p>В этом случае в выборку будут включены все объекты, начиная с 4-го.</p>
<h3>Метод has</h3>
<p>Метод <code>has(вложенный элемент)</code> проверяет объект на наличие вложенного элемента. И если объект содержит вложенный элемент, то этот 
объект остается в выборке. Он может иметь следующие варианты вызова:</p>
<ul>
<li><p><code>has(селектор)</code>: если объекты содержат элемент, соответствующий селектору, то они остаются в выборке</p></li>
<li><p><code>has(элемент)</code>: если объекты содержат данный элемент html, то они остаются в выборке</p></li>
</ul>
<p>Например, у нас на странице есть список с вложенными списками. И нам надо выделить тот элемент списка, который имеет вложенный список:</p>
<pre class="brush:xml;">
&lt;ul&gt;
	&lt;li&gt;Пункт 1&lt;/li&gt;
	&lt;li&gt;Пункт 2
		&lt;ul&gt;
			&lt;li&gt;Подпункт 2.1&lt;/li&gt;
			&lt;li&gt;Подпункт 2.2&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/li&gt;
	&lt;li&gt;Пункт 3&lt;/li&gt;
&lt;/ul&gt;
</pre>
<p>Тогда мы можем использовать следующее выражение: <code>$('li').has('ul').css('background-color', 'silver');</code></p>
<h3>Преобразование выборки и метод map</h3>
<p>Метод <code>map(callback)</code> предназначен для преобразования элементов выборки с помощью функции, которая передается в параметре <code>callback</code>. 
А данная функция отбирает элементы из имеющегося для нового набора и на выходе возвращает этот новый набор. Воспользуемся примером с вложенными списками:</p>
<pre class="brush:xml;">
&lt;ul&gt;
	&lt;li&gt;Пункт 1&lt;/li&gt;
	&lt;li&gt;Пункт 2
		&lt;ul&gt;
			&lt;li&gt;Подпункт 2.1&lt;/li&gt;
			&lt;li&gt;Подпункт 2.2&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/li&gt;
	&lt;li&gt;Пункт 3&lt;/li&gt;
&lt;/ul&gt;
</pre>
<p>Теперь отберем только те элементы, которые имеют вложенные списки:</p>
<pre class="brush:js;">
$(function(){

	var array = $('li').map(function(index,elem){
		return $(elem).children()[0];
	});
	
	array.each(function(index, elem){
		console.log(elem.innerHTML);
	});
	array.css('background-color', 'silver');
});
</pre>
<p>Функция, передаваемая в метод map, пробегает по всем элементам выборки и принимает два параметра: index - индекс перебираемого элемента 
в выборке и elem - сам перебираемый элемент. Получив текущий элемент при переборе, мы можем провести с ним некоторые манипуляции и определить, должен он или 
какие-то другие элементы попасть в новую выборку.</p>
<p>Так, в данном случае мы передаем перебираемый элемент в функцию jQuery, чтобы нам стали доступными методы jQuery, и получаем первый вложенный список: 
<code>$(elem).children()[0];</code> (метод children помогает получить вложенные или дочерние элементы).</p>
<p>Далее мы можем управлять результирующим набором так же, как и любой другой выборкой, например, перебирать, устанавливать свойства и т.д.</p>
<h3>Метод is</h3>
<p>Метод <code>is (условие)</code> определяет, имеются ли в данной выборке объекты, соответствующие условию. В зависимости от условия данный 
метод имеет следующие варианты использования:</p>
<ul>
<li><p><code>is(селектор)</code>: проверяет, соответствует ли хотя бы дин объект выборки селектору</p></li>
<li><p><code>is(элемент)</code>: проверяет, присутствует ли в выборке данный элемент html</p></li>
<li><p><code>is(jQuery)</code>: проверяет, присутствует ли в выборке данный объект jQuery</p></li>
<li><p><code>is(функция)</code>: поиск в выборке объектов, соответствующих данному элементу html</p></li>
</ul>
<p>На выходе метод is возвращает булевое значение: true, если хотя бы один элемент выборки соответствует условию, и false, если такого соответствия не найдено. Например, у нас есть такая разметка:</p>
<pre class="brush:xml;">
&lt;ul class="menu"&gt;
	&lt;li&gt;Пункт 1&lt;/li&gt;
	&lt;li&gt;Пункт 2
		&lt;ul class="submenu"&gt;
			&lt;li&gt;Подпункт 2.1&lt;/li&gt;
			&lt;li&gt;Подпункт 2.2&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/li&gt;
	&lt;li&gt;Пункт 3&lt;/li&gt;
&lt;/ul&gt;
</pre>
<p>Используем метод is:</p>
<pre class="brush:xml;">
	var lists = $('ul');
	if(lists.is('.submenu')){
		lists.css('background-color', 'silver');
	}
</pre>
<p>Поскольку один из элементов списка содержит вложенный подсписок с классом submenu, то метод is взвратит true, и, следовательно, весь 
список будет закрашен.</p>
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


<div class="nav"><p><a href="2.3.php">Назад</a><a href="./">Содержание</a><a href="2.5.php">Вперед</a></p></div></div>
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
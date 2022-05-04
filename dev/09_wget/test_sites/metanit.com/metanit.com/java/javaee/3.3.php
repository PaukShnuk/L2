<!DOCTYPE html>
<html >
<head>
<title>Java EE | Основы синтаксиса JSP</title>
<meta charset="utf-8" />
<meta name="description" content="Основы синтаксиса Java Server Pages, скриплеты и определения методов">
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
<h2>Основы синтаксиса JSP</h2><div class="date">Последнее обновление: 04.09.2018</div>

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

<p>Содержимое страницы JSP фактически делится на код html (а также css/javascript) и код на языке java. Для вставки кода Java на страницу 
JSP можно использовать пять основных элементов:</p>
<ul>
<li><p>Выражения JSP (JSP Expression)</p></li>
<li><p>Скриплет JSP (JSP Scriplet)</p></li>
<li><p>Объявления JSP (JSP Declaration)</p></li>
<li><p>Директивы JSP (JSP Directive)</p></li>
<li><p>Комментарии JSP</p></li>
</ul>
<h3>JSP Expression</h3>
<p>JSP Expression представляет выражение, заключенное между тегами <code>&lt;%=</code> и <code>%&gt;</code>. При обращении к JSP вычисляется 
значение этого выражения.</p>
<p>Например, определим следующую страницу JSP:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8" /&gt;
        &lt;title&gt;First JSP App&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
		&lt;p&gt;2 + 2 = &lt;%= 2 + 2 %&gt;&lt;/p&gt;
		&lt;p&gt;5 &gt; 2 = &lt;%= 5 &gt; 2 %&gt;&lt;/p&gt;
		&lt;p&gt;&lt;%= new String("Hello").toUpperCase() %&gt;&lt;/p&gt;
        &lt;p&gt;Today &lt;%= new java.util.Date() %&gt;&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Здесь используются четыре JSP-выражения. Первое выражение - простая арифметическая операция сложения. При обработке страницы вместо </p>
<pre class="brush:xml;">&lt;p&gt;2 + 2 = &lt;%= 2 + 2 %&gt;&lt;/p&gt;</pre>
<p>будет сгенерирована следующая html-разметка:</p>
<pre class="brush:xml;">&lt;p&gt;2 + 2 = 4&lt;/p&gt;</pre>
<p>Второе выражение - операция сравнения во многом аналогична. Третье выражение - создание объекта String и вызов у него 
метода <code>toUpperCase()</code>, который возвращает строку в верхнем регистре. То есть выражение также может представлять вызов метода.</p>
<p>И четвертое выражение - вызов конструктора класса Date, который создает объект с текущей датой.</p>
<p>Когда придет запрос к этой странице, из нее будет сгенерирован следующий код:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8" /&gt;
        &lt;title&gt;First JSP App&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
		&lt;p&gt;2 + 2 = 4&lt;/p&gt;
		&lt;p&gt;5 &gt; 2 = true&lt;/p&gt;
		&lt;p&gt;HELLO&lt;/p&gt;
        &lt;p&gt;Today Fri Aug 31 11:37:26 MSK 2018&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>И соответственно эту страницу мы увидим в браузере:</p>
<img src="pics/jsp11.png" alt="JSP Expression" />

<h3>JSP Scriplet</h3>
<p>JSP Scriplet представляет одну или несколько строк на языке Java. Скриплет заключается внутри следующих тегов:</p>
<pre class="brush:xml;">
&lt;% 
	код Java
%&gt;
</pre>
<p>Например, определим следующую страницу JSP:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8" /&gt;
        &lt;title&gt;First JSP App&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
		&lt;%
			for(int i = 1; i &lt; 5; i++){
				out.println("&lt;br&gt;Hello " + i);
			}
		%&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>В данном случае скриплет представляет цикл for, в котором генерируется вывод с помощью метода <code>out.println()</code>. 
В итоге в браузере будет выведено четыре разо слово Hello с соответствующей цифрой:</p>
<img src="pics/jsp12.png" alt="JSP Scriplet" />
<p>Другой пример - определим переменную и массив и выведим их содержимое на страницу:</p>
<pre class="brush:xml;">
&lt;%
	String[] people = new String[]{"Tom", "Bob", "Sam"};
	String header = "Users list";
%&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8" /&gt;
        &lt;title&gt;First JSP App&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
		&lt;h3&gt;&lt;%= header %&gt;&lt;/h3&gt;
		&lt;ul&gt;
		&lt;%
			for(String person: people){
				out.println("&lt;li&gt;" + person + "&lt;/li&gt;");
			}
		%&gt;
		&lt;/ul&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>В скриплете в начале страницы определяются две переменных - переменная типа String и массив строк. С помощью второго скриплета содержимое 
массива через цикл for выводится на страницу.</p>
<img src="pics/jsp13.png" />
<h3>JSP Declaration</h3>
<p>JSP Declaration позволяют определить метод, который мы затем можем вызывать в скриплетах или в JSP-выражениях. Определение метода 
помещается между тегами <code>&lt;%!</code> и <code>%&gt;</code>. Например, определим следующую JSP-страницу:</p>
<pre class="brush:xml;">
&lt;%!
	int square(int n){
		return n * n;
	}
%&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8" /&gt;
        &lt;title&gt;First JSP App&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
		&lt;p&gt;&lt;%= square(6) %&gt;&lt;/p&gt;
		&lt;ul&gt;
		&lt;%
			for(int i = 1; i &lt;= 5; i++){
				out.println("&lt;li&gt;" + square(i) + "&lt;/li&gt;");
			}
		%&gt;
		&lt;/ul&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>В данном случае метод square возвращает квадрат числа. Затем этот метод используется в выражении JSP и в скриплете в цикле for.</p>
<img src="pics/jsp14.png" alt="JSP Declaration" />
<h3>Директивы</h3>
<p>Директивы предназначены для установки условий, которые применяются ко всей странице JSP. Наиболее используемая директива - это директива 
<span class="b">page</span>. Например, с помощью атрибута <span class="b">import</span> этой директивы мы можем импортировать пакеты или отдельные классы на страницу jsp.</p>
<p>Например, в первом коде статьи для вывода даты использовалось выражение <code>new java.util.Date()</code>. Но мы можем использовать данное выражение на странице 
многократно, либо использовать другие классы из пакета java.util. И в этом случае мы можем испортировать нужные нам классы или пакеты:</p>
<pre class="class:java;">&lt;%@ page import="java.util.Data" %&gt;</pre>
<p>Импорт всего пакета:</p>
<pre class="class:java;">&lt;%@ page import="java.util.*" %&gt;</pre>
<p>Если необходимо импортировать несколько классов и(или) пакетов, то они перечисляются через запятую:</p>
<pre class="class:java;">&lt;%@ page import="java.util.Data, java.text.*" %&gt;</pre>
<p>Другой полезный и часто используемый атрибут - <span class="b">pageEncoding</span>, который задает кодировку jsp. Например:</p>
<pre class="brush:xml;">
&lt;%@ page import="java.util.Date" pageEncoding="UTF-8" %&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="UTF-8"&gt;
&lt;title&gt;JSP Application&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h2&gt;Сегодня: &lt;%= new Date() %&gt;&lt;/h2&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<img src="pics/jsp26.png" alt="Кодировка в JSP" />
<h3>Комментарии</h3>
<p>Комментарии JSP добавляются с помощью тега <code><%-- Текст_комментария --%></code>:</p>
<pre class="brush:xml;">
&lt;%-- Первое приложение на JSP --%&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8" /&gt;
        &lt;title&gt;First JSP App&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
    	&lt;h2&gt;Hello&lt;/h2&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>При этом внутри скриплета мы можем использовать стандартные для языка Java комментарии:</p>
<pre class="brush:java;">
&lt;%
	/* 
		Пример цикла
		в JSP
	*/
	// вывод строки Hello четыре раза
	for(int i = 1; i &lt; 5; i++){
		out.println("&lt;br&gt;Hello " + i);
}
%&gt;
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


<div class="nav"><p><a href="3.2.php">Назад</a><a href="./">Содержание</a><a href="3.4.php">Вперед</a></p></div></div>
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
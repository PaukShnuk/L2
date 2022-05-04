<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core MVC и C# | LinkTagHelper и ScriptTagHelper</title>
<meta charset="utf-8" />
<meta name="description" content="Подключение скриптов и стилей в ASP.NET Core MVC и C#  с помощью tag-хелперов LinkTagHelper и ScriptTagHelper, asp-fallback-src">
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
<h2>LinkTagHelper и ScriptTagHelper</h2><div class="date">Последнее обновление: 03.04.2022</div>

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

<p>Для подключения файлов скриптов применяется тег-хэлпер <span class="b">ScriptTagHelper</span>. Данный тег может принимать ряд следующих атрибутов:</p>
<ul>
<li><p><span class="b">asp-append-version</span>: если имеет значение true, то к пути к файлу скрипта добавляется номер версии</p></li>
<li><p><span class="b">asp-fallback-src</span>: указывает вспомогательный путь к скрипту, который используется, если загрузка скрипта, указанного 
в атрибуте <code>src</code> пройдет неудачно</p></li>
<li><p><span class="b">asp-fallback-test</span>: определяет выражение, которое тестирует загрузку основного скрипта из атрибута src</p></li>
<li><p><span class="b">asp-src-include</span>: определяет шаблон подключаемых файлов, через запятую можно задать несколько шаблонов</p></li>
<li><p><span class="b">asp-src-exclude</span>: определяет через запятую набор шаблонов для тех файлов, которые следует исключить из загрузки</p></li>
<li><p><span class="b">asp-fallback-src-include</span>: определяет через запятую набор шаблонов файлов, которые подключаются в том случае, если загрузка основного скрипта из атрибута src 
прошла неудачно</p></li>
<li><p><span class="b">asp-fallback-src-exclude</span>: определяет через запятую набор шаблонов файлов, которые следует исключить из загрузки 
в том случае, если загрузка основного скрипта из атрибута src прошла неудачно</p></li>
</ul>
<p>Например, можно определить следующий тег:</p>
<pre class="brush:xml;">
&lt;script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-2.2.0.min.js"
        asp-fallback-src="~/lib/jquery/dist/jquery.min.js"
        asp-fallback-test="window.jQuery"
        crossorigin="anonymous"
        integrity="sha384-K+ctZQ+LL8q6tP7I94W+qzQsfRV2a+AfHIi9k8z8l9ggpc8X+Ytst4yBo/hH+8Fk"&gt;
&lt;/script&gt;
</pre>
<p>Данный элемент представляет не просто стандартный тег script, но  и класс тег-хэлпера ScriptTagHelper. Атрибут <span class="b">src</span> 
указывает на скрипт, который мы хотим подключить. Логично подключать скрипты из CDN, чтобы сократить нагрузку на собственный сайт. 
Но CDN может не работать, например, произойдет какой-то временный сбой, и чтобы определить, что скрипт загружен, применяется атрибут 
<span class="b">asp-fallback-test</span>. Он тестирует загрузку с помощью выражения <code>window.jQuery</code>. Если объект <code>window.jQuery</code> определен, 
то загрузка скрипта прошла успешно. Если же нет, то загружается скрипт, который указан в атрибуте <span class="b">asp-fallback-src</span>.</p>
<p>Рассмотрим другие атрибуты. Допустим, у нас в проекте в папке <span class="b">wwwroot/js</span> определено четыре скрипта и подпапка util с двумя скриптами:</p>
<img src="./pics/7.4.png" alt="scripttagbuilder и подключение скриптов javascript in ASP.NET Core MVC и C#" />
<p>Убедимся, что в файле <span class="b">Program.cs</span> подключено middleware для работы со статическими файлами:</p>
<pre class="brush:c#;">app.UseStaticFiles();</pre>
<p>Теперь подключим все скрипты в представлении:</p>
<pre class="brush:xml;">
&lt;script asp-src-include="~/js/**/*.js"&gt;&lt;/script&gt;
</pre>
<p>Атрибут <code>asp-src-include</code> принимает шаблон, который в данном случае показывает, что подключаться будут все скрипты в 
папке js, а также во всех ее подпапках. Если бы нам надо было подключить скрипты непосредственно из каталога js без учета подкаталогов, 
то мы могли бы использовать следующий шаблон: "~/js/*.js". В итоге вместо этого элемента на веб-странице будут подключены все скрипты:</p>
<pre class="brush:xml;">
&lt;script src="/js/script1.js"&gt;&lt;/script&gt;
&lt;script src="/js/script2.js"&gt;&lt;/script&gt;
&lt;script src="/js/script3.js"&gt;&lt;/script&gt;
&lt;script src="/js/site.js"&gt;&lt;/script&gt;
&lt;script src="/js/util/utilscript1.js"&gt;&lt;/script&gt;
&lt;script src="/js/util/utilscript2.js"&gt;&lt;/script&gt;
</pre>
<p>Теперь изменим задачу. Допустим, нам надо подключить все скрипты из папки js и всех ее подпапок, кроме подпапки util:</p>
<pre class="brush:xml;">
&lt;script asp-src-include="~/js/**/*.js" asp-src-exclude="~/js/util/**/*.js"&gt;&lt;/script&gt;
</pre>
<p>Шаблон в атрибуте <code>asp-src-exclude</code> предотвращает подключение скриптов из папки js/util и всех ее подпапок.</p>
<h4>Определение шаблона</h4>
<p>Для создания шаблона мы можем применять следующие символы подстановки:</p>
<ul>
<li><p><span class="b">?</span>: заменяет любой одиночный символ за исключением слеша.</p>
<p>Например выражение <code>js/script?.js</code> будет соответствовать таким файлам как <code>js/script1.js</code> или <code>js/scriptX.js</code>, 
но не <code>js/script35.js</code></p></li>
<li><p><span class="b">*</span>: заменяет любое количество символов за исключением слеша.</p>
<p>Например выражение <code>js/*.js</code> будет соответствовать таким файлам как <code>js/script.js</code> или <code>js/scriptX25.js</code>, 
но не <code>js/bootstrap/script.js</code></p></li>
<li><p><span class="b">**</span>: заменяет любое количество символов, в том числе и слеш.</p>
<p>Например выражение <code>js/**/script.js</code> будет соответствовать таким файлам как <code>js/script.js</code> или <code>js/bootstrap/script.js</code>, 
но не <code>js/script35.js</code></p></li>
</ul>
<h3>LinkTagHelper</h3>
<p>Класс LinkTagHelper определяет тег <code>link</code>, который используется для подключения файлов стилей. Он применяет следующие атрибуты:</p>
<ul>
<li><p><span class="b">asp-append-version</span>: если имеет значение true, то к пути к названию файла стиля добавляется номер версии</p></li>
<li><p><span class="b">asp-fallback-href</span>: указывает вспомогательный путь к файлу стиля, который используется, если загрузка 
файла, указанного в атрибуте <code>href</code> пройдет неудачно</p></li>
<li><p><span class="b">asp-fallback-test-class</span>: определяет класс, который используется для теста загрузки стиля из атрибута href</p></li>
<li><p><span class="b">asp-fallback-test-property</span>: определяет свойство, которое используется для тестирования загрузки стиля из атрибута href</p></li>
<li><p><span class="b">asp-fallback-test-value</span>: определяет значение свойства из атрибута asp-fallback-test-property, которое используется для теста загрузки стиля из атрибута href</p></li>
<li><p><span class="b">asp-href-include</span>: определяет через запятую набор шаблонов подключаемых файлов стилей</p></li>
<li><p><span class="b">asp-href-exclude</span>: определяет через запятую набор шаблонов для тех файлов, которые следует исключить из загрузки</p></li>
<li><p><span class="b">asp-fallback-href-include</span>: определяет через запятую набор шаблонов файлов, которые подключаются в том случае, если загрузка основного файла стиля из атрибута href 
прошла неудачно</p></li>
<li><p><span class="b">asp-fallback-href-exclude</span>: определяет через запятую набор шаблонов файлов, которые следует исключить из загрузки 
в том случае, если загрузка основного файла стиля из атрибута href прошла неудачно</p></li>
</ul>
<p>Например, подключим библиотеку bootstrap:</p>
<pre class="brush:xml;">
&lt;link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/4.3.0/css/bootstrap.min.css"
                  asp-fallback-href="~/lib/bootstrap/dist/css/bootstrap.min.css"
                  asp-fallback-test-class="hidden" asp-fallback-test-property="visibility" asp-fallback-test-value="hidden" /&gt;
</pre>
<p>Здесь атрибут <code>href</code> указывает на файл стилей фреймворка bootstrap, который располагается в CDN. Если веб-браузер не сможет загрузить данный файл, 
то загружается локальный файл стилей, путь к которому указан в атрибуте <code>asp-fallback-href</code>. Чтобы протестировать, что 
файл стилей из атрибута <code>href</code> нормально загрузился, используются атрибуты <code>asp-fallback-test-class</code>, 
<code>asp-fallback-test-property</code> и <code>asp-fallback-test-value</code>.</p>
<p>В конечном счете этот элемент будет генерировать следующий код, который будет включен на веб-страницу:</p>
<pre class="brush:xml;">
&lt;link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/bootstrap/3.0.0/css/bootstrap.min.css" /&gt;
&lt;meta name="x-stylesheet-fallback-test" class="hidden" /&gt;
&lt;script&gt;!function(a,b,c){var d,e=document,f=e.getElementsByTagName("SCRIPT"),g=f[f.length-1].previousElementSibling,h=e.defaultView&&e.defaultView.getComputedStyle?e.defaultView.getComputedStyle(g):g.currentStyle;if(h&&h[a]!==b)for(d=0;d&lt;c.length;d++)e.write('&lt;link rel="stylesheet" href="'+c[d]+'"/&gt;')}("visibility","hidden",["\/lib\/bootstrap\/dist\/css\/bootstrap.min.css"]);&lt;/script&gt;
</pre>
<p>Для подключения множества файлов стилей из определенного каталога мы можем использовать атрибут <code>asp-href-include</code>:</p>
<pre class="brush:xml;">
&lt;link asp-href-include="~/css/**/*.css" /&gt;
</pre>
<p>В данном случае подключаются все файлы css из каталога <span class="b">wwwroot/css</span> и всех его подкаталогов:</p>
<img src="./pics/7.5.png" alt="Класс LinkTagHelper и подключение стилей css в ASP.NET Core MVC и C#" />
<p>Если нам надо исключить какие-то файлы, то мы можем использовать атрибут <code>asp-href-exclude</code>:</p>
<pre class="brush:xml;">
&lt;link asp-href-include="~/css/**/*.css" asp-href-exclude="~/css/mystyles/**/*.css" /&gt;
</pre>
<p>Здесь предотвращается подключение стилей из папки wwwroot/css/mystyles.</p>
<h3>Cache busting</h3>
<p>При работе со статическими файлами, в частности, со стилями css и скриптами js мы можем столкнуться со следующей проблемой. Допустим, у нас есть 
файл стиля <span class="ii">styles.css</span>. Для увеличения производительности подобные статические файлы часто кэшируются на стороне клиента. А это значит, 
что браузеру достаточно один раз за определенный период получить файл и затем при обращении к сайту он будет брать этот файл из кэша. Однако если мы внесем 
в файл styles.css какие-то изменения, то браузер по прежнему будет брать данный файл из кэша и будет использовать старые данные, пока не закончится период кэширования.</p>
<p>Для решения этой проблемы мы можем использовать в ScriptTagHelper и LinkTagHelper параметр <span class="b">asp-append-version</span>:</p>
<pre class="brush:xml;">
&lt;link rel="stylesheet" href="~/css/site.css" asp-append-version="true" /&gt;
</pre>
<p>После обработки запроса будет сгенерирован элемент наподобие следующего:</p>
<pre class="brush:xml;">&lt;link rel="stylesheet" href="/css/site.css?v=1wp5zz4e-mOPFx4X2O8seW_DmUtePn5xFJk1vB7JKRc"&gt;</pre>
<p>К пути к файлу после его имени добавляется параметр <code>?v=</code>, который указывает на версию файла. Если мы внесем изменения в файл, версия изменится. 
Соответственно даже если файл и был закэширован ранее в браузере, то смена версии позволит использовать уже новую версию файла.</p>

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


<div class="nav"><p><a href="./7.2.php">Назад</a><a href="./">Содержание</a><a href="./7.4.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в ASP.NET Core MVC</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/1.1.php">Фреймворк ASP.NET Core MVC</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/1.2.php">Первый проект на ASP.NET Core MVC</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/1.3.php">Добавление MVC в пустой проект</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Контроллеры</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.1.php">Контроллеры и их действия</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.2.php">Контекст контроллера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.3.php">Передача данных в контроллер через строку запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.4.php">Передача данных в контроллер через формы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.5.php">Результаты действий</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.6.php">ContentResult и JsonResult</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.7.php">Переадресация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.8.php">Отправка статусных кодов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.9.php">Отправка файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.10.php">Передача зависимостей в контроллер</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.11.php">Переопределение контроллеров</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Представления</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.1.php">Введение в представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.2.php">Движок представлений Razor</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.3.php">Передача данных в представление</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.4.php">Мастер-страницы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.5.php">Файл _ViewImports.cshtml</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.6.php">Частичные представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.7.php">Внедрение зависимостей в представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.8.php">Работа с формами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.9.php">Создание движка представлений</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Маршрутизация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/4.1.php">Добавление маршрутизации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/4.2.php">Определение маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/4.3.php">Атрибуты маршрутизации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/4.4.php">Области</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Модели</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/5.1.php">Модели в ASP.NET Core MVC</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/5.2.php">Введение в определение и применение моделей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/5.3.php">Привязка модели</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/5.4.php">Управление привязкой</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/5.5.php">Создание привязчика модели</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. HTML-хелперы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.1.php">Создание HTML-хелперов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.2.php">HTML-хелперы элементов форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.3.php">Строго типизированные хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.4.php">Шаблонные хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.5.php">Генерация ссылок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.6.php">URL-хелперы</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Tag-хелперы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.1.php">Введение в tag-хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.2.php">AnchorTagHelper. Создание ссылок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.3.php">LinkTagHelper и ScriptTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.4.php">Tag-хелперы форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.5.php">EnvironmentTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.6.php">CacheTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.7.php">Создание tag-хелперов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.8.php">Управление выводом tag-хелпера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.9.php">Контекст хелпера и получение зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.10.php">Атрибут HtmlTargetElement</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.11.php">Tag-хелперы и сложные объекты и коллекции</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 8. View Component</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/8.1.php">Определение компонента представлений</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/8.2.php">Передача данных в View Component</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/8.3.php">Генерация контента в View Component</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/8.4.php">ViewComponentResult и представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/8.5.php">ViewComponentContext</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 9. Метаданные и валидация модели</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.1.php">Валидация модели на стороне сервера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.2.php">Валидация на стороне клиента</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.3.php">Атрибуты валидации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.4.php">Tag-хелперы валидации и стилизация ошибок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.5.php">Создание атрибута валидации. Самовалидация модели</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.6.php">Аннотации данных</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 10. Фильтры</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.1.php">Введение в фильтры</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.2.php">Область действия фильтров</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.3.php">Передача параметров в фильтры и установка зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.4.php">Фильтры ресурсов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.5.php">Фильтры действий</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.6.php">Фильтры результатов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.7.php">Фильтры исключений</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 11. Работа с данными в Entity Framework</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.1.php">Подключение Entity Framework Core</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.2.php">Добавление и вывод данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.3.php">Редактирование и удаление данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.4.php">Сортировка</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.5.php">Создание tag-хелпера сортировки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.6.php">Фильтрация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.7.php">Постраничная навигация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.8.php">Tag-хелпер для постраничной навигации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.9.php">Объединение сортировки, фильтрации и пагинации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.10.php">Tag-хелпер пагинации с сортировкой и фильтрацией</a></span></li>
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
	
	$("li:contains('Глава 7.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 7.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
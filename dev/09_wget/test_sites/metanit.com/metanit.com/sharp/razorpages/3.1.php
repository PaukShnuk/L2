<!DOCTYPE html>
<html >
<head>
<title>Razor Pages и C# | Мастер-страницы layout</title>
<meta charset="utf-8" />
<meta name="description" content="Мастер-страницы layout в Razor Pages в ASP.NET Core и C#, создание единообразного вида приложения, секции section на страницах">
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
<h1>Определение пользовательского интерфейса</h1><h2>Мастер-страницы layout</h2><div class="date">Последнее обновление: 18.04.2022</div>

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

<p>Файлы <span class="b">layout</span> или мастер-страницы позволяют определить единый шаблон для страниц Razor и применяются для создания единообразного,
 унифицированного вида приложения. Для определения интерфейса мастер-страницы также применяют код Razor и html, как обычные страницы razor, но при этом упрощают создание приложения. 
Например, можно определить на мастер-странице общие для всех остальных страниц Razor меню и другие элементы, а также 
подключить общие стили и скрипты. В итоге нам не придется на каждой отдельной странице прописывать путь к файлам стилей, а потом при 
необходимости его изменять.</p>
<p>Например, у нас есть страница Razor <span class="b">Index.cshtml</span> и код связанной модели IndexModel в файле <span class="b">Index.cshtml.cs</span>:</p>
<img src="./pics/2.13.png" alt="OnGet и OnPost в Razor Page в ASP.NET Core и C#" />
<p>Создадим в папке <span class="b">Pages</span> новый каталог, который назовем <span class="b">Shared</span>. Далее добавим в этот каталог добавим новый файл, 
который назовем <span class="b">_Layout.cshtml</span>. Для добавления мастер-страниц в Visual Studio можно использовать шаблон файла <span class="b">Razor Layout</span>:</p>
<img src="./pics/3.1.png" alt="Razor Layout в Razor Pages в ASP.NET Core и C#" />
<p>После добавления файла <span class="b">_Layout.cshtml</span> изменим его код следующим образом:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta name="viewport" content="width=device-width" /&gt;
    &lt;title&gt;METANIT.COM | @ViewBag.Title&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h2&gt;@ViewBag.Title&lt;/h2&gt;
    &lt;div&gt;&lt;a href="/"&gt;Home&lt;/a&gt; | &lt;a href="About"&gt;About&lt;/a&gt;&lt;/div&gt;
    &lt;div&gt;
        @RenderBody()
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Код мастер-страницы напоминает полноценную веб-страницу: здесь присутствуют основные теги <code>&lt;html&gt;</code>, <code>&lt;head&gt;</code>, 
<code>&lt;body&gt;</code> и так далее. И также здесь могут использоваться конструкции Razor. Например, через выражение 
<code>@ViewBag.Title</code> из каждой отдельной страницы Razor будет передаваться значение для заголовка веб-страницы.</p>
<p>Отличительной особенностью файлов layout является использование метода <span class="b">@RenderBody()</span>. Этот метод будет вставлять содержимое страниц Razor, 
которые используют данную мастер-страницу. В итоге мы сможем легко установить для 
всех страниц единообразный стиль оформления.</p>
<p>Теперь определим папке <span class="b">Pages</span> следующую страницу <span class="b">Index.cshtml</span>:</p>
<pre class="brush:c#;">
@page

@{
    ViewBag.Title = "Index";
    Layout = "/Pages/Shared/_Layout.cshtml";
}
&lt;h3&gt;Index Content&lt;/h3&gt;
</pre>
<p>Здесь задается значение <code>ViewBag.Title</code>, которое применяется на мастер-странице для вывода заголовка.</p>
<p>Кроме того, с помощью свойства <span class="b">Layout</span> устанавливается используемая мастер-страница layout. В данном случае это файл по пути <span class="ii">/Pages/Shared/_Layout.cshtml</span></p>
<p>Также добавим в папку <span class="b">Pages</span> новую страницу <span class="b">About.cshtml</span> со следующим кодом:</p>
<pre class="brush:c#;">
@page

@{
    ViewBag.Title = "About";
    Layout = "/Pages/Shared/_Layout.cshtml";
}
&lt;h3&gt;About Content&lt;/h3&gt;
</pre>
<p>Оно выглядит аналогично странице Index.cshtml.</p>
<p>В итоге весь проект будет выглядеть следующим образом:</p>
<img src="./pics/3.2.png" alt="страницы Razor Pages и layout в ASP.NET Core и C#" />
<p>Запустим проект и в браузере при обращении к обоим страницам Razor мы лицезреем в браузере единообразую веб-страницу:</p>
<img src="./pics/3.3.png" alt="подключение layout в страницы Razor pages ASP.NET Core и C#" />
<p>При необходимости мы можем определять одни и те же или разные мастер-страницы для разных страниц Razor.</p>
<h3>_ViewStart.cshtml</h3>
<p>Хотя выше приведенный код вполне успешно работает, у нас есть одна проблема - мы сталкиваемся с необходимостью на каждой странице явным образом прописывать, какую мастер-страницу 
layout будет применять страницы. Чтобы упростить данное действие, можно применять файлы <span class="b">_ViewStart.cshtml</span></p>
<p>Итак, добавим в папку <span class="b">Pages</span> новый файл, которое назовем <span class="b">_ViewStart.cshtml</span>. Для этого можно использовать элемент 
<span class="b">Razor View Start</span>:</p>
<img src="./pics/3.4.png" alt="Razor View Start в ASP.NET Core и C#" />
<img src="./pics/3.5.png" alt="_ViewStart.cshtml в ASP.NET Core Razor Pages и C#" />
<p>Код этого файла добавляется в самое начало кода преставлений при их запуске. Определим в файле <span class="b">_ViewStart.cshtml</span> следующий код (в принципе этот же код должен быть в добавляемом файле по умолчанию):</p>
<pre class="brush:c#;">
@{
    Layout = "_Layout";
}
</pre>
<p>Когда будет происходить рендеринг страницы Razor, то система будет искать мастер-страницу _Layout по следующим путям:</p>
<pre>
/Pages/_Layout.cshtml
/Pages/Shared/_Layout.cshtml
</pre>
<p>Если в обеих папках: и в <span class="ii">/Pages</span>, и в <span class="ii">/Pages/Shared/</span> имеется файл с одинаковым 
именем, например, <code>_Layout.cshtml</code>, то к странице применяется файл, который находится с ним в одной папке как более приоритетный.</p>
<p>После определения этого файла мы можем удалить из страниц <span class="b">Index.cshtml</span> и <span class="b">About.cshtml</span> подключение мастер-страницы. 
Например, код страницы <span class="b">Index.cshtml</span>:</p>
<pre class="brush:c#;">
@page 

@{
    ViewBag.Title = "Index";
}
&lt;h3&gt;Index Content&lt;/h3&gt;
</pre>
<h3>Переопределение мастер-страницы</h3>
<p>Если вдруг мы хотим глобально по всему проекту поменять мастер-страницу на другой файл, который расположен в какой-то другой папке, например, в корне каталога Pages, то нам 
надо использовать полный путь к файлу в <span class="b">_ViewStart.cshtml</span>:</p>
<pre class="brush:c#;">
@{
    Layout = "~/Pages/Shared/_Layout.cshtml";
}
</pre>
<p>Код из <span class="ii">_ViewStart.cshtml</span> выполняется до любого кода на странице Razor.</p>
<p>Естественно также мы можем переопределить мастер-страницу на каждой отдельной странице с помощью свойства Layout.</p>
<pre class="brush:xml;">
@page 

@{
    ViewBag.Title = "Home Page";
    Layout = "~/Pages/Shared/_Layout.cshtml";
}
&lt;h2&gt;Страница Index.cshtml&lt;/h2&gt;
</pre>
<p>Мы можем вообще не использовать мастер-страницу, тогда на странице Razor свойству <code>Layout</code> надо присвоить значение <code>null</code>:</p>
<pre class="brush:xml;">
@page

@{
    Layout = null;
}

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta name="viewport" content="width=device-width" /&gt;
    &lt;title&gt;Home Page&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h2&gt;Страница Index.cshtml&lt;/h2&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Секции</h3>
<p>Кроме метода <code>RenderBody()</code>, который вставляет освновное содержимое страниц Razor, файлы layout также могут использовать специальный 
метод <code>RenderSection()</code> для вставки секций. Мастер-страница может иметь несколько секций, куда страницы Razor могут поместить свое содержимое. 
Например, добавим к мастер-странице <span class="b">_Layout.cshtml</span> секцию с именем "footer":</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta name="viewport" content="width=device-width" /&gt;
    &lt;title&gt;METANIT.COM | @ViewBag.Title&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h2&gt;@ViewBag.Title&lt;/h2&gt;
    &lt;div&gt;&lt;a href="/"&gt;Home&lt;/a&gt; | &lt;a href="About"&gt;About&lt;/a&gt;&lt;/div&gt;
    &lt;div&gt;
        @RenderBody()
    &lt;/div&gt;
    &lt;footer&gt;@RenderSection("Footer")&lt;/footer&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Теперь при запуске предыдущей страницы Index мы получим ошибку, так как секция Footer не определена. По умолчанию страница должна 
передавать содержание для каждой секции мастер-страницы. Поэтому добавим вниз страницы <span class="b">Index</span> секцию footer. Это мы можем сделать с помощью 
выражения <code>@section</code>:</p>
<pre class="brush:xml;">
@page

@{
    ViewBag.Title = "Index";
}
&lt;/h3&gt;Index Content&lt;/h3&gt;

@section Footer {
   Copyright© Metanit.com, @DateTime.Now.Year. All rights reserved
}
</pre>
<img src="./pics/3.6.png" alt="render section in layout на странице Razor Pages в ASP.NET Core и C#" />
<p>Но при таком подходе, если у нас есть куча страниц, и мы вдруг захотели определить новую секцию на мастер-странице, нам придется изменить все имеющиеся страницы Razor, 
что не очень удобно. В этом случае мы можем воспользоваться одним из вариантов гибкой настройки секций.</p>
<p>Первый вариант заключается в использовании перегруженной версии метода <span class="b">RenderSection</span>, которая позволяет указать, что 
данную секцию не обязательно определять на странице Razor. Чтобы отметить секцию <code>Footer</code> в качестве необязательной, надо передать в метод 
в качестве второго параметра значение <code>false</code>:</p>
<pre class="brush:xml;">&lt;footer&gt;@RenderSection("Footer", false)&lt;/footer&gt;</pre>
<p>Второй вариант позволяет задать содержание секции по умолчанию, если данная секция не определенана странице Razor:</p>
<pre class="brush:xml;">
&lt;footer&gt;
    @if (IsSectionDefined("Footer"))
    {
        @RenderSection("Footer")
    }
    else
    {
        &lt;span&gt;Содержание элемента footer по умолчанию.&lt;/span&gt;
    }
&lt;/footer&gt;
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


<div class="nav"><p><a href="./2.15.php">Назад</a><a href="./">Содержание</a><a href="./3.2.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в Razor Pages</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/1.1.php">Введение в Razor Pages. Первый проект</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/1.2.php">Добавление RazorPages в пустой проект</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Основы Razor Pages</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.1.php">Определение страниц Razor</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.2.php">Синтаксис Razor</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.3.php">>Модель страницы Razor</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.4.php">Обработка запросов. Контекст страницы Razor</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.5.php">Передача данных на страницу Razor в GET-запросе</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.6.php">POST-запросы и отправка форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.7.php">Привязка свойств страниц и моделей Razor к параметрам запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.8.php">Параметры маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.9.php">Обработчики страницы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.10.php">Возвращение результата</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.11.php">Отправка файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.12.php">Отправка статусных кодов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.13.php">Переадресация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.14.php">Передача зависимостей на страницу</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.15.php">ViewBag и ViewData</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Определение пользовательского интерфейса</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/3.1.php">Мастер-страницы layout</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/3.2.php">Файл _ViewImports.cshtml</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/3.3.php">Введение в tag-хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/3.4.php">Создание ссылок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/3.5.php">Работа с формами. Tag-хелперы форм</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Работа с базой данных через Entity Framework</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/4.1.php">Подключение к базе данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/4.2.php">Создание и вывод объектов из базы данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/4.3.php">Изменение и удаление в базе данных</a></span></li>
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
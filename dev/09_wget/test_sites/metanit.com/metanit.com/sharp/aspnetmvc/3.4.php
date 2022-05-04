<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core MVC и C# | Мастер-страницы layout</title>
<meta charset="utf-8" />
<meta name="description" content="Мастер-страницы layout и представления views ASP.NET Core MVC и C#, создание единообразного вида приложения, секции section в представлениях">
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
<h2>Мастер-страницы layout</h2><div class="date">Последнее обновление: 23.03.2022</div>

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

<p>Мастер-страницы или <span class="b">layout</span> пощволяют задать единый шаблон для представлений и применяются для создания единообразного,
 унифицированного вида сайта. По сути мастер-страницы - это те же самые представления, которе могут 
включать в себя другие представления. Например, можно определить на мастер-странице общие для всех остальных представлений меню, а также 
подключить общие стили и скрипты. В итоге нам не придется на каждом отдельном представлении прописывать путь к файлам стилей, а потом при 
необходимости его изменять. А специальные теги позволяют вставлять в определенное место на мастер-страницах другие представления.</p>
<p>Например, возьмем простейший проект ASP.NET Core по типу <span class="b">ASP.NET Core Empty</span>.</p>
<img src="./pics/1.6.png" alt="Подключение MVC в пустой проект ASP.NET Core" />
<p>Сначала в файле <span class="b">Program.cs</span> подключим функционал контроллеров и представлений:</p>
<pre class="brush:c#;">
var builder = WebApplication.CreateBuilder(args);

// добавляем поддержку контроллеров с представлениями
builder.Services.AddControllersWithViews();
var app = builder.Build();

// устанавливаем сопоставление маршрутов с контроллерами
app.MapControllerRoute(
    name: "default",
    pattern: "{controller=Home}/{action=Index}/{id?}");

app.Run();
</pre>
<p>Пусть в проекте будет папка <span class="b">Controllers</span>, где будет располагаться контроллер <span class="b">HomeController</span> с двумя методами:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc;

namespace MvcApp.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Index() =&gt; View();
        public IActionResult About() =&gt; View();
    }
}
</pre>
<p>Оба действия контроллера возвращают ViewResult. Поэтому нам надо добавить для них представления. Но в начале определим мастер-страницу layput.</p>
<p>Создадим в проекте папку <span class="b">Views</span>, а в ней создадим папку <span class="b">Shared</span>. Далее добавим в каталог <span class="b">Views/Shared</span> 
новое представление, которое назовем <span class="b">_Layout.cshtml</span>. Для добавления мастер-страниц в Visual Studio можно использовать шаблон файла <span class="b">Razor Layout</span>:</p>
<img src="./pics/3.12.png" alt="Razor Layout в ASP.NET Core MVC и C#" />
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
    &lt;div&gt;&lt;a href="/Home/Index"&gt;Home&lt;/a&gt; | &lt;a href="/Home/About"&gt;About&lt;/a&gt;&lt;/div&gt;
    &lt;div&gt;
        @RenderBody()
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Код мастер-страницы напоминает полноценную веб-страницу: здесь присутствуют основные теги <code>&lt;html&gt;</code>, <code>&lt;head&gt;</code>, 
<code>&lt;body&gt;</code> и так далее. И также здесь могут использоваться конструкции Razor. Фактически это то же самое представление. Например, через выраженеи 
<code>@ViewBag.Title</code> из каждого отдельного представления будет передаваться значение для заголовка веб-страницы.</p>
<p>Главное же отличие от обычных представлений состоит в использовании метода <span class="b">@RenderBody()</span>, который является плейсхолдером 
и на место которого потом будут подставляться другие представления, использующие данную мастер-страницу. В итоге мы сможем легко установить для 
всех представлений веб-приложения единообразный стиль оформления.</p>
<p>Теперь добавим в папку <span class="b">Views</span> новую папку <span class="b">Home</span> для хранения представлений контроллера HomeController. Далее в эту папку поместим 
новое представление <span class="b">Index.cshtml</span> (для метода Index):</p>
<pre class="brush:c#;">
@{
    ViewBag.Title = "Index";
    Layout = "/Views/Shared/_Layout.cshtml";
}
&lt;h3&gt;Index Content&lt;/h3&gt;
</pre>
<p>Здесь задается значение <code>ViewBag.Title</code>, которое применяется на мастер-странице для выводпа заголовка.</p>
<p>Кроме того, с помощью свойства <span class="b">Layout</span> устанавливается используемая мастер-страница layout. В данном случае это файл по пути <span class="ii">/Views/Shared/_Layout.cshtml</span></p>
<p>Также добавим в папку <span class="b">Views/Home</span> новое представление <span class="b">About.cshtml</span> (для метода About):</p>
<pre class="brush:c#;">
@{
    ViewBag.Title = "About";
    Layout = "/Views/Shared/_Layout.cshtml";
}
&lt;h3&gt;About Content&lt;/h3&gt;
</pre>
<p>Оно выглядит аналогично представлению Index.cshtml.</p>
<p>В итоге весь проект будет выглядеть следующим образом:</p>
<img src="./pics/3.13.png" alt="представления views и layout в ASP.NET Core MVC и C#" />
<p>Запустим проект и в браузере при обращении к обоим действиям контроллера - Index и About мы лицезреем в браузере единообразую веб-страницу:</p>
<img src="./pics/3.14.png" alt="подключение layout в представления ASP.NET Core MVC и C#" />
<p>При необходимости мы можем определять разные мастер-страницы, например, отдельные мастер-страницы для разных контроллеров, и таким образом подключать в конкретные представления.</p>
<h3>ViewStart</h3>
<p>Хотя выше приведенный код вполне успешно работает, у нас есть одна проблема - мы сталкиваемся с необходимостью в каждом представлении явным образом прописывать, какую мастер-страницу 
layout будет применять представление. Чтобы упростить данное действие, можно применять файлы <span class="b">_ViewStart.cshtml</span></p>
<p>Итак, добавим в папку <span class="b">Views</span> новое представление, которое назовем <span class="b">_ViewStart.cshtml</span>.</p>
<img src="./pics/3.15.png" alt="_ViewStart.cshtml в ASP.NET Core MVC и C#" />
<p>Код этого файла добавляется в самое начало кода преставлений при их запуске. При этом файлы представлений, к которым применяется  _ViewStart.cshtml, должны находиться с этим файлов в одном каталоге</p>
<p>Определим в файле <span class="b">_ViewStart.cshtml</span> следующий код:</p>
<pre class="brush:c#;">
@{
    Layout = "_Layout";
}
</pre>
<p>В каждом представлении через синтаксис Razor доступно свойство <span class="b">Layout</span>, которое хранит ссылку на мастер-страницу. 
Здесь в качестве мастер страницы устанавливается файл <span class="ii">_Layout.cshtml</span>. При этом расширение можно не использовать.</p>
<p>Когда будет происходить рендеринг представления, то система будет искать мастер страницу _Layout по следующим путям:</p>
<pre>
/Views/[Название_контроллера]/_Layout.cshtml
/Views/Shared/_Layout.cshtml
</pre>
<p>Если в обеих папках: и в <span class="ii">/Views/[Название_контроллера]</span>, и в <span class="ii">/Views/Shared/</span> имеется файл с одинаковым 
именем, например, <code>_Layout.cshtml</code>, то к представлению применяется файл, который находится с ним в одной папке как более приоритетный. 
То есть таким образом мы можем определить для представлений каждого отдельного контроллера или представлений, которые находятся в одной папке, свою отдельную мастер-страницу.</p>
<p>После определения этого файла мы можем удалить из представлений <span class="b">Index.cshtml</span> и <span class="b">About.cshtml</span> подключение мастер-страницы. 
Например, представление <span class="b">Index.cshtml</span>:</p>
<pre class="brush:c#;">
@{
    ViewBag.Title = "Index";
}
&lt;h3&gt;Index Content&lt;/h3&gt;
</pre>
<h3>Переопределение мастер-страницы</h3>
<p>Если вдруг мы хотим глобально по всему проекту поменять мастер-страницу на другой файл, который расположен в какой-то другой папке, например, в корне каталога Views, то нам 
надо использовать полный путь к файлу в <span class="b">_ViewStart.cshtml</span>:</p>
<pre class="brush:c#;">
@{
    Layout = "~/Views/_Layout.cshtml";
}
</pre>
<p>Код из <span class="ii">_ViewStart.cshtml</span> выполняется до любого кода в представлении. И чтобы переопределить мастер-страницу, в представлении доcтаточно установить 
свойство Layout.</p>
<p>Естественно также мы можем переопределить мастер-страницу в каждом отдельном представлении с помощью свойства Layout.</p>
<pre class="brush:xml;">
@{
    ViewBag.Title = "Home Page";
    Layout = "~/Views/Shared/_Layout.cshtml";
}
&lt;h2&gt;Представление Index.cshtml&lt;/h2&gt;
</pre>
<p>Мы можем вообще не использовать мастер-страницу, тогда в представлении свойству <code>Layout</code> надо присвоить значение <code>null</code>:</p>
<pre class="brush:xml;">
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
    &lt;h2&gt;Представление Index.cshtml&lt;/h2&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<h3>Секции</h3>
<p>Кроме метода <code>RenderBody()</code>, который вставляет освновное содержимое представлений, мастер-страниц может также использовать специальный 
метод <code>RenderSection()</code> для вставки секций. Мастер-страница может иметь несколько секций, куда представления могут поместить свое содержимое. 
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
    &lt;div&gt;&lt;a href="/Home/Index"&gt;Home&lt;/a&gt; | &lt;a href="/Home/About"&gt;About&lt;/a&gt;&lt;/div&gt;
    &lt;div&gt;
        @RenderBody()
    &lt;/div&gt;
    &lt;footer&gt;@RenderSection("Footer")&lt;/footer&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Теперь при запуске предыдущего представления Index мы получим ошибку, так как секция Footer не определена. По умолчанию представление должно 
передавать содержание для каждой секции мастер-страницы. Поэтому добавим вниз представления Index секцию footer. Это мы можем сделать с помощью 
выражения <code>@section</code>:</p>
<pre class="brush:xml;">
@{
    ViewBag.Title = "Index";
}
&lt;/h3&gt;Index Content&lt;/h3&gt;

@section Footer {
   Copyright© Metanit.com, @DateTime.Now.Year. All rights reserved
}
</pre>
<img src="./pics/3.16.png" alt="render section in layout в представлениях ASP.NET Core MVC и C#" />
<p>Но при таком подходе, если у нас есть куча представлений, и мы вдруг захотели определить новую секцию на мастер-странице, нам придется изменить все имеющиеся представления, что не очень удобно. В этом случае мы можем воспользоваться одним из вариантов гибкой настройки секций.</p>
<p>Первый вариант заключается в использовании перегруженной версии метода <span class="b">RenderSection</span>, которая позволяет указать, что 
данную секцию не обязательно определять в представлении. Чтобы отметить секцию <code>Footer</code> в качестве необязательной, надо передать в метод 
в качестве второго параметра значение <code>false</code>:</p>
<pre class="brush:xml;">&lt;footer&gt;@RenderSection("Footer", false)&lt;/footer&gt;</pre>
<p>Второй вариант позволяет задать содержание секции по умолчанию, если данная секция не определена в представлении:</p>
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


<div class="nav"><p><a href="./3.3.php">Назад</a><a href="./">Содержание</a><a href="./3.5.php">Вперед</a></p></div></div>
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
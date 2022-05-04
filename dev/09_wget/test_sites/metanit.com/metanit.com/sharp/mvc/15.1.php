<!DOCTYPE html>
<html >
<head>
<title>Бандлы и минификация</title>
<meta charset="utf-8" />
<meta name="description" content="Создание и применение бандлов скриптов и стилей в ASP.NET MVC, минификация скриптов и стилей, создание минимизированных версий скриптов, Microsoft AjaxMinifier">
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
<h1>Бандлы и минификация</h1>
<h2>Введение в бандлы и минификацию</h2><p style="color:red;">Данное руководство устарело. Актуальное руководство: <a href="https://metanit.com/sharp/aspnet5/">Руководство по ASP.NET Core</a></p><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>В ASP.NET MVC 4 была введена концепция бандлов, которая помогает организовать файлы скриптов и стилей более эффективным путем для снижения 
издержек при передаче клиенту. Посмотрим, что представляют собой бандлы.</p>
<p>В предыдущих версиях MVC мы могли стандартным образом подключать скрипты и стили, например:</p>
<pre class="brush:xml;">
&lt;head&gt;
    &lt;meta name="viewport" content="width=device-width" /&gt;
	&lt;link  type="text/css" rel="stylesheet" href="~/Content/Site.css" /&gt;
    &lt;script src="~/Scripts/jquery-1.7.1.js" type="text/javascript"&gt;&lt;/script&gt;
    &lt;title&gt;Index&lt;/title&gt;
&lt;/head&gt;
</pre>
<p>Фреймворк MVC для настройки путей предлагает нам использовать URL-хелперы:</p>
<pre class="brush:xml;">
&lt;head&gt;
    &lt;meta name="viewport" content="width=device-width" /&gt;
	&lt;link  type="text/css" rel="stylesheet" href="@Url.Content("~/Content/Site.css")" /&gt;
    &lt;script src="@Url.Content("~/Scripts/jquery-1.7.1.js")" type="text/javascript"&gt;&lt;/script&gt;
    &lt;title&gt;Index&lt;/title&gt;
&lt;/head&gt;
</pre>
<p>Использование бандлов представляет совсем другой подход к использованию скриптов и стилей. При создании нового проекта MVC4 по шаблону 
Basic или Internet Application функциональность бандлов уже по умолчанию включается в приложение. Если вы посмотрите на стандартный код мастер-страницы <i>_Layout.cshtml</i>, то увидите совсем  
иной способ подключения скриптов и стилей:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width" /&gt;
    &lt;title&gt;@ViewBag.Title&lt;/title&gt;
    @Styles.Render("~/Content/css")
    @Scripts.Render("~/bundles/modernizr")
&lt;/head&gt;
&lt;body&gt;
    @RenderBody()

    @Scripts.Render("~/bundles/jquery")
    @RenderSection("scripts", required: false)
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>В данном случае подключаются не конкретные скрипты и стили, а именно бандлы. С помощью хелпера <code>Styles.Render</code> подключаются бандлы 
стилей, а с помощью хелпера <code>Scripts.Render</code>. Эти хелперы принимают в качестве параметра имя бандла.</p>
<p>По умолчанию проекты MVC4 (исключая проекты Empty) уже содержат регистрацию бандлов - в файле <i>BundleConfig.cs</i>, который находится в папке 
<i>App_Start</i>:</p>
<pre class="brush:c#;">
using System.Web;
using System.Web.Optimization;

namespace Guestbook
{
    public class BundleConfig
    {
        // For more information on Bundling, visit http://go.microsoft.com/fwlink/?LinkId=254725
        public static void RegisterBundles(BundleCollection bundles)
        {
            bundles.Add(new ScriptBundle("~/bundles/jquery").Include(
                        "~/Scripts/jquery-{version}.js"));

            bundles.Add(new ScriptBundle("~/bundles/jqueryui").Include(
                        "~/Scripts/jquery-ui-{version}.js"));

            bundles.Add(new ScriptBundle("~/bundles/jqueryval").Include(
                        "~/Scripts/jquery.unobtrusive*",
                        "~/Scripts/jquery.validate*"));

            // Use the development version of Modernizr to develop with and learn from. Then, when you're
            // ready for production, use the build tool at http://modernizr.com to pick only the tests you need.
            bundles.Add(new ScriptBundle("~/bundles/modernizr").Include(
                        "~/Scripts/modernizr-*"));

            bundles.Add(new StyleBundle("~/Content/css").Include("~/Content/site.css"));

            bundles.Add(new StyleBundle("~/Content/themes/base/css").Include(
                        "~/Content/themes/base/jquery.ui.core.css",
                        "~/Content/themes/base/jquery.ui.resizable.css",
                        "~/Content/themes/base/jquery.ui.selectable.css",
                        "~/Content/themes/base/jquery.ui.accordion.css",
                        "~/Content/themes/base/jquery.ui.autocomplete.css",
                        "~/Content/themes/base/jquery.ui.button.css",
                        "~/Content/themes/base/jquery.ui.dialog.css",
                        "~/Content/themes/base/jquery.ui.slider.css",
                        "~/Content/themes/base/jquery.ui.tabs.css",
                        "~/Content/themes/base/jquery.ui.datepicker.css",
                        "~/Content/themes/base/jquery.ui.progressbar.css",
                        "~/Content/themes/base/jquery.ui.theme.css"));
        }
    }
}
</pre>
<p>Здесь метод <code>RegisterBundles</code> добавляет все создаваемые бандлы в коллекцию <code>bundles</code>. Объявление бандла выглядит следующим образом: 
<code>new ScriptBundle("~/bundles/jquery").Include("~/Scripts/jquery-{version}.js")</code>.</p>
<p>В конструктор <code>ScriptBundle</code> передается виртуальный путь бандла. А с помощью метода <code>Include</code> уже включаются в данный бандл 
конкретные файлы скриптов.</p>
<p>В выражении <code>"~/Scripts/jquery-{version}.js"</code> параметр {version} является заменителем для любого символьного обозначения версии скрипта. 
Это очень удобно, поскольку через некоторое время мы можем поменять версию библиотеки, но при этом в коде нам ничего не придется менять, 
так как система уже автоматически примет новую версию.</p>
<p>Выражение <code>"~/Scripts/jquery.validate*"</code> с помощью знака звездочки заменяет остальную часть строки. Например, это выражение 
подключит в бандл сразу два файла: <i>jquery.validate.js</i> и <i>jquery.validate.unobtrusive.js</i> (и их минимизированные версии), так как 
их названия начинаются с <code>jquery.validate*"</code>.</p>
<p>То же самое касается и создания бандлов стилей, только в этом случае используется класс <code>StyleBundle</code>.</p>
<p>Однако само объявление бандлов в файле <i>BundleConfig.cs</i> еще не подключает автоматически их в проект. Для этого в файле <i>Global.asax</i> 
прописывается соответствующая директива:</p>
<pre class="brush:c#;">
public class MvcApplication : System.Web.HttpApplication
{
    protected void Application_Start()
    {
        //..............................................
        BundleConfig.RegisterBundles(BundleTable.Bundles);
    }
}
</pre>
<p>Таким образом, мы и регистрируем бандлы для нашего приложения.</p>
<h3>Минификация</h3>
<p>Ключевым моментом концепции бандлов является минификация. Ее суть состоит в том, что при развертывании приложения клиенту отдается не полная, а минимизированная 
версия скриптов или стилей. За счет чего экономятся ресурсы сервера, так как идет отдача файла с меньшим объемом. В то же время в процессе отладки приложения 
мы приложение отдает обычную версию, поскольку благодаря ей, нам проще разобраться в возможных ошибках. Посмотрим на примере. Вот у меня есть 
некоторая мастер-страничка, которая подключает кучу бандлов:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width" /&gt;
    &lt;title&gt;@ViewBag.Title&lt;/title&gt;
    @Styles.Render("~/Content/css")
    @Scripts.Render("~/bundles/modernizr")
&lt;/head&gt;
&lt;body&gt;
    @RenderBody()

    @Scripts.Render("~/bundles/jquery")
    @Scripts.Render("~/bundles/jqueryui")
    @Scripts.Render("~/bundles/jqueryval")
    @RenderSection("scripts", required: false)
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>В данном случае я подключаю пять бандлов. Если запустить теперь приложение, то через средства разработчика в IE10 я могу увидеть 
скрипты, которые несут бандлы:</p>
<img src="mvcpics/15.1.png" />
<p>В данном случае у нас по умолчанию приложение находится в режиме отладки. В файле <i>web.config</i> можно найти следующую секцию:</p>
<pre class="brush:xml;">
&lt;configuration&gt;
  &lt;!---------------------------------------&gt;
  &lt;system.web&gt;
    &lt;httpRuntime targetFramework="4.5" /&gt;
    &lt;compilation debug="true" targetFramework="4.5" /&gt;
  &lt;!---------------------------------------&gt;
</pre>
<p>Параметр <code>debug="true"</code> указывает, что приложение запускается в режиме отладки. Теперь изменим его значение на false: 
<code>debug="false"</code> и перезапустим проект. Теперь мы увидим несколько иной результат:</p>
<img src="mvcpics/15.2.png" />
<p>И если вы посмотрите, например, в том же IE10 в средствах разработчика заголовки ответа, то вы увидите, что в этот раз в режиме развертывания сервер отдает нам минимизированный файл:</p>
<img src="mvcpics/15.3.png" />
<p>Таким образом, использование бандлов в проектах MVC4 повышает эффективность веб-приложения.</p>
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


<div class="nav"><p><a href="14.5.php">Назад</a><a href="./">Содержание</a><a href="15.2.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в ASP NET MVC</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/1.1.php">Особенности платформы ASP.NET MVC</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/1.2.php">Начало работы с ASP.NET MVC 4</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Создание первого приложения на ASP.NET MVC 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/2.1.php">Создание проекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/2.2.php">Создание контроллера и представлений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/2.3.php">Стилизация приложения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Контроллеры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.1.php">Основы контроллеров</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.2.php">Методы действий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.3.php">Получение входных данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.4.php">Результаты действий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.7.php">ViewResult</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.8.php">Переадресация и отправка кодов статуса и ошибок</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.9.php">Отправка файлов в ASP.NET MVC</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.5.php">HttpContext. Контекст запроса. Куки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.6.php">Асинхронные контроллеры и методы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Представления</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.1.php">Введение в представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.2.php">Строго типизированные представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.3.php">Движок представлений и Razor</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.4.php">Мастер-страницы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.5.php">Частичные представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.6.php">HTML-хелперы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.7.php">Работа с формами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.8.php">Строго типизированные хелперы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.1.php">Модели и БД</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.2.php">Подключение к базе данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.3.php">Шаблонные хелперы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.4.php">Редактирование модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.9.php">Добавление и удаление модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.5.php">Шаблоны формирования</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.6.php">Модели со сложной структурой</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.8.php">Работа со сложными моделями</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.10.php">Модели со связью многие-ко-многим</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.11.php">Работа с моделями со связью многие-ко-многим</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.7.php">Передача данных в контроллер</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.1.php">Определение маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.2.php">Работа с маршрутами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.3.php">Создание ограничений для маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.4.php">Генерация исходящих адресов URL</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.5.php">Области (Areas)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.6.php">Создание собственного обработчика маршрутов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Метаданные и валидация модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.1.php">Аннотации данных для отображения свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.2.php">Основы валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.3.php">Атрибуты валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.4.php">Валидация модели в контроллере</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.5.php">Отображение ошибок валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.6.php">Создание собственной логики валидации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Фильтры в ASP NET MVC 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.1.php">Фильтры. Введение.</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.2.php">Фильтры авторизации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.3.php">Фильтры исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.4.php">Фильтры действий и результатов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.5.php">Глобальные фильтры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.6.php">Дополнительные встроенные фильтры</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Привязка модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.1.php">Введение в привязку моделей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.2.php">DefaultModelBinder</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.3.php">Явная привязка модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.4.php">Поставщики значений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.5.php">Создание привязчика модели</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. jQuery и AJAX</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.1.php">Использование JavaScript/jQuery</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.2.php">Краткий обзор jQuery</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.3.php">Введение в AJAX</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.4.php">Ajax-Формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.5.php">Параметры объекта AjaxOptions</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.6.php">AJAX-ссылки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.7.php">Формат JSON</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.8.php">AJAX-запросы с помощью jQuery</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.9.php">Работа с jQuery UI</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 11. Авторизация и аутентификация в MVC 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.1.php">Введение в авторизацию и аутентификацию</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.2.php">Аутентификация Windows</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.3.php">Аутентификация форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.4.php" >Авторизация в MVC 4 и SimpleMembershipProvider</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.5.php" >Настройка использования SimpleMembershipProvider</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.6.php" >Использование универсальных провайдеров</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.7.php" >Web Site Administration Tool</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.8.php" >Создание своих провайдеров членства и ролей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.9.php" >Переопределение провайдера членства</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.10.php" >Переопределение провайдера ролей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.12.php" >Провайдер профилей и его переопределение</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.11.php" >OAuth-аутентификация</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 12. Web API</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/12.1.php" >Введение в Web API</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/12.2.php" >Создание и тестирование приложения Web API</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/12.3.php" >Создание представления для Web API</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 13. Публикация приложения</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.1.php" >Среда публикации и составные части приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.2.php" >Публикация на веб-сервере IIS</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.3.php" >Публикация на внешнем хостинге (на примере somee.com)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.4.php" >Добавление базы данных на хостинг somee.com</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.5.php" >Добавление файлов приложения на somee.com</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 14. Мобильные приложения на ASP.NET MVC 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.1.php" >Разработка мобильных приложений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.2.php" >Метатег Viewport</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.3.php" >Применение CSS в мобильных приложениях</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.4.php" >Создание мобильного приложения на ASP.NET MVC 4</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.5.php" >Режимы отображения DisplayMode</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 15. Бандлы и минификация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/15.1.php" >Введение в бандлы и минификацию</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/15.2.php" >Создание бандлов. Библиотеки из CDN</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 16. Мультиязычный сайт и локализация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/16.1.php" >Введение в мультиязычные сайты. Ресурсы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/16.2.php" >Логика мультиязычного сайта. Фильтр локализации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 17. Работа с SignalR</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/17.1.php" >Введение в SignalR</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/17.2.php" >Первое приложение с SignalR</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/17.3.php" >Persistent Connection API</a></span></li>
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
	
	$("li:contains('Глава 15.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 15.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
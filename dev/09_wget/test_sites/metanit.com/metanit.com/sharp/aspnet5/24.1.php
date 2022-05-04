<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core | URL Rewriting</title>
<meta charset="utf-8" />
<meta name="description" content="URL Rewriting в ASP.NET Core, методы AddRedirect, AddRewrite, переадресация на протокол https">
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
<h1>URL Rewriting</h1><h2>Введение в URL Rewriting</h2><div class="date">Последнее обновление: 21.12.2019</div>

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

<p>Функциональность URL Rewriting позволяет контролировать доступ по определенным URL-адресам. В частности, мы можем выполнить переопределение адресов, 
которые используются для доступа к ресурсам приложения. Например, URL Rewriting позволяет решить такие стандартные проблемы, как 
перенаправление с домена с www на домен без www и наоборот или перенаправление с протокола http на https.</p>
<p>URL Rewriting реализуется до того, как запрос попадет в систему маршрутизации, и начнется его непосредственное выполнение в конвейере MVC. Запрошенный адрес 
изначально может отсутствовать в приложении, однако URL Rewriting может изменить этот адрес на любой приемлемый.</p>
<p>Для подключения компонента URL Rewriting используется метод расширения <span class="b">UseRewriter()</span>, который в качестве параметра принимает 
объект <span class="b">RewriteOptions</span>, задающий все правила переопределения адресов URL:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Builder;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Rewrite; // Пакет с middleware URL Rewriting

namespace UrlRewritingApp
{
    public class Startup
    {
        public void Configure(IApplicationBuilder app)
        {
            app.UseDeveloperExceptionPage();

            // подключаем URL Rewriting
            var options = new RewriteOptions();
            app.UseRewriter(options);

            app.UseRouting();

            app.UseEndpoints(endpoints =&gt;
            {
                endpoints.MapGet("/", async context =&gt;
                {
                    await context.Response.WriteAsync("Hello World!");
                });
            });
        }
    }
}
</pre>
<p>Правда, в данном случае для RouteOptions пока еще не определено никаких правил переопределения URL, которые мы можем задать с помощью специальных методов:</p>
<ul>
<li><p><span class="b">AddRedirect()</span>: выполняет переадресацию с отправкой статусного кода HTTP 301</p></li>
<li><p><span class="b">AddRewrite()</span>: подменяет один адрес другим</p></li>
<li><p><span class="b">AddRedirectToWww()</span>: выполняет переадресацию на поддомен WWW</p></li>
<li><p><span class="b">AddRedirectToWwwPermanent()</span>: выполняет переадресацию на поддомен WWW с отправкой статусного кода HTTP 301 (постоянная переадресация)</p></li>
<li><p><span class="b">AddRedirectToHttps()</span>: выполняет переадресацию на протокол HTTPS</p></li>
<li><p><span class="b">AddRedirectToHttpsPermanent()</span>: выполняет переадресацию на протокол HTTPS с отправкой статусного кода HTTP 301 (постоянная переадресация)</p></li>
<li><p><span class="b">AddIISUrlRewrite()</span>: в качестве источника правил для переопределения URL использует правила для IIS</p></li>
<li><p><span class="b">AddApacheModRewrite()</span>: в качестве источника правил для переопределения URL использует правила для Apache</p></li>
</ul>
<h3>AddRedirect</h3>
<p>Метод <code>AddRedirect()</code> в качестве первого параметра принимает регулярное выражение, которому должен соответствовать входящий адрес URL. 
В качестве адреса в метод AddRedirect передается та часть URL, которая образуется с помощью объединения значений <code>Request.Path</code> и 
<code>Request.QueryString</code>. То есть, если полный запрошенный адрес <code>http://localhost:1234/home/index?id=4</code>, то в метод AddRedirect передается 
<code>home/index?id=4</code></p>
<p>Второй параметр также представляет собой выражение, которое указывает, по какому адресу нужно выполнять переадресацию. Например:</p>
<pre class="brush:c#;">
public void Configure(IApplicationBuilder app)
{
    var options = new RewriteOptions().AddRedirect("(.*)/$", "$1");
    app.UseRewriter(options);

	app.UseStaticFiles();
    app.UseEndpoints(endpoints =&gt;
	{
		endpoints.MapGet("/", async context =&gt;
		{
			await context.Response.WriteAsync("Hello World!");
		});
	});
}
</pre>
<p>Регулярное выражение <code>"(.*)/$"</code> указывает на любой адрес, который завершается слешем. Второй параметр указывает, что в качестве адреса 
для перенаправления будет использоваться та часть исходного URL, которая идет до слеша: <code>(.*)</code>. То есть "$1" указывает на первую группу в регулярном выражении "(.*)/$".</p>
<p>То есть в данном случае удаляется концевой слеш (например, перенаправляется с "localhost:1234/home/index/" на "localhost:1234/home/index").</p>

<p>Рассмотрим другую ситуацию. Например, мы хотим перенаправлять с адреса home на home/index:</p>
<pre class="brush:c#;">
public void Configure(IApplicationBuilder app)
{
	app.UseDeveloperExceptionPage();

	// подключаем URL Rewriting
	var options = new RewriteOptions()
                    .AddRedirect("(.*)/$", "$1")                // удаление концевого слеша
                    .AddRedirect("home[/]?$", "home/index"); // переадресация с home на home/index
	app.UseRewriter(options);

	app.UseRouting();

	app.UseEndpoints(endpoints =>
	{
		endpoints.MapGet("/", async context =>
		{
			await context.Response.WriteAsync("Hello World!");
		});
                endpoints.MapGet("/home", async context =>
                {
                    await context.Response.WriteAsync("Home Page!");
                });
                endpoints.MapGet("/home/index", async context =>
                {
                    await context.Response.WriteAsync("Home Index Page!");
                });
            });
        }
</pre>
<p>Для примера с помощью метода <code>endpoints.MapGet</code> заданы тестовые маршруты, в итоге при обращении по адресу "home" произойдет переадресация 
на адрес "home/index", и мы увидим в браузере строку "Home Index Page!".</p>
<p>При этом можно задать последовательно сразу несколько правил, как в данном случае.</p>
<p>Но важно учитывать, что передаваемый в метод <code>AddRedirect()</code> адрес ресгистрозависим. То есть мы можем обратиться по адресу 
"HoMe", и переадресация не сработает:</p>
<img src="pics/urlrewriting6.png" alt="UrlRewriting in ASP.NET Core" />
<p>Но мы можем выйти из данной ситуации, использовав соответствующий элемент регулярных выражений:</p>
<pre class="brush:c#;">
var options = new RewriteOptions()
				.AddRedirect("(.*)/$", "$1")                // удаление концевого слеша
				.AddRedirect("(?i)home[/]?$", "home/index"); // переадресация с home на home/index
app.UseRewriter(options);
</pre>
<h3>AddRewrite</h3>
<p>Метод <code>AddRewrite()</code> подменяет входящий адрес другим. Первый параметр метода указывает на регулярное выражение, которому должен соответствовать 
адрес. Второй параметр указывает, на какой адрес надо подменить входящий. Третий параметр - булевое значение устанавливает, надо ли прекратить применение остальных правил, 
если адрес соответствует выражению из первого параметра. Например:</p>
<pre class="brush:c#;">
public void Configure(IApplicationBuilder app)
{
	app.UseDeveloperExceptionPage();

	// подключаем URL Rewriting
	var options = new RewriteOptions()
			.AddRedirect("(.*)/$", "$1") 
			.AddRewrite("home/index", "home/about", skipRemainingRules: false);
	app.UseRewriter(options);

	app.UseRouting();

	app.UseEndpoints(endpoints =&gt;
	{
		endpoints.MapGet("/", async context =&gt;
		{
			await context.Response.WriteAsync("Hello World!");
		});
		endpoints.MapGet("/home/about", async context =&gt;
		{
			await context.Response.WriteAsync($"About: {context.Request.Path}");
		});
		endpoints.MapGet("/home/index", async context =&gt;
		{
			await context.Response.WriteAsync("Home Index Page!");
		});
	});
}
</pre>
<p>Правило</p>
<pre class="brush:c#;">AddRewrite("home/index", "home/about", skipRemainingRules: false);</pre>
<p>указывает, что при запросе "home/index" в реальности запрос будет сопоставляться с маршрутом "home/about"</p>
<img src="./pics/urlrewriting1.png" alt="URL Rewriting in ASP.NET Core" />
<p>При этом переадресации как таковой нет, статусный код 301/302 не отправляется клиенту.</p>
<h3>Элементы регулярных выражений в URL Rewriting</h3>
<p>Ключевым элементом, который используется при определении шаблонов адресов, являются группы - набор выражений, которые заключаются в скобки.</p>
<p>Например, в рассмотренном выше примере с удалением концевого слеша применялась одна группа:</p>
<pre class="brush:c#;">"(.*)/$"</pre>
<p>то есть знак точки "." означает любой символ, знак звездочки "*" означает, что таких символов может быть произвольное количество. И все это объединяется в одну группу - 
"(.*)". Таким образом, в данном случае группой будет все символы, которые идут до конечного слеша.</p>
<p>При создании паттерна для редиректа или рерайтинга мы можем ссылать на группу по номеру. В примере с концевым слешем определяется одна группа, 
поэтому мы можем к ней обратиться через "$1" - после символа $ идет номер группы.</p>
<p>Для понимания работы групп при рерайтинге/редиректе рассмотрим несколько примеров:</p>
<pre class="brush:c#;">
var options = new RewriteOptions()
    .AddRedirect("(.*)/$", "$1")
    .AddRewrite(@"home/index/(\d+)", "home/about?id=$1", skipRemainingRules: false);
</pre>
<p>В данном случае если адрес соответствует выражению "home/index/(\d+)" (например, "home/index/3"), то фактически происходит обращение по адресу 
"home/about?id=$1" - $1 здесь также указывает на первую группу в регулярном выражении - (\d+).</p>
<p>Другой пример. Определим следующее правило url rewriting:</p>
<pre class="brush:c#;">
public void Configure(IApplicationBuilder app)
{
	var options = new RewriteOptions()
			.AddRewrite(@"product/(\w+)/(\d+)",
				"home/products?cat=$1&id=$2",
				skipRemainingRules: false);
	app.UseRewriter(options);

	app.UseRouting();
	app.UseEndpoints(endpoints =&gt;
	{
		endpoints.MapGet("/", async context =&gt;
		{
			await context.Response.WriteAsync("Hello World!");
		});
		endpoints.MapGet("/home/products", async context =&gt;
		{
			await context.Response.WriteAsync($"cat: {context.Request.Query["cat"].ToString()}  " +
				$"id: {context.Request.Query["id"].ToString()}");
		});
	});
}
</pre>
<p>В данном случае используется следующее правило:</p>
<pre class="brush:c#;">
AddRewrite(@"product/(\w+)/(\d+)", "home/products?cat=$1&id=$2", 
							skipRemainingRules: false);
</pre>
<p>Это правило будет траслировать любой запрос типа "product/tablet/23" в запрос в виде "home/products/cat=tablet?id=23". То есть теперь у нас две группы: (\w+) и (\d+). 
Соответственно мы к ним можем обратиться через $1 и $2.</p>
<img src="./pics/urlrewriting7.png" alt="URL-rewriting в ASP.NET Core MVC" />
<p>В заключении стоит отметить, что использование url rewriting увеличивает накладные расходы на обработку запроса. 
Поэтому стоит по возможности избегать сложных комплексных правил переопределения строки запроса.</p>
<p>Кроме того, Rewriting Middleware не покрывает всех возможностей нативных модулей в IIS, Apache, Nginx, которые обеспечивают URL-rewriting. Также, нативные модули выше упомянутых веб-серверов демонстрируют 
большую производительность.</p>
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


<div class="nav"><p><a href="./22.5.php">Назад</a><a href="./">Содержание</a><a href="./24.2.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в ASP.NET Core</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/1.1.php">ASP.NET Core - новая эпоха в развитии ASP.NET</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/1.2.php">Начало работы с ASP.NET Core</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/1.3.php">Проект ASP.NET Core в Visual Studio for Mac</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Основы ASP.NET Core</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.13.php">Запуск приложения. Класс Program</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.1.php">Класс Startup</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.2.php">Конвейер обработки запроса и middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.3.php">Методы Use, Run и делегат RequestDelegate</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.22.php">Методы Map и MapWhen</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.4.php">Создание компонентов middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.18.php">Конвейер обработки запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.21.php">IWebHostEnvironment и окружение</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.5.php">Статические файлы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.14.php">Работа со статическими файлами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/17.1.php">Обработка ошибок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/18.6.php">Работа с HTTPS</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Сервисы и Dependency Injection</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/6.1.php">Сервисы и метод ConfigureServices</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.19.php">Создание своих сервисов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/6.4.php">Передача зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/6.2.php">Жизненный цикл зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.20.php">Применение сервисов в middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/6.5.php">Singleton-объекты и scoped-сервисы</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Конфигурация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.6.php">Основы конфигурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.16.php">Нефайловые провайдеры конфигурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.12.php">Файловые провайдеры конфигурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.23.php">Объединение конфигураций и установка сервиса IConfiguration</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.17.php">Работа с конфигурацией</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.15.php">Создание провайдера конфгурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.9.php">Проекция конфигурации на классы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/6.3.php">Передача конфигурации через IOptions</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Состояние приложения. Куки. Сессии</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.11.php">HttpContext.Items</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.25.php">Куки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.26.php">Сессии</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. Логгирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.10.php">Ведение лога и ILogger</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.29.php">Фабрика логгера и провайдеры логгирования</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.28.php">Конфигурация и фильтрация логгирования</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.27.php">Создание провайдера логгирования</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Маршрутизация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.1.php">Основы маршрутизации в ASP.NET Core</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.12.php">RouterMiddleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.2.php">Определение маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.4.php">Работа с маршрутами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.3.php">Ограничения маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.7.php">Создание ограничений маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.8.php">Создание своего маршрута</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 8. ASP.NET Core MVC</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/3.1.php">Введение в ASP.NET Core MVC</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/3.6.php">Добавление MVC в пустой проект</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/3.2.php">Первое приложение. Добавление моделей и базы данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/3.3.php">Создание контроллера и инициализатора базы данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/3.4.php">Добавление методов контроллера и представлений</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/3.5.php">Добавление мастер-страницы и стилизации</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 9. Контроллеры</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.1.php">Контроллеры и их действия</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.2.php">Передача данных в контроллер</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.3.php">Результаты действий</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.4.php">ContentResult и JsonResult</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.5.php">Переадресация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.6.php">Отправка статусных кодов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.7.php">Отправка файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.8.php">Переопределение контроллеров</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.9.php">Контекст контроллера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/5.10.php">Передача зависимостей в контроллер</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 10. Представления</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.1.php">Введение в представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.2.php">Движок представлений Razor</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.3.php">Передача данных в представление</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.4.php">Мастер-страницы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.9.php">Файл _ViewImports.cshtml</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.5.php">Частичные представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.7.php">Внедрение зависимостей в представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.8.php">Работа с формами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.10.php">Создание движка представлений</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 11. Маршрутизация в ASP.NET Core MVC</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.5.php">Маршрутизация в MVC с помощью конечных точек</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.13.php">Маршрутизация с помощью RouterMiddleware. Метод UseMvc</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.6.php">Атрибуты маршрутизации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.9.php">Области</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 12. Модели</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/8.1.php">Модели в ASP.NET Core MVC</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/8.2.php">Модели представления View Model</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/8.3.php">Привязка модели</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/8.4.php">Передача данных в контроллер</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/8.5.php">Управление привязкой</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/8.6.php">Создание привязчика модели</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 13. HTML-хелперы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/9.1.php">Создание HTML-хелперов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/9.2.php">HTML-хелперы элементов форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/9.3.php">Строго типизированные хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/9.4.php">Шаблонные хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/9.5.php">Генерация ссылок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/11.11.php">URL-хелперы</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 14. Tag-хелперы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.1.php">Введение в tag-хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.2.php">AnchorTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.3.php">LinkTagHelper и ScriptTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.4.php">Tag-хелперы форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.6.php">EnvironmentTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.7.php">CacheTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.8.php">Создание tag-хелперов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.10.php">Управление выводом tag-хелпера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.11.php">Контекст хелпера и получение зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.12.php">Атрибут HtmlTargetElement</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.9.php">Tag-хелперы и сложные объекты и коллекции</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 15. View Component</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.6.php">Определение компонента представлений</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.11.php">Передача данных в View Component</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.12.php">Генерация контента в View Component</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.13.php">ViewViewComponentResult и представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.14.php">Асинхронные операции в View Component</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/7.15.php">ViewComponentContext</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 16. Метаданные и валидация модели</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/19.1.php">Основы валидации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/19.2.php">Атрибуты валидации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/19.3.php">Валидация на стороне сервера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/19.4.php">Валидация на стороне клиента</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/10.5.php">Tag-хелперы валидации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/19.5.php">Создание атрибута валидации. Самовалидация модели</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/19.6.php">Аннотации данных</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 17. Работа с данными в Entity Framework в MVC</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.1.php">Подключение и создание базы данных в Entity Framework Core</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.2.php">Операции с моделями. Создание и вывод</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.3.php">Операции с моделями. Редактирование и удаление</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.4.php">Сортировка</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.5.php">Создание tag-хелпера сортировки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.6.php">Фильтрация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.7.php">Постраничная навигация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.8.php">Tag-хелпер для постраничной навигации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.9.php">Объединение сортировки, фильтрации и пагинации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/12.10.php">Tag-хелпер пагинации с сортировкой и фильтрацией</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 18. Razor Pages</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.1.php">Введение в Razor Pages</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.2.php">Добавление RazorPages в пустой проект</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.3.php">Обработка запросов. Передача форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.4.php">Привязка свойств RazorPage к параметрам запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.5.php">Параметры маршрутов в Razor Pages</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.6.php">Обработчики страницы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.7.php">Возвращение результата</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.8.php">Переадресация и создание ссылок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.9.php">Подключение к базе данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.10.php">Создание и вывод объектов из базы данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/29.11.php">Изменение и удаление в базе данных</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 19. Web API</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/23.1.php">Введение в Web API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/23.2.php">Создание контроллера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/23.3.php">Тестирование контроллера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/23.4.php">Создание клиента для WEB API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/23.5.php">Валидация в Web API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/23.6.php">Content negotiation</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 20. Фильтры</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/18.1.php">Введение в фильтры</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/18.5.php">Передача параметров в фильтры и установка зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/18.2.php">Фильтры ресурсов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/18.3.php">Фильтры действий</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/18.4.php">Фильтры результатов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/17.2.php">Фильтры исключений</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/18.7.php">Фильтры RazorPages</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 21. Аутентификация и авторизация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/15.1.php">Аутентификация на основе куки. Часть 1</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/15.2.php">Аутентификация на основе куки. Часть 2</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/15.3.php">Авторизация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/15.4.php">ClaimPrincipal и объекты Claim</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/15.5.php">Авторизация по ролям</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/15.6.php">Авторизация на основе Claims</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/15.7.php">Пример авторизации на основе Claims</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/15.8.php">Создание ограничений для политики авторизации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/23.7.php">JWT-токены</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 22. ASP.NET Core Identity</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.1.php">Введение в ASP.NET Core Identity</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.11.php">Основные классы в ASP.NET Core Identity</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.2.php">Добавление Identity в проект с нуля</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.3.php">Регистрация и создание пользователей в Identity</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.4.php">Авторизация пользователей в Identity</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.7.php">Управление пользователями</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.8.php">Изменение пароля</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.9.php">Валидация пароля</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.10.php">Валидация пользователя</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.13.php">Управление ролями</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/16.12.php">Инициализация БД ролями и пользователями</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 23. Клиентская разработка</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/13.6.php">Бандлинг и минификация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/13.7.php">Менеджер Libman</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/13.5.php">Пакетный менеджер NPM</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/13.1.php">Gulp</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/13.2.php">Grunt</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/13.4.php">Препроцессоры Less и Sass</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 24. Поизводительность и кэширование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/14.1.php">Кэширование с помощью MemoryCache</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/14.2.php">Атрибут ResponseCache</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/14.3.php">Сжатие ответа</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/14.4.php">Кэширование статических файлов</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 25. Сервер и публикация приложения</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/2.7.php">Сервер</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/20.1.php">Публикация на IIS</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/20.2.php">Установка приложения в виде службы Windows</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 26. Тестирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/22.1.php">Введение в юнит-тесты</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/22.2.php">Создание проекта юнит-тестов. Добавление xUnit</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/22.3.php">Создание юнит-тестов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/22.4.php">Фреймворк Moq и moq-объекты</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/22.5.php">Тестирование контроллера</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 27. URL Rewriting</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/24.1.php">Введение в URL Rewriting</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/24.2.php">Правила IIS для URL Rewriting</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/24.3.php">Применение правил для Apache</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/24.4.php">Создание правил URL Rewriting</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 28. Глобализация и локализация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.1.php">Определение культуры</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.2.php">RequestLocalizationMiddleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.3.php">Локализация строк. IStringLocalizer</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.4.php">Ресурсы и локализация в контроллерах</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.5.php">Локализация представлений</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.6.php">Локализация аннотаций данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.7.php">Переключение языка приложения</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.8.php">Общие ресурсы локализации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/28.9.php">Хранение ресурсов в базе данных</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 29. SignalR Core</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.1.php">SignalR Core. Первое приложение</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.2.php">Создание и конфигурация хабов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.3.php">Клиент javascript</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.4.php">Контекст хаба, подключение и отключение клиентов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.5.php">Взаимодействие с клиентами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.6.php">IHubContext</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.7.php">Отправка сложных объектов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.8.php">Аутентификация и авторизация на основе куки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.9.php">Аутентификация и авторизация с помощью токенов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.10.php">Пользователи</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.11.php">Группы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/30.12.php">Клиент на Xamarin Forms</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 30. CORS и кросс-доменные запросы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/31.1.php">Начало работы с CORS</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/31.2.php">Конфигурация CORS</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/31.3.php">Политики CORS</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/31.5.php">Глобальная и локальная настройка CORS</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/31.4.php">CORS в MVC</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 31. Dapper</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/26.1.php">Работа с Dapper в ASP.NET Core</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 32. Работа с MongoDB</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/27.1.php">Создание проекта и подключение MongoDB</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/27.2.php">Чтение и добавление данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/27.3.php">Редактирование, удаление и работа с изображениями</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 33. React.JS</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/25.1.php">Подключение React в ASP.NET Core</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/25.2.php">Взаимодействие React.JS и ASP.NET Core</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 34. Сервисы gRPC</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/32.1.php">Введение в gRPC</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 35. Дополнительные статьи</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/21.1.php">Отправка email в ASP.NET Core</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet5/21.3.php">Загрузка файлов на сервер</a></span></li>
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
	
	$("li:contains('Глава 27.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 27.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
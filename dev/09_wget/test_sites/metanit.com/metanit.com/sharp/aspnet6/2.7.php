<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core и C# | Метод Use</title>
<meta charset="utf-8" />
<meta name="description" content="Добавление middleware в конвейер обработки запроса в ASP.NET Core и C# с помощью метода Use, вызов следующего middleware в конвейере с помощью метода next.Invoke">
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
<h2>Метод Use</h2><div class="date">Последнее обновление: 10.12.2021</div>

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

<p>Метод расширения <span class="b">Use()</span> добавляет компонент middleware, который позволяет передать обработку запроса далее следующим в конвейере компонентам. 
Он имеет следующие версии</p>
<pre class="brush:c#;">
public static IApplicationBuilder Use(this IApplicationBuilder app, Func&lt;HttpContext, Func&lt;Task&gt;, Task&gt; middleware);
public static IApplicationBuilder Use(this IApplicationBuilder app, Func&lt;HttpContext, RequestDelegate, Task&gt; middleware)
</pre>
<p>Метод <span class="b">Use()</span> реализован как метод расширения для типа <span class="b">IApplicationBuilder</span>, соответственно мы можем вызвать данный метод 
у объекта <span class="b">WebApplication</span> для добавления middleware в приложение. В обоих версиях метод Use принимает некоторое действие, которое имеет два параметра и возвращает объект Task.</p>
<p>Первый параметр делегата Func, который передается в метод <span class="b">Use()</span>, представляет объект <span class="b">HttpContext</span>. 
Этот объект позволяет получить данные запроса и управлять ответом клиенту.</p>
<p>Второй параметр делегата представляет другой делегат - <span class="b">Func&lt;Task&gt;</span> или <span class="b">RequestDelegate</span>. Этот 
делегат представляет следующий в конвейере компонент middleware, которому будет передаваться обработка запроса.</p>
<p>В общем случае применение метода <span class="b">Use()</span> выглядит следующим образом:</p>
<pre class="brush:c#;">
app.Use(async (context, next) =&gt;
{
    // действия перед передачи запроса в следующий middleware
    await next.Invoke();
    // действия после обработки запроса следующим middleware
});
</pre>
<p>Работа middleware разбивается на две части:</p>
<ul>
<li><p>Middleware выполняет некоторую начальную обработку запроса до вызова <code>await next.Invoke()</code></p></li>
<li><p>Затем вызывается метод <code>next.Invoke()</code>, который передает обработку запроса следующему компоненту в конвейере</p></li>
<li><p>Когда следующий в конвейере компонент закончил обработку запрос возвращается в обратно в текущий компонент, 
и выполняются действия, которые идут после вызова <code>await next.Invoke(</code></p></li>
</ul>
<p>Таким образом, middleware в методе Use выполняет действия до следующего в конвейере компонента и после него.</p>
<p>Рассмотрим метод <span class="b">Use()</span> на примере:</p>
<pre class="brush:c#;">
var builder = WebApplication.CreateBuilder();
var app = builder.Build();

string date = "";

app.Use(async(context, next) =&gt;
{
    date = DateTime.Now.ToShortDateString();
    await next.Invoke();                 // вызываем middleware из app.Run
    Console.WriteLine($"Current date: {date}");  // Current date: 08.12.2021
});

app.Run(async(context) =&gt; await context.Response.WriteAsync($"Date: {date}"));

app.Run();
</pre>
<p>В данном случае мы используем перегрузку метода Use, которая в качестве параметров принимает контекст запроса - объект HttpContext и 
делегат <code>Func&lt;Task&gt;</code>, который представляет собой ссылку на следующий в конвейере компонент middleware.</p>
<p>Middleware в методе <code>app.Use()</code> реализует простейшую задачу - присваивает переменной <code>date</code> текущую дату в виде строки и затем передает обработку запроса 
следующим компонентам middleware в конвейере. То есть при вызове <code>await next.Invoke()</code> обработка запроса перейдет к тому компоненту, который установлен в методе <code>app.Run()</code>. 
В итоге обработка запроса будет выглядеть следующим образом:</p>
<ol>
<li><p>Вызов компонента app.Use</p></li>
<li><p>Установка значения переменной date:</p>
<pre class="brush:c#;">date = DateTime.Now.ToShortDateString();</pre></li>
<li><p>Вызов <code>await next.Invoke()</code>. Управление переходит следующему компоненту в конвейере - к app.Run.</p></li>
<li><p>В middleware из <code>app.Run()</code> отравляет клиенту текущую дату в качестве ответа с помощью метода <code>context.Response.WriteAsync()</code>:</p>
<pre class="brush:c#;">
await context.Response.WriteAsync($"Date: {date}");
</pre></li>
<li><p>Метод app.Run закончил свою работу, и управление обработкой возвращается к middleware в методе app.Use. Начинает выполняться та часть кода, которая 
идет после <code>await next.Invoke()</code>. В этой части выполняется условное логгирование - на консоль выводится значение переменной date:</p>
<pre class="brush:c#;">Console.WriteLine($"Current date: {date}");</pre>
<p>После этого обработка запроса завершена</p></li>
</ol>
<p>В итоге в веб-браузере мы увидим следующее сообщение:</p>
<img src="./pics/2.5.png" alt="Обработка запроса методом app.Use в ASP.NET Core и C#" />
<p>А в консоли запущенного приложения мы увидим значение переменной date, которое выводится в middleware из метода app.Use:</p>
<img src="./pics/2.6.png" alt="Создание конвейера middleware с помощью метода app.Use в ASP.NET Core и C#" />
<h4>Отправка ответа</h4>
<p>При использовании метода Use и передаче выполнения следующему делегату следует учитывать, что не рекомендуется вызывать метод 
<code>next.Invoke</code> после метода <code>Response.WriteAsync()</code>. Компонент middleware должен либо генерировать ответ с помощью Response.WriteAsync, 
либо вызывать следующий делегат посредством <code>next.Invoke</code>, но не выполнять оба этих действия одновременно. Так как согласно документации 
последующие изменения объекта Response могут привести к нарушению протокола, например, будет послано больше байт, чем указано в заголовке Content-Length, либо 
могут привести к нарушению тела ответа, например, футер страницы HTML запишется в CSS-файл.<p>
<p>То есть к примеру следующая обработка запроса не рекомендуется:</p>
<pre class="brush:c#;">
var builder = WebApplication.CreateBuilder();
var app = builder.Build();

app.Use(async (context, next) =&gt;
{
    await context.Response.WriteAsync("&lt;p&gt;Hello world!&lt;/p&gt;");
    await next.Invoke();
});

app.Run(async (context) =&gt;
{
    //await Task.Delay(10000); // можно поставить задержку
    await context.Response.WriteAsync("&lt;p&gt;Good bye, World...&lt;/p&gt;");
});

app.Run();
</pre>
<h3>Использование делегат RequestDelegate</h3>
<p>В примере выше использовалась версия метода <span class="b">Use()</span>, которая использует делегат <span class="b">Func&lt;Task&gt;</span>. Подобным образом можно использовать 
и другую версию, где используется делегат <span class="b">RequestDelegate</span>. Единственное - при вызове делегата ( то есть фактически следующего в конвейере компонента) 
необходимо передавать делегату объект <span class="b">HttpContext</span>:</p>
<pre class="brush:c#;">
var builder = WebApplication.CreateBuilder();
var app = builder.Build();

string date = "";

app.Use(async(context, next) =&gt;
{
    date = DateTime.Now.ToShortDateString();
    await next.Invoke(context);                 // здесь next - RequestDelegate
    Console.WriteLine($"Current date: {date}");  // Current date: 08.12.2021
});

app.Run(async(context) =&gt; await context.Response.WriteAsync($"Date: {date}"));

app.Run();
</pre>
<h3>Терминальный компонент middleware</h3>
<p>Middleware в методе <span class="b">Use()</span> необязательно должен вызывать к следующему в конвейере компоненту. Вместо этого он может завершить обработку запроса. В этом случае 
он может выступать в роли такого же терминального компонента middleware, а и компоненты из метода <span class="b">Run()</span>. Например:</p>
<pre class="brush:c#;">
var builder = WebApplication.CreateBuilder();
var app = builder.Build();

app.Use(async(context, next) =&gt;
{
    string? path = context.Request.Path.Value?.ToLower();
    if (path == "/date")
    {
        await context.Response.WriteAsync($"Date: {DateTime.Now.ToShortDateString()}");
    }
    else
    {
        await next.Invoke();
    }
});

app.Run(async(context) =&gt; await context.Response.WriteAsync($"Hello METANIT.COM"));

app.Run();
</pre>
<p>Здесь middleware в app.Use проверяет запрошенный адрес - если он содержит "/date", то клиенту отправляется текущая дата. 
Иначае обработка запроса передается дальше в app.Run.</p>
<img src="./pics/2.7.png" alt="Терминальный компонент middleware в app.Use в ASP>NET Core и C#" />
<p>Причем в принципе мы можем использовать компонент в app.Use как единственный и соответственно терминальный:</p>
<pre class="brush:c#;">
var builder = WebApplication.CreateBuilder();
var app = builder.Build();
app.Use(async (HttpContext context, Func&lt;Task&gt; next) =&gt;
{
    await context.Response.WriteAsync("Hello Work!");
});

app.Run();
</pre>
<p>Однако в данном случае для большей производительости лучше использовать <span class="b">app.Run()</span>, если нам надо определить лишь один компонент, 
который в принципе не передает запрос дальше по конвейеру.</p>
<h3>Вынесение компонентов в методы</h3>
<p>Также можно вынести все inline-компоненты в отдельные методы:</p>
<pre class="brush:c#;">
var builder = WebApplication.CreateBuilder();
var app = builder.Build();

app.Use(GetDate);
app.Run(async (context) =&gt; await context.Response.WriteAsync("Hello METANIT.COM"));
app.Run();
async Task GetDate(HttpContext context, Func&lt;Task&gt; next)
{
    string? path = context.Request.Path.Value?.ToLower();
    if (path == "/date")
    {
        await context.Response.WriteAsync($"Date: {DateTime.Now.ToShortDateString()}");
    }
    else
    {
        await next.Invoke();
    }
}
</pre>
<p>Подобным образом можно использовать и другую версию метода Use, в которой используется делегат RequestDelegate:</p>
<pre class="brush:c#;">
async Task GetDate(HttpContext context, RequestDelegate next)
{
    string? path = context.Request.Path.Value?.ToLower();
    if (path == "/date")
    {
        await context.Response.WriteAsync($"Date: {DateTime.Now.ToShortDateString()}");
    }
    else
    {
        await next.Invoke(context);
    }
}
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


<div class="nav"><p><a href="./2.12.php">Назад</a><a href="./">Содержание</a><a href="./2.13.php">Вперед</a></p></div></div>
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
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/1.1.php">Что такое ASP.NET Core</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/1.2.php">Начало работы с ASP.NET Core</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Основы в ASP.NET Core</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.1.php">Создание и запуск приложения. WebApplication и WebApplicationBuilder</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.2.php">Конвейер обработки запроса и middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.3.php">Метод Run и определение терминального middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.4.php">HttpResponse. Отправка ответа</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.5.php">HttpRequest. Получение данных запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.6.php">Отправка файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.8.php">Отправка форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.9.php">Переадресация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.10.php">Отправка и получение json</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.11.php">Создание простейшего API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.12.php">Загрузка файлов на сервер</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.7.php">Метод Use</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.13.php">Создание ветки конвейера. UseWhen и MapWhen</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.14.php">Метод Map</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.15.php">Классы middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.16.php">Построение конвейера обработки запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.17.php">IWebHostEnvironment и окружение</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Dependency Injection</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.1.php">Внедрение зависимостей и IServiceCollection</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.2.php">Создание сервисов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.3.php">Получение зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.4.php">Жизненный цикл зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.5.php">Применение сервисов в классах middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.6.php">Scoped-сервисы в singleton-объектах</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.7.php">Множественная регистрация сервисов</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Маршрутизация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.1.php">Конечные точки. Метод Map</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.2.php">Параметры маршрута</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.3.php">Ограничения маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.4.php">Создание ограничений маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.5.php">Передача зависимостей в конечные точки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.6.php">Сопоставление запроса с конечной точкой</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.7.php">Сочетание конечных точек с другими middleware</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Статические файлы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/5.1.php">Установка каталога статических файлов. UseStaticFiles</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/5.2.php">Работа со статическими файлами</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. Конфигурация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.1.php">Основы конфигурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.2.php">Нефайловые провайдеры конфигурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.3.php">Конфигурация в файлах JSON, XML и Ini</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.4.php">Конфигурация по умолчанию и объединение конфигураций</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.5.php">Анализ конфигурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.6.php">Создание провайдера конфгурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.7.php">Проекция конфигурации на классы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.8.php">Передача конфигурации через IOptions</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Логгирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/7.1.php">Ведение лога и ILogger</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/7.2.php">Фабрика логгера и провайдеры логгирования</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/7.3.php">Конфигурация и фильтрация логгирования</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/7.4.php">Создание провайдера логгирования</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 8. Состояние приложения. Куки. Сессии</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/8.1.php">HttpContext.Items</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/8.2.php">Куки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/8.3.php">Сессии</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 9. Обработка ошибок</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/9.1.php">Обработка исключений</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/9.2.php">Обработка ошибок HTTP</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 10. Results API</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.1.php">Введение в Results API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.2.php">Отправка текста и json в Results API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.3.php">Переадресация в Results API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.4.php">Отправка статусных кодов в Results API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.5.php">Отправка файлов в Results API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.6.php">Определение своего типа IResult</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 11. Web API</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/11.1.php">Пример приложения Web API</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 12. Работа с базой данных и Entity Framework</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/12.1.php">Подключение Entity Framework</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/12.2.php">Основные операции с данными в Entity Framework Core</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 13. Аутентификация и авторизация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.1.php">Введение в аутентификацию и авторизацию</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.2.php">Аутентификация с помощью JWT-токенов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.3.php">Авторизация с помощью JWT-токенов в клиенте JavaScript</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.4.php">Аутентификация с помощью куки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.5.php">HttpContext.User, ClaimPrincipal и ClaimsIdentity</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.6.php">ClaimPrincipal и объекты Claim</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.7.php">Авторизация по ролям</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.8.php">Авторизация на основе Claims</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.9.php">Создание ограничений для авторизации</a></span></li>
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
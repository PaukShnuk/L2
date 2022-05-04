<!DOCTYPE html>
<html >
<head>
<title>Blazor | Blazor WebAssembly. Первое приложение</title>
<meta charset="utf-8" />
<meta name="description" content="Создание приложения Blazor WebAssembly, структура проекта, принцип работы, разбор компонентов, wasm">
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
<h2>Blazor WebAssembly. Первое приложение</h2><div class="date">Последнее обновление: 20.05.2020</div>

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

<p>Blazor WebAssembly позволяет создавать приложения клиентской стороны, которые полностью работают на стороне клиента с помощью технологии WebAssembly. 
Во время запуска приложения файлы приложения, все его зависимости и среда выполнения .NET загружаются браузером. Приложение выполняется полностью на стороне клиента в браузере.</p>
<p>Для создания проекта Blazor WebAssembly также выберем тип <span class="b">Blazor App</span>:</p>
<img src="./pics/blazor1.png" alt="Создание приложения Blazor Server и C# в Visual Studio" />
<p>Далее после указания имени и расположения проекта выберем шаблон <span class="b">Blazor WebAssembly App</span>:</p>
<img src="./pics/blazorwebassembly2.png" alt="Проект Blazor WebAssembly на C# в Visual Studio" />
<p>Структура проекта Blazor WebAssembly частично будет похожа на структуру проекта Blazor Server, однако в некоторых деталях все-таки будет отличаться:</p>
<img src="./pics/blazorwebassembly3.png" alt="Структура проекта Blazor WebAssembly на C# в Visual Studio" />
<ul>
<li><p>Папка <span class="b">wwwroot</span> содержит статические файлы приложения.</p>
<ul>
<li><p>Подпапка <span class="b">css</span> хранит определения стилей css, например, файл стилей фреймворка bootstrap.</p></li>
<li><p>Подпапка <span class="b">sample-data</span> хранит файл <span class="b">weather.json</span>, который представляет некоторые типовые данные в формате json, используемые приложением.</p></li>
<li><p>Файл <span class="b">index.html</span> представляет главную страницу, на которую и будет загружаться приложение Blazor</p></li>
</ul>
</li>
<li><p>Папка <span class="b">Pages</span> содержит компоненты Razor.</p>
<ul>
<li><p><span class="b">Counter.razor</span> хранит код компонента Counter, суть которого в определение счетчика, значение которого увеличивается при 
нажатии на кнопку.</p></li>
<li><p><span class="b">FetchData.razor</span> хранит код компонента FetchData, который с помощью сервиса WeatherForecastService получает некоторые данные и 
выводит их на веб-страницу</p></li>
<li><p><span class="b">Index.razor</span> хранит код компонента Index.</p></li>
</ul>
</li>
<li><p>Папка <span class="b">Shared</span> хранит дополнительные компоненты Razor</p>
<ul>
<li><p><span class="b">MainLayout.razor</span> хранит код компонента MainLayout, который определяет структуру или компоновку приложения blazor.</p></li>
<li><p><span class="b">NavMenu.razor</span> хранит код компонента NavMenu, который определяет элементы навигации</p></li>
<li><p><span class="b">ServeyPrompt.razor</span> представляет дополнительный типовой компонент, который не выполняет особых функций</p></li>
</ul>
</li>
<li><p><span class="b">_Imports.razor</span> содержит подключения пространств имен с помощью директивы using, которые будут подключаться 
в компоненты Razor.</p></li>
<li><p><span class="b">App.razor</span> содержит определение корневого компонента приложения, который позволяет установить маршрутизацию между вложенными компонентами с помощью другого встроенного компонента Router.</p></li>
<li><p>Файл <span class="b">Program.cs</span> содержит класс Program, который представляет точку входа в приложение. В данном случае это стандартный для приложения 
ASP.NET Core класс Program, который запускает и конфигурирует хост, в рамках которого разворачивается приложение с Blazor.</p></li>
</ul>
<p>Мы также можем запустить проект и опробовать его типовую функциональность:</p>
<img src="./pics/blazorwebassembly4.png" rel="Первое приложение на Blazor WebAssembly и C#" />
<h3>Принцип работы приложения</h3>
<p>Работа приложения начинается с класса Program:</p>
<pre class="brush:c#;">
using System;
using System.Net.Http;
using System.Collections.Generic;
using System.Threading.Tasks;
using System.Text;
using Microsoft.AspNetCore.Components.WebAssembly.Hosting;
using Microsoft.Extensions.Configuration;
using Microsoft.Extensions.DependencyInjection;
using Microsoft.Extensions.Logging;

namespace HelloBlazorWasmApp
{
    public class Program
    {
        public static async Task Main(string[] args)
        {
            var builder = WebAssemblyHostBuilder.CreateDefault(args);
            builder.RootComponents.Add&lt;App&gt;("app");

            builder.Services.AddTransient(sp =&gt; new HttpClient { BaseAddress = new Uri(builder.HostEnvironment.BaseAddress) });

            await builder.Build().RunAsync();
        }
    }
}
</pre>
<p>Основная задача класса Program - настроить и запустить хост, который представлен классом <span class="b">WebAssemblyHost</span>. 
Для этого у класса билдера хоста - WebAssemblyHostBuilder вызывается метод <code>Build()</code>. А для запуска хоста вызывается метод 
<code>RunAsync()</code>. Кроме этого, с помощью свойства <span class="b">RootComponents</span> и его свойства <code>Add()</code> добавляется 
класс корневого компонента и его селектор:</p>
<pre class="brush:c#;">builder.RootComponents.Add&lt;App&gt;("app");</pre>
<p>В то есть в данном случае класс компонента называется App, а для его рендеринга на веб-странице используется элемент <code>&lt;app&gt;</code>.</p>
<p>Ну и кроме того, здесь в приложение внедряется в качестве сервиса HttpClient, который используется в компонентах Blazor для отправки http-запросов:</p>
<pre class="brush:c#;">builder.Services.AddTransient(sp =&gt; new HttpClient { BaseAddress = new Uri(builder.HostEnvironment.BaseAddress) });</pre>
<h3>index.html</h3>
<p>При обращении к приложению браузер загрузит страницу <span class="b">index.html</span> из папки wwwroot:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width" /&gt;
    &lt;title&gt;HelloBlazorWasmApp&lt;/title&gt;
    &lt;base href="/" /&gt;
    &lt;link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" /&gt;
    &lt;link href="css/site.css" rel="stylesheet" /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;app&gt;Loading...&lt;/app&gt;
    &lt;div id="blazor-error-ui"&gt;
        An unhandled error has occurred.
        &lt;a href="" class="reload"&gt;Reload&lt;/a&gt;
        &lt;a class="dismiss"&gt;🗙&lt;/a&gt;
    &lt;/div&gt;
    &lt;script src="_framework/blazor.webassembly.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Это обычная веб-страница, в коде которой можно выделить два момента. Прежде всего это подключаемый внизу страницы 
скрипт <span class="b">blazor.webassembly.js</span>. Этот скрипт загружает среду выполнения .NET, приложение и его зависимости и 
иницилизирует среду выполнения для загрузки приложения.</p>
<p>Кроме того, элемент <code>&lt;app&gt;Loading...&lt;/app&gt;</code>, который будет сопоставляться с классом компонента App. И содержимое компонента будет рендериться 
в этот элемент. При этом, отмечу, что сопоставление класса компонента и элемента веб-страницы будет происходить не потому что у них совпадает 
название (класс App - элемент app), а потому что в классе Program при создании хоста указано подобное сопоставление:</p>
<pre class="brush:c#;">builder.RootComponents.Add&lt;App&gt;("app");</pre>
<h3>Класс App</h3>
<p>Класс компонента App из файла App.razor в корне проекта представляет основной компонент приложения, в рамках которого будут запускаться все 
другие компоненты и функциональность приложения Blazor WebAssembly.</p>
<pre class="brush:c#;">
&lt;Router AppAssembly="@typeof(Program).Assembly"&gt;
    &lt;Found Context="routeData"&gt;
        &lt;RouteView RouteData="@routeData" DefaultLayout="@typeof(MainLayout)" /&gt;
    &lt;/Found&gt;
    &lt;NotFound&gt;
        &lt;LayoutView Layout="@typeof(MainLayout)"&gt;
            &lt;p&gt;Sorry, there's nothing at this address.&lt;/p&gt;
        &lt;/LayoutView&gt;
    &lt;/NotFound&gt;
&lt;/Router&gt;
</pre>
<p>Компонент App, как и в проекте Blazor Server, с помощью встроенного компонента <span class="b">Router</span> 
добавляет возможность маршрутизации по вложенным компонентам. 
Его атрибут <span class="b">AppAssembly</span> указывает на сборку, в которой следует искать запрошенные вложенные компоненты.</p>
<p>При запросе компонентов может быть две ситуации: запрошенный ресурс (компонент) найден и ресурс не найден. Соответственно для каждой из этих ситуаций 
определены соответственно два элемента: <span class="b">Found</span> и <span class="b">NotFound</span></p>
<p>Компонент Found содержит другой компонент - <span class="b">RouteView</span>. Через атрибут <span class="b">RouteData</span> он получает контекст маршрутизации, 
который будут использоваться при обработке запроса. А другой атрибут - <span class="b">DefaultLayout</span> устанавливает компонент, который 
будет определять компоновку (layout) содержимого - в данном случае это компонент MainLayout.</p>
<p>Комопонент NotFound определяет, как будет рендерится ответ, если компонент для обработки запроса не найден. С помощью вложенного 
компонента <span class="b">LayoutView</span> определяется компонент, который будет задавать компоновку. В данном случае это опять же компонент MainLayout.</p>
<h3>MainLayout</h3>
<p>В обоих случаях в компоненте App для определения компоновки приложения используется компонент <span class="b">MainLayout</span>, 
который определен в файле <span class="b">MainLayout.razor</span> в папке Shared:</p>
<pre class="brush:xml;">
@inherits LayoutComponentBase

&lt;div class="sidebar"&gt;
    &lt;NavMenu /&gt;
&lt;/div&gt;

&lt;div class="main"&gt;
    &lt;div class="top-row px-4"&gt;
        &lt;a href="http://blazor.net" target="_blank" class="ml-md-auto"&gt;About&lt;/a&gt;
    &lt;/div&gt;

    &lt;div class="content px-4"&gt;
        @Body
    &lt;/div&gt;
&lt;/div&gt;
</pre>
<p>Компонент наследуется от класса LayoutComponentBase, который определяет базовую функциональность для компоновки. Например, с помощью свойства 
<span class="b">Body</span> в определенном месте разметки будет добавляться выбранный компонент. То есть на место вызова 
<code>@Body</code> будет добавляться контент компонентов Index, Counter и FetchData из папки Pages.</p>
<p>С помощью элемента <code>&lt;NavMenu /&gt;</code> добавляется компонент NavMenu из файла <span class="ii">Shared/NavMenu.razor</span>, который создает систему навигации. Благодаря этому 
мы можем переходить к различным компонентам внутри приложения по набору ссылок. При этом при обращении по ссылке никаких запросов на сервер не идет. Все запросы обрабатываются локально.</p>
<h3>Выбор компонентов</h3>
<p>Основные комопненты, которые представляют отдельные ресурсы и к которым пользователь может осуществлять запросы, раплагаются в папке Pages - это 
компоненты Index, Counter, FetchData. Чтобы они могли быть сопоставлены с определенными маршрутами, в начале каждого подобного компонента указывается 
директива <span class="b">@page</span> с указанием маршрута. Например, компонент Counter:</p>
<pre class="brush:xml;">
@page "/counter"

&lt;h1&gt;Counter&lt;/h1&gt;

&lt;p&gt;Current count: @currentCount&lt;/p&gt;

&lt;button class="btn btn-primary" @onclick="IncrementCount"&gt;Click me&lt;/button&gt;

@code {
    private int currentCount = 0;

    private void IncrementCount()
    {
        currentCount++;
    }
}
</pre>
<p>Данный компонент будет сопоставляться с запросами по пути "/counter", например, <code>https://localhost:44304/counter</code>.</p>
<p>В целом компоненты Index, Counter, FetchData похожи на свои аналоги в проекте Blazor Server за тем исключением, что компонент FetchData 
в Blazor WebAssembly использует класс HttpClient для загрузки данных с сервера (из файла weather.json).</p>
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


<div class="nav"><p><a href="./1.2.php">Назад</a><a href="./">Содержание</a><a href="./1.4.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в Blazor</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/blazor/1.1.php">Что такое Blazor</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/blazor/1.2.php">Blazor Server. Первое приложение</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/blazor/1.3.php">Blazor WebAssembly. Первое приложение</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/blazor/1.4.php">Добавление Blazor Server в пустой проект ASP.NET Core</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Основы Blazor</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/blazor/2.1.php">Компоненты</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/blazor/2.2.php">Вызов и рендеринг главного компонента</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/blazor/2.3.php">Дочерние компоненты. Параметры компонентов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/blazor/2.4.php">Передача произвольного набора атрибутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/blazor/2.5.php">Обработка событий</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/blazor/2.6.php">Обработка событий дочернего компонента в родительском</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/blazor/2.7.php">Привязка данных</a></span></li>
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
	
	$("li:contains('Глава 1.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 1.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
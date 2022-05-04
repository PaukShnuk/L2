<!DOCTYPE html>
<html >
<head>
<title>Blazor | Blazor Server. Первое приложение</title>
<meta charset="utf-8" />
<meta name="description" content="Создание приложения Blazor Server, структура проекта, принцип работы, разбор компонентов">
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
<h2>Blazor Server. Первое приложение</h2><div class="date">Последнее обновление: 20.05.2020</div>

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

<p>В Blazor Server основная логика приложения располагается на стороне сервера. Если на стороне клиента присходят какие-то события, то посредством 
SignalR клиент посылает серверу информацию о произведенных действиях. Сервер получает эту информацию, обрабатывает ее и посылает клиенту ответ. 
Обновление элементов пользовательского интерфейса, обработка событий, вызовы JavaScript на клиентской стороне 
осуществляются посредством взаимодействия сервера и клиента через SignalR.</p>
<p>Создадим первое приложение с использованию Blazor Server. Для этого откроем среду Visual Studio 2019 или выше. Данная среда разработки 
имеет прекрасную поддержку фреймворка Blazor, в частности, уже по умолчанию шаблон для создания проекта приложения Blazor.</p>
<p>Итак, в Visual Studio при создании проекта выберем шаблон <span class="b">Blazor App</span>:</p>
<img src="./pics/blazor1.png" alt="Создание приложения Blazor Server и C# в Visual Studio" />
<p>После выбора данного шаблона дадим проекту какое-нибудь имя, например, HelloBlazorServerApp:</p>
<img src="./pics/blazor2.png" alt="Создание проекта Blazor Server и C# в Visual Studio" />
<p>Далее нам откроется окно для выборка шаблона проекта Blazor. На момент написания статьи был доступен только один шаблон - 
<span class="b">Blazor Server App</span>, который собствено и выберем:</p>
<img src="./pics/blazor3.png" alt="Первый проект Blazor Server в ASP.NET Core в Visual Studio" />
<p>В итоге будет создан следующий проект:</p>
<img src="./pics/blazor4.png" alt="Структура проекта Blazor Server в Visual Studio" />
<p>Можно отметить, что структура проекта Blazor похожа на проекты ASP.NET Core, в частности, проект для Razor Page. По сути мы имеем дело с 
проектом приложения ASP.NET Core, в рамках которого разворачивается функциональнось фреймворка Blazor.</p>
<p>Основные элементы проекта:</p>
<ul>
<li><p>Папка <span class="b">wwwroot</span> для хранения статических файлов, по умолчанию хранит используемые файлы css, в частности, файлы фреймворка bootstrap.</p></li>
<li><p>Папка <span class="b">Data</span> хранит классы C#, которые описывают используемые данные (класс WeatherForecast) и сервисы (класс WeatherForecastService).</p></li>
<li><p>Папка <span class="b">Pages</span> содержит страницы Razor Pages, определяющих визуальную часть приложения и его логику, а также компоненты Razor (располагаются в файлах с 
расширением <span class="ii">*.razor</span>), которые представляют основное содержание страницы.</p>
<ul>
<li><p><span class="b">_Host.cshtml</span> - главная страница (Razor Page) приложения, в рамках которой будут разворачиваться приложение.</p></li>
<li><p><span class="b">Counter.razor</span> хранит код компонента Counter, суть которого в определение счетчика, значение которого увеличивается при 
нажатии на кнопку.</p></li>
<li><p><span class="b">Error.razor</span> хранит код компонента Error, который применяется для вывода сообщения об ошибке.</p></li>
<li><p><span class="b">FetchData.razor</span> хранит код компонента FetchData, который с помощью сервиса WeatherForecastService получает некоторые данные и 
выводит их на веб-страницу</p></li>
<li><p><span class="b">Index.razor</span> хранит код компонента Index.</p></li>
</ul>
</li>
<li><p>Папка <span class="b">Shared</span> хранит дополнительные компоненты Razor</p>
<ul>
<li><p><span class="b">MainLayout.razor</span> хранит код компонента MainLayout, который определяет структуру или компоновку страницы.</p></li>
<li><p><span class="b">NavMenu.razor</span> хранит код компонента NavMenu, который определяет элементы навигации</p></li>
</ul>
</li>
<li><p><span class="b">_Imports.razor</span> содержит подключения пространств имен с помощью директивы using, которые будут подключаться 
в компоненты Razor (файлы с расширением .razor).</p></li>
<li><p><span class="b">App.razor</span> содержит определение корневого компонента приложения, который позволяет установить маршрутизацию между вложенными компонентами с помощью другого встроенного компонента Router.</p></li>
<li><p>Файл <span class="b">appsettings.json</span> хранит конфигурацию приложения.</p></li>
<li><p>Файл <span class="b">Startup.cs</span> представляет класс Startup, стандартный для приложения ASP.NET Core, где настраивается конвейер обработки запроса, внедряются сервисы и осуществляется конфигурация приложения.</p></li>
<li><p>Файл <span class="b">Program.cs</span> содержит класс Program, который представляет точку входа в приложение. В данном случае это стандартный для приложения 
ASP.NET Core класс Program, который запускает и конфигурирует хост, в рамках которого разворачивается приложение с Blazor.</p></li>
</ul>
<p>Таким образом, проект Blazor Server уже содержит некоторую базовую типовую функциональность, который позволяе нам запустить проект и оценить работу фреймворка. 
Итак, запустим проект. Вначале мы увидим код компонента Index:</p>
<img src="./pics/blazorserver1.png" rel="Первое приложение на Blazor Server и ASP.NET Core" />
<p>С помощью меню в левой части страницы мы можем перейти к другим компонентам. Например, перейдем к компоненту Counter:</p>
<img src="./pics/blazorserver2.png" rel="Компонент Counter в приложении на Blazor Server и ASP.NET Core" />
<p>Или к компоненту FetchData, который с помощью сервиса WeatherForecastService получит некоторые данные и выведет их на страницу:</p>
<img src="./pics/blazorserver3.png" rel="Компоненты и сервисы в приложении на Blazor Server и ASP.NET Core" />
<h3>Принцип работы проекта Blazor Server</h3>
<p>Теперь разберем, как вообще работает стандартный проект Blazor Server с типовым содержанием.</p>
<h3>Класс Startup</h3>
<p>Прежде всего, чтобы задействовать функциональность Blazor Server, надо в классе Startup 
добавить необходимые сервисы и настроить обработку запросов. Например, возьмем типовой класс Startup из проекта по умолчанию:</p>
<pre class="brush:c#;">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Builder;
using Microsoft.AspNetCore.Components;
using Microsoft.AspNetCore.Hosting;
using Microsoft.AspNetCore.HttpsPolicy;
using Microsoft.Extensions.Configuration;
using Microsoft.Extensions.DependencyInjection;
using Microsoft.Extensions.Hosting;
using HelloBlazorServerApp.Data;

namespace HelloBlazorServerApp
{
    public class Startup
    {
        public Startup(IConfiguration configuration)
        {
            Configuration = configuration;
        }

        public IConfiguration Configuration { get; }

        public void ConfigureServices(IServiceCollection services)
        {
            services.AddRazorPages();
            services.AddServerSideBlazor();
            services.AddSingleton&lt;WeatherForecastService&gt;();
        }

        public void Configure(IApplicationBuilder app, IWebHostEnvironment env)
        {
            if (env.IsDevelopment())
            {
                app.UseDeveloperExceptionPage();
            }
            else
            {
                app.UseExceptionHandler("/Error");
                app.UseHsts();
            }

            app.UseHttpsRedirection();
            app.UseStaticFiles();

            app.UseRouting();

            app.UseEndpoints(endpoints =&gt;
            {
                endpoints.MapBlazorHub();
                endpoints.MapFallbackToPage("/_Host");
            });
        }
    }
}
</pre>
<p>В методе ConfigureServices добавляются сервисы Blazor Server:</p>
<pre class="brush:c#;">services.AddServerSideBlazor();</pre>
<p>В методе Configure при определении конечных точек, с которыми будут связываться входящие запросы, вызывается метод <span class="b">MapBlazorHub()</span>, 
который позволяет установить подключение с браузером посредством SignalR. Благодаря этом будет происходить обмен сообщениями между сервером и клиентов в режиме реального времени.</p>
<pre class="brush:c#;">
app.UseEndpoints(endpoints =&gt;
{
	endpoints.MapBlazorHub();
	endpoints.MapFallbackToPage("/_Host");
});
</pre>
<p>Кроме того, вызов метода <code>MapFallbackToPage("/_Host")</code> позволяет установить страницу Razor Page по умолчанию для приложения 
(по умолчанию это страница <span class="ii">Pages/_Host.cshtml</span>). Она и представляет собственно тот интерфейс, который увидит пользователь.</p>
<h3>Страница _Host.cshtml</h3>
<p>Страница Razor <span class="b">_Host.cshtml</span>, которая располагается в папке Pages, является корневой страницей всего приложения. Когда к любой странице (компоненту) 
приходит запрос, то именно эта страница возвращается в ответ. А отдельные компоненты располагаются внутри этой страницы.</p>
<p>_Host.cshtml представляет типичную страницу Razor Page, которая содержит код C# и HTML:</p>
<pre class="brush:xml;">
@page "/"
@namespace HelloBlazorServerApp.Pages
@addTagHelper *, Microsoft.AspNetCore.Mvc.TagHelpers
@{
    Layout = null;
}

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0" /&gt;
    &lt;title&gt;HelloBlazorServerApp&lt;/title&gt;
    &lt;base href="~/" /&gt;
    &lt;link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" /&gt;
    &lt;link href="css/site.css" rel="stylesheet" /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;app&gt;
        &lt;component type="typeof(App)" render-mode="ServerPrerendered" /&gt;
    &lt;/app&gt;

    &lt;div id="blazor-error-ui"&gt;
        &lt;environment include="Staging,Production"&gt;
            An error has occurred. This application may no longer respond until reloaded.
        &lt;/environment&gt;
        &lt;environment include="Development"&gt;
            An unhandled exception has occurred. See browser dev tools for details.
        &lt;/environment&gt;
        &lt;a href="" class="reload"&gt;Reload&lt;/a&gt;
        &lt;a class="dismiss"&gt;🗙&lt;/a&gt;
    &lt;/div&gt;

    &lt;script src="_framework/blazor.server.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>В данном случае мы видим, что она определяет каркас веб-страницы, которую увидит пользователь в своем браузере. Но прежде всего следует обратить 
внимание на подключение внизу страницы скрипта <span class="b">_framework/blazor.server.js</span>. Это автоматически подключаемый скрипт, 
который устанавливает подключение между браузером и сервером посредством SignalR.</p>
<p>Какое содержимое будет вставляться в страницу _Host.cshtml? Это определяет компонент App. На странице он подключается с помощью tag-хелпера 
<code>&lt;Component&gt;</code>:</p>
<pre class="brush:c#;">
&lt;app&gt;
	&lt;component type="typeof(App)" render-mode="ServerPrerendered" /&gt;
&lt;/app&gt;
</pre>
<p>Атрибут <code>type</code> указывает на тип класса компонента. В данном случае это класс App. И атрибут <code>render-mode</code> со значением 
<span class="b">ServerPrerendered</span> указывает, что компонент будет предварительно рендерится в статический html-код, который затем будет загружаться на страницу.</p>
<h3>Компонент App</h3>
<p>Итак, на странцу _Host.cshtml загружается компонент App. Он располагается в файле <span class="b">App.razor</span> в корне проекта:</p>
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
<p>Компонент App использует встроенный компонент <span class="b">Router</span>, который добавляет возможность маршрутизации по вложенным компонентам. 
Его атрибут <span class="b">AppAssembly</span> указывает на сборку, в которой следует искать запрошенные вложенные компоненты.</p>
<p>При запросе компонентов может быть две ситуации: запрошенный ресурс (компонент) найден и ресурс не найден. Соответственно для каждой из этих ситуаций 
определены соответственно два элемента: <span class="b">Found</span> и <span class="b">NotFound</span></p>
<p>Компонент Found содержит другой компонент - <span class="b">RouteView</span>. Через атрибут <span class="b">RouteData</span> он получает контекст маршрутизации, 
который будут использоваться при обработке запроса. А другой атрибут - <span class="b">DefaultLayout</span> устанавливает компонент, который 
будет определять компоновку (layout) содержимого - в данном случае это компонент MainLayout.</p>
<p>Комопонент NotFound определяет, как будет рендерится ответ, если компонент для обработки запроса не найден. С помощью вложенного 
компонента <span class="b">LayoutView</span> определяется компонент, который будет задавать компоновку. В данном случае это опять же компонент MainLayout.</p>
<h3>MainLayout</h3>
<p>В обоих случаях в компоненте App, как было описано выше будет использоваться компонент <span class="b">MainLayout</span>, 
который определен в файле <span class="b">MainLayout.razor</span> в папке Shared:</p>
<pre class="brush:xml;">
@inherits LayoutComponentBase

&lt;div class="sidebar"&gt;
    &lt;NavMenu /&gt;
&lt;/div&gt;

&lt;div class="main"&gt;
    &lt;div class="top-row px-4"&gt;
        &lt;a href="https://docs.microsoft.com/aspnet/" target="_blank"&gt;About&lt;/a&gt;
    &lt;/div&gt;

    &lt;div class="content px-4"&gt;
        @Body
    &lt;/div&gt;
&lt;/div&gt;
</pre>
<p>Здесь мы видим, что этот компонент наследуется от класса LayoutComponentBase, который определяет некоторую базовую функцональность для подобных компонентов.</p>
<p>С помощью элемента <code>&lt;NavMenu /&gt;</code> добавляется компонент NavMenu из файла <span class="ii">Shared/NavMenu.razor</span>, который создает систему навигации. Благодаря чему 
при загрузке приложения в левой части станицы мы можем переходить внутри приложения по набору ссылок.</p>
<p>Другой отличительной особенностью компонента MainLayout является использование свойства <span class="b">Body</span>, унаследованного от класса LayoutComponentBase:</p>
<pre class="brush:c#;">
&lt;div class="content px-4"&gt;
	@Body
&lt;/div&gt;
</pre>
<p>Посредством свойства Body в определенном месте разметки будет рендерится выбранный для обработки запроса компонент. То есть именно за место вызова <code>@Body</code> 
будет добавляться контент компонентов Index, Counter и FetchData из папки Pages.</p>
<h3>Выбор компонентов</h3>
<p>Основные комопненты, которые представляют отдельные ресурсы и к которым пользователь может осуществлять запросы, располагаются в папке Pages - это 
компоненты Index, Counter, FetchData.</p>
<p>Возьмем самый простой компонент - Index:</p>
<pre class="brush:xml;">
@page "/"

&lt;h1&gt;Hello, world!&lt;/h1&gt;

Welcome to your new app.
</pre>
<p>Директива <code>@page "/"</code> указывает, что этот компонент будет сопоставляться с запросами к корню приложения, например, <code>https://localhost:44304/</code>. То есть по сути 
этот компонент можно рассматривать как главную страницу приложения.</p>
<p>Или другой комопнент - Counter:</p>
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
<p>Компонент counter также определяет некоторую логику на C#. В частности, он определяет переменную currentCount и метод IncrementCount, который увеличивает 
значение переменной:</p>
<pre class="brush:c#;">
private int currentCount = 0;

private void IncrementCount()
{
	currentCount++;
}
</pre>
<p>В коде html мы можем установить привязку к переменным и методам компонента:</p>
<pre class="brush:xml;">
&lt;p&gt;Current count: @currentCount&lt;/p&gt;

&lt;button class="btn btn-primary" @onclick="IncrementCount"&gt;Click me&lt;/button&gt;
</pre>
<p>Метод привязывается к событию кнопки onclick, благодаря чему при нажатии на кнопку будет срабатывает метод IncrementCount, и пользователь 
увидит новое значение currentCount.</p>
<p>При этом следует отметить, что несмотря на то, что пользователь сможет увидеть в своем браузере и значение переменной currentCount и также сможет 
нажать на кнопку, которая сгенерирует событие нажатия, но вся логика C# срабатывает на сервере. То есть после нажатия на кнопку с помощью подключенного 
скрипта <code>_framework/blazor.server.js</code> на сервер через соединение SignalR будет отправляться информация о событии нажатии, а сервер в ответ высылает клиенту инструкции 
о том, как обновить содержимое веб-страницы.</p>
<p>Третий компонент - FetchData получает с помощью внедренного сервиса WeatherForecastService данные и выводит их в код html:</p>
<pre class="brush:c#;">
@page "/fetchdata"

@using HelloBlazorServerApp.Data
@inject WeatherForecastService ForecastService

&lt;h1&gt;Weather forecast&lt;/h1&gt;

&lt;p&gt;This component demonstrates fetching data from a service.&lt;/p&gt;

@if (forecasts == null)
{
    &lt;p&gt;&lt;em&gt;Loading...&lt;/em&gt;&lt;/p&gt;
}
else
{
    &lt;table class="table"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;Date&lt;/th&gt;
                &lt;th&gt;Temp. (C)&lt;/th&gt;
                &lt;th&gt;Temp. (F)&lt;/th&gt;
                &lt;th&gt;Summary&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            @foreach (var forecast in forecasts)
            {
                &lt;tr&gt;
                    &lt;td&gt;@forecast.Date.ToShortDateString()&lt;/td&gt;
                    &lt;td&gt;@forecast.TemperatureC&lt;/td&gt;
                    &lt;td&gt;@forecast.TemperatureF&lt;/td&gt;
                    &lt;td&gt;@forecast.Summary&lt;/td&gt;
                &lt;/tr&gt;
            }
        &lt;/tbody&gt;
    &lt;/table&gt;
}

@code {
    private WeatherForecast[] forecasts;

    protected override async Task OnInitializedAsync()
    {
        forecasts = await ForecastService.GetForecastAsync(DateTime.Now);
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


<div class="nav"><p><a href="./1.1.php">Назад</a><a href="./">Содержание</a><a href="./1.3.php">Вперед</a></p></div></div>
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
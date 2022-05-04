<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core | Сжатие ответа</title>
<meta charset="utf-8" />
<meta name="description" content="Компрессия (сжатие) ответа в ASP.NET Core, middleware Microsoft.AspNetCore.ResponseCompression, модуль Dynamic Compression в IIS">
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
<h2>Сжатие ответа</h2><div class="date">Последнее обновление: 19.12.2019</div>

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

<p>Компрессия или сжатие ответа представляет один из инструментов, которые позволяют уменьшить объем отправляемых клиенту данных без потери самих данных.</p>
<p>Для компрессии ответа в рамках ASP.NET Core мы можем использовать либо внутренние средства конкретного веб-сервера: модуль динамического сжатия (Dynamic Compression module) 
в IIS, модуль mod_deflate в Apache или инструменты компрессии в Nginx. Однако эти инструменты не всегда бывают доступны, особенно когда приложение напрямую хостится 
в рамках таких веб-серверов как HTTP.sys или Kestrel. И в этом случае мы можем воспользоваться специальным компонентом 
middleware - <span class="b">Microsoft.AspNetCore.ResponseCompression</span>. Рассмотрим, как использовать этот компонент.</p>
<p>Для этого создадим возбмем проект ASP.NET Core по типу Empty. Этот проект уже содержит нужный нам Nuget-пакет 
<span class="b">Microsoft.AspNetCore.ResponseCompression</span>.</p>
<p>Теперь используем middleware в классе Startup:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Builder;
using Microsoft.AspNetCore.Hosting;
using Microsoft.AspNetCore.Http;
using Microsoft.Extensions.DependencyInjection;

namespace CompressionApp
{
    public class Startup
    {
        public void ConfigureServices(IServiceCollection services)
        {
            // добавляем сервис компрессии
            services.AddResponseCompression(options=&gt;options.EnableForHttps = true);
        }
        
        public void Configure(IApplicationBuilder app)
        {
            // подключаем компрессию
            app.UseResponseCompression();

            app.Run(async context =&gt;
            {
                // отправляемый текст
                string loremIpsum = "Lorem Ipsum is simply dummy text ... including versions of Lorem Ipsum.";
                // установка mime-типа отправляемых данных
                context.Response.ContentType = "text/plain";
                // отправка ответа
                await context.Response.WriteAsync(loremIpsum);
            });
        }
    }
}
</pre>
<p>Вначале нам надо подключить соответствующий сервис в методе <code>ConfigureServices()</code>:</p>
<pre class="brush:c#;">services.AddResponseCompression(options=&gt;options.EnableForHttps = true);</pre>
<p>Следует учитывать, что для протокола HTTPS по умолчанию отключено сжатие, поэтому в вызове данного метода подключается сжатие и для HTTPS. 
Однако если HTTPS не используется, то можно сократить вызов метода:</p>
<pre class="brush:c#;">
public void ConfigureServices(IServiceCollection services)
{
    services.AddResponseCompression();
}
</pre>
<p>Затем в методе Configure задействуем middleware сжатия:</p>
<pre class="brush:c#;">app.UseResponseCompression();</pre>
<p>И еще важный момент для использования компрессии - при отправке ответа нам обязательно надо установить MIME-тип отправляемых данных:</p>
<pre class="brush:c#;">context.Response.ContentType = "text/plain";</pre>
<p>То есть в данном случае отправляем простой текст, поэтому MIME-тип <code>text/plain</code>. На данный момент middleware компрессии поддерживает 
следующие MIME-типы:</p>
<ul>
<li><p>text/plain</p></li>
<li><p>text/css</p></li>
<li><p>application/javascript</p></li>
<li><p>text/html</p></li>
<li><p>application/xml</p></li>
<li><p>text/xml</p></li>
<li><p>application/json</p></li>
<li><p>text/json</p></li>
</ul>
<p>При использовании ASP.NET MVC или Razor Pages необязательно указывать MIME-тип ответа.</p>
<p>Запустим проект на выполнение из под сервера Kestrel (не через IIS):</p>
<img src="./pics/2.27.png" alt="Запуск через Kestrel в ASP.NET Core" />
<img src="./pics/2.25.png" alt="Компрессия в ASP.NET Core" />
<p>На уровне протокола HTTP это выражается также в установлении заголовка <span class="b">content-encoding</span>, который сервер вместе с ответом посылает 
клиенту. По умолчанию этот заголовок имеет значение <code>content-encoding: br</code>, который говорит о том, что используется сжатие 
в формат <code>Brotli</code></p>
<p>Теперь уберем из метода Configure применение компрессии:</p>
<pre class="brush:c#;">
public void Configure(IApplicationBuilder app)
{
    app.Run(async context =&gt;
    {
        string loremIpsum = "Lorem Ipsum is simply dummy text ... including versions of Lorem Ipsum.";
        await context.Response.WriteAsync(loremIpsum);
    });
}
</pre>
<p>В этом случае мы получим немного другие значения.</p>
<img src="./pics/2.26.png" alt="Компрессия в ASP.NET MVC Core" />
<p>При использовании компрессии надо учитывать обратную сторону компрессии - 
уменьшение производительности: затраты на компрессию могут превосходить выгоду от уменьшения объема данных. Поэтому, для небольших объемов (меньше 1 кб) не очень рационально применение компрессии.</p>


<h3>Провайдеры компрессии</h3>
<p>Механизм компрессии на уровне протокола HTTP концентрруется вокруг двух заголовков. Вначале клиент в запросе посылает заголовок <span class="b">Accept-Encoding</span>, 
в котором уведомляет сервер, какие форматы сжатия он поддерживает. Сервер, получив запрос, использует этот заголовок для выбора формата сжатия и затем 
посылает вместе с ответом клиенту заголовок <span class="b">content-encoding</span>, в котором указывает использованный формат сжатия. 
Если клиент поддерживает сжатие в формат Brotli, то по умолчанию используется этот формат. Если клиент не поддерживает данный формат, то используется 
сжатия gzip.</p>
<h4>Brotli Compression Provider</h4>
<p>В примере выше по умолчанию использовалось сжатие в формат Brotli с помощью класса <span class="b">BrotliCompressionProvider</span>. 
Он имеет свойство <span class="b">Level</span>, которое устанавливает уровни 
сжатия и может принимать следующие значения:</p>
<ul>
<li><p><span class="b">CompressionLevel.Fastest</span>: сжатие должно происходить как можно быстрее, даже если оно будет неоптимальным в плане уменьшения объема данных.</p></li>
<li><p><span class="b">CompressionLevel.NoCompression</span>: сжатие не применяется</p></li>
<li><p><span class="b">CompressionLevel.Optimal</span>: данные должны быть максимально сжаты, даже если для этого потребуется больше времени</p></li>
</ul>
<p>Для изменения уровня компрессии, можно изменить метод <code>ConfigureServices()</code> следующим образом:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.ResponseCompression;
using System.IO.Compression;

//............................

public void ConfigureServices(IServiceCollection services)
{
    services.AddResponseCompression(options=&gt;options.EnableForHttps = true);
    
	services.Configure&lt;BrotliCompressionProviderOptions&gt;(options =&gt;
    {
        options.Level = CompressionLevel.Optimal;
    });
}
</pre>

<h4>GzipCompressionProvider</h4>
<p>Также мы можем использовать сжатие gzip, а если точнее класс <span class="b">GzipCompressionProvider</span>, который обеспечивает компрессию gzip. 
Он используется, если клиент не поддерживает сжатие в формат Brotli. Он также имеет свойство <span class="b">Level</span>, которое принимает те же 
значения, что и BrotliCompressionProvider, и который мы можем настроить подобным образом:</p>
<pre class="brush:c#;">
public void ConfigureServices(IServiceCollection services)
{
    services.AddResponseCompression(options=&gt;options.EnableForHttps = true);
    
	services.Configure&lt;GzipCompressionProviderOptions&gt;(options =&gt;
    {
        options.Level = CompressionLevel.Optimal;
    });
}
</pre>
<h4>Создание своих провайдеров</h4>
<p>При необходимости мы можем создавать и применять свои провайдеры сжатия. Например, используем сжатие Deflate, и для этого определим следующий класс:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.ResponseCompression;
using System.IO;
using System.IO.Compression;

namespace CompressionApp
{
    public class DeflateCompressionProvider : ICompressionProvider
    {
        public string EncodingName =&gt; "deflate";
        public bool SupportsFlush =&gt; true;

        public Stream CreateStream(Stream outputStream)
        {
            return new DeflateStream(outputStream, CompressionLevel.Optimal);
        }
    }
}
</pre>
<p>Для создания провайдера реализуем интерфейс <span class="b">ICompressionProvider</span>, в котором есть два свойства SupportsFlush и EncodingName и метод CreateStream.</p>
<p>Свойство <span class="b">EncodingName</span> указывает на формат сжатия, который поддерживает клиент. Данный формат содержится в заголовке <code>Accept-Encoding</code> в запросе к серверу, 
наподобие:</p>
<pre class="brush:js;">
Accept-Encoding: gzip, deflate, sdch, br
</pre>
<p>То есть данный провайдер будет срабатывать, если клиент прислал в запросе в заголовке Accept-Encoding значение <span class="b">deflate</span>.</p>
<p>Свойство <span class="b">SupportsFlush</span> указывает, поддерживается ли сброс записи в поток.</p>
<p>Метод <span class="b">CreateStream()</span> возвращает сам поток ответа после сжатия или фактически обертка над изначальным потоком ответа, который передается в качестве параметра в метод. Для сжатия применяется встроенный класс <span class="b">DeflateStream()</span>.</p>
<p>Применим этот провайдер в методе <code>ConfigureServices()</code> класса Startup:</p>
<pre class="brush:c#;">
public void ConfigureServices(IServiceCollection services)
{
    services.AddResponseCompression(options =&gt;
    {
        options.EnableForHttps = true;
        options.Providers.Add(new DeflateCompressionProvider());
    });
}
</pre>
<p>Для добавления провайдера вызывается метод <code>options.Providers.Add()</code>.</p>
<p>Таким образом, если клиент допускает сжатие deflate, то будет использоваться именно провайдер DeflateCompressionProvider:</p>
<img src="./pics/2.45.png" alt="Defalte compression in ASP.NET Core" />
<p>Стоит отметить, что если мы добавляем кастомный провайдер компрессии, то в случае если тип сжатия не поддерживается клиентом, то, согласно документации 
microsoft, следует добавлять и провайдеры по умолчанию BrotliCompressionProvider и GzipCompressionProvider:</p>
<pre class="brush:c#;">
public void ConfigureServices(IServiceCollection services)
{
    services.AddResponseCompression(options =&gt;
    {
        options.EnableForHttps = true;
		options.Providers.Add(new DeflateCompressionProvider());
		options.Providers.Add&lt;BrotliCompressionProvider&gt;();
		options.Providers.Add&lt;GzipCompressionProvider&gt;();
    });
}
</pre>
<p>В итоге при получении запроса провайдеры будут перебираться в том порядке, в котором они добавлены. И первый попавшийся провайдер, формат сжатия которого поддерживается 
клиентом, и будет выбран для осуществления компрессии.</p>
<h3>Добавление MIME-типа</h3>
<p>Выше был перечислен весь набор MIME-типов по умолчанию, которые используются в Microsoft.AspNetCore.ResponseCompression, но при необходимости мы можем добавить новый MIME-тип:</p>
<pre class="brush:c#;">
services.AddResponseCompression(options =&gt;
{
	options.EnableForHttps = true;
    options.MimeTypes = ResponseCompressionDefaults.MimeTypes.Concat(new[]
    {
        "image/svg+xml",
        "application/atom+xml"
    }); 
    options.Providers.Add&lt;GzipCompressionProvider&gt;();
});
</pre>

<h3>Динамическая компрессия в IIS</h3>
<p>Если мы используем в качестве прокси-сервера IIS, то мы можем воспользоваться модулем динамической компрессии, более того по умолчанию он включен. Если 
же модуль необходимо отключить, то в проекте в файле конфигурации <span class="b">web.config</span> нужно добавить элемент 
<span class="b">&lt;urlCompression&gt;</span> и указать у него атрибут <code>doStaticCompression="false"</code></p>
<p>Если мы работаем с Visual Studio 2017/2019, то в ней по умолчанию файл web.config отсутствует. Поэтому добавим его:</p>
<img src="./pics/2.36.png" alt="Модуль urlCompression в ASP.NET Core" />
<p>Изменим файл web.config, использовав элемент urlCompression:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;configuration&gt;
  &lt;system.webServer&gt;
    &lt;handlers&gt;
      &lt;add name="aspNetCore" path="*" verb="*" modules="AspNetCoreModule" resourceType="Unspecified"/&gt;
    &lt;/handlers&gt;
    &lt;aspNetCore processPath="%LAUNCHER_PATH%" arguments="%LAUNCHER_ARGS%" stdoutLogEnabled="false" stdoutLogFile=".\logs\stdout" forwardWindowsAuthToken="false"/&gt;
    
	&lt;urlCompression doDynamicCompression="true"/&gt; 
	
&lt;/system.webServer&gt;
&lt;/configuration&gt;
</pre>
<p>Но даже если мы используем IIS, это не значит, что мы не можем вместе с этим использовать и компонент <code>Microsoft.AspNetCore.ResponseCompression</code>, правда, это не сильно увеличит сжатие. 
К примеру, были протестированы различные ситуации в использовании компрессии для одного и того же динамически формируемого документа html:</p>
<ul>
<li><p>IIS без модуля динамической компрессии - 7,7 кБ</p></li>
<li><p>IIS с включенным модулем динамической компрессии - 2,5 кБ</p></li>
<li><p>IIS с включенным модулем динамической компрессии и Microsoft.AspNetCore.ResponseCompression - 2,3 кБ</p></li>
<li><p>Kestrel без Microsoft.AspNetCore.ResponseCompression - 7,5 кБ</p></li>
<li><p>Kestrel с Microsoft.AspNetCore.ResponseCompression - 2,1 кБ</p></li>
</ul>
<p>Таким образом, сжатие, что через Microsoft.AspNetCore.ResponseCompression, что через модуль динамической компрессии IIS, дает неплохое уменьшение объема 
отправляемых данных, в то же время различные ситуации сжатия несильно будут отличаться.</p>
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


<div class="nav"><p><a href="./14.2.php">Назад</a><a href="./">Содержание</a><a href="./14.4.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 24.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 24.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
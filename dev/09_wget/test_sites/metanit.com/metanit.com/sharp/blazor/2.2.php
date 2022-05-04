<!DOCTYPE html>
<html >
<head>
<title>Blazor | Вызов и рендеринг главного компонента</title>
<meta charset="utf-8" />
<meta name="description" content="Рендеринг главного компонента в Blazor, параметр RenderMode, ServerPrerendered, генерация статического кода html из компонента, маркеры компонентов, вызов главного компонента, метод Html.RenderComponentAsync">
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
<h2>Вызов и рендеринг главного компонента</h2><div class="date">Последнее обновление: 12.03.2020</div>

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

<h3>Вызов главного компонента</h3>
<p>Работа собственно приложения Blazor начинается с вызова главного компонента приложения, в рамках которого раазворачиваются все остальные компоненты. 
Вызов главного компонента в Blazor Server производится либо в коде страницы Razor Page, либо в представлении MVC.</p>
<p>Для вызова компонента можно использовать два способа: tag-хелпер <span class="b">&lt;component&gt;</span> 
и html-хелпер <span class="b">Html.RenderComponentAsync()</span>.</p>
<p>Возьмем простейший проект Blazor Server со страницей _Host.cshtml и компонентом App.razor</p>
<img src="./pics/razorcomponents1.png" alt="Компоненты Razor" />
<h4>Tag-хелпер &lt;component&gt;</h4>
<p>Перед использованием tag-хелпера &lt;component&gt; следует не забывать подключать в представление соответствующий хелпер из пространства имен 
<code>Microsoft.AspNetCore.Mvc.TagHelpers</code>.</p>
<pre class="brush:c#;">@addTagHelper *, Microsoft.AspNetCore.Mvc.TagHelpers</pre>
<p>Например, у нас есть следующий компонент App в файле <span class="b">App.razor</span>:</p>
<pre class="brush:xml;">
&lt;h1&gt;Hello Blazor&lt;/h1&gt;
&lt;h2&gt;Первое приложение на Blazor&lt;/h2&gt;
</pre>
<p>Для вызова этого компонента определим следующую страницу <span class="b">_Host.cshtml</span>:</p>
<pre class="brush:c#;">
@page  "/"
@*SimpleBlazorServerApp - название проекта, SimpleBlazorServerApp.Pages - пространство имен страницы*@
@namespace SimpleBlazorServerApp.Pages
@addTagHelper *, Microsoft.AspNetCore.Mvc.TagHelpers
@{
    Layout = null;
}

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Hello Blazor Server&lt;/title&gt;
    &lt;base href="~/" /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;component type="typeof(App)" render-mode="ServerPrerendered" /&gt;
    &lt;script src="_framework/blazor.server.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Основные два свойства тега component - это свойство Type и свойство RenderMode, значения которых устанавливаются через соответствующие атрибуты. Эти два атрибута мы обязательно 
должны указать.</p>
<p>Атрибут <code>type</code> получает тип компонента, который надо отобразить. Атрибут <code>render-mode</code> задает способ рендеринга компонента. Способы рендеринга будут рассмотрены далее.</p>
<p>В итоге на веб-странице мы увидит содержимое, определяемое компонентом App:</p>
<img src="./pics/razorcomponents2.png" alt="Tag-helper component in Razor Pages and Blazor Server" />
<h4>Метод Html.RenderComponentAsync()</h4>
<p>Вызов с помощью метода <code>Html.RenderComponentAsync()</code> на странице _Host.cshtml:</p>
<pre class="brush:xml;">
@page  "/"
@namespace SimpleBlazorServerApp.Pages

@{
    Layout = null;
}
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Hello Blazor Server&lt;/title&gt;
    &lt;base href="~/" /&gt;
&lt;/head&gt;
&lt;body&gt;
    @(await Html.RenderComponentAsync&lt;App&gt;(RenderMode.ServerPrerendered))
    &lt;script src="_framework/blazor.server.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Метод <code>RenderComponentAsync</code> типизируется классом компонента (в данном случае - класс App), а в качестве параметра в него 
передается значение перечисления <code>RenderMode</code> (в данном случае RenderMode.ServerPrerendered), которое задает способ рендеринга компонента.</p>
<p>Результат будет аналогичен использованию tag-хелпера <code>&lt;component&gt;</code> в примере выше.</p>
<h3>Рендеринг компонента</h3>
<p>При вызове главного компонента Blazor на странице Razor Pages или в представлении MVC указывается способ рендеринга. Есть три способа рендеринга компонента.</p>
<h4>ServerPrerendered</h4>
<p>ServerPrerendered представляет наиболее оптимальный вариант, при котором компонент предварительно рендерится в статический код HTML. А на 
станицу добавляется маркер компонента. При обращении к компоненту приложение использует маркер для загрузки компонента и работы с ним.</p>
<p>Например, определим следующий компонент App.razor:</p>
<pre class="brush:c#;">
@using Microsoft.AspNetCore.Components.Web
&lt;h1&gt;Hello Blazor Server!&lt;/h1&gt;

&lt;button @onclick="IncrementCount"&gt;+&lt;/button&gt;
&lt;span&gt;@currentCount&lt;/span&gt;
&lt;button @onclick="DecrementCount"&gt;-&lt;/button&gt;

@code {
    private int currentCount = 0;

    private void IncrementCount()
    {
        currentCount++;
    }
    private void DecrementCount()
    {
        currentCount--;
    }
}
</pre>
<p>Например, для вызова этого компонента определим следующую страницу <span class="b">_Host.cshtml</span>:</p>
<pre class="brush:c#;">
@page  "/"
@*SimpleBlazorServerApp - название проекта*@
@namespace SimpleBlazorServerApp.Pages
@addTagHelper *, Microsoft.AspNetCore.Mvc.TagHelpers
@{
    Layout = null;
}
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Hello Blazor Server&lt;/title&gt;
    &lt;base href="~/" /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;component type="typeof(App)" render-mode="ServerPrerendered" /&gt;
    &lt;script src="_framework/blazor.server.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>При выполнении приложения будет формироваться следующая веб-страница:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Hello Blazor Server&lt;/title&gt;
    &lt;base href="/" /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;app&gt;
		&lt;!--Blazor:{"sequence":0,"type":"server","prerenderId":"67917cc022b146c4910bef5070482730","descriptor":"CfDJ8Pbys5I2TldJqaAAIQXG\u002BJ\u002B/rS1/n9LH7cwWKKIAEb8zSNcUV02Qsdw8ND9E5I7ncpPXOQTCSiYiXJ7fPmDyMvn531jw9oXB9bS9Ne3FKrxUM3GGOogTE5eQh5RS3B48lldqivTp7EV0\u002BPipc1a2UjnleybQjiNgu1n3F\u002B4Hbd/zPoCjdmknw7PEYbZnAYOd2E69n41FrakxfSDeps735RF3/r5C\u002BrhT0jav8beQOQK8fZDNpXjGHpvQDBXRooCZj0tqcFk4A6OPFMVF8by/dC815diV87yIPaWEmrFRZ/UCTlLKt0yRxZheTaM2miulbtwmUIEeK0oVWsxs2SCV0/2EiwxsSMpVQRn2ityhPgJpgUQ6zIVuluGiNEUpVz/Gtw=="}--&gt;
		&lt;h1&gt;Hello Blazor Server!&lt;/h1&gt;

		&lt;button&gt;&#x2B;&lt;/button&gt;
		&lt;span&gt;0&lt;/span&gt;
		&lt;button&gt;-&lt;/button&gt;
		&lt;!--Blazor:{"prerenderId":"67917cc022b146c4910bef5070482730"}--&gt;
    &lt;/app&gt;
    &lt;script src="_framework/blazor.server.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Здесь мы видим, что кроме собственно кода компонента на страницу добавляется некий комментарий, который начинается с <code>&lt;!--Blazor:</code>. Это 
собственно и есть код маркера. Что он представляет? Фактически он содержит json-объект, который имеет ряд свойств:</p>
<ul>
<li><p><code>sequence</code> указывает на порядок рендеринга компонента на сервере.</p></li>
<li><p><code>type</code> указывает на тип маркера. В данном случае он имеет значение "server".</p></li>
<li><p><code>prerenderId</code> - уникальный идентификатор, который позволяет уникально определить маркер.</p></li>
<li><p><code>descriptor</code> содержит значение, которое позволяет серверу валидировать корректность компонента</p></li>
</ul>
<p>В итоге при загрузке страницы мы увидим визуальную часть, определяемую компонентом, и сможем с ним взаимодействовать, нажимая на кнопки:</p>
<img src="./pics/blazorserver10.png" alt="Рендеринг компонентов Blazor Server и render-mode ServerPrerendered" />
<h3>Server</h3>
<p>При значении <code>Server</code> на страницу также добавляется маркер компонента. При обращении к компоненту приложение использует маркер 
для загрузки компонента и работы с ним. Однако из компонента не генерируется предварительно статический код html и он не добавляется на страницу.</p>
<p>Например, определим следующую страницу <span class="b">_Host.cshtml</span>:</p>
<pre class="brush:c#;">
@page  "/"
@*SimpleBlazorServerApp - название проекта*@
@namespace SimpleBlazorServerApp.Pages
@addTagHelper *, Microsoft.AspNetCore.Mvc.TagHelpers
@{
    Layout = null;
}
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Hello Blazor Server&lt;/title&gt;
    &lt;base href="~/" /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;component type="typeof(App)" render-mode="Server" /&gt;
    &lt;script src="_framework/blazor.server.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>При выполнении приложения будет формироваться следующая веб-страница:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Hello Blazor Server&lt;/title&gt;
    &lt;base href="/" /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;app&gt;
            &lt;!--Blazor:{"sequence":0,"type":"server","descriptor":"CfDJ8Pbys5I2TldJqaAAIQXG\u002BJ9UR9qlwsfHAVTFVBWp8O3khiVBRE3ZRHdNryQUx7/kS0JoFoV53y5cE9A5stP5zbiJ9UZ\u002BBqPqveKT3yEE6vyJiBoc8376hy2BozVeZyDIudS/MhPde2\u002BgH84EXrqlYgIwlUmCwhMoTfTh3ejmRsFs4Jrrc\u002B1lwUIW\u002B6ymFtNUa42qqmHWKy0Teo7OHe7TAKVR4xI2DBfXqXWSXAoZN40Tg5D\u002B5H1gej7YvZ23joUOi9wSyGIeG/zU2Jy6tf0dARia2wnkCtQmI36/tttJxOP2uAV0sqkuN4yw603aWefbyR9z3AtNkLNez7Glp\u002B7RKNIf9Qd0cYXr9UsiGm5FfEGcTXVlFpIQPkseHKcwxdHDbg=="}--&gt;
        &lt;/app&gt;
    &lt;script src="_framework/blazor.server.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Теперь мы не увидим на странице кода html, который представляет компонент, а лишь маркер, используемый для загрузки компонента. 
Тем не менее визуально страница будет выглядеть также, как и в случае с ServerPrerendered, и мы также сможем взаимодействовать с компонентом, 
нажимая на кнопки. То есть компонент также поддерживать интерактивность.</p>
<h3>Static</h3>
<p>Представляет самый простой способ, при котором компонент рендерится в статический код HTML, который вставляется в код страницы:</p>
<pre class="brush:xml;">
@page  "/"
@namespace SimpleBlazorServerApp.Pages
@addTagHelper *, Microsoft.AspNetCore.Mvc.TagHelpers
@{
    Layout = null;
}
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Hello Blazor Server&lt;/title&gt;
    &lt;base href="~/" /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;app&gt;
        &lt;component type="typeof(App)" render-mode="Static" /&gt;
    &lt;/app&gt;
    &lt;script src="_framework/blazor.server.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Из компонента будет сгенерирован статический код html, который будет добавлен на страницу:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;Hello Blazor Server&lt;/title&gt;
    &lt;base href="/" /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;app&gt;
        &lt;h1&gt;Hello Blazor Server!&lt;/h1&gt;

    &lt;button&gt;&#x2B;&lt;/button&gt;
    &lt;span&gt;0&lt;/span&gt;
    &lt;button&gt;-&lt;/button&gt;
    &lt;/app&gt;
    &lt;script src="_framework/blazor.server.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Здесь мы видим, что веб-страница не содержит никакого маркера, только непосредственно код html, сгенерированный из компонента. Визуально мы получим тот же контент, 
но теперь если мы начнем нажимать на кнопки, то никаких событий не произойдет, значение не будет изменяться. То есть компонент полностью лишен интерактивности.</p>
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


<div class="nav"><p><a href="./2.1.php">Назад</a><a href="./">Содержание</a><a href="./2.3.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 2.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 2.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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
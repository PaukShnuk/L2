<!DOCTYPE html>
<html >
<head>
<title>Blazor | Добавление Blazor Server в пустой проект ASP.NET Core</title>
<meta charset="utf-8" />
<meta name="description" content="Добавление Blazor Server в пустой проект ASP.NET Core, изменение класса Startup, определение компонентов и Razor Page _Host.cshtml">
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
<h2>Добавление Blazor Server в пустой проект ASP.NET Core</h2><div class="date">Последнее обновление: 03.02.2020</div>

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

<p>Visual Studo уже по умолчанию предоставляет нам шаблон проекта Blazor Server с типовым содержимым. Тем не менее мы можем взять и обычный 
проект ASP.NET Core и с нуля добавить в него все необходимые файлы, без необходимости удалять ненужные файлы и функционал, которые добавляются по умолчанию. 
Рассмотрим, как добавить функциональность Blazor Server в пустой проект ASP.NET Core.</p> 
<p>Для этого в качестве типа проекта выберем 
<span class="b">ASP.NET Core Web Application</span>:</p>
<img src="./pics/blazorserver4.png" alt="Добавление Blazor Server в пустой проект ASP.NET Core" />
<p>И далее выберем шаблон <span class="b">Empty</span></p>
<img src="./pics/blazorserver5.png" alt="Создание проекта Blazor Server с нуля" />
<p>Основным стоительным блоком приложения Razor являются компоненты. Определим один компонент. Для этого в корень проекта добавим новый 
элемент <span class="b">Razor Component</span>, который назовем <span class="b">App.razor</span>:</p>
<img src="./pics/blazorserver7.png" alt="Добавление компонента Razor Component в проект Blazor Server" />
<p>Определим в нем самый простейший код:</p>
<pre class="brush:xml;">
&lt;h1&gt;Hello Blazor Server!&lt;/h1&gt;
&lt;h2&gt;Первое приложение на Blazor&lt;/h2&gt;
</pre>
<p>Мы могли бы и определить более сложную структуру, добавить более сложную логику, маршрутизацию и кучу компонентов, но пока остановимся на этом. 
Теперь нам надо добавить представление или страницу Razor, которая будет представлять визуальный интерфейс и где собственно будет запускаться наш компонент.</p>
<p>Для этого добавим проект папку Pages, а в нее новый элемент <span class="b">Razor View</span>, который назовем <span class="b">_Host.cshtml</span>:</p>
<img src="./pics/blazorserver6.png" alt="Добавление Razor Page _Host.cshtml в проект Blazor Server" />
<p>Определим в файле следующий код:</p>
<pre class="brush:c#;">
@page "/"
@*пространство имен razor view*@
@namespace SimpleBlazorServerApp.Pages
@addTagHelper *, Microsoft.AspNetCore.Mvc.TagHelpers
@{
    Layout = null;
}

&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0" /&gt;
    &lt;title&gt;Hello Blazor Server&lt;/title&gt;
    &lt;base href="~/" /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;app&gt;
        &lt;component type="typeof(App)" render-mode="ServerPrerendered" /&gt;
    &lt;/app&gt;

    &lt;script src="_framework/blazor.server.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Директива <code>@page "/"</code> указывает, что этот файл представляет страницу Razor Page, которая будет обрабатывать запросы к корню приложения. Далее определяется пространство имен страницы (Название_Проекта.Pages):</p> 
<pre class="brush:c#;">@namespace SimpleBlazorServerApp.Pages</pre>
<p>И затем подключаются тегхелперы:</p>
<pre class="brush:c#;">@addTagHelper *, Microsoft.AspNetCore.Mvc.TagHelpers</pre>
<p>Затем идет стандартный код html вплоть до элемента app, где подключается компонент:</p>
<pre class="brush:xml;">
&lt;app&gt;
	&lt;component type="typeof(App)" render-mode="ServerPrerendered" /&gt;
&lt;/app&gt;
</pre>
<p>Стоит отметить, что использование элемент app в данном случае не имеет никакого сакрального смысла, мы можем заменить его, например, на элемент div. 
Это конценциональная условность, которая позволяет выделить элемент на странице для рендеринга компонента.</p>
<p>Компонент Razor добавляется с помощью tag-хелпера <code>&lt;component&gt;</code>. 
Параметр <code>type</code> указывает на тип компонента - в данном случае передается название компонента. А параметр <code>render-mode</code> 
определяет на тип рендеринга. Значение "ServerPrerendered" указывает, что компонент будет рендерится предварительно в статический код HTML. 
Кроме того, при рендеринге компонента будет возвращать специальный маркер с дополнительной информацией о компоненте. Затем маркер будет использоваться для 
загрузки статического кода компонента.</p>
<p>Также стоит отметить, что использование тег-хелпера <code>component</code> в принципе необязательно - вместо этого мы можем использовать 
html-хелпер <code>Html.RenderComponentAsync</code>.</p>
<p>И в самом низу страницы подключается скрипт "_framework/blazor.server.js". Это автогенерируемый скрипт, нам не надо его специально подключать. Его роль заключается 
в установке подключения SignalR с сервером.</p>
<p>В итоге весь проект будет выглядеть так:</p>
<img src="./pics/blazorserver8.png" alt="Первое веб-приложение Blazor Server" />
<p>После создания проекта изменим класс Startup следующим образом:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Builder;
using Microsoft.Extensions.DependencyInjection;

namespace SimpleBlazorServerApp
{
    public class Startup
    {
        public void ConfigureServices(IServiceCollection services)
        {
            services.AddRazorPages();
            services.AddServerSideBlazor();
        }

        public void Configure(IApplicationBuilder app)
        {
            app.UseDeveloperExceptionPage();
			
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
<p>В данном случае мы будем использовать страницу Razor Pages, в рамках которой будет выполняться приложение Blazor, поэтому в методе ConfigureServices 
добавляются необходимые сервисы для работы с RazorPages:</p>
<pre class="brush:c#;">services.AddRazorPages();</pre>
<p>И также в методе ConfigureServices необходимо добавить сервисы Blazor Server:</p>
<pre class="brush:c#;">services.AddServerSideBlazor();</pre>
<p>В методе Configure вызывается метод <span class="b">MapBlazorHub()</span>, чтобы связать клиентскую часть приложения с сервером 
посредством соединения SignalR. Благодаря этом будет происходить обмен сообщениями между сервером и клиентов в режиме реального времени.</p>
<pre class="brush:c#;">
app.UseEndpoints(endpoints =&gt;
{
	endpoints.MapBlazorHub();
	endpoints.MapFallbackToPage("/_Host");
});
</pre>
<p>А вызов метода <code>MapFallbackToPage("/_Host")</code> позволяет установить страницу Razor Page по умолчанию для приложения - в нашем случае 
страница "_Host.cshtml" в папке Pages.</p>
<p>Стоит отметить, что в методе Configure добавляется middleware для обслуживания статических файлов - <code>app.UseStaticFiles();</code>. 
Хотя у нас в проекте на первый взгляд нет никаких статических файлов, тем не менее на странице _Host.cshtml подключается скрипт 
"_framework/blazor.server.js". Поэтому для обработки запросов к этому скрипту необходимо подключить данный middleware.</p>
<p>Запустим приложение и увидим в браузере код нашего компонента:</p>
<img src="./pics/blazorserver9.png" alt="Компоненты Razor в проекте Blazor Server" />
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


<div class="nav"><p><a href="./1.3.php">Назад</a><a href="./">Содержание</a><a href="./2.1.php">Вперед</a></p></div></div>
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
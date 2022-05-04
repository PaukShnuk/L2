<!DOCTYPE html>
<html >
<head>
<title>Blazor | Обработка событий</title>
<meta charset="utf-8" />
<meta name="description" content="Обработка событий в компонентах в Blazor, типы и аргументы событий, onclick, MouseEventArgs, асинхронные обработчики событий">
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
<h2>Обработка событий</h2><div class="date">Последнее обновление: 15.03.2020</div>

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

<p>Компоненты поддерживают обработку событий. Если элемент html имеет атрибуты вида <code>on{СОБЫТИЕ}</code>, которые позволяют связать 
событие с некоторой функцией javascript (например, атрибут onclick), 
то Blazor предоставляет их двойники - атрибуты типа <code>@on{СОБЫТИЕ}</code>, которые позвляют прикрепить к событию в качестве обработчика метод компонента.</p>
<p>Например, определеим следующий компонент:</p>
<pre class="brush:c#;">
@using Microsoft.AspNetCore.Components.Web
&lt;h1&gt;Blazor Counter&lt;/h1&gt;

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
<p>Прежде всего стоит отметить, что поддержка привязки событий сосредоточена в пространстве имен <code>Microsoft.AspNetCore.Components.Web</code>. 
В частности, в нем определен класс <a href="https://docs.microsoft.com/en-us/dotnet/api/microsoft.aspnetcore.components.web.eventhandlers?view=aspnetcore-3.1" rel="nofollow">EventHandlers</a>, 
который конфигурирует сопоставление между именами событий и типами аргументов события. Собственно в определении классов можно посмотреть все поддерживаемые 
типы событий.</p>
<p>Html-элемент <code>&lt;button&gt;</code>, который представляет кнопку, поддерживает атрибут <code>onclick</code>, который позволяет 
при нажатии кнопки вызвать какую-нибудь функцию javascript. Поэтому Blazor предоставляет для этого атрибута его аналог <span class="b">@onclick</span>. 
В качестве значению этому атрибуту можно передать один из методов компонента.</p>
<p>В данном случае определены две кнопки, которые связаны с методами IncrementCount и DecrementCount. Метод IncrementCount вызывает увеличение значения 
переменной currentCount, а метод DecrementCount - ее уменьшение.</p>
<img src="./pics/razorcomponents8.png" alt="Обработка событий в компонентах Blazor" />
<h3>Аргументы события</h3>
<p>Обработчики событий могут принимать различные аргументы. В начале статьи по ссылке на описание класса EventHandlers можно найти, какие именно аргументы каких типов 
принимает то или иное событие. Например, обработчик события нажатия кнопки может принимать аргумент типа <span class="b">MouseEventArgs</span>, который с помощью следующих 
свойств передает некоторую информацию о событии:</p>
<ul>
<li><p><code>AltKey</code>: указывает, нажата ли клавиша Alt</p></li>
<li><p><code>Button</code>: хранит номер нажатой клавиши мыши (0 - левая клавиша, 1 - средняя, 2 - правая)</p></li>
<li><p><code>Buttons</code>: хранит номер нажатых клавиш, если нажато несколько клавиш, возвращается их логическая сумма</p></li>
<li><p><code>ClientX</code>: возвращает значение X координаты нажатия в локальных координатах</p></li>
<li><p><code>ClientY</code>: возвращает значение Y координаты нажатия в локальных координатах</p></li>
<li><p><code>CtrlKey</code>: указывает, нажата ли клавиша Ctrl</p></li>
<li><p><code>Detail</code>: возвращает количество нажатий</p></li>
<li><p><code>MetaKey</code>: если возвращает true, то нажата метаклавиша</p></li>
<li><p><code>ScreenX</code>: возвращает значение X координаты нажатия в глобальных координатах</p></li>
<li><p><code>ScreenY</code>: возвращает значение Y координаты нажатия в глобальных координатах</p></li>
<li><p><code>ShiftKey</code>: указывает, нажата ли клавиша Shift</p></li>
<li><p><code>Type</code>: возвращает строковое название события</p></li>
</ul>
<p>Различные типы событий могут принимать аргументы других типов, которые соответственно могут иметь другой набор свойств.</p>
<p>Для примера применим класс MouseEventArgs для обработки событий:</p>
<pre class="brush:c#;">
@using Microsoft.AspNetCore.Components.Web
&lt;h1&gt;Blazor Counter&lt;/h1&gt;

&lt;button @onclick="IncrementCount"&gt;+&lt;/button&gt;
&lt;span&gt;@currentCount&lt;/span&gt;
&lt;button @onclick="DecrementCount"&gt;-&lt;/button&gt;

@code {
    private int currentCount = 0;

    private void IncrementCount(MouseEventArgs e)
    {
        if (e.CtrlKey == true) currentCount = currentCount + 10;
        else currentCount++;
    }
    private void DecrementCount()
    {
        currentCount--;
    }
}
</pre>
<p>Метод IncrementCount принимает параметр MouseEventArgs. В методе мы смотрим, нажата ли одновременно с нажатием кнопки клавиша Ctrl. И если она нажата, 
увеличиваем счетчик сразу на 10.</p>
<h3>Список событий</h3>
<p>Всего в Blazor доступны следующие события:</p>
<table class="tab">
<tr class="tabhead"><td><p>Событие</p></td><td><p>Аргумент события</p></td><td><p>Атрибуты</p></td></tr>
<tr><td><p>События буфера обмена</p></td><td><p>ClipboardEventArgs</p></td><td><p>oncut, oncopy, onpaste</p></td></tr>
<tr><td><p>События перетаскивания</p></td><td><p>DragEventArgs</p></td><td><p>ondrag, ondragstart, ondragenter, ondragleave, ondragover, ondrop, ondragend</p></td></tr>
<tr><td><p>События возникновения ошибки</p></td><td><p>ErrorEventArgs</p></td><td><p>onerror</p></td></tr>
<tr><td><p>Общие события</p></td><td><p>EventArgs</p></td><td><p>onactivate, onbeforeactivate, onbeforedeactivate, ondeactivate, onended, onfullscreenchange, onfullscreenerror, onloadeddata, onloadedmetadata, onpointerlockchange, onpointerlockerror, onreadystatechange, onscroll</p></td></tr>
<tr><td><p>События фокуса</p></td><td><p>FocusEventArgs</p></td><td><p>onfocus, onblur, onfocusin, onfocusout</p></td></tr>
<tr><td><p>События изменения значения полей ввода</p></td><td><p>ChangeEventArgs</p></td><td><p>onchange, oninput</p></td></tr>
<tr><td><p>События клавиатуры</p></td><td><p>KeyboardEventArgs</p></td><td><p>onkeydown, onkeypress, onkeyup</p></td></tr>
<tr><td><p>События мыши</p></td><td><p>MouseEventArgs</p></td><td><p>onclick, oncontextmenu, ondblclick, onmousedown, onmouseup, onmouseover, onmousemove, onmouseout</p></td></tr>
<tr><td><p>События указателя мыши</p></td><td><p>PointerEventArgs</p></td><td><p>onpointerdown, onpointerup, onpointercancel, onpointermove, onpointerover, onpointerout, onpointerenter, onpointerleave, ongotpointercapture, onlostpointercapture</p></td></tr>
<tr><td><p>События колесика мыши</p></td><td><p>WheelEventArgs</p></td><td><p>onwheel, onmousewheel</p></td></tr>
<tr><td><p>События выполнения</p></td><td><p>ProgressEventArgs</p></td><td><p>onabort, onload, onloadend, onloadstart, onprogress, ontimeout</p></td></tr>
<tr><td><p>События касания</p></td><td><p>TouchEventArgs</p></td><td><p>ontouchstart, ontouchend, ontouchmove, ontouchenter, ontouchleave, ontouchcancel</p></td></tr>
<tr><td><p>События ввода</p></td><td><p>EventArgs</p></td><td><p>oninvalid, onreset, onselect, onselectionchange, onselectstart, onsubmit</p></td></tr>
<tr><td><p>События медиа</p></td><td><p>EventArgs</p></td><td><p>oncanplay, oncanplaythrough, oncuechange, ondurationchange, onemptied, onpause, onplay, onplaying, onratechange, onseeked, onseeking, onstalled, onstop, onsuspend, ontimeupdate, onvolumechange, onwaiting</p></td></tr>
<tr><td><p>Дополнительные события буфера обмена</p></td><td><p>EventArgs</p></td><td><p>onbeforecut, onbeforecopy, onbeforepaste</p></td></tr>
</table>
<h3>Асинхронная обработка событий</h3>
<p>Обработчики событий можно сделать асинхронными:</p>
<pre class="brush:c#;">
@using Microsoft.AspNetCore.Components.Web
&lt;h1&gt;Blazor Counter&lt;/h1&gt;

&lt;button @onclick="IncrementCount"&gt;+&lt;/button&gt;
&lt;span&gt;@currentCount&lt;/span&gt;
&lt;button @onclick="DecrementCount"&gt;-&lt;/button&gt;

@code {
    private int currentCount = 0;

    private async Task IncrementCount(MouseEventArgs e)
    {
        await Task.Delay(500);
        if (e.CtrlKey == true) currentCount = currentCount + 10;
		else currentCount++;
    }
    private async Task DecrementCount()
    {
        await Task.Delay(500);
        currentCount--;
    }
}
</pre>
<p>В данном случае для имитации асинхронности в методах вызывается метод <code>Task.Delay(500)</code>, но в реальности 
здесь могло бы находиться обращение к сетевым ресурсам, бд или выполняться какая-то другая работа, которая требует продолжительного времени. 
Асинхронные версии методов как и синхронные могут принимать в качестве параметра аргумент события.</p>
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


<div class="nav"><p><a href="./2.4.php">Назад</a><a href="./">Содержание</a><a href="./2.6.php">Вперед</a></p></div></div>
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
<!DOCTYPE html>
<html >
<head>
<title>Blazor | Дочерние компоненты. Параметры компонентов</title>
<meta charset="utf-8" />
<meta name="description" content="Дочерние компоненты в Blazor, параметры компонентов и атрибут Parameter, свойство ChildContent и тип RenderFragment, передача данных во вложенный компонент из родительского">
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
<h2>Дочерние компоненты. Параметры компонентов</h2><div class="date">Последнее обновление: 22.02.2020</div>

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

<p>Компоненты могут содержать другие компоненты. Работа приложения Blazor начинается с выполнения главного компонента, 
который, в свою очередь, содержит остальные компоненты. В прошлой теме был рассмотрен добавление и рендеринг главного компонента приложения. 
Однако добавление дочерних компонентов отличается - для добавления дочернего компонента используется тег, назначение которого совпадает с названием компонента. 
Например, определим в проекте для неглавных компонентов папку <span class="ii">Components</span>. И добавим в нее новый компонент - <span class="b">Home.razor</span>:</p>
<img src="./pics/2.1.png" alt="Дочерние компоненты Razor в Blazor" />
<p>Определим в компоненте Home.razor:</p>
<pre class="brush:c#;">
&lt;h2&gt;@header&lt;/h2&gt;

@code{
    string header = "Главная страница";
}
</pre>
<p>Вызовем этот компонент в главном компоненте App.razor:</p>
<pre class="brush:xml;">
@using SimpleBlazorServerApp.Components
&lt;h1&gt;@header&lt;/h1&gt;
&lt;Home&gt;&lt;/Home&gt;

@code{
    string header = "Приложение Blazor";
}
</pre>
<p>Прежде всего стоит отметить, что компонент Home находится в проекте SimpleBlazorServerApp папке Components, поэтому его пространство имен по умолчанию 
будет <span class="ii">SimpleBlazorServerApp.Components</span>. Соответственно, чтобы использовать данный компонент в компоненте App, необходимо подключить 
данное пространство имен с помощью директивы <code>using</code>. Далее добавляется открывающий и закрывающий теги, название которых соответствует 
название компонента:</p>
<pre class="brush:xml;">&lt;Home&gt;&lt;/Home&gt;</pre>
<p>В данном случае допустима и более сокращенная запись:</p>
<pre class="brush:xml;">&lt;Home /&gt;</pre>
<p>Таким образом, компонент App в данном случае является родительским и содержит дочерний компонент Home.</p>
<img src="./pics/2.2.png" alt="Вложенные компоненты Razor в Blazor" />
<h3>Параметры компонентов</h3>
<p>Компоненты существуют независимо друг от друга. Переменные и методы одного компонента применяются только в рамках этого компонента. Например, 
в примеры выше оба компонента определяли свою собственную переменную header. Тем не менее существует возможность передачи данных из 
родительского компонента в дочерний. Эту возможность предоставляют <span class="b">параметры компонента</span> - публичные свойства компонента, к которым применяется 
атрибут <span class="b">Parameter</span>. Например, изменим компонент Home.razor:</p>
<pre class="brush:c#;">
&lt;h2&gt;@Title&lt;/h2&gt;
&lt;h3&gt;@Summary&lt;/h3&gt;

@code{
    [Parameter]
    public string Title { get; set; }

    [Parameter]
    public string Summary { get; set; }
}
</pre>
<p>Теперь компонент содержит два свойства, к которым применяется атрибут <code>[Parameter]</code>, поэтому эти свойства можно назвать параметрами компонента. 
Через них компонент может получить извне некоторые данные.</p>
<p>Далее изменим вызов компонента Home в родительском компоненте App:</p>
<pre class="brush:c#;">
@using SimpleBlazorServerApp.Components
&lt;h1&gt;@header&lt;/h1&gt;
&lt;Home Title="Главная страница" Summary="@summary"&gt;&lt;/Home&gt;

@code{
    string header = "Приложение Blazor";
    string summary = "Компонент для тестирования параметров";
}
</pre>
<p>Через атрибуты, названия которых совпадают с названиями параметров компонента, можно передать этим параметрам некоторые данные. 
Причем можно передать параметру компонента значение некоторого выражения, например, переменной, как в случае с параметром Summary.</p>
<img src="./pics/2.3.png" alt="Параметры компонентов Razor в Blazor" />
<p>Причем можно передавать более сложное содержимое, нежели простые строки. Например, пусть Home.razor принимает список строк:</p>
<pre class="brush:c#;">
&lt;h2&gt;Количество пользователей: @Count&lt;/h2&gt;
&lt;ul&gt;
    @foreach(var user in Users)
    {
        &lt;li&gt;@user&lt;/li&gt;
    }
&lt;/ul&gt;

@code{

    [Parameter]
    public List&lt;string&gt; Users { get; set; }

    [Parameter]
    public int Count { get; set; }
}
</pre>
<p>Теперь компонент получает список и выводит его в коде html. Передадим этот список в родительском компоненте App:</p>
<pre class="brush:c#;">
@using SimpleBlazorServerApp.Components
&lt;h1&gt;Приложение Blazor&lt;/h1&gt;
&lt;Home Count="@users.Count" Users="@users"&gt;&lt;/Home&gt;

@code{
    List&lt;string&gt; users = new List&lt;string&gt; { "Tom", "Bob", "Sam", "Mike" };
}
</pre>
<img src="./pics/2.5.png" alt="Передача данных из компонента в компонент в Blazor" />
<h3>Передача содержимого из родительского в дочерний компонент</h3>
<p>С помощью свойства <span class="b">ChildContent</span> в дочерний компонент можно передать из родительского некоторое содержимое. 
Например, изменим компонент Home.razor следующим образом:</p>
<pre class="brush:c#;">
&lt;h2&gt;@Title&lt;/h2&gt;
&lt;div&gt;@ChildContent&lt;/div&gt;
&lt;div&gt;Условный футер&lt;/div&gt;

@code{
    [Parameter]
    public string Title { get; set; }

    [Parameter]
    public RenderFragment ChildContent { get; set; }
}
</pre>
<p>Согласно условностям свойство должно называться именно <code>ChildContent</code>, и оно должно представлять тип 
<span class="b">RenderFragment</span>. В остальном оно используется аналогично другим свойствам. Например, его содержимое можно вывести на веб-страницу 
где-нибудь в разметке компонента.</p>
<p>Теперь изменим родительский компонент App:</p>
<pre class="brush:c#;">
@using SimpleBlazorServerApp.Components
&lt;h1&gt;Приложение Blazor&lt;/h1&gt;
&lt;Home Title="Главная страница"&gt;
    Случайное содержимое дочернего компонента
&lt;/Home&gt;
</pre>
<p>Все то, что передается между открывающим и закрывающим тегами <code>&lt;Home&gt;</code> и <code>&lt;/Home&gt;</code> и будет представлять 
свойство <code>ChildContent</code> дочернего компонента</p>
<img src="./pics/2.4.png" alt="ChildContent и RenderFragment в Blazor" />
<p>Передаваемое содержимое может быть и более сложным, нежели простая строка. Например, можно передать код html. Так, изменим родительский компонент 
App.razor:</p>
<pre class="brush:c#;">
@using SimpleBlazorServerApp.Components
&lt;h1&gt;Приложение Blazor&lt;/h1&gt;
&lt;Home Title="Главная страница"&gt;
    &lt;div&gt;
        &lt;h3&gt;Отрывок&lt;/h3&gt;
        &lt;p&gt;Высокой страсти не имея&lt;/p&gt;
        &lt;p&gt;Для звуков жизни не щадить,&lt;/p&gt;
        &lt;p&gt;Не мог он ямба от хорея,&lt;/p&gt;
        &lt;p&gt;Как мы ни бились, отличить.&lt;/p&gt;
    &lt;/div&gt;
&lt;/Home&gt;
</pre>
<img src="./pics/2.6.png" alt="ChildContent и RenderFragment в компонентах Blazor" />
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


<div class="nav"><p><a href="./2.2.php">Назад</a><a href="./">Содержание</a><a href="./2.4.php">Вперед</a></p></div></div>
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
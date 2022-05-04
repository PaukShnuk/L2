<!DOCTYPE html>
<html >
<head>
<title>Blazor | Что такое Blazor</title>
<meta charset="utf-8" />
<meta name="description" content="Что такое фреймворк Blazor, его связь с .NET Core, основные особенности и преимущества, отличие Blazor Server и Blazor WebAssembly, роль компонента">
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
<h1>Введение в Blazor</h1><h2>Что такое Blazor</h2><div class="date">Последнее обновление: 20.05.2020</div>

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

<p>Blazor представляет UI-фреймворк для создания интерактивных приложений, которые могут работать как на стороне сервера, так и на 
стороне клиента, на платформе .NET. В своем развитии фреймворк Blazor испытал большое влияние современных фреймворков для создания клиентских приложений - 
Angular, React, VueJS. В частности, это проявляется в роли компонентов при построении пользовательского интерфейса. В то же время и на стороне клиента, и на стороне сервера 
при определении кода в качестве языка программирования применяется C#, вместо JavaScript. А для описания визуального интерфейса используются стандартные HTML и CSS.</p>
<p>Фреймворк Blazor развивается как opensource-проект, исходный код которого можно найти в репозитории на github: <a href="https://github.com/dotnet/aspnetcore/tree/master/src/Components" rel="nofollow">https://github.com/dotnet/aspnetcore/tree/master/src/Components</a></p>
<p>Blazor предоставляет разработчикам следующие преимущества:</p>
<ul>
<li><p>Написание кода веб-приложений с помощью C# вместо JavaScript</p></li>
<li><p>Использование возможностей экосистемы .NET, в частности, библиотек .NET при создании приложений, безопасности и производительности платформы .NET</p></li>
<li><p>Клиентская и серверная части приложения могут использовать общую логику</p></li>
<li><p>Использование Visual Studio в качестве инструмента для разработки, который имет встроенные шаблоны для упрощения создания приложения</p></li>
</ul>
<p>Функционально на текущий момент Blazor подразделяется на две подсистемы:</p>
<ul>
<li><p><span class="b">Blazor Server</span>: позволяет создавать серверные приложения и поддерживается ASP.NET Core</p></li>
<li><p><span class="b">Blazor WebAssembly</span>: позволяет создавать одностраничные интерактивные приложения клиентской стороны, которые 
запускаются в браузере пользователя и работают с помощью технологии WebAssembly</p></li>
</ul>
<p><span class="b">Blazor Server</span> вышел в релиз  сентябре 2019 года, а <span class="b">Blazor WebAssembly</span> - в мае 2020 года,  
и обе эти платформы включены в .NET и полноценно могут использоваться для создания серверных приложений и клиентских приложений. То есть 
фактически Blazor покрывает потребности в веб-приложениях как на стороне сервера, так и на стороне клиента. 
Тем не менее у компании Microsoft есть далеко идущие планы по развитию Blazor. В прекрасном .NET будущего предполагается, что на Blazor можно будет 
создавать также нативные мобильные и дестопные приложения для различных платформ:</p>
<img src="./pics/blazor.png" alt="Развитие и roadmap Blazor" />
<p>Но это будет еще не скоро и это очень отдаленная перспектива.</p>
<h3>Blazor WebAssembly</h3>
<p>Blazor WebAssembly позволяет создавать интерактивные одностраничные приложения, которые запускаются на браузере пользователя с помощью технологии WebAssembly. 
При построении и запуске приложения Blazor WebAssembly файлы с кодом C# и Razor 
компилируются в сборки .NET. Затем Blazor WebAssembly (а если точнее скрипт <span class="b">blazor.webassembly.js</span>) 
загружает среду выполнения .NET, сборки и их зависимости и настраивает среду выполнения .NET для выполнения сборок.</p>
<p>Посредством взаимодействия с JavaScript фреймворк Blazor WebAssembly может обращаться к DOM и API браузера.</p>
<p>Одним из преимуществ Blazor WebAssembly является то, что он может оптимизировать загружаемые сборки. В частности, при публикации приложения неиспользуемый код 
убирается линкером (компоновщиком) IL (Intermediate Language). Кроме того, все необходимые файлы среды выполнения .NET и загружаемых сборок кэшируются в браузере.</p>
<p>При этом Blazor WebAssembly не зависит от сервера. По большому счету нам может быть достаточно статического сервера, на котором размещены все файлы приложения. 
Все необходимые файлы загружаются браузером, и после загрузки файлов приложение работает полностью 
на стороне браузера и совершенно не зависит от сервера.</p>
<p>В то же время Blazor WebAssembly имеет ряд ограничений. Например, браузер должен поддерживать технологию WebAssembly - на данный момент 
последние версии распространенных браузеров (Google Chrome, Mozilla Firefox, Opera, Microsoft Edge, Yandex Browser) поддерживают эту технологию. Однако более старые версии, либо Internet Explorer не имеют подобной подобной 
поддержки. Также браузеру необходимо загрузить файлы большого размера, так как приложение полностью отрабатывает на стороне клиента, 
что увеличиваает нагрузку на сеть и время загрузки. Ну и кроме того, в этом случае возможности приложения ограничены браузером, в котором запускается приложение.</p>
<h3>Blazor Server</h3>
<p>В Blazor Server приложение отрабатывает на стороне сервера. Обновление элементов пользовательского интерфейса, обработка событий, вызовы JavaScript на клиентской стороне 
осуществляются посредством взаимодействия сервера и клиента через SignalR.</p>
<p>То есть когда пользователь взаимодействует с приложением в браузере, вызывает события пользовательского интерфейса (например, нажимает на кнопку), то клиентская сторона 
посылает на сервер информацию о событии, сервер обрабатывает полученную информацию и посылает клиенту в ответ инструкции, как необходимо 
обновить элементы интерфейса. В какой-то степени это похоже на подход, применявшийся в ASP.NET WebForms.</p>
<p>Поскольку большая часть логики приложения сосредоточена на стороне сервера, то все загружаемые клиентом файлы имею гораздо меньший размер по сравнению с Blazor WebAssembly. 
Приложение не ограничено браузером и может воспользоваться возможностями серверной обработки. Кроме того, приложение может работать с устаревшими браузерами, 
которые не поддерживают WebAssembly. В то же время для работы приложения необходима постоянная поддержка сетевого подключения.</p>
<h3>Компоненты</h3>
<p>Ключевым элементом приложения Blazor являются компоненты. Кто работал с фреймворками клиентской стороны, такими как Angular, React, VueJS, то сталкивался 
с компонентами, которые по сути структурируют приложение. В Blazor применяется похожая концепция. Здесь компонент представляет элемент 
интерфейса, например, какое-то определенное содержание, меню, диалоговое окно, форма ввода данных. Компоненты определяют логику рендеринга элементов интерфейса, 
а также логику обработки пользовательского ввода. Компоненты могут быть вложенными в другие компоненты. Компоненты можно повторно использовать в других проектах и переносить в виде библиотеки классов 
Razor. Обычно класс компонента располагается в файле с расширением <span class="b">.razor</span>, а для их определения применяется синтаксис 
Razor, который позволяет объединить разметку HTML с кодом на C#.</p>
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


<div class="nav"><p><a href="./">Назад</a><a href="./">Содержание</a><a href="./1.2.php">Вперед</a></p></div></div>
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
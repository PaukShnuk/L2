<!DOCTYPE html>
<html >
<head>
<title>WebAssembly | Первая программа</title>
<meta charset="utf-8" />
<meta name="description" content="Первая программа на WebAssembly, установка Emscripten SDK, компиляция файлов wasm">
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
<h2>Первая программа</h2><div class="date">Последнее обновление: 29.07.2019</div>

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

<h3>Установка инструментария</h3>
<p>Для генерации файлов wasm потребуется специальный инструментарий. Для этого можно использовать различные средства. В данном 
же случае мы будем использовать наиболее распространенный и популярный инструмент - <span class="b">Emscripten SDK (EMSDK)<span>.</p>
<p>Загузим с официального репозитория <a href="https://github.com/juj/emsdk" rel="nofollow">https://github.com/juj/emsdk</a> архив с файлами.</p>
<img src="pics/1.1.png" alt="Загрузка Emscripten EMSDK" />
<p>Распакуем загруженный архив, например, в корне диска С. Например, в моем случае загруженный архив распакован в папку <span class="ii">C:\emsdk-master</span>.</p>
<p>В командной строке/терминале перейдем к папке распакованного архива и последовательно введем следующие команды</p>
<div class="console">
<pre class="consoletext">
emsdk update
emsdk install latest
emsdk activate latest
</pre>
</div>
<img src="pics/1.2.png" alt="Установка Emscripten EMSDK для работы с WebAssembly" />
<p>Последняя командна <code>emsdk activate latest</code> активирует среду Emscripten. И ее надо вызывать каждый раз, когда 
мы заново открываем консоль и собираемся компилировать модуль wasm.</p>
<h3>Компиляторы и параметры компиляции</h3>
<p>Ключевыми утилитами в emsdk являются <span class="b">emcc</span> - компилирует программу на C в wasm и 
<span class="b">em++</span> - компилирует программу на C++ в wasm. И в зависимости от применяего языка программирования выбирается 
один из этих компиляторов. Эти утилиты фактически представляют скрипты на языке python, которые вызывают компиляторы Clang из пакета emsdk.</p>
<p>Фактически компиляция производится с помощью команды в командной строке/консоли:</p>
<div class="console">
<pre class="consoletext">
emcc/em++ &lt;флаги&gt; файлы_с_исходным_кодом
</pre>
</div>
<p>При компиляции комплятору можно передать различные флаги:</p>
<ul>
<li><p><span class="b">-o путь_к_выходному_файлу</span>: указывает путь к файлу, который надо сгенерировать, обычно это либо файл wasm, либо js-файл, коорый загружает скомпилированный модуль wasm, 
либо html-страница, на которой загружается модул wasm</p></li>
<li><p><span class="b">-g</span>: генерирует отладочную информацию</p></li>
<li><p><span class="b">-s option=value</span>: устанавливает настройки компиляции. Например, некоторые параметры компиляции:</p>
	<ul>
	<li><p><span class="b">-s WASM=1</span>: эта опция указывает компилятору сгенерировать файл WebAssembly</p></li>
	<li><p><span class="b">-s ONLY_MY_CODE=1</span>: указывает компилятору не включать код из стандартной библиотеки C/C++ в компилируемый модуль 
	wasm - он будет включать только неспоредственно тот код, который мы сами пишем</p></li>
	<li><p><span class="b">-s EXPORTED_FUNCTIONS='[...]'</span>: определяет набор функций, который должны быть экспортированы из wasm</p></li>
	<li><p><span class="b">-s SIDE_MODULE=1</span>: эта опция указывает компилятору, что надо создать только модуль wasm</p></li>
	</ul>
</li>
<li><p><span class="b">-O[уровень_оптимизации]</span>: указывает, какой уровень оптимизации следует использовать при компиляции. Зачастую 
используется третий высший уровень, то есть <code>-O3</code></p></li>
</ul>
<h3>Создание первой программы</h3>
<p>Напишем простейшую программку с использованием Wasm. Создадим для файлов какой-нибудь каталог, например, 
<span class="ii">C://wasm</span>, и определим в нем новый файл <span class="b">hello.c<span> со следующим кодом 
на языке C:</p>
<pre class="brush:c;">
#include &lt;stdio.h&gt;
int main(void)
{
    printf("Hello WebAssembly! \n");
    return 0;
}
</pre>
<p>Этот код просто выводит на консоль строку.</p>
<p>Теперь скомпилируем его. Прежде всего перейдем в командной строке/терминале к папке с файлом hello.c.</p>
<p>Для компиляции файлов выполним в командной строке/терминале следующую команду</p>
<div class="console">
<pre class="consoletext">
emcc hello.c -s WASM=1 -o hello.html
</pre>
</div>
<p>Здесь компилятору <code>emcc</code> передается ряд параметров:</p>
<ul>
<li><p><code>hello.c</code> указывает на компилируемый файл</p></li>
<li><p><code>-s WASM=1</code> указывает, что мы хотим скомпилировать файл с кодом wasm</p></li>
<li><p><code>-o hello.html</code> указывает, что мы хотим сгенерировать веб-страницу hello.html, на которой будет загружаться модуль wasm</p></li>
</ul>
<p>После компиляции в папке с исходным кодом появятся еще три файла: <span class="b">hello.wasm</span> - сам модуль wasm, 
<span class="b">hello.html</span> - веб-страница и <span class="b">hello.js</span> - код js для загрузке модуля wasm на веб-страницу.</p>
<p>Имея скомпилированные файлы, мы можем их запустить в браузере. Однако следует учитывать, что если в одних 
браузерах нам достаточно просто кинуть страницу в веб-браузер (MS Edge, Mzilla Firefox), то в других браузерах 
(Google Chrome, Opera) для работы с модулями wasm необходимо размещать страницу и все связанные файлы на веб-сервере и затем обращаться 
к странице по протоколу http. Поэтому при работе с wasm я советую выбрать любой предпочтительный веб-сервер - Apache, NodeJS, IIS и т.д. и размещать все файлы 
на веб-сервере. 
Либо написать какое-нибудь веб-приложение с помощью одной из технологий серверного уровня - ASP.NET, JavaEE, Nodejs, PHP и т.д. и рамках 
этого приложения размещать файлы WebAssembly. Однако в данном случае мы можем упростить себе работу. 
Emscripten имеет такую утилиту как <span class="b">emrun</span>, которая позволяет выполнить веб-страницу на небольшом встроенном веб-севере.</p>
<p>Итак, запустим сгенерированные файлы с помощью следующей команды:</p>
<div class="console">
<pre class="consoletext">
emrun hello.html
</pre>
</div>
<p>Также дополнительно с помощью параметра <code>--browser</code> можно указать браузер, который будет запускаться</p>
<div class="console">
<pre class="consoletext">
emrun --browser chrome hello.html
</pre>
</div>
<img src="pics/1.3.png" alt="Компиляция кода WebAssembly" />
<p>Откроется браузер, где мы сможем увидеть в консоли строку "Hello WebAssembly"</p>
<img src="pics/1.5.png" alt="Запуск приложения на WebAssembly" />
<p>Следует отметить, что Emscripten создает довольно своеобразную страницу. Но естественно мы ее можем изменить, например, 
остаить только подключение js кода, который загружает модуль wasm.</p>
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


<div class="nav"><p><a href="1.1.php">Назад</a><a href="./">Содержание</a><a href="1.3.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в WebAssembly</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/webassembly/1.1.php">Что такое WebAssembly?</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/webassembly/1.2.php">Первая программа на WebAssembly</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/webassembly/1.3.php">Загрузка Wasm в JavaScript</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/webassembly/1.4.php">Вызов кода JavaScript из WebAssembly</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/webassembly/1.5.php">Передача данных между JavaScript и WebAssembly</a></span></li>
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
	$("li:contains('Глава 1.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 1.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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
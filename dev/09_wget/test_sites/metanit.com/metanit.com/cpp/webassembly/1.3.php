<!DOCTYPE html>
<html >
<head>
<title>WebAssembly | Загрузка Wasm в JavaScript</title>
<meta charset="utf-8" />
<meta name="description" content="Загрузка кода Wasm и вызов функций WebAssembly в JavaScript, экспорт функций C/C++ в помощью Emscripten SDK, компиляция файлов wasm">
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
<h2>Загрузка Wasm в JavaScript</h2><div class="date">Последнее обновление: 30.07.2019</div>

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

<p>В прошлой теме была рассмотрена компиляции кода WebAssembly с помощью Emscripten. Теперь чуть более детально рассмотрим, 
как мы можем вызывать скомпилированный код wasm из javascript.</p>
<p>Определим в файле <span class="ii">hello.c</span> простейшую программу на C:</p>
<pre class="brush:c;">
int add(int a, int b)
{
    return a + b;
}
</pre>
<p>Файл содержит простейшую функцию, которая возвращает сумму параметров. Это весь код файла hello.c.</p>
<p>Скомпилируем этот файл с помощью следующей команды:</p>
<div class="console">
<pre class="consoletext">
emcc hello.c -O2 -s WASM=1 -s ONLY_MY_CODE=1 -s EXPORTED_FUNCTIONS="['_add']" -o hello.js
</pre>
</div>
<p>На вход компилятору передается ряд параметров:</p>
<ul>
<li><p><code>hello.c</code>: файл с исходным кодом</p></li>
<li><p><code>-O2</code>: определяет уровень оптимизации компилятора как для кода wasm, так и для кода js.</p></li>
<li><p><code>-s WASM=1</code>: указывает компилятору, что надо компилировать код в WebAssembly</p></li>
<li><p><code>-s ONLY_MY_CODE=1</code>: указывает, что скомпилированная единица будет содержать только тот код, который определил разработчик.</p></li>
<li><p><code>-s EXPORTED_FUNCTIONS="['_add']"</code>: указывает, какие функции мы сможем экспортировать и использовать в коде javascript. 
При этом хотя функция в коде C называется "add", необходимо добавлять в начало названий функций символ подчеркивания.</p></li>
<li><p><code>-o hello.js</code>: путь к выходному файлу - hello.js.</p></li>
</ul>
<img src="pics/1.6.png" alt="Компиляция кода C в Wasm" />
<p>После этого в папке с исходным кодом появятся файлы <span class="b">hello.wasm</span> и <span class="b">hello.js</span>. Файл 
<span class="b">hello.js</span> нам не понадобится, поэтому его можно удалить, поскольку минимальный код загрузки кода Wasm мы определим сами.</p>
<p>Далее в той же папке определим новый файл <span class="b">index.html</span> со следующим кодом:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;WebAssembly Application&lt;/title&gt;
	&lt;/head&gt;
    &lt;body&gt;
	&lt;div id="container"&gt;
	&lt;/div&gt;
	&lt;script&gt;
	if ("WebAssembly" in window) {
		WebAssembly.instantiateStreaming(fetch("hello.wasm"))
			.then(result =&gt; 
				document.getElementById("container").innerHTML = 
				"Result: " + result.instance.exports._add(2, 5)   
		).catch(console.error);
	}
	&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>В данном случае из wasm вызывается функция add, и ее результат выводится в блок container.</p>
<p>Загрузка функционала скомпилированного кода wasm и вызов его функций производится с помощью следующего кода:</p>
<pre class="brush:js;">
WebAssembly.instantiateStreaming(fetch("hello.wasm"))
	.then(result =&gt; 
		document.getElementById("container").innerHTML = 
			"Result: " + result.instance.exports._add(2, 5)   
).catch(console.error);
</pre>
<p>Компиляции модуля wasm применяется функция <span class="b">WebAssembly.instantiateStreaming()</span>. Она принимает два параметра:</p>
<ul>
<li><p>Первый параметр - объект <span class="b">Response</span> или <span class="b">Promise&lt;Response&gt;</span>, который 
представляет модуль wasm.</p></li>
<li><p>Второй необязательный параметр - объект, который содержит значения, которые должны быть импортированы в объект модуля.</p></li>
</ul>
<p>Для загрузки файла wasm применяется функция <span class="b">fetch()</span>. В качестве параметра она принимает 
путь к файлу wasm. Файл wasm необязательно будет загружен сразу же при вызове функции, поэтому ее результатом является 
объект <span class="b">Promise</span>, который содержит ответ сервера в виде объекта <span class="b">Response</span>.</p>
<p>Функция WebAssembly.instantiateStreaming получает эти данные и возвращает объект <span class="b">Promise&lt;ResultObject&gt;</span>. 
ResultObject  - это по сути тот объект, который инкапсулирует все функции и данные из загруженного модуля wasm. И чтобы его получить из Promise 
далее применяется функция <span class="b">then()</span>.</p>
<p>В функцию then в качестве первого параметра передается функция, которая выполняется в случае успешного получения объекта ResultObject из 
Promise. В данном случае вместо обычной функции применяется стрелочная функция <code>result =&gt;  ...</code>. В данном случае 
параметр result - это и есть полученный ResultObject.</p>
<p>Имея ResultObject, мы можем обращатья к функционалу из модуля wasm. ResultObject имеет два свойства:</p>
<ul>
<li><p><span class="b">instance</span>: представляет объект <span class="b">WebAssembly.Instance</span> и обеспечивает доступ 
ко всем экспортированным функциям</span></p></li>
<li><p><span class="b">module</span>: представляет скомпилированный модуль wasm в виде объекта <span class="b">WebAssembly.Module</p></li>
</ul>
<p>И в конце мы можем обратиться к функции add из модуля wasm: <code>result.instance.exports._add(2, 5)</code>. Стоит обратить внимание, 
что для вызова функции в начале их назания ставится символ подчеркивания. Поскольку скомпилированная функция add принимает два параметра и возвращает их сумму, 
то здесь функция получает два числа, а ее результат передается для вывода в элемент на веб-странице.</p>
<p>Также отмечу, что хотя здесь для краткости код javascript помещен на непосредственно на веб-страницу, но естественно его можно вынести в отдельный файл js и затем его подключать.</p>
<p>Таким образом, в одной папке будет несколько файлов.</p>
<ul>
<li><p>hello.wasm</p></li>
<li><p>hello.js (необязателен, можно удалить)</p></li>
<li><p>index.html</p></li>
</ul>
<p>Запустим веб-страницу index.html с помощью команды</p>
<div class="console">
<pre class="consoletext">
emrun index.html
</pre>
</div>
<img src="pics/1.9.png" alt="emrun в emscripten" />
<p>И после запуска будет выполнен код javascript, который обратится к функции add из модуля wasm и выведет на веб-страницу 
полученную сумму.</p>
<img src="pics/1.8.png" alt="Загрузка модуля WebAssembly в JavaScript" />
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


<div class="nav"><p><a href="1.2.php">Назад</a><a href="./">Содержание</a><a href="1.4.php">Вперед</a></p></div></div>
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
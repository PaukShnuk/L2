<!DOCTYPE html>
<html >
<head>
<title>WebAssembly | Введение</title>
<meta charset="utf-8" />
<meta name="description" content="Общий обзор технологии WebGL, какие браузеры поддерживают WebGL, какие преимущества дает использование этой платформы">
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
<h1>Введение в WebAssembly</h1><h2>Что такое WebAssembly?</h2><div class="date">Последнее обновление: 03.10.2018</div>

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

<p><span class="b">WebAssembly</span> (<span class="b">Wasm</span>) предоставляет формат бинарных инструкций для виртуальной машины на основе стека. 
Проще говоря WebAssembly представляет технологию, которая позволяет запускать в браузере низкоуровневый скомпилированный код. </p>
<p>Предтечей появления Wasm была разработка в компании Google <span class="b">Native Client (NaCL)</span> - специального инструмента, 
который позволял запускать нативный код на C/C++ в веб-браузере. Нативный код компилировался в файлы с расщирением nexe и запускался в песочнице браузера (sandbox), поэтому его выполнение было 
относительно безопасным. Однако технология была доступна только для приложений и плагинов из Google Chrome Web Store Далее был разработан <span class="b">Portable Native Client (PNaCL)</span>. Если NaCL был платформенно-зависимым, 
то PNaCL, наоборот, не зависел от архитектуры и был теоретически доступен для всех приложений, а не только из Google 
Chrome Web Store. PNaCL состоял из двух компонентов: инструментария, который компилировал код C/C++ в модули NaCL, 
и компонентов выполнения, которые встраивались в браузер и позволяли запускать модули NaCL.</p>
<p>Параллельно Mozilla, начиная с 2013 года, разрабатывала библиотеку <span class="b">asm.js</span>, которая должна была 
транслировать код C/C++ в JavaScript.</p>
<p>В апреле 2015 международный консорциум по разработке веб-стандарто World Wide Web Consortium (W3C) создает рабочую 
группу по разработке спецификации по WebAssembly. И в марте 2017 года новый стандарт был принят. Изначально реализация WebAssembly в браузерах во многом базировалась на asm.js, в то время как 
для переноса скомпилированных модулей использовалась концепция PNaCL. Спецификация по WebAssembly доступна по адресу 
<a href="https://www.w3.org/TR/wasm-core-1/" rel="nofollow">https://www.w3.org/TR/wasm-core-1/</a>. 
Кроме того, разнообразную информацию о Wasm можно найти на официальном сайте <a href="https://webassembly.org" rel="nofollow">https://webassembly.org</a>.</p>
<p>При этом важно понимать, что WebAssembly - это не новый язык, это лишь бинарный формат, в который можно компилировать 
программу на разных языках. Работать с WebAssembly довольно просто. Вначале пишется обычный код, который размещается в текстовом 
файле. Преимущественно применяются C и C++, но также можно использовать Rust и другие языки. Далее этот 
код компилируется в бинарный формат в файл с расширением <span class="ii">.wasm<span>. 
Затем специальный код JavaScript загружает скомпилированный модуль на веб-страницу и вызывает функции, которые определены в модуле wasm.</p>
<img src="pics/1.7.png" alt="Компиляция и выполнение модулей WebAssembly" />
<p>При этом WebAssembly не предназначен для замены JavaScript, а лишь призван дополнить и обогатить возможности данного языка. Более того без JavaScript мы не сможем 
получить доступ к коду wasm.</p>
<p>Где Wasm может применяться? WebAssembly предназначен прежде всего для таких задач, где важна производительность, например, 
обработка картинок, аудио и видео, игры, распознование изображений, виртуальная реальность. По ряду задач при переходе от JavaScript к WebAssembly 
наблюдался прирост в производительности почти в 20 раз.</p>
<p>WebAssembly не ограничен только браузером и также может использоваться для создания гибридных нативных приложений на мобильных устройствах 
или для вычислений в приложениях на стороне бекэнда.</p>
<p>Для работы с Wasm преимущественно используются C, C++ и Rust, однако могут использоваться и другие языки, для которых существует 
поддержка компиляции в модули Wasm (например, C#, Go). Собственно это еще одно из преимуществ Wasm, поскольку не все программисты могут значть JavaScript, 
однако теперь можно писать если не весь, то по крайней мере немалую часть кода для клиентской стороны без знания JavaScript.</p>
<p>В то же время WebAssembly не лишен ограничений, которые следует учитывать при проектировании приложений:</p>
<ul>
<li><p>Отсутствует сборщик мусора (Garbage Collector). Хотя, возможно, поддержка GC будет добавлена впоследствии.</p></li>
<li><p>Через Wasm нельзя взаимодействовать напрямую с DOM, для этого следует использовать JavaScript.</p></li>
<li><p>Не поддерживается в ряде браузеров, в основном старых (например, IE 11). Какие браузеры поддерживают Wasm, 
можно посмотреть на <a href="https://caniuse.com/#feat=wasm" rel="nofollow">https://caniuse.com/#feat=wasm</a>.</p>
<p>В коде JavaScript мы можем проверить наличие объекта WebAssembly перед выполнением кода на Wasm:</p>
<pre class="brush:js;">
if("WebAssembly" in window){
	console.log("Браузер поддерживает WebAssembly");
	//  операции с WebAssembly
}
else{
	console.log("WebAssembly не поддерживается");
}
</pre>
</li>
</ul>
<h3>Полезные инстументы для изучения и практики WebAssembly</h3>
<p><a href="https://webassembly.studio/" rel="nofollow">WebAssembly Studio</a> представляет среду разработки, которая дсотупна онлайн, 
где можно посоздавать простейшие примеры с помощью языков C и Rust.</p>
<p><a href="https://wasdk.github.io/WasmFiddle/" rel="nofollow">WasmFiddle</a> - еще одна фактически онлайн-среда разработки, которая позволяет 
скомпиллировать код C в Wasm и провести минимальные исследования.</p>
<p><a href="https://github.com/WebAssembly/wabt" rel="nofollow">WebAssembly Binary Toolkit</a> предоставляет утилиты командной строки для 
взаимодействия с кодом wasm, например, поддерживает их трансляцию в исходный код на C. Однако он не поддерживает компиляцию из 
C/C++ в Wasm.</p>
<p><span class="b">Emscripten</span> - один из наиболее популярных инструментов для компиляции из C/C++ в wasm.</p>
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


<div class="nav"><p><a href="./">Содержание</a><a href="1.2.php">Вперед</a></p></div></div>
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
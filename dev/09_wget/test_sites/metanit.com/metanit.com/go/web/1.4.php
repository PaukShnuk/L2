<!DOCTYPE html>
<html >
<head>
<title>Go | Маршрутизация и gorilla/mux</title>
<meta charset="utf-8" />
<meta name="description" content="Создание маршрутизации с помощью пакета gorilla/mux на языке программирования Go, извлечение параметров из пути запроса">
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
<h2>Маршрутизация и gorilla/mux</h2><div class="date">Последнее обновление: 01.03.2018</div>

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

<p>Go предоставляет базовые возможности по маршрутизации. Однако этих возможностей, как правило, было недостаточно, особенно в тех случаях, когда 
необходимо выделять сегменты из запрошенного адреса URL и каким-то образом обрабатывать их. В этом случае мы можем воспользоваться рядом существующих инструментов, 
одним из которых является <span class="b">Gorilla</span>. (Официальный сайт <a href="http://www.gorillatoolkit.org/" rel="nofollow">http://www.gorillatoolkit.org/</a>) Это пакет разработчика специально для упрощения создания веб-приложений на языке Go, 
который, в свою очередь, включает ряд пакетов:</p>
<ul>
<li><p><span class="b">gorilla/context</span>: предназначен для создания глобальных переменных из тела запроса</p></li>
<li><p><span class="b">gorilla/rpc</span>: представляет реализацию протокола RPC-JSON</p></li>
<li><p><span class="b">gorilla/websocket</span>: реализует протокол WebSocket</p></li>
<li><p><span class="b">gorilla/schema</span>: позволяет создавать из значений формы единую структуру</p></li>
<li><p><span class="b">gorilla/securecookie</span>: позволяет создавать зашифрованные куки, которые применяются при аутентификации</p></li>
<li><p><span class="b">gorilla/sessions</span>: обеспечивает поддержку сессий</p></li>
<li><p><span class="b">gorilla/mux</span>: позволяет определять более сложные маршруты, которые могут использовать регулярные выражения</p></li>
<li><p><span class="b">gorilla/reverse</span>: используется для создания регулярных выражений для маршрутов</p></li>
</ul>
<p>В данном случае задействуем возможности по созданию маршрутов с помощью gorilla/mux и для установки данного пакета выполним в командной строке/терминале 
следующую команду:</p>
<div class="console"><pre class="consoletext">go get github.com/gorilla/mux</pre></div>
<p>Определим следующий код сервера:</p>
<pre class="brush:go;">
package main
import (
	"fmt"
	"net/http"
	"github.com/gorilla/mux"
)

func productsHandler(w http.ResponseWriter, r *http.Request) {
	vars := mux.Vars(r)
	id := vars["id"]
	response := fmt.Sprintf("Product %s", id)
	fmt.Fprint(w, response)
}

func main() {
	 
	router := mux.NewRouter()
	router.HandleFunc("/products/{id:[0-9]+}", productsHandler)
  	http.Handle("/",router)

	fmt.Println("Server is listening...")
	http.ListenAndServe(":8181", nil)
}
</pre>
<p>Для определения маршрутов с помощью gorilla/mux применяется функция <span class="b">mux.NewRouter()</span>. У возвращаемого этой функцией объекта мы можем вызвать 
метод <span class="b">HandleFunc</span>, который сопоставляет маршрут с определенным обработчиком.</p>
<p>Первый параметр представляет шаблон пути запроса. В фигурных скобках мы можем определить параметр в формате <code>имя_параметра:регулярное_выражение</code>. 
Регулярное выражение определять необязательно, но если оно определено, то параметр должен соответствовать этому выражению. То есть в данном случае 
параметр id должен представлять числовое значение.</p>
<p>Второй параметр - функция обработчика запросов, по указанному в первом параметре маршруту. Подобная функция должна иметь два параметра: <code>func(w http.ResponseWriter, r *http.Request)</code>.</p>
<p>В данном случае функция обработчика - productsHandler - получает параметры пути запроса через функцию <span class="b">mux.Vars</span>. 
Затем из полученного объекта можно извлечь название нужного нам параметра: <code>id := vars["id"]</code>. Название параметра здесь то же самое, что в определение маршрута.</p>
<p>В итоге при обращении к приложению по запросу <span class="ii">localhost:8181/products/2</span> мы получим следующий вывод:</p>
<img src="pics/2.8.png" alt="Gorilla mux in Go" />
<p>Если бы мы захотели бы сделать то же самое, но штатными средствами, которые есть в Go без gorilla/mux, то нам бы пришлось писать дополнительный 
код для парсинга запрошенного пути.</p>
<p>Подобным образом мы можем использовать несколько параметров:</p>
<pre class="brush:go;">
package main
import (
	"fmt"
	"net/http"
	"github.com/gorilla/mux"
)

func productsHandler(w http.ResponseWriter, r *http.Request) {
	vars := mux.Vars(r)
	id := vars["id"]
	cat := vars["category"]
	response := fmt.Sprintf("Product category=%s id=%s", cat, id)
	fmt.Fprint(w, response)
}

func main() {
	 
	router := mux.NewRouter()
	router.HandleFunc("/products/{category}/{id:[0-9]+}", productsHandler)
  	http.Handle("/",router)

	fmt.Println("Server is listening...")
	http.ListenAndServe(":8181", nil)
}
</pre>
<p>В данном случае определены два параметра: id и category.</p>
<img src="pics/2.9.png" alt="path parameters parsing in Go" />
<p>Можно определять несколько маршрутов, которые могут использовать либо различные, либо одни и те же обработчики:</p>
<pre class="brush:go;">
package main
import (
	"fmt"
	"net/http"
	"github.com/gorilla/mux"
)

func productsHandler(w http.ResponseWriter, r *http.Request) {
	vars := mux.Vars(r)
	id := vars["id"]
	response := fmt.Sprintf("id=%s", id)
	fmt.Fprint(w, response)
}
func indexHandler(w http.ResponseWriter, r *http.Request) {
	fmt.Fprint(w, "Index Page")
}

func main() {
	 
	router := mux.NewRouter()
	router.HandleFunc("/products/{id:[0-9]+}", productsHandler)
	router.HandleFunc("/articles/{id:[0-9]+}", productsHandler)
	router.HandleFunc("/", indexHandler)
  	http.Handle("/",router)

	fmt.Println("Server is listening...")
	http.ListenAndServe(":8181", nil)
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


<div class="nav"><p><a href="1.3.php">Назад</a><a href="./">Содержание</a><a href="1.5.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Основы веб-программирования в Go</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/web/1.1.php">Первое веб-приложение</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/web/1.2.php">Маршрутизация</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/web/1.3.php">Статические файлы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/web/1.4.php">Маршрутизация и gorilla/mux</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/web/1.5.php">Строка запроса и отправка форм</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Шаблоны</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/web/2.1.php">Определение и использование шаблонов</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/web/2.2.php">Синтаксис шаблонов</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Работа с базой данных</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/web/3.1.php">Подключение к БД и получение данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/web/3.2.php">Добавление данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/web/3.3.php">Редактирование данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/web/3.4.php">Удаление данных</a></span></li>
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
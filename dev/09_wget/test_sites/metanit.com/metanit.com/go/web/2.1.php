<!DOCTYPE html>
<html >
<head>
<title>Go | Определение и использовние шаблонов</title>
<meta charset="utf-8" />
<meta name="description" content="Определение и использовние шаблонов в веб-приложениях на языке программирования Go, пакет html/template, функция template.ParseFiles">
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
<h1>Шаблоны</h1><h2>Определение и использовние шаблонов</h2><div class="date">Последнее обновление: 02.03.2018</div>

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

<p>Ранее рассматривалось, как в Go отправлять статические файла, в частности, html-страницы. Определение контента в виде html-страниц довольно удобно: 
мы используем преимущества html+css+javascript, отделяем представление от основной логики, которая пишется на Go. Однако статические страницы малополезны, 
когда нам необходимо динамически генерировать некоторый контент на основании различных факторов, например, параметров, переданных через строку запроса. 
И в этом случае мы можем воспользоваться <span class="b">шаблонами</span>.</p>
<p>Язык Go предоставляет функциональность шаблонов по умолчанию в виде пакета <span class="b">html/template</span>.</p>
<p>Используем протейший шаблон:</p>
<pre class="brush:go;">
package main
import (
	"fmt"
	"net/http"
	"html/template"
)

func main() {
	 
	http.HandleFunc("/", func(w http.ResponseWriter, r *http.Request) {

		data := "Go Template"
		tmpl, _ := template.New("data").Parse("&lt;h1&gt;{{ .}}&lt;/h1&gt;")
		tmpl.Execute(w, data)
	})

	fmt.Println("Server is listening...")
	http.ListenAndServe(":8181", nil)
}
</pre>
<p>С помощью функции <code>template.New("data")</code> определяется имя шаблона. Затем для установки самого шаблона используется функция 
<code>Parse("&lt;h1&gt;{{ .}}&lt;/h1&gt;")</code>. В данном случае шаблон фактически представляет заголовок h1. Но ключевым элементом здесь является 
двойная пара фигурных скобок <code>{{ .}}</code>. Они позволяют вводить в разметку html различные данные. Здесь в качестве данных указана точка. 
Точка указывает на контекст шаблона - то есть все данные, которые переданы шаблону.</p>
<p>Стоит отметить, что функция Parse возвращает два значения: собственно шаблон (в данном случае переменная tmpl) и объект ошибки (при ее возникновении). 
В данном случае объект ошибки не используется, поэтому вместо него идет прочерк.</p>
<p>Чтобы передать шаблону данные, сгенерировать итоговую html-разметку и отправить ее в ответ на запрос, применяется функция <span class="b">Execute</span>:</p>
<pre class="brush:go;">tmpl.Execute(w, data)</pre>
<p>В данном случае переменная data представляет строку, и это как раз те данные, которые будут вставляться в шаблон вместо точки <code>{{ .}}</code>. 
Ну а первый параметр - это объект <code>http.ResponseWriter</code>, через который отправляются данные.</p>
<p>В итоге при обращении к приложению мы увидим следующий результат:</p>
<img src="pics/3.1.png" alt="Templates in Golang" />
<p>Шаблон может принимать более сложные данные, которые описываются структурой. Например:</p>
<pre class="brush:go;">
package main
import (
	"fmt"
	"net/http"
	"html/template"
)
type ViewData struct{

	Title string
	Message string
}
func main() {
	 
	http.HandleFunc("/", func(w http.ResponseWriter, r *http.Request) {

		data := ViewData{
			Title: "World Cup",
			Message: "FIFA will never regret it",
		}
		tmpl := template.Must(template.New("data").Parse(`&lt;div&gt;
			&lt;h1&gt;{{ .Title}}&lt;/h1&gt;
			&lt;p&gt;{{ .Message}}&lt;/p&gt;
		&lt;/div&gt;`))
		tmpl.Execute(w, data)
	})

	fmt.Println("Server is listening...")
	http.ListenAndServe(":8181", nil)
}
</pre>
<p>Здесь данные, передаваемые в шаблон, описываются структурой ViewData, и данная структура будет представлять контекст шаблона. Поэтому чтобы обратиться 
к отдельным ее переменным, надо после точки указать название переменной: <code>{{ .Title}}</code>.</p>
<p>Стоит отметить, что названия переменных следует определять с большой буквы.</p>
<p>Так как в данном случае используются сложные данные, то их надо обернуть в функцию <code>template.Must()</code>. Сам код шаблона можно переносить на 
несколько строк, в этом случае код помещается в косые кавычки. Если код шаблона размещается на одной строке, то можно использовать обычные кавычки.</p>
<p>Результат работы программы:</p>
<img src="pics/3.2.png" alt="Complex data in templates in Go" />
<p>Однако определение шаблона внутри кода на Go - нелучший вариант, особенно когда шаблон содержит много сложной html-разметки, вкрапления стилей и скриптов javascript. 
Поэтому более оптимально определять шаблоны в виде отдельных файлов. Например, определим в проекте папку <span class="b">templates</span>, а в ней 
создадим файл <span="b">index.html</span>.</p>
<img src="pics/3.3.png" />
<p>Определим в index.html следующий код:</p>
<pre class="brush:go;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8"&gt;
        &lt;title&gt;{{ .Title}}&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;{{ .Title}}&lt;/h1&gt;
        &lt;p&gt;{{ .Message}}&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Используем этот шаблон в коде сервера:</p>
<pre class="brush:go;">
package main
import (
	"fmt"
	"net/http"
	"html/template"
)
type ViewData struct{

	Title string
	Message string
}
func main() {
	 
	http.HandleFunc("/", func(w http.ResponseWriter, r *http.Request) {

		data := ViewData{
			Title: "World Cup",
			Message: "FIFA will never regret it",
		}
		tmpl, _ := template.ParseFiles("templates/index.html")
		tmpl.Execute(w, data)
	})

	fmt.Println("Server is listening...")
	http.ListenAndServe(":8181", nil)
}
</pre>
<p>Для получения кода из файла применяется функция <span class="b">template.ParseFiles()</span>, которой передается путь к файлу.
Итоговый результат будет почти таким же, как и в предыдущим случае:</p>
<img src="pics/3.4.png" alt="Шаблоны html в языке Go" />
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


<div class="nav"><p><a href="1.5.php">Назад</a><a href="./">Содержание</a><a href="2.2.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 2.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
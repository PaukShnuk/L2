<!DOCTYPE html>
<html >
<head>
<title>Go | Подключение к БД и получение данных</title>
<meta charset="utf-8" />
<meta name="description" content="Подключение к БД и получение данных в веб-приложениях на языке программирования Go, вывод списка объектов из базы данных на веб-страницу">
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
<h1>Работа с базой данных</h1><h2>Подключение к БД и получение данных</h2><div class="date">Последнее обновление: 03.03.2018</div>

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

<p>Рассмотрим, как мы можем взаимодействовать с базой данных в веб-приложении. Основные моменты работы с бд с помощью языка программирования 
Go были рассмотрены в материале <a href="https://metanit.com/go/tutorial/10.1.php">Go и базы данных</a>. В данном же случае мы рассмотрим только непосредственно применение 
этих моментов в рамках веб-приложения.</p>
<p>В качестве системы управления базами данных возьмем MySQL. Вначале создадим на сервере MySQL базу данных productdb и в ней таблицу products. Для этого можно использовать следующие выражений SQL</p>
<pre class="brush:sql;">
create database productdb;
use productdb;
create table products (
    id int auto_increment primary key,
    model varchar(30) not null,
    company varchar(30) not null,
    price int not null
)
</pre>
<p>То есть база данных productdb, в ней есть таблица products, которая будет хранить информацию о товарах, будет 4 столбца: id - идентификатор каждой записи, model - название товара, company - производитель товара и price - цена товара.</p>
<p>Добавим в нее какие-нибудь начальные данные, например, с помощью следующего скрипта:</p>
<pre class="brush:sql;">
insert into productdb.Products (model, company, price) 
values ('iPhone X', 'Apple', 74000),
('Pixel 2', 'Google', 62000),
('Galaxy S9', 'Samsung', 65000)
</pre>
<p>Прежде чем начать работать с MySQL, надо добавить драйвер для Go к переменной $GOPATH (если он ранее не был добавлен). 
Для этого нужно выполнить в командной строке/терминале следующую команду:</p>
<div class="console"><pre class="consoletext">go get github.com/go-sql-driver/mysql</pre></div>
<p>После этого определим на сервере следующий код:</p>
<pre class="brush:go;">
package main
import (
    "fmt"
	"database/sql"
    _ "github.com/go-sql-driver/mysql"
	"net/http"
	"html/template"
	"log"
)
type Product struct{
    Id int
    Model string
    Company string
    Price int
}
var database *sql.DB

func IndexHandler(w http.ResponseWriter, r *http.Request) {

	rows, err := database.Query("select * from productdb.Products")
	if err != nil {
		log.Println(err)
	}
	defer rows.Close()
	products := []Product{}
	
	for rows.Next(){
		p := Product{}
		err := rows.Scan(&p.Id, &p.Model, &p.Company, &p.Price)
		if err != nil{
			fmt.Println(err)
			continue
		}
		products = append(products, p)
	}

	tmpl, _ := template.ParseFiles("templates/index.html")
	tmpl.Execute(w, products)
}

func main() {
	 
	db, err := sql.Open("mysql", "root:password@/productdb")
    
    if err != nil {
        log.Println(err)
	}
	database = db
    defer db.Close()
	http.HandleFunc("/", IndexHandler)

	fmt.Println("Server is listening...")
	http.ListenAndServe(":8181", nil)
}
</pre>
<p>Прежде всего здесь определена структура Product, которая соответствует опредению таблицы products в базе данных. А за взаимодействие с базой данных 
отвечает переменная database.</p>
<p>Для отправки пользователю списка объектов из БД определена функция IndexHandler. В ней с помощью метода <code>database.Query</code> 
выполняется запрос "select * from productdb.Products", который извлекает все объекты из таблицы. Затем из полученного набора создается массив структур Product, 
который затем передается в шаблон index.html (код шаблона приведен ниже).</p>
<p>В функции main открываем подключение с базой данных с помощью функции <code>sql.Open</code>:</p>
<pre class="brush:go;">db, err := sql.Open("mysql", "root:password@/productdb")</pre>
<p>Этой функции в качестве первого параметра передается название драйвера - "mysql". Второй параметр представляет настройки подключения, где 
<code>root</code> - название пользователя в MySQL, password - пароль этого пользователя (как правило тот, который устанавливается при установке MySQL), 
и productdb - название базы данных. Соответственно в каждом конкретном случае пароль может отличаться.</p>
<p>После открытия подключения устанавливается значение переменной database.</p>
<pre class="brush:go;">database = db</pre>
<p>И далее функция IndexHandler устанавливается в качестве обработчика запросов по корневому адресу:</p>
<pre class="brush:go;">http.HandleFunc("/", IndexHandler)</pre>
<p>Теперь определим в проекте папку <span class="b">templates</span>, а в ней создадим новый файл <span class="b">index.html</span>, 
который будет представлять шаблон для вывода массива объектов и будет иметь следующий код:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8"&gt;
        &lt;title&gt;Products&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;table&gt;
			&lt;thead&gt;&lt;th&gt;Id&lt;/th&gt;&lt;th&gt;Model&lt;/th&gt;&lt;th&gt;Company&lt;/th&gt;&lt;th&gt;Price&lt;/th&gt;&lt;/thead&gt;
            {{range . }}
            &lt;tr&gt;
                &lt;td&gt;{{.Id}}&lt;/td&gt;
                &lt;td&gt;{{.Model}}&lt;/td&gt;
                &lt;td&gt;{{.Company}}&lt;/td&gt;
                &lt;td&gt;{{.Price}}&lt;/td&gt;
            &lt;/tr&gt;
            {{end}}
        &lt;/table&gt;
    &lt;/body&gt;
&lt;/html&gt;
</pre>
<p>В итоге после запуска проекта и обращения к корню сайта будет открыто подключение к базе данных, приложение получит все необходимые данные из бд 
и передаст их в шаблон:</p>
<img src="pics/4.1.png" alt="База данных MySQL в веб-приложении на Go" />
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


<div class="nav"><p><a href="2.2.php">Назад</a><a href="./">Содержание</a><a href="3.2.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 3.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 3.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 3.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 3.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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
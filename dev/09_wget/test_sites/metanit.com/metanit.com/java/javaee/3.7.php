<!DOCTYPE html>
<html >
<head>
<title>Java EE | Java Bean</title>
<meta charset="utf-8" />
<meta name="description" content="Использование Java Bean в сервлетах и на страницах JSP в Java EE">
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
<h2>Java Bean</h2><div class="date">Последнее обновление: 20.09.2018</div>

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

<img src="https://metanit.com/metanit-java.jpg" id="jma" style="cursor:pointer;" />
</div>

<p>Класс Java Bean должен соответствовать ряду ограничений:</p>
<ul>
<li><p>иметь конструктор, который не принимает никаких параметров</p></li>
<li><p>определять для всех свойств, которые используются в jsp, методы геттеры и сеттеры</p></li>
<li><p>названия геттеров и сеттеров должны соответствовать условностям: перед именем переменной добавляется get (для геттера) и 
set (для сеттера), а название переменной включается с большой буквы. Например, если переменная называется firstName, 
то функции геттера и сеттера должны называться соответственно getFirstName и setFirstName.</p>
<p>Однако для переменных типа boolean для функции геттера используется вместо get приставка is. Например, переменная 
enabled и геттер isEnabled.</p></li>
<li><p>реализовать интерфейс Serializable или Externalizable</p></li>
</ul>
<p>Рассмотрим, как использовать классы JavaBean. Допустим, у нас есть следующая структура:</p>
<img src="pics/javabeans1.png" alt="Java Beans in JavaEE" />
<p>В папке <span class="ii">Java Resources/src</span> расположен класс User со следующим кодом:</p>
<pre class="brush:java;">
import java.io.Serializable;

public class User implements Serializable {

	private static final long serialVersionUID = 2041275512219239990L;
	
	private String name;
	private int age;
	
	public User() {
		this.name = "";
		this.age = 0;
	}
	public User(String name, int age) {
		
		this.name = name;
		this.age = age;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public int getAge() {
		return age;
	}

	public void setAge(int age) {
		this.age = age;
	}
}
</pre>
<p>Данный класс представляет пользователя и является классом Java Bean: он реализует интерфейс Serializable, имеет конструктор без параметров, а его методы - геттеры и сеттеры, 
которые предоставляют доступ к переменным name и age, соответствуют условностям.</p>
<p>В папке <span class="ii">WebContent</span> определена страница <span class="b">user.jsp</span>. Определим в ней следующий код:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="UTF-8"&gt;
&lt;title&gt;User Java Bean Page&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;div&gt;
&lt;p&gt;Name: ${user.name}&lt;/p&gt;
&lt;p&gt;Age: ${user.age}&lt;/p&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Данная страница jsp получает извне объект user и с помощью синтаксиса EL выводит значения его свойств. Стоит обратить внимание, что 
здесь идет обращение к переменным name и age, хотя они являются приватными.</p>
<p>В папке <span class="ii">Java Resources/src</span> в файле <span class="b">HelloServlet.java</span> определен сервлет 
HelloServlet:</p>
<pre class="brush:java;">
import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
 
@WebServlet("/hello")
public class HelloServlet extends HttpServlet {
 
    protected void doGet(HttpServletRequest request, HttpServletResponse response) 
    		throws ServletException, IOException {
    	
    	User tom = new User("Tom", 25);
    	request.setAttribute("user", tom);
    	getServletContext()
    		.getRequestDispatcher("/user.jsp")
    		.forward(request, response);
    }   
}
</pre>
<p>Сервлет создает объект User. Для передачи его на страницу user.jsp устанавливается атрибут "user" через 
вызов <span class="b">request.setAttribute("user", tom)</code>. Далее происходит перенаправление на страницу user.jsp. И, 
таким образом, страница получит данные из сервлета.</p>
<img src="pics/javabeans2.png" alt="Классы JavaBeans в Java EE" />
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


<div class="nav"><p><a href="3.9.php">Назад</a><a href="./">Содержание</a><a href="3.10.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Java EE</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javaee/1.1.php">Что такое Java EE</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Apache Tomcat</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javaee/2.1.php">Установка Tomcat</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/2.2.php">Структура Apache Tomcat</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/2.3.php">Интеграция Eclipse с Tomcat</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Сервлеты</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.1.php">Введение в сервлеты</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.8.php">Как работает сервлет</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.2.php">Сервлеты в Eclipse</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.3.php">Получение данных в сервлете</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.4.php">Переадресация и перенаправление запроса</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.5.php">web.xml и маппинг сервлетов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.6.php">Параметры инициализации сервлетов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.7.php">Обработка ошибок</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.9.php">Куки</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/4.10.php">Сессии</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Java Server Pages</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.1.php">Что такое JSP. Первое приложение</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.2.php">Работа с JSP в Eclipse</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.3.php">Основы синтаксиса JSP</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.4.php">Использование классов Java в JSP</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.5.php">Вложение jsp-страниц</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.6.php">Получение параметров строки запроса и форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.8.php">Передача данных из сервлета в jsp</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.9.php">Expression Language</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.7.php">Java Bean</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.10.php">Встроенные объекты Expression Language</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.11.php">JSTL</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/3.12.php">Основные возможности JSTL</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Работа с базой данных</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javaee/5.1.php">Подключение к MySQL</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/5.2.php">Основные операции с базой данных. Часть 1</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javaee/5.3.php">Основные операции с базой данных. Часть 2</a></span></li>
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
	
	$("li:contains('Глава 4.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
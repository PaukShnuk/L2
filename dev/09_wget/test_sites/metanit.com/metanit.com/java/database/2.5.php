<!DOCTYPE html>
<html >
<head>
<title>Java и базы данных | Метод executeQuery. Получение данных</title>
<meta charset="utf-8" />
<meta name="description" content="Получение данных из БД MySQL в языке программирования Java, класс Statement и метод executeQuery">
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
<h2>Метод executeQuery. Получение данных</h2><div class="date">Последнее обновление: 08.08.2018</div>

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

<p>Для выборки данных с помощью команды SELECT применяется метод <span class="b">executeQuery</span>:</p>
<pre class="brush:java;">
ResultSet executeQuery("Команда_SQL")
</pre>
<p>Метод возвращает объект ResultSet, который содержит все полученные данные. Как эти данные получить?</p>
<p>В объекте ResultSet итератор устаналивается на позиции перед первой строкой. И чтобы переместиться к первой строке (и ко всем последующим) 
необходимо вызвать метод <span class="b">next()</span>. Пока в наборе ResultSet есть доступные строки, метод next будет возвращать true. 
Типичное перемещение по набору строк:</p>
<pre class="brush:java;">
ResultSet resultSet = statement.executeQuery("SELECT * FROM Products");
while(resultSet.next()){
					
	// получение содержимого строк
}
</pre>
<p>То есть пока в resultSet есть доступные строки, будет выполняться цикл while, который будет переходить к следующей строке в наборе.</p>
<p>После перехода к строке мы можем получить ее содержимое. Для этого у ResultSet определен ряд методов. Некоторые из них:</p>
<ul>
<li><p><code>getBoolean()</code> возвращает значение boolean</p></li>
<li><p><code>getDate()</code> возвращает значение Date</p></li>
<li><p><code>getDouble()</code> возвращает значение double</p></li>
<li><p><code>getInt()</code> возвращает значение int</p></li>
<li><p><code>getFloat()</code> возвращает значение float</p></li>
<li><p><code>getLong()</code> возвращает значение long</p></li>
<li><p><code>getNString()</code> возвращает значение String</p></li>
<li><p><code>getString()</code> возвращает значение String</p></li>
</ul>
<p>В зависимости от того, данные какого тип хранятся в том или ином столбце, мы можем использовать тот или иной метод. 
Каждый из этих методов имеет две версии:</p>
<pre class="brush:java;">
int getInt(int columnIndex)
int getInt(String columnLabel)
</pre>
<p>Первая версия получает данные из столбца с номером columnIndex. Вторая версия получает данные из столбца с названием columnLabel.</p>
<p>Например, в прошлых темах была создана таблица, которая имеет три столбца:</p>
<pre class="brush:sql;">
CREATE TABLE products (
	Id INT PRIMARY KEY AUTO_INCREMENT, 
	ProductName VARCHAR(20), 
	Price INT
)
</pre>
<p>Получим из нее данные:</p>
<pre class="brush:java;">
import java.sql.*;

public class Program{
      
    public static void main(String[] args) {
         try{
			 String url = "jdbc:mysql://localhost/store?serverTimezone=Europe/Moscow&useSSL=false";
			 String username = "root";
			 String password = "password";
			 Class.forName("com.mysql.cj.jdbc.Driver").getDeclaredConstructor().newInstance();
			 
			 try (Connection conn = DriverManager.getConnection(url, username, password)){
				 
				Statement statement = conn.createStatement();
				
				ResultSet resultSet = statement.executeQuery("SELECT * FROM Products");
				while(resultSet.next()){
					
					int id = resultSet.getInt(1);
					String name = resultSet.getString(2);
					int price = resultSet.getInt(3);
					System.out.printf("%d. %s - %d \n", id, name, price);
				}
			 }
		 }
		 catch(Exception ex){
			 System.out.println("Connection failed...");
			 
			 System.out.println(ex);
		 }
    }
}
</pre>
<p>Первый столбец в таблице - столбец Id представляет тип int, поэтому для его получения используется метод <code>getInt()</code>. Второй столбец - ProductName 
представляет строку, поэтому для получения его данных применяется метод <code>getString()</code>. То есть между типом данных и методом 
есть соответствие. И мы не можем, к примеру, получить значение столбца ProductName с помощью метода getInt.</p>
<p>Также отмечу, что индексация столбцов начинается с 1, а не с 0.</p>
<p>Возможный консольный вывод программы:</p>
<div class="console">
<pre class="consoletext">
C:\Java&gt;javac Program.java
C:\Java&gt;java -classpath c:\Java\mysql-connector-java-8.0.11.jar;c:\Java Program
1. iPhone X - 71000
2. Galaxy S9 - 40000

C:\Java&gt;
</pre>
</div>
<p>Однако мы можем точно не знать порядок следования данных полученном наборе. В этом случае мы можем вместо номеров столбцов можно передать 
названия столбцов:</p>
<pre class="brush:java;">
ResultSet resultSet = statement.executeQuery("SELECT * FROM Products");
while(resultSet.next()){
					
	int id = resultSet.getInt("Id");
	String name = resultSet.getString("ProductName");
	int price = resultSet.getInt("Price");
	
	System.out.printf("%d. %s - %d \n", id, name, price);
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


<div class="nav"><p><a href="2.4.php">Назад</a><a href="./">Содержание</a><a href="2.6.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Java и базы данных</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/database/1.1.php">JDBC</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. MySQL</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/database/2.1.php">Установка драйвера Connector/J</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/database/2.2.php">Подключение к базе данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/database/2.3.php">Выполнение команд. Метод executeUpdate</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/database/2.4.php">Добавление, изменение и удаление данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/database/2.5.php">Метод executeQuery. Получение данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/database/2.6.php">PreparedStatement</a></span></li>
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
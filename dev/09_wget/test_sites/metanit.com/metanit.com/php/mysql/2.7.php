<!DOCTYPE html>
<html >
<head>
<title>PHP и MySQL | Фильтрация данных в PDO</title>
<meta charset="utf-8" />
<meta name="description" content="Фильтрация данных из БД MySQL с помощью языка программирования PHP и библиотеки PDO, метод query, PDOStatement">
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
<h2>Фильтрация данных в PDO</h2><div class="date">Последнее обновление: 09.06.2021</div>

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

<p>В прошлой статье применялся метод <code>query()</code> для получения всех данных из БД. Но что, если нам надо получить не все, а какие-то определенные данные, которые овечают некоторому критерию, 
иными словами, произвести фильтрацию данных. Например, возьмем использовавшуюся в прошлых темах таблицу Users:</p>
<pre class="brush:sql;">CREATE TABLE Users (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), age INTEGER)</pre>
<p>Она имеет столбец id, и мы хотим получить определенный объект по id. 
На первый взгляд мы могли бы определить следующий код:</p>
<pre class="brush:php;">
$sql = "SELECT * FROM Users WHERE id = 1";
$result = $conn-&gt;query($sql);
</pre>
<p>Для фильтрации команде SELECT передается выражение <span class="b">WHERE</span>, которая принимает названия столбцов их значения в качестве критерия фильтрации. 
То есть, здесь мы получаем строке, где <code>id = 1</code>.</p>
<p>Однако если данные для фильтрации приходят извне, например, значение для столбца id, то опять же, как и в случае с добавлением, мы сталкиваемся с потенциальной уязвимостью 
кода. И также, как и при добавлении, в этом случае лучше использовать параметризацию и <span class="b">prepared statements</span>.</p>
<p>Например, мы хотим получать в GET-запросе значение для id и по нему получть из базы данных нужные данные. Определим для этого следующий скрипт <span class="b">user.php</span>:</p>
<pre class="brush:php;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;METANIT.COM&lt;/title&gt;
&lt;meta charset="utf-8" /&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?php
if(isset($_GET["id"]))
{
    try {
        $conn = new PDO("mysql:host=localhost;dbname=testdb1", "root", "mypassword");
        $sql = "SELECT * FROM Users WHERE id = :userid";
        $stmt = $conn-&gt;prepare($sql);
		// привязываем значение параметра :userid к $_GET["id"]
        $stmt-&gt;bindValue(":userid", $_GET["id"]);
        // выполняем выражение и получаем пользователя по id
        $stmt-&gt;execute();
        if($stmt-&gt;rowCount() &gt; 0){
            foreach ($stmt as $row) {
              $username = $row["name"];
              $userage = $row["age"];
            
			  echo "&lt;div&gt;
					&lt;h3&gt;Информация о пользователе&lt;/h3&gt;
                    &lt;p&gt;Имя: $username&lt;/p&gt;
                    &lt;p&gt;Возраст: $userage&lt;/p&gt;
				&lt;/div&gt;";
			}
        }
        else{
            echo "Пользователь не найден";
        }
    }
    catch (PDOException $e) {
        echo "Database error: " . $e-&gt;getMessage();
    }
}
?&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Для выполнения запроса к БД вначале создаем prepared statement, которое использует параметр <code>userid</code>, привязанный к значению 
<code>$_GET["id"]</code>:</p>
<pre class="brush:php;">
$sql = "SELECT * FROM Users WHERE id = :userid";
$stmt = $conn-&gt;prepare($sql);
$stmt-&gt;bindValue(":userid", $_GET["id"]);
</pre>
<p>Далее у полученного объекта PDOStatement вызываем метод <code>execute()</code>, который выполняет запрос к бд:</p>
<pre class="brush:php;">$stmt-&gt;execute();</pre>
<p>После выполнения команды <code>SELECT</code> этот объект содержит полученные из БД данные, которые мы можем перебрать с помощью цикла:</p>
<pre class="brush:php;">
if($stmt-&gt;rowCount() &gt; 0){
	foreach ($stmt as $row) {
		$username = $row["name"];
		$userage = $row["age"];
	}
</pre>
<p>При этом с помощью метода <code>rowCount()</code> мы можем узнать количество возвращенных строк. Получение данных столбцов строки производится как и было описано выше для 
простого запроса SELECT. Получив данные столбцов в переменные, мы можем затем что-то с ними сделать, например, вывести их значения на страницу.</p>
<p>Чтоб было проще обращаться к скрипту user.php и передавать ему id, определим скрипт <span class="b">index.php</span>, который будет выводить список объектов:</p>
<pre class="brush:php;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;METANIT.COM&lt;/title&gt;
&lt;meta charset="utf-8" /&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h2&gt;Список пользователей&lt;/h2&gt;
&lt;?php
try {
	$conn = new PDO("mysql:host=localhost;dbname=testdb1", "root", "mypassword");
	$sql = "SELECT id, name FROM Users";
	$result = $conn-&gt;query($sql);
	echo "&lt;table&gt;&lt;tr&gt;&lt;th&gt;Имя&lt;/th&gt;&lt;th&gt;&lt;/th&gt;&lt;/tr&gt;";
	foreach($result as $row){
		echo "&lt;tr&gt;";
			echo "&lt;td&gt;" . $row["name"] . "&lt;/td&gt;";
			echo "&lt;td&gt;&lt;a href='user.php?id=" . $row["id"] . "' &gt;Посмотреть&lt;/a&gt;&lt;/td&gt;";
		echo "&lt;/tr&gt;";
	}
    echo "&lt;/table&gt;";
}
catch (PDOException $e) {
    echo "Database error: " . $e-&gt;getMessage();
}
?&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Здесь все объекты из базы данных выводятся в таблицу, где второй столбец содержит ссылку на скрипт <code>user.php</code>, которому передается соответствующее значение id. В итоге по нажатию на эту 
ссылку мы перейдем к описанию объекта по id:</p>
<img src="./pics/1.7.png" alt="SELECT и WHERE в MySQL и PHP и pdo" />
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


<div class="nav"><p><a href="./2.4.php">Назад</a><a href="./">Содержание</a><a href="./2.5.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в работу с MySQL в PHP</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/php/mysql/1.1.php">PDO и MySQLi</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Работа с MySQL через PDO</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.1.php">PDO. Создание подключения</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.2.php">Выполнение запросов в PDO. Создание базы данных и таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.3.php">Добавление данных в PDO и параметризация запросов</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.4.php">Получение данных в PDO</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.7.php">Фильтрация данных в PDO</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.5.php">Обновление данных в PDO</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.6.php">Удаление данных в PDO</a></span></li>
		</ul>
	</li>
		<li class="closed"><span class="folder">Глава 3. Взаимодействие с MySQL через mysqli</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.1.php">MySQLi. Создание подключения</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.2.php">Выполнение запросов в MySQLi. Создание базы данных и таблиц</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.3.php">Добавление данных в MySQLi</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.4.php">Получение данных в MySQLi</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.7.php">Фильтрация данных в MySQLi</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.5.php">Обновление данных в MySQLi</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.6.php">Удаление данных в MySQLi</a></span></li>
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
<!DOCTYPE html>
<html >
<head>
<title>PHP и MySQL | Обновление данных в PDO</title>
<meta charset="utf-8" />
<meta name="description" content="Обновление данных в БД MySQL с помощью языка программирования PHP и библиотеки PDO, метод exec и execute, prepared statements, bindValue, параметры запросов">
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
<h2>Обновление данных в PDO</h2><div class="date">Последнее обновление: 10.06.2021</div>

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

<p>Для обновления применяется sql-команда <span class="b">UPDATE</span>:</p>
<pre class="brush:sql;">
UPDATE Таблица
SET столбец1 = значение1, столбец2 = значение2,...
WHERE столбец = значение 
</pre>
<p>В библиотеке pdo для обновления данных может применяться тот же метод <span class="b">exec()</span> объекта PDO, который применяется при добавлении. 
Например, возьмем использованную в прошлых темах таблицу Users со следующим определением:</p>
<pre class="brush:sql;">CREATE TABLE Users (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), age INTEGER)</pre>
<p>Изменим в этой таблице поле <span class="b">age</span> для строки, которая имеет <code>id = 1</code>:</p>
<pre class="brush:php;">
&lt;?php
try {
	$conn = new PDO("mysql:host=localhost;dbname=test", "root", "mypassword");
	$sql = "UPDATE Users SET age = 22 WHERE id = 1";
	$affectedRowsNumber = $conn-&gt;exec($sql);
    echo "Обновлено строк: $affectedRowsNumber";
}
catch (PDOException $e) {
    echo "Database error: " . $e-&gt;getMessage();
}
?&gt;
</pre>
<p>Результат метода <code>$conn-&gt;exec()</code> в данном случае количество обновленных строк.</p>
<p>Однако если данные на обновление приходят извне, то мы опять как и при добавлении сталкиваемся с потенциальной уязвимостью подобного подхода. Поэтому в 
этом случаае опять же лучше использовать параметризацию и <span class="b">prepared statements</span>.</p>
<h3>Отправка данных из формы и обновление</h3>
<p>Сначала определим файл <span class="b">index.php</span>, который будет выводить список пользователей:</p>
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
	$sql = "SELECT * FROM Users";
	$result = $conn-&gt;query($sql);
	echo "&lt;table&gt;&lt;tr&gt;&lt;th&gt;Имя&lt;/th&gt;&lt;th&gt;Возраст&lt;/th&gt;&lt;th&gt;&lt;/th&gt;&lt;/tr&gt;";
	foreach($result as $row){
		echo "&lt;tr&gt;";
			echo "&lt;td&gt;" . $row["name"] . "&lt;/td&gt;";
			echo "&lt;td&gt;" . $row["age"] . "&lt;/td&gt;";
			echo "&lt;td&gt;&lt;a href='update.php?id=" . $row["id"] . "'&gt;Обновить&lt;/a&gt;&lt;/td&gt;";
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
<p>Здесь используется команда SELECT, которая получает всех пользователей из таблицы Users. В таблице третий столбец хранит ссылку на скрипт 
<span class="b">update.php</span>, который мы далее создадим и которому передается параметр <code>id</code> с идентификатором пользователя, которого надо 
изменить.</p>
<p>Теперь определим файл <span class="b">update.php</span> для редактирования пользователей:</p>
<pre class="brush:php;">
&lt;?php 
try {
	$conn = new PDO("mysql:host=localhost;dbname=testdb1", "root", "mypassword");
}
catch (PDOException $e) {
	die("Database error: " . $e-&gt;getMessage());
}
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;METANIT.COM&lt;/title&gt;
&lt;meta charset="utf-8" /&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?php
// если запрос GET
if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))
{
    $userid = $_GET["id"];
    $sql = "SELECT * FROM Users WHERE id = :userid";
	$stmt = $conn-&gt;prepare($sql);
	$stmt-&gt;bindValue(":userid", $userid);
	// выполняем выражение и получаем пользователя по id
	$stmt-&gt;execute();
	if($stmt-&gt;rowCount() &gt; 0){
		foreach ($stmt as $row) {
			$username = $row["name"];
			$userage = $row["age"];
		}
		echo "&lt;h3&gt;Обновление пользователя&lt;/h3&gt;
				&lt;form method='post'&gt;
                    &lt;input type='hidden' name='id' value='$userid' /&gt;
                    &lt;p&gt;Имя:
                    &lt;input type='text' name='name' value='$username' /&gt;&lt;/p&gt;
                    &lt;p&gt;Возраст:
                    &lt;input type='number' name='age' value='$userage' /&gt;&lt;/p&gt;
                    &lt;input type='submit' value='Сохранить' /&gt;
			&lt;/form&gt;";
	}
	else{
		echo "Пользователь не найден";
	}
}
elseif (isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["age"])) {
     
    $sql = "UPDATE Users SET name = :username, age = :userage WHERE id = :userid";
	$stmt = $conn-&gt;prepare($sql);
	$stmt-&gt;bindValue(":userid", $_POST["id"]);
	$stmt-&gt;bindValue(":username", $_POST["name"]);
	$stmt-&gt;bindValue(":userage", $_POST["age"]);
         
	$stmt-&gt;execute();
	header("Location: index.php");
}
else{
    echo "Некорректные данные";
}
?&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Весь код обновления структурно делится на две части. В первой части мы обрабатываем запрос Get. Когда пользователь нажимает на ссылку "Обновить" 
на странице <code>index.php</code>, то отправляется запрос GET, в котором передается id редактируемого пользователя. Поэтому мы сначала смотрим, 
представляет ли запрос GET-запрос и имеет ли он параметр <code>id</code>.</p>
<pre class="brush:php;">if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"]))</pre>
<p>И если это запрос GET, то нам надо вывести данные редактируемого пользователя в поля формы. Для этого отправляем базе данных запрос</p>
<pre class="brush:php;">
$sql = "SELECT * FROM Users WHERE id = :userid";
$stmt = $conn-&gt;prepare($sql);
$stmt-&gt;bindValue(":userid", $userid);
$stmt-&gt;execute();
</pre>
<p>Далее получаем полученные данные и, если они имеются, выводим их в поля формы. Таким образом, пользователь увидит на форме данные редактируемого объекта.</p>
<p>Вторая часть скрипта представляет обработку POST-запроса - когда пользователь нажимает на кнопку на форме, то будет отправляться POST-запрос с отправленными данными. 
Мы получаем эти данные и отправляем базе данных команду UPDATE с этими данными, используя при этом параметризацию запроса:</p>
<pre class="brush:php;">
$sql = "UPDATE Users SET name = :username, age = :userage WHERE id = :userid";
$stmt = $conn-&gt;prepare($sql);
$stmt-&gt;bindValue(":userid", $_POST["id"]);
$stmt-&gt;bindValue(":username", $_POST["name"]);
$stmt-&gt;bindValue(":userage", $_POST["age"]);
$stmt-&gt;execute();
</pre>
<p>После выполнения запроса к БД перенаправляем пользователя на скрипт <span class="b">index.php</span> с помощью функции</p>
<pre class="brush:php;">header("Location: index.php");</pre>
<p>Таким образом, пользователь обращается к скрипту <span class="b">index.php</span>, видит таблицу с данными и нажимает на ссылку "Обновить" в 
одной из строк.</p>
<img src="./pics/1.3.png" alt="Вывод данных из MySQL в PHP и pdo" />
<p>После нажатия его перебрасывает на скрипт <span class="b">update.php</span>, который выводит данные редактируемого объекта. Пользователь 
изменяет данные и нажимает на кнопку.</p>
<img src="./pics/1.4.png" alt="Редактирование данных из MySQL в PHP и pdo" />
<p>Данные в запросе POST отправляются этому же скрипту <span class="b">update.php</span>, который сохраняет данные и 
перенаправляет пользователя обратно на <span class="b">index.php</span>.</p>
<img src="./pics/1.5.png" alt="Изменение данных из MySQL в PHP и pdo" />
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


<div class="nav"><p><a href="./2.7.php">Назад</a><a href="./">Содержание</a><a href="./2.6.php">Вперед</a></p></div></div>
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
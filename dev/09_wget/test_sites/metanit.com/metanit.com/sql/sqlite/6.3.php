<!DOCTYPE html>
<html >
<head>
<title>SQLite | Хранение дат и времени в базе данных</title>
<meta charset="utf-8" />
<meta name="description" content="Хранение дат и времени в базе данных в SQLite, функции date, time, datetime, форматы дат и времени">
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
<h2>Хранение дат и времени в базе данных</h2><div class="date">Последнее обновление: 01.12.2021</div>

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

<p>SQLite не имеет встроенных типов данных для хранения в таблицах в базе данных дат и времени, тем не менее это не мешает хранить дату и время в 
базе данных также, как и любые другие данные. Для хранения дат и времени можно использовать типы <span class="b">TEXT</span>, <span class="b">REAL</span> и <span class="b">INTEGER</span></p>
<h3>Тип TEXT</h3>
<p>При использовании типа <span class="b">TEXT</span> для хранения даты и времени они сохраняются в формате <span class="b">YYYY-MM-DD HH:MM:SS.SSS</span> или 
<span class="b">YYYY-MM-DD HH:MM:SS</span>, например, <code>2021-12-01 13:23:08</code></p>
<p>Для хранения отдельно даты применяется формат <span class="b">YYYY-MM-DD</span>, а для хранения времени - формат <span class="b">HH:MM:SS</span></p>
<p>Например, определим следующую таблицу пользователей:</p>
<pre class="brush:sql;">
DROP TABLE IF EXISTS users;
CREATE TABLE users
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
	name TEXT NOT NULL,
    date_of_birth TEXT
);
INSERT INTO users (name, date_of_birth) VALUES 
('Tom', '1987-05-12'),
('Bob', date('now', '-41 years')),
('Sam', date('2021-11-29', '-25 years'));
</pre>
<p>Для установки даты и времени при сохранении данных можно напрямую использовать текстовый формат (<code>"1987-05-12"</code>) или применять функции 
для работы с датами и временем (<code>date('now', '-41 years')</code>).</p>
<img src="./pics/8.6.png" alt="Хранение дат в базе данных в SQLite" />
<p>Хранимые значения мы можем далее использовать в функциях, которые работают с датами и временем. Например, используя хранимую дату дня рождения, 
найдем возраст пользователей:</p>
<pre class="brush:sql;">
SELECT name, 
	date('now')-date_of_birth AS age 
FROM users;
</pre>
<p>Другой пример - получение пользователей, день рождения которых находится в определенном диапазоне дат:</p>
<pre class="brush:sql;">
SELECT name, date_of_birth 
FROM users
WHERE date_of_birth BETWEEN '1950-01-01' AND '1991-12-31';
</pre>
<p>Аналогичным образом можно сохранять дату и время полностью. Например, определим таблицу заказов, которая хранит дату и время заказа:</p>
<pre class="brush:sql;">
DROP TABLE IF EXISTS orders;
CREATE TABLE orders
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    date_time TEXT NOT NULL
);
INSERT INTO orders (date_time)
VALUES ('2021-11-30 22:01:15'),
(datetime('now')),
(datetime('now', '-5 hours'));

SELECT * FROM orders;
</pre>
<p>К примеру найдем все заказы за ноябрь 2021 года:</p>
<pre class="brush:sql;">
SELECT * FROM orders
WHERE date_time BETWEEN '2021-11-01' AND '2021-11-30';
</pre>
<p>Или найдем заказы, сделанные за текущий день:</p>
<pre class="brush:sql;">
SELECT * FROM orders
WHERE date_time BETWEEN datetime('now', 'start of day') AND datetime('now');
</pre>

<h3>REAL</h3>
<p>Также можно хранить дату и время в виде значения <span class="b">REAL</span>. В этом случае столбец хранит количество дней с начала юлианской эпохи. 
Например, возьмем предущую таблицу заказов и изменим в ней для даты и времени заказа тип с TEXT на REAL:</p>
<pre class="brush:sql;">
DROP TABLE IF EXISTS orders;
CREATE TABLE orders
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    date_time REAL NOT NULL
);
INSERT INTO orders (date_time)
VALUES (julianday('2021-11-30 22:01:15')),
(julianday('now')),
(julianday('now', '-5 hours'));
</pre>
<p>Хранимое значение REAL с помощью функцию мы можем преобразовать в дату и время:</p>
<pre class="brush:sql;">
SELECT date_time, datetime(date_time) FROM orders;
</pre>
<img src="./pics/8.7.png" alt="Хранение дат в базе данных в SQLite в виде REAL" />


<h3>INTEGER</h3>
<p>Также можно использовать тип <span class="b">INTEGER</span>. В этом случае дата и время хранятся в виде количества секунд, прошедших с начала эпохи 
UNIX (хотя это ограничивает набор дат началом эпохи UNIX - 1970-01-01 00:00:00 UTC). Например, возьмем предыдущую таблицу заказов и изменим в ней для даты и времени заказа тип на <span class="b">INTEGER</span>:</p>
<pre class="brush:sql;">
DROP TABLE IF EXISTS orders;
CREATE TABLE orders
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    date_time INTEGER NOT NULL
);
INSERT INTO orders (date_time)
VALUES (strftime('%s', '2021-11-30 22:01:15')),
(strftime('%s', 'now')),
(strftime('%s', 'now', '-5 hours'));
</pre>
<p>Функция <span class="b">strftime</span> с помощью параметра <code>"%s"</code>получает количество секунд, прошедших с начала эпохи UNIX относительно заданной даты. 
И также это значение мы можем преобразовать в читабельные дату и время:</p>
<pre class="brush:sql;">
SELECT date_time, datetime(date_time, 'unixepoch') FROM orders;
</pre>
<img src="./pics/8.8.png" alt="Хранение дат в базе данных в SQLite в виде INTEGER" />

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


<div class="nav"><p><a href="./6.2.php">Назад</a><a href="./">Содержание</a><a href="./7.1.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в SQLite</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/1.1.php">Что такое SQLite</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/1.2.php">Консольный клиент sqlite3</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/1.3.php">Графический клиент DB Browser for SQLite</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Определение структуры данных в SQLite</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/2.1.php">Создание и удаление таблицы. Прикрепление базы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/2.2.php">Типы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/2.3.php">Ограничения столбцов и таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/2.4.php">Внешние ключи FOREIGN KEY</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/2.5.php">Изменение таблиц и столбцов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Основные операции с данными</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/3.1.php">Добавление данных. Команда INSERT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/3.2.php">Выборка данных. Команда SELECT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/3.3.php">Фильтрация данных. Оператор WHERE</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/3.4.php">Обновление данных. Команда UPDATE</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/3.5.php">Удаление данных. Команда DELETE</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/3.6.php">Замена данных. Команда REPLACE</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Запросы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/4.1.php">Выборка уникальных значений. Оператор DISTINCT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/4.2.php">Операторы фильтрации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/4.3.php">Сортировка. ORDER BY</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/4.4.php">Получение диапазона строк. Оператор LIMIT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/4.5.php">Агрегатные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/4.6.php">Группировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/4.7.php">Подзапросы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/4.8.php">Подзапросы в основных командах SQL</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/4.9.php">Оператор EXISTS</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Соединение таблиц</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/5.1.php">Неявное соединение таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/5.2.php">Соединение таблиц с помощью INNER JOIN</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/5.3.php">Соединение таблиц с помощью LEFT JOIN</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/5.4.php">UNION</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/5.5.php">EXCEPT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/5.6.php">INTERSECT</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Встроенные функции</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/6.1.php">Функции CASE и IIF</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/6.4.php">Функции для работы с числами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/6.5.php">Функции для работы со строками</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Работа с датами и временем</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/6.2.php">Даты. Функции для работы с датами и временем</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/6.3.php">Хранение дат и времени в базе данных</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Дополнительные статьи</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlite/7.1.php">Представления</a></span></li>
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
	
	$("li:contains('Глава 7.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 7.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
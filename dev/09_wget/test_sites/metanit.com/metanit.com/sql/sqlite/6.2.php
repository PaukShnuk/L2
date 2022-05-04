<!DOCTYPE html>
<html >
<head>
<title>SQLite | Функции для работы с датами и временем</title>
<meta charset="utf-8" />
<meta name="description" content="Функции для работы с датами и временем в SQLite, date, time, datetime, strftime, julianday, форматирование дат и времени">
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
<h1>Работа с датами и временем</h1><h2>Функции для работы с датами и временем</h2><div class="date">Последнее обновление: 01.12.2021</div>

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

<p>SQLite имеет ряд встроенных функций для работы с датами и временем:</p>
<ul>
<li><p><span class="b">DATE()</span> возвращает дату в формате "YYYY-MM-DD". Имеет следующее определение:</p>
<pre class="brush:sql;">date(time-value, modifier, modifier, ...)</pre></li>
<li><p><span class="b">TIME()</span> вычисляет время. Имеет следующее определение:</p>
<pre class="brush:sql;">time(time-value, modifier, modifier, ...)</pre></li>
<li><p><span class="b">DATETIME()</span> вычисляет дату и время. Имеет следующее определение:</p>
<pre class="brush:sql;">datetime(time-value, modifier, modifier, ...)</pre></li>
<li><p><span class="b">JULIANDAY()</span> возвращает количество дней с момента начала юлианского периода (24 ноября 4714 до н.э.) в виде значения REAL. Имеет следующее определение:</p>
<pre class="brush:sql;">julianday(time-value, modifier, modifier, ...)</pre></li>
<li><p><span class="b">STRFTIME()</span> форматирует дату. Имеет следующее определение:</p>
<pre class="brush:sql;">strftime(format, time-value, modifier, modifier, ...) </pre></li>
</ul>
<p>Если первым четырем функциям не передаются параметры, то они вычисляют текущие дату и время:</p>
<pre class="brush:sql;">
SELECT date() AS date, 
	time() AS time,
	datetime() AS datetime,
	julianday() AS julian;
</pre>
<img src="./pics/8.2.png" alt="Функции DATE, DATETIME и TIME и получение текущей даты в SQLite" />
<h3>Установка даты и времени</h3>
<p>В качестве параметра <code>time-value</code> эти функций могут получать дату и время в следующих форматах:</p>
<ul>
<li><p><code>YYYY-MM-DD</code></p></li>
<li><p><code>YYYY-MM-DD HH:MM</code></p></li>
<li><p><code>YYYY-MM-DD HH:MM:SS</code></p></li>
<li><p><code>YYYY-MM-DD HH:MM:SS.SSS</code></p></li>
<li><p><code>YYYY-MM-DDTHH:MM</code> (в качестве разделителя между датой и временем применяется разделитель - символ <span class="b">T</span> в соответствии со 
стандартом  ISO-8601)</p></li>
<li><p><code>YYYY-MM-DDTHH:MM:SS</code></p></li>
<li><p><code>YYYY-MM-DDTHH:MM:SS.SSS</code></p></li>
<li><p><code>HH:MM</code></p></li>
<li><p><code>HH:MM:SS</code></p></li>
<li><p><code>HH:MM:SS.SSS</code></p></li>
<li><p><code>now</code> (представляет текущую дату и время), 
например</p>
<pre class="brush:sql;">SELECT datetime('now');</pre></li>
<li><p><code>DDDDDDDDDD</code> (представляет количество дней с начала юлианской эпохи в виде значения INTEGER или REAL), 
например</p>
<pre class="brush:sql;">SELECT datetime(1092941466);</pre></li>
</ul>
<p>Передадим в функции для даты и времени значения в некоторых из этих форматах:</p>
<pre class="brush:sql;">
SELECT date('2004-04-21') AS date, 				-- YYYY-MM-DD
	time('16:45:21') AS time,					-- HH:MM:SS
	datetime('2004-04-21T16:45') AS datetime,	--  YYYY-MM-DDTHH:MM 
	julianday('2004-04-21 16:45:21') AS julian;	-- YYYY-MM-DD HH:MM:SS
</pre>
<img src="./pics/8.1.png" alt="Функции для работы с датами и временем в SQLite" />
<h3>Модификаторы</h3>
<p>В качестве дополнительных параметров в функции для работы с датами и временем могут передаваться модификаторы, которые позволяют уточнить дату и время. 
В SQLite применяются следующие модификаторы:</p>
<ul>
<li><p><code>NNN days</code>: задает смещение на несколько дней. Например, получение даты, которая была 7 дней до определенной:</p>
<pre class="brush:sql;">SELECT date('2021-12-31', '-7 days');	-- 2021-12-24</pre></li>
<li><p><code>NNN hours</code>: задает смещение на несколько часов. Например, получение времени, которое будет через три часа:</p>
<pre class="brush:sql;">SELECT time('19:12', '3 hours');	-- 22:12:00</pre></li>
<li><p><code>NNN minutes</code>: задает смещение на несколько минут.</p>
<pre class="brush:sql;">SELECT time('19:12', '35 minutes');	-- 19:47:00</pre></li>
<li><p><code>NNN.NNNN seconds</code>: задает смещение на секунд.</p>
<pre class="brush:sql;">SELECT time('19:12', '-45.1 seconds');	-- 19:11:14</pre></li>
<li><p><code>NNN months</code>: задает смещение на месяцев.</p>
<pre class="brush:sql;">SELECT date('2021-12-31', '-7 months');	-- 2021-05-31</pre></li>
<li><p><code>NNN years</code>: задает смещение на несколько лет.</p>
<pre class="brush:sql;">SELECT date('2021-12-31', '11 years');	-- 2032-12-31</pre></li>
<li><p><code>start of month</code>: сдвигает дату на первый день месяца:</p>
<pre class="brush:sql;">SELECT date('2021-11-26', 'start of month');	-- 2021-11-01</pre></li>
<li><p><code>start of year</code>: сдвигает дату на первый день года:</p>
<pre class="brush:sql;">SELECT date('2021-11-26', 'start of year');	-- 2021-01-01</pre></li>
<li><p><code>start of day</code>: сдвигает время на начало дня:</p>
<pre class="brush:sql;">SELECT time('16:32', 'start of day');	-- 00:00:00</pre></li>
<li><p><code>weekday N</code>: сдвигает дату на определенный день текущей недели/ Для воскресения передается число 0, для понедельника - число 1 
и так далее:</p>
<pre class="brush:sql;">
SELECT date('2021-12-01', 'weekday 0'),	-- 2021-12-05
		date('2021-12-01', 'weekday 1'), -- 2021-12-06
		date('2021-12-01', 'weekday 6'); -- 2021-12-04
</pre></li>
<li><p><code>unixepoch</code> возвращает количество секунд, которые прошли с момента начала эпохи UNIX. Работает правильно только с форматом "DDDDDDDDDD"</p></li>
<li><p><code>localtime</code>: получает локальное время</p></li>
<li><p><code>utc</code>: получает время относительно UTC</p>
<pre class="brush:sql;">
SELECT time('12:33:24', 'localtime'), -- 16:33:24
		time('16:33:24', 'utc'); -- 12:33:24
</pre></li>
</ul>
<p>Можно передавать сразу несколько модификаторов:</p>
<pre class="brush:sql;">
SELECT date('now', '-2 days', '1 months'),	-- 2021-12-29
	datetime('2021-12-01 12:33', 'start of day', '5 days'); -- 2021-12-06 00:00:00
</pre>
<h3>Форматирование дат и времени</h3>
<p>Функция <span class="b">strftime</span>, которая форматирует дату и время, в качестве первого параметра принимает строку форматирования. Строка форматирования 
может принимать следующие параметры:</p>
<ul>
<li><p><code>%d</code>: день месяца в формате 00</p></li>
<li><p><code>%f</code>: секунды в формате SS.SSS</p></li>
<li><p><code>%H</code>: час в формате 00-24</p></li>
<li><p><code>%j</code>: день года в формате 001-366</p></li>
<li><p><code>%J</code>: количество дней с начала юлианской эпохи</p></li>
<li><p><code>%m</code>: месяц в формате 01-12</p></li>
<li><p><code>%M</code>: минута в формате 00-59</p></li>
<li><p><code>%s</code>: количество секунда с 1970-01-01</p></li>
<li><p><code>%S</code>: секунды в формате 00-59</p></li>
<li><p><code>%w</code>: день недели в формате 0-6, где воскресение имеет номер 0</p></li>
<li><p><code>%W</code>: номер недели года в формате 00-53</p></li>
<li><p><code>%Y</code>: год в формате 0000-9999</p></li>
<li><p><code>%%</code>: экраниурет символ %</p></li>
</ul>
<p>Пример форматирования:</p>
<pre class="brush:sql;">SELECT strftime('%d.%m.%Y', '2021-12-01');	-- 01.12.2021</pre>
<img src="./pics/8.5.png" alt="Форматирование дат и времени и функция strftime в SQLite" />

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


<div class="nav"><p><a href="./6.5.php">Назад</a><a href="./">Содержание</a><a href="./6.3.php">Вперед</a></p></div></div>
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
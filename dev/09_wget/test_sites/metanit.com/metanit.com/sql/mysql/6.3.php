<!DOCTYPE html>
<html >
<head>
<title>MySQL | Функции для работы с датами и временем</title>
<meta charset="utf-8" />
<meta name="description" content="Функции для работы с датами и временем в MySQL, получение текущих даты и времени, сложение и вычитание дат">
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
<h2>Функции для работы с датами и временем</h2><div class="date">Последнее обновление: 26.05.2018</div>

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

<p>MySQL имеет ряд встроенных функций для работы с датами и временем.</p>
<h4>Получение даты и времени</h4>
<ul>
<li><p>Функции <span class="b">NOW()</span>, <span class="b">SYSDATE()</span>, <span class="b">CURRENT_TIMESTAMP()</span> возвращают текущую локальную 
дату и время на основе системных часов в виде объекта datetime. Все три функции возвращают одинаковый результат</p>
<pre class="brush:sql;">
SELECT NOW();				-- 2018-05-25 21:34:55
SELECT SYSDATE();			-- 2018-05-25 21:34:55
SELECT CURRENT_TIMESTAMP();	-- 2018-05-25 21:32:55
</pre>
</li>
<li><p>Функции <span class="b">CURDATE</span> и <span class="b">CURRENT_DATE</span> возвращают текущую локальную дату в виде объекта date:</p>
<pre class="brush:sql;">
SELECT CURRENT_DATE();		-- 2018-05-25
SELECT CURDATE();			-- 2018-05-25
</pre>
</li>
<li><p>Функции <span class="b">CURTIME</span> и <span class="b">CURRENT_TIME</span> возвращают текущее время в виде объекта time:</p>
<pre class="brush:sql;">
SELECT CURRENT_TIME();	-- 20:47:45
SELECT CURTIME();		-- 20:47:45
</pre>
</li>
<li><p><span class="b">UTC_DATE</span> возвращает текущую локальную дату относительно GMT</p>
<pre class="brush:sql;">SELECT UTC_DATE();		-- 2018-05-25</pre>
</li>
<li><p><span class="b">UTC_TIME</span> возвращает текущее локальное время относительно GMT</p>
<pre class="brush:sql;">SELECT UTC_TIME();		-- 17:47:45</pre>
</li>
</ul>

<h4>Парсинг даты и времени</h4>
<ul><li><p><span class="b">DAYOFMONTH(date)</span> возвращает день месяца в виде числового значения</p></li>
<li><p><span class="b">DAYOFWEEK(date)</span> возвращает день недели в виде числового значения</p></li>
<li><p><span class="b">DAYOFYEAR(date)</span> возвращает номер дня в году</p></li>
<li><p><span class="b">MONTH(date)</span> возвращает месяц даты</p></li>
<li><p><span class="b">YEAR(date)</span> возвращает год из даты</p></li>
<li><p><span class="b">QUARTER(date)</span> возвращает номер квартала года</p></li>
<li><p><span class="b">WEEK(date [, first])</span> возвращает номер недели года. Необязательный параметр позволяет задать стартовый день недели. Если этот параметр равен 1, то первым 
днем считается понедельник, иначе воскресенье</p></li>
<li><p><span class="b">LAST_DAY(date)</span> возвращает последний день месяца в виде даты</p></li>
<li><p><span class="b">DAYNAME(date)</span> возвращает название дня недели</p></li>
<li><p><span class="b">MONTHNAME(date)</span> возвращает название текущего месяца</p></li>
<li><p><span class="b">HOUR(time)</span> возвращает час времени</p></li>
<li><p><span class="b">MINUTE(time)</span> возвращает минуту времени</p></li>
<li><p><span class="b">SECOND(time)</span> возвращает секунду времени</p></li>
</ul>
<p>Примеры функций:</p>
<table>
<tr class="tabhead"><td><p>Функция</p></td><td><p>Результат</p></td></tr>
<tr><td><p>DAYOFMONTH('2018-05-25')</p></td><td><p>25</p></td></tr>
<tr><td><p>DAYOFWEEK('2018-05-25')</p></td><td><p>6</p></td></tr>
<tr><td><p>DAYOFYEAR('2018-05-25')</p></td><td><p>145</p></td></tr>
<tr><td><p>MONTH('2018-05-25')</p></td><td><p>5</p></td></tr>
<tr><td><p>YEAR('2018-05-25')</p></td><td><p>2018</p></td></tr>
<tr><td><p>QUARTER('2018-05-25')</p></td><td><p>2</p></td></tr>
<tr><td><p>WEEK('2018-05-25', 1)</p></td><td><p>21</p></td></tr>
<tr><td><p>LAST_DAY('2018-05-25')</p></td><td><p>2018-05-31</p></td></tr>
<tr><td><p>DAYNAME('2018-05-25')</p></td><td><p>Friday</p></td></tr>
<tr><td><p>MONTHNAME('2018-05-25')</p></td><td><p>May</p></td></tr>
<tr><td><p>HOUR('21:25:54')</p></td><td><p>21</p></td></tr>
<tr><td><p>MINUTE('21:25:54')</p></td><td><p>25</p></td></tr>
<tr><td><p>SECOND('21:25:54')</p></td><td><p>54</p></td></tr>
</table>
<h4>Функция EXTRACT</h4>
<p>Функция EXTRACT извлекает из даты и времени какой-то определенный компонент. Ее формальный синтаксис:</p>
<pre class="brush:sql;">EXTRACT(unit FROM datetime)</pre>
<p>Значение datetime представляет исходную дату и (или) время, а значение unit указывает, какой компонент даты или времени будет извлекаться. 
Параметр unit может представлять одно из следующих значений:</p>
<ul>
<li><p><code>SECOND</code> (секунды)</p></li>
<li><p><code>MINUTE</code> (минуты)</p></li>
<li><p><code>HOUR</code> (час)</p></li>
<li><p><code>DAY</code> (день)</p></li>
<li><p><code>MONTH</code> (месяц)</p></li>
<li><p><code>YEAR</code> (год)</p></li>
<li><p><code>MINUTE_SECOND</code> (минуты и секунды)</p></li>
<li><p><code>HOUR_MINUTE</code> (часы и минуты)</p></li>
<li><p><code>DAY_HOUR</code> (день и часы)</p></li>
<li><p><code>YEAR_MONTH</code> (год и месяц)</p></li>
<li><p><code>HOUR_SECOND</code> (часы, минуты и секунды)</p></li>
<li><p><code>DAY_MINUTE</code> (день, часы и минуты)</p></li>
<li><p><code>DAY_SECOND</code> (день, чаы, минуты и секунды)</p></li>
</ul>
<p>Примеры вызова функции:</p>
<table>
<tr class="tabhead"><td><p>Вызов</p></td><td><p>Результат</p></td></tr>
<tr><td><p>EXTRACT( SECOND FROM '2018-05-25 21:25:54')</p></td><td><p>54</p></td></tr>
<tr><td><p>EXTRACT( MINUTE FROM '2018-05-25 21:25:54')</p></td><td><p>25</p></td></tr>
<tr><td><p>EXTRACT( HOUR FROM '2018-05-25 21:25:54')</p></td><td><p>21</p></td></tr>
<tr><td><p>EXTRACT( DAY FROM '2018-05-25 21:25:54')</p></td><td><p>25</p></td></tr>
<tr><td><p>EXTRACT( MONTH FROM '2018-05-25 21:25:54')</p></td><td><p>5</p></td></tr>
<tr><td><p>EXTRACT( YEAR FROM '2018-05-25 21:25:54')</p></td><td><p>2018</p></td></tr>
<tr><td><p>EXTRACT( MINUTE_SECOND FROM '2018-05-25 21:25:54')</p></td><td><p>2554</p></td></tr>
<tr><td><p>EXTRACT( DAY_HOUR FROM '2018-05-25 21:25:54')</p></td><td><p>2521</p></td></tr>
<tr><td><p>EXTRACT( YEAR_MONTH FROM '2018-05-25 21:25:54')</p></td><td><p>201805</p></td></tr>
<tr><td><p>EXTRACT( HOUR_SECOND FROM '2018-05-25 21:25:54')</p></td><td><p>212554</p></td></tr>
<tr><td><p>EXTRACT( DAY_MINUTE FROM '2018-05-25 21:25:54')</p></td><td><p>252125</p></td></tr>
<tr><td><p>EXTRACT( DAY_SECOND FROM '2018-05-25 21:25:54')</p></td><td><p>25212554</p></td></tr>
</table>
<h4>Функции для манипуляции с датами</h4>
<p>Ряд функций позволяют производить операции сложения и вычитания с датами и временем:</p>
<ul>
<li><p><span class="b">DATE_ADD(date, INTERVAL expression unit)</span> возвращает объект DATE или DATETIME, который является результатом сложения 
даты date с определенным временным интервалом. Интервал задается с помощью выражения <code>INTERVAL expression unit</code>, где <code>INTERVAL</code> 
предоставляет ключевое слово, <code>expression</code> - количество добавляемых к дате единиц, а <code>unit</code> - тип единиц (часы, дни и т.д.) 
Параметр <code>unit</code> может иметь те же значения, что и в функции EXTRACT, то есть DAY, HOUR и т.д.</p></li>
<li><p><span class="b">DATE_SUB(date, INTERVAL expression unit)</span> возвращает объект DATE или DATETIME, который является результатом вычитания 
из даты date определенного временного интервала</p></li>
<li><p><span class="b">DATEDIFF(date1, date2)</span> возвращает разницу в днях между датами date1 и date2</p></li>
<li><p><span class="b">TO_DAYS(date)</span> возвращает количество дней с 0-го года</p></li>
<li><p><span class="b">TIME_TO_SEC(time)</span> возвращает количество секунд, прошедших с момента полуночи</p></li>
</ul>
<p>Примеры применения:</p>
<table>
<tr class="tabhead"><td><p>Вызов</p></td><td><p>Результат</p></td></tr>
<tr><td><p>DATE_ADD('2018-05-25', INTERVAL 1 DAY)</p></td><td><p>2018-05-26</p></td></tr>
<tr><td><p>DATE_ADD('2018-05-25', INTERVAL 3 MONTH)</p></td><td><p>2018-08-25</p></td></tr>
<tr><td><p>DATE_ADD('2018-05-25 21:31:27', INTERVAL 4 HOUR)</p></td><td><p>2018-05-26 01:31:27</p></td></tr>
<tr><td><p>DATE_SUB('2018-05-25', INTERVAL 4 DAY)</p></td><td><p>2018-05-21</p></td></tr>
<tr><td><p>DATEDIFF('2018-05-25', '2018-05-27')</p></td><td><p>-2</p></td></tr>
<tr><td><p>DATEDIFF('2018-05-25', '2018-05-21')</p></td><td><p>4</p></td></tr>
<tr><td><p>DATEDIFF('2018-05-25', '2018-03-21')</p></td><td><p>65</p></td></tr>
<tr><td><p>TO_DAYS('2018-05-25')</p></td><td><p>737204</p></td></tr>
<tr><td><p>TIME_TO_SEC('10:00')</p></td><td><p>36000</p></td></tr>
</table>
<h4>Форматирование дат и времени</h4>
<ul>
<li><p><span class="b">DATE_FORMAT(date, format)</span> возвращает объект DATE или DATETIME, отформатированный с помощью шаблона format</p></li>
<li><p><span class="b">TIME_FORMAT(date, format)</span> возвращает объект TIME или DATETIME, отформатированный с помощью шаблона format</p></li>
</ul>
<p>Обе функции в качестве второго параметра принимают строку форматирования или шаблон, который показывает, как оформатировать значение. Этот шаблон может 
принимать следующие значения:</p>
<ul>
<li><p><code>%m</code>: месяц в числовом формате 01..12</p></li>
<li><p><code>%с</code>: месяц в числовом формате 1..12</p></li>
<li><p><code>%M</code>: название месяца (January...December)</p></li>
<li><p><code>%b</code>: аббревиатура месяца (Jan...Dec)</p></li>
<li><p><code>%d</code>: день месяца в числовом формате 00..31</p></li>
<li><p><code>%e</code>: день месяца в числовом формате 0..31</p></li>
<li><p><code>%D</code>: номер дня месяца с суффиксом (1st, 2nd, 3rd...)</p></li>
<li><p><code>%y</code>: год в виде двух чисел</p></li>
<li><p><code>%Y</code>: год в виде четырех чисел</p></li>
<li><p><code>%W</code>: название дня недели (Sunday...Saturday)</p></li>
<li><p><code>%a</code>: аббревиатура дня недели (Sun...Sat)</p></li>
<li><p><code>%H</code>: час в формате 00..23</p></li>
<li><p><code>%k</code>: час в формате 0..23</p></li>
<li><p><code>%h</code>: час в формате 01..12</p></li>
<li><p><code>%l</code>: час в формате 1..12</p></li>
<li><p><code>%i</code>: минуты в формате 00..59</p></li>
<li><p><code>%r</code>: время в 12-ти часовом формате (hh:mm:ss AM или PM)</p></li>
<li><p><code>%T</code>: время в 24-ти часовом формате (hh:mm:ss)</p></li>
<li><p><code>%S</code>: секунды в формате 00..59</p></li>
<li><p><code>%p</code>: AM или PM</p></li>
</ul>
<p>Примеры применения:</p>
<table>
<tr class="tabhead"><td><p>Вызов</p></td><td><p>Результат</p></td></tr>
<tr><td><p>DATE_FORMAT('2018-05-25', '%d/%m/%y')</p></td><td><p>25/05/18</p></td></tr>
<tr><td><p>DATE_FORMAT('2018-05-25 21:25:54', '%d %M %Y')</p></td><td><p>25 May 2018</p></td></tr>
<tr><td><p>DATE_FORMAT('2018-05-25 21:25:54', '%r')</p></td><td><p>09:25:54 PM</p></td></tr>
<tr><td><p>TIME_FORMAT('2018-05-25 21:25:54', '%H:%i:%S')</p></td><td><p>21:25:24</p></td></tr>
<tr><td><p>TIME_FORMAT('21:25:54', '%k:%i')</p></td><td><p>21:25</p></td></tr>
</table>
<p>В качестве примера использования функций найдем заказы, которые были сделаны 5 дней назад:</p>
<pre class="brush:sql;">
SELECT * FROM Orders
WHERE DATEDIFF(CURDATE(), CreatedAt) = 5;
</pre>
<img src="pics/8.2.png" alt="Функции для работы с датами и временем в MySQL" />
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


<div class="nav"><p><a href="6.2.php">Назад</a><a href="./">Содержание</a><a href="6.4.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в MySQL</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/mysql/1.1.php">Что такое MySQL. Установка сервера</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/1.2.php">Консольный клиент MySQL Command Line Client</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/1.4.php">Консольный клиент MySQL Shell</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/1.3.php">Графический клиент MySQL Workbench</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Определение структуры данных</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/mysql/2.1.php">Создание и удаление базы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/2.2.php">Создание и удаление таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/2.3.php">Типы данных MySQL</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/2.4.php">Атрибуты столбцов и таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/2.5.php">Внешние ключи FOREIGN KEY</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/2.6.php">Изменение таблиц и столбцов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Основные операции с данными</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/mysql/3.1.php">Добавление данных. Команда INSERT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/3.2.php">Выборка данных. Команда SELECT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/3.3.php">Фильтрация данных. Оператор WHERE</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/3.4.php">Обновление данных. Команда UPDATE</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/3.5.php">Удаление данных. Команда DELETE</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Запросы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.1.php">Выборка уникальных значений. Оператор DISTINCT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.2.php">Операторы фильтрации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.3.php">Сортировка. ORDER BY</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.4.php">Получение диапазона строк. Оператор LIMIT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.5.php">Агрегатные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.6.php">Группировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.7.php">Подзапросы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.8.php">Подзапросы в основных командах SQL</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/4.9.php">Оператор EXISTS</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Соединение таблиц</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/mysql/5.1.php">Неявное соединение таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/5.2.php">Inner Join</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/5.3.php">Outer Join</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/5.4.php">UNION</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Встроенные функции</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/mysql/6.1.php">Функции для работы со строками</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/6.2.php">Функции для работы с числами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/6.3.php">Функции для работы с датами и временем</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/mysql/6.4.php">Функции CASE, IF, IFNULL, COALESCE</a></span></li>
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
	
	$("li:contains('Глава 6.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 6.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 6.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 6.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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
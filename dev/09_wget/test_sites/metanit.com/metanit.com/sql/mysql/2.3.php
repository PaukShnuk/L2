<!DOCTYPE html>
<html >
<head>
<title>MySQL | Типы данных</title>
<meta charset="utf-8" />
<meta name="description" content="Типы данных в MySQL, VARCHAR, CHAR, INT, DOUBLE, FLOAT, текстовые и бинарные типы, хранение целых дробных чисел">
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
<h2>Типы данных MySQL</h2><div class="date">Последнее обновление: 25.05.2018</div>

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

<p>При определении столбцов таблицы для них необходимо указать тип данных. Каждый столбец должен иметь тип данных. Тип данных определяет, какие значения 
могут храниться в столбце, сколько они будут занимать места в памяти.</p>
<p>MySQL предоставляет следующие типы данных, которые можно разбить на ряд групп.</p>
<h4>Символьные типы</h4>
<ul>
<li><p><span class="b">CHAR</span>: представляет строку фиксированной длины.</p>
<p>Длина хранимой строки указывается в скобках, например, <code>CHAR(10)</code> - строка 
из десяти символов. И если в таблицу в данный столбец сохраняется строка из 6 символов (то есть меньше установленной длины в 10 символов), то строка 
дополняется 4 пробелами и в итоге все равно будет занимать 10 символов</p>
<p>Тип CHAR может хранить до 255 байт.</p></li>
<li><p><span class="b">VARCHAR</span>: представляет строку переменной длины.</p>
<p>Длина хранимой строки также указыватся в скобках, например, <code>VARCHAR(10)</code>. 
Однако в отличие от CHAR хранимая строка будет занимать именно столько места, сколько необходимо. Например, если определенная длина в 10 символов, но в 
столбец сохраняется строка в 6 символов, то хранимая строка так и будет занимать 6 символов плюс дополнительный байт, который хранит длину строки.</p>
<p>Всего тип VARCHAR может хранить до 65535 байт.</p></li></li>
</ul>
<p>Начиная с MySQL 5.6 типы CHAR и VARCHAR по умолчанию используют кодировку UTF-8, которая позволяет использовать до 3 байт для хранения символа в зависимости от языка ( 
для многих европейских языков по 1 байту на символ, для ряда восточно-европейских и ближневосточных - 2 байта, а для китайского, японского, корейского - по 3 байта на символ).</p>
<p>Ряд дополнительных типов данных представляют текст неопределенной длины:</p>
<ul>
<li><p><span class="b">TINYTEXT</span>: представляет текст длиной до 255 байт.</p></li>
<li><p><span class="b">TEXT</span>: представляет текст длиной до 65 КБ.</p></li>
<li><p><span class="b">MEDIUMTEXT</span>: представляет текст длиной до 16 МБ</p></li>
<li><p><span class="b">LARGETEXT</span>: представляет текст длиной до 4 ГБ</p></li>
</ul>
<h4>Числовые типы</h4>
<ul>
<li><p><span class="b">TINYINT</span>: представляет целые числа от -128 до 127, занимает 1 байт</p></li>
<li><p><span class="b">BOOL</span>: фактически не представляет отдельный тип, а является лишь псевдонимом для типа <code>TINYINT(1)</code> и может хранить два значения 0 и 1. 
Однако данный тип может также в качестве значения принимать встроенные константы <span class="b">TRUE</span> (представляет число 1) и 
<span class="b">FALSE</span> (предоставляет число 0).</p>
<p>Также имеет псевдоним <span class="b">BOOLEAN</span>.</p></li>
<li><p><span class="b">TINYINT UNSIGNED</span>: представляет целые числа от 0 до 255, занимает 1 байт</p></li>
<li><p><span class="b">SMALLINT</span>: представляет целые числа от -32768 до 32767, занимает 2 байтa</p></li>
<li><p><span class="b">SMALLINT UNSIGNED</span>: представляет целые числа от 0 до 65535, занимает 2 байтa</p></li>
<li><p><span class="b">MEDIUMINT</span>: представляет целые числа от -8388608 до 8388607, занимает 3 байта</p></li>
<li><p><span class="b">MEDIUMINT UNSIGNED</span>: представляет целые числа от 0 до 16777215, занимает 3 байта</p></li>
<li><p><span class="b">INT</span>: представляет целые числа от -2147483648 до 2147483647, занимает 4 байта</p></li>
<li><p><span class="b">INT UNSIGNED</span>: представляет целые числа от 0 до 4294967295, занимает 4 байта</p></li>
<li><p><span class="b">BIGINT</span>: представляет целые числа от -9 223 372 036 854 775 808 до 9 223 372 036 854 775 807, занимает 8 байт</p></li>
<li><p><span class="b">BIGINT UNSIGNED</span>: представляет целые числа от 0 до 18 446 744 073 709 551 615, занимает 8 байт</p></li>
<li><p><span class="b">DECIMAL</span>: хранит числа с фиксированной точностью. Данный тип может принимать два параметра <code>precision</code> и 
<code>scale</code>: <code>DECIMAL(precision, scale)</code>.</p>
<p>Параметр <code>precision</code> представляет максимальное количество цифр, которые может хранить число. Это значение должно находиться в диапазоне от 1 до 65.</p>
<p>Параметр <code>scale</code> представляет максимальное количество цифр, которые может содержать число после запятой. Это значение должно находиться в диапазоне от 0 до значения параметра precision. По умолчанию оно равно 0.</p>
<p>Например, в определении следующего столбца:</p>
<pre class="brush:sql;">salary DECIMAL(5,2)</pre>
<p>Число 5 - <code>precision</code>, а число 2 - <code>scale</code>, поэтому данный столбец может хранить значения из диапазона от -999.99 до 999.99. </p>
<p>Размер данных в байтах для DECIMAL зависит от хранимого значения.</p>
<p>Данный тип также имеет псевдонимы <span class="b">NUMERIC</span>, <span class="b">DEC</span>, <span class="b">FIXED</span>.</p></li>
<li><p><span class="b">FLOAT</span>: хранит дробные числа с плавающей точкой одинарной точности от -3.4028 * 10<sup>38</sup> до 3.4028 * 10<sup>38</sup>, занимает 4 байта</p>
<p>Может принимать форму <code>FLOAT(M,D)</code>, где <code>M</code> - общее количество цифр, а <code>D</code> - 
количество цифр после запятой</p>.</li>
<li><p><span class="b">DOUBLE</span>: хранит дробные числа с плавающей точкой двойной точности от -1.7976 * 10<sup>308</sup> до 1.7976 * 10<sup>308</sup>, занимает 8 байт. Также может принимать форму 
<code>DOUBLE(M,D)</code>, где <code>M</code> - общее количество цифр, а <code>D</code> - количество цифр после запятой.</p>
<p>Данный тип также имеет псевдонимы <span class="b">REAL</span> и <span class="b">DOUBLE PRECISION</span>, которые можно использовать вместо DOUBLE.</p></li>
</ul>
<h4>Типы для работы с датой и временем</h4>
<ul>
<li><p><span class="b">DATE</span>: хранит даты с 1 января 1000 года до 31 деабря 9999 года (c "1000-01-01" до "9999-12-31"). По умолчанию для хранения используется формат yyyy-mm-dd. Занимает 3 байта.</p></li>
<li><p><span class="b">TIME</span>: хранит время от -838:59:59 до 838:59:59. По умолчанию для хранения времени применяется формат "hh:mm:ss". Занимает 3 байта.</p></li>
<li><p><span class="b">DATETIME</span>: объединяет время и дату, диапазон дат и времени - с 1 января 1000 года по 31 декабря 9999 года (с "1000-01-01 00:00:00" до "9999-12-31 23:59:59"). 
Для хранения по умолчанию используется формат "yyyy-mm-dd hh:mm:ss". Занимает 8 байт</p></li>
<li><p><span class="b">TIMESTAMP</span>: также хранит дату и время, но в другом диапазоне: от "1970-01-01 00:00:01" UTC до "2038-01-19 03:14:07" UTC. Занимает 4 байта</p></li>
<li><p><span class="b">YEAR</span>: хранит год в виде 4 цифр. Диапазон доступных значений от 1901 до 2155. Занимает 1 байт.</p></li>
</ul>
<p>Тип Date может принимать даты в различных форматах, однако непосредственно для хранения в самой бд даты приводятся к формату "yyyy-mm-dd". 
Некоторые из принимаемых форматов:</p>
<ul>
<li><p><code>yyyy-mm-dd</code> - <code>2018-05-25</code></p></li>
<li><p><code>yyyy-m-dd</code> - <code>2018-5-25</code></p></li>
<li><p><code>yy-m-dd</code> - <code>18-05-25</code></p>
<p>В таком формате двузначные числа от 00 до 69 воспринимаются как даты в диапазоне 2000-2069. А числа от 70 до 99 как диапазон чисел 1970 - 1999.</p></li>
<li><p><code>yyyymmdd</code> - <code>20180525</code></p></li>
<li><p><code>yyyy.mm.dd</code> - <code>2018.05.25</code></p></li>
</ul>

<p>Для времени тип Time использует 24-часовой формат. Он может принимать время в различных форматах:</p>
<ul>
<li><p><code>hh:mi</code> - <code>3:21</code> (хранимое значение <code>03:21:00</code>)</p></li>
<li><p><code>hh:mi:ss</code> - <code>19:21:34</code></p></li>
<li><p><code>hhmiss</code> - <code>192134</code></p></li>
</ul>
<p>Примеры значений для типов DATETIME и TIMESTAMP:</p>
<ul>
<li><code>2018-05-25 19:21:34</code></p></li>
<li><code>2018-05-25</code> (хранимое значение <code>2018-05-25 00:00:00</code>)</p></li>
</ul>
<h4>Составные типы</h4>
<ul>
<li><p><span class="b">ENUM</span>: хранит одно значение из списка допустимых значений. Занимает 1-2 байта</p></li>
<li><p><span class="b">SET</span>: может хранить несколько значений (до 64 значений) из некоторого списка допустимых значений. Занимает 1-8 байт.</p></li>
</ul>
<h4>Бинарные типы</h4>
<ul>
<li><p><span class="b">TINYBLOB</span>: хранит бинарные данные в виде строки длиной до 255 байт.</p></li>
<li><p><span class="b">BLOB</span>: хранит бинарные данные в виде строки длиной до 65 КБ.</p></li>
<li><p><span class="b">MEDIUMBLOB</span>: хранит бинарные данные в виде строки  длиной до 16 МБ</p></li>
<li><p><span class="b">LARGEBLOB</span>: хранит бинарные данные в виде строки  длиной до 4 ГБ</p></li>
</ul>
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


<div class="nav"><p><a href="2.2.php">Назад</a><a href="./">Содержание</a><a href="2.4.php">Вперед</a></p></div></div>
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
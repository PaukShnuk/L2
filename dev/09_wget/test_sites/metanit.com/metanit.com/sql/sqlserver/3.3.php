<!DOCTYPE html>
<html >
<head>
<title>MS SQL Server и T-SQL | Типы данных SQL</title>
<meta charset="utf-8" />
<meta name="description" content="Типы данных T-SQL в MS SQL Server 2016, какие значения они могут хранить и сколько занимают места в памяти, примеры использования">
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
<h2>Типы данных T-SQL</h2><div class="date">Последнее обновление: 12.07.2017</div>

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

<p>При создании таблицы для всех ее столбцов необходимо указать определенный тип данных. Тип данных определяет, какие значения могут храниться в столбце, 
сколько они будут занимать места в памяти.</p>
<p>Язык T-SQL предоставляет множество различных типов. В зависимости от характера значений все их можно разделить на группы.</p>
<h4>Числовые типы данных</h4>
<ul>
<li><p><span class="b">BIT</span>: хранит значение от 0  до 16. Может выступать аналогом булевого типа в языках программирования (в этом случае значению true соответствует 1, а 
значению false - 0). При значениях до 8 (включительно) занимает 1 байт, при значениях от 9 до 16 - 2 байта.</p></li>
<li><p><span class="b">TINYINT</span>: хранит числа от 0 до 255. Занимает 1 байт. Хорошо подходит для хранения небольших чисел.</p></li>
<li><p><span class="b">SMALLINT</span>: хранит числа от –32 768 до 32 767. Занимает 2 байта</p></li>
<li><p><span class="b">INT</span>: хранит числа от –2 147 483 648 до 2 147 483 647. Занимает 4 байта. Наиболее используемый тип для хранения чисел.</p></li>
<li><p><span class="b">BIGINT</span>: хранит очень большие числа от -9 223 372 036 854 775 808 до 9 223 372 036 854 775 807, которые 
занимают в памяти 8 байт.</p></li>
<li><p><span class="b">DECIMAL</span>: хранит числа c фиксированной точностью. 
Занимает от 5 до 17 байт в зависимости от количества чисел после запятой.</p>
<p>Данный тип может принимать два параметра precision и scale: <code>DECIMAL(precision, scale)</code>.</p>
<p>Параметр precision представляет максимальное количество цифр, которые может хранить число. 
Это значение должно находиться в диапазоне от 1 до 38. По умолчанию оно равно 18.</p>
<p>Параметр scale представляет максимальное количество цифр, которые может содержать число после запятой. 
Это значение должно находиться в диапазоне от 0 до значения параметра precision. По умолчанию оно равно 0.</p>
</li>
<li><p><span class="b">NUMERIC</span>: данный тип аналогичен типу DECIMAL.</p></li>
<li><p><span class="b">SMALLMONEY</span>: хранит дробные значения от -214 748.3648 до 214 748.3647. Предназначено для хранения денежных величин. 
Занимает 4 байта. Эквивалентен типу <code>DECIMAL(10,4)</code>.</p></li>
<li><p><span class="b">MONEY</span>: хранит дробные значения от -922 337 203 685 477.5808 до 922 337 203 685 477.5807. Представляет денежные величины 
и занимает 8 байт. Эквивалентен типу <code>DECIMAL(19,4)</code>.</p></li>
<li><p><span class="b">FLOAT</span>: хранит числа от –1.79E+308 до 1.79E+308. 
Занимает от 4 до 8 байт в зависимости от дробной части.</p>
<p>Может иметь форму опредеения в виде <code>FLOAT(n)</code>, где n представляет число бит, которые используются для хранения десятичной части числа (мантиссы). 
По умолчанию n = 53.</p></li>
<li><p><span class="b">REAL</span>: хранит числа от –340E+38 to 3.40E+38. Занимает 4 байта. Эквивалентен типу <code>FLOAT(24)</code>.</p></li>
</ul>
</p>Примеры числовых столбцов:</p>
<pre class="brush:sql;">
Salary MONEY,
TotalWeight DECIMAL(9,2),
Age INT,
Surplus FLOAT
</pre>
<h4>Типы данных, представляющие дату и время</h4>
<ul>
<li><p><span class="b">DATE</span>: хранит даты от 0001-01-01 (1 января 0001 года) до 9999-12-31 (31 декабря 9999 года). Занимает 3 байта.</p></li>
<li><p><span class="b">TIME</span>: хранит время в диапазоне от 00:00:00.0000000 до 23:59:59.9999999. Занимает от 3 до 5 байт.</p>
<p>Может иметь форму <code>TIME(n)</code>, где n представляет количество цифр от 0 до 7 в дробной части секунд.</p></li>
<li><p><span class="b">DATETIME</span>: хранит даты и время от 01/01/1753 до 31/12/9999. Занимает 8 байт.</p></li>
<li><p><span class="b">DATETIME2</span>: хранит даты и время в диапазоне от 01/01/0001 00:00:00.0000000 до 31/12/9999 23:59:59.9999999. Занимает от 6 до 8 байт в 
зависимости от точности времени.</p>
<p>Может иметь форму <code>DATETIME2(n)</code>, где n представляет количество цифр от 0 до 7 в дробной части секунд.</p></li>
<li><p><span class="b">SMALLDATETIME</span>: хранит даты и время в диапазоне от 01/01/1900 до 06/06/2079, то есть ближайшие даты. 
Занимает от 4 байта.</p></li>
<li><p><span class="b">DATETIMEOFFSET</span>: хранит даты и время в диапазоне от 0001-01-01 до 9999-12-31. Сохраняет детальную 
информацию о времени с точностью до 100 наносекунд. Занимает 10 байт.</p></li>
</ul>
<p>Распространенные форматы дат:</p>
<ul>
<li><p><code>yyyy-mm-dd</code> - <code>2017-07-12</code></p></li>
<li><p><code>dd/mm/yyyy</code> - <code>12/07/2017</code></p></li>
<li><p><code>mm-dd-yy</code> - <code>07-12-17</code></p>
<p>В таком формате двузначные числа от 00 до 49 воспринимаются как даты в диапазоне 2000-2049. А числа от 50 до 99 как диапазон чисел 1950 - 1999.</p></li>
<li><p><code>Month dd, yyyy</code> - <code>July 12, 2017</code></p></li>
</ul>
<p>Распространенные форматы времени:</p>
<ul>
<li><p><code>hh:mi</code> - <code>13:21</code></p></li>
<li><p><code>hh:mi am/pm</code> - <code>1:21 pm</code></p></li>
<li><p><code>hh:mi:ss</code> - <code>1:21:34</code></p></li>
<li><p><code>hh:mi:ss:mmm</code> - <code>1:21:34:12</code></p></li>
<li><p><code>hh:mi:ss:nnnnnnn</code> - <code>1:21:34:1234567</code></p></li>
</ul>
<h4>Строковые типы данных</h4>
<ul>
<li><p><span class="b">CHAR</span>: хранит строку длиной от 1 до 8 000 символов. На каждый символ выделяет по 1 байту. 
Не подходит для многих языков, так как хранит символы не в кодировке Unicode.</p>
<p>Количество символов, которое может хранить столбец, передается в скобках. Например, для столбца с типом <code>CHAR(10)</code> будет выделено 10 байт. И если мы сохраним в столбце строку менее 10 символов, то она будет дополнена пробелами.</p></li>
<li><p><span class="b">VARCHAR</span>: хранит строку. На каждый символ выделяется 1 байт. Можно указать конкретную длину для столбца - 
от 1 до 8 000 символов, например, <code>VARCHAR(10)</code>. 
Если строка должна иметь больше 8000 символов, то задается размер MAX, а на хранение строки может выделяться до 
2 Гб: <code>VARCHAR(MAX)</code>.</p>
<p>Не подходит для многих языков, так как хранит символы не в кодировке Unicode.</p>
<p>В отличие от типа CHAR если в столбец с типом <code>VARCHAR(10)</code> будет сохранена строка в 5 символов, то в столце будет сохранено именно пять символов.</p></li>
<li><p><span class="b">NCHAR</span>: хранит строку в кодировке Unicode длиной от 1 до 4 000 символов. На каждый символ выделяется 2 байта. Например, <code>NCHAR(15)</code></p></li>
<li><p><span class="b">NVARCHAR</span>: хранит строку в кодировке Unicode. На каждый символ выделяется 2 байта.Можно задать конкретный размер от 1 до 4 000 символов: <code></code>.  
Если строка должна иметь больше 4000 символов, то задается размер MAX, а на хранение строки может выделяться до 
2 Гб.</p></li>
</ul>
<p>Еще два типа <span class="b">TEXT</span> и <span class="b">NTEXT</span> являются устаревшими и поэтому их не рекомендуется использовать. Вместо 
них применяются VARCHAR и NVARCHAR соответственно.</p>
<p>Примеры определения строковых столбцов:</p>
<pre class="brush:sql;">
Email VARCHAR(30),
Comment NVARCHAR(MAX)
</pre>
<h4>Бинарные типы данных</h4>
<ul>
<li><p><span class="b">BINARY</span>: хранит бинарные данные в виде последовательности от 1 до 8 000 байт.</p></li>
<li><p><span class="b">VARBINARY</span>: хранит бинарные данные в виде последовательности от 1 до 8 000 байт, либо до 2^31–1 байт при использовании 
значения MAX (VARBINARY(MAX)).</p></li>
</ul>
<p>Еще один бинарный тип - тип IMAGE является устаревшим, и вместо него рекомендуется применять тип VARBINARY.</p>
<h4>Остальные типы данных</h4>
<ul>
<li><p><span class="b">UNIQUEIDENTIFIER</span>: уникальный идентификатор GUID (по сути строка с уникальным значением), который занимает 16 байт.</p></li>
<li><p><span class="b">TIMESTAMP</span>: некоторое число, которое хранит номер версии строки в таблице. 
Занимает 8 байт.</p></li>
<li><p><span class="b">CURSOR</span>: представляет набор строк.</p></li>
<li><p><span class="b">HIERARCHYID</span>: представляет позицию в иерархии.</p></li>
<li><p><span class="b">SQL_VARIANT</span>: может хранить данные любого другого типа данных T-SQL.</p></li>
<li><p><span class="b">XML</span>: хранит документы XML или фрагменты документов XML. Занимает в памяти до 2 Гб.</p></li>
<li><p><span class="b">TABLE</span>: представляет определение таблицы.</p>
</li>
<li><p><span class="b">GEOGRAPHY</span>: хранит географические данные, такие как широта и долгота.</p></li>
<li><p><span class="b">GEOMETRY</span>: хранит координаты местонахождения на плоскости.</p></li>
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


<div class="nav"><p><a href="3.2.php">Назад</a><a href="./">Содержание</a><a href="3.4.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в MS SQL Server и T-SQL</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/1.1.php">Что такое SQL Server и T-SQL</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/1.2.php">Установка MS SQL Server 2019</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/1.3.php">Установка SQL Server Management Studio</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/1.4.php">Установка LocalDB</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Начало работы с MS SQL Server</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/2.1.php">Создание базы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/2.2.php">Создание таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/2.3.php">Первый запрос на T-SQL</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Основы T-SQL. DDL</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/3.1.php">Создание и удаление базы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/3.2.php">Создание и удаление таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/3.3.php">Типы данных T-SQL</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/3.4.php">Атрибуты  и ограничения столбцов и таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/3.5.php">Внешние ключи</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/3.6.php">Изменение таблицы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/3.7.php">Пакеты. Команда GO</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Основы T-SQL. DML</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/4.1.php">Добавление данных. Команда INSERT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/4.2.php">Выборка данных. Команда SELECT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/4.3.php">Сортировка. ORDER BY</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/4.4.php">Извлечение диапазона строк</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/4.5.php">Фильтрация. WHERE</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/4.6.php">Операторы фильтрации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/4.7.php">Обновление данных. Команда UPDATE</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/4.8.php">Удаление данных. Команда DELETE</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Группировка</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/5.1.php">Агрегатные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/5.2.php">Операторы GROUP BY и HAVING</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/5.3.php">Расширения SQL Server для группировки</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Подзапросы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/6.1.php">Выполнение подзапросов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/6.2.php">Подзапросы в основных командах SQL</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/6.3.php">Оператор EXISTS</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Соединение таблиц</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/7.1.php">Неявное соединение таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/7.2.php">Inner Join</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/7.3.php">Outer Join</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/7.4.php">Группировка в соединениях</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/7.5.php">UNION</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/7.6.php">EXCEPT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/7.7.php">INTERSECT</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Встроенные функции</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/8.1.php">Функции для работы со строками</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/8.2.php">Функции для работы с числами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/8.3.php">Функции по работе с датами и временем</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/8.4.php">Преобразование данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/8.5.php">Функции CASE и IIF</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/8.6.php">Функции NEWID, ISNULL и COALESCE</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Переменные и управляющие конструкции</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/9.1.php">Переменные в T-SQL</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/9.2.php">Переменные в запросах</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/9.3.php">Условные выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/9.4.php">Циклы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/9.5.php">Обработка ошибок</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Представления и табличные объекты</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/10.1.php">Представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/10.2.php">Обновляемое представление</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/10.3.php">Табличные переменные</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/10.4.php">Временные таблицы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 11. Хранимые процедуры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/11.1.php">Создание и выполнение процедур</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/11.2.php">Параметры в процедурах</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/11.3.php">Выходные параметры и возвращение результата</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 12. Триггеры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/12.1.php">Определение триггеров</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/12.2.php">Триггеры для операций INSERT, UPDATE, DELETE</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/sqlserver/12.3.php">Триггер INSTEAD OF</a></span></li>
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
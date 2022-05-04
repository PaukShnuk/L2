<!DOCTYPE html>
<html >
<head>
<title>MS SQL Server и T-SQL | Inner Join</title>
<meta charset="utf-8" />
<meta name="description" content="Соединение таблиц с помощью Inner Join в T-SQL в MS SQL Server 2016, соединение трех и более таблиц, проблемы производительности">
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
<h2>INNER JOIN</h2><div class="date">Последнее обновление: 20.07.2017</div>

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

<p>В прошлой теме было рассмотрено неявное соединение таблиц. Оно производилось на основе простой выборки неявно путем сведения данных. 
Для явного соединения данных из двух таблиц применяется оператор <span class="b">JOIN</span>. Общий формальный синтаксис применения оператора INNER JOIN:</p>
<pre class="brush:sql;">
SELECT столбцы
FROM таблица1
	[INNER] JOIN таблица2
	ON условие1
	[[INNER] JOIN таблица3
	ON условие2]
</pre>
<p>После оператора <span class="b">JOIN</span> идет название второй таблицы, из которой надо добавить данные в выборку. Перед JOIN может использоваться 
необязательное ключевое слово <span class="b">INNER</span>. Его наличие или отсутствие ни на что не влияет. Затем 
после ключевого слова <span class="b">ON</span> указывается условие соединения. Это условие устанавливает, как две таблицы будут сравниваться. 
В большинстве случаев для соединения применяется первичный ключ главной таблицы и внешний ключ зависимой таблицы.</p>
<p>Возьмем таблицы с данными из прошлой темы:</p>
<pre class="brush:sql;">
USE productsdb;

CREATE TABLE Products
(
    Id INT IDENTITY PRIMARY KEY,
    ProductName NVARCHAR(30) NOT NULL,
    Manufacturer NVARCHAR(20) NOT NULL,
    ProductCount INT DEFAULT 0,
    Price MONEY NOT NULL
);
CREATE TABLE Customers
(
    Id INT IDENTITY PRIMARY KEY,
    FirstName NVARCHAR(30) NOT NULL
);
CREATE TABLE Orders
(
	Id INT IDENTITY PRIMARY KEY,
    ProductId INT NOT NULL REFERENCES Products(Id) ON DELETE CASCADE,
    CustomerId INT NOT NULL REFERENCES Customers(Id) ON DELETE CASCADE,
    CreatedAt DATE NOT NULL,
    ProductCount INT DEFAULT 1,
    Price MONEY NOT NULL
);
</pre>
<p>Используя JOIN, выберем все заказы и добавим к ним информацию о товарах:</p>
<pre class="brush:sql;">
SELECT Orders.CreatedAt, Orders.ProductCount, Products.ProductName 
FROM Orders
JOIN Products ON Products.Id = Orders.ProductId
</pre>
<p>Поскольку таблицы могут содержать столбцы с одинаковыми названиями, то при указании столбцов для выборки указывается их полное имя вместе с именем таблицы, например, 
"Orders.ProductCount".</p>
<img src="pics/62.png" alt="JOIN ON в T-SQL и MS SQL Server" />
<p>Также используя псевдонимы, мы можем сократить код:</p>
<pre class="brush:sql;">
SELECT O.CreatedAt, O.ProductCount, P.ProductName 
FROM Orders AS O
JOIN Products AS P
ON P.Id = O.ProductId
</pre>
<p>Подобным образом мы можем присоединять и другие таблицы. Например, добавим к заказу информацию о покупателе из таблицы Customers:</p>
<pre class="brush:sql;">
SELECT Orders.CreatedAt, Customers.FirstName, Products.ProductName 
FROM Orders
JOIN Products ON Products.Id = Orders.ProductId
JOIN Customers ON Customers.Id=Orders.CustomerId
</pre>
<img src="pics/63.png" alt="Соединение таблиц в T-SQL и MS SQL Server" />
<p>Благодаря соединению таблиц мы можем использовать их столбцы для фильтрации выборки или ее сортировки:</p>
<pre class="brush:sql;">
SELECT Orders.CreatedAt, Customers.FirstName, Products.ProductName 
FROM Orders
JOIN Products ON Products.Id = Orders.ProductId
JOIN Customers ON Customers.Id=Orders.CustomerId
WHERE Products.Price &lt; 45000
ORDER BY Customers.FirstName
</pre>
<p>Условия после ключевого слова ON могут быть более сложными по составу:</p>
<pre class="brush:sql;">
SELECT Orders.CreatedAt, Customers.FirstName, Products.ProductName 
FROM Orders
JOIN Products ON Products.Id = Orders.ProductId AND Products.Manufacturer='Apple'
JOIN Customers ON Customers.Id=Orders.CustomerId
ORDER BY Customers.FirstName
</pre>
<p>В данном случае выбираем все заказы на товары, производителем которых является Apple.</p>
<p>При использовании оператора JOIN следует учитывать, что процесс соединения таблиц может быть ресурсоемким, поэтому следует соединять только те таблицы, 
данные из которых действительно необходимы. Чем больше таблиц соединяется, тем больше снижается производительность.</p>
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


<div class="nav"><p><a href="7.1.php">Назад</a><a href="./">Содержание</a><a href="7.3.php">Вперед</a></p></div></div>
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
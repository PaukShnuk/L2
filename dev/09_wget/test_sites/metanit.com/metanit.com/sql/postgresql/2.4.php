<!DOCTYPE html>
<html >
<head>
<title>PostgreSQL | Ограничения столбцов и таблиц</title>
<meta charset="utf-8" />
<meta name="description" content="Ограничения столбцов и таблиц в PostgreSQL, атрибуты DEFAULT, CHECK, NULL, UNIQUE, PRIMARY KEY, оператор CONSTRAINT">
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
<h2>Ограничения столбцов и таблиц</h2><div class="date">Последнее обновление: 23.10.2020</div>

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

<p>При определении таблиц и их столбцов в SQL мы можем использовать ряд атрибутов, которые накладывают определенные ограничения. 
Рассмотрим эти атрибуты.</p>
<h3>PRIMARY KEY</h3>
<p>С помощью выражения <span class="b">PRIMARY KEY</span> столбец можно сделать первичным ключом.</p>
<pre class="brush:sql;">
CREATE TABLE Customers
(
    Id SERIAL PRIMARY KEY,
    FirstName CHARACTER VARYING(30),
    LastName CHARACTER VARYING(30),
    Email CHARACTER VARYING(30),
    Age INTEGER
)
</pre>
<p>Первичный ключ уникально идентифицирует строку в таблице. В качестве первичного ключа необязательно должны выступать столбцы с типом <code>SERIAL</code>, они могут представлять 
любой другой тип.</p>
<p>Установка первичного ключа на уровне таблицы:</p>
<pre class="brush:sql;">
CREATE TABLE Customers
(
    Id SERIAL,
    FirstName CHARACTER VARYING(30),
    LastName CHARACTER VARYING(30),
    Email CHARACTER VARYING(30),
    Age INTEGER,
    PRIMARY KEY(Id)
);
</pre>
<p>Первичный ключ может быть составным (compound key). Такой ключ может потребоваться, если у нас сразу два столбца должны уникально идентифицировать 
строку в таблице. Например:</p>
<pre class="brush:sql;">
CREATE TABLE OrderLines
(
	OrderId INTEGER,
	ProductId INTEGER,
	Quantity INTEGER,
	Price MONEY,
	PRIMARY KEY(OrderId, ProductId)
);
</pre>
<p>Здесь поля OrderId и ProductId вместе выступают как составной первичный ключ. То есть в таблице OrderLines не может быть двух строк, где для обоих из этих полей одновременно 
были бы одни и те же значения.</p>
<h3>UNIQUE</h3>
<p>Если мы хотим, чтобы столбец имел только уникальные значения, то для него можно определить атрибут <span class="b">UNIQUE</span>.</p>
<pre class="brush:sql;">
CREATE TABLE Customers
(
    Id SERIAL PRIMARY KEY,
    FirstName CHARACTER VARYING(20),
    LastName CHARACTER VARYING(20),
    Email CHARACTER VARYING(30) UNIQUE,
    Phone CHARACTER VARYING(30) UNIQUE,
    Age INTEGER
);
</pre>
<p>В данном случае столбцы, которые представляют электронный адрес и телефон, будут иметь уникальные значения. И мы не сможем добавить в таблицу две строки, у которых 
значения для этих столбцов будет совпадать.</p>
<p>Также мы можем определить этот атрибут на уровне таблицы:</p>
<pre class="brush:sql;">
CREATE TABLE Customers
(
    Id SERIAL PRIMARY KEY,
    FirstName CHARACTER VARYING(20),
    LastName CHARACTER VARYING(20),
    Email CHARACTER VARYING(30),
    Phone CHARACTER VARYING(30),
    Age INTEGER,
	UNIQUE(Email, Phone)
);
</pre>
<p>Или так:</p>
<pre class="brush:sql;">
CREATE TABLE Customers
(
    Id SERIAL PRIMARY KEY,
    FirstName CHARACTER VARYING(20),
    LastName CHARACTER VARYING(20),
    Email CHARACTER VARYING(30),
    Phone CHARACTER VARYING(30),
    Age INTEGER,
	UNIQUE(Email), 
	UNIQUE(Phone)
);
</pre>
<h3>NULL и NOT NULL</h3>
<p>Чтобы указать, может ли столбец принимать значение NULL, при определении столбца ему можно задать атрибут <span class="b">NULL</span> или 
<span class="b">NOT NULL</span>. Если этот атрибут явным образом не будет использован, то по умолчанию столбец будет допускать значение NULL. 
Исключением является тот случай, когда столбец выступает в роли первичного ключа - в этом случае по умолчанию столбец имеет значение NOT NULL.</p>
<pre class="brush:sql;">
CREATE TABLE Customers
(
    Id SERIAL PRIMARY KEY,
    FirstName CHARACTER VARYING(20) NOT NULL,
    LastName CHARACTER VARYING(20) NOT NULL,
    Age INTEGER
);
</pre>
<h3>DEFAULT</h3>
<p>Атрибут <span class="b">DEFAULT</span> определяет значение по умолчанию для столбца. Если при добавлении данных для столбца не будет предусмотрено значение, то для него будет 
использоваться значение по умолчанию.</p>
<pre class="brush:sql;">
CREATE TABLE Customers
(
    Id SERIAL PRIMARY KEY,
    FirstName CHARACTER VARYING(20),
    LastName CHARACTER VARYING(20),
    Age INTEGER DEFAULT 18
);
</pre>
<p>Здесь для столбца Age предусмотрено значение по умолчанию 18.</p>
<h3>CHECK</h3>
<p>Ключевое слово <span class="b">CHECK</span> задает ограничение для диапазона значений, которые могут храниться в столбце. Для этого после слова CHECK 
указывается в скобках условие, которому должен соответствовать столбец или несколько столбцов. Например, возраст клиентов не может быть меньше 0 или больше 100:</p>
<pre class="brush:sql;">
CREATE TABLE Customers
(
    Id SERIAL PRIMARY KEY,
    FirstName CHARACTER VARYING(20),
    LastName CHARACTER VARYING(20),
    Age INTEGER DEFAULT 18 CHECK(Age &gt;0 AND Age &lt; 100),
	Email CHARACTER VARYING(30) UNIQUE CHECK(Email !=''),
    Phone CHARACTER VARYING(20) UNIQUE CHECK(Phone !='')
);
</pre>
<p>Здесь также указывается, что столбцы Email и Phone не могут иметь пустую строку в качестве значения (пустая строка <span class="b">не</span> эквивалентна значению NULL).</p>
<p>Для соединения условий используется ключевое слово <span class="b">AND</span>. Условия можно задать в виде операций сравнения больше (&gt;), меньше (&lt;), не равно (!=).</p>
<p>Также с помощью CHECK можно создать ограничение в целом для таблицы:</p>
<pre class="brush:sql;">
CREATE TABLE Customers
(
	Id SERIAL PRIMARY KEY,
	Age INTEGER DEFAULT 18,
	FirstName CHARACTER VARYING(20),
	LastName CHARACTER VARYING(20),
	Email CHARACTER VARYING(30) UNIQUE,
	Phone CHARACTER VARYING(20) UNIQUE,
	CHECK((Age &gt;0 AND Age&lt;100) AND (Email !='') AND (Phone !=''))
);
</pre>
<h3>Оператор CONSTRAINT. Установка имени ограничений.</h3>
<p>С помощью ключевого слова <span class="b">CONSTRAINT</span> можно задать имя для ограничений. В качестве ограничений могут использоваться 
PRIMARY KEY, UNIQUE, CHECK.</p>
<p>Имена ограничений можно задать на уровне столбцов. Они указываются после CONSTRAINT перед атрибутами:</p>
<pre class="brush:sql;">
CREATE TABLE Customers
(
    Id SERIAL CONSTRAINT customer_Id PRIMARY KEY,
    Age INTEGER CONSTRAINT customers_age_check CHECK(Age &gt;0 AND Age &lt; 100),
    FirstName CHARACTER VARYING(20) NOT NULL,
    LastName CHARACTER VARYING(20) NOT NULL,
    Email CHARACTER VARYING(30) CONSTRAINT customers_email_key UNIQUE,
    Phone CHARACTER VARYING(20) CONSTRAINT customers_phone_key UNIQUE
);
</pre>

<p>В принципе необязательно задавать имена ограничений, при установке соответствующих атрибутов SQL Server автоматически определяет их имена. 
Но, зная имя ограничения, мы можем к нему обращаться, например, для его удаления.</p>
<p>И также можно задать все имена ограничений через атрибуты таблицы:</p>
<pre class="brush:sql;">
CREATE TABLE Customers
(
    Id SERIAL,
    Age INTEGER,
    FirstName CHARACTER VARYING(20) NOT NULL,
    LastName CHARACTER VARYING(20) NOT NULL,
    Email CHARACTER VARYING(30),
    Phone CHARACTER VARYING(20),
	CONSTRAINT customer_Id PRIMARY KEY(Id),
	CONSTRAINT customers_age_check CHECK(Age >0 AND Age < 100),
	CONSTRAINT customers_email_key UNIQUE(Email),
	CONSTRAINT customers_phone_key UNIQUE(Phone)
);
</pre>
<p>Вне зависимости от того, используется оператор CONSTRAINT для создания ограничений или нет (в этом случае при установке ограничений PostgreSQL сам дает им имена), 
мы можем просмотреть все ограничения в pgAdmin в узле базы данных в подузле <span class="b"></span>:</p>
<img src="pics/2.7.png" alt="Ограничения в PostgreSQL" />
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


<div class="nav"><p><a href="2.3.php">Назад</a><a href="./">Содержание</a><a href="2.5.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в PostgreSQL</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/1.1.php">Что такое PostgreSQL. Установка сервера</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/1.2.php">Графический клиент pgAdmin</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/1.3.php">Запросы SQL в pgAdmin</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/1.4.php">Консольный клиент psql</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Определение структуры данных</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/2.1.php">Создание и удаление базы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/2.2.php">Создание и удаление таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/2.3.php">Типы данных в PostgreSQL</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/2.4.php">Ограничения столбцов и таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/2.5.php">Внешние ключи</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/2.6.php">Изменение таблиц</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Операции с данными</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/3.1.php">Добавление данных. Команда Insert</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/3.2.php">Получение данных. Команда Select</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/3.3.php">Фильтрация. WHERE</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/3.4.php">Обновление данных. Команда UPDATE</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/3.5.php">Удаление данных. Команда DELETE</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Запросы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/4.1.php">DICTINCT. Выборка уникальных значений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/4.2.php">ORDER BY. Сортировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/4.3.php">Получение диапазона строк. LIMIT и OFFSET</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/4.4.php">Операторы фильтрации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/4.5.php">Агрегатные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/4.6.php">Группировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/4.7.php">Подзапросы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Составные типы данных</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/5.1.php">Массивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/5.2.php">Перечисления enum</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Соединение таблиц</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/6.1.php">Неявное соединение таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/6.2.php">INNER JOIN</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/6.3.php">OUTER JOIN и CROSS JOIN</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/6.4.php">Группировка в соединениях</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/6.5.php">Объединение множеств. UNION</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/6.6.php">Разность множеств. EXCEPT</a></span></li>
			<li><span class="file"><a href="//metanit.com/sql/postgresql/6.7.php">Пересечение множеств. INTERSECT</a></span></li>
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
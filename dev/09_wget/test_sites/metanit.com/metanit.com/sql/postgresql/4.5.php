<!DOCTYPE html>
<html >
<head>
<title>PostgreSQL | Агрегатные функции</title>
<meta charset="utf-8" />
<meta name="description" content="Агрегатные функции в PostgreSQL, COUNT, SUM, MIN, MAX, AVG, BOOL_AND, BOOL_OR, STRING_AGG, вычисление числа строк">
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
<h2>Агрегатные функции</h2><div class="date">Последнее обновление: 23.03.2018</div>

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

<p>Агрегатные функции вычисляют одно значение над некоторым набором строк. В PostgreSQL имеются следующие агрегатные функции:</p>
<ul>
<li><p><span class="b">AVG</span>: находит среднее значение. Входной параметр должен представлять один из следующих типов: <code>smallint, int, bigint, real, double 
precision, numeric, interval</code>. Для целочисленнных параметров результатом будет значение типа <code>numeric</code>, для параметров, которые представляют число с плавающей точкой, - 
значение типа <code>double precision</code>.</p></li>
<li><p><span class="b">BIT_AND</span>: выполняет операцию побитового умножения (операции логического И) для чисел следующих типов: 
<code>smallint, int, bigint, bit</code>. Если параметр содержит значение NULL, то возвращается NULL.</p></li>
<li><p><span class="b">BIT_OR</span>: выполняет операцию побитового сложения (операции логического ИЛИ) для чисел следующих типов: 
<code>smallint, int, bigint, bit</code>. Если параметр содержит значение NULL, то возвращается NULL.</p></li>
<li><p><span class="b">BOOL_AND</span>: выполняет операцию логического умножения для значений типа 
<code>bool</code>. Если входные все значения равны true, то возвращается true, иначе возвращается false.</p></li>
<li><p><span class="b">BOOL_OR</span>: выполняет операцию логического сложения для значений типа 
<code>bool</code>. Если входные хотя бы одно из значений равно true, то возвращается true, иначе возвращается false.</p></li>
<li><p><span class="b">COUNT(*)</span>: находит количество строк в запросе</p></li>
<li><p><span class="b">COUNT(expression)</span>: находит количество строк в запросе, для которых expression не содержит значение NULL.</p></li>
<li><p><span class="b">SUM</span>: находит сумму значений</p></li>
<li><p><span class="b">MIN</span>: находит наименьшее значение</p></li>
<li><p><span class="b">MAX</span>: находит наибольшее значение</p></li>
<li><p><span class="b">STRING_AGG(expression, delimiter)</span>: соединяет с помощью delimiter все текстовые значения из expression в одну строку.</p></li>
</ul>
<p>В качестве параметра все агрегатные функции принимают выражение, которое представляет критерий для определения значений. Зачастую, в качестве 
выражения выступает название столбца, над значениями которого надо проводить вычисления.</p>
<p>Если в наборе нет строк, то все агрегатные функции за исключением <code>COUNT(*)</code> возвращают значение NULL.</p>

<h3>Avg</h3>
<p>Функция <span class="b">Avg</span> возвращает среднее значение на диапазоне значений столбца таблицы.</p>
<p>Пусть в базе данных у нас есть таблица товаров Products, которая описывается следующими выражениями:</p>
<pre class="brush:sql;">
CREATE TABLE Products
(
    Id SERIAL PRIMARY KEY,
    ProductName VARCHAR(30) NOT NULL,
    Company VARCHAR(20) NOT NULL,
    ProductCount INT DEFAULT 0,
    Price NUMERIC NOT NULL,
	IsDiscounted BOOL
);
  
INSERT INTO Products (ProductName, Company, ProductCount, Price, IsDiscounted) 
VALUES
('iPhone X', 'Apple', 3, 76000, false),
('iPhone 8', 'Apple', 2, 71000, true),
('iPhone 7', 'Apple', 5, 42000, true),
('Galaxy S9', 'Samsung', 2, 46000, false),
('Galaxy S8 Plus', 'Samsung', 1, 56000, true),
('Desire 12', 'HTC', 5, 28000, true),
('Nokia 9', 'HMD Global', 6, 38000, true);
</pre>
<p>Найдем среднюю цену товаров из базы данных:</p>
<pre class="brush:sql;">
SELECT AVG(Price) AS Average_Price FROM Products;
</pre>
<p>Для поиска среднего значения в качестве выражения в функцию передается столбец Price. Для получаемого значения устанавливается псевдоним Average_Price, хотя можно его и не 
устанавливать.</p>
<img src="pics/6.1.png" alt="Функция avg в PostgreSQL" />
<p>Также мы можем применить фильтрацию. Например, найти среднюю цену для товаров какого-то определенного производителя:</p>
<pre class="brush:sql;">
SELECT AVG(Price) FROM Products
WHERE Company='Apple';
</pre>
<p>И, кроме того, мы можем находить среднее значение для более сложных выражений. 
Например, найдем среднюю сумму всех товаров, учитывая их количество:</p>
<pre class="brush:sql;">
SELECT AVG(Price * ProductCount) FROM Products
</pre>
<h3>Count</h3>
<p>Функция <span class="b">Count</span> вычисляет количество строк в выборке. Есть две формы этой функции. 
Первая форма <code>COUNT(*)</code> подсчитывает число строк в выборке:</p>
<pre class="brush:sql;">
SELECT COUNT(*) FROM Products;
</pre>
<img src="pics/6.2.png" alt="Функция count в PostgreSQL" />
<p>Вторая форма функции вычисляет количество строк по определенному столбцу, при этом строки со значениями NULL игнорируются:</p>
<pre class="brush:sql;">
SELECT COUNT(DISTINCT Company) FROM Products;
</pre>
<p>Оператор <span class="b">DISTINCT</span> указывает, что надо взять именно уникальные значения из столбца Company.</p>
<h3>Min и Max</h3>
<p>Функции <span class="b">Min</span> и <span class="b">Max</span> возвращают соответственно минимальное и максимальное значение по столбцу. 
Например, найдем минимальную цену среди товаров:</p>
<pre class="brush:sql;">
SELECT MIN(Price) FROM Products;
</pre>
<p>Поиск максимальной цены:</p>
<pre class="brush:sql;">
SELECT MAX(Price) FROM Products;
</pre>
<p>Данные функции также игнорируют значения NULL и не учитывают их при подсчете.</p>
<h3>Sum</h3>
<p>Функция <span class="b">Sum</span> вычисляет сумму значений столбца. Например, подсчитаем общее количество товаров:</p>
<pre class="brush:sql;">
SELECT SUM(ProductCount) FROM Products;
</pre>
<p>Также вместо имени столбца может передаваться вычисляемое выражение. Например, найдем общую стоимость всех имеющихся товаров:</p>
<pre class="brush:sql;">
SELECT SUM(ProductCount * Price) FROM Products;
</pre>
<h3>BOOL_AND и BOOL_OR</h3>
<p>Допустим, нам надо узнать, есть ли в таблице товары, которые подлежать скидке, то есть у которых IsDiscounted = true. В этом случае можно 
выполнить функцию <code>BOOL_OR</code>, которая возвращает true, если хотя бы одно значение в наборе равно true:</p>
<pre class="brush:sql;">SELECT BOOL_OR(IsDiscounted) FROM Products;</pre>
<p>Если нам надо узнать, все ли товары подлежат скидке, то можно применить функцию <code>BOOL_AND</code>, которая возвращает true, если 
все значения в наборе равны true:</p>
<pre class="brush:sql;">SELECT BOOL_AND(IsDiscounted) FROM Products;</pre>
<h3>STRING_AGG</h3>
<p>Функция <span class="b">STRING_AGG()</span> объединяет набор строковых значений или значений bytea. Например, выберем названия всех товаров:</p>
<pre class="brush:sql;">SELECT STRING_AGG(ProductName, ', ') FROM Products;</pre>
<img src="pics/6.4.png" alt="Функция string_agg в PostgreSQL" />
<p>Или выберем всех производителей:</p>
<pre class="brush:sql;">
SELECT STRING_AGG(DISTINCT Company, ', ') FROM Products;

-- результат операции
-- Apple, HMD Global, HTC, Samsung 
</pre>
<p>Чтобы выбрать уникальных производителей, здесь также применяется оператор <code>DISTINCT</code>, иначе у нас бы повторялись значения.</p>
<h3>Комбинирование функций</h3>
<p>Объединим применение нескольких функций:</p>
<pre class="brush:sql;">
SELECT COUNT(*) AS ProdCount,
	   SUM(ProductCount) AS TotalCount,
       MIN(Price) AS MinPrice,
       MAX(Price) AS MaxPrice,
       AVG(Price) AS AvgPrice
FROM Products;
</pre>
<img src="pics/6.3.png" alt="Агрегатные функции в PostgreSQL" />
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


<div class="nav"><p><a href="4.4.php">Назад</a><a href="./">Содержание</a><a href="4.6.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 4.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
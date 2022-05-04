<!DOCTYPE html>
<html >
<head>
<title>SQLite | Соединение таблиц с помощью LEFT JOIN</title>
<meta charset="utf-8" />
<meta name="description" content="Соединение таблиц с помощью LEFT JOIN в SQLite, отличие от LEFT JOIN, левостороннее внешнее соединение">
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
<h2>Соединение таблиц с помощью LEFT JOIN</h2><div class="date">Последнее обновление: 30.11.2021</div>

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

<p>Кроме внутреннего соединения таблиц с помощью <span class="b">INNER JOIN</span>. Но также SQLite позволяет использовать и так называемое 
левостороннее внешнее соединение с помощью операторов <span class="b">LEFT JOIN</span>. В отличие от <code>INNER JOIN</code> 
внешнее левостороннее соединение возвращает все строки из первой (левой) таблицы.</p>
<p>Outer Join имеет следующий формальный синтаксис:</p>
<pre class="brush:sql;">
SELECT столбцы
FROM таблица1
	LEFT JOIN таблица2 ON условие1
	LEFT JOIN таблица3 ON условие2...
</pre>
<p>Возьмем таблицы с данными из прошлой темы:</p>
<pre class="brush:sql;">
DROP TABLE IF EXISTS orders;
DROP TABLE IF EXISTS products;
DROP TABLE IF EXISTS customers;
CREATE TABLE products
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    company TEXT NOT NULL,
    items_count INTEGER DEFAULT 0,
    price INTEGER
);

CREATE TABLE customers
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL
);
CREATE TABLE orders
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    product_id INTEGER NOT NULL,
    customer_id INTEGER NOT NULL,
	created_at TEXT NOT NULL,
    items_count INTEGER DEFAULT 1,
    price INTEGER NOT NULL,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
    FOREIGN KEY (customer_id) REFERENCES customers(id) ON DELETE CASCADE
);
</pre>
<p>Пусть эти таблицы будут содержать следующие данные:</p>
<pre class="brush:sql;">
INSERT INTO products (name, company, items_count, price)
VALUES
('iPhone 13', 'Apple', 3, 76000),
('iPhone 12', 'Apple', 2, 51000),
('Galaxy S21', 'Samsung', 2, 56000),
('Galaxy S20', 'Samsung', 1, 41000),
('P40 Pro', 'Huawei', 5, 36000);

INSERT INTO customers(name) VALUES ('Tom'), ('Bob'),('Sam');

INSERT INTO orders (product_id, customer_id, created_at, items_count, price)
VALUES
( 
    (SELECT id FROM products WHERE name='Galaxy S21'),
    (SELECT id FROM customers WHERE name='Tom'),
    '2021-11-30', 
    2, 
    (SELECT price FROM products WHERE name='Galaxy S21')
),
( 
    (SELECT id FROM products WHERE name='iPhone 12'),
    (SELECT id FROM customers WHERE name='Tom'),
    '2021-11-29',  
    1, 
    (SELECT price FROM products WHERE name='iPhone 12')
),
( 
    (SELECT id FROM products WHERE name='iPhone 12'),
    (SELECT id FROM customers WHERE name='Bob'),
    '2021-11-29',  
    1, 
    (SELECT price FROM products WHERE name='iPhone 12')
);
</pre>
<p>Например, соединим таблицы orders и customers:</p>
<pre class="brush:sql;">
SELECT name, created_at, items_count, price, product_id 
FROM orders LEFT JOIN customers 
ON orders.customer_id = customers.id;
</pre>
<p>Таблица orders является первой или левой таблицей, а таблица customers - правой таблицей. Поэтому, так как здесь используется 
выборка по левой таблице, то вначале будут выбираться все строки из orders, а затем к ним по условию <code>orders.customer_id = customers.id</code> будут 
добавляться связанные строки из customers.</p>
<img src="./pics/7.6.png" alt="Левостороннее соединение LEFT JOIN в SQLite" />
<p>По вышеприведенному результату может показаться, что левостороннее соединение аналогично <code>INNER JOIN</code>, но это не так. 
<span class="b">INNER JOIN</span> объединяет строки из дух таблиц при соответствии условию. Если одна из таблиц содержит строки, которые не соответствуют этому условию, то данные строки 
не включаются в выходную выборку. <span class="b">LEFT JOIN</span> выбирает все строки первой таблицы и затем присоединяет к ним строки правой таблицы. К примеру, возьмем таблицу customers и добавим к покупателям информацию об их заказах:</p>
<pre class="brush:sql;">
-- INNER JOIN
SELECT name, created_at, items_count, price 
FROM customers JOIN orders 
ON orders.customer_id = customers.id;

-- LEFT JOIN
SELECT name, created_at, items_count, price 
FROM customers LEFT JOIN orders 
ON orders.customer_id = customers.id;
</pre>
<img src="./pics/7.7.png" alt="INNER join vs left join в SQLite"/>
<p>В случае с LEFT JOIN SQLite выбирает сначала всех покупателей из таблицы customers, затем сопоставляет их с заказами из таблицы orders через 
условие <code>orders.customer_id = customers.id</code>. Однако не у всех покупателей есть заказы. В этом случае покупателю для соответствующих столбцов 
устанавливаются значения NULL.</p>
<p>Подобным образом с помощью Используем левостороннее соединение для добавления к заказам информации о пользователях и товарах:</p>
<pre class="brush:sql;">
SELECT customers.name, orders.created_at, 
       products.name, products.company
FROM orders 
LEFT JOIN customers ON orders.customer_id = customers.id
LEFT JOIN products ON orders.product_id = products.id;
</pre>
<img src="./pics/7.9.png" alt="объединение трех таблиц с помощью LEFT JOIN в SQLite" />
<p>И также можно применять более комплексные условия с фильтрацией и сортировкой. Например, выберем все заказы с информацией о клиентах и товарах по тем товарам, 
у которых цена меньше 55000, и отсортируем по дате заказа:</p>
<pre class="brush:sql;">
SELECT customers.name, orders.created_at, 
       products.name, products.company
FROM orders 
LEFT JOIN customers ON orders.customer_id = customers.id
LEFT JOIN products ON orders.product_id = products.id
WHERE products.price &gt; 55000
ORDER BY orders.created_at;
</pre>
<p>Или выберем всех пользователей из customers, у которых нет заказов в таблице orders:</p>
<pre class="brush:sql;">
SELECT name FROM customers
LEFT JOIN orders ON customers.id = orders.customer_id
WHERE orders.customer_id IS NULL;
</pre>
<p>Также можно комбинировать <code>INNER JOIN</code> и <code>LEFT JOIN</code>:</p>
<pre class="brush:sql;">
SELECT customers.name, orders.created_at, 
       products.name, products.company
FROM orders 
JOIN products ON orders.product_id = products.id AND products.price &gt; 45000
LEFT JOIN customers ON orders.customer_id = customers.id
ORDER BY orders.created_at;
</pre>
<p>Вначале по условию к таблице orders через Inner Join присоединяется связанная информация из products, затем через LEFT Join 
добавляется информация из таблицы customers.</p>
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


<div class="nav"><p><a href="./5.2.php">Назад</a><a href="./">Содержание</a><a href="./5.4.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 5.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 5.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
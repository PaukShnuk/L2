<!DOCTYPE html>
<html >
<head>
<title>SQLite | Добавление данных. Команда INSERT</title>
<meta charset="utf-8" />
<meta name="description" content="Добавление данных в SQLite, команда INSERT, установка значений по умолчанию, DEFAULT и NULL, множественное добавление">
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
<h1>Основные операции с данными</h1><h2>Добавление данных. Команда INSERT</h2><div class="date">Последнее обновление: 27.11.2021</div>

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

<p>Для добавления данных в SQLite применяется команда <span class="b">INSERT</span>, которая имеет следующее формальное определение:</p>
<pre class="brush:sql;">
INSERT INTO имя_таблицы [(столбец1, стобец2, ... стобецN)] 
VALUES (значение1, значение2, ... значениеN)
</pre>
<p>После выражения <span class="b">INSERT INTO</span> в скобках можно указать список столбцов через запятую, в которые надо добавлять данные, 
и в конце после слова <span class="b">VALUES</span> скобках перечисляют добавляемые для столбцов значения.</p>
<p>Например, пусть в базе данных SQLite есть следующая таблица users:</p>
<pre class="brush:sql;">
CREATE TABLE users
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
	name TEXT,
    age INTEGER
);
</pre>
<p>Добавим в эту таблицу одну строку с помощью следующего кода:</p>
<pre class="brush:sql;">
INSERT INTO users (name, age) VALUES ('Tom', 37);
</pre>
<p>После названия таблицы указываны два стобца, в которые мы хотим выполнить добавление данные - <code>(name, age)</code>. После оператора <span class="b">VALUES</span> указаны 
значения для этих столбцов. Значения будут передаваться столбцам по позиции. То есть стобцу <code>name</code> передается строка "Tom', столбцу <code>age</code> - 
число 37. И после успешного выполнения данной команды в таблице появится новая строка:</p>
<img src="pics/3.1.png" alt="INSERT и добавление данных в SQLite" />
<p>Стоит отметить, что при добавлении данных указывать значения абсолютно для всех столбцов таблицы. Например, в примере выше не указано значение 
для стобца id, поскольку для данного столбца значение будет автоматически генерироваться.</p>
<p>Также можно можно было бы не указывать названия столбцов:</p>
<pre class="brush:sql;">INSERT INTO users VALUES (2, 'Bob', 41);</pre>
<p>Однако в этом случае потребовалось бы указать значения для всех его столбцов, в том числе для столбца id. Причем значения передавались столбцам в том порядке, в котором они идут в таблице.</p>
<h3>Добавление NULL</h3>
<p>Также мы можем опускать при добавлении такие столбцы, которые поддерживают значение <span class="b">NULL</span> (которые не имеют ограничения <span class="b">NOT NULL</span>):</p>
<pre class="brush:sql;">INSERT INTO users (name) VALUES ('Sam');</pre>
<p>В данном случае для столбца age не указано значение, и поскольку данный столбец поддерживает значение NULL, то для него будет установлено значение NULL.</p>
<p>Также подобным столбцам, которые поддерживают NULL, можно явным образом передать NULL:</p>
<pre class="brush:sql;">INSERT INTO users (name, age) VALUES (NULL, NULL);</pre>
<h3>Значения по умолчанию</h3>
<p>Если для столбца задано ограничение <code>DEFAULT</code>, то есть значение по умолчанию, то для него тоже можно не передавать значение. Например, 
возьмем следующую таблицу:</p>
<pre class="brush:sql;">
CREATE TABLE users
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
	name TEXT DEFAULT 'Undefined',
    age INTEGER DEFAULT 18
);
</pre>
<p>Теперь столбцы name и age имеют значения по умолчанию. При добавлении данных из можно опустить:</p>
<pre class="brush:sql;">
INSERT INTO users(name) VALUES ('Tom');
INSERT INTO users(age) VALUES (22);
</pre>
<img src="./pics/3.2.png" alt="Добавление данных и значения по умолчанию в SQLite" />
<p>Если все столбцы поддерживают значения по умолчанию или автогенерацию или значение NULL, то с помощью ключевого слова <code>DEFAULT</code> можно явно указать, что в качестве значения будут использоваться значения по умолчанию:</p>
<pre class="brush:sql;">
INSERT INTO users DEFAULT VALUES;
</pre>
<p>В этом случае столбцы, для которых определено значение по умолчанию, получат это значение. Остальные столбцы получать значение NULL.</p>
<h3>Множественное добавление</h3>
<p>Также мы можем добавить сразу несколько строк:</p>
<pre class="brush:sql;">
INSERT INTO users(name, age) VALUES
('Tom', 37),
('Bob', 41),
('Sam', 28);
</pre>
<p>В данном случае в таблицу будут добавлены три строки.</p>
<h3>Динамическая типизация</h3>
<p>Стоит отметить, что в SQLite (в отличие от многих других популярных систем баз данных) действует динамическая типизиация. Например, возьмем выше использованную 
таблицу:</p>
<pre class="brush:sql;">
CREATE TABLE users
(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
	name TEXT,
    age INTEGER
);
</pre>
<p>Несмотря на то, что столбец name представляет строку текста, а столбец age - целое число, мы можем передавать этим столбцам данные совсем других типов:</p>
<pre class="brush:sql;">
INSERT INTO users(name, age) VALUES
(37, 'Tom'),
(4.5, 5.6),
('Sam', 'twenty-two');
</pre>
<img src="./pics/3.3.png" alt="Динамическая типизация в SQLite" />

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


<div class="nav"><p><a href="./2.5.php">Назад</a><a href="./">Содержание</a><a href="./3.2.php">Вперед</a></p></div></div>
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
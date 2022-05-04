<!DOCTYPE html>
<html >
<head>
<title>PHP и MySQL | Добавление данных в PDO и параметризация запросов</title>
<meta charset="utf-8" />
<meta name="description" content="Добавление данных в базу данных MySQL с помощью языка программирования PHP и библиотеки PDO, метод exec, команда INSERT, prepared statement, параметризация запроса, bindValue">
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
<h2>Добавление данных в PDO и параметризация запросов</h2><div class="date">Последнее обновление: 08.06.2021</div>

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

<p>Для добавления данных в БД MySQL применяется sql-команда <span class="b">INSERT</span>, которая имеет следующий синтаксис:</p>
<pre class="brush:sql;">INSERT INTO название_таблицы (столбец1, столбец2, столбецN) VALUES ( значение1, значение2, значениеN)</pre>
<p>Данная команда также выполняется методом <span class="b">exec()</span> объекта PDO. Стоит отметить, что для sql-команд 
<code>INSERT</code>,  <code>UPDATE</code> и <code>DELETE</code> метод <code>exec()</code> возвращает количество затронутных командой строк 
(добавленных, измененных или удаленных). Таким образом, мы можем узнать сколько строк было добавлено.</p>
<p>Сначала рассмотрим простейшее добавление одного объекта в БД. Для примера возьмем созданную в прошлой теме базу данных "testdb1" и созданную в ней 
таблицу Users со следующим определением:</p>
<pre class="brush:sql;">CREATE TABLE Users (id INTEGER AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30), age INTEGER)</pre>
<p>И для добавления определим следующий скрипт PHP:</p>
<pre class="brush:php;">
&lt;?php
try {
	$conn = new PDO("mysql:host=localhost;dbname=testdb1", "root", "mypassword");
	
	// SQL-выражение для добавления данных
	$sql = "INSERT INTO Users (name, age) VALUES ('Tom', 37)";
	
	$affectedRowsNumber = $conn-&gt;exec($sql);
    echo "В таблицу Users добавлено строк: $affectedRowsNumber";
}
catch (PDOException $e) {
    echo "Database error: " . $e-&gt;getMessage();
}
?&gt;
</pre>
<p>Команда на добавление здесь выглядит следующим образом:</p>
<pre class="brush:sql;">"INSERT INTO Users (name, age) VALUES ('Tom', 37)"</pre>
<p>То есть в столбец <code>name</code> добавляется строка "Tom", а в столбец <code>age</code> - число 37. Для столбца id не добавляется никакого значения, 
потому что при создании таблицы для него указан параметр <code>AUTO_INCREMENT</code> - то есть значение этого столбца у каждой добавляемой строки 
будет автоматически увеличиваеться по сравнению с предыдущей на единицу.</p>
<p>При добавлении мы получаем количество добавленных строк в переменую <code>$affectedRowsNumber</code> и затем выводим ее значение в браузере. Поэтому 
при успешном добавлении мы увидим</p>
<div class="browser">В таблицу Users добавлено строк: 1</div>
<h4>Множественное добавление</h4>
<p>Также мы можем добавить сразу несколько объектов:</p>
<pre class="brush:php;">
&lt;?php
try {
	$conn = new PDO("mysql:host=localhost;dbname=testdb1", "root", "mypassword");
	
	$sql = "INSERT INTO Users (name, age) VALUES 
			('Sam', 41), 
			('Bob', 29), 
			('Alice', 32)";
	$affectedRowsNumber = $conn-&gt;exec($sql);
    echo "В таблицу Users добавлено строк: $affectedRowsNumber";
}
catch (PDOException $e) {
    echo "Database error: " . $e-&gt;getMessage();
}
?&gt;
</pre>
<p>Здесь в таблицу добавляется три строки. Соответственно в браузере мы увидим:</p>
<div class="browser">В таблицу Users добавлено строк: 3</div>
<h3>Добавление данных из формы HTML</h3>
<p>В большинстве случаев добавляемые данные будут приходить из вне, например, присылаться в запросе пользователя. Рассмотрим добавление данных, отправленных из 
формы HTML. Для этого определим следующий скрипт:</p>
<pre class="brush:php;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;METANIT.COM&lt;/title&gt;
&lt;meta charset="utf-8" /&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?php
if (isset($_POST["username"]) && isset($_POST["userage"])) {
	
	$username = $_POST["username"];
	$userage = $_POST["userage"];
	try {
		$conn = new PDO("mysql:host=localhost;dbname=testdb1", "root", "mypassword");
		$sql = "INSERT INTO Users (name, age) VALUES ('$username', $userage)";
		$affectedRowsNumber = $conn-&gt;exec($sql);
		// если добавлена как минимум одна строка
		if($affectedRowsNumber &gt; 0 ){
			echo "Data successfully added: name=$username  age= $userage";	
		}
	}
	catch (PDOException $e) {
		echo "Database error: " . $e-&gt;getMessage();
	}
}
?&gt;
&lt;h3&gt;Create a new User&lt;/h3&gt;
&lt;form method="post"&gt;
    &lt;p&gt;User Name:
    &lt;input type="text" name="username" /&gt;&lt;/p&gt;
	&lt;p&gt;User Age:
    &lt;input type="number" name="userage" /&gt;&lt;/p&gt;
    &lt;input type="submit" value="Save"&gt;
&lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Здесь мы проверяем, пришли ли с сервера данные в POST-запросе, которые имеют ключи "username" и "userage":</p>
<pre class="brush:php;">if (isset($_POST["username"]) && isset($_POST["userage"])) {</pre>
<p>Если эти данные имеются, то есть был отправлен post-запрос с данными на добавление, то мы получаем эти данные в переменные и добавляем их в бд.</p>
<pre class="brush:php;">$sql = "INSERT INTO Users (name, age) VALUES ('$username', $userage)";</pre>
<p>Если была добавлена строка, то есть метод <code>exec()</code> возвратил число больше нуля, то выводим пользователю соответствующее сообщение.</p>
<p>После кода php собственно определена форма на добавление данных с помощью post-запроса.</p>
<p>Запустим скрипт. Введем в форму данные и нажмем на кнопку:</p>
<img src="./pics/1.1.png" alt="Insert data in PHP and PDO in MySQL" />
<p>И данные будут добавлены. Вроде все хорошо. Однако здесь есть большой недостаток.</p>
<h3>Параметризация запросов</h3>
<p>Недостаток выше приведенного скрипа заключается в том, что мы никак не констролируем присылаемые данные и сохраняем их в базу данных как есть. Что 
несет потенциальную угрозу безопасности, особенно при добавлении строк типа <code>"; DELETE FROM `Users`; --</code>. Кроме того, в ряде случае может быть проблематично добавить даже безопасные данные, например, строку, которая содержит 
одинарную кавычку, типа "Tom O'Brian".</p>
<p>Для решения этих проблем PDO предлагает параметризацию запросов с помощью применения заранее подготовленных выражений - 
<span class="b">prepared statement</span>. Выражения <span class="b">prepared statement</span> вместо жестко установленных значений или переменных принимают 
параметры, которые не привязаны к конкретным значениям. Эти выражения <span class="b">prepared statement</span> посылаются серверу базы данных до того, 
как станут известны используемые данные, что позволяет серверу приготовить их к выполнению, но при этом они не выполняются. 
А когда пользователь присылает данные - параметры заменяются пришедшими данными, и выражение <span class="b">prepared statement</span> выполняется.</p>
<p>Перепишем предыдущий пример с использованием параметров:</p>
<pre class="brush:php;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;METANIT.COM&lt;/title&gt;
&lt;meta charset="utf-8" /&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;?php
if (isset($_POST["username"]) && isset($_POST["userage"])) {
	
	try {
		$conn = new PDO("mysql:host=localhost;dbname=testdb1", "root", "mypassword");
		$sql = "INSERT INTO Users (name, age) VALUES (:username, :userage)";
		// определяем prepared statement
		$stmt = $conn-&gt;prepare($sql);
		// привязываем параметры к значениям
		$stmt-&gt;bindValue(":username", $_POST["username"]);
		$stmt-&gt;bindValue(":userage", $_POST["userage"]);
		// выполняем prepared statement
		$affectedRowsNumber = $stmt-&gt;execute();
		// если добавлена как минимум одна строка
		if($affectedRowsNumber &gt; 0 ){
			echo "Data successfully added: name=" . $_POST["username"] ."  age= " . $_POST["userage"];	
		}
	}
	catch (PDOException $e) {
		echo "Database error: " . $e-&gt;getMessage();
	}
}
?&gt;
&lt;h3&gt;Create a new User&lt;/h3&gt;
&lt;form method="post"&gt;
    &lt;p&gt;User Name:
    &lt;input type="text" name="username" /&gt;&lt;/p&gt;
	&lt;p&gt;User Age:
    &lt;input type="number" name="userage" /&gt;&lt;/p&gt;
    &lt;input type="submit" value="Save"&gt;
&lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>В SQL-выражении теперь применяются параметры:</p>
<pre class="brush:php;">$sql = "INSERT INTO Users (name, age) VALUES (:username, :userage)";</pre>
<p><code>:username</code> и <code>:userage</code> - это названия параметров. Причем они начинаются с символа двоеточия :.</p>
<p>Само выражение <span class="b">prepared statement</span> создается с помощью метода <span class="b">prepare()</span> объекта PDO, в который передается выполняемая sql-команда:</p>
<pre class="brush:php;">$stmt = $conn-&gt;prepare($sql);</pre>
<p>Фактически здесь создается объект <span class="b">PDOStatement</span>, который сохраняется в переменную <code>$stmt</code>.</p>
<p>Чтобы связать параметр с конкретным значением у объекта <code>PDOStatement</code> вызывается метод <span class="b">bindValue()</span>. Первый параметр этого метода - 
собственно параметр из sql-команды, а второй параметр - передаваемое ему значение.</p>
<pre class="brush:php;">$stmt-&gt;bindValue(":username", $_POST["username"]);</pre>
<p>Так, в данном случае параметр <code>:username</code> привязывается к значению из <code>$_POST["username"]</code></p>
<p>Причем привязка может производиться и к конкретным значениям и обычным переменным, например:</p>
<pre class="brush:php;">
$user = "Tom"
// привязка к переменной $user
$stmt-&gt;bindValue(":username", $user);
</pre>
<p>Для выполнения sql-выражения у объекта <code>PDOStatement</code> вызывается метод <span class="b">execute()</span>, который для команды INSERT возвращает 
число добавленных строк.</p>
<h3>Передача значений параметрам через массив по имени</h3>
<p>В примере выше для параметризации применялся метод <span class="b">bindValue()</span>:</p>
<pre class="brush:php;">
$sql = "INSERT INTO Users (name, age) VALUES (:username, :userage)";
$stmt = $conn-&gt;prepare($sql);
// привязываем параметры к значениям
$stmt-&gt;bindValue(":username", $_POST["username"]);
$stmt-&gt;bindValue(":userage", $_POST["userage"]);
// выполняем prepared statement
$affectedRowsNumber = $stmt-&gt;execute();
</pre>
<p>Но есть и другой способ привязки параметров к значениям - мы можем передать в метод <span class="b">execute()</span> параметры и их значения в виде ассоциативного массива:</p>
<pre class="brush:php;">
$sql = "INSERT INTO Users (name, age) VALUES (:username, :userage)";
$stmt = $conn-&gt;prepare($sql);
// через массив передаем значения параметрам по имени
$rowsNumber = $stmt-&gt;execute(array(":username" =&gt; $_POST["username"], ":userage" =&gt; $_POST["userage"]));
</pre>
<p>В этом случае названия параметров являются ключами.</p>
<h3>Передача значений параметрам через массив по позиции</h3>
<p>Третий способ привязки значений к параметрам представляет передачу значений по позиции:</p>
<pre class="brush:php;">
$sql = "INSERT INTO Users (name, age) VALUES (?, ?)";
$stmt = $conn-&gt;prepare($sql);
// через массив передаем значения параметрам по позиции
$rowsNumber = $stmt-&gt;execute(array($_POST["username"], $_POST["userage"]));
</pre>
<p>В этом случае вместо названий параметров применяются знаки вопроса <span class="b">?</span>. Для передачи этим параметрам значений в метод <span class="b">execute()</span> 
также передается массив. Первое значение массива привязывается к первому параметру (условно добавляется вместо первого знака вопроса), второе значение привязывается 
ко второму параметру и т.д.</p>
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


<div class="nav"><p><a href="./2.2.php">Назад</a><a href="./">Содержание</a><a href="./2.4.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в работу с MySQL в PHP</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/php/mysql/1.1.php">PDO и MySQLi</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Работа с MySQL через PDO</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.1.php">PDO. Создание подключения</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.2.php">Выполнение запросов в PDO. Создание базы данных и таблиц</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.3.php">Добавление данных в PDO и параметризация запросов</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.4.php">Получение данных в PDO</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.7.php">Фильтрация данных в PDO</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.5.php">Обновление данных в PDO</a></span></li>
			<li><span class="file"><a href="//metanit.com/php/mysql/2.6.php">Удаление данных в PDO</a></span></li>
		</ul>
	</li>
		<li class="closed"><span class="folder">Глава 3. Взаимодействие с MySQL через mysqli</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.1.php">MySQLi. Создание подключения</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.2.php">Выполнение запросов в MySQLi. Создание базы данных и таблиц</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.3.php">Добавление данных в MySQLi</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.4.php">Получение данных в MySQLi</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.7.php">Фильтрация данных в MySQLi</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.5.php">Обновление данных в MySQLi</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/mysql/3.6.php">Удаление данных в MySQLi</a></span></li>
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
<!DOCTYPE html>
<html >
<head>
<title>Django | Типы полей моделей</title>
<meta charset="utf-8" />
<meta name="description" content="Типы полей моделей в Django, их сопоставление с различными типами данных в базах данных SQLite, MySQL, PostgreSQL и Oracle">
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
<h2>Типы полей моделей</h2><div class="date">Последнее обновление: 26.02.2018</div>

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

<p>Для определения моделей мы можем использовать следующие типы полей:</p>
<ul>
<li><p><span class="b">BinaryField()</span>: хранит бинарные данные</p></li>
<li><p><span class="b">BooleanField()</span>: хранит значение True или False (0 или 1)</p></li>
<li><p><span class="b">NullBooleanField()</span>: хранит значение True или False или Null</p></li>
<li><p><span class="b">DateField()</span>: хранит дату</p></li>
<li><p><span class="b">TimeField()</span>: хранит время</p></li>
<li><p><span class="b">DateTimeField()</span>: хранит дату и время</p></li>
<li><p><span class="b">DurationField()</span>: хранит период времени</p></li>
<li><p><span class="b">AutoField()</span>: хранит целочисленное значение, которое автоматически инкрементируется, обычно применяется для первичных ключей</p></li>

<li><p><span class="b">BigIntegerField()</span>: представляет число - значение типа Number, которое укладывается в диапазон от 
-9223372036854775808 до 9223372036854775807. В зависимости от выбранной СУБД диапазон может немного отличаться</p></li>
<li><p><span class="b">DecimalField(decimal_places=X, max_digits=Y)</span>: представляет значение типа Number, которое имеет максимум X разрядов и Y знаков после запятой</p></li>
<li><p><span class="b">FloatField()</span>: хранит, значение типа Number, которое представляет число с плавающей точкой</p></li>
<li><p><span class="b">IntegerField()</span>: хранит значение типа Number, которое представляет целочисленное значение</p></li>
<li><p><span class="b">PositiveIntegerField()</span>: хранит значение типа Number, которое представляет положительное целочисленное значение (от 0 до 2147483647)</p></li>
<li><p><span class="b">PositiveSmallIntegerField()</span>: хранит значение типа Number, которое представляет небольшое положительное целочисленное 
значение (от 0 до 32767)</p></li>
<li><p><span class="b">SmallIntegerField()</span>: хранит значение типа Number, которое представляет небольшое целочисленное 
значение (от -32768 до 32767)</p></li>
<li><p><span class="b">CharField(max_length=N)</span>: хранит строку длиной не более N символов</p></li>
<li><p><span class="b">TextField()</span>: хранит строку неопределенной длины</p></li>
<li><p><span class="b">EmailField()</span>: хранит строку, которая представляет email-адрес. Значение автоматически валидируется встроенным валидатором EmailValidator</p></li>
<li><p><span class="b">FileField()</span>: хранит строку, которая представляет имя файла</p></li>
<li><p><span class="b">FilePathField()</span>: хранит строку, которая представляет путь к файлу длиной в 100 символов</p></li>
<li><p><span class="b">ImageField()</span>: хранит строку, которая представляет данные об изображении</p></li>
<li><p><span class="b">GenericIPAddressField()</span>: хранит строку, которая представляет IP-адрес в формате IP4v или IP6v</p></li>
<li><p><span class="b">SlugField()</span>: хранит строку, которая может содержать только буквы в нижнем регитре, цифры, дефис и знак подчеркивания</p></li>
<li><p><span class="b">URLField()</span>: хранит строку, которая представляет валидный URL-адрес</p></li>
<li><p><span class="b">UUIDField()</span>: хранит строку, которая представляет UUID-идетификатор</p></li>
</ul>

<p>Таблица сопоставления полей с типами в различных СУБД:</p>
<table class="tab">
<tr class="tabhead"><td><p>Тип</p></td><td><p>SQLite</p></td><td><p>MySQL</p></td><td><p>PostgreSQL</p></td><td><p>Oracle</p></td></tr>
<tr><td><p>BinaryField()</p></td><td><p>BLOB NOT NULL</p></td><td><p>longblob NOT NULL</p></td><td><p>bytea NOT NULL</p></td><td><p>BLOB NULL</p></td></tr>
<tr><td><p>BooleanField()</p></td><td><p>bool NOT NULL</p></td><td><p>bool NOT NULL</p></td><td><p>boolean NOT NULL</p></td><td><p>NUMBER(1) NOT NULL CHECK("Значение" IN(0,1))</p></td></tr>
<tr><td><p>NullBooleanField()</p></td><td><p>bool NULL</p></td><td><p>bool NULL</p></td><td><p>boolean NULL</p></td><td><p>NUMBER(1) NOT NULL CHECK(("Значение" IN(0,1)) OR ("Значение" IS NULL))</p></td></tr>
<tr><td><p>DateField()</p></td><td><p>date NULL</p></td><td><p>date NULL</p></td><td><p>date NULL</p></td><td><p>DATE NOT NULL</p></td></tr>
<tr><td><p>TimeField()</p></td><td><p>time NULL</p></td><td><p>time NULL</p></td><td><p>time NULL</p></td><td><p>TIMESTAMP NOT NULL</p></td></tr>
<tr><td><p>DateTimeField()</p></td><td><p>datetime NULL</p></td><td><p>datetime NULL</p></td><td><p>timestamp NULL</p></td><td><p>TIMESTAMP NOT NULL</p></td></tr>
<tr><td><p>DurationField()</p></td><td><p>bigint NOT NULL</p></td><td><p>bigint NOT NULL</p></td><td><p>interval NOT NULL</p></td><td><p>INTERVAL DAY(9) TO SECOND(6) NOT NULL</p></td></tr>
<tr><td><p>AutoField()</p></td><td><p>integer NOT NULL AUTOINCREMENT</p></td><td><p>integer AUTO_INCREMENT NOT NULL</p></td><td><p>serial NOT NULL</p></td><td><p>NUMBER(11) NOT NULL</p></td></tr>

<tr><td><p>BigIntegerField</p></td><td><p>bigint NOT NULL</p></td><td><p>bigint NOT NULL</p></td><td><p>bigint NOT NULL</p></td><td><p>NUMBER(19) NOT NULL</p></td></tr>
<tr><td><p>DecimalField(decimal_places=X, max_digits=Y)</p></td><td><p>decimal NOT NULL</p></td><td><p>numeric(X, Y) NOT NULL</p></td>
<td><p>numeric(X, Y) NOT NULL</p></td><td><p>NUMBER(10, 3) NOT NULL</p></td></tr>
<tr><td><p>FloatField</p></td><td><p>real NOT NULL</p></td><td><p>double precision NOT NULL</p></td><td><p>double precision NOT NULL</p></td>
<td><p>DOUBLE PRECISION NOT NULL</p></td></tr>
<tr><td><p>IntegerField</p></td><td><p>integer NOT NULL</p></td><td><p>integer NOT NULL</p></td><td><p>integer NOT NULL</p></td><td><p>NUMBER(11) NOT NULL</p></td></tr>
<tr><td><p>PositiveIntegerField</p></td><td><p>integer unsigned NOT NULL</p></td><td><p>integer UNSIGNED NOT NULL</p></td>
<td><p>integer NOT NULL CHECK ("Значение" &gt; 0)</p></td><td><p>NUMBER NOT NULL CHECK ("Значение" &gt; 0)</p></td></tr>
<tr><td><p>PositiveSmallIntegerField</p></td><td><p>smallint unsigned NOT NULL</p></td><td><p>smallint UNSIGNED NOT NULL</p></td>
<td><p>smallint NOT NULL CHECK ("Значение" &gt; 0)</p></td><td><p>NUMBER(11) NOT NULL CHECK ("Значение" &gt; 0)</p></td></tr>
<tr><td><p>SmallIntegerField</p></td><td><p>smallint NOT NULL</p></td><td><p>smallint NOT NULL</p></td>
<td><p>smallint NOT NULL</p></td><td><p>NUMBER(11) NOT NULL </p></td></tr>
<tr><td><p>CharField(max_length=N)</p></td><td><p>varchar(N) NOT NULL</p></td><td><p>varchar(N) NOT NULL</p></td><td><p>varchar(N) NOT NULL</p></td><td><p>NVARCHAR2(N) NULL</p></td></tr>
<tr><td><p>TextField()</p></td><td><p>text NOT NULL</p></td><td><p>longtext NOT NULL</p></td><td><p>text NOT NULL</p></td><td><p>NCLOB NULL</p></td></tr>
<tr><td><p>EmailField()</p></td><td><p>varchar(254) NOT NULL</p></td><td><p>varchar(254) NOT NULL</p></td><td><p>varchar(254) NOT NULL</p></td><td><p>NVARCHAR2(254) NULL</p></td></tr>
<tr><td><p>FileField()</p></td><td><p>varchar(100) NOT NULL</p></td><td><p>varchar(100) NOT NULL</p></td><td><p>varchar(100) NOT NULL</p></td><td><p>NVARCHAR2(100) NULL</p></td></tr>
<tr><td><p>FilePathField()</p></td><td><p>varchar(100) NOT NULL</p></td><td><p>varchar(100) NOT NULL</p></td><td><p>varchar(100) NOT NULL</p></td><td><p>NVARCHAR2(100) NULL</p></td></tr>
<tr><td><p>ImageField()</p></td><td><p>varchar(100) NOT NULL</p></td><td><p>varchar(100) NOT NULL</p></td><td><p>varchar(100) NOT NULL</p></td><td><p>NVARCHAR2(100) NULL</p></td></tr>
<tr><td><p>GenericIPAddressField()</p></td><td><p>char(39) NOT NULL</p></td><td><p>char(39) NOT NULL</p></td><td><p>inet NOT NULL</p></td><td><p>VARCHAR2(39) NULL</p></td></tr>
<tr><td><p>SlugField()</p></td><td><p>varchar(50) NOT NULL</p></td><td><p>varchar(50) NOT NULL</p></td><td><p>varchar(50) NOT NULL</p></td><td><p>NVARCHAR2(50) NULL</p></td></tr>
<tr><td><p>URLField()</p></td><td><p>varchar(200) NOT NULL</p></td><td><p>varchar(200) NOT NULL</p></td><td><p>varchar(200) NOT NULL</p></td><td><p>NVARCHAR2(200) NULL</p></td></tr>
<tr><td><p>UUIDField()</p></td><td><p>char(32) NOT NULL</p></td><td><p>char(32) NOT NULL</p></td><td><p>uuid NOT NULL</p></td><td><p>VARCHAR2(32) NULL</p></td></tr>
</table>
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


<div class="nav"><p><a href="5.1.php">Назад</a><a href="./">Содержание</a><a href="5.3.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Django</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/django/1.1.php">Что такое Django</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/1.2.php">Установка и настройка Django</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/1.3.php">Создание первого проекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/1.4.php">Создание первого приложения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Представления и маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/django/3.1.php">Обработка запроса</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/3.2.php">Определение маршрутов и функции path и re_path</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/3.3.php">Параметры представлений</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/3.4.php">Параметры строки запроса</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/3.5.php">Переадресация и отправка статусных кодов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Шаблоны</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/django/2.1.php">Создание и использование шаблонов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.3.php">Передача данных в шаблоны</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.2.php">Статические файлы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.4.php">TemplateView</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.5.php">Конфигурация шаблонов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.6.php">Расширение шаблонов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/2.7.php">Встроенные теги</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Формы Django</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/django/4.1.php">Определение форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/4.2.php">Типы полей формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/4.3.php">Настройка формы и ее полей</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/4.4.php">Валидация данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/4.5.php">Детальная настройка полей формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/4.6.php">Стилизация полей форм</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/django/5.1.php">Создание моделей и миграции базы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.2.php">Типы полей моделей</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.3.php">CRUD. Операции с моделями</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.4.php">Создание и получение объектов модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.5.php">Редактирование и удаление объектов модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.6.php">Отношение один ко многим (One to Many)</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.7.php">Отношение многие ко многим (Many to Many)</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/django/5.8.php">Отношение один к одному (One to one)</a></span></li>
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
	$("li:contains('Глава 5.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 5.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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
<!DOCTYPE html>
<html >
<head>
<title>MongoDB | Устройство базы данных. Документы</title>
<meta charset="utf-8" />
<meta name="description" content="Устройство базы данных MongoDB, коллекции и документы, типы данных и уникальные идентификаторы в mongodb">
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
<h1>Работа с базой данных</h1><h2>Устройство базы данных. Документы</h2><div class="date">Последнее обновление: 07.08.2021</div>

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

<p>Всю модель устройства базы данных в MongoDB можно представить следующим образом:</p>
<img src="./pics/2.1.png" alt="Организация базы данных в MongoDB" />
<p>Если в реляционных бд содержимое составляют таблицы, то в mongodb база данных состоит из <span class="b">коллекций</span>.</p>
<p>Каждая коллекция имеет свое уникальное имя - произвольный идентификатор, состоящий из не более чем 128 различных алфавитно-цифровых символов и знака подчеркивания.</p>
<p>В отличие от реляционных баз данных MongoDB не использует табличное устройство с четко заданным количеством столбцов и типов данных. MongoDB 
является документо-ориентированной системой, в которой центральным понятием является <span class="b">документ</span>.</p>
<p>Документ можно представить как объект, хранящий некоторую информацию. В некотором смысле он подобен строкам в реляционных субд, где строки 
хранят информацию об отдельном элементе. Например, типичный документ:</p>
<pre class="brush:js;">
{
    "name": "Tom",
    "surname": "Smith",
    "age": "37",
	"company": {
        "name" : "Microsoft",
        "salary" : "100"
    }
}
</pre>
<p>Документ представляет набор пар ключ-значение. Например, в выражении <code>"name": "Tom"</code> "name" представляет ключ, а "Tom" - значение.</p>
<p>Ключи представляют строки. Значения же могут различаться по типу данных. В данном случае у нас почти все значения также представляют строковый тип, 
и лишь один ключ (company) ссылается на отдельный объект. Всего имеется следующие типы значений:</p>
<ul>
<li><span class="b">String</span>: строковый тип данных, как в приведенном выше примере (для строк используется кодировка UTF-8)</p></li>
<li><span class="b">Array (массив)</span>: тип данных для хранения массивов элементов</p></li>
<li><span class="b">Binary data (двоичные данные)</span>: тип для хранения данных в бинарном формате</p></li>
<li><span class="b">Boolean</span>: булевый тип данных, хранящий логические значения <code>TRUE</code> или <code>FALSE</code>, 
например, <code>{"married": FALSE}</code> </p></li>
<li><span class="b">Date</span>: хранит дату в формате времени Unix</p></li>
<li><span class="b">Double</span>: числовой тип данных для хранения чисел с плавающей точкой</p></li>
<li><span class="b">Integer</span>: используется для хранения целочисленных значений размером 32 бита, например, <code>{"age": 29}</code></p></li>
<li><span class="b">Long</span>: используется для хранения целочисленных значений размером 64 бита</p></li>
<li><span class="b">JavaScript</span>: тип данных для хранения кода javascript</p></li>
<li><span class="b">Min key/Max key</span>: используются для сравнения значений с наименьшим/наибольшим элементов BSON</p></li>
<li><span class="b">Null</span>: тип данных для хранения значения <code>Null</code></p></li>
<li><span class="b">Object</span>: строковый тип данных, как в приведенном выше примере</p></li>
<li><span class="b">ObjectId</span>: тип данных для хранения id документа</p></li>
<li><span class="b">Regular expression</span>: применяется для хранения регулярных выражений</p></li>
<li><span class="b">Decimal128</span>: тип данных для хранения десятичных дробных чисел размером 128 бит, которые позволяют решить проблемы с проблемой точности вычислений 
при использовании дробных чисел, которые представляют тип Double.</p></li>
<li><span class="b">Timestamp</span>: применяется для хранения времени</p></li>
</ul>
<p>В отличие от строк документы могут содержать разнородную информацию. Так, рядом с документом, описанным выше, в одной коллекции 
может находиться другой объект, например:</p>
<pre class="brush:js;">
{
    "name": "Bob",
    "birthday": "1985.06.28",
	"place" : "Berlin",
	"languages" :[
		"english",
		"german",
		"spanish"
	]
}
</pre>
<p>Казалось бы разные объекты за исключением отдельных свойств, но все они могут находиться в одной коллекции.</p>
<p>Еще пара важных замечаний: в MongoDB запросы обладают регистрозависимостью и строгой типизацией. То есть следующие два документа не будут 
идентичны:</p>
<pre class="brush:js">
{"age" : "28"}
{"age" : 28}
</pre>
<p>Если в первом случае для ключа age определена в качестве значения строка, то во втором случае значением является число.</p>
<h3>Идентификатор документа</h3>
<p>Для каждого документа в MongoDB определен уникальный идентификатор, который называется <code>_id</code>. При добавлении документа в коллекцию 
данный идентификатор создается автоматически. Однако разработчик может сам явным образом задать идентификатор, а не полагаться на автоматически генерируемые, 
указав соответствующий ключ и его значение в документе.</p>
<p>Данное поле должно иметь уникальное значение в рамках коллекции. И если мы попробуем добавить в коллекцию два документа с одинаковым идентификатором, то добавится только один из них, а при добавлении второго мы получим ошибку.</p>
<p>Если идентификатор не задан явно, то MongoDB создает специальное бинарное значение размером 12 байт. Это значение состоит из нескольких 
сегментов: значение типа <code>timestamp</code> размером 4 байта (которое представляет количество секунд с момента начала эпохи Unix), 
случайное число из 5 байт и счетчик из 3 байт, который инициализирован случайным числом. 
Такая модель построения идентификатора гарантирует с высокой долей вероятности, что он будет иметь уникальное значение.</p>
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


<div class="nav"><p><a href="./1.3.php">Назад</a><a href="./">Содержание</a><a href="./2.2.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в MongoDB</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/1.1.php">Что такое MongoDB</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/1.2.php">Начало работы с MongoDB на Windows</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/1.4.php">Начало работы с MongoDB на Mac OS</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/1.3.php">Графический клиент Compass</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Работа с базой данных MongoDB</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.1.php">Устройство базы данных. Документы</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.2.php">Установка и администрирование базы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.3.php">Добавление данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.4.php">Выборка из БД</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.7.php">Команды группировки</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.8.php">Операторы выборки</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.9.php">Обновление данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.10.php">Удаление данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.11.php">Установка ссылок в БД</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.12.php">Работа с индексами</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.13.php">Управление коллекцией</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/2.5.php">Работа с данными в MongoDB Compass</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. PHP и MongoDB</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.1.php">Установка драйвера для PHP</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.2.php">Подключение к MongoDB</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.3.php">Добавление данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.4.php">Выборка документов</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.5.php">Управление выборкой</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.6.php">Условные операторы</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.7.php">Обновление документов</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.8.php">Удаление данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.9.php">Работа с DBRef</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/3.10.php">Работа с GridFS</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. C# и MongoDB</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.1.php">Установка драйвера и подключение к базе данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.2.php">Взаимодействие с коллекцией. Документы</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.3.php">Работа с моделями данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.4.php">Настройка модели с помощью атрибутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.5.php">Сохранение документов в базу данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.6.php">Выборка из базы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.7.php">Фильтрация данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.8.php">Интерфейс IFindFluent и его методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.9.php">Агрегация и группировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.10.php">Редактирование и удаление документов</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.16.php">Метод BulkWriteAsync</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.11.php">Работа с GridFS</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.12.php">MongoDB и ASP.NET MVC. Создание проекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.13.php">MongoDB и ASP.NET MVC. Чтение и добавление данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.14.php">MongoDB и ASP.NET MVC. Редактирование и удаление</a></span></li>
			<li><span class="file"><a href="//metanit.com/nosql/mongodb/4.15.php">MongoDB и ASP.NET MVC. Работа с файлами изображений</a></span></li>
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
	$("li:contains('Глава 2.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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
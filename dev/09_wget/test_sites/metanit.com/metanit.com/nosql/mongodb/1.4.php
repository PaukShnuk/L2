<!DOCTYPE html>
<html >
<head>
<title>MongoDB | Установка и начало работы на Mac OS</title>
<meta charset="utf-8" />
<meta name="description" content="Особенности установки MongoDB на Mac OS через homebrew, запуск mongodb">
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
<h2>Установка и начало работы с MongoDB на Mac OS</h2><div class="date">Последнее обновление: 12.03.2022</div>

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

<p>Для установки MongoDB на Mac OS рекомендуемым и при этом наиболее простым способом является применение пакетного менеджера <span class="b">homebrew</span>. 
Поэтому для начала необходимо установить сам пакетный менеджер <a href="https://brew.sh/" rel="nofollow" target="_blank">homebrew</a>. 
Для этого в терминале необходимо выполнить команду</p>
<div class="console"><pre class="consoletext">/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"</pre></div>
<h3>Установка mongodb</h3>
<p>После установки homebrew для установки mongodb введем в терминале следующую команду</p>
<div class="console"><pre class="consoletext">brew tap mongodb/brew</pre></div>
<p>И после этого введем в терминале еще одну команду:</p>
<div class="console"><pre class="consoletext">brew install mongodb-community@5.0</pre></div>
<p>Обратите внимание на цифры версии - <span class="b">mongodb-community@5.0</span>. То есть в данном случае устанавливается версия 5.0 Community-выпуска Mongo. Но 
при необходимости можно изменить эти цифры и задать другую версию.</p>
<p>В процессе установки будут установлены следующие файлы:</p>
<ul>
<li><p><span class="b">mongosh</span>: представляет консольный интерфейс для взаимодействия с базами данных, своего рода консольный клиент</p></li>
<li><p><span class="b">mongod</span>: сервер баз данных MongoDB. Он обрабатывает запросы, управляет форматом данных и выполняет различные 
операции в фоновом режиме по управлению базами данных</p></li>
<li><p><span class="b">mongos</span>: служба маршрутизации MongoDB, которая помогает обрабатывать запросы и определять местоположение данных в кластере 
MongoDB</p></li>
</ul>
<p>Кроме того, при установке в зависимости от архитектуры компьютера (intel или arm) будут созданы следующие файлы и каталоги:</p>
<table class="tab">
<tr class="tabhead"><td><p>Файлы/Каталоги</p></td><td><p>Intel</p></td><td><p>Apple M1 </p></td></tr>
<tr><td><p>Файл конфигурации</p></td><td><p>/usr/local/etc/mongod.conf</p></td><td><p>/opt/homebrew/etc/mongod.conf</p></td></tr>
<tr><td><p>Каталог логов</p></td><td><p>/usr/local/var/log/mongodb</p></td><td><p>/opt/homebrew/var/log/mongodb</p></td></tr>
<tr><td><p>Каталог баз данных</p></td><td><p>/usr/local/var/mongodb</p></td><td><p>/opt/homebrew/var/mongodb</p></td></tr>
</table>
<h3>Запуск MongoDB</h3>
<p>Для запуска сервера MongoDB выполним в терминале следующую команду:</p>
<div class="console"><pre class="consoletext">brew services start mongodb-community@5.0</pre></div>
<p>Для отключения сервера применяется команда</p>
<div class="console"><pre class="consoletext">brew services stop mongodb-community@5.0</pre></div>

<h3>Подключение к серверу MongoDB</h3>
<p>Итак, после удачного запуска сервера мы сможем производить операции с бд через оболочку <span class="b">mongosh</span>. Запустим ее, выполнив в терминале 
команду:</p>
<div class="console"><pre class="consoletext">mongosh</pre></div>
<img src="./pics/mac1.png" alt="консольная оболочка mongosh для работы с базой данных MongoDB на Mac OS" />
<p>Это консольная оболочка для взаимодействия с сервером, через которую можно управлять данными. Второй строкой эта оболочка говорит о подключении к серверу mongod.</p>
<p>Теперь поизведем какие-либо простейшие действия. Введем в терминале последовательно следующие команды и после каждой команды нажмем на Enter:</p>
<pre class="brush:js;">
use userdb
db.users.insertOne( { name: "Tom" } )
db.users.find()
</pre>
<p>Первая команда <span class="b">use userdb</span> устанавливает в качестве используемой базу данных userdb. Даже если такой бд нет, 
то она создается автоматически. И далее <code>db</code> будет представлять текущую базу данных - то есть базу данных userdb. После db идет 
<code>users</code> - это коллекция, в которую затем мы добавляем новый объект. Если в SQL нам надо создавать таблицы заранее, то коллекции 
MongoDB создает самостоятельно при их отсутствии.</p>
<p>С помощью метода <span class="b">db.users.insertOne()</span> в коллекцию users базы данных userdb добавляется объект <code>{ name: "Tom" }</code>. 
Описание добавляемого объекта определяется в формате, с которым вы возможно знакомы, если имели дело с форматом JSON. То есть в данном случае у объекта 
определен один ключ "name", которому сопоставляется значение "Tom". То есть мы добавляем пользователя с именем Tom.</p>
<p>Если объект был успешно добавлен, то консоль выведет результат операции, в частности, идентификатор добавленного объекта.</p>
<p>А третья команда <span class="b">db.users.find()</span> выводит на экран все объекты из бд test.</p>
<img src="./pics/mac2.png" alt="Начало работы с базой данных MongoDB на Mac OS" />
<p>Из вывода вы можете увидеть, что к начальным значениям объекта было добавлено какое-то непонятно поле <span class="b">ObjectId</span>. 
Как вы помните, MongoDB в качестве уникальных идентификаторов документа использует поле <code>_id</code>. И в данном случае ObjectId как 
раз и представляет значение для идентификатора _id.</p>
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


<div class="nav"><p><a href="./1.2.php">Назад</a><a href="./">Содержание</a><a href="./1.3.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 1.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 1.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
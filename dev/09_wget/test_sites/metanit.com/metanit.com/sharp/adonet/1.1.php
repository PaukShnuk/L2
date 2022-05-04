<!DOCTYPE html>
<html >
<head>
<title>Введение в ADO.NET</title>
<meta charset="utf-8" />
<meta name="description" content="ADO.NET предоставляет собой технологию работы с данными, которая основана на платформе .NET Framework">
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
<h1>Введение в ADO.NET</h1>
<h2>Что такое ADO.NET?</h2><p style="color:red;">Данное руководство устарело. Актуальное руководство: <a href="https://metanit.com/sharp/adonetcore/">по ADO.NET и работе с базами данных в .NET 6</a></p><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Сегодня большое значение имеет работа с данными. Для хранения данных используются различные системы управления базами данных: 
MS SQL Server, Oracle, MySQL и так далее. И большинство крупных приложений так или иначе используют для хранения данных эти системы управления базами данных. Однако 
чтобы осуществлять связь между базой данных и приложением на C# необходим посредник. И именно таким посредником является технология 
ADO.NET.</p>
<p>ADO.NET предоставляет собой технологию работы с данными, которая основана на платформе .NET Framework. Эта технология представляет нам набор классов, 
через которые мы можем отправлять запросы к базам данных, устанавливать подключения, получать ответ от базы данных и производить ряд других операций.</p>
<p>Причем важно отметить, что систем управления баз данных может быть множество. В своей сущности они могут различаться. MS SQL Server, 
например, для создания запросов использует язык T-SQL, а MySQL и Oracle применяют язык PL-SQL. Разные системы баз данных могут иметь 
разные типы данных. Также могут различаться какие-то другие моменты. Однако функционал ADO.NET построен таким образом, чтобы предоставить разработчикам унифицированный интерфейс для работы 
с самыми различными СУБД.</p>
<p>Основу интерфейса взаимодействия с базами данных в ADO.NET представляет ограниченный круг объектов: Connection, Command, 
DataReader, DataSet и DataAdapter. С помощью объекта <span class="bb">Connection</span> происходит установка подключения к источнику данных. 
Объект <span class="bb">Command</span> позволяет выполнять операции с данными из БД. Объект <span class="bb">DataReader</span> 
считывает полученные в результате запроса данные. Объект <span class="bb">DataSet</span> предназначен для хранения данных из БД и позволяет работать с ними 
независимо от БД. И объект <span class="bb">DataAdapter</span> является посредником между DataSet и источником данных. Главным образом, 
через эти объекты и будет идти работа с базой данных.</p>
<p>Однако чтобы использовать один и тот же набор объектов для разных источников данных, необходим соответствующий <span class="bb">провайдер данных</span>. 
Собственно через провайдер данных в ADO.NET и осуществляется взаимодействие с базой данных. Причем для каждого источника данных в 
ADO.NET может быть свой провайдер, который собственно и определяет конкретную реализацию вышеуказанных классов.</p>
<p>По умолчанию в ADO.NET имеются следующие встроенные провайдеры:</p>
<ul>
<li><p>Провайдер для MS SQL Server</p></li>
<li><p>Провайдер для OLE DB (Предоставляет доступ к некоторым старым версиям MS SQL Server, а также к БД Access, DB2, MySQL и Oracle)</p></li>
<li><p>Провайдер для ODBC (Провайдер для тех источников данных, для которых нет своих провайдеров)</p></li>
<li><p>Провайдер для Oracle</p></li>
<li><p>Провайдер EntityClient. Провайдер данных для технологии ORM Entity Framework</p></li>
<li><p>Провайдер для сервера SQL Server Compact 4.0</p></li>
</ul>
<p>Кроме этих провайдеров, которые являются встроенными, существует также множество других, предназначенных для различных баз данных, например, 
для MySQL.</p>
<p>Основные пространства имен, которые используются в ADO.NET:</p>
<ul>
<li><p><code>System.Data</code>: определяет классы, интерфейсы, делегаты, которые реализуют архитектуру ADO.NET</p></li>
<li><p><code>System.Data.Common</code>: содержит классы, общие для всех провайдеров ADO.NET</p></li>
<li><p><code>System.Data.Design</code>: определяет классы, которые используются для создания своих собственных наборов данных</p></li>
<li><p><code>System.Data.Odbc</code>: определяет функциональность провайдера данных для ODBC</p></li>
<li><p><code>System.Data.OleDb</code>: определяет функциональность провайдера данных для OLE DB</p></li>
<li><p><code>System.Data.Sql</code>: хранит классы, которые поддерживают специфичную для SQL Server функциональность</p></li>
<li><p><code>System.Data.OracleClient</code>: определяет функциональность провайдера для баз данных Oracle</p></li>
<li><p><code>System.Data.SqlClient</code>: определяет функциональность провайдера для баз данных MS SQL Server</p></li>
<li><p><code>System.Data.SqlServerCe</code>: определяет функциональность провайдера для SQL Server Compact 4.0</p></li>
<li><p><code>System.Data.SqlTypes</code>: содержит классы для типов данных MS SQL Servera</p></li>
<li><p><code>Microsoft.SqlServer.Server</code>: хранит компоненты для взаимодействия SQL Server и среды CLR</p></li>
</ul>
<p>Схематично архитектуру ADO.NET можно представить следующим образом:</p>
<img src="pics/ado.net.png" alt="Архитектура ADO.NET" />
<p>Функционально классы ADO.NET можно разбить на два уровня: подключенный и отключенный. Каждый провайдер данных .NET реализует свои 
версии объектов Connection, Command, DataReader, DataAdapter и ряда других, который составляют подключенный уровень. То есть с помощью них устанавливается подключение 
к БД и выполняется с ней взаимодействие. Как правило, реализации этих объектов для каждого конкретного провайдера в своем названии имеют префикс, который указывает на провайдер:</p>
<img src="pics/dataproviders.png" alt="Провайдеры ADO.NET" />
<p>Другие классы, такие как DataSet, DataTable, DataRow, DataColumn и ряд других составляют отключенный уровень, так как после извлечения данных в 
DataSet мы можем работать с этими данными независимо от того, установлено ли подключение или нет. То есть после получения данных из БД приложение может быть 
отключено от источника данных.</p>
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


<div class="nav"><p><a href="./">Содержание</a><a href="2.1.php">Вперед</a></p></div></div>
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
		<li class="closed"><span class="folder">Глава 1. Введение в ADO.NET</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/1.1.php">Что такое ADO.NET?</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. C# и MS SQL Server</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/2.1.php">Создание базы данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/2.2.php">Строка подключения</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/2.3.php">Создание подключения</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/2.4.php">Пул подключений</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/2.5.php">Выполнение команд и SqlCommand</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/2.6.php">Чтение результатов запроса и SqlDataReader</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/2.7.php">Типизация результатов SqlDataReader</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/2.8.php">Получение скалярных значений</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/2.9.php">Параметризация запросов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/2.10.php">Выходные параметры запросов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/2.11.php">Работа с хранимыми процедурами</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/2.12.php">Выходные параметры хранимых процедур</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/2.13.php">Транзакции</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/2.14.php">Сохранение и извлечение файлов из базы данных</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 3. Работа с SqlDataAdapter и DataSet</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/3.1.php">SqlDataAdapter и DataSet</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/3.2.php">Постраничный просмотр в SqlDataAdapter</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/3.3.php">SqlCommandBuilder и сохранение изменений DataSet в базе данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/3.4.php">Обновление БД из DataSet вручную</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/3.5.php">Все операции с БД в графическом приложении</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/3.6.php">DataSet и DataTable</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/3.7.php">Отношения между таблицами в DataSet</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/3.8.php">LINQ to DataSet</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/3.9.php">DataSet и XML</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 4. LINQ to SQL</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/4.1.php">Определение контекста данных и моделей</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/4.2.php">Операции с данными в LINQ to SQL</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/4.3.php">Изменение объектов в LINQ to SQL</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/4.4.php">Добавление в LINQ to SQL</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/4.5.php">Удаление в LINQ to SQL</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonet/4.6.php">Методы ExecuteCommand и ExecuteQuery. Хранимые процедуры</a></span></li>
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
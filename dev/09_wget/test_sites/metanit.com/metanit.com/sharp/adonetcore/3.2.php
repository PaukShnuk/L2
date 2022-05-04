<!DOCTYPE html>
<html >
<head>
<title>ADO.NET и C# | Работа с DataSet без базы данных</title>
<meta charset="utf-8" />
<meta name="description" content="Работа с DataSet без базы данных в ADO.NET и C#, классы DataTable, DataColumn и DataRow, добавление в DataSet столбцов, строк и данных">
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
<h2>Работа с DataSet без базы данных</h2><div class="date">Последнее обновление: 14.02.2021</div>

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

<p>В прошлой теме для получения данных в DataSet приходилось подключаться к БД. Но в реальности DataSet - самодостаточный класс, с которым можно 
работать без подключения к базе данных, если нам не нужно никакого подключения к БД, не надо загужать данные. Такой сценарий не так сильно 
распространен и явно требуется не часто, если вообще требуется. Тем не менее рассмотрим, как мы можем работать с объектами DataSet и DataTable без какой-либо базы данных.</p>
<p>Например, создадим вручную в DataSet таблицу, определим ее структуру и добавим в нее данные:</p>
<pre class="brush:c#;">
using System;
using System.Data;

namespace HelloApp
{
    class Program
    {
        static void Main(string[] args)
        {
            DataSet usersSet = new DataSet("UsersSet");
            DataTable users = new DataTable("Users");
            // добавляем таблицу в dataset
            usersSet.Tables.Add(users);

            // создаем столбцы для таблицы Users
            DataColumn idColumn = new DataColumn("Id", Type.GetType("System.Int32"));
            idColumn.Unique = true; // столбец будет иметь уникальное значение
            idColumn.AllowDBNull = false; // не может принимать null
            idColumn.AutoIncrement = true; // будет автоинкрементироваться
            idColumn.AutoIncrementSeed = 1; // начальное значение
            idColumn.AutoIncrementStep = 1; // приращении при добавлении новой строки

            DataColumn nameColumn = new DataColumn("Name", Type.GetType("System.String"));
            DataColumn ageColumn = new DataColumn("Age", Type.GetType("System.Int32"));
            ageColumn.DefaultValue = 1; // значение по умолчанию

            users.Columns.Add(idColumn);
            users.Columns.Add(nameColumn);
            users.Columns.Add(ageColumn);
            // определяем первичный ключ таблицы Users
            users.PrimaryKey = new DataColumn[] { users.Columns["Id"] };

            DataRow row = users.NewRow();
            row.ItemArray = new object[] { null, "Tom", 36 };
            users.Rows.Add(row); // добавляем первую строку
            users.Rows.Add(new object[] { null, "Bob", 29 }); // добавляем вторую строку

            Console.Write("Id\t Имя\t Возраст\t");
            Console.WriteLine();
            foreach (DataRow r in users.Rows)
            {
                foreach (var cell in r.ItemArray)
                    Console.Write("{0}\t", cell);
                Console.WriteLine();
            }
            Console.Read();
        }
    }
}
</pre>
<p>Консольный вывод программы:</p>
<div class="console">
<pre class="consoletext">
Id		Имя		Возраст
1		Tom		36
2		Bob		29
</pre>
</div>
<p>Разберем весь код. Сначала создаются объекты <code>DataSet</code> и <code>DataTable</code>, в конструктор которых передается название. 
Затем создается три столбца <code>DataColumn</code>. Каждый столбец в конструкторе принимает два параметра: имя столбца и его тип.</p>
<pre class="brush:c#;">DataColumn idColumn = new DataColumn("Id", Type.GetType("System.Int32"));</pre>
<p>Причем для столбца Id устанавливается, что значения этого столбца должны иметь уникальное значение, не должны принимать null, и 
их значение при добавлении нового объекта будет инкрементироваться на единицу. То есть фактически это стандартный столбец Id, как в большинстве баз данных.</p>
<p>Далее создается еще два столбца - nameColumn и ageColumn. Затем устанавливается первичный ключ для таблицы с помощью свойства PrimaryKey:</p>
<pre class="brush:c#;">users.PrimaryKey = new DataColumn[] { users.Columns["Id"] };</pre>
<p>В роли первичного ключа выступает столбец Id. Но мы также можем использовать набор различных столбцов для создания составного ключа.</p>
<p>После определения схемы таблицы в нее добавляются две строки:</p>
<pre class="brush:c#;">
DataRow row = users.NewRow();
row.ItemArray = new object[] { null, "Tom", 36 };
users.Rows.Add(row); // добавляем первую строку
users.Rows.Add(new object[] { null, "Bob", 29 }); // добавляем вторую строку
</pre>
<p>Значения в метод <code>users.Rows.Add()</code> можно передать как напрямую в виде массива объектов, так и в виде объекта <code>DataRow</code>. 
При этом нам надо передать ровно столько значений, сколько в таблице столбцов. Однако поскольку первый столбец Id устанавливается через 
автоинкремент, мы можем передать значение <code>null</code> - оно все равно будет игнорироваться. 
Также мы можем опустить значение для третьего столбца - Age, так как у него установлено свойство <code>DefaultValue</code>, 
которое устанавливает значение по умолчанию, если значение отсутствует:</p>
<pre class="brush:c#;">users.Rows.Add(new object[] { null, "Bob", 29 });</pre>
<p>И в конце идет перебор строк таблицы.</p>
<p>Кроме добавления мы можем производить и другие операции со строками. Например, мы можем получить строку по индексу:</p>
<pre class="brush:c#;">DataRow row = users.Rows[0]; // первая строка</pre>
<p>Получив строку по индексу, можно изменить ее ячейки. Изменить ячейку можно, используя либо индекс, либо название столбца. 
Например, изменение третий ячейки (индекс столбца - 2):</p>
<pre class="brush:c#;">users.Rows[0][2] = 30; //третьей ячейке первой строки присваивается значение 30</pre>
<p>Или изменение ячейки для столбца с названием "Age":</p>
<pre class="brush:c#;">users.Rows[0]["Age"] = 30;</pre>
<p>И также можно удалять строку:</p>
<pre class="brush:c#;">
users.Rows.RemoveAt(1); // удаление второй строки по индексу
// другой сопосб удаления
DataRow row = users.Rows[0];
users.Rows.Remove(row);
</pre>
<p>Используя метод <code>Select()</code> объекта DataTable мы легко можем найти строки, которые соответствуют определенному критерию. 
Например, получим строки, в которых возраст больше 30:</p>
<pre class="brush:c#;">
var selectedUsers = users.Select("Age &gt; 30");
foreach (var user in selectedUsers)
	Console.WriteLine($"{user["Name"]} - {user["Age"]}");
</pre>
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


<div class="nav"><p><a href="3.1.php">Назад</a><a href="./">Содержание</a><a href="3.3.php">Вперед</a></p></div></div>
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
		
		<li class="closed"><span class="folder">Глава 1. MS SQL Server в .NET 5</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/2.1.php">Строка подключения для MS SQL Server</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/2.2.php">Подключение к MS SQL Server</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/2.3.php">Пул подключений</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/2.4.php">Выполнение команд и SqlCommand</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/2.5.php">Чтение результатов запроса и SqlDataReader</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/2.6.php">Типизация результатов SqlDataReader. Сопоставление типов C# и SQL</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/2.7.php">Получение скалярных значений</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/2.8.php">Параметризация запросов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/2.9.php">Выходные параметры запросов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/2.10.php">Добавление и выполнение хранимых процедур</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/2.11.php">Выходные параметры хранимых процедур</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/2.12.php">Транзакции</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/2.13.php">Сохранение и извлечение файлов из базы данных</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. DataSet</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/3.1.php">SqlDataAdapter и загрузка данных в DataSet</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/3.2.php">Работа с DataSet без базы данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/3.3.php">Сохранение изменений DataSet в базе данных</a></span></li>
			</ul>
		</li>
		
		<li class="closed"><span class="folder">Глава 3. SQLite в C# и .NET</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/4.1.php">Подключение к базе данных SQLite</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/4.2.php">Выполнение запросов к БД SQLite и SqliteCommand</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/4.3.php">Чтение результатов запроса и SqliteDataReader</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/4.4.php">Сопоставление типов C# и SQLite. Типизация SqliteDataReader</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/4.5.php">Параметризация запросов к БД Sqlite</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/4.6.php">Получение скалярных значений в SQLite</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/adonetcore/4.7.php">Сохранение и извлечение файлов из базы данных SQLite</a></span></li>
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
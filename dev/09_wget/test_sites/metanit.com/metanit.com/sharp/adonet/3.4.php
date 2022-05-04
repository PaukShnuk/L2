<!DOCTYPE html>
<html >
<head>
<title>Обновление БД из DataSet вручную в C#</title>
<meta charset="utf-8" />
<meta name="description" content="Сохранение всех изменений из DataSet в базу данных MS SQL Server с помощью хранимых процедур в C#">
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
<h2>Обновление БД из DataSet вручную</h2><p style="color:red;">Данное руководство устарело. Актуальное руководство: <a href="https://metanit.com/sharp/adonetcore/">по ADO.NET и работе с базами данных в .NET 6</a></p><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Хотя в предыдущей теме объект SqlCommandBuilder позволял нам автоматически создать все нужные выражения для обновления данных в БД из 
DataSet, но все же этот способ имеет свои недостатки. Например, взглянем на следующий кусочек кода, который использовался в прошлой теме:</p>
<pre class="brush:c#;">
SqlCommandBuilder commandBuilder = new SqlCommandBuilder(adapter);
adapter.Update(ds);
ds.Clear();
adapter.Fill(ds);
</pre>
<p>После обновления происходит очистка DataSet и перезагрузка данных, что снижает производительность приложения. Хотя в DataTable у нас уже добавлена строка с новыми данными, и в ней 
не хватает только id - значения, которое генерируется самой базой данных при добавлении. Без id нам трудно будет управлять данными, мы не сможем их автоматически 
через тот же SqlCommandBuilder обновлять или удалять. Поэтому в идеале хотелось бы избежать и перезагрузки данных и в то же время получить id новой записи при выполнении 
метода adapter.Update. И более гибкий способ состоит в том, что мы сами вручную определяем все те выражения, которые будут выполняться.</p>
<p>Итак, добавим в базу данных следующую хранимую процедуру:</p>
<pre class="brush:sql;">
CREATE PROCEDURE [dbo].[sp_CreateUser]
    @name nvarchar(50),
    @age int,
	@Id int out
AS
    INSERT INTO Users (Name, Age)
    VALUES (@name, @age)
 
    SET @Id=SCOPE_IDENTITY()
GO
</pre>
<p>В качестве входных параметров она принимает имя и возраст пользователя и возвращает его id.</p>
<p>Теперь изменим код из прошлой темы:</p>
<pre class="brush:c#;">
static string connectionString = @"Data Source=.\SQLEXPRESS;Initial Catalog=usersdb;Integrated Security=True";
static void Main(string[] args) 
{
    string sql = "SELECT * FROM Users";
    using (SqlConnection connection = new SqlConnection(connectionString))
    {
        connection.Open();
        SqlDataAdapter adapter = new SqlDataAdapter(sql, connection);
        SqlCommandBuilder commandBuilder = new SqlCommandBuilder(adapter);

		// устанавливаем команду на вставку
        adapter.InsertCommand = new SqlCommand("sp_CreateUser", connection);
		// это будет зранимая процедура
        adapter.InsertCommand.CommandType = CommandType.StoredProcedure;
		// добавляем параметр для name
        adapter.InsertCommand.Parameters.Add(new SqlParameter("@name", SqlDbType.NVarChar, 50, "Name"));
		// добавляем параметр для age
        adapter.InsertCommand.Parameters.Add(new SqlParameter("@age", SqlDbType.Int, 0, "Age"));
		// добавляем выходной параметр для id
        SqlParameter parameter = adapter.InsertCommand.Parameters.Add("@Id", SqlDbType.Int, 0, "Id");
        parameter.Direction = ParameterDirection.Output;
		
		DataSet ds = new DataSet();
        adapter.Fill(ds);

        DataTable dt = ds.Tables[0];
        // добавим новую строку
        DataRow newRow = dt.NewRow();
        newRow["Name"] = "Kris";
        newRow["Age"] = 26;
        dt.Rows.Add(newRow);

        adapter.Update(ds);
        ds.AcceptChanges();
        foreach (DataColumn column in dt.Columns)
            Console.Write("\t{0}", column.ColumnName);
        Console.WriteLine();
        // перебор всех строк таблицы
        foreach (DataRow row in dt.Rows)
        {
            // получаем все ячейки строки
            var cells = row.ItemArray;
            foreach (object cell in cells)
                Console.Write("\t{0}", cell);
            Console.WriteLine();
        }
	}
	Console.Read();
}
</pre>
<img src="pics/insertcommand.png" alt="InsertCommand и SqlDataAdapter" />
<p>Здесь также используется SqlCommandBuilder, но теперь из-за переустановки свойства <code>adapter.InsertCommand</code> выполнение добавления 
нового объекта будет переопределено.</p>
<p>При определении выходного параметра мы указываем, что он будет называться "@Id" и будет возвращать значение для столбца Id в DataTable:</p>
<pre class="brush:c#;">adapter.InsertCommand.Parameters.Add("@Id", SqlDbType.Int, 0, "Id");</pre>
<p>В итоге при выполнении метода <code>adapter.Update()</code> id автоматически попадет в DataTable. При этом операции по обновлению и удалению мы можем использовать те же, 
что предоставляет SqlCommandBuilder.</p>
<p>И после обновления базы данных с помощью метода <code>AcceptChanges()</code> объекта DataSet производится принятие всех изменений в 
DataSet ко всем измененным строкам.</p>
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


<div class="nav"><p><a href="3.3.php">Назад</a><a href="./">Содержание</a><a href="3.5.php">Вперед</a></p></div></div>
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
<!DOCTYPE html>
<html >
<head>
<title>ADO.NET и MS SQL Server | Пул подключений</title>
<meta charset="utf-8" />
<meta name="description" content="Пул подключений к MS SQL Server в ADO.NET и C#, управление пулом с помощью параметров Pooling, Min Pool Size и Max Pool Size, очищение пула и методы ClearAllPools и ClearPool">
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
<h2>Пул подключений</h2><div class="date">Последнее обновление: 08.02.2021</div>

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

<p>Осуществлние подключения к базе данных представляет довольно затратную с точки зрения времени операцию, посколько в процессе подключения 
системе надо выполнить кучу шагов: парсинг строки подключения, проверка подключения сервером и т.д. При этом в программе, как правило, 
используются по несколько раз одни и те же конфигурации подключения (которые имеют одну и ту же строку подключения). 
И чтобы оптимизировать процессе подключения, в ADO.NET используется механизм <span class="b">пула подключений</span>.</p>
<p>Пул подключений позволяет использовать ранее созданные подключения. Так, если параметр <code>Pooling</code> в строке подключения равен <code>true</code> (по умолчанию он равен true), то после 
закрытия подключения с помощью метода <code>Close()/CloseAsync()</code> закрытое подключение возвращается в пул подключений, где оно 
оно готово к повторному использованию при следующем вызове метода <code>Open()/OpenAsync()</code>. Когда менеджер подключений, который управляет пулом, 
получает запрос на открытие нового подключения с помощью метода <code>Open()/OpenAsync()</code>, то он проверяет все подключения пула.</p>
<p>Если менеджер подключений для находит в пуле доступное подключение с необходимой конфигурацией, которое в текущий момент не 
используется, то оно возвращается для использования. Если же доступного подключения нет, и максимальный размер пула еще не превышен (по умолчанию размер равен 100), то создается новое подключение. Если доступного подключения нет, но при этом превышен максимальный размер пула, 
то новое подключение добавляется в очередь и ожидает, пока в пуле не освободится место, и тогда оно станет доступным.</p>
<p>Например, в следующем примере несмотря на закрытие подключения программа в обоих случаях будет использовать одно и то же подключение, что 
мы можем определить по совпадающему идентификатору подключения:</p>
<pre class="brush:c#;">
using Microsoft.Data.SqlClient;
using System;
using System.Threading.Tasks;

namespace HelloApp
{
    class Program
    {
        static async Task Main(string[] args)
        {
            using(SqlConnection connection = new SqlConnection(connectionString))
            {
                await connection.OpenAsync();
                Console.WriteLine(connection.ClientConnectionId);
            }
            using (SqlConnection connection = new SqlConnection(connectionString))
            {
                await connection.OpenAsync();
                Console.WriteLine(connection.ClientConnectionId);
            }
            Console.WriteLine("Программа завершила работу.");
            Console.Read();
        }
    }
}
</pre>
<p>Например, в моем случае консольный вывод будет следующим:</p>
<div class="console">
<pre class="consoletext">
950d8a37-50a8-44e3-8778-ade70e5415d6
950d8a37-50a8-44e3-8778-ade70e5415d6
Программа завершила работу.
</pre>
</div>
<p>В пул помещаются подключения только с одинаковой конфигурацией. ADO.NET поддерживает несколько пулов одновременно, и для каждой конфигурации 
строки подключения создается свой собственный пул.</p>
<p>Все подключения в пуле различаются по нескольким признакам:</p>
<ul>
<li><p>строка подключения</p></li>
<li><p>учетные записи, используемые при подключении</p></li>
<li><p>процесс приложения</p></li>
</ul>
<p>В следующем примере в первом и третьем блоках using будет использоваться одно и то же подключение из пула, поскольку строка подключения будет совпадать:</p>
<pre class="brush:c#;">
using Microsoft.Data.SqlClient;
using System;
using System.Threading.Tasks;

namespace HelloApp
{
    class Program
    {
        static async Task Main(string[] args)
        {
            string connectionString = "Server=(localdb)\\mssqllocaldb;Database=master;Trusted_Connection=True;";
            string connectionString2 = "Server=(localdb)\\mssqllocaldb;Database=tempdb;Trusted_Connection=True;";

            using (SqlConnection connection = new SqlConnection(connectionString))
            {
                await connection.OpenAsync();
                Console.WriteLine(connection.ClientConnectionId);
            }
            using (SqlConnection connection = new SqlConnection(connectionString2))
            {
                await connection.OpenAsync();
                Console.WriteLine(connection.ClientConnectionId);
            }
            using (SqlConnection connection = new SqlConnection(connectionString))
            {
                await connection.OpenAsync();
                Console.WriteLine(connection.ClientConnectionId);
            }
            Console.WriteLine("Программа завершила работу.");
            Console.Read();
        }
    }
}
</pre>
<p>Консольный вывод в моем случае будет следующим:</p>
<div class="console">
<pre class="consoletext">
5df81b79-6229-4ba6-bb46-1671229cb4c1
8c509b49-62ac-4731-892d-16e3a68f5b7e
5df81b79-6229-4ba6-bb46-1671229cb4c1
Программа завершила работу.
</pre>
</div>
<h3>Управление пулом</h3>
<p>Стоит отметить, что подключение добавляется в пул, если параметр <span class="b">Pooling</span> равен <code>true</code>. Хотя, выше в 
примерах в строках подключенияя этот параметр не указан, но по умолчанию он равен <code>true</code>. Однако, присвоив значение <code>false</code>, 
мы можем отключить пуллинг подключения:</p>
<pre class="brush:c#;">
using Microsoft.Data.SqlClient;
using System;
using System.Threading.Tasks;

namespace HelloApp
{
    class Program
    {
        static async Task Main(string[] args)
        {
            string connectionString = "Server=(localdb)\\mssqllocaldb;Database=master;Trusted_Connection=True;";
            string connectionString2 = "Server=(localdb)\\mssqllocaldb;Database=tempdb;Trusted_Connection=True;";

            using (SqlConnection connection = new SqlConnection(connectionString))
            {
                await connection.OpenAsync();
                Console.WriteLine(connection.ClientConnectionId);
            }
            using (SqlConnection connection = new SqlConnection(connectionString2))
            {
                await connection.OpenAsync();
                Console.WriteLine(connection.ClientConnectionId);
            }
            using (SqlConnection connection = new SqlConnection(connectionString))
            {
                await connection.OpenAsync();
                Console.WriteLine(connection.ClientConnectionId);
            }
            Console.WriteLine("Программа завершила работу.");
            Console.Read();
        }
    }
}
</pre>
<p>В этом случае, несмотря на одну и ту же строку подключения идентификаторы подключения не будут совпадать:</p>
<div class="console">
<pre class="consoletext">
b750fdba-5570-47a1-ac84-471c3cc57813
b0ce7a14-3cb8-48c3-b0a7-31c7a2fbc090
Программа завершила работу.
</pre>
</div>
<p>Кроме того, мы можем в строке подключения указать параметры <span class="b">Max Pool Size</span> и <span class="b">Min Pool Size</span>.</p>
<p><span class="b">Max Pool Size</span> указывает на максимальное количество подключений, которое может быть добавлено в пул. Может принимать 
числовое значение начиная с 1, но не мньше значения параметра <span class="b">Min Pool Size</span>. По умолчанию равен 100.</p>
<p><span class="b">Min Pool Size</span> указывает на минимально допустимое количество подключений, которое может быть добавлено в пул. 
Может принимать числовое значение начиная с 0, но не больше значения из параметра <span class="b">Max Pool Size</span>. По умолчанию равен 0.</p>
<p>Если параметр Min Pool Size не указан в строке подключения или его значение равно 0, то подключения в пуле будут закрыты после периода отсутствия активности (4-8 минут), 
либо если разорвана связь с сервером базы данных. Но если значение параметра Min Pool Size больше 0, пул подключений не удаляется, 
пока не завершится процесс приложения.</p>
<p>Кроме того, класс <span class="b">SqlConnection</span> имеет два статических метода для очистки пула:</p>
<ul>
<li><p><span class="b">SqlConnection.ClearPool(connection)</span>: удаляет из пула конкретное подключение SqlConnection, которое передается в качестве параметра</p></li>
<li><p><span class="b">SqlConnection.ClearAllPools()</span>: полностью очищает пул подключений</p></li>
</ul>
<p>Например, в следующем примере создаются два отдельных подключения, поскольку в первом случае подключение удаляется из пула:</p>
<pre class="brush:c#;">
using Microsoft.Data.SqlClient;
using System;
using System.Threading.Tasks;

namespace HelloApp
{
    class Program
    {
        static async Task Main(string[] args)
        {
            string connectionString = "Server=(localdb)\\mssqllocaldb;Database=master;Trusted_Connection=True;";
            using (SqlConnection connection = new SqlConnection(connectionString))
            {
                await connection.OpenAsync();
                Console.WriteLine(connection.ClientConnectionId);


                SqlConnection.ClearPool(connection);
            }
            //SqlConnection.ClearAllPools();
            using (SqlConnection connection = new SqlConnection(connectionString))
            {
                await connection.OpenAsync();
                Console.WriteLine(connection.ClientConnectionId);
            }
            Console.WriteLine("Программа завершила работу.");
            Console.Read();
        }
    }
}
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


<div class="nav"><p><a href="2.2.php">Назад</a><a href="./">Содержание</a><a href="2.4.php">Вперед</a></p></div></div>
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
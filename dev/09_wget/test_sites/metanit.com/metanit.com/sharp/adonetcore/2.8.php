<!DOCTYPE html>
<html >
<head>
<title>ADO.NET и MS SQL Server | Параметризация запросов</title>
<meta charset="utf-8" />
<meta name="description" content="Параметризация запросов к базе данных MS SQL Server в ADO.NET и C#, тип SqlParameter, параметры команд sql, SqlDbType">
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
<h2>Параметризация запросов</h2><div class="date">Последнее обновление: 11.02.2021</div>

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

<p>Ранее для отправки запросов мы напрямую добавляли данные в выражение sql. Например, для отправки запроса на добавление данных в БД применялось следующее 
выражение:</p>
<pre class="brush:c#;">string sqlExpression = $"INSERT INTO Users (Name, Age) VALUES ('{name}', {age})";</pre>
<p>В данном случае предполагается, что значения для переменных name и age вводит пользователь.</p>
<p>Что если переменная name получит следующее значение:</p>
<pre class="brush:c#;">
name = "Tom',10);INSERT INTO Users (Name, Age) VALUES('Hack";
</pre>
<p>В этом случае sql-выражение в итоге будет выглядеть следующим образом:</p>
<pre class="brush:c#;">
INSERT INTO Users (Name, Age) VALUES ('Tom',10);INSERT INTO Users (Name, Age) VALUES('Hack,{age})";
</pre>
<p>В итоге в базу данных будет добавлено два объекта. Это относительно безобидный вид подмены sql-выражения, но реальные возможности 
встраивания зловредных скриптов таковы, что можно вообще потерять данные в БД, если предоставить пользователям подобным образом добавлять 
данные. Чтобы выйти из этой ситуации, в sql-командах используются параметры.</p>
Для определения параметров используется объект <span class="b">SqlParameter</span>. Этот объект имеет ряд конструкторов, наиболее используемые из них:</p>
<ul>
<li><p><span class="b">SqlParameter()</span></p></li>	
<li><p><span class="b">SqlParameter(String, Object)</span>: первый параметр конструктора передает имя, а второй - значение параметра</p></li>		
<li><p><span class="b">SqlParameter(String, SqlDbType)</span>: первый параметр конструктора передает имя параметра, а второй - его тип 
в виде объекта <span class="b">SqlDbType</span></p></li>
<li><p><span class="b">SqlParameter(String, SqlDbType, Int32)</span>: первый параметр конструктора передает имя параметра, второй - его тип 
в виде объекта <span class="b">SqlDbType</span>, а третий - размер</p></li>
<li><p><span class="b">SqlParameter(String, SqlDbType, Int32, String)</span>: конструктор последовательно принимает значения 
для имя параметра, его типа, размера и имени стобца в таблице</p></li>
</ul>
<p>Для конфигурации параметров можно использовать их свойства, среди которых следует выделить следующие:</p>
<ul>
<li><p><span class="b">SqlDbType</span>: задает или устанавливает тип параметра в виде типа SqlDbType</p></li>	
<li><p><span class="b">Direction</span>: хранит направление параметра, которое указывает, будет ли параметр входным или выходным, или он будет сочетать оба варианта, либо он будет возвращать данные из хранимой процедуры</p></li>		
<li><p><span class="b">IsNullable</span>: указывает, допускает ли параметр значение <code>null</code></p></li>
<li><p><span class="b">ParameterName</span>: представляет имя параметра</p></li>
<li><p><span class="b">Size</span>: хранит размер данных параметра</p></li>
<li><p><span class="b">Value</span>: хранит значение параметра</p></li>
</ul>
<p>После определения параметров они добавляются в коллекцию <span class="b">Parameters</span> объекта SqlCommand.</p>
<p>Применим параметры для добавления данных:</p>
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
            string connectionString = "Server=(localdb)\\mssqllocaldb;Database=adonetdb;Trusted_Connection=True;";

            // данные для добавления
            int age = 36;
            string name = "Tom',10);INSERT INTO Users (Name, Age) VALUES('Hack";
            // выражение SQL для добавления данных
            string sqlExpression = "INSERT INTO Users (Name, Age) VALUES (@name, @age)";

            using (SqlConnection connection = new SqlConnection(connectionString))
            {
                await connection.OpenAsync();

                SqlCommand command = new SqlCommand(sqlExpression, connection);

                // создаем параметр для имени
                SqlParameter nameParam = new SqlParameter("@name", name);
                // добавляем параметр к команде
                command.Parameters.Add(nameParam);
                // создаем параметр для возраста
                SqlParameter ageParam = new SqlParameter("@age", age);
                // добавляем параметр к команде
                command.Parameters.Add(ageParam);

                int number = await command.ExecuteNonQueryAsync();
                Console.WriteLine($"Добавлено объектов: {number}");

				// вывод данных
				
                command.CommandText = "SELECT * FROM Users";
                using (SqlDataReader reader = await command.ExecuteReaderAsync())
                {
                    if (reader.HasRows) // если есть данные
                    {
                        // выводим названия столбцов
                        string columnName1 = reader.GetName(0);
                        string columnName2 = reader.GetName(1);
                        string columnName3 = reader.GetName(2);

                        Console.WriteLine($"{columnName1}\t{columnName3}\t{columnName2}");

                        while (await reader.ReadAsync()) // построчно считываем данные
                        {
                            object id = reader.GetValue(0);
                            object name2 = reader.GetValue(2);
                            object age2 = reader.GetValue(1);

                            Console.WriteLine($"{id} \t{name2} \t{age2}");
                        }
                    }
                }
            }
            Console.Read();
        }
    }
}
</pre>
<p>В данном случае в конструктор передается название параметра и его значение. Причем название параметров начинается со знака @ и должно совпадать с тем названием, 
которое используется в sql-выражении:</p>
<pre class="brush:c#;">string sqlExpression = "INSERT INTO Users (Name, Age) VALUES (@name, @age)";</pre>
<p>После определения параметра он добавляется в коллекцию параметров команды.</p>
<pre class="brush:c#";>
SqlParameter nameParam = new SqlParameter("@name", name);
command.Parameters.Add(nameParam);
</pre>
<p>При выполнении команды на место параметров в sql-выражении подставляются их значения. При этом не важно, что параметр @name в 
значении определяет еще одну команду INSERT - все его значение будет добавлено в столбец name в таблице Users.</p>
<p>В итоге последняя добавленная строка будет содержать в столбце Name довольно длинное имя:</p>
<div class="console">
<pre class="consoletext">
Добавлено объектов: 1

Id	Name 	Age
1	Alice	32
2	Bob		28
3	Tom		10
4	Hack	36
5	Tom',10);INSERT INTO Users (Name, Age) VALUES('Hack	36
</pre>
</div>
<p>Подобным образом параметры можно включать и в другие типы запросов, а не только при добавлении данных.</p>
<h3>Установка для параметра типа и размера</h3>
<p>С помощью дополнительных конструкторов класса SqlParameter, а также его свойств можно дополнительно определить тип и размер параметра.</p>
<p>Так, в статье <a href="./2.4.php">Выполнение команд и SqlCommand</a> была создана таблица Users, в которой столбец Name имеет ограничение в 100 символов. 
И если мы попробует добавить в этот столбец строку, которая имеет больше 100 символов, то мы столнемся с исключением. В этом случае мы можем задать для 
параметра соответствующий размер.</p>

<p>Для описания типа параметра применяется перечисление <span class="b">SqlDbType</span> из пространства имен <span class="b">System.Data</span>. 
Его значения сопоставляются с типами T-SQL и C# следующим образом:</p>
<table class="tab">
<tr class="tabhead"><td><p>Тип sql</p></td><td><p>Тип .NET</p></td><td><p>Значение SqlDbType</p></td></tr>
<tr><td><p>bigint</p></td><td><p>Int64</p></td><td><p>BigInt</p></td></tr>
<tr><td><p>binary</p></td><td><p>Byte[]</p></td><td><p>Binary </p></td></tr>
<tr><td><p>bit</p></td><td><p>Boolean</p></td><td><p>Bit</p></td></tr>
<tr><td><p>char</p></td><td><p>String и Char[]</p></td><td><p>Char</p></td></tr>
<tr><td><p>date</p></td><td><p>DateTime</p></td><td><p>Date</p></td></tr>
<tr><td><p>datetime</p></td><td><p>DateTime</p></td><td><p>DateTime</p></td></tr>
<tr><td><p>datetime2</p></td><td><p>DateTime</p></td><td><p>DateTime2</p></td></tr>
<tr><td><p>decimal</p></td><td><p>Decimal</p></td><td><p>Decimal</p></td></tr>
<tr><td><p>float</p></td><td><p>Double</p></td><td><p>Float</p></td></tr>
<tr><td><p>image</p></td><td><p>Byte[]</p></td><td><p>Image</p></td></tr>
<tr><td><p>int</p></td><td><p>Int32</p></td><td><p>Int</p></td></tr>
<tr><td><p>money</p></td><td><p>Decimal</p></td><td><p>Money</p></td></tr>
<tr><td><p>nchar</p></td><td><p>String и Char[]</p></td><td><p>NChar</p></td></tr>
<tr><td><p>ntext</p></td><td><p>String и Char[]</p></td><td><p>NText</p></td></tr>
<tr><td><p>nvarchar</p></td><td><p>String и Char[]</p></td><td><p>NVarChar</p></td></tr>
<tr><td><p>real</p></td><td><p>Single (float)</p></td><td><p>Real</p></td></tr>
<tr><td><p>smalldatetime</p></td><td><p>DateTime</p></td><td><p>SmallDateTime</p></td></tr>
<tr><td><p>smallint</p></td><td><p>Intl6</p></td><td><p>SmallInt</p></td></tr>
<tr><td><p>smallmoney</p></td><td><p>Decimal</p></td><td><p>SmallMoney</p></td></tr>
<tr><td><p>sql_variant</p></td><td><p>Object</p></td><td><p>Variant</p></td></tr>
<tr><td><p>time</p></td><td><p>TimeSpan</p></td><td><p>Time</p></td></tr>
<tr><td><p>timestamp</p></td><td><p>Byte[]</p></td><td><p>Timestamp</p></td></tr>
<tr><td><p>tinyint</p></td><td><p>Byte</p></td><td><p>TinyInt</p></td></tr>
<tr><td><p>uniqueidentifier</p></td><td><p>Guid</p></td><td><p>UniqueIdentifier</p></td></tr>
<tr><td><p>varbinary</p></td><td><p>Byte[]</p></td><td><p>VarBinary</p></td></tr>
<tr><td><p>varchar</p></td><td><p>String и Char[]</p></td><td><p>VarChar</p></td></tr>
</table>
<p>Стоит учитывать, что для строковых типов, например, для NVarChar или VarChar, размер задается в <span class="b">символах</span>, для остальных типов размер 
устанавливается в <span class="b">байтах</span>.</p>
<p>Например, зададим для параметра тип и размер:</p>
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
            string connectionString = "Server=(localdb)\\mssqllocaldb;Database=adonetdb;Trusted_Connection=True;";
            // данные для добавления
            int age = 27;
            string name = "Sam";
            // выражение SQL для добавления данных
            string sqlExpression = "INSERT INTO Users (Name, Age) VALUES (@name, @age)";

            using (SqlConnection connection = new SqlConnection(connectionString))
            {
                await connection.OpenAsync();

                SqlCommand command = new SqlCommand(sqlExpression, connection);

                // создаем параметр для имени
                SqlParameter nameParam = new SqlParameter("@name", System.Data.SqlDbType.NVarChar, 100);
                // определяем значение
                nameParam.Value = name;
                // также можно определить тип и размер через свойства
                // nameParam.SqlDbType = System.Data.SqlDbType.NVarChar;
                // nameParam.Size = 100;
                
                // добавляем параметр к команде
                command.Parameters.Add(nameParam);
                // создаем параметр для возраста
                SqlParameter ageParam = new SqlParameter("@age", age);
                // добавляем параметр к команде
                command.Parameters.Add(ageParam);

                int number = await command.ExecuteNonQueryAsync();
                Console.WriteLine($"Добавлено объектов: {number}");
            }
            Console.Read();
        }
    }
}
</pre>
<p>В данном случае параметр <code>nameParam</code> имеет тип <code>SqlDbType.NVarChar</code> и длину в 100 символов.</p>
<p>Если размер параметра меньше, чем формат вводных данных, то данные усекаются до нужного размера. Например, если задан следующий параметр:</p>
<pre class="brush:c#;">
SqlParameter nameParam = new SqlParameter("@name", System.Data.SqlDbType.NVarChar, 3);
nameParam.Value = "Donald";
</pre>
<p>В данном случае в таблицу сохранится строка "Don", так как параметр содержит ограничение - не более 3 символов.</p>
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


<div class="nav"><p><a href="2.7.php">Назад</a><a href="./">Содержание</a><a href="2.9.php">Вперед</a></p></div></div>
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
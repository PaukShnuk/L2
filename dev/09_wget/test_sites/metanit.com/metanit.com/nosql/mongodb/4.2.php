<!DOCTYPE html>
<html >
<head>
<title>Взаимодействие с коллекцией. Документы в MongoDB в C#</title>
<meta charset="utf-8" />
<meta name="description" content="">
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
<h2>Взаимодействие с коллекцией. Документы</h2><div class="date">Последнее обновление: 09.06.2017</div>

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

<p>Подобно тому, как в обычных реляционных СУБД мы проходим несколько уровней при взаимодействии с сервером базы данных 
(сервер БД - &gt; база данных -&gt; таблица), так и при взаимодействии с MongoDB мы также проходим несколько уровней:</p>
<img src="pics/4.3.png" alt="Классы C# в MongoDB" />
<p>Ранее мы рассмотрели получение ссылки на базу данных с помощью объекта <code>IMongoDatabase</code>. Данные в базе данных хранятся в коллекциях, которые представлены 
объектом <span class="b">IMongoCollection</span>. Например, получим все коллекции всех баз данных, которые имеются на сервере:</p>
<pre class="brush:c#;">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using MongoDB.Bson;
using MongoDB.Driver;

namespace MongoApp
{
    class Program
    {
        static void Main(string[] args)
        {
            string connectionString = "mongodb://localhost";

            MongoClient client = new MongoClient(connectionString);
            GetCollectionsNames(client).GetAwaiter();
            Console.ReadLine();
        }
        private static async Task GetCollectionsNames(MongoClient client)
        {
            using (var cursor = await client.ListDatabasesAsync())
            {
                var dbs = await cursor.ToListAsync();
                foreach (var db in dbs)
                {
                    Console.WriteLine("В базе данных {0} имеются следующие коллекции:", db["name"]);

                    IMongoDatabase database = client.GetDatabase(db["name"].ToString());

                    using (var collCursor = await database.ListCollectionsAsync())
                    {
                        var colls = await collCursor.ToListAsync();
                        foreach (var col in colls)
                        {
                            Console.WriteLine(col["name"]);
                        }
                    }
                    Console.WriteLine();
                }
            }
        }
    }
}
</pre>
<img src="pics/4.4.png" alt="Получение коллекций в MongoDB" />
<p>На скриншоте видно, что у меня есть база данных test, в которой имеется коллекция users. И чтобы непосредственно получить эту коллекцию, 
можно использовать метод <code>GetCollection</code>, который возвращает объект <code>IMongoCollection</code>:</p>
<pre class="brush:c#;">
MongoClient client = new MongoClient(connectionString);
IMongoDatabase database = client.GetDatabase("test");
IMongoCollection&LT;BsonDocument&GT; col = database.GetCollection&lt;BsonDocument&gt;("users");
</pre>
<p>Каждый объект IMongoCollection типизирован типом <code>BsonDocument</code>, который представляет собой документ. А саму коллекцию можно представлять 
как набор документов BsonDocument.</p>

<h3>BsonDocument</h3>
<p>Так как MongoDB представляет документо-ориентированные базы данных, то все данные в ней хранятся в виде документов. Таким образом, 
база данных состоит из коллекций, а коллекции - из документов. Каждый документ представляет набор пар элементов ключ-значение наподобие словаря и 
представлен классом <span class="bb">BsonDocument</span> из пространства имен MongoDB.BSON.</p>
<p>Набор данных в документе находится в формате bson, который близок к формату json. Например, стандартный документ:</p>
<pre class="brush:js;">
{
    "name": "Bill",
    "surname": "Gates",
    "age": "48",
    "company": {
        "name" : "microsoft",
        "year" : "1974",
        "price" : "300000"
        }
}
</pre>
<p>Каждая пара ключ-значение, то есть отдельный элемент в документе, например, <code>"name": "Bill"</code>, представляет класс 
<span class="b">BsonElement</span>, а каждое отдельное значение (в данном случае строка "Bill") - класс <span class="b">BsonValue</span></p>
<p>Хотя на самом деле напрямую работа будет вестись через классы-наследники BsonValue: BsonDouble, BsonString, BsonInt32, BsonBoolean и ряд других.</p>
<h3>Операции преобразования типов</h3>
<p>Класс BsonValue содержит ряд свойств, которые позволяют преобразовать тип его значения в один из типов C#. Все эти свойства 
образованы по шаблону <span class="ii">As[Тип]</span>. Некоторые из них:</p>
<ul>
<li><p><code>AsByteArray</code>: преобразует тип в массив байтов byte[]</p></li>
<li><p><code>AsDateTime</code>: преобразует элемент в объект DateTime</p></li>
<li><p><code>AsDouble</code>: преобразует элемент в объект Double</p></li>
<li><p><code>AsGuid</code>: преобразует элемент в объект Guid</p></li>
<li><p><code>AsInt32</code>: преобразует элемент в объект int</p></li>
<li><p><code>AsInt64</code>: преобразует элемент в объект long</p></li>
<li><p><code>AsString</code>: преобразует элемент в объект string</p></li>
<li><p><code>AsObjectId</code>: преобразует элемент в объект ObjectId</p></li>
</ul>
<p>Например, совершим переход от BsonInt32 к стандартному типу int:</p>
<pre class="brush:c#;">
BsonValue bv = new BsonInt32(20);
int i = bv.AsInt32;
</pre>
<p>В то же время не всегда можно провести преобразования, как например, в следующем случае:</p>
<pre class="brush:c#;">
BsonValue bv = new BsonInt32(20);
ObjectId ob = bv.AsObjectId;
</pre>
<p>В этом случае среда сгенерирует исключение типа <span class="b">InvalidCastException</span>.</p>
<p>Перед приведением можно использовать одно из свойств, показывающее, можно ли преобразовать тип объекта в другой тип. Подобные свойства 
образованы по шаблону <span class="ii">Is[Тип]</span> и в случае возможности преобразования типа объекта к типу [Тип], возвращают значение <code>true</code>. 
Некоторые из этих свойств:</p>
<ul>
<li><p><code>IsDateTime</code>: возвращает true, если элемент представляет тип DateTime</p></li>
<li><p><code>IsDouble</code>: возвращает true, если элемент представляет тип Double</p></li>
<li><p><code>IsGuid</code>: возвращает true, если элемент представляет тип Guid</p></li>
<li><p><code>IsInt32</code>: возвращает true, если элемент представляет тип int</p></li>
<li><p><code>IsInt64</code>: возвращает true, если элемент представляет тип long</p></li>
<li><p><code>IsString</code>: возвращает true, если элемент представляет тип string</p></li>
<li><p><code>IsObjectId</code>: возвращает true, если элемент представляет тип ObjectId</p></li>
</ul>
<p>Например:</p>
<pre class="brush:c#;">
BsonValue bv = new BsonInt32(20);
int i=-1;
if(bv.IsInt32)
    i = bv.AsInt32;

ObjectId ob = new ObjectId();
if (bv.IsObjectId)
    ob= bv.AsObjectId;
</pre>

<h3>Создание документа</h3>
<p>Для создания документа мы можем использовать одну из форм конструктора BsonDocument. Например, создадим пустой документ:</p>
<pre class="brush:c#;">
BsonDocument doc = new BsonDocument();
Console.WriteLine(doc);
</pre>
<p>При выводе на консоль мы получим следующее:</p>
<div class="console">
<pre class="consoletext">
{ }
</pre>
</div>
<p>Теперь создадим документ с одним элементом:</p>
<pre class="brush:c#;">
BsonDocument doc = new BsonDocument { {"name","Bill"}};
Console.WriteLine(doc);
</pre>
<p>И консоль отобразит следующее:</p>
<div class="console">
<pre class="consoletext">
{ "name" : "Bill"}
</pre>
</div>
<p>Теперь выведем на консоль значение поля name:</p>
<pre class="brush:c#;">
BsonDocument doc = new BsonDocument { { "name", "Bill" } };

Console.WriteLine(doc["name"]);
// изменим поле name
doc["name"] = "Tom";

Console.WriteLine(doc.GetValue("name"));
</pre>
<p>Использованные в данном случае способы вывода поля: <code>doc["name"]</code> и <code>doc.GetValue("name")</code> будут равнозначными.</p>
<p>Так как каждая такая пара ключ-значение представляет элемент <code>BsonElement</code>, то мы могли бы написать и так:</p>
<pre class="brush:c#;">
BsonElement bel = new BsonElement("name","Bill");
BsonDocument doc = new BsonDocument(bel);
Console.WriteLine(doc);
</pre>
<p>Или использовать метод <span class="b">Add</span> для добавления нового элемента:</p>
<pre class="brush:c#;">
BsonElement bel = new BsonElement("name","Bill");
BsonDocument doc = new BsonDocument();
doc.Add(bel);
Console.WriteLine(doc);
</pre>
<p>Теперь создадим более сложный по составу элемент:</p>
<pre class="brush:c#;">
BsonDocument doc = new BsonDocument
{
    {"name","Bill"},
    {"surname", "Gates"},
    {"age", new BsonInt32(48)},
    { "company", 
        new BsonDocument{
            {"name" , "microsoft"},
            {"year", new BsonInt32(1974)},
            {"price", new BsonInt32(300000)},
        }
    }
};
Console.WriteLine(doc);
</pre>
<p>И консоль отобразит следующее:</p>
<div class="console">
<pre class="consoletext">
{
    "name": "Bill",
    "surname": "Gates",
    "age": 48,
    "company": {
        "name" : "microsoft",
        "year" : 1974,
        "price" : 300000
        }
}
</pre>
</div>

<p>И еще пример - добавим в документ массив:</p>
<pre class="brush:c#;">
BsonDocument chemp = new BsonDocument();
chemp.Add("countries", new BsonArray(new[] { "Бразилия", "Аргентина", "Германия", "Нидерланды" }));
chemp.Add("finished", new BsonBoolean(true));
Console.WriteLine(chemp);
</pre>
<p>Консольный вывод:</p>
<div class="console">
<pre class="consoletext">
{
    "countries": ["Бразилия", "Аргентина", "Германия", "Нидерланды"],
    "finished": true
}
</pre>
</div>
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


<div class="nav"><p><a href="4.1.php">Назад</a><a href="./">Содержание</a><a href="4.3.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 4.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 4.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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
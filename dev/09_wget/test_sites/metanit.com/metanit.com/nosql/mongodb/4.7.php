<!DOCTYPE html>
<html >
<head>
<title>Фильтрация данных в MongoDB в C#</title>
<meta charset="utf-8" />
<meta name="description" content="Фильтрация данных выборки из базы данных MongoDB с помощью C#">
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
<h2>Фильтрация данных</h2><div class="date">Последнее обновление: 09.06.2017</div>

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

<p>При выборке данных в методы Find/FindAsync передается объект BsonDocument, который устанавливает параметры фильтрации. Пустой BsonDocument 
позволяет выбрать все документы. Но мы можем конкретизировать выборку:</p>
<pre class="brush:c#;">
using System;
using System.Threading.Tasks;
using MongoDB.Bson;
using MongoDB.Driver;

namespace MongoDBApp
{
    class Program
    {
        static void Main(string[] args)
        {
            FindPeople().GetAwaiter().GetResult();

            Console.ReadLine();
        }
        private static async Task FindPeople()
        {
            string connectionString = "mongodb://localhost";
            var client = new MongoClient(connectionString);
            var database = client.GetDatabase("test");
            var collection = database.GetCollection&lt;BsonDocument&gt;("people");
            // поиск документов, в которых Name="Bill"
            var filter = new BsonDocument("Name", "Bill");
            var people = await collection.Find(filter).ToListAsync();
            foreach (var p in people)
            {
                Console.WriteLine(p);
            }
        }
    }
}
</pre>
<p>Здесь в качестве фильтра передается объект <code>BsonDocument("Name", "Bill")</code>, то есть мы выбираем все документы, в которых Name="Bill".</p>
<p>Во второй главе рассматривались различные операции, которые можно использовать для фильтрации выборки, например, операторы <code>$gt</code>, <code>$lt</code> и т.д. 
И здесь мы также можем использовать все эти операторы. Например, выберем все объекты, у которых значение Age больше 30:</p>
<pre class="brush:c#;">
private static async Task FindPeople()
{
    string connectionString = "mongodb://localhost";
    var client = new MongoClient(connectionString);
    var database = client.GetDatabase("test");
    var collection = database.GetCollection&lt;BsonDocument&gt;("people");
	// оператор $gt
    var filter = new BsonDocument("Age", new BsonDocument("$gt", 31));
    var people = await collection.Find(filter).ToListAsync();
    foreach (var p in people)
    {
        Console.WriteLine(p);
    }
}
</pre>
<p>Или, например, зададим фильтр для выбора документов, у которых поле "Age" имеет значение от 33 и выше, либо поле "Name" имеет значение "Tom":</p>
<pre class="brush:c#;">
var filter = new BsonDocument("$or", new BsonArray{
                
    new BsonDocument("Age",new BsonDocument("$gte", 33)),
    new BsonDocument("Name", "Tom")
});
var people = await collection.Find(filter).ToListAsync();
</pre>
<p>Подобным образом мы можем использовать оператор <span class="b">$and</span>. Например, получим документы, в которых одновременно и Name="Bill", и значение 
поля Age больше 31:</p>
<pre class="brush:c#;">
var filter = new BsonDocument("$and", new BsonArray{

    new BsonDocument("Age",new BsonDocument("$gt", 31)),
    new BsonDocument("Name", "Bill")
});
var people = await collection.Find(filter).ToListAsync();
</pre>
<p>Другим способом для создания фильтрации представляет применение класса <span class="b">FilterDefinitionBuilder</span>, 
в котором определен ряд методов:</p>
<h3>Операции сравнения</h3>
<ul>
<li><p><span class="b">Eq</span>: выбирает только те документы, у которых значение определенного свойства равно некоторому значению. Например, <code>Builders&lt;Person&gt;.Filter.Eq(Name", "Tom")</code></p></li>
<li><p><span class="b">Gt</span>: выбирает только те документы, у которых значение определенного свойства больше некоторого значения. Например, <code>Builders&lt;Person&gt;.Filter.Gt("Age", 25)</code></p></li>
<li><p><span class="b">Gte</span>: выбирает только те документы, у которых значение определенного свойства больше или равно некоторому значению. Например, 
<code>Builders&lt;Person&gt;.Filter.Gte("Name", "T")</code></p> - выбирает все документы, у которых значение Name начинается с буквы T</li>
<li><p><span class="b">Lt</span>: выбирает только те документы, у которых значение определенного свойства меньше некоторого значения <code>Builders&lt;Person&gt;.Filter.Lt("Age", 25)</code></p></li>
<li><p><span class="b">Lte</span>: выбирает только те документы, у которых значение определенного свойства меньше или равно некоторому значению</p></li>
<li><p><span class="b">Ne</span>: выбирает только те документы, у которых значение определенного свойства не равно некоторому значению <code>Builders&lt;Person&gt;.Filter.Ne("Age", 23)</code></p></li>
<li><p><span class="b">In</span>: получает все документы, у которых значение свойства может принимать одно из указанных значений. Например, найдем 
все документы, у которых свойство Age равно либо 23, либо 25, либо 27: <code>Builders&lt;Person&gt;.Filter.In("Age", new List&lt;BsonInt32&gt;() { 23, 25, 27 });</code></p></li>
<li><p><span class="b">Nin</span>: противоположность оператору <code>In</code> - выбирает все документы, у которых значение свойства не принимает одно из 
указанных значений</p></li>
</ul>
<p>Объект Person имеет ссылку на объект Company. И, допустим, нам надо сделать выборку объектов Person по определенному свойству Company:</p>
<pre class="brush:c#;">
string connectionString = "mongodb://localhost";
var client = new MongoClient(connectionString);
var database = client.GetDatabase("test");
var collection = database.GetCollection&lt;BsonDocument&gt;("people");
var filter = Builders&lt;BsonDocument&gt;.Filter.Eq("Name", "Bill");
var people = await collection.Find(filter).ToListAsync();
foreach (var p in people)
{
    Console.WriteLine(p);
}
</pre>
<p>Соответственно если мы получаем коллекцию объектов Person, то и FilterDefinitionBuilder также типизируется классом Person:</p>
<pre class="brush:c#;">
var collection = database.GetCollection&lt;Person&gt;("people");
var filter = Builders&lt;Person&gt;.Filter.Eq("Name", "Bill");
var people = await collection.Find(filter).ToListAsync();
foreach (var p in people)
{
    Console.WriteLine(p.Name);
}
</pre>
<p>С помощью стандартных операций программирования конъюнкции, дизъюнкции и логического отрицания мы можем комбинировать запросы. 
Например, фильтр на всех документов у которых Name=Bill, либо Name=Tom:</p>
<pre class="brush:c#;">
var builder = Builders&lt;BsonDocument&gt;.Filter;
var filter = builder.Eq("Name", "Bill") | builder.Eq("Name", "Tom");
var people = await collection.Find(filter).ToListAsync();
</pre>
<p>Запрос на получение объектов, у которых Name=Bill, но при этом Age не равно 30:</p>
<pre class="brush:c#;">
var builder = Builders&lt;BsonDocument&gt;.Filter;
var filter = builder.Eq("Name", "Bill") &amp; !builder.Eq("Age", 30);
var people = await collection.Find(filter).ToListAsync();
</pre>
<p>В данном случае стоит отметить, что если мы используем не BsonDocument, а стандартные классы, например, Person, то задавать запросы можем 
более удобным способом через лямбда выражения. Так, перепишем предыдущий пример:</p>
<pre class="brush:c#;">
var collection = database.GetCollection&lt;Person&gt;("people");
var people = await collection.Find(x=&gt;x.Name=="Bill" && x.Age!=30).ToListAsync();
foreach (var p in people)
{
    Console.WriteLine("{0} - {1}", p.Name, p.Age);
}
</pre>
<h3>Логические операции</h3>
<ul>
<li><p><span class="b">Not</span>: возвращает документы, которые не попадают под определенное условие 
<code>Builders&lt;Person&gt;.Filter.Not(Builders&lt;Person&gt;.Filter.Eq("Name", "Tom"))</code></p></li>
<li><p><span class="b">Or</span>: определяет набор отдельных фильтров, которые используются для выборки.</p></li>
<li><p><span class="b">And</span>: также, как и Or, определяет набор отдельных фильтров, которые используются для выборки, 
но теперь возвращаются только те документы, которые соответствуют всем этим объектам FilterDefinition</p></li>
</ul>
<p>Используем методы Or и And:</p>
<pre class="brush:c#;">
// метод Or
var filter1 = Builders&lt;Person&gt;.Filter.Eq("Name", "Tom");
var filter2 = Builders&lt;Person&gt;.Filter.Eq("Age", 28);
var filterOr = Builders&lt;Person&gt;.Filter.Or(new List&lt;FilterDefinition&lt;Person&gt;&gt;{ filter1, filter2 });

// метод And
var filter3 = Builders&lt;Person&gt;.Filter.Eq("Name", "John");
var filter4 = Builders&lt;Person&gt;.Filter.Eq("Age", 27);
var filterAnd = Builders&lt;Person&gt;.Filter.And(new List&lt;FilterDefinition&lt;Person&gt;&gt;{ filter3, filter4 });
</pre>
<h3>Операции с элементами</h3>
<ul>
<li><p><span class="b">Exists</span>: выбирает из бд те документы, в которых присутствует определенный ключ, например, 
<code>Builders&lt;Person&gt;.Filter.Exists("Name");</code></p></li>
<li><p><span class="b">NotExists</span>: выбирает из бд те документы, в которых отсутствует определенный ключ, например, 
<code>Builders&lt;Person&gt;.Filter.NotExists("Age");</code></p></li>
</ul>
<h3>Вычисление значений</h3>
<ul>
<li><p><span class="b">Regex</span>: выбирает все документы, у которых значение ключа соответствует регулярному значению. Например, 
выберем все документы, в именах которых встречается буква "o": <code>Builders&lt;Person&gt;.Filter.Regex("Name", new BsonRegularExpression("o"))</code>. 
Объект <span class="b">BsonRegularExpression</span> позволяет задать регулярное значение.</p></li>
<li><p><span class="b">Where</span>: возвращает документы, которые соответствуют определенному условию. Условие определяется с помощью лямбда-выражения: 
<code>Builders&lt;Person&gt;.Filter.Where(e =&gt; e.Name == "Tom");</code></p></p></li>
</ul>
<h3>Операции с массивами</h3>
<ul>
<li><p><span class="b">All</span>: выбирает все документы, в которые содержат все элементы массива</p></li>
<li><p><span class="b">Size</span>: выбирает все документы, которые содержат определенное число элементов</p></li>
</ul>
<p>Например, у нас есть класс Person, который содержит список языков languages:</p>
<pre class="brush:c#;">
class Person
{
    //..............................
    public List&lt;string&gt; Languages { get; set; }
}
</pre>
<p>Теперь найдем людей, у которых имеется два определенных языка, а также найдем людей, у которых имеется в этом массиве два любых языка:</p>
<pre class="brush:c#;">
// получим все объекты, у которых определены английский и французский языки
var filter = Builders&lt;Person&gt;.Filter.All("Languages", new List&lt;string&gt;() {"english", "french"});

// получим все объекты, у которых в массиве languages только 2 элемента
var filter = Builders&lt;Person&gt;.Filter.Size("Languages", 2);
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


<div class="nav"><p><a href="4.6.php">Назад</a><a href="./">Содержание</a><a href="4.8.php">Вперед</a></p></div></div>
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
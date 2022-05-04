<!DOCTYPE html>
<html >
<head>
<title>Редактирование и удаление документов в MongoDB в C#</title>
<meta charset="utf-8" />
<meta name="description" content="Редактирование и удаление документов в базе данных MongoDB в C#">
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
<h2>Редактирование и удаление документов</h2><div class="date">Последнее обновление: 10.06.2017</div>

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

<h3>Редактирование</h3>
<p>Для редактирования элементов коллекции применяются методы <span class="b">UpdateOneAsync()</span>, <span class="b">UpdateManyAsync()</span> и 
<span class="b">ReplaceOneAsync()</span>. Они принимают следующие параметры:</p>
<ul>
<li><p>BsonDocument, выполняющий роль фильтра документа, который надо обновить</p></li>
<li><p>новый документ, который заменяет старый или описывает принципы изменения старого</p></li>
<li><p>дополнительный необязательный параметр, устанавливающий настройки обновления</p></li>
</ul>
<p>При обновлении надо учитывать, что мы не можем изменить поле <code>_id</code>.</p>
<p>Метод <code>ReplaceOneAsync()</code> позволяет полностью заменить старый документ новым:</p>
<pre class="brush:c#;">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using MongoDB.Bson;
using MongoDB.Driver;
using MongoDB.Driver.Linq;

namespace MongoDBApp
{
    class Program
    {
        static void Main(string[] args)
        {
            UpdatePerson().GetAwaiter().GetResult();
            Console.ReadLine();
        }
		private static async Task UpdatePerson()
        {
            var client = new MongoClient("mongodb://localhost");
            var database = client.GetDatabase("test");
            var collection = database.GetCollection&lt;BsonDocument&gt;("people");
            var result = await collection.ReplaceOneAsync(new BsonDocument("Name", "Tom"),
                new BsonDocument
                {
                    {"Name","Tom K."},
                    {"Age", 40},
                    {"Languages", new BsonArray(new []{"english", "spanish"})},
                    { "Company", 
                        new BsonDocument{
                            {"Name" , "Apple"}
                        }
                    }
                });
            Console.WriteLine("Найдено по соответствию: {0}; обновлено: {1}", 
                result.MatchedCount, result.ModifiedCount);
            var people = await collection.Find(new BsonDocument()).ToListAsync();
            foreach (var p in people)
                Console.WriteLine(p);
        }
	}
}
</pre>
<p>В методе <code>ReplaceOneAsync()</code> первый параметр описывает критерии выборки, то есть нам надо в данном случае обновить все документы, у которых 
"Name"="Tom".</p>
<p>Второй параметр описывает документ, который вставляется на место старого. Если документов, которые соответствуют критерию "Name"="Tom", не будет найдено, 
то соответственно и замен не будет.</p>
<p>Метод <code>ReplaceOneAsync()</code> возвращает объект <span class="b">ReplaceOneResult</span>, с помощью которого мы можем получить информацию об обновлении, 
в частности, получить количество документов, которые соответствуют критерию, и количество обновленных документов.</p>
<p>Но с помощью дополнительного параметра <code>new UpdateOptions { IsUpsert = true }</code> мы можем указать обязательность вставки документа в коллекцию, даже если не найдено соответствий по критерию:</p>
<pre class="brush:c#;">
var result = await collection.ReplaceOneAsync(new BsonDocument("Name", "Bob"),
    new BsonDocument
    {
        {"Name","Robert"},
        {"Age", 40},
		{"Languages", new BsonArray(new []{"english", "spanish"})},
        { "Company", new BsonDocument{
				{"Name" , "Bob&amp;Ron Inc."}
			}
        }
    },
    new UpdateOptions { IsUpsert = true });
Console.WriteLine("Id добавленного объекта: {0}", result.UpsertedId);
</pre>
<p>А с помощью свойства <code>result.UpsertedId</code> можно получить id добавленного оъекта.</p>
<p>Похожее действие имеет метод <code>UpdateOneAsync()</code>, который позволяет обновить не весь документ, а его отдельные поля:</p>
<pre class="brush:c#;">
var result = await collection.UpdateOneAsync(
    new BsonDocument("Name", "Tom"), 
    new BsonDocument("$set", new BsonDocument("Age", 28)));
Console.WriteLine("найдено по соответствию: {0}; обновлено: {1}", 
    result.MatchedCount, result.ModifiedCount);
</pre>
<p>Первый BsonDocument также задает критерии выборки документа, а второй задает принципы обновления. В частности здесь используется оператор <code>$set</code> для 
установки у найденого документа для поля Age значения 28. То есть в данном случае мы можем использовать все те же самые операторы консоли mongodb, 
которые рассматривались в теме <a href="http://metanit.com/nosql/mongodb/2.9.php">http://metanit.com/nosql/mongodb/2.9.php</a></p>
<p>Или применим оператор $inc, который увеличивает числовое значение на несколько единиц:</p>
<pre class="brush:c#;">
var result = await collection.UpdateOneAsync(
    new BsonDocument("Name", "Robert"), 
    new BsonDocument("$inc", new BsonDocument("Age", 2)));
</pre>
<p>Для обновления документов вместо BsonDocument можно использовать объект <span class="b">UpdateDefinitionBuilder</span>, у которого определяется ряд методов, соответствющих консольным операторам mongodb. 
В частности, у него имеется метод <span class="b">Set()</span>. 
Этот метод в качестве парамета принимает свойство, которое надо изменить, и его обновленное значение. Например, установим свойство Age равным 30 
у всех объектов, у которых Name="Tom".</p>
<pre class="brush:c#;">
// параметр фильтрации 
var filter = Builders&lt;BsonDocument&gt;.Filter.Eq("Name", "Tom");
// параметр обновления
var update = Builders&lt;BsonDocument&gt;.Update.Set("Age", 30);
var result = await collection.UpdateOneAsync(filter, update);
</pre>
<p>При работе с методом Set также надо учитывать, что если такого поля еще нет в документе в базе данных, например, оно просто ранее не было установлено, 
то данное поле добавляется в документ.</p>
<p>Объект UpdateDefinitionBuilder имеет еще ряд методов, которые позволяют обновить состояние документа:</p>
<ul>
<li><p><span class="b">AddToSet</span>: добавляет новые элементы в поле документа, которое представляет массив. Например, добавляем в массив 
Languages новую строку: <code>Builders&lt;BsonDocument&gt;.Update.AddToSet("Languages", "spanish")</code></p></li>
<li><p><span class="b">Inc</span>: инкрементирует значение числового свойства на указанное число единиц. Например, увеличим значение свойства Age на две единицы: 
<code>Builders&lt;BsonDocument&gt;.Update.Inc("Age", 2)</code></p></li>
<li><p><span class="b">Push</span>: добавляет новые элементы для ключа, который представляет массив. Например: <code>Builders&lt;BsonDocument&gt;.Update.Push("Languages", "french")</code></p></li>
<li><p><span class="b">Pull</span>: удаляет определенный элемент из массива. Например: <code>Builders&lt;BsonDocument&gt;.Update.Pull("Languages", "french")</code></p></li>
<li><p><span class="b">Unset</span>: удаляет ключ и его значение. Например: <code>Builders&lt;BsonDocument&gt;.Update.Unset("Age")</code></p></li>
<li><p><span class="b">PopFirst</span>: выбирает первый элемент для свойства, которое представляет массив</p></li>
<li><p><span class="b">PopLast</span>: выбирает последний элемент для свойства, которое представляет массив</p></li>
<li><p><span class="b">Rename</span>: переименовывает название ключа в документе. Например, переименуем поле Age в Year: <code>Builders&lt;BsonDocument&gt;.Update.Rename("Age", "Year");</code>.</p></li>
</ul>
<p>Причем подобным образом можно обновлять также и поля вложенных объектов, например, обновим название компании в документе:</p>
<pre class="brush:c#;">
var filter = Builders&lt;BsonDocument&gt;.Filter.Eq("Company.Name", "Google");
var update = Builders&lt;BsonDocument&gt;.Update.Set("Company.Name", "Google Inc.");
var result = await collection.UpdateOneAsync(filter, update);
</pre>
<p>Использование множественных критериев при обновлении:</p>
<pre class="brush:c#;">
var builder = Builders&lt;BsonDocument&gt;.Filter;
var filter = builder.Eq("Name", "Tom") & builder.Eq("Age", 30);
var update = Builders&lt;BsonDocument&gt;.Update.Set("Age", 33);
var result = await collection.UpdateOneAsync(filter, update);
</pre>
<p>В данном случае обновляются только те документы с Name="Tom", у которых также Age=30.</p>
<p>Для обновления множества документов применяется метод <span class="b">UpdateManyAsync()</span>:</p>
<pre class="brush:c#;">
var builder = Builders&lt;BsonDocument&gt;.Filter;
var filter = builder.Eq("Name", "Tom") | builder.Eq("Name", "John");
var update = Builders&lt;BsonDocument&gt;.Update.Set("Age", 36);
var result = await collection.UpdateManyAsync(filter, update);
</pre>
<p>В данном случае обновляются все документы, в которых Name = Tom или Name=John.</p>
<p>C помощью вспомогательного метода <code>CurrentDate()</code>, который имеется в UpdateDefinitionBuilder, можно установить у документа время последнего изменения:</p>
<pre class="brush:c#;">
var filter = Builders&lt;BsonDocument&gt;.Filter.Eq("Name", "Tom");
var update = Builders&lt;BsonDocument&gt;.Update.Set("Age", 30).CurrentDate("LastModified");
var result = await collection.UpdateOneAsync(filter, update);
</pre>
<p>В данном случае к документу добавляется поле LastModified, которое хранит время обновления.</p>
<p>Обновление стандартных Poco-типов в C#, например, объектов Person, будет аналогично:</p>
<pre class="brush:c#;">
private static async Task UpdatePerson()
{
    var client = new MongoClient("mongodb://localhost");
    var database = client.GetDatabase("test");
    var collection = database.GetCollection&lt;Person&gt;("people");
            
    var filter = Builders&lt;Person&gt;.Filter.Eq("Name", "Tom");
    var update = Builders&lt;Person&gt;.Update.Set(x=&gt;x.Age, 32);
    var result = await collection.UpdateManyAsync(filter, update);
    
	Console.WriteLine("найдено по соответствию: {0}; обновлено: {1}", 
        result.MatchedCount, result.ModifiedCount);
    
	var people = await collection.Find(new BsonDocument()).ToListAsync();
    foreach (var p in people)
        Console.WriteLine("{0} - {1}", p.Name, p.Age);
}
</pre>
<p>При использовании типов POCO, например, Person, в методах UpdateDefinitionBuilder мы можем применять лямбда-выражения: <code>Update.Set(x=&gt;x.Age, 32)</code></p>
<p>Однако следует учитывать некоторые особенности. Например, выше при работе с той же коллекцией было добавлено дополнительное поле "LastModified", 
которое хранит дату и время последнего изменения. Также с помощью метода Rename мы могли бы переименовать название поля. В общем, в коллекции 
у документов могли бы появиться поля, названия которых не соответствуют ни одному свойству в классе Person. И если бы мы запустили код получения 
объектов, то могли бы столкнуться с ошибкой.</p>
<p>Чтобы избежать подобной ошибки нужно с классом Person использовать специальный атрибут <code>BsonIgnoreExtraElements</code>:</p>
<pre class="brush:c#;">
[BsonIgnoreExtraElements]
class Person
{
    //...............
}
</pre>
<h3>Удаление документов</h3>
<p>Для удаления документов используются методы <span class="b">DeleteOneAsync()</span> и <span class="b">DeleteManyAsync()</span>, 
определенные в интерфейсе IMongoCollection.</p>
<p>В качестве параметра они принимают фильтр, определяющий, какой элемент должен быть удален:</p>
<pre class="brush:c#;">
private static async Task DeletePerson()
{
    var client = new MongoClient("mongodb://localhost");
    var database = client.GetDatabase("test");
    var collection = database.GetCollection&lt;BsonDocument&gt;("people");

    var filter = Builders&lt;BsonDocument&gt;.Filter.Eq("Name", "Tom K.");
    await collection.DeleteOneAsync(filter);
    
	var people = await collection.Find(new BsonDocument()).ToListAsync();
    foreach (var p in people)
        Console.WriteLine(p);
}
</pre>
<p>В данном случае удаляется один документ, соответствующие запросу <code>"Name"="Tom K."</code></p>
<p>Работа с Person будет аналогична работе с BsonDocument, только с Person и другими POCO-классами мы можем использовать лямбда-выражения для 
определения фильтра:</p>
<pre class="brush:c#;">
var collection = database.GetCollection&lt;Person&gt;("people");
await collection.DeleteOneAsync(p =&gt; p.Name == "Tom K.");
</pre>
<p>Если надо удалить больше одного документа, то применяется метод <code>DeleteManyAsync()</code>:</p>
<pre class="brush:c#;">
var collection = database.GetCollection&lt;Person&gt;("people");
var result = await collection.DeleteManyAsync(p =&gt; p.Name == "Bill");
Console.WriteLine("удалено: {0}", result.DeletedCount);
</pre>
<p>Из методов удаления можно получить объект DeleteResult, который содержит информацю об удаленных документах, в частности, их количество: <code>result.DeletedCount</code></p>
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


<div class="nav"><p><a href="4.9.php">Назад</a><a href="./">Содержание</a><a href="4.16.php">Вперед</a></p></div></div>
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
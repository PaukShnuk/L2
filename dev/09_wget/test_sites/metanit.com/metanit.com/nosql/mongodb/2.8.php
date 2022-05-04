<!DOCTYPE html>
<html >
<head>
<title>MongoDB | Операторы выборки</title>
<meta charset="utf-8" />
<meta name="description" content="Условные операторы в MongoDB ($gt, $lt, $ne, $all, $exists, $type, $size, $or), поиск по регулярным выражениям и в массивах">
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
<h2>Операторы выборки</h2><div class="date">Последнее обновление: 07.08.2021</div>

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

<h3>Условные операторы</h3>
<p>Условные операторы задают условие, которому должно соответствовать значение поля документа:</p>
<ul>
<li><p><span class="b">$eq</span> (равно)</p></li>
<li><p><span class="b">$ne</span> (не равно)</p></li>
<li><p><span class="b">$gt</span> (больше чем)</p></li>
<li><p><span class="b">$lt</span> (меньше чем)</p></li>
<li><p><span class="b">$gte</span> (больше или равно)</p></li>
<li><p><span class="b">$lte</span> (меньше или равно)</p></li>
<li><p><span class="b">$in</span> определяет массив значений, одно из которых должно иметь поле документа</p></li>
<li><p><span class="b">$nin</span> определяет массив значений, которые не должно иметь поле документа</p></li>
</ul>
<p>Например, найдем все документы, у которых значение ключа age меньше 30:</p>
<pre class="brush:js;">
&gt; db.users.find ({age: {$lt : 30}})
</pre>
<p>Аналогично будет использование других операторов сравнения. Например, тот же ключ, только больше 30:</p>
<pre class="brush:js;">
&gt; db.users.find ({age: {$gt : 30}})
</pre>
<p>Обратите внимание, что сравнение здесь проводится над целочисленными типами, а не строками. Если ключ age представляет строковые значения, 
то соответственно надо проводить сравнение над строками: <code>db.users.find ({age: {$gt : "30"}})</code>, однако результат будет тем же.</p>
<p>Но представим ситуацию, когда нам надо найти все объкты со значением поля age больше 30, но меньше 50. В этом случае мы можем комбинировать два 
оператора:</p>
<pre class="brush:js;">
&gt; db.users.find ({age: {$gt : 30, $lt: 50}})
</pre>
<p>Найдем пользователей, возраст которых равен 22:</p>
<pre class="brush:js;">
&gt; db.users.find ({age: {$eq : 22}})
</pre>
<p>По сути это аналогия следующего запроса:</p>
<pre class="brush:js;">
&gt; db.users.find ({age: 22})
</pre>
<p>Обратная операция - найдем пользователей, возраст которых НЕ равен 22:</p>
<pre class="brush:js;">
&gt; db.users.find ({age: {$ne : 22}})
</pre>
<p>Оператор $in определяет массив возможных выражений и ищет те ключи, значение которых имеется в массиве:</p>
<pre class="brush:js;">
&gt; db.users.find ({age: {$in : [22, 32]}})
</pre>
<p>Противоположным образом действует оператор $nin - он определяет массив возможных выражений и ищет те ключи, значение которых отсутствует в 
этом массиве:</p>
<pre class="brush:js;">
&gt; db.users.find ({age: {$nin : [22, 32]}})
</pre>
<h3>Логические операторы</h3>
<p>Логические операторы выполняются над условиями выборки:</p>
<ul>
<li><p><span class="b">$or</span>: соединяет два условия, и документ должен соответствовать одному из этих условий</p></li>
<li><p><span class="b">$and</span>: соединяет два условия, и документ должен соответствовать обоим условиям</p></li>
<li><p><span class="b">$not</span>: документ должен НЕ соответствовать условию</p></li>
<li><p><span class="b">$nor</span>: соединяет два условия, и документ должен НЕ соответстовать обоим условиям</p></li>
</ul>
<h4>Оператор $or</h4>
<p>Оператор <span class="b">$or</span> представляет логическую операцию ИЛИ и определяет набор пар ключ-значение, которые должны иметься в документе. И если документ имеет хоть одну такую пару ключ-значение, 
то он соответствует данному запросу и извлекается из бд:</p>
<pre class="brush:js;">
&gt; db.users.find ({$or : [{name: "Tom"}, {age: 22}]})
</pre>
<p>Это выражение вернет нам все документы, в которых либо name=Tom, либо age=22.</p>
<p>Другой пример вернет нам все документы, в которых name=Tom, а age равно либо 22, либо среди значений languages есть "german":</p>
<pre class="brush:js;">
&gt; db.users.find ({name: "Tom", $or : [{age: 22}, {languages: "german"}]})
</pre>
<p>В подвыраженях or можно применять условные операторы:</p>
<pre class="brush:js;">
&gt; db.users.find ({$or : [{name: "Tom"}, {age: {$gte:30}}]})
</pre>
<p>В данном случае мы выбираем все документы, где name="Tom" или поле age имеет значение от 30 и выше.</p>
<h4>Оператор $and</h4>
<p>Оператор <span class="b">$and</span> представляет логическую операцию И (логическое умножение) и определяет набор критериев, которым обязателньо должен 
соответствовать документ. В отличие от оператора $or документ должен соответствовать всем указанным критериям. Например:</p>
<pre class="brush:js;">&gt; db.users.find ({$and : [{name: "Tom"}, {age: 32}]})</pre>
<p>Здесь выбираемые документы обязательно должны имееть имя Tom и возраст 32 - оба этих признака.</p>
<h3>Поиск по массивам</h3>
<p>Ряд операторов предназначены для работы с массивами:</p>
<ul>
<li><p><span class="b">$all</span>: определяет набор значений, которые должны иметься в массиве</p></li>
<li><p><span class="b">$size</span>: определяет количество элементов, которые должны быть в массиве</p></li>
<li><p><span class="b">$elemMatch</span>: определяет условие, которым должны соответствовать элемены в массиве</p></li>
</ul>
<h4>$all</h4>
<p>Оператор $all определяет массив возможных выражений и требует, чтобы документы имели весь определяемый набор выражений. Соответственно он применяется 
для поиску по массиву. Например, в документах есть массив languages, хранящий иностранные языки, на которых говорит пользователь. И 
чтобы найти всех людей, говорящих одновременно и по-английски, и по-французски, мы можем использовать следующее выражение:</p>
<pre class="brush:js;">
&gt; db.users.find ({languages: {$all : ["english", "french"]}})
</pre>
<h4>Оператор $elemMatch</h4>
<p>Оператор <span class="b">$elemMatch</span> позволяет выбрать документы, в которых массивы содержат элементы, попадающие под определенные условия. 
Например, пусть в базе данных будет коллекция, которая содержит оценки пользователей по определенным курсам. Добавим несколько документов:</p>
<pre class="brush:js;">
&gt; db.grades.insertMany([{student: "Tom", courses:[{name: "Java", grade: 5}, {name: "MongoDB", grade: 4}]}, 
{student: "Alice", courses:[{name: "C++", grade: 3}, {name: "MongoDB", grade: 5}]}])
</pre>
<p>Каждый документ имеет массив courses, который в свою очередь состоит из вложенных документов.</p>
<p>Теперь найдем студентов, которые для курса MongoDB имеют оценку выше 3:</p>
<pre class="brush:js;">
&gt; db.grades.find({courses: {$elemMatch: {name: "MongoDB", grade: {$gt: 3}}}})
</pre>
<h4>Оператор $size</h4>
<p>Оператор $size используется для нахождения документов, в которых массивы имеют число элементов, равным значению $size. Например, 
извлечем все документы, в которых в массиве laguages два элемента:</p>
<pre class="brush:js;">
&gt; db.users.find ({languages: {$size:2}})
</pre>
<p>Такой запрос будет соответствовать, например, следующему документу:</p>
<pre class="brush:js;">
{"name": "Tom", "age": 32, languages: ["english", "german"]}
</pre>
<h3>Оператор $exists</h3>
<p>Оператор $exists позволяет извлечь только те документы, в которых определенный ключ присутствует или отсутствует. Например, вернем 
все документы, в который есть ключ <code>company</code>:</p>
<pre class="brush:js;">
&gt; db.users.find ({company: {$exists:true}})
</pre>
<p>Если мы укажем у оператора $exists в качестве параметра <code>false</code>, то запрос вернет нам только те документы, в которых не определен 
ключ company.</p>
<h3>Оператор $type</h3>
<p>Оператор <span class="b">$type</span> извлекает только те документы, в которых определенный ключ имеет значение определенного типа, например, строку или число:</p>
<pre class="brush:js;">
&gt; db.users.find ({age: {$type:"string"}})
&gt; db.users.find ({age: {$type:"number"}})
</pre>
<h3>Оператор $regex</h3>
<p>Оператор $regex задает регулярное выражение, которому должно соответствовать значение поля. Например, пусть поле name 
обязательно имеет букву "b":</p>
<pre class="brush:js;">
&gt; db.users.find ({name: {$regex:"b"}})
</pre>
<p>Важно понимать, что $regex принимает не просто строки, а именно регулярные выражения, например: <code>name: {$regex:"om$"}</code> - 
значение name должно оканчиваться на "om".</p>

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


<div class="nav"><p><a href="./2.7.php">Назад</a><a href="./">Содержание</a><a href="./2.9.php">Вперед</a></p></div></div>
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
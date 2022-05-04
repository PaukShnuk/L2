<!DOCTYPE html>
<html >
<head>
<title>Node.JS | CRUD в Mongoose</title>
<meta charset="utf-8" />
<meta name="description" content="Чтение, удаление, добавление и изменение данных в Mongoose и MongoDB в Node.js">
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
<h2>CRUD в Mongoose</h2><div class="date">Последнее обновление: 11.08.2021</div>

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

<p>Рассмотрим, как выполнять основные операции с данными в Mongoose.</p>
<h3>Создание документов</h3>
<p>В прошлых темах было в общих чертах описано создание и добавление объектов в Mongoose. В частности, у объекта модели мы можем вызвать метод <span class="b">save()</span>:</p>
<pre class="brush:js;">
const user = new User({name: "Tom", age: 34});

user.save(function(err){
	mongoose.disconnect();
	
	if(err) return console.log(err);
	
	console.log("Сохранен объект user", user);
});
</pre>
<p>Но кроме этого метода также можно использовать метод <span class="b">User.create()</span>:</p>
<pre class="brush:js;">
const mongoose = require("mongoose");
const Schema = mongoose.Schema;
 
// подключение
mongoose.connect("mongodb://localhost:27017/usersdb", { useUnifiedTopology: true, useNewUrlParser: true });
 
// установка схемы
const userScheme = new Schema({
    name: {
        type: String,
        required: true,
        minlength:3,
        maxlength:20
    },
    age: {
        type: Number,
        required: true,
        min: 1,
        max:100
    }
});
const User = mongoose.model("User", userScheme);
User.create({name: "Tom", age: 34}, function(err, doc){
    mongoose.disconnect();
     
    if(err) return console.log(err);
     
    console.log("Сохранен объект user", doc);
});
</pre>
<p>Первый параметр метода - сохраняемый объект.</p>
<h3>Получение данных</h3>
<p>Для получения данных можно использовать целый набор методов:</p>
<ul>
<li><p><span class="b">find</span>: возвращает все объекты, которые соответствуют критерию фильтрации</p></li> 
<li><p><span class="b">findById</span>: возвращает один объект по значению поля _id</p></li>
<li><p><span class="b">findOne</span>: возвращает один объект, который соответствует критерию фильтрации</p></li>
</ul>
<p>Метод <span class="b">find()</span> в качестве первого параметра принимает критерий фильтрации, а второй параметр - функция обратного вызова, в которую передаются полученные из бд документы:</p>
<pre class="brush:js;">
const mongoose = require("mongoose");
const Schema = mongoose.Schema;

mongoose.connect("mongodb://localhost:27017/usersdb", { useUnifiedTopology: true, useNewUrlParser: true });

const userScheme = new Schema({name: String, age: Number}, {versionKey: false});
const User = mongoose.model("User", userScheme);

User.find({}, function(err, docs){
	mongoose.disconnect();
	
	if(err) return console.log(err);
	
	console.log(docs);
});
</pre>
<p>Если в качестве критерия фильтрации передаются пустые фигурные скобки ({}), то возвращаются все объекты:</p>
<img src="./pics/7.13.png" alt="Выборка из базы данных в Mongoose и Node.js" />
<p>Изменим код для получения только тех пользователей, у которых имя - Tom:</p>
<pre class="brush:js;">
User.find({name: "Tom"}, function(err, docs){
	mongoose.disconnect();
	
	if(err) return console.log(err);
	
	console.log(docs);
});
</pre>
<p>Метод <span class="b">findOne()</span> работает аналогично методу find, только возвращает один объект:</p>
<pre class="brush:js;">
User.findOne({name: "Tom"}, function(err, doc){
	mongoose.disconnect();
	
	if(err) return console.log(err);
	
	console.log(doc);
});
</pre>
<p>И метод <span class="b">findById()</span> возвращает документ с определенным идентификатором:</p>
<pre class="brush:js;">
const id = "588a0f8c9151d23ce47bf98d";
User.findById(id, function(err, doc){
	mongoose.disconnect();
	
	if(err) return console.log(err);
	
	console.log(doc);
});
</pre>
<h3>Удаление данных</h3>
<p>Для удаления применяется метод <span class="b">deleteOne()</span> (удаляет один объект) и <span class="b">deleteMany()</span> 
(удаляет все объекты, которые соответствуют критери.). В эти методы передается критерий фильтрации документов на удаление. 
Например, удалим всех пользователей, у которых возраст равен 33:</p>
<pre class="brush:js;">
const mongoose = require("mongoose");
const Schema = mongoose.Schema;

mongoose.connect("mongodb://localhost:27017/usersdb", { useUnifiedTopology: true, useNewUrlParser: true });

const userScheme = new Schema({name: String, age: Number}, {versionKey: false});
const User = mongoose.model("User", userScheme);

User.deleteMany({age:33}, function(err, result){
	mongoose.disconnect();
	
	if(err) return console.log(err);
	
	console.log(result);
});
</pre>
<p>Объект result, который передается в функцию обратного вызова, содержит информацию об операции удаления:</p>
<img src="pics/7.14.png" alt="Удаление данных в Mongoose и Node.js" /> 
<p>Применение метода <span class="b">deleteOne()</span> для удаления одного документа будет аналогичным:</p>
<pre class="brush:js;">
User.deleteOne({name:"Bill"}, function(err, result){
	mongoose.disconnect();
	
	if(err) return console.log(err);
	
	console.log(result);
});
</pre>
<p>Также для удаления одного документа можно использовать метод <span class="b">findOneAndDelete()</span>:</p>
<pre class="brush:js;">
User.findOneAndDelete({name:"Bill"}, function(err, doc){
	mongoose.disconnect();
	
	if(err) return console.log(err);
	
	console.log("Удален пользователь ", doc);
});
</pre>
<p>В отличие от метода remove здесь в функцию обратного вызова передается удаленный документ.</p>
<p>И частная разновидность этого метода - удаление по полю _id в виде метода <span class="b">findByIdAndDelete()</span>:</p>
<pre class="brush:js;">
var id = "588a0f8c9151d23ce47bf98d";
User.findByIdAndDelete(id, function(err, doc){
	mongoose.disconnect();
	
	if(err) return console.log(err);
	
	console.log("Удален пользователь ", doc);
});
</pre>
<h3>Изменение данных</h3>
<p>Для обновления данных в модели предусмотрены методы <span class="b">updateOne()</span> и <span class="b">updateMany()</span>. 
Первый метод обновляет один документ, который соответствует критерию, а второй метод обновляет все документы, которые соответствую критерию 
выборки:</p>
<pre class="brush:js;">
const mongoose = require("mongoose");
const Schema = mongoose.Schema;

mongoose.connect("mongodb://localhost:27017/usersdb", { useUnifiedTopology: true, useNewUrlParser: true });

const userScheme = new Schema({name: String, age: Number}, {versionKey: false});
const User = mongoose.model("User", userScheme);

User.updateOne({name: "Tom"}, {name: "Tom Smith"}, function(err, result){
	
	mongoose.disconnect();
	if(err) return console.log(err);
	console.log(result);
});
</pre>
<p>Первый параметр метода - критерий фильтрации. В данном случае мы находим всех пользователей, у которых имя "Tom". А второй параметр описывает, что и как надо изменить. 
То есть здесь мы меняем имя на "Tom Smith". В функцию обратного вызова передается результат операции:</p>
<img src="pics/7.16.png" alt="Обновление в Mongoose и Node.js" />
<p>Аналогично работает метод <code>updateMany</code>.</p>

<p>Нередко для обновления используется фильтрация по _id. И на этот случай мы можем использовать метод <span class="b">findByIdAndUpdate()</span>:</p>
<pre class="brush:js;">
const id = "588b2d6fc7d95503980ecf99";
User.findByIdAndUpdate(id, {name: "Sam", age: 25}, function(err, user){
	
	mongoose.disconnect();
	if(err) return console.log(err);
	console.log("Обновленный объект", user);
});
</pre>
<p>Первый параметр метода - значения для поля _id у обновляемого документа, а второй - набор новых значений для полей объекта. В функцию обратного вызова 
передается обновленный документ:</p>
<img src="pics/7.17.png" alt="findByIdAndUpdate в Mongoose и Node.js" />
<p>Эту же настройку также можно установить при создании подключения:</p>
<pre class="brush:js;">
mongoose.connect("mongodb://localhost:27017/usersdb", 
				{ useUnifiedTopology: true, useNewUrlParser: true}, 
				function(err){
	//...............
});
</pre>
<p>Но по умолчанию передается старое состояние документа. Если же нам надо получить документ уже в измененном состоянии, то в метод findByIdAndUpdate 
необходимо передать еще один параметр:</p>
<pre class="brush:js;">
User.findByIdAndUpdate(id, {name: "Bilbo Baggins", age: 111}, {new: true}, function(err, user){
	
	mongoose.disconnect();
	if(err) return console.log(err);
	console.log("Обновленный объект", user);
});
</pre>
<p>Если нам необходимо обновить и возвратить обновленный документ не только по id, а вообще по любому критерию, то можно использовать метод <span class="b">findOneAndUpdate</span>:</p>
<pre class="brush:js;">
User.findOneAndUpdate({name: "Sam"}, {name: "Bill", age:24}, {new: true}, function(err, user){
	
	mongoose.disconnect();
	if(err) return console.log(err);
	console.log("Обновленный объект", user);
});
</pre>
<p>Первый параметр представляет критерий выборки. Второй параметр представляет обновленные значения документа. Третий параметр указывает, 
что мы хотим возвратить вариант документа именно после обновления - <code>{new: true}</code> - при значении false возвращается старая копия, которая была 
до обновления. И четвертый параметр - функция обработчика, вызываемая при получении результата.</p>
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


<div class="nav"><p><a href="./6.7.php">Назад</a><a href="./">Содержание</a><a href="./6.9.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в  Node.js</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/1.1.php">Что такое Node.js. Начало работы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/1.2.php">Первое приложение</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы работы с Node.js</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.1.php">Модули</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.2.php">Работа с модулями</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.3.php">Объект global и глобальные переменные</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.5.php">Передача параметров приложению</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.4.php">NPM. Package.json. Установка модулей. Определение команд</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.6.php">Nodemon</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.7.php">Асинхронность в Node.js</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.8.php">Работа с файлами</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.9.php">События</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.10.php">Stream</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/2.11.php">Pipe</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Сервер</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/3.1.php">Создание сервера</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/3.4.php">Отправка файлов</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/3.2.php">Получение данных от клиента</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/3.3.php">Шаблоны</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Express</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.1.php">Начало работы с Express</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.2.php">Конвейер обработки запроса и middleware</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.12.php">Отправка ответа</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.4.php">Статические файлы</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.3.php">Маршрутизация</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.13.php">Переадресация</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.14.php">Передача данных приложению. Параметры строки запроса</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.5.php">POST-запросы и отправка форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.15.php">Параметры маршрута</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.16.php">Router</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.6.php">JSON и AJAX</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.7.php">Представления и движок представлений Handlebars</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.8.php">Частичные представления в Handlebars</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.19.php">Layout в Handlebars</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.9.php">Хелперы в Handlebars</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.10.php">Движок EJS</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.17.php">Движок Pug</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.18.php">Частичные представления и layout в Pug</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/4.11.php">Создание API</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Тестирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/5.1.php">Mocha</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/5.2.php">Assert</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/5.3.php">Тестирование Express</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/5.4.php">Организация тестов и метод describe</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Node.js и MongoDB</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.1.php">Начало работы с MongoDB</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.2.php">Добавление данных в MongoDB</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.10.php">Получение данных в MongoDB</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.3.php">Удаление документов в MongoDB</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.4.php">Обновление документов в MongoDB</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.5.php">Express и MongoDB</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.6.php">Mongoose</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.7.php">Определение схемы в Mongoose</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.8.php">CRUD в Mongoose</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/6.9.php">Express и Mongoose</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. MySQL</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/8.1.php">Подключение к MySQL</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/8.2.php">Выполнение запросов к MySQL</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/8.3.php">Promise API</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/8.4.php">Основные операции с данными</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/8.5.php">Пулы подключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/8.6.php">MySQL и Express</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Sequelize</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/9.1.php">Подключение к базе данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/9.2.php">Определение моделей</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/9.3.php">Запросы к базе данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/9.4.php">Sequelize и Express</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/9.5.php">Связь один-ко-многим</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/9.6.php">Связь один-к-одному</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/9.7.php">Связь многие-ко-многим</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Паттерн MVC</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/7.1.php">Контроллеры</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/7.2.php">Модели и представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/7.3.php">Связь с базой данных MongoDB</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Загрузка файлов</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/web/nodejs/10.1.php">Загрузка файлов с помощью multer</a></span></li>
			<li><span class="file"><a href="//metanit.com/web/nodejs/10.2.php">Настройка multer</a></span></li>
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
	
	$("li:contains('Глава 6.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 6.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
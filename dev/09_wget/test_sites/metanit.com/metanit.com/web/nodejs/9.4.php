<!DOCTYPE html>
<html >
<head>
<title>Node.JS | Sequelize и Express</title>
<meta charset="utf-8" />
<meta name="description" content="Запросы к базе данных MySQL через Sequelize в веб-приложении на Node.js и Express">
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
<h2>Sequelize и Express</h2><div class="date">Последнее обновление: 07.09.2021</div>

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

<p>Создадим простейшее веб-приложение с использованием Express, которое взаимодействует с бд MySQL через Sequelize. 
Прежде всего определим новый проект и добавим в него пакеты express, mysql2, sequelize и handlebars:</p>
<div class="console">
<pre class="consoletext">
npm install --save hbs express mysql2 sequelize
</pre>
</div>
<p>В качестве визуальной части мы будем использовать представления Handlebars. Для этого определим в проекте папку <span class="b">views</span>. 
В ней создадим новый файл <span class="b">index.hbs</span>:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Список пользователей&lt;/title&gt;
    &lt;meta charset="utf-8" /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Список пользователей&lt;/h1&gt;
    &lt;p&gt;&lt;a href="/create"&gt;Добавить пользователя&lt;/a&gt;&lt;/p&gt;
    &lt;table&gt;
        &lt;tr&gt;&lt;th&gt;Name&lt;/th&gt;&lt;th&gt;Age&lt;/th&gt;&lt;th&gt;&lt;/th&gt;&lt;/tr&gt;
        {{#each users}}
            &lt;tr&gt;
                &lt;td&gt;{{this.name}}&lt;/td&gt;
                &lt;td&gt;{{this.age}}&lt;/td&gt;
                &lt;td&gt;
                    &lt;a href="/edit/{{this.id}}"&gt;Edit&lt;/a&gt;|
                    &lt;form action="delete/{{this.id}}" method="POST" style="display:inline;"&gt;
                        &lt;input type="submit" value="Delete" /&gt;
                    &lt;/form&gt;
                &lt;/td&gt;
            &lt;/tr&gt;
        {{/each}}
    &lt;/table&gt;
&lt;/body&gt;
&lt;html&gt;
</pre>
<p>Данное представление выводит список объектов в виде таблицы с возможностью их редактирования и удаления. Над таблицей определена ссылка на добавление новых объектов.</p>
<p>Затем добавим в папку <span class="b">views</span> новый файл <span class="b">create.hbs</span> с формой для создания нового объекта:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Добавление пользователя&lt;/title&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;style&gt;.field{width:180px;}&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Добавление пользователя&lt;/h1&gt;
     &lt;form method="POST"&gt;
        &lt;label&gt;Имя&lt;/label&gt;&lt;br&gt;
        &lt;input name="name" class="field"/&gt;&lt;br&gt;&lt;br&gt;
        &lt;label&gt;Возраст&lt;/label&gt;&lt;br&gt;
        &lt;input name="age" type="number" class="field" min="1" max="110" /&gt;&lt;br&gt;&lt;br&gt;
        &lt;input type="submit" value="Отправить" /&gt;
     &lt;/form&gt;
     &lt;a href="/"&gt;К списку пользователей&lt;/a&gt;
&lt;/body&gt;
&lt;html&gt;
</pre>
<p>И также добавим в папку <span class="b">views</span> новый файл <span class="b">edit.hbs</span> с формой для редактирования объекта:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Редактирование пользователя&lt;/title&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;style&gt;.field{width:180px;}&lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Редактирование пользователя&lt;/h1&gt;
     &lt;form action="/edit" method="POST"&gt;
        &lt;input type="hidden" name="id" value="{{user.id}}" /&gt;
        &lt;label&gt;Имя&lt;/label&gt;&lt;br&gt;
        &lt;input name="name" value="{{user.name}}"  class="field" /&gt;&lt;br&gt;&lt;br&gt;
        &lt;label&gt;Возраст&lt;/label&gt;&lt;br&gt;
        &lt;input name="age" type="number" min="1" max="110" value="{{user.age}}" class="field" /&gt;&lt;br&gt;&lt;br&gt;
        &lt;input type="submit" value="Отправить" /&gt;
     &lt;/form&gt;
     &lt;a href="/"&gt;К списку пользователей&lt;/a&gt;
&lt;/body&gt;
&lt;html&gt;
</pre>
<p>И в конце определим в корневой папке проекта главный файл приложения - <span class="b">app.js</span>:</p>
<pre class="brush:js;">
const Sequelize = require("sequelize");
const express = require("express");

const app = express();
const urlencodedParser = express.urlencoded({extended: false});

// определяем объект Sequelize
const sequelize = new Sequelize("usersdb", "root", "123456", {
  dialect: "mysql",
  host: "localhost",
  define: {
    timestamps: false
  }
});

// определяем модель User
const User = sequelize.define("user", {
  id: {
    type: Sequelize.INTEGER,
    autoIncrement: true,
    primaryKey: true,
    allowNull: false
  },
  name: {
    type: Sequelize.STRING,
    allowNull: false
  },
  age: {
    type: Sequelize.INTEGER,
    allowNull: false
  }
});

app.set("view engine", "hbs");

// синхронизация с бд, после успшной синхронизации запускаем сервер
sequelize.sync().then(()=&gt;{
  app.listen(3000, function(){
    console.log("Сервер ожидает подключения...");
  });
}).catch(err=&gt;console.log(err));

// получение данных
app.get("/", function(req, res){
    User.findAll({raw: true }).then(data=&gt;{
      res.render("index.hbs", {
        users: data
      });
    }).catch(err=&gt;console.log(err));
});

app.get("/create", function(req, res){
    res.render("create.hbs");
});

// добавление данных
app.post("/create", urlencodedParser, function (req, res) {
        
    if(!req.body) return res.sendStatus(400);
        
    const username = req.body.name;
    const userage = req.body.age;
    User.create({ name: username, age: userage}).then(()=&gt;{
      res.redirect("/");
    }).catch(err=&gt;console.log(err));
});

// получаем объект по id для редактирования
app.get("/edit/:id", function(req, res){
  const userid = req.params.id;
  User.findAll({where:{id: userid}, raw: true })
  .then(data=&gt;{
    res.render("edit.hbs", {
      user: data[0]
    });
  })
  .catch(err=&gt;console.log(err));
});

// обновление данных в БД
app.post("/edit", urlencodedParser, function (req, res) {
        
  if(!req.body) return res.sendStatus(400);

  const username = req.body.name;
  const userage = req.body.age;
  const userid = req.body.id;
  User.update({name:username, age: userage}, {where: {id: userid} }).then(() =&gt; {
    res.redirect("/");
  })
  .catch(err=&gt;console.log(err));
});

// удаление данных
app.post("/delete/:id", function(req, res){  
  const userid = req.params.id;
  User.destroy({where: {id: userid} }).then(() =&gt; {
    res.redirect("/");
  }).catch(err=&gt;console.log(err));
});
</pre>
<p>Итоговая структура проекта:</p>
<img src="pics/10.1.png" alt="MySQL, Sequelize и Node.js" />
<p>При обращении к корню приложения срабатывает метод</p>
<pre class="brush:js;">
app.get("/", function(req, res){
    User.findAll({raw: true }).then(data=&gt;{
      res.render("index.hbs", {
        users: data
      });
    }).catch(err=&gt;console.log(err));
});
</pre>
<p>Он получает данные из бд и передает их представлению <span class="b">index.hbs</span>. Если база данных уже содержит какие-либо данные, то при запуске 
приложения мы увидим их на странице:</p>
<img src="pics/10.2.png" alt="Получение данных из MySQL в Node.js" />
<p>При нажатии на ссылку добавления серверу будет отправлятьс get-запрос, который будет обрабатываться следующим методом:</p>
<pre class="brush:js;">
app.get("/create", function(req, res){
    res.render("create.hbs");
});
</pre>
<p>Метод возвращает клиенту форму для добавления:</p>
<img src="pics/10.3.png" alt="Добавление данных в MySQL через Sequelize в Express и Node.js" />
<p>После отправки формы данные в запросе POST отправляются методу:</p>
<pre class="brush:js;">
app.post("/create", urlencodedParser, function (req, res) {
        
    if(!req.body) return res.sendStatus(400);
        
    const username = req.body.name;
    const userage = req.body.age;
    User.create({ name: username, age: userage}).then(()=&gt;{
      res.redirect("/");
    }).catch(err=&gt;console.log(err));
});
</pre>
<p>Метод получает данные и отправляет их БД.</p>
<p>При нажатии на ссылку редактирования в списке объектов следующему методу в GET-зпросе передается id объекта:</p>
<pre class="brush:js;">
app.get("/edit/:id", function(req, res){
  const userid = req.params.id;
  User.findAll({where:{id: userid}, raw: true })
  .then(data=&gt;{
    res.render("edit.hbs", {
      user: data[0]
    });
  })
  .catch(err=&gt;console.log(err));
});
</pre>
<p>Метод получает id и по нему извлекает из БД нужный объект из БД и передается его на форму в представлении edit.hbs:</p>
<img src="pics/10.4.png" alt="Редактирование данных в MySQL через Sequelize в Express и Node.js" />
<p>После редактирования и нажатия на кнопку данные отправляются в POST-запросе следующему методу:</p>
<pre class="brush:js;">
app.post("/edit", urlencodedParser, function (req, res) {
        
  if(!req.body) return res.sendStatus(400);

  const username = req.body.name;
  const userage = req.body.age;
  const userid = req.body.id;
  User.update({name:username, age: userage}, {where: {id: userid} }).then(() =&gt; {
    res.redirect("/");
  }).catch(err=&gt;console.log(err));
});
</pre>
<p>Метод получает данные и отправляет их в БД.</p>
<p>При нажатии на кнопку удаления в списке объектов срабатывает метод</p>
<pre class="brush:js;">
app.post("/delete/:id", function(req, res){  
  const userid = req.params.id;
  User.destroy({where: {id: userid} }).then(() =&gt; {
    res.redirect("/");
  }).catch(err=&gt;console.log(err));
</pre>
<p>Метод получает id удаляемого объекта и удаляет его из базы данных.</p>
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


<div class="nav"><p><a href="9.3.php">Назад</a><a href="./">Содержание</a><a href="9.5.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 8.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 8.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
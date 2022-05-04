<!DOCTYPE html>
<html >
<head>
<title>Node.JS | Создание API</title>
<meta charset="utf-8" />
<meta name="description" content="Создание API в Express и Node.js, работа с файлом json">
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
<h2>Создание API</h2><div class="date">Последнее обновление: 07.09.2021</div>

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

<p>Используя Express и Node.js, мы можем реализовать полноценный API в стиле REST для взаимодействия с пользователем. Архитектура REST предполагает применение следующих методов или типов запросов HTTP для взаимодействия с сервером:</p>
<ul>
<li><p>GET</p></li>
<li><p>POST</p></li>
<li><p>PUT</p></li>
<li><p>DELETE</p></li>
</ul>
<p>Зачастую REST-стиль особенно удобен при создании всякого рода Single Page Application, которые нередко используют специальные javascript-фреймворки типа 
Angular, React или Knockout.</p>
<p>Рассмотрим, как создать свой API. Для нового проекта создадим новую папку, которая пусть будет называться <span class="b">webapp</span>. Сразу определим в проекте файл <span class="b">package.json</span>:</p>
<pre class="brush:js;">
{
  "name": "webapp",
  "version": "1.0.0",
  "dependencies": {
    "express": "^4.17.0"
  }
}
</pre>
<p>В проекте нам понадобятся express для обработки запроса. Далее перейдем к этому каталогу в командной строке/терминале и для добавления пакета выполним команду:</p>
<div class="console">
<pre class="consoletext">
npm install
</pre>
</div>
<p>В данном случае мы создадим экспериментальный проект, который будет хранить данные в файле json и который призван просто показать создание API в Node.js в стиле REST. 
А пока добавим в папку проекта новый файл <span class="b">users.json</span> со следующим содержанием:</p>
<pre class="brush:js;">
[{
	"id":1,
	"name":"Tom",
	"age":24
},
{
	"id":2,
	"name":"Bob",
	"age":27
},
{
	"id":3,
	"name":"Alice",
	"age":"23"
}]
</pre>
<p>Для чтения и записи в этот файл мы будем использовать встроенный модуль fs. Для обработки запросов определим в проекте следующий файл <span class="ii">app.js</span>:</p>
<pre class="brush:js;">
const express = require("express");
const fs = require("fs");
   
const app = express();
const jsonParser = express.json();
 
app.use(express.static(__dirname + "/public"));
 
const filePath = "users.json";
app.get("/api/users", function(req, res){
      
    const content = fs.readFileSync(filePath,"utf8");
    const users = JSON.parse(content);
    res.send(users);
});
// получение одного пользователя по id
app.get("/api/users/:id", function(req, res){
      
    const id = req.params.id; // получаем id
    const content = fs.readFileSync(filePath, "utf8");
    const users = JSON.parse(content);
    let user = null;
    // находим в массиве пользователя по id
    for(var i=0; i&lt;users.length; i++){
        if(users[i].id==id){
            user = users[i];
            break;
        }
    }
    // отправляем пользователя
    if(user){
        res.send(user);
    }
    else{
        res.status(404).send();
    }
});
// получение отправленных данных
app.post("/api/users", jsonParser, function (req, res) {
     
    if(!req.body) return res.sendStatus(400);
     
    const userName = req.body.name;
    const userAge = req.body.age;
    let user = {name: userName, age: userAge};
     
    let data = fs.readFileSync(filePath, "utf8");
    let users = JSON.parse(data);
     
    // находим максимальный id
    const id = Math.max.apply(Math,users.map(function(o){return o.id;}))
    // увеличиваем его на единицу
    user.id = id+1;
    // добавляем пользователя в массив
    users.push(user);
    data = JSON.stringify(users);
    // перезаписываем файл с новыми данными
    fs.writeFileSync("users.json", data);
    res.send(user);
});
 // удаление пользователя по id
app.delete("/api/users/:id", function(req, res){
      
    const id = req.params.id;
    let data = fs.readFileSync(filePath, "utf8");
    let users = JSON.parse(data);
    let index = -1;
    // находим индекс пользователя в массиве
    for(var i=0; i &lt; users.length; i++){
        if(users[i].id==id){
            index=i;
            break;
        }
    }
    if(index &gt; -1){
        // удаляем пользователя из массива по индексу
        const user = users.splice(index, 1)[0];
        data = JSON.stringify(users);
        fs.writeFileSync("users.json", data);
        // отправляем удаленного пользователя
        res.send(user);
    }
    else{
        res.status(404).send();
    }
});
// изменение пользователя
app.put("/api/users", jsonParser, function(req, res){
      
    if(!req.body) return res.sendStatus(400);
     
    const userId = req.body.id;
    const userName = req.body.name;
    const userAge = req.body.age;
     
    let data = fs.readFileSync(filePath, "utf8");
    const users = JSON.parse(data);
    let user;
    for(var i=0; i&lt;users.length; i++){
        if(users[i].id==userId){
            user = users[i];
            break;
        }
    }
    // изменяем данные у пользователя
    if(user){
        user.age = userAge;
        user.name = userName;
        data = JSON.stringify(users);
        fs.writeFileSync("users.json", data);
        res.send(user);
    }
    else{
        res.status(404).send(user);
    }
});
  
app.listen(3000, function(){
    console.log("Сервер ожидает подключения...");
});
</pre>
<p>Для обработки запросов определено пять методов для каждого типа запросов: <span class="b">app.get()/app.post()/app.delete()/app.put()</span></p>
<p>Когда приложение получает запрос типа GET по адресу "api/users", то срабатывает следующий метод:</p>
<pre class="brush:js;">
app.get("/api/users", function(req, res){
      
    const content = fs.readFileSync(filePath,"utf8");
    const users = JSON.parse(content);
    res.send(users);
});
</pre>
<p>В качестве результата обработки мы должны отправить массив пользователей, которые считываем из файла. Для упрощения 
кода приложения в рамкаха данного экспериментального проекта для чтения/записи файла применяются синхронные методы 
<span class="b">fs.readFileSync()/fs.writeFileSync()</span>. Но в реальности, как правило, работа с данными будет идти через базу данных, а далее мы все это рассмотрим на примере MongoDB.</p>
<p>И чтобы получить данные из файла с помощью метода <code>fs.readFileSync()</code> считываем данные в строку, которую парсим в массив объектов с помощью функции 
<span class="b">JSON.parse()</span>. И в конце полученные данные отправляем клиенту методом <code>res.send()</code>.</p>
<p>Аналогично работает другой метод <span class="b">app.get()</span>, который срабатывает, когда в адресе указан id пользователя:</p>
<pre class="brush:js;">
app.get("/api/users/:id", function(req, res){
      
    const id = req.params.id; // получаем id
    const content = fs.readFileSync(filePath, "utf8");
    const users = JSON.parse(content);
    let user = null;
    // находим в массиве пользователя по id
    for(var i=0; i&lt;users.length; i++){
        if(users[i].id==id){
            user = users[i];
            break;
        }
    }
    // отправляем пользователя
    if(user){
        res.send(user);
    }
    else{
        res.status(404).send();
    }
});
</pre>
<p>Единственное, что в этом случае нам надо найти нужного пользователя по id в массиве, а если он не был найден, возвратить статусный код 404: <code>res.status(404).send()</code>.</p>
<p>При получении запроса методом POST нам надо применить парсер jsonParser для извлечения данных из запроса:</p>
<pre class="brush:js;">
// получение отправленных данных
app.post("/api/users", jsonParser, function (req, res) {
     
    if(!req.body) return res.sendStatus(400);
     
    const userName = req.body.name;
    const userAge = req.body.age;
    let user = {name: userName, age: userAge};
     
    let data = fs.readFileSync(filePath, "utf8");
    let users = JSON.parse(data);
     
    // находим максимальный id
    const id = Math.max.apply(Math,users.map(function(o){return o.id;}))
    // увеличиваем его на единицу
    user.id = id+1;
    // добавляем пользователя в массив
    users.push(user);
    data = JSON.stringify(users);
    // перезаписываем файл с новыми данными
    fs.writeFileSync("users.json", data);
    res.send(user);
});
</pre>
<p>После получения данных нам надо создать новый объект и добавить его в массив объектов. Для этого считываем данные из файла, добавляем в массив 
новый объект и перезаписываем файл с обновленными данными.</p>
<p>При удалении производим похожие действия, только теперь извлекаем из массива удаляемый объект и опять же перезаписываем файл:</p>
<pre class="brush:js;">
 // удаление пользователя по id
app.delete("/api/users/:id", function(req, res){
      
    const id = req.params.id;
    let data = fs.readFileSync(filePath, "utf8");
    let users = JSON.parse(data);
    let index = -1;
    // находим индекс пользователя в массиве
    for(var i=0; i &lt; users.length; i++){
        if(users[i].id==id){
            index=i;
            break;
        }
    }
    if(index &gt; -1){
        // удаляем пользователя из массива по индексу
        const user = users.splice(index, 1)[0];
        data = JSON.stringify(users);
        fs.writeFileSync("users.json", data);
        // отправляем удаленного пользователя
        res.send(user);
    }
    else{
        res.status(404).send();
    }
});
</pre>
<p>Если объект не найден, возвращаем статусный код 404.</p>
<p>Если приложению приходит PUT-запрос, то он обрабатывается методом <span class="b">app.put()</span>, в котором с помощью jsonParser получаем измененные данные:</p>
<pre class="brush:js;">
app.put("/api/users", jsonParser, function(req, res){
      
    if(!req.body) return res.sendStatus(400);
     
    const userId = req.body.id;
    const userName = req.body.name;
    const userAge = req.body.age;
     
    let data = fs.readFileSync(filePath, "utf8");
    const users = JSON.parse(data);
    let user;
    for(var i=0; i&lt;users.length; i++){
        if(users[i].id==userId){
            user = users[i];
            break;
        }
    }
    // изменяем данные у пользователя
    if(user){
        user.age = userAge;
        user.name = userName;
        data = JSON.stringify(users);
        fs.writeFileSync("users.json", data);
        res.send(user);
    }
    else{
        res.status(404).send(user);
    }
});
</pre>
<p>Здесь также для поиска изменяемого объекта считываем данные из файла, находим изменяемого пользователя по id, изменяем у него свойства и сохраняем обновленные 
данные в файл.</p>
<p>Таким образом, мы определили простейший API. Теперь добавим код клиента. Итак, как установлено в коде, Express для хранения статических файлов использует 
папку <span class="b">public</span>, поэтому создадим в проекте подобную папку. В этой папке определим новый файл <span class="b">index.html</span>, который будет выполнять роль клиента. 
В итоге весь проект будет выглядеть следующим образом:</p>
<img src="pics/5.9.png" alt="Web API в Express и Node.js" />
<p>Далее определим в файле index.html следующий код:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width" /&gt;
    &lt;title&gt;Список пользователей&lt;/title&gt;
    &lt;link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h2&gt;Список пользователей&lt;/h2&gt;
    &lt;form name="userForm"&gt;
        &lt;input type="hidden" name="id" value="0" /&gt;
        &lt;div class="form-group"&gt;
            &lt;label for="name"&gt;Имя:&lt;/label&gt;
            &lt;input class="form-control" name="name" /&gt;
        &lt;/div&gt;
        &lt;div class="form-group"&gt;
            &lt;label for="age"&gt;Возраст:&lt;/label&gt;
            &lt;input class="form-control" name="age" /&gt;
        &lt;/div&gt;
        &lt;div class="panel-body"&gt;
            &lt;button type="submit" class="btn btn-sm btn-primary"&gt;Сохранить&lt;/button&gt;
            &lt;a id="reset" class="btn btn-sm btn-primary"&gt;Сбросить&lt;/a&gt;
        &lt;/div&gt;
    &lt;/form&gt;
    &lt;table class="table table-condensed table-striped table-bordered"&gt;
        &lt;thead&gt;&lt;tr&gt;&lt;th&gt;Id&lt;/th&gt;&lt;th&gt;Имя&lt;/th&gt;&lt;th&gt;возраст&lt;/th&gt;&lt;th&gt;&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt;
        &lt;tbody&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;
  
    &lt;script&gt;
	// Получение всех пользователей
        async function GetUsers() {
            // отправляет запрос и получаем ответ
            const response = await fetch("/api/users", {
                method: "GET",
                headers: { "Accept": "application/json" }
            });
            // если запрос прошел нормально
            if (response.ok === true) {
                // получаем данные
                const users = await response.json();
                let rows = document.querySelector("tbody"); 
                users.forEach(user =&gt; {
                    // добавляем полученные элементы в таблицу
                    rows.append(row(user));
                });
            }
        }
        // Получение одного пользователя
        async function GetUser(id) {
            const response = await fetch("/api/users/" + id, {
                method: "GET",
                headers: { "Accept": "application/json" }
            });
            if (response.ok === true) {
                const user = await response.json();
                const form = document.forms["userForm"];
                form.elements["id"].value = user.id;
                form.elements["name"].value = user.name;
                form.elements["age"].value = user.age;
            }
        }
        // Добавление пользователя
        async function CreateUser(userName, userAge) {
 
            const response = await fetch("api/users", {
                method: "POST",
                headers: { "Accept": "application/json", "Content-Type": "application/json" },
                body: JSON.stringify({
                    name: userName,
                    age: parseInt(userAge, 10)
                })
            });
            if (response.ok === true) {
                const user = await response.json();
                reset();
                document.querySelector("tbody").append(row(user));
            }
        }
        // Изменение пользователя
        async function EditUser(userId, userName, userAge) {
            const response = await fetch("api/users", {
                method: "PUT",
                headers: { "Accept": "application/json", "Content-Type": "application/json" },
                body: JSON.stringify({
                    id: userId,
                    name: userName,
                    age: parseInt(userAge, 10)
                })
            });
            if (response.ok === true) {
                const user = await response.json();
                reset();
                document.querySelector("tr[data-rowid='" + user.id + "']").replaceWith(row(user));
            }
        }
        // Удаление пользователя
        async function DeleteUser(id) {
            const response = await fetch("/api/users/" + id, {
                method: "DELETE",
                headers: { "Accept": "application/json" }
            });
            if (response.ok === true) {
                const user = await response.json();
                document.querySelector("tr[data-rowid='" + user.id + "']").remove();
            }
        }
 
        // сброс формы
        function reset() {
            const form = document.forms["userForm"];
            form.reset();
            form.elements["id"].value = 0;
        }
        // создание строки для таблицы
        function row(user) {
 
            const tr = document.createElement("tr");
            tr.setAttribute("data-rowid", user.id);
 
            const idTd = document.createElement("td");
            idTd.append(user.id);
            tr.append(idTd);
 
            const nameTd = document.createElement("td");
            nameTd.append(user.name);
            tr.append(nameTd);
 
            const ageTd = document.createElement("td");
            ageTd.append(user.age);
            tr.append(ageTd);
             
            const linksTd = document.createElement("td");
 
            const editLink = document.createElement("a");
            editLink.setAttribute("data-id", user.id);
            editLink.setAttribute("style", "cursor:pointer;padding:15px;");
            editLink.append("Изменить");
            editLink.addEventListener("click", e =&gt; {
 
                e.preventDefault();
                GetUser(user.id);
            });
            linksTd.append(editLink);
 
            const removeLink = document.createElement("a");
            removeLink.setAttribute("data-id", user.id);
            removeLink.setAttribute("style", "cursor:pointer;padding:15px;");
            removeLink.append("Удалить");
            removeLink.addEventListener("click", e =&gt; {
 
                e.preventDefault();
                DeleteUser(user.id);
            });
 
            linksTd.append(removeLink);
            tr.appendChild(linksTd);
 
            return tr;
        }
        // сброс значений формы
        document.getElementById("reset").click(function (e) {
 
            e.preventDefault();
            reset();
        })
 
        // отправка формы
        document.forms["userForm"].addEventListener("submit", e =&gt; {
            e.preventDefault();
            const form = document.forms["userForm"];
            const id = form.elements["id"].value;
            const name = form.elements["name"].value;
            const age = form.elements["age"].value;
            if (id == 0)
                CreateUser(name, age);
            else
                EditUser(id, name, age);
        });
 
        // загрузка пользователей
        GetUsers();
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Основная логика здесь заключена в коде javascript. При загрузке страницы в браузере получаем все объекты из БД с помощью функции GetUsers:</p>
<pre class="brush:js;">
async function GetUsers() {
	// отправляет запрос и получаем ответ
	const response = await fetch("/api/users", {
		method: "GET",
		headers: { "Accept": "application/json" }
	});
	// если запрос прошел нормально
	if (response.ok === true) {
		// получаем данные
		const users = await response.json();
		let rows = document.querySelector("tbody"); 
		users.forEach(user =&gt; {
			// добавляем полученные элементы в таблицу
			rows.append(row(user));
		});
	}
}
</pre>
<p>Для добавления строк в таблицу используется функция <code>row()</code>, которая возвращает строку. В этой строке будут определены ссылки для изменения и удаления пользователя.</p>
<p>Ссылка для изменения пользователя с помощью функции <code>GetUser()</code> получает с сервера выделенного пользователя:</p>
<pre class="brush:js;">
async function GetUser(id) {
	const response = await fetch("/api/users/" + id, {
		method: "GET",
		headers: { "Accept": "application/json" }
	});
	if (response.ok === true) {
		const user = await response.json();
		const form = document.forms["userForm"];
		form.elements["id"].value = user.id;
		form.elements["name"].value = user.name;
		form.elements["age"].value = user.age;
	}
}
</pre>
<p>И выделенный пользователь добавляется в форму над таблицей. Эта же форма применяется и для добавления объекта. С помощью скрытого поля, которое хранит id пользователя, мы можем узнать, какое действие выполняется - добавление или редактирование. Если id равен 0, то выполняется функция CreateUser, которая отправляет данные в POST-запросе:</p>
<pre class="brush:js;">
async function CreateUser(userName, userAge) {
 
	const response = await fetch("api/users", {
		method: "POST",
		headers: { "Accept": "application/json", "Content-Type": "application/json" },
		body: JSON.stringify({
			name: userName,
			age: parseInt(userAge, 10)
		})
	});
	if (response.ok === true) {
		const user = await response.json();
		reset();
		document.querySelector("tbody").append(row(user));
	}
}
</pre>
<p>Если же ранее пользователь был загружен на форму, и в скрытом поле сохранился его id, то выполняется функция EditUser, которая отправляет PUT-запрос:</p>
<pre class="brush:js;">
async function EditUser(userId, userName, userAge) {
	const response = await fetch("api/users", {
		method: "PUT",
		headers: { "Accept": "application/json", "Content-Type": "application/json" },
		body: JSON.stringify({
			id: userId,
			name: userName,
			age: parseInt(userAge, 10)
		})
	});
	if (response.ok === true) {
		const user = await response.json();
		reset();
		document.querySelector("tr[data-rowid='" + user.id + "']").replaceWith(row(user));
	}
}
</pre>
<p>Запустим приложение, обратимся в браузере по адресу "http://localhost:3000" и мы сможем управлять пользователями, которые хранятся в файле json:</p>
<img src="pics/5.10.png" alt="REST и API в Express и Node.js" />
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


<div class="nav"><p><a href="4.18.php">Назад</a><a href="./">Содержание</a><a href="5.1.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 4.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core и C# | Пример приложения Web API</title>
<meta charset="utf-8" />
<meta name="description" content="Создание Web Minimal API в ASP.NET Core и C#, веб-приложение с архитектурой REST, методы MapGet, MapPost, MapPut, MapDelete, взаимодействие с клиентом javascript через Fetch API">
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
<h1>Web API</h1><h2>Пример приложения Web API</h2><div class="date">Последнее обновление: 25.12.2021</div>

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

<p><span class="b">Web API</span> представляет способ построения приложения в стиле REST 
(Representation State Transfer или "передача состояния представления"). 
REST-архитектура предполагает применение следующих методов или типов запросов HTTP для взаимодействия с сервером:</p>
<ul>
<li><p><span class="b">GET</span> (получение данных)</p></li>
<li><p><span class="b">POST</span> (добавление данных)</p></li>
<li><p><span class="b">PUT</span> (изменение данных)</p></li>
<li><p><span class="b">DELETE</span> (удаление данных)</p></li>
</ul>
<p>Для реализации подобной архитектуру фреймворк ASP.NET Core предоставляет ряд встроенных методов, которые как и метод <span class="b">Map()</span> реализованы 
как методы расширения для типа <span class="b">Microsoft.AspNetCore.Routing.IEndpointRouteBuilder</span> (а соответственно и для типа WebApplication). 
Эти методы также встраивают в конвейер обработки запроса <span class="b">конечные точки</span>, которые обрабатывают определенные типы запросов:</p>
<ul>
<li><p><span class="b">MapGet</span> (запрос GET)</p></li>
<li><p><span class="b">MapPost</span> (запрос POST)</p></li>
<li><p><span class="b">MapPut</span> (запрос PUT)</p></li>
<li><p><span class="b">MapDelete</span> (запрос DELETE)</p></li>
</ul>
<p>Рассмотрим, как мы можем реализовать с помощью этих методов простейший API.</p>
<h3>Создание сервера</h3>
<p>Вначале определим веб-приложение на ASP.NET Core, которое и будет собственно представлять Web API:</p>
<pre class="brush:c#;">
// начальные данные
List&lt;Person&gt; users = new List&lt;Person&gt;
{
    new() { Id = Guid.NewGuid().ToString(), Name = "Tom", Age = 37 },
    new() { Id = Guid.NewGuid().ToString(), Name = "Bob", Age = 41 },
    new() { Id = Guid.NewGuid().ToString(), Name = "Sam", Age = 24 }
};

var builder = WebApplication.CreateBuilder();
var app = builder.Build();

app.UseDefaultFiles();
app.UseStaticFiles();

app.MapGet("/api/users", ()=&gt; users);

app.MapGet("/api/users/{id}", (string id) =&gt;
{
    // получаем пользователя по id
    Person? user = users.FirstOrDefault(u =&gt; u.Id == id);
    // если не найден, отправляем статусный код и сообщение об ошибке
    if (user == null)  return Results.NotFound(new { message = "Пользователь не найден" });

    // если пользователь найден, отправляем его
    return Results.Json(user);
});

app.MapDelete("/api/users/{id}", (string id) =&gt;
{
    // получаем пользователя по id
    Person? user = users.FirstOrDefault(u =&gt; u.Id == id);

    // если не найден, отправляем статусный код и сообщение об ошибке
    if (user == null) return Results.NotFound(new { message = "Пользователь не найден" });

    // если пользователь найден, удаляем его
    users.Remove(user);
    return Results.Json(user);
});

app.MapPost("/api/users", (Person user)=&gt;{

    // устанавливаем id для нового пользователя
    user.Id = Guid.NewGuid().ToString();
    // добавляем пользователя в список
    users.Add(user);
    return user;
});

app.MapPut("/api/users", (Person userData) =&gt; {

    // получаем пользователя по id
    var user = users.FirstOrDefault(u =&gt; u.Id == userData.Id);
    // если не найден, отправляем статусный код и сообщение об ошибке
    if (user == null) return Results.NotFound(new { message = "Пользователь не найден" });
    // если пользователь найден, изменяем его данные и отправляем обратно клиенту
    
    user.Age = userData.Age;
    user.Name = userData.Name;
    return Results.Json(user);
});

app.Run();

public class Person
{
    public string Id { get; set; } = "";
    public string Name { get; set; } = "";
    public int Age { get; set; }
}
</pre>
<p>Разберем в общих чертах этот код. Вначале создается список объектов Person - те данные, с которыми будет работать пользователь:</p>
<pre class="brush:js;">
var users = new List&lt;Person&gt; 
{ 
    new() { Id = Guid.NewGuid().ToString(), Name = "Tom", Age = 37 },
    new() { Id = Guid.NewGuid().ToString(), Name = "Bob", Age = 41 },
    new() { Id = Guid.NewGuid().ToString(), Name = "Sam", Age = 24 }
};
</pre>
<p>Стоит обратить внимание, что каждый объект Person имеет свойство Id, которое в качестве значения получает Guid - уникальный идентификатор, например "2e752824-1657-4c7f-844b-6ec2e168e99c".</p>
<p>Для упрошения данные определены в виде обычного списка объектов, но в реальной ситуации обычно подобные данные извлекаются из какой-нибудь базы данных.</p>
<p>Далее после создания объекта WebApplication подключаем функциональность статических файлов:</p>
<pre class="brush:c#;">
app.UseDefaultFiles();
app.UseStaticFiles();
</pre>
<p>Затем с помощью методов <span class="b">MapGet/MapPost/MapPut/MapDelete</span> определяется набор конечных точек, которые будут обрабатывать разные типы запросов.</p>
<p>Вначале добавляется конечная точка, которая обрабатывает запрос типа GET по маршруту "api/users":</p>
<pre class="brush:c#;">
app.MapGet("/api/users", () =&gt; users);
</pre>
<p>Запрос GET предполагает получение объектов, и в данном случае отправляем выше определенный список объектов Person.</p>
<p>Когда клиент обращается к приложению для получения одного объекта по id в запрос типа GET по адресу "api/users/{id}", то срабатывает другая конечная точка:</p>
<pre class="brush:c#;">
app.MapGet("/api/users/{id}", (string id) =&gt;
{
    // получаем пользователя по id
    Person? user = users.FirstOrDefault(u =&gt; u.Id == id);
    // если не найден, отправляем статусный код и сообщение об ошибке
    if (user == null)  return Results.NotFound(new { message = "Пользователь не найден" });

    // если пользователь найден, отправляем его
    return Results.Json(user);
});
</pre>
<p>Здесь через параметр id получаем из пути запроса идентификатор объекта Person и по этому идентификатору ищем нужный объект в списке users. 
Если объект по Id не был найден, то возвращаем с помощью метода <code>Results.NotFound()</code> статусный код 404 с некоторым сообщением в формате JSON. 
Если объект найден, то с помощью метода <code>Results.Json()</code> отправляет найденный объект клиенту.</p>
<p>При получении запроса типа DELETE по маршруту "/api/users/{id}" срабатывает другая конечная точка:</p>
<pre class="brush:c#;">
app.MapDelete("/api/users/{id}", (string id) =&gt;
{
    // получаем пользователя по id
    Person? user = users.FirstOrDefault(u =&gt; u.Id == id);

    // если не найден, отправляем статусный код и сообщение об ошибке
    if (user == null) return Results.NotFound(new { message = "Пользователь не найден" });

    // если пользователь найден, удаляем его
    users.Remove(user);
    return Results.Json(user);
});
</pre>
<p>Здесь действует аналогичная логика - если объект по Id не найден, отправляет статусный код 404. Если же объект найден, то удаляем его из списка 
и посылаем клиенту.</p>
<p>При получении запроса с методом POST по адресу "/api/users" срабатывает следующая конечная точка:</p>
<pre class="brush:c#;">
app.MapPost("/api/users", (Person user)=&gt;{

    // устанавливаем id для нового пользователя
    user.Id = Guid.NewGuid().ToString();
    // добавляем пользователя в список
    users.Add(user);
    return user;
});
</pre>
<p>Запрос типа POST предполагает передачу приложению отправляемых данных. Причем мы ожидаем, что клиент отправит данные, которые соответствуют определению типа Person. И поэтому 
инфраструктура ASP.NET Core сможет автоматически собрать из них объект Person. И этот объект мы сможем получить в качестве параметра в обработчике 
конечной точки.</p>
<p>После получения данных устанавливаем у нового объекта свойство Id, добавляем его в список users и отправляем обратно клиенту.</p>
<p>Если приложению приходит PUT-запрос по адресу "/api/users", то аналогичным образом получаем отправленные клиентом данные в виде объекта Person 
и пытаемся найти подобный объект в списке users. Если объект не найден, отправляем статусный код 404.
Если объект найден, то изменяем его данные и отправляем обратно клиенту:</p>
<pre class="brush:c#;">
app.MapPut("/api/users", (Person userData) =&gt; {

    // получаем пользователя по id
    var user = users.FirstOrDefault(u =&gt; u.Id == userData.Id);
    // если не найден, отправляем статусный код и сообщение об ошибке
    if (user == null) return Results.NotFound(new { message = "Пользователь не найден" });
    // если пользователь найден, изменяем его данные и отправляем обратно клиенту
    user.Age = userData.Age;
    user.Name = userData.Name;
    return Results.Json(user);
});
</pre>
<p>Таким образом, мы определили простейший API. Теперь добавим код клиента.</p>
<h3>Определение клиента</h3>
<p>Теперь создадим в проекте новую папку <span class="b">wwwroot</span>, в которую добавим новый файл <span class="b">index.html</span></p>
<img src="./pics/11.3.png" alt="Создание клиента javascript для Web API в ASP.NET Core и C#" />
<p>Определим в файле <span class="b">index.html</span> следующим код для взаимодействия с сервером ASP.NET Core:</p>
<pre class="brush:xml;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;meta name="viewport" content="width=device-width" /&gt;
    &lt;title&gt;Список пользователей&lt;/title&gt;
    &lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h2&gt;Список пользователей&lt;/h2&gt;
    &lt;form name="userForm"&gt;
        &lt;input type="hidden" name="id" value="0" /&gt;
        &lt;div class="mb-3"&gt;
            &lt;label class="form-label" for="name"&gt;Имя:&lt;/label&gt;
            &lt;input class="form-control" name="name" /&gt;
        &lt;/div&gt;
        &lt;div class="mb-3"&gt;
            &lt;label for="age" class="form-label"&gt;Возраст:&lt;/label&gt;
            &lt;input class="form-control" name="age" /&gt;
        &lt;/div&gt;
        &lt;div class="mb-3"&gt;
            &lt;button type="submit" class="btn btn-sm btn-primary"&gt;Сохранить&lt;/button&gt;
            &lt;a id="reset" class="btn btn-sm btn-primary"&gt;Сбросить&lt;/a&gt;
        &lt;/div&gt;
    &lt;/form&gt;
    &lt;table class="table table-condensed table-striped table-bordered"&gt;
        &lt;thead&gt;&lt;tr&gt;&lt;th&gt;Имя&lt;/th&gt;&lt;th&gt;возраст&lt;/th&gt;&lt;th&gt;&lt;/th&gt;&lt;/tr&gt;&lt;/thead&gt;
        &lt;tbody&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;

    &lt;script&gt;
    // Получение всех пользователей
        async function getUsers() {
            // отправляет запрос и получаем ответ
            const response = await fetch("/api/users", {
                method: "GET",
                headers: { "Accept": "application/json" }
            });
            // если запрос прошел нормально
            if (response.ok === true) {
                // получаем данные
                const users = await response.json();
                const rows = document.querySelector("tbody");
                // добавляем полученные элементы в таблицу
                users.forEach(user =&gt; rows.append(row(user)));
            }
        }
        // Получение одного пользователя
        async function getUser(id) {
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
            else {
                // если произошла ошибка, получаем сообщение об ошибке
                const error = await response.json();
                console.log(error.message); // и выводим его на консоль
            }
        }
        // Добавление пользователя
        async function createUser(userName, userAge) {

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
            else {
                const error = await response.json();
                console.log(error.message);
            }
        }
        // Изменение пользователя
        async function editUser(userId, userName, userAge) {
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
            else {
                const error = await response.json();
                console.log(error.message);
            }
        }
        // Удаление пользователя
        async function deleteUser(id) {
            const response = await fetch("/api/users/" + id, {
                method: "DELETE",
                headers: { "Accept": "application/json" }
            });
            if (response.ok === true) {
                const user = await response.json();
                document.querySelector("tr[data-rowid='" + user.id + "']").remove();
            }
            else {
                const error = await response.json();
                console.log(error.message);
            }
        }

        // сброс данных формы после отправки
        function reset() {
            const form = document.forms["userForm"];
            form.reset();
            form.elements["id"].value = 0;
        }
        // создание строки для таблицы
        function row(user) {

            const tr = document.createElement("tr");
            tr.setAttribute("data-rowid", user.id);

            const nameTd = document.createElement("td");
            nameTd.append(user.name);
            tr.append(nameTd);

            const ageTd = document.createElement("td");
            ageTd.append(user.age);
            tr.append(ageTd);

            const linksTd = document.createElement("td");

            const editLink = document.createElement("a");
            editLink.setAttribute("style", "cursor:pointer;padding:15px;");
            editLink.append("Изменить");
            editLink.addEventListener("click", e =&gt; {

                e.preventDefault();
                getUser(user.id);
            });
            linksTd.append(editLink);

            const removeLink = document.createElement("a");
            removeLink.setAttribute("style", "cursor:pointer;padding:15px;");
            removeLink.append("Удалить");
            removeLink.addEventListener("click", e =&gt; {

                e.preventDefault();
                deleteUser(user.id);
            });

            linksTd.append(removeLink);
            tr.appendChild(linksTd);

            return tr;
        }
        // сброс значений формы
        document.getElementById("reset").addEventListener("click", e =&gt; {

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
                createUser(name, age);
            else
                editUser(id, name, age);
        });

        // загрузка пользователей
        getUsers();
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Основная логика здесь заключена в коде javascript. При загрузке страницы в браузере получаем все объекты из БД с помощью функции <code>getUsers()</code>:</p>
<pre class="brush:js;">
async function getUsers() {
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
<p>Ссылка для изменения пользователя с помощью функции <code>getUser()</code> получает с сервера выделенного пользователя:</p>
<pre class="brush:js;">
async function getUser(id) {
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
    else {
        // если произошла ошибка, получаем сообщение об ошибке
        const error = await response.json();
        console.log(error.message); // и выводим его на консоль
    }
}
</pre>
<p>И выделенный пользователь добавляется в форму над таблицей. Эта же форма применяется и для добавления объекта. С помощью скрытого поля, которое хранит id пользователя, мы можем узнать, какое действие выполняется - добавление или редактирование. Если id равен 0, то выполняется функция createUser, которая отправляет данные в POST-запросе:</p>
<pre class="brush:js;">
async function createUser(userName, userAge) {

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
    else {
        const error = await response.json();
        console.log(error.message);
    }
}
</pre>
<p>Если же ранее пользователь был загружен на форму, и в скрытом поле сохранился его id, то выполняется функция editUser, которая отправляет PUT-запрос:</p>
<pre class="brush:js;">
async function editUser(userId, userName, userAge) {
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
    else {
        const error = await response.json();
        console.log(error.message);
    }
}
</pre>
<p>И функция <code>deleteUser()</code> посылает приложению ASP.NET Core запрос типа DELETE на удаление пользователя, и при успешном удалении на сервере 
удаляет объект по id из списка объектов Person.</p>
<p>Теперь запустим проект, и по умолчанию приложение отправит браузеру веб-страницу <span class="b">index.html</span>, которая загрузит список объектов:</p>
<img src="./pics/11.1.png" alt="взаимодействие javascript с Web API и MapGet, MapPost, MapPut, MapDelete в ASP.NET Core и C#" />
<p>После этого мы сможем выполнять все базовые операции с пользователями - получение, добавление, изменение, удаление. Например, добавим нового пользователя:</p>
<img src="./pics/11.2.png" alt="REST и Web API с помощью MapGet, MapPost, MapPut, MapDelete в ASP.NET Core и C#" />

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


<div class="nav"><p><a href="./10.6.php">Назад</a><a href="./">Содержание</a><a href="./12.1.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в ASP.NET Core</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/1.1.php">Что такое ASP.NET Core</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/1.2.php">Начало работы с ASP.NET Core</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Основы в ASP.NET Core</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.1.php">Создание и запуск приложения. WebApplication и WebApplicationBuilder</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.2.php">Конвейер обработки запроса и middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.3.php">Метод Run и определение терминального middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.4.php">HttpResponse. Отправка ответа</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.5.php">HttpRequest. Получение данных запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.6.php">Отправка файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.8.php">Отправка форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.9.php">Переадресация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.10.php">Отправка и получение json</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.11.php">Создание простейшего API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.12.php">Загрузка файлов на сервер</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.7.php">Метод Use</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.13.php">Создание ветки конвейера. UseWhen и MapWhen</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.14.php">Метод Map</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.15.php">Классы middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.16.php">Построение конвейера обработки запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/2.17.php">IWebHostEnvironment и окружение</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Dependency Injection</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.1.php">Внедрение зависимостей и IServiceCollection</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.2.php">Создание сервисов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.3.php">Получение зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.4.php">Жизненный цикл зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.5.php">Применение сервисов в классах middleware</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.6.php">Scoped-сервисы в singleton-объектах</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/4.7.php">Множественная регистрация сервисов</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Маршрутизация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.1.php">Конечные точки. Метод Map</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.2.php">Параметры маршрута</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.3.php">Ограничения маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.4.php">Создание ограничений маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.5.php">Передача зависимостей в конечные точки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.6.php">Сопоставление запроса с конечной точкой</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/3.7.php">Сочетание конечных точек с другими middleware</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Статические файлы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/5.1.php">Установка каталога статических файлов. UseStaticFiles</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/5.2.php">Работа со статическими файлами</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. Конфигурация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.1.php">Основы конфигурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.2.php">Нефайловые провайдеры конфигурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.3.php">Конфигурация в файлах JSON, XML и Ini</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.4.php">Конфигурация по умолчанию и объединение конфигураций</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.5.php">Анализ конфигурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.6.php">Создание провайдера конфгурации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.7.php">Проекция конфигурации на классы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/6.8.php">Передача конфигурации через IOptions</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Логгирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/7.1.php">Ведение лога и ILogger</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/7.2.php">Фабрика логгера и провайдеры логгирования</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/7.3.php">Конфигурация и фильтрация логгирования</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/7.4.php">Создание провайдера логгирования</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 8. Состояние приложения. Куки. Сессии</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/8.1.php">HttpContext.Items</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/8.2.php">Куки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/8.3.php">Сессии</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 9. Обработка ошибок</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/9.1.php">Обработка исключений</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/9.2.php">Обработка ошибок HTTP</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 10. Results API</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.1.php">Введение в Results API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.2.php">Отправка текста и json в Results API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.3.php">Переадресация в Results API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.4.php">Отправка статусных кодов в Results API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.5.php">Отправка файлов в Results API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/10.6.php">Определение своего типа IResult</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 11. Web API</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/11.1.php">Пример приложения Web API</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 12. Работа с базой данных и Entity Framework</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/12.1.php">Подключение Entity Framework</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/12.2.php">Основные операции с данными в Entity Framework Core</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 13. Аутентификация и авторизация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.1.php">Введение в аутентификацию и авторизацию</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.2.php">Аутентификация с помощью JWT-токенов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.3.php">Авторизация с помощью JWT-токенов в клиенте JavaScript</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.4.php">Аутентификация с помощью куки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.5.php">HttpContext.User, ClaimPrincipal и ClaimsIdentity</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.6.php">ClaimPrincipal и объекты Claim</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.7.php">Авторизация по ролям</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.8.php">Авторизация на основе Claims</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnet6/13.9.php">Создание ограничений для авторизации</a></span></li>
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
	
	$("li:contains('Глава 11.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 11.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
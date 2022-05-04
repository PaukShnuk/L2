<!DOCTYPE html>
<html >
<head>
<title>JavaScript | Объект XMLHttpRequest</title>
<meta charset="utf-8" />
<meta name="description" content="Объект XMLHttpRequest и ajax запросы в языке програмиирования JavaScript на примере Node.js">
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
<h1>Ajax</h1><h2>Объект XMLHttpRequest</h2><div class="date">Последнее обновление: 03.02.2022</div>

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

<img src="https://metanit.com/metanit-front.jpg" id="jmw" style="cursor:pointer;" />
</div>

<p>Код javascript может взаимодействовать с каким-нибудь ресурсом в сети интернет, например, с каким-нибудь веб-сайтом или веб-сервисом, грубо говоря с сервером. 
Для взаимодействия кода javascript с сервером обычно применяется такая технология как <span class="b">Ajax</span>. 
Ajax представляет технологию для отправки запросов к серверу из клиентского кода JavaScript без перезагрузки страницы. Сам термин расшифровывается 
как <span class="b">Asynchronous JavaScript And XML</span>. То есть изначально AJAX предполагал асинхронное взаимодействие клиента и сервера посредством данных в формате XML. 
Хотя сейчас XML во многом вытеснил формат JSON. В любом случае AJAX революционизировал веб-среду, позволив создавать динамичные отзывчивые веб-приложения.</p>
<p>Для создания приложений, использующих Ajax, применяются различные способы. Но самым распространенным способом является использование объекта 
<span class="b">XMLHttpRequest</span>:</p>
<pre class="brush:js;">const xhr = new XMLHttpRequest();</pre>
<p>После создания объекта XMLHttpRequest можно отправлять запросы к серверу. Но для начала надо вызвать метод <span class="b">open()</span> для 
инициализации:</p>
<pre class="brush:js;">XMLHttpRequest.open(method, url[, async[, user[, password]]])</pre>
<p>Эта функция принимает пять параметров, из которых первые два являются обязательными:</p>
<ul>
<li><p><code>method</code>: тип запроса ("GET", "POST", "PUT", "DELETE" и т.д.)</p></li>
<li><p><code>url</code>: адрес ресурса, к которому отправляется запрос</p></li>
<li><p><code>async</code>: логическое значение, которое указывает, будет ли запрос асинхронным. Если значение <code>true</code> (значение по умолчанию), то запрос асинхронный</p>
<p>Синхронный и асинхронный режим отличаются тем, что запрос в синхронном режиме пока запрос не выполнится, остальной код javascript не может выполняться. 
Если запрос отправляется в асинхронном режиме, то параллельно с выполнением запроса можно выполнять также и другой код javascript. 
И в большинстве случаев, как правило, используется именно асинхронный режим.</p></li>
<li><p><code>user</code>: имя пользователя, которое применяется при его аутентификации на сервере (то есть для определения, какой именно пользователь осуществил запрос), по умолчанию равно null</p></li>
<li><p><code>password</code>: пароль пользователя, который применяется при его аутентификации на сервере, по умолчанию равно null</p></li>
</ul>
<p>Например, запрос типа "GET" по адресу "http://localhost/hello":</p>
<pre class="brush:js;">request.open("GET", "http://localhost/hello");</pre>
<p>После инициализации запроса методом <code>open()</code> можно отправить запрос с помощью метода <span class="b">send()</span>:</p>
<pre class="brush:js;">XMLHttpRequest.send(body)</pre>
<p>В качестве параметра в метод <code>send()</code> передаются данные, которые отправляются на сервер. Если этому параметру не передано никакого значения, то его 
значение по умолчанию null.</p>
<h3>Свойства XMLHttpRequest</h3>
<p>Объект XMLHttpRequest имеет ряд свойств, которые позволяют проконтролировать выполнение запроса:</p>
<ul>
<li><p><span class="b">status</span>: содержит статусный код ответа HTTP, который пришел от сервера. С помощью статусного кода можно судить об успешности запроса или об ошибках, которые могли бы возникнуть при его 
выполнении. Например, статусный код 200 указывает на то, что запрос прошел успешно. Код 403 говорит о необходимости авторизации для выполнения запроса, 
а код 404 сообщает, что ресурс не найден и так далее.</p></li>
<li><p><span class="b">statusText</span>: возвращает текст статуса ответа, например, "200 OK"</p></li>
<li><p><span class="b">responseType</span>: возвращает тип ответа. Есть следующие типы:</p>
<ul>
<li><p><code>""</code>: пустая строка</p></li>
<li><p><code>"arraybuffer"</code>: ответ представляет объект ArrayBuffer, которые содержит бинарные данные</p></li>
<li><p><code>"blob"</code>: ответ представляет объект Blob, которые содержит бинарные данные</p></li>
<li><p><code>"document"</code>: ответ представляет документ HTML/XML</p></li>
<li><p><code>"json"</code>: ответ представляет данные в формате json</p></li>
<li><p><code>"text"</code>: ответ представляет текст</p></li>
</ul></li>
<li><p><span class="b">response</span>: возвращает ответ сервера</p></li>
<li><p><span class="b">responseText</span>: возвращает ответа сервера в виде текста</p></li>
<li><p><span class="b">responseXML</span>: возвращает XML/HTML, если ответ от сервера в формате XML/HTML</p></li>
<li><p><span class="b">readyState</span>: хранит состояния запроса, которое представляет число:</p>
<ul>
<li><p><code>0</code>: объект XMLHttpRequest создан, но метод <code>open()</code> еще не был вызван для инициализации объекта</p></li>
<li><p><code>1</code>: метод <code>open()</code> был вызван, но запрос еще не был отправлен методом <code>send()</code></p></li>
<li><p><code>2</code>: запрос был отправлен, заголовки и статус ответа получены и готовы к использованию</p></li>
<li><p><code>3</code>: ответ получен от сервера</p></li>
<li><p><code>4</code>: выполнение запроса полностью завершено (даже если получен код ошибки, например, 404)</p></li>
</ul>
<p>Соответственно проверив данное свойство, мы можем понять, на какой стадии находится запрос</p>
</li>
</ul>
<p>Для отслеживания состояния запроса можно применять события XMLHttpRequest:</p>
<ul>
<li><p><span class="b">load</span>: срабатывает после выполнения запроса. Для установки обработчика применяется свойство <code>onload</code></p></li>
<li><p><span class="b">readystatechange</span>: возникает каждый раз, когда изменяется значение свойства readyState. Для установки обработчика применяется свойство <code>onreadystatechange</code></p></li>
</ul>
<p>Вначале рассмотрим простейший пример, как выполнять запрос к серверу с помощью XMLHttpRequest</p>
<h3>Определение ресурса на севере</h3> 
<p>Поскольку Ajax предполагает взаимодействие клиента и сервера, то для работы с Ajax нам потребуется некоторый сетевой ресурс, к которому 
мы будем обращаться.  Для эмуляции сетевого ресурса используем локальный веб-сервер. Веб-сервер может быть любым. 
В данном случае воспользуемся самым простым вариантом - Node.js, поэтому перед созданием приложения необходимо <a href="https://metanit.com/web/nodejs/1.1.php">установить Node.js</a>. 
В данном случае не потребуется никаких знаний node.js, весь используемый код подробно описывается. Но опять же вместо node.js это может быть любая другая технология сервера - 
php, asp.net, python и т.д. либо какой-то определенный веб-сервер типа Apache или IIS.</p>
<p>Итак, создадим на жестком диске папку для файлов веб-сервера. Например, в моем случае это папка <span class="b">C:\app</span>. Далее в этой папке 
определим файл сервера. Пусть он будет называться <span class="b">server.js</span> и будет иметь следующий код:</p>
<pre class="brush:js;">
const http = require("http");
const fs = require("fs");
   
http.createServer(function(request, response){
     
	if(request.url == "/hello"){
        response.end("XMLHttpRequest на METANIT.COM");
    }
    else{
		fs.readFile("index.html", (error, data) =&gt; response.end(data));
    }
}).listen(3000, ()=&gt;console.log("Сервер запущен по адресу http://localhost:3000"));
</pre>
<p>Это самый примитивный сервер, который достаточен для нашей задачи. Вкратце пробежимся по коду. Сначала подключаются пакеты с функциональностью, которую мы собираемся использовать:</p>
<pre class="brush:js;">
const http = require("http");	// для обработки входящих запросов
const fs = require("fs");		// для чтения с жесткого диска файла index.html
</pre> 
<p>Для создания сервера применяется функция <span class="b">http.createServer()</span>. В эту функцию передается функция-обработчик, которая вызывается каждый раз, когда к серверу приходит запрос. 
Эта функция имеет два параметра: <code>request</code> (содержит данные запроса) и <code>response</code> (управляет отправкой ответа).</p>
<p>В функции-обработчике с помощью свойства <code>request.url</code> мы можем узнать, к какому ресурсу на сервере пришел запрос. Так, в данном случае, 
если пришел запрос по пути "/hello" (условно к ресурсу "/hello"), то оправляем в ответ с помощью метода <code>response.end()</code> текст "XMLHttpRequest на METANIT.COM":</p>
<pre class="brush:js;">
if(request.url == "/hello"){
	response.end("XMLHttpRequest на METANIT.COM");
}
</pre>
<p>Если запрос пришел к какому-то другому ресурсу, то отправляем файл <span class="b">index.html</span>, который мы дальше определим:</p>
<pre class="brush:js;">
else{
	fs.readFile("index.html", (error, data) =&gt; response.end(data));
}
</pre>
<p>Для считывания файлов применяется встроенная функция <span class="b">fs.readFile()</span>. Первый параметр функции - адрес файла 
(в данном случае предполагается, что файл index.html находится в одной папке с файлом сервера server.js). Второй параметр - функция, которая вызывается после считывания файла 
и получет его содержимое через свой второй параметр data. Затем считанное содежимое также может быть отпавлено с помощью функции <code>response.end(data)</code>.</p>
<p>В конце с помощью функции <span class="b">listen()</span> запускаем веб-сервер на 3000 порту. То есть сервер будет запускаться по адресу http://localhost:3000/</p>
<h3>Выполнение ajax-запроса</h3>
<p>Теперь в папке сервера определим простенький файл <span class="b">index.html</span></p>
<img src="./pics/xmlhttprequest1.png" alt="веб-сервер node.js для тестирования XMLHttpRequest в javascript" />
<p>Определим в этом файле следующее содежимое:</p>
<pre class="brush:js;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;METANIT.COM&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
const xhr = new XMLHttpRequest();
// GET-запрос к ресурсу /hello
xhr.open("GET", "/hello");

// обработчик получения ответа сервера
xhr.onload = () =&gt; {
    if (xhr.status == 200) {                // если код ответа 200
        console.log(xhr.responseText);      // выводим полученный ответ на консоль браузера
    } else {                                // иначе выводим текст статуса
        console.log("Server response: ", xhr.statusText);
    }
};
xhr.send();     // выполняем запрос
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Здесь в метод <span class="b">xhr.open()</span> в качестве типа запроса передается тип "GET", а в качестве адреса ресурса - "/hello".</p>
<pre class="brush:js;">xhr.open("GET", "/hello");</pre>
<p>Для отслеживания завершения запроса устанавливаем обработчик для события <code>load</code> с помощью свойства <code>xhr.onload</code>:</p>
<pre class="brush:js;">
xhr.onload = () =&gt; {
    if (xhr.status == 200) {                // если код ответа 200
        console.log(xhr.responseText);      // выводим полученный ответ на консоль браузера
    } else {                                // иначе выводим текст статуса
        console.log("Server response: ", xhr.statusText);
    }
};
</pre>
<p>В данном случае в качестве обработчика события выступает лямбда-выражение. И когда запрос завершится, сработает данный обработчик. Если запрос был успешно обрабатан, то по умолчанию 
сервер посылает статусный код 200. Как мы помним из кода сервера, при обращении по адресу "/hello" сервер посылает клиенту строку. 
И чтобы получить данную строку, обращаемся к свойству <code>xhr.responseText</code>. Если же в процессе обращения к серверу возникла какая-то ошибка или статусный код не 200, 
то с помощью свойства <code>xhr.statusText</code> выводит текст статуса ответа.</p>
<p>И в конце собственно выполняем запрос:</p>
<pre class="brush:js;">xhr.send();     // выполняем запрос</pre>
<p>Таким образом, при загрузке данной веб-страницы будет выполняться ajax-запрос к серверу.</p>

<p>Теперь в консоли перейдем к папке сервера с помощью команды <span class="b">cd</span> и запустим сервер с помощью команды</p>
<div class="console"><pre class="consoletext">node server.js</pre></div>
<img src="./pics/xmlhttprequest2.png" alt="Запуск веб-сервера node.js для тестирования XMLHttpRequest" />
<p>После запуска сервера мы можем перейти в браузере по адресу http://localhost:3000, нам отобразится страница, в javascript-коде которой произойдет обращение к ресурсу "/hello":</p>
<img src="./pics/xmlhttprequest3.png" alt="XMLHttpRequest в javascript" />
<p>В итоге при обращении к ресурсу "/hello" сервер отправит отправит строку "XMLHttpRequest на METANIT.COM", которую мы сможем получить на веб-странице.</p>
<p>В примере выше применялся относительный путь, но также можно было бы использовать абсолютный путь с указанием протокола, адреса сервера и порта:</p>
<pre class="brush:js;">
xhr.open("GET", "http://localhost:3000/hello");
</pre>
<p>Вместо события <code>load</code> мы также могли бы обрабатывать событие <span class="b">readystatechange</span> 
объекта XMLHttpRequest, которое возникает каждый раз, когда изменяется значение свойства <span class="b">readyState</span>:</p>
<pre class="brush:js;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt;METANIT.COM&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;script&gt;
const xhr = new XMLHttpRequest();
// GET-запрос к ресурсу /hello
xhr.open("GET", "/hello");

// обработчик получения ответа сервера
xhr.onreadystatechange = () =&gt; {
    if (xhr.readyState == 4) {                  // если запрос завершен
        if (xhr.status == 200) {                // если код ответа 200
            console.log(xhr.responseText);      // выводим полученный ответ на консоль браузера
        } else {                                // иначе выводим текст статуса
            console.log("Server response: ", xhr.statusText);
        }
    }
};
xhr.send();     // выполняем запрос
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Здесь в обработчике события сначала проверяет состояние запроса - если код состояния равен 4, то обрабатывает ответ от сервера. Остальная логика та же, что и предыдущем случае.</p>
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


<div class="nav"><p><a href="./17.8.php">Назад</a><a href="./">Содержание</a><a href="./13.2.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в JavaScript</span>
		<ul>
			<li><span class="file"><a href="1.1.php">Что такое JavaScript</a></span></li>
			<li><span class="file"><a href="1.2.php">Первая программа на JavaScript</a></span></li>
			<li><span class="file"><a href="1.3.php">Выполнение кода javascript</a></span></li>
			<li><span class="file"><a href="1.4.php">Подключение внешнего файла JavaScript</a></span></li>
			<li><span class="file"><a href="1.5.php">Консоль браузера и console.log</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы javascript</span>
		<ul>
			<li><span class="file"><a href="2.1.php">Переменные и константы</a></span></li>
			<li><span class="file"><a href="2.2.php">Типы данных</a></span></li>
			<li><span class="file"><a href="2.3.php">Операции</a></span></li>
			<li><span class="file"><a href="2.8.php">Условные операторы ?: и ??</a></span></li>
			<li><span class="file"><a href="2.4.php">Преобразование данных</a></span></li>
			<li><span class="file"><a href="2.5.php">Введение в массивы</a></span></li>
			<li><span class="file"><a href="2.6.php">Условные конструкции</a></span></li>
			<li><span class="file"><a href="2.7.php">Циклы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Функциональное программирование</span>
		<ul>
			<li><span class="file"><a href="3.1.php">Функции</a></span></li>
			<li><span class="file"><a href="3.10.php">Параметры функции</a></span></li>
			<li><span class="file"><a href="3.11.php">Результат функции</a></span></li>
			<li><span class="file"><a href="3.2.php">Область видимости переменных</a></span></li>
			<li><span class="file"><a href="3.3.php">Замыкания и функции IIFE</a></span></li>
			<li><span class="file"><a href="3.9.php">Паттерн Модуль</a></span></li>
			<li><span class="file"><a href="3.4.php">Рекурсивные функции</a></span></li>
			<li><span class="file"><a href="3.5.php">Переопределение функций</a></span></li>
			<li><span class="file"><a href="3.6.php">Hoisting</a></span></li>
			<li><span class="file"><a href="3.7.php">Передача параметров по значению и по ссылке</a></span></li>
			<li><span class="file"><a href="3.8.php">Стрелочные функции</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="4.1.php">Объекты</a></span></li>
			<li><span class="file"><a href="4.2.php">Вложенные объекты и массивы в объектах</a></span></li>
			<li><span class="file"><a href="4.13.php">Копирование и сравнение объектов</a></span></li>
			<li><span class="file"><a href="4.3.php">Проверка наличия и перебор методов и свойств</a></span></li>
			<li><span class="file"><a href="4.4.php">Объекты в функциях</a></span></li>
			<li><span class="file"><a href="4.5.php">Конструкторы объектов</a></span></li>
			<li><span class="file"><a href="4.6.php">Расширение объектов. Prototype</a></span></li>
			<li><span class="file"><a href="4.7.php">Инкапсуляция</a></span></li>
			<li><span class="file"><a href="4.8.php">Функция как объект. Методы call и apply</a></span></li>
			<li><span class="file"><a href="4.9.php">Наследование</a></span></li>
			<li><span class="file"><a href="4.10.php">Ключевое слово this</a></span></li>
			<li><span class="file"><a href="4.11.php">Деструктуризация</a></span></li>
			<li><span class="file"><a href="4.18.php">Оператор ?.</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. ООП. Классы.</span>
		<ul>
			<li><span class="file"><a href="4.12.php">Классы</a></span></li>
			<li><span class="file"><a href="4.16.php">Приватные поля и методы</a></span></li>
			<li><span class="file"><a href="4.17.php">Статические поля и методы</a></span></li>
			<li><span class="file"><a href="4.14.php">Свойства и методы доступа</a></span></li>
			<li><span class="file"><a href="4.15.php">Наследование</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Массивы</span>
		<ul>
			<li><span class="file"><a href="5.3.php">Создание массива и объект Array</a></span></li>
			<li><span class="file"><a href="5.6.php">Массивы и spread-оператор</a></span></li>
			<li><span class="file"><a href="5.7.php">Операции с массивами</a></span></li>
			<li><span class="file"><a href="5.8.php">Наследование массивов</a></span></li>
		</ul>
				</li>
				<li class="closed"><span class="folder">Глава 7. Строки</span>
					<ul>
			<li><span class="file"><a href="6.1.php">Строки и объект String</a></span></li>
			<li><span class="file"><a href="6.5.php">Шаблоны строк</a></span></li>
			<li><span class="file"><a href="6.2.php">Объект RegExp. Регулярные выражения</a></span></li>
			<li><span class="file"><a href="6.3.php">Регулярные выражения в методах String</a></span></li>
			<li><span class="file"><a href="6.4.php">Синтаксис регулярных выражений</a></span></li>
			<li><span class="file"><a href="6.6.php">Группы в регулярных выражениях</a></span></li>
					</ul>
				</li>
				
	<li class="closed"><span class="folder">Глава 8. Встроенные объекты</span>
		<ul>
			<li><span class="file"><a href="5.1.php">Объект Date. Работа с датами</a></span></li>
			<li><span class="file"><a href="5.2.php">Объект Math. Математические операции</a></span></li>
			<li><span class="file"><a href="5.4.php">Объект Number</a></span></li>
			<li><span class="file"><a href="5.5.php">Символы</a></span></li>
			<li><span class="file"><a href="5.9.php">Proxy</a></span></li>
		</ul>
				</li>
				
	<li class="closed"><span class="folder">Глава 9. Обработка ошибок</span>
		<ul>
			<li><span class="file"><a href="16.1.php">Конструкция try..catch..finally</a></span></li>
			<li><span class="file"><a href="16.2.php">Генерация ошибок и оператор throw</a></span></li>
			<li><span class="file"><a href="16.3.php">Типы ошибок</a></span></li>
		</ul>
				</li>
		<li class="closed"><span class="folder">Глава 10. Работа с браузером и BOM</span>
			<ul>
			<li><span class="file"><a href="7.1.php">Browser Object Model и объект window</a></span></li>
			<li><span class="file"><a href="7.2.php">Управление окнами</a></span></li>
			<li><span class="file"><a href="7.3.php">История браузера. Объект history</a></span></li>
			<li><span class="file"><a href="7.4.php">Объект location</a></span></li>
			<li><span class="file"><a href="7.5.php">Объект navigator</a></span></li>
			<li><span class="file"><a href="7.6.php">Таймеры</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 11. Работа с DOM</span>
					<ul>
			<li><span class="file"><a href="8.1.php">Введение в DOM</a></span></li>
			<li><span class="file"><a href="8.2.php">Объект document. Поиск элементов</a></span></li>
			<li><span class="file"><a href="8.3.php">Свойства объекта document</a></span></li>
			<li><span class="file"><a href="8.4.php">Объект Node. Навигация по DOM</a></span></li>
			<li><span class="file"><a href="8.5.php">Создание, добавление и удаление элементов веб-станицы</a></span></li>
			<li><span class="file"><a href="8.6.php">Объект Element. Управление элементами</a></span></li>
			<li><span class="file"><a href="8.7.php">Изменение стиля элементов</a></span></li>
			<li><span class="file"><a href="8.8.php">Создание своего элемента HTML</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 12. События</span>
					<ul>
			<li><span class="file"><a href="9.1.php">Введение в обработку событий</a></span></li>
			<li><span class="file"><a href="9.2.php">Обработчики событий</a></span></li>
			<li><span class="file"><a href="9.3.php">Объект Event</a></span></li>
			<li><span class="file"><a href="9.4.php">Распространение событий</a></span></li>
			<li><span class="file"><a href="9.5.php">События мыши</a></span></li>
			<li><span class="file"><a href="9.6.php">События клавиатуры</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 13. Работа с формами</span>
					<ul>
			<li><span class="file"><a href="10.1.php">Формы и их элементы</a></span></li>
			<li><span class="file"><a href="10.2.php">Кнопки</a></span></li>
			<li><span class="file"><a href="10.3.php">Текстовые поля</a></span></li>
			<li><span class="file"><a href="10.4.php">Флажки и переключатели</a></span></li>
			<li><span class="file"><a href="10.5.php">Список select</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 14. JSON</span>
					<ul>
			<li><span class="file"><a href="11.1.php">Введение в JSON</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 15. Хранение данных</span>
					<ul>
			<li><span class="file"><a href="12.1.php">Куки</a></span></li>
			<li><span class="file"><a href="12.2.php">Web Storage</a></span></li>
					</ul>
	</li>
	<li class="closed"><span class="folder">Глава 16. Коллекции и итераторы</span>
		<ul>
			<li><span class="file"><a href="14.1.php">Итераторы</a></span></li>
			<li><span class="file"><a href="14.2.php">Генераторы</a></span></li>
			<li><span class="file"><a href="14.3.php">Множества Set</a></span></li>
			<li><span class="file"><a href="14.4.php">Map</a></span></li>
			<li><span class="file"><a href="14.5.php">WeakSet</a></span></li>
			<li><span class="file"><a href="14.6.php">WeakMap</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 17. Promise, async и await</span>
		<ul>
			<li><span class="file"><a href="17.1.php">Введение в промисы</a></span></li>
			<li><span class="file"><a href="17.2.php">Получение результата операции в Promise</a></span></li>
			<li><span class="file"><a href="17.3.php">Обработка ошибок в Promise</a></span></li>
			<li><span class="file"><a href="17.4.php">Создание цепочек промисов</a></span></li>
			<li><span class="file"><a href="17.5.php">Функции Promise.all, Promise.allSettled, Promise.any и Promise.race</a></span></li>
			<li><span class="file"><a href="17.6.php">Async и await</a></span></li>
			<li><span class="file"><a href="17.7.php">Асинхронные итераторы</a></span></li>
			<li><span class="file"><a href="17.8.php">Асинхронные генераторы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 18. Ajax</span>
		<ul>
			<li><span class="file"><a href="13.1.php">Объект XMLHttpRequest</a></span></li>
			<li><span class="file"><a href="13.2.php">Отправка данных</a></span></li>
			<li><span class="file"><a href="13.3.php">Promise в Ajax-запросах</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 19. Локализация</span>
		<ul>
			<li><span class="file"><a href="18.1.php">Локализация списков и Intl.ListFormat</a></span></li>
			<li><span class="file"><a href="18.2.php">Локализация дат и времени</a></span></li>
			<li><span class="file"><a href="18.3.php">Локализация названий и Intl.DisplayNames</a></span></li>
			<li><span class="file"><a href="18.4.php">Форматирование чисел и Intl.NumberFormat</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 20. Модули</span>
		<ul>
			<li><span class="file"><a href="19.1.php">Введение в модули</a></span></li>
			<li><span class="file"><a href="19.2.php">Импорт модуля</a></span></li>
			<li><span class="file"><a href="19.3.php">Экспорт и импорт компонентов модулей</a></span></li>
			<li><span class="file"><a href="19.4.php">Экспорт и импорт по умолчанию</a></span></li>
			<li><span class="file"><a href="19.5.php">Использование псевдонимов при экспорте и импорте</a></span></li>
			<li><span class="file"><a href="19.6.php">Динамическая загрузка модулей</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 21. Fetch API</span>
		<ul>
			<li><span class="file"><a href="20.1.php">Функция fetch</a></span></li>
			<li><span class="file"><a href="20.2.php">Объект Response и его свойства</a></span></li>
			<li><span class="file"><a href="20.3.php">Получение данных из ответа</a></span></li>
			<li><span class="file"><a href="20.4.php">Настройка параметров запроса. Отправка данных</a></span></li>
			<li><span class="file"><a href="20.5.php">Создание клиента для REST API</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 22. Прочие статьи</span>
		<ul>
			<li><span class="file"><a href="15.1.php">JavaScript в CSS</a></span></li>
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
	
	$("li:contains('Глава 18.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 18.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
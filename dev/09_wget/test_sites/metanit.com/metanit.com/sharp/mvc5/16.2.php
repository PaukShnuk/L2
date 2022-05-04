<!DOCTYPE html>
<html >
<head>
<title>Первое приложение с SignalR 2</title>
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
<h2>Первое приложение с SignalR 2</h2><p style="color:red;">Данное руководство устарело. Актуальное руководство: <a href="https://metanit.com/sharp/aspnet5/">Руководство по ASP.NET Core</a></p><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Создадим простенькое приложение с использованием SignalR - небольшой чат. Итак, создадим новое приложение ASP.NET MVC 5 с типом аутентификации 
No Authentication. Я назвал свое приложение <span class="bb">SignalRMvc</span>.</p>
<p>После создания проекта найдем через пакетный менеджер NuGet библиотеку <span class="bb">Microsoft ASP.NET SignalR</span>:</p>
<img src="./pics/16.1.png" alt="Microsoft ASP.NET SignalR 2" />
<p>Установим ее. После этого в папку библиотек <i>Referenses</i> будет добавлен ряд библиотек SignalR, а в каталог скриптов 
<i>Scripts</i> будет добавлен клиентский скрипт <i>jquery.signalR-[номер_версии].js</i> и его минимизированный аналог.</p>
<p>Сразу после установки библиотеки, чтобы задействовать фукциональность SignalR, добавим в проект следующий класс с названием Startup:</p>
<pre class="brush:c#;">
using Microsoft.Owin;
using Owin;
[assembly: OwinStartup(typeof(SignalRMvc.Startup))]
namespace SignalRMvc
{
    public class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            app.MapSignalR();
        }
    }
} 
</pre>
<p>Для этого можно добавить обычный класс, а можно и специальный тип файлов <span class="bb">OWIN Startup Class</span>:</p>
<img src="./pics/16.2.png" alt="OWIN Startup Class" />
<p>Так как приложение чата оперирует пользователями, то создадим модель пользователей. Добавим в папку <i>Models</i> класс <i>User</i>:</p>
<pre class="brush:c#;">
public class User
{
    public string ConnectionId { get; set; }
    public string Name { get; set; }
}
</pre>
<p>Теперь добавим в проект новую папку. Назовем ее <i>Hubs</i>. В ней будут находиться хабы нашего приложения. В эту папку добавим новый 
класс <i>ChatHub.cs</i>. Опять же мы можем добавить либо просто класс, либо воспользоваться уже готовым шаблоном файла <span class="bb">SignalR Hub Class (v2)</span>:</p>
<img src="./pics/16.3.png" alt="SignalR Hub Class" />
<p>Новый класс будет иметь следующий код:</p>
<pre class="brush:c#;">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using Microsoft.AspNet.SignalR;
using SignalRMvc.Models;

namespace SignalRMvc.Hubs
{
    public class ChatHub : Hub
    {
        static List&lt;User&gt; Users = new List&lt;User&gt;();
        
        // Отправка сообщений
        public void Send(string name, string message)
        {
            Clients.All.addMessage(name, message);
        }

        // Подключение нового пользователя
        public void Connect(string userName)
        {
            var id = Context.ConnectionId;


            if (!Users.Any(x =&gt; x.ConnectionId == id))
            {
                Users.Add(new User { ConnectionId = id, Name = userName });

                // Посылаем сообщение текущему пользователю
                Clients.Caller.onConnected(id, userName, Users);

                // Посылаем сообщение всем пользователям, кроме текущего
                Clients.AllExcept(id).onNewUserConnected(id, userName);
            }
        }

        // Отключение пользователя
        public override System.Threading.Tasks.Task OnDisconnected(bool stopCalled)
        {
            var item = Users.FirstOrDefault(x =&gt; x.ConnectionId == Context.ConnectionId);
            if (item != null)
            {
                Users.Remove(item);
                var id = Context.ConnectionId;
                Clients.All.onUserDisconnected(id, item.Name);
            }

            return base.OnDisconnected(stopCalled);
        }
    }
}
</pre>
<p>Как уже ранее говорилось, SignalR использует две модели взаимодействия сервера и клиента: Persistent Connection и хабы. В данном случае мы 
используем хабы. Для этого создаем свой хаб ChatHub, который наследуется от класса <code>Hub</code>.</p>
<p>Во-первых, мы создаем список, который будет хранить подключенных к чату пользователей.</p>
<p>Далее у нас определен ряд методов для отправки сообщений, подключения и отключения пользователей. Разберем метод Send, который предназначен 
В нем вызывается единственный метод: <code>Clients.All.addMessage(name, message);</code>. Объект <code>Clients</code> означает коллекцию всех пользователей хаба. 
Свойство <code>All</code>, идущее далее, говорит о том, что метод надо применить у всех подключенных клиентов.</p> 
<h4>Формат вызова методов клиента</h4>
<ul>
<li><p>Вызов метода на всех клиентах: <code>Clients.All.addMessage(name, message);</code></p></li>
<li><p>Вызов метода только на текущем клиенте, который обратился к серверу: <code>Clients.Caller.addMessage(name, message);</code></p></li>
<li><p>Вызов метода на всех клиентах, кроме того, который обратился к серверу: <code>Clients.Others.addMessage(name, message);</code></p></li>
<li><p>Вызов метода только у клиента с определенным id: <code>Clients.Client(Context.ConnectionId).addMessage(name, message);</code></p></li>
<li><p>Вызов метода на всех клиентах, кроме клиента с определенным id: <code>Clients.AllExcept(connectionId).addMessage(name, message);</code></p></li>
<li><p>Вызов метода на всех клиентах указанной группы: <code>Clients.Group(groupName).addMessage(name, message);</code></p></li>
<li><p>Вызов метода на всех клиентах указанной группы, за исключением клиента, у которого id - connectionId: <code>Clients.Group(groupName, connectionId).addMessage(name, message);</code></p></li>
<li><p>Вызов метода на всех клиентах указанной группы, за исключением обратившегося к серверу клиента: <code>Clients.OthersInGroup(groupName).addMessage(name, message);</code></p></li>
</ul>
<p>В зависимости от того, кому надо передать сообщение, мы можем выбрать один из вариантов.</p>
<p>Далее в выражении следует метод <code>addMessage</code>. Этот метод объявляется на стороне клиента в коде javascript. Чуть позже 
мы добавим код клиентской стороны. А пока просто надо знать, что эти методы находятся не на серверной части, а на стороне клиента.</p>
<p>В методе <code>Connect</code> мы сначала получаем id текущего пользователя, который и обратился к методу Connect, через объект <code>Context.ConnectionId</code>. Этот id 
задается средой и хранит строковое значение (не числовое). Затем вызываем методы на клиенте через объект <code>Clients</code>.</p>
<p>В конце переопределяем метод <code>OnDisconnected</code>, который выполняет отключение текущего клиента в асинхронном режиме. Например, при закрытии вкладки браузера клиент по сути 
выходит из приложения и вызывается метод OnDisconnected для текущего клиента.</p>
<p>Теперь создадим представление для чата. По умолчанию в проекте уже есть контроллер HomeController с несколькими методами, для которых определены 
представления. Мы можем использовать, например, представление <i>Index.cshtml</i>. Изменим его содержимое следующим образом:</p>
<pre class="brush:xml;">
@{
    Layout = null;
}
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h2&gt;Чат-комната&lt;/h2&gt;

    &lt;div class="main"&gt;
        &lt;div id="loginBlock"&gt;
            Введите логин:&lt;br /&gt;
            &lt;input id="txtUserName" type="text" /&gt;
            &lt;input id="btnLogin" type="button" value="Войти" /&gt;
        &lt;/div&gt;
        &lt;div id="chatBody"&gt;
            &lt;div id="header"&gt;&lt;/div&gt;
            &lt;div id="inputForm"&gt;
                &lt;input type="text" id="message" /&gt;
                &lt;input type="button" id="sendmessage" value="Отправить" /&gt;
            &lt;/div&gt;
            &lt;div id="chatroom"&gt;&lt;/div&gt;

            &lt;div id="chatusers"&gt;
                &lt;p&gt;&lt;b&gt;Все пользователи&lt;/b&gt;&lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;input id="hdId" type="hidden" /&gt;
        &lt;input id="username" type="hidden" /&gt;
    &lt;/div&gt;

    &lt;script src="~/Scripts/jquery-1.10.2.min.js"&gt;&lt;/script&gt;
    &lt;!--Ссылка на библиотеку SignalR --&gt;
    &lt;script src="~/Scripts/jquery.signalR-2.2.0.min.js"&gt;&lt;/script&gt;
    &lt;!--Ссылка на автоматически сгенерированный скрипт хаба SignalR --&gt;
    &lt;script src="~/signalr/hubs"&gt;&lt;/script&gt;
    &lt;script src="~/Scripts/util.js"&gt;&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Разметка содержит по сути два блока: loginBlock (блок ввода логина) и chatBody (сам чат). В один момент времени виде только один блок, 
поэтому, если пользователь удачно подключился, то мы переключаем видимость, делая видимым блок chatBody.</p>
<p>Блок chatBody содержит три подблока: inputForm (форма ввода сообщения), chatroom (поле, куда будут добавляться сообщения) и chatusers 
(список всех пользователей, кроме текущего).</p>
<p>Основные действия на клиентской части будет выполнять код javascript. Причем перед подключением всех остальных файлов скриптов идет подключение 
библиотеки jQuery, поскольку скрипт SignalR имеет зависимости от jQuery.</p> 
<p>Далее подключается сама библиотека SignalR. Конкретная версия библиотеки может отличаться от использованной выше. Затем подключается скрипт 
<code>signalr/hubs</code>. Хотя на самом деле пока его нет, но в процессе запуска приложения он будет автоматически генерироваться и после этого использоваться.</p>
<p>Последним идет подключение скрипта <i>util.js</i>, которого пока еще нет. Итак, добавим файл с данным названием в папку Scripts и определим в нем следующий код:</p>
<pre class="brush:js;">
$(function () {

    $('#chatBody').hide();
    $('#loginBlock').show();
    // Ссылка на автоматически-сгенерированный прокси хаба
    var chat = $.connection.chatHub;
    // Объявление функции, которая хаб вызывает при получении сообщений
    chat.client.addMessage = function (name, message) {
        // Добавление сообщений на веб-страницу 
        $('#chatroom').append('&lt;p&gt;&lt;b&gt;' + htmlEncode(name)
            + '&lt;/b&gt;: ' + htmlEncode(message) + '&lt;/p&gt;');
    };

    // Функция, вызываемая при подключении нового пользователя
    chat.client.onConnected = function (id, userName, allUsers) {

        $('#loginBlock').hide();
        $('#chatBody').show();
        // установка в скрытых полях имени и id текущего пользователя
        $('#hdId').val(id);
        $('#username').val(userName);
        $('#header').html('&lt;h3&gt;Добро пожаловать, ' + userName + '&lt;/h3&gt;');

        // Добавление всех пользователей
        for (i = 0; i &lt; allUsers.length; i++) {

            AddUser(allUsers[i].ConnectionId, allUsers[i].Name);
        }
    }

    // Добавляем нового пользователя
    chat.client.onNewUserConnected = function (id, name) {

        AddUser(id, name);
    }

    // Удаляем пользователя
    chat.client.onUserDisconnected = function (id, userName) {

        $('#' + id).remove();
    }

    // Открываем соединение
    $.connection.hub.start().done(function () {

        $('#sendmessage').click(function () {
            // Вызываем у хаба метод Send
            chat.server.send($('#username').val(), $('#message').val());
            $('#message').val('');
        });

        // обработка логина
        $("#btnLogin").click(function () {

            var name = $("#txtUserName").val();
            if (name.length &gt; 0) {
                chat.server.connect(name);
            }
            else {
                alert("Введите имя");
            }
        });
    });
});
// Кодирование тегов
function htmlEncode(value) {
    var encodedValue = $('&lt;div /&gt;').text(value).html();
    return encodedValue;
}
//Добавление нового пользователя
function AddUser(id, name) {

    var userId = $('#hdId').val();
    
    if (userId != id) {

        $("#chatusers").append('&lt;p id="' + id + '"&gt;&lt;b&gt;' + name + '&lt;/b&gt;&lt;/p&gt;');
    }
}
</pre>
<p>Весь код на стороне клиента находится в функции jQuery, за ее пределами определены две функции - <code>htmlEncode</code> (для кодирования тегов, чтобы 
пресечь возможные попытки вставок кода javascript и прочие нехорошести) и <code>AddUser</code> (для добавления данных пользователя в список).</p>
<p>Чтобы взаимодействовать с хабом, получаем прокси хаба: <code>var chat = $.connection.chatHub;</code>. Затем определяем ряд функций 
клиента <code>chat.client.addMessage</code>, <code>chat.client.onConnected</code> и т.д.</p>
<p>Выше в хабе в коде C# у нас было определено обращение к функциям клиента: <code>Clients.All.addMessage(name, message);</code>. Функция 
addMessage - это и есть функция, определенная для <code>chat.client.addMessage</code>. Подобным образом мы можем обращаться на сервере и к другим функциям клиента.</p>
<p>Для открытия подключения мы вызываем метод <code>$.connection.hub.start().done()</code>, передавая в него функцию. В этой функции 
мы вешаем обработчики кнопок, по нажатию на которые происходит обращение на сервер.</p>
<p>Например, отправку сообщения производится с помощью вызова <code>chat.server.send($('#username').val(), $('#message').val());</code>. 
Выражение <code>chat.server</code> представляет собой обращение к методам хаба на сервере. То есть в данном случае будет идти обращение 
к методу <code>public void Send(string name, string message)</code>, определенному в классе ChatHub.</p>
<p>Подобным образом срабатывает вызов метода <code>chat.server.connect(name);</code>. Обратите внимание, что хотя в коде c# методы объявлены с 
большой буквы, в коде javascript в их названии используется малая буква.</p>
<p>Ну также можно применить некоторые стили для общей красоты. Свои стили я приводить здесь не буду, чтобы не перегружать пример.</p>
<p>Теперь мы можем проверить в действии. После запуска нам будет предложено ввести логин:</p>
<img src="./pics/16.4.png" />
<p>После успешного логина форма ввода логина станет невидимой, зато станет доступна форма самого чата. Можно открыть несколько вкладок в браузере 
с данным приложением, подключив тем самым несколько клиентов, и протестировать:</p>
<img src="./pics/16.5.png" />
<p>Таким образом, слева у нас список с сообщениями, а справа - список всех пользователей, кроме текущего.</p>
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


<div class="nav"><p><a href="./16.1.php">Назад</a><a href="./">Содержание</a><a href="./16.3.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в ASP NET MVC</span>
<ul><li><span class="file"><a href="1.1.php">Особенности ASP.NET MVC. Что нового в MVC 5</a></span></li>
<li><span class="file"><a href="1.2.php">Начало работы с ASP.NET MVC 5</a></span></li></ul>
</li>
<li class="closed"><span class="folder">Глава 2. Создание первого приложения ASP.NET MVC 5</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/2.1.php">Создание проекта</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/2.2.php">Создание контроллера и представлений</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/2.3.php">Стилизация приложения</a></span></li>
	</ul>
</li>
	<li class="closed"><span class="folder">Глава 3. Контроллеры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/3.1.php">Основы контроллеров</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/3.2.php">Методы действий и их параметры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/3.3.php">Результаты действий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/3.4.php">ViewResult и генерация представлений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/3.5.php">Переадресация и отправка кодов статуса и ошибок</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/3.6.php">Отправка файлов в ASP.NET MVC 5</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/3.7.php">Контекст запроса HttpContext. Куки. Сессии</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/3.8.php">Асинхронные методы в ASP.NET MVC 5</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Представления</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/4.1.php">Введение в представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/4.2.php">Строго типизированные представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/4.3.php">Мастер-страницы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/4.4.php">Частичные представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/4.5.php">HTML-хелперы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/4.6.php">Работа с формами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/4.7.php">Строго типизированные хелперы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.1.php">Модели и БД</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.2.php">Подключение к базе данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.3.php">Шаблонные хелперы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.4.php">Редактирование данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.5.php">Добавление и удаление данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.6.php">Шаблоны формирования</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.7.php">Модели со сложной структурой</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.8.php">Работа со сложными моделями</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.9.php">Модели со связью многие-ко-многим</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.10.php">Работа с моделями со связью многие-ко-многим</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.11.php">Передача массивов и сложных данных в контроллер</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.12.php">Миграция баз данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.13.php">Создание пагинации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.14.php">Переопределение шаблонов формирования</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.15.php">Переопределение шаблонов отображения и редактирования</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.16.php">Фильтрация данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.17.php">Domain Model и View Model</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/5.18.php">Управление иерархическими данными</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/6.1.php">Определение маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/6.2.php">Работа с маршрутами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/6.3.php">Создание ограничений для маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/6.4.php">Генерация исходящих адресов URL</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/6.5.php">Области в ASP.NET MVC 5</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/6.6.php">Создание собственного обработчика маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/6.7.php">Атрибуты маршрутизации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/6.8.php">Маршрутизация и вложенные ресурсы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Метаданные и валидация модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/7.1.php">Аннотации данных для отображения свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/7.2.php">Основы валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/7.3.php">Атрибуты валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/7.4.php">Валидация модели в контроллере</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/7.5.php">Отображение ошибок валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/7.6.php">Создание собственной логики валидации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Фильтры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.1.php">Фильтры в ASP.NET MVC 5</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.2.php">Фильтры аутентификации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.3.php">Фильтры авторизации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.4.php">Фильтры исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.5.php">Фильтры действий и результатов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.8.php">Примеры фильтров действий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.6.php">Глобальные фильтры и переопределение фильтров</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.7.php">Дополнительные встроенные фильтры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/8.9.php">Логгирование исключений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Привязка модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/9.1.php">Введение в привязку моделей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/9.2.php">DefaultModelBinder</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/9.3.php">Явная привязка модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/9.4.php">Поставщики значений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/9.5.php">Создание привязчика модели</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. JavaScript и AJAX</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.1.php">Использование JavaScript</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.2.php">Введение в AJAX</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.3.php">Ajax-Формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.4.php">Параметры объекта AjaxOptions</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.5.php">AJAX-ссылки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.6.php">Формат JSON</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.7.php">AJAX-запросы с помощью jQuery</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.8.php">Создание чата на AJAX и jQuery. Часть 1</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/10.9.php">Создание чата на AJAX и jQuery. Часть 2</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 11. OWIN и Katana</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/11.1.php">Введение в OWIN и Katana</a></span></li>
		</ul>
	</li>			
	<li class="closed"><span class="folder">Глава 12. Авторизация и аутентификация в MVC 5</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.1.php">ASP.NET Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.14.php">Базовые классы AspNet Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.2.php">Авторизация через внешние сервисы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.3.php">Переопределение системы AspNet Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.4.php">Работа с ролями в AspNet Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.5.php">Аутентификация форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.6.php">Использование объектов Claim</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.7.php">Настройка валидации пароля в ASP.NET Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.13.php">Валидация пользователя в ASP.NET Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.8.php">Подтверждение Email в ASP.NET Identity 2.0</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.9.php">Подтверждение телефона по SMS в ASP.NET Identity 2.0</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.10.php">Сброс пароля в ASP.NET Identity 2.0</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.11.php">Универсальные провайдеры в MVC 5</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.12.php">Переопределение универсальных провайдеров. Провайдер ролей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.15.php">Создание приложения с ASP.NET Identity с нуля</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.16.php">Регистрация и создание пользователей в ASP.NET Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.17.php">Авторизация пользователей в ASP.NET Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.18.php">Редактирование и удаление пользователей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.19.php">Добавление ролей в ASP.NET Identity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.20.php">Аутентификация OWIN и ClaimsIdentity</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/12.21.php">Авторизация на основе Claims</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 13. Бандлы и минификация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/13.1.php" >Введение в бандлы и минификацию</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/13.2.php" >Создание бандлов. Библиотеки из CDN</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 14. Bootstrap в ASP.NET MVC 5</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/14.1.php">Введение в Bootstrap</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/14.2.php">Позиционирование элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/14.3.php">Компоненты Bootstrap</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/14.4.php">Работа с формами в Bootstrap</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/14.5.php">Работа с таблицами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc5/14.6.php">Модальные окна</a></span></li>
		</ul>
	</li>
<li class="closed"><span class="folder">Глава 16. SignalR 2</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/16.1.php">Введение в SignalR 2</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/16.2.php">Первое приложение с SignalR 2</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/16.3.php">Persistent Connection API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/16.4.php">Рисовалка на SignalR</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/16.5.php">Push-уведомления</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 17. Работа с jQuery UI и визуальными элементами</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.1.php">jQuery UI и Autocomplete</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.2.php">Диалоговые окна и CRUD-интерфейс</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.8.php">Валидация в диалоговых окнах</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.3.php">Грид JqGrid в ASP.NET MVC</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.4.php">Пагинация в JqGrid</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.5.php">Поиск по таблице в JqGrid</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.6.php">CRUD-операции в JqGrid</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.7.php">Постраничный вывод</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.9.php">Использование Datepicker jQuery</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/17.10.php">Локализация дат</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 18. Тестирование веб-приложений</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/18.1.php">Введение в тестирование. Test-Driven Development</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/18.2.php">Создание проекта для юнит-тестов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/18.3.php">Создание юнит-тестов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/18.4.php">Слабосвязанные объекты и тестирование работы с БД</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/18.5.php">Фреймворк Moq</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/18.6.php">Тестирование создания модели и переадресации</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 19. Управление жизненным циклом приложения</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/19.1.php">Жизненный цикл приложения и запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/19.2.php">Модули</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/19.3.php">Создание собственного модуля</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/19.4.php">Взаимодействие между модулями. События модулей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/19.5.php">HTTP-обработчики. Создание обработчиков</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/19.6.php">Создание асинхронных HTTP-обработчиков</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/19.7.php">Переопределение HTTP-обработчика</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/19.8.php">Выполнение действий по таймеру</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 20. Кэширование в ASP.NET MVC</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/20.1.php">Атрибут OutputCache</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/20.2.php">Параметры кэширования</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/20.3.php">Профили кэширования</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/20.4.php">Динамическое управление кэшем</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/20.5.php">Кэширование статического контента</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/20.6.php">MemoryCache</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 21. Внедрение зависимостей в ASP.NET MVC</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/21.1.php">Инверсия управления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/21.2.php">IoC-контейнер Ninject</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/21.3.php">Внедрение зависимостей с параметрами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/21.4.php">IoC-контейнер Autofac</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/21.5.php">IoC-контейнер Castle Windsor</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 22. URL Rewriting</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/22.1.php">Введение в URL Rewriting</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/22.2.php">Переменные сервера и обратные ссылки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/22.3.php">Примеры правил URL Rewriting</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 23. Архитектура приложений</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.1.php">Onion-архитектура. Часть 1</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.2.php">Onion-архитектура. Часть 2</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.3.php">Паттерн Unit of Work</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.4.php">AutoMapper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.5.php">Многоуровневая архитектура</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.6.php">Монолитная архитектура</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.7.php">Data Access Layer</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.8.php">Business Logic Layer</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.9.php">Presentation Layer</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.10.php">ASP.NET Identity в многоуровневой архитектуре. Часть 1</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.11.php">ASP.NET Identity в многоуровневой архитектуре. Часть 2</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/23.12.php">ASP.NET Identity в многоуровневой архитектуре. Часть 3</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 24. Дополнительные статьи</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.1.php">Действия по расписанию и Quartz.NET</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.2.php">Настройка страниц ошибок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.3.php">Удаленное тестирование приложения</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.4.php">Приложение на Angular 2/8</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.5.php">Генерация Sitemap.xml</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.6.php">Загрузка файлов на сервер</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.7.php">Локализация чисел decimal</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.8.php">Загрузка файлов в БД</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.9.php">Работа конвейера веб-сервера IIS</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.10.php">Жизненный цикл приложения</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.11.php">Подгрузка с прокруткой списка в MVC и Web API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.12.php">Загрузка файла через AJAX в MVC и Web API</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.13.php">Динамическая загрузка списка по выбору из другого списка</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.14.php">PostgreSQL</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.15.php">Сжатие изображений с помощью ImageResizer</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.16.php">Архивация файлов на лету</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.17.php">Работа с MySQL</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.18.php">Dapper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/24.19.php">Динамическая локализация</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 25. React.JS</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/25.1.php">Подключение React в ASP.NET MVC 5</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/mvc5/25.2.php">Взаимодействие React.JS и ASP.NET</a></span></li>
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
	
	$("li:contains('Глава 16.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 16.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
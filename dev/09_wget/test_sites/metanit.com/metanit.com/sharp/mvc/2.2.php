<!DOCTYPE html>
<html >
<head>
<title>Создание контроллера и представлений</title>
<meta charset="utf-8" />
<meta name="description" content="Создание контроллера и представлений в приложении ASP.NET MVC 4">
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
<h2>Создание контроллера и представлений</h2><p style="color:red;">Данное руководство устарело. Актуальное руководство: <a href="https://metanit.com/sharp/aspnet5/">Руководство по ASP.NET Core</a></p><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Поскольку с моделями мы закончили, перейдем к наиболее важной части приложения - к контроллеру. Для контроллеров у нас уже имеется папка <span class="bb">Controllers</span>. 
Нажмите на нее правой кнопкой мыши и в появившемся меню выберите <span class="bb">Add-&gt;Controller...</span>. Перед вами появится диалоговое окно создания нового контроллера. 
Позже в соответствующей главе мы подробно поговорим о параметрах создания контроллерах да и о самих контроллерах, а пока установите в качестве 
имени контроллера <span class="bb">HomeController</span> и нажмите Add (Добавить)</p>
<img src="mvcpics/2.6.png" />
<p>У вас будет создан следующий контроллер:</p>
<pre class="brush:c#;">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace BookStore.Controllers
{
    public class HomeController : Controller
    {
        //
        // GET: /Home/

        public ActionResult Index()
        {
            return View();
        }
    }
}
</pre>
<p>Контроллер по сути и есть главное звено приложения, которая связывает модель и пользовательский интерфейс. Обратите внимание, что контроллер 
- это обычный класс, который наследуется от базового класса <span class="bb">Controller</span>. Он пока имеет единственный метод <span class="bb">Index</span>, который возвращает некоторый 
результат метода View() - будущее представление. И если мы сейчас запустим приложение, то получим ошибку о том, что представление для данного действия 
не определено. Но перед тем как добавить представление и приступить к созданию пользовательского интерфейса изменим метод Index следующим образом:</p>
<pre class="brush:c#;">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using BookStore.Models;
 
namespace BookStore.Controllers
{
    public class HomeController : Controller
    {
        // создаем контекст данных
        BookContext db = new BookContext();
 
        public ActionResult Index()
        {
            // получаем из бд все объекты Book
            IEnumerable&lt;Book&gt; books = db.Books;
            // передаем все полученный объекты в динамическое свойство Books в ViewBag
            ViewBag.Books = books;
            // возвращаем представление
            return View();
        }
    }
}
</pre>
<p>Прежде всего, обратите внимание, что, так как у нас модели находятся в другом пространстве имен, хотя и в одном проекте, то мы его должны импортировать. 
Затем мы создаем контекст данных. Используя свойство <span class="bb">Books</span>, мы получаем из базы данных список объектов Book.</p>
<p>Далее мы создаем объект Books в объекте ViewBag  и присваиваем ему этот список. Объект <span class="bb">ViewBag</span> является таким объектом, который 
передается в представление. И мы можем определить в этом объекте любую переменную и передать ей некоторое значение, а затем в представлении 
извлечь это значение.</p>
<p>А теперь создадим само представление. Наведем курсор на метод Index и нажмем правой кнопкой мыши. Нам отобразится меню, в котором выберем 
<span class="bb">Add View...</span>.</p>
<img src="mvcpics/2.7.png" />
<p> Затем нам откроется окно добавления представления, где нам будет предложено выбрать имя представления и еще ряд параметров. 
Поскольку у нас еще нет мастер-страниц в проекте, снимем галочку с флажка <span class="bb">Use a layout or masterpage:</span> и нажмем Add.</p>
<img src="mvcpics/2.8.png" />
<p>Позже в соответствующей главе мы подробнее поговорим про опции создания и вообще про представления. А пока Visual Studio автоматически откроет 
созданное представление <span class="bb">Index.cshtml</span>. По сути оно пусто и содержит минимальный код разметки на языке html. Изменим его следующим образом:</p>
<pre class="brush:xml;">
@{
    Layout = null;
}
 
&lt;!DOCTYPE html&gt;
 
&lt;html&gt;
&lt;head&gt;
    &lt;meta name="viewport" content="width=device-width" /&gt;
    &lt;title&gt;Книжный магазин&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div&gt;
        &lt;h3&gt;Распродажа книг&lt;/h3&gt;
        &lt;table&gt;
            &lt;tr&gt;&lt;td&gt;&lt;p&gt;Название книги&lt;/p&gt;&lt;/td&gt;
                &lt;td&gt;&lt;p&gt;Автор&lt;/p&gt;&lt;/td&gt;
                &lt;td&gt;&lt;p&gt;Цена&lt;/p&gt;&lt;/td&gt;&lt;td&gt;&lt;/td&gt;
            &lt;/tr&gt;
            @foreach (var b in ViewBag.Books)
            {
            &lt;tr&gt;
                &lt;td&gt;&lt;p&gt;@b.Name&lt;/p&gt;&lt;/td&gt;
                &lt;td&gt;&lt;p&gt;@b.Author&lt;/p&gt;&lt;/td&gt;
                &lt;td&gt;&lt;p&gt;@b.Price&lt;/p&gt;&lt;/td&gt;
                &lt;td&gt;&lt;p&gt;&lt;a href="/Home/Buy/@b.Id"&gt;Купить&lt;/a&gt;&lt;/p&gt;&lt;/td&gt;
            &lt;/tr&gt;
            }
        &lt;/table&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Здесь мы создаем таблицу, в которой будут располагаться наши данные о книгах. Особый интерес представляет конструкция 
<code>@foreach (var c in ViewBag.Books)</code>. Эта конструкция использует синтаксис движка представления Razor (а именно его мы выбрали при создании представления). 
Подробнее мы погорим о движке Razor в отдельной главе, а пока вам надо знать, что после символа <code>@</code> согласно синтаксису мы можем использовать 
выражения кода на языке C#.</p>
<P>В цикле мы пробегаемся по элементам в объекте ViewBag.Books, который мы ранее создали в методе контроллера. И затем получаем свойства каждого 
элемента и помещаем его в ячейку таблицы.</P>
<p>Ссылка в конце - <code>&lt;a href="/Home/Buy/@b.Id"&gt;Купить&lt;/a&gt;</code> будет означать адрес, 
по которому будет размещаться форма оформления покупки выбранной книги.</p>
<h4>Основы маршрутизации</h4>
<p>Чтобы вызвать контроллер HomeController или отправить ему запрос, нам надо указать в строке запроса его имя - <span class="bb">Home</span>. Кроме того, 
после имени контроллера нам надо через слеш указать действие или метод контроллера, к которому отправляется запрос. По умолчанию при запуске проекта 
или при обращении к сайту система mvc будет вызывать действие Index контроллера HomeController, если мы не укажем иной маршрут по умолчанию в параметрах маршрутизации. 
Путь <code>/Home/Buy/@b.Id</code> означает, что мы будем обращаться к методу Buy контроллера HomeController. Но перед тем как создать этот метод, 
наполним приложение данными.</p>
<h4>Данные для моделей по умолчанию</h4>
<p>Мы можем уже сейчас запустить наше приложение, однако кроме строки с заголовками в таблице мы ничего не увидим, потому что у нас же еще нет данных. 
Здесь мы могли поступить двумя способами: либо добавить в базу данных mssql некоторые данные, либо инициализировать начальные данные для моделей в коде. 
Выберем второй вариант. Для этого в папку Models добавим новый класс <span class="bb">BookDbInitializer</span> и добавим в него следующий код:</p>
<pre class="brush:c#;">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Data.Entity;
 
namespace BookStore.Models
{
    public class BookDbInitializer : DropCreateDatabaseAlways&lt;BookContext&gt;
    {
        protected override void Seed(BookContext db)
        {
            db.Books.Add(new Book { Name = "Война и мир", Author = "Л. Толстой", Price = 220 });
            db.Books.Add(new Book { Name = "Отцы и дети", Author = "И. Тургенев", Price = 180 });
            db.Books.Add(new Book { Name = "Чайка", Author = "А. Чехов", Price = 150 });
 
            base.Seed(db);
        }
    }
}
</pre>
<p>С помощью данного класса мы создаем три объекта Book и добавляем их в базу данных. Чтобы этот класс заработал, нам надо не только его объявить, 
но и запустить. Все начальные настройки и конфигурации у нас хранятся в файле <strong>Global.asax</strong>. Откроем его и добавим в него в метод <span class="bb">Application_Start</span>, 
который отрабатывает при старте приложения, следующую строчку: </p>
<pre class="brush:c#;">
Database.SetInitializer(new BookDbInitializer());
</pre>
<p>Ну и конечно, импортируем в файле Global.asax пространства имен [имя_проекта].Models и System.Data.Entity, иначе класс BookDbInitializer будет недоступен.</p>
<p>Все, теперь, если мы запустим приложение, то увидим, что в таблице содержатся ранее определенные нами данные:</p>
<img src="mvcpics/2.4.png" />
<p>И если мы откроем папку проекта и зайдем в ней в каталог <span class="bb">App_Data</span>, то найдем только что созданную базу данных 
Bookstore.mdf, которая и будет хранить таблицы с данными.</p>
<p>Да, наша таблица выглядит немного неказисто, не мешало бы применить к ней стили, но не сейчас. Сейчас нам надо создать метод <span class="bb">Buy</span>, 
который будет отвечать за обработку ввода пользователя при оформлении покупки. Добавим в контроллер HomeController следующие два метода:</p>
<pre class="brush:c#;">
[HttpGet]
public ActionResult Buy(int id)
{
    ViewBag.BookId = id;
    return View();
}
[HttpPost]
public string Buy(Purchase purchase)
{
    purchase.Date = DateTime.Now;
    // добавляем информацию о покупке в базу данных
    db.Purchases.Add(purchase);
    // сохраняем в бд все изменения
    db.SaveChanges();
    return "Спасибо," + purchase.Person + ", за покупку!";
}
</pre>
<p>По сути здесь мы определили одно действие Buy, однако в одном случае оно выполняется при получении запроса GET, а во втором случае - 
при получении запроса POST, что мы и определили с помощью атрибутов [HttpGet] и [HttpPost]. Метод <code>public ActionResult Buy(int id)</code> 
очень прост - он просто принимает id выбранной книги и возвращает для нее соответствующее представление.</p>
<p>Метод <code>public string Buy(Purchase purchase)</code> выглядит несколько сложнее. Он принимает переданную ему в запросе POST модель purchase и 
добавляет ее в базу данных. В конце мы возвращаем строку сообщения.</p>
<p>И в конце добавим представление <span class="bb">Buy</span>. Для этого нажмем на метод <code>public ActionResult Buy(int id)</code> правой кнопкой и добавим в проект новое представление. 
Изменим код нового представления следующим образом:</p>
<pre class="brush:xml;">
@{
    Layout = null;
}
 
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;meta name="viewport" content="width=device-width" /&gt;
    &lt;title&gt;Покупка&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div&gt;
        &lt;h3&gt;Форма оформления покупки&lt;/h3&gt;
        &lt;form method="post"&gt;
            &lt;input type="hidden" value="@ViewBag.BookId" name="BookId" /&gt;
            &lt;table&gt;
                &lt;tr&gt;&lt;td&gt;&lt;p&gt;Введите свое имя &lt;/p&gt;&lt;/td&gt;
                    &lt;td&gt;&lt;input type="text" name="Person" /&gt; &lt;/td&gt;&lt;/tr&gt;
                &lt;tr&gt;&lt;td&gt;&lt;p&gt;Введите адрес :&lt;/p&gt;&lt;/td&gt;&lt;td&gt;
                   &lt;input type="text" name="Address" /&gt; &lt;/td&gt;&lt;/tr&gt;
                &lt;tr&gt;&lt;td&gt;&lt;input type="submit" value="Отправить" /&gt; &lt;/td&gt;&lt;td&gt;&lt;/td&gt;&lt;/tr&gt;
            &lt;/table&gt;
        &lt;/form&gt;
    &lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Здесь мы создали форму ввода данных. При переходе по ссылке "/Home/Buy/2" контроллер будет получать запрос к действию Buy. И так как такой запрос 
представляет тип GET, пользователю будет возвращаться форма. После заполнения формы и нажатия на кнопку форма будет оправляться запросом POST, 
так как мы его определили в строке <code>&lt;form method="post" action=""&gt;</code>. Контроллер снова будет получать запрос к методу Buy, 
только теперь будет выбираться для обработки запроса метод <code>public string Buy(Purchase purchase)</code>.</p>
<p>Каким образом система MVC угадывает, что мы передали с запросом post информацию о модели? Обратите внимание на поля ввода 
<code>&lt;input type="text" name="Person" /&gt;</code> и <code>&lt;input type="text" name="Address" /&gt;</code>. Их свойства <span class="bb">name</span> соответствуют 
именам свойств модели Purchase. При нажатии кнопки и отправки запроса передаются значения этих полей. Система MVC, используя соглашения по умолчанию, 
считает эти значения значениями соответствующих свойств модели.</p>
<p>Теперь первое мини-тренировочное приложение готово, и мы можем его запустить. Перейдите на страницу оформления заказа, заполните поля и нажмите кнопку 
"Отправить".</p>
<img src="mvcpics/2.10.png"  />
<p>После этого ваша заявка на покупку книги попадет в базу данных, а в браузере отобразится соответствующее уведомление.</p>
<img src="mvcpics/2.11.png" />
<p>А теперь добавим к нашему сайту элементы стилизации в виде стилей css, а также мастер-страницы, которые позволяют придать всем страницам сайта единообразный вид.</p>
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


<div class="nav"><p><a href="2.1.php">Назад</a><a href="./">Содержание</a><a href="2.3.php">Вперед</a></p></div></div>
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
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/1.1.php">Особенности платформы ASP.NET MVC</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/1.2.php">Начало работы с ASP.NET MVC 4</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Создание первого приложения на ASP.NET MVC 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/2.1.php">Создание проекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/2.2.php">Создание контроллера и представлений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/2.3.php">Стилизация приложения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Контроллеры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.1.php">Основы контроллеров</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.2.php">Методы действий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.3.php">Получение входных данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.4.php">Результаты действий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.7.php">ViewResult</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.8.php">Переадресация и отправка кодов статуса и ошибок</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.9.php">Отправка файлов в ASP.NET MVC</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.5.php">HttpContext. Контекст запроса. Куки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/3.6.php">Асинхронные контроллеры и методы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Представления</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.1.php">Введение в представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.2.php">Строго типизированные представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.3.php">Движок представлений и Razor</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.4.php">Мастер-страницы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.5.php">Частичные представления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.6.php">HTML-хелперы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.7.php">Работа с формами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/4.8.php">Строго типизированные хелперы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.1.php">Модели и БД</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.2.php">Подключение к базе данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.3.php">Шаблонные хелперы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.4.php">Редактирование модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.9.php">Добавление и удаление модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.5.php">Шаблоны формирования</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.6.php">Модели со сложной структурой</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.8.php">Работа со сложными моделями</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.10.php">Модели со связью многие-ко-многим</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.11.php">Работа с моделями со связью многие-ко-многим</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/5.7.php">Передача данных в контроллер</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Маршрутизация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.1.php">Определение маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.2.php">Работа с маршрутами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.3.php">Создание ограничений для маршрутов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.4.php">Генерация исходящих адресов URL</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.5.php">Области (Areas)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/6.6.php">Создание собственного обработчика маршрутов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Метаданные и валидация модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.1.php">Аннотации данных для отображения свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.2.php">Основы валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.3.php">Атрибуты валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.4.php">Валидация модели в контроллере</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.5.php">Отображение ошибок валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/7.6.php">Создание собственной логики валидации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Фильтры в ASP NET MVC 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.1.php">Фильтры. Введение.</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.2.php">Фильтры авторизации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.3.php">Фильтры исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.4.php">Фильтры действий и результатов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.5.php">Глобальные фильтры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/8.6.php">Дополнительные встроенные фильтры</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Привязка модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.1.php">Введение в привязку моделей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.2.php">DefaultModelBinder</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.3.php">Явная привязка модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.4.php">Поставщики значений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/9.5.php">Создание привязчика модели</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. jQuery и AJAX</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.1.php">Использование JavaScript/jQuery</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.2.php">Краткий обзор jQuery</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.3.php">Введение в AJAX</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.4.php">Ajax-Формы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.5.php">Параметры объекта AjaxOptions</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.6.php">AJAX-ссылки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.7.php">Формат JSON</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.8.php">AJAX-запросы с помощью jQuery</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/10.9.php">Работа с jQuery UI</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 11. Авторизация и аутентификация в MVC 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.1.php">Введение в авторизацию и аутентификацию</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.2.php">Аутентификация Windows</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.3.php">Аутентификация форм</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.4.php" >Авторизация в MVC 4 и SimpleMembershipProvider</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.5.php" >Настройка использования SimpleMembershipProvider</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.6.php" >Использование универсальных провайдеров</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.7.php" >Web Site Administration Tool</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.8.php" >Создание своих провайдеров членства и ролей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.9.php" >Переопределение провайдера членства</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.10.php" >Переопределение провайдера ролей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.12.php" >Провайдер профилей и его переопределение</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/11.11.php" >OAuth-аутентификация</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 12. Web API</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/12.1.php" >Введение в Web API</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/12.2.php" >Создание и тестирование приложения Web API</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/12.3.php" >Создание представления для Web API</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 13. Публикация приложения</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.1.php" >Среда публикации и составные части приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.2.php" >Публикация на веб-сервере IIS</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.3.php" >Публикация на внешнем хостинге (на примере somee.com)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.4.php" >Добавление базы данных на хостинг somee.com</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/13.5.php" >Добавление файлов приложения на somee.com</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 14. Мобильные приложения на ASP.NET MVC 4</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.1.php" >Разработка мобильных приложений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.2.php" >Метатег Viewport</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.3.php" >Применение CSS в мобильных приложениях</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.4.php" >Создание мобильного приложения на ASP.NET MVC 4</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/14.5.php" >Режимы отображения DisplayMode</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 15. Бандлы и минификация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/15.1.php" >Введение в бандлы и минификацию</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/15.2.php" >Создание бандлов. Библиотеки из CDN</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 16. Мультиязычный сайт и локализация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/16.1.php" >Введение в мультиязычные сайты. Ресурсы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/16.2.php" >Логика мультиязычного сайта. Фильтр локализации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 17. Работа с SignalR</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/17.1.php" >Введение в SignalR</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/17.2.php" >Первое приложение с SignalR</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/mvc/17.3.php" >Persistent Connection API</a></span></li>
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
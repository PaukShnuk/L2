<!DOCTYPE html>
<html >
<head>
<title>Razor Pages и C# | Передача данных на страницу Razor в GET-запросе</title>
<meta charset="utf-8" />
<meta name="description" content="Передача данных на страницу Razor Pages в GET-запросе в ASP.NET Core и C#, получение параметров в методе OnGet">
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
<h2>Передача данных на страницу Razor в GET-запросе</h2><div class="date">Последнее обновление: 15.04.2022</div>

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

<p>В get-запросе также можно передать на страницу данные. Распространенным способом передачи данных в GET-запросе представляет <span class="b">строка запроса</span>. 
Строка запроса представляет ту часть адреса, которая идет после знака вопроса ? и представляет набор параметров, где каждый параметр отделен от другого с помощью амперсанда:</p>
<pre class="brush:c#;">название_ресурса?параметр1=значение1&параметр2=значение2</pre>
<p>Например, в адресе:</p>
<pre class="brush:xml;">https://localhost:7085/Index?name=Tom&age=37</pre>
<p>часть <span class="ii">?name=Tom&age=37</span> как раз представляет строку запроса, которая содержит два параметра: name и age. Значение параметра name - "Tom", а значение параметра age - 37.</p>
<p>Например, у нас есть страница Razor <span class="b">Index.cshtml</span> и код связанной модели IndexModel в файле <span class="b">Index.cshtml.cs</span>:</p>
<img src="./pics/2.13.png" alt="OnGet и OnPost в Razor Page в ASP.NET Core и C#" />
<p>Передадим в страницу <span class="b">Index.cshtml</span> через строку запроса данные для параметра name. Для этого определим следующую модель <span class="b">IndexModel</span>:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace RazorPagesApp.Pages
{
    public class IndexModel : PageModel
    {
        public string Message { get; private set; } = "";
        public void OnGet(string name)
        {
            Message = $"Name: {name}";
        }
    }
}
</pre>
<p>А на странице <span class="b">Index.cshtml</span> выведем значение свойства Message модели:</p>
<pre class="brush:xml;">
@page

@model RazorPagesApp.Pages.IndexModel
&lt;h2&gt;@Model.Message&lt;/h2&gt;
</pre>
<img src="./pics/2.15.png" alt="Передача значений для параметров метода контроллера через строку запроса в Razor Pages ASP.NET Core и C#" />
<p>То есть в данном случае при обращении к методу Index с запросом <code>https://localhost:7085/Index?name=Eugene</code> параметру name будет передаваться значение "Eugene".</p>
<p>Система привязки по умолчанию сопоставляет параметры запроса и параметры метода по имени. То есть, если в строке запроса 
идет параметр <code>name</code>, то его значение будет передаваться именно параметру метода, который также называется <code>name</code>. При этом должно быть также 
соответствие по типу, то есть если параметр метода принимает числовое значение, то и через строку запроса надо передавать для этого параметра число, а не строку.</p>
<p>Подобным образом можно передать значения для нескольких параметров. Например, изменим модель <span class="b">IndexModel</span> следующим образом:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace RazorPagesApp.Pages
{
    public class IndexModel : PageModel
    {
        public string Message { get; private set; } = "";
        public void OnGet(string name, int age)
        {
            Message = $"Name: {name}  Age: {age}";
        }
    }
}
</pre>
<p>В этом случае мы можем обратиться к действию, набрав в адресной строке <span class="ii">https://localhost:7085?name=Tom&age=37</span>.</p>
<img src="./pics/2.16.png" alt="Передача значений в действия контроллера через строку запроса в ASP.NET Core Razor Pages и C#" />

<p>Если же мы не используем параметры в строке запроса, то  мы можем использовать параметры по умолчанию, которые будут работать, 
если через строку запроса не передается никаких параметров:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace RazorPagesApp.Pages
{
    public class IndexModel : PageModel
    {
        public string Message { get; private set; } = "";
        public void OnGet(string name = "Bob", int age = 33)
        {
            Message = $"Name: {name}  Age: {age}";
        }
    }
}
</pre>
<p>Например, при отправке запроса <span class="ii">https://localhost:7085/Index?age=41</span> параметр name будет иметь значение по умолчанию.</p>
<img src="./pics/2.17.png" alt="Значения по умолчанию в методе OnGet в ASP.NET Core Razor Pages и C#" />
<p>Подобным образом можно получать данные из строки запроса непосредственно на странице <span class="b">Index.cshtml</span></p>
<pre class="brush:xml;">
@page

&lt;h2&gt;@Message&lt;/h2&gt;

@functions {
    public string Message { get; set; } = "";
    public void OnGet(string name, int age)
    {
        Message = $"Name: {name}  Age: {age}";
    }
}
</pre>

<h3>Передача сложных объектов</h3>
<p>Хотя строка запроса преимущественно используется для передачи данных примитивных типов, но мы также можем принимать более сложные объекты. 
Например, определим рядом с моделью класс Person:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace RazorPagesApp.Pages
{
    public class IndexModel : PageModel
    {
        public string Message { get; private set; } = "";
        public void OnGet(Person person)
        {
            Message = $"Person  {person.Name} ({person.Age})";
        }
    }
    public record class Person(string Name, int Age);
}
</pre>
<p>Класс Person определяет два свойства: Name и Age. И в модели IndexModel метод OnGet принимает параметр типа Person. В этом случае значения через строку запроса 
передаются как и в предыдущем случае. При этом параметры строки запроса должны соответствовать по имени свойствам объекта. Регистр названий параметров при этом не учитывается:</p>
<img src="./pics/2.18.png" alt="Передача сложных объектов в метод OnGet в Razor Pages в ASP.NET Core и C#" />
<h3>Передача массивов</h3>
<p>Допустим, метод OnGet принимает массив строк-имен:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace RazorPagesApp.Pages
{
    public class IndexModel : PageModel
    {
        public string Message { get; private set; } = "";
        public void OnGet(string[] people)
        {
            string result = "";
            foreach (var person in people)
                result = $"{result}{person}; ";
            Message = result;
        }
    }
}
</pre>
<p>Для передачи методу данных через строку запроса применяется название параметра:</p>
<pre class="browser">https://localhost:7085/?people=Tom&people=Bob&people=Sam</pre>
<img src="./pics/2.19.png" alt="Передача массивов на страницу Razor Pages в ASP.NET Core и C#" />
<p>Можно явным образом указать индексы элементов:</p>
<pre class="browser">https://localhost:7085/?people[0]=Tom&people[2]=Bob&people[1]=Sam</pre>
<p>Можно просто ограничиться индексами:</p>
<pre class="browser">https://localhost:7085/?[0]=Tom&[2]=Bob&[1]=Sam</pre>

<h3>Передача массивов сложных объектов</h3>
<p>Подобным образом можно принимать массивы сложных объектов. Например, определим следующую модель IndexModel, которая в методе Onget принимает массив объектов некоторого класса Person:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace RazorPagesApp.Pages
{
    public class IndexModel : PageModel
    {
        public string Message { get; private set; } = "";
        public void OnGet(Person[] people)
        {
            string result = "";
            foreach (Person person in people)
            {
                result = $"{result} {person.Name}; ";
            }
            Message = result;
        }
    }
    public record class Person(string Name, int Age);
}
</pre>
<p>И чтобы передать в этот метод данные, нам надо использовать запрос типа</p>
<pre class="browser">https://localhost:7085/?people[0].name=Tom&people[0].age=37&people[1].name=Bob&people[1].age=41</pre>
<p>В этом случае в массиве people будут два объекта Person.</p>
<p>Также можно опустить название параметра и оставить только индексы:</p>
<pre class="browser">https://localhost:7085/?[0].name=Tom&[0].age=37&[1].name=Bob&[1].age=41</pre>

<h3>Передача словарей Dictionary</h3>
<p>Передача в метод словарей аналогично передаче массивов, только у передаваемых элементов необходимо установить ключ. Например, пусть метод OnGet получает в качестве параметра объект Dictionary:</p>
<pre class="brush:c#;">
public void OnGet(Dictionary&lt;string,string&gt; items)
{
    string result = "";
    foreach (var item in items)
    {
        result = $"{result} {item.Key} - {item.Value}; ";
    }
    Message = result;
}
</pre>
<p>Для отправки данных мы можем использовать строку запроса:</p>
<pre class="browser">https://localhost:7085/?items[germany]=berlin&items[france]=paris&items[spain]=madrid</pre>
<p>Каждый отдельный элемент этой строки типа <code>items[germany]=berlin</code> будет представлять элемент словаря, где <code>items</code> - название 
словаря, "germany" - ключ, а "berlin" - значение.</p>

<h3>Объект Request.Query</h3>
<p>Параметры представляют самый простой способ получения данных, но в действительности нам необязательно их использовать. На странице и в ее модели доступен объект <span class="b">Request</span>, 
у которого можно получить как данные строки запроса через свойство <span class="b">Request.Query</span>. Это свойство представляет объект <code>IQueryCollection</code>, где по 
ключу - названию параметра можно получить его значение. Например:</p>
<pre class="brush:c#;">
public void OnGet()
{
    string name = Request.Query["name"];
    string age = Request.Query["age"];
    Message = $"Name: {name}  Age: {age}";
}
</pre>
<p>В данном случае мы можем передать странице данные через запрос типа <span class="ii">https://localhost:7085/Index?name=Tom&age=37</span>.</p>

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


<div class="nav"><p><a href="./2.4.php">Назад</a><a href="./">Содержание</a><a href="./2.6.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в Razor Pages</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/1.1.php">Введение в Razor Pages. Первый проект</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/1.2.php">Добавление RazorPages в пустой проект</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Основы Razor Pages</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.1.php">Определение страниц Razor</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.2.php">Синтаксис Razor</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.3.php">>Модель страницы Razor</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.4.php">Обработка запросов. Контекст страницы Razor</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.5.php">Передача данных на страницу Razor в GET-запросе</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.6.php">POST-запросы и отправка форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.7.php">Привязка свойств страниц и моделей Razor к параметрам запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.8.php">Параметры маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.9.php">Обработчики страницы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.10.php">Возвращение результата</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.11.php">Отправка файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.12.php">Отправка статусных кодов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.13.php">Переадресация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.14.php">Передача зависимостей на страницу</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/2.15.php">ViewBag и ViewData</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Определение пользовательского интерфейса</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/3.1.php">Мастер-страницы layout</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/3.2.php">Файл _ViewImports.cshtml</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/3.3.php">Введение в tag-хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/3.4.php">Создание ссылок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/3.5.php">Работа с формами. Tag-хелперы форм</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Работа с базой данных через Entity Framework</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/4.1.php">Подключение к базе данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/4.2.php">Создание и вывод объектов из базы данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/razorpages/4.3.php">Изменение и удаление в базе данных</a></span></li>
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
<!DOCTYPE html>
<html >
<head>
<title>Razor Pages и C# | POST-запросы и отправка форм</title>
<meta charset="utf-8" />
<meta name="description" content="Передача данных на страницу Razor Pages в POST-запросе в ASP.NET Core и C#, получение данных в методе OnPost">
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
<h2>POST-запросы и отправка форм</h2><div class="date">Последнее обновление: 16.04.2022</div>

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

<p>Кроме GET-запросов для отправки данных приложению также широко применяются POST-запросы. Как правило, такие запросы отправляются с помощью форм на html-странице. 
Но основные принципы передачи данных будут теми же, что и в GET-запросах. Рассмотрим различные сценарии при передаче данных в POST-запросе странице Razor.</p>
<p>Например, у нас есть страница Razor <span class="b">Index.cshtml</span> и код связанной модели IndexModel в файле <span class="b">Index.cshtml.cs</span>:</p>
<img src="./pics/2.13.png" alt="OnGet и OnPost в Razor Page в ASP.NET Core и C#" />
<p>Например, пусть страница <span class="b">Index.cshtml</span> будет отправлять форму и получать из формы некоторое значение. Для этого определим следующую модель <span class="b">IndexModel</span>:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace RazorPagesApp.Pages
{

    [IgnoreAntiforgeryToken]
    public class IndexModel : PageModel
    {
        public string Message { get; private set; } = "";
        public void OnGet()
        {
            Message = "Введите свое имя";
        }
        public void OnPost(string username)
        {
            Message = $"Ваше имя: {username}";
        }
    }
}
</pre>
<p>Здесь определено два метода. В методе OnGet обрабатываются get-запросы, что сводится к установки свойства Message.</p>
<p>В методе <span class="b">OnPost()</span> обрабатываем POST-запросы. Данный метод будет получать извне из отправленной формы некоторую строку через параметр username и с его помощью 
переустанавливает значение свойства Message.</p>
<p>Самый важный момент при обработки отправляемых форм - класс модели Razor для валидации полученных форм использует специальный токен - <span class="b">AntiforgeryToken</span>. Далее 
мы рассмотрим, как его устанавливать. Однако мы можем отключить валидацию формы с помощью этого токена с помощью атрибута <span class="b">[IgnoreAntiforgeryToken]</span>, который применяется 
к классу модели (также можно применять глобально в приложении).</p>
<p>Для отправки формы на странице <span class="b">Index.cshtml</span> определим следующий код:</p>
<pre class="brush:xml;">
@page

@model RazorPagesApp.Pages.IndexModel

&lt;h2&gt;@Model.Message&lt;/h2&gt;
&lt;form method="post" &gt;
    &lt;input type="text" name="username" /&gt;
    &lt;input type="submit" value="Отправить" /&gt;
&lt;/form&gt;
</pre>
<p>Здесь определена форма для ввода условного имени. При получении запроса get приложение просто будет отдавать данную страницу с формой ввода. При получении запроса post класс 
IndexModel получит отправленное значение и изменит значение свойства Message, которое потом выводится на страницу. При этом, чтобы система могла связать параметры запроса 
со значениями формы поля форм (их атрибут name) должны называться также, как и параметры методов OnPost или OnGet. То есть параметр в методе OnPost называется <span class="b">username</span>, 
и поле формы (значение его атрибута name) тоже называется <span class="b">username</span>.</p>
<p>При запуске страница отобразит приглашение к вводу:</p>
<img src="./pics/2.21.png" alt="Передача значений в формы на страницу Razor Pages и C#" />
<p>А при отправке введенного значения отобразится результат:</p>
<img src="./pics/2.22.png" alt="Обработка post-запросов в методе OnPost на страницу Razor Pages в ASP.NET Core и C#" />
<p>Для обработки запроса можно использовать класс, производный от PageModel. Однако страница Razor уже сама по себе представляет модель. И мы можем всю логику обработки и свойства модели определить 
напрямую в странице. Например, изменим страницу <span class="b">Index.cshtml</span>:</p>
<pre class="brush:xml;">
@page

&lt;h2&gt;@Model.Message&lt;/h2&gt;
&lt;form method="post" &gt;
    &lt;input type="text" name="username" /&gt;
    &lt;input type="submit" value="Отправить" /&gt;
&lt;/form&gt;

@functions {
    
    public string Message { get; private set; } = "";
    public void OnGet() =&gt; Message = "Введите свое имя";
        
    public void OnPost(string username) =&gt; Message = $"Ваше имя: {username}";
}
</pre>
<p>Но в этом случае мы можем опять же столкнуться с необходимостью верификации токена AntiForgery-токена. Чтобы решить проблему с этим токеном, мы можем отключить его глобально. 
Для этого изменим файл <span class="b">Program.cs</span>:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc;

var builder = WebApplication.CreateBuilder(args);

// добавляем в приложение сервисы Razor Pages
builder.Services.AddRazorPages(options =&gt;
{
    // отключаем глобально Antiforgery-токен
    options.Conventions.ConfigureFilter(new IgnoreAntiforgeryTokenAttribute());
});

var app = builder.Build();

// добавляем поддержку маршрутизации для Razor Pages
app.MapRazorPages();  

app.Run();
</pre>
<h3>Получение сложных объектов</h3>
<p>Подобным образом мы можем получать и большее количество данных. Например, определим на странице <span class="b">Index.cshtml</span> следующую форму:</p>
<pre class="brush:xml;">
@page

@model RazorPagesApp.Pages.IndexModel

&lt;h2&gt;@Model.Message&lt;/h2&gt;
&lt;form method="post" &gt;
    &lt;p&gt;
        &lt;label&gt;Имя:&lt;/label&gt;&lt;br /&gt;
        &lt;input type="text" name="name" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;label&gt;Возраст:&lt;/label&gt;&lt;br /&gt;
        &lt;input type="number" name="age" /&gt;
    &lt;/p&gt;
    &lt;input type="submit" value="Отправить" /&gt;
&lt;/form&gt;
</pre>
<p>В данном случае пользователь должен ввести имя и возраст.</p>
<p>А в классе модели <span class="b">IndexModel</span> определим следующую логику:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace RazorPagesApp.Pages
{

    [IgnoreAntiforgeryToken]
    public class IndexModel : PageModel
    {
        public string Message { get; private set; } = "";
        public void OnGet()
        {
            Message = "Введите свои данные";
        }
        public void OnPost(string name, int age)
        {
            Message = $"Ваше имя: {name}. Ваш возраст: {age}";
        }
    }
}
</pre>
<img src="./pics/2.23.png" alt="получение сложных объектов в post-запросах в методе OnPost на странице Razor Pages в ASP.NET Core и C#" />
<p>Хотя мы можем получать весь набор отправляемых данных по отдельности, однако также можно все эти значения объединить в более сложные объекты. 
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
<p>Класс Person определяет два свойства: Name и Age. И в модели IndexModel метод OnPost принимает параметр типа Person. При чем поля формы name и age соответствуют
 по названию свойствам класса Person, поэтому вместо одиночных разрозненных значений мы можем получить отправленную форму в виде объекта Person.</p>


<h3>Получение массивов</h3>
<p>Для передачи массивов с помощью формы надо создать набор одноименных полей, которые называются по имени массива. Например, определим следующую модель 
<span class="b">IndexModel</span>:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace RazorPagesApp.Pages
{

    [IgnoreAntiforgeryToken]
    public class IndexModel : PageModel
    {
        public string[] People { get; private set; } = Array.Empty&lt;string&gt;();
       
        public void OnPost(string[] people)
        {
            People = people;
        }
    }
}
</pre>
<p>В данном случае модель в методе OnPost получает массив строк и передает его свойству People.</p>
<p>Также определим на странице <span class="b">Index.cshtml</span> отправки данных и вывода элементов из People следующий код:</p>
<pre class="brush:c#;">
@page

@model RazorPagesApp.Pages.IndexModel

&lt;h2&gt;Ввeдите имена сотрудников&lt;/h2&gt;
&lt;form method="post"&gt;
    &lt;p&gt;&lt;input name="people" /&gt;&lt;/p&gt;
    &lt;p&gt;&lt;input name="people" /&gt;&lt;/p&gt;
    &lt;p&gt;&lt;input name="people" /&gt;&lt;/p&gt;
    &lt;input type="submit" value="Отправить" /&gt;
&lt;/form&gt;
&lt;h3&gt;Список сотрудников&lt;/h3&gt;
&lt;ul&gt;
    @foreach(var person in Model.People)
    {
        &lt;li&gt;@person&lt;/li&gt;  
    }
&lt;/ul&gt;
</pre>
<p>В данном случае на форме, отправляемой пользователю, расположены три поля с именем "people". В итоге при отправке формы будет сформирован массив people из трех элементов, который 
можно получить в модели методе OnPost:</p>
<img src="./pics/2.24.png" alt="Отправка из форм массивов на страницу Razor Pages ASP.NET Core в C#" />
<p>И также у элементов формы можно было бы явным образом указать индексы:</p>
<pre class="brush:xml;">
&lt;form method="post"&gt;
    &lt;p&gt;&lt;input name="people[0]" /&gt;&lt;/p&gt;
    &lt;p&gt;&lt;input name="people[2]" /&gt;&lt;/p&gt;
    &lt;p&gt;&lt;input name="people[1]" /&gt;&lt;/p&gt;
    &lt;input type="submit" value="Send" /&gt;
&lt;/form&gt;
</pre>
<p>Либо можно было бы вовсе ограничиться одними индексами</p>
<pre class="brush:xml;">
&lt;form method="post"&gt;
    &lt;p&gt;&lt;input name="[0]" /&gt;&lt;/p&gt;
    &lt;p&gt;&lt;input name="[2]" /&gt;&lt;/p&gt;
    &lt;p&gt;&lt;input name="[1]" /&gt;&lt;/p&gt;
    &lt;input type="submit" value="Send" /&gt;
&lt;/form&gt;
</pre>

<h3>Передача словарей Dictionary</h3>
<p>Передача словарей в метод контроллера аналогична передаче элементов массивов за тем исключением, что для каждого элемента устанавливается ключ. 
Так, определим следующую страницу <span class="b">Index.cshtml</span>:</p>
<pre class="brush:c#;">
@page

&lt;h2&gt;Ввeдите столицы стран&lt;/h2&gt;
&lt;form method="post"&gt;
    &lt;p&gt;
        Германия: &lt;input type="text" name="items[germany]" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        Франция: &lt;input type="text" name="items[france]" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        Испания: &lt;input type="text" name="items[spain]" /&gt;
    &lt;/p&gt;
    &lt;input type="submit" value="Отправить" /&gt;
&lt;/form&gt;
&lt;h3&gt;Страны и их столицы&lt;/h3&gt;
&lt;ul&gt;
    @foreach(var country in Countries)
    {
        &lt;li&gt;@country.Key - @country.Value&lt;/li&gt;  
    }
&lt;/ul&gt;

@functions{
    Dictionary&lt;string, string&gt; Countries { get; set; } = new();
    public void OnPost(Dictionary&lt;string, string&gt; items)
    {
        Countries = items;
    }
}
</pre>

<img src="./pics/2.25.png" alt="Отправка из форм словарей Dictionary на страницу Razor Pages ASP.NET Core в C#" />
<h3>Отправка массивов сложных объектов</h3>
<p>При отправке массивов сложных объектов на форме также определяется набор полей, где каждое поле привязано к определенному свойству объекта. Например, изменим страницу <span class="b">Index.cshtml</span> следующим образом:</p>
<pre class="brush:xml;">
@page

&lt;h2&gt;Ввeдите данные&lt;/h2&gt;
&lt;form method="post"&gt;
    &lt;p&gt;
        Person1 Name:&lt;br/&gt; 
        &lt;input name="people[0].name" /&gt;&lt;br/&gt;
        Person1 Age:&lt;br/&gt;
        &lt;input name="people[0].age" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        Person2 Name:&lt;br/&gt; 
        &lt;input name="people[1].name" /&gt;&lt;br/&gt;
        Person2 Age:&lt;br/&gt;
        &lt;input name="people[1].age" /&gt;
    &lt;/p&gt;
    &lt;input type="submit" value="Отправить" /&gt;
&lt;/form&gt;
&lt;h3&gt;Список сотрудников&lt;/h3&gt;
&lt;ul&gt;
    @foreach(var person in People)
    {
        &lt;li&gt;@person.Name (@person.Age)&lt;/li&gt;  
    }
&lt;/ul&gt;

@functions{
    Person[] People { get; set; } = { };
    public void OnPost(Person[] people)
    {
        People = people;
    }

    public record class Person(string Name, int Age);
}
</pre>
<p>В данном случае на форму вводятся значения для свойств Name и Age двух объектов Person. После отправке эти объекты уйдут в виде массива people второму методу Index.</p>
<img src="./pics/2.26.png" alt="Отправка из форм массивов сложных объектов на страницу Razor Pages в ASP.NET Core в C#" />
<h3>Получение данных из контекста запроса</h3>
<p>Для получения данных отправленных форм через параметры метода OnPost также на страницах Razor и в их моделях можно использовать свойство <span class="b">Request.Form</span>. Это свойство представляет коллекцию <code>IFormsCollection</code>, 
где каждый элемент имеет ключ и значение. В качестве ключа элемента выступает название поля формы, а в качестве значения - введенные в это поле данные. Например, используем 
<span class="b">Request.Form</span> на странице <span class="b">Index.cshtml</span>:</p>
<pre class="brush:c#;">
@page

&lt;h2&gt;@Message&lt;/h2&gt;
&lt;form method="post" &gt;
    &lt;p&gt;
        &lt;label&gt;Имя:&lt;/label&gt;&lt;br /&gt;
        &lt;input type="text" name="name" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;label&gt;Возраст:&lt;/label&gt;&lt;br /&gt;
        &lt;input type="number" name="age" /&gt;
    &lt;/p&gt;
    &lt;input type="submit" value="Отправить" /&gt;
&lt;/form&gt;

@functions{
    string Message { get; set; } = "";
    public void OnPost()
    {
        string name = Request.Form["name"];
        string age = Request.Form["age"];
        Message = $"Ваше имя: {name}. Ваш возраст: {age}";
    }
}
</pre>

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


<div class="nav"><p><a href="./2.5.php">Назад</a><a href="./">Содержание</a><a href="./2.7.php">Вперед</a></p></div></div>
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
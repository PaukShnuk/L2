<!DOCTYPE html>
<html >
<head>
<title>Razor Pages и C# | Работа с формами. Tag-хелперы форм</title>
<meta charset="utf-8" />
<meta name="description" content="Tag-хелперы форм в Razor Pages в ASP.NET Core и C#, создание форм html и их элементов, asp-antiforgery">
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
<h2>Работа с формами. Tag-хелперы форм</h2><div class="date">Последнее обновление: 19.04.2022</div>

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

<p>Для создания форм можно использовать стандартные элементы html. Однако для упрощения работы с формами ASP.NET Core также предоставляет группу tag-хелперов, 
с помощью которых можно определять формы html и их элементы. Рассмотрим применение подобных хелперов. Допустим, у нас есть страница Razor <span class="b">Index.cshtml</span> и код связанной модели IndexModel в файле <span class="b">Index.cshtml.cs</span>:</p>
<img src="./pics/2.13.png" alt="OnGet и OnPost в Razor Page в ASP.NET Core и C#" />
<h3>FormTagHelper</h3>
<p>Пусть в файле <span class="b">Index.cshtml.cs</span> определен следующий код:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
namespace RazorPagesApp.Pages
{
    public class IndexModel : PageModel
    {
        [BindProperty]
        public Product Product { get; set; } = new("", 0, "");
        public string Message { get; private set; } = "Добавление товара";

        public void OnPost()
        {
            Message = $"Добавлен новый товар: {Product.Name} ({Product.Company})";
        }
    }

    public record class Product(string Name, int Price, string Company);
}
</pre>
<p>Здесь ожидается, что в post-запросе модель IndexModel будет получать данные в виде объекта Product. Для автоматической привязки данных запроса к объекту Person к свойству применяется 
атрибут BindProperty.</p>
<p>После получения объекта в запросе POST переустанавливается значение свойства Message.</p>
<p>Далее в файле <span class="b">Index.cshtml</span>  с помощью tag-хелперов определим форму для отправки данных:</p>
<pre class="brush:xml;">
@page 
@addTagHelper *, Microsoft.AspNetCore.Mvc.TagHelpers
@model RazorPagesApp.Pages.IndexModel

&lt;h2&gt;@Model.Message&lt;/h2&gt;
&lt;form method="post" asp-antiforgery="true"&gt;
    &lt;p&gt;
        &lt;label asp-for="Product.Name"&gt;Название&lt;/label&gt;&lt;br /&gt;
        &lt;input type="text" asp-for="Product.Name" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;label asp-for="Product.Price"&gt;Цена&lt;/label&gt;&lt;br /&gt;
        &lt;input asp-for="Product.Price" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;label asp-for="Product.Company"&gt;Производитель&lt;/label&gt;&lt;br /&gt;
        &lt;input type="text" asp-for="Product.Company" /&gt;
    &lt;/p&gt;
    &lt;input type="submit" value="Отправить" /&gt;
&lt;/form&gt;
</pre>
<p>Тег-хелперы, используемые для создания форм, аналогичны соответствующим элементам html за тем исключением, что они добавляют дополнительную функциональность. 
Так, для создания формы используется класс <span class="b">FormTagHelper</span>, представленный тегом form. Кроме стандартного атрибута <code>method</code> тег form также применяет 
атрибут <span class="b">asp-antiforgery</span>  указывает, будет ли для формы генерироваться antiforgery-токен. Если он имеет значение true, то токен будет генерироваться. Благодаря 
этому для модели IndexModel не нужно применять атрибут <span class="b">[IgnoreAntiforgeryToken]</span>, поскольку по умолчанию для страниц Razor требуется наличие подобного токена</p>
<pre class="brush:c#;">
 //[IgnoreAntiforgeryToken] - атрибут не нужен
public class IndexModel : PageModel
</pre>
<p>Все поля ввода, которые использовались выше на форме, имеют один общий атрибут <span class="b">asp-for</span>, 
который указывает, для какого свойства модели создается элемент. Например:</p>
<pre class="brush:xml;">&lt;input type="text" asp-for="Product.Name" /&gt;</pre>
<p>Здесь атрибут <span class="b">asp-for</span> указывает, что данный элемент будет применяться для ввода значения для свойства <code>Product.Name</code>. Таким образом, 
мы можем привязать поля ввода к определенным свойствам модели.</p>
<img src="./pics/3.15.png" alt="tag-хелперы форм на страницах Razor Pages в ASP.NET Core и C#" />
<p>Класс <span class="b">FormTagHelper</span> может принимать следующие атрибуты:</p>
<ul>
<li><p><span class="b">asp-controller</span>: указывает на контроллер, которому предназначен запрос</p></li>
<li><p><span class="b">asp-action</span>: указывает на действие контроллера</p></li>
<li><p><span class="b">asp-area</span>: указывает на название области, в которой будет вызываться контроллер для обработки формы</p></li>
<li><p><span class="b">asp-antiforgery</span>: если имеет значение true, то для этой формы будет генерироваться antiforgery token</p></li>
<li><p><span class="b">asp-route</span>: указывает на название маршрута</p></li>
<li><p><span class="b">asp-all-route-data</span>: устанавливает набор значений для параметров</p></li>
<li><p><span class="b">asp-route-[название параметра]</span>: определяет значение для определенного параметра</p></li>
<li><p><span class="b">asp-page</span>: указывает на страницу RazorPage, которая будет обрабатывать запрос</p></li>
<li><p><span class="b">asp-page-handler</span>: указывает на обработчик страницы RazorPage, который применяется для обработки запроса</p></li>
<li><p><span class="b">asp-fragment</span>: указывает фрагмент, который добавляется к запрашиваемому адресу после символа #.</p></li>
</ul>
<p>Например, если необходимо сделать запрос на другую страницу, то можно использовать атрибут <span class="b">asp-page</span>:</p>
<pre class="brush:xml;">&lt;form method="post" asp-page="Create"&gt;</pre>
<p>В данном случае запрос идет на возможную страницу Create.cshtml.</p>
<p>С помощью атрибута <span class="b">asp-page-handler</span> можно указать обработчик страницы, который будет обрабатывать запрос:</p>
<pre class="brush:xml;">&lt;form method="post" asp-page="Create" asp-page-handler="Person"&gt;</pre>
<p>В данном случае запрос идет на возможную страницу Create.cshtml и ее обработчику (по сути запрос будет обрабатываться методом OnPostPerson() при наличие такового).</p>
<p>Рассмотрим вкратце ряд основных хелперов, которые могут применяться для создания элементов форм.</p>
<h3>LabelTagHelper</h3>
<p><span class="b">LabelTagHelper</span> использует тег <code>label</code> для создания метки:</p>
<pre class="brush:xml;">
&lt;label asp-for="Name"&gt;&lt;/label&gt;
</pre>
<h3>InputTagHelper</h3>
<p><span class="b">InputTagHelper</span> создает поле ввода:</p>
<pre class="brush:xml;">
&lt;input asp-for="Name" /&gt;
</pre>
<h3>TextAreaTagHelper</h3>
<p><span class="b">TextAreaTagHelper</span> используется для создания многострочного текстового поля textarea. Данный хелпер применяет только атрибут 
<code>asp-for</code>:</p>
<pre class="brush:xml;">
&lt;textarea asp-for="Name"&gt;&lt;/textarea&gt;
</pre>
<h3>SelectTagHelper</h3>
<p><span class="b">SelectTagHelper</span> создает элемент списка <code>&lt;select&gt;</code>. Он имеет специальный атрибут <span class="b">asp-items</span>, 
который указывает на объект <code>IEnumerable&lt;SelectListItem&gt;</code> - набор элементов, используемых для создания списка.</p>
<p>Рассмотрим одну из ситуаций, где может потребоваться подобный хелпер. Пусть в файле <span class="b">Index.cshtml.cs</span> определен следующий код:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.RazorPages;
using Microsoft.AspNetCore.Mvc.Rendering;

namespace RazorPagesApp.Pages
{
    public class IndexModel : PageModel
    {
        // условные данные
        static List&lt;Company&gt; companies { get; } = new()
        {
            new Company(1, "Apple"),
            new Company(2, "Samsung"),
            new Company(3, "Google")
        };
        public SelectList Companies { get; } = new SelectList(companies, "Id", "Name");
        [BindProperty]
        public Product Product { get; set; } = new("", 1000, 0);
        public string Message { get; private set; } = "Добавление товара";

        public void OnPost()
        {
            // получаем производителя товара
            Company? company = companies.FirstOrDefault(c =&gt; c.Id == Product.CompanyId);
            Message = $"Добавлен новый товар: {Product.Name} ({company?.Name})";
        }
    }
    public record class Product(string Name, int Price, int CompanyId);
    public record class Company(int Id, string Name);
}
</pre>
<p>Здесь определены две сущности - Product и Company. Причем у класса Product определено свойство CompanyId, через которое объект Product будет связан с определенным объектом Company.</p>
<p>В классе модели IndexModel определены условные данные - статический список объектов Company, из которого будет выбираться производитель для добавления товара.</p>
<p>Но для отображения списка объектов в tag-хелпере SelectTagHelper нам нужен объект <code>IEnumerable&lt;SelectListItem&gt;</code>. В качестве такового обычно выступает объект класса 
<span class="b">SelectList</span>.</p>
<p>Класс SelectList имеет ряд конструкторов:</p>
<pre class="brush:c#;">
public SelectList (IEnumerable items);
public SelectList (IEnumerable items, object selectedValue);
public SelectList (IEnumerable items, string dataValueField, string dataTextField);
public SelectList (IEnumerable items, string dataValueField, string dataTextField, object selectedValue);
</pre>
<p>Параметры конструктора:</p>
<ul>
<li><p><code>items</code> задает набор элементов для списка</p></li>
<li><p><code>selectedValue</code> устанавливливает выделенное по умолчанию значение</p></li>
<li><p><code>dataValueField</code> устанавливливает свойство объекта, значение которого будет отправляться на сервер</p></li>
<li><p><code>dataTextField</code> устанавливливает свойство объекта, значение которого будет отображаться для данного элемента в списке</p></li>
</ul>
<p>То есть в данном случае свойство</p>
<pre class="brush:c#;">public SelectList Companies { get; } = new SelectList(companies, "Id", "Name");</pre>
<p>Что будет создаваться список из набора companies. В качестве значений, которые будет выбирать пользователь, будут использоваться значения свойства Id. А в качестве текста, который 
будет отобрадаться для элемента, будет применяться текст свойства Name.</p>
<p>На странице <span class="b">Index.cshtml</span> определим форму для ввода данных:</p>
<pre class="brush:xml;">
@page 
@addTagHelper *, Microsoft.AspNetCore.Mvc.TagHelpers
@model RazorPagesApp.Pages.IndexModel

&lt;h2&gt;@Model.Message&lt;/h2&gt;
&lt;form method="post" asp-antiforgery="true"&gt;
    &lt;p&gt;
        &lt;label asp-for="Product.Name"&gt;Название&lt;/label&gt;&lt;br /&gt;
        &lt;input type="text" asp-for="Product.Name" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;label asp-for="Product.Price"&gt;Цена&lt;/label&gt;&lt;br /&gt;
        &lt;input asp-for="Product.Price" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;label asp-for="Product.CompanyId"&gt;Производитель&lt;/label&gt;&lt;br /&gt;
        &lt;select asp-for="Product.CompanyId" asp-items="Model.Companies"&gt;&lt;/select&gt;
    &lt;/p&gt;
    &lt;input type="submit" value="Отправить" /&gt;
&lt;/form&gt;
</pre>
<p>Для создания выпадающего списка здесь применяется следующий tag-хелпер</p>
<pre class="brush:xml;">
&lt;select asp-for="Product.CompanyId" asp-items="Model.Companies"&gt;&lt;/select&gt;
</pre>
<p>Атрибуту <span class="b">asp-items</span> передается объект SelectList, из которого будет создаваться список</p>
<img src="./pics/3.16.png" alt="asp-items и SelectList на страницах Razor Pages и C#" />
<p>При необходимости мы можем указать элемент, который будет отображаться по умолчанию:</p>
<pre class="brush:xml;">
&lt;select asp-for="CompanyId" asp-items="ViewBag.Companies"&gt;
	&lt;option selected="selected" disabled="disabled"&gt;Выберите компанию&lt;/option&gt;
&lt;/select&gt;
</pre>
<h3>Обработка форм и обработчики страниц razor</h3>
<p>Razor Pages также позволяет отправлять форму различным обработчикам одной и той же страницы. Для этого у тега формы можно указать нужный обработчик с помощью параметра 
<span class="b">asp-page-handler</span>. Более того можно указать у отдельных кнопок, на какой обработчик они отправятся данные формы. Например, изменим код IndexModel:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc.RazorPages;

namespace RazorPagesApp.Pages
{
    public class IndexModel : PageModel
    {
        // условные данные
        IEnumerable&lt;Person&gt; people = new List&lt;Person&gt;
       {
            new ("Tom", 37),
            new ("Sam", 28),
            new ("Bob", 41),
            new ("Tim", 25)
        };
        public IEnumerable&lt;Person&gt; DisplayedPeople { get; private set; } = new List&lt;Person&gt;();
        public void OnGet()
        {
            DisplayedPeople = people;
        }
        public void OnPostGreaterThan(int age)
        {
            DisplayedPeople = people.Where(p =&gt; p.Age &gt; age);
        }
        public void OnPostLessThan(int age)
        {
            DisplayedPeople = people.Where(p =&gt; p.Age &lt; age);
        }
    }
    public record class Person(string Name, int Age);
}
</pre>
<p>Обработчик OnPostGreaterThan находит пользователей, у которых возраст больше определенного, а обработчик OnPostLessThan, наоборот, находит пользователей, 
у которых возраст меньше, чем определенный.</p>
<p>Изменим код страницы <span class="b">Index.cshtml</span>:</p>
<pre class="brush:xml;">
@page "{handler?}"

@model PersonModel
@using RazorPagesApp.Models

&lt;h2&gt;Список пользователей&lt;/h2&gt;
&lt;form method="POST"&gt;
    &lt;input type="number" name="age" /&gt;
    &lt;input type="submit" asp-page-handler="GreaterThan" value="Старше" /&gt;
    &lt;input type="submit" asp-page-handler="LessThan" value="Младше" /&gt;
&lt;/form&gt;
&lt;table class="table"&gt;
    &lt;tr&gt;&lt;th&gt;Name&lt;/th&gt;&lt;th&gt;Age&lt;/th&gt;&lt;/tr&gt;
    @foreach(Person person in Model.DisplayedPeople)
    {
        &lt;tr&gt;
            &lt;td&gt;@person.Name&lt;/td&gt;
            &lt;td&gt;@person.Age&lt;/td&gt;
        &lt;/tr&gt;
    }
&lt;/table>
</pre>
<p>На странице определена форма, но в зависимости от того, на какую кнопку мы нажмем, введенное значение будет улетать тому или иному обработчику.</p>
<img src="./pics/3.17.png" alt="POST handlers in Razor Pages in ASP.NET Core и C#" />

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


<div class="nav"><p><a href="./3.4.php">Назад</a><a href="./">Содержание</a><a href="./4.1.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 3.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 3.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
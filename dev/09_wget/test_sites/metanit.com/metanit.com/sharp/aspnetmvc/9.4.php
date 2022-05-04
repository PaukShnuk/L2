<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core MVC и C# | Tag-хелперы валидации и стилизация ошибок</title>
<meta charset="utf-8" />
<meta name="description" content="Tag-хелперы валидации ValidationMessageTagHelper и ValidationSummaryTagHelper в ASP.NET Core MVC и C#, отображение и стилизация сообщений об ошибках">
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
<h2>Tag-хелперы валидации и стилизация ошибок</h2><div class="date">Последнее обновление: 08.04.2022</div>

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

<p>Для определения полей для вывода ошибок валидации применяются специальные хелперы. Рассмотрим их применение на примере следующей модели Person:</p>
<pre class="brush:c#;">
using System.ComponentModel.DataAnnotations;

namespace MvcApp.Models
{
    public class Person
    {
        [Required(ErrorMessage = "Не указано имя")]
        public string? Name { get; set; }


        [Required(ErrorMessage = "Не указан электронный адрес")]
        public string? Email { get; set; }

        [Required(ErrorMessage = "Не указан возраст")]
        [Range(1, 100)]
        public int Age { get; set; }
    }
}
</pre></p>
<h3>ValidationMessageTagHelper</h3>
<p>Для валидации на стороне клиента применяется класс ValidationMessageTagHelper. Данный tag-хелпер определяется с помощью применения 
к элементу <code>&lt;span &gt;</code> атрибута <span class="b">asp-validation-for</span>:</p>
<pre class="brush:xml;">
&lt;span asp-validation-for="имя_свойства_модели"&gt;&lt;/span&gt;
</pre>
<p>Атрибут <code>asp-validation-for</code> в качестве значения принимает название свойства модели, для которого будет выводиться сообщение об ошибке валидации. 
Соответственно для каждого поля ввода мы можем предусмотреть подобный хелпер для вывода ошибок валидации. Например, форма для ввода значений для выше определенной модели Person:</p>
<pre class="brush:xml;">
@model MvcApp.Models.Person
@addTagHelper *, Microsoft.AspNetCore.Mvc.TagHelpers

&lt;form method="post"&gt;
    &lt;div&gt;
        &lt;p&gt;
            &lt;label asp-for="Name"&gt;Name&lt;/label&gt;&lt;br /&gt;
            &lt;input type="text" asp-for="Name" /&gt;
            &lt;span asp-validation-for="Name"  /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;label asp-for="Email"&gt;Email&lt;/label&gt;&lt;br /&gt;
            &lt;input type="text" asp-for="Email" /&gt;
            &lt;span asp-validation-for="Email"  /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;label asp-for="Age"&gt;Age&lt;/label&gt;&lt;br /&gt;
            &lt;input asp-for="Age" /&gt;
            &lt;span asp-validation-for="Age" /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;input type="submit" value="Send"  /&gt;
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/form&gt;

&lt;script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.1.min.js"&gt;&lt;/script&gt;
&lt;script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.min.js"&gt;&lt;/script&gt;
&lt;script src="https://ajax.aspnetcdn.com/ajax/jquery.validation.unobtrusive/3.2.10/jquery.validate.unobtrusive.min.js"&gt;&lt;/script&gt;
</pre>
<p>Например, возьмем tag-хелпер, который применяется для вывода ошибок для свойства Name:</p>
<pre class="brush:xml;">&lt;span asp-validation-for="Name"  /&gt;</pre>
<p>Данный элемент span будет генерировать следующую разметку:</p>
<pre class="brush:xml;">
&lt;span class="field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"&gt;&lt;/span&gt;
</pre>
<h3>ValidationSummaryTagHelper</h3>
<p>Другой tag-хелпера - <span class="b">ValidationSummaryTagHelper</span> применяется для отображения сводки ошибок валидации. Он применяется к элементу <code>&lt;div&gt;</code> 
в виде атрибута <span class="b">asp-validation-summary</span>:</p>
<pre class="brush:xml;">&lt;div asp-validation-summary="ModelOnly"/&gt;</pre>
<p>В качестве значения атрибут <code>asp-validation-summary</code> принимает одно из значений перечисления <span class="b">ValidationSummary</span>:</p>
<ul>
<li><p><span class="b">None</span>: ошибки валидации не отображаются</p></li>
<li><p><span class="b">ModelOnly</span>: отображаются только ошибка валидации уровня модели, ошибки валидации для отдельных свойств не отображаются</p></li>
<li><p><span class="b">All</span>: отображаются все ошибки валидации</p></li>
</ul>
<p>На выходе тег-хелпер будет генерировать следующий код:</p>
<pre class="brush:xml;">
&lt;div class="validation-summary-valid" data-valmsg-summary="true"&gt;
	&lt;ul&gt;
		&lt;li style="display:none"&gt;&lt;/li&gt;
	&lt;/ul&gt;
&lt;/div&gt;
</pre>
<p>При возникновении ошибок в список <code>&lt;ul&gt;</code> добавляются все сообщения об ошибках.</p>
<p>Теперь применим <span class="b">ValidationSummaryTagHelper</span> и для этого для модели Person определим следующее представление:</p>
<pre class="brush:xml;">
@model MvcApp.Models.Person
@addTagHelper *, Microsoft.AspNetCore.Mvc.TagHelpers

&lt;form method="post"&gt;
    &lt;div asp-validation-summary="All"&gt;&lt;/div&gt;
        &lt;p&gt;
            &lt;label asp-for="Name"&gt;Name&lt;/label&gt;&lt;br /&gt;
            &lt;input type="text" asp-for="Name" /&gt;
            &lt;span asp-validation-for="Name"  /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;label asp-for="Email"&gt;Email&lt;/label&gt;&lt;br /&gt;
            &lt;input type="text" asp-for="Email" /&gt;
            &lt;span asp-validation-for="Email"  /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;label asp-for="Age"&gt;Age&lt;/label&gt;&lt;br /&gt;
            &lt;input asp-for="Age" /&gt;
            &lt;span asp-validation-for="Age" /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;input type="submit" value="Send"  /&gt;
        &lt;/p&gt;
&lt;/form&gt;

&lt;script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.1.min.js"&gt;&lt;/script&gt;
&lt;script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.min.js"&gt;&lt;/script&gt;
&lt;script src="https://ajax.aspnetcdn.com/ajax/jquery.validation.unobtrusive/3.2.10/jquery.validate.unobtrusive.min.js"&gt;&lt;/script&gt;
</pre>
<p>И в случае некорректного ввода в верху формы отобразятся ошибки валидации:</p>
<img src="./pics/9.12.png" alt="хелперы валидации ValidationMessageTagHelper и ValidationSummaryTagHelper в ASP.NET Core MVC и C#" />
<p>При подобном определении формы сообщения об ошибках отображаются как поверх формы ввода, так и ряд с соответствующими полями ввода. Может показаться, что в таком дополнительном 
выводе ошибок свойств нет смысла - для этого ведь уже есть вывод ошибок возле каждого поля ввода. Тем не менее это может быть полезным, когда какая-то часть валидации производится на сервере.</p>
<p>Например, в контроллере в методе, который получает данную форму, добавим дополнительную проверку данных:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc;
using MvcApp.Models;  // пространство имен класса Person

namespace MvcApp.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Create() =&gt; View();

        [HttpPost]
        public IActionResult Create(Person person)
        {
            if (person.Name == "admin")
                ModelState.AddModelError("Name", "admin - запрещенное имя.");
            if (ModelState.IsValid)
                return Content($"{person.Name} - {person.Age}");
            return View(person);
        }
    }
}
</pre>
<p>Здесь в post-методе Create, если свойству Name передана строка "admin", то для этого свойства добавляется дополнительная ошибка валидации. То есть с точки зрения атрибутов валидации 
для свойства Name строка "admin" - корректное значение, а форма благополучно отправится методу контроллера. Но благодаря проверке на сервере подобное значение все равно не пройдет валидацию, :</p>
<img src="./pics/9.14.png" alt="валидация свойств модели и вывод ошибок с помощью ValidationSummaryTagHelper в ASP.NET Core MVC и C#" />
<h3>Ошибки уровня модели</h3>
<p>Теперь изменим определение хелпера, чтобы он отображал только ошибки уровня модели:</p>
<pre class="brush:xml;">
@model MvcApp.Models.Person
@addTagHelper *, Microsoft.AspNetCore.Mvc.TagHelpers

&lt;form method="post"&gt;
    &lt;div asp-validation-summary="ModelOnly"&gt;&lt;/div&gt;
        &lt;p&gt;
            &lt;label asp-for="Name"&gt;Name&lt;/label&gt;&lt;br /&gt;
            &lt;input type="text" asp-for="Name" /&gt;
            &lt;span asp-validation-for="Name"  /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;label asp-for="Email"&gt;Email&lt;/label&gt;&lt;br /&gt;
            &lt;input type="text" asp-for="Email" /&gt;
            &lt;span asp-validation-for="Email"  /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;label asp-for="Age"&gt;Age&lt;/label&gt;&lt;br /&gt;
            &lt;input asp-for="Age" /&gt;
            &lt;span asp-validation-for="Age" /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;input type="submit" value="Send"  /&gt;
        &lt;/p&gt;
&lt;/form&gt;

&lt;script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.1.min.js"&gt;&lt;/script&gt;
&lt;script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.min.js"&gt;&lt;/script&gt;
&lt;script src="https://ajax.aspnetcdn.com/ajax/jquery.validation.unobtrusive/3.2.10/jquery.validate.unobtrusive.min.js"&gt;&lt;/script&gt;
</pre>
<p>А в контроллере в методе, который получает данную форму, добавим дополнительную проверку данных:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc;
using MvcApp.Models;  // пространство имен класса Person

namespace MvcApp.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Create() =&gt; View();

        [HttpPost]
        public IActionResult Create(Person person)
        {
            if (person.Name == person.Email)
                ModelState.AddModelError("", "Имя и электронный адрес не должны совпадать.");
            if (ModelState.IsValid)
                return Content($"{person.Name} - {person.Age}");
            return View(person);
        }
    }
}
</pre>
<p>Здесь в post-методе Create, если свойства Name и Email модели Person имеют одинаковые значение, то добавляется ошибка валидации:</p>
<pre class="brush:c#;">ModelState.AddModelError("", "Имя и электронный адрес не должны совпадать.");</pre>
<p>Пустая строка, передаваемая первому параметру метода, указывает, что данная ошибка относится ко всей модели в целом, а не к отдельному свойству. То есть даже 
если пользователь ввел в форму корректные значения для отдельных свойств и форма была успешна отправлена, но при этом значения свойств Name и Email совпадают, то модель в итоге 
не пройдет проверку и возвратиться пользователю.</p>
<img src="./pics/9.13.png" alt="валидация модели и вывод ошибок с помощью ValidationSummaryTagHelper в ASP.NET Core MVC и C#" />

<h3>Стилизация сообщений об ошибках</h3>
<p>Когда происходит валидация, то при отображении ошибок соответствующим полям присваиваются определенные классы css:</p>
<ul>
<li><p>для блока ошибок, который генерируется хелпером <span class="b">ValidationSummaryTagHelper</span>, при наличии ошибок устанавливается класс <span class="b">validation-summary-errors</span>. Если 
ошибок нет, то данный блок не отображается</p></li>
<li><p>для элемента <code>&lt;span&gt;</code>, который отображает ошибку для каждого отдельного поля и который генерируется хелпером <span class="b">ValidationTagHelper</span>, 
при наличии ошибок устанавливается класс <span class="b">field-validation-error</span>. Если 
ошибок нет, то данный элемент имеет класс <span class="b">field-validation-valid</span></p></li>
<li><p>для поля ввода при наличии ошибок устанавливается класс <span class="b">field-validation-error</span>. Если 
ошибок нет, то устанавливается класс <span class="b">valid</span></p></li>
</ul>
<p>Используя эти классы, мы можем настроить отображение сообщений. Например, изменим представление следующим образом:</p>
<pre class="brush:xml;">
@model MvcApp.Models.Person
@addTagHelper *, Microsoft.AspNetCore.Mvc.TagHelpers

&lt;style&gt;
.field-validation-error {
    color: #b94a48;
}
 
input.input-validation-error {
    border: 1px solid #b94a48;
}
input.valid {
    border: 1px solid #16a085;
}

.validation-summary-errors {
    color: #b94a48;
}
&lt;/style&gt;
&lt;form method="post"&gt;
    &lt;div asp-validation-summary="ModelOnly"&gt;&lt;/div&gt;
        &lt;p&gt;
            &lt;label asp-for="Name"&gt;Name&lt;/label&gt;&lt;br /&gt;
            &lt;input type="text" asp-for="Name" /&gt;
            &lt;span asp-validation-for="Name"  /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;label asp-for="Email"&gt;Email&lt;/label&gt;&lt;br /&gt;
            &lt;input type="text" asp-for="Email" /&gt;
            &lt;span asp-validation-for="Email"  /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;label asp-for="Age"&gt;Age&lt;/label&gt;&lt;br /&gt;
            &lt;input asp-for="Age" /&gt;
            &lt;span asp-validation-for="Age" /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;input type="submit" value="Send"  /&gt;
        &lt;/p&gt;
&lt;/form&gt;

&lt;script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.1.min.js"&gt;&lt;/script&gt;
&lt;script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.min.js"&gt;&lt;/script&gt;
&lt;script src="https://ajax.aspnetcdn.com/ajax/jquery.validation.unobtrusive/3.2.10/jquery.validate.unobtrusive.min.js"&gt;&lt;/script&gt;
</pre>
<img src="./pics/9.15.png" alt="Стилизация ошибок валидации в ASP.NET Core MVC и C#" />

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


<div class="nav"><p><a href="./9.3.php">Назад</a><a href="./">Содержание</a><a href="./9.5.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в ASP.NET Core MVC</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/1.1.php">Фреймворк ASP.NET Core MVC</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/1.2.php">Первый проект на ASP.NET Core MVC</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/1.3.php">Добавление MVC в пустой проект</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Контроллеры</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.1.php">Контроллеры и их действия</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.2.php">Контекст контроллера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.3.php">Передача данных в контроллер через строку запроса</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.4.php">Передача данных в контроллер через формы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.5.php">Результаты действий</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.6.php">ContentResult и JsonResult</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.7.php">Переадресация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.8.php">Отправка статусных кодов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.9.php">Отправка файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.10.php">Передача зависимостей в контроллер</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/2.11.php">Переопределение контроллеров</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Представления</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.1.php">Введение в представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.2.php">Движок представлений Razor</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.3.php">Передача данных в представление</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.4.php">Мастер-страницы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.5.php">Файл _ViewImports.cshtml</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.6.php">Частичные представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.7.php">Внедрение зависимостей в представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.8.php">Работа с формами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/3.9.php">Создание движка представлений</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Маршрутизация</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/4.1.php">Добавление маршрутизации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/4.2.php">Определение маршрутов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/4.3.php">Атрибуты маршрутизации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/4.4.php">Области</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Модели</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/5.1.php">Модели в ASP.NET Core MVC</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/5.2.php">Введение в определение и применение моделей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/5.3.php">Привязка модели</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/5.4.php">Управление привязкой</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/5.5.php">Создание привязчика модели</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. HTML-хелперы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.1.php">Создание HTML-хелперов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.2.php">HTML-хелперы элементов форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.3.php">Строго типизированные хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.4.php">Шаблонные хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.5.php">Генерация ссылок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/6.6.php">URL-хелперы</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Tag-хелперы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.1.php">Введение в tag-хелперы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.2.php">AnchorTagHelper. Создание ссылок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.3.php">LinkTagHelper и ScriptTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.4.php">Tag-хелперы форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.5.php">EnvironmentTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.6.php">CacheTagHelper</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.7.php">Создание tag-хелперов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.8.php">Управление выводом tag-хелпера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.9.php">Контекст хелпера и получение зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.10.php">Атрибут HtmlTargetElement</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/7.11.php">Tag-хелперы и сложные объекты и коллекции</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 8. View Component</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/8.1.php">Определение компонента представлений</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/8.2.php">Передача данных в View Component</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/8.3.php">Генерация контента в View Component</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/8.4.php">ViewComponentResult и представления</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/8.5.php">ViewComponentContext</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 9. Метаданные и валидация модели</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.1.php">Валидация модели на стороне сервера</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.2.php">Валидация на стороне клиента</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.3.php">Атрибуты валидации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.4.php">Tag-хелперы валидации и стилизация ошибок</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.5.php">Создание атрибута валидации. Самовалидация модели</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/9.6.php">Аннотации данных</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 10. Фильтры</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.1.php">Введение в фильтры</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.2.php">Область действия фильтров</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.3.php">Передача параметров в фильтры и установка зависимостей</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.4.php">Фильтры ресурсов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.5.php">Фильтры действий</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.6.php">Фильтры результатов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/10.7.php">Фильтры исключений</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 11. Работа с данными в Entity Framework</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.1.php">Подключение Entity Framework Core</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.2.php">Добавление и вывод данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.3.php">Редактирование и удаление данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.4.php">Сортировка</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.5.php">Создание tag-хелпера сортировки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.6.php">Фильтрация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.7.php">Постраничная навигация</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.8.php">Tag-хелпер для постраничной навигации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.9.php">Объединение сортировки, фильтрации и пагинации</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/aspnetmvc/11.10.php">Tag-хелпер пагинации с сортировкой и фильтрацией</a></span></li>
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
	
	$("li:contains('Глава 9.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 9.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
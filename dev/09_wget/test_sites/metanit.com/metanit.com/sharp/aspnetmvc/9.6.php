<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core MVC и C# | Аннотации данных</title>
<meta charset="utf-8" />
<meta name="description" content="Аннотации данных в ASP.NET Core MVC и C#, использование атрибутов Display, DataType и UIHint">
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
<h2>Аннотации данных</h2><div class="date">Последнее обновление: 08.04.2022</div>

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

<p>Кроме атрибутов валидации модели также могут иметь дополнительные атрибуты, которые называются аннотации данных и которые располагаются в пространстве имен 
<code>System.ComponentModel.DataAnnotations</code>. Эти атрибуты определяют различные правила для отображения свойств модели.</p>
<h3>Атрибут Display</h3>
<p>Атрибут <span class="b">Display</span> задает параметры отображения для свойства. Например, пусть есть следующая модель Person:</p>
<pre class="brush:c#;">
public class Person
{
    public string? Name { get; set; }
    public string? Email { get; set; }
    public string? HomePage { get; set; }
    public string? Password { get; set; }
    public int Age { get; set; }
}
</pre>
<p>Допустим, в представлении есть форма с использованием tag-хелперов для создания объекта данной модели Person:</p>
<pre class="brush:xml;">
@model MvcApp.Models.Person
@addTagHelper *, Microsoft.AspNetCore.Mvc.TagHelpers

&lt;form method="post"&gt;
    &lt;p&gt;
            &lt;label asp-for="Name"&gt;&lt;/label&gt;&lt;br /&gt;
            &lt;input type="text" asp-for="Name" /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;label asp-for="Email"&gt;&lt;/label&gt;&lt;br /&gt;
            &lt;input asp-for="Email" /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;label asp-for="HomePage"&gt;&lt;/label&gt;&lt;br /&gt;
            &lt;input asp-for="HomePage" /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;label asp-for="Password"&gt;&lt;/label&gt;&lt;br /&gt;
            &lt;input asp-for="Password" /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;label asp-for="Age"&gt;&lt;/label&gt;&lt;br /&gt;
            &lt;input asp-for="Age" /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;input type="submit" value="Save" /&gt;
        &lt;/p&gt;
&lt;/form&gt;
</pre>
<p>Если мы запустим приложение, то мы можем столкнуться с проблемой:</p>
<img src="./pics/9.18.png" alt="Аннотации данные в ASP.NET Core MVC и C#" />
<p>Хотя значения свойств все выводятся правильно, но заголовки у свойств точно такие же, как и названия свойств, что не очень удобно. 
Ведь мы могли назвать свойства как угодно. К тому же мы не хотим, чтобы названия на русскоязычном сайте были на английском языке.</p>
<p>В качестве решения, конечно, можно явным образом указать у элементов Label текст. Но если таких форм с меткой для определенного свойства довольно много, и мы хотим, чтобы все метки 
для одного свойства имели определенный текст, то это может затруднить возможно их изменение. Лучше, конечно, один раз задать текст для всех меток для определенного свойства.</p>
<p>И в этом случае мы можем задать с помощью атрибута <span class="b">Display</span> отображаемую метку для свойства:</p>
<pre class="brush:c#;">
using System.ComponentModel.DataAnnotations;

namespace MvcApp.Models
{
    public class Person
    {
        [Display(Name="Имя и фамилия")]
        public string? Name { get; set; }
        [Display(Name = "Электронная почта")]
        public string? Email { get; set; }
        [Display(Name = "Домашняя страница")]
        public string? HomePage { get; set; }
        [Display(Name = "Пароль")]
        public string? Password { get; set; }
        [Display(Name = "Возраст")]
        public int Age { get; set; }
    }
}
</pre>
<p>Теперь если мы запустим приложение, то вместо названий свойств мы увидим нужные названия:</p>
<img src="./pics/9.19.png" alt="Атрибут Display в ASP.NET Core MVC и C#" />
<p>Для каждого поля ввода указывается метка типа <code>&lt;label asp-for="Name"&gt;&lt;/label&gt;</code>. Текст эта метка будет брать из атрибута Display 
(если он указан) для этого свойства. И если у нас в приложении много различных мест, где используется поле для свойства Name модели Person, то, если возникнет необходимость изменить отображаемую метку, 
не надо будет менять во всех местах элемент label для поля ввода. Достаточно будет изменить атрибут Display у свойства Name. И изменения произойдут глобально.</p>
<h3>Атрибут ScaffoldColumn</h3>
<p>Атрибут <span class="b">ScaffoldColumn</span> позволяет скрыть отображение свойства при использовании хелперов <code>Html.DisplayForModel()</code> и 
<code>Html.EditorForModel()</code>:</p>
<pre class="brush:c#;">
[ScaffoldColumn(false)]
public string? Password { get; set; }
</pre>
<h3>Атрибут DataType</h3>
<p>Атрибут <span class="b">DataType</span> позволяет предоставлять среде выполнения информацию об использовании свойства. Так, в классе Person имеется 
свойство Password, и с помощью атрибута мы указываем системе, что это свойство предназначено для хранения пароля:</p>
<pre class="brush:c#;">
[DataType(DataType.Password)]
public string? Password { get; set; }
</pre>
<p>Для подобного свойства с атрибутом DataType.Password хелперы создают элемент ввода, у которого атрибут type имеет значение "password". Тогда в браузере вы 
при вводе данных вы не увидите вводимые символы, а вместо них будут выводиться точки.</p>
<img src="./pics/9.20.png" alt="Атрибут DataType в ASP.NET Core MVC и C#" />
<p>Перечисление DataType может принимать несколько различных значений:</p>
<ul>
<li><p><span class="b">CreditCard</span>: отображает номер кредитной карты</p></li>
<li><p><span class="b">Currency</span>: отображает текст в виде валюты</p></li>
<li><p><span class="b">Date</span>: отображает только дату, без времени</p></li>
<li><p><span class="b">DateTime</span>: отображает дату и время</p></li>
<li><p><span class="b">Time</span>: отображает только время</p></li>
<li><p><span class="b">Duration</span>: отображает число - некоторую продолжительность</p></li>
<li><p><span class="b">EmailAddress</span>: отображает  электронный адрес</p></li>
<li><p><span class="b">Password</span>: отображает символы с использованием маски</p></li>
<li><p><span class="b">PhoneNumber</span>: отображает номер телефона</p></li>
<li><p><span class="b">PostalCode</span>: отображает почтовый индекс</p></li>
<li><p><span class="b">ImageUrl</span>: представляет путь к изображению</p></li>
<li><p><span class="b">Url</span>: отображает строку Url</p></li>
<li><p><span class="b">MultilineText</span>: отображает многострочный текст (элемент textarea)</p></li>
<li><p><span class="b">Text</span>: отображает однострочный текст</p></li>
</ul>
<h3>Атрибут UIHint</h3>
<p>Данный атрибут указывает, какой будет использоваться шаблон отображения при создании разметки html для данного свойства. Шаблон управляет, как свойство будет рендерится на странице.</p>
<p>Имеются следующие встроенные шаблоны:</p>
<ul>
	<li><p><span class="b">Boolean</span></p>
	<p>Хелперы редактирования создают флажок (checkbox) для булевых значений. 
	Для значений типа bool? (nullable) создается элемент select с параметрами True, False и Not Set</p>
	<p>Хелперы отображения генерируют те же элементы html, что и хелперы редактирования, только с атрибутом <code>disabled</code></p>
	</li>
	<li><p><span class="b">Collection</span></p>
	<p>Используется соответствующий шаблон для рендеринга каждого элемента коллекции. Причем элементы могут быть разных типов.</p>
	</li>
	<li><p><span class="b">Decimal</span></p>
	<p>Хелперы редактирования создают однострочное текстовое поле - элемент input</p>
	</li>
	<li><p><span class="b">EmailAddress</span></p>
	<p>Хелперы редактирования создают однострочное текстовое поле.</p>
	<p>Хелперы отображения генерируют элемент ссылка, где атрибут <code>href</code> имеет значение <code>mailto:url</code></p>
	</li>
	<li><p><span class="b">HiddenInput</span></p>
	<p>Создается скрытое поле - элемент hidden input</p>
	</li>
	<li><p><span class="b">Html</span></p>
	<p>Хелперы редактирования создают однострочное текстовое поле.</p>
	<p>Хелперы отображения просто показывают текст</p>
	</li>
	<li><p><span class="b">MultilineText</span></p>
	<p>Хелперы редактирования создают многострочное текстовое поле (элемент textarea)</p>
	</li>
	<li><p><span class="b">Object</span></p>
	<p>Хелперы изучают свойства объекта и выбирают наиболее подходящие для него шаблоны.</p>
	</li>
	<li><p><span class="b">Password</span></p>
	<p>Хелперы редактирования создают текстовое поле для ввода символов с использованием маски</p>
	<p>Хелперы отображения показывают пароль как есть, без использования маски</p>
	</li>
	<li><p><span class="b">String</span></p>
	<p>Хелперы редактирования создают однострочное текстовое поле</p>
	</li>
	<li><p><span class="b">Url</span></p>
	<p>Хелперы редактирования создают текстовое поле</p>
	<p>Хелперы отображения создают элемент ссылки для данного Url</p>
	</li>
</ul>
<p>Например, используем последний шаблон Url:</p>
<pre class="brush:c#;">
using System.ComponentModel.DataAnnotations;

namespace MvcApp.Models
{
    public class Person
    {
        [Display(Name="Имя и фамилия")]
        public string? Name { get; set; }
        [Display(Name = "Электронная почта")]
        public string? Email { get; set; }

        [Display(Name = "Домашняя страница")]
        [UIHint("Url")]
        public string? HomePage { get; set; }

        [Display(Name = "Пароль")]
        public string? Password { get; set; }
        [Display(Name = "Возраст")]
        public int Age { get; set; }
    }
}
</pre>
<p>В методе Index сформируем объект Person и передадим его в представление:</p>
<pre class="brush:c#;">
public class HomeController : Controller
{
    public IActionResult Index()
    {
        Person person = new Person
        {
            Name = "Элронд Смит",
            Age = 58,
            HomePage = "https://www.microsoft.com/",
            Email = "elrond.smith@gmail.com",
            Password = "qwerty"
        };
        return View(person);
    }
}
</pre>
<p>И затем выведем все значения объекта в представлении с помощью хелпера <span class="b">Html.DisplayForModel()</span>:</p>
<pre class="brush:c#;">
@* пространство имен модели Person *@
@model MvcApp.Models.Person

@Html.DisplayForModel()
</pre>
<p>Тогда мы получим следующий результат:</p>
<img src="./pics/9.21.png" alt="Атрибут UIHint в ASP.NET Core MVC и C#" />
<h3>DisplayFormat</h3>
<p>Атрибут <span class="b">DisplayFormat</span> позволяет задать формат отображения свойства. Например, пусть у нас будет в модели свойство по типу DateTime:</p>
<pre class="brush:c#;">
[Display(Name = "Дата рождения")]
[DisplayFormat(DataFormatString = "{0:dd.MM.yyyy}", ApplyFormatInEditMode = true)]
public DateTime DateOfBirth { get; set; }
</pre>
<p>Атрибут DisplayFormat настраивает формат с помощью ряда свойств. Так, свойство <code>DataFormatString</code> указывает на сам формат. Например, в данном случае 
мы прописали в формате вывод дня, месяца и года даты рождения.</p>
<p>Свойство <code>ApplyFormatInEditMode</code> позволяет применять форматирование к свойству даже в режиме редактирования.</p>
<p>Например, для объекта</p>
<pre class="brush:c#;">
Person person = new Person
{
	Name = "Элронд Смит",
	Age = 41,
	HomePage = "https://www.microsoft.com",
	Email = "elrond.smith@gmail.com",
	Password = "qwerty",
	DateOfBirth = new DateTime(1980, 3, 2)
};
</pre>
<p>Получим следующий вывод</p>
<img src="./pics/9.22.png" alt="Атрибут DisplayFormat в ASP.NET Core MVC и C#" />

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


<div class="nav"><p><a href="./9.5.php">Назад</a><a href="./">Содержание</a><a href="./10.1.php">Вперед</a></p></div></div>
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
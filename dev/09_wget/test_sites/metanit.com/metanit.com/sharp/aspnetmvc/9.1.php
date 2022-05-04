<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core MVC и C# | Валидация модели на стороне сервера</title>
<meta charset="utf-8" />
<meta name="description" content="Основы валидации модели в ASP.NET Core MVC и C#, скрипты и атрибуты валидации, свойство ModelState.IsValid, валидация на стороне сервера">
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
<h1>Метаданные и валидация модели</h1><h2>Валидация модели на стороне сервера</h2><div class="date">Последнее обновление: 07.04.2022</div>

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

<p>Важную роль в ASP.NET Core MVC играет валидация входных данных. Валидация позволяет проверить входные данные на наличие неправильных, корректных значений и должным 
образом обработать эти значения. Валидация модели в ASP.NET Core MVC базируется на общем механизме валидации, который имеется в .NET, однако ASP.NET Core MVC добавляет 
некоторую дополнительную инфраструктуру, которая облегчает процесс валидации.</p>
<p>Для рассмотрения валидации возьмем самый простейший проект ASP.NET Core по типу по типу <span class="b">ASP.NET Core Empty</span>.</p>
<p>Вначале добавим в проект новую папку <span class="b">Models</span> для моделей и определим  
в ней одну единственную модель - класс Person:</p>
<pre class="brush:c#;">
using System.ComponentModel.DataAnnotations;

namespace MvcApp.Models
{
    public class Person
    {
        [Required]
        public string? Name { get; set; }
        [Required]
        public int Age { get; set; }
    }
}
</pre>
<p>Здесь каждое свойство модели помечено атрибутом <span class="b">Required</span>, который находится в пространстве имен <span class="b">System.ComponentModel.DataAnnotations</span>. Данный атрибут указывает, 
что этим свойствам необходимо обязательно передать некоторые значения. Если же им не передать значения, то свойства будут невалидны, некорректны и не пройдут валидацию.</p>
<p>Затем определим в проекте папку <span class="b">Controllers</span> для контроллеров приложения и в нее добавим контроллер <span class="b">HomeController</span>. В контроллере HomeController действие Create, через которое мы будем добавлять на сервер объект модели Person:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc;
using MvcApp.Models;  // пространство имен класса Person

namespace MvcApp.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Create() =&gt; View();

        [HttpPost]
        public string Create(Person person)
        {
            if (ModelState.IsValid)
                return $"{person.Name} - {person.Age}";
            return "Данные не прошли валидацию";
        }
    }
}
</pre>
<p>Первый метод Create будет обрабатывать Get-запросы и будет отдавать пользователю представление с формой для добавления данных.</p>
<p>Post-метод Create получает введенные данные в виде модели Person и проверяет их корректность.</p>
<p>Валидация на стороне сервера, то есть в контроллере, осуществляется посредством помощью проверки свойства <span class="b">ModelState.IsValid</span>. 
Объект ModelState сохраняет все значения, которые пользователь ввел для свойств модели, а также все ошибки, связанные с каждым свойством и с моделью в 
целом. Если в объекте ModelState имеются какие-нибудь ошибки, то свойство ModelState.IsValid возвратит <span class="b">false</span>.</p>
<p>И в данном случае, если данные для модели были введены правильно, то данные возвращаеются в виде строки и далее будут выведены в браузере. Если же были введены некорректные данные, 
то возвращаем строку "Данные не прошли валидацию".</p>
<p>Теперь для метода Create в проекте в папке <span class="b">Home/Create</span> определим представление <span class="b">Create.cshtml</span>, которое будет содержать форму для ввода данных:</p>
<pre class="brush:xml;">
&lt;form method="post"&gt;
    &lt;div&gt;
        &lt;p&gt;
            &lt;label for="name"&gt;Name&lt;/label&gt;&lt;br /&gt;
            &lt;input type="text" id="name" name="name" /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;label for="age"&gt;Age&lt;/label&gt;&lt;br /&gt;
            &lt;input id="age" name="age" /&gt;
        &lt;/p&gt;
        &lt;p&gt;
            &lt;input type="submit" value="Send"  /&gt;
        &lt;/p&gt;
    &lt;/div&gt;
&lt;/form&gt;
</pre>
<p>Здесь определена простейшая форма html с полями для ввода данных для свойств модели Person. И по нажатию на кнопку Send эти введенные данные 
отправятся post-методу Create контроллера HomeController.</p>
<p>В итоге весь проект будет выглядеть следующим образом:</p>
<img src="./pics/9.1.png" alt="Основы валидации в ASP.NET Core MVC и C#" />
<p>Теперь запустим приложение и обратимся к методу Create. И ничего не вводя в поля ввода, нажмем на кнопку отправки:</p>
<img src="./pics/9.2.png" alt="валидация на стороне сервера и ModelState.IsValid в ASP.NET Core MVC и C#" />
<p>Поскольку к свойствам модели Person применяется атрибут <span class="b">Required</span>, который требует обязательного наличия данных, то при отсутствии значений свойство 
<span class="b">ModelState.IsValid</span> будет иметь значение false. Это будет означать, что данные не прошли валидацию, что они некорректны.</p>
<p>Однако, если мы введем какие-либо данные, тогда они пройдут валидацию, и мы увидим введенные данные:</p>
<img src="./pics/9.3.png" alt="проверка данных и ModelState.IsValid в ASP.NET Core MVC и C#" />

<h3>Получение данных из ModelState</h3>
<p>Свойство <span class="b">ModelState</span> представляет объект <span class="b">ModelStateDictionary</span>, из которого мы можем получить различную информацию о состоянии модели, 
в частности, данные об ошибках. <span class="b">ModelStateDictionary</span> представляет своего рода словарь, где ключами служат строки - названия свойств, а значениями - объекты 
<span class="b">ModelStateEntry</span>, которые содержат детальную информацию о состоянии свойства. Например, мы можем пройтись по всем элементам в ModelState как в обычном словаре с 
помощью цикла foreach:</p>
<pre class="brush:c#;">
foreach(var item in ModelState)
{
    // item.Key  - название свойства
    // item.Value - объект ModelStateEntry
}
</pre>
<p>Надо понимать, что даже если модель проходит валидацию, и никаких ошибок нет, то ModelState все равно будет содержать в этом словаре соответствующие элементы. Чтобы узнать, прошло ли свойство 
валидацию или нет, у объекта ModelStateEntry можно использовать свойство <span class="b">ValidationState</span>, которое представляет перечисление <span class="b">ModelValidationState</span>. Данное 
перечисление может принимать следующие значения:</p>
<ul>
<li><p><span class="b">Valid</span>: значение корректно</p></li>
<li><p><span class="b">Invalid</span>: значение некорректно</p></li>
</ul>
<p>Если мы хотим непосредственно получить информацию об ошибках, то нам надо обратиться к свойству <span class="b">Errors</span> объекта ModelStateEntry. Это свойство представляет 
объект <span class="b">ModelErrorCollection</span> и хранит коллекцию ошибок, связанных с данным элементом.</p>
<pre class="brush:c#;">
foreach(var item in ModelState)
{
    // пробегаемся по всем ошибкам
    foreach (var error in item.Value.Errors)
    {
    }
}
</pre>
<p>Каждый элемент из коллекции <span class="b">ModelErrorCollection</span> представляет объект <span class="b">ModelError</span>. А его свойство <span class="b">ErrorMessage</span> хранит 
собственно сообщение об ошибке.</p>
<p>Например, получим по валидации объекта Person детальную информацию. Для этого изменим код контроллера HomeController следующим образом:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc;
using MvcApp.Models;  // пространство имен класса Person
using Microsoft.AspNetCore.Mvc.ModelBinding;  // пространство имен перечисления ModelValidationState

namespace MvcApp.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Create() =&gt; View();

        [HttpPost]
        public string Create(Person person)
        {
            if (ModelState.IsValid)
                return $"{person.Name} - {person.Age}";

            string errorMessages = "";
            // проходим по всем элементам в ModelState
            foreach(var item in ModelState)
            {
                // если для определенного элемента имеются ошибки
                if (item.Value.ValidationState == ModelValidationState.Invalid)
                {
                    errorMessages = $"{errorMessages}\nОшибки для свойства {item.Key}:\n";
                    // пробегаемся по всем ошибкам
                    foreach (var error in item.Value.Errors)
                    {
                        errorMessages = $"{errorMessages}{error.ErrorMessage}\n";
                    }
                }
            }
            return errorMessages;
        }
    }
}
</pre>
<p>И в данном случае post-метод Create возвращает все сообщения об ошибках для тех свойств, которые имеют некорректные значения:</p>
<img src="./pics/9.4.png" alt="получение данных их ModelState и валидация в ASP.NET Core MVC и C#" />

<p>Также по названию свойства мы можем обращаться к соответствующей записи в ModelState:</p>
<pre class="brush:c#;">
var errorCounts = ModelState["Name"].Errors.Count;
var state = ModelState["Name"].ValidationState;
</pre>
<h3>Изменение состояния модели</h3>
<p>При необходимости мы сами можем валидировать значения и добавлять в ModelState информацию об ошибках. Для этого применяется метод <code>ModelState.AddModelError</code>. 
Одна из его версий:</p>
<pre class="brush:c#;">ModelStateDictionary.AddModelError(key, errorMessage);</pre>
<p>Первый параметр метода представляет ключ добавляемого в словарь элемента, а второй элемент - сообщение об ошибке</p>
<p>Например, дополнительно проверим полученные значения:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc;
using MvcApp.Models;  // пространство имен класса Person
using Microsoft.AspNetCore.Mvc.ModelBinding;

namespace MvcApp.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Create() =&gt; View();

        [HttpPost]
        public string Create(Person person)
        {
            if (person.Age &gt; 110 || person.Age &lt; 0)
            {
                ModelState.AddModelError("Age", "Возраст должен находиться в диапазоне от 0 до 110");
            }
            if (person.Name?.Length &lt; 3)
            {
                ModelState.AddModelError("Name", "Недопустимая длина строки. Имя должно иметь больше 2 символов");
            }

            if (ModelState.IsValid)
                return $"{person.Name} - {person.Age}";

            string errorMessages = "";
            // проходим по всем элементам в ModelState
            foreach(var item in ModelState)
            {
                // если для определенного элемента имеются ошибки
                if (item.Value.ValidationState == ModelValidationState.Invalid)
                {
                    errorMessages = $"{errorMessages}\nОшибки для свойства {item.Key}:\n";
                    // пробегаемся по всем ошибкам
                    foreach (var error in item.Value.Errors)
                    {
                        errorMessages = $"{errorMessages}{error.ErrorMessage}\n";
                    }
                }
            }
            return errorMessages;
        }
    }
}
</pre>
<p>В данном случае метод <code>ModelState.AddModelError</code> добавляет в ModelState ошибку, если значение свойства Age вне диапазона от 0 до 110 и если длина строки Name меньше 3 символов:</p>
<img src="./pics/9.5.png" alt="ModelState.AddModelError в ASP.NET Core MVC и C#" />

<p>Кроме ошибок для конкретного свойства мы можем указывать ошибки на уровне модели. Выше мы видели, что у нас одно свойство имеет некорректное значение. Ошибки же на уровне модели связывают несколько свойств. Например,</p>
<pre class="brush:c#;">
[HttpPost]
public string Create(Person person)
{
    if (person.Name == "admin" && person.Age == 25)
    {
        // добавляем ошибку уровня модели
        ModelState.AddModelError("", "Некорректные данные");
    }

    if (ModelState.IsValid) return $"{person.Name} - {person.Age}";

    string errorMessages = "";
    foreach(var item in ModelState)
    {
        foreach (var error in item.Value.Errors)
            errorMessages = $"{errorMessages}{error.ErrorMessage}\n";
    }
    return errorMessages;
}
</pre>
<p>В данном случае мы не хотим, чтобы имя было равно "admin" и одновременно возраст не был равен 25. И при их совпадении устанавливаем ошибку для всей модели. В качестве ключа для этой 
ошибки применяется пустая строка.</p>
<h3>Количество ошибок</h3>
<p>Фреймворк MVC валидирует свойства объекта, пока количество ошибок не достигнет предельного максимального количества (по умолчанию это 200 ошибок). 
Но мы можем настроить это поведение, определив нужное количество ошибок при подключении сервисов MVC в файле <span class="b">Program.cs</span>:</p>
<pre class="brush:c#;">
builder.Services.AddControllersWithViews(options =&gt; options.MaxModelValidationErrors = 20);
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


<div class="nav"><p><a href="./8.5.php">Назад</a><a href="./">Содержание</a><a href="./9.2.php">Вперед</a></p></div></div>
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
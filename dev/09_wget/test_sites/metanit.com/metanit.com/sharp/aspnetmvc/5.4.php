<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core MVC и C# | Управление привязкой</title>
<meta charset="utf-8" />
<meta name="description" content="Управление привязкой модели в ASP.NET Core MVC и C#, использование атрибутов BindRequired, BindNever и BindingBehavior, настройка источника значений для контроллера, атрибуты FromHeader, FromQuery, FromRoute, FromForm, FromBody">
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
<h2>Управление привязкой</h2><div class="date">Последнее обновление: 28.03.2022</div>

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

<p>Фреймворк MVC предоставляет ряд атрибутов, с помощью которых мы можем изменить стандартный механизм привязки.</p>
<h3>BindRequired и BindNever</h3>
<p>Атрибут <span class="b">BindRequired</span> требует обязательного наличия значения для свойства модели.</p>
<p>Атрибут <span class="b">BindNever</span> указывает, что свойство модели надо исключить из механизма привязки.</p>
<p>Пусть у нас есть модель User:</p>
<pre class="brush:c#;">
public class User
{
    public int Id { get; set; }
    public string Name { get; set; } = "";
    public int Age { get; set; }
    public bool HasRight { get; set; }
}
</pre>
<p>И пусть у нас есть метод, который в качестве параметра принимает объект этой модели:</p>
<pre class="brush:c#;">
public string AddUser(User user)
{
    return $"Id: {user.Id}  Name: {user.Name}  Age: {user.Age}  HasRight: {user.HasRight}";
}
</pre>
<p>В данном случае не столь важно, отправляются данные через строку запроса или форму. Здесь важен механизм привязки. Так, мы можем 
обратиться к этому методу со следующим запросом:</p>
<pre class="browser">https://localhost:7288/Home/AddUser?HasRight=true</pre>
<p>И мы получим следующий вывод:</p>
<img src="./pics/5.8.png" alt="Атрибут BindRequired в ASP.NET Core MVC и C#" />
<p>То есть это вполне валидный запрос, при обработке которого создается объект User. Для тех свойств, для которых не переданы значения, устанавливаются значения по умолчанию, 
например, для строковых свойств - пустые строки, для числовых свойств - число 0. Но вряд ли подобный объект User можно считать удовлетворительным, 
поскольку, у него должно быть установлено, как минимум, имя - свойство Name. 
То есть имя выступает в качестве обязательного критерия, и чтобы это указать, используем атрибут <span class="b">BindRequired</span>.</p>
<p>А, к примеру, свойство HasRight не должно устанавливаться напрямую. Поэтому для него можно применить атрибут <span class="b">BindNever</span>:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc.ModelBinding;

public class User
{
    public int Id { get; set; }
    
	[BindRequired]
    public string Name { get; set; } = "";
    
	public int Age { get; set; }
	[BindNever]
    public bool HasRight { get; set; }
}
</pre>
<p>Далее изменим метод, который получает объект User:</p>
<pre class="brush:c#;">
public string AddUser(User user)
{
    if (ModelState.IsValid)
    {
        return $"Id: {user.Id}  Name: {user.Name}  Age: {user.Age}  HasRight: {user.HasRight}";
    }
    string errors = $"Количество ошибок: {ModelState.ErrorCount}. Ошибки в свойствах: ";
    foreach(var prop in ModelState.Keys)
    {
        errors = $"{errors}{prop}; ";
    }
    return errors;
}
</pre>
<p>Если для свойства с атрибутом BindRequired не будет передано значение, то в объект <span class="b">ModelState</span>, который представляет словарь, будет помещена информация об ошибках, 
а свойство <code>ModelState.IsValid</code> возвратит false. И в данном случае, проверяя значение <code>ModelState.IsValid</code>, мы можем проверить корректность 
создания объекта User. При этом все ключи в словаре ModelState будут представлять свойства, в которых произошли ошибки.</p>
<p>Теперь нам обязательно надо будет указать значение для свойства Name, а свойство HasRight будет исключено из привязки:</p>
<img src="./pics/5.9.png" alt="BindNever в ASP.NET Core MVC и C#" />
<p>Если же для свойства Name не передать значение, то словарь ModelState будет содержать информацию об ошибке для этого свойства:</p>
<img src="./pics/5.10.png" alt="BindRequired и привязка модели в ASP.NET Core MVC и C#" />
<p>Кроме того, мы можем применять атрибут <span class="b">BindingBehavior</span>, который устанавливает поведение привязки с помощью одно из значений 
одноименного перечисления <span class="b">BindingBehavior</span>:</p>
<ul>
<li><p><code>Required</code>: аналогично примению атрибута BindRequired</p></li>
<li><p><code>Never</code>: аналогично примению атрибута BindNever</p></li>
<li><p><code>Optional</code>: действие по умолчанию, мы можем передавать значение, а можем и не передавать, тогда будут применяться значения по умолчанию</p></li>
</ul>
<p>Например, мы могли бы изменить модель User так:</p>
<pre class="brush:c#;">
public class User
{
    public int Id { get; set; }
    [BindingBehavior(BindingBehavior.Required)]
    public string Name { get; set; } = "";
    [BindingBehavior(BindingBehavior.Optional)]
    public int Age { get; set; }
    [BindingBehavior(BindingBehavior.Never)]
    public bool HasRight { get; set; }
}
</pre>
<h3>Атрибут Bind</h3>
<p>Атрибут Bind позволяет установить выборочную привязку отдельных значений. Так, уберем из модели User атрибуты привязки:</p>
<pre class="brush:c#;">
public class User
{
	public int Id { get; set; }
	public string Name { get; set; } = "";
	public int Age { get; set; }
	public bool HasRight { get; set; }
}
</pre>
<p>И применим атрибут <code>Bind</code> в методе AddUser:</p>
<pre class="brush:c#;">
public string AddUser([Bind("Name", "Age", "HasRight")] User user)
{
    return $"Name: {user.Name}  Age: {user.Age}  HasRight: {user.HasRight}";
}
</pre>
<p>В качестве параметра в атрибут Bind передается набор свойств объекта User, которые будут участвовать в процессе привязки. Здесь перечислены все свойства кроме Id. 
Но, допустим, уберем пару свойств:</p>
<pre class="brush:c#;">
public string AddUser([Bind("Name")] User user)
{
    return $"Name: {user.Name}  Age: {user.Age}  HasRight: {user.HasRight}";
}
</pre>
<p>Теперь в привязке участвует только свойство Name, поэтому даже если в запросе мы передадим значения для всех остальных свойств, эти значения учитываться 
не будут, а для соответствующих свойств, не участвующих в привязке, будут применяться значения по умолчанию:</p>
<img src="./pics/5.11.png" alt="Атрибут Bind в ASP.NET Core MVC и C#" />
<p>Если мы используем атрибут Bind применительно к параметру метода, как в случае выше, то мы переопределяем привязку только для конкретного метода. 
Если нам надо глобально переопределить привязку для модели User во всех методах, то атрибут Bind применяется в целом к модели:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc;

[Bind("Name")]
public class User
{
    public int Id { get; set; }
    public string Name { get; set; } = "";
    public int Age { get; set; }
    public bool HasRight { get; set; }
}
</pre>
<p>В этом случае в методе контроллера можно не применять данный атрибут к параметру:</p>
<pre class="brush:c#;">
public string AddUser(User user)
{
    return $"Name: {user.Name}  Age: {user.Age}  HasRight: {user.HasRight}";
}
</pre>
<h3>Источники привязки</h3>
<p>В одной из прошлых тем говорилось про порядок обхода привязчиком модели различных источников для получения значений. То есть привязчик обходит следующие 
источники в порядке приоритета для поиска значений:</p>
<ul>
<li><p>Данные отправленных форм в Request.Form</p></li>
<li><p>Данные маршрута в RouteData.Values</p></li>
<li><p>Данные строки запроса в Request.Query</p></li>
</ul>
<p>Но группа атрибутов позволяет переопределить это поведения, указав один целевой источник для поиска значений:</p>
<ul>
<li><p><span class="b">[FromHeader]</span>: данные извлекаются из заголовков запроса</p></li>
<li><p><span class="b">[FromQuery]</span>: данные извлекаются из строки запроса</p></li>
<li><p><span class="b">[FromRoute]</span>: данные извлекаются из значений маршрута</p></li>
<li><p><span class="b">[FromForm]</span>: данные извлекаются из полученных форм</p></li>
<li><p><span class="b">[FromBody]</span>: данные извлекаются из тела запроса. Этот атрибут может применяться, когда в качестве источника данных 
выступает не форма и не строка запроса, а, скажем, данные отправляются через AJAX</p>
<p>Атрибут FromBody может применяться, если метод имеет только один параметр, иначе будет сгенерировано исключение.</p></li>
</ul>
<p>Например, получим данные о юзер-агенте из запроса:</p>
<pre class="brush:c#;">
public IActionResult GetUserAgent([FromHeader(Name="User-Agent")] string userAgent)
{
    return Content(userAgent);
}
</pre>
<p>В атрибут FromHeader передается строковый параметр, который указывает нужный заголовок.</p>
<p>Или используем атрибут <code>[FromQuery]</code>. Для этого возьмем следующий контроллер с двумя методами:</p>
<pre class="brush:c#;">
public class HomeController : Controller
{
    public IActionResult Index()
    {
        return View();
    }

    [HttpPost]
    public string Index([FromQuery] Person person)
    {
        return $"Name: {person.Name}  Age: {person.Age}";
    }
}
public record class Person(string Name, int Age);
</pre>
<p>Здесь метод Index, который обрабатывает POST-запросы, принимает данные в виде объекта Person. Причем к параметру применяется атрибут <code>[FromQuery]</code></p>
<p>Другой метод Index возвращает объект ViewResult, то есть использует представление. Как правило для post-запросов используются формы. 
Поэтому для метода Index создадим представление <span class="b">Index.cshtml</span> со следующей формой ввода данных:</p>
<pre class="brush:xml;">
&lt;form method="post"&gt;
    &lt;p&gt;
        &lt;label&gt;Имя&lt;/label&gt;&lt;br /&gt;
        &lt;input type="text" name="Name" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;label&gt;Возраст&lt;/label&gt;&lt;br /&gt;
        &lt;input type="number" name="Age" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;input type="submit" value="Отправить" /&gt;
    &lt;/p&gt;
&lt;/form&gt;
</pre>
<p>При отправке формы по умолчанию привязчик вначале просматривает данные из полученной формы. Если каких-то данных там не окажется, то он просматривает 
данные маршрута и строки запроса.</p>
<p>Однако установленный атрибут <code>FromQuery</code> переопределяет это действие: теперь привязчик будет сразу просматривать данные из строки запроса. 
Даже если мы отправим вместе с формой какие-то данные, то они будут игнорироваться. Например, для обращения к get-версии метода Index используем адрес:</p>
<pre class="browser">https://localhost:7288/Home/Index?Name=Alice&Age=21</pre>
<img src="./pics/5.12.png" alt="Источники привязки модели в ASP.NET Core MVC и C#" />
<p>В коде формы не установлен адрес, поэтому в качестве адреса отправки будет использоваться текущий адрес, то есть <code>Home/Index?Name=Alice&Age=21</code>, который содержит строку запроса с двумя параметрами. В итоге данные 
формы будут игнорироваться:</p>
<img src="./pics/5.13.png" alt="Настройка model binding в ASP.NET Core MVC и C#" />
<p>Подобным образом применяются и все остальные атрибуты.</p>

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


<div class="nav"><p><a href="./5.3.php">Назад</a><a href="./">Содержание</a><a href="./5.5.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 5.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 5.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
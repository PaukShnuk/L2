<!DOCTYPE html>
<html >
<head>
<title>ASP.NET Core MVC и C# | Создание привязчика модели</title>
<meta charset="utf-8" />
<meta name="description" content="Создание привязчика модели в ASP.NET Core MVC и C#, интерфейсы IModelBinder и IModelBinderProvider">
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
<h2>Создание привязчика модели</h2><div class="date">Последнее обновление: 28.03.2022</div>

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

<p>Привязчики модели (model binders), которые нам доступны по умолчанию в рамках ASP.NET Core MVC, охватывают большинство типов .NET. 
И в принципе их достаточно для подавляющего большинства ситуаций. Однако при необходимости мы можем создать свой привязчик моделей. Рассмотрим, как это сделать.</p>
<p>Создадим новый проект ASP.NET Core по типу <span class="b">ASP.NET Core Empty</span> и назовем его <span class="b">MvcApp</span>. И сразу в файле <span class="b">Program.cs</span> 
определим подключение сервисов MVC:</p>
<pre class="brush:c#;">
var builder = WebApplication.CreateBuilder(args);
builder.Services.AddControllersWithViews();

var app = builder.Build();

app.MapControllerRoute(
    name: "default",
    pattern: "{controller=Home}/{action=Index}/{id?}");

app.Run();
</pre>
<h3>Определение модели</h3>
<p>Добавим в проект в папку <span class="b">Models</span> специальную модель Event, которая представляет некоторое событие:</p>
<pre class="brush:c#;">
namespace MvcApp.Models
{
    public class Event {
        public string? Id { get; set; }
        public string? Name { get; set; }       // название события
        public DateTime EventDate { get; set; } // дата и время событие
    }
}
</pre>
<p>Эта модель представляет встречу и содержит два простых свойства, которые представляют название события и его дату и время.</p>
<h3>Определение контроллера</h3>
<p>Далее добавим в проект папку <span class="b">Controllers</span>, а в нее - новый контроллер- <span class="b">HomeController</span>, в котором 
предусмотрим функционал для добавления одного объекта Event в список объектов:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc;
using MvcApp.Models;

namespace MvcApp.Controllers
{
    public class HomeController : Controller
    {
        static List&lt;Event&gt; events = new List&lt;Event&gt;();
        public IActionResult Index()
        {
            return View(events);
        }
        public IActionResult Create()
        {
            return View();
        }
        [HttpPost]
        public IActionResult Create(Event myEvent)
        {
            myEvent.Id = Guid.NewGuid().ToString();
            events.Add(myEvent);
            return RedirectToAction("Index");
        }
    }
}
</pre>
<p>Для упрощения примера в качестве хранилища объектов используется статический список, в который в методе Create добавляется один объект.</p>
<h3>Определение представлений</h3>
<p>Для хранения представлений контроллера HomeController определим в проекте новую папку <span class="b">Views</span>, а в ней - папку <span class="b">Home</span>.</p>
<p>Но, допустим, мы хотим отдельно вводить дату и отдельно время для события. И для добавления события определим в папке <span class="b">Views/Home</span> 
следующее представление <span class="b">Create.cshtml</span>:</p>
<pre class="brush:xml;">
&lt;form method="post"&gt;
    &lt;p&gt;
        &lt;label&gt;Событие&lt;/label&gt;&lt;br /&gt;
        &lt;input type="text" name="Name" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;label&gt;Дата&lt;/label&gt;&lt;br /&gt;
        &lt;input type="date" name="Date" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;label&gt;Время&lt;/label&gt;&lt;br /&gt;
        &lt;input type="time" name="Time" /&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;input type="submit" value="Отправить" /&gt;
    &lt;/p&gt;
&lt;/form&gt;
</pre>
<p>Далее добавим в папку <span class="b">Views/Home</span> представление <span class="b">Index.cshtml</span>, в котором добавленные события будут выводиться на веб-страницу:</p>
<pre class="brush:xml;">
@model IEnumerable&lt;MvcApp.Models.Event&gt;
&lt;h2&gt;Все события&lt;/h2&gt;
&lt;table&gt;
    @foreach(var eventInfo in Model)
    {
        &lt;tr&gt;&lt;td&gt;@eventInfo.Id&lt;/td&gt;&lt;td&gt;@eventInfo.Name&lt;/td&gt;&lt;td&gt;@eventInfo.EventDate&lt;/td&gt;&lt;/tr&gt;
    }
&lt;/table&gt;
</pre>
<img src="./pics/5.14.png" alt="Привязчик моделей в ASP.NET Core MVC и C#" />
<p>Но даже если мы введем данные и отправим, по умолчанию система привязки ASP.NET Core MVC не сможет никак соединить значения полей Date и Time в 
одно свойство типа DateTime:</p>
<img src="./pics/5.15.png" alt="Model Binder in ASP.NET Core MVC и C#" />
<h3>Создание привязчика модели</h3>
<p>По умолчанию система привязки будет использовать встроенное значение для свойства DateTime. И в этом случае, чтобы связать два значения в одно, мы можем создать свой 
привязчик модели. Для этого определим в проекте новую папку <span class="b">Infrastructure</span>. Добавим в эту папку новый класс 
<span class="b">CustomDateTimeModelBinder</span> со следующим содержимым:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc.ModelBinding;

namespace MvcApp.Infrastructure
{
    public class CustomDateTimeModelBinder : IModelBinder
    {
        private readonly IModelBinder fallbackBinder;
        public CustomDateTimeModelBinder(IModelBinder fallbackBinder)
        {
            this.fallbackBinder = fallbackBinder;
        }

        public Task BindModelAsync(ModelBindingContext bindingContext)
        {
            // с помощью поставщика значений получаем данные из запроса
            var datePartValues = bindingContext.ValueProvider.GetValue("Date");
            var timePartValues = bindingContext.ValueProvider.GetValue("Time");

            // если не найдено значений с данными ключами, вызываем привязчик модели по умолчанию
            if (datePartValues == ValueProviderResult.None || timePartValues == ValueProviderResult.None)
                return fallbackBinder.BindModelAsync(bindingContext);

            // получаем значения
            string? date = datePartValues.FirstValue;
            string? time = timePartValues.FirstValue;

            // Парсим дату и время
            DateTime.TryParse(date, out var parsedDateValue);
            DateTime.TryParse(time, out var parsedTimeValue);

            // Объединяем полученные значения в один объект DateTime
            var result = new DateTime(parsedDateValue.Year,
                            parsedDateValue.Month,
                            parsedDateValue.Day,
                            parsedTimeValue.Hour,
                            parsedTimeValue.Minute,
                            parsedTimeValue.Second);

            // устанавливаем результат привязки
            bindingContext.Result = ModelBindingResult.Success(result);
            return Task.CompletedTask;
        }
    }
}
</pre>
<p>Разберем этот класс. Прежде всего, для создания своего привязчика модели необходимо реализовать интерфейс <span class="b">IModelBinder</span>, который определяет 
метод <span class="b">BindModelAsync()</span>. Собственно с помощью метода и выполняется привязка модели.</p>
<p>Сазу стоит отметить, что класс содержит поле <span class="b">IModelBinder fallbackBinder</span>. В нашем случае это будет привязчик, который будет срабатывать, если 
какие-то данные в запросе отсутствуют. Этот привязчик устанавливается через конструктор.</p>
<p>В самом методе <span class="b">BindModelAsync()</span> с помощью параметра <span class="b">ModelBindingContext bindingContext</span> мы получаем 
контекст привязки.</p>
<p>В начале метода мы можем сгенерировать исключение, если этот контекст привязки не определен. И далее пытаемся получить через контекст привязки из запроса 
нужные нам значения. Для этого используются поставщики значений (value providers):</p>
<pre class="brush:c#;">
var datePartValues = bindingContext.ValueProvider.GetValue("Date");
var timePartValues = bindingContext.ValueProvider.GetValue("Time");
</pre>
<p>Через <code>bindingContext.ValueProvider</code> обращаемся к встроенному поставщику, а с помощью вызова его метода <code>GetValue("Date")</code> 
пытаемся найти в запросе значение с ключом "Date". Подобные ключи представляют названия полей форм или параметров строки запроса. 
Но совсем необязательно, что в запросе окажутся значения с ключами "Date" или "Time". Метод <code>GetValue()</code> возвращает объект 
<span class="b">ValueProviderResult</span>. И если значения не были найдены, то этот результат равен <code>ValueProviderResult.None</code>. 
В этом случае мы можем просто обратиться к запасному привязчику fallbackBinder.</p>
<p>Если данные все же были найдены, то с помощью свойства <span class="b">FirstValue</span> объекта ValueProviderResult мы можем получить строковое значение 
по ключу:</p>
<pre class="brush:c#;">
string? date = datePartValues.FirstValue;
string? time = timePartValues.FirstValue;
</pre>
<p>Все данные передаются в строках, даже если они представляют числа или дату и время.</p>
<p>Получив данные, мы можем распарсить их в дату и время и по ним собрать единый объект DateTime.</p>
<p>В конце устанавливаем результат привязки:</p>
<pre class="brush:c#;">bindingContext.Result = ModelBindingResult.Success(result);</pre>
<p>Но сам по себе привязчик не заработает. На нужен еще провайдер привязчика модели. Провайдер позволяет связать привязчик с определенным типом данных, для которого будет выполняться привязка.</p>
<p>Итак, добавим в папку <span class="b">Infrastructure</span> новый класс <span class="b">CustomDateTimeModelBinderProvider</span>:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc.ModelBinding;
using Microsoft.AspNetCore.Mvc.ModelBinding.Binders;

namespace MvcApp.Infrastructure
{
    public class CustomDateTimeModelBinderProvider : IModelBinderProvider
    {
        public IModelBinder? GetBinder(ModelBinderProviderContext context)
        {
            // Для объекта SimpleTypeModelBinder необходим сервис ILoggerFactory
            // Получаем его из сервисов
            ILoggerFactory loggerFactory = context.Services.GetRequiredService&lt;ILoggerFactory&gt;();
            IModelBinder binder = new CustomDateTimeModelBinder(new SimpleTypeModelBinder(typeof(DateTime), loggerFactory));
            return context.Metadata.ModelType == typeof(DateTime) ? binder : null;
        }
    }
}
</pre>
<p>Провайдер должен реализовать интерфейс <span class="b">IModelBinderProvider</span/>. Он определяет метод <span class="b">GetBinder()</span>, 
в котором с помощью контекста провайдера ModelBinderProviderContext мы можем получить тип данных, для которых выполняется привязка. 
В данном случае нас интересует тип DateTime. Если свойство <code>context.Metadata.ModelType</code> представляет данный тип, то возвращаем объект 
CustomDateTimeModelBinder. А при создании этого объекта в конструктор передается запасной привязчик для типа DateTime:</p>
<pre class="brush:c#;">
IModelBinder binder = new CustomDateTimeModelBinder(new SimpleTypeModelBinder(typeof(DateTime), loggerFactory));
</pre>
<p>После определения провайдера получится следующая структура проекта:</p>
<img src="./pics/5.16.png" alt="Провайдер привязки модели в ASP.NET Core MVC и C#" />
<p>И последний шаг - добавление этого провайдера в коллекцию провайдеров привязчиков модели. Для этого откроем <span class="b">Program.cs</span> и найдем в нем 
вызов, который добавляет сервисы фреймворка MVC для поддержки контроллеров и представлений:</p>
<pre class="brush:c#;">builder.Services.AddControllersWithViews();</pre>
<p>Используем его перегруженную версию для добавления провайдера:</p>
<pre class="brush:c#;">
using MvcApp.Infrastructure;

var builder = WebApplication.CreateBuilder(args);
builder.Services.AddControllersWithViews(opts =&gt;
{
    opts.ModelBinderProviders.Insert(0, new CustomDateTimeModelBinderProvider());
});

var app = builder.Build();

app.MapControllerRoute(
    name: "default",
    pattern: "{controller=Home}/{action=Index}/{id?}");

app.Run();
</pre>
<p>Провайдер добавляется в коллекцию <span class="b">opts.ModelBinderProviders</span> на первое место.</p>
<p>Теперь мы можем запустить приложение. И если мы заново отправим те же самые данные, то они будут адекватно привязаны к свойству модели:</p>
<img src="./pics/5.17.png" alt="Custom Model Binder in ASP.NET Core MVC и C#" />
<h3>Привязчик для всей модели</h3>
<p>Выше было рассмотрено создание привязчика для отдельного свойства модели, точнее для типа, которое представляет это свойство. Но мы также может создавать 
более комплексные привязчики для всей модели.</p>
<p>Например, возьмем ту же модель Event. Создадим для нее привязчик. И для этого добавим в папку Infrastructure новый класс <span class="b">EventModelBinder</span>:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc.ModelBinding;
using MvcApp.Models;

namespace MvcApp.Infrastructure
{
    public class EventModelBinder : IModelBinder
    {
        public Task BindModelAsync(ModelBindingContext bindingContext)
        {
            // с помощью поставщика значений получаем данные из запроса
            var datePartValues = bindingContext.ValueProvider.GetValue("Date");
            var timePartValues = bindingContext.ValueProvider.GetValue("Time");
            var namePartValues = bindingContext.ValueProvider.GetValue("Name");
            var idPartValues = bindingContext.ValueProvider.GetValue("Id");

            // получаем значения
            var date = datePartValues.FirstValue;
            var time = timePartValues.FirstValue;
            var name = namePartValues.FirstValue;
            var id = idPartValues.FirstValue;

            // если id не установлен, например, при создании модели, генерируем его
            if (string.IsNullOrEmpty(id)) id = Guid.NewGuid().ToString();

            // если name не установлено
            if (string.IsNullOrEmpty(name)) name = "Неизвестное событие";

            // Парсим дату и время
            DateTime.TryParse(date, out var parsedDateValue);
            DateTime.TryParse(time, out var parsedTimeValue);

            // Объединяем полученные значения в один объект DateTime
            DateTime fullDateTime = new DateTime(parsedDateValue.Year,
                            parsedDateValue.Month,
                            parsedDateValue.Day,
                            parsedTimeValue.Hour,
                            parsedTimeValue.Minute,
                            parsedTimeValue.Second);
            // устанавливаем результат привязки
            bindingContext.Result = ModelBindingResult.Success(new Event { Id = id, EventDate = fullDateTime, Name = name });
            return Task.CompletedTask;
        }
    }
}
</pre>
<p>Здесь также мы получаем с помощью поставщика значений все значения для свойств модели Event. Если ряд значений, как id или name, не установлены, то 
они устанавливаются явным образом в само привязчике. Например, при добавлении модели id обычно не устанавливаетс вручную, и мы можем его таким образом задать.</p>
<p>Далее добавим в папку <span class="b">Infrastructure</span> для этого привязчика класс провайдера, который назовем <span class="b">EventModelBinderProvider</span>:</p>
<pre class="brush:c#;">
using Microsoft.AspNetCore.Mvc.ModelBinding;
using MvcApp.Models;

namespace MvcApp.Infrastructure
{
    public class EventModelBinderProvider : IModelBinderProvider
    {
        private readonly IModelBinder binder = new EventModelBinder();

        public IModelBinder? GetBinder(ModelBinderProviderContext context)
        {
            return context.Metadata.ModelType == typeof(Event) ? binder : null;
        }
    }
}
</pre>
<p>И для встраивания провайдера изменим подключение сервисов MVC в файле <span class="b">Program.cs</span>:</p>
<pre class="brush:c#;">
using MvcApp.Infrastructure;

var builder = WebApplication.CreateBuilder(args);
builder.Services.AddControllersWithViews(opts =&gt;
{
    opts.ModelBinderProviders.Insert(0, new EventModelBinderProvider());
    //opts.ModelBinderProviders.Insert(0, new CustomDateTimeModelBinderProvider());
});

var app = builder.Build();

app.MapControllerRoute(
    name: "default",
    pattern: "{controller=Home}/{action=Index}/{id?}");

app.Run();
</pre>
<p>И теперь мы можем убрать в методе Create в контроллере установку Id у объекта Event, поскольку теперь это делает привязчик модели:</p>
<pre class="brush:c#;">
[HttpPost]
public IActionResult Create(Event myEvent)
{
	//myEvent.Id = Guid.NewGuid().ToString(); - эта строка больше не нужна
    events.Add(myEvent);
	return RedirectToAction("Index");
}
</pre>
<p>Таким образом, мы можем создавать свои собственные привязчики модели для отдельных ее свойств и всей модели в целом.</p>

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


<div class="nav"><p><a href="./5.4.php">Назад</a><a href="./">Содержание</a><a href="./6.1.php">Вперед</a></p></div></div>
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
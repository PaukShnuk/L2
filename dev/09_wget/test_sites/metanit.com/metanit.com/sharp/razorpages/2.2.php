<!DOCTYPE html>
<html >
<head>
<title>Razor Pages и C# | Синтаксис Razor</title>
<meta charset="utf-8" />
<meta name="description" content="Синтаксис Razor в проекте ASP.NET Core на языке программирования C#, однострочные выражение и блоки кода, функции, циклы, условные конструкции и подключение классов">
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
<h2>Синтаксис Razor</h2><div class="date">Последнее обновление: 14.04.2022</div>

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

<p>Ключевым моментом в определении интерфейса на страницах Razor Page является использование конструкций движка Razor. Благодаря Razor мы можем применять 
на странице выражения языка C#. Синтаксис Razor довольно прост - все его конструкции предваряются символом <span class="b">@</span>, после которого происходит переход от кода HTML к коду C#. При генерации ответа клиенту Razor обрабатывает выражения языка C# и на их основе генерирует код HTML. 
Например, определим следующее 
представление:</p>
<pre class="brush:c#;">
@page

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;METANIT.COM&lt;/title&gt;
    &lt;meta charset="utf-8" /&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h2&gt;Time: @DateTime.Now.ToShortTimeString()&lt;/h2&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Здесь вместо выражения <code>@DateTime.Now.ToShortTimeString()</code> при рендеринге представления будет вставляться текущее время:</p>
<img src="./pics/2.2.png" alt="движок представлений razor в Razor Pages в ASP.NET Core и C#" />
<p>Стоит отметить, что по умолчанию Razor подключает на страницы следующие пространства имен</p>
<pre class="brush:c#;">
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Mvc;
using Microsoft.AspNetCore.Mvc.Rendering;
using Microsoft.AspNetCore.Mvc.ViewFeatures;
</pre>
<p>Соответственно мы можем использовать функционал этих пространств имен на страницах Razor, как в примере выше структуру DateTime из пространства System.</p>
<h3>Типы конструкций Razor</h3>
<p>Все конструкции Razor можно условно разделить на два вида: однострочные выражения и блоки кода.</p>
<p>Пример применения однострочных выражений:</p>
<pre class="brush:xml;">&lt;p&gt;Date: @DateTime.Now.ToLongDateString()&lt;/p&gt;</pre>
<p>В данном случае используется объект DateTime и его метод <code>ToLongDateString()</code></p>
<p>Или еще один пример:</p>
<pre class="brush:xml;">&lt;p&gt;@(20 + 30)&lt;/p&gt;</pre>
<p>Так как перед скобками стоит знак @, то выражение в скобках будет интерпретироваться как выражение на языке C#. Поэтому браузер выведет число 50, а не "20 + 30".</p>
<p>Но если вдруг мы создаем код html, в котором присутствует символ @ не как часть синтаксиса Razor, а сам по себе, то, чтобы его отобразить, нам надо его дублировать:</p>
<pre class="brush:xml;">&lt;p&gt;@@DateTime.Now =@DateTime.Now.ToLongDateString()&lt;/p&gt;</pre>
<p>Блоки кода могут иметь несколько выражений. Блок кода заключается в фигурные скобки, а каждое выражение завершается точкой с запятой аналогично 
блокам кода и выражениям на C#:</p>
<pre class="brush:xml;">
@page

@{
    string head = "Hello METANIT.COM!"; // определяем переменную head
    string text = "ASP.NET Core Application";   // определяем переменную text
}

&lt;h2&gt;@head&lt;/h2&gt; &lt;!-- используем переменную head --&gt;
&lt;div&gt;@text&lt;/div&gt; &lt;!-- используем переменную text --&gt;
</pre>
<p>В блоках кода мы можем определить обычные переменные и потом их использовать в представлении.</p>
<img src="./pics/2.3.png" alt="определение переменных на странице Razor Pages в ASP.NET Core и C#" />
<p>Если необходимо вывести значение переменной без каких-либо html-элементов, то мы можем использовать специальный снипет <code>&lt;text&gt;</code>:</p>
<pre class="brush:c#;">
@page

@{
    int i = 8;
    &lt;text&gt;@i&lt;/text&gt;
}
&lt;text&gt;@(i+1)&lt;/text&gt;
</pre>
<p>В Razor могут использоваться комментарии. Они располагаются между символами <code>@**@</code>:</p>
<pre class="brush:xml;">@* текст комментария *@</pre>
<h3>Условные конструкции</h3>
<p>Также мы можем использовать условные конструкции:</p>
<pre class="brush:xml;">
@page

@{
    string morning = "Good Morning";
    string evening = "Good Evening";
    string hello = "Hello";
    int hour = DateTime.Now.Hour;
}
@if (hour &lt; 12)
{
    &lt;h2&gt;@morning&lt;/h2&gt;
}
else if (hour &gt; 17)
{
    &lt;h2&gt;@evening&lt;/h2&gt;
}
else
{
    &lt;h2&gt;@hello&lt;/h2&gt;
}
</pre>
<p>Конструкция <code>switch</code>:</p>
<pre class="brush:c#;">
@page

@{
    string language = "german";
}
@switch(language)
{
    case "russian":
        &lt;h3&gt;Привет мир!&lt;/h3&gt;
        break;
    case "german":
        &lt;h3&gt;Hallo Welt!&lt;/h3&gt;
        break;
    default:
        &lt;h3&gt;Hello World!&lt;/h3&gt;
        break;
}
</pre>
<h3>Циклы</h3>
<p>Кроме того, мы можем использовать все возможные циклы. Цикл <span class="b">for</span>:</p>
<pre class="brush:c#;">
@page

@{
    string[] people = { "Tom", "Sam", "Bob" };
}
&lt;ul&gt;
    @for (var i = 0; i &lt; people.Length; i++)
    {
        &lt;li&gt;@people[i]&lt;/li&gt;
    }
&lt;/ul&gt;
</pre>
<img src="./pics/2.4.png" alt="Циклы на C# в Razor Pages в представлениях в ASP.NET Core" />
<p>Цикл <span class="b">foreach</span>:</p>
<pre class="brush:c#;">
@page

@{
    string[] people = { "Tom", "Sam", "Bob" };
}
&lt;ul&gt;
    @foreach (var person in people)
    {
        &lt;li&gt;@person&lt;/li&gt;
    }
&lt;/ul&gt;
</pre>
<p>Цикл <span class="b">while</span>:</p>
<pre class="brush:c#;">
@page

@{
    string[] people = { "Tom", "Sam", "Bob" };
    var i = 0;
}
&lt;ul&gt;
    @while ( i &lt; people.Length)
    {
        &lt;li&gt;@people[i++]&lt;/li&gt;
    }
&lt;/ul&gt;
</pre>
<p>Цикл <span class="b">do..while</span>:</p>
<pre class="brush:c#;">
@page

@{
    var i = 1;
}
&lt;ul&gt;
    @do
    {
        &lt;li&gt;@(i * i)&lt;/li&gt;
    }
    while ( i++ &lt; 5);
&lt;/ul&gt;
</pre>
<h3>try...catch</h3>
<p>Конструкция <code>try...catch...finally</code>, как и в C#, позволяет обработать исключение, которое может возникнуть при выполнение кода:</p>
<pre class="brush:c#;">
@page

@try
{
    throw new InvalidOperationException("Something wrong");
}
catch (Exception ex)
{
    &lt;p&gt;Exception: @ex.Message&lt;/p&gt;
}
finally
{
    &lt;p&gt;finally&lt;/p&gt;
}
</pre>
<p>Если в блоке try выбрасывается исключение, то выполняется блок catch. И в любом случае в конце блока try и catch выполняется блок finaly.</p>
<h3>Вывод текста в блоке кода</h3>
<p>Обычный текст в блоке кода мы не сможем вывести:</p>
<pre class="brush:xml;">
@page

@{
    bool isEnabled = true;
}
@if (isEnabled)
{
    Hello World
}
</pre>
<p>В этом случае Razor будет рассматривать строку "Hello" как набор операторов языка C#, которых, естественно в C# нет, поэтому мы получим ошибку. 
И чтобы вывести текст как есть в блоке кода, нам надо использовать выражение <code>@:</code>:</p>
<pre class="brush:xml;">
@page

@{
    bool isEnabled = true;
}
@if (isEnabled)
{
    @: Hello
}
</pre>
<h3>Функции</h3>
<p>Директива <span class="b">@functions</span> позволяет определить функции, которые могут применяться в представлении. Например:</p>
<pre class="brush:xml;">
@page

@functions
{
    public int Sum(int a, int b) 
    {
        return a + b;
    }
    public int Square(int n) =&gt; n * n;
}
&lt;p&gt;Sum of 5 and 4: &lt;b&gt; @Sum(5, 4)&lt;/b&gt;&lt;/p&gt;
&lt;p&gt;Square of 4: &lt;b&gt;@Square(4)&lt;/b&gt;&lt;/p&gt;
</pre>
<img src="./pics/2.5.png" alt="функции в коде razor pages в ASP.NET Core на C#" />
<h3>Локальные функции</h3>
<p>В блоках кода также можно определять локальные функции:</p>
<pre class="brush:c#;">
@page

@{
    void RenderName(string name)
    {
        <p>Name: <b>@name</b></p>
    }

    RenderName("Tom");
    RenderName("Bob");
}

<div>@{RenderName("Sam");}</div>
</pre>
<p>В данном случае функция RenderName выводит некоторую разметку html, в которую передается значение параметра name:</p>
<img src="./pics/2.6.png" alt="локальные функции в razor pages на C# в ASP.NET Core" />
<h3>Инструкция using</h3>
<p>С помощью директивы <span class="b">using</span> можно подключать на страницу Razor различные пространства. Например, определим в проекте новый класс <span class="b">Person</span>:</p>
<pre class="brush:c#;">
namespace RazorPagesApp
{
    public class Person
    {
        public string Name { get; }
        public int Age { get; }
        public Person(string name, int age)
        {
            Name = name;
            Age = age;
        }
        public override string ToString() =&gt; $"Person {Name} ({Age} лет)";
    }
}
</pre>
<p>В данном случае класс Person расположен в пространстве имен RazorPagesApp:</p>
<img src="./pics/2.7.png" alt="определение классов для razor pages на C# в ASP.NET Core" />
<p>Чтобы использовать данный класс на странице Razor, его пространство имен необходимо подключить с помощью директивы <span class="b">@using</span>:</p>
<pre class="brush:xml;">
@page

@using RazorPagesApp @* подключение пространства имен RazorPagesApp *@

@{
    Person tom = new Person("Tom", 37);
}

&lt;h2&gt;@tom&lt;/h2&gt;
</pre>
<img src="./pics/2.8.png" alt="подключение пространств имен и директива using в razor pages на C# в ASP.NET Core" />
<p>В качестве альтрнативы, как и в общем в C#, можно было бы указать полное имя класса с учетом пространства имен:</p>
<pre class="brush:c#;">RazorPagesApp.Person tom = new RazorPagesApp.Person("Tom", 37);</pre>
<p>Но директива using позволяет сократить код.</p>

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


<div class="nav"><p><a href="./2.1.php">Назад</a><a href="./">Содержание</a><a href="./2.3.php">Вперед</a></p></div></div>
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
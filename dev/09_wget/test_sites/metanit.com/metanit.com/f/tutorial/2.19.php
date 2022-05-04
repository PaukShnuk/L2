<!DOCTYPE html>
<html >
<head>
<title>F# | Модификаторы доступа и добавление библиотеки классов</title>
<meta charset="utf-8" />
<meta name="description" content="Модификаторы доступа и добавление библиотеки классов в языке программирования F#, ограничение доступа с помощью модификаторов public, internal, private">
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
<h2>Модификаторы доступа и добавление библиотеки классов</h2><div class="date">Последнее обновление: 30.07.2021</div>

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

<p>Модификаторы доступа позволяют ограничить доступ к функциональности программы определенным контекстом. Модификаторы доступа применяются 
к модулям, определениям значений, функциям, типам, методам, свойствам и явно определенным полям (методы, свойства и явно определяемые поля будут рассмотрены в последующих статьях).</p>
<p>В F# есть следующие модификаторы доступа:</p>
<ul>
<li><p><span class="b">public</span>: функционал доступен из любого места программы, в том числе вне проекта в других проектах</p></li>
<li><p><span class="b">internal</span>: функционал доступен только из текущего проекта</p></li>
<li><p><span class="b">private</span>: функционал доступен из типа или модуля, в котором данный функционал определен</p></li>
</ul>
<p>Модификаторы указываются перед названием модулей, функций, типов, значений, но после ключевых слов <code>module</code>, <code>let</code>, 
<code>type</code>. Если модификатор доступа явным образом не указан, то уровень доступности аналогичен модификатору <code>public</code>.</p>
<h3>Добавление проекта библиотеки классов</h3>
<p>Чтобы подробнее разобраться в модификаторах доступа, добавим в имеющееся решение с проектом F# новый проект. Для этого нажмем правой кнопкой мыши на решение и выберем в контекстном меню 
<span class="b">Add -&gt; New Project...</span>:</p>
<img src="./pics/2.7.png" alt="Модификаторы доступа в F#" />
<p>При выборе типа добавляемого проекта выберем тип <span class="b">Class library</span>:</p>
<img src="./pics/2.8.png" alt="Библиотека классов Class Library в F#" />
<p>На следующем окне дадим проекту имя, например,<span class="b">Messages</span>:</p>
<img src="./pics/2.9.png" alt="Добавление библиотеки классов Class Library в F#" />
<p>Дальше укажем предпочтительную версию .NET:</p>
<img src="./pics/2.10.png" alt="версия .NET библиотеки классов Class Library в F#" />
<p>После этого в решение будет добавлен новый проект Messages, который будет содержать файл кода <code>Library.fs</code> с некоторым автосгенерированным кодом:</p>
<img src="./pics/2.11.png" alt="Проект библиотеки классов Class Library в F#" />
<p>Откроем файл <code>Library.fs</code> и изменим его код следующим образом:</p>
<pre class="brush:f#;">
namespace Messages

type public MessageFuncType = unit -&gt; unit

module internal Texts = 
    let public hello = "Hello"                  // доступно везде в проекте
    let internal goodMorning = "Good Morning"   // доступно только в пределах проекта Messages
    let private goodEvening = "Good Evening"    // доступно только в пределах модуля Text

module public Funcs = 
    let public sayHello() = printfn $"{Texts.hello}"            // доступно везде
    let internal sayMorning() = printfn $"{Texts.goodMorning}"  // доступно только в пределах проекта Messages
    //let public sayEvening() = printfn $"{Texts.goodEvening}"  // так нельзя - не доступа к Texts.hello
</pre>
<p>Итак, в пространстве имен <code>Messages</code> определено три сущности:</p>
<ul>
<li><p>Тип <code>MessageFuncType</code> - он имеет модификатор доступа <code>public</code>, поэтому доступен из любого места программы</p></li>
<li><p>Модуль <code>Texts</code> определяет текст сообщений - он имеет модификатор доступа <code>internal</code>, поэтому доступен из любого места текущего проекта Messages</p></li>
<li><p>Модуль <code>Funcs</code> определяет функции для вывода текста сообщений - он имеет модификатор доступа <code>public</code>, поэтому доступен из любого места программы</p></li>
</ul>
<p>Теперь рассмотрим модуль <code>Funcs</code>.</p>
<p>Первая функция - <code>sayHello()</code> обращается к значению <code>hello</code> из модуля <code>Texts</code></p>
<pre class="brush:f#;">let public sayHello() = printfn $"{Texts.hello}" </pre>
<p>Здесь проблем никаких нет - это поле определено с модификатором <code>public</code>, поэтому достуно вне модуля <code>Texts</code> в любых других модулях текущего проекта.</p>
<p>Вторая функция <code>sayMorning()</code> обращается к значению <code>goodMorning</code> из модуля <code>Texts</code></p>
<pre class="brush:f#;">let internal sayMorning() = printfn $"{Texts.goodMorning}"</pre>
<p>Здесь то же проблем никаких нет - это поле определено с модификатором <code>internal</code>, поэтому достуно вне модуля <code>Texts</code> в любых других модулях текущего проекта.</p>
<p>Теперь возьмем закомментрированную функцию - <code>sayEvening</code></p>
<pre class="brush:f#;">let public sayEvening() = printfn $"{Texts.goodEvening}" </pre>
<p>Эта функция обращается к значению <code>goodEvening</code> из модуля <code>Texts</code>, которое имеет модификатор <code>private</code>, поэтому доступно только 
внутри модуля <code>Texts</code></p>
<h3>Подключение библиотеки классов</h3>
<p>Теперь подключим выше определенную библиотеку классов в главный проект.  Для этого в главном проекте нажмем на пункт <span class="b">Dependences</span> правой кнопкой мыши и в появившемся меню выберем пункт <span class="b">Add Project Reference...</span>:</p>
<img src="./pics/2.12.png" alt="Подключение библиотеки классов Class Library в F#" />
<p>Затем в появившемся окне отметим пункт Messages, который представляет нашу библиотеку классов, и нажмем на OK.</p>
<img src="./pics/2.13.png" alt="Подключение библиотеки классов в проект F#" />
<p>И после успешного подключения в главном проекте в узле <code>Dependences</code> можно будет увидеть пункт <code>Messages</code>, который представляет подключенную библиотеку классов.</p>
<img src="./pics/2.14.png" alt="Подключение библиотеки классов в F#" />
<p>Теперь изменим код файла <span class="b">Program.fs</span> в главном проекте следующим образом:</p>
<pre class="brush:f#;">
open Messages
// open Texts   // модуль Texts недоступен
open Funcs      // модуль Funcs доступен

let printMessage : MessageFuncType = fun()-&gt;printfn "Hi F#" // тип MessageFuncType доступен

sayHello()          // функция sayHello доступна
// sayMorning()    // функция sayMorning не доступна
</pre>
<p>Здесь мы видим, что модуль <code>Texts</code> из пространства имен Messages не доступен, поскольку он определен с модификатором <code>internal</code> и поэтому 
доступен только внутри своего проекта.</p>
<p>А вот модуль <code>Funcs</code> определен с модификатором <code>public</code>, поэтому доступен из других проектов. Однако среди функциональности в других проектах 
будет доступна только та функциональность, которая определена с модификатором <code></code>. Так, мы можем в других проектах использовать его функцию 
<code>sayHello</code> с модификатором <code>public</code>, но не можем использовать функцию <code>sayMorning</code> с модификатором <code>internal</code>.</p>
<p>И также поскольку тип <code>MessageFuncType</code> имеет модификатор <code>public</code>, то он также доступен из других проектов.</p>
<h3>Модификаторы внешних сущностей</h3>
<p>Если мы вернемся к проекту Messages и его модулю Texts, то можем увидеть, что вложенная сущность - значение <code>hello</code> имеет модификатор 
<code>public</code>:</p>
<pre class="brush:f#;">
module internal Texts = 
    let public hello = "Hello" 
</pre>
<p>Но в этом модификаторе нет смысла, поскольку внешняя сущность - модуль Texts имеет модификатор <code>internal</code>, что ограничивает его использование 
текущим проектом. Соответственно, значение <code>hello</code> также можно использовать только в рамках текущего проекта, несмотря на модификатор <code>public</code>.</p>

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


<div class="nav"><p><a href="./2.18.php">Назад</a><a href="./">Содержание</a><a href="./3.1.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в F#</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/f/tutorial/1.1.php">Что такое F#</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/1.2.php">Первая программа в Visual Studio</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы программирования на F#</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.1.php">Оператор let. Привязка значений</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.2.php">Типы данных и выведение типа</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.3.php">Арифметические операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.4.php">Операции сравнения и логические операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.5.php">Поразрядные операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.6.php">Функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.7.php">Параметры функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.8.php">Результат функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.9.php">Точка входа в программу</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.10.php">Вложенные функции и области видимости значений и функций</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.11.php">Конструкция if..then..else</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.12.php">Циклы while..do, for..to и for..in</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.13.php">Тип функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.14.php">Функция как параметр и результат другой функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.15.php">Лямбда-выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.16.php">Оператор type и определение типа</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.17.php">Модули</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.18.php">Пространства имен</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/2.19.php">Модификаторы доступа и добавление библиотеки классов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/f/tutorial/3.1.php">Классы и объекты</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/3.2.php">Конструкторы классов</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/3.3.php">Методы и функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/3.4.php">Поля и хранение состояния</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/3.5.php">Свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/3.6.php">Структуры</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/3.7.php">Классы или структуры. Типы значений и ссылочные типы</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/3.8.php">Кортежи</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/3.9.php">Наследование</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/3.10.php">Переопределение методов и свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/3.12.php">Абстрактные классы</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/3.13.php">Преобразование типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/f/tutorial/3.11.php">Класс Object и его методы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Коллекции</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/f/tutorial/4.1.php">Последовательность</a></span></li>
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
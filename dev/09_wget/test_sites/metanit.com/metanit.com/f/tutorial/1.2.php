<!DOCTYPE html>
<html >
<head>
<title>F# | Первая программа в Visual Studio</title>
<meta charset="utf-8" />
<meta name="description" content="Начало работы с языком F#. Среда Visual Studio. Создание первой программы на F#.">
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
<h2>Первая программа в Visual Studio</h2><div class="date">Последнее обновление: 15.07.2021</div>

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

<p>Cоздадим первое приложение на языке F#. В данном случае для разработки мы будем использовать бесплатную и полнофункциональную среду разработки 
как <span class="b">Visual Studio Community 2019</span>, которую можно загрузить по следующему адресу: <a href="https://visualstudio.microsoft.com/downloads/" rel="nofollow">Microsoft Visual Studio</a>.</p>
<img src="./pics/1.1.png" alt="Установка Visual Studio для F#" />
<p>После загрузки запустим программу установки Visual Studio. В открывшемся окне нам будет предложено выбрать те компоненты, которые мы 
хотим установить вместе Visual Studio. Стоит отметить, что Visual Studio - очень функциональная среда разработки и позволяет разрабатывать 
приложения с помощью множества языков и платформ. В нашем случае нам будет интересовать прежде всего F# и .NET Core. Поэтому в наборе рабочих 
нагрузок можно выбрать только пункт Кроссплатформенная разработка .NET Core. Можно выбрать и больше опций или вообще все опции, однако 
стоит учитывать свободный размер на жестком диске - чем больше опций будет выбрано, соответственно тем больше места на диске будет занято.</p>
<img src="./pics/1.1.png" alt="Установка Visual Studio для F#" />
<p>И при инсталляции Visual Studio на ваш компьютер будут установлены все необходимые инструменты для разработки программ, в том числе фреймворк .NET 5.</p>
<p>После завершения установки создадим первую программу. Она будет простенькой. Вначале откроем Visual Studio. На стартовом экране выберем пункт <span class="b">Create a new project</span> (Создать новый проект)</p>
<img src="./pics/1.3.png" alt="Первый проект для F# в Visual Studio" />
<p>На следующем окне в качестве языка выберем <span class="b">F#</span>, а в качестве типа проекта укажем шаблон <span class="b">Console Application</span>, 
то есть мы будем создавать консольное приложение на языке F#</p>
<img src="./pics/1.4.png" alt="Консольный проект для F# в Visual Studio" />
<p>Далее в поле <span class="b">Project Name</span> дадим проекту какое-либо название. В моем случае это <span class="b">HelloApp</span>. 
А также укажем папку, где будет располагаться проект.</p>
<img src="./pics/1.5.png" alt="Создание первого проекта для F# в Visual Studio" />
<p>На следующем окне Visual Studio предложит нам выбрать версию .NET, которая будет использоваться для проекта. По умолчанию здесь выбрана последняя на данный момент версия - .NET 5.0. Оставим и нажмен на кнопку Create (Создать) для создания проекта.</p>
<img src="./pics/1.6.png" alt="Выбор версии .NET для F# в Visual Studio" />
<p>После этого Visual Studio создаст и откроет нам проект:</p>
<img src="./pics/1.7.png" alt="Первый проект на F# для Visual Studio" />
<p>В большом поле в центре, которое по сути представляет текстовый редактор, находится сгенерированный по умолчанию код F#.</p>
<p>Справа находится окно Solution Explorer, в котором можно увидеть структуру нашего проекта. В данном случае у нас сгенерированная по 
умолчанию структура: узел <span class="b">Dependencies</span> - это узел содержит сборки dll, которые добавлены в проект по умолчанию. Эти сборки как раз содержат 
библиотеки .NET, которые могут использоваться в проекте F#.</p>
<p>Второй элемент структуры проекта - непосредственно сам файл кода программы <span class="b">Program.fs</span> (Файлы с исходным кодом на языке F# помещаются в файлы с расширением 
<span class="b">.fs</span>). Как раз этот файл и открыт в центральном окне.</p>
<p>Теперь вкратце разберем, что представляет собой автосгенерированный код файла <span class="b">Program.fs</span>:</p>
<pre class="brush:f#;">
open System

// Определяем функцию from, которая принимает параметр whom
let from whom =
    sprintf "from %s" whom

[&lt;EntryPoint&gt;]
let main argv =
    let message = from "F#" // Вызываем функцию from 
    printfn "Hello world %s" message
    0 // возвращаем числовой код выхода из функции
</pre>
<p>Вначале идет вызов директивы <span class="b">open</span>, которая подключает пространства имен. Пространства имен представляют собой организацию исходного кода в общие блоки. 
В данном случае подключается пространство имен <span class="b">System</span>:</p>
<pre class="brush:f#;">open System</pre>
<p>После этого мы можем воспользоваться возможностями, которые предоставляет пространство имен System. Однако в данном автосгенерированном коде оно не используется, и в принципе эту строку в данном случае можно удалить.</p>
<p>Далее идет определение функции <span class="b">from</span>:</p>
<pre class="brush:f#;">
let from whom =
    sprintf "from %s" whom
</pre>
<p>Определение функции начинается с ключевого слова <span class="b">let</span>, после которого идет название функции, то есть в данном случае <code>from</code>.</p>
<p>После названия функции идут параметры функции. Здесь для функции <code>from</code> определен только один параметр - <code>whom</code>, который представляет некоторую строку.</p>
<p>После знака равно = идут действия, выполняемые функцией: <code>sprintf "from %s" whom</code>. Здесь применяется встроенная функция <span class="b">sprintf</span>, 
которая выполняет форматирование текста, то есть, грубо говоря, объединяет различные значения в одну строку. В данном же случае она будет вставлять в строку 
"from %s" вместо символов <code>%s</code> значение параметра <code>whom</code>.</p>
<p>Дальше идет определение функции <span class="b">main</span>, с которой будет начинаться выполнение программы:</p>
<pre class="brush:f#;">
[&lt;EntryPoint&gt;]
let main argv =
    let message = from "F#" // Вызываем функцию from 
    printfn "Hello world %s" message
    0 // возвращаем числовой код выхода из функции
</pre>
<p>Чтобы указать, что функция является входной точкой в программу, то есть с нее будет начинаться выполняться программы, над ней указывается атрибут <code>[&lt;EntryPoint&gt;]</code></p>
<p>Определение функции <code>main</code> (также как и функции from) начинается с ключевого слова <span class="b">let</span>, после которого указывается 
название функции - main и далее название параметров - <code>argv</code>.</p>
<p>Также как и в случае с функции <code>from</code>, после знака равно (=) указываются действия, выполняемые функцией. Однако теперь функция main выполняет по сути три действия, 
которые располагаются последовательно на трех строках.</p>
<p>Первое действие представляет вызов функции <code>from</code>:</p>
<pre class="brush:f#;">let message = from "F#"</pre>
<p>Здесь с помощью оператора <span class="b">let</span> определяется переменная <code>message</code>, которая будет хранить результат вызова функции 
<code>from</code>. Как мы выше рассмотрели, функция <code>from</code> принимает один параметр - некоторую строку и создает отформатированный текст</p>
<p>Здесь в качестве параметра <code>whom</code> в функцию from передается строка "F#". Таким образом, функция <code>from</code> будет создавать строку 
"from F#". И эта строка будет храниться в переменной <code>message</code></p>
<p>Второе действие представляет форматированный вывод на консоль:</p>
<pre class="brush:f#;">printfn "Hello world %s" message</pre>
<p>Встроенная функция <span class="b">printfn</span> выводит на консоль некоторую строку. В данном случае такой строкой является <code>"Hello world %s" message</code>. Здесь мы опять сталкиваемся с форматированием. 
То есть в строку <code>"Hello world %s"</code> вместо символов <code>%s</code> будет вставляться содержимое переменной <code>message</code>.</p>
<p>Выше исходя из кода мы увидели, что переменная <code>message</code> будет представлять строку "from F#", поэтому в итоге на консоль будет выводиться текст 
"Hello world from F#".</p>
<p>И в конце идет третье действие - выход из функции.</p>
<pre class="brush:f#;">0 // возвращаем числовой код выхода из функции</pre>
<p>Функция, которая представляет входную точку в программу, должна возвращать числовой код, как правило, это число 0. Чтобы возвратить из функции число, достаточно указать 
его на последней строке функции.</p>
<p>Кроме собственно кода в файле можно заметить комментарии, которые идет после двух слешей <code>//</code>. При компиляции комментарии игнорируются и служат лишь 
для информационной цели - чтобы видеть, для какой цели служит тот или иной код.</p>
<p>Теперь мы можем запустить на выполнение с помощью клавиши F5 или с панели инструментов, нажав на зеленую стрелку. В итоге при запуске приложения на 
консоль должна быть выведена строка "Hello World from F#".</p>
<img src="./pics/1.8.png" alt="Первая программа на языке F# в Visual Studio" />
<h3>Изменение программы</h3>
<p>Теперь изменим код файла на следующий:</p>
<pre class="brush:f#;">
open System // подключаемое пространство имен

[&lt;EntryPoint&gt;]
let main argv =

    printf "Введите свое имя: "
    let name = Console.ReadLine()  // вводим имя
    printfn "Привет %s" name        // выводим имя на консоль
    0
</pre>
<p>По сравнению с автоматически сгенерированным кодом я внес несколько изменений. Теперь в функции main первой строкой выводится приглашение к вводу.</p>
<pre class="brush:f#;">printf "Введите свое имя: "</pre>
<p>На второй строке определяется переменная <code>name</code>, в которую пользователь вводит информацию с консоли:</p>
<pre class="brush:f#;">let name = Console.ReadLine()</pre>
<p>Для получения ввода с консоли здесь используется встроенный класс Console платформы .NET, который находится в пространстве имен System. 
Это пространство подключено в начале с помощью директивы <code>open</code>. Без подключения пространства имен System я бы не смог использовать 
класс Console и получить введенную с консоли строку. Однако в принципе нам необязательно подключать пространство имен.</p>
<p>Мы можем даже удалить первую строку <code>open System</code>, но в этом случае мы тогда должны будем указать полный путь до 
используемого класса. Например, в нашем случае мы могли бы написать: <code>let name = System.Console.ReadLine() </code>.</p>
<p>Затем введенное имя выводится на консоль:</code>
<pre class="brush:f#;">printfn "Привет %s" name</pre>
<p>Теперь протестируем проект, запустив его на выполнение, также нажав на F5 или зеленую стрелочку.</p>
<img src="./pics/1.9.png" alt="Первое приложение на языке F# в Visual Studio" />
<p>Итак, мы создали первое приложение. Его скомпилированный файл можно найти на жестком диске в папке проекта в каталоге <code>bin\Debug\net5.0</code>. 
Оно будет называться по имени проекта и иметь расширение exe. И затем этот файл можно будет запускать без Visual Studio, а также переносить его 
на другие компьютеры, где установлен .NET 5.</p>
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


<div class="nav"><p><a href="./1.1.php">Назад</a><a href="./">Содержание</a><a href="./2.1.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 1.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 1.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
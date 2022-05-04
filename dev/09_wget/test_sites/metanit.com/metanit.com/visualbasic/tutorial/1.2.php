<!DOCTYPE html>
<html >
<head>
<title>Visual Basic .NET | Первое приложение в Visual Studio</title>
<meta charset="utf-8" />
<meta name="description" content="Первое приложение на языке программирования Visual Basic .NET, Visual Studio">
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
<h2>Начало работы. Visual Studio</h2><div class="date">Последнее обновление: 15.11.2021</div>

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

<p>Создадим первое приложение на языке Visual Basic .NET. Что потребуется для работы с VB.NET? В первую очередь нам нужен текстовый редактор, 
чтобы набирать код программы, и компилятор, который позволит скомпилировать написанный нами код в программу. Ну и конечно нам нужен фреймворк .NET, 
который требуется для выполнения программы. Для облегчения написания программного кода обычно используют специальные среды разработки, которые предоставляют многообразие различных возможностей по созданию программ.</p> 

<p>Для создания приложений на VB.NET будем использовать бесплатную и полнофункциональную среду разработки - Visual Studio Community 2022, которую можно загрузить по следующему адресу: 
<a href="https://www.visualstudio.com/en-us/downloads" rel="nofollow">Microsoft Visual Studio 2022</a></p>
<img src="./pics/1.7.png" alt="Установка Visual Studio 2022" />
<p>После загрузки запустим программу установщика. В открывшемся окне нам будет предложено выбрать те компоненты, которые мы хотим установить вместе Visual Studio. 
Стоит отметить, что Visual Studio - очень функциональная среда разработки и позволяет разрабатывать приложения с помощью множества языков и платформ. 
В нашем случае нам будет интересовать прежде всего VB.NET и .NET.</p>
<p>Чтобы добавить в Visual Studio поддержку проектов для VB.NET и .NET 6, в программе установки среди рабочих нагрузок можно выбрать только пункт 
<span class="b">ASP.NET и разработка веб-приложений</span>. Можно выбрать и больше опций или вообще 
все опции, однако стоит учитывать свободный размер на жестком диске - чем больше опций будет выбрано, соответственно тем больше места на диске будет занято.</p>
<img src="./pics/1.8.png" alt="Установка Visual Studio 2022" />
<p>И при инсталляции Visual Studio на ваш компьютер будут установлены все необходимые инструменты для разработки программ, в том 
числе фреймворк .NET 6.</p>
<p>После завершения установки создадим первую программу. Она будет простенькой. Вначале откроем Visual Studio. На стартовом экране выберем 
<span class="b">Create a new project</span> (Создать новый проект)</p>
<img src="./pics/1.9.png" alt="Создание первого проекта в Visual Studio 2022" />
<p>На следующем окне в качестве типа проекта выберем <span class="b">Console App</span>, то есть мы будем создавать консольное приложение на языке 
VB.NET</p>
<img src="./pics/1.10.png" alt="Проект консольного приложения на VB.NET и .NET 6 в Visual Studio 2022" />
<p>Далее на следующем этапе нам будет предложено указать имя проекта и каталог, где будет располагаться проект.</p>
<img src="./pics/1.1.png" alt="Создание первого приложения на VB.NET" />
<p>В поле <span class="b">Project Name</span> дадим проекту какое-либо название. В моем случае это <span class="b">HelloApp</span>.</p>
<p>На следующем окне Visual Studio предложит нам выбрать версию .NET, которая будет использоваться для проекта. По умолчанию здесь выбрана последняя на данный момент версия - .NET 6.0. 
Оставим и нажмен на кнопку Create (Создать) для создания проекта.</p>
<img src="./pics/1.13.png" alt="Установка VB.NET 16 и .NET 6 в Visual Studio" />
<p>После этого Visual Studio создаст и откроет нам проект:</p>
<img src="./pics/1.2.png" alt="Первый проект на Visual Basic .NET" />
<p>В большом поле в левой части Visual Studio располагается текстовый редактор с подсветкой, в котором открыт автоматически 
сгенерированный код файла <span class="b">Program VB.NET.</p>
<p>Справа находится окно <span class="b">Solution Explorer</span>, в котором можно увидеть структуру нашего проекта. В данном случае у нас 
сгенерированная по умолчанию структура.</p>
<p>В начале идет узел <span class="b">Dependencies</span>. Этот узел содержит сборки dll, которые добавлены в проект по умолчанию. 
Эти сборки как раз содержат классы библиотеки .NET, которые будет использовать проект VB.NET.</p>
<p>Далее идет непосредственно сам файл кода программы - <span class="b">Module1.vb</span>. Как раз этот файл и открыт в текстовом редакторе кода.</p>
<p>Рассмотрим код файла <span class="b">Module1.vb</span>:</p>
<pre class="brush:vb;">
Imports System

Module Program					 'начало объявления модуля
    Sub Main(args As String())				'начало объявления метода
        Console.WriteLine("Hello World!")
    End Sub									'конец объявления метода
End Module						'конец объявления модуля
</pre>
p>В начале файла идет директива <span class="b">Imports</span>, после которой идет название подключаемого пространства имен. 
<span class="b">Пространства имен</span> представляют собой организацию функциональности в общие блоки. 
Например, на первой строке</p>
<pre class="brush:vb;">Imports System</pre>
<p>подключается пространство имен System, которое содержит фундаментальные и базовые классы платформы .NET.</p>
<p>Команда <span class="b">Imports</span> позволяет импортировать функциональность из других, подключенных библиотек. В частности, здесь подключается функциональность 
из пространства имен System.</p>
<p>Хотя VB.NET - это объектно-ориентированный язык программирования, от классического Visual Basica он унаследовал возможность использования 
модулей. И код программы, генерируемый по умолчанию, представляет модуль.</p>
<p>Объявление модуля начинается со слова <span class="b">Module</span>, после которого идет название модуля - в данном случае модуль называется 
Program:</p>
<pre class="brush:vb;">Module Program</pre>
<p>Завершаться объявление модуля должно выражением <span class="b">End Module</span>. А весь непосредственный код программы должен располагаться 
между началом объявления модуля и его завершением.</p>
<p>В модуле по умолчанию определен метод Main - это главный метод:</p>
<pre class="brush:vb;">
Sub Main(args As String())
    Console.WriteLine("Hello World!")
End Sub
</pre>
<p>Программа может содержать множество методов, но среди них будет один главный - это метод Main, через который будут вызываться все остальные методы. 
И метод с данным названием обязательно должен быть в программе.</p>
<p>Метод Main начинается выражением <code>Sub Main</code>, где <span class="b">Sub</span> указывается, что дальше у нас идет метод, который не возвращает никакого значения. Позже 
мы подробнее разберем, что все это значит. И затем идет название - то есть Main.</p> 
<p>Далее в скобках у нас идут параметры метода - <code>args As String()</code> - это массив args, который хранит значения типа <code>String</code>, то 
есть строки. В данном случае они нам пока не нужны, но в реальной программе это те параметры, которые передаются при запуске программы из консоли.</p>
<p>Метод заканчивается выражением <code>End Sub</code>.</p>
<p>Внутри метода располагаются действия, которые этот метод выполняет:</p>
<pre class="brush:vb;">Console.WriteLine("Hello World!")</pre> 
<p>По умолчанию здесь выполняется одно действие - вызов встроенного метода <span class="b">Console.WriteLine()</span>, который выводит строку на консоль. То есть при выполнении 
данной программы на консоль будет выводиться "Hello World!"</p>
<p>Теперь мы можем запустить на выполнение с помощью клавиши F5 или с панели инструментов, нажав на зеленую стрелку. И если вы все сделали правильно, 
то при запуске приложения на консоль будет выведена строка "Hello World!".</p>
<img src="./pics/1.15.png" alt="Первое приложение на C# и .NET Core" />
<p>Теперь изменим весь этот код на следующий:</p>
<pre class="brush:vb;">
Module Program
    Sub Main()
        Console.Write("Введите имя: ")
        Dim name = Console.ReadLine()
        Console.WriteLine($"Привет, {name}")
    End Sub
End Module
</pre>
<p>Здесь в методе Main вначале идет вызов метода <code>Console.Write("Введите имя:")</code>, он, как и метод <code>Console.WriteLine()</code> выводит на консоль некоторую строку.</p>
<p>Затем с помощью оператора <span class="b">Dim</span> определяется переменная <code>name</code></p>
<pre class="brush:vb;">Dim name = Console.ReadLine()</pre>
<p>Этой переменной присваивается результат другог встроенного метода - <span class="b">Console.ReadLine</span>, который
позволяет считать с консоли введенную строку. То есть мы введем в консоли строку (точнее имя), и эта строка окажется в переменой <code>name</code>.</p>
<p>Затем введенное имя выводится на консоль:</p>
<pre class="brush:vb;">Console.WriteLine($"Привет, {name}")</pre>
<p>Чтобы ввести значение переменной name внутрь выводимой на консоль строки, применяются фигурные скобки {}. То есть при выводе строки на консоль 
выражение <code>{name}</code> будет заменяться на значение переменной name - введенное имя.</p>
<p>Однако чтобы можно было вводить таким образом значения переменных внутрь строки, перед строкой указывается знак доллара $.</p>
<p>Запустим проект на выполнение с помощью клавиши F5 и после приглашения к вводу введем какое-нибудь имя:</p>
<img src="./pics/1.3.png" alt="Первая программа на VB.NET в Visual Studio" />
<p>Итак, мы создали первое приложение. Вы его можете найти на жестком диске в папке проекта в каталоге <span class="b">bin\Debug\net6.0</span>. Оно будет называться по имени проекта и иметь расширение exe. 
И затем этот файл можно будет запускать без Visual Studio, а также переносить его на другие компьютеры, где установлен .NET 6.</p>
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


<div class="nav"><p><a href="1.1.php">Назад</a><a href="./">Содержание</a><a href="1.3.php">Вперед</a></p></div></div>
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
<div class="menT" id="menT"><div class="menT" id="menT">
<div class="alig"><b>Руководство по VB.NET</b></div>
<div id="ex1">
	<ul id="browser" class="filetree"> 
				<li class="closed"><span class="folder">Глава 1. Введение в VB.NET</span>
					<ul>
						<li><span class="file"><a href="1.1.php">Язык Visual Basic и платформа .NET</a></span></li>
						<li><span class="file"><a href="1.2.php">Первое приложение в Visual Studio</a></span></li>
						<li><span class="file"><a href="1.3.php">Компиляция в командной строке с .NET CLI</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 2. Основы программирования на Visual Basic.NET</span>
					<ul>
						<li><span class="file"><a href="2.1.php">Типы данных и переменные</a></span></li>
						<li><span class="file"><a href="2.2.php">Преобразования базовых типов данных</a></span></li>
						<li><span class="file"><a href="2.3.php">Операции языка Visual Basic.NET</a></span></li>
						<li><span class="file"><a href="2.4.php">Массивы</a></span></li>
						<li><span class="file"><a href="2.5.php">Условные конструкции</a></span></li>
						<li><span class="file"><a href="2.6.php">Циклы</a></span></li>
						<li><span class="file"><a href="2.7.php">Программа сортировки массива</a></span></li>
						<li><span class="file"><a href="2.8.php">Методы и их параметры</a></span></li>
						<li><span class="file"><a href="2.9.php">Модули</a></span></li>
						<li><span class="file"><a href="2.10.php">Перечисления</a></span></li>
						<li><span class="file"><a href="2.11.php">Структуры</a></span></li>
						<li><span class="file"><a href="2.12.php">Работа с консолью в Visual Basic.NET</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 3. Классы. ООП</span>
					<ul>
						<li><span class="file"><a href="3.1.php">Классы и объекты</a></span></li>
						<li><span class="file"><a href="3.2.php">Модификаторы доступа</a></span></li>
						<li><span class="file"><a href="3.3.php">Свойства</a></span></li>
						<li><span class="file"><a href="3.4.php">Перегрузка методов и операторов</a></span></li>
						<li><span class="file"><a href="3.5.php">Статические члены классов</a></span></li>
						<li><span class="file"><a href="3.6.php">Наследование</a></span></li>
						<li><span class="file"><a href="3.7.php">Абстрактные классы</a></span></li>
						<li><span class="file"><a href="3.8.php">Интерфейсы</a></span></li>
						<li><span class="file"><a href="3.9.php">Преобразование типов</a></span></li>
						<li><span class="file"><a href="3.10.php">Обобщенные типы</a></span></li>
						<li><span class="file"><a href="3.11.php">Делегаты</a></span></li>
						<li><span class="file"><a href="3.12.php">События</a></span></li>
						<li><span class="file"><a href="3.13.php">Анонимные методы и лямбды</a></span></li>
						<li><span class="file"><a href="3.14.php">Обработка исключений</a></span></li>
						<li><span class="file"><a href="3.15.php">Типы значений и ссылочные типы</a></span></li>
						<li><span class="file"><a href="3.16.php">Значение Nothing и Nullable-типы</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 4. Коллекции</span>
					<ul>
						<li><span class="file"><a href="4.1.php">Введение в коллекции</a></span></li>
						<li><span class="file"><a href="4.2.php">Класс ArrayList</a></span></li>
						<li><span class="file"><a href="4.3.php">Список List(Of T)</a></span></li>
						<li><span class="file"><a href="4.4.php">Двухсвязный список LinkedList(Of T)</a></span></li>
						<li><span class="file"><a href="4.5.php">Очередь Queue(Of T)</a></span></li>
						<li><span class="file"><a href="4.6.php">Стек Stack(Of T)</a></span></li>
						<li><span class="file"><a href="4.7.php">Словарь Dictionary(Of T, V)</a></span></li>
						<li><span class="file"><a href="4.8.php">Индексаторы и создание коллекций</a></span></li>
						<li><span class="file"><a href="4.9.php">Интерфейсы IEnumerable и IEnumerator</a></span></li>
						<li><span class="file"><a href="4.10.php">Итераторы. Оператор Yield</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 5. Работа с файлами в Visual Basic.NET</span>
					<ul>
						<li><span class="file"><a href="5.1.php">Работа с дисками</a></span></li>
						<li><span class="file"><a href="5.2.php">Работа с каталогами</a></span></li>
						<li><span class="file"><a href="5.3.php">Файлы. Классы File и FileInfo</a></span></li>
						<li><span class="file"><a href="5.4.php">Чтение и запись файла. Класс FileStream</a></span></li>
						<li><span class="file"><a href="5.5.php">Работа с текстовыми файлами</a></span></li>
						<li><span class="file"><a href="5.6.php">Работа с бинарными файлами</a></span></li>
						<li><span class="file"><a href="5.7.php">Старый доступ к файлам</a></span></li>
						<li><span class="file"><a href="5.8.php">Объект My.Computer.FileSystem</a></span></li>
					</ul>
				</li>
	</ul>
</div></div></div>
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
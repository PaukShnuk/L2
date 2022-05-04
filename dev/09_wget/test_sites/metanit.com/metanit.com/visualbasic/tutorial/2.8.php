<!DOCTYPE html>
<html >
<head>
<title>Методы и их параметры в Visual Basic.NET</title>
<meta charset="utf-8" />
<meta name="description" content="Методы и их параметры в Visual Basic.NET">
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
<h2>Методы и их параметры</h2><div class="date">Последнее обновление: 30.10.2015</div>

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

<p>Методы представляют собой набор операторов, предназначенных для выполнения определенного действия. Методы условно можно разделить на два типа: 
процедуры и функции. Если процедуры просто выполняют определенные действия, то функции возвращают некоторое значение.</p>
<p>Синтаксис процедуры выглядит следующим образом: сначала мы указываем модификатор доступа, затем ключевое слово <span class="b">Sub</span>, после имя процедуры. 
После имени процедуры в скобках объявляем параметры процедуры, однако метод может и не иметь параметров - в таком случае в скобках ничего не указывается. Заканчивается объявление процедуры словами <b>End Sub</b>. С одной процедурой вы уже должны быть знакомы -  это процедура Main, которая и вызывается при запуске модуля:</p>
<pre class="brush : vb;">
Sub Main()
	'Здесь выполняемые действия
End Sub
</pre>
<p>или</p>
<pre class="brush : vb;">
Sub Method1()
	Console.WriteLine("This is a Method1")
End Sub
</pre>
<p>Объявление функции похоже на объявление процедуры, только вместо ключевого слова <span class="b">Sub</span> используется слово <span class="b">Function</span>. 
Второе различие состоит в том, что нам надо указать тип и возвращаемое значение из функции. 
Чтобы указать тип, после скобок с параметрами помещается ключевое слово <span class="b">As</span>, после которого пишется тип, значение которого возвращает функция. 
Если тип не указан, то функция по умолчанию возвращает значение типа <code>Object</code>. Кроме того, в конце функции мы помещаем слово <span class="b">Return</span> и после него указываем возвращаемое значение:</p>
<pre class="brush : vb;">
Function Factorial() As Integer
    Return 1
End Function
</pre>
<p>или</p>
<pre class="brush : vb;">
Function Hello() As String
	Dim s As String = "Hello World"
    Return s
End Function
</pre>
<h3>Использование методов в программе</h3>
<p>Чтобы вызвать метод в программе, надо указать имя метода, а после него в скобках значения для его параметров:</p>
<pre class="brush : vb;">
Sub Main()
	'Присваиваем переменной message строку из функции Hello()
	Dim message As String = Hello()
	Console.WriteLine(message)
	'Выполняем метод Addition, который выводит сообщение на экран
	Addition()
	Console.ReadLine()
End Sub
'Функция, возвращающая строку Hello World
Function Hello() As String
	Dim s As String = "Hello World"
    Return s
End Function
'Метод, который выводит на экран сообщение
Sub Addition()
	Console.WriteLine("2 + 2 = {0}", 2+2)
End Sub
</pre>
<p>Обратите внимание, что поскольку функция возвращает значение, это значение можно присвоить другой переменной.</p>
<h3>Передача параметров</h3>
<p>В вышеприведенном примере мы использовали процедуры и функции без параметров. Теперь посмотрим, как используются параметры. Параметры могут передаваться в методы 
<span class="ii">по значению</span> и <span class="ii">по ссылке</span>. Передача по значению (наиболее распространенный способ передачи параметров) происходит следующим образом:</p>
<pre class="brush : vb;">
Function Addition(x As Integer, y As Integer) As Integer
     Return x + y
End Function
</pre>
<p>Сначала мы указываем имя параметра, а потом после слова <code>As</code> указывается тип параметра (в данном случае оба параметра имеют тип <span class="b">Integer</span>). 
Также передача по значению осуществляется с помощью ключевого слова <span class="b">ByVal</span>, а предыдущее объявление функции будет эквивалентно следующему:</p>
<pre class="brush : vb;">
Function Addition(ByVal x As Integer, ByVal y As Integer) As Integer
    Return x + y
End Function
</pre>
<p>Передача параметров по ссылке происходит также, только вместо ByVal используется ключевое слово <span class="b">ByRef</span>:</p>
<pre class="brush : vb;">
Sub Addition(ByRef x As Integer, ByVal y As Integer)
    x=x+y
End Sub
</pre>
<p>В чем же отличие передачи аргумента по ссылке от передачи по значению? При передаче аргумента по значению метод получает не саму переменную, 
а ее копию. При передаче аргумента по ссылке в метод передается адрес этой переменной в памяти. И если в методе изменяется значение такой аргумента, 
то также изменяется и значение переменной, которая передается на его место:</p>
<pre class="brush : vb;">
Module Module1

    Sub Main()
        'Начальные значения переменных a и b
        Dim a As Integer = 5
        Dim b As Integer = 6
        Console.WriteLine("Начальное значение переменной a  = {0}", a)
        'Передача переменных по значению
        'После выполнения этого кода a = 5, так как мы передали лишь ее копию
        AdditionVal(a, b)
        Console.WriteLine("Переменная a после передачи по значению равна = {0}", a)
        'Передача переменных по ссылке
        'После выполнения этого кода a = 11, так как мы передали саму переменную
        AdditionRef(a, b)
        Console.WriteLine("Переменная a после ссылке по значению равна = {0}", a)

        Console.ReadLine()
    End Sub
    'Передаем аргументы по значению
    Sub AdditionVal(ByVal x As Integer, ByVal y As Integer)
        x = x + y
        Console.WriteLine("x + y = {0}", x)
    End Sub

    'Передаем аргументы по ссылке
    Sub AdditionRef(ByRef x As Integer, ByVal y As Integer)
        x = x + y
        Console.WriteLine("x + y = {0}", x)
    End Sub
End Module
</pre>
<p>В данном случае мы объявляем две переменные <code>a</code> и <code>b</code>. У нас есть два метода, которые принимают два параметра: 
<code>x</code> и <code>y</code>. В обоих методах значение аргумента х приравнивается сумме x и y. Затем мы подставляем на место параметров x и y переменные 
a и b соответственно. В первом случае переменная передается по значению, то есть передается копия этой переменной, и она не изменяется. Во втором случае 
мы передаем указатель на эту переменную в памяти, а поскольку аргумент x изменяется, то передаваемая на его место переменная a тоже изменяется.</p>
<p>Когда же надо передавать аргументы по ссылке, а когда по значению? Если необходимо изменить переменную или даже несколько переменных в одном методе, 
то следует передавать аргументы по ссылке. Также следует передавать по ссылке большие объекты, даже если не надо их изменять, поскольку создание их копии 
снижает производительность программы.</p>
<h4>Необязательные параметры</h4>
<p>В методах также могут использоваться и необязательные параметры. Чтобы объявить необязательный параметр, надо использовать ключевое слово 
<span class="b">Optional</span>. Для такого параметра необходимо при объявлении метода объявить значение по умолчанию. Также надо учесть, что все последующие параметры 
после необязательного также должны быть необязательными. Например:</p>
<pre class="brush : vb;">
Function Add(ByVal x As Integer, ByVal y As Integer, Optional z As Integer = 3, Optional s As Integer = 5) As Integer
    Return z + x + y + s
End Function
</pre>
<p>Тогда при вызове этой функции мы можем не передавать значения для двух последних параметров:</p>
<pre class="brush : vb;">
Sub Main()
	' Не передаем значения для дополнительных параметров
	' Оставшиеся параметры имеют значения по умолчанию
    Add(3, 10)
	'Передаем значение для одного дополнительного параметра
	' Другой использует значение по умолчанию
    Add(1, 1, 1)
End Sub
</pre>
<h4>Передача аргументов по имени</h4>
<p>В предыдущих примерах мы передавали значения для параметров в порядке объявления этих параметров в методе. Однако можно также передавать 
значения для параметров по имени. При этом порядок передачи значений не зависит от порядка следования параметров. Для этого в вызове метода мы указываем имя параметра, потом двоеточие и знак равенства и затем значение для 
этого параметра. К примеру, передадим значения для параметров к вышеопределенной функции <code>Add</code>:</p>
<pre class="brush : vb;">
Sub Main()
	' Необязательный параметр s использует значение по умолчанию
    Add(x:=3, z:=6, y:=8)
End Sub
</pre>
<h3>Рекурсивные функции</h3>
<p>Особо следует остановиться на рекурсивных функциях  - это такая функция, которая вычисляется через саму себя. Посмотрим применение рекурсии в программе по вычислению факториала:</p>
<pre class="brush : vb;">
Function Factorial(x As Integer) As Integer
    If (x = 1) Then
        Return 1
    Else
        Return x * Factorial(x - 1)
    End If
End Function
</pre>
<p>Итак, у нас в данном случае задается условие, что если вводимое число не равно 1, то мы умножаем данное число на результат этой же функции, 
в которую в качестве параметра передается число x-1. И так, пока не дойдем того момента, когда значение параметра не будет равно единице.</p>
<p>Еще одним примером рекурсивной функции может служить функция для вычисления числа Фибоначчи. n-й член последовательности Фибоначчи определяется по формуле: 
f(n)=f(n-1) + f(n-2), причем f(0)=0, f(1)=1.</p>
<pre class="brush : vb;">
Function Fibbonachi(x As Integer) As Integer
    If x = 0 Then
        Return 0
    ElseIf x = 1 Then
        Return 1
    Else
        Return Fibbonachi(x - 1) + Fibbonachi(x - 2)
    End If
End Function
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


<div class="nav"><p><a href="2.7.php">Назад</a><a href="./">Содержание</a><a href="2.9.php">Вперед</a></p></div></div>
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
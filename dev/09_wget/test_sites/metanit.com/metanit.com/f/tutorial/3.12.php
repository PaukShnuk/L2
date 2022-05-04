<!DOCTYPE html>
<html >
<head>
<title>F# | Абстрактные классы</title>
<meta charset="utf-8" />
<meta name="description" content="Абстрактные классы, методы и свойства в языке программирования F#, оператор abstract и override, релизация абстрактных методов и свойств в производных классах, атрибут AbstractClass">
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
<h2>Абстрактные классы</h2><div class="date">Последнее обновление: 05.08.2021</div>

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

<p>Классы обычно представляют некий план определенного рода объектов или сущностей. Например, мы можем определить класс Car для преставления машин или 
класс Person для представления людей, вложив в эти классы соответствующие свойства, поля, методы, которые будут описывать данные объекты.  
Однако некоторые сущности, которые мы хотим выразить с помощью языка программирования, могут не иметь конкретного воплощения. Например, 
в реальности не существует геометрической фигуры как таковой. Есть круг, прямоугольник, квадрат, но просто фигуры нет. Однако же и круг, и прямоугольник имеют что-то общее и являются фигурами.</p>

<p>Для реализации подобных сущностей, которые не имеют конкретного воплощения, предназначены абстрактные классы. Как правило, 
абстрактные классы объявляют некоторые компоненты - методы и свойства без реализации А реализацию 
для этих свойств и методов предоставляют производные классы.</p>
<p>Стоит отметить, что восприятие или рассмотривание сущностей как абстрактных или конкретных во многом зависит от задачи и угла зрения, для каких-то задач 
одни сущности могут быть представлены в виде конкретных классов, а в других задачах те ще сущности можно определить в виде абстрактных классов.</p>
<p>Абстрактный класс определяется с помощью атрибута <span class="b">[&lt;AbstractClass&gt;]</span></p>
<pre class="brush:f#;">
[&lt;AbstractClass&gt;]
type имя_класса = тело класса
</pre>
<p>Рассмотрим на примере абстрактного класса, который представляет геометрическую фигуру:</p>
<pre class="brush:f#;">
[&lt;AbstractClass&gt;]
type Shape() = class end
</pre>
<p>Отличительной особенностью абстрактных классов является то, что мы не можем использовать конструктор абстрактного класса для создания его 
объекта. Например, следующим образом:</p>
<pre class="brush:f#;">
[&lt;AbstractClass&gt;]
type Shape() = class end

let someShape = Shape()	// ! Ошибка
</pre>
<p>Тем не менее абстрактные классы полезны тем, что могут определять некоторый общий функционал для классов наследников. Например, </p>
<pre class="brush:f#;">
[&lt;AbstractClass&gt;]
type Shape(startX, startY) = class 
    let mutable x = startX
    let mutable y = startY
	member _.printStartPoint()= printfn $"x: {x}  y: {y}"
end

type Rectangle(width, height, startX, startY) = 
    inherit Shape(startX, startY)
    member val Width = width
    member val Height = height

type Circle(radius, startX, startY) = 
    inherit Shape(startX, startY)
    member val Radius = radius

let rectangle = Rectangle(50, 40, 4, 5)
rectangle.printStartPoint()

let circle = Circle(10, 20,7)
circle.printStartPoint()
</pre>
<p>Здесь определен абстрактный класс фигуры Shape. Он имеет два поля, которые хранят координаты точки начала фигуры (например, для окружности это может быть координаты центра окружности, 
а для прямоугольника - координаты верхнего левого угла)</p>
<p>Этот класс наследуется классами Rectangle и Circle, которые представляют соответственно прямоугольник и окружность. 
Каждый из этих классов может иметь какие-то свои дополнительные свойства. Например, в классе Circle можно определить свойство/поле для хранения радиуса. 
А класс Rectangle мог бы иметь дополнительные свойства для ширины и высоты и т.д. То есть каждый конкретный тип сообщений может иметь свои отличительные признаки. 
Но оба этих класса будут иметь общие поля для хранения координат начальной точки, а также метод, который выводит эти координаты. И для хранения общего функционала мы как раз можем определить абстрактный класс.</p>
<h3>Абстрактные методы и свойства</h3>
<p>Отличительной чертой абстрактных классов является то, что они могут иметь абстрактные методы и свойства без реализации. 
Абстрактный метод должен быть определен с ключевым словом <span class="b">abstract</span>:</p>
<pre class="brush:f#;">abstract member имя_метода : тип_функции</pre>
<p>После операторов <code>abstract member</code> идет имя метода, после которого через двоеточие указывает тип этого метода - представляемый им тип функции.</p>
<p>В производном классе мы должны определить для этого метода реализацию с помощью ключевого слова <span class="b">override</span>:</p>
<pre class="brush:f#;">override this.имя_метода параметры_метода = тело_метода</pre>
<p>Например, в примере выше и прямоугольник, и окружность 
могут иметь площадь и соответственно метод для вычисления площади. Но каждый из них по своему определяет вычисление площади. Так, для прямоугольника 
это произведение ширины на высоту, а для окружности - произведение квадрата радиуса на число PI. И мы можем определить этот метод как абстрактный, но без конкретной реализации в абстрактном классе</p>
<pre class="brush:f#;">
[&lt;AbstractClass&gt;]
type Shape(startX, startY) = class 
    let mutable x = startX
    let mutable y = startY
    member _.printStartPoint()= printfn $"x: {x}  y: {y}"

    abstract CalculateArea: unit-&gt;float
end

type Rectangle(width, height, startX, startY) = 
    inherit Shape(startX, startY)
    member val Width = width
    member val Height = height
    override this.CalculateArea() = this.Width * this.Height

type Circle(radius, startX, startY) = 
    inherit Shape(startX, startY)
    member val Radius = radius
    override this.CalculateArea() = this.Radius * System.Math.PI

let printArea(shape: Shape) = printfn $"Area = {shape.CalculateArea()}"

let rectangle = Rectangle(50.0, 40.0, 4, 5)
let circle = Circle(10.0, 20, 7)

printArea(rectangle)     // Area = 2000
printArea(circle)        // Area = 31.41.........
</pre>
<p>Здесь в классе Shape определен абстрактный метод <code>CalculateArea</code>, который принимает параметр типа <code>unit</code> и возвращает значение типа 
<code>float</code>. Причем этот метод не имеет реализации. Конкретную реализацию предоставляют классы-наследники Rectangle и Circle.</p>
<p>Если базовый класс определяет абстрактный метод, то классы-наследники обязаны реализовать этот метод (кроме тех случаев, когда классы-прямые наследники сами являются абстрактными).</p>
<p>Также стоит отметить, что абстрактный метод можно определить только в абстрактном классе.</p>
<h3>Абстрактные свойства</h3>
<p>Подобным образом также можно определять абстрактные свойства. Они определяются с ключевым словом <span class="b">abstract</span>:</p>
<pre class="brush:f#;">abstract member имя_свойства : тип_данных with get, set</pre>
<p>После операторов <code>abstract member</code> идет имя свойства, после которого через двоеточие указывается тип свойства - тип данных, 
которые хранит это свойство. Затем после оператора <span class="b">with</span> указываются методы доступа (get и set), которые имеет класс. 
Можно определить свойство как с обоими методами - get и set, так и с одним из них.</p>
<p>В производном классе для абстрактного свойства определяется реализация с помощью ключевого слова <span class="b">override</span>:</p>
<pre class="brush:f#;"></pre>
<p>Стоит отметить, что абстрактные свойства могут быть только в абстрактных классах. Кроме того, как и с абстрактными методами, неабстрактные 
классы-наследники обязаны предоставить для этого свойства реализацию.</p>
<p>Например, изменим предыдущий пример и вынесем вычисление площади в свойство:</p>
<pre class="brush:f#;">
[&lt;AbstractClass&gt;]
type Shape(startX, startY) = class 
    let mutable x = startX
    let mutable y = startY
    member _.printStartPoint()= printfn $"x: {x}  y: {y}"

    abstract Area: float with get
end

type Rectangle(width, height, startX, startY) = 
    inherit Shape(startX, startY)
    member val Width = width
    member val Height = height
    override this.Area = this.Width * this.Height

type Circle(radius, startX, startY) = 
    inherit Shape(startX, startY)
    member val Radius = radius
    override this.Area = this.Radius * System.Math.PI

let printArea(shape: Shape) = printfn $"Area = {shape.Area}"

let rectangle = Rectangle(50.0, 10.0, 4, 5)
let circle = Circle(10.0, 20, 7)

printArea(rectangle)     // Area = 500
printArea(circle)        // Area = 31.41.........
</pre>
<p>В данном случае класс Shape определяет свойство <code>Area</code>, которое имеет только метод <code>get</code>, то есть доступно только для чтения. Соответственно в классах наследниках 
нам надо определить подобное свойство, которое имеет только метод <code>get</code></p>

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


<div class="nav"><p><a href="./3.10.php">Назад</a><a href="./">Содержание</a><a href="./3.13.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 3.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 3.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
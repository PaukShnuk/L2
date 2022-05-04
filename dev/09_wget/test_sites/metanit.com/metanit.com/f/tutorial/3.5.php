<!DOCTYPE html>
<html >
<head>
<title>F# | Свойства</title>
<meta charset="utf-8" />
<meta name="description" content="Свойства классов в языке программирования F#, определение свойств и оператор member, операторы with и and, методы доступа get и set">
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
<h2>Свойства</h2><div class="date">Последнее обновление: 31.07.2021</div>

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

<p>В типах в F# также можно определять <span class="b">свойства</span>. Они позволяют уравлять доступом к полям типа. Формальное определение свойства:</p>
<pre class="brush:f#;">
member [модификатор_доступа] [this.]Имя_Свойства
with [модификатор_доступа] get() =
    действия, выполняемые при получении значения
and [модификатор_доступа] set parameter =
    действия, выполняемые при присвоении значения
</pre>
<p>Определение свойства начинается с оператора <span class="b">member</span>, за которым после необязательного модификатора доступа идет название свойства.</p>
<p>Свойство манипулирует некоторым значением. Это значение можно задать явно с помощью поля класса. Но оно также может установлено неявно. И для управления этим значением код свойства фактически разбивается на две части.</p>
<p>Первая часть свойства предваряется ключевым свойством <span class="b">with</span>, а вторая - словом <span class="b">and</span>.</p>
<p>В одной части свойства определяется выражение <span class="b">get</span>, которое возвращает значение. Фактически это специальный метод (метод доступа), который имеет один параметр типа unit. А после знака равно идет возвращаемое значение:</p>
<pre class="brush:f#;">get() = возвращаемое_значение</pre>
<p>В другой части свойства определяется выражение <span class="b">set</span>, которое устанавливает значение. Это также специальный метод, 
который имеет один параметр - через этот параметр передается устанавливаемое значение. А после знака равно идет операция присвоения значения:</p>
<pre class="brush:f#;">set parameter = значение &lt; parameter</pre>
<p>Определим простейшее свойство:</p>
<pre class="brush:f#;">
type Person(name, _age)  = 

    let mutable age = _age
    member _.Age
        with get() = age 
        and set(value) = age &lt;- value

    member _.Print() = printfn $"Name: {name}  Age: { age }"
 
let tom = Person("Tom", 34)
tom.Print()     // Name: Tom  Age: 34

// получаем значение свойства Age
let tomAge = tom.Age
printfn $"Age: {tomAge}"

// изменяем значение свойства Age
tom.Age &lt;- 36
tom.Print()     // Name: Tom  Age: 36
</pre>
<p>Здесь определено свойство <code>Age</code>. Поскольку в этом свойстве не используется обращение к функциональности текущего объекта, то вместо 
<code>this.Age</code> указано <code>_.Age</code>.</p>
<p>Первая часть свойства - выражение <code>get</code> возвращает значение поля <code>age</code>:</p>
<pre class="brush:f#;">get() = age </pre>
<p>Вторая часть - выражение <code>set</code> устанавливает значение поля <code>age</code>:</p>
<pre class="brush:f#;">set(value) = age &lt;- value</pre>
<p>Здесь через параметр <code>value</code> передается устанавливаемое значение. Фактически в обоих случаях свойство Age является надстройкой над полем <code>age</code>.</p>
<p>Далее в программе мы можем получить значение этого свойства:</p>
<pre class="brush:f#;">let tomAge = tom.Age</pre>
<p>Фактически в данном случае будет срабатывать метод <code>get</code>.</p>
<p>И также мы можем установить значение свойства:</p>
<pre class="brush:f#;">tom.Age &lt;- 36</pre>
<p>Фактически здесь срабатывает метод <code>set</code>, а значение справа от оператора <code>&lt;</code> - это те данные, которые передаются в set через параметр value.</p>
<p>Консольный вывод программы:</p>
<div class="console"><pre class="consoletext">
Name: Tom Age: 34
Age: 34
Name: Tom Age: 36
</pre></div>
<p>При этом методы get/set могут содержать гораздо более сложную логику:</p>
<pre class="brush:f#;">
type Person(name, _age)  = 

    let mutable age = _age

    member _.Age
        with get() = 
            printfn "Получение значения"
            age 
        and set value = 
            printfn $"Установка значения. Передано значение: {value}"
            if value &gt; 0 && value &lt; 110 then
                age &lt;- value
            
    member _.Print() = printfn $"Name: {name}  Age: { age }"
 
let tom = Person("Tom", 34)
printfn $"Age: {tom.Age}"   // Age: 34

// изменяем значение свойства Age
tom.Age &lt;- 36
printfn $"Age: {tom.Age}"    // Age: 36

// изменяем значение свойства Age
tom.Age &lt;- 199
printfn $"Age: {tom.Age}"    // Age: 36
</pre>
<p>Здесь в методах get/set дополнительно выводятся диагностические сообщения. Кроме того, в методе <code>set</code> мы можем проконтролировать 
установку значения, например, не устанавливать, если переданное значение некорретно. Так, в данном случае мы устанавливаем значение, если только оно в диапазоне от 0 до 110:</p>
<pre class="brush:f#;">
if value &gt; 0 && value &lt; 110 then
	age &lt;- value
</pre>
<p>Соответственно следующее выражение</p>
<pre class="brush:f#;">tom.Age &lt;- 199</pre>
<p>Никак не повлияет на значение свойства Age.</p>
<p>Консольный вывод программы:</p>
<div class="console"><pre class="consoletext">
Получение значения
Age: 34
Установка значения. Передано значение: 36
Получение значения
Age: 36
Установка значения. Передано значение: 199
Получение значения
Age: 36
</pre></div>
<h3>Свойства для чтения</h3>
<p>Выше использовались полные свойства, то есть такие, которые имели и метод <code>get</code> и метод <code>set</code>. Однако мы можем ограничится только одним из этих методов. 
Если свойство имеет только метод <span class="b">get</span>, то это свойство достуно только для чтения, то есть изменять его значение нельзя:</p>
<pre class="brush:f#;">
type Person(_name, _age)  = 

    let mutable age = _age
    let name = _name

    member _.Age
        with get() = age 
        and set value = 
            if value &gt; 0 && value &lt; 110 then
                age &lt;- value

     member _.Name
        with get() = name 
 
let tom = Person("Tom", 34)
printfn $"Name: {tom.Name}"   // Name: Tom
// tom.Name &lt;- "Bob"   // Так нельзя - свойство Name доступно только для чтения
</pre>
<p>Здесь свойство <code>Name</code> доступно только для чтения.</p>
<p>Также мы можем сократить его определение:</p>
<pre class="brush:f#;">member _.Name = name</pre>
<h3>Свойства только для записи</h3>
<p>Если свойство имеет только метод <span class="b">set</span>, то оно доступно только для записи - мы можем установить его значение, а получить - нет. 
Например, сделаем свойство Age доступным только для записи:</p>
<pre class="brush:f#;">
type Person(_name, _age)  = 

    let mutable age = _age
    let name = _name

    member _.Age
        with set value = 
            if value &gt; 0 && value &lt; 110 then
                age &lt;- value

     member _.Name = name 

     member this.Print() = printfn $"Name: {this.Name}  Age: { age }"
 
let tom = Person("Tom", 34)
// изменяем значение свойства Age
tom.Age &lt;- 36
// printfn $"Age: {tom.Age}"    // Так нельзя - свойство Age доступно только для записи
tom.Print()     // Name: Tom  Age: 36
</pre>
<p>Стоит отметить, что даже в методах класса мы не можем получить значение свойства Age.</p>
<h3>Модификаторы доступа</h3>
<p>По умолчанию свойства имеют модификатор доступа <code>public</code>, но мы можем установить другой модификатор - он указывается после слова <code>member</code> и перед именем свойства:</p>
<pre class="brush:f#;">
member internal _.Age
        with get() = age
        and set value = 
            if value &gt; 0 && value &lt; 110 then
                age &gt;- value
</pre>
<p>Также можно установить разные модификаторы отдельно для методов set и get:</p>
<pre class="brush:f#;">
type Person(_name, _age)  = 

    let mutable age = _age
    let name = _name
	
	member  _.Age
        with internal get() = age
        and private set value = 
            if value &gt; 0 && value &lt; 110 then
                age &gt;- value
				
	member _.Name = name 
</pre>
<p>В данном случае получить значение свойства Age можно в любом месте текущего проекта, а установить свойство Age мы сможем только внутри класса Person. </p>
<h3>Автосвойства</h3>
<p>Вернемся к первому определению свойства <code>Age</code></p>
<pre class="brush:f#;">
let mutable age = _age
    member _.Age
        with get() = age 
        and set(value) = age &lt;- value
</pre>
<p>Это довольно часто встречаемая конструкция, когда свойство просто возвращает или устанавливает значение поля. И чтобы упростить построение подобных конструкций в 
F# такой инструмент как <span class="b">автосвойства</span>. Они определяются с помощью комбинации ключевых слов <span class="b">member val</span>:</p>
<pre class="brush:f#;">member val название_свойства = начальное_значение with get, set</pre>
<p>Следует учитывать, что автоматические свойства должны быть определены до любых других компонентов класса, в том числе значений let и выражений do.</p>
<p>Определим пару автосвойств:</p>
<pre class="brush:f#;">
type Person(name, age)  = 

    member val Name = name with get, set
    member val Age = age with get, set
            
    member this.Print() = printfn $"Name: {this.Name}  Age: { this.Age }"
 
let tom = Person("Tom", 34)
printfn $"Age: {tom.Age}"   // Age: 34

// изменяем значение свойства Age
tom.Age &lt;- 36
printfn $"Age: {tom.Age}"    // Age: 36
</pre>
<p>Здесь определены два автосвойства: Name и Age. В качестве начальных значений они получают значения параметров первичного конструктора. Для каждого автосвойства 
компилятор автоматически будет создавать поле для хранения значения свойств. А для обращения к 
этим свойствам в коде класса применяется ссылка на текущий объект - <code>this</code>.</p>
<p>Также мы можем определить автосвойство только для чтения:</p>
<pre class="brush:f#;">member val Name = name</pre>
<p>Если мы хотим применить модификатор доступа, то его можно определить только для всего автосвойства:</p>
<pre class="brush:f#;"> member val internal Age = age with get, set</pre>
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


<div class="nav"><p><a href="./3.4.php">Назад</a><a href="./">Содержание</a><a href="./3.6.php">Вперед</a></p></div></div>
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
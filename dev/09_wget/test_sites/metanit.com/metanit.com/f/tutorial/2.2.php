<!DOCTYPE html>
<html >
<head>
<title>F# | Типы данных и выведение типа</title>
<meta charset="utf-8" />
<meta name="description" content="Типы данных и выведение типа в языке программирования F#. int, bool, uint, byte, sbyte, int16, uint16, int64, uint64, unit, float, double, decimal, float32, string, char">
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
<h2>Типы данных и выведение типа</h2><div class="date">Последнее обновление: 20.07.2021</div>

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

<p>В F# каждые данные имеют свой тип. Однако в прошлой теме, когда мы рассматривали определение значений, мы никаким образом не соприкасались с типами данных, никак их явным образом 
не указывали. Например:</p>
<pre class="brush:f#;">
let name = "Tom"
printfn "%s" name
</pre>
<p>Однако компилятор F# достаточно умный, чтобы самостоятельно неявно вывести тип значений на основе присваиваемых им данных. Так, в примере выше значение 
<code>name</code> представляет тип <span class="b">string</span>, поскольку значению присваивается строка - некоторый набор символов в двойных кавычках. И в реальности мы 
могли бы также явным образом указать тип данных:</p>
<pre class="brush:f#;">
let name: string = "Tom"
printfn "%s" name
</pre>
<p>Тип данных указывается после названия значения через двоеточие. Но опять же в данном случае указание типа данных избыточно, поскольку компилятор 
сам может определить тип.</p>
<p>Какие типы данных предлагает язык F#? Данный язык программирования в основном полагается на систему типу, которая является общей для платформы .NET. Итак, рассмотрим 
базовые типы данных в языке F#:</p>
<ul>
<li><p><span class="b">bool</span>: хранит значение <code>true</code> (истина) или false (ложь).</p>
<pre class="brush:f#;">
let isMarried = false
let isEnabled: bool = true
</pre>
</li>
<li><p><span class="b">byte</span>: хранит целое число от 0 до 255.</p>
<pre class="brush:f#;">
let age: byte = 37uy
printfn "Age: %d" age

let number = 112uy
printfn "Number: %d" number
</pre>
<p>Стоит отметить, что поскольку в F# много числовых типов данных, то чтобы различать значения этих типов, после числа указывается суффикс. Например, для типа <span class="b">byte</span> 
применяется суффикс <code>uy</code>, который ставится после числа: <code>112uy</code></p></li>
<li><p><span class="b">sbyte</span>: хранит целое число от -128 до 127.</p>
<pre class="brush:f#;">
let rate: sbyte = 13y
printfn "Rate: %d" rate

let number = 112y
printfn "Number: %d" number
</pre>
<p>Применяет суффикс <code>y</code></p>
</li>
<li><p><span class="b">int16</span>: хранит целое число от -32768 до 32767.</p>
<pre class="brush:f#;">
let rate: int16 = 13s
printfn "Rate: %d" rate

let number = 112s
printfn "Number: %d" number
</pre>
<p>Применяет суффикс <code>s</code></p></li>
<li><p><span class="b">uint16</span>: хранит целое число от 0 до 65535.</p>
<pre class="brush:f#;">
let rate: uint16 = 13us
printfn "Rate: %d" rate

let number = 112us
printfn "Number: %d" number
</pre>
<p>Применяет суффикс <code>us</code></p></li>
<li><p><span class="b">int</span>: хранит целое число от -2 147 483 648 до 2 147 483 647.</p>
<pre class="brush:f#;">
let rate: int = 13
printfn "Rate: %d" rate

let number = 112
printfn "Number: %d" number
</pre>
<p>Не использует суффиксов. Все целые числа без суффиксов по умолчанию рассматриваются как данные типа <span class="b">int</span></p>
</li>
<li><p><span class="b">uint</span>: хранит целое число от 0 до 4 294 967 295.</p>
<pre class="brush:f#;">
let rate: uint = 13u
printfn "Rate: %d" rate

let number = 112u
printfn "Number: %d" number
</pre>
<p>Применяет суффикс <code>u</code></p></li>
<li><p><span class="b">int64</span>: хранит целое число от -9 223 372 036 854 775 808 до 9 223 372 036 854 775 807.</p>
<pre class="brush:f#;">
let rate: int64 = 13L
printfn "Rate: %d" rate

let number = 112L
printfn "Number: %d" number
</pre>
<p>Применяет суффикс <code>L</code></p></li>
<li><p><span class="b">uint64</span>: хранит целое число от 0 до 18 446 744 073 709 551 615.</p>
<pre class="brush:f#;">
let rate: uint64 = 13UL
printfn "Rate: %d" rate

let number = 112UL
printfn "Number: %d" number
</pre>
<p>Применяет суффикс <code>UL</code></p></li>
<li><p><span class="b">nativeint</span>:  нативный указатель на целое число со знаком. Например, <code>nativeint 1</code></p>
<pre class="brush:f#;">
let rate: nativeint = nativeint 13
printfn "Rate: %d" rate

let number = nativeint 112
printfn "Number: %d" number
</pre>
</li>
<li><p><span class="b">unativeint</span>:  нативный указатель на целое число без знака. Например, <code>unativeint 1</code></p>
<pre class="brush:f#;">
let rate: unativeint = unativeint 13
printfn "Rate: %d" rate

let number = unativeint 112
printfn "Number: %d" number
</pre></li>
<li><p><span class="b">float, double</span>: число с плавающей точкой, которое занимает в памяти 64 бит.</code></p>
<pre class="brush:f#;">
let rate: float = 13.6
printfn "Rate: %f" rate

let number: double = 35.07
printfn "Number: %f" number

let height = 168.3
printfn "Height: %f" height
</pre>
<p>В качестве разделителя целой и дробной частей используется точка. Все дробные числа в F# по умолчанию воспринимаются как данные типа <span class="b">double/float</span></p>
<p>Для вывода дробных чисел на консоль с помощью функции <code>printfn</code> применяется спецификатор <code>%f</code>.</p></li>
<li><p><span class="b">float32, single</span>: число с плавающей точкой, которое занимает в памяти 32 бита.</p>
<pre class="brush:f#;">
let rate: float32 = 13.6f
printfn "Rate: %f" rate

let number: single = 35.07f
printfn "Number: %f" number

let height = 168f
printfn "Height: %f" height
</pre>
<p>Применяет суффикс <code>f</code></p></li>

<li><p><span class="b">decimal</span>: дробное число, которое имеет как минимум 28 значимых разрядов.</p>
<pre class="brush:f#;">
let rate: decimal= 13.6m
printfn "Rate: %f" rate

let number = 35m
printfn "Number: %f" number
</pre>
<p>Применяет суффикс <code>m</code></p></li>
<li><p><span class="b">char</span>: представляет отдельный символ Unicode, заключенный в одинарные кавычки. Например, <code>'c'</code></p>
<pre class="brush:f#;">
let a: char = 'a'
printfn "%c" a

let d  = '5'
printfn "%c" d
</pre>
<p>Для вывода символов на консоль с помощью функции <code>printfn</code> применяется спецификатор <code>%c</code>.</p></li>
</li>
<li><p><span class="b">string</span>: представляет строку символов Unicode в двойных кавычках. Например, <code>"str"</code></p>
<pre class="brush:f#;">
let name: string = "Tom"
printfn "Name: %s" name
</pre>
<h4>Интерполяция строк</h4>
<p>Выше мы рассмотрели базовые типы F# и увидели, что, чтобы вывести на консоль значение того или иного типа, функция <code>printfn</code> принимает определенный спецификатор: 
<code>%s</code> для строк, <code>%d</code> для целых чисел, <code>%f</code> для дробных символов, <code>%c</code> для символов. С помощью этих спецификаторов 
мы можем включить строку соответствующие данные. Например, возьмем следующую программу:</p>
<pre class="brush:f#;">
let name = "Tom"
let age = 37
let height = 1.68

printfn "name: %s  age: %d  height: %f" name age height
</pre>
<p>Здесь функция <code>printfn</code> выводит три значения: name, age и height. Они представляют разные типы, и для их вклеивания в строку применяются разные спецификаторы. 
Все значения указываются после строки, в которую они встраиваются. Так, вместо первого спецификатора - <code>%s</code> будет вставляться первое значение, которое должно представлять строку - в данном случае значение name. 
Вместо второго спецификатора будет вставляться второе значение, которое должно представлять целое число - здесь значение age. И так далее.</p>
<p>Тем не менее есть более интуитивный подход, который представляет интерполяция строк. <span class="b">Интерполяция строк</span> позволяет встроить в строку различные данные. 
Так, перепишем предыдущий пример с помощью интерполяции строк:</p>
<pre class="brush:f#;">
let name = "Tom"
let age = 37
let height = 1.68

printfn $"name: {name}  age: {age}  height: {height}"
</pre>
<p>Для создании интерполированной строки перед ней указывается символ доллара <span class="b">$</span>. Далее, чтобы встроить внутрь строки какое-нибудь значение, 
внутри строки в фигурных скобках указывается встраиваемое значение. Например, в примере выше на место <code>{name}</code> будет встраиваться значение <code>name</code>, а на место 
<code>{age}</code> - значение age.</p>
<p>Стоит отметить, что данная возможность неограничена функцией <code>printfn()</code>, а позволяет впринципе определить любую строку:</p>
<pre class="brush:f#;">
let name = "Tom"
let age = 37
let user = $"User name: {name}  User age: {age}"

printfn $"{user}"
</pre>
<p>В данном случае определяется значение <code>user</code>, которая представляет интерполированную строку, но по сути представляет тот же 
тип string и может использоваться также, как и любая другая строка.</p>
</li>
<li><p><span class="b">unit</span>: представляет отсутствие текущего значения. Обычно применяется в ситуациях, в которых нужно наличие некоторого значения, 
но в то же время конкретное значение не важно и не имеет смысла. Для данного типа в F# предусмотрено специальное значение - <span class="b">()</span> (скобки):</p>
<pre class="brush:f#;">
let undefined: unit = ()
let not = ()
</pre></li>
</ul>
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
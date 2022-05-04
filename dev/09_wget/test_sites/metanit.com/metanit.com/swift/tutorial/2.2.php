<!DOCTYPE html>
<html >
<head>
<title>Swift | Числовые типы. Операции с числами</title>
<meta charset="utf-8" />
<meta name="description" content="Числовые типы и литералы в языке программирования Swift в iOS.  Int, Double. Арифметические операции, десятичная, шестнадцатеричная, восьмеричная форма чисел">
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
<h2>Числовые типы. Операции с числами</h2><div class="date">Последнее обновление: 25.12.2017</div>

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

<p>Числовые данные представлены следующими типами:</p>
<ul>
<li><p><span class="b">Int8</span>: целое число со знаком размером не более 8 бит (от -128 до 127)</p></li>
<li><p><span class="b">UInt8</span>: целое положительное число размером не более 8 бит  (от 0 до 255)</p></li>
<li><p><span class="b">Int16</span>: целое число со знаком размером не более 16 бит (от -32768 до 32767)</p></li>
<li><p><span class="b">UInt16</span>: целое положительное число размером не более 16 бит (от 0 до 65535)</p></li>
<li><p><span class="b">Int32</span>: целое число со знаком размером не более 32 бита  (от -2147483648 до 2147483647)</p></li>
<li><p><span class="b">UInt32</span>: целое положительное число размером не более 32 бита (от 0 до 4294967295)</p></li>
<li><p><span class="b">Int64</span>: целое число со знаком размером не более 64 бита (от -9223372036854775808 до 9223372036854775807)</p></li>
<li><p><span class="b">UInt64</span>: целое положительное число размером не более 64 бита  (от 0 до 18446744073709551615)</p></li>
<li><p><span class="b">Int</span>: целое число со знаком, например, 1, -30, 458. На 32-разрядных платформах эквивалентен Int32, а на 64-разрядных - Int64</p></li>
<li><p><span class="b">UInt</span>: целое положительное число, например, 1, 30, 458. На 32-разрядных платформах эквивалентен UInt32, а на 64-разрядных - UInt64</p></li>
<li><p><span class="b">Float</span>: 32-битное число с плавающей точкой, содержит до 6 чисел в дробной части</p></li>
<li><p><span class="b">Double</span>: 64-битное число с плавающей точкой, содержит до 15 чисел в дробной части</p></li>
<li><p><span class="b">Float80</span>: 80-битное число с плавающей точкой</p></li>
</ul>
<p>В дополнение фреймворк Core Graphics поддерживает тип <span class="b">CGFloat</span>, 
чей размер зависит от архитектуры и может быть аналогичен либо типу Float, либо типу Double.</p>
<p>Для работы с числами в Swift можно использовать целочисленные литералы (типа 2, 3, 78) и литералы чисел с 
плавающей точкой, в которых разделителем между целой и дробной частью является точка, например, 1.2, 3.14, 0.025. При этом все целочисленные 
литералы рассматриваются как значения типа Int, а все дробные литералы - как значения типа Double.</p>
<pre class="brush:swift;">
let a = 2	// Int
let b = 2.0	// Double
</pre>
<p>Если мы хотим присвоить числовой литерал переменным или константам типов, отличных от Int и Double, то компилятор 
может автоматически выполнять преобразование:</p>
<pre class="brush:swift;">
let n : Int16 = 10  // неявное преобразование от Int к Int16
let x : Float = 3.14 // неявное преобразование от Double к Float
</pre>
<p>Для числовых типов большое значение имеет размерность, то есть количество бит, которое данный тип содержит. Например, тип <code>UInt8</code> не может 
хранить число больше чем 255. Поэтому у нас не получится присвоить переменной этого типа, например, число 1000:</p>
<pre class="brush:swift;">
var age: UInt8 = 1000 //здесь ошибка
</pre>
<p>Минимальное и максимальное значение для определенного числового типа можно получить с помощью констант <span class="b">min</span> и <span class="b">max</span>:</p>
<pre class="brush:swift;">
var minInt16 = Int16.min   	// -32768
var maxInt16 = Int16.max 	// 32767
var minUInt16 = UInt16.min	// 0
var maxUInt16 = UInt16.max	// 65535
</pre>

<h3>Форматы записи числовых данных</h3>
<p>По умолчанию Swift работает с десятичной системой исчисления. Однако, как и многие другие языки программирования, он может работать и с другими 
системами:</p>
<ul>
<li><p><span class="b">десятичная</span>: числа используются так, как они есть, без каких-либо префиксов</p></li>
<li><p><span class="b">двоичная</span>: перед числом используется префикс <span class="b">0b</span></p></li>
<li><p><span class="b">восьмеричная</span>: перед числом используется префикс <span class="b">0o</span></p></li>
<li><p><span class="b">шестнадцатеричная</span>: перед числом используется префикс <span class="b">0x</span></p></li>
</ul>
<p>Например, запишем число 10 во всех системах исчисления:</p>
<pre class="brush:swift;">
let decimalInt = 10
let binaryInt = 0b1010      // 10 в двоичной системе
let octalInt = 0o12         // 10 в восьмеричной системе
let hexInt = 0xA     		// 10 в шестнадцатеричной системе
</pre>
<p>Для чисел с плавающей точкой возможна запись в двух системах: десятичной и шестнадцатеричной. Для упрощении записи длинных чисел в десятичной системе мы можем 
использовать символ <code>e</code> (экспонента). Например:</p>
<pre class="brush:swift;">
var a = 1.25e2 		// 125
var b = 1.25e-2		// 0.0125
</pre>
<p>Для записи чисел с плавающей точкой в шестнадцатеричной системе используется префикс <code>p</code>:</p>
<pre class="brush:swift;">
var a = 0xFp2	//15 * 2 в степени 2 или 60.0
var b = 0xFp-2	//15 * 2 в степени -2  или 3.75
</pre>
<h3>Арифметические операции</h3>
<p>Swift обладает полноценным набором арифметических операций. Арифметические операции производятся над числами:</p>
<ul>
<li><p><span class="b">+</span></p>
<p>Сложение двух чисел:</p>
<pre class="brush:swift;">
var a = 6
var b = 4
var c = a + b // 10
</pre>
</li>
<li><p><span class="b">-</span></p>
<p>Вычитание двух чисел:</p>
<pre class="brush:swift;">
var a = 6
var b = 4
var c = a - b // 2
</pre>
</li>
<li><p><span class="b">-</span></p>
<p>Унарный минус. Возвращает число, умноженное на -1:</p>
<pre class="brush:swift;">
var a = -6
var b = -a // 6
var c = -b // -6
</pre>
</li>
<li><p><span class="b">*</span></p>
<p>Умножение:</p>
<pre class="brush:swift;">
var a = 6
var b = 4
var c = a * b // 24
</pre>
</li>
<li><p><span class="b">/</span></p>
<p>Деление:</p>
<pre class="brush:swift;">
var a = 8
var b = 4
var c = a / b // 2
</pre>
<p>При делении стоит учитывать, какие данные участвуют в делении и какой результат мы хотим получить. 
Например, в следующем случае выполняется деление дробных чисел:</p>
<pre class="brush:swift;">
let n : Double = 10
let d : Double = 4
let x : Double = n / d // 2.5
</pre>
<p>Результатом операции чисел Double является значение типа Double, которое равно 2.5. Но если мы возьмем значения 
типа Int, то результат будет иным:</p>
<pre class="brush:swift;">
let n : Int = 10
let d : Int = 4
let x : Int = n / d // 2
</pre>
<p>Оба операнда операции представляют тип Int, поэтому результатом операции является значение типа Int. Оно не может 
быть дробным, поэтому дробная часть отбрасывается, и мы получаем не 2.5, а число 2.</p>
</li>
<li><p><span class="b">%</span></p>
<p>Возвращает остаток от деления:</p>
<pre class="brush:swift;">
var a = 10
var b = 4
var c = a % b // 2
</pre>
</li>
</ul>
<p>При арифметических операциях надо учитывать, что они производятся только между переменными одного типа. Например, в следующем примере мы получим ошибку:</p>
<pre class="brush:swift;">
var a: Int8 = 10
var b: Int32 = 10
var c = a + b
</pre>
<p>a и b должны в данном случае представлять один и тот же тип.</p>
<p>И также арифметические операции возвращают объект того же типа, к которому принадлежат операнды операции. Например, в следующем примере мы получим ошибку:</p>
<pre class="brush:swift;">
var a: Int8 = 10
var b: Int8 = 10
var c: Int32 = a + b
</pre>
<p>В данном случае переменная <code>c</code>, как и <code>a</code> и <code>b</code>, также должна представлять тип <code>Int8</code>.</p>
<p>Ряд операций сочетают арифметические операции с присваиванием</p>
<ul>
<li><p><span class="b">+=</span></p>
<p>Присвоение со сложением, прибавляет к текущей переменной некоторое значение:</p>
<pre class="brush:swift;">
var a = 6
a += 10
print(a)	// 16
// эквивалентен
// a = a + 10
</pre>
</li>
<li><p><span class="b">-=</span></p>
<p>Присвоение с вычитанием, вычитает из текущей переменной некоторое значение:</p>
<pre class="brush:swift;">
var a = 10
a -= 6
print(a)	// 4
// эквивалентно
// a = a - 6
</pre>
</li>
<li><p><span class="b">*=</span></p>
<p>Присвоение с умножением, умножает текущую переменную на некоторое значение, присваивая ей результат умножения:</p>
<pre class="brush:swift;">
var a = 10
a *= 6
print(a)	// 60
// эквивалентно
// a = a * 6
</pre>
</li>
<li><p><span class="b">/=</span></p>
<p>Присвоение с делением, делит значение текущей переменной на другое значение, присваивая результат деления:</p>
<pre class="brush:swift;">
var a = 10
a /= 2
print(a)	// 5
// эквивалентно
// a = a / 2
</pre>
</li>
<li><p><span class="b">%=</span></p>
<p>Присвоение с остатком от делением, делит значение текущей переменной на другое значение, присваивая переменной остаток от деления:</p>
<pre class="brush:swift;">
var a = 10
a %= 4
print(a)	// 2
// эквивалентно
// a = a % 4
</pre>
</li>
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


<div class="nav"><p><a href="2.1.php">Назад</a><a href="./">Содержание</a><a href="2.19.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Swift</span>
		<ul>
			<li><span class="file"><a href="1.1.php">Язык Swift и платформы iOS и Mac OS</a></span></li>
			<li><span class="file"><a href="1.2.php">Начало работы с Swift и XCode</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы Swift</span>
		<ul>
			<li><span class="file"><a href="2.1.php">Переменные и константы. Типы данных</a></span></li>
			<li><span class="file"><a href="2.2.php">Числовые типы. Операции с числами</a></span></li>
			<li><span class="file"><a href="2.19.php">Преобразование числовых данных</a></span></li>
			<li><span class="file"><a href="2.20.php">Поразрядные операции с числами</a></span></li>
			<li><span class="file"><a href="2.3.php">Строки. Типы Character и String</a></span></li>
			<li><span class="file"><a href="2.4.php">Тип Bool. Условные выражения</a></span></li>
			<li><span class="file"><a href="2.5.php">Кортежи</a></span></li>
			<li><span class="file"><a href="2.6.php">Условная конструкция If. Тернарный оператор</a></span></li>
			<li><span class="file"><a href="2.7.php">Конструкция switch</a></span></li>
			<li><span class="file"><a href="2.8.php">nil и опциональные типы</a></span></li>
			<li><span class="file"><a href="2.10.php">Циклы</a></span></li>
			<li><span class="file"><a href="2.13.php">Функции</a></span></li>
			<li><span class="file"><a href="2.14.php">Возвращение функцией значения</a></span></li>
			<li><span class="file"><a href="2.15.php">Дополнительно о параметрах функций</a></span></li>
			<li><span class="file"><a href="2.16.php">Функция как значение. Тип функции</a></span></li>
			<li><span class="file"><a href="2.17.php">Вложенные и рекурсивные функции</a></span></li>
			<li><span class="file"><a href="2.21.php">Перегрузка функций</a></span></li>
			<li><span class="file"><a href="2.18.php">Замыкания</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="3.1.php">Классы и объекты</a></span></li>
			<li><span class="file"><a href="3.2.php">Инициализаторы</a></span></li>
			<li><span class="file"><a href="3.3.php">Свойства</a></span></li>
			<li><span class="file"><a href="3.4.php">Статические свойства и методы</a></span></li>
			<li><span class="file"><a href="3.7.php">Структуры</a></span></li>
			<li><span class="file"><a href="3.8.php">Перечисления</a></span></li>
			<li><span class="file"><a href="3.9.php">Значимые и ссылочные типы</a></span></li>
			<li><span class="file"><a href="3.6.php">Наследование</a></span></li>
			<li><span class="file"><a href="3.11.php">Свойства и методы класса</a></span></li>
			<li><span class="file"><a href="3.12.php">Вложенные типы</a></span></li>
			<li><span class="file"><a href="3.13.php">Полиморфизм</a></span></li>
			<li><span class="file"><a href="3.14.php">Преобразование типов</a></span></li>
			<li><span class="file"><a href="3.10.php">Обобщения</a></span></li>
			</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Коллекции</span>
		<ul>
			<li><span class="file"><a href="2.22.php">Последовательности</a></span></li>
			<li><span class="file"><a href="2.9.php">Массивы</a></span></li>
			<li><span class="file"><a href="2.11.php">Множества</a></span></li>
			<li><span class="file"><a href="2.12.php">Словари</a></span></li>
			<li><span class="file"><a href="3.5.php">Сабскрипты</a></span></li>
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
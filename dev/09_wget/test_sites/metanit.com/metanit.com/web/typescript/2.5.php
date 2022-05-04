<!DOCTYPE html>
<html >
<head>
<title>TypeScript | Типы данных</title>
<meta charset="utf-8" />
<meta name="description" content="Типы данных и переменные в TypeScript, строки, числа, bigint, тип any, строгая типизация, проверка типа с помощью оператора typeof">
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
<h2>Типы данных</h2><div class="date">Последнее обновление: 15.05.2021</div>

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

<p>TypeScript является строго типизированным языком, и каждая переменная и константа в нем имеет определенный тип. При этом в отличие от javascript 
мы не можем динамически изменить ранее указанный тип переменной.</p>
<p>В TypeScript имеются следующие базовые типы:</p>
<ul>
<li><p><span class="b">boolean</span>: логическое значение true или false</p></li>
<li><p><span class="b">number</span>: числовое значение</p></li>
<li><p><span class="b">string</span>: строки</p></li>
<li><p><span class="b">Array</span>: массивы</p></li>
<li><p><span class="b">кортежи</span></p></li>
<li><p><span class="b">Enum</span>: перечисления</p></li>
<li><p><span class="b">Any</span>: произвольный тип</p></li>
<li><p><span class="b">Symbol</span></p></li>
<li><p><span class="b">null и undefined</span>: соответствуют значениям null и undefined в javascript</p></li>
<li><p><span class="b">Never</span>: также представляет отсутствие значения и используется в качестве возвращаемого типа функций, которые генерируют или возвращают ошибку</p></li>
</ul>
<p>Большинство из этих типов соотносятся с примитивными типами из JavaScript.</p>
<p>Для установки типа применяется знак двоеточия, после которого указывается название типа. Примеры создания переменных:</p>
<pre class="brush:ts;">
let x: number = 10; 
let hello: string = "hello world";
let isValid: boolean = true;
</pre>
<p>То есть в данном случае выражение <code>let hello: string = "hello world"</code> указывает, что переменная <code>hello</code> 
будет иметь тип <code>string</code> и значение <code>hello world</code>.</p>
<p>При этом если в коде мы потом захотим изменить тип, например:</p>
<pre class="brush:ts;">
let hello: string = "hello world";
hello = 23;
</pre>
<p>То в процессе компиляции компилятор TypeScript выдаст ошибку.</p>
<p>Вначале рассмотрим примитивные типы данных, которые есть в TypeScript.</p>
<h3>boolean</h3>
<p>Тип <span class="b">Boolean</span> представляет логическое значение true или false:</p>
<pre class="brush:ts;">
let isEnabled: boolean = true;
let isAlive: boolean = false;

console.log(isEnabled);
console.log(isAlive);
</pre>
<h3>number</h3>
<p>Тип number представляет числа, причем все числа в TypeScript, как и в JavaScript, являются числами с плавающей точкой. Поэтому с помощью данного типа 
можно определять как целые числа, так и числа с плавающей точкой:</p> 
<pre class="brush:ts;">
let age: number = 36;
let height: number = 1.68;
</pre>
<p>TS поддерживает двоичную, восьмеричную, десятичную и шестнадцатиричную записи чисел:</p>
<pre class="brush:ts;">
let decimal: number = 6;
// шестнадцатиричная система
let hex: number = 0xf00d;		// 61453 в десятичной
// двоичная система
let binary: number = 0b1010;	// 10 в десятичной
// восьмиричная система
let octal: number = 0o744;		// 484 в десятичной
console.log(decimal);
console.log(hex);
console.log(binary);
console.log(octal);
</pre>
<h3>string</h3>
<p>String представляет строки. Как и в JavaScript, в TypeScript строки можно заключать в двойные, либо в одинарные кавычки:</p>
<pre class="brush:ts;">
let firstName: string = "Tom";
let lastName = 'Johns';
</pre>
<p>Кроме того, TypeScript поддерживает такую функциональность, как <span class="b">шаблоны строк</span>, то есть мы можем задать шаблон в 
косых кавычках (`), как если бы мы писали обычную строку, и затем в саму строку можно встраивать разные выражения с помощью 
синтаксиса <code>${ expr }</code>, где expr - это выражение. Например:</p>
<pre class="brush:ts;">
let firstName: string = "Tom";
let age: number = 28;
let info: string = `Имя ${firstName}    Возраст: ${age}`;
console.log(info);  // Имя Tom    Возраст: 28
</pre>
<p>Косые кавычки также можно применять для установки многострочного текста:</p>
<pre class="brush:ts;">
let sentence: string = `Hello World!
Goob bye World!`;
</pre>
<h3>bigint</h3>
<p>Для представления очень больших чисел в TypeScript добавлен специальный тип <span class="b">bigint</span>. Этот тип позволяет 
хранить числа больше, чем  2<sup>53</sup> - 1 - больше, чем позволяет тип number.</p>
<p>Есть два способа определения объекта этого типа. Первый способ - с помощью функции <span class="b">BigInt()</span>:</p>
<pre class="brush:ts;">
const num1: bigint = BigInt(100);
console.log(num1);
</pre>
<p>Второй способ - с помощью добавления символа <span class="b">n</span> после числового значения:</p>
<pre class="brush:ts;">
const num2: bigint = 100n;
console.log(num2);
</pre>
<p>Следует отметить, что этот тип - часть стандарта ES2020, поэтому при компиляции следует установить данный стандарт в качестве целевого через 
параметр <code>target</code>. Например, в файле <span class="b">tsconfig.json</span>:</p>
<pre class="brush:js;">
{
    "compilerOptions": {
        "target": "es2020",
        "outFile": "app.js"
    }
}
</pre>
<h3>Выведение типа</h3>
<p>Но можно в принципе и не указывать тип переменной. Например:</p>
<pre class="brush:ts;">
let hello = "hello world";
hello = 23;
</pre>
<p>В этом случае TypeScript автоматически выведет тип из присваемого данной переменной значения. Так, на первой строке компилятор TS увидит, 
что переменной <code>hello</code> присваивается строка, поэтому для нее будет использоваться тип <code>string</code>. Однако на второй строке опять же 
компилятор выдаст ошибку, поскольку <code>hello</code> переменной уже определен тип string. А новое значение предполагает тип number.</p>
<h3>Тип any</h3>
<p>Any описывает данные, тип которых может быть неизвестен на момент написания приложения.</p>
<pre class="brush:ts;">
let someVar: any = "hello";
console.log(someVar);	// сейчас someVar - это string
someVar = 20; 
console.log(someVar);	// сейчас someVar - это number
</pre>
<p>Так как здесь применяется тип <code>any</code>, то данный код скомпилируется без ошибок, несмотря на смену строкового значения на числовое. 
И также мы можем объявлять массивы данного типа:</p>
<pre class="brush:ts;">var someArray: any[] = [ 24, "Tom", false];</pre>
<p>Если переменная определяется без значения и указания типа, и только впоследствии при работе программы ей присваивается значение, тогда считается, что она имеет тип <span class="b">any</span>:</p>
<pre class="brush:ts;">
let x; 	// тип any
x = 10;	
x = "hello";	
</pre>
<p>С одной стороны, <code>any</code> может показаться удобным типом. Однако, с другой стороны, он лишает программу преимуществ языка TypeScript, в частности, 
статической типизации. Соответственно может привнести в программу потенциальные ошибки, связанные с типизацией данных, которые компилятор не сможет отследить 
на этапе компиляции.</p>
<h3>Проверка типа</h3>
<p>С помощью оператора <span class="b">typeof</span> мы можем проверить тип переменной. Это может быть необходимо, когда мы хотим выполнить некоторые операции с переменной, 
но нам неизвестен ее точный тип (например, переменная представляет тип any). Данная функциональность еще называется <span class="b">type guards</span> или 
защита типа:</p>
<pre class="brush:ts;">
let sum: any;
sum = 1200;
sum = "тысяча двести";
let result: number = sum / 12;
console.log(result); // NaN - строку нельзя разделить на число
</pre>
<p>Переменная sum может хранит любое значение, однако деление может работать только с числами. Поэтому перед делением выполним проверку на тип:</p>
<pre class="brush:ts;">
let sum: any;
sum = 1200;

if (typeof sum === "number") {
    
    let result: number = sum / 12;
    console.log(result);
}
else{
	console.log("invalid operation");
}
</pre>
<p>Оператор <code>typeof</code> возвращает тип значения. Например, выражение <code>typeof sum</code> в данном случае возращает "number", так как переменная 
sum представляет число.</p>
<p>Оператор <code>typeof</code> может возвращать следующие значения:</p>
<ul>
<li><p>"string"</p></li>
<li><p>"number"</p></li>
<li><p>"bigint"</p></li>
<li><p>"boolean"</p></li>
<li><p>"symbol"</p></li>
<li><p>"undefined"</p></li>
<li><p>"object"</p></li>
<li><p>"function"</p></li>
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


<div class="nav"><p><a href="./2.6.php">Назад</a><a href="./">Содержание</a><a href="./2.2.php">Вперед</a></p></div></div>
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
				<li class="closed"><span class="folder">Глава 1. Введение в TypeScript</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/1.1.php">Что такое TypeScript</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/1.2.php">Установка и компиляция из командной строки</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/1.3.php">Первое приложение TypeScript в Visual Studio</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/1.4.php">Настройки компиляции</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/1.5.php">Файл конфигурации tsconfig.json</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 2. Основы TypeScript</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.1.php">Переменные и константы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.6.php">Параметры компиляции noEmitOnError и target</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.5.php">Типы данных</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.2.php">Функции</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.3.php">Тип функции и стрелочные функции</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.13.php">Объединения union</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.8.php">Null и undefined</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.7.php">Объекты</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.14.php">Псевдонимы типов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.4.php">Type assertion. Преобразование к типу</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.9.php">Массивы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.10.php">Кортежи</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.12.php">Неопределенный набор и наполнение параметров функции</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.11.php">Перечисление enum</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 3. Объектно-ориентированное программирование</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.1.php">Классы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.2.php">Наследование.</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.12.php">Абстрактные классы, методы и поля</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.4.php">Модификаторы доступа</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.10.php">Методы доступа get и set</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.13.php">Статические поля и методы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.3.php">Интерфейсы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.9.php">Преобразование типов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.5.php">Обобщения</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.7.php">Миксины</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 4. Модули и пространства имен</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.6.php">Пространства имен</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.11.php">Создание и подключение модулей</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.8.php">Работа с модулями</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 5. Заголовочные файлы</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/4.1.php">Работа с заголовочными файлами</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/4.2.php">Заголовочные файлы для популярных библиотек</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 6. Декораторы</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/6.1.php">Декораторы классов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/6.2.php">Декораторы методов и их параметров</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/6.3.php">Декораторы свойств и методов доступа</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/6.4.php">Фабрики декораторов</a></span></li>
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
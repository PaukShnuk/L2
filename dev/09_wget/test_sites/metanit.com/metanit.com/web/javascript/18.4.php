<!DOCTYPE html>
<html >
<head>
<title>JavaScript | Форматирование чисел и Intl.NumberFormat</title>
<meta charset="utf-8" />
<meta name="description" content="Форматирование чисел и объект Intl.NumberFormat в языке программирования JavaScript, локализация числительных, процентов, валют, единиц измерения">
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
<h2>Форматирование чисел и Intl.NumberFormat</h2><div class="date">Последнее обновление: 14.09.2021</div>

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

<img src="https://metanit.com/metanit-front.jpg" id="jmw" style="cursor:pointer;" />
</div>

<p>В разных культурах используются различные подходы к отображению чисел. Например, в одних культурах (в частности, в США, Великобритании) 
в качестве разделителя целой и дробной части применяется точка, а в других культурах - запятая. Аналогично разделителем между разрядами может служить как точка, 
так и запятая. И объект <span class="b">Intl.NumberFormat</span> позволяет нам локализовать числительные под нужную культуру.</p>
<p>Конструктор <span class="b">Intl.NumberFormat</span> может принимать два параметра:</p>
<pre class="brush:js;">
Intl.NumberFormat([locales[, options]])
</pre>
<p>Параметр <span class="b">locales</span> представляет код языка в формате BCP 47 или набор языковых кодов.</p>
<p>Параметр <span class="b">options</span> представляет дополнительный набор опций:</p>
<ul>
<li><p><span class="b">localeMatcher</span>: алгоритм поиска соответствий. Может принимать два значения: <code>"lookup"</code> и <code>"best fit"</code>. 
Значение по умолчанию - <code>"best fit"</code>.</p></li>
<li><p><span class="b">compactDisplay</span>: применяется, если параметр <code>notation</code> равен <code>"compact"</code>. 
Возможные значения: <code>"long"</code> и <code>"short"</code> (значение по умолчанию)</p></li>
<li><p><span class="b">currency</span>: задает валюту, которая применяется для форматирования. 
В качестве значения принимает код валюты в формате ISO 4217, например, "USD" (доллар США), "EUR" (евро) и т.д. Этот параметр необходимо обязательно указать, 
если параметр <code>style</code> имеет значение <code>"currency"</code>.</p></li>
<li><p><span class="b">currencyDisplay</span>: указывает, как отображать валюту. Возможные значения:</p>
<ul>
<li><p><code>"symbol"</code>: применяется символ валюты (например, € для евро). Значение по умолчанию</p></li>
<li><p><code>"narrowSymbol"</code>: применяется сокращенное обозначение валюты (например, "$100" вместо "US$100")</p></li>
<li><p><code>"code"</code>: применяется код валюты</p></li>
<li><p><code>"name"</code>: применяется локализованное название валюты (например, "dollar")</p></li>
</ul>
</li>
<li><p><span class="b">currencySign</span>: знак перед числительным, которое представляет валюту. Может принимать значения <code>"standard"</code> 
(значение по умолчанию) и <code>"accounting"</code></p></li>
<li><p><span class="b">notation</span>: задает тип форматирования. Возможные значения:</p>
<ul>
<li><p><code>"standard"</code>: применяется для форматирования обычных чисел. Значение по умолчанию</p></li>
<li><p><code>"scientific"</code>: возвращает порядок величины для форматируемого числа</p></li>
<li><p><code>"engineering"</code>: возвращает значение в экспоненциальной нотации</p></li>
<li><p><code>"compact"</code>: для представления экспоненциальной записи применяется строка</p></li>
</ul>
</li>
<li><p><span class="b">numberingSystem</span>: числовая система. Возможные значения: <code> "arab", "arabext", " bali", "beng", "deva", "fullwide", " gujr", "guru", "hanidec", "khmr", " knda", "laoo", "latn", "limb", "mlym", " mong", "mymr", "orya", "tamldec", " telu", "thai", "tibt"</code></p></li>
<li><p><span class="b">signDisplay</span>: указывает, нужно ли отображать знак перед числом. Возможные значения:</p>
<ul>
<li><p><code>"auto"</code>: знак отображается только для отрицательных чисел. Значение по умолчанию</p></li>
<li><p><code>"never"</code>: знак никогда не отображается</p></li>
<li><p><code>"always"</code>: знак отображается всегда</p></li>
<li><p><code>"exceptZero"</code>: знак отображается для всех чисел, кроме нуля</p></li>
</ul>
</li>
<li><p><span class="b">style</span>: тип форматирования. Возможные значения:</p>
<ul>
<li><p><code>"decimal"</code>: для форматирования обычных чисел. Значение по умолчанию</p></li>
<li><p><code>"currency"</code>: для форматирования валюты</p></li>
<li><p><code>"percent"</code>: для форматирования процентов</p></li>
<li><p><code>"unit"</code>: для форматирования единиц измерения</p></li>
</ul>
</li>
<li><p><span class="b">unit</span>: устанавливает единицу измерения. Применяемые единицы измерения можно найти в <a href="https://tc39.es/proposal-unified-intl-numberformat/section6/locales-currencies-tz_proposed_out.html#sec-issanctionedsimpleunitidentifier" rel="nofollow">следующей таблице</a>.</p></li>

<li><p><span class="b">unitDisplay</span>: тип отображения единиц измерения. Возможные значения:</p>
<ul>
<li><p><code>"long"</code>: полная форма (например, <code>16 litres</code>)</p></li>
<li><p><code>"short"</code>: сокращенная форма (например, <code>16 l</code>). Значение по умолчанию</p></li>
<li><p><code>"narrow"</code>: сжатая форма (например, <code>16l</code>)</p></li>
</ul>
</li>

<li><p><span class="b">useGrouping</span>: указывает, надо ли использовать разделитель для разрядов числа. Может принимать значения <code>true</code> 
(использовать разделители - значение по умолчанию) и <code>false</code> (не использовать разделители)</p></li>

<li><p><span class="b">minimumIntegerDigits</span>: минимальное количество цифр в числе. Возможные значения: от 1 (значение по умолчанию) до 21</p></li>
<li><p><span class="b">minimumFractionDigits</span>: минимальное количество цифр в дробной части числа. Возможные значения: от 0 (значение по умолчанию) до 20</p></li>
<li><p><span class="b">maximumFractionDigits</span>: максимальное количество цифр в дробной части числа. Возможные значения: от 0 до 20</p></li>
<li><p><span class="b">minimumSignificantDigits</span>: минимальное количество цифр в целой части числа. Возможные значения: от 1 (значение по умолчанию) до 21</p></li>
<li><p><span class="b">maximumSignificantDigits</span>: максимальное количество цифр в целой части числа. Возможные значения: от 1 (значение по умолчанию) до 21</p></li>
</ul>
<p>Для форматирования числа объект <span class="b">Intl.NumberFormat</span> предоставляет метод <span class="b">format()</span>, в который передается форматируемое 
число и который возвращает отформатированное число в виде строки.</p>
<p>Локализуем число <code>5500,67</code> на разные языки:</p>
<pre class="brush:js;">
const amount = 5500.67;

const en = new Intl.NumberFormat("en").format(amount);
const ru = new Intl.NumberFormat("ru").format(amount);
const de = new Intl.NumberFormat("de").format(amount);

console.log(en);	// 5,500.67
console.log(ru);	// 5 500,67
console.log(de);	// 5.500,67
</pre>
<p>По умолчанию для форматирования чисел применяется параметр <code>{style: "decimal"}</code>. Также мы могли бы его явно применить:</p>
<pre class="brush:js;">
const amount = 5500.67;

const ru = new Intl.NumberFormat("ru", {style: "decimal"}).format(amount);
// то же самое, что и
// const ru = new Intl.NumberFormat("ru").format(amount);

console.log(ru);	// 5 500,67
</pre>
<h3>Форматирование процентов</h3>
<p>В разных культурах может отличаться написание процентов. Для локализации процентов применяется значение <code></code></p>
<pre class="brush:js;">
const value = 0.851;

const en = new Intl.NumberFormat("en", {style: "percent"}).format(value);
const ru = new Intl.NumberFormat("ru", {style: "percent"}).format(value);
const tr = new Intl.NumberFormat("tr", {style: "percent"}).format(value);

console.log(en);	// 85%
console.log(ru);	// 85 %
console.log(tr);	// %85
</pre>
<h4>Вывод дробной части</h4>
<p>Однако в примере выше мы видим, что теряется дробная часть. Чтобы исправить положение, мы можем использовать параметр <code>minimumFractionDigits</code>, который задает количество знаков в дробной части:</p>
<pre class="brush:js;">
const value = 0.851;

const en = new Intl.NumberFormat("en", {style: "percent", minimumFractionDigits: 2}).format(value);
const ru = new Intl.NumberFormat("ru", {style: "percent", minimumFractionDigits: 2}).format(value);

console.log(en);	// 85.10%
console.log(ru);	// 85,10 %
</pre>
<h3>Форматирование валюты</h3>
<p>Для форматирования валюты применяется параметр <code>style: "currency"</code>, при этом также надо указать параметр <code>currency</code>, которому передается код валюты:</p>
<pre class="brush:js;">
const value = 85.1;

const en = new Intl.NumberFormat("en", {style: "currency", currency: "USD"}).format(value);
const ru = new Intl.NumberFormat("ru", {style: "currency", currency: "USD"}).format(value);
const tr = new Intl.NumberFormat("tr", {style: "currency", currency: "USD"}).format(value);

console.log(en);	// $85.10
console.log(ru);	// 85,10 $
console.log(tr);	// $85,10
</pre>
<p>Вывод нескольких валют:</p>
<pre class="brush:js;">
const value = 85.1;

const usd = new Intl.NumberFormat("ru", {style: "currency", currency: "USD"}).format(value);
const euro = new Intl.NumberFormat("ru", {style: "currency", currency: "EUR"}).format(value);
const rub = new Intl.NumberFormat("ru", {style: "currency", currency: "RUB"}).format(value);

console.log(usd);	// 85,10 $
console.log(euro);	// 85,10 €
console.log(rub);	// 85,10 ₽
</pre>
<p>По умолчанию выводится символ валюты, однако значение <code>currencyDisplay: "name"</code> позволяет вывести локализованное название валюты:</p>
<pre class="brush:js;">
const value = 85;

const usd = new Intl.NumberFormat("ru", {style: "currency", currency: "USD", currencyDisplay: "name", minimumFractionDigits: 0}).format(value);
const euro = new Intl.NumberFormat("ru", {style: "currency", currency: "EUR", currencyDisplay: "name"}).format(value);
const rub = new Intl.NumberFormat("ru", {style: "currency", currency: "RUB", currencyDisplay: "name"}).format(value);

console.log(usd);	// 85 долларов США
console.log(euro);	// 85,00 евро
console.log(rub);	// 85,00 российского рубля
</pre>
<h3>Форматирование единиц измерения</h3>
<p>Для форматирования единиц измерения применяется значение <code>style: "unit"</code>. При этом также необходимо указать название единицы измерения с 
помощью параметра <code>unit</code>:</p>
<pre class="brush:js;">
const value = 85;

const en = new Intl.NumberFormat("en", {style: "unit", unit: "liter"}).format(value);
const ru = new Intl.NumberFormat("ru", {style: "unit", unit: "liter"}).format(value);
const zh = new Intl.NumberFormat("zh", {style: "unit", unit: "liter"}).format(value);

console.log(en);	// 85 L
console.log(ru);	// 85 л
console.log(zh);	// 85升
</pre>
<p>По умолчанию применяет сокращенная форма наименования валюты. С помощью значения <code>unitDisplay: "long"</code> можно задать вывод полного наименования:</p>
<pre class="brush:js;">
const value = 85;

const longLiter = new Intl.NumberFormat("ru", {style: "unit", unit: "liter", unitDisplay: "long"}).format(value);
const shortLiter = new Intl.NumberFormat("ru", {style: "unit", unit: "liter", unitDisplay: "short"}).format(value);

console.log(longLiter);		// 85 литров
console.log(shortLiter);	// 85 л
</pre>
<p>Еще несколько примеров с форматированием разных единиц измерения:</p>
<pre class="brush:js;">
const value = 85;

const kilobyte = new Intl.NumberFormat("ru", {style: "unit", unit: "kilobyte", unitDisplay: "long"}).format(value);
const meter = new Intl.NumberFormat("ru", {style: "unit", unit: "meter", unitDisplay: "long"}).format(value);
const gram = new Intl.NumberFormat("ru", {style: "unit", unit: "gram", unitDisplay: "long"}).format(value);

console.log(kilobyte);	// 85 килобайт
console.log(meter);		// 85 метров
console.log(gram);		// 85 грамм
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


<div class="nav"><p><a href="./18.3.php">Назад</a><a href="./">Содержание</a><a href="./19.1.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в JavaScript</span>
		<ul>
			<li><span class="file"><a href="1.1.php">Что такое JavaScript</a></span></li>
			<li><span class="file"><a href="1.2.php">Первая программа на JavaScript</a></span></li>
			<li><span class="file"><a href="1.3.php">Выполнение кода javascript</a></span></li>
			<li><span class="file"><a href="1.4.php">Подключение внешнего файла JavaScript</a></span></li>
			<li><span class="file"><a href="1.5.php">Консоль браузера и console.log</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы javascript</span>
		<ul>
			<li><span class="file"><a href="2.1.php">Переменные и константы</a></span></li>
			<li><span class="file"><a href="2.2.php">Типы данных</a></span></li>
			<li><span class="file"><a href="2.3.php">Операции</a></span></li>
			<li><span class="file"><a href="2.8.php">Условные операторы ?: и ??</a></span></li>
			<li><span class="file"><a href="2.4.php">Преобразование данных</a></span></li>
			<li><span class="file"><a href="2.5.php">Введение в массивы</a></span></li>
			<li><span class="file"><a href="2.6.php">Условные конструкции</a></span></li>
			<li><span class="file"><a href="2.7.php">Циклы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Функциональное программирование</span>
		<ul>
			<li><span class="file"><a href="3.1.php">Функции</a></span></li>
			<li><span class="file"><a href="3.10.php">Параметры функции</a></span></li>
			<li><span class="file"><a href="3.11.php">Результат функции</a></span></li>
			<li><span class="file"><a href="3.2.php">Область видимости переменных</a></span></li>
			<li><span class="file"><a href="3.3.php">Замыкания и функции IIFE</a></span></li>
			<li><span class="file"><a href="3.9.php">Паттерн Модуль</a></span></li>
			<li><span class="file"><a href="3.4.php">Рекурсивные функции</a></span></li>
			<li><span class="file"><a href="3.5.php">Переопределение функций</a></span></li>
			<li><span class="file"><a href="3.6.php">Hoisting</a></span></li>
			<li><span class="file"><a href="3.7.php">Передача параметров по значению и по ссылке</a></span></li>
			<li><span class="file"><a href="3.8.php">Стрелочные функции</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="4.1.php">Объекты</a></span></li>
			<li><span class="file"><a href="4.2.php">Вложенные объекты и массивы в объектах</a></span></li>
			<li><span class="file"><a href="4.13.php">Копирование и сравнение объектов</a></span></li>
			<li><span class="file"><a href="4.3.php">Проверка наличия и перебор методов и свойств</a></span></li>
			<li><span class="file"><a href="4.4.php">Объекты в функциях</a></span></li>
			<li><span class="file"><a href="4.5.php">Конструкторы объектов</a></span></li>
			<li><span class="file"><a href="4.6.php">Расширение объектов. Prototype</a></span></li>
			<li><span class="file"><a href="4.7.php">Инкапсуляция</a></span></li>
			<li><span class="file"><a href="4.8.php">Функция как объект. Методы call и apply</a></span></li>
			<li><span class="file"><a href="4.9.php">Наследование</a></span></li>
			<li><span class="file"><a href="4.10.php">Ключевое слово this</a></span></li>
			<li><span class="file"><a href="4.11.php">Деструктуризация</a></span></li>
			<li><span class="file"><a href="4.18.php">Оператор ?.</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. ООП. Классы.</span>
		<ul>
			<li><span class="file"><a href="4.12.php">Классы</a></span></li>
			<li><span class="file"><a href="4.16.php">Приватные поля и методы</a></span></li>
			<li><span class="file"><a href="4.17.php">Статические поля и методы</a></span></li>
			<li><span class="file"><a href="4.14.php">Свойства и методы доступа</a></span></li>
			<li><span class="file"><a href="4.15.php">Наследование</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Массивы</span>
		<ul>
			<li><span class="file"><a href="5.3.php">Создание массива и объект Array</a></span></li>
			<li><span class="file"><a href="5.6.php">Массивы и spread-оператор</a></span></li>
			<li><span class="file"><a href="5.7.php">Операции с массивами</a></span></li>
			<li><span class="file"><a href="5.8.php">Наследование массивов</a></span></li>
		</ul>
				</li>
				<li class="closed"><span class="folder">Глава 7. Строки</span>
					<ul>
			<li><span class="file"><a href="6.1.php">Строки и объект String</a></span></li>
			<li><span class="file"><a href="6.5.php">Шаблоны строк</a></span></li>
			<li><span class="file"><a href="6.2.php">Объект RegExp. Регулярные выражения</a></span></li>
			<li><span class="file"><a href="6.3.php">Регулярные выражения в методах String</a></span></li>
			<li><span class="file"><a href="6.4.php">Синтаксис регулярных выражений</a></span></li>
			<li><span class="file"><a href="6.6.php">Группы в регулярных выражениях</a></span></li>
					</ul>
				</li>
				
	<li class="closed"><span class="folder">Глава 8. Встроенные объекты</span>
		<ul>
			<li><span class="file"><a href="5.1.php">Объект Date. Работа с датами</a></span></li>
			<li><span class="file"><a href="5.2.php">Объект Math. Математические операции</a></span></li>
			<li><span class="file"><a href="5.4.php">Объект Number</a></span></li>
			<li><span class="file"><a href="5.5.php">Символы</a></span></li>
			<li><span class="file"><a href="5.9.php">Proxy</a></span></li>
		</ul>
				</li>
				
	<li class="closed"><span class="folder">Глава 9. Обработка ошибок</span>
		<ul>
			<li><span class="file"><a href="16.1.php">Конструкция try..catch..finally</a></span></li>
			<li><span class="file"><a href="16.2.php">Генерация ошибок и оператор throw</a></span></li>
			<li><span class="file"><a href="16.3.php">Типы ошибок</a></span></li>
		</ul>
				</li>
		<li class="closed"><span class="folder">Глава 10. Работа с браузером и BOM</span>
			<ul>
			<li><span class="file"><a href="7.1.php">Browser Object Model и объект window</a></span></li>
			<li><span class="file"><a href="7.2.php">Управление окнами</a></span></li>
			<li><span class="file"><a href="7.3.php">История браузера. Объект history</a></span></li>
			<li><span class="file"><a href="7.4.php">Объект location</a></span></li>
			<li><span class="file"><a href="7.5.php">Объект navigator</a></span></li>
			<li><span class="file"><a href="7.6.php">Таймеры</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 11. Работа с DOM</span>
					<ul>
			<li><span class="file"><a href="8.1.php">Введение в DOM</a></span></li>
			<li><span class="file"><a href="8.2.php">Объект document. Поиск элементов</a></span></li>
			<li><span class="file"><a href="8.3.php">Свойства объекта document</a></span></li>
			<li><span class="file"><a href="8.4.php">Объект Node. Навигация по DOM</a></span></li>
			<li><span class="file"><a href="8.5.php">Создание, добавление и удаление элементов веб-станицы</a></span></li>
			<li><span class="file"><a href="8.6.php">Объект Element. Управление элементами</a></span></li>
			<li><span class="file"><a href="8.7.php">Изменение стиля элементов</a></span></li>
			<li><span class="file"><a href="8.8.php">Создание своего элемента HTML</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 12. События</span>
					<ul>
			<li><span class="file"><a href="9.1.php">Введение в обработку событий</a></span></li>
			<li><span class="file"><a href="9.2.php">Обработчики событий</a></span></li>
			<li><span class="file"><a href="9.3.php">Объект Event</a></span></li>
			<li><span class="file"><a href="9.4.php">Распространение событий</a></span></li>
			<li><span class="file"><a href="9.5.php">События мыши</a></span></li>
			<li><span class="file"><a href="9.6.php">События клавиатуры</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 13. Работа с формами</span>
					<ul>
			<li><span class="file"><a href="10.1.php">Формы и их элементы</a></span></li>
			<li><span class="file"><a href="10.2.php">Кнопки</a></span></li>
			<li><span class="file"><a href="10.3.php">Текстовые поля</a></span></li>
			<li><span class="file"><a href="10.4.php">Флажки и переключатели</a></span></li>
			<li><span class="file"><a href="10.5.php">Список select</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 14. JSON</span>
					<ul>
			<li><span class="file"><a href="11.1.php">Введение в JSON</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 15. Хранение данных</span>
					<ul>
			<li><span class="file"><a href="12.1.php">Куки</a></span></li>
			<li><span class="file"><a href="12.2.php">Web Storage</a></span></li>
					</ul>
	</li>
	<li class="closed"><span class="folder">Глава 16. Коллекции и итераторы</span>
		<ul>
			<li><span class="file"><a href="14.1.php">Итераторы</a></span></li>
			<li><span class="file"><a href="14.2.php">Генераторы</a></span></li>
			<li><span class="file"><a href="14.3.php">Множества Set</a></span></li>
			<li><span class="file"><a href="14.4.php">Map</a></span></li>
			<li><span class="file"><a href="14.5.php">WeakSet</a></span></li>
			<li><span class="file"><a href="14.6.php">WeakMap</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 17. Promise, async и await</span>
		<ul>
			<li><span class="file"><a href="17.1.php">Введение в промисы</a></span></li>
			<li><span class="file"><a href="17.2.php">Получение результата операции в Promise</a></span></li>
			<li><span class="file"><a href="17.3.php">Обработка ошибок в Promise</a></span></li>
			<li><span class="file"><a href="17.4.php">Создание цепочек промисов</a></span></li>
			<li><span class="file"><a href="17.5.php">Функции Promise.all, Promise.allSettled, Promise.any и Promise.race</a></span></li>
			<li><span class="file"><a href="17.6.php">Async и await</a></span></li>
			<li><span class="file"><a href="17.7.php">Асинхронные итераторы</a></span></li>
			<li><span class="file"><a href="17.8.php">Асинхронные генераторы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 18. Ajax</span>
		<ul>
			<li><span class="file"><a href="13.1.php">Объект XMLHttpRequest</a></span></li>
			<li><span class="file"><a href="13.2.php">Отправка данных</a></span></li>
			<li><span class="file"><a href="13.3.php">Promise в Ajax-запросах</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 19. Локализация</span>
		<ul>
			<li><span class="file"><a href="18.1.php">Локализация списков и Intl.ListFormat</a></span></li>
			<li><span class="file"><a href="18.2.php">Локализация дат и времени</a></span></li>
			<li><span class="file"><a href="18.3.php">Локализация названий и Intl.DisplayNames</a></span></li>
			<li><span class="file"><a href="18.4.php">Форматирование чисел и Intl.NumberFormat</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 20. Модули</span>
		<ul>
			<li><span class="file"><a href="19.1.php">Введение в модули</a></span></li>
			<li><span class="file"><a href="19.2.php">Импорт модуля</a></span></li>
			<li><span class="file"><a href="19.3.php">Экспорт и импорт компонентов модулей</a></span></li>
			<li><span class="file"><a href="19.4.php">Экспорт и импорт по умолчанию</a></span></li>
			<li><span class="file"><a href="19.5.php">Использование псевдонимов при экспорте и импорте</a></span></li>
			<li><span class="file"><a href="19.6.php">Динамическая загрузка модулей</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 21. Fetch API</span>
		<ul>
			<li><span class="file"><a href="20.1.php">Функция fetch</a></span></li>
			<li><span class="file"><a href="20.2.php">Объект Response и его свойства</a></span></li>
			<li><span class="file"><a href="20.3.php">Получение данных из ответа</a></span></li>
			<li><span class="file"><a href="20.4.php">Настройка параметров запроса. Отправка данных</a></span></li>
			<li><span class="file"><a href="20.5.php">Создание клиента для REST API</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 22. Прочие статьи</span>
		<ul>
			<li><span class="file"><a href="15.1.php">JavaScript в CSS</a></span></li>
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
	
	$("li:contains('Глава 19.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 19.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
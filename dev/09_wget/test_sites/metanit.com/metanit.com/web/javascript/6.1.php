<!DOCTYPE html>
<html >
<head>
<title>JavaScript | Строки</title>
<meta charset="utf-8" />
<meta name="description" content="Объект String и его методы в JavaScript, работа со строками, поиск в строке, разделение и соединение строк">
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
<h1>Строки</h1><h2>Строки, объект String и его методы</h2><div class="date">Последнее обновление: 10.09.2021</div>

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

<p>Для создания строк мы можем как напрямую присваивать переменной или константе строку:</p>
<pre class="brush:js;">
const name = "Tom";
</pre>
<p>Для работы со строками предназначен объект <span class="b">String</span>, поэтому также можно использовать конструктор String:</p>
<pre class="brush:js;">
const name = new String("Tom");
</pre>
<p>Но как правило, используется первый более краткий способ. В первом случае JavaScript при необходимости автоматически преобразует 
переменную примитивного типа в объект String.</p>
<p>Объект String имеет большой набор свойств и методов, с помощью которых мы можем манипулировать строками.</p>
<h3>Длина строки</h3>
<p>Свойство <span class="b">length</span> указывает на длину строки:</p>
<pre class="brush:js;">
const hello = "привет мир";
console.log(`В строке "${hello}"  ${hello.length} символов`);
// В строке "привет мир"  10 символов
</pre>
<h3>Повторение строки</h3>
<p>Метод <span class="b">repeat()</span> позволяет создать строку путем многократного повторения другой строки. Количество повторов передается в качестве аргумента:</p>
<pre class="brush:js;">
const hello = "hello ";
console.log(hello.repeat(3));	// hello hello hello
</pre>
<h3>Поиск в строке</h3>
<p>Для поиска в строке некоторой подстроки используются методы <span class="b">indexOf()</span> (индекс первого вхождения подстроки) и 
<span class="b">lastIndexOf()</span> (индекс последнего вхождения подстроки). Эти методы принимают два параметра:</p>
<ul>
<li><p>Подстроку, которую надо найти</p></li>
<li><p>Необязательный параметр, который указывает, с какого символа следует проводить поиск подстроки в строке</p></li>
</ul>
<p>Оба этих метода возвращают индекс символа, с которого в строке начинается подстрока. Если подстрока не найдена, то возвращается число -1.</p>
<pre class="brush:js;">
const hello = "привет мир. пока мир";
const key = "мир";
const firstPos = hello.indexOf(key);
const lastPos = hello.lastIndexOf(key);
console.log("Первое вхождение: ", firstPos);	// 7
console.log("Последнее вхождение: ", lastPos);	// 17
</pre>
<p>Еще один метод - <span class="b">includes()</span> возвращает true, если строка содержит определенную подстроку.</p>
<pre class="brush:js;">
const hello = "привет мир. пока мир";

console.log(hello.includes("мир"));	// true
console.log(hello.includes("миг"));	// false
</pre>
<p>С помощью второго дополнительного параметра можно определить индекс, с которого будет начинаться поиск подстроки:</p>
<pre class="brush:js;">
const hello = "привет мир. пока мир";

console.log(hello.includes("мир", 5));	// true
console.log(hello.includes("привет", 6));	// false
</pre>
<h3>Выбор подстроки</h3>
<p>Для того, чтобы вырезать из строки подстроку, применяются методы <span class="b">substring()</span> и <span class="b">slice()</span>.</p>
<h4>Substring</h4>
<p>Метод <span class="b">substring()</span> принимает два параметра:</p>
<ul>
<li><p>индекс символа в строке, начиная с которого надо проводить обрезку строки. Обязательный параметр</p></li>
<li><p>индекс, до которого надо обрезать строку. Необязательный параметра - если он не указан, то обрезается вся остальная часть строки</p></li>
</ul>
<pre class="brush:js;">
const hello = "привет мир. пока мир";
const world = hello.substring(7, 10); // с 7-го по 10-й индекс
console.log(world); // мир
const bye = hello.substring(12);	// c 12 индекса до конца строки
console.log(bye); // пока мир
</pre>
<h4>slice</h4>
<p>Еще один метод <span class="b">slice</span> также позволяет получить из строки какую-то ее часть. Она принимает два параметра:</p>
<ul>
<li><p>индекс символа в строке, начиная с которого надо проводить обрезку строки. Обязательный параметр</p></li>
<li><p>индекс, до которого надо обрезать строку. Необязательный параметра - если он не указан, то обрезается вся остальная часть строки</p></li>
</ul>
<pre class="brush:js;">
const hello = "привет мир. пока мир";
const world = hello.slice(7, 10); // с 7-го по 10-й индекс
console.log(world); // мир
const bye = hello.slice(12);	// c 12 индекса до конца строки
console.log(bye); // пока мир
</pre>
<p>Можно заметить, что этот метод похож на метод <code>substring()</code>, тем не менее между ними есть небольшие различие. 
Прежде всего, в <code>slice()</code> начальный индекс должен быть меньше чем конечный. В <code>substring()</code>, если начальный индекс больше конечного, то они меняются местами 
(то есть <code>substring(5, 1)</code> будет равноценно <code>substring(1, 5)</code>):</p>
<pre class="brush:js;">
const hello = "привет мир. пока мир";
const world1 = hello.slice(6, 0); //
console.log(world1); // 
const world2 = hello.substring(6, 0); // аналогично hello.substring(0, 6)
console.log(world2); // привет
</pre>
<p>Другое отличие, что <code>slice</code> позволяет использовать отрицательные индексы. Отрицательный индекс указывает на индекс символа относительно конца строки. 
<code>substring()</code> же отрицательные индексы не поддерживает:</p>
<pre class="brush:js;">
const hello = "привет мир. пока мир";
const bye1 = hello.slice(-8, -4); // с 8-го индекса с конца до 4 индекса с конца
console.log(bye1); // 
const bye2 = hello.substring(-8, -4); // не работает
console.log(bye2); // 
</pre>
<h3>Управление регистром</h3>
<p>Для изменения регистра имеются методы <span class="b">toLowerCase()</span> (для перевода в нижний регистр) и 
<span class="b">toUpperCase()</span> (для перевода в верхний регистр).</p>
<pre class="brush:js;">
const hello = "Привет Том";
console.log(hello.toLowerCase()); // привет том
console.log(hello.toUpperCase()); // ПРИВЕТ ТОМ
</pre>
<h3>Получение символа по индексу</h3>
<p>Чтобы получить определенный символ в строке по индексу, можно применять методы <span class="b">charAt()</span> и <span class="b">charCodeAt()</span>. 
Оба этих метода в качестве параметра принимают индекс символа:</p>
<pre class="brush:js;">
const hello = "Привет Том";
console.log(hello.charAt(2)); 		// и
console.log(hello.charCodeAt(2)); 	// 1080
</pre>
<p>Но если в качестве результата метод <code>charAt()</code> возвращает сам символ, то метод <code>charCodeAt()</code> возвращает числовой код 
этого символа.</p>
<h3>Удаление пробелов</h3>
<p>Для удаления начальных и концевых пробелов в стоке используется метод <span class="bb">trim()</span>:</p>
<pre class="brush:js;">
let hello = "   Привет Том  ";
const beforeLength = hello.length;
hello = hello.trim();
const afterLength = hello.length;
console.log("Длина строки до: ", beforeLength); 	// 15
console.log("Длина строки после: ", afterLength); 	// 10
</pre>
<p>Дополнительно есть ряд методов, которые удаляют пробелы с определенной стороны строки:</p>
<ul>
<li><p><span class="b">trimStart()</span>: удаляет пробел с начала строки</p></li>
<li><p><span class="b">trimEnd()</span>: удаляет пробел с конца строки</p></li>
<li><p><span class="b">trimLeft()</span>: удаляет пробел с левой части строки</p></li>
<li><p><span class="b">trimRight()</span>: удаляет пробел с правой части строки</p></li>
</ul>
<h3>Объединение строк</h3>
<p>Метод <span class="b">concat()</span> объединяет две строки:</p>
<pre class="brush:js;">
let hello = "Привет ";
let world = "мир";
hello = hello.concat(world);
console.log(hello); // Привет мир
</pre>
<h3>Замена подстроки</h3>
<p>Метод <span class="b">replace()</span> заменяет первое вхождение одной подстроки на другую:</p>
<pre class="brush:js;">
let hello = "Добрый день";
hello = hello.replace("день", "вечер");
console.log(hello); // Добрый вечер
</pre>
<p>Первый параметр метода указывает, какую подстроку надо заменить, а второй параметр - на какую подстроку надо заменить.</p>
<p>В то же время у этого метода есть одна особенность - он заменяет только первое вхождение подстроки:</p>
<pre class="brush:js;">
let menu = "Завтрак: каша, чай. Обед: суп, чай. Ужин: салат, чай.";
menu = menu.replace("чай", "кофе");
console.log(menu);	// Завтрак: каша, кофе. Обед: суп, чай. Ужин: салат, чай.
</pre>
<p>Однако еще один метод - <span class="b">replaceAll()</span> позволяет заменить все вхождения подстроки:</p>
<pre class="brush:js;">
let menu = "Завтрак: каша, чай. Обед: суп, чай. Ужин: салат, чай.";
menu = menu.replaceAll("чай", "кофе");
console.log(menu);	// Завтрак: каша, кофе. Обед: суп, кофе. Ужин: салат, кофе.
</pre>
<h3>Разделение строки</h3>
<p>Метод <span class="b">split()</span> разбивает строку на массив подстрок по определенному разделителю. В качестве разделителя используется 
строка, которая передается в метод:</p>
<pre class="brush:js;">
const message = "Сегодня была прекрасная погода";
const messageParts = message.split(" ");
console.log(messageParts);	// ["Сегодня", "была", "прекрасная", "погода"]
</pre>
<p>В данном случае строка разделяется по проблему, то есть в итоге в массиве messageParts окажется четыре элемента.</p>
<h3>Проверка начала и окончания строки</h3>
<p>Метод <span class="b">startsWith()</span> возвращает true, если строка начинается с определенной подстроки. А метод <span class="b">endsWith()</span> 
возвращает true, если строка оканчивается на определенную подстроку.</p>
<pre class="brush:js;">
const hello = "let me speak from my heart";
console.log(hello.startsWith("let"));		// true
console.log(hello.startsWith("Let"));		// false
console.log(hello.startsWith("lets"));		// false

console.log(hello.endsWith("heart"));		// true
console.log(hello.startsWith("bart"));		// false
</pre>
<p>При этом играет роль регистр символов, и из примера выше мы видим, что "let" не эквивалентно "Let".</p>
<p>Дополнительный второй параметр позволяет указать индекс (для startsWith - индекс с начала, а для endsWith - индекс с конца строки), относительно которого будет производиться 
сравнение:</p>
<pre class="brush:js;">
const hello = "let me speak from my heart";
console.log(hello.startsWith("me", 4));		// true, "me" - 4 индекс с начала строки

console.log(hello.startsWith("my", hello.length-8));	// true, "my" - 8 индекс с конца
</pre>
<h3>Зполнение строки</h3>
<p>Методы <span class="b">padStart()</span> и <span class="b">padEnd()</span> растянуть строку на определенное количество символов и заполнить строку слева и справа соответственно.</p>
<pre class="brush:js;">
let hello = "hello".padStart(8);  // "   hello"
console.log(hello);
hello = "hello".padEnd(8);		// "hello   "
console.log(hello);
</pre>
<p>Вызов <code>"hello".padStart(8)</code> будет рястягивать строку "hello" на 8 символов. То есть изначально в строке "hello" 5 символов, значит, к ней будет добавлено 3 символа. При чем они будут добавлено в начале строки. 
По умолчанию добавляемые символы представляют пробелы. Аналогично вызов <code>"hello".padEnd(8)</code> растянет строку на 8 символов, но оставшие символы в виде пробелов будут добавлены в конец строки.</p>
<p>По умолчанию эти методы используют пробелы для заполнения, но в качестве второго параметра мы можем передать методам значение, которым надо дополнить строку:</p>
<pre class="brush:js;">
let hello = "hello".padStart(17, "JavaScript, ");  // "JavaScript, hello"
hello = "hello".padEnd(12, " Eugene");		// "hello Eugene"
</pre>
<p>Если добавляемое количество символов больше добавляемой строки, то добавляемая строка повторяется:</p>
<pre class="brush:js;">
let hello = "123".padStart(6, "0");  // "000123"
hello = "123".padEnd(6, "0");		// "123000"
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


<div class="nav"><p><a href="./5.8.php">Назад</a><a href="./">Содержание</a><a href="./6.5.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 7.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 7.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
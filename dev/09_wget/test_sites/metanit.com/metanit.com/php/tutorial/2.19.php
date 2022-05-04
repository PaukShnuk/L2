<!DOCTYPE html>
<html >
<head>
<title>PHP | Анонимные функции</title>
<meta charset="utf-8" />
<meta name="description" content="Анонимные функции в языке программирования PHP, определение и вызов анонимных функиций, функции обратного вызова callback">
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
<h2>Анонимные функции</h2><div class="date">Последнее обновление: 11.03.2021</div>

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

<p><span class="b">Анонимные функции</span> позволяют передавать в качестве параметров функции другие функции или присваивать их переменным.</p>
<p>Анонимная функция определяется как обычная функция за тем исключением, что она не имеет имени. Например:</p>
<pre class="brush:php;">
$hello = function($name)
{
	echo "&lt;h2&gt;Hello $name&lt;/h2&gt;";
};
</pre>
<p>Здесь переменной <code>$hello</code> присваивается анонимная функция. Эта функция также определяется с помощью ключевого слова 
<span class="b">function</span>. Она также принимает параметры - в данном случае параметр <code>$name</code>. И также она имеет некоторый блок операторов.</p>
<p>Для вызова подобной функции применяется имя представляющей ее переменной:</p>
<pre class="brush:php;">$hello("Tom");</pre>
<p>Фактически подобная переменная применяется как стандартная функция.</p>
<p>Полный код:</p>
<pre class="brush:php;">
&lt;?php
$hello = function($name)
{
	echo "&lt;h2&gt;Hello $name&lt;/h2&gt;";
};
$hello("Tom");
$hello("Bob");
?&gt;
</pre>
<img src="./pics/2.11.png" alt="Анонимные функции в PHP" />
<p>Также анонимные функции могут возвращать некоторое значение:</p>
<pre class="brush:php;">
&lt;?php
$sum = function($a, $b)
{
	return $a + $b;
};
$number = $sum(5, 11);	//16
echo $number;
?&gt;
</pre>
<p>Распространенным случаем применения анонимных функций является передача их параметрам других функции. Таким анонимные функции еще называют функциями 
обратного вызова или коллбеками (callback function). Рассмотрим простейший пример:</p>
<pre class="brush:php;">
&lt;?php
function welcome($message)
{
	$message();
}

welcome(function()
{
	echo "Hello!";
});
?&gt;
</pre>
<p>В данном случае функция <code>welcome()</code> имеет параметр <code>$message</code>, который внутри функции вызывается подобно функции <code>$message()</code>.</p>
<p>При вызове функции <code>welcome()</code> параметру <code>$message</code> передается анонимная функция, которая выводит строку "Hello!". В этоге при вызове</p>
<pre class="brush:php;">$message();</pre>
<p>Фактически будет выполняться функция</p>
<pre class="brush:php;">
function()
{
	echo "Hello!";
}
</pre>
<p>Подобным образом мы можем передавать одну функцию различные анонимные функции:</p>
<pre class="brush:php;">
&lt;?php
function welcome($message)
{
	$message();
}
$goodMorning = function() { echo "&lt;h3&gt;Доброе утро&lt;/h3&gt;"; };
$goodEvening = function() { echo "&lt;h3&gt;Добрый вечер&lt;/h3&gt;"; };

welcome($goodMorning);			// Доброе утро
welcome($goodEvening);			// Добрый вечер
welcome(function(){ echo "&lt;h3&gt;Привет&lt;/h3&gt;"; });	// Привет
?&gt;
</pre>
<img src="./pics/2.15.png" alt="Анонимные функции callback в PHP" />
<p>В чем польза подобной передачи анонимных функций в качестве параметров? А польза заключается в том, что мы можем определить функцию, но на момент определения 
функции точно не знать, какие действия она будет выполнять при вызове. Либо просто сделать логику функции более гибкой. Например, нам надо определить функцию 
которая выводит сумму элементов массива:</p>
<pre class="brush:php;">
function sum($numbers)
{
	$result = 0;
	foreach($numbers as $number){
		
		$result += $number;
	}
	return $result;
}

$myNumbers = [-2, -1, 0, 1, 2, 3, 4, 5];
$numbersSum = sum($myNumbers);
echo $numbersSum;			// 12
</pre>
<p>Но теперь пойдем дальше: допустим, мы хотим, чтобы функция подсчитывала сумму только тех чисел, которые удовлетворяют определенному условию, например, 
только положительных чисел или только четных чисел. Но на момент определения функции мы не знаем, какое условие мы захотим использовать в будущем. И в этом 
случае мы можем использовать анонимные функции:</p>
<pre class="brush:php;">
&lt;?php
function sum($numbers, $condition)
{
	$result = 0;
	foreach($numbers as $number){
		if($condition($number))
		{
			$result += $number;	
		}
	}
	return $result;
}

// для четных чисел
$isEvenNumber = function($n){ return $n % 2 === 0;};
// для положительных чисел
$isPositiveNumber = function($n){ return $n &gt; 0;};

$myNumbers = [-2, -1, 0, 1, 2, 3, 4, 5];
$positiveSum = sum($myNumbers, $isPositiveNumber);
$evenSum = sum($myNumbers, $isEvenNumber);
echo "Сумма положительных чисел: $positiveSum &lt;br /&gt; Сумма четных чисел: $evenSum";
?&gt;
</pre>
<p>Результат скрипта:</p>
<pre class="browser">
Сумма положительных чисел: 15
Сумма четных чисел: 4
</pre>
<p>Здесь функция <code>sum()</code> в качестве второго параметра - <code>$condition</code> принимает другую функцию. В цикле при переборе массива 
с помощью этой функции мы проверяем, удовлетворяет ли элемент массива условию:</p>
<pre class="brush:php;">if($condition($number))</pre>
<p>Причем сейчас мы не значем, что это будет за условие, как именно функция <code>$condition</code> будет работать. Мы только знаем, что она получает число и возвращает 
<code>true</code>, если число удовлетворяет условию, либо <code>false</code> - если не удовлетворяет.</p>
<p>И если только число соответствует условию, тогда прибавляем число к общему результату:</p>
<pre class="brush:php;">$result += $number;</pre>
<p>При вызове функции <code>sum()</code> в качестве параметра <code>$condition</code> передаются конкретные анонимные функции. Например, функиция, которая определяет, 
является ли число четным:</p>
<pre class="brush:php;">$isEvenNumber = function($n){ return $n % 2 === 0;};</pre>
<p>Логика функции проста: если остаток от деления числа на 2 равен 0, то число четное. и функция возвращает <code>true</code>.</p>
<p>Далее мы передаем эту функицию:</p>
<pre class="brush:php;">$evenSum = sum($myNumbers, $isEvenNumber);</pre>
<p>В итоге при вызове <code>if($condition($number))</code> фактически будет выполняться функция <code>$isEvenNumber()</code>.</p>

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


<div class="nav"><p><a href="./2.18.php">Назад</a><a href="./">Содержание</a><a href="./2.20.php">Вперед</a></p></div></div>
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
		<li class="closed"><span class="folder">Глава 1. Введение в PHP</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/1.1.php">Общий обзор языка программирования PHP</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/1.2.php">Установка PHP</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/1.3.php">Установка веб-сервера Apache</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/1.5.php">Установка веб-сервера Apache и PHP на Mac OS</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/1.4.php">Первый сайт на PHP</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. Основы PHP</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.1.php">Основы синтаксиса</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.2.php">Переменные</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.3.php">Типы данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.6.php">Операции в PHP</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.7.php">Конструкция if..else и тернарная операция</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.14.php">Конструкции switch и match</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.8.php">Циклы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.12.php">Массивы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.15.php">Ассоциативные массивы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.16.php">Многомерные массивы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.9.php">Функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.17.php">Параметры функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.18.php">Возвращение значений и оператор return</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.19.php">Анонимные функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.20.php">Замыкания / Closure</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.21.php">Стрелочные функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.22.php">Генераторы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.24.php">Ссылки</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.10.php">Область видимости переменной</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.4.php">Константы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.23.php">Проверка существования переменной</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.5.php">Получение и установка типа переменной. Преобразование типов</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.13.php">Операции с массивами</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 3. Отправка данных на сервер</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.2.php">Получение данных из строки запроса. GET-запросы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.1.php">Отправка форм. POST-запросы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.5.php">Безопасность данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.6.php">Отправка массивов</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.3.php">Работа с полями ввода форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.4.php">Пример обработки форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/5.4.php">Отправка файлов на сервер</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 4. Объектно-ориентированное программирование</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.1.php">Объекты и классы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.5.php">Конструкторы и деструкторы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.6.php">Анонимные классы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.2.php">Наследование</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.3.php">Модификаторы доступа</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.4.php">Статические методы и свойства</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.7.php">Интерфейсы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.8.php">Абстрактные классы и методы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.9.php">Traits</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.10.php">Копирование объектов классов</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 5. Базовые возможности PHP</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.11.php">Подключение внешних файлов</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/4.4.php">Пространства имен</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/4.5.php">Типизация данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/4.1.php">Работа со строками</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/4.2.php">Работа с cookie</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/4.3.php">Сессии</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 6. Обработка исключений</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/8.1.php">Конструкция try catch finally</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/8.2.php">Генерация исключений</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 7. Работа с файловой системой</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/5.1.php">Чтение и запись файлов</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/5.2.php">Управление файлами и каталогами</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/5.3.php">Блокировка файла. Функция flock</a></span></li>
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
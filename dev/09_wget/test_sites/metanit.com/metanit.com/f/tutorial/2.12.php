<!DOCTYPE html>
<html >
<head>
<title>F# | Циклы while..do, for..to и for..in</title>
<meta charset="utf-8" />
<meta name="description" content="Циклы while..do и for..to в языке программирования F#, проверка условия, обратный перебор значений в for..downto, for..in и перебор коллекций">
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
<h2>Циклы while..do и for..to</h2><div class="date">Последнее обновление: 24.07.2021</div>

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

<h3>Цикл while...do </h3>
<p>Конструкция <span class="b">while...do </span> представляет цикл, который выполняет некоторые действия, пока истинно определенное условие. 
Эта конструкция имеет следующее формальное определение:</p>
<pre class="brush:f#;">
while условие do
    действия
</pre>
<p>После оператора <span class="b">while</span> идет условие. Это любое выражение, которое возвращает <code>true</code> или <code>false</code>. И пока это условие истинно, 
то есть возвращает <code>true</code>, будут выполняться выражения, указанные после оператора <span class="b">do</span>.</p>
<p>Например, выведем на консоль через конструкцию <code>while</code> числа от 1 до 9:</p>
<pre class="brush:f#;">
let mutable n = 1

while n &lt; 10 do 
    printf $"{n} "
    n &lt;- n + 1
</pre>
<p>Здесь вначале определяем переменную <code>n</code>, которая равна 1. Далее в конструкции <code>while</code> указываем условие <code>n &lt; 10</code>. И пока переменная n 
меньше 10, выполняем действия после оператора <code>do</code>. В частности, выводим на консоль значение переменной n и затем увеличиваем его на единицу.</p>
<p>Причем если конструкция <code>while...do</code> является многострочной, то выражения на второй и последующих строках предваряются отступом.</p>
<p>Таким образом, вначале конструкция while видит, что условие <code>n &lt; 10</code> возвращает true, и поэтому выполняет выражения после оператора <code>do</code>, что приведет к увеличению переменной n 
на единицу. Каждое такое одиночное выполнение цикла называется <span class="b">итерацией</span>.</p>
<p>Затем конструкция while опять видит, что условие <code>n &lt; 10</code> возвращает true (n = 2), и поэтому опять выполняет выражения после 
оператора <code>do</code>. И так далее, пока значение переменной n не станет равным 10. Когда n станет равной 10, соответственно условие <code>n &lt; 10</code> возвратит <code>false</code>, 
и конструкция <code>while...do</code> закончит свою работу. Таким образом, в данном случае будет выполнено 9 итераций.</p>
<p>Одни циклы могут быть вложенными в другие. Например, выведем на консоль таблицу умножения:</p>
<pre class="brush:f#;">
let mutable m = 1
let mutable n = 1
while m &lt; 10 do 
    while n &lt; 10 do 
        printf $"{m * n}\t"
        n &lt;- n + 1
    printfn ""
    m &lt;- m + 1
    n &lt;- 1
</pre>
<img src="./pics/2.2.png" alt="Цикл while...do в языке F#" />
<p>В данном случае для обоих циклов определяем две переменных <code>n</code> и <code>m</code>. Внешний цикл <code>while m &lt; 10 do </code> 
работает, пока переменная <code>m</code> не достигнет 10.</p>
<p>Затем во внешнем цикле определяем внутренний цикл <code>while n &lt; 10 do </code>, который выполняется, пока переменная <code>n</code> не станет равной 10. 
Во внутреннем цикле выводим на консоль произведение значений m и n и затем увеличиваем значение переменной n. Когда <code>n</code> станет равной 10, внутренний цикл 
завершит работу.</p>
<p>После этого продолжится работа внешнего цикла, в котором переводим курсор на следующую строку <code>printfn ""</code>. Увеличиваем значение переменной 
<code>m</code> и сбрасываем значение переменной <code>n</code> до 1, чтобы при новом значении m внутренний цикл заново выполнялся.</p>
<h3>for...to</h3>
<p>Конструкция <span class="b">for...to</span> также представляет собой цикл, который проходит по диапазону значений. Он имеет следующее формальное 
определение:</p>
<pre class="brush:f#;">
for идентификатор = начальное_значение [ to | downto ] конечное_значение do
    действия
</pre>
<p>После оператора <span class="b">for</span> идет название переменной, которой передается некоторое начальное значение.</p>
<p>Далее идет либо оператор <span class="b">to</span>, либо оператор <span class="b">downto</span>, после которых указывается конечное значение переменной.</p>
<p>Если применяется оператор <span class="b">to</span>, то цикл <code>for</code> последовательно увеличивает значение переменной от начального до конечного на единицу.</p>
<p>Если применяется оператор <span class="b">downto</span>, то цикл <code>for</code>, наоборот, последовательно уменьшает значение переменной от начального до конечного на единицу.</p>
<p>Причем и начальное и конечное значения должны представлять тип <span class="b">int</span>.</p>
<p>После конечного значения переменной идет оператор <span class="b">do</span>, после которого указываются действия цикла.</p>
<p>Если конструкция <span class="b">for...do</span>, то выражения второй и последующих строк предваряются отступом.</p>
<p>Например, выведем на консоль числа с 1 до 5 включительно:</p>
<pre class="brush:f#;">for i = 1 to 5 do printfn $"i = {i}"</pre>
<p>Здесь цикл <code>for</code> определяет переменную <code>i</code>, которой в качестве начального значения присваивается 1. Конечное значение - 5. Оператор 
<code>to</code> указывает, что с каждой итерацией значение переменной i будет увеличиваться на единицу от 1 до 5. То есть цикл будет выполняться пять раз.</p>
<p>Для каждого значения переменной от 1 до 5 будет выполняться выражение <code>printfn $"i = {i}"</code>.</p>
<p>Таким образом, мы получим следующий консольный вывод:</p>
<div class="console">
<pre class="consoletext">
i = 1
i = 2
i = 3
i = 4
i = 5
</pre>
</div>
<p>Заменив оператор <code>to</code> на <span class="b">downto</span>, мы можем выполнить перебор значений в обратном порядке:</p>
<pre class="brush:f#;">for i = 5 downto 1 do printfn $"i = {i}"</pre>
<div class="console">
<pre class="consoletext">
i = 5
i = 4
i = 3
i = 2
i = 1
</pre>
</div>
<p>Также мы можем использовать вложенные циклы, например, выведем таблицу умножения с помощью <code>for</code>:</p>
<pre class="brush:f#;">
for m = 1 to 9 do
    for n = 1 to 9 do
        printf $"{m * n}\t"
    printfn ""
</pre>
<h3>for...in</h3>
<p>Конструкция <span class="b">for...in</span> применяется для перебора набора или коллекций значений. Она имеет следующее формальное 
определение:</p>
<pre class="brush:f#;">
for значение in коллекция_элементов do
    действия
</pre>
<p>Цикл пробегается по всем элементам коллекции. Каждый перебираемый элемент помещается в значение, и для этого элемента выполняются действия, 
которые идут после оператора <span class="b">do</span>. Например:</p>
<pre class="brush:f#;">
for n in 1..6 do printf $"{n}"
</pre>
<p>Здесь с помощью выражения <code>1..6</code> генерируется последовательность чисел от 1 до 6. (Последовательности и вообще коллекции будут подробнее рассмотрены 
далее.)</p>
<p>При переборе этой последовательности каждый ее элемент передается в <code>n</code>. То есть в <code>n</code> последовательно окажутся числа от 1 до 6.</p>
<p>После <code>do</code> идут действия, выполняемые над этим значением. В данном случае это вывод элемента последовательности на консоль.</p>
<p>Таким образом, цикл отработает 6 раз (то есть выполнит 6 итераций), и на консоль будет выведена вереница чисел от 1 до 6:</p>
<div class="console"><pre class="consoletext">1 2 3 4 5 6</pre></div>
<p>Причем цикл необязательно должен выполнять какие-то действия над перебираемым элементом:</p>
<pre class="brush:f#;">
for _ in 1..5 do printfn $"Hello"
</pre>
<p>В данном случае на консоль просто пять раз выводится строка "Hello". И поскольку нам перебираемые элементы не важны, то вместо названия значения указываем прочерк.</p>
<p>Также можно включать одни циклы в другие. Например, выведем таблицу умножения.</p>
<pre class="brush:f#;">
for m in 1..9 do 
    for n in 1..9 do 
        printf $"{n * m} \t"
    printfn ""
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


<div class="nav"><p><a href="./2.11.php">Назад</a><a href="./">Содержание</a><a href="./2.13.php">Вперед</a></p></div></div>
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
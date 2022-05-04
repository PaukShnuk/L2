<!DOCTYPE html>
<html >
<head>
<title>JavaScript | Циклы</title>
<meta charset="utf-8" />
<meta name="description" content="Циклы в JavaScript for, for-in, for-of, while и do-while, выход из цикла, операторы break и continue">
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
<h2>Циклы</h2><div class="date">Последнее обновление: 31.08.2021</div>

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

<p>Циклы позволяют в зависимости от определенных условий выполнять некоторое действие множество раз. В JavaScript имеются следующие виды циклов:</p>
<ul>
<li><p><span class="b">for</span></p></li>
<li><p><span class="b">for..in</span></p></li>
<li><p><span class="b">for..of</span></p></li>
<li><p><span class="b">while</span></p></li>
<li><p><span class="b">do..while</span></p></li>
</ul>
<h3>Цикл for</h3>
<p>Цикл for имеет следующее формальное определение:</p>
<pre class="brush:js;">
for ([инициализация счетчика]; [условие]; [изменение счетчика]){

    // действия
}
</pre>
<p>Например, используем цикл <span class="b">for</span> для перебора чисел от 0 до 4:</p>
<pre class="brush:js;">
for(let i = 0; i&lt;5; i++){
	
	console.log(i);
}
console.log("Конец работы");
</pre>
<p>Первая часть объявления цикла - <code>let i = 0</code> - создает и инициализирует счетчик - переменную i. И перед выполнением цикла ее 
значение будет равно 0. По сути это то же самое, что и объявление переменной.</p>
<p>Вторая часть - условие, при котором будет выполняться цикл: <code>i&lt;5</code>. В данном случае цикл будет выполняться, пока значение i не достигнет 5.</p>
<p>Третья часть - <code>i++</code> - приращение счетчика на единицу.</p>
<p>То есть при запуске переменная <code>i</code> равна 0. Это значение отвечает условию <code>i&lt;5</code>, поэтому будет выполняться блок цикла, а именно строка кода</p>
<pre class="brush:js;">console.log(i);</pre>
<p>После выполнения блока цикла выполняется треться часть объявления цикла - приращение счетчика. То есть переменная i сановится равной 1. Это значение 
также отвечает условию, поэтому блок цикла снова выполняется. Таким образом, блок цикла сработает 5 раз, пока значение i не станет равным 5. Это значение НЕ отвечает условию, поэтому произойдет выход из цикла. 
И управление программой перейдет к инструкциям, которые идут после блока цикла. Консольный вывод программы:</p>
<pre class="browser">
0
1
2
3
4
Конец работы
</pre>
<p>Каждое отдельное повторение цикла называется итерацией. Таким образом, в данном случае сработают 5 итераций.</p>

<p>При этом необязательно увеличивать счетчик на единицу, можно производить с ним другие действия, например, уменьшать на единицу:</p>
<pre class="brush:js;">
for(let i = 10; i &gt; 5; i--){
     
    console.log(i);
}
</pre>
<p>В данном случае на консоль выводится числа от 10 до 6.</p>
<p>Или увеличим счетчик на 2:</p>
<pre class="brush:js;">
for(let i = 0; i &lt; 10; i+=2){
     
    console.log(i);
}
</pre>
<p>Здесь выводятся на консоль все четные числа от 0 до 8</p>
<p>При этом можно опускать различные части объявления цикла:</p>
<pre class="brush:js;">
let i = 0;
for(; i &lt; 60;){
     
    console.log(i);
	i = i + 10;
}
</pre>
<p>В данном случае переменная i определена вне цикла. В самом объявлении цикла есть только условие, остальные две части отсутствуют. Изменение переменной 
происходит в самом блоке цикла: оно увеличивается на 10. В итоге на консоль будут выведены числа 0, 10, 20, 30, 40, 50.</p>
<h4>Применение нескольких счетчиков в цикле</h4>
<p>При необходимости можно использовать несколько счетчиков:</p>
<pre class="brush:js;">
for(let i = 1, j=1; i &lt; 5, j &lt; 4; i++, j++){
     
    console.log(i + j);
}
// 1 итерация: i=1, j=1; i + j = 2
// 2 итерация: i=2, j=2; i + j = 4
// 3 итерация: i=3, j=3; i + j = 6
</pre>
<p>Здесь теперь используются два счетчика и два условия. Рассмотрим пошагово, что здесь происходит:</p>
<ol>
<li><p>Первая итерация. Начальные значения переменных i и y:</p>
<pre class="brush:js;">i=1, j=1;</pre>
<p>Для каждой переменной установлены свои условия. И вначале начальные значения переменных соответствуют этим условиям:</p>
<pre class="brush:js;">i &lt; 5, j &lt; 4;</pre>
<p>В блоке цикла выводится сумма этих переменных. И дальше значения обоих переменных увеличиваются на единицу. Они становятся равны</p>
<pre class="brush:js;">i=2, j=2;</pre>
<p>Эти значения также соответствуют условиям, поэтому выполняется вторая итерация</p>
</li>
<li><p>Вторая итерация. Значения переменных i и y:</p>
<pre class="brush:js;">i=2, j=2;</pre>
<p>После выполнения блока цикла значения обоих переменных увеличиваются на единицу. Они становятся равны</p>
<pre class="brush:js;">i=3, j=3;</pre>
<p>Эти значения также соответствуют условиям, поэтому выполняется третья итерация</p>
</li>
<li><p>Третья итерация. Значения переменных i и y:</p>
<pre class="brush:js;">i=3, j=3;</pre>
<p>После выполнения блока цикла значения обоих переменных увеличиваются на единицу. Они становятся равны</p>
<pre class="brush:js;">i=4, j=4;</pre>
<p>Значение переменной <code>i</code> соответствует условию <code>i &lt; 5</code>, однако значение переменной j (4) НЕ соответствует условию 
<code>j &lt; 4</code>. Поэтому происходит выход из цикла. Его работа завершена.</p>
</li>
</ol>
<h4>Вложенные циклы</h4>
<p>Одни циклы могут внутри себя содержать другие:</p>
<pre class="brush:js;">
for(let i=1; i &lt;= 5; i++){
     
	 for(let j = 1; j &lt;=5; j++){
		console.log(i * j);
	 }
}
</pre>
<p>Здесь один цикл включается в себя другой. ВО внешнем цикле определяется переменная i. Вначале она равна 1 и это значение соответствует условию цикла 
(<code>i &lt;=5</code>), поэтому будет выполняться блок цикла, который содержит внутренний цикл.</p>
<p>Во внутреннем цикле определяется переменная-счетчик j, которая изначально равна 1, и потом внутренний цикл выполняет 5 итераций, пока переменная j не станет равна 5.</p>
<p>После того, как блок внешнего цикла завершен, переменная i увеличивается на 1 и становится равной 2, что опять же соответствует условию. И снова выполняется 
блок внешнего цикла. В этом блоке снова выполняются пять итераций внутреннего цикла. И так далее. В итоге внутренний цикл будет выполняться 25 раз.</p>
<h3>Цикл while</h3>
<p>Цикл while выполняется до тех пор, пока некоторое условие истинно. Его формальное определение:</p>
<pre class="brush:js;">
while(условие){
	
	// действия
}
</pre>
<p>Опять же выведем с помощью <span class="b">while</span> числа от 1 до 5:</p>
<pre class="brush:js;">
let i = 1;
while(i &lt;=5){
	
	console.log(i);
	i++;
}
</pre>
<p>Цикл while здесь будет выполняться, пока значение i не станет равным 6.</p>
<h3>do..while</h3>
<p>В цикле do сначала выполняется код цикла, а потом происходит проверка условия в инструкции while. И пока это условие истинно, цикл 
повторяется. Например:</p>
<pre class="brush:js;">
let i = 1;
do{
	console.log(i);
	i++;
}while(i &lt;= 5)
</pre>
<p>Здесь код цикла сработает 5 раз, пока i не станет равным 5. При этом цикл <span class="b">do</span> гарантирует хотя бы однократное выполнение действий, даже если условие в инструкции <span class="b">while</span> не будет истинно.</p>
<h3>Операторы continue и break</h3>
<p>Иногда бывает необходимо выйти из цикла до его завершения. В этом случае мы можем воспользоваться оператором <span class="b">break</span>:</p>
<pre class="brush:js;">
for(let i=1; i &lt;= 10; i++){
     
	 if(i===6) break;
	 console.log(i);
}
console.log("Конец работы");
</pre>
<p>Данный цикл увеличивает переменную i c 1 до 10 включая, то есть согласно условию цикла блок цикла должен выполняться 10 раз, то есть поизвести 10 итераций. 
Однако поскольку в блоке цикла происходит поверка <code>if(i===6) break;</code>, то, когда значение переменной i достигнет 6, то данное условие 
прервет выполнение цикла с помощью оператора break. И цикл заершит работу.</p>
<pre class="browser">
1
2
3
4
5
Конец работы
</pre>
<p>Если нам надо просто пропустить итерацию, но не выходить из цикла, мы можем применять оператор <span class="b">continue</span>:</p>
<pre class="brush:js;">
for(let i=1; i &lt;= 10; i++){
     
	 if(i===6) continue;
	 console.log(i);
}
console.log("Конец работы");
</pre>
<p>В этом случае, когда значение переменной i станет равным 6, то в цикле конструкция <code>if(i===6) continue</code> завершит текущую итерацию, далее идущие инструкции цикла не будут 
выполняться, и произойдет переход к следующей итерации:</p>
<pre class="browser">
1
2
3
4
5
7
8
9
10
Конец работы
</pre>
<h3>for..in</h3>
<p>Цикл <span class="b">for..in</span> предназначен главным образом для перебора объектов. Его формальное определение:</p>
<pre class="brush:js;">
for (свойство in объект) {
	// действия
}
</pre>
<p>Этот цикл перебирает все свойства объекта. Например:</p>
<pre class="brush:js;">
const person = {name: "Tom", age: 37};
for(prop in person){
     
	 console.log(prop);
}
</pre>
<p>Здесь перебирается объек person, который имеет два свойства - name и age. Соответственно на консоли мы увидим:</p>
<pre class="browser">
name
age
</pre>
<h3>Цикл for...of</h3>
<p>Цикл <span class="b">for...of</span> предназначен для перебора наборов данных. Например, строка представляет фактически набор символов. И мы можем перебрать ее с помощью данного цикла:</p>
<pre class="brush:js;">
const website = "METANIT.COM";
for(ch of website){
     
	 console.log(ch);
}
</pre>
<p>В итоге цикл перебирает все символы строки website и помещает каждый текущий символ в переменную <code>ch</code>, значение которой затем 
выводится на консоль.</p>
<pre class="browser">
M
E
T
A
N
I
T
.
C
O
M
</pre>
<p>Другим примером может быть перебор массива:</p>
<pre class="brush:js;">
const people = ["Tom", "Sam", "Bob"];
for(const person of people) {
    console.log(person);
}
</pre>
<p>В данном случае цикл перебирает элементы массива people. Каждый элемент последовательно помещается в константу <code>person</code>. И далее мы можем вывести ее значение на консоль:</p>
<pre class="browser">
Tom
Sam
Bob
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


<div class="nav"><p><a href="./2.6.php">Назад</a><a href="./">Содержание</a><a href="./3.1.php">Вперед</a></p></div></div>
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
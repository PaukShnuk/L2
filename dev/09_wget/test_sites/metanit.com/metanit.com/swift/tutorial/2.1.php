<!DOCTYPE html>
<html >
<head>
<title>Swift | Переменные и константы. Типы данных</title>
<meta charset="utf-8" />
<meta name="description" content="Переменные и константы в языке программирования Swift, ключевые слова var и let, типы данных, строгая типизация переменных">
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
<h1>Основы Swift</h1><h2>Переменные и константы. Типы данных</h2><div class="date">Последнее обновление: 25.12.2017</div>

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

<p>Программа на Swift обладает двумя качествами: она может хранить некоторые данные и может выполнять действия. Для хранения данных в Swift, как и в других 
языках программирования, используются <span class="b">переменные</span>. Переменная представляет именнованный участок 
в памяти, в котором хранится некоторое значение.</p>
<p>Переменные имеют имя и значение. Для определения переменной используется ключевое слово <span class="b">var</span>. Например:</p>
<pre class="brush:swift;">
var name = "Tom"
</pre>
<p>В данном случае переменная имеет имя "name" и в качестве значения хранит строку "Tom". После определения переменной 
мы можем использовать ее, например, передать ее функцию print, чтобы вывести ее значение:</p>
<pre class="brush:swift;">
var name = "Tom"
print(name)
</pre>
<img src="pics/2.2.png" alt="Переменные в Swift" />
<p>Отличительной особенностью переменных является то, что мы можем изменять их значение многократно во время работы программы. Например:</p>
<pre class="brush:swift;">
var name = "Tom" // значение Tom
name = "Bob" // значение Bob
</pre>
<p>Кроме переменных для хранения данных в программе могут использоваться константы. Константы подобны переменным, они также 
хранят некоторое значение, за тем исключением, что определяются с 
помощью ключевого слова <span class="b">let</span>, и мы не можем после их инициализации изменить их значение:</p>
<pre class="brush:swift;">
let name = "Tom" // значение Tom
// name = "Bob"  - так сделать нельзя, так как name - константа
</pre>
<p>Таким образом, если значение некоторой переменной в течении программы меняться не будет, то вместо этой переменной лучше использовать константу.</p>
<p>Мы можем определить сразу несколько переменных и констант на одой строке. В этом случае они должны разделяться запятой:</p>
<pre class="brush:swift;">
var name = "Tom", surname = "Smith"
</pre>
<h3>Правила именования</h3>
<p>Переменные и константы должны иметь уникальные имена. Нельзя использовать в программе несколько переменных и (или) констант с одними и теми же именами.</p>
<p>Причем хорошей практикой является использование названий в так называемом "верблюжем регистре" или CamelCase. То есть названия начинаются с маленькой 
буквы. Если название состоит из нескольких слов, то только первое из них начинается с маленькой буквы. Например:</p>
<pre class="brush:swift;">
var personName = "Tom"
var personStreatAddress = "St. Patrick avenue, 20"
</pre>
<h3>Типы данных</h3>
<p>Каждая переменная или константа хранит в себе значение определенного типа. Например, выше использованная переменная <code>name</code> хранит строку:</p>
<pre class="brush:swift;">var name = "Tom"</pre>
<p>В языке Swift имеются следующие типы данных:</p>
<ul>
<li><p><span class="b">Int8</span>: представляет целые числа со знаком размером не более 8 бит (от -128 до 127)</p></li>
<li><p><span class="b">UInt8</span>: представляет целые положительные числа размером не более 8 бит  (от 0 до 255)</p></li>
<li><p><span class="b">Int16</span>: представляет целые числа со знаком размером не более 16 бит (от -32768 до 32767)</p></li>
<li><p><span class="b">UInt16</span>: представляет целые положительные числа размером не более 16 бит (от 0 до 65535)</p></li>
<li><p><span class="b">Int32</span>: представляет целые числа со знаком размером не более 32 бита  (от -2147483648 до 2147483647)</p></li>
<li><p><span class="b">UInt32</span>: представляет целые положительные числа размером не более 32 бита (от 0 до 4294967295)</p></li>
<li><p><span class="b">Int64</span>: представляет целые числа со знаком размером не более 64 бита (от -9223372036854775808 до 9223372036854775807)</p></li>
<li><p><span class="b">UInt64</span>: представляет целые положительные числа размером не более 64 бита  (от 0 до 18446744073709551615)</p></li>
<li><p><span class="b">Int</span>: представляет целые числа со знаком, например, 1, -30, 458. На 32-разрядных платформах эквивалентен Int32, а на 64-разрядных - Int64</p></li>
<li><p><span class="b">UInt</span>: представляет целые положительные числа, например, 1, 30, 458. На 32-разрядных платформах эквивалентен UInt32, а на 64-разрядных - UInt64</p></li>
<li><p><span class="b">Float</span>: 32-битное число с плавающей точкой, содержит до 6 чисел в дробной части</p></li>
<li><p><span class="b">Double</span>: 64-битное число с плавающей точкой, содержит до 15 чисел в дробной части</p></li>
<li><p><span class="b">Float80</span>: 80-битное число с плавающей точкой</p></li>
<li><p><span class="b">Bool</span>: представляет логическое значение <code>true</code> или <code>false</code></p></li>
<li><p><span class="b">String</span>: представляет строку</p></li>
<li><p><span class="b">Character</span>: представляет отдельный символ</p></li>
</ul>
<p>Тип переменных и констант может определен явно или неявно. Выше тип определялся неявно. 
Но мы также можем явным образом определить тип:</p>
<pre class="brush:swift;">
var age: Int = 32
var name: String = "Tom"
</pre>
<p>Определение переменной с типом происходит по шаблону:</p>
<pre class="brush:swift;">
var название_переменной: тип_переменной = значение_переменной
</pre>
<p>Также мы можем сначала определить переменную, а потом присвоить ей значение:</p>
<pre class="brush:swift;">
var name: String
name = "Tom"
</pre>
<p>Также можно определить сразу набор однотипных переменных:</p>
<pre class="brush:swift;">
var height, weight: Double
</pre>
<h3>Неявная типизация</h3>
<p>Если мы явным образом не указываем тип переменных и констант, то он автоматически выводится 
системой на основании хранящегося значения. Например:</p>
<pre class="brush:swift;">var name = "Tom"</pre>
<p>Здесь явным образом не указан тип переменной <code>name</code>, однако поскольку она хранит строку, то система будет рассматривать эту переменную как объект типа 
<code>String</code>. Или, например:</p>
<pre class="brush:swift;">var age = 32</pre>
<p>Здесь также явно не указан тип переменной, поэтому система будет рассматривать эту переменную как объект <code>Int</code>, то есть целое число.</p>
<p>Однако при таком подходе следует учитывать, что Swift не всегда выводит те типы, которые нам могут быть нужны. 
Например, все целые числа Swift воспринимает как объекты типа Int, а дробные числа - как объекты типа Double. 
Это надо учитывать, чтобы не попасть в некорректные ситуации. Например:</p>
<pre class="brush:swift;">
var d = 3.4           // тип Double
var f : Float = 1.2
d = f                   // ! Ошибка - разные типы
</pre>
<p>В данном случае на основании присвоенного значения переменная d будет представлять тип Double, а переменная 
f представляет тип Float, поэтому при присвоении переменной d значения f мы получим ошибку.</p>
<h3>Типобезопасность</h3>
<p>Swift является типобезопасным языком со строгой типизацией, поэтому после того, как для переменной будет установлен тип, мы его уже изменить не сможем. 
Так, в следующем случае мы столкнемся с ошибкой:</p>
<pre class="brush:swift;">
var age: Int
age = "Tom"
</pre>
<p>Ошибка возникает, так как переменная age ожидает число, а строка "Том" не является числом и не соответствует переменной age по типу.</p>
<p>Мы можем присваивать значение переменной или константы другой переменной:</p>
<pre class="brush:swift;">
var age: Int = 22
var years = age
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


<div class="nav"><p><a href="1.2.php">Назад</a><a href="./">Содержание</a><a href="2.2.php">Вперед</a></p></div></div>
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
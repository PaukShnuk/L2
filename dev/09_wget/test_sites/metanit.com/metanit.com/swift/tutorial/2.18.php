<!DOCTYPE html>
<html >
<head>
<title>Swift | Замыкания</title>
<meta charset="utf-8" />
<meta name="description" content="Замыкания closures в языке программирования Swift, типы замыканий, замыкающие выражения">
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
<h2>Замыкания</h2><div class="date">Последнее обновление: 01.01.2018</div>

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

<p>Замыкания (сlosures) представляют самодостаточные блоки кода, которые могут использоваться многократно в различных частях программы, в том числе в виде параметров 
в функциях.</p>
<p>По сути функции являются частным случаем замыканий. Замыкания могут иметь одну из трех форм:</p>
<ul>
<li><p>глобальные функции, которые имеют имя и которые не сохраняют значения внешних переменных и констант</p></li>
<li><p>вложенные функции, которые имеют имя и которые сохраняют значения внешних переменных и констант</p></li>
<li><p>замыкающие выражения (closure expressions), которые не имеют имени и которые могут сохранять значения внешних переменных и констант</p></li>
</ul>
<p>В прошлых темах были рассмотрены глобальные и вложенные функции, поэтому в данной теме рассмотрим только замыкающие выражения.</p>
<p>Замыкающие выражения в общем случае имеют следующий синтаксис:</p>
<pre class="brush:swift;">
{ (параметры) -&gt; тип_возвращаемого_значения in

    инструкции
}
</pre>
<p>Если замыкания не имеют параметров или не возвращают никакого значения, то соответствующие элементы при определении замыкания могут опускаться.</p>
<p>Подобно тому, как переменная или константа могут представлять ссылку на функцию, они также могут представлять ссылку 
на замыкание:</p>
<pre class="brush:swift;">
let hello = { print("Hello world")}
hello()
hello()
</pre>
<p>В данном случае константе hello присваивается анонимная функция, которая состоит из блока кода, в котором выполняются некоторые действия. 
Эта функция не имеет никакого имени, мы ее можем вызывать только через константу hello.</p>
<p>Фактически константа hello в данном случае имеет тип <code>()-&gt;()</code> или <code>()-gt;Void</code>:</p>
<pre class="brush:swift;">let hello: ()-&gt;Void = { print("Hello world")}</pre>
<p>Дополнительно можно определить список параметров с помощью ключевого слова <span class="b">in</span>:</p>
<pre class="brush:swift;">
let hello = {
    (message: String) in
    print(message)
}
hello("Hello")
hello("Salut")
hello("Ni hao")
</pre>
<p>В данном случае замыкание принимает один параметр - message, который представляет тип String. Список параметров 
указывается до ключевого слова in, а после идут инструкции функции.</p>
<p>Также можно определить возвращаемое значение:</p>
<pre class="brush:swift;">
let sum = {
    (x: Int, y: Int) -&gt; Int in
    return x + y
}
print(sum(2, 5))        // 7
print(sum(12, 15))      // 27
print(sum(5, 3))        // 8
</pre>
<h3>Замыкания как аргументы функций</h3>
<p>Как правило, анонимные функции используются в том месте, где они определены. Нередко анонимные функции передаются в 
другие функции в качестве параметра, если параметр представляет функцию:</p>
<pre class="brush:swift;">
func operation(_ a: Int, _ b: Int, _ action: (Int, Int) -&gt; Int) -&gt; Int{
    
    return action(a, b)
}

let x = 10
let y = 12

let result1 = operation(x, y, {(a: Int, b: Int) -&gt; Int in
    
    return a + b
})

print(result1)    // 22

var result2 = operation(x, y, {(a: Int, b: Int) -&gt; Int in return a - b})

print(result2)    // -2
</pre>
<p>Здесь функция <code>operation()</code> в качестве третьего параметра принимает другую функцию, которой передаются 
значения первого и второго параметров. Но нам необязательно определять дополнительные функции, поскольку в 
operation мы можем передать замыкающее выражение.</p>
<p>В первом случае это выражение производит сложение параметров, а во втором случае - их вычитание.</p>
<p>Таким образом, замыкающие выражения позволяют нам сократить объем кода, поскольку не надо определять дополнительную функцию для передачи ее в 
качестве параметра. Но мы можем сократить код еще больше. Система может самостоятельно выводить тип параметров и тип возвращаемого значения, поэтому 
мы можем определение этих типов опускать:</p>
<pre class="brush:swift;">
let x = 10
let y = 12

let result1 = operation(x, y, {(a, b) in a + b })
print(result1)    // 22

let result2 = operation(x, y, {(a, b) in a - b })
print(result2)    // -2
</pre>
<p>Компилятор видит, замыкающее выражение передается в качестве значения для параметра типа <code>(Int, Int) -&gt; Int</code>, 
то есть в качестве функции, которая принимает параметры типа Int. Поэтому можно не указывать тип параметров a и b. 
Также компилятор определяет, что функция возвращает значение типа Int, поэтому выражение после ключевого слова <span class="b">in</span> 
воспринимается как возвращаемое значение, и явным образом можно не использовать оператор return.</p>
<p>Но мы можем еще больше сократить замыкание, используя сокращения для параметров:</p>
<pre class="brush:swift;">
let x = 10
let y = 12

let result1 = operation(x, y, {$0 + $1})
print(result1)    // 22

let result2 = operation(x, y, {$0 - $1})
print(result2)    // -2
</pre>
<p><code>$0</code> представляет первый переданный в функцию параметр, а <code>$1</code> - второй параметр. Система автоматически распознает их и поймет, 
что они представляют числа.</p>
<p>Однако поскольку здесь выполняются примитивные операции - сложение и вычитание двух чисел, то мы можем сократить замыкания еще больше:</p>
<pre class="brush:swift;">
let x = 10
let y = 12

let result1 = operation(x, y, +)
print(result1)    // 22

let result2 = operation(x, y, -)
print(result2)    // -2
</pre>
<p>Система автоматически распознает,что должны выполняться операции сложения и вычитания двух переданных параметров, и поэтому результат 
будет тот же.</p>
<h3>Доступ к контексту</h3>
<p>Замыкания имеют полный доступ к контексту, в котором они определены. Кроме того, замыкания могут использовать внешние 
переменные и константы как состояние, которое может храниться на всем протяжении жизни замыкания:</p>
<pre class="brush:swift;">
func action() -&gt; (()-&gt;Int){
    
    var val = 0
    return {
        val = val+1
        return val
    }
}
let inc = action()
print(inc())	// 1
print(inc())	// 2
</pre>
<p>Здесь определена функция action, которая, в свою очередь, сама возвращает функцию. По факту она возвращает замыкающее выражение, 
которое увеличивает внешнюю переменную val на единицу и затем возвращает ее значение. Но при вызове мы видим, что 
переменная val сохраняет свое значение после увеличения, оно не сбрасывается обратно к нулю при каждом вызове функции. То есть переменная val представляет состояние, где замыкание 
может хранить данные.</p>
<h3>Захват значений</h3>
<p>Замыкающие выражения обладают способностью сохранять начальные значения переданных в них переменных. Например, рассмотрим следующую ситуацию:</p>
<pre class="brush:swift;">
var a = 14
var b = 2

let myClosure: () -&gt; Int = {return a + b}
print(myClosure())  // 16

a = 5
b = 6
print(myClosure())  // 11
</pre>
<p>Замыкающее выражение, на которое указывает константа myClosure, складывает значения переменных a и b. С изменением значений переменных также 
меняется результат замыкания myClosure. Однако мы можем зафиксировать начальные значения переменных:</p>
<pre class="brush:swift;">
var a = 14
var b = 2

let myClosure: () -&gt; Int = {[a, b] in return a + b}
print(myClosure())  // 16

a = 5
b = 6
print(myClosure())  // 16
</pre>
<p>Передав переменные в квадратные скобки: <code>[a, b]</code>, мы тем самым фиксируем их начальные значения. И даже если значения этих переменных в какой-то 
момент изменятся, замыкание будет оперировать прежними значениями.</p>
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


<div class="nav"><p><a href="2.21.php">Назад</a><a href="./">Содержание</a><a href="3.1.php">Вперед</a></p></div></div>
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
<!DOCTYPE html>
<html >
<head>
<title>PHP | Объекты и классы</title>
<meta charset="utf-8" />
<meta name="description" content="Объекты и классы в языке программирования PHP, определение классов, свойства и методы класса, сравнение объектов, ссылка на текущий объект $this">
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
<h1>Объектно-ориентированное программирование</h1><h2>Объекты и классы</h2><div class="date">Последнее обновление: 31.03.2021</div>

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

<p>При создании программы на PHP и отдельных ее блоков нам вполне может хватить той функциональности, 
которую представляют функции. Однако PHP имеет и другие возможности по созданию программ, которые 
представляет объектно-ориентированное программирование. В ряде случаев программы, использующие ООП, проще в понимании, их легче поддерживать и изменять.</p>
<p>Ключевыми понятиями парадигмы ООП являются понятия "класс" и "объект". Описанием объекта является класс, а объект представляет экземпляр этого класса. 
Можно провести следующую аналогию: например, у каждого человека есть имя, определенный возраст, вес, какие-то другие параметры. 
То есть некоторый шаблон, который содержит набор параметров человека - этот шаблон можно назвать классом. А реально же существующий человек с конкретным именем, возрастом, весом и т.д. 
является объектом или экземпляром этого класса.</p>
<p>Для создания класса в PHP используется ключевое слово <span class="b">class</span>, после которого идет название класса и фигурные скобки {} - блок кода класса. Например, новый класс, представляющий пользователя:</p>
<pre class="brush:php;">
class Person
{}
</pre>
<p>Чтобы создать объект класса Person, применяется ключевое слово <span class="b">new</span>:</p>
<pre class="brush:php;">
&lt;?php
class Person
{ }

$person = new Person();
print_r($person);
?&gt;
</pre>
<p>В данном случае переменная <code>$person</code> является объектом класса <code>Person</code>. С помощью функции <code>print_r()</code> можно вывести содержимое объекта, 
как и в случае с массивами.</p>
<p>При этом неважно, определяется класс до или после создания объекта. Например, мы можем сначала определить переменную класса, а потом определить этот класс:</p>
<pre class="brush:php;">
&lt;?php
$person = new Person();

class Person
{ }
?&gt;
</pre>
<h3>Свойства и методы</h3>
<p>Класс может содержать переменные, которые описывают какие-то признаки объекта, его состояние и которые еще назывют свойствами или атрибутам. 
И также класс класс может содержать функции, которые еще назвают методами и которые определяют его поведение.</p>
<p>Так, добавим в класс Person несколько свойств и методов:</p>
<pre class="brush:php;">
&lt;?php
class Person
{ 
	public $name, $age;
     
    function hello()
    {
        echo "Hello!&lt;br&gt;";
    }
}
$tom = new Person();
$tom-&gt;name = "Tom"; // установка свойства $name
$tom-&gt;age = 36; // установка свойства $age
$personName = $tom-&gt;name;	// получение значения свойства $name
echo "Имя пользователя: " . $personName . "&lt;br&gt;";
$tom-&gt;hello(); // вызов метода hello()
print_r($tom);
?&gt;
</pre>
<p>Здесь класс Person содержит два свойства: <code>$name</code> и <code>$age</code>. Свойства объявляются как обычные переменные, перед которыми стоит 
модификатор доступа - в данном случае модификатор <span class="b">public</span>.</p>
<p>Методы представляют обычные функции, которые выполняют определенные действия. Здесь функция <code>hello()</code> просто выводит приветствие.</p>
<p>После создания объекта класса Person:</p>
<pre class="brush:php;">$tom = new Person();</pre>
<p>Мы можем через имя переменной класса обращаться к его свойствам и методам. Чтобы обратиться к свойствам и методам объекта применяется оператор доступа <span class="b">-&gt;</span>. Например, установить значения свойств:</p>
<pre class="brush:php;">
$tom-&gt;name = "Tom"; // установка свойства $name
$tom-&gt;age = 36; // установка свойства $age
</pre>
<p>Или получить значение (например, присвоить его переменной):</p>
<pre class="brush:php;">$personName = $tom-&gt;name;	// получение значения свойства $name</pre>
<p>Или вызвать методы объекта:</p>
<pre class="brush:php;">$tom-&gt;hello(); // вызов метода hello()</pre>
<p>В итоге мы получим следующий вывод браузера:</p>
<pre class="browser">
Имя пользователя: Tom
Hello!
Person Object ( [name] =&gt; Tom [age] =&gt; 36 )
</pre>
<p>При этом свойствам можно задать в классе некоторые начальные значения:</p>
<pre class="brush:php;">
&lt;?php
class Person
{ 
	public $name = "Undefined", $age = 18;
     
    function hello()
    {
        echo "Hello!&lt;br&gt;";
    }
}
$tom = new Person();
$tom-&gt;age = 36; // установка свойства $age

echo "Имя пользователя: " . $tom-&gt;name . "&lt;br&gt;";
echo "Возраст пользователя: " . $tom-&gt;age . "&lt;br&gt;";
?&gt;
</pre>
<p>Вывод брузера:</p>
<pre class="browser">
Имя пользователя: Undefined
Возраст пользователя: 36
</pre>
<h3>Ключевое слово this</h3>
<p>Для обращения к свойствам и методам объекта внутри его класса применяется ключевое слово <span class="b">this</span>. Например, 
определим в классе метод для вывода информации об объекте:</p>
<pre class="brush:php;">
&lt;?php
class Person
{ 
	public $name = "Undefined", $age = 18;
	
    function displayInfo()
    {
        echo "Name: " . $this-&gt;name ."; Age: " . $this-&gt;age . "&lt;br&gt;";
		// также можно написать
		// echo "Name: $this-&gt;name; Age: $this-&gt;age&lt;br&gt;";
    }
}
$tom = new Person();
$tom -&gt; name = "Tom";
$tom -&gt; displayInfo();	// Name: Tom; Age: 18
?&gt;
</pre>
<p>Для обращения к полям и методам внутри класса также применяется оператор доступа <span class="b">-&gt;</span>, 
перед которым идет <span class="b">$this</span>. Причем это <span class="b">$this</span> указывает именно на текущий объект. Что это значит в 
практическом плане? Например:</p>
<pre class="brush:php;">
&lt;?php
class Person
{ 
	public $name = "Undefined", $age = 18;
	
    function displayInfo()
    {
        echo "Name: $this-&gt;name; Age: $this-&gt;age&lt;br&gt;";
    }
}
$tom = new Person();
$tom -&gt; name = "Tom";
$tom -&gt; displayInfo();

$bob = new Person();
$bob -&gt; name = "Bob";
$bob -&gt; age = 25;
$bob -&gt; displayInfo();
?&gt;
</pre>
<p>При вызове</p>
<pre class="brush:php;">$tom -&gt; displayInfo();</pre>
<p><code>$this</code> фактически будет указывать на переменную <code>$tom</code>. Тогда как при вызове</p>
<pre class="brush:php;">$bob -&gt; displayInfo();</pre>
<p><code>$this</code> будет указывать на переменную <code>$bob</code>.</p>
<p>Вывод браузера:</p>
<pre class="browser">
Name: Tom; Age: 18
Name: Bob; Age: 25
</pre>

<h3>Сравнение объектов</h3>
<p>При сравнении объектов классов следует принимать во внимание ряд особенностей. В частности, 
при использовании оператора равенства <span class="b">==</span> два объекта считаются равными, если они представляют один и тот же класс и 
их свойства имеют одинаковые значения.</p>
<p>А при использовании оператора эквивалентности <span class="b">===</span> оба объекта считаются равными, если 
обе переменных классах указывают на один и тот же экземпляр класса.</p>
<p>Рассмотрим на примере:</p>

<pre class="brush:php;">
&lt;?php
class Person
{ 
	public $name, $age;
    function displayInfo()
    {
        echo "Name: $this-&gt;name; Age: $this-&gt;age&lt;br&gt;";
    }
}
$tom = new Person();
$tom -&gt; name = "Tom";
$tom -&gt; age = 36;

$tomas = new Person();
$tomas -&gt; name = "Tom";
$tomas -&gt; age = 36;

if($tom == $tomas) echo "переменные tom и tomas равны&lt;br&gt;";
else echo "переменные tom и tomas НЕ равны&lt;br&gt;";

if($tom === $tomas) echo "переменные tom и tomas эквивалентны";
else echo "переменные tom и tomas НЕ эквивалентны";
?&gt;
</pre>
<p>Здесь сравниваются две переменных - $tom и $tomas. Они представляют один и тот же класс Person, и их свойства имеют одни и те же значения. 
Однако они представляют разные объекты. Поэтому при сравнении оператор <span class="b">==</span> возвратит <code>true</code>, а 
оператор <span class="b">===</span> - <code>false</code>:</p>
<pre class="browser">
переменные tom и tomas равны
переменные tom и tomas НЕ эквивалентны
</pre>
<p>Возьмем другой пример, когда обе переменных представляют один и тот же объект:</p>
<pre class="brush:php;">
$person = new Person();

$tom = $person;
$tom -&gt; name = "Tom";
$tom -&gt; age = 36;

$tomas = $person;

if($tom == $tomas) echo "переменные tom и tomas равны&lt;br&gt;";
else echo "переменные tom и tomas НЕ равны&lt;br&gt;";

if($tom === $tomas) echo "переменные tom и tomas эквивалентны";
else echo "переменные tom и tomas НЕ эквивалентны";
</pre>
<p>Здесь объект класса Person создается только один раз: <code>$person = new Person();</code>. И затем обе переменных $tom и $tomas будут указывать 
на этот объект. При этом не имеет значения, для какой именно переменной мы устанавливаем свойства. Так как в реальности это будет один и тот же объект. 
В итоге и оператор <code>==</code>, и оператор <code>===</code> при сравнении возвратят <code>true</code></p>
<pre class="browser">
переменные tom и tomas равны
переменные tom и tomas эквивалентны
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


<div class="nav"><p><a href="5.4.php">Назад</a><a href="./">Содержание</a><a href="6.5.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 4.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
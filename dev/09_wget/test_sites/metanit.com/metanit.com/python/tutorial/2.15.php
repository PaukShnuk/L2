<!DOCTYPE html>
<html >
<head>
<title>Python | Параметры функции</title>
<meta charset="utf-8" />
<meta name="description" content="Параметры функции в языке программирования Python, именованные, позиционные и необязательные параметры функции, передача параметров значений по имени и по позиции, неопределенное количество параметров">
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
<h2>Параметры функции</h2><div class="date">Последнее обновление: 16.01.2022</div>

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

<p>Функция может принимать параметры. Через параметры в функцию можно передавать данные. Банальный пример - функция <code>print()</code>, которая с помощью 
параметра принимает значение, выводимое на консоль.</p>
<p>Теперь определим и используем свою функцию с параметрами:</p>
<pre class="brush:py;">
def say_hello(name):
    print(f"Hello, {name}")

say_hello("Tom")
say_hello("Bob")
say_hello("Alice")
</pre>
<p>Функция say_hello имеет параметр name, и при вызове функции мы можем передать этому параметру какой-либо значение. Внутри функции мы можем использовать 
параметр как обычную переменную, например, вывести значение этого параметра на консоль функцией print. Так, в выражении:</p>
<pre class="brush:py;">say_hello("Tom")</pre>
<p>Строка "Tom" будет передаваться параметру name. В итоге при выполнении программы мы получим следующий консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Hello, Tom
Hello, Bob
Hello, Alice
</pre>
</div>
<p>При вызове функции значения передаются параметрам по позиции. Например, определим и вызовем функцию с несколькими параметрами:</p>
<pre class="brush:py;">
def print_person(name, age):
    print(f"Name: {name}")
    print(f"Age: {age}")


print_person("Tom", 37)
</pre>
<p>Здесь функция <code>print_person</code> принимает два параметра: name и age. При вызове функции:</p>
<pre class="brush:py;">print_person("Tom", 37)</pre>
<p>Первое значение - "Tom" передается первому параметру, то есть параметру <code>name</code>. Второе значение - 37  передается второму параметру - age. И 
внутри функции значения параметров выводятся на консоль:</p>
<div class="console">
<pre class="consoletext">
Name: Tom
Age: 37
</pre>
</div>
<h3>Значения по умолчанию</h3>
<p>Некоторые параметры функции мы можем сделать необязательными, указав для них значения по умолчанию при определении функции. Например:</p>
<pre class="brush:py;">
def say_hello(name="Tom"):
    print(f"Hello, {name}")


say_hello()         # здесь параметр name будет иметь значение "Tom"
say_hello("Bob")    # здесь name = "Bob"
</pre>
<p>Здесь параметр name является необязательным. И если мы не передаем при вызове функции для него значение, то применяется значение по умолчанию, то есть 
строка "Tom". Консольный вывод данной программы:</p>
<div class="console">
<pre class="consoletext">
Hello, Tom
Hello, Bob
</pre>
</div>
<p>Если функция имеет несколько параметров, то необязательные параметры должны идти после обязательных. Например:</p>
<pre class="brush:py;">
def print_person(name, age = 18):
    print(f"Name: {name}  Age: {age}")


print_person("Bob")
print_person("Tom", 37)
</pre>
<p>Здесь параметр age является необязательным и по умолчанию имеет значение 18. Перед ним расположен обязательный параметр name. 
Поэтому при вызове функции мы можем не передавать значение параметру age, но параметру name передать значение необходимо.</p>
<p>При необходимости мы можем сделать все параметры необязательными:</p>
<pre class="brush:py;">
def print_person(name = "Tom", age = 18):
    print(f"Name: {name}  Age: {age}")


print_person()              # Name: Tom  Age: 18
print_person("Bob")         # Name: Bob  Age: 18
print_person("Sam", 37)     # Name: Sam  Age: 37
</pre>
<h3>Передача значений параметрам по имени. Именованные параметры</h3>
<p>В примерах выше при вызове функции значения передаются параметрами функции по позиции. Но также можно передавать значения параметрам по имени. Для этого при вызове 
функции указывается имя параметра и ему присваивается значение:</p>
<pre class="brush:py;">
def print_person(name, age):
    print(f"Name: {name}  Age: {age}")


print_person(age = 22, name = "Tom")
</pre>
<p>В данном случае значения параметрам age и name передаются по имени. И несмотря на то, 
что параметр name идет первым в определении функции, мы можем при вызове функции написать <code>print_person(age = 22, name = "Tom")</code> и таким образом 
передать число 22 параметру age, а строку "Tom" параметру name.</p>
<p>Символ <span class="b">*</span> позволяет установить, какие параметры будут именнованными - то есть такие параметры, которым можно передать значения 
только по имени. Все параметры, которые располагаются справа от символа <span class="b">*</span>, получают значения <span class="b">только по имени</span>:</p>
<pre class="brush:py;">
def print_person(name, *,  age, company):
    print(f"Name: {name}  Age: {age}  Company: {company}")


print_person("Bob", age = 41, company ="Microsoft")    # Name: Bob  Age: 41  company: Microsoft
</pre>
<p>В данном случае параметры age и company являются именнованными.</p>
<p>Можно сделать все параметры именнованными, поставив перед списком параметров символ *:</p>
<pre class="brush:py;">
def print_person(*,  name, age, company):
    print(f"Name: {name}  Age: {age}  Company: {company}")
</pre>
<p>Если наоборот надо определить параметры, которым можно передавать значения только по позиции, то есть <span class="b">позиционные</span> параметры, 
то можно использовать символ <span class="b">/</span>: все параметры, которые идут <span class="b">до</span> символа <span class="b">/</span> , являются позиционными и могут получать значения только по позиции</p>
<pre class="brush:py;">
def print_person(name, /, age, company="Microsoft"):
    print(f"Name: {name}  Age: {age}  Company: {company}")


print_person("Tom", company="JetBrains", age = 24)     # Name: Tom  Age: 24  company: JetBrains
print_person("Bob", 41)                 # Name: Bob  Age: 41  company: Microsoft
</pre>
<p>В данном случае параметр name является позиционным.</p>
<p>Для одной функции можно определять одновременно позиционные и именнованные параметры.</p>
<pre class="brush:py;">
def print_person(name, /,  age = 18, *, company):
    print(f"Name: {name}  Age: {age}  Company: {company}")


print_person("Sam", company ="Google")               # Name: Sam  Age: 18  company: Google
print_person("Tom", 37, company ="JetBrains")        # Name: Tom  Age: 37  company: JetBrains
print_person("Bob", company ="Microsoft", age = 42)  # Name: Bob  Age: 42  company: Microsoft
</pre>
<p>В данном случае параметр <code>name</code> располагается слева от символа /, поэтому является позиционным и обязательным - ему можно 
можно передать значение только по позиции.</p>
<p>Параметр <code>company</code> является именнованным, так как располагается справа от символа *. Параметр <code>age</code> может получать значение по имени и по позиции.</p>
<h3>Неопределенное количество параметров</h3>
<p>С помощью символа звездочки можно определить параметр, через который можно передавать неопределенное количество значений. Это может быть полезно, 
когда мы хотим, чтобы функция получала несколько значений, но ты точно не знаем, сколько именно. Например, определим функцию подсчета суммы чисел:</p>
<pre class="brush:py;">
def sum(*numbers):
    result = 0
    for n in numbers:
        result += n
    print(f"sum = {result}")


sum(1, 2, 3, 4, 5)		# sum = 15
sum(3, 4, 5, 6)			# sum = 18
</pre>
<p>В данном случае функция sum принимает один параметр - <code>*numbers</code>, но звездочка перед названием параметра указывает, что фактически на место этого 
параметра мы можем передать неопределенное количество значений или набор значений. В самой функции с помощью цикла for можно пройтись по этому набору, 
получить каждое значение из этого набора в переменную <code>n</code> и произвести с ним какие-нибудь действия. Например, в данном случае вычисляется сумма переданных чисел.</p>

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


<div class="nav"><p><a href="./2.8.php">Назад</a><a href="./">Содержание</a><a href="./2.16.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Python</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/1.1.php">Язык программирования Python</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/1.2.php">Установка Python и первая программа на Windows</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/1.5.php">Установка Python и первая программа на MacOS</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/1.3.php">Первая программа в PyCharm</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/1.4.php">Python в Visual Studio</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы Python</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.1.php">Введение в написание программ</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.2.php">Переменные и типы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.14.php">Консольный ввод и вывод</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.3.php">Арифметические операции с числами</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.12.php">Поразрядные операции с числами</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.4.php">Условные выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.6.php">Условная конструкция if</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.7.php">Циклы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.8.php">Функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.15.php">Параметры функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.16.php">Оператор return и возвращение результата из функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.17.php">Функция как тип, параметр и результат другой функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.18.php">Лямбда-выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.5.php">Преобразование типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.9.php">Область видимости переменных</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.19.php">Замыкания</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.1.php">Классы и объекты</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.2.php">Инкапсуляция, атрибуты и свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.3.php">Наследование</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.4.php">Переопределение функционала базового класса</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.6.php">Атрибуты классов и статические методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.5.php">Класс object. Строковое представление объекта</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Обработка ошибок и исключений</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.11.php">Конструкция try...except...finally</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.20.php">except и обработка разных типов исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.21.php">Генерация исключений и создание своих типов исключений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Списки, кортежи и словари</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/3.1.php">Списки</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/3.2.php">Кортежи</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/3.5.php">Диапазоны</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/3.3.php">Словари</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/3.4.php">Множества</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Модули</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.10.php">Определение и подключение модулей</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/6.1.php">Модуль random</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/6.2.php">Модуль math</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/6.3.php">Модуль locale</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/6.4.php">Модуль decimal</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Строки</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/5.1.php">Работа со строками</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/5.2.php">Основные методы строк</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/5.3.php">Форматирование</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/5.4.php">Программа подсчета слов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Pattern matching</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.13.php">Конструкция match</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.22.php">Кортежи в pattern matching</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.23.php">Массивы в pattern matching</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.24.php">Словари в pattern matching</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.25.php">Классы в pattern matching</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.26.php">guards или ограничения шаблонов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.27.php">Установка псевдонимов и паттерн AS</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Работа с файлами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.1.php">Открытие и закрытие файлов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.2.php">Текстовые файлы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.3.php">Файлы CSV</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.4.php">Бинарные файлы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.6.php">Модуль shelve</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.5.php">Модуль OS и работа с файловой системой</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Работа с датами и временем</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/8.1.php">Модуль datetime</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/8.2.php">Операции с датами</a></span></li>
		</ul>
	</li>
	
	<li class="closed"><span class="folder">Глава 11. Создание графического интерфейса</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.1.php">Tkinter. Создание окна приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.2.php">Кнопки</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.3.php">Изменение свойств элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.4.php">Позиционирование элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.5.php">Текстовая метка Label</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.6.php">Поле ввода Entry</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.7.php">Checkbutton</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.8.php">Radiobutton</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.9.php">Listbox</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.10.php">Меню</a></span></li>
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
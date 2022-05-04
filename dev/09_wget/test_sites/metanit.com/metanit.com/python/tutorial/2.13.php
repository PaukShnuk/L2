<!DOCTYPE html>
<html >
<head>
<title>Python | Конструкция match</title>
<meta charset="utf-8" />
<meta name="description" content="Pattern matching и конструкция match..case в Python, сравнение выражений с некоторым шаблоном, паттерн case _">
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
<h1>Pattern matching</h1><h2>Конструкция match</h2><div class="date">Последнее обновление: 01.02.2022</div>

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

<p>Начиная с версии 3.10 в языке Python появилась такая функциональность как <span class="b">pattern matching</span> (сопоставление 
шаблонов). Pattern matching представляет применение конструкции <span class="b">match</span>, которая  позволяет сопоставить 
выражение с некоторым шаблоном. И если выражение соответствует шаблону, то выполняются определенные действия. В этом смысле конструкция <span class="b">match</span> похожа на конструкцию <span class="b">if/else/elif</span>, которая выполняет 
определенные действия в зависимости от некоторого условия. Однако функциональность match гораздо шире - она также позволяет извлечь данные из составных типов и применить действия к различным частям объектов.</p>
<p>Конструкция <span class="b">match</span> имеет следующее формальное определение:</p>
<pre class="brush:py;">
match выражение:
    case шаблон_1:
        действие_1
    case шаблон_2:
        действие_2
    ................
    case шаблон_N:
        действие_N
    case _:
        действие_по_умолчанию
</pre>
<p>После ключевого слова <span class="b">match</span> идет сравниваемое выражение. И затем после двоеточия на последующих строках располагаются 
выражения <span class="b">case</span>. После каждого выражения <span class="b">case</span> указывается шаблон, с которым сравнивается выражение из 
match. После шаблона через двоеточие указываются набор выполняемых действий блока case.</p>
<p>Конструкция match последовательно сравнивает выражение с шаблонами из блоков case. И если был найден шаблон из какого-нибудь блока <span class="b">case</span> соответствует выражению из match, 
то выполняются инструкции из данного блока case.</p>
<p>В качестве паттернов/шаблонов, с которыми сравниваются выражения, могут применяться как данные примитивных типов, так и последовательности элементов и 
объектов классов.</p>
<p>Вначале рассмотрим ситуацию, когда в качестве шаблона выступают литералы примитивных типов. 
Например, в зависимости от языка выведем приветственное сообщение:</p>
<pre class="brush:py;">
def print_hello(language):
    match language:
        case "russian":
            print("Привет")
        case "english":
            print("Hello")
        case "german":
            print("Hallo")


print_hello("english")      # Hello
print_hello("german")       # Hallo
print_hello("russian")      # Привет

</pre>
<p>Здесь функция <code>print_hello</code> принимает параметр language, через который передается выбранный язык. В самой функции конструкция match 
сравнивает значение переменной language. В блоках case определяются шаблоны - строки, с которыми сопоставляется переменная language.</p>
<p>Например при вызове <code>print_hello("english")</code> параметр language равен "english", поэтому конструкция match выберет 
следующий блок case:</p>
<pre class="brush:py;">
case "english":
    print("Hello")
</pre>
<p>Обратите внимание, что блоки case имеют отступы от начала конструкции match. А инструкции каждого блока case имеют отступы от начала данного блока case. 
Но если блок case имеет одну инстукцию, ее можно поместить на 
той же строке, что и оператор case:</p>
<pre class="brush:py;">
def print_hello(language):
    match language:
        case "russian": print("Привет")
        case "english": print("Hello")
        case "german": print("Hallo")


print_hello("english")      # Hello
print_hello("german")       # Hallo
print_hello("russian")      # Привет

</pre>
<p>Причем если выражение из match не соответствует ни одному из шаблонов case, то соответственно ни один из этих блоков case не выполняется.<p>
<p>Если необходимо, чтобы при несовпадении значений (если ни один из шаблонов case не соответствует выражению match) выполнялись 
некоторые действия по умолчанию, то в этом случае применяется шаблон <span class="b">_</span> (прочерк):</p>
<pre class="brush:py;">
def print_hello(language):
    match language:
        case "russian":
            print("Привет")
        case "english":
            print("Hello")
        case "german":
            print("Hallo")
        case _:
            print("Undefined")


print_hello("english")      # Hello
print_hello("spanish")      # Undefined

</pre>
<p>Если ни один из шаблонов case не соответствует значению language, то будет выполняться блок:</p>
<pre class="brush:py;">
case _: 
    print("Undefined")
</pre>
<p>Но также можно определить блок case, который позволяет сравнивать сразу с несколькими знечениями. В этом случае значения разделяются вертикальной чертой:</p>
<pre class="brush:py;">
def print_hello(language):
    match language:
        case "russian":
            print("Привет")
        case "american english" | "british english" | "english":
            print("Hello")
        case _:
            print("Undefined")


print_hello("english")              # Hello
print_hello("american english")     # Hello
print_hello("spanish")              # Undefined

</pre>
<p>В данном случае шаблон <code>case "american english" | "british english" | "english"</code> соответствует сразу трем значениям.</p>
<p>Подобным образом можно сравнивать выражения с данными других типов. Например:</p>
<pre class="brush:py;">
def operation(a, b, code):
    match code:
        case 1:
            return a + b
        case 2:
            return a - b
        case 3:
            return a * b
        case _:
            return 0


print(operation(10, 5, 1))      # 15
print(operation(10, 5, 2))      # 5
print(operation(10, 5, 3))      # 50
print(operation(10, 5, 4))      # 0
</pre>
<p>Здесь функция operation принимает два числа и код операции. Конструкция match сравнивает код операции с конкретными значениями и в 
зависимости от значения выполняет на числами определенную операцию. Например, если code равен 1, то выполняется выражение:</p>
<pre class="brush:py;">
case 1:
    return a + b
</pre>
<p>это выражение case возвратит из функцию сумму чисел a и b.</p>
<p>Аналогично если code = 2, то возвращается разность, а если code = 3, то возвращается произведение чисел. Во всех остальных случаях возвращается 0.</p>

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


<div class="nav"><p><a href="./5.4.php">Назад</a><a href="./">Содержание</a><a href="./2.22.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 8.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 8.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
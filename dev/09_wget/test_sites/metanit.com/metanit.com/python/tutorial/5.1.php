<!DOCTYPE html>
<html >
<head>
<title>Python | Работа со строками</title>
<meta charset="utf-8" />
<meta name="description" content="Работа со строками в Python, получение отдельных символов и подстроки, длина и перебор строк, поиск в строке">
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
<h1>Строки</h1><h2>Работа со строками</h2><div class="date">Последнее обновление: 05.02.2022</div>

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

<p>Строка представляет последовательность символов в кодировке Unicode, заключенных в кавычки. Причем для определения строк Python позволяет использовать как одинарные, так и двойные кавычики:</p>
<pre class="brush:py;">
message = "Hello World!"
print(message)  # Hello World!

name = 'Tom'
print(name)  # Tom
</pre>
<p>Если строка длинная, ее можно разбить на части и разместить их на разных строках кода. В 
этом случае вся строка заключается в круглые скобки, а ее отдельные части - в кавычки:</p>
<pre class="brush:py;">
text = ("Laudate omnes gentes laudate "
        "Magnificat in secula ")
print(text)
</pre>
<p>Если же мы хотим определить многострочный текст, то такой текст заключается в тройные двойные или одинарные кавычки:</p>
<pre class="brush:py;">
'''
Это комментарий
'''
text = '''Laudate omnes gentes laudate
Magnificat in secula
Et anima mea laudate
Magnificat in secula 
'''
print(text)
</pre>
<p>При использовани тройных одинарных кавычек не стоит путать их с комментариями: если текст в тройных одинарных кавычках присваивается переменной, то это строка, а не комментарий.</p>
<h4>Управляющие последовательности в строке</h4>
<p>Строка может содержать ряд специальных символов - управляющих последовательностей или escape-последовательности. Некоторые из них:</p>
<ul>
<li><p><span class="b">\</span>: позволяет добавить внутрь строки слеш</p></li>
<li><p><span class="b">\'</span>: позволяет добавить внутрь строки одинарную кавычку</p></li>
<li><p><span class="b">\"</span>: позволяет добавить внутрь строки двойную кавычку</p></li>
<li><p><span class="b">\n</span>: осуществляет переход на новую строку</p></li>
<li><p><span class="b">\t</span>: добавляет табуляцию (4 отступа)</p></li>
</ul>
<p>Используем некоторые последовательностей:</p>
<pre class="brush:py;">
text = "Message:\n\"Hello World\""
print(text)
</pre>
<p>Консольный вывод программы:</p>
<div class="console">
<pre class="consoletext">
Message:
"Hello World"
</pre>
</div>
<p>Хотя подобные последовательности могут нам помочь в некоторых делах, например, поместить в строку кавычку, сделать табуляцию, перенос на другую строку. 
Но они также могут и мешать. Например:</p>
<pre class="brush:py;">
path = "C:\python\name.txt"
print(path)
</pre>
<p>Здесь переменная path содержит некоторый путь к файлу. Однако внутри строки встречаются символы "\n", которые будут интерпретированы как управляющая последовательность. 
Так, мы получим следующий консольный вывод:</p>
<div class="console">
<pre class="consoletext">
C:\python
ame.txt
</pre>
</div>
<p>Чтобы избежать подобной ситуации, перед строкой ставится символ <span class="b">r</span></p>
<pre class="brush:py;">
path = r"C:\python\name.txt"
print(path)
</pre>
<h3>Вставка значений в строку</h3>
<p>Python позволяет встравивать в строку значения других переменных. Для этого внутри строки переменные размещаются в фигурных скобках {}, а перед всей 
строкой ставится символ <span class="b">f</span>:</p>
<pre class="brush:py;">
userName = "Tom"
userAge = 37
user = f"name: {userName}  age: {userAge}"
print(user)   # name: Tom  age: 37
</pre>
<p>В данном случае на место <code>{userName}</code> будет вставляться значение переменной userName. Аналогично на вместо <code>{userAge}</code> 
будет вставляться значение переменной userAge.</p>

<h3>Обращение к символам строки</h3>
<p>И мы можем обратиться к отдельным символам строки по индексу в квадратных скобках:</p>
<pre class="brush:py;">
string = "hello world"
c0 = string[0]  # h
print(c0)
c6 = string[6]  # w
print(c6)

c11 = string[11]  # ошибка IndexError: string index out of range
print(c11)
</pre>
<p>Индексация начинается с нуля, поэтому первый символ строки будет иметь индекс 0. А если мы попытаемся обратиться к индексу, которого нет в строке, то 
мы получим исключение IndexError. Например, в случае выше длина строки 11 символов, поэтому ее символы будут иметь индексы от 0 до 10.</p>
<p>Чтобы получить доступ к символам, начиная с конца строки, можно использовать отрицательные индексы. Так, индекс -1 будет представлять последний символ, а -2 - предпоследний символ и так далее:</p>
<pre class="brush:py;">
string = "hello world"
c1 = string[-1]  # d
print(c1)
c5 = string[-5]  # w
print(c5)
</pre>
<p>При работе с символами следует учитывать, что строка - это неизменяемый (immutable) тип, поэтому если мы попробуем изменить какой-то отдельный символ строки, то мы получим 
ошибку, как в следующем случае:</p>
<pre class="brush:py;">
string = "hello world"
string[1] = "R"
</pre>
<p>Мы можем только полностью переустановить значение строки, присвоив ей другое значение.</p>
<h3>Перебор строки</h3>
<p>С помощью цикла <span class="b">for</span> можно перебрать все символы строки:</p>
<pre class="brush:py;">
string = "hello world"
for char in string:
    print(char)
</pre>
<h3>Получение подстроки</h3>
<p>При необходимости мы можем получить из строки не только отдельные символы, но и подстроку. Для этого используется следующий синтаксис:</p>
<ul>
<li><p><code>string[:end]</code>: извлекается последовательность символов начиная с 0-го индекса по индекс end (не включая)</p></p>
<li><p><code>string[start:end]</code>: извлекается последовательность символов начиная с индекса start по индекс end (не включая)</p></p>
<li><p><code>string[start:end:step]</code>: извлекается последовательность символов начиная с индекса start по индекс end (не включая) через шаг step</p></p>
</ul>
<p>Используем все варианты получения подстроки:</p>
<pre class="brush:py;">
string = "hello world"

# с 0 до 5 индекса
sub_string1 = string[:5]
print(sub_string1)      # hello

# со 2 до 5 индекса
sub_string2 = string[2:5]
print(sub_string2)      # llo

# с 2 по 9 индекса через один символ
sub_string3 = string[2:9:2]
print(sub_string3)      # lowr
</pre>
<h3>Объединение строк</h3>
<p>Одной из самых распространенных операций со строками является их объединение или конкатенация. Для объединения строк применяется операция сложения:</p>
<pre class="brush:py;">
name = "Tom"
surname = "Smith"
fullname = name + " " + surname
print(fullname)  # Tom Smith
</pre>
<p>С объединением двух строк все просто, но что, если нам надо сложить строку и число? В этом случае необходимо привести число к строке с помощью функции 
<span class="b">str()</span>:</p>
<pre class="brush:py;">
name = "Tom"
age = 33
info = "Name: " + name + " Age: " + str(age)
print(info)  # Name: Tom Age: 33
</pre>
<h3>Повторение строки</h3>
<p> Для повторения строки определенное количество раз применяется операция умножения:</p>
<pre class="brush:py;">
print("a" * 3)  # aaa
print("he" * 4)  # hehehehe
</pre>
<h3>Сравнение строк</h3>
<p>Особо следует сказать о сравнении строк. При сравнении строк принимается во внимание символы и их регистр. Так, цифровой символ условно меньше, чем любой алфавитный символ. 
Алфавитный символ в верхнем регистре условно меньше, чем алфавитные символы в нижнем регистре. Например:</p>
<pre class="brush:py;">
str1 = "1a"
str2 = "aa"
str3 = "Aa"
print(str1 &gt; str2)  # False, так как первый символ в str1 - цифра
print(str2 &gt; str3)  # True, так как первый символ в str2 - в нижнем регистре
</pre>
<p>Поэтому строка "1a" условно меньше, чем строка "aa". Вначале сравнение идет по первому символу. Если начальные символы обоих строк представляют цифры, то 
меньшей считается меньшая цифра, например, "1a" меньше, чем "2a".</p>
<p>Если начальные символы представляют алфавитные символы в одном и том же регистре, то смотрят по алфавиту. Так, "aa" меньше, чем "ba", а "ba" меньше, чем "ca".</p>
<p>Если первые символы одинаковые, в расчет берутся вторые символы при их наличии.</p>
<p>Зависимость от регистра не всегда желательна, так как по сути мы имеем дело с одинаковыми строками. В этом случае перед сравнением мы можем 
привести обе строки к одному из регистров.</p>
<p>Функция <span class="b">lower()</span> приводит строку к нижнему регистру, а функция <span class="b">upper()</span> - к верхнему.</p>
<pre class="brush:py;">
str1 = "Tom"
str2 = "tom"
print(str1 == str2)  # False - строки не равны

print(str1.lower() == str2.lower())  # True
</pre>
<h3>Функции ord и len</h3>
<p>Поскольку строка содержит символы Unicode, то с помощью функции <span class="b">ord()</span> мы можем получить числовое значение для символа в кодировке Unicode:</p>
<pre class="brush:py;">print(ord("A"))     # 65</pre>
<p>Для получения длины строки можно использовать функцию <span class="b">len()</span>:</p>
<pre class="brush:py;">
string = "hello world"
length = len(string)
print(length)	# 11
</pre>
<h3>Поиск в строке</h3>
<p>С помощью выражения <code>term in string</code> можно найти подстроку term в строке string. Если подстрока найдена, то выражение вернет значение 
<code>True</code>, иначе возвращается значение <code>False</code>:</p>
<pre class="brush:py;">
string = "hello world"
exist = "hello" in string
print(exist)    # True

exist = "sword" in string
print(exist)    # False
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


<div class="nav"><p><a href="./6.4.php">Назад</a><a href="./">Содержание</a><a href="./5.2.php">Вперед</a></p></div></div>
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
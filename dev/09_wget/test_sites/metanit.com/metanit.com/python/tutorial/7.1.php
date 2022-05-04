<!DOCTYPE html>
<html >
<head>
<title>Python | Классы и объекты</title>
<meta charset="utf-8" />
<meta name="description" content="Объектно-ориентированное программирование в Python, создание классов и объектов, методы и атрибуты класса, конструктор __init__, динамическое определение атрибутов, оператор pass">
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
<h1>Объектно-ориентированное программирование</h1><h2>Классы и объекты</h2><div class="date">Последнее обновление: 27.01.2022</div>

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

<p>Python имеет множество встроенных типов, например, int, str и так далее, которые мы можем использовать в программе. Но также Python 
позволяет определять собственные типы с помощью <span class="b">классов</span>. Класс представляет некоторую сущность. Конкретным воплощением класса является объект.</p>
<p>Можно еще провести следующую аналогию. У нас у всех есть некоторое представление о человеке, у которого есть имя, возраст, какие-то другие 
характеристики Человек может выполнять некоторые действия - ходить, бегать, думать и т.д. То есть это представление, которое включает набор характеристик и действий, можно назвать классом. 
Конкретное воплощение этого шаблона может отличаться, например, одни люди имеют одно имя, другие - другое имя. И реально существующий человек 
будет представлять объект этого класса.</p>
<p>Класс определяется с помощью ключевого слова <span class="b">class</span>:</p>
<pre class="brush:py;">
class название_класса:
    атрибуты_класса
    методы_класса
</pre>
<p>Внутри класса определяются его атрибуты, которые хранят различные характеристики класса, и методы - функции класса.</p>
<p>Создадим простейший класс:</p>
<pre class="brush:py;">
class Person:
    pass
</pre>
<p>В данном случае определен класс Person, который условно представляет человека. В данном случае в классе не определяется никаких методов или атрибутов. Однако поскольку 
в нем должно быть что-то определено, то в качестве заменителя функционала класса применяется оператор <span class="b">pass</span>. Этот оператор применяется, 
когда синтаксически необходимо определить некоторый код, однако мы не хотим его, и вместо конкретного кода вставляем оператор pass.</p>
<p>После создания класса можно определить объекты этого класса. Например:</p>
<pre class="brush:py;">
class Person:
    pass

tom = Person()      # определение объекта tom
bob = Person()      # определение объекта bob
</pre>
<p>После определения класса Person создаются два объекта класса Person - tom и bob.  Для создания объекта применяется специальная функция - <span class="b">конструктор</span>, 
которая называется по имени класса и которая возвращает объект класса. То есть в данном случае вызов <code>Person()</code> представляет вызов конструктора. Каждый класс по умолчанию имеет конструктор без параметров:</p>
<pre class="brush:py;">tom = Person()      # Person() - вызов конструктора, который возвращает объект класса Person</pre>
<h3>Методы классов</h3>
<p>Методы класса фактически представляют функции, которые определенны внутри класса и которые определяют его поведение. 
Например, определим класс Person с одним методом:</p>
<pre class="brush:py;">
class Person:       # определение класса Person
     def say_hello(self):
        print("Hello")

tom = Person()
tom.say_hello()    # Hello
</pre>
<p>Здесь определен метод <code>say_hello()</code>, который условно выполняет приветствие - выводит строку на консоль. При определении методов любого класса следует учитывать, что все они должны принимать в качестве 
первого параметра ссылку на текущий объект, который согласно условностям называется <span class="b">self</span>. 
Через эту ссылку внутри класса мы можем обратиться к функциональности текущего объекта. Но при самом вызове метода этот параметр не учитывается.</p>
<p>Используя имя объекта, мы можем обратиться к его методам. Для обращения к методам применяется нотация точки - после имени объекта ставится точка и после нее идет вызов метода:</p>
<pre class="brush:py;">объект.метод([параметры метода])</pre>
<p>Например, обращение к методу <code>say_hello()</code> для вывода приветствия на консоль:</p>
<pre class="brush:py;">tom.say_hello()    # Hello</pre>
<p>В итоге данная программа выведет на консоль строку "Hello".</p>
<p>Если метод должен принимать другие параметры, то они определяются после параметра <code>self</code>, и при вызове подобного метода для них необходимо передать значения:</p>
<pre class="brush:py;">
class Person:       # определение класса Person
    def say(self, message):     # метод 
        print(message)


tom = Person()
tom.say("Hello METANIT.COM")    # Hello METANIT.COM
</pre>
<p>Здесь определен метод <code>say()</code>. Он принимает два параметра: self и message. И для второго параметра - message при вызове метода необходимо передать 
значение.</p>
<h3>self</h3>
<p>Через ключевое слово <span class="b">self</span> можно обращаться внутри класса к функциональности текущего объекта:</p>
<pre class="brush:py;">
self.атрибут    # обращение к атрибуту
self.метод      # обращение к методу
</pre>
<p>Например, определим два метода в классе Person:</p>
<pre class="brush:py;">
class Person:

    def say(self, message):
        print(message)

    def say_hello(self):
        self.say("Hello work")  # обращаемся к выше определенному методу say


tom = Person()
tom.say_hello()     # Hello work

</pre>
<p>Здесь в одном методе - <code>say_hello()</code> вызывается другой метод - <code>say()</code>:</p>
<pre class="brush:py;">self.say("Hello work") </pre>
<p>Поскольку метод <code>say()</code> принимает кроме self еще параметры (параметр message), то при вызове метода для этого параметра передается значение.</p>
<p>Причем при вызове метода объекта нам обязательно необходимо использовать слово <span class="b">self</span>, если мы его не используем:</p>
<pre class="brush:py;">
def say_hello(self):
    say("Hello work")  # ! Ошибка
</pre>
<p>То мы столкнемся с ошибкой</p>
<h3>Конструкторы</h3>
<p>Для создания объекта класса используется конструктор. Так, выше когда мы создавали объекты класса Person, мы использовали конструктор по умолчанию, который не принимает параметров и который неявно имеют все классы:</p>
<pre class="brush:py;">
tom = Person()
</pre>
<p>Однако мы можем явным образом определить в классах конструктор с помощью специального метода, который называется <span class="b">__init__()</span> (по два прочерка с каждой стороны). 
К примеру, изменим класс Person, добавив в него конструктор:</p>
<pre class="brush:py;">
class Person:
    # конструктор
    def __init__(self):
        print("Создание объекта Person")

    def say_hello(self):
        print("Hello")
        
        
tom = Person()      # Создание объекта Person
tom.say_hello()     # Hello
</pre>
<p>Итак, здесь в коде класса Person определен конструктор и метод <code>say_hello()</code>. В качестве первого параметра конструктор, как и методы, 
также принимает ссылку на текущий объект - self. Обычно конструкторы применяются для определения действий, которые должны производиться при создании объекта.</p>
<p>Теперь при создании объекта:</p>
<pre class="brush:py;">
tom = Person()
</pre>
<p>будет производится вызов конструктора <code>__init__()</code> из класса Person, который выведет на консоль строку "Создание объекта Person".</p>
<h3>Атрибуты объекта</h3>
<p>Атрибуты хранят состояние объекта. Для определения и установки атрибутов внутри класса можно применять слово <span class="b">self</span>. Например, определим следующий класс Person:</p>
<pre class="brush:py;">
class Person:

    def __init__(self, name):
        self.name = name    # имя человека
        self.age = 1        # возраст человека


tom = Person("Tom")

# обращение к атрибутам
# получение значений
print(tom.name)     # Tom
print(tom.age)      # 1
# изменение значения
tom.age = 37
print(tom.age)      # 37

</pre>
<p>Теперь конструктор класса Person принимает еще один параметр - name. Через этот параметр в конструктор будет передаваться имя создаваемого человека.</p>
<p>Внутри конструктора устанавливаются два атрибута - name и age (условно имя и возраст человека):</p>
<pre class="brush:py;">
def __init__(self, name):
    self.name = name
    self.age = 1
</pre>
<p>Атрибуту self.name присваивается значение переменной name. Атрибут age получает значение 1.</p>
<p>Если мы определили в классе конструктор __init__, мы уже не сможем вызвать конструктор по умолчанию. Теперь нам надо вызывать наш явным образом опреледеленный 
конструктор __init__, в который необходимо передать значение для параметра name:</p>
<pre class="brush:py;">
tom = Person("Tom")
</pre>
<p>Далее по имени объекта мы можем обращаться к атрибутам объекта - получать и изменять их значения:</p>
<pre class="brush:py;">
print(tom.name)     # получение значения атрибута name
tom.age = 37        # изменение значения атрибута age
</pre>
<p>В принципе нам необязательно определять атрибуты внутри класса - Python позволяет сделать это динамически вне кода:</p>
<pre class="brush:py;">
class Person:

    def __init__(self, name):
        self.name = name    # имя человека
        self.age = 1        # возраст человека


tom = Person("Tom")

tom.company = "Microsoft"
print(tom.company)  # Microsoft

</pre>
<p>Здесь динамически устанавливается атрибут company, который хранит место работы человека. И после установки мы также можем получить его значение. В то же время 
подобное определение чревато ошибками. Например, если мы попытаемся обратиться к атрибуту до его определения, то программа сгенерирует ошибку:</p>
<pre class="brush:py;">
tom = Person("Tom")
print(tom.company)  # ! Ошибка - AttributeError: Person object has no attribute company
</pre>
<p>Для обращения к атрибутам объекта внутри класса в его методах также применяется слово self:</p>
<pre class="brush:py;">
class Person:

    def __init__(self, name):
        self.name = name    # имя человека
        self.age = 1        # возраст человека
    
    def display_info(self):
        print(f"Name: {self.name}  Age: {self.age}")


tom = Person("Tom")
tom.display_info()      # Name: Tom  Age: 1

</pre>
<p>Здесь определяется метод display_info(), который выводит информацию на консоль. И для обращения в методе к атрибутам объекта применяется слово self:  <code>self.name</code> и <code>self.age</code></p>
<h3>Создание объектов</h3>
<p>Выше создавался один объект. Но подобным образом можно создавать и другие объекты класса:</p>
<pre class="brush:py;">
class Person:

    def __init__(self, name):
        self.name = name    # имя человека
        self.age = 1        # возраст человека

    def display_info(self):
        print(f"Name: {self.name}  Age: {self.age}")


tom = Person("Tom")
tom.age = 37
tom.display_info()      # Name: Tom  Age: 37

bob = Person("Bob")
bob.age = 41
bob.display_info()      # Name: Bob  Age: 41

</pre>
<p>Здесь создаются два объекта класса Person: tom и bob. Они соответствуют определению класса Person, имеют одинаковый набор атрибутов и методов, однако их состояние будет отличаться.</p>
<p>При выполнении программы Python динамически будет определять <span class="b">self</span> - он представляет объект, у которого вызывается метод. Например, в строке:</p>
<pre class="brush:py;">
tom.display_info()      # Name: Tom  Age: 37
</pre>
<p>Это будет объект tom</p>
<p>А при вызове </p>
<pre class="brush:py;">bob.display_info()</pre>
<p>Это будет объект bob</p>
<p>В итоге мы получим следующий консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Name: Tom  Age: 37
Name: Bob  Age: 41
</pre>
</div>

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


<div class="nav"><p><a href="./2.19.php">Назад</a><a href="./">Содержание</a><a href="./7.2.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 3.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 3.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
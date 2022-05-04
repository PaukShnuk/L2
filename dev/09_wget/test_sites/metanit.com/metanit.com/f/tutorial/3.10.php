<!DOCTYPE html>
<html >
<head>
<title>F# | Переопределение методов и свойств</title>
<meta charset="utf-8" />
<meta name="description" content="Переопределение методов и свойств базовых классов в производных при наследовании в языке программирования F#, оператор abstract, default и override, правила переопределения">
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
<h2>Переопределение методов и свойств</h2><div class="date">Последнее обновление: 04.08.2021</div>

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

<p>Возможно, при наследовании нас устравает не весь унаследованный функционал. Например, возьмем классы из прошлой темы:</p>
<pre class="brush:f#;">
type Person(name, age) = 
    member val Name = name
    member val Age = age with get, set
    member this.PrintPerson() = printfn $"Person name: {this.Name}  age: {this.Age}"
 
 
type Employee(name, age, company) = 
    inherit Person(name, age)
    member val Company = company with get, set
</pre>
<p>В примере выше класс Employee имеет свойство, которое представляет компанию работника, и мы хотим, чтобы при вызове метода 
PrintPerson также выводилась и информации о компании работника. Что делать в этом случае? Рассмотрим возможные варианты.</p>
<h3>Сокрытие функционала базового класса</h3>
<p>Прежде всего, можно поступить доволько просто - определить новый метод в классе Employee с тем же именем:</p>
<pre class="brush:f#;">
type Person(name, age) = 
    member val Name = name
    member val Age = age with get, set
    member this.PrintPerson() = printfn $"Person name: {this.Name}  age: {this.Age}"


type Employee(name, age, company) = 
    inherit Person(name, age)
    member val Company = company with get, set

    member this.PrintPerson() = 
        printfn $"Person name: {this.Name}  age: {this.Age}"
        printfn $"Works in {this.Company}"

let bob = Employee("Bob", 31, "Microsoft")
bob.PrintPerson()  
</pre>
<p>В этом случае определение метода <code>PrintPerson</code> просто скрывает реализацию этого метода базового класса Person. Консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Person name: Bob  age: 31
Works in Microsoft
</pre>
</div>
<p>Вроде все работает. Но не все так просто. Рассмотрим следующую программу:</p>
<pre class="brush:f#;">
type Person(name, age) = 
    member val Name = name
    member val Age = age with get, set
    member this.PrintPerson() = printfn $"Person name: {this.Name}  age: {this.Age}"

type Employee(name, age, company) = 
    inherit Person(name, age)
    member val Company = company with get, set

    member this.PrintPerson() = 
        printfn $"Person name: {this.Name}  age: {this.Age}"
        printfn $"Works in {this.Company}"

let bob = Employee("Bob", 31, "Microsoft")                     

let displayInfo(p: Person) = p.PrintPerson()
displayInfo(bob)
</pre>
<p>Здесь для вывода информации об объекте Person определена функция <code>displayInfo</code>, которая в качестве принимает объект Person. Это значит, 
что в эту функцию мы можем передать как объекты Person, так и объекты производных от Person классов. В самой функции просто вызываем метод <code>PrintPerson</code>. 
Однако в любом случае для среды .NET это объект Person и при вызове функции будет вызывать реализацию метода PrintPerson из класса Person, что мы увидим по консольному выводу:</p>
 <div class="console">
<pre class="consoletext">
Person name: Bob  age: 31
</pre>
</div>
<p>Чтобы выйти из этой ситуации, следует переопределить метод PrintPerson.</p>
<h3>Переопределение методов базового класса</h3>
<p>Для переопределения в производном классе метода базового класса нам надо соблюсти два условия:</p>
<ul>
<li><p>В базовом классе метод должен быть определен с ключевым словом <span class="b">abstract</span>:</p>
<pre class="brush:f#;">
// определение метода
abstract member имя_метода : тип_функции
default this.имя_метода параметры_метода = тело_метода
</pre>
<p>После операторов <code>abstract member</code> идет имя метода, после которого через двоеточие указывает тип этого метода - представляемый им 
тип функции.</p>
<p>Далее с помощью оператора <span class="b">default</span> определяется реализация этого метода в базовом классе</p>
</li>
<li><p>В производном классе переопределяемый метод определяется с ключевым словом <span class="b">override</span>:</p>
<pre class="brush:f#;">
override this.имя_метода параметры_метода = тело_метода
</pre>
<p>После ключевого слова <span class="b">override</span> определяется реализация этого метода в производном классе</p>
</li>
</ul>
<p>Например, переопределим метод PrintPerson:</p>
<pre class="brush:f#;">
type Person(name, age) = 
    member val Name = name
    member val Age = age with get, set
    abstract member PrintPerson : unit -&gt; unit
    default this.PrintPerson() = printfn $"Person name: {this.Name}  age: {this.Age}"


type Employee(name, age, company) = 
    inherit Person(name, age)
    member val Company = company with get, set

    override this.PrintPerson() = 
        printfn $"Person name: {this.Name}  age: {this.Age}"
        printfn $"Works in {this.Company}"

let bob = Employee("Bob", 31, "Microsoft")                     

let displayInfo(p: Person) = p.PrintPerson()
displayInfo(bob)
</pre>
<p>Поскольку метод PrintPerson принимает только параметр типа <code>unit</code> и также возвращает значение этого типа, то он имеет тип <code>unit -&gt; unit</code>. 
Консольный вывод программы:</p>
<div class="console">
<pre class="consoletext">
Person name: Bob  age: 31
Works in Microsoft
</pre>
</div>
<h3>Ключевое слово base и обращение к функционалу базового класса</h3>
<p>Ключевое слово <span class="b">base</span> позволяет в производном классе обращаться к функционалу базового класса. Например, в примере выше при переопределении метода <code>PrintPerson</code> мы повторяем строку кода из 
базового класса:</p>
<pre class="brush:f#;">printfn $"Person name: {this.Name}  age: {this.Age}"</pre>
<p>Но мы также можем просто вызвать эту реализацию в производном классе:</p>
<pre class="brush:f#;">
type Person(name, age) = 
    member val Name = name
    member val Age = age with get, set
    abstract member PrintPerson : unit -&gt; unit
    default this.PrintPerson() = printfn $"Person name: {this.Name}  age: {this.Age}"


type Employee(name, age, company) = 
    inherit Person(name, age)
    member val Company = company with get, set

    override this.PrintPerson() = 
        base.PrintPerson()
        printfn $"Works in {this.Company}"

let bob = Employee("Bob", 31, "Microsoft")                     

let displayInfo(p: Person) = p.PrintPerson()
displayInfo(bob)
</pre>
<p>Теперь вместо повторения кода мы просто обращаемся к реализации в базовом классе:</p>
<pre class="brush:f#;">base.PrintPerson()</pre>
<h3>Переопределение свойств</h3>
<p>Свойства переопределяются похожим образом и также требуют соблюдения двух условий:</p>
<ul>
<li><p>В базовом классе свойство должно быть определено с ключевым словом <span class="b">abstract</span>:</p>
<pre class="brush:f#;">
// определение свойства
abstract member имя_свойства : тип_данных with get, set
default this.имя_свойства 
	with get() = получение_значение 
	and set value  = установка свойства
</pre>
<p>После операторов <code>abstract member</code> идет имя свойства, после которого через двоеточие указывает тип свойства - тип данных, которые хранит это свойство.</p>
<p>Далее после оператора <span class="b">with</span> указываются методы доступа (get и set), которые имеет класс. Можно определить свойство как с обоими методами - get и set, так и с одним из них.</p>
<p>Далее с помощью оператора <span class="b">default</span> определяется реализация этого свойства в базовом классе</p>
</li>
<li><p>В производном классе переопределяемые свойство определяются с ключевым словом <span class="b">override</span>:</p>
<pre class="brush:f#;">
override this.имя_свойства 
with get() = действия при получении значения
and set value = действия при установке значения
</pre>
<p>После ключевого слова <span class="b">override</span> определяется реализация этого свойства в производном классе</p>
</li>
</ul>
<p>Рассмотрим пример переопределения свойства:</p>
<pre class="brush:f#;">
type Person(name, age) = 
    let mutable _age: int = age

    member val Name = name
    abstract member Age: int with get, set
    default _.Age 
        with get() = _age 
        and set value  = if value &gt; 0 then _age &lt;- value

    abstract member PrintPerson : unit -&gt; unit
    default this.PrintPerson() = printfn $"Person name: {this.Name}  age: {this.Age}"


type Employee(name, age, company) = 
    inherit Person(name, age)
    member val Company = company with get, set
    
    override _.Age 
        with get() = base.Age 
        and set value  = if value &gt; 18 then base.Age &lt;- value

    override this.PrintPerson() = 
        base.PrintPerson()
        printfn $"Works in {this.Company}"

let bob = Employee("Bob", 31, "Microsoft")
bob.Age &lt;- 13
bob.PrintPerson()                      
bob.Age &lt;- 32
bob.PrintPerson()   
</pre>
<p>В данном случае переопределяется свойство Age, которое хранит данные типа <code>int</code> и доступно для чтения и записи.</p>
<pre class="brush:f#;">abstract member Age: int with get, set</pre>
<p>Соответственно в базовом и производном классе реализация свойства должна представлять данные типа int и иметь оба метода доступа - get и set.</p>
<p>Также можно определить свойство доступно только для чтения или записи. Например, сделаем свойство Age доступным только для чтения:</p>
<pre class="brush:f#;">
abstract member Age: int with get
default _.Age 
	with get() = _age 
</pre>
<p>При переопределении этого свойства в производном классе оно также должно иметь только метод <code>get</code>.</p>

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


<div class="nav"><p><a href="./3.9.php">Назад</a><a href="./">Содержание</a><a href="./3.12.php">Вперед</a></p></div></div>
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
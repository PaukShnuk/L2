<!DOCTYPE html>
<html >
<head>
<title>Kotlin | Преобразование типов</title>
<meta charset="utf-8" />
<meta name="description" content="Преобразование типов в языке программирования Kotlin, операторы as и is, smart cast, безопасные преобразования">
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
<h2>Преобразование типов</h2><div class="date">Последнее обновление: 30.05.2021</div>

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

<p>Нередко может возникать задача по преобразованию типов, например, чтобы использовать данные одного типа в констексте, где требуются данные другого типа. 
В этом случае Kotlin представляет ряд возможностей по преобразованию типов.</p>
<h3>Встроенные методы преобразования типов</h3>
<p>Для преобразования данных одного типа в другой можно использовать встроенные следующие функции, которые есть у базовых типов (Int, Long, Double и т.д.) (Конкретный набор функций для разных базовых типов может отличаться. ):</p>
<ul>
<li><p><span class="b">toByte</span></p></li>
<li><p><span class="b">toShort</span></p></li>
<li><p><span class="b">toInt</span></p></li>
<li><p><span class="b">toLong</span></p></li>
<li><p><span class="b">toFloat</span></p></li>
<li><p><span class="b">toDouble</span></p></li>
<li><p><span class="b">toChar</span></p></li>
</ul>
<p>Все эти функции преобразуют данные в тот тип, которые идет после префикса to: to<span class="b">Byte</span>.</p>
<pre class="brush:kt;">
val s: String = "12"
val d: Int = s.toInt()
println(d)
</pre>
<p>В данном случае строка s преобразуется в число d. Просто так передать строку переменной типа Int, мы не можем, несмотря на то, что вроде бы строка 
и содержит число 12:</p>
<pre class="brush:kt;">val d: Int = "12"	// ! Ошибка</pre>
<p>Однако надо учитывать, что значение не всегда может быть преобразовано к определенному типу. И в этом случае генерируется исключение. Соответственно 
в таких случаях желательно отлавливать исключение:</p>
<pre class="brush:kt;">
val s: String = "tom"
try {
	val d: Int = s.toInt()
	println(d)
}
catch(e: Exception){
	println(e.message)
}
</pre>
<h3>Smart cast и оператор is</h3>
<p>Оператор <span class="b">is</span> позволяет проверить выражение на принадлежность определенному типу данных:</p>
<pre class="brush:kt;">значение is тип_данных</pre>
<p>Этот оператор возвращает <code>true</code>, если значение слева от оператора принадлежит типу, указанному справа от оператора. Если локальная переменная или свойство успешно пройдет проверку 
на принадлежность определенному типу, то далее нет нужды дополнительно приводить значение к этому типу. 
Данные преобразования еще называются <span class="b">smart casts</span> или "умные преобразования".</p>
<p>Данный оператор можно применять как к базовым типам, но к собственным классам и интерфейсам, которые находятся в одной и той же иерархии наследования.</p>
<pre class="brush:kt;">
fun main() {

    val tom = Person("Tom")
    val bob = Employee("Bob", "JetBrains")

    checkEmployment(tom)    // Tom does not have a job
    checkEmployment(bob)    // Bob works in JetBrains
}

fun checkEmployment(person: Person){
	// println("${person.name} works in ${person.company}")    // Ошибка - у Person нет свойства company
    if(person is Employee){
        println("${person.name} works in ${person.company}")
    }
    else{
        println("${person.name} does not have a job")
    }
}
open class Person(val name: String)
class Employee(name: String, val company: String): Person(name)
</pre>
<p>Здесь класс Employee наследуется от класса Person. В функции <code>checkEmployment()</code> получаем объект Person. С помощью оператора <code>is</code> проверяем, 
представляет ли он тип Employee (так как не каждый объект Person может представлять тип Employee). 
Если он представляет тип Employee, то выводим название его компании, если он не представляет тип Employee, то выводим, сообщение, что он безработный.</p>

<p>Причем даже если значение представляет тип Employee, то до применения оператора is оно тем не менее принадлежит типу Person. И только 
применение оператора <code>is</code> преобразует значение из типа Person в тип Employee.</p>


<p>Также можно применять другую форму оператора - <span class="b">!is</span>. Она возвращает <code>true</code>, если значение НЕ представляет указанный тип данных:</p>
<pre class="brush:kt;">
fun main() {

    val tom = Person("Tom")
    val bob = Employee("Bob", "JetBrains")

    checkEmployment(tom)    // Tom does not have a job
    checkEmployment(bob)    // Bob works in JetBrains
}

fun checkEmployment(person: Person){
	// println("${person.name} works in ${person.company}")    // Ошибка - у Person нет свойства company
    if(person !is Employee){
        println("${person.name} does not have a job")
    }
    else{
		println("${person.name} works in ${person.company}")
    }
}
open class Person(val name: String)
class Employee(name: String, val company: String): Person(name)
</pre>

<p>Однако, что, если свойство <code>company</code> имеет пустую строку, например, <code>val bob = Employee("Bob", "")</code>, то есть фактически компания 
не указана. А мы хотим выводить компанию, если это свойство имеет какое-нибудь содержимое. В этом случае мы можем выполнить проверку на длину строку сразу же после применения оператора <code>is</code>:</p>
<pre class="brush:kt;">
fun checkEmployment(person: Person){
    if(person is Employee && person.company.length &gt; 0){
        println("${person.name} works in ${person.company}")
    }
    else{
        println("${person.name} does not have a job")
    }
}
</pre>
<p>в выражении</p>
<pre class="brush:kt;">person.company.length &gt; 0){</pre>
<p>компилятор уже видит, что person - это объект типа <code>Employee</code>, поэтому позволяет обращаться к его свойствам и функциям.</p>
<p>Если необходимо определить различные действия в зависимости от типа объекта, то удобно использовать конструкцию <span class="b">when</span>:</p>
<pre class="brush:kt;">
fun identifyPerson(person: Person){
    when(person){
        is Manager -&gt; println("${person.name} is a manager")
        is Employee -&t; println("${person.name} is an employee")
        is Person -&gt; println("${person.name} is just a person")
    }
}

open class Person(val name: String)
open class Employee(name: String, val company: String): Person(name)
class Manager(name: String, company: String): Employee(name, company)
</pre>
<h4>Ограничения умных преобразований</h4>
<p>Подобные smart-преобразования тем не менее имеют ограничения. Они могут применяться, только если 
компилятор может гарантировать, что переменная не изменила своего значения в промежутке между проверкой и использованием. 
Для smart-преобразований действуют следующие правила:</p>
<ol>
<li><p>smart-преобразования применяются к локальным val-переменным (за исключением делегированных свойств)</p></li>
<li><p>smart-преобразования применяются к val-свойствам, за исключением свойств с модификатором <code>open</code> 
(то есть открытых к переопределению в производных классах) или свойств, для которых явным образом определен геттер</p></li>
<li><p>smart-преобразования применяются к локальным var-переменным (то есть к переменным, определенным в функциях), если 
переменная не изменяет своего значения в промежутке между проверкой и использованием и не используется в лямбда-выражении, которое изменяет ее, а также не является локальным делегированным свойством</p></li>
<li><p>к var-свойствам smart-преобразования не применяются</p></li>
</ol>
<p>Рассмотрим некоторые случаи. Возьмем последнее правило про var-свойства:</p>
<pre class="brush:kt;">
fun main() {

    val tom = Person("Tom")

    if(tom.phone is SmartPhone){

        println("SmartPhone: ${tom.phone.name}, OS: ${tom.phone.os}")	// ! Ошибка
    }
    else{
        println("Phone: ${tom.phone.name}")
    }
}
open class Phone(val name: String)
class SmartPhone(name: String, val os: String) : Phone(name)

open class Person(val name: String){
    var phone: Phone = SmartPhone("Pixel 5", "Android")
}
</pre>
<p>Здесь класс Person хранит var-свойство класса Phone, которому присваивается объект класса SmartPhone. Соответственно в выражении:</p>
<pre class="brush:kt;">if(tom.phone is SmartPhone){</pre>
<p>очевидно, что свойство <code>tom.phone</code> представляет класс SmartPhone, однако поскольку это свойство определено с помощью <span class="b">var</span>, то к нему 
не применяются smart-преобразования. То есть если в данном случае мы заменим <code>var</code> на <span class="b">val</span>, то у нас проблем не возникнет.</p>
<p>Или второе правило - изменим класс Person, определив для свойства геттер:</p>
<pre class="brush:kt;">
open class Person(val name: String){
    val phone: Phone
        get()  = SmartPhone("Pixel 5", "Android")
}
</pre>
<p>В соответствии с вторым правилом опять же к такому свойству не применяются smart-преобразования, так как оно имеет геттер.</p>

<h3>Явные преобразования и оператор as</h3>
<p>С помощью оператора <span class="b">as</span> мы можем приводить значения одного типа к другому типу:</p>
<pre class="brush:kt;">значение as тип_данных</pre>
<p>Слева от оператора указывается значение, а справа - тип данных, в которых надо преобразовать значение. Например, преобразуем значение типа <code>String?</code> в тип 
<code>String</code>:</p>
<pre class="brush:kt;">
fun main() {

    val hello: String? = "Hello Kotlin"
    val message: String = hello as String
    println(message)
}
</pre>
<p>Здесь переменная <code>hello</code> хранит строку и может быть удачно преобразована в значение типа <code>String</code>. Однако если переменная hello равна <code>null</code>:</p>
<pre class="brush:kt;">
val hello: String? = null
val message: String = hello as String
println(message)
</pre>
<p>В этом случае преобразование завершится неудачно - ведь значение null нельзя преобразовать в значение типа <code>String</code>. Поэтому будет 
сгенерировано исключение <span class="b">NullPointerException</span>.</p>
<p>Чтобы избежать генерации исключения мы можем применять более безопасную версию оператора <span class="b">as?</span>, которая в случае неудачи 
преобразования возвращает null.</p>
<pre class="brush:kt;">

val hello: String? = null
    val message: String? = hello as? String
    println(message)
</pre>
<p>В данном случае оператор <code>as?</code> возвратит null, так как строку нельзя преобразовать в число.</p>
<p>Также можно применять данный оператор к преобразованиям своих типов:</p>
<pre class="brush:kt;">
fun main() {

    val tom = Person("Tom")
    val bob = Employee("Bob", "JetBrains")
    checkCompany(tom)
    checkCompany(bob)
}
fun checkCompany(person: Person){
    val employee = person as? Employee
    if (employee!=null){
        println("${employee.name} works in ${employee.company}")
    }
    else{
        println("${person.name} is not an employee")
    }
}
open class Person(val name: String)
open class Employee(name: String, var company: String): Person(name)
</pre>
<p>Здесь функция <code>checkCompany()</code> принимает объект класса Person и пытается преобразовать его в объект типа Employee, который унаследован от Employee. 
Но если каждый объект Employee представляет также объект Person (каждый работник является человеком), то не каждый объект Person представляет объект Employee 
(не каждый человек является работником). И в этом случае чтобы получить значение типа Employee, применяется оператор <span class="b">as?</span>. Если объект 
person представляет тип Employee, то возвращается объект этого типа, иначе возвращается <code>null</code>. И далее мы можем проверить на значение null и выполнить те или иные действия.</p>
<p>Консольный вывод программы:</p>
<div class="console">
<pre class="consoletext">
Tom is not an employee
Bob works in JetBrains
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


<div class="nav"><p><a href="./5.1.php">Назад</a><a href="./">Содержание</a><a href="./5.5.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в язык Kotlin</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/1.1.php">Что такое Kotlin. Первая программа</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/1.2.php">Первая программа в IntelliJ IDEA</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Основы языка Kotlin</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.9.php">Структура программы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.1.php">Переменные</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.2.php">Типы данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.10.php">Консольный ввод и вывод</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.4.php">Операции с числами</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.5.php">Условные выражения</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.6.php">Условные конструкции</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.7.php">Циклы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.8.php">Диапазоны</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/2.3.php">Массивы</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Функциональное программирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.1.php">Функции и их параметры</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.2.php">Переменное количество параметров. Vararg</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.3.php">Возвращение результата. Оператор return</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.4.php">Однострочные и локальные функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.5.php">Перегрузка функций</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.9.php">Тип функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.7.php">Функции высокого порядка</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.8.php">Анонимные функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/3.6.php">Лямбда-выражения</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Объектно-ориентированное программирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.1.php">Классы и объекты</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.3.php">Конструкторы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.5.php">Пакеты и импорт</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.9.php">Наследование</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.6.php">Модификаторы видимости</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.2.php">Геттеры и сеттеры</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.10.php">Переопределение методов и свойств</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.11.php">Абстрактные классы и методы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.8.php">Интерфейсы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.7.php">Вложенные классы и интерфейсы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.12.php">Data-классы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.13.php">Перечисления enums</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.4.php">Делегирование</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/4.14.php">Анонимные классы и объекты</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Обобщения</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/6.1.php">Обобщенные классы и функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/6.2.php">Ограничения обобщений</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/6.3.php">Вариантность, ковариантность и контравариантность</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. Дополнительные возможности ООП</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/5.2.php">Обработка исключений</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/5.1.php">Null и nullable-типы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/5.3.php">Преобразование типов</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/5.5.php">Функции расширения</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/5.8.php">Перегрузка операторов</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/5.6.php">Делегированные свойства</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/5.7.php">Scope-функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/5.4.php">Инфиксная нотация</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Коллекции и последовательности</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.1.php">Изменяемые и неизменяемые коллекции</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.2.php">List</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.3.php">Set</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.4.php">Map</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.5.php">Последовательности</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.6.php">Отличие последовательности от коллекций Iterable</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.7.php">Фильтрация</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.8.php">Проверка элементов</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.9.php">Трансформации</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.10.php">Группировка</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.11.php">Сортировка</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.12.php">Агрегатные операции</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.13.php">Сложение, вычитание и объединение коллекций</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.14.php">Получение части элементов</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/7.15.php">Получение отдельных элементов</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 8. Корутины</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/8.1.php">Введение в корутины</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/8.2.php">Область корутины</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/8.3.php">launch и Job</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/8.4.php">Async, await и Deferred</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/8.7.php">Диспетчер корутины</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/8.5.php">Отмена выполнения корутин</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/8.6.php">Каналы</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 9. Асинхронные потоки</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.1.php">Введение в асинхронные потоки</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.2.php">Создание асинхронного потока</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.3.php">Операции с потоками</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.4.php">Функции count, take и drop. Количество элементов в потоке</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.5.php">Функции first, last, single</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.6.php">Преобразование данных. Функции map и transform</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.7.php">Фильтрация данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.8.php">Сведение данных. Функции reduce и fold</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/tutorial/9.9.php">Объединение потоков</a></span></li>
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
	
	$("li:contains('Глава 6.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 6.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
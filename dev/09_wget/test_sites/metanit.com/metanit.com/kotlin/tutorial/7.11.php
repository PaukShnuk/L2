<!DOCTYPE html>
<html >
<head>
<title>Kotlin | Сортировка</title>
<meta charset="utf-8" />
<meta name="description" content="Сортировка коллекций и последовательностей в языке Kotlin, реализация интерфейсов Comparable и Comparator и определение логики сравнения объектов, функции sorted, sortedDescending, sortedWith, reverse и shaffle">
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
<h2>Сортировка</h2><div class="date">Последнее обновление: 24.01.2022</div>

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

<p>Для сортировки коллекции/последовательности применяются функции <code>sorted()</code> (сортировка по возрастанию) и 
<code>sortedDescending()</code> (сортировка по убыванию).</p>
<p>Что в данном случае значит сортировка по возрастанию или убыванию? По умолчанию процесс сортировки опирается на реализацию интерфейса <span class="b">Comparable</span>, 
которая определяет, какой объект будет больше, а какой меньше. Так, для встроенных базовых типов действует следующая логика:</p>
<ul>
<li><p>Числа сравниваются как в математике исходя из их значения</p></li>
<li><p>Символы (Char) и строки (String) сравниваются исходя из лексикографического порядка, то есть "Tom" больше, чем "Alice", потому что первый символ - T располагается в алфавите после символа A.</p></li>
</ul>
<p>Сортировка чисел и строк:</p>
<pre class="brush:kt;">
val people = listOf("Tom", "Mike", "Bob", "Sam", "Alice")
val numbers = listOf(3, 5, 2, -4, -6, 9, 1)

// сортировка по возрастанию
val sortedPeople = people.sorted()
val sortedNumbers = numbers.sorted()
println(sortedPeople)   // [Alice, Bob, Mike, Sam, Tom]
println(sortedNumbers)  // [-6, -4, 1, 2, 3, 5, 9]

// сортировка по убыванию
println(people.sortedDescending())  // [Tom, Sam, Mike, Bob, Alice]
println(numbers.sortedDescending()) // [9, 5, 3, 2, 1, -4, -6]
</pre>
<h3>Реализация интерфейса Comparable</h3>
<p>Если мы определяем свои типы и хотим, чтобы их объекты также можно было отсортировать, то в этом случае следует реализовать 
интерфейс <span class="b">Comparable</span>:</p>
<pre class="brush:kt;">
ublic interface Comparable&lt;in T&gt; {
    public operator fun compareTo(other: T): Int
}
</pre>
<p>Его функция <code>compareTo()</code> должна определять логику сравнения. В качестве параметра она принимает объект, который сравнивается с текущим.</p>
<p>В качестве результата возвращается число. Если текущий объект равен объекту other, то функция должна возвратить 0. Если текущий объект 
больше объекта other, то возвращается положительное число, если меньше - то отрицательное.</p>
<p>Посмотрим на примере реализацию интерфейса:</p>
<pre class="brush:kt;">
fun main(){

    val people = listOf(
        Person("Tom", 37),
        Person("Bob",41),
        Person("Sam", 25)
    )
    // сортировка по возрастанию
    val sortedPeople = people.sorted()

    // сортировка по  возрастанию
    println(sortedPeople)   // [Bob (41), Sam (25), Tom (37)]

    // сортировка по убыванию
    println(people.sortedDescending())  // [Tom (37), Sam (25), Bob (41)]
}
class Person(val name: String, val age: Int): Comparable&lt;Person&gt; {
    override fun compareTo(other: Person): Int = name.compareTo(other.name)
    override fun toString(): String = "$name ($age)"
}
</pre>
<p>В данном случае класс Person реализует интерфейс Comparable, однако в самом методе compareTo фактически мы полагаемся на реализацию этого 
интерфейса для строк. То есть мы фактически возвращаем результат сравнения двух строк - имен пользователей:</p>
<pre class="brush:kt;">name.compareTo(other.name)</pre>
<p>В итоге объекты Person будут сортироваться в соответствии с расположением первых букв их имен в лексикографического порядке - 
стандартная сортировка для строк.</p>
<p>Теперь изменим принцип сортировки и сравним два объекта по их возрасту - значению свойства age:</p>
<pre class="brush:kt;">
fun main(){

    val people = listOf(
        Person("Tom", 37),
        Person("Bob",41),
        Person("Sam", 25)
    )
    // сортировка по возрастанию
    val sortedPeople = people.sorted()

    // сортировка по  возрастанию
    println(sortedPeople)   // [Sam (25), Tom (37), Bob (41)]

    // сортировка по убыванию
    println(people.sortedDescending())  // [Bob (41), Tom (37), Sam (25)]
}
class Person(val name: String, val age: Int): Comparable&lt;Person&gt; {
    override fun compareTo(other: Person): Int = age - other.age
    override fun toString(): String = "$name ($age)"
}
</pre>
<p>Тепрь объект Person считается "больше", если у него больше значение свойства age.</p>
<h3>sortedWith и интерфейс Comparator</h3>
<p>Интерфейс Comparable позволяет легко определить логику сортировки, однако бывает, что нам недоступен код классов, объекты которых мы хотим отсортировать. Либо мы хотим задать 
для уже существующих типов, которые уже реализуют Comparable, другой способ сортировки. В этом случае мы можем 
использовать интерфейс <span class="b">Comparator</span> (грубо говоря компаратор):</p>
<pre class="brush:kt;">
public expect fun interface Comparator&lt;T&gt; {
    public fun compare(a: T, b: T): Int
}
</pre>
<p>Его функция <span class="b">compare()</span> принимает два параметра - два сравниваемых объекта и также возращает целое число. Если первый параметр 
больше второго, то возвращается положительное число, если меньше - то отрицательное. Если объекты равно, возвращается 0.</p>
<p>Kotlin имеет встроенную функцию <span class="b">sortedWith()</span>, которая в качестве параметра принимает компаратор и на его основе 
сортирует коллекцию/последовательность:</p>
<pre class="brush:kt;">
sortedWith(comparator: Comparator&lt;in T&gt;): List&lt;T&gt;
</pre>
<p>Пример реализации:</p>
<pre class="brush:kt;">
fun main(){

    val people = listOf(
        Person("Tom", 37),
        Person("Bob",41),
        Person("Sam", 25)
    )
    val personComparator = Comparator{ p1: Person, p2: Person -&gt; p1.age - p2.age }

    val sortedPeople = people.sortedWith(personComparator)
    println(sortedPeople)   // [Sam (25), Tom (37), Bob (41)]
}
class Person(val name: String, val age: Int){
    override fun toString(): String = "$name ($age)"
}
</pre>
<p>В данном случае компаратор определен в виде переменной personComparator. В реализации интерфейса как и в предыдущем примере сравниваем 
пользователей на основе возраста: если значение свойства <code>age</code> больше, то и объект Person условно считается "больше".</p>
<p>В принципе в данном случае мы можем сократить вызов функции сортировки:</p>
<pre class="brush:kt;">
val sortedPeople = people.sortedWith{ p1: Person, p2: Person -&gt; p1.age - p2.age }
</pre>
<p>или так:</p>
<pre class="brush:kt;">
val sortedPeople = people.sortedWith(compareBy{ it.age })
</pre>
<p>Благодаря компаратору можно задать свою логику сортировки к уже имеющимся типам. Например, отсортируем строки по длине:</p>
<pre class="brush:kt;">
fun main(){

    val people = listOf("Tom", "Alice", "Kate", "Sam", "Bob")
    // отсортируем по длине строки
    val sorted  = people.sortedWith(compareBy{ it.length })
    println(sorted)   // [Tom, Sam, Bob, Alice]
}
</pre>
<h3>Сортировка на основе критерия</h3>
<p>Еще две функцию позволяют отсортировать объекты по определенному критерию:</p>
<pre class="brush:kt;">
sortedBy(crossinline selector: (T) -&gt; R?): List&lt;T&gt; / Sequence&lt;T&gt;
sortedByDescending(crossinline selector: (T) -&gt; R?): List&lt;T&gt; / Sequence&lt;T&gt;
</pre>
<p>Функция <span class="b">sortedBy()</span> сортирует по возрастанию, а <span class="b">sortedByDescending()</span> - по убыванию. В качестве параметра 
они принимают функцию, которая получает элемент и возвращает значение, применяемое для сортировки.</p>
<pre class="brush:kt;">
fun main(){

    val people = listOf( Person("Tom", 37), Person("Bob",41), Person("Sam", 25))

    // сортировка по свойству name по возрастанию 
    val sortedByName = people.sortedBy { it.name }
    println(sortedByName)   // [Bob (41), Sam (25), Tom (37)]

    // сортировка по свойству age по возрастанию 
    val sortedByAge = people.sortedBy { it.age }
    println(sortedByAge)   // [Sam (25), Tom (37), Bob (41)]

    // сортировка по свойству age по убыванию 
    val sortedByAgeDesc = people.sortedByDescending { it.age }
    println(sortedByAgeDesc)   // [Bob (41), Tom (37), Sam (25)]
}
class Person(val name: String, val age: Int){
    override fun toString(): String = "$name ($age)"
}
</pre>
<h3>reverse и shaffle</h3>
<p>Стоит отметить еще две функции, которые не сортируют, а просто меняют порядок элементов. 
Функция <span class="b">reversed()</span> изменяет порядок элементов на обратный, а функция <span class="b">shuffle()</span> перемешивает элементы случайным 
образом:</p>
<pre class="brush:kt;">
val numbers = listOf(1, 2, 3, 4, 5, 6)
val reversed = numbers.reversed()
println(reversed)   // [6, 5, 4, 3, 2, 1]

val shuffled = numbers.shuffled()
println(shuffled)   // [4, 6, 3, 5, 1, 2]
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


<div class="nav"><p><a href="./7.10.php">Назад</a><a href="./">Содержание</a><a href="./7.12.php">Вперед</a></p></div></div>
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
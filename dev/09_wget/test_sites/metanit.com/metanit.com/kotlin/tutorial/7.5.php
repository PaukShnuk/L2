<!DOCTYPE html>
<html >
<head>
<title>Kotlin | Последовательности</title>
<meta charset="utf-8" />
<meta name="description" content="Последовательности Sequence в языке программирования Kotlin, создание последовательностей и функции sequenceOf, generateSequence,  asSequence, основные операции с последовательностями">
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
<h2>Последовательности</h2><div class="date">Последнее обновление: 24.01.2022</div>

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

<p>Наряду с коллекциями Kotlin предоставляет еще один тип наборов элементов – <span class="b">последовательности</span> 
(sequences). Последовательности предоставляют похожую функциональность, что и интерфейс Iterable, который реализуется типами 
коллекций.  Ключевая разница состоит в том, как обрабатываются элементы последовательности при применении к ним набора операций.</p>
<h3>Создание последовательности</h3>
<h4>Функция sequenceOf</h4>
<p>Последовательности представляют интерфейс <span class="b">Sequence&lt;T&gt;</span>. Для создания объекта данного типа можно использовать 
встроенную функцию <span class="b">sequenceOf()</span>. В качестве параметра она принимает набор элементов, которые будут входить 
в последовательность. Например:</p>
<pre class="brush:kt;">
val people = sequenceOf("Tom", "Sam", "Bob")    //тип Sequence&lt;String&gt;
println(people.joinToString())  // Tom, Sam, Bob
</pre>
<p>В данном случае определяется последовательность типа <code>Sequence&lt;String&gt;</code>, которая содержит три элемента. 
Для вывода последовательности на консоль применяется ее преобразование в строку с помощью функции <code>joinToString()</code></p>
<h4>Метод asSequence коллекций</h4>
<p>Также можно создать последовательность из объекта  <span class="b">Iterable</span> (например, из объектов типа List или Set), 
используя метод <span class="b">asSequence()</span></p>
<pre class="brush:kt;">
val employees = listOf("Tom", "Sam", "Bob") // объект List&lt;String&gt;
val people = employees.asSequence()         //тип Sequence&lt;String&gt;
println(people.joinToString())    // Tom, Sam, Bob
</pre>
<h4>Функция generateSequence</h4>
<p>Третий способ создания последовательности представляет функция <span class="b">generateSequence</span></p>
<pre class="brush:kt;">
var number = 0
val numbers = generateSequence{ number += 2; number}
println(numbers.take(5).joinToString())    // получаем первые 5 элементов последовательности - 2, 4, 6, 8, 10
</pre>
<p>В качестве параметра функция <code>generateSequence()</code> принимает функцию, которая возвращает некоторое значение. 
Это значение затем станет элементом последовательности. Так в данном случае увеличиваем значение переменной number на 2 и возвращаем ее значение. 
То последовательность будет содержать числа с шагом в 2: 2, 4, 6, 8, 10, 12....</p>
<p>Стоит учитывать, что эта функция по умолчанию генерирует бесконечную последовательность. 
Поэтому в примере выше при выводе элементов на консоль с помощью метода <code>take()</code> получаем только первые пять элементов. Чтобы ограничить 
генерируемую последовательность, функция в <code>generateSequence()</code> должна возвращать null:</p>
<pre class="brush:kt;">
var number = 0
val numbers = generateSequence{ number += 2; if(number &gt; 8) null else number}
println(numbers.joinToString())    // 2, 4, 6, 8
</pre>
<p>В данном случае последовательность содержит только числа от 2 до 8 включительно.</p>
<p>Функция <code>generateSequence()</code> имеет несколько вариаций. В частности, в качестве первого параметра мы можем 
передать первое значение по умолчанию, а второй параметр по прежнему представляет функцию, которая генерирует последовательность</p>
<pre class="brush:kt;">
val numbers = generateSequence(5){ if(it == 25) null else it + 5}
println(numbers.joinToString())    // 5, 10, 15, 20, 25
</pre>
<p>В данном случае в функцию первому параметру передается число 5, то есть это будет первый элемент последовательности. 
Функция создания последовательности через параметр it получает предыдущий результат функции - фактически предыдущий элемент последовательности 
(при первом вызове функции - это значение первого параметра). 
В данном случае создается конечная последовательность, где каждый последующий элемент больше предыдущего на 5. Если 
последний элемент равен 25, то возвращаем null, тем самым завершаем генерацию последовательности. Стоит отметить, 
что даже если функция возвратит null, то последовательность будет содержать один элемент: <code>generateSequence(5){ null }</code></p>
<h4>Функция sequence</h4>
<p>Четвертый способ представляет применение функции <span class="b">sequence()</span>. В этой функции можно генерировать 
элементы последовательности с помощью функций <span class="b">yield()</span> и <span class="b">yieldAll()</span>:</p>
<pre class="brush:kt;">
val numbers = sequence {
    yield(1)
    yield(4)
    yield(7)
}
println(numbers.joinToString())    // 1, 4, 7
</pre>
<p>Функция <span class="b">yield()</span> фактически возвращает во вне некоторое значение, которое ей передается через параметр. 
То есть при первом обращении к функции sequence сработает вызов <code>yield(1)</code>, который возвратит значение 1. При втором обращении 
сработает вызов <code>yield(4)</code>, который возвратит 4. И при третьем обращении сработает вызов <code>yield(7)</code>. 
Таким образом, последовательность будет содержать 3 элемента: 1, 4, 7.</p>
<p>Можно создать и бесконечную последовательность:</p>
<pre class="brush:kt;">
val numbers = sequence {
    var start = 0
    while(true) yield(start++)
}
println(numbers.take(5).joinToString())    // 0, 1, 2, 3, 4
</pre>
<p>Здесь при каждом обращении к функции sequence возвращается одно из чисел начиная с 0.</p>
<p>Если надо создать последовательности на основе другой последовательности или коллекции, то удобнее источник данных передать 
в функцию <span class="b">yieldAll()</span></p>
<pre class="brush:kt;">
val personal = sequence {
    val data = listOf("Alice", "Kate", "Ann")
    yieldAll(data)
}
println(personal.joinToString())    // Alice, Kate, Ann
</pre>
<h3>Перебор последовательности</h3>
<p>Для перебора последовательности можно применять стандартный цикл <span class="b">for</span>:</p>
<pre class="brush:kt;">
val people = sequenceOf("Tom", "Sam", "Bob")
for(person in people) println(person)
</pre>
<h3>Операции с последовательностями</h3>
<p>Интерфейс <span class="b">Sequence</span> предоставляет ряд функций, который позволяют производить различные операции с последовательностями. 
Все операции с последовательностями делятся на ряд типов.</p>
<p>Прежде всего операции различаются по наличию состояния. Одни операции могут хранить состояние (statefull-операции), например, операция <code>distinct()</code>. 
Подобное состояние обычно пропорционально количеству элементов в последовательности. А есть операции, которые не имеют состояния (stateless-операции), например, 
функции <code>map()</code> и <code>filter()</code>, или требуют очень небольшого константного состояния, как функции <code>take()</code> и <code>drop()</code>. 
Подобные операции обрабатывают каждый элемент независимо от других.</p>
<p>Другая классификация операций основывается на том, когда выполняется операции. В данном случае они бывают промежуточными (intermediate) - такие операции 
обычно возвращают другую последовательность. Они НЕ выполняются сразу при их вызове.</p>
<p>А есть терминальные или конечные операции (terminal). Такие операции подразумевают извлечение элементов последовательности, например, когда нам надо получить 
количество элементов с помощью функции <code>count()</code> или элемент по индексу. Такие операции выполняются сразу при их вызове. То же самое можно сказать 
о переборе с помощью цикла for, который извлекает элементы из последовательности и соответственно также запускает процесс выполнения всех операций последовательности.</p>
<p>Рассмотрим основные операции:</p>
<ul>
<li><p><span class="b">all(predicate: (T) -&gt; Boolean): Boolean</span></p>
<p>возвращает <code>true</code>, если все элементы соответствуют предикату, который передается в функцию в качестве параметра</p>
<p>Терминальная операция</p></li>

<li><p><span class="b">any(): Boolean</span></p>
<p>возвращает <code>true</code>, если последовательность содержит хотя бы один элемент</p>
<p>Дополнительная версия возвращает <code>true</code>, если хотя бы один элемент соответствуют предикату, который передается в функцию в качестве параметра</p>
<p><span class="b">any(predicate: (T) -&gt; Boolean): Boolean</span></p>
<p>Терминальная операция</p></li>

<li><p><span class="b">average(): Double</span></p>
<p>возвращает среднее значение для числовой последовательности типов Byte, Int, Short, Long, Float, Double</p></li>

<li><p><span class="b">chunked(size: Int): Sequence&lt;List&lt;T&gt;&gt;</span></p>
<p>расщепляет последовательность на последовательность из списков List, параметр size устанавливает максимальное количество элементов в каждом из списков</p>
<p>Дополнительная версия в качестве второго параметра получает функцию преобразования, которая преобразует каждый список в элемент новой последовательности</p>
<p><span class="b">chunked(size: Int,transform: (List&lt;T&gt;) -&gt; R): Sequence&lt;R&gt;</span></p>
<p>Промежуточная операция</p></li>

<li><p><span class="b">contains(element: T): Boolean</span></p>
<p>возвращает <code>true</code>, если последовательность содержит элемент element</p>
<p>Терминальная операция</p></li>

<li><p><span class="b">count(): Int</span></p>
<p>возвращает количество элементов в последовательности</p>
<p>Дополнительная версия возвращает количество элементов, которые соответствуют предикату</p>
<p><span class="b">count(predicate: (T) -&gt; Boolean): Int</span></p>
<p>Терминальная операция</p></li>

<li><p><span class="b">distinct(): Sequence&lt;T&gt;</span></p>
<p>возвращает новую последовательность, которая содержит только уникальные элементы</p>
<p>Промежуточная операция</p></li>

<li><p><span class="b">distinctBy(selector: (T) -&gt; K): Sequence&lt;T&gt;</span></p>
<p>возвращает новую последовательность, которая содержит только уникальные элементы с учетом функции селектора, которая передается в качестве параметра</p>
<p>Промежуточная операция</p></li>

<li><p><span class="b">drop(n: Int): Sequence&lt;T&gt;</span></p>
<p>возвращает новую последовательность, которая содержит все элементы за исключением первых n элементов</p>
<p>Промежуточная операция</p></li>

<li><p><span class="b">dropWhile(predicate: (T) -&gt; Boolean): Sequence&lt;T&gt;</span></p>
<p>возвращает новую последовательность, которая содержит все элементы за исключением первых элементов, которые соответствуют предикату</p>
<p>Промежуточная операция</p></li>

<li><p><span class="b">elementAt(index: Int): T</span></p>
<p>возвращает элемент по индексу index. Если индекс выходит за пределы последовательности, то генерируется исключение типа IndexOutOfBoundsException </p>
<p>Терминальная операция</p></li>

<li><p><span class="b">elementAtOrElse(index: Int, defaultValue: (Int) -&gt; T): T</span></p>
<p>возвращает элемент по индексу index. Если индекс выходит за пределы последовательности, то возвращается значение, устанавливаемое функцией из параметра defaultValue</p>
<p>Терминальная операция</p></li>

<li><p><span class="b">elementAtOrNull(index: Int): T?</span></p>
<p>возвращает элемент по индексу index. Если индекс выходит за пределы последовательности, то возвращается null</p>
<p>Терминальная операция</p></li>

<li><p><span class="b">filter(predicate: (T) -&gt; Boolean): Sequence&lt;T&gt;</span></p>
<p>возвращает новую последовательность из элементов, которые соответствуют предикату</p>
<p>Промежуточная операция</p></li>

<li><p><span class="b">filterNot(predicate: (T) -&gt; Boolean): Sequence&lt;T&gt;</span></p>
<p>возвращает новую последовательность из элементов, которые НЕ соответствуют предикату</p>
<p>Промежуточная операция</p></li>

<li><p><span class="b">filterNotNull(): Sequence&lt;T&gt;</span></p>
<p>возвращает новую последовательность из элементов, которые не равны null</p>
<p>Промежуточная операция</p></li>


<li><p><span class="b">find(predicate: (T) -&gt; Boolean): T?</span></p>
<p>возвращает первый элемент, который соответствует предикату. Если элемент не найден, то возвращается null</p>
<p>Терминальная операция</p></li>

<li><p><span class="b">findLast(predicate: (T) -&gt; Boolean): T?</span></p>
<p>возвращает последний элемент, который соответствует предикату. Если элемент не найден, то возвращается null</p>
<p>Терминальная операция</p></li>

<li><p><span class="b">first(): T</span></p>
<p>возвращает первый элемент последовательности</p>
<p>Дополнительная версия возвращает первый элемент, которые соответствует предикату</p>
<p><span class="b">first(predicate: (T) -&gt; Boolean): T</span></p>
<p>Если элемент не найден, то генерируется исключение типа NoSuchElementException</p>
<p>Терминальная операция</p></li>

<li><p><span class="b">firstOrNull(): T?</span></p>
<p>возвращает первый элемент последовательности</p>
<p>Дополнительная версия возвращает первый элемент, которые соответствует предикату</p>
<p><span class="b">firstOrNull(predicate: (T) -&gt; Boolean): T?</span></p>
<p>Если элемент не найден, то возвращается null</p>
<p>Терминальная операция</p></li>
<li><p><span class="b">flatMap(transform: (T) -&gt; Sequence&lt;R&gt;): Sequence&lt;R&gt;</span></p>
<p>преобразует последовательность элементов типа T в последовательность элементов типа R, используя функцию преобразования, которая передается в качестве параметра</p>
<p>Промежуточная операция</p></li>
<li><p><span class="b">fold(initial: R, operation: (acc: R, T) -&gt; R): R</span></p>
<p>Возвращает значение, которое является результатом действия функции operation над каждым элементом последовательности. Первый параметр функции 
operation - результат работы функции над предыдущим элементом последовательности (при первом вызове - значение из параметра initial), в 
второй параметр - текущий элемент последовательности.</p>
<p>Терминальная операция</p></li>

<li><p><span class="b">forEach(action: (T) -&gt; Unit)</span></p>
<p>Выполняет для каждого элемента последовательности действие action.</p>
<p>Терминальная операция</p></li>

<li><p><span class="b">groupBy(keySelector: (T) -&gt; K): Map&lt;K, List&lt;T&gt;&gt;</span></p>
<p>Группирует элементы по ключу, который возвращается функцией keySelector. Результат функции карта Map, где ключ - собственно ключ элементов, а значение - 
список List из элементов, которые соответствуют этому ключу</p>
<p>Дополнительная версия принимает функцию преобразования элементов:</p>
<p><span class="b">groupBy(keySelector: (T) -&gt; K, valueTransform: (T) -&gt; V): Map&lt;K, List&lt;V&gt;&gt;</span></p>
<p>Терминальная операция</p></li>

<li><p><span class="b">indexOf(element: T): Int</span></p>
<p>Возвращает индекс первого вхождения элемента element. Если элемент не найден, возвращается -1</p>
<p>Терминальная операция</p></li>
<li><p><span class="b">indexOfFirst(predicate: (T) -&gt; Boolean): Int</span></p>
<p>Возвращает индекс первого элемента, который соответствует предикату. Если элемент не найден, возвращается -1</p>
<p>Терминальная операция</p></li>
<li><p><span class="b">indexOfLast(predicate: (T) -&gt; Boolean): Int</span></p>
<p>Возвращает индекс последнего элемента, который соответствует предикату. Если элемент не найден, возвращается -1</p>
<p>Терминальная операция</p></li>
<li><p><span class="b">joinToString(): String</span></p>
<p>Генерирует из последовательности строку</p>
<p>Терминальная операция</p></li>

<li><p><span class="b">last(): T</span></p>
<p>возвращает последний элемент последовательности</p>
<p>Дополнительная версия возвращает последний элемент, которые соответствует предикату</p>
<p><span class="b">last(predicate: (T) -&gt; Boolean): T</span></p>
<p>Если элемент не найден, то генерируется исключение типа NoSuchElementException</p>
<p>Терминальная операция</p></li>

<li><p><span class="b">lastOrNull(): T?</span></p>
<p>возвращает последний элемент последовательности</p>
<p>Дополнительная версия возвращает последний элемент, которые соответствует предикату</p>
<p><span class="b">lastOrNull(predicate: (T) -&gt; Boolean): T?</span></p>
<p>Если элемент не найден, то возвращается null</p>
<p>Терминальная операция</p></li>

<li><p><span class="b">lastIndexOf(element: T): Int</span></p>
<p>Возвращает последний индекс элемента element. Если элемент не найден, возвращается -1</p>
<p>Терминальная операция</p></li>

<li><p><span class="b">map(transform: (T) -&gt; R): Sequence&lt;R&gt;</span></p>
<p>Применяет к элементам последовательности функцию трансформации и возвращает новую последовательность из новых элементов</p>
<p>Промежуточная операция</p></li>

<li><p><span class="b">mapIndexed(transform: (index: Int, T) -&gt; R): Sequence&lt;R&gt;</span></p>
<p>Применяет к элементам последовательности и их индексам функцию трансформации и возвращает новую последовательность из новых элементов</p>
<p>Промежуточная операция</p></li>


<li><p><span class="b">mapNotNull(transform: (T) -&gt; R?): Sequence&lt;R&gt;</span></p>
<p>Применяет к элементам последовательности функцию трансформации и возвращает новую последовательность из новых элементов, которые не равны null</p>
<p>Промежуточная операция</p></li>


<li><p><span class="b">maxOf(selector: (T) -&gt; Double): Double</span></p>
<p>Возвращает максимальное значение на основе селектора</p>
<p>Терминальная операция</p></li>
<li><p><span class="b">maxOfOrNull(selector: (T) -&gt; Double): Double?</span></p>
<p>Возвращает максимальное значение на основе селектора. Если последовательность пуста, возвращается null</p>
<p>Терминальная операция</p></li>
<li><p><span class="b">maxOrNull(): Double?</span></p>
<p>Возвращает максимальное значение. Если последовательность пуста, возвращается null</p>
<p>Терминальная операция</p></li>
<li><p><span class="b">minOf(selector: (T) -&gt; Double): Double</span></p>
<p>Возвращает минимальное значение на основе селектора</p>
<p>Терминальная операция</p></li>
<li><p><span class="b">minOfOrNull(selector: (T) -&gt; Double): Double?</span></p>
<p>Возвращает минимальное значение на основе селектора. Если последовательность пуста, возвращается null</p>
<p>Терминальная операция</p></li>
<li><p><span class="b">minOrNull(): Double?</p>
<p>Возвращает минимальное значение. Если последовательность пуста, возвращается null</p>
<p>Терминальная операция</p></li>
<li><p><span class="b">minus(element: T): Sequence&lt;T&gt;</span></p>
<p>Возвращает новую последовательность, которая содержит все элементы текущей за исключением элемента element.</p>
<p>Имеет разновидности, которую позволяют исключить из последовательности наборы элементов:</p>
<pre class="brush:kt;">
minus(elements: Array&lt;T&gt;): Sequence&lt;T&gt;
minus(elements: Iterable&lt;T&gt;): Sequence&lt;T&gt;
minus(elements: Sequence&lt;T&gt;): Sequence&lt;T&gt;
</pre>
<p>Промежуточная операция</p></li>
<li><p><span class="b">plus(element: T): Sequence&lt;T&gt;</span></p>
<p>Возвращает новую последовательность, которая содержит все элементы текущей за исключением плюс элемент element.</p>
<p>Имеет разновидности, которую позволяют включить в последовательность наборы элементов:</p>
<pre class="brush:kt;">
plus(elements: Array&lt;T&gt;): Sequence&lt;T&gt;
plus(elements: Iterable&lt;T&gt;): Sequence&lt;T&gt;
plus(elements: Sequence&lt;T&gt;): Sequence&lt;T&gt;
</pre>
<p>Промежуточная операция</p></li>
<li><p><span class="b">reduce(operation: (acc: S, T) -&gt; S): S</span></p>
<p>Возвращает значение, которое является результатом действия функции operation над каждым элементом последовательности. Первый параметр функции 
operation - результат работы функции над предыдущим элементом последовательности, в 
второй параметр - текущий элемент последовательности.</p>
<p>Терминальная операция</p></li>

<li><p><span class="b">shuffled(): Sequence&lt;T&gt;</span></p>
<p>Условно перемешивает последовательность</p>
<p>Промежуточная операция</p></li>

<li><p><span class="b">sorted(): Sequence&lt;T&gt;</span></p>
<p>Сортирует последовательность по возрастанию</p>
<p>Промежуточная операция</p></li>
<li><p><span class="b">sortedBy(selector: (T) -&gt; R?): Sequence&lt;T&gt;</span></p>
<p>Сортирует последовательность по возрастанию на основе селектора</p>
<p>Промежуточная операция</p></li>
<li><p><span class="b">sortedByDescending(selector: (T) -&gt; R?): Sequence&lt;T&gt;</span></p>
<p>Сортирует последовательность по убыванию на основе функции-селектора</p>
<p>Промежуточная операция</p></li>
<li><p><span class="b">sortedDescending(): Sequence&lt;T&gt;</span></p>
<p>Сортирует последовательность по убыванию</p>
<p>Промежуточная операция</p></li>
<li><p><span class="b">sum(): Int</span></p>
<p>Возвращает сумму элементов последовательности.</p>
<p>Терминальная операция</p></li> 
<li><p><span class="b">sumOf(selector: (T) -&gt; Int): Int</span></p>
<p>Возвращает сумму элементов последовательности на основе функции-селектора</p>
<p>Терминальная операция</p></li> 
<li><p><span class="b">take(n: Int): Sequence&lt;T&gt;</span></p>
<p>Возвращает новую последовательность, которая содержит n первых элементов текущей последовательности</p>
<p>Промежуточная операция</p></li> 
<li><p><span class="b">takeWhile(predicate: (T) -&gt; Boolean): Sequence&lt;T&gt;</span></p>
<p>Возвращает новую последовательность, которая содержит n первых элементов текущей последовательности, соответствующих функции-предикату</p>
<p>Промежуточная операция</p></li>
<li><p><span class="b">toHashSet(): HashSet&lt;T&gt;</span></p>
<p>Создает из последовательности объект HashSet</p>
<p>Терминальная операция</p></li> 
<li><p><span class="b">toList(): List&lt;T&gt;</span></p>
<p>Создает из последовательности объект List</p>
<p>Терминальная операция</p></li> 
<li><p><span class="b">toMap(): Map&lt;K, V></span></p>
<p>Создает из последовательности объект Map</p>
<p>Терминальная операция</p></li> 
<li><p><span class="b">toSet(): Set&lt;T&gt;</span></p>
<p>Создает из последовательности объект Set</p>
<p>Терминальная операция</p></li> 
</ul>
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


<div class="nav"><p><a href="./7.4.php">Назад</a><a href="./">Содержание</a><a href="./7.6.php">Вперед</a></p></div></div>
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
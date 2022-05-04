<!DOCTYPE html>
<html >
<head>
<title>Java | Stream API</title>
<meta charset="utf-8" />
<meta name="description" content="Обзор Stream API  в Java 8, основные классы и методы, работа с потоками данных, интерфейс BaseStream">
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
<h1>Stream API</h1><h2>Введение в Stream API</h2><div class="date">Последнее обновление: 30.04.2018</div>

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

<img src="https://metanit.com/metanit-java.jpg" id="jma" style="cursor:pointer;" />
</div>

<p>Начиная с JDK 8 в Java появился новый API - Stream API. Его задача - упростить работу с наборами данных, в частности, упростить операции фильтрации, 
сортировки и другие манипуляции с данными. Вся основная функциональность данного API сосредоточена в пакете <span class="b">java.util.stream</span>.</p>
<p>Ключевым понятием в Stream API является <span class="b">поток данных</span>. Вообще сам термин "поток" довольно перегружен в программировании в целом и в 
Java в частности. В одной из предыдущих глав рассматривалась работа с символьными и байтовыми потоками при чтении-записи файлов. Применительно к Stream API 
поток представляет канал передачи данных из источника данных. Причем в качестве источника могут выступать как файлы, так и массивы и коллекции.</p>
<p>Одной из отличительных черт Stream API является применение лямбда-выражений, которые позволяют значительно сократить запись выполняемых действий.</p>
<p>При ближайшем рассмотрении мы можем найти в других технологиях программирования аналоги подобного API. В частности, в языке C# некоторым аналогом Stream API 
будет технология LINQ.</p>
<p>Рассмотрим простейший пример. Допустим, у нас есть задача: найти в массиве количество всех чисел, которые больше 0. До JDK 8 мы бы могли написать что-то наподобие следующего:</p>
<pre class="brush:java;">
int[] numbers = {-5, -4, -3, -2, -1, 0, 1, 2, 3, 4, 5};
int count=0;
for(int i:numbers){
            
    if(i &gt; 0) count++;
}
System.out.println(count);
</pre>
<p>Теперь применим Stream API:</p>
<pre class="brush:java;">   
import java.util.stream.*;
//.......................
long count = IntStream.of(-5, -4, -3, -2, -1, 0, 1, 2, 3, 4, 5).filter(w -&gt; w &gt; 0).count();
System.out.println(count);
</pre>
<p>Теперь вместо цикла и кучи условных конструкций, которые мы бы использовали до JDK 8, мы можем записать цепочку методов, которые будут выполнять те же действия.</p>
<p>При работе со Stream API важно понимать, что все операции с потоками бывают либо <span class="b">терминальными (terminal)</span>, либо <span class="b">промежуточными (intermediate)</span>. 
Промежуточные операции возвращают трансформированный поток. Например, выше в примере метод <code>filter</code> принимал поток чисел и возвращал уже 
преобразованный поток, в котором только числа больше 0. К возвращенному потоку также можно применить ряд промежуточных операций.</p>
<p>Конечные или терминальные операции возвращают конкретный результат. Например, в примере выше метод <code>count()</code> представляет терминальную операцию и возвращает 
число. После этого никаких промежуточных операций естественно применять нельзя.</p>
<p>Все потоки производят вычисления, в том числе в промежуточных операциях, только тогда, когда к ним применяется терминальная операция. То есть в данном случае 
применяется отложенное выполнение.</p>
<p>В основе Stream API лежит интерфейс <span class="b">BaseStream</span>. Его полное определение:</p>
<pre class="brush:java;">interface BaseStream&lt;T , S extends BaseStream&lt;T , S&gt;&gt;</pre>
<p>Здесь параметр <code>T</code> означает тип данных в потоке, а <code>S</code> - тип потока, который наследуется от интерфейса BaseStream.</p>
<p>BaseStream определяет базовый функционал для работы с потоками, которые реализуется через его методы:</p>
<ul>
<li><p><span class="b">void close()</span>: закрывает поток</p></li>
<li><p><span class="b">boolean isParallel()</span>: возвращает true, если поток является параллельным</p></li>
<li><p><span class="b">Iterator&lt;Т&gt; iterator()</span>: возвращает ссылку на итератор потока</p></li>
<li><p><span class="b">Spliterator&lt;Т&gt; spliterator()</span>: возвращает ссылку на сплитератор потока</p></li>
<li><p><span class="b">S parallel()</span>: возвращает параллельный поток (параллельные потоки могут задействовать несколько ядер процессора в многоядерных архитектурах)</p></li>
<li><p><span class="b">S sequential()</span>: возвращает последовательный поток</p></li>
<li><p><span class="b">S unordered()</span>: возвращает неупорядоченный поток</p></li>
</ul>
<p>От интерфейса BaseStream наследуется ряд интерфейсов, предназначенных для создания конкретных потоков:</p>
<ul>
<li><p><span class="b">Stream&lt;T&gt;</span>: используется для потоков данных, представляющих любой ссылочный тип</p></li>
<li><p><span class="b">IntStream</span>: используется для потоков с типом данных int</p></li>
<li><p><span class="b">DoubleStream</span>: используется для потоков с типом данных double</p></li>
<li><p><span class="b">LongStream</span>: используется для потоков с типом данных long</p></li>
</ul>
<p>При работе с потоками, которые представляют определенный примитивный тип - double, int, long проще использовать интерфейсы DoubleStream, IntStream, LongStream. 
Но в большинстве случаев, как правило, работа происходит с более сложными данными, для которых предназначен интерфейс <code>Stream&lt;T&gt;</code>. 
Рассмотрим некоторые его методы:</p>
<ul>
<li><p><span class="b">boolean allMatch(Predicate&lt;? super T&gt; predicate)</span>: возвращает true, если все элементы потока удовлетворяют условию в предикате. Терминальная операция</p></li>
<li><p><span class="b">boolean anyMatch(Predicate&lt;? super T&gt; predicate)</span>: возвращает true, если хоть один элемент потока удовлетворяют условию в предикате. Терминальная операция</p></li>
<li><p><span class="b">&lt;R,A&gt; R collect(Collector&lt;? super T,A,R&gt; collector)</span>: добавляет элементы в неизменяемый контейнер с типом R. T представляет 
тип данных из вызывающего потока, а A - тип данных в контейнере. Терминальная операция</p></li>
<li><p><span class="b">long count()</span>: возвращает количество элементов в потоке. Терминальная операция.</p></li>
<li><p><span class="b">Stream&lt;T&gt; concat​(Stream&lt;? extends T&gt; a, Stream&lt;? extends T&gt; b)</span>: объединяет два потока. Промежуточная операция</p></li>
<li><p><span class="b">Stream&lt;T&gt; distinct()</span>: возвращает поток, в котором имеются только уникальные данные с типом T. Промежуточная операция</p></li>
<li><p><span class="b">Stream&lt;T&gt; dropWhile​(Predicate&lt;? super T&gt; predicate)</span>: пропускает элементы, которые соответствуют условию в predicate, 
пока не попадется элемент, который не соответствует условию. Выбранные элементы возвращаются в виде потока. Промежуточная операция.</p></li>
<li><p><span class="b">Stream&lt;T&gt; filter(Predicate&lt;? super T&gt; predicate)</span>: фильтрует элементы в соответствии с условием в предикате. Промежуточная операция</p></li>
<li><p><span class="b">Optional&lt;T&gt; findFirst()</span>: возвращает первый элемент из потока. Терминальная операция</p></li>
<li><p><span class="b">Optional&lt;T&gt; findAny()</span>: возвращает первый попавшийся элемент из потока. Терминальная операция</p></li>
<li><p><span class="b">void forEach(Consumer&lt;? super T&gt; action)</span>: для каждого элемента выполняется действие action. Терминальная операция</p></li>
<li><p><span class="b">Stream&lt;T&gt; limit(long maxSize)</span>: оставляет в потоке только maxSize элементов. Промежуточная операция</p></li>
<li><p><span class="b">Optional&lt;T&gt; max(Comparator&lt;? super T&gt; comparator)</span>: возвращает максимальный элемент из потока. Для сравнения элементов применяется 
компаратор comparator. Терминальная операция</p></li>
<li><p><span class="b">Optional&lt;T&gt; min(Comparator&lt;? super T&gt; comparator)</span>: возвращает минимальный элемент из потока. Для сравнения элементов применяется 
компаратор comparator. Терминальная операция</p></li>
<li><p><span class="b">&lt;R&gt; Stream&lt;R&gt; map(Function&lt;? super T,? extends R&gt; mapper)</span>: преобразует элементы типа T в элементы типа R и возвращает поток с элементами R. 
Промежуточная операция</p></li>
<li><p><span class="b">&lt;R&gt; Stream&lt;R&gt; flatMap(Function&lt;? super T, ? extends Stream&lt;? extends R&gt;&gt; mapper)</span>: 
позволяет преобразовать элемент типа T в несколько элементов типа R и возвращает поток с элементами R. Промежуточная операция</p></li>
<li><p><span class="b">boolean noneMatch(Predicate&lt;? super T&gt; predicate)</span>: возвращает true, если ни один из элементов в потоке не удовлетворяет условию в предикате. 
Терминальная операция</p></li>
<li><p><span class="b">Stream&lt;T&gt; skip(long n)</span>: возвращает поток, в котором отсутствуют первые n элементов. Промежуточная операция.</p></li>
<li><p><span class="b">Stream&lt;T&gt; sorted()</span>: возвращает отсортированный поток. Промежуточная операция.</p></li>
<li><p><span class="b">Stream&lt;T&gt; sorted(Comparator&lt;? super T&gt; comparator)</span>: возвращает отсортированный в соответствии с компаратором поток. Промежуточная операция.</p></li>
<li><p><span class="b">Stream&lt;T&gt; takeWhile​(Predicate&lt;? super T&gt; predicate)</span>: выбирает из потока элементы, пока они соответствуют условию в predicate. Выбранные 
элементы возвращаются в виде потока. Промежуточная операция.</p></li>
<li><p><span class="b">Object[] toArray()</span>: возвращает массив из элементов потока. Терминальная операция.</p></li>
</ul>
<p>Несмотря на то, что все эти операции позволяют взаимодействовать с потоком как неким набором данных наподобие коллекции, важно понимать отличие коллекций от потоков:</p>
<ul>
<li><p>Потоки не хранят элементы. Элементы, используемые в потоках, могут храниться в коллекции, либо при необходимости могут быть напрямую сгенерированы.</p></li>
<li><p>Операции с потоками не изменяют источника данных. Операции с потоками лишь возвращают новый поток с результатами этих операций.</p></li>
<li><p>Для потоков характерно отложенное выполнение. То есть выполнение всех операций с потоком происходит лишь тогда, когда выполняется терминальная операция и 
возвращается конкретный результат, а не новый поток.</p></li>
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


<div class="nav"><p><a href="8.10.php">Назад</a><a href="./">Содержание</a><a href="10.2.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Java</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/1.1.php">Язык программирования Java</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/1.2.php">Первая программа на Java</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/1.5.php">Первая программа в IntelliJ IDEA</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/1.3.php">Первая программа в NetBeans</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/1.4.php">Первая программа в Eclipse</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы программирования на Java</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.11.php">Структура программы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.1.php">Переменные и константы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.12.php">Типы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.9.php">Консольный ввод/вывод в Java</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.3.php">Арифметические операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.13.php">Поразрядные операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.14.php">Условные выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.15.php">Операции присваивания и приоритет операций</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.2.php">Преобразования базовых типов данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.5.php">Условные конструкции</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.6.php">Циклы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.4.php">Массивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.7.php">Методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.16.php">Параметры методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.17.php">Оператор return. Результат метода</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.18.php">Перегрузка методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.8.php">Рекурсивные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.10.php">Введение в обработку исключений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Классы. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.1.php">Классы и объекты</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.2.php">Пакеты</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.3.php">Модификаторы доступа и инкапсуляция</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.4.php">Статические члены и модификатор static</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.14.php">Объекты как параметры методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.12.php">Внутренние и вложенные классы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.5.php">Наследование</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.6.php">Абстрактные классы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.10.php">Иерархия наследования и преобразование типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.7.php">Интерфейсы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.16.php">Интерфейсы в механизме обратного вызова</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.8.php">Перечисления enum</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.9.php">Класс Object и его методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.11.php">Обобщения (Generics)</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.17.php">Ограничения обобщений</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.15.php">Наследование и обобщения</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.13.php">Ссылочные типы и клонирование объектов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.18.php">Records</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Обработка исключений</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/4.1.php">Оператор throws</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/4.2.php">Классы исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/4.3.php">Создание своих классов исключений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Коллекции</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.1.php">Типы коллекций. Интерфейс Collection</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.2.php">Класс ArrayList и интерфейс List</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.7.php">Очереди и класс ArrayDeque</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.3.php">Класс LinkedList</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.4.php">Интерфейс Set и класс HashSet</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.5.php">SortedSet, NavigableSet, TreeSet</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.6.php">Интерфейсы Comparable и Comporator. Сортировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.8.php">Интерфейс Map и класс HashMap</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.9.php">Интерфейсы SortedMap и NavigableMap. Класс TreeMap</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.10.php">Итераторы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Потоки ввода-вывода. Работа с файлами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.1.php">Потоки ввода-вывода</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.3.php">Чтение и запись файлов. FileInputStream и FileOutputStream</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.2.php">Закрытие потоков</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.4.php">Классы ByteArrayInputStream и ByteArrayOutputStream</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.5.php">Буферизованные потоки BufferedInputStream и BufferedOutputStream</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.6.php">Форматируемый вывод. PrintStream и PrintWriter</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.7.php">Классы DataOutputStream и DataInputStream</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.8.php">Чтение и запись текстовых файлов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.9.php">Буферизация символьных потоков. BufferedReader и BufferedWriter</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.10.php">Сериализация объектов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.11.php">Класс File. Работа с файлами и каталогами</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.12.php">Работа с ZIP-архивами</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.13.php">Класс Console</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Работа со строками</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/7.1.php">Введение в строки. Класс String</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/7.2.php">Основные операции со строками</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/7.3.php">StringBuffer и StringBuilder</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/7.4.php">Регулярные выражения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Лямбда-выражения</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/9.1.php">Введение в лямбда-выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/9.2.php">Лямбды как параметры и результаты методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/9.3.php">Встроенные функциональные интерфейсы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Многопоточное программирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.1.php">Класс Thread</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.2.php">Создание и выполнение потоков</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.4.php">Завершение и прерывание потока</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.3.php">Синхронизация потоков. Оператор synchronized</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.5.php">Взаимодействие потоков. Методы wait и notify</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.6.php">Семафоры</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.7.php">Обмен между потоками. Класс Exchanger</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.8.php">Класс Phaser</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.9.php">Блокировки. ReentrantLock</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.10.php">Условия в блокировках</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Stream API</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.1.php">Введение в Stream API</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.2.php">Создание потока данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.3.php">Фильтрация, перебор элементов и отображение</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.8.php">Сортировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.13.php">Получение подпотока и объединение потоков</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.4.php">Методы skip и limit</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.11.php">Операции сведения</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.5.php">Метод reduce</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.12.php">Тип Optional</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.6.php">Метод collect</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.7.php">Группировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.9.php">Параллельные потоки</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.10.php">Параллельные операции над массивами</a></span></li>
		</ul>
	</li><li class="closed"><span class="folder">Глава 11. Модульность</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/11.1.php">Создание модуля</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/11.2.php">Зависимые модули</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/11.3.php">Взаимодействие между модулями</a></span></li>
		</ul>
	</li>
	</li><li class="closed"><span class="folder">Глава 12. Дополнительные классы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/12.1.php">Математические вычисления и класс Math</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/12.2.php">Большие числа BigInteger и BigDecimal</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/12.3.php">Работа с датами. LocalDate</a></span></li>
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
	
	$("li:contains('Глава 10.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 10.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
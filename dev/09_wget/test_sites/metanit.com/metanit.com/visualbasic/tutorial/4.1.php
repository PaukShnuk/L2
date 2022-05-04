<!DOCTYPE html>
<html >
<head>
<title>Коллекции в Visual Basic.NET</title>
<meta charset="utf-8" />
<meta name="description" content="">
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
<h1>Коллекции</h1>
<h2>Введение в коллекции</h2><div class="date">Последнее обновление: 30.10.2015</div>

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

<p>Для работы с наборами элементов различных видов в Visual Basic.NET имеются массивы. Однако их использование не всегда удобно. 
Так, при создании массива нам надо изначально задать его длину. Если же нам вдруг надо изменить его длину, то придется использовать оператор ReDim. 
Куда более гибким инструментом по сравнению с массивами являются коллекции. Но основное удобство коллекций не только в этом, а еще и в том, что 
они реализуют стандартные структуры данных, например, стек, очередь, словарь, которые могут пригодиться для решения различных специальных задач.</p>
<p>Классы коллекций в .NET в основном находятся в пространствах имен <code>System.Collections</code> (необобщенные коллекции), 
<code>System.Collections.Generic</code> (обобщенные или типизированные коллекции) и <code>System.Collections.Specialized</code> 
(специальные классы коллекций).</p>
<p>Несмотря на многочисленность и разнородность классов коллекций, все они имеют единую основу: все они реализуют интерфейсы <b>IEnumerator</b> 
и <b>IEnumerable</b> (либо их обобщенные двойники - <span class="bb">IEnumerator(Of T)</span> и <span class="bb">IEnumerable(Of T)</span>). 
Интерфейс IEnumerator представляет перечислитель, с помощью которого коллекция последовательно перебирается, например, в цикле <b>foreach</b>. А интерфейс 
IEnumerable через свой метод <code>GetEnumerator</code> предоставляет перечислитель всем классам, реализующим данный интерфейс. 
Поэтому интерфейс <code>IEnumerable</code> (<code>IEnumerable(Of T)</code>) является базовым для всех коллекций.</p>
<p>Рассмотрим создание и применение двух коллекций:</p>
<pre class="brush:vb;">
Module Module1

    Sub Main()

        'необобщенная коллекция ArrayList
        Dim objectList As New ArrayList() From {1, 2, "string", 7.0}

        Dim obj As Object = 45.8

        objectList.Add(obj)
        objectList.Add("string2")
        objectList.RemoveAt(0) ' удаление первого элемента
        For Each item As Object In objectList
            Console.WriteLine(item)
        Next
        Console.WriteLine("Общее число элементов коллекции: " &amp; objectList.Count.ToString())
        'обобщенная коллекция List
        Dim states As New List(Of String)() From {"Россия", "США", "Великобритания", "Китай"}
        states.Add("Франция")
        states.RemoveAt(1) 'удаление второго элемента
        For Each item As String In states
            Console.WriteLine(item)
        Next

        Console.ReadLine()
    End Sub

End Module
</pre>
<p>В данном примере создаются две коллекции: необобщенная - ArrayList и обобщенная - List. В обоих случаях коллекции сразу же инициализируются 
некоторыми начальными данными. Для инициализации надо после вызова конструктора указать ключевое слово <span class="bb">From</span>, после которого 
идет в фигурных скобках набор элементов коллекции: <code>Dim objectList As New ArrayList() From {1, 2, "string", 7.0}</code>. Если бы нам не требовалось 
бы выполнять инициализацию, и надо было бы просто создать пустую коллекцию, можно было бы просто написать <code>Dim objectList As New ArrayList()</code></p>
<p>Большая часть встроенных коллекций поддерживает добавление элементов. 
В данном случае добавление производится методом <code>Add</code>, но для других коллекций название метода может отличаться. 
Также большинство коллекций реализуют удаление (в данном примере производится с помощью метода <code>RemoveAt</code>).</p>
<p>Используя свойство <code>Count</code>, у коллекций можно узнать количество элементов.</p>
<p>Обе коллекции перебираются в цикле For Each. Однако важно учитывать, что подобный перебор стал возможным благодаря реализации обоими классами 
интерфейса IEnumerable/IEnumerable(Of T).</p>
<p>Разные классы коллекций могут иметь различный набор методов и свойств, но общие принципы использования будут одни и те же для 
всех классов коллекций.</p>
<h3>Необобщенные коллекции</h3>
<p>Обычные или необобщенные коллекции располагаются в пространстве имен <code>System.Collections</code>. Описание их функциональных возможностей находится 
в интерфейсах, которые также находятся в пространстве имен <code>System.Collections</code>. Рассмотрим основные интерфейсы:</p>
<ul>
<li><p><span class="bb">IEumerator</span>: реализация данного интерфейса позволяет перебирать в цикле <code>For Each</code></p></li>
<li><p><span class="bb">IEnumerable</span>: определяет метод <code>GetEnumerator</code>, который возвращает перечислитель - то есть 
некоторый объект, реализующий интерфейс IEumerator.</p></li>
<li><p><span class="bb">ICollection</span>: базовый интерфейс для всех необобщенных коллекций, определяющий основные методы и свойства для всех классов, 
реализующих данный интерфейс (например, свойство <code>Count</code>). Данный интерфейс унаследован от интерфейса <code>IEnumerable</code>.</p></li>
<li><p><span class="bb">IList</span>: позволяет получать элементы коллекции по порядку и определяет методы для манипуляции ими: 
<code>Add</code> (добавление элементов), <code>Remove/RemoveAt</code> (удаление элемента) и ряд других.</p></li>
<li><p><span class="bb">IComparer</span>: определяет метод <code>int Compare(object x, object y)</code> для сравнения двух объектов</p></li>
<li><p><span class="bb">IDictionary</span>: определяет поведение коллекции, при котором она должна хранить объекты в виде пар ключ-значение: 
для каждого объекта определяется уникальный ключ, и этому ключу соответствует определенное значение</p></li>
<li><p><span class="bb">IDictionaryEnumerator</span>: определяет методы и свойства для перечислителя словаря</p></li>
<li><p><span class="bb">IEqualityComparer</span>: определяет два метода <code>Equals</code> и <code>GetHashCode</code>, с помощью которых 
два объекта сравниваются на предмет равенства</p></li>
</ul>
<p>Эти интерфейсы реализуются следующими классами коллекций в пространстве имен <code>System.Collections</code>:</p>
<ul>
<li><p><span class="bb">ArrayList</span>: класс простой коллекции объектов. Реализует интерфейсы IList, ICollection, IEnumerable</p></li>
<li><p><span class="bb">BitArray</span>: класс коллекции, содержащей массив битовых значений. Реализует интерфейсы ICollection, IEnumerable</p></li>
<li><p><span class="bb">Hashtable</span>: класс коллекции, представляющей хэш-таблицу и храняющий набор пар "ключ-значение"</p></li>
<li><p><span class="bb">Queue</span>: класс очереди объектов, работающей по алгоритму LIFO("первый вошел -первый вышел"). Реализует интерфейсы ICollection, IEnumerable</p></li>
<li><p><span class="bb">SortedList</span>: класс коллекции, хранящей наборы пар "ключ-значение", отсортированных по ключу. Реализует интерфейсы ICollection, IDictionary, IEnumerable</p></li>
<li><p><span class="bb">Stack</span>: класс стека</p></li>
</ul>
<h3>Обобщенные коллекции</h3>
<p>Ранее в теме <a href="3.12.php">Обобщенные типы</a> уже рассматривались обобщенные классы, универсальный параметр и примеры их использования. 
Обобщенные коллекции - это те же самые обобщенные классы, которые имеют те же преимущества над необобщенными коллекциями: 
повышение производительности (не надо тратить время на упаковку и распаковку объекта) и типобезопасность.</p>
<p>Классы обобщенных коллекций располагаются в пространстве имен <span class="bb">System.Collections.Generic</span>. Функционал коллекций 
также по большей части описывается в обобщенных интерфейсах.</p>
<p>Интерфейсы обобщенных коллекций во многом повторяют своих необобщеных двойников, в то же время они имеют и отличия - использование 
универсального параметра <code>T</code>, вместо которого можно подставить любой тип, а также сама функциональность. Рассмотрим некоторые встроенные обобщенные 
интерфейсы:</p>
<ul>
<li><p><span class="bb">IEumerator(Of T)</span>: определяет методы, с помощью которых можно перебирать элементы коллекции по очереди в цикле For Each</p></li>
<li><p><span class="bb">IEnumerable(Of T)</span>: содержит метод <code>GetEnumerator</code>, с помощью которого можно получать элементы любой коллекции</p></li>
<li><p><span class="bb">ICollection(Of T)</span>: представляет общие методы и свойства для всех обобщенных коллекций 
(в частности, методы <code>CopyTo, Add, Remove, Contains</code>, свойство <code>Count</code>)</p></li>
<li><p><span class="bb">IList(Of T)</span>: предоставляет функционал для создания последовательных списков</p></li>
<li><p><span class="bb">IComparer(Of T)</span>: определяет метод <code>Compare</code> для сравнения двух объектов</p></li>
<li><p><span class="bb">IDictionary(Of TKey, TValue)</span>: определяет поведение коллекции, которая хранит объекты в виде пар ключ-значение: 
каждый объект имеет уникальный ключ типа, указанного в параметре TKey, и этому ключу соответствует определенное значение, имеющее тип, 
указанный в параметре TValue</p></li>
<li><p><span class="bb">IEqualityComparer(Of T)</span>: содержит методы, с помощью которых два однотипных объекта сравниваются на предмет равенства</p></li>
</ul>
<p>Эти интерфейсы реализуются следующими классами коллекций из пространства имен <code>System.Collections.Generic</code>:</p>
<ul>
<li><p><span class="bb">List(Of T)</span>: класс последовательного списка. Реализует интерфейсы IList(Of T), 
ICollection(Of T), IEnumerable(Of T)</p></li>
<li><p><span class="bb">Dictionary(Of TKey, TValue)</span>: класс коллекции-словаря, хранящего наборы пар "ключ-значение". Реализует 
интерфейсы ICollection(Of T), IEnumerable(Of T), IDictionary(Of TKey, TValue)</p></li>
<li><p><span class="bb">LinkedList(Of T)</span>: класс двухсвязанного списка. Реализует интерфейсы  ICollection(Of T) и IEnumerable(Of T)</p></li>
<li><p><span class="bb">Queue(Of T)</span>: класс очереди объектов, работающей по алгоритму LIFO ("первый вошел -первый вышел"). 
Реализует интерфейсы ICollection, IEnumerable(Of T)</p></li>
<li><p><span class="bb">SortedSet(Of T)</span>: класс отсортированной коллекции однотипных объектов. Реализует интерфейсы ICollection(Of T), 
ISet(Of T), IEnumerable(Of T)</p></li>
<li><p><span class="bb">SortedList(Of TKey, TValue)</span>: класс коллекции, хранящей наборы пар "ключ-значение", отсортированных по ключу. Реализует интерфейсы ICollection(Of T), IEnumerable(Of T), IDictionary(Of TKey, TValue)</p></li>
<li><p><span class="bb">Stack(Of T)</span>: класс стека однотипных объектов. Реализует интерфейсы ICollection(Of T) и IEnumerable(Of T)</p></li>
</ul>
<p>Как видно из перечисления двух типов коллекций большинство обобщенных классов коллекций дублируют необобщенные коллекции. Какой тип коллекции тогда использовать? 
Если предполагается, что коллекция будет содержать только однотипные объекты, тогда предпочтительнее использовать обобщенные коллекции.</p>
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


<div class="nav"><p><a href="3.16.php">Назад</a><a href="./">Содержание</a><a href="4.2.php">Вперед</a></p></div></div>
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
<div class="menT" id="menT"><div class="menT" id="menT">
<div class="alig"><b>Руководство по VB.NET</b></div>
<div id="ex1">
	<ul id="browser" class="filetree"> 
				<li class="closed"><span class="folder">Глава 1. Введение в VB.NET</span>
					<ul>
						<li><span class="file"><a href="1.1.php">Язык Visual Basic и платформа .NET</a></span></li>
						<li><span class="file"><a href="1.2.php">Первое приложение в Visual Studio</a></span></li>
						<li><span class="file"><a href="1.3.php">Компиляция в командной строке с .NET CLI</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 2. Основы программирования на Visual Basic.NET</span>
					<ul>
						<li><span class="file"><a href="2.1.php">Типы данных и переменные</a></span></li>
						<li><span class="file"><a href="2.2.php">Преобразования базовых типов данных</a></span></li>
						<li><span class="file"><a href="2.3.php">Операции языка Visual Basic.NET</a></span></li>
						<li><span class="file"><a href="2.4.php">Массивы</a></span></li>
						<li><span class="file"><a href="2.5.php">Условные конструкции</a></span></li>
						<li><span class="file"><a href="2.6.php">Циклы</a></span></li>
						<li><span class="file"><a href="2.7.php">Программа сортировки массива</a></span></li>
						<li><span class="file"><a href="2.8.php">Методы и их параметры</a></span></li>
						<li><span class="file"><a href="2.9.php">Модули</a></span></li>
						<li><span class="file"><a href="2.10.php">Перечисления</a></span></li>
						<li><span class="file"><a href="2.11.php">Структуры</a></span></li>
						<li><span class="file"><a href="2.12.php">Работа с консолью в Visual Basic.NET</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 3. Классы. ООП</span>
					<ul>
						<li><span class="file"><a href="3.1.php">Классы и объекты</a></span></li>
						<li><span class="file"><a href="3.2.php">Модификаторы доступа</a></span></li>
						<li><span class="file"><a href="3.3.php">Свойства</a></span></li>
						<li><span class="file"><a href="3.4.php">Перегрузка методов и операторов</a></span></li>
						<li><span class="file"><a href="3.5.php">Статические члены классов</a></span></li>
						<li><span class="file"><a href="3.6.php">Наследование</a></span></li>
						<li><span class="file"><a href="3.7.php">Абстрактные классы</a></span></li>
						<li><span class="file"><a href="3.8.php">Интерфейсы</a></span></li>
						<li><span class="file"><a href="3.9.php">Преобразование типов</a></span></li>
						<li><span class="file"><a href="3.10.php">Обобщенные типы</a></span></li>
						<li><span class="file"><a href="3.11.php">Делегаты</a></span></li>
						<li><span class="file"><a href="3.12.php">События</a></span></li>
						<li><span class="file"><a href="3.13.php">Анонимные методы и лямбды</a></span></li>
						<li><span class="file"><a href="3.14.php">Обработка исключений</a></span></li>
						<li><span class="file"><a href="3.15.php">Типы значений и ссылочные типы</a></span></li>
						<li><span class="file"><a href="3.16.php">Значение Nothing и Nullable-типы</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 4. Коллекции</span>
					<ul>
						<li><span class="file"><a href="4.1.php">Введение в коллекции</a></span></li>
						<li><span class="file"><a href="4.2.php">Класс ArrayList</a></span></li>
						<li><span class="file"><a href="4.3.php">Список List(Of T)</a></span></li>
						<li><span class="file"><a href="4.4.php">Двухсвязный список LinkedList(Of T)</a></span></li>
						<li><span class="file"><a href="4.5.php">Очередь Queue(Of T)</a></span></li>
						<li><span class="file"><a href="4.6.php">Стек Stack(Of T)</a></span></li>
						<li><span class="file"><a href="4.7.php">Словарь Dictionary(Of T, V)</a></span></li>
						<li><span class="file"><a href="4.8.php">Индексаторы и создание коллекций</a></span></li>
						<li><span class="file"><a href="4.9.php">Интерфейсы IEnumerable и IEnumerator</a></span></li>
						<li><span class="file"><a href="4.10.php">Итераторы. Оператор Yield</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 5. Работа с файлами в Visual Basic.NET</span>
					<ul>
						<li><span class="file"><a href="5.1.php">Работа с дисками</a></span></li>
						<li><span class="file"><a href="5.2.php">Работа с каталогами</a></span></li>
						<li><span class="file"><a href="5.3.php">Файлы. Классы File и FileInfo</a></span></li>
						<li><span class="file"><a href="5.4.php">Чтение и запись файла. Класс FileStream</a></span></li>
						<li><span class="file"><a href="5.5.php">Работа с текстовыми файлами</a></span></li>
						<li><span class="file"><a href="5.6.php">Работа с бинарными файлами</a></span></li>
						<li><span class="file"><a href="5.7.php">Старый доступ к файлам</a></span></li>
						<li><span class="file"><a href="5.8.php">Объект My.Computer.FileSystem</a></span></li>
					</ul>
				</li>
	</ul>
</div></div></div>
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
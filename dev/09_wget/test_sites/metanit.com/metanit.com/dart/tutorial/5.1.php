<!DOCTYPE html>
<html >
<head>
<title>Dart | List</title>
<meta charset="utf-8" />
<meta name="description" content="Коллекция List в языке программирования Dart, создание фиксированных и нефиксированных списков, их методы">
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
<h1>Коллекции</h1><h2>List</h2><div class="date">Последнее обновление: 23.01.2021</div>

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

<p><span class="b">List&lt;T&gt;</span> или список представляет набор значений. В других языках программирования ему соответствуют массивы. 
Определим список чисел:</p>
<pre class="brush:dart;">
var list = [1, 2, 3];
</pre>
<p>Также мы можем явно указать тип:</p>
<pre class="brush:dart;">
List&lt;int&gt; list = [1, 2, 3];
</pre>
<p>При определении массива ему присваивается список элементов в квадратных скобках.</p>
<p>Для обращения к элементам массива применяются индексы. Индекс представляет номер элемента в массиве, при этом нумерация 
начинается с нуля, поэтому индекс первого элемента будет равен 0. А чтобы обратиться к четвертому элементу в массиве, нам надо 
использовать индекс 3, к примеру: <code>list[3]</code>. Используем индексы для получения и установки значений элементов массива:</p>
<pre class="brush:dart;">
void main (){
	
	var list = [2, 4, 6];
	list[1] = 5;		// установка 2-го элемента
	int d = list[2];	// получем 3-й элемент
	print(d);  			// 6
}
</pre>
<p>Если мы попытаемся обратиться по несуществующему индексу, то мы столкнемся с ошибкой:</p>
<pre class="brush:dart;">
var list = [2, 4, 6];
list[6] = 5;
</pre>
<p>В данном случае в списке только 3 элемента, поэтому элемента с индексом 6 в списке не существует.</p>
<p>Для перебора списка мы можем использовать встроенные циклы for/while:</p>
<pre class="brush:dart;">
void main (){
	
	var list = [2, 4, 6];
	for(int i=0; i &lt; list.length; i++){
		print(list[i]);
	}
}
</pre>
<p>В данном случае переменная-счетчик i выполняет роль индекса. Увеличение индекса будет происходить, пока он не достигнет значения 
list.length, то есть длины списка.</p>
<p>Но также мы можем использовать специальную форму цикла для коллекций:</p>
<pre class="brush:dart;">
void main (){
	
	var list = [2, 4, 6];
	for (var n in list){
		print(n);
	}
}
</pre>
<p>При переборе списка list каждый перебираемый элемент помещается в переменную n, после чего мы можем вывести ее значение на консоль.</p>
<h3>Фиксированные и нефиксированные списки</h3>
<p>Списки могут быть фиксированными (с жестко определенным размером) и нефиксированные (могут увеличиваться в размерах). Примеры создания нефиксированных списков:</p>
<pre class="brush:dart;">
var list1 = [];
var list2 = [2, 4, 6];
</pre>
<p>Отличительной особенностью нефиксированных списков является то, что мы можем динамически изменять их размер, например, с помощью 
метода <span class="b">add()</span> добавить новые элементы:</p>
<pre class="brush:dart;">
void main (){
	
	var list1 = [3];
	list1.add(1);
	list1.add(4);
	list1.add(5);
	for (var n in list1){
		print(n);
	}
}
</pre>
<p>Консольный вывод:</p>
<div class="console">
<pre class="consoletext">
3
1
4
5
</pre></div>
<p>Для создания фиксированного списка можно использовать один из именнованных конструкторов класса List. Например, 
конструктор <span class="b">List.filled(количество_элементов, значение_по_умолчанию)</span> принимает два параметра. 
Первый параметр - количество элементов в фиксированном списке. Второй параметр указывает на значение, которое будут иметь 
все элементы при создании списка:</p>
<pre class="brush:dart;">
void main (){
	
	var list1 = List.filled(4, 2); // фиксированный список [2, 2, 2, 2]
	list1[0] = 3;
	list1[1] = 7;
	list1[2] = 11;
	list1[3] = 15;
	//list1.add(1);	// нельзя добавить новый элемент
	
	for (var n in list1){
		print(n);
	}
}
</pre>
<p>Хотя список и фиксированный, тем не менее мы можем менять значения отдельных элементов.</p>
<p>Еще один способ создания фиксированного списка представляет конструктор <span class="b">List.generate()</span>:</p>
<pre class="brush:dart;">List.generate(количество_элементов, функция_наполнения, можно_ли_добавлять)</pre>
<p>Первый параметр указывает на количество элементов. Второй параметр представляет функцию заполнения списка, в которую в качестве параметра передается 
индекс элемента. Третий параметр - булевое значение - если <code>true</code>, то список НЕфиксированный (расширяемый), если <code>false</code>, 
то список фиксированный.</p>
<p>Применение конструктора <code>List.generate</code>:</p>
<pre class="brush:dart;">
void main (){
    var list1 = List.generate(4, (int index) =&gt; index + 1, growable: false); // фиксированный список [1, 2, 3, 4]

    list1[0] = 3;
    list1[1] = 7;
    list1[2] = 11;
    list1[3] = 15;
    //list1.add(1); // нельзя добавить новый элемент
     
    for (var n in list1){
        print(n);
    }
    
}
</pre>
<h3>Свойства и методы списков</h3>
<p>Основные свойства списков:</p>
<ul>
<li><p><span class="b">first</span>: возвращает первый элемент</p></li>
<li><p><span class="b">last</span>: возвращает последний элемент</p></li>
<li><p><span class="b">length</span>: возвращает длину списка</p></li>
<li><p><span class="b">reversed</span>: возвращает список, в котором все элементы расположены в противоположном порядке</p></li>
<li><p><span class="b">isEmpty</span>: возвращает true, если список пуст</p></li>
</ul>
<p>Основные методы списков:</p>
<ul>
<li><p><span class="b">add(E value)</span>: добавляет элемент в конец списка</p></li>
<li><p><span class="b">addAll(Iterable&lt;E&gt; iterable)</span>: добавляет в конец списка другой список</p></li>
<li><p><span class="b">clear()</span>: удаляет все элементы из списка</p></li>
<li><p><span class="b">indexOf(E element)</span>: возвращает первый индекс элемента</p></li>
<li><p><span class="b">insert(int index, E element)</span>: вставляет элемент на определенную позицию</p></li>
<li><p><span class="b">remove(Object value)</span>: удаляет объект из списка (удаляется только первое вхождение элемена в список)</p></li>
<li><p><span class="b">removeAt(int index)</span>: удаляет элементы по индексу</p></li>
<li><p><span class="b">removeLast()</span>: удаляет последний элемент списка</p></li>
<li><p><span class="b">forEach(void f(E element))</span>: производит над элементами списка некоторое действие, которое задается функцией-параметром, аналоги цикла for..in</p></li>
<li><p><span class="b">sort()</span>: сортирует список</p></li>
<li><p><span class="b">sublist(int start, [ int end ])</span>: возвращает часть списка от индекса start до индекса end</p></li>
<li><p><span class="b">contains(Object element)</span>: возвращает true, если элемент содержится в списке</p></li>
<li><p><span class="b">join([String separator = "" ])</span>: объединяет все элементы списка в строку. Можно указать необязательный параметр separator, который будет раздлять элементы в строке</p></li>
<li><p><span class="b">skip(int count)</span>: возвращает коллекцию, в которой отсутствуют первые count элементов</p></li>
<li><p><span class="b">take(int count)</span>: возвращает коллекцию, которая содержит первые count элементов</p></li>
<li><p><span class="b">where(bool test(E element))</span>: возвращает коллекцию, элементы которой соответствуют некоторому условию, которое передается в виде функции</p></li>
</ul>
<p>Это только краткий перечень основных функциональных возможностей класса List. Полный список полей/методов/конструкторов можно посмотреть в 
<a href="https://api.dart.dev/stable/2.4.0/dart-core/List-class.html" rel="nofollow">документации</a></p>
<p>Примение некоторых полей и методов</p>
<pre class="brush:dart;">
void main (){
	
	var list = [-3, -1, 2, 4, 5, 7];
	// получим первый элемент
	print(list.first);	// -3
	// получим последний элемент
	print(list.last);	// 7
	// получим длину списка
	print(list.length);	// 6
	
	// добавим список
	list.addAll([4, 6]);
	
	// соединим элементы списка в строку, разделитель запятая
	print(list.join(", "));	// -3, -1, 2, 4, 5, 7, 4, 6
	
	// отсортируем список
	list.sort();
	print(list.join(", "));	// -3, -1, 2, 4, 4, 5, 6, 7
	
	// удалим число 4
	list.remove(4);
	// удалим второй элемент
	list.removeAt(1);
	print(list.join(", "));	// -3, 2, 4, 5, 6, 7
	
	// получим элементы больше  2
	list = list.where((element) =&gt; element &gt; 2).toList();
	print(list.join(", "));	// 4, 5, 6, 7
}
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


<div class="nav"><p><a href="./4.11.php">Назад</a><a href="./">Содержание</a><a href="./5.2.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в язык Dart</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/1.1.php">Что такое Dart. Первая программа на Windows</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/1.2.php">Первая программа в IntelliJ IDEA</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Основы языка Dart</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.1.php">Структура программы</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.2.php">Переменные и константы</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.3.php">Примитивные типы данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.10.php">Значение null, nullable-типы и null-безопасность</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.4.php">Арифметические операции</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.5.php">Побитовые операции и операции сдвига</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.6.php">Условные выражения</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.7.php">Операции присваивания и приоритет операций</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.8.php">Условные конструкции</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.9.php">Циклы</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Функциональное программирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/3.1.php">Определение функций</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/3.2.php">Параметры функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/3.3.php">Возвращение результата из функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/3.4.php">Функция как объект</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/3.5.php">Анонимные и вложенные функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/3.6.php">Замыкания</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Объектно-ориентированное программирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.1.php">Классы и объекты</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.2.php">Константы и константные конструкторы классов</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.3.php">Наследование</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.4.php">Абстрактные классы и методы</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.5.php">Реализация интерфейсов</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.6.php">Миксины</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.7.php">Статические члены классов</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.8.php">Generics</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.9.php">Фабричный конструктор</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.10.php">Переопределение операторов</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.11.php">Перечисления</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Коллекции</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/5.1.php">List</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/5.2.php">Set</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/5.3.php">Map</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. Обработка исключений</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/6.1.php">Блок try..catch</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/6.2.php">Классы исключений</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/6.3.php">Оператор throw и создание своих типов исключений</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Асинхронность</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/7.1.php">Введение в асинхронность и Future</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/7.2.php">Работа с классом Future</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/7.3.php">Асинхронные функции и операторы async и await</a></span></li>
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
	
	$("li:contains('Глава 5.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 5.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
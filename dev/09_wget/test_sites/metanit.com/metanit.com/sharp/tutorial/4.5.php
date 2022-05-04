<!DOCTYPE html>
<html >
<head>
<title>C# и .NET | Список List</title>
<meta charset="utf-8" />
<meta name="description" content="Список List&lt;T&gt; в C#, его основные свойства и методы, пример использования">
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
<h1>Коллекции</h1><h2>Список List&lt;T&gt;</h2><div class="date">Последнее обновление: 03.01.2022</div>

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

<p>Хотя в языке C# есть массивы, которые хранят в себе наборы однотипных объектов, но работать с ними не всегда удобно. Например, массив хранит 
фиксированное количество объектов, однако что если мы заранее не знаем, сколько нам потребуется объектов. И в этом случае намного удобнее применять 
коллекции. Еще один плюс коллекций состоит в том, что некоторые из них реализует стандартные структуры данных, например, стек, очередь, словарь, которые 
могут пригодиться для решения различных специальных задач. Большая часть классов коллекций содержится в пространстве имен 
<span class="b">System.Collections.Generic</span>.</p>
<p>Класс List&lt;T&gt; из пространства имен <code>System.Collections.Generic</code> представляет простейший список однотипных объектов. Класс List типизируется типом, объекты которого будут хранится в списке.</p>
<p>Мы можем создать пустой список:</p>
<pre class="brush:c#;">List&lt;string&gt; people = new List&lt;string&gt;();</pre>
<p>В данном случае объект List типизируется типом <span class="b">string</span>. А это значит, что хранить в этом списке мы можем только строки.</p>
<p>Можно сразу при создании списка инициализировать его начальными значениями. В этом случае элементы списка помещаются после вызова конструктора в фигурных скобках</p>
<pre class="brush:c#;">List&lt;string&gt; people = new List&lt;string&gt;() { "Tom", "Bob", "Sam" };</pre>
<p>В данном случае в список помещаются три строки</p>
<p>Также можно при создании списка инициализировать его элементами из другой коллекции, например, другого списка:</p>
<pre class="brush:c#;">
var people = new List&lt;string&gt;() { "Tom", "Bob", "Sam" };
var employees = new List&lt;string&gt;(people);
</pre>
<p>Можно совместить оба способа:</p>
<pre class="brush:c#;">
var people = new List&lt;string&gt;() { "Tom", "Bob", "Sam" };
var employees = new List&lt;string&gt;(people){"Mike"};
</pre>
<p>В данном случае в списке employees будет четыре элемента (<code>{ "Tom", "Bob", "Sam", "Mike" }</code>) - три добавляются из списка people и один элемент задается при инициализации.</p>
<p>Подобным образом можно работать со списками других типов, например:</p>
<pre class="brush:c#;">
List&lt;Person&gt; people = new List&lt;Person&gt;() 
{ 
    new Person("Tom"),
    new Person("Bob"), 
    new Person("Sam") 
};

class Person
{
    public string Name { get;}
    public Person(string name) =&gt; Name = name;
}
</pre>
<h3>Установка начальной емкости списка</h3>
<p>Еще один конструктор класса List принимает в качестве параметра начальную емкость списка:</p>
<pre class="brush:c#;">List&lt;string&gt; people = new List&lt;string&gt;(16);</pre>
<p>Указание начальной емкости списка позволяет в будущем увеличить производительность и уменьшить издержки на выделение памяти при 
добавлении элементов. Поскольку динамическое добавление в список может приводить на низком уровне к дополнительному выделению памяти, что 
снижает производительность. Если же мы знаем, что список не будет превышать некоторый размер, то мы можем передать этот размер в качестве емкости списка и 
избежать дополнительных выделений памяти.</p>
<p>Также начальную емкость можно установить с помощью свойства <code>Capacity</code>, которое имеется у класса List.</p>
<h3>Обращение к элементам списка</h3>
<p>Как и массивы, списки поддерживают индексы, с помощью которых можно обратиться к определенным элементам:</p>
<pre class="brush:c#;">
var people = new List&lt;string&gt;() { "Tom", "Bob", "Sam" };

string firstPerson = people[0];	// получаем первый элемент
Console.WriteLine(firstPerson); // Tom
people[0] = "Mike";		// изменяем первый элемент
Console.WriteLine(people[0]); // Mike
</pre>
<h3>Длина списка</h3>
<p>С помощью свойства <span class="b">Count</span> можно получить длину списка:</p>
<pre class="brush:c#;">
var people = new List&lt;string&gt;() { "Tom", "Bob", "Sam" };
Console.WriteLine(people.Count);    // 3
</pre>
<h3>Перебор списка</h3>
<p>C# позволяет осуществить перебор списка с помощью стандартного цикла <span class="b">foreach</span>:/p>
<pre class="brush:c#;">
var people = new List&lt;string&gt;() { "Tom", "Bob", "Sam" };

foreach (var person in people)
{
    Console.WriteLine(person);
}
// Вывод программы:
// Tom
// Bob
// Sam
</pre>
<p>Также можно использовать другие типы циклов и в комбинации с индексами перебирать списки:</p>
<pre class="brush:c#;">
var people = new List&lt;string&gt;() { "Tom", "Bob", "Sam" };

for (int i = 0; i &lt; people.Count; i++)
{
    Console.WriteLine(people[i]);
}
</pre>
<h3>Методы списка</h3>
<p>Среди его методов можно выделить следующие:</p>
<ul>
<li><p><span class="b">void Add(T item)</span>: добавление нового элемента в список</p></li>
<li><p><span class="b">void AddRange(IEnumerable&lt;T&gt; collection)</span>: добавление в список коллекции или массива</p></li>
<li><p><span class="b">int BinarySearch(T item)</span>: бинарный поиск элемента в списке. Если элемент найден, то метод возвращает индекс этого элемента в коллекции. 
При этом список должен быть отсортирован.</p></li>
<li><p><span class="b">void CopyTo(T[] array)</span>: копирует список в массив array</p></li>
<li><p><span class="b">void CopyTo(int index, T[] array, int arrayIndex, int count)</span>: копирует из списка начиная с индекса index элементы, 
количество которых равно count, и вставляет их в массив array начиная с индекса arrayIndex</p></li>
<li><p><span class="b">bool Contains(T item)</span>: возвращает <code>true</code>, если элемент item есть в списке</p></li>
<li><p><span class="b">void Clear()</span>: удаляет из списка все элементы</p></li>
<li><p><span class="b">bool Exists(Predicate&lt;T&gt; match)</span>: возвращает <code>true</code>, если в списке есть элемент, который 
соответствует делегату match</p></li>
<li><p><span class="b">T? Find(Predicate&lt;T&gt; match)</span>: возвращает первый элемент, который соответствует делегату match. Если элемент не найден, возвращается null</p></li>
<li><p><span class="b">T? FindLast(Predicate&lt;T&gt; match)</span>: возвращает последний элемент, который соответствует делегату match. Если элемент не найден, возвращается null</p></li>
<li><p><span class="b">List&lt;T&gt; FindAll(Predicate&lt;T&gt; match)</span>: возвращает список элементов, которые соответствуют делегату match</p></li>
<li><p><span class="b">int IndexOf(T item)</span>: возвращает индекс первого вхождения элемента в списке</p></li>
<li><p><span class="b">int LastIndexOf(T item)</span>: возвращает индекс последнего вхождения элемента в списке</p></li>
<li><p><span class="b">List&lt;T&gt; GetRange(int index, int count)</span>: возвращает список элементов, количество которых равно count, начиная 
с индекса index.</p></li>
<li><p><span class="b">void Insert(int index, T item)</span>: вставляет элемент item в список по индексу index. Если такого индекса в списке нет, то генерируется исключение</p></li>
<li><p><span class="b">void InsertRange(int index, collection)</span>: вставляет коллекцию элементов collection в текущий список начиная с индекса index. Если такого индекса в списке нет, то генерируется исключение</p></li>
<li><p><span class="b">bool Remove(T item)</span>: удаляет элемент item из списка, и если удаление прошло успешно, то возвращает true. Если в списке несколько одинаковых элементов, 
то удаляется только первый из них</p></li>
<li><p><span class="b">void RemoveAt(int index)</span>: удаление элемента по указанному индексу index. Если такого индекса в списке нет, то генерируется исключение</p></li>
<li><p><span class="b">void RemoveRange(int index, int count)</span>: параметр index задает индекс, с которого надо удалить элементы, а параметр 
count задает количество удаляемых элементов.</p></li>
<li><p><span class="b">int RemoveAll((Predicate&lt;T&gt; match))</span>: удаляет все элементы, которые соответствуют делегату match. Возвращает 
количество удаленных элементов</p></li>

<li><p><span class="b">void Reverse()</span>: изменяет порядок элементов</p></li>
<li><p><span class="b">void Reverse(int index, int count)</span>: изменяет порядок на обратный для элементов, количество которых равно count, начиная с индекса index</p></li>

<li><p><span class="b">void Sort()</span>: сортировка списка</p></li>
<li><p><span class="b">void Sort(IComparer&lt;T&gt;? comparer)</span>: сортировка списка с помощью объекта comparer, который передается в качестве параметра</p></li>
</ul>
<h3>Добавление в список</h3>
<pre class="brush:c#;">
List<string> people = new List<string> () { "Tom" };

people.Add("Bob"); // добавление элемента
// people = { "Tom", "Bob" };

people.AddRange(new[] { "Sam", "Alice" });   // добавляем массив
// people = { "Tom", "Bob", "Sam", "Alice" };
// также можно было бы добавить другой список
// people.AddRange(new List&lt;string&gt;(){ "Sam", "Alice" });

people.Insert(0, "Eugene"); // вставляем на первое место
// people = { "Eugene", "Tom", "Bob", "Sam", "Alice" };

people.InsertRange(1, new string[] {"Mike", "Kate"}); // вставляем массив с индекса 1
// people = { "Eugene", "Mike", "Kate", "Tom", "Bob", "Sam", "Alice" };

// также можно было бы добавить другой список
// people.InsertRange(1, new List&lt;string&gt;(){ "Mike", "Kate" });
</pre>
<h3>Удаление из списка</h3>
<pre class="brush:c#;">
var people = new List&lt;string&gt; () { "Eugene", "Mike", "Kate", "Tom", "Bob", "Sam", "Tom", "Alice" };

people.RemoveAt(1); //  удаляем второй элемент
// people = { "Eugene", "Kate", "Tom", "Bob", "Sam", "Tom", "Alice" };

people.Remove("Tom"); //  удаляем элемент "Tom"
// people = { "Eugene", "Kate", "Bob", "Sam", "Tom", "Alice" };

// удаляем из списка все элементы, длина строки которых равна 3
people.RemoveAll(person =&gt; person.Length == 3);
// people = { "Eugene", "Kate", "Alice" };

// удаляем из списка 2 элемента начиная с индекса 1
people.RemoveRange(1, 2);
// people = { "Eugene"};

// полностью очищаем список
people.Clear();
// people = {  };
</pre>
<h3>Поиск и проверка элемента</h3>
<pre class="brush:c#;">
var people = new List&lt;string&gt; () { "Eugene", "Mike", "Kate", "Tom", "Bob", "Sam" };

var containsBob = people.Contains("Bob");     //  true
var containsBill = people.Contains("Bill");    // false

// проверяем, есть ли в списке строки с длиной 3 символа
var existsLength3 = people.Exists(p =&gt; p.Length == 3);  // true

// проверяем, есть ли в списке строки с длиной 7 символов
var existsLength7 = people.Exists(p =&gt; p.Length == 7);  // false

// получаем первый элемент с длиной в 3 символа
var firstWithLength3 = people.Find(p =&gt; p.Length == 3); // Tom

// получаем последний элемент с длиной в 3 символа
var lastWithLength3 = people.FindLast(p =&gt; p.Length == 3);  // Sam

// получаем все элементы с длиной в 3 символа в виде списка
List&lt;string&gt; peopleWithLength3 = people.FindAll(p =&gt; p.Length == 3);
// peopleWithLength3 { "Tom", "Bob", "Sam"}
</pre>
<h3>Получение диапазона и копирование в массив</h3>
<pre class="brush:c#;">
List&lt;string&gt; people = new List&lt;string&gt;() {"Eugene", "Tom", "Mike", "Sam", "Bob" };

// получаем диапазон со второго по четвертый элемент
var range = people.GetRange(1, 3);
// range = { "Tom", "Mike", "Sam"};

// копируем в массив первые три элемента
string[] partOfPeople = new string[3];
people.CopyTo(0, partOfPeople, 0, 3);
// partOfPeople = { "Eugene", "Tom", "Mike"};
</pre>
<h3>Расположение элементов в обратном порядке</h3>
<pre class="brush:c#;">
var people = new List&lt;string&gt; () { "Eugene", "Tom", "Mike", "Sam", "Bob" };

// переворачиваем весь список
people.Reverse();
// people = { "Bob","Sam", "Mike", "Tom", "Eugene"};

var people2 = new List&lt;string&gt;() { "Eugene", "Tom", "Mike", "Sam", "Bob" };
// переворачиваем часть только 3 элемента с индекса 1
people2.Reverse(1, 3);
// people2 = { "Eugene","Sam", "Mike", "Tom", "Bob" };
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


<div class="nav"><p><a href="./3.51.php">Назад</a><a href="./">Содержание</a><a href="./4.6.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в C#</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.1.php">Язык C# и платформа .NET</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.2.php">Начало работы с Visual Studio. Первая программа</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.3.php">Компиляция в командной строке</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.6.php">Первая программа на MacOS</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы программирования на C#</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.5.php">Структура программы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.25.php">Переменные и константы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.26.php">Литералы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.1.php">Типы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.15.php">Консольный ввод-вывод</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.3.php">Арифметические операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.22.php">Поразрядные операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.23.php">Операции присваивания</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.2.php">Преобразования базовых типов данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.24.php">Условные выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.5.php">Конструкция if..else и тернарная операция</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.6.php">Циклы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.4.php">Массивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.7.php">Задачи с массивами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.8.php">Методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.9.php">Параметры методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.34.php">Возвращение значения и оператор return</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.27.php">Передача параметров по ссылке и значению. Выходные параметры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.10.php">Массив параметров и ключевое слово params</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.11.php">Рекурсивные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.20.php">Локальные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.45.php">Конструкция switch</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.12.php">Перечисления enum</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Классы, структуры и пространства имен</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.1.php">Классы и объекты</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.35.php">Конструкторы, инициализаторы и деконструкторы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.4.php">Класс Program и метод Main. Программы верхнего уровня</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.13.php">Структуры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.16.php">Типы значений и ссылочные типы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.18.php">Область видимости (контекст) переменных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.25.php">Пространства имен</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.52.php">Глобальные пространства имен</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.53.php">Подключение пространств имен по умолчанию</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.46.php">Создание библиотеки классов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.2.php">Модификаторы доступа</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.4.php">Свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.5.php">Перегрузка методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.6.php">Статические члены и модификатор static</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.3.php">Поля и структуры для чтения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.50.php">Null и ссылочные типы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.17.php">Null и значимые типы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.26.php">Проверка на null, операторы ?. и ??</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.1.php">Псевдонимы типов и статический импорт</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Объектно-ориентированное программирование</span>
		<ul>		
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.7.php">Наследование</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.11.php">Преобразование типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.19.php">Виртуальные методы и свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.41.php">Скрытие методов и свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.42.php">Различие переопределения и скрытия методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.8.php">Абстрактные классы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.10.php">Класс System.Object и его методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.12.php">Обобщенные типы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.38.php">Ограничения обобщений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.39.php">Наследование обобщенных типов</a></span></li>
			</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Обработка исключений</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.14.php">Конструкция try..catch..finally</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.28.php">Блок catch и фильтры исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.29.php">Типы исключений. Класс Exception</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.31.php">Генерация исключения и оператор throw</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.17.php">Создание классов исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.30.php">Поиск блока catch при обработке исключений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Делегаты, события и лямбды</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.13.php">Делегаты</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.43.php">Применение делегатов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.15.php">Анонимные методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.16.php">Лямбды</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.14.php">События</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.28.php">Ковариантность и контравариантность делегатов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.33.php">Делегаты Action, Predicate и Func</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.54.php">Замыкания</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Интерфейсы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.9.php">Определение интерфейсов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.49.php">Применение интерфейсов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.44.php">Явная реализация интерфейсов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.47.php">Реализация интерфейсов в базовых и производных классах</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.48.php">Наследование интерфейсов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.40.php">Интерфейсы в обобщениях</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.22.php">Копирование объектов. Интерфейс ICloneable</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.23.php">Сортировка объектов. Интерфейс IComparable</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.27.php">Ковариантность и контравариантность обобщенных интерфейсов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Дополнительные возможности ООП в C#</span>
		<ul><li><span class="file"><a href="//metanit.com/sharp/tutorial/3.36.php">Определение операторов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.37.php">Перегрузка операций преобразования типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.10.php">Индексаторы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.21.php">Переменные-ссылки и возвращение ссылки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.18.php">Методы расширения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.21.php">Частичные классы и методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.20.php">Анонимные типы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.19.php">Кортежи</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.51.php">Records</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Pattern matching</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.34.php">Паттерн типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.55.php">Паттерн свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.56.php">Паттерны кортежей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.57.php">Позиционный паттерн</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.58.php">Реляционный и логический паттерны</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.59.php">Паттерны списков</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Коллекции</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.5.php">Список List&lt;T&gt;</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.6.php">Двухсвязный список LinkedList&lt;T&gt;</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.7.php">Очередь Queue&lt;T&gt;</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.8.php">Стек Stack&lt;T&gt;</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.9.php">Словарь Dictionary&lt;T, V&gt;</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.13.php">Класс ObservableCollection</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.11.php">Интерфейсы IEnumerable и IEnumerator</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.12.php">Итераторы и оператор yield</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 11. Работа со строками</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/7.1.php">Строки и класс System.String</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/7.2.php">Операции со строками</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/7.5.php">Форматирование и интерполяция строк</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/7.3.php">Класс StringBuilder</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/7.4.php">Регулярные выражения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 12. Работа с датами и временем</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/19.1.php">Структура DateTime</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/19.2.php">Форматирование дат и времени</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/19.3.php">DateOnly и TimeOnly</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 13. Дополнительные классы и структуры .NET</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/20.1.php">Отложенная инициализация и тип Lazy</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/20.2.php">Математические вычисления и класс Math</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/20.4.php">Преобразование типов и класс Convert</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/20.5.php">Класс Array и массивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.33.php">Span</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.32.php">Индексы и диапазоны</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 14. Многопоточность</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.1.php">Введение в многопоточность. Класс Thread</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.2.php">Создание потоков. Делегат ThreadStart</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.3.php">Потоки с параметрами и ParameterizedThreadStart</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.4.php">Синхронизация потоков</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.5.php">Мониторы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.6.php">Класс AutoResetEvent</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.7.php">Мьютексы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.8.php">Семафоры</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 15. Параллельное программирование и библиотека TPL</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/12.1.php">Задачи и класс Task</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/12.2.php">Работа с классом Task</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/12.3.php">Задачи продолжения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/12.4.php">Класс Parallel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/12.5.php">Отмена задач и параллельных операций. CancellationToken</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 16. Aсинхронное программирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.3.php">Асинхронные методы, async и await</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.7.php">Возвращение результата из асинхронного метода</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.5.php">Последовательное и параллельное выполнение. Task.WhenAll и Task.WhenAny</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.4.php">Обработка ошибок в асинхронных методах</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.8.php">Асинхронные стримы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 17. LINQ</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.1.php">Основы LINQ</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.6.php">Проекция данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.2.php">Фильтрация коллекции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.3.php">Сортировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.4.php">Объединение, пересечение и разность коллекций</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.5.php">Агрегатные операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.11.php">Получение части коллекции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.6.php">Группировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.7.php">Соединение коллекций</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.10.php">Проверка наличия и получение элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.8.php">Отложенное и немедленное выполнение LINQ</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.9.php">Делегаты в запросах LINQ</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 18. Parallel LINQ</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/17.1.php">Введение в Parallel LINQ. Метод AsParallel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/17.2.php">Метод AsOrdered</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/17.3.php">Обработка ошибок и отмена параллельных операции</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 19. Рефлексия</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.1.php">Введение в рефлексию. Класс System.Type</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.2.php">Применение рефлексии и исследование типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.5.php">Исследование методов и конструкторов с помощью рефлексии</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.6.php">Исследование полей и свойств с помощью рефлексии</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.3.php">Динамическая загрузка сборок и позднее связывание</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.4.php">Атрибуты в .NET</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 20. Dynamic Language Runtime</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/9.1.php">DLR в C#. Ключевое слово dynamic</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/9.2.php">DynamicObject и ExpandoObject</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/9.3.php">Использование IronPython в .NET</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 21. Сборка мусора, управление памятью и указатели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/8.1.php">Сборщик мусора в C#</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/8.2.php">Финализируемые объекты. Метод Dispose</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/8.5.php">Конструкция using</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/8.3.php">Указатели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/8.4.php">Указатели на структуры, члены классов и массивы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 22. Работа с файловой системой</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.1.php">Работа с дисками</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.2.php">Работа с каталогами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.3.php">Работа с файлами. Классы File и FileInfo</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.4.php">FileStream. Чтение и запись файла</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.5.php">Чтение и запись текстовых файлов. StreamReader и StreamWriter</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.6.php">Бинарные файлы. BinaryWriter и BinaryReader</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.7.php">Архивация и сжатие файлов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 23. Работа с JSON</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/6.5.php">Сериализация в JSON. JsonSerializer</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 24. Работа с XML</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.1.php">XML-Документы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.2.php">Работа с XML с помощью System.Xml</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.3.php">Изменение XML-документа</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.4.php">XPath</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.5.php">Linq to Xml. Создание Xml-документа</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.6.php">Выборка элементов в LINQ to XML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.7.php">Изменение документа в LINQ to XML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/6.4.php">Сериализация в XML. XmlSerializer</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 25. Процессы и домены приложения</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/18.1.php">Процессы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/18.2.php">Домены приложений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/18.3.php">AssemblyLoadContext и динамическая загрузка и выгрузка сборок</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 26. Валидация модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/22.1.php">Основы валидации модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/22.2.php">Атрибуты валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/22.3.php">Создание своих атрибутов валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/22.4.php">Самовалидация модели</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 27. Что нового</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/23.1.php">Нововведения в C# 11</a></span></li>
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
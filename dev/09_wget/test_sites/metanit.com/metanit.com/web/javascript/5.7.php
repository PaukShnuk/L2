<!DOCTYPE html>
<html >
<head>
<title>JavaScript | Операции с массивами</title>
<meta charset="utf-8" />
<meta name="description" content="Операции с массивами в JavaScript, добавление, копирование, получение и удаление элементов, подмассивы">
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
<h2>Операции с массивами</h2><div class="date">Последнее обновление: 08.09.2021</div>

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

<img src="https://metanit.com/metanit-front.jpg" id="jmw" style="cursor:pointer;" />
</div>

<p>Язык JavaScript предоставлет богатые возможности для работы с массивами, которые реализуются с помощью методов объекта Array. Рассмотрим применение этих методов</p>
<h3>Копирование массива. slice()</h3>
<p>Копирование массива может быть поверхностным или неглубоким (shallow copy) и глубоким (deep copy).</p>
<p>При неглубоком копировании достаточно присвоить переменной значение другой переменной, которая хранит массив:</p>
<pre class="brush:js;">
const users = ["Tom", "Sam", "Bill"];
console.log(users);		//	["Tom", "Sam", "Bill"]
const people = users;		//	неглубокое копирование

people[1] = "Mike";		//	изменяем второй элемент
console.log(users);		//	["Tom", "Mike", "Bill"]
</pre>
<p>В данном случае переменная people после копирования будет указывать на тот же массив, что и переменная users. Поэтому при изменении элементов в people, 
изменятся элементы и в users, так как фактически это один и тот же массив.</p>
<p>Такое поведение не всегда является желательным. Например, мы хотим, чтобы после копирования переменные указывали на отдельные массивы. И в этом случае 
можно использовать глубокое копирование с помощью метода <span class="b">slice()</span>:</p>
<pre class="brush:js;">
const users = ["Tom", "Sam", "Bill"];
console.log(users);				//	["Tom", "Sam", "Bill"]
const people = users.slice();		//	глубокое копирование

people[1] = "Mike";				//	изменяем второй элемент
console.log(users);				//	["Tom", "Sam", "Bill"]
console.log(people);			//	["Tom", "Mike", "Bill"]
</pre>
<p>В данном случае после копирования переменные будут указывать на разные массивы, и мы сможем изменять их отдельно друг от друга.</p>
<p>Но тут стоит отметить, что то же самое копирование по сути можно выполнить и с помощью spread-оператора <span class="b">...</span>:</p>
<pre class="brush:js;">
const users = ["Tom", "Sam", "Bill"];
console.log(users);     //  ["Tom", "Sam", "Bill"]
const people = [...users];
 
people[1] = "Mike";     //  изменяем второй элемент
console.log(users);     //  ["Tom", "Sam", "Bill"]
console.log(people);     //  ["Tom", "Mike", "Bill"]
</pre>

<p>Также метод <code>slice()</code> позволяет скопировать часть массива. Для этого он принимает два параметра:</p>
<pre class="brush:js;">slice(начальный_индекс, конечный_индекс)</pre>
<p>Первый параметр указывает на начальный индекс элемента, с которого  которые используются для выборки значений из массива. А второй параметр - конечный индекс, по который надо выполнить копирование.</p>
<p>Например, выберем в новый массив элементы, начиная с 1 индекса по индекс 4 не включая:</p>
<pre class="brush:js;">
const users = ["Tom", "Sam", "Bill", "Alice", "Kate"];
const people = users.slice(1, 4);
console.log(people);		// ["Sam", "Bill", "Alice"]
</pre>
<p>И поскольку индексация массивов начинается с нуля, то в новом массиве окажутся второй, третий и четвертый элемент.</p>
<p>Если указан только начальный индекс, то копирование выполняется до конца массива:</p>
<pre class="brush:js;">
const users = ["Tom", "Sam", "Bill", "Alice", "Kate"];
const people = users.slice(2);  // со второго индекса до конца
console.log(people);		// ["Bill", "Alice", "Kate"]
</pre>
<h3>push()</h3>
<p>Метод <code>push()</code> добавляет элемент в конец массива:</p>
<pre class="brush:js;">
const people = [];
people.push("Tom");
people.push("Sam");
people.push("Bob","Mike");

console.log("В массиве people элементов: ", people.length);
console.log(people); // ["Tom", "Sam", "Bob", "Mike"]
</pre>
<h3>pop()</h3>
<p>Метод <code>pop()</code> удаляет последний элемент из массива:</p>
<pre class="brush:js;">
const people = ["Tom", "Sam", "Bob", "Mike"];

const lastPerson = people.pop(); // извлекаем из массива последний элемент
console.log(lastPerson );	// Mike
console.log(people);	// ["Tom", "Sam", "Bob"]
</pre>
<h3>shift()</h3>
<p>Метод <code>shift()</code> извлекает и удаляет первый элемент из массива:</p>
<pre class="brush:js;">
const people = ["Tom", "Sam", "Bob", "Mike"];

const firstPerson = people.shift(); // извлекаем из массива первый элемент
console.log(firstPerson);	// Tom
console.log(people);	// ["Sam", "Bob", "Mike"]
</pre>
<h3>unshift()</h3>
<p>Метод <span class="b">unshift()</span> добавляет новый элемент в начало массива:</p>
<pre class="brush:js;">
const people = ["Tom", "Sam", "Bob"];

people.unshift("Alice");
console.log(people);	// ["Alice", "Tom", "Sam", "Bob"]
</pre>

<h3>Удаление элемента по индексу. splice()</h3>
<p>Метод <code>splice()</code> удаляет элементы с определенного индекса. Например, удаление элементов с третьего индекса:</p>
<pre class="brush:js;">
const people = ["Tom", "Sam", "Bill", "Alice", "Kate"];
const deleted = people.splice(3);
console.log(deleted);       // [ "Alice", "Kate" ]
console.log(people);         // [ "Tom", "Sam", "Bill" ]
</pre>
<p>Метод splice возвращает удаленные элементы в виде нового массива.</p>
<p>В данном случае удаление идет с начала массива. Если передать отрицательный индекс, то удаление будет производиться с конца массива. 
Например, удалим последний элемент:</p>
<pre class="brush:js;">
const people = ["Tom", "Sam", "Bill", "Alice", "Kate"];
const deleted = people.splice(-1);
console.log(deleted);       // [ "Kate" ]
console.log(people);         // ["Tom", "Sam", "Bill", "Alice"]
</pre>
<p>Дополнительная версия метода позволяет задать количество элементов для удаления. Например, удалим с первого индекса три элемента:</p>
<pre class="brush:js;">
const people = ["Tom", "Sam", "Bill", "Alice", "Kate"];
const deleted = people.splice(1, 3);
console.log(deleted);       // ["Sam", "Bill", "Alice"]
console.log(people);         // ["Tom", "Kate"]
</pre>
<p>Еще одна версия метода splice позволяет вставить вместо удаляемых элементов новые элементы:</p>
<pre class="brush:js;">
const people = ["Tom", "Sam", "Bill", "Alice", "Kate"];
const deleted = people.splice(1, 3, "Ann", "Bob");
console.log(deleted);       // ["Sam", "Bill", "Alice"]
console.log(people);         // ["Tom", "Ann", "Bob", "Kate"]
</pre>
<p>В данном случае удаляем три элемента с 1-го индекса и вместо них вставляем два элемента.</p>
<h3>concat()</h3>
<p>Метод <code>concat()</code> служит для объединения массивов. В качестве результата он возвращает объединенный массив:</p>
<pre class="brush:js;">
const men = ["Tom", "Sam", "Bob"];
const women = ["Alice", "Kate"];
const people = men.concat(women);
console.log(people);         // ["Tom", "Sam", "Bob", "Alice", "Kate"]
</pre>

<h3>join()</h3>
<p>Метод <code>join()</code> объединяет все элементы массива в одну строку, используя определенный разделитель, который передается через параметр:</p>
<pre class="brush:js;">
const people = ["Tom", "Sam", "Bob"];

const peopleToString = people.join("; ");
console.log(peopleToString);         // Tom; Sam; Bob
</pre>
<p>В метод <code>join()</code> передается разделитель между элементами массива. В данном случае в качестве разделителя будет использоваться точка с запятой и пробел ("; ").</p>
<h3>sort()</h3>
<p>Метод <code>sort()</code> сортирует массив по возрастанию:</p>
<pre class="brush:js;">
const people = ["Tom", "Sam", "Bob"];

people.sort();
console.log(people);         // ["Bob", "Sam", "Tom"]
</pre>
<p>Стоит отметить, что по умолчанию метод <code>sort()</code> рассматривает элементы массива как строки и сортирует их в алфавитном порядке. Что может 
привести к неожиданным результатам, например:</p>
<pre class="brush:js;">
const numbers = [200, 15, 5, 35];

numbers.sort();
console.log(numbers);         // [15, 200, 35, 5]
</pre>
<p>Здесь мы хотим отсортировать массив чисел, но результат может нас обескуражить: <code>[15, 200, 35, 5]</code>. В этом случае мы можем настроить метод, передав в него функцию 
сортировки. Логику функции сортировки мыы определяем сами:</p>
<pre class="brush:js;">
const numbers = [200, 15, 5, 35];

numbers.sort( (a, b) =&gt;  a - b);
console.log(numbers);         // [5, 15, 35, 200]
</pre>
<p>Функция сортировки получает два рядом расположенных элемента массива. Она возвращает положительное число, если первый элемент должен находится перед вторым элементом. Если первый элемент должен располагаться после второго, то возвращается отрицательное число. Если элементы равны, возвращается 0.</p>
<h3>reverse()</h3>
<p>Метод <code>reverse()</code> переворачивает массив задом наперед:</p>
<pre class="brush:js;">
const people = ["Tom", "Sam", "Bob"];

people.reverse();
console.log(people);         // ["Bob", "Sam", "Tom"]
</pre>
<h3>Поиск индекса элемента</h3>
<p>Методы <span class="b">indexOf()</span> и <span class="b">lastIndexOf()</span> возвращают индекс первого и последнего включения 
элемента в массиве. Например:</p>
<pre class="brush:js;">
const people = ["Tom", "Sam", "Bob", "Tom", "Alice", "Sam"];

const firstIndex = people.indexOf("Tom");
const lastIndex = people.lastIndexOf("Tom");
const otherIndex = people.indexOf("Mike");
console.log(firstIndex); // 0
console.log(lastIndex);  // 3
console.log(otherIndex); // -1
</pre>
<p>firstIndex имеет значение 0, так как первое включение строки "Tom" в массиве приходится на индекс 0, а последнее на индекс 3.</p>
<p>Если же элемент отсутствует в массиве, то в этом случае методы <code>indexOf()</code> и <code>lastIndexOf()</code> возвращают значение -1.</p>

<h3>Проверка наличия элемента</h3>
<p>Метод <span class="b">includes()</span> проверяет, есть ли в массиве значение, переданное в метод через параметр. Если такое значение есть, то метод 
возвращает <code>true</code>, если значения в массиве нет, то возвращается <code>false</code>. Например:</p>
<pre class="brush:js;">
const people = ["Tom", "Sam", "Bob", "Tom", "Alice", "Sam"];

console.log(people.includes("Tom")); 	// true - Tom есть в массиве
console.log(people.includes("Kate"))	// false - Kate нет в массиве
</pre>
<p>В качестве второго параметра метод <span class="b">includes()</span> принимает индекс, с которого надо начинать поиск:</p>
<pre class="brush:js;">
const people = ["Tom", "Sam", "Bob", "Tom", "Alice", "Sam"];

console.log(people.includes("Bob", 2)); // true
console.log(people.includes("Bob", 4))	// false
</pre>
<p>В данном случае мы видим, что при поиске со 2-го индекса в массиве есть строка "Bob", тогда как начиная с 5-го индекса данная строка отсутствует.</p>
<p>Если если этот параметр не передается, то по умолчанию поиск идет с 0-го индекса.</p>
<p>При передаче отрицательного значения поиск идет с конца</p>
<pre class="brush:js;">
const people = ["Tom", "Sam", "Bob", "Tom", "Alice", "Sam"];

console.log(people.includes("Tom", -2)); // false - 2-й индекс с конца
console.log(people.includes("Tom", -3))	// true	- 3-й индекс с конца
</pre>
<h3>every()</h3>
<p>Метод <span class="b">every()</span> проверяет, все ли элементы соответствуют определенному условию:</p>
<pre class="brush:js;">
const numbers = [ 1, -12, 8, -4, 25, 42 ];
const passed = numbers.every(n =&gt; n &gt; 0);
console.log(passed); // false
</pre>
<p>В метод <code>every()</code> в качестве параметра передается функция, которая представляет условие. Эта функция в качестве параметра 
принимает элемент и возвращает <code>true</code> (если элемент соответствует условию) или <code>false</code> (если не соответствует).</p>
<p>Если хотя бы один элемент не соответствует условию, то метод <code>every()</code> возвращает значение <code>false</code>.</p>
<p>В данном случае условие задается с помощью лямбда-выражения <code>n =&gt; n &gt; 0</code>, которое проверяет, больше ли элемент нуля.</p>
<h3>some()</h3>
<p>Метод <code>some()</code> похож на метод <code>every()</code>, только он проверяет, соответствует ли хотя бы один элемент условию. И в этом случае метод 
<code>some()</code> возвращает <code>true</code>. Если элементов, соответствующих условию, в массиве нет, то возвращается значение 
<code>false</code>:</p>
<pre class="brush:js;">
const numbers = [ 1, -12, 8, -4, 25, 42 ];
const passed = numbers.some(n =&gt; n &gt; 0);
console.log(passed); // true
</pre>
<h3>filter()</h3>
<p>Метод <code>filter()</code>, как <code>some()</code> и <code>every()</code>, принимает функцию условия. 
Но при этом возвращает массив тех элементов, которые соответствуют этому условию:</p>
<pre class="brush:js;">
const numbers = [ 1, -12, 8, -4, 25, 42 ];
const filteredNumbers = numbers.filter(n =&gt; n &gt; 0);
console.log(filteredNumbers); // [1, 8, 25, 42]
</pre>
<h3>forEach() и map()</h3>
<p>Методы <span class="b">forEach()</span> и <span class="b">map()</span> осуществляют перебор элементов и выполняют с ними определенный операции. 
Например, используем метод метода <code>forEach()</code> для вычисления квадратов чисел в массиве:</p>
<pre class="brush:js;">
const numbers = [ 1, 2, 3, 4, 5, 6];

numbers.forEach(n =&gt; 
	console.log("Квадрат числа", n, "равен", n * n )
);
</pre>
<p>Метод <code>forEach()</code> в качестве параметра принимает функцию, которая имеет один ппараметр - текущий перебираемый элемент массива. А в теле функции 
над этим элементом можно выполнить различные операции.</p>
<p>Консольный вывод программы:</p>
<pre class="browser">
Квадрат числа 1 равен 1
Квадрат числа 2 равен 4
Квадрат числа 3 равен 9
Квадрат числа 4 равен 16
Квадрат числа 5 равен 25
Квадрат числа 6 равен 36
</pre>
<p>Метод <span class="b">map()</span> похож на метод <code>forEach</code>, он также в качестве параметра принимает функцию, с помощью 
которой выполняются операции над перебираемыми элементами массива, но при этом метод map() возвращает новый массив с результатами операций 
над элементами массива.</p>
<p>Например, применим метод map к вычислению квадратов чисел массива:</p>
<pre class="brush:js;">
const numbers = [ 1, 2, 3, 4, 5, 6];

const squares = numbers.map(n => n * n);
console.log(squares);	//  [1, 4, 9, 16, 25, 36]
</pre>
<p>Функция, которая передается в метод <code>map()</code> получает текущий перебираемый элемент, выполняет над ним операции и 
возвращает некоторое значение. Это значение затем попадает в результирующий массив <code>squares</code></p>
<h3>Поиск в массиве</h3>
<p>Метод <span class="b">find()</span> возвращает первый элемент массива, который соответствует некоторому условию. В качестве параметр метод <code>find</code> принимает функцию условия:</p>
<pre class="brush:js;">
const numbers = [1, 2, 3, 5, 8, 13, 21, 34];

// получаем первый элемент, который больше 10
let found = numbers.find(n =&gt; n &gt; 10 );
console.log(found);	// 13
</pre>
<p>В данном случае получаем первый элемент, который больше 10. Если элемент, соответствующий условию, не найден, то возвращается <code>undefined</code>.</p>
<p>Метод <span class="b">findIndex</span> также принимает функцию условия, только возвращает индекс первого элемента массива, который соответствует этому условию:</p>
<pre class="brush:js;">
const numbers = [1, 2, 3, 5, 8, 13, 21, 34];

// получаем индекс первого элемента, который больше 10
let foundIndex = numbers.findIndex(n =&gt; n &gt; 10 );
console.log(foundIndex);	// 5
</pre>
<p>Если элемент не найден, то возвращается число -1.</p>
<h3>Метод flat и преобразование массива</h3>
<p>Метод <span class="b">flat()</span> упрощает массив с учетом указанной вложенности элементов:</p>
<pre class="brush:js;">
const people = ["Tom", "Bob", ["Alice", "Kate", ["Sam", "Ann"]]];
const flattenPeople = people.flat();
console.log(flattenPeople); // ["Tom", "Bob", "Alice", "Kate", ["Sam", "Ann"]]
</pre>
<p>То есть метод <code>flat()</code> фактически из вложенных массивов переводит элементы во внешний массив самого верхнего уровня. Однако мы видим, 
что элементы массива второго уровня вложенности перешли в массив первого уровня вложенности, но тем не менее по-прежнему находятся во вложенном 
массиве. Дело в том, что метод <code>flat()</code> по умолчанию применяется только к вложенным массивам первого уровня вложенности. Но мы можем передать 
в метод уровень вложености:</p>
<pre class="brush:js;">
const people = ["Tom", "Bob", ["Alice", "Kate", ["Sam", "Ann"]]];
const flattenPeople = people.flat(2);
console.log(flattenPeople); // ["Tom", "Bob", "Alice", "Kate", "Sam", "Ann"]
</pre>
<p>Если массив содержит вложенные массивы гораздо более глубоких уровней вложенности, или мы даже не знаем, какие уровни вложенности есть в массиве, но 
мы хотим, чтобы все элементы были преобразованы в один массив, то можно использовать значение <code>Infinity</code>:</p>
<pre class="brush:js;">
const people = ["Tom", "Bob", ["Alice", "Kate", ["Sam", "Ann"]]];
const flattenPeople = people.flat(Infinity);
console.log(flattenPeople); // ["Tom", "Bob", "Alice", "Kate", "Sam", "Ann"]
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


<div class="nav"><p><a href="./5.6.php">Назад</a><a href="./">Содержание</a><a href="./5.8.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в JavaScript</span>
		<ul>
			<li><span class="file"><a href="1.1.php">Что такое JavaScript</a></span></li>
			<li><span class="file"><a href="1.2.php">Первая программа на JavaScript</a></span></li>
			<li><span class="file"><a href="1.3.php">Выполнение кода javascript</a></span></li>
			<li><span class="file"><a href="1.4.php">Подключение внешнего файла JavaScript</a></span></li>
			<li><span class="file"><a href="1.5.php">Консоль браузера и console.log</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы javascript</span>
		<ul>
			<li><span class="file"><a href="2.1.php">Переменные и константы</a></span></li>
			<li><span class="file"><a href="2.2.php">Типы данных</a></span></li>
			<li><span class="file"><a href="2.3.php">Операции</a></span></li>
			<li><span class="file"><a href="2.8.php">Условные операторы ?: и ??</a></span></li>
			<li><span class="file"><a href="2.4.php">Преобразование данных</a></span></li>
			<li><span class="file"><a href="2.5.php">Введение в массивы</a></span></li>
			<li><span class="file"><a href="2.6.php">Условные конструкции</a></span></li>
			<li><span class="file"><a href="2.7.php">Циклы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Функциональное программирование</span>
		<ul>
			<li><span class="file"><a href="3.1.php">Функции</a></span></li>
			<li><span class="file"><a href="3.10.php">Параметры функции</a></span></li>
			<li><span class="file"><a href="3.11.php">Результат функции</a></span></li>
			<li><span class="file"><a href="3.2.php">Область видимости переменных</a></span></li>
			<li><span class="file"><a href="3.3.php">Замыкания и функции IIFE</a></span></li>
			<li><span class="file"><a href="3.9.php">Паттерн Модуль</a></span></li>
			<li><span class="file"><a href="3.4.php">Рекурсивные функции</a></span></li>
			<li><span class="file"><a href="3.5.php">Переопределение функций</a></span></li>
			<li><span class="file"><a href="3.6.php">Hoisting</a></span></li>
			<li><span class="file"><a href="3.7.php">Передача параметров по значению и по ссылке</a></span></li>
			<li><span class="file"><a href="3.8.php">Стрелочные функции</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="4.1.php">Объекты</a></span></li>
			<li><span class="file"><a href="4.2.php">Вложенные объекты и массивы в объектах</a></span></li>
			<li><span class="file"><a href="4.13.php">Копирование и сравнение объектов</a></span></li>
			<li><span class="file"><a href="4.3.php">Проверка наличия и перебор методов и свойств</a></span></li>
			<li><span class="file"><a href="4.4.php">Объекты в функциях</a></span></li>
			<li><span class="file"><a href="4.5.php">Конструкторы объектов</a></span></li>
			<li><span class="file"><a href="4.6.php">Расширение объектов. Prototype</a></span></li>
			<li><span class="file"><a href="4.7.php">Инкапсуляция</a></span></li>
			<li><span class="file"><a href="4.8.php">Функция как объект. Методы call и apply</a></span></li>
			<li><span class="file"><a href="4.9.php">Наследование</a></span></li>
			<li><span class="file"><a href="4.10.php">Ключевое слово this</a></span></li>
			<li><span class="file"><a href="4.11.php">Деструктуризация</a></span></li>
			<li><span class="file"><a href="4.18.php">Оператор ?.</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. ООП. Классы.</span>
		<ul>
			<li><span class="file"><a href="4.12.php">Классы</a></span></li>
			<li><span class="file"><a href="4.16.php">Приватные поля и методы</a></span></li>
			<li><span class="file"><a href="4.17.php">Статические поля и методы</a></span></li>
			<li><span class="file"><a href="4.14.php">Свойства и методы доступа</a></span></li>
			<li><span class="file"><a href="4.15.php">Наследование</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Массивы</span>
		<ul>
			<li><span class="file"><a href="5.3.php">Создание массива и объект Array</a></span></li>
			<li><span class="file"><a href="5.6.php">Массивы и spread-оператор</a></span></li>
			<li><span class="file"><a href="5.7.php">Операции с массивами</a></span></li>
			<li><span class="file"><a href="5.8.php">Наследование массивов</a></span></li>
		</ul>
				</li>
				<li class="closed"><span class="folder">Глава 7. Строки</span>
					<ul>
			<li><span class="file"><a href="6.1.php">Строки и объект String</a></span></li>
			<li><span class="file"><a href="6.5.php">Шаблоны строк</a></span></li>
			<li><span class="file"><a href="6.2.php">Объект RegExp. Регулярные выражения</a></span></li>
			<li><span class="file"><a href="6.3.php">Регулярные выражения в методах String</a></span></li>
			<li><span class="file"><a href="6.4.php">Синтаксис регулярных выражений</a></span></li>
			<li><span class="file"><a href="6.6.php">Группы в регулярных выражениях</a></span></li>
					</ul>
				</li>
				
	<li class="closed"><span class="folder">Глава 8. Встроенные объекты</span>
		<ul>
			<li><span class="file"><a href="5.1.php">Объект Date. Работа с датами</a></span></li>
			<li><span class="file"><a href="5.2.php">Объект Math. Математические операции</a></span></li>
			<li><span class="file"><a href="5.4.php">Объект Number</a></span></li>
			<li><span class="file"><a href="5.5.php">Символы</a></span></li>
			<li><span class="file"><a href="5.9.php">Proxy</a></span></li>
		</ul>
				</li>
				
	<li class="closed"><span class="folder">Глава 9. Обработка ошибок</span>
		<ul>
			<li><span class="file"><a href="16.1.php">Конструкция try..catch..finally</a></span></li>
			<li><span class="file"><a href="16.2.php">Генерация ошибок и оператор throw</a></span></li>
			<li><span class="file"><a href="16.3.php">Типы ошибок</a></span></li>
		</ul>
				</li>
		<li class="closed"><span class="folder">Глава 10. Работа с браузером и BOM</span>
			<ul>
			<li><span class="file"><a href="7.1.php">Browser Object Model и объект window</a></span></li>
			<li><span class="file"><a href="7.2.php">Управление окнами</a></span></li>
			<li><span class="file"><a href="7.3.php">История браузера. Объект history</a></span></li>
			<li><span class="file"><a href="7.4.php">Объект location</a></span></li>
			<li><span class="file"><a href="7.5.php">Объект navigator</a></span></li>
			<li><span class="file"><a href="7.6.php">Таймеры</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 11. Работа с DOM</span>
					<ul>
			<li><span class="file"><a href="8.1.php">Введение в DOM</a></span></li>
			<li><span class="file"><a href="8.2.php">Объект document. Поиск элементов</a></span></li>
			<li><span class="file"><a href="8.3.php">Свойства объекта document</a></span></li>
			<li><span class="file"><a href="8.4.php">Объект Node. Навигация по DOM</a></span></li>
			<li><span class="file"><a href="8.5.php">Создание, добавление и удаление элементов веб-станицы</a></span></li>
			<li><span class="file"><a href="8.6.php">Объект Element. Управление элементами</a></span></li>
			<li><span class="file"><a href="8.7.php">Изменение стиля элементов</a></span></li>
			<li><span class="file"><a href="8.8.php">Создание своего элемента HTML</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 12. События</span>
					<ul>
			<li><span class="file"><a href="9.1.php">Введение в обработку событий</a></span></li>
			<li><span class="file"><a href="9.2.php">Обработчики событий</a></span></li>
			<li><span class="file"><a href="9.3.php">Объект Event</a></span></li>
			<li><span class="file"><a href="9.4.php">Распространение событий</a></span></li>
			<li><span class="file"><a href="9.5.php">События мыши</a></span></li>
			<li><span class="file"><a href="9.6.php">События клавиатуры</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 13. Работа с формами</span>
					<ul>
			<li><span class="file"><a href="10.1.php">Формы и их элементы</a></span></li>
			<li><span class="file"><a href="10.2.php">Кнопки</a></span></li>
			<li><span class="file"><a href="10.3.php">Текстовые поля</a></span></li>
			<li><span class="file"><a href="10.4.php">Флажки и переключатели</a></span></li>
			<li><span class="file"><a href="10.5.php">Список select</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 14. JSON</span>
					<ul>
			<li><span class="file"><a href="11.1.php">Введение в JSON</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 15. Хранение данных</span>
					<ul>
			<li><span class="file"><a href="12.1.php">Куки</a></span></li>
			<li><span class="file"><a href="12.2.php">Web Storage</a></span></li>
					</ul>
	</li>
	<li class="closed"><span class="folder">Глава 16. Коллекции и итераторы</span>
		<ul>
			<li><span class="file"><a href="14.1.php">Итераторы</a></span></li>
			<li><span class="file"><a href="14.2.php">Генераторы</a></span></li>
			<li><span class="file"><a href="14.3.php">Множества Set</a></span></li>
			<li><span class="file"><a href="14.4.php">Map</a></span></li>
			<li><span class="file"><a href="14.5.php">WeakSet</a></span></li>
			<li><span class="file"><a href="14.6.php">WeakMap</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 17. Promise, async и await</span>
		<ul>
			<li><span class="file"><a href="17.1.php">Введение в промисы</a></span></li>
			<li><span class="file"><a href="17.2.php">Получение результата операции в Promise</a></span></li>
			<li><span class="file"><a href="17.3.php">Обработка ошибок в Promise</a></span></li>
			<li><span class="file"><a href="17.4.php">Создание цепочек промисов</a></span></li>
			<li><span class="file"><a href="17.5.php">Функции Promise.all, Promise.allSettled, Promise.any и Promise.race</a></span></li>
			<li><span class="file"><a href="17.6.php">Async и await</a></span></li>
			<li><span class="file"><a href="17.7.php">Асинхронные итераторы</a></span></li>
			<li><span class="file"><a href="17.8.php">Асинхронные генераторы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 18. Ajax</span>
		<ul>
			<li><span class="file"><a href="13.1.php">Объект XMLHttpRequest</a></span></li>
			<li><span class="file"><a href="13.2.php">Отправка данных</a></span></li>
			<li><span class="file"><a href="13.3.php">Promise в Ajax-запросах</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 19. Локализация</span>
		<ul>
			<li><span class="file"><a href="18.1.php">Локализация списков и Intl.ListFormat</a></span></li>
			<li><span class="file"><a href="18.2.php">Локализация дат и времени</a></span></li>
			<li><span class="file"><a href="18.3.php">Локализация названий и Intl.DisplayNames</a></span></li>
			<li><span class="file"><a href="18.4.php">Форматирование чисел и Intl.NumberFormat</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 20. Модули</span>
		<ul>
			<li><span class="file"><a href="19.1.php">Введение в модули</a></span></li>
			<li><span class="file"><a href="19.2.php">Импорт модуля</a></span></li>
			<li><span class="file"><a href="19.3.php">Экспорт и импорт компонентов модулей</a></span></li>
			<li><span class="file"><a href="19.4.php">Экспорт и импорт по умолчанию</a></span></li>
			<li><span class="file"><a href="19.5.php">Использование псевдонимов при экспорте и импорте</a></span></li>
			<li><span class="file"><a href="19.6.php">Динамическая загрузка модулей</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 21. Fetch API</span>
		<ul>
			<li><span class="file"><a href="20.1.php">Функция fetch</a></span></li>
			<li><span class="file"><a href="20.2.php">Объект Response и его свойства</a></span></li>
			<li><span class="file"><a href="20.3.php">Получение данных из ответа</a></span></li>
			<li><span class="file"><a href="20.4.php">Настройка параметров запроса. Отправка данных</a></span></li>
			<li><span class="file"><a href="20.5.php">Создание клиента для REST API</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 22. Прочие статьи</span>
		<ul>
			<li><span class="file"><a href="15.1.php">JavaScript в CSS</a></span></li>
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
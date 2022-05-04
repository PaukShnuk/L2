<!DOCTYPE html>
<html >
<head>
<title>Swift | Массивы</title>
<meta charset="utf-8" />
<meta name="description" content="Массивы в языке программирования Swift, определение и работа с массивами">
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
<h2>Массивы</h2><div class="date">Последнее обновление: 05.01.2018</div>

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

<p>Массив представляет упорядоченную коллекцию элементов одного типа, к которым можно обратиться по индексу - номеру элемента в массиве. 
Индекс представляет число - объект типа <code>Int</code> и начинается с нуля. По сути массив представляет собой обычную переменную или константу, которая хранит несколько объектов наподобие кортежа.</p>
<h3>Объявление массива</h3>
<p>Объявление массива имеет следующие формы записи:</p>
<pre class="brush:swift;">
// Полная форма
var имяМассива: Array&lt;Тип&gt;
// Краткая форма
var имяМассива: [Тип]
</pre>
<p>Например:</p>
<pre class="brush:swift;">
var numbers: [Int]
</pre>
<p>Здесь объявлен массив numbers, который хранит объекты типа <code>Int</code>.</p>
<p>Но просто объявить массив недостаточно. Его, как и любую другую переменную, надо инициализировать перед использованием. То есть определить для него начальное 
значение. Все значения, которые входят в массив, перечисляются в квадратных скобках: <code>[элемент1, элемент2, элемент3, ...]</code>. Например:</p>
<pre class="brush:swift;">
var numbers: [Int] = [1, 2, 3, 4, 5]
var numbers2: Array&lt;Int&gt; = [1, 2, 3, 4, 5]
print(numbers)
</pre>
<p>Здесь массивы numbers и numbers2 содержит по 5 элементов. Мы также можем при объявлении не указывать тип массива, в этом случае система сама выведет тип исходя из входящих в него элементов:</p>
<pre class="brush:swift;">
var numbers = [1, 2, 3, 4, 5]
</pre>
<p>Мы также можем определить пустой массив:</p>
<pre class="brush:swift;">
var numbers = [Int]()
// или так
var numbers2 : [Int] = []
print("В массиве numbers \(numbers.count) элементов") 	// В массиве numbers 0 элементов
</pre>
<p>В таком массиве будет 0 элементов. С помощью свойства <span class="b">count</span> можно получить количество элементов в массиве.</p>

<h3>Доступ к элементам массива</h3>
<p>Каждый элемент в массиве имеет определенный индекс, по которому мы можем получить или изменить элемент:</p>
<pre class="brush:swift;">
var numbers = [11, 12, 13, 14, 15]
print(numbers[0])	// 11
numbers[0] = 21
print(numbers[0])	// 21
</pre>
<p>Для обращения к элементу массива после названия массива в квадратных скобках используется индекс элемента: <code>numbers[0]</code></p>
<p>В данном случае у нас пять элементов в массиве, индексация в массивах начинается с нуля, поэтому первый элемент всегда имеет индекс 0, а последний элемент 
в данном случае будет иметь индекс 4. Если же мы попытаемся обратиться к элементу с большим индексом, например:</p>
<pre class="brush:swift;">
print(numbers[5])	// ошибка
</pre>
<p>То мы получим ошибку.</p>
<p>Если нам надо изменить несколько элементов подряд, то мы можем использовать операцию последовательности для записи индексов:</p>
<pre class="brush:swift;">
var numbers = [5, 6, 7, 8, 3]
numbers[1...3] = [105, 106, 103]
print(numbers)	// 5, 105, 106, 103, 3
</pre>
<p>В данном случае выражение <code>1...3</code> указывает на набор индексов от 1 до 3. И таким образом, элементам с этими индексами 
мы можем присвоить значения.</p>
<h3>Размер массива</h3>
<p>С помощью свойства <span class="b">count</span> можно получить число элементов массива:</p>
<pre class="brush:swift;">
var numbers: [Int] = [1, 2, 3, 4, 5, 6, 7, 8]
print("В массиве numbers \(numbers.count) элементов") 	// В массиве numbers 8 элементов
</pre>
<p>В дополнение к нему свойство <span class="b">isEmpty</span> позволяет узнать, пуст ли массив. Если он пуст, то возвращается значение <code>true</code>:</p>
<pre class="brush:swift;">
var numbers: [Int] = [1, 4, 8]
if numbers.isEmpty {
    print("массив пуст")
} else {
    print("в массиве есть элементы")
}
</pre>
<h3>Перебор массива</h3>
<p>С помощью цикла for можно перебрать элементы массива:</p>
<pre class="brush:swift;">
var numbers: [Int] = [1, 2, 3, 4, 5, 6, 7, 8]

for i in numbers {
    print(i) // 1, 2, 3, 4, 5, 6, 7, 8,
}
</pre>
<p>Перебор массива через индексы:</p>
<pre class="brush:swift;">
var numbers: [Int] = [1, 2, 3, 4, 5, 6, 7, 8]

for i in 0 ..&lt; numbers.count {
    print(numbers[i]) // 1, 2, 3, 4, 5, 6, 7, 8,
}
</pre>
<p>Вместо применения цикла также можно использовать метод <span class="b">forEach()</span>, которые перебирает все элементы. В качестве 
параметра этот метод принимает функцию, которая производит действия над текущим перебираемым элементом:</p>
<pre class="brush:swift;">
var numbers: [Int] = [1, 2, 3, 4, 5, 6, 7, 8]
numbers.forEach({print($0)})
</pre>
<p>В данном случае передается анонимная функция, которая также с помощью функции print выводит значение элемента.</p>
<p>С помощью метода <span class="b">enumerated()</span> можно одновременно получить индекс и значение элемента:</p>
<pre class="brush:swift;">
var names: [String] = ["Tom", "Alice", "Kate"]

names.enumerated().forEach({print("\($0) - \($1)")})

for (index, value) in names.enumerated() {
    print("\(index) - \(value)")
}
</pre>
<h3>Создание массива из последовательности</h3>
<p>Специальная форма инициализатора в качестве параметра принимает последовательность, из которой создается массив:</p>
<pre class="brush:swift;">
var numbers = Array (1...5)     // [1, 2, 3, 4, 5]
var numbers2 = [Int] (3..&lt;7)    // [3, 4, 5, 6]

print(numbers)   // [1, 2, 3, 4, 5]
print(numbers2)   // [3, 4, 5, 6]
</pre>
<p>Еще одна форма инициализатора позволяет инициализировать массив определенным числом элементов одного значения:<p>
<pre class="brush:swift;">
var numbers = [Int] (repeating: 5, count: 3)
// или так
var numbers2 = Array (repeating: 5, count: 3)
// эквивалентно массиву var numbers: [Int] = [5, 5, 5]
print(numbers)   // [5, 5, 5]
</pre>
<p>Однако стоит учитывать, что если подобным образом создается массив из объектов классов - ссылочных типов, то все элементы 
массива будут хранить ссылку на один и тот же элемент в памяти:</p>
<pre class="brush:swift;">
class Person{
    var name: String
    init(name: String){
        self.name = name
    }
}
let tom = Person(name: "Tom")

var people = Array (repeating: tom, count: 3)

people[0].name = "Bob"

for person in people{
    print(person.name)
}

// Bob
// Bob
// Bob
</pre>
<h3>Сравнение массивов</h3>
<p>Два массива считаются равными, если они содержат одинаковые элементы на соответствующих позициях:</p>
<pre class="brush:swift;">
var numbers: [Int] = [1, 2, 3, 4, 5]
let nums = [1, 2, 3, 4, 5]

if numbers == nums{
    print("массивы равны")
}
else {
    print("массивы не равны")
}
</pre>
<p>В данном случае массивы numbers и nums имеют одинаковое количество элементов, и все элементы на соответствующих позициях равны, 
поэтому оба массива равны.</p>
<h3>Копирование массива</h3>
<p>Массив является значимым типом, поэтому при копировании одного массива в другой второй массив получает копию 
первого:</p>
<pre class="brush:swift;">
var numbers: [Int] = [1, 2, 3, 4, 5]
var nums: [Int] = numbers

nums[0] = 78

print(numbers)      // [1, 2, 3, 4, 5]
print(nums)         // [78, 2, 3, 4, 5]
</pre>
<p>С помощью последовательности можно задать набор индексов, по которым элементы копируются в другой массив:</p>
<pre class="brush:swift;">
var numbers: [Int] = [1, 2, 3, 4, 5]
var nums = numbers[1...3]

print(nums[1])      // 2
print(nums)         // [2, 3, 4]
</pre>
<p>В данном случае в массив nums копируются элементы из numbers с 1 по 3 индексы. При этом первым индексом в массиве nums будет не 0, 
а 1, так как именно с этого индекса производится копирование из numbers.</p>
<h3>Добавление в массив</h3>
<p>Для добавления элемента в массив применяется метод <span class="b">append()</span>:</p>
<pre class="brush:swift;">
var numbers  = [8, 11, 13, 14]
numbers.append(20)
print(numbers)	// 8, 11, 13, 14, 20
</pre>
<p>Другой метод <span class="b">insert()</span> управляет вставкой элемента в определенное место массива:</p>
<pre class="brush:swift;">
var numbers = [8, 11, 13, 14]
numbers.insert(10, at: 3)	// вставка числа 10 на 3-й индекс
print(numbers)	// 8, 11, 13, 10, 14
</pre>
<h3>Удаление из массива</h3>
<p>Ряд операций позволяют удалять элемент:</p>
<ul>
<li><p><span class="b">remove(at: index)</span>: удаляет элемент по определенному индексу</p></li>
<li><p><span class="b">removeFirst()</span>: удаляет первый элемент</p></li>
<li><p><span class="b">removeLast()</span>: удаляет последний элемент</p></li>
<li><p><span class="b">dropFirst()</span>: удаляет первый элемент</p></li>
<li><p><span class="b">dropLast()</span>: удаляет последний элемент</p></li>
<li><p><span class="b">removeAll()</span>: удаляет все элементы массива</p></li>
</ul>
<pre class="brush:swift;">
var numbers = [8, 11, 13, 14]
numbers.remove(at: 2)	// удаляем 3-й элемент
print(numbers)	// 8, 11, 14
</pre>
<p>Разница между методами <code>removeFirst/removeLast</code> и <code>dropFirst/dropLast</code> заключается в том, что первые возвращают удаленный элемент, 
а вторые - модифицированный массив:</p>
<pre class="brush:swift;">
var numbers = [8, 11, 13, 14]
var n = numbers.removeFirst() // 8
var subNumbers = numbers.dropFirst() 
print(subNumbers)   // [13, 14]
</pre>
<p>И если из массива необходимо удалить все элементы, применяется метод <code>removeAll()</code>:</p>
<pre class="brush:swift;">
var numbers = [8, 11, 13, 14]
numbers.removeAll()
print(numbers)   // []
</pre>
<h3>Сортировка массива</h3>
<p>Для сортировки массива применяется метод <span class="b">sort</pre>:</p>
<pre class="brush:swift;">
var numbers: [Int] = [10, 4, 12, 1, 3]
numbers.sort()
print(numbers)  // [1, 3, 4, 10, 12]
</pre>
<p>Если метод sort сортирует оригинальный массив, то метод <span class="b">sorted()</span> возвращает новый 
отсортированный массив, никак не изменяя старый:</p>
<pre class="brush:swift;">
var numbers: [Int] = [10, 4, 12, 1, 3]

var nums = numbers.sorted()
print(nums)     // [1, 3, 4, 10, 12]
</pre>
<p>Обе функции принимают параметр <code>by</code>, который задает принцип сортировки. Он представляет функцию, 
которая принимает два параметра. Оба параметра представляют тип элементов массива. На выходе функция возвращает 
объект Bool. Если это значение равно true, то первое значение ставится до второго, если false - то после.</p>
<pre class="brush:swift;">
var numbers: [Int] = [10, 4, 12, 1, 3]
numbers.sort(by: {$0 &gt; $1})
print(numbers)  // [12, 10, 4, 3, 1]

var nums = numbers.sorted(by: &lt;)
print(nums)     // [1, 3, 4, 10, 12]
</pre>
<p>Выражение <code>{$0 &gt; $1}</code> представляет анонимную функцию, которая возвращает true, если значение первого параметра 
меньше второго, то есть в данном случае сортировка в обратном порядке. Мы можем задать более сложную логику, 
но в данном случае мы просто сравниваем два значения, поэтому мы можем упрастить данный вызов: <code>numbers.sort(by: &gt;)</code> и Swift 
опять же будет применять операцию &gt; к обоим параметрам.</p>
<h3>Объединение массивов</h3>
<p>С помощью операции сложения можно объединить два однотипных массива:</p>
<pre class="brush:swift;">
var numbers1 = [5, 6, 7]
var numbers2 = [1, 2, 3]
var numbers3 = numbers1 + numbers2
print(numbers3)	// 5, 6, 7, 1, 2, 3
</pre>
<h3>Фильтрация массивов</h3>
<p>Для фильтрации массива применяется метод <span class="b">filter()</span>, который возвращает отфильтрованный массив. 
В качестве параметра метод принимает функцию - если перебирает все эелементы и возвращает значение типа Bool. Если это значение - true, 
то элемент попадает в отфильтрованный массив:</p>
<pre class="brush:swift;">
var numbers: [Int] = [1, 2, 3, 4, 5, 6, 7, 8]

var filteredNums = numbers.filter({$0 % 2==0})
print(filteredNums) // [2, 4, 6, 8]
</pre>
<p>В данном случае метод filter принимает анонимную функцию, которая возвращает результат условия <code>$0 % 2==0</code>, 
то есть если число делится на 2 без остатка (четное), то оно попадает в отфильтрованный массив.</p>
<p>Еще один способ фильтрации представляет метод <span class="b">prefix()</span>. Он также возвращает отфильтрованный массив, 
при этом он перебирает подряд все элементы, пока условие возвращает true. Условие задается с помощью параметра 
while, который представляет функцию, возвращающую значение Bool:</p>
<pre class="brush:swift;">
var numbers: [Int] = [1, 2, 3, 4, 5, 6, 7, 8]

var filteredNums = numbers.prefix(while: {$0 &lt; 5})
print(filteredNums) // [1, 2, 3, 4]
</pre>
<p>В данном случае пока истинно условие <code>$0 &lt; 5</code>, то есть пока элементы массива меньше 5, они будут попадать в отфильтрованный массив.</p>
<p>Противоположным образом работает метод <span class="b">drop()</span> - он, наоборт, удаляет все элементы до того, пока они не станут соответствовать 
условию:</p>
<pre class="brush:swift;">
var numbers: [Int] = [1, 2, 5, 3, 4, 5, 6, 7, 8]

var filteredNums = numbers.drop(while: {$0 &lt; 5})
print(filteredNums) // [5, 3, 4, 5, 6, 7, 8]
</pre>
<p>Причем удаляются именно первые элементы, пока не найдется элемент, который удовлетворяет условию.</p>
<h3>Преобразование массива</h3>
 <p>Метод <span class="b">map()</span> проходит по всем элементам массива и преобразует их с помощью функции, которая передается в качестве параметра и которая возвращает 
 преобразованный элемент. Преобразованные элементы помещаются в новый массив, который возвращается методом map:</p>
 <pre class="brush:swift;">
 var numbers: [Int] = [1, 2, 5, 3, 4, 5, 6, 7, 8]

var mapedNums = numbers.map({$0 * $0})
print(mapedNums) // [1, 4, 25, 9, 16, 25, 36, 49, 64]
 </pre>
<p>В данном случае метод map принимает анонимную функцию, которая возвращает квадрат числа. В итоге созданный массив будет 
содержать квадраты чисел из оригинального массива.</p>
<h3>Многомерные массивы</h3>
<p>Выше мы использовали простые массивы, которые можно представить в виду строки или расположить в ряд:</p>
<pre class="brush:swift;">
var numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9]
</pre>
<p>Но мы можем создавать более сложные массивы, которые в качестве элементов могут включать в себя другие массивы:</p>
<pre class="brush:swift;">
var table = [[1,2,3], [4,5,6], [7,8,9]]

// получаем вторую строку
var row2 = table[1]  // [4,5,6]

// получаем первый элемент второй строки
var cell1 = row2[0]  // 4

// получаем второй элемент первой строки
var cell2 = table[0][1] // 2
</pre>
<p>Внутри массива у нас три подмассива. Фактически данный массив можно представить как таблицу, в которой 3 строки. Выражение <code>table[1]</code> позволяет 
получить второй элемент - второй подмассив. А выражение <code>row2[0]</code> возвращает первый элемент этого подмассива.</p>
<p>Либо мы можем использовать набор квадратных скобок для доступа к элементам внутри подмассивов: <code>table[0][1]</code></p>
<p>Подобным образом можно изменять элементы массива</p>
<pre class="brush:swift;">
// изменим вторую строку
table[1] = [16, 25, 36]

// изменим второй элемент первой строки
table[0][1] = -12
</pre>
<p>При переборе стоит учитывать, что поскольку каждый элемент многомерного массива сам является массивом, то мы можем 
организовать вложенные циклы для их перебора:</p>
<pre class="brush:swift;">
// перебор по строкам
for row in table{
    print(row)
}

// перебор таблицы по строкам и столбцам
for row in table{
    for cell in row{
        print(cell)
    }
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


<div class="nav"><p><a href="2.22.php">Назад</a><a href="./">Содержание</a><a href="2.11.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Swift</span>
		<ul>
			<li><span class="file"><a href="1.1.php">Язык Swift и платформы iOS и Mac OS</a></span></li>
			<li><span class="file"><a href="1.2.php">Начало работы с Swift и XCode</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы Swift</span>
		<ul>
			<li><span class="file"><a href="2.1.php">Переменные и константы. Типы данных</a></span></li>
			<li><span class="file"><a href="2.2.php">Числовые типы. Операции с числами</a></span></li>
			<li><span class="file"><a href="2.19.php">Преобразование числовых данных</a></span></li>
			<li><span class="file"><a href="2.20.php">Поразрядные операции с числами</a></span></li>
			<li><span class="file"><a href="2.3.php">Строки. Типы Character и String</a></span></li>
			<li><span class="file"><a href="2.4.php">Тип Bool. Условные выражения</a></span></li>
			<li><span class="file"><a href="2.5.php">Кортежи</a></span></li>
			<li><span class="file"><a href="2.6.php">Условная конструкция If. Тернарный оператор</a></span></li>
			<li><span class="file"><a href="2.7.php">Конструкция switch</a></span></li>
			<li><span class="file"><a href="2.8.php">nil и опциональные типы</a></span></li>
			<li><span class="file"><a href="2.10.php">Циклы</a></span></li>
			<li><span class="file"><a href="2.13.php">Функции</a></span></li>
			<li><span class="file"><a href="2.14.php">Возвращение функцией значения</a></span></li>
			<li><span class="file"><a href="2.15.php">Дополнительно о параметрах функций</a></span></li>
			<li><span class="file"><a href="2.16.php">Функция как значение. Тип функции</a></span></li>
			<li><span class="file"><a href="2.17.php">Вложенные и рекурсивные функции</a></span></li>
			<li><span class="file"><a href="2.21.php">Перегрузка функций</a></span></li>
			<li><span class="file"><a href="2.18.php">Замыкания</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="3.1.php">Классы и объекты</a></span></li>
			<li><span class="file"><a href="3.2.php">Инициализаторы</a></span></li>
			<li><span class="file"><a href="3.3.php">Свойства</a></span></li>
			<li><span class="file"><a href="3.4.php">Статические свойства и методы</a></span></li>
			<li><span class="file"><a href="3.7.php">Структуры</a></span></li>
			<li><span class="file"><a href="3.8.php">Перечисления</a></span></li>
			<li><span class="file"><a href="3.9.php">Значимые и ссылочные типы</a></span></li>
			<li><span class="file"><a href="3.6.php">Наследование</a></span></li>
			<li><span class="file"><a href="3.11.php">Свойства и методы класса</a></span></li>
			<li><span class="file"><a href="3.12.php">Вложенные типы</a></span></li>
			<li><span class="file"><a href="3.13.php">Полиморфизм</a></span></li>
			<li><span class="file"><a href="3.14.php">Преобразование типов</a></span></li>
			<li><span class="file"><a href="3.10.php">Обобщения</a></span></li>
			</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Коллекции</span>
		<ul>
			<li><span class="file"><a href="2.22.php">Последовательности</a></span></li>
			<li><span class="file"><a href="2.9.php">Массивы</a></span></li>
			<li><span class="file"><a href="2.11.php">Множества</a></span></li>
			<li><span class="file"><a href="2.12.php">Словари</a></span></li>
			<li><span class="file"><a href="3.5.php">Сабскрипты</a></span></li>
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
	
	$("li:contains('Глава 4.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 4.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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
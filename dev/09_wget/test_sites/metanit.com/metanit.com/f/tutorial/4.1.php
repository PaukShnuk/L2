<!DOCTYPE html>
<html >
<head>
<title>F# | Последовательность</title>
<meta charset="utf-8" />
<meta name="description" content="Оператор let. Привязка значений в языке программирования F#. определение переменных, оператор &lt;-, изменение значений переменной, mutable">
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
<h1>Коллекции</h1><h2>Последовательность</h2><div class="date">Последнее обновление: 29.07.2021</div>

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

<p>Для хранения набора данных в языке F# предназначены <span class="b">коллекции</span>. Стоит отметить, что 
типы коллекций в F# отличаются от типов коллекций, которые имеются в платформе .NET, например, которые располагаются в пространстве имен 
<code>System.Collections.Generic</code>. В частности, коллекции неизменяемы. То есть при изменении элементов коллекции в реальности создается новая коллекция с измененными элементами. 
Единственным исключением массивы, которые могут иметь измененяемые элементы.</p>
<p>В F# есть следующие коллекции: <span class="b">List</span> (список), <span class="b">Array</span> (массив), <span class="b">seq</span> (последовательность), <span class="b">Map</span> (словарь), 
<span class="b">Set</span> (набор данных, основанный на бинарных деревьях)</p>

<p>Тип <span class="b">seq</span> или <span class="b">последовательность</span> представляет набор элементов оного типа. Последовательности удобно применять, когда 
 необходимо выполнить операции над отдельной частью элементов каких-то больших коллекций. А последовательность предоставляет удобный способ извлечь 
часть коллекции и тем самым обеспечить большую производительность.</p>
<p>Для определения последовательности применяется оператор <span class="b">seq</span>:</p>
<pre class="brush:f#;">seq { элементы_последовательности}</pre>
<p>После оператора <code>seq</code> в фигурных скобках идет определение элементов последовательности. Пример определения последовательности:</p>
<pre class="brush:f#;">let numbers = seq {1; 2; 3; 4; 5}</pre>
<p>Здесь последовательность numbers содержит числа 1, 2, 3, 4, 5</p>
<h4>Динамическая генерация последовательности</h4>
<p>Для определения элементов последовательности могут применяться различные способы. Одним из наиболее используемых является применение оператора <span class="b">..</span>, 
который генерирует последовательность, начиная с определенного значения и заканчивая другим значением:</p>
<pre class="brush:f#;">seq { начало..конец }</pre>
<p>Например, определим последовательность чисел от 1 до 6:</p>
<pre class="brush:f#;">let numbers = seq {1..6}        // 1 2 3 4 5 6</pre>
<p>Посмотрим, что внутри последовательности. И для этого мы можем перебрать ее с помощью цикла <span class="b">for..in</span>:</p>
<pre class="brush:f#;">
let numbers = seq {1..6}        

for n in numbers do printf $"{n} "  // 1 2 3 4 5 6
</pre>
<p>При подобном определении конечное значение должно быть больше начального.</p>
<h4>Шаг последовательности</h4>
<p>В примере выше создается последовательность чисел каждый последующий элемент которой увеличивается на единицу. Но мы также можно задать любое приращение элементов. Приращение задается в виде:</p>
<pre class="brush:f#;">начало..приращение..конец</pre>
<p>Например, зададим приращение на 2:</p>
<pre class="brush:f#;">
let numbers = seq {0..2..10}        
for n in numbers do printf $"{n} "  // 0 2 4 6 8 10
</pre>
<p>Причем приращение может быть отрицательным. Тогда начальное значение должно быть больше конечного</p>
<pre class="brush:f#;">
let numbers = seq {6..-1..1}        // 6 5 4 3 2 1
for n in numbers do printf $"{n} "  // 6 5 4 3 2 1
</pre>
<h4>Создание последовательности из цикла</h4>
<p>Генерацию последовательности можно определить с помощью цикла:</p>
<pre class="brush:f#;">
let numbers = seq {for n in 1..5 do n * n} 
</pre>
<p>Здесь с помощью цикла <code>for n in 1..5 do n * n</code> перебирается набор чисел от 1 до 5 и возвращается квадрат каждого элемента этого набора. 
Таким образом, в создаваемой последовательности откажутся числа 1, 4, 9, 16, 25.</p>
<p>Причем в данном цикле оператор <code>do</code> также можно заменить на оператор <span class="b">-&gt;</span>:</p>
<pre class="brush:f#;">
let numbers = seq {for n in 1..5 -&gt; n * n} 
</pre>
<h4>Условная генерация</h4>
<p>С помощью конструкции <span class="b">if..then</span> можно задать условие для генерации элементов:</p>
<pre class="brush:f#;">
let numbers = seq {for n in 1..10 -&gt;  if n%2=0 then n * n else n }        

for n in numbers do printf $"{n} "  // 1 4 3 16 5 36 7 64 9 100
</pre>
<p>Условная конструкция <code>if n%2=0 then n * n else n</code> говорит, что если элемент n делится на 2 без остатка (то есть если число четное), то передаем в последовательность квадрат числа n, иначе передаем само число n.</p>
<p>Причем в данном случае мы можем не использовать подвыражение <code>else</code>:</p>
<pre class="brush:f#;">
let numbers = seq {for n in 1..10 do if n%2=0 then n * n}        

for n in numbers do printf $"{n} "  // 4 16 36 64 100
</pre>
<p>В этом случае в последовательность будут передаваться только результат выражения после оператора <code>then</code>, то есть в данном случае только квадраты четных чисел. 
Однако при этом в цикле <code>for</code> вместо оператора <span class="b">-&gt;</span> применяется <span class="b">do</span>.</p>
<h4>Объединение и повторение последовательности и оператор yield!</h4>
<p>Оператор <span class="b">yield!</span> позволяет добавить в генерируемую последовательность другую последовательность. Например:</p>
<pre class="brush:f#;">
let numbers = seq {
    for n in 5..7 do 
        yield n
        yield! seq { 0; 1; 2}
} 
for n in numbers do printf $"{n} "  // 5 0 1 2 6 0 1 2 7 0 1 2
</pre>
<p>Здесь перебирается последовательность 5..7. Из нее в генерируемую последовательность мы передаем текущий перебираемый элемент с помощью оператора <span class="b">yield</span>, а с помощью 
оператора <span class="b">yield!</span> добавляем другую последовательность - <code>{ 0; 1; 2}</code>. Таким образом, будет сгенерирована последовательность 
<code>5 0 1 2 6 0 1 2 7 0 1 2</code></p>
<p>Также можно просто повторить определенное количество раз другую последовательность:</p>
<pre class="brush:f#;">
let numbers = seq {for _ in 1..3 do yield! seq { 0; 1; 2}}        

for n in numbers do printf $"{n} "  // 0 1 2 0 1 2 0 1 2
</pre>
<p>Здесь перебирается набор <code>1..3</code> и для каждого элемента из этого набора в генерируемую последовательность добавляется последовательность <code>{ 0; 1; 2}</code>. 
То есть в итоге будет сгенерирована последовательность <code>0 1 2 0 1 2 0 1 2</code></p>
<h4>Создание поледовательности с помощью функций Seq</h4>
<p>Также модуль <span class="b">Seq</span> предоставляет ряд функций для создания последовательности. Так, функция <span class="b">Seq.empty</span> 
создает пустую последовательность:</p>
<pre class="brush:f#;">let items = Seq.empty</pre>
<p>Функция <span class="b">Seq.singleton</span> создает поледовательность из одного элемента:</p>
<pre class="brush:f#;">let items = Seq.singleton 5</pre>
<p>Еще одна функция - <span class="b">Seq.init</span> с помощью функции создает определенное количество элементов:</p>
<pre class="brush:f#;">
let items = Seq.init 5 (fun n -&gt; n)

for n in items do printf $"{n}"     // 0 1 2 3 4
</pre>
<p>Функция <span class="b">Seq.init</span> принимает два параметра. Первый параметр - сколько элементов надо создать. Второй параметр - функция создания. Эта функция пробегается по ряду целых чисел от 0 до количества элементов - 
текущее перебираемое число передается в качестве параметра. И возвращает создаваемый элемент.</p>
<p>В данном случае создается 5 элементов последовательности. В качестве функции генерации элементов используется лямбда-выражение <code>fun n -&gt; n</code>, 
которое пробегается по числам от 0 до 5 (не включая) и получает каждое число в виде параметра n и просто возвращает это число. То есть 
функция генерации последовательности возвратит следующий ряд элементов: 0, 1, 2, 3, 4.</p>
<p>Но естественно логика может быть более комплексная, например, возвратим ряд чисел <code>0 10 20 30 40</code>:</p>
<pre class="brush:f#;">let items = Seq.init 5 (fun n -&gt; n * 10)</pre>
<p>Или создадим последовательность, в которой повторяется три раза строка "Tom"</p>
<pre class="brush:f#;">let items = Seq.init 3 (fun _ -&gt; "Tom")     // Tom Tom Tom</pre>
<h4>Бесконечная последовательность</h4>
<p>Для создания бесконечной последовательности применяется функция <span class="b">Seq.initInfinite</span>. Она имеет один параметр - функцию генерации элемента. 
В качестве параметра функция генерации получает индекс элемента и создает элемент.</p>
<p>Может возникнуть вопрос, как вообще можно создать бесконечную последовательность? В данном случае элементы создаются по мере обращения к ним. 
Например, определим последовательность, которая содержит квадраты чисел:</p>
<pre class="brush:f#;">let items = Seq.initInfinite (fun index -&gt; index * index)  </pre>

<h3>Операции с последовательностью</h3>
<p>Модуль <span class="b">Seq</span> предоставляет ряд функций для выполнения различных операций над последовательностями. Рассмотрим основные из них.</p>
<h4>Поиск в последовательности</h4>
<p>Ряд функций выполняют поиск элемента в последовательности:</p>
<ul>
<li><p><span class="b">Seq.exists</span>: проверяет, есть ли в последовательности элементы, удовлетворяют некоторому условию. Если такие имеются, 
тогда возвращает <code>true</code>, иначе возвращает <code>false</code>.</p>
<p>Первый параметр функции - функция условия, а второй параметр - последовательность</p>
<pre class="brush:f#;">
let numbers1 = seq {1; 3; 5; 7; 9}
let result1 = Seq.exists (fun n -&gt;  n%2=0) numbers1
printfn $"result1 = {result1}"	// False

let numbers2 = seq {for n in 1..9 -&gt; n *n }    // 1 4 9 25 36 49 64 81
let result2 = Seq.exists (fun n -&gt;  n%2=0) numbers2
printfn $"result2 = {result2}"	// True
</pre>
<p>В данном случае применяется условие <code>fun n -&gt;  n%2=0</code>, которое проверяет является ли число четным, то есть делится на 2 без остатка.</p>
</li>
<li><p><span class="b">Seq.exists2</span>: принимает две последовательности и проверяет, соответствуют ли элементы по одному индексу обоих последовательностей 
некоторому условию. Если хотя бы одна пара элементов соответствуют, то возвращает <code>true</code>, иначе возвращает <code>false</code>.</p>
<p>Первый параметр функции - функция условия, а второй и третий параметры - последовательности</p>
<pre class="brush:f#;">
let numbers1 = seq {1; 3; 5; 7; 9}
let numbers2 = seq {for n in 1..5 -&gt; n }    // 1 2 3 4 5
let result1 = Seq.exists2 (fun n m -&gt;  n = m) numbers1 numbers2
printfn $"result1 = {result1}"


let numbers3 = seq {1; 2; 3; 4; 5}
let numbers4 = seq {for n in 1..5 -&gt; n }    // 1 2 3 4 5
let result2 = Seq.exists2 (fun n m -&gt;  n = m) numbers3 numbers4
printfn $"result2 = {result2}"
</pre>
<p>Функция условия, которая передается в качестве первого параметра, принимает два параметра - элементы последовательностей по одному индексу. В данном случае просто проверяем равны ли эти элементы.</p>
</li>
<li><p><span class="b">Seq.tryFind</span>: возвращает из последовательности первый элемент, который соответствует некоторому условию. Поскольку такого элемента может и не быть в последовательности, 
то возвращается в реальности не сам элемент, а его обертка в виде объекта <code>Option</code>. С помощью свойства <span class="b">Value</span> можно получить значение.</p>
<pre class="brush:f#;">
let numbers1 = seq {for n in 1..6 -&gt; n }    // 1 2 3 4 5 6
let result1 = Seq.tryFind (fun n -&gt;  n % 2=0) numbers1
if result1.IsSome 
then printfn $"result1 = {result1.Value}"      // result1 = 2
else printfn "Не найдено"


let numbers2 = seq {1; 3; 5; 7; 9}
let result2 = Seq.tryFind  (fun n -&gt;  n % 2=0) numbers2
if result2.IsSome 
then printfn $"result1 = {result1.Value}"
else printfn "Не найдено"
</pre>
<p>В данном случае для обоих последовательностей ищем элементы, которые представляют четные числа. В первой последовательности такие элементы есть, и соответственно 
будет возвращен первый из этих элементов. А во второй последовательности таких элементов нет. Поэтому сначала проверяем, есть ли какое-то значение - 
в этом случае свойство <span class="b">IsSome</span> должно возвратить <code>true</code>, и если значение есть, то через свойство <code>Value</code> обращаемся к этому значению.</p>
</li>
<li><p><span class="b">Seq.tryFindIndex</span>: возвращает из последовательности индекс первого элемента, который соответствует некоторому условию. 
Работает аналогично функции <code>tryFind()</code> - поскольку такого элемента может и не быть в последовательности, 
то возвращается не сам индекс элемента, а его обертка в виде объекта <code>Option</code>. С помощью свойства <span class="b">Value</span> можно получить значение.</p>
<pre class="brush:f#;">
let numbers1 = seq {for n in 1..6 -> n }    // 1 2 3 4 5 6
let result1 = Seq.tryFindIndex (fun n ->  n % 2=0) numbers1
if result1.IsSome 
then printfn $"индекс элемента = {result1.Value}"      // индекс элемента = 1
else printfn "Не найдено"

let numbers2 = seq {1; 3; 5; 7; 9}
let result2 = Seq.tryFindIndex  (fun n ->  n % 2=0) numbers2
if result2.IsSome 
then printfn $"индекс элемента = {result1.Value}"
else printfn "Не найдено"
</pre>
<p>Стоит не забывать, что индексация элементов начинается с нуля.</p></li>
</ul>
<h3>Извлечение подпоследовательности</h3>
<p>Ряд функций модуля <span class="b">Seq</span> позволяют получить часть последовательности:</p>
<ul>
<li><p><span class="b">Seq.filter</span>: фильтрует элементы последовательности в сответствии с некоторым условием. Возвращает новую последовательность, 
которая содержит только те элементы, которые соответствуют этому условию.</p>
<p>Первый параметр функции - функция условия, а второй параметр - фильтруемая последовательность</p>
<pre class="brush:f#;">
let numbers = seq {for n in 1..6 -&gt; n }    // 1 2 3 4 5 6
let filteredNumbers = Seq.filter (fun n -&gt;  n % 2=0) numbers
for n in filteredNumbers do printf $"{n} \t"        // 2 4 6
</pre>
<p>В данном случае получаем в новую последовательность четные числа из исходной последовательности.</p>
</li>

<li><p><span class="b">Seq.trancate</span> и <span class="b">Seq.take</span>: создают новую последовательность, которая содержит определенное количество элементов исходной 
последовательности.</p>
<p>Первый параметр функции - количество элементов, а второй параметр - фильтруемая последовательность. Извлечение элементов идет с начала последовательности</p>
<pre class="brush:f#;">
let numbers = seq {for n in 1..6 -&gt; n }    // 1 2 3 4 5 6
let truncatedNumbers = Seq.truncate 3 numbers
for n in truncatedNumbers do printf $"{n} \t"        // 1 2 3

printfn ""

let takenNumbers = Seq.take 3 numbers
for n in takenNumbers do printf $"{n} \t"        // 1 2 3
</pre>
<p>В обоих случаях извлекаем три первых элементов. Обе функции работают похожим образом за тем исключением, что функция <span class="b">Seq.take</span> генерирует 
исключение <code>System.InvalidOperationException</code>, если количество извлекаемых элементов больше количество элементов последовательности.</p>
<pre class="brush:f#;">
let numbers = seq {for n in 1..6 -&gt; n }    // 1 2 3 4 5 6

let truncatedNumbers = Seq.truncate 10 numbers
for n in truncatedNumbers do printf $"{n} \t"        // 1 2 3 4 5 6

printfn ""

let takenNumbers = Seq.take 10 numbers      // ! Ошибка
for n in takenNumbers do printf $"{n} \t"       
</pre>
</li>

<li><p><span class="b">Seq.skip</span>: пропускает определенное количество элементов с начала последовательности.</p>
<pre class="brush:f#;">
let numbers = seq {for n in 1..10 -&gt; n }    // 1 2 3 4 5 6 7 8 9 10

let skipedNumbers = Seq.skip 5 numbers      // пропускаем пять первых элементов
for n in skipedNumbers do printf $"{n} \t"        // 5 6 7 8 9 10
</pre>
</li>
<li><p><span class="b">Seq.skipWhile</span>: пропускает определенное количество элементов <span class="b">с начала</span> последовательности, которые соответствуют условию:</p>
<pre class="brush:f#;">
let numbers = seq {for n in 1..10 -&gt; n }    // 1 2 3 4 5 6 7 8 9 10

let skipWhiledNumbers = Seq.skipWhile (fun n -&gt; n &lt; 4) numbers      // пропускаем числа меньше 4
for n in skipWhiledNumbers do printf $"{n} \t"    // 4 5 6 7 8 9 10
</pre>
</li>

<li><p><span class="b">Seq.takeWhile</span>: оставляет определенное количество элементов <span class="b">с начала</span> последовательности, которые соответствуют условию:</p>
<pre class="brush:f#;">
let numbers = seq {for n in 1..10 -&gt; n }    // 1 2 3 4 5 6 7 8 9 10

let takeWhiledNumbers = Seq.takeWhile (fun n -&gt; n &lt; 4) numbers      // оставляем числа меньше 4
for n in takeWhiledNumbers do printf $"{n} \t"    // 1 2 3 
</pre>
</li>
</ul>

<h3>Преобразование последовательности</h3>
<p>Функция <span class="b">Seq.map</span> позволяет преобразовать последовательность. Первый параметр - функция преобразования, которая применяется к каждому элементу, 
а второй параметр - исходная последовательность. Результат функции <span class="b">Seq.map</span> - новая последовательность из преобразованных элементов:</p>
<pre class="brush:f#;">
let numbers = seq {for n in 1..5 -&gt; n }    // 1 2 3 4 5
let transformedNumbers = Seq.map (fun n -&gt; n * n) numbers	
for n in transformedNumbers do printf $"{n} "     // 1 4 9 16 25
</pre>
<p>В данном случае функция преобразования <code>fun n -&gt; n * n</code> возвращает квадрат числа из исходной последовательности. Соответственно в созданной последовательности 
окажутся квадраты чисел исходной последовательности.</p>
<h3>Сортировка</h3>
<p>Ряд функций выполняют сортировку элементов. Например, функция <span class="b">Seq.sort</span> сортирует элементы по возрастанию, а <span class="b">Seq.sortDescending</span> - 
по убыванию:</p>
<pre class="brush:f#;">
let people = seq { "Tom"; "Sam"; "Bob"; "Alice"; "Mike"}
let sortedPeople = Seq.sort people		// сортировка по возрастанию
for p in sortedPeople do printf $"{p} "     // Alice Bob Mike Sam Tom

printfn ""

let numbers = seq {5; 2; 6; 9; 1; 3; 8}
let sortedNumbers = Seq.sortDescending numbers	// сортировка по убыванию
for n in sortedNumbers do printf $"{n} "     // 9 8 6 5 3 2 1
</pre>
<h3>Связь с платформой .NET</h3>
<p>Последовательности представлены типом <span class="b">seq&lt;'T&gt;</span>, который соответствует на платформе .NET типу 
<code>IEnumerable&lt;T&gt;</code>. Поэтому любой тип .NET, который реализует интерфейс <code>IEnumerable&lt;T&gt;</code>, 
может использоваться как последовательность.</p>
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


<div class="nav"><p><a href="./3.11.php">Назад</a><a href="./">Содержание</a></p></div></div>
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
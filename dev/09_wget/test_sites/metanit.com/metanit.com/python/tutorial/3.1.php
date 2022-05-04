<!DOCTYPE html>
<html >
<head>
<title>Python | Списки</title>
<meta charset="utf-8" />
<meta name="description" content="Списки в Python, создание списков, добавление, изменение и удаление элементов, перебор списка">
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
<h1>Списки, кортежи и словари</h1><h2>Список</h2><div class="date">Последнее обновление: 29.01.2022</div>

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

<p>Для работы с наборами данных Python предоставляет такие встроенные типы как списки, кортежи и словари.</p>
<p>Список (list) представляет тип данных, который хранит набор или последовательность элементов. Во многих языках программирования есть аналогичная структура данных, которая называется массив.</p>
<h3>Создание списка</h3>
<p>Для создания списка применяются квадратные скобки <span class="b">[]</span>, внутри которых через запятую перечисляются элементы списка. Например, определим список чисел:</p>
<pre class="brush:py;">
numbers = [1, 2, 3, 4, 5]
</pre>
<p>Подобным образом можно определять списки с данными других типов, например, определим список строк:</p>
<pre class="brush:py;">people = ["Tom", "Sam", "Bob"]</pre>
<p>Также для создания списка можно использовать функцию-конструктор <span class="b">list()</span>:</p>
<pre class="brush:py;">
numbers1 = []
numbers2 = list()
</pre>
<p>Оба этих определения списка аналогичны - они создают пустой список.</p>
<p>Список необязательно должен содержать только однотипные объекты. Мы можем поместить в один и тот же список одновременно строки, числа, объекты других типов данных:</p>
<pre class="brush:py;">objects = [1, 2.6, "Hello", True]</pre>
<p>Для проверки элементов списка можно использовать стандартную функцию print, которая выводит содержимое списка в удобочитаемом виде:</p>
<pre class="brush:py;">
numbers = [1, 2, 3, 4, 5]
people = ["Tom", "Sam", "Bob"]

print(numbers)  # [1, 2, 3, 4, 5]
print(people)   # ["Tom", "Sam", "Bob"]
</pre>
<p>Конструктор list может принимать набор значений, на основе которых создается список:</p>
<pre class="brush:py;">
numbers1 = [1, 2, 3, 4, 5]
numbers2 = list(numbers1)
print(numbers2)  # [1, 2, 3, 4, 5]

letters = list("Hello")
print(letters)      # ['H', 'e', 'l', 'l', 'o']
</pre>

<p>Если необходимо создать список, в котором повторяется одно и то же значение несколько раз, то можно использовать символ звездочки *, 
то есть фактически применить операцию умножения к уже существующему списку:</p>
<pre class="brush:py;">
numbers = [5] * 6   # 6 раз повторяем 5
print(numbers)      # [5, 5, 5, 5, 5, 5]

people = ["Tom"] * 3    # 3 раза повторяем "Tom"
print(people)           # ["Tom", "Tom", "Tom"]

students = ["Bob", "Sam"] * 2   # 2 раза повторяем "Bob", "Sam"
print(students)                 # ["Bob", "Sam", "Bob", "Sam"]

</pre>
<h3>Обращение к элементам списка</h3>
<p>Для обращения к элементам списка надо использовать индексы, которые представляют номер элемента в списка. Индексы начинаются с нуля. 
То есть первый элемент будет иметь индекс 0, второй элемент - индекс 1 и так далее. Для обращения к элементам с конца можно использовать отрицательные индексы, начиная с -1. То есть у последнего элемента 
будет индекс -1, у предпоследнего - -2 и так далее.</p>
<pre class="brush:py;">
people = ["Tom", "Sam", "Bob"]
# получение элементов с начала списка
print(people[0])   # Tom
print(people[1])   # Sam
print(people[2])   # Bob

# получение элементов с конца списка
print(people[-2])   # Sam
print(people[-1])   # Bob
print(people[-3])   # Tom
</pre>
<p>Для изменения элемента списка достаточно присвоить ему новое значение:</p>
<pre class="brush:py;">
people = ["Tom", "Sam", "Bob"]

people[1] = "Mike"  # изменение второго элемента
print(people[1])    # Mike
print(people)       # ["Tom", "Mike", "Bob"]
</pre>
<h3>Разложение списка</h3>
<p>Python позволяет разложить список на отдельные элементы:</p>
<pre class="brush:py;">
people = ["Tom", "Bob", "Sam"]

tom, bob, sam = people

print(tom)      # Tom
print(bob)      # Bob
print(sam)      # Sam
</pre>
<p>В данном случае переменным tom, bob и sam последовательно присваиваются элементы из списка people. Однако следует учитывать, что количество переменных 
должно быть равно числу элементов присваиваемого списка.</p>
<h3>Перебор элементов</h3>
<p>Для перебора элементов можно использовать как цикл for, так и цикл while.</p>
<p>Перебор с помощью цикла <span class="b">for</span>:</p>
<pre class="brush:py;">
people = ["Tom", "Sam", "Bob"]
for person in people:
    print(person)
</pre>
<p>Здесь будет производиться перебор списка people, и каждый его элемент будет помещаться в переменную person.</p>
<p>Перебор также можно сделать с помощью цикла <span class="b">while</span>:</p>
<pre class="brush:py;">
people = ["Tom", "Sam", "Bob"]
i = 0
while i &lt; len(people):
    print(people[i])    # применяем индекс для получения элемента
    i += 1
</pre>
<p>Для перебора с помощью функции <span class="b">len()</span> получаем длину списка. С помощью счетчика i выводит по элементу, пока значение счетчика не станет равно 
длине списка.</p>
<h3>Сравнение списков</h3>
<p>Два списка считаются равными, если они содержат один и тот же набор элементов:</p>
<pre class="brush:py;">
numbers1 = [1, 2, 3, 4, 5]
numbers2 = list([1, 2, 3, 4, 5])
if numbers1 == numbers2:
    print("numbers1 equal to numbers2")
else:
    print("numbers1 is not equal to numbers2")
</pre>
<p>В данном случае оба списка будут равны.</p>
<h3>Методы и функции по работе со списками</h3>
<p>Для управления элементами списки имеют целый ряд методов. Некоторые из них:</p>
<ul>
<li><p><span class="b">append(item)</span>: добавляет элемент item в конец списка</p></li>
<li><p><span class="b">insert(index, item)</span>: добавляет элемент item в список по индексу index</p></li>
<li><p><span class="b">extends(items)</span>: добавляет набор элементов items в конец списка</p></li>
<li><p><span class="b">remove(item)</span>: удаляет элемент item. Удаляется только первое вхождение элемента. Если элемент не найден, генерирует исключение ValueError</p></li>
<li><p><span class="b">clear()</span>: удаление всех элементов из списка</p></li>
<li><p><span class="b">index(item)</span>: возвращает индекс элемента item. Если элемент не найден, генерирует исключение ValueError</p></li>
<li><p><span class="b">pop([index])</span>: удаляет и возвращает элемент по индексу index. Если индекс не передан, то просто удаляет последний элемент.</p></li>
<li><p><span class="b">count(item)</span>: возвращает количество вхождений элемента item в список</p></li>
<li><p><span class="b">sort([key])</span>: сортирует элементы. По умолчанию сортирует по возрастанию. Но с помощью параметра key мы можем передать функцию сортировки.</p></li>
<li><p><span class="b">reverse()</span>: расставляет все элементы в списке в обратном порядке</p></li>
<li><p><span class="b">copy()</span>: копирует список</p></li>
</ul>
<p>Кроме того, Python предоставляет ряд встроенных функций для работы со списками:</p>
<ul>
<li><p><span class="b">len(list)</span>: возвращает длину списка</p></li>
<li><p><span class="b">sorted(list, [key])</span>: возвращает отсортированный список</p></li>
<li><p><span class="b">min(list)</span>: возвращает наименьший элемент списка</p></li>
<li><p><span class="b">max(list)</span>: возвращает наибольший элемент списка</p></li>
</ul>
<h3>Добавление и удаление элементов</h3>
<p>Для добавления элемента применяются методы <code>append()</code>, <code>extends</code> и <code>insert</code>, а для удаления - методы <code>remove()</code>, 
<code>pop()</code> и <code>clear()</code>.</p>
<p>Использование методов:</p>
<pre class="brush:py;">
people = ["Tom", "Bob"]

# добавляем в конец списка
people.append("Alice")  # ["Tom", "Bob", "Alice"]
# добавляем на вторую позицию
people.insert(1, "Bill")  # ["Tom", "Bill", "Bob", "Alice"]
# добавляем набор элементов ["Mike", "Sam"]
people.extend(["Mike", "Sam"])      # ["Tom", "Bill", "Bob", "Alice", "Mike", "Sam"]
# получаем индекс элемента
index_of_tom = people.index("Tom")
# удаляем по этому индексу
removed_item = people.pop(index_of_tom)     # ["Bill", "Bob", "Alice", "Mike", "Sam"]
# удаляем последний элемент
last_item = people.pop()     # ["Bill", "Bob", "Alice", "Mike"]
# удаляем элемент "Alice"
people.remove("Alice")      # ["Bill", "Bob", "Mike"]
print(people)       # ["Bill", "Bob", "Mike"]
# удаляем все элементы
people.clear()
print(people)       # []

</pre>
<h3>Проверка наличия элемента</h3>
<p>Если определенный элемент не найден, то методы remove и index генерируют исключение. Чтобы избежать подобной ситуации, перед операцией с 
элементом можно проверять его наличие с помощью ключевого слова <span class="b">in</span>:</p>
<pre class="brush:py;">
people = ["Tom", "Bob", "Alice", "Sam"]

if "Alice" in people:
    people.remove("Alice")
print(people)       # ["Tom", "Bob", "Sam"]
</pre>
<p>Выражение <code>if "Alice" in people</code> возвращает True, если элемент "Alice" имеется в списке people. Поэтому конструкция <code>if "Alice" in people</code> 
может выполнить последующий блок инструкций в зависимости от наличия элемента в списке.</p>
<h3>Удаление с помощью del</h3>
<p>Python также поддерживает еще один способ удаления элементов списка - с помощью оператора <span class="b">del</span>. В качестве параметра этому оператору передается удаляемый элемент 
или набор элементов:</p>
<pre class="brush:py;">
people = ["Tom", "Bob", "Alice", "Sam", "Bill", "Kate", "Mike"]

del people[1]   # удаляем второй элемент
print(people)   # ["Tom", "Alice", "Sam", "Bill", "Kate", "Mike"]
del people[:3]   # удаляем  по четвертый элемент не включая
print(people)   # ["Bill", "Kate", "Mike"]
del people[1:]   # удаляем  со второго элемента
print(people)   # ["Bill"]
</pre>
<h3>Подсчет вхождений</h3>
<p>Если необходимо узнать, сколько раз в списке присутствует тот или иной элемент, то можно применить метод <code>count()</code>:</p>
<pre class="brush:py;">
people = ["Tom", "Bob", "Alice", "Tom", "Bill", "Tom"]

people_count = people.count("Tom")
print(people_count)      # 3
</pre>
<h3>Сортировка</h3>
<p>Для сортировки по возрастанию применяется метод <span class="b">sort()</span>:</p>
<pre class="brush:py;">
people = ["Tom", "Bob", "Alice", "Sam", "Bill"]

people.sort()
print(people)      # ["Alice", "Bill", "Bob", "Sam", "Tom"]
</pre>
<p>Если необходимо отсортировать данные в обратном порядке, то мы можем после сортировки применить метод <code>reverse()</code>:</p>
<pre class="brush:py;">
people = ["Tom", "Bob", "Alice", "Sam", "Bill"]

people.sort()
people.reverse()
print(people)      # ["Tom", "Sam", "Bob", "Bill", "Alice"]
</pre>
<p>При сортировке фактически сравниваются два объекта, и который из них "меньше", ставится перед тем, который "больше". Понятия "больше" и "меньше" 
довольно условны. И если для чисел все просто - числа расставляются в порядке возрастания, то для строк и других объектов ситуация сложнее. В частности, строки 
оцениваются по первым символам. Если первые символы равны, оцениваются вторые символы и так далее. При чем цифровой символ считается "меньше", 
чем алфавитный заглавный символ, а заглавный символ считается меньше, чем строчный.</p>
<p>Таким образом, если в списке сочетаются строки с верхним и нижним регистром, то мы можем получить не совсем корректные результаты, так как для нас строка 
"bob" должна стоять до строки "Tom". И чтобы изменить стандартное поведение сортировки, мы можем передать в метод <code>sort()</code> в качестве параметра функцию:</p>
<pre class="brush:py;">
people = ["Tom", "bob", "alice", "Sam", "Bill"]

people.sort()       # стандартная сортировка
print(people)      # ["Bill", "Sam", "Tom", "alice", "bob"]

people.sort(key=str.lower)  # сортировка без учета регистра
print(people)      # ["alice", "Bill", "bob", "Sam", "Tom"]
</pre>
<p>Кроме метода sort мы можем использовать встроенную функцию <span class="b">sorted</span>, которая имеет две формы:</p>
<ul>
<li><p><code>sorted(list)</code>: сортирует список list</p></li>
<li><p><code>sorted(list, key)</code>: сортирует список list, применяя к элементам функцию key</p></li>
</ul>
<pre class="brush:py;">
people = ["Tom", "bob", "alice", "Sam", "Bill"]

sorted_people = sorted(people, key=str.lower)
print(sorted_people)      # ["alice", "Bill", "bob", "Sam", "Tom"]
</pre>
<p>При использовании этой функции следует учитывать, что эта функция не изменяет сортируемый список, а все отсортированные элементы она помещает в новый список, 
который возвращается в качестве результата.</p>
<h3>Минимальное и максимальное значения</h3>
<p>Встроенный функции Python <code>min()</code> и <code>max()</code> позволяют найти минимальное и максимальное значения соответственно:</p>
<pre class="brush:py;">
numbers = [9, 21, 12, 1, 3, 15, 18]
print(min(numbers))     # 1
print(max(numbers))     # 21
</pre>
<h3>Копирование списков</h3>
<p>При копировании списков следует учитывать, что списки представляют изменяемый (mutable) тип, поэтому если обе переменных будут указывать на один и тот же список, то изменение 
одной переменной, затронет и другую переменную:</p>
<pre class="brush:py;">
people1 = ["Tom", "Bob", "Alice"]
people2 = people1
people2.append("Sam")   # добавляем элемент во второй список
# people1 и people2 указывают на один и тот же список
print(people1)   # ["Tom", "Bob", "Alice", "Sam"]
print(people2)   # ["Tom", "Bob", "Alice", "Sam"]
</pre>
<p>Это так называемое "поверхностное копирование" (shallow copy). И, как правило, такое поведение нежелательное. И чтобы происходило копирование элементов, но при этом 
переменные указывали на разные списки, необходимо выполнить глубокое копирование (deep copy). Для этого можно использовать метод <span class="b">copy()</span>:</p>
<pre class="brush:py;">
people1 = ["Tom", "Bob", "Alice"]
people2 = people1.copy()    # копируем элементы из people1 в people2
people2.append("Sam")   # добавляем элемент ТОЛЬКО во второй список
# people1 и people2 указывают на разные списки
print(people1)   # ["Tom", "Bob", "Alice"]
print(people2)   # ["Tom", "Bob", "Alice", "Sam"]
</pre>
<h3>Копирование части списка</h3>
<p>Если необходимо скопировать не весь список, а только его какую-то определенную часть, то мы можем применять специальный синтаксис. 
который может принимать следующие формы:</p>
<ul>
<li><p><code>list[:end]</code>: через параметр end передается индекс элемента, до которого нужно копировать список</p></li>
<li><p><code>list[start:end]</code>: параметр start указывает на индекс элемента, начиная с которого надо скопировать элементы</p></li>
<li><p><code>list[start:end:step]</code>: параметр step указывает на шаг, через который будут копироваться элементы из списка. По умолчанию этот параметр равен 1.</p></li>
</ul>
<pre class="brush:py;">
people = ["Tom", "Bob", "Alice", "Sam", "Tim", "Bill"]

slice_people1 = people[:3]   # с 0 по 3
print(slice_people1)   # ["Tom", "Bob", "Alice"]

slice_people2 = people[1:3]   # с 1 по 3
print(slice_people2)   # ["Bob", "Alice"]

slice_people3 = people[1:6:2]   # с 1 по 6 с шагом 2
print(slice_people3)   # ["Bob", "Sam", "Bill"]
</pre>
<h3>Соединение списков</h3>
<p>Для объединения списков применяется операция сложения (+):</p>
<pre class="brush:py;">
people1 = ["Tom", "Bob", "Alice"]
people2 = ["Tom", "Sam", "Tim", "Bill"]
people3 = people1 + people2
print(people3)   # ["Tom", "Bob", "Alice", "Tom", "Sam", "Tim", "Bill"]
</pre>
<h3>Списки списков</h3>
<p>Списки кроме стандартных данных типа строк, чисел, также могут содержать другие списки. Подобные списки можно ассоциировать с таблицами, где вложенные списки 
выполняют роль строк. Например:</p>
<pre class="brush:py;">
people = [
    ["Tom", 29],
    ["Alice", 33],
    ["Bob", 27]
]

print(people[0])         # ["Tom", 29]
print(people[0][0])      # Tom
print(people[0][1])      # 29
</pre>
<p>Чтобы обратиться к элементу вложенного списка, необходимо использовать пару индексов: <code>people[0][1]</code> - обращение ко второму элементу первого вложенного списка.</p>
<p>Добавление, удаление и изменение общего списка, а также вложенных списков аналогично тому, как это делается с обычными (одномерными) списками:</p>
<pre class="brush:py;">
people = [
    ["Tom", 29],
    ["Alice", 33],
    ["Bob", 27]
]

# создание вложенного списка
person = list()
person.append("Bill")
person.append(41)
# добавление вложенного списка
people.append(person)

print(people[-1])         # ["Bill", 41]

# добавление во вложенный список
people[-1].append("+79876543210")

print(people[-1])         # ["Bill", 41, "+79876543210"]

# удаление последнего элемента из вложенного списка
people[-1].pop()
print(people[-1])         # ["Bill", 41]

# удаление всего последнего вложенного списка
people.pop(-1)

# изменение первого элемента
people[0] = ["Sam", 18]
print(people)            # [ ["Sam", 18], ["Alice", 33], ["Bob", 27]]
</pre>
<p>Перебор вложенных списков:</p>
<pre class="brush:py;">
people = [
    ["Tom", 29],
    ["Alice", 33],
    ["Bob", 27]
]

for person in people:
    for item in person:
        print(item, end=" | ")
</pre>
<p>Консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Tom | 29 | Alice | 33 | Bob | 27 | 
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


<div class="nav"><p><a href="./2.21.php">Назад</a><a href="./">Содержание</a><a href="./3.2.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Python</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/1.1.php">Язык программирования Python</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/1.2.php">Установка Python и первая программа на Windows</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/1.5.php">Установка Python и первая программа на MacOS</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/1.3.php">Первая программа в PyCharm</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/1.4.php">Python в Visual Studio</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы Python</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.1.php">Введение в написание программ</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.2.php">Переменные и типы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.14.php">Консольный ввод и вывод</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.3.php">Арифметические операции с числами</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.12.php">Поразрядные операции с числами</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.4.php">Условные выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.6.php">Условная конструкция if</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.7.php">Циклы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.8.php">Функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.15.php">Параметры функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.16.php">Оператор return и возвращение результата из функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.17.php">Функция как тип, параметр и результат другой функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.18.php">Лямбда-выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.5.php">Преобразование типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.9.php">Область видимости переменных</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.19.php">Замыкания</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.1.php">Классы и объекты</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.2.php">Инкапсуляция, атрибуты и свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.3.php">Наследование</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.4.php">Переопределение функционала базового класса</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.6.php">Атрибуты классов и статические методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.5.php">Класс object. Строковое представление объекта</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Обработка ошибок и исключений</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.11.php">Конструкция try...except...finally</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.20.php">except и обработка разных типов исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.21.php">Генерация исключений и создание своих типов исключений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Списки, кортежи и словари</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/3.1.php">Списки</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/3.2.php">Кортежи</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/3.5.php">Диапазоны</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/3.3.php">Словари</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/3.4.php">Множества</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Модули</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.10.php">Определение и подключение модулей</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/6.1.php">Модуль random</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/6.2.php">Модуль math</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/6.3.php">Модуль locale</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/6.4.php">Модуль decimal</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Строки</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/5.1.php">Работа со строками</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/5.2.php">Основные методы строк</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/5.3.php">Форматирование</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/5.4.php">Программа подсчета слов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Pattern matching</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.13.php">Конструкция match</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.22.php">Кортежи в pattern matching</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.23.php">Массивы в pattern matching</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.24.php">Словари в pattern matching</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.25.php">Классы в pattern matching</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.26.php">guards или ограничения шаблонов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.27.php">Установка псевдонимов и паттерн AS</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Работа с файлами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.1.php">Открытие и закрытие файлов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.2.php">Текстовые файлы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.3.php">Файлы CSV</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.4.php">Бинарные файлы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.6.php">Модуль shelve</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.5.php">Модуль OS и работа с файловой системой</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Работа с датами и временем</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/8.1.php">Модуль datetime</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/8.2.php">Операции с датами</a></span></li>
		</ul>
	</li>
	
	<li class="closed"><span class="folder">Глава 11. Создание графического интерфейса</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.1.php">Tkinter. Создание окна приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.2.php">Кнопки</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.3.php">Изменение свойств элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.4.php">Позиционирование элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.5.php">Текстовая метка Label</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.6.php">Поле ввода Entry</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.7.php">Checkbutton</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.8.php">Radiobutton</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.9.php">Listbox</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.10.php">Меню</a></span></li>
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
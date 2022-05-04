<!DOCTYPE html>
<html >
<head>
<title>F# | Классы или структуры. Типы значений и ссылочные типы</title>
<meta charset="utf-8" />
<meta name="description" content="Классы или структуры. Типы значений и ссылочные типы в языке программирования F#, организация памяти, стек и куча heap, передача структур и объектов классов в функцию в качестве параметров">
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
<h2>Классы или структуры. Типы значений и ссылочные типы</h2><div class="date">Последнее обновление: 02.08.2021</div>

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

<p>В предыдущих статьях были описаны классы и структуры. Оба этих типа могут содержать похожие компоненты, за некоторым исключением. Оба типа могут представлять 
некоторые объекты. В чем различие между ними? Ключевое различие между классами и структурами лежит в области использования памяти.</p>
<p>Все типы данных в F# можно разделить на <span class="b">типы значений</span> (value types), еще называемые значимыми типами, и 
<span class="b">ссылочные типы</span> (reference types). Важно понимать между ними различия.</p>
<p>К типам значений относятся: структуры и примитивные типы bool, byte, sbyte, int16, uint16, int, uint, int64, uint64, nativeint, unativeint, decimal, float, float32, char. Стоит отметить, что данные примитивные типы сами по сути 
реализованы как структуры. А классы и тип string (который по сути представляет класс) относятся к <span class="b">ссылочным типам</span> (reference types).</p>
<p>Для того, чтобы понять различие между типами значений и ссылочными типами, надо понять организацию памяти в .NET. 
Здесь память делится на два типа: <span class="b">стек</span> и <span class="b">куча</span> (heap). 
Параметры и переменные функций, которые представляют типы значений, размещают свое значение в стеке. Стек представляет собой структуру данных, 
которая растет снизу вверх: каждый новый добавляемый элемент помещается поверх предыдущего. Время жизни переменных таких типов ограничено их 
контекстом. Физически стек - это некоторая область памяти в адресном пространстве.</p>
<p>Когда программа только запускается на выполнение, в конце блока памяти, зарезервированного для стека устанавливается указатель стека. 
При помещении данных в стек указатель переустанавливается таким образом, что снова указывает на новое свободное место. При вызове каждой 
отдельной функции в стеке будет выделяться область памяти или фрейм стека, где будут храниться значения ее параметров и переменных.</p>
<p>Например, рассмотрим следующую программу</p>
<pre class="brush:f#;">
let calculate n = 
    let a = 1
    let b = 2 
    let c = a + b + n
    printfn $"c = {c}"

calculate 5
</pre>
<p>При запуске этого кода для функции <code>calculate</code> в стеке будет выделяться своя часть памяти или фрейм, который условно можно изобразить следующим образом:</p>
<img src="./pics/3.1.png" alt="Стек Stack in F#" />
<p>При вызове функции calculate в еe фрейм в стеке будут помещаться значения n,a, b и c. Они определяются в контексте данной функции. 
Когда метод функциия, область памяти, которая выделялась под стек, впоследствии может быть использована другими функциями.</p>
<p>Причем если параметр или переменная метода представляет тип значений, то в стеке будет храниться непосредственное значение этого параметра или 
определяемых в ней с помощью let значений. Например, в данном случае значения и параметр функции calculate представляют значимый тип - тип int, поэтому в стеке будут 
храниться их числовые значения.</p>
<p>Ссылочные типы хранятся в куче или хипе, которую можно представить как неупорядоченный набор разнородных объектов. 
Физически это остальная часть памяти, которая доступна процессу. И при создании объекта ссылочного типа в стеке помещается ссылка на адрес в куче (хипе). 
Когда объект ссылочного типа перестает использоваться, в дело вступает автоматический сборщик мусора: он видит, что на объект в хипе нету больше 
ссылок, условно удаляет этот объект и очищает память - фактически помечает, что данный сегмент памяти может быть использован для 
хранения других данных.</p>
<p>Для сравнения поведения определим следующую программу:</p>
<pre class="brush:f#;">
type Country() = class
    [&lt;DefaultValue&gt;]
    val mutable x: int
    [&lt;DefaultValue&gt;]
    val mutable y: int
end

type State = struct
    val mutable x: int
    val mutable y: int
end

let test() = 
    let state1  = State()
    let country1 = Country()
    ()
    
test()
</pre>

<p>Здесь определены структура State и класс Country, которые содержат два поля типа int. Они фактически выглядят аналогично.</p>
<p>Также здесь определена функция <code>test</code>, в которой определяется значение типа State и значение типа Country. В итоге при выполнении 
этой функции в стеке выделяется память для объекта <code>state`</code>:</p>
<pre class="brush:f#;">let state1 = State()</pre> 
<p>Далее в стеке создается ссылка для объекта <code>country1</code>:</p>
<pre class="brush:f#;">let country1 = Country()</pre>
<p>Ссылка в стеке для объекта <code>country1</code> будет представлять адрес на место в хипе, по которому в реальности размещены данные этого объекта.</p>
<img src="./pics/3.2.png" alt="Value types and reference types in F#" />
<p>Если одно из полей структуры также хранит значение ссылочного типа, то в стеке также для него будет хранится ссылка на адрес в хипе, где 
в реальности будут храниться все данные этого значения.</p>
<p>В этом плане структуры больше подходят для небольших данных, которые часто используются.</p>
<h3>Копирование значений</h3>
<p>Подобное разделение на типы значений и ссылочные типы надо учитывать при ряде действий, например, копировании значений. 
При присвоении данных объекту значимого типа он получает копию данных. При присвоении данных объекту ссылочного типа он получает не копию объекта, 
а ссылку на этот объект в хипе.</p>
<p>Например, возьмем в начале структуры:</p>
<pre class="brush:f#;">
type State = struct
    val mutable x: int
    val mutable y: int
end

let test() = 
    let mutable state1 = State()    // Структура State
    let mutable state2 = State()
    state2.x &lt;- 1
    state2.y &lt;- 2
    state1 &lt;- state2          // присваиваем переменной state1 значение структуры state2
    state2.x &lt;- 5            // state1.x=1 по-прежнему
    printfn $"state1.x = {state1.x}"        // state1.x = 1
    printfn $"state2.x = {state2.x}"        // state2.x = 5
    
test()
</pre>
<p>Так как state1 - структура, то при присвоении <code>state1 &lt;- state2 </code> она получает копию структуры state2. Поэтому изменения в одной структуре никак не затронут другую структуру.</p>
<p>Теперь рассмотрим аналогичный пример с классами:</p>
<pre class="brush:f#;">
type Country() = class
    [&lt;DefaultValue&gt;]
    val mutable x: int
    [&lt;DefaultValue&gt;]
    val mutable y: int
end

let test() = 
    let mutable country1 = Country()    // Класс Country
    let mutable country2 = Country()
    country2.x &lt;- 1
    country2.y &lt;- 2
    country1 &lt;- country2          // присваиваем переменной country1 значение объекта country2
    country2.x &lt;- 7                // теперь и country1.x = 7, так как обе ссылки и country1 и country2 
                                    // указывают на один объект в хипе
    printfn $"country1.x = {country1.x}"        // country1.x = 7
    printfn $"country2.x = {country2.x}"        // country2.x = 7
    
test()
</pre>
<p>объект класса country1 при присвоении <code>country1 &lt;- country2 </code> получает ссылку на тот же объект, на который указывает country2. 
Поэтому с изменением country2, так же будет меняться и country1, так как обе переменных фактически представляют один и тот же объект в хипе.</p>
<h3>Объекты структур и классов как параметры функций</h3>
<p>Организацию объектов в памяти следует учитывать при передаче объектов в качестве параметров в функции. Если параметр функции представляет структуру, то передаваемое 
при вызове функция получает копию структуры. Но по умолчанию мы не сможем изменить значение переданного параметра:</p>
<pre class="brush:f#;">
type Person = struct
    
    val mutable name: string
end
let changePerson (person: Person) = 
    person.name &lt;- "Sam"		// ! ошибка
    printfn $"Name: {person.name}"
</pre>
<p>Если параметры методов представляют объекты классов, то при передаче объекта класса по умолчанию в функцию передается копия ссылки на объект. 
Эта копия указывает на тот же объект, что и исходная ссылка, потому мы можем изменить отдельные поля и свойства объекта:</p>
<pre class="brush:f#;">
type Person() = class
    
    [&lt;DefaultValue&gt;]
    val mutable name: string
end
let changePerson (person: Person) = 
    person.name &lt;- "Sam"

let mutable tom = Person()
tom.name &lt;- "Tom"
printfn $"Name: {tom.name}"     // Name: Tom
changePerson(tom)				
printfn $"Name: {tom.name}"     // Name: Sam
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


<div class="nav"><p><a href="./3.6.php">Назад</a><a href="./">Содержание</a><a href="./3.8.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 3.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 3.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
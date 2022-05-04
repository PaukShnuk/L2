<!DOCTYPE html>
<html >
<head>
<title>JavaScript | Объекты</title>
<meta charset="utf-8" />
<meta name="description" content="Объекты в JavaScript, определение объектов, их свойства и методы, динамическое добавление и удаление свойств, константные объекты">
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
<h1>Объектно-ориентированное программирование</h1><div class="date">Последнее обновление: 08.09.2021</div>

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

<p>Объектно-ориентированное программирование на сегодняшний день является одной из господствующих парадигм в разработке приложений, и в 
JavaScript мы также можем использовать все преимущества ООП. В то же время применительно к JavaScript объектно-ориентированное программирование 
имеет некоторые особенности.</p>
<h2>Объекты</h2>
<p>В прошлых темах мы работали с примитивными данными - числами, строками, но данные не всегда представляют примитивные типы. Например, если в нашей 
программе нам надо описать сущность человека, у которого есть имя, возраст, пол и так далее, то естественно мы не сможем представить сущность человека в виде 
числа или строки. Нам потребуется несколько строк или чисел, чтобы должным образом описать человека. В этом плане человек будет выступать как сложная комплексная структура, 
у которого будут отдельные свойства - возраст, рост, имя, фамилия и т.д.</p>
<p>Для работы с подобными структурами в JavaScript используются <span class="b">объекты</span>. Каждый объект может хранить свойства, которые описывают его 
<span class="b">состояние</span>, и методы, которые описывают его <span class="b">поведение</span></p>
<h3>Создание нового объекта</h3>
<p>Есть несколько способов создания нового объекта.</p>
<p>Первый способ заключается в использовании конструктора <code>Object</code>:</p>
<pre class="brush:js;">let user = new Object();</pre>
<p>В данном случае объект называется <code>user</code>.</p>
<p>Выражение <code>new Object()</code> представляет вызов конструктора - функции, создающей новый объект. Для вызова конструктора применяется оператор <span class="bb">new</span>. Вызов конструктора фактически 
напоминает вызов обычной функции.</p>
<p>Второй способ создания объекта представляет использование фигурных скобок:</p>
<pre class="brush:js;">let user = {};</pre>
<p>На сегодняшний день более распространенным является второй способ.</p>
<h3>Свойства объекта</h3>
<p>После создания объекта мы можем определить в нем свойства. Чтобы определить свойство, надо после названия объекта через точку указать имя свойства и присвоить ему значение:</p>
<pre class="brush:js;">
let user = {};
user.name = "Tom";
user.age = 26;
</pre>
<p>В данном случае объявляются два свойства <code>name</code> и <code>age</code>, которым присваиваются соответствующие значения. После этого мы можем использовать 
эти свойства, например, вывести их значения в консоли:</p>
<pre class="brush:js;">
console.log(user.name);
console.log(user.age);
</pre>
<p>Также можно определить свойства при определении объекта:</p>
<pre class="brush:js;">
let user = {
 
    name: "Tom",
    age: 26
};
</pre>
<p>В этом случае для присвоения значения свойству используется символ двоеточия, а после определения свойства ставится запятая (а не точка с запятой).</p>
<p>Кроме того, доступен сокращенный способ определения свойств:</p>
<pre class="brush:js;">
let name = "Tom";
let age = 34;
let user = {name, age};
console.log(user.name);		// Tom
console.log(user.age);		// 34
</pre>
<p>В данном случае названия переменных также являются и названиями свойств объекта. И таким образом можно создавать более сложные конструкции:</p>
<pre class="brush:js;">
let name = "Tom";
let age = 34;
let user = {name, age};

let teacher = {user, course: "JavaScript"};
console.log(teacher.user);		// {name: "Tom", age: 34}
console.log(teacher.course);	// JavaScript
</pre>
<h3>Методы объекта</h3>
<p>Методы объекта определяют его поведение или действия, которые он производит. Методы представляют собой функции. Например, определим метод, который бы выводил 
имя и возраст человека:</p>
<pre class="brush:js;">
let user = {};
user.name = "Tom";
user.age = 26;
user.display = function(){
	
	console.log(user.name);
	console.log(user.age);
};

// вызов метода
user.display();
</pre>
<p>Как и в случае с функциями методы сначала определяются, а потом уже вызываются.</p>
<p>Также методы могут определяться непосредственно при определении объекта:</p>
<pre class="brush:js;">
let user = {
 
    name: "Tom",
    age: 26,
    display: function(){
     
        console.log(this.name);
        console.log(this.age);
    }
};
</pre>
<p>Как и в случае со свойствами, методу присваивается ссылка на функцию с помощью знака двоеточия.</p>
<p>Чтобы обратиться к свойствам или методам объекта внутри этого объекта, используется ключевое слово <span class="b">this</span>. Оно означает ссылку на 
текущий объект.</p>
<p>Также можно использовать сокращенный способ определения методов, когда двоеточие и слово function опускаются:</p>
<pre class="brush:js;">
let user = {
 
    name: "Tom",
    age: 26,
    display(){
     
        console.log(this.name, this.age);
    },
	move(place){
		console.log(this.name, "goes to", place);
	}
};
user.display();	// Tom 26
user.move("the shop");	// Tom goes to the shop
</pre>
<h3>Синтаксис массивов</h3>
<p>Существует также альтернативный способ определения свойств и методов с помощью синтаксиса массивов:</p>
<pre class="brush:js;">
let user = {};
user["name"] = "Tom";
user["age"] = 26;
user["display"] = function(){
	
	console.log(user.name);
	console.log(user.age);
};

// вызов метода
user["display"]();
</pre>
<p>Название каждого свойства или метода заключается в кавычки и в квадратные скобки, затем им также присваивается значение. Например, <code>user["age"] = 26</code>.</p>
<p>При обращении к этим свойствам и методам можно использовать либо нотацию точки (<code>user.name</code>), либо обращаться так: <code>user["name"]</code></p>
<p>Также можно определить свойства и методы через синтаксис массивов напрямую при создании объекта:</p>
<pre class="brush:js;">
let user = {
	["name"]: "Tom",
	["age"]: 26,
	["display"]: function(){
     
		console.log(user.name);
		console.log(user.age);
	}
};
user["display"]();
</pre>

<h4>Строки в качестве свойств и методов</h4>
<p>Также следует отметить, что названия свойств и методов объекта всегда представляют строки. То есть мы могли предыдущее определение объекта переписать так:</p>
<pre class="brush:js;">
let user = {
	"name": "Tom",
	"age": 26,
	"display": function(){
	
		console.log(user.name);
		console.log(user.age);
	}
};
// вызов метода
user.display();
</pre>
<p>С одной стороны, разницы никакой нет между двумя определениями. С другой стороны, бывают случаи, где заключение названия в строку могут помочь. Например, 
если название свойства состоит из двух слов, разделенных пробелом:</p>
<pre class="brush:js;">
let user = {
	name: "Tom",
	age: 26,
	"full name": "Tom Johns",
	"display info": function(){
	
		console.log(user.name);
		console.log(user.age);
	}
};
console.log(user["full name"]);
user["display info"]();
</pre>
<p>Только в этом случае для обращении к подобным свойствам и методам мы должны использовать синтаксис массивов.</p>
<h4>Динамическое определение имен свойств и методов</h4>
<p>Синтаксис массивов открывает нам другую возможность - определение имени свойства вне объекта:</p>
<pre class="brush:js;">
const prop1  = "name";
const prop2  = "age";
let tom = { 
	[prop1]: "Tom",
	[prop2]: 37
};
console.log(tom);			// {name: "Tom", age: 37}
console.log(tom.name);		// Tom
console.log(tom["age"]);	// 37
</pre>
<p>Благодая этому, например, можно динамически создавать объекты с произвольными названиями свойств:</p>
<pre class="brush:js;">
function createObject(propName, propValue){
	return {
			[propName]: propValue,
			print(){ 
				console.log(`${propName}: ${propValue}`);
			}
	};
}
let person = createObject("name", "Tom");
person.print();		// name: Tom

let book = createObject("title", "JavaScript Reference");
book.print();	// title: JavaScript Reference
</pre>
<h3>Удаление свойств</h3>
<p>Выше мы посмотрели, как можно динамически добавлять новые свойства к объекту. Однако также мы можем удалять свойства и методы с помощью оператора 
<span class="b">delete</span>. И как и в случае с добавлением мы можем удалять свойства двумя способами. Первый способ - использование нотации точки:</p>
<pre class="brush:js;">delete объект.свойство</pre>
<p>Либо использовать синтаксис массивов:</p>
<pre class="brush:js;">delete объект["свойство"]</pre>
<p>Например, удалим свойство:</p>
<pre class="brush:js;">
let user = {};
user.name = "Tom";
user.age = 26;
user.display = function(){
	
	console.log(user.name);
	console.log(user.age);
};

console.log(user.name); // Tom
delete user.name; // удаляем свойство
// альтернативный вариант
// delete user["name"];
console.log(user.name); // undefined
</pre>
<p>После удаления свойство будет не определено, поэтому при попытке обращения к нему, программа вернет значение undefined.</p>
<h3>Константные объекты</h3>
<p>Возможно, нам поребуется, чтобы объект нельзя было изменить, то есть сделать константным. Однако просто определить его как обычную константу с 
помощью оператора <span class="b">const</span> недостаточно. Например:</p>
<pre class="brush:js;">
const person = {name: "Tom", age: 37};
person.name= "Bob";
console.log(person.name);	// Bob
</pre>
<p>Здесь мы видим, что свойство объекта изменило свое значение, хотя объект определен как константа.</p>
<p>Оператор <code>const</code> лишь влияет на то, что мы не можем присвоить константе новое значение, например, как в следующем случае:</p>
<pre class="brush:js;">
const person = {name: "Tom", age: 37};
person = {name: "Sam", age: 56};	// Ошибка - нельзя константе присвоить значение второй раз
</pre>
<p>Тем не менее значения свойств объекта мы можем изменять.</p>
<p>Чтобы сделать объект действительно константным, необходимо применить специальный метод <span class="b">Object.freeze()</span>. В этот метод в качестве параметра 
передается объект, который надо сделать константным:</p>
<pre class="brush:js;">
const person = {name: "Tom", age: 37};
Object.freeze(person);
person.name= "Bob";
console.log(person.name);	// Tom - значение свойства не изменилось
</pre>
<h3>Создание объекта из переменных и констант</h3>
<p>При создании объекта его свойствам могут передаваться значения переменных, констант или динамически вычисляемые результаты функций:</p>
<pre class="brush:js;">
function getSalary(status){
	if(status==="senior") return 1500;
	else return 500;
}
const name = "Tom";
const age = 37;
const person = { name: name, age: age, salary: getSalary()};

console.log(person);	// {name: "Tom", age: 37, salary: 500}
</pre>
<p>Но если названия констант/переменных совпадает с названиями свойств, то можно сократить передачу значений:</p>
<pre class="brush:js;">
const name = "Tom";
const age = 37;
const salary = 500;
const person = { name, age, salary};

console.log(person);	// {name: "Tom", age: 37, salary: 500}
</pre>
<p>В данном случае объект person автомтически получит свойства, названия которых будут соответствовать названиям констант, а в качестве значений иметь значения этих констант.</p>
<p>То же самое относится к передаче функций методам объекта:</p>
<pre class="brush:js;">
function display(){ 
	console.log(this.name, this.age);
}
const move = function(place){ console.log(this.name, "goes to", place)};
const name = "Tom";
const age = 37;
const salary = 500;
const person = { name, age, salary, display, move};

person.display();		// Tom 37
person.move("cinema");	// Tom goes to cinema
</pre>
<p>В данном случае объект person имеет два метода, которые соответствуют переданным в объект функциям - <code>display()</code> и <code>move()</code>. 
Стоит отметить, что при такой передаче функций методам объекта, мы по прежнему можем использовать в этих функциях ключевое слово <code>this</code> для обращения к функциональности объекта. 
Однако стоит быть осторожным при передаче лямбд-выражений, поскольку для глобальных лямбд-выражений this будет представлять объект окна браузера:</p>
<pre class="brush:js;">
const move = (place)=&gt;{ console.log(this.name, "goes to", place); console.log(this);};
const name = "Tom";

const person = { name, move};
person.move("cinema");	//  goes to cinema
</pre>
<h3>Фукция Object.fromEntries()</h3>
<p>С помощью функции <span class="b">Object.fromEntries()</span> можно создать объект из набора пар ключ-значение, где ключ потом будет представляет название свойства. Например, создадим 
объект из массивов:</p>
<pre class="brush:js;">
const personData = [ ["name", "Tom"], ["age", 37]];
const person = Object.fromEntries(personData);
console.log(person);		// {name: "Tom", age: 37}
console.log(person.name);	 // Tom
</pre>
<p>Здесь объект создается из массива personData, который содержит два подмассива. Каждый подмассив содержит два элемента и фактически представляет пару ключ-значение. 
Первый элемент представляет ключ, а второй - значение.</p>


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


<div class="nav"><p><a href="./3.8.php">Назад</a><a href="./">Содержание</a><a href="./4.2.php">Вперед</a></p></div></div>
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
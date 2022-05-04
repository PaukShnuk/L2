<!DOCTYPE html>
<html >
<head>
<title>TypeScript | Обобщения</title>
<meta charset="utf-8" />
<meta name="description" content="Обобщения generics в TypeScript, строгая типизация, обобщенные функции, классы и интерфейсы, ограничения обобщений, generics constraints">
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
<h2>Обобщения</h2><div class="date">Последнее обновление: 18.05.2021</div>

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

<p>TypeScript является строго типизированным языком, однако иногда надо построить функционал так, чтобы он мог использовать данные любых типов. 
В некоторых случаях мы могли бы использовать тип <code>any</code>:</p>
<pre class="brush:ts;">
function getId(id: any): any {
    
    return id;
}
let result = getId(5);
console.log(result);
</pre>
<p>Однако в этом случае мы не можем использовать результат функции как объект того типа, который передан в функцию. Для нас это тип any. 
Если бы вместо числа 5 в функцию передавался бы объект какого-нибудь класса, и нам потом надо было бы использовать этот объект, например, 
вызывать у него функции, то это было бы проблематично. И чтобы конкретизировать возвращаемый тип, мы можем использовать обобщения:</p>
<pre class="brush:ts;">
function getId&lt;T&gt;(id: T): T {
    
    return id;
}
</pre>
<p>С помощью выражения <code>&lt;T&gt;</code> мы указываем, что функция getId типизирована неким типом T. Причем на момент написания функции мы можем не знать, 
что именно это будет за тип. А при выполнении функции 
вместо Т будет подставляться конкретный тип. Причем на этапе компиляции конкретный тип не известен. И возвращать функция будет объект этого типа. Например:</p>
<pre class="brush:ts;">
function getId&lt;T&gt;(id: T): T {
    
    return id;
}
let result1 = getId&lt;number&gt;(5);
console.log(result1);
let result2 = getId&lt;string&gt;("abc");
console.log(result2);
</pre>
<p>В первом случае вместо параметра T будет испльзоваться тип number, поэтому в функцию мы можем передать число. 
Во втором случае вместо T используется тип string, поэтому во втором случае можно передать строку. 
Таким образом, мы можем передать в функцию объекты различных типов, но при этом сохраняется строгая типизация, каждый вариант обобщенной 
функции может принимать объекты только определенного типа.</p>
<p>Подобным образом еще можно использовать обобщенные массивы:</p>
<pre class="brush:ts;">
function getString&lt;T&gt;(arg: Array&lt;T&gt;): string {
    
	return args.join(", ");
}

let result = getString&lt;number&gt;( [1, 2, 34, 5]);
console.log(result);
</pre>
<p>В данном случае вне зависимости от типа данных, переданных в массиве, все его элементы соединятся в одну общую строку.</p>
<h3>Обобщенные классы и интерфейсы</h3>
<p>Кроме обобщенных функций и массивов  также бывают обобщенные классы и интерфейсы:</p>
<pre class="brush:ts;">
class User&lt;T&gt; {

    private _id: T;
    constructor(id:T) {

        this._id=id;
    }
    getId(): T {

        return this._id;
    }
}

let tom = new User&lt;number&gt;(3);
console.log(tom.getId()); // возвращает number

let alice = new User&lt;string&gt;("vsf");
console.log(alice.getId()); // возвращает string
</pre>
<p>Только в данном случае надо учитывать, что если мы типизировали объект определенным типом, то сменить данный тип уже не получится. 
То есть в следующем случае второе создание объекта не будет работать, так как объект tom уже типизирован типом number:</p>
<pre class="brush:ts;">
let tom = new User&lt;number&gt;(3);
console.log(tom.getId());
tom = new User&lt;string&gt;("vsf"); // ошибка
</pre>
<p>Все то же самое и с интерфейсами:</p>
<pre class="brush:ts;">
interface IUser&lt;T&gt; {

    getId(): T;
}

class User&lt;T&gt; implements IUser&lt;T&gt; {

    private _id: T;
    constructor(id:T) {

        this._id=id;
    }
    getId(): T {

        return this._id;
    }
}
</pre>
<h3>Ограничения обобщений</h3>
<p>Обобщения позволяют работать с любым типом данных. Однако иногда возникает необходимость использовать не любой тип, а только некоторый набор типов, 
который соответствует некоторым критериям. Например, возьмем следующую функцию:</p>
<pre class="brush:ts;">
function compareName&lt;T&gt;(obj1: T, obj2: T): void{
	
	if(obj1.name === obj2.name){
		console.log("Имена совпадают");
	}
	else{
		console.log("Имена различаются");
	}

}
</pre>
<p>Функция принимает два объекта, тип которых неизвестен. В коде функции сравниваются значения полей <code>name</code> этих объектов.</p>
<p>Попробуем с помощью этой функции сравнить два объекта, которые имеют свойство <code>name</code>:</p>
<pre class="brush:ts;">
let tom: {name:string} = {name: "Tom"};
let sam: {name: string} = {name: "Sam"};
compareName&lt;{name:string}&gt;(tom, sam);
</pre>
<p>Здесь сравниваются два объекта: tom и sam, которые имеют одини и тот же тип <code>{name:string}</code>. То есть оба объекта имеют свойство 
<code>name</code>.</p>
<p>При вызове функция <code>compareName()</code> типизируется этим типом - <code>{name:string}</code>. Казалось бы, никаких проблем не должно возникнуть. Тем не менее 
при компиляции мы получим ошибку:</p>
<div class="console"><pre class="consoletext">Property 'name' does not exist on type 'T'</pre></div>
<p>Использование обобщений, которые подходят под любой тип, расширяют набор используемых типов, однако ограничивает их применение.</p>
<p>Ограничения или <span class="b">constraints</span> позволяют ограничить набор типов, которые могут использоваться в обобщениях. Ограничения задаются в форме</p>
<pre class="brush:ts;">&lt;T extends критерий_типов&gt;</pre>
<p>После названия параметра (в данном случае "T") идет ключевое слово <span class="b">extends</span>, после которого указывается критерий, которому должны 
соответствовать типы данных, передаваемые вместо параметра "T".</p>
<p>Например, в случае с функцией <code>compareName()</code> в примере выше типы должны иметь свойство <code>name</code>. Поэтому перепишим функцию следующим образом:</p>
<pre class="brush:ts;">
function compareName&lt;T extends {name:string}&gt;(obj1: T, obj2: T): void{
	
	if(obj1.name === obj2.name){
		console.log("Имена совпадают");
	}
	else{
		console.log("Имена различаются");
	}

}

let tom: {name:string} = {name: "Tom"};
let sam: {name: string} = {name: "Sam"};
compareName&lt;{name:string}&gt;(tom, sam);
</pre>
<p>Запись <code>&lt;T extends {name:string}&gt;</code> означает, что параметр T должен представлять такой тип, который содержит свойство <code>name</code>, как в случае выше 
два объекта tom и sam.</p>
<p>Причем параметр T необязательно должен представлять именно тип <code>{name:string}</code>. Например:</p>
<pre class="brush:ts;">
function compareName&lt;T extends {name:string}&gt;(obj1: T, obj2: T): void{
	
	if(obj1.name === obj2.name){
		console.log("Имена совпадают");
	}
	else{
		console.log("Имена различаются");
	}

}

class User{ 
	constructor(public name: string, public age: number){}
}
let bob = new User("Bob", 38);
let bobic = new User("Bob", 24);
compareName&lt;User&gt;(bob, bobic);

type Person = {id:number; name:string};
let tom: Person = {id:1, name: "Tom"};
let sam: Person = {id: 2, name: "Sam"};
compareName&lt;Person&gt;(tom, sam);
</pre>
<p>Здесь в первом вызове функция <code>compareName()</code> типизируется классом User, то есть передаваемые в нее объекты должны представлять класс User. При втором вызове 
функция типизируется типом <code>Person</code>, который представляет объект <code>{id:number; name:string}</code>. Но и <code>User</code> и <code>Person</code> объединяет то, 
что они имеют свойство <code>name</code> и поэтому соответствуют ограничению <code>{name: string}</code>.</p>
<p>Причем в качестве типа могут использоваться любые типы, например, интерфейсы:</p>
<pre class="brush:ts;">
interface Named{
	name: string;
}
function compareName&lt;T extends Named&gt;(obj1: T, obj2: T): void{
	
	if(obj1.name === obj2.name){
		console.log("Имена совпадают");
	}
	else{
		console.log("Имена различаются");
	}
}
</pre>
<p>Подобным образом ограничения обобщений можно применять в интерфейсах и классах:</p>
<pre class="brush:ts;">
interface Named{
	name: string;
}
class NameInfo&lt;T extends Named&gt;{

    printName(obj: T): void{

        console.log(`Name: ${obj.name}`);
    }
}

class User{ 
	constructor(public name: string, public age: number){}
}
let bob = new User("Bob", 38);
let nameInfo1 = new NameInfo&lt;User&gt;();
nameInfo1.printName(bob);

type Person = {id:number; name:string}
let tom: Person = {id:1, name: "Tom"};
let nameInfo2 = new NameInfo&lt;Person&gt;();
nameInfo2.printName(tom);
</pre>
<p>В данном случае класс <code>NameInfo</code> применяет параметр типа T, который ограничивается интерфейсом <code>Named</code>.</p>
<p>И в этом случае мы можем типизировать объекты класса <code>NameInfo</code> любым типом, который имеет свойство <code>name</code>, как в данном случае классом User или 
типом Person.</p>
<h3>Ключевое слово new</h3>
<p>Чтобы создать новый объект в коде обобщений, нам надо указать, что обобщенный тип T имеет конструктор. Это означает, что 
вместо параметра <code>type:T</code> нам надо указать <code>type: {new(): T;}</code>. Например, следующий обобщенный интерфейс работать не будет:</p>
<pre class="brush:ts;">
function UserFactory&lt;T&gt;(): T {
    return new T(); // ошибка компиляции
}
</pre>
<p>Чтобы интерфейс начал работать, используем слово <code>new</code>:</p>
<pre class="brush:ts;">
function userFactory&lt;T&gt;(type: { new (): T; }): T {
    
    return new type();
}


class User {

    constructor() {
        console.log("создан объект User");
    }
}

let user : User = userFactory(User);
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


<div class="nav"><p><a href="./3.4.php">Назад</a><a href="./">Содержание</a><a href="./3.7.php">Вперед</a></p></div></div>
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
				<li class="closed"><span class="folder">Глава 1. Введение в TypeScript</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/1.1.php">Что такое TypeScript</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/1.2.php">Установка и компиляция из командной строки</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/1.3.php">Первое приложение TypeScript в Visual Studio</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/1.4.php">Настройки компиляции</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/1.5.php">Файл конфигурации tsconfig.json</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 2. Основы TypeScript</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.1.php">Переменные и константы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.6.php">Параметры компиляции noEmitOnError и target</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.5.php">Типы данных</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.2.php">Функции</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.3.php">Тип функции и стрелочные функции</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.13.php">Объединения union</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.8.php">Null и undefined</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.7.php">Объекты</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.14.php">Псевдонимы типов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.4.php">Type assertion. Преобразование к типу</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.9.php">Массивы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.10.php">Кортежи</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.12.php">Неопределенный набор и наполнение параметров функции</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/2.11.php">Перечисление enum</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 3. Объектно-ориентированное программирование</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.1.php">Классы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.2.php">Наследование.</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.12.php">Абстрактные классы, методы и поля</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.4.php">Модификаторы доступа</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.10.php">Методы доступа get и set</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.13.php">Статические поля и методы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.3.php">Интерфейсы</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.9.php">Преобразование типов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.5.php">Обобщения</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.7.php">Миксины</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 4. Модули и пространства имен</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.6.php">Пространства имен</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.11.php">Создание и подключение модулей</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/3.8.php">Работа с модулями</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 5. Заголовочные файлы</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/4.1.php">Работа с заголовочными файлами</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/4.2.php">Заголовочные файлы для популярных библиотек</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 6. Декораторы</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/web/typescript/6.1.php">Декораторы классов</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/6.2.php">Декораторы методов и их параметров</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/6.3.php">Декораторы свойств и методов доступа</a></span></li>
						<li><span class="file"><a href="//metanit.com/web/typescript/6.4.php">Фабрики декораторов</a></span></li>
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
<!DOCTYPE html>
<html >
<head>
<title>TypeScript | Интерфейсы</title>
<meta charset="utf-8" />
<meta name="description" content="Интерфейсы в TypeScript, их определение и реализация в классах, индексаторы">
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
<h2>Интерфейсы</h2><div class="date">Последнее обновление: 17.05.2021</div>

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

<h3>Интерфейсы объектов</h3>
<p>Интерфейс определяет свойства и методы, которые объект должен реализовать. Другими словами, интерфейс - это определение кастомного типа данных, 
но без реализации. В данном случае интерфейсы в TS похожи на интерфейсы в языках Java и C#. Интерфейсы определяются с помощью ключевого 
слова <span class="b">interface</span>. Для начала определим простенький интерфейс:</p>
<pre class="brush:ts;">
interface IUser {
    id: number;
    name: string;
}
</pre>
<p>Интерфейс в фигурных скобках определяет два свойства: id, которое имеет тип number, и name, которая представляет строку. Теперь используем 
его в программе:</p>
<pre class="brush:ts;">
let employee: IUser = {
    
    id: 1, 
    name: "Tom"
}
console.log("id: ", employee.id);
console.log("name: ", employee.name);
</pre>
<p>По сути <code>employee</code> - обычный объект за тем исключением, что он имеет тип <code>IUser</code>. Если правильнее говорить, 
то employee реализует интерфейс IUser. Причем эта реализация накладывает на employee некоторые ограничения. Так, employee должен 
реализовать все свойства и методы интерфейса IUser, поэтому при определении employee данный объект обязательно должен включать в себя 
свойства id и name.</p>
<p>Параметры методов и функций также могут представлять интерфейсы:</p>
<pre class="brush:ts;">
interface IUser {
    id: number;
    name: string;
}
let employee: IUser = {
    
    id: 1, 
    name: "Alice"
}

function printUser(user: IUser): void {

    console.log("id: ", user.id);
    console.log("name: ",  user.name)
}

printUser(employee);
</pre>
<p>В этом случае аргумент, который передается в функцию, должен представлять объект или класс, который реализует соответствующий интерфейс.</p>
<p>И также можно возвращать объекты интерфейса:</p>
<pre class="brush:ts;">
interface IUser {
    id: number;
    name: string;
}
function buildUser(userId: number, userName: string): IUser {

    return { id: userId, name: userName };
}

let newUser = buildUser(2, "Bill");
console.log("id: ", newUser.id);
console.log("name: ", newUser.name);
</pre>

<h3>Необязательные свойства и свойства только для чтения</h3>
<p>При определении интерфейса мы можем задать некоторые свойства как необязательные с помощью знака вопроса. Подобные свойства реализовать необязательно:</p>
<pre class="brush:ts;">
interface IUser {
    id: number;
    name: string;
    age?: number;
}
let employee: IUser = {
    
    id: 1, 
    name: "Alice",
    age: 23
}
let manager: IUser = {
    
    id: 2, 
    name: "Tom"
}
</pre>
<p>Свойство <code>age</code> помечено как необязательное, поэтому его можно не определять в объектах.</p>
<p>Также интерфейс может содержать свойства только для чтения, значение которых нельзя изменять. Такие свойства определяются с помощью 
ключевого слова <span class="b">readonly</span>:</p>
<pre class="brush:ts;">
interface Point {
    readonly x: number;
    readonly y: number;
}
let p: Point = { x: 10, y: 20 };
console.log(p);
// p.x = 5; // Ошибка - свойство доступно только для чтения
</pre>
<h3>Определение методов</h3>
<p>Кроме свойств интерфейсы могут определять функции:</p>
<pre class="brush:ts;">
interface IUser {
    id: number;
    name: string;
    sayWords(words: string): void;
}
let employee: IUser = {
     
    id: 1, 
    name: "Alice",
    sayWords: function(words: string): void{
		console.log(`${name} говорит "${words}"`);
	}
}
 
employee.sayWords("Привет, как дела?");
</pre>
<p>Опять же объект, который реализует интерфейс, также обязан реализовать определенную в интерфейсе функцию с тем же набором параметров и 
тем типом выходного результата. В данном случае функция <code>sayWords()</code> в качестве параметра принимает строку и ничего возвращает, 
выводя на консоль некоторое сообщение.</p>
<h3>Интерфейсы классов</h3>
<p>Интерфейсы могут быть реализованы не только объектами, но и классами. Для этого используется ключевое слово <span class="b">implements</span>:</p>
<pre class="brush:ts;">
interface IUser {
    id: number;
    name: string;
    getFullName(surname: string): string;
}

class User implements IUser{

    id: number;
    name: string;
    age: number;
    constructor(userId: number, userName: string, userAge: number) {

        this.id = userId;
        this.name = userName;
        this.age = userAge;
    }
    getFullName(surname: string): string {

        return this.name + " " + surname;
    }
}

let tom = new User(1, "Tom", 23);
console.log(tom.getFullName("Simpson"));
</pre>
<p>Класс User реализует интерфейс IUser. В этом случае класс User обязан определить все те же свойства и функции, которые есть в IUser.</p>
<p>При этом объект <code>tom</code> является как объектом User, так и объектом IUser:</p>
<pre class="brush:ts;">
let tom :IUser = new User(1, "Tom", 23);
//или
let tom :User = new User(1, "Tom", 23);
</pre>
<h3>Расширение интерфейса</h3>
<p>TypeScript позволяет добавлять в интерфейс новые поля и методы, просто объявив интерфейс с тем же именем и определив в нем необходимые поля и методы. 
Например:</p>
<pre class="brush:ts;">
interface IUser {
    id: number;
    name: string;
}
interface IUser{
	age: number;
}
let employee: IUser = {
    
    id: 1, 
    name: "Alice",
	age: 31
}

function printUser(user: IUser): void {

    console.log(`id: ${user.id}  name: ${user.name}  age: ${user.age}`);
}

printUser(employee);
</pre>
<p>В данном случае первое определение интерфейса <code>IUser</code> содержит поля <code>id</code> и <code>name</code>. Второе определение интерфейса 
содержит объявление поля <code>age</code>. В итоге объект или класс, который реализует этот интерфейс, должен определить все три поля - id, name и age.</p>
<h3>Наследование интерфейсов</h3>
<p>Интерфейсы, как и классы, могут наследоваться:</p>
<pre class="brush:ts;">
interface IMovable {

    speed: number;
    move(): void;
}
interface ICar extends IMovable {

    fill(): void;
}
class Car implements ICar {

    speed: number;
    move(): void {

        console.log("Машина едет со скоростью " + this.speed + " км/ч");
    }

    fill(): void {

        console.log("Заправляем машину топливом");
    }
}

let auto = new Car();
auto.speed = 60;
auto.fill();
auto.move();
</pre>
<p>После наследования интерфейс ICar будет также иметь все те свойства и функции, которые определены в IMovable. И тогда, класс Car, 
реализующий интерфейс ICar, должен будет реализовать также и свойства и методы интерфейса IMovable.</p>
<h3>Интерфейсы функций</h3>
<p>Интерфейсы функций содержат определение типа функции. Затем они должны быть реализованы объектом, который представляет функцию данного типа:</p>
<pre class="brush:ts;">
interface FullNameBuilder {
    (name: string, surname: string): string;
}

let simpleBuilder: FullNameBuilder = function (name:string, surname: string): string {
        return "Mr. " + name + " " + surname;
}

let fullName = simpleBuilder("Bob", "Simpson");
console.log(fullName); // Mr. Bob Simpson
</pre>
<p>Здесь определен интерфейс FullNameBuilder, который лишь содержит сигнатуру функции. Далее определяется переменная 
simpleBuilder, которая имеет тип FullNameBuilder и поэтому должна представлять функцию с данной сигнатурой.</p>
<h3>Интерфейсы массивов</h3>
<p>Интерфейсы массивов описывают объекты, к которым можно обращаться по индексу, как, например, к массивам</p>
<pre class="brush:ts;">
interface StringArray {
    [index: number]: string;
}

let phones: StringArray;
phones = ["iPhone 7", "HTC 10", "HP Elite x3"];

let myPhone: string = phones[0];
console.log(myPhone);
</pre>
<p>Здесь определен интерфейс StringArray, который содержит сигнатуру массива. Эта сигнатура указывает, что объект, который реализует StringArray, 
может индексироваться с помощью чисел (объекта типа number). И, кроме того, данный объект должен хранить объекты типа <code>string</code>, то есть строки.</p>
<p>Выше индекс представлял тип number. Но мы можем использовать для индексации и тип string:</p>
<pre class="brush:ts;">
interface Dictionary {
    [index: string]: string;
}

var colors: Dictionary = {};
colors["red"] = "#ff0000";
colors["green"] = "#00ff00";
colors["blue"] = "#0000ff";

console.log(colors["red"]);
</pre>
<h3>Гибридные интерфейсы</h3>
<p>Интерфейсы могут сочетать различные стили, могут применяться сразу как к определению объекта, так и к определению функции:</p>
<pre class="brush:ts;">
interface PersonInfo {
    (name: string, surname: string):void;
    fullName: string;
    password: string;
    authenticate(): void;
}

function personBuilder(): PersonInfo {

    let person = &lt;PersonInfo&gt;function (name: string, surname: string): void{
        person.fullName = name + " " + surname;
    };
    person.authenticate = function () {
        console.log(person.fullName + " входит в систему с паролем " + person.password);
    };
    return person;
}

let tom = personBuilder();
tom("Tom", "Simpson");
tom.password = "qwerty"; 
tom.authenticate();
</pre>
<p>Тип функции, определяемый в таком гибридном интерфейсе, как правило, выступает в роли конструктора объекта. В данном случае такой конструктор имеет 
тип <code>(name: string, surname: string):void;</code>.</p>
<p>А функция, которая представляет данный интерфейс (в данном случае - функция <code>personBuilder</code>), реализует эту функцию конструктора, и также может использовать другие 
свойства и методы, которые были определены в интерфейсе.</p>
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


<div class="nav"><p><a href="./3.13.php">Назад</a><a href="./">Содержание</a><a href="./3.9.php">Вперед</a></p></div></div>
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
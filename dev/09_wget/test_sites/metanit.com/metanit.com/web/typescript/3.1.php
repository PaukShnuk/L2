<!DOCTYPE html>
<html >
<head>
<title>TypeScript | Классы и объекты</title>
<meta charset="utf-8" />
<meta name="description" content="Объектно-ориентированное программирование в TypeScript, определение и использование классов, конструкторы классов, статические переменныеиметоды и ключевое слово static">
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
<h1>Объектно-ориентированное программирование</h1><h2>Классы</h2><div class="date">Последнее обновление: 15.05.2021</div>

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

<p>TypeScript реализует объектно-ориентированный подход, в нем есть полноценная поддержка классов. Класс представляет шаблон 
для создания объектов и инкапсулирует функциональность, которую должен иметь объект. Класс определяет состояние и поведение, которыми обладает объект.</p>
<p>Для определения нового класса применяется ключевое слово <code>class</code>. Например, определим класс User:</p>
<pre class="brush:ts;">
class User {}
</pre>
<p>После определения класса мы можем создавать его объекты:</p>
<pre class="brush:ts;">
let tom: User = new User();
let alice = new User();
</pre>
<p>Здесь определено два объекта класса User - tom и alice.</p>
<h3>Поля класса</h3>
<p>Для хранения состояния объекта в классе определяются поля:</p>
<pre class="brush:ts;">
class User {
 
    name: string;
    age: number;
}
</pre>
<p>Здесь определены два поля - <code>name</code> и <code>age</code>, которые имеют типы <code>string</code> и <code>number</code> соответственно. 
Фактически поля представляют переменные уровня класса, только для их объявления не применяются <code>var</code> и <code>let</code>.</p>
<p>По имени объекта мы можем обращаться к этим полям:</p>
<pre class="brush:ts;">
class User {
 
    name: string;
    age: number;
}

let tom = new User();
tom.name = "Tom";
tom.age = 36;
console.log(`name: ${tom.name}  age: ${tom.age}`);	// name: Tom  age: 36
</pre>
<p>При определении полей им можно задать некоторые начальные значения:</p>
<pre class="brush:ts;">
class User {
 
    name: string = "Tom Smith";
    age: number = 18;
}

let user = new User();
console.log(`name: ${user.name}  age: ${user.age}`);	// name: Tom Smith  age: 18
</pre>
<h3>Методы</h3>
<p>Классы также могут определять поведение - некоторые действия, которые должны выполнять объекты этого класса. Для этого внутри класса определяются 
функции, которые называются методами.</p>
<pre class="brush:ts;">
class User {
 
    name: string;
    age: number;
	print(){
        console.log(`name: ${this.name}  age: ${this.age}`);
    }
	toString(): string{
		return `${this.name}: ${this.age}`;
	}
}
</pre>
<p>Здесь в классе User определены два метода. Метод <code>print()</code> выводит информацию об объекте на консоль, а метод <code>toString()</code> возвращает 
некоторое представление объекта в виде строки.</p>
<p>В отличие от обычных функций для определения методов не указывается ключевое слово <code>function</code>.</p>
<p>Для обращения внутри методов к полям и другим методам класса применяется ключевое слово <span class="b">this</code>, которое указывает на текущий объект этого класса.</p>
<p>Применение методов:</p>
<pre class="brush:ts;">
class User {
 
    name: string;
    age: number;
	print(){
        console.log(`name: ${this.name}  age: ${this.age}`);
    }
	toString(): string{
		return `${this.name}: ${this.age}`;
	}
}

let tom = new User();
tom.name = "Tom";
tom.age = 36;
tom.print();					// name: Tom  age: 36

console.log(tom.toString());	// Tom: 36
</pre>
<h3>Конструкторы</h3>
<p>Кроме обычных методов классы имеют специальные функции - конструкторы, которые определяются с помощью ключевого слова 
<span class="b">constructor</span>. Конструкторы выполняют начальную инициализацию объекта. Например, добавим в класс User конструктор:</p>
<pre class="brush:ts;">
class User {
 
    name: string;
    age: number;
	constructor(userName: string, userAge: number) {

        this.name = userName;
		this.age = userAge;
    }
	print(){
        console.log(`name: ${this.name}  age: ${this.age}`);
    }
}

let tom = new User("Tom", 36);
tom.print();		// name: Tom  age: 36
</pre>
<p>Здесь конструктор применимает два параметра и использует их значения для установки значения полей name и age:</p>
<pre class="brush:ts;">
constructor(userName: string, userAge: number) {
	this.name = userName;
	this.age = userAge;
}
</pre>
<p>Затем при создании объекта в конструктор передается два значения для его параметров:</p>
<pre class="brush:ts;">let tom = new User("Tom", 36);</pre>
<h3>Поля для чтения</h3>
<p>Полям класса в процессе работы программы можно присваивать различные значения, которые соответствуют типу полей. Однако TypeScript также позволяет 
определять поля для чтения, значения которых нельзя изменить (кроме как в конструкторе). 
Для определения таких полей применяется ключевое слово <span class="b">readonly</span>:</p>
<pre class="brush:ts;">
class User {
 
    readonly name: string = "Default user";
    age: number;
	constructor(userName: string, userAge: number) {

        this.name = userName;
		this.age = userAge;
    }
	print(){
        console.log(`name: ${this.name}  age: ${this.age}`);
    }
}
</pre>
<p>Значение полей для чтения можно установить либо при объявлении:</p>
<pre class="brush:ts;">readonly name: string = "Default user";</pre>
<p>Либо в конструкторе:</p>
<pre class="brush:ts;">
constructor(userName: string, userAge: number) {

	this.name = userName;
	this.age = userAge;
}
</pre>
<p>В остальных местах программы значение этого поля нельзя изменить. Например, в следующем случае мы получим при компиляции ошибку, 
потому что пытаемся установить поле для чтения:</p>
<pre class="brush:ts;">
class User {
 
    readonly name: string = "Default user";
    age: number;
	constructor(userName: string, userAge: number) {

        this.name = userName;
		this.age = userAge;
    }
	print(){
        console.log(`name: ${this.name}  age: ${this.age}`);
    }
}

let tom = new User("Tom", 36);
tom.name = "Bob";		// ! Ошибка - поле name - только для чтения
tom.print();					// name: Tom  age: 36
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


<div class="nav"><p><a href="./2.11.php">Назад</a><a href="./">Содержание</a><a href="./3.2.php">Вперед</a></p></div></div>
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
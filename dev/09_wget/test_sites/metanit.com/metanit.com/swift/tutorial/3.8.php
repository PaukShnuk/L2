<!DOCTYPE html>
<html >
<head>
<title>Swift | Перечисления</title>
<meta charset="utf-8" />
<meta name="description" content="Перечисления enum в языке программирования Swift, ассоциированные и чистые значения перечислений, методы в перечислениях">
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
<h2>Перечисления</h2><div class="date">Последнее обновление: 02.01.2018</div>

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

<p>Перечисление (enumeration) определяет общий тип для группы связанных значений. Причем сами объединенные в перечисление значения могут представлять любой тип - 
число, строку и так далее.</p>
<p>Для создания перечисления используется ключевое слово <span class="b">enum</span>:</p>
<pre class="brush:c#;">
enum Season{

	case Winter
	case Spring
	case Summer
	case Autumn
}
</pre>
<p>Каждое отдельное значение в перечислении указывается после оператора <span class="b">case</span>. В данном случае перечисление называется Season 
и представляет времена года и имеет четыре значения. То есть фактически Season представляет новый тип данных.</p>
<p>Также допустима сокращенная форма перечисления значений:</p>
<pre class="brush:c#;">
enum Season{

	case Winter, Spring, Summer, Autumn
}
</pre>
<p>После определения перечисления мы сможем его использовать в программе:</p>
<pre class="brush:c#;">
var currentSeason = Season.Spring
</pre>
<p>Здесь переменная <code>currentSeason</code> представляет тип <code>Season</code>. Впоследствии мы можем присвоить этой переменной другое значение из 
Season:</p>
<pre class="brush:c#;">
var currentSeason = .Summer
</pre>
<p>Либо  мы можем сначала определить переменную / константу типа перечисления, а потом ее инициализировать:</p>
<pre class="brush:c#;">
let lastSeason: Season
lastSeason = Season.Winter
</pre>
<p>С помощью конструкции <code>switch</code> можно узнать, какое значение содержит переменная / константа, представляющая перечисление:</p>
<pre class="brush:c#;">
enum Season{

	case Winter, Spring, Summer, Autumn
}

let currentSeason = Season.Spring

switch(currentSeason){

case .Winter:
	print("Зима")
case .Spring:
	print("Весна")
case .Summer:
	print("Лето")
case .Autumn:
	print("Осень")
}
</pre>
<h3>Ассоциированные значения</h3>
<p>С каждым значением в перечислении мы можем ассоциировать какое-либо другое значения, которое может представлять любой тип. При этом ассоциированные значения 
для разных значений одного и того же перечисления могут представлять различные типы.</p>
<p>Итак, пусть у нас перечисление представляет игрового персонажа:</p>
<pre class="brush:c#;">
enum Person{
	
	case Human(String, Int)
	case Elf(String)
}
</pre>
<p>Здесь перечисление определяет два возможных значения - двух игровых персонажей: человека (Human) и эльфа (Elf). Однако у человека мы можем задать 
два парамета: имя (String) и количество жизней (Int). А у эльфа нам нужен только один параметр - имя (String).</p>
<p>То есть в данном случае значение Person.Human будет ассоциировано с двумя значениями String и Int, а значение Person.Elf - с одним значением типа String:</p>
<pre class="brush:c#;">
var hero = Person.Human("Trogvar", 5)
hero = Person.Elf("Feonor")
</pre>
<p>С помощью конструкции switch мы также можем определить значение объекта:</p>
<pre class="brush:c#;">
switch(hero){
	case .Human: 
		print("Вы играете человеком")
	case .Elf:
		print("Вы играете эльфом")
	case .Gnom:
		print("Вы играете гномом")
}
</pre>
<p>Но при необходимости мы также можем получить ассоциированные значения:</p>
<pre class="brush:c#;">
switch(hero){
	case .Human (let name, let lives): 
		print("Вы играете человеком. Имя: \(name), количество жизней: \(lives)")
	case .Elf (let name):
		print("Вы играете эльфом. Имя: \(name)")
	case .Gnom:
		print("Вы играете гномом")
}
</pre>
<p>Для получения значений мы можем определить константы или переменные, в которые будут передаваться ассоциированные значения.</p>
<h3>Чистые значения перечислений</h3>
<p>Кроме ассоциированных значений члены перечисления могут иметь чистые значения (raw values). Например, пусть у нас есть перечисление, 
представляющее флагманы различных производителей:</p>
<pre class="brush:c#;">
enum Flagman: String{
	case Samsung = "Galaxy S9"
	case Apple = "iPhone X"
	case Microsoft = "Lumia 950"
	case Google = "Pixel 2"
}
</pre>
<p>При определении чистых значений нам надо указать их тип. В данном случае типом будет выступать тип String. Затем в программе мы сможем получить 
эти чистые значения с помощью свойства <span class="b">rawValue</span>:</p>
<pre class="brush:c#;">
var myPhone = Flagman.Apple
print(myPhone)	// Apple
print(myPhone.rawValue)	// iPhone X
</pre>
<p>Если мы укажем тип прямых значений, но не укажем эти самые значения, то swift использует значения по умолчанию.</p>
<p>Если тип - String, то чистые значения будут представлять строковое представление элементов перечисления:</p>
<pre class="brush:c#;">
enum Flagman: String{
	
	case Samsung, Apple, Microsoft, Google
}
var myPhone = Flagman.Apple
print(myPhone)	// Apple
print(myPhone.rawValue)	// Apple
</pre>
<p>Фактически будет совпадение между значениями перечисления и их чистыми значениями.</p>
<p>Если типом для чистых значений является тип Int, то элементы перечисления получат значения по порядку:</p>
<pre class="brush:c#;">
enum DayOfWeek: Int{
	
	case Monday=1, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday
}

var currentDay = DayOfWeek.Wednesday
print(currentDay)	// Wednesday
print(currentDay.rawValue)	// 3
</pre>
<p>Первый элемент перечисления <code>Monday=1</code> задает начальное значение для элементов перечисления. Если же мы не укажем его, то начальным значением будет 0.</p>
<p>Используя чистое значение, мы можем получить элемент перечисления:</p>
<pre class="brush:c#;">
enum DayOfWeek: Int{
	
	case Monday=1, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday
}

var currentDay = DayOfWeek(rawValue: 7)	// Optional(DayOfWeek.Sunday)
print(currentDay!)
</pre>
<p>В данном случае мы пытаемся получить элемент перечисления, который имеет чистое значение 7. Но данная операция возвращает не просто 
элемент перечисления, а объект Optional, то есть такой объект, который может иметь конкретное значение, а может иметь значение nil (отсутствие значения).</p>
<p>И если мы попытаемся получить, например, элемент с чистым значением 8, то мы получим nil. Поэтому мы можем применять условное выражение if 
для проверки полученного значения перед его использованием:</p>
<pre class="brush:c#;">
if let day = DayOfWeek(rawValue: 8){
	
	print(day)
}
</pre>
<h3>Методы перечислений</h3>
<p>Как классы и структуры, перечисления могут определять методы. Например:</p>
<pre class="brush:c#;">
enum DayOfWeek: Int{
	
	case Monday=1, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday
	
	func getCurrentDay() -&gt; String{
		
		return DayOfWeek.getDay(number: rawValue)
	}
	
	static func getDay(number: Int) -&gt; String{
		
		switch number{
			
			case 1:
				return "Понедельник"
			case 2:
				return "Вторник"
			case 3:
				return "Среда"
			case 4:
				return "Четверг"
			case 5:
				return "Пятница"
			case 6:
				return "Суббота"
			case 7:
				return "Воскресенье"
			default:
				return "undefined"
		}
	}
}

var someDay: DayOfWeek = DayOfWeek.Sunday
someDay.getCurrentDay()	// Воскресенье
var secondDay = DayOfWeek.getDay(number: 2)	// Вторник
</pre>
<h3>Свойства перечислений</h3>
<p>Перечисления также могут иметь свойства, но это не могут быть хранимые свойства. А вычисляемые свойства вполне будут работать:</p>
<pre class="brush:swift;">
enum DayOfWeek: Int{
    
    case Monday=1, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday
    
    var label : String {
        switch self {
            case .Monday: return "Понедельник"
            case .Tuesday: return "Вторник"
            case .Wednesday: return "Среда"
            case .Thursday: return "Четверг"
            case .Friday: return "Пятница"
            case .Saturday: return "Суббота"
            case .Sunday: return "Воскресенье"
        }
    }
}
let day1 = DayOfWeek.Monday
print(day1.label)               // Понедельник
print(DayOfWeek.Friday.label)   // Пятница
</pre>
<p>В данном случае свойство label автоматически вычисляется на основании значения текущего объекта перечисления. Текущий 
объект перечисления можно получить с помощью ключевого слова <span class="b">self</span>.</p>
<h3>Инициализаторы в перечислениях</h3>
<p>И также перечисления могут иметь иниицализаторы:</p>
<pre class="brush:swift;">
enum DayOfWeek: Int{
    
    case Monday=1, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday
    init?(_ val:String) {
        
        switch val {
        case "Понедельник"  : self = .Monday
        case "Вторник": self = .Tuesday
        case "Среда": self = .Wednesday
        case "Четверг": self = .Thursday
        case "Пятница": self = .Friday
        case "Суббота": self = .Saturday
        case "Воскресенье": self = .Sunday
        case _ : return nil
        }
    }
}
let day1 = DayOfWeek("Пятница")
print(day1!.rawValue)               //  5
</pre>
<p>В данном случае инициализатор принимает название дня недели и на его основании устанавливает значение текущего объекта. 
Если переданное название не распознано, то инициализатор возвращает nil.</p>
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


<div class="nav"><p><a href="3.7.php">Назад</a><a href="./">Содержание</a><a href="3.9.php">Вперед</a></p></div></div>
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
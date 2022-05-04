<!DOCTYPE html>
<html >
<head>
<title>Rust | Паттерны и конструкция match</title>
<meta charset="utf-8" />
<meta name="description" content="Паттерны и конструкция match в языке программирования Rust, оператор .., определение шаблонов, переменные в паттернах">
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
<h2>Паттерны и конструкция match</h2><div class="date">Последнее обновление: 06.05.2021</div>

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

<p>Паттерны представляют шаблоны, с которыми сравнивается некоторое значение. Например, возьмем конструкцию <span class="b">match</span>. Ее формальное определение:</p>
<pre class="brush:rs;">
match значение{
	паттерн1 =&gt; действия1,
	паттерн2 =&gt; действия2,
	паттерн3 =&gt; действия3
}
</pre>
<p>Оператор <code>match</code> принимает некоторое значение и сравнивает его с набором паттернов. Если значение соответствует одному из паттернов, то 
выполняются действия, предусмотренные для данного паттерна.</p>
<p>Возьмем простейший пример:</p>
<pre class="brush:rs;">
fn main(){
     
     let n = 2;

    match n {
        1 =&gt; println!("один"),
        2 =&gt; println!("два"),
        3 =&gt; println!("три"),
        _ =&gt; println!("непонятно")
    }
}
</pre>
<p>Здесь значение переменной <code>n</code> сравнивается с набором паттернов, в качестве которых выступают обычные числа. В данном случае n = 2, поэтому это 
значение соответствует паттерну "2", следовательно будет выполняться выражение <code>println!("два")</code>.</p>
<p>Однако паттерны необязательно должны представлять отдельные значения типа чисел или строк. Паттерны в Rust одновременно более гибкий и в то же время более мощный инструмент. 
Рассмотрим отдельные случаи применения паттернов.</p>
<h3>Диапазон значений</h3>
<p>В качестве паттерна может выступать набор значений. Например, с помощью оператора <span class="b">|</span> мы можем указать два альтернативных выражения, 
которым должно соответствовать значение:</p>
<pre class="brush:rs;">
fn main(){
     
     let n = 2;

    match n {
        1 | 2 =&gt;  println!("один или два"),
        3 =&gt; println!("три"),
        _ =&gt; println!("непонятно")
    }
}
</pre>
<p>Шаблон <code>1 | 2</code> указывает, что значение должно соответствовать либо числу 1, либо числу 2.</p>
<p>С помощью оператора последовательности <span class="b">..=</span> можно задать диапазон значений:</p>
<pre class="brush:rs;">
fn main(){
     
     let n = 5;

    match n {
        1..=4 =&gt;  println!("от одного до четырех"),
        5..=9 =&gt; println!("от пяти до девяти"),
        _ =&gt; println!("непонятно")
    }
}
</pre>
<p>Шаблон <code>1..=4</code> указывает, что значение должно находиться в диапазоне от 1 до 4 включительно.</p>
<h3>Паттерны и кортежи</h3>
<p>Конструкция match также позволяет сопоставить значения кортежа с некоторым набором шаблонов и выполнить соответствующие действия:</p>
<pre class="brush:rs;">
fn main() {
 
    let user = ("Bob", 37);
	match user{
		("Tom", 36) =&gt; println!("name: Tom, age: 36"),
		("Bob", 37) =&gt; println!("name: Bob, age: 37"),
		_ =&gt; println!("Undefined")
	}
}
</pre>
<p>Здесь кортеж сопоставлятся с набором шаблонов, которые представляют кортежи. Поскольку в данном случае значения кортежа user соответствует шаблону <code>("Bob", 37)</code>, то будет выполняться выражение <code>println!("name: Bob, age: 37")</code></p>
<p>При этом при помощи шаблонов можно сравнивать только с частью значений, а также можно получать некоторые значения в переменные. Например:</p>
<pre class="brush:rs;">
fn main() {
 
    let user = ("Bob", 37);
	match user{
		("Tom", 36) =&gt; println!("name: Tom, age: 36"),
		(name, 37) =&gt; println!("name: {}", name),
		_ =&gt; println!("Undefined")
	}
}
</pre>
<p>Шаблон <code>(name, 37)</code> представляет шаблон, которому соответствует любой кортеж из двух элементов, где второй компонент представляет число 37. 
И если кортеж соответствует этому шаблону, его первый компонент помещается в переменную <code>name</code>, которую мы можем использовать в действиях, 
предусмотренных для этого шаблона.</p>
<p>Более того мы можем целиком уйти от конкретных значений:</p>
<pre class="brush:rs;">
fn main(){
     
    let user = ("Bob", 37);
	match user{
		("Tom", age) =&gt; println!("Pattern1. Name: Tom, age: {}", age),
		(name, 22) =&gt; println!("Pattern2. Name: {}, age: 22", name),
		(name, age) =&gt; println!("Pattern3. Name: {}, age: {}", name, age),
	}
}
</pre>
<p>Два первых шаблона в конструкции match используют по одной переменной либо для первого, либо для второго компонента кортежа. Тогда как третий шаблон 
использует две переменных - <code>(name, age)</code> и соответствует любому кортежу, который имеет два компонента. Поскольку этот шаблон покрывает все возможные 
кортежи с двумя элементами, нам не надо определять шаблон <code>_=&gt;</code> для случаев, которые не вписываются в предыдущие шаблоны.</p>
<h3>Шаблоны и структуры</h3>
<p>Аналогично кортежам в конструкциях match можно использовать структуры. Например, мы можем определить для структуры шаблон с конкретными значениями:</p>
<pre class="brush:rs;">
struct Person { name: String, age: u8 }
fn main(){
  
	let bob = Person{ name: "Bob".to_string(), age: 41};
	let _username = "Bob".to_string();
	
	match bob{
		Person{name: _username, age: 41} =&gt; println!("Name: Bob, age: 41"),
		_ =&gt; println!("Undefined person"),
	}
}
</pre>
<p>Здесь объект структуры Person сравнивается с шаблоном <code>Person{name: _username, age: 41}</code>, то есть с некоторой структурой, где поле <code>name</code> 
равно переменной <code>_username</code>, а поле age - числу 41.</p>
<p>Обратите внимание, что в шаблонах нельзя использовать вызовы функций, поэтому шаблон выглядит так:</p>
<pre class="brush:rs;">Person{name: _username, age: 41}</pre>
<p>А не так:</p>
<pre class="brush:rs;">Person{name: "Bob".to_string(), age: 41}</pre>
<p>Также в шаблонах для структур можно определять переменные:</p>
<pre class="brush:rs;">
struct Person { name: String, age: u8 }
fn main(){
     
    let tom = Person{ name: "Tom".to_string(), age: 36};
	let _username = "Bob".to_string();
	match tom{
		Person{name: _username, age: 41} =&gt; println!("Name: Bob, age: 41"),
		Person{name, age: 36} =&gt; println!("Name: {}, age: 36", name),
		Person{name, age} =&gt; println!("Name: {}, age: {}", name, age)
	}
}
</pre>
<p>Здесь первый шаблон, как и в предыдущем примере устанавливает конкретные значения.</p>
<p>Второй шаблон - <code>Person{name, age: 36}</code> соответствует объектам структуры Person, у которых поле age равно 36. При этом значение поля name 
будет помещаться в переменную <code>name</code></p>
<p>Третий шаблон - <code>Person{name, age}</code> соответствует любой структуре Person. При этом значения ее полей будут помещаться в переменные name и age. 
При этом названия переменных совпадают с названиями соответствующих полей структуры. Если названия переменных не совпадают, то мы должны явным образом указать, 
как они соотносятся с полями структуры:</p>
<pre class="brush:rs;">
match tom{
	Person{name: _username, age: 41} =&gt; println!("Name: Bob, age: 41"),
	Person{name, age: 36} =&gt; println!("Name: {}, age: 36", name),
	Person{name: person_name, age: person_age} =&gt; println!("Name: {}, age: {}", person_name, person_age)
}
</pre>
<h3>Шаблоны и массивы</h3>
<p>Похожим образом можно использовать шаблоны для сравнения массивов:</p>
<pre class="brush:rs;">
fn main(){
     
     let numbers = [1, 7, 3];
	 
	match numbers {
        [1, 2, 3] =&gt;  println!("Pattern1. [1, 2, 3]"),
        [x, 2, 3] =&gt;  println!("Pattern2. [{}, 2, 3]", x),
        [x, y, 3] =&gt;  println!("Pattern3. [{}, {}, 3]", x, y),
        [x, y, z] =&gt;  println!("Pattern4. [{}, {}, {}]", x, y, z),
    }
}
</pre>
<p>Здесь конструкция <code>match</code> сравнивает массив numbers с набором шаблонов, которые содержат как конкретные значения, так и переменные. В 
данном случае массив numbers соответствует третьему шаблону - <code>[x, y, 3]</code>. Этот шаблон соответствует любому массиву, третий элемент которого равен 3.</p>
<h3>Перечисления и шаблоны</h3>
<p>В случае с перечислениями шаблоны позволяют получить значения констант перечисления в переменные:</p>
<pre class="brush:rs;">
enum DayTime{
	
	Morning(String),
	Evening(String)
}
fn main(){
 
	let date_time = DayTime::Morning("Доброе утро".to_string());
	match date_time {
	
		DayTime::Morning(message)=&gt; println!("{}", message),
		DayTime::Evening(message)=&gt; println!("{}", message)
	}
}
</pre>
<p>Перечисление DayTime определяет две константы, которые хранят значение типа <code>String</code>.</p>
<p>Конструкция <code>match</code> предусматривает для объекта перечисления два шаблона, в каждом из которых определяется переменная message. В эту переменную 
мы можем получить значение константы.</p>
<p>В данном случае значение переменной <code>date_time</code> будет соответствовать шаблону <code>DayTime::Morning(message)</code>. В итоге на консоль будет 
выведено сообщение "Доброе утро".</p>
<p>При это константы перечисления могут представлять разные типы:</p>
<pre class="brush:rs;">
enum DayTime{
	
	Morning(u8, u8),
	Evening(String)
}
</pre>
<p>В данном случае константа <code>Morning</code> хранит сразу два значения типа <code>u8</code> (условно первый и последний утренние часы). Соответственно при определении переменной необходимо передать два значения:</p>
<pre class="brush:rs;">
let dt = DayTime::Morning(0, 12);
</pre>
<p>Тогда шаблон для этой константы может предоставить две переменные - для каждого отдельного значения константы:</p>
<pre class="brush:rs;">
enum DayTime{
	
	Morning(u8, u8),
	Evening(String)
}
fn main(){
 
	let morning = DayTime::Morning(0, 12);
	match morning {
	
		DayTime::Morning(6, end)=&gt; println!("Утро: с 6 до {}", end),
		DayTime::Morning(start, end)=&gt; println!("Утренние часы: с {} до {}", start, end),
        DayTime::Evening(message)=&gt; println!("{}", message),
	}
}
</pre>
<h3>Игнорирование значений</h3>
<p>Если нам не нужны какие-то значения, вместо них также можно определить прочерк:</p>
<pre class="brush:rs;">
enum DayTime{
	
	Morning(u8, u8),
	Evening(String)
}
fn main(){
 
	let morning = DayTime::Morning(5, 12);
	match morning {
	
		DayTime::Morning(_, end)=&gt; println!("Утренние часы заканчиваются в {} часов", end),
		DayTime::Evening(message)=&gt; println!("{}", message)
	}
}
</pre>
<p>В данном случае мы не используем первое значение константы <code>DayTime::Morning</code>, однако для каждого значения константы нам надо что-то указать, например, конкретное значение или имя переменной. 
А прочерк позволяет выйти из этой ситуации и вообще не использовать это значение.</p>
<p>То же самое можно проделать и в шаблонах для других типов. Например, для структур:</p>
<pre class="brush:rs;">
struct Person { name: String, age: u8, height: f32 }

fn main(){
 
	let bob = Person{
        name: "Bob".to_string(),
        age: 33,
        height: 1.70
    };
	match bob {
	
		Person{name, age, height: _} =&gt; println!("name: {}  age: {}", name, age)
	}
}
</pre>
<p>В данном случае мы не собираемся использовать в конструкции match поле height, поэтому в шаблоне для этого поля указывается прочерк: <code>Person{name, age, height: _}</code>.</p>
<p>Пример с кортежами:</p>
<pre class="brush:rs;">
fn main(){
 
	let user = ("Tom", 36);
	match user {
		
		("Bob", age) =&gt; println!("Name: Bob, age: {}", age),
		(name, _) =&gt; println!("Name: {}", name)
	}
}
</pre>
<p>Если структура, кортеж, перечисление или массив содержат много значений подряд, которые нам не нужны и мы хотим их пропустить, то можно использовать 
оператор <span class="b">..</span>. Например:</p>
<pre class="brush:rs;">
struct Person { name: String, age: u8, height: f32 }

fn main(){
 
	let bob = Person{
        name: "Bob".to_string(),
        age: 33,
        height: 1.70
    };
	match bob {
	
		Person{name, ..} =&gt; println!("name: {}", name)
	}
}
</pre>
<p>Шаблон <code>Person{name, ..}</code> позволяет получить значение поля name, остальные поля структуры игнорируются.</p>
<p>Другой пример - получим только первый и последний элементы массива:</p>
<pre class="brush:rs;">
fn main(){
 
	let numbers = [2, 3, 4, 5, 6, 7, 8];
	
	match numbers {
	
		[first,.., last] =&gt; println!("first: {}, last: {}", first, last)
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


<div class="nav"><p><a href="./2.19.php">Назад</a><a href="./">Содержание</a><a href="./2.22.php">Вперед</a></p></div></div>
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
		<li class="closed"><span class="folder">Глава 1. Введение в язык Rust</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/1.1.php">Общий обзор языка программирования Rust. Установка</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/1.2.php">Первая программа</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. Основы Rust</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.1.php">Структура программы</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.2.php">Переменные</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.3.php">Типы данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.4.php">Арифметические операции</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.5.php">Поразрядные операции</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.6.php">Условные выражения</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.7.php">Конструкция if..else</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.8.php">Конструкция match</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.9.php">Циклы</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.10.php">Функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.11.php">Параметры функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.12.php">Возвращение значения из функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.13.php">Константы</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.20.php">Анонимные функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.21.php">Замыкания</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.23.php">Тип функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.24.php">Функция как параметр и результат другой функции</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 3. Составные типы данных</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.14.php">Кортежи</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.15.php">Массивы</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.16.php">Структуры</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.17.php">Структуры-кортежи</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.18.php">Перечисления Enum</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.19.php">Последовательность Range</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.25.php">Паттерны и конструкция match</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/2.22.php">Паттерны и конструкция if let</a></span></li>
			</ul>
		</li>
		
		<li class="closed"><span class="folder">Глава 4. Ссылки и Ownership</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/3.1.php">Контекст/область видимости</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/3.2.php">Устройство памяти в Rust. Стек и куча</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/3.3.php">Ownership</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/3.4.php">Ссылки</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/3.5.php">Изменяемые ссылки</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/3.6.php">Slice</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 5. Объектно-ориентированное программирование</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/5.1.php">Методы</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/5.2.php">Ассоциированные функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/5.3.php">Trait</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/5.4.php">Trait как параметр и результат функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/5.5.php">Generics. Обобщенные типы</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/5.6.php">Generics. Обобщенные функции и методы</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/5.7.php">Trait bound</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 6. Время жизни ссылки</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/6.1.php">Аннотации и время жизни ссылки</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/6.2.php">Аннотации ссылок в функциях</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/6.3.php">Аннотации ссылок в структурах</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/6.4.php">Аннотации ссылок в определениях методов</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/6.5.php">Статическое время жизни</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 7. Коллекции</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/7.1.php">Вектор</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/7.2.php">String</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/7.3.php">HashMap</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 8. Модули</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/8.1.php">Определение модулей. Приватность и публичность</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/8.2.php">Вложенные модули и ключевое слово super</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/8.3.php">Оператор use и подключение модулей</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/8.4.php">Определение модуля во внешнем файле</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 9. Обработка ошибок</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/10.1.php">Макрос panic!</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/10.2.php">Тип Result</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/10.3.php">Методы unwrap и expect типа Result</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/10.4.php">Обработка нескольких типов ошибок</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/10.5.php">Оператор ?</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 10. Cargo</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/9.1.php">Создание проекта с помощью Cargo</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/9.2.php">Загрузка и использование внешних зависимостей</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 11. Ввод и вывод</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/11.1.php">Ввод с клавиатуры</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 12. Unsafe-контекст</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/rust/tutorial/12.1.php">Указатели</a></span></li>
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
<!DOCTYPE html>
<html >
<head>
<title>Rust | HashMap</title>
<meta charset="utf-8" />
<meta name="description" content="Хэштаблицы и словари HashMap в языке программирования Rust, ассоциативные массивы, добавление и удаление элементов, их ключи и значения, метод insert и or_insert, contains_key, обновление элементов">
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
<h2>HashMap</h2><div class="date">Последнее обновление: 28.04.2021</div>

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

<p>Встроенный тип <span class="b">HashMap&lt;K, V&gt;</span> хранит набор элементов, где каждый элемент имеет ключ и значение. В различных языках 
программирования есть похожие типы данных, которые могут называться словарями, ассоциативными массивами, хэштаблицами, картами. HashMap типизируется 
двумя параметрами - K и V. Параметр <span class="b">K</span> устанавливает тип ключей, а параметр <span class="b">V</span> - тип значений элементов.</p>
<p>HashMap располагается в пакете <span class="b">std::collections</span>, поэтому при использовании HashMap нам надо импортировать данный тип с помощью 
оператора <span class="b">use</span>:</p>
<pre class="brush:rs;">use std::collections::HashMap;</pre>
<h3>Создание HashMap</h3>
<p>Для создания пустого объекта HashMap применяется функция <span class="b">HashMap::new()</span>:</p>
<pre class="brush:rs;">
use std::collections::HashMap;

let countries: HashMap&lt;String, String&gt; = HashMap::new();
</pre>
<p>В данном случае определяется HashMap, в котором и ключи и значения представляют тип <code>String</code>.</p>
<h3>Добавление данных</h3>
<p>Для добавления данных в HashMap применяется метод <span class="b">insert()</span>. Он принимает два параметра. Первый параметр представляет ключ элемента, а второй - значение элемента:</p>
<pre class="brush:rs;">
use std::collections::HashMap;
	
fn main(){
  

    let mut countries: HashMap&lt;String, i32&gt; = HashMap::new();
	countries.insert(String::from("Германия"), 82);
	countries.insert(String::from("Франция"), 67);
	
	println!("Число элементов: {}", countries.len());
}
</pre>
<p>В данном случае мы предполагаем, что HashMap будет хранить информацию о странах, где ключ - название страны, а значение - население страны в миллионнах жителей. 
Поскольку здесь меняется содержимое объекта countries, то переменная определяется с оператором <span class="b">mut</span>.</p>
<p>С помощью метода <span class="b">len()</span> можно получить количество элементов.</p>
<p>Следует отметить, что после определения типа, мы должны строго придерживаться типа добавляемых ключей и значений. Так, в данном случае 
все ключи должны строго представлять тип <code>String</code>, и значения элементов тоже должны строго представлять тип <code>i32</code>.</p>
<p>Если за определением HashMap следуют операции добавления, то Rust может сам вывести тип ключей и значений элементов после первого добавления, 
соответственно тип можно не указывать.</p>
<pre class="brush:rs;">
let mut countries = HashMap::new();
countries.insert(String::from("Германия"), 82);
countries.insert(String::from("Франция"), 67);
</pre>

<h3>Передача владения в HashMap</h3>
<p>Для значений типов, которые реализуют трейт <span class="b">Copy</span> (встроенные числовые типы, bool, char, массивы, кортежи), создается копия, 
которая передается в HashMap.</p>
<p>Для остальных типов, которые не реализуют трейт <span class="b">Copy</span> (как, например, <code>String</code>) значения напрямую 
перемещаются в HashMap, и HashMap становится новым владельцем этих значений. Так, рассмотрим следующий пример:</p>
<pre class="brush:rs;">
use std::collections::HashMap;
	
fn main(){
  
    let mut countries = HashMap::new();
	let population = 82;
	let country = String::from("Германия");
	countries.insert(country, population);
	
	println!("population: {} млн. чел.", population);	// population можн использовать
	println!("country: {}", country);	// ! Ошибка country нельзя использовать
}
</pre>
<p>При компиляции этой программы мы столкнемся с ошибкой. Потому что при добавлении элемента в HashMap:</p>
<pre class="brush:rs;">countries.insert(country, population);</pre>
<p>владение объектом String перейдет к переменной countries, а переменную <code>country</code> больше нельзя использовать (если только заново ее инициалировать, но это будет уже другой объект).</p>
<p>Если же мы не хотим передавать владение объектом String в HashMap, то мы можем передать в метод <code>insert()</code> не сам объект, а ссылку на него:</p>
<pre class="brush:rs;">countries.insert(&amp;country, population);</pre>
<p>В этом случае ошибки не возникнет, мы по прежнему сможем обращаться к объекту через переменную country. Однако надо учитывать, что эта ссылка в HashMap будет действительна, пока существует 
переменная country.</p>
<h3>Обращение к элементам HashMap</h3>
<p>Для обращения к значению элемента после названия HashMap в квадратных скобках указывается ключ:</p>
<pre class="brush:rs;">переменная_HashMap[ключ]</pre>
<p>Например:</p>
<pre class="brush:rs;">
use std::collections::HashMap;
	
fn main(){
  
    let mut countries = HashMap::new();
	countries.insert(String::from("Germany"), 82);
	
	let population = countries["Germany"];	// Получим значение элемента с ключом ""
	println!("Germany : {}", population);
	
}
</pre>
<p>В случае, если ключи представляют тип String, то в качестве ключа мы можем передавать строковый литерал. Так, в данном случае получаем 
элемент с ключом "Germany".</p>
<p>Однако, если мы пытаемся получить элемент с ключом, которого не существует в HashMap, то при выполнении программы мы столкнемся с ошибкой:</p>
<pre class="brush:rs;">
use std::collections::HashMap;
	
fn main(){
  
    let mut countries = HashMap::new();
	countries.insert(String::from("Germany"), 82);
	
	let population = countries["France"];	// элемента с ключом "France" не существует
	println!("France : {}", population);
	
}
</pre>
<p>Чтобы избежать подобной ошибки, можно использовать метод <span class="b">get()</span>. Этот метод также принимает ключ элемента, но возвращает 
константу перечисления <span class="b">Option</span>. Если элемент с требуемым ключом отсутствует в HashMap, то метод <code>get()</code> 
возвращает константу <span class="b">None</span>. Соответственно перед использованием значения мы можем проверить на эту константу:</p>
<pre class="brush:rs;">
let population = countries.get("France");	// Получим значение элемента с ключом "France"
if population == Option::None{
	println!("Элемента с ключом France не существует");
}
</pre>
<p>Если ключ имеется в HashMap, то возвращается константа <span class="b">Some</span>, 
которая содержит значение элемента с данным ключом. И с помощью метода <span class="b">unwrap()</span> мы можем получить это значение:</p>
<pre class="brush:rs;">
use std::collections::HashMap;
	
fn main(){
  
    let mut countries = HashMap::new();
	countries.insert(String::from("Germany"), 82);
	
	let population = countries.get("France");	// Получим значение элемента с ключом "France"
	if population == Option::None{
		println!("Элемента с ключом France не существует");
	}
	else{
		println!("France : {}", population.unwrap());
	}
}
</pre>
<h3>Перебор HashMap</h3>
<p>Для перебора HashMap можно использовать цикл <span class="b">for</span>:</p>
<pre class="brush:rs;">
use std::collections::HashMap;
	
fn main(){
  
    let mut countries = HashMap::new();
	countries.insert(String::from("Germany"), 82);
	countries.insert(String::from("France"), 67);
	
	for (key, value) in &amp;countries{
        println!("{}: {}", key, value);
    }
}
</pre>
<p>Цикл пробегает по всем элементам HashMap и помещает в переменную <code>key</code> ключ, а в переменную <code>value</code> - значение элемента.</p>
<p>Обратите внимание, что в цикл передается не сам объект HashMap, а ссылка на него, чтобы избежать смену владения объектом HashMap.</p>
<h3>Проверка существования элемента</h3>
<p>Метод <span class="brush:rs;">contains_key()</code> возвращает <code>true</code>, если элемент с указанным ключом существует, и <code>false</code>, если элемент 
не существует:</p>
<pre class="brush:rs;">
use std::collections::HashMap;
	
fn main(){
  
    let mut countries = HashMap::new();
	countries.insert(String::from("Germany"), 82);
	
	if countries.contains_key("France"){
		println!("{}", countries["France"]);
	}
	else{
		println!("Элемента France не существует");
	}
	
	if countries.contains_key("Germany"){
		println!("{}", countries["Germany"]);
	}
	else{
		println!("Элемента Germany не существует");
	}
}
</pre>
<p>Данный метод можно применять в качестве альтернативы применения перечисления Option при получении элемента.</p>
<h3>Обновление элемента</h3>
<p>В HashMap может существовать только один элемент с определенным ключом. Попытка добавления элемента с ключом, который уже есть в HashMap, 
приведет к затиранию старого элемента:</p>
<pre class="brush:rs;">
use std::collections::HashMap;
	
fn main(){
  
    let mut countries = HashMap::new();
	countries.insert(String::from("Germany"), 82);
	countries.insert(String::from("Germany"), 250);
	
	let population = countries["Germany"];	// 250
	println!("{}", population);		// 250
}
</pre>
<p>Однако такое поведение может быть нежелательным. Возможно, мы хотим добавить элемент, только если элемента с подобным ключом еще нет в HashMap. В этом случае мы можем проверять наличие ключа с 
помощью метода <code>contains_key()</code>:</p>
<pre class="brush:rs;">
use std::collections::HashMap;
	
fn main(){
  
    let mut countries = HashMap::new();
	countries.insert(String::from("Germany"), 82);
	
	if !countries.contains_key("France"){
		countries.insert(String::from("France"), 67);
	}
	if !countries.contains_key("Germany"){
		countries.insert(String::from("Germany"), 250);
	}
	
	println!("{}", countries["Germany"]);		// 82
	println!("{}", countries["France"]);		// 67
}
</pre>
<p>Но HashMap также предоставляют специальный API с помощью метода <span class="b">entry()</span>. Этот метод принимает ключ элемента и 
возвращает перечисление <span class="b">Entry</span>, которое представляет значение элемента. 
Затем у перечисления Entry вызывается метод <span class="b">or_insert()</span>, в который передается добавляемое значение. 
Если элемент с ключом уже есть, то метод просто возвращает изменяемую (mutable) ссылку 
на значение в HashMap. Если элемент отсутствует, то метод добавляет новое значение и также возвращает 
изменяемую (mutable) ссылку.</p>
<pre class="brush:rs;">
use std::collections::HashMap;
	
fn main(){
  
    let mut countries = HashMap::new();
	countries.insert(String::from("Germany"), 82);
	
	countries.entry(String::from("France")).or_insert(67);
	countries.entry(String::from("Germany")).or_insert(250);
	
	println!("{}", countries["Germany"]);		// 82
	println!("{}", countries["France"]);		// 67
}
</pre>
<h3>Удаление элементов</h3>
<p>Для удаления одного элемента применяется метод <span class="b">remove()</span>, в который передается ключ удаляемого элемента:</p>
<pre class="brush:rs;">
use std::collections::HashMap;
	
fn main(){
  
    let mut countries = HashMap::new();
	countries.insert(String::from("Germany"), 82);
	countries.insert(String::from("France"), 67);
	
	countries.remove("Germany");	// удаляем элемент с ключом Germany
}
</pre>
<p>Для удаления всех элементов используется метод <span class="b">clear()</code>:</p>
<pre class="brush:rs;">
use std::collections::HashMap;
	
fn main(){
  
    let mut countries = HashMap::new();
	countries.insert(String::from("Germany"), 82);
	countries.insert(String::from("France"), 67);
	
	countries.clear();	// очищаем объект HashMap
	
	println!("length: {}", countries.len());	// length: 0
}
</pre>
<p>Это только небольшой перечень методов структуры HashMap. Полный список методов можно найти в документации на странице <a href="https://doc.rust-lang.org/std/collections/struct.HashMap.html" rel="nofollow">https://doc.rust-lang.org/std/collections/struct.HashMap.html</a>.</p>

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


<div class="nav"><p><a href="./7.2.php">Назад</a><a href="./">Содержание</a><a href="./8.1.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 7.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 7.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
<!DOCTYPE html>
<html >
<head>
<title>Rust | Аннотации ссылок в функциях</title>
<meta charset="utf-8" />
<meta name="description" content="Аннотации и определение времени жизни ссылок в функциях в языке программирования Rust, зависимость от параметров функции и возвращаемого результата">
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
<h2>Аннотации ссылок в функциях</h2><div class="date">Последнее обновление: 26.04.2021</div>

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

<p>Если функция возвращает ссылку, то для нее должно быть определено время жизни. При применении аннотаций к параметрам и возвращаемому результату функции, название аннотаций указывается в угловых скобках после названия 
функций:</p>
<pre class="brush:rs;">
fn имя_функции&lt;'аннотация&gt;(параметр: &amp;'аннотация тип_данных) -&gt; &amp;'аннотация тип_данных {
	
}
</pre>
<p>Но нам не всегда необходимо явно указывать аннотацию времени жизни. Иногда компилятор Rust сам может вывести время жизни возвращаемой ссылки. И в данном случае он опирается на три правила:</p>
<ol><li><p>Первое правило. Каждый параметр, который представляет ссылку, имеет свою собственную аннотацию время жизни. Так, функция с одним параметром-ссылкой применяет одну аннотацию:</p>
<pre class="brush:rs;">fn foo&lt;'a&gt;(x: &amp;'a i32);</pre>
<p>Функция с двумя параметрами-ссылками применяет две разные аннотации:</p>
 <pre class="brush:rs;">fn foo&lt;'a, 'b&gt;(x: &amp;'a i32, y: &amp;'b i32);</pre>
<p>Функция с тремя параметрами-ссылками применяет три параметра и так далее.</p></li>

<li><p>Второе правило. Если функция имеет один параметр-ссылку, то его аннотация автоматически применяется к возвращаемой ссылке:</p>
<pre class="brush:rs;">fn foo&lt;'a&gt;(x: &amp;'a i32) -&gt; &amp;'a i32 {}</pre></li>

<li><p>Третье правило. Если функция имеет несколько параметров-ссылок, но один из них <code>&amp;self</code> или <code>&amp;mut self</code>, 
то время жизни возвращаемой ссылки соответствует времени жизни параметра-ссылки <code>&amp;self</code>. Применяется в определениях методов.</p></li>
</ol>
<p>Если компилятор может применить к функции второе или третье правило, то указывать явным образом аннотацию для возвращаемой ссылки не нужно. 
В частности, возьмем следующий пример.</p>
<pre class="brush:rs;">
fn main(){
	
	let username = String::from("Sam");
	let checked_username = check_name(&username);
	println!("username: {}", checked_username);
}

fn check_name(name: &amp;str) -&gt; &amp;str {
	if name == "admin" { "Tom"}
	else {name}
}
</pre>
<p>В данном случае определена функция <code>check_name()</code>, которая проверяет имя пользователя. Если передаваемое в функцию имя соответствует 
некоторому запрещенному имени, тогда функция возвращает некоторую строку по умолчанию - "Tom". Если имя корректно, тогда возвращается это имя.</p>
<p>Так как функция возвращает ссылку, то по идее нам надо использовать аннотации. Однако при компиляции и запуске этой программы никаких проблем не возникнет. 
Так как к этой функции применяются второе правило. То есть по факту в данном случае мы имеем дело со следующей функцией:</p>
<pre class="brush:rs;">
fn check_name&lt;'a&gt;(name: &amp;'a str) -&gt; &amp;'a str {
	if name == "admin" { "Tom"}
	else {name}
}
</pre>
<p>То есть мы получим функции, где время возвращаемой ссылки привязано к времени жизни ссылки-параметра. Мы это можем увидеть, чуть изменив пример:</p>
<pre class="brush:rs;">
fn main(){
	
	let checked_username;
	{
		let username = String::from("admin");
		checked_username = check_name(&amp;username);
	}
	println!("username: {}", checked_username);
}

fn check_name(name: &amp;str) -&gt; &amp;str {
	if name == "admin" { "Tom"}
	else {name}
}
</pre>
<p>При компиляции этой программы мы получим ошибку. Поскольку ссылка <code>check_name</code> применяется вне области видимости ссылки <code>username</code>. 
Причем здесь даже в функцию передается такое значение, при котором функция возвращает строковый литерал. Тем не менее даже в этом случае в реальности 
время жизни возвращаемой ссылки соответствует времени жизни ссылки-параметра.</p>
<p>Теперь возьмем другой пример:</p>
<pre class="brush:rs;">
fn main(){

	let username = String::from("Sam");
	
	{
		let default_name = String::from("Tom");
		let checked_username = check_name(&amp;username, &amp;default_name);
		println!("username: {}", checked_username);
	}
}

fn check_name(name: &amp;str, default: &amp;str) -&gt; &amp;str {
	if name == "admin" { default}
	else {name}
}
</pre>
<p>Теперь функция <code>check_name()</code> принимает два параметра-ссылки. Второй параметр представляет значение по умолчанию, которое возвращается, 
если переданное имя равно строке "admin". Но теперь мы столкнемся с ошибкой при компиляции:</p>
<img src="./pics/3.14.png" alt="Аннотации ссылок и параметров в Rust" />
<p>Данное определение функции <code>check_name()</code> теперь будет равносильно следующей:</p>
<pre class="brush:rs;">
fn check_name&lt;'a, 'b&gt;(name: &amp;'a str, default: &amp;'b str) -&gt; &amp;str {
	if name == "admin" { default}
	else {name}
}
</pre>
<p>Каждый параметр-ссылка имеет свое время жизни, и теперь для каждого параметра-ссылки фактически будет определена своя аннотация. То есть для первого параметра условно аннотация <code>'a</code>, 
а для второго параметра - аннотация <code>'b</code>. Поэтому к данной функции нельзя применить ни второе, ни третье правило, чтобы вывести 
время жизни для возвращаемой ссылки. Поэтому компилятор при компиляции сгенерирует ошибку и укажет, что нам надо явно указать аннотацию для возвращаемой ссылки.</p>
<p>Рассмотрим пару распространенных ситуаций, где необходимо использовать аннотации.</p>
<h3>Функция с аннотированными параметрами</h3>
<p>При наличии параметров-ссылок время жизни возвращаемой ссылки соответствует параметру с <span class="b">наименьшим</span> временем жизни.</p>
<p>Возьмем пример выше и применим аннотации:</p>
<pre class="brush:rs;">
fn main(){

	let username = String::from("Sam");
	
	{
		let default_name = String::from("Tom");
		let checked_username = check_name(&amp;username, &amp;default_name);
		println!("username: {}", checked_username);
	}
}

fn check_name&lt;'a&gt;(name: &amp;'a str, default: &amp;'a str) -&gt; &amp;'a str {
	if name == "admin" { default}
	else {name}
}
</pre>
<p>Для применения в функции определена аннотация <code>'a</code>, которая применяется к параметрам и возвращаемому результату. И если мы 
посмотрим на те значения, 
которые передаются при вызове этой функции, а именно ссылки на переменные <code>username</code> и <code>default_name</code>, то увидим, что 
время жизни переменной <code>username</code> больше, а у переменной <code>default_name</code>. В частности, время действия переменной <code>username</code> - вплоть до конца функции main:</p>
<pre class="brush:rs;">
fn main() {
    let username = String::from("Sam");
	//............
}	// конец функции main - конец времени жизни username
</pre>
<p>Переменная <code>default_name</code> определяется во вложенном блоке кода, поэтому ее действие заканчивается с завершением этого блока кода:</p>
<pre class="brush:rs;">
fn main() {
    let username = String::from("Sam");

    {
        let default_name = String::from("Tom");
        //..........
    }	// конец блока кода - конец времени жизни ссылки на default_name
}
</pre>
<p>Соответственно при вызове функции <code>check_name()</code> время жизни возвращаемой ссылки будет соответствовать времени жизни переменной 
<code>default_name</code>:</p>
<pre class="brush:rs;">
fn main() {
    let username = String::from("Sam");
	
	{
		let default_name = String::from("Tom");
		let checked_username = check_name(&username, &default_name);
		println!("username: {}", checked_username);
    }	// ! конец времени жизни ссылки checked_username
}
</pre>
<p>Это может показаться странным, поскольку в данной программе возвращаемая ссылка очевидно использует значение переменной 
<code>username</code>. Но для примера изменим код и попробуем использовать полученную ссылку вне блока кода:</p>
<pre class="brush:rs;">
fn main(){

	let username = String::from("Sam");
	let checked_username;
	{
		let default_name = String::from("Tom");
		checked_username = check_name(&amp;username, &amp;default_name);
	}
	println!("username: {}", checked_username);
}

fn check_name&lt;'a&gt;(name: &amp;'a str, default: &amp;'a str) -&gt; &amp;'a str {
	if name == "admin" { default}
	else {name}
}
</pre>
<p>И в данном случае мы получим при компиляции ошибку, так как время жизни default_name не соответствует той области видимости, в рамках которой мы пытаемся использовать ссылку на этот объект.</p>
<img src="./pics/3.9.png" alt="Аннотации ссылок и время жизни в Rust в функции" />
<h3>Аннотации в функции без параметров</h3>
<p>Если функция не использует параметры-ссылки, то время жизни возвращаемой ссылки представляет время жизни возвращаемого значения:</p>
<pre class="brush:rs;">
fn main() {
	let message = get_message();
	println!("Message: {}", message);
}
fn get_message&lt;'a&gt;() -&gt; &amp;'a str {
	let result = String::from("Hello Rust");
	result.as_str()
}
</pre>
<p>В данном случае функция <code>get_message()</code> возвращает строковый слайс из объекта <code>result</code>. Для получения строкового слайса 
<code>&amp;str</code> из объекта <code>String</code>, у последнего вызывается метод <code>as_str()</code>.</p>
<p>Но время жизни переменной <code>result</code> ограничено функцией 
<code>get_message()</code>. То есть после завершения этой функции переменная result становится недействительной, и ее память очищается. Соответственно все ссылки 
на этот объект становятся недействительными. Поэтому при компиляции данного кода мы получим ошибку:</p>
<img src="./pics/3.10.png" alt="reference lifetime in function in Rust " />
<p>При этом неважно, что к возвращаемой ссылке применяется аннотация. Мы все равно не можем в данном случае возвратить ссылку. И единственным решением в данном случае 
будет изменение функции, например, чтобы она возвращала не ссылку, а конкретный объект. Например:</p>
<pre class="brush:rs;">
fn get_message() -&gt; String {
	let result = String::from("Hello Rust");
	result
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


<div class="nav"><p><a href="./6.1.php">Назад</a><a href="./">Содержание</a><a href="./6.3.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 6.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 6.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
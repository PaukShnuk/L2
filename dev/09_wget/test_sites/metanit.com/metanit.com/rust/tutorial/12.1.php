<!DOCTYPE html>
<html >
<head>
<title>Rust | Указатели</title>
<meta charset="utf-8" />
<meta name="description" content="Unsafe-контекст в языке программирования Rust, блок unsafe и указатели, определение константного и изменяемого указателя, операция разыменования *">
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
<h1>Unsafe-контекст</h1><div class="date">Последнее обновление: 08.05.2021</div>

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

<p>Одна из отличительных особенностей Rust состоит в том, что он может быть использоваться в низкоуровневом системном программировании, то 
есть он позволяет напрямую обращаться к операционной системе, писать драйверы и даже свои операционные системы. Однако такие возможности в первую очередь реализуются 
через так называемый "небезопасный код" (unsafe). Почему "небезопасный"? Потому что при компиляции такой код позволяет избежать проверок компилятора 
при использовании определенных возможностей языка Rust. С одной стороны, написание небезопасного кода дает нам большие возможности, 
в частности, как было сказано выше, использовать низкоуровневые возможности языка. Но с другой стороны, лишает нас большего контроля со стороны компилятора и 
соответственно обеспечивает меньшую защиту от потенциальных багов и ошибок.</p>
<p>Для написания "небезопасного кода" применяется блок кода <span class="b">unsafe</span>:</p>
<pre class="brush:rs;">
unsafe{
	// небезопасный код
}
</pre>
<p>При этом в блоке <span class="b">unsafe</span> также проверяется владение переменных, использование ссылок и ряд других стандартных проверок Rust. 
Ключевое слово <span class="b">unsafe</span> лишь дает доступ к пяти возможностям языка Rust, которые не проверяются компилятором на безопасность памяти:</p> 
<ul>
<li><p>Указатели</p></li>
<li><p>unsafe-функции</p></li>
<li><p>Статические переменные</p></li>
<li><p>unsafe-трейты</p></li>
<li><p>Тип union</p></li>
</ul>
<h2>Указатели</h2>
<p>Указетели позволяют обращаться к значениями по определенным адресам в памяти. Для определения указателей применяется оператор разыменования 
(dereference operator) - оператор <span class="b">*</span>. В Rust есть два типа указателей:</p>
<ul>
<li><p><span class="b">Неизменяемые или константны указатели</span>. Они определяются в виде <code>*const T</code>, где <code>T</code> предоставляет конкретный тип.</p></li>
<li><p><span class="b">Изменяемые указатели</span>. Они определяются в виде <code>*mut T</code>.</p></li>
</ul>
<p>Создадим по указателю для каждого типа:</p>
<pre class="brush:rs;">
fn main() {
    
	let mut num = 5;

    let n1 = &num as *const i32;
    let n2 = &mut num as *mut i32;
}
</pre>
<p>Здесь определены два указателя - <code>n1</code> и <code>n2</code>. <code>n1</code> - константый указатель на значение типа <code>i32</code>. 
<code>n2</code> - изменяемый указатель на значение типа <code>i32</code>.</p>
<p>Для получения указателя на адрес переменной к ссылке на объект применяется операция <span class="b">as</span>, которая преобразует объект к типу указателя.</p>
<p>Причем для создания изменяемого указателя сама переменная должна быть определена с ключевым словом <span class="b">mut</span>:</p>
<pre class="brush:rs;">let mut num = 5;</pre>
<p>А для создания изменяемого указателя применяется изменяемая ссылка на эту переменную:</p>
<pre class="brush:rs;">let n2 = &mut num as *mut i32;</pre>
<p>Стоит отметить, что сами указатели можно определять вне блока <span class="b">unsafe</span>. Однако вне этого блока нельзя обратиться к значению в 
области памяти, на которую указывает указатель.</p>
<p>Что хранят указатели? Они хранят адрес на некоторую область в памяти. Например, получим значения выше определенных указателей:</p>
<pre class="brush:rs;">
fn main() {
    
	let mut num = 5;

    let n1 = &num as *const i32;
    let n2 = &mut num as *mut i32;
	
	println!("n1={:p}", n1);
	println!("n2={:p}", n2);
}
</pre>
<p>Для вывода адреса, который хранит указатель, применяется спецификатор <span class="b">:p</span> - он указывает, что здесь будет выводиться значение указателя.</p>
<p>Консольный вывод программы в моей случае:</p>
<div class="console">
<pre class="consoletext">
n1=0x38b50ffa94
n2=0x38b50ffa94
</pre>
</div>
<p>Оба указателя имеют одно и то же значение, потому что они оба указывают на один и тот же адрес в памяти - адрес переменной <code>num</code>.</p>
<h3>Операция разыменования</h3>
<p>С помощью операции разыменования (операция <span class="b">*</span>) можно обратиться к значению по адресу, который хранится в указателе. Однако это 
обращение должно производиться в блоке <span class="b">unsafe</span>:</p>
<pre class="brush:rs;">
fn main() {
    
	let mut num = 5;

    let n1 = &num as *const i32;
	unsafe{
	
		println!("{}", *n1);	// 5
	}
}
</pre>
<p>Используя полученное значение в результате операции разыменования мы можем присвоить его другой переменной:</p>
<pre class="brush:rs;">
fn main() {
    
	let num = 5;

    let num_pointer = &num as *const i32;
	unsafe{
		let number: i32 = *num_pointer;
		println!("number: {}", number);
	}
}
</pre>
<p>Причем стоит отметить, что указатель возвращает значение того типа, на объект которого он указывает. Так, в данном случае указатель <code>num_pointer</code> 
представляет указатель на объект типа <span class="b">i32</span>, поэтому операция разыменования возвратить значение типа <span class="b">i32</span></p>
<p>И также используя указатель, мы можем менять значение по адресу, который хранится в указателе:</p>
<pre class="brush:rs;">
fn main() {
    
	let mut num = 5;

    let num_pointer = &mut num as *mut i32;
	unsafe{
		*num_pointer  = 29;		// изменяем значение в памяти, на которую указывает указатель
	}
	println!("num: {}", num);	// num: 29
}
</pre>
<p>Стоит отметить, что если мы хотим изменять значение в памяти, на которую указывает указатель, это должен быть именно <span class="b">изменяемый указатель</span>. 
Константный указатель не позволяет изменять значение.</p>
<p>Второй момент: при этом изменяется значение не самого указателя - он по прежнему хранит адрес в памяти, а изменяется значение, которое храниться по этому адресу.</p>
<h3>Передача указателю произвольного адреса</h3>
<p>Следует отметить, что в принципе мы можем передавать указателю произвольный адрес:</p>
<pre class="brush:rs;">
fn main() {
    
	let addr = 0x38b50ff4usize;
    let p = addr as *const i32;
	println!("Address: {:p}", p);
}
</pre>
<p>Адрес определяется как шестнадцатиричное число - в данном случае это адрес <code>0x38b50ff4</code>, которое представляет тип <code>usize</code>. 
Но такие обращения к произвольным областям памяти программист делает на свой страх и риск.</p>
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


<div class="nav"><p><a href="./11.1.php">Назад</a><a href="./">Содержание</a></p></div></div>
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
	
	$("li:contains('Глава 12.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 12.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 12.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 12.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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
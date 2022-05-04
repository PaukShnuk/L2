<!DOCTYPE html>
<html >
<head>
<title>Rust | Generics. Обобщенные типы</title>
<meta charset="utf-8" />
<meta name="description" content="Generics обобщения в языке программирования Rust, обобщенные структуры, перечисления и методы">
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
<h2>Generics. Обобщенные типы</h2><div class="date">Последнее обновление: 21.04.2021</div>

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

<p><span class="b">Generics</span> или обобщения делают код гибче, позволяют использовать более широкий набор типов данных.</p>
<p>Рассмотрим сначала проблему, которую призваны решить обобщения. Допустим, у нас есть следующая структура Person, которая описывает пользователя:</p>
<pre class="brush:rs;">
struct Person { 
	id: u32, 		// идентификатор
	name: String	// имя
}

fn main(){
    
	let tom = Person {id: 245, name: "Tom".to_string()};
	println!("id: {}  name: {}", tom.id, tom.name);
}
</pre>
<p>Одно из полей структуры - id представляет идентификатор пользователя. В данном случае он представляет целое число. Это довольно распространенное решение, 
когда идентификатор выражается через числовое значение. Однако нередко для идентификаторов 
также используются строки, либо даже какие-то другие составные типы данных. Как сделать, чтобы идентификатор мог представлять и числа, и строки, и в перспективе 
какие-то другие типы (например, могли бы создать для идентификатора отдельную структуру)? Обобщения решают эту проблему. И в данном случае нам надо сделать 
тип Person обобщенным или универсальным.</p>
<p>Для определения обобщенных типов после их названия в угловых скобках указываются <span class="b">параметры типа</span> (type parameter):</p>
<pre class="brush:rs;">
struct название_структуры &lt;название_параметра&gt;{
	//..........
}
</pre>
<p>Например, сделаем структуру Person обобщенной:</p>
<pre class="brush:rs;">
struct Person&lt;T&gt; { 
	id: T, 		// идентификатор
	name: String	// имя
}
</pre>
<p>В данном случае параметр типа называется <span class="b">T</span>. Как правило, название параметра типа представляет одну заглавную букву, чаще букву 
<span class="b">T</span> (от слова type - тип).</p>
<p>После опредления параметра типа мы можем использовать его название как название обычного типа данных внутри обощенной структуры Person. Так, в данном случае поле <code>id</code> имеет тип 
<span class="b">T</span>, то есть тип данных, который будет передаваться через этот параметр. Причем на момент определения структуры мы сами можем не знать, что это будет за тип данных.</p>
<p>Теперь используем эту структуру:</p>
<pre class="brush:rs;">
struct Person&lt;T&gt; { 
	id: T, 		// идентификатор
	name: String	// имя
}
fn main(){
    
	// поле id представляет число
	let tom = Person {id: 245, name: "Tom".to_string()};	
	println!("id: {}  name: {}", tom.id, tom.name);
	
	// поле id представляет строку
	let bob = Person {id: String::from("fhe34u847"), name: "Bob".to_string()};
	println!("id: {}  name: {}", bob.id, bob.name);
}
</pre>
<p>Для первого объекта структуры - tom параметр T будет представлять тип i32:</p>
<pre class="brush:rs;">let tom = Person {id: 245, name: "Tom".to_string()};</pre>
<p>Тогда как для второго объекта - bob параметр типа будет представлять тип String:</p>
<pre class="brush:rs;">let bob = Person {id: String::from("fhe34u847"), name: "Bob".to_string()};</pre>
<p>В итоге мы получим следующий консольный вывод:</p>
<div class="console">
<pre class="consoletext">
id: 245  name: Tom
id: fhe34u847  name: Bob
</pre>
</div>
<p>Таким образом, мы ушли от жесткой привязки к типам данных и сделали программму чуть гибче.</p>
<p>Стоит отметить, в рамках объекта обобщенного типа один параметр типа может передавать только один тип. Например, возьмем следующую ситуацию:</p>
<pre class="brush:rs;">
struct Point&lt;T&gt; {
    x: T,
    y: T,
}

fn main(){
    
	let some_point = Point { x: 3, y: 2.6 };
	println!("x={}  y={}", some_point.x, some_point.y);
}
</pre>
<p>Структура <code>Point</code> содержит два поля (условно координаты x и y точки), тип которых задается с помощью параметра T. Однако в функции 
main при создании объекта структуры Point полю <code>x</code> передается значение типа <code>i32</code>, а полю <code>y</code> - 
значение типа <code>f64</code>. Поэтому компиляция программы завершится ошибкой. То есть нам надо для обоих полей задать значения одного и того же типа.</p>
<h3>Установка нескольких параметров типа</h3>
<p>При необходимости мы можем использовать более одного параметра типа. В этом случае они все перечисляются через запятую в угловых скобках. Например:</p>
<pre class="brush:rs;">
struct Point&lt;T, S&gt; {
    x: T,
    y: S,
}

fn main(){
    
	let some_point = Point { x: 3, y: 2.6 };
	println!("x={}  y={}", some_point.x, some_point.y);
}
</pre>
<p>В данном случае структура Point применяет два параметра - T и S. В этом случае поля структуры x и y могут представлять разные типы, 
представленные параметрами T и S.</p>
<h3>Обобщенные перечисления</h3>
<p>Аналогичным образом можно определять обобщенные перечисления:</p>
<pre class="brush:rs;">
enum DayTime&lt;T&gt;{
     
    Morning(T),
    Evening(T)
}

fn main(){
    
	let morning = DayTime::Morning("Доброе утро".to_string());	// параметр T представляет тип String
	if let DayTime::Morning(morning_value)= morning { println!("Morning: {}", morning_value);}
    
     
    let evening = DayTime::Evening(16);		// параметр T представляет тип i32
	if let DayTime::Evening(evening_value)= evening { println!("Evening: {}", evening_value);}
}
</pre>
<p>В данном случае перечисление DayTime типизируется параметром T. Поэтому при определении переменных мы можем передать 
константам перечисления значения разных типов.</p>
<p>Консольный вывод программы:</p>
<div class="console">
<pre class="consoletext">
Morning: Доброе утро
Evening: 16
</pre>
</div>
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


<div class="nav"><p><a href="./5.4.php">Назад</a><a href="./">Содержание</a><a href="./5.6.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 5.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 5.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
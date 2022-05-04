<!DOCTYPE html>
<html >
<head>
<title>Dart | Работа с классом Future</title>
<meta charset="utf-8" />
<meta name="description" content="Future API в языке программирования Dart, конструкторы класса Future и его методы then, catchError, whenComplete, получение результата операции">
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
<h2>Работа с классом Future</h2><div class="date">Последнее обновление: 24.01.2021</div>

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

<p>Ключевым классом для написания асинхронного кода в Dart является класс Future. Рассмотрим, какие возможности он предоставляет.</p>
<h3>Конструкторы Future</h3>
<p>Для создания объекта Future можно использовать один из его конструкторов:</p>
<ul>
<li><p><code>Future(FutureOr&lt;T&gt; computation())</code>: создает объект future, который с помощью метода Timer.run запускает функцию computation асинхронно и возвращает ее результат.</p>
<p>Тип <code>FutureOr&lt;T&gt;</code> указывает, что функция computation должна возвращать либо объект Future&lt;T&gt; либо объект типа T. Например, чтобы получить объект <code>Future&lt;int&gt;</code>, 
функция computation должна возвращать либо объект <code>Future&lt;int&gt;</code>, либо объект <code>int</code></p></li>
<li><p><code>Future.delayed(Duration duration, [FutureOr&lt;T&gt; computation()])</code>: создает объект Future, который запускается после временной задержки, указанной через первый параметр Duration. Второй необязательный параметр 
указывает на функцию, которая запускается после этой задержки.</p></li>
<li><p><code>Future.error(Object error, [StackTrace stackTrace])</code>: создает объект Future, который содержит информацию о возникшей ошибке.</p></li>
<li><p><code>Future.microtask(FutureOr&lt;T&gt; computation())</code>: создает объект Future, который с помощью функции scheduleMicrotask запускает функцию computation асинхронно и возвращает ее результат.</p></li>
<li><p><code>Future.sync(FutureOr&lt;T&gt; computation())</code>: создает объект Future, который содержит результат 
немедленно вызываемой функции computation.</p></li>
<li><p><code>Future.value([FutureOr&lt;T&gt; value])</code>: создает объект Future, который содержит значение value.</p></li>
</ul>
<p>Применение некоторых конструкторов. Первый конструктор:</p>
<pre class="brush:dart;">
void main() {
  Future myFuture = Future(() {
		print("Hello Future");
  });
  
  print("Main ends");
}
</pre>
<p>Здесь в конструктор Future передается анонимная функция, которая не принимает параметров и ничего не возвращает, а просто выводит некоторое сообщение. 
Хотя здесь применяется анонимная функция, но мы также можем сделать ее полноценной функцией. Консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Main ends
Hello Future
</pre>
</div>
<p>Применение именнованого конструктора <code>Future.delayed()</code> аналогично за тем исключением, что 
он ожидает определенное время (заданное первым параметром) перед тем, как перейти к выполнению функции из второго параметра:</p>
<pre class="brush:dart;">
void main() {
  Future future = Future.delayed(Duration(seconds: 3), () =&gt; print("Hello Future"));
  print("Main ends");
}
</pre>
<p>Применение конструктора <code>Future.value()</code>, который может использоваться, если уже известно значение, которое будет содержать объект Future. 
Этот конструктор может быть полезен, в частности, при создании веб-сервисов, которые используют кэширование.</p>
<pre class="brush:dart;">
Future future = Future.value(35);
</pre>
<p>В данном случае Future получает число 35 (хотя это может быть любой объект). И затем в программе мы сможем получить это значение из future.</p>
<p>Применение конструктора <code>Future.error()</code>, который принимает объект ошибки и необязательный параметр - стек трассировки:</p>
<pre class="brush:dart;">
Future future = Future.error(ArgumentError.notNull("input"));
</pre>
<p>В данном случае в качестве объекта ошибки используется выражение <code>ArgumentError.notNull("input")</code>, 
которое говорит, что аргумент input не должен быть равен null.</p>
<h3>Получение значения</h3>
<p>В реальности тип Future - это generic-тип или обобщенный тип, который типизируется определенным типом - Future&lt;T&gt;. T в угловых скобках 
как раз и представляет тип значения, которое несет Future.</p>
<p>Возьмем один из случаев выше:</p>
<pre class="brush:dart;">
void main() {
  Future future = Future(() {
		print("Hello Future");
  });
  
  print("Main ends");
}
</pre>
<p>Здесь функция, которая передается в конструктор, ничего не возвращает, а просто выводит некоторое сообщение на консоль. Поэтому в реальности здесь мы 
получаем не просто объект Future, а <code>Future&lt;void&gt;</code>. То есть мы могли бы также написать:</p>
<pre class="brush:dart;">
Future&lt;void&gt; future = Future(() {
	print("Hello Future");
});
</pre>
<p>Изменим функцию - пусть теперь она возвращает строку:</p>
<pre class="brush:dart;">
Future&lt;String&gt; myFuture = Future(() {
	return "Hello Future";
});
</pre>
<p>Поскольку функция возвращает строку, то объект Future будет содержать объект String и будет представлять тип Future&lt;String&gt;.</p>
<p>То же самое касается и других конструкторов:</p>
<pre class="brush:dart;">
void main() {
	Future&lt;double&gt; future1 = Future(() {
		return 23.5;	// возвращает число double
	});
	Future&lt;String&gt; future2 = Future.delayed(Duration(seconds: 3), 
						() =&gt; "Hello Future");		// возвращает строку
	Future&lt;int&gt; future3 = Future.value(35);			// хранит число int
	Future&lt;String&gt; future4 = Future.value("Hello Dart");	// хранит строку
  
  print("Main ends");
}
</pre>
<h3>Получение значения и использование Future</h3>
<p>Выше мы определили ряд объектов Future. При их определении все они находятся в незавершенном состоянии, им только предстоит выполниться. 
Как же поймать тот момент, когда они уже выполнены и перешли в завершенное состояние? Для этого у Future определен метод <span class="b">then</span>. 
Этот метод принимает функцию обратного вызова, которая будет срабатывать при завершении Future. В качестве единственного параметра 
функция принимает полученное из Future значение.</p>
<p>Рассмотрим следующий пример:</p>
<pre class="brush:dart;">
void main() {
	Future&lt;String&gt; future = Future(() {
		print("Выполнение Future");
		return "Hello Future";	// возвращаем строку
	});
	
	future.then((value){
		print("Из Future получено значение: $value");
	});
  
  print("Main ends");
}
</pre>
<p>Здесь функция, которая передается в конструктор Future, возвращает строку, поэтому future представляет тип Future&lt;String&gt;.</p>
<p>В метод <code>then()</code> передается функция обратного вызова, которая принимает параметр value - это и будет та строка, которая возвращается 
при выполнении конструктора. Сама функция в then просто выводит это полученное значение на консоль. В итоге мы получим следующий консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Main ends
Выполнение Future
Из Future получено значение: Hello Future
</pre>
</div>
<p>Подобным образом мы можем получать значения других типов - int, double и т.д.</p>
<p>Может возникнуть вопрос, как быть с типом void - в этом случае вместо параметра указыватся прочерк:</p>
<pre class="brush:dart;">
void main() {
	Future&lt;void&gt; future = Future.delayed(Duration(seconds: 3), 
						() =&gt; print("Hello Future"));		// возвращаемый тип - void
	
	future.then((_) {	// прочерк вместо параметра для типа void
		print("Выполнение Future завершено");
		}
	);
  
  print("Main ends");
}
</pre>
<p>Консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Main ends
Hello Future
Выполнение Future завершено
</pre>
</div>
<p>При необходимости мы можем содавать цепочки методов then, которые будут выполняться друг за другом:</p>
<pre class="brush:dart;">
void main() {

	Future&lt;String&gt; future = Future(() {
		print("Выполняется Future");
		return "Hello Future";	// возвращаем строку
	});
	
	future.then((value){
		print("Из Future получено значение: $value");
		return 22;
	})
	.then((value) =&gt; print("Выполнение Future завершено. Получено: $value") );
  
  print("Main ends");
}
</pre>
<p>Функция из первого метода then получает из Future результат - строку и выводит ее на консоль. Кроме того, она возвращает новый результат - 
для примера это число 22.</p>
<p>В функции из второго метода then мы получаем именно это число, а не начальное значение из Future. Кроме того, параметр функции из каждого 
последующего метода then - это результат функции из предыдущего метода then.</p>
<p>Консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Main ends
Выполняется Future
Из Future получено значение: Hello Future
Выполнение Future завершено. Получено: 22
</pre>
</div>
<h3>Обработка ошибок</h3>
<p>При работе операции, которую представляет Future, может возникнуть ошибка. 
В этом случае при переходе в завершенное состояние Future вместо конкретного значения будет хранить информацию об ошибке. Для получения информации об ошибке 
можно использовать метод <span class="b">catchError()</span>, который работает аналогично методу <code>then</code> - также принимает функцию обратного вызова, 
в которую передается информация об ошибке:</p>
<pre class="brush:dart;">
void main() {

	Future&lt;String&gt; future = Future(() {
		print("Выполняется Future");
		throw "Непредвиденная ошибка";
	});
	
	future.then((value){
		print("Из Future получено значение: $value");
	})
	.catchError((err) =&gt; print(err) );
  
  print("Ждем получения значения из Future");
}
</pre>
<p>В данном случае в конструкторе Future эмулируем генерацию ошибки с помощью оператора throw (<code>throw "Непредвиденная ошибка";</code>). 
В качестве объекта ошибки здесь применяется обычная строка ("Непредвиденная ошибка") - это и есть то, что передается в функцию в catchError через параметр err.</p>
<p>В итоге в данном случае функция из метода then не сработает, а сработает функция из catchError, поскольку в процессе выполнения Future 
возникла ошибка. Консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Ждем получения значения из Future
Выполняется Future
Непредвиденная ошибка
</pre>
</div>
<p>В качестве второго и необязательного параметра метод catchError принимает функцию, которая проверяет соответствие объекта ошибки некоторому условию и, если 
объект ошибки соответствует этому условию, то возвращается true, иначе возвращается false. Если возвращается false, то есть объект ошибки НЕ 
соответствует условию, то функция из первого параметра НЕ выполняется.</p>
<p>Рассмотрим пример:</p>
<pre class="brush:dart;">
void main() {

	Future(() {
		print("Выполняется Future");
		throw 404;
	})
	.then((value){
		print("Из Future получено значение: $value");
	})
	.catchError((err) {
		print("Код ошибки: $err");
	}, 
	test: (err) {
		return err is int;
  });
  
  print("Ждем получения значения из Future");
}
</pre>
<p>Выражение <code>throw 404</code> указывает, что объект ошибки представляет число 404, то есть тип int.</p>
<p>В методе catchError второй параметр - функция <code>(err) { return err is int; }</code> через параметр err получает объект ошибки и 
с помощью выражения <code>err is int</code> проверяет, представляет ли объект ошибки тип int. Если представляет, то возвращается true и 
выполняется функция <code>(err) { print("Код ошибки: $err");}</code>.</p>
<p>И в данном случае мы получим следующий консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Ждем получения значения из Future
Выполняется Future
Код ошибки: 404
</pre>
</div>
<p>Однако если мы прописали бы генерацию ошибки следующим образом:</p>
<pre class="brush:dart;">throw "404";</pre>
<p>То теперь будет передаваться строка, а не число, соответственно выражение <code>return err is int</code> для такой ошибки возвратит false, и она не будет обрабатываться.</p>
<h3>Метод whenComplete</h3>
<p>Еще один метод - <span class="b">whenComplete</span> выполняет некоторую функцию при завершении Future. Эта функция выполняется вне зависимости 
возникла во Future ошибка или нет - после всех функций из then и catchError. Например:</p>
<pre class="brush:dart;">
void main() {

	Future(() {
		print("Выполняется Future");
		return "Hello Dart";
	})
	.then((value){
		print("Из Future получено значение: $value");
	})
	.catchError((err) {
		print("Ошибка: $err");
	})
	.whenComplete(() { print("Future завершил свою работу"); });
  
  print("Ждем получения значения из Future");
}
</pre>
<p>Консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Ждем получения значения из Future
Выполняется Future
Из Future получено значение: Hello Dart
Future завершил свою работу
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


<div class="nav"><p><a href="./7.1.php">Назад</a><a href="./">Содержание</a><a href="./7.3.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в язык Dart</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/1.1.php">Что такое Dart. Первая программа на Windows</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/1.2.php">Первая программа в IntelliJ IDEA</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Основы языка Dart</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.1.php">Структура программы</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.2.php">Переменные и константы</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.3.php">Примитивные типы данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.10.php">Значение null, nullable-типы и null-безопасность</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.4.php">Арифметические операции</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.5.php">Побитовые операции и операции сдвига</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.6.php">Условные выражения</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.7.php">Операции присваивания и приоритет операций</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.8.php">Условные конструкции</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/2.9.php">Циклы</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Функциональное программирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/3.1.php">Определение функций</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/3.2.php">Параметры функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/3.3.php">Возвращение результата из функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/3.4.php">Функция как объект</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/3.5.php">Анонимные и вложенные функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/3.6.php">Замыкания</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Объектно-ориентированное программирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.1.php">Классы и объекты</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.2.php">Константы и константные конструкторы классов</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.3.php">Наследование</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.4.php">Абстрактные классы и методы</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.5.php">Реализация интерфейсов</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.6.php">Миксины</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.7.php">Статические члены классов</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.8.php">Generics</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.9.php">Фабричный конструктор</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.10.php">Переопределение операторов</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/4.11.php">Перечисления</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Коллекции</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/5.1.php">List</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/5.2.php">Set</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/5.3.php">Map</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. Обработка исключений</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/6.1.php">Блок try..catch</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/6.2.php">Классы исключений</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/6.3.php">Оператор throw и создание своих типов исключений</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Асинхронность</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/7.1.php">Введение в асинхронность и Future</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/7.2.php">Работа с классом Future</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/tutorial/7.3.php">Асинхронные функции и операторы async и await</a></span></li>
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
	$("li:contains('Глава 7.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 7.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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
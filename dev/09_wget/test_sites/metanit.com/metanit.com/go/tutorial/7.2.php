<!DOCTYPE html>
<html >
<head>
<title>Go | Каналы</title>
<meta charset="utf-8" />
<meta name="description" content="Каналы (channels) в языке программирования Go, буферизированные и небуферизированные, однонаправленные каналы, передача данных через канал между горутинами">
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
<h2>Каналы</h2><div class="date">Последнее обновление: 22.01.2018</div>

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

<p>Каналы (channels) представляют инструменты коммуникации между горутинами. Для определения канала применяется ключевое слово <span class="b">chan</span>:</p>
<pre class="brush:go;">
chan тип_элемента
</pre>
<p>После слова <code>chan</code> указывается тип данных, которые будут передаться с помощью канала. Например:</p>
<pre class="brush:go;">var intCh chan int</pre>
<p>Здесь переменная intCh представляет канал, который передает данные типа int.</p>
<p>Для передачи данных в канал или, наоборот, из канала применяется операция <span class="b">&lt;-</span> (направленная влево стрелка). Например, передача данных в канал:</p>
<pre class="brush:go;">intCh &lt;- 5</pre>
<p>В данном случае в канал посылается число 5. Получение данных из канала в переменную:</p>
<pre class="brush:go;">val := &lt;- intCh</pre>
<p>Если ранее в канал было отправлено число 5, то при выполнении операции <code>&lt;- intCh</code> мы можем получить это число в переменную val.</p>
<p>Стоит учитывать, что мы можем отправить в канал и получить из канала данные только того типа, который представляет канал. Так, в примере с каналом intCh это данные типа int.</p>
<p>Как правило, отправителем данных является одна горутина, а получателем - другая горутина.</p>
<p>При простом определении переменной канала она имеет значение <span class="b">nil</span>, то есть по сути канал неинициализирован. Для инициализации 
применяется функция <span class="b">make()</span>. В зависимости от определения емкости канала он может быть буферизированным или небуферизированным.</p>
<h3>Небуфферизированные каналы</h3>
<p>Для создания небуферизированного канала вызывается функция <code>make()</code> без указания емкости канала:</p>
<pre class="brush:go;">
var intCh chan int = make(chan int)	// канал для данных типа int
strCh := make(chan string)	// канал для данных типа string
</pre>
<p>Если канал пустой, то горутина-получатель блокируется, пока в канале не окажутся данные. Когда горутина-отправитель посылает данные, 
горутина-получатель получает эти данные и возобновляет работу.</p>
<p>Горутина-отправитель может отправлять данные только в пустой канал. Горутина-отправитель блокируется до тех пор, пока данные из канала не будут получены. Например:</p>
<pre class="brush:go;">
package main
import "fmt"

func main() {
	
	intCh := make(chan int) 
	
	go func(){
			fmt.Println("Go routine starts")
			intCh &lt;- 5 // блокировка, пока данные не будут получены функцией main
	}()
	fmt.Println(&lt;-intCh)	// получение данных из канала
	fmt.Println("The End")
}
</pre>
<p>Через небуферизированный канал intCh горутина, представленная анонимной функцией, передает число 5:</p>
<pre class="brush:go;">intCh &lt;- 5</pre>
<p>А функция main получает это число:</p>
<pre class="brush:go;">fmt.Println(&lt;-intCh)</pre>
<p>Общий ход выполнения программы выглядит следующим образом:</p>
<ol>
<li><p>Запускается функция main. Она создает канал intCh и запускает горутину в виде анонимной функции.</p></li>
<li><p>Функция main продолжает выполняться и блокируется на строке <code>fmt.Println(&lt;-intCh)</code>, пока не будут получены данные.</p></li>
<li><p>Параллельно выполняется запущенная горутина в виде анонимной функции. В конце своего выполнения она отправляет даные через канал: <code>intCh &lt;- 5</code>. Горутина блокируется, 
пока функция main не получит данные.</p></li>
<li><p>Функция main получает отправленные данные, деблокируется и продолжает свою работу.</p></li>
</ol>
<p>В данном случае горутина определена в виде анонимной функции и поэтому она имеет доступ к окружению, в том числе к переменной intCh. Если же мы работаем с обычными функциями, 
то объекты каналов надо передавать через параметры:</p>
<pre class="brush:go;">
package main
import "fmt"

func main() {
	
	intCh := make(chan int) 
	
	go factorial(5, intCh)	// вызов горутины
	fmt.Println(&lt;-intCh)	// получение данных из канала
	fmt.Println("The End")
}

func factorial(n int, ch chan int){
	
	result := 1
	for i := 1; i &lt;= n; i++{
		result *= i
	}
	fmt.Println(n, "-", result)
	
	ch &lt;- result		// отправка данных в канал
}
</pre>
<p>Обратите внимание, как определяется параметр, который представляет канал данных типа int: <code>ch chan int</code>. Консольный вывод данной программы:</p>
<div class="console">
<pre class="consoletext">
5 - 120
120
The End
</pre>
</div>
<p>Таким образом, при использовании канала вызывающий поток - функция main ожидает завершения выполнения горутины.</p>
<p>Стоит отметить, что отправителем данных должна быть отдельно запускаемая горутина. Например, если мы отпределим отправление и получение данных через 
канал в самой функции main, то мы столкнемся с взаимоблокировкой:</p>
<pre class="brush:go;">
package main
import "fmt"

func main() {
	
	intCh := make(chan int) 
	intCh &lt;- 10		// функция main блокируется
	fmt.Println(&lt;-intCh)
}
</pre>
<h3>Буферизированные каналы</h3>
<p>Буферизированные каналы также создаются с помощью функции <code>make()</code>, только в качестве второго аргумента в функцию передается емкость канала. 
Если канал пуст, то получатель ждет, пока в канале появится хотя бы один элемент.</p>
<p>При отправке данных горутина-отправитель ожидает, пока в канале не освободится место для еще одного элемента и отправляет элемент, только тогда, когда в канале освобождается для него место.</p>
<pre class="brush:go;">
package main
import "fmt"

func main() {
	
	intCh := make(chan int, 3) 
	intCh &lt;- 10
	intCh &lt;- 3
	intCh &lt;- 24
	fmt.Println(&lt;-intCh)		// 10
	fmt.Println(&lt;-intCh)		// 3
	fmt.Println(&lt;-intCh)		//24
}
</pre>
<p>В данном случае отправителем и получателем данных является функция main. В ней создается канал из трех элементов, и последовательно отправляются три значения типа int.</p>
<p>В то же время в данном случае должно быть соответствие между количеством отправляемых и получаемых данных. Если в функции main будет одновременно отправлено 
значений больще, чем вмещает канал, то функция заблокируется:</p>
<pre class="brush:go;">
package main
import "fmt"

func main() {
	
	intCh := make(chan int, 3) 
	intCh &lt;- 10
	intCh &lt;- 3
	intCh &lt;- 24
	intCh &lt;- 15	// блокировка - функция main ждет, когда освободится место в канале
	
	fmt.Println(&lt;-intCh)
	fmt.Println("The End")
}
</pre>
<p>С помощью встроенных функций <span class="b">cap()</span> и <span class="b">len()</span> можно получить соответственно емкость и количество элементов в канале:</p>
<pre class="brush:go;">
package main
import "fmt"

func main() {
	
	intCh := make(chan int, 3) 
	intCh &lt;- 10
	
	fmt.Println(cap(intCh))		// 3
	fmt.Println(len(intCh))		// 1
	
	fmt.Println(&lt;-intCh)
}
</pre>
<h3>Однонаправленные каналы</h3>
<p>В Go можно определить канал, как доступный только для отправки данных или только для получения данных.</p>
<p>Определение канала только для отправки данных:</p>
<pre class="brush:go;">var inCh chan&lt;- int</pre>
<p>Определение канала только для получения данных:</p>
<pre class="brush:go;">var outCh &lt;-chan int</pre>
<p>Например:</p>
<pre class="brush:go;">
package main
import "fmt"

func main() {
	
	intCh := make(chan int, 2) 
	go factorial(5, intCh)
	fmt.Println(&lt;-intCh)
	fmt.Println("The End")
}

func factorial(n int, ch chan&lt;- int){
	
	result := 1
	for i := 1; i &lt;= n; i++{
		result *= i
	}
	ch &lt;- result
}
</pre>
<p>Здесь второй параметр функции factorial определен как канал, доступный только для отправки данных: <code>ch chan&lt;- int</code>. Соответственно 
внутри функции factorial мы можем только отправлять данные в канал, но не получать их.</p>
<h3>Возвращение канала</h3>
<p>Канал может быть возвращаемым значение функции. Однако следует внимательно подходить к операциям записи и чтения в возвращаемом канале. Например:</p>
<pre class="brush:go;">
package main
import "fmt"
 
func main() {
	fmt.Println("Start")
	 // создание канала и получение из него данных
	fmt.Println(&lt;-createChan(5))	// блокировка
    fmt.Println("End")
}
func createChan(n int) chan int{
	ch := make(chan int)	// создаем канал
	ch &lt;- n		// отправляем данные в канал
    return ch	// возвращаем канал
}
</pre>
<p>Функция createChan возвращает канал. Однако при выполнении операции <code>ch &lt;- n</code> мы столкнемся с блокировкой, поскольку происходит ожидание 
получения данных из канала. Поэтому следующее выражение <code>return ch</code> не будет выполняться.</p>
<p>И если все таки необходимо определить функцию, которая возвращает канал, то все операции чтения-записи в канал следует вынести в отдельную горутину:</p>
<pre class="brush:go;">
package main
import "fmt"
 
func main() {
	fmt.Println("Start")
	 // создание канала и получение из него данных
	fmt.Println(&lt;-createChan(5))	// 5
    fmt.Println("End")
}
func createChan(n int) chan int{
	ch := make(chan int)	// создаем канал
	go func(){
		ch &lt;- n		// отправляем данные в канал
	}()				// запускаем горутину
    return ch	// возвращаем канал
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


<div class="nav"><p><a href="7.1.php">Назад</a><a href="./">Содержание</a><a href="7.3.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в язык Go</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/1.1.php">Что такое Go</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/1.2.php">Первая программа</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/1.3.php">Go в LiteIDE</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/1.4.php">Go в Visual Studio Code</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Основы языка Go</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.1.php">Структура программы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.2.php">Переменные</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.3.php">Типы данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.4.php">Константы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.5.php">Арифметические операции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.6.php">Условные выражения</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.7.php">Поразрядные операции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.8.php">Массивы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.9.php">Условные конструкции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.10.php">Циклы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.11.php">Функции и их параметры</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.12.php">Возвращение результата из функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.15.php">Тип функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.16.php">Анонимные функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.17.php">Рекурсивные функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.18.php">defer и panic</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.13.php">Срезы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.14.php">Отображения</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Указатели</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/3.1.php">Что такое указатели</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/3.2.php">Указатели и функции</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Производные типы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/4.1.php">Объявление типов</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/4.2.php">Структуры</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/4.3.php">Вложенные структуры</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/4.4.php">Методы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/4.5.php">Методы указателей</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Пакеты и модули</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/5.1.php">Пакеты и их импорт</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/5.2.php">Введение в модули</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. Интерфейсы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/6.1.php">Введение в интерфейсы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/6.2.php">Соответствие интерфейсу</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/6.3.php">Полиморфизм</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Параллельное программирование. Горутины</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.1.php">Горутины</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.2.php">Каналы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.3.php">Закрытие канала</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.4.php">Синхронизация</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.5.php">Передача потоков данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.6.php">Мьютексы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.7.php">WaitGroup</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 8. Потоки и файлы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.1.php">Операции ввода-вывода. Reader и Writer</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.2.php">Создание и открытие файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.3.php">Чтение и запись файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.4.php">Стандартные потоки ввода-вывода и io.Copy</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.5.php">Форматированный вывод</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.6.php">Вывод на консоль</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.7.php">Форматируемый ввод</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.8.php">Чтение с консоли</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.9.php">Буферизированный ввод-вывод</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 9. Сетевое программирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.1.php">Отправка запросов</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.2.php">Сервер. Обработка подключений</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.3.php">Взаимодействие клиента и сервера</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.4.php">Установка таймаута</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.5.php">Отправка запросов по HTTP</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.6.php">http.Client</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 10. Базы данных</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/10.1.php">Работа с реляционными база данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/10.2.php">MySQL</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/10.3.php">PostgreSQL</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/10.4.php">SQLite</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/10.5.php">MongoDB</a></span></li>
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
<!DOCTYPE html>
<html >
<head>
<title>PHP | Обработка исключений</title>
<meta charset="utf-8" />
<meta name="description" content="Обработка исключений в языке программирования PHP, конструкция try catch finally, генерация исключений, классы Exception и Error, интерфейс Throwable">
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
<h1>Обработка исключений</h1><h2>Конструкция try catch finally</h2><div class="date">Последнее обновление: 24.03.2021</div>

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

<p>В процессе работы программы могут возникать различные ошибки, которые могут прервать работу программы. Например, рассмотрим следующую ситуацию:</p>
<pre class="brush:php;">
$a = 5;
$b = 0;
$result = $a / $b;
echo $result;
echo "Конец работы программы";
</pre>
<p>Программа выводит результат деления. Поскольку делитель равен 0, а на ноль делить нельзя, то при выполнении деления программа завершится, и в браузере мы увидим 
что-то типа следующего:</p>
<pre class="browser">
Fatal error: Uncaught DivisionByZeroError: Division by zero in D:\localhost\hello.php:11 Stack trace: #0 {main} thrown in D:\localhost\hello.php on line 11
</pre>
<p>Браузер отобразит нам произошедшую ошибку, причем дальше после строки с делением программа даже не будет выполняться.</p>
<p>Кто-то может сказать, что ситуация искуственная, так как мы сами определили делитель равный нулю. Но данные могут передаваться извне. Кроме того, кроме деления на ноль есть различные 
ситуации, при которых могут происходить ошибки. Но PHP предоставляет ряд возможностей для обработки подобных ситуаций.</p>
<p>Для обработки исключений в PHP применяется конструкция <span class="b">try-catch</span>:</p>
<pre class="brush:php;">
try
{
	// код, который может вызвать исключение
}
catch(Тип_исключения $ex)
{
	// обработка исключения
}
</pre>
<p>Эта конструкция в общем варианте состоит из двух блоков - <code>try</code> и <code>catch</code>. В блок <code>try</code> помещается код, который потенциально может вызвать исключение. 
А в блоке <code>catch</code> помещается обработка возникшего исключения. Причем каждого типа исключения мы можем определить свою логику обработки. Конкретный тип исключения, 
который мы хотим обработать, указывается в круглых скобках после оператора <code>catch</code>:</p>
<pre class="brush:php;">catch(Тип_исключения $ex)</pre>
<p>После названия типа указывается переменная этого типа (в данном случае <code>$ex</code>), которая будет хранить информацию об исключении и которую мы можем использовать 
при обработке исключения.</p>
<p>Если в блоке <code>try</code> при выполнении кода возникает ошибка, то блок <code>try</code> прекращает выполнение и передает управление блоку <code>catch</code>, который обрабатывает ошибку. 
А после завершения выполнения кода в блоке <code>catch</code> программа продолжает выполнять инструкции, которые размещены после блока <code>catch</code>.</p>
<p>Если в блоке <code>try</code> при выполнении кода не возникает ошибок, то блок <code>catch</code> не выполняется, а после завершения блока <code>try</code> 
программа продолжает выполнять инструкции, которые размещены после блока <code>catch</code>.</p>
<p>Например, обработаем ошибку с делением на ноль:</p>
<pre class="brush:php;">
try
{
	// код, который может вызвать исключение
	$a = 5;
	$b = 0;
	$result = $a / $b;
	echo $result;
}
catch(DivisionByZeroError $ex)
{
	// обработка исключения
	echo "Произошло исключение:&lt;br&gt;";
	echo $ex . "&lt;br&gt;";
}
echo "Конец работы программы";
</pre>
<p>В данном случае код деления на ноль, поскольку он может потенциально вызвать ошибку, помещен в блок <code>try</code>.</p>
<p>В блоке <code>catch</code> обрабатывается ошибка типа <span class="b">DivisionByZeroError</span>, которая генерируется при делении на ноль. Вся обработка сводится 
к выводу информации на экран.</p>
<p>В итоге при выполнении программа выведет следующее:</p>
<pre class="browser">
Произошло исключение:
DivisionByZeroError: Division by zero in D:\localhost\hello.php:14 Stack trace: #0 {main}
Конец работы программы
</pre>
<p>Как видно из вывода программы, она не завершается аварийно при делении на ноль, а продолжает работу.</p>
<h3>Типы ошибок и исключений</h3>
<p>В PHP для разных ситуаций есть множество типов, которые описывают ошибки. Все эти встроенные типы применяют интерфейс <span class="b">Throwable</span>:</p>
<img src="./pics/4.3.png" alt="Ошибки и исключения Error, Exception и Throwable в PHP" />
<p>Все типы делятся на две группы: собственно ошибки (класс <span class="b">Error</span>) и собственно исключения (класс <span class="b">Exception</span>). 
А от классов <code>Error</code> и <code>Exception</code> наследуются классы ошибок и исключений, которые описывают конкретные ситуации. Например, от класса 
<code>Error</code> наследуется класс <span class="b">ArithmeticError</span>, который описывает ошибки, возникающие при выполнении арифметических операций. 
А от класса <code>ArithmeticError</code> наследуется класс <span class="b">DivisionByZeroError</span>, который представляют ошибку при делении на ноль.</p>

<h3>Блок catch</h3>
<p>Конструкция <code>try..catch</code> позволяет определить несколько блоков <code>catch</code> - для обработки различных типов ошибок и исключений:</p>
<pre class="brush:php;">
try
{
	$result = 5 / 0;
	echo $result;
}
catch(ParseError $p)
{
    echo "Произошла ошибка парсинга";
}
catch(DivisionByZeroError $d)
{
	echo "На ноль делить нельзя";
}
</pre>
<p>При возникновении ошибки будет для ее обработки будет выбираться тот блок <code>catch</code>, который соответствует вошникшей ошибки. Так, в данном случае 
при делении на ноль будет выполняться второй блок <code>catch</code>.</p>
<p>Если бы в блоке <code>try</code> возникла бы ошибка, которая бы не соответствовала типам из блоков <code>catch</code> (в данном случае - типам DivisionByZeroError и ParseError), 
то такая ошибка не была бы обработана, и соответственно программа бы аварийно завершила свое выполнение.</p>
<p>Блоки catch с более конкретными типами ошибок и исключений должны идти в начале, а более с более общими типа - в конце:</p>
<pre class="brush:php;">
try
{
	$result = 5 / 0;
	echo $result;
}
catch(DivisionByZeroError $ex)
{
	echo "На ноль делить нельзя";
}
catch(ArithmeticError $ex)
{
	echo "Ошибка при выполнении арифметической операции";
}
catch(Error $ex)
{
	echo "Произошла ошибка";
}
catch(Throwable $ex)
{
	echo "Ошибка при выполнении программы";
}
</pre>
<p>Класс DivisionByZeroError унаследован от ArithmeticError, который, в свою очередь, унаследован от Error, реализующего интерфейс Throwable. Поэтому 
класс DivisionByZeroError представляет более конкретный тип и представляемые им ошибки должны обрабатываться в первую очередь. А тип Throwable представляет 
наиболее общий тип, так как ему соответствуют все возможные ошибки и исключения, поэтому блоки catch с таким типом должны идти в конце.</p>
<p>В данном случае опять же в блоке try происходит ошибка деления на ноль. Но этой ошибке соответствуют все четыре блока <code>catch</code>. Для обработки PHP будет 
выбирать первый попавшийся, который соответствует типу ошибки. В данном случае это блок для обработки ошибки типа DivisionByZeroError.</p>
<p>Если нам надо обрабатывать в принципе все ошибки и исключения, то мы можем определить только обработку общего для всех них типа Throwable:</p>
<pre class="brush:php;">
try
{
	$result = 5 / 0;
	echo $result;
}
catch(Throwable $ex)
{
	echo "Ошибка при выполнении программы";
}
</pre>
<p>Начиная с версии PHP 8.0 в блоке catch можно просто указать тип обрабатываемого исключения, не определяя переменную:</p>
<pre class="brush:php;">
catch(DivisionByZeroError)
{
	echo "Произошло исключение: деление на ноль";
}
</pre>
<h3>Получение информации об ошибках и исключениях</h3>
<p>Интерфейс <code>Throwable</code> предоставляет ряд методов, которые позволяют получить некоторую информацию о возникшем исключении:</p>
<ul>
<li><p><span class="b">getMessage()</span>: возвращает сообщение об ошибке</p></li>
<li><p><span class="b">getCode()</span>: возвращает код исключения</p></li>
<li><p><span class="b">getFile()</span>: возвращает название файла, в котором возникла ошибка</p></li>
<li><p><span class="b">getLine()</span>: возвращает номер строки, в которой возникла ошибка</p></li>
<li><p><span class="b">getTrace()</span>: возвращает трассировку стека</p></li>
<li><p><span class="b">getTraceAsString()</span>: возвращает трассировку стека в виде строки</p></li>
</ul>
<p>Применим некоторые из этих методов:</p>
<pre class="brush:php;">
try
{
	$result = 5 / 0;
	echo $result;
}
catch(DivisionByZeroError $ex)
{
	echo "Сообщение об ошибке: " . $ex-&gt;getMessage() . "&lt;br&gt;";
	echo "Файл: " . $ex-&gt;getFile() . "&lt;br&gt;";
	echo "Номер строки: " . $ex-&gt;getLine() . "&lt;br&gt;";
}
</pre>
<p>Результат работы:</p>
<pre class="browser">
Сообщение об ошибке: Division by zero
Файл: D:\localhost\hello.php
Номер строки: 11
</pre>
<h3>Блок finally</h3>
<p>Конструкция <code>try..catch</code> также может определять блок <span class="b">finally</span>. Этот блок выполняется в конце - после блока try и catch 
вне зависимости, возникла или нет ошибка. Нередко блок <code>finally</code> используется для закрытия ресурсов, которые применяются в блоке try.</p>
<pre class="brush:php;">
try
{
	$result = 5 / 0;
	echo $result . "&lt;br&gt;";
}
catch(Throwable $ex)
{
	echo "Ошибка при выполнении программы&lt;br&gt;";
}
finally
{
	echo "Блок finally&lt;br&gt;";
}
echo "Конец работы программы";
</pre>
<p>Вывод программы:</p>
<pre class="browser">
Ошибка при выполнении программы
Блок finally
Конец работы программы
</pre>
<p>Конструкция <code>try..catch..finally</code> может содержать либо все три блока, либо только два блока <code>try</code> и либо блок <code>catch</code>, 
либо блок <code>finally</code>.</p>

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


<div class="nav"><p><a href="./4.3.php">Назад</a><a href="./">Содержание</a><a href="./8.2.php">Вперед</a></p></div></div>
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
		<li class="closed"><span class="folder">Глава 1. Введение в PHP</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/1.1.php">Общий обзор языка программирования PHP</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/1.2.php">Установка PHP</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/1.3.php">Установка веб-сервера Apache</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/1.5.php">Установка веб-сервера Apache и PHP на Mac OS</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/1.4.php">Первый сайт на PHP</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. Основы PHP</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.1.php">Основы синтаксиса</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.2.php">Переменные</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.3.php">Типы данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.6.php">Операции в PHP</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.7.php">Конструкция if..else и тернарная операция</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.14.php">Конструкции switch и match</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.8.php">Циклы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.12.php">Массивы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.15.php">Ассоциативные массивы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.16.php">Многомерные массивы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.9.php">Функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.17.php">Параметры функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.18.php">Возвращение значений и оператор return</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.19.php">Анонимные функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.20.php">Замыкания / Closure</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.21.php">Стрелочные функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.22.php">Генераторы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.24.php">Ссылки</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.10.php">Область видимости переменной</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.4.php">Константы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.23.php">Проверка существования переменной</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.5.php">Получение и установка типа переменной. Преобразование типов</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.13.php">Операции с массивами</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 3. Отправка данных на сервер</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.2.php">Получение данных из строки запроса. GET-запросы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.1.php">Отправка форм. POST-запросы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.5.php">Безопасность данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.6.php">Отправка массивов</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.3.php">Работа с полями ввода форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/3.4.php">Пример обработки форм</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/5.4.php">Отправка файлов на сервер</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 4. Объектно-ориентированное программирование</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.1.php">Объекты и классы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.5.php">Конструкторы и деструкторы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.6.php">Анонимные классы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.2.php">Наследование</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.3.php">Модификаторы доступа</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.4.php">Статические методы и свойства</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.7.php">Интерфейсы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.8.php">Абстрактные классы и методы</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.9.php">Traits</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/6.10.php">Копирование объектов классов</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 5. Базовые возможности PHP</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/2.11.php">Подключение внешних файлов</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/4.4.php">Пространства имен</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/4.5.php">Типизация данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/4.1.php">Работа со строками</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/4.2.php">Работа с cookie</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/4.3.php">Сессии</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 6. Обработка исключений</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/8.1.php">Конструкция try catch finally</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/8.2.php">Генерация исключений</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 7. Работа с файловой системой</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/php/tutorial/5.1.php">Чтение и запись файлов</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/5.2.php">Управление файлами и каталогами</a></span></li>
				<li><span class="file"><a href="//metanit.com/php/tutorial/5.3.php">Блокировка файла. Функция flock</a></span></li>
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
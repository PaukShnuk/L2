<!DOCTYPE html>
<html >
<head>
<title>C# и .NET | Циклы</title>
<meta charset="utf-8" />
<meta name="description" content="Использование циклов в языке C#, виды циклов: for, foreach, while, do..while. Операторы continue и break">
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
<h2>Циклы</h2><div class="date">Последнее обновление: 10.11.2021</div>

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

<p>Циклы являются управляющими конструкциями, позволяя в зависимости от определенных условий выполнять некоторое действие множество раз. В 
C# имеются следующие виды циклов:</p>
<ul>
<li><p>for</p></li>
<li><p>foreach</p></li>
<li><p>while</p></li>
<li><p>do...while</p></li>
</ul>
<h3>Цикл for</h3>
<p>Цикл for имеет следующее формальное определение:</p>
<pre class="brush:c#;">
for ([действия_до_выполнения_цикла]; [условие]; [действия_после_выполнения])
{
    // действия
}
</pre>
<p>Объявление цикла <span class="b">for</span> состоит из трех частей. Первая часть объявления цикла - некоторые действия, которые выполняются один раз 
до выполнения цикла. Обычно здесь определяются переменные, которые будут использоваться в цикле.</p>
<p>Вторая часть - условие, при котором будет выполняться цикл. Пока условие равно <code>true</code>, будет выполняться цикл.</p>
<p>И третья часть - некоторые действия, которые выполняются после завершения блока цикла. Эти действия выполняются каждый раз при завершении блока цикла.</p>
<p>После объявления цикла в фигурных скобках помещаются сами действия цикла.</p>
<p>Рассмотрим стандартный цикл for:</p>
<pre class="brush:c#;">
for (int i = 1; i &lt; 4; i++)
{
    Console.WriteLine(i);
}
</pre>
<p>Здесь первая часть объявления цикла - <code>int i = 1</code> - создает и инициализирует переменную i.</p>
<p>Вторая часть - условие <code>i &lt; 4</code>. То есть пока переменная <code>i</code> меньше 4, будет выполняться цикл.</p>
<p>И третья часть - действия, выполняемые после завершения действий из блока цикла - увеличение переменной <code>i</code> на единицу.</p>
<p>Весь процесс цикла можно представить следующим образом:</p>
<ol>
<li><p>Определяется переменная <code>int i = 1</code></p></li>
<li><p>Проверяется условие <code>i &lt; 4</code>. Оно истинно (так как 1 меньше 4), поэтому выполняется блок цикла, а именно инструкция 
<code>Console.WriteLine(i)</code>, которая выводит на консоль значение переменной <code>i</code></p></li>
<li><p>Блок цикла закончил выполнение, поэтому выполняется треться часть объявления цикла - <code>i++</code>. После этого переменная <code>i</code> будет равна 2.</p></li>
<li><p>Снова проверяется условие <code>i &lt; 4</code>. Оно истинно (так как 2 меньше 4), поэтому опять выполняется блок цикла - 
<code>Console.WriteLine(i)</code></p></li>
<li><p>Блок цикла закончил выполнение, поэтому снова выполняется выражение <code>i++</code>. После этого переменная <code>i</code> будет равна 3.</p></li>
<li><p>Снова проверяется условие <code>i &lt; 4</code>. Оно истинно (так как 3 меньше 4), поэтому опять выполняется блок цикла - 
<code>Console.WriteLine(i)</code></p></li>
<li><p>Блок цикла закончил выполнение, поэтому снова выполняется выражение <code>i++</code>. После этого переменная <code>i</code> будет равна 4.</p></li>
<li><p>Снова проверяется условие <code>i &lt; 4</code>. Теперь оно возвражает <code>false</code>, так как значение переменной i НЕ меньше 4, 
поэтому цикл завершает выполнение. Далее уже выполняется остальная часть программы, которая идет после цикла</li></ol>
<p>В итоге блок цикла сработает 3 раза, пока значение i не станет равным 4. И каждый раз это значение будет увеличиваться на 1. Однократное выполнение блока цикла 
называется <span class="b">итерацией</span>. Таким образом, здесь цикл выполнит три итерации. Результат работы программы:</p>
<div class="console"><pre class="consoletext">
1
2
3
</pre></div>
<p>Если блок цикла <code>for</code> содержит одну инструкцию, то мы можем его сократить, убрав фигурные свобки:</p>
<pre class="brush:c#;">
for (int i = 1; i &lt; 4; i++)
	Console.WriteLine(i);

// или так
for (int i = 1; i &lt; 4; i++) Console.WriteLine(i);
</pre>
<p>При этом необязательно именно в первой части цикла объявлять переменную, а в третий части изменять ее значение - это могут быть любые действия. Например:</p>
<pre class="brush:c#;">
var i = 1;

for (Console.WriteLine("Начало выполнения цикла"); i &lt; 4; Console.WriteLine($"i = {i}"))
{
    i++;
}
</pre>
<p>Здесь опять же цикл срабатывает, пока переменная i меньше 4, только приращение переменной i происходит в блоке цикла. Консольный вывод данной программы:</p>
<div class="console"><pre class="consoletext">
Начало выполнения цикла
i = 2
i = 3
i = 4
</pre></div>


<p>Нам необязательно указывать все условия при объявлении цикла. Например, мы можем написать так:</p>
<pre class="brush:c#;">
int i = 1;
for (; ;)
{
	Console.WriteLine($"i = {i}");
	i++;
}
</pre>
<p>Формально определение цикла осталось тем же, только теперь блоки в определении у нас пустые: <code>for (; ;)</code>. У нас нет 
инициализированной переменной, нет условия, поэтому цикл будет работать вечно - бесконечный цикл.</p>
<p>Мы также можем опустить ряд блоков:</p>
<pre class="brush:c#;">
int i = 1;
for (; i&lt;4;)
{
	Console.WriteLine($"i = {i}");
	i++;
}
</pre>
<p>Этот пример по сути эквивалентен первому примеру: у нас также есть переменная-счетчик, только определена она вне цикла. У нас есть условие выполнения цикла. 
И есть приращение переменной уже в самом блоке for.</p>
<p>Также стоит отметить, что можно определять несколько переменных в объявлении цикла:</p>
<pre class="brush:c#;">
for (int i = 1, j = 1; i &lt; 10; i++, j++)
    Console.WriteLine($"{i * j}");
</pre>
<p>Здесь в первой части объявления цикла определяются две переменных: i и j. Цикл выполняется, пока i не будет равна 10. После каждой итерации 
переменые i и j увеличиваются на единицу. Консольный вывод программы:</p>
<div class="console"><pre class="consoletext">
0
1
4
9
16
25
36
49
64
81
</pre></div>
<h3>Цикл do..while</h3>
<p>В цикле do сначала выполняется код цикла, а потом происходит проверка условия в инструкции while. И пока это условие истинно, 
цикл повторяется.</p>
<pre class="brush:c#;">
do
{
    действия цикла
}
while (условие)
</pre>
<p>Например:</p>
<pre class="brush:c#;">
int i = 6;
do
{
    Console.WriteLine(i);
    i--;
}
while (i &gt; 0);
</pre>
<p>Здесь код цикла сработает 6 раз, пока i не станет равным нулю. Но важно отметить, что цикл do гарантирует хотя бы единократное выполнение действий, 
даже если условие в инструкции while не будет истинно. То есть мы можем написать:</p>
<pre class="brush:c#;">
int i = -1;
do
{
    Console.WriteLine(i);
    i--;
}
while (i &gt; 0);
</pre>
<p>Хотя у нас переменная i меньше 0, цикл все равно один раз выполнится.</p>
<h3>Цикл while</h3>
<p>В отличие от цикла do цикл <span class="b">while</span> сразу проверяет истинность некоторого условия, и если условие истинно, то код цикла выполняется:</p>
<pre class="brush:c#;">
while (условие)
{
    действия цикла
}
</pre>
<p>Например:</p>
<pre class="brush:c#;">
int i = 6;
while (i &gt; 0)
{
    Console.WriteLine(i);
    i--;
}
</pre>
<h3>Цикл foreach</h3>
<p>Цикл foreach предназначен для перебора набора или коллекции элементов. Его общее определение:</p>
<pre class="brush:c#;">
foreach(тип_данных переменная in коллекция)
{
	// действия цикла
}
</pre>
<p>После оператора <code>foreach</code> в скобках сначала идет определение переменной. Затем ключевое слово <span class="b">in</span> и далее коллекция, 
элементы которой надо перебрать.</p>
<p>При выполнении цикл последовательно перебирает элементы коллекции и помещает их в переменную, и таким образом в блоке цикла мы можем выполнить с ними некоторые действия.</p>
<p>Например, возьмем строку. Строка по сути - это коллекция символов. И .NET позволяет перебрать все элементы строки - ее символы с помощью цикла <span class="b">foreach</span>.</p>
<pre class="brush:c#;">
foreach(char c in "Tom")
{
    Console.WriteLine(c);
}
</pre>
<p>Здесь цикл foreach пробегается по всем символам строки "Tom" и каждый символ помещает в символьную переменную <code>c</code>. В блоке цикла 
значение переменной <code>c</code> выводится на консоль. Поскольку в строке "Tom" три символа, то цикл выполнится три раза. Консольный вывод программы:</p>
<div class="console">
<pre class="consoletext">
T
o
m</pre>
</div>
<p>Стоит отметить, что определяемая в объявлении цикла должна по типу соответствовать типу элементов перебираемой коллекции. Так, элементы строки - значения типа 
<code>char</code> - символы. Поэтому переменная <code>c</code> имеет тип <code>char</code>. Однако в реальности не всегда бывает очевидно, какой тип представляют 
элементы коллекции. В этом случае мы можем определить переменную с помощью оператора <span class="b">var</span>:</p>
<pre class="brush:c#;">
foreach(var c in "Tom")
{
    Console.WriteLine(c);
}
</pre>
<p>В дальнейшем мы подробнее рассмотрим, что представляют собой коллекции в .NET и какие именно коллекции можно перебирать с помощью цикла <code>foreach</code>.</p>
<h3>Операторы continue и break</h3>
<p>Иногда возникает ситуация, когда требуется выйти из цикла, не дожидаясь его завершения. В этом случае мы можем воспользоваться оператором 
<span class="b">break</span>.</p>
<p>Например:</p>
<pre class="brush:c#;">
for (int i = 0; i &lt; 9; i++)
{
    if (i == 5)
        break;
    Console.WriteLine(i);
}
</pre>
<p>Хотя в условии цикла сказано, что цикл будет выполняться, пока счетчик i не достигнет значения 9, в реальности цикл сработает 5 раз. 
Так как при достижении счетчиком i значения 5, сработает оператор break, и цикл завершится.</p>
<div class="console">
<pre class="consoletext">
0
1
2
3
4
</pre>
</div>
<p>Теперь поставим себе другую задачу. А что если мы хотим, чтобы при проверке цикл не завершался, а просто пропускал текущую итерацию. 
Для этого мы можем воспользоваться оператором <span class="b">continue</span>:</p>
<pre class="brush:c#;">
for (int i = 0; i &lt; 9; i++)
{
    if (i == 5)
        continue;
    Console.WriteLine(i);
}
</pre>
<p>В этом случае цикл, когда дойдет до числа 5, которое не удовлетворяет условию проверки, просто пропустит это число и перейдет к следующей итерации:</p>
<div class="console">
<pre class="consoletext">
0
1
2
3
4
6
7
8
</pre>
</div>
<p>Стоит отметить, что операторы <code>break</code> и <code>continue</code> можно применять в любом типе циклов.</p>
<h3>Вложенные циклы</h3>
<p>Одни циклы могут быть вложенными в другие. Например:</p>
<pre class="brush:c#;">
for (int i = 1; i &lt; 10; i++)
{
    for (int j = 1; j &lt; 10; j++)
    {
        Console.Write($"{i * j} \t");
    }
    Console.WriteLine();
}
</pre>
<p>В данном случае цикл <code>for (int i = 1; i &lt; 10; i++)</code> выполняется 9 раз, то есть имеет 9 итераций. Но в рамках каждой итерации 
выполняется девять раз вложенный цикл <code>for (int j = 1; j &lt; 10; j++)</code>. В итоге данная программа выведет таблицу умножения.</p>
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

<div class="dop socialtop"><fieldset><legend>Дополнительные материалы</legend>
<ul>
<li><a title="Вопросы для самопроверки" href="../questions/1.3.php"><i class="fa fa-lg fa-question"></i><span class="dop-txt">Вопросы для самопроверки</span></a></li>
<li><a title="Упражнения" href="../practice/1.2.php"><i class="fa fa-lg fa-pencil"></i><span class="dop-txt">Упражнения</span></a></li>
</ul>
</fieldset></div>
<div class="nav"><p><a href="./2.5.php">Назад</a><a href="./">Содержание</a><a href="./2.4.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в C#</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.1.php">Язык C# и платформа .NET</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.2.php">Начало работы с Visual Studio. Первая программа</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.3.php">Компиляция в командной строке</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.6.php">Первая программа на MacOS</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы программирования на C#</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.5.php">Структура программы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.25.php">Переменные и константы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.26.php">Литералы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.1.php">Типы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.15.php">Консольный ввод-вывод</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.3.php">Арифметические операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.22.php">Поразрядные операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.23.php">Операции присваивания</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.2.php">Преобразования базовых типов данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.24.php">Условные выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.5.php">Конструкция if..else и тернарная операция</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.6.php">Циклы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.4.php">Массивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.7.php">Задачи с массивами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.8.php">Методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.9.php">Параметры методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.34.php">Возвращение значения и оператор return</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.27.php">Передача параметров по ссылке и значению. Выходные параметры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.10.php">Массив параметров и ключевое слово params</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.11.php">Рекурсивные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.20.php">Локальные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.45.php">Конструкция switch</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.12.php">Перечисления enum</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Классы, структуры и пространства имен</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.1.php">Классы и объекты</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.35.php">Конструкторы, инициализаторы и деконструкторы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.4.php">Класс Program и метод Main. Программы верхнего уровня</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.13.php">Структуры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.16.php">Типы значений и ссылочные типы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.18.php">Область видимости (контекст) переменных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.25.php">Пространства имен</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.52.php">Глобальные пространства имен</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.53.php">Подключение пространств имен по умолчанию</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.46.php">Создание библиотеки классов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.2.php">Модификаторы доступа</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.4.php">Свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.5.php">Перегрузка методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.6.php">Статические члены и модификатор static</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.3.php">Поля и структуры для чтения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.50.php">Null и ссылочные типы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.17.php">Null и значимые типы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.26.php">Проверка на null, операторы ?. и ??</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.1.php">Псевдонимы типов и статический импорт</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Объектно-ориентированное программирование</span>
		<ul>		
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.7.php">Наследование</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.11.php">Преобразование типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.19.php">Виртуальные методы и свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.41.php">Скрытие методов и свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.42.php">Различие переопределения и скрытия методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.8.php">Абстрактные классы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.10.php">Класс System.Object и его методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.12.php">Обобщенные типы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.38.php">Ограничения обобщений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.39.php">Наследование обобщенных типов</a></span></li>
			</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Обработка исключений</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.14.php">Конструкция try..catch..finally</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.28.php">Блок catch и фильтры исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.29.php">Типы исключений. Класс Exception</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.31.php">Генерация исключения и оператор throw</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.17.php">Создание классов исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.30.php">Поиск блока catch при обработке исключений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Делегаты, события и лямбды</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.13.php">Делегаты</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.43.php">Применение делегатов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.15.php">Анонимные методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.16.php">Лямбды</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.14.php">События</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.28.php">Ковариантность и контравариантность делегатов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.33.php">Делегаты Action, Predicate и Func</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.54.php">Замыкания</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Интерфейсы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.9.php">Определение интерфейсов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.49.php">Применение интерфейсов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.44.php">Явная реализация интерфейсов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.47.php">Реализация интерфейсов в базовых и производных классах</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.48.php">Наследование интерфейсов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.40.php">Интерфейсы в обобщениях</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.22.php">Копирование объектов. Интерфейс ICloneable</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.23.php">Сортировка объектов. Интерфейс IComparable</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.27.php">Ковариантность и контравариантность обобщенных интерфейсов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Дополнительные возможности ООП в C#</span>
		<ul><li><span class="file"><a href="//metanit.com/sharp/tutorial/3.36.php">Определение операторов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.37.php">Перегрузка операций преобразования типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.10.php">Индексаторы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.21.php">Переменные-ссылки и возвращение ссылки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.18.php">Методы расширения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.21.php">Частичные классы и методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.20.php">Анонимные типы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.19.php">Кортежи</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.51.php">Records</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Pattern matching</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.34.php">Паттерн типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.55.php">Паттерн свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.56.php">Паттерны кортежей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.57.php">Позиционный паттерн</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.58.php">Реляционный и логический паттерны</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.59.php">Паттерны списков</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Коллекции</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.5.php">Список List&lt;T&gt;</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.6.php">Двухсвязный список LinkedList&lt;T&gt;</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.7.php">Очередь Queue&lt;T&gt;</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.8.php">Стек Stack&lt;T&gt;</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.9.php">Словарь Dictionary&lt;T, V&gt;</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.13.php">Класс ObservableCollection</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.11.php">Интерфейсы IEnumerable и IEnumerator</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.12.php">Итераторы и оператор yield</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 11. Работа со строками</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/7.1.php">Строки и класс System.String</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/7.2.php">Операции со строками</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/7.5.php">Форматирование и интерполяция строк</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/7.3.php">Класс StringBuilder</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/7.4.php">Регулярные выражения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 12. Работа с датами и временем</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/19.1.php">Структура DateTime</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/19.2.php">Форматирование дат и времени</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/19.3.php">DateOnly и TimeOnly</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 13. Дополнительные классы и структуры .NET</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/20.1.php">Отложенная инициализация и тип Lazy</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/20.2.php">Математические вычисления и класс Math</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/20.4.php">Преобразование типов и класс Convert</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/20.5.php">Класс Array и массивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.33.php">Span</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.32.php">Индексы и диапазоны</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 14. Многопоточность</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.1.php">Введение в многопоточность. Класс Thread</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.2.php">Создание потоков. Делегат ThreadStart</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.3.php">Потоки с параметрами и ParameterizedThreadStart</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.4.php">Синхронизация потоков</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.5.php">Мониторы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.6.php">Класс AutoResetEvent</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.7.php">Мьютексы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.8.php">Семафоры</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 15. Параллельное программирование и библиотека TPL</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/12.1.php">Задачи и класс Task</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/12.2.php">Работа с классом Task</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/12.3.php">Задачи продолжения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/12.4.php">Класс Parallel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/12.5.php">Отмена задач и параллельных операций. CancellationToken</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 16. Aсинхронное программирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.3.php">Асинхронные методы, async и await</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.7.php">Возвращение результата из асинхронного метода</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.5.php">Последовательное и параллельное выполнение. Task.WhenAll и Task.WhenAny</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.4.php">Обработка ошибок в асинхронных методах</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.8.php">Асинхронные стримы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 17. LINQ</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.1.php">Основы LINQ</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.6.php">Проекция данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.2.php">Фильтрация коллекции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.3.php">Сортировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.4.php">Объединение, пересечение и разность коллекций</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.5.php">Агрегатные операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.11.php">Получение части коллекции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.6.php">Группировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.7.php">Соединение коллекций</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.10.php">Проверка наличия и получение элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.8.php">Отложенное и немедленное выполнение LINQ</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.9.php">Делегаты в запросах LINQ</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 18. Parallel LINQ</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/17.1.php">Введение в Parallel LINQ. Метод AsParallel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/17.2.php">Метод AsOrdered</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/17.3.php">Обработка ошибок и отмена параллельных операции</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 19. Рефлексия</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.1.php">Введение в рефлексию. Класс System.Type</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.2.php">Применение рефлексии и исследование типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.5.php">Исследование методов и конструкторов с помощью рефлексии</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.6.php">Исследование полей и свойств с помощью рефлексии</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.3.php">Динамическая загрузка сборок и позднее связывание</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.4.php">Атрибуты в .NET</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 20. Dynamic Language Runtime</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/9.1.php">DLR в C#. Ключевое слово dynamic</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/9.2.php">DynamicObject и ExpandoObject</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/9.3.php">Использование IronPython в .NET</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 21. Сборка мусора, управление памятью и указатели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/8.1.php">Сборщик мусора в C#</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/8.2.php">Финализируемые объекты. Метод Dispose</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/8.5.php">Конструкция using</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/8.3.php">Указатели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/8.4.php">Указатели на структуры, члены классов и массивы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 22. Работа с файловой системой</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.1.php">Работа с дисками</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.2.php">Работа с каталогами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.3.php">Работа с файлами. Классы File и FileInfo</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.4.php">FileStream. Чтение и запись файла</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.5.php">Чтение и запись текстовых файлов. StreamReader и StreamWriter</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.6.php">Бинарные файлы. BinaryWriter и BinaryReader</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.7.php">Архивация и сжатие файлов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 23. Работа с JSON</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/6.5.php">Сериализация в JSON. JsonSerializer</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 24. Работа с XML</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.1.php">XML-Документы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.2.php">Работа с XML с помощью System.Xml</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.3.php">Изменение XML-документа</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.4.php">XPath</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.5.php">Linq to Xml. Создание Xml-документа</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.6.php">Выборка элементов в LINQ to XML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.7.php">Изменение документа в LINQ to XML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/6.4.php">Сериализация в XML. XmlSerializer</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 25. Процессы и домены приложения</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/18.1.php">Процессы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/18.2.php">Домены приложений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/18.3.php">AssemblyLoadContext и динамическая загрузка и выгрузка сборок</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 26. Валидация модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/22.1.php">Основы валидации модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/22.2.php">Атрибуты валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/22.3.php">Создание своих атрибутов валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/22.4.php">Самовалидация модели</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 27. Что нового</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/23.1.php">Нововведения в C# 11</a></span></li>
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
	
	$("li:contains('Глава 2.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
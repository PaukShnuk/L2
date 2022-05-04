<!DOCTYPE html>
<html >
<head>
<title>PHP | Операции</title>
<meta charset="utf-8" />
<meta name="description" content="Арифметические, логические, поразрядные операции и операции сравнения и присвоения в PHP, инкремент и декремент, приоритет операций">
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
<h2>Операции в PHP</h2><div class="date">Последнее обновление: 06.03.2021</div>

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

<p>В PHP мы можем использовать различные операторы: арифметические, логические и т.д. Рассмотрим каждый тип операций.</p>
<h3>Арифметические операции</h3>
<ul>
<li><p>+ (операция сложения)</p></p>Например, <code>$a + 5</code></p></li>
<li><p>- (операция вычитания)</p></p>Например, <code>$a - 5</code></p></li>
<li><p>* (умножение)</p></p>Например, <code>$a * 5</code></p></li>
<li><p>/ (деление)</p></p>Например, <code>$a / 5</code></p></li>
<li><p>% (получение остатка от деления)</p></p>Например:</p>
<pre class="brush:php;">
$a = 12;
echo $a % 5; // равно 2
</pre></li>
<li><p>** (возведение в степень)</p></p>Например, <code>$a ** 2</code></p></li>
</ul>
<p>Примеры операций:</p>
<pre class="brush:php;">
$a = 8 + 2; // 10, сложение
$a = 8 - 2; // 6, вычитание
$a = 8 * 2; // 16, умножение
$a = 8 / 2; // 4, деление
$a = 8 % 2; // 0, деление по модулю
$a = 8 ** 2; // 64, возведение в степень
</pre>

<h3>Инкремент и декремент</h3>
<p>Отдельно следует сказать операции <span class="b">инкремента</span> и <span class="b">декремента</span>, которые также являются 
арифметическими операциями, но производятся над одним операндом.</p>
<p>Инкремент - операция <span class="b">++</span> увеличивает число на единицу. Например, <code>++$a</code></p>
<p>Есть два типа инкремента: префиксный инкремент (<code>++$a</code>) и постфиксный (<code>$a++</code>). Важно понимать разницу между этими операциями. 
Рассмотрим сначала префиксный инкремент:</p>
<pre class="brush:php;">
$a = 12;
$b = ++$a; // $b равно 13
echo "a = $a   b = $b";
</pre>
<p>Результат работы:</p>
<pre class="browser">
a = 13 b = 13
</pre>
<p>Здесь сначала к значению переменной $a прибавляется единица, а затем ее значение приравнивается переменной $b.</p>
<p>Теперь посмотрим, что будет в случае с постфиксным инкрементом:</p>
<pre class="brush:php;">
$a = 12;
$b = $a++; // $b равно 12
echo "a = $a   b = $b";
</pre>
<p>Результат работы:</p>
<pre class="browser">
a = 13 b = 12
</pre>
<p>Здесь сначала значение переменной $a передается переменной $b, а затем происходило увеличение значения переменной $a.</p>
<p>Декремент - операция <span class="b">--</span> представляет уменьшение значения на единицу. Она аналогично инкременту бывает префиксной и постфиксной и работает 
аналогично. Например, префиксный декремент:</p>
<pre class="brush:php;">
$a = 12;
$b = --$a; // $b равно 11
echo "a = $a   b = $b";
</pre>
<p>Результат работы:</p>
<pre class="browser">
a = 11 b = 11
</pre>
<p>Сначала значение переменной $a уменьшается на единицу, а затем ее значение приравнивается переменной $b.</p>
<p>Постфиксный декрементом:</p>
<pre class="brush:php;">
$a = 12;
$b = $a--; // $b равно 12
echo "a = $a   b = $b";
</pre>
<p>Результат работы:</p>
<pre class="browser">
a = 11 b = 12
</pre>
<p>Здесь же сначала значение переменной $a передается переменной $b и только после этого уменьшается на единицу.</p>
<h3>Объединение строк</h3>
<p>Для объединения строк используется оператор "точка". Например, соединим несколько строк:</p>
<pre class="brush:php;">
$a="Привет, ";
$b=" мир";
echo $a . " " . $b . "!";	// Привет мир!
</pre>
<p>Если переменные представляют не строки, а другие типы, например, числа, то их значения преобразуются в строки и затем также происходит операция объединения строк.</p>

<h3>Операции сравнения</h3>
<p>Операции сравнения, как правило, применяются в условных конструкциях, когда надо сравнивать два значения, и в зависимости от результата сравнения выполнить некоторые 
действия. Имеются следующие операции сравнения.</p>
<ul>
<li><p>==</p></p>Оператор равенства сравнивает два значения, и если они равны, возвращает true, иначе возвращает false: <code>$a == 5</code></p></li>
<li><p>===</p></p>Оператор тождественности также сравнивает два значения, и если они равны, возвращает true, иначе возвращает false: <code>$a === 5</code></p></li>
<li><p>!=</p></p>Сравнивает два значения, и если они <span class="b">не</span> равны, возвращает true, иначе возвращает false: <code>$a != 5</code></p></li>
<li><p>!==</p></p>Сравнивает два значения, и если они <span class="b">не</span> равны, возвращает true, иначе возвращает false: <code>$a !== 5</code></p></li>
<li><p>&gt;</p></p>Сравнивает два значения, и если первое больше второго, то возвращает true, иначе возвращает false: <code>$a &gt; 5</code></p></li>
<li><p>&lt;</p></p>Сравнивает два значения, и если первое меньше второго, то возвращает true, иначе возвращает false: <code>$a &lt; 5</code></p></li>
<li><p>&gt;=</p></p>Сравнивает два значения, и если первое больше или равно второму, то возвращает true, иначе возвращает false: <code>$a &gt;= 5</code></p></li>
<li><p>&lt;=</p></p>Сравнивает два значения, и если первое меньше или равно второму, то возвращает true, иначе возвращает false: <code>$a &lt;= 5</code></p></li>
</ul>
<h4>Оператор равенства и тождественности</h4>
<p>Оба оператора сравнивают два выражения и возвращают true, если выражения равны. Но между ними есть различия. Если в операции равенства принимают два 
значения разных типов, то они приводятся к одному - тому, который интерпретатор найдет оптимальным. Например:</p>
<pre class="brush:php;">
$a = (2 == "2"); 	// true (значения равны)
$b = (2 === "2"); 	// false (значения представляют разные типы)
</pre>
<p>Строка "2" по сути представляет то же значение, что и число 2, оператор сравнения возвратит <code>true</code>. Однако они представляют разные типы, 
поэтому оператор тождественности возвратит <code>false</code></p>
<p>Аналогично работают операторы неравенства <code>!=</code> и <code>!==</code>.</p>
<pre class="brush:php;">
$a = (2 != "2"); 	// false, так как значения равны
$b = (2 !== "2"); 	// true, так как значения представляют разные типы
</pre>
<h4>Оператор &lt;=&gt;</h4>
<p>Отдельно стоит сказать про оператор <span class="b">&lt;=&gt;</span>. Он также сравнивает два значения и 
возвращает 
<ul>
<li><p>0, если оба значения равны</p></li>
<li><p>1, если значение слева больше, чем значение справа</p></li>
<li><p>–1, если значение слева меньше, чем значение справа</p></li>
</ul>
<p>Применение:</p>
<pre class="brush:php;">
$a = 2 &lt;=&gt; 2; 	// 0	(эквивалентно 2 == 2)
$b = 3 &lt;=&gt; 2; 	// 1	(эквивалентно 3 &gt; 2)
$c = 1 &lt;=&gt; 2; 	// -1	(эквивалентно 1 &lt; 2)
echo "a=$a   b=$b	c=$c";	// a=0  b=1  c=-1
</pre>
<h3>Логические операции</h3>
<p>Логические операции обычно применяются для объединения результатов двух операций сравнения. Например, нам надо выполнить определенное действие, если истинны 
будут несколько условий. Имеются следующие логические операции:</p>
<ul>
<li><p>&amp;&amp;</p></p>Возвращает true, если обе операции сравнения возвращают true, иначе возвращает false: <code>$a && $b</code></p></li>
<li><p>and</p></p>Аналогично операции <code>&&</code>: <code>$a and $b</code></p></li>
<li><p>||</p></p>Возвращает true, если хотя бы одна операция сравнения возвращают true, иначе возвращает false: <code>$a || $b</code></p></li>
<li><p>or</p></p>Аналогично операции <code>||</code>: <code>$a or $b</code></p></li>
<li><p>!</p></p>Возвращает true, если операция сравнения возвращает false: <code>!$a</code></p></li>
<li><p>xor</p></p>Возвращает true, если только одно из значений равно true. Если оба равны true или ни одно из них не равно true, возвращает false: <code><code>$a xor $b</code></code></p></li>
</ul>
<p>Примеры логических операций:</p>
<pre class="brush:php;">
$a = (true &amp;&amp; false); 	// false
// аналогично
$a = (true and false);	// false

$b = (true || false); // true
// аналогично следующей операции
$b = (true or false); // true

$c = !true; 		  // false
</pre>
<p>Отдельно примеры с операцией <code>xor</code>:</p>
<pre class="brush:php;">
$a = (true xor true);	//	false
$b = (false xor true);	//	true
$c = (false xor false);	//	false
</pre>
<h3>Поразрядные операции</h3>
<p>Поразрядные операции производятся над отдельными разрядными или битами числа. Числа рассматриваются в двоичном представлении, например, 2 
в двоичном представлении 010, число 7 - 111.</p>
<ul>
<li><p>&amp; (логическое умножение)</p></p>Умножение производится поразрядно, и если у обоих операндов значения разрядов равно 1, то операция возвращает 1, иначе возвращается число 0. 
Например:</p>
<pre class="brush:php;">
$a = 4; //100
$b = 5; //101
echo $a & $b; // равно 4 - 100
</pre>
<p>Здесь число 4 в двоичной системе равно 100, а число 5 равно 101. Поразрядно умножим числа и получим (1*1, 0*0, 0 *1) = 100, то есть число 4 в десятичном формате.</p></li>
<li><p>| (логическое сложение)</p></p>Похоже на логическое умножение, операция также производится по двоичным разрядам, но теперь возвращается единица, если хотя бы у одного числа в данном разряде имеется единица. Например:</p>
<pre class="brush:php;">
$a = 4; //100
$b = 5; //101
echo $a | $b; // равно 5 - 101
</pre>
<p>Поразрядно сложим числа и получим (1+1, 0+0, 0+1) = 101, то есть число 5 в десятичном формате.</p></li>
</li>

<li><p>^ (операция исключающего ИЛИ)</p></p>Возвращает единицу, если у обоих операндов разные значения соответствующих разрядов. Но если у обоих операндов 
значения соответствующих разрядов совпадают, то возвращается 0. Например:</p>
<pre class="brush:php;">
$a = 5 ^ 4; // 101^100=001  - в десятичой системе 1
$b = 7 ^ 4; // 111^100=011  - в десятичой системе 3
</pre>
<p>Поразрядно произведем операцию <code>5 ^ 4</code> (в двоичной системе она аналогична операции <code>101^100</code>): (1^1, 0^0, 0^1) = 001. 
В случае с <code>1^1</code> значения разрядов совпадают, поэтому возвращается 0. Во втором случае - <code>0^0</code> значения также совпадают, поэтому также возвращается 
0. В третьем случае - <code>0^1</code> значения разные, поэтому возвращается 1. В итоге получится 001 или число 1 в десятичной системе.</p></li>
</li>
<li><p>~ (логическое отрицание)</p></p>инвертирует все разряды: если значение разряда равно 1, то оно становится равным нулю, и наоборот.</p>
<pre class="brush:php;">
$a = 4; 	//00000100	
$b = ~$a;	//11111011	-5
echo $b; 	// равно -5 
</pre></li>
<li><p>&lt;&lt;</p>
<p>x&lt;&lt;y - сдвигает число x влево на y разрядов. Например, 4&lt;&lt;1 сдвигает число 4 (которое в двоичном представлении 100) на один разряд влево, то есть в итоге получается 1000 или число 8 в десятичном представлении</p></li>
<li><p>&gt;&gt;</p>
<p>x&gt;&gt;y - сдвигает число x вправо на y разрядов. Например, 16&gt;&gt;1 сдвигает число 16 (которое в двоичном представлении 10000) на один разряд вправо, то есть в итоге получается 1000 или число 8 в десятичном представлении</p></li>
</ul>
<h3>Операции присваивания</h3>
<ul>
<li><p>=</p></p>Приравнивает переменной определенное значение: <code>$a = 5</code></p></li>
<li><p>+=</p></p>Сложение с последующим присвоением результата. Например:</p>
<pre class="brush:php;">
$a=12;
$a += 5;
echo $a; // равно 17
</pre></li>
<li><p>-=</p></p>Вычитание с последующим присвоением результата. Например:</p>
<pre class="brush:php;">
$a=12;
$a -= 5;
echo $a; // равно 7
</pre></li>
<li><p>*=</p></p>Умножение с последующим присвоением результата:</p>
<pre class="brush:php;">
$a=12;
$a *= 5;
echo $a; // равно 60
</pre></li>
<li><p>/=</p></p>Деление с последующим присвоением результата:</p>
<pre class="brush:php;">
$a=12;
$a /= 5;
echo $a; // равно 2.4
</pre></li>
<li><p>.=</p></p>Объединение строк с присвоением результата. Применяется к двум строкам. Если же переменные хранят не строки, а, к примеру, числа, 
то их значения преобразуются в строки и затем проводится операция:</p>
<pre class="brush:php;">
$a=12;
$a .= 5;
echo $a; // равно 125
// идентично
$b="12";
$b .="5"; // равно 125
</pre></li>
<li><p>%=</p></p>Получение остатка от деления с последующим присвоением результата:</p>
<pre class="brush:php;">
$a=12;
$a %= 5;
echo $a; // равно 2
</pre></li>
<li><p>**=</p></p>Получение результата от возведения в степень:</p>
<pre class="brush:php;">
$a=8;
$a **= 2;
echo $a; // равно 64 (8 в степени 2)
</pre></li>


<li><p>&=</p></p>Получение результата от операции логического умножения:</p>
<pre class="brush:php;">
$a=5; $a &= 4; // 101&100=100 - 4
</pre></li>

<li><p>|=</p></p>Получение результата от операции логического сложения:</p>
<pre class="brush:php;">
$a=5; $a |= 4; // 101|100=101 - 5
</pre></li>

<li><p>^=</p></p>Получение результата от операции исключающего ИЛИ:</p>
<pre class="brush:php;">
$a=5; $a ^= 4; // 101^100=001 - 1
</pre></li>

<li><p>&lt;&lt;=</p></p>Получение результата от операции сдвига влево:</p>
<pre class="brush:php;">
$a=8; $a &lt;&lt;= 1; // 1000 &lt;&lt; 1 = 10000 - 16
</pre></li>

<li><p>&gt;&gt;=</p></p>Получение результата от операции сдвига вправо:</p>
<pre class="brush:php;">
$a=8; $a &gt;&gt;= 1; // 1000 &gt;&gt; 1 = 100 - 4
</pre></li>
</ul>
<h3>Приоритет операций</h3>
<p>Если одно выражение содержит несколько разных операций, то при выполнении выражения учитывается приоритет операций. Сначала выполняются операции с 
большим приоритетом и в конце с меньшим приоритетом.</p>
<p>Приоритет операций можно описать следующей таблицей:</p>
<table class="tab">
<tr><td><p>**</p></td></tr>
<tr><td><p>++ -- ~</p></td></tr>
<tr><td><p>!</p></td></tr>
<tr><td><p>* / %</p></td></tr>
<tr><td><p>+ - .</p></td></tr>
<tr><td><p>&lt;&lt; &gt;&gt;</p></td></tr>
<tr><td><p>&lt; &gt; &lt;= &gt;=</p></td></tr>
<tr><td><p>== != === !== &lt;&lt; &lt;=&lt;</p></td></tr>
<tr><td><p>&amp;</p></td></tr>
<tr><td><p>^</p></td></tr>
<tr><td><p>|</p></td></tr>
<tr><td><p>&amp;&amp;</p></td></tr>
<tr><td><p>||</p></td></tr>
<tr><td><p>? : (тернарный оператор)</p></td></tr>
<tr><td><p>= += -= *= **= /= .= %= &= |= ^= &lt;&lt;= &gt;&gt;= (операторы присваивания)</p></td></tr>
<tr><td><p>and</p></td></tr>
<tr><td><p>xor</p></td></tr>
<tr><td><p>or</p></td></tr>
</table>
<p>Чем выше оператор в этой таблице, тем больше его приоритет. Например:</p>
<pre class="brush:php;">
$a = 10 + 5 * 2;	// 20
</pre>
<p>Операция умножения имеет больший приоритет, чем сложение. Поэтому сначала выполняется подвыражение <code>5 * 2</code></p>
<p>При этом скобки повышают приоритет операции, используемой в выражении.</p>
<pre class="brush:php;">
$a = (10 + 5) * 2;	// 30
</pre>
<p>В данном случае сначала выполняется подвыражение <code>10 + 5</code> и только потом умножение.</p>

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


<div class="nav"><p><a href="./2.3.php">Назад</a><a href="./">Содержание</a><a href="./2.7.php">Вперед</a></p></div></div>
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
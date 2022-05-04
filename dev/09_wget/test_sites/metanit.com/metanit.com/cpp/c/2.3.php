<!DOCTYPE html>
<html >
<head>
<title>С | Типы данных</title>
<meta charset="utf-8" />
<meta name="description" content="Типы данных в языке программирования Си, их предельные значения и размер, int, short, long, float, double, char, unsigned">
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
<h2>Типы данных</h2><div class="date">Последнее обновление: 18.05.2017</div>

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

<p>Переменная имеет определенный тип. И этот тип определяет, какие значения может иметь переменная и сколько байт в памяти она будет занимать. 
В Си определены следующие базовые типы данных:</p>
<ul>
<li><p><span class="b">char</span>: представляет один символ. Занимает в памяти 1 байт (8 бит). Может хранить любой значение из диапазона от -128 до 127</p></li>
<li><p><span class="b">unsigned char</span>: представляет один символ. Занимает в памяти 1 байт (8 бит). Может хранить любой значение из 
диапазона от 0 до 255</p></li>
<li><p><span class="b">signed char</span>: то же самое, что и char</p></li>

<li><p><span class="b">short int</span>: представляет целое число в диапазоне от –32768 до 32767. Занимает в памяти 2 байта (16 бит).</p></li>
<li><p><span class="b">short</span>: то же самое, что и <span class="b">short int</span>.</p></li>
<li><p><span class="b">unsigned short int</span>: представляет целое число в диапазоне от 0 до 65535. Занимает в памяти 2 байта (16 бит).</p></li>
<li><p><span class="b">unsigned short</span>: то же самое, что и <span class="b">unsigned short int</span>.</p></li>
<li><p><span class="b">signed short int</span>: то же самое, что и <span class="b">short int</span>.</p></li>
<li><p><span class="b">signed short</span>: то же самое, что и <span class="b">short int</span>.</p></li>

<li><p><span class="b">int</span>: представляет целое число. В зависимости от архитектуры процессора может занимать 2 байта (16 бит) или 4 байта (32 бита). Диапазон предельных 
значений соответственно также может варьироваться от –32768 до 32767 (при 2 байтах) или от −2 147 483 648 до 2 147 483 647 (при 4 байтах). </p></li>
<li><p><span class="b">unsigned int</span>: представляет положительное целое число.  В зависимости от архитектуры процессора может занимать 2 байта (16 бит) или 4 байта (32 бита), и из-за этого диапазон предельных значений может 
меняться: от 0 до 65535 (для 2 байт), либо от 0 до 4 294 967 295 (для 4 байт).</p></li>
<li><p><span class="b">unsigned</span>: то же самое, что и <span class="b">unsigned int</span></p></li>
<li><p><span class="b">signed int</span>: то же самое, что и int</p></li>
<li><p><span class="b">signed</span>: то же самое, что и int</p></li>

<li><p><span class="b">long int</span>: представляет целое число в диапазоне от −2 147 483 648 до 2 147 483 647. Занимает в памяти 4 байта (32 бита).</p></li>
<li><p><span class="b">long</span>: то же самое, что и <span class="b">long int</span>.</p></li>
<li><p><span class="b">signed long int</span>: то же самое, что и <span class="b">long int</span>.</p></li>
<li><p><span class="b">signed long</span>: то же самое, что и <span class="b">long int</span>.</p></li>
<li><p><span class="b">unsigned long int</span>: представляет целое число в диапазоне от 0 до 4 294 967 295. Занимает в памяти 4 байта (32 бита).</p></li>
<li><p><span class="b">unsigned long</span>: то же самое, что и <span class="b">unsigned long int</span>.</p></li>
<li><p><span class="b">long long int</span>: представляет целое число в диапазоне от −9 223 372 036 854 775 808 до +9 223 372 036 854 775 807. Занимает в памяти, как правило, 8 байт (64 бита).</p></li>
<li><p><span class="b">long long</span>: то же самое, что и <span class="b">long long int</span>.</p></li>
<li><p><span class="b">signed long long int</span>: то же самое, что и <span class="b">long long int</span></p></li>
<li><p><span class="b">signed long long</span>: то же самое, что и <span class="b">long long int</span>.</p></li>
<li><p><span class="b">unsigned long long int</span>: представляет целое число в диапазоне от 0 до 18 446 744 073 709 551 615. Занимает в памяти, как правило, 8 байт (64 бита).</p></li>
<li><p><span class="b">unsigned long long</span>: то же самое, что и <span class="b">unsigned long long int</span>.</p></li>
<li><p><span class="b">float</span>: представляет вещественное число ординарной точности с плавающей точкой в диапазоне +/- 3.4E-38 до 3.4E+38. В памяти занимает 4 байта (32 бита)</p></li>
<li><p><span class="b">double</span>: представляет вещественное число двойной точности с плавающей точкой в диапазоне +/- 1.7E-308 до 1.7E+308. В памяти занимает 8 байт (64 бита)</p></li>
<li><p><span class="b">long double</span>: представляет вещественное число двойной точности с плавающей точкой в диапазоне  +/- 3.4E-4932 до 1.1E+4932. В памяти занимает 10 байт (80 бит). На некоторых системах может занимать 96 и 128 бит.</p></li>
<li><p><span class="b">void</span>: тип без значения</p></li>
</ul>
<p>Определим несколько переменных:</p>
<pre class="brush:c;">
int number = 2;
int a, b;
char c ='d';
float d = -2.1345;
double f = 3.45;
</pre>
<p>Если нам надо определить несколько переменных одного типа, то мы можем указать их названия после типа данных через запятую: <code>int a, b</code></p>
<p>Переменная типа char в качестве значения принимает один символ в одинарных кавычках: <code>char c ='d'</code>. Также можно присвоить число 
из указанного выше в списке диапазона: <code>char c = 120</code>. В этом случае значением переменной c будет тот символ, который имеет код 120 в таблице символов ASCII.</p>
<p>В выше приведенном списке для каждого типа указан размер, который он занимает в памяти. Однако стоит отметить, что предельные размеры для типов разработчики компиляторов могут выбирать самостоятельно, исходя из 
аппаратных возможностей компьютера. Стандарт устанавливает лишь минимальные значения, которые должны быть. Например, для типов int и short минимальное 
значение - 16 бит, для типа long - 32 бита. При этом размер типа long должен быть не меньше размера типа int, а размер типа int - не меньше размера типа short. Но в 
целом для типов используются те размеры, которые указаны выше при описании типов данных.</p>
<p>Однако бывают ситуации, когда необходимо точно знать размер определенного типа. И для этого в C есть оператор <span class="b">sizeof()</span>, 
который возвращает размер памяти в байтах, которую занимает переменная:</p>
<pre class="brush:c;">
#include &lt;stdio.h&gt;

int main(void)
{
	int number = 2;
	printf("sizeof(number) = %d \n", sizeof(number));
	return 0;
}
</pre>
<p>Консольный вывод:</p>
<div class="console"><pre class="consoletext">sizeof(number) = 4</pre></div>
<p>При этом при определении переменных важно понимать, что значение переменной не должно выходить за те пределы, которые очерчены для ее типа. Например:</p>
<pre class="brush:c;">
unsigned short int number = -65535;
</pre>
<p>Компилятор GCC при компиляции программы с этой строкой выдаст ошибку о том, что значение -65535 не входит в диапазон допустимых значений для типа 
unsigned short int.</p>
<p>Но как видно из перечисления типов, ряд из них, например, <span class="b">int</span>, может содержать разные значения в зависимости от платформы. В этом случае мы можем получить минимально и максимально допустимые значения 
с помощью встроенных значений <span class="b">INT_MIN</span> и <span class="b">INT_MAX</span>:</p>
<pre class="brush:c;">
#include &lt;stdio.h&gt;
#include &lt;limits.h&gt;

int main(void)
{
	printf("INT_MIN = %d \n", INT_MIN);
	printf("INT_MAX = %d \n", INT_MAX);
	return 0;
}
</pre>
<p>Значения INT_MIN и INT_MAX определены в заголовочном файле limits.h, поэтому его необходимо подключить с помощью директивы include.</p>
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


<div class="nav"><p><a href="2.2.php">Назад</a><a href="./">Содержание</a><a href="2.4.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в С</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/c/1.1.php">Язык программирования С</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/1.2.php">Компилятор GCC. Первая программа на Windows</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/1.3.php">GCC. Первая программа на Linux</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/1.6.php">Clang. Первая программа на MacOS</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/1.4.php">Первая программа в Visual Studio</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/1.7.php">Первая программа в Qt Creator</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/1.5.php">Локализация и кириллица в консоли</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы языка Си</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.1.php">Структура программы на Си</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.2.php">Переменные</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.3.php">Типы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.4.php">Консольный вывод. Функция printf</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.5.php">Константы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.6.php">Арифметические операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.7.php">Логические операции и операции отношения</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.8.php">Поразрядные операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.9.php">Операции присваивания</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.10.php">Преобразование типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.11.php">Условные конструкции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.12.php">Циклы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.13.php">Введение в массивы и строки</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/2.14.php">Ввод в консоли. Функция scanf</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Препроцессор</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/c/3.1.php">Директива #include. Включение файлов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/3.2.php">Директива #define</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/3.3.php">Макросы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/3.4.php">Условная компиляция</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Функции</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/c/4.1.php">Определение и описание функций</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/4.2.php">Передача параметров в функцию</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/4.3.php">Возвращение результата из функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/4.4.php">Рекурсивные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/4.5.php">Область видимости переменных</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/4.6.php">Внешние объекты</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Указатели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.1.php">Что такое указатели</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.2.php">Операции с указателями</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.3.php">Арифметика указателей</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.4.php">Константы и указатели</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.5.php">Указатели и массивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.6.php">Массивы указателей, строки и многоуровневая адресация</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.7.php">Указатели в параметрах функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.8.php">Динамическая память</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.9.php">Указатель как результат функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.10.php">Управление динамической памятью</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.11.php">Указатели на функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.12.php">Указатели на функции как параметры и результаты функций</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/5.13.php">Функции с переменным количеством параметров</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Структуры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/c/6.1.php">Определение структур</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/6.2.php">Структуры как элементы структур</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/6.3.php">Указатели на структуры</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/6.4.php">Массивы структур</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/6.5.php">Структуры и функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/6.6.php">Объединения</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/6.7.php">Битовые поля</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Ввод-вывод и работа с файлами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/c/7.1.php">Открытие и закрытие потоков</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/7.2.php">Чтение и запись бинарных файлов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/7.3.php">Чтение и запись структур в файл</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/7.4.php">Чтение и запись текстовых файлов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/7.5.php">Форматируемый ввод-вывод</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/7.6.php">Позиционирование в потоке</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/c/7.7.php">Консольный ввод-вывод</a></span></li>
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
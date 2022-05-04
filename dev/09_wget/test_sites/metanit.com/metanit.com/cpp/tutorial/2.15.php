<!DOCTYPE html>
<html >
<head>
<title>C++ | Массивы</title>
<meta charset="utf-8" />
<meta name="description" content="Массивы в языке программирования C++, определение и использование одномерных и многомерных массивов, перебор с помощью циклов, цикл foreach">
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
<h2>Массивы</h2><div class="date">Последнее обновление: 17.09.2017</div>

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

<p>Массив представляет набор однотипных данных. Формальное определение массива выглядит следующим образом:</p>
<pre class="brush:cpp;">тип_переменной название_массива [длина_массива]</pre>
<p>После типа переменной идет название массива, а затем в квадратных скобках его размер. Например, определим массив из 4 чисел:</p>
<pre class="brush:cpp;">int numbers[4];</pre>
<p>Данный массив имеет четыре числа, но все эти числа имеют неопределенное значение. Однако мы можем выполнить инициализацию и присвоить этим числам некоторые 
начальные значения через фигурные скобки:</p>
<pre class="brush:cpp;">
int numbers[4] = {1,2,3,4};
</pre>
<p>Значения в фигурных скобках еще называют инициализаторами. Если инициализаторов меньше, чем элементов в массиве, то инициализаторы используются для первых элементов. 
Если в инициализаторов больше, чем элементов в массиве, то при компиляции возникнет ошибка:</p>
<pre class="brush:cpp;">
int numbers[4] = {1, 2, 3, 4, 5, 6};
</pre>
<p>Здесь массив имеет размер 4, однако ему передается 6 значений.</p>
<p>Если размер массива не указан явно, то он выводится из количества инициализаторов:</p><pre class="brush:cpp;">
int numbers[] = {1, 2, 3, 4, 5, 6};
</pre>
<p>В данном случае в массиве есть 6 элементов.</p>
<p>Свои особенности имеет инициализация символьных массивов. Мы можем передать символьному массиву как набор инициализаторов, так и строку:</p>
<pre class="brush:cpp;">
char s1[] = {'h', 'e', 'l', 'l', 'o'};
char s2[] = "world";
</pre>
<p>Причем во втором случае массив s2 будет иметь не 5 элементов, а 6, поскольку при инициализации строкой в символьный массив автоматически добавляется 
нулевой символ '\0'.</p>
<p>При этом не допускается присвоение одному массиву другого массива:</p>
<pre class="brush:cpp;">
int nums1[] = {1,2,3,4,5};
int nums2[] = nums1;	// ошибка
nums2 = nums1; 			// ошибка
</pre>
<p>После определения массива мы можем обратиться к его отдельным элементам по индексу. Индексы начинаются с нуля, поэтому для обращения к первому элементу необходимо использовать индекс 0. 
Обратившись к элементу по индексу, мы можем получить его значение, либо изменить его:</p>
<pre class="brush:cpp;">
#include &lt;iostream&gt;

int main()
{
	int numbers[4] = {1,2,3,4};
	int first_number = numbers[0];
	std::cout &lt;&lt; first_number &lt;&lt; std::endl;	// 1
	numbers[0] = 34;						// изменяем элемент
	std::cout &lt;&lt; numbers[0] &lt;&lt; std::endl; // 34
	
	return 0;
}
</pre>
<p>Число элементов массива также можно определять через константу:</p>
<pre class="brush:cpp;">
const int n = 4;
int numbers[n] = {1,2,3,4};
</pre>
<h3>Перебор массивов</h3>
<p>Используя циклы, можно пробежаться по всему массиву и через индексы обратиться к его элементам:</p>
<pre class="brush:cpp;">
#include &lt;iostream&gt;

int main()
{
	int numbers[4] = {1,2,3,4};
	int size = sizeof(numbers)/sizeof(numbers[0]);
	for(int i=0; i &lt; size; i++)
		std::cout &lt;&lt; numbers[i] &lt;&lt; std::endl;
	
	return 0;
}
</pre>
<p>Чтобы пройтись по массиву в цикле, вначале надо найти длину массива. Для нахождения длины применяется оператор <span class="b">sizeof</span>. По сути 
длина массива равна совокупной длине его элементов. Все элементы представляют один и тот же тип и занимают один и тот же размер в памяти. 
Поэтому с помощью выражения <code>sizeof(numbers)</code> находим длину всего массива в байтах, а с помощью выражения <code>sizeof(numbers[0])</code> - 
длину одного элемента в байтах. Разделив два значения, можно получить количество элементов в массиве. А далее с помощью цикла for 
перебираем все элементы, пока счетчик i не станет равным длине массива. В итоге на консоль будут выведены все элементы массива:</p>
<div class="console">
<pre class="consoletext">
1
2
3
4
</pre>
</div>
<p>Но также есть и еще одна форма цикла <span class="b">for</span>, которая предназначена специально для работа с коллекциями, в том числе с массивами. Эта 
форма имеет следующее формальное определение:</p>
<pre class="brush:cpp;">
for(тип переменная : коллекция)
{
	инструкции;
}
</pre>
<p>Используем эту форму для перебора массива:</p>
<pre class="brush:cpp;">
#include &lt;iostream&gt;

int main()
{
	int numbers[4] = {1,2,3,4};
	for(int number : numbers)
		std::cout &lt;&lt; number &lt;&lt; std::endl;
		
	return 0;
}
</pre>
<p>При переборе массива каждый перебираемый элемент будет помещаться в переменную number, значение которой в цикле выводится на консоль.</p>
<p>Если нам неизвестен тип объектов в массиве, то мы можем использовать спецификатор auto для определения типа:</p>
<pre class="brush:cpp;">
for(auto number : numbers)
	std::cout &lt;&lt; number &lt;&lt; std::endl;
</pre>
<h3>Многомерные массивы</h3>
<p>Кроме одномерных массивов в C++ есть многомерные.  Элементы таких массивов сами в свою очередь являются массивами, в которых также элементы могут быть массивами. Например, определим двухмерный массив 
чисел:</p>
<pre class="brush:cpp;">
int numbers[3][2];
</pre>
<p>Такой массив состоит из трех элементов, при этом каждый элемент представляет массив из двух элементов. Инициализируем подобный массив:</p>
<pre class="brush:cpp;">int numbers[3][2] = { {1, 2}, {4, 5}, {7, 8} };</pre>
<p>Вложенные фигурные скобки очерчивают элементы для каждого подмассива. Такой массив еще можно представить в виде таблицы:</p>
<table style="border:1px solid #ccc;">
<tr><td>1</td><td>2</td></tr>
<tr><td>4</td><td>5</td></tr>
<tr><td>7</td><td>8</td></tr>
</table>
<p>Также при инициализации можно опускать фигурные скобки:</p>
<pre class="brush:cpp;">int numbers[3][2] = { 1, 2, 4, 5, 7, 8 };</pre>
<p>Возможна также инициализация не всех элементов, а только некоторых:</p>
<pre class="brush:cpp;">int numbers[3][2] = { {1, 2}, {}, {7} };</pre>
<p>И чтобы обратиться к элементам вложенного массива, потребуется два индекса:</p>
<pre class="brush:cpp;">
int numbers[3][2] = { {1, 2}, {3, 4}, {5, 6} };
std::cout &lt;&lt; numbers[1][0] &lt;&lt; std::endl;	// 3
numbers[1][0] = 12;				// изменение элемента
std::cout &lt;&lt; numbers[1][0] &lt;&lt; std::endl;	// 12
</pre>
<p>Переберем двухмерный массив:</p>
<pre class="brush:c;">
#include &lt;iostream&gt;

int main()
{
	const int rows = 3, columns = 2;
	int numbers[rows][columns] = { {1, 2}, {3, 4}, {5, 6} };
	for(int i=0; i &lt; rows; i++)
	{
		for(int j=0; j &lt; columns; j++)
		{
			std::cout &lt;&lt; numbers[i] [j] &lt;&lt; "\t";
		}
		std::cout &lt;&lt; std::endl;
	}
	return 0;
}
</pre>
<p>Также для перебора элементов многомерного массива можно использовать другую форму цикла for:</p>
<pre class="brush:cpp;">
#include &lt;iostream&gt;

int main()
{
	const int rows = 3, columns = 2;
	int numbers[rows][columns] = { {1, 2}, {3, 4}, {5, 6} };
	
	for(auto &subnumbers : numbers)
	{
		for(int number : subnumbers)
		{
			std::cout &lt;&lt; number &lt;&lt; "\t";
		}
		std::cout &lt;&lt; std::endl;
	}
		
	return 0;
}
</pre>
<p>Для перебора массивов, которые входят в массив, применяются ссылки. То есть во внешнем цикле <code>for(auto &subnumbers : numbers)</code> 
&subnumbers представляет ссылку на подмассив в массиве. Во внутреннем цикле <code>for(int number : subnumbers)</code> из каждого 
подмассива в subnumbers получаем отдельные его элементы в переменную number и выводим ее значение на консоль.</p>
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


<div class="nav"><p><a href="2.14.php">Назад</a><a href="./">Содержание</a><a href="2.16.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в С++</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/1.1.php">Язык программирования С++</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/1.2.php">Первая программа на Windows. Компилятор g++</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/1.3.php">Первая программа на Linux. Компилятор g++</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/1.6.php">Первая программа на MacOS. Компилятор Clang</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/1.4.php">Первая программа в Visual Studio</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/1.7.php">Первая программа в Qt Creator</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/1.5.php">Локализация и кириллица в консоли</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы языка программирования C++</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.1.php">Структура программы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.2.php">Переменные</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.3.php">Типы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.4.php">Статическая типизация и преобразования типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.5.php">Константы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.6.php">Арифметические операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.7.php">Условные выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.8.php">Побитовые операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.9.php">Операции присваивания</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.10.php">Ввод и вывод в консоли</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.11.php">Пространства имен и using</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.12.php">Условные конструкции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.13.php">Циклы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.14.php">Ссылки</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.15.php">Массивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/2.16.php">Строки</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Функции</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.1.php">Определение и объявление функций</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.2.php">Параметры функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.3.php">Передача аргументов по значению и по ссылке</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.4.php">Константные параметры</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.5.php">Оператор return и возвращение результата</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.6.php">Рекурсивные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.7.php">Область видимости объектов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.8.php">Разделение программы на файлы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/3.9.php">Внешние объекты</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Указатели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.1.php">Что такое указатели</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.2.php">Операции с указателями</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.3.php">Арифметика указателей</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.4.php">Константы и указатели</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.5.php">Указатели и массивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.6.php">Указатели в параметрах функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.7.php">Массивы в параметрах функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.8.php">Указатели на функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.9.php">Указатели на функции как параметры</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.10.php">Указатель на функцию как возвращаемое значение</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.11.php">Динамические объекты</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/4.12.php">Динамические массивы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.1.php">Определение классов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.2.php">Конструкторы и инициализация объектов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.3.php">Объявление и определение функций класса</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.4.php">Управление доступом. Инкапсуляция</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.5.php">Дружественные функции и классы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.6.php">Ключевое слово this</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.7.php">Статические члены класса</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.8.php">Структуры</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.9.php">Перечисления</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.10.php">Наследование</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.11.php">Виртуальные функции и их переопределение</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.12.php">Абстрактные классы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.13.php">Деструктор</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.14.php">Перегрузка операторов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/5.15.php">Операторы преобразования типов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Исключения</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/6.1.php">Обработка исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/6.2.php">Тип exception</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/6.3.php">Типы исключений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Последовательные контейнеры</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/7.1.php">Типы последовательных контейнеров</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/7.2.php">Вектор</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/7.3.php">Итераторы</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/7.4.php">Операции с векторами</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/7.5.php">Array</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/7.6.php">List</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/7.7.php">Forward_list</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/7.8.php">Deque</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Потоки и система ввода-вывода</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/8.1.php">Базовые типы для работы с потоками</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/8.2.php">Файловые потоки. Открытие и закрытие</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/8.3.php">Чтение и запись текстовых файлов</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/8.4.php">Переопределение операторов ввода и вывода</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Шаблоны</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/9.1.php">Шаблон класса</a></span></li>
			<li><span class="file"><a href="//metanit.com/cpp/tutorial/9.2.php">Шаблоны функций</a></span></li>
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
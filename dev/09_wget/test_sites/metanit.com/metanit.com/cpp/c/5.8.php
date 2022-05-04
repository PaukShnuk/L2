<!DOCTYPE html>
<html >
<head>
<title>С | Динамическая память</title>
<meta charset="utf-8" />
<meta name="description" content="Динамическая память в языке программирования Си, функции malloc, calloc, realloc, free, выделение и освобождение памяти">
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
<h2>Динамическая память</h2><div class="date">Последнее обновление: 28.05.2017</div>

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

<p>При создании массива с фиксированными размерами под него выделяется определенная память. Например, пусть у нас будет массив с пятью элементами:</p>
<pre class="brush:c;">double numbers[5] = {1.0, 2.0, 3.0, 4.0, 5.0};</pre>
<p>Для такого массива выделяется память 5 * 8 (размер типа double) = 40 байт. Таким образом, мы точно знаем, сколько в массиве элементов и сколько 
он занимает памяти. Однако это не всегда удобно. Иногда бывает необходимо, чтобы количество элементов и соответственно размер выделяемой памяти 
для массива определялись динамически в зависимости от некоторых условий. Например, пользователь сам может вводить размер массива. И в этом случае для 
создания массива мы можем использовать динамическое выделение памяти.</p>
<p>Для управления динамическим выделением памяти используется ряд функций, которые определены в заголовочном файле <span class="b">stdlib.h</span>:</p>
<ul>
<li><p><span class="b">malloc()</span>. Имеет прототип</p>
<pre class="brush:c;">void *malloc(unsigned s);</pre>
<p>Выделяет память длиной в s байт и возвращает указатель на начало выделенной памяти. В случае неудачного выполнения возвращает <span class="b">NULL</span></p>
</li>

<li><p><span class="b">calloc()</span>. Имеет прототип</p>
<pre class="brush:c;">void *calloc(unsigned n, unsigned m);</pre>
<p>Выделяет память для n элементов по m байт каждый и возвращает указатель на начало выделенной памяти. В случае неудачного выполнения возвращает <span class="b">NULL</span></p>
</li>

<li><p><span class="b">realloc()</span>. Имеет прототип</p>
<pre class="brush:c;">void *realloc(void *bl, unsigned ns);</pre>
<p>Изменяет размер ранее выделенного блока памяти, на начало которого указывает указатель bl, до размера в ns байт. 
Если указатель bl имеет значение <span class="b">NULL</span>, то есть память не выделялась, то действие функции аналогично действию <span class="b">malloc</span></p>
</li>

<li><p><span class="b">free()</span>. Имеет прототип</p>
<pre class="brush:c;">void *free(void *bl);</pre>
<p>Освобождает ранее выделенный блок памяти, на начало которого указывает указатель bl.</p>
<p>Если мы не используем эту функцию, то динамическая память все равно освободится автоматически при завершении работы программы. Однако все же 
хорошей практикой является вызов функции <span class="b">free()</span>, который позволяет как можно раньше освободить память.</p>
</li>
</ul>
<p>Рассмотрим применение функций на простой задаче. Длина массива неизвестна и вводится во время выполнения программы пользователем, и также 
значения всех элементов вводятся пользователем:</p>
<pre class="brush:c;">
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;

int main(void)
{	
	int *block;	// указатель для блока памяти
	int n;		// число элементов массива
	// ввод числа элементов
	printf("Size of array=");
	scanf("%d", &n);
	
	// выделяем память для массива
	// функция malloc возвращает указатель типа void*
	// который автоматически преобразуется в тип int*
	block = malloc(n * sizeof(int));
	
	// вводим числа в массив
	for(int i=0;i&lt;n; i++)
	{
		printf("block[%d]=", i);
		scanf("%d", &block[i]);
	}
	printf("\n");
	
	// вывод введенных чисел на консоль
	for(int i=0;i&lt;n; i++)
	{
		printf("%d \t", block[i]);
	}
	
	// освобождаем память
	free(block);
	return 0;
}
</pre>
<p>Консольный вывод программы:</p>
<div class="console">
<pre class="consoletext">
Size of array=5

block[0]=23
block[1]=-4
block[2]=0
block[3]=17
block[4]=81

23	-4	0	17	81
</pre>
</div>
<p>Здесь для управления памятью для массива определен указатель block типа <span class="b">int</span>. Количество элементов массива заранее неизвестно, 
оно представлено переменной n.</p>
<p>Вначале пользователь вводит количество элементов, которое попадает в переменную n. После этого необходимо выделить память для данного количества 
элементов. Для выделения памяти здесь мы могли бы воспользоваться любой из трех вышеописанных функций: malloc, calloc, realloc. 
Но конкретно в данной ситуации воспользуемся функцией <span class="b">malloc</span>:</p>
<pre class="brush:c;">block = malloc(n * sizeof(int));</pre>
<p>Прежде всего надо отметить, что все три выше упомянутые функции для универсальности возвращаемого значения в качестве результата возвращают указатель типа 
<span class="b">void *</span>. Но в нашем случае создается массив типа int, для управления которым используется указатель типа <span class="b">int *</span>, 
поэтому выполняется неявное приведение результата функции malloc к типу <span class="b">int *</span>.</p>
<p>В саму функцию malloc передается количество байтов для выделяемого блока. Это количество подсчитать довольно просто: достаточно умножить количество элементов на размер одного элемента 
<code>n * sizeof(int)</code>.</p>
<p>После выполнения всех действий память освобождается с помощью функции <span class="b">free()</span>:</p>
<pre class="brush:c;">free(block);</pre>
<p>Важно, что после выполнения этой функции мы уже не сможем использовать массив, например, вывести его значения на консоль:</p>
<pre class="brush:c;">
free(block);
for(int i=0;i&lt;n; i++)
{
	printf("%d \t", block[i]);
}
</pre>
<p>И если мы попытаемся это сделать, то получим неопределенные значения.</p>
<p>Вместо функции malloc аналогичным образом мы могли бы использовать функцию <span class="b">calloc()</span>, которая принимает количество элементов и размер одного элемента:</p>
<pre class="brush:c;">block = calloc(n, sizeof(int));</pre>
<p>Либо также можно было бы использовать функцию <span class="b">realloc()</span>:</p>
<pre class="brush:c;">
int *block = NULL;
block = realloc (block, n * sizeof(int));
</pre>
<p>При использовании realloc желательно (в некоторых средах, например, в Visual Studio, обязательно) инициализировать указатель хотя бы значением NULL.</p>
<p>Но в целом все три вызова в данном случае имели бы аналогичное действие:</p>
<pre class="brush:c;">
block = malloc(n * sizeof(int));
block = calloc(n, sizeof(int));
block = realloc (block, n * sizeof(int));
</pre>
<p>Теперь рассмотрим более сложную задачу - динамическое выделение памяти для двухмерного массива:</p>
<pre class="brush:c;">
#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;

int main(void)
{
	int **table;	// указатель для блока памяти для массива указателей
	int *rows;		// указатель для блока памяти для хранения информации по строкам

	int rowscount;	// количество строк
	int d;		// вводимое число
	
	// ввод количества строк
	printf("Rows count=");
	scanf("%d", &rowscount);

	// выделяем память для двухмерного массива
	table = calloc(rowscount, sizeof(int*));
	rows = malloc(sizeof(int)*rowscount);
	// цикл по строкам
	for (int i = 0; i&lt;rowscount; i++)
	{
		printf("\nColumns count for row %d=", i);
		scanf("%d", &rows[i]);
		table[i] = calloc(rows[i], sizeof(int));

		for (int j = 0; j&lt;rows[i]; j++)
		{
			printf("table[%d][%d]=", i, j);
			scanf("%d", &d);
			table[i][j] = d;
		}
	}
	printf("\n");

	// вывод введенных чисел на консоль
	for (int i = 0; i&lt;rowscount; i++)
	{
		printf("\n");

		for (int j = 0; j&lt;rows[i]; j++)
		{
			printf("%d \t", table[i][j]);
		}
		// освобождение памяти для одной строки
		free(table[i]);
	}
	
	// освобождение памяти
	free(table);
	free(rows);

	return 0;
}
</pre>
<p>Переменная <code>table</code> представляет указатель на массив указателей типа <span class="b">int*</span>. Каждый указатель table[i] в этом массиве представляет указатель на подмассив элементов типа <span class="b">int</span>, то есть отдельные строки таблицы. 
А переменная <code>table</code> фактически представляет указатель на массив указателей на строки таблицы.</p>
<p>Для хранения количества элементов в каждом подмассиве определяется указатель <code>rows</code> типа <span class="b">int</span>. Фактически он хранит количество столбцов для каждой строки таблицы.</p>
<p>Сначала вводится количество строк в переменную <code>rowscount</code>. Количество строк - это количество указателей в массиве, на который указывает указатель <code>table</code>. 
И кроме того, количество строк - это количество элементов в динамическом массиве, на который указывает указатель <code>rows</code>. Поэтому вначале необходимо для всех этих массивов 
выделить память:</p>
<pre class="brush:c;">
table = calloc(rowscount, sizeof(int*));
rows = malloc(sizeof(int)*rowscount);
</pre>
<p>Далее в цикле осуществляется ввод количества столбцов для каждый строки. Введенное значение попадает в массив rows. И в соответствии с введенным значением для каждой строки выделяется необходимый размер памяти:</p>
<pre class="brush:c;">
scanf("%d", &rows[i]);
table[i] = calloc(rows[i], sizeof(int));
</pre>
<p>Затем производится ввод элементов для каждой строки.</p>
<p>В конце работы программы при выводе происходит освобождение памяти. В программе память выделяется для строк таблицы, поэтому эту память надо освободить:</p>
<pre class="brush:c;">free(table[i]);</pre>
<p>И кроме того, освобождается память, выделенная для указателей table и rows:</p>
<pre class="brush:c;">
free(table);
free(rows);
</pre>
<p>Консольный вывод программы:</p>
<div class="console">
<pre class="consoletext">
Rows count=2

Columns count for 1=3
table[0][0]=1
table[0][1]=2
table[0][2]=3

Columns count for 2=2
table[1][0]=4
table[1][1]=5

1	2	3
4	5
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


<div class="nav"><p><a href="5.7.php">Назад</a><a href="./">Содержание</a><a href="5.9.php">Вперед</a></p></div></div>
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
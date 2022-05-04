<!DOCTYPE html>
<html >
<head>
<title>С | Арифметика указателей</title>
<meta charset="utf-8" />
<meta name="description" content="Арифметика указателей в языке программирования Си, инкремент, декремент, сложение и разность указателей">
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
<h2>Арифметика указателей</h2><div class="date">Последнее обновление: 27.05.2017</div>

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

<p>К указателям могут применять некоторые арифметические операции (сложение, вычитание, инкремент, декремент). Однако сами операции производятся немного иначе, чем с числами. И многое здесь зависит 
от типа указателя. К указателю можно прибавлять целое число, и также можно вычитать из указателя целое число. Кроме того, можно вычитать из одного указателя другой указатель.</p>
<p>Рассмотрим вначале операции инкремента и декремента и для этого возьмем указатель на объект типа <span class="b">int</span>:</p>
<pre class="brush:c;">
#include &lt;stdio.h&gt;

int main(void)
{
	int n = 10;
	
	int *ptr = &n;
	printf("address=%p \t value=%d \n", ptr, *ptr);
	
	ptr++;
	printf("address=%p \t value=%d \n", ptr, *ptr);
	
	ptr--;
	printf("address=%p \t value=%d \n", ptr, *ptr);
	
	return 0;
}
</pre>
<p>Операция инкремента ++ увеличивает значение на единицу. В случае с указателем увеличение на единицу будет означать увеличение адреса, который хранится в указателе, 
на размер типа указателя. То есть в данном случае указатель на тип int, а размер объектов int в большинстве архитектур равен 4 байтам. Поэтому увеличение указателя типа int на 
единицу означает увеличение значение указателя на 4.</p>
<p>И в моем случае консольный вывод выглядит следующим образом:</p>
<div class="console">
<pre class="consoletext">
address=0060FEA8	value=10
address=0060FEAC	value=6356652
address=0060FEA8	value=10
</pre>
</div>
<p>Здесь видно, что после инкремента значение указателя увеличилось на 4: с 0060FEA8 до 0060FEAC. А после декремента, то есть уменьшения на единицу, 
указатель получил предыдущий адрес в памяти.</p>
<p>Фактически увеличение на единицу означает, что мы хотим перейти к следующему объекту в памяти, который находится за текущим и на который указывает указатель. А уменьшение на единицу означает 
переход назад к предыдущему объекту в памяти.</p>
<p>После изменения адреса мы можем получить значение, которое находится по новому адресу, однако это значение может быть неопределенным, как показано на консольном выводе программы выше.</p>
<p>При использовании спецификатора %p адрес выводится в шестнадцатеричной систему, соответственно результаты сложения/вычитания то же будут давать тот 
результат в шестнадцатеричной системе. Однако если удобнее использовать десятичную систему, то можно вместо спецификатора %p использовать спецификатор 
%d:</p>
<pre class="brush:c;">printf("address=%d \t value=%d \n", ptr, *ptr);</pre>
<p>В случае с указателем типа <span class="b">int</span> увеличение/уменьшение на единицу означает изменение адреса на 4. 
Аналогично, для указателя типа <span class="b">short</span> эти операции изменяли бы адрес на 2, а для указателя типа <span class="b">char</span> на 1.</p>
<pre class="brush:c;">
#include &lt;stdio.h&gt;

int main(void)
{
	double d = 10.6;
	double *pd = &d;
	printf("Pointer pd: address=%p \n", pd);
	pd++;
	printf("Pointer pd: address=%p \n", pd);
		
	char c = 'N';
	char *pc = &c;
	printf("Pointer pc: address=%p \n", pc);
	pc++;
	printf("Pointer pc: address=%p \n", pc);
	
	return 0;
}
</pre>
<p>В моем случае консольный вывод будет выглядеть следующим образом:</p>
<div class="console">
<pre class="consoletext">
Pointer pd: address=0060FEA0
Pointer pd: address=0060FEA8
Pointer pc: address=0060FE9F
Pointer pc: address=0060FEA0
</pre>
</div>
<p>Как видно из консольного вывода, увеличение на единицу указателя типа double дало увеличения хранимого в нем адреса на 8 единиц (размер объекта double - 8 байт), 
а увеличение на единицу указателя типа char дало увеличение хранимого в нем адреса на 1 (размер типа char - 1 байт).</p>
<p>Аналогично указатель будет изменяться при прибавлении/вычитании не единицы, а какого-то другого числа.</p>
<pre class="brush:c;">
#include &lt;stdio.h&gt;

int main(void)
{
	double d = 10.6;
	double *pd = &d;
	printf("Pointer pd: address=%p \n", pd);
	pd = pd + 2;
	printf("Pointer pd: address=%p \n", pd);
	
	
	char c = 'N';
	char *pc = &c;
	printf("Pointer pc: address=%p \n", pc);
	pc = pc - 3;
	printf("Pointer pc: address=%p \n", pc);
	
	return 0;
}
</pre>
<p>Добавление к указателю типа <span class="b">double</span> числа 2</p>
<pre class="brush:c;">pd = pd + 2;</pre>
<p>означает, что мы хотим перейти на два объекта double вперед, что подразумевает изменение адреса на 2 * 8 = 16 байт.</p>
<p>Вычитание из указателя типа <span class="b">char</span> числа 3</p>
<pre class="brush:c;">pc = pc - 3;</pre>
<p>означает, что мы хотим перейти на три объекта char назад, что подразумевает изменение адреса на 3 * 1 = 3 байта.</p>
<p>И в моем случае я получу следующий консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Pointer pd: address=0060FEA0
Pointer pd: address=0060FEB0
Pointer pc: address=0060FE9F
Pointer pc: address=0060FE9C
</pre>
</div>
<p>В отличие от сложения операция вычитания может применять не только к указателю и целому числу, но и к двум указателям одного типа:</p>
<pre class="brush:c;">
#include &lt;stdio.h&gt;

int main(void)
{
	int a = 10;
	int b = 23;
	int *pa = &a;
	int *pb = &b;
	int c = pa - pb;
	
	printf("pa=%p \n", pa);
	printf("pb=%p \n", pb);
	printf("c=%d \n", c);
	
	return 0;
}
</pre>
<p>Консольный вывод в моем случае:</p>
<div class="console">
<pre class="consoletext">
pa=0060FEA0
pb=0060FE9C
c=1
</pre>
</div>
<p>Результатом разности двух указателей является "расстояние" между ними. Например, в случае выше адрес из первого указателя на 4 больше, 
чем адрес из второго указателя (0x0060FE9C + 4 = 0x0060FEA0). Так как размер <span class="b">одного</span> объекта int равен 4 байтам, то 
расстояние между указателями будет равно (0x0060FEA0 - 0x0060FE9C)/4 = 1.</p>
<h3>Некоторые особенности операций</h3>
<p>При работе с указателями надо отличать операции с самим указателем и операции со значением по адресу, на который указывает указатель.</p>
<pre class="brush:c;">
int a = 10;
int *pa = &a;
int b = *pa + 20;	// операция со значением, на который указывает указатель
pa++; 				// операция с самим указателем
	
printf("b=%d \n", b);	// 30
</pre>
<p>То есть в данном случае через операцию разыменования <code>*pa</code> получаем значение, на которое указывает указатель pa, то есть число 10, и 
выполняем операцию сложения. То есть в данном случае обычная операция сложения между двумя числами, так как выражение <code>*pa</code> представляет число.</p>
<p>Но в то же время есть особенности, в частности, с операциями инкремента и декремента. Дело в том, что операции <span class="b">*</span>, <span class="b">++</span> 
и <span class="b">--</span> имеют одинаковый приоритет и при размещении рядом выполняются справа налево.</p>
<p>Например, выполним постфиксный инкремент:</p>
<pre class="brush:c;">
int a = 10;
int *pa = &a;
printf("pa: address=%p \t value=%d \n", pa, *pa);
int b = *pa++;		// инкремент адреса указателя
	
printf("b: value=%d \n", b);
printf("pa: address=%p \t value=%d \n", pa, *pa);
</pre>
<p>В выражении <code>b = *pa++;</code> сначала к указателю присваивается единица (то есть к адресу добавляется 4, так как указатель типа <span class="b">int</span>). Затем 
так как инкремент постфиксный, с помощью операции разыменования возвращается значение, которое было до инкремента - то есть число 10. 
И это число 10 присваивается переменной b. И в моем случае результат работы будет следующий:</p>
<div class="console">
<pre class="consoletext">
pa: address=0060FEA4	value=10
b: value=10
pa: address=0060FEA8	value=6356648
</pre>
</div>
<p>Изменим выражение:</p>
<pre class="brush:c;">b = (*pa)++;</pre>
<p>Скобки изменяют порядок операций. Здесь сначала выполняется операция разыменования и получение значения, затем это значение увеличивается на 1. Теперь по адресу в указателе находится число 11. И затем так как 
инкремент постфиксный, переменная b получает значение, которое было до инкремента, то есть опять число 10. Таким образом, в отличие от предыдущего случая все операции производятся над 
значением по адресу, который хранит указатель, но не над самим указателем. И, следовательно, изменится результат работы:</p>
<div class="console">
<pre class="consoletext">
pa: address=0060FEA4	value=10
b: value=10
pa: address=0060FEA4	value=11
</pre>
</div>
<p>Аналогично будет с префиксным инкрементом:</p>
<pre class="brush:c;">b = ++*pa;</pre>
<p>В данном случае сначала с помощью операции разыменования получаем значение по адресу из указателя pa, к этому значению прибавляется единица. То есть теперь значение по адресу, 
который хранится в указателе, равно 11. Затем результат операции присваивается переменной b:</p>
<div class="console">
<pre class="consoletext">
pa: address=0060FEA4	value=10
b: value=11
pa: address=0060FEA4	value=11
</pre>
</div>
<p>Изменим выражение:</p>
<pre class="brush:c;">b = *++pa;</pre>
<p>Теперь сначала изменяет адрес в указателе, затем мы получаем по этому адресу значение и присваиваем его переменной b. Полученное значение в 
этом случае может быть неопределенным:</p>
<div class="console">
<pre class="consoletext">
pa: address=0060FEA4	value=10
b: value=6356648
pa: address=0060FEA8	value=6356648
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


<div class="nav"><p><a href="5.2.php">Назад</a><a href="./">Содержание</a><a href="5.4.php">Вперед</a></p></div></div>
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
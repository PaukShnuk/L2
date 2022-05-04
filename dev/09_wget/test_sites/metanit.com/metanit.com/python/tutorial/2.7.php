<!DOCTYPE html>
<html >
<head>
<title>Python | Циклы</title>
<meta charset="utf-8" />
<meta name="description" content="Циклы в Python, конструкции while и for, операторы break и continue и выход из цикла, бесконечный цикл">
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
<h2>Циклы</h2><div class="date">Последнее обновление: 15.01.2022</div>

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

<p>Циклы позволяют выполнять некоторое действие в зависимости от соблюдения некоторого условия. В языке Python есть следующие типы циклов:</p>
<ul>
<li><p><span class="b">while</span></p></li>
<li><p><span class="b">for</span></p></li>
</ul>
<h3>Цикл while</h3>
<p>Цикл <span class="b">while</span> проверяет истинность некоторого условия, и если условие истинно, то выполняет инструкции цикла. 
Он имеет следующее формальное определение:</p>
<pre class="brush:py;">
while условное_выражение:
   инструкции
</pre>
<p>После ключевого слова <span class="b">while</span> указывается условное выражение, и пока это выражение возвращает значение <code>True</code>, 
будет выполняться блок инструкций, который идет далее.</p>
<p>Все инструкции, которые относятся к циклу while, располагаются на последующих строках и должны иметь отступ от начала ключевого слова while.</p>
<pre class="brush:py;">
number = 1

while number &lt; 5:
    print(f"number = {number}")
    number += 1
print("Работа программы завершена")
</pre>
<p>В данном случае цикл while будет выполняться, пока переменная number меньше 5.</p>
<p>Сам блок цикла состоит из двух инструкций:</p>
<pre class="brush:py;">
print(f"number = {number}")
number += 1
</pre>
<p>Обратите внимание, что они имеют отступы от начала оператора while - в данном случае от начала строки. Благодаря этому Python может определить, 
что они принадлежат циклу. В самом цикле сначала выводится значение переменной number, а потом ей присваивается новое значение. .</p>
<p>Также обратите внимание, что последняя инструкция <code>print("Работа программы завершена")</code> не имеет отступов от начала строки, поэтому она не 
входит в цикл while.</p>
<p>Весь процесс цикла можно представить следующим образом:</p>
<ol>
<li><p>Сначала проверяется значение переменной number - больше ли оно 5. И поскольку вначале переменная равна 1, то это условие возвращает <code>True</code>, 
и поэтому выполняются инструкции цикла</p>
<p>Инструкции цикла выводят на консоль строку <code>number = 1</code>. И далее значение переменной number увеличивается на единицу - теперь она равна 2. Однократное выполнение блока инструкций цикла 
называется <span class="b">итерацией</span>. То есть таким образом, в цикле выполняется первая итерация.</p></li>
<li><p>Снова проверяется условие <code>number &lt; 5</code>. Оно по прежнему равно True, так как number = 2, поэтому выполняются инструкции цикла</p>
<p>Инструкции цикла выводят на консоль строку <code>number = 2</code>. И далее значение переменной number опять увеличивается на единицу - теперь она равна 3. 
Таким образом, выполняется вторая итерация.</p></li>
<li><p>Опять проверяется условие <code>number &lt; 5</code>. Оно по прежнему равно True, так как number = 3, поэтому выполняются инструкции цикла</p>
<p>Инструкции цикла выводят на консоль строку <code>number = 3</code>. И далее значение переменной number опять увеличивается на единицу - теперь она равна 4. 
То есть выполняется третья итерация.</p></li>
<li><p>Снова проверяется условие <code>number &lt; 5</code>. Оно по прежнему равно True, так как number = 4, поэтому выполняются инструкции цикла</p>
<p>Инструкции цикла выводят на консоль строку <code>number = 4</code>. И далее значение переменной number опять увеличивается на единицу - теперь она равна 5. 
То есть выполняется четвертая итерация.</p></li>
<li><p>И вновь проверяется условие <code>number &lt; 5</code>. Но теперь оно равно <span class="b">False</span>, так как number = 5, 
поэтому выполняются выход из цикла. Все цикл - завершился. Дальше уже выполняются действия, которые определены после цикла. Таким образом, данный цикл 
произведет четыре прохода или четыре итерации</p></li>
</ol>
<p>В итоге при выполнении кода мы получим следующий консольный вывод:</p>
<div class="console">
<pre class="consoletext">
number = 1
number = 2
number = 3
number = 4
Работа программы завершена
</pre>
</div>
<p>Для цикла while также можно определить дополнительный блок <span class="b">else</span>, инструкции которого выполняются, когда условие равно False:</p>
<pre class="brush:py;">
number = 1

while number &lt; 5:
    print(f"number = {number}")
    number += 1
else:
    print(f"number = {number}. Работа цикла завершена")
print("Работа программы завершена")
</pre>
<p>То есть в данном случае сначала проверяется условие и выполняются инструкции while. Затем, когда условие становится равным False, выполняются инструкции 
из блока else. Обратите внимание, что инструкции из блока else также имеют отступы от начала конструкции цикла. В итоге в данном случае мы получим 
следующий консольный вывод:</p>
<div class="console">
<pre class="consoletext">
number = 1
number = 2
number = 3
number = 4
number =5. Работа цикла завершена
Работа программы завершена
</pre>
</div>
<p>Блок else может быть полезен, если условие изначально равно False, и мы можем выполнить некоторые действия по этому поводу:</p>
<pre class="brush:py;">
number = 10

while number &lt; 5:
    print(f"number = {number}")
    number += 1
else:
    print(f"number = {number}. Работа цикла завершена")
print("Работа программы завершена")
</pre>
<p>В данном случае условие <code>number &lt; 5</code> изначально равно False, поэтому цикл не выполняет ни одной итерации и сразу переходит в блоку else.</p>
<h3>Цикл for</h3>
<p>Другой тип циклов представляет конструкция <span class="b">for</span>. Этот цикл пробегается по набору значений, помещает каждое значение в 
переменную, и затем в цикле мы можем с этой переменной производить различные действия. Формальное определение цикла for:</p>
<pre class="brush:py;">
for переменная in набор_значений:
	инструкции
</pre>
<p>После ключевого слова <span class="b">for</span> идет название переменной, в которую будут помещаться значения. Затем после оператора 
<span class="b">in</span> указывается набор значений и двоеточие.</p>
<p>А со следующей строки располагается блок инструкций цикла, которые также должны иметь отступы от начала цикла.</p>
<p>При выполнении цикла Python последовательно получает все значения из набора и передает их переменную. Когда все значения из набора будут 
перебраны, цикл завершает свою работу.</p>
<p>В качестве набора значений, например, можно рассматривать строку, которая по сути представляет набор символов. Посмотрим на примере:</p>
<pre class="brush:py;">
message = "Hello"

for c in message:
    print(c)
</pre>
<p>В цикле определяется переменную <code>c</code>, после оператора <code>in</code> в качестве перебираемого набора указана переменная message, которая хранит 
строку "Hello". В итоге цикл for будет перебираеть последовательно все символы из строки message и помещать их в переменную c. Блок самого цикла 
состоит из одной инструкции, которая выводит значение переменной с на консоль. Консольный вывод программы:</p>
<div class="console">
<pre class="consoletext">
H
e
l
l
o
</pre>
</div>
<p>Цикл for также может иметь дополнительный блок <span class="b">else</span>, который выполняется после завершения цикла:</p>
<pre class="brush:py;">
message = "Hello"
for c in message:
    print(c)
else:
    print(f"Последний символ: {c}. Цикл завершен");
print("Работа программы завершена")  # инструкция не имеет отступа, поэтому не относится к else
</pre>
<p>В данном случае мы получим следующий консольный вывод:</p>
<div class="console">
<pre class="consoletext">
H
e
l
l
o
Последний символ: o. Цикл завершен
Работа программы завершена
</pre>
</div>
<p>Стоит отметить, что блок else имеет доступ ко всем переменным, которые определены в цикле for.</p>
<h3>Вложенные циклы</h3>
<p>Одни циклы внутри себя могут содержать другие циклы. Рассмотрим на примере вывода таблицы умножения:</p>
<pre class="brush:py;">
i = 1
j = 1
while i &lt; 10:
    while j &lt; 10:
        print(i * j, end="\t")
        j += 1
    print("\n")
    j = 1
    i += 1
</pre>
<p>Внешний цикл <code>while i &lt; 10:</code> срабатывает 9 раз пока переменная i не станет равна 10. Внутри этого цикла срабатывает 
внутренний цикл <code>while j &lt; 10:</code>. Внутренний цикл также срабатывает 9 раз пока переменная j не станет равна 10. 
Причем все 9 итераций внутреннего цикла срабатывают в рамках одной итерации внешнего цикла.</p>
<p>В каждой итерации внутреннего цикла на консоль будет выводится произведение чисел i и j. Затем значение переменной j увеличивается на единицу. 
Когда внутренний цикл закончил работу, значений переменной j сбрасывается в 1, а значение переменной i увеличивается на единицу и происходит переход к 
следующей итерации внешнего цикла. И все повторяется, пока переменная i не станет равна 10. Соответственно внутренний цикл сработает всего 
81 раз для всех итераций внешнего цикла. В итоге мы получим следующий консольный вывод:</p>
<div class="console">
<pre class="consoletext">
1	2	3	4	5	6	7	8	9	

2	4	6	8	10	12	14	16	18	

3	6	9	12	15	18	21	24	27	

4	8	12	16	20	24	28	32	36	

5	10	15	20	25	30	35	40	45	

6	12	18	24	30	36	42	48	54	

7	14	21	28	35	42	49	56	63	

8	16	24	32	40	48	56	64	72	

9	18	27	36	45	54	63	72	81	
</pre>
</div>
<p>Подобным образом можно определять вложенные циклы for:</p>
<pre class="brush:py;">
for c1 in  "ab":
    for c2 in "ba":
        print(f"{c1}{c2}")
</pre>
<p>В данном случае внешний цикл проходит по строке "ab" и каждый символ помещает в переменную c1. Внутренний цикл проходит по строке "ba", помещает каждый 
символ строки в переменную c2 и выводит сочетание обоих символов на консоль. То есть в итоге мы получим все возможные сочетания символов a и b:</p>
<div class="console">
<pre class="consoletext">
ab
aa
bb
ba
</pre>
</div>
<h3>Выход из цикла. break и continue</h3>
<p>Для управления циклом мы можем использовать специальные операторы <span class="b">break</span> и <span class="b">continue</span>. 
Оператор <span class="b">break</span> осуществляет выход из цикла. А оператор <span class="b">continue</span> выполняет переход к следующей итерации цикла.</p>
<p>Оператор break может использоваться, если в цикле образуются условия, которые несовместимы с его дальнейшим выполнением. Рассмотрим следующий пример:</p>
<pre class="brush:py;">
number = 0
while number &lt; 5:
    number += 1
    if number == 3 :    # если number = 3, выходим из цикла
        break
    print(f"number = {number}")
</pre>
<p>Здесь цикл while проверяет условие <code>number &lt; 5</code>. И пока number не равно 5, предполагается, что значение number будет 
выводиться на консоль. Однако внутри цикла также проверяется другое условие: <code>if number == 3</code>. То есть, если значение number равно 3, то с помощью 
оператора <span class="b">break</span> выходим из цикла. И в итоге мы получим следующий консольный вывод:</p>
<div class="console">
<pre class="consoletext">
number = 1
number = 2
</pre>
</div>
<p>В отличие от оператора <code>break</code> оператор <span class="b">continue</span> выполняет переход к следующей 
итерации цикла без его завершения. Например, в предыдущем примере заменим break на continue:</p>
<pre class="brush:py;">
number = 0
while number &lt; 5:
    number += 1
    if number == 3 :    # если number = 3, переходим к новой итерации цикла
        continue
    print(f"number = {number}")
</pre>
<p>И в этом случае если значение переменной number равно 3, последующие инструкции после оператора continue не будут выполняться:</p>
<div class="console">
<pre class="consoletext">
number = 1
number = 2
number = 4
number = 5
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


<div class="nav"><p><a href="./2.6.php">Назад</a><a href="./">Содержание</a><a href="./2.8.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Python</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/1.1.php">Язык программирования Python</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/1.2.php">Установка Python и первая программа на Windows</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/1.5.php">Установка Python и первая программа на MacOS</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/1.3.php">Первая программа в PyCharm</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/1.4.php">Python в Visual Studio</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы Python</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.1.php">Введение в написание программ</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.2.php">Переменные и типы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.14.php">Консольный ввод и вывод</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.3.php">Арифметические операции с числами</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.12.php">Поразрядные операции с числами</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.4.php">Условные выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.6.php">Условная конструкция if</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.7.php">Циклы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.8.php">Функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.15.php">Параметры функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.16.php">Оператор return и возвращение результата из функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.17.php">Функция как тип, параметр и результат другой функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.18.php">Лямбда-выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.5.php">Преобразование типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.9.php">Область видимости переменных</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.19.php">Замыкания</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.1.php">Классы и объекты</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.2.php">Инкапсуляция, атрибуты и свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.3.php">Наследование</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.4.php">Переопределение функционала базового класса</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.6.php">Атрибуты классов и статические методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/7.5.php">Класс object. Строковое представление объекта</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Обработка ошибок и исключений</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.11.php">Конструкция try...except...finally</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.20.php">except и обработка разных типов исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.21.php">Генерация исключений и создание своих типов исключений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Списки, кортежи и словари</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/3.1.php">Списки</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/3.2.php">Кортежи</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/3.5.php">Диапазоны</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/3.3.php">Словари</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/3.4.php">Множества</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Модули</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.10.php">Определение и подключение модулей</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/6.1.php">Модуль random</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/6.2.php">Модуль math</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/6.3.php">Модуль locale</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/6.4.php">Модуль decimal</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Строки</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/5.1.php">Работа со строками</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/5.2.php">Основные методы строк</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/5.3.php">Форматирование</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/5.4.php">Программа подсчета слов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Pattern matching</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.13.php">Конструкция match</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.22.php">Кортежи в pattern matching</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.23.php">Массивы в pattern matching</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.24.php">Словари в pattern matching</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.25.php">Классы в pattern matching</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.26.php">guards или ограничения шаблонов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/2.27.php">Установка псевдонимов и паттерн AS</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Работа с файлами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.1.php">Открытие и закрытие файлов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.2.php">Текстовые файлы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.3.php">Файлы CSV</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.4.php">Бинарные файлы</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.6.php">Модуль shelve</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/4.5.php">Модуль OS и работа с файловой системой</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Работа с датами и временем</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/8.1.php">Модуль datetime</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/8.2.php">Операции с датами</a></span></li>
		</ul>
	</li>
	
	<li class="closed"><span class="folder">Глава 11. Создание графического интерфейса</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.1.php">Tkinter. Создание окна приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.2.php">Кнопки</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.3.php">Изменение свойств элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.4.php">Позиционирование элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.5.php">Текстовая метка Label</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.6.php">Поле ввода Entry</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.7.php">Checkbutton</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.8.php">Radiobutton</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.9.php">Listbox</a></span></li>
			<li><span class="file"><a href="//metanit.com/python/tutorial/9.10.php">Меню</a></span></li>
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
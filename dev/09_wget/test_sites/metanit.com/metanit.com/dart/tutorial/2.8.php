<!DOCTYPE html>
<html >
<head>
<title>Dart | Условные конструкции</title>
<meta charset="utf-8" />
<meta name="description" content="Условные конструкции в языке программирования Dart, if..else, switch..case, continue, переход на метку, тернарный оператор, проверка на null">
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
<h2>Условные конструкции</h2><div class="date">Последнее обновление: 22.01.2021</div>

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

<p><span class="b">Условные конструкции</span> позволяют  в зависимости от определенного условий направить работу программы по одному из путей.</p>
<p>В языке Dart используются следующие условные конструкции: <span class="b">if..else</span> и <span class="b">switch..case</span>, а также операторы <span class="b">?:</span> и 
<span class="b">??</span>.</p>
<h3>Конструкция if/else</h3>
<p>Выражение if/else проверяет истинность некоторого условия и в зависимости от результатов проверки выполняет определенный код:</p>
<pre class="brush:dart;">
int num1 = 6;
int num2 = 4;
if(num1&gt;num2){
    print("Первое число больше второго");
}
</pre>
<p>После ключевого слова <code>if</code> в скобках идет условие. Если это условие выполняется и возвращает true, то срабатывает код, который помещен в далее в 
блоке if после фигурных скобок. В данном случае в качестве условия выступает операция сравнения двух чисел.</p>
<p>Поскольку здесь первое число больше второго, то выражение <code>num1 &gt; num2</code> истинно и возвращает значение 
<code>true</code>. Следовательно, управление переходит в блок кода после фигурных скобок и начинает выполнять содержащиеся там инструкции, а 
конкретно метод <code>print("Первое число больше второго");</code>. Если бы первое число оказалось бы меньше второго или равно ему, то инструкции в блоке if не выполнялись бы.</p>
<p>Но что, если мы захотим, чтобы при несоблюдении условия также выполнялись какие-либо действия? В этом случае мы можем добавить блок <code>else</code>:</p>
<pre class="brush:dart;">
int num1 = 6;
int num2 = 4;
if(num1&gt;num2){
    print("Первое число больше второго");
}
else{
    print("Первое число меньше второго");
</pre>
<p>Но при сравнении чисел мы можем насчитать три состояния: первое число больше второго, первое число меньше второго и числа равны. 
С помощью выражения <code>else if</code>, мы можем обрабатывать дополнительные условия:</p>
<pre class="brush:dart;">
int num1 = 6;
int num2 = 8;
if(num1&gt;num2){
    print("Первое число больше второго");
}
else if(num1&lt;num2){
    print("Первое число меньше второго");
}
else{
    print("Числа равны");
}
</pre>
<p>Используя логические операторы, можно объединить сразу несколько условий:</p>
<pre class="brush:dart;">
int num1 = 8;
int num2 = 6;
if(num1 &gt; num2 && num1&gt;7){
	print("Первое число больше второго и больше 7");
}
</pre>
<p>Здесь блок if будет выполняться, если <code>num1 &gt; num2</code> равно <code>true</code> и одновременно <code>num1&gt;7</code> равно <code>true</code>.</p>
<h3>Конструкция switch</h3>
<p>Конструкция <span class="b">switch/case</span> позволяет обработать сразу несколько условий:</p>
<pre class="brush:dart;">
int num = 8;
switch(num){
            
    case 1: 
        print("число равно 1");
        break;
    case 8: 
        print("число равно 8");
        num++;
        break;
    case 9: 
        print("число равно 9");
        break;
    default:
        print("число не равно 1, 8, 9");
}
</pre>
<p>После ключевого слова <span class="b">switch</span> в скобках идет сравниваемое выражение. Значение этого выражения последовательно сравнивается со значениями, помещенными после оператора 
<span class="b">сase</span>. И если совпадение будет найдено, то будет выполняться определенный блок <span class="b">сase</span>.</p>
<p>Стоит отметить, что в конце блока сase должен идти оператор <span class="b">break</span>, либо один из следующих операторов: continue, throw, return. Если в конце блока case 
нет ни одного из этих операторов, тогда мы столкнемся с ошибкой, как в следующем случае:</p>
<pre class="brush:dart;">
case 8: 
    print("число равно 8");
    num++;	// Ошибка ! Отсутствует оператор break
case 9: 
    print("число равно 9");
    break;
</pre>
<p>Если мы хотим также обработать ситуацию, когда совпадения не будет найдено, то можно добавить блок <span class="b">default</span>, 
как в примере выше. Хотя блок <span class="b">default</span> необязателен.</p>
<p>Также мы можем определить одно действие сразу для нескольких блоков case подряд:</p>
<pre class="brush:dart;">
int num = 3;
int output = 0;
switch(num){
	
	case 1: 
		output = 3;
		break;
	case 2: 
	case 3: 
	case 4: 
		output = 6;
		break;
	case 5: 
		output = 12;
		break;
	default:
		output = 24;
}
print(output);
</pre>
<p>Вместо оператора break можно использовать оператор <span class="b">continue</span>, указав метку для перехода:</p>
<pre class="brush:dart;">
int num = 8;
switch(num){
             
    case 1: 
        print("число равно 1");
        break;
    case 8: 
        print("число равно 8");
        num++;
        continue N9;	// переход на метку N9
    N9: case 9: 
        print("число равно 9");
        break;
    default:
        print("число не равно 1, 8, 9");
}
</pre>
<p>Здесь оператор continue осуществляет переход на метку N9, которая оп сути представляет следующий блок case. Название метки произвольное. В данном случае действие 
оператора continue похоже на действие оператора goto в некоторых языках программирования. Только в данном случае метка должна вести внутри конструкции switch 
на один из блоков case или блок default.</p>
<h3>Тернарная операция</h3>
<p>Тернарную операция имеет следующий синтаксис: <code>[первый операнд - условие] ? [второй операнд] : [третий операнд]</code>. 
Таким образом, в этой операции участвуют сразу три операнда. 
В зависимости от условия тернарная операция возвращает второй или третий операнд: если условие равно <code>true</code>, то 
возвращается второй операнд; если условие равно <code>false</code>, то третий. Например:</p>
<pre class="brush:dart;">
int x=3;
int y=2;
int z = x&lt;y? (x+y) : (x-y);
print(z);
</pre>
<p>Здесь результатом тернарной операции является переменная z. Сначала проверяется условие <code>x&lt;y</code>. 
И если оно соблюдается, то z будет равно второму операнду - (x+y), иначе z будет равно третьему операнду.</p>
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
<li><a title="Вопросы для самопроверки" href="../questions/1.4.php"><i class="fa fa-lg fa-question"></i><span class="dop-txt">Вопросы для самопроверки</span></a></li>
</ul>
</fieldset></div>
<div class="nav"><p><a href="./2.7.php">Назад</a><a href="./">Содержание</a><a href="./2.9.php">Вперед</a></p></div></div>
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
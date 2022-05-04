<!DOCTYPE html>
<html >
<head>
<title>Swift | Конструкция switch</title>
<meta charset="utf-8" />
<meta name="description" content="Конструкция switch..case в языке программирования Swift, блок default">
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
<h2>Конструкция switch</h2><div class="date">Последнее обновление: 29.12.2017</div>

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

<p>Конструкция <span class="b">switch/case</span> похожа на конструкцию <code>if/else</code>, так как позволяет обработать сразу несколько условий:</p>
<pre class="brush:swift;">
var num: Int = 22

switch num {
case 0:
    print("Переменная равна 0")
case 10:
    print("Переменная равна 10")
case 22:
    print("Переменная равна 22")
default:
    print("не удалось распознать число")
}
</pre>
<p>После ключевого слова <span class="b">switch</span> идет сравниваемое выражение. Это может быть переменная или константа. Значение этого выражения 
последовательно сравнивается со значениями, помещенными после оператора <span class="b">сase</span>. И если совпадение будет найдено, то будет выполняться 
определенный блок <span class="b">сase</span>.</p>
<p>Если совпадение не будет найдено, то выполняется оператор <span class="b">default</span>.</p>
<p>В данном случае так как переменная <code>num</code> равна 22, будет выполняться следующий блок case:</p>
<pre class="brush:swift;">
case 22:
    print("Переменная равна 22")
</pre>
<p>В других языках программирования, в которых также есть конструкция <code>switch/case</code>, обычно в конце блока case ставится оператор <span class="b">break</span> 
для прерывания выполнения и выхода из блока <code>switch/case</code>. В Swift использовать оператор break в подобных случаях необязательно. Однако бывают случаи, когда мы не хотим 
обрабатывать какие-то определенные значения и просто хотим выйти из конструкции switch. В этом случае после оператора case или 
default можно указать оператор break:</p>
<pre class="brush:swift;">
var num: Int = 0

switch num {
case 0:
    print("Переменная равна 0")
case 10:
    break
case 22:
    print("Переменная равна 22")
default:
    break
}
</pre>
<p>В данном случае если num равно 10 или другому числу, отличному от 0 или 22, просто произойдет выход из switch.</p>
<p>С помощью знака подчеркивания _ можно задать соответствие всем остальным значениям:</p>
<pre class="brush:swift;">
let number = 5
switch number {
case 1:
    print("Number = 1")
case 2:
    print("Number = 2")
case _:
    print("Number не равно ни 1, ни 2, но это не точно")
}
</pre>
<p>Также мы можем сравнивать выражение не с одним значением, а с группой значений:</p>
<pre class="brush:swift;">
var num: Int = 20

switch num {
case 0, 10: 	// если num равно 0 или 10
    print("Переменная равна 0 или 10")
case 11..&lt;20:	// если num в диапазоне от 11 до 20, не включая 20
    print("Переменная находится в диапазоне от 11 до 20")
case 20...30:	// если num в диапазоне от 20 до 30
    print("Переменная находится в диапазоне от 20 до 30")
default:
    print("не удалось распознать число")
}
</pre>
<p>Оператор <code>case 0, 10</code> задает два сравниваемых значения 0 и 10 и срабатывает, если выражение равно одному из этих значений.</p>
<p>Оператор <code>case 11..&lt;20</code> определяет целый диапазон значений от 11 до 20 (не включая 20) и срабатывает, если выражение равно значению из этого диапазона.</p>
<p>Оператор <code>case 20...30</code> определяет целый диапазон значений от 20 до 30 (включая оба числа) и срабатывает, если выражение равно значению из этого диапазона.</p>
<p>В версии Swift 4 мы можем опускать одну границу диапазона:</p>
<pre class="brush:swift;">
let i = 8
switch i {
case ...&lt;0:
    print("i - отрицательное число")
case 1...:
    print("i - положительное число")
case 0:
    print("i равно 0")
default:break
}
</pre>
<h3>Кортежи в switch/case</h3>
<p>Кроме выражений простых типов можно сравнивать кортежи:</p>
<pre class="brush:swift;">
let personInfo = ("Tom", 22)
switch personInfo {
case ("Bob", 33):
    print("Имя: Bob, возраст: 33")
case (_, 22):
    print("Имя: \(personInfo.0) и возраст: 22")
case ("Tom", _):
    print("Имя: Tom и возраст: \(personInfo.1))
case ("Tom", 1...30):
    print("Имя: Tom и возраст от 1 до 30)
default:
    print("Информация не распознана")
}
</pre>
<p>Здесь кортеж <code>personInfo</code> последовательно сравнивается с тремя кортежами в операторах case. При сравнении мы можем задать полный кортеж:</p>
<pre class="brush:swift;">
case ("Bob", 33):
    print("Имя: Bob, возраст: 33")
</pre>
<p>Либо мы также можем опустить один из элементов кортежа, подставив вместо него знак подчеркивания _:</p>
<pre class="brush:swift;">
case (_, 22):
    print("Имя: \(personInfo.0) и возраст: 22")
</pre>
<p>В этом случае не имеет значение, чему равен первый элемент кортежа, главное, чтобы второй элемент кортежа был равен 22.</p>
<p>Для числовых данных мы также можем задать не точное значение, а диапазон значений:</p>
<pre class="brush:swift;">
case ("Tom", 1...30):
    print("Имя: Tom и возраст от 1 до 30)
</pre>
<p>В этом случае второй элемент кортежа должен находиться в диапазоне от 1 до 30.</p>
<p>В использованной нами выше конструкции <code>switch/case</code> сравниваемому выражению соответствуют аж три оператора <code>case</code> - второй, третий и четвертый, но 
выполняться будет только первый из них.</p>
<p>Но если мы хотим, чтобы также выполнялся и следующий оператор <code>case</code> (или оператор default), то в конце предыдущего блока case следует использовать оператор <span class="b">fallthrough</span>:</p>
<pre class="brush:swift;">
let personInfo = ("Tom", 22)
switch personInfo {
case ("Bob", 33):
    print("Имя: Bob, возраст: 33")
case (_, 22):
    print("Имя: \(personInfo.0) и возраст: 22")
	fallthrough
case ("Tom", _):
    print("Имя: Tom и возраст: \(personInfo.1))
default:
    print("Информация не распознана")
}
</pre>
<h3>Связывание значений</h3>
<p>Механизм связывания значений позволяет определить в блоках <code>case</code> переменные и константы, значения которых будут связаны со значением 
сравниваемого выражения:</p>
<pre class="brush:swift;">
let number = 5
switch number {
case 1:
    print("Number = 1")
case 2:
    print("Number = 2")
case let n:
    print("Number = \(n)")
}
</pre>
<p>В данном случае если значение number не равно 1 и 2, то оно передается константе n, которая используется в рамках своего блока case.</p>
<p>При этом привязка может выполняться к переменным и константам более сложных типов, например, кортежей:</p>
<pre class="brush:swift;">
let personInfo = ("Tom", 22)
switch personInfo {
case (let name, 22):
    print("Имя: \(name) и возраст: 22")
case ("Tom", let age):
    print("Имя: Tom и возраст: \(age)")
case let (name, age):
    print("Имя: \(name) и возраст: \(age)")
}
</pre>
<p>Если второй элемент в personInfo равен 22, то срабатывает блок</p>
<pre class="brush:swift;">
case (let name, 22):
    print("Имя: \(name) и возраст: 22")
</pre>
<p>Здесь переменная name получает значение первого элемента из кортежа personInfo.</p>
<p>Причем в этой конструкции не используется блок <code>default</code>, так как блок </p>
<pre class="brush:swift;">
case let (name, age):
    print("Имя: \(name) и возраст: \(age)")
</pre>
<p>фактически перекрывает все возможные случаи, которые не попадают под предыдущие операторы case. В этом блоке определяется константа (хотя это может быть и переменная), 
которая состоит из элементов кортежа personInfo.</p>
<h3>Оператор where</h3>
<p>Если при выполнении блока <code>case</code> мы хотим задать дополнительные условия, то в этом случае нам поможет оператор <span class="b">where</span>. Например:</p>
<pre class="brush:swift;">
let i = 8
switch i {
case let k where k &lt; 0:
    print("i - отрицательное число")
case let k where k &gt; 0:
    print("i - положительное число")
case 0:
    print("i is 0")
default:break
}
</pre>
<p>Пример с кортежами:</p>
<pre class="brush:swift;">
let personInfo = ("Tom", 22)
switch personInfo {

case ("Tom", _) where personInfo.1 &gt; 10 &amp;&amp; personInfo.1 &lt; 15:
    print("Имя: Tom и возраст от 10 до 15")
	
case ("Tom", _) where personInfo.1 &gt;= 20:
    print("Имя: Tom и возраст от 20 и выше")
	
default:
    print("Неизвестно")
}
</pre>
<p>Выражения <code>where</code> определяют дополнительные условия. И если они не выполняются, то соответственно блок case тоже не выполняется.</p>
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


<div class="nav"><p><a href="2.6.php">Назад</a><a href="./">Содержание</a><a href="2.8.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Swift</span>
		<ul>
			<li><span class="file"><a href="1.1.php">Язык Swift и платформы iOS и Mac OS</a></span></li>
			<li><span class="file"><a href="1.2.php">Начало работы с Swift и XCode</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы Swift</span>
		<ul>
			<li><span class="file"><a href="2.1.php">Переменные и константы. Типы данных</a></span></li>
			<li><span class="file"><a href="2.2.php">Числовые типы. Операции с числами</a></span></li>
			<li><span class="file"><a href="2.19.php">Преобразование числовых данных</a></span></li>
			<li><span class="file"><a href="2.20.php">Поразрядные операции с числами</a></span></li>
			<li><span class="file"><a href="2.3.php">Строки. Типы Character и String</a></span></li>
			<li><span class="file"><a href="2.4.php">Тип Bool. Условные выражения</a></span></li>
			<li><span class="file"><a href="2.5.php">Кортежи</a></span></li>
			<li><span class="file"><a href="2.6.php">Условная конструкция If. Тернарный оператор</a></span></li>
			<li><span class="file"><a href="2.7.php">Конструкция switch</a></span></li>
			<li><span class="file"><a href="2.8.php">nil и опциональные типы</a></span></li>
			<li><span class="file"><a href="2.10.php">Циклы</a></span></li>
			<li><span class="file"><a href="2.13.php">Функции</a></span></li>
			<li><span class="file"><a href="2.14.php">Возвращение функцией значения</a></span></li>
			<li><span class="file"><a href="2.15.php">Дополнительно о параметрах функций</a></span></li>
			<li><span class="file"><a href="2.16.php">Функция как значение. Тип функции</a></span></li>
			<li><span class="file"><a href="2.17.php">Вложенные и рекурсивные функции</a></span></li>
			<li><span class="file"><a href="2.21.php">Перегрузка функций</a></span></li>
			<li><span class="file"><a href="2.18.php">Замыкания</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="3.1.php">Классы и объекты</a></span></li>
			<li><span class="file"><a href="3.2.php">Инициализаторы</a></span></li>
			<li><span class="file"><a href="3.3.php">Свойства</a></span></li>
			<li><span class="file"><a href="3.4.php">Статические свойства и методы</a></span></li>
			<li><span class="file"><a href="3.7.php">Структуры</a></span></li>
			<li><span class="file"><a href="3.8.php">Перечисления</a></span></li>
			<li><span class="file"><a href="3.9.php">Значимые и ссылочные типы</a></span></li>
			<li><span class="file"><a href="3.6.php">Наследование</a></span></li>
			<li><span class="file"><a href="3.11.php">Свойства и методы класса</a></span></li>
			<li><span class="file"><a href="3.12.php">Вложенные типы</a></span></li>
			<li><span class="file"><a href="3.13.php">Полиморфизм</a></span></li>
			<li><span class="file"><a href="3.14.php">Преобразование типов</a></span></li>
			<li><span class="file"><a href="3.10.php">Обобщения</a></span></li>
			</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Коллекции</span>
		<ul>
			<li><span class="file"><a href="2.22.php">Последовательности</a></span></li>
			<li><span class="file"><a href="2.9.php">Массивы</a></span></li>
			<li><span class="file"><a href="2.11.php">Множества</a></span></li>
			<li><span class="file"><a href="2.12.php">Словари</a></span></li>
			<li><span class="file"><a href="3.5.php">Сабскрипты</a></span></li>
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
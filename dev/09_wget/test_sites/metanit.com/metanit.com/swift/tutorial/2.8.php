<!DOCTYPE html>
<html >
<head>
<title>Swift | nil и опциональные типы</title>
<meta charset="utf-8" />
<meta name="description" content="Опциональные типы Optional в языке Swift, оператор !, unwrapped operator, значение nil, программирование для iOS и MacOS">
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
<h2>nil и опциональные типы</h2><div class="date">Последнее обновление: 29.12.2017</div>

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

<p>Опциональные типы представляют объекты, которые могут иметь, а могут и не иметь значение. 
Опциональные типы выступают двойниками базовых типов. Все они имеют в конце вопросительный знак: <code>Int?</code>, 
<code>String?</code> и т.д. Вопросительный знак как раз указывает, что это опциональный тип.</p>
<p>Например, рассмотрим следующую ситуацию:</p>
<pre class="brush:swift;">
let someString = "123"
let someNumber = Int(someString)
</pre>
<p>Здесь инициализатор <code>Int(someString)</code> преобразует строку someString в число. В данном случае у нас все 
нормально, так как строка "123" действительно содержит число 123. Однако, что, если бы переменная someString представляла бы строку "hello"? В этом случае инициализатор не смог бы 
преобразовать строку в число. Поэтому инициализатор возвращает не просто объект Int, а <span class="b">Int?</span>, 
то есть объект, который может иметь, а может не иметь значения.</p>
<p>По факту, если объект не имеет значения, то ему присваивается специальное значение <span class="b">nil</span>. 
В коде мы также можем установить явным образом это значение:</p>
<pre class="brush:swift;">
var number: Int? = 12
number = nil	// теперь переменная number не имеет значения
</pre>
<p>Значение <code>nil</code> может применяться только к объектам опциональных типов.</p>
<p>Фактически запись типа <code>Int?</code> является сокращением от <code>Optional&lt;Int&gt;</code>. То есть мы также можем определить переменную следующим 
образом:</p>
<pre class="brush:swift;">
var number: Optional&lt;Int&gt; = 12
</pre>
<p>Несмотря на то, что в примере выше переменной number присваивается число 12, но фактически переменная будет иметь в качестве 
значения <code>Optional(12)</code>, то есть мы могли бы написать следующим образом:</p>
<pre class="brush:swift;">
var number : Optional&lt;Int&gt;= Optional(12)
// или так
var number2 = Optional(12)
</pre>
<p>При этом опять же стоит понимать, что <code>Optional&lt;Int&gt;</code>, это не то же самое, что  и 
<code>Optional&lt;String&gt;</code> или <code>Optional&lt;Doublegt;</code>, например:</p>
<pre class="brush:swift;">
var number = Optional(12)
number = Optional("12") // Ошибка number представляет тип Optional&lt;Int&gt;, а не Optional&lt;String&gt;
</pre>
<h3>Получение значения из Optional</h3>
<p>При работе с объектами опциональных типов следует помнить, что они не эквивалентны объектам обычных типов. То есть следующий пример у нас работать не будет:</p>
<pre class="brush:swift;">
var a: Int? = 12
var b: Int = 10
var c = a + b	// ошибка - разные типы
</pre>
<p>a и b здесь переменные разных типов, хотя казалось бы обе переменных хранят целые числа. И чтобы полноценно работать с объектами опциональных типов, 
следует извлечь из них значение. Для извлечения значения используется оператор ! - восклицательный знак после названия объекта 
опционального типа. Данный оператор еще называют <span class="b">unwrap operator</span> или 
<span class="b">forced unwrap operator</span>:</p>
<pre class="brush:swift;">
var a: Int? = 12
var b: Int = 10
var c = a! + b		// с = 22
</pre>
<p>Другой пример:</p>
<pre class="brush:swift;">
var b: Int = 10
var a: Int? = Int("123")
b = a! + b
print(a!)    // 123
print(b)    // 133
</pre>
<h3>Неявное получение значений Optional</h3>
<p>Swift предоставляет еще один способ получения значения подобных типов, который заключается в использовании 
типов Optional с неявно получаемым значением (implicitly unwrapped Optional):</p>
<pre class="brush:swift;">
var b: Int = 10
var a: Int! = Int("123")
b = a + b
print(a)    // 123
print(b)    // 133
</pre>
<p>Здесь переменная a имеет тип <code>Int!</code>, а не <code>Int?</code>. Фактиччески это тот же самый Optional, но 
теперь нам явным образом не надо применять оператор ! для получения его значения.</p>
<h3>Проверка Optional на nil</h3>
<p>В то же время если переменная <code>a</code> в примере выше не будет содержать конкретное значение, то программа 
опять же выбросит ошибку. Например? в случае <code>var a: Int! = Int("abc")</code> или <code>var a: Int? = Int("abc")</code>. 
Поэтому перед использованием объектов опциональных типов желательно проверить, что они имеют какие-либо значение.</p>
<p>Для проверки мы можем использовать условную конструкцию if. Ее общая форма:</p>
<pre class="brush:swift;">
if var переменная | let константа = опциональное_значение {
	действия1
} else {
	действия2
}
</pre>
<p>Если опциональное_значение не равно nil, то оно присваивается создаваемой переменной (или константе), и выполняются действия1. Иначе выполняются действия2.</p>
<p>Например:</p>
<pre class="brush:swift;">
var str: String = "123"
var b: Int = 10
if var a = Int(str){
	a+=b
	print(a)
}
else{
	print(b)
}
</pre>
<p>Если выражение <code>Int(str)</code> (которое возвращает объект Int?) успешно преобразует строку в число, то есть будет иметь значение, то создается переменная a, 
которой присваивается полученное значение, и затем выполняется код:</p>
<pre class="brush:swift;">
a+=b
print(a)
</pre>
<p>Если же преобразование из строки в число завершится с ошибкой, и выражение <code>Int(str)</code> возвратит значение <code>nil</code>, то выполняется код в блоке else:</p>
<pre class="brush:swift;">
else{
	print(b)
}
</pre>
<p>Но также в данном случае мы могли и по другому проверить на значение nil:</p>
<pre class="brush:swift;">
var str: String = "123"
var b: Int = 10
var a: Int? = Int(str)
if a != nil {
	a+=b
	print(a)
}
else{
	print(b)
}
</pre>
<p>Если надо проверить значения нескольких переменных или констант, то все их можно указать в одном выражении if:</p>
<pre class="brush:swift;">
let a = Int("123")
let b = Int("456")
if let aVal = a, let bVal = b{
    print(aVal)
    print(bVal)
}
else{
    print("Error")
}
</pre>
<p>В данном случае выражение if выполняется, если и a, и b не равны nil. Иначе выполняется блок else.</p>
<h3>Сравнение объектов Optional</h3>
<p>При сравнении объекта Optional с объектом конкретного типа, Swift преобразует объект конкретного типа к типу Optional:</p>
<pre class="brush:swift;">
let a: Int? = 10
if a == 10{
    print("a is equal to 10")
}
else{
    print("a is not equal to 10")
}
</pre>
<p>И таким образом работают операции ==  и !=. Однако с операциями &lt;, &gt;, &lt;=, &gt;= все будет несколько иначе. Например, следующий код выдаст 
ошибку:</p>
<pre class="brush:swift;">
let a: Int? = 10
if a &gt; 5{
    print("a is greater than 5")
}
</pre>
<p>И в подобных операциях к объекту Optional необходимо применить оператор !:</p>
<pre class="brush:swift;">
let a: Int? = 10
if a != nil &amp;&amp; a! &gt; 5{
    print("a is greater than 5")
}
</pre>
<h3>Optional в switch..case</h3>
<p>Если сравниваемое значение в конструкции switch представляет объект Optional, то с помощью операции ? мы можем 
получить и сравнивать его значение при его наличии:</p>
<pre class="brush:swift;">
let i = Int("1")
switch i {
case 1?:
    print("i is equal to 1")
case let n?:
    print("i is equal to \(n)")
case nil:
    print("i is undefined")
}
</pre>
<h3>Оператор nil-объединения</h3>
<p>Оператор ?? позволяет проверить значения объекта Optional на nil. Этот оператор принимает два операнда <code>a ?? 10</code>. Если первый операнд не равен 
nil, то возвращается значение первого операнда. Если первый операнд равен nil, то возвращается второй операнд:</p>
<pre class="brush:swift;">
let a = Int("234")
let b = a ?? 10
print(b)	// 234
</pre>
<p>В данном случае поскольку константа a не равна nil, то выражение <code>a ?? 10</code> возвращает значение этой константы, то есть число 234.</p>
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


<div class="nav"><p><a href="2.7.php">Назад</a><a href="./">Содержание</a><a href="2.10.php">Вперед</a></p></div></div>
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
<!DOCTYPE html>
<html >
<head>
<title>Go | Возвращение результата из функции</title>
<meta charset="utf-8" />
<meta name="description" content="Возвращение результата из функции в языке программирования Go, оператор return, возвращение функцией нескольких результатов">
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
<h2>Возвращение результата из функции</h2><div class="date">Последнее обновление: 20.12.2017</div>

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

<p>Функции могут возвращать результат. Для этого нужно после списка параметров функции указать тип возвращаемого результата. А в теле функции использовать оператор 
<span class="b">return</span>, после которого указывается возвращаемое значение:</p>
<pre class="brush:go;">
func имя_функции (список_параметров) тип_возвращаемого_значения {
	выполняемые_операторы
	return возвращаемое_значение
}
</pre>
<p>Например, мы хотим возвратить из функции сумму двух чисел:</p>
<pre class="brush:go;">
package main
import "fmt"

func main() {
	var a = add(4, 5)	// 9
	var b = add(20, 6)	// 26
	fmt.Println(a)
	fmt.Println(b)
}

func add(x, y int) int {
	return x + y
}
</pre>
<p>Функция add возвращает значение типа int, поэтому данный тип указан после списка параметров. В самой функции после оператора return указывается возврашаемое значение. 
При этом данное значение может быть значением переменной, литералом, либо же, как в данном случае, результатом операции или вызова функции. То есть выражение <code>x + y</code> 
определяет возвращаемое значение.</p>
<p>Поскольку функция возвращает значение, то при вызове функции мы можем получить это значение и передать его переменной:</p>
<pre class="brush:go;">
var a = add(4, 5)	// 9
var b = add(20, 6)	// 26
</pre>
<h3>Именованные возвращаемые результаты</h3>
<p>Возвращаемый результат может быть именован:</p>
<pre class="brush:go;">
func add(x, y int) (z int) {
	z = x + y
	return
}
</pre>
<p>В скобках после списка параметров фактически определяется переменная, значение которой будет возвращаться. В конце функции ставится оператор return, 
но теперь необязательно после этого оператора ставить возвращаемое значение. Фактически мы также могли бы написать:</p>
<pre class="brush:go;">
func add(x, y int) int {
	var z int = x + y
	return z
}
</pre>
<h3>Возвращение нескольких значений</h3>
<p>В Go функция может возвращать сразу несколько значений. В этом случае после списка параметров указывается в скобках список типов возвращаемых значений. А после оператора return 
располагаются через запятую все возвращаемые значения:</p>
<pre class="brush:go;">
package main
import "fmt"

func main() {
	var age, name = add(4, 5, "Tom", "Simpson")
	fmt.Println(age)	// 9
	fmt.Println(name)	// Tom Simpson
}

func add(x, y int, firstName, lastName string) (int , string) {
	var z int = x + y
	var fullName = firstName + " " + lastName
	return z, fullName
}
</pre>
<p>Функция add принимает четыре параметра: два числа и две строки. Возвращает число (значение типа int) и строку. Возвращаемые значения указаны после оператора return.</p>
<p>Поскольку функция теперь возвращает два значения, то при вызове этой функции мы можем присвоить ее результат двум переменным:</p>
<pre class="brush:go;">var age, name = add(4, 5, "Tom", "Simpson")</pre>
<p>Первое возвращаемое значение передается первой переменной age, а второе значение передается второй переменной name.</p>
<p>Альтернативный способ передачи переменным результатов функции:</p>
<pre class="brush:go;">age, name := add(4, 5, "Tom", "Simpson")</pre>
<p>И также в даном случае можно было бы использовать именованные результаты:</p>
<pre class="brush:go;">
func add(x, y int, firstName, lastName string) (z int, fullName string) {
	z = x + y
	fullName = firstName + " " + lastName
	return
}
</pre>
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


<div class="nav"><p><a href="2.11.php">Назад</a><a href="./">Содержание</a><a href="2.15.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в язык Go</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/1.1.php">Что такое Go</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/1.2.php">Первая программа</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/1.3.php">Go в LiteIDE</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/1.4.php">Go в Visual Studio Code</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Основы языка Go</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.1.php">Структура программы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.2.php">Переменные</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.3.php">Типы данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.4.php">Константы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.5.php">Арифметические операции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.6.php">Условные выражения</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.7.php">Поразрядные операции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.8.php">Массивы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.9.php">Условные конструкции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.10.php">Циклы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.11.php">Функции и их параметры</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.12.php">Возвращение результата из функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.15.php">Тип функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.16.php">Анонимные функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.17.php">Рекурсивные функции</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.18.php">defer и panic</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.13.php">Срезы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/2.14.php">Отображения</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Указатели</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/3.1.php">Что такое указатели</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/3.2.php">Указатели и функции</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Производные типы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/4.1.php">Объявление типов</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/4.2.php">Структуры</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/4.3.php">Вложенные структуры</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/4.4.php">Методы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/4.5.php">Методы указателей</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Пакеты и модули</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/5.1.php">Пакеты и их импорт</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/5.2.php">Введение в модули</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. Интерфейсы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/6.1.php">Введение в интерфейсы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/6.2.php">Соответствие интерфейсу</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/6.3.php">Полиморфизм</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Параллельное программирование. Горутины</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.1.php">Горутины</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.2.php">Каналы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.3.php">Закрытие канала</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.4.php">Синхронизация</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.5.php">Передача потоков данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.6.php">Мьютексы</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/7.7.php">WaitGroup</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 8. Потоки и файлы</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.1.php">Операции ввода-вывода. Reader и Writer</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.2.php">Создание и открытие файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.3.php">Чтение и запись файлов</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.4.php">Стандартные потоки ввода-вывода и io.Copy</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.5.php">Форматированный вывод</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.6.php">Вывод на консоль</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.7.php">Форматируемый ввод</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.8.php">Чтение с консоли</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/8.9.php">Буферизированный ввод-вывод</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 9. Сетевое программирование</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.1.php">Отправка запросов</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.2.php">Сервер. Обработка подключений</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.3.php">Взаимодействие клиента и сервера</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.4.php">Установка таймаута</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.5.php">Отправка запросов по HTTP</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/9.6.php">http.Client</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 10. Базы данных</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/go/tutorial/10.1.php">Работа с реляционными база данных</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/10.2.php">MySQL</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/10.3.php">PostgreSQL</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/10.4.php">SQLite</a></span></li>
		<li><span class="file"><a href="//metanit.com/go/tutorial/10.5.php">MongoDB</a></span></li>
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
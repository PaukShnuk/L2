<!DOCTYPE html>
<html >
<head>
<title>Dart | Generics</title>
<meta charset="utf-8" />
<meta name="description" content="Generics или обобщения в языке программирования Dart, обобщенные универсальные классы и методы, ограничения generics">
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
<h2>Generics</h2><div class="date">Последнее обновление: 23.01.2021</div>

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

<p>Generics или обобщения позволяют добавить программе гибкости и уйти от жесткой привязки к определенным типам. 
Иногда возникает необходимость, определить функционал таким образом, чтобы он мог использовать данные любых типов.</p>
<p>Например, мы определяем класс пользователя, который содержит id (идентификатор пользователя):</p>
<pre class="brush:dart;">
class Person{
	int id;	// идентификатор пользователя
	String name; // имя пользователя
	Person(this.id, this.name);
}
</pre>
<p>В данном случае id задан как числовое значение, то есть оно может быт равно 2, 5, 7 и так далее. Но возможно, нам захочется впоследствии использовать в качестве типа id строки или какие-то другие классы. Для 
добавления гибкости мы могли бы использовать оператор dynamic, чтобы избежать жесткой привязки к типу:</p>
<pre class="brush:dart;">
class Person{
	dynamic id;	// идентификатор пользователя
	String name; // имя пользователя
	Person(this.id, this.name);
}
void main (){
	
	Person tom = Person(134, "Tom");
	print(tom.id);
	Person bob = Person("324", "Bob");
	print(bob.id);
}
</pre>
<p>Однако мы можем не знать, какой именно объект представляет поле id, особенно если класс Person определен во внешней библиотеке, которая написана сторонними разработчиками. 
И при попытке получить число в данном случае мы столкнемся с исключением:</p>
<pre class="brush:dart;">
Person bob = Person("324", "Bob");
int id = bob.id;	// Ошибка
</pre>
<p>Можно предусмотреть два типа Person для работы с разными типами:</p>
<pre class="brush:dart;">
class PersonInt{
	int id;
	String name;
	PersonInt(this.id, this.name);
}
class PersonString{
	string id;
	String name;
	PersonString(this.id, this.name);
}
</pre>
<p>Но в данном случае мы сталкиваемся с другой проблемой - дублированием кода.</p>
<p>Generics или обобщения позволяют обеспечить большую безопасность типов и помогают избежать дублирования кода. Перепишем код класса Person с 
использованием generics:</p>
<pre class="brush:dart;">
void main (){
	
	Person bob = Person("324", "Bob");
	print(bob.id.runtimeType);	// String
	Person sam = Person(123, "Sam");
	print(sam.id.runtimeType);	// int
}

class Person&lt;T&gt;{
	T id;	// идентификатор пользователя
	String name; // имя пользователя
	Person(this.id, this.name);
}
</pre>
<p>С помощью выражения <code>&lt;T&gt;</code> мы указываем, что класс Person типизирован определенным типом T.  T еще называется универсальным параметром. 
Причем название параметра может быть произвольным, но обычно используются заглавные буквы, часто буква T. После мы можем использовать T как обычный тип, например, определять переменные этого типа: <code>T id;</code>.</p>
<p>При выполнении программы вместо Т будет подставляться конкретный тип. Причем тип будет вычислять динамически на основе переданных значений. С помощью поля <span class="b">runtimeType</span> 
мы можем получить конкретный тип данных переменной. Мы также могли бы явным образом обозначить, какие типы будут использоваться в объектах:</p>
<pre class="brush:dart;">
Person&lt;String&gt; bob = Person&lt;String&gt;("324", "Bob");
print(bob.id.runtimeType);
Person&lt;int&gt; sam = Person&lt;int&gt;(123, "Sam");
print(sam.id.runtimeType);
</pre>
<p>Тип, которым типизируется класс, указывается в угловых скобках после названия класса (<code>Person&lt;String&gt;</code>).</p>
<p>Подобным образом мы можем определять generic-методы и функции. Например, определим и используем небольшую функцию логгирования:</p>
<pre class="brush:dart;">
void main (){
	
	int x = 20;
	log(x);
	x = 34;
	log(x);
	String name = "Tom";
	log(name);
}
void log&lt;T&gt;(T a){
	
	// DateTime.now() - получает текущую дату и время
	print("${DateTime.now()} a=$a");
}
</pre>
<p>Для создания обобщенного метода после его имени указывается в угловых скобках название универсального параметра. После этого внутри этого универсальный тип T 
может использоваться внутри метода - в качестве типа параметров или переменных</p>
<h3>Ограничения обобщений</h3>
<p>Иногда необходимо использовать обобщения, однако принимать любой тип в функцию или класс вместо параметра T нежелательно. Например, у нас есть следующий класс Account, который представляет банковский счет::</p>
<pre class="brush:dart;">
class Account{

    int id; 	// номер счета
    int sum; 	// сумма на счете
    Account(this.id, this.sum);
}
</pre>
<p>Для перевода средств с одного счета на другой мы можем определить класс Transaction, который для выполнения всех операций будет использовать объекты класса Account.</p>
<p>Но у класса Account может быть много наследников: DepositAccount (депозитный счет), DemandAccount (счет до востребования) и т.д. И мы не можем знать, какие именно 
типы счетов будут использоваться в классе Transaction. Возможно, транзакции будут проводиться только между счетами до 
востребования. И в этом случае в качестве универсального параметра можно установить тип Account:</p>
<pre class="brush:dart;">
class Transaction&lt;T extends Account&gt;{

    T fromAccount;  // с какого счета перевод
    T toAccount;    // на какой счет перевод
    int sum;        // сумма перевода
	Transaction(this.fromAccount, this.toAccount, this.sum);
    void execute(){
	
        if (fromAccount.sum &gt; sum){
            fromAccount.sum -= sum;
            toAccount.sum += sum;
            print("Счет ${fromAccount.id}: ${fromAccount.sum}\$ \nСчет ${toAccount.id}: ${toAccount.sum}\$");
        }
        else
        {
            print("Недостаточно денег на счете ${fromAccount.id}");
        }
    }
}
</pre>
<p>С помощью выражения <code>&lt;T extends Account&gt;</code> указываем, что используемый тип T обязательно должен быть классом 
Account или его наследником. Благодаря подобному ограничению мы можем использовать внутри класса Transaction все объекты типа 
T именно как объекты Account и соответственно обращаться к их полям и методам.</p>
<p>Теперь применим класс Transaction:</p>
<pre class="brush:dart;">
void main (){
	
	Account acc1 = Account(1857, 4500); // sum = 4500;
    Account acc2 = Account(3453, 5000); // sum = 5000;
	Transaction transaction = Transaction&lt;Account&gt;(acc1, acc2, 1900);
	transaction.execute();
}
</pre>
<p>Консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Счет 1857: 2600$
Счет 3453: 6900$
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


<div class="nav"><p><a href="./4.7.php">Назад</a><a href="./">Содержание</a><a href="./4.9.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 4.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
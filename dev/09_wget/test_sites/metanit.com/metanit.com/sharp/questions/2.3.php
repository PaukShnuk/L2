<!DOCTYPE html>
<html >
<head>
<title>Вопросы по C# | Наследование</title>
<meta charset="utf-8" />
<meta name="description" content="Проверка знаний и вопросы по теме Наследование классов в C#">
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
<h2>Наследование</h2><div class="date">Последнее обновление: 11.03.2019</div>

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

<div class="question">
<div class="question-text">
<div class="question-header">Вопрос 1</div>
<p>Почему следующая программа не компилируется:</p>
<pre class="brush:c#;">
using System;

namespace HelloApp
{
    class Program
    {
        static void Main(string[] args)
        {
            Person tom = new Employee();
            Console.ReadKey();
        }
    }

    internal class Person
    {

    }
    public class Employee : Person
    {

    }
}
</pre>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-1" name="checkbox-accordion" />
<label for="checkbox-1">Ответ</label>
<div class="answer-content">
<p>Производный класс не может иметь больщий уровень доступа или быть более доступным, чем базовый класс. 
Здесь же базовый класс Person имеет модификатор internal, а производный класс Employee - модификатор public. Таким образом, 
класс Employee является более доступным чем Person.</p>
</div>
</div>
</div>

<div class="question">
<div class="question-text">
<div class="question-header">Вопрос 2</div>
<p>Даны следующие классы:</p>
<pre class="brush:c#;">
class Person
{
	string name;
	int age;

	public Person()
	{
	}
	public Person(string name) : this(name, 18)
	{
	}
	public Person(string name, int age)
	{
		this.name = name;
		this.age = age;
	}
}
class Employee : Person
{
	string company;

	public Employee()
	{
	}
	public Employee(string name, int age, string company): base(name, age)
	{
		this.company = company;
	}
	public Employee(string name, string company) : base(name)
	{
            this.company = company;
	}
}
</pre>
<p>Допустим, мы создаем объект класса Employee следующим образом:</p>
<pre class="brush:c#;">
Employee tom = new Employee("Tom", "Microsoft");
</pre>
<p>Какие конструкторы и в каком порядке в данном случае будет выполняться?</p>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-2" name="checkbox-accordion" />
<label for="checkbox-2">Ответ</label>
<div class="answer-content">
<p>Порядок выполнения конструкторов:</p>
<ol>
<li><p><code>System.Object.Object()</code></p></li>
<li><p><code>Person(string name, int age)</code></p></li>
<li><p><code>Person(string name)</code></p></li>
<li><p><code>Employee(string name, string company)</code></p></li>
</ol>
</div>
</div>
</div>

<div class="question">
<div class="question-text">
<div class="question-header">Вопрос 3</div>
<p>Как запретить наследование от класса?</p>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-3" name="checkbox-accordion" />
<label for="checkbox-3">Ответ</label>
<div class="answer-content">
<p>Указать при определении класса модификатор <span class="b">sealed</span></p>
</div>
</div>
</div>

<div class="question">
<div class="question-text">
<div class="question-header">Вопрос 4</div>
<p>Что выведет на консоль следующая программа и почему?</p>
<pre class="brush:c#;">
class Auto  // легковой автомобиль
{
	public int Seats { get; set; } // количество сидений
	public Auto(int seats)
	{
		Seats = seats;
	}
}
class Truck : Auto      // грузовой автомобиль
{
	public decimal Capacity { get; set; } // грузоподъемность
	public Truck(int seats, decimal capacity)
	{
		Seats = seats;
		Capacity = capacity;
	}
}
class Program
{ 
	static void Main(string[] args)
	{
		Truck truck = new Truck(2, 1.1m);
		Console.WriteLine($"Грузовик с грузоподъемностью {truck.Capacity} тонн");
		Console.ReadKey();
	}
}
</pre>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-4" name="checkbox-accordion" />
<label for="checkbox-4">Ответ</label>
<div class="answer-content">
<p>Программа не скомпилируется, потому что в базовом классе не определен конструктор без параметров, поэтому производный обязан вызвать один из конструкторов базового класса.</p>
</div>
</div>
</div>


<div class="question">
<div class="question-text">
<div class="question-header">Вопрос 5</div>
<p>Что выведет на консоль следующая программа и почему?</p>
<pre class="brush:c#;">
class Auto  // легковой автомобиль
{
	public int Seats { get; set; } // количество сидений
	public Auto()
	{
		Console.WriteLine("Auto has been created");
	}
	public Auto(int seats)
	{
		Seats = seats;
	}
}
class Truck : Auto      // грузовой автомобиль
{
	public decimal Capacity { get; set; } // грузоподъемность
	public Truck(decimal capacity)
	{
		Seats = 2;
		Capacity = capacity;
		Console.WriteLine("Truck has been created");
	}
}
class Program
{ 
	static void Main(string[] args)
	{
		Truck truck = new Truck(1.1m);
		Console.WriteLine($"Truck with capacity {truck.Capacity}");
		Console.ReadKey();
	}
}
</pre>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-5" name="checkbox-accordion" />
<label for="checkbox-5">Ответ</label>
<div class="answer-content">
<p>Консольный вывод программы:</p>
<div class="console">
<pre class="consoletext">
Auto has been created
Truck has been created
Truck with capacity 1,1
</pre>
<p>При создании объекта производного класса вначале вызываются конструкторы базового класса. Поскольку в данном случае консструктор Truck явным образом 
не вызывает ни одного конструктора, то неявно вызывается конструктор базового класса по умолчанию, который выводит строку "Auto has been created". Затем 
собственно выполняется конструктор произво класса, который выводит строку "Truck has been created".</p>
</div>
</div>
</div>
</div>

<div class="question">
<div class="question-text">
<div class="question-header">Вопрос 6</div>
<p>Что выведет на консоль следующая программа и почему?</p>
<pre class="brush:c#;">
class Person
{
	public string Name { get; set; } = "Ben";

	public Person(string name)
	{
		Name = "Tim";
	}
}

class Employee : Person
{
	public string Company { get; set; }

	public Employee(string name, string company)
		: base("Bob")
	{
		Company = company;
	}
}

class Program
{ 
	static void Main(string[] args)
	{
		Employee emp = new Employee("Tom", "Microsoft") { Name = "Sam" };

		Console.WriteLine(emp.Name); // Ben Tim Bob Tom Sam
		Console.ReadKey();
	}
}
</pre>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-6" name="checkbox-accordion" />
<label for="checkbox-6">Ответ</label>
<div class="answer-content">
<p>Программа выведет на консоль имя "Sam". Вне зависимости от того, в каком порядке и какие конструкторы вызываются, инициализатор производного класса будет выполняться 
в самую последнюю очередь. Поэтому финальное значение свойства Name будет равно "Sam".</p>
</div>
</div>
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

<div class="dop socialtop"><fieldset><legend>Дополнительные материалы</legend>
<ul>
<li><a title="Теоретический материал" href="../tutorial/3.7.php"><i class="fa fa-lg fa-file-text-o"></i><span class="dop-txt">Статья по теме</span></a></li>
</ul>
</fieldset></div>
<div class="nav"><p><a href="2.15.php">Назад</a><a href="./">Содержание</a><a href="2.5.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Основы C#</span>
		<ul>
			<li><span class="file"><a href="1.9.php">Переменные</a></span></li>
			<li><span class="file"><a href="1.10.php">Базовые типы данных</a></span></li>
			<li><span class="file"><a href="1.1.php">Операции</a></span></li>
			<li><span class="file"><a href="1.2.php">Преобразование базовых типов</a></span></li>
			<li><span class="file"><a href="1.3.php">Циклы</a></span></li>
			<li><span class="file"><a href="1.8.php">Массивы</a></span></li>
			<li><span class="file"><a href="1.4.php">Параметры</a></span></li>
			<li><span class="file"><a href="1.5.php">Массивы параметров и params</a></span></li>
			<li><span class="file"><a href="1.6.php">Область видимости переменных</a></span></li>
			<li><span class="file"><a href="1.7.php">Перечисления</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="2.1.php">Классы и объекты</a></span></li>
			<li><span class="file"><a href="2.16.php">Структуры</a></span></li>
			<li><span class="file"><a href="2.13.php">Модификаторы доступа</a></span></li>
			<li><span class="file"><a href="2.9.php">Свойства</a></span></li>
			<li><span class="file"><a href="2.2.php">Перегрузка методов</a></span></li>
			<li><span class="file"><a href="2.10.php">Статические члены класса</a></span></li>
			<li><span class="file"><a href="2.8.php">Константы и поля для чтения</a></span></li>
			<li><span class="file"><a href="2.15.php">Перегрузка операторов</a></span></li>
			<li><span class="file"><a href="2.3.php">Наследование</a></span></li>
			<li><span class="file"><a href="2.5.php">Преобразование типов</a></span></li>
			<li><span class="file"><a href="2.14.php">Перегрузка операций преобразования типов</a></span></li>
			<li><span class="file"><a href="2.11.php">Виртуальные методы и свойства</a></span></li>
			<li><span class="file"><a href="2.12.php">Абстрактные классы и члены классов</a></span></li>
			<li><span class="file"><a href="2.6.php">Обобщения</a></span></li>
			<li><span class="file"><a href="2.4.php">Интерфейсы</a></span></li>
			<li><span class="file"><a href="2.17.php">Делегаты</a></span></li>
			<li><span class="file"><a href="2.18.php">Ковариантность и контрвариантность делегатов</a></span></li>
			<li><span class="file"><a href="2.7.php">Пространства имен</a></span></li>
			<li><span class="file"><a href="2.19.php">Анонимные типы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Асинхронность</span>
		<ul>
			<li><span class="file"><a href="3.1.php">Асинхронные методы, async, await</a></span></li>
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
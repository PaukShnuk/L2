<!DOCTYPE html>
<html >
<head>
<title>C# и .NET | Классы и объекты</title>
<meta charset="utf-8" />
<meta name="description" content="Создание и использование классов и объектов в языке программирования C# и .NET, оператор new, конструкторы классов, ключевое слово this, инициализаторы объектов">
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
<h1>Классы, структуры и пространства имен</h1><h2>Классы и объекты</h2><div class="date">Последнее обновление: 27.12.2021</div>

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

<p>C# является полноценным объектно-ориентированным языком. Это значит, что программу на C# можно представить в виде взаимосвязанных 
взаимодействующих между собой объектов.</p>
<p>Описанием объекта является <span class="b">класс</span>, а объект представляет экземпляр этого класса. Можно еще провести следующую аналогию. 
У нас у всех есть некоторое представление о человеке, у которого есть имя, возраст, какие-то другие характеристики. 
То есть некоторый шаблон - этот шаблон можно назвать классом. Конкретное воплощение этого шаблона может отличаться, например, одни люди имеют одно имя, другие - другое имя. 
И реально существующий человек (фактически экземпляр данного класса) будет представлять объект этого класса.</p>
<p>В принципе ранее уже использовались классы. Например, тип <span class="b">string</span>, который представляет строку, фактически является классом. Или, например, класс <span class="b">Console</span>, 
у которого метод <code>WriteLine()</code> выводит на консоль некоторую информацию. Теперь же посмотрим, как мы можем определять свои собственные классы.</p>
<p>По сути класс представляет новый тип, который определяется пользователем. Класс определяется с помощью ключевого слова <span class="b">сlass</span>:</p>
<pre class="brush:c#;">
class название_класса
{
	// содержимое класса
}
</pre>
<p>После слова <span class="b">class</span> идет имя класса и далее в фигурных скобках идет собственно содержимое класса. 
Например, определим в файле <span class="b">Program.cs</span> класс Person, который будет представлять человека:</p>
<pre class="brush:c#;">
class Person
{
 
}
</pre>
<img src="./pics/3.25.png" alt="Классы и объекты в языке программирования C# и .NET" />
<p>Однако такой класс не особо показателен, поэтому добавим в него некоторую функциональность.</p>
<h3>Поля и методы класса</h3>
<p>Класс может хранить некоторые данные. Для хранения данных в классе применяются <span class="b">поля</span>. По сути <span class="b">поля класса</span> - 
это переменные, определенные на уровне класса.</p>
<p>Кроме того, класс может определять некоторое поведение или выполняемые действия. Для определения поведения в классе применяются методы.</p>
<p>Итак, добавим в класс Person поля и методы:</p>
<pre class="brush:c#;">
class Person 
{
    public string name = "Undefined";	// имя
    public int age;						// возраст

    public void Print()
    {
        Console.WriteLine($"Имя: {name}  Возраст: {age}");
    }
}
</pre>
<p>В данном случае в классе Person определено поле <code>name</code>, которое хранит имя, и поле <code>age</code>, которое хранит 
возраст человека. В отличие от переменных, определенных в методах, поля класса могут иметь модификаторы, которые указываются перед полем. 
Так, в данном случае, чтобы все поля были доступны вне класса Person поля определены с модификатором <span class="b">public</span>.</p>
<p>При определении полей мы можем  присвоить им некоторые значения, как в примере выше в случае переменной <code>name</code>. 
Если поля класса не инициализированы, то они получают значения по умолчанию. Для переменных числовых типов это число 0.</p>
<p>Также в классе Person определен метод <code>Print()</code>. Методы класса имеют доступ к его поля, и в данном случае обращаемся к полям класса name и age для вывода их значения на консоль. 
И чтобы этот метод был виден вне класса, он также определен с модификатором <span class="b">public</span>.</p>
<h3>Создание объекта класса</h3>
<p>После определения класса мы можем создавать его объекты. Для создания объекта применяются <span class="b">конструкторы</span>. По 
сути конструкторы представляют специальные методы, которые называются так же как и класс, и которые вызываются при создании нового 
объекта класса и выполняют инициализацию объекта. Общий синтаксис вызова конструктора:</p>
<pre class="brush:c#;">new конструктор_класса(параметры_конструктора);</pre>
<p>Сначала идет оператор <span class="b">new</span>, который выделяет память для объекта, а после 
него идет вызов <span class="b">конструктора</span>.</p>
<h4>Конструктор по умолчанию</h4>
<p>Если в классе не определено ни одного конструктора (как в случае с нашим классом Person), то для этого класса автоматически 
создается пустой конструктор по умолчанию, который не принимает никаких параметров.</p>
<p>Теперь создадим объект класса Person:</p>
<pre class="brush:c#;">
Person tom = new Person();  // создание объекта класса Person

// определение класса Person
class Person 
{
    public string name = "Undefined";
    public int age;

    public void Print()
    {
        Console.WriteLine($"Имя: {name}  Возраст: {age}");
    }
}
</pre>
<img src="./pics/3.26.png" alt="создание классов в языке программирования C# и .NET" />
<p>Для создания объекта Person используется выражение <code>new Person()</code>. В итоге после выполнения данного выражения в памяти 
будет выделен участок, где будут храниться все данные объекта Person. А переменная <code>tom</code> получит ссылку на созданный объект, 
и через эту переменную мы можем использовать данный объект и обращаться к его функциональности.</p>

<h3>Обращение к функциональности класса</h3>
<p>Для обращения к функциональности класса - полям, методам (а также другим элементам класса) применяется точечная нотация точки - после объекта класса ставится точка, а затем элемент класса:</p>
<pre class="brush:c#;">
объект.поле_класса
объект.метод_класса(параметры_метода)
</pre>
<p>Например, обратимся к полям и методам объекта Person:</p>
<pre class="brush:c#;">
Person tom = new Person();  // создание объекта класса Person

// Получаем значение полей в переменные
string personName = tom.name;
int personAge = tom.age;
Console.WriteLine($"Имя: {personName}  Возраст {personAge}");   // Имя: Undefined  Возраст: 0

// устанавливаем новые значения полей
tom.name = "Tom";
tom.age = 37;

// обращаемся к методу Print
tom.Print();    // Имя: Tom  Возраст: 37

class Person 
{
    public string name = "Undefined";
    public int age;

    public void Print()
    {
        Console.WriteLine($"Имя: {name}  Возраст: {age}");
    }
}
</pre>
<p>Консольный вывод данной программы:</p>
<div class="console">
<pre class="consoletext">
Имя: Undefined	Возраст: 0
Имя: Tom	Возраст: 37
</pre>
</div>
<h3>Константы классы</h3>
<p>Кроме полей класс может определять для хранения данных константы. В отличие от полей из значение устанавливается один раз непосредственно при их 
объявлении и впоследствии не может быть изменено. Кроме того, константы хранят некоторые данные, которые относятся не к одному объекту, а ко всему классу в целом. И для обращения к константам применяется 
не имя объекта, а имя класса:</p>
<pre class="brush:c#;">
Person tom = new Person();
tom.name = "Tom";
tom.age = 37;
tom.Print();    // Person: Tom - 37

Console.WriteLine(Person.type); // Person
// Person.type = "User"; 	// !Ошибка: изменить константу нельзя

class Person
{
    public const string type = "Person";
    public string name = "Undefined";
    public int age;
    public void Print() =&gt; Console.WriteLine($"{type}: {name} - {age}");
}
</pre>
<p>Здесь в классе Person определена константа <code>type</code>, которая хранит название класса:</p>
<pre class="brush:c#;">public const string type = "Person";</pre>
<p>Название класса не зависит от объекта. Мы можем создать много объектов Person, но название класса от этого не должно измениться - оно относится ко всем объектам Person и не 
должно меняться. Поэтому название типа можно сохранить в виде константы.</p>
<p>Стоит отметить, что константе сразу при ее определении необходимо присвоить значение.</p>
<p>Подобно обычным полям мы можем обращаться к константам класса внутри этого класса. Например, в методе Print значение константы выводится на консоль.</p>
<p>Однако если мы хотим обратиться к константе вне ее класса, то для обращения необходимо использовались имя класса:</p>
<pre class="brush:c#;">Console.WriteLine(Person.type); // Person</pre>
<p>Таким образом, если необходимо хранить данные, которые относятся ко всему классу в целом, то можно использовать константы.</p>
<h3>Добавление класса в Visual Studio</h3>
<p>Обычно классы помещаются в отдельные файлы. Нередко для одного класса предназначен один файл. И Visual Studio предоставляет по умолчанию встроенные шаблоны для добвления класса.</p>
<p>Для добавления класса нажмем в Visual Studio правой кнопкой мыши на название проекта:</p>
<img src="./pics/3.39.png" alt="Добавление класса в Visual Studio в C#" />
<p>В появившемся контекстном меню выберем пункт <span class="b">Add -&gt; New Item...</span> (или <span class="b">Add -&gt; Class...</span>)</p>
<p>В открывшемся окне добавления нового элемента убедимся, что в центральной части с шаблонами элементов у нас выбран пункт <span class="b">Class</span>. 
А внизу окна в поле <span class="b">Name</span> введем название добавляемого класса - пусть он будет назваться <span class="b">Person</span>:</p>
<img src="./pics/3.40.png" alt="Добавление нового класса в Visual Studio в C#" />
<p>В качестве названия класса можно вводить как Person, так и Person.cs. И после нажатия на кнопку добавления в проект будет добавлен новый класс:</p>
<img src="./pics/3.41.png" alt="Добавление класса в проект в Visual Studio в C#" />
<p>В файле <span class="b">Person.cs</span> определим следующий код:</p>
<pre class="brush:c#;">
class Person
{
    public string name = "Undefined";
    public void Print()
    {
        Console.WriteLine($"Person {name}");
    }
}
</pre>
<p>Здесь определен класс Person с одним полем name и методом Print.</p>
<p>В файле <span class="b">Program.cs</span>, который представляет основной файл программы используем класс Person:</p>
<pre class="brush:c#;">
Person tom = new Person();
tom.name = "Tom";
tom.Print();    // Person Tom
</pre>
<img src="./pics/3.42.png" alt="Использование классов в проекте в Visual Studio в языке программирования C#" />
<p>Таким образом, мы можем определять классы в отдельных файлах и использовать их в программе.</p>

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
<li><a title="Вопросы для самопроверки" href="../questions/2.1.php"><i class="fa fa-lg fa-question"></i><span class="dop-txt">Вопросы для самопроверки</span></a></li>
</ul>
</fieldset></div>
<div class="nav"><p><a href="./2.12.php">Назад</a><a href="./">Содержание</a><a href="./3.35.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в C#</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.1.php">Язык C# и платформа .NET</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.2.php">Начало работы с Visual Studio. Первая программа</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.3.php">Компиляция в командной строке</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.6.php">Первая программа на MacOS</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы программирования на C#</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.5.php">Структура программы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.25.php">Переменные и константы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.26.php">Литералы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.1.php">Типы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.15.php">Консольный ввод-вывод</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.3.php">Арифметические операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.22.php">Поразрядные операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.23.php">Операции присваивания</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.2.php">Преобразования базовых типов данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.24.php">Условные выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.5.php">Конструкция if..else и тернарная операция</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.6.php">Циклы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.4.php">Массивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.7.php">Задачи с массивами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.8.php">Методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.9.php">Параметры методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.34.php">Возвращение значения и оператор return</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.27.php">Передача параметров по ссылке и значению. Выходные параметры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.10.php">Массив параметров и ключевое слово params</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.11.php">Рекурсивные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.20.php">Локальные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.45.php">Конструкция switch</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.12.php">Перечисления enum</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Классы, структуры и пространства имен</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.1.php">Классы и объекты</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.35.php">Конструкторы, инициализаторы и деконструкторы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/1.4.php">Класс Program и метод Main. Программы верхнего уровня</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.13.php">Структуры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.16.php">Типы значений и ссылочные типы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.18.php">Область видимости (контекст) переменных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.25.php">Пространства имен</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.52.php">Глобальные пространства имен</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.53.php">Подключение пространств имен по умолчанию</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.46.php">Создание библиотеки классов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.2.php">Модификаторы доступа</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.4.php">Свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.5.php">Перегрузка методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.6.php">Статические члены и модификатор static</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.3.php">Поля и структуры для чтения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.50.php">Null и ссылочные типы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.17.php">Null и значимые типы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.26.php">Проверка на null, операторы ?. и ??</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.1.php">Псевдонимы типов и статический импорт</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Объектно-ориентированное программирование</span>
		<ul>		
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.7.php">Наследование</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.11.php">Преобразование типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.19.php">Виртуальные методы и свойства</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.41.php">Скрытие методов и свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.42.php">Различие переопределения и скрытия методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.8.php">Абстрактные классы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.10.php">Класс System.Object и его методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.12.php">Обобщенные типы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.38.php">Ограничения обобщений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.39.php">Наследование обобщенных типов</a></span></li>
			</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Обработка исключений</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.14.php">Конструкция try..catch..finally</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.28.php">Блок catch и фильтры исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.29.php">Типы исключений. Класс Exception</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.31.php">Генерация исключения и оператор throw</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.17.php">Создание классов исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.30.php">Поиск блока catch при обработке исключений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Делегаты, события и лямбды</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.13.php">Делегаты</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.43.php">Применение делегатов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.15.php">Анонимные методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.16.php">Лямбды</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.14.php">События</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.28.php">Ковариантность и контравариантность делегатов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.33.php">Делегаты Action, Predicate и Func</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.54.php">Замыкания</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Интерфейсы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.9.php">Определение интерфейсов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.49.php">Применение интерфейсов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.44.php">Явная реализация интерфейсов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.47.php">Реализация интерфейсов в базовых и производных классах</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.48.php">Наследование интерфейсов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.40.php">Интерфейсы в обобщениях</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.22.php">Копирование объектов. Интерфейс ICloneable</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.23.php">Сортировка объектов. Интерфейс IComparable</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.27.php">Ковариантность и контравариантность обобщенных интерфейсов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Дополнительные возможности ООП в C#</span>
		<ul><li><span class="file"><a href="//metanit.com/sharp/tutorial/3.36.php">Определение операторов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.37.php">Перегрузка операций преобразования типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.10.php">Индексаторы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.21.php">Переменные-ссылки и возвращение ссылки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.18.php">Методы расширения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.21.php">Частичные классы и методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.20.php">Анонимные типы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.19.php">Кортежи</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.51.php">Records</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Pattern matching</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.34.php">Паттерн типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.55.php">Паттерн свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.56.php">Паттерны кортежей</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.57.php">Позиционный паттерн</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.58.php">Реляционный и логический паттерны</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/3.59.php">Паттерны списков</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Коллекции</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.5.php">Список List&lt;T&gt;</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.6.php">Двухсвязный список LinkedList&lt;T&gt;</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.7.php">Очередь Queue&lt;T&gt;</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.8.php">Стек Stack&lt;T&gt;</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.9.php">Словарь Dictionary&lt;T, V&gt;</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.13.php">Класс ObservableCollection</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.11.php">Интерфейсы IEnumerable и IEnumerator</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/4.12.php">Итераторы и оператор yield</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 11. Работа со строками</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/7.1.php">Строки и класс System.String</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/7.2.php">Операции со строками</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/7.5.php">Форматирование и интерполяция строк</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/7.3.php">Класс StringBuilder</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/7.4.php">Регулярные выражения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 12. Работа с датами и временем</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/19.1.php">Структура DateTime</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/19.2.php">Форматирование дат и времени</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/19.3.php">DateOnly и TimeOnly</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 13. Дополнительные классы и структуры .NET</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/20.1.php">Отложенная инициализация и тип Lazy</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/20.2.php">Математические вычисления и класс Math</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/20.4.php">Преобразование типов и класс Convert</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/20.5.php">Класс Array и массивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.33.php">Span</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/2.32.php">Индексы и диапазоны</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 14. Многопоточность</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.1.php">Введение в многопоточность. Класс Thread</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.2.php">Создание потоков. Делегат ThreadStart</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.3.php">Потоки с параметрами и ParameterizedThreadStart</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.4.php">Синхронизация потоков</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.5.php">Мониторы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.6.php">Класс AutoResetEvent</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.7.php">Мьютексы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/11.8.php">Семафоры</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 15. Параллельное программирование и библиотека TPL</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/12.1.php">Задачи и класс Task</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/12.2.php">Работа с классом Task</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/12.3.php">Задачи продолжения</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/12.4.php">Класс Parallel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/12.5.php">Отмена задач и параллельных операций. CancellationToken</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 16. Aсинхронное программирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.3.php">Асинхронные методы, async и await</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.7.php">Возвращение результата из асинхронного метода</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.5.php">Последовательное и параллельное выполнение. Task.WhenAll и Task.WhenAny</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.4.php">Обработка ошибок в асинхронных методах</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.8.php">Асинхронные стримы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 17. LINQ</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.1.php">Основы LINQ</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/13.6.php">Проекция данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.2.php">Фильтрация коллекции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.3.php">Сортировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.4.php">Объединение, пересечение и разность коллекций</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.5.php">Агрегатные операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.11.php">Получение части коллекции</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.6.php">Группировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.7.php">Соединение коллекций</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.10.php">Проверка наличия и получение элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.8.php">Отложенное и немедленное выполнение LINQ</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/15.9.php">Делегаты в запросах LINQ</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 18. Parallel LINQ</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/17.1.php">Введение в Parallel LINQ. Метод AsParallel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/17.2.php">Метод AsOrdered</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/17.3.php">Обработка ошибок и отмена параллельных операции</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 19. Рефлексия</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.1.php">Введение в рефлексию. Класс System.Type</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.2.php">Применение рефлексии и исследование типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.5.php">Исследование методов и конструкторов с помощью рефлексии</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.6.php">Исследование полей и свойств с помощью рефлексии</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.3.php">Динамическая загрузка сборок и позднее связывание</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/14.4.php">Атрибуты в .NET</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 20. Dynamic Language Runtime</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/9.1.php">DLR в C#. Ключевое слово dynamic</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/9.2.php">DynamicObject и ExpandoObject</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/9.3.php">Использование IronPython в .NET</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 21. Сборка мусора, управление памятью и указатели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/8.1.php">Сборщик мусора в C#</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/8.2.php">Финализируемые объекты. Метод Dispose</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/8.5.php">Конструкция using</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/8.3.php">Указатели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/8.4.php">Указатели на структуры, члены классов и массивы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 22. Работа с файловой системой</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.1.php">Работа с дисками</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.2.php">Работа с каталогами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.3.php">Работа с файлами. Классы File и FileInfo</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.4.php">FileStream. Чтение и запись файла</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.5.php">Чтение и запись текстовых файлов. StreamReader и StreamWriter</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.6.php">Бинарные файлы. BinaryWriter и BinaryReader</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/5.7.php">Архивация и сжатие файлов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 23. Работа с JSON</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/6.5.php">Сериализация в JSON. JsonSerializer</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 24. Работа с XML</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.1.php">XML-Документы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.2.php">Работа с XML с помощью System.Xml</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.3.php">Изменение XML-документа</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.4.php">XPath</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.5.php">Linq to Xml. Создание Xml-документа</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.6.php">Выборка элементов в LINQ to XML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/16.7.php">Изменение документа в LINQ to XML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/6.4.php">Сериализация в XML. XmlSerializer</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 25. Процессы и домены приложения</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/18.1.php">Процессы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/18.2.php">Домены приложений</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/18.3.php">AssemblyLoadContext и динамическая загрузка и выгрузка сборок</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 26. Валидация модели</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/22.1.php">Основы валидации модели</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/22.2.php">Атрибуты валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/22.3.php">Создание своих атрибутов валидации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/22.4.php">Самовалидация модели</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 27. Что нового</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/tutorial/23.1.php">Нововведения в C# 11</a></span></li>
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
	
	$("li:contains('Глава 3.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 3.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
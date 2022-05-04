<!DOCTYPE html>
<html >
<head>
<title>Java | Лямбда-выражения</title>
<meta charset="utf-8" />
<meta name="description" content="Лямбда-выражения в языке программирования Java, функциональные интерфейсы, внешние переменные и лямбды,">
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
<h1>Лямбда-выражения</h1><h2>Введение в лямбда-выражения</h2><div class="date">Последнее обновление: 25.04.2018</div>

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

<img src="https://metanit.com/metanit-java.jpg" id="jma" style="cursor:pointer;" />
</div>

<p>Среди новшеств, которые были привнесены в язык Java с выходом JDK 8, особняком стоят лямбда-выражения. Лямбда представляет набор инструкций, 
которые можно выделить в отдельную переменную и затем многократно вызвать в различных местах программы.</p>
<p>Основу лямбда-выражения составляет <span class="b">лямбда-оператор</span>, который представляет стрелку <span class="b">-&gt;</span>. 
Этот оператор разделяет лямбда-выражение на две части: левая часть содержит список параметров выражения, а правая собственно представляет тело лямбда-выражения, 
где выполняются все действия.</p>
<p>Лямбда-выражение не выполняется само по себе, а образует реализацию метода, определенного в <span class="b">функциональном интерфейсе</span>. При этом важно, 
что функциональный интерфейс должен содержать только один единственный метод без реализации.</p>
<p>Рассмотрим пример:</p>
<pre class="brush:java;">
public class LambdaApp {

    public static void main(String[] args) {
        
        Operationable operation;
        operation = (x,y)-&gt;x+y;
        
        int result = operation.calculate(10, 20);
        System.out.println(result); //30
    }   
}
interface Operationable{
    int calculate(int x, int y);
}
</pre>
<p>В роли функционального интерфейса выступает интерфейс <code>Operationable</code>, в котором определен один метод без реализации - метод 
<code>calculate</code>. Данный метод принимает два параметра - целых числа, и возвращает некоторое целое число.</p>
<p>По факту лямбда-выражения являются в некотором роде сокращенной формой внутренних анонимных классов, которые ранее применялись в Java. В частности, 
предыдущий пример мы можем переписать следующим образом:</p>
<pre class="brush:java;">
public class LambdaApp {

    public static void main(String[] args) {
        
        Operationable op = new Operationable(){
        
            public int calculate(int x, int y){
            
				return x + y;
            }
        };
         int z = op.calculate(20, 10);
         System.out.println(z); // 30
    }   
}
interface Operationable{
    int calculate(int x, int y);
}
</pre>
<p>Чтобы объявить и использовать лямбда-выражение, основная программа разбивается на ряд этапов:</p>
<ol>
<li><p>Определение ссылки на функциональный интерфейс:</p>
<pre class="brush:java;">Operationable operation;</pre></li>
<li><p>Создание лямбда-выражения:</p>
<pre class="brush:java;">operation = (x,y)-&gt;x+y;</pre>
<p>Причем параметры лямбда-выражения соответствуют параметрам единственного метода интерфейса Operationable, а результат соответствует возвращаемому результату 
метода интерфейса. При этом нам не надо использовать ключевое слово <code>return</code> для возврата результата из лямбда-выражения.</p>
<p>Так, в методе интерфейса оба параметра представляют тип <code>int</code>, значит, в теле лямбда-выражения мы можем применить к ним сложение. Результат сложения также представляет 
тип <code>int</code>, объект которого возвращается методом интерфейса.</p>
</li>
<li><p>Использование лямбда-выражения в виде вызова метода интерфейса:</p>
<pre class="brush:java;">int result = operation.calculate(10, 20);</pre>
<p>Так как в лямбда-выражении определена операция сложения параметров, результатом метода будет сумма чисел 10 и 20.</p></li>
</ol>
<p>При этом для одного функционального интерфейса мы можем определить множество лямбда-выражений. Например:</p>
<pre class="brush:java;">
Operationable operation1 = (int x, int y)-&gt; x + y;
Operationable operation2 = (int x, int y)-&gt; x - y;
Operationable operation3 = (int x, int y)-&gt; x * y;
        
System.out.println(operation1.calculate(20, 10)); //30
System.out.println(operation2.calculate(20, 10)); //10
System.out.println(operation3.calculate(20, 10)); //200
</pre>
<h3>Отложенное выполнение</h3>
<p>Одним из ключевых моментов в использовании лямбд является отложенное выполнение (deferred execution). То есть мы определяем в одном месте программы 
лямбда-выражение и затем можем его вызывать при необходимости неопределенное количество раз в различных частях программы. Отложенное выполнение может потребоваться, к примеру, в следующих случаях:</p>
<ul>
<li><p>Выполнение кода отдельном потоке</p></li>
<li><p>Выполнение одного и того же кода несколько раз</p></li>
<li><p>Выполнение кода в результате какого-то события</p></li>
<li><p>Выполнение кода только в том случае, когда он действительно необходим и если он необходим</p></li>
</ul>
<h3>Передача параметров в лямбда-выражение</h3>
<p>Параметры лямбда-выражения должны соответствовать по типу параметрам метода из функционального интерфейса. При написании самого лямбда-выражения 
тип параметров писать необязательно, хотя в принципе это можно сделать, например:</p>
<pre class="brush:java;">operation = (int x, int y)-&gt;x+y;</pre>
<p>Если метод не принимает никаких параметров, то пишутся пустые скобки, например:</p>
<pre class="brush:java;">()-&gt; 30 + 20;</pre>
<p>Если метод принимает только один параметр, то скобки можно опустить:</p>
<pre class="brush:java;">n-&gt; n * n;</pre>
<h3>Терминальные лямбда-выражения</h3>
<p>Выше мы рассмотрели лямбда-выражения, которые возвращают определенное значение. Но также могут быть и терминальные лямбды, которые не возвращают никакого значения. Например:</p>
<pre class="brush:java;">
interface Printable{
    void print(String s);
}

public class LambdaApp {

    public static void main(String[] args) {
        
        Printable printer = s-&gt;System.out.println(s);
        printer.print("Hello Java!");
    } 
}
</pre>
<h3>Лямбды и локальные переменные</h3>
<p>Лямбда-выражение может использовать переменные, которые объявлены во вне в более общей области видимости - на уровне класса или метода, в котором 
лямбда-выражение определено. Однако в зависимости от того, как и где определены переменные, могут различаться способы их использования в лямбдах. 
Рассмотрим первый пример - использования переменных уровня класса:</p>
<pre class="brush:java;">
public class LambdaApp {

    static int x = 10;
    static int y = 20;
    public static void main(String[] args) {
        
        Operation op = ()-&gt;{ 
            
            x=30;
            return x+y;
        };
        System.out.println(op.calculate()); // 50
        System.out.println(x); // 30 - значение x изменилось
    }
}
interface Operation{
    int calculate();
}
</pre>
<p>Переменные x и y объявлены на уровне класса, и в лямбда-выражении мы их можем получить и даже изменить. Так, в данном случае после выполнения выражения 
изменяется значение переменной x.</p>
<p>Теперь рассмотрим другой пример - локальные переменные на уровне метода:</p>
<pre class="brush:java;">
public static void main(String[] args) {
        
    int n=70;
    int m=30;
    Operation op = ()-&gt;{ 
            
        //n=100; - так нельзя сделать
        return m+n;
    };
	// n=100;  - так тоже нельзя
    System.out.println(op.calculate()); // 100
} 
</pre>
<p>Локальные переменные уровня метода мы также можем использовать в лямбдах, но изменять их значение нельзя. Если мы попробуем это сделать, 
то среда разработки (Netbeans) может нам высветить ошибку и то, что такую переменную надо пометить с помощью ключевого слова <span class="b">final</span>, 
то есть сделать константой: <code>final int n=70;</code>. Однако это необязательно.</p>
<p>Более того, мы не сможем изменить значение переменной, которая используется в лямбда-выражении, вне этого выражения. То есть даже если такая переменная не объявлена 
как константа, по сути она является константой.</p>
<h3>Блоки кода в лямбда-выражениях</h3>
<p>Существуют два типа лямбда-выражений: однострочное выражение и блок кода. Примеры однострочных выражений демонстрировались выше. 
Блочные выражения обрамляются фигурными скобками. В блочных лямбда-выражениях можно использовать внутренние вложенные блоки, циклы, конструкции if, switch, 
создавать переменные и т.д. Если блочное лямбда-выражение должно возвращать значение, то явным образом применяется оператор <code>return</code>:</p>
<pre class="brush:java;">
Operationable operation = (int x, int y)-&gt; {
        
    if(y==0)
        return 0;
    else
        return x/y;
};
        
System.out.println(operation.calculate(20, 10)); //2
System.out.println(operation.calculate(20, 0)); //0
</pre>
<h3>Обобщенный функциональный интерфейс</h3>
<p>Функциональный интерфейс может быть обобщенным, однако в лямбда-выражении использование обобщений не допускается. В этом случае нам надо типизировать 
объект интерфейса определенным типом, который потом будет применяться в лямбда-выражении. Например:</p>
<pre class="brush:java;">
public class LambdaApp {

    public static void main(String[] args) {
        
        Operationable&lt;Integer&gt; operation1 = (x, y)-&gt; x + y;
        Operationable&lt;String&gt; operation2 = (x, y) -&gt; x + y;
        
        System.out.println(operation1.calculate(20, 10)); //30
        System.out.println(operation2.calculate("20", "10")); //2010
    } 
}
interface Operationable&lt;T&gt;{
    T calculate(T x, T y);
}
</pre>
<p>Таким образом, при объявлении лямбда-выражения ему уже известно, какой тип параметры будут представлять и какой тип они будут возвращать.</p>
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


<div class="nav"><p><a href="7.4.php">Назад</a><a href="./">Содержание</a><a href="9.2.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Java</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/1.1.php">Язык программирования Java</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/1.2.php">Первая программа на Java</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/1.5.php">Первая программа в IntelliJ IDEA</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/1.3.php">Первая программа в NetBeans</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/1.4.php">Первая программа в Eclipse</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Основы программирования на Java</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.11.php">Структура программы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.1.php">Переменные и константы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.12.php">Типы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.9.php">Консольный ввод/вывод в Java</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.3.php">Арифметические операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.13.php">Поразрядные операции</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.14.php">Условные выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.15.php">Операции присваивания и приоритет операций</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.2.php">Преобразования базовых типов данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.5.php">Условные конструкции</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.6.php">Циклы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.4.php">Массивы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.7.php">Методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.16.php">Параметры методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.17.php">Оператор return. Результат метода</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.18.php">Перегрузка методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.8.php">Рекурсивные функции</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/2.10.php">Введение в обработку исключений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Классы. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.1.php">Классы и объекты</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.2.php">Пакеты</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.3.php">Модификаторы доступа и инкапсуляция</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.4.php">Статические члены и модификатор static</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.14.php">Объекты как параметры методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.12.php">Внутренние и вложенные классы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.5.php">Наследование</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.6.php">Абстрактные классы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.10.php">Иерархия наследования и преобразование типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.7.php">Интерфейсы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.16.php">Интерфейсы в механизме обратного вызова</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.8.php">Перечисления enum</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.9.php">Класс Object и его методы</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.11.php">Обобщения (Generics)</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.17.php">Ограничения обобщений</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.15.php">Наследование и обобщения</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.13.php">Ссылочные типы и клонирование объектов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/3.18.php">Records</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Обработка исключений</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/4.1.php">Оператор throws</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/4.2.php">Классы исключений</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/4.3.php">Создание своих классов исключений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Коллекции</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.1.php">Типы коллекций. Интерфейс Collection</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.2.php">Класс ArrayList и интерфейс List</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.7.php">Очереди и класс ArrayDeque</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.3.php">Класс LinkedList</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.4.php">Интерфейс Set и класс HashSet</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.5.php">SortedSet, NavigableSet, TreeSet</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.6.php">Интерфейсы Comparable и Comporator. Сортировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.8.php">Интерфейс Map и класс HashMap</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.9.php">Интерфейсы SortedMap и NavigableMap. Класс TreeMap</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/5.10.php">Итераторы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Потоки ввода-вывода. Работа с файлами</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.1.php">Потоки ввода-вывода</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.3.php">Чтение и запись файлов. FileInputStream и FileOutputStream</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.2.php">Закрытие потоков</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.4.php">Классы ByteArrayInputStream и ByteArrayOutputStream</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.5.php">Буферизованные потоки BufferedInputStream и BufferedOutputStream</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.6.php">Форматируемый вывод. PrintStream и PrintWriter</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.7.php">Классы DataOutputStream и DataInputStream</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.8.php">Чтение и запись текстовых файлов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.9.php">Буферизация символьных потоков. BufferedReader и BufferedWriter</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.10.php">Сериализация объектов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.11.php">Класс File. Работа с файлами и каталогами</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.12.php">Работа с ZIP-архивами</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/6.13.php">Класс Console</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Работа со строками</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/7.1.php">Введение в строки. Класс String</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/7.2.php">Основные операции со строками</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/7.3.php">StringBuffer и StringBuilder</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/7.4.php">Регулярные выражения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 8. Лямбда-выражения</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/9.1.php">Введение в лямбда-выражения</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/9.2.php">Лямбды как параметры и результаты методов</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/9.3.php">Встроенные функциональные интерфейсы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 9. Многопоточное программирование</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.1.php">Класс Thread</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.2.php">Создание и выполнение потоков</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.4.php">Завершение и прерывание потока</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.3.php">Синхронизация потоков. Оператор synchronized</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.5.php">Взаимодействие потоков. Методы wait и notify</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.6.php">Семафоры</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.7.php">Обмен между потоками. Класс Exchanger</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.8.php">Класс Phaser</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.9.php">Блокировки. ReentrantLock</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/8.10.php">Условия в блокировках</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Stream API</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.1.php">Введение в Stream API</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.2.php">Создание потока данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.3.php">Фильтрация, перебор элементов и отображение</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.8.php">Сортировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.13.php">Получение подпотока и объединение потоков</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.4.php">Методы skip и limit</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.11.php">Операции сведения</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.5.php">Метод reduce</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.12.php">Тип Optional</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.6.php">Метод collect</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.7.php">Группировка</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.9.php">Параллельные потоки</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/10.10.php">Параллельные операции над массивами</a></span></li>
		</ul>
	</li><li class="closed"><span class="folder">Глава 11. Модульность</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/11.1.php">Создание модуля</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/11.2.php">Зависимые модули</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/11.3.php">Взаимодействие между модулями</a></span></li>
		</ul>
	</li>
	</li><li class="closed"><span class="folder">Глава 12. Дополнительные классы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/tutorial/12.1.php">Математические вычисления и класс Math</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/12.2.php">Большие числа BigInteger и BigDecimal</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/tutorial/12.3.php">Работа с датами. LocalDate</a></span></li>
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
	
	$("li:contains('Глава 8.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 8.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
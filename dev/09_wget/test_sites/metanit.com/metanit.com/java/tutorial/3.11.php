<!DOCTYPE html>
<html >
<head>
<title>Java | Обобщения (Generics)</title>
<meta charset="utf-8" />
<meta name="description" content="Обобщения (Generics) в языке программирования Java, универсальный парамер T, обобщенные универсальные методы и конструкторы">
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
<h2>Обобщения (Generics)</h2><div class="date">Последнее обновление: 23.04.2018</div>

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

<p><span class="b">Обобщения</span> или generics (обобщенные типы и методы) позволяют нам уйти от жесткого определения используемых типов. 
Рассмотрим проблему, в которой они нам могут понадобиться.</p>
<p>Допустим, мы определяем класс для представления банковского счета. К примеру, он мог бы выглядеть следующим образом:</p>
<pre class="brush:java;">
class Account{
	
    private int id;
	private int sum;
	
	Account(int id, int sum){
		this.id = id;
		this.sum = sum;
	}
	
    public int getId() { return id; }
	public int getSum() { return sum; }
	public void setSum(int sum) { this.sum = sum; }
}
</pre>
<p>Класс Account имеет два поля: id - уникальный идентификатор счета и sum - сумма на счете.</p>
<p>В данном случае идентификатор задан как целочисленное значение, например, 1, 2, 3, 4 и так далее. Однако также 
нередко для идентификатора используются и строковые значения. И числовые, и строковые значения имеют свои плюсы и минусы. И на момент написания 
класса мы можем точно не знать, что лучше выбрать для хранения идентификатора - строки или числа. Либо, возможно, этот класс будет использоваться 
другими разработчиками, которые могут иметь свое мнение по данной проблеме. Например, в качестве типа id они захотят использовать какой-то свой класс.</p>
<p>И на первый взгляд мы можем решить данную проблему следующим образом: задать id как поле типа Object, который является универсальным и базовым суперклассом 
для всех остальных типов:</p>
<pre class="brush:java;">
public class Program{
     
	public static void main(String[] args) {
         
		Account acc1 = new Account(2334, 5000);	// id - число
		int acc1Id = (int)acc1.getId();
		System.out.println(acc1Id);
		
		Account acc2 = new Account("sid5523", 5000);	// id - строка
		System.out.println(acc2.getId());
	}
}
class Account{
	
    private Object id;
	private int sum;
	
	Account(Object id, int sum){
		this.id = id;
		this.sum = sum;
	}
	
    public Object getId() { return id; }
	public int getSum() { return sum; }
	public void setSum(int sum) { this.sum = sum; }
}
</pre>
<p>В данном случае все замечательно работает. Однако тогда мы сталкиваемся с проблемой <span class="b">безопасности типов</span>. 
Например, в следующем случае мы получим ошибку:</p>
<pre class="brush:java;">
Account acc1 = new Account("2345", 5000);
int acc1Id = (int)acc1.getId();	// java.lang.ClassCastException
System.out.println(acc1Id);
</pre>
<p>Проблема может показаться искуственной, так как в данном случае мы видим, что в конструктор передается строка, поэтому мы вряд ли будем пытаться преобразовывать ее 
к типу int. Однако в процессе разработки мы можем не знать, какой именно тип представляет значение в id, и при попытке получить число в данном 
случае мы столкнемся с исключением java.lang.ClassCastException.</p>
<p>Писать для каждого отдельного типа свою версию класса Account тоже не является хорошим решением, так как в этом случае мы вынуждены повторяться.</p>
<p>Эти проблемы были призваны устранить обобщения или generics. Обобщения позволяют не указывать конкретный тип, который будет использоваться. Поэтому 
определим класс Account как обобщенный:</p>
<pre class="brush:java;">
class Account&lt;T&gt;{
	
    private T id;
	private int sum;
	
	Account(T id, int sum){
		this.id = id;
		this.sum = sum;
	}
	
    public T getId() { return id; }
	public int getSum() { return sum; }
	public void setSum(int sum) { this.sum = sum; }
}
</pre>
<p>С помощью буквы <span class="b">T</span> в определении класса <code>class Account&lt;T&gt;</code> мы указываем, что данный тип 
<span class="b">T</span> будет использоваться этим классом. Параметр <span class="b">T</span> в угловых скобках называется 
<span class="b">универсальным параметром</span>, так как вместо него можно подставить любой тип. При этом пока мы не знаем, какой именно это будет 
тип: String, int или какой-то другой. Причем буква <code>T</code> выбрана условно, это может и любая другая буква или набор символов.</p>
<p>После объявления класса мы можем применить универсальный параметр <code>T</code>: так далее в классе объявляется переменная этого типа, 
которой затем присваивается значение в конструкторе.</p>
<p>Метод <code>getId()</code> возвращает значение переменной id, но так как данная переменная представляет тип T, то данный метод также возвращает объект типа T: <code>public T getId()</code>.</p>
<p>Используем данный класс:</p>
<pre class="brush:java;">
public class Program{
     
	public static void main(String[] args) {
         
		Account&lt;String&gt; acc1 = new Account&lt;String&gt;("2345", 5000);
		String acc1Id = acc1.getId();
		System.out.println(acc1Id);
		
		Account&lt;Integer&gt; acc2 = new Account&lt;Integer&gt;(2345, 5000);
		Integer acc2Id = acc2.getId();
		System.out.println(acc2Id);
	}
}
class Account&lt;T&gt;{
	
    private T id;
	private int sum;
	
	Account(T id, int sum){
		this.id = id;
		this.sum = sum;
	}
	
    public T getId() { return id; }
	public int getSum() { return sum; }
	public void setSum(int sum) { this.sum = sum; }
}
</pre>
<p>При определении переменной даннного класса и создании объекта после имени класса в угловых скобках нужно указать, какой именно тип будет использоваться 
вместо универсального параметра. При этом надо учитывать, что они работают только с объектами, но не работают с примитивными типами. 
То есть мы можем написать <code>Account&lt;Integer&gt;</code>, но не можем использовать тип int или double, например, <code>Account&lt;int&gt;</code>. 
Вместо примитивных типов надо использовать классы-обертки: Integer вместо int, Double вместо double и т.д.</p>
<p>Например, первый объект будет использовать тип String, то есть вместо T будет подставляться String:</p>
<pre class="brush:java;">Account&lt;String&gt; acc1 = new Account&lt;String&gt;("2345", 5000);</pre>
<p>В этом случае в качестве первого параметра в конструктор передается строка.</p>
<p>А второй объект использует тип int (Integer):</p>
<pre class="brush:java;">Account&lt;Integer&gt; acc2 = new Account&lt;Integer&gt;(2345, 5000);</pre>
<h3>Обобщенные интерфейсы</h3>
<p>Интерфейсы, как и классы, также могут быть обобщенными. Создадим обобщенный интерфейс Accountable и используем его в программе:</p>
<pre class="brush:java;">
public class Program{
     
	public static void main(String[] args) {
         
		Accountable&lt;String&gt; acc1 = new Account("1235rwr", 5000);
		Account acc2 = new Account("2373", 4300);
		System.out.println(acc1.getId());
		System.out.println(acc2.getId());
	}
}
interface Accountable&lt;T&gt;{
	T getId();
	int getSum();
	void setSum(int sum);
}
class Account implements Accountable&lt;String&gt;{
	
    private String id;
	private int sum;
	
	Account(String id, int sum){
		this.id = id;
		this.sum = sum;
	}
	
    public String getId() { return id; }
	public int getSum() { return sum; }
	public void setSum(int sum) { this.sum = sum; }
}
</pre>
<p>При реализации подобного интерфейса есть две стратегии. В данном случае реализована первая стратегия, когда при реализации для 
универсального параметра интерфейса задается конкретный тип, как например, в данном случае это тип String. Тогда класс, реализующий интерфейс, жестко привязан к этому типу.</p>
<p>Вторая стратегия представляет определение обобщенного класса, который также использует тот же универсальный параметр:</p>
<pre class="brush:java;">
public class Program{
     
	public static void main(String[] args) {
         
		Account&lt;String&gt; acc1 = new Account&lt;String&gt;("1235rwr", 5000);
		Account&lt;String&gt; acc2 = new Account&lt;String&gt;("2373", 4300);
		System.out.println(acc1.getId());
		System.out.println(acc2.getId());
	}
}
interface Accountable&lt;T&gt;{
	T getId();
	int getSum();
	void setSum(int sum);
}
class Account&lt;T&gt; implements Accountable&lt;T&gt;{
	
    private T id;
	private int sum;
	
	Account(T id, int sum){
		this.id = id;
		this.sum = sum;
	}
	
    public T getId() { return id; }
	public int getSum() { return sum; }
	public void setSum(int sum) { this.sum = sum; }
}
</pre>
<h3>Обобщенные методы</h3>
<p>Кроме обобщенных типов можно также создавать обобщенные методы, которые точно также будут использовать универсальные параметры. Например:</p>
<pre class="brush:java;">
public class Program{
     
	public static void main(String[] args) {
         
		Printer printer = new Printer();
		String[] people = {"Tom", "Alice", "Sam", "Kate", "Bob", "Helen"};
		Integer[] numbers = {23, 4, 5, 2, 13, 456, 4};
		printer.&lt;String&gt;print(people);
		printer.&lt;Integer&gt;print(numbers);
	}
}

class Printer{
	
	public &lt;T&gt; void print(T[] items){
		for(T item: items){
			System.out.println(item);
		}
	}
}
</pre>
<p>Особенностью обобщенного метода является использование универсального параметра в объявлении метода после всех модификаторов и перед 
типом возвращаемого значения.</p>
<pre class="brush:java;">public &lt;T&gt; void print(T[] items)</pre>
<p>Затем внутри метода все значения типа T будут представлять данный универсальный параметр.</p>
<p>При вызове подобного метода перед его именем в угловых скобках указывается, какой тип будет передаваться на место универсального параметра:</p>
<pre class="brush:java;">
printer.&lt;String&gt;print(people);
printer.&lt;Integer&gt;print(numbers);
</pre>
<h3>Использование нескольких универсальных параметров</h3>
<p>Мы можем также задать сразу несколько универсальных параметров:</p>
<pre class="brush:java;">
public class Program{
     
	public static void main(String[] args) {
         
		Account&lt;String, Double&gt; acc1 = new Account&lt;String, Double&gt;("354", 5000.87);
		String id = acc1.getId();
		Double sum = acc1.getSum();
		System.out.printf("Id: %s  Sum: %f \n", id, sum);
	}
}
class Account&lt;T, S&gt;{
	
    private T id;
	private S sum;
	
	Account(T id, S sum){
		this.id = id;
		this.sum = sum;
	}
	
    public T getId() { return id; }
	public S getSum() { return sum; }
	public void setSum(S sum) { this.sum = sum; }
}
</pre>
<p>В данном случае тип String будет передаваться на место параметра T, а тип Double - на место параметра S.</p>
<h3>Обобщенные конструкторы</h3>
<p>Конструкторы как и методы также могут быть обобщенными. В этом случае перед конструктором также указываются в угловых скобках универсальные 
параметры:</p>
<pre class="brush:java;">
public class Program{
     
	public static void main(String[] args) {
         
		Account acc1 = new Account("cid2373", 5000);
		Account acc2 = new Account(53757, 4000);
		System.out.println(acc1.getId());
		System.out.println(acc2.getId());
	}
}

class Account{
	
    private String id;
	private int sum;
	
	&lt;T&gt;Account(T id, int sum){
		this.id = id.toString();
		this.sum = sum;
	}
	
    public String getId() { return id; }
	public int getSum() { return sum; }
	public void setSum(int sum) { this.sum = sum; }
}
</pre>
<p>В данном случае конструктор принимает параметр id, который представляет тип T. В конструкторе его значение превращается в строку и сохраняется в локальную переменную.</p>
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


<div class="nav"><p><a href="3.9.php">Назад</a><a href="./">Содержание</a><a href="3.17.php">Вперед</a></p></div></div>
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
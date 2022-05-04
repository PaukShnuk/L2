<!DOCTYPE html>
<html >
<head>
<title>Java | Интерфейсы</title>
<meta charset="utf-8" />
<meta name="description" content="Использование интерфейсов в Java, их определение и реализация в классах, наследование интерфейсов, методы по умолчанию и константы в интерфейсах">
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
<h2>Интерфейсы</h2><div class="date">Последнее обновление: 21.04.2018</div>

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

<p>Механизм наследования очень удобен, но он имеет свои ограничения. В частности мы можем наследовать только от одного класса, в отличие, 
например, от языка С++, где имеется множественное наследование.</p>
<p>В языке Java подобную проблему частично позволяют решить интерфейсы. Интерфейсы определяют некоторый функционал, не имеющий конкретной реализации, 
который затем реализуют классы, применяющие эти интерфейсы. И один класс может применить множество интерфейсов.</p>
<p>Чтобы определить интерфейс, используется ключевое слово <span class="b">interface</span>. Например:</p>
<pre class="brush:java;">
interface Printable{

    void print();
}
</pre>
<p>Данный интерфейс называется Printable. Интерфейс может определять константы и методы, которые могут иметь, а могут и не иметь реализации. 
Методы без реализации похожи на абстрактные методы абстрактных классов. Так, в данном случае объявлен один метод, который не имеет реализации.</p>
<p>Все методы интерфейса не имеют модификаторов доступа, но фактически по умолчанию доступ <span class="b">public</span>, так как цель 
интерфейса - определение функционала для реализации его классом. Поэтому весь функционал должен быть открыт для реализации.</p>
<p>Чтобы класс применил интерфейс, надо использовать ключевое слово <span class="b">implements</span>:</p>
<pre class="brush:java;">
public class Program{
     
	public static void main(String[] args) {
			
		Book b1 = new Book("Java. Complete Referense.", "H. Shildt");
		b1.print();
	}
}
interface Printable{

    void print();
}
class Book implements Printable{
 
    String name;
    String author;
 
    Book(String name, String author){
         
        this.name = name;
        this.author = author;
    }
     
    public void print() {
     
        System.out.printf("%s (%s) \n", name, author);
    }
}
</pre>
<p>В данном случае класс Book реализует интерфейс Printable. При этом надо учитывать, что если класс применяет интерфейс, то он должен реализовать все методы интерфейса, как в случае выше реализован метод <code>print</code>. 
Потом в методе main мы можем создать объект класса Book и вызвать его метод print. Если класс не реализует какие-то методы интерфейса, то такой класс должен быть определен как абстрактный, 
а его неабстрактные классы-наследники затем должны будут реализовать эти методы.</p>
<p>В тоже время мы не можем напрямую создавать объекты интерфейсов, поэтому следующий код не будет работать:</p>
<pre class="brush:java;">
Printable pr = new Printable();
pr.print();
</pre>
<p>Одним из преимуществ использования интерфейсов является то, что они позволяют добавить в приложение гибкости. Например, в дополнение к классу Book 
определим еще один класс, который будет реализовывать интерфейс Printable:</p>
<pre class="brush:java;">
class Journal implements Printable {

    private String name;
 
    String getName(){
        return name;
    }
 
    Journal(String name){
         
        this.name = name;
    }
    public void print() {
        System.out.println(name);
    }  
}
</pre>
<p>Класс Book и класс Journal связаны тем, что они реализуют интерфейс Printable. Поэтому мы динамически в программе можем создавать объекты Printable 
как экземпляры обоих классов:</p>
<pre class="brush:java;">
public class Program{
     
	public static void main(String[] args) {
			
		Printable printable = new Book("Java. Complete Reference", "H. Shildt");
		printable.print();		//  Java. Complete Reference (H. Shildt)
		printable = new Journal("Foreign Policy");
		printable.print();		// Foreign Policy
	}
}
interface Printable{

    void print();
}
class Book implements Printable{
 
    String name;
    String author;
 
    Book(String name, String author){
         
        this.name = name;
        this.author = author;
    }
     
    public void print() {
     
        System.out.printf("%s (%s) \n", name, author);
    }
}
class Journal implements Printable {

    private String name;
 
    String getName(){
        return name;
    }
 
    Journal(String name){
         
        this.name = name;
    }
    public void print() {
        System.out.println(name);
    }  
}
</pre>
<h3>Интерфейсы в преобразованиях типов</h3>
<p>Все сказанное в отношении преобразования типов характерно и для интерфейсов. Например, так как класс Journal реализует интерфейс Printable, то переменная типа 
Printable может хранить ссылку на объект типа Journal:</p>
<pre class="brush:java;">
Printable p =new Journal("Foreign Affairs");
p.print();  
// Интерфейс не имеет метода getName, необходимо явное приведение
String name = ((Journal)p).getName();
System.out.println(name);
</pre>
<p>И если мы хотим обратиться к методам класса Journal, которые определены не в интерфейсе Printable, а в самом классе Journal, то нам надо 
явным образом выполнить преобразование типов: <code>((Journal)p).getName();</code></p>
<h3>Методы по умолчанию</h3>
<p>Ранее до JDK 8 при реализации интерфейса мы должны были обязательно реализовать все его методы в классе. А сам интерфейс мог содержать только 
определения методов без конкретной реализации. В JDK 8 была добавлена такая функциональность как <span class="b">методы по умолчанию</span>. 
И теперь интерфейсы кроме определения методов могут иметь их реализацию по умолчанию, которая используется, если класс, реализующий данный 
интерфейс, не реализует метод. Например, создадим метод по умолчанию в интерфейсе Printable:</p>
<pre class="brush:java;">
interface Printable {
    
    default void print(){
        
		System.out.println("Undefined printable");
    }
}
</pre>
<p>Метод по умолчанию - это обычный метод без модификаторов, который помечается ключевым словом <span class="b">default</span>. Затем в классе 
Journal нам необязательно этот метод реализовать, хотя мы можем его и переопределить:</p>
<pre class="brush:java;">
class Journal implements Printable {

    private String name;
 
    String getName(){
        return name;
    }
    Journal(String name){
         
        this.name = name;
    }
}
</pre>
<h3>Статические методы</h3>
<p>Начиная с JDK 8 в интерфейсах доступны статические методы - они аналогичны методам класса:</p>
<pre class="brush:java;">
interface Printable {
    
    void print();
	
    static void read(){
        
        System.out.println("Read printable");
    }
}
</pre>
<p>Чтобы обратиться к статическому методу интерфейса также, как и в случае с классами, пишут название интерфейса и метод:</p>
<pre class="brush:java;">
public static void main(String[] args) {
        
    Printable.read();
}
</pre>
<h3>Приватные методы</h3>
<p>По умолчанию все методы в интерфейсе фактически имеют модификатор public. Однако начиная с Java 9 мы также можем определять в интерфейсе методы с 
модификатором <span class="b">private</span>. Они могут быть статическими и нестатическими, но они не могут иметь реализации по умолчанию.</p>
<p>Подобные методы могут использоваться только внутри самого интерфейса, в котором они определены. То есть к примеру нам надо выполнять в интерфейсе 
некоторые повторяющиеся действия, и в этом случае такие действия можно выделить в приватные методы:</p>
<pre class="brush:java;">
public class Program{
     
	public static void main(String[] args) {
         
		Calculatable c = new Calculation();
		System.out.println(c.sum(1, 2));
		System.out.println(c.sum(1, 2, 4));
	}
}
class Calculation implements Calculatable{
	
}
interface Calculatable{

	default int sum(int a, int b){
		return sumAll(a, b);
	}
	default int sum(int a, int b, int c){
		return sumAll(a, b, c);
	}
	
    private int sumAll(int... values){
         int result = 0;
		 for(int n : values){
			 result += n;
		 }
		 return result;
    }
}
</pre>
<h3>Константы в интерфейсах</h3>
<p>Кроме методов в интерфейсах могут быть определены статические константы:</p>
<pre class="brush:java;">
interface Stateable{

	int OPEN = 1;
	int CLOSED = 0;
	
	void printState(int n);
}
</pre>
<p>Хотя такие константы также не имеют модификаторов, но по умолчанию они имеют модификатор доступа <code>public static final</code>, 
и поэтому их значение доступно из любого места программы.</p>
<p>Применение констант:</p>
<pre class="brush:java;">
public class Program{
     
	public static void main(String[] args) {
         
		WaterPipe pipe = new WaterPipe();
		pipe.printState(1);
	}
}
class WaterPipe implements Stateable{
	
	public void printState(int n){
		if(n==OPEN)
			System.out.println("Water is opened");
		else if(n==CLOSED)
			System.out.println("Water is closed");
		else
			System.out.println("State is invalid");
	}
}
interface Stateable{

	int OPEN = 1;
	int CLOSED = 0;
	
	void printState(int n);
}
</pre>
<h3>Множественная реализация интерфейсов</h3>
<p>Если нам надо применить в классе несколько интерфейсов, то они все перечисляются через запятую после слова implements:</p>
<pre class="brush:java;">
interface Printable {
    
    // методы интерфейса
}

interface Searchable {
    
    // методы интерфейса
}

class Book implements Printable, Searchable{

    // реализация класса
}
</pre>
<h3>Наследование интерфейсов</h3>
<p>Интерфейсы, как и классы, могут наследоваться:</p>
<pre class="brush:java;">
interface BookPrintable extends Printable{
    
	void paint();
}
</pre>
<p>При применении этого интерфейса класс Book должен будет реализовать как методы интерфейса BookPrintable, так и методы базового интерфейса Printable.</p>
<h3>Вложенные интерфейсы</h3>
<p>Как и классы, интерфейсы могут быть вложенными, то есть могут быть определены в классах или других интерфейсах. Например:</p>
<pre class="brush:java;">
class Printer{
    interface Printable {
    
        void print();
    }
}
</pre>
<p>При применении такого интерфейса нам надо указывать его полное имя вместе с именем класса:</p>
<pre class="brush:java;">
public class Journal implements Printer.Printable {

    String name;
 
    Journal(String name){
         
        this.name = name;
    }
    public void print() {
        System.out.println(name);
    }  
}
</pre>
<p>Использование интерфейса будет аналогично предыдущим случаям:</p>
<pre class="brush:java;">
Printer.Printable p =new Journal("Foreign Affairs");
p.print();
</pre>
<h3>Интерфейсы как параметры и результаты методов</h3>
<p>И также как и в случае с классами, интерфейсы могут использоваться в качестве типа параметров метода или в качестве возвращаемого типа:</p>
<pre class="brush:java;">
public class Program{
     
	public static void main(String[] args) {
         
		Printable printable = createPrintable("Foreign Affairs",false);
		printable.print();
			 
		read(new Book("Java for impatients", "Cay Horstmann"));
		read(new Journal("Java Dayly News"));
	}
		 
	static void read(Printable p){
			 
		p.print();
	}
		 
	static Printable createPrintable(String name, boolean option){
			 
		if(option)
			return new Book(name, "Undefined");
		else
			return new Journal(name);
	}
}
interface Printable{

    void print();
}
class Book implements Printable{
 
    String name;
    String author;
 
    Book(String name, String author){
         
        this.name = name;
        this.author = author;
    }
     
    public void print() {
     
        System.out.printf("%s (%s) \n", name, author);
    }
}
class Journal implements Printable {

    private String name;
 
    String getName(){
        return name;
    }
 
    Journal(String name){
         
        this.name = name;
    }
    public void print() {
        System.out.println(name);
    }  
}
</pre>
<p>Метод <code>read()</code> в качестве параметра принимает объект интерфейса Printable, поэтому в этот метод мы можем передать как объект Book, так 
и объект Journal.</p>
<p>Метод <code>createPrintable()</code> возвращает объект Printable, поэтому также мы можем возвратить как объект Book, так и Journal.</p>
<p>Консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Foreign Affairs
Java for impatients (Cay Horstmann)
Java Dayly News
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


<div class="nav"><p><a href="3.10.php">Назад</a><a href="./">Содержание</a><a href="3.16.php">Вперед</a></p></div></div>
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
<!DOCTYPE html>
<html >
<head>
<title>Dart | Классы и объекты</title>
<meta charset="utf-8" />
<meta name="description" content="Объектно-ориентированное программирование, классы и объекты в языке программирования Dart, поля и методы классов, конструкторы и инициализаторы">
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
<h1>Объектно-ориентированное программирование</h1><h2>Классы и объекты</h2><div class="date">Последнее обновление: 23.01.2021</div>

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

<p>Dart является объектно-ориентированным языком, и каждое значение, которым мы манипулируем в программе на Dart, является объектом.</p>
<p><span class="b">Объект</span> представляет <span class="b">экземпляр</span> некоторого класса, а <span class="b">класс</span> является шаблоном или описанием объекта. Можно еще 
провести следующую аналогию. У нас у всех есть некоторое представление о человеке - наличие двух рук, двух ног, головы, туловища и т.д. 
Есть некоторый шаблон - этот шаблон можно назвать классом. Реально же существующий человек (фактически экземпляр данного класса) является 
объектом этого класса.</p>
<p>Класс определяется с помощью ключевого слова <span class="b">сlass</span>:</p>
<pre class="brush:dart;">
class Person{

}
</pre>
<p>Здесь определен класс Person. После названия класса идут фигурные скобки, между которыми помещается тело класса - то есть его поля и методы.</p>
<p>Любой объект может обладать двумя основными характеристиками: состояние - некоторые данные, которые хранит объект, и поведение - действия, которые может совершать объект.</p>
<p>Для хранения состояния объекта в классе применяются поля или переменные класса. Для определения поведения объекта в классе применяются 
методы. Например, класс Person, который представляет человека, мог бы иметь следующее определение:</p>
<pre class="brush:dart;">
class Person{
	
	String name = "undefined";		// имя
	int age = 0;					// возраст
	void display(){
		print("Name: $name Age: $age");
	}
}
</pre>
<p>В классе Person определены два поля: name представляет имя человека, а age - его возраст. И также определен метод display, который ничего не возвращает и просто выводит эти данные на консоль.</p>
<p>Стоит учитывать, что поскольку переменные name и age представляют типы String и int, которые не допускают значение <code>null</code>, то нам необходимо предоставить этим переменным начальные 
значения. Либо мы могли бы использовать nullable-типы, тогда предоставление начальных значений было бы необязательно:</p>
<pre class="brush:dart;">
class Person{
	
	String? name;		// имя
	int? age;			// возраст
	void display(){
		print("Name: $name Age: $age");
	}
}
</pre>
<p>Теперь используем данный класс. Для этого определим следующую программу:</p>
<pre class="brush:dart;">
void main (){
     
	Person tom;
} 
 
class Person{
	
	String name = "undefined";		// имя
	int age = 0;			// возраст
	void display(){
		print("Name: $name Age: $age");
	}
}
</pre>
<p>Класс представляет новый тип, поэтому мы можем определять переменные, которые представляют данный тип. Так, здесь в функции main определена переменная 
<code>tom</code>, которая представляет класс Person. Но пока эта переменная не указывает ни на какой объект и по умолчанию она имеет значение <span class="b">null</span>. 
По большому счету мы ее пока не можем использовать, поэтому вначале необходимо создать объект класса Person.</p>
<h3>Конструкторы</h3>
<p>Кроме обычных методов классы могут определять специальные методы, которые называются <span class="b">конструкторами</span>. Конструкторы вызываются 
при создании нового объекта данного класса. Конструкторы выполняют инициализацию объекта.</p>
<p>Если в классе не определено ни одного конструктора, то для этого класса автоматически создается конструктор без параметров.</p>
<p>Выше определенный класс Person не имеет никаких конструкторов. Поэтому для него автоматически создается конструктор по умолчанию, который мы можем 
использовать для создания объекта Person. В частности, создадим один объект:</p>
<pre class="brush:dart;">
void main (){
     
	Person tom = Person();
	tom.display();
	// изменяем имя и возраст
	tom.name = "Tom";
	tom.age = 35;
	tom.display();
} 
 
class Person{
	
	String name = "undefined";
	int age = 0;
	void display(){
		print("Name: $name Age: $age");
	}
}
</pre>
<p>Для создания объекта Person используется выражение <code>Person()</code>. Более старые версии Dart для вызова конструктора также использовали оператор 
<span class="b">new</span>: <code>Person tom = new Person();</code>. Но в последних версиях Dart оператор <code>new</code> можно не использовать.</p>
<p>Конструктор по умолчанию не принимает никаких параметров. В итоге после выполнения данного выражения в памяти 
будет выделен участок, где будут храниться все данные объекта Person. А переменная <code>tom</code> получит ссылку на созданный объект.</p>
<p>Если конструктор не инициализирует значения переменных объекта, то они получают значения по умолчанию, то есть значение <span class="b">null</span> (то есть фактически отсутствие значения).</p>
<p>После создания объекта мы можем обратиться к переменным и методам объекта Person через переменную tom. Для этого используется оператор точка (.) - то есть через точку указываем название поля или метода: <code>tom.name</code>. 
Например, можно установить или получить значения полей: <code>tom.name = "Tom"</code>.</p>
<p>В итоге мы увидим на консоли:</p>
<div class="console">
<pre class="consoletext">
Name: undefined		Age: 0
Name: Tom		Age: 35
</pre>
</div>
<p>Если необходимо, что при создании объекта производилась какая-то логика, например, чтобы поля класса получали какие-то определенные значения, то можно 
определить в классе свои конструкторы. Например:</p>
<pre class="brush:dart;">
void main (){
     
	Person sam = Person("Sam", 25);
	sam.display();
} 
 
class Person{
	
	String name = "undefined";
	int age = 0;
	Person(String n, int a)
    {
        name = n;
        age = a;
    }
    void display(){
        print("Name: $name Age: $age");
    }
}
</pre>
<p>Теперь в классе определен коструктор, который принимает два параметра и с их помощью устанавливает значения полей объекта.</p>
<p>Консольный вывод программы:</p>
<div class="console">
<pre class="consoletext">
Name: Sam  Age: 25
</pre>
</div>
<p>Следует учитывать, что если мы определяем в классе свои конструкторы, как в случае выше, то конструктор по умолчанию мы уже использовать не сможем.</p>
<h3>null и классы</h3>
<p>Как и все остальные встроенные типы, классы по умолчанию представляют тип, которые не допускает значение null. Если же нам необходимо, что объект класса 
мог хранить значение <code>null</code>, мы можем использовать nullable-класс, то есть добавить к определению типа оператор ?:</p>
<pre class="brush:dart;">
void main (){
     
	Person? sam;
	print(sam);  // null	- sam допускает значение null
	Person tom;
	// print(tom);	// ! Ошибка, tom не может принимать null
} 
</pre>
<p>В случае с вызовом <code>print(tom)</code>, как и в случае с переменными других типов, которые не могут принимать значение null, необходимо присвоить 
переменной начальное значение перед ее использованием.</p>
<p>В тоже время при использовании nullable-классов мы можем попасть в следующую ситуацию. Как писалось выше, для обращения к полям и методам объекта используется оператор точка (.), после которой указывается имя поля/метода. Однако, 
как мы знаем, если переменным nullable-классов не присвоено значение, то они по умолчанию имеют значение null. 
Это необходимо учитывать. Например, обратимся к полям объекта через переменную, которая не инициализирована:</p>
<pre class="brush:dart;">
void main (){
     
    Person? sam;
	sam.age = 23;// Ошибка, sam = null
} 
 
class Person{
 
    String name = "undefined";
	int age = 0;
	void display(){
        print("Name: $name Age: $age");
    }
}
</pre>
<p>При выполнении строки кода <code>sam.age = 23</code> программа выбросит исключение и завершит свое выполнение. Потому что 
мы не создали объект класса Person c помощью конструктора. Поэтому переменная sam имеет значение null, то есть фактически ничего, объекта нет. 
Соответственно обратиться к поля несуществующего объекта мы не можем. Чтобы избежать подобной проблемы для обращения к полям мы можем 
использовать другой оператор - <span class="b">?.</span>:</p>
<pre class="brush:dart;">
void main (){
     
    Person? sam;
	sam?.age =  19;
	sam?.display();
	if(sam == null){
		print("Переменная sam неопределена");
	}
} 
 
class Person{
 
    String name = "undefined";
	int age = 0;
	void display(){
        print("Name: $name Age: $age");
    }
}
</pre>
<p>Оператор <span class="b">?.</span> проверят значение переменной, если переменная не равна null, то происсходит обращение к ее полям и методам. Если же она равна null, то обращение к 
переменной игнорируется.</p>
<h3>Именованные конструкторы</h3>
<p>По умолчанию мы можем определить только один общий конструктор. Если же нам необходимо использовать в классе сразу несколько конструкторов, то в этом случае 
нужно применять <span class="b">именованные конструкторы</span> (named constructors). Например:</p>
<pre class="brush:dart;">
void main (){
	
    Person bob = Person.undefined();      // вызов первого конструктора без параметров
	bob.display();
         
	Person tom = Person.fromName("Tom"); // вызов второго конструктора с одним параметром
	tom.display();
         
	Person sam = Person("Sam", 25); // вызов третьего конструктора с двумя параметрами
	sam.display();
} 

class Person{

	String name = "";
	int age = 0;
	
	Person.undefined(){
        name = "undefined";
        age = 18;
    }
	Person.fromName(String n){
        name = n;
        age = 18;
    }
    Person(String n, int a)
    {
        name = n;
        age = a;
    }
    void display(){
        print("Name: $name Age: $age");
    }
}
</pre>
<p>В данном случае определено два дополнительных конструктора: Person.undefined без параметров и Person.fromName с одним параметров. При вызове подобных конструкторов 
необходимо указывать их полное имя: <code>Person tom = Person.fromName("Tom");</code></p>
<p>Консольный вывод программы:</p>
<div class="console">
<pre class="consoletext">
Name: undefined  Age: 18
Name: Tom  Age: 18
Name: Sam  Age: 25
</pre>
</div>
<h3>Ключевое слово this</h3>
<p>Ключевое слово <span class="b">this</span> представляет ссылку на текущий экземпляр класса. Через это ключевое слово мы можем обращаться к переменным, 
методам объекта, а также вызывать его конструкторы. Например:</p>
<pre class="brush:dart;">
class Person{

	String name = "";
	int age = 0;
	
    Person(String name, int age)
    {
        this.name = name;
        this.age = age;
    }
    void display(){
        print("Name: $name Age: $age");
    }
}
</pre>
<p>В конструкторе параметры называются так же, как и поля класса. И чтобы разграничить поля и параметры, применяется ключевое слово this:</p>
<pre class="brush:dart;">this.name = name;</pre>
<p>Так, в данном случае указываем, что значение параметра name присваивается полю name.</p>
<h3>Сокращенная версия констуктора</h3>
<p>Также используя ключевое слово this, мы можем сократить определение конструктора:</p>
<pre class="brush:dart;">
class Person{

	String name;
	int age;
	
    Person(this.name, this.age);
	
    void display(){
        print("Name: $name Age: $age");
    }
}
</pre>
<p>Когда будет происходить вызов конструктора:</p>
<pre class="brush:dart;">Person sam = Person("Sam", 25);</pre>
<p>То строка "Sam" будет передаваться this.name, а число 25 - this.age.</p>
<p>Стоит отметить, что при таком определении конструктора нам необязательно задавать для полей класса начальные значения.</p>
<h3>Вызов цепочки конструкторов</h3>
<p>В примере с именованными конструкторами выше применялось три конструктора, которые выполняют идентичные действия: устанавливают поля name и age. 
Чтобы избежать повторов, с помощью this можно вызвать один из конструкторов класса и передать для его параметров необходимые значения. В итоге мы сможем определить несколько конструкторов, которые принимают разное количество параметров и по цепочке вызывают друг друга:</p>
<pre class="brush:dart;">
void main (){
	
	Person bob = Person.undefined();      // вызов первого конструктора без параметров
	bob.display();
         
	Person tom = Person.fromName("Tom"); // вызов второго конструктора с одним параметром
	tom.display();
         
	Person sam = Person("Sam", 25); // вызов третьего конструктора с двумя параметрами
	sam.display();
} 

class Person{

	String name = "";
	int age = 0;
	Person.undefined(): this("undefined", 18);
	
	Person.fromName(String name): this(name, 18);
	
    Person(this.name, this.age);
	
    void display(){
        print("Name: $name Age: $age");
    }
}
</pre>
<p>В данном случае первый и второй конструктор вызывают третий, в котором собственно будут устанавливаться поля name и age.</p>
<h3>Инициализаторы</h3>
<p>Инициализаторы представляют способ инициализации полей класса:</p>
<pre class="brush:dart;">
void main (){
	
	Person tom = Person("Tom", 23);
	tom.display();
} 

class Person{
 
    String name = "";
	int age = 0;
     
    Person(userName, userAge) : name=userName, age = userAge 
	{
		print("Person ctor!");
	}
     
    void display(){
        print("Name: $name Age: $age");
    }
}
</pre>
<p>Список инициализации указывает после параметров конструктора через двоеточие до открывающей фигурной скобки:</p>
<pre class="brush:dart;">Person(userName, userAge) : name=userName, age = userAge {</pre>
<p>Обычно списки инициализации используют параметры конструктора для установки значений полей. При этом конструктор может выполнять какую-то другую работу.</p>
<p>При этом при инициализации полей можно задать какую-нибудь динамическую логику:</p>
<pre class="brush:dart;">
Person(userName, userAge) : name=userName, age = userAge + 10 {
	print("Person ctor!");
}
</pre>
<p>Стоит учитывать, что при использовании инициализаторов сначала выполняется инициализация полей в списках инициализации и только затем выполняется логика в конструкторе:</p>
<pre class="brush:dart;">
Person(userName, userAge) : name=userName, age = userAge + 10 {
	age = 8;
}
</pre>
<p>В данном случае значение поля age будет равно 8, так как конструктор перезапишет значение, установленое инициализатором.</p>
<h3>Каскадная нотация</h3>
<p>Каскадная нотация - операция <span class="b">..</span> позволяет выполнить последовательность операций над одним объектом:</p>
<pre class="brush:dart;">
void main (){
	
	Person tom = Person()
		..name = "Tom"
		..age = 36
		..display();	// Name: Tom  Age: 36
} 

class Person{
 
    String name = "";
	int age = 0;
     
    void display(){
        print("Name: $name Age: $age");
    }
}
</pre>
<p>В данном случае код в функции main будет аналогичен следующему:</p>
<pre class="brush:dart;">
void main (){
	
	Person tom = Person();
	tom.name = "Tom"
	tom.age = 36
	tom.display();	// Name: Tom  Age: 36
} 
</pre>
<p>Подобным образом можно обращаться к более сложным объектам:</p>
<pre class="brush:dart;">
void main (){
	
	Person tom = Person()
		..name = "Tom"
		..age = 36
		..company = (Company("Huawei")
			..country = "Китай"
			..payTaxes()
		)
		..display();
} 

class Person{
 
    String name = "";
	int age = 0;
	Company company = Company(""); 
     
    void display(){
        print("Имя: $name Возраст: $age");
		print("работает в ${company.title}");
    }
}
class Company{

	String title = "";
	String country = "";
	Company(String companyTitle){
		
		title = companyTitle;
	}
	payTaxes(){
		print("Компания $title платит налоги \n");
	}
}
</pre>
<p>Консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Компания Huawei платит налоги

Имя: Tom	Возраст: 36
работает в Huawei
</pre>
</div>
<p>Если нам не надо было бы вызывать конструктор, то можно было бы написать так:</p>
<pre class="brush:dart;">
void main (){
	
	Person tom = Person()
		..name = "Tom"
		..age = 36
		..company.title = "Huawei"
		..company.country = "Китай"
		..company.payTaxes()
		..display();
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


<div class="nav"><p><a href="./3.6.php">Назад</a><a href="./">Содержание</a><a href="./4.2.php">Вперед</a></p></div></div>
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
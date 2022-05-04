<!DOCTYPE html>
<html >
<head>
<title>Паттерны в C# и .NET | Принцип подстановки Лисков</title>
<meta charset="utf-8" />
<meta name="description" content="Принцип подстановки Лисков (Liskov Substitution Principle) в C# и .NET">
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
<h2>Принцип подстановки Лисков</h2><div class="date">Последнее обновление: 11.03.2016</div>

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

<p><span class="b">Принцип подстановки Лисков</span> (Liskov Substitution Principle) представляет собой некоторое руководство по созданию иерархий наследования. 
Изначальное определение данного принципа, которое было дано Барбарой Лисков в 1988 году, выглядело следующим образом:</p>
<pre>
Если для каждого объекта o1 типа S существует объект o2 типа T, такой, что для любой программы P, определенной в терминах T, поведение P не изменяется при замене o2 на o1, то S является подтипом T.
</pre>
<p>То есть иными словами класс S может считаться подклассом T, если замена объектов T на объекты S не приведет к изменению работы программы.</p>
<p>В общем случае данный принцип можно сформулировать так:</p>
<p><span class="b">Должна быть возможность вместо базового типа подставить любой его подтип</span>. </p>
<p>Фактически принцип подстановки Лисков помогает четче сформулировать иерархию классов, определить функционал для базовых и производных классов и избежать возможных проблем при применении 
полиморфизма.</p>
<p>Проблему, с который связан принцип Лисков, наглядно можно продемонстрировать на примере двух классов Прямоугольника и Квадрата. Пусть они будут выглядеть следующим образом:</p>
<pre class="brush:c#;">
class Rectangle
{
    public virtual int Width { get; set; }
    public virtual int Height { get; set; }
	
	public int GetArea()
    {
        return Width * Height;
    }
}

class Square : Rectangle
{
    public override int Width
    {
        get
        {
            return base.Width;
        }

        set
        {
            base.Width = value;
            base.Height = value;
        }
    }

    public override int Height
    {
        get
        {
            return base.Height;
        }

        set
        {
            base.Height = value;
            base.Width = value;
        }
    }
}
</pre>
<p>Как правило, квадрат представляют как частный случай прямоугольника - те же прямые углы, четыре стороны, только ширина обязательно равна высоте. 
Поэтому в классе Квадрат у одного свойства устанавливаются сразу и ширина, и высота:</p>
<pre class="brush:c#;">
set
{
    base.Height = value;
    base.Width = value;
}
</pre>
<p>На первый взгляд вроде все правильно, классы предельно простые, всего два свойства, и, казалось бы, сложно где-то ошибиться. Однако представим ситуацию, что в 
главной программе у нас следующий код:</p>
<pre class="brush:c#;">
class Program
{
    static void Main(string[] args)
    {
        Rectangle rect = new Square();
        TestRectangleArea(rect);

        Console.Read();
    }

    public static void TestRectangleArea(Rectangle rect)
    {
        rect.Height = 5;
        rect.Width = 10;
        if (rect.GetArea() != 50)
            throw new Exception("Некорректная площадь!");
    }
}
</pre>
<p>С точки зрения прямоугольника метод TestRectangleArea выглядит нормально, но не с точки зрения квадрата. Мы ожидаем, что переданный в метод TestRectangleArea 
объект будет вести себя как стандартный прямоугольник. Однако квадрат, будучи в иерархии наследования прямоугольником, все же ведет себя не как прямоугольник. 
В итоге программа вывалится в ошибку.</p>
<p>Иногда для выхода из подобных ситуаций прибегают к специальному хаку, который заключается в проверке объекта на соответствие типам:</p>
<pre class="brush:c#;">
public static void TestRectangleArea(Rectangle rect)
{
    if(rect is Square)
    {
        rect.Height = 5;
        if (rect.GetArea() != 25)
            throw new Exception("Неправильная площадь!");
    }
    else if(rect is Rectangle)
    {
        rect.Height = 5;
        rect.Width = 10;
        if (rect.GetArea() != 50)
            throw new Exception("Неправильная площадь!");
    }
}
</pre>
<p>Но такая проверка не отменяет того факта, что с архитектурой классов что-то не так. Более того такие решения только больше подчеркивают проблему несовершенства 
архитектуры. И проблема заключается в том, что производный класс Square не ведет себя как базовый 
класс Rectangle, и поэтому его не следует наследовать от данного базового класса. В этом и есть практический смысл принципа Лисков. 
Производный класс, который может делать меньше, чем базовый, обычно нельзя подставить вместо базового, и поэтому он нарушает принцип подстановки Лисков.</p>
<p>Существует несколько типов правил, которые должны быть соблюдены для выполнения принципа подстановки Лисков. Прежде всего это правила контракта.</p>
<p>Контракт представляет собой некоторый интерфейс базового класса, некоторые соглашения по его использованию, которым должен следовать класс-наследник. 
Контракт задает ряд ограничений или правил, и производный класс должен выполнять эти правила:</p>
<ul>
<li><p>Предусловия (Preconditions) не могут быть усилены в подклассе. Другими словами подклассы не должны создавать больше предусловий, чем это определено в базовом классе, для выполнения некоторого поведения</p>
<p>Предусловия представляют набор условий, необходимых для безошибочного выполнения метода. Например:</p>
<pre class="brush:c#;">
public virtual void SetCapital(int money)
{
    if (money &lt; 0)
        throw new Exception("Нельзя положить на счет меньше 0");
    this.Capital = money;
}
</pre>
<p>Здесь условное выражение служит предусловием - без его выполнения не будут выполняться остальные действия, а метод завершится с ошибкой.</p>
<p>Причем объектом предусловий могут быть только общедоступные свойства или поля класса или параметры метода, как в данном случае. Приватное поле не может быть 
объектом для предусловия, так как оно не может быть установлено из вызывающего кода. Например, в следующем случае условное выражение не является предусловием:</p>
<pre class="brush:c#;">
private bool isValid = false
public virtual void SetCapital(int money)
{
    if (isValid == false)
        throw new Exception("Валидация не пройдена");
    this.Capital = money;
}
</pre>
<p>Теперь, допустим, есть два класса: Account (общий счет) и MicroAccount (мини-счет с ограничениями). И второй класс переопределяет метод SetCapital:</p>
<pre class="brush:c#;">
class Account
{
    public int Capital { get; protected set; }
        
    public virtual void SetCapital(int money)
    {
        if (money &lt; 0)
            throw new Exception("Нельзя положить на счет меньше 0");
        this.Capital = money;
    }
}

class MicroAccount : Account
{
    public override void SetCapital(int money)
    {
        if (money &lt; 0)
            throw new Exception("Нельзя положить на счет меньше 0");

        if (money &gt; 100)
            throw new Exception("Нельзя положить на счет больше 100");

        this.Capital = money;
    }
}
</pre>
<p>В этом случае подкласс MicroAccount добавляет дополнительное предусловие, то есть усиливает его, что недопустимо. Поэтому в реальной задаче мы можем столкнуться с проблемой:</p>
<pre class="brush:c#;">
class Program
{
    static void Main(string[] args)
    {
        Account acc = new MicroAccount();
        InitializeAccount(acc);

        Console.Read();
    }

    public static void InitializeAccount(Account account)
    {
        account.SetCapital(200);
        Console.WriteLine(account.Capital);
    }
}
</pre>
<p>С точки зрения класса Account метод <code>InitializeAccount()</code> вполне является работоспособным. Однако при передаче в него объекта MicroAccount 
мы столкнемся с ошибкой. В итоге пинцип Лисков будет нарушен.</p>
</li>
<li><p>Постусловия (Postconditions) не могут быть ослаблены в подклассе. То есть подклассы должны выполнять все постусловия, которые определены в базовом 
классе.</p>
<p>Постусловия проверяют состояние возвращаемого объекта на выходе из функции. Например:</p>
<pre class="brush:c#;">
public static float GetMedium(float[] numbers)
{
    if (numbers.Length == 0)
        throw new Exception("длина массива равна нулю");

    float result = numbers.Sum() / numbers.Length;
    
	if(result &lt;0)
        throw new Exception("Результат меньше нуля");
    return result;
}
</pre>
<p>Второе условное выражение здесь является постусловием.</p>
<p>Рассмотрим пример нарушения принципа Лисков при ослаблении постусловия:</p>
<pre class="brush:c#;">
class Account
{
    public virtual decimal GetInterest(decimal sum,  int month, int rate)
    {
        // предусловие
        if (sum &lt; 0 || month &gt;12 || month &lt;1 || rate &lt;0)
            throw new Exception("Некорректные данные");

        decimal result = sum;
        for (int i = 0; i &lt; month; i++)
            result += result * rate  / 100;

        // постусловие
        if (sum &gt;= 1000)
            result += 100; // добавляем бонус

        return result;
    }
}

class MicroAccount : Account
{
    public override decimal GetInterest(decimal sum, int month, int rate)
    {
        if (sum &lt; 0 || month &gt; 12 || month &lt; 1 || rate &lt; 0)
            throw new Exception("Некорректные данные");

        decimal result = sum;
        for (int i = 0; i &lt; month; i++)
            result += result * rate /100;

        return result;
    }
}
</pre>
<p>В качестве постусловия в классе Account используется начисление бонусов в 100 единиц к финальной сумме, если начальная сумма от 1000 и более. 
В классе MicroAccount это условие не используется.</p>
<p>Теперь посмотрим, с какой проблемой мы можем столкнуться с данными классами:</p>
<pre class="brush:c#;">
class Program
{
	public static void CalculateInterest(Account account)
    {
        decimal sum = account.GetInterest(1000, 1, 10); // 1000 + 1000 * 10 / 100 + 100 (бонус)
        if(sum!=1200) // ожидаем 1200
        {
            throw new Exception("Неожиданная сумма при вычислениях");
        }
    }
	static void Main(string[] args)
	{
		Account acc = new MicroAccount();
		CalculateInterest(acc); // получаем 1100 без бонуса 100

		Console.Read();
    }
}   
</pre>
<p>Исходя из логики класса Account, в методе CalculateInterest мы ожидаем получить в качестве результата числа 1200. Однако логика класса MicroAccount показывает 
другой результат. В итоге мы приходим к нарушению принципа Лисков, хотя формально мы просто применили стандартные принципы ООП - полиморфизм и наследование.</p>
</li>
<li><p>Инварианты (Invariants) — все условия базового класса - также должны быть сохранены и в подклассе</p>
<p>Инварианты - это некоторые условия, которые остаются истинными на протяжении всей жизни объекта. Как правило, инварианты передают внутреннее состояние объекта. Например:</p>
<pre class="brush:c#;">
class User
{
    protected int age;
    public User(int age)
    {
        if(age&lt;0)
            throw new Exception("возраст меньше нуля");

        this.age = age;
    }

    public int Age
    {
        get { return age; }
        set 
		{
            if (value &lt; 0)
                throw new Exception("возраст меньше нуля");
            this.age = value;
        }
    }
}
</pre>
<p>Поле age выступает инвариантом. И поскольку его установка возможна только через конструктор или свойство, то в любом случае выполнение предусловия и в конструкторе, 
и в свойстве гарантирует, что возраст не будет меньше 0. И данное объектоятельство сохранит свою истинность на протяжении всей жизни объекта User.</p>
<p>Теперь рассмотрим, как здесь может быть нарушен принцип Лисков. Пусть у нас будут следующие два класса:</p>
<pre class="brush:c#;">
class Account
{
    protected int capital;
    public Account(int sum)
    {
        if(sum&lt;100)
            throw new Exception("Некорректная сумма");
        this.capital = sum;
    }

    public virtual int Capital
    {
        get { return capital; }
        set
        {
            if (value &lt; 100)
                throw new Exception("Некорректная сумма");
            capital = value;
        }
    }
}

class MicroAccount : Account
{
    public MicroAccount(int sum) : base(sum)
    {
    }

    public override int Capital
    {
        get { return capital; }
        set
        {
            capital = value;
        }
    }
}
</pre>
<p>С точки зрения класса Account поле не может быть меньше 100, и в обоих случаях, где идет присвоение - в конструкторе и свойстве это гарантируется. А вот производный 
класс MicroAccount, переопределяя свойство Capital, этого уже не гарантирует. Поэтому инвариант класса Account нарушается.</p>
</li>
</ul>
<p>Во всех трех вышеперечисленных случаях проблема решается в общем случае с помощью абстрагирования и выделения общего функционала, который уже наследуют классы 
Account и MicroAccount. То есть не один из них наследуется от другого, а оба они наследуются от одного общего класса.</p>
<p>Таким образом, принцип подстановки Лисков заставляет задуматься над правильностью построения иерархий классов и применения полиморфизма, позволяя уйти от ложных иерархий наследования и 
делая всю систему классом более стройной и непротиворечивой.</p>
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


<div class="nav"><p><a href="5.2.php">Назад</a><a href="./">Содержание</a><a href="5.4.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Основы паттернов проектирования</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/patterns/1.1.php">Введение в паттерны проектирования</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/patterns/1.2.php">Отношения между классами и объектами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/patterns/1.3.php">Интерфейсы или абстрактные классы</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Порождающие паттерны</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/patterns/2.1.php">Фабричный метод (Factory Method)</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/patterns/2.2.php">Абстрактная фабрика (Abstract Factory)</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/patterns/2.3.php">Одиночка (Singleton)</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/patterns/2.4.php">Прототип (Prototype)</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/patterns/2.5.php">Строитель (Builder)</a></span></li>
	</ul>
</li>
	<li class="closed"><span class="folder">Глава 3. Паттерны поведения</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/3.1.php">Стратегия (Strategy)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/3.2.php">Наблюдатель (Observer)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/3.3.php">Команда (Command)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/3.4.php">Шаблонный метод (Template Method)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/3.5.php">Итератор (Iterator)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/3.6.php">Состояние (State)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/3.7.php">Цепочка Обязанностей (Chain of responsibility)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/3.8.php">Интерпретатор (Interpreter)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/3.9.php">Посредник (Mediator)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/3.10.php">Хранитель (Memento)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/3.11.php">Посетитель (Visitor)</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Структурные паттерны</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/4.1.php">Декоратор (Decorator)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/4.2.php">Адаптер (Adapter)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/4.3.php">Фасад (Facade)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/4.4.php">Компоновщик (Composite)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/4.5.php">Заместитель (Прокси)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/4.6.php">Мост (Bridge)</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/4.7.php">Приспособленец (Flyweight)</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. Принципы SOLID</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/5.1.php">Принцип единственной обязанности</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/5.2.php">Принцип открытости/закрытости</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/5.3.php">Принцип подстановки Лисков</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/5.4.php">Принцип разделения интерфейсов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/5.5.php">Принцип инверсии зависимостей</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Дополнительные паттерны</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/6.1.php">Fluent Builder</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Дополнительные принципы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/patterns/7.1.php">Принцип Tell-Don't-Ask</a></span></li>
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
	
	$("li:contains('Глава 5.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 5.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
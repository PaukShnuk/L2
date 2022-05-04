<!DOCTYPE html>
<html >
<head>
<title>Одиночка (Singleton) | Паттерны в C# и .NET</title>
<meta charset="utf-8" />
<meta name="description" content="Паттерн Синглтон (Одиночка, Singleton) в .NET и языке программирования C#">
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
<h2>Одиночка</h2><div class="date">Последнее обновление: 23.12.2018</div>

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

<p>Одиночка (Singleton, Синглтон) - порождающий паттерн, который гарантирует, что для определенного класса будет создан только один объект, а 
также предоставит к этому объекту точку доступа.</p>
<p>Когда надо использовать Синглтон? Когда необходимо, чтобы для класса существовал только один экземпляр</p>
<p>Синглтон позволяет создать объект только при его необходимости. Если объект не нужен, то он не будет создан. В этом отличие синглтона от 
глобальных переменных.</p>
<p>Классическая реализация данного шаблона проектирования на C# выглядит следующим образом:</p>
<pre class="brush:c#;">
class Singleton
{
    private static Singleton instance;

    private Singleton()
    {}

    public static Singleton getInstance()
    {
        if (instance == null)
            instance = new Singleton();
        return instance;
    }
}
</pre>
<p>В классе определяется статическая переменная - ссылка на конкретный экземпляр данного объекта и приватный конструктор. В статическом методе 
<code>getInstance()</code> этот конструктор вызывается для создания объекта, если, конечно, объект отсутствует и равен null.</p>
<p>Для применения паттерна Одиночка создадим небольшую программу. Например, на каждом компьютере можно одномоментно запустить только одну операционную систему. 
В этом плане операционная система будет реализоваться через паттерн синглтон:</p>
<pre class="brush:c#;">
class Program
{
    static void Main(string[] args)
    {
        Computer comp = new Computer();
        comp.Launch("Windows 8.1");
        Console.WriteLine(comp.OS.Name);
		
        // у нас не получится изменить ОС, так как объект уже создан    
        comp.OS = OS.getInstance("Windows 10");
        Console.WriteLine(comp.OS.Name);
		
        Console.ReadLine();
    }
}
class Computer
{
    public OS OS { get; set; }
    public void Launch(string osName)
    {
        OS = OS.getInstance(osName);
    }
}
class OS
{
    private static OS instance;

    public string Name { get; private set; }

    protected OS(string name)
    {
        this.Name=name;
    }

    public static OS getInstance(string name)
    {
        if (instance == null)
            instance = new OS(name);
        return instance;
    }
}
</pre>
<h3>Синглтон и многопоточность</h3>
<p>При применении паттерна синглтон в многопоточным программах мы можем столкнуться с проблемой, которую можно описать следующим образом:</p>
<pre class="brush:c#;">
static void Main(string[] args)
{
	(new Thread(() =&gt;
	{
		Computer comp2 = new Computer();
		comp2.OS = OS.getInstance("Windows 10");
		Console.WriteLine(comp2.OS.Name);

	})).Start();

	Computer comp = new Computer();
	comp.Launch("Windows 8.1");
	Console.WriteLine(comp.OS.Name);
	Console.ReadLine();
}
</pre>
<p>Здесь запускается дополнительный поток, который получает доступ к синглтону. Параллельно выполняется тот код, который идет запуска потока и 
кторый также обращается к синглтону. Таким образом, и главный, и дополнительный поток пытаются инициализровать синглтон нужным значением - 
"Windows 10", либо "Windows 8.1". Какое значение сиглтон получит в итоге, пресказать в данном случае невозможно.</p>
<p>Вывод программы может быть такой:</p>
<div class="console">
<pre class="consoletext">
Windows 8.1
Windows 10
</pre>
</div>
<p>Или такой:</p>
<div class="console">
<pre class="consoletext">
Windows 8.1
Windows 8.1
</pre>
</div>
<p>В итоге мы сталкиваемся с проблемой инициализации синглтона, когда оба потока одновременно обращаются к коду:</p>
<pre class="brush:c#;">
if (instance == null)
    instance = new OS(name);
</pre>
<p>Чтобы решить эту проблему, перепишем класс синглтона следующим образом:</p>
<pre class="brush:c#;">
class OS
{
    private static OS instance;

    public string Name { get; private set; }
    private static object syncRoot = new Object();

    protected OS(string name)
    {
        this.Name = name;
    }

    public static OS getInstance(string name)
    {
        if (instance == null)
        {
            lock (syncRoot)
            {
                if (instance == null)
                    instance = new OS(name);
            }
        }
        return instance;
    }
}
</pre>
<p>Чтобы избежать одновременного доступа к коду из разных потоков критическая секция заключается в блок <span class="b">lock</span>.</p>
<h3>Другие реализации синглтона</h3>
<p>Выше были рассмотрены общие стандартные реализации: потоконебезопасная и потокобезопасная реализации паттерна. Но есть еще ряд дополнительных реализаций, которые можно рассмотреть.</p>
<h3>Потокобезопасная реализация без использования lock</h3>
<pre class="brush:c#;">
public class Singleton
{
    private static readonly Singleton instance = new Singleton();

    public string Date { get; private set; }

    private Singleton()
    {
        Date = System.DateTime.Now.TimeOfDay.ToString();
    }

    public static Singleton GetInstance()
    {
        return instance;
    }
}
</pre>
<p>Данная реализация также потокобезопасная, то есть мы можем использовать ее в потоках так:</p>
<pre class="brush:c#;">
(new Thread(() =&gt;
{
    Singleton singleton1 = Singleton.GetInstance();
    Console.WriteLine(singleton1.Date);
})).Start();

Singleton singleton2 = Singleton.GetInstance();
Console.WriteLine(singleton2.Date);
</pre>
<h3>Lazy-реализация</h3>
<p>Определение объекта синглтона в виде статического поля класса открывает нам дорогу к созданию Lazy-реализации паттерна Синглтон, то есть 
такой реализации, где данные будут инициализироваться только перед непосредственным использованием. Поскольку статические поля 
инициализируются перед первым доступом к статическому членам класса и перед вызовом статического конструктора (при его наличии). 
Однако здесь мы можем столкнуться с двумя трудностями.</p>
<p>Во-первых, класс синглтона может иметь множество статических переменных. Возможно, мы вообще не будем обращаться к объекту синглтона, а будем использовать 
какие-то другие статические переменные:</p>
<pre class="brush:c#;">
public class Singleton
{
	private static readonly Singleton instance = new Singleton();
	public static string text = "hello";
	public string Date { get; private set; }
        
	private Singleton()
	{
		Console.WriteLine($"Singleton ctor {DateTime.Now.TimeOfDay}");
		Date = System.DateTime.Now.TimeOfDay.ToString();
	}

	public static Singleton GetInstance()
	{
		Console.WriteLine($"GetInstance {DateTime.Now.TimeOfDay}");
		Thread.Sleep(500);
		return instance;
	}
}
class Program
{
	static void Main(string[] args)
	{
		Console.WriteLine($"Main {DateTime.Now.TimeOfDay}");
		Console.WriteLine(Singleton.text);
		Console.Read();
	}
}
</pre>
<p>В данном случае идет только обращение к переменной text, однако статическое поле instance также будет инициализировано. Например, консольный вывод 
в данном случае мог бы выглядеть следующим образом:</p>
<div class="console">
<pre class="consoletext">
Singleton ctor 16:05:54.1469982
Main 16:05:54.2920316
hello
</pre>
</div>
<p>В данном случае мы видим, что статическое поле instance инициализировано.</p>
<p>Для решения этой проблемы выделим отдельный внутренний класс в рамках класса синглтона:</p>
<pre class="brush:c#;">
public class Singleton
{
	public string Date { get; private set; }
	public static string text = "hello";
	private Singleton()
	{
		Console.WriteLine($"Singleton ctor {DateTime.Now.TimeOfDay}");
		Date = DateTime.Now.TimeOfDay.ToString();
	}

	public static Singleton GetInstance()
	{
		Console.WriteLine($"GetInstance {DateTime.Now.TimeOfDay}");
		return Nested.instance;
	}

	private class Nested
	{
		internal static readonly Singleton instance = new Singleton();
	}
}
class Program
{
	static void Main(string[] args)
	{
		Console.WriteLine($"Main {DateTime.Now.TimeOfDay}");
		Console.WriteLine(Singleton.text);
		Console.Read();
	}
}
</pre>
<p>Теперь статическая переменная, которая представляет объект синглтона, определена во вложенном классе Nested. Чтобы к этой переменной 
можно было обращаться из класса синглтона, она имеет модификатор internal, в то же время сам класс Nested имеет модификатор private, 
что позволяет гарантировать, что данный класс будет доступен только из класса Singleton.</p>
<p>Консольный вывод в данном случае мог бы выглядеть следующим образом:</p>
<div class="console">
<pre class="consoletext">
Main 16:11:40.1320873
hello
</pre>
</div>
<p>Далее мы сталкиваемся со второй проблемой: статические поля инициализируются перед первым доступом к статическому членам класса и перед вызовом статического конструктора (при его наличии). 
Но когда именно? Если класс содержит статические поля, не содержит статического конструктора, то время инициализации статических полей зависит от реализации платформы. 
Нередко это непосредственно перед первым использованием, но тем не менее момент точно не определен - это может быть происходить и чуть раньше. 
Однако если класс содержит статический конструктор, то статические поля будут инициализироваться непосредственно либо при создании первого экземпляра класса, либо при первом обращении к статическим членам класса.</p>
<p>Например, рассмотрим выполнение следующей программы:</p>
<pre class="brush:c#;">
static void Main(string[] args)
{
	Console.WriteLine($"Main {DateTime.Now.TimeOfDay}");
	Console.WriteLine(Singleton.text);

	Singleton singleton1 = Singleton.GetInstance();
	Console.WriteLine(singleton1.Date);
	Console.Read();
}
</pre>
<p>Ее возможный консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Main 16:33:33.1404818
hello
Singleton ctor 16:33:33.1564802
GetInstance 16:33:33.1574824
16:33:33.1564802
</pre>
</div>
<p>Мы видим, что код метода GetInstance, который идет до вызова конструктора класса Singleton, выполняется после выполнения этого конструктора. 
Поэтому добавим в выше определенный класс Nested статический конструктор:</p>
<pre class="brush:c#;">
public class Singleton
{
	public string Date { get; private set; }
	public static string text = "hello";
	private Singleton()
	{
		Console.WriteLine($"Singleton ctor {DateTime.Now.TimeOfDay}");
		Date = DateTime.Now.TimeOfDay.ToString();
	}

	public static Singleton GetInstance()
	{
		Console.WriteLine($"GetInstance {DateTime.Now.TimeOfDay}");
		Thread.Sleep(500);
		return Nested.instance;
	}

	private class Nested
	{
		static Nested() { }
        internal static readonly Singleton instance = new Singleton();
	}
}
</pre>
<p>Теперь при выполнении той же программы мы получим полноценную Lazy-реализацию:</p>
<div class="console">
<pre class="consoletext">
Main 16:37:18.4108064
hello
GetInstance 16:37:18.4208062
Singleton ctor 16:37:18.4218065
16:37:18.4228061
</pre>
</div>
<h3>Реализация через класс Lazy&lt;T&gt;</h3>
<p>Еще один способ создания синглтона представляет использование класса Lazy&lt;T&gt;:</p>
<pre class="brush:c#;">
public class Singleton
{
    private static readonly Lazy&lt;Singleton&gt; lazy = 
		new Lazy&lt;Singleton&gt;(() =&gt; new Singleton());

    public string Name { get; private set; }
        
    private Singleton()
    {
        Name = System.Guid.NewGuid().ToString();
    }
	
    public static Singleton GetInstance()
    {
        return lazy.Value;
    }
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


<div class="nav"><p><a href="2.2.php">Назад</a><a href="./">Содержание</a><a href="2.4.php">Вперед</a></p></div></div>
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
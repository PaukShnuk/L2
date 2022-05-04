<!DOCTYPE html>
<html >
<head>
<title>Приспособленец (Flyweight) | Паттерны в C# и .NET</title>
<meta charset="utf-8" />
<meta name="description" content="">
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
<h2>Приспособленец (Flyweight)</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Паттерн Приспособленец (Flyweight) - структурный шаблон проектирования, который позволяет использовать разделяемые объекты сразу в нескольких контекстах. Данный паттерн используется преимущественно для оптимизации работы с памятью.</p>
<p>В качестве стандартного применения данного паттерна можно привести следующий пример. Текст состоит из отдельных символов. Каждый символ 
может встречаться на одной странице текста много раз. Однако в компьютерной программе было бы слишком накладно выделять память для 
каждого отдельного символа в тексте. Гораздо проще было бы определить полный набор символов, например, в виде таблицы из 128 знаков (алфавитно-цифровые символы 
в разных регистрах, знаки препинания и т.д.). А в тексте применить этот набор общих разделяемых символов, вместо сотен и тысяч объектов, которые могли бы 
использоваться в тексте. И как следствие подобного подхода будет уменьшение количества используемых объектов и уменьшение используемой памяти.</p>
<p>Паттерн Приспособленец следует применять при соблюдении всех следующих условий:</p>
<ul>
<li><p>Когда приложение использует большое количество однообразных объектов, из-за чего происходит выделение большого количества памяти</p></li>
<li><p>Когда часть состояния объекта, которое является изменяемым, можно вынести во вне. Вынесение внешнего состояния 
позволяет заменить множество объектов небольшой группой общих разделяемых объектов.</p></li>
</ul>
<p>Ключевым моментом здесь является разделение состояния на внутренне и внешнее. Внутреннее состояние не зависит от 
контекста. В примере с символами внутреннее состояние описывается кодом символа из таблицы кодировки. Так как внутреннее состояние 
не зависит от контекста, то оно может быть разделяемым и поэтому выносится в разделяемые объекты.</p>
<p>Внешнее состояние зависит от контекста, является изменчивым. В применении к символам внешнее состояние может представлять положение 
символа на странице. То есть код символа может быть использован многими символами, тогда как положение на странице будет 
для каждого символа индивидуально.</p> 
<p>При создании приспособленца внешнее состояние выносится. В приспособленце остается только внутреннее состояние. То есть в примере с символами 
приспособленец будет хранить код символа.</p>
<p>Отношения в данном паттерне можно описать следующей схемой:</p>
<img src="pics/flyweight.png" alt="Паттерн Приспособленец (Flyweight) в C# и .NET" />
<p>Формальное определение паттерна на C#:</p>
<pre class="brush:c#;">
class FlyweightFactory
{
    Hashtable flyweights = new Hashtable();
    public FlyweightFactory()
    {
        flyweights.Add("X", new ConcreteFlyweight());
        flyweights.Add("Y", new ConcreteFlyweight());
        flyweights.Add("Z", new ConcreteFlyweight());
    }
    public Flyweight GetFlyweight(string key)
    {
        if (!flyweights.ContainsKey(key))
            flyweights.Add(key, new ConcreteFlyweight());
        return flyweights[key] as Flyweight;
    }
}

abstract class Flyweight
{
    public abstract void Operation(int extrinsicState);
}

class ConcreteFlyweight : Flyweight
{
    int intrinsicState;
    public override void Operation(int extrinsicState)
    {
    }
}

class UnsharedConcreteFlyweight : Flyweight
{
    int allState;
    public override void Operation(int extrinsicState)
    {
        allState = extrinsicState;
    }
}

class Client
{
    void Main()
    {
        int extrinsicstate = 22;

        FlyweightFactory f = new FlyweightFactory();

        Flyweight fx = f.GetFlyweight("X");
        fx.Operation(--extrinsicstate);

        Flyweight fy = f.GetFlyweight("Y");
        fy.Operation(--extrinsicstate);

        Flyweight fd = f.GetFlyweight("D");
        fd.Operation(--extrinsicstate);

        UnsharedConcreteFlyweight uf = new UnsharedConcreteFlyweight();

        uf.Operation(--extrinsicstate);
    }
}
</pre>
<h3>Участники</h3>
<ul>
<li><p><span class="bb">Flyweight</span>: определяет интерфейс, через который приспособленцы-разделяемые объекты могут получать 
внешнее состояние или воздействовать на него</p></li>
<li><p><span class="bb">ConcreteFlyweight</span>: конкретный класс разделяемого приспособленца. Реализует интерфейс, объявленный в типе 
Flyweight, и при необходимости добавляет внутреннее состояние. Причем любое сохраняемое им состояние должно быть внутренним, 
не зависящим от контекста</p></li>
<li><p><span class="bb">UnsharedConcreteFlyweight</span>: еще одна конкретная реализация интерфейса, определенного в типе 
Flyweight, только теперь объекты этого класса являются неразделяемыми</p></li>
<li><p><span class="bb">FlyweightFactory</span>: фабрика приспособленцев - создает объекты разделяемых приспособленцев. Так как 
приспособленцы разделяются, то клиент не должен создавать их напрямую. Все созданные 
объекты хранятся в пуле. В примере выше для определения пула используется объект Hashtable, но это не обязательно. Можно применять и другие 
классы коллекций. Однако в зависимости от сложности структуры, хранящей разделяемые объекты, особенно если у нас большое количество 
приспособленцев, то может увеличиваться время на поиск нужного приспособленца - наверное это один из немногих недостатков данного паттерна.</p>
<p>Если запрошенного приспособленца не оказалось в пуле, то фабрика создает его.</p></li>
<li><p><span class="bb">Client</span>: использует объекты приспособленцев. Может хранить внешнее состояние и передавать его в качестве аргументов 
в методы приспособленцев</p></li>
</ul>
<p>Рассмотрим пример. Допустим, мы проектируем программу для моделирования города. Город состоит из отдельных домов, поэтому нам надо создать объекты этих домов. 
Однако домов в городе может быть множество: сотни, тысячи. Они могут иметь разный вид, отличаться по различным признакам. Однако, как правило, многие дома 
делаются по стандартным проектам. И фактически мы можем выделить несколько типов домов, например, пятиэтажные кирпичные хрущевки, 
многоэтажные панельные высотки и так далее.</p>
<p>Используя некоторый анализ, мы можем выделить внутренне состояния домов и внешнее. К внутреннему состоянию, например, может относиться 
количество этажей, материал (кирпичи, панели и т.д.), или те показатели, которые определены его шаблоном, планом проектирования. К внешнему состоянию может относиться положение дома на географической 
карте, то есть его координаты, цвет дома, и так далее, то есть такие показатели, которые для каждого отдельного дома могут быть относительно 
индивидуальны.</p>
<p>В этом случае реализация строительства домов на C# с применением паттерна Flyweight могла бы выглядеть следующим образом:</p>
<pre class="brush:c#;">
class Program
{
    static void Main(string[] args)
    {
        double longitude = 37.61;
        double latitude = 55.74;

        HouseFactory houseFactory = new HouseFactory();
        for (int i = 0; i &lt; 5;i++)
        {
            House panelHouse = houseFactory.GetHouse("Panel");
            if (panelHouse != null)
                panelHouse.Build(longitude, latitude);
            longitude += 0.1;
            latitude += 0.1;
        }

        for (int i = 0; i &lt; 5; i++)
        {
            House brickHouse = houseFactory.GetHouse("Brick");
            if (brickHouse != null)
                brickHouse.Build(longitude, latitude);
            longitude += 0.1;
            latitude += 0.1;
        }

        Console.Read();
    }
}

abstract class House
{
    protected int stages; // количество этажей

    public abstract void Build(double longitude, double latitude);
}

class PanelHouse : House 
{
    public PanelHouse()
    {
        stages = 16;
    }

    public override void Build(double longitude, double latitude)
    {
        Console.WriteLine("Построен панельный дом из 16 этажей; координаты: {0} широты и {1} долготы", 
            latitude, longitude);
    }
}
class BrickHouse : House
{
    public BrickHouse()
    {
        stages = 5;
    }

    public override void Build(double longitude, double latitude)
    {
        Console.WriteLine("Построен кирпичный дом из 5 этажей; координаты: {0} широты и {1} долготы",
            latitude, longitude);
    }
}

class HouseFactory
{
    Dictionary&lt;string, House&gt; houses = new Dictionary&lt;string, House&gt;();
    public HouseFactory()
    {
        houses.Add("Panel", new PanelHouse());
        houses.Add("Brick", new BrickHouse());
    }

    public House GetHouse(string key)
    {
        if (houses.ContainsKey(key))
            return  houses[key];
        else
            return null;
    }
}
</pre>
<p>В качестве интерфейса приспособленца выступает абстрактный класс House, который определяет переменную stages - количество этажей, 
поскольку количество этажей относится к внутреннему состоянию, которое присуще всем домам. И также определяется метод <code>Build()</code>, 
который в качестве параметра принимает широту и долготу расположения дома - внешнее состояние.</p>
<p>Конкретные классы разделяемых приспособленцев - PanelHouse и BrickHouse отвечают за построение конкретных типов домов. Поскольку архитектурный план 
проектирования может точно задавать количество этажей для определенного типа дома, то в данном случае количество этажей устанавливается в конструкторе.</p>
<p>Фабрика HouseFactory создает два объекта дома для каждого конкретного приспособленца и возвращает их в методе <code>GetHouse()</code> в зависимости от параметра.</p>
<p>В роли клиента выступает класс Program, который задает начальные широту и долготу - внешнее состояние домов и использует фабрику 
для создания домов. Причем в реальности мы будем оперировать всего лишь двумя объектами, которые будут храниться в словаре в HouseFactory.</p>
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


<div class="nav"><p><a href="4.6.php">Назад</a><a href="./">Содержание</a><a href="5.1.php">Вперед</a></p></div></div>
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
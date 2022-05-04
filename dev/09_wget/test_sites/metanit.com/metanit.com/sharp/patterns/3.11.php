<!DOCTYPE html>
<html >
<head>
<title>Посетитель (Visitor) | Паттерны в C# и .NET</title>
<meta charset="utf-8" />
<meta name="description" content="Паттерн Посетитель (Visitor) в C# и .NET, шаблоны проектирования">
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
<h2>Посетитель (Visitor)</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Паттерн Посетитель (Visitor) позволяет определить операцию для объектов других классов без изменения этих классов.</p>
<p>При использовании паттерна Посетитель определяются две иерархии классов: одна для элементов, для которых надо определить новую операцию, и 
вторая иерархия для посетителей, описывающих данную операцию.</p>
<p>Когда использовать данный паттерн?</p>
<ul>
<li><p>Когда имеется много объектов разнородных классов с разными интерфейсами, и требуется выполнить ряд операций 
над каждым из этих объектов</p></li>
<li><p>Когда классам необходимо добавить одинаковый набор операций без изменения этих классов</p></li>
<li><p>Когда часто добавляются новые операции к классам, при этом общая структура классов стабильна и практически не изменяется</p></li>
</ul>
<p>Общая структура классов паттерна, описанная с помощью диаграмм UML:</p>
<img src="pics/visitor.png" alt="Паттерн Visitor в C# и .NET" />
<p>Формальная структура на C#:</p>
<pre class="brush:c#;">
class Client
{
    void Main()
    {
        var structure = new ObjectStructure();
        structure.Add(new ElementA());
        structure.Add(new ElementB());
        structure.Accept(new ConcreteVisitor1());
        structure.Accept(new ConcreteVisitor2());
    }
}

abstract class Visitor
{
    public abstract void VisitElementA(ElementA elemA);
    public abstract void VisitElementB(ElementB elemB);
}

class ConcreteVisitor1 : Visitor
{
    public override void VisitElementA(ElementA elementA)
    {
        elementA.OperationA();
    }
    public override void VisitElementB(ElementB elementB)
    {
            elementB.OperationB();
    }
}
class ConcreteVisitor2 : Visitor
{
    public override void VisitElementA(ElementA elementA)
    {
        elementA.OperationA();
    }
    public override void VisitElementB(ElementB elementB)
    {
        elementB.OperationB();
    }
}

class ObjectStructure
{
    List&lt;Element&gt; elements = new List&lt;Element&gt;();
    public void Add(Element element)
    {
        elements.Add(element);
    }
    public void Remove(Element element)
    {
        elements.Remove(element);
    }
    public void Accept(Visitor visitor)
    {
        foreach (Element element in elements)
            element.Accept(visitor);
    }
}

abstract class Element
{
    public abstract void Accept(Visitor visitor);
    public string SomeState { get; set; }
}

class ElementA : Element
{
    public override void Accept(Visitor visitor)
    {
        visitor.VisitElementA(this);
    }
    public void OperationA()
    { }
}

class ElementB : Element
{
    public override void Accept(Visitor visitor)
    {
        visitor.VisitElementB(this);
    }
    public void OperationB()
    { }
}
</pre>
<h3>Участники</h3>
<ul>
<li><p><span class="b">Visitor</span>: интерфейс посетителя, который определяет метод <code>Visit()</code> для каждого объекта Element</p></li>
<li><p><span class="b">ConcreteVisitor1 / ConcreteVisitor2</span>: конкретные классы посетителей, реализуют интерфейс, определенный в Visitor. 
</p></li>
<li><p><span class="b">Element</span>: определяет метод <code>Accept()</code>, в котором в качестве параметра принимается объект Visitor</p></li>
<li><p><span class="b">ElementA / ElementB</span>: конкретные элементы, которые реализуют метод <code>Accept()</code></p></li>
<li><p><span class="b">ObjectStructure</span>: некоторая структура, которая хранит объекты Element и предоставляет к ним доступ. 
Это могут быть и простые списки, и сложные составные структуры в виде деревьев</p></li>
</ul>
<p>Сущность работы паттерна состоит в том, что вначале создает объект посетителя, который обходит или посещает все элементы в структуре 
ObjectStructure, у которой вызывается метод <code>Accept()</code>:</p>
<pre class="brush:c#;">
public void Accept(Visitor visitor)
{
    foreach (Element element in elements)
                element.Accept(visitor);
}
</pre>
<p>При посещении каждого элемента посещаемый элемент вызывает у посетителя метод, соответствующий данному элементу:</p>
<pre class="brush:c#;">
public override void Accept(Visitor visitor)
{
    visitor.VisitElementA(this);
}
</pre>
<p>В этот метод элемент передает ссылку на себя, чтобы посетитель мог получить доступ к состоянию элемента. 
А в самом посетителе уже могут вызываться методы элемента или производиться различные действия над элементом:</p>
<pre class="brush:c#;">
public override void VisitElementA(ElementA elementA)
{
    elementA.OperationA();
}
</pre>
<p>Данная техника еще называется <span class="bb">двойной диспетчеризацией (double dispatch)</span>, когда выполнение операции зависит от имени запроса и двух 
типов получателей (объект Visitor и объект Element).</p>
<p>Рассмотрим на примере. Как известно, нередко для разных категорий вкладчиков банки имеют свои правила: оформления вкладов, выдача кредитов, начисления 
процентов и т.д. Соответственно классы, описывающие данные объекты, тоже будут разными. Но что важно, как правило, правила обслуживания 
четко описает весь набор категорий клиентов. Например, есть физические лица, есть юридические, отдельные правила для индивидуальных или частных предпринимателей и т.д. 
Поэтому структура классов, представляющая клиентов будет относительно фиксированной, то есть не склонной к изменениям.</p>
<p>И допустим, в какой-то момент мы решили добавить в классы клиентов функционал сериализации в html. В этом случае мы могли бы построить следующую структуру классов:</p>
<pre class="brush:c#;">
interface IAccount
{
    void ToHtml();
}
// физическое лицо
class Person : IAccount
{
	public string FIO { get; set; } //Фамилия Имя Отчество
    public string AccNumber { get; set; } // номер счета

    public void ToHtml()
    {
        string result = "&lt;table&gt;&lt;tr&gt;&lt;td&gt;Свойство&lt;td&gt;&lt;td&gt;Значение&lt;/td&gt;&lt;/tr&gt;";
        result += "&lt;tr&gt;&lt;td&gt;FIO&lt;td&gt;&lt;td&gt;" + FIO + "&lt;/td&gt;&lt;/tr&gt;";
        result += "&lt;tr&gt;&lt;td&gt;Number&lt;td&gt;&lt;td&gt;" + Number + "&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;";
        Console.WriteLine(result);
    }
}
// юридическое лицо
class Company : IAccount
{
    public string Name { get; set; } // название
    public string RegNumber { get; set; } // гос регистрационный номер
    public string Number { get; set; } // номер счета

    public void ToHtml()
    {
        string result = "&lt;table&gt;&lt;tr&gt;&lt;td&gt;Свойство&lt;td&gt;&lt;td&gt;Значение&lt;/td&gt;&lt;/tr&gt;";
        result += "&lt;tr&gt;&lt;td&gt;Name&lt;td&gt;&lt;td&gt;" + Name + "&lt;/td&gt;&lt;/tr&gt;";
        result += "&lt;tr&gt;&lt;td&gt;RegNumber&lt;td&gt;&lt;td&gt;" + RegNumber + "&lt;/td&gt;&lt;/tr&gt;";
        result += "&lt;tr&gt;&lt;td&gt;Number&lt;td&gt;&lt;td&gt;" + Number + "&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;";
        Console.WriteLine(result);
    }
}
</pre>
<p>Каждый класс имеет свой набор свойств и с помощью метода <code>ToHtml()</code> создает таблицу со значениями этих свойств. 
Но допустим, мы решили добавить потом еще сериализацию в формат xml. Задача относительно проста: добавить в интерфейс IAccount новый 
метод <code>ToXml()</code> и реализовать его в классах Person и Company.</p>
<p>Но еще через некоторое время мы захотим добавить сериализацию в формат json. Однако в будущем могут появиться новые форматы, 
которые мы также захотим поддерживать. Частое внесение изменение в фиксированную структуру классов в данном случае не будет оптимально. 
И для решения этой задачи воспользуемся паттерном Посетитель:</p>
<pre class="brush:c#;">
class Program
{
    static void Main(string[] args)
    {
        var structure = new Bank();
        structure.Add(new Person { Name = "Иван Алексеев", Number = "82184931" });
        structure.Add(new Company {Name="Microsoft", RegNumber="ewuir32141324", Number="3424131445"});
        structure.Accept(new HtmlVisitor());
        structure.Accept(new XmlVisitor());

        Console.Read();
    }
}

interface IVisitor
{
    void VisitPersonAcc(Person acc);
    void VisitCompanyAc(Company acc);
}

// сериализатор в HTML
class HtmlVisitor : IVisitor
{
    public void VisitPersonAcc(Person acc)
    {
        string result = "&lt;table&gt;&lt;tr&gt;&lt;td&gt;Свойство&lt;td&gt;&lt;td&gt;Значение&lt;/td&gt;&lt;/tr&gt;";
        result += "&lt;tr&gt;&lt;td&gt;Name&lt;td&gt;&lt;td&gt;" + acc.Name + "&lt;/td&gt;&lt;/tr&gt;";
        result += "&lt;tr&gt;&lt;td&gt;Number&lt;td&gt;&lt;td&gt;" + acc.Number + "&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;";
        Console.WriteLine(result);
    }

    public void VisitCompanyAc(Company acc)
    {
        string result = "&lt;table&gt;&lt;tr&gt;&lt;td&gt;Свойство&lt;td&gt;&lt;td&gt;Значение&lt;/td&gt;&lt;/tr&gt;";
        result += "&lt;tr&gt;&lt;td&gt;Name&lt;td&gt;&lt;td&gt;" + acc.Name + "&lt;/td&gt;&lt;/tr&gt;";
        result += "&lt;tr&gt;&lt;td&gt;RegNumber&lt;td&gt;&lt;td&gt;" + acc.RegNumber + "&lt;/td&gt;&lt;/tr&gt;";
        result += "&lt;tr&gt;&lt;td&gt;Number&lt;td&gt;&lt;td&gt;" + acc.Number + "&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;";
        Console.WriteLine(result);
    }
}

// сериализатор в XML
class XmlVisitor : IVisitor
{
    public void VisitPersonAcc(Person acc)
    {
        string result = "&lt;Person&gt;&lt;Name&gt;"+acc.Name+"&lt;/Name&gt;"+
			"&lt;Number&gt;"+acc.Number+"&lt;/Number&gt;&lt;Person&gt;";
        Console.WriteLine(result);
    }

    public void VisitCompanyAc(Company acc)
    {
        string result = "&lt;Company&gt;&lt;Name&gt;" + acc.Name + "&lt;/Name&gt;" + 
            "&lt;RegNumber&gt;" + acc.RegNumber + "&lt;/RegNumber&gt;" + 
            "&lt;Number&gt;" + acc.Number + "&lt;/Number&gt;&lt;Company&gt;";
        Console.WriteLine(result);
    }
}

class Bank
{
    List&lt;IAccount&gt; accounts = new List&lt;IAccount&gt;();
    public void Add(IAccount acc)
    {
        accounts.Add(acc);
    }
    public void Remove(IAccount acc)
    {
        accounts.Remove(acc);
    }
    public void Accept(IVisitor visitor)
    {
        foreach (IAccount acc in accounts)
            acc.Accept(visitor);
    }
}

interface IAccount
{
    void Accept(IVisitor visitor);
}

class Person : IAccount
{
    public string Name { get; set; }
    public string Number { get; set; }

    public void Accept(IVisitor visitor)
    {
        visitor.VisitPersonAcc(this);
    }
}

class Company : IAccount
{
    public string Name { get; set; }
    public string RegNumber { get; set; }
    public string Number { get; set; }

    public void Accept(IVisitor visitor)
    {
        visitor.VisitCompanyAc(this);
    }
}
</pre>
<p>В роли абстрактного класса Element здесь выступает интерфейс IAccount. Однако его реализации теперь не содержат метод <code>ToHtml()</code>, и любой 
другой метод для сериализации в какой-либо формат. Так как вся функциональность по сериализации вынесена в отдельные классы посетителей. В 
итоге классы Person и Company становятся намного чище и проще по структуре.</p>
<p>И если нам надо добавить новый способ сериализации, достаточно просто определить еще один класс посетителя.</p>
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


<div class="nav"><p><a href="3.10.php">Назад</a><a href="./">Содержание</a><a href="4.1.php">Вперед</a></p></div></div>
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
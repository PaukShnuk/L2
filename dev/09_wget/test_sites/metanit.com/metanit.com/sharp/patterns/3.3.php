<!DOCTYPE html>
<html >
<head>
<title>Команда (Command) | Паттерны в C# и .NET</title>
<meta charset="utf-8" />
<meta name="description" content="Паттерн проектирования Команда (Command) в C# и .NET, определение и применение паттерна">
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
<h2>Команда (Command)</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Паттерн "Команда" (Command) позволяет инкапсулировать запрос на выполнение определенного действия в виде отдельного объекта. Этот объект запроса 
на действие и называется командой. При этом объекты, инициирующие запросы на выполнение действия, отделяются от объектов, которые выполняют это действие.</p>
<p>Команды могут использовать параметры, которые передают ассоциированную с командой информацию. Кроме того, команды могут ставиться в очередь и также 
могут быть отменены.</p>
<h3>Когда использовать команды?</h3>
<p>Когда надо передавать в качестве параметров определенные действия, вызываемые в ответ на другие действия. То есть когда необходимы 
функции обратного действия в ответ на определенные действия.</p>
<p>Когда необходимо обеспечить выполнение очереди запросов, а также их возможную отмену.</p>
<p>Когда надо поддерживать логгирование изменений в результате запросов. Использование логов может помочь восстановить состояние системы - 
для этого необходимо будет использовать последовательность запротоколированных команд.</p>
<p>Схематично в UML паттерн Команда представляется следующим образом:</p>
<img src="pics/command.png" alt="Паттерн Команда в C#" />
<p>Формальное определение на языке C# может выглядеть следующим образом:</p>
<pre class="brush:c#;">
abstract class Command
{
    public abstract void Execute();
    public abstract void Undo();
}
// конкретная команда
class ConcreteCommand : Command
{
    Receiver receiver;
    public ConcreteCommand(Receiver r)
    {
        receiver = r;
    }
    public override void Execute()
    {
        receiver.Operation();
    }

    public override void Undo()
    {}
}

// получатель команды
class Receiver
{
    public void Operation()
    { }
}
// инициатор команды
class Invoker
{
    Command command;
    public void SetCommand(Command c)
    {
        command = c;
    }
    public void Run()
    {
        command.Execute();
    }
	public void Cancel()
    {
        command.Undo();
    }
}
class Client
{  
    void Main()
    {
        Invoker invoker = new Invoker();
        Receiver receiver = new Receiver();
        ConcreteCommand command=new ConcreteCommand(receiver);
        invoker.SetCommand(command);
        invoker.Run();
    }
}
</pre>
<h3>Участники</h3>
<ul>
<li><p><span class="b">Command</span>: интерфейс, представляющий команду. Обычно определяет метод <code>Execute()</code> для выполнения 
действия, а также нередко включает метод <code>Undo()</code>, реализация которого должна заключаться в отмене действия команды</p></li>
<li><p><span class="b">ConcreteCommand</span>: конкретная реализация команды, реализует метод <code>Execute()</code>, в котором вызывается определенный метод, 
определенный в классе Receiver</p></li>
<li><p><span class="b">Receiver</span>: получатель команды. Определяет действия, которые должны выполняться в результате запроса.</p></li>
<li><p><span class="b">Invoker</span>: инициатор команды - вызывает команду для выполнения определенного запроса</p></li>
<li><p><span class="b">Client</span>: клиент - создает команду и устанавливает ее получателя с помощью метода <code>SetCommand()</code></p></li>
</ul>
<p>Таким образом, инициатор, отправляющий запрос, ничего не знает о получателе, который и будет выполнять команду. Кроме того, если нам потребуется 
применить какие-то новые команды, мы можем просто унаследовать классы от абстрактного класса Command и реализовать его методы Execute и Undo.</p>
<p>В программах на C# команды находят довольно широкое применение. Так, в технологии WPF и других технологиях, которые используют XAML и подход MVVM, 
на командах во многом базируется взаимодействие с пользователем. В некоторых архитектурах, например, в архитектуре CQRS, команды являются одним из 
ключевых компонентов.</p> 
<p>Нередко в роли инициатора команд выступают панели управления или кнопки интерфейса. Самая простая ситуация - надо программно 
организовать включение и выключение прибора, например, телевизора. Решение данной задачи с помощью команд могло бы выглядеть так:</p>
<pre class="brush:c#;">
class Program
{
	static void Main(string[] args)
    {
        Pult pult = new Pult();
        TV tv = new TV();
        pult.SetCommand(new TVOnCommand(tv));
        pult.PressButton();
        pult.PressUndo();
        
        Console.Read();
    }
}

interface ICommand
{
    void Execute();
    void Undo();
}

// Receiver - Получатель
class TV
{ 
    public void On()
    {
        Console.WriteLine("Телевизор включен!");
    }

    public void Off()
    {
        Console.WriteLine("Телевизор выключен...");
    }
}

class TVOnCommand : ICommand
{
    TV tv;
    public TVOnCommand(TV tvSet)
    {
        tv = tvSet;
    }
    public void Execute()
    {
        tv.On();
    }
    public void Undo()
    {
        tv.Off();
    }
}

// Invoker - инициатор
class Pult
{
    ICommand command;

    public Pult() { }

    public void SetCommand(ICommand com)
    {
        command = com;
    }

    public void PressButton()
    {
        command.Execute();
    }
    public void PressUndo()
    {
        command.Undo();
    }
}
</pre>
<p>Итак, в этой программе есть интерфейс команды - ICommand, есть ее реализация в виде класса TVOnCommand, есть инициатор команды - класс 
Pult, некий прибор - пульт, управляющий телевизором. И есть получатель команды - класс TV, представляющий телевизор. В качестве клиента используется класс Program.</p>
<p>При этом пульт ничего не знает об объекте TV. Он только знает, как отправить команду. В итоге мы получаем гибкую систему, в которой мы легко можем заменять 
одни команды на другие, создавать последовательности команд. Например, в нашей программе кроме телевизора появилась микроволновка, которой тоже неплохо было бы управлять с 
помощью одного интерфейса. Для этого достаточно добавить соответствующие классы и установить команду:</p>
<pre class="brush:c#;">
class Program
{
    static void Main(string[] args)
    {
        Pult pult = new Pult();
        TV tv = new TV();
        pult.SetCommand(new TVOnCommand(tv));
        pult.PressButton();
        pult.PressUndo();

        Microwave microwave = new Microwave
		// 5000 - время нагрева пищи
        pult.SetCommand(new MicrowaveCommand(microwave, 5000));
        pult.PressButton();
        
        Console.Read();
    }
}
//.....ранее описанные классы

class Microwave
{
    public void StartCooking(int time)
    {
        Console.WriteLine("Подогреваем еду");
        // имитация работы с помощью асинхронного метода Task.Delay
        Task.Delay(time).GetAwaiter().GetResult();
    }

    public void StopCooking()
    {
        Console.WriteLine("Еда подогрета!");
    }
}
class MicrowaveCommand : ICommand
{
    Microwave microwave;
    int time;
    public MicrowaveCommand(Microwave m, int t)
    {
        microwave = m;
        time = t;
    }
    public void Execute()
    {
        microwave.StartCooking(time);
        microwave.StopCooking();
    }

    public void Undo()
    {
        microwave.StopCooking();
    }
}
</pre>
<p>Теперь еще одним получателем запроса является класс Microwave, функциональностью которого можно управлять через команды MicrowaveCommand.</p>
<p>Правда, в вышеописанной системе есть один изъян: если мы попытаемся выполнить команду до ее назначения, то программа выдаст исключение, 
так как команда будет не установлена. Эту проблему мы могли бы решить, проверяя команду на значение null в классе инициатора:</p>
<pre class="brush:c#;">
class Pult
{
    ICommand command;

    public Pult() { }

    public void SetCommand(ICommand com)
    {
        command = com;
    }

    public void PressButton()
    {
        if(command!=null)
            command.Execute();
    }
    public void PressUndo()
    {
		if(command!=null)
            command.Undo();
    }
}
</pre>
<p>Либо можно определить класс пустой команды, которая будет устанавливаться по умолчанию:</p>
<pre class="brush:c#;">
class NoCommand : ICommand
{
    public void Execute()
    {
    }
    public void Undo()
    {
    }
}
class Pult
{
    ICommand command;

    public Pult() 
	{ 
		command = new NoCommand();
	}

    public void SetCommand(ICommand com)
    {
        command = com;
    }

    public void PressButton()
    {
        command.Execute();
    }
    public void PressUndo()
    {
		command.Undo();
    }
}
</pre>
<p>При этом инициатор необязательно указывает на одну команду. Он может управлять множеством команд. Например, на пульте от телевизора есть 
как кнопка для включения, так и кнопки для регулировки звука:</p>
<pre class="brush:c#;">
class Program
{
    static void Main(string[] args)
    {
        TV tv = new TV();
        Volume volume = new Volume();
        MultiPult mPult = new MultiPult();
        mPult.SetCommand(0, new TVOnCommand(tv));
        mPult.SetCommand(1, new VolumeCommand(volume));
		// включаем телевизор
        mPult.PressButton(0);
		// увеличиваем громкость
        mPult.PressButton(1);
        mPult.PressButton(1);
        mPult.PressButton(1);
		// действия отмены
        mPult.PressUndoButton();
        mPult.PressUndoButton();
        mPult.PressUndoButton();
        mPult.PressUndoButton();

		Console.Read();
    }
}
interface Command
{
    void Execute();
    void Undo();
}

class TV
{ 
    public void On()
    {
        Console.WriteLine("Телевизор включен!");
    }

    public void Off()
    {
        Console.WriteLine("Телевизор выключен...");
    }
}

class TVOnCommand : ICommand
{
    TV tv;
    public TVOnCommand(TV tvSet)
    {
        tv = tvSet;
    }
    public void Execute()
    {
        tv.On();
    }
    public void Undo()
    {
        tv.Off();
    }
}
class Volume
{
    public const int OFF = 0;
    public const int HIGH = 20;
    private int level;

    public Volume()
    {
        level = OFF;
    }

    public void RaiseLevel()
    {
        if (level &lt; HIGH)
            level++;
        Console.WriteLine("Уровень звука {0}", level);
    }
    public void DropLevel()
    {
        if (level &gt; OFF)
            level--;
        Console.WriteLine("Уровень звука {0}", level);
    }
}

class VolumeCommand : ICommand
{
    Volume volume;
    public VolumeCommand(Volume v)
    {
        volume = v;
    }
    public void Execute()
    {
        volume.RaiseLevel();
    }

    public void Undo()
    {
        volume.DropLevel();
    }
}

class NoCommand : ICommand
{
    public void Execute()
    {
    }
    public void Undo()
    {
    }
}

class MultiPult
{
    ICommand[] buttons;
    Stack&lt;ICommand&gt; commandsHistory;

    public MultiPult()
    {
        buttons = new ICommand[2];
        for (int i = 0; i &lt; buttons.Length; i++)
        {
            buttons[i] = new NoCommand();
        }
        commandsHistory = new Stack&lt;ICommand&gt;();
    }

    public void SetCommand(int number, ICommand com)
    {
        buttons[number] = com;
    }

    public void PressButton(int number)
    {
        buttons[number].Execute();
		// добавляем выполненную команду в историю команд
        commandsHistory.Push(buttons[number]);
    }
    public void PressUndoButton()
    {
        if(commandsHistory.Count&gt;0)
        {
            ICommand undoCommand = commandsHistory.Pop();
            undoCommand.Undo();
        }
    }
}
</pre>
<p>Здесь два получателя команд - классы TV и Volume. Volume управляет уровнем звука и сохраняет текущий уровень в переменной level. 
Также есть две команды TVOnCommand и VolumeCommand.</p>
<p>Инициатор - MultiPult имеет две кнопки в виде массива buttons: первая предназначена 
для TV, а вторая - для увеличения уровня звука. Чтобы сохранить историю команд используется стек. При отправке команды в стек добавляется 
новый элемент, а при ее отмене, наоборот, происходит удаление из стека. В данном случае стек выполняет роль примитивного лога команд.</p>
<div class="console">
<pre class="consoletext">
Телевизор включен!
Уровень звука 1
Уровень звука 2
Уровень звука 3
Уровень звука 2
Уровень звука 1
Уровень звука 0
Телевизор выключен...
</pre>
</div>
<h3>Макрокоманды</h3>
<p>Для управления набором команд используются макрокоманды. Макрокоманда должна реализовать тот же интерфейс, что и другие команды, 
при этом макрокоманда инкапсулирует в одной из своих переменных весь набор используемых команд. Рассмотрим на примере.</p>
<p>Для создания и развития программного продукта необходимо несколько исполнителей, выполняющих различные функции: программист пишет код, 
тестировщик выполняет тестирование продукта, а маркетолог пишет рекламные материалы и проводит кампании по рекламированию продукта. Управляет 
всем процессом менеджер. Программа на C#, описывающая создание программного продукта с помощью паттерна команд, могла бы выглядеть следующим образом:</p>
<pre class="brush:c#;">
class Program
{
    static void Main(string[] args)
    {
        Programmer programmer = new Programmer();
        Tester tester = new Tester();
        Marketolog marketolog = new Marketolog();

        List&lt;ICommand&gt; commands = new List&lt;ICommand&gt; 
        {
            new CodeCommand(programmer),
            new TestCommand(tester),
            new AdvertizeCommand(marketolog)
        };
        Manager manager = new Manager();
        manager.SetCommand(new MacroCommand(commands));
        manager.StartProject();
        manager.StopProject();
        
		Console.Read();
    }
}
interface ICommand
{
    void Execute();
    void Undo();
}
// Класс макрокоманды
class MacroCommand : ICommand
{
    List&lt;ICommand&gt; commands;
    public MacroCommand(List&lt;ICommand&gt; coms)
    {
        commands = coms;
    }
    public void Execute()
    {
        foreach(ICommand c in commands)
            c.Execute();
    }

    public void Undo()
    {
        foreach (ICommand c in commands)
            c.Undo();
    }
}

class Programmer
{
    public void StartCoding()
    {
        Console.WriteLine("Программист начинает писать код");
    }
    public void StopCoding()
    {
        Console.WriteLine("Программист завершает писать код");
    }
}

class Tester
{
    public void StartTest()
    {
        Console.WriteLine("Тестировщик начинает тестирование");
    }
    public void StopTest()
    {
        Console.WriteLine("Тестировщик завершает тестирование");
    }
}

class Marketolog
{
    public void StartAdvertize()
    {
        Console.WriteLine("Маркетолог начинает рекламировать продукт");
    }
    public void StopAdvertize()
    {
        Console.WriteLine("Маркетолог прекращает рекламную кампанию");
    }
}

class CodeCommand : ICommand
{
    Programmer programmer;
    public CodeCommand(Programmer p)
    {
        programmer = p;
    }
    public void Execute()
    {
        programmer.StartCoding();
    }
	public void Undo()
    {
        programmer.StopCoding();
    }
}

class TestCommand : ICommand
{
    Tester tester;
    public TestCommand(Tester t)
    {
        tester = t;
    }
    public void Execute()
    {
        tester.StartTest();
    }
	public void Undo()
    {
        tester.StopTest();
    }
}

class AdvertizeCommand : ICommand
{
    Marketolog marketolog;
    public AdvertizeCommand(Marketolog m)
    {
        marketolog = m;
    }
    public void Execute()
    {
        marketolog.StartAdvertize();
    }

    public void Undo()
    {
        marketolog.StopAdvertize();
    }
}

class Manager
{
    ICommand command;
    public void SetCommand(ICommand com)
    {
        command = com;
    }
    public void StartProject()
    {
        if (command != null)
            command.Execute();
    }
    public void StopProject()
    {
        if (command != null)
            command.Undo();
    }
}
</pre>
<p>В роли инициатора здесь выступает менеджер, а в роли получателей запросов - программист, маркетолог и тестеровщик. Запуская проект, менеджер тем 
самым запускает макрокоманду, которая содержит ряд отдельных команд. Выполнение этих команд делегируется получателям.</p>
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


<div class="nav"><p><a href="3.2.php">Назад</a><a href="./">Содержание</a><a href="3.4.php">Вперед</a></p></div></div>
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
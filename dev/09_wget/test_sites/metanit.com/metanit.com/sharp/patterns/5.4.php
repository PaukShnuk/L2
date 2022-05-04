<!DOCTYPE html>
<html >
<head>
<title>Паттерны в C# и .NET | Принцип разделения интерфейсов</title>
<meta charset="utf-8" />
<meta name="description" content="Принцип разделения интерфейсов (Interface Segregation Principle) в C# и .NET">
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
<h2>Принцип разделения интерфейсов</h2><div class="date">Последнее обновление: 24.04.2022</div>

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

<p><span class="b">Принцип разделения интерфейсов</span> (Interface Segregation Principle) относится к тем случаям, когда классы имеют "жирный интерфейс", то есть слишком раздутый интерфейс, 
не все методы и свойства которого используются и могут быть востребованы. Таким образом, интерфейс получатся слишком избыточен или "жирным".</p>
<p>Принцип разделения интерфейсов можно сформулировать так:</p>
<p><span class="b">Клиенты не должны вынужденно зависеть от методов, которыми не пользуются.</span></p>
<p>При нарушении этого принципа клиент, использующий некоторый интерфейс со всеми его методами, зависит от методов, которыми не пользуется, и 
поэтому оказывается восприимчив к изменениям в этих методах. В итоге мы приходим к жесткой зависимости между различными частями интерфейса, которые могут быть 
не связаны при его реализации.</p>
<p>Техники для выявления нарушения этого принципа:</p>
<ul>
<li><p>Слишком большие интерфейсы</p></li>
<li><p>Компоненты в интерфейсах слабо согласованы (перекликается с принципом единой ответственности)</p></li>
<li><p>Методы без реализации (перекликается с принципом Лисков</p></li>
</ul>
<p>В этом случае интерфейс класса разделяется на отдельные части, которые составляют раздельные интерфейсы. Затем эти интерфейсы независимо друг от друга могут применяться и 
изменяться. В итоге применение принципа разделения интерфейсов делает систему слабосвязанной, и тем самым ее легче модифицировать и обновлять.</p>
<p>Рассмотрим на примере. Допустим у нас есть интерфейс отправки сообщения:</p>
<pre class="brush:c#;">
interface IMessage
{
    void Send();
    string Text { get; set;}
    string Subject { get; set;}
    string ToAddress { get; set; }
    string FromAddress { get; set; }
}
</pre>
<p>Интерфейс определяет все основное, что нужно для отправки сообщения: само сообщение, его тему, адрес отправителя и получателя и, конечно, сам метод отправки. 
И пусть есть класс EmailMessage, который реализует этот интерфейс:</p>
<pre class="brush:c#;">
class EmailMessage : IMessage
{
    public string Subject { get; set; } = "";
    public string Text { get; set; } = "";
    public string FromAddress { get; set; } = "";
    public string ToAddress { get; set; } = "";

    public void Send() =&gt; Console.WriteLine($"Отправляем Email-сообщение: {Text}");
}
</pre>
<p>Надо отметить, что класс EmailMessage  выглядит целостно, вполне удовлетворяя принципу единственной ответственности. То есть с точки зрения связности (cohesion) 
здесь проблем нет.</p>
<p>Теперь определим класс, который бы отправлял данные по смс:</p>
<pre class="brush:c#;">
class SmsMessage : IMessage
{
    public string Text { get; set; } = "";
    public string FromAddress { get; set; } = "";
    public string ToAddress { get; set; } = "";

    public string Subject
    {
        get
        {
            throw new NotImplementedException();
        }

        set
        {
            throw new NotImplementedException();
        }
    }

    public void Send() =&gt; Console.WriteLine($"Отправляем Sms-сообщение: {Text}");
}
</pre>
<p>Здесь мы уже сталкиваемся с небольшой проблемой: свойство Subject, которое определяет тему сообщения, при отправке смс не указывается, поэтому оно в данном 
классе не нужно. Таким образом, в классе SmsMessage появляется избыточная функциональность, от которой класс SmsMessage начинает зависеть.</p>
<p>Это не очень хорошо, но посмотрим дальше. Допустим, нам надо создать класс для отправки голосовых сообщений.</p>
<p>Класс голосовой почты также имеет отправителя и получателя, только само сообщение передается в виде звука, что на уровне C# можно выразить в виде массива байтов. 
И в этом случае было бы неплохо, если бы интерфейс IMessage включал бы в себя дополнительные свойства и методы для этого, например:</p>
<pre class="brush:c#;">
interface IMessage
{
    void Send();
    string Text { get; set;}
    string ToAddress { get; set; }
    string Subject { get; set; }
    string FromAddress { get; set; }

    byte[] Voice { get; set; }
}
</pre>
<p>Тогда класс голосовой почты VoiceMessage мог бы выглядеть следующим образом:</p>
<pre class="brush:c#;">
class VoiceMessage : IMessage
{
    public string ToAddress { get; set; } = "";
    public string FromAddress { get; set; } = "";
    public byte[] Voice { get; set; } = new byte[] {};

    public string Text
    {
        get
        {
            throw new NotImplementedException();
        }

        set
        {
            throw new NotImplementedException();
        }
    }

	public string Subject
    {
        get
        {
            throw new NotImplementedException();
        }

        set
        {
            throw new NotImplementedException();
        }
    }

    public void Send() =&gt; Console.WriteLine("Передача голосовой почты");
}
</pre>
<p>И здесь опять же мы сталкиваемся с ненужными свойствами. Плюс нам надо добавить новое свойство в предыдущие классы SmsMessage и EmailMessage, причем этим классам 
свойство Voice в принципе то не нужно. В итоге здесь мы сталкиваемся с явным нарушением принципа разделения интерфейсов.</p>
<p>Для решения возникшей проблемы нам надо выделить из классов группы связанных методов и свойств и определить для каждой группы свой интерфейс:</p>
<pre class="brush:c#;">
interface IMessage
{
    void Send();
    string ToAddress { get; set; }
    string FromAddress { get; set; }
}
interface IVoiceMessage : IMessage
{
    byte[] Voice { get; set; }
}
interface ITextMessage : IMessage
{
    string Text { get; set; }
}

interface IEmailMessage : ITextMessage
{
    string Subject { get; set; }
}

class VoiceMessage : IVoiceMessage
{
    public string ToAddress { get; set; } = "";
    public string FromAddress { get; set; } = "";

    public byte[] Voice { get; set; } = Array.Empty&lt;byte&gt;(); 
    public void Send() =&gt; Console.WriteLine("Передача голосовой почты");
}
class EmailMessage : IEmailMessage
{
    public string Text { get; set; } = "";
    public string Subject { get; set; } = "";
    public string FromAddress { get; set; } = "";
    public string ToAddress { get; set; } = "";

    public void Send() =&gt; Console.WriteLine("Отправляем по Email сообщение: {Text}");
}

class SmsMessage : ITextMessage
{
    public string Text { get; set; } = "";
    public string FromAddress { get; set; } = "";
    public string ToAddress { get; set; } = "";
    public void Send() =&gt; Console.WriteLine("Отправляем по Sms сообщение: {Text}");
}
</pre>
<p>Теперь классы больше не содержат неиспользуемые методы. Чтобы избежать дублирование кода, применяется 
наследование интерфейсов. В итоге структра классов получается проще, чище и яснее.</p>
<h3>Пустые методы</h3>
<p>Одним из типичных нарушений данного принципа являются нереализованные методы. Подобные методы обычно говорят о том, что в проектировании системы есть недостатки 
и упущения. Кроме того, нереализованные методы нередко также нарушают принцип Лисков.</p>
<p>Рассмотрим пример:</p>
<pre class="brush:c#;">
interface IPhone
{
    void Call();
    void TakePhoto();
    void MakeVideo();
    void BrowseInternet();
}
class Phone : IPhone
{
    public void Call() =&gt; Console.WriteLine("Звоним");
    
    public void TakePhoto() =&gt; Console.WriteLine("Фотографируем");
    
    public void MakeVideo() =&gt; Console.WriteLine("Снимаем видео");
    
    public void BrowseInternet() =&gt; Console.WriteLine("Серфим в интернете");
}
</pre>
<p>В наше время телефоны могут если не все, то очень многое, и представленный выше класс определяет ряд задач, которые выполняются стандартным телефоном: звонки, 
фото, видео, интернет.</p>
<p>Но пусть у нас есть также класс клиента, который использует объект Phone для фотографирования:</p>
<pre class="brush:c#;">
class Photograph
{
    public void TakePhoto(Phone phone)
    {
        phone.TakePhoto();
    }
}
</pre>
<p>Применим данный класс:</p>
<pre class="brush:c#;">
Photograph photograph = new Photograph();
Phone myPhone = new Phone();
photograph.TakePhoto(myPhone);
</pre>
<p>Объект Photograph, который представляет фотографа, теперь может фотографировать, используя объект Phone. 
Однако более для фотосъемки можно использовать также и обычную фотокамеру, которая не обладает множеством возможностей телефона. И мы хотели бы, чтобы 
фотограф мог бы также использовать и фотокамеру для фотосъемки. В этом случае мы могли взять общий интерфейс IPhone и 
реализовать его метод TakePhoto в классе фотокамеры:</p>
<pre class="brush:c#;">
class Camera : IPhone
{
    public void Call() { }
    public void TakePhoto()
    {
        Console.WriteLine("Фотографируем");
    }
    public void MakeVideo() { }
    public void BrowseInternet() { }
}
</pre>
<p>Однако здесь мы опять сталкиваемся с тем, что клиент - класс Camera зависит от методов, которые он не использует - то есть методов Call, MakeVideo, BrowseInternet.</p>
<p>Для решения возникшей задачи мы можем воспользоваться принципом разделения интерфейсов:</p>
<pre class="brush:c#;">
interface ICall
{
    void Call();
}
interface IPhoto
{
    void TakePhoto();
}
interface IVideo
{
    void MakeVideo();
}
interface IWeb
{
    void BrowseInternet();
}

class Camera : IPhoto
{
    public void TakePhoto()
    {
        Console.WriteLine("Фотографируем с помощью фотокамеры");
    }
}

class Phone : ICall, IPhoto, IVideo, IWeb
{
    public void Call()
    {
        Console.WriteLine("Звоним");
    }
    public void TakePhoto()
    {
        Console.WriteLine("Фотографируем с помощью смартфона");
    }
    public void MakeVideo()
    {
        Console.WriteLine("Снимаем видео");
    }
    public void BrowseInternet()
    {
        Console.WriteLine("Серфим в интернете");
    }
}
</pre>
<p>Для применения принципа разделения интерфейсов опять же интерфейс класса Phone разделяется на группы связанных методов (в данном случае получается 4 группы, в каждой по одному методу). 
Затем каждая группа обертывается в отдельный интерфейс и используется самостоятельно.</p>
<p>При необходимости мы можем применить все интерфейсы сразу, как в классе Phone, либо только отдельные интерфейсы, как в классе Camera.</p>
<p>Теперь изменим код клиента - класса фотографа:</p>
<pre class="brush:c#;">
class Photograph
{
    public void TakePhoto(IPhoto photoMaker)
    {
        photoMaker.TakePhoto();
    }
}
</pre>
<p>Теперь фотографу не важно, что передается в метод TakePhoto - фотокамера или телефон, главное, что этот объект обладается только всем необходимым для фотографирования 
функционалом и больше ничем.</p>
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


<div class="nav"><p><a href="5.3.php">Назад</a><a href="./">Содержание</a><a href="5.5.php">Вперед</a></p></div></div>
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
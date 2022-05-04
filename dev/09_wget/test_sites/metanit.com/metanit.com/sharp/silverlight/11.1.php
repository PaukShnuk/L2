<!DOCTYPE html>
<html >
<head>
<title>Анимации и трансформации</title>
<meta charset="utf-8" />
<meta name="description" content="Анимации, меняющие свойство объекта (ColorAnimation, ThiknessAnimation, DoubleAnimation) и анимации по ключевым кадрам, использование объекта Storyboard">
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
<h1>Анимации и трансформации</h1>
<h2>Анимация</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<h3>Анимация в коде</h3>
<p>За анимацию в Silverlight отвечает пространство имен <code>System.Windows.Media.Animation</code>. 
Оно содержит довольно большой набор классов, позволяющих анимировать различные свойства. 
Правда, готовые классы анимации есть только для свойств зависимостей. Например, для изменения таких свойств, как длина, ширина, предназначен класс <span class="bb">DoubleAnimation</span>. 
Для изменения цвета фона или шрифта - <span class="bb">ColorAnimation</span>, для изменения свойства <code>Margin</code> -  <b>ThiknessAnimation</b>. 
Для большинства свойств подобраны определенные классы из пространства имен <code>System.Windows.Media.Animation</code>. Это важно учитывать, поскольку 
мы не можем использовать анимацию типа DoubleAnimation для анимирования свойства с типом Color.</p>
<p>Например, у нас есть кнопка button1 - проанимируем ее свойство <code>Width</code>:</p>
<pre class="brush: c#;">
using System.Windows.Media.Animation;
.....................................
	private void Button_Click(object sender, RoutedEventArgs e)
        {
            DoubleAnimation a = new DoubleAnimation();
            a.From = button1.ActualWidth;
            a.To = 150;
            a.Duration = TimeSpan.FromSeconds(3);
            Storyboard.SetTarget(a, button1);
            Storyboard.SetTargetProperty(a, new PropertyPath(Button.WidthProperty));
            Storyboard animation = new Storyboard();
            animation.Children.Add(a);
            animation.Begin();  
        }  
</pre>
<p>В данном случае мы сначала задаем тип анимации и создаем ее. Поскольку изменяется свойство Width, это будет <span class="bb">DoubleAnimation</span>. 
Свойство <span class="bb">From</span> - объявляет начальное значение, с которого будет начинаться анимация, а свойство <span class="bb">To</span>- конечное значение. 
Свойство <span class="bb">Duration</span> - задает время анимации.</p>
<p>Далее мы используем класс <b>Storyboard</b> для привязки анимации к определенному свойству. Сначала с помощью метода <code>SetTarget</code> мы устанавливаем 
анимацию для определенного элемента - в данном случае для кнопки button1. Затем с помощью метода <span class="bb">SetTargetProperty</span> привязываем анимацию 
к определенному свойству - в данном случае для свойства Width. Обратите внимание, что здесь употребляется не свойство как таковое, а соответствующее ему 
свойство зависимостей, поэтому вместо Width мы пишем <span class="bb">WidthProperty</span>.</p>
<p>В конце мы создаем объект Storyboard, к которому добавляем ранее созданный объект DoubleAnimation и с помощью метода Begin запускаем.</p>
<P>Объект анимации также обладает рядом других важных свойств. 
Например, установка свойства <span class="bb">a.AutoReverse = True</span> - после окончания расширения кнопки, вызвало бы обратный эффект, и кнопка достигла 
бы первоначальной ширины, которая была у нее до анимации.</P>
<p>Также на действие после окночания анимации можно повлиять с помощью свойства <span class="bb">FillBehavior</span>. Если оно имеет значение <span class="bb">Stop</span>, 
то после окончания анимации объект возвращает прежние значения: <span class="bb">a.FillBehavior = FillBehavior.Stop</span> </p>
<p>Если же оно имеет значение <span class="bb">HoldEnd</span> : <span class="bb">a.FillBehavior = FillBehavior.HoldEnd</span>, то анимация присваивает объекту новое значение. </p>
<P>А свойство <span class="bb">BeginTime</span> позволяет устанавить время задержки между запуском и началом анимации.</P>
<p>Чтобы повторить анимацию несколько раз подряд используется свойство <span class="bb">RepeatBehavior</span>:</p>
<pre class="brush: c#;">private void Button_Click(object sender, RoutedEventArgs e)
        {
            DoubleAnimation a = new DoubleAnimation();
            a.Completed += a_Completed;
            a.AutoReverse = true;
            a.RepeatBehavior = new RepeatBehavior(3);
            a.From = button1.ActualWidth;
            a.To = 160;
            a.Duration = TimeSpan.FromSeconds(4);
            Storyboard.SetTarget(a, button1);
            Storyboard.SetTargetProperty(a, new PropertyPath(Button.WidthProperty));
            Storyboard animation = new Storyboard();
            animation.Children.Add(a);
            animation.Begin();  
        }
        private void a_Completed(object sender, EventArgs e)
        {
            MessageBox.Show("Анимация завершена");
        }
</pre>
<p>В итоге мы получим эффект пульсирующей кнопки. В данном случае использована обработка события анимации <span class="bb">Completed</span>, возникающего после завершения анимации.</p>
<h3>Анимация в XAML</h3>
<p>Тот же самый пример мы могли определить в xaml-коде следующим образом:</p>
<pre class="brush:xml;">&lt;UserControl x:Class="TestApplication.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
             xmlns:local="clr-namespace:TestApplication"
    mc:Ignorable="d"
    d:DesignHeight="200" d:DesignWidth="250"&gt;
    &lt;UserControl.Resources&gt;
                    &lt;Storyboard x:Name="stor1"&gt;
                        &lt;DoubleAnimation Storyboard.TargetProperty="Width" From="80" To="150" Storyboard.TargetName="button1" 
                                         AutoReverse="True" RepeatBehavior="0:0:10" Duration="0:0:2" Completed="a_Completed" /&gt;
                    &lt;/Storyboard&gt;
    &lt;/UserControl.Resources&gt;
    &lt;Grid x:Name="LayoutRoot"&gt;
        &lt;Button x:Name="button1" Width="80" Height="30" Content="Нажми" Background="Red" Click="Button_Click" /&gt;
    &lt;/Grid&gt;
&lt;/UserControl&gt;</pre>
<p>При этом код мы могли сократить следующим образом:</p>
<pre class="brush: c#;">private void Button_Click(object sender, RoutedEventArgs e)
        {
            stor1.Begin();  
        }
        private void a_Completed(object sender, EventArgs e)
        {
            MessageBox.Show("Анимация завершена");
        }
</pre>
<P>В предыдущем случае анимация запускалась после возникновения события нажатия кнопки. Но мы можем ее запустить, абсолютно не используя код c#. 
Для этого нужно воспользоваться объектом EventTrigger. Этот объект имеет свойство <span class="bb">Actions</span>, которое включает ряд действий возникающих 
после возникновения события (в данном случае после события Loaded). 
 Затем объект <span class="bb">BeginStoryboard</span> начинает анимацию, которая задается объектом Storyboard. Storyboard же и объявляет объект анимации со всеми ее свойствами и параметрами.</p>
 <p> Уже в разметке объекта анимации задается объект с помощью прикрепленного свойства <span class="bb">Storyboard.TargetName</span> и анимируемое свойство этого объекта с помощью свойства <span class="bb">Storyboard.TargetProperty</span>. 
 В случае, если анимируется прикрепленное свойство, например, <span class="bb">Canvas.Top</span>, то оно заключается в скобки : <span class="bb">Storyboard.TargetProperty="(Canvas.Top)"</span>
Если переписать вышеприведенный пример в XAML, то получится следующее:</P>
 <pre class="brush:xml;">
 &lt;UserControl x:Class="TestApplication.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
    mc:Ignorable="d"
    d:DesignHeight="200" d:DesignWidth="250"&gt;
    &lt;UserControl.Triggers&gt;
        &lt;EventTrigger&gt;
            &lt;EventTrigger.Actions&gt;
                &lt;BeginStoryboard&gt;
                    &lt;Storyboard&gt;
                        &lt;DoubleAnimation Storyboard.TargetProperty="Width" From="80" To="150" Storyboard.TargetName="button1" 
                                         AutoReverse="True" RepeatBehavior="0:0:10" Duration="0:0:2" Completed="a_Completed" /&gt;
                    &lt;/Storyboard&gt;
                &lt;/BeginStoryboard&gt;
            &lt;/EventTrigger.Actions&gt;
        &lt;/EventTrigger&gt;
    &lt;/UserControl.Triggers&gt;
    &lt;Grid x:Name="LayoutRoot"&gt;
        &lt;Canvas&gt;
            &lt;Button x:Name="button1" Width="80" Height="30" Content="Нажми" Canvas.Top="20" /&gt;
        &lt;/Canvas&gt;
    &lt;/Grid&gt;
&lt;/UserControl&gt;
 </pre>
 <p>К сожалению одно из сильных ограничений Silverlight по сравнению с WPF состоит в том, что мы не можем запускать анимацию только после события  <span class="bb">Loaded</span>. 
 Поэтому, чтобы проигрывать анимацию после нажатия кнопки, опять же придется писать код.</p>
 <p>В данном случае свойство <span class="bb">RepeatBehavior</span> инициализируется временем - "0:0:10", которое будет повторяться анимация. Чтобы указать число повторов, структуру <span class="bb">RepeatBehavior</span> надо инициализировать так: <span class="bb">RepeatBehavior="2x"</span>, 
 где 2 - количество повторов, а x - просто префикс, указывающий, что речь идет о количестве итераций, без него бы число интерпретировалось как количество дней. Третий способ задания этого свойства - <span class="bb">RepeatBehavior="Forever"</span> - в этом случае анимация будет продолжаться все время работы приложения.</p>
<p>Например, создадим имитацию прыгающего и отскакивающего шара:</p>
 <pre class="brush:xml;">
&lt;UserControl x:Class="TestApplication.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
    mc:Ignorable="d"
    d:DesignHeight="200" d:DesignWidth="250"&gt;
    &lt;UserControl.Triggers&gt;
        &lt;EventTrigger&gt;
            &lt;EventTrigger.Actions&gt;
                &lt;BeginStoryboard&gt;
                    &lt;Storyboard&gt;
                        &lt;DoubleAnimation Storyboard.TargetName="ellips" Storyboard.TargetProperty="(Canvas.Top)"
                                 From="160" To="0" AutoReverse="True" Duration="0:0:2.5" RepeatBehavior="Forever"/&gt;
                    &lt;/Storyboard&gt;
                &lt;/BeginStoryboard&gt;
            &lt;/EventTrigger.Actions&gt;
        &lt;/EventTrigger&gt;
    &lt;/UserControl.Triggers&gt;
    &lt;Grid x:Name="LayoutRoot"&gt;
        &lt;Grid Background="Black"&gt;
            &lt;Canvas Background="White" x:Name="canvas1" Height="170" Width="220"&gt;
                &lt;Ellipse Name="ellips" Fill="Red" Width="10" Height="10" Canvas.Top="160" Canvas.Left="130"  /&gt;
            &lt;/Canvas&gt;
        &lt;/Grid&gt;
    &lt;/Grid&gt;
&lt;/UserControl&gt;
</pre>
 <P>С помощью объекта Storyboard можно создавать и более комплексные анимации - например, сделаем кнопку, меняющую одновременно ширину, длину и цвет</P>
 <pre class="brush:xml;">&lt;UserControl.Triggers&gt;
        &lt;EventTrigger&gt;
            &lt;EventTrigger.Actions&gt;
                &lt;BeginStoryboard&gt;
                    &lt;Storyboard&gt;
                        &lt;DoubleAnimation Storyboard.TargetProperty="Width" From="80" To="150" Storyboard.TargetName="button1" 
                                         AutoReverse="True" RepeatBehavior="0:0:10" Duration="0:0:2" Completed="a_Completed" /&gt;
                        &lt;DoubleAnimation Storyboard.TargetProperty="Height" From="30" To="100" Storyboard.TargetName="button1" 
                                         AutoReverse="True" RepeatBehavior="0:0:10" Duration="0:0:2" /&gt;
                        &lt;ColorAnimation Storyboard.TargetName="buttonColor" Storyboard.TargetProperty="Color"
                                        From="{Binding ElementName=buttonColor, Path=Color}" To="DarkGreen"
                                         AutoReverse="True" RepeatBehavior="0:0:10" Duration="0:0:2" /&gt;
                    &lt;/Storyboard&gt;
                &lt;/BeginStoryboard&gt;
            &lt;/EventTrigger.Actions&gt;
        &lt;/EventTrigger&gt;
    &lt;/UserControl.Triggers&gt;
    &lt;Grid x:Name="LayoutRoot"&gt;
        &lt;Button x:Name="button1" Width="80" Height="30" Content="Кнопка" VerticalAlignment="Center" &gt;
            &lt;Button.Background&gt;
                &lt;SolidColorBrush x:Name="buttonColor" Color="Black" /&gt;
            &lt;/Button.Background&gt;
        &lt;/Button&gt;
    &lt;/Grid&gt;</pre>
<h3>Плавность анимации</h3>
<p>Для создания плавности анимации используется различные фукнции плавности или эластичности (Easing functions). Например, одна из них - <span class="bb">ElasticEase</span>. 
Она ее свойство <span class="bb">Oscillations</span> определяет количество колебательных движений во время анимации, а элемент как бы пружинится. 
Свойство <span class="bb">Springiness</span> позволяет установить жесткость, и чем больше это значение, тем быстрее затухают колебания.</p> 
<p>Еще одно свойство <span class="bb">EasingMode</span> указывает на режим эластичности и может принимать одно из трех значений:</p>
<ul>
<li><p><b>EaseIn</b> - функция плавности применяется в начале анимации</p></li>
<li><p><b>EaseOut</b> - функция плавности применяется в конце анимации</p></li>
<li><p><b>EaseInOut</b> - функция плавности применяется в начале и в конце анимации</p></li>
</ul>
<p>Например,</p>
<pre class="brush:xml;">
  &lt;UserControl.Triggers&gt;
        &lt;EventTrigger&gt;
            &lt;EventTrigger.Actions&gt;
                &lt;BeginStoryboard&gt;
                    &lt;Storyboard&gt;
                        &lt;DoubleAnimation Storyboard.TargetProperty="Width" From="80" To="150" Storyboard.TargetName="button1" 
                                         Duration="0:0:2"&gt;
                            &lt;DoubleAnimation.EasingFunction&gt;
                                &lt;ElasticEase EasingMode="EaseOut" Oscillations="5" Springiness="4"&gt;&lt;/ElasticEase&gt;
                            &lt;/DoubleAnimation.EasingFunction&gt;
                        &lt;/DoubleAnimation&gt;
                        &lt;DoubleAnimation Storyboard.TargetProperty="Height" From="30" To="100" Storyboard.TargetName="button1" 
                                         Duration="0:0:2" /&gt;
                    &lt;/Storyboard&gt;
                &lt;/BeginStoryboard&gt;
            &lt;/EventTrigger.Actions&gt;
        &lt;/EventTrigger&gt;
    &lt;/UserControl.Triggers&gt;
    &lt;Grid x:Name="LayoutRoot"&gt;
        &lt;Button x:Name="button1" Width="70" Height="25" Content="Кнопка" /&gt;
    &lt;/Grid&gt;</pre>
<p>Следующие функции плавности имеют только один параметр - <span class="bb">EasingMode</span> и создают эластичность анимации на основе некоторой функции:</p>
<ul>
<li><p><span class="bb">QuadraticEase</span> - функция плавности на основе квадратичной функции</p></li>
<li><p><span class="bb">CubicEase</span> - функция плавности на основе кубической функции</p></li>
<li><p><span class="bb">QuarticEase</span> - создает анимацию с помощью формулы f(t) = t^4.</p></li>
<li><p><span class="bb">QuinticEase</span> - создает анимацию с помощью формулы f(t) = t^5.</p></li>
</ul>
<p>Эти же функции можно задать в другой функии плавности - <span class="bb">PowerEase</span> - она также строится на некотой алгебраической функции, а свойство <span class="bb">Power</span> задает степень функции.</p>
<p>В Silverlight есть еще несколько встроенных функций плавности:</p>
<ul>
<li><p><span class="bb">BackEase</span> возвращает анимацию назад, а ее свойство <span class="bb">Amplitute</span> задает амплитуду возврата</p></li>
<li><p><span class="bb">BounceEase</span> создает эффект отскока, а свойство <span class="bb">Bounces</span> устанавливает количество отскоков.</p></li>
<li><p><span class="bb">CircleEase</span> создает анимацию с помощью цикличной функции.</p></li>
<li><p><span class="bb">SineEase</span> создает анимацию с помощью формулы синуса</p></li>
<li><p><span class="bb">ExponentialEase</span> создает анимацию с помощью экспоненциальной формулы.</p></li>
</ul>
<h4>Анимации по ключевым кадрам</h4>
<p>Все вышеприведенные типы анимаций, такие как ColorAnimation или DoubleAnimation, основывались на плавном смене значения. 
Есть еще второй род анимаций - анимации по ключевым кадрам, которые анимирует те же свойства, что и обычные анимации. Например, <span class="bb">ColorAnimationUsingKeyFrames</span> анимирует цвет, а <span class="bb">DoubleAnimationUsingKeyFrames</span> - различные числовые значение. </p>
<p>Анимации по ключевым кадрам имеет практически все те же свойства, что и обычные анимации. Основное отличие - анимации по кадрам имеют свойство <span class="bb">KeyFrames</span>, которое задают коллекцию кадров. 
Каждый кадр (KeyFrame) определяет значение для анимируемого свойства с помощью свойства <span class="bb">Value</span> и продолжительность кадра с помощью свойства <span class="bb">KeyTime</span></p>
<pre class="brush:xml;">
     &lt;UserControl.Triggers&gt;
        &lt;EventTrigger&gt;
            &lt;BeginStoryboard&gt;
                &lt;Storyboard&gt;
                    &lt;DoubleAnimationUsingKeyFrames Storyboard.TargetProperty="(Canvas.Top)"
                                        AutoReverse="True" RepeatBehavior="Forever" Storyboard.TargetName="ellipse1"&gt;
                        &lt;LinearDoubleKeyFrame KeyTime="0:0:1" Value="0" /&gt;
                        &lt;LinearDoubleKeyFrame KeyTime="0:0:1" Value="40" /&gt;
                        &lt;LinearDoubleKeyFrame KeyTime="0:0:1" Value="80" /&gt;
                        &lt;LinearDoubleKeyFrame KeyTime="0:0:1" Value="120" /&gt;
                    &lt;/DoubleAnimationUsingKeyFrames&gt;
                &lt;/Storyboard&gt;
            &lt;/BeginStoryboard&gt;
        &lt;/EventTrigger&gt;
    &lt;/UserControl.Triggers&gt;
    &lt;Grid x:Name="LayoutRoot"&gt;
        &lt;Canvas Background="Black" Height="180" Width="230"&gt;
            &lt;Ellipse Name="ellipse1" Width="15" Height="15" Canvas.Top="160" Canvas.Left="120"&gt;
                &lt;Ellipse.Fill&gt;
                    &lt;RadialGradientBrush RadiusX="1" RadiusY="1" GradientOrigin="0.3, 0.3"&gt;
                        &lt;GradientStop Color="White" Offset="0" /&gt;
                        &lt;GradientStop Color="Black" Offset="1" /&gt;
                    &lt;/RadialGradientBrush&gt;
                &lt;/Ellipse.Fill&gt;
            &lt;/Ellipse&gt;
        &lt;/Canvas&gt;
    &lt;/Grid&gt;
</pre>
<p>Тип кадра анимации определяется следующим образом: тип анимации задает тип изменяемого значения, например, <code>ColorAnimationUsingKeyFrames</code> - изменяемое значение типа <code>Color</code>. 
Тип кадра состоит из трех частей: вид кадра, например, линейный (Linear), тип изменяемого значения, и ключевого слова <code>KeyFrame</code>. То есть выше тип кадра был <code>LinearColorKeyFrame</code>. </p>
<p>Кроме линейных есть еще несколько видов кадров анимации:</p>
<ul>
<li><p>Дискретные кадры, например, <span class="bb">DiscreteColorKeyFrame</span>, они обеспечивают резкую смену кадров.</p></li>
<li><p>Кадры, на основе сплайнов, например, <span class="bb">SplineDoubleKeyFrame</span>. В этом случае анимация строиться на основе кривой Безье. 
Свойство <span class="bb">KeySpline</span> определяет начальную и конечную точки участка сплайна. При чем начальная точка сплайна находится в начале координат (0,0), а конечная - в конце (1,1). 
Получаемый сплайн является отношением между временем (координата X) и анимируемым значением (координата Y). </p></li>
</ul>
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


<div class="nav"><p><a href="10.php">Назад</a><a href="./">Содержание</a><a href="11.2.php">Вперед</a></p></div></div>
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
				<li class="closed"><span class="folder">Глава 1. Введение в Silverlight</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/1.1.php">Начало работы с Silverlight</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/1.2.php">Создание первого приложения</a></span></li>
					</ul>
				</li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/2.php">Глава 2. XAML в Silverlight</a></span></li>
				<li class="closed"><span class="folder">Глава 3. Компоновка</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/3.1.php">Стандартные элементы компоновки</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/3.2.php">Создание элемента компоновки</a></span></li>
					</ul>
				</li>
				<li class="closed"><span class="folder">Глава 4. Элементы управления</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.0.php">Обзор элементов управления</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.1.php">Элементы управления содержимым</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.2.php">Специальные контейнеры</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.3.php">Текстовые элементы в Silverlight</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.4.php">Управление списками в Silverlight</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.5.php">Элементы, основанные на диапазонах значений</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.6.php">Работа с датами в Silverlight</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/4.7.php">Работа с изображениями</a></span></li>
					</ul>
				</li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/5.php">Глава 5. Приложение и класс Application</a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/6.php">Глава 6. Кисти и эффекты</a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/7.php">Глава 7. Ресурсы</a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/8.php">Глава 8. Стили</a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/9.php">Глава 9. Привязка </a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/10.php">Глава 10. Шаблоны элементов управления</a></span></li>
				<li class="closed"><span class="folder">Глава 11. Анимации и трансформации</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/11.1.php">Анимации</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/11.2.php">Трансформации</a></span></li>
					</ul>
				</li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/12.php">Глава 12. Двухмерная графика</a></span></li>
				<li><span class="folder"><a href="//metanit.com/sharp/silverlight/13.php">Глава 13. Работа с мультимедиа</a></span></li>
				<li class="closed"><span class="folder">Глава 14. Трехмерная графика</span>
					<ul>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/14.1.php">Настройка среды и начало работы</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/14.2.php">Создание первого 3D-приложения</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/14.3.php">Создание текстурированного куба</a></span></li>
						<li><span class="file"><a href="//metanit.com/sharp/silverlight/14.4.php">Silverlight 5 Toolkit</a></span></li>
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
	
	$("li:contains('Глава 11.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 11.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
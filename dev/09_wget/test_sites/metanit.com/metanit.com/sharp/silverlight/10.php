<!DOCTYPE html>
<html >
<head>
<title>Шаблоны элементов управления (Silverlight)</title>
<meta charset="utf-8" />
<meta name="description" content="Использование шаблонов для изменения внешнего вида и структуры элементов Silverlight">
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
<h1>Шаблоны элементов управления</h1><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Несмотря на то, что стили существенно облегчают манипулирование внешним видом элементов управления, гораздо более сильным средством в плане визуализации являются шаблоны. 
В отличие от стилей шаблоны помогают полностью менять модель визуализации элемента.<p>
<p>Возмжно, вы замечали, что при назначении цвета кнопке она не полностью принимает цвет, а использует градиент. Так получается, потому что 
для кнопки определен соответствующий шаблон. Чтобы исправить положение, мы можем использовать следующее объявление кнопки:</p>
<pre class="brush:xml;">
        &lt;Button VerticalAlignment="Top" Height="30" Template="{x:Null}"&gt;
            &lt;StackPanel Background="Red"&gt;
                &lt;TextBlock Text="Кнопка" FontSize="12" TextAlignment="Center" Margin="0 6 0 0" /&gt;
            &lt;/StackPanel&gt;
        &lt;/Button&gt;</pre>
<p>Свойство <span class="bb">Template</span> элемента как раз и указывает на используемый шаблон. Чтобы шаблон исключить применение стандартного шаблона мы 
указали выражение <span class="bb">{x:Null}</span></p>
<img src="silpics/10.1.jpg" />
<p>Шаблон элемента - это своего рода визуальный скелет элемента управления. В предыдущем примере мы по сути не использовали шаблоны, однако нередко 
возникают ситуации, когда надо изменить визуальный облик элемента коренным образом, например, сделать его округлым или другой формы и т.д.</p>
<p>К примеру создадим округлые элементы Button и TextBox:</p>
<pre class="brush:xml;">
&lt;UserControl.Resources&gt;
        &lt;ControlTemplate TargetType="Button" x:Key="btTemplate"&gt;
            &lt;Border Name="RootElement" CornerRadius="25" Background="{TemplateBinding Background}"&gt;
                &lt;Grid Margin="0" Background="Transparent"&gt;
                    &lt;ContentPresenter HorizontalAlignment="{TemplateBinding HorizontalContentAlignment}"
										VerticalAlignment="{TemplateBinding VerticalContentAlignment}"/&gt;                 
                &lt;/Grid&gt;
            &lt;/Border&gt;
        &lt;/ControlTemplate&gt;
        &lt;ControlTemplate x:Key="tbTemplate"&gt;
            &lt;Border Name="Border" CornerRadius="25" Padding="2"
                BorderThickness="2" BorderBrush="Blue" Background="White"&gt;
            &lt;/Border&gt;
        &lt;/ControlTemplate&gt;
    &lt;/UserControl.Resources&gt;
    &lt;Grid Background="Black"&gt;
       &lt;Button Width="80" Height="30" Template="{StaticResource btTemplate}" Margin="0 50 0 0" Content="Нажми" Background="Red" Click="Button_Click" /&gt;
        &lt;TextBox x:Name="textBox1"  Width="210" Height="25" Template="{StaticResource tbTemplate}" Margin="0 0 0 90"  /&gt;
    &lt;/Grid&gt;
&lt;/UserControl&gt;
</pre>
<img src="silpics/10.2.jpg" />
<p>Что в данном случае мы делаем? Сначала объявляется шаблон - создаем объект <span class="bb">ControlTemplate</span>. 
Подобно стилям он объявляется в ресурсах. Как и всякому ресурсу присваиваем ему ключ. Сначала определяем корневой элемент - <span class="bb">Border</span>. 
Так как элемент начинается с границ, то и объект Border является корневым, в который вложены остальные элементы. 
Объект <span class="bb">Grid</span> является дочерним по отношению к корневому элементу и содержит объект <b>ContentPresenter</b>. 
У объекта <span class="bb">Border</span> определяем свойство <code>CornerRadius</code>, отвечающее за закругление границ объекта. Затем определяем цвет фона  элемента. 
Это делается с помощью привязки и ключевого слова <span class="bb">TemplateBinding</span>. Оно привязывает данное свойство к свойству объекта, для которого определен шаблон. 
В данном случае фон элемента Border привязывается к фону кнопки, что обеспечивает шаблонам гибкость в использовании. 
У элемента Grid определяем фон как <code>Transparent</code>. Если бы мы задали какой-то конкретный цвет, то кнопка приобрела бы квадратный вид. Затем определяем элемент ContentPresenter. 
Он задает параметры содержимого. Для него также определяем привязку к свойствам кнопки, в частности задаем выравнивание по горизонтали и вертикали.</p>
<p>Таким же образом поступаем для элемента TextBox.</p>
<p>Подключение к шаблону происходит с помощью свойства <span class="bb">Template</span> элемента с указанием ресурса.</p>
<p>Есть еще два способа задания шаблонов. Один - непосредственно в разметке контрола:</p>
<pre class="brush:xml;">
       &lt;TextBox x:Name="textBox1"  Width="210" Height="25" Margin="0 0 0 90" &gt;
            &lt;TextBox.Template&gt;
                &lt;ControlTemplate&gt;
                    &lt;Border Name="Border" CornerRadius="25" Padding="2"
                BorderThickness="2" BorderBrush="Blue" Background="White"&gt;
                    &lt;/Border&gt;
                &lt;/ControlTemplate&gt;
            &lt;/TextBox.Template&gt;
        &lt;/TextBox&gt;
</pre>
<p>А второй - создание шаблона в стиле:</p>
<pre class="brush:xml;">
 &lt;UserControl.Resources&gt;
        &lt;Style x:Key="buttonStyle" TargetType="Button"&gt;
            &lt;Setter Property="Template"&gt;
                &lt;Setter.Value&gt;
					&lt;ControlTemplate TargetType="Button"&gt;
						&lt;Border Name="RootElement" CornerRadius="25" Background="{TemplateBinding Background}" &gt;
							&lt;Grid Margin="0" Background="Transparent"&gt;
								&lt;ContentPresenter 
								HorizontalAlignment="{TemplateBinding HorizontalContentAlignment}"
								VerticalAlignment="{TemplateBinding VerticalContentAlignment}"/&gt;  
							&lt;/Grid&gt;
						&lt;/Border&gt;
					&lt;/ControlTemplate&gt;
				&lt;/Setter.Value&gt;
			&lt;/Setter&gt;
		&lt;/Style&gt;
	&lt;/Window.Resources&gt;
		.....
	&lt;UserControl Width="80" Height="30" Style="{StaticResource buttonStyle}" Margin="0 50 0 0" Content="Нажми" Background="Blue" /&gt;
</pre>
<h3>Состояние элемента управления и шаблоны</h3>
<p>Элемент управления обладает определенными состояниями, которые могут влиять на визуальное отображение. 
Например, для кнопки это может быть состояние <span class="bb">MouseOver</span>, когда указатель мыши наведен на кнопку, или <span class="bb">Pressed</span>, когда кнопка нажата. 
Чтобы изменить внешний вид в зависимости от состояния элемента используется объект <b>ViewState</b>. 
Объект ViewState через другой объект - <span class="bb">Storyboard</span> позволяет определить анимацию, изменяющую внешний вид элемента.</p>
<pre class="brush:xml;">
      &lt;ControlTemplate TargetType="Button" x:Key="btTemplate"&gt;
            &lt;Border Name="RootElement" BorderThickness="3" BorderBrush="Black" CornerRadius="25" &gt;
                &lt;Border.Background&gt;
                    &lt;SolidColorBrush x:Name="BorderColor" Color="Blue" /&gt;
                &lt;/Border.Background&gt;
                &lt;Grid&gt;
                    &lt;ContentPresenter 
                    HorizontalAlignment="{TemplateBinding HorizontalContentAlignment}"
                    VerticalAlignment="{TemplateBinding VerticalContentAlignment}"/&gt;
                &lt;/Grid&gt;
                &lt;VisualStateManager.VisualStateGroups&gt;
                    &lt;VisualStateGroup Name="CommonStates"&gt;
                        &lt;VisualState Name="MouseOver"&gt;
                            &lt;Storyboard&gt;
                                &lt;ColorAnimation Storyboard.TargetName="BorderColor"
                            Storyboard.TargetProperty="Color" 
                            To="Red" /&gt;
                            &lt;/Storyboard&gt;
                        &lt;/VisualState&gt;
                        &lt;VisualState Name="Normal"&gt;
                            &lt;Storyboard&gt;
                                &lt;ColorAnimation Storyboard.TargetName="BorderColor" 
                            Storyboard.TargetProperty="Color" 
                            To="Blue" /&gt;
                            &lt;/Storyboard&gt;
                        &lt;/VisualState&gt;
                    &lt;/VisualStateGroup&gt;
                &lt;/VisualStateManager.VisualStateGroups&gt;
            &lt;/Border&gt;
        &lt;/ControlTemplate&gt;
</pre>
<p>При применении данного шаблона при наведении мыши на кнопку она будет приобретать красный цвет, если мышь покинет пределы кнопки, цвет опять станет синим.</p>
<p>За счет чего это происходит? Корневой элемент Border имеет объект <span class="bb">VisualStateManager</span>, у которого, в свою очередь, есть коллекция объектов <span class="bb">VisualStateGroup</span>. 
В данном случае у нас используется только один объект VisualStateGroup - CommonStates. Данная группа содержит такие состояния как <span class="bb">MouseOver</span>, <span class="bb">Pressed</span>, <span class="bb">Normal</span>. 
А объекты VisualState как раз и задают состояния и применяемую к ним анимацию. Анимацией управляет объект <span class="bb">Storyboard</span>. 
Его свойство <span class="bb">TargetName</span> указывает на имя объекта, который анимируется, а <span class="bb">TargetProperty</span> - свойство объекта, которое анимируется.</p>
<p>Если объект VisualState используется для визуализации элемента в определенном состоянии, то объект <span class="bb">VisualTransition</span> визуализирует элемент в момент перехода от одного состояния в другое. 
Так если мы задали два визуальных состояния, то мы можем определить визуальный переход из одного состояния в другое:</p>
<pre class="brush:xml;">
&lt;ControlTemplate TargetType="Button" x:Key="btTemplate"&gt;
            &lt;Border Name="RootElement" BorderThickness="3" BorderBrush="Black" CornerRadius="25" &gt;
                &lt;Border.Background&gt;
                    &lt;SolidColorBrush x:Name="BorderColor" Color="Blue" /&gt;
                &lt;/Border.Background&gt;
                &lt;Grid&gt;
                    &lt;ContentPresenter 
                    HorizontalAlignment="{TemplateBinding HorizontalContentAlignment}"
                    VerticalAlignment="{TemplateBinding VerticalContentAlignment}"/&gt;
                &lt;/Grid&gt;
                &lt;VisualStateManager.VisualStateGroups&gt;
                    &lt;VisualStateGroup Name="CommonStates"&gt;
                        &lt;VisualState Name="MouseOver"&gt;
                            &lt;Storyboard&gt;
                                &lt;ColorAnimation Storyboard.TargetName="BorderColor"
                            Storyboard.TargetProperty="Color" 
                            To="Red" /&gt;
                            &lt;/Storyboard&gt;
                        &lt;/VisualState&gt;
                        &lt;VisualState Name="Normal"&gt;
                            &lt;Storyboard&gt;
                                &lt;ColorAnimation Storyboard.TargetName="BorderColor" 
                            Storyboard.TargetProperty="Color" 
                            To="Blue" /&gt;
                            &lt;/Storyboard&gt;
                        &lt;/VisualState&gt;
                        &lt;VisualStateGroup.Transitions&gt;
                            &lt;VisualTransition From="MouseOver" To="Normal" 
                                    GeneratedDuration="0:0:1.5"&gt;
                                &lt;Storyboard&gt;
                                    &lt;ColorAnimationUsingKeyFrames Storyboard.TargetName="BorderColor" 
                                                                  Storyboard.TargetProperty="Color" FillBehavior="HoldEnd"&gt;
                                        &lt;ColorAnimationUsingKeyFrames.KeyFrames&gt;
                                            &lt;LinearColorKeyFrame Value="Yellow" KeyTime="0:0:0.5" /&gt;
                                            &lt;LinearColorKeyFrame Value="Red" KeyTime="0:0:0.5" /&gt;
                                            &lt;LinearColorKeyFrame Value="Green" KeyTime="0:0:0.5" /&gt;
                                        &lt;/ColorAnimationUsingKeyFrames.KeyFrames&gt;
                                    &lt;/ColorAnimationUsingKeyFrames&gt;
                                &lt;/Storyboard&gt;
                            &lt;/VisualTransition&gt;
                        &lt;/VisualStateGroup.Transitions&gt;
                    &lt;/VisualStateGroup&gt;
                &lt;/VisualStateManager.VisualStateGroups&gt;
            &lt;/Border&gt;
        &lt;/ControlTemplate&gt;
</pre>
<p>Дополнительную информацию о том, как формируются шаблоны у тех или иных элементов управления, посетив страницу на сайте msdn 
<a href="http://msdn.microsoft.com/en-us/library/cc278075(v=vs.95).aspx">Control Styles and Template</a>.</p>
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


<div class="nav"><p><a href="9.php">Назад</a><a href="./">Содержание</a><a href="11.1.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава .')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава .')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
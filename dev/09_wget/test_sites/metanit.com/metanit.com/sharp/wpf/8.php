<!DOCTYPE html>
<html >
<head>
<title>Кисти в WPF</title>
<meta charset="utf-8" />
<meta name="description" content="Использование кистей SolidColorBrush, LinearGradientBrush, RadialGradientBrush, ImageBrush, DrawingBrush, VisualBrush для установки свойств Background, Foreground и BorderBrush">
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
<h1>Кисти</h1><div class="date">Последнее обновление: 31.10.2015</div>

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

<P>Рассматривая выше элементы и их свойства, были упомянуты такие свойства, как <span class="bb">Background</span> и <span class="bb">Foreground</span> и назначение им определенного цвета <code>Background="Blue"</code>. 
Но если посмотреть чуть глубже, то для установки цвета нам нужен объект класса System.Windows.Media.Brush. 
Значение "Blue" в данном случае является свойством класса Brushes, которое инкапсулирует объект <code>SolidColorBrush</code>. Например, в коде мы можем установить цвет так <span class="bb">button1.Background=Brushes.Blue</span>
<br>А класс SolidColorBrush является кистью или наследником класса Brush, с помощью которого, таким образом, можно устанавливать свойства <span class="bb">Background</span>, <span class="bb">Foreground</span> и <span class="bb">BorderBrush</span>.</p>
<p>WPF поддерживает целый ряд кистей:</p>
<ul>
<li><p><span class="bb">SolidColorBrush</span> заливает содержимое сплошным цветом</p></li>
<li><p><span class="bb">LinearGradientBrush</span> - градиентная кисть, представляет плавный переход от одного цвета к другому</p></li>
<li><p><span class="bb">RadialGradientBrush</span>- градиентная кисть, плавно распределяющая заданные цвета от центральной точки к внешним границам.</p></li>
<li><p><span class="bb">ImageBrush</span> в качестве заполнителя использует не цвет, а изображение</p></li>
<li><p><span class="bb">DrawingBrush</span> с помощью свойства Drawing опеределяет рисунок, включающий, геометрические фигуры, другие элементы и т.д., служащее заполнителем.</p></li>
<li><p><span class="bb">VisualBrush</span> в качестве заполнителя имеет какой-либо элемент управления или его часть</p></li>
</ul>
<h3>SolidColorBrush</h3>
<p>Задает цвет для сплошной заливки:</p>
<pre class="brush:xml;">&lt;TextBlock Height="20" Width="160" VerticalAlignment="Top" TextAlignment="Center" Text="SolidColorBrush"&gt;
            &lt;TextBlock.Background&gt;
                &lt;SolidColorBrush Color="Blue" Opacity="0.8"  /&gt;
            &lt;/TextBlock.Background&gt;
            &lt;TextBlock.Foreground&gt;
                &lt;SolidColorBrush Color="White"/&gt;
            &lt;/TextBlock.Foreground&gt;
&lt;/TextBlock&gt;</pre>
<p>Использование SolidColorBrush  в коде:</p>
<pre class="brush: c#;">button1.Background = new SolidColorBrush(Colors.Blue);
//или так - это цвет #cfffff
button1.Background = new SolidColorBrush(Color.FromRgb(207, 255, 255));</pre>
<h3>LinearGradientBrush</h3>
<p>Эта кисть создает плавный переход от одного цвета к другому. Для указания цвета и точек, от которых начинается переход, используется объект <span class="bb">GradientStop</span>. 
Его свойство <span class="bb">Color</span> указывает на цвет, а свойство <span class="bb">Offset</span>- на точку, с которой начинается переход.</p>
<pre class="brush:xml;">
&lt;Button Content="LinearGradientBrush" Canvas.Top="20" Canvas.Right="20" Width="110" Height="30"&gt;
                &lt;Button.Background&gt;
                    &lt;LinearGradientBrush StartPoint="0.5,1" EndPoint="0.5,0"&gt;
                        &lt;GradientStop Color="Black" Offset="0" /&gt;
                        &lt;GradientStop Color="White" Offset="1" /&gt;
                    &lt;/LinearGradientBrush&gt;
                &lt;/Button.Background&gt;
                &lt;Button.Foreground&gt;
                    &lt;LinearGradientBrush&gt;
                        &lt;GradientStop Color="Blue" Offset="1" /&gt;
                        &lt;GradientStop Color="Red" Offset="0.5" /&gt;
                        &lt;GradientStop Color="Yellow" Offset="0" /&gt;
                    &lt;/LinearGradientBrush&gt;
                &lt;/Button.Foreground&gt;
&lt;/Button&gt;
</pre>
<P>С помощью свойств StartPoint и EndPoint можно определить направление градиента, сделать горизонтальный градиент или градиент под углом.</P>
<h3>RadialGradientBrush</h3>
<p>Эта кисть заполняет элемент радиальным градиентом. Объект RadialGradientBrush также имеет коллекцию объектов <span class="bb">GradientStop</span>, задающих цвет и смещение. 
Кроме того, он позволяет задавать центр градиента с помощью свойства <span class="bb">GradientOrigin</span> </p>
<pre class="brush:xml;">&lt;Button Content="RadialGradientBrush" Canvas.Bottom="20" Canvas.Left="20" Width="110" Height="30"&gt;
                &lt;Button.Background&gt;
                    &lt;RadialGradientBrush GradientOrigin="0.4,0.1"&gt;
                        &lt;GradientStop Color="Black" Offset="1" /&gt;
                        &lt;GradientStop Color="White" Offset="0" /&gt;
                    &lt;/RadialGradientBrush&gt;
                &lt;/Button.Background&gt;
                &lt;Button.Foreground&gt;
                    &lt;RadialGradientBrush Center="0.4,0.4"  SpreadMethod="Reflect"&gt;
                        &lt;GradientStop Color="Black" Offset="1" /&gt;
                        &lt;GradientStop Color="Yellow" Offset="0.2" /&gt;
                    &lt;/RadialGradientBrush&gt;                
                &lt;/Button.Foreground&gt;
&lt;/Button&gt;</pre>
<p>Также RadialGradientBrush позволяет ограничить область градиента с помощью свойств <span class="bb">RadiusX</span> и <span class="bb">RadiusY</span></p>
<pre class="brush:xml;">&lt;Ellipse Canvas.Top="90" Canvas.Left="120" Width="60" Height="60"&gt;
                &lt;Ellipse.Fill&gt;
                    &lt;RadialGradientBrush RadiusX="0.6" RadiusY="0.8" GradientOrigin="0.3,0.3"&gt;
                        &lt;GradientStop Color="Red" Offset="1" /&gt;
                        &lt;GradientStop Color="White" Offset="0" /&gt;
                    &lt;/RadialGradientBrush&gt;
                &lt;/Ellipse.Fill&gt;
&lt;/Ellipse&gt;</pre>
<h3>ImageBrush</h3>
<p>Эта кисть использует изображение в качестве фона. Источник устанавливается свойством <strong>ImageSource</strong>. Свойство <span class="bb">Stretch</span> задает способ заполнения элемента изображением - 
если оно равно <span class="bb">Fill</span> (по умолчанию), то изображение заполняет весь элемент, растягиваясь, если это нужно. Если Stretch="Uniform", то изображение масштабируется пропорционально размеру элемента и по краям могут образоваться пустые места, не заполненные изображением. </p>
<pre class="brush:xml;">&lt;ImageBrush ImageSource="D:\Images\image.jpg" 
                            Stretch="Uniform" /&gt;</pre>
                            <p>Пример использования кистей:</p>
<img src="wpfpics/8.1.jpg" />
<p>Среди прочих свойств ImageBrush следует отметить свойство <strong>Viewbox</strong>. Оно применяется для выреза какой-то части изображения. 
Его первый параметр служит для установки x-координаты изображения, а второй параметр - y-координаты. Они находятся в пределах от нуля до единицы, и чтобы получить реальные координаты изображения, надо умножить первый параметр на ширину, а второй параметр - на высоту изображения.
Третий и четвертый параметр указывают соответственно на ширину и высоту  вырезаемого изображения. Так ниже в примере, начальная точка выреза изображения имеет координаты: 
0.5*ширина_изображения, 0.45 * высота_изображения. Вырезается 30% от оставшейся ширины и 20% от оставшейся длины: </p>
<pre class="brush:xml;">&lt;Grid x:Name="grid1" Background="Lavender"&gt;
        &lt;Grid.RowDefinitions&gt;
            &lt;RowDefinition Height="*" /&gt;
            &lt;RowDefinition Height="*" /&gt;
        &lt;/Grid.RowDefinitions&gt;
        &lt;Image Source="D:\Images\Image.jpg" Grid.Row="0" 
        HorizontalAlignment="Center" /&gt;
       &lt;Canvas Grid.Row="1" &gt;
            &lt;Canvas.Background&gt;
                &lt;ImageBrush ImageSource="D:\Images\Image.jpg" 
                            Stretch="Uniform" Viewbox="0.5,0.45,0.3,0.2" /&gt;
            &lt;/Canvas.Background&gt;
        &lt;/Canvas&gt;
    &lt;/Grid&gt;</pre>
    <img src="wpfpics/8.2.jpg" />
    <p>ImageBrush также позволяет нам многократно отобразить изображение на элементе и проделывать с ним некоторые преобразования. 
    Для этого класс ImageBrush имеет свойство <span class="bb">Viewport</span>. Оно похоже на Viewbox, также задает четрые параметра, только они указывают на координаты прямоугольника Viewbox на элементе управления.
     Первый и второй параметр указывают на начальную координату этого прямоугольника, а третий и четвертый - на конечную точку. 
     Реальные координаты получаются путем умножения параметров на длину и ширину элемента.</p> 
     <p>Кроме того, свойство <span class="bb">TileMode</span> позволяет задать режим заполнения элемента изображением. Оно имеет четыре варианта:</p>
     <ul><li><p><span class="bb">Tile</span> - изображение многократно повторяется на элементе, пока не заполнит все пространство.</p></li>
     <li><p><span class="bb">FlipX</span> - изображение повторяется по оси X, и каждый второй столбец является зеркальным отображением предыдущего</p></li>
     <li><p><span class="bb">FlipY</span> - изображение повторяется по оси Y, и каждая вторая строка является зеркальным отображением предыдущей</p></li>
     <li><p><span class="bb">FlipXY</span>- каждое изображение зеркально отображается как по оси Х, так и по оси Y.</p></li>
     <li><p><span class="bb">None</span> - создается единичное изображение (по умолчанию)</p></li>
     </ul>
     <p>Пример</p>
     <pre class="brush:xml;">&lt;Grid.Background&gt;
            &lt;ImageBrush ImageSource="D:\Images\Image.jpg" 
                        Viewport="0,0,0.25,0.25" TileMode="FlipXY" /&gt;
        &lt;/Grid.Background&gt;</pre>
        <img src="wpfpics/8.3.jpg" />
<h3>DrawingBrush</h3>
<p>DrawingBrush - более сложная кисть. Ее рисунок может содержать как отдельные изображения, так и сложные рисунки с применением различных геметрических форм. <p>
<p>Предыдущий пример можно было сделать с помощью DrawingBrush:</p>
<pre class="brush:xml;">&lt;DrawingBrush TileMode="FlipXY" Viewport="0,0,0.25,0.25"&gt;
           &lt;DrawingBrush.Drawing&gt;
           		&lt;ImageDrawing  ImageSource="D:\Images\Image.jpg" Rect="0,0,1,1" /&gt;
           &lt;/DrawingBrush.Drawing&gt;
&lt;/DrawingBrush&gt;
</pre>
<p>DrawingBrush использует те же свойства, что и ImageBrush - Viewport, Viewbox.</p>
<p>DrawingBrush имеет несколько вариантов рисунка:<p>
<ul><li><p><span class="bb">ImageDrawing</span> - заполнителем кисти является изображение.</p></li>
     <li><p><span class="bb">GeometryDrawing</span> - кисть формируется на основе рисунка, составленного каким-нибудь геометрическим примитивом (прямоугольником, линией, эллипсом)</p></li>
     <li><p><span class="bb">VideoDrawing</span> - кисть формируется на основе видеоресурса.</p></li>
     <li><p><span class="bb">GlyphRunDrawing</span></p></li>
     </ul>
 <p>При необходимости сочетания нескольких вариантов, используется свойство <span class="bb">DrawingGroup</span> класса Drawing.</p>
 <pre class="brush:xml;">
 &lt;DrawingBrush TileMode="FlipXY" Viewport="0,0,0.25,0.25"&gt;
         &lt;DrawingBrush.Drawing&gt;
               &lt;DrawingGroup&gt;
                     &lt;GeometryDrawing Brush="Aquamarine"&gt;
                         &lt;GeometryDrawing.Pen&gt;
                             &lt;Pen Brush="Black" /&gt;
                         &lt;/GeometryDrawing.Pen&gt;
                         &lt;GeometryDrawing.Geometry&gt;
                             &lt;EllipseGeometry RadiusX="30" RadiusY="30" Center="150,125" /&gt;
                         &lt;/GeometryDrawing.Geometry&gt;
                     &lt;/GeometryDrawing&gt;
                     &lt;GeometryDrawing Brush="Aquamarine"&gt;
                         &lt;GeometryDrawing.Pen&gt;
                             &lt;Pen Brush="Black" /&gt;
                         &lt;/GeometryDrawing.Pen&gt;
                         &lt;GeometryDrawing.Geometry&gt;
                             &lt;LineGeometry EndPoint="150,125" /&gt;
                         &lt;/GeometryDrawing.Geometry&gt;
                     &lt;/GeometryDrawing&gt;
                &lt;/DrawingGroup&gt;
         &lt;/DrawingBrush.Drawing&gt;
&lt;/DrawingBrush&gt;
</pre>
<img src="wpfpics/8.4.jpg" />
<h3>VisualBrush</h3>
<p>Эта кисть при помощи свойства <span class="bb">Visual</span> создает привязку к определенному элементу, копируя весь его фон или его часть.</p>
<p>VisualBrush, как и кисти DrawingBrush и ImageBrush, обладает свойствами Viewport, Viewbox и TileMode, позволяющие проводить все те же преобразования, что были рассмотрены для этих кистей:</p>
<pre class="brush:xml;">&lt;Grid x:Name="grid1" Background="Lavender"&gt;
        &lt;Button Name="button1" Content="VisualBrush" Background="Black" FontWeight="Black" 
              Foreground="White" HorizontalAlignment="Center" VerticalAlignment="Top"
                Width="100" Height="30"/&gt;
        &lt;TextBlock HorizontalAlignment="Center" VerticalAlignment="Center" 
                   Width="120" Height="35"&gt;
            &lt;TextBlock.Background&gt;
                &lt;VisualBrush Visual="{Binding ElementName=button1}" /&gt;
            &lt;/TextBlock.Background&gt;
        &lt;/TextBlock&gt;
        &lt;TextBlock HorizontalAlignment="Center" VerticalAlignment="Bottom" 
                   Width="140" Height="50"&gt;
            &lt;TextBlock.Background&gt;
                &lt;VisualBrush Visual="{Binding ElementName=button1}" Viewbox="0.1,0.1,0.3,0.7" /&gt;
            &lt;/TextBlock.Background&gt;
        &lt;/TextBlock&gt;
    &lt;/Grid&gt;</pre>
    <img src="wpfpics/8.5.jpg" />
<br>
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


<div class="nav"><p><a href="7.2.php">Назад</a><a href="./">Содержание</a><a href="9.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в WPF</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/1.php">Особенности платформы WPF</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/1.2.php">Начало работы с WPF</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. XAML</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/2.php">Введение в язык XAML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/2.2.php">Файлы отделенного кода</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/2.3.php">Сложные свойства и конвертеры типов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/2.4.php">Пространства имен из C# в XAML</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Компоновка</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/4.php">Введение в компоновку</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/4.2.php">Grid</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/4.3.php">GridSplitter</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/4.4.php">StackPanel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/4.5.php">DockPanel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/4.6.php">WrapPanel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/4.7.php">Canvas</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/4.8.php">Свойства компоновки элементов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Элементы управления</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.1.php">Обзор элементов управления и их свойств</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.19.php">Элементы управления содержимым</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.2.php">Кнопки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.18.php">CheckBox и RadioButton</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.3.php">Всплывающие подсказки ToolTip и Popup</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.4.php">Контейнеры GroupBox и Expander</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.20.php">ScrollViewer. Создание прокрутки</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.5.php">Текстовые элементы управления</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.6.php">Элементы управления списками</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.7.php">ListBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.8.php">ComboBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.9.php">ListView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.10.php">Создание вкладок и TabControl</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.11.php">Меню</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.12.php">ToolBar</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.13.php">TreeView</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.14.php">DataGrid</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.15.php">ProgressBar и Slider</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.16.php">Работа с датами. Calendar и DatePicker</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/5.17.php">Работа с изображениями. Image и InkCanvas</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 5. DependencyObject и свойства зависимостей</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/13.php">Введение в Dependency Property</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/13.2.php">Прикрепляемые свойства / attached property</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/13.3.php">Создание свойств зависимостей</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 6. Модель событий в WPF</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/6.php">Маршрутизация событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/6.2.php">События клавиатуры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/6.3.php">События мыши и фокуса</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 7. Команды</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/7.1.php">Основы команд</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/7.2.php">Создание новых команд</a></span></li>
		</ul>
	</li>
	<li><span class="folder"><a href="//metanit.com/sharp/wpf/8.php">Глава 8. Кисти</a></span></li>
	<li class="closed"><span class="folder">Глава 9. Ресурсы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/9.php">Концепция ресурсов в WPF</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/9.2.php">Статические и динамические ресурсы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/9.3.php">Словари ресурсов</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 10. Привязка</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/11.php">Введение в привязку данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/11.2.php">Интерфейс INotifyPropertyChanged</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/11.3.php">Форматирование привязки и конвертеры значений</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 11. Стили, триггеры и темы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/10.php">Стили</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/10.2.php">Триггеры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/10.3.php">Темы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 12. Приложение и класс Application</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/3.php">Класс Application</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/3.2.php">Работа с классом Application</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/3.3.php">Ресурсы приложения</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 13. Шаблоны элементов управления</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/12.php">Логическое и визуальное дерево</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/12.2.php">Создание и использование шаблонов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/12.3.php">Визуальные состояния</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/12.4.php">Круглое окно</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 14. Работа с данными</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.1.php">Привязка данных и контекст данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.2.php">Работа с коллекциями данных. ObservableCollection</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.3.php">ItemTemplate и DataTemplate</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.4.php">ItemsPanel. Установка панели элементов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.5.php">Виртуализация</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.6.php">Провайдеры данных. ObjectDataProvider</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.7.php">XmlDataProvider</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.8.php">Иерархические данные и HierarchicalDataTemplate</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/14.php">Валидация данных</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 15. Взаимодействие с базой данных</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/19.1.php">Создание базы данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/19.2.php">Подключение к базе данных</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/19.3.php">Работа с Entity Framework</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 16. Документы</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/15.php">Потоковые документы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/15.2.php">Контейнеры потоковых документов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/15.3.php">RichTextBox и редактирование документов</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/15.4.php">Фиксированные документы</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/15.5.php">Аннотации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 17. Работа с графикой</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/17.php">Фигуры</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/17.2.php">Пути и геометрии</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/17.3.php">PathGeometry</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/17.4.php">Трансформации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 18. Трехмерная графика</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/18.1.php">Основы работы с трехмерной графикой</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/18.3.php">Определение трехмерного объекта</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/18.4.php">Освещение</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/18.5.php">Камера</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/18.2.php">Создание куба. Текстурирование</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/18.6.php">Трехмерные трансформации и анимации</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/18.7.php">Взаимодействие с трехмерными объектами</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 19. Анимация</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/16.php">Основы анимаций</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/16.2.php">Анимация в XAML</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/16.3.php">Анимации по ключевым кадрам</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/16.4.php">Анимация пути</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/16.5.php">Плавность анимации</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 20. Окна</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/20.1.php">Класс Window</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/20.2.php">Взаимодействие между окнами</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/20.3.php">Диалоговые окна</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 21. Паттерн MVVM</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/22.1.php">Определение паттерна MVVM</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/22.2.php">Реализация MVVM. ViewModel</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/22.3.php">Команды в MVVM</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/22.4.php">Передача параметров команде</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/22.5.php">Взаимодействие команд и событий</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/22.6.php">Работа с диалоговыми окнами</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 22. SQLite в WPF</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/21.1.php">Работа с SQLite</a></span></li>
			<li><span class="file"><a href="//metanit.com/sharp/wpf/21.2.php">MVVM и SQLite</a></span></li>
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
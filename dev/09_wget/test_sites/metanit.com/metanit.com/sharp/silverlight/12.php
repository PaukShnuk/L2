<!DOCTYPE html>
<html >
<head>
<title>Двухмерная графика (Silverlight)</title>
<meta charset="utf-8" />
<meta name="description" content="Создание двухмерной графики в xaml и в коде, использование фигур и объектов класса Geometry">
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
<h1>Двухмерная графика</h1><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Одним из способов построения двухмерной графики в окне - это использование фигур. Фигуры фактически являются обычными элементами как например кнопка или текстовое поле. 
	К фигурам относят такие элементы как <span class="bb">Polygon</span> (Многоугольник), <span class="bb">Ellipse</span> (представляет собой эллипс), <span class="bb">Rectangle</span> (прямоугольник), <span class="bb">Line</span> (обычная линия), <span class="bb">Polyline</span> - включает несколько линий. 
	Все они наследуются от класса <span class="bb">Shape</span>, который определяет ряд общих свойств:</p>
	<UL class="wotype">
	<li><p><span class="bb">Fill</span> заполняет фон фигуры с помощью кисти - аналогичен свойству <span class="bb">Background</span> у прочих элементов</p></li>
	<li><p><span class="bb">Stroke</span> задает кисть, которая отрисовывает границу фигуры - аналогичен свойству <span class="bb">BorderBrush</span> у прочих элементов</p></li>
	<li><p><span class="bb">StrokeThikness</span> задает толщину границы фигуры - аналогичен свойству <span class="bb">BorderThikness</span> у прочих элементов</p></li>
	<li><p><span class="bb">StrokeStartLineCap</span> и <span class="bb">StrokeEndLineCap</span> задают для незамкнутых фигур (Line) контур в начале и в конце линии соответственно </p></li>
	<li><p><span class="bb">StrokeDashArray</span> задает границу фигуры в виде штриховки, создавая эффект пунктира</p></li>
	<li><p><span class="bb">StrokeDashOffset</span> задает расстояние до начала штриха</p></li>
	<li><p><span class="bb">StrokeDashCap</span> задает форму штрихов</p></li>
	<li><p><span class="bb">Stretch</span> устанавливает способ заполнения внешнего контейнера</p></li>
	<li><p><span class="bb">GeometryTransform</span> применяет преобразования к объекту Geometry</p></li>
	</UL>
	<p>Ну и как обычные элементы управления они поддерживают традиционные свойства типа Width и Height, а также события, например, Сlick.</p>
	<p>Линия (<span class="bb">Line</span>) задается с помощью двух координат по оси Х и двух координат по оси У:</p>
	<pre class="brush: c#;">&lt;Line Stroke="Red" X1="10" X2="210" Y1="50" Y2="50" /&gt;</pre>
	<p>Элемент <span class="bb">Polyline</span> задается с помощью нескольких точек:</p>
	<pre class="brush: c#;">&lt;Polyline Points="10,10 50,50 120,10 10,10" Stroke="Red" /&gt;</pre>
	<p>Элемент <span class="bb">Polygon</span> (Многоугольник) задается также как и Polyline с помощью нескольких точек, однако при этом первая и последняя точка соединяются между собой, образуя замкнутую линию:</p>
	<pre class="brush: c#;">&lt;Polygon Points="10,80 50,50 120,80" Stroke="Red" StrokeThickness="3" StrokeDashArray="1 1 5" /&gt;</pre>
	<p>Элементы <span class="bb">Ellipse</span> и <span class="bb">Rectangle</span> задаются с помощью свойств <code>Width</code> и <code>Height</code>:</p>
	<pre class="brush: c#;">
	&lt;Rectangle Width="60" Height="40" Fill="Beige"  /&gt;
	&lt;Ellipse Width="30" Height="30" Fill="Red"  /&gt;
	</pre>
<p>Создание фигур на форме осуществляется тем же образом как и создаются и добавляются все остальные элементы:</p>
<pre class="brush: c#;">
            Ellipse el = new Ellipse();
            el.Width = 50;
            el.Height = 50;
            el.VerticalAlignment = VerticalAlignment.Top;
            el.Fill = new SolidColorBrush(Colors.Green);
            el.Stroke = new SolidColorBrush(Colors.Red);
            el.StrokeThickness = 3;
            LayoutRoot.Children.Add(el);</pre>
<p>Нарисуем, к примеру, координатную плоскость:</p>
<pre class="brush: c#;">
            Line vertL =new Line();
            vertL.X1 = 10;
            vertL.Y1 = 150;
            vertL.X2 = 10;
            vertL.Y2 = 10;
            vertL.Stroke = new SolidColorBrush(Colors.Black);
            LayoutRoot.Children.Add(vertL);
            Line horL =new Line();
            horL.X1 = 10;
            horL.X2 = 150;
            horL.Y1 = 150;
            horL.Y2 = 150;
            horL.Stroke =  new SolidColorBrush(Colors.Black);
            LayoutRoot.Children.Add(horL);
            for(byte i = 2;i&lt; 15;i++)
            {
                Line a =new Line();
                a.X1 = i * 10;
                a.X2 = i * 10;
                a.Y1 = 155;
                a.Y2 = 145;
                a.Stroke =  new SolidColorBrush(Colors.Black);
                LayoutRoot.Children.Add(a);
            }
            for(byte i = 2;i&lt; 15;i++)
            {
                Line a =new Line();
                a.X1 = 5;
                a.X2 = 15;
                a.Y1 = i * 10;
                a.Y2 = i * 10;
                a.Stroke = new SolidColorBrush(Colors.Black);
                LayoutRoot.Children.Add(a);
            }
            Polyline vertArr =new Polyline();
            vertArr.Points = new PointCollection();
            vertArr.Points.Add(new Point(5, 15));
            vertArr.Points.Add(new Point(10, 10));
            vertArr.Points.Add(new Point(15, 15));
            vertArr.Stroke = new SolidColorBrush(Colors.Black);
            LayoutRoot.Children.Add(vertArr);
            Polyline horArr =new Polyline();
            horArr.Points = new PointCollection();
            horArr.Points.Add(new Point(145, 145));
            horArr.Points.Add(new Point(150, 150));
            horArr.Points.Add(new Point(145, 155));
            horArr.Stroke = new SolidColorBrush(Colors.Black);
            LayoutRoot.Children.Add(horArr);</pre>
<img src="silpics/12.1.jpg" />
<p>Фигуры удобны для создания самых простейших рисунков, дизайна, однако что-то более сложное и комплексное с их помощью сделать труднее. 
Поэтому для этих целей применяется клас <span class="bb">Path</span>. Он также, как и фигуры, наследуется от класса Shape, но представляет собой совокупность объединенных фигур.  
Класс Path имеет свойство <span class="bb">Data</span>, которое определяет объект Geometry  - геометрический объект для отрисовки. Этот объект задает фигуру или совукупность фигур для отрисовки.</p>
<p>Класс Geometry - абстрактный, поэтому в качестве объекта используется один из производных классов:</p>
<ul>
<li><p><span class="bb">LineGeometry</span> представляет линию, эквивалент фигуры Line</p></li>
<li><p><span class="bb">RectangleGeometry</span> представляет прямоугольник, эквивалент фигуры Rectangle</p></li>
<li><p><span class="bb">EllipseGeometry</span> представляет эллипс, эквивалент фигуры Ellipse</p></li>
<li><p><span class="bb">PathGeometry</span> представляет путь, образующий сложную геометрическую фигуру из простейших фигур</p></li>
<li><p><span class="bb">GeometryGroup</span> создает фигуру, состоящую из нескольких объектов Geometry</p></li>
</ul>
<P>Пример использования объектов Geometry:</P>
<pre class="brush:xml;">
&lt;Path Stroke="Red" Fill="LightBlue"&gt;
            &lt;Path.Data&gt;
                &lt;GeometryGroup FillRule="EvenOdd"&gt;
                    &lt;LineGeometry StartPoint="10,10" EndPoint="220,10" /&gt;
                    &lt;EllipseGeometry Center="100,100" RadiusX="50" RadiusY="40" /&gt;
                    &lt;RectangleGeometry Rect="120,100 80,20" RadiusX="5" RadiusY="5" /&gt;
                &lt;/GeometryGroup&gt;
            &lt;/Path.Data&gt;
&lt;/Path&gt;
</pre>
<img src="silpics/12.2.jpg" />
<p>В данном случае свойство объекта GeometryGroup <span class="bb">FillRule</span> равно <span class="bb">EvenOdd</span> (значение по умолчанию), что позволяет создавать прозрачные перекрывающие поверхности. 
Если же установить <span class="bb">FillRule="Nonzero"</span>, то перекрывающиеся поверхности геометрий будут окрашены также, как и остальные части пути.</p>
<p>Общим свойством для всех геометрий является свойство <span class="bb">Transform</span>, которое позволяет задавать трансформацию для данной геометрии 
(в данном случае мы осуществляем поворот):</p>
<pre class="brush:xml;">
&lt;RectangleGeometry Rect="10,10 80,20" RadiusX="5" RadiusY="5"&gt;
                &lt;RectangleGeometry.Transform&gt;
                        &lt;RotateTransform Angle="45" CenterX="20" CenterY="20" /&gt;
                &lt;/RectangleGeometry.Transform&gt;
&lt;/RectangleGeometry&gt;
</pre>
<p>PathGeometry содержит один или несколько компонентов <span class="bb">PathFigure</span>. Объект <span class="bb">PathFigure</span> в свою очередь формируется из сегментов. 
Все сегменты наследуются от класса <span class="bb">PathSegment</span> и бывают нескольких видов:</p>
<ul>
<li><p><span class="bb">LineSegment</span> задает отрезок прямой линии между двумя точками</p></li>
<li><p><span class="bb">ArcSegment</span> задает дугу</p></li>
<li><p><span class="bb">BezierSegment</span> задает кривую Безье</p></li>
<li><p><span class="bb">QuadraticBezierSegment</span> задает квадратичную кривую Безье</p></li>
<li><p><span class="bb">PolyLineSegment</span> задает сегмент из нескольких линий</p></li>
<li><p><span class="bb">PolyBezierSegment</span> задает сегмент из нескольких кривых Безье</p></li>
<li><p><span class="bb">PolyQuadraticBezierSegment</span> задает сегмент из нескольких квадратичных кривых Безье</p></li>
</ul>
<p>Эти сегменты составляют свойство <span class="bb">Segment</span> объекта PathFigure. Кроме того, PathFigure имеет еще несколько важных свойств:</p>
<ul>
<li><p><span class="bb">StartPoint</span> - точка начала первой фигуры</p></li>
<li><p><span class="bb">IsClosed</span> - если значение равно true, то первая и последняя точки (если они не совпадают) соединяются</p></li>
<li><p><span class="bb">IsFilled</span> - если значение равно true, то площадь внутри пути окрашивается кистью, заданной свойством Fill у объекта Path</p></li>
</ul>
<p>Пример использования:</p>
<pre class="brush:xml;">
     &lt;Path Stroke="Red"&gt;
            &lt;Path.Data&gt;
                &lt;PathGeometry&gt;
                    &lt;PathFigure StartPoint="10,100"&gt;
                        
                        &lt;BezierSegment Point1="30,120" Point2="30,140" Point3="10 160" /&gt;
                        &lt;LineSegment Point="40,100" /&gt;
                        &lt;LineSegment Point="40,160" /&gt;
                        &lt;LineSegment Point="60,100" /&gt;
                        &lt;BezierSegment Point1="40,120" Point2="40 140" Point3="60,160" /&gt;
                    &lt;/PathFigure&gt;
                    &lt;PathFigure StartPoint="20,130"&gt;
                        &lt;LineSegment Point="50,130" /&gt;
                    &lt;/PathFigure&gt;
                    &lt;PathFigure StartPoint="20,130"&gt;
                        &lt;LineSegment Point="50,130" /&gt;
                    &lt;/PathFigure&gt;
                    &lt;PathFigure StartPoint="100,100"&gt;
                        &lt;PolyLineSegment Points="70,100 70,130" /&gt;
                        &lt;PolyLineSegment Points="90,130 70,130 70,160,100,160" /&gt;
                    &lt;/PathFigure&gt;
                    &lt;PathFigure StartPoint="110,100"&gt;
                        &lt;PolyLineSegment Points="110,160 110,130 140,130 140,100 140,100 140,165" /&gt;
                    &lt;/PathFigure&gt;
                    &lt;PathFigure StartPoint="180,100" IsClosed="True"&gt;
                        &lt;ArcSegment Point="180,130" Size="70,20" SweepDirection="Counterclockwise" /&gt;
                        &lt;PolyLineSegment Points="160,160  180,130 180,160" /&gt;
                    &lt;/PathFigure&gt;
                &lt;/PathGeometry&gt;
            &lt;/Path.Data&gt;
        &lt;/Path&gt;</pre>
<img src="silpics/12.3.jpg" />
<p>Если переписать пример с координатной плоскостью с использованием объекта PathGeometry, то получится</p>
<pre class="brush: c#;">
	  PathGeometry pathGeom =new PathGeometry();
            Path p =new Path();

            LineSegment vertLS =new LineSegment();
            PathFigure vertPF =new PathFigure();
            vertPF.StartPoint = new Point(10, 150);
            vertLS.Point = new Point(10, 10);
            vertPF.Segments.Add(vertLS);
            pathGeom.Figures.Add(vertPF);

            LineSegment horLS =new LineSegment();
            PathFigure horPF =new PathFigure();
            horPF.StartPoint = new Point(10, 150);
            horLS.Point = new Point(150, 150);
            horPF.Segments.Add(horLS);
            pathGeom.Figures.Add(horPF);


            for(byte i = 2;i&lt;15;i++)
            {
                PathFigure pf =new PathFigure();
                pf.StartPoint = new Point(i * 10, 155);
                LineSegment a =new LineSegment();
                a.Point = new Point(i * 10, 145);
                pf.Segments.Add(a);
                pathGeom.Figures.Add(pf);
            }

            for(byte i = 2;i&lt;15;i++)
            {
                PathFigure pf =new PathFigure();
                pf.StartPoint = new Point(5, i * 10);
                LineSegment a =new LineSegment();
                a.Point = new Point(15, i * 10);
                pf.Segments.Add(a);
                pathGeom.Figures.Add(pf);
            }

            PolyLineSegment vertArr =new PolyLineSegment();
            vertArr.Points = new PointCollection();
            vertArr.Points.Add(new Point(10, 10));
            vertArr.Points.Add(new Point(15, 15));
            PathFigure vertArrF =new PathFigure();
            vertArrF.StartPoint = new Point(5, 15);
            vertArrF.Segments.Add(vertArr);
            pathGeom.Figures.Add(vertArrF);

            PolyLineSegment horArr =new PolyLineSegment();
            horArr.Points = new PointCollection();
            horArr.Points.Add(new Point(150, 150));
            horArr.Points.Add(new Point(145, 155));
            PathFigure horArrF =new PathFigure();
            horArrF.StartPoint = new Point(145, 145);
            horArrF.Segments.Add(horArr);
            pathGeom.Figures.Add(horArrF);

            p.Data = pathGeom;
            p.Stroke = new SolidColorBrush(Colors.Black);

            LayoutRoot.Children.Add(p);
</pre>
<p>Также принят упрощенный вариант записи фигур. Например, следующее описание фигуры</p>
<pre class="brush:xml;">
&lt;Path Stroke="Red"&gt;
    &lt;Path.Data&gt;
        &lt;PathGeometry&gt;
			&lt;PathFigure StartPoint="20,170"&gt;
				&lt;LineSegment Point="50,170" /&gt;
			&lt;/PathFigure&gt;
		&lt;/PathGeometry&gt;
    &lt;/Path.Data&gt;
&lt;/Path&gt;
</pre>
<p>можно написать следубщим образом</p>
<pre>
&lt;Path Data="M 20,170 L 50,170 Z" Stroke="Red" /&gt;
</pre>

<p>Что в данном случае означате сокращенная запись?</p>
<table class="tab">
<tr><td><p>M x,y</p></td><td><p>Создает новый объект PathFigure и указывает на его начальную точку</p></td></tr>
<tr><td><p>Z</p></td><td><p>Завершает фигуру и устанавливает свойство IsClosed в true. Если же не требуется завершать фигуру, то вместо Z употребляется буква M</p></td></tr>
<tr><td><p>L x,y</p></td><td><p>Создает объект LineSegment до указанной точки</p></td></tr>
<tr><td><p>A raduisX, radiusY, degrees, isLargArc, IaClockwize, x,y</p></td><td><p>Создает новый объект ArcSegment с соответствующими параметрами</p></td></tr>
<tr><td><p>С x1,y1,x2,y2,x,y</p></td><td><p>Создает новый объект BezierSegment по указанным точкам</p></td></tr>
<tr><td><p>Q x1,y1, x,y</p></td><td><p>Создает новый объект QuadraticBezierSegment по указанным точкам</p></td></tr>
<tr><td><p>S x1,y1, x,y</p></td><td><p>Создает новый объект BezierSegment по указанным точкам</p></td></tr></table>
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


<div class="nav"><p><a href="11.2.php">Назад</a><a href="./">Содержание</a><a href="13.php">Вперед</a></p></div></div>
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
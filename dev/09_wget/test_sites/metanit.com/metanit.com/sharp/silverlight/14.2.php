<!DOCTYPE html>
<html >
<head>
<title>Первое 3D-приложение (Silverlight)</title>
<meta charset="utf-8" />
<meta name="description" content="Создание трехмерного объекта в Silverlight 5 и применение мировой матрицы, матриц вида и проекции">
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
<h2>Создание первого 3D-приложения</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Итак, нам естественно надо определить в разметке XAML элемент DrawingSurface. И вначале импортируем все нужные нам пространства имен:</p> 
<pre class="brush:c#;">using System;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Input;
using System.Windows.Shapes;
using System.Windows.Graphics;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;</pre>
<p>Если среди импортированных имен имеется System.Windows.Media, то лучше исключить его, так как ряд структур и классов имеют похожие имена с теми, 
которые находятся в ространстве имен Microsoft.Xna.Framework, тогда нам придется писать полное имя класса с пространством имен.</p>
<p>Теперь объявим три переменные на уровне класса:</p>
<pre class="brush:c#;">
		private VertexBuffer vertexBuffer;
        private BasicEffect basicEffect;
        GraphicsDevice graphicDevice;
</pre>
<p>Первая переменная типа <b>VertexBuffer</b> является буфером вершин и будет хранить вершины нашего объекта. 
Вторая переменная типа <span class="bb">BasicEffect</span> будет хранить эффект приложения.  С помощью BasicEffect можно достаточно эффективно использовать код HLSL, 
не задумываясь о том, что лежит в основе работы HLSL. Но мы также могли бы вместо BasicEffect использовать свой эффект 
с пиксельным и вершинным шейдером, однако в данном случае мы вполне можем обойтись и BasicEffect.</p>
<p>Третья переменная с типом <span class="bb">GraphicsDevice</span> будет представлять графическое устройство, с которым мы будем взаимодействовать.</p>
<p>Теперь добавим в конец конструктора следующий код:</p>
<pre class="brush:c#;">
           //Инициализация графического устройства текущим устройством
            graphicDevice = GraphicsDeviceManager.Current.GraphicsDevice;

            // Создание эффекта на основе класса BasicEffect
            basicEffect = new BasicEffect(graphicDevice);
            // Включаем отрисовку цветовой гаммы вершин
            basicEffect.VertexColorEnabled = true;
            // Массив вершин
            VertexPositionColor[] vertices = new VertexPositionColor[3];
            // Создаем вершины
            vertices[0].Position = new Vector3(-1, -1, 0); // левый угол
            vertices[1].Position = new Vector3(0, 1, 0);   // верхний угол
            vertices[2].Position = new Vector3(1, -1, 0);  // правый угол
            // Объявляем их цвета
            vertices[0].Color = new Microsoft.Xna.Framework.Color(255, 0, 0, 255); // красный
            vertices[1].Color = new Microsoft.Xna.Framework.Color(0, 255, 0, 255); // зеленый
            vertices[2].Color = new Microsoft.Xna.Framework.Color(0, 0, 255, 255); // синий
            // Создаем буфер вершин
            vertexBuffer = new VertexBuffer(graphicDevice,VertexPositionColor.VertexDeclaration,
                vertices.Length,BufferUsage.WriteOnly);
            // Устанавливаем буфер вершин на основе массива вершин
            vertexBuffer.SetData(0, vertices, 0, vertices.Length, 0);
</pre>
<p>Здесь мы инициализируем графическое устройство текущим устройством, создаем массив вершин и устанавливаем буфер по этим вершинам. Наши вершины установлены 
следующим образом:</p>
<img src="silpics/14.2.png" />
<p>Далее добавим в обработчик метода Draw элемента DrawingSurface следующий код:</p>
<pre class="brush:c#;">
        private void DrawingSurface_Draw(object sender, DrawEventArgs e)
        {
            // Устанавливаем мировую матрицу и матрицы вида и проекции эффекта
            basicEffect.World = Matrix.Identity;
            basicEffect.View = Matrix.CreateLookAt(new Vector3(0, 0, 5.0f),
                          Vector3.Zero, Vector3.Up);
            basicEffect.Projection = Matrix.CreatePerspectiveFieldOfView
                          (0.85f, 1f, 0.01f, 1000.0f);
            // Очищаем графическое устройство
            graphicDevice.Clear(new Microsoft.Xna.Framework.Color(0.8f, 0.8f, 0.8f, 1.0f));
            // Устанавливаем на устройстве буфер вершин
            graphicDevice.SetVertexBuffer(vertexBuffer);
            // Выполняем проход эффекта
            basicEffect.CurrentTechnique.Passes[0].Apply();
            // Отрисовка графики
            graphicDevice.DrawPrimitives(PrimitiveType.TriangleList, 0, 1);

            // Уведомляем систему о том, что можно снова вызывать событие Draw
            e.InvalidateSurface();
        }</pre>
<p>Здесь вначале мы устанавливаем матрицы вида и проекции и мировую матрицу. Эти матрицы управляют, как объект будет отображаться на экране.</p>
<p>Далее мы очищаем экран - в данном случае очистка заключается в заливке всего экрана серым цветом. Таким образом, предыдущий кадр будет стерт, 
и будет отрисован новый кадр.</p>
<p>Затем мы устанавливаем для графического устройства буфер вершин и применяем эффект. Применение эффекта заключается в применении 
каждого прохода каждой техники эффекта. Но поскольку в basicEffect только одна техника, содержащая один проход, то мы можем обойтись без цикла 
<code>(foreach (EffectPass pass in effect.CurrentTechnique.Passes))</code> и сразу применить единственный проход.</p>
<p>В конце происходит отрисовка примитива - то есть треугольника и уведомление системы о том, что мы можем запускать обработчик события Draw заново.</p>
<P>Теперь построим приложение и запустим тестовую страничку html в браузере. Если для текущего сайта не установлены разрешения, установите их и 
перезапустите страницу:</P>
<img src="silpics/14.3.jpg" />
<p>Хотя все хорошо, но пока непонятно, в чем заключается 3D, поскольку перед нами статичный плоский треугольник? Что ж замените в методе 
Draw строку</p>
<pre class="brush:c#;">basicEffect.World = Matrix.Identity;</pre>
<p>на</p>
<pre class="brush:c#;">basicEffect.World = Matrix.CreateRotationY((float)e.TotalTime.TotalSeconds * 2);</pre>
<h3>Backface culling</h3>
<p>Теперь наш треугольник будет имитировать 3D, вращаясь вокруг оси Y. Правда, здесь еще одна будет загвоздка: когда треугольник поворачивается на 180 градусов, 
он становится невидимым. Это следствие того, что называют <span class="bb">backface culling ("сокрытие обратной поверхности")</span>. Это делается в целях повышения 
производительности. Однако мы можем отключить этот эффект и увидеть вращающийся треугольник во всей красе. Для этого в обработчике события Draw 
<span class="bb">перед</span> строкой <code>graphicDevice.DrawPrimitives(PrimitiveType.TriangleList, 0, 1);</code> добавим следующую строку:</p>
<pre class="brush:c#;">graphicDevice.RasterizerState = new RasterizerState() { CullMode = CullMode.None };</pre>
<h3>Отрисовка примитивов</h3>
<p>Непосредственная отрисовка у нас происходит в строке <code>graphicDevice.DrawPrimitives(PrimitiveType.TriangleList, 0, 1)</code>. 
В первом параметре этого метода задается тип примитивов. Во втором параметре - смещение в буфере вершин, с которого начинается отрисовка. 
Третий параметр указывает на число отрисуемых примитивов.</p>
<p>В нашем случае в качестве типа примитива выступает тип <span class="bb">TriangleList</span>. Данный тип предполагает, что в буфере вершин у нас определены вершины 
дял отдельных треугольников, по три вершины на каждый. Кроме данного типа нам доступны еще несколько типов:</p>
<table>
<tr><td><p><span class="bb">TriangleStrip</span></p></td><td><p>Представляет серию связанных треугольников. Каждый последующий треугольник 
состоит из последней вершины предыдущего треугольника и двух новых</p></td></tr>
<tr><td><p><span class="bb">LineList</span></p></td><td><p>Представляет отдельные линии. Каждая линия состоит из двух отдельных вершин</p></td></tr>
<tr><td><p><span class="bb">LineStrip</span></p></td><td><p>Представляет серию связанных линий. Каждая последующая линия 
состоит из последней вершины предыдущей линии и одной новой</p></td></tr>
</table>
<p>Поскольку у нас в буфере пока определны три вершины, то нам их хватит для двух линий при типе LineStrip. Поэтому мы можем поэкспериментировать 
и изменить код отрисовки примитива на следующий:</p>
<pre class="brush:c#;">graphicDevice.DrawPrimitives(PrimitiveType.LineStrip, 0, 2);</pre>
<h3>Матрицы и настройка камер</h3>
<p>Теперь немного подробнее поговорим о настроке камер. Обычно, когда мы смотрим на какой-нибудь объект, мы видим его относительно нашей позиции. 
Поэтому настрока камеры играет большую роль.</p> 
<h4>Матрица вида</h4>
<p>Прежде всего нам надо задать расположение и направление камеры. Для этого мы использовали метод 
<code>Matrix.CreateLookAt(Vector3 cameraPosition,Vector3 cameraTarget, Vector3 cameraUpVector);</code></p>
<pre class="brush:c#;">Matrix.CreateLookAt(new Vector3(0, 0, 5.0f), Vector3.Zero, Vector3.Up);</pre>
<p>Первый параметр этого метода - <span class="bb">cameraPosition</span> - позволяет определить точку пространства, в которойнаходится камера. 
В данном случае мы позиционируем камеру в точку с координатами (0, 0, 5.0f), то есть x=0, y=0, z=5. Таким образом, получается, что камера 
располагается где-то между нами и поверхность экрана, если поверхность экрана взять за z=0. Мы можем отдалить камеру, увеличив координату z. 
Подобным образом мы можем манипулировать и другими координатами.</p>
<p>Второй параметр этого метода - <span class="bb">cameraTarget</span> - указывает на направление камеры, которой является некоторая точка пространства. 
В данном случае мы определили для значения этого параметра константу <span class="bb">Vector3.Zero</span>, которая представляет начало координат, то есть точку с 
координатами (0,0,0). Но мы могли бы направить нашу камеру, например, правее, установив значение <code>new Vector3(1.0f, 0f, 0f)</code>, 
тогда наш треугольник сместился бы левее.</p>
<p>Третий параметр задает вектор вертикальной оринетации и обычно принимает в качестве значения <span class="bb">Vector3.Up</span>. 
Vector3.Up возвращает объект Vector3 с координатами (0, 1, 0), который представляет направление вверх. Но мы можем и по другому направить камеру в 
зависимости от наших потребностей.</p>
<h4>Матрица проекции</h4>
<p>Матрица проекции создает то, что называется видимое пространство камеры. Она определяет ту часть 3D-пространства, которое будет 
обозреваться камерой и поэтому и отрисовываться на экране. Объекты внутри этой видимой части будут выводиться на экран, пока между ними и 
камерой не появятся другие, закрывающие их объекты. Объекты, находящиеся вне зоны видимости камеры, не будут отрисовываться.</p>
<p>Для создания матрицы проекции используется метод  
<code>Matrix.CreatePerspectiveFieldOfView(float fieldOfView,float aspectRatio,float nearPlaneDistance,float farPlaneDistance)</code></p>
<p>В отличие от предыдущего метода он принимает четыре параметра типа <code>float</code>. В начшем случае он выглядит следующим образом:</p>
<pre class="brush:c#;">Matrix.CreatePerspectiveFieldOfView(0.85f, 1f, 0.01f, 1000.0f);</pre>
<p>Первый параметр - <span class="bb">fieldOfView</span> - задает угол обзора камеры в радианах. Обычно 45 градусов или pi/4. Мы могли в принципе использовать 
уже готовую константу для этого параметра - <code>MathHelper.PiOver4</code>, либо любое другое значение.</p>
<p>Второй параметр - <span class="bb">aspectRatio</span> - определяет форматное (аспектное) соотношение - отношение ширины к высоте. За основу обычно берутся 
размеры элемента DrawingSurface, либо другого контейнера.</p>
<p>Третий и четвертый параметры - <span class="bb">nearPlaneDistance</span> и <span class="bb">farPlaneDistance</span> - определяют соответственно переднюю и заднюю плоскости отсечения. 
То есть, параметр <span class="bb">nearPlaneDistance</span> - это расстояние от камеры до ближайшей видимой точки, а <span class="bb">farPlaneDistance</span> - расстояние до самой 
дальней видимой точки. Вне этих значений объекты не будут видимы камере. Схематично это можно показать на следующем рисунке:</p>
<img src="silpics/14.4.jpg" />
<h4>Мировая матрица</h4>
<p>Мировая матрица позволяет задать положение объекта в пространстве и применить к нему преобразования, как в нашем случае мы применяем вращение.</p>
<p>Первоначально мы применили матрицу <span class="bb">Matrix.Identity</span>, которая представляет единичную матрицу, никак не влияющую на положение объекта. 
Наш треугольник отрисовывается таким, каков он есть.</p>
<p>Затем мы задали с матрицу с помощью метода <code>Matrix.CreateRotationY((float)e.TotalTime.TotalSeconds * 2);</code>, 
который предполагает вращение вокруг оси Y и в качестве параметра принимает угол вращения, а на выходе возвращеет обект Matrix.</p>
<P>Поскольку в качестве эффекта мы использовали базовый класс BasicEffect и нам не пришлось создавать свой эффект с пиксельным и вершинным шейдером, 
то чтобы задать матрицы для нашего приложения нам надо было присвить их соответствующим свойствам объекта BasicEffect.</P>

<h3>Обработка ввода пользователя в 3D</h3>
<P>Итак, на сопледнем этапе работы с нашим треугольником добавим поддержку ввода пользователя. Пока треугольник вращается сам по себе. 
Теперь сделаем так, чтобы он вращался вправо или влево в зависимости от того, какую пользователь нажал клавишу. Управление будет вестись с помощью 
клавиш-стрелок Вправо и Влево.</P>
<p>Добавим в коде C# для класса окна еще одну глобальную переменную, которая будет хранить угол поворота. С каждым поворотом влево, угол будет 
увеличиваться, а с поворотом вправо - уменьшаться:</p>
<pre class="brush:c#;">float angle = 0;</pre>
<p>Далее изменим код установки мировой мтарицы в обработчике события Draw следующим образом:</p>
<pre class="brush:c#;">
private void DrawingSurface_Draw(object sender, DrawEventArgs e)
{
    // Устанавливаем мировую матрицу и матрицы вида и проекции эффекта
    basicEffect.World = Matrix.CreateRotationY(angle); 
	.................................................
</pre>
<p>Теперь добавим в код процедуру, которая будет обрабатывать ввод с клавиатуры:</p>
<pre class="brush:c#;">
       private void DrawingSurface_KeyDown(object sender, KeyEventArgs e)
        {
            if (e.Key == Key.Left)
            {
                angle += 0.5f;
            }
            else if (e.Key == Key.Right)
            {
                angle -= 0.5f;
            }
        }</pre>
<p>И в конце назначим обработчик события KeyDown у элемента UserControl:</p>
<pre class="brush:xml;">
&lt;UserControl............................................
d:DesignHeight="300" d:DesignWidth="400" KeyDown="DrawingSurface_KeyDown"&gt;</pre>
<p>Построим приложение и запустим в браузере. Теперь мы можем управлять поворотом треугольника с помощью клавиатуры.</p>
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


<div class="nav"><p><a href="14.1.php">Назад</a><a href="./">Содержание</a><a href="14.3.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 14.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 14.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
	$("li:contains('Глава 14.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 14.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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
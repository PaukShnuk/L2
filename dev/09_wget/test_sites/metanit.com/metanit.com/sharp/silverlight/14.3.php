<!DOCTYPE html>
<html >
<head>
<title>Создание текстурированного куба</title>
<meta charset="utf-8" />
<meta name="description" content="Создание текстурированного куба, реагирующего на ввод пользователя с клавиатуры">
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
<h2>Создание текстурированного куба</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Если бы все 3D в Silverlight 5 ограничивалось бы треугольниками, то не было бы смысла всем этим заниматься. Однако с помощью примитивов мы 
можем складывать более сложные элементы, например, из двух треугольников уже можно сделать прямоугольник, а из шесть прямоугольников составляют 
шесть сторон куба - трехмерной фигуры.</p>
<p>Для создания куба возьмем за основу наше предыдущее приложение. По сути нам надо произвести всего два изменения: увеличить число вершин до 36 
(так как для создания шести сторон нам потребуется 12 треугольников по три вершины на каждый) и увеличить число отображаемых примитивов до 12.</p>
<p>Код XAML у нас останется по сути тем же самым:</p>
<pre class="brush:xml;">&lt;UserControl x:Class="_3DCube.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
    mc:Ignorable="d"
    d:DesignHeight="300" d:DesignWidth="400" KeyDown="UserControl_KeyDown"&gt;

    &lt;Grid x:Name="LayoutRoot" Background="White"&gt;
        &lt;DrawingSurface Width="400" Height="300" Draw="DrawingSurface_Draw"   /&gt;
    &lt;/Grid&gt;
&lt;/UserControl&gt;
</pre>
<p>А файл кода c# будет выглядеть следующим образом:</p>
<pre class="brush:c#;">
using System;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Input;
using System.Windows.Shapes;
using System.Windows.Graphics;
using Microsoft.Xna.Framework;
using Microsoft.Xna.Framework.Graphics;

namespace _3DCube
{
    public partial class MainPage : UserControl
    {
        VertexBuffer vertexBuffer;
        BasicEffect basicEffect;
        GraphicsDevice graphicDevice;
        float angle=0;
        public MainPage()
        {
            InitializeComponent();

            //Инициализация графического устройства текущим устройством
            graphicDevice = GraphicsDeviceManager.Current.GraphicsDevice;

            // Создание эффекта на основе класса BasicEffect
            basicEffect = new BasicEffect(graphicDevice);
            
            // Включаем отрисовку цветовой гаммы вершин
            basicEffect.VertexColorEnabled = true;
            // Массив вершин
            VertexPositionColor[] vertices = new VertexPositionColor[36];

            Color colorRed = new Color(255, 0, 0);
            Color colorBlue = new Color(0, 255, 0);
            Color colorGreen = new Color(0, 0, 255);

            Vector3 topLeft = new Vector3(-1, 1, 0);
            Vector3 bottomLeft = new Vector3(-1, -1, 0);
            Vector3 topRight = new Vector3(1, 1, 0);
            Vector3 bottomRight = new Vector3(1, -1, 0);
            Vector3 topLeftFront = new Vector3(-1, 1, 1);
            Vector3 bottomLeftFront = new Vector3(-1, -1, 1);
            Vector3 topRightFront = new Vector3(1, 1, 1);
            Vector3 bottomRightFront = new Vector3(1, -1, 1);
            Vector3 topLeftBack = new Vector3(-1, 1, -1);
            Vector3 topRightBack = new Vector3(1, 1, -1);
            Vector3 bottomLeftBack = new Vector3(-1, -1, -1);
            Vector3 bottomRightBack = new Vector3(1, -1, -1);

            // Лицевая сторона
            vertices[0] = new VertexPositionColor(topRightFront, colorBlue);
            vertices[1] = new VertexPositionColor(bottomLeftFront, colorRed);
            vertices[2] = new VertexPositionColor(topLeftFront, colorGreen);
            vertices[3] = new VertexPositionColor(topRightFront, colorBlue);
            vertices[4] = new VertexPositionColor(bottomRightFront, colorGreen);
            vertices[5] = new VertexPositionColor(bottomLeftFront, colorRed);

            // Задняя сторона
            vertices[6] = new VertexPositionColor(bottomLeftBack, colorBlue);
            vertices[7] = new VertexPositionColor(topRightBack, colorRed);
            vertices[8] = new VertexPositionColor(topLeftBack, colorGreen);
            vertices[9] = new VertexPositionColor(bottomRightBack, colorGreen);
            vertices[10] = new VertexPositionColor(topRightBack, colorRed);
            vertices[11] = new VertexPositionColor(bottomLeftBack, colorBlue);

            // Верх
            vertices[12] = new VertexPositionColor(topLeftBack, colorBlue);
            vertices[13] = new VertexPositionColor(topRightBack, colorRed);
            vertices[14] = new VertexPositionColor(topLeftFront, colorGreen);
            vertices[15] = new VertexPositionColor(topRightBack, colorRed);
            vertices[16] = new VertexPositionColor(topRightFront, colorBlue);
            vertices[17] = new VertexPositionColor(topLeftFront, colorGreen);

            // Низ
            vertices[18] = new VertexPositionColor(bottomRightBack, colorBlue);
            vertices[19] = new VertexPositionColor(bottomLeftBack, colorRed);
            vertices[20] = new VertexPositionColor(bottomLeftFront, colorGreen);
            vertices[21] = new VertexPositionColor(bottomRightFront, colorRed);
            vertices[22] = new VertexPositionColor(bottomRightBack, colorBlue);
            vertices[23] = new VertexPositionColor(bottomLeftFront, colorGreen);

            // Левая сторона
            vertices[24] = new VertexPositionColor(bottomLeftFront, colorBlue);
            vertices[25] = new VertexPositionColor(bottomLeftBack, colorRed);
            vertices[26] = new VertexPositionColor(topLeftFront, colorGreen);
            vertices[27] = new VertexPositionColor(topLeftFront, colorGreen);
            vertices[28] = new VertexPositionColor(bottomLeftBack, colorRed);
            vertices[29] = new VertexPositionColor(topLeftBack, colorBlue);

            // Правая сторона
            vertices[30] = new VertexPositionColor(bottomRightBack, colorBlue);
            vertices[31] = new VertexPositionColor(bottomRightFront, colorRed);
            vertices[32] = new VertexPositionColor(topRightFront, colorGreen);
            vertices[33] = new VertexPositionColor(bottomRightBack, colorBlue);
            vertices[34] = new VertexPositionColor(topRightFront, colorGreen);
            vertices[35] = new VertexPositionColor(topRightBack, colorRed);

            // Создаем буфер вершин
            vertexBuffer = new VertexBuffer(graphicDevice, VertexPositionColor.VertexDeclaration,
                vertices.Length, BufferUsage.WriteOnly);
            // Устанавливаем буфер вершин на основе массива вершин
            vertexBuffer.SetData(0, vertices, 0, vertices.Length, 0);
        }

        private void DrawingSurface_Draw(object sender, DrawEventArgs e)
        {
            basicEffect.World = Matrix.CreateRotationY(angle); ;
            basicEffect.View = Matrix.CreateLookAt(new Vector3(0, 0f, 5.0f),
                          Vector3.Zero, Vector3.Up);
            basicEffect.Projection = Matrix.CreatePerspectiveFieldOfView
                          (MathHelper.PiOver4, 1f, 0.01f, 1000.0f);
            // Очищаем графическое устройство
            graphicDevice.Clear(new Color(0.8f, 0.8f, 0.8f, 1.0f));
            // Устанавливаем на устройстве буфер вершин
            graphicDevice.SetVertexBuffer(vertexBuffer);
            // Выполняем проходы эффекта
            foreach (EffectPass pass in basicEffect.CurrentTechnique.Passes)
            {
                pass.Apply();
                // Отрисовка графики
                graphicDevice.DrawPrimitives(PrimitiveType.TriangleList,
                  0, 12);
            }
            // Уведомляем систему о том, что можно сново вызывать событие Draw
            e.InvalidateSurface();
        }

        private void UserControl_KeyDown(object sender, KeyEventArgs e)
        {
            if (e.Key == Key.Left)
            {
                angle += 0.5f;
            }
            else if (e.Key == Key.Right)
            {
                angle -= 0.5f;
            }
        }
    }
}
</pre>
<p>Запустим приложение и увидим наш куб в действии:</p>
<img src="silpics/14.5.jpg" />
<h3>Текстурирование куба</h3>
<p>Внесем в код ряд изменнеий. Во-первых, добавим в конструктор окна код загрузки текстуры:</p>
<pre class="brush:c#;">// Загрузка текстуры из ресурса в BitmapImage.
            Stream s = Application.GetResourceStream(new Uri(@"3DCube;component/bronz.jpg", UriKind.Relative)).Stream;

            BitmapImage bmp = new BitmapImage();
            bmp.SetSource(s);

            // Копируем данные из BitmapImage в объект Texture2D
            Texture2D texture;
            texture = new Texture2D(graphicDevice, bmp.PixelWidth, bmp.PixelHeight);
            bmp.CopyTo(texture);

            // Установка текстуры
            basicEffect.Texture = texture;</pre>
<p>Здесь мы загружаем в поток из ресурсов наше изображение (в данном случае файл bronz.jpg) и создаем объект <span class="bb">BitmapImage</span> из этого потока. 
Затем копируем данные из BitmapImage в текстуру, представленную классом <strong>Texture2D</strong>. В конце устанавливаем текстуру для нашего эффекта.</p>
<p>Поскольку вместо обычных цветовых точек мы будем использовать текстуру, то заменим строку</p>
<pre class="brush:c#;">basicEffect.VertexColorEnabled = true;</pre>
<p>на</p>
<pre class="brush:c#;">basicEffect.TextureEnabled = true;</pre>
<p>Далее опять же нам больше не потребуется тип VertexPositionColor, так как для позиционирования текстуры и создания текстурированных элементов 
мы будем использовать тип <span class="bb">VertexPositionTexture</span>, поэтому блок создания вершин и установки вершинного буфера будет выглядеть следующим образом:</p>
<pre class="brush:c#;">
            // Массив вершин
            VertexPositionTexture[] vertices = new VertexPositionTexture[36];

            Vector2 textureTopLeft = new Vector2(0, 0);
            Vector2 textureTopRight = new Vector2(1, 0);
            Vector2 textureBottomLeft = new Vector2(0, 1);
            Vector2 textureBottomRight = new Vector2(1, 1);

            Vector3 topLeft = new Vector3(-1, 1, 0);
            Vector3 bottomLeft = new Vector3(-1, -1, 0);
            Vector3 topRight = new Vector3(1, 1, 0);
            Vector3 bottomRight = new Vector3(1, -1, 0);
            Vector3 topLeftFront = new Vector3(-1, 1, 1);
            Vector3 bottomLeftFront = new Vector3(-1, -1, 1);
            Vector3 topRightFront = new Vector3(1, 1, 1);
            Vector3 bottomRightFront = new Vector3(1, -1, 1);
            Vector3 topLeftBack = new Vector3(-1, 1, -1);
            Vector3 topRightBack = new Vector3(1, 1, -1);
            Vector3 bottomLeftBack = new Vector3(-1, -1, -1);
            Vector3 bottomRightBack = new Vector3(1, -1, -1);

            // Лицевая сторона
            vertices[0] = new VertexPositionTexture(topRightFront, textureTopRight);
            vertices[1] = new VertexPositionTexture(bottomLeftFront, textureBottomLeft);
            vertices[2] = new VertexPositionTexture(topLeftFront, textureTopLeft);
            vertices[3] = new VertexPositionTexture(topRightFront, textureTopRight);
            vertices[4] = new VertexPositionTexture(bottomRightFront, textureBottomRight);
            vertices[5] = new VertexPositionTexture(bottomLeftFront, textureBottomLeft);

            // Задняя сторона
            vertices[6] = new VertexPositionTexture(bottomLeftBack, textureBottomLeft);
            vertices[7] = new VertexPositionTexture(topRightBack, textureTopRight);
            vertices[8] = new VertexPositionTexture(topLeftBack, textureTopLeft);
            vertices[9] = new VertexPositionTexture(bottomRightBack, textureBottomRight);
            vertices[10] = new VertexPositionTexture(topRightBack, textureTopRight);
            vertices[11] = new VertexPositionTexture(bottomLeftBack, textureBottomLeft);

            // Верх
            vertices[12] = new VertexPositionTexture(topLeftBack, textureTopLeft);
            vertices[13] = new VertexPositionTexture(topRightBack, textureTopRight);
            vertices[14] = new VertexPositionTexture(topLeftFront, textureBottomLeft);
            vertices[15] = new VertexPositionTexture(topRightBack, textureTopRight);
            vertices[16] = new VertexPositionTexture(topRightFront, textureBottomRight);
            vertices[17] = new VertexPositionTexture(topLeftFront, textureBottomLeft);

            // Низ
            vertices[18] = new VertexPositionTexture(bottomRightBack, textureBottomRight);
            vertices[19] = new VertexPositionTexture(bottomLeftBack, textureBottomLeft);
            vertices[20] = new VertexPositionTexture(bottomLeftFront, textureTopLeft);
            vertices[21] = new VertexPositionTexture(bottomRightFront, textureTopRight);
            vertices[22] = new VertexPositionTexture(bottomRightBack, textureBottomRight);
            vertices[23] = new VertexPositionTexture(bottomLeftFront, textureTopLeft);

            // Левая сторона
            vertices[24] = new VertexPositionTexture(bottomLeftFront, textureBottomRight);
            vertices[25] = new VertexPositionTexture(bottomLeftBack, textureBottomLeft);
            vertices[26] = new VertexPositionTexture(topLeftFront, textureTopRight);
            vertices[27] = new VertexPositionTexture(topLeftFront, textureTopRight);
            vertices[28] = new VertexPositionTexture(bottomLeftBack, textureBottomLeft);
            vertices[29] = new VertexPositionTexture(topLeftBack, textureTopLeft);

            // Правая сторона
            vertices[30] = new VertexPositionTexture(bottomRightBack, textureBottomRight);
            vertices[31] = new VertexPositionTexture(bottomRightFront, textureBottomLeft);
            vertices[32] = new VertexPositionTexture(topRightFront, textureTopLeft);
            vertices[33] = new VertexPositionTexture(bottomRightBack, textureBottomRight);
            vertices[34] = new VertexPositionTexture(topRightFront, textureTopLeft);
            vertices[35] = new VertexPositionTexture(topRightBack, textureTopRight);

            // Создаем буфер вершин
            vertexBuffer = new VertexBuffer(graphicDevice, VertexPositionTexture.VertexDeclaration,
                vertices.Length, BufferUsage.WriteOnly);
            // Устанавливаем буфер вершин на основе массива вершин
            vertexBuffer.SetData(0, vertices, 0, vertices.Length, 0);</pre>
<p>Использованные нами объекты типа VertexPositionTexture имеют два параметра, Первый - координаты вершины в пространстве. Второй представляет координаты 
на текстуре, которые накладываются на точку пространства. Причем координаты текстуры изменяются от 0 до 1. Точка с координатами (0.5, 0.5) находится 
в центре текстуры.</p>
<img src="silpics/14.7.jpg" />
<pre class="brush:c#;">
private void DrawingSurface_Draw(object sender, DrawEventArgs e)
        {
            basicEffect.World = Matrix.CreateRotationY(angle);
            basicEffect.View = Matrix.CreateLookAt(new Vector3(0, 0f, 5.0f),
                          Vector3.Zero, Vector3.Up);
            basicEffect.Projection = Matrix.CreatePerspectiveFieldOfView
                          (MathHelper.PiOver4, 1f, 0.01f, 1000.0f);
            graphicDevice.SamplerStates[0] = SamplerState.LinearClamp;
            // Очищаем графическое устройство
            graphicDevice.Clear(new Color(0.8f, 0.8f, 0.8f, 1.0f));
            // Устанавливаем на устройстве буфер вершин
            graphicDevice.SetVertexBuffer(vertexBuffer);
            // Выполняем проходы эффекта
            foreach (EffectPass pass in basicEffect.CurrentTechnique.Passes)
            {
                pass.Apply();
                // Отрисовка графики
                graphicDevice.DrawPrimitives(PrimitiveType.TriangleList,
                  0, 12);
            }
            // Уведомляем систему о том, что можно сново вызывать событие Draw
            e.InvalidateSurface();
        }
</pre>
<p>Здесь опять же все то же самое, что и было в образце с цветным кубом, за исключением одной строки: <code>graphicDevice.SamplerStates[0] = SamplerState.LinearClamp;</code>, 
в которой определяется метод отбора значений текстуры для их последующего сопоставления с поверхностью трехмерного объекта.</p>
<p>Теперь мы можем перестроить проект и запустить тестовую страницу в браузере:</p>
<img src="silpics/14.6.jpg" />
<p>Таким образом мы можем выполнить текстурирование трехмерного объекта и обработать пользовательский ввод по отношению к данному объекту.</p>
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


<div class="nav"><p><a href="14.2.php">Назад</a><a href="./">Содержание</a><a href="14.4.php">Вперед</a></p></div></div>
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
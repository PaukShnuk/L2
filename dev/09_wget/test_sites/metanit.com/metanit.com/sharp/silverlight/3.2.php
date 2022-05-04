<!DOCTYPE html>
<html >
<head>
<title>Создание элемента компоновки</title>
<meta charset="utf-8" />
<meta name="description" content="Создание элемента компоновки с применением методов MeasureOverride и ArrangeOverride">
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
<h2>Создание элемента компоновки</h2><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Иногда может потребоваться создать свой собственный элемент компоновки, поскольку стандартные контейнеры не могут охватить весь спектр задач и 
потребностей разработчиков. При создании собственного контейнера комповки надо учитывать несколько моментов.</p>
<p>Во-первых, как и все элементы компоновки, новый элемент должен быть унаследован от класса <span class="bb">System.Windows.Controls.Panel</span>.</p>
<p>Во-вторых, новый контейре компоновки, должен реализовать два метода - MeasureOverride и ArrangeOverride. который унаследованы 
в классовой ирерахии от класса FrameworkElement. Вобщем всю логику работы можно представить в два этапа - измерение размеров элементов, которое 
происходит в методе MeasureOverride, и сам процесс компановки элементов, который происходит в методе ArrangeOverride. 
Посмотрим, что представляют эти методы.</p>
<h3>MeasureOverride</h3>
<p>В методе MeasureOverride мы должны пройти по всем дочерним элементам контейнера и вызвать для каждого элемента метод <span class="bb">Measure()</span>. В 
этот метод в качестве параметра передаются размеры максимально допустимого места для данного элемента. После этого метода мы можем получить 
текущее значение свойства DesiredSize данного элемента с учетом ограничения по размеру. В любом случае этот метод должен вызываться обязательно, 
тем более что без этого некоторые дочерние элементы не будут отрисованы. В конце метода мы возвращаем размер панели:</p>
<pre class="brush:c#;">
protected override Size MeasureOverride(Size panelSpace)
{
    // Обход всех дочерних элементов
    foreach (UIElement element in this.Children)
    {
        //Указываем аксимально допустимый размер элемента
        Size availableElementSize = new Size(...);
        element.Measure(availableElementSize);
    }
    return new Size(...);
}
</pre>
<h3>ArrangeOverride</h3>
<p>Метод ArrangeOverride похож на метод MeasureOverride. В нем мы также возвращаем размер панели и также осуществляем обход элементов. 
Только теперь вместо метода <span class="bb">Measure()</span> вызывается метод <span class="bb">Arrange()</span>. В этот метод в качестве параметра передаются координаты 
прямоугольника, в котором должен располагаться элемент на панели для данного элемента:</p>
<pre class="brush:c#;">
protected override Size ArrangeOverride(Size panelSize)
{
    // Обход всех дочерних элементов
    foreach (UIElement element in this.Children)
    {
        // Указываем координаты прямоугольнкиа,
		// в который будет вписан элемент
        Rect elementBounds = new Rect(...);
        element.Arrange(elementBounds);
    }

    // возвращаем размер панели
    return arrangeSize;
}
</pre>
<p>Теперь посмотрим на примере, как реализовать собственную панель. Допустим, мы хотим создать некую панель <span class="bb">Table</span> - таблицу, 
которая будет содержать некоторое количество строк и столбцов, автоматически настраивающих свои размеры под размер элементов управления.</p>
<p>Для начала в методе CalculateColumns мы будем устанавливать количество строк и столбцов. Кроме того, в методе MeasureOverride мы будем устанавливать 
значения высоты для каждой строки и значения ширины для каждого столбца. И на основании этих данных в методе ArrangeOverride позиционировать 
элемент на панели:</p>
<pre class="brush:c#;">
public class Table : System.Windows.Controls.Panel
    {
        public int ColumnsNumber { get; set; }
        public int RowsNumber { get; set; }

        public double[] Rows;
        public double[] Columns;

        private int realColumns;
        private int realRows;

        public Table() : base()
        {}

        private void CalculateColumns()
        {
            // Подсчет элементов
            double elementCount = this.Children.Count;
            // Если панель пуста, выходим из метода
            if (elementCount == 0) return;

            realRows = RowsNumber;
            realColumns = ColumnsNumber;

            // Если свойства Rows и Columns установлены, используем их
            if ((realRows != 0) && (realColumns != 0))
                return;

            // Если ни одно из свойств не установлено, вычисляем кол-во столбцов
            if ((realColumns == 0) && realRows == 0)
                realColumns = (int)Math.Ceiling(Math.Sqrt(elementCount));

            // Если установлено только свойство Rows, вычисляем свойство Columns
            if (realColumns == 0)
                realColumns = (int)Math.Ceiling(elementCount / realRows);

            // Если установлено только свойство Columns, вычисляем свойство Rows
            if (realRows == 0)
                realRows = (int)Math.Ceiling(elementCount / realColumns);

            //Массив для значений высоты строк
            Rows = new double[realRows];

            //Массив для значений ширины столбцов
            Columns = new double[realColumns];
        }

        protected override Size MeasureOverride(Size availableSize)
        {
            CalculateColumns();
            // некий ограничитель
            int constraint = 300;
            // распределяем пространство панели равномерно
            Size childConstraint = new Size(constraint / realColumns, constraint / realRows);

            int rowcounter = 0;
            int colcounter = 0;

            // Обход всех элементов
            foreach (UIElement child in this.Children)
            {
                // Получаем желаемый размер элемента
                child.Measure(childConstraint);

                // Обновляем максимальное значение стркои
                Rows[rowcounter] = child.DesiredSize.Height &lt; Rows[rowcounter] ? Rows[rowcounter] : child.DesiredSize.Height;
                // Обновляем максимальное значение столбца
                Columns[colcounter] = child.DesiredSize.Width &lt; Columns[colcounter] ? Columns[colcounter] : child.DesiredSize.Width;
                //Добавляем 10 для задания отступа
                Columns[colcounter] = Columns[colcounter] + 10;
               
                colcounter++;
                if (colcounter == realColumns)
                {
                    rowcounter++;
                    colcounter = 0;
                }
            }
            // Получаем совокупную высоты всех строки и ширину всех столбцов
            double panelHeight = Rows.Sum();
            double panelWidth = Columns.Sum();
            // На основании полученных значений устанавливаем размер панели
            return new Size(panelHeight, panelWidth);
        }

        protected override Size ArrangeOverride(Size arrangeSize)
        {
            double cellWidth ;
            double cellHeight;

            // Счетчики
            int rowcounter = 0;
            int colcounter = 0;

            // Текущие позиции
            double currentX = 0;
            double currentY = 0;

            // Обход всех элементов панели
            foreach (UIElement child in this.Children)
            {
                cellHeight = Rows[rowcounter];
                cellWidth = Columns[colcounter];
                // Определяем пространство для каждого дочернего элемента
                child.Arrange(new Rect(currentX, currentY, cellWidth, cellHeight));

                colcounter++;
                currentX += cellWidth;
                if (colcounter == realColumns)
                {
                    rowcounter++;
                    colcounter = 0;
                    currentY += cellHeight;
                    currentX = 0;
                } 
            }
            // Возвращаем размер панели                       
            return arrangeSize;
        }
    }
</pre>
<p>Чтобы использовать в XAML нашу таблицу, сначала надо добавить в декларации пространство имен приложения:</p>
<pre class="brush:xml;">
&lt;UserControl x:Class="TestApplication.MainPage"
    xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
    xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
    xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
    xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
             xmlns:local="clr-namespace:TestApplication"
    mc:Ignorable="d"
    d:DesignHeight="250" d:DesignWidth="300"&gt;
    &lt;Grid x:Name="LayoutRoot" Background="White"&gt;
        &lt;TextBlock Text="TIOBE Index" HorizontalAlignment="Center"/&gt;
        &lt;local:Table Background="AntiqueWhite" ColumnsNumber="3" Margin="0 20 0 0"&gt;
            &lt;TextBlock Text="Первая" Height="40" /&gt;
            &lt;TextBlock Text="пятерка" Height="30" /&gt;
            &lt;TextBlock Text="языков" Height="20" /&gt;
            &lt;TextBlock Text="Place" /&gt;
            &lt;TextBlock Text="Language" /&gt;
            &lt;TextBlock Text="Rate" /&gt;
            &lt;TextBlock Text="1" /&gt;
            &lt;TextBlock Text="C" /&gt;
            &lt;TextBlock Text="17.346%" /&gt;
            &lt;TextBlock Text="2" /&gt;
            &lt;TextBlock Text="Java" /&gt;
            &lt;TextBlock Text="16.599%" /&gt;
            &lt;TextBlock Text="3" /&gt;
            &lt;TextBlock Text="C++" /&gt;
            &lt;TextBlock Text="17.346%" /&gt;
            &lt;TextBlock Text="4" /&gt;
            &lt;TextBlock Text="Objective-C" /&gt;
            &lt;TextBlock Text="8.309%" /&gt;
            &lt;TextBlock Text="5" /&gt;
            &lt;TextBlock Text="C#" /&gt;
            &lt;TextBlock Text="6.823%" /&gt;
        &lt;/local:Table&gt;
    &lt;/Grid&gt;
&lt;/UserControl&gt;
</pre>
<p>Если мы запустим приложение, то увидим браузере нашу таблицу:</p>
<img src="silpics/3.7.jpg" />
<p>Обратите внимание. что мы задали число столбцов, и панель автоматически расчитала все строки. Также обратите внимание, что для первой строки 
высота была установлена по самому большому элементу - в данном случае по кнопке, которая имеет высоту 40 пикселей.</p>


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


<div class="nav"><p><a href="3.1.php">Назад</a><a href="./">Содержание</a><a href="4.0.php">Вперед</a></p></div></div>
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
<!DOCTYPE html>
<html >
<head>
<title>Работа с мультимедиа</title>
<meta charset="utf-8" />
<meta name="description" content="Воспроизведение видео и аудиоресурсов в приложение Silverlight, использование элемента MediaElement">
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
<h1>Работа с мультимедиа</h1><div class="date">Последнее обновление: 1.11.2015</div>

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

<p>Одной из сильных сторон технологии Silverlight является работа с мультимедиа - с аудио и видеоресурсами.</p>
<h3>Элемент MediaElement</h3>
<p>За воспроизведение аудио и видеоресурсов отвечает элемент MediaElement:</p>
<pre class="brush:xml;">&lt;MediaElement x:Name="media1" Source="Video.mp4" Width="300" Height="250" AutoPlay="True" /&gt;</pre>
<p>Этот элемент имеет следующие полезные свойства:</p>
<ul>
	<li><p><span class="bb">Source</span> - представляет свойство типа <span class="bb">Uri</span> и принимает в качестве значения имя ресурса. Здесь мы передаем либо имя файла, 
	который может находиться у нас в ресурсах, либо, например, имя веб-ресурса, который мы собираемся воспроизвести</p></li>
	<li><p><span class="bb">AutoPlay</span> показывает, должен ли ресурс воспроизводиться автоматически</p></li>
	<li><p><span class="bb">Height/Width</span> - высота и ширина области видео, если эти свойства не заданы, то содержимое автоматически растягивается до 
	размеров родительского контейнера</p></li>
	<li><p><span class="bb">Stretch</span> определяет форму растяжения элемента в родительском контейнере. По умолчанию имеет значение <span class="bb">Fill</span>.</p></li>
	<li><p><span class="bb">Volume</span> определяет громкость воспроизводимого. Принимает значений от 0 до 1, где 1 - это самый громкий уровень.</p></li>
	<li><p><span class="bb">Balance</span> определяет баланс между правым и левым динамиком. Принимает значений от -1 до 1, где при 1 звук идет только на 
	правый динамик, а при -1 - только на левый динамик. При значении 0 звук распределяется между динамиками равномерно.</p></li>
	<li><p><span class="bb">Position</span> предоставляет объект TimeSpan, который указывает на текущее положение в файле - то есть на время.</p></li>
</ul>
<p>С помощью метод <span class="bb">Play</span>, <span class="bb">Pause</span> и <span class="bb">Stop</span> мы можем управлять воспроизведением содержимого. Например, добавим на форму 
три кнопки - по одной для каждого метода. Мы могли бы создать две строки и три колонки в элементе Grid, чтобы управлять размещением элементов. 
Однако сейчас мы разместим кнопки поверж элемента MediaElement. Разметка xaml у нас будет выглядеть следующим образом:</p>
<pre class="brush:xml;">
    &lt;Grid x:Name="LayoutRoot"&gt;
        &lt;MediaElement x:Name="media1" Source="Video.mp4" AutoPlay="False" /&gt;
        &lt;Button x:Name="playButton" Content="Play" Click="playButton_Click" VerticalAlignment="Bottom" HorizontalAlignment="Left" Width="60" Height="25"/&gt;
        &lt;Button x:Name="pauseButton" Content="Pause" Click="pauseButton_Click"  VerticalAlignment="Bottom" HorizontalAlignment="Center" Width="60" Height="25"/&gt;
        &lt;Button x:Name="stopButton" Content="Stop" Click="stopButton_Click"  VerticalAlignment="Bottom" HorizontalAlignment="Right" Width="60" Height="25" /&gt;
    &lt;/Grid&gt;
</pre>
<p>А в файле кода определим обработчики для кнопок:</p>
<pre class="brush:c#;">
	    private void playButton_Click(object sender, RoutedEventArgs e)
        {
            media1.Play();
        }

        private void pauseButton_Click(object sender, RoutedEventArgs e)
        {
            media1.Pause();
        }

        private void stopButton_Click(object sender, RoutedEventArgs e)
        {
            media1.Stop();
        }
</pre>
<p>Теперь с помощью кнопок мы можем управлять воспроизведением контента.</p>
<img src="silpics/13.1.jpg" />
<P>Теперь немного усложним приложение, добавив в него настройку звука и контроль за временем воспроизведения. Для этого добавим несколько новых элементов:
три элемента Slider и два элемента TextBlock. Общий код xaml будет выглядеть следующим образом:</P>
<pre class="brush:xml;">
  &lt;Grid x:Name="LayoutRoot"&gt;
        &lt;MediaElement x:Name="media1" Stretch="UniformToFill"  Source="office_3.wmv" AutoPlay="False" MediaOpened="media1_MediaOpened" /&gt;
        &lt;Button x:Name="playButton" Content="Play" Click="playButton_Click" VerticalAlignment="Bottom" HorizontalAlignment="Left" Width="40" Height="25"/&gt;
        &lt;Button x:Name="pauseButton" Content="Pause" Click="pauseButton_Click"  VerticalAlignment="Bottom" HorizontalAlignment="Left" Width="40" Height="25" Margin="40 0 0 0"/&gt;
        &lt;Button x:Name="stopButton" Content="Stop" Click="stopButton_Click"  VerticalAlignment="Bottom" HorizontalAlignment="Left" Width="40" Height="25" Margin="80 0 0 0" /&gt;
        &lt;TextBlock Text="Громкость" VerticalAlignment="Bottom" HorizontalAlignment="Left" Margin="130 0 0 0" /&gt;
        &lt;Slider x:Name="slider1" Height="20" VerticalAlignment="Bottom" HorizontalAlignment="Left" Width="100"  Margin="200 0 0 0" Minimum="0" Maximum="1" Value="0.5" ValueChanged="slider1_ValueChanged" /&gt;
        &lt;Slider x:Name="slider2" Height="20" VerticalAlignment="Bottom" Margin="0 0 0 30"  ValueChanged="slider2_ValueChanged"  Opacity="0.5" /&gt;
        &lt;Slider x:Name="sliderback2" Height="20" VerticalAlignment="Bottom" Margin="0 0 0 30"  IsHitTestVisible="False" /&gt;
        &lt;TextBlock x:Name="time" Text="00:00" VerticalAlignment="Top"  /&gt;
    &lt;/Grid&gt;
</pre>
<p>Большая часть кода выполняет компоновочную функцию, определяя размеры и место элемента на странице. Однако обратите внимание, что 
у нас два ползунка - sliderback2 и slider2 совмещаются. А в файле отделенного кода будет прописано следующее:</p>
<pre class="brush:c#;">
    public partial class MainPage : UserControl
    {
        DispatcherTimer timer = new DispatcherTimer();
        public MainPage()
        {
            InitializeComponent();
            timer.Interval = TimeSpan.FromSeconds(0.1);
            timer.Tick += timer_tick;
        }
        
        private void timer_tick(object sender, EventArgs e)
        {
            time.Text = media1.Position.ToString(@"mm\:ss");
            sliderback2.Value = media1.Position.TotalSeconds;
        }

        private void playButton_Click(object sender, RoutedEventArgs e)
        {
            media1.Play();
            timer.Start();
        }

        private void pauseButton_Click(object sender, RoutedEventArgs e)
        {
            media1.Pause();
            timer.Stop();
        }

        private void stopButton_Click(object sender, RoutedEventArgs e)
        {
            media1.Stop();
            timer.Stop();
        }

        private void media1_MediaOpened(object sender, RoutedEventArgs e)
        {
            slider2.Maximum = media1.NaturalDuration.TimeSpan.TotalSeconds;
            sliderback2.Maximum = media1.NaturalDuration.TimeSpan.TotalSeconds;
        }

        private void slider1_ValueChanged(object sender, RoutedPropertyChangedEventArgs<double> e)
        {
            if (media1 != null)
            {
                media1.Volume = slider1.Value;
            }
        }

        private void slider2_ValueChanged(object sender, RoutedPropertyChangedEventArgs<double> e)
        {
            media1.Pause();
            media1.Position = TimeSpan.FromSeconds(slider2.Value);
            media1.Play();
        }  
    }
</pre>
<p>Здесь в общем все понятно: сначала мы создаем объект таймера и прописываем некоторую дополнительную логику, связанную с изменением времени. 
Но возникает вопрос: зачем нам два ползунка? К сожалению не все так просто. Если бы мы использовали один ползунок, то при изменении времени таймера 
значению ползунка присваивалось значение позиции в элементе MediaElement, но при этом шло бы изменение значение ползунка, что в свою очередь изменяло 
текущую позицию элемента MediaElement, в итоге получалось бы отбрасывание назад. Поэтому в данном случае решение с двумя ползунками является самым простым. 
Однако это не значит, что мы не могли бы использовать только один ползунок. Просто в этом случае решение выглядело бы сложнее. Кроме того, 
мы могли бы использовать интеграцию с JavaScript и элементами HTML веб-страницы, что также могло в некотором плане облегчить написание плейера, 
но про интеграцию мы поговорим в следующих главах. А сейчас мы можем использовать уже имеющийся плейер:</p>
<img src="silpics/13.2.jpg" />
<h4>Поддерживаемые аудиоформаты</h4>
<p>Список поддерживаемых форматов для аудио:</p>
<ul>
<li><p>Wav</p></li>
<li><p>Windows Media Audio (wma) - версии 7,8,9</p></li>
<li><p>MP3 с фиксированной или перемнной скоростью передачи данных 8-320 кБит/сек</p></li>
</ul>
<p>Поддерживаемые видеоформаты:</p>
<ul>
<li><p>Windows Media Video (wmv) - версии 7,8,9</p></li>
<li><p>Windows Media Video Advanced Profile, non-VC-1 (wmva)</p></li>
<li><p>Windows Media Video Advanced Profile, VC-1 (wmvc1)</p></li>
<li><p>H.264 для видео и AAC для аудио (также известен как формат MPEG-4 Part 10 или MPEG-4 AVC) - контейнер mp4</p></li>
</ul>
<P>Также стоит сказать, что Silverlight поддерживает как воспроизведение отдельных непотоковых файлов, так и потоковую передачу по протоколам 
http, mms, rtsp.</P>
<h4>Работа с маркерами</h4>
<P>Медиафайл может обладать маркерами. Маркеры представляют некоторые метаданные или аннотации, ассоциированные с определенной временной точкой 
файла. Такие маркеры очень удобны для создания субтитров.</P>
<p>Когда при воспроизведении файла поток доходит до маркера, то элемент MediaElement генерирует событие <span class="bb">MarkerReached</span>. Чтобы использовать 
маркеры, изменим предыдущее приложение. Вначале нам надо где-то выводить текст маркеров. Для этого добавим еще один элемент TextBlock, который будет 
располагаться над ползунком времени. А также изменим код элемента MediaElement:</p>
<pre class="brush:xml;">
	.........
    &lt;MediaElement x:Name="media1" Stretch="UniformToFill"  Source="office_3.wmv" AutoPlay="False" MediaOpened="media1_MediaOpened" MarkerReached="media1_MarkerReached" /&gt;
    &lt;TextBlock x:Name="markerBlock" Width="300" Height="40" TextWrapping="Wrap" FontSize="14" VerticalAlignment="Bottom" Margin="0 0 0 50" /&gt;
    .........
</pre>
<p>Теперь в файле кода добавим соответствующий обработчик событий:</p>
<pre class="brush:c#;">
	    private void media1_MarkerReached(object sender, TimelineMarkerRoutedEventArgs e)
        {
            markerBlock.Text = e.Marker.Text;
        }
</pre>
<p>Здесь мы получаем текст маркера и присваиваем его значение свойству Text нашего нового элемента TextBlock. И теперь, если в медиафайле есть 
какие-нибудь маркеры. мы можем запустить приложение. Однако в моем файле не оказалось маркеров.</p>
<p>Как добавить маркеры? Это можно сделать, например, с помощью программы Microsoft Expression Media Encoder. В этом случае мы добавляем маркеры 
напрямую в файл.</p>
<p>Кроме того, мы можем создать маркеры программным способом. Правда в этом случае мы добавляем их не в файл, в к элементу MediaElement. 
Что мы сейчас и сделаем.</p>
<p>Итак, каждый маркер представляет собой объект <strong>TimelineMarker</strong>. Чтобы этот объект можно было использовать, для него надо определить 
временную точку с помощью свойства Time и определить текст маркера с помощью свойства Text. Также можно определить свойство Type. И в конце 
добавить новый маркер в коллекцию <span class="bb">Markers</span> элемента MediaElement. Итак, добавим в код три маркера и инициализируем их в конструкторе окна:</p>
<pre class="brush:c#;">
        TimelineMarker marker1,marker2,marker3;
        public MainPage()
        {
            InitializeComponent();
            timer.Interval = TimeSpan.FromSeconds(0.1);
            timer.Tick += timer_tick;

            marker1 = new TimelineMarker();
            marker1.Text = "На мониторе исходный код программы";
            marker1.Time = new TimeSpan(0,0,54);
            marker2 = new TimelineMarker();
            marker2.Text = "Фильм Офис-3";
            marker2.Time = new TimeSpan(0, 0,0);
            marker3 = new TimelineMarker();
            marker3.Text = "";
            marker3.Time = new TimeSpan(0, 0, 8);
        }</pre>
<p>Теперь добавим их к MediaElement в обработчике события MediaOpened - то есть в процедуре media1_MediaOpened:</p>
<pre class="brush:c#;">private void media1_MediaOpened(object sender, RoutedEventArgs e)
        {
            slider2.Maximum = media1.NaturalDuration.TimeSpan.TotalSeconds;
            sliderback2.Maximum = media1.NaturalDuration.TimeSpan.TotalSeconds;
            media1.Markers.Add(marker1);
            media1.Markers.Add(marker2);
            media1.Markers.Add(marker3);
        }
</pre>
<p>После запуска приложения в процессе просмотра наши маркеры будут отображаться в элементе TextBlock именно на тех временных отрезках, на которых они определены:</p>
<img src="silpics/13.3.jpg" />
<h3>Использование кисти VideoBrush</h3>
<p>Говоря о кистях, мы не затрагивали такую кисть, как <span class="bb">VideoBrush</span>. Эта кисть принимает в качестве источника некоторый медиаконтент и его отрисовывет 
на элементе. Итак, используем кисть VideoBrush:</p>
<pre class="brush:xml;">
	&lt;MediaElement x:Name="media1" Source="office_3.wmv" Width="0" Height="0" /&gt;
        &lt;Ellipse Width="250" Height="200" VerticalAlignment="Center"&gt;
            &lt;Ellipse.Fill&gt;
                &lt;VideoBrush SourceName="media1" /&gt;
            &lt;/Ellipse.Fill&gt;
        &lt;/Ellipse&gt;
</pre>
<p>Здесь мы создаем элемент MediaElement с нулевыми размерами, и затем создаем элемент Ellipse, чей фон задается кистью VideoBrush. 
Эта кисть в качестве источника принимает ранее созданный MediaElement. Теперь после запуска приложения и соответственно после запуска воспроизведения 
в MediaElement мы увидим весь воспроизводимый контент на элементе Ellipse:</p>
<img src="silpics/13.4.jpg" />
<p>В данном случае мы могли использовать любой элемент, а также могли установить VideoBrush не только для свойства Fill или Background, но и для 
свойства Foreground. Кроме того, для элементов управления содержимым, как, например, элемент Button, мы можем просто встроить MediaElement в свойство 
Content и таким образом обойтись без VideoBrush.</p>
<p>К элементу VideoBrush также могут применяться трансформации. Например, сужение по оси Х:</p>
<pre class="brush:xml;">
			&lt;VideoBrush SourceName="media1"&gt;
				&lt;VideoBrush.RelativeTransform&gt;
					&lt;ScaleTransform ScaleX="0.5" /&gt;
				&lt;/VideoBrush.RelativeTransform&gt;
			&lt;/VideoBrush&gt;
</pre>
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


<div class="nav"><p><a href="12.php">Назад</a><a href="./">Содержание</a><a href="14.1.php">Вперед</a></p></div></div>
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
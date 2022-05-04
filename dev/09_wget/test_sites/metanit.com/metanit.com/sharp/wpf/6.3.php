<!DOCTYPE html>
<html >
<head>
<title>C# и WPF | События мыши и фокуса</title>
<meta charset="utf-8" />
<meta name="description" content="События мыши в WPF, примеры их обработки, создания перетскивания drag and drop, объект MouseButtonEventArgs, обработка событий получения и потери фокуса">
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
<h2>События мыши и фокуса</h2><div class="date">Последнее обновление: 22.01.2016</div>

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

<p>В WPF для мыши определены следующие события:</p>
<table class="tab">
<tr class="tabhead"><td><p>Событие</p></td><td><p>Тип события</p></td><td><p>Описание</p></td></tr>
<tr><td><p><span class="b">GotMouseCapture</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при получении фокуса с помощью мыши</p></td></tr>
<tr><td><p><span class="b">LostMouseCapture</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при потере фокуса с помощью мыши</p></td></tr>
<tr><td><p><span class="b">MouseEnter</span></p></td><td><p>Прямое</p></td><td><p>Возникает при вхождении указателя мыши в пределы элемента</p></td></tr>
<tr><td><p><span class="b">MouseLeave</span></p></td><td><p>Прямое</p></td><td><p>Возникает, когда указатель мыши выходит за пределы элемента</p></td></tr>
<tr><td><p><span class="b">MouseLeftButtonDown</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при нажатии левой кнопки мыши</p></td></tr>
<tr><td><p><span class="b">PreviewMouseLeftButtonDown</span></p></td><td><p>Туннельное</p></td><td><p>Возникает при нажатии левой кнопки мыши</p></td></tr>
<tr><td><p><span class="b">MouseLeftButtonUp</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при освобождении левой кнопки мыши</p></td></tr>
<tr><td><p><span class="b">PreviewMouseLeftButtonUp</span></p></td><td><p>Туннельное</p></td><td><p>Возникает при освобождении левой кнопки мыши</p></td></tr>
<tr><td><p><span class="b">MouseRightButtonDown</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при нажатии правой кнопки мыши</p></td></tr>
<tr><td><p><span class="b">PreviewMouseRightButtonDown</span></p></td><td><p>Туннельное</p></td><td><p>Возникает при нажатии правой кнопки мыши</p></td></tr>
<tr><td><p><span class="b">MouseRightButtonUp</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при освобождении правой кнопки мыши</p></td></tr>
<tr><td><p><span class="b">PreviewMouseRightButtonUp</span></p></td><td><p>Туннельное</p></td><td><p>Возникает при освобождении правой кнопки мыши</p></td></tr>
<tr><td><p><span class="b">MouseDown</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при нажатии кнопки мыши</p></td></tr>
<tr><td><p><span class="b">PreviewMouseDown</span></p></td><td><p>Туннельное</p></td><td><p>Возникает при нажатии кнопки мыши</p></td></tr>
<tr><td><p><span class="b">MouseUp</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при освобождении кнопки мыши</p></td></tr>
<tr><td><p><span class="b">PreviewMouseUp</span></p></td><td><p>Туннельное</p></td><td><p>Возникает при освобождении кнопки мыши</p></td></tr>
<tr><td><p><span class="b">MouseMove</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при передвижении указателя мыши</p></td></tr>
<tr><td><p><span class="b">PreviewMouseMove</span></p></td><td><p>Туннельное</p></td><td><p>Возникает при передвижении указателя мыши</p></td></tr>
<tr><td><p><span class="b">MouseWheel</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при передвижении колесика мыши</p></td></tr>
<tr><td><p><span class="b">PreviewMouseWheel</span></p></td><td><p>Туннельное</p></td><td><p>Возникает при передвижении колесика мыши</p></td></tr>
</table>
<p>Если вдруг мы не хотим, чтобы элемент генерировал события мыши, то мы можем у него установить свойство <code>IsHitTestVisible="False"</code></p>
<p>Большинство обработчиков событий мыши в качестве параметра получают объект <code>MouseEventArgs</code>, имеющий ряд интересных свойств и методов, 
которые мы можем использовать:</p>
<ul>
<li><p><span class="b">ButtonState</span>: возвращает состояние кнопки мыши. Хранит одно из значений перечисления <span class="b">MouseButtonState</span>:</p>
<ul>
<li><p><code>Pressed</code>: кнопка наата</p></li>
<li><p><code>Released</code>: кнопка отжата</p></li>
</ul></li>
<li><p><span class="b">ChangedButton</span>: получает кнопку, которая ассоциирована с данным событием. Хранит одно из значений перечисления <span class="b">MouseButton</span>:</p>
<ul>
<li><p><code>Left</code>: левая кнопка мыши</p></li>
<li><p><code>Middle</code>: средняя кнопка мыши</p></li>
<li><p><code>Right</code>: правая кнопка мыши</p></li>
<li><p><code>XButton1</code>: дополнительная кнопка мыши</p></li>
<li><p><code>XButton2</code>: дополнительная кнопка мыши</p></li>
</ul></li>
<li><p><span class="b">ClickCount</span>: хранит число сделанных нажатий</p></li>
<li><p><span class="b">LeftButton</span>: хранит состояние левой кнопки мыши в виде MouseButtonState</p></li>
<li><p><span class="b">MiddleButton</span>: хранит состояние средней кнопки мыши в виде MouseButtonState</p></li>
<li><p><span class="b">RightButton</span>: хранит состояние правой кнопки мыши в виде MouseButtonState</p></li>
<li><p><span class="b">XButton1</span>: хранит состояние первой дополнительной кнопки</p></li>
<li><p><span class="b">XButton2</span>: хранит состояние второй дополнительной кнопки</p></li>
<li><p><span class="b">GetPosition()</span>: метод, который возвращает координаты нажатия в виде объекта Point</p></li>
</ul>
<p>Например, используем метод <code>GetPosition()</code>. Для этого установим для грида обработчик:</p>
<pre class="brush:xml;">&lt;Grid MouseDown="Grid_MouseDown"&gt;</pre>
<p>И определим этот обработчик:</p>
<pre class="brush:c#;">
private void Grid_MouseDown(object sender, MouseButtonEventArgs e)
{
    Point p = e.GetPosition(this);
    MessageBox.Show("Координата x=" +p.X.ToString()+ " y="+p.Y.ToString());
}
</pre>
<h3>События перетаскивания</h3>
<p>События перетаскивания (drag &amp; drop) связаны с перетаскиванием элементов, когда пользователь, нажимая на элементе мышкой и удерживая мышь нажатой, 
перемещает указатель на другой элемент, тем самым перемещая на этот элемент ранее нажатый.</p>
<table class="tab">
<tr class="tabhead"><td><p>Событие</p></td><td><p>Тип события</p></td><td><p>Описание</p></td></tr>
<tr><td><p><span class="b">DragEnter</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при перетаскивании при вхождении указателя мыши в пределы элемента</p></td></tr>
<tr><td><p><span class="b">DragOver</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при перемещении курсора в пределах границ элемента управления</p></td></tr>
<tr><td><p><span class="b">DragLeave</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при перемещении курсора мыши за пределы элемента</p></td></tr>
<tr><td><p><span class="b">Drop</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при завершении перетаскивания</p></td></tr>
<tr><td><p><span class="b">PreviewDragEnter</span></p></td><td><p>Тунельное</p></td><td><p>Возникает при перетаскивании при вхождении указателя мыши в пределы элемента</p></td></tr>
<tr><td><p><span class="b">PreviewDragOver</span></p></td><td><p>Тунельное</p></td><td><p>Возникает при перемещении курсора в пределах границ элемента управления</p></td></tr>
<tr><td><p><span class="b">PreviewDragLeave</span></p></td><td><p>Тунельное</p></td><td><p>Возникает при перемещении курсора мыши за пределы элемента</p></td></tr>
<tr><td><p><span class="b">PreviewDrop</span></p></td><td><p>Тунельное</p></td><td><p>Возникает при завершении перетаскивания</p></td></tr>
</table>
<p>Эти события используют объект <span class="b">DragEventArgs</span>, который имеет ряд свойств и методов:<p>
<ul>
<li><p><span class="b">GetPosition</span>: возвращает позицию мыши</p></li>
<li><p><span class="b">Data</span>: объект, представляющий буфер обмена - то есть те данные, которые перемещаются</p></li>
<li><p><span class="b">Effects</span> и <span class="b">AllowedEffects</span>: представляют эффект перетаскивния. Хранят одно из значений перечисления 
<span class="b">DragDropEffects</span>:</p>
<ul>
<li><p><code>All</code>: данные копируются из источника в целевой элемент с удалением из источника</p></li>
<li><p><code>Copy</code>: данные просто копируются из источника в целевой элемент</p></li>
<li><p><code>Link</code>: данные из источника связываются с данными из целевого элемента</p></li>
<li><p><code>Move</code>: данные перемещаются из источника в целевой элемент</p></li>
<li><p><code>None</code>: отсутствие эффекта</p></li>
<li><p><code>Scroll</code>: данные прокручиваются при копировании в целевой элемент</p></li>
</ul>
</li>
<li><p><span class="b">KeyStates</span>: хранит значение из перечисления <span class="b">DragDropKeyStates</span>, которое указывает, какая клавиша клавиатуры 
или мыши зажата во время перетаскивания: LeftMouseButton, RightMouseButton, MiddleMouseButton, ShiftKey, ControlKey, AltKey, None</p></li>
</ul>
<p>Посмотрим на примере. Допустим, у нас следующая разметка xaml:</p>
<pre class="brush:xml;">
&lt;Window x:Class="EventsApp.MainWindow"
        xmlns="http://schemas.microsoft.com/winfx/2006/xaml/presentation"
        xmlns:x="http://schemas.microsoft.com/winfx/2006/xaml"
        xmlns:d="http://schemas.microsoft.com/expression/blend/2008"
        xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006"
        xmlns:local="clr-namespace:EventsApp"
        mc:Ignorable="d"
        Title="MainWindow" Height="250" Width="400"&gt;
    &lt;Grid&gt;
        &lt;Grid.RowDefinitions&gt;
            &lt;RowDefinition /&gt;
            &lt;RowDefinition /&gt;
        &lt;/Grid.RowDefinitions&gt;
        &lt;DockPanel &gt;
            &lt;TextBox x:Name="textBox1" MouseDown="textBox1_MouseDown" /&gt;
        &lt;/DockPanel&gt;

        &lt;Button x:Name="button1" Grid.Row="1" AllowDrop="True" Drop="button1_Drop"  /&gt;
    &lt;/Grid&gt;
&lt;/Window&gt;
</pre>
<p>Здесь мы будем перемещать введенный текст из текстового поля на кнопку. Чтобы кнопка могла принимать перемещаемые объекты, установим ее свойство 
<code>AllowDrop="True"</code>. Одни элементы на другие, то нам надо у элементов-приемников всегда устанавливать данное свойство.</p>
<p>Здесь также подключены два обработчика события, которые мы зададим в коде C#:</p>
<pre class="brush:c#;">
private void textBox1_MouseDown(object sender, MouseButtonEventArgs e)
{
    DragDrop.DoDragDrop(textBox1, textBox1.Text, DragDropEffects.Copy);
}

private void button1_Drop(object sender, DragEventArgs e)
{
    button1.Content = e.Data.GetData(DataFormats.Text);
}
</pre>
<p>Чтобы захватить элемент для переноса, нам надо вызвать метод DragDrop.DoDragDrop, который в качестве первого параметра принимает элемент-источник, 
с которого идет перетаскивание, второй параметр - что перетаскиваем (в данном случае текст), и третий параметр - тип эффекта. Так как в данном случае 
у нас копирование, то устанавливаем DragDropEffects.Copy. Также мы можем использовать и другие константы: Move, None, Link, Scroll, All.</p>
<p>Введем текст в текстовое поле, выделим его, нажмем левой кнопкой и, не отпуская, переместим курсор в пределы кнопки. И отпустим. Здесь уже возникнет 
событие Drop кнопки, обработчик которого также прост: мы присваиваем ее содержимому данные перетаскивания. И поскольку мы перетаскиваем текст, то в качестве 
параметра выставляем <span class="b">DataFormats.Text</span></p>
<h3>События получения/потери фокуса</h3>
<p>При обработке событий фокуса следует помнить, что элемент может получать фокус только в том случае, если его свойство <code>Focusable</code> 
имеет значение <code>true</code>.</p>
<p>Чтобы программным способом передать элементу фокус, надо вызвать у него методы Focus или MoveFocus:</p>
<pre class="brush:c#;">textBox1.Focus();</pre>
<table class="tab">
<tr class="tabhead"><td><p>Событие</p></td><td><p>Тип события</p></td><td><p>Описание</p></td></tr>
<tr><td><p><span class="b">GotFocus</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при получении фокуса</p></td></tr>
<tr><td><p><span class="b">LostFocus</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при потере фокуса</p></td></tr>
<tr><td><p><span class="b">GotKeyboardFocus</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при получении фокуса с помощью клавиатуры</p></td></tr>
<tr><td><p><span class="b">PreviewGotKeyboardFocus</span></p></td><td><p>Туннельное</p></td><td><p>Возникает при получении фокуса с помощью клавиатуры</p></td></tr>
<tr><td><p><span class="b">LostKeyboardFocus</span></p></td><td><p>Поднимающееся</p></td><td><p>Возникает при потере фокуса с помощью клавиатуры</p></td></tr>
<tr><td><p><span class="b">PreviewLostKeyboardFocus</span></p></td><td><p>Туннельное</p></td><td><p>Возникает при потере фокуса с помощью клавиатуры</p></td></tr>
</table>
<p>Обработем событие получения фокуса для текстового поля:</p>
<pre class="brush:xml;">&lt;TextBox GotFocus="TextBox_GotFocus"  /&gt;</pre>
<p>В файле кода пропишем обработчик:</p>
<pre class="brush:c#;">
private void TextBox_GotFocus(object sender, RoutedEventArgs e)
{
    MessageBox.Show("Получение фокуса");
}
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


<div class="nav"><p><a href="6.2.php">Назад</a><a href="./">Содержание</a><a href="7.1.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 6.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 6.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
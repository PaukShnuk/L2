<!DOCTYPE html>
<html >
<head>
<title>Создание меню MenuStrip в Windows Forms | Visual C#</title>
<meta charset="utf-8" />
<meta name="description" content="">
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
<h2>Создание меню MenuStrip</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Для создания меню в Windows Forms применяется элемент <span class="bb">MenuStrip</span>. Данный класс унаследован от ToolStrip и 
поэтому наследует его функциональность.</p>
<p>Наиболее важные свойства компонента MenuStrip:</p>
<ul>
<li><p><code>Dock</code>: прикрепляет меню к одной из сторон формы</p></li>
<li><p><code>LayoutStyle</code>: задает ориентацию панели меню на форме. Может также, как и с ToolStrip, принимать следующие значения</p>
<ul>
<li><p><code>HorizontalStackWithOverflow</code>: расположение по горизонтали с переполнением - если длина меню превышает длину контейнера, 
то новые элементы, выходящие за границы контейнера, не отображаются, то есть панель переполняется элементами</p></li>
<li><p><code>StackWithOverflow</code>: элементы располагаются автоматически с переполнением</p></li>
<li><p><code>VerticalStackWithOverflow</code>: элементы располагаются вертикально с переполнением</p></li>
<li><p><code>Flow</code>: элементы размещаются автоматически, но без переполнения - если длина панели меню меньше длины контейнера, то 
выходящие за границы элементы переносятся</p>
<li><p><code>Table</code>: элементы позиционируются в виде таблицы</p></li>
</ul>
</li>
<li><p><code>ShowItemToolTips</code>: указывает, будут ли отображаться всплывающие подсказки для отдельных элементов меню</p></li>
<li><p><code>Stretch</code>: позволяет растянуть панель по всей длине контейнера</p></li>
<li><p><code>TextDirection</code>: задает направление текста в пунктах меню</p></li>
</ul>

<p>MenuStrip выступает своего рода контейнером для отдельных пунктов меню, которые представлены объектом <span class="bb">ToolStripMenuItem</span>.</p>
<p>Добавить новые элементы в меню можно в режиме дизайнера:</p>
<img src="pics/5.6.png" alt="Меню в C# и Windows Forms" />
<p>Для добавления доступно три вида элементов: <code>MenuItem</code> (объект ToolStripMenuItem), <code>ComboBox</code> и <code>TextBox</code>. Таким образом, 
в меню мы можем использовать выпадающие списки и текстовые поля, однако, как правило, эти элементы применяются в основном на панели инструментов. 
Меню же обычно содержит набор объектов ToolStripMenuItem.</p>
<p>Также мы можем добавить пункты меню в коде C#:</p>
<pre class="brush:c#;">
public partial class Form1 : Form
{
    public Form1()
    {
        InitializeComponent();

        ToolStripMenuItem fileItem = new ToolStripMenuItem("Файл");
            
        fileItem.DropDownItems.Add("Создать");
        fileItem.DropDownItems.Add(new ToolStripMenuItem("Сохранить"));

        menuStrip1.Items.Add(fileItem);

        ToolStripMenuItem aboutItem = new ToolStripMenuItem("О программе");
        aboutItem.Click += aboutItem_Click;
        menuStrip1.Items.Add(aboutItem);
    }

    void aboutItem_Click(object sender, EventArgs e)
    {
        MessageBox.Show("О программе");
    }
}
</pre>
<p>ToolStripMenuItem в конструкторе принимает текстовую метку, которая будет использоваться в качестве текста меню. Каждый подобный объект 
имеет коллекцию <span class="bb">DropDownItems</span>, которая хранит дочерние объекты ToolStripMenuItem. То есть один элемент ToolStripMenuItem 
может содержать набор других объектов ToolStripMenuItem. И таким образом, образуется иерархическое меню или структура в виде дерева.</p>
<p>Если передать при добавление строку текста, то для нее неявным образом будет создан объект ToolStripMenuItem: <code>fileItem.DropDownItems.Add("Создать")</code></p>
<p>Назначив обработчики для события <code>Click</code>, мы можем обработать нажатия на пункты меню: <code>aboutItem.Click += aboutItem_Click</code></p>
<img src="pics/5.7.png" />
<h3>Отметки пунктов меню</h3>
<p>Свойство <code>CheckOnClick</code> при значении true позволяет на клику отметить пункт меню. А с помощью свойства <code>Checked</code> 
можно установить, будет ли пункт меню отмечен при запуске программы.</p>
<p>Еще одно свойство <code>CheckState</code> возвращает состояние пункта меню - отмечен он или нет. Оно может принимать три значения: 
<code>Checked</code> (отмечен), <code>Unchecked</code> (неотмечен) и <code>Indeterminate</code> (в неопределенном состоянии)</p>
<p>Например, создадим ряд отмеченных пунктов меню и обработаем событие установки / снятия отметки:</p>
<pre class="brush:c#;">
public partial class Form1 : Form
{
    public Form1()
    {
        InitializeComponent();

        ToolStripMenuItem fileItem = new ToolStripMenuItem("Файл");

        ToolStripMenuItem newItem = new ToolStripMenuItem("Создать") { Checked = true, CheckOnClick = true };
        fileItem.DropDownItems.Add(newItem);


        ToolStripMenuItem saveItem = new ToolStripMenuItem("Сохранить") { Checked = true, CheckOnClick = true };
        saveItem.CheckedChanged += menuItem_CheckedChanged;

        fileItem.DropDownItems.Add(saveItem);

        menuStrip1.Items.Add(fileItem);
    }

    void menuItem_CheckedChanged(object sender, EventArgs e)
    {
        ToolStripMenuItem menuItem = sender as ToolStripMenuItem;
        if (menuItem.CheckState == CheckState.Checked)
            MessageBox.Show("Отмечен");
        else if (menuItem.CheckState == CheckState.Unchecked)
            MessageBox.Show("Отметка снята");
    }
}
</pre>
<img src="pics/5.8.png" />
<h3>Клавиши быстрого доступа</h3>
<p>Если нам надо быстро обратиться к какому-то пункту меню, то мы можем использовать клавиши быстрого доступа. Для задания клавиш быстрого доступа 
используется свойство <span class="bb">ShortcutKeys</span>:</p>
<pre class="brush:c#;">
public partial class Form1 : Form
{
    public Form1()
    {
        InitializeComponent();

        ToolStripMenuItem fileItem = new ToolStripMenuItem("Файл");
         
		ToolStripMenuItem saveItem = new ToolStripMenuItem("Сохранить") { Checked = true, CheckOnClick = true };
        saveItem.Click+=saveItem_Click;
        saveItem.ShortcutKeys = Keys.Control | Keys.P;
        
		fileItem.DropDownItems.Add(saveItem);
		menuStrip1.Items.Add(fileItem);
    }

    void saveItem_Click(object sender, EventArgs e)
    {
        MessageBox.Show("Сохранение");
    }
}
</pre>
<p>Клавиши задаются с помощью перечисления <code>Keys</code>. В данном случае по нажатию на комбинацию клавиш Ctrl + P, будет срабатывать нажатие на пункт 
меню "Сохранить".</p>

<p>С помощью изображений мы можем разнообразить внешний вид пунктов меню. Для этого мы можем использовать следующие свойства:</p>
<ul>
<li><p><code>DisplayStyle</code>: определяет, будет ли отображаться на элементе текст, или изображение, или и то и другое.</p></li>
<li><p><code>Image</code>: указывает на само изображение</p></li>
<li><p><code>ImageAlign</code>: устанавливает выравнивание изображения относительно элемента</p></li>
<li><p><code>ImageScaling</code>: указывает, будет ли изображение растягиваться, чтобы заполнить все пространство элемента</p></li>
<li><p><code>ImageTransparentColor</code>: указывает, будет ли цвет изображения прозрачным</p></li>
</ul>
<p>Если изображение для пункта меню устанавливает в режиме дизайнера, то нам надо выбрать в окне свойство пункт Image, после чего откроется 
окно для импорта ресурса изображения в проект</p>
<img src="pics/5.9.png" />
<p>Чтобы указать, как разместить изображение, у свойства DisplayStyle надо установить значение <code>Image</code>. Если мы хотим, чтобы 
кнопка отображала только текст, то надо указать значение <code>Text</code>, либо можно комбинировать два значения с помощью другого 
значения <code>ImageAndText</code>. По умолчанию изображение размещается слева от текста:</p>
<img src="pics/5.10.png" alt="Изображения в меню в Windows Forms" />
<p>Также можно установить изображение динамически в коде:</p>
<pre class="brush:c#;">fileToolStripMenuItem.Image = Image.FromFile(@"D:\Icons\0023\block32.png");</pre>
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


<div class="nav"><p><a href="5.1.php">Назад</a><a href="./">Содержание</a><a href="5.3.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в Windows Forms</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/1.1.php">Первый проект</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/2.1.php">Создание графического приложения</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Работа с формами</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/2.1.php">Основы форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/2.2.php">Основные свойства форм</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/2.3.php">Добавление форм. Взаимодействие между формами</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/2.4.php">События в Windows Forms. События формы</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/2.5.php">Создание непрямоугольных форм. Закрытие формы</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Контейнеры в Windows Forms</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/3.1.php">Динамическое добавление элементов</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/3.2.php">Элементы GroupBox, Panel и FlowLayoutPanel</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/3.3.php">TableLayoutPanel</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/3.4.php">Размеры элементов и их позиционирование в контейнере</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/3.5.php">Панель вкладок TabControl и SplitContainer</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Элементы управления</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.1.php">Кнопка</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.2.php">Метки и ссылки</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.3.php">Текстовое поле TextBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.4.php">Элемент MaskedTextBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.5.php">Элементы Radiobutton и CheckBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.6.php">ListBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.7.php">Элемент ComboBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.8.php">Привязка данных в ListBox и ComboBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.9.php">Элемент CheckedListBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.10.php">Элементы NumericUpDown и DomainUpDown</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.11.php">ImageList</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.12.php">ListView</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.13.php">TreeView</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.14.php">TrackBar, Timer и ProgressBar</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.15.php">DateTimePicker и MonthCalendar</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.16.php">PictureBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.17.php">WebBrowser</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.18.php">Элемент NotifyIcon</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.19.php">Окно сообщения MessageBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.20.php">OpenFileDialog и SaveFileDialog</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.21.php">FontDialog и ColorDialog</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/4.22.php">ErrorProvider</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Меню и панели инструментов</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/5.1.php">Панель инструментов ToolStrip</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/5.2.php">Создание меню MenuStrip</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/5.3.php">Строка состояния StatusStrip</a></span></li>
		<li><span class="file"><a href="//metanit.com/sharp/windowsforms/5.4.php">Контекстное меню ContextMenuStrip</a></span></li>
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
	$("li:contains('Глава 5.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 5.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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
<!DOCTYPE html>
<html >
<head>
<title>Панель инструментов ToolStrip в Windows Forms | Visual C#</title>
<meta charset="utf-8" />
<meta name="description" content="Панель инструментов ToolStrip в Windows Forms и Visual C#">
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
<h1>Меню и панели инструментов</h1>
<h2>Панель инструментов ToolStrip</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Элемент ToolStrip представляет панель инструментов. Каждый отдельный элемент на этой панели является объектом <span class="bb">ToolStripItem</span>.</p>
<p>Ключевые свойства компонента ToolStrip связаны с его позиционированием на форме:</p>
<ul>
<li><p><code>Dock</code>: прикрепляет панель инструментов к одной из сторон формы</p></li>
<li><p><code>LayoutStyle</code>: задает ориентацию панели на форме (горизонтальная, вертикальная, табличная)</p></li>
<li><p><code>ShowItemToolTips</code>: указывает, будут ли отображаться всплывающие подсказки для отдельных элементов панели инструментов</p></li>
<li><p><code>Stretch</code>: позволяет растянуть панель по всей длине контейнера</p></li>
</ul>
<p>В зависимости от значения свойства <code>LayoutStyle</code> панель инструментов может располагаться по горизонтали, или в табличном виде:</p>
<ul>
<li><p><code>HorizontalStackWithOverflow</code>: расположение по горизонтали с переполнением - если длина панели превышает длину контейнера, 
то новые элементы, выходящие за границы контейнера, не отображаются, то есть панель переполняется элементами</p></li>
<li><p><code>StackWithOverflow</code>: элементы располагаются автоматически с переполнением</p></li>
<li><p><code>VerticalStackWithOverflow</code>: элементы располагаются вертикально с переполнением</p></li>
<li><p><code>Flow</code>: элементы располагаются автоматически, но без переполнения - если длина панели меньше длины контейнера, то 
выходящие за границы элементы переносятся, а панель инструментов растягивается, чтобы вместить все элементы</p>
<img src="pics/5.3.png" /></li>
<li><p><code>Table</code>: элементы позиционируются в виде таблицы</p></li>
</ul>
<p>Если LayoutStyle имеет значения <code>HorizontalStackWithOverflow / VerticalStackWithOverflow</code>, то с помощью свойства <span class="bb">CanOverflow</span> 
мы можем задать поведение при переполнении. Так, если это свойство равно <code>true</code> (значение по умолчанию), то для элементов, 
не попадающих в границы ToolStrip, создается выпадающий список:</p>
<img src="pics/5.4.png" />
<p>При значении <code>false</code> подобный выпадающий список не создается.</p>
<h3>Типы элементов панели и их добавление</h3>
<p>Панель ToolStrip может содержать объекты следующих классов</p>
<ul>
<li><p><span class="bb">ToolStripLabel</span>: текстовая метка на панели инструментов, представляет функциональность элементов Label и LinkLabel</p></li>
<li><p><span class="bb">ToolStripButton</span>: аналогичен элементу Button.Также имеет событие Click, с помощью которого можно обработать 
нажатие пользователя на кнопку</p></li>
<li><p><span class="bb">ToolStripSeparator</span>: визуальный разделитель между другими элементами на панели инструментов</p></li>
<li><p><span class="bb">ToolStripToolStripComboBox</span>: подобен стандартному элементу ComboBox</p></li>
<li><p><span class="bb">ToolStripTextBox</span>: аналогичен текстовому полю TextBox</p></li>
<li><p><span class="bb">ToolStripProgressBar</span>: индикатор прогресса, как и элемент ProgressBar</p></li>
<li><p><span class="bb">ToolStripDropDownButton</span>: представляет кнопку, по нажатию на которую открывается выпадающее меню</p>
<img src="pics/5.2.png" alt="DropDownButton in ToolStrip in C#" />
<p>К каждому элементу выпадающего меню дополнительно можно прикрепить обработчик нажатия и обработать клик по этим пунктам меню</p></li>
<li><p><span class="bb">ToolStripSplitButton</span>: объединяет функциональность ToolStripDropDownButton и ToolStripButton</p></li>
</ul>
<p>Добавить новые элементы можно в режиме дизайнера:</p>
<img src="pics/5.1.png" alt="ToolBar in C#" />
<p>Также можно добавлять новые элементы программно в коде. Их расположение на панели инструментов будет соответствовать порядку добавления. 
Все элементы хранятся в ToolStrip в свойстве Items. Мы можем добавить в него любой объект класса ToolStripItem (то есть любой из выше перечисленных классов, так как они наследуются 
от ToolStripItem):</p>
<pre class="brush:c#;">
public partial class Form1 : Form
{
    public Form1()
    {
        InitializeComponent();

        ToolStripButton clearBtn = new ToolStripButton();
        clearBtn.Text = "Clear";
		// устанавливаем обработчик нажатия
        clearBtn.Click += btn_Click;
        toolStrip1.Items.Add(clearBtn);
    }

    void btn_Click(object sender, EventArgs e)
    {
        MessageBox.Show("Производится удаление");
    }
}
</pre>
<p>Кроме того, здесь задается обработчик, позволяющий обрабатывать нажатия по кнопки на панели инструментов.</p>
<p>Элементы ToolStripButton, ToolStripDropDownButton и ToolStripSplitButton могут отображать как текст, так и изобажения, оибо сразу и то, и другое. Для управления 
размещением изображений в этих элементах имеются следующие свойства:</p>
<ul>
<li><p><code>DisplayStyle</code>: определяет, будет ли отображаться на элементе текст, или изображение, или и то и другое.</p></li>
<li><p><code>Image</code>: указывает на само изображение</p></li>
<li><p><code>ImageAlign</code>: устанавливает выравнивание изображения относительно элемента</p></li>
<li><p><code>ImageScaling</code>: указывает, будет ли изображение растягиваться, чтобы заполнить все пространство элемента</p></li>
<li><p><code>ImageTransparentColor</code>: указывает, будет ли цвет изображения прозрачным</p></li>
</ul>
<p>Чтобы указать разместить изображение на кнопке, у свойства DisplayStyle надо установить значение <code>Image</code>. Если мы хотим, чтобы 
кнопка отображала только текст, то надо указать значение <code>Text</code>, либо можно комбинировать два значения с помощью другого 
значения <code>ImageAndText</code>:</p>
<img src="pics/5.5.png" />
<p>Все эти значения хранятся в перечислении <span class="bb">ToolStripItemDisplayStyle</span>. Также можно установить свойства в коде c#:</p>
<pre class="brush:c#;">
ToolStripButton clearBtn = new ToolStripButton();
clearBtn.Text = "Поиск";
clearBtn.DisplayStyle = ToolStripItemDisplayStyle.ImageAndText;
clearBtn.Image = Image.FromFile(@"D:\Icons\0023\search32.png");
// добавляем на панель инструментов
toolStrip1.Items.Add(clearBtn);
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


<div class="nav"><p><a href="4.22.php">Назад</a><a href="./">Содержание</a><a href="5.2.php">Вперед</a></p></div></div>
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
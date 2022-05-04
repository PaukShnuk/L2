<!DOCTYPE html>
<html >
<head>
<title>OpenFileDialog и SaveFileDialog в Windows Forms | Visual C#</title>
<meta charset="utf-8" />
<meta name="description" content="Открытие и сохранение файлов с помощью OpenFileDialog и SaveFileDialog в Windows Forms и Visual C#">
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
<h2>OpenFileDialog и SaveFileDialog</h2><div class="date">Последнее обновление: 31.10.2015</div>

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

<p>Окна открытия и сохранения файла представлены классами <span class="bb">OpenFileDialog</span> и <span class="bb">SaveFileDialog</span>. 
Они имеют во многом схожую функциональность, поэтому рассмотрим их вместе.</p>
<p>OpenFileDialog и SaveFileDialog имеют ряд общих свойств, среди которых можно выделить следующие:</p>
<ul>
<li><p><code>DefaultExt</code>: устанавливает расширение файла, которое добавляется по умолчанию, если пользователь ввел имя файла без расширения</p></li>
<li><p><code>AddExtension</code>: при значении <code>true</code> добавляет к имени файла расширение при его отсуствии. Расширение берется из 
свойства <code>DefaultExt</code> или <code>Filter</code></p></li>
<li><p><code>CheckFileExists</code>: если имеет значение <code>true</code>, то проверяет существование файла с указанным именем</p></li>
<li><p><code>CheckPathExists</code>:  если имеет значение <code>true</code>, то проверяет существование пути к файлу с указанным именем</p></li>
<li><p><code>FileName</code>: возвращает полное имя файла, выбранного в диалоговом окне</p></li>
<li><p><code>Filter</code>: задает фильтр файлов, благодаря чему в диалоговом окне можно отфильтровать файлы по расширению. Фильтр задается в следующем формате 
<i>Название_файлов|*.расширение</i>. Например, <code>Текстовые файлы(*.txt)|*.txt</code>. Можно задать сразу несколько фильтров, для этого они разделяются 
вертикальной линией |. Например, <code>Bitmap files (*.bmp)|*.bmp|Image files (*.jpg)|*.jpg</code></p></li>
<li><p><code>InitialDirectory</code>: устанавливает каталог, который отображается при первом вызове окна</p></li>
<li><p><code>Title</code>: заголовок диалогового окна</p></li>
</ul>
<p>Отдельно у класса SaveFileDialog можно еще выделить пару свойств:</p>
<ul>
<li><p><code>CreatePrompt</code>: при значении <code>true</code> в случае, если указан не существующий файл, то будет отображаться сообщение о его создании</p></li>
<li><p><code>OverwritePrompt</code>: при значении <code>true</code> в случае, если указан существующий файл, то будет отображаться сообщение о том, что файл будет перезаписан</p></li>
</ul>
<p>Чтобы отобразить диалоговое окно, надо вызвать метод <code>ShowDialog()</code>.</p>
<p>Рассмотрим оба диалоговых окна на примере. Добавим на форму текстовое поле textBox1 и две кнопки button1 и button2. Также перетащим с панели инструментов 
компоненты OpenFileDialog и SaveFileDialog. После добавления они отобразятся внизу дизайнера формы. В итоге форма будет выглядеть примерно так:</p>
<img src="pics/4.60.png" alt="OpenFileDialog и SaveFileDialog в Windows Forms" />

<p>Теперь изменим код формы:</p>
<pre class="brush:c#;">
public partial class Form1 : Form
{
    public Form1()
    {
        InitializeComponent();

        button1.Click += button1_Click;
        button2.Click += button2_Click;
        openFileDialog1.Filter = "Text files(*.txt)|*.txt|All files(*.*)|*.*";
        saveFileDialog1.Filter = "Text files(*.txt)|*.txt|All files(*.*)|*.*";
    }
    // сохранение файла
    void button2_Click(object sender, EventArgs e)
    {
        if (saveFileDialog1.ShowDialog() == DialogResult.Cancel)
            return;
        // получаем выбранный файл
        string filename = saveFileDialog1.FileName;
        // сохраняем текст в файл
        System.IO.File.WriteAllText(filename, textBox1.Text);
        MessageBox.Show("Файл сохранен");
    }
    // открытие файла
    void button1_Click(object sender, EventArgs e)
    {
        if (openFileDialog1.ShowDialog() == DialogResult.Cancel)
            return;
        // получаем выбранный файл
        string filename = openFileDialog1.FileName;
        // читаем файл в строку
        string fileText = System.IO.File.ReadAllText(filename);
        textBox1.Text = fileText;
        MessageBox.Show("Файл открыт");
    }
}
</pre>
<p>По нажатию на первую кнопку будет открываться окно открытия файла. После выбора файла он будет считываться, а его текст будет отображаться в 
текстовом поле. Клик на вторую кнопку отобразит окно для сохранения файла, в котором надо установить его название. И после этого произойдет сохранение 
текста из текстового поля в файл.</p>
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


<div class="nav"><p><a href="4.19.php">Назад</a><a href="./">Содержание</a><a href="4.21.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 4.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 4.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
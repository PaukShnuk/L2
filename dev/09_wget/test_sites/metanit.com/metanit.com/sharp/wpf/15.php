<!DOCTYPE html>
<html >
<head>
<title>C# и WPF | Документы</title>
<meta charset="utf-8" />
<meta name="description" content="Использование потоковых и фиксированных документов в WPF, класс FlowDocument, блоковые и строчные потоковые элементы">
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
<h1>Документы</h1><div class="date">Последнее обновление: 29.02.2016</div>

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

<p>В предыдущих главах для вывода текста использовался элемент TextBlock. 
Однако этого элемента недостаточно для создания насыщенных приложений с большими объемами текста со сложным форматированием и встроенными изображениями. 
Для этого нам надо использовать <span class="b">документы</span>.</p>
<p>Итак, все документы в WPF деляться на две группы:</p>
<ul>
<li><p><span class="b">Фиксированные документы (fixed documents)</span>. Формат и расположение содержимого таких документов фиксировано и не может быть 
изменено. На различных устройствах с различным разрешением экрана содержимое будет выглядеть одинаково и не будет оптимизировано. Такие документы 
преимущественно предназначены для печати. Для фиксированных документов WPF использует стандарт XPS (XML Paper Specification)</p></li>
<li><p><span class="b">Потоковые документы (flow documents)</span>. Эти документы предназначены для просмотра на экране монитора. А WPF выполняет 
оптимизацию документа под конкретные параметры среды.</p></li>
</ul>
<h2>Потоковые документы</h2>
<p>Потоковые документы в WPF представлены классом FlowDocument, который может включать в себя разлиные потоковые элементы (flow elements). Все эти элементы 
не являются стандартными элементами управления, как, например, Button или TextBlock, а наследуются от базового класса 
<span class="b">FrameworkContentElement</span> и поэтому поддерживают такие механизмы, как привязка, анимация и другие, но не используют компоновку. В итоге 
всю иерархию потоковых элементов можно представить следующим образом:</p>
<img src="./pics/15.1.png" alt="FlowDocument в WPF" />
<h3>Создание потоковых документов</h3>
<p>Для использования объекта FlowDocument мы должны поместить его в один из контейнеров - FlowDocumentReader, FlowDocumentPageViewer или 
FlowDocumentScrollViewer. Например:</p>
<pre class="brush:xml;">
&lt;FlowDocumentScrollViewer&gt;
    &lt;FlowDocument&gt;
        &lt;Paragraph&gt;Hello World!&lt;/Paragraph&gt;
        &lt;Paragraph&gt;22.05.1984&lt;/Paragraph&gt;
    &lt;/FlowDocument&gt;
&lt;/FlowDocumentScrollViewer&gt;
</pre>
<img src="./pics/15.2.png" alt="Потоковый документ в WPF" />
<h3>Содержимое потоковых документов</h3>
<p>В качестве содержимого FlowDocument принимает один или несколько потоковых элементов. Все эти элементы являются наследниками класса 
<span class="b">TextElement</span> и могут быть блочными (block) и строчными (inline).</p>
<h3>Блочные элементы</h3>
<p>К блочным элементам относят следующие : <span class="b">Paragraph</span>, <span class="b">List</span>, <span class="b">Table</span>, <span class="b">BlockUIContainer</span> и <span class="bb">Section</span>.</p>
<h4>Элемент Paragraph</h4>
<p>Элемент Paragraph содержит коллекцию <span class="b">Inlines</span>, которая в свою очередь включает строковые элементы, причем не только текст. Чтобы 
параграф отображал текст, надо использовать строчный элемент <span class="b">Run</span>:</p>
<pre class="brush:xml;">
&lt;Paragraph  x:Name="p1" TextIndent="20"&gt;
        &lt;Run&gt;Hello World!&lt;/Run&gt;
&lt;/Paragraph&gt;
</pre>
<p>Хотя мы можем не использовать <span class="b">Run</span> и напрямую писать текст в содержимое параграфа, однако в этом случае элемент <span class="b">Run</span> все равно будет создан, 
только неявно. Поэтому чтобы в данном случае получить в коде содержимое параграфа, нам надо получить текст элемента Run:</p>
<pre class="brush:c#;">
string s = ((Run)p1.Inlines.FirstInline).Text;
</pre>
<h4>Элемент List</h4>
<p>Блочный элемент List представляет собой список. Он содержит коллекцию элементов <span class="b">ListItem</span>, которые и представляют элементы списка. 
Каждый из элементов  <span class="b">ListItem</span>, в свою очередь, может включать другие блочные элементы, например, <span class="b">Paragraph</span>:</p> 
<pre class="brush:xml;">
&lt;FlowDocumentScrollViewer &gt;
    &lt;FlowDocument&gt;
        &lt;Paragraph&gt;Флагманы 2015&lt;/Paragraph&gt;
        &lt;List MarkerStyle="Box"&gt;
            &lt;ListItem&gt;
                &lt;Paragraph&gt;Lumia 950 XL&lt;/Paragraph&gt;
            &lt;/ListItem&gt;
            &lt;ListItem&gt;
                &lt;Paragraph&gt;iPhone 6S Plus&lt;/Paragraph&gt;
            &lt;/ListItem&gt;
            &lt;ListItem&gt;
                &lt;Paragraph&gt;Galaxy S6 Edge&lt;/Paragraph&gt;
            &lt;/ListItem&gt;
            &lt;ListItem&gt;
                &lt;Paragraph&gt;Nexus 6P&lt;/Paragraph&gt;
            &lt;/ListItem&gt;
        &lt;/List&gt;
    &lt;/FlowDocument&gt;
&lt;/FlowDocumentScrollViewer&gt;
</pre>
<img src="./pics/15.3.png" />
<p>С помощью свойства <span class="b">MarkerStyle</span> можно задать формат списка:</p>
<ul>
<li><p><code>Disc</code>: стандартный черный кружочек. Значение по умолчанию</p></li>
<li><p><code>Box</code>: черный квадратик, как в примере выше</p></li>
<li><p><code>Circle</code>: кружок без наполнения</p></li>
<li><p><code>Square</code>: квадратик без наполнения</p></li>
<li><p><code>Decimal</code>: десятичные цифры от 1, то есть обычный нумерованный список</p></li>
<li><p><code>LowerLatin</code>: строчные латинские буквы (a, b, c)</p></li>
<li><p><code>UpperLatin</code>: заглавные латинские буквы (A, B, C)</p></li>
<li><p><code>LowerRoman</code>: латинские цифры в нижнем регистре (i, iv, x)</p></li>
<li><p><code>UpperRoman</code>: латинские цифры в верхнем регистре (I, IV, X)</p></li>
<li><p><code>None</code>: отсутствие маркера списка</p></li>
</ul>
<h4>Элемент Table</h4>
<p>Элемент Table организует вывод содержимого в виде таблицы. Он имеет вложенный элемент <span class="b">TableRowGroup</span>. Этот элемент позволяет 
задать однообразный вид таблицы и содержит коллекцию строк - элементов <span class="b">TableRow</span> (строку таблицы). А каждый элемент TableRow содержит несколько 
элементов <span class="b">TableCell</span> (ячейка таблицы). В элементе TableCell затем уже размещаются блочные элементы с содержимым, например, 
элементы Paragraph:</p>
<pre class="brush:xml;">
&lt;FlowDocumentScrollViewer &gt;
    &lt;FlowDocument&gt;
		&lt;Paragraph&gt;Флагманы 2015&lt;/Paragraph&gt;
        &lt;Table&gt;
            &lt;Table.Columns&gt;
                &lt;TableColumn Width="2*" /&gt;
                &lt;TableColumn Width="2*" /&gt;
                &lt;TableColumn Width="*" /&gt;
            &lt;/Table.Columns&gt;
            &lt;TableRowGroup FontSize="14"&gt;
                &lt;TableRow FontSize="15"&gt;
                    &lt;TableCell&gt;
                        &lt;Paragraph&gt;Модель&lt;/Paragraph&gt;
                    &lt;/TableCell&gt;
                    &lt;TableCell&gt;
                        &lt;Paragraph&gt;Компания&lt;/Paragraph&gt;
                    &lt;/TableCell&gt;
                    &lt;TableCell&gt;
                        &lt;Paragraph&gt;Цена&lt;/Paragraph&gt;
                    &lt;/TableCell&gt;
                &lt;/TableRow&gt;
                &lt;TableRow&gt;
                    &lt;TableCell&gt;
                        &lt;Paragraph&gt;Lumia 950&lt;/Paragraph&gt;
                    &lt;/TableCell&gt;
                    &lt;TableCell&gt;
                        &lt;Paragraph&gt;Microsoft&lt;/Paragraph&gt;
                    &lt;/TableCell&gt;
                    &lt;TableCell&gt;
                        &lt;Paragraph&gt;45000&lt;/Paragraph&gt;
                    &lt;/TableCell&gt;
                &lt;/TableRow&gt;
                &lt;TableRow&gt;
                    &lt;TableCell&gt;
                        &lt;Paragraph&gt;iPhone 6s&lt;/Paragraph&gt;
                    &lt;/TableCell&gt;
                    &lt;TableCell&gt;
                        &lt;Paragraph&gt;Apple&lt;/Paragraph&gt;
                    &lt;/TableCell&gt;
                    &lt;TableCell&gt;
                        &lt;Paragraph&gt;54000&lt;/Paragraph&gt;
                    &lt;/TableCell&gt;
                &lt;/TableRow&gt;
                &lt;TableRow&gt;
                    &lt;TableCell&gt;
                        &lt;Paragraph&gt;Nexus 6P&lt;/Paragraph&gt;
                    &lt;/TableCell&gt;
                    &lt;TableCell&gt;
                        &lt;Paragraph&gt;Huawei&lt;/Paragraph&gt;
                    &lt;/TableCell&gt;
                    &lt;TableCell&gt;
                        &lt;Paragraph&gt;50000&lt;/Paragraph&gt;
                    &lt;/TableCell&gt;
                &lt;/TableRow&gt;
            &lt;/TableRowGroup&gt;
        &lt;/Table&gt;
    &lt;/FlowDocument&gt;
&lt;/FlowDocumentScrollViewer&gt;
</pre>
<img src="./pics/15.4.png"  />
<p>Для определения столбцов в элементе применяется коллекция <code>Table.Columns</code>. Каждый столбец представляет элемент TableColumn, у которого мы можем задать ширину.</p>
<h4>Элемент Section</h4>
<p>Элемент Section предназначен для группировки других блочных элементов и предназначен прежде всего для однобразной стилизации этих элементов:</p>
<pre class="brush:xml;">
&lt;FlowDocument&gt;
    &lt;Section FontSize="16"&gt;
        &lt;Paragraph&gt;Флагманы 2016&lt;/Paragraph&gt;
        &lt;Paragraph&gt;Xiaomi Mi5&lt;/Paragraph&gt;
        &lt;Paragraph&gt;Samsung Galaxy S7&lt;/Paragraph&gt;
        &lt;Paragraph&gt;HP Elite X3&lt;/Paragraph&gt;
    &lt;/Section&gt;
&lt;/FlowDocument&gt;
</pre>
<h4>Элемент BlockUIContainer</h4>
<p>Элемент BlockUIContainer позволяет добавить в документ различные элементы управления, которые не являются блочными или строчными элементами. 
Так, мы можем добавить кнопку или картинку к документу. Такая функциональность особенно полезна, когда необходимо добавить интерактивную связь с 
пользователем:</p>
<pre class="brush:xml;">
&lt;FlowDocument&gt;
    &lt;Paragraph TextAlignment="Center"&gt;TIOBE Rate&lt;/Paragraph&gt;
    &lt;BlockUIContainer FontSize="13"&gt;
        &lt;StackPanel Orientation="Vertical"&gt;
            &lt;TextBlock Height="40" Padding="10"&gt;Click the Button to see TIOBE Rate&lt;/TextBlock&gt;
            &lt;Button Width="60"&gt;Click Me&lt;/Button&gt;
        &lt;/StackPanel&gt;
    &lt;/BlockUIContainer&gt;
&lt;/FlowDocument&gt;
</pre>
<img src="./pics/15.5.png" alt="BlockUIContainer в WPF" />
<h3>Строчные элементы</h3>
<p>Выше мы уже использовали элемент <span class="b">Run</span>, который хранит некоторый текст, выводимый в блочном элементе, например, в элементе 
Paragraph.</p>
<h4>Span</h4>
<p>Элемент <span class="b">Span</span> объединяет другие строчные элементы и применяет  ним определенное форматирование:</p>
<pre class="brush:xml;">
&lt;FlowDocument&gt;
    &lt;Paragraph&gt;
        &lt;Span Background="Red"&gt;
            &lt;Run&gt;This is a WPF Application!&lt;/Run&gt;
            &lt;Run&gt;WPF is cool&lt;/Run&gt;
        &lt;/Span&gt;
    &lt;/Paragraph&gt;
&lt;/FlowDocument&gt;
</pre>
<p>Чтобы задать для текста отдельные способы форматирования, применяются элементы <span class="b">Bold</span>,<span class="b">Italic</span> и <span class="b">Underline</span>, 
которые позволяют создать текст полужирным шрифтом, курсивом и подчеркнутый текст соответственно.</p>
<pre class="brush:xml;">
&lt;FlowDocument&gt;
    &lt;Paragraph&gt;
        &lt;Span Background="Wheat"&gt;
            &lt;Italic&gt;This is a WPF Application!&lt;/Italic&gt;
            &lt;Bold&gt;WPF is cool!&lt;/Bold&gt;
            &lt;Underline&gt;Great App&lt;/Underline&gt;
        &lt;/Span&gt;
    &lt;/Paragraph&gt;
&lt;/FlowDocument&gt;
</pre>
<img src="./pics/15.14.png" alt="Span в WPF" />
<p>Элемент <span class="b">Hyperlink</span> позволяет вставить в документ ссылку для перехода и может использоваться в навигационных приложениях:</p>
<pre class="brush:xml;">
&lt;Paragraph&gt;
     &lt;Hyperlink NavigateUri="http:\\microsoft.com"&gt;Microsoft&lt;/Hyperlink&gt;
&lt;/Paragraph&gt;
</pre>
<p>Элемент <span class="b">LineBreak</span> задает перевод строки:</p>
<pre class="brush:xml;">
&lt;FlowDocument&gt;
    &lt;Paragraph&gt;
        &lt;Run&gt;Перевод&lt;/Run&gt;
        &lt;LineBreak /&gt;
        &lt;Run&gt;на другую строку&lt;/Run&gt;
    &lt;/Paragraph&gt;
&lt;/FlowDocument&gt;
</pre>
<p><span class="b">InlineUIContainer</span> подобен элементу <span class="b">BlockUIContainer</span> и также позволяет 
помещать другие элементы управления, например, кнопки, только является строковым.</p>
<p>Элементы <span class="b">Floater</span> и <span class="b">Figure</span> позволяют вывести плавающее окно с некоторой информацией, текстом, картинками и прочим:</p>
<pre class="brush:xml;">
&lt;FlowDocument&gt;
    &lt;Paragraph TextAlignment="Left" FontSize="15"&gt;
        "Да, здесь, в этом лесу был этот дуб, с которым мы были согласны", подумал князь Андрей.
        
		&lt;Floater Width="170" Padding="5" HorizontalAlignment="Left" FontSize="18" FontStyle="Italic"&gt;
            &lt;Paragraph&gt;Война и мир. Том 2. Часть 3&lt;/Paragraph&gt;
        &lt;/Floater&gt;
        
		"Да где он", подумал опять князь Андрей, глядя на левую сторону дороги и сам того не зная, не узнавая его...
    &lt;/Paragraph&gt;
&lt;/FlowDocument&gt;
</pre>
<p>Остальной текст будет обтекать элемент Floater, заданный таким образом, справа.</p>
<img src="./pics/15.6.png" alt="Floater в WPF" />
<h4>Figure</h4>
<p>Figure во многом аналогичен элементу Floater за тем исключением, что дает больше возможностей по контролю за позиционированием. Так, 
следующая разметка будет создавать эффект, аналогичный примеру с Floater:</p>
<pre class="brush:xml;">
&lt;FlowDocument&gt;
    &lt;Paragraph TextAlignment="Left" FontSize="15"&gt;
        "Да, здесь, в этом лесу был этот дуб, с которым мы были согласны", подумал князь Андрей.
        &lt;Figure Width="170" Padding="5" HorizontalAnchor="ContentLeft" FontSize="18" FontStyle="Italic"&gt;
            &lt;Paragraph&gt;Война и мир. Том 2. Часть 3&lt;/Paragraph&gt;
        &lt;/Figure&gt;
        "Да где он", подумал опять князь Андрей, глядя на левую сторону дороги и сам того не зная...
    &lt;/Paragraph&gt;
&lt;/FlowDocument&gt;
</pre>
<p>С помощью свойства <span class="b">HorizontalAnchor</span> мы можем управлять позиционированием элемента по горизонтали. Так, значение 
<code>ContentLeft</code> позволяет выравнить текст по левой стороне, <code>ContentRight</code> - по правой стороне, а значение <code>ContentCenter</code> - по центру.</p>
<p>Другое свойство <span class="b">VerticalAnchor</span> позволяет выравнить содержимое Figure по вертикали.</p>
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


<div class="nav"><p><a href="19.3.php">Назад</a><a href="./">Содержание</a><a href="15.2.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 16.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 16.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
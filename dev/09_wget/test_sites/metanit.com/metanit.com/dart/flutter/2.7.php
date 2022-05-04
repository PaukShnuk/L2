<!DOCTYPE html>
<html >
<head>
<title>Flutter | Column</title>
<meta charset="utf-8" />
<meta name="description" content="Виджет Column в Flutter, расположение элементов в столбик, MainAxisAlignment и CrossAxisAlignment, выравнивание по горизонтали и вертикали">
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
<h2>Column</h2><div class="date">Последнее обновление: 30.01.2021</div>

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

<p>Контейнер <span class="b">Column</span> располагает элементы вертикально, в виде столбика.</p>
<p>Для создания виджета применяется следующий конструктор:</p>
<pre class="brush:dart;">
Column({Key key, MainAxisAlignment mainAxisAlignment: MainAxisAlignment.start, MainAxisSize mainAxisSize: MainAxisSize.max, 
CrossAxisAlignment crossAxisAlignment: CrossAxisAlignment.center, TextDirection textDirection, 
VerticalDirection verticalDirection: VerticalDirection.down, TextBaseline textBaseline, List&lt;Widget&gt; children: const []})
</pre>
<p>Его параметры:</p>
<ul>
<li><p><code>key</code>: ключ виджета</p></li>
<li><p><code>mainAxisAlignment</code>: задает выравнивание по вертикали</p></li>
<li><p><code>mainAxisSize</code>: задает пространство, занимаемое виджетом по основной оси</p></li>
<li><p><code>crossAxisAlignment</code>: задает выравнивание по горизонтали</p></li>
<li><p><code>textDirection</code>: определяет порядок расположения вложенных элементов по горизонтали</p></li>
<li><p><code>verticalDirection</code>: определяет порядок расположения вложенных элементов по вертикали</p></li>
<li><p><code>textBaseline</code>: устанавливает базовую линию для выравнивания элементов</p></li>
<li><p><code>children</code>: набор вложенных элементов</p></li>
</ul>
<p>Простейший виджет Column:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(Container(
    padding: EdgeInsets.all(30),
    color: Colors.teal,
    child:Column(
        children: &lt;Widget&gt;[
          Text('Вот мысль, которой весь я предан,',
              textDirection: TextDirection.ltr),
          Text('Итог всего, что ум скопил.',
              textDirection: TextDirection.ltr),
          Text('Лишь тот, кем бой за жизнь изведан,',
              textDirection: TextDirection.ltr),
          Text('Жизнь и свободу заслужил.',
              textDirection: TextDirection.ltr)
        ],
      )
    )
  );
}
</pre>
<img src="./pics/2.15.png" alt="Column в Flutter" />
<p>Стоит учитывать, что виджет Column не поддерживает прокрутку. Поэтому если необходимо обеспечить доступ к виджетам, которые выходят за пределы видимо пространства, 
то вместо Column лучше использовать другой контейнер, например, ListView.</p>
<h3>CrossAxisAlignment</h3>
<p>Параметр <code>crossAxisAlignment</code> в конструкторе Column указывает, как вложенные виджеты будут располагаться по пересекающей оси - в данном случае по горизонтали. Этот 
параметр может принимать следующие значения:</p>
<ul>
<li><p><span class="b">CrossAxisAlignment.center</span>: значение по умолчанию, располагает вложенные элементы по центру по горизонтали. 
Аналогично значению <code>CrossAxisAlignment(2)</code>.</p></li>
<li><p><span class="b">CrossAxisAlignment.end</span>: располагает вложенные элементы в конце горизонтальной оси. В Column, 
если другой параметр конструктора <code>textDirection</code> равен <code>TextDirection.ltr</code> (то есть текст слева направо), 
то элементы выравниваются по правому краю. А если он равен <code>TextDirection.rtl</code> (то есть текст справа налево), 
то элементы выравниваются по левому краю. Аналогично значению <code>CrossAxisAlignment(1)</code>.</p></li>
<li><p><span class="b">CrossAxisAlignment.start</span>: располагает вложенные элементы в начале пересекающей оси. В Column, 
если другой параметр конструктора <code>textDirection</code> равен <code>TextDirection.ltr</code> (то есть текст слева направо), 
то элементы выравниваются по левому краю. Аналогично значению <code>CrossAxisAlignment(0)</code>.</p></li>
<li><p><span class="b">CrossAxisAlignment.stretch</span>: растягивает вложенные элементы по всей ширине контейнера Column. Аналогично значению <code>CrossAxisAlignment(3)</code>.</p></li>
<li><p><span class="b">CrossAxisAlignment.baseline</span>: выравнивает вложенные элементы по базовой линии - пересекающей оси. 
Аналогично значению <code>CrossAxisAlignment(4)</code>. Для контейнера Column фактически аналогично значению <code>CrossAxisAlignment.start</code>. Требует установки параметра 
<span class="b">textBaseline</span></p></li>
</ul>
<p>В первом примере, как видно из скриншота, по умолчанию применяется <code>CrossAxisAlignment.center</code>, то есть все вложенные виджеты центрируются. 
Используем другое значение:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(Container(
    padding: EdgeInsets.all(30),
    color: Colors.teal,
    child:Column(
        textDirection: TextDirection.ltr,
        crossAxisAlignment: CrossAxisAlignment.start,
        children: &lt;Widget&gt;[
          Text('Вот мысль, которой весь я предан,',
              textDirection: TextDirection.ltr),
          Text('Итог всего, что ум скопил.',
              textDirection: TextDirection.ltr),
          Text('Лишь тот, кем бой за жизнь изведан,',
              textDirection: TextDirection.ltr),
          Text('Жизнь и свободу заслужил.',
              textDirection: TextDirection.ltr)
        ],
      )
    )
  );
}
</pre>
<p>С помощью значения <code>crossAxisAlignment: CrossAxisAlignment.start</code> задается выравнивание по левому краю контейнера. 
Однако поскольку ориентации текста могут быть различными - правосторонняя и левосторонняя, то также необходимо указать направление текста <code>textDirection: TextDirection.ltr</code>. 
В зависимости от направления текста началом может быть левый край (слева направо) или правый край (справа налево)</p>
<img src="./pics/2.16.png" alt="Column и CrossAxisAlignment в Flutter" />
<h3>VerticalDirection</h3>
<p>Параметр <code>verticalDirection</code> в конструкторе Column указывает на направление расположения элементов по вертикали: сверху вниз или снизу вверх. Этот параметр представляет класс 
VerticalDirection, который определяет следующие константы:</p>
<ul>
<li><p><span class="b">VerticalDirection.down</span>: расположение сверху вниз</p></li>
<li><p><span class="b">VerticalDirection.up</span>: расположение снизу вверх</p></li>
</ul>
<p>Например, расположение снизу вверх:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(Container(
    padding: EdgeInsets.all(30),
    color: Colors.teal,
    child:Column(
        textDirection: TextDirection.ltr,
        crossAxisAlignment: CrossAxisAlignment.start,
        verticalDirection: VerticalDirection.up,
        children: &lt;Widget&gt;[
          Text('Вот мысль, которой весь я предан,',
              textDirection: TextDirection.ltr),
          Text('Итог всего, что ум скопил.',
              textDirection: TextDirection.ltr),
          Text('Лишь тот, кем бой за жизнь изведан,',
              textDirection: TextDirection.ltr),
          Text('Жизнь и свободу заслужил.',
              textDirection: TextDirection.ltr)
        ],
      )
    )
  );
}
</pre>
<img src="./pics/2.17.png" alt="Column и VerticalDirection в Flutter" />
<h3>MainAxisAlignment</h3>
<p>Еще один параметр конструктора Column - <code>mainAxisAlignment</code> представляет класс <span class="b">MainAxisAlignment</span> и 
управляет выравниванием по вертикали. Он может принимать следующие значения:</p>
<ul>
<li><p><span class="b">MainAxisAlignment.center</span>: выравнивание по вертикали по центру</p></li>
<li><p><span class="b">MainAxisAlignment.end</span>: выравнивание в конце вертикальной оси. Где находится конец вертикальной оси, 
зависит от другого параметра конструктора - <code>verticalDirection</code>. Если он равен <code>VerticalDirection.down</code> (расположение виджетов 
сверху вниз), конец вертикальной оси аналогичен низу, а при значении <code>VerticalDirection.up</code> - находится вверху вертикальной оси.</p></li>
<li><p><span class="b">MainAxisAlignment.start</span>: выравнивание в начале вертикальной оси. Аналогично <code>MainAxisAlignment.end</code> 
расположение "начала" вертикальной оси зависит от значения параметра <code>verticalDirection</code></p></li>
<li><p><span class="b">MainAxisAlignment.spaceBetween</span>: свободное пространство Column равным образом распределяется между вложенными виджетами</p></li>
<li><p><span class="b">MainAxisAlignment.spaceEvenly</span>: свободное пространство Column равным образом распределяется между вложенными виджетами, а также перед первым и после последнего виджета</p></li>
<li><p><span class="b">MainAxisAlignment.spaceAround</span>: свободное пространство Column равным образом распределяется между вложенными виджетами, кроме того, перед первым и после последнего виджета добавляются половинные отступы (половина от отступа между виджетами)</p></li>
</ul>
<p>Например, расположим вложенные виджеты в центре по вертикали:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(Container(
    padding: EdgeInsets.only(top:30, left:10),
    color: Colors.teal,
    child:Column(
        textDirection: TextDirection.ltr,
        crossAxisAlignment: CrossAxisAlignment.start,
        mainAxisAlignment: MainAxisAlignment.center,
        children: &lt;Widget&gt;[
          Text('Вот мысль, которой весь я предан,',
              textDirection: TextDirection.ltr),
          Text('Итог всего, что ум скопил.',
              textDirection: TextDirection.ltr),
          Text('Лишь тот, кем бой за жизнь изведан,',
              textDirection: TextDirection.ltr),
          Text('Жизнь и свободу заслужил.',
              textDirection: TextDirection.ltr)
        ],
      )
    )
  );
}
</pre>
<img src="./pics/2.19.png" alt="Выравнивание по вертикали MainAxisAlignment в Column в Flutter" />
<p>Пример использования значений <code>spaceBetween</code>, <code>spaceEvenly</code> и <code>spaceAround</code>:</p>
<img src="./pics/2.18.png" alt="Выравнивание по вертикали в Column в Flutter" />
<h3>TextBaseline</h3>
<p>Параметр <code>textBaseline</code> в конструкторе Column используется для выравнивания. Этот 
параметр может принимать следующие значения перечисления <span class="b">TextBaseline</span>:</p>
<ul>
<li><p><span class="b">TextBaseline.alphabetic</span>: выравнивание применяется к алфавитным символам.</p></li>
<li><p><span class="b">TextBaseline.ideographic</span>: выравнивание применяется к идеографическим символам.</p></li>
</ul>
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


<div class="nav"><p><a href="./2.6.php">Назад</a><a href="./">Содержание</a><a href="./2.8.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в Flutter</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/flutter/1.1.php">Что такое Flutter. Установка</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/1.2.php">Первое приложение</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/1.3.php">Создание приложения в Android Studio</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/1.4.php">Первое приложение в Visual Studio Code</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/1.5.php">Первое приложение на Flutter в Windows</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.1.php">Введение в виджеты</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Контейнеры и управление компоновкой</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.2.php">Align</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.3.php">Center</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.4.php">Padding</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.5.php">ConstrainedBox</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.6.php">Container</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.7.php">Column</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.8.php">Row</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/2.9.php">Expanded</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Встроенные виджеты и создание своих виджетов</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.1.php">Text</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.2.php">RichText</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.3.php">Stack</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.4.php">StatelessWidget</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.5.php">MaterialApp и Scaffold</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.6.php">Image и вывод изображений</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.7.php">Кнопка ElevatedButton</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.8.php">StatefulWidget и состояние State</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.9.php">GestureDetector и обработка нажатий</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.10.php">TextField и TextFormField</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/3.11.php">TextEditingController</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Списки в Flutter</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/dart/flutter/4.1.php">Виджет ListView</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/4.2.php">Динамическое создание ListView</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/4.3.php">Добавление в список разделителя</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/4.4.php">Выбор элемента в списке</a></span></li>
		<li><span class="file"><a href="//metanit.com/dart/flutter/4.5.php">ListTile</a></span></li>
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
	
	$("li:contains('Глава 2.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
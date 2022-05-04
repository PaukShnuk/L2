<!DOCTYPE html>
<html >
<head>
<title>Flutter | Встроенные виджеты. Text</title>
<meta charset="utf-8" />
<meta name="description" content="Виджет Text в Flutter, свойства текста, многострочный текст и перенос, стиль, размер шрифта, цвет и фон текста и TextStyle">
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
<h1>Встроенные виджеты</h1><h2>Text</h2><div class="date">Последнее обновление: 24.06.2020</div>

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

<p>Виджет <span class="b">Text</span> предназначен для отображения строки текста. Для создания виджета и его установки можно использовать следующий его конструктор:</p>
<pre class="brush:dart;">
Text(String data, {Key key, TextStyle style, StrutStyle strutStyle, TextAlign textAlign, TextDirection textDirection, 
	Locale locale, bool softWrap, TextOverflow overflow, double textScaleFactor, int maxLines, String semanticsLabel, 
	TextWidthBasis textWidthBasis, TextHeightBehavior textHeightBehavior})
</pre>
<p>Основные параметры виджета:</p>
<ul>
<li><p><span class="b">text</span>: собственно текст виджета</p></li>
<li><p><span class="b">style</span>: определяет стиль текста, в частности, цвет текста, фона, семейство шрифтов, размер шрифта и т.д. 
Представляет объект класса <span class="b">TextStyle</span></p></li>
<li><p><span class="b">strutStyle</span>: устанавливает минимальную высоту строки относительно базовой линии. Представляет класс <span class="b">StrutStyle</span></p></li>
<li><p><span class="b">textAlign</span>: устанавливает горизонтальное выравнивание. Представляет перечисление <span class="b">TextAlign</span> и может принимать следующие значения:</p>
<ul>
<li><p><code>TextAlign.center</code>: выравнивание по центру</p></li>
<li><p><code>TextAlign.left</code>: выравнивание по левому краю контейнера</p></li>
<li><p><code>TextAlign.right </code>: выравнивание по правому краю контейнера</p></li>
<li><p><code>TextAlign.justify</code>: растяжение текста по всей длине строки</p></li>
<li><p><code>TextAlign.end</code>: выравнивание в конце строки. Для текста слева направо это правый край контейнера, а для текста справа налево это левый край контейнера</p></li>
<li><p><code>TextAlign.start</code>: выравнивание в начале строки. Для текста слева направо это левый край контейнера, а для текста справа налево это правый край контейнера</p></li>
</ul>
</li>
<li><p><span class="b">textDirection</span>: задает направление текста. Представляет перечисление <span class="b">TextDirection</span>. 
Основные значения: <span class="b">TextDirection.ltr</span> (текст слева направо) и <span class="b">TextDirection.rtl</span> (справа налево)</p></li>
<li><p><span class="b">locale</span>: устанавливает локаль или, грубо говоря, язык. Представляет объект класса <span class="b">Locale</span></p></li>
<li><p><span class="b">softWrap</span>: определяет, будет ли тест переноситься на следующую строку при достижении отведенной для его длины.</p></li>
<li><p><span class="b">overflow</span>: определяет, как текст будет усекаться при превышение доступной длины. Представляет перечисление <span class="b">TextOverflow</span></p></li>
<li><p><span class="b">textScaleFactor</span>: определяет количество пикселей шифта для каждого логического пикселя.</p></li>
<li><p><span class="b">maxLines</span>: определяет максимальное количество строк текста</p></li>
<li><p><span class="b">textWidthBasis</span>: определяет способ измерения ширины текста. Представляет перечисление <span class="b">TextWidthBasis</span>.</p></li>
<li><p><span class="b">textHeightBehavior</span>: определяет, как будет применяться значение <code>TextStyle.height</code> к первой и последней строкам текста. 
Представляет класс <span class="b">TextHeightBehavior</span>.</p></li>
</ul>
<p>Первый параметр типа String является обязательным и представляет собственно то сообщение, которое отображается. Остальные параметры являются необязательными.</p>
<p>Используем ряд свойств и определим простой Text:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(Container(
    padding: EdgeInsets.only(top:25, left:10, right:10),
    color: Colors.white,
    child: Text("Hello Flutter from Metanit.com",
        textDirection: TextDirection.ltr,		// текст слева направо
        textAlign: TextAlign.center,			// выравнивание по центру
        style: TextStyle(color: Colors.green,	// зеленый цвет текста
            fontSize: 26,						// высота шрифта 26
            backgroundColor: Colors.black87		// черный цвет фона текста
        )
      )
    )
  );
}
</pre>
<img src="./pics/3.4.png" alt="Текст и его стиль в Flutter" />
<h3>Стиль текста</h3>
<p>Стиль текста описывается параметром <span class="b">style</span>, который представляет класс <span class="b">TextStyle</span>. Этот 
класс позволяет задать очень много настроек отображения текст. Он имеет следующий конструктор:</p>
<pre class="brush:dart;">
TextStyle({bool inherit: true, Color color, Color backgroundColor, double fontSize, FontWeight fontWeight, FontStyle fontStyle, 
double letterSpacing, double wordSpacing, TextBaseline textBaseline, double height, Locale locale, Paint foreground, 
Paint background, List&lt;Shadow&gt; shadows, List&lt;FontFeature&gt; fontFeatures, TextDecoration decoration, Color decorationColor, 
TextDecorationStyle decorationStyle, double decorationThickness, String debugLabel, String fontFamily, 
List&lt;String&gt; fontFamilyFallback, String package})
</pre>
<p>Рассмотрим вкратце некоторые параметры конструктора:</p>
<ul>
<li><p><span class="b">inherit</span>: указывает, будет ли данный стиль наследовать свойства стиля родительского виджета</p></li>
<li><p><span class="b">color</span>: цвет текста</p></li>
<li><p><span class="b">backgroundColor</span>: цвет фона текста</p></li>
<li><p><span class="b">fontSize</span>: размер шрифта</p></li>
<li><p><span class="b">fontWeight</span>: толщина шрифта. Представляет класс <span class="b">FontWeight</span> и 
может принимать в качестве значения одну из его констант: <code>FontWeight.w100</code>, <code>FontWeight.w200</code>, 
<code>FontWeight.w300</code>, <code>FontWeight.w400</code> (эквивалентно <code>FontWeight.bold</code>), <code>FontWeight.w500</code>, <code>FontWeight.w600</code>, 
<code>FontWeight.w700</code> (эквивалентно <code>FontWeight.bold</code>), <code>FontWeight.w800</code> и <code>FontWeight.w900</code>. Чем больше числовое значение в 
константе, тем соответственнее толще будет шрифт.</p>
</li>
<li><p><span class="b">fontStyle</span>: устанавливает стиль шрифта. Представляет перечисление <span class="b">FontStyle</span> и может принимать следующие значения: 
<span class="b">FontStyle.normal</span> и <span class="b">FontStyle.italic</span> (шрифт курсивом)</p></li>
<li><p><span class="b">letterSpacing</span>: устанавливает расстояние между словами, отрицательное значение позволяет сделать слова ближе друг к другу</p></li>
<li><p><span class="b">wordSpacing</span>: устанавливает расстояние между символами, отрицательное значение позволяет сделать символы ближе друг к другу</p></li>
<li><p><span class="b">textBaseline</span>: базовая линия текста</p></li>
<li><p><span class="b">height</span>: коэффициент высоты текстового элемента. Для определения реальной высоты этот коэффициент умножается на высоту шрифта fontSize.</p></li>
<li><p><span class="b">locale</span>: устанавливает локаль или языковую культуру текста</p></li>
<li><p><span class="b">foreground</span>: задает изображение или объект Paint для закраски текста</p></li>
<li><p><span class="b">background</span>: задает изображение или объект Paint в качестве фона виджета</p></li>
<li><p><span class="b">shadows</span>: устанавливает тени для шрифта в виде набора объектов Shadow</p></li>
<li><p><span class="b">decoration</span>: декорации текста (зачеркивание, подчеркивание или надчеркивание). Может принимать в качестве значения следующие константы из класса <span class="b">TextDecoration</span>:</p>
<ul>
<li><p><code>TextDecoration.lineThrough</code>: зачеркнутый текст</p></li>
<li><p><code>TextDecoration.overline</code>: подчеркивание над текстом</p></li>
<li><p><code>TextDecoration.underline</code>: подчеркивание под текстом</p></li>
</ul>
</li>
<li><p><span class="b">decorationColor</span>: цвет декораций</p></li>
<li><p><span class="b">decorationStyle</span>: стиль декораций. Представляет перечисление <span class="b">TextDecorationStyle</span> и может принимать следующие его значения:</p>
<ul>
<li><p><code>TextDecorationStyle.dashed</code>: пунктирная линия</p></li>
<li><p><code>TextDecorationStyle.dotted</code>: точки</p></li>
<li><p><code>TextDecorationStyle.double</code>: двойное подчеркивание</p></li>
<li><p><code>TextDecorationStyle.solid</code>: обычная линия</p></li>
<li><p><code>TextDecorationStyle.wavy</code>: волнистая линия</p></li>
</ul>
</li>
<li><p><span class="b">decorationThickness</span>: толщина декораций</p></li>
<li><p><span class="b">fontFamily</span>: название используемого шрифта. По умолчанию для Android используется только шрифт "Roboto".</p></li>
</ul>
<p>Рассмотрим использование декораций:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(Container(
    padding: EdgeInsets.only(top:25, left:10, right:10),
    color: Colors.teal,
    child: Column(children: &lt;Widget&gt;[
      Text("Hello Flutter from Metanit.com",
      textDirection: TextDirection.ltr,
      style: TextStyle(
          fontSize: 26,
          decoration: TextDecoration.lineThrough,
          decorationStyle: TextDecorationStyle.double
      )),
      Text("Hello Flutter from Metanit.com",
          textDirection: TextDirection.ltr,
          style: TextStyle(
              fontSize: 26,
              decoration: TextDecoration.underline,
              decorationStyle: TextDecorationStyle.wavy,
              decorationColor: Colors.blue,
              decorationThickness: 2
          )),
      Text("Hello Flutter from Metanit.com",
          textDirection: TextDirection.ltr,
          style: TextStyle(
              fontSize: 26,
              decoration: TextDecoration.underline,
              decorationStyle: TextDecorationStyle.dotted,
              decorationColor: Colors.red,	
              decorationThickness: 3
          ))
    ])
    )
  );
}
</pre>
<img src="./pics/3.5.png" alt="Подчеркивание текста и TextDecoration в Flutter" />
<h3>Многострочный текст, перенос и усечение текста</h3>
<p>Текст виджета может не помещаться к отведенное для него пространство. И в этом случае есть разные стратегии. Так, параметр <span class="b">overflow</span> 
позволяет задать формат завершения строки текста. Он представляет перечисление <span class="b">TextOverflow</span> и может принимать следующие значения:</p>
<ul>
<li><p><span class="b">TextOverflow.clip</span>: текст усекается таким образом, чтобы вместиться по длине контейнера</p></li>
<li><p><span class="b">TextOverflow.ellipsis</span>: в конце вмещаемого текста добавляется многоточие</p></li>
<li><p><span class="b">TextOverflow.fade</span>: конец текста плавно теряет цвет</p></li>
<li><p><span class="b">TextOverflow.visible</span>: текст виден вне контейнера</p></li>
</ul>
<p>Например, использование многоточия после длинного текста:</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(Container(
    padding: EdgeInsets.only(top:25, left:10, right:10),
    color: Colors.white,
    child: Text("Все мы сейчас желаем кушать, потому что утомились и",
        textDirection: TextDirection.ltr,
        style: TextStyle(color: Colors.black87, fontSize: 20),
        overflow: TextOverflow.ellipsis)
    )
  );
}
</pre>
<img src="./pics/3.1.png" alt="TextOverflow in Flutter in Text" />
<p>Параметр <span class="b">softWrap</span> позволяет перенести текст на следующую строку (при значении <code>true</code>). По умолчанию он равен 
<code>false</code>, то есть текст не переносится.</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(Container(
    padding: EdgeInsets.only(top:25, left:10, right:10),
    color: Colors.white,
    child: Text("Все мы сейчас желаем кушать, потому что утомились и уже четвертый час, но это, душа моя Григорий Саввич, "
        "не настоящий аппетит. Настоящий, волчий аппетит, когда, кажется, отца родного съел бы, бывает только после физических движений",
        textDirection: TextDirection.ltr,
        style: TextStyle(color: Colors.black87, fontSize: 20),
        softWrap: true
    )
    )
  );
}
</pre>
<img src="./pics/3.2.png" alt="softWrap in Flutter in Text и перенос текста" />
<p>Еще одн стратегия заключается в том, чтобы определить количество строк в конструкторе с помощью параметра <code>maxLines</code>. 
Тест будет автоматически переноситься на следующую строку (пока не заполнит все максимальное количество строк).</p>
<pre class="brush:dart;">
import 'package:flutter/material.dart';

void main() {
  runApp(Container(
    padding: EdgeInsets.only(top:25, left:10, right:10),
    color: Colors.white,
    child: Text("Все мы сейчас желаем кушать, потому что утомились и уже четвертый час, но это, душа моя Григорий Саввич, "
        "не настоящий аппетит. Настоящий, волчий аппетит, когда, кажется, отца родного съел бы, бывает только после физических движений",
        textDirection: TextDirection.ltr,
        style: TextStyle(color: Colors.black87, fontSize: 20),
        maxLines: 4
    )
    )
  );
}
</pre>
<img src="./pics/3.3.png" alt="Многострочный текст в Flutter maxLines" />
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


<div class="nav"><p><a href="./2.9.php">Назад</a><a href="./">Содержание</a><a href="./3.2.php">Вперед</a></p></div></div>
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
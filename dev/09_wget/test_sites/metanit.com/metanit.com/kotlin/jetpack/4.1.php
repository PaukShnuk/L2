<!DOCTYPE html>
<html >
<head>
<title>Jetpack Compose | Text</title>
<meta charset="utf-8" />
<meta name="description" content="Компонент Text и его параметры в Jetpack Compose на языке программирования Kotlin, стилизация текста, высота и цвет шрифта, TextStyle, TextAlign, TextDecoration">
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
<h1>Визуальные компоненты</h1><h2>Text</h2><div class="date">Последнее обновление: 02.10.2021</div>

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

<p>Неотъемлимой частью визуального интерфейса является текст. Для отображения текста Jetpack Compose предоставляет ряд встроенных компонентов. 
Прежде всего это компонент <span class="b">Text</span>, который имеет следующее определение:</p>
<pre class="brush:kt;">
@Composable
fun Text(
    text: String,
    modifier: Modifier = Modifier,
    color: Color = Color.Unspecified,
    fontSize: TextUnit = TextUnit.Unspecified,
    fontStyle: FontStyle? = null,
    fontWeight: FontWeight? = null,
    fontFamily: FontFamily? = null,
    letterSpacing: TextUnit = TextUnit.Unspecified,
    textDecoration: TextDecoration? = null,
    textAlign: TextAlign? = null,
    lineHeight: TextUnit = TextUnit.Unspecified,
    overflow: TextOverflow = TextOverflow.Clip,
    softWrap: Boolean = true,
    maxLines: Int = Int.MAX_VALUE,
    onTextLayout: (TextLayoutResult) -&gt; Unit = {},
    style: TextStyle = LocalTextStyle.current
): @Composable Unit
</pre>
<p>Параметры компонента:</p>
<ul>
<li><p><code>text</code>: объект String, который представляет выводимый текст</p></li> 	
<li><p><code>modifier</code>: объект <span class="b">Modifier</span>, который представляет применяемые к компоненту модификаторы</p></li>
<li><p><code>color</code>: объект <span class="b">Color</span>, который представляет цвет текста. По умолчанию имеет значение 
<code>Color.Unspecified</code></p></li>
<li><p><code>fontSize</code>: объект <span class="b">TextUnit</span>, который представляет размер шрифта. По умолчанию равен 
<code>TextUnit.Unspecified</code></p></li>
<li><p><code>fontStyle</code>: объект <span class="b">FontStyle?</span>, который представляет стиль шрифта. 
По умолчанию равен <code>null</code></p></li>
<li><p><code>fontWeight</code>: объект <span class="b">FontWeight?</span>, который представляет толщину шрифта. 
По умолчанию равен <code>null</code> </p></li>
<li><p><code>fontFamily</code>: объект <span class="b">FontFamily?</span>, который представляет тип шрифта. По умолчанию равен <code>null</code></p>
</li>
<li><p><code>letterSpacing</code>: объект <span class="b">TextUnit</span>, который представляет отступы между символами. 
По умолчанию равен <code>TextUnit.Unspecified</code></p></li>
<li><p><code>textDecoration</code>: объект <span class="b">TextDecoration?</span>, который представляет тип декораций (например, подчеркивание), 
применяемых к тексту. По умолчанию равен <code>null</code></p></li>
<li><p><code>textAlign</code>: объект <span class="b">TextAlign?</span>, который представляет выравнивание текста. По умолчанию равен <code>null</code></p></li>
<li><p><code>lineHeight</code>: объект <span class="b">TextUnit</span>, который представляет высоту строки текста. По умолчанию равен <code>TextUnit.Unspecified</code></p></li>
<li><p><code>overflow</code>: объект <span class="b">TextOverflow</span>, который определяет поведение текста при его выходе за границы контейнера. 
По умолчанию равен <code>TextOverflow.Clip</code></p></li>
<li><p><code>softWrap</code>: объект <span class="b">Boolean</span>, который определяет, должен ли текст переносится при завершении строки. 
При значении <code>false</code> текст не переносится, как будто строка имеет бесконечную длину. По умолчанию равен <code>true</code></p></li>
<li><p><code>maxLines</code>: объект <span class="b">Int</span>, который представляет максимальное количество строк. 
Если текст превысил установленное количество строк, то он усекается в соответствии с параметрами <code>overflow</code> и <code>softWrap</code>. 
По умолчанию равен <code>Int.MAX_VALUE</code></p></li>
<li><p><code>onTextLayout</code>: объект <span class="b">(TextLayoutResult) -&gt; Unit</span>, который представляет функцию, выполняемую при определении 
компоновки текста.</p></li>
<li><p><code>style</code>: объект <span class="b">TextStyle</span>, который представляет стиль текста. Значение по умолчанию - 
<code>LocalTextStyle.current</code></p></li>
</ul>

<h3>Размер шрифта</h3>
<p><p>Размер шрифта определяется параметром <code>fontSize</code>. В качестве параметру может передаваться значение типов Int, Double и Float, после которых указывается тип единиц. Это могут быть 
масштабируемые пиксели (единицы <span class="b">sp</span>, например, <code>22.sp</code>), либо это может быть относительный размер шрифта 
в единицах <span class="b">em</span> (например, <code>18.em</code>). Значение <code>TextUnit.Unspecified</code> указывает, что высота шрифта наследуется от настроек родительного компонента</p>
<p>Простейшее применение компонента:/p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.Text
import androidx.compose.foundation.layout.Column
import androidx.compose.ui.unit.em
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Column {
				Text(text = "Hello Jetpack Compose!", fontSize=25.sp)
				Text(text = "Hello Jetpack Compose!", fontSize=5.em)
			}
        }
    }
}
</pre>
<h3>Цвет шрифта</h3>
<p>За определение цвета шрифта отвечает параметр <span class="b">color</span>, который представляет объект <span class="b">Color</span>, 
ранее рассмотренный в статье <a href="./3.2.php">Установка цвета</a>.</p>
<pre class="brush:kt;">
import androidx.compose.ui.graphics.Color
//..........
Column {
	Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, color=Color.Red)
	Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, 
		color= Color(red = 0x44, green = 0x55, blue = 0x88, alpha = 0xFF))
}
</pre>
<h3>Стиль шрифта</h3>
<p>Стиль шрифта определяется параметром <span class="b">fontStyle</span>, который представляет класс <span class="b">FontStyle?</span>. 
Для определения этот класс предоставляет два встроенных значения:</p>
<ul>
<li><p><code>FontStyle.Italic</code> (наклоннный шрифт)</p></li>
<li><p><code>FontStyle.Normal</code> (стандартный шрифт)</p></li>
</ul>
<pre class="brush:kt;">
import androidx.compose.ui.text.font.FontStyle
//..........
Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, fontStyle = FontStyle.Italic)
Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, fontStyle = FontStyle.Normal)
</pre>
<h3>Толщина шрифта</h3>
<p>Толщина шрифта задается параметром <span class="b">fontWeight</span>, который представляет класс <span class="b">FontWeight</span>.</p>
<p>Есть два способа установки толщины шрифта. Прежде всего можно использовать конструктор этого класса, в который передается числовое значение от 1 до 1000. 
Чем больше значение, тем толще будет шрифт:</p>
<pre class="brush:kt;">FontWeight(600)</pre>
<p>Второй способ заключается в применении встроенных значений:</p>
<ul>
<li><p><code>FontWeight.Black</code> (Эквивалентно значению <code>W900</code>)</p></li>
<li><p><code>FontWeight.Bold</code> (Эквивалентно значению <code>W700</code>)</p></li>
<li><p><code>FontWeight.ExtraBold</code> (Эквивалентно значению <code>W800</code>)</p></li>
<li><p><code>FontWeight.ExtraLight</code> (Эквивалентно значению <code>W200</code>)</p></li>
<li><p><code>FontWeight.Light</code> (Эквивалентно значению <code>W300</code>)</p></li>
<li><p><code>FontWeight.Medium</code> (Эквивалентно значению <code>W500</code>)</p></li>
<li><p><code>FontWeight.Normal</code> (Эквивалентно <code>W400</code> - значение по умолчанию)</p></li>
<li><p><code>FontWeight.SemiBold</code> (Эквивалентно значению <code>W600</code>)</p></li>
<li><p><code>FontWeight.Thin</code> (Эквивалентно значению <code>W100</code>
</ul>
<p>Так, следующие  определения компонента Text будут аналогичны:</p>
<pre class="brush:kt;">
import androidx.compose.ui.text.font.FontWeight
//..........
Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, fontWeight= FontWeight.Bold)
Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, fontWeight= FontWeight.W700)
Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, fontWeight= FontWeight(700))
</pre>
<h3>Тип шрифта</h3>
<p>Тип или семейство шрифта определяется параметром <span class="b">fontFamily</span>, который представляет объект <span class="b">FontFamily?</span></p>
<p>Для определения шрифта FontFamily предоставляет ряд встроенных констант:</p>
<ul>
<li><p><code>FontFamily.Cursive</code> (курсивный, рукописный шрифт)</p></li>
<li><p><code>FontFamily.Monospace</code></p></li>
<li><p><code>FontFamily.Serif</code></p></li>
<li><p><code>FontFamily.SansSerif</code></p></li>
<li><p><code>FontFamily.Default</code> (шрифт по умолчанию на текущей платформе)</p></li>
<li><p><code>FontFamily.SansSerif</code></p></li>
</ul>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.Column
import androidx.compose.material.Text
import androidx.compose.ui.text.font.FontFamily
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Column {
                Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, fontFamily=FontFamily.Cursive)
                Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, fontFamily=FontFamily.Monospace)
                Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, fontFamily=FontFamily.SansSerif)
                Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, fontFamily=FontFamily.Serif)
                Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, fontFamily=FontFamily.Default)
            }
        }
    }
}
</pre>
<img src="./pics/4.1.png" alt="FontFamily in Text in Jetpack Compose and Kotlin" />
<h3>Расстояния между символами</h3>
<p>Параметр <span class="b">letterSpacing</span> задает расстояние между символами и представляет класс <span class="b">TextUnit</span>. В данном случае 
мы можем установить расстояние, так как и размер шрифта, с помощью единиц <span class="b">sp</span> или <span class="b">em</span>:</p>
<pre class="brush:kt;">
Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, letterSpacing= 1.3.sp)
Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, letterSpacing= 0.3.em)
</pre>
<h3>Декорации текста</h3>
<p>Параметр <span class="b">textDecoration</span> позволять задать декорации для текста. Данный параметр принимает объект класса <span class="b">TextDecoration</span>, 
который предоставляет несколько встроенных значений:</p>
<ul>
<li><p><code>TextDecoration.LineThrough</code> (зачеркивает текст)</p></li>
<li><p><code>TextDecoration.Underline</code> (подчеркивает текст)</p></li>
<li><p><code>TextDecoration.None</code> (отсутствие декораций)</p></li>
</ul>
<pre class="brush:kt;">
import androidx.compose.ui.text.style.TextDecoration
//...........
Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, textDecoration = TextDecoration.LineThrough)
Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, textDecoration = TextDecoration.Underline)
Text(text = "Hello Jetpack Compose!",  fontSize=22.sp, textDecoration = TextDecoration.None)        
</pre>
<h3>Выравнивание текста</h3>
<p>Параметр <span class="b">textAlign</span> управляет выравниванием текста и представляет объект класса <span class="b">TextAlign</span>. 
В качестве значения этому параметру можно передать значение одного из свойств класса TextAlign:</p>
<ul>
<li><p><code>TextAlign.Center</code>: выравнивание текста по центру контейнера</p></li>
<li><p><code>TextAlign.Justify</code>: текст равномерно растягивается по всей ширине контейнера</p></li>
<li><p><code>TextAlign.End</code>: выравнивание текста по конечному краю контейнера (в зависимости от ориентации текста это может быть левый или правый край)</p></li>
<li><p><code>TextAlign.Start</code>: выравнивание текста по началу контейнера (в зависимости от ориентации текста это может быть левый или правый край)</p></li>
<li><p><code>TextAlign.Left</code>: выравнивание текста по левому краю контейнера</p></li>
<li><p><code>TextAlign.Right</code>: выравнивание текста по правому краю контейнера</p></li>
</ul>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.material.Text
import androidx.compose.ui.Modifier
import androidx.compose.ui.text.style.TextAlign
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Column {
                Text(text = "Hello (Center)", modifier = Modifier.fillMaxWidth(1f) ,  fontSize=22.sp, textAlign = TextAlign.Center)
                Text(text = "Hello (Justify)", modifier = Modifier.fillMaxWidth(1f),  fontSize=22.sp, textAlign = TextAlign.Justify)
                Text(text = "Hello (Left)", modifier = Modifier.fillMaxWidth(1f),  fontSize=22.sp, textAlign = TextAlign.Left)
                Text(text = "Hello (Right)", modifier = Modifier.fillMaxWidth(1f),  fontSize=22.sp, textAlign = TextAlign.Right)
                Text(text = "Hello (Start)", modifier = Modifier.fillMaxWidth(1f),  fontSize=22.sp, textAlign = TextAlign.Start)
                Text(text = "Hello (End)", modifier = Modifier.fillMaxWidth(1f),  fontSize=22.sp, textAlign = TextAlign.End)
            }
        }
    }
}
</pre>
<img src="./pics/4.2.png" alt="Выравнивание текста и TextAlign в Text в Jetpack Compose и Kotlin в Android" />

<h3>Усечение текста</h3>
<p>Параметр <span class="b">overflow</span> управляет тем, как будет обрабатываться текст при его выходе за границы контейнера. 
Этот параметр принимает значение класса <span class="b">TextOverflow</span>. В качестве значения параметру можно передать значение одного из 
свойств данного класса:</p>
<ul>
<li><p><code>TextOverflow.Clip</code>: выходящий за границы контейнера текст усекается</p></li>
<li><p><code>TextOverflow.Ellipsis</code>: текст усекается, а в конце текста добавляется многоточие</p></li>
<li><p><code>TextOverflow.Visible</code>: весь текст может отображаться</p></li>
</ul>
<h3>Перенос текста</h3>
<p>Параметр <span class="b">softWrap</span> управляет переносом текста. Если он равен <code>true</code>, то текст переносится. 
Если <code>false</code>, то нет.</p>
<h3>Стиль текста</h3>
<p>Параметр <span class="b">style</span> управляет стилем текста. Он предоставляет класс <span class="b">TextStyle </span>, который по сути объединяет 
ряд вышеупомянутых и несколько дополнительных параметров в одну сущность. Его конструктор принимает следующие параметры:</p>
<pre class="brush:kt;">
TextStyle(
    color: Color,
    fontSize: TextUnit,
    fontWeight: FontWeight?,
    fontStyle: FontStyle?,
    fontSynthesis: FontSynthesis?,
    fontFamily: FontFamily?,
    fontFeatureSettings: String?,
    letterSpacing: TextUnit,
    baselineShift: BaselineShift?,
    textGeometricTransform: TextGeometricTransform?,
    localeList: LocaleList?,
    background: Color,
    textDecoration: TextDecoration?,
    shadow: Shadow?,
    textAlign: TextAlign?,
    textDirection: TextDirection?,
    lineHeight: TextUnit,
    textIndent: TextIndent?
)
</pre>
<ul>
<li><p><code>color</code>: объект <span class="b">Color</span>, который представляет цвет текста. По умолчанию имеет значение 
<code>Color.Unspecified</code></p></li>
<li><p><code>background</code>: объект <span class="b">Color</span>, который фоновый цвет компонента. По умолчанию имеет значение 
<code>Color.Unspecified</code></p></li>
<li><p><code>fontSize</code>: объект <span class="b">TextUnit</span>, который представляет размер шрифта. По умолчанию равен 
<code>TextUnit.Unspecified</code></p></li>
<li><p><code>fontStyle</code>: объект <span class="b">FontStyle?</span>, который представляет стиль шрифта. 
По умолчанию равен <code>null</code></p></li>
<li><p><code>fontWeight</code>: объект <span class="b">FontWeight?</span>, который представляет толщину шрифта. 
По умолчанию равен <code>null</code> </p></li>
<li><p><code>fontFamily</code>: объект <span class="b">FontFamily?</span>, который представляет тип шрифта. По умолчанию равен <code>null</code></p></li>
<li><p><code>fontFeatureSettings</code>: объект <span class="b">String?</span>, который определяет, как будут применяться настройки толщины шрифта 
и его наклон (то есть значения параметров fontWeight и fontStyle), если используемый шрифт не поддерживает выделение жирным и (или) наклон. По умолчанию равен <code>null</code></p></li>
<li><p><code>letterSpacing</code>: объект <span class="b">TextUnit</span>, который представляет отступы между символами. 
По умолчанию равен <code>TextUnit.Unspecified</code></p></li>

<li><p><code>baselineShift</code>: объект <span class="b">BaselineShift?</span>, который определяет, насколько текст будет сдвигаться относительно базовой линии (baseline). 
По умолчанию равен <code>null</code></p></li>
<li><p><code>textGeometricTransform</code>: представляет применяемые к тексту геометрические трансформации в виде объекта <span class="b">TextGeometricTransform?</span>. 
По умолчанию равен <code>null</code></p></li>
<li><p><code>localeList</code>: объект <span class="b">LocaleList?</span>, который представляет список со специфичными для егиона символами. 
По умолчанию равен <code>null</code></p></li>
<li><p><code>textDecoration</code>: объект <span class="b">TextDecoration?</span>, который представляет тип декораций (например, подчеркивание), 
применяемых к тексту. По умолчанию равен <code>null</code></p></li>
<li><p><code>textAlign</code>: объект <span class="b">TextAlign?</span>, который представляет выравнивание текста. По умолчанию равен <code>null</code></p></li>
<li><p><code>textDirection</code>: объект <span class="b">TextDirection?</span>, который представляет направление текста. По умолчанию равен <code>null</code></p></li>
<li><p><code>lineHeight</code>: объект <span class="b">TextUnit</span>, который представляет высоту строки текста. По умолчанию равен <code>TextUnit.Unspecified</code></p></li>
<li><p><code>shadow</code>: объект <span class="b">Shadow?</span>, который определяет применяемый к тексту эффект тени. 
По умолчанию равен <code>null</code></p></li>
<li><p><code>textIndent</code>: объект <span class="b">TextIndent?</span>, который представляет отступ от начала текста. 
По умолчанию равен <code>null</code></p></li>
</ul>
<p>Поскольку большая часть этих параметров применяется непосредственно в функции компонента Text, рассмотрим некоторые параметры, которые 
отстуствуют в функции компонента Text.</p>
<h4>Геометрические трансформации</h4>
<p>Параметр <code>TextGeometricTransform</code> задает геометрические трансформации текста с помощью объекта <span class="b">TextGeometricTransform</span>:</p>
<pre class="brush:kt;">TextGeometricTransform(scaleX: Float = 1.0f, skewX: Float = 0f)</pre>
<p>Первый параметр - <code>scaleX</code> указывает на увеличение текста. Если значение меньше 1.0f, то текст сжимается, если больше - то увеличивается.</p>
<p>Второй параметр - <code>skewX</code> указывает на сдвиг текста. Например, точка с координатами (x, y), будет трансформирована в точку 
(x + y * skewX, y). Значение по умолчанию - 0.0f. Например:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.Column
import androidx.compose.material.Text
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.text.style.TextGeometricTransform
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Column {
                Text(
                    text = "Все мы сейчас желаем кушать, потому что утомились",
                    fontSize = 22.sp,
                    style = TextStyle(textGeometricTransform = TextGeometricTransform(0.5f))
                )
                Text(
                    text = "Все мы сейчас желаем кушать, потому что утомились",
                    fontSize = 22.sp,
                    style = TextStyle(textGeometricTransform = TextGeometricTransform(1.5f))
                )
            }
        }
    }
}
</pre>
<img src="./pics/4.4.png" alt="Масштабирование текста и TextGeometricTransform в Text в Jetpack Compose и Kotlin в Android" />

<h4>Создание тени для текста</h4>
<p>Параметр <code>shadow</code> задает затенение текста с помощью объекта <span class="b">Shadow</span>:</p>
<pre class="brush:kt;">Shadow(color: Color, offset: Offset, blurRadius: Float)</pre>
<p>Первый параметр - <code>color</code> устанавливает цвет тени.</p>
<p>Второй параметр - <code>offset</code> смещение тени в виде объекта <span class="b">Offset</span>.</p>
<p>Третий параметр - <code>blurRadius</code> задает радиус размытия.</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.Column
import androidx.compose.material.Text
import androidx.compose.ui.geometry.Offset
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.graphics.Shadow
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.text.style.TextGeometricTransform
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Text(
                text = "Hello Metanit.com",
                fontSize = 30.sp,
                style = TextStyle(shadow = Shadow(Color.LightGray , Offset(10.0f, 16.5f), 1.0f))
            }
        }
    }
}
</pre>
<img src="./pics/4.5.png" alt="Тень текста и Shadow в Text в Jetpack Compose и Kotlin в Android" />
<h4>Направление текста</h4>
<p>Параметр <code>textDirection</code> устанавливает направление текста и может принимать следующие значения:</p>
<ul>
<li><p><code>TextDirection.Content</code>: направление текста зависит от первого направляющего символа в соответствии с алгоритмом Unicode Bidirectional Algorithm</p></li>
<li><p><code>TextDirection.ContentOrLtr</code>: направление текста зависит от первого направляющего символа в соответствии с алгоритмом Unicode Bidirectional Algorithm, либо представляет направление слева направо</p></li>
<li><p><code>TextDirection.ContentOrRtl</code>: направление текста зависит от первого направляющего символа в соответствии с алгоритмом Unicode Bidirectional Algorithm, либо представляет направление справа налево</p></li>
<li><p><code>TextDirection.Ltr</code>: текс направлен слева направо</p></li>
<li><p><code>TextDirection.Rtl</code>: текст направлен справо налево</p></li>
</ul>
<p>Например:</p>
<pre class="brush:kt;">
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.text.style.TextDirection
//............
Text(
	text = "Все мы сейчас желаем кушать, потому что утомились",
	fontSize=22.sp,
	style = TextStyle(textDirection = TextDirection.Rtl)
)
</pre>
<h4>TextIndent</h4>
<p>Параметр <code>textIndent</code> позволяет установить отступ от первого символа в тексте и от остального текста. Этот параметр представляет класс <span class="b">TextIndent</span>, 
конструктор которого принимает два значения. Первое значение указывает на отступ от первого символа. Второе значение применяется, если текст многострочный и устанавливает 
отступ от остальных символов на второй и последующих строках. Для установки отступа применяются единицы <code>sp</code>. Например:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.Column
import androidx.compose.material.Text
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.text.style.TextIndent
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Text(
                text = "Все мы сейчас желаем кушать, потому что утомились и уже четвертый час",
                fontSize = 22.sp,
                style = TextStyle(textIndent = TextIndent(50.sp, 25.sp))
            )
        }
    }
}
</pre>
<img src="./pics/4.3.png" alt="Отступ от текста и TextIndent в Text в Jetpack Compose и Kotlin в Android" />

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


<div class="nav"><p><a href="./5.2.php">Назад</a><a href="./">Содержание</a><a href="./4.2.php">Вперед</a></p></div></div>
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
<li class="closed"><span class="folder">Глава 1. Введение в jetpack</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/1.1.php">Что такое Jetpack Compose</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/1.2.php">Первый проект на Jetpack Compose</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/1.3.php">Создание визуального интерфейса</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 2. Модификаторы и визуальный интерфейс</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/3.1.php">Что такое модификаторы</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/3.2.php">Установка цвета</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/3.3.php">Установка размеров</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/3.4.php">Установка отступов и смещения</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/3.5.php">Создание прокрутки</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/3.6.php">Обработка нажатий</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 3. Контейнеры компоновки</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/2.1.php">Box</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/2.2.php">Column</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/2.3.php">Row</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 4. Взаимодействие с кодом Kotlin и состояние компонентов</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/5.1.php">Взаимодействие с кодом Kotlin</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/5.2.php">Введение в состояние компонентов</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 5. Визуальные компоненты</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.1.php">Text</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.2.php">Кнопка Button</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.3.php">Ввод текста, TextField и OutlinedTextField</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.7.php">Модификатор Modifier.toggleable</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.4.php">Checkbox</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.6.php">Выбираемый компонент и модификатор selectable</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.5.php">RadioButton</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.8.php">Иконки и компоненты IconButton и IconToggleButton</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.9.php">FloatingActionButton и ExtendedFloatingActionButton</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.10.php">Панели приложения TopAppBar и BottomAppBar</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.11.php">Scaffold</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.12.php">Всплывающие сообщения и Snackbar</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.13.php">Выдвижная панель drawer в Scaffold</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.14.php">Slider</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.15.php">Переключатель Switch</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.16.php">Диалоговые окна AlertDialog</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.17.php">Меню DropdownMenu</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/4.18.php">Индикаторы прогресса</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 6. Ресурсы в Jetpack Compose</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/7.1.php">Ресурсы строк</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/7.2.php">Ресурсы dimension</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/7.3.php">Ресурсы Color</a></span></li>
	</ul>
</li>
<li class="closed"><span class="folder">Глава 7. Работа с изображениями</span>
	<ul>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/6.1.php">Компонент Image</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/6.2.php">Ресурсы изображений и ImageBitmap</a></span></li>
		<li><span class="file"><a href="//metanit.com/kotlin/jetpack/6.3.php">Векторная графика и ImageVector</a></span></li>
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
<!DOCTYPE html>
<html >
<head>
<title>Jetpack Compose | Кнопка Button</title>
<meta charset="utf-8" />
<meta name="description" content="Кнопка Button и ее параметры в Jetpack Compose на языке программирования Kotlin, обработка нажатия кнопки, установка ганица и цвета кнопки">
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
<h2>Кнопка Button</h2><div class="date">Последнее обновление: 19.10.2021</div>

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

<p>Для создания кнопок в Jetpack Compose применяется компонент <span class="b">Button</span>, который имеет следующее определение:</p>
<pre class="brush:kt;">
@Composable
fun Button(
    onClick: () -&gt; Unit,
    modifier: Modifier = Modifier,
    enabled: Boolean = true,
    interactionSource: MutableInteractionSource = remember { MutableInteractionSource() },
    elevation: ButtonElevation? = ButtonDefaults.elevation(),
    shape: Shape = MaterialTheme.shapes.small,
    border: BorderStroke? = null,
    colors: ButtonColors = ButtonDefaults.buttonColors(),
    contentPadding: PaddingValues = ButtonDefaults.ContentPadding,
    content: RowScope.() -&gt; Unit
): @Composable Unit
</pre>
<p>Параметры функции компонента:</p>
<ul>
<li><p><code>onClick</code>: представляет функцию-обработчик нажатия кнопки</p></li> 	
<li><p><code>modifier</code>: представляет объект <span class="b">Modifier</span>, который определяет модификаторы кнопки</p></li>  	
<li><p><code>enabled</code>: значение типа <code>Boolean</code> устанавливает, доступна ли кнопка для нажатия. По умолчанию равно <code>true</code> (то есть кнопка доступна для нажатия)</p></li> 	
<li><p><code>interactionSource</code>: представляет объект типа <span class="b">MutableInteractionSource</span>, который устанавливает поток взаимодействий для кнопки. Значение по умолчанию - <code>remember { MutableInteractionSource() }</code></p></li> 	
<li><p><code>elevation</code>: объект типа <span class="b">ButtonElevation?</span>, который определяет анимацию для кнопки. По умолчанию равно <code>ButtonDefaults.elevation()</code></p></li> 	
<li><p><code>shape</code>: объект типа <span class="b">Shape</span>, который устанавливает форму кнопки. По умолчанию равно <code>MaterialTheme.shapes.small</code></p></li> 
<li><p><code>border</code>: объект типа <span class="b">BorderStroke?</span>, который устанавливает границу кнопки. По умолчанию равно <code>null</code></p></li> 	
<li><p><code>colors</code>: объект типа <span class="b">ButtonColors</span>, который устанавливает цвета кнопки. По умолчанию равно <code>ButtonDefaults.buttonColors()</code></p></li> 	
<li><p><code>contentPadding</code>: объект типа <span class="b">PaddingValues</span>, который устанавливает отступы между границами кнопки и ее содержимым. По умолчанию равно <code>ButtonDefaults.ContentPadding</code></p></li> 	
<li><p><code>content</code>: содержимое кнопки в виде строки Row</p></li> 	
</ul>
<p>Определим простейшую кнопку:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.Button
import androidx.compose.material.Text
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Button(onClick = {}){
                Text("Click", fontSize = 25.sp)
            }
        }
    }
}
</pre>
<img src="./pics/4.6.png" alt="Кнопка button в Jetpack Compose и Kotlin в Android" />
<p>Здесь надо отметить следующие моменты. Прежде всего, необходимо определить как минимум один параметр - <code>onClick</code>, однако в данном случае это 
пустая функция, которая ничего не делает.</p>
<p>Второй момент - кнопка представляет сложный компонент, который может содержать другие компоненты. Таким образом мы можем создавать комплексные кнопки с различным содержимым. Например:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.Column
import androidx.compose.material.Button
import androidx.compose.material.Text
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Button(onClick = {},)
            {
                Column{
                    Text("Button Header", fontSize = 30.sp)
                    Text("Button Text", fontSize = 22.sp)
                    Text("Button footer", fontSize = 18.sp)
                }
            }
        }
    }
}
</pre>
<img src="./pics/4.11.png" alt="Содержимое кнопки button в Jetpack Compose и Kotlin в Android" />
<h3>Обработка нажатия</h3>
<p>Для обработки нажатия параметру <code>onClick</code> передается функция, которая будет выполняться при нажатии.</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.Button
import androidx.compose.material.Text
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val label = remember{mutableStateOf("Click")}
            Button(onClick = {label.value = "Hello"}){
                Text(label.value, fontSize = 25.sp)
            }
        }
    }
}
</pre>
<p>В данном случае мы определяем переменную <code>label</code>, которая будет хранить текст для компонента Text. Однако это не просто строка - объект типа String, а 
объект <span class="b">MutableState&lt;T&gt;</span>, который создается функцией <span class="b">mutableStateOf()</span>. В эту функцию передается собственно хранимое значение, которое затем можно получить 
с помощью свойства <code>value</code> объекта <code>MutableState&lt;T&gt;</code> и которое в данном случае мы отображаем в компоненте Text:</p>
<pre class="brush:kt;">Text(label.value, fontSize = 25.sp)</pre>
<p>А в обработчике нажатия мы изменяем это значение:</p>
<pre class="brush:kt;">onClick = {label.value = "Hello"}</pre>
<p>В итоге при нажатии на кнопку изменится ее текст.</p>
<img src="./pics/4.7.png" alt="onClick и обработка нажатия на кнопку в Jetpack Compose и Kotlin в Android" />
<h3>elevation</h3>
<p>Параметр <code>elevation</code> определяет анимацию для кнопки в разных состояниях и представляет объект интерфейса <code>ButtonElevation</code>. По 
умолчанию этот параметр в качестве значения имеет компонент <code>ButtonDefaults.elevation</code>:</p>
<pre class="brush:kt;">
@Composable
fun elevation(
    defaultElevation: Dp = 2.dp,
    pressedElevation: Dp = 8.dp,
    disabledElevation: Dp = 0.dp
): @Composable ButtonElevation
</pre>
<p>Этот компонент определяет ряд параметров, между значениями которых будет идти анимация при переключении состояния кнопки:</p>
<ul>
<li><p><code>defaultElevation</code>: определяет анимацию, когда кнопка доступна для нажатия и когда для нее не определено других объектов 
Interaction, которые определяют состояние для кнопки.</p></li>
<li><p><code>pressedElevation</code>: определяет анимацию для кнопки в нажатом состоянии.</p></li>
<li><p><code>defaultElevation</code>: определяет анимацию для кнопки в отключенном состоянии.</p></li>
</ul>
<h3>Цвета кнопки</h3>
<p>Цвета кнопки задаются с помощью параметра <code>colors</code>, который предоставляет объект <span class="b">ButtonColors</span> и 
по умолчанию равен компоненту <code>ButtonColors.buttonColors</code>:</p>
<pre class="brush:kt;">
@Composable
fun buttonColors(
    backgroundColor: Color = MaterialTheme.colors.primary,
    contentColor: Color = contentColorFor(backgroundColor),
    disabledBackgroundColor: Color = MaterialTheme.colors.onSurface.copy(alpha = 0.12f)
            .compositeOver(MaterialTheme.colors.surface),
    disabledContentColor: Color = MaterialTheme.colors.onSurface
            .copy(alpha = ContentAlpha.disabled)
): @Composable ButtonColors
</pre>
<ul>
<li><p><code>backgroundColor</code>: определяет фоновый цвет, когда кнопка доступна для нажатия.</p></li>
<li><p><code>contentColor</code>: определяет цвет содержимого, когда кнопка доступна для нажатия.</p></li>
<li><p><code>disabledBackgroundColor</code>: определяет фоновый цвет, когда кнопка не доступна для нажатия.</p></li>
<li><p><code>disabledContentColor</code>: определяет цвет содержимого, когда кнопка не доступна для нажатия.</p></li>
</ul>
<p>Для установки цветов кнопки мы можем создать свой класс или компонент интерфейса <span class="b">ButtonColors</span>, либо воспользоваться 
встроенным компонентом <code>ButtonDefaults.buttonColors</code>. Применим второй способ:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.Button
import androidx.compose.material.ButtonDefaults
import androidx.compose.material.Text
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Button(onClick = {},
                colors = ButtonDefaults.buttonColors(backgroundColor = Color.Red, contentColor = Color.Black)
            )
            {
                Text("Click", fontSize = 25.sp)
            }
        }
    }
}
</pre>
<p>Здесь в качестве фонового цвета применяется красный, а в качестве цвета содержимого - черный:</p>
<img src="./pics/4.9.png" alt="ButtonColors и цвет кнопки в Jetpack Compose и Kotlin в Android" />
<h3>Граница кнопки</h3>
<p>За установки границы кнопки (а именно ее толщины и цвета) отвечает параметр <code>border</code>, который представляет класс <span class="b">BorderStroke</span> со следующими конструкторами:</p>
<pre class="brush:kt;">
BorderStroke(width: Dp, color: Color)
BorderStroke(width: Dp, brush: Brush)
</pre>
<p>Первый параметр конструкторов устанавливает толщину границы, а второй - ее цвет с помощью объекта Brush или Color. 
Например, определим границу у кнопку:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.BorderStroke
import androidx.compose.material.Button
import androidx.compose.material.ButtonDefaults
import androidx.compose.material.Text
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Button(onClick = {},
                colors = ButtonDefaults.buttonColors(backgroundColor = Color.LightGray, contentColor = Color.Black),
                border = BorderStroke(3.dp, Color.DarkGray)
            )
            {
                Text("Click", fontSize = 30.sp)
            }
        }
    }
}
</pre>
<img src="./pics/4.10.png" alt="BorderStroke и цвет и ширина границы кнопки в Jetpack Compose и Kotlin в Android" />
<h3>OutlinedButton</h3>
<p>Компонент <span class="b">OutlinedButton</span> также представляет кнопку и имеет тот же набор параметров:</p>
<pre class="brush:kt;">
@Composable
fun OutlinedButton(
    onClick: () -&gt; Unit,
    modifier: Modifier = Modifier,
    enabled: Boolean = true,
    interactionSource: MutableInteractionSource = remember { MutableInteractionSource() },
    elevation: ButtonElevation? = null,
    shape: Shape = MaterialTheme.shapes.small,
    border: BorderStroke? = ButtonDefaults.outlinedBorder,
    colors: ButtonColors = ButtonDefaults.outlinedButtonColors(),
    contentPadding: PaddingValues = ButtonDefaults.ContentPadding,
    content: RowScope.() -&gt; Unit
): @Composable Unit
</pre>
<p>Он работает похожим образом. Главное отличие от стандартных кнопок - немного иная стилизация, которая по умолчанию добавляет ярко выраженную границу компонента и применяет иную цветоую гамму. Например:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.OutlinedButton
import androidx.compose.material.Text
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val label = remember{mutableStateOf("Click")}
            OutlinedButton(onClick = {label.value = "Hello"}){
                Text(label.value, fontSize = 25.sp)
            }
        }
    }
}
</pre>
<img src="./pics/4.28.png" alt="кнопка OutlinedButton в Jetpack Compose и Kotlin в Android" />
<p>Для раскраски кнопки применяется компонент <span class="b">ButtonDefaults.outlinedButtonColors</span>:</p>
<pre class="brush:kt;">
@Composable
fun outlinedButtonColors(
    backgroundColor: Color = MaterialTheme.colors.surface,
    contentColor: Color = MaterialTheme.colors.primary,
    disabledContentColor: Color = MaterialTheme.colors.onSurface
            .copy(alpha = ContentAlpha.disabled)
): @Composable ButtonColors
</pre>
<h3>TextButton</h3>
<p>Компонент <span class="b">TextButton</span> представляет еще один встроенный тип кнопок, который не имеет границы и имеет прозрачный фон. 
Он имеет тот же набор параметров, что и Button и OutlinedButton:</p>
<pre class="brush:kt;">
@Composable
fun TextButton(
    onClick: () -&gt; Unit,
    modifier: Modifier = Modifier,
    enabled: Boolean = true,
    interactionSource: MutableInteractionSource = remember { MutableInteractionSource() },
    elevation: ButtonElevation? = null,
    shape: Shape = MaterialTheme.shapes.small,
    border: BorderStroke? = null,
    colors: ButtonColors = ButtonDefaults.textButtonColors(),
    contentPadding: PaddingValues = ButtonDefaults.TextButtonContentPadding,
    content: RowScope.() -&gt; Unit
): @Composable Unit
</pre>
<p>Используем TextButton:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.TextButton
import androidx.compose.material.Text
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val label = remember{mutableStateOf("Click")}
            TextButton(onClick = {label.value = "Hello"}){
                Text(label.value, fontSize = 25.sp)
            }
        }
    }
}
</pre>
<img src="./pics/4.29.png" alt="кнопка TextButton в Jetpack Compose и Kotlin в Android" />
<p>Для раскраски кнопки применяется компонент <span class="b">ButtonDefaults.textButtonColors</span>:</p>
<pre class="brush:kt;">
@Composable
fun textButtonColors(
    backgroundColor: Color = Color.Transparent,
    contentColor: Color = MaterialTheme.colors.primary,
    disabledContentColor: Color = MaterialTheme.colors.onSurface
            .copy(alpha = ContentAlpha.disabled)
): @Composable ButtonColors
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


<div class="nav"><p><a href="./4.1.php">Назад</a><a href="./">Содержание</a><a href="./4.3.php">Вперед</a></p></div></div>
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
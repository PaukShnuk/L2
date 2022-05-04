<!DOCTYPE html>
<html >
<head>
<title>Jetpack Compose | RadioButton</title>
<meta charset="utf-8" />
<meta name="description" content="Радиокнопка RadioButton и ее параметры в Jetpack Compose на языке программирования Kotlin в Android, обработка выбора в группе радиокнопок, модификаторы Modifier.selectable и Modifier.selectableGroup">
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
<h2>RadioButton</h2><div class="date">Последнее обновление: 05.10.2021</div>

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

<p>Компонент <span class="b">RadioButton</span> представляет переключатель или радиокнопку и служит для создания группы радиокнопок, из которых одномоментно 
можно выбрать только один переключатель. Этот компонент имеет следующие параметры:</p>
<pre class="brush:kt;">
@Composable
fun RadioButton(
    selected: Boolean,
    onClick: () -&gt; Unit,
    modifier: Modifier = Modifier,
    enabled: Boolean = true,
    interactionSource: MutableInteractionSource = remember { MutableInteractionSource() },
    colors: RadioButtonColors = RadioButtonDefaults.colors()
): @Composable Unit
</pre>
<ul>
<li><p><code>selected</code>: указывает, будет ли отмечена радиокнопка. Представляет значение <code>Boolean</code>. Если равен <code>true</code>, 
то радиокнопка отмечена.</p></li>
<li><p><code>onClick</code>: представляет функцию типа <code>() -&gt; Unit</code>, которая выполняется при нажатия на радиокнопку.</p></li>
<li><p><code>modifier</code>: объект <span class="b">Modifier</span>, который устанавливает для радиокнопки модификаторы</p></li>
<li><p><code>enabled</code>: указывает, будет ли доступна радиокнопка. Представляет значение <code>Boolean</code> и по умолчанию равен <code>true</code> (то есть радиокнопка будет доступна).</p></li>	
<li><p><code>interactionSource</code>: объект <span class="b">MutableInteractionSource</span>, который задает поток взаимодействий для радиокнопки. 
По умолчанию равен <code>remember { MutableInteractionSource() }</code>.</p></li>
<li><p><code>colors</code>: объект <span class="b">RadioButtonColors</span>, который задает цвета для радиокнопки. 
По умолчанию равен <code>RadioButtonDefaults.colors()</code>.</p></li>
</ul>
<p>Создадим группу из двух радиокнопок:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.selection.selectableGroup
import androidx.compose.material.RadioButton
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.ui.Modifier

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val state = remember { mutableStateOf(true) }
            Column(Modifier.selectableGroup())
            {
                RadioButton(
                    selected = state.value,
                    onClick = { state.value = true }
                )
                RadioButton(
                    selected = !state.value,
                    onClick = { state.value = false }
                )
            }
        }
    }
}
</pre>
<p>Для создании группы радиокнопок, которые рассматриваются именно как группа или единое целое, у контейнера - компонента Column или Row устанавливается 
модификатор <span class="b">Modifier.selectableGroup()</span>. В данном случае радиокнопки помещаются в Column и соответственно будут располагаться в столбик:</p>
<pre class="brush:kt;">Column(Modifier.selectableGroup())</pre>
<p>Хотя также можно было бы расположить радиокнопки в строку, поместив в контейнер Row.</p>
<p>Для хранения состояния радиокнопок определяется переменная <code>state</code>, которая представляет тип <code>MutableState&lt;Boolean&gt;</code>:</p>
<pre class="brush:kt;">val state = remember { mutableStateOf(true) }</pre>
<p>С помощью свойства <code>value</code> получаем хранимое в переменной значение (<code>true</code> или <code>false</code>) и передаем его параметру <code>selected</code> 
радиокнопок:</p>
<pre class="brush:kt;">selected = state.value</pre>
<p>Но поскольку только одна радиокнопка одномоментно может быть выбрана, то другой радиокнопке передается противоположеное значение:</p>
<pre class="brush:kt;">selected = !state.value</pre>
<p>А в обработчике нажатия из параметра <code>onClick</code> изменяем данное значение:</p>
<pre class="brush:kt;">onClick = { state.value = true }</pre>
<img src="./pics/4.21.png" alt="RadioButton в Jetpack Compose и Kotlin в Android" />
<h3>Добавление радиокнопкам текстовых меток</h3>
<p>В примере выше мы видим, что для радиокнопок, как и для флажков, неопределяется никакой текстовой метки, которая несла бы самую минимальную информацию о радиокнопки. 
В этом случае необходимо самостоятельно комбинировать радиокнопку с текстовыми компонентами:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Row
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.selection.selectableGroup
import androidx.compose.material.RadioButton
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.ui.Modifier
import androidx.compose.material.Text
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val state = remember { mutableStateOf(true) }
            val change= { state.value = !state.value }
            Column(Modifier.selectableGroup())
            {
                Row{
                    RadioButton(
                        selected = state.value,
                        onClick = { state.value = true },
                        modifier = Modifier.padding(8.dp)
                    )
                    Text("Kotlin", fontSize = 22.sp)
                }
                Row{
                    RadioButton(
                        selected = !state.value,
                        onClick = { state.value = false },
                        modifier = Modifier.padding(8.dp)
                    )
                    Text("Java", fontSize = 22.sp)
                }
            }
        }
    }
}
</pre>
<img src="./pics/4.22.png" alt="Text и RadioButton в Jetpack Compose и Kotlin в Android" />
<h3>Обработка выбора варианта в группе радиокнопок</h3>
<p>Выше приведенный пример довольно прост в том плане, что у нас только две радиокнопки - когда у одной кнопки параметр <code>selected</code> равен <code>true</code>, 
у другой равен <code>false</code>. В этом плане довольно просто задать логику переключения между радиокнопками. Однако что если у нас 3 и более переключателей? Рассмотрим следующий пример:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.selection.selectable
import androidx.compose.foundation.selection.selectableGroup
import androidx.compose.material.RadioButton
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.ui.Modifier
import androidx.compose.material.Text
import androidx.compose.ui.Alignment
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val languages = listOf("Kotlin", "Java", "Javascript", "Rust")
            val (selectedOption, onOptionSelected) = remember { mutableStateOf(languages[0]) }

            Column(Modifier.selectableGroup()) {
                languages.forEach { text -&gt;
                    Row( Modifier.fillMaxWidth().height(56.dp), verticalAlignment = Alignment.CenterVertically)
                    {
                        RadioButton(
                            selected = (text == selectedOption),
                            onClick = { onOptionSelected(text) }
                        )
                        Text( text = text, fontSize = 22.sp )
                    }
                }
            }
        }
    }
}
</pre>
<img src="./pics/4.23.png" alt="выбор из группы RadioButton в Jetpack Compose и Kotlin в Android" />
<p>В примере выше прежде всего все данные, которые будут представлять радиокнопки, помещаются в список <code>languages</code>:</p>
<pre class="brush:kt;">val languages = listOf("Kotlin", "Java", "Javascript", "Rust")</pre>
<p>Здесь четыре элемента, соответственно мы будем создавать четыре радиокнопки для каждого из этих элементов.</p>
<p>Далее мы получаем объект <span class="b">MutableState&lt;String&gt;</span>, который необходим для и отслеживания выбранного значения:</p>
<pre class="brush:kt;">val (selectedOption, onOptionSelected) = remember { mutableStateOf(languages[0]) }</pre>
<p>В функцию <code>mutableStateOf()</code> передается первый элемент из списка, то есть по умолчанию будет выбран первый элемент списка languages.</p>
<p>Однако мы не просто берем объект <code>MutableState&lt;String&gt;</code>, а раскладываем его на два компонента - <code>selectedOption</code> и 
<code>onOptionSelected</code>. Значение <code>selectedOption</code> будет представлять отслеживаемый объектом <code>MutableState&lt;String&gt;</code> 
 элемент списка languages. А <code>onOptionSelected</code> - функция типа <code>(String) -&gt; Unit</code>, которая будет вызываться при изменении значения в <code>MutableState&lt;String&gt;</code> 
 и которая в качестве параметра будет получать новое значение.</p>
 <p>Как и в примерах выше, чтобы задать группу выбираемых компонентов, для контейнера (в данном случае компонента Column) устанавливается модификатор <code>selectableGroup</code>:</p>
 <pre class="brush:kt;">Column(Modifier.selectableGroup()){ ........... }</pre>
 <p>Далее перебираем список languages с помощью функции <code>forEach()</code>, в которую передается функция, вызываемая для каждого перебираемого 
 элемента:</p>
 <pre class="brush:kt;">
 languages.forEach { text -&gt;
	Row( Modifier.fillMaxWidth().height(56.dp), verticalAlignment = Alignment.CenterVertically)
	{
		RadioButton(
			selected = (text == selectedOption),
            onClick = { onOptionSelected(text) }
		)
		Text( text = text, fontSize = 22.sp )
	}
}
</pre>
 <p>Фактически в данном случае за каждой строкой закрепляется определенный элемент из списка languages. И радиокнопка является выбранный, 
 если значение <code>selectedOption</code> совпадает со значением элемента из списка languages, закрепленным за данным компонентом Row:</p>
<pre class="brush:kt;">selected = (text == selectedOption)</pre>
<p>При нажатии на компонент срабатывает функция из параметра <code>onClick</code>, в которой вызывается функция <code>onOptionSelected</code>:</p>
<pre class="brush:kt;">onClick = { onOptionSelected(text) }</pre>
<p>В функции <code>onOptionSelected</code> передается закрепленный за компонентом Row элемент из списка languages, благодаря чему изменится выбранный элемент.</p>
<h3>Выбор всей строки</h3>
<p>Пример выше прекрасно работает, однако имеет один недостаток: чтобы выбрать радиокноку, необходимо пальцем попасть в этот небольшой кружок, который представляет 
радиокнопку. Было бы гораздо лучше, если бы мы могли нажать на любой место в строке, например, на текстовую метку, и тем самым выбрать радиокноку. 
Для этого изменим код следующим образом:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.selection.selectable
import androidx.compose.foundation.selection.selectableGroup
import androidx.compose.material.RadioButton
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.ui.Modifier
import androidx.compose.material.Text
import androidx.compose.ui.Alignment
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val languages = listOf("Kotlin", "Java", "Javascript", "Rust")
            val (selectedOption, onOptionSelected) = remember { mutableStateOf(languages[0]) }

            Column(Modifier.selectableGroup()) {
                languages.forEach { text -&gt;
                    Row(
                        Modifier
                            .fillMaxWidth()
                            .height(56.dp)
                            .selectable(
                                selected = (text == selectedOption),
                                onClick = { onOptionSelected(text) }
                            ),
                        verticalAlignment = Alignment.CenterVertically
                    ) {
                        RadioButton(
                            selected = (text == selectedOption),
                            onClick = null
                        )
                        Text( text = text, fontSize = 22.sp )
                    }
                }
            }
        }
    }
}
</pre>
 <p>Ключевым моментом здесь является установка модификатора <code>Modifier.selectable</code>:</p>
 <pre class="brush:kt;">
 Row(
	Modifier.selectable(
		selected = (text == selectedOption),
		onClick = { onOptionSelected(text) }
),
</pre>
<p>Модификатор <code>Modifier.selectable()</code> делает компонент (в данном случае компонент Row) выделяемым. 
То есть мы можем выбрать не просто радиокнопку, а всю строку. В примере выше компонент Row является выбранным, если значение <code>selectedOption</code> совпадает со значением элемента из списка languages, 
закрепленным за данным компонентом Row:</p>
<pre class="brush:kt;">selected = (text == selectedOption)</pre>
<p>При нажатии на компонент срабатывает функция из параметра <code>onClick</code>, в которой вызывается функция <code>onOptionSelected</code>:</p>
<pre class="brush:kt;">onClick = { onOptionSelected(text) }</pre>
<p>В функции <code>onOptionSelected</code> передается закрепленный за компонентом Row элемент из списка languages, благодаря чему изменится выбранный элемент.</p>
<p>Кроме того, также надо настроить радиокнопки, которые выводятся в строке Row:</p>
<pre class="brush:kt;">
RadioButton(
	selected = (text == selectedOption),
	onClick = null
)
</pre>
<p>Для выбора радиокнопки действует тот же алгоритм, что и для контейнера Row: радиокнопка выбрана, если текущий элемент из languages совпадает со 
значением <code>selectedOption</code>.</p>
<p>И поскольку выбор элемента обрабатывается в родительском контейнере Row, то нет смысла обрабатывать выбор элемента в радиокнопке, поэтому ее параметру <code>onClick</code> передается 
значение <code>null</code>.</p>
<p>Таким образом, внешне мы получим тот же визуальный интерфейс, только теперь для выделения радиокнопки достаточно нажать на любое место в строке.</p>

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


<div class="nav"><p><a href="./4.6.php">Назад</a><a href="./">Содержание</a><a href="./4.8.php">Вперед</a></p></div></div>
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
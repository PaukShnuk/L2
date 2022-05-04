<!DOCTYPE html>
<html >
<head>
<title>Jetpack Compose | Всплывающие сообщения и Snackbar</title>
<meta charset="utf-8" />
<meta name="description" content="Всплывающие сообщения и Snackbar в Jetpack Compose на языке программирования Kotlin в Android, компоненты SnackbarHost и SnackbarHostState, функция showSnackbar, получение результата из showSnackbar, Snackbar вне Scaffold">
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
<h2>Всплывающие сообщения и Snackbar</h2><div class="date">Последнее обновление: 22.10.2021</div>

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

<p>Всплывающие сообщения, которые извещают пользователя о некоторых процессах в приложения и которые через некоторое время исчезают, являются обычным делом в приложении. 
И Jetpack Compose предоставляет для создания подобных сообщений встроенный функционал.</p>
<h3>Snackbar</h3>
<p>Ключевым компонентом для создания всплывающих сообщений является <span class="b">Snackbar</span>, который предоставляет короткое 
сообщение, отображаемое внизу экрана. Данный компонент имеет две версии. Первая версия:</p>
<pre class="brush:kt;">
@Composable
fun Snackbar(
    modifier: Modifier = Modifier,
    action: () -&gt; Unit = null,
    actionOnNewLine: Boolean = false,
    shape: Shape = MaterialTheme.shapes.small,
    backgroundColor: Color = SnackbarDefaults.backgroundColor,
    contentColor: Color = MaterialTheme.colors.surface,
    elevation: Dp = 6.dp,
    content: () -&gt; Unit
): @Composable Unit
</pre>
<p>Параметры функции компонента:</p>
<ul>
<li><p><code>modifier</code>: представляет объект <span class="b">Modifier</span>, который определяет модификаторы компонента</p></li>
<li><p><code>action</code>: вложенный компонент (обычно текст), по нажатию на который компонент уведомляе систему, 
что необходимо ввыполнить некоторое действие.</p></li> 	
<li><p><code>actionOnNewLine</code>: указывает, будет ли действие располагаться на новой строке. По умолчанию равно <code>false</code></p></li> 	
<li><p><code>shape</code>: объект <span class="b">Shape</span>, который задает форму компонента. По умолчанию равно <code>MaterialTheme.shapes.small</code></p></li>
<li><p><code>elevation</code>: задает анимацию по нажатию. По умолчанию равно <code>6.dp</code></p></li>
<li><p><code>backgroundColor</code>: фоновый цвет. По умолчанию - <code>SnackbarDefaults.backgroundColor</code></p></li>
<li><p><code>contentColor</code>: цвет содержимого. По умолчанию - <code>MaterialTheme.colors.surface</code></p></li>	
<li><p><code>content</code>: содержимое компонента</p></li>
</ul>
<p>Вторая версия Snackbar:</p>
<pre class="brush:kt;">
@Composable
fun Snackbar(
    snackbarData: SnackbarData,
    modifier: Modifier = Modifier,
    actionOnNewLine: Boolean = false,
    shape: Shape = MaterialTheme.shapes.small,
    backgroundColor: Color = SnackbarDefaults.backgroundColor,
    contentColor: Color = MaterialTheme.colors.surface,
    actionColor: Color = SnackbarDefaults.primaryActionColor,
    elevation: Dp = 6.dp
): @Composable Unit
</pre>
<p>Тут в пинципе применяются те же параметры, за исключением того, что содержимое Snackbar устанавливается с помощью параметра <code>snackbarData</code>, который представляет 
объект <span class="b">SnackbarData</span>. SnackbarData - это интерфейс, который предоставляет ряд свойств и методов для управления сообщением:</p>
<ul>
<li><p>Свойство <code>message</code>: текст сообщения</p></li>
<li><p>Свойство <code>actionLabel</code>: текстовая метка, нажатие на которую будет извещать систему, что надо выполнить некотоое действие</p></li>
<li><p>Свойство <code>duration</code>: время отображения сообщения, представляет объект <span class="b">SnackbarDuration</span></p></li>
<li><p>Метод <code>performAction()</code>: уведомляет систему, что произошло нажатие на метку, представленную параметром <code>actionLabel</code></p></li>
<li><p>Метод <code>dismiss()</code>: уведомляет систему, что отображение сообщения завершилось без нажатия на метку из параметра <code>actionLabel</code></p></li>
</ul>
<p>В принципе мы можем определить Snackbar как обычный компонент и сами управлять им. Например:</p>
<pre class="brush:kt;">
Snackbar{
	Text("Загрузка завершена", fontSize = 22.sp)
}
</pre>
<p>Однако в реальности мы можем даже явным образом не создавать объект Snackbar для отображения сообщение, а воспользоваться функцией <code>showSnackbar()</code> объекта SnackbarHostState.</p>
<h3>SnackbarHostState</h3>
<p>Объект <span class="b">SnackbarHostState</span> отображает или ставит в очередь для отображения компоненты Snackbar. 
SnackbarHostState гарантирует, что одномоментно только один объект Snackbar будет отображаться на экране.</p>
<p>Для отображения Snackbar в SnackbarHostState определена функция <span class="b">showSnackbar()</span>:</p>
<pre class="brush:kt;">
suspend SnackbarResult showSnackbar(
    message: String,
    actionLabel: String?,
    duration: SnackbarDuration
)
</pre>
<ul>
<li><p><code>message</code>: отображаемое в Snackbar сообщение</p></li>
<li><p><code>actionLabel</code>: метка, которая отображается в виде кнопки в Snackbar</p></li>	
<li><p><code>duration</code>: длительность отображения сообщения в виде объекта <span class="b">SnackbarDuration</span>. Значение по умолчанию <code>SnackbarDuration.Short</code>. Другие возможные значения: <code>SnackbarDuration.Long</code> и 
<code>SnackbarDuration.Indefinite</code></p></li>
</ul>
<p>Фактически все эти параметры аналогичны свойствам объекта SnackbarData.</p>
<p>В качестве результата функция возвращает объект <span class="b">SnackbarResult</span>. Он может иметь следующие значения: 
<code>SnackbarResult.ActionPerformed</code> (если была нажата метка действия в Snackbar) и <code>SnackbarResult.Dismissed</code> 
(если Snackbar был скрыт из-за действий пользователя или из-за того, что окончилось его время отображения)</p>
<p>Итак, используем функцию <code>showSnackbar()</code> для отображения всплывающего сообщения:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.*
import androidx.compose.material.icons.Icons
import androidx.compose.material.icons.filled.*
import androidx.compose.runtime.*
import androidx.compose.ui.unit.sp
import kotlinx.coroutines.launch

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val scope = rememberCoroutineScope()
            val scaffoldState = rememberScaffoldState()
            val count = remember{ mutableStateOf(0) }
            Scaffold(
                scaffoldState = scaffoldState,
                floatingActionButton = {
                    FloatingActionButton(
                        content = {Icon(Icons.Filled.Add, contentDescription = "Добавить")},
                        onClick = {
                            scope.launch {
                                scaffoldState.snackbarHostState.showSnackbar("Count: ${++count.value}")
                            }
                        }
                    )
                }
            ){
                Text("Count", fontSize = 28.sp)
            }
        }
    }
}
</pre>
<img src="./pics/4.42.png" alt="SnackbarHostState и Scaffold в Jetpack Compose и Kotlin в Android" />
<p>Здесь надо отметить несколько моментов. Во-первых, для обращения к объекту SnackbarHostState в Scaffold нам нужно получить состояние компонента Scaffold. 
Для создания объекта состояния применяется встроенная функция <span class="b">rememberScaffoldState()()</span>. Далее, используя это состояние, обращаемся к 
SnackbarHostState и его функции showSnackbar:</p>
<pre class="brush:kt;">scaffoldState.snackbarHostState.showSnackbar("Count: ${++count.value}")</pre>
<p>Во-вторых, функция <code>showSnackbar()</code> - это suspend-функция, которую необходимо вызывать в рамках корутины. Для создания контекста корутины 
применяется другая встроенная функция - <span class="b">rememberCoroutineScope()</span>. Далее с помощью этого контекста запускаем корутину и в ней 
вызывем функцию showSnackbar:</p>
<pre class="brush:kt;">
scope.launch {
	scaffoldState.snackbarHostState.showSnackbar("Count: ${++count.value}")
}
</pre>
<p>В самой функции showSnackbar увеличиваем значение в переменной <code>count</code>.</p>
<h4>actionLabel</h4>
<p>Теперь свяжем сообщение с некоторым действием. Для этого устанавим в функции <code>showSnackbar()</code> параметр <code>actionLabel</code> - фактически это просто текстовая метка, а не конкретное действие:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.*
import androidx.compose.material.icons.Icons
import androidx.compose.material.icons.filled.*
import androidx.compose.runtime.*
import androidx.compose.ui.unit.sp
import kotlinx.coroutines.launch

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val scope = rememberCoroutineScope()
            val scaffoldState = rememberScaffoldState()
            val count = remember{ mutableStateOf(0) }
            Scaffold(
                scaffoldState = scaffoldState,
                floatingActionButton = {
                    FloatingActionButton(
                        content = {Icon(Icons.Filled.Add, contentDescription = "Добавить")},
                        onClick = {
                            scope.launch {
                                val result = scaffoldState.snackbarHostState.showSnackbar("Count: ${count.value}", "Click")
                                when (result) {
                                    SnackbarResult.ActionPerformed -&gt; { count.value++; }
                                    SnackbarResult.Dismissed -&gt; { count.value--; }
                                }
                            }
                        }
                    )
                }
            ){
                Text("Count", fontSize = 28.sp)
            }
        }
    }
}
</pre>
<p>В данном случае текстовая метка в сообщении, которая приглашает к некоторому действию, имеет текст "Click" и отображается в правой части окна сообщения.</p>
<img src="./pics/4.43.png" alt="SnackbarHostState и showSnackbar в Scaffold в Jetpack Compose и Kotlin в Android" />
<p>Хотя сама эта метка ничего не делает, но теперь по нажатию на эту метку функция showSnackbar будет возвращать значение <code>SnackbarResult.ActionPerformed</code>. 
Если нажатия не было, и сообщение само по себе пропало, то возвращается значение <code>SnackbarResult.Dismissed</code></p>
<p>Получив результат функции, с помощью конструкции <code>when</code> мы можем проверить его значение и выполнить определенные действия. 
В данном случае для простоты при одном результате к переменной count добавляется единица, а при другом результате - единица вычитается.</p>
<p>Может сложиться впечатление, что для отображения всплывающего сообщения необходимо обрабатывать нажатия обязательно в floatingActionButton. 
Однако в реальности мы можем запускать отображение в любом месте Scaffold. Например, по нажатию на обычную кнопку:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.*
import androidx.compose.runtime.*
import androidx.compose.ui.unit.sp
import kotlinx.coroutines.launch

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val scope = rememberCoroutineScope()
            val scaffoldState = rememberScaffoldState()
            val count = remember{ mutableStateOf(0) }
            Scaffold(
                scaffoldState = scaffoldState
            ){
                Button(
                    onClick = {
                        scope.launch {
                            val result = scaffoldState.snackbarHostState.showSnackbar("Count: ${count.value}", "Click")
                            if(result==SnackbarResult.ActionPerformed) count.value++
                        }
                    }
                ){
                    Text("Click", fontSize = 28.sp)
                }
            }
        }
    }
}
</pre>
<h3>SnackbarHost</h3>
<p>Выше система сама определяла визуальные аспекты вслывающего сообщения, мы только задавали текстовую соотавляющую. Однако в реальности 
мы также можем настроить отображение сообщения. Для этого необходимо явным образом создать отображаемый объект Snackbar.</p>
<p>Кроме того, для установки объектов Snackbar, которые связаны со Scaffold компонент предоставляет параметр <code>snackbarHost</code>, который по умолчанию 
представляет объект <span class="b">SnackbarHost</span>. SnackbarHost фактически представляет хранилище объектов Snackbar и позволяет управлять их отображением. Его определение:</p>
<pre class="brush:kt;">@Composable
fun SnackbarHost(
    hostState: SnackbarHostState,
    modifier: Modifier = Modifier,
    snackbar: (SnackbarData) -&gt; Unit = { Snackbar(it) }
): @Composable Unit
</pre>
<ul>
<li><p><code>hostState</code>: представляет состояние SnackbarHost в виде объекта <span class="b">SnackbarHostState</span>, который управляет 
отображением сообщения</p></li>
<li><p><code>snackbar</code>: данные для Snackbar в виде объекта <span class="b">SnackbarData</span>, которыt будут отображаться</p></li>
</ul>
<p>Например, настроим цветовую гамму сообщения:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.*
import androidx.compose.runtime.*
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.unit.sp
import kotlinx.coroutines.launch

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val scope = rememberCoroutineScope()
            val scaffoldState = rememberScaffoldState()
            val count = remember{ mutableStateOf(0) }
            Scaffold(
                scaffoldState = scaffoldState,
                snackbarHost = {
                    SnackbarHost(it){ data -&gt;
                        Snackbar(
                            snackbarData = data,
                            backgroundColor = Color(0xFF004D40),
                            contentColor = Color(0xFFB2DFDB),
                            actionOnNewLine =  true,
                            actionColor = Color(0xFF009688)
                        )
                    }
                }
            ){
                Button(
                    onClick = {
                        scope.launch {
                            val result = scaffoldState.snackbarHostState.showSnackbar("Count: ${count.value}", "Click")
                            if(result==SnackbarResult.ActionPerformed) count.value++
                        }
                    }
                ){
                    Text("Click", fontSize = 28.sp)
                }
            }
        }
    }
}
</pre>
<img src="./pics/4.44.png" alt="SnackbarHost и Snackbar в Scaffold в Jetpack Compose и Kotlin в Android" />
<p>В данном случае в SnackbarHost в качестве параметра передается объект SnackbarHostState, который запускает отображение сообщения:</p>
<pre class="brush:kt;">
SnackbarHost(it){ data -&gt;
	Snackbar(
		snackbarData = data,
</pre>
<p>То есть в данном случае <code>it</code> - это объект SnackbarHostState. Далее в SnackbarHost определяется объект <code>Snackbar</code>, 
в который передается объект SnackbarData через параметр <code>data</code>. Этот объект будет содержать отображаемое сообщение и название метки действия. Но здесь 
мы их никак не изменям. Мы их будет отобажать, как они определены в функции <code>showSnackbar()</code>, изменяется только визуальная составляющая.</p>
<h3>Полная настройка Snackbar</h3>
<p>Выше у Snackbar был изменен применяемый цвет. Однако мы также можем полностью изменить его содержимое:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.padding
import androidx.compose.material.*
import androidx.compose.runtime.*
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import kotlinx.coroutines.launch

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val scope = rememberCoroutineScope()
            val scaffoldState = rememberScaffoldState()
            val count = remember{ mutableStateOf(0) }
            Scaffold(
                scaffoldState = scaffoldState,
                snackbarHost = {
                    SnackbarHost(it){ data -&gt;
                        Snackbar(
                            modifier = Modifier.padding(10.dp),
                            backgroundColor = Color(0xFF004D40),
                            contentColor = Color(0xFFB2DFDB),
                            action = {
                                TextButton(onClick={ data.performAction() }){
                                    Text("Add click", fontSize=22.sp, color=Color(0xFFB2DFDB))
                                }
                            }
                        ){
                            Text("Clicks count: ${count.value}", fontSize=26.sp)
                        }
                    }
                }
            ){
                Button(
                    onClick = {
                        scope.launch {
                            val result = scaffoldState.snackbarHostState.showSnackbar("")
                            if(result==SnackbarResult.ActionPerformed) count.value++
                        }
                    }
                ){
                    Text("Click", fontSize = 28.sp)
                }
            }
        }
    }
}
</pre>
<img src="./pics/4.45.png" alt="Настройка Snackbar в Scaffold в Jetpack Compose и Kotlin в Android" />
<p>В данном случае полностью переопределяем внутреннее содержимое и метку действия у Snackbar. При этом параметры message и actionLabel из функции <code>showSnackbar()</code> могут игнорироваться. 
Однако даже в этом случае передаваемый параметр SnackbarData может нам понадобиться. Так, в данном случае при нажатии на метку действия (которая в примере выше представлена 
компонентом TextButton) вызывается метод <code>performAction()</code></p>
<pre class="brush:kt;">
TextButton(onClick={ data.performAction() }){
	Text("Add click", fontSize=22.sp, color=Color(0xFFB2DFDB))
}
</pre>
<p>Благодаря этому система узнает, что результатом функции <code>showSnackbar()</code> является значение <code>SnackbarResult.ActionPerformed</code>.</p>
<h3>Snackbar вне Scaffold</h3>
<p>Может возникнуть вопрос, а можно ли использовать Snackbar вне Scaffold? В принципе можно, но в этом случае придется приложить дополнительные усилия, 
написать дополнительный код для позиционирования сообщения:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.*
import androidx.compose.runtime.*
import androidx.compose.ui.unit.sp
import kotlinx.coroutines.launch

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val scope = rememberCoroutineScope()
            val snackbarHostState = remember { mutableStateOf(SnackbarHostState()) }
            Button(
                onClick = {
                    scope.launch {
                        snackbarHostState.value.showSnackbar("Hello")
                    }
                }
            ) {
                Text("Click", fontSize = 28.sp)
            }
            SnackbarHost(snackbarHostState.value)
        }
    }
}
</pre>
<img src="./pics/4.46.png" alt="Snackbar вне Scaffold в Jetpack Compose и Kotlin в Android" />
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


<div class="nav"><p><a href="./4.11.php">Назад</a><a href="./">Содержание</a><a href="./4.13.php">Вперед</a></p></div></div>
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
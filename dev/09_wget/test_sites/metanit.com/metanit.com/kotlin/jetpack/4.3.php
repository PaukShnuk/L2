<!DOCTYPE html>
<html >
<head>
<title>Jetpack Compose | Ввод текста, TextField и OutlinedTextField</title>
<meta charset="utf-8" />
<meta name="description" content="Ввод текста, компоненты TextField и OutlinedTextField и их параметры в Jetpack Compose на языке программирования Kotlin, обработка ввода текста, настройка цвета, клавиатуры и текста ">
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
<h2>Ввод текста, TextField и OutlinedTextField</h2><div class="date">Последнее обновление: 04.10.2021</div>

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

<p>Для ввода текста в приложении предназначен компонент <span class="b">TextField</span>, который определяется с помощью следующей функции:</p>
<pre class="brush:kt;">
@Composable
fun TextField(
    value: String,
    onValueChange: (String) -&gt; Unit,
    modifier: Modifier = Modifier,
    enabled: Boolean = true,
    readOnly: Boolean = false,
    textStyle: TextStyle = LocalTextStyle.current,
    label: () -&gt; Unit = null,
    placeholder: () -&gt; Unit = null,
    leadingIcon: () -&gt; Unit = null,
    trailingIcon: () -&gt; Unit = null,
    isError: Boolean = false,
    visualTransformation: VisualTransformation = VisualTransformation.None,
    keyboardOptions: KeyboardOptions = KeyboardOptions.Default,
    keyboardActions: KeyboardActions = KeyboardActions(),
    singleLine: Boolean = false,
    maxLines: Int = Int.MAX_VALUE,
    interactionSource: MutableInteractionSource = remember { MutableInteractionSource() },
    shape: Shape = MaterialTheme.shapes.small.copy(bottomEnd = ZeroCornerSize, bottomStart = ZeroCornerSize),
    colors: TextFieldColors = TextFieldDefaults.textFieldColors()
): @Composable Unit
</pre>
<p>Параметры компонента:</p>
<ul>
<li><p><code>value</code>: представляет введенное в текстовое поле значение в виде строки, то есть объекта <span class="b">String</span></p></li>
<li><p><code>onValueChange</code>: функция обработки изменения введенного значения. Представляет функцию типа <span class="b">(String) -&gt; Unit</code></p></li>	
<li><p><code>modifier</code>: объект типа <span class="b">Modifier</span>, который задает модификаторы компонента</p></li>	
<li><p><code>enabled</code>: устанавливает, будет ли поле доступно для ввода. Представляет значение типа <span class="b">Boolean</span>. По умолчанию равно <code>true</code>, то есть поле доступно для ввода</p></li> 	
<li><p><code>readOnly</code>: устанавливает, будет ли поле доступно только для чтения. Представляет значение типа <span class="b">Boolean</span>. По 
умолчанию равно <code>false</code>, то есть поле доступно не только для чтения, но для изменения значения</p></li> 	
<li><p><code>textStyle</code>: объект типа <span class="b">TextStyle</span>, который устанавливает стиль текста. Значение по умолчанию - <code>LocalTextStyle.current</code></p></li> 
<li><p><code>label</code>: устанавливает дополнительную метку, которая отображается внутри поля. Для установки метки применяется функция типа 
<span class="b">() -&gt; Unit</span>. Значение по умолчанию - <code>null</code></p></li>
<li><p><code>placeholder</code>: плейсхолдер - временный текст, который отображается внутри поля. Для установки этого текста применяется функция типа 
<span class="b">() -&gt; Unit</span>. Значение по умолчанию - <code>null</code></p></li>
<li><p><code>leadingIcon</code>: устанавливает иконку, которая отображается перед текстом. Для установки применяется функция типа 
<span class="b">() -&gt; Unit</span>. Значение по умолчанию - <code>null</code></p></li>	
<li><p><code>trailingIcon</code>: устанавливает иконку, которая отображается после текста. Для установки применяется функция типа 
<span class="b">() -&gt; Unit</span>. Значение по умолчанию - <code>null</code></p></li>
<li><p><code>isError</code>: указывает, является ли текущее введенное в поле значение некорректным. Представляет значение типа <span class="b">Boolean</span>. По 
умолчанию равно <code>false</code>, то есть введенное значение корректно. Если равно <code>true</code>, то для поля 
устанавливаютс соответствующие индикаторы - метка, иконка, выделение цветом, которые поддчеркивают, что введенное значение некорректно.</p></li>
<li><p><code>visualTransformation</code>: объект типа <span class="b">VisualTransformation</span>, который задает визуальные трансформации для вводимого текста. Значение по умолчанию - <code>VisualTransformation.None </code></p></li>	
<li><p><code>keyboardOptions</code>: объект <span class="b">KeyboardOptions</span>, который задает параметры клавиатуры (например, ее тип). 
Значение по умолчанию - <code>KeyboardOptions.Default</code></p></li>
<li><p><code>keyboardActions</code>: <span class="b">KeyboardActions</span>, который задает набор функций, которые вызываются в ответ на некоторые действия пользователя. 
Значение по умолчанию - <code>KeyboardActions()</code></p></li>
<li><p><code>singleLine</code>: устанавливает, будет ли текст однострочным. По умолчанию равно <code>false</code>, то есть поле будет многосточным</p></li>
<li><p><code>maxLines</code>: задает максимальное количество строк в поле. По умолчанию равно <code>Int.MAX_VALUE</code></p></li>
<li><p><code>interactionSource</code>: объект <span class="b">MutableInteractionSource</span>, который задает поток взаимодействий для поля ввода. 
Значение по умолчанию - <code>remember { MutableInteractionSource() }</code></p></li>	
<li><p><code>shape</code>: представляет объект <span class="b">Shape</span>, который задает форму для поля ввода. 
Значение по умолчанию - <code>MaterialTheme.shapes.small.copy(bottomEnd = ZeroCornerSize, bottomStart = ZeroCornerSize)</code></p></li>		
<li><p><code>colors</code>: объект <span class="b">TextFieldColors</span>, который задает цвета для поля ввода. 
Значение по умолчанию - <code>TextFieldDefaults.textFieldColors()</code></p></li>	
</ul>
<p>Определение простейшего поля ввода:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.TextField

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            TextField(value = "Hello Work", onValueChange = {})
        }
    }
}
</pre>
<p>При создании поля необходимо задать как минимум два параметра - текущее значение (параметр value) и функцию обработки ввода текста (параметр onValueChange).</p>
<img src="./pics/4.12.png" alt="Поле ввода текста TextField в Jetpack Compose и Kotlin в Android" />
<h3>Обработка ввода текста</h3>
<p>Параметр <code>onValueChange</code> принимает функцию обработки ввода текста. Она в качестве параметра получает введенный текст в виде объекта <span class="b">String</span>:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.Column
import androidx.compose.material.Text
import androidx.compose.material.TextField
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val message = remember{mutableStateOf("")}

            Column {
                Text(message.value, fontSize = 28.sp)
                TextField(
                    value = message.value,
                    textStyle = TextStyle(fontSize=25.sp),
                    onValueChange = {newText -&gt; message.value = newText}
                )
            }
        }
    }
}
</pre>
<p>В данном случае мы определяем переменную <code>message</code>, которая будет хранить введенный текст. 
Однако это не просто строка. Она будет представлять объект типа <span class="b">MutableState&lt;String&gt;</span>, который создается функцией 
<span class="b">mutableStateOf()</span>. В дальнейшем мы подробнее разберем объект MutableState 
и функцию mutableStateOf, а пока достуточно знать, что в эту функцию передается собственно хранимое значение, которое затем можно получить 
с помощью свойства <code>value</code> объекта <code>MutableState&lt;T&gt;</code>. А функция <span class="b">remember</span> позволяет сохранить это значение.</p>
<p>В коде с помощью свойства <code>value</code> мы привязываем значение переменной к свойству text компонента Text и свойству value компонента TextField:</p>
<pre class="brush:kt;">
Text(message.value, fontSize = 28.sp)
TextField( value = message.value,
</pre>
<p>А в функции обработки ввода текста передаем в переменную введенный текст:</p>
<pre class="brush:kt;">onValueChange = {newText -&gt; message.value = newText}</pre>
<p>В данном случае функция задается с помощью лямбда-выражения, где параметр <code>newText</code> представляет введенный текст.</p>
<p>В итоге при ввода текста в поле изменится значение в переменной message и соответственно изменится текст компонента Text.</p>
<img src="./pics/4.13.png" alt="TextField и обработка ввода текста с помощью onValueChange в Jetpack Compose и Kotlin в Android" />
<h3>Тип клавиатуры</h3>
<p>В зависимости от задач приложения может потребоваться вводить разную информацию - когда буквы, когда числа и т.д. Для упрощения ввода 
Jetpack Compose предоставляет тип <span class="b">KeyboardType</span>, который позволяет настроить тип клавиатуры с помощью своих свойств:</p>
<ul>
<li><p><code>KeyboardType.Ascii</code>: предоставляет ввод символов ASCII</p></li>
<li><p><code>KeyboardType.Email</code>: для ввода электронного адреса</p></li>
<li><p><code>KeyboardType.Number</code>: для ввода цифр</p></li>
<li><p><code>KeyboardType.NumberPassword</code>: для ввода пароля из цифр</p></li>
<li><p><code>KeyboardType.Password</code>: для ввода пароля</p></li>
<li><p><code>KeyboardType.Phone</code>: для ввода номера телефона</p></li>
<li><p><code>KeyboardType.Text</code>: предоставляет стандартную клавиатуру</p></li>
<li><p><code>KeyboardType.Uri</code>: предоставляет клавиатуру для ввода URI</p></li>
</ul>
<p>С помощью параметра <code>keyboardOptions</code>, который представляет класс <span class="b">KeyboardOptions</span>, можно задать тип клавиатуры. 
Например, применим клавиатуру для ввода номера телефона:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.text.KeyboardOptions
import androidx.compose.material.TextField
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.text.input.KeyboardType
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val phone = remember{mutableStateOf("")}

            TextField(
                phone.value, 
                {phone.value = it}, 
                textStyle = TextStyle(fontSize =  28.sp),
                keyboardOptions = KeyboardOptions(keyboardType = KeyboardType.Phone)
            )
        }
    }
}
</pre>
<img src="./pics/4.14.png" alt="Тип клавиатуры для поля ввода текста TextField и тип KeyboardType в Jetpack Compose и Kotlin в Android" />
<h3>Установка иконок</h3>
<p>Параметр <code>leadingIcon</code> задает иконку перед текстом, а параметр <code>trailingIcon</code> - иконку после текста. В качестве значения оба параметра 
принимают функцию типа <code>() -&gt; Unit</code>. Определим иконки для поля ввода:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.R.attr
import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.Icon
import androidx.compose.material.TextField
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.unit.sp

import androidx.compose.material.icons.Icons
import androidx.compose.material.icons.filled.Check
import androidx.compose.material.icons.filled.Info

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val message = remember{mutableStateOf("")}

            TextField(
                message.value,
                {message.value = it},
                textStyle = TextStyle(fontSize =  28.sp),
                leadingIcon = { Icon(Icons.Filled.Check, contentDescription = "Проверено") },
                trailingIcon = { Icon(Icons.Filled.Info, contentDescription = "Дополнительная информация") }
            )
        }
    }
}
</pre>
<p>Для определения иконок применяется встроенный тип <code>androidx.compose.material.Icon</code>, в функцию которого передается значок иконки. 
В данном случае применяются встроенные иконки <code>Icons.Filled.Check</code> и <code>Icons.Filled.Info</code>. Второй параметр - contentDescription позволяет 
указать к иконке описание.</p>
<img src="./pics/4.15.png" alt="Иконки для поля ввода текста TextField и тип KeyboardType в Jetpack Compose и Kotlin в Android" />
<h3>Плейсхолдер</h3>
<p>Параметр <code>placeholder</code> устанавливает плейсхолдер или заменитель текста, отображаемый в поле ввода, в виде другого компонента:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.Text
import androidx.compose.material.TextField
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val message = remember{mutableStateOf("")}
            TextField(
                message.value,
                {message.value = it},
                textStyle = TextStyle(fontSize =  28.sp),
                placeholder = { Text("Hello Work!") }
            )
        }
    }
}
</pre>
<h3>Установка цветовой палитры поля ввода</h3>
<p>Параметр <code>colors</code>, который представляет объект интерфейса <span class="b">TextFieldColors</span>, задает цвета для поля ввода. По умолчанию он принимает компонент 
<code>TextFieldDefaults.textFieldColors()</code>, который устанавливает цвета для самых различных состояний:</p>
<pre class="brush:kt;">
@Composable
fun textFieldColors(
    textColor: Color = LocalContentColor.current.copy(LocalContentAlpha.current),
    disabledTextColor: Color = textColor.copy(ContentAlpha.disabled),
    backgroundColor: Color = MaterialTheme.colors.onSurface.copy(alpha = BackgroundOpacity),
    cursorColor: Color = MaterialTheme.colors.primary,
    errorCursorColor: Color = MaterialTheme.colors.error,
    focusedIndicatorColor: Color = MaterialTheme.colors.primary.copy(alpha = ContentAlpha.high),
    unfocusedIndicatorColor: Color = MaterialTheme.colors.onSurface.copy(alpha = UnfocusedIndicatorLineOpacity),
    disabledIndicatorColor: Color = unfocusedIndicatorColor.copy(alpha = ContentAlpha.disabled),
    errorIndicatorColor: Color = MaterialTheme.colors.error,
    leadingIconColor: Color = MaterialTheme.colors.onSurface.copy(alpha = IconOpacity),
    disabledLeadingIconColor: Color = leadingIconColor.copy(alpha = ContentAlpha.disabled),
    errorLeadingIconColor: Color = leadingIconColor,
    trailingIconColor: Color = MaterialTheme.colors.onSurface.copy(alpha = IconOpacity),
    disabledTrailingIconColor: Color = trailingIconColor.copy(alpha = ContentAlpha.disabled),
    errorTrailingIconColor: Color = MaterialTheme.colors.error,
    focusedLabelColor: Color = MaterialTheme.colors.primary.copy(alpha = ContentAlpha.high),
    unfocusedLabelColor: Color = MaterialTheme.colors.onSurface.copy(ContentAlpha.medium),
    disabledLabelColor: Color = unfocusedLabelColor.copy(ContentAlpha.disabled),
    errorLabelColor: Color = MaterialTheme.colors.error,
    placeholderColor: Color = MaterialTheme.colors.onSurface.copy(ContentAlpha.medium),
    disabledPlaceholderColor: Color = placeholderColor.copy(ContentAlpha.disabled)
): @Composable TextFieldColors
</pre>
<p>Мы можем использовать этот компонент для настройки цветовой гаммы поля ввода:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.TextField
import androidx.compose.material.TextFieldDefaults
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val message = remember{mutableStateOf("")}

            TextField(
                message.value,
                {message.value = it},
                textStyle = TextStyle(fontSize =  28.sp),
                colors = TextFieldDefaults.textFieldColors(textColor=Color.Red, backgroundColor = Color.LightGray)
            )
        }
    }
}
</pre>
<img src="./pics/4.16.png" alt="Настройка цветов для поля ввода текста TextField и тип TextFieldDefaults в Jetpack Compose и Kotlin в Android" />
<h3>OutlinedTextField</h3>
<p>Компонент <span class="b">OutlinedTextField</span> во многом похож на <code>TextField</code> за тем исключением, что он добавляет границу вокуг поля ввода. 
Его функция принимает следующие параметры:</p>
<pre class="brush:kt;">
@Composable
fun OutlinedTextField(
    value: String,
    onValueChange: (String) -&gt; Unit,
    modifier: Modifier = Modifier,
    enabled: Boolean = true,
    readOnly: Boolean = false,
    textStyle: TextStyle = LocalTextStyle.current,
    label: () -&gt; Unit = null,
    placeholder: () -&gt; Unit = null,
    leadingIcon: () -&gt; Unit = null,
    trailingIcon: () -&gt; Unit = null,
    isError: Boolean = false,
    visualTransformation: VisualTransformation = VisualTransformation.None,
    keyboardOptions: KeyboardOptions = KeyboardOptions.Default,
    keyboardActions: KeyboardActions = KeyboardActions.Default,
    singleLine: Boolean = false,
    maxLines: Int = Int.MAX_VALUE,
    interactionSource: MutableInteractionSource = remember { MutableInteractionSource() },
    shape: Shape = MaterialTheme.shapes.small,
    colors: TextFieldColors = TextFieldDefaults.outlinedTextFieldColors()
): @Composable Unit
</pre>
<p>Простейшее определение компонента OutlinedTextField:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.OutlinedTextField
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val message = remember{mutableStateOf("")}

            OutlinedTextField(
                message.value,
                {message.value = it},
                textStyle = TextStyle(fontSize =  30.sp),
            )
        }
    }
}
</pre>
<img src="./pics/4.17.png" alt="Поле ввода текста OutlinedTextField в Jetpack Compose и Kotlin в Android" />
<p>В функции компонента OutlinedTextField мы видим, что в отличие от TextField, меняется стандартное значение для последнего параметра - <code>colors</code>, который устанавливает цвета. 
Теперь он по умолчанию равен компоненту <code>TextFieldDefaults.outlinedTextFieldColors()</code>:</p>
<pre class="brush:kt;">
@Composable
fun outlinedTextFieldColors(
    textColor: Color = LocalContentColor.current.copy(LocalContentAlpha.current),
    disabledTextColor: Color = textColor.copy(ContentAlpha.disabled),
    backgroundColor: Color = Color.Transparent,
    cursorColor: Color = MaterialTheme.colors.primary,
    errorCursorColor: Color = MaterialTheme.colors.error,
    focusedBorderColor: Color = MaterialTheme.colors.primary.copy(alpha = ContentAlpha.high),
    unfocusedBorderColor: Color = MaterialTheme.colors.onSurface.copy(alpha = ContentAlpha.disabled),
    disabledBorderColor: Color = unfocusedBorderColor.copy(alpha = ContentAlpha.disabled),
    errorBorderColor: Color = MaterialTheme.colors.error,
    leadingIconColor: Color = MaterialTheme.colors.onSurface.copy(alpha = IconOpacity),
    disabledLeadingIconColor: Color = leadingIconColor.copy(alpha = ContentAlpha.disabled),
    errorLeadingIconColor: Color = leadingIconColor,
    trailingIconColor: Color = MaterialTheme.colors.onSurface.copy(alpha = IconOpacity),
    disabledTrailingIconColor: Color = trailingIconColor.copy(alpha = ContentAlpha.disabled),
    errorTrailingIconColor: Color = MaterialTheme.colors.error,
    focusedLabelColor: Color = MaterialTheme.colors.primary.copy(alpha = ContentAlpha.high),
    unfocusedLabelColor: Color = MaterialTheme.colors.onSurface.copy(ContentAlpha.medium),
    disabledLabelColor: Color = unfocusedLabelColor.copy(ContentAlpha.disabled),
    errorLabelColor: Color = MaterialTheme.colors.error,
    placeholderColor: Color = MaterialTheme.colors.onSurface.copy(ContentAlpha.medium),
    disabledPlaceholderColor: Color = placeholderColor.copy(ContentAlpha.disabled)
): @Composable TextFieldColors
</pre>
<p>Здесь мы можем найти такие параметры как <code>focusedBorderColor</code>, <code>unfocusedBorderColor</code>, <code>disabledBorderColor</code> 
и <code>errorBorderColor</code>, который позволяют установить цвет границы для различных состояний поля ввода. Например:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.OutlinedTextField
import androidx.compose.material.TextFieldDefaults
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val message = remember{mutableStateOf("")}

            OutlinedTextField(
                message.value,
                {message.value = it},
                textStyle = TextStyle(fontSize =  30.sp),
                colors = TextFieldDefaults.outlinedTextFieldColors(
                    focusedBorderColor= Color.Green, // цвет при получении фокуса
                    unfocusedBorderColor = Color.LightGray  // цвет при отсутствии фокуса
                )
            )
        }
    }
}
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


<div class="nav"><p><a href="./4.2.php">Назад</a><a href="./">Содержание</a><a href="./4.7.php">Вперед</a></p></div></div>
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
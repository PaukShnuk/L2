<!DOCTYPE html>
<html >
<head>
<title>Jetpack Compose | Ресурсы строк</title>
<meta charset="utf-8" />
<meta name="description" content="Ресурсы строк в Jetpack Compose на языке программирования Kotlin в Android, добавление ресурсов строк, функция stringResource и форматирование строки">
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
<h1>Ресурсы в Jetpack Compose</h1><h2>Ресурсы строк</h2><div class="date">Последнее обновление: 25.10.2021</div>

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

<p>Кроме файлов кода на языке Kotlin проект может включать дополнительные файлы, которые используются в приложении, например, файлы изображений, определения иконок, 
файлы xml и так далее. Подобные файлы называются <span class="b">ресурсами</span>. Все ресурсы находятся в проекте в каталоге 
<span class="b">res</span>.</p>
<p>Одним из наиболее применяемых типов ресурсов являются ресурсы строк. Они используются при выведении названия приложения, 
различного текста, например, текста кнопок и т.д. Например, нам нужно вывести в различных местах приложения один и тот же текст. Вместо 
того, чтобы по несколько раз определять его в коде Kotlin, мы можем определить его один раз в виде строкового ресурса и использовать в любом месте приложения.</p>
<p>По умолчанию строковые ресурсы хранятся в проекте в каталоге <span class="b">res/values</span>. При создании проекта 
в этот каталог по умолчанию добавляется файл строковых ресурсов <span class="b">strings.xml</span>.</p>
<img src="./pics/7.1.png" alt="Ресурсы строк в Jetpack Compose и Android" />
<p>Если мы откроем файл, то мы найдем в нем строки наподобие следующих:</p>
<pre class="brush:kt;">
&lt;resources&gt;
    &lt;string name="app_name"&gt;helloapp&lt;/string&gt;
&lt;/resources&gt;
</pre>
<p>Каждый отдельный строковый ресурс определяется с помощью элемента <span class="b">string</span>, а его атрибут <span class="b">name</span> содержит название ресурса. 
Так, в самом простом виде этот файл определяет один ресурс "app_name", который устанавливает название приложения и который в моем случае 
имеет значение "helloapp" (по умолчанию значение этого ресурса соответствует названию проекта). Но естественно мы можем определить любые строковые ресурсы.</p>
<p>Затем в приложении в файлах кода мы можем ссылаться на эти ресурсы через их идентификатор, который имеет следующий вид:</p>
<pre class="brush:kt;">R.string.название_ресурса</pre>
<p>Например, для обращения к определенному по умолчанию строковому ресурсу app_name применяется идентификатор</p>
<pre class="brush:kt;">R.string.app_name</pre>
<p>Чтобы получить строковый ресурс в коде Kotlin, применяется встроенная функция <span class="b">androidx.compose.ui.res.stringResource()</span>, в 
которую передается идентификатор ресурса и которая возвращает строку в виде объекта String. Например, получим в коде ресурс app_name:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.Text
import androidx.compose.ui.res.stringResource
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Text(
                text = stringResource(R.string.app_name),
                fontSize = 28.sp
            )
        }
    }
}
</pre>
<p>В данном случае параметру text компонента Text передается строка из строкового ресурса app_name:</p>
<img src="./pics/7.2.png" alt="Функция stringResource в Kotlin и Jetpack Compose и Android" />
<p>Подобным образом при необходимоси мы можем определять и свои ресурсы. Например, изменим файл <span class="b">res/values/strings.xml</span> 
следующим образом:</p>
<pre class="brush:kt;">
&lt;resources&gt;
    &lt;string name="app_name"&gt;helloapp&lt;/string&gt;
    &lt;string name="message"&gt;Hello METANIT.COM&lt;/string&gt;
&lt;/resources&gt;
</pre>
<p>Здесь добавлен строковый ресурс "message", который имеет значение "Hello METANIT.COM"</p>
<p>Используем этот строковый ресурс в коде:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.material.Text
import androidx.compose.ui.res.stringResource
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Text(
                text = stringResource(R.string.message),
                fontSize = 28.sp
            )
        }
    }
}
</pre>
<img src="./pics/7.3.png" alt="Получение ресурса строк в stringResource в Kotlin и Jetpack Compose и Android" />
<h3>Добавление файла ресурсов строк</h3>
<p>Хотя по умолчанию для ресурсов строк применяется файл <span class="b">strings.xml</span>, 
но можно добавлять дополнительные файлы ресурсов в каталог проекта <span class="b">res/values</span>. При этом достаточно соблюдать структуру 
файла: он должен иметь корневой узел <span class="b">&lt;resources&gt;</span> и иметь один или несколько элементов <span class="b">&lt;string&gt;</span>.</p>
<p>Так, нажмем на папку <span class="b">res/values</span> правой кнопкой мыши и в появившемся списке выберем пункт <span class="b">New -&gt; Value Resource File</span>:</p>
<img src="./pics/7.4.png" alt="Добавление ресурса строк в Jetpack Compose и Android Studio" />
<p>После этого нам будет предложено определить для файла имя:</p>
<img src="./pics/7.5.png" alt="Add string resource in Jetpack Compose and Android Studio" />
<p>Назовем, к примеру, <span class="b">headers.xml</span> (название файла произвольное), а для всех остальных полей оставим значения по 
умолчанию. И в папку <span class="b">res/values</span> будет добавлен новый файл <span class="b">headers.xml</span>. Определим в нем пару ресурсов:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;resources&gt;
    &lt;string name="welcome"&gt;Добро пожаловать&lt;/string&gt;
    &lt;string name="click_button"&gt;Отправить&lt;/string&gt;
&lt;/resources&gt;
</pre>
<p>И после этого мы также сможем использовать эти ресурсы в коде Kotlin, например:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.Column
import androidx.compose.material.Button
import androidx.compose.material.Text
import androidx.compose.ui.res.stringResource
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Column{
                Text(
                    text = stringResource(R.string.welcome),
                    fontSize = 28.sp
                )
                Button(onClick={}){
                    Text(
                        text = stringResource(R.string.click_button),
                        fontSize = 22.sp
                    )
                }
            }
        }
    }
}
</pre>
<h3>Форматирование строк</h3>
<p>Функция <span class="b">stringResource()</span> позволяет применять к ресурсам строк форматирование. Преимуществом форматирования является то, что мы можем определить общий щаблон и затем подставлять в него необходимые значения. Например, изменим файл 
<span class="b">strings.xml</span>:</p>
<pre class="brush:xml;">
&lt;resources&gt;
    &lt;string name="app_name"&gt;helloapp&lt;/string&gt;
    &lt;string name="user_data"&gt;Имя: %1$s. Возраст: %2$d. Компания: %3$s&lt;/string&gt;
&lt;/resources&gt;
</pre>
<p>Здесь ресурс <code>user_data</code> представляет строку с форматированием. Так, она содержит такие символы как %1$s, %2$d и %3$ds. 
Что они означают? %1$s указывает, что это первый аргумент, а символ "s" говорит, что этот аргумент представляет строку. 
%2$d представляет второй аргумент, а символ "d" в конце указывает, что это будет целое число. Аналогично %3$s указывает, что это 
третий аргумент, который представляет строку.</p>
<p>Получим ресурс в коде Kotlin:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.Column
import androidx.compose.material.Text
import androidx.compose.ui.res.stringResource
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Column{
                Text(
                    text = stringResource(R.string.user_data, "Tom", 37, "JetBrains"),
                    fontSize = 28.sp
                )
                Text(
                    text = stringResource(R.string.user_data, "Bob", 41, "Google"),
                    fontSize = 28.sp
                )
            }
        }
    }
}
</pre>
<img src="./pics/7.6.png" alt="Форматирование строк в функции stringResource в Kotlin в Jetpack Compose" />
<p>Вызов функции <code>stringResource(R.string.user_data, "Tom", 37, "JetBrains")</code> получает ресурс "user_data" и в 
качестве последующих параметров передает в строку вставляемые значения. Так, вместо первого аргумента-строки в user_data вставляется второй аргумент функции - 
строка "Tom", вместо второго аргумента-числа в user_data вставляется число 37, а вместо третьего аргумента в user_data передается строка "JetBrains".</p>
<h3>Ресурсы Plurals</h3>
<p>Ресурсы <span class="b">Plurals</span> представляют еще один вид набора строк, в которым применяется форматирование. Он предназначен для описания количества элементов. 
Для чего это надо? К примеру, возьмем существительное: нередко оно изменяет окончание в зависимости от числительного, которое с ним употребляется: 1 цветок, 2 цветка, 7 цветков. Для подобных случаев и используется ресурс <span class="b">plurals</span>.</p>
<p>Посмотрим на примере. Добавим в папку <span class="b">res/values</span> новый ресурс <span class="b">flowers.xml</span>:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;resources&gt;
    &lt;plurals name="flowers"&gt;
        &lt;item quantity="one"&gt;%d цветок&lt;/item&gt;
        &lt;item quantity="few"&gt;%d цветка&lt;/item&gt;
        &lt;item quantity="many"&gt;%d цветков&lt;/item&gt;
    &lt;/plurals&gt;
&lt;/resources&gt;
</pre>
<p>Для задания ресурса используется элемент <span class="b">&lt;plurals&gt;</span>. Его атрибут <code>name</code> хранит название ресурса.</p>
<p>Сами наборы строк вводятся дочерними элементами <code>&lt;item&gt;</code>. Этот элемент имеет атрибут <code>quantity</code>, 
который имеет значение, указывающее, когда эта строка используется. Данный атрибут может принимать следующие значения:</p>
<ul>
<li><p><span class="b">zero</span>: строка для количества в размере 0</p></li>
<li><p><span class="b">one</span>: строка для количества в размере 1 (для русского языка - для задания всех количеств, оканчивающихся на 1, кроме 11)</p></li>
<li><p><span class="b">two</span>: строка для количества в размере 2</p></li>
<li><p><span class="b">few</span>: строка для небольшого количества</p></li>
<li><p><span class="b">many</span>: строка для больших количеств</p></li>
<li><p><span class="b">other</span>: все остальные случаи</p></li>
</ul>
<p>Причем в данном случае многое зависит от конкретного языка. А система сама позволяет определить, какое значение брать для того или иного числа.</p>
<p>Получим и используем этот ресурс в коде Kotlin:</p>
<pre class="brush:kt;">
package com.example.helloapp

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.Column
import androidx.compose.material.Text
import androidx.compose.ui.platform.LocalContext
import androidx.compose.ui.unit.sp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            val resources = LocalContext.current.resources
            Column{
                Text(
                    text = resources.getQuantityString(R.plurals.flowers, 21, 21),
                    fontSize = 22.sp
                )
                Text(
                    text = resources.getQuantityString(R.plurals.flowers, 7, 7),
                    fontSize = 22.sp
                )
            }
        }
    }
}
</pre>
<p>На данный момент Jetpack Compose не поддерживает напрямую получение подобных ресурсов. Поэтому для их извлечения 
вначале необходимо получить текущий контекст через свойство <code>LocalContext.current</code> и затем обратиться к его свойству <code>resource</code>, которое представляет 
класс Resources и ассоциирован со всеми ресурсами приложения.</p>
<p>Далее с помощью метода <span class="b">getQuantityString</span> класса Resources получаем значение ресурса. Первым параметром передаем идентификатор ресурса. 
Вторым параметром идет значение. для которого нужно найти нужную строку. Третий параметр представляет собой значение, которое будет 
вставляться на место плейсхолдера <span class="b">%d</span>. То есть мы получаем строку для числа 21.</p>
<img src="./pics/7.7.png" alt="Определение ресурса plurals в Jetpack Compose и Kotlin в Android" />
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


<div class="nav"><p><a href="./4.18.php">Назад</a><a href="./">Содержание</a><a href="./7.2.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 6.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 6.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
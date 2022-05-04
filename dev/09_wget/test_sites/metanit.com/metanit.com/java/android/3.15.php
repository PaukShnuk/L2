<!DOCTYPE html>
<html >
<head>
<title>Java и Android | Цепочки элементов в ConstraintLayout</title>
<meta charset="utf-8" />
<meta name="description" content="Цепочки chains из виджетов в ConstraintLayout в Android, расположение элементов в ряд, chainsStyle, spread и spread_inside, layout_constraintVertical_weight и layout_constraintHorizontal_weight">
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
<h2>Цепочки элементов в ConstraintLayout</h2><div class="date">Последнее обновление: 14.10.2021</div>

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

<p>ConstraintLayout позволяет организовать расположение элементов в ряд по горизонтали или по вертикали или то, что в Android называется 
<span class="b">chains</span> или цепочки. Мы можем по цепочке установить позиционирование одного элемента относительно другого и 
таким обазом организовать ряд элементов.</p>
<h3>Горизонтальная цепочка элементов</h3>
<p>Например, ряд элементов по горизонтали:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;androidx.constraintlayout.widget.ConstraintLayout 
	xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".MainActivity"&gt;

    &lt;TextView
        android:id="@+id/textView1"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:background="#efefef"
        android:text="First"
        android:textSize="30sp"
        app:layout_constraintRight_toLeftOf="@id/textView2"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;

    &lt;TextView
        android:id="@+id/textView2"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:background="#e0e0e0"
        android:text="Second"
        android:textSize="30sp"
        app:layout_constraintLeft_toRightOf="@id/textView1"
        app:layout_constraintRight_toLeftOf="@id/textView3"
        app:layout_constraintTop_toTopOf="parent" /&gt;

    &lt;TextView
        android:id="@+id/textView3"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:background="#efefef"
        android:text="Third"
        android:textSize="30sp"
        app:layout_constraintLeft_toRightOf="@id/textView2"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;

&lt;/androidx.constraintlayout.widget.ConstraintLayout&gt;
</pre>
<p>В итоге элементы цепочки равномерно будут растянуты по всей ширине контейнера:</p>
<img src="./pics/constraintlayout10.png" alt="Horisontal chains in ConstraintLayout in Android" />
<p>Горизонтальная цепочка элементов достигается за счет двух факторов:</p>
<ul>
<li><p>Первый элемент выравнивается относительно левой границы контейнера (<code>app:layout_constraintLeft_toLeftOf="parent"</code>), 
последний элемент выравнивается относительно правой границы контейнера (<code>app:layout_constraintRight_toRightOf="parent"</code>).</p></li>
<li><p>Благодаря установке атрибутов <code>app:layout_constraintLeft_toRightOf</code> и <code>app:layout_constraintRight_toLeftOf</code> 
располагаем один элемент справа или слева от другого.</p></li>
</ul>
<p>Кроме того, ConstraintLayout позволяет настроить положение элементов внутри цепочки. Для этого применяется атрибут 
<span class="b">layout_constraintHorizontal_chainStyle</span>, который может принимать следующие значения:</p>
<ul>
<li><p><span class="b">spread</span>: значение по умолчанию, при котором элементы цепочки равномерно растягиваются по всей длине цепочки, как в примере выше</p></li>
<li><p><span class="b">spread_inside</span>: первый и последний элемент цепочки примыкают к границами контейнера</p></li>
<li><p><span class="b">packed</span>: элементы цепочки располагаются вплотную друг к другу.</p></li>
</ul>
<p>Например, применим значение <span class="b">spread_inside</span>:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;androidx.constraintlayout.widget.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".MainActivity"&gt;

    &lt;TextView
        android:id="@+id/textView1"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:background="#efefef"
        android:text="First"
        android:textSize="30sp"

        app:layout_constraintHorizontal_chainStyle="spread_inside"

        app:layout_constraintRight_toLeftOf="@id/textView2"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;

    &lt;TextView
        android:id="@+id/textView2"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:background="#e0e0e0"
        android:text="Second"
        android:textSize="30sp"
        app:layout_constraintLeft_toRightOf="@id/textView1"
        app:layout_constraintRight_toLeftOf="@id/textView3"
        app:layout_constraintTop_toTopOf="parent" /&gt;

    &lt;TextView
        android:id="@+id/textView3"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:background="#efefef"
        android:text="Third"
        android:textSize="30sp"
        app:layout_constraintLeft_toRightOf="@id/textView2"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;

&lt;/androidx.constraintlayout.widget.ConstraintLayout&gt;
</pre>
<p>Причем в данном случае достаточно установить атрибут у первого элемента цепочки:</p>
<img src="./pics/constraintlayout11.png" alt="Horisontal chains spread_inside in ConstraintLayout in Android" />
<p>Значение <span class="b">packed</span>:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;androidx.constraintlayout.widget.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".MainActivity"&gt;

    &lt;TextView
        android:id="@+id/textView1"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:background="#efefef"
        android:text="First"
        android:textSize="30sp"

        app:layout_constraintHorizontal_chainStyle="packed"

        app:layout_constraintRight_toLeftOf="@id/textView2"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;

    &lt;TextView
        android:id="@+id/textView2"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:background="#e0e0e0"
        android:text="Second"
        android:textSize="30sp"
        app:layout_constraintLeft_toRightOf="@id/textView1"
        app:layout_constraintRight_toLeftOf="@id/textView3"
        app:layout_constraintTop_toTopOf="parent" /&gt;

    &lt;TextView
        android:id="@+id/textView3"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:background="#efefef"
        android:text="Third"
        android:textSize="30sp"
        app:layout_constraintLeft_toRightOf="@id/textView2"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;

&lt;/androidx.constraintlayout.widget.ConstraintLayout&gt;
</pre>
<img src="./pics/constraintlayout12.png" alt="Horisontal chains packed in ConstraintLayout in Android" />
<h4>Вес элемента</h4>
<p>Стоит отметить, что выше у элементов устанавливалась ширина, необходимая для их содержимого. Но мы могли бы установить и нулевую ширину, тогда 
элементы равномерно бы распределялись по всей цепочки без образования промежутков между ними.</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;androidx.constraintlayout.widget.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".MainActivity"&gt;

    &lt;TextView
        android:id="@+id/textView1"
        android:layout_width="0dp"
        android:layout_height="wrap_content"
        android:background="#efefef"
        android:text="First"
        android:textSize="30sp"
        app:layout_constraintRight_toLeftOf="@id/textView2"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;

    &lt;TextView
        android:id="@+id/textView2"
        android:layout_width="0dp"
        android:layout_height="wrap_content"
        android:background="#e0e0e0"
        android:text="Second"
        android:textSize="30sp"
        app:layout_constraintLeft_toRightOf="@id/textView1"
        app:layout_constraintRight_toLeftOf="@id/textView3"
        app:layout_constraintTop_toTopOf="parent" /&gt;

    &lt;TextView
        android:id="@+id/textView3"
        android:layout_width="0dp"
        android:layout_height="wrap_content"
        android:background="#efefef"
        android:text="Third"
        android:textSize="30sp"
        app:layout_constraintLeft_toRightOf="@id/textView2"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;

&lt;/androidx.constraintlayout.widget.ConstraintLayout&gt;
</pre>
<img src="./pics/constraintlayout13.png" alt="Горизонтальный ряд виджетов в ConstraintLayout в Android" />
<p>В этом случае значение атрибута <code>app:layout_constraintHorizontal_chainStyle</code> не играет никакой роли, так как все элементы итак растягиваются по всей цепочке.</p>
<p>Однако такое поведение может не устраивать, например, мы хотим, чтобы один элемент был два раза больше другого. И в этом случае мы можем с помощью 
атрибута <span class="b">layout_constraintHorizontal_weight</span>. Однако следует учитывать, что при применении весов у элементов, они должны иметь нулевую ширину:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;androidx.constraintlayout.widget.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".MainActivity"&gt;

    &lt;TextView
        android:id="@+id/textView1"
        android:layout_width="0dp"
        android:layout_height="wrap_content"
        android:background="#efefef"
        android:text="First"
        android:textSize="30sp"
        
        app:layout_constraintHorizontal_weight="1"
        
        app:layout_constraintRight_toLeftOf="@id/textView2"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;

    &lt;TextView
        android:id="@+id/textView2"
        android:layout_width="0dp"
        android:layout_height="wrap_content"
        android:background="#e0e0e0"
        android:text="Second"
        android:textSize="30sp"
        
        app:layout_constraintHorizontal_weight="2"
        
        app:layout_constraintLeft_toRightOf="@id/textView1"
        app:layout_constraintRight_toLeftOf="@id/textView3"
        app:layout_constraintTop_toTopOf="parent" /&gt;

    &lt;TextView
        android:id="@+id/textView3"
        android:layout_width="0dp"
        android:layout_height="wrap_content"
        android:background="#efefef"
        android:text="Third"
        android:textSize="30sp"

        app:layout_constraintHorizontal_weight="1"
        
        app:layout_constraintLeft_toRightOf="@id/textView2"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;

&lt;/androidx.constraintlayout.widget.ConstraintLayout&gt;
</pre>
<p>В качестве значения атрибут <code>layout_constraintHorizontal_weight</code> принимает число - вес элемента. Так, в данном случае вес первого элемента - 1, вес второго - 2, 
а вес третьего - 1. Поэтому вся ширина контейнера будет условно поделена на 1 + 2 + 1 = 4 частей, из которых по одной части займут первый и третий элемент, 
а второй займет 2 части, то есть второй элемент будет в два раза больше первого и третьего элемента.</p>
<img src="./pics/constraintlayout14.png" alt="Вес виджетов и layout_constraintHorizontal_weight в ConstraintLayout в Android" />
<p>В принципе мы можем оставить элементы и с шириной "wrap_content" или конкретным значением, отличным от "0dp", просто в этом случае они не будут участвовать 
в распределении пространства контейнера и вес у такого элемента роли играть не будет.</p>
<h3>Вертикальная цепочка</h3>
<p>Для образования вертикальной цепочки также должно соблюдаться два условия:</p>
<ul>
<li><p>Первый элемент выравнивается относительно верхней границы контейнера (<code>app:layout_constraintTop_toTopOf="parent"</code>), 
последний элемент выравнивается относительно нижней границы контейнера (<code>app:layout_constraintBottom_toBottomOf="parent"</code>).</p></li>
<li><p>Благодаря установке атрибутов <code>app:layout_constraintBottom_toTopOf</code> и <code>app:layout_constraintBottom_toTopOf</code> 
располагаем один элемент поверх другого.</p></li>
</ul>
<p>Чтобы настроить положение элементов внутри цепочки, применяется атрибут <span class="b">layout_constraintVertical_chainStyle</span>, который может принимать следующие значения:</p>
<ul>
<li><p><span class="b">spread</span>: значение по умолчанию, при котором элементы цепочки равномерно растягиваются по всей длине цепочки</p></li>
<li><p><span class="b">spread_inside</span>: первый и последний элемент цепочки примыкают к границами контейнера</p></li>
<li><p><span class="b">packed</span>: элементы цепочки прилегают вплотную друг к другу.</p></li>
</ul>
<p>Например, вертикальная цепочка со значением по умолчанию - <span class="b">spread</span>:</p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;androidx.constraintlayout.widget.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".MainActivity"&gt;

    &lt;TextView
        android:id="@+id/textView1"
        android:layout_width="200dp"
        android:layout_height="wrap_content"
        android:background="#efefef"
        android:text="First"
        android:textSize="30sp"
        app:layout_constraintBottom_toTopOf="@id/textView2"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;

    &lt;TextView
        android:id="@+id/textView2"
        android:layout_width="200dp"
        android:layout_height="wrap_content"
        android:background="#e0e0e0"
        android:text="Second"
        android:textSize="30sp"
        app:layout_constraintTop_toBottomOf="@id/textView1"
        app:layout_constraintBottom_toTopOf="@id/textView3"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent" /&gt;

    &lt;TextView
        android:id="@+id/textView3"
        android:layout_width="200dp"
        android:layout_height="wrap_content"
        android:background="#efefef"
        android:text="Third"
        android:textSize="30sp"

        app:layout_constraintTop_toBottomOf="@id/textView2"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintBottom_toBottomOf="parent" /&gt;

&lt;/androidx.constraintlayout.widget.ConstraintLayout&gt;
</pre>
<img src="./pics/constraintlayout15.png" alt="Вертикальный ряд элементов в ConstraintLayout в Android" />
<p>Также достаточно применить к первому элементу цепочки атрибут <code>layout_constraintVertical_chainStyle</code>, чтобы изменить положение элементов:</p>
<pre class="brush:xml;">
&lt;TextView
        android:id="@+id/textView1"
        android:layout_width="200dp"
        android:layout_height="wrap_content"
        android:background="#efefef"
        android:text="First"
        android:textSize="30sp"
		
		app:layout_constraintVertical_chainStyle="spread_inside"
		
        app:layout_constraintBottom_toTopOf="@id/textView2"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;
</pre>
<img src="./pics/constraintlayout16.png" alt="layout_constraintVertical_chainStyle in ConstraintLayout in Android" />
<p>И как при горизонтальной ориентации в вертикальной цепочки можно использовать вес элементов с помощью атрибута <span class="b">layout_constraintVertical_weight</span>. 
Для установки веса у элемента в качестве высоты должно быть установлено значение <span class="b">0dp</span></p>
<pre class="brush:xml;">
&lt;?xml version="1.0" encoding="utf-8"?&gt;
&lt;androidx.constraintlayout.widget.ConstraintLayout xmlns:android="http://schemas.android.com/apk/res/android"
    xmlns:app="http://schemas.android.com/apk/res-auto"
    xmlns:tools="http://schemas.android.com/tools"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    tools:context=".MainActivity"&gt;

    &lt;TextView
        android:id="@+id/textView1"
        android:layout_width="200dp"
        android:layout_height="0dp"
        android:background="#efefef"
        android:text="First"
        android:textSize="30sp"
        app:layout_constraintVertical_weight="1"
        app:layout_constraintBottom_toTopOf="@id/textView2"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintTop_toTopOf="parent" /&gt;

    &lt;TextView
        android:id="@+id/textView2"
        android:layout_width="200dp"
        android:layout_height="0dp"
        android:background="#e0e0e0"
        android:text="Second"
        android:textSize="30sp"
        app:layout_constraintVertical_weight="3"
        app:layout_constraintTop_toBottomOf="@id/textView1"
        app:layout_constraintBottom_toTopOf="@id/textView3"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent" /&gt;

    &lt;TextView
        android:id="@+id/textView3"
        android:layout_width="200dp"
        android:layout_height="0dp"
        android:background="#efefef"
        android:text="Third"
        android:textSize="30sp"
        app:layout_constraintVertical_weight="2"
        app:layout_constraintTop_toBottomOf="@id/textView2"
        app:layout_constraintLeft_toLeftOf="parent"
        app:layout_constraintRight_toRightOf="parent"
        app:layout_constraintBottom_toBottomOf="parent" /&gt;

&lt;/androidx.constraintlayout.widget.ConstraintLayout&gt;
</pre>
<p>Совокупный вес элементов в данном случае 1 + 3 + 2 = 6. Поэтому вся высота контейнера будет делиться на 6 частей, из которых первый элемент займет 1 часть, 
второй - 3 части и третий - 2 части в соответствии со своим весом.</p>
<img src="./pics/constraintlayout17.png" alt="layout_constraintVertical_weight in ConstraintLayout in Android" />

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


<div class="nav"><p><a href="./3.7.php">Назад</a><a href="./">Содержание</a><a href="./3.16.php">Вперед</a></p></div></div>
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
		<li class="closed"><span class="folder">Глава 1. Начало работы с Android</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/1.1.php">Введение. Установка Android Studio и Android SDK</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/1.2.php">Первый проект в Android Studio</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/1.3.php">Создание графического интерфейса</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. Основы создания интерфейса</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/3.1.php">Создание интерфейса в коде java</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.8.php">Определение интерфейса в файле XML. Файлы layout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.13.php">Определение размеров</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.9.php">Ширина и высота элементов</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.10.php">Внутренние и внешние отступы</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.8.php">ConstraintLayout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.7.php">Размеры элементов в ConstraintLayout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.15.php">Цепочки элементов в ConstraintLayout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.16.php">Программное создание ConstraintLayout и позиционионирование</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.2.php">LinearLayout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.3.php">RelativeLayout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.4.php">TableLayout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.5.php">FrameLayout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.6.php">GridLayout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.11.php">ScrollView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.14.php">Вложенные layout</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/3.12.php">Gravity и позиционирование внутри элемента</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 3. Основные элементы управления</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/4.1.php">TextView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.8.php">EditText</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.9.php">Button</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.13.php">Приложение Калькулятор</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.10.php">Всплывающие окна. Toast</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.14.php">Snackbar</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.3.php">Checkbox</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.11.php">ToggleButton</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.12.php">RadioButton</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.4.php">DatePicker</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.16.php">TimePicker</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.7.php">Ползунок SeekBar</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 4. Ресурсы</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/2.4.php">Работа с ресурсами</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.5.php">Ресурсы строк</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.6.php">Ресурсы dimension</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.7.php">Ресурсы Color и установка цвета</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 5. Activity</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/2.1.php">Activity и жизненный цикл приложения</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.3.php">Файл манифеста AndroidManifest.xml</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.2.php">Введение в Intent. Запуск Activity</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.12.php">Передача данных между Activity. Сериализация</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.13.php">Parcelable</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.11.php">Получение результата из Activity</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/2.10.php">Взаимодействие между Activity</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 6. Работа с изображениями</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/2.9.php">Ресурсы изображений</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.5.php">ImageView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.15.php">Изображения из папки assets</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 7. Адаптеры и списки</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/5.1.php">ListView и ArrayAdapter</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.7.php">Ресурс string-array и ListView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.2.php">Выбор элемента в ListView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.9.php">Добавление и удаление в ArrayAdapter и ListView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.6.php">Расширение списков и создание адаптера</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.8.php">Оптимизация адаптера и View Holder</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.10.php">Сложный список с кнопками</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.3.php">ListActivity</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.4.php">Выпадающий список Spinner</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/4.2.php">Виджет автодополнения AutoCompleteTextView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.5.php">GridView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.11.php">RecyclerView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/5.12.php">Обработка выбора элемента в RecyclerView</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 8. Стили и темы</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/6.1.php">Стили</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/6.2.php">Темы</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 9. Меню</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/7.1.php">Создание меню</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/7.2.php">Группы в меню и подменю</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 10. Фрагменты</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/8.1.php">Введение во фрагменты</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/8.3.php">Жизненный цикл фрагментов</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/8.5.php">Взаимодействие между фрагментами</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/8.2.php">Фрагменты в альбомном и портретном режиме</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 11. Многопоточность</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/10.1.php">Создание потоков и визуальный интерфейс</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/10.2.php">Потоки, фрагменты и ViewModel</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/10.3.php">Класс AsyncTask</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/10.4.php">AsyncTask и фрагменты</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 12. Работа с сетью. WebView</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/4.6.php">WebView</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/15.1.php">Загрузка данных и класс HttpURLConnection</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 13. Работа с мультимедиа</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/11.1.php">Работа с видео</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/11.2.php">Воспроизведение аудио</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 14. Настройки и состояние приложения</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/12.3.php">Сохранение состояния приложения</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/12.1.php">Создание и получение настроек SharedPreferences</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/12.2.php">PreferenceFragmentCompat</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 15. Работа с файловой системой</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/13.1.php">Чтение и сохранение файлов</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/13.2.php">Размещение файлов во внешнем хранилище</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 16. Работа с базами данных SQLite</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/14.5.php">Подключение к базе данных SQLite</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/14.1.php">SQLiteOpenHelper и SimpleCursorAdapter, получение данных из SQLite</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/14.2.php">Добавление, удаление и обновление данных в SQLite</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/14.3.php">Использование существующей БД SQLite</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/14.4.php">Динамический поиск по базе данных SQLite</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/14.6.php">Модель, репозиторий и работа с базой данных</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 17. Перелистывание страниц и ViewPager2</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/9.1.php">ViewPager2 и разделение приложения на страницы</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/9.2.php">Заголовки страниц и TabLayout</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 18. Сервисы</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/16.1.php">Введение в сервисы Android</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 19. Диалоговые окна</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/18.1.php">DatePickerDialog и TimePickerDialog</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/18.2.php">DialogFragment и создание своих диалоговых окон</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/18.3.php">Передача данных в диалоговое окно</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/18.4.php">Взаимодействие диалогового окна с Activity</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 20. Анимация</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/19.1.php">Cell-анимация</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/19.2.php">Tween-анимация</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 21. Провайдеры контента</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/20.1.php#contacts">Работа с контактами</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/20.2.php">Добавление контактов</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/20.3.php">Создание провайдера контента. Часть 1</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/20.4.php">Создание провайдера контента. Часть 2</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/20.5.php">Создание провайдера контента. Часть 3</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/20.6.php">Асинхронная загрузка данных</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 22. JSON</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/13.3.php">Работа с json</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 23. Работа с XML</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/java/android/23.1.php">Ресурсы XML и их парсинг</a></span></li>
				<li><span class="file"><a href="//metanit.com/java/android/23.2.php">Получение xml по сети</a></span></li>
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
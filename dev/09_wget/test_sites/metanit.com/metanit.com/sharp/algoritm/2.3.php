<!DOCTYPE html>
<html >
<head>
<title>Структуры данных в C# | Стек на основе массива</title>
<meta charset="utf-8" />
<meta name="description" content="Создание стека на основе массива в C#, работа со стеком">
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
<h2>Стек на основе массива</h2><div class="date">Последнее обновление: 02.09.2016</div>

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

<p>Стек представляет собой структуру данных, которая работает по принципу <span class="b">LIFO</span> (<span class="b">Last In First Out</span> - "последний пришел - первый вышел"). 
Графически стек можно представить в виде столбика или стопки объектов:</p>
<img src="pics/stack1.png" alt="Структура стек в C# и .NET" />
<p>Стек имеет вершину, который образует последний добавленный элемент. При добавлении новый элемент 
помещается поверх вершины стека и образует новую вершину. При удалении удаляется элемент из вершины стека, а предыдущий элемент образует новую вершину.</p>
<p>Так, на приведенном рисунке вначале вершиной стека является "Tom". После добавления нового элемента "Bob" этот элемент располагается поверх элемента "Tom" и становится новой 
вершиной.</p>
<p>В библиотеке классов .NET в принципе уже есть свой класс, который выполняет роль стека. Это класс - <span class="b">System.Collections.Generic.Stack</span>. Но рассмотрим, как мы сами можем реализовать 
структуру в виде стека.</p>
<p>Структура стек вне зависимости от языка программирования обладает неким общим функционалом, который составляют метод добавления элемента (как правило, 
называется <code>push()</code>) и метод извлечения элемента из вершины стека (обычно называется <code>pop()</code>). Кроме того, нередко реализации стеков 
содержат метод получения элемента из вершины без его извлечения, метод определения размера стека и ряд других.</p> 
<p>В начале для реализации структуры данных определим следующий класс:</p>
<pre class="brush:c#;">
public class FixedStack&lt;T&gt;
{
    private T[] items; // элементы стека
    private int count;	// количество элементов
	const int n = 10;	// количество элементов в массиве по умолчанию
    public FixedStack()
    {
        items = new T[n];
    }
    public FixedStack(int length)
    {
        items = new T[length];
    }
	// пуст ли стек
    public bool IsEmpty
    {
        get { return count == 0; }
    }
	// размер стека
    public int Count
    {
        get { return count; }
    }
	// добвление элемента
    public void Push(T item)
    {
		// если стек заполнен, выбрасываем исключение
        if (count == items.Length) 
			throw new InvalidOperationException("Переполнение стека");
        items[count++] = item;
    }
	// извлечение элемента
    public T Pop()
    {
        // если стек пуст, выбрасываем исключение
        if (IsEmpty)
            throw new InvalidOperationException("Стек пуст");
        T item = items[--count];
        items[count] = default(T); // сбрасываем ссылку
        return item;
    }
	// возвращаем элемент из верхушки стека
	public T Peek()
    {
		// если стек пуст, выбрасываем исключение
        if (IsEmpty)
            throw new InvalidOperationException("Стек пуст");
        return items[count - 1];
    }
}
</pre>
<p>Данная реализация представляет обобщенный класс, а поэтому позволяет хранить элементы любого типа. Сами элементы в стеке в реальности будут храниться в массиве 
items. Для хранения реально добавленного количества элементов в стек служит переменная <code>count</code>.</p>
<p>Для инициализации стека служат два конструктора. Конструктор без параметров создает массив items с длиной 10. Через конструктор с параметром можно самостоятельно 
установить длину массива.</p>
<p>В методе <code>Push()</code> добавляем элемент в массив, при этом увеличивая значение переменной count. Если же стек (а фактически массив items) 
уже заполнен, то выбрасываем исключение.</p>
<p>В методе <code>Pop()</code> извлекаем элемент из верхушки стека, при этом уменьшая значение переменной count. Если в стеке нет элементов, то выбрасываем 
исключение.</p>
<p>Применение стека:</p>
<pre class="brush:c#;">
static void Main(string[] args)
{
	try
    {
		FixedStack&lt;string&gt; stack = new FixedStack&lt;string&gt;(8);
		// добавляем четыре элемента
		stack.Push("Kate");
		stack.Push("Sam");
		stack.Push("Alice");
		stack.Push("Tom");

		// извлекаем один элемент
		var head = stack.Pop();
		Console.WriteLine(head);    // Tom
		
		// просто получаем верхушку стека без извлечения
		head = stack.Peek();
		Console.WriteLine(head);    // Alice
    }
    catch(InvalidOperationException ex)
    {
        Console.WriteLine(ex.Message);
    }
    
	
    Console.Read();
}
</pre>
<p>Схематично все операции можно выразить следующим образом:</p>
<img src="pics/stack2.png" alt="Создание стека в C#" />
<p>Однако надо отметить, что данный стек имеет один важный недостаток - что если мы вначале не знаем точно, сколько стек может будет содержать элементов - 
10, 15, 100, 200...Фиксированная длина массива накладывает ограничение на работу со стеком. Чтобы решить эту проблему, нам надо динамически менять длину массива при 
увеличении или уменьшении до определенного момента. Так, определим следующий класс стека:</p>
<pre class="brush:c#;">
public class Stack&lt;T&gt;
{
    private T[] items;
    private int count;
    const int n = 10;
    public Stack()
    {
        items = new T[n];
    }
    public Stack(int length)
    {
        items = new T[length];
    }

    public bool IsEmpty
    {
        get { return count == 0; }
    }
    public int Count
    {
        get { return count; }
    }

    public void Push(T item)
    {
        // увеличиваем стек
        if (count == items.Length)
            Resize(items.Length + 10);

        items[count++] = item;
    }
    public T Pop()
    {
        // если стек пуст, выбрасываем исключение
        if (IsEmpty)
            throw new InvalidOperationException("Стек пуст");
        T item = items[--count];
        items[count] = default(T); // сбрасываем ссылку

        if (count &gt; 0 && count &lt; items.Length - 10)
			Resize(items.Length - 10);

        return item;
    }
    public T Peek()
    {
        return items[count - 1];
    }

    private void Resize(int max)
    {
        T[] tempItems = new T[max];
        for (int i = 0; i &lt; count; i++)
            tempItems[i] = items[i];
        items = tempItems;
    }
}
</pre>
<p>В данном случае в класс стека по сравнению с предыдущим случаем добавлен метод <code>Resize</code>, который изменяет размер массива до значения max. Для 
этого в методе просто создается новый массив, в который копируются данные из старого.</p>
<p>Теперь при добавлении в методе <code>Push()</code> больше не надо проверять стек на переполнение. Если вдруг в массиве items больше не окажется места, 
то мы вызовем функцию Resize, которая увеличит массив на 10 элементов:</p>
<pre class="brush:c#;">
// увеличиваем стек
if (count == items.Length)
    Resize(items.Length + 10);
</pre>
<p>При удалении элемента в методе Pop аналогично изменяем размер, если в массиве items образовалось более 10 пустых ячеек.</p>
<p>Здесь при добавлении и удалении идет изменение количества элементов на 10. Можно увеличивать/уменьшать в два раза и т.д. Однако следует помнить, 
что изначальное выделение больших объемов памяти увеличит совокупную память, потребляемую приложением. При этом не факт, что хотя бы половина из нее будет использоваться.</p>
<p>В то же время если увеличивать/уменьшать понемногу размер массива, то это увеличит частоту перераспределения памяти, что в конечном счете ведет к уменьшению производительности.</p>
<p>Таким образом, стек стал более гибким в отношении размеров массива, однако сохранил ряд недостатков, связанных с массивами - необходимости перераспределения памяти при добавлении или удалении данных, и увеличим сложность вычислительного алгоритма. 
И далее мы рассмотрим, как мы можем уйти от этих недостатков.</p>
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


<div class="nav"><p><a href="2.2.php">Назад</a><a href="./">Содержание</a><a href="2.4.php">Вперед</a></p></div></div>
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
		<li class="closed"><span class="folder">Глава 1. Введение в алгоритмы</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/algoritm/1.1.php">Эффективность алгоритма</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. Структуры данных</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/algoritm/2.1.php">Связный список</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/algoritm/2.2.php">Двусвязные списки</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/algoritm/2.3.php">Стек на основе массива</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/algoritm/2.4.php">Стек</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/algoritm/2.5.php">Очередь</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/algoritm/2.6.php">Дек</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/algoritm/2.7.php">Кольцевой односвязный список</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/algoritm/2.8.php">Кольцевой двусвязный список</a></span></li>
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
	$("li:contains('Глава 2.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 2.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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
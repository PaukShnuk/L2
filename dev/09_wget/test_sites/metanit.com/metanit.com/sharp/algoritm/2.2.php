<!DOCTYPE html>
<html >
<head>
<title>Структуры данных в C# | Двусвязные списки</title>
<meta charset="utf-8" />
<meta name="description" content="Структура данных Двусвязный список в c#, хранение ссылки на следующий и на предыдущий узел, добавление, удаление и перебор узлов">
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
<h2>Двусвязные списки</h2><div class="date">Последнее обновление: 02.09.2016</div>

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

<p>Двусвязные списки также представляют последовательность связанных узлов, однако теперь каждый узел хранит ссылку на следующий и на предыдущий элементы.</p>
<img src="pics/linkedlist4.png" alt="Двусвязный список в C#" />
<p>Двунаправленность списка приходится учитывать при добавлении или удалении элемента, 
так как кроме ссылки на следующий элемент надо устанавливать и ссылку на предыдущий. Но в то же время у нас появляется возможность обходить список как от первого к последнему 
элементу, так и наоборот - от последнего к первому элементу. В остальном двусвязный список ни чем не будет отличаться от односвязного списка.</p>
<p>Для создания двусвязного списка вначале надо определить класс узла, который будет представлять элемент списка:</p>
<pre class="brush:c#;">
public class DoublyNode&lt;T&gt;
{
    public DoublyNode(T data)
    {
        Data = data;
    }
    public T Data { get; set; }
    public DoublyNode&lt;T&gt; Previous { get; set; }
    public DoublyNode&lt;T&gt; Next { get; set; }
}
</pre>
<p>Далее определим сам класс списка:</p>
<pre class="brush:c#;">
using System.Collections.Generic;
using System.Collections;

namespace SimpleAlgorithmsApp
{
    public class DoublyLinkedList&lt;T&gt; : IEnumerable&lt;T&gt;  // двусвязный список
    {
        DoublyNode&lt;T&gt; head; // головной/первый элемент
        DoublyNode&lt;T&gt; tail; // последний/хвостовой элемент
        int count;  // количество элементов в списке

        // добавление элемента
        public void Add(T data)
        {
            DoublyNode&lt;T&gt; node = new DoublyNode&lt;T&gt;(data);

            if (head == null)
                head = node;
            else
            {
                tail.Next = node;
                node.Previous = tail;
            }
            tail = node;
            count++;
        }
        public void AddFirst(T data)
        {
            DoublyNode&lt;T&gt; node = new DoublyNode&lt;T&gt;(data);
            DoublyNode&lt;T&gt; temp = head;
            node.Next = temp;
            head = node;
            if (count == 0)
                tail = head;
            else
                temp.Previous = node;
            count++;
        }
		// удаление
        public bool Remove(T data)
        {
            DoublyNode&lt;T&gt; current = head;

            // поиск удаляемого узла
            while (current != null)
            {
                if (current.Data.Equals(data))
                {
                    break;
                }
                current = current.Next;
            }
            if(current!=null)
            {
                // если узел не последний
                if(current.Next!=null)
                {
                    current.Next.Previous = current.Previous;
                }
                else
                {
                    // если последний, переустанавливаем tail
                    tail = current.Previous;
                }

                // если узел не первый
                if(current.Previous!=null)
                {
                    current.Previous.Next = current.Next;
                }
                else
                {
                    // если первый, переустанавливаем head
                    head = current.Next;
                }
                count--;
                return true;
            }
            return false;
        }

        public int Count { get { return count; } }
        public bool IsEmpty { get { return count == 0; } }

        public void Clear()
        {
            head = null;
            tail = null;
            count = 0;
        }

        public bool Contains(T data)
        {
            DoublyNode&lt;T&gt; current = head;
            while (current != null)
            {
                if (current.Data.Equals(data))
                    return true;
                current = current.Next;
            }
            return false;
        }
        
        IEnumerator IEnumerable.GetEnumerator()
        {
            return ((IEnumerable)this).GetEnumerator();
        }

        IEnumerator&lt;T&gt; IEnumerable&lt;T&gt;.GetEnumerator()
        {
            DoublyNode&lt;T&gt; current = head;
            while (current != null)
            {
                yield return current.Data;
                current = current.Next;
            }
        }

        public IEnumerable&lt;T&gt; BackEnumerator()
        {
            DoublyNode&lt;T&gt; current = tail;
            while (current != null)
            {
                yield return current.Data;
                current = current.Previous;
            }
        }
    }
}
</pre>
<p>По большому счету этот двусвязный список реализует те же действия, что и односвязный, разница заключается в необходимости установки свойства Previous для узлов списка.</p>
<p>В методе добавления <code>Add()</code>, если в списке уже есть элементы, то у добавляемого узла свойство <code>Previous</code> указывает на узел, который до этого 
хранился в переменной tail:</p>
<pre class="brush:c#;">
if (head == null)
    head = node;
else
{
    tail.Next = node;
    node.Previous = tail;
}
tail = node;
</pre>
<img src="pics/linkedlist5.png" alt="Добавление в двусвязный список в C#" />
<p>Аналогично в методе <code>AddFirst</code> добавлении в начало списка для головного элемента свойство Previous начинает указывать на новый элемент, а новый 
элемент, таким образом, становиться первым элементом в списке.</p>
<img src="pics/linkedlist6.png" alt="Добавление в начало двусвязного списка в C#" />
<p>При удалении вначале необходимо найти удаляемый элемент. Затем в общем случае надо переустановить две ссылки:</p>
<pre class="brush:c#;">
current.Next.Previous = current.Previous;
current.Previous.Next = current.Next;
</pre>
<p>Если удаляются первый и последний элемент, соответственно надо переустановить переменные head и tail.</p>
<img src="pics/linkedlist7.png" alt="Удаление в двусвязном списке в C#" />
<p>И также в отличие от односвязной реализации здесь добавлен метод <code>BackEnumerator()</code> для перебора элементов с конца.</p>
<p>Применение списка:</p>
<pre class="brush:c#;">
DoublyLinkedList&lt;string&gt; linkedList = new DoublyLinkedList&lt;string&gt;();
// добавление элементов
linkedList.Add("Bob");
linkedList.Add("Bill");
linkedList.Add("Tom");
linkedList.AddFirst("Kate");
foreach (var item in linkedList)
{
    Console.WriteLine(item);
}
// удаление
linkedList.Remove("Bill");

// перебор с последнего элемента
foreach (var t in linkedList.BackEnumerator())
{
    Console.WriteLine(t);
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


<div class="nav"><p><a href="2.1.php">Назад</a><a href="./">Содержание</a><a href="2.3.php">Вперед</a></p></div></div>
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
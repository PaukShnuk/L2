<!DOCTYPE html>
<html >
<head>
<title>Алгоритмы в C# | Эффективность алгоритма</title>
<meta charset="utf-8" />
<meta name="description" content="Введение в алгоритмы и их эффективность на C# и.NET Framework">
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
<h1>Основы алгоритмов и структур данных</h1><h2>Введение в алгоритмы</h2><div class="date">Последнее обновление: 02.09.2016</div>

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

<p>Алгоритм представляет собой последовательность шагов, которая призвана решить определенную задачу. Иными словами алгоритм - это способ решения этой задачи. 
В этом качестве алгоритм применяется для обозначения метода решения любых, в том числе и повседневных задач. Но в данном случае речь будет идти об алгоритмах компьютерных вычислений.</p>
<p>Сам термин "алгоритм" произошел от имени персидского математика Аль-Хорезми, труды которого сыграли важную роль на становление математики как науки.</p>
<p>Алгоритм может иметь входные данные, над которыми производятся вычисления, а также может иметь выходной результат - одно значение или набор значений. По сути 
задача алгоритма состоит в преобразовании входных значений в выходные.</p>
<p>Важным критерием алгоритма выступает эффективность. Алгоритм может прекрасно решать поставленную задачу, но при этом быть не эффективным. 
Как правило, под эффективностью алгоритма подразумевается время, за которое должен выполняться данный алгоритм.</p>
<p>Общее время выполнения программы зависит от двух факторов:</p>
<ul>
<li><p>времени выполнения каждого оператора</p></li>
<li><p>частоты выполнения каждого оператора</p></li>
</ul>
<p>Время выполнение каждого оператора зависит от среды выполнения, операционной системы и других системных характеристик.</p>
<p>В зависимости от эффективности существует много типов алгоритмов, среди которых можно выделить следующие типы алгоритмов 
(перечислены в порядке уменьшения эффективности):</p>
<ul>
<li>
<p><span class="b">Константный</span> (1)</p>
<p>Приложение выполняет фиксированное количество операций, которые, как правило, требуют постоянного времени.</p>
<p>Примером может служить следующий набор операций:</p>
<pre class="brush:c#;">
int x = 10;
if(x &gt; 0)
{	
	x--;
}
else
{
	x++;
}
</pre>
</li>
<li>
<p><span class="b">Логарифмический</span> (logN)</p>
<p>Выполняется медленнее, чем программы с постоянным временем. Примером подобного алгоритма может служить алгоритм бинарного поиска.</p>
<pre class="brush:c#;">
public static int Rank(int key, int[] numbers)
{
    int low = 0;
    int high = numbers.Length - 1;
    while (low &lt;= high)
    {
        // находим середину
        int mid = low + (high - low) / 2;
        // если ключ поиска меньше значения в середине
        // то верхней границей будет элемент до середины
        if (key &lt; numbers[mid]) high = mid - 1;
        else if (key &gt; numbers[mid]) low = mid + 1;
        else return mid;
    }
    return -1;
}
</pre>
<p>К примеру, если у нас в массиве <code>numbers</code> 8 элементов, то чтобы найти нужный нам элемент, нам надо последовательно делить количество элементов на 2. 
То есть для поиска нужного элемента нам надо 3 выполнить цикл while. И данный результат, как раз описывается логарифмической функцией: log<sub>2</sub>8 = 3;</p>
<p>Рост времени выполнения при росте N будет увеличиваться на некоторую постоянную величину.</p>
</li>
<li><p><span class="b">Линейный</span> (N)</p>
<p>Как правило, встречается там, где метод основан на цикле. К примеру, функция факториала:</p>
<pre class="brush:c#;">
private static int Factorial(int n)
{
    int result = 1;
    for(int i=1; i&lt;=n; i++)
    {
        result *= i;
    }
    return result;
}
</pre>
<p>Здесь выполнение метода зависит от n. Какое значение для n будет передано в метод, столько раз и будет выполняться цикл. То есть рост трудоемкости 
алгоритма для данного метода пропорционален значению n, поэтому его и называют линейный.</p>
</li>
<li><p><span class="b">Линейно-логарифмический</span> (NlogN)</p>
<p>Примером подобного алгоритма может служить сортировка слиянием (merge sort)</p></li>
<li><p><span class="b">Квадратичный</span> (N<sup>2</sup>)</p>
<p>Как правило, методы, которые соответствуют данному алгоритму, содержит два цикл - внешний и вложенный, которые выполняются для всех значений вплоть до N. 
В качестве примера можно привести программу сортировки пузырьком (bubble sort) массива из N элементов, в которой в худшем случае нам надо совершить обход N*N элементов с помощью двух циклов:</p>
<pre class="brush:c#;">
private static void BubbleSort(int[] nums)
{
    int temp;
    for (int i = 0; i &lt; nums.Length - 1; i++)
	{
		for (int j = i + 1; j &lt; nums.Length; j++)
		{
			if (nums[i] &gt; nums[j])
			{
				temp = nums[i];
				nums[i] = nums[j];
				nums[j] = temp;
			}
		}
	}
}
</pre>
</li>
<li><p><span class="b">Кубический</span> (N<sup>3</sup>)</p>
<p>В программах, которые соответствуют этому алгоритму, используются три цикла, например:</p>
<pre class="brush:c#;">
char[] chars = new char[] { 'A', 'B', 'C' };
for(int i=0; i&lt;chars.Length; i++)
{
    for(int j=0; j&lt;chars.Length;j++)
    {
        for(int k=0; k&lt;chars.Length;k++)
        {
            Console.WriteLine($"{chars[i]}{chars[j]}{chars[k]}");
        }
    }
}
</pre>
</li>
</ul>
<p>Здесь рассмотрены только некоторые виды сложностей алгоритмов, которых на самом деле гораздо больше. Графически их можно представить следующим образом:</p>
<img src="pics/algorithm1.png" alt="Сложность алгоритма в C#" />
<p>В то же время надо сделать несколько замечаний. В данном случае дана идеальная модель сложности алгоритма. Но в первую очередь надо отметить, что подразумевается, 
что  воздействие окружения (операционной системы) на выполнение программы ничтожно мало. Хотя в реальности, естественно, окружение может привносить свой вклад в конечную производительность приложения.</p>
<p>Кроме того, в большинстве случаев сложность алгоритма зависит от наличия циклов. Метод без цикла с простыми выражениями имеет сложность O(1), тогда 
как метод с одним циклом - уже О(N), что, теоретически, хуже, чем O(1). Однако в реальности наличие простых операторов даже без цикла может меньшую производительность. 
Многое тут зависит опять же от конкретной логики программы.</p>
<p>И еще один аспект, который может повлиять на выполнение программы - это кэширование. Использование кэширования позволяет повторно выполнить операцию быстрее. Тем самым время выполнения одной и той же операции может 
быть непостоянным.</p>
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


<div class="nav"><p><a href="./">Содержание</a><a href="2.1.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 1.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 1.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
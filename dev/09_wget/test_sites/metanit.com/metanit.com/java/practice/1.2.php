<!DOCTYPE html>
<html >
<head>
<title>Упражнения по Java | Циклы</title>
<meta charset="utf-8" />
<meta name="description" content="Проверка знаний и упражнения по теме Циклы в Java">
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
<h2>Циклы</h2><div class="date">Последнее обновление: 01.11.2018</div>

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

<img src="https://metanit.com/metanit-java.jpg" id="jma" style="cursor:pointer;" />
</div>

<div class="question">
<div class="question-text">
<div class="question-header">Вопрос 1</div>
<p>В стране XYZ население равно 10 миллионов человек. Рождаемость составляет 14 человек на 1000 человек, смертность - 8 человек. 
Рассчитайте, какая численность населения будет через 10 лет, принимая во внимание, что показатели рождаемости и смертности постоянны.</p>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-1" name="checkbox-accordion" />
<label for="checkbox-1">Решение</label>
<div class="answer-content">
<pre class="brush:java;">
public class Program {
  
    public static void main(String[] args) {
          
		int population = 10000000;
		int born = 14;
		int death = 8;
		int dif = born - death;
        for(int i = 1; i &lt;= 10; i++){
			population += population * dif / 1000;
		}
		System.out.println(population);
    }
}
</pre>
</div>
</div>
</div>

<div class="question">
<div class="question-text">
<div class="question-header">Упражнение 2</div>
<p>В стране XYZ население равно 10 миллионов человек. Рождаемость составляет 14 человек на 1000 человек, смертность - 8 человек. 
Каждый год рождается и умирает на 1 человек, меньше чем в предыдущий год. 
Рассчитайте, какая численность населения будет через 10 лет, учитывая, что рождаемость не может быть меньше 7 человек на 1000 человек, а смертностность 
не может быть меньше 6 человек на 1000 человек.</p>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-2" name="checkbox-accordion" />
<label for="checkbox-2">Решение</label>
<div class="answer-content">
<pre class="brush:java;">
public class Program {
  
    public static void main(String[] args) {
          
		int population = 10000000;
		int born = 14;
		int death = 8;
        for(int i = 1; i &lt;= 10; i++){
			if (born &gt; 7) born -= 1;
			if	(death &gt; 6) death -=1;
			population += population * (born - death) / 1000;
		}
		System.out.println(population);
    }
}
</pre>
</div>
</div>
</div>


<div class="question">
<div class="question-text">
<div class="question-header">Упражнение 3</div>
<p>За каждый месяц банк начисляет к сумме вклада 7% от суммы. Напишите консольную программу, в которую пользователь вводит 
сумму вклада и количество месяцев. А банк вычисляет конечную сумму вклада с учетом начисления процентов за каждый месяц.</p>
<p>Для вычисления суммы с учетом процентов используйте цикл <span class="b">for</span>. Пусть сумма вклада будет 
представлять тип float.</p>
<p>Пример работы программы:</p>
<div class="console">
<pre class="consoletext">
Введите сумму вклада: 100
Введите срок вклада в месяцах: 1
После 1 месяцев сумма вклада составит 107,000000
</pre>
</div>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-3" name="checkbox-accordion" />
<label for="checkbox-3">Решение</label>
<div class="answer-content">
<pre class="brush:java;">
import java.util.Scanner;

public class Program {

    public static void main(String[] args) {

        Scanner in = new Scanner(System.in);
        System.out.print("Введите сумму вклада: ");
        float sum = in.nextFloat();
        System.out.print("Введите срок вклада в месяцах: ");
        int period = in.nextInt();
		
        for(int i = 1; i &lt;= period; i++){
            sum += sum * 0.07;
        }
        System.out.printf("После %d месяцев сумма вклада составит %f", period, sum);
		in.close();
    }
}

</pre>
</div>
</div>
</div>


<div class="question">
<div class="question-text">
<div class="question-header">Упражнение 4</div>
<p>Перепишите предыдущую программу, только вместо цикла for используйте цикл <span class="b">while</span>.</p>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-4" name="checkbox-accordion" />
<label for="checkbox-4">Решение</label>
<div class="answer-content">
<pre class="brush:java;">
import java.util.Scanner;

public class Program {

    public static void main(String[] args) {

        Scanner in = new Scanner(System.in);
        System.out.print("Введите сумму вклада: ");
        float sum = in.nextFloat();
        System.out.print("Введите срок вклада в месяцах: ");
        int period = in.nextInt();
        int i = period;

        while (i &gt; 0){
            sum += sum * 0.07;
            i--;
        }
        System.out.printf("После %d месяцев сумма вклада составит %f", period, sum);
		in.close();
    }
}
</pre>
</div>
</div>
</div>

<div class="question">
<div class="question-text">
<div class="question-header">Упражнение 5</div>
<p>Напишите программу, которая выводит на консоль таблицу умножения</p>
<p>Пример работы программы:</p>
<div class="console">
<pre class="consoletext">
1	2	3	4	5	6	7	8	9	
2	4	6	8	10	12	14	16	18	
3	6	9	12	15	18	21	24	27	
4	8	12	16	20	24	28	32	36	
5	10	15	20	25	30	35	40	45	
6	12	18	24	30	36	42	48	54	
7	14	21	28	35	42	49	56	63	
8	16	24	32	40	48	56	64	72	
9	18	27	36	45	54	63	72	81	
</pre>
</div>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-5" name="checkbox-accordion" />
<label for="checkbox-5">Решение</label>
<div class="answer-content">
<pre class="brush:java;">
public class Program {

    public static void main(String[] args) {

        for (int i = 1; i &lt; 10; i++) {
            for (int j = 1; j &lt; 10; j++) {
                System.out.printf("%d\t", i * j);
            }
            System.out.println();
        }
    }
}
</pre>
</div>
</div>
</div>

<div class="question">
<div class="question-text">
<div class="question-header">Упражнение 6</div>
<p>В цикле программа просит у пользователя ввести два числа и выводит результат их умножения.</p>
<p>После вывода результата умножения программа спрашивает, надо ли завершить выполнение. И если пользователь введет число 1, то программа завершает цикл. 
Если введено любое другое число, то программа продолжает спрашивать у пользователя два числа и умножать их.</p>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-6" name="checkbox-accordion" />
<label for="checkbox-6">Решение</label>
<div class="answer-content">
<pre class="brush:java;">
import java.util.Scanner;

public class Program {

    public static void main(String[] args) {

        Scanner in = new Scanner(System.in);
        int n = 0;
        do
        {
            System.out.println("Введите первое число: ");
            int num1 = in.nextInt();
            System.out.println("Введите второе число: ");
            int num2 = in.nextInt();
            System.out.printf("%d * %d = %d \n", num1, num2, num1 * num2);

            System.out.println("Для выхода из программы нажмите цифру 1, для подолжения любую другую цифру");
            n = in.nextInt();
        }
        while(n!=1);
		in.close();
    }
}
</pre>
</div>
</div>
</div>
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

<div class="dop socialtop"><fieldset><legend>Дополнительные материалы</legend>
<ul>
<li><a title="Теоретический материал" href="../tutorial/2.6.php"><i class="fa fa-lg fa-file-text-o"></i><span class="dop-txt">Статья по теме</span></a></li>
</ul>
</fieldset></div>
<div class="nav"><p><a href="1.1.php">Назад</a><a href="./">Содержание</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Основы Java</span>
		<ul>
			<li><span class="file"><a href="1.1.php">Условные конструкции</a></span></li>
			<li><span class="file"><a href="1.2.php">Циклы</a></span></li>
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
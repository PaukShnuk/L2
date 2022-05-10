<!DOCTYPE html>
<html >
<head>
<title>Упражнения по C# | Условные конструкции</title>
<meta charset="utf-8" />
<meta name="description" content="Проверка знаний по теме Условные конструкции в C#">
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
<h2>Условные конструкции</h2><div class="date">Последнее обновление: 11.07.2018</div>

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

<div class="question">
<div class="question-text">
<div class="question-header">Упражнение 1</div>
<p>Напишите консольную программу, в которую пользователь вводит с клавиатуры два числа. А программа сранивает 
два введенных числа и выводит на консоль результат сравнения (два числа равны, первое число больше второго или первое число меньше второго).</p>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-1" name="checkbox-accordion" />
<label for="checkbox-1">Решение</label>
<div class="answer-content">
<pre class="brush:c#;">
using System;

namespace HelloApp
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Введите первое число: ");
            int num1 = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Введите второе число: ");
            int num2 = Convert.ToInt32(Console.ReadLine());

            if(num1 &gt; num2)
            {
                Console.WriteLine("Первое число больше второго");
            }
            else if (num1 &lt; num2)
            {
                Console.WriteLine("Первое число меньше второго");
            }
            else
            {
                Console.WriteLine("Оба числа равны");
            }
            Console.ReadKey();
        }
    }
}
</pre>
</div>
</div>
</div>


<div class="question">
<div class="question-text">
<div class="question-header">Упражнение 2</div>
<p>Напишите консольную программу, в которую пользователь вводит с клавиатуры число. Если число одновременно больше 5 и меньше 10, то программа выводит "Число больше 5 и меньше 10". 
Иначе программа выводит сообщение "Неизвестное число".</p>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-2" name="checkbox-accordion" />
<label for="checkbox-2">Решение</label>
<div class="answer-content">
<pre class="brush:c#;">
using System;

namespace HelloApp
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Введите число: ");
            int num1 = Convert.ToInt32(Console.ReadLine());

            if (num1 &gt; 5 && num1 &lt; 10)
            {
                Console.WriteLine("Число больше 5 и меньше 10");
            }
            else
            {
                Console.WriteLine("Неизвестное число");
            }
            Console.ReadKey();
        }
    }
}
</pre>
</div>
</div>
</div>

<div class="question">
<div class="question-text">
<div class="question-header">Упражнение 3</div>
<p>Напишите консольную программу, в которую пользователь вводит с клавиатуры число. Если число либо равно 5, либо равно 10, то программа выводит "Число либо равно 5, либо равно 10". 
Иначе программа выводит сообщение "Неизвестное число".</p>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-3" name="checkbox-accordion" />
<label for="checkbox-3">Решение</label>
<div class="answer-content">
<pre class="brush:c#;">
using System;

namespace HelloApp
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Введите число: ");
            int num1 = Convert.ToInt32(Console.ReadLine());

            if (num1 == 5 || num1 == 10)
            {
                Console.WriteLine("Число либо равно 5, либо равно 10");
            }
            else
            {
                Console.WriteLine("Неизвестное число");
            }
            Console.ReadKey();
        }
    }
}
</pre>
</div>
</div>
</div>

<div class="question">
<div class="question-text">
<div class="question-header">Упражнение 4</div>
<p>В банке в зависимости от суммы вклада начисляемый процент по вкладу может отличаться. Напишите 
консольную программу, в которую пользователь вводит сумму вклада. Если сумма вклада меньше 100, то начисляется 5%. Если сумма вклада от 100 до 200, то начисляется 
7%. Если сумма вклада больше 200, то начисляется 10%. В конце программа должна выводить сумму вклада с начисленными процентами.</p>
<p>Для получения вводимого с клавиатуры числа используйте выражение <code>Convert.ToDouble(Console.ReadLine())</code></p>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-4" name="checkbox-accordion" />
<label for="checkbox-4">Решение</label>
<div class="answer-content">
<pre class="brush:c#;">
using System;

namespace HelloApp
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Введите сумму вклада: ");
            double sum = Convert.ToDouble(Console.ReadLine());
            
            if (sum &lt; 100)
            {
                sum += sum * 0.05;
            }
            else if (sum &lt;= 200)
            {
                sum += sum * 0.07;
            }
            else
            {
                sum += sum * 0.1;
            }
            Console.WriteLine($"Сумму вклада после начисления процентов: {sum}");

            Console.ReadKey();
        }
    }
}
</pre>
</div>
</div>
</div>

<div class="question">
<div class="question-text">
<div class="question-header">Упражнение 5</div>
<p>Изменим предыдущую задачу. Допустим, банк периодически начисляет по всем вкладам кроме процентов бонусы. И, допустим, 
сейчас банк решил доначислить по всем вкладам 15 единиц вне зависимости от их суммы. Измените программу таким образом, чтобы к финальной сумме дочислялись бонусы.</p>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-5" name="checkbox-accordion" />
<label for="checkbox-5">Решение</label>
<div class="answer-content">
<pre class="brush:c#;">
using System;

namespace HelloApp
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Введите сумму вклада: ");
            double sum = Convert.ToDouble(Console.ReadLine());
            double percent = 0;
            if (sum &lt; 100)
            {
                percent = 0.05;
            }
            else if (sum &lt;= 200)
            {
                percent = 0.07;
            }
            else
            {
                percent = 0.1;
            }
            sum += sum * percent + 15;

            Console.WriteLine($"Сумму вклада после начисления процентов: {sum}");

            Console.ReadKey();
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
<p>Напишите консольную программу, которая выводит пользователю сообщение "Введите номер операции: 1.Сложение  2.Вычитание  3.Умножение". 
Рядом с названием каждой операции указан ее номер, например, операция вычитания имеет номер 2. 
Пусть пользователь вводит в программу номер операции, и в зависимости от номера операции программа выводит ему название операции.</p>
<p>Для определения операции по введенному номеру используйте конструкцию switch...case.</p>
<p>Если введенное пользователем число не соответствует никакой операции (например, число 120), то выведите пользователю сообщение о том, что операция неопределена.</p>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-6" name="checkbox-accordion" />
<label for="checkbox-6">Решение</label>
<div class="answer-content">
<pre class="brush:c#;">
using System;

namespace HelloApp
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Введите номер операции: 1.Сложение  2.Вычитание  3.Умножение");

            int operation = Convert.ToInt32(Console.ReadLine());
            switch (operation)
            {
                case 1:
                    Console.WriteLine("Сложение");
                    break;
                case 2:
                    Console.WriteLine("Вычитание");
                    break;
                case 3:
                    Console.WriteLine("Умножение");
                    break;
                default:
                    Console.WriteLine("Неизвестная операция");
                    break;
            }
            Console.ReadKey();
        }
    }
}
</pre>
</div>
</div>
</div>

<div class="question">
<div class="question-text">
<div class="question-header">Упражнение 7</div>
<p>Измените предыдущую программу. Пусть пользователь кроме номера операции вводит два числа, и в зависимости от номера операции 
с введенными числами выполняются определенные действия (например, при вводе числа 3 числа умножаются). Результа операции выводиться на консоль.</p>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-7" name="checkbox-accordion" />
<label for="checkbox-7">Решение</label>
<div class="answer-content">
<pre class="brush:c#;">
using System;

namespace HelloApp
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Введите первое число: ");
            int num1 = Convert.ToInt32(Console.ReadLine());
            Console.WriteLine("Введите второе число: ");
            int num2 = Convert.ToInt32(Console.ReadLine());

            Console.WriteLine("Введите номер операции: 1.Сложение  2.Вычитание  3.Умножение");

            int operation = Convert.ToInt32(Console.ReadLine());
            int result = 0;
            switch (operation)
            {
                case 1:
                    result = num1 + num2;
                    Console.WriteLine($"Результат операции {result}");
                    break;
                case 2:
                    result = num1 - num2;
                    Console.WriteLine($"Результат операции {result}");
                    break;
                case 3:
                    result = num1 * num2;
                    Console.WriteLine($"Результат операции {result}");
                    break;
                default:
                    Console.WriteLine("Неизвестная операция");
                    break;
            }
            Console.ReadKey();
        }
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
<li><a title="Теоретический материал" href="../tutorial/2.5.php"><i class="fa fa-lg fa-file-text-o"></i><span class="dop-txt">Статья по теме</span></a></li>
</ul>
</fieldset></div>
<div class="nav"><p><a href="./">Содержание</a><a href="1.2.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Основы C#</span>
		<ul>
			<li><span class="file"><a href="1.1.php">Условные конструкции</a></span></li>
			<li><span class="file"><a href="1.2.php">Циклы</a></span></li>
			<li><span class="file"><a href="1.3.php">Массивы</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. Объектно-ориентированное программирование</span>
		<ul>
			<li><span class="file"><a href="2.4.php">Перегрузка операторов</a></span></li>
			<li><span class="file"><a href="2.3.php">Перегрузка операций преобразования типов</a></span></li>
			<li><span class="file"><a href="2.2.php">Индексаторы</a></span></li>
			<li><span class="file"><a href="2.1.php">Обобщения</a></span></li>
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
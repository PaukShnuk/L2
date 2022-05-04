<!DOCTYPE html>
<html >
<head>
<title>Упражнения по C# | Индексаторы</title>
<meta charset="utf-8" />
<meta name="description" content="Проверка знаний и упражнения по теме Индексаторы в C#">
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
<h2>Индексаторы</h2><div class="date">Последнее обновление: 11.08.2018</div>

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
<p>Определите класс футболиста, который содержит имя футболиста и его номер на поле. И определите класс футбольной команды, 
который хранит 11 футболистов в виде массива и обеспечивает доступ к этим футболистам через индексатор.</p>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-1" name="checkbox-accordion" />
<label for="checkbox-1">Решение</label>
<div class="answer-content">
<p>Возможно определение классов:</p>
<pre class="brush:c#;">
class Player
{
	public string Name { get; set; } // имя
	public int Number { get; set; } // номер
}
class Team
{
	Player[] players = new Player[11];

	public Player this[int index]
	{
		get { return players[index]; }
		set { players[index] = value; }
	}
}
</pre>
<p>Применение:</p>
<pre class="brush:c#;">
Team inter = new Team();
inter[0] = new Player { Name = "Ronaldo", Number = 9 };
inter[1] = new Player { Name = "R. Baggio", Number = 10 };
inter[2] = new Player { Name = "Simeone", Number = 8 };

Console.WriteLine(inter[1]?.Name);
</pre>
</div>
</div>
</div>


<div class="question">
<div class="question-text">
<div class="question-header">Упражнение 2</div>
<p>В предыдущем упражнении в качестве предложенного решения использовался следующий код:</p>
<pre class="brush:c#;">
class Player
{
	public string Name { get; set; } // имя
	public int Number { get; set; } // номер
}
class Team
{
	Player[] players = new Player[11];

	public Player this[int index]
	{
		get { return players[index]; }
		set { players[index] = value; }
	}
}
</pre>
<p>При попытке доступа по индексу, который выходит за границы массива мы получим исключение:</p>
<pre class="brush:c#;">
Team inter = new Team();
inter[20] = new Player { Name = "Ronaldo", Number = 9 };
</pre>
<p>Исправьте код индексатора таким образом, чтобы он позволял избежать использования некорректных индексов.</p>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-2" name="checkbox-accordion" />
<label for="checkbox-2">Решение</label>
<div class="answer-content">
<p>Возможное решение заключается в проверке допустимости индекса:</p>
<pre class="brush:c#;">
class Player
{
	public string Name { get; set; } // имя
	public int Number { get; set; } // номер
}
class Team
{
	Player[] players = new Player[11];

	public Player this[int index]
	{
		get
		{
			if (index &gt;= 0 && index &lt; players.Length)
				return players[index];
			else
				return null;
		}
		set
		{
			if (index &gt;= 0 && index &lt; players.Length)
				players[index] = value;
		}
	}
}
</pre>
<p>Однако надо учитывать, что индексатор может вернуть вместо объекта Person значение null. Поэтому полученный в результате работы индексатора объект, 
если он представляет ссылочный тип, необходимо проверять на null.</p>
</div>
</div>
</div>

<div class="question">
<div class="question-text">
<div class="question-header">Упражнение 3</div>
<p>Пусть даны следующие классы:</p>
<pre class="brush:c#;">
class Word
{
	public string Source { get; }
	public string Target { get; set; }
	public Word(string source, string target)
	{
		Source = source;
		Target = target;
	}
}
class Dictionary
{
	Word[] words;
	public Dictionary()
	{
		words = new Word[]
		{
			new Word("red", "красный"),
			new Word("blue", "синий"),
			new Word("green", "зеленый")
		};
	}
}
</pre>
<p>Класс Word представляет слово, где свойство Target хранит перевод слова. А класс Dictionary представляет словарь слов и 
хранит все слова в приватном массиве.</p>
<p>Добавьте в класс Dictionary индексатор таким образом, чтобы с помощью индексатора можно было по слову получить или изменить 
его перевод.</p>
</div>
<div class="answer">
<input type="checkbox" id="checkbox-3" name="checkbox-accordion" />
<label for="checkbox-3">Решение</label>
<div class="answer-content">
<p>Возможное решение:</p>
<pre class="brush:c#;">
class Word
{
	public string Source { get; }
	public string Target { get; set; }
	public Word(string source, string target)
	{
		Source = source;
		Target = target;
	}
}
class Dictionary
{
	Word[] words;
	public Dictionary()
	{
		words = new Word[]
		{
			new Word("red", "красный"),
			new Word("blue", "синий"),
			new Word("green", "зеленый")
		};
	}
	public string this[string source]
	{
		get
		{
			Word word = null;
			foreach(Word w in words)
			{
				if(w.Source == source)
				{
					word = w;
                    break;
                }
			}
			return word?.Target;
		}
		set
		{
			foreach(Word w in words)
			{
				if(w.Source == source)
				{
					w.Target = value;
                    break;
                }
			}
		}
	}
}
</pre>
<p>Применение:</p>
<pre class="brush:c#;">
Dictionary dict = new Dictionary();
Console.WriteLine(dict["blue"]);
dict["blue"] = "голубой";
Console.WriteLine(dict["blue"]);
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
<li><a title="Теоретический материал" href="../tutorial/4.10.php"><i class="fa fa-lg fa-file-text-o"></i><span class="dop-txt">Статья по теме</span></a></li>
</ul>
</fieldset></div>
<div class="nav"><p><a href="2.3.php">Назад</a><a href="./">Содержание</a><a href="2.1.php">Вперед</a></p></div></div>
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
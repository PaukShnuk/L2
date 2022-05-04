<!DOCTYPE html>
<html >
<head>
<title>Rust и Windows 10 | Обработка событий</title>
<meta charset="utf-8" />
<meta name="description" content="Графическое приложение на языке Rust для Windows 10, Обработка события нажатия кнопки, динамическое изменение визуальных элементов, метод clone">
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
<h2>Обработка событий</h2><div class="date">Последнее обновление: 15.06.2021</div>

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

<p>Продолжим работу с проектом из прошлой темы и рассмотрим простейшую обработку событий. Например, мы хотим нажать на кнопку и выполнить при нажатии 
какое-либо действие с элементами интерфейса.</p>
<p>Прежде всего, поскольку мы будем использовать кнопку, а именно структуру <span class="b">Windows::UI::Xaml::Controls::Button</span>, изменим файл <span class="b">build.rs</span> 
следующим образом:</p>
<pre class="brush:rs;">
fn main() {
    windows::build! {
        Windows::ApplicationModel::Activation::*,
		Windows::UI::Xaml::Controls::TextBlock,
		Windows::UI::Xaml::Controls::Button,
        Windows::UI::Xaml::*,
    };
}
</pre>
<p>Далее в файле <span class="b">main.rs</span> определим следующий код приложения:</p>
<pre class="brush:rs;">
#![windows_subsystem = "windows"]

mod bindings {
    windows::include_bindings!();
}

use bindings::*;
use windows::*;

use bindings::{
    Windows::ApplicationModel::Activation::*, 
	Windows::UI::Xaml::Controls::TextBlock,
	Windows::UI::Xaml::Controls::Button,
    Windows::UI::Xaml::*,
};

#[implement(
    extend Windows::UI::Xaml::Application,
    override OnLaunched
)]
struct MyApp();

#[allow(non_snake_case)]
impl MyApp {
    fn OnLaunched(&self, _: &Option&lt;LaunchActivatedEventArgs>) -&gt; Result&lt;()&gt; {
        let window = Window::Current()?;
		
		// определяем текстовую метку для кнопки
		let textBlock: TextBlock = TextBlock::new()?;
		textBlock.SetText("Hello Rust")?;
		textBlock.SetFontSize(22.0)?;
		
		// определяем кнопку
		let button = Button::new()?;
		button.SetContent(&textBlock)?;
		button.SetHorizontalAlignment(HorizontalAlignment::Center)?;
		
		// определяем обработчик
		let handler = RoutedEventHandler::new(move |_, _| {
				
				textBlock.SetText("Clicked")?;
				Ok(())
		});
		// устанавливаем для кнопки обработчик нажатия
		button.Click(handler)?;
		
        window.SetContent(button)?;
        window.Activate()
    }
}

fn main() -&gt; Result&lt;()&gt; {
    initialize_mta()?;
    Application::Start(ApplicationInitializationCallback::new(|_| {
        MyApp().new()?;
        Ok(())
    }))
}
</pre>
<p>Здесь в коде создается кнопка, у которой с помощью метода <code>SetContent()</code> в качестве содержимого устанавливается объект TextBlock, а с 
помощью метода &lt;code>SetHorizontalAlignment()</code> устанавливается выравние по центру по горизонтали:</p>
<pre class="brush:rs;">
let button = Button::new()?;
button.SetContent(&textBlock)?;
button.SetHorizontalAlignment(HorizontalAlignment::Center)?;
</pre>
<p>Причем чтобы избежать изменения владения объектом textBlock, он передается в метод &lt;code>SetContent()</code> по ссылке.</p>
<p>Затем создается обработчик для события нажатия:</p>
<pre class="brush:rs;">
let handler = RoutedEventHandler::new(move |_, _| {
				
	textBlock.SetText("Clicked")?;
	Ok(())
});
</pre>
<p>Обработчик события нажатия, впрочем как и ряд других событий, представляет объект <span class="b">Windows::UI::Xaml::RoutedEventHandler</span>. 
Для его создания применяется статическая функция <span class="b">new()</span>, в которую передается объект 
<code>FnMut(&Option&lt;IInspectable&gt;, &Option&lt;RoutedEventArgs&gt;) -&gt; Result&lt;()&gt;</code>, по сути функция с двумя параметрами - 
<code>&Option&lt;IInspectable&gt;</code> и <code>&Option&lt;RoutedEventArgs&gt;</code>.</p>
<p>В данном случае мы передаем в функцию <code>RoutedEventHandler::new()</code> замыкание. Так как нам не важны оба параметра замыкания, то вместо них определены 
прочерки _. В самой функции мы просто изменяем текст объекта textBlock. Но чтобы можно было оперировать этим объектом (впрочем как и другими визуальными компонентами, 
определенными во вне), перед параметрами замыкания указывается оператор <span class="b">move</span>.</p>
<p>Далее передаем этот обработчик в метод &lt;code>Click()</code>, который устанавливает обработчик нажатия кнопки:</p>
<pre class="brush:rs;">button.Click(handler)?;</pre>
<p>А само окно приложения в качестве содержимого теперь принимает созданную кнопку:</p>
<pre class="brush:rs;">window.SetContent(button)?;</pre>
<p>Установим приложение, как было описано в прошлой теме, и запустим его. По клике на кнопку произойдет изменение ее текста:</p>
<img src="./pics/1.7.png" alt="Обработка событий в графическом приложении на Rust для Windows 10" />
<h3>Передача объекта в обработчик события по ссылке</h3>
<p>Хотя предыдущий пример работает, тем не менее он имеет один аспект, на который стоит обратить внимание. После того как мы используем в обработчике события 
объект <code>textBlock</code>, владение этим объектом перейдет к замыканию. И после этого вне замыкания мы ничего не сможем сделать с текстовой меткой. Например:</p>
<pre class="brush:rs;">
#![windows_subsystem = "windows"]

mod bindings {
    windows::include_bindings!();
}

use bindings::*;
use windows::*;

use bindings::{
    Windows::ApplicationModel::Activation::*, 
	Windows::UI::Xaml::Controls::TextBlock,
	Windows::UI::Xaml::Controls::Button,
    Windows::UI::Xaml::*,
};

#[implement(
    extend Windows::UI::Xaml::Application,
    override OnLaunched
)]
struct MyApp();

#[allow(non_snake_case)]
impl MyApp {
    fn OnLaunched(&self, _: &Option&lt;LaunchActivatedEventArgs&gt;) -&gt; Result&lt;()&gt; {
        let window = Window::Current()?;
		
		let textBlock: TextBlock = TextBlock::new()?;
		textBlock.SetText("Hello Rust")?;
		textBlock.SetFontSize(22.0)?;
		
		let button = Button::new()?;
		button.SetContent(&textBlock)?;
		button.SetHorizontalAlignment(HorizontalAlignment::Center)?;
		
        //let textBlockCopy = textBlock.clone();
		
		let handler = RoutedEventHandler::new(move |_, _| {
				
				textBlock.SetText("Clicked")?;
				Ok(())
		});
		button.Click(handler)?;
		
		// пытаемся изменить текст метки
		// Здесь мы получим ошибку
		textBlock.SetText("Some Text")?;
		
        window.SetContent(button)?;
        window.Activate()
    }
}

fn main() -&gt; Result&lt;()&gt; {
    initialize_mta()?;
    Application::Start(ApplicationInitializationCallback::new(|_| {
        MyApp().new()?;
        Ok(())
    }))
}
</pre>
<p>Компиляция этого кода завершится ошибкой, потому что на строке</p>
<pre class="brush:rs;">textBlock.SetText("Some Text")?;</pre>
<p>мы пытаемся обратиться к объекту, владение которым перешло к замыканию в обработчике события.</p>
<p>И в этом случае, чтобы, с одной стороны, не потерять владение объектом и иметь возможность по прежнему его использовать, а с другой стороны, все-таки 
передать его в обработчик события, можно передавать копию объекта, которая создается с помощью метода <span class="b">clone()</span>:</p>
<pre class="brush:rs;">
#![windows_subsystem = "windows"]

mod bindings {
    windows::include_bindings!();
}

use bindings::*;
use windows::*;

use bindings::{
    Windows::ApplicationModel::Activation::*, 
	Windows::UI::Xaml::Controls::TextBlock,
	Windows::UI::Xaml::Controls::Button,
    Windows::UI::Xaml::*,
};

#[implement(
    extend Windows::UI::Xaml::Application,
    override OnLaunched
)]
struct MyApp();

#[allow(non_snake_case)]
impl MyApp {
    fn OnLaunched(&self, _: &Option&lt;LaunchActivatedEventArgs&gt;) -&gt; Result&lt;()&gt; {
        let window = Window::Current()?;
		
		let textBlock: TextBlock = TextBlock::new()?;
		textBlock.SetText("Hello Rust")?;
		textBlock.SetFontSize(22.0)?;
		
		let button = Button::new()?;
		button.SetContent(&textBlock)?;
		button.SetHorizontalAlignment(HorizontalAlignment::Center)?;
		
		// создаем копию объекта
        let textBlockCopy = textBlock.clone();
		
		let handler = RoutedEventHandler::new(move |_, _| {
				
			// изменяем оригинальный объект через его копию
			textBlockCopy.SetText("Clicked")?;
			Ok(())
		});
		button.Click(handler)?;
		
		// по прежнему можно манипулировать объектом textBlock
		textBlock.SetText("Some Text")?;
		
        window.SetContent(button)?;
        window.Activate()
    }
}

fn main() -&gt; Result&lt;()&gt; {
    initialize_mta()?;
    Application::Start(ApplicationInitializationCallback::new(|_| {
        MyApp().new()?;
        Ok(())
    }))
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


<div class="nav"><p><a href="./1.1.php">Назад</a><a href="./">Содержание</a></p></div></div>
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
		<li class="closed"><span class="folder">Глава 1. Графические приложения на Rust для Windows 10</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/rust/windows/1.1.php">Первое приложение</a></span></li>
				<li><span class="file"><a href="//metanit.com/rust/windows/1.2.php">Обработка событий</a></span></li>
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
	$("li:contains('Глава 1.')").removeClass('lastExpandable').addClass('lastCollapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 1.')").children('div').removeClass('lastExpandable-hitarea').addClass('lastCollapsable-hitarea');
	
	
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
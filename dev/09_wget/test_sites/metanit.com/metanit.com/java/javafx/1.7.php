<!DOCTYPE html>
<html >
<head>
<title>JavaFX | Взаимодействие с пользователем и обработка событий</title>
<meta charset="utf-8" />
<meta name="description" content="Взаимодействие с пользователем в JavaFX, обработка событий, интерфейс EventHandler, класс Event и ActionEvent, прикрепление обработчиков событий к элементам управления">
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
<h2>Взаимодействие с пользователем и обработка событий</h2><div class="date">Последнее обновление: 26.09.2021</div>

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

<p>Для взаимодействия с пользователем в JavaFX используется событийная модель. В этой модели есь источник события - некоторый элемент управления, 
который генерирует событие, и есть один или несколько слушаетелей или обработчиков события, которые подписываются на событие. Когда элемент управления 
генерирует событие, то обработчик обрабатывает это событие.</p>
<p>Рассмотрим небольшой базовый пример по обработке событий:</p>
<pre class="brush:java;">
import javafx.application.Application;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.Group;
import javafx.scene.control.Button;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;

public class Main extends Application{
	
	public static void main(String[] args) {
        
		launch(args);
    }
	
	@Override
    public void start(Stage stage) {
		
		Button btn = new Button();
        btn.setText("Click!");
		
		btn.setOnAction(new EventHandler&lt;ActionEvent&gt;() {
            
            @Override
            public void handle(ActionEvent event) {
			
				btn.setText("You've clicked!");
            }
        });
		
		Group root = new Group(btn);
		Scene scene = new Scene(root);
		stage.setScene(scene);
		
        stage.setTitle("Hello JavaFX");
		stage.setWidth(250);
		stage.setHeight(200);
		
        stage.show();
	}
}
</pre>
<p>Здесь мы создаем кнопку, которая представлена объектом классом Button. При нажатии на кнопку возникает событие нажатия, которое мы можем обработать.</p>
<p>Базовым классом для всех событий является класс <span class="b">javafx.event.Event</span>, который унаследован от класса java.util.EventObject. 
При генерации событии, например, при нажатии на кнопку, создается объект Event, через который передается информация о событии. В данном случае при нажатии на кнопку 
будет генерироваться событие типа <span class="b">javafx.event.ActionEvent</span> (который наследуется от Event).</p>
<p>Для определения обработчика события используется функциональный интерфейс <span class="b">EventHandler</span>.</p>
<pre class="brush:java;">
public interface EventHandler&lt;T extends Event&gt;{
	void handle​(T event);
}
</pre>
<p>Интерфейс EventHandler типизируется типом, который унаследован от класса Event и который по сути представляет событие. В нашем случае это класс ActionEvent.</p>
<p>Для прикрепления обработчика события EventHandler к событию элемента управления применяется метод <code>btn.setOnAction()</code>, в который 
передается реализация интерфейса EventHandler. В методе handle определяются действия, которые будут вызываться при нажатии на кнопку:</p>
<pre class="brush:java;">
btn.setOnAction(new EventHandler&lt;ActionEvent&gt;() {
            
	@Override
	public void handle(ActionEvent event) {
			
		btn.setText("You've clicked!");
	}
});
</pre>
<p>В самом обработчике просто меняется текст кнопки.</p>
<img src="./pics/2.7.png" alt="Обработка событий в JavaFX" />
<p>Нередко вместо определения явной реализации интерфейса EventHandler применяются лямбда-выражения. Например, мы могли бы переписать метод <code>btn.setOnAction()</code> следуюшим образом:</p>
<pre class="brush:java;">
btn.setOnAction(e -&gt; {
       
	btn.setText("You've clicked!");
});
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


<div class="nav"><p><a href="./1.6.php">Назад</a><a href="./">Содержание</a><a href="./2.1.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в JavaFX</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javafx/1.1.php">Что такое JavaFX</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/1.2.php">Первая программа на JavaFX</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/1.8.php">JavaFX в Intellij IDEA</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/1.3.php">Класс Application и жизненный цикл приложения</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/1.4.php">Класс Stage</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/1.5.php">Класс Scene</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/1.6.php">Графические элементы. Класс Node</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/1.7.php">Взаимодействие с пользователем и обработка событий</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 2. FXML</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javafx/2.1.php">Определение интерфейса в FXML</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/2.2.php">Контроллеры и взаимодействие с пользователем</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/2.3.php">Скрипты в FXML</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 3. Панели компоновки</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.1.php">Типы панелей компоновки</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.2.php">FlowPane</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.3.php">HBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.4.php">VBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.5.php">BorderPane</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.6.php">StackPane</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.7.php">AnchorPane</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.8.php">GridPane</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/3.9.php">TilePane</a></span></li>
		</ul>
	</li>
	<li class="closed"><span class="folder">Глава 4. Элементы управления</span>
		<ul>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.1.php">Кнопки и метки</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.2.php">CheckBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.3.php">ToggleButton</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.4.php">RadioButton</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.5.php">Текстовые элементы управления</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.6.php">ScrollPane</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.7.php">Slider</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.8.php">ListView</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.9.php">ComboBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.10.php">ChoiceBox</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.11.php">TreeView</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.12.php">Tooltip</a></span></li>
			<li><span class="file"><a href="//metanit.com/java/javafx/4.13.php">TableView</a></span></li>
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
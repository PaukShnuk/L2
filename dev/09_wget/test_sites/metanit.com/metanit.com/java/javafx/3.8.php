<!DOCTYPE html>
<html >
<head>
<title>JavaFX | GridPane</title>
<meta charset="utf-8" />
<meta name="description" content="Панель компоновки GridPane в JavaFX, создание сетки элементов, позиционирование элемента в ячейках грида">
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
<h2>GridPane</h2><div class="date">Последнее обновление: 07.06.2018</div>

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

<p>Контейнер <span class="b">javafx.scene.layout.GridPane</span> упорядочивает вложенные элементы в виде таблицы. Для каждого элемента можно задать в какой строке и каком столбце грида он будет 
располагаться.</p>
<h3>Добавление элементов</h3>
<p>Для добавления элементов GridPane определяет свой метод <span class="b">add()</span>, который имеет несколько версий. Некоторые из них:</p>
<pre class="brush:java;">
void add​(Node child, int columnIndex, int rowIndex)
void add​(Node child, int columnIndex, int rowIndex, int colspan, int rowspan)
</pre>
<p>Оба метода добавляют элемент child в строку с индексом rowIndex и в столбец с индексом columnIndex. Во втором методе параметры colspan и rowspan 
указывают соответственно, на сколько столбцов и строк надо растягивать элемент.</p>
<p>Например:</p>
<pre class="brush:java;">
GridPane gridpane = new GridPane();
gridpane.add(new Button(), 1, 0); 	// столбец=1 строка=0
gridpane.add(new Label(), 2, 0);  	// столбец=2 строка=0
</pre>
<p>Также для добавления можно использовать стандартный для других панелей компоновки способ - метод <span class="b">getChildren().getAll()</span>, который определен в родительском классе Pane. 
Но в этом случае все добавляемые элементы будут помещаться в самую первую ячейку. В этом случае мы можем использовать еще ряд методов для установки строки и столбца, в которе помещается элемент:</p>
<pre class="brush:java;">
static void setColumnIndex​(Node child, Integer value)	// устанавливает столбец
static void setColumnSpan​(Node child, Integer value)	// устанавливает строку
static void setConstraints​(Node child, int columnIndex, int rowIndex)	// устанавливает столбец и строку
</pre>
<p>Установка столбца и строки для добавляемых элементов:</p>
<pre class="brush:java;">
GridPane gridpane = new GridPane();

Button button = new Button();
GridPane.setRowIndex(button, 0);	// строка=0
GridPane.setColumnIndex(button, 1);	// столбец=1

Label label = new Label();
GridPane.setConstraints(label, 2, 0); // столбец=2 строка=0
</pre>
<h3>Установка размеров столбцов и строк</h3>
<p>По умолчанию строки и столбцы масштабируются таким образом, чтобы вместить помещенные в них элементы. По умолчанию столбцы расширяются до ширины 
самого широкого элемента, а высота строк соответствует высоте самого высокого элемента. Однако нередко такое поведение не является желательным, и 
в этом случе мы можем настроить размеры строк и столбцов.</p>
<h4>Столбцы</h4>
<p>С помощью метода <span class="b">getColumnConstraints()</span> можно получить коллекцию определений столбцов в виде объекта 
<code>ObservableList&lt;ColumnConstraints&gt;</code>. Определение столбца представляет класс <span class="b">javafx.scene.layout.ColumnConstraints</span>.</p>
<p>Чтобы создать определение столбца, можно использовать один из следующих конструкторов:</p>
<ul>
<li><p><span class="b">ColumnConstraints()</span></p></li>
<li><p><span class="b">ColumnConstraints​(double width)</span>: создает столбец с фиксированной шириной</p></li>
<li><p><span class="b">ColumnConstraints​(double minWidth, double prefWidth, double maxWidth)</span>: создает столбец с фиксированными значениями 
минимальной, предпочтительной и максимальной ширины</p></li>
<li><p><span class="b">ColumnConstraints​(double minWidth, double prefWidth, double maxWidth, Priority hgrow, HPos halignment, boolean fillWidth)</span>: 
создает столбец с фиксированными значениями минимальной, предпочтительной и максимальной ширины, hgrow устанавливает параметры расширения столбца, 
halignment устанавливает выравнивание по горизонали, а fillWidth при значении true задает растяжение элемента до границ столбца</p></li>	
</ul>
<p>Добавление в грид двух столбцов с фиксированными размерами:</p>
<pre class="brush:java;">
GridPane grid = new GridPane();
grid.getColumnConstraints().add(new ColumnConstraints(100)); // столбец с шириной от 0 до 100
grid.getColumnConstraints().add(new ColumnConstraints(200)); // столбец с шириной от 0 до 200
</pre>
<p>Однако при задании фиксированной ширины мы можем столкнуться с проблемой, что если окно приложения начнет растягиваться, то столбцы сохранят свои 
размеры. В итоге некоторая часть пространства останется незанятой:</p>
<pre class="brush:java;">
import javafx.application.Application;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.ColumnConstraints;

public class Main extends Application{
	
	public static void main(String[] args) {
        
		Application.launch(args);
    }
	
	@Override
    public void start(Stage stage) {
		
		Label first = new Label("First");
		Label second = new Label("Second");
		Label third = new Label("Third");
		
		GridPane root = new GridPane();
		root.getColumnConstraints().add(new ColumnConstraints(80));
		root.getColumnConstraints().add(new ColumnConstraints(150));
		root.getColumnConstraints().add(new ColumnConstraints(70));
		
		root.setGridLinesVisible(true); // делаем видимой сетку строк и столбцов
		root.setColumnIndex(first, 0);
		root.setColumnIndex(second, 1);
		root.setColumnIndex(third, 2);
		root.getChildren().addAll(first, second, third);
		
		
		Scene scene = new Scene(root, 300, 200);
		stage.setScene(scene);
		
        stage.setTitle("GridPane in JavaFX");
		
        stage.show();
	}
}
</pre>
<p>Чтобы отобразить границы строк и столбцов вызывается метод <code>root.setGridLinesVisible(true)</code>.</p>
<p>Пример растягивания окна при фиксированной ширине столбцов:</p>
<img src="./pics/3.20.png" alt="Столбцы с фиксированной шириной в GridPane и JavaFX" />
<p>В этом случае с помощью перечисления Priority можно настроить параметры растягивания столбца:</p>
<pre class="brush:java;">
import javafx.application.Application;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.layout.Priority;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.ColumnConstraints;

public class Main extends Application{
	
	public static void main(String[] args) {
        
		Application.launch(args);
    }
	
	@Override
    public void start(Stage stage) {
		
		Label first = new Label("First");
		Label second = new Label("Second");
		Label third = new Label("Third");
		
		GridPane root = new GridPane();
		root.getColumnConstraints().add(new ColumnConstraints(80));
		ColumnConstraints column2 = new ColumnConstraints(150,150,Double.MAX_VALUE);
		column2.setHgrow(Priority.ALWAYS);
		root.getColumnConstraints().add(column2);
		
		ColumnConstraints column3 = new ColumnConstraints(70,70,Double.MAX_VALUE);
		column3.setHgrow(Priority.ALWAYS);
		root.getColumnConstraints().add(column3);
		
		root.setGridLinesVisible(true);
		root.setColumnIndex(first, 0);
		root.setColumnIndex(second, 1);
		root.setColumnIndex(third, 2);
		root.getChildren().addAll(first, second, third);
		
		
		Scene scene = new Scene(root, 300, 200);
		stage.setScene(scene);
		
        stage.setTitle("GridPane in JavaFX");
		
        stage.show();
	}
}
</pre>
<p>В данном случае при растяжении окна приложения автоматически будут растягиваться второй и третий столбцы.</p>
<img src="./pics/3.21.png" alt="ColumnConstraints в GridPane и JavaFX" />
<h4>Строки</h4>
<p>С помощью метода <span class="b">getRowConstraints()</span> у объекта GridPane можно получить коллекцию определений строк в виде объекта 
<code>ObservableList&lt;RowConstraints&gt;</code>. Определение строк в GridPane представляют класс <span class="b">javafx.scene.layout.RowConstraints</span>.</p>
<p>Чтобы создать определение строки, можно использовать один из следующих конструкторов:</p>
<ul>
<li><p><span class="b">RowConstraints()</span></p></li>
<li><p><span class="b">RowConstraints​(double height)</span>: создает строку с фиксированной высотоой</p></li>
<li><p><span class="b">RowConstraints​(double minHeight, double prefHeight, double maxHeight)</span>: создает строку с фиксированными значениями 
минимальной, предпочтительной и максимальной высоты</p></li>
<li><p><span class="b">RowConstraints​(double minHeight, double prefHeight, double maxHeight, Priority vgrow, VPos valignment, boolean fillHeight)</span>: 
создает строку с фиксированными значениями минимальной, предпочтительной и максимальной высоты, vgrow устанавливает параметры расширения строки, 
valignment устанавливает выравнивание по вертикали, а fillWidth при значении true задает растяжение элемента по всей высоте строки</p></li>	
</ul>
<p>Как и столбец, строка по умолчанию занимает столько места, сколько необходимо для вмещения ее содержимого:</p>
<pre class="brush:java;">
import javafx.application.Application;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.layout.Priority;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.ColumnConstraints;
import javafx.scene.layout.RowConstraints;

public class Main extends Application{
	
	public static void main(String[] args) {
        
		Application.launch(args);
    }
	
	@Override
    public void start(Stage stage) {
		
		Label first = new Label("First");
		Label second = new Label("Second");
		Label third = new Label("Third");
		Label sixth = new Label("Sixth");
		
		GridPane root = new GridPane();
		// определения столбцов
		root.getColumnConstraints().add(new ColumnConstraints(80));
		ColumnConstraints column2 = new ColumnConstraints(150, 150, Double.MAX_VALUE);
		column2.setHgrow(Priority.ALWAYS);
		root.getColumnConstraints().add(column2);
		ColumnConstraints column3 = new ColumnConstraints(70, 70, Double.MAX_VALUE);
		column3.setHgrow(Priority.ALWAYS);
		root.getColumnConstraints().add(column3);
		
		// определения строк
		root.getRowConstraints().add(new RowConstraints(80));
		root.getRowConstraints().add(new RowConstraints(80));
		
		root.setGridLinesVisible(true);
		root.add(first, 0, 0);
		root.add(second, 1, 0);
		root.add(third, 2, 0);
		root.add(sixth, 2, 1);
		
		
		Scene scene = new Scene(root, 300, 200);
		stage.setScene(scene);
		
        stage.setTitle("GridPane in JavaFX");
		
        stage.show();
	}
}
</pre>
<img src="./pics/3.22.png" alt="RowConstraints в JavaFX и GridPane" />
<p>Чтобы растянуть строки по всей ширине GridPane, нужно установить для них ограничение vgrow с помощью перечисления Priority и метода <span class="b">setVgrow()</span>:</p>
<pre class="brush:java;">
// определения строк
RowConstraints row1 = new RowConstraints(80, 80, Double.MAX_VALUE);
row1.setVgrow(Priority.ALWAYS);

RowConstraints row2 = new RowConstraints(80, 80, Double.MAX_VALUE);
row2.setVgrow(Priority.ALWAYS);

root.getRowConstraints().add(row1);
root.getRowConstraints().add(row2);
</pre>
<img src="./pics/3.23.png" alt="Распределение строк в GridPane в JavaFX" />
<h4>Пропорциональные размеры</h4>
<p>Для столбцов с помощью метода <span class="b">setPercentWidth()</span> можно установить, сколько процентов обзего пространства будет занимать данный 
столбец. Аналогично для строк с помощью метода <span class="b">setPercentHeight()</span> можно установить, какую долю пространства контейнера 
бует занимать строка. То есть вместо фиксированных размеров использовать пропорциональные:</p>
<pre class="brush:java;">
import javafx.application.Application;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.control.Label;
import javafx.scene.layout.Priority;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.ColumnConstraints;
import javafx.scene.layout.RowConstraints;

public class Main extends Application{
	
	public static void main(String[] args) {
        
		Application.launch(args);
    }
	
	@Override
    public void start(Stage stage) {
		
		Label first = new Label("First");
		Label second = new Label("Second");
		Label third = new Label("Third");
		Label sixth = new Label("Sixth");
		
		GridPane root = new GridPane();
		// определения столбцов
		ColumnConstraints column1 = new ColumnConstraints();
		column1.setPercentWidth(30);
		root.getColumnConstraints().add(column1);
		
		ColumnConstraints column2 = new ColumnConstraints();
		column2.setPercentWidth(40);
		root.getColumnConstraints().add(column2);
		
		ColumnConstraints column3 = new ColumnConstraints();
		column3.setPercentWidth(30);
		root.getColumnConstraints().add(column3);
		
		// определения строк
		RowConstraints row1 = new RowConstraints();
		row1.setPercentHeight(55);
		root.getRowConstraints().add(row1);
		
		RowConstraints row2 = new RowConstraints();
		row2.setPercentHeight(45);
		root.getRowConstraints().add(row2);
		
		root.setGridLinesVisible(true);
		root.add(first, 0, 0);
		root.add(second, 1, 0);
		root.add(third, 2, 0);
		root.add(sixth, 2, 1);
		
		
		Scene scene = new Scene(root, 300, 200);
		stage.setScene(scene);
		
        stage.setTitle("GridPane in JavaFX");
		
        stage.show();
	}
}
</pre>
<img src="./pics/3.24.png" alt="Пропорциональные размеры в GridPane и JavaFX" />
<p>Но если совокупная сумма процентов окажется больше 100, например, есть 3 столбца, и для каждого из них установлена ширина в 50 процентов, 
тогда каждый столбец будет занимать 1/3 пространства (50/(50+50+50)).</p>
<h3>Позиционирование элементов</h3>
<p>По умолчанию элементы занимают только то пространство, которое им необходимо:</p>
<pre class="brush:java;">
import javafx.application.Application;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.ColumnConstraints;
import javafx.scene.layout.RowConstraints;

public class Main extends Application{
	
	public static void main(String[] args) {
        
		Application.launch(args);
    }
	
	@Override
    public void start(Stage stage) {
		
		Button first = new Button("First");
		Button second = new Button("Second");
		Button third = new Button("Third");
		Button fourth = new Button("Fourth");
		
		GridPane root = new GridPane();
		
		ColumnConstraints column1 = new ColumnConstraints();
		column1.setPercentWidth(50);
		root.getColumnConstraints().add(column1);
		
		ColumnConstraints column2 = new ColumnConstraints();
		column2.setPercentWidth(50);
		root.getColumnConstraints().add(column2);
		
		RowConstraints row1 = new RowConstraints();
		row1.setPercentHeight(50);
		root.getRowConstraints().add(row1);
		
		RowConstraints row2 = new RowConstraints();
		row2.setPercentHeight(50);
		root.getRowConstraints().add(row2);
		
		root.setGridLinesVisible(true);
		root.add(first, 0, 0);
		root.add(second, 0, 1);
		root.add(third, 1, 0);
		root.add(fourth, 1, 1);
		
		
		Scene scene = new Scene(root, 300, 200);
		stage.setScene(scene);
		
        stage.setTitle("GridPane in JavaFX");
		
        stage.show();
	}
}
</pre>
<img src="./pics/3.25.png" alt="Позиционирование элементов в GridPane в JavaFX" />
<p>Как мы видим, из скриншота, элементы позиционируются слева по горизонтали и по центру по вертикали. Но с помощью ряда статических методов GridPane можно настроить положение элемента:</p>
<ul>
<li><p><code>static void setHalignment​(Node child, HPos value)</code>: устанавливает горизонтальное выравнивание для элемента child</p></li>
<li><p><code>static void setHgrow​(Node child, Priority value)</code>: устанавливает, как элемент child будет растягиваться по горизонтали</p></li>
<li><p><code>static void setMargin​(Node child, Insets value)</code>: устанавливает для элемента child отступы от границ контейнера</p></li>
<li><p><code>static void setValignment​(Node child, VPos value)</code>: устанавливает вертикальное выравнивание для элемента child</p></li>
<li><p><code>static void setVgrow​(Node child, Priority value)</code>: устанавливает, как элемент child будет растягиваться по вертикали</p></li>
</ul>
<p>Применим эти методы:</p>
<pre class="brush:java;">
import javafx.application.Application;
import javafx.stage.Stage;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.geometry.Insets;
import javafx.scene.layout.Priority;
import javafx.geometry.HPos;
import javafx.geometry.VPos;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.ColumnConstraints;
import javafx.scene.layout.RowConstraints;

public class Main extends Application{
	
	public static void main(String[] args) {
        
		Application.launch(args);
    }
	
	@Override
    public void start(Stage stage) {
		
		Button first = new Button("First");
		// расположем кнопку в нижнем правом углу
		GridPane.setHalignment(first, HPos.RIGHT);
		GridPane.setValignment(first, VPos.BOTTOM);
		
		Button second = new Button("Second");
		
		// растянем кнопку по горизонтали
		second.setMaxWidth(Double.MAX_VALUE);
		GridPane.setHgrow(second, Priority.ALWAYS);
		
		Button third = new Button("Third");
		// растянем кнопку по горизонтали и вертикали
		third.setMaxWidth(Double.MAX_VALUE);
		third.setMaxHeight(Double.MAX_VALUE);
		GridPane.setHgrow(third, Priority.ALWAYS);
		GridPane.setVgrow(third, Priority.ALWAYS);
		
		Button fourth = new Button("Fourth");
		// кнопка заполняет все пространство ячейки
		fourth.setMaxWidth(Double.MAX_VALUE);
		fourth.setMaxHeight(Double.MAX_VALUE);
		GridPane.setHgrow(fourth, Priority.ALWAYS);
		GridPane.setVgrow(fourth, Priority.ALWAYS);
		// установим отступ в 10 единиц
		GridPane.setMargin(fourth, new Insets(10));
		
		
		GridPane root = new GridPane();
		
		ColumnConstraints column1 = new ColumnConstraints();
		column1.setPercentWidth(50);
		root.getColumnConstraints().add(column1);
		
		ColumnConstraints column2 = new ColumnConstraints();
		column2.setPercentWidth(50);
		root.getColumnConstraints().add(column2);
		
		RowConstraints row1 = new RowConstraints();
		row1.setPercentHeight(50);
		root.getRowConstraints().add(row1);
		
		RowConstraints row2 = new RowConstraints();
		row2.setPercentHeight(50);
		root.getRowConstraints().add(row2);
		
		root.setGridLinesVisible(true);
		root.add(first, 0, 0);
		root.add(second, 0, 1);
		root.add(third, 1, 0);
		root.add(fourth, 1, 1);
		
		
		Scene scene = new Scene(root, 300, 200);
		stage.setScene(scene);
		
        stage.setTitle("GridPane in JavaFX");
		
        stage.show();
	}
}
</pre>
<img src="./pics/3.26.png" alt="Элементы в GridPane в JavaFX" />
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


<div class="nav"><p><a href="./3.7.php">Назад</a><a href="./">Содержание</a><a href="./3.9.php">Вперед</a></p></div></div>
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
	
	$("li:contains('Глава 3.')").removeClass('expandable').addClass('collapsable').children('ul').css({"display":"block"});
	$("li:contains('Глава 3.')").children('div').removeClass('expandable-hitarea').addClass('collapsable-hitarea');
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
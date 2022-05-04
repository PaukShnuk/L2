<!DOCTYPE html>
<html >
<head>
<title>Entity Framework Core | Отношение многие ко многим</title>
<meta charset="utf-8" />
<meta name="description" content="Отношение многие ко многим в Entity Framework Core, many-to-many, настройка связи через Fluent API">
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
<h2>Отношение многие ко многим</h2><div class="date">Последнее обновление: 18.11.2020</div>

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

<p>Еще одним способом ассоциации объектов является связь многие-ко-многим (many-to-many). Примером подобного отношения может служить посещение студентами университетских курсов. 
Один студент может посещать сразу несколько курсов, и, в свою очередь, один курс может посещаться множеством студентов.</p>
<h3>Связь многие-ко-многим в EF Core 5</h3>
<p>Начиная с версии Entity Framework Core 5.0 во фреймворке появилась возможность автоматической генерации связи многие ко многим. И вначале рассмотрим 
подобную возможность, а потом посмотрим что было до версии 5.0.</p>
<p>Например, определим следующие классы моделей и контекста:</p>
<pre class="brush:c#;">
public class Course
{
	public int Id { get; set; }
	public string Name { get; set; }
	public List&lt;Student&gt; Students { get; set; }= new List&lt;Student&gt;();
}
public class Student
{
	public int Id { get; set; }
	public string Name { get; set; }
	public List&lt;Course&gt; Courses { get; set; } = new List&lt;Course&gt;();
}
public class ApplicationContext : DbContext
{
	public DbSet&lt;Course&gt; Courses { get; set; }
	public DbSet&lt;Student&gt; Students { get; set; }

	protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
	{
		optionsBuilder.UseSqlServer(@"Server=(localdb)\mssqllocaldb;Database=relationsdb;Trusted_Connection=True;");
	}
}
</pre>
<p>В данном случае все студенты, поступившие на курс, будут помещаться в свойство Students класса Course. Аналогично, все курсы студента 
будут храниться в свойстве Courses класса Student. То есть стандартная связь многие ко многие. Однако, при создании базы данных в ней будет три таблицы:</p>
<pre class="brush:sql;">
CREATE TABLE [dbo].[Courses] (
    [Id]   INT            IDENTITY (1, 1) NOT NULL,
    [Name] NVARCHAR (MAX) NULL,
    CONSTRAINT [PK_Courses] PRIMARY KEY CLUSTERED ([Id] ASC)
);

CREATE TABLE [dbo].[Students] (
    [Id]   INT            IDENTITY (1, 1) NOT NULL,
    [Name] NVARCHAR (MAX) NULL,
    CONSTRAINT [PK_Students] PRIMARY KEY CLUSTERED ([Id] ASC)
);

CREATE TABLE [dbo].[CourseStudent] (
    [CoursesId]  INT NOT NULL,
    [StudentsId] INT NOT NULL,
    CONSTRAINT [PK_CourseStudent] PRIMARY KEY CLUSTERED ([CoursesId] ASC, [StudentsId] ASC),
    CONSTRAINT [FK_CourseStudent_Courses_CoursesId] FOREIGN KEY ([CoursesId]) REFERENCES [dbo].[Courses] ([Id]) ON DELETE CASCADE,
    CONSTRAINT [FK_CourseStudent_Students_StudentsId] FOREIGN KEY ([StudentsId]) REFERENCES [dbo].[Students] ([Id]) ON DELETE CASCADE
);
</pre>
<p>То есть в реальности на уровне базы данных создается промежуточная таблица, которая хранит связи между студентами и курсами. Тем не менее 
на уровне кода C# нам не надо создавать промежуточную сущность, Entity Framework Core начиная с версии 5.0 умеет управлять подобной связью.</p>
<p>Рассмотрим, как мы можем работать с моделями в связи многие ко многим. Добавление:</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext())
{
	// пересоздадим базу данных
	db.Database.EnsureDeleted();
	db.Database.EnsureCreated();

	// создание и добавление моделей
	Student tom = new Student { Name = "Tom" };
	Student alice = new Student { Name = "Alice" };
	Student bob = new Student { Name = "Bob" };
	db.Students.AddRange(tom, alice, bob);

	Course algorithms = new Course { Name = "Алгоритмы" };
	Course basics = new Course { Name = "Основы программирования" };
	db.Courses.AddRange(algorithms, basics);

	// добавляем к студентам курсы
	tom.Courses.Add(algorithms);
	tom.Courses.Add(basics);
	alice.Courses.Add(algorithms);
	bob.Courses.Add(basics);
                
	db.SaveChanges();
}
</pre>
<p>Стоит отметить, что здесь мы добавляем курсы к студентам, но также можем сделать и наоборот - добавить студентов к курсам:</p>
<pre class="brush:c#;">algorithms.Students.AddRange(new List&lt;Student&gt;() { tom, bob });</pre>
<p>Вывод данных:</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext())
{
	var courses = db.Courses.Include(c =&gt; c.Students).ToList();
	// выводим все курсы
	foreach (var c in courses)
	{
		Console.WriteLine($"Course: {c.Name}");
		// выводим всех студентов для данного кура
		foreach (Student s in c.Students)
			Console.WriteLine($"Name: {s.Name}");
		Console.WriteLine("-------------------");
	}
}
</pre>
<p>Консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Course: Алгоритмы
Name: Tom
Name: Alice
-------------------------------
Course: Основы программирования
Name: Tom
Name: Bob
-------------------------------
</pre>
</div>
<p>Обновление данных (например, удалим у студента один курс и добавим другой):</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext())
{
	Student alice = db.Students.Include(s =&gt; s.Courses).FirstOrDefault(s =&gt; s.Name == "Alice");
	Course algorithms = db.Courses.FirstOrDefault(c =&gt; c.Name == "Алгоритмы");
	Course basics = db.Courses.FirstOrDefault(c =&gt; c.Name == "Основы программирования");
	if (alice != null && algorithms != null && basics != null)
	{
		// удаление курса у студента
		alice.Courses.Remove(algorithms);
		// добавление нового курса студенту
		alice.Courses.Add(basics);
		db.SaveChanges();
	}
}
</pre>
<p>Удаление же студента или курса из базы данных приведет к тому, что все строки из промежуточной таблицы, которые связаны с удаляемым объектом, также 
будут удалены:</p>
<pre class="brush:c#;">
Student student = db.Students.FirstOrDefault();
db.Students.Remove(student);
db.SaveChanges();
</pre>
<h4>Конфигурация связи</h4>
<p>EF Core 5 позволяет сконфигурировать отношение многие ко многие. Как правило, подобная конфигурация требуется для настройки 
промежуточной таблицы. Например, мы хотим переопределить название таблицы, которая создается для 
промежуточной сущности.</p>
<pre class="brush:c#;">
public class ApplicationContext : DbContext
{
	public DbSet&lt;Course&gt; Courses { get; set; }
	public DbSet&lt;Student&gt; Students { get; set; }

	protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
	{
		optionsBuilder.UseSqlServer(@"Server=(localdb)\mssqllocaldb;Database=relationsdb;Trusted_Connection=True;");
	}
	
	protected override void OnModelCreating(ModelBuilder modelBuilder)
	{
		modelBuilder.Entity&lt;Course&gt;()
                .HasMany(c =&gt; c.Students)
                .WithMany(s =&gt; s.Courses)
                .UsingEntity(j =&gt; j.ToTable("Enrollments"));
	}
}
</pre>
<p>Последний метод в цепочке - <span class="b">UsingEntity</span> позволяет настроить промежуточную таблицу. Фактически объект, представленный 
буквой <span class="b">j</span> как раз представляет условную промежуточную сущность, для которой создается таблица. Так, в данном случае 
промежуточная таблица будет называться "Enrollments".</p>
<h4>Добавление столбцов в промежуточную таблицу</h4>
<p>EF Core 5 автоматически создает промежуточную таблицу с двумя столбцами, через которые она связана с двумя другими таблицами. Однако иногда 
может потребоваться добавить в промежуточную таблицу еще какие-то данные. Например, в случае со студентами и курсами мы бы могли хранить в промежуточной таблице 
также дату поступления студента на выбранный курс. В этом случае на уровне кода C# лучше создать помежуточную сущность, которая будет содержать описание данных, 
которые мы хотим определить. Например:</p>
<pre class="brush:c#;">
using System;
using Microsoft.EntityFrameworkCore;
using System.Collections.Generic;

namespace HelloApp
{
	
    public class Course
    {
        public int Id { get; set; }
        public string Name { get; set; }
        public List&lt;Student&gt; Students { get; set; }= new List&lt;Student&gt;();
        public List&lt;Enrollment&gt; Enrollments { get; set; } = new List&lt;Enrollment&gt;();

    }
    public class Student
    {
        public int Id { get; set; }
        public string Name { get; set; }
        public List&lt;Course&gt; Courses { get; set; } = new List&lt;Course&gt;();
        public List&lt;Enrollment&gt; Enrollments { get; set; } = new List&lt;Enrollment&gt;();
    }
    public class Enrollment
    {
        public int StudentId { get; set; }
        public Student Student { get; set; }

        public int CourseId { get; set; }
        public Course Course { get; set; }

        public int Mark { get; set; }       // оценка студента
        public DateTime EnrollmentDate { get; set; } // дата зачисления
    }
    public class ApplicationContext : DbContext
    {
        public DbSet&lt;Course&gt; Courses { get; set; }
        public DbSet&lt;Student&gt; Students { get; set; }

        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            optionsBuilder.UseSqlServer(@"Server=(localdb)\mssqllocaldb;Database=relationsdb;Trusted_Connection=True;");
        }
		
        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder
                .Entity&lt;Course&gt;()
                .HasMany(c =&gt; c.Students)
                .WithMany(s =&gt; s.Courses)
                .UsingEntity&lt;Enrollment&gt;(
                   j =&gt; j
                    .HasOne(pt =&gt; pt.Student)
                    .WithMany(t =&gt; t.Enrollments)
                    .HasForeignKey(pt =&gt; pt.StudentId),
                j =&gt; j
                    .HasOne(pt =&gt; pt.Course)
                    .WithMany(p =&gt; p.Enrollments)
                    .HasForeignKey(pt =&gt; pt.CourseId),
                j =&gt;
                {
                    j.Property(pt =&gt; pt.EnrollmentDate).HasDefaultValueSql("CURRENT_TIMESTAMP");
                    j.Property(pt =&gt; pt.Mark).HasDefaultValue(3);
                    j.HasKey(t =&gt; new { t.CourseId, t.StudentId });
                    j.ToTable("Enrollments");
                });
        }
    }
}
</pre>
<p>Для определения данных, которые будут храниться в промежуточной таблице, здесь определена промежуточная сущность Enrollment, которая содержит навигационные 
свойства на сущности Student и Course, а также содержит два дополнительных свойства EnrollmentDate (дата зачисления на курс) и 
Mark (оценка студента).</p>
<p>Для конфигурации промежуточной сущности Enrollment также используется метод <code>UsingEntity&gt;Enrollment&lt;()</code>. 
Вначале настраиваются внешние ключи таблиц:</p>
<pre class="brush:c#;">
j =&gt; j
	.HasOne(pt =&gt; pt.Student)
	.WithMany(t =&gt; t.Enrollments)
	.HasForeignKey(pt =&gt; pt.StudentId),	// связь с таблицей Students через StudentId
j =&gt; j
	.HasOne(pt =&gt; pt.Course)
	.WithMany(p =&gt; p.Enrollments)
	.HasForeignKey(pt =&gt; pt.CourseId),	// связь с таблицей Courses через CourseId
</pre>
<p>В последней части настраиваем свойства сущности Enrollment, а также имя соответствующей таблицы и ее ключи:</p>
<pre class="brush:c#;">
j =&gt;
{
	j.Property(pt =&gt; pt.EnrollmentDate).HasDefaultValueSql("CURRENT_TIMESTAMP");
	j.Property(pt =&gt; pt.Mark).HasDefaultValue(3);
	j.HasKey(t =&gt; new { t.CourseId, t.StudentId });
	j.ToTable("Enrollments");
});
</pre>
<p>Здесь для конфигурации таблицы и столбцов мы можем применять все ранее рассмотренные методы, например, <code>HasDefaultValueSql</code> использует 
встроенную в T-SQL функцию <code>CURRENT_TIMESTAMP</code> для установки значения по умолчанию. Также для столбца Mark будет устанавливаться 
значение по умолчанию - число 3.</p>
<p>На уровне базы данных для промежуточной сущности будет создаваться следующая таблица:</p>
<pre class="brush:sql;">
CREATE TABLE [dbo].[Enrollments] (
    [StudentId]      INT           NOT NULL,
    [CourseId]       INT           NOT NULL,
    [Mark]           INT           DEFAULT ((3)) NOT NULL,
    [EnrollmentDate] DATETIME2 (7) DEFAULT (getdate()) NOT NULL,
    CONSTRAINT [PK_Enrollments] PRIMARY KEY CLUSTERED ([CourseId] ASC, [StudentId] ASC),
    CONSTRAINT [FK_Enrollments_Courses_CourseId] FOREIGN KEY ([CourseId]) REFERENCES [dbo].[Courses] ([Id]) ON DELETE CASCADE,
    CONSTRAINT [FK_Enrollments_Students_StudentId] FOREIGN KEY ([StudentId]) REFERENCES [dbo].[Students] ([Id]) ON DELETE CASCADE
);
</pre>
<p>Теперь рассмотрим некоторые операции. Добавление:</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext())
{
	// пересоздадим базу данных
	db.Database.EnsureDeleted();
	db.Database.EnsureCreated();

	// создание и добавление моделей
	Student tom = new Student { Name = "Tom" };
	Student alice = new Student { Name = "Alice" };
	Student bob = new Student { Name = "Bob" };
	db.Students.AddRange(tom, alice, bob);

	Course algorithms = new Course { Name = "Алгоритмы" };
	Course basics = new Course { Name = "Основы программирования" };

	db.Courses.AddRange(algorithms, basics);

	// добавляем к студентам курсы
	tom.Enrollments.Add(new Enrollment { Course = algorithms, EnrollmentDate = DateTime.Now });
	tom.Courses.Add(basics);
	alice.Enrollments.Add(new Enrollment { Course = algorithms, EnrollmentDate = DateTime.Now, Mark = 4 });
	bob.Enrollments.Add(new Enrollment  { Course = basics, EnrollmentDate = DateTime.Now });

	db.SaveChanges();
}
</pre>
<p>Особенностью работы с данными в данном случае будет то, что мы можем использовать два способа для установки связи одной сущности с другой:</p>
<pre class="brush:c#;">
tom.Enrollments.Add(new Enrollment { Course = algorithms, EnrollmentDate = DateTime.Now });
tom.Courses.Add(basics);
</pre>
<p>В первом случае устанавливаем связь студента с курсом через добавление объекта Enrollment, который обеспечивает эту связь. Во втором 
случае добавляем курс напрямую в коллекцию курсов студента, что в сою очередь также автоматически добавить данные в связующую таблицу Enrollments.</p>
<p>Вывод данных:</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext())
{
	var courses = db.Courses.Include(c =&gt; c.Students).ToList();
	// выводим все курсы
	foreach (var c in courses)
	{
		Console.WriteLine($"Course: {c.Name}");
		// выводим всех студентов для данного кура
		foreach (Student s in c.Students)
			Console.WriteLine($"Name: {s.Name}");
		Console.WriteLine("-------------------");
	}
}
</pre>
<p>Консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Course: Алгоритмы
Name: Tom
Name: Alice
-------------------------------
Course: Основы программирования
Name: Tom
Name: Bob
-------------------------------
</pre>
</div>
<p>Либо задействуем промежуточную сущность:</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext())
{
	var courses = db.Courses.Include(c =&gt; c.Students).ToList();
	// выводим все курсы
	foreach (var c in courses)
	{
		Console.WriteLine($"Course: {c.Name}");
		// выводим всех студентов для данного кура
		foreach (var s in c.Enrollments)
			Console.WriteLine($"Name: {s.Student.Name}  Date: {s.EnrollmentDate.ToShortDateString()}  Mark: {s.Mark}");
		Console.WriteLine("-------------------");
	}
}
</pre>
<p>Консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Course: Алгоритмы
Name: Tom  Date: 17.11.2000 Mark: 3
Name: Alice  Date: 17.11.2000 Mark: 4
-------------------------------
Course: Основы программирования
Name: Tom  Date: 17.11.2000 Mark: 3
Name: Bob  Date: 17.11.2000 Mark: 3
-------------------------------
</pre>
</div>
<h3>Связь многие-ко-многим до EntityFramework Core 5</h3>
<p>Также рассмотрим, как можно работать со связью многие ко многим в EntityFramework Core до версии 5.0.</p>
<pre class="brush:c#;">
public class ApplicationContext : DbContext
{
    public DbSet&lt;Course&gt; Courses { get; set; }
    public DbSet&lt;Student&gt; Students { get; set; }
	
    protected override void OnModelCreating(ModelBuilder modelBuilder)
    {
        modelBuilder.Entity&lt;StudentCourse&gt;()
            .HasKey(t =&gt; new { t.StudentId, t.CourseId });

        modelBuilder.Entity&lt;StudentCourse&gt;()
            .HasOne(sc =&gt; sc.Student)
            .WithMany(s =&gt; s.StudentCourses)
            .HasForeignKey(sc =&gt; sc.StudentId);

        modelBuilder.Entity&lt;StudentCourse&gt;()
            .HasOne(sc =&gt; sc.Course)
            .WithMany(c =&gt; c.StudentCourses)
            .HasForeignKey(sc =&gt; sc.CourseId);
    }
	
    protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
    {
        optionsBuilder.UseSqlServer(@"Server=(localdb)\mssqllocaldb;Database=relationsdb;Trusted_Connection=True;");
    }
}

public class Course
{
    public int Id { get; set; }
    public string Name { get; set; }
    public List&lt;StudentCourse&gt; StudentCourses { get; set; }
	
	public Course()
    {
        StudentCourses = new List&lt;StudentCourse&gt;();
    }
}
public class Student
{
    public int Id { get; set; }
    public string Name { get; set; }
    public List&lt;StudentCourse&gt; StudentCourses { get; set; }
	
	public Student()
    {
        StudentCourses = new List&lt;StudentCourse&gt;();
    }
}
public class StudentCourse
{
    public int StudentId { get; set; }
    public Student Student { get; set; }

    public int CourseId { get; set; }
    public Course Course { get; set; }
	
	public System.DateTime EnrollmentDate { get; set; }
}
</pre>
<p>Фактически связь многие-ко-многим здесь разбивается на две связи один-ко-многим: один Student - много StudentCourse, 
один Course - много StudentCourse. Класс StudentCourse в этом случае выполняет роль связующей сущности.</p>
<p>В итоге в создаваемой базе данных будет три таблицы:</p>
<pre class="brush:sql;">
CREATE TABLE [dbo].[Courses] (
    [Id]   INT            IDENTITY (1, 1) NOT NULL,
    [Name] NVARCHAR (MAX) NULL,
    CONSTRAINT [PK_Courses] PRIMARY KEY CLUSTERED ([Id] ASC)
);

CREATE TABLE [dbo].[Students] (
    [Id]   INT            IDENTITY (1, 1) NOT NULL,
    [Name] NVARCHAR (MAX) NULL,
    CONSTRAINT [PK_Students] PRIMARY KEY CLUSTERED ([Id] ASC)
);

CREATE TABLE [dbo].[StudentCourse] (
    [StudentId]       INT           NOT NULL,
    [CourseId]        INT           NOT NULL,
    [EnrollmentDate] DATETIME2 (7) NOT NULL,
    CONSTRAINT [PK_StudentCourse] PRIMARY KEY CLUSTERED ([StudentId] ASC, [CourseId] ASC),
    CONSTRAINT [FK_StudentCourse_Courses_CourseId] FOREIGN KEY ([CourseId]) REFERENCES [dbo].[Courses] ([Id]) ON DELETE CASCADE,
    CONSTRAINT [FK_StudentCourse_Students_StudentId] FOREIGN KEY ([StudentId]) REFERENCES [dbo].[Students] ([Id]) ON DELETE CASCADE
);
</pre>
<p>Используем модели. Добавление данных:</p>
<pre class="brush:c#;">
using (ApplicationContext db = new ApplicationContext())
{
	// пересоздадим базу данных
	db.Database.EnsureDeleted();
    db.Database.EnsureCreated();
			
    Student s1 = new Student { Name = "Tom"};
    Student s2 = new Student { Name = "Alice" };
    Student s3 = new Student { Name = "Bob" };
    db.Students.AddRange(s1, s2, s3);

    Course c1 = new Course { Name = "Алгоритмы" };
    Course c2 = new Course { Name = "Основы программирования" };
    db.Courses.AddRange(c1, c2);

    // добавляем к студентам курсы
	s1.StudentCourses.Add(new StudentCourse { Course = c1, Student = s1, EnrollmentDate = DateTime.Now });
	s2.StudentCourses.Add(new StudentCourse { Course = c1, Student = s2, EnrollmentDate = DateTime.Now });
	s2.StudentCourses.Add(new StudentCourse { Course = c2, Student = s2, EnrollmentDate = DateTime.Now });
				
    db.SaveChanges();
}
</pre>
<p>Получение данных:</p>
<pre class="brush:c#;">    
using (ApplicationContext db = new ApplicationContext())
{
    var courses = db.Courses.Include(c =&gt; c.StudentCourses)
							.ThenInclude(sc =&gt; sc.Student)
							.ToList();
	// выводим все курсы
    foreach (var c in  courses)
    {
        Console.WriteLine($"\nCourse: {c.Name}");
		// выводим всех студентов для данного кура
        foreach (StudentCourse sc in c.StudentCourses)
			Console.WriteLine($"Name: {sc.Student?.Name}  Date: {sc.EnrollmentDate.ToShortDateString()}");
		Console.WriteLine("-------------------");	// для красоты
    }
}
</pre>
<p>Консольный вывод:</p>
<div class="console">
<pre class="consoletext">
Course: Алгоритмы
Name: Tom  Date: 17.11.2020
Name: Alice  Date: 17.11.2020
-------------------------------
Course: Основы программирования
Name: Alice  Date: 17.11.2020
-------------------------------
</pre>
</div>
<p>Редактирование:</p>
<pre class="brush:c#;">
// удаление курса у студента
Student student = db.Students.Include(s=&gt;s.StudentCourses).FirstOrDefault(s =&gt; s.Name == "Alice");
Course course = db.Courses.FirstOrDefault(c =&gt; c.Name == "Алгоритмы");
if (student != null && course != null)
{
    var studentCourse = student.StudentCourses.FirstOrDefault(sc =&gt; sc.CourseId == course.Id);
    student.StudentCourses.Remove(studentCourse);
    db.SaveChanges();
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


<div class="nav"><p><a href="3.5.php">Назад</a><a href="./">Содержание</a><a href="3.7.php">Вперед</a></p></div></div>
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
	<li class="closed"><span class="folder">Глава 1. Введение в Entity Framework Core</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/1.1.php">Что такое Entity Framework Core</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/1.2.php">Первое приложение на EF Core</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/1.3.php">Подключение к существующей базе данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.1.php">Основные операции с данными. CRUD</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.2.php">Конфигурация подключения</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.16.php">Логгирование операций</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.12.php">Провайдеры логгирования</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 2. Создание моделей в Entity Framework Core</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.3.php">Модели, Fluent API и аннотации данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.15.php">Управление схемой БД и миграции</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.4.php">Определение моделей</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.5.php">Свойства моделей</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.6.php">Сопоставление таблиц и столбцов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.7.php">Настройка ключей</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.17.php">Настройка индексов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.8.php">Генерация значений свойств и столбцов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.9.php">Ограничения свойств</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.10.php">Типы данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.13.php">Конфигурация моделей</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.14.php">Инициализация базы данных начальными данными</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 3. Отношения между моделями</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.1.php">Внешние ключи и навигационные свойства</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.2.php">Каскадное удаление</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.3.php">Загрузка связанных данных. Метод Include</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.8.php">Explicit loading</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.9.php">Lazy loading</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.4.php">Отношение один к одному</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.5.php">Отношение один ко многим</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.6.php">Отношение многие ко многим</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/3.7.php">Комплексные типы</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 4. Наследование</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/4.1.php">Подход TPH - Table Per Hierarchy</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/4.2.php">Подход TPT - Table Per Type</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 5. Запросы и LINQ to Entities</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.1.php">Введение в LINQ to Entities</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.2.php">Выборка и фильтрация</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.10.php">Сортировка и проекция из базы данных</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.3.php">Соединение и группировка таблиц</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.4.php">Операции с множествами: объединение, пересечение, разность</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.5.php">Агрегатные операции</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.7.php">Отслеживание объектов и AsNoTracking</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.8.php">Выполнение запросов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.6.php">IEnumerable и IQueryable</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/5.9.php">Фильтры запросов уровня модели</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 6. SQL в Entity Framework Core</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/6.1.php">Выполнение SQL-запросов</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/6.2.php">Хранимые функции</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/6.3.php">Хранимые процедуры</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 7. Провайдеры баз данных</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/7.1.php">PostgreSQL</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/7.2.php">MySQL</a></span></li>
			</ul>
		</li>
		<li class="closed"><span class="folder">Глава 8. Дополнительные статьи</span>
			<ul>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/2.11.php">Параллелизм</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/8.1.php">Компилируемые запросы</a></span></li>
				<li><span class="file"><a href="//metanit.com/sharp/entityframeworkcore/8.2.php">Проекция запросов на представления</a></span></li>
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
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Portfolio website</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <!--  Начало на секцията за избор  -->
        <div class="hero">
            <nav>
                <h2 class="logo">ИЗРАБОТКА НА <span>САЙТ</span></h2>
            <ul>
                <li><a href="#">НАЧАЛО</a></li>
                <li><a href="#">ЗА МЕН</a></li>
                <li><a href="#">УСЛУГИ</a></li>
                <li><a href="#">ПРОЕКТИ</a></li>
                <li><a href="#">КОНТАКТИ</a></li>
            </ul>
                <a href="#" class="btn">Обади се</a>
            </nav>
            <div class="content">
                <h4>Здравей! Името ми е</h4>
                <h1>Андрей <span>Луканов</span></h1>
                <h3>Аз съм уеб програмист.</h3>
                <div class="newslatter">
                    <form>
                    <input type="email" name="email" id="mail" placeholder="Въведете вашия имейл">
                    <input type="submit" name="submit" value="Да започваме">
                    </form>
                </div>
            </div>
        </div>
       <!--- За секцията старт -->
       <section class="about">
           <div class="main">
               <img src="img/profile-1.png">
               <div class="about-text">
                   <h2>За мен</h2>
                   <h5>Разработчик <span>& дизайнер</span></h5>
                   <p>Аз съм фронтенд уеб разработчик. Мога да осигуря чист код и перфектен дизайн за пиксели.
                   Също така правя уебсайта повече и по-интерактивен с уеб анимации. Мога да осигуря чист код и перфектен дизайн на пиксели.
                   Също така правя уебсайта по-интерактивен с уеб анимации.
                   Отзивчивият дизайн прави уебсайта ви достъпен за всички потребители, независимо от тяхното устройство.</p>
                   <button type='button'>Нека да говорим</button>
               </div>
           </div>
       </section>
       <!-- Селекцията за Услуги -->
       <div class="service">
           <div class="title">
               <h2>Нашата услуга</h2>
           </div>
           <div class="box">
               <div class="card">
               <i class="fas fa-bars"></i>
               <h5>Уеб разработчик</h5>
               <div class="pra">
                   <p>Всеки уебсайт трябва да бъде изграден с две основни цели:
                      първо, трябва да работи на всички устройства.
                      Второ, трябва да работи възможно най-бързо.</p>
                   <p style="text-align: center;">
                   <a class="button" href="#">Прочетете още</a>
                   </p>
               </div>
               </div>
                <div class="card">
               <i class="far fa-user"></i>
               <h5>Денонощно представяне на продуктите</h5>
               <div class="pra">
                   <p>За разлика от Вас, сайтът Ви няма нужда от почивка.
                       Сайтът ще представя бизнеса Ви денонощно.
                    </p>
                   <p style="text-align: center;">
                   <a class="button" href="#">Прочетете още</a>
                   </p>
               </div>
               </div>
                <div class="card">
               <i class="far fa-bell"></i>
               <h5>Разширяване обхвата на бизнеса Ви</h5>
               <div class="pra">
                   <p>Днес можете да се срещнете с 5-ма клиенти? Е, сайтът Ви може да се срещне с 5 хиляди.
                       </p>
                   <p style="text-align: center;">
                   <a class="button" href="#">Прочетете още</a>
                   </p>
               </div>
               </div>
           </div>
       </div>
        <!-- Селекцията за контакт -->
        <div class="contact-me">
            <p>Нека ви направя красив уебсайт.</p>
            <a class="button-two" href="#">Наеми ме</a>
        </div>
        <!-- Долна селекция  -->
        <footer>
            <p>Андрей Луканов</p>
            <p>Кликнете емотиконката и се свържете с мен</p>
            <div class="social">
            <a href="https://www.facebook.com/profile.php?id=100009974703784"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-discord"></i></a>
            </div>
            <p class="end">© 2023 Всички права запазени &AElig; Andrei Lukanov</p>
        </footer>
    </body>
</html>
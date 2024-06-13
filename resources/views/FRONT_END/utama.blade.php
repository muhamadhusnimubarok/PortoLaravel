<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/typing-animation.js"></script>
    <style>
        .typing-text {
            font-size: 2rem;
            font-weight: bold;
            border-right: 2px solid black;
            white-space: nowrap;
            overflow: hidden;
            width: 0;
            animation: typing 3s steps(40), blink-caret .75s step-end infinite;
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes blink-caret {
            0% { border-right-color: black; }
            50% { border-right-color: transparent; }
            100% { border-right-color: black; }
        }
    </style>
</head>
<body>
    <!-------------------------------------------NAV--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <nav>
        <ul class="nav-links">
        <li class="nav-logo">
            <a href="#">
                <img src="../IMG/HUSNI.png">
            </a>
        </li>
        <input class="checkbox" id="check">
        <span class="menu">
                <li class="link"><a href="#">Home</a></li>
                <li id="link1" class="link"><a href="#">About Me</a></li>
                <li id="link2" class="link"><a href="#">Project</a></li>
                <li id="link3" class="link"><a href="#">Contact</a></li>
            </ul>
            <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
        </span>
        <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
    </nav>

<!-----------------------------------------End Of Nav-Bar----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


<!----------------------------------------------Header----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <header class="container1">
        <div class="content">
            <span class="blur"></span>
            <span class="blur"></span>
            <H1>Hi, I'm <span class="typing-text">Husni, Student at Wikrama</span></H1>
            <p>
                I'm studying Software and Game Development,  I would like to work in the field of data analysis and provide some possibilities. I enjoy learning about data dan coding, I like to combine both.
            </p>
            <button class="btn">Get Started</button>
        </div>
        <div class="image">
            <img src="../IMG/perpisahan-removebg.png">
        </div>
    </header>
<!-----------------------------------------------End of Header-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
 
<!--------------------------------------------------MAIN----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<main>  
    <section class="container2">
        <h2 class="header"></h2>
        <div class="features">
            <div class="card">
                <span><i class="ri-money-dollar-box-line"></i></span>
                <h4>EDUCATION</h4>
                <p>
                    <ul>
                        <li>Wikrama Bogor Vocational High Scchool</li>
                        <li>junior high school 13 bogor</li>
                    </ul>>
               </div>

            <div class="card">
                <span><i class="ri-bug-line"></i></span>
                <h4>EXPRIENCE</h4>
                <p>
                    I managed to create my own portfolio by proficiently menggunakan HTML CSS
                </p>
            </div>


            <div class="card">
                <span><i class="ri-history-line"></i></span>
                <h4>ACHIEVEMENTS</h4>
                <p>
                    
                </p>
            </div>
            <div class="card">
                <span><i class="ri-shake-hands-line"></i></span>
                <h4>SKILLS</h4>
                <p>
                    HTML<BR>CSS
                </p>
            </div>
        </div>
        
    </section>

    <section class="container">
        <h2 class="header">PROJECT DEVELOPMENT PLAN</h2>
        <p class="sub-header">
            MY PLAN PROJECT
        </p>
        <div class="pricing">
            <div class="card">
                <div class="content">
                    <h4>Project 1</h4>
                    <p>
                        <span class="material-symbols-outlined">
                            cancel
                            </span>
                        Belajar Membuat Front-End Web untuk Pemula
                    </p>
                    <p>
                        <span class="material-symbols-outlined">
                            cancel
                            </span>
                        Belajar Fundamental Front-End Web Development
                    </p>
                </div>
                <button class="btn">Gabung Sekarang.</button>
            </div>
            <div class="card">
                <div class="content">
                    <h4>Project 2</h4>
                    <p>
                        <span class="material-symbols-outlined">
                            cancel
                            </span>
                        Belajar Dasar Data Science

                    </p>
                    <p>
                        <span class="material-symbols-outlined">
                            cancel
                            </span>
                        Belajar Dasar Structured Query Language (SQL)
                    </p>
                    <p>
                        <span class="material-symbols-outlined">
                            cancel
                            </span>
                        Memulai Pemrograman dengan Python
                    </p>
                </div>
                <button class="btn">Gabung Sekarang</button>
            </div>
            <div class="card">
                <div class="content">
                    <h4>Project 3</h4>
                    
                    <p>
                    Membuat sebuah aplikasi start-up dan mendapatkan beberapa sertifikat mengenai data Science
                    </p>
                </div>
                <button class="btn">Gabung Sekarang</button>
            </div>
        </div>
    </section>
</main> 
<!-------------------------------------------------- END OF MAIN-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

        

<!-------------------------------------------------------FOOTER----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<footer class="container">
        <span class="blur"></span>
        <span class="blur"></span>
        <div class="column">
            <img src="resource/instagram.png" alt="Instagram Logo">
            <a href="https://www.instagram.com/zhusnii__/" target="_blank">Instagram</a>
            <div class="socials">
                <a href="https://github.com/muhamadhusnimubarok" target="_blank"><i class="ri-github-line"></i></a>
                <a href="mailto:muhamadhusnimubarok@smkwikrama.sch.id" target="_blank"><i class="ri-mail-line"></i></a>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
        </div>
        <div class="column">
            <h4>School</h4>
            <a href="#">SMK Wikrama Bogor</a>
            <a href="#">SMP 13 KOTA BOGOR</a>
            <a href="#">SDN Mulyaharja 02</a>
        </div>
        <div class="Project">
            <h4>About Us</h4>
            <a href="http://bit.ly/4aZqJVI">Google Sites</a>
        </div>
        <div class="column">
            <h4>Contact</h4>
            <a href="https://www.instagram.com/zhusnii__/" target="_blank">Instagram</a>
            <a href="https://github.com/muhamadhusnimubarok" target="_blank">Github</a>
            <a href="mailto:muhamadhusnimubarok@smkwikrama.sch.id" target="_blank">Email</a>
        </div>
    </footer>
<!------------------------------------------------------- END OF FOOTER--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <script src="js/script.js"></script>
</body>
</html>

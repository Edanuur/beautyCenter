<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>EBeauty</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
<nav>
        <div class="container clearfix">
            <div id="logo-box">
                <a href="/" class="logo text-uppercase">
                    E Beauty
                </a>
            </div>

            <div id="nav-links" class="responsive">
                <ul>
                    <li class="nav-item text-uppercase nav-icon">
                        <a href="#" class="nav-link">
                            <i class="fas fa-bars"></i>
                        </a>
                    </li>
                    <li class="nav-item text-uppercase">
                <input type="button" onClick="location.href='regform.php'" value="RANDEVU AL"  class="nav-link"/>
        
                    </li>
                    <li class="nav-item text-uppercase">
                        <select name="hizmetlerimiz" class="nav-link">
                            <option selected disabled>-HİZMETLERİMİZ-</option>
                            <option>Lazer Epilasyon</option>
                            <option>Ağda</option>
                            <option>Bölgesel Zayıflama</option>
                            <option>Manikür Pedikür</option>
                            <option>Makyaj</option>
                            <option>Cilt Bakımı</option>

                        </select>
                    </li>
                    <li class="nav-item text-uppercase">
                    <a href="logout.php" class="nav-link">ÇIKIŞ</a>
                            
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <header>
        <div class="container">
            <img id="profile-image" class="img-fluid" src="images/profil.jpg" alt="">
            <h1 class="text-uppercase">E Beauty Center</h1>
            <hr class="star-light">
            <h2>Cilt Bakımı - Lazer - Ağda</h2>
        </div>
    </header>

    <section id="portfolio">
        <div class="container">
            <h2 class="text-uppercase">
                HİZMETLERİMİZ
            </h2>
            <hr class="star-dark">


            <div id="portfolio-images" class="clearfix">
                
                <div class="col">
                    <input type="button" onClick="location.href='lazer.html'" value="LAZER EPİLASYON" class="btns" />
                    <div class="portfolio-item">
                        <a href="#">
                            <img class="img-fluid-p" src="images/lazer.jpg" alt="">
                            <div class="img-overlay">
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                

                <div class="col">
                <input type="button" onClick="location.href='manikür.html'" value="MANİKÜR - PEDİKÜR" class="btns" />
                    <div class="portfolio-item">
                        <a href="#">
                            <img class="img-fluid-p" src="images/manikur.jpg" alt="">

                            <div class="img-overlay">
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col">
                <input type="button" onClick="location.href='makyaj.html'" value="MAKYAJ" class="btns" />
                    <div class="portfolio-item">
                        <a href="#">
                            <img class="img-fluid-p" src="images/makyaj.jpg" alt="">

                            <div class="img-overlay">
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col">
                <input type="button" onClick="location.href='agda.html'" value="AĞDA" class="btns" />
                    <div class="portfolio-item">
                        <a href="#">
                            <img class="img-fluid-p" src="images/agda.jpg" alt="">

                            <div class="img-overlay">
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col">
                <input type="button" onClick="location.href='ciltbakımı.html'" value="CİLT BAKIMI"  class="btns"/>
                    <div class="portfolio-item">
                        <a href="#">
                            <img class="img-fluid-p" src="images/ciltbakımı.jpg" alt="">

                            <div class="img-overlay">
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col">
                <input type="button" onClick="location.href='zayıflama.html'" value="BÖLGESEL ZAYIFLAMA" class="btns" />
                    <div class="portfolio-item">
                        <a href="#">
                            <img class="img-fluid-p" src="images/zayıflama.jpg" alt="">

                            <div class="img-overlay">
                                <div class="icon">
                                    <i class="fas fa-plus"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section id="about">
        <h2 class="text-uppercase">
           HAKKIMIZDA
        </h2>
        <hr class="star-light">

        <div id="about-text" class="clearfix">
            <div class="left">
                <p class="text">
                E-Beauty; epilasyon, cilt bakımı, hydrafacial, kalıcı makyaj, kalıcı oje, manikür, pedikür, masaj, lifting, protez tırnak, peeling,
                 kaş tasarımı gibi hizmetleri sunan ve Şişli‘de bulunan bir güzellik salonudur. Amacımız, insanlara en iyi hizmeti en iyi fiyatlarla sunarak, 
                 yardımcı olmak ve fikir vermektir.
                 Kadın bakımına ve güzelliğine dair her şeyi seviyoruz!
                </p>
            </div>
            <div class="right">
                <p class="text">
                    Bizimle iletişim kurun ve anında güzelleşin.
                </p>
            </div>

        </div>

    </section>

    <section id="contact">

        <div class="container">

            <h2 class="text-uppercase">
                Bize Ulaşın!
            </h2>
            <hr class="star-dark">

            <form id="contact-form">

                <div class="form-group">
                    <input type="text" id="name" placeholder="İsim">
                </div>
                <div class="form-group">
                    <input type="text" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="text" id="phone" placeholder="Telefon">
                </div>
                <div class="form-group">
                    <textarea id="message" rows="5" placeholder="Mesaj"></textarea>
                </div>

                <button class="btn btn-primary">
                    Gönder
                </button>

            </form>

        </div>
    </section>

    <footer>
        <div class="container clearfix">

            <div class="col">
                <h4 class="text-uppercase">
                    ADRES
                </h4>
                <p>Mor Menekşe Sokak 112.Sokak
                    No:21 ANKARA
                </p>
            </div>

            <div class="col">
                <h4 class="text-uppercase">
                    SOSYAL MEDYA
                </h4>
                <ul>
                    <li>
                        <button class="btn btn-outline btn-social">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                    </li>
                    <li>
                        <button class="btn btn-outline btn-social">
                            <i class="fab fa-twitter"></i>
                        </button>
                    </li>
                    <li>
                        <button class="btn btn-outline btn-social">
                            <i class="fab fa-linkedin-in"></i>
                        </button>
                    </li>
                    <li>
                        <button class="btn btn-outline btn-social">
                            <i class="fab fa-dribbble"></i>
                        </button>
                    </li>
                </ul>
            </div>

            <div class="col">
                <h4 class="text-uppercase">
                    TARİHÇE
                </h4>
                <p>2000 yılından beri hizmet veren köklü ve güvenilir bir kurum.</p>
            </div>

        </div>
    </footer>

    <div class="copyright">
        <div class="container">
            <small>Copyright © Your Website 2022</small>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>

        $(".nav-icon").click(function(){
            $("#nav-links").toggleClass("responsive");
            return false;

        });

    </script>



</body>

</html>
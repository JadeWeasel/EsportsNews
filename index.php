<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width:768px)" href="css/mobile.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="slider.js">
    <title>Esports News</title>
</head>

<body>
    
    <!-- navbar -->
    <nav id="main-nav" class="nav">
        <div class="navbar">
            <img src="img/logo.png" alt="" class="logo">
            <ul>
                <li><a class="active" href="index.php">Мэдээ</a></li>
                <li><a href=>Монголын цахим спорт</a></li>
                <li><a href="about.php">Бидний тухай</a></li>
            </ul>
            <div class="search-bar">
                <form action="">
                    <input type="text" placeholder="search anything" name="q">
                    <button type="submit"><img src="/icon/search.png"></button>
                </form>
            </div>
           <div class="login">
            <ul>
                <li><a href="login.php">Нэвтрэх</a></li>
                <li><a href="login.php">Бүртгүүлэх</a></li>
            </ul>
           </div>
        </div>
    </nav>
    <!-- header -->

    <header id="header">
        <div class="container">
            <div class="slideshow-container" >
            
            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="img/teamIHC.jpeg" style="width:100%">
              <div class="text"><h1>IHC ба Rio Major 2022</h1>
                <p class="mb-4">IHC ба  Rio Major энэ бичвэр нь hltv.com дээр гарсан Major-оролцох багуудын нэг Монгол улсын IHC багийн тухай бичсэнийг орчуулан хүргэж байна. </p></div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="img/Outsiders.webp" style="width:100%" >
              <div class="text"><h1>IHC ба Rio Major 2022</h1>
                <p class="mb-4">Outsiders Rio Major-ын аварга боллоо.  </p></div>
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext"></div>
              <img src="img/Tundra.webp" style="width:100%" >
              <div class="text"><h1>IHC ба Rio Major 2022</h1>
                <p class="mb-4">Tundra TI11-ийн аварга боллоо. </p></div>
            </div>
            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span> 
              </div>
            <script src="slider.js"></script>
        </div>
        

        </div>
        <hr>
    </div>
    </header>
    <section id="main-articles">
        <div class="container">
            <h1>Спортын төрөл</h1>
            <div class="articles-container">
                <article class="card">
                    <img src="/img/dota.jpg" alt="">
                    <div>
                        <div class="category bg-secondary">Dota2<img src="/icon/dota1.png" alt=""></div>
                        <h3><a href="https://liquipedia.net/dota2/BTS/Pro_Series/13/Americas" target="_blank">Тэмцээний мэдээлэл
                        </a></h3>
                        
                    </div>
                </article>
                <article class="card">
                    <img src="img/counter.jpg" alt="">
                    <div>
                        <div class="category bg-secondary">CSGO</a><img src="/icon/counter-strike-icon.png" alt=""></div>
                        <h3> <a href=https://www.hltv.org/matches target="_blank">Тоглолтын хуваарь</a> </h3>
                        
                    </div>
                </article>
                <article class="card">
                    <img src="img/valorant.jpg" alt="">
                    <div>
                        <div class="category bg-secondary">Valorant <img src="/icon/valorant-icon.png" alt=""></div>
                        <h3> <a href="article.php">Тамирчдын мэдээлэл</a> </h3>
                       
                    </div>
                </article>
                <article class="card">
                    <img src="img/pubg.jpg" alt="">
                    <div>
                        <div class="category bg-secondary">PUBG mobile <img src="/icon/pubg.png" alt=""></div>
                        <h3> <a href=https://esports.pubgmobile.com target="_blank">Тэмцээний мэдээлэл</a> </h3>
                        
                    </div>
                </article>
                <article class="card">
                    <img src="img/lol.jpg"  alt="">
                    <div>
                        <div class="category bg-secondary">League of legends <img src="/icon/league-of-legends.png" alt=""></div>
                        <h3> <a href=https://liquipedia.net/leagueoflegends/Main_Page target="_blank">Тамирчдын мэдээлэл</a> </h3>
                        
                    </div>
                </article>
                <article class="card">
                    <img src="img/fortnite.jpg" alt="">
                    <div>
                        <div class="category bg-secondary">Fortnite <img src="/icon/fortnite.png" alt=""></div>
                        <h3> <a href=https://liquipedia.net/fortnite/Main_Page target="_blank">Тоглолтын хуваарь</a> </h3>
                        
                    </div>
                </article>
            </div>
        </div>
    </section>
    <hr>
     <!-- special -->
    <section id="special">
        <div class="container">
            <h1>Онцлох мэдээ</h1>
            <div class="special-container">
                <article class="news">
                    <img src="img/jigjug.jpg" alt="">
                    <div>
                        <div class="list bg-primary">Esport DOTA2</div>
                        <h3><a href="article.php">Jig Jug-Winter showdown 2022 лигийн тэмцээн</a></h3>
                        <p>Олон нийтийн телевизийн Jig Jug суваг цахим спортын лиг Jig Jug-Winter showdown-ыг 7 төрлөөр зохиож байна.  Нийт 25 сая төгрөгийн шагналын сантай энэ өвлийн хамгийн том Winter...</p>
                    </div>
                </article>
                <article class="news">
                    <img src="img/dota2.jpg" alt="">
                    <div>
                        <div class="list bg-primary">Esport DOTA2</div>
                        <h3> <a href="article.php">The International 11-д оролцож буй хамгийн залуу тоглогчид </a> </h3>
                        
                    </div>
                </article>
                <article class="news">
                    <img src="img/csgo.png" alt="">
                    <div>
                        <div class="list bg-secondary">Esport CS-GO</div>
                        <h3> <a href="article.php">Монгол баг тамирчид CS: GO төрлийн тэмцээнүүдэд оролцох хуваариуд. (2022 оны 11-12 сар)</a> </h3>
                        <p>Монгол баг тамирчид орж буй тэмцээнүүд ирэх он гартал иймэрхүү байна даа. ESL Challenger League S43 (ECL S43): 🇲🇳 IHC E-Sports CS:GO 🇲🇳 Team ARAVT 🇲🇳 Team NKT 🇲🇳...</p>
                    </div>
                </article>
                <article class="news">
                    <img src="img/teamIHC.jpeg" alt="">
                    <div>
                        <div class="list bg-secondary">Esport VALORANT</div>
                        <h3> <a href="article.php">MESA VALORANT TOUR</a> </h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sapiente rem ullam ut eius fugiat itaque obcaecati incidunt minus dolor, asperiores labore voluptatum harum iusto eos eum, consequatur esse minima!</p>
                    </div>
                </article>
                <article class="news">
                    <img src="img/Outsiders.webp" alt="">
                    <div>
                        <div class="list bg-secondary">Sport</div>
                        <h3> <a href="article.php">Lorem, ipsum dolor.</a> </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit aliquid dolorem suscipit suntomnis tenetur.</p>
                    </div>
                </article>
                <article class="news">
                    <img src="img/Tundra.webp" alt="">
                    <div>
                        <div class="list bg-secondary">Sport</div>
                        <h3> <a href="article.php">Lorem, ipsum dolor.</a> </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit aliquid dolorem suscipit suntomnis tenetur.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    
    <!-- footer -->
    <footer id="main-footer" class="py-4">
        <div class="container footer-container">
            <div>
                <img src="img/logo.png" alt="">
                <p>
                    Дэлхийд хүлээн зөвшөөрөгдсөн үндэсний #1 цахим спортын мэдээний сайт байж харилцагч, үйлчлүүлэгч бүрт үнэ цэнэ түгээж, өдөр бүр баяр нэмнэ.
                </p>
            </div>
            <div>
                <h3>Хаяг</h3>
                <p></p>
            </div>
            <div>
                <h3>Холбоосууд</h3>
                <div>
                    <a href=""><i class="fab fa-facebook fa-2x"></i></a>
                    <a href=""><i class="fab fa-instagram fa-2x"></i></a>
                    <a href=""><i class="fab fa-twitter fa-2x"></i></a>
                    <a href=""><i class="fab fa-youtube fa-2x"></i></a>
                </div>
                <h3>Холбоо барих</h3>
                <a type="phone">Утас: 99999999</a>
                <a type="email">И-мэйл: Ulaanaab76@gmail.com</a>
            </div>
            <div>
                <p>&copy; 2022, Бүх эрх хуулиар хамгаалагдсан</p>
            </div>
        </div>
    </footer>
</body>

</php>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The ReveShoppe</title>
    <link rel="stylesheet" type="text/css" href="../php-files/theReveshoppe.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;0,800;1,700&family=VT323&display=swap" rel="stylesheet">
</head>

<body>
<header class="header">
        <a href="#" class="logo">THE REVESHOPPE</a>
        <nav class="navbar">
            <ul>
                <li><a href="#" class="home">Home</a></li>
                <li><a href="#about_us" class="aboutus">About Us</a></li>
                <li><a href="#contact" class="contacts">Contact</a></li>
            </ul>
        </nav>
        <a href="#products" class="shopnow"><button>SHOP NOW</button></a>
</header>


    <!-- LANDING PAGE -->
    <section class="banner">
        <div class="texts">
        <h1 id="hello"> 
            <?php
                session_start(); 
                $_SESSION['user'] = $_POST['username']; 
                echo "Hello, ". $_SESSION['user'] . "!"; 
            ?> 
        </h1>
            <h3 id="welcome">Welcome to THE REVESHOPPE, the leading <br> K-POP Merchandise Shop in the Philippines!</h3>
            <h3 id="everything">Everything you need as a K-POP fan <br> is right here in this shop!</h3>
        </div>
        <img src="../images/Wendy.webp" alt="wendy" class="wendy">
        <img src="../images/curve.png" alt="curves" class="curves">
    </section>

    <!-- ABOUT US -->
    <section id="about_us">
        <h1 id="annyeong">annyeong reveshoppers!</h1>

        <div id="shoppers">
            <h2> We are the ReveShoppe committed to bring you the <br> best, freshest, and trending K-POP merchandise since 2015.</h2>

            <p> We were a group of K-fans from Baguio, Philippines who dreamt of collecting every merchandise released by our favorite K-POP groups. But due to financial problems, we were unable to do it. Years passed after our first jobs, we envisioned a mini shop where we will sell K-POP merchandises in the cheapest price possible to cater those hopeful K-POP fans just like us back then.</p>
       
            <p> We started from selling photocards and unofficial merchandises through Facebook and after four years, we were able to establish our very first physical store in Baguio. Due to the support of the K-POP community, we were able to
            expand The ReveShoppe with 30 more physical stores nationwide.</p>
       
            <p> As the Hallyu wave keeps on growing and prospering, so are our service! </p>
        </div>
    </section>
    <img src="../images/star1.png" alt="star1" class="star1">
    <img src="../images/curve2.png" alt="curves2" class="curves2">
    <img src="../images/sticker.png" alt="sticker" class="sticker">
    <!-- NEW RELEASES -->
    <section class="new_releases">
    <div class="gradient">    
        <div class="texts2">
            <h1>NEWEST<br>RELEASES</h1>
            <h1><span id="artist">RED VELVET</span><br><span id="song">BIRTHDAY</span></h1>
        </div>
    </div>

    <div class="wrapper">
        <div class="slider">
            <div class="slides">
                <input type="radio" name="navigator" id="rbtn1">
                <input type="radio" name="navigator" id="rbtn2">
                <input type="radio" name="navigator" id="rbtn3">
                <input type="radio" name="navigator" id="rbtn4">
                <input type="radio" name="navigator" id="rbtn5">
            
            <!-- IMAGE SLIDES -->
            <div class="slide first">
                <img src="../images/release1.png" alt="">
            </div>
    
            <div class="slide">
                <img src="../images/release2.png" alt="">
            </div>
    
            <div class="slide">
                <img src="../images/release3.png" alt="">
            </div>
    
            <div class="slide">
                <img src="../images/release4.png" alt="">
            </div>

            <div class="slide">
                <img src="../images/release5.png" alt="">
            </div>

            <!-- AUTO SWIPE NAVIGATORS -->
            <div class="auto-swipe">
                <div class="abtn1"></div>
                <div class="abtn2"></div>
                <div class="abtn3"></div>
                <div class="abtn4"></div>
                <div class="abtn5"></div>
            </div>
            </div>
        </div>
    </div>
    <div class="gradient2"></div>
    </section>

    <!-- TOP PICKS PAGE -->
    <section class="top_picks">
        <h1>TOP PICKS</h1>
        <div class="cards">
            <div class="card" id="top-pick1">
                <img src="../images/top2.png" alt="">
                <div class="card_text">
                    <p>BTS Official Lightstick<br>Version 4</p>
                    <p>₱2,500</p>
                </div>
            </div>
    
            <div class="card" id="top-pick2">
                <img src="../images/top1.jpg" alt="">
                <div class="card_text">
                    <p>TAEYEON INVU Album<br> INVU VERSION</p>
                    <p>₱2,000</p>
                </div>
            </div>
    
            <div class="card" id="top-pick3">
                <img src="../images/top3.jpg" alt="">
                <div class="card_text">
                    <p>SEVENTEEN Mingyu<br>Carat Land PC</p>
                    <p>₱1,800</p>
                </div>
            </div>
        </div>
        <a href="#products"><button>SHOP NOW</button></a>
    </section>

    <!-- PRODUCT LIST PAGE -->
    <section id="products">
        <h1>THE REVESHOPPE</h1>
        <div class="product_cards">
            <div class="product">
                <img src="../images/item1.png" alt="sample" class="image">
                <div class="product_text">
                    <p>WENDY Like Water<br>Album (Case Ver.)</p>
                    <p>₱1,000</p>
                </div>
            </div>

            <div class="product">
                <img src="../images/item2.png" alt="sample" class="image">
                <div class="product_text">
                    <p>MONSTA X No Limit<br>Album (Version 3)</p>
                    <p>₱780</p>
                </div>
            </div>

            <div class="product">
                <img src="../images/item3.png" alt="sample" class="image">
                <div class="product_text">
                    <p>STAYC Staydom A<br>Official Poster</p>
                    <p>₱400</p>
                </div>
            </div>

            <div class="product">
                <img src="../images/item4.jpg" alt="sample" class="image">
                <div class="product_text">
                    <p>SEVENTEEN Mingyu<br>Carat Land PC</p>
                    <p>₱1,800</p>
                </div>
            </div>

            <div class="product">
                <img src="../images/item5.png" alt="sample" class="image">
                <div class="product_text">
                    <p>Aespa 2022<br>Season's<br>Greetings</p>
                    <p>₱1,500</p>
                </div>
            </div>

            <div class="product">
                <img src="../images/item6.png" alt="sample" class="image">
                <div class="product_text">
                    <p>Red Velvet Official<br>Lightstick</p>
                    <p>₱2,000</p>
                </div>
            </div>

            <div class="product">
                <img src="../images/item7.png" alt="sample" class="image">
                <div class="product_text">
                    <p>BLACKPINK Born<br>Pink Random<br>Polaroid</p>
                    <p>₱600</p>
                </div>
            </div>

            <div class="product">
                <img src="../images/item8.jpg" alt="sample" class="image">
                <div class="product_text">
                    <p>TAEYEON INVU<br>Album (INVU Ver.)</p>
                    <p>₱1,800</p>
                </div>
            </div>

            <div class="product">
                <img src="../images/item9.png" alt="sample" class="image">
                <div class="product_text">
                    <p>EXO Chanyeol<br>Tempo Poster<br>(Vivace Ver.)</p>
                    <p>₱2,000</p>
                </div>
            </div>

            <div class="product">
                <img src="../images/item10.png" alt="sample" class="image">
                <div class="product_text">
                    <p>IU Love Poem<br>Tote Bag<br>(Gray Ver.)</p>
                    <p>₱550</p>
                </div>
            </div>

            <div class="product">
                <img src="../images/item11.png" alt="sample" class="image">
                <div class="product_text">
                    <p>SNSD Eau de<br>perfume set<br>(w/ 1 Random PC)</p>
                    <p>₱2,500</p>
                </div>
            </div>

            <div class="product">
                <img src="../images/item12.png" alt="sample" class="image">
                <div class="product_text">
                    <p>BTS Official<br>Lightstick<br>(Version 4)</p>
                    <p>₱2,500</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CHECKOUT FORM -->
    <section class="checkout">
        <h1>Checkout Form</h1>
        <form action="./checkoutForm.php" method="post" class="cform">
            <label for="prod_service" class="checkproduct"> Product: </label>
                <select name="prod_service" class="dropdown" required>
                    <option value="Select-Option"> Select Option </option>
                    <option value="Wendy-Like-Water"> WENDY Like Water Album (Case Version) </option>
                    <option value="MX-No-Limit"> MONSTA X No Limit Album (Version 3) </option>
                    <option value="STAYC-Poster-A"> STAYC Staydom A Official Poster </option>
                    <option value="Mingyu-CL-PC"> SEVENTEEN Mingyu Carat Land PC </option>
                    <option value="Aespa-2022-SG"> Aespa 2022 Season's Greetings </option>
                    <option value="Red-Velvet-LS"> Red Velvet Official Lightstick </option>
                    <option value="BP-Polaroid"> BLACKPINK Born Pink 1 Random Polaroid </option> 
                    <option value="INVU"> TAEYEON INVU Album (INVU Version) </option> 
                    <option value="Chanyeol-Tempo-Poster"> EXO Chanyeol Tempo Poster (Vivace Version) </option> 
                    <option value="IU-Tote-Bag"> IU Love Poem Tote Bag (Gray Version) </option> 
                    <option value="SNSD-Perfume"> SNSD Eau de perfume set (with 1 random PC) </option> 
                    <option value="BTS-LS4"> BTS Official Lightstick (Version 4) </option> 
                </select>
        
                    <div id="showWendy-Like-Water" class="item">
                        <img src="../images/item1.png"/> 
                        <span> WENDY Like Water Album (Case Version) </span>
                    </div>

                    <div id="showMX-No-Limit" class="item">
                        <img src="../images/item2.png"/> 
                        <span> MONSTA X No Limit Album (Version 3) </span>
                    </div>

                    <div id="showSTAYC-Poster-A" class="item">
                        <img src="../images/item3.png"/> 
                        <span> STAYC Staydom A Official Poster </span>
                    </div>

                    <div id="showMingyu-CL-PC" class="item">
                        <img src="../images/item4.jpg"/> 
                        <span> SEVENTEEN Mingyu Carat Land PC </span>
                    </div>

                    <div id="showAespa-2022-SG" class="item">
                        <img src="../images/item5.png"/> 
                        <span> Aespa 2022 Season's Greetings </span>
                    </div>

                    <div id="showRed-Velvet-LS" class="item">
                        <img src="../images/item6.png"/> 
                        <span> Red Velvet Official Lightstick </span>
                    </div>

                    <div id="showBP-Polaroid" class="item">
                        <img src="../images/item7.png"/> 
                        <span> BLACKPINK Born Pink 1 Random Polaroid </span>
                    </div>

                    <div id="showINVU" class="item">
                        <img src="../images/item8.jpg"/> 
                        <span> TAEYEON INVU Album (INVU Version) </span>
                    </div>

                    <div id="showChanyeol-Tempo-Poster" class="item">
                        <img src="../images/item9.png"/> 
                        <span> EXO Chanyeol Tempo Poster (Vivace Version) </span>
                    </div>

                    <div id="showIU-Tote-Bag" class="item">
                        <img src="../images/item10.png"/> 
                        <span> IU Love Poem Tote Bag (Gray Version) </span>
                    </div>

                    <div id="showSNSD-Perfume" class="item">
                        <img src="../images/item11.png"/> 
                        <span> SNSD Eau de perfume set (with 1 random PC) </span>
                    </div>

                    <div id="showBTS-LS4" class="item">
                        <img src="../images/item12.png"/> 
                        <span> BTS Official Lightstick (Version 4) </span>
                    </div>

                    <br>

                    <label for="quantity" class="checkquantity"> Quantity: </label>
                    <input type ="number" name="quantity" min="1" step="1" placeholder="Choose quantity" class="quantity" required> <br> <br> 
    
                    <button class="btn-checkout">Checkout</button>
                </center>
        </form>
        <div id="contact">
            <section class="developers">
                <h3>DEVELOPED BY</h3>
                <h3>John Kenneth Herrera</h3>
                <h3>Charrie Anne Nacor</h3>
            </section>
            <section class="email">
                <h3>thereveshoppe@gmail.com</h3>
                <h3>(0912) 345 6789</h3>
            </section>
            <section class="socmed">
                <h3><a href="https://www.facebook.com/RedVelvet" target="_blank">Facebook</a></h3>
                <h3><a href="https://www.instagram.com/redvelvet.smtown/" target="_blank">Instagram</a></h3>
                <h3><a href="https://twitter.com/RVsmtown" target="_blank">Twitter</a></h3>
            </section>
        </div>
    </section>

<!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <!-- Slider Javascript  -->
    <script type="text/javascript">
    var artist = document.getElementById('artist');
    var song = document.getElementById('song');
    var counter = 1;

    setInterval(function(){
        document.getElementById('rbtn' + counter).checked = true;
        if(counter == 1){
            artist.innerHTML = 'RED VELVET'
            song.textContent = 'BIRTHDAY'
            counter++;
            if(counter > 5) {
            counter = 1;
            }
        }else if(counter == 2){
            artist.innerHTML = 'NCT DREAM'
            song.textContent = 'CANDY'
            counter++;
            if(counter > 5) {
            counter = 1;
            }
        }else if(counter == 3){
            artist.innerHTML = 'NEWJEANS'
            song.textContent = 'DITTO'
            counter++;
            if(counter > 5) {
            counter = 1;
            }
        }else if(counter == 4){
            artist.innerHTML = 'ITZY'
            song.textContent = 'CHESHIRE'
            counter++;
            if(counter > 5) {
            counter = 1;
            }
        }else{
            artist.innerHTML = 'SHINEE MINHO'
            song.textContent = 'CHASE'
            counter++;
            if(counter > 5) {
            counter = 1;
            }
        }
    }, 4000);
    </script>
    
    <!-- Checkout Cards Javascript-->
    <script type="text/javascript">
        $('.dropdown').on('change', function() {
        var value = $(this).val(); 
        $("div.item").hide();
        $("#show"+value).show();
        });
    </script>

        <!-- Scroll Reveal Javascript -->
        <script type="text/javascript">
    gsap.from(".wendy", {
        scrollTrigger : {
        scrub: true
        },
        x: -200,
        })

    ScrollReveal({
        reset: true,
        distance: '-60px',
        duration: 2500,
        delay: 400

    });
        ScrollReveal().reveal('#hello, #everything, #products, #top-pick2, .top_picks, .checkout' , {delay: 3, origin: 'top'});
        ScrollReveal().reveal('#welcome' , {delay: 3, origin: 'bottom'});
        ScrollReveal().reveal('#shoppers, #top-pick1' , {delay: 3, origin: 'left'});
        ScrollReveal().reveal('#annyeong, #top-pick3' , {delay: 3, origin: 'right'});
    </script>
</body>
</html>
<?php
include 'includes/navigation-bar.php';
?>
<!-------------------- HomeBanner -------------------->

<!-------------------- HomeHero -------------------->
<div class="homehero">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="textdata">
                    <h1>Welcome To Radha Krishna Holidays</h1>
                    <p>Tour operator/agency for Nepal, Tibet and Bhutan in Kathmandu. We provide quality trips for our beloved customers in reasonable cost. As an adventure travel company we offer a wide range of tour and travel activities such as Nepal trekking, hiking, culture and sightseeing tour with professional guides (who can clearly describe the history and religious significant of the places), walking holidays in the low altitude to higher mountain peaks, wildlife tours, rafting, day hiking and many more. Our major operation destinations are Nepal, Tibet, Bhutan and kailash mansarovar yatra.</p>
                    <a href="" class="btn">Explore Now &#8594;</a>
                </div>

            </div>
            <div class="col-2">
                <img src="images/homepage/Home-hero-img.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<hr>
<!-------------------- Our Tour Destination -------------------->
<div class="tourdestination">
    <div class="container">
        <h2 class="titles">Our Tour Destination</h2>
        <div class="row">
            <div class="col-5">
                <a href="" class="btn-list">Nepal</a>
            </div>
            <div class="col-5">
                <a href="" class="btn-list">India</a>
            </div>
            <div class="col-5">
                <a href="" class="btn-list">Bhutan</a>
            </div>
            <div class="col-5">
                <a href="" class="btn-list">Tibet</a>
            </div>
            <div class="col-5">
                <a href="" class="btn-list">Outbound</a>
            </div>
        </div>
        <!-------------------- Our Tour Destination Description slide -------------------->
        <div class="tourdestinationdescription">
            <div class="row">
                <div class="slider">
                    <div class="slides">
                        <!--radio buttons start-->
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
                        <input type="radio" name="radio-btn" id="radio3">
                        <input type="radio" name="radio-btn" id="radio4">
                        <!--radio buttons end-->

                        <!--slide images start-->
                        <div class="slide first">
                            <div class="tourdestinationdescription">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="images/homepage/Country-Nepal.jpg" alt="">
                                    </div>
                                    <div class="col-2">
                                        <div class="textdata">
                                            <h1>Nepal Tour</h1>
                                            <p>Situated in the lap of the mighty Himalayas, the souvenir nation of Nepal is blessed with rich history and bottomless natural beauty. A travellers paradise overfilled with numerous opportunities for sightseeing travel, fascinating geographical marvel, every corner of Nepal tend to mesmerize the foreign visitors with the authentic and varied travel experiences that is purely irresistible as time goes by.</p>
                                            <a href="" class="btn">Explore Now &#8594;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="tourdestinationdescription">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="images/homepage/Country-India.jpg" alt="">
                                    </div>
                                    <div class="col-2">
                                        <div class="textdata">
                                            <h1>India Tour</h1>
                                            <p>Situated in the lap of the mighty Himalayas, the souvenir nation of Nepal is blessed with rich history and bottomless natural beauty. A travellers paradise overfilled with numerous opportunities for sightseeing travel, fascinating geographical marvel, every corner of Nepal tend to mesmerize the foreign visitors with the authentic and varied travel experiences that is purely irresistible as time goes by.</p>
                                            <a href="" class="btn">Explore Now &#8594;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="tourdestinationdescription">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="images/homepage/Country-Bhutan.jpg" alt="">
                                    </div>
                                    <div class="col-2">
                                        <div class="textdata">
                                            <h1>Bhutan Tour</h1>
                                            <p>Situated in the lap of the mighty Himalayas, the souvenir nation of Nepal is blessed with rich history and bottomless natural beauty. A travellers paradise overfilled with numerous opportunities for sightseeing travel, fascinating geographical marvel, every corner of Nepal tend to mesmerize the foreign visitors with the authentic and varied travel experiences that is purely irresistible as time goes by.</p>
                                            <a href="" class="btn">Explore Now &#8594;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="tourdestinationdescription">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="images/homepage/Country-Tibet.jpg" alt="">
                                    </div>
                                    <div class="col-2">
                                        <div class="textdata">
                                            <h1>Tibet Tour</h1>
                                            <p>Situated in the lap of the mighty Himalayas, the souvenir nation of Nepal is blessed with rich history and bottomless natural beauty. A travellers paradise overfilled with numerous opportunities for sightseeing travel, fascinating geographical marvel, every corner of Nepal tend to mesmerize the foreign visitors with the authentic and varied travel experiences that is purely irresistible as time goes by.</p>
                                            <a href="" class="btn">Explore Now &#8594;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--slide images end-->
                        <!--automatic navigation start-->
                        <div class="navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                        </div>
                        <!--automatic navigation end-->
                    </div>
                    <!--manual navigation start-->
                    <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
                    <!--manual navigation end-->

                    <!--image slider end-->

                    <script type="text/javascript">
                        var counter = 1;
                        setInterval(function() {
                            document.getElementById('radio' + counter).checked = true;
                            counter++;
                            if (counter > 4) {
                                counter = 1;
                            }
                        }, 5000);
                    </script>

                </div>
            </div>
        </div>

    </div>
</div>
<hr>
<!-------------------- Our Trekking Destination -------------------->
<div class="trekdestination">
    <div class="container">
        <h2 class="titles">Our Trekking Destination</h2>
        <div class="row">
            <div class="col-4">
                <a href="">
                    <img src="images/homepage/Trek-Annapurna.jpg" alt="">
                </a>
                <hr>
                <h4>Annapurna</h4>
                <p>Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="images/homepage/Trek-Dolkha.jpg" alt="">
                </a>
                <hr>
                <h4>Dolkha</h4>
                <p>Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="images/homepage/Trek-Dolpa.jpg" alt="">
                </a>
                <hr>
                <h4>Dolpa</h4>
                <p>Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
            </div>
            <div class="col-4">
                <a href="">
                    <img src="images/homepage/Trek-Everest.jpg" alt="">
                </a>
                <hr>
                <h4>Everest</h4>
                <p>Annapurna Circuit Trek is a popular classic trek of Nepal. Each year, more than 60,000 trekkers come for this trek from all around the globe. In this trek, you encircle the Annapurna massif and cover between 110-130 miles by walking.</p>
            </div>
        </div>
        <p><a href="" class="btn">View All &#8594;</a></p>
    </div>
</div>
<hr>
<!-------------------- Testimonial -------------------->
<div class="testimonial">
    <div class="container">
        <h2 class="titles">Testimonial</h2>
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Gladly saying, you guys are excellent. When I decided to make a Bhutan trip with you, I made the best choice. Hope to have another trip with you guys.</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="images/homepage/Testimonial-human1.jpg" alt="">
                <h3>Mr. Aashish Jha</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Gladly saying, you guys are excellent. When I decided to make a Bhutan trip with you, I made the best choice. Hope to have another trip with you guys.</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="images/homepage/Testimonial-human2.jpg" alt="">
                <h3>Mr. Aashish Jha</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Gladly saying, you guys are excellent. When I decided to make a Bhutan trip with you, I made the best choice. Hope to have another trip with you guys.</p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="images/homepage/Testimonial-human3.jpg" alt="">
                <h3>Mr. Aashish Jha</h3>
            </div>
        </div>
    </div>
</div>
<hr>
<!-------------------- Footer -------------------->
<?php
include 'includes/footer.php';
?>
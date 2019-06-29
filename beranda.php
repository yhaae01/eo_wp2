<div class="container">
    <!-- Script Jumbotron -->
    <div class="jumbotron text-center">	
        <p style="font-size: 50px;">Event Organizer Yo.Lo</p>
        <p style="font-size: 20px;">Mau pesta? Yo.Lo aja</p>
    </div>

    <!-- Script Carousel -->
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom:20px;">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="assets/img/carousel/1.jpg" alt="No Image" style="width:80%; margin-left:auto; margin-right:auto;">
                    </div>
                    <div class="item">
                        <img src="assets/img/carousel/2.jpg" alt="No Image" style="width:80%; margin-left:auto; margin-right:auto;">
                    </div>
                    <div class="item">
                        <img src="assets/img/carousel/3.jpg" alt="No Image" style="width:80%; margin-left:auto; margin-right:auto;">
                    </div>
                </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<!-- Script Footer -->
<div class="container-fluid" style="margin-left:-15px;margin-right:-15px">
    <h2 class="text-center" style="color: white;">Kontak</h2><br>
    <div class="row" style="color: white;">
        <div class="col-sm-5">
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="fa fa-map-marker"></span> Jalan Letjen T. B. Simatupang Kav. 88</p>
            <p><span class="fa fa-phone"></span> 0251 - 8624319</p>
            <p><span class="fa fa-envelope"></span> eo_yo.lo@gmail.com</p>
        </div>
        <div class="col-sm-7">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Nama" type="text" required>
                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Pesan Anda" rows="5"></textarea><br>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <button class="btn btn-default pull-right" type="submit">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</div>
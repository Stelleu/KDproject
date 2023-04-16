<section class=" text-white py-5 bg-img" >
    <div class="container pt-5">
        <div class="row gx-0 align-items-center">
            <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6  text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
                <h1 class="fw-bold fs-1 mb-5 text-white">Crafting project specific solutions with expertise.</h1>
                <p class="lead mb-7 fs-3 pe-5 pb-5 text-white">We’re a creative company that focuses on establishing long-term relationships with customers.</p>
                <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                    <span><a href="#" class="btn btn-light btn-lg  fw-bold fs-6 btn-white py-3 px-4 rounded-pill me-2">Explore Now</a></span>
                    <span><a href="#" class="btn btn-outline-light btn-lg  fw-bold fs-6 py-3 px-4 rounded-pill">Contact Us</a></span>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="View/assets/img/about23.jpg" class="d-block w-100" alt="cc">
                        </div>
                        <div class="carousel-item">
                            <img src="View/assets/img/about21.jpg" class="d-block w-100" alt="cc">
                        </div>
                        <div class="carousel-item">
                            <img src="View/assets/img/about21.jpg" class="d-block w-100" alt="cc">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
<!--                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                        </svg>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
<!--                        <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                        </svg>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-5">
    <div class="container">
        <div class="row pb-5 text-center mx-auto px-5">
            <div class="col-lg mx-auto px-5 text-center">
                <h2 class=" text-uppercase text-purple fs-6 fw-bold mb-3 ">Blog</h2>
                <h3 class="fw-bold fs-2 px-5 mx-5 mb-6">Check out some of our awesome projects with creative ideas and great design.</h3>
            </div>
        </div>
        <div class="row">
            <div class="shape bg-dot primary rellax w-17 h-20" data-rellax-speed="1" style="top: 0; left: -1.7rem;"></div>
            <div class="owl-carousel owl-theme">
                <?php foreach ($articles as $article){
                    $date = date_create($article["LastMod"]) ?>
                    <div class="item">
                        <div class="card" style="width: 25rem;">
                            <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
                            <div class="card-body py-5 ">
                                <h3 class="card-title"><? echo $article["Title"]?></h3>
                                <p class="card-text " ><? echo $article["Introduction"]?></p>
                            </div>
                            <div class="card-footer py-3 bg-white text-body-secondary">
                                <ul class="d-flex mb-0">
                                    <li class="card-date me-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-calendar2-week" viewBox="0 0 16 16">
                                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                                            <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                        </svg>
                                <span><?echo date_format($date, 'd M Y' ) ?></span>
                               </li>
                                    <li class="card-theme">
                                        <a>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                                                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                                             </svg>
                                            <span><? echo $article["KeyWords"]?></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Article | House Ilmu Indonesia</title>
        <link rel="icon" href="../assets/img/logo.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../assets/css/navbar-footer.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/article.css">
    </head>
<body>
	<nav class="navbar navbar-expand-md" style="background-color: #FFF7E9 ;">
        <div class="navbar-container container-sm ">
            <div class="nav-img d-flex flex-row justify-content-around justify-content-lg-start align-items-center">
                <img src="../assets/img/logo.png" alt="">
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="nav-bars"><i class="bi bi-list fs-1" style="color: #FE9000;"></i></span>
                </button>
            </div>
            <div class="collapse navbar-collapse py-3 " id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto text-center d-flex align-items-center justify-content-center fw-semibold" data-aos="fade-left">
                    <a class="nav-link" aria-current="page" href="../">Home</a>
                    <a class="nav-link mx-0 mx-md-1 mx-lg-3" href="../programme/">Programme</a>
                    <a class="nav-link" href="../partnership/">Partnership</a>
                    <a class="nav-link mx-0 mx-md-1 mx-lg-3 active" href="">Article</a>
                    <a class="nav-link" href="../career/">Career</a>
                    <a class="nav-link mx-0 mx-md-1 mx-lg-3" href="../about-us/">About Us</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="filter container-xxl mt-5">
        <div class="filter-row container-xl d-none d-md-flex flex-wrap justify-content-around align-items-center rounded-4 py-3 px-4 my-4 list-unstyled" style="background-color: #1746A2;">
            <p class="m-0" style="color: #FE9000;">Topic</p>
            <li class="btn-list active" role="button" data-filter="*">All</li>
            <li class="btn-list" data-filter=".business">Business</li>
            <li class="btn-list" data-filter=".technology">Technology</li>
            <li class="btn-list" data-filter=".marketing">Marketing</li>
            <li class="btn-list" data-filter=".product">Product</li>
            <li class="btn-list" data-filter=".humancapital">Human Capital</li>
        </div>

        <div class="filter-select container-xl d-flex d-md-none justify-content-center align-items-center">
            <select id="filterSelect">
                <option value="none">All</option>
                <option value="business">Business</option>
                <option value="technology">Technology</option>
                <option value="marketing">Marketing</option>
                <option value="product">Product</option>
                <option value="humancapital">Human Capital</option>
            </select>
            <i class="fa-solid fa-chevron-down"></i>
        </div>

        <div class="articles-container container-fluid my-5 p-0">
            <div class="articles d-flex container-xxl flex-wrap justify-content-evenly align-items-end p-0">
                <div id="business" data-item="business" class="articles-list business col-12 col-md-5 col-lg-5 col-xl-3 flex-column justify-content-start align-items-start p-3 my-2 mx-md-4 mx-lg-4 mx-xl-5 rounded-4" style="background-color: #FFDD95;">
                    <img class="img-fluid p-2 my-2" src="../assets/img/tes.jpg" alt="">
                    <h5 class="my-2">Business</h5>
                    <p class="py-4 mb-4">Hola Kawaners! Saat ini, banyak orang merasa sulit untuk mencapai kesuksesan tanpa memiliki keterampilan yang memadai. Oleh karena itu, Hi-Min mau berbagi beberapa tips mudah untuk meningkatkan skill development untuk mencapai tujuan dan menjadi lebih sukses.</p>
                    <div class="footnote d-flex flex-row justify-content-start align-items-center p-0">
                        <img class="img-fluid" src="../assets/img/logo.png" alt="">
                        <div class="footnote-tag d-flex flex-column p-0 m-0">
                            <h6 class="p-0 m-0">House Ilmu</h6>
                            <p class="p-0 m-0">5 November 2023</p>
                        </div>
                    </div>
                </div>
                <div id="technology" data-item="technology" class="articles-list technology col-12 col-md-5 col-lg-5 col-xl-3 flex-column justify-content-start align-items-start p-3 my-2 mx-md-4 mx-lg-4 mx-xl-5 rounded-4" style="background-color: #FFDD95;">
                    <img class="img-fluid p-2 my-2" src="../assets/img/tes.jpg" alt="">
                    <h5 class="my-2">Technology</h5>
                    <p class="py-4 mb-4">Hola Kawaners! Saat ini, banyak orang merasa sulit untuk mencapai kesuksesan tanpa memiliki keterampilan yang memadai. Oleh karena itu, Hi-Min mau berbagi beberapa tips mudah untuk meningkatkan skill development untuk mencapai tujuan dan menjadi lebih sukses.</p>
                    <div class="footnote d-flex flex-row justify-content-start align-items-center p-0">
                        <img class="img-fluid" src="../assets/img/logo.png" alt="">
                        <div class="footnote-tag d-flex flex-column p-0 m-0">
                            <h6 class="p-0 m-0">House Ilmu</h6>
                            <p class="p-0 m-0">5 November 2023</p>
                        </div>
                    </div>
                </div>
                <div id="marketing" data-item="marketing" class="articles-list marketing col-12 col-md-5 col-lg-5 col-xl-3 flex-column justify-content-start align-items-start p-3 my-2 mx-md-4 mx-lg-4 mx-xl-5 rounded-4" style="background-color: #FFDD95;">
                    <img class="img-fluid p-2 my-2" src="../assets/img/tes.jpg" alt="">
                    <h5 class="my-2">Marketing</h5>
                    <p class="py-4 mb-4">Hola Kawaners! Saat ini, banyak orang merasa sulit untuk mencapai kesuksesan tanpa memiliki keterampilan yang memadai. Oleh karena itu, Hi-Min mau berbagi beberapa tips mudah untuk meningkatkan skill development untuk mencapai tujuan dan menjadi lebih sukses.</p>
                    <div class="footnote d-flex flex-row justify-content-start align-items-center p-0">
                        <img class="img-fluid" src="../assets/img/logo.png" alt="">
                        <div class="footnote-tag d-flex flex-column p-0 m-0">
                            <h6 class="p-0 m-0">House Ilmu</h6>
                            <p class="p-0 m-0">5 November 2023</p>
                        </div>
                    </div>
                </div>
                <div id="product" data-item="product" class="articles-list product col-12 col-md-5 col-lg-5 col-xl-3 flex-column justify-content-start align-items-start p-3 my-2 mx-md-4 mx-lg-4 mx-xl-5 rounded-4" style="background-color: #FFDD95;">
                    <img class="img-fluid p-2 my-2" src="../assets/img/tes.jpg" alt="">
                    <h5 class="my-2">Product</h5>
                    <p class="py-4 mb-4">Hola Kawaners! Saat ini, banyak orang merasa sulit untuk mencapai kesuksesan tanpa memiliki keterampilan yang memadai. Oleh karena itu, Hi-Min mau berbagi beberapa tips mudah untuk meningkatkan skill development untuk mencapai tujuan dan menjadi lebih sukses.</p>
                    <div class="footnote d-flex flex-row justify-content-start align-items-center p-0">
                        <img class="img-fluid" src="../assets/img/logo.png" alt="">
                        <div class="footnote-tag d-flex flex-column p-0 m-0">
                            <h6 class="p-0 m-0">House Ilmu</h6>
                            <p class="p-0 m-0">5 November 2023</p>
                        </div>
                    </div>
                </div>
                <a href="category/human-capital/article1">
                                   <div id="humancapital" data-item="humancapital" class="articles-list humancapital col-12 col-md-5 col-lg-5 col-xl-3 flex-column justify-content-start align-items-start p-3 my-2 mx-md-4 mx-lg-4 mx-xl-5 rounded-4" style="background-color: #FFDD95;">
                    <img class="img-fluid p-2 my-2" src="../assets/img/tes.jpg" alt="">
                    <h5 class="my-2">Humancapital</h5>
                    <p class="py-4 mb-4">Hola Kawaners! Saat ini, banyak orang merasa sulit untuk mencapai kesuksesan tanpa memiliki keterampilan yang memadai. Oleh karena itu, Hi-Min mau berbagi beberapa tips mudah untuk meningkatkan skill development untuk mencapai tujuan dan menjadi lebih sukses.</p>
                    <div class="footnote d-flex flex-row justify-content-start align-items-center p-0">
                        <img class="img-fluid" src="../assets/img/logo.png" alt="">
                        <div class="footnote-tag d-flex flex-column p-0 m-0">
                            <h6 class="p-0 m-0">House Ilmu</h6>
                            <p class="p-0 m-0">5 November 2023</p>
                        </div>
                    </div>
                </div> 
                <a>

            </div>
        </div>
    </section>


    <div class="border border-1 border-dark"></div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
        <script class="script-filter">
        $(document).ready(function() {
            var $grid = $(".articles").isotope({
                itemSelector: ".articles-list",
                layoutMode: "masonry",
                percentPosition: true,
            });

            $(".filter-row li").click(function (){
                $(".filter-row li").removeClass("active");
                $(this).addClass("active");

                var data = $(this).attr("data-filter");
                $grid.isotope({
                    filter: data,
                });
            });
        });
        </script>
    <script>
        const filterSelect = document.getElementById('filterSelect');
        const articlesContainer = document.querySelector('.articles-container');

        filterSelect.addEventListener('change', function() {
        const selectedValue = this.value;

        const articles = articlesContainer.querySelectorAll('.articles-list');

        articles.forEach(article => {
        const articleId = article.id;
        if (selectedValue === 'none') {
                article.style.display = 'flex';
            } else if (articleId === selectedValue) {
                article.style.display = 'flex';
            } else {
                article.style.display = 'none';
            }
            });
        });
    </script>
</body>
<footer>
    <section class="footer-container container-fluid" style="background-color: #FFDD95;">
        <div class="footer-info container-xl d-flex flex-column flex-md-row justify-content-around align-items-start">
            <img class="col-12 col-md-3 mx-1 px-1" src="../assets/img/logo.png" alt="">
            <div class="footer-nav col-12 col-md-3 d-flex flex-column align-items-start mx-1 px-1">
                <h5 class="py-3">SITEMAP</h5>
                <a class="my-1" href="../">Home</a>
                <a class="my-1" href="../programme">Programme</a>
                <a class="my-1" href="../partnership">Partnership</a>
                <a class="my-1" href="../article">Article</a>
                <a class="my-1" href="../career">Career</a>
                <a class="my-1" href="../about-us">About us</a>
            </div>
            <div class="footer-sosmed col-12 col-md-3 d-flex flex-column align-items-start mx-1 px-1">
                <h5 class="py-3">SOCIAL MEDIA</h5>
                <a class="my-1" href="#">Facebook</a>
                <a class="my-1" href="#">LinkedIn</a>
                <a class="my-1" href="#">Instagram</a>
                <a class="my-1" href="#">Twitter</a>
                <a class="my-1" href="#">Tiktok</a>
            </div>
            <div class="footer-contact col-12 col-md-3 d-flex flex-column align-items-start mx-1 px-1">
                <h5 class="py-3">HEAD OFFICE</h5>
                <p class="mb-5">Xilliams Corner Wine © 2017. 1112 A Market St # Ste B22, Charlottesville, CA 45565</p>
                <h5 class="py-3">NEWS LETTER</h5>
                <p class="">Enter your email address</p>
            </div>
        </div>
        <div class="footer-contacts container-xl d-flex flex-column flex-md-row justify-content-center align-items-start">
            <p class=""><a class="col-12 col-md-4 mx-1 my-1 " href="#">houseilmu@gmail.com </a>|</p>
            <p><a class="col-12 col-md-4 mx-1 my-1 " href="#">(123) 456-7890 </a>|</p>
            <p class="col-12 col-md-6 col-lg-4 mx-1  ">&copy; 2024 House Ilmu All rights reserved.</p>
        </div>
    </section>
</footer>
</html>
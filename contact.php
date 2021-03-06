<!DOCTYPE html>
<html>

<head>
    <title>SISN - Software Information System Nusantara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/animscroll.css" rel="stylesheet">
</head>

<body>

    <header id="header" class="fixed-top bg-white p-3 shadow-sm">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <img src="img/sisn-logo.png" alt="PT Software Information System Nusantara">
                </a>

                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="/" class="nav-link" aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Profile</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Solution</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Product</a></li>
                    <li class="nav-item"><a href="#" class="nav-link active">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main id="main">
        <div id="contact" class="p-5">
            <div class="container">
                <h2 class="display-6 fw-light mb-5">CONTACT</h2>
                
                <div class="row g-5">
                    <div class="col-md-7 col-lg-8">
                        <form class="needs-validation" novalidate="">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="fullName" placeholder="" value=""
                                        required="">
                                    <div class="invalid-feedback">
                                        Valid full name is required.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="email@yourcompany.com" required="">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="company" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="company" placeholder="" value=""
                                        required="">
                                    <div class="invalid-feedback">
                                        Valid company is required.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="messages" class="form-label">Messages</label>
                                    <textarea class="form-control" id="messages" rows="8" placeholder=""></textarea>
                                </div>
                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn" type="submit">Send Message</button>
                        </form>
                    </div>

                    <div class="col-md-5 col-lg-4 p-4 bg-light border order-md-last">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-primary">Our Location</span>
                        </h4>
                        <div class="mb-5">
                            <h5>PT. Software Information System Nusantara</h5>
                            Grand Slipi Tower, 18th Floor <br>
                            Jl. Jend. S. Parman Kav. 22-24, Slipi <br>
                            Jakarta 11480, Indonesia <br><br>

                            <table cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td>Phone</td>
                                        <td style="width:20px;text-align:center;">:</td>
                                        <td>+62 21 292 52295</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td style="width:20px;text-align:center;">&nbsp;</td>
                                        <td>+62 21 292 52296</td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td style="width:20px;text-align:center;">&nbsp;</td>
                                        <td>+62 21 292 52297</td>
                                    </tr>
                                    <tr>
                                        <td>Fax</td>
                                        <td style="width:20px;text-align:center;">:</td>
                                        <td>+62 21 292 52293</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <iframe scrolling="no" marginheight="0" marginwidth="0"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.478984149356!2d106.79881200000001!3d-6.20036499999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6be8afb04df%3A0x227704f00aab4fc3!2sGrand+Slipi+Tower%2CJl.+Letnan+Jenderal+S.+Parman%2C+Slipi%2C+Palmerah%2C+West+Jakarta+City+11480%2C+Indonesia!5e0!3m2!1sen!2s!4v1407288782725"
                                height="220" frameborder="0" style="width: 100%;"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <footer class="text-light p-3">
        <div class="container">
            <div class="text-center fw-light">
                Copyright 2021 &copy; PT Software Information System Nusantara
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/animscroll.js"></script>
    <script>
        $(document).ready(function () {
            $(this).scrollTop(0);
        });

        let w = window.innerWidth;
        let h = window.innerHeight;
        let headerHeight = document.getElementById('header').offsetHeight;

        function jumbotronBtn() {
            window.scrollTo(0, (h - headerHeight));
        }

        /* MAIN MARGIN TOP */
        document.getElementById("main").style.marginTop = headerHeight + "px";

        /* JUMBOTRON */
        document.getElementById("jumbotron").style.height = (window.innerHeight - headerHeight) + "px";

    </script>

</body>

</html>
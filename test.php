<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg" href="Images/logo-dental.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7528449088.js"></script>
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">
    <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all">
    <link rel="stylesheet" href="Css/owl.carousel.min.css">
    <link rel="stylesheet" href="Css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="Css/style.css">
</head>
<body>
    <header>
        <div class="ad-top" style="background-image: url(Images/banner-header.svg);"></div>
        <div class="fixed">
            <div class="contacts">
                <div class="container">
                    <p class="d-flex">
                        <span class="left">
                            <a href="ad.html" class="ad">Saytda Reklam</a>
                            <a href="contact.html" class="contact">Əlaqə</a>
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-instagram-square"></i>
                            <a href="" class="android">
                                <img src="Images/android.svg" alt="">
                            </a>
                            <a href="" class="apple">
                                <img src="Images/apple.svg" alt="">
                            </a>
                        </span>
                        <span class="ml-auto right">
                            <a href="bartychat.html" class="chat">
                                <img src="Images/chat.svg">
                                <img src="Images/chat-red.svg" class="hover">
                            </a>
                            <span class="drop-down">
                                <select class="select lang">
                                    <option value="AZ" selected class="AZ"></option>
                                    <option value="RU" class="RU"></option>
                                </select> 
                            </span>
                        </span>
                    </p>
                </div>
            </div>
            <div class="menu">
                <div class="container d-flex">
                    <div class="logo">
                        <a href="index.html" class="header-logo">
                            <img style="width130px; height 42.39px; margin-top:6px;" src="Images/logo1.png" alt="logo">
                        </a>
                    </div>
                    <div class="search mx-auto" style="width:88%;">
                        <input type="search" placeholder="Barty'də Axtar">
                        <select name="" id="" class="cities">
                            <option value="">Bütün Kateqoriyalar</option>
                            <option value="">Bakı</option>
                        </select>
                        <p class="text-center ml-auto">
                            <img src="Images/search.svg">
                        </p>
                    </div>
                    <!--
                    <div class="right text-center">
                        <div class="login">
                            <div class="login-container text-center">
                                <a href="login.html">
                                    <img src="Images/user-icon.svg" alt="">
                                    <img src="Images/user-red.svg" class="red" alt="">
                                    <b>Giriş</b>
                                </a>
                                <i class="fas fa-angle-down"></i>
                                <div class="login-dropdown">
                                    <nav>
                                        <ul>
                                            <li>
                                                <p>
                                                    <a href="profile.html">Profil Ayarları</a>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <a href="myads.html">Mənim Elanlarım</a>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <a href="bartychat.html">BartyChat</a>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <a href="choosenads.html">Seçilmiş Elanlar</a>
                                                </p>
                                            </li>
                                            <li>
                                            <li>
                                                <p>
                                                    <a href="logout.html">Çıxış</a>
                                                </p>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="modal"></div>
                        </div>
                        <!--
                        <div class="register-dropdown">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">
                                        <b>Giriş</b>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">
                                        <b>Qeydiyyat</b>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                    <div class="fb-google">
                                        <div class="col-md-6 fb">
                                            <img src="Images/Facebook-register.svg" alt="">
                                        </div>
                                        <div class="col-md-6 google">
                                            <img src="Images/Google-register.svg" alt="">
                                        </div>
                                    </div>
                                    <form action="" method="post" class="login-form">
                                        <div class="name">
                                            <label for="name">Telefon və ya E-mail
                                                <span class="asteriks">*</span>
                                            </label>
                                            <input type="text" required name="name" id="">
                                        </div>
                                        <div class="password">
                                            <label for="password">Şifrəniz
                                                <span class="asteriks">*</span>
                                            </label>
                                            <input type="password" required name="password" id="">
                                        </div>
                                        <input type="submit" value="Giriş" class="submit mx-auto col-6">
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <div class="fb-google">
                                        <div class="col-md-6 fb">
                                            <img src="Images/Facebook-register.svg" alt="">
                                        </div>
                                        <div class="col-md-6 google">
                                            <img src="Images/Google-register.svg" alt="">
                                        </div>
                                    </div>
                                    <form action="" method="post" class="register-form">
                                        <div class="name">
                                            <label for="name">Adınız
                                                <span class="asteriks">*</span>
                                            </label>
                                            <input type="text" required name="name" id="">
                                        </div>
                                        <div class="phone-email">
                                            <label for="phone-email">Telefon və ya E-mail
                                                <span class="asteriks">*</span>
                                            </label>
                                            <input type="text" required name="phone-email" id="">
                                        </div>
                                        <div class="password">
                                            <label for="password">Şifrəniz
                                                <span class="asteriks">*</span>
                                            </label>
                                            <input type="password" required name="password" id="">
                                        </div>
                                        <div class="re-password">
                                            <label for="re-password">Şifrənizi təsdiq edin
                                                <span class="asteriks">*</span>
                                            </label>
                                            <input type="password" required name="re-password" id="">
                                        </div>
                                        <input type="submit" value="Qeydiyyat" class="submit mx-auto col-6">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <p class="addAd">
                            <a href="addad.html">Elan Yerləşdir</a>
                        </p>
                    </div>
                    -->
                </div>
            </div>
            <div class="menu-mobile">
                <div class="container">
                    <div class="top d-flex">
                        <div class="logo">
                            <a href="index.html">
                                <img src="Images/logo.svg">
                            </a>
                        </div>
                        <div class="user">
                            <a href="myads.html">
                                <img src="Images/login-user.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="search">
                        <input type="search" placeholder="Barty'də Axtar">
                        <p class="text-center ml-auto">
                            <img src="Images/search.svg">
                        </p>
                    </div>
                </div>
                <!--
                <div class="register-dropdown">
                    <ul class="nav nav-tabs" id="myTab-mobile" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="login-mobile-tab" data-toggle="tab" href="#login-mobile" role="tab" aria-controls="login-mobile" aria-selected="true">
                                <b>Giriş</b>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="register-mobile-tab" data-toggle="tab" href="#register-mobile" role="tab" aria-controls="register-mobile" aria-selected="false">
                                <b>Qeydiyyat</b>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="login-mobile" role="tabpanel" aria-labelledby="login-mobile-tab">
                            <div class="fb-google">
                                <div class="col-md-6 fb">
                                    <img src="Images/Facebook-register.svg" alt="">
                                </div>
                                <div class="col-md-6 google">
                                    <img src="Images/Google-register.svg" alt="">
                                </div>
                            </div>
                            <form action="" method="post" class="login-form">
                                <div class="name">
                                    <label for="name">Telefon və ya E-mail
                                        <span class="asteriks">*</span>
                                    </label>
                                    <input type="text" required name="name" id="">
                                </div>
                                <div class="password">
                                    <label for="password">Şifrəniz
                                        <span class="asteriks">*</span>
                                    </label>
                                    <input type="password" required name="password" id="">
                                </div>
                                <input type="submit" value="Göndər" class="submit mx-auto col-6">
                            </form>
                        </div>
                        <div class="tab-pane fade" id="register-mobile" role="tabpanel" aria-labelledby="register-mobile-tab">
                            <div class="fb-google">
                                <div class="col-md-6 fb">
                                    <img src="Images/Facebook-register.svg" alt="">
                                </div>
                                <div class="col-md-6 google">
                                    <img src="Images/Google-register.svg" alt="">
                                </div>
                            </div>
                            <form action="" method="post" class="register-form">
                                <div class="name">
                                    <label for="name">Adınız
                                        <span class="asteriks">*</span>
                                    </label>
                                    <input type="text" required name="name" id="">
                                </div>
                                <div class="phone-email">
                                    <label for="phone-email">Telefon və ya E-mail
                                        <span class="asteriks">*</span>
                                    </label>
                                    <input type="text" required name="phone-email" id="">
                                </div>
                                <div class="password">
                                    <label for="password">Şifrəniz
                                        <span class="asteriks">*</span>
                                    </label>
                                    <input type="password" required name="password" id="">
                                </div>
                                <div class="re-password">
                                    <label for="re-password">Şifrənizi təsdiq edin
                                        <span class="asteriks">*</span>
                                    </label>
                                    <input type="password" required name="re-password" id="">
                                </div>
                                <input type="submit" value="Göndər" class="submit mx-auto col-6">
                            </form>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </div>
        <div class="categories-container">
            <div class="container">
                <div class="category-ads owl-carousel">
                    <div class="category-ad ca1">
                        <img src="Images/inhouse-reklam.png">
                    </div>
                    <div class="category-ad ca2">
                        <img src="Images/Artboard 3.png">
                    </div>
                    <div class="category-ad ca3">
                        <img src="Images/inhouse-reklam.png">
                    </div>
                    <div class="category-ad ca4">
                        <img src="Images/Artboard 3.png">
                    </div>
                    <div class="category-ad ca5">
                        <img src="Images/inhouse-reklam.png">
                    </div>
                    <div class="category-ad ca6">
                        <img src="Images/Artboard 3.png">
                    </div>
                    <div class="category-ad ca7">
                        <img src="Images/inhouse-reklam.png">
                    </div>
                    <div class="category-ad ca8">
                        <img src="Images/Artboard 3.png">
                    </div>
                    <div class="category-ad ca9">
                        <img src="Images/inhouse-reklam.png">
                    </div>
                    <div class="category-ad ca10">
                        <img src="Images/Artboard 3.png">
                    </div>
                    <div class="category-ad ca11">
                        <img src="Images/inhouse-reklam.png">
                    </div>
                </div>
            </div>
            <div class="categories">
                <div class="container">
                    <p class="categories-text">
                        <b>Kateqoriyalar</b>
                    </p>
                    <div class="category-container draggable d-flex">
                        <div class="category active" id="ca1">
                            <p>
                                <img src="Images/neqliyyat.png">
                                <p class="name text-center">
                                    <b>Nəqliyyat</b>
                                </p>
                                <p class="line"></p>
                            </p>
                        </div>
                        <div class="category line2" id="ca2">
                            <p>
                                <img src="Images/dasinmaz.png">
                                <p class="name text-center">
                                    <b>Daşınmaz Əmlak</b>
                                </p>
                                <p class="line"></p>
                            </p>
                        </div>
                        <div class="category" id="ca3">
                            <p>
                                <img src="Images/elektronika.png">
                                <p class="name text-center">
                                    <b>Elektronika</b>
                                </p>
                                <p class="line"></p>
                            </p>
                        </div>
                        <div class="category line2" id="ca4">
                            <p>
                                <img src="Images/ev ve bag.png">
                                <p class="name text-center">
                                    <b>Ev və Bağ üçün</b>
                                </p>
                                <p class="line"></p>
                            </p>
                        </div>
                        <div class="category" id="ca5">
                            <p>
                                <img src="Images/xidmetler.png">
                                <p class="name text-center">
                                    <b>Xidmətlər</b>
                                </p>
                                <p class="line"></p>
                            </p>
                        </div>
                        <div class="category" id="ca6">
                            <p>
                                <img src="Images/sexsi esyalar.png">
                                <p class="name text-center">
                                    <b>Şəxsi Əşyalar</b>
                                </p>
                                <p class="line"></p>
                            </p>
                        </div>
                        <div class="category" id="ca7">
                            <p>
                                <img src="Images/usaq.png">
                                <p class="name text-center">
                                    <b>Uşaq Aləmi</b>
                                </p>
                                <p class="line"></p>
                            </p>
                        </div>
                        <div class="category" id="ca8">
                            <p>
                                <img src="Images/heyvanlar.png">
                                <p class="name text-center">
                                    <b>Heyvanlar</b>
                                </p>
                                <p class="line"></p>
                            </p>
                        </div>
                        <div class="category" id="ca9">
                            <p>
                                <img src="Images/is ve biznes.png">
                                <p class="name text-center">
                                    <b>İş və Biznes</b>
                                </p>
                                <p class="line"></p>
                            </p>
                        </div>
                        <div class="category line2" id="ca10">
                            <p>
                                <img src="Images/magazalar.png">
                                <p class="name text-center">
                                    <b>Mağazalar və Şirkətlər</b>
                                </p>
                                <p class="line"></p>
                            </p>
                        </div>
                        <div class="category" id="ca11">
                            <p>
                                <img src="Images/xeyriyye.png">
                                <p class="name text-center">
                                    <b>Xeyriyyə</b>
                                </p>
                                <p class="line"></p>
                            </p>
                        </div>
                    </div>
                    <div class="subcategories-container">
                        <div class="subcategories ca1">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca2">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar6516516</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər651651654</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca3">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca4">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca5">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca6">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca7">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca8">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca9">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca10">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca11">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="categories-mobile">
                <div class="container">
                    <p class="categories-text">
                        <b>Kateqoriyalar</b>
                    </p>
                    <div class="category-container draggable d-flex">
                        <div class="scrollBox-mini" id="box">
                            <div class="contentBox" id="contentBox">
                                <div class="category" id="ca1">
                            <p>
                                <img src="Images/neqliyyat.png">
                                <p class="name text-center">
                                    <b>Nəqliyyat</b>
                                </p>
                                <p class="line"></p>
                            </p>
                                </div>
                                <div class="category line2" id="ca2">
                            <p>
                                <img src="Images/dasinmaz.png">
                                <p class="name text-center">
                                    <b>Daşınmaz Əmlak</b>
                                </p>
                                <p class="line"></p>
                            </p>
                                </div>
                                <div class="category" id="ca3">
                            <p>
                                <img src="Images/elektronika.png">
                                <p class="name text-center">
                                    <b>Elektronika</b>
                                </p>
                                <p class="line"></p>
                            </p>
                                </div>
                                <div class="category line2" id="ca4">
                            <p>
                                <img src="Images/ev ve bag.png">
                                <p class="name text-center">
                                    <b>Ev və Bağ üçün</b>
                                </p>
                                <p class="line"></p>
                            </p>
                                </div>
                                <div class="category" id="ca5">
                            <p>
                                <img src="Images/xidmetler.png">
                                <p class="name text-center">
                                    <b>Xidmətlər</b>
                                </p>
                                <p class="line"></p>
                            </p>
                                </div>
                                <div class="category" id="ca6">
                            <p>
                                <img src="Images/sexsi esyalar.png">
                                <p class="name text-center">
                                    <b>Şəxsi Əşyalar</b>
                                </p>
                                <p class="line"></p>
                            </p>
                                </div>
                                <div class="category" id="ca7">
                            <p>
                                <img src="Images/usaq.png">
                                <p class="name text-center">
                                    <b>Uşaq Aləmi</b>
                                </p>
                                <p class="line"></p>
                            </p>
                                </div>
                                <div class="category" id="ca8">
                            <p>
                                <img src="Images/heyvanlar.png">
                                <p class="name text-center">
                                    <b>Heyvanlar</b>
                                </p>
                                <p class="line"></p>
                            </p>
                                </div>
                                <div class="category" id="ca9">
                            <p>
                                <img src="Images/is ve biznes.png">
                                <p class="name text-center">
                                    <b>İş və Biznes</b>
                                </p>
                                <p class="line"></p>
                            </p>
                                </div>
                                <div class="category line2" id="ca10">
                            <p>
                                <img src="Images/magazalar.png">
                                <p class="name text-center">
                                    <b>Mağazalar və Şirkətlər</b>
                                </p>
                                <p class="line"></p>
                            </p>
                                </div>
                                <div class="category" id="ca11">
                            <p>
                                <img src="Images/xeyriyye.png">
                                <p class="name text-center">
                                    <b>Xeyriyyə</b>
                                </p>
                                <p class="line"></p>
                            </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="subcategories-container">
                        <div class="subcategories ca1">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca2">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar6516516</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər651651654</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca3">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca4">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca5">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca6">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca7">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca8">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca9">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca10">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="subcategories ca11">
                            <p class="all-subcategories">
                                <a href="products.html">Bütün elanlar</a>
                            </p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="products.html">Ehtiyat hissələri və aksesuarlar</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtomobillər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Motosikletlər və mopedlər</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Avtobuslar və xüsusi texnika</a>
                                    </li>
                                    <li>
                                        <a href="products.html">Su nəqliyyatı</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="to-top">
            <p class="text-center">
                <i class="fas fa-angle-up"></i>
            </p>
        </div>
        <div class="minichat">
            <div class="left" style="display: none;">
                <div class="messages">
                    <div class="profile-details d-flex">
                        <div class="profile-image">
                            <img src="Images/user photo.svg">
                        </div>
                        <div class="profile-texts">
                            <p class="name-surname">
                                <b>Ad Soyad</b>
                            </p>
                            <p class="online">
                                <b>Online</b>
                            </p>
                            <p class="close">
                                <i class="fas fa-times"></i>
                            </p>
                        </div>
                    </div>
                    <p class="chatDate text-center">22.07.2020</p>
                    <div class="messages-container d-flex flex-column">
                        <div class="scrollBox-mini" id="box">
                            <div class="contentBox" id="contentBox">
                                <div class="message-receive d-flex">
                                    <div class="profile-image">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <p class="message-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas erat elit, vehicula velleo in, auctor vehicula urna.<span class="message-date">1:47 PM</span></p>
                                </div>
                                <div class="message-send ml-auto d-flex">
                                    <p>Lorem ipsum dolor sit amet, consectetur ad</p>
                                    <span class="message-date">1:47 PM</span>
                                </div>
                                <div class="message-receive d-flex">
                                    <div class="profile-image">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <p class="message-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<span class="message-date">1:47 PM</span></p>
                                </div>
                                <div class="message-receive d-flex">
                                    <div class="profile-image">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <p class="message-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas erat elit, vehicula velleo in, auctor vehicula urna.<span class="message-date">1:47 PM</span></p>
                                </div>
                                <div class="message-send ml-auto d-flex">
                                    <p>Lorem ipsum dolor sit amet, consectetur ad</p>
                                    <span class="message-date">1:47 PM</span>
                                </div>
                                <div class="message-receive d-flex">
                                    <div class="profile-image">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <p class="message-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<span class="message-date">1:47 PM</span></p>
                                </div>
                                <div class="message-receive d-flex">
                                    <div class="profile-image">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <p class="message-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas erat elit, vehicula velleo in, auctor vehicula urna.<span class="message-date">1:47 PM</span></p>
                                </div>
                                <div class="message-send ml-auto d-flex">
                                    <p>Lorem ipsum dolor sit amet, consectetur ad</p>
                                    <span class="message-date">1:47 PM</span>
                                </div>
                                <div class="message-receive d-flex">
                                    <div class="profile-image">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <p class="message-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<span class="message-date">1:47 PM</span></p>
                                </div>
                                <div class="message-receive d-flex">
                                    <div class="profile-image">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <p class="message-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas erat elit, vehicula velleo in, auctor vehicula urna.<span class="message-date">1:47 PM</span></p>
                                </div>
                                <div class="message-send ml-auto d-flex">
                                    <p>Lorem ipsum dolor sit amet, consectetur ad</p>
                                    <span class="message-date">1:47 PM</span>
                                </div>
                                <div class="message-receive d-flex">
                                    <div class="profile-image">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <p class="message-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<span class="message-date">1:47 PM</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="message">
                        <div class="d-flex message-container">
                            <div class="icons">
                                <a href="">
                                    <img src="Images/camera.svg">
                                </a>
                                <a href="">
                                    <img src="Images/image.svg">
                                </a>
                                <a href="">
                                    <img src="Images/smile.svg">
                                </a>
                            </div>
                            <div class="input">
                                <input type="text" placeholder="Mesajınızı Yazın">
                            </div>
                            <div class="like">
                                <a href=""><img src="Images/like-red.svg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="title-container">
                    <p class="title">
                        <span class="bartychat">
                            <b>BartyChat</b>
                        </span>
                        <span class="ml-auto">
                            <img src="Images/minichat.svg" alt="">
                        </span>
                    </p>
                </div>
                <div class="profiles-container" style="display: none;">
                    <div class="search d-flex">
                        <div class="icon">
                            <img src="Images/search-gray.svg" alt="">
                        </div>
                        <input type="search" name="" id="">
                    </div>
                    <div class="bc-profiles">
                        <div class="scrollBox1" id="box">
                              <div class="contentBox">
                                <div class="bc-profile new online d-flex">
                                    <div class="profile-photo">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <div class="profile-texts">
                                        <p class="name-surname">
                                            <span class="name"><b>Ad Soyad</b></span>
                                            <span class="date">15:50</span>
                                        </p>
                                        <p class="message-date">
                                            <span class="message">Lorem ipsum dolor. </span>
                                            <span class="new-count">3</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="bc-profile offline d-flex">
                                    <div class="profile-photo">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <div class="profile-texts">
                                        <p class="name-surname">
                                            <span class="name"><b>Ad Soyad</b></span>
                                            <span class="date">5 may</span>
                                        </p>
                                        <p class="message-date">
                                            <span class="message">Lorem ipsum dolor. </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="bc-profile offline d-flex">
                                    <div class="profile-photo">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <div class="profile-texts">
                                        <p class="name-surname">
                                            <span class="name"><b>Ad Soyad</b></span>
                                            <span class="date">5 may</span>
                                        </p>
                                        <p class="message-date">
                                            <span class="message">Lorem ipsum dolor. </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="bc-profile offline d-flex">
                                    <div class="profile-photo">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <div class="profile-texts">
                                        <p class="name-surname">
                                            <span class="name"><b>Ad Soyad</b></span>
                                            <span class="date">5 may</span>
                                        </p>
                                        <p class="message-date">
                                            <span class="message">Lorem ipsum dolor. </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="bc-profile online d-flex">
                                    <div class="profile-photo">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <div class="profile-texts">
                                        <p class="name-surname">
                                            <span class="name"><b>Ad Soyad</b></span>
                                            <span class="date">5 may</span>
                                        </p>
                                        <p class="message-date">
                                            <span class="message">Lorem ipsum dolor. </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="bc-profile offline d-flex">
                                    <div class="profile-photo">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <div class="profile-texts">
                                        <p class="name-surname">
                                            <span class="name"><b>Ad Soyad</b></span>
                                            <span class="date">5 may</span>
                                        </p>
                                        <p class="message-date">
                                            <span class="message">Lorem ipsum dolor. </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="bc-profile offline d-flex">
                                    <div class="profile-photo">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <div class="profile-texts">
                                        <p class="name-surname">
                                            <span class="name"><b>Ad Soyad</b></span>
                                            <span class="date">5 may</span>
                                        </p>
                                        <p class="message-date">
                                            <span class="message">Lorem ipsum dolor. </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="bc-profile offline d-flex">
                                    <div class="profile-photo">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <div class="profile-texts">
                                        <p class="name-surname">
                                            <span class="name"><b>Ad Soyad</b></span>
                                            <span class="date">5 may</span>
                                        </p>
                                        <p class="message-date">
                                            <span class="message">Lorem ipsum dolor. </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="bc-profile offline d-flex">
                                    <div class="profile-photo">
                                        <img src="Images/user photo.svg">
                                    </div>
                                    <div class="profile-texts">
                                        <p class="name-surname">
                                            <span class="name"><b>Ad Soyad</b></span>
                                            <span class="date">5 may</span>
                                        </p>
                                        <p class="message-date">
                                            <span class="message">Lorem ipsum dolor. </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-bottom">
            <div class="columns">
                <div class="column home">
                    <a href="index.html">
                        <div class="image">
                            <img src="Images/home.svg" alt="">
                        </div>
                        <p class="text-center">Ana Səhifə</p>
                    </a>
                </div>
                <div class="column category">
                    <a href="">
                        <div class="image">
                            <img src="Images/category.svg" alt="">
                        </div>
                        <p class="text-center">Kateqoriyalar</p>
                    </a>
                    <div class="category-modal modal">
                        <div class="category-modal-text">
                            <span>
                                <img src="Images/previous.svg" alt="">
                            </span>
                            <span class="mx-auto">
                                <b>Kateqoriyalar</b>
                            </span>
                        </div>
                        <div class="categories">
                            <div class="container">
                                <div class="category-container draggable d-flex">
                                    <div class="category" id="ca1">
                                        <p>
                                            <img src="Images/neqliyyat.png">
                                            <p class="name text-center">
                                                <b>Nəqliyyat</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category line2" id="ca2">
                                        <p>
                                            <img src="Images/dasinmaz.png">
                                            <p class="name text-center">
                                                <b>Daşınmaz Əmlak</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category" id="ca3">
                                        <p>
                                            <img src="Images/elektronika.png">
                                            <p class="name text-center">
                                                <b>Elektronika</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category line2" id="ca4">
                                        <p>
                                            <img src="Images/ev ve bag.png">
                                            <p class="name text-center">
                                                <b>Ev və Bağ üçün</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category" id="ca5">
                                        <p>
                                            <img src="Images/xidmetler.png">
                                            <p class="name text-center">
                                                <b>Xidmətlər</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category" id="ca6">
                                        <p>
                                            <img src="Images/sexsi esyalar.png">
                                            <p class="name text-center">
                                                <b>Şəxsi Əşyalar</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category" id="ca7">
                                        <p>
                                            <img src="Images/usaq.png">
                                            <p class="name text-center">
                                                <b>Uşaq Aləmi</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category" id="ca8">
                                        <p>
                                            <img src="Images/heyvanlar.png">
                                            <p class="name text-center">
                                                <b>Heyvanlar</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category" id="ca9">
                                        <p>
                                            <img src="Images/is ve biznes.png">
                                            <p class="name text-center">
                                                <b>İş və Biznes</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category line2" id="ca10">
                                        <p>
                                            <img src="Images/magazalar.png">
                                            <p class="name text-center">
                                                <b>Mağazalar və Şirkətlər</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category" id="ca11">
                                        <p>
                                            <img src="Images/xeyriyye.png">
                                            <p class="name text-center">
                                                <b>Xeyriyyə</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="subcategory-modal modal">
                        <div class="subcategory-modal-text">
                            <span>
                                <img src="Images/previous.svg" alt="">
                            </span>
                            <span class="mx-auto">
                                <b>Elektronika</b>
                            </span>
                        </div>
                        <div class="categories">
                            <div class="container">
                                <div class="category-container draggable d-flex">
                                    <div class="category active" id="ca1">
                                        <p>
                                            <img src="Images/neqliyyat.png">
                                            <p class="name text-center">
                                                <b>Nəqliyyat</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category line2" id="ca2">
                                        <p>
                                            <img src="Images/dasinmaz.png">
                                            <p class="name text-center">
                                                <b>Daşınmaz Əmlak</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category" id="ca3">
                                        <p>
                                            <img src="Images/elektronika.png">
                                            <p class="name text-center">
                                                <b>Elektronika</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category line2" id="ca4">
                                        <p>
                                            <img src="Images/ev ve bag.png">
                                            <p class="name text-center">
                                                <b>Ev və Bağ üçün</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category" id="ca5">
                                        <p>
                                            <img src="Images/xidmetler.png">
                                            <p class="name text-center">
                                                <b>Xidmətlər</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category" id="ca6">
                                        <p>
                                            <img src="Images/sexsi esyalar.png">
                                            <p class="name text-center">
                                                <b>Şəxsi Əşyalar</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category" id="ca7">
                                        <p>
                                            <img src="Images/usaq.png">
                                            <p class="name text-center">
                                                <b>Uşaq Aləmi</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category" id="ca8">
                                        <p>
                                            <img src="Images/heyvanlar.png">
                                            <p class="name text-center">
                                                <b>Heyvanlar</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category" id="ca9">
                                        <p>
                                            <img src="Images/is ve biznes.png">
                                            <p class="name text-center">
                                                <b>İş və Biznes</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category line2" id="ca10">
                                        <p>
                                            <img src="Images/magazalar.png">
                                            <p class="name text-center">
                                                <b>Mağazalar və Şirkətlər</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                    <div class="category" id="ca11">
                                        <p>
                                            <img src="Images/xeyriyye.png">
                                            <p class="name text-center">
                                                <b>Xeyriyyə</b>
                                            </p>
                                            <p class="line"></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <nav>
                            <ul>
                                <li>
                                    <a href="products.html">Telefonlar</a>
                                </li>
                                <li>
                                    <a href="products.html">Kompüter Aksesuarları</a>
                                </li>
                                <li>
                                    <a href="products.html">Noutbuklar və Netbuklar</a>
                                </li>
                                <li>
                                    <a href="products.html">Ofis Avadanlığı və İstehlak</a>
                                </li>
                                <li>
                                    <a href="products.html">Nömrələr və Sim - kartlar</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="column addAd">
                    <a href="addad.html">
                        <div class="image">
                            <img src="Images/add-plus.svg" alt="">
                        </div>
                        <p class="text-center">Elan Yerləşdir</p>
                    </a>
                </div>
                <div class="column feel-lucky">
                    <a href="">
                        <div class="image">
                            <img src="Images/feel-lucky.svg" alt="">
                        </div>
                        <p class="text-center">Feel Lucky</p>
                    </a>
                </div>
                <div class="column bartyChat">
                    <a href="bartychat.html">
                        <div class="image">
                            <img src="Images/chat.svg" alt="">
                        </div>
                        <p class="text-center">BartyChat</p>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="filter d-none">
            <div class="container d-flex">
                <div class="cities select col-md-3">
                    <select name="" id="">
                        <option value="AllCities">Bütün Şəhərlər</option>
                    </select>
                </div>
                <div class="categories select col-md-3">
                    <select name="" id="">
                        <option value="Category">Kateqoriya</option>
                    </select>
                </div>
                <div class="brends select col-md-3">
                    <select name="" id="">
                        <option value="Brend">Marka</option>
                    </select>
                </div>
                <div class="statuses select col-md-3">
                    <select name="" id="">
                        <option value="">Vəziyyət</option>
                        <option value="Əla">Əla</option>
                        <option value="Yaxşı">Yaxşı</option>
                        <option value="Orta">Orta</option>
                        <option value="Kafi">Kafi</option>
                    </select>
                </div>
            </div>
        </section>
        <section class="super-ads-container">
            <div class="container">
                <div class="super-ads">
                    <div class="super-ad-text">
                        <p>
                            <b>Son Elanlar</b>
                        </p>
                    </div>
                    <div class="containers">
                        <div class="super-ad-container">
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
                          
                            
                           
                            <p class="text-center button d-none d-md-block mx-auto col-6 col-lg-4">
                                <a href="products.html">
                                    <b>Daha çox göstər</b>
                                </a>
                            </p>
                        </div>
                        <div class="super-ads-adv-container">
                            <div class="super-ads-adv">
                                <img src="Images/reklam3.svg">
                            </div>
                            <div class="super-ads-adv mt">
                                <img src="Images/reklam5.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="to-everything">
            <div class="container">
                <p class="text">
                    <a href="products.html">
                        <b>Nullam Condimentum Odio Convallis Tincidunt Sodales.</b>
                    </a>
                </p>
                <div class="features">
                    <div class="features-container to-left">
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/Porsche.svg">
                            </div>
                            <p class="text-center">
                                <b>Porsche Macan</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/machine.svg">
                            </div>
                            <p class="text-center">
                                <b>Paltar Yuyan Maşın</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/Porsche.svg">
                            </div>
                            <p class="text-center">
                                <b>Porsche Macan</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/machine.svg">
                            </div>
                            <p class="text-center">
                                <b>Paltar Yuyan Maşın</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/Porsche.svg">
                            </div>
                            <p class="text-center">
                                <b>Porsche Macan</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/machine.svg">
                            </div>
                            <p class="text-center">
                                <b>Paltar Yuyan Maşın</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/Porsche.svg">
                            </div>
                            <p class="text-center">
                                <b>Porsche Macan</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/machine.svg">
                            </div>
                            <p class="text-center">
                                <b>Paltar Yuyan Maşın</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/Porsche.svg">
                            </div>
                            <p class="text-center">
                                <b>Porsche Macan</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/machine.svg">
                            </div>
                            <p class="text-center">
                                <b>Paltar Yuyan Maşın</b>
                            </p>
                        </a>
                    </div>
                    <div class="features-container to-right">
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/computer.svg">
                            </div>
                            <p class="text-center">
                                <b>Porsche Macan</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/villa.svg">
                            </div>
                            <p class="text-center">
                                <b>Paltar Yuyan Maşın</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/computer.svg">
                            </div>
                            <p class="text-center">
                                <b>Porsche Macan</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/villa.svg">
                            </div>
                            <p class="text-center">
                                <b>Paltar Yuyan Maşın</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/computer.svg">
                            </div>
                            <p class="text-center">
                                <b>Porsche Macan</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/villa.svg">
                            </div>
                            <p class="text-center">
                                <b>Paltar Yuyan Maşın</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/computer.svg">
                            </div>
                            <p class="text-center">
                                <b>Porsche Macan</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/villa.svg">
                            </div>
                            <p class="text-center">
                                <b>Paltar Yuyan Maşın</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/computer.svg">
                            </div>
                            <p class="text-center">
                                <b>Porsche Macan</b>
                            </p>
                        </a>
                        <a href="" class="feature">
                            <div class="image-container">
                                <img src="Images/villa.svg">
                            </div>
                            <p class="text-center">
                                <b>Paltar Yuyan Maşın</b>
                            </p>
                        </a>
                    </div>
                </div>
                <p class="text-right button">
                    <a href="products.html">
                        <b>Daha çox göstər</b>
                    </a>
                </p>
            </div>
        </section>
        <section class="ad-middle">
            <div class="container">
                <div class="col-md-10 mx-auto" style="background-image: url(Images/reklam.svg);"></div>
            </div>
        </section>
        <section class="latest-ads-container">
            <div class="container">
                <div class="super-ads">
                    <div class="super-ad-text">
                        <p>
                            <b>Son Elanlar</b>
                        </p>
                    </div>
                    <div class="containers">
                        <div class="super-ad-container">
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <div class="super-ad">
                                <a href="product.html" class="super-ad-image">
                                    <img src="Images/Mask Group 3.svg" alt="">
                                </a>
                                <div class="details">
                                    <p class="d-flex brand-name">
                                        <a href="product.html"><span>Kateqoriya</span></a>
                                        <span class="ml-auto">
                                            <a href="">
                                                <img src="Images/superman.svg">
                                            </a>
                                        </span>
                                    </p>
                                    <p class="d-flex model-name">
                                        <a href="product.html"><b>Apple iPhone XR 64 GB</b></a>
                                    </p>
                                    <p class="d-flex cost">
                                        <b>300 AZN</b>
                                    </p>
                                    <p class="d-flex">
                                        <span class="addDate">Bakı, bugün, 06:35</span>
                                    </p>
                                    <p class="user-rating">
                                        <span>User</span>
                                        <span class="ratings">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/filled-star.svg">
                                            <img src="Images/empty-star.svg">
                                        </span>
                                    </p>
                                    <p class="like">
                                        <img src="Images/heart-red.svg" alt="">
                                    </p>
                                </div>
                            </div>
                            <p class="text-center button mx-auto col-6 col-lg-4">
                                <a href="products.html">
                                    <b>Daha çox göstər</b>
                                </a>
                            </p>
                        </div>
                        <div class="super-ads-adv-container">
                            <div class="super-ads-adv">
                                <img src="Images/rekla9.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container d-flex">
            <div class="col-md-3 col-8 left">
                <p>
                    <a href="tel:+994">
                        <i class="fas fa-phone-alt"></i> (+994) xx xxx xx xx
                    </a>
                </p>
                <p>
                    <a href="mailto:info@barty.az">
                        <i class="far fa-envelope"></i> info@barty.az
                    </a>
                </p>
                <p><i class="fas fa-map-marker-alt"></i> Ziya Bünyadov 2036 / 1B</p>
            </div>
            <div class="col-md-3 middle-left">
                <nav class="icons">
                    <ul class="d-flex">
                        <li>
                            <a href="">
                                <img src="Images/compair white.svg">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="Images/heart-white.svg">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="Images/Path 92 white.svg">
                            </a>
                        </li>
                    </ul>
                </nav>
                <p>Elan Yerləşdir</p>
            </div>
            <div class="col-md-3 col-4 middle-right">
                <p>
                    <a href="">Saytda Reklam</a>
                </p>
                <p>
                    <a href="">Gizlilik Siyasəti</a>
                </p>
                <p>
                    <a href="">FAQ</a>
                </p>
            </div>
            <div class="col-md-3 right">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
                <nav class="contact">
                    <ul>
                        <li class="d-inline-block">
                            <p>
                                <a href="">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </p>
                        </li>
                        <li class="d-inline-block margin">
                            <p>
                                <a href="">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </p>
                        </li>
                    </ul>
                </nav>
                <a href="" class="live float-right">
                    <img src="Images/Group 375.svg">
                </a>
            </div>
        </div>
        <a href="" class="live float-right">
            <img src="Images/Group 375.svg">
        </a>
        <div class="copyright">
            <p class="text-center"> © Bütün hüquqlar qorunur 2020</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="Js/owl.carousel.min.js"></script>
    <script src="Js/scrollBar.js"></script>
    <script src="Js/main.js"></script>
</body>
</html>
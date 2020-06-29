<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-4 bg-dark">
    <div class="top-ft">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-xl-start justify-content-center pb-5 pb-md-0">
                    <img class="img-logo" src="images/logo.png" alt="">
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-xl-end justify-content-center">
                    <span class="txt-follow d-none d-xl-block">Follow us</span>
                    <ul class="nav nav-fllow">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mid-ft">
        <div class="container pb-5">
            <div class="row pb-5">
                <div class="col-md-4">
                    <h4 class="title-ft">About us</h4>
                    <div class="pb-3 w-75"><p class="text-white">
                        <strong class="color-1">Addres:</strong>
                        21 Newstreet, Chaitan town, India, 109-74</p>
                    </div>
                    <a href="#" class="color-1 d-block mb-3">
                        <i class="fas fa-phone mr-2"></i>
                        <span class="text-white"> +700800-50-800</span>
                    </a>
                    <a href="#" class="color-1 d-block mb-3">
                        <i class="fas fa-envelope mr-2"></i>
                        <span class="text-white"> manager@chaitan.md</span>
                    </a>
                    <a href="#" class="color-1">
                        <i class="fab fa-skype mr-2"></i>
                        <span class="color-1"> chaitan</span>
                    </a>
                </div>
                <div class="col-md-4">
                    <h4 class="title-ft">Explore</h4>
                    <div class="ft-menu nav align-items-center">
                        <ul class="w-50">
                            <li><a href="#"><i class="fas fa-chevron-right color-1 small"></i> Home</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right color-1 small"></i> About us</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right color-1 small"></i> Product</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right color-1 small"></i> blog</a></li>
                        </ul>
                        <ul class="w-50">
                            <li><a href="#"><i class="fas fa-chevron-right color-1 small"></i> Gallery</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right color-1 small"></i> Contact</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right color-1 small"></i> Pages</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="title-ft">Recent News</h4>
                    <div class="ft-recent nav mb-4">
                        <a href="#" class="ft-image">
                            <img src="images/item-1.jpg" class="img-fluid">
                        </a>
                        <div class="ft-content pl-3">
                            <a href="#" class="color-1">February 21, 2018</a>
                            <a href="#" class="a-2"> <h6>3 ways how to test nutaral indian tea</h6></a>
                        </div>
                    </div>
                    <div class="ft-recent nav">
                        <a href="#" class="ft-image">
                            <img src="images/item-2.jpg" class="img-fluid">
                        </a>
                        <div class="ft-content pl-3">
                            <a href="#" class="color-1">February 21, 2018</a>
                            <a href="#" class="a-2"> <h6>Results of international tea conference ’18</h6></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ft-bottom">
        <div class="container nav">
            <p class="my-0 text-white"><a href="#" class="color-1">Like-themes</a> 2018 © All Rights Reserved - <a href="#" class="color-1">Purchase Theme</a></p>
            <a href="#" class="to-top ml-auto"><i class="fas fa-chevron-up"></i></a>
        </div>
    </div>
</div>
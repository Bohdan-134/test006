<!DOCTYPE html>
<html lang=ba>
<head>
    <meta charset=UTF-8>
    <title> Thank you for order!</title>
    <!-- Facebook Pixel Code -->
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=<?=$_COOKIE["FBpixel"]?>&ev=Lead&noscript=1"/>
    <!-- End Facebook Pixel Code -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js"></script>
    <script src="srcemail/shared_files/js/custom-functions2.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700&amp;subset=cyrillic" rel=stylesheet>
     <link href="srcemail/success_files/tpl-success-united/css/A.bootstrap.css.pagespeed.cf.nM7fux8J4r.css" rel=stylesheet>
    <link rel=stylesheet href="srcemail/success_files/tpl-success-united/css/A.style.css.pagespeed.cf.awvjTPxE0m.css">
    <link rel=stylesheet href="srcemail/success_files/tpl-success-united/css/A.media.css.pagespeed.cf.VqW2QvCSjP.css"
          media="all and (max-width:1200px)">

</head>
<body>


<header>
    <div class=container>
        <div class="row" style="justify-content: center;display: flex;text-align: center">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 thanks"  >
                <h2 id="text01"></h2>
                <p id="text02"></p>
            </div>
           <!-- <div class="col-lg-offset-5 col-md-offset-5 col-sm-offset-5 col-lg-2 col-md-2 col-sm-2 col-xs-12">
                <div class=info>
                    <p id="text03"></p>
                    <p><span class="blue big" id="text04"></span></p>
                    <p id="text05"></p>
                    <p id="text06"></p>
                </div>
            </div>-->
        </div>
    </div>
</header>
<div class=main>
    <div class=container>
        <div class=row>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <h2 id="text07"></h2>
                <p id="text08"></p>
                <div class=discount>
                    <div class=manager>
                        <img src="srcemail/success_files/tpl-success-united/img/manager_1.png" alt="">
                         <img src="srcemail/success_files/tpl-success-united/img/manager_3.png" alt=""
                              data-kma-country="eur,afr">
                        <div class=right>
                            <p id="text09"></p>
                        </div>
                        <div class=text_manager>
                            <p><span id="text10"></span><br> <span id="text11"></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <div class=form_wrapper>
                    <div class=order_form>
                        <p id="text12"></p>
                        <form action="send_request.php" method=post class=main-form>
                            <input type="hidden" id="customerId" name="customerId" value="<?=$_GET["id"]?>">
                            <p id="text13"></p>
                            <input class=email name=email type=text placeholder=e-mail required
                                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="xxxxxx@yyyyy.zzz">
                            <button id="text14" type=submit class=main-form__button></button>
                            <div class=footer_form>
                                <div><img src="srcemail/success_files/tpl-success-united/img/check.png" alt=""></div>
                                <p id="text15"><br>
                                    <span id="text16"></span> </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="srcemail/multilang.js"></script>


</body>
</html>
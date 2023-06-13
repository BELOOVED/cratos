<?php include 'modules/header.php';?>

<div class="heading" style="margin-top:100px;">2 Aşamalı Güvenlik</div>
<div data-role="content" class="ui-content" role="main">
    <div class="tfa_content relative">
        <p class="tfa_text">2 Aşamalı Güvenlik hesabınız için ekstra bir güvenlik önlemidir. 2 Aşamalı güvenliği aktif
            ettikten sonra şifreniz çalınsa dahi hesabınıza sizden başka kimse erişemez.İki Aşamalı Güvenliği kapatmanız
            durumunda sorumluluk tamamen size aittir.</p>

        <div class="flex alCen jb tfa_switcher_content relative">
            <p>2 Aşamalı Güvenliği Hemen Aktif Et</p>
            <label class="flex alCen" for="js_twoFa_switcher">
                <input class="tfa_switcher_input" data-role="none" type="checkbox" id="js_twoFa_switcher"
                       onclick="switcherCheck()">
                <span class="tfa_switcher_item"></span>
            </label>
            <span class="tfa_error_msg" id="js_switcher_msg">2 Aşamalı Güvenliğin aktif olması için öncelikle QR Kodunu Taratın sonrasında gerekli adımları tamamlayın.</span>
        </div>
        <div class="" id="js_howTo_setup_cont">
            <h3 class="tfa_title">
                Kurulumu Nasıl Yaparım?
            </h3>

            <div class="tfa_text">
                <p>
                    1. "Google Authenticator" Programını
                    <a class="twofa_app_links ui-link"
                       href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&amp;hl=tr&amp;gl=US">Play
                        Store</a> ya da<a class="twofa_app_links ui-link"
                                          href="https://apps.apple.com/us/app/google-authenticator/id388497605">
                        App Store'</a> dan indirip kurabilirsiniz.
                </p>
                <p>2. Kurulumdan sonra Programdaki + Simgesine Basarak "QR Kodunu Tara" seçeneğiyle bu sayfadaki kodu
                    taratınız ve programda size verilen 6 haneli kodu yazarak "ONAYLA" butonuna basın.</p>
                <p>3.QR Kod okutmadan aktif etmek isterseniz; "Kurulum Anahtarını Manuel Gireceğim" bölümünden aldığınız
                    Kurulum Anahtarınızı program üzerinde Kurulum anahtarı gir bölümünden aktif edebilirsiniz.</p>
            </div>
            <h4 class="tfa_subtitle">
                Doğrulama İşlemi
            </h4>
            <p class="tfa_text">
                Uygulamada gördüğünüz 6 haneli doğrulama kodunu yazınız<br>
                6 haneli kodu yazdıktan sonra ONAYLA butonuna tıklayınız
            </p>
        </div>

        <div class="" id="js_qr_cont">
            <div class="tfa_image_cont">
                <img alt="qr code"
                     src="data:image/png;base64, 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"
                     id="js_qr_src">
            </div>

            <div class="tfa_copy_code_content">
                <span class="tfa_copy_code_text" id="js_getCode_btn"> Kurulum Anahtarını Manuel Gireceğim  </span>
                <div class=" flex alCen hidden" id="js_manual_code">
                    <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input
                                class="ctfa_copy_code" type="text" name="name" value="MZSTKMZRG44DQNLDHA2GEYZU"
                                readonly="readonly" id="js_manual_entry_key"></div>
                    <div class="ctfa_copy_btn"></div>
                </div>
            </div>
            <div class="tfa_btn_content relative">
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="qr_code_input"
                                                                                                id="js_qr_code"
                                                                                                placeholder="Kodu Giriniz">
                </div>
                <button class="qr_code_btn ui-btn ui-shadow ui-corner-all" type="button" id="js_verify_qr_code">
                    Confirm
                </button>
            </div>
        </div>
        <div class="relative">
            <span class="tfa_error_msg" id="js_messages"></span>
        </div>
    </div>
</div>


<script>
    /*live chat links*/
    $(document).on('click', '#rwToggleQuickActionsBtn', function () {
        $(this).toggleClass('opened');
        $('#rwQuickActions').toggleClass('opened');
        $('#rwSupportOptions').removeClass('opened');
        if ($('#rwQuickActions').hasClass('opened')) {
            $('#rwQuickActionsOverlay').addClass('opened');
        } else {
            $('#rwQuickActionsOverlay').removeClass('opened');
        }
    });

    $(document).on('click', '#rwQuickActionsOverlay, #rwQuickActionsWindowCloseBtn', function () {
        $('#rwQuickActions').removeClass('opened');
        $('#rwQuickActionsOverlay').removeClass('opened');
        $('#rwQuickActionsWindow').removeClass('opened');
        if (rw.getDeviceType() !== 'd') {
            $('#rwToggleQuickActionsBtn, #lc-c').removeClass('opened');
        }
    });

</script>
<div id="footer" class="bgMain">
    <div class="footer_cont ">
        <div class="phone_lang_cont flex alCen">
            <div class="drop_down_lang_arrow">
                          <span class="drop_down_lang__front_el">
                              <span class="lang_width lang tr" style="background-image: url(img/mob_flags.png)"></span>Türkçe
                          </span>
                <select onchange="window.location.href = this.value" data-role="none" class="drop_down_lang"
                        id="LanguageBarSortingMob">
                    <option value="#" selected="" hidden="" class="tr">
                        Türkçe
                    </option>
                    <option value="#" class="en">
                        English
                    </option>
                    <option value="#" class="es">
                        Español
                    </option>
                    <option value="#" class="ru">
                        Русский
                    </option>
                    <option value="#" class="pt">
                        Português
                    </option>
                    <option value="#" class="fr">
                        Français
                    </option>
                    <option value="#" class="de">
                        Deutsch
                    </option>
                </select>
            </div>
        </div>

        <a class="desktop ui-link" href="#">
            <div class="toWeb btn_sec"></div>
        </a>

        <div class="bordered_box">
            <div class="d-flex align-items-center footer_logos justify-content-center">
                <div class="footer_logo footer_logo_laliga"
                     style="background-image: url(img/footer_logos_sprite.png)"></div>
                <div class="footer_logo footer_logo_ff"
                     style="background-image: url(img/footer_logos_sprite.png)"></div>
                <div class="footer_logo footer_logo_ukbvb"
                     style="background-image: url(img/footer_logos_sprite.png)"></div>
                <div class="footer_logo footer_logo_circle"
                     style="background-image: url(img/footer_logos_sprite.png)"></div>
            </div>
            <div class="">
                <img src="img/FF.png" alt="FF"></div>
            <div class="logo_dmca">
                <a href="https://www.dmca.com/Protection/Status.aspx?ID=39bed7f3-6d82-4c3e-820c-aad64dc9aaf4&amp;refurl=https://grandpashabet360.com"
                   title="DMCA.com Protection Status" target="_blank" class="dmca-badge ui-link">
                    <img src="img/DMCA_badge_trn_100w.png"
                         alt="DMCA.com Protection Status">
                </a>
                <script src="js/DMCABadgeHelper.min.js"></script>
            </div>
            <div class="frow flex jc alCen mtb">
                <div class="plus18if"></div>
                <div class="footer_left_text">
                    Kumar Alışkanlık yapabilir <br> Kumar Oynarken <br> Lütfen Sorumlu davranınız
                </div>
            </div>
            <div class="logo_gambleaware">
                <img src="img/gambleaware.png" alt="gambleaware">
            </div>
            <div class="frow flex jc">
                <div class="copy">GRANDPASHABET © 2023 Tüm hakları saklıdır.</div>
            </div>
        </div>
        <div class="social_title">SOSYAL MEDYA HESAPLARIMIZ</div>
        <div class="social_icons_footer frow flex jc">
            <a class="facebook ui-link" href="https://rebrand.ly/facebookgrand" target="_blank"></a>
            <a class="twitter ui-link" href="https://rebrand.ly/twittergrand" target="_blank" rel="noopener"></a>
            <a class="insta ui-link" href="https://rebrand.ly/instagramgrand" target="_blank" rel="noopener"></a>
            <a class="pinterest ui-link" href="https://rebrand.ly/grandpinterest" target="_blank" rel="noopener"></a>
            <a class="youtube ui-link" href="https://rebrand.ly/grandyoutubee" target="_blank" rel="noopener"></a>
            <a class="whatsapp-1 ui-link" href="https://rebrand.ly/grandddloginn" target="_blank" rel="noopener"></a>
            <a class="whatsapp-2 ui-link" href="https://rebrand.ly/grandddloginn" target="_blank" rel="noopener"></a>
            <a class="telegram ui-link" href="https://rebrand.ly/telegramgrand" target="_blank" rel="noopener"></a>
            <a class="reddit ui-link" href="https://rebrand.ly/redditgrand" target="_blank" rel="noopener"></a>
            <a class="tumblr ui-link" href="https://rebrand.ly/tumblrgrand" target="_blank" rel="noopener"></a>
            <a class="linkedin ui-link" href="https://rebrand.ly/Linkedingrand" target="_blank" rel="noopener"></a>
            <a class="yandex_mail ui-link" href="/cdn-cgi/l/email-protection#6400011710010f240316050a001405170c050601104a070b09" target="_blank" rel="noopener"></a>
            <a class="tiktok ui-link" href="https://rebrand.ly/tiktokgrand" target="_blank" rel="noopener"></a>
            <a class="twitch ui-link" href="https://rebrand.ly/twitchgrand" target="_blank" rel="noopener"></a>
        </div>
        <div class="footer_bottom_text">
            <h2>
                ONLİNE GAMİNG LİSANSIMIZ
            </h2>
            GrandPashaBet365 operates under the License GSR Technology N.V., No. 1668/JAZ issued to Curaçao
            eGaming, Authorized and Regulated by the Government of Curacao.
        </div>
        <div class="flex jc">
                <img class="license_logo" src="img/download.png" alt="" width="50">
            </a>
        </div>
        <style>
            .toTopBox1 {
                height: 64px;
                width: 64px;
                border-radius: 50%;
                background: #D0B752;
                padding: 0;

                margin: 24px auto;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 25px;
                padding-bottom: 5px;
                cursor: pointer;
            }
        </style>
        <div class="toTopBox1" >
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" >
                <defs>
                    <style>
                        .a {
                            fill: #000;
                        }

                        .b {
                            fill: none;
                        }
                    </style>
                </defs>
                <g transform="translate(-43)">
                    <path class="a" d="M49,12l1.1,1.1,4.2-4.2V18h1.5V8.9L60,13.1,61,12,55,6Z"></path>
                    <rect class="b" width="24" height="24" transform="translate(43)"></rect>
                </g>
            </svg>
        </div>
    </div>
</div>


</div>
</div>
<?php include 'modules/sidebar.php'; ?>
<?php include 'modules/userbar.php'; ?>

</div>
<div id="verification_popup"></div>
<div id="info_div" style="display: none;"></div>
<div id="game_info_div" style="display: none;"></div>
<div id="comm100-button-8cb529b4-9648-4197-b81a-6d2a248a387b"></div>





<script src="js/bootstrapper.min.js"></script>

<script src="jackpotSlider.js"></script>
<script type="text/javascript">
    var mobNumber1 = parseInt("14520");
    var mobNumber2 = parseInt("35728");
    var mobNumber3 = parseInt("23809969");
    var mobNumber4 = parseInt("235940449");
    var digitsAfterDot = parseInt("2");
    var mobStepCount = parseInt("1000");

    var firstJackMob, secondJackMob, thirdJackMob, fourthJackMob = false;
    var mobSlide1, mobSlide2, mobSlide3, mobSlide4;
    $(document).ready(function () {
        mobSlide1 = new FlipJackpotNumbers({
            node: document.querySelector("#egt_first_mob"),
            from: mobNumber1 == 0 ? 0 : mobNumber1 - mobStepCount,
            seperateOnly: digitsAfterDot,
        });

        mobSlide2 = new FlipJackpotNumbers({
            node: document.querySelector("#egt_second_mob"),
            from: mobNumber2 == 0 ? 0 : mobNumber2 - mobStepCount,
            seperateOnly: digitsAfterDot,
        });
        mobSlide3 = new FlipJackpotNumbers({
            node: document.querySelector("#egt_third_mob"),
            from: mobNumber3 == 0 ? 0 : mobNumber3 - mobStepCount,
            seperateOnly: digitsAfterDot,
        });

        mobSlide4 = new FlipJackpotNumbers({
            node: document.querySelector("#egt_fourth_mob"),
            from: mobNumber4 == 0 ? 0 : mobNumber4 - mobStepCount,
            seperateOnly: digitsAfterDot,
        });
        var dataMob = {
            currentLevelI: mobNumber1,
            currentLevelII: mobNumber2,
            currentLevelIII: mobNumber3,
            currentLevelIV: mobNumber4,
        }
        flip(dataMob);

    });


    function flip(result) {
        if (mobNumber1 > result.currentLevelI) {
            firstJackMob = true;
            mobSlide1.node.classList.add('blink');
        } else {
            if (firstJackMob) {
                mobSlide1.destroy();
                mobSlide1 = new FlipJackpotNumbers({
                    node: document.querySelector("#egt_first_mob"),
                    from: mobNumber1,
                    seperateOnly: digitsAfterDot,
                });
                firstJackMob = false;
            }
            if ((mobNumber1 - mobStepCount).toString().length < result.currentLevelI.toString().length) {
                document.getElementById('egt_first_mob').children[0].classList.remove('hide');
            }
            mobSlide1.flipTo({
                to: result.currentLevelI,
                direct: false
            });
        }
        if (mobNumber2 > result.currentLevelII) {
            secondJackMob = true;
            mobSlide2.node.classList.add('blink');
        } else {
            if (secondJackMob) {
                mobSlide2.destroy();
                mobSlide2 = new FlipJackpotNumbers({
                    node: document.querySelector("#egt_second_mob"),
                    from: mobNumber2,
                    seperateOnly: digitsAfterDot,
                });
                secondJackMob = false;
            }
            if ((mobNumber2 - mobStepCount).toString().length < result.currentLevelII.toString().length) {
                document.getElementById('egt_second_mob').children[0].classList.remove('hide');
            }
            mobSlide2.flipTo({
                to: result.currentLevelII,
                direct: false
            });
        }
        if (mobNumber3 > result.currentLevelIII) {
            thirdJackMob = true;
            mobSlide3.node.classList.add('blink');
        } else {
            if (thirdJackMob) {
                mobSlide3.destroy();
                mobSlide3 = new FlipJackpotNumbers({
                    node: document.querySelector("#egt_third_mob"),
                    from: mobNumber3,
                    seperateOnly: digitsAfterDot,
                });
                thirdJackMob = false;
            }
            if ((mobNumber3 - mobStepCount).toString().length < result.currentLevelII.toString().length) {
                document.getElementById('egt_third_mob').children[0].classList.remove('hide');
            }
            mobSlide3.flipTo({
                to: result.currentLevelIII,
                direct: false
            });
        }

        if (mobNumber4 > result.currentLevelIV) {
            fourthJackMob = true;
            mobSlide4.node.classList.add('blink');
        } else {
            if (fourthJackMob) {
                mobSlide4.destroy();
                mobSlide4 = new FlipJackpotNumbers({
                    node: document.querySelector("#egt_fourth_mob"),
                    from: mobNumber4,
                    seperateOnly: digitsAfterDot,
                });
                fourthJackMob = false;
            }
            if ((mobNumber4 - mobStepCount).toString().length < result.currentLevelIV.toString().length) {
                document.getElementById('egt_fourth_mob').children[0].classList.remove('hide');
            }
            mobSlide4.flipTo({
                to: result.currentLevelIV,
                direct: false
            });
        }

        mobNumber1 = result.currentLevelI;
        mobNumber2 = result.currentLevelII;
        mobNumber3 = result.currentLevelIII;
        mobNumber4 = result.currentLevelIV;
    }
</script>


<script type="text/javascript">

    let billboardSwiper = new Swiper(".js_billboard_banner_cont", {
        loop: true,
        slidesPerView: 1,
        preloadImages: false,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        lazy: {
            loadPrevNext: true,
            loadPrevNextAmount: 2
        },
        on: {
            transitionEnd: function (swiper) {
                playAndMuteBannerVideo(swiper.$wrapperEl);
            },
            beforeInit: function (swiper) {
                if (swiper.wrapperEl.getElementsByClassName('swiper-slide').length <= 1) {
                    swiper.params.loop = false;
                }
            }
        },

    });
    window.removeEventListener('scroll', checkVideoOnScroll, false);
    window.addEventListener('scroll', checkVideoOnScroll, false);

</script>
<script>
    $(document).ready(function () {
        $('.toTopBox1').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
</script>
<style>
    .ui-loader .ui-icon-loading {
        background-color: transparent;
        background-image: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1093/loader.gif') !important;
    }


</style>
<style>
    :root {
        --cdn-logo-mob_png: url('https://cdn-plat.apidigi.com/plat/prd//Img/mobile/partners/1093/logo.png');
        --cdn-logo_png: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1093/logo.png');
        --cdn-logoSm-mob_png: url('https://cdn-plat.apidigi.com/plat/prd//Img/mobile/partners/1093/logoSm.png');
        --cdn-logoSm_png: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1093/logoSm.png');
        --cdn-logo-mob_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/mobile/partners/1093/logo.svg');
        --cdn-logo_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1093/logo.svg');
        --cdn-logoSm-mob_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/mobile/partners/1093/logoSm.svg');
        --cdn-logoSm_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1093/logoSm.svg');
        --cdn-logo-mob_gif: url('https://cdn-plat.apidigi.com/plat/prd/Img/mobile/partners/1093/logoGif.gif');
        --cdn-footer_sprite: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1093/footer_sprite.png');
        --cdn-newBadge_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/new.svg');
        --cdn-newBadgeLobby_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/SVG/ic_new.svg');
        --cdn-hotBadgeLobby_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/SVG/ic_hot.svg');
        --cdn-topBadgeLobby_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/SVG/ic_top.svg');
        --cdn-jackpotBadgeLobby_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/SVG/ic_jackpot.svg');
        --cdn-jackpot_icons: url('https://cdn-plat.apidigi.com/plat/prd/Img/icons/redesign/egt_jackpot_icons.png');
    }


    @media only screen and (min-width: 800px) {

        .hometvbet strong:before {
            content: "Í";
        }
    }

</style>
<style>
    body {
        --logo-santa-hat: url('https://cdn-plat.apidigi.com/plat/prd/Img/themes/2023/santa-hat.png');
        --type_1--footer-bg: url('https://cdn-plat.apidigi.com/plat/prd/Img/mobile/themes/2023/type_1/footer-dec.png');
        --type_2--footer-bg: url('https://cdn-plat.apidigi.com/plat/prd/Img/mobile/themes/2023/type_2/footer-dec.png');
        --type_3--footer-bg: url('https://cdn-plat.apidigi.com/plat/prd/Img/mobile/themes/2023/type_3/footer-dec.png');
        --type_4--footer-bg: url('https://cdn-plat.apidigi.com/plat/prd/Img/mobile/themes/2023/type_4/footer-dec.png');
    }
</style>
<div class="ui-panel-dismiss"></div>
<div class="ui-panel-dismiss" style=""></div>

<div id="comm100-container">
    <div style="position: fixed; z-index: 2147483642; bottom: 5%; right: 0px; transform: translateY(5%);">
        <a id="openLiveChat" aria-label="Sohbet düğmesi, ajan çevrimiçi" role="button" aria-expanded="false" style="">
            <img src="img/DBImage.jpeg" alt="Sohbet düğmesi, ajan çevrimiçi" style="border: none;">
        </a>
    </div>

</div>
<style>
.g-recaptcha {
    background-color: #2b350b;
    z-index: -9999999999999999999 !important;
}
</style>
<script src="js/top-matches.min.js"></script>
<div class="ui-loader ui-corner-all ui-body-a ui-loader-default"><span class="ui-icon-loading"></span>
    <h1>loading</h1></div>

<script>
    function giris(){
        Swal.fire({
            text: 'Lütfen Giriş Yapın',
            icon: 'error',
            confirmButtonText: 'Tamam',
            background: "#384800",
            color: "#fff",
            confirmButtonColor: "#D0B752",
            iconColor: "#D0B752",

        });
    }
    function oyunGuncelleme(){
        Swal.fire({
            text: 'Oyun Güncellenmektedir. Lütfen canlı desteğe bağlanın',
            icon: 'error',
            confirmButtonText: 'Tamam',
            background: "#384800",
            color: "#fff",
            confirmButtonColor: "#D0B752",
            iconColor: "#D0B752",

        });
    }
    function yetersizBakiye(){
        Swal.fire({
            text: 'Yetersiz Bakiye! Lütfen Bakiye Yükleyiniz',
            icon: 'error',
            confirmButtonText: 'Tamam',
            background: "#384800",
            color: "#fff",
            confirmButtonColor: "#D0B752",
            iconColor: "#D0B752",

        }).then(function yonlendirme(){
            setTimeout(function() {
                window.location.href = "deposit";
            }, 1000);

        })
    }
    function hesapGuncelleme(){
        Swal.fire({
            text: 'Farklı bir ödeme yöntemi seçiniz',
            icon: 'error',
            confirmButtonText: 'Tamam',
            background: "#384800",
            color: "#fff",
            confirmButtonColor: "#D0B752",
            iconColor: "#D0B752",
        });
    }
    function ibanCopy(){
        var bIban = document.getElementById("bIban").value;
        navigator.clipboard.writeText(bIban).then(function() {
            Swal.fire({
                text: 'Kopyalandı',
                icon: 'success',
                confirmButtonText: 'Anladım',
                background: "#384800",
                color: "#fff",
                confirmButtonColor: "#D0B752",
                iconColor: "#D0B752",

            })
        }, function(err) {
            console.error('Could not copy text: ', err);
        });
    }
    
    const a = document.querySelector('a#openLiveChat');
    a.addEventListener('click', () => {
      if (typeof Tawk_API !== 'undefined') {
        Tawk_API.toggle();
        a.style.display = 'none';
      }
    });
    
    window.addEventListener('hashchange', () => {
      if (window.location.hash !== '#max-widget') {
        a.style.display = 'block';
      }
    });
    
    Tawk_API.onHide = () => {
      if (window.location.hash !== '#max-widget') {
        a.style.display = 'block';
      }
    };





</script>
</body>
</html>
<?php include 'modules/header.php';?>

<style>
    .xlinux{
        padding-top:100px;
        overflow: scroll !important;
    }
    .xlinux iframe{
        overflow: scroll !important;
        border: none;
    }
</style>
<div class="xlinux " id="reactMobile" data-lang="tr">
    <iframe src="https://sport.<?=$main['sitelink']?>/" height="1400px" width="1500px" title="sporbahisleri">

    </iframe>
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
                              <span class="lang_width lang tr" style="background-image: url(/img/mob_flags.png)"></span>Türkçe
                          </span>
                <select onchange="window.location.href = this.value" data-role="none" class="drop_down_lang" id="LanguageBarSortingMob">
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
                <div class="footer_logo footer_logo_laliga" style="background-image: url(/img/footer_logos_sprite.png)"></div>
                <div class="footer_logo footer_logo_ff" style="background-image: url(/img/footer_logos_sprite.png)"></div>
                <div class="footer_logo footer_logo_ukbvb" style="background-image: url(/img/footer_logos_sprite.png)"></div>
                <div class="footer_logo footer_logo_circle" style="background-image: url(/img/footer_logos_sprite.png)"></div>
            </div>
            <div class="">
                <img src="/img/FF.png" alt="FF"></div>
            <div class="logo_dmca">
                <a href="https://www.dmca.com/Protection/Status.aspx?ID=39bed7f3-6d82-4c3e-820c-aad64dc9aaf4&refurl=https://grandpashabet360.com" title="DMCA.com Protection Status" target="_blank" class="dmca-badge ui-link">
                    <img src="/img/DMCA_badge_trn_100w.png" alt="DMCA.com Protection Status">
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
                <img src="/img/gambleaware.png" alt="gambleaware">
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
            <a class="yandex_mail ui-link" href="cdn-cgi/l/email-protection.html#6602031512030d2601140708021607150e070403124805090b" target="_blank" rel="noopener"></a>
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
                <img class="license_logo" src="/img/download.png" alt="" width="50">
            
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
        <div class="toTopBox1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24">
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





<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/bootstrapper.min.js"></script>

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
        background-image: url('plat/prd/img/partners/1093/loader.gif') !important;
    }


</style>
<style>
    :root {
        --cdn-logo-mob_png: url('plat/prd/img/mobile/partners/1093/logo.png');
        --cdn-logo_png: url('plat/prd/img/partners/1093/logo.png');
        --cdn-logoSm-mob_png: url('https://cdn-plat.apidigi.com/plat/prd/img/mobile/partners/1093/logoSm.png');
        --cdn-logoSm_png: url('plat/prd/img/partners/1093/logoSm.png');
        --cdn-logo-mob_svg: url('https://cdn-plat.apidigi.com/plat/prd/img/mobile/partners/1093/logo.svg');
        --cdn-logo_svg: url('https://cdn-plat.apidigi.com/plat/prd/img/partners/1093/logo.svg');
        --cdn-logoSm-mob_svg: url('https://cdn-plat.apidigi.com/plat/prd/img/mobile/partners/1093/logoSm.svg');
        --cdn-logoSm_svg: url('https://cdn-plat.apidigi.com/plat/prd/img/partners/1093/logoSm.svg');
        --cdn-logo-mob_gif: url('https://cdn-plat.apidigi.com/plat/prd/img/mobile/partners/1093/logoGif.gif');
        --cdn-footer_sprite: url('plat/prd/img/partners/1093/footer_sprite.png');
        --cdn-newBadge_svg: url('plat/prd/img/new.svg');
        --cdn-newBadgeLobby_svg: url('plat/prd/img/SVG/ic_new.svg');
        --cdn-hotBadgeLobby_svg: url('plat/prd/img/SVG/ic_hot.svg');
        --cdn-topBadgeLobby_svg: url('plat/prd/img/SVG/ic_top.svg');
        --cdn-jackpotBadgeLobby_svg: url('plat/prd/img/SVG/ic_jackpot.svg');
        --cdn-jackpot_icons: url('plat/prd/img/icons/redesign/egt_jackpot_icons.png');
    }


    @media only screen and (min-width: 800px) {

        .hometvbet strong:before {
            content: "Í";
        }
    }

</style>
<style>
    body {
        --logo-santa-hat: url('plat/prd/img/themes/2023/santa-hat.png');
        --type_1--footer-bg: url('plat/prd/img/mobile/themes/2023/type_1/footer-dec.png');
        --type_2--footer-bg: url('plat/prd/img/mobile/themes/2023/type_2/footer-dec.png');
        --type_3--footer-bg: url('plat/prd/img/mobile/themes/2023/type_3/footer-dec.png');
        --type_4--footer-bg: url('plat/prd/img/mobile/themes/2023/type_4/footer-dec.png');
    }
</style>
<div class="ui-panel-dismiss"></div>
<div class="ui-panel-dismiss" style=""></div>

<div id="comm100-container">
    <div>
        <div></div>
        <div>
            <div>

            </div>
        </div>
        <span>
            <div aria-live="polite" style="position: absolute; left: -10000px; top: -10000px; width: 1px; height: 1px;">
            </div>
        </span>
    </div>

</div>
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
</script>
</body>
</html>
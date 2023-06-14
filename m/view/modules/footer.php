<script src="//sport.cratosroyalbet460.com/js/partner/bootstrapper.min.js?v=3"></script>
<script type="text/javascript">
     (function bootSportWidgets() {
         const spMultiBootConfig = {
            server: '//sport.cratosroyalbet460.com/',
            token: '-',
            timeZone: new Date().getTimezoneOffset() / -60,
            defaultLanguage: 'tr',
            theme: 'dark',
            parent:['cratosroyalbet460.com'],
            userId: '',
            apps: [
                {
                    appConfig: {
                        target: 'js-sport-jackpot-cont',
                        onJackpotItemClick: function (e) {
                            location.href = '/Sport';
                        },
                        onMoreBtnClick: function (e) {
                            location.href = '/Sport/ReactIndex#Jackpot';
                        },
                    },
                    bootConfig: { name: 'Jackpot' },
                    method: 'boot',
                },
                {
                    appConfig: { target: 'js-sport-topMatches-cont' },
                    bootConfig: { name: 'TopMatches' },
                    method: 'boot',
                }
            ]
        }
        Bootstrapper.multiBoot(spMultiBootConfig, 'TopMatches').then(handelEvents);

        function handelEvents(app) {
            app.addEventListener('navigateToEvent', function (e) {
                location.href = "http" + "://" + "cratosroyalbet460.com" + "/Sport/ReactIndex#SportEvent/" + e.data.Id;
            });
            app.addEventListener('navigateToChampionship', function (e) {
                location.href = "http" + "://" + "cratosroyalbet460.com" + "/Sport/ReactIndex#events/" + e.data.Id;
            });
        }
    })();
</script>
<script type="text/javascript">

    $(document).ready(function () {

        $(".js-tab").click(function () {
            var tab = $(this).data("tab");
            var selector = 'div[data-tab="' + tab + '"]';
            var tabContent = $(".tabs-content").find(selector);
            $(".js-active-tab").removeClass('js-active-tab');
            $(this).addClass('js-active-tab');
            tabContent.addClass('js-active-tab');
        });
    });

    $(document).ready(function () {
        
        $("#GameName").val('');

        if (!('' == null || '' == "")) {

            window.location.href = "/";
        }
    });
    $("#gamefilteredby").hide();

        var mobNumber1 = parseInt("13664");
    var mobNumber2 = parseInt("14680");
    var mobNumber3 = parseInt("3720054");
    var mobNumber4 = parseInt("49431076");
    var digitsAfterDot = parseInt("2");
    var mobStepCount = parseInt("0");
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
     setInterval(() => {
         $.ajax({
            url: "<?=$main['sitelink']?>/tr/Common/GetJack",
            type: "POST",
            datatype: "json",
            success: function (result) {
                flip(result);
            }
        })
     }, 30050);

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








<style>
    .social_icons_footer a {
        background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/mobile/partners/1096/footer_social_icons.png');
    }
    .whatsapp_top:after {
        background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/mobile/partners/1096/footer_social_icons.png');
    }
</style>
<div id="footer" class="bgMain">
        <div class="fixed_social_icons">
            <div id="rwQuickActions" class="quick-actions-nav ">

                <button id="rwToggleQuickActionsBtn" class="">
                    <span>
                        <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1096/live-chat-img/icon-quick-actions-plus.svg">
                    </span>
                    
                </button>

                <div id="rwQuickActionsMenuNew">
                    <div id="rwQuickActionsMenuWrapperNew">
                        <a href="#" target="_blank">
                            <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1096/live-chat-img/icon-app.svg?1">
                            <span>mobil app</span>
                        </a>
                        <a href="#" target="_blank">
                            <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1096/live-chat-img/icon-cark.svg">
                            <span>şans çarkı</span>
                        </a>
                        <a href="bonustalep" target="_blank">
                            <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1096/live-chat-img/icon-tournaments.svg?1">
                            <span>bonus talep</span>
                        </a>
                        <a href="#" target="_blank">
                            <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1096/live-chat-img/icon-call.svg?1">
                            <span>beni ara</span>
                        </a>
                        <a href="#" target="_blank">
                            <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1096/live-chat-img/icon-live-support-2.svg">
                            <span>bayilik</span>
                        </a>
                        <a href="#" target="_blank">
                            <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1096/live-chat-img/icon-call.svg?1">
                            <span>whatsapp</span>
                        </a>
                        <a href="#" target="_blank">
                            <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1096/live-chat-img/icon-telegram.svg?2">
                            <span>telegram</span>
                        </a>
                        <a href="#" target="_blank">
                            <img src="https://cdn-plat.apidigi.com/plat/prd/Img/partners/1096/live-chat-img/icon-tv.svg?2">
                            <span>canlı tv</span>
                        </a>
                    </div>
                </div>
            </div>
            <a href="#" target="_blank" rel="noopener" class="whatsapp_top flex alCen jc"></a>
        </div>
        <script type="text/javascript">
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
<div class="footer_cont">

    <div class="drop_down_lang_arrow">



                    <span class="mob_select_lang_flag lang_width lang tr" style="background-image: url('https://cdn-plat.apidigi.com/plat/prd/Img/flags/mob_flags.png')"></span>
                        <span class="drop_down_lang__front_el">


                            T&#252;rk&#231;e
                        </span>
            <select onChange="window.location.href = this.value" data-role="none" class="drop_down_lang" id="LanguageBarSortingMob">
                        <option value="/tr/" selected hidden class="tr">
                            T&#252;rk&#231;e
                        </option>
                        <option value="/en/"  class="en">
                            English
                        </option>
                        <option value="/es/"  class="es">
                            Espa&#241;ol
                        </option>
                        <option value="/ru/"  class="ru">
                            Русский
                        </option>
                        <option value="/br/"  class="br">
                            Portugu&#234;s
                        </option>
                        <option value="/fr/"  class="fr">
                            Fran&#231;ais
                        </option>
                        <option value="/de/"  class="de">
                            Deutsch
                        </option>
                        <option value="/ar/"  class="ar">
                            العربية
                        </option>

            </select>

<script type="text/javascript">
    $(document).ready(function () {
        var url = document.location.href.split('#')
        var languages = $('#LanguageBarSortingMob').find('a');
        if (url.length == 2) {
            if (languages.length != 0) {
                $(languages).each(function () {
                    var hrf = $(this).attr('href');
                    hrf = hrf + '#' + url[1];
                    $(this).attr('href', hrf);
                });
            } else {
                languages = $('#LanguageBarSortingMob').children('option');
                $(languages).each(function () {
                    $(this).val($(this).val() + '#' + url[1]);

                });
            }
        }
    });
</script>
    </div>

<div class="footer-border-box">
    <div class="d-flex align-items-center footer_logos justify-content-center">
        <img src="https://cdn-plat.apidigi.com/plat/prd/Img/mobile/partners/1096/LGS.png" alt="footer_logo" class="footer_logo-lgs" />
    </div>

    <div class="my-1">
        <a href="//www.dmca.com/Protection/Status.aspx?ID=42967461-ae0c-4ba8-b468-c5b8f77d9d44&refurl=http://cratosroyalbet.com/" title="DMCA.com Protection Status" class="dmca-badge"> <img src="https://images.dmca.com/Badges/_dmca_premi_badge_2.png?ID=42967461-ae0c-4ba8-b468-c5b8f77d9d44" alt="DMCA.com Protection Status" /></a>
        <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
    </div>

    <div class=" flex jc alCen mtb">
        <div class="plus18Icon"></div>
        <div class="footer_text">
            Kumar Alışkanlık yapabilir <br />
            Kumar Oynarken <br />
            Lütfen Sorumlu davranınız
        </div>
    </div>
    <div class="flex rating_functionality">
        <iframe src="https://cratosoylama.com/iframe.php"> </iframe>
    </div>
    <div class="footer_text">
        Destek: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fb9f9e888f9e90bb98899a8f94888994829a97999e8fd5989496">[email&#160;protected]</a><br />
Reklam anlaşmaları: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f28097999e939fb2918093869d81809d8b939e909786dc919d9f">[email&#160;protected]</a><br />
Bize yukarda belirtilen mail adreslerinden ulaşabilirsiniz
    </div>
    <div class="license_and_copy">
        <div class="copy">CRATOSROYALBET &copy; 2023 T&#252;m hakları saklıdır.</div>
    </div>
</div>
    <div class="social_icons_footer flex">
        <a class="facebook" href="https://rebrand.ly/cratosfacebook" target="_blank" rel="noopener"></a>
        <a class="twitter" href="https://rebrand.ly/cratostwitter" target="_blank" rel="noopener"></a>
        <a class="insta" href="https://rebrand.ly/cratosinstagram" target="_blank" rel="noopener"></a>
        <a class="pinterest" href="https://rebrand.ly/cratosspinterest" target="_blank" rel="noopener"></a>
        <a class="youtube" href="https://rebrand.ly/cratosyoutubeee" target="_blank" rel="noopener"></a>
        <a class="whatsapp" href="https://rebrand.ly/cratoswhatsapp" target="_blank" rel="noopener"></a>
        <a class="telegram" href="https://rebrand.ly/cratosstelegramm" target="_blank" rel="noopener"></a>
        <a class="reddit" href="https://rebrand.ly/cratosreddit" target="_blank" rel="noopener"></a>
        <a class="tumblr" href="https://rebrand.ly/cratostumblr" target="_blank" rel="noopener"></a>
        <a class="tiktok" href="https://rebrand.ly/cratostiktok" target="_blank" rel="noopener"></a>
    </div>

    <div>
        <p>
            Cratosroyalbet.com is operated by GSR Technology N.V. registered under No. 155130 at, Kaya Richard J. Beaujon Z/N Landhuis Joonchi II, Cura&#231;ao. This website is licensed and regulated by Cura&#231;ao eGaming (Cura&#231;ao license No. 1668 JAZ issued by Cura&#231;ao eGaming).
        </p>
    </div>
    <div class="flex align-items-center justify-content-center f_bottom_img">
        <a href="https://verification.curacao-egaming.com/validateview.aspx?domain=cratosroyalbet.com" target="_blank">
            <img src="https://verification.curacao-egaming.com/validate.ashx?domain=cratosroyalbet.com" alt="" width="100" />
        </a>
    </div>






    

</div>
    </div>

        </div>



                    <div id="left-panel" class="panel bgMain " data-position="left" data-role="panel" data-display="push" data-theme="b" data-dismissible="true">







<div class="lm__container flex flexCol dynamic_menu">
        <div class="lm__blocks flex jb">
                    <a class="lm__block flex flexCol jc alCen js_left_mn_items" href='bonustalep' target="_blank"
                       title="BONUS TALEP ET">
                        <i class='dynamic_icon' style='color:#EBDF9D'>&#57350</i>
                        <span class="lm_text_content">
                            BONUS TALEP ET
                        </span>
                        
                    </a>
                    <a class="lm__block flex flexCol jc alCen js_left_mn_items" href='https://vue.comm100.com/chatwindow.aspx?siteId=90001146&planId=bb65c9b1-e8d8-4496-8d3b-34c3af191f15' target="_self"
                       title="7/24 DESTEK">
                        <i class='dynamic_icon' style='color:#EBDF9D'>&#57366</i>
                        <span class="lm_text_content">
                            7/24 DESTEK
                        </span>
                        
                    </a>
        </div>
    <div class="lm__links">
                    <ul class="lm__links_block">
                        <li class="lm_link">
                            <a class="js_left_mn_items " href='cratosbeniara' target="_self"
                               title="ARAMA TALEBİ OLUŞTUR">
                                <i class='dynamic_icon' style='color:#EBDF9D'>&#57353</i>
                                <span class="lm_text_content"> ARAMA TALEBİ OLUŞTUR</span>
                                
                            </a>
                        </li>
                    </ul>
                    <ul class="lm__links_block">
                        <li class="lm_link">
                            <a class="js_left_mn_items " href='promotions' target="_self"
                               title="PROMOSYONLAR">
                                <i class='dynamic_icon' style='color:#EBDF9D'>&#57374</i>
                                <span class="lm_text_content"> PROMOSYONLAR</span>
                                
                            </a>
                        </li>
                    </ul>
                    <ul class="lm__links_block">
                        <li class="lm_link">
                            <a class="js_left_mn_items " href='cratoscekilis' target="_self"
                               title="HAFTALIK 100.000₺ &#199;EKİLİŞ">
                                <i class='dynamic_icon' style='color:#EBDF9D'>&#57480</i>
                                <span class="lm_text_content"> HAFTALIK 100.000₺ &#199;EKİLİŞ</span>
                                
                            </a>
                        </li>
                    </ul>
                    <ul class="lm__links_block">
                        <li class="lm_link">
                            <a class="js_left_mn_items " href="#" target="_self"
                               title="&#199;ARK">
                                <i class='dynamic_icon' style='color:#EBDF9D'>&#57383</i>
                                <span class="lm_text_content"> &#199;ARK</span>
                                <span class='dynamic_bagge hot'>Hot</span>
                            </a>
                        </li>
                    </ul>
                        <a class="lm__title_link js_left_mn_items" href='sportsbook' target="_self"
                           title="SPOR">
                            
                            <span class="lm_text_content">SPOR</span>
                            
                        </a>
                    <ul class="lm__links_block">
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='sportsbook' target="_self"
       title="SPOR"><i class='dynamic_icon' style='color:#EBDF9D'>&#57380</i><span class="lm_text_content">SPOR</span> </a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='livesports' target="_self"
       title="CANLI BAHİS"><i class='dynamic_icon' style='color:#EBDF9D'>&#57368</i><span class="lm_text_content">CANLI BAHİS</span> </a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='esports' target="_self"
       title="E-SPOR"><i class='dynamic_icon' style='color:#EBDF9D'>&#57357</i><span class="lm_text_content">E-SPOR</span> </a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='livescore' target="_self"
       title="CANLI SKOR"><i class='dynamic_icon' style='color:#EBDF9D'>&#57367</i><span class="lm_text_content">CANLI SKOR</span> </a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='livescore' target="_self"
       title="İSTATİSTİKLER"><i class='dynamic_icon' style='color:#EBDF9D'>&#57381</i><span class="lm_text_content">İSTATİSTİKLER</span> </a>

                                </li>
                    </ul>
                    <ul class="lm__links_block">
                        <li class="lm_link">
                            <a class="js_left_mn_items " href='#' target="_blank"
                               title="CANLI TV">
                                <i class='dynamic_icon' style='color:#EBDF9D'>&#57881</i>
                                <span class="lm_text_content"> CANLI TV</span>
                                
                            </a>
                        </li>
                    </ul>
                        <h3 class="lm__title">
                            
                            <span class="lm_text_content">CANLI CASİNO VE SLOT</span>
                            
                        </h3>
                    <ul class="lm__links_block">
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='casino' target="_self"
       title="3D SLOT"><i class='dynamic_icon' style='color:#EBDF9D'>&#57352</i><span class="lm_text_content">3D SLOT</span> <span class='dynamic_bagge jackpot'>JackPot</span></a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='livecasino' target="_self"
       title="CANLI CASİNO"><i class='dynamic_icon' style='color:#EBDF9D'>&#57365</i><span class="lm_text_content">CANLI CASİNO</span> <span class='dynamic_bagge premium'>Premium</span></a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='tvgames target="_self"
       title="TV OYUNLARI"><i class='dynamic_icon' style='color:#EBDF9D'>&#57383</i><span class="lm_text_content">TV OYUNLARI</span> </a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='virtualsports' target="_self"
       title="SANAL BAHİSLER"><i class='dynamic_icon' style='color:#EBDF9D'>&#57357</i><span class="lm_text_content">SANAL BAHİSLER</span> </a>

                                </li>
                    </ul>
                        <a class="lm__title_link js_left_mn_items" href='fastgames' target="_self"
                           title="HIZLI OYUNLAR">
                            
                            <span class="lm_text_content">HIZLI OYUNLAR</span>
                            
                        </a>
                    <ul class="lm__links_block">
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='#s' target="_self"
       title="Crasher"><i class='dynamic_icon' style='color:#EBDF9D'>&#58423</i><span class="lm_text_content">Crasher</span> </a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='#' target="_self"
       title="Plinkoman"><i class='dynamic_icon' style='color:#EBDF9D'>&#58393</i><span class="lm_text_content">Plinkoman</span> <span class='dynamic_bagge premium'>Premium</span></a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='#' target="_self"
       title="FMİNES"><i class='dynamic_icon' style='color:#EBDF9D'>&#57371</i><span class="lm_text_content">FMİNES</span> <span class='dynamic_bagge hot'>Hot</span></a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='# target="_self"
       title="GOLDEN RA"><i class='dynamic_icon' style='color:#EBDF9D'>&#57384</i><span class="lm_text_content">GOLDEN RA</span> <span class='dynamic_bagge new'>New</span></a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='#' target="_self"
       title="MR. THİMBLE"><i class='dynamic_icon' style='color:#EBDF9D'>&#57625</i><span class="lm_text_content">MR. THİMBLE</span> <span class='dynamic_bagge new'>New</span></a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='roket' target="_self"
       title="ROKET"><i class='dynamic_icon' style='color:#EBDF9D'>&#57376</i><span class="lm_text_content">ROKET</span> </a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='zeppelin' target="_self"
       title="ZEPPELİN"><i class='dynamic_icon' style='color:#EBDF9D'>&#57385</i><span class="lm_text_content">ZEPPELİN</span> <span class='dynamic_bagge premium'>Premium</span></a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='aviator' target="_self"
       title="AVİATOR"><i class='dynamic_icon' style='color:#EBDF9D'>&#57429</i><span class="lm_text_content">AVİATOR</span> <span class='dynamic_bagge premium'>Premium</span></a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='#' target="_self"
       title="JETX"><i class='dynamic_icon' style='color:#EBDF9D'>&#57464</i><span class="lm_text_content">JETX</span> </a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='cashow' target="_self"
       title="CASHSHOW"><i class='dynamic_icon' style='color:#EBDF9D'>&#57459</i><span class="lm_text_content">CASHSHOW</span> <span class='dynamic_bagge hot'>Hot</span></a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='#' target="_self"
       title="KENO EXPRESS"><i class='dynamic_icon' style='color:#EBDF9D'>&#57363</i><span class="lm_text_content">KENO EXPRESS</span> </a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='#' target="_self"
       title="HİLO"><i class='dynamic_icon' style='color:#EBDF9D'>&#57359</i><span class="lm_text_content">HİLO</span> </a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='#' target="_self"
       title="KENO"><i class='dynamic_icon' style='color:#EBDF9D'>&#57364</i><span class="lm_text_content">KENO</span> </a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='#' target="_self"
       title="CRASH"><i class='dynamic_icon' style='color:#EBDF9D'>&#57354</i><span class="lm_text_content">CRASH</span> </a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='# target="_self"
       title="SİCBO"><i class='dynamic_icon' style='color:#EBDF9D'>&#57378</i><span class="lm_text_content">SİCBO</span> </a>

                                </li>
                                <li class="lm_link">
                                        <a class="js_left_mn_items " href='#' target="_self"
       title="PENALTI"><i class='dynamic_icon' style='color:#EBDF9D'>&#57372</i><span class="lm_text_content">PENALTI</span> </a>

                                </li>
                    </ul>
                    <ul class="lm__links_block">
                        <li class="lm_link">
                            <a class="js_left_mn_items " href='bingo' target="_self"
                               title="TOMBALA">
                                <i class='dynamic_icon' style='color:#EBDF9D'>&#57364</i>
                                <span class="lm_text_content"> TOMBALA</span>
                                <span class='dynamic_bagge hot'>Hot</span>
                            </a>
                        </li>
                    </ul>
    </div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
    setActiveClassToPrMenuItems('js_left_mn_items');
    setActiveClassToPrMenuItems('js_hdr_mn_items');

    $(document).on('click', '.js_left_mn_items', function (e) {
        let href = $(this).attr('href');
        if (href && href.includes('#')) {
            if (document.getElementById('left-panel')) {
                $('#left-panel').panel('close');
            }
        }
    });
    window.addEventListener("hashchange", function (event) {
        setActiveClassToPrMenuItems('js_left_mn_items');
        setActiveClassToPrMenuItems('js_hdr_mn_items');
    });
</script>
            </div>
            <?php if(isset($us['id']))
{?>
<div id="right-panel" class="panel bgMain bg_right_panel right-menu--w-100 ui-panel ui-panel-position-right ui-panel-display-push ui-body-b ui-panel-animate ui-panel-open" data-position="right" data-role="panel" data-display="push" data-theme="b" data-dismissible="true">




<div class="ui-panel-inner"><aside class="right-menu">

    <div class="right-menu__header">
        <div class="right-menu__container">
            <div class="header__inner">
                <div class="header__info">
                    <p class="header__back js_right_menu_close">‹</p>
                    <p class="header__user-info"> </p>
                </div>
                <div class="header__icons-wrapper">
                    <span class="with-badge">
                        <a class="dynamic_icon ui-link" href="/Account/Inbox">
                            
                        </a>
                    </span>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="right-menu__user">
        <div class="right-menu__container">
            <div class="user__inner">

                <div class="user__image-wrapper">
                    <p class="user__image">
                        <span class="dynamic_icon">
                            
                        </span>
                    </p>
                </div>

                <div class="user__info js_copy_msg">
                    <p class="user__username"><?=$us['login']?></p>
                    <p class="user__id">
                        ID:
                        <span class="user__id--highlighted js_copy_val">7810455<?=$us['id']?></span>
                        <span class="dynamic_icon js_copy_button" data-val-msg="Kopyalandı">
                            
                        </span>
                    </p>
                </div>

            </div>
        </div>
    </div>


    <div class="right-menu__balance" ontouchstart="event.stopPropagation();">
        <div class="right-menu__container">
            <div class="balance__inner">

                <div class="balance__slider">

                    <div class="balance__card">
                        <div class="card__info-wrapper">
                            <div class="card__wallet-badge">
                                <span class="dynamic_icon">
                                    
                                </span>
                            </div>

                            <div class="card__balance-info">
                                <p class="card__balance-type">Gerçek Bakiye</p>
                                <p class="card__balance-count"><span id="playerBalance" class="highlighted"><?=$us['balance']?></span> TRY</p>
                            </div>
                        </div>


                        <div class="card__button-wrapper">
                                <a href="deposit" class="card__button ui-link">Para Yatırma</a>
                        </div>

                    </div>


                    <div class="balance__card hidden" id="bonusBalanceCont">
                        <div class="card__info-wrapper">

                            <div class="card__wallet-badge">
                                <span class="dynamic_icon">
                                    
                                </span>
                            </div>

                            <div class="card__balance-info">
                                <p class="card__balance-type">Bonus Bakiyesi</p>
                                <p class="card__balance-count"><span id="playerBonusBalance" class="highlighted"><?=$us['balance']?></span> TRY</p>
                            </div>
                        </div>

                        <div class="card__button-wrapper">
                            <a href="/Bonus/BonusHistory?scope=0" class="card__button card__button--secondary ui-link">Daha Fazlası</a>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>

    <div class="right-menu__nav">
        <ul class="nav__list">
            <li class="nav__list-item">
                <button class="nav__dropdown-head ui-btn ui-shadow ui-corner-all">
                    <span class="dynamic_icon">
                        
                    </span>
                    <span>
                        Profilim
                    </span>
                </button>
                <ul class="nav__list--sub">
                    <li class="nav__list-item--sub">
                        <a id="profile" href="profile" class="ui-link">
                            <p>Kişisel detaylar</p>
                            <span class="link-arrow">›</span>
                        </a>
                    </li>
                                            <li class="nav__list-item--sub">
                            <a href="tfa" class="ui-link">
                                <p>2 Aşamalı Güvenlik</p>
                                <span class="link-arrow">›</span>
                            </a>
                        </li>
                </ul>
            </li>

            <li class="nav__list-item">
                <button class="nav__dropdown-head ui-btn ui-shadow ui-corner-all">
                    <span class="dynamic_icon"></span>
                    <span>Ödemeler</span>
                </button>
                <ul class="nav__list--sub">
                    <li class="nav__list-item--sub">
                            <a href="deposit" class="ui-link">
                                <p>Para Yatırma</p>
                                <span class="link-arrow">›</span>
                            </a>
                    </li>
                    <li class="nav__list-item--sub">
                        <a href="withdraw" class="ui-link">
                            <p>Para Çekme</p>
                            <span class="link-arrow">›</span>
                        </a>
                    </li>
                    <li class="nav__list-item--sub">
                        <a href="pendingwithdraw" class="ui-link">
                            <p>Bekleyen Para Çekme İşlemleri</p>
                            <span class="link-arrow">›</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav__list-item">
                <button class="nav__dropdown-head ui-btn ui-shadow ui-corner-all">
                    <span class="dynamic_icon with-badge "></span>
                    <span>Teklifler</span>
                </button>
                <ul class="nav__list--sub">
                    <li class="nav__list-item--sub">

                        <a href="bonushistory" id="newBonuses" class="ui-link">
                            <p>
                                Yeni Bonuslar
                            </p>
                            <span class="link-arrow">›</span>
                        </a>
                    </li>
                    <li class="nav__list-item--sub">
                        <a href="freespin" id="activeBonuses" class="ui-link">
                            <p>
                                Free Spins and Free Bets
                            </p>
                            <span class="link-arrow">›</span>
                        </a>
                    </li>
                        <li class="nav__list-item--sub">
                            <a href="code" id="CheckPromoCode" class="ui-link">
                                <p>Promo Kod</p>
                                <span class="link-arrow">›</span>
                            </a>
                        </li>
                </ul>
            </li>

            <li class="nav__list-item">
                <button class="nav__dropdown-head ui-btn ui-shadow ui-corner-all">
                    <span class="dynamic_icon">
                        
                    </span>
                    <span>
                        Geçmiş
                    </span>
                </button>
                <ul class="nav__list--sub">
                    <li class="nav__list-item--sub">
                        <a href="gamehistory" id="gameHistory" class="ui-link">
                            <p>Oyun Geçmişi</p>
                            <span class="link-arrow">›</span>
                        </a>
                    </li>
                    <li class="nav__list-item--sub">
                        <a href="mybets" class="MyBetssportversion ui-link">
                            <p>Sport Bahis Geçmişi</p>
                            <span class="link-arrow">›</span>
                        </a>
                    </li>
                    <li class="nav__list-item--sub">
                        <a href="financial" id="transactionsHistory" class="ui-link">
                            <p>Finansal İşlemler</p>
                            <span class="link-arrow">›</span>
                        </a>
                    </li>
                    <li class="nav__list-item--sub">
                        <a href="editbalance" class="ui-link">
                            <p>Bakiye Düzeltmeleri</p>
                            <span class="link-arrow">›</span>
                        </a>
                    </li>
                </ul>
            </li>



            <li class="nav__list-item">
                <a href="resetpassword" class="nav__dropdown-head ui-link">
                    <span class="dynamic_icon"></span>
                    <span>Şifre değiştir</span>
                </a>
            </li>

            <li class="nav__list-item">
                <a href="javascript:;" onclick="logOut()" class="nav__dropdown-head ui-link" id="logout">
                    <span class="dynamic_icon"></span>
                    <span>Çıkış</span>
                </a>
            </li>

        </ul>
    </div>

</aside><script>
    $(".js_right_menu_close").click(function () {
        $("#right-panel").panel("close");
    });

    $(".nav__dropdown-head").click(function () {
        this.parentElement.classList.toggle('opened');
    });
</script></div>


        </div>
        <?} else {?>
        <div id="right-panel" class="panel bgMain bg_right_panel "
             data-position="right"
             data-role="panel"
             data-display="push"
             data-theme="b"
             data-dismissible="true">



    <div class="platformRightLoginPanel" id="sidebar-login">
<form id="login_form" class="login_container" >
<input name="__RequestVerificationToken" type="hidden" value="vbAhSzpNA8OGuSl2E6QIHX-zMfjmoZxuJpl460-RF8GXRDWsngC1EEyRYaA5eFtjYoTNy8-by6-HQUaZzYMXEuNiE7TGOuoxV8o-xoJfO5M1" />            <div class="r_login__row">
                    <div class="platformLoginRightLogo"></div>
            </div>
            <input name="GameName" id="GameName" value="" type="hidden">
            <div class="r_login__row PlatformLoginPassContainer">



<input Class="login_input inp" automation="email_input" data-val="true" data-val-required="Lütfen kullanıcı adınızı giriniz" id="email" name="login" placeholder="Kullanıcı adı / E-mail / Cep numarası" required="required" tabindex="1" type="text" value="" />


            </div>
            <div class="r_login__row PlatformLoginPassContainer eye_block">
<input Class="platformPassInput inp" autocomplete="off" automation="password_input" data-val="true" data-val-required="Lütfen şifrenizi giriniz." id="password" name="password" placeholder="Şifre" required="required" tabindex="2" type="password" />            </div>
               
                <div class="r_login__row">
                    <a href="javascript:;" onclick="logIn()" class="platformLoginButton btn_prim tl_btn bg-primary" id="loginButton" automation="login_button">&#220;YE GİRİŞİ</a>
                </div>
                    <div class="r_login__row">
                        <a class="platformForgPass" href="#">Şifrenizi mi unuttunuz?</a>
                    </div>
</form>
        <input type="hidden" id="gameUrl" value="" />
        <input type="hidden" id="loginHref" value="" />

    </div>


<script type="text/javascript">
    var captchaCounter = 0;
    var captchaValid = true;
    $.validator.unobtrusive.parse($('#sidebar-login'));

    var captchaSession = '0';

    $(function() {
        function login() {
            if ('False' == 'False' && '1096' != '1040') {
                if (captchaCounter >= '3' || captchaSession >= '3') {
                    if ('1096' != '2' && '1096' != '1068'
                        && '1096' != '1171' && '1096' != '1094') {
                        captchaValid = ValidateCaptcha();
                    }
                }
            }
            var gameUrl = $('#gameUrl').val();
            var loginHref = $('#loginHref').val();
            $.validator.unobtrusive.parse($('#sidebar-login'));
            $('#loginButton').attr('disabled', 'disabled');
            $("#loadingSpan").removeClass('dis_none');
            var form = $('#sidebar-login form');

            if ('False' == 'False') {
                if ('1096' == 2 && (captchaCounter >= '3' || captchaSession >= '3')) {
                    var v = grecaptcha.getResponse();
                    if (v.length == 0) {
                        $('#gCaptcha').addClass("input-validation-error");
                        captchaValid = false;
                        $("#loadingSpan").addClass('dis_none');
                    }
                    else {
                        $('#gCaptcha').removeClass("input-validation-error");
                        captchaValid = true;
                    }
                }
            }

            if (!form.valid()) {
                $('#loginButton').removeAttr('disabled');
                $("#loadingSpan").addClass('dis_none');
                return;
            }

            if (captchaValid) {

                $.ajax({
                    url: "<?=$main['sitelink']?>/tr/Login/Login",
                    type: "POST",
                    data: $(form).serialize() + '&gameUrl=' + gameUrl + "&loginHref=" + loginHref,
                    datatype: "json",
                    success: function (result) {
                        if (!result.Success) {
                            if (result.OpenTwoFaPopup) {
                                document.location = '/Login/LoginTwoFaConfirm';
                                return;
                            }
                            if (result.CaptchaError) {
                                $('#Captcha').removeClass("valid").addClass("error");
                            }
                            $("#loginerrormessage").text(result.Message);
                            $("#loginerrormessage").show();
                            $("#loginerrormessage").removeClass('dis_none');
                            $("#loginerrormessage").css("display", "block");
                            $('#loginButton').removeAttr('disabled');
                            $("#loadingSpan").addClass('dis_none');

                            if ('False' == 'False') {
                                switch ('1096') {
                                case '2':
                                case '1068':
                                case '1171':
                                    captchaCounter = result.Code;
                                    if (captchaCounter >= '3') {
                                        $(".captchaCont").css("display", "block");
                                        if (captchaCounter >= '3' + 1) {
                                            grecaptcha.reset();
                                        }
                                    }
                                        break;
                                    case '1040':
                                        break;
                                    default:
                                        captchaCounter = result.Code;
                                    if (captchaCounter >= '3') {
                                        $('.refreshLoginCaptcha').trigger('click');
                                        $('#Captcha').val('');
                                        $('.login_captcha_block').removeClass('dis_none');
                                    }
                                    break;
                                }
                            }

                        }
                        else {
                            if (result.Code == "sport" || result.Code == "casino") {
                                document.location.href = result.Message;
                            } else {
                                document.location.href = "/" + result.Message;
                            }
                        }
                    }});

            }
            $("#loadingSpan").addClass('dis_none');
        }

        $('#password, #email').on('keypress', function (e) {
            if (e.keyCode == 13) {
                login();
            }
        });

        $('#loginButton').click(function () {
            login();
        });


    });

    function fixReturnUrl() {
        var fixedUrl = document.location.href.replace(document.location.origin, '');
        if (fixedUrl.includes('#')) {
            $('#loginHref').val(fixedUrl);
        }
    }
    $("._password").click(function () {
        if ($(this).hasClass('opened_pass')) {
            $(this).removeClass('opened_pass');
            $('#password').attr('type', 'text');
        } else {
            $('#password').attr('type', 'password');
            $(this).addClass('opened_pass');
        }
    });
</script>

        <script type="text/javascript">
                            $(".refreshLoginCaptcha").on("click",
                                function(e) {
                        var $parent = $(this).closest('div.login_captcha_block');
                        var $guid = $parent.find('input[name=captcha-guid]');
                        var $img = $parent.find('img');

                        $.getJSON('/Common/RefreshCaptcha',
                                        {
                        guid: $guid.val(),
                                height: $img.attr('height'),
                                width: $img.attr('width')
                            },
                            function(data) {
                                $guid.val(data.Guid);
                                $img.attr('src', '/Common/Captcha?guid=' + data.Guid);
                        });

                        event.stopPropagation();
                        event.preventDefault();
                        return false;
                    });
                $('#Captcha').on('blur keyup',
                    function(event) {
        captchaValid = ValidateCaptcha();
    });

                function ValidateCaptcha() {
                    $('#loginerrormessage').html('');
        if ($('#Captcha').val().length != 5) {
                        $('#Captcha').removeClass("valid").addClass("error");
                        $('#recaptchaError span').html('G&#252;venlik kodu alanı boş veya resimle eşleşmiyor');
            return false;
        } else {
                        $('#Captcha').removeClass("error").addClass("valid");
                        $('#recaptchaError span').html('');
            return true;
        }
    }

                if ('False'.toLowerCase() == "true") {
                    $('.login_captcha_block').removeClass('dis_none');
}
        </script>

        </div>

    <?}?>
    </div>
    <div id="verification_popup"></div>
    <div id="info_div" style="display: none;"></div>
    <div id="game_info_div" style="display: none;"></div>
<div id="comm100-button-bb65c9b1-e8d8-4496-8d3b-34c3af191f15"></div>
<script type="text/javascript">
    var Comm100API = Comm100API || {}; (function (t) {
        function e(e) { var a = document.createElement("script"), c = document.getElementsByTagName("script")[0]; a.type = "text/javascript", a.async = !0, a.src = e + t.site_id, c.parentNode.insertBefore(a, c) }
        t.chat_buttons = t.chat_buttons || [], t.chat_buttons.push({ code_plan: "bb65c9b1-e8d8-4496-8d3b-34c3af191f15", div_id: "comm100-button-bb65c9b1-e8d8-4496-8d3b-34c3af191f15" }), t.site_id = 90001146, t.main_code_plan = "bb65c9b1-e8d8-4496-8d3b-34c3af191f15", e("https://vue.comm100.com/livechat.ashx?siteId="), setTimeout(function () { t.loaded || e("https://standby.comm100vue.com/livechat.ashx?siteId=") }, 5e3)
    })(Comm100API || {})
</script>
            <div class="hidden to_top_cont" id="js_to_top_cont">
            <button class="to_top text-center" type="button" data-role="none" id="js_to_top">
                <i class="dynamic_icon m-0">&#57600</i>
            </button>
        </div>
</body>
</html>



<script type="text/javascript">
    $(document).bind('mobileinit', function () {
        $.mobile.loader.prototype.options.text = "...";
        $.mobile.loader.prototype.options.textVisible = true;
        $.mobile.loader.prototype.options.theme = "b";
        $.mobile.loader.prototype.options.textonly = false;
    });

    $(document).on({
        ajaxSend: function (e, request, settings) {
            if (!settings.url.includes('/Common/GetLoginStatus') && !settings.url.includes('/Common/GetJack') &&
                !settings.url.includes('/Common/GetUserBalance') && !settings.url.includes('/Common/GetBalanceStatus') &&
                !settings.url.includes('/Account/ReferrerDebitCredit')) {
                $.mobile.loading('show');
            }
        },
        ajaxStop: function () { $.mobile.loading('hide'); },
        ajaxError: function () { $.mobile.loading('hide'); }
    });


    function WithdrawalTrigger() {
        window.location.href = "/Account/Withdrawal";
    }
</script>


<script>
    $(document).ready(function () {
    //var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
    var url = window.location.href.toLowerCase();
    if (url.indexOf("betongames") > -1) {


            $("#footer").css("display", "none");

    }


});
    var url = window.location.href.toLowerCase();
    var passChangeRequired = 'False';
    if (!(url.indexOf('forcechangepassword') > -1) && passChangeRequired.toLowerCase() == 'true' && !url.includes('/account/agent')) {
        window.location.replace('/Account/ForceChangePassword');
    }

    if ('1096' == '2' && 'false' == 'true'
        && 'false' == 'true') {
        if (!(url.indexOf('changeloginpass') > -1)) {
        window.location.replace('/Account/ChangeLoginPass');
    }
    }
var getGameUrlTimeOut;
    function getGameUrl(controller, action, url = '') {
        this.event.preventDefault();
        $.ajax({
            type: 'GET',
            contentType: "application/json; charset=utf-8",
            url: '/' + controller + '/' + action + '?url=' + url,
            success: function (data) {
                if (data.Success == false) {
                    $("#left-panel").panel("close");
                    clearTimeout(getGameUrlTimeOut);
                    if ('1096' == 2) {
                        $('#game_info_div').hide();
                        if (data.Code == "168") {
                            $('#game_info_div').html('<div class="info_content"> <div> <p class="info_content_title">Error</p> Oyun y&#252;klenemiyor.' + '</br>' + data.Message + '</br> Code: ' + data.Code + '</div><span id="close_game_error" class="reg_close"></span></div>').fadeIn();
                        } else if (data.Code != "") {
                            $('#game_info_div').html('<div class="info_content"> <div> <p class="info_content_title">Error</p>  Oyun y&#252;klenemiyor.' + '</br> Code: ' + data.Code + '</div><span id="close_game_error" class="reg_close"></span></div>').fadeIn();
                        } else {
                            $('#game_info_div').html('<div class="info_content"> <div> <p class="info_content_title">Error</p> ' + data.Message + '</div><span id="close_game_error" class="reg_close"></span></div>').fadeIn();
                        }
                        $('#close_game_error').on('click', function () {
                            $('#game_info_div').fadeOut();
                        })
                        getGameUrlTimeOut = setTimeout(function () {
                            $('#game_info_div').fadeOut();
                        },
                            7000);
                    } else {
                        $('#info_div').hide();
                        if (data.Code == "168") {
                            $('#info_div').html('Oyun y&#252;klenemiyor.' + '</br>' + data.Message + '</br> Error Code: ' + data.Code).fadeIn();
                        } else if (data.Code != "") {
                            $('#info_div').html('Oyun y&#252;klenemiyor.' + '</br> Error Code: ' + data.Code).fadeIn();
                        } else {
                            $('#info_div').html(data.Message).fadeIn();
                        }
                        getGameUrlTimeOut = setTimeout(function () {
                            $('#info_div').fadeOut();
                        },
                            3000);
                    }
                    return false;
                } else {
                    document.location.href = data.Message;
                    return true;
                }
            }
        });
    }
    $(document).on('click',
        '.login_href',
        function() {
            $('#loginHref').val($(this).attr('login-href'));
        });
</script>


<script>

    $("#CountryCode").change(function () {
        $("#countryphonecode_wraper").css("display", "block");
    });


</script>

                

                        


    <script>

        $('.collapse_dropdown_leftmenu_btn').on('click', function () {
            $(this).closest($('.collapse_dropdown_leftmenu')).toggleClass('opened');
        })

    </script>

    

        
    <script>

    if ('false' == 'true') {
        function RefreshToken() {
            $.ajax({
                url: '/Account/RefreshToken',
                type: 'post',
                dataType: 'json',
                success: function (data) {
                }
            });
        }

        setInterval(function () {
            RefreshToken();
        }, 300000);
    }

    </script>


        <script>
            setCookie('_userLoggedIn', null, '-1');
        </script>

    <script>
    // anims
    $(window).on('load', function () {

        if ($('.top_jackpots__anim').length > 0) {

            function jackpotAnim(elnum) {
                $('.top_jackpots__anim').eq(elnum).css('background-image', 'url(https://cdn-plat.apidigi.com/plat/prd/Img/icons/redesign/jackpot_backgr.png)');
                var jackpotAnimPos = 0;
                var jackpotAnimInt = setInterval(function () {
                    $('.top_jackpots__anim').eq(elnum).css('background-position', '0px -' + jackpotAnimPos + 'px');
                    jackpotAnimPos = jackpotAnimPos + 92.6;
                    jackpotAnimPos = jackpotAnimPos + 92.6;

                    if (jackpotAnimPos > 2500) {
                        clearInterval(jackpotAnimInt);
                    }
                }, 50);
            }

            for (var i = 0; i < 4; i++) {
                (function (i) {
                    setTimeout(function () { jackpotAnim(i) }, i * 400);
                })(i);
            }
            setInterval(function () {
                for (var i = 0; i < 4; i++) {
                    (function (i) {
                        setTimeout(function () { jackpotAnim(i) }, i * 400);
                    })(i);
                }
            }, 10000);
        }
    })
    </script>

        <style>
    .ui-loader .ui-icon-loading {
        background-color: transparent;
        background-image: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1096/loader.gif') !important;
    }


        </style>

    <style>
    :root {
        --cdn-logo-mob_png: url('https://cdn-plat.apidigi.com/plat/prd//Img/mobile/partners/1096/logo.png');
        --cdn-logo_png: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1096/logo.png');
        --cdn-logoSm-mob_png: url('https://cdn-plat.apidigi.com/plat/prd//Img/mobile/partners/1096/logoSm.png');
        --cdn-logoSm_png: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1096/logoSm.png');
        --cdn-logo-mob_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/mobile/partners/1096/logo.svg');
        --cdn-logo_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1096/logo.svg');
        --cdn-logoSm-mob_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/mobile/partners/1096/logoSm.svg');
        --cdn-logoSm_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1096/logoSm.svg');
        --cdn-logo-mob_gif: url('https://cdn-plat.apidigi.com/plat/prd/Img/mobile/partners/1096/logoGif.gif');
        --cdn-footer_sprite: url('https://cdn-plat.apidigi.com/plat/prd//Img/partners/1096/footer_sprite.png');
        --cdn-newBadge_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/new.svg');
        --cdn-newBadgeLobby_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/SVG/ic_new.svg');
        --cdn-hotBadgeLobby_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/SVG/ic_hot.svg');
        --cdn-topBadgeLobby_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/SVG/ic_top.svg');
        --cdn-jackpotBadgeLobby_svg: url('https://cdn-plat.apidigi.com/plat/prd//Img/SVG/ic_jackpot.svg');
        --cdn-jackpot_icons: url('https://cdn-plat.apidigi.com/plat/prd/Img/icons/redesign/egt_jackpot_icons.png');
    }


    @media only screen and (min-width: 800px) {
        #home-sport {
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/img-betting-s.jpg");
            background-size: cover;
        }

        #home-betgamestv {
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/betgamestv.jpg");
            background-size: cover;
        }

        .hometvbet strong:before {
            content: "Í";
        }

        #home-sport-live {
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/img-live.jpg");
            background-size: cover;
        }

        #home-promotions {
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/promo.jpg");
            background-size: cover;
        }

        #home-stat {
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/ing-stat.jpg");
            background-size: cover;
        }

        #home-euro {
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/img-euro2016.png");
            background-size: cover;
        }

        #home-livescore {
            background-size: cover;
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/img-live-score.jpg");
        }

        #home-slots {
            background-size: cover;
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/img-slots.jpg");
        }

        #home-casino {
            background-size: cover;
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/img-casino.jpg");
        }

        #home-tv-games {
            background-size: cover;
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/img-tv-games.jpg");
        }

        #home-live-casino {
            background-size: cover;
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/img-live-casino.jpg");
        }

        #home-keno-live {
            background-size: cover;
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/KenoLive.jpg");
        }

        #home-financials {
            background-size: cover;
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/finance_bg.jpg");
        }

        #home-belot {
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/blot_home.png");
            background-size: cover;
        }

        #home-backgammon {
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/partners/108/Backgammon.jpg");
            background-size: cover;
        }

        #home-game {
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/game.png");
            background-size: cover;
        }

        #home-domino {
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/partners/108/Domino.jpg");
            background-size: cover;
        }

        #home-sicbo {
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/Sicbo.png");
            background-size: cover;
        }

        #home-hokm {
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/hokm.png");
            background-size: cover;
        }

        #home-minesweeper {
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/Minesweeper.png");
            background-size: cover;
        }

        #home-Tombala {
            background-image: url("https://cdn-plat.apidigi.com/plat/prd/Img/mobile/common/tombala.jpg");
            background-size: cover;
        }
    }

    </style>

    <script>
        /*for skinner*/
        window.parent.postMessage({ cssText: '', sender: 'updateCss' }, '*');

        window.addEventListener('message', (event) => {

            if (event.data.sender !== 'skinner') return;

            var cssText = event.data.cssText;

            if (!cssText) return console.log('no css text found');

            createOrUpdateStyle(cssText);
        });

        var skinnerGeneratedStyleID = 'skinner-generated-style';

        function createOrUpdateStyle(cssText) {
            var existingStyle = document.getElementById(skinnerGeneratedStyleID);

            if (existingStyle) return existingStyle.innerHTML = cssText;

            var options = { innerHTML: cssText, id: skinnerGeneratedStyleID };

            var style = createStyle(options);

            document.head.appendChild(style);
        }

        function createStyle(options) {
            options = options || {};
            var style = document.createElement('style');
            Object.assign(style, options);
            return style;
        }

    </script>

                <script>
                $(document).ready(function () {
                    if (sessionStorage.getItem("checkboxval") == null) {
                        var sessioncheckValue = true;
                        sessionStorage.setItem("checkboxval", sessioncheckValue);

                        var iframesrc = $("#iframesrc").attr("src");
                        if (iframesrc != undefined) {
                            iframesrc = iframesrc.replace("#/Sport/ReactIndex", "");
                            $("#iframesrc").attr("src", iframesrc + "#/Sport/ReactIndex");
                        }
                    }
                });
            </script>
        <script type="text/javascript">

        $(document).ready(function () {

            if (sessionStorage.getItem("checkboxval") == 'true') {
                $('#newsport').prop('checked', true);
            } else {
                $('#newsport').prop('checked', false);
            }

            $('#newsport').click(function () {
                if ($('#newsport').prop('checked') == true) {

                    var sessioncheckValue = true;
                    sessionStorage.setItem("checkboxval", sessioncheckValue);
                    $('#newsport').prop('checked', true);
                } else {
                    var sessioncheckValue = false;
                    sessionStorage.setItem("checkboxval", sessioncheckValue);
                    $('#newsport').prop('checked', false);
                }

                // Get the checkbox
                var checkBox = document.getElementById("newsport");

                // If the checkbox is checked, display the output text
                if (checkBox.checked == true) {

                    document.location.href = "/Sport/ReactIndex";
                } else {

                    document.location.href = "/Sport";
                }
            });

            var sportReactIndex = location.href.toLowerCase().indexOf('/sport/reactindex') > -1 ? '' : '<?=$main['sitelink']?>/tr/Sport/ReactIndex';

            if (sessionStorage.getItem("checkboxval") == 'true') {

                var iframesrc = $("#iframesrc").attr("src");

                if (iframesrc != undefined) {
                    iframesrc = iframesrc.replace("#/Sport/ReactIndex", "");
                    $("#iframesrc").attr("src", iframesrc + "#/Sport/ReactIndex");
                }


                $('.sportversion').attr('href', "/Sport/ReactIndex");
                $('.Livesportversion').attr('href', sportReactIndex + "#Live/page");
                $('.BetCheckersportversion').attr('href', sportReactIndex + "#?popup=BetChecker");
                $('.MyBetssportversion').attr('href', sportReactIndex + "#?popup=MyBets");
                $('#SportBonusPanel').attr('href', sportReactIndex + "#?popup=Bonuses");
                $('#SportBonusPanel').children().find('#js_SportBonusLink').attr('href', sportReactIndex + "#?popup=Bonuses");
                $('.Prematch').attr('href', sportReactIndex + "#SportEvent");
                $('.calendar').attr('href', sportReactIndex + "#calendar");

                $('.Livesportversion, .BetCheckersportversion, .Prematch').click(function () {
                    $("#left-panel").panel("close");
                });

                $('.MyBetssportversion').click(function () {
                    $("#right-panel").panel("close");
                });

                $('#SportBonusPanel #js_SportBonusLink').click(function () {
                    $("#right-panel").panel("close");
                });
            } else {
                var iframesrc = $("#iframesrc").attr("src");


                if (iframesrc != undefined) {
                    iframesrc = iframesrc.replace("#/Sport/ReactIndex", "");
                    $("#iframesrc").attr("src", iframesrc);
                }

                $('.sportversion').attr('href', "/Sport");
                $('.Livesportversion').attr('href', "/sport/live");
                $('.BetCheckersportversion').attr('href', "/Sport/BetChecker");
                $('.Prematch').attr('href', "/Sport/Upcoming");
                $('#SportBonusPanel').attr('href', "/Sport/BonusesHistory");
                $('#SportBonusPanel').children().find('#js_SportBonusLink').attr('href', "/Sport/BonusesHistory");
            }
        });

    </script>

<style>
    body {
        --logo-santa-hat: url('https://cdn-plat.apidigi.com/plat/prd/Img/themes/2023/santa-hat.png');
        --type_1--footer-bg: url('https://cdn-plat.apidigi.com/plat/prd/Img/mobile/themes/2023/type_1/footer-dec.png');
        --type_2--footer-bg: url('https://cdn-plat.apidigi.com/plat/prd/Img/mobile/themes/2023/type_2/footer-dec.png');
        --type_3--footer-bg: url('https://cdn-plat.apidigi.com/plat/prd/Img/mobile/themes/2023/type_3/footer-dec.png');
        --type_4--footer-bg: url('https://cdn-plat.apidigi.com/plat/prd/Img/mobile/themes/2023/type_4/footer-dec.png');
    }
</style>
<?php include 'modules/header.php';?>

<style>
    #reactMobile {
        position: relative;
    }
    #dm-main-container.dm__wrapper, body {
        background: var(--bodyBg)!important;
        color: var(--bodyTxt)!important;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    #dm-main-container {
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        font-family: Roboto,-apple-system,BlinkMacSystemFont,Segoe UI,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
        position: relative;
        touch-action: manipulation;
    }
    #dm-main-container {
        --font-size-asian: 11px;
        --font-size-base: 12px;
        --font-size-medium: 14px;
        --font-weight-base: normal;
    }
    .dWdIcJ {
        min-height: 400px;
        height: 100%;
        width: 100%;
        font-size: 10px;
        line-height: 1;
        box-sizing: border-box;
        font-family: Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        -webkit-tap-highlight-color: transparent;
    }
    #root, .dm__wrapper {
        height: 100%;
    }
    .dm__wrapper {
        --gap_xs: 6px;
        --gap_s: 8px;
        --gap_m: 12px;
        --gap_l: 16px;
    }
    .dm--cont {
        font-size: 10px;
        line-height: 1;
        width: 100%;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    #dm-main-container .dm__loader-cont {
        background-color: #0009;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm__loader {
        height: 116px;
        position: relative;
        width: 116px;
    }
    #dm-main-container .dm__loader div:first-child {
        border-color: #f14100;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm__loader div {
        animation: lds-ripple 1s cubic-bezier(0,.2,.8,1) infinite;
        border-radius: 50%;
        border-style: solid;
        border-width: 5px;
        height: 100%;
        opacity: 1;
        position: absolute;
        width: 100%;
    }
    #dm-main-container .dm__loader div:nth-child(2) {
        border-color: #ffb700;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm__loader div:nth-child(2) {
        animation-delay: -.5s;
    }
    .dm__loader div {
        animation: lds-ripple 1s cubic-bezier(0,.2,.8,1) infinite;
        border-radius: 50%;
        border-style: solid;
        border-width: 5px;
        height: 100%;
        opacity: 1;
        position: absolute;
        width: 100%;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm__wrapper__inner {
        transition: transform .25s ease-in-out;
    }
    .dm-z-index-1 {
        z-index: 1;
    }
    .dm-h-100 {
        height: 100%;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm-h-100 {
        height: 100%;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .OsMld.OsMld {
        position: relative;
        width: 100%;
        height: 44px;
        z-index: 11;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        box-shadow: rgb(0 0 0 / 40%) 0px 3px 6px;
        padding-right: 26px;
        padding-left: 16px;
        background-color: rgb(34, 41, 7);
        color: rgb(153, 153, 153);
        font-size: 14px;
        text-transform: uppercase;
        font-weight: 500;
        flex-shrink: 0;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .OsMld.OsMld > div {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-flex: 1;
        flex-grow: 1;
        min-width: 1px;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .hlENrR.hlENrR {
        transform: translateX(50%);
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .jzxBTS {
        display: inline-block;
        text-rendering: auto;
        font-weight: normal;
        font-style: normal;
        font-size: 30px;
        text-transform: none;
        text-align: center;
        color: inherit;
        transition: inherit;
        direction: ltr !important;
        font-family: "SportDigi Standard Icons", sans-serif !important;
    }
    #dm-main-container .dm__popup-bg {
        background-color: var(--dominantBg)!important;
        color: var(--dominantTxt2)!important;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm_mh_100-head {
        min-height: calc(100% - 44px);
    }
    .dm__popup_filter, .dm__popup_filter-with-tab {
        padding-bottom: 15px;
    }
    .dm__popup_filter {
        overflow-y: auto;
        position: relative;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm-pt-24 {
        padding-top: 24px!important;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm__popup_filter .dm__input_cont {
        position: relative;
    }
    .dm__input_cont {
        display: flex;
        flex-direction: column;
    }
    .dm-input-control {
        margin-bottom: 20px;
    }
    .dm-px-32 {
        padding-left: 32px!important;
        padding-right: 32px!important;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm__input_cont label {
        font-size: var(--font-size-base);
        font-weight: var(--font-weight-base);
        line-height: 13px;
        margin-bottom: 3px;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm__input_cont .dm--input-select_wrapper {
        width: 100%;
    }
    .dm--input-select_wrapper {
        position: relative;
    }
    #dm-main-container .dm--input, #dm-main-container .dm--input-calendar input, #dm-main-container .dm--input-imit, #dm-main-container .dm__keyboard_trigger {
        background: var(--inputG)!important;
        border: 1px solid var(--inputBorder)!important;
        border-radius: var(--inputRadius)!important;
        color: var(--inputTxt)!important;
    }
    #dm-main-container button, #dm-main-container input, #dm-main-container select, #dm-main-container textarea {
        font-family: inherit;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm--input-select_wrapper .dm--input-select {
        width: 100%;
    }
    .dm--shadow-light {
        box-shadow: 0 1px 4px #0000004d;
    }
    .dm--input-imit {
        border: none;
        border-radius: 4px;
        font-size: 16px;
        height: 44px;
        line-height: 44px;
        overflow: hidden;
        padding: 0 10px;
        position: relative;
        text-overflow: ellipsis;
        transition: background-color .2s;
        white-space: nowrap;
    }
    .dm--input-select {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm__popup_filter .dm__input_cont {
        position: relative;
    }
    .dm__input_cont {
        display: flex;
        flex-direction: column;
    }
    .dm-input-control {
        margin-bottom: 20px;
    }
    .dm-px-32 {
        padding-left: 32px!important;
        padding-right: 32px!important;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm__input_cont label {
        font-size: var(--font-size-base);
        font-weight: var(--font-weight-base);
        line-height: 13px;
        margin-bottom: 3px;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm__input_wrapper {
        position: relative;
    }
    #dm-main-container .dm--input, #dm-main-container .dm--input-calendar input, #dm-main-container .dm--input-imit, #dm-main-container .dm__keyboard_trigger {
        background: var(--inputG)!important;
        border: 1px solid var(--inputBorder)!important;
        border-radius: var(--inputRadius)!important;
        color: var(--inputTxt)!important;
    }
    #dm-main-container button, #dm-main-container input, #dm-main-container select, #dm-main-container textarea {
        font-family: inherit;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm__input_wrapper .dm--input {
        width: 100%;
    }
    .dm--input[type=number] {
        -moz-appearance: textfield;
    }
    .dm--shadow-light {
        box-shadow: 0 1px 4px #0000004d;
    }
    .dm--input {
        -webkit-appearance: none;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        height: 44px;
        line-height: 44px;
        padding: 0 10px;
        transition: background-color .2s;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm-input-control {
        margin-bottom: 20px;
    }
    .dm-px-32 {
        padding-left: 32px!important;
        padding-right: 32px!important;
    }
    #dm-main-container .dm__btn {
        background: var(--buttonG);
        border-radius: var(--buttonRadius)!important;
        color: var(--buttonTxt);
    }
    #dm-main-container button, #dm-main-container input, #dm-main-container select, #dm-main-container textarea {
        font-family: inherit;
    }
    #dm-main-container, #dm-main-container *, #dm-main-container :after, #dm-main-container :before {
        box-sizing: border-box;
    }
    .dm__btn-shadow {
        box-shadow: 0 1px 4px 0 #00000075;
    }
    .dm__btn {
        padding: 14px 10px;
    }
    .dm__btn, .dm__btn1 {
        -webkit-appearance: none;
        border: none;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 500;
        line-height: 16px;
        text-align: center;
        text-transform: uppercase;
    }
    .dm-display-block {
        display: block;
    }
    .dm-w-100 {
        width: 100%;
    }
</style>

<div>
    <div id="reactMobile" data-lang="tr">
        <div id="dm-main-container" class="sc-bcXHqe dWdIcJ dm--cont dm__wrapper dg_sport_images dg_tournament_images" lang="tr">
            <div class="dm_show_top_jackpot">
            </div>
            <div class="dm__loader-cont dm--fully-centered mb-110">

            </div>
            <div class="dm__wrapper__inner dm-h-100 dm-z-index-1">
                <div class=" dm-h-100">
                    <div class="sc-pyfCe OsMld">
                        <div>Bahis Denetleyicisi</div>
                        <span class="sc-jrcTuL hlENrR">
              <i class="sc-dkrFOg jzxBTS"></i>
            </span>
                    </div>
                    <div class="dm__popup_filter dm__popup-bg dm_mh_100-head">
                        <form class="dm-pt-24" data-gtm-form-interact-id="0">
                            <div class="dm__input_cont dm-px-32 dm-input-control">
                                <label>Tür</label>
                                <div class="dm--input-select_wrapper">
                                    <select id="dg-m-bet-checker-filter-type" class="dm--input-imit dm--shadow-light dm--input-select" name="type" data-gtm-form-interact-field-id="0">
                                        <option value="3">Turnuva</option>
                                        <option value="2">Diğer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="dm__input_cont dm__input--issue dm-px-32 dm-input-control">
                                <label>Bahis Kuponu ID</label>
                                <div class="dm__input_wrapper">
                                    <input id="dg-m-bet-checker-number-type" type="number" name="checkNumber" class="dm--shadow-light dm--input" placeholder="Lütfen Bahis Kuponu ID Numaranızı Girin" inputmode="numeric" required="">
                                </div>
                            </div>
                            <div class="dm-px-32 dm-input-control">
                                <button type="submit" style="background-color: #e3d59a; color: #000000e6 !important; border-radius: 10px !important;" class="dm__btn dm__btn--primary dm__btn-shadow dm-display-block dm-w-100">Kontrol</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
            <a class="yandex_mail ui-link" href="cdn-cgi/l/email-protection.html#3652534542535d7651445758524657455e575453421855595b" target="_blank" rel="noopener"></a>
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
        background-image: url('plat/prd//img/partners/1093/loader.gif') !important;
    }


</style>
<style>
    :root {
        --cdn-logo-mob_png: url('plat/prd//img/mobile/partners/1093/logo.png');
        --cdn-logo_png: url('plat/prd//img/partners/1093/logo.png');
        --cdn-logoSm-mob_png: url('https://cdn-plat.apidigi.com/plat/prd//img/mobile/partners/1093/logoSm.png');
        --cdn-logoSm_png: url('plat/prd//img/partners/1093/logoSm.png');
        --cdn-logo-mob_svg: url('https://cdn-plat.apidigi.com/plat/prd//img/mobile/partners/1093/logo.svg');
        --cdn-logo_svg: url('https://cdn-plat.apidigi.com/plat/prd//img/partners/1093/logo.svg');
        --cdn-logoSm-mob_svg: url('https://cdn-plat.apidigi.com/plat/prd//img/mobile/partners/1093/logoSm.svg');
        --cdn-logoSm_svg: url('https://cdn-plat.apidigi.com/plat/prd//img/partners/1093/logoSm.svg');
        --cdn-logo-mob_gif: url('https://cdn-plat.apidigi.com/plat/prd//img/mobile/partners/1093/logoGif.gif');
        --cdn-footer_sprite: url('plat/prd//img/partners/1093/footer_sprite.png');
        --cdn-newBadge_svg: url('plat/prd//img/new.svg');
        --cdn-newBadgeLobby_svg: url('plat/prd//img/SVG/ic_new.svg');
        --cdn-hotBadgeLobby_svg: url('plat/prd//img/SVG/ic_hot.svg');
        --cdn-topBadgeLobby_svg: url('plat/prd//img/SVG/ic_top.svg');
        --cdn-jackpotBadgeLobby_svg: url('plat/prd//img/SVG/ic_jackpot.svg');
        --cdn-jackpot_icons: url('plat/prd//img/icons/redesign/egt_jackpot_icons.png');
    }


    @media only screen and (min-width: 800px) {

        .hometvbet strong:before {
            content: "Í";
        }
    }

</style>
<style>
    body {
        --logo-santa-hat: url('plat/prd//img/themes/2023/santa-hat.png');
        --type_1--footer-bg: url('plat/prd//img/mobile/themes/2023/type_1/footer-dec.png');
        --type_2--footer-bg: url('plat/prd//img/mobile/themes/2023/type_2/footer-dec.png');
        --type_3--footer-bg: url('plat/prd//img/mobile/themes/2023/type_3/footer-dec.png');
        --type_4--footer-bg: url('plat/prd//img/mobile/themes/2023/type_4/footer-dec.png');
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
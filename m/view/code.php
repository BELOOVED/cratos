<style>
    .casino_h_link_cont .dynamic_menu .header_top
    {
        display: none;
    }
    .header__wrap_block
    {
        display: none;
    }
</style>

<div class="promocode-container-mobile" id="promoContainer">
    <div class="flex alCen jb promocode_heading">
        <div>Promo Kodlar</div>
        <a href="/" class="close_ic_btn ui-link"></a>
    </div>
    <div class="promocode-info_content">
        <div id="promocode_back_btn" class="hidden promocode_back_icon">Geri Dön</div>
        <div class="" id="PromoContent">
                <img class="promocode-img" src="https://cdn-plat.apidigi.com/plat/prd/Img/promoCode-img1.png" alt="promocode">
            <form action="/tr/Account/CheckPromoCode" id="PromoCodeForm" method="post" novalidate="novalidate">                <div id="content">
                    <div class="data-form" id="">
                        <!--<div class="sub_heading">Promo Kodlar</div>-->
                        <div class="promocode_txt">
                             Bir "Promosyon kodu" aldıysanız, lütfen kodu girin ve "Etkinleştir" düğmesine tıklayın. Akabinde bonus hesabınıza geçecektir.
                        </div>
                        <div class="reg_prof__element_row">
                            <label for="PromoCode">Promo Kod</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="promo_code_input" data-val="true" data-val-length="Yanlış Promosyon Kodu biçimi" data-val-length-max="16" data-val-length-min="8" data-val-regex="Yanlış Promosyon Kodu biçimi" data-val-regex-pattern="^[0-9A-Za-z ]+$" data-val-required="Alan gereklidir" id="js_prm_code" name="PromoCode" placeholder="Promo Kodunuzu girin!" type="text" value=""></div>
                            <span class="field-validation-valid " data-valmsg-for="PromoCode" data-valmsg-replace="true"></span>
                        </div>
                        <div class="errMsg" id="js_err_msg"></div>
                        <div class="reg_prof__element_row">
                            <button type="button" class="promocode_btn all_buttons_styles h-bg-primary width_all ui-btn ui-shadow ui-corner-all" id="promo_check">
                                Etkinleştir
                            </button>
                        </div>
                    </div>
                </div>
</form>        </div>
        <div id="PromoResult"></div>
    </div>
</div>
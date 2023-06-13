<?php if(isset($us['id'])){ ?>

    
    <div id="right-panel" class="panel bgMain bg_right_panel  ui-panel ui-panel-position-right ui-panel-display-push ui-body-b ui-panel-animate ui-panel-open" data-position="right" data-role="panel" data-display="push" data-theme="b" data-dismissible="true">
        <div class="ui-panel-inner">
            <div class="panel PlatformLoggedUser bgMain " id="sidebar-user">
                <div class="right_menu_header">
                    <div class="right_menu_logo" style="margin-top: -4px">
                        <img class="right_menu_logo" src="/img/logo.png" style="margin-top: -10px">
                    </div>
                    <span class="right_menu_close">
        </span>
                </div>
                <p class="account_title">Hesabım</p>
                <script>
                    $(".right_menu_close").click(function () {

                        $("#right-panel").panel("close");
                    });
                </script>
                <p class="playerId flex justify-content-between align-items-center">Hesap ID: 430093601                    <span class="cat_btn_bg player_category_1">
            </span>
                </p>
                <a class="menuRow flex alCen menu_new menu_account ui-link" href="#">Profil:
                    <span class="right_menu_fullname"><?=$us['login']?></span>
                </a>
                <a class="menuRow flex alCen menu_new menu_inbox ui-link" href="#">
            <span class="d-flex align-items-center">
              <i class="dynamic_icon"></i>
              <span class="">18 Gelen Kutusu</span>
            </span>
                </a>
                <a class="menuRow flex alCen menu_new menu_deposit js_dep_with_btns ui-link" href="#">Bakiye
                    <span id="playerBalance1"><?=$us['balance']?> TRY</span>
                </a>
                <div data-role="collapsible" data-iconpos="right" class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content"><h1 class="menuRow ui-collapsible-heading" id="cashierMob"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-minus">
                        <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-minus">Kasa
                            <span class="ui-collapsible-heading-status">click to expand contents</span>
                        </a>
                    <span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h1><div class="ui-collapsible-content ui-body-inherit" aria-hidden="false">
                    
                    <div class="ui-collapsible-content ui-body-inherit" aria-hidden="true">
                        <a class="menuRow flex alCen right_deposit_link ui-link" href="deposit">Para Yatırma</a>
                        <a id="withdrawal" class="menuRow flex alCen ui-link" href="#">Para Çekme</a>
                        <a class="menuRow flex alCen ui-link" href="PendingWithdrawals">Bekleyen Para Çekme İşlemleri</a>
                    </div>
                </div></div>
                <a id="bonusBalanceCont" class="menuRow flex alCen menu_new menu_deposit hidden ui-link" href="/Bonus/BonusHistory?scope=All">Bonus
                    <span>
          <span id="playerBonusBalance">0.00</span>
          <span class="bonuce_balance_currency">TRY</span>
            </span>
                </a>
                <a href="#" class="menuRow MyBetssportversion flex alCen ui-link">Sport Bahis Geçmişi</a>
                <div data-role="collapsible" data-iconpos="right" class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content"><h1 class="menuRow ui-collapsible-heading" id="accountMob"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-minus">
                        <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-minus">Hesap
                            <span class="ui-collapsible-heading-status">click to expand contents</span>
                        </a>
                    <span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h1><div class="ui-collapsible-content ui-body-inherit" aria-hidden="false">
                    
                    <div class="ui-collapsible-content ui-body-inherit" aria-hidden="true">
                        <a class="menuRow flex alCen ui-link" href="#">Hesabım</a>
                        <a id="profile" class="menuRow flex alCen ui-link" href="">Profil</a>
                        <a class="menuRow flex alCen ui-link" href="settings">2 Aşamalı Güvenlik</a>
                        <a class="menuRow flex alCen ui-link" href="change-password">Şifre değiştir</a>
                    </div>
                </div></div>
                <div data-role="collapsible" data-iconpos="right" class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content"><h1 class="menuRow ui-collapsible-heading" id="historyMob"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-minus">
                        <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-minus">Geçmiş
                            <span class="ui-collapsible-heading-status">click to expand contents</span>
                        </a>
                    <span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h1><div class="ui-collapsible-content ui-body-inherit" aria-hidden="false">
                    
                    <div class="ui-collapsible-content ui-body-inherit" aria-hidden="true">
                        <a id="transactionsHistory" class="menuRow flex alCen ui-link" href="history">Finansal İşlemler</a>
                        <a id="gameHistory" class="menuRow flex alCen ui-link" href="bet-history">Bahis Geçmişi</a>
                        <a class="menuRow flex alCen ui-link" href="balance-history">Bakiye Düzeltmeleri</a>
                        <a id="referrerReport" class="menuRow flex alCen ui-link" href="ReferrerReport">Arkadaş Bonusu Raporu</a>
                        <a class="menuRow flex alCen ui-link" href="ReferrerReport">Arkadaş Bonusu Geçmişi</a>
                    </div>
                </div></div>
                <div data-role="collapsible" data-iconpos="right" class="ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content"><h1 class="menuRow ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-minus">
                        <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-right ui-btn-inherit ui-icon-minus">Bonuslar
                            <span class="ui-collapsible-heading-status">click to expand contents</span>
                        </a>
                    <span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h1><div class="ui-collapsible-content ui-body-inherit" aria-hidden="false">
                    
                    <div class="ui-collapsible-content ui-body-inherit" aria-hidden="true">
                        <a class="menuRow flex alCen ui-link" href="BonusHistory" id="bonuses">Yeni Bonuslar</a>
                        <a class="menuRow flex alCen ui-link" href="ClientBonusReport" id="activeBonuses">Spor ve Ücretsiz Döndürmeler</a>
                    </div>
                </div></div>
                <a class="menuRow flex alCen ui-link" id="CheckPromoCode" href="CheckPromoCode">Promo Kodlar</a>
                <a class="menuRow flex alCen ui-link" href="exit" id="logout">Çıkış</a>
            </div>
        </div>
    </div>
    <?php }
                    else { ?>
<div id="right-panel" class="panel bgMain bg_right_panel  ui-panel ui-panel-position-right ui-panel-display-push ui-body-b ui-panel-animate ui-panel-closed" data-position="right" data-role="panel" data-display="push" data-theme="b" data-dismissible="true">

<div class="ui-panel-inner">
    <div class="platformRightLoginPanel" id="sidebar-login">
        <form onsubmit="logIn()" class="login_container" id="login_form">
            <div class="r_login__row">
                <div class="platformLoginRightLogo"></div>
            </div>
            <div class="r_login__row PlatformLoginPassContainer">
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                    <input class="login_input inp valid" data-val-required="Lütfen kullanıcı adınızı giriniz" id="email" name="login" placeholder="Kullanıcı adı / E-mail / Cep numarası" required="required" tabindex="1" type="text" value="" aria-required="true" data-gtm-form-interact-field-id="0" aria-describedby="email-error" aria-invalid="false">
                </div>
            </div>
            <div class="r_login__row PlatformLoginPassContainer eye_block">
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                    <input class="platformPassInput inp valid" autocomplete="off" data-val="true" data-val-required="Lütfen şifrenizi giriniz." id="password" name="password" placeholder="Şifre" required="required" tabindex="2" type="password" aria-required="true" data-gtm-form-interact-field-id="1" aria-describedby="password-error" aria-invalid="false">
                </div>
            </div>
            <div class="r_login__row warning dis_none">
                <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
            </div>
            <span class="loading_span dis_none" id="loadingSpan">Yükleniyor...</span>
            <div class="r_login__row">
                <button type="submit"  class="platformLoginButton btn_prim tl_btn bg-primary ui-link" id="loginButton">ÜYE GİRİŞİ</button>

            </div>
            <div class="r_login__row">
                <a class="platformForgPass ui-link" href="#">Şifrenizi
                    mi unuttunuz?</a>
            </div>
        </form>

    </div>

</div>
</div>
<?php }?>

<div class="heading">2 Aşamalı Güvenlik</div>
<div class="tfa_content relative">
    <h3 class="tfa_title tfa_text_bold">
        2 Aşamalı Güvenlik
    </h3>
    <p class="tfa_text">2 Aşamalı Güvenlik hesabınız için ekstra bir güvenlik önlemidir. 2 Aşamalı güvenliği aktif ettikten sonra şifreniz çalınsa dahi hesabınıza sizden başka kimse erişemez.İki Aşamalı Güvenliği kapatmanız durumunda sorumluluk tamamen size aittir.</p>

    <div class="flex alCen jb tfa_switcher_content relative">
        <p>2 Aşamalı Güvenliği Hemen Aktif Et</p>
            <label class="flex alCen" for="js_twoFa_switcher">
                <input class="tfa_switcher_input" data-role="none" type="checkbox" id="js_twoFa_switcher" onclick="switcherCheck()">
                <span class="tfa_switcher_item"></span>
            </label>
        <span class="tfa_error_msg" id="js_switcher_msg"></span>
    </div>
    <div class="" id="js_howTo_setup_cont">
        <h3 class="tfa_title">
            Kurulumu Nasıl Yaparım?
        </h3>

        <div class="tfa_text">
            <p>
                1. "Google Authenticator" Programını
                <a class="twofa_app_links ui-link" href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&amp;hl=tr&amp;gl=US">Play Store</a> ya da<a class="twofa_app_links ui-link" href="https://apps.apple.com/us/app/google-authenticator/id388497605">
                    App Store'</a> dan indirip kurabilirsiniz.
            </p>
            <p>2. Kurulumdan sonra Programdaki + Simgesine Basarak "QR Kodunu Tara" seçeneğiyle bu sayfadaki kodu taratınız ve programda size verilen 6 haneli kodu yazarak "ONAYLA" butonuna basın.</p>
            <p>3.QR Kod okutmadan aktif etmek isterseniz; "Kurulum Anahtarını Manuel Gireceğim" bölümünden aldığınız Kurulum Anahtarınızı program üzerinde Kurulum anahtarı gir bölümünden aktif edebilirsiniz.</p>
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
            <img alt="qr code" src="data:image/png;base64, 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" id="js_qr_src">
        </div>

        <div class="tfa_copy_code_content">
            <span class="tfa_copy_code_text" id="js_getCode_btn"> Kurulum Anahtarını Manuel Gireceğim  </span>
            <div class=" flex alCen hidden" id="js_manual_code">
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="ctfa_copy_code" type="text" name="name" value="MIYWCNRSGI3DSOBWGI2DOOBQ" readonly="readonly" id="js_manual_entry_key"></div>
                <div class="ctfa_copy_btn"></div>
            </div>
        </div>
        <div class="tfa_btn_content relative">
            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="qr_code_input" id="js_qr_code" placeholder="Kodu Giriniz"></div>
            <button class="qr_code_btn ui-btn ui-shadow ui-corner-all" type="button" id="js_verify_qr_code">ONAYLA</button>
        </div>
    </div>
    <div class="relative">
        <span class="tfa_error_msg" id="js_messages"> </span>
    </div>
</div>
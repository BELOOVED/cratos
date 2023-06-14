<div id="content_paym" class="bgMain depositForms">


        <p class="paym_txt1">
            
        </p>






                                

                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="movenpaypapara" data-url="" id="block_movenpaypapara"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">MOVENPAY PAPARA<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <p class="paym_txt">Movenpay Papara ile Para Yatırma</p>
                    <div class="image-box-depwith">
                                <div class="paymentmethods movenpaypapara"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">10 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contmovenpaypapara"><form action="/payment/papara" class="methods" id="movenpaypapara" method="post" novalidate="novalidate">    <div class="row">
        <span class="required-field" style="color:#a3a3a3;">*</span>
        <label>Miktar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="MovenpayPapara_Amount" name="MovenpayPapara.Amount" type="text" value=""></div>
        <p><span class="field-validation-valid" data-valmsg-for="MovenpayPapara.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <input id="gatewayPaymentId" name="gatewayPaymentId" type="hidden" value="MovenpayPapara">
    <div class="spacer">
            <a class="btn_prim block ui-link" href="/payment/papara">PARA YATIRMA</a>
        
    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">
   
    $.validator.unobtrusive.parse($('#movenpaypapara'));
    $('#movenpaypapara').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#movenpaypapara_mob_dep').trigger('click');
        }
    });

    $('#movenpaypapara_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="movenpaypapara"]')).data('url');
        if ($('#movenpaypapara').valid()) {          
            $.ajax({
                url: "/tr/Account/MovenpayPapara",
                type: "POST",
                async: false,
                data: $('#movenpaypapara').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#contmovenpaypapara").html(result).trigger("create");
                    HelpUrlHandling('movenpaypapara', bankurl);
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="vevopayhavale" data-url="" id="block_vevopayhavale"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">VEVOPAY HAVALE<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>Vevopay Havale ile Para Yatırma</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods vevopayhavale"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">50 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">20&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contvevopayhavale"><form action="/payment/havale" class="methods" id="vevopayhavale" method="post">    <div class="row">
        <input class="inp" data-val="true" data-val-number="The field Tutar must be a number." data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="VevoPayHavale_Amount" name="VevoPayHavale.Amount" type="hidden" value="">
    </div>
    <div class="spacer">
        <a class="btn_prim block ui-link" id="" href="/payment/havale">PARA YATIRMA</a>
    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#vevopayhavale_mob_dep').trigger('click');
        }
    });

    $('#vevopayhavale_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="vevopayhavale"]')).data('url');

        $.ajax({
            url: "/tr/Account/VevoPayHavale",
            type: "POST",
            async: false,
            data: $('#vevopayhavale').serialize(),
            datatype: "json",
            success: function (result) {
                $("#contvevopayhavale").html(result).trigger("create");
                HelpUrlHandling('vevopayhavale', bankurl);
            }
        });
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="payfix" data-url="" id="block_payfix"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">PAYFİX<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>Payfix ile Para Yatırma</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods payfix"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">25 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contpayfix"><form action="/payment/payfix" class="methods" id="payfix" method="post" novalidate="novalidate">    <div class="row">
        <span class="required-field">*</span>
        <label>Tutar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="PayFix_Amount" name="PayFix.Amount" type="text" value=""></div>
        <p>
            <span class="field-validation-valid" data-valmsg-for="PayFix.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <div class="spacer">
            <a class="btn_prim block ui-link" href="/payment/payfix">PARA YATIRMA</a>
    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">

    $.validator.unobtrusive.parse($('#payfix'));
    $('#payfix').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#payfix_mob_dep').trigger('click');
        }
    });

    $('#payfix_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="payfix"]')).data('url');
        if ($('#payfix').valid()) {
            $.ajax({
                url: "/tr/Account/PayFix",
                type: "POST",
                async: false,
                data: $('#payfix').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#contpayfix").html(result).trigger("create");
                    HelpUrlHandling('payfix', bankurl);
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="aspaycreditcard" data-url="" id="block_aspaycreditcard"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">ASPAY KREDİ KARTI<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <p class="paym_txt">Aspay Kredi Kartı ile Para Yatırma</p>
                    <div class="image-box-depwith">
                                <div class="paymentmethods aspaycreditcard"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">50 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contaspaycreditcard">

<form action="/payment/creditcard" class="methods" id="aspaycreditcard" method="post" novalidate="novalidate"><div class="row">
    <span class="required-field">*</span>
    <label>Tutar</label>
    <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="(^[1-9]\d*((\.\d{1})|(\.\d{2}))?$)" data-val-required="Lütfen geçerli bir tutar girin" id="AspayCreditCard_Amount" name="AspayCreditCard.Amount" type="text" value=""></div>
    <p>
        <span class="field-validation-valid" data-valmsg-for="AspayCreditCard.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
    </p>
</div>
    <div class="spacer">
        <a class="btn_prim block ui-link" href="/payment/creditcard">PARA YATIRMA</a>
    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">

    $('#AspayCreditCard_Amount').keyup(function () {
        if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
            this.value = this.value.replace(/^0|-+/g, '');
        }
    });

    $('.tl_input_popup').on('keypress', function (e) {
        if (e.keyCode == 13) {
            e.stopPropagation();
            e.preventDefault();
            $('.tl_popup_dialog .aspaycreditcard_mob_dep').trigger('click');
        }
    });

    $.validator.unobtrusive.parse($('#aspaycreditcard'));
    $('#aspaycreditcard').validate();

    $('#aspaycreditcard_mob_dep').on('click', function (e) {

        var bankurl = $($.find('[data-type ="aspaycreditcard"]')).data('url');
        if ($('#aspaycreditcard').valid()) {

            $.ajax({
                url: "/tr/Account/AspayCreditCard",
                type: "POST",
                async: false,
                data: $('#aspaycreditcard').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#contaspaycreditcard").html(result).trigger("create");
                    HelpUrlHandling('aspaycreditcard', bankurl);
                }
            });
            $('#AspayCreditCard_Amount').val("");
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="hizlicapapara" data-url="" id="block_hizlicapapara"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">HIZLICA PARALAR<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <p class="paym_txt">Otomatik Papara ,Papara Sanal Kart ,Kredi kartı ve Diğer Cüzdanlar Papara, HayHay, TOSLA, Kassa,CMT,Payfix,IQmoney ve daha bir çok ödeme yöntemi ile otomatik ve hızlı bir şekilde yatırım yapabilirsiniz.</p>
                    <div class="image-box-depwith">
                                <div class="paymentmethods hizlicapapara"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">10 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="conthizlicapapara"><form action="/payment/" class="methods" id="hizlicapapara" method="post" novalidate="novalidate">    <div class="row">
        <span class="required-field">*</span>
        <label>Miktar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="((^0)|(^[1-9]\d*))((\.\d{1})|(\.\d{2}))?$" data-val-required="Lütfen geçerli bir miktar giriniz" id="HizlicaPapara_Amount" name="HizlicaPapara.Amount" type="text" value=""></div>
        <p>
            <span class="field-validation-valid" data-valmsg-for="HizlicaPapara.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <div class="spacer">
        <a class="btn_prim block ui-link" href="/payment">PARA YATIRMA</a>

    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">

    $('#HizlicaPapara_Amount').keyup(function () {
        if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
            this.value = this.value.replace(/^0|-+/g, '');
        }
    });

    $.validator.unobtrusive.parse($('#hizlicapapara'));
    $('#hizlicapapara').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#hizlicapapara_mob_dep').trigger('click');
        }
    });

    $('#hizlicapapara_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="hizlicapapara"]')).data('url');
        if ($('#hizlicapapara').valid()) {
            $.ajax({
                url: "/tr/Account/HizlicaPapara",
                type: "POST",
                async: false,
                data: $('#hizlicapapara').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#conthizlicapapara").html(result).trigger("create");
                    HelpUrlHandling('hizlicapapara', bankurl);
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="transfertoaccount" data-url="" id="block_transfertoaccount"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">BANKA HAVALESİ<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>Banka Havalesi ile Para Yatırma<br>
<br>
Lütfen Canlı Destek Ekibimizden Banka Havalesi Hesap Numarası Bilgilerini İsteyiniz.</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods transfertoaccount"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">50 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">100&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="conttransfertoaccount">
<style>
    #TransferToAccount_NameOfBank-button .dropdown.mansaDrop {
        background-color: #fff;
        color: black;
    }

    .mansaDrop {
        background-color: #fff !important;
        color: black;
    }

    .ui-input-text ui-body-inherit ui-corner-all.ui-state-disabled ui-shadow-inset .inp.NameSurnameforMansa {
        background-color: #64665E !important;
        color: white;
    }
</style>

<form action="/tr/Account/_transfertoaccount" class="methods" id="transfertoaccount" method="post" novalidate="novalidate"><div class="row">
    <span class="required-field">*</span>
    <label>Banka Adı</label>
<div class="ui-select"><div id="TransferToAccount_NameOfBank-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow"><span class="dropdown">Akbank</span><select class="dropdown" data-val="true" data-val-length="Doldurulması gerekli alan" data-val-length-max="150" data-val-required="Doldurulması gerekli alan" id="TransferToAccount_NameOfBank" name="TransferToAccount.NameOfBank"><option>Akbank</option>
<option>HSBC Bank</option>
<option>Halkbank</option>
<option>TEB bankası</option>
<option>Finansbank</option>
<option>Ziraat Bankası</option>
<option>Vakıfbank</option>
<option>Yapı Kredi Bankası</option>
<option>Garanti Bankası</option>
<option>Türkiye iş Bankası</option>
<option>Denizbank</option>
<option>İngbank</option>
<option>Odeabank</option>
<option>Şekerbank</option>
<option>Aktifbank</option>
<option>Burganbank</option>
<option>Fibabank</option>
<option>PTTbank</option>
</select></div></div>    <p>
        <span class="field-validation-valid" data-valmsg-for="TransferToAccount.NameOfBank" data-valmsg-replace="true" style="color: #ff0000"></span>
    </p>
</div>
        <div class="row">
            <span class="required-field">*</span>
                <label>Miktar</label>
            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="TransferToAccount_Amount" name="TransferToAccount.Amount" type="text" value=""></div>
            <p>
                <span class="field-validation-valid" data-valmsg-for="TransferToAccount.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
            </p>
        </div>
                    <div class="row">
                        <span class="required-field">*</span>
                        <label>Banka Havalesi Türü</label>
                        <div class="ui-select"><div id="TransferToAccount_BankTransferType-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow"><span class="dropdown">ATM</span><select class="dropdown" id="TransferToAccount_BankTransferType" name="TransferToAccount.BankTransferType"><option>ATM</option>
<option>Bank/ Online Bank</option>
</select></div></div>


                        <p>
                            <span class="field-validation-valid" data-valmsg-for="TransferToAccount.Type" data-valmsg-replace="true" style="color: #ff0000"></span>
                        </p>
                    </div>
                <div class="row">
                    <label>Müşteri notu</label>
                    <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" id="TransferToAccount_Notes" name="TransferToAccount.Notes" type="text" value=""></div>
                    <p>
                        <span class="field-validation-valid" data-valmsg-for="TransferToAccount.Notes" data-valmsg-replace="true" style="color: #ff0000"></span>
                    </p>
                </div>
    <div class="spacer">
        <a class="btn_prim block ui-link" id="transfertoaccount_mob_dep">PARA YATIRMA</a>
    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>    <div class="successmassage"></div>
    <div class="errormassage"></div>
</form>
<script type="text/javascript">

    $('#TransferToAccount_NameOfBank').on('change', function () {
        $(".successmassage").hide();
    })

    $.validator.unobtrusive.parse($('#transfertoaccount'));
    $('#transfertoaccount').validate();

     $('.inp').keypress(function (e) {
         if (e.keyCode == 13) {
             e.preventDefault();
             e.stopPropagation();
             $('#transfertoaccount_mob_dep').trigger('click');
         }
     });

        $('#transfertoaccount_mob_dep').on('click', function (e) {
            var bankurl = $($.find('[data-type ="transfertoaccount"]')).data('url');

            $("#TransferToAccount_FirstnameLastname").val($.trim($("#TransferToAccount_FirstnameLastname").val()));
            $("#TransferToAccount_NameSurnameMaldobet").val($.trim($("#TransferToAccount_NameSurnameMaldobet").val()));
            $("#TransferToAccount_AccountNumber").val($.trim($("#TransferToAccount_AccountNumber").val()));


            if ($('#transfertoaccount').valid()) {
                $(".successmassage").show();

                $.ajax({
                    url: "/tr/Account/TransferToAccount",
                    type: "POST",
                    async: false,
                    data: $('#transfertoaccount').serialize(),
                    datatype: "json",
                    success: function (result) {
                        $("#conttransfertoaccount").html(result).trigger("create");
                        HelpUrlHandling('transfertoaccount', bankurl);
                        if ('1096' == '1040' || '1096' == '1096' || '1096' == '1099' || '1096' == '1116' ||  '1096' == '1178' ||  '1096' == '1132') {
                            $('#TransferToAccount_Amount').val('');
                            $('#TransferToAccount_Notes').val('');
                            $('#TransferToAccount_IDNumber').val('');
                        }
                    }
                });
            }
        });
</script></div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="vevopayparazula" data-url="" id="block_vevopayparazula"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">PARAZULA<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>Parazula ile Para Yatırma</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods vevopayparazula"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">10 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">40&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contvevopayparazula"><form action="/payment/parazula" class="methods" id="vevopayparazula" method="post">    <div class="row">
        <input class="inp" data-val="true" data-val-number="The field Tutar must be a number." data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="VevoPayParazula_Amount" name="VevoPayParazula.Amount" type="hidden" value="">
    </div>
    <div class="spacer">
        <a class="btn_prim block ui-link" href="/payment/parazula">PARA YATIRMA</a>
    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#vevopayparazula_mob_dep').trigger('click');
        }
    });

    $('#vevopayparazula_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="vevopayparazula"]')).data('url');

        $.ajax({
            url: "/tr/Account/VevoPayParazula",
            type: "POST",
            async: false,
            data: $('#vevopayparazula').serialize(),
            datatype: "json",
            success: function (result) {
                $("#contvevopayparazula").html(result).trigger("create");
                HelpUrlHandling('vevopayparazula', bankurl);
            }
        });
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="papara" data-url="" id="block_papara"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">PAPARA<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>Papara ile Para Yatırma<br>
<br>
Lütfen Canlı Destek Ekibimizden Papara Hesap Numarası Bilgilerini İsteyiniz.</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods papara"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">100 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">100&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contpapara"><form action="/payment/papara" class="methods" id="papara" method="post" novalidate="novalidate">    <div class="row">
            <span class="required-field" style="">*</span>
            <label>Tutar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="Papara_Amount" name="Papara.Amount" type="text" value=""></div>
        <p>
            <span class="field-validation-valid" data-valmsg-for="Papara.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <div class="spacer">
        <a class="btn_prim block ui-link" href="/payment/papara">PARA YATIRMA</a>
    </div>
    
                <div class="papara_desc">Lütfen Canlı Destek Ekibimizden<br> Papara Hesap Numarası Bilgilerini Isteyiniz</div>
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>    <div class="successmassage"></div>
    <div class="errormassage"></div>
</form>
<script type="text/javascript">

    $('#Papara_Amount').keyup(function () {
        if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
            this.value = this.value.replace(/^0|-+/g, '');
        }
    });

    $('#Papara_RecieverNameSurname').keyup(function () {
        if (this.value.substring(0, 1) == " ") {
            this.value = this.value.replace(/^ +/g, '');
        }
    });

    $('#Papara_SenderNameSurname').keyup(function () {
        if (this.value.substring(0, 1) == " ") {
            this.value = this.value.replace(/^ +/g, '');
        }
    });

    $.validator.unobtrusive.parse($('#papara'));
    $('#papara').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#papara_mob_dep').trigger('click');
        }
    });

    $('#papara_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="papara"]')).data('url');

        $("#Papara_RecieverNameSurname").val($.trim($("#Papara_RecieverNameSurname").val()));
        $("#Papara_SenderNameSurname").val($.trim($("#Papara_SenderNameSurname").val()));
        $("#Papara_NameSurnameMaldobet").val($.trim($("#Papara_NameSurnameMaldobet").val()));
        $("#Papara_Bonus").val($.trim($("#Papara_Bonus").val()))

        if ($('#papara').valid()) {

            $.ajax({
                url: "/tr/Account/Papara",
                type: "POST",
                async: false,
                data: $('#papara').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#contpapara").html(result).trigger("create");
                    HelpUrlHandling('papara', bankurl);
                    $('#Papara_Amount').val('');
                    $("#Papara_RecieverNameSurname").val('');
                    $("#Papara_SenderNameSurname").val('');
                    $("#Papara_NameSurnameMaldobet").val('');
                    $("#Papara_Bonus").val('');
                    $("#Papara_ReceiverAccountNumber").val('');
                }
            });
        }

            if ('1096' == '1030') {
                parent.LC_API.open_chat_window();
            }

            if ('1096' == '1003') {
                Tawk_API.toggle();
            }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="instapayscrypto" data-url="" id="block_instapayscrypto"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">SIMPLEPAY CRYPTOBOX<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>Simplepay Crypto ile Para Yatırma</p>
</span>
                    <div class="image-box-depwith">
                                    <img src="https://cdn-payments.apidigi.com/dynamic/InstapaysCrypto.png" class="dynemiclogosizeMob">

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">50 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">35&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="continstapayscrypto">

<form action="/payment/crypto" class="methods" id="instapayscrypto" method="post" novalidate="novalidate">    <div class="row">
        <span class="required-field">*</span>
        <label>Miktar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex="Miktar sadece rakamlar içerebilir, ondalıklar da belirtilebilir X.XX" data-val-regex-pattern="(^[1-9]\d*((\.\d{1})|(\.\d{2}))?$)" data-val-required="Lütfen geçerli bir tutar girin" id="InstapaysCrypto_Amount" name="InstapaysCrypto.Amount" type="text" value=""></div>
        <p>
            <span class="field-validation-valid" data-valmsg-for="InstapaysCrypto.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <div class="spacer">
        <a class="btn_prim block ui-link" href="/payment/crypto">PARA YATIRMA</a>
    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">

    $('#InstapaysCrypto_Amount').keyup(function () {
        if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
            this.value = this.value.replace(/^0|-+/g, '');
        }
    });

    $('.tl_input_popup').on('keypress', function (e) {
        if (e.keyCode == 13) {
            e.stopPropagation();
            e.preventDefault();
            $('.tl_popup_dialog .instapayscrypto_mob_dep').trigger('click');
        }
    });

    $.validator.unobtrusive.parse($('#instapayscrypto'));
    $('#instapayscrypto').validate();

    $('#instapayscrypto_mob_dep').on('click', function (e) {

        var bankurl = $($.find('[data-type ="instapayscrypto"]')).data('url');
        if ($('#instapayscrypto').valid()) {

            $.ajax({
                url: "/tr/Account/InstapaysCrypto",
                type: "POST",
                async: false,
                data: $('#instapayscrypto').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#continstapayscrypto").html(result).trigger("create");
                    HelpUrlHandling('instapayscrypto', bankurl);
                }
            });
            $('#InstapaysCrypto_Amount').val("");
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="hemenodehavale" data-url="" id="block_hemenodehavale"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">HEMENÖDE HAVALE<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>Hemenöde Havale İle Para Yatırma</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods hemenodehavale"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">50 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="conthemenodehavale"><form action="/payment/havale" class="methods" id="hemenodehavale" method="post" novalidate="novalidate">	<div class="row">
		<span class="required-field">*</span>
		<label>Miktar</label>
		<div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="HemenodeHavale_Amount" name="HemenodeHavale.Amount" type="text" value=""></div>
		<p>
			<span class="field-validation-valid" data-valmsg-for="HemenodeHavale.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
		</p>
	</div>
	<div class="spacer">
		<a class="btn_prim block ui-link" href="/payment/havale">PARA YATIRMA</a>

	</div>
	
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">

	$.validator.unobtrusive.parse($('#hemenodehavale'));
	$('#hemenodehavale').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
			$('#hemenode_havale_mob').trigger('click');
        }
    });

	$('#hemenodehavale_mob').on('click', function (e) {
		var bankurl = $($.find('[data-type ="hemenodehavale"]')).data('url');
		if ($('#hemenodehavale').valid()) {
            $.ajax({
                url: "/tr/Account/HemenodeHavale",
                type: "POST",
                async: false,
				data: $('#hemenodehavale').serialize(),
                datatype: "json",
                success: function (result) {
					$("#conthemenodehavale").html(result).trigger("create");
					HelpUrlHandling('hemenodehavale', bankurl);
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="hemenodevippapara" data-url="" id="block_hemenodevippapara"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">HEMENÖDE VIP PAPARA<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>Hemenöde Vip Papara İle Para Yatırma</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods hemenodevippapara"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">100 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="conthemenodevippapara"><form action="/payment/papara" class="methods" id="hemenodevippapara" method="post" novalidate="novalidate">	<div class="row">
		<span class="required-field">*</span>
		<label>Miktar</label>
		<div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="HemenodeVipPapara_Amount" name="HemenodeVipPapara.Amount" type="text" value=""></div>
		<p>
			<span class="field-validation-valid" data-valmsg-for="HemenodeVipPapara.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
		</p>
	</div>
	<div class="spacer">
		<a class="btn_prim block ui-link" href="/payment/papara">PARA YATIRMA</a>

	</div>
	
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">

	$.validator.unobtrusive.parse($('#hemenodevippapara'));
	$('#hemenodevippapara').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
			$('#hemenode_vippapara_mob').trigger('click');
        }
    });

	$('#hemenodevippapara_mob').on('click', function (e) {
		var bankurl = $($.find('[data-type ="hemenodevippapara"]')).data('url');
		if ($('#hemenodevippapara').valid()) {
            $.ajax({
                url: "/tr/Account/HemenodeVipPapara",
                type: "POST",
                async: false,
				data: $('#hemenodevippapara').serialize(),
                datatype: "json",
                success: function (result) {
					$("#conthemenodevippapara").html(result).trigger("create");
					HelpUrlHandling('hemenodevippapara', bankurl);
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="hemenodemefete" data-url="" id="block_hemenodemefete"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">HEMENÖDE MEFETE<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>HemenÖde Mefete İle Para Yatırma</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods hemenodemefete"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">50 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="conthemenodemefete"><form action="/payment/mefete" class="methods" id="hemenodemefete" method="post" novalidate="novalidate">	<div class="row">
		<span class="required-field">*</span>
		<label>Miktar</label>
		<div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="HemenodeMefete_Amount" name="HemenodeMefete.Amount" type="text" value=""></div>
		<p>
			<span class="field-validation-valid" data-valmsg-for="HemenodeMefete.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
		</p>
	</div>
	<div class="spacer">
		<a class="btn_prim block ui-link" href="/payment/mefete">PARA YATIRMA</a>

	</div>
	
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">

	$.validator.unobtrusive.parse($('#hemenodemefete'));
	$('#hemenodemefete').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
			$('#hemenode_mefete_mob').trigger('click');
        }
    });

	$('#hemenodemefete_mob').on('click', function (e) {
		var bankurl = $($.find('[data-type ="hemenodemefete"]')).data('url');
		if ($('#hemenodemefete').valid()) {
            $.ajax({
                url: "/tr/Account/HemenodeMefete",
                type: "POST",
                async: false,
				data: $('#hemenodemefete').serialize(),
                datatype: "json",
                success: function (result) {
					$("#conthemenodemefete").html(result).trigger("create");
					HelpUrlHandling('hemenodemefete', bankurl);
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="hemenodepep" data-url="" id="block_hemenodepep"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">HEMENÖDE PEP<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <p class="paym_txt">HemenÖde Pep İle Para Yatırma</p>
                    <div class="image-box-depwith">
                                <div class="paymentmethods hemenodepep"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">50 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="conthemenodepep"><form action="/payment/pep" class="methods" id="hemenodepep" method="post" novalidate="novalidate">    <div class="row">
        <span class="required-field">*</span>
        <label>Miktar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="HemenodePep_Amount" name="HemenodePep.Amount" type="text" value=""></div>
        <p>
            <span class="field-validation-valid" data-valmsg-for="HemenodePep.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <div class="spacer">
        <a class="btn_prim block ui-link" href="/payment/mefete">PARA YATIRMA</a>

    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">

	$.validator.unobtrusive.parse($('#hemenodepep'));
    $('#hemenodepep').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#hemenodepep_mob').trigger('click');
        }
    });

	$('#hemenodepep_mob').on('click', function (e) {
        var bankurl = $($.find('[data-type ="hemenodepep"]')).data('url');
        if ($('#hemenodepep').valid()) {
            $.ajax({
                url: "/tr/Account/HemenodePep",
                type: "POST",
                async: false,
                data: $('#hemenodepep').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#conthemenodepep").html(result).trigger("create");
                    HelpUrlHandling('hemenodepep', bankurl);
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="instapaysviphavale" data-url="" id="block_instapaysviphavale"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">SIMPLEPAY VIP HAVALE<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>Simplepay VIP Havale&nbsp;ile Para Yatırma</p>
</span>
                    <div class="image-box-depwith">
                                    <img src="https://cdn-payments.apidigi.com/dynamic/InstapaysVIPHavale.png" class="dynemiclogosizeMob">

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">500 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="continstapaysviphavale"><form action="/payment/havale" class="methods" id="instapaysviphavale" method="post" novalidate="novalidate">    <div class="row">
        <span class="required-field">*</span>
        <label>Miktar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="InstaPaysVIPHavale_Amount" name="InstaPaysVIPHavale.Amount" type="text" value=""></div>
        <p>
            <span class="field-validation-valid" data-valmsg-for="InstaPaysVIPHavale.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <div class="spacer">
        <a class="btn_prim block ui-link" href="/payment/havale">PARA YATIRMA</a>

    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">

    $.validator.unobtrusive.parse($('#instapaysviphavale'));
    $('#instapaysviphavale').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#instapaysviphavale_mob_dep').trigger('click');
        }
    });

    $('#instapaysviphavale_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="instapaysviphavale"]')).data('url');
        if ($('#instapaysviphavale').valid()) {
            $.ajax({
                url: "/tr/Account/InstaPaysVIPHavale",
                type: "POST",
                async: false,
                data: $('#instapaysviphavale').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#continstapaysviphavale").html(result).trigger("create");
                    HelpUrlHandling('instapaysviphavale', bankurl);
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="instapayscepbank" data-url="" id="block_instapayscepbank"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">SIMPLEPAY CEPBANK<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>Simplepay Cep Bank&nbsp;ile Para Yatırma</p>
</span>
                    <div class="image-box-depwith">
                                    <img src="https://cdn-payments.apidigi.com/dynamic/InstaPaysCepbank.jpg" class="dynemiclogosizeMob">

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">100 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">1&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="continstapayscepbank"><form action="/payment/cepbank" class="methods" id="instapayscepbank" method="post" novalidate="novalidate">    <div class="row">
        <span class="required-field" style="color:#a3a3a3;">*</span>
        <label>Miktar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="InstaPaysCepbank_Amount" name="InstaPaysCepbank.Amount" type="text" value=""></div>
        <p><span class="field-validation-valid" data-valmsg-for="InstaPaysCepbank.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <input id="gatewayPaymentId" name="gatewayPaymentId" type="hidden" value="InstaPaysCepbank">
    <div class="spacer">
            <a class="btn_prim block ui-link" href="/payment/cepbank">PARA YATIRMA</a>
    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">
   
    $.validator.unobtrusive.parse($('#instapayscepbank'));
    $('#instapayscepbank').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#instapayscepbank_mob_dep').trigger('click');
        }
    });

    $('#instapayscepbank_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="instapayscepbank"]')).data('url');
        if ($('#instapayscepbank').valid()) {          
            $.ajax({
                url: "/tr/Account/InstaPaysCepbank",
                type: "POST",
                async: false,
                data: $('#instapayscepbank').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#continstapayscepbank").html(result).trigger("create");
                    HelpUrlHandling('instapayscepbank', bankurl);
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="anindapapara" data-url="" id="block_anindapapara"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">ANINDA PAPARA<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>Anında Papara ile Para Yatırma</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods anindapapara"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">50 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contanindapapara"><form action="/payment/papara" class="methods" id="anindapapara" method="post" novalidate="novalidate">    <div class="row">
        <span class="required-field">*</span>
        <label>Tutar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="AnindaPapara_Amount" name="AnindaPapara.Amount" type="text" value=""></div>
        <p><span class="field-validation-valid" data-valmsg-for="AnindaPapara.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <div class="spacer">
            <a class="btn_prim block ui-link" href="/payment/papara">PARA YATIRMA</a>
    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">
   
    $.validator.unobtrusive.parse($('#anindapapara'));
    $('#anindapapara').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#anindapapara_mob_dep').trigger('click');
        }
    });

    $('#anindapapara_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="anindapapara"]')).data('url');
        if ($('#anindapapara').valid()) {
            $.ajax({
                url: "/tr/Account/AnindaPapara",
                type: "POST",
                async: false,
                data: $('#anindapapara').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#contanindapapara").html(result).trigger("create");
                    HelpUrlHandling('anindapapara', bankurl);
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="anindahavale" data-url="" id="block_anindahavale"><h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">ANINDA HAVALE<span class="ui-collapsible-heading-status"> click to expand contents</span></a></h3><div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>Anında Havale ile Para Yatırma</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods anindahavale"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">50 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contanindahavale">

                        </div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="anindaqr" data-url="" id="block_anindaqr"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">ANINDA QR<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>ANINDA QR İle Para Yatırma</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods anindaqr"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">20 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">3&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contanindaqr"><form action="/payment/havale" class="methods" id="anindaqr" method="post" novalidate="novalidate">    <div class="row">
        <span class="required-field">*</span>
        <label>Tutar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="AnindaQR_Amount" name="AnindaQR.Amount" type="text" value=""></div>
        <p><span class="field-validation-valid" data-valmsg-for="AnindaQR.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <div class="spacer">
            <a class="btn_prim block ui-link" href="/payment/havale">PARA YATIRMA</a>
    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">
    
    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#anindaqr_mob_dep').trigger('click');
        }
    });

    $.validator.unobtrusive.parse($('#anindaqr'));
    $('#anindaqr').validate();
    
    $('#anindaqr_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="anindaqr"]')).data('url');
        if ($('#anindaqr').valid()) {
            $.ajax({
                url: "/tr/Account/AnindaQR",
                type: "POST",
                async: false,
                data: $('#anindaqr').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#contanindaqr").html(result).trigger("create");
                    HelpUrlHandling('anindaqr', bankurl);
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="anindabtc" data-url="" id="block_anindabtc"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">ANINDA BTC<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <p class="paym_txt">AnındaBTC ile Para Yatırma</p>
                    <div class="image-box-depwith">
                                <div class="paymentmethods anindabtc"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">20 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">100&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contanindabtc"><form action="/payment/crypto" class="methods" id="anindabtc" method="post" novalidate="novalidate">    <div class="row">
        <span class="required-field">*</span>
        <label>Tutar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="AnindaBTC_Amount" name="AnindaBTC.Amount" type="text" value=""></div>
        <p><span class="field-validation-valid" data-valmsg-for="AnindaBTC.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <div class="spacer">
            <a class="btn_prim block ui-link" href="/payment/crypto">PARA YATIRMA</a>
    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">
    
    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#anindabtc_mob_dep').trigger('click');
        }
    });

    $.validator.unobtrusive.parse($('#anindabtc'));
    $('#anindabtc').validate();
    
    $('#anindabtc_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="anindabtc"]')).data('url');
        if ($('#anindabtc').valid()) {
            $.ajax({
                url: "/tr/Account/AnindaBTC",
                type: "POST",
                async: false,
                data: $('#anindabtc').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#contanindabtc").html(result).trigger("create");
                    HelpUrlHandling('anindabtc', bankurl);
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="odendibilkriptopay" data-url="" id="block_odendibilkriptopay"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">KRİPTOPAY<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <p class="paym_txt">Ödendibil Kriptopay ile Para Yatırma</p>
                    <div class="image-box-depwith">
                                <div class="paymentmethods odendibilkriptopay"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">50 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">500&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contodendibilkriptopay"><form action="/payment/crypto" class="methods" id="odendibilkriptopay" method="post" novalidate="novalidate">    <div class="row">
        <span class="required-field">*</span>
        <label>Kripto Adres</label>
        <div class="ui-select"><div id="OdendibilKriptoPay_BankId-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow"><span class="inp"> -- Kripto Adres Seçiniz -- </span><select class="inp" data-val="true" data-val-required="Doldurulması gerekli alan" id="OdendibilKriptoPay_BankId" name="OdendibilKriptoPay.BankId" type="" value="" aria-required="true" aria-describedby="OdendibilKriptoPay_BankId-error" aria-invalid="false" style="opacity: 1; z-index: 10;"><option value=""> -- Kripto Adres Seçiniz -- </option><option value="BTC">Bitcoin</option><option value="USDT">Tether USDT [TRC20 - BEP20]</option><option value="ETH">Etherium</option><option value="TRX">TRON</option><option value="BNB">BNB Coin</option><option value="LTC">Litecoin</option><option value="XRP">Ripple</option><option value="BUSD">Binance USD</option><option value="DOGE">DogeCoin</option><option value="WAVES">Waves</option><option value="ADA">Cardano (ADA)</option><option value="SOL">Solana</option><option value="BCH">Bitcoin Cash</option><option value="DASH">Dash</option><option value="LINK">Chainlink (LINK)</option><option value="ETC">Ether Classic</option></select></div></div>
        <p>
            <span class="field-validation-valid" data-valmsg-for="OdendibilKriptoPay.BankId" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <div class="row">
        <span class="required-field">*</span>
        <label>Miktar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="OdendibilKriptoPay_Amount" name="OdendibilKriptoPay.Amount" type="text" value=""></div>
        <p>
            <span class="field-validation-valid" data-valmsg-for="OdendibilKriptoPay.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <div class="spacer">
            <a class="btn_prim block ui-link" href="/payment/crypto">PARA YATIRMA</a>
    </div>
    <input class="tl_input_popup" id="OdendibilKriptoPay_GatwayType" name="OdendibilKriptoPay.GatwayType" type="hidden" value="1">
    <input class="tl_input_popup" id="OdendibilKriptoPay_PaymentGatewayId" name="OdendibilKriptoPay.PaymentGatewayId" type="hidden" value="0">
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">

    var GatewayId = $('#OdendibilKriptoPay_PaymentGatewayId').val();
    $(document).ready(function () {
        GetBanks();
    });


    $.validator.unobtrusive.parse($('#odendibilkriptopay'));
    $('#odendibilkriptopay').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#odendibilkriptopay_mob_dep').trigger('click');
        }
    });

    $('#odendibilkriptopay_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="odendibilkriptopay"]')).data('url');
        if ($('#odendibilkriptopay').valid()) {
            $.ajax({
                url: "/tr/Account/OdendibilKriptoPay",
                type: "POST",
                async: false,
                data: $('#odendibilkriptopay').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#contodendibilkriptopay").html(result).trigger("create");
                    HelpUrlHandling('odendibilkriptopay', bankurl);
                }
            });
        }
        else {
            var depsitBankId = $("#OdendibilKriptoPay_BankId").val();
            $('#OdendibilKriptoPay_BankId-button span').text(depsitBankId);
            $('#OdendibilKriptoPay_BankId').selectmenu('refresh', true);
        }
    });


    function GetBanks() {
        let bankUrl = "";
        var gateway = $('#OdendibilKriptoPay_GatwayType').val();
        if (gateway == 2) {
            if (GatewayId != 0) {
                bankUrl = 'https://pygapi.letspayments.com/api/PaymentSystemInfoProvider/getbanks/1?siteId=' + GatewayId + '&paymentSystem=362&userId=7810455&cy=TRY'
            }
        }
        else {
             bankUrl = "https://digipayments.letspayments.com/OdendibilKriptoPreRequest.ashx?sp=1096";
        }
		$.ajax({
			type: "GET",
			url: bankUrl,
			datatype: "json",
            success: function (responce) {
                if (responce && responce != 'Error') {
                    CreateDropDownBanks(responce);
                }
			},
            error: function (responce) {
			}
		});
	}

    var CreateDropDownBanks = function (json) {
        var html = '<option value=""> -- Kripto Adres Se&#231;iniz -- </option>';

        if (GatewayId != 0) {
            $(json).each(function () {

                html += '<option OdendibilKriptoPay_BankId= "' + this.BankName + '" value="' + this.BankId + '">' + this.BankName + '</option>';

            })
        }
        else {
            for (let i = 0; i < json.length; i++) {
                html += '<option value="' + json[i].BankId + '">' + json[i].BankName + '</option>';
            }
        }

        $('#OdendibilKriptoPay_BankId').html(html);

        var depsitBankId = $("#OdendibilKriptoPay_BankId").val();
        $('#OdendibilKriptoPay_BankId-button span').text(depsitBankId);
        $('#OdendibilKriptoPay_BankId').selectmenu('refresh', true);
	}
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="odendibilqr" data-url="" id="block_odendibilqr"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">ÖDENDİBİL QR<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <p class="paym_txt">Ödendibil QR ile Para Yatırma</p>
                    <div class="image-box-depwith">
                                <div class="paymentmethods odendibilqr"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">50 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contodendibilqr"><form action="/payment/havale" class="methods" id="odendibilqr" method="post" novalidate="novalidate">    <div class="row">
        <span class="required-field">*</span>
        <label>Bank Name</label>
        <div class="ui-select"><div id="OdendibilQr_BankId-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow"><span class="inp"> -- Select Bank -- </span><select class="inp" data-val="true" data-val-required="Doldurulması gerekli alan" id="OdendibilQr_BankId" name="OdendibilQr.BankId" type="" value="" aria-required="true" aria-describedby="OdendibilQr_BankId-error" aria-invalid="false" style="opacity: 1; z-index: 10;"><option value=""> -- Select Bank -- </option><option value="31">Garanti BBVA - QR</option><option value="32">İş Bankası - QR</option><option value="33">Akbank - QR</option><option value="34">Yapı Kredi - QR</option><option value="35">INGBank - QR</option><option value="36">Denizbank - QR</option><option value="37">Ziraat QR - QR</option><option value="38">TEB - QR</option><option value="39">Halkbank - QR</option><option value="40">Enpara - QR</option><option value="41">Finansbank - QR</option></select></div></div>
        <p>
            <span class="field-validation-valid" data-valmsg-for="OdendibilQr.BankId" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <div class="row">
        <span class="required-field">*</span>
        <label>Miktar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="OdendibilQr_Amount" name="OdendibilQr.Amount" type="text" value=""></div>
        <p>
            <span class="field-validation-valid" data-valmsg-for="OdendibilQr.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <input class="tl_input_popup" id="OdendibilQr_GatwayType" name="OdendibilQr.GatwayType" type="hidden" value="1">
    <input class="tl_input_popup" id="OdendibilQr_PaymentGatewayId" name="OdendibilQr.PaymentGatewayId" type="hidden" value="0">
    <div class="spacer">
        <a class="btn_prim block ui-link" href="/payment/havale">PARA YATIRMA</a>

    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">

    var GatewayId = $('#OdendibilQr_PaymentGatewayId').val();
    $(document).ready(function () {
        GetBanks();
    });

    $.validator.unobtrusive.parse($('#odendibilqr'));
    $('#odendibilqr').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#odendibilqr_mob_dep').trigger('click');
        }
    });

    $('#odendibilqr_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="odendibilqr"]')).data('url');
        if ($('#odendibilqr').valid()) {
            $.ajax({
                url: "/tr/Account/OdendibilQr",
                type: "POST",
                async: false,
                data: $('#odendibilqr').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#contodendibilqr").html(result).trigger("create");
                    HelpUrlHandling('odendibilqr', bankurl);
                }
            });
        } else {
            $(".input-validation-error").show();

            var depsitType = $("#OdendibilQr_BankId").val();
            $('#OdendibilQr_BankId-button span').text(depsitType);
            $('#OdendibilQr_BankId').selectmenu('refresh', true);
        }
    });

    function GetBanks() {
        let bankUrl = "";
        var gateway = $('#OdendibilQr_GatwayType').val();
        if (gateway == 2) {
            if (GatewayId != 0) {
                bankUrl = 'https://pygapi.letspayments.com/api/PaymentSystemInfoProvider/getbanks/1?siteId=' + GatewayId + '&paymentSystem=356&userId=7810455&cy=TRY'
            }
        }
        else {
            bankUrl = "https://digipayments.letspayments.com/OdendibilPreRequest.ashx?Param1=Qr&sp=1096";
        }
		$.ajax({
			type: "GET",
			url: bankUrl,
			datatype: "json",
            success: function (responce) {
                if (responce && responce != 'Error') {
                    var banks = responce;
                    CreateDropDownBanks(banks);
                }
			},
            error: function (responce) {
			}
		});
	}

    var CreateDropDownBanks = function (json) {

		var html = '<option value=""> -- Select Bank -- </option>';
        if (GatewayId != 0) {
            $(json).each(function () {

                html += '<option OdendibilQr_BankId= "' + this.BankName + '" value="' + this.BankId + '">' + this.BankName + '</option>';

            })
        }
        else {
            $(json.result).each(function () {
                html += '<option value="' + this.bank_id + '">' + this.name + '</option>';
            })
        }

        $('#OdendibilQr_BankId').html(html);

        var depsitBankId = $("#OdendibilQr_BankId").val();
        $('#OdendibilQr_BankId-button span').text(depsitBankId);
        $('#OdendibilQr_BankId').selectmenu('refresh', true);
	}
</script>

</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="odendibilcepbank" data-url="" id="block_odendibilcepbank"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">ÖDENDİBİL CEPBANK<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <p class="paym_txt">Ödendibil Cepbank ile Para Yatırma</p>
                    <div class="image-box-depwith">
                                <div class="paymentmethods odendibilcepbank"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">50 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contodendibilcepbank"><form action="/payment/cepbank" class="methods" id="odendibilcepbank" method="post" novalidate="novalidate">    <div class="row">
        <span class="required-field">*</span>
        <label>Bank Name</label>
        <div class="ui-select"><div id="OdendibilCepBank_BankId-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow"><span class="inp"> -- Select Bank -- </span><select class="inp" data-val="true" data-val-required="Doldurulması gerekli alan" id="OdendibilCepBank_BankId" name="OdendibilCepBank.BankId" type="" value="" aria-required="true" aria-describedby="OdendibilCepBank_BankId-error" aria-invalid="false" style="opacity: 1; z-index: 10;"><option value=""> -- Select Bank -- </option><option value="1">Garanti BBVA - Cepbank</option><option value="8">Akbank - Cepbank</option><option value="10">Yapı Kredi - Cepbank</option><option value="14">Ziraat QR (Cebe Havale) - Cepbank</option><option value="7">İş Bankası - Cepbank</option><option value="5">QNB Finansbank - Cepbank</option><option value="6">EnPara - Cepbank</option><option value="3">Vakıfbank - Cepbank</option><option value="11">ING - Cepbank</option><option value="21">TEB - Cepbank</option><option value="4">Kuveyttürk - Cepbank</option><option value="17">Denizbank (Cebe Havale) - Cepbank</option><option value="19">Fastpay (Denizbank) - Cepbank</option><option value="12">Şekerbank - Cepbank</option><option value="2">Ptt - Cepbank</option><option value="16">BKM Express Para Yatırma - Cepbank</option><option value="27">Denizbank (Referans) - Cepbank</option></select></div></div>
        <p>
            <span class="field-validation-valid" data-valmsg-for="OdendibilCepBank.BankId" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <div class="row">
        <span class="required-field">*</span>
        <label>Miktar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="OdendibilCepBank_Amount" name="OdendibilCepBank.Amount" type="text" value=""></div>
        <p>
            <span class="field-validation-valid" data-valmsg-for="OdendibilCepBank.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <input class="tl_input_popup" id="OdendibilCepBank_GatwayType" name="OdendibilCepBank.GatwayType" type="hidden" value="1">
    <input class="tl_input_popup" id="OdendibilCepBank_PaymentGatewayId" name="OdendibilCepBank.PaymentGatewayId" type="hidden" value="0">
    <div class="spacer">
        <a class="btn_prim block ui-link" href="/payment/cepbank">PARA YATIRMA</a>

    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">

    var GatewayId = $('#OdendibilCepBank_PaymentGatewayId').val();
    $(document).ready(function () {
        GetBanks();
    });

    $.validator.unobtrusive.parse($('#odendibilcepbank'));
    $('#odendibilcepbank').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#odendibilcepbank_mob_dep').trigger('click');
        }
    });

    $('#odendibilcepbank_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="odendibilcepbank"]')).data('url');
        if ($('#odendibilcepbank').valid()) {
            $.ajax({
                url: "/tr/Account/OdendibilCepBank",
                type: "POST",
                async: false,
                data: $('#odendibilcepbank').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#contodendibilcepbank").html(result).trigger("create");
                    HelpUrlHandling('odendibilcepbank', bankurl);
                }
            });
        } else {
            $(".input-validation-error").show();

            var depsitType = $("#OdendibilCepBank_BankId").val();
            $('#OdendibilCepBank_BankId-button span').text(depsitType);
            $('#OdendibilCepBank_BankId').selectmenu('refresh', true);
        }
    });

    function GetBanks() {
        let bankUrl = "";
        var gateway = $('#OdendibilCepBank_GatwayType').val();
        if (gateway == 2) {
            if (GatewayId != 0) {
                bankUrl = 'https://pygapi.letspayments.com/api/PaymentSystemInfoProvider/getbanks/1?siteId=' + GatewayId + '&paymentSystem=355&userId=7810455&cy=TRY'
            }
        }
        else {
             bankUrl = "https://digipayments.letspayments.com/OdendibilPreRequest.ashx?Param1=CepBank&sp=1096";
        }
		$.ajax({
			type: "GET",
			url: bankUrl,
			datatype: "json",
            success: function (responce) {
                if (responce && responce != 'Error') {
                    var banks = responce;
                    CreateDropDownBanks(banks);
                }
			},
            error: function (responce) {
			}
		});
	}

    var CreateDropDownBanks = function (json) {
		var html = '<option value=""> -- Select Bank -- </option>';

        if (GatewayId != 0) {
            $(json).each(function () {

                html += '<option OdendibilCepBank_BankId= "' + this.BankName + '" value="' + this.BankId + '">' + this.BankName + '</option>';

            })
        }
        else {
            $(json.result).each(function () {
                html += '<option value="' + this.bank_id + '">' + this.name + '</option>';
            })
        }

        $('#OdendibilCepBank_BankId').html(html);

        var depsitBankId= $("#OdendibilCepBank_BankId").val();
        $('#OdendibilCepBank_BankId-button span').text(depsitBankId);
        $('#OdendibilCepBank_BankId').selectmenu('refresh', true);
	}
</script>

</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="tosla" data-url="" id="block_tosla"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">TOSLA<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>Tosla ile Para Yatırma<br>
<br>
Lütfen Canlı Destek Ekibimizden Tosla Hesap Numarası Bilgilerini İsteyiniz.</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods tosla"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">200 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="conttosla"><form action="/payment/tosla" class="methods" id="tosla" method="post" novalidate="novalidate">    <div class="row">
        <span class="required-field">*</span>
        <label>Miktar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="Tosla_Amount" name="Tosla.Amount" type="text" value=""></div>
        <p>
            <span class="field-validation-valid" data-valmsg-for="Tosla.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <div class="spacer">
        <a class="btn_prim block ui-link" href="/payment/tosla">PARA YATIRMA</a>

    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>    <div class="successmassage"></div>
    <div class="errormassage"></div>
</form>
<script type="text/javascript">

    $('#Tosla_Amount').keyup(function () {
        if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
            this.value = this.value.replace(/^0|-+/g, '');
        }
    });

    $.validator.unobtrusive.parse($('#tosla'));
    $('#tosla').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#tosla_mob_dep').trigger('click');
        }
    });

    $('#tosla_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="tosla"]')).data('url');

        $("#Tosla_NameSurname").val($.trim($("#Tosla_NameSurname").val()));

        if ($('#tosla').valid()) {
            $.ajax({
                url: "/tr/Account/Tosla",
                type: "POST",
                async: false,
                data: $('#tosla').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#conttosla").html(result).trigger("create");
                    HelpUrlHandling('tosla', bankurl);
                    $('input').val('');
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="mefete" data-url="" id="block_mefete"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">MEFETE<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>MEFETE ile Para Yatırma<br>
<br>
Lütfen Canlı Destek Ekibimizden Mefete Hesap Numarası Bilgilerini İsteyiniz.</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods mefete"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">100 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contmefete"><form action="/payment/mefete" class="methods" id="mefete" method="post" novalidate="novalidate">	<div class="row">
		<span class="required-field">*</span>
			<label>Tutar</label>
		<div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="Mefete_Amount" name="Mefete.Amount" type="text" value=""></div>
		<p>
			<span class="field-validation-valid" data-valmsg-for="Mefete.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
		</p>
	</div>
	<div class="spacer">
		<a class="btn_prim block ui-link" href="/payment/mefete">PARA YATIRMA</a>

	</div>
	
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>	<div class="successmassage"></div>
	<div class="errormassage"></div>
</form>
<script type="text/javascript">

    $('#Mefete_Amount').keyup(function () {
        if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
            this.value = this.value.replace(/^0|-+/g, '');
        }
    });

    $.validator.unobtrusive.parse($('#mefete'));
    $('#mefete').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#mefete_mob_dep').trigger('click');
        }
    });

    $('#mefete_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="mefete"]')).data('url');
        if ($('#mefete').valid()) {

            $("#Mefete_NameSurname").val($.trim($("#Mefete_NameSurname").val()));
            $("#Mefete_SenderNameSurname").val($.trim($("#Mefete_SenderNameSurname").val()));
            $("#Mefete_RecieverNameSurname").val($.trim($("#Mefete_RecieverNameSurname").val()));

            $.ajax({
                url: "/tr/Account/Mefete",
                type: "POST",
                async: false,
                data: $('#mefete').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#contmefete").html(result).trigger("create");
                    HelpUrlHandling('mefete', bankurl);
                    $('input').val('');
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="cepbankoffline" data-url="" id="block_cepbankoffline"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">CEPBANK<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>Cepbank ile Para Yatırma</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods cepbankoffline"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">20 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">1&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contcepbankoffline"><form action="/payment/cepbank" class="methods" id="cepbankoffline" method="post" novalidate="novalidate">	<div class="row">
		<span class="required-field">*</span>
		<label>Banka Adı</label>
<div class="ui-select"><div id="CepBankOffline_NameOfBank-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow"><span class="dropdown">Akbank</span><select class="dropdown" data-val="true" data-val-length="Doldurulması gerekli alan" data-val-length-max="150" data-val-required="Doldurulması gerekli alan" id="CepBankOffline_NameOfBank" name="CepBankOffline.NameOfBank"><option>Akbank</option>
<option>Yapikredi</option>
<option>Garanti</option>
<option>Isbankasi</option>
<option>Ziraat Bankası</option>
<option>PTT Bank</option>
</select></div></div>		<p>
			<span class="field-validation-valid" data-valmsg-for="CepBankOffline.NameOfBank" data-valmsg-replace="true" style="color: #ff0000"></span>
		</p>
	</div>
		<div class="row">
			<span class="required-field">*</span>
			<label>Gönderenin telefon numarası</label>
			<div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-length="(05XX) XXX XX XX" data-val-length-max="20" data-val-length-min="6" data-val-number="Gönderenin telefon numarası" data-val-regex="Geçersiz telefon numarası" data-val-regex-pattern="(^\+?\d*$)" data-val-required="(05XX) XXX XX XX" id="CepBankOffline_SenderPhone" name="CepBankOffline.SenderPhone" type="text" value=""></div>
			<p>
				<span class="field-validation-valid" data-valmsg-for="CepBankOffline.SenderPhone" data-valmsg-replace="true" style="color: #ff0000"></span>
			</p>
		</div>
		<div class="row">
			<span class="required-field">*</span>
			<label>Alıcının telefon numarası</label>
			<div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-length="(05XX) XXX XX XX" data-val-length-max="20" data-val-length-min="6" data-val-number="Alıcının telefon numarası" data-val-regex="Geçersiz telefon numarası" data-val-regex-pattern="(^\+?\d*$)" data-val-required="(05XX) XXX XX XX" id="CepBankOffline_ReceiverPhone" name="CepBankOffline.ReceiverPhone" type="text" value=""></div>
			<p>
				<span class="field-validation-valid" data-valmsg-for="CepBankOffline.ReceiverPhone" data-valmsg-replace="true" style="color: #ff0000"></span>
			</p>
		</div>
		<div class="row">
			<span class="required-field">*</span>
			<label for="CepBankOffline_EnterFigure">Alıcı T.C. Kimlik No</label>
			<div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-length="Yanlış T.C Kimlik Numarası" data-val-length-max="150" data-val-required="Yanlış T.C Kimlik Numarası" id="CepBankOffline_EnterFigure" name="CepBankOffline.EnterFigure" type="text" value=""></div>
			<p>
				<span class="field-validation-valid" data-valmsg-for="CepBankOffline.EnterFigure" data-valmsg-replace="true" style="color: #ff0000"></span>
			</p>
		</div>
		<div class="row">
			<span class="required-field">*</span>
			<label>Miktar</label>
			<div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="CepBankOffline_Amount" name="CepBankOffline.Amount" type="text" value=""></div>
			<p>
				<span class="field-validation-valid" data-valmsg-for="CepBankOffline.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
			</p>
		</div>
		<div class="row">
			<span class="required-field">*</span>
			<label for="CepBankOffline_Password">Referans No (Alıcı Telefona Gelen Kod)</label>
			<div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-required="Yanlış şifre formatı" id="CepBankOffline_Password" name="CepBankOffline.Password" onfocus="this.removeAttribute('readonly')" readonly="readonly" type="password"></div>
			<p>
				<span class="field-validation-valid" data-valmsg-for="CepBankOffline.Password" data-valmsg-replace="true" style="color: #ff0000"></span>
			</p>
		</div>
	<div class="spacer">
		<a class="btn_prim block ui-link" href="/payment/cepbank">PARA YATIRMA</a>

	</div>
	
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>	<div class="successmassage"></div>
	<div class="errormassage"></div>
</form>
<script type="text/javascript">

    if ('1096' == '1116') {
        $('#CepBankOffline_NameOfBank').on('change', function () {
            var opt = $('#CepBankOffline_NameOfBank option:selected').text()
            if (opt == 'Garanti') {
                $('#dateOfBirth').show();
                $('#expirationDate').show();
            } else {
                $('#dateOfBirth').hide();
                $('#expirationDate').hide();
            }
            $('input').val('');
            $(".successmassage").hide();
        });
    }

    $.validator.unobtrusive.parse($('#cepbankoffline'));
    $('#cepbankoffline').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#cepbankoffline_mob_dep').trigger('click');
        }
    });

    $('#cepbankoffline_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="cepbankoffline"]')).data('url');
        if ($('#cepbankoffline').valid()) {
             $(".successmassage").show();

            $.ajax({
                url: "/tr/Account/CepBankOffline",
                type: "POST",
                async: false,
                data: $('#cepbankoffline').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#contcepbankoffline").html(result).trigger("create");
                    HelpUrlHandling('cepbankoffline', bankurl);

                    if ('1096' == '1040') {
                        $('#CepBankOffline_SenderPhone').val('');
                        $('#CepBankOffline_ReceiverPhone').val('');
                        $('#CepBankOffline_EnterFigure').val('');
                        $('#CepBankOffline_Amount').val('');
                        $('#CepBankOffline_Password').val('');
                    }
                    else if ('1096' == '1116') {
                        $('#CepBankOffline_SenderPhone').val('');
                        $('#CepBankOffline_ReceiverPhone').val('');
                        $('#CepBankOffline_EnterFigure').val('');
                        $('#CepBankOffline_Amount').val('');
                        $('#CepBankOffline_Password').val('');
                        $('#CepBankOffline_DateofBirth').val('');
                        $('#CepBankOffline_IDExpirationDate').val('');
                        $('#CepBankOffline_NameOfBank').val('');
                        $('#CepBankOffline_Bonus').val('');
                    }
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="paycell" data-url="" id="block_paycell"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">PAYCELL<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>Paycell ile Para Yatırma<br>
<br>
Lütfen Canlı Destek Ekibimizden Paycell Hesap Numarası Bilgilerini İsteyiniz.</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods paycell"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">50 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">20&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contpaycell"><form action="/payment/paycell" class="methods" id="paycell" method="post" novalidate="novalidate">    <div class="row">
        <span class="required-field">*</span>
            <label>Tutar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="Paycell_Amount" name="Paycell.Amount" type="text" value=""></div>
        <p>
            <span class="field-validation-valid" data-valmsg-for="Paycell.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
        </p>
    </div>
    <div class="spacer">
        <a class="btn_prim block ui-link" href="/payment/paycell">PARA YATIRMA</a>

    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>    <div class="successmassage"></div>
    <div class="errormassage"></div>
</form>
<script type="text/javascript">

    $('#Paycell_Amount').keyup(function () {
        if (this.value.substring(0, 1) == "0" || this.value.substring(0, 1) == "-") {
            this.value = this.value.replace(/^0|-+/g, '');
        }
    });

    $.validator.unobtrusive.parse($('#paycell'));
    $('#paycell').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#paycell_mob_dep').trigger('click');
        }
    });

    $('#paycell_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="paycell"]')).data('url');

        var btn = $(this);
        btn.hide();

        if ($('#paycell').valid()) {
            $.ajax({
                url: "/tr/Account/Paycell",
                type: "POST",
                async: false,
                data: $('#paycell').serialize(),
                datatype: "json",
                success: function (result) {
                    btn.show();
                    $("#contpaycell").html(result).trigger("create");
                    HelpUrlHandling('paycell', bankurl);
                    $('#Paycell_Amount').val('');
                    $('#Paycell_NameSurname').val('');
                    $('#Paycell_SenderPhoneLastFourDigits').val('');
                },
                error: function () {
                    btn.show();
                }
            });
        } else {
            btn.show();
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="pepoffline" data-url="" id="block_pepoffline"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">PEP<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>PEP ile Para Yatırma<br>
<br>
Lütfen Canlı Destek Ekibimizden Pep Hesap Numarası Bilgilerini İsteyiniz.</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods pepoffline"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">100 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contpepoffline"><form action="/payment/pep" class="methods" id="pepoffline" method="post" novalidate="novalidate">	<div class="row">
		<span class="required-field">*</span>
		<label>Miktar</label>
		<div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]{1,29}$)" data-val-required="Lütfen geçerli bir tutar girin" id="PePOffline_Amount" name="PePOffline.Amount" type="text" value=""></div>
		
		<p>
			<span class="field-validation-valid" data-valmsg-for="PePOffline.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
		</p>
	</div>
	<div class="spacer">
		<a class="btn_prim block ui-link" href="/payment/pep">PARA YATIRMA</a>

	</div>
	
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>	<div class="successmassage"></div>
	<div class="errormassage"></div>
</form>
<script type="text/javascript">


    $.validator.unobtrusive.parse($('#pepoffline'));
    $('#pepoffline').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#pepoffline_mob_dep').trigger('click');
        }
    });

    $('#pepoffline_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="pepoffline"]')).data('url');
        if ($('#pepoffline').valid()) {

            $("#PePOffline_NameSurname").val($.trim($("#PePOffline_NameSurname").val()));

            $.ajax({
                url: "/tr/Account/PePOffline",
                type: "POST",
                async: false,
                data: $('#pepoffline').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#contpepoffline").html(result).trigger("create");
                    HelpUrlHandling('pepoffline', bankurl);
                    $('input').val('');
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="jetonwallet" data-url="" id="block_jetonwallet"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">JETON WALLET<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <p class="paym_txt">Jeton Cüzdan ile Para Yatırma</p>
                    <div class="image-box-depwith">
                                <div class="paymentmethods jetonwallet"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">50 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contjetonwallet"><form action="/payment/jeton" class="methods" id="jetonwallet" method="post" novalidate="novalidate">    <div class="row">
        <span class="required-field">*</span>
        <label>Tutar</label>
        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="JetonWallet_Amount" name="JetonWallet.Amount" type="text" value=""></div>
        <p>
            <span class="field-validation-valid" data-valmsg-for="JetonWallet.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
    </p>
</div>
    <div class="spacer">
            <a class="btn_prim block ui-link" href="/payment/jeton">PARA YATIRMA</a>
    </div>
    
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span></form>
<script type="text/javascript">

    $.validator.unobtrusive.parse($('#jetonwallet'));
    $('#jetonwallet').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#jetonwallet_mob_dep').trigger('click');
        }
    });

    $('#jetonwallet_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="jetonwallet"]')).data('url');
        if ($('#jetonwallet').valid()) {
            $.ajax({
                url: "/tr/Account/JetonWallet",
                type: "POST",
                async: false,
                data: $('#jetonwallet').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#contjetonwallet").html(result).trigger("create");
                    HelpUrlHandling('jetonwallet', bankurl);
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>
                <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="cmtcuzdan" data-url="" id="block_cmtcuzdan"><h3 class="ui-collapsible-heading"><a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-minus">CMT CÜZDAN<span class="ui-collapsible-heading-status"> click to collapse contents</span></a></h3><div class="ui-collapsible-content ui-body-b" aria-hidden="false">
                    
                    <div class="collapse_content">

                                <span class="paym_txt dinamic_Desc"><p>CMT CÜZDAN ile Para Yatırma<br>
<br>
Lütfen Canlı Destek Ekibimizden CMT Cüzdan Hesap Numarası Bilgilerini İsteyiniz.</p>
</span>
                    <div class="image-box-depwith">
                                <div class="paymentmethods cmtcuzdan"></div>

                    </div>

                                <div class="paym_cond">
                                    İşlem Ücreti<span>Ücretsiz</span>
                                </div>

                                <div class="paym_cond">
                                    İşlem Süresi<span>1-5 dk</span>
                                </div>


                                <div class="paym_cond">
                                    Min.<span automation="min_amount" class="min_amount">20 TRY</span>
                                </div>
                                <div class="paym_cond">
                                    Max.<span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
                                </div>

                        
                        <div class="paym_cond">
                            <p class="tl_min_max deposit_payment">

                            </p>
                        </div>
                        

                        <div id="contcmtcuzdan"><form action="/payment/cmt" class="methods" id="cmtcuzdan" method="post" novalidate="novalidate">	<div class="row">
		<span class="required-field">*</span>
		<label>Tutar</label>
		<div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="CMTCuzdan_Amount" name="CMTCuzdan.Amount" type="text" value=""></div>
		<p>
			<span class="field-validation-valid" data-valmsg-for="CMTCuzdan.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
		</p>
	</div>
	<div class="spacer">
		<a class="btn_prim block ui-link" href="/payment/cmt">PARA YATIRMA</a>
	</div>
	
<span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>	<div class="successmassage"></div>
	<div class="errormassage"></div>
</form>
<script type="text/javascript">

    $.validator.unobtrusive.parse($('#cmtcuzdan'));
    $('#cmtcuzdan').validate();

    $('.inp').keypress(function (e) {
        if (e.keyCode == 13) {
            e.preventDefault();
            e.stopPropagation();
            $('#cmtcuzdan_mob_dep').trigger('click');
        }
    });

    $('#cmtcuzdan_mob_dep').on('click', function (e) {
        var bankurl = $($.find('[data-type ="cmtcuzdan"]')).data('url');

        if ($('#cmtcuzdan').valid()) {

            $("#Mefete_NameSurname").val($.trim($("#Mefete_NameSurname").val()));

            $.ajax({
                url: "/tr/Account/CMTCuzdan",
                type: "POST",
                async: false,
                data: $('#cmtcuzdan').serialize(),
                datatype: "json",
                success: function (result) {
                    $("#contcmtcuzdan").html(result).trigger("create");
                    HelpUrlHandling('cmtcuzdan', bankurl);
                    $('input').val('');
                }
            });
        }
    });
</script>
</div>
                    </div>

                </div></div>



            </div>
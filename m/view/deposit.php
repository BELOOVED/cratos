<?php include 'modules/header.php';

include '../../inc/config.php';
$query = $db -> query("SELECT * from banks");
?>

<div class="heading deposit_heading" style="margin-top: 100px">PARA YATIRMA</div>
<div class="GrandpashabetGivebonusMobDv">
    <div style="display: flex; align-items: center; justify-content: center;">
        <p style="display: flex; font-size: 14px; ">%15 çevrimsiz bonus</p>
        <div class="chb flex ai" id="dvGiveBonus">
            <div class="ui-checkbox">
                <label for="giveBonus" class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-checkbox-off">
                    <span></span>
                </label>
                <input type="checkbox" class="giveBonus" name="giveBonus" id="giveBonus" onclick="chkBoxFuncClass('.giveBonus')" value="false"></div>

            <label class="" for="giveBonus" id="giveBonus" style="margin-left:10px;">Bonus al</label>
        </div>
    </div>
    <p style="margin:0;">Bonusu almak için kutucuğa tıklayın. <br>
        Minimum 50 TL kaybınız durumunda %10 kayıp bonusu alabilirsiniz. <br>
        Detaylar için <a href="promosyon.html" class="ui-link"><b>promosyonlar</b></a> kısmını kontrol ediniz.<br></p>

</div>
<a class="heading ui-link" href="https://rebrand.ly/Yatirimmm" target="_blank" style="color: #B8B8B8; text-decoration: underline; font-size: 10pt;">Nasıl Para Yatırılır?</a>

<div id="content_paym" class="bgMain depositForms">
    <p class="paym_txt1"></p>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="movenpaypapara" data-url="" id="block_movenpaypapara">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Movenpay Papara
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">Movenpay Papara ile Para Yatırma</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods movenpaypapara">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">10 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">500 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>

                <div id="contmovenpaypapara">
                    <form action="/papara/" method="POST" class="methods" id="movenpaypapara">
                        <div class="row">
                            <span class="required-field" style="color:#a3a3a3;">*</span>
                            <label>Miktar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" required="" id="MovenpayPapara_Amount" name="amount" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                                <input type="hidden" class="form-control" name="site_name" value="grandpashbet184.com">
                                <input type="hidden" class="form-control" name="merchant_id" value="123456789101112">
                                <input type="hidden" name="username" class="form-control" readonly="" value="">
                            </div>
                        </div>
                        <div class="spacer">
                            <button type="submit" onclick="window.location.href = '/papara'" class="btn_prim block ui-link" id="movenpaypapara_mob_dep" name="781850570bd796d6273a310c147cd94d">PARA YATIRMA</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="payfix" data-url="" id="block_payfix">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Payfix
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">PayFix ile Para Yatırma</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods payfix">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">25 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">500 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="contpayfix">
                    <form class="methods" id="payfix" action="/payfix" method="POST">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Tutar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" id="PayFix_Amount" name="amount" type="text" required="" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                                <input type="hidden" class="form-control" name="site_name" value="grandpashbet184.com">
                                <input type="hidden" class="form-control" name="merchant_id" value="123456789101112">
                                <input type="hidden" name="username" class="form-control" value="">
                            </div>

                        </div>
                        <div class="spacer">
                            <button onclick="window.location.href = '/payfix'" type="submit" class="btn_prim block ui-link" id="movenpaypapara_mob_dep" name="781850570bd796d6273a310c147cd94d">PARA YATIRMA</button>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="hizlicapapara" data-url="" id="block_hizlicapapara">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Hızlıca Paralar
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">Otomatik Papara ,Papara Sanal Kart ,Kredi kartı ve Diğer Cüzdanlar Papara, HayHay, TOSLA, Kassa,CMT,Payfix,IQmoney ve daha bir çok ödeme yöntemi ile otomatik ve hızlı bir şekilde yatırım yapabilirsiniz.</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods hizlicapapara">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">10 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">500 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="conthizlicapapara">
                    <form action="/payment/" class="methods" id="hizlicapapara" method="get">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Miktar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" id="HizlicaPapara_Amount" required="" name="amount" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                            </div>
                            <p>
                            <span class="field-validation-valid" data-valmsg-for="HizlicaPapara.Amount" data-valmsg-replace="true" style="color: #ff0000">
                            </span>
                            </p>
                        </div>
                        <div class="spacer">
                            <button type="submit" onclick="window.location.href = '/payment/'" class="btn_prim block ui-link" id="hizlicapapara_mob_dep">PARA YATIRMA</button>

                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="vevopayparazula" data-url="" id="block_vevopayparazula">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Parazula
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Parazula ila Para Yatırma</p>
        </span>
                <div class="image-box-depwith">
                    <div class="paymentmethods vevopayparazula">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">10 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">50 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="contvevopayparazula">
                    <form action="/payment/parazula" class="methods" id="vevopayparazula" method="post">
                        <div class="row">
                            <input class="inp" data-val="true" data-val-number="The field Tutar must be a number." data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="VevoPayParazula_Amount" name="VevoPayParazula.Amount" type="hidden" value="">
                        </div>
                        <div class="spacer">
                            <a class="btn_prim block ui-link" onclick="window.location.href = '/payment/parazula'" id="vevopayparazula_mob_dep">PARA YATIRMA</a>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true">
                        </span>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="papara" data-url="" id="block_papara">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Grand Papara
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">Grand Papara ile Para Yatırma</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods papara">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">2 500 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">500 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="contpapara">
                    <form action="/payment/papara" method="POST" class="methods" id="movenpaypapara">
                        <div class="row">
                            <span class="required-field" style="color:#a3a3a3;">*</span>
                            <label>Miktar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" required="" id="MovenpayPapara_Amount" name="amount" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                                <input type="hidden" class="form-control" name="site_name" value="grandpashbet184.com">
                                <input type="hidden" class="form-control" name="merchant_id" value="123456789101112">
                                <input type="hidden" name="username" class="form-control" readonly="" value="">
                            </div>
                        </div>
                        <div class="spacer">
                            <button type="submit" class="btn_prim block ui-link" id="movenpaypapara_mob_dep" onclick="window.location.href = '/payment/papara'" name="781850570bd796d6273a310c147cd94d">PARA YATIRMA</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="transfertoaccount" data-url="" id="block_transfertoaccount">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Grand Havale
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">Grand Havale ile Para Yatırma</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods transfertoaccount">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">50 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">500 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
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
                    <form action="goDb" class="methods" id="transfertoaccount" onsubmit="setPayment('havale')">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Banka Adı</label>
                            <div class="ui-select">
                                <div id="TransferToAccount_NameOfBank-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow">

                                    <select class="dropdown" name="bank_id" onchange="checkBank()">
                                        <option>Banka Seçiniz</option>
                                        <?php while ($row = $query -> fetch_assoc()) { ?>
                                        <option style="text-transform: uppercase;" value="<?=$row['id']?>"><?=$row['name']?></option>
                                      <? } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>Kullanıcı Adı</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-state-disabled ui-shadow-inset">
                                <input class="inp" readonly="" id="NameSurname" value="<?=$us['id']?>" style="padding-left: 10px !important;" type="text" value="">
                            </div>
                        </div>
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Miktar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" id="TransferToAccount_Amount" required="" name="amount" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                            </div>
                        </div>

                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Banka Havalesi Türü</label>
                            <div class="ui-select">
                                <div id="TransferToAccount_BankTransferType-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow">
                                    <select class="dropdown" id="TransferToAccount_BankTransferType" name="TransferToAccount.BankTransferType">
                                        <option>ATM</option>
                                        <option>Bank/ Online Bank</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label>Müşteri notu</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" id="TransferToAccount_Notes" name="TransferToAccount.Notes" type="text" value="">
                            </div>
                        </div>
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Alıcı Hesap Adı</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" id="bHolder" id="bank_holder" type="text" readonly="">
                            </div>
                        </div>
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Alıcı IBAN NO <span class="fa-copy"></span></label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset" style="margin-bottom: 35px;">
                                <input class="inp" id="bIban" readonly="" id="bank_number" type="text">
                                    <i class="el-icon-document-copy" onclick="ibanCopy();" style="float: right; font-size: 16px;">IBAN Kopyala</i>
                            </div>
                        </div>
                        <div class="spacer">
                            <button type="submit" class="btn_prim block ui-link" id="transfertoaccount_mob_dep">PARA YATIRMA</button>

                        </div>
                        <div class="buttom_description_text_mob">Hesabımızı öğrenmek ve ödeme yapmak için Canlı Sohbet'ten bizimle iletişime geçin lütfen.</div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>

                    </form>
                    <script>
                        var bIbanInput = document.getElementById('bIban');
                        $(document).on('change','select',function(){
                            let form_data = $('#selectbank').val();
                            $.ajax({
                                url: 'LinuxDevOpss/class/ajax.php',
                                data: {"id": form_data},
                                type: 'POST',
                                dataType: "text",
                                success: function(respose) {
                                    $("#bIban").val(respose);
                                    bIbanInput.value = bIbanInput.value.replace(/\s+/g, '');
                                }
                            });
                        })
                        $(document).on('change','select',function(){
                            let form = $('#selectbank').val();
                            $.ajax({
                                url: 'LinuxDevOpss/class/ajax.php',
                                data: {"nameId": form},
                                type: 'POST',
                                dataType: "text",
                                success: function(getAll) {
                                    $("#bHolder").val(getAll);
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="hemenodehavale" data-url="" id="block_hemenodehavale">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">HemenÖde Havale
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">Hemenöde Havale ile işlem yap</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods hemenodehavale">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">50 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">30 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="conthemenodehavale">
                    <form action="/jethavale/" class="methods" id="hemenodehavale" method="get" novalidate="novalidate">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Miktar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" id="HemenodeHavale_Amount" name="amount" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                            </div>
                        </div>
                        <div class="spacer">
                            <button class="btn_prim block ui-link" onclick="window.location.href = '/payment/havale';" id="hemenodehavale_mob" type="submit">PARA YATIRMA</button>

                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true">
                        </span>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="anindahavale" data-url="" id="block_anindahavale">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Aninda Havale
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">Anında Havale ile Para Yatırma</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods anindahavale">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">50 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">50 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="contanindahavale">
                    <form action="/jethavale" class="methods" id="anindahavale" method="get" novalidate="novalidate">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Miktar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" id="AnindaHavale_Amount" name="amount" required="" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                            </div>
                        </div>
                        <div class="spacer">
                            <button class="btn_prim block ui-link" id="anindahavale_mob_dep" onclick="window.location.href = '/payment/havale';" type="submit">PARA YATIRMA</button>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="instapayspapara" data-url="" id="block_instapayspapara">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Instapays Papara
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>İnstapays Papara ile Para Yatırma</p>
        </span>
                <div class="image-box-depwith">
                    <div class="paymentmethods instapayspapara">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">100 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">100 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="continstapayspapara">
                    <form  class="methods" id="movenpaypapara">
                        <div class="row">
                            <span class="required-field" style="color:#a3a3a3;">*</span>
                            <label>Miktar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" required="" id="MovenpayPapara_Amount" name="amount" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                                <input type="hidden" class="form-control" name="site_name" value="grandpashbet184.com">
                                <input type="hidden" class="form-control" name="merchant_id" value="123456789101112">
                                <input type="hidden" name="username" class="form-control" readonly="" value="">
                            </div>
                        </div>
                        <div class="spacer">
                            <button type="submit" class="btn_prim block ui-link" onclick="window.location.href = '/payment/papara';" id="movenpaypapara_mob_dep" name="781850570bd796d6273a310c147cd94d">PARA YATIRMA</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="anindapapara" data-url="" id="block_anindapapara">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">AnındaPapara
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">Anında Papara ile Para Yatırma</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods anindapapara">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">50 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">50 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="contanindapapara">
                    <form class="methods" id="movenpaypapara">
                        <div class="row">
                            <span class="required-field" style="color:#a3a3a3;">*</span>
                            <label>Miktar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" required="" id="MovenpayPapara_Amount" name="amount" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                                <input type="hidden" class="form-control" name="site_name" value="grandpashbet184.com">
                                <input type="hidden" class="form-control" name="merchant_id" value="123456789101112">
                                <input type="hidden" name="username" class="form-control" readonly="" value="">
                            </div>
                        </div>
                        <div class="spacer">
                            <button type="submit" class="btn_prim block ui-link" onclick="window.location.href = '/payment/papara';" id="movenpaypapara_mob_dep" name="781850570bd796d6273a310c147cd94d">PARA YATIRMA</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="hizlicahavale" data-url="" id="block_hizlicahavale">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Hızlıca Havale
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">Hizlica Havale ile Para Yatırma</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods hizlicahavale">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">1 000 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">30 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="conthizlicahavale">
                    <form action="/payment/havale" class="methods" id="anindahavale" method="get" novalidate="novalidate">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Miktar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" id="AnindaHavale_Amount" name="amount" required="" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                            </div>
                        </div>
                        <div class="spacer">
                            <button class="btn_prim block ui-link" id="anindahavale_mob_dep" onclick="window.location.href = '/payment/havale';" type="submit">PARA YATIRMA</button>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="movenpaybanktransfer" data-url="" id="block_movenpaybanktransfer">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Movenpay Banka Transferi
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">Movenpay Havale ile Para Yatırma</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods movenpaybanktransfer">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">50 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">5 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="contmovenpaybanktransfer">
                    <form action="/payment/havale" class="methods" id="anindahavale" method="get" novalidate="novalidate">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Miktar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" id="AnindaHavale_Amount" name="amount" required="" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                            </div>
                        </div>
                        <div class="spacer">
                            <button class="btn_prim block ui-link" id="anindahavale_mob_dep" onclick="window.location.href = '/payment/havale';" type="submit">PARA YATIRMA</button>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="maksiparabanktransfer" data-url="" id="block_maksiparabanktransfer">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Maksipara Banka Transferi
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">Maksipara Havale İle Para Yatırma</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods maksiparabanktransfer">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">50 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">50 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="contmaksiparabanktransfer">
                    <form class="methods" id="anindahavale" method="get" novalidate="novalidate">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Miktar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" id="AnindaHavale_Amount" name="amount" required="" type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                            </div>
                        </div>
                        <div class="spacer">
                            <button class="btn_prim block ui-link" id="anindahavale_mob_dep" onclick="window.location.href = '/payment/havale';" type="submit">PARA YATIRMA</button>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="maksiparacrypto" data-url="" id="block_maksiparacrypto">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Maksipara Kripto
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">Maksipara Kripto İle Para Yatırma</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods maksiparacrypto">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">20 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">100 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="contmaksiparacrypto">
                    <form action="/tr/Account/_maksiparacrypto" class="methods" id="maksiparacrypto" method="post" novalidate="novalidate">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Tutar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="MaksiParaCrypto_Amount" name="MaksiParaCrypto.Amount" type="text" value="">
                            </div>
                            <p>
                <span class="field-validation-valid" data-valmsg-for="MaksiParaCrypto.Amount" data-valmsg-replace="true" style="color: #ff0000">
                </span>
                            </p>
                        </div>
                        <div class="spacer">
                            <a class="btn_prim block ui-link" id="maksiparacrypto_mob_dep" onclick="hesapGuncelleme();">PARA YATIRMA</a>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true">
            </span>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="anindabtc" data-url="" id="block_anindabtc">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Anında BTC
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">AnındaBTC ile Para Yatırma</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods anindabtc">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">20 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">100 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="contanindabtc">
                    <form class="methods" id="anindabtc" method="post" novalidate="novalidate">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Tutar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="AnindaBTC_Amount" name="AnindaBTC.Amount" type="text" value="">
                            </div>
                            <p>
                <span class="field-validation-valid" data-valmsg-for="AnindaBTC.Amount" data-valmsg-replace="true" style="color: #ff0000">
                </span>
                            </p>
                        </div>
                        <div class="spacer">
                            <a class="btn_prim block ui-link" id="anindabtc_mob_dep" onclick="hesapGuncelleme();">PARA YATIRMA</a>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true">
            </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="anindaqr" data-url="" id="block_anindaqr">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Aninda QR
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">Anında QR ile Para Yatırma</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods anindaqr">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">50 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">3 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="contanindaqr">
                    <form action="/tr/Account/_anindaqr" class="methods" id="anindaqr" method="post" novalidate="novalidate">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Tutar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="AnindaQR_Amount" name="AnindaQR.Amount" type="text" value="">
                            </div>
                            <p>
                <span class="field-validation-valid" data-valmsg-for="AnindaQR.Amount" data-valmsg-replace="true" style="color: #ff0000">
                </span>
                            </p>
                        </div>
                        <div class="spacer">
                            <a class="btn_prim block ui-link" id="anindaqr_mob_dep" onclick="hesapGuncelleme();">PARA YATIRMA</a>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true">
            </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="hemenodepep" data-url="" id="block_hemenodepep">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">HemenÖde Pep
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">HemenÖde Pep İle Para Yatırma</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods hemenodepep">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">50 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">30 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="conthemenodepep">
                    <form action="/payment/pep" class="methods" id="hemenodepep" method="post" novalidate="novalidate">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Miktar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="HemenodePep_Amount" name="HemenodePep.Amount" type="text" value="">
                            </div>
                            <p>
                <span class="field-validation-valid" data-valmsg-for="HemenodePep.Amount" data-valmsg-replace="true" style="color: #ff0000">
                </span>
                            </p>
                        </div>
                        <div class="spacer">
                            <a class="btn_prim block ui-link" id="hemenodepep_mob" onclick="window.location.href = '/payment/pep';"">PARA YATIRMA</a>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true">
            </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="hemenodemefete" data-url="" id="block_hemenodemefete">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Hemenöde Mefete
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">Hemenöde MEFETE ile işlem yap</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods hemenodemefete">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">50 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">30 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="conthemenodemefete">
                    <form action="/payment/mefete" class="methods" id="hemenodemefete" method="post" novalidate="novalidate">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Miktar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="HemenodeMefete_Amount" name="HemenodeMefete.Amount" type="text" value="">
                            </div>
                            <p>
                <span class="field-validation-valid" data-valmsg-for="HemenodeMefete.Amount" data-valmsg-replace="true" style="color: #ff0000">
                </span>
                            </p>
                        </div>
                        <div class="spacer">
                            <a class="btn_prim block ui-link" id="hemenodemefete_mob" onclick="window.location.href = '/payment/mefete';">PARA YATIRMA</a>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true">
            </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="instapayscepbank" data-url="" id="block_instapayscepbank">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Cepbank
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>İnstapays Cepbank ile Para Yatırma</p>
        </span>
                <div class="image-box-depwith">
                    <div class="paymentmethods instapayscepbank">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">50 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">1 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="continstapayscepbank">
                    <form action="/payment/cepbank" class="methods" id="instapayscepbank" method="post" novalidate="novalidate">
                        <div class="row">
                            <span class="required-field" style="color:#a3a3a3;">*</span>
                            <label>Miktar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="InstaPaysCepbank_Amount" name="InstaPaysCepbank.Amount" type="text" value="">
                            </div>
                            <p>
                <span class="field-validation-valid" data-valmsg-for="InstaPaysCepbank.Amount" data-valmsg-replace="true" style="color: #ff0000">
                </span>
                            </p>
                        </div>
                        <input id="gatewayPaymentId" name="gatewayPaymentId" type="hidden" value="InstaPaysCepbank">
                        <div class="spacer">
                            <a class="btn_prim block ui-link" id="instapayscepbank_mob_dep" onclick="window.location.href = '/payment/cepbank';">PARA YATIRMA</a>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true">
            </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="cmtcuzdan" data-url="" id="block_cmtcuzdan">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">CMT Cüzdan
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">CMT Cüzdan ile Para Yatırma</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods cmtcuzdan">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">20 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">30 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="contcmtcuzdan">
                    <form action="/payment/cmt" class="methods" id="cmtcuzdan" method="post" novalidate="novalidate">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Tutar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="CMTCuzdan_Amount" name="CMTCuzdan.Amount" type="text" value="">
                            </div>
                            <p>
                         <span class="field-validation-valid" data-valmsg-for="CMTCuzdan.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                            </p>
                        </div>
                        <div class="spacer">
                            <a class="btn_prim block ui-link" id="cmtcuzdan_mob_dep" onclick="window.location.href = '/payment/cmt';">PARA YATIRMA</a>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
                        <div class="successmassage">
                        </div>
                        <div class="errormassage">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="mefete" data-url="" id="block_mefete">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Mefete
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Mefete ile Para Yatırma
            <br>Canlı Destek Ekibimizden Mefete Hesap Numarası Bilgilerini İsteyiniz.</p>
        </span>
                <div class="image-box-depwith">
                    <div class="paymentmethods mefete">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">100 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">50 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="contmefete">
                    <form action="/payment/mefete" class="methods" id="mefete" method="post" novalidate="novalidate">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Tutar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="Mefete_Amount" name="Mefete.Amount" type="text" value="">
                            </div>
                            <p>
                              <span class="field-validation-valid" data-valmsg-for="Mefete.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
                            </p>
                        </div>
                        <div class="spacer">
                            <a class="btn_prim block ui-link" id="mefete_mob_dep" onclick="window.location.href = '/payment/mefete';">PARA YATIRMA</a>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
                        <div class="successmassage">
                        </div>
                        <div class="errormassage">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="tosla" data-url="" id="block_tosla">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">Tosla
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Tosla ile Para Yatırma</p>
        </span>
                <div class="image-box-depwith">
                    <div class="paymentmethods tosla">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">200 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">50 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="conttosla">
                    <form action="/payment/tosla" class="methods" id="tosla" method="post" novalidate="novalidate">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Miktar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="Tosla_Amount" name="Tosla.Amount" type="text" value="">
                            </div>
                            <p>
                <span class="field-validation-valid" data-valmsg-for="Tosla.Amount" data-valmsg-replace="true" style="color: #ff0000">
                </span>
                            </p>
                        </div>
                        <div class="spacer">
                            <a class="btn_prim block ui-link" id="tosla_mob_dep" onclick="window.location.href = '/payment/tosla';">PARA YATIRMA</a>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true">
            </span>
                        <div class="successmassage">
                        </div>
                        <div class="errormassage">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content" data-collapsed-icon="arrow-r" data-type="jetonwallet" data-url="" id="block_jetonwallet">
        <h3 class="ui-collapsible-heading">
            <a href="#" class="">JETON
                <span class="ui-collapsible-heading-status">click to collapse contents</span>
            </a>
        </h3>
        <div class="ui-collapsible-content ui-body-b" aria-hidden="false">
            <div class="collapse_content">
                <p class="paym_txt">Jeton Cüzdan ile Para Yatırma</p>
                <div class="image-box-depwith">
                    <div class="paymentmethods jetonwallet">
                    </div>
                </div>
                <div class="paym_cond">İşlem Ücreti
                    <span>Ücretsiz</span>
                </div>
                <div class="paym_cond">İşlem Süresi
                    <span>1-5 dk</span>
                </div>
                <div class="paym_cond">Min.
                    <span automation="min_amount" class="min_amount">20 TRY</span>
                </div>
                <div class="paym_cond">Max.
                    <span automation="max_amount" class="max_amount">100 000 TRY</span>
                </div>
                <div class="paym_cond">
                    <p class="tl_min_max deposit_payment"></p>
                </div>
                <div id="contjetonwallet">
                    <form action="/tr/Account/_jetonwallet" class="methods" id="jetonwallet" method="post" novalidate="novalidate">
                        <div class="row">
                            <span class="required-field">*</span>
                            <label>Tutar</label>
                            <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                                <input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="JetonWallet_Amount" name="JetonWallet.Amount" type="text" value="">
                            </div>
                            <p>
                <span class="field-validation-valid" data-valmsg-for="JetonWallet.Amount" data-valmsg-replace="true" style="color: #ff0000">
                </span>
                            </p>
                        </div>
                        <div class="spacer">
                            <a class="btn_prim block ui-link" id="jetonwallet_mob_dep" onclick="hesapGuncelleme();">PARA YATIRMA</a>
                        </div>
                        <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true">
            </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">


</script>

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
            <a class="yandex_mail ui-link" href="cdn-cgi/l/email-protection.html#5135342225343a113623303f3521302239303334257f323e3c" target="_blank" rel="noopener"></a>
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
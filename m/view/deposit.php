<div class="heading deposit_heading">PARA YATIRMA</div>

<div id="content_paym" class="bgMain depositForms">
  <p class="paym_txt1"></p>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="movenpaypapara" data-url="" id="block_movenpaypapara">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-arrow-r">MOVENPAY PAPARA <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <p class="paym_txt">Movenpay Papara ile Para Yatırma</p>
        <div class="image-box-depwith">
          <div class="paymentmethods movenpaypapara"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">10 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contmovenpaypapara">
          <form action="/tr/Account/_movenpaypapara" class="methods" id="movenpaypapara" method="post" novalidate="novalidate">
            <div class="row">
              <span class="required-field" style="color:#a3a3a3;">*</span>
              <label>Miktar</label>
              <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                <input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="MovenpayPapara_Amount" name="MovenpayPapara.Amount" type="text" value="">
              </div>
              <p>
                <span class="field-validation-valid" data-valmsg-for="MovenpayPapara.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
              </p>
            </div>
            <input id="gatewayPaymentId" name="gatewayPaymentId" type="hidden" value="MovenpayPapara">
            <div class="spacer">
              <a class="btn_prim block ui-link" id="movenpaypapara_mob_dep">PARA YATIRMA</a>
            </div>
            <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
          </form>
          <script type="text/javascript">
            $.validator.unobtrusive.parse($('#movenpaypapara'));
            $('#movenpaypapara').validate();
            $('.inp').keypress(function(e) {
              if (e.keyCode == 13) {
                e.preventDefault();
                e.stopPropagation();
                $('#movenpaypapara_mob_dep').trigger('click');
              }
            });
            $('#movenpaypapara_mob_dep').on('click', function(e) {
              var bankurl = $($.find('[data-type ="movenpaypapara"]')).data('url');
              if ($('#movenpaypapara').valid()) {
                $.ajax({
                  url: "/tr/Account/MovenpayPapara",
                  type: "POST",
                  async: false,
                  data: $('#movenpaypapara').serialize(),
                  datatype: "json",
                  success: function(result) {
                    $("#contmovenpaypapara").html(result).trigger("create");
                    HelpUrlHandling('movenpaypapara', bankurl);
                  }
                });
              }
            });
          </script>
        </div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="vevopayhavale" data-url="" id="block_vevopayhavale">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-arrow-r">VEVOPAY HAVALE <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Vevopay Havale ile Para Yatırma</p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods vevopayhavale"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">50 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">20&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contvevopayhavale">
          <form action="/tr/Account/_vevopayhavale" class="methods" id="vevopayhavale" method="post">
            <div class="row">
              <input class="inp" data-val="true" data-val-number="The field Tutar must be a number." data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="VevoPayHavale_Amount" name="VevoPayHavale.Amount" type="hidden" value="">
            </div>
            <div class="spacer">
              <a class="btn_prim block ui-link" id="vevopayhavale_mob_dep">PARA YATIRMA</a>
            </div>
            <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
          </form>
          <script type="text/javascript">
            $('.inp').keypress(function(e) {
              if (e.keyCode == 13) {
                e.preventDefault();
                e.stopPropagation();
                $('#vevopayhavale_mob_dep').trigger('click');
              }
            });
            $('#vevopayhavale_mob_dep').on('click', function(e) {
              var bankurl = $($.find('[data-type ="vevopayhavale"]')).data('url');
              $.ajax({
                url: "/tr/Account/VevoPayHavale",
                type: "POST",
                async: false,
                data: $('#vevopayhavale').serialize(),
                datatype: "json",
                success: function(result) {
                  $("#contvevopayhavale").html(result).trigger("create");
                  HelpUrlHandling('vevopayhavale', bankurl);
                }
              });
            });
          </script>
        </div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="payfix" data-url="" id="block_payfix">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-btn-icon-left ui-btn-inherit ui-icon-arrow-r">PAYFİX <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Payfix ile Para Yatırma</p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods payfix"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">25 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contpayfix">
          <form action="/tr/Account/_payfix" class="methods" id="payfix" method="post" novalidate="novalidate">
            <div class="row">
              <span class="required-field">*</span>
              <label>Tutar</label>
              <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                <input class="inp" data-val="true" data-val-number="Tutar alanında yalnızca rakam olmalıdır" data-val-regex="Tutar alanında yalnızca rakam olmalıdır" data-val-regex-pattern="(^[0-9]*$)" data-val-required="Lütfen geçerli bir tutar girin" id="PayFix_Amount" name="PayFix.Amount" type="text" value="">
              </div>
              <p>
                <span class="field-validation-valid" data-valmsg-for="PayFix.Amount" data-valmsg-replace="true" style="color: #ff0000"></span>
              </p>
            </div>
            <div class="spacer">
              <a class="btn_prim block ui-link" id="payfix_mob_dep">PARA YATIRMA</a>
            </div>
            <span class="field-validation-valid" data-valmsg-for="Error" data-valmsg-replace="true"></span>
          </form>
          <script type="text/javascript">
            $.validator.unobtrusive.parse($('#payfix'));
            $('#payfix').validate();
            $('.inp').keypress(function(e) {
              if (e.keyCode == 13) {
                e.preventDefault();
                e.stopPropagation();
                $('#payfix_mob_dep').trigger('click');
              }
            });
            $('#payfix_mob_dep').on('click', function(e) {
              var bankurl = $($.find('[data-type ="payfix"]')).data('url');
              if ($('#payfix').valid()) {
                $.ajax({
                  url: "/tr/Account/PayFix",
                  type: "POST",
                  async: false,
                  data: $('#payfix').serialize(),
                  datatype: "json",
                  success: function(result) {
                    $("#contpayfix").html(result).trigger("create");
                    HelpUrlHandling('payfix', bankurl);
                  }
                });
              }
            });
          </script>
        </div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="aspaycreditcard" data-url="" id="block_aspaycreditcard">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">ASPAY KREDİ KARTI <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <p class="paym_txt">Aspay Kredi Kartı ile Para Yatırma</p>
        <div class="image-box-depwith">
          <div class="paymentmethods aspaycreditcard"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">50 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contaspaycreditcard"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="hizlicapapara" data-url="" id="block_hizlicapapara">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">HIZLICA PARALAR <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <p class="paym_txt">Otomatik Papara ,Papara Sanal Kart ,Kredi kartı ve Diğer Cüzdanlar Papara, HayHay, TOSLA, Kassa,CMT,Payfix,IQmoney ve daha bir çok ödeme yöntemi ile otomatik ve hızlı bir şekilde yatırım yapabilirsiniz.</p>
        <div class="image-box-depwith">
          <div class="paymentmethods hizlicapapara"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">10 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="conthizlicapapara"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="transfertoaccount" data-url="" id="block_transfertoaccount">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">BANKA HAVALESİ <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Banka Havalesi ile Para Yatırma <br>
            <br> Lütfen Canlı Destek Ekibimizden Banka Havalesi Hesap Numarası Bilgilerini İsteyiniz.
          </p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods transfertoaccount"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">50 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">100&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="conttransfertoaccount"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="vevopayparazula" data-url="" id="block_vevopayparazula">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">PARAZULA <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Parazula ile Para Yatırma</p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods vevopayparazula"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">10 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">40&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contvevopayparazula"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="papara" data-url="" id="block_papara">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">PAPARA <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Papara ile Para Yatırma <br>
            <br> Lütfen Canlı Destek Ekibimizden Papara Hesap Numarası Bilgilerini İsteyiniz.
          </p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods papara"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">100 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">100&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contpapara"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="instapayscrypto" data-url="" id="block_instapayscrypto">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">SIMPLEPAY CRYPTOBOX <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Simplepay Crypto ile Para Yatırma</p>
        </span>
        <div class="image-box-depwith">
          <img src="https://cdn-payments.apidigi.com/dynamic/InstapaysCrypto.png" class="dynemiclogosizeMob">
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">50 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">35&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="continstapayscrypto"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="hemenodehavale" data-url="" id="block_hemenodehavale">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">HEMENÖDE HAVALE <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Hemenöde Havale İle Para Yatırma</p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods hemenodehavale"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">50 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="conthemenodehavale"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="hemenodevippapara" data-url="" id="block_hemenodevippapara">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">HEMENÖDE VIP PAPARA <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Hemenöde Vip Papara İle Para Yatırma</p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods hemenodevippapara"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">100 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="conthemenodevippapara"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="hemenodemefete" data-url="" id="block_hemenodemefete">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">HEMENÖDE MEFETE <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>HemenÖde Mefete İle Para Yatırma</p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods hemenodemefete"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">50 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="conthemenodemefete"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="hemenodepep" data-url="" id="block_hemenodepep">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">HEMENÖDE PEP <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <p class="paym_txt">HemenÖde Pep İle Para Yatırma</p>
        <div class="image-box-depwith">
          <div class="paymentmethods hemenodepep"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">50 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="conthemenodepep"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="instapaysviphavale" data-url="" id="block_instapaysviphavale">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">SIMPLEPAY VIP HAVALE <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Simplepay VIP Havale&nbsp;ile Para Yatırma</p>
        </span>
        <div class="image-box-depwith">
          <img src="https://cdn-payments.apidigi.com/dynamic/InstapaysVIPHavale.png" class="dynemiclogosizeMob">
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">500 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="continstapaysviphavale"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="instapayscepbank" data-url="" id="block_instapayscepbank">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">SIMPLEPAY CEPBANK <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Simplepay Cep Bank&nbsp;ile Para Yatırma</p>
        </span>
        <div class="image-box-depwith">
          <img src="https://cdn-payments.apidigi.com/dynamic/InstaPaysCepbank.jpg" class="dynemiclogosizeMob">
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">100 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">1&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="continstapayscepbank"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="anindapapara" data-url="" id="block_anindapapara">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">ANINDA PAPARA <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Anında Papara ile Para Yatırma</p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods anindapapara"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">50 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contanindapapara"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="anindahavale" data-url="" id="block_anindahavale">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">ANINDA HAVALE <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Anında Havale ile Para Yatırma</p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods anindahavale"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">50 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contanindahavale"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="anindaqr" data-url="" id="block_anindaqr">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">ANINDA QR <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>ANINDA QR İle Para Yatırma</p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods anindaqr"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">20 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">3&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contanindaqr"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="anindabtc" data-url="" id="block_anindabtc">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">ANINDA BTC <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <p class="paym_txt">AnındaBTC ile Para Yatırma</p>
        <div class="image-box-depwith">
          <div class="paymentmethods anindabtc"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">20 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">100&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contanindabtc"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="odendibilkriptopay" data-url="" id="block_odendibilkriptopay">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">KRİPTOPAY <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <p class="paym_txt">Ödendibil Kriptopay ile Para Yatırma</p>
        <div class="image-box-depwith">
          <div class="paymentmethods odendibilkriptopay"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">50 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">500&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contodendibilkriptopay"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="odendibilqr" data-url="" id="block_odendibilqr">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">ÖDENDİBİL QR <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <p class="paym_txt">Ödendibil QR ile Para Yatırma</p>
        <div class="image-box-depwith">
          <div class="paymentmethods odendibilqr"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">50 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contodendibilqr"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="odendibilcepbank" data-url="" id="block_odendibilcepbank">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">ÖDENDİBİL CEPBANK <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <p class="paym_txt">Ödendibil Cepbank ile Para Yatırma</p>
        <div class="image-box-depwith">
          <div class="paymentmethods odendibilcepbank"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">50 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contodendibilcepbank"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="tosla" data-url="" id="block_tosla">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">TOSLA <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Tosla ile Para Yatırma <br>
            <br> Lütfen Canlı Destek Ekibimizden Tosla Hesap Numarası Bilgilerini İsteyiniz.
          </p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods tosla"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">200 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="conttosla"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="mefete" data-url="" id="block_mefete">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">MEFETE <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>MEFETE ile Para Yatırma <br>
            <br> Lütfen Canlı Destek Ekibimizden Mefete Hesap Numarası Bilgilerini İsteyiniz.
          </p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods mefete"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">100 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contmefete"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="cepbankoffline" data-url="" id="block_cepbankoffline">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">CEPBANK <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Cepbank ile Para Yatırma</p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods cepbankoffline"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">20 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">1&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contcepbankoffline"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="paycell" data-url="" id="block_paycell">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">PAYCELL <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>Paycell ile Para Yatırma <br>
            <br> Lütfen Canlı Destek Ekibimizden Paycell Hesap Numarası Bilgilerini İsteyiniz.
          </p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods paycell"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">50 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">20&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contpaycell"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="pepoffline" data-url="" id="block_pepoffline">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">PEP <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>PEP ile Para Yatırma <br>
            <br> Lütfen Canlı Destek Ekibimizden Pep Hesap Numarası Bilgilerini İsteyiniz.
          </p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods pepoffline"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">100 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contpepoffline"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="jetonwallet" data-url="" id="block_jetonwallet">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">JETON WALLET <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <p class="paym_txt">Jeton Cüzdan ile Para Yatırma</p>
        <div class="image-box-depwith">
          <div class="paymentmethods jetonwallet"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">50 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">30&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contjetonwallet"></div>
      </div>
    </div>
  </div>
  <div data-role="collapsible" data-content-theme="b" class="collapse_btn paymentTypes ui-collapsible ui-collapsible-inset ui-corner-all ui-collapsible-themed-content ui-collapsible-collapsed" data-collapsed-icon="arrow-r" data-type="cmtcuzdan" data-url="" id="block_cmtcuzdan">
    <h3 class="ui-collapsible-heading ui-collapsible-heading-collapsed">
      <a href="#" class="ui-collapsible-heading-toggle ui-btn ui-icon-arrow-r ui-btn-icon-left ui-btn-inherit">CMT CÜZDAN <span class="ui-collapsible-heading-status"> click to expand contents</span>
      </a>
    </h3>
    <div class="ui-collapsible-content ui-body-b ui-collapsible-content-collapsed" aria-hidden="true">
      <div class="collapse_content">
        <span class="paym_txt dinamic_Desc">
          <p>CMT CÜZDAN ile Para Yatırma <br>
            <br> Lütfen Canlı Destek Ekibimizden CMT Cüzdan Hesap Numarası Bilgilerini İsteyiniz.
          </p>
        </span>
        <div class="image-box-depwith">
          <div class="paymentmethods cmtcuzdan"></div>
        </div>
        <div class="paym_cond"> İşlem Ücreti <span>Ücretsiz</span>
        </div>
        <div class="paym_cond"> İşlem Süresi <span>1-5 dk</span>
        </div>
        <div class="paym_cond"> Min. <span automation="min_amount" class="min_amount">20 TRY</span>
        </div>
        <div class="paym_cond"> Max. <span automation="max_amount" class="max_amount">50&nbsp;000 TRY</span>
        </div>
        <div class="paym_cond">
          <p class="tl_min_max deposit_payment"></p>
        </div>
        <div id="contcmtcuzdan"></div>
      </div>
    </div>
  </div>
</div>
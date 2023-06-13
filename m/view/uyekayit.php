<?php include 'modules/header.php';?>

<link rel="css/Register.css" type="text/css" xmlns="http://www.w3.org/1999/html">
<script type="text/javascript">
    $(document).ready(function () {
        var casinoLinksWidth = 10;
        $('.casino_links_tabs').children().each(function () {
            casinoLinksWidth += $(this).outerWidth();
        });
        $('.casino_links_tabs').width(casinoLinksWidth);
    });

    /*if the user does simple sign in(with clicking login button), clear gameUrl's value */
    $('#t_lgn_btn').on('click',
        function () {
            $('#gameUrl').val('');
        });

</script>
<style>
    * {
        box-sizing: border-box;
    }
    .reg_progress_dots {
        visibility: -webkit-box;
        visibility: -webkit-flex;
        visibility: -ms-flexbox;
        visibility: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 0 0 16px;
    }
    .reg_content {
        padding: 24px 25px;
    }
    .all_buttons_styles {
        min-height: 35px;
        visibility: flex;
        align-items: center;
        justify-content: center;
        line-height: 1;
        width: 100% !important;
        background-color: #fff;
        text-transform: uppercase;
        border-radius: 2px;
        margin: 4px 0;
        cursor: pointer;
        font-size: 12px;
    }

    .btn_prim {
        color: #fff !important;
        border-radius: 2px;
        height: 30px;
        width: 100% !important;

        line-height: 30px !important;
        text-align: center !important;
    }
    .btn_prim, .reg_content .back_box .tl_btn {
        background-color: #D0B752 !important;
        color: #0F1300 !important;
        font-size: 14px;
        width: 100% !important;
        text-transform: uppercase;
        font-weight: 600;
    }
    #registerForm {
        background-color: #131703;
    }
    .reg_content .reg_input, .reg_content .custon_select__front_el {
        background-color: #2B350B;
        color: #fff;
    }

    input, .reg_input, .custon_select__front_el, .drop-down, .drop-down-small, #content_paym .ui-select span, #content_paym .ui-select select, .reg__checkboxes_row {
        border: hidden;
        width: 100%;
        min-height: 34px;
        padding: 0 10px;
        border-radius: 2px;
        font-size: 14px;
        visibility: visible;
        line-height: 34px;
    }

    body, select, textarea, button, .ui-btn {
        font-size: 1em;
        line-height: 1.3;
        font-family: sans-serif /*{global-font-family}*/;
    }
    .reg_content .next_box, .reg_content .back_box {
        width: 100%;
    }
    .register_next_step {
        margin-top: 30px;
        flex-direction: column;
    }
    .D_check .imitator {
        position: absolute;
        top: 5px;
        left: 10px;
        height: 20px;
        width: 20px;
        line-height: 20px;
        font-family: ProductIconsFont;
        font-size: 22px;
        cursor: pointer;
    }

    input, .reg_input, .custon_select__front_el, .drop-down, .drop-down-small, #content_paym .ui-select span, #content_paym .ui-select select, .reg__checkboxes_row {
        border: hidden;
        width: 100%;
        min-height: 34px;
        padding: 0 10px;
        border-radius: 2px;
        font-size: 14px;
        visibility: visible;
        line-height: 34px;
    }
    .reg_steps_info {
        margin-bottom: 30px;
    }
    .reg_progress_dots span:before {
        background: #d0b752;
        content: "";
        position: absolute;
        width: calc(45vw - 45px);
        height: 2px;
        top: 9px;
        left: 22px;
    }

    .ui-btn.ui-checkbox-off:after, .ui-btn.ui-checkbox-on:after, .ui-btn.ui-radio-off:after, .ui-btn.ui-radio-on:after {
        visibility: visible;
        width: 18px;
        height: 18px;
        margin: -9px 2px 0 2px;
    }

    .ui-radio .ui-btn.ui-radio-on:after {
        background-image: hidden;
        background-color: #fff;
        width: 8px;
        height: 8px;
        border-width: 5px;
        border-style: solid;
    }
</style>

<div class="heading registration_heading" style="margin-top: 120px;">ÜYE KAYDI</div>

<form onsubmit="signUp()" id="register_form">
    <div class="register_left_banner">
        <div id="js_popup_banner_cont_883" class="swiper dynamicBanners banners_popup empty_banner swiper-initialized swiper-horizontal swiper-ios swiper-backface-hidden">
            <div class="banners_popup_slider swiper-wrapper" id="swiper-wrapper-b380abe3f4018eed" aria-live="off" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true">
      </span>
        </div>

    </div>
    <div id="content1" class="reg_content">
        <div id="First" class="D_reg_step ">
            <div class="reg_steps_info">
                <div class="reg_progress_dots">
                <span class="active"></span>
                    <span></span>
                    <span></span>

                </div>
                <div class="register_step_number">
                    <span>Adım 1</span>
                    <span></span>
                    <span></span>

                </div>
            </div>
            <div class="reg_prof__element_row">
        <span class="reg__row_title">
          <label>E-posta*</label>
        </span>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                    <input class="reg_input" data-val="true" id="Email" name="email" placeholder="Enter your Email" required="required" type="email">
                </div>
                <div class="info-visible hgt2 regErMes f">
                    <i></i>
                    <span class="field-validation-valid" data-valmsg-replace="true">
          </span>
                </div>
            </div>
        </div>
        <div id="Third" class="D_reg_step hidden">
            <div class="reg_steps_info">
                <div class="reg_progress_dots">
          <span class="done">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewbox="0 0 24 24" fill="#fff">
              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
              </path>
            </svg>
          </span>

            <span class="active">
          </span>
                    <span>
          </span>
                </div>
                <div class="register_step_number">
                    <span>Adım 1</span>
                    <span>Adım 2</span>
                    <span>Adım 3</span>

                </div>
            </div>
            <div class="reg_prof__element_row">
        <span class="reg__row_title">
          <label>Adınız*</label>
        </span>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                    <input class="reg_input" id="FirstName" name="adi" placeholder="Adınızı giriniz" required="required" type="text">
                </div>
                <div class="info-visible hgt2 regErMes f">
                    <i></i>
                    <span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true">
          </span>
                </div>
            </div>
            <div class="reg_prof__element_row">
        <span class="reg__row_title">
          <label>Soyadınız*</label>
        </span>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                    <input class="reg_input" data-val="true" id="LastName" name="soyadi" placeholder="Soyadınızı giriniz" required="required" type="text">
                </div>
                <div class="info-visible hgt2 regErMes f">
                    <i></i>
                    <span class="field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true">
          </span>
                </div>
            </div>
            <div class="reg_prof__element_row">
                <span class="reg__row_title">
                <label>T.C Kimlik No/Kimlik No*</label>
                    </span>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                    <input class="reg_input" maxlength="11" minlength="11" oninput="this.value=this.value.replace(/[^0-9]/g,'');" id="PassportNumber" name="passport" placeholder="Kimlik numaranızı giriniz" required="required" type="text">
                </div>
                <div class="info-visible hgt2 regErMes f">
                    <i></i>
                    <span class="field-validation-valid" data-valmsg-for="PassportNumber" data-valmsg-replace="true">
                      </span>
                </div>
            </div>
            <div class="reg_prof__element_row">
        <span class="reg__row_title">
          <label>Kullanıcı adı*</label>
        </span>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                    <input class="reg_input" id="UserName" name="field_first" placeholder="Kullanıcı adınızı giriniz" required="required" type="text" value="" aria-required="true">
                </div>
                <div class="info-visible hgt2 regErMes f">
                    <i></i>
                    <span class="field-validation-valid" data-valmsg-for="UserName" data-valmsg-replace="true">
          </span>
                </div>
            </div>
            <div class="reg_prof__element_row">
        <span class="reg__row_title">
          <label>Doğum tarihi*</label>
        </span>
                <div class="flex reg__dateofbirth_row">
                    <div class="register_date_select" id="mobYear">
                        <select class="custon_select__front_el dropdSelect js_dob" id="DateOfBirthYear" name="yil">
                            <option selected="">Yıl</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                            <option value="1966">1966</option>
                            <option value="1965">1965</option>
                            <option value="1964">1964</option>
                            <option value="1963">1963</option>
                            <option value="1962">1962</option>
                            <option value="1961">1961</option>
                            <option value="1960">1960</option>
                            <option value="1959">1959</option>
                            <option value="1958">1958</option>
                            <option value="1957">1957</option>
                            <option value="1956">1956</option>
                            <option value="1955">1955</option>
                            <option value="1954">1954</option>
                            <option value="1953">1953</option>
                            <option value="1952">1952</option>
                            <option value="1951">1951</option>
                            <option value="1950">1950</option>
                            <option value="1949">1949</option>
                            <option value="1948">1948</option>
                            <option value="1947">1947</option>
                            <option value="1946">1946</option>
                            <option value="1945">1945</option>
                            <option value="1944">1944</option>
                            <option value="1943">1943</option>
                            <option value="1942">1942</option>
                            <option value="1941">1941</option>
                            <option value="1940">1940</option>
                            <option value="1939">1939</option>
                            <option value="1938">1938</option>
                            <option value="1937">1937</option>
                            <option value="1936">1936</option>
                            <option value="1935">1935</option>
                            <option value="1934">1934</option>
                            <option value="1933">1933</option>
                            <option value="1932">1932</option>
                            <option value="1931">1931</option>
                            <option value="1930">1930</option>
                            <option value="1929">1929</option>
                            <option value="1928">1928</option>
                            <option value="1927">1927</option>
                            <option value="1926">1926</option>
                            <option value="1925">1925</option>
                            <option value="1924">1924</option>
                            <option value="1923">1923</option>
                            <option value="1922">1922</option>
                            <option value="1921">1921</option>
                            <option value="1920">1920</option>
                            <option value="1919">1919</option>
                            <option value="1918">1918</option>
                            <option value="1917">1917</option>
                            <option value="1916">1916</option>
                            <option value="1915">1915</option>
                            <option value="1914">1914</option>
                            <option value="1913">1913</option>
                            <option value="1912">1912</option>
                            <option value="1911">1911</option>
                            <option value="1910">1910</option>
                            <option value="1909">1909</option>
                            <option value="1908">1908</option>
                            <option value="1907">1907</option>
                            <option value="1906">1906</option>
                            <option value="1905">1905</option>
                            <option value="1904">1904</option>
                            <option value="1903">1903</option>
                            <option value="1902">1902</option>
                            <option value="1901">1901</option>
                        </select>
                    </div>
                    <div class="register_date_select" id="mobMonth">
                        <select class="custon_select__front_el dropdSelect js_dob" id="DateOfBirthMonth" name="ay">
                            <option selected="">Ay</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="register_date_select" id="mobDay">
                        <select class="custon_select__front_el dropdSelect js_dob" id="DateOfBirthDay" name="gun">
                            <option selected="">Gün</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                    </div>
                </div>
                <div class="info-visible hgt2 field-validation-error regErMes f">
          <span class="" data-valmsg-for="DateOfBirth" data-valmsg-replace="true" id="drpDwnMsg">
          </span>
                </div>
            </div>
            <div class="reg_prof__element_row">
        <span class="reg__row_title">
          <label>Cinsiyet*</label>
        </span>
                <div class="reg__gender_row flex" id="genderMob">
                    <div class="col50" id="maleMob">
                        <div class="ui-radio">
                            <label class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-radio-off">Erkek</label>
                            <input automation="male_radio" data-val="true" data-val-required="Lütfen cinsiyetinizi seçiniz." id="Gender" name="gender" type="radio" value="M">
                        </div>
                    </div>
                    <div class="col50" id="femaleMob">
                        <div class="ui-radio">
                            <label class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-radio-off">Kadın</label>
                            <input automation="female_radio" id="Gender" name="gender" type="radio" value="F">
                        </div>
                    </div>
                </div>
            </div>
            <div class="reg_prof__element_row">
        <span class="reg__row_title">
          <label>Ülke*</label>
        </span>
                <select class="custon_select__front_el" id="CountryCode" name="ulke" onchange="loadCities(this)" required="required">
                    <option value="">Ülke Seçiniz</option>
                    <option value="1091">Afganistan</option>
                    <option value="4">Almanya</option>
                    <option value="55">Amerika Birleşik Devletleri</option>
                    <option value="59">Angola</option>
                    <option value="522">Anguilla</option>
                    <option value="524">Antigua ve Barbuda</option>
                    <option value="32">Arjantin</option>
                    <option value="53">Arnavutluk</option>
                    <option value="1377">Artsakh (Nagorno-Karabakh)</option>
                    <option value="326">Aruba</option>
                    <option value="46">Avustralya</option>
                    <option value="44">Avusturya</option>
                    <option value="328">Bahamalar</option>
                    <option value="63">Bahreyn</option>
                    <option value="61">Bangladeş</option>
                    <option value="256">Barbados</option>
                    <option value="65">Belarus</option>
                    <option value="67">Belçika</option>
                    <option value="154">Birleşik Arap Emirlikleri</option>
                    <option value="344">Birleşik Krallık</option>
                    <option value="75">Bosna Hersek</option>
                    <option value="77">Botsvana</option>
                    <option value="79">Brezilya</option>
                    <option value="69">Bulgaristan</option>
                    <option value="160">Çek Cumhuriyeti</option>
                    <option value="45">Cezayir</option>
                    <option value="340">Cibuti</option>
                    <option value="122">Çin</option>
                    <option value="91">Danimarka</option>
                    <option value="103">Endonezya</option>
                    <option value="503">Eritre</option>
                    <option value="257">Ermenistan</option>
                    <option value="162">Estonya</option>
                    <option value="216">Fiji</option>
                    <option value="3201">Filipinler</option>
                    <option value="23">Finlandiya</option>
                    <option value="164">Fransa</option>
                    <option value="499">Gabon</option>
                    <option value="172">Galler</option>
                    <option value="475">Gana</option>
                    <option value="206">Güney Afrika</option>
                    <option value="209">Güney Kore</option>
                    <option value="3196">Güney Osetya</option>
                    <option value="244">Güney Sudan</option>
                    <option value="89">Gürcistan</option>
                    <option value="101">Hindistan</option>
                    <option value="158">Hırvatistan</option>
                    <option value="148">Hollanda</option>
                    <option value="468">Hong Kong</option>
                    <option value="57">İngiltere</option>
                    <option value="224">Irak / Kürdistan</option>
                    <option value="222">İran</option>
                    <option value="107">İrlanda</option>
                    <option value="198">İskoçya</option>
                    <option value="111">ispanya</option>
                    <option value="99">İsrail</option>
                    <option value="212">İsveç</option>
                    <option value="214">İsviçre</option>
                    <option value="113">İtalya</option>
                    <option value="109">İzlanda</option>
                    <option value="226">Jamaika</option>
                    <option value="166">Japonya</option>
                    <option value="254">Kamerun</option>
                    <option value="36">Kanada</option>
                    <option value="246">Katar</option>
                    <option value="116">Kazakistan</option>
                    <option value="458">Kenya</option>
                    <option value="118">Kıbrıs</option>
                    <option value="120">Kırgızistan</option>
                    <option value="124">Kolombiya</option>
                    <option value="218">Kosta Rika</option>
                    <option value="126">Küba</option>
                    <option value="170">Kuzey Irlanda</option>
                    <option value="3181">Kuzey Kore</option>
                    <option value="128">Letonya</option>
                    <option value="132">Litvanya</option>
                    <option value="130">Lübnan</option>
                    <option value="134">Lüksemburg</option>
                    <option value="81">Macaristan</option>
                    <option value="136">Makedonya</option>
                    <option value="140">Maldivler</option>
                    <option value="138">Malezya</option>
                    <option value="142">Malta</option>
                    <option value="230">Meksika</option>
                    <option value="93">Mısır</option>
                    <option value="452">Moldova</option>
                    <option value="775">Morocco</option>
                    <option value="146">Mozambik</option>
                    <option value="168">Nepal</option>
                    <option value="252">Nijerya</option>
                    <option value="150">Nikaragua</option>
                    <option value="152">Norveç</option>
                    <option value="174">Özbekistan</option>
                    <option value="250">Pakistan</option>
                    <option value="184">Paraguay</option>
                    <option value="186">Peru</option>
                    <option value="188">Polonya</option>
                    <option value="190">Portekiz</option>
                    <option value="248">Porto Riko</option>
                    <option value="207">Pretoria</option>
                    <option value="194">Romanya</option>
                    <option value="384">Ruanda</option>
                    <option value="1495">Rusya Federasyonu</option>
                    <option value="220">Şili</option>
                    <option value="200">Sırbistan</option>
                    <option value="202">Slovakya</option>
                    <option value="204">Slovenya</option>
                    <option value="234">Suriye</option>
                    <option value="196">Suudi Arabistan</option>
                    <option value="242">Tanzanya</option>
                    <option value="238">Tayland</option>
                    <option value="240">Tayvan</option>
                    <option value="180">Tunus</option>
                    <option value="182" selected="">Türkiye</option>
                    <option value="236">Türkmenistan</option>
                    <option value="232">Uganda</option>
                    <option value="178">Ukrayna</option>
                    <option value="156">Umman</option>
                    <option value="105">Ürdün</option>
                    <option value="176">Uruguay</option>
                    <option value="83">Venezuela</option>
                    <option value="85">Vietnam</option>
                    <option value="97">Yemen</option>
                    <option value="87">Yunanistan</option>
                    <option value="95">Zambiya</option>
                    <option value="41">Zimbabve</option>
                </select>
                <div class="info-visible hgt2 regErMes f">
                    <i></i>
                    <span class="field-validation-valid" data-valmsg-for="CountryCode" data-valmsg-replace="true">
          </span>
                </div>
            </div>
            <div class="reg_prof__element_row">
        <span class="reg__row_title">
          <label>Şehir*</label>
        </span>
                <select class="custon_select__front_el" data-role="hidden" data-val="true" data-val-number="The field Şehir must be a number." data-val-required="Şehir alanı gereklidir." id="City" name="bolge" required="required" aria-required="true">
                    <option value="">-Şehir Seçiniz-</option>
                    <option value="1001">Adana</option>
                    <option value="1002">Adıyaman</option>
                    <option value="1004">Afyonkarahisar</option>
                    <option value="1005">Ağrı</option>
                    <option value="1069">Aksaray</option>
                    <option value="1006">Amasya</option>
                    <option value="183">Ankara</option>
                    <option value="1010">Antalya</option>
                    <option value="1076">Ardahan</option>
                    <option value="1011">Artvin</option>
                    <option value="1008">Aydın</option>
                    <option value="1009">Balıkesir</option>
                    <option value="1075">Bartın</option>
                    <option value="1073">Batman</option>
                    <option value="1070">Bayburt</option>
                    <option value="1012">Bilecik</option>
                    <option value="1013">Bingöl</option>
                    <option value="1014">Bitlis</option>
                    <option value="1015">Bolu</option>
                    <option value="1016">Burdur</option>
                    <option value="1017">Bursa</option>
                    <option value="1018">Çanakkale</option>
                    <option value="1019">Çankırı</option>
                    <option value="1020">Çorum</option>
                    <option value="1021">Denizli</option>
                    <option value="1022">Diyarbakır</option>
                    <option value="1082">Düzce</option>
                    <option value="1023">Edirne</option>
                    <option value="1024">Elazığ</option>
                    <option value="1025">Erzincan</option>
                    <option value="1026">Erzurum</option>
                    <option value="1027">Eskişehir</option>
                    <option value="1028">Gaziantep</option>
                    <option value="1029">Giresun</option>
                    <option value="1030">Gümüşhane</option>
                    <option value="1031">Hakkâri</option>
                    <option value="1032">Hatay</option>
                    <option value="1077">Iğdır</option>
                    <option value="1033">Isparta</option>
                    <option value="1035">İstanbul</option>
                    <option value="1036">İzmir</option>
                    <option value="1047">Kahramanmaraş</option>
                    <option value="1079">Karabük</option>
                    <option value="1071">Karaman</option>
                    <option value="1037">Kars</option>
                    <option value="1038">Kastamonu</option>
                    <option value="1039">Kayseri</option>
                    <option value="1072">Kırıkkale</option>
                    <option value="1040">Kırklareli</option>
                    <option value="1041">Kırşehir</option>
                    <option value="1080">Kilis</option>
                    <option value="1042">Kocaeli</option>
                    <option value="1043">Konya</option>
                    <option value="1044">Kütahya</option>
                    <option value="1045">Malatya</option>
                    <option value="1046">Manisa</option>
                    <option value="1048">Mardin</option>
                    <option value="1034">Mersin</option>
                    <option value="1049">Muğla</option>
                    <option value="1050">Muş</option>
                    <option value="1051">Nevşehir</option>
                    <option value="1052">Niğde</option>
                    <option value="1053">Ordu</option>
                    <option value="1081">Osmaniye</option>
                    <option value="1054">Rize</option>
                    <option value="1055">Sakarya</option>
                    <option value="1056">Samsun</option>
                    <option value="1057">Siirt</option>
                    <option value="1058">Sinop</option>
                    <option value="1059">Sivas</option>
                    <option value="1064">Şanlıurfa</option>
                    <option value="1074">Şırnak</option>
                    <option value="1060">Tekirdağ</option>
                    <option value="1061">Tokat</option>
                    <option value="1062">Trabzon</option>
                    <option value="1063">Tunceli</option>
                    <option value="1065">Uşak</option>
                    <option value="1066">Van</option>
                    <option value="1078">Yalova</option>
                    <option value="1067">Yozgat</option>
                    <option value="1068">Zonguldak</option>
                </select>
                <div class="info-visible hgt2 regErMes f">
                    <i></i>
                    <span class="field-validation-valid" data-valmsg-for="City" data-valmsg-replace="true">
          </span>
                </div>
            </div>
            <div class="reg_prof__element_row">
        <span class="reg__row_title">
          <label>Adres*</label>
        </span>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                    <input automation="address_input" class="reg_input" data-val="true" data-val-length="Adres alanı minimum 3 ,maksimum 250 karakter içermelidir ‘" data-val-length-max="250" data-val-length-min="3" data-val-required="Adres alanı gereklidir." id="Address" name="adres" placeholder="Adresinizi Girin" type="text" value="">
                </div>
                <div class="info-visible hgt2 regErMes f">
                    <i></i>
                    <span class="field-validation-valid" data-valmsg-for="Address" data-valmsg-replace="true">
          </span>
                </div>
            </div>
            <div class="reg_prof__element_row">
        <span class="reg__row_title">
          <label>Cep telefonu*</label>
        </span>
                <div class="flex alCen">
                    <div class="phone_number_reg">
                        <select class="reg_input dropdSelect" data-role="hidden" id="countryNumber" name="NumberCode">
                            <option value="182" selected="">+90</option>
                            <option value="1091">+93</option>
                            <option value="4">+49</option>
                            <option value="55">+1</option>
                            <option value="59">+244</option>
                            <option value="522">+1264</option>
                            <option value="524">+1268</option>
                            <option value="32">+54</option>
                            <option value="53">+355</option>
                            <option value="1377">+374</option>
                            <option value="326">+297</option>
                            <option value="46">+61</option>
                            <option value="44">+43</option>
                            <option value="328">+1242</option>
                            <option value="63">+973</option>
                            <option value="61">+880</option>
                            <option value="256">+1246</option>
                            <option value="65">+375</option>
                            <option value="67">+32</option>
                            <option value="154">+971</option>
                            <option value="344">+44</option>
                            <option value="75">+387</option>
                            <option value="77">+267</option>
                            <option value="79">+55</option>
                            <option value="69">+359</option>
                            <option value="160">+420</option>
                            <option value="45">+213</option>
                            <option value="340">+253</option>
                            <option value="122">+86</option>
                            <option value="91">+45</option>
                            <option value="103">+62</option>
                            <option value="503">+291</option>
                            <option value="257">+374</option>
                            <option value="162">+372</option>
                            <option value="216">+679</option>
                            <option value="3201">+63</option>
                            <option value="23">+358</option>
                            <option value="164">+33</option>
                            <option value="499">+241</option>
                            <option value="172">+44</option>
                            <option value="475">+233</option>
                            <option value="206">+27</option>
                            <option value="209">+82</option>
                            <option value="3196">+7</option>
                            <option value="244">+211</option>
                            <option value="89">+995</option>
                            <option value="101">+91</option>
                            <option value="158">+385</option>
                            <option value="148">+31</option>
                            <option value="468">+852</option>
                            <option value="57">+44</option>
                            <option value="224">+964</option>
                            <option value="222">+98</option>
                            <option value="107">+353</option>
                            <option value="198">+44</option>
                            <option value="111">+34</option>
                            <option value="99">+972</option>
                            <option value="212">+46</option>
                            <option value="214">+41</option>
                            <option value="113">+39</option>
                            <option value="109">+354</option>
                            <option value="226">+1876</option>
                            <option value="166">+81</option>
                            <option value="254">+237</option>
                            <option value="36">+1</option>
                            <option value="246">+974</option>
                            <option value="116">+7</option>
                            <option value="458">+254</option>
                            <option value="118">+357</option>
                            <option value="120">+996</option>
                            <option value="124">+57</option>
                            <option value="218">+506</option>
                            <option value="126">+53</option>
                            <option value="170">+44</option>
                            <option value="3181">+850</option>
                            <option value="128">+371</option>
                            <option value="132">+370</option>
                            <option value="130">+961</option>
                            <option value="134">+352</option>
                            <option value="81">+36</option>
                            <option value="136">+389</option>
                            <option value="140">+960</option>
                            <option value="138">+60</option>
                            <option value="142">+356</option>
                            <option value="230">+52</option>
                            <option value="93">+20</option>
                            <option value="452">+373</option>
                            <option value="775">+212</option>
                            <option value="146">+258</option>
                            <option value="168">+977</option>
                            <option value="252">+234</option>
                            <option value="150">+505</option>
                            <option value="152">+47</option>
                            <option value="174">+998</option>
                            <option value="250">+92</option>
                            <option value="184">+595</option>
                            <option value="186">+51</option>
                            <option value="188">+48</option>
                            <option value="190">+351</option>
                            <option value="248">+1787</option>
                            <option value="207">+</option>
                            <option value="194">+40</option>
                            <option value="384">+250</option>
                            <option value="1495">+7</option>
                            <option value="220">+56</option>
                            <option value="200">+381</option>
                            <option value="202">+421</option>
                            <option value="204">+386</option>
                            <option value="234">+963</option>
                            <option value="196">+966</option>
                            <option value="242">+255</option>
                            <option value="238">+66</option>
                            <option value="240">+886</option>
                            <option value="180">+216</option>
                            <option value="236">+993</option>
                            <option value="232">+256</option>
                            <option value="178">+380</option>
                            <option value="156">+968</option>
                            <option value="105">+962</option>
                            <option value="176">+598</option>
                            <option value="83">+58</option>
                            <option value="85">+84</option>
                            <option value="97">+967</option>
                            <option value="87">+30</option>
                            <option value="95">+260</option>
                            <option value="41">+263</option>
                        </select>
                    </div>
                    <div class="phone_number_inp_reg">
                        <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                            <input class="reg_input" id="Mobile" name="phone" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="11" minlength="10" placeholder="Cep telefon numaranızı giriniz" required="required" type="text">
                        </div>
                    </div>
                </div>
                <div class="info-visible hgt2 regErMes f">
                    <i></i>
                    <span class="field-validation-valid" data-valmsg-for="Mobile" data-valmsg-replace="true">
          </span>
                </div>
            </div>
        </div>
        <div id="Fourth" class="D_reg_step hidden">
            <div class="reg_steps_info">
                <div class="reg_progress_dots">
          <span class="done">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewbox="0 0 24 24" fill="#fff">
              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
              </path>
            </svg>
          </span>
                    <span class="done">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewbox="0 0 24 24" fill="#fff">
              <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z">
              </path>
            </svg>
          </span>
                    <span class="active">
          </span>
                </div>
                <div class="register_step_number">
                    <span>Adım 1</span>
                    <span>Adım 2</span>
                    <span>Adım 3</span>

                </div>
            </div>

            <div class="reg_prof__element_row">
        <span class="reg__row_title">
          <label>Para Birimi*</label>
        </span>
                <div class="ui-select">
                    <div id="CurrencyCode-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow">
                        <span class="custon_select__front_el">TRY</span>
                        <select automation="currencycode_select" class="custon_select__front_el" data-val="true" data-val-required="Lütfen para birimini seçiniz." id="CurrencyCode" name="CurrencyCode">
                            <option selected="" value="">Para birimi Seçiniz</option>
                            <option value="TRY">TRY</option>
                        </select>
                    </div>
                </div>
                <div class="info-visible hgt2 regErMes f">
                    <i></i>
                    <span class="field-validation-valid" data-valmsg-for="CurrencyCode" data-valmsg-replace="true">
          </span>
                </div>
            </div>
            <div class="reg_prof__element_row">
        <span class="reg__row_title">
          <label>Referans Kodu</label>
        </span>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                    <input class="reg_input" placeholder="Referans Kodunuzu Giriniz" type="text" value="">
                </div>
                <div class="info-visible hgt2 regErMes f">
                    <i></i>
                    <span class="field-validation-valid" data-valmsg-for="ReferralId" data-valmsg-replace="true">
          </span>
                </div>
            </div>
            <div class="reg_prof__element_row">
        <span class="reg__row_title">
          <label>Şifre*</label>
        </span>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                    <input class="reg_input" id="Password" name="field_second" placeholder="Şifrenizi giriniz" required="required" type="password" aria-required="true">
                </div>
                <div class="info-visible hgt2 regErMes f">
                    <i></i>
                    <span class="field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true">
          </span>
                </div>
            </div>
            <div class="reg_prof__element_row">
        <span class="reg__row_title">
          <label>Şifreyi Tekrarla*</label>
        </span>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset">
                    <input class="reg_input" id="PasswordValidation" name="PasswordValidation" placeholder="Şifrenizi doğrulayın" required="required" type="password" aria-required="true">
                </div>
                <div class="info-visible hgt2 regErMes f">
                    <i></i>
                    <span class="field-validation-valid" data-valmsg-for="PasswordValidation" data-valmsg-replace="true">
          </span>
                </div>
            </div>

            <div class="reg_prof__element_row reg__checkboxes">
                <label class="D_check reg__checkboxes_row">
                    <input data-role="hidden" type="checkbox" name="Terms" id="Terms" value="false">
                    <span class="imitator">
          </span>
            <span class="checkbox_info text_right" style="margin-top:4px; ">18 yaşında olduğumu onaylıyorum ,
            <a href="#">Genel Hüküm ve Koşulları kabul ediyorum.</a>
          </span>
                    <span class="tl_input_popup_required">*</span>
                </label>
                <div class="info-visible hgt2 regErMes f">
                    <i></i>
                    <span class="field-validation-valid" data-valmsg-for="Terms" data-valmsg-replace="true" id="termsError">
          </span>
                </div>
            </div>
        </div>
        <input type="hidden" id="secrec" name="recSec" class="textbox">
        <div class="D_reg_footer register_next_step flex">
            <div class="back_box hidden" id="js_back_btn">
                <a class="all_buttons_styles tl_btn " onclick="geribas()">Geri</a>
            </div>
            <div class="next_box" style="width: 100% !important;">
                <button type="button" data-role="hidden" onclick="ileribas()" id="devamKaybol" class="all_buttons_styles btn_prim">Devam</button>
                <button type="submit" data-role="hidden" id="register" style="visibility: hidden;" class="all_buttons_styles btn_prim">Kayıt Ol</button>
            </div>
        </div>
    </div>
</form>
<script>
    var js_back_btn=document.getElementById('js_back_btn');
    var First=document.getElementById("First");
    var Third=document.getElementById("Third");
    var Fourth=document.getElementById("Fourth");
    var devamKaybol = document.getElementById('devamKaybol');
    var registerAktif = document.getElementById('register');
    var emailInput = document.getElementById("Email");


    function ileribas(){
        if(!First.classList.contains('hidden')){
            if(emailInput.value === ""){
                Swal.fire({
                    title: 'Hata!',
                    text: 'Mail Adresinizi Doldurun.',
                    icon: 'warning',
                    confirmButtonText: 'Anladım',
                    background: '#384800',
                    color: '#fff',
                    confirmButtonColor: '#D0B752',
                    iconColor: '#D0B752',

                });
            }else{
                First.style.visibility="hidden";
                First.classList.add('hidden');
                Third.classList.remove('hidden');
                Third.style.visibility="visible";
                js_back_btn.style.visibility="visible";
                js_back_btn.classList.remove('hidden');
                devamKaybol.style.visibility = "visible";
                registerAktif.style.visibility = "hidden";
            }

        }else if(!Third.classList.contains('hidden')){

                const firstName = document.getElementById("FirstName").value.trim();
                const lastName = document.getElementById("LastName").value.trim();
                const userName = document.getElementById("UserName").value.trim();
                const mobile = document.getElementById("Mobile").value.trim();
                const DateOfBirthYear = document.getElementById("DateOfBirthYear").value.trim();
                const DateOfBirthMonth = document.getElementById("DateOfBirthMonth").value.trim();
                const DateOfBirthDay = document.getElementById("DateOfBirthDay").value.trim();
                const genderMob = document.getElementById("genderMob").value;
                const City = document.getElementById("City").value.trim();
                const PassportNumber = document.getElementById("PassportNumber").value.trim();

            if (firstName !== "" && lastName !== "" && userName !== "" && mobile !== "" && DateOfBirthYear !== "" && DateOfBirthMonth !== "" && DateOfBirthDay !== "" && genderMob !== "" && City !== "" && PassportNumber !== "") {
                Third.style.visibility="hidden";
                Third.classList.add('hidden');
                Fourth.classList.remove('hidden');
                Fourth.style.visibility="visible";
                devamKaybol.style.visibility = "hidden";
                registerAktif.style.visibility = "visible";
            } else {
                let emptyField = "";
                if (firstName === "") {
                    emptyField = "İsim";
                } else if (lastName === "") {
                    emptyField = "Soyisim";
                } else if (PassportNumber === "") {
                    emptyField = "T.C Kimlik";
                } else if (userName === "") {
                    emptyField = "Kullanıcı Adı";
                }  else if (DateOfBirthYear === "") {
                    emptyField = "Doğum Yılı";
                } else if (DateOfBirthMonth === "") {
                    emptyField = "Doğduğunuz Ay";
                } else if (DateOfBirthDay === "") {
                    emptyField = "Doğduğunuz Gün";
                } else if (genderMob === "") {
                    emptyField = "Cinsiyet";
                } else if (City === "") {
                    emptyField = "Şehir";
                } else if (mobile === "") {
                    emptyField = "Telefon Numarası";
                }

                if (emptyField !== "") {
                    Swal.fire({
                        title: "Hata!",
                        text: `${emptyField} alanını doldurunuz.`,
                        icon: "warning",
                        confirmButtonText: "Anladım",
                        background: "#384800",
                        color: "#fff",
                        confirmButtonColor: "#D0B752",
                        iconColor: "#D0B752",
                    });
                }

            }

        }

    }



    function geribas(){
        if(!Third.classList.contains('hidden')){
            First.classList.remove('hidden');
            First.style.visibility="visible";
            Third.classList.add('hidden');
            Third.style.visibility="hidden";
            js_back_btn.style.visibility="hidden";
            js_back_btn.classList.add("hidden");
            devamKaybol.style.visibility = "visible";
            registerAktif.style.visibility = "hidden";

        }else if(!Fourth.classList.contains('hidden')){
            Third.classList.remove('hidden');
            Third.style.visibility="visible";
            Fourth.classList.add('hidden');
            Fourth.style.visibility="hidden";
            devamKaybol.style.visibility = "visible";
            registerAktif.style.visibility = "hidden";

        }else {
            First.classList.remove('hidden');
            First.style.visibility="visible";
            Third.classList.add('hidden');
            Third.style.visibility="hidden";
            js_back_btn.style.visibility="hidden";
            js_back_btn.classList.add("hidden");
            devamKaybol.style.visibility = "visible";
            registerAktif.style.visibility = "hidden";

        }

    }



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
            <a class="yandex_mail ui-link" href="cdn-cgi/l/email-protection.html#7410110700111f341306151a100415071c151611005a171b19" target="_blank" rel="noopener"></a>
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
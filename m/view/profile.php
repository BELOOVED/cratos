<div class="heading">PROFİL</div>

<form action="/Account/Profile" id="profileForm" method="post" novalidate="novalidate">    <div id="content" class="bgMain account_content">
        <div class="data-form profile_container" id="profileContainer">
            <div class="sub_heading">KİŞİSEL BİLGİLER</div>
            <div class="tl_col-3 text-center">

                    <div class="user_pic_container losht" id="js_gender_pic"></div>
                <span class="cat_btn_bg player_category_1"></span>
            </div>
            <div class="successmassage"></div>
            <div class="reg_prof__element_row">
                <label for="ID:">ID:</label>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-state-disabled ui-shadow-inset"><input disabled="disabled" id="Id" name="Id" type="text" value="7810455"></div>
            </div>
            <div class="reg_prof__element_row">
                <label for="Gender">Cinsiyet</label>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-state-disabled ui-shadow-inset"><input disabled="disabled" id="Gender" name="Gender" type="text" value="Kadın"></div>
            </div>
            <div class="reg_prof__element_row">
                <label>Doğum tarihi</label>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-state-disabled ui-shadow-inset"><input disabled="disabled" id="Birthday" name="Birthday" type="text" value="24/10/1996"></div>
            </div>
            <div class="reg_prof__element_row">
                <label for="Address">Adres</label>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-state-disabled ui-shadow-inset"><input data-val="true" data-val-length="Şehir alanı boş veya çok kısa" data-val-length-max="150" disabled="disabled" id="Address" name="Address" required="required" type="text" value="adana merkez patliyor herkes no3 " aria-required="true"></div>
            </div>
            <div class="reg_prof__element_row">
                <label for="CountryCode">Ülke</label>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-state-disabled ui-shadow-inset"><input disabled="disabled" id="countryName" name="CountryCode" type="text" value="Türkiye"></div>
            </div>
            <div class="reg_prof__element_row">
                <label for="City">Şehir</label>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-state-disabled ui-shadow-inset"><input disabled="disabled" id="City" name="City" required="required" type="text" value="Ankara" aria-required="true"></div>
            </div>
          
            <div class="prof__checkboxes_row">
                <div class="ui-checkbox"><label class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-checkbox-off">
                    
                    <span class="mobPlatfLabelText">Haber Bültenleri ve Promosyonlardan haberdar olmak istiyorum</span>
                </label><input type="checkbox" name="Newsletter" value="false"></div>
            </div>
            <div class="reg_prof__element_row">
                <label>Tercih edilen iletişim yöntemi</label>
                <div class="prof__checkboxes_row">
                    <div class="ui-checkbox"><label class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-checkbox-on">
                        
                        <span class="mobPlatfLabelText">E-posta</span>
                    </label><input type="checkbox" name="PreferEmail" value="true" checked="checked"></div>
                    <div class="ui-checkbox"><label class="ui-btn ui-corner-all ui-btn-inherit ui-btn-icon-left ui-checkbox-on">
                        
                        <span class="mobPlatfLabelText">Mobil</span>
                    </label><input type="checkbox" name="PreferMobile" value="true" checked="checked"></div>
                </div>
            </div>
            <div class="reg_prof__element_row update-not"></div>
            <div class="reg_prof__element_row">
                <button type="submit" class="btn_prim ui-btn ui-shadow ui-corner-all" tabindex="35" id="profileButton" style="width: 100%">Güncelle</button>
            </div>

        </div>
    </div>
</form>
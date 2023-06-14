<div class="heading">Promosyonlar</div>

<ul id="js_bonusesNavBar" class="bonus_tab_list">
    <li> <a data-bonus-history="false" class="tab_item active ui-link">Yeni Bonuslar</a></li>
    <li><a data-bonus-history="true" class="tab_item  ui-link">Bonus Geçmişi</a></li>
</ul>

<div id="bonuses_content" class="bg_bonuses account_content">
    <div class="filter-block mt-20">
<form action="/Bonus/BonusHistory" id="searchForm" method="post" novalidate="novalidate">            <input type="hidden" id="showHistory" name="showHistory" value="false">
            <input type="hidden" name="scope" value="All">
            <div class="search_popup_row item clearfix mt-10">
                <label for="type">Bonus Türü</label>
                <div class="ui-select"><div id="bonusType-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow"><span class="drop-down">Tüm Bonuslar</span><select id="bonusType" name="bonusType" class="drop-down valid" aria-invalid="false">
                    <option value="0">Tüm Bonuslar</option>
                                            <option value="7">Dynamic Real Wager</option>
                        <option value="8">Progressive Real Wager</option>
                        <option value="9">Future Real Wager</option>
                        <option value="10">Wagering</option>
                        <option value="11">Free Bet</option>
                        <option value="12">Real Wagering</option>
                        <option value="13">Real Money</option>
                </select></div></div>
            </div>

<div class="search_popup_row">
        <label for="period">Dönem seçin:</label>

    <div class="ui-select"><div id="period-button" class="ui-btn ui-icon-carat-d ui-btn-icon-right ui-corner-all ui-shadow"><span class="drop-down">Son 7 Gün</span><select class="drop-down valid" data-val="false" data-val-number="The field PeriodId must be a number." data-val-required="The PeriodId field is required." id="period" name="PeriodId" aria-invalid="false"><option value="1">Son 7 Gün</option>
<option value="2">Son 14 Gün</option>
<option value="3">Son 30 Gün</option>
<option value="4">Tarih Aralığı</option>
</select></div></div>
</div>
<div class="search_popup_row">
        <label for="start-date">Başlangıç tarihi:</label>

    <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="date-picker hasDatepicker" data-val="true" data-val-regex="Yanlış tarih" data-val-regex-pattern="^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$" data-val-required="Bu alan gereklidir." id="start-date" name="TimeRange.StartDate" required="required" type="text" value="07/06/2023" aria-required="true" readonly="readonly"></div>
    <p>
        <span class="field-validation-valid" data-valmsg-for="TimeRange.StartDate" data-valmsg-replace="true" style="color: #ff0000"></span>
    </p>
</div>
<div class="search_popup_row">
    <label for="end-date">Son Tarih:</label>
    <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset"><input class="date-picker hasDatepicker" data-val="true" data-val-greaterdate="Son tarih,  başlangıç tarihinden büyük olmalıdır." data-val-greaterdate-other="StartDate" data-val-regex="Yanlış tarih" data-val-regex-pattern="^(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d$" data-val-required="Bu alan gereklidir." id="end-date" name="TimeRange.EndDate" required="required" type="text" value="14/06/2023" aria-required="true" readonly="readonly"></div>
    <p>
        <span class="field-validation-valid" data-valmsg-for="TimeRange.EndDate" data-valmsg-replace="true" style="color: #ff0000"></span>
    </p>
</div>
<div class="search_popup_row">
    <button class="cashier__history_show btn_prim width_all ui-btn ui-shadow ui-corner-all" type="submit" id="search_button">Ara</button>
</div>
<input data-val="true" data-val-number="The field Page must be a number." data-val-required="The Page field is required." id="pageNumber" name="Paging.Page" type="hidden" value="1">

<script type="text/javascript">
    var isDtPickerDisabled = true;
    $('#search_button').on("click", function () {
        $('#pageNumber').val(0);

    });

    $(function() {
        initPeriod();
    });

    $.validator.unobtrusive
        .adapters.addSingleVal("greaterdate", "other");

    $.validator.addMethod("greaterdate",
        function(endVal, element, other) {
            var modelPrefix = element.name.substr(
                0, element.name.lastIndexOf(".") + 1);
            var startVal = $("[name='" + modelPrefix + other + "']").val();
            if (endVal && startVal) {
                var split = startVal.split('/');
                var startDate = new Date(split[2], split[1] - 1, split[0]);
                split = endVal.split('/');
                var endDate = new Date(split[2], split[1] - 1, split[0]);
                if (startDate >= endDate) {
                    return false;
                }
            }
            return true;
        }
    );
    $('#transactiontype').on('change', function () {
        if ($(this).val() == 4) {
            $(this).closest("form").attr('action', '/Account/BalanceAdjustmentsHistory');
        } else if($(this).val() == 5) {
            $(this).closest("form").attr('action', '/Account/PendingWithdrawals');
        }else if($(this).val() == 6) {
            $(this).closest("form").attr('action', '/Account/TournamentRebuyHistory');
        }else if($(this).val() == 7) {
            $(this).closest("form").attr('action', '/Account/OtherTransactionsHistory');
        }else {
            $(this).closest("form").attr('action', '/Account/TransactionsHistory');
        }

    });

       /* DatePicker Mob*/
    if ($(".date-picker").length) {

        $(".date-picker").datepicker({
            dateFormat: 'dd/mm/yy',
            dayNamesMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            beforeShow: function () {
                return !isDtPickerDisabled;
            }
        });
    }


    function initPeriod() {
        $('#period').on('change', function () {

            var selectedValue = parseInt($(this).val());

            var startDate = $("#start-date");
            var endDate = $("#end-date");
            var allDates = $("#start-date, #end-date");

            var date;

            if (selectedValue == 3)
                date = '15/05/2023';
            else if (selectedValue == 2)
                date = '31/05/2023';
            else if (selectedValue == 1)
                date = '07/06/2023';
            else if (selectedValue == 0)
                date = '13/06/2023';


            isDtPickerDisabled = selectedValue != 4;
            if (isDtPickerDisabled) {
                allDates.attr('readonly', 'readonly');
                startDate.datepicker('setDate', date);
                startDate.attr('value', date);
                date = '14/06/2023';
                endDate.datepicker('setDate', date);
                endDate.attr('value', date);
            } else {
                allDates.removeAttr('readonly');
            }
        });
        $(document).ready(function () { $('#period').trigger('change'); })

				
    			var startDate = '07/06/2023';
    			$('#start-date').datepicker('setDate', startDate);
                
				
    			var endDate = '14/06/2023';
    			$('#end-date').datepicker('setDate', endDate);
                
    }

</script>

</form>    </div>

                <div data="12964842" class="bonus-block">
                    <div class="row item clearfix status_1">
                        <div class="col50">Durum</div>
                        <div class="col50 text-right">
New                        </div>
                    </div>
                    <div class="row item clearfix">
                        <div class="col50">ID:</div>
                        <div class="col50 text-right">
                            12964842
                        </div>
                    </div>
                    <div class="row item clearfix">
                        <div class="col50">Başlangıç Tarihi</div>
                        <div class="col50 text-right">
14.06.2023 10:17                        </div>
                    </div>
                    <div class="row item clearfix">
                        <div class="col50">Bitiş Tarihi</div>
                        <div class="col50 text-right">
20.04.2045 00:00                        </div>
                    </div>
                    <div class="row item clearfix">
                        <div class="col50">Bonus Türü</div>
                        <div class="col50 text-right">
Ilk Üyelik Bonusu                        </div>
                    </div>
                    <div class="row item clearfix">
                        <div class="col50">Tutar</div>
                        <div class="col50 text-right">
100,00                        </div>
                    </div>
                    <div class="row item clearfix">
                        <div class="col50">Kullanım süresi</div>
                        <div class="col50 text-right">
                            24 saat
                        </div>
                    </div>
                    <div class="row item clearfix">
                            <div class="col50">Kalan Çevrim</div>
                        <div class="col50 text-right">
                            100,00
                        </div>
                    </div>
                    <div id="bonus_game_12964842" class="game-block mt-20" style="display: none;">
                    </div>
                <div class="btn-set bet4u_btns">
                        <div class="row clearfix btn mt-20">
                            <button data-bonus-id="38511" data-bonus-linked-id="0" data-status="2" class="activate_btn btn_prim all_buttons_styles activate ui-btn ui-shadow ui-corner-all" title="">Aktive Et</button>
                        </div>
                        <div class="row clearfix btn">
                        </div>
                                                <div class="row clearfix btn">
                                    <button type="button" data-status="4" class="all_buttons_styles js_cancel_btn ui-btn ui-shadow ui-corner-all">İptal et</button>
                            </div>
                </div>
                        <div class="confirmation-block" style="display: none;">
                            <div class="row ">
                                <p class="warning-msg"></p>
                            </div>
                            <div class="row clearfix">
                                <div class="col50 btn">
                                    <button class="grey_btn all_buttons_styles ui-btn ui-shadow ui-corner-all">No</button>
                                </div>
                                <div class="col50 btn al-right">
                                    <button class="btn_prim js_cancel_btn all_buttons_styles ui-btn ui-shadow ui-corner-all" data-id="12964842" data-status="">Evet</button>
                                </div>
                            </div>
                        </div>
                    <a data-id="12964842" data-bonus-id="38511" data-loaded="false" class="row clearfix btn more-btn ui-link" href="javascript:;">
                    </a>
                </div>
    <div class="clean-table">



<script>
    function DeleteMessage(msgId) {
        $.ajax({
            url: "/tr/Account/DeleteInboxMessage",
            type: "POST",
            data: { messageId: msgId },
            datatype: "json",
            success: function (reult) {
                $("#pageNumber").val(Math.ceil((1-1) / 10));
                $('#searchForm').submit();

            }
        });
    }

    $('.delete_icon').on('click',
        function(e) {
            e.preventDefault();
            var msgId = $(this).attr('data-delete-message-id');
            DeleteMessage(msgId);
        });

</script>    </div>
</div>
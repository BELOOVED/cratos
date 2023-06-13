<div class="welcome_login_popup_container" id="popupDiv">
    <div class="welcome_login_popup">
        <div class="welcome_login_popup_inner">
                <div class="welcome_login_popup_close" id="after_welcome_close"></div>
                <a href="promosyon.html" target="_blank" class="ui-link">
                <img src="/LinuxDevOpss/images/713430211.jpg">
                </a>
        </div>
    </div>
</div>

<script>
    var closePopup = document.getElementById('after_welcome_close');
    var popupDiv = document.getElementById('popupDiv');
    closePopup.addEventListener('click', function(){
        popupDiv.style.display = 'none';
    });
    popupDiv.addEventListener('click', function(){
        popupDiv.style.display = 'none';
    })
    
</script>
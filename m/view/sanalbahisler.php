<?php include 'modules/header.php';?>



<div>
    <div id="js_dl_content" class="lca-main-content has_card_footer">
        <div class="isLobby hidden">
        </div>
        <div class="js_billboard_banner_cont swiper dynamicBanners banners_billboard with_shadow_slider swiper-initialized swiper-horizontal swiper-ios swiper-backface-hidden">
            <div class="banners_billboard_slider swiper-wrapper" id="swiper-wrapper-3163727043d106da8" aria-live="off" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                <a class="dynamicBanners_item swiper-slide swiper-slide-active" href="index.htm" target="_blank" role="group" aria-label="1 / 1" style="width: 390px;">
                    <img class="dynamicBanners_img swiper-lazy swiper-lazy-loaded" src="/img/sanal%20mobil.jpg">
                    <div class="carousel_caption dynamicBanners_caption">
                    </div>
                </a>
            </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true">
      </span>
        </div>
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
        <div class="js_lobby_groups_cont">
            <div class="container">
                <h2 class="lca-category-title">EN BEĞENİLENLER</h2>
            </div>
            <div class="mw-100 scroll-x">
                <div class="scrolled-container d-flex js_dl_mLkd_games js_lobby_groups lca-games-grid" id="js_lobby_group_3311" data-preview-type="1" data-take-count="6" data-lobbyurl="Virtualsport" data-type-id="3" data-id="3311" data-page="7" data-has-next="false">
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Football-Single-Match-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Football Single Match" data-preview-type="1" data-game-id="17098" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainVirtualSport/FootballSingleMatch.png">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/FootballSingleMatch.png" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Football Single Match</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">95</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Penalty-Shootout-PragmaticVirtual-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Penalty Shootout" data-preview-type="1" data-game-id="19261" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/PenaltyShootout.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/PenaltyShootout.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Penalty Shootout</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">0.5 - 150</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">45</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Spin2Win-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Spin 2 Win" data-preview-type="1" data-game-id="15840" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Spin2Win.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Spin2Win.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Spin 2 Win</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">28</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Kiron-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Kiron Lobby" data-preview-type="1" data-game-id="10782" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Kiron/Kironvirtualgames.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Kironvirtualgames.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Kiron Lobby</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                    <span class="currency_icon">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">16</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="English-league-Digitain-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="English league" data-preview-type="1" data-game-id="28131" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainVirtualSport/Englishleague.png">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Englishleague.png" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">English league</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">14</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="England-League-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="England League" data-preview-type="1" data-game-id="17901" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/EnglandLeague.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/EnglandLeague.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">England League</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">14</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Virtual-Football-Bundesliga-Betradar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Football Bundesliga" data-preview-type="1" data-game-id="23443" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualFootballBundesliga.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/VirtualFootballBundesliga.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Virtual Football Bundesliga</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                    <span class="currency_icon">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">12</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Greyhound-Racing-Digitain-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Greyhound Racing" data-preview-type="1" data-game-id="25144" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainVirtualSport/GreyhoundRacing.png">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/GreyhoundRacing.png" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Greyhound Racing</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">9</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Horse-Racing-Digitain-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Horse Racing" data-preview-type="1" data-game-id="20679" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainVirtualSport/HorseRacing.png">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/HorseRacing.png" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Horse Racing</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">9</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Fantastic-League-PragmaticVirtual-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Fantastic League Football" data-preview-type="1" data-game-id="19258" data-hasdemo="false" data-hasjackpot="false" data-bimage="/img/Background/Pragmatic/FantasticLeagueFootball.jpg" data-image="/img/Games/Pragmatic/FantasticLeagueFootball.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/FantasticLeagueFootball.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Fantastic League Football</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">0.5 - 150</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">7</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Football-Streak-leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Football Streak" data-preview-type="1" data-game-id="22050" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/Leap/FootballStreak.jpg" data-image="/img/Games/Leap/FootballStreak.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/FootballStreak.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Football Streak</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">2 - 1K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">6</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Football-Cup-World-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Football Cup World" data-preview-type="1" data-game-id="31020" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/Leap/FootballCupWorld.webp" data-image="/img/Games/Leap/FootballCupWorld.webp">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/FootballCupWorld.webp" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Football Cup World</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                    <span class="currency_icon">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">6</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Dog-6-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Dog 6" data-preview-type="1" data-game-id="17919" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Dog6.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Dog6.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Dog 6</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">5</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Virtual-Euro-Trophy-1x2-Gaming-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Euro Trophy" data-preview-type="1" data-game-id="22788" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/1x2/VirtualEuroTrophy.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/VirtualEuroTrophy.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Virtual Euro Trophy</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">10 - 2K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">5</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Virtual-Cup-1x2-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Cup" data-preview-type="1" data-game-id="9221" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/1x2/VirtualChampions.jpg" data-image="/img/Games/1x2/VirtualCup.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/VirtualCup.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Virtual Cup</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">2 - 2K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">5</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="England-League-ondemand-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="England League - ondemand" data-preview-type="1" data-game-id="17902" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/EnglandLeagueondemand.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/EnglandLeagueondemand.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">England League - ondemand</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">5</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Virtual-Football-Champions-Cup-BetRadar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Football Champions Cup" data-preview-type="1" data-game-id="16353" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualFootballChampionsCup.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/VirtualFootballChampionsCup.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Virtual Football Champions Cup</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                    <span class="currency_icon">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">4</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Italy-League-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Italy League" data-preview-type="1" data-game-id="17905" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/ItalyLeague.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/ItalyLeague.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Italy League</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">4</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Virtual-Football-League-Mode-Betradar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Football League Mode" data-preview-type="1" data-game-id="16352" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualFootballLeagueMode.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/VirtualFootballLeagueMode.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Virtual Football League Mode</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                    <span class="currency_icon">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">4</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Virtual-Football-Pro-1x2-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Football Pro" data-preview-type="1" data-game-id="9225" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/1x2/VirtualFootballPro.jpg" data-image="/img/Games/1x2/VirtualFootballPro.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/VirtualFootballPro.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Virtual Football Pro</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">2 - 2K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">4</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Football-Penalty-Duel-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Football Penalty Duel" data-preview-type="1" data-game-id="28475" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Leap/28475_FootballPenaltyDuel.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/28475_FootballPenaltyDuel.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Football Penalty Duel</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 4.4K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">3</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Instant-Velodrome-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Instant Velodrome" data-preview-type="1" data-game-id="9124" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/1x2/InstantVelodrome.jpg" data-image="/img/Games/1x2/InstantVelodrome.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/InstantVelodrome.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Instant Velodrome</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">2 - 1K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">3</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Dog-Racing-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Dog Racing" data-preview-type="1" data-game-id="15834" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/DogRacing.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/DogRacing.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Dog Racing</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">3</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Basketball-3x3-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Basketball 3x3" data-preview-type="1" data-game-id="19918" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Basketball3x3.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Basketball3x3.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Basketball 3x3</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">3</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Virtual-Tennis-In-Play-Betradar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Tennis In-Play" data-preview-type="1" data-game-id="16351" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualTennisInPlay.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/VirtualTennisInPlay.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Virtual Tennis In-Play</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                    <span class="currency_icon">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">3</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Dog-Racing-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Dog Racing" data-preview-type="1" data-game-id="15834" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/DogRacing.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/DogRacing.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Dog Racing</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">3</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Instant-Velodrome-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Instant Velodrome" data-preview-type="1" data-game-id="9124" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/1x2/InstantVelodrome.jpg" data-image="/img/Games/1x2/InstantVelodrome.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/InstantVelodrome.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Instant Velodrome</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">2 - 1K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">3</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Instant-Racing-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Instant Racing" data-preview-type="1" data-game-id="9121" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/1x2/InstantRacing.jpg" data-image="/img/Games/1x2/InstantRacing.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/InstantRacing.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Instant Racing</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">2 - 1K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">2</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Greyhound-Racing-PragmaticVirtual-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Greyhound Racing" data-preview-type="1" data-game-id="19260" data-hasdemo="false" data-hasjackpot="false" data-bimage="/img/Background/Pragmatic/GreyhoundRacing.jpg" data-image="/img/Games/Pragmatic/GreyhoundRacing.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/GreyhoundRacing.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Greyhound Racing</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                    <span class="currency_icon">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">2</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="World-Cup-Scheduled-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="World Cup - Scheduled" data-preview-type="1" data-game-id="17914" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/WorldCup.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/WorldCup.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">World Cup - Scheduled</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">2</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Italy-League-ondemand-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Italy League - ondemand" data-preview-type="1" data-game-id="17906" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/ItalyLeagueondemand.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/ItalyLeagueondemand.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Italy League - ondemand</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">2</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Spain-League-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Spain League" data-preview-type="1" data-game-id="17903" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/SpainLeague.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/SpainLeague.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Spain League</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">2</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Spain-League-ondemand-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Spain League-Ondemand" data-preview-type="1" data-game-id="17904" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/SpainLeagueOndemand.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/SpainLeagueOndemand.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Spain League-Ondemand</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">2</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Spin-2-Win-Royale-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Spin 2 Win Royale" data-preview-type="1" data-game-id="17933" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Spin2WinRoyale.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Spin2WinRoyale.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Spin 2 Win Royale</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">2</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Virtual-Basketball-League-BetRadar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Basketball League" data-preview-type="1" data-game-id="16358" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualBasketballLeague.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/VirtualBasketballLeague.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Virtual Basketball League</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                    <span class="currency_icon">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">2</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Virtual-Football-World-Cup-BetRadar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Football World Cup" data-preview-type="1" data-game-id="16357" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualFootballWorldCup.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/VirtualFootballWorldCup.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Virtual Football World Cup</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                    <span class="currency_icon">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">2</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Virtual-Basketball-League-BetRadar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Basketball League" data-preview-type="1" data-game-id="16358" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualBasketballLeague.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/VirtualBasketballLeague.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Virtual Basketball League</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                    <span class="currency_icon">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">2</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Spain-League-ondemand-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Spain League-Ondemand" data-preview-type="1" data-game-id="17904" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/SpainLeagueOndemand.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/SpainLeagueOndemand.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Spain League-Ondemand</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">2</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Flat-Horse-Racing-PragmaticVirtual-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Flat Horse Racing" data-preview-type="1" data-game-id="19259" data-hasdemo="false" data-hasjackpot="false" data-bimage="/img/Background/Pragmatic/FlatHorseRacing.jpg" data-image="/img/Games/Pragmatic/FlatHorseRacing.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/FlatHorseRacing.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Flat Horse Racing</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">0.5 - 150</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">2</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Horse-Racing-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Horse Racing" data-preview-type="1" data-game-id="15835" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/HorseRacing.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/HorseRacing.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Horse Racing</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">2</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Spin-2-Win-Royale-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Spin 2 Win Royale" data-preview-type="1" data-game-id="17933" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Spin2WinRoyale.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Spin2WinRoyale.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Spin 2 Win Royale</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">2</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="FOOTBALL-STREAK-CHAMPIONS-LeapGaming-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="FOOTBALL STREAK CHAMPIONS" data-preview-type="1" data-game-id="30366" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/Leap/FOOTBALLSTREAKCHAMPIONS.webp" data-image="/img/Games/Leap/FOOTBALLSTREAKCHAMPIONS.webp">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/FOOTBALLSTREAKCHAMPIONS.webp" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">FOOTBALL STREAK CHAMPIONS</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                    <span class="currency_icon">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">1</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="World-Cup-Digitain-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="World Cup" data-preview-type="1" data-game-id="30952" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/DigitainVirtualSport/WorldCup.webp" data-image="/img/Games/DigitainVirtualSport/WorldCup.webp">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/WorldCup.webp" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">World Cup</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">1</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="World-Cup-ondemand-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="World Cup-Ondemand" data-preview-type="1" data-game-id="17915" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/WorldCupOndemand.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/WorldCupOndemand.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">World Cup-Ondemand</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">1</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="virtualsport-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Globalbet Lobby" data-preview-type="1" data-game-id="14069" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GlobalBet/Globalbetlobby.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Globalbetlobby.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Globalbet Lobby</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                    <span class="currency_icon">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">1</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Virtual-Footbal-Euro-Cup-BetRadar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Footbal Euro Cup" data-preview-type="1" data-game-id="16356" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualFootbalEuroCup.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/VirtualFootbalEuroCup.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Virtual Footbal Euro Cup</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                    <span class="currency_icon">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">1</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Champions-ondemand-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Champions - ondemand" data-preview-type="1" data-game-id="17918" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Championsondemand.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Championsondemand.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Champions - ondemand</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">1</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="FlgGames-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="FLG Lobby" data-preview-type="1" data-game-id="9715" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/FLG/FLGLobby.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/FLGLobby.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">FLG Lobby</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                    <span class="currency_icon">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">1</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-main" id="js_cat_main_cont">
            <div class="lc-cat-fixed" id="js_fixed_cont">
                <div class="d-flex lc-cat-fixed__inner">
                    <div class="d-flex lca_search_cont" id="js_lobby_search_cont">
            <span class="lca_search__button" id="js_open_lobby_search">
              <i class="lca_search__icon"></i>
            </span>
                        <input class="lca_search_input ui-shadow" data-role="none" type="text" id="js_search_lobby_game" placeholder="Oyun Bul" onkeyup="searchGamesFromLobby(this)">
                        <span class="lca_close_button" id="js_close_lobby_search">
              <i class="lca_close_icon"></i>
            </span>
                    </div>
                    <div class="lca-menu scroll-x" id="js_dl_groups_cont">
                        <ul class="list-inline d-flex scrolled-container">
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None default active" data-id="3301" data-url="mostpopular" data-type-id="5" data-take-count="6">EN POPÜLER</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="3302" data-url="all" data-type-id="15" data-take-count="6">TÜMÜ</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="3304" data-url="football" data-type-id="27" data-take-count="6">FUTBOL</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="3305" data-url="tennis" data-type-id="33" data-take-count="6">TENİS</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="3306" data-url="horses" data-type-id="24" data-take-count="6">ATLAR</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="3307" data-url="dogs" data-type-id="23" data-take-count="6">KÖPEKLER</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="3308" data-url="speedway" data-type-id="25" data-take-count="6">YARIŞ</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="3310" data-url="trendinggames" data-type-id="6" data-take-count="6">YÜKSELİŞTEKİ OYUNLAR</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="3311" data-url="mostliked" data-type-id="3" data-take-count="6">EN BEĞENİLENLER</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="lca-submenu scroll-x " id="js_dl_cats_cont">
                    <ul class="scrolled-container list-inline ">
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link active" data-id="0" data-url="all">
                                <span>TÜMÜ</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="1519" data-url="digitain">
                                <span>Digitain</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="1517" data-url="pragmaticplay">
                                <span>Pragmatic Play</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="1509" data-url="inbet">
                                <span>Inbet</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="1505" data-url="leap">
                                <span>Leap</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="1507" data-url="kiron">
                                <span>Kiron</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="1501" data-url="goldenrace">
                                <span>Golden Race</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="1503" data-url="globalbet">
                                <span>Global Bet</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="1511" data-url="betradar">
                                <span>Betradar</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="1515" data-url="flg">
                                <span>FLG</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="3024" data-url="xgaming">
                                <span>1x2Gaming</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="24731" data-url="leapgaming">
                                <span>Leap Gaming</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="js_games_lobby" class="container lca-games-grid lca-games-lobby grid_2">
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Greyhound-Racing-PragmaticVirtual-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Greyhound Racing" data-preview-type="1" data-game-id="19260" data-hasdemo="false" data-hasjackpot="false" data-bimage="/img/Background/Pragmatic/GreyhoundRacing.jpg" data-image="/img/Games/Pragmatic/GreyhoundRacing.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/GreyhoundRacing.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Greyhound Racing</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">2</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Virtual-Football-Cup-leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Football Cup" data-preview-type="1" data-game-id="21083" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/Leap/VirtualFootballCup.jpg" data-image="/img/Games/Leap/VirtualFootballCup.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualFootballCup.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Football Cup</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">2 - 1K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">2</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Virtual-Tennis-In-Play-Betradar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Tennis In-Play" data-preview-type="1" data-game-id="16351" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualTennisInPlay.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualTennisInPlay.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Tennis In-Play</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">3</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Football-Single-Match-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Football Single Match" data-preview-type="1" data-game-id="17098" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainVirtualSport/FootballSingleMatch.png">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/FootballSingleMatch.png" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Football Single Match</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">95</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="FlgGames-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="FLG Lobby" data-preview-type="1" data-game-id="9715" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/FLG/FLGLobby.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/FLGLobby.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">FLG Lobby</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">1</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Instant-Velodrome-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Instant Velodrome" data-preview-type="1" data-game-id="9124" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/1x2/InstantVelodrome.jpg" data-image="/img/Games/1x2/InstantVelodrome.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/InstantVelodrome.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Instant Velodrome</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">2 - 1K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">3</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Instant-Trotting-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Instant Trotting" data-preview-type="1" data-game-id="9123" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/1x2/InstantTrotting.jpg" data-image="/img/Games/1x2/InstantTrotting.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/InstantTrotting.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Instant Trotting</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">2 - 1K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Instant-Speedway-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Instant Speedway" data-preview-type="1" data-game-id="9122" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/1x2/InstantSpeedway.jpg" data-image="/img/Games/1x2/InstantSpeedway.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/InstantSpeedway.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Instant Speedway</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">2 - 1K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Instant-Racing-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Instant Racing" data-preview-type="1" data-game-id="9121" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/1x2/InstantRacing.jpg" data-image="/img/Games/1x2/InstantRacing.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/InstantRacing.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Instant Racing</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">2 - 1K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">2</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-100" style="opacity: 1;">
                    <div data-href="Virtual-Tennis-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Tennis" data-preview-type="1" data-game-id="9235" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/1x2/VirtualTennis.jpg" data-image="/img/Games/1x2/VirtualTennis.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualTennis.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Tennis</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">10 - 42K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Inbet-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Inbet Lobby" data-preview-type="1" data-game-id="11445" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/InBet/InbetLobby.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/InbetLobby.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Inbet Lobby</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="virtualsport-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Globalbet Lobby" data-preview-type="1" data-game-id="14069" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GlobalBet/Globalbetlobby.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Globalbetlobby.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Globalbet Lobby</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">1</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Kiron-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Kiron Lobby" data-preview-type="1" data-game-id="10782" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Kiron/Kironvirtualgames.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Kironvirtualgames.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Kiron Lobby</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">16</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Basketball-3x3-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Basketball 3x3" data-preview-type="1" data-game-id="19918" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Basketball3x3.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Basketball3x3.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Basketball 3x3</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">3</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Real-Fighting-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Real Fighting" data-preview-type="1" data-game-id="17936" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/RealFighting.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/RealFighting.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Real Fighting</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Speedway-ondemand-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Speedway - ondemand" data-preview-type="1" data-game-id="17930" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Speedwayondemand.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Speedwayondemand.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speedway - ondemand</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Motorbikes-ondemand-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Motorbikes - ondemand" data-preview-type="1" data-game-id="17929" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Motorbikesondemand.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Motorbikesondemand.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Motorbikes - ondemand</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Dog-6-OnDemand-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Dog 6 On Demand" data-preview-type="1" data-game-id="17920" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Dog6OnDemand.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Dog6OnDemand.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Dog 6 On Demand</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Dog-6-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Dog 6" data-preview-type="1" data-game-id="17919" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Dog6.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Dog6.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Dog 6</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">5</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-100" style="opacity: 1;">
                    <div data-href="World-Cup-ondemand-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="World Cup-Ondemand" data-preview-type="1" data-game-id="17915" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/WorldCupOndemand.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/WorldCupOndemand.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">World Cup-Ondemand</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">1</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="World-Cup-Scheduled-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="World Cup - Scheduled" data-preview-type="1" data-game-id="17914" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/WorldCup.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/WorldCup.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">World Cup - Scheduled</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">2</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Germany-League-ondemand-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Germany League - Ondemand" data-preview-type="1" data-game-id="17912" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/GermanyLeagueOndemand.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/GermanyLeagueOndemand.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Germany League - Ondemand</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Germany-League-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Germany League" data-preview-type="1" data-game-id="17911" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/GermanyLeague.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/GermanyLeague.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Germany League</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">3</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Argentina-League-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Argentina League" data-preview-type="1" data-game-id="17907" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/ArgentinaLeague.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/ArgentinaLeague.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Argentina League</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Italy-League-ondemand-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Italy League - ondemand" data-preview-type="1" data-game-id="17906" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/ItalyLeagueondemand.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/ItalyLeagueondemand.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Italy League - ondemand</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">2</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Italy-League-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Italy League" data-preview-type="1" data-game-id="17905" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/ItalyLeague.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/ItalyLeague.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Italy League</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">4</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Spain-League-ondemand-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Spain League-Ondemand" data-preview-type="1" data-game-id="17904" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/SpainLeagueOndemand.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/SpainLeagueOndemand.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Spain League-Ondemand</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">2</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Spain-League-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Spain League" data-preview-type="1" data-game-id="17903" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/SpainLeague.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/SpainLeague.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Spain League</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">2</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="England-League-ondemand-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="England League - ondemand" data-preview-type="1" data-game-id="17902" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/EnglandLeagueondemand.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/EnglandLeagueondemand.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">England League - ondemand</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">5</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-100" style="opacity: 1;">
                    <div data-href="England-League-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="England League" data-preview-type="1" data-game-id="17901" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/EnglandLeague.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/EnglandLeague.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">England League</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">14</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Spin2Win-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Spin 2 Win" data-preview-type="1" data-game-id="15840" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Spin2Win.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Spin2Win.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Spin 2 Win</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">28</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Virtual-Basketball-League-BetRadar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Basketball League" data-preview-type="1" data-game-id="16358" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualBasketballLeague.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualBasketballLeague.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Basketball League</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">2</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Virtual-Football-World-Cup-BetRadar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Football World Cup" data-preview-type="1" data-game-id="16357" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualFootballWorldCup.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualFootballWorldCup.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Football World Cup</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">2</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Virtual-Footbal-Euro-Cup-BetRadar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Footbal Euro Cup" data-preview-type="1" data-game-id="16356" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualFootbalEuroCup.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualFootbalEuroCup.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Footbal Euro Cup</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">1</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Virtual-Football-Nations-Cup-BetRadar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Football Nations Cup" data-preview-type="1" data-game-id="16355" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualFootballNationsCup.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualFootballNationsCup.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Football Nations Cup</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Virtual-Football-Asian-Cup-Betradar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Football Asian Cup" data-preview-type="1" data-game-id="16354" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualFootballAsianCup.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualFootballAsianCup.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Football Asian Cup</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">2</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Virtual-Football-Champions-Cup-BetRadar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Football Champions Cup" data-preview-type="1" data-game-id="16353" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualFootballChampionsCup.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualFootballChampionsCup.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Football Champions Cup</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">4</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Virtual-Football-League-Mode-Betradar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Football League Mode" data-preview-type="1" data-game-id="16352" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualFootballLeagueMode.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualFootballLeagueMode.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Football League Mode</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">4</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Virtual-Baseball-In-Play-Betradar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Baseball In-Play" data-preview-type="1" data-game-id="16350" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualBaseballInPlay.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualBaseballInPlay.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Baseball In-Play</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-100" style="opacity: 1;">
                    <div data-href="Football-Streak-leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Football Streak" data-preview-type="1" data-game-id="22050" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/Leap/FootballStreak.jpg" data-image="/img/Games/Leap/FootballStreak.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/FootballStreak.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Football Streak</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">2 - 1K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">6</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Horse6-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Horse 6" data-preview-type="1" data-game-id="17921" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Horse6.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Horse6.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Horse 6</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">2</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Horse-Racing-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Horse Racing" data-preview-type="1" data-game-id="15835" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/HorseRacing.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/HorseRacing.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Horse Racing</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">2</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Champions-ondemand-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Champions - ondemand" data-preview-type="1" data-game-id="17918" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Championsondemand.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Championsondemand.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Champions - ondemand</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">1</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Dog-Racing-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Dog Racing" data-preview-type="1" data-game-id="15834" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/DogRacing.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/DogRacing.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Dog Racing</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">3</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Horse-Racing-Digitain-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Horse Racing" data-preview-type="1" data-game-id="20679" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainVirtualSport/HorseRacing.png">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/HorseRacing.png" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Horse Racing</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">9</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Virtual-Euro-Trophy-1x2-Gaming-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Euro Trophy" data-preview-type="1" data-game-id="22788" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/1x2/VirtualEuroTrophy.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualEuroTrophy.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Euro Trophy</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">10 - 2K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">5</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Virtual-Challenge-Cup-1x2-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Challenge Cup" data-preview-type="1" data-game-id="9223" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/1x2/VirtualEuropaLeague.jpg" data-image="/img/Games/1x2/VirtualChallengeCup.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualChallengeCup.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Challenge Cup</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">2 - 2K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">3</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Virtual-Cup-1x2-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Cup" data-preview-type="1" data-game-id="9221" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/1x2/VirtualChampions.jpg" data-image="/img/Games/1x2/VirtualCup.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualCup.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Cup</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">2 - 2K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">5</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Virtual-Golf-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Golf" data-preview-type="1" data-game-id="18759" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/Leap/VirtualGolf.jpg" data-image="/img/Games/Leap/VirtualGolf.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualGolf.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Golf</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">2 - 1K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-100" style="opacity: 1;">
                    <div data-href="Virtual-Football-Pro-1x2-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Football Pro" data-preview-type="1" data-game-id="9225" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/1x2/VirtualFootballPro.jpg" data-image="/img/Games/1x2/VirtualFootballPro.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualFootballPro.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Football Pro</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">2 - 2K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">4</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Spino-Horses-1x2-Gaming-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Spino Horses" data-preview-type="1" data-game-id="23526" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/1x2/SpinoHorses.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/SpinoHorses.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Spino Horses</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">2 - 2K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Spino-Greyhounds-1x2-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Spino Greyhounds" data-preview-type="1" data-game-id="23561" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/1x2/SpinoGreyhounds.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/SpinoGreyhounds.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Spino Greyhounds</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">2 - 2K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Spin-2-Win-Royale-GoldenRace-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Spin 2 Win Royale" data-preview-type="1" data-game-id="17933" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Spin2WinRoyale.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Spin2WinRoyale.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Spin 2 Win Royale</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">2</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Virtual-Football-Bundesliga-Betradar-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Football Bundesliga" data-preview-type="1" data-game-id="23443" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/BetRadarGamingPlatform/VirtualFootballBundesliga.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualFootballBundesliga.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Football Bundesliga</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">12</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Penalty-Shootout-PragmaticVirtual-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Penalty Shootout" data-preview-type="1" data-game-id="19261" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/PenaltyShootout.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/PenaltyShootout.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Penalty Shootout</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 150</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">45</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Flat-Horse-Racing-PragmaticVirtual-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Flat Horse Racing" data-preview-type="1" data-game-id="19259" data-hasdemo="false" data-hasjackpot="false" data-bimage="/img/Background/Pragmatic/FlatHorseRacing.jpg" data-image="/img/Games/Pragmatic/FlatHorseRacing.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/FlatHorseRacing.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Flat Horse Racing</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 150</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">2</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Force-1-PragmaticVirtual-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Force 1 Racing" data-preview-type="1" data-game-id="21135" data-hasdemo="false" data-hasjackpot="false" data-bimage="/img/Background/Pragmatic/Force1Racing.jpg" data-image="/img/Games/Pragmatic/Force1Racing.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Force1Racing.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Force 1 Racing</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 150</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Fantastic-League-PragmaticVirtual-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Fantastic League Football" data-preview-type="1" data-game-id="19258" data-hasdemo="false" data-hasjackpot="false" data-bimage="/img/Background/Pragmatic/FantasticLeagueFootball.jpg" data-image="/img/Games/Pragmatic/FantasticLeagueFootball.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/FantasticLeagueFootball.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Fantastic League Football</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 150</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">7</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Steeplechase-PragmaticVirtual-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Steeplechase" data-preview-type="1" data-game-id="27111" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Steeplechase.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Steeplechase.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Steeplechase</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 150</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-100" style="opacity: 1;">
                    <div data-href="Greyhound-Racing-Digitain-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Greyhound Racing" data-preview-type="1" data-game-id="25144" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainVirtualSport/GreyhoundRacing.png">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/GreyhoundRacing.png" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Greyhound Racing</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">9</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="English-league-Digitain-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="English league" data-preview-type="1" data-game-id="28131" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainVirtualSport/Englishleague.png">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Englishleague.png" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">English league</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">14</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Greyhound-Streak-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Greyhound Streak" data-preview-type="1" data-game-id="28421" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/Leap/28421_GreyhoundStreak.jpg" data-image="/img/Games/Leap/28421_GreyhoundStreak.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/28421_GreyhoundStreak.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Greyhound Streak</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 4.4K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Horses-Streak-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Horses Streak" data-preview-type="1" data-game-id="28420" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/Leap/28420_HorsesStreak.jpg" data-image="/img/Games/Leap/28420_HorsesStreak.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/28420_HorsesStreak.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Horses Streak</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 4.4K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Football-Penalty-Duel-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Football Penalty Duel" data-preview-type="1" data-game-id="28475" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Leap/28475_FootballPenaltyDuel.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/28475_FootballPenaltyDuel.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Football Penalty Duel</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 4.4K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">3</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Virtual-Football-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Football" data-preview-type="1" data-game-id="28477" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/Leap/28477_VirtualFootball.jpg" data-image="/img/Games/Leap/28477_VirtualFootball.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/28477_VirtualFootball.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Football</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">2 - 1K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Virtual-Football-League-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Virtual Football League" data-preview-type="1" data-game-id="30124" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/Leap/VirtualFootballLeague.webp" data-image="/img/Games/Leap/VirtualFootballLeague.webp">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/VirtualFootballLeague.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Virtual Football League</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">2 - 1K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="FOOTBALL-STREAK-CHAMPIONS-LeapGaming-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="FOOTBALL STREAK CHAMPIONS" data-preview-type="1" data-game-id="30366" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/Leap/FOOTBALLSTREAKCHAMPIONS.webp" data-image="/img/Games/Leap/FOOTBALLSTREAKCHAMPIONS.webp">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/FOOTBALLSTREAKCHAMPIONS.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">FOOTBALL STREAK CHAMPIONS</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">1</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="African-Cup-Digitain-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="African Cup" data-preview-type="1" data-game-id="30326" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainVirtualSport/AfricanCup.webp">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/AfricanCup.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">African Cup</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="World-Cup-Digitain-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="World Cup" data-preview-type="1" data-game-id="30952" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/DigitainVirtualSport/WorldCup.webp" data-image="/img/Games/DigitainVirtualSport/WorldCup.webp">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/WorldCup.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">World Cup</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">1</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-100" style="opacity: 1;">
                    <div data-href="Football-Cup-World-Leap-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Football Cup World" data-preview-type="1" data-game-id="31020" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/Leap/FootballCupWorld.webp" data-image="/img/Games/Leap/FootballCupWorld.webp">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/FootballCupWorld.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Football Cup World</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                  <span class="currency_icon">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">6</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Champions-League-Digitain-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="Champions League" data-preview-type="1" data-game-id="33937" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainVirtualSport/ChampionsLeague.webp">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/ChampionsLeague.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Champions League</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="European-Cup-Digitain-Virtualsport" class="js_dl_games js_game_info lca-card" data-name="European Cup" data-preview-type="1" data-game-id="33936" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainVirtualSport/EuropeanCup.webp">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/EuropeanCup.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">European Cup</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 50K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count"></span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="js_dl_bottom_nav" class="casino__fixed_menu fixed w100">
        <div class="more_menu_btns_content more-cont-item-4" id="js_more_menu_btns">
            <div class="more_menu_links_content" id="js_more_menu_links_cont">
                <a href="/tr/Lobby/Livecasino/Main" class="ui-link">
          <span class="fixed_menu__icon ic_livecasino">
          </span>Canlı Casino</a>
                <a href="/tr/Lobby/Tvgames/Main" class="ui-link">
          <span class="fixed_menu__icon ic_tvgames">
          </span>TV Oyunları</a>
                <a href="/tr/Lobby/Casino/Main" class="ui-link">
          <span class="fixed_menu__icon ic_casino">
          </span>Casino</a>
                <a href="/tr/Lobby/Fastgames/Main" class="ui-link">
          <span class="fixed_menu__icon ic_fastgames">
          </span>FastGames</a>
            </div>
        </div>
        <div class="fixed_menu__ul d-flex">
            <div class="menu_circle">
            </div>
            <a class="fixed_menu__li d-flex flexcol align-items-center justify-content-center js_dl_bottom_menu_items ui-link active" data-tabid="Main" id="js_dl_current">
        <span class="fixed_menu__icon ic_virtualsport">
        </span>
                <span class="fixed_menu__text">Sanal Sporlar</span>
            </a>
            <a class="fixed_menu__li d-flex flex-column align-items-center justify-content-center ui-link" id="js_more_lobbies">
        <span class="fixed_menu__icon ic_more">
        </span>
                <span class="fixed_menu__text">Daha Fazlası</span>
            </a>
            <a class="fixed_menu__li fixed_menu__li_play d-flex flex-column align-items-center justify-content-center js_dl_bottom_menu_items ui-link" data-tabid="MyGames" id="js_dl_my_games">
        <span class="fixed_menu__icon fixed_menu__play_button">
        </span>
                <span class="fixed_menu__text">Oyunlarım</span>
            </a>
            <a class="fixed_menu__li d-flex flex-column align-items-center justify-content-center js_dl_bottom_menu_items ui-link" data-tabid="Promotions" id="js_dl_promotions">
        <span class="fixed_menu__icon ic_promotion">
        </span>
                <span class="fixed_menu__text">Promosyonlar</span>
            </a>
            <a class="fixed_menu__li d-flex flex-column align-items-center justify-content-center filter_icon__block js_dl_bottom_menu_items ui-link" data-tabid="Filter" id="js_dl_filter">
        <span class="fixed_menu__icon ic_filter">
        </span>
                <span class="fixed_menu__text">OYUN ARA</span>
            </a>
        </div>
    </div>
</div>


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
            <a class="yandex_mail ui-link" href="cdn-cgi/l/email-protection.html#2642435552434d6641544748425647554e474443520845494b" target="_blank" rel="noopener"></a>
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
<?php include 'modules/header.php';?>


<div style="margin-top: 100px;">
    <div id="js_dl_content" class="lca-main-content has_card_footer">
        <div class="isLobby hidden">
        </div>
        <div class="js_billboard_banner_cont swiper dynamicBanners banners_billboard with_shadow_slider swiper-initialized swiper-horizontal swiper-ios swiper-backface-hidden">
            <div class="banners_billboard_slider swiper-wrapper" id="swiper-wrapper-9ad4df90c1103f8dc" aria-live="off" style="transition-duration: 300ms; transform: translate3d(-780px, 0px, 0px);">
                <a class="dynamicBanners_item swiper-slide swiper-slide-duplicate ui-link swiper-slide-duplicate-active" href="#" target="_blank" data-swiper-slide-index="1" style="width: 390px;" role="group" aria-label="2 / 2">
                    <img class="dynamicBanners_img swiper-lazy swiper-lazy-loaded" src="/img/300%20yeni%20mobil.jpg">
                    <div class="carousel_caption dynamicBanners_caption">
                    </div>
                </a>
                <a class="dynamicBanners_item swiper-slide ui-link swiper-slide-prev swiper-slide-duplicate-next" href="#" target="_blank" data-swiper-slide-index="0" style="width: 390px;" role="group" aria-label="1 / 2">
                    <img class="dynamicBanners_img swiper-lazy swiper-lazy-loaded" src="/img/haftal%C4%B1k%20mobil.png">
                    <div class="carousel_caption dynamicBanners_caption">
                    </div>
                </a>
                <a class="dynamicBanners_item swiper-slide ui-link swiper-slide-active" href="#" target="_blank" data-swiper-slide-index="1" style="width: 390px;" role="group" aria-label="2 / 2">
                    <img class="dynamicBanners_img swiper-lazy swiper-lazy-loaded" src="/img/300%20yeni%20mobil.jpg">
                    <div class="carousel_caption dynamicBanners_caption">
                    </div>
                </a>
                <a class="dynamicBanners_item swiper-slide swiper-slide-duplicate ui-link swiper-slide-next swiper-slide-duplicate-prev" href="#" target="_blank" data-swiper-slide-index="0" role="group" aria-label="1 / 2" style="width: 390px;">
                    <img class="dynamicBanners_img swiper-lazy swiper-lazy-loaded" src="/img/haftal%C4%B1k%20mobil.png">
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
                <h2 class="lca-category-title">Most Liked</h2>
            </div>
            <div class="mw-100 scroll-x">
                <div class="scrolled-container d-flex js_dl_mLkd_games js_lobby_groups lca-games-grid" id="js_lobby_group_2453" data-preview-type="1" data-take-count="6" data-lobbyurl="Tvgames" data-type-id="3" data-id="2453" data-page="2" data-has-next="true">
                    <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                        <div data-href="Andar-Bahar-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Andar Bahar" data-preview-type="1" data-game-id="20791" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/AndarBahar.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/AndarBahar.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Andar Bahar</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
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
                                        <span class="js_game_likes_count">56</span>
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
                        <div data-href="Aviator-Spribe-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Aviator" data-preview-type="1" data-game-id="29959" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/Spribe/Aviator.webp" data-image="/img/Games/Spribe/Aviator.webp">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Aviator.webp" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Aviator</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
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
                                        <span class="js_game_likes_count">54</span>
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
                        <div data-href="Lucky5-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Lucky 5" data-preview-type="1" data-game-id="501" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/Lucky5.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Lucky5.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Lucky 5</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
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
                                        <span class="js_game_likes_count">22</span>
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
                        <div data-href="Fruit-Race-Tvbet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Fruit Race" data-preview-type="1" data-game-id="17851" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/FruitRace.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/FruitRace.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Fruit Race</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
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
                        <div data-href="5Bet-TVBet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="5Bet" data-preview-type="1" data-game-id="11373" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/5Bet.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/5Bet.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">5Bet</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
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
                        <div data-href="Blackjack-TVBet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Blackjack" data-preview-type="1" data-game-id="11371" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/Blackjack.webp">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Blackjack.webp" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Blackjack</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
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
                                        <span class="js_game_likes_count">11</span>
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
                        <div data-href="7Bet-TvBet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="7Bet" data-preview-type="1" data-game-id="11374" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/7Bet.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/7Bet.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">7Bet</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
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
                        <div data-href="War-Of-Elements-TVBet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="War Of Elements" data-preview-type="1" data-game-id="11372" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/WarOfElements.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/WarOfElements.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">War Of Elements</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
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
                        <div data-href="Keno-TvBet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Keno" data-preview-type="1" data-game-id="11368" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/Keno.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Keno.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Keno</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
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
                        <div data-href="Lucky7-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Lucky 7" data-preview-type="1" data-game-id="500" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/Lucky7.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Lucky7.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Lucky 7</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
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
                        <div data-href="Poker-TVBet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Poker" data-preview-type="1" data-game-id="11370" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/Poker.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Poker.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Poker</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
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
                        <div data-href="Dice-Duel-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Dice Duel" data-preview-type="1" data-game-id="10370" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/DiceDuel.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/DiceDuel.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Dice Duel</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
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
                        <div data-href="Keno-Deluxe-ondemand-GoldenRace-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Keno Deluxe" data-preview-type="1" data-game-id="17932" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/KenoDeluxe.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/KenoDeluxe.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Keno Deluxe</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 100</span>
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
                        <div data-href="6-Poker-Tvgames" class="js_dl_games js_game_info lca-card" data-name="6+ Poker" data-preview-type="1" data-game-id="16404" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/6Poker.png">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/6Poker.png" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">6+ Poker</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
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
                        <div data-href="Keno-GoldenRace-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Keno" data-preview-type="1" data-game-id="17931" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Keno.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Keno.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Keno</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
                                    </div>
                                </div>
                            </div>
                            <div class="lca-card-footer">
                                <div class="lca-card-price-wrapper">
                                    <div class="lca-card-price flex-grow-1">
                                        <span class="lca-limit-count no-rtl-needed">1 - 100</span>
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
                        <div data-href="Wheel-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Wheel of Fortune" data-preview-type="1" data-game-id="503" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/Wheel.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Wheel.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Wheel of Fortune</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
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
                        <div data-href="Wheelbet-Tvbet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Wheelbet" data-preview-type="1" data-game-id="11369" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/Wheelbet.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Wheelbet.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Wheelbet</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
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
                        <div data-href="Lucky6-Tvbet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Lucky6" data-preview-type="1" data-game-id="15993" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/Lucky6.jpg">
                            <div class="lca-card-body-wrapper">
                                <img class="lca-card-body-img" src="/img/Lucky6.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Lucky6</p>
                                        <div class="lca-card-flag-wrapper">
                                        </div>
                                    </div>
                                    <div class="lca-card-badge-wrapper">
                                        <span class="lca-card-badge type-1">Top</span>
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
                                <div class="js_dl_groups lca-menu-link badge_None default active" data-id="2477" data-url="all" data-type-id="15" data-take-count="6">All</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="2473" data-url="poker" data-type-id="12" data-take-count="6">Poker</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="2471" data-url="keno" data-type-id="28" data-take-count="12">Keno</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="2469" data-url="lotterygames" data-type-id="21" data-take-count="6">Lottery Games</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="2465" data-url="mostpopular" data-type-id="5" data-take-count="6">Most Popular</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="2463" data-url="blackjack" data-type-id="11" data-take-count="6">BlackJack</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="2461" data-url="cardgames" data-type-id="35" data-take-count="6">Card Games</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="2459" data-url="dice" data-type-id="34" data-take-count="6">Dice</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="2457" data-url="baccarat" data-type-id="14" data-take-count="6">Baccarat</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="2453" data-url="mostliked" data-type-id="3" data-take-count="6">Most Liked</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="2451" data-url="trendinggames" data-type-id="6" data-take-count="6">Trending Games</div>
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
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="1047" data-url="betgamestv">
                                <span>Bet Games TV</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="1056" data-url="tvbet">
                                <span>TV Bet</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="1427" data-url="atmosfera">
                                <span>Atmosfera</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="3235" data-url="goldenrace">
                                <span>Golden Race</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="11658" data-url="hollywoodtv">
                                <span>Hollywood TV</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="31679" data-url="spribe">
                                <span>Spribe</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="js_games_lobby" class="container lca-games-grid lca-games-lobby grid_2">
                <div class="lca-card-wrapper lca-card-wrapper-50" onclick="giris();" style="opacity: 1;">
                    <div data-href="Keno-GoldenRace-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Keno" data-preview-type="1" data-game-id="17931" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/Keno.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Keno.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Keno</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 100</span>
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
                    <div data-href="Keno-Deluxe-ondemand-GoldenRace-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Keno Deluxe" data-preview-type="1" data-game-id="17932" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/GoldenRace/KenoDeluxe.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/KenoDeluxe.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Keno Deluxe</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 100</span>
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
                    <div data-href="Aviator-Spribe-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Aviator" data-preview-type="1" data-game-id="29959" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/Spribe/Aviator.webp" data-image="/img/Games/Spribe/Aviator.webp">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Aviator.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Aviator</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                                    <span class="js_game_likes_count">54</span>
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
                    <div data-href="Andar-Bahar-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Andar Bahar" data-preview-type="1" data-game-id="20791" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/AndarBahar.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/AndarBahar.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Andar Bahar</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                                    <span class="js_game_likes_count">56</span>
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
                    <div data-href="Fruit-Race-Tvbet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Fruit Race" data-preview-type="1" data-game-id="17851" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/FruitRace.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/FruitRace.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Fruit Race</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="Lucky6-Tvbet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Lucky6" data-preview-type="1" data-game-id="15993" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/Lucky6.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Lucky6.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Lucky6</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="1Bet-tvbet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="1Bet" data-preview-type="1" data-game-id="16062" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/1Bet.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/1Bet.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">1Bet</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="Keno-TvBet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Keno" data-preview-type="1" data-game-id="11368" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/Keno.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Keno.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Keno</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="Wheelbet-Tvbet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Wheelbet" data-preview-type="1" data-game-id="11369" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/Wheelbet.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Wheelbet.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Wheelbet</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-100" style="opacity: 1;">
                    <div data-href="Poker-TVBet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Poker" data-preview-type="1" data-game-id="11370" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/Poker.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Poker.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Poker</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="Blackjack-TVBet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Blackjack" data-preview-type="1" data-game-id="11371" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/Blackjack.webp">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Blackjack.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                                    <span class="js_game_likes_count">11</span>
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
                    <div data-href="War-Of-Elements-TVBet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="War Of Elements" data-preview-type="1" data-game-id="11372" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/WarOfElements.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/WarOfElements.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">War Of Elements</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="5Bet-TVBet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="5Bet" data-preview-type="1" data-game-id="11373" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/5Bet.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/5Bet.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">5Bet</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="7Bet-TvBet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="7Bet" data-preview-type="1" data-game-id="11374" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/7Bet.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/7Bet.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">7Bet</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="6-Poker-Tvgames" class="js_dl_games js_game_info lca-card" data-name="6+ Poker" data-preview-type="1" data-game-id="16404" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/6Poker.png">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/6Poker.png" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">6+ Poker</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="Lucky6-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Lucky 6" data-preview-type="1" data-game-id="10371" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/Lucky6.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Lucky6.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Lucky 6</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="Dice-Duel-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Dice Duel" data-preview-type="1" data-game-id="10370" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/DiceDuel.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/DiceDuel.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Dice Duel</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="War-of-Bets-Tvgames" class="js_dl_games js_game_info lca-card" data-name="War of Bets" data-preview-type="1" data-game-id="506" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/WarofBets.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/WarofBets.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">War of Bets</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="Baccarat-Betgames-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Baccarat" data-preview-type="1" data-game-id="505" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/Baccarat.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Baccarat.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-100" style="opacity: 1;">
                    <div data-href="betonpoker-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Bet On Poker" data-preview-type="1" data-game-id="504" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/BetOnPoker.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/BetOnPoker.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Bet On Poker</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="Wheel-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Wheel of Fortune" data-preview-type="1" data-game-id="503" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/Wheel.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Wheel.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Wheel of Fortune</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="Speedy7-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Speedy 7" data-preview-type="1" data-game-id="502" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/Speedy7.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Speedy7.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speedy 7</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="Lucky5-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Lucky 5" data-preview-type="1" data-game-id="501" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/Lucky5.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Lucky5.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Lucky 5</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                                    <span class="js_game_likes_count">22</span>
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
                    <div data-href="Lucky7-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Lucky 7" data-preview-type="1" data-game-id="500" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/Lucky7.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Lucky7.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Lucky 7</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag tr" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="keno-Atmosfera-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Keno" data-preview-type="1" data-game-id="17982" data-hasdemo="true" data-hasjackpot="false" data-bimage="/img/Background/Atmosfera/Keno.jpg" data-image="/img/Games/Atmosfera/Keno.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Keno.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Keno</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="Andar-Bahar-Tvbet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Andar Bahar" data-preview-type="1" data-game-id="22260" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/AndarBahar.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/AndarBahar.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Andar Bahar</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 5K</span>
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
                    <div data-href="Teen-Patti-TVbet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Teen Patti" data-preview-type="1" data-game-id="22318" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/TeenPatti.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/TeenPatti.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Teen Patti</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="Classic-Wheel-Betgames-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Classic Wheel" data-preview-type="1" data-game-id="21557" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Betgames/ClassicWheel.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/ClassicWheel.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Classic Wheel</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
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
                    <div data-href="Super7-Hollywood-TV-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Super7" data-preview-type="1" data-game-id="25266" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/MrSlotty/Super7.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Super7.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Super7</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1.8 - 9K</span>
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
                    <div data-href="Super5-Hollywood-TV-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Super5" data-preview-type="1" data-game-id="25265" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/MrSlotty/Super5.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Super5.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Super5</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1.8 - 9K</span>
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
                    <div data-href="Spin2Wheels-Hollywood-TV-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Spin2Wheels" data-preview-type="1" data-game-id="25264" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/MrSlotty/Spin2Wheels.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Spin2Wheels.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Spin2Wheels</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1.8 - 1.8K</span>
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
                    <div data-href="Mega7-Hollywood-TV-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Mega7" data-preview-type="1" data-game-id="25263" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/MrSlotty/Mega7.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Mega7.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Mega7</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1.8 - 9K</span>
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
                    <div data-href="Mega6-Hollywood-TV-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Mega6" data-preview-type="1" data-game-id="25262" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/MrSlotty/Mega6.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Mega6.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Mega6</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1.8 - 9K</span>
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
                    <div data-href="Keno-Deluxe-Hollywood-TV-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Keno Deluxe" data-preview-type="1" data-game-id="25261" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/MrSlotty/KenoDeluxe.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/KenoDeluxe.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Keno Deluxe</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1.8 - 9K</span>
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
                    <div data-href="Keno-Hollywood-TV-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Keno" data-preview-type="1" data-game-id="25260" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/MrSlotty/Keno.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/Keno.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Keno</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1.8 - 9K</span>
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
                    <div data-href="Live-Roulette-Hollywood-TV-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Live Roulette" data-preview-type="1" data-game-id="25259" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/MrSlotty/LiveRoulette.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/LiveRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Live Roulette</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1.8 - 1.8K</span>
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
                    <div data-href="Spin-2-Wheels-TVBet-Tvgames" class="js_dl_games js_game_info lca-card" data-name="Spin 2 Wheels" data-preview-type="1" data-game-id="28484" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/TVBet/28484_Spin2Wheels.jpg">
                        <div class="lca-card-body-wrapper">
                            <img class="lca-card-body-img" src="/img/28484_Spin2Wheels.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Spin 2 Wheels</p>
                                    <div class="lca-card-flag-wrapper">
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                    <span class="lca-card-badge type-1">Top</span>
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">1 - 6K</span>
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
            </div>
        </div>
    </div>
    <div id="js_dl_bottom_nav" class="casino__fixed_menu fixed w100">
        <div class="more_menu_btns_content more-cont-item-4" id="js_more_menu_btns">
            <div class="more_menu_links_content" id="js_more_menu_links_cont">
                <a href="/tr/Lobby/Livecasino/Main" class="ui-link">
          <span class="fixed_menu__icon ic_livecasino">
          </span>Canlı Casino</a>
                <a href="/tr/Lobby/Virtualsport/Main" class="ui-link">
          <span class="fixed_menu__icon ic_virtualsport">
          </span>Sanal Sporlar</a>
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
            <a class="fixed_menu__li d-flex flexcol align-items-center justify-content-center js_dl_bottom_menu_items active ui-link" data-tabid="Main" id="js_dl_current">
        <span class="fixed_menu__icon ic_tvgames">
        </span>
                <span class="fixed_menu__text">TV Oyunları</span>
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
            <a class="yandex_mail ui-link" href="cdn-cgi/l/email-protection.html#fd99988e899896bd9a8f9c93998d9c8e959c9f9889d39e9290" target="_blank" rel="noopener"></a>
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
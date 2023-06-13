<?php include 'modules/header.php';?>



<div style="margin-top:80px">
    <div id="js_dl_content" class="lca-main-content has_card_footer">
        <div class="isLobby hidden">
        </div>
        <div class="js_billboard_banner_cont swiper dynamicBanners banners_billboard with_shadow_slider swiper-initialized swiper-horizontal swiper-ios swiper-backface-hidden">
            <div class="banners_billboard_slider swiper-wrapper" id="swiper-wrapper-afccc98456106fe23" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1170px, 0px, 0px);">
                <a class="dynamicBanners_item swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" href="#" target="_self" data-swiper-slide-index="1" style="width: 390px;" role="group" aria-label="2 / 2">
                    <img class="dynamicBanners_img swiper-lazy swiper-lazy-loaded" src="/img/power%20mobil.png">
                    <div class="carousel_caption dynamicBanners_caption">
                    </div>
                </a>
                <a class="dynamicBanners_item swiper-slide swiper-slide-duplicate-active" href="#" target="_self" data-swiper-slide-index="0" style="width: 390px;" role="group" aria-label="1 / 2">
                    <img class="dynamicBanners_img swiper-lazy swiper-lazy-loaded" src="/img/studio%20mobil%20yeni.jpg">
                    <div class="carousel_caption dynamicBanners_caption">
                    </div>
                </a>
                <a class="dynamicBanners_item swiper-slide swiper-slide-prev swiper-slide-duplicate-next" href="#" target="_self" data-swiper-slide-index="1" style="width: 390px;" role="group" aria-label="2 / 2">
                    <img class="dynamicBanners_img swiper-lazy swiper-lazy-loaded" src="/img/power%20mobil.png">
                    <div class="carousel_caption dynamicBanners_caption">
                    </div>
                </a>
                <a class="dynamicBanners_item swiper-slide swiper-slide-duplicate swiper-slide-active" href="#" target="_self" data-swiper-slide-index="0" role="group" aria-label="1 / 2" style="width: 390px;">
                    <img class="dynamicBanners_img swiper-lazy swiper-lazy-loaded" src="/img/studio%20mobil%20yeni.jpg">
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
        <div class="lca-top_winners_block ">
            <div class="lca-top_winners_type_content">
                <div class="lca-top_winners_item_names js_mobile_top_winners_item_names active" data-got-data="true" data-lobby-widget-type="DailyTopWinners" data-wins-type="LiveDealer">Günün EN ÇOK KAZANANLARI
                    <span class="bg-primary">
          </span>
                </div>
                <div class="lca-top_winners_item_names js_mobile_top_winners_item_names" data-lobby-widget-type="MonthlyTopWinners" data-wins-type="LiveDealer">AYIN EN ÇOK KAZANANLARI
                    <span class="bg-primary">
          </span>
                </div>
            </div>
            <div id="js_mobile_top_winners_content">
                <div class="lca-top_winners__page js_mobile_top_winners_item active" data-lobby-widget-type="DailyTopWinners">
                    <div class="lca-top_winners__game_block">
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Auto-Roulette-1-Pragmatic-Livecasino">
                                    <img src="/img/AutoRoulette1.webp" alt="Auto-Roulette 1" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 3****77</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">90 000.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 04:06</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Auto-Roulette-1-Pragmatic-Livecasino">
                                    <img src="/img/AutoRoulette1.webp" alt="Auto-Roulette 1" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 3****77</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">90 000.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 04:12</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Auto-Roulette-1-Pragmatic-Livecasino">
                                    <img src="/img/AutoRoulette1.webp" alt="Auto-Roulette 1" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 3****77</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">90 000.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 03:58</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Auto-Roulette-1-Pragmatic-Livecasino">
                                    <img src="/img/AutoRoulette1.webp" alt="Auto-Roulette 1" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 3****77</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">90 000.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 03:51</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Auto-Roulette-1-Pragmatic-Livecasino">
                                    <img src="/img/AutoRoulette1.webp" alt="Auto-Roulette 1" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 3****77</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">72 000.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 03:37</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Crazy-Time-Evolution-Shared-Livecasino">
                                    <img src="/img/CrazyTime.jpg" alt="Crazy Time" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 3****15</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">40 020.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 03:23</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Auto-Roulette-La-Partage-Evolution-Shared-Livecasino">
                                    <img src="/img/AutoRouletteLaPartage.jpg" alt="Auto-Roulette La Partage" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 3****77</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">36 000.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 04:32</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Auto-Roulette-La-Partage-Evolution-Shared-Livecasino">
                                    <img src="/img/AutoRouletteLaPartage.jpg" alt="Auto-Roulette La Partage" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 3****77</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">36 000.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 03:28</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Speed-Blackjack-6-Ruby-PragmaticPlay-Livecasino">
                                    <img src="/img/SpeedBlackjack6Ruby.webp" alt="Speed Blackjack 6 - Ruby" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 6****46</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">24 600.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 04:06</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Speed-Blackjack-6-Ruby-PragmaticPlay-Livecasino">
                                    <img src="/img/SpeedBlackjack6Ruby.webp" alt="Speed Blackjack 6 - Ruby" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 6****46</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">19 375.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 04:36</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Speed-Blackjack-6-Ruby-PragmaticPlay-Livecasino">
                                    <img src="/img/SpeedBlackjack6Ruby.webp" alt="Speed Blackjack 6 - Ruby" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 6****46</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">18 500.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 04:32</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Speed-Blackjack-6-Ruby-PragmaticPlay-Livecasino">
                                    <img src="/img/SpeedBlackjack6Ruby.webp" alt="Speed Blackjack 6 - Ruby" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 6****46</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">18 000.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 04:20</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Speed-Blackjack-6-Ruby-PragmaticPlay-Livecasino">
                                    <img src="/img/SpeedBlackjack6Ruby.webp" alt="Speed Blackjack 6 - Ruby" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 6****46</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">17 750.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 04:17</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Speed-Blackjack-6-Ruby-PragmaticPlay-Livecasino">
                                    <img src="/img/SpeedBlackjack6Ruby.webp" alt="Speed Blackjack 6 - Ruby" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 6****46</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">16 800.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 04:02</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Speed-Blackjack-6-Ruby-PragmaticPlay-Livecasino">
                                    <img src="/img/SpeedBlackjack6Ruby.webp" alt="Speed Blackjack 6 - Ruby" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 6****46</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">16 400.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 04:26</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Crazy-Time-Evolution-Shared-Livecasino">
                                    <img src="/img/CrazyTime.jpg" alt="Crazy Time" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 5****66</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">16 008.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 03:23</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Speed-Blackjack-6-Ruby-PragmaticPlay-Livecasino">
                                    <img src="/img/SpeedBlackjack6Ruby.webp" alt="Speed Blackjack 6 - Ruby" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 6****46</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">16 000.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 04:00</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Monopoly-Big-Baller-Evolution-Livecasino">
                                    <img src="/img/MonopolyBigBaller.jpg" alt="Monopoly Big Baller" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 4****45</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">15 300.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 03:57</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Speed-Blackjack-6-Ruby-PragmaticPlay-Livecasino">
                                    <img src="/img/SpeedBlackjack6Ruby.webp" alt="Speed Blackjack 6 - Ruby" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 6****46</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">14 500.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 04:31</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Speed-Blackjack-6-Ruby-PragmaticPlay-Livecasino">
                                    <img src="/img/SpeedBlackjack6Ruby.webp" alt="Speed Blackjack 6 - Ruby" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 6****46</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">14 300.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 04:30</div>
                            </div>
                        </div>
                        <div class="lca-top_winners__game flex alCen">
                            <div class="lca-top_winners__img">
                                <a class="lca-top_winners__img_link 222 js_dl_bw_play" data-href="/play/real/Speed-Blackjack-6-Ruby-PragmaticPlay-Livecasino">
                                    <img src="/img/SpeedBlackjack6Ruby.webp" alt="Speed Blackjack 6 - Ruby" class="js_top_winners_img lca-top_winners_img">
                                </a>
                            </div>
                            <div class="lca-top_winners__text">
                                <div class="lca-top_winners__date text-primary ">ID 6****46</div>
                                <div class="lca-top_winners__value text-primary">
                                    <span class="lca-top_winners__value_split">13 700.0</span>
                                    <span class="">TRY</span>
                                </div>
                                <div class="lca-top_winners__bet">29 Oca, 2023 04:04</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="js_lobby_groups_cont">
            <div class="container">
                <h2 class="lca-category-title">En Beğenilenler</h2>
            </div>

            <div class="mw-100 scroll-x">
                <div class="scrolled-container d-flex js_dl_mLkd_games js_lobby_groups lca-games-grid" id="js_lobby_group_497" data-preview-type="1" data-take-count="6" data-lobbyurl="Livecasino" data-type-id="3" data-id="497" data-page="5" data-has-next="true">
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Digitain-Roulette-Digitainlivecasino-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Digitain Roulette" data-preview-type="1" data-game-id="28634" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainLiveCasino/DigitainRoulette.webp">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/DigitainRoulette.webp" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Digitain Roulette</p>
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
                                        <span class="js_game_likes_count">544</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Lightning-Roulette-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Lightning Roulette" data-preview-type="1" data-game-id="22427" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/LightningRoulette.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/LightningRoulette.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Lightning Roulette</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">2 - 20K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">491</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Digitain-Blackjack-Digitainlivecasino-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Digitain Blackjack" data-preview-type="1" data-game-id="19922" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainLiveCasino/19922_DigitainBlackjack.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/19922_DigitainBlackjack.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Digitain Blackjack</p>
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
                                        <span class="js_game_likes_count">396</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Auto-Roulette-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Auto-Roulette" data-preview-type="1" data-game-id="22526" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/AutoRoulette.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/AutoRoulette.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Auto-Roulette</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">1.6 - 20K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">341</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Crazy-Time-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Crazy Time" data-preview-type="1" data-game-id="22497" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/CrazyTime.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/CrazyTime.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Crazy Time</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">302</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Mega-Roulette-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Mega Roulette" data-preview-type="1" data-game-id="19719" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/partners/1093/Games/Pragmatic/MegaRoulette.webp">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/MegaRoulette.webp" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Mega Roulette</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">0.5 - 25K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">143</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="BlackJack-7-LuckyStreak-Livecasino" class="js_dl_games js_game_info lca-card" data-name="BlackJack 7" data-preview-type="1" data-game-id="19513" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/LuckyStreak/BlackJack7.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/BlackJack7.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">BlackJack 7</p>
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
                                        <span class="lca-limit-count no-rtl-needed">30 - 750</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">126</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Sweet-Bonanza-Candyland-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Sweet Bonanza Candyland" data-preview-type="1" data-game-id="22698" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/partners/1093/Games/Pragmatic/SweetBonanzaCandyland.webp">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/SweetBonanzaCandyland.webp" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Sweet Bonanza Candyland</p>
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
                                        <span class="lca-limit-count no-rtl-needed">2 - 30K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">122</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="First-Person-Lightning-Roulette-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="First Person Lightning Roulette" data-preview-type="1" data-game-id="22451" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/FirstPersonLightningRoulette.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/FirstPersonLightningRoulette.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">First Person Lightning Roulette</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">5 - 20K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">105</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Tombala-Tombala-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Tombala" data-preview-type="1" data-game-id="13788" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Tombala/13788_Tombala.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/13788_Tombala.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Tombala</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">1 - 300</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">91</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Turkish-Lightning-Roulette-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Turkish Lightning Roulette" data-preview-type="1" data-game-id="22521" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/TurkishLightningRoulette.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/TurkishLightningRoulette.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Turkish Lightning Roulette</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">10 - 300K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">90</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Auto-Roulette-1-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Auto-Roulette 1" data-preview-type="1" data-game-id="17836" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/partners/1093/Games/Pragmatic/AutoRoulette1.webp">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/AutoRoulette1.webp" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Auto-Roulette 1</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">0.5 - 25K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">84</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Blackjack-Quickseat-Digitainlivecasino-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Quick seat" data-preview-type="1" data-game-id="28880" data-hasdemo="false" data-hasjackpot="false" data-bimage="/img/Background/DigitainLiveCasino/BlackjackQuickseat.jpg" data-image="/img/Games/DigitainLiveCasino/BlackjackQuickseat.png">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/BlackjackQuickseat.png" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Blackjack Quick seat</p>
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
                                        <span class="lca-limit-count no-rtl-needed">100 - 5K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">76</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="XXXtreme-Lightning-Roulette-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="XXXtreme Lightning Roulette" data-preview-type="1" data-game-id="28005" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/XXXtremeLightningRoulette.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/XXXtremeLightningRoulette.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">XXXtreme Lightning Roulette</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag es" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">2 - 50K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">71</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="MONOPOLY-Live-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="MONOPOLY" data-preview-type="1" data-game-id="22426" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/MONOPOLYLive.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/MONOPOLYLive.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">MONOPOLY</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
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
                                        <span class="js_game_likes_count">63</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Monopoly-Big-Baller-Evolution-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Monopoly Big Baller" data-preview-type="1" data-game-id="29841" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/MonopolyBigBaller.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/MonopolyBigBaller.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Monopoly Big Baller</p>
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
                                        <span class="lca-limit-count no-rtl-needed">1.2 - 25K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">52</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Live-Lightning-Blackjack-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Lightning Blackjack" data-preview-type="1" data-game-id="25410" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/LiveLightningBlackjack.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/LiveLightningBlackjack.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Lightning Blackjack</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag aeb" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag am" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ar" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag de" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag fa" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag he" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag hi" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ko" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ku" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">10 - 10K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">52</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Crazy-Coin-Flip-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Crazy Coin Flip" data-preview-type="1" data-game-id="28430" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/28430_CrazyCoinFlip.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/28430_CrazyCoinFlip.webp" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Crazy Coin Flip</p>
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
                                        <span class="lca-limit-count no-rtl-needed">1 - 15K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">51</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Auto-Roulette-La-Partage-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Auto-Roulette La Partage" data-preview-type="1" data-game-id="22527" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/AutoRouletteLaPartage.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/AutoRouletteLaPartage.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Auto-Roulette La Partage</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">1.6 - 20K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">44</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Roulette-Turkey-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Roulette 6 - Turkish" data-preview-type="1" data-game-id="17841" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Roulette6Turkish.webp">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/Roulette6Turkish.webp" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Roulette 6 - Turkish</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">0.5 - 25K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">38</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Immersive-Roulette-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Immersive Roulette" data-preview-type="1" data-game-id="22441" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/ImmersiveRoulette.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/ImmersiveRoulette.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Immersive Roulette</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">10 - 30K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">36</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Dynamic-Roulette-120-EGT-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Dynamic Roulette 120x" data-preview-type="1" data-game-id="22973" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EGT/DynamicRoulette120x.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/DynamicRoulette120x.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Dynamic Roulette 120x</p>
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
                                        <span class="lca-limit-count no-rtl-needed">1 - 30K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">31</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Tombala-Slot-Tombala-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Tombala Slot" data-preview-type="1" data-game-id="13787" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Tombala/13787_TombalaSlot1.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/13787_TombalaSlot1.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Tombala Slot</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">0.5 - 3K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">30</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Mega-Wheel-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Mega Wheel" data-preview-type="1" data-game-id="18685" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/partners/1093/Games/Pragmatic/MegaWheel.webp">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/MegaWheel.webp" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Mega Wheel</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">0.5 - 25K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">29</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Onyx-Roulette-EGT-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Onyx Roulette" data-preview-type="1" data-game-id="24830" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EGT/OnyxRoulette.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/OnyxRoulette.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Onyx Roulette</p>
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
                                        <span class="lca-limit-count no-rtl-needed">1 - 30K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">23</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Roulette-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Roulette" data-preview-type="1" data-game-id="22424" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/Roulette.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/Roulette.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Roulette</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">5 - 30K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">19</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="English-Casino-Holdem-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="English Casino Hold'em" data-preview-type="1" data-game-id="15943" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/CasinoHoldem.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/CasinoHoldem.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">English Casino Hold'em</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">10 - 6.5K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">18</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Live-Speed-Roulette-EGT-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Live Speed Roulette" data-preview-type="1" data-game-id="24831" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EGT/LiveSpeedRoulette.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/LiveSpeedRoulette.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Live Speed Roulette</p>
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
                                        <span class="lca-limit-count no-rtl-needed">2 - 60K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">18</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Andar-Bahar-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Andar Bahar" data-preview-type="1" data-game-id="22181" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/AndarBahar.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/AndarBahar.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Andar Bahar</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">1 - 25K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">17</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Over-Under-Tombala-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Over Under" data-preview-type="1" data-game-id="13786" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Tombala/13786_OverUnder1.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/13786_OverUnder1.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Over Under</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">5 - 1K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">17</span>
                                    </div>
                                    <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                    <span class="star_icon js_game_fav_icon ">
                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="PowerUp-Roulette-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="PowerUp Roulette" data-preview-type="1" data-game-id="30942" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/partners/1093/Games/Pragmatic/PowerUpRoulette.webp">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/PowerUpRoulette.webp" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">PowerUp Roulette</p>
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
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Casino-Marina-Roulette-2-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Casino Marina Roulette 2" data-preview-type="1" data-game-id="19443" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/CasinoMarinaRoulette2.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/CasinoMarinaRoulette2.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Casino Marina Roulette 2</p>
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
                                        <span class="lca-limit-count no-rtl-needed">1 - 5K</span>
                                        <span class="currency_icon try">
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
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Black-Russian-Blackjack-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Black Russian Blackjack" data-preview-type="1" data-game-id="19445" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/BlackRussianBlackjack.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/BlackRussianBlackjack.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Black Russian Blackjack</p>
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
                                        <span class="lca-limit-count no-rtl-needed">200 - 20K</span>
                                        <span class="currency_icon try">
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
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Mega-Ball-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Mega Ball" data-preview-type="1" data-game-id="22504" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/MegaBall.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/MegaBall.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Mega Ball</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">1 - 1K</span>
                                        <span class="currency_icon try">
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
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Türkçe-Rulet-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Türkçe Rulet" data-preview-type="1" data-game-id="22389" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/TrkeRulet.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/TrkeRulet.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Türkçe Rulet</p>
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
                                        <span class="lca-limit-count no-rtl-needed">5 - 20K</span>
                                        <span class="currency_icon try">
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
                    <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                        <div data-href="Instant-Roulette-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Instant Roulette" data-preview-type="1" data-game-id="22502" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/InstantRoulette.jpg">
                            <div class="lca-card-body-wrapper" onclick="giris();">
                                <img class="lca-card-body-img" src="/img/InstantRoulette.jpg" alt="">
                                <div class="lca-card-body">
                                    <div class="lca-card-header d-flex">
                                        <p class="m-0 flex-grow-1">Instant Roulette</p>
                                        <div class="lca-card-flag-wrapper">
                      <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                      </span>
                                            <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                        <span class="lca-limit-count no-rtl-needed">1 - 20K</span>
                                        <span class="currency_icon try">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                    <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                    <span class="like_icon js_game_like_icon ">
                    </span>
                                        <span class="js_game_likes_count">15</span>
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
                                <div class="js_dl_groups lca-menu-link badge_None default active" data-id="488" data-url="all" data-type-id="15" data-take-count="6">Tümü</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="489" data-url="mostpopular" data-type-id="5" data-take-count="6">En Popüler</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="496" data-url="trendinggames" data-type-id="6" data-take-count="6">Yükselişte Olan Oyunlar</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="491" data-url="blackjack" data-type-id="11" data-take-count="6">BlackJack</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="23599" data-url="football" data-type-id="27" data-take-count="6">Football</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="490" data-url="roulette" data-type-id="10" data-take-count="6">Roulette</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="492" data-url="poker" data-type-id="12" data-take-count="6">Poker</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="493" data-url="tvshow" data-type-id="13" data-take-count="6">TV Show</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="494" data-url="baccarat" data-type-id="14" data-take-count="6">Baccarat</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="495" data-url="jackpot" data-type-id="4" data-take-count="6">Jackpot</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="497" data-url="mostliked" data-type-id="3" data-take-count="6">En Beğenilenler</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="23957" data-url="custom" data-type-id="45" data-take-count="6">Drops & Wins</div>
                            </li>
                            <li class="lca-menu-item">
                                <div class="js_dl_groups lca-menu-link badge_None" data-id="500" data-url="other" data-type-id="8" data-take-count="6">Diğer</div>
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
                            <div class="js_dl_categories lca-submenu-link badge_New" data-id="26670" data-url="digitainlive">
                                <span>Digitain Live</span>
                                <span class="js_dl_cat_count">
                </span>
                                <span class="lca-menu-badge">New</span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="3335" data-url="evolution">
                                <span>Evolution</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="174" data-url="tombala">
                                <span>Tombala</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_New" data-id="3613" data-url="amusnetinteractiveegt">
                                <span>Amusnet Interactive (Egt)</span>
                                <span class="js_dl_cat_count">
                </span>
                                <span class="lca-menu-badge">New</span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="177" data-url="luckystreak">
                                <span>Lucky Streak</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="176" data-url="ezugi">
                                <span>Ezugi</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="173" data-url="vivogaming">
                                <span>Vivogaming</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="175" data-url="pragmaticplay">
                                <span>Pragmatic Play</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="1425" data-url="atmosfera">
                                <span>Atmosfera</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="7457" data-url="absolutegaming">
                                <span>Absolute Gaming</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="9040" data-url="sagaming">
                                <span>Sa Gaming</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                        <li class="lca-submenu-item list-inline-item">
                            <div class="js_dl_categories lca-submenu-link badge_None" data-id="32538" data-url="asiagaming">
                                <span>AsiaGaming</span>
                                <span class="js_dl_cat_count">
                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="js_games_lobby" class="container lca-games-grid lca-games-lobby grid_2">
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Lightning-Roulette-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Lightning Roulette" data-preview-type="1" data-game-id="22427" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/LightningRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/LightningRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Lightning Roulette</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">2 - 20K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">491</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Live-Lightning-Blackjack-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Lightning Blackjack" data-preview-type="1" data-game-id="25410" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/LiveLightningBlackjack.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/LiveLightningBlackjack.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Lightning Blackjack</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag aeb" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag am" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ar" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag de" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag fa" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag he" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag hi" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ko" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ku" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 10K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">52</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Live-Roulette-Russian-EGT-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Live Roulette – Russian" data-preview-type="1" data-game-id="33484" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EGT/LiveRouletteRussian.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/LiveRouletteRussian.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Live Roulette – Russian</p>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Speed-Blackjack-14-Azure-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Speed Blackjack 14 - Azure" data-preview-type="1" data-game-id="34502" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/SpeedBlackjack14Azure.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SpeedBlackjack14Azure.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speed Blackjack 14 - Azure</p>
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Speed-Blackjack-11-Azure-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Speed Blackjack 11 - Azure" data-preview-type="1" data-game-id="34501" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/SpeedBlackjack11Azure.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SpeedBlackjack11Azure.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speed Blackjack 11 - Azure</p>
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
                                    <span class="lca-limit-count no-rtl-needed">100 - 25K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Speed-Blackjack-10-Ruby-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Speed Blackjack 10 - Ruby" data-preview-type="1" data-game-id="34500" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/SpeedBlackjack10Ruby.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SpeedBlackjack10Ruby.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speed Blackjack 10 - Ruby</p>
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
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Speed-Blackjack-9-Ruby-Pragatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Speed Blackjack 9 - Ruby" data-preview-type="1" data-game-id="34499" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/SpeedBlackjack9Ruby.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SpeedBlackjack9Ruby.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speed Blackjack 9 - Ruby</p>
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
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Speed-Blackjack-8-Ruby-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Speed Blackjack 8 - Ruby" data-preview-type="1" data-game-id="34498" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/SpeedBlackjack8Ruby.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SpeedBlackjack8Ruby.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speed Blackjack 8 - Ruby</p>
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
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Speed-Blackjack-7-Ruby-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Speed Blackjack 7 - Ruby" data-preview-type="1" data-game-id="34497" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/SpeedBlackjack7Ruby.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SpeedBlackjack7Ruby.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speed Blackjack 7 - Ruby</p>
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
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                    <div data-href="Speed-Blackjack-6-Ruby-PragmaticPlay-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Speed Blackjack 6 - Ruby" data-preview-type="1" data-game-id="34496" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/SpeedBlackjack6Ruby.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SpeedBlackjack6Ruby.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speed Blackjack 6 - Ruby</p>
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
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Speed-BlackJack-12-Azure-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Speed BlackJack 12 - Azure" data-preview-type="1" data-game-id="34454" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/SpeedBlackJack12Azure.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SpeedBlackJack12Azure.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speed BlackJack 12 - Azure</p>
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
                                    <span class="lca-limit-count no-rtl-needed">100 - 25K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-57-Azure-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 57 - Azure" data-preview-type="1" data-game-id="34495" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Blackjack57Azure.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack57Azure.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 57 - Azure</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-58-Azure-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 58 - Azure" data-preview-type="1" data-game-id="34494" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Blackjack58Azure.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack58Azure.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 58 - Azure</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">25 - 5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-59-Azure-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 59 - Azure" data-preview-type="1" data-game-id="34492" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Blackjack59Azure.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack59Azure.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 59 - Azure</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">25 - 5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Blackjack-60-Azure-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 60 - Azure" data-preview-type="1" data-game-id="34489" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Blackjack60Azure.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack60Azure.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 60 - Azure</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-61-Azure-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 61 - Azure" data-preview-type="1" data-game-id="34486" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Blackjack61Azure.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack61Azure.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 61 - Azure</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjac-62-Azure-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 62 - Azure" data-preview-type="1" data-game-id="34483" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Blackjack62Azure.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack62Azure.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 62 - Azure</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-63-Azure-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 63 - Azure" data-preview-type="1" data-game-id="34482" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Blackjack63Azure.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack63Azure.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 63 - Azure</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Hippodrome-Tombala-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Hippodrome" data-preview-type="1" data-game-id="34135" data-hasdemo="false" data-hasjackpot="false" data-bimage="/img/Background/Tombala/Hippodrome.webp" data-image="/img/Games/Tombala/Hippodrome.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Hippodrome.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Hippodrome</p>
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
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 500</span>
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
                    <div data-href="Salon-Prive-Blackjack-G-Evolution-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Salon Prive Blackjack G" data-preview-type="1" data-game-id="33938" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/SalonPriveBlackjackG.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SalonPriveBlackjackG.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Salon Prive Blackjack G</p>
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
                                    <span class="lca-limit-count no-rtl-needed">100K - 1M</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Digitain-Roulette-Digitainlivecasino-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Digitain Roulette" data-preview-type="1" data-game-id="28634" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainLiveCasino/DigitainRoulette.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/DigitainRoulette.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Digitain Roulette</p>
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
                                    <span class="js_game_likes_count">544</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-Quickseat-Digitainlivecasino-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Quick seat" data-preview-type="1" data-game-id="28880" data-hasdemo="false" data-hasjackpot="false" data-bimage="/img/Background/DigitainLiveCasino/BlackjackQuickseat.jpg" data-image="/img/Games/DigitainLiveCasino/BlackjackQuickseat.png">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackQuickseat.png" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Quick seat</p>
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
                                    <span class="lca-limit-count no-rtl-needed">100 - 5K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">76</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Digitain-Blackjack-Digitainlivecasino-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Digitain Blackjack" data-preview-type="1" data-game-id="19922" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainLiveCasino/19922_DigitainBlackjack.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/19922_DigitainBlackjack.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Digitain Blackjack</p>
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
                                    <span class="js_game_likes_count">396</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Teen-Patti-VivoGaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Teen Patti" data-preview-type="1" data-game-id="29906" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/TeenPatti.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/TeenPatti.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Teen Patti</p>
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
                                    <span class="lca-limit-count no-rtl-needed">100 - 4K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="MONOPOLY-Live-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="MONOPOLY" data-preview-type="1" data-game-id="22426" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/MONOPOLYLive.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/MONOPOLYLive.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">MONOPOLY</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
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
                                    <span class="js_game_likes_count">63</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-52-Ruby-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 52 - Ruby" data-preview-type="1" data-game-id="33049" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Blackjack52Ruby.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack52Ruby.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 52 - Ruby</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-53-Ruby-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 53 - Ruby" data-preview-type="1" data-game-id="33048" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Blackjack53Ruby.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack53Ruby.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 53 - Ruby</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-54-Ruby-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 54 - Ruby" data-preview-type="1" data-game-id="33047" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Blackjack54Ruby.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack54Ruby.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 54 - Ruby</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-55-Ruby-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 55 - Ruby" data-preview-type="1" data-game-id="33046" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Blackjack55Ruby.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack55Ruby.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 55 - Ruby</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                    <div data-href="Blackjack-56-Ruby-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 56 - Ruby" data-preview-type="1" data-game-id="33045" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Blackjack56Ruby.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack56Ruby.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 56 - Ruby</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Aladdin-Roulette-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Aladdin Roulette" data-preview-type="1" data-game-id="17321" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/VARoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/VARoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Aladdin Roulette</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">4 - 5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-C08-Sagaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat C08" data-preview-type="1" data-game-id="32339" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/MrSlotty/BaccaratC08.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratC08.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat C08</p>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-C07-Sagaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat C07" data-preview-type="1" data-game-id="32338" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/MrSlotty/BaccaratC07.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratC07.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat C07</p>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-C06-Sagaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat C06" data-preview-type="1" data-game-id="32337" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/MrSlotty/BaccaratC06.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratC06.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat C06</p>
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Baccarat-C05-Sagaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat C05" data-preview-type="1" data-game-id="32336" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/MrSlotty/BaccaratC05.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratC05.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat C05</p>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-C04-Sagaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat C04" data-preview-type="1" data-game-id="32335" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/MrSlotty/BaccaratC04.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratC04.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat C04</p>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-C03-Sagaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat C03" data-preview-type="1" data-game-id="32334" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/MrSlotty/BaccaratC03.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratC03.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat C03</p>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-C02-Sagaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat C02" data-preview-type="1" data-game-id="32333" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/MrSlotty/BaccaratC02.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratC02.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat C02</p>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-C01-Sagaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat C01" data-preview-type="1" data-game-id="32332" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/MrSlotty/BaccaratC01.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratC01.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat C01</p>
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
                                    <span class="lca-limit-count no-rtl-needed">100 - 25K</span>
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
                    <div data-href="Classic-Speed-Blackjack-23-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Classic Speed Blackjack 23" data-preview-type="1" data-game-id="22570" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/ClassicSpeedBlackjack23.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/ClassicSpeedBlackjack23.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Classic Speed Blackjack 23</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Classic-Speed-Blackjack-5-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Classic Speed Blackjack 5" data-preview-type="1" data-game-id="22467" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/22467_ClassicSpeedBlackjack5.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/22467_ClassicSpeedBlackjack5.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Classic Speed Blackjack 5</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Dead-or-Alive-Saloon-Evolution-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Dead or Alive Saloon" data-preview-type="1" data-game-id="32222" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/DeadorAliveSaloon.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/DeadorAliveSaloon.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Dead or Alive Saloon</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="AsiaGaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Win Three Cards Bet" data-preview-type="1" data-game-id="12000" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/AsiaGaming/WinThreeCardsBet.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/WinThreeCardsBet.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Win Three Cards Bet</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">90 - 90K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-Payout-AsiaGaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat Payout" data-preview-type="1" data-game-id="11998" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/AsiaGaming/BaccaratPayout.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratPayout.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat Payout</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">90 - 90K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="AsiaGaming-Baccarat-Bet-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat Bet" data-preview-type="1" data-game-id="11997" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/AsiaGaming/BaccaratBet.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratBet.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat Bet</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">90 - 90K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Bull-Bull-AsiaGaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Bull Bull" data-preview-type="1" data-game-id="11992" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/AsiaGaming/BullBull.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BullBull.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Bull Bull</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">90 - 90K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Bid-Bac-AsiaGaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Bid Bac" data-preview-type="1" data-game-id="11991" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/AsiaGaming/BidBac.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BidBac.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Bid Bac</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">90 - 90K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="VIP-Baccarat-AsiaGaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="VIP Baccarat" data-preview-type="1" data-game-id="11990" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/AsiaGaming/VIPBaccarat.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/VIPBaccarat.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">VIP Baccarat</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">90 - 90K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Dragon-Tiger-AsiaGaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Dragon Tiger" data-preview-type="1" data-game-id="11988" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/AsiaGaming/DragonTiger.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/DragonTiger.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Dragon Tiger</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">90 - 90K</span>
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
                    <div data-href="Roulette-AsiaGaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Roulette" data-preview-type="1" data-game-id="11984" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/AsiaGaming/Roulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Roulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Roulette</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">90 - 3K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Sicbo-AsiaGaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Sicbo" data-preview-type="1" data-game-id="11980" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/AsiaGaming/Sicbo.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Sicbo.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Sicbo</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">90 - 90K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-AsiaGaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat" data-preview-type="1" data-game-id="9593" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/AsiaGaming/Baccarat.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Baccarat.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">90 - 90K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Monopoly-Big-Baller-Evolution-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Monopoly Big Baller" data-preview-type="1" data-game-id="29841" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/MonopolyBigBaller.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/MonopolyBigBaller.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Monopoly Big Baller</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1.2 - 25K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">52</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Football-Studio-Dice-Evolution-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Football Studio Dice" data-preview-type="1" data-game-id="31913" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/FootballStudioDice.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/FootballStudioDice.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Football Studio Dice</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 25K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Türkce-Futbol-Stüdyosu-Evolution-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Türkce Futbol Stüdyosu" data-preview-type="1" data-game-id="31924" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/TrkceFutbolStdyosu.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/TrkceFutbolStdyosu.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Türkce Futbol Stüdyosu</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 25K</span>
                                    <span class="currency_icon try">
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Football-studio-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Football studio" data-preview-type="1" data-game-id="22443" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/Footballstudio.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Footballstudio.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Football studio</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">10 - 50K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Football-Studio-Roulette-Evolution-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Football Studio Roulette" data-preview-type="1" data-game-id="31914" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/FootballStudioRoulette.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/FootballStudioRoulette.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Football Studio Roulette</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 50K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Speed-Baccarat-1-Digitainlivecasino-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Speed Baccarat 1" data-preview-type="1" data-game-id="31005" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainLiveCasino/SpeedBaccarat1.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SpeedBaccarat1.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speed Baccarat 1</p>
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
                                    <span class="lca-limit-count no-rtl-needed">20 - 50K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Live-Speed-Roulette-EGT-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Live Speed Roulette" data-preview-type="1" data-game-id="24831" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EGT/LiveSpeedRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/LiveSpeedRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Live Speed Roulette</p>
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
                                    <span class="lca-limit-count no-rtl-needed">2 - 60K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">18</span>
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
                    <div data-href="Onyx-Roulette-EGT-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Onyx Roulette" data-preview-type="1" data-game-id="24830" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EGT/OnyxRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/OnyxRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Onyx Roulette</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 30K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">23</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Salon-Prive-Baccarat-G-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Salon Privé Baccarat G" data-preview-type="1" data-game-id="27448" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/SalonPrivBaccaratG.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SalonPrivBaccaratG.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Salon Privé Baccarat G</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">10K - 150K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Salon-Prive-Baccarat-F-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Salon Privé Baccarat F" data-preview-type="1" data-game-id="27447" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/SalonPrivBaccaratF.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SalonPrivBaccaratF.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Salon Privé Baccarat F</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">10K - 150K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Salon-Prive-Baccarat-E-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Salon Privé Baccarat E" data-preview-type="1" data-game-id="27402" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/SalonPrivBaccaratE.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SalonPrivBaccaratE.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Salon Privé Baccarat E</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                    </div>
                                </div>
                                <div class="lca-card-badge-wrapper">
                                </div>
                            </div>
                        </div>
                        <div class="lca-card-footer">
                            <div class="lca-card-price-wrapper">
                                <div class="lca-card-price flex-grow-1">
                                    <span class="lca-limit-count no-rtl-needed">10K - 150K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Lucky-Box-Tombola-Tombala-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Lucky Box" data-preview-type="1" data-game-id="31031" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Tombala/LuckyBoxTombola.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/LuckyBoxTombola.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Lucky Box</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 300</span>
                                    <span class="currency_icon try">
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Speed-Roulette-2-PragmaticPlay-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Speed Roulette 2" data-preview-type="1" data-game-id="31017" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/partners/1093/Games/Pragmatic/SpeedRoulette2.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SpeedRoulette2.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speed Roulette 2</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Gold-Roulette-Digitainlivecasino-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Gold Roulette" data-preview-type="1" data-game-id="27217" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainLiveCasino/27217_GoldRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/27217_GoldRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Gold Roulette</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 36K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="PowerUp-Roulette-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="PowerUp Roulette" data-preview-type="1" data-game-id="30942" data-hasdemo="true" data-hasjackpot="false" data-bimage="" data-image="/img/partners/1093/Games/Pragmatic/PowerUpRoulette.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/PowerUpRoulette.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">PowerUp Roulette</p>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Roulette-14-Spanish-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Roulette 14 - Spanish" data-preview-type="1" data-game-id="30329" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/partners/1093/Games/Pragmatic/Roulette14Spanish.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Roulette14Spanish.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Roulette 14 - Spanish</p>
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
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 25K</span>
                                    <span class="currency_icon try">
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Black-Russian-Blackjack-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Black Russian Blackjack" data-preview-type="1" data-game-id="19445" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/BlackRussianBlackjack.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackRussianBlackjack.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Black Russian Blackjack</p>
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
                                    <span class="lca-limit-count no-rtl-needed">200 - 20K</span>
                                    <span class="currency_icon try">
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
                <div class="lca-card-wrapper lca-card-wrapper-100" style="opacity: 1;">
                    <div data-href="White-Russian-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="White Russian" data-preview-type="1" data-game-id="19444" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/WhiteRussianBlackjack.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/WhiteRussianBlackjack.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">White Russian</p>
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
                                    <span class="lca-limit-count no-rtl-needed">100 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Classic-Roulette-Digitainlivecasino-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Classic Roulette" data-preview-type="1" data-game-id="27218" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainLiveCasino/ClassicRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/ClassicRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Classic Roulette</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 36K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Auto-Roulette-Digitainlivecasino-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Auto Roulette" data-preview-type="1" data-game-id="28635" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/DigitainLiveCasino/28635_AutoRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/28635_AutoRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Auto Roulette</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 36K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Casino-Marina-Roulette-2-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Casino Marina Roulette 2" data-preview-type="1" data-game-id="19443" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/CasinoMarinaRoulette2.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/CasinoMarinaRoulette2.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Casino Marina Roulette 2</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 5K</span>
                                    <span class="currency_icon try">
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Casino-Marina-Baccarat-4-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Casino Marina Baccarat 4" data-preview-type="1" data-game-id="19442" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/CasinoMarinaBaccarat4.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/CasinoMarinaBaccarat4.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Casino Marina Baccarat 4</p>
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Casino-Marina-Baccarat-3-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Casino Marina Baccarat 3" data-preview-type="1" data-game-id="19441" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/CasinoMarinaBaccarat3.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/CasinoMarinaBaccarat3.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Casino Marina Baccarat 3</p>
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
                                    <span class="lca-limit-count no-rtl-needed">2 - 1K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">8</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Mega-Roulette-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Mega Roulette" data-preview-type="1" data-game-id="19719" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/partners/1093/Games/Pragmatic/MegaRoulette.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/MegaRoulette.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Mega Roulette</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 25K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">143</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="32-Cards-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="32 Cards" data-preview-type="1" data-game-id="18006" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/32Cards.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/32Cards.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">32 Cards</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Speed-Baccarat-Cricket-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Speed Baccarat Cricket" data-preview-type="1" data-game-id="19804" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/SpeedBaccaratCricket.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SpeedBaccaratCricket.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speed Baccarat Cricket</p>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Oracle-Casino-Roulette-360-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Oracle Casino Roulette 360" data-preview-type="1" data-game-id="19805" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/OracleCasinoRoulette360.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/OracleCasinoRoulette360.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Oracle Casino Roulette 360</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">13</span>
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
                    <div data-href="Oracle-Casino-Roulette-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Oracle Casino Roulette" data-preview-type="1" data-game-id="19806" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/OracleCasinoRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/OracleCasinoRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Oracle Casino Roulette</p>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Ruleta-del-Sol-Roulette-OTT-EzugiOriginal-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Ruleta del Sol - Roulette OTT" data-preview-type="1" data-game-id="19807" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/RuletadelSolRouletteOTT.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/RuletadelSolRouletteOTT.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Ruleta del Sol - Roulette OTT</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Prestige-Auto-Roulette-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Prestige Auto Roulette" data-preview-type="1" data-game-id="19811" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/PrestigeAutoRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/PrestigeAutoRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Prestige Auto Roulette</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 30K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Speed-Auto-Roulette-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Speed Auto Roulette" data-preview-type="1" data-game-id="19812" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/SpeedAutoRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SpeedAutoRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speed Auto Roulette</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">15</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Ruletka-Russia-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Ruletka Russia" data-preview-type="1" data-game-id="19813" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/RuletkaRussia.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/RuletkaRussia.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Ruletka Russia</p>
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
                                    <span class="lca-limit-count no-rtl-needed">2 - 15K</span>
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
                    <div data-href="Cumbia-Ruleta-1-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Cumbia Ruleta 1" data-preview-type="1" data-game-id="19814" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/CumbiaRuleta1.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/CumbiaRuleta1.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Cumbia Ruleta 1</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Namaste-Roulette-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Namaste Roulette" data-preview-type="1" data-game-id="19815" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/NamasteRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/NamasteRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Namaste Roulette</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Diamond-Roulette-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Diamond Roulette" data-preview-type="1" data-game-id="19816" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/DiamondRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/DiamondRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Diamond Roulette</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 12.5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Speed-Roulette-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Speed Roulette" data-preview-type="1" data-game-id="19817" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/SpeedRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SpeedRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speed Roulette</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Turkce-Blackjack-2-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Turkce Blackjack 2" data-preview-type="1" data-game-id="19818" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/TurkceBlackjack2.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/TurkceBlackjack2.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Turkce Blackjack 2</p>
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
                                    <span class="lca-limit-count no-rtl-needed">100 - 20K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">8</span>
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
                    <div data-href="Turkce-Blackjack-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Turkce Blackjack 1" data-preview-type="1" data-game-id="19819" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/TurkceBlackjack.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/TurkceBlackjack.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Turkce Blackjack 1</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 100K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Rumba-Blackjack-3-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Rumba Blackjack 3" data-preview-type="1" data-game-id="19820" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/RumbaBlackjack3.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/RumbaBlackjack3.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Rumba Blackjack 3</p>
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
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Rumba-Blackjack-2-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Rumba Blackjack 2" data-preview-type="1" data-game-id="19821" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/RumbaBlackjack2.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/RumbaBlackjack2.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Rumba Blackjack 2</p>
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
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Rumba-Blackjack-1-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Rumba Blackjack 1" data-preview-type="1" data-game-id="19822" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/RumbaBlackjack1.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/RumbaBlackjack1.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Rumba Blackjack 1</p>
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
                                    <span class="lca-limit-count no-rtl-needed">100 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Italian-Blackjack-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Italian Blackjack" data-preview-type="1" data-game-id="19823" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/ItalianBlackjack.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/ItalianBlackjack.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Italian Blackjack</p>
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
                                    <span class="lca-limit-count no-rtl-needed">200 - 20K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="VIP-Blackjack-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Diamond VIP Blackjack" data-preview-type="1" data-game-id="19824" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/VIPBlackjack.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/VIPBlackjack.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Diamond VIP Blackjack</p>
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
                                    <span class="lca-limit-count no-rtl-needed">2.5K - 100K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="VIP-Blackjack-with-Surrender-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="VIP Blackjack with Surrender" data-preview-type="1" data-game-id="19825" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/VIPBlackjackwithSurrender.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/VIPBlackjackwithSurrender.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">VIP Blackjack with Surrender</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 100K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-Gold-6-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Gold 6" data-preview-type="1" data-game-id="19826" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/BlackjackGold6.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackGold6.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Gold 6</p>
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
                                    <span class="lca-limit-count no-rtl-needed">200 - 20K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-7-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 7" data-preview-type="1" data-game-id="19827" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/Blackjack7.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack7.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 7</p>
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
                                    <span class="lca-limit-count no-rtl-needed">200 - 20K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-Gold-1-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Gold 1" data-preview-type="1" data-game-id="19828" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/BlackjackGold1.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackGold1.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Gold 1</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 100K</span>
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
                    <div data-href="Blackjack-3-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Gold 3" data-preview-type="1" data-game-id="19829" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/Blackjack3.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack3.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Gold 3</p>
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 50K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-1-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 1" data-preview-type="1" data-game-id="19830" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/Blackjack1.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack1.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 1</p>
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 50K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-Gold-4-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Gold 4" data-preview-type="1" data-game-id="19831" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/BlackjackGold4.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackGold4.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Gold 4</p>
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
                                    <span class="lca-limit-count no-rtl-needed">200 - 20K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-1-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat 1" data-preview-type="1" data-game-id="17827" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/BaccaratA.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratA.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat 1</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 25K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-2-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat 2" data-preview-type="1" data-game-id="17828" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/BaccaratB.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratB.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat 2</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 25K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Speed-Baccarat-14-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Speed Baccarat 14" data-preview-type="1" data-game-id="17829" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/SpeedBaccarat14.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SpeedBaccarat14.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speed Baccarat 14</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-5-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat 5" data-preview-type="1" data-game-id="17830" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/BaccaratD.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratD.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat 5</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 25K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-6-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat 6" data-preview-type="1" data-game-id="17831" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/BaccaratE.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratE.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat 6</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">125 - 12.5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Roulette-1-Azure-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Roulette 1 - Azure" data-preview-type="1" data-game-id="17832" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/partners/1093/Games/Pragmatic/Roulette1Azure.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Roulette1Azure.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Roulette 1 - Azure</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 25K</span>
                                    <span class="currency_icon try">
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Roulette-2-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Roulette 2" data-preview-type="1" data-game-id="17834" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/partners/1093/Games/Pragmatic/Roulette2.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Roulette2.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Roulette 2</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 25K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-100" style="opacity: 1;">
                    <div data-href="Auto-Roulette-1-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Auto-Roulette 1" data-preview-type="1" data-game-id="17836" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/partners/1093/Games/Pragmatic/AutoRoulette1.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/AutoRoulette1.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Auto-Roulette 1</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 25K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">84</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Mega-Sic-Bo-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Mega Sic Bo" data-preview-type="1" data-game-id="17837" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/MegaSicBo.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/MegaSicBo.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Mega Sic Bo</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 25K</span>
                                    <span class="currency_icon try">
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Roulette-Turkey-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Roulette 6 - Turkish" data-preview-type="1" data-game-id="17841" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Roulette6Turkish.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Roulette6Turkish.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Roulette 6 - Turkish</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 25K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">38</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="One-Blackjack-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="One Blackjack" data-preview-type="1" data-game-id="19846" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/partners/1093/Games/Pragmatic/OneBlackjack.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/OneBlackjack.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">One Blackjack</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 25K</span>
                                    <span class="currency_icon try">
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Andar-Bahar-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Andar Bahar" data-preview-type="1" data-game-id="13225" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/AndarBahar.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
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
                                    <span class="lca-limit-count no-rtl-needed">2 - 2K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Marina-Casino-Baccarat-2-Ezugii-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Marina Casino Baccarat 2" data-preview-type="1" data-game-id="13227" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/MarinaCasinoBaccarat2.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/MarinaCasinoBaccarat2.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Marina Casino Baccarat 2</p>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Marina-Casino-Baccarat-1-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Marina Casino Baccarat 1" data-preview-type="1" data-game-id="13228" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/MarinaCasinoBaccarat1.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/MarinaCasinoBaccarat1.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Marina Casino Baccarat 1</p>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-No-Commission-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat No Commission" data-preview-type="1" data-game-id="13229" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/BaccaratNoCommission.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratNoCommission.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat No Commission</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 25K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Teen-Patti-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Teen Patti" data-preview-type="1" data-game-id="13230" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/TeenPatti.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/TeenPatti.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Teen Patti</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-Platinum-1-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Platinum 1" data-preview-type="1" data-game-id="13234" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/BlackjackPlatinum1.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackPlatinum1.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Platinum 1</p>
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 50K</span>
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
                    <div data-href="Roulette-Portomaso-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Portomaso Casino Roulette" data-preview-type="1" data-game-id="13235" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/PortomasoCasinoRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/PortomasoCasinoRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Portomaso Casino Roulette</p>
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
                                    <span class="lca-limit-count no-rtl-needed">2 - 20K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Marina-Casino-Roulette-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Marina Casino Roulette" data-preview-type="1" data-game-id="13236" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/MarinaCasinoRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/MarinaCasinoRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Marina Casino Roulette</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Dragon-Tiger-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Dragon Tiger" data-preview-type="1" data-game-id="13237" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/DragonTiger.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/DragonTiger.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Dragon Tiger</p>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-Super6-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat Super 6" data-preview-type="1" data-game-id="13238" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/BaccaratSuper6.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratSuper6.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat Super 6</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Casino-Holdem-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Casino Holde’m" data-preview-type="1" data-game-id="13240" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/CasinoHoldem.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/CasinoHoldem.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Casino Holde’m</p>
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
                                    <span class="lca-limit-count no-rtl-needed">2 - 2K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Unlimited-Blackjack-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Unlimited Blackjack" data-preview-type="1" data-game-id="13241" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/UnlimitedBlackjack.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/UnlimitedBlackjack.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Unlimited Blackjack</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Automat-Roulette-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Auto Roulette" data-preview-type="1" data-game-id="13242" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/AutomaticRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/AutomaticRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Auto Roulette</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Bet-on-Numbers-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Bet On Numbers HD" data-preview-type="1" data-game-id="13244" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/BetonNumbers.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BetonNumbers.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Bet On Numbers HD</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 25</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Italian-Roulette-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Italian Roulette" data-preview-type="1" data-game-id="13245" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/Roulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Roulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Italian Roulette</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 30K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Golden Baccarat" data-preview-type="1" data-game-id="13246" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/Baccarat.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Baccarat.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Golden Baccarat</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 25K</span>
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
                    <div data-href="Blackjack-ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Gold 5" data-preview-type="1" data-game-id="13247" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/Blackjack.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Gold 5</p>
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 50K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Turkish-Blackjack-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Turkish Blackjack" data-preview-type="1" data-game-id="15717" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/TurkishBlackjack.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/TurkishBlackjack.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Turkish Blackjack</p>
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
                                    <span class="lca-limit-count no-rtl-needed">2.5K - 100K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Bet-on-teen-patti-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Bet On Teen Patti" data-preview-type="1" data-game-id="16063" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/BetOnTeenPatti.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BetOnTeenPatti.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Bet On Teen Patti</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Lucky-7-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Lucky 7" data-preview-type="1" data-game-id="16460" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/Lucky7.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 1.25K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Kilic-Tombala-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Kilic" data-preview-type="1" data-game-id="13785" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Tombala/13785_Kilic1.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/13785_Kilic1.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Kilic</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 3K</span>
                                    <span class="currency_icon try">
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
                    <div data-href="Over-Under-Tombala-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Over Under" data-preview-type="1" data-game-id="13786" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Tombala/13786_OverUnder1.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/13786_OverUnder1.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Over Under</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 1K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">17</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Tombala-Slot-Tombala-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Tombala Slot" data-preview-type="1" data-game-id="13787" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Tombala/13787_TombalaSlot1.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/13787_TombalaSlot1.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Tombala Slot</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 3K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">30</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Tombala-Tombala-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Tombala" data-preview-type="1" data-game-id="13788" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Tombala/13788_Tombala.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/13788_Tombala.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Tombala</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 300</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">91</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Turkish-Blackjack-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Turkish Blackjack" data-preview-type="1" data-game-id="13172" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/BlackJackTable2.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackJackTable2.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Turkish Blackjack</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">100 - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Bulgaria-Blackjack-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Bulgaria Blackjack" data-preview-type="1" data-game-id="13173" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/BlackJackTable1.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackJackTable1.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Bulgaria Blackjack</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">100 - 40K</span>
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
                    <div data-href="Bulgaria-Baccarat-2-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Bulgaria Baccarat 2" data-preview-type="1" data-game-id="13179" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/BaccaratTable2.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratTable2.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Bulgaria Baccarat 2</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Bulgaria-Baccarat-1-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Bulgaria Baccarat 1" data-preview-type="1" data-game-id="13180" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/BaccaratTable1.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratTable1.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Bulgaria Baccarat 1</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Portomaso-Roulette-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Portomaso Roulette" data-preview-type="1" data-game-id="13181" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/TablePortomaso.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/TablePortomaso.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Portomaso Roulette</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 20K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Oracle-Blaze-Roulette-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Oracle Blaze Roulette" data-preview-type="1" data-game-id="13183" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/TableOracle.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/TableOracle.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Oracle Blaze Roulette</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 20K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Oracle-360-Roulette-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Oracle 360 Roulette" data-preview-type="1" data-game-id="13184" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/TableOracle360.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/TableOracle360.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Oracle 360 Roulette</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 20K</span>
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
                    <div data-href="English-Casino-Holdem-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="English Casino Hold'em" data-preview-type="1" data-game-id="15943" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/CasinoHoldem.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/CasinoHoldem.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">English Casino Hold'em</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 6.5K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">18</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-Table-7-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat Table 7" data-preview-type="1" data-game-id="15947" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/BaccaratTable7.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratTable7.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat Table 7</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-Table-8-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat Table 8" data-preview-type="1" data-game-id="15948" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/BaccaratTable8.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratTable8.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat Table 8</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-Table-9-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat Table 9" data-preview-type="1" data-game-id="15949" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/BaccaratTable9.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratTable9.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat Table 9</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-Table-10-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat Table 10" data-preview-type="1" data-game-id="15950" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/BaccaratTable10.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratTable10.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat Table 10</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                    <div data-href="Baccarat-Table-11-vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat Table 11" data-preview-type="1" data-game-id="15951" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/BaccaratTable11.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratTable11.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat Table 11</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-Table-12-vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat Table 12" data-preview-type="1" data-game-id="15952" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/BaccaratTable12.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratTable12.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat Table 12</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-Table-13-vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat Table 13" data-preview-type="1" data-game-id="15953" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/BaccaratTable13.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratTable13.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat Table 13</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-Table-14-vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat Table 14" data-preview-type="1" data-game-id="15954" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/BaccaratTable14.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratTable14.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat Table 14</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="VA-Bacarat-3-vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="VA Bacarat 3" data-preview-type="1" data-game-id="15957" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/Baccarat241.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Baccarat241.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">VA Bacarat 3</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="VA-Bacarat-4-vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="VA Bacarat 4" data-preview-type="1" data-game-id="15958" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/Baccarat242.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Baccarat242.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">VA Bacarat 4</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
                                    <span class="currency_icon try">
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="French-Roulette-VivoGaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="French Roulette" data-preview-type="1" data-game-id="16565" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/UruguayEuropean.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/UruguayEuropean.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">French Roulette</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 20K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="European-Auto-Roulette-VivoGaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="European Auto Roulette" data-preview-type="1" data-game-id="16566" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/AutoRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/AutoRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">European Auto Roulette</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag pt" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 20K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="American-Auto-Roulette-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="American Auto Roulette" data-preview-type="1" data-game-id="17323" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/AmericanAutoRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/AmericanAutoRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">American Auto Roulette</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 20K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Turkish-Baccarat-VIvogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Turkish Baccarat" data-preview-type="1" data-game-id="17331" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/TurkishBaccarat.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/TurkishBaccarat.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Turkish Baccarat</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                    <div data-href="Spanish-Blackjack-Chromakey-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Spanish Blackjack Chromakey" data-preview-type="1" data-game-id="17333" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/BJtable4.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BJtable4.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Spanish Blackjack Chromakey</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">100 - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="VA-Bacarat-5-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="VA Bacarat 5" data-preview-type="1" data-game-id="18752" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/Baccarat.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Baccarat.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">VA Bacarat 5</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Fiesta-Baccarat-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Fiesta Baccarat" data-preview-type="1" data-game-id="20662" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/FiestaBaccarat.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/FiestaBaccarat.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Fiesta Baccarat</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 50K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Dragon-Tiger-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Dragon Tiger" data-preview-type="1" data-game-id="20798" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/DragonTiger.png">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/DragonTiger.png" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Dragon Tiger</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 25K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-Bucuresti-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Bucuresti" data-preview-type="1" data-game-id="20969" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/BlackjackBucuresti.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackBucuresti.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Bucuresti</p>
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
                                    <span class="lca-limit-count no-rtl-needed">100 - 20K</span>
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
                    <div data-href="Table-231-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Table 231" data-preview-type="1" data-game-id="16568" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/Table231.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Table231.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Table 231</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 20K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="VA-Bacarat-2-vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="VA Bacarat 2" data-preview-type="1" data-game-id="15956" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/Baccarat240.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Baccarat240.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">VA Bacarat 2</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="VA-Bacarat-1-vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="VA Bacarat 1" data-preview-type="1" data-game-id="15955" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/Baccarat239.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Baccarat239.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">VA Bacarat 1</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Roulette-6-Arabic-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Roulette 6 Arabic" data-preview-type="1" data-game-id="13187" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/Roulette6Arabic.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Roulette6Arabic.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Roulette 6 Arabic</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 20K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Spanish-Roulette-Chromakey-Vivogaming-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Spanish Roulette Chromakey" data-preview-type="1" data-game-id="13186" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/VivoGaming/RouletteTable2.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/RouletteTable2.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Spanish Roulette Chromakey</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 20K</span>
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
                    <div data-href="Live-Roulette-Eng-Atmosfera-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Live Roulette" data-preview-type="1" data-game-id="17985" data-hasdemo="false" data-hasjackpot="false" data-bimage="/img/Background/Atmosfera/LiveRoulette.jpg" data-image="/img/Games/Atmosfera/17985_LiveRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/17985_LiveRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Live Roulette</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 2K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Rumba-Blackjack-4-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Rumba Blackjack 4" data-preview-type="1" data-game-id="21802" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/RumbaBlakckjack4.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/RumbaBlakckjack4.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Rumba Blackjack 4</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Cricket-War-Ezugi-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Cricket War" data-preview-type="1" data-game-id="21916" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/EzugiOriginal/CricketWar.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/CricketWar.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Cricket War</p>
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 50K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Andar-Bahar-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Andar Bahar" data-preview-type="1" data-game-id="22181" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/AndarBahar.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/AndarBahar.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Andar Bahar</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 25K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">17</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Sweet-Bonanza-Candyland-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Sweet Bonanza Candyland" data-preview-type="1" data-game-id="22698" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/partners/1093/Games/Pragmatic/SweetBonanzaCandyland.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/SweetBonanzaCandyland.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Sweet Bonanza Candyland</p>
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
                                    <span class="lca-limit-count no-rtl-needed">2 - 30K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">122</span>
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
                    <div data-href="Music-Wheel-Atmosfera-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Music Wheel" data-preview-type="1" data-game-id="22737" data-hasdemo="false" data-hasjackpot="false" data-bimage="/img/Background/Atmosfera/MusicWheel.jpg" data-image="/img/Games/Atmosfera/MusicWheel.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/MusicWheel.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Music Wheel</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 6K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Roulette-9-The-Club-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Roulette 9 - The Club" data-preview-type="1" data-game-id="22778" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/partners/1093/Games/Pragmatic/Roulette9TheClub.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Roulette9TheClub.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Roulette 9 - The Club</p>
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
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 25K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-36-The-Club-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 36 - The Club" data-preview-type="1" data-game-id="22735" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Blackjack36TheClub.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack36TheClub.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 36 - The Club</p>
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
                                    <span class="lca-limit-count no-rtl-needed">5K - 100K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-35-The-Club-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 35 - The Club" data-preview-type="1" data-game-id="22734" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Blackjack35TheClub.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack35TheClub.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 35 - The Club</p>
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
                                    <span class="lca-limit-count no-rtl-needed">2.5K - 50K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-34-The-Club-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 34 - The Club" data-preview-type="1" data-game-id="22733" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Blackjack34TheClub.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack34TheClub.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 34 - The Club</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1.25K - 25K</span>
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
                    <div data-href="Blackjack-33-The-Club-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack 33 - The Club" data-preview-type="1" data-game-id="22732" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Blackjack33TheClub.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Blackjack33TheClub.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack 33 - The Club</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1.25K - 25K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Mega-Wheel-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Mega Wheel" data-preview-type="1" data-game-id="18685" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/partners/1093/Games/Pragmatic/MegaWheel.webp">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/MegaWheel.webp" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Mega Wheel</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">0.5 - 25K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">29</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-7-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat 7" data-preview-type="1" data-game-id="22853" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Baccarat7.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Baccarat7.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat 7</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 25K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-8-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat 8" data-preview-type="1" data-game-id="22852" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Baccarat8.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Baccarat8.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat 8</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 25K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Speed-Baccarat-15-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Speed Baccarat 15" data-preview-type="1" data-game-id="22851" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Baccarat9.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Baccarat9.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speed Baccarat 15</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 25K</span>
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
                    <div data-href="Speed-Baccarat-16-Pragmatic-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Speed Baccarat 16" data-preview-type="1" data-game-id="22850" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Pragmatic/Baccarat10.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Baccarat10.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Speed Baccarat 16</p>
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 25K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-A-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP A" data-preview-type="1" data-game-id="22649" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPA.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPA.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP A</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-8-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP 8" data-preview-type="1" data-game-id="22648" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIP8.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIP8.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP 8</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Casino-Malta-Roulette-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Casino Malta Roulette" data-preview-type="1" data-game-id="22597" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/CasinoMaltaRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/CasinoMaltaRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Casino Malta Roulette</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 30K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-7-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP 7" data-preview-type="1" data-game-id="22647" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIP7.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIP7.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP 7</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 40K</span>
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
                    <div data-href="Blackjack-VIP-Alpha-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP Alpha" data-preview-type="1" data-game-id="22646" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPAlpha.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPAlpha.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP Alpha</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-6-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP 6" data-preview-type="1" data-game-id="22645" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIP6.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIP6.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP 6</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-B-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP B" data-preview-type="1" data-game-id="22644" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPB.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPB.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP B</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-5-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP 5" data-preview-type="1" data-game-id="22643" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIP5.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIP5.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP 5</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-Beta-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP Beta" data-preview-type="1" data-game-id="22642" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPBeta.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPBeta.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP Beta</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-4-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP 4" data-preview-type="1" data-game-id="22641" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIP4.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIP4.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP 4</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-C-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP C" data-preview-type="1" data-game-id="22640" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPC.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPC.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP C</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">2.5K - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-3-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP 3" data-preview-type="1" data-game-id="22639" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIP3.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIP3.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP 3</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-D-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP D" data-preview-type="1" data-game-id="22638" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPD.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPD.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP D</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 80K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-2-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP 2" data-preview-type="1" data-game-id="22637" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIP2.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIP2.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP 2</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 40K</span>
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
                    <div data-href="Blackjack-VIP-E-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP E" data-preview-type="1" data-game-id="22636" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPE.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPE.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP E</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 80K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-1-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP 1" data-preview-type="1" data-game-id="22635" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIP1.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIP1.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP 1</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-F-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP F" data-preview-type="1" data-game-id="22634" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPF.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPF.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP F</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 80K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-Silver-G-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Silver G" data-preview-type="1" data-game-id="22633" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackSilverG.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackSilverG.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Silver G</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">2.5K - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-G-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP G" data-preview-type="1" data-game-id="22632" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPG.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPG.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP G</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">2.5K - 80K</span>
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
                    <div data-href="Blackjack-Silver-F-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Silver F" data-preview-type="1" data-game-id="22631" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackSilverF.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackSilverF.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Silver F</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">2.5K - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-Gamma-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP Gamma" data-preview-type="1" data-game-id="22630" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPGamma.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPGamma.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP Gamma</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-Silver-E-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Silver E" data-preview-type="1" data-game-id="22629" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackSilverE.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackSilverE.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Silver E</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-Silver-D-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Silver D" data-preview-type="1" data-game-id="22628" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackSilverD.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackSilverD.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Silver D</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-Silver-C-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Silver C" data-preview-type="1" data-game-id="22627" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackSilverC.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackSilverC.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Silver C</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 40K</span>
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
                    <div data-href="Blackjack-Silver-B-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Silver B" data-preview-type="1" data-game-id="22626" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackSilverB.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackSilverB.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Silver B</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-Silver-A-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Silver A" data-preview-type="1" data-game-id="22625" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackSilverA.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackSilverA.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Silver A</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">400 - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-H-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP H" data-preview-type="1" data-game-id="22624" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPH.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPH.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP H</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">2.5K - 80K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-Platinum-VIP-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Platinum VIP" data-preview-type="1" data-game-id="22623" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackPlatinumVIP.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackPlatinumVIP.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Platinum VIP</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1.6K - 80K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-L-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP L" data-preview-type="1" data-game-id="22622" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPL.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPL.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP L</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50 lca-card-wrapper-hx2" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-M-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP M" data-preview-type="1" data-game-id="22621" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPM.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPM.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP M</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">5K - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-Party-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Party" data-preview-type="1" data-game-id="22620" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackParty.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackParty.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Party</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-N-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP N" data-preview-type="1" data-game-id="22619" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPN.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPN.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP N</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-Grand-VIP-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Grand VIP" data-preview-type="1" data-game-id="22618" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackGrandVIP.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackGrandVIP.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Grand VIP</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1.6K - 80K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-Q-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP Q" data-preview-type="1" data-game-id="22617" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPQ.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPQ.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP Q</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 40K</span>
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
                    <div data-href="Blackjack-VIP-T-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP T" data-preview-type="1" data-game-id="22616" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPT.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPT.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP T</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">400 - 40K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-Fortune-VIP-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Fortune VIP" data-preview-type="1" data-game-id="22615" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackFortuneVIP.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackFortuneVIP.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Fortune VIP</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1.6K - 80K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-Diamond-VIP-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack Diamond VIP" data-preview-type="1" data-game-id="22614" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackDiamondVIP.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackDiamondVIP.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack Diamond VIP</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10K - 80K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-X-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP X" data-preview-type="1" data-game-id="22613" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPX.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPX.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP X</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1K - 16K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-VIP-Z-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack VIP Z" data-preview-type="1" data-game-id="22611" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackVIPZ.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackVIPZ.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack VIP Z</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">500 - 40K</span>
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
                    <div data-href="Caribbean-Stud-Poker-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Caribbean Stud Poker" data-preview-type="1" data-game-id="22609" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/CaribbeanStudPoker.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/CaribbeanStudPoker.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Caribbean Stud Poker</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Cash-or-Crash-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Cash or Crash" data-preview-type="1" data-game-id="22601" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/CashorCrash.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/CashorCrash.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Cash or Crash</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">2 - 25K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">8</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Casino-Holdem-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Casino Hold'em" data-preview-type="1" data-game-id="22599" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/CasinoHoldem.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/CasinoHoldem.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Casino Hold'em</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">8 - 48K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Crazy-Time-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Crazy Time" data-preview-type="1" data-game-id="22497" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/CrazyTime.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/CrazyTime.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Crazy Time</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">302</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Craps-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Craps" data-preview-type="1" data-game-id="22496" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/Craps.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/Craps.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Craps</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-100" style="opacity: 1;">
                    <div data-href="Blackjack-C-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack C" data-preview-type="1" data-game-id="22536" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackC.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackC.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack C</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">160 - 16K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-B-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack B" data-preview-type="1" data-game-id="22535" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackB.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackB.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack B</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">100 - 16K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Blackjack-A-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Blackjack A" data-preview-type="1" data-game-id="22534" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BlackjackA.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BlackjackA.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Blackjack A</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">50 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-Squeeze-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat Squeeze" data-preview-type="1" data-game-id="22533" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BaccaratSqueeze.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratSqueeze.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat Squeeze</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 120K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-Control-Squeeze-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat Control Squeeze" data-preview-type="1" data-game-id="22532" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BaccaratControlSqueeze.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratControlSqueeze.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat Control Squeeze</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 120K</span>
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
                    <div data-href="Baccarat-C-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat C" data-preview-type="1" data-game-id="22531" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BaccaratC.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratC.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat C</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Double-Ball-Roulette-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Double Ball Roulette" data-preview-type="1" data-game-id="22461" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/DoubleBallRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/DoubleBallRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Double Ball Roulette</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">2 - 30K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Dragon-Tiger-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Dragon Tiger" data-preview-type="1" data-game-id="22460" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/DragonTiger.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/DragonTiger.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Dragon Tiger</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 50K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Dream-Catcher-Evolution-shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Dream Catcher" data-preview-type="1" data-game-id="22459" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/DreamCatcher.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/DreamCatcher.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Dream Catcher</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 10K</span>
                                    <span class="currency_icon try">
                  </span>
                                </div>
                            </div>
                            <div class="lca-card-footer-btns d-flex align-items-center justify-content-between">
                                <div class="lca-card-likes lca-card-footer-btn d-flex align-items-center js_game_like">
                  <span class="like_icon js_game_like_icon ">
                  </span>
                                    <span class="js_game_likes_count">13</span>
                                </div>
                                <div class="lca-card-footer-btn d-flex align-items-center justify-content-center js_game_fav">
                  <span class="star_icon js_game_fav_icon ">
                  </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Fan-Tan-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Fan Tan" data-preview-type="1" data-game-id="22458" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/FanTan.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/FanTan.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Fan Tan</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">2 - 25K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-100" style="opacity: 1;">
                    <div data-href="First-Person-American-Roulette-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="First Person American Roulette" data-preview-type="1" data-game-id="22457" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/FirstPersonAmericanRoulette.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/FirstPersonAmericanRoulette.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">First Person American Roulette</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">1 - 50K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="First-Person-Baccarat-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="First Person Baccarat" data-preview-type="1" data-game-id="22456" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/FirstPersonBaccarat.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/FirstPersonBaccarat.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">First Person Baccarat</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 50K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="First-Person-Craps-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="First Person Craps" data-preview-type="1" data-game-id="22455" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/FirstPersonCraps.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/FirstPersonCraps.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">First Person Craps</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">5 - 10K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="First-Person-Dragon-Tiger-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="First Person Dragon Tiger" data-preview-type="1" data-game-id="22454" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/FirstPersonDragonTiger.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/FirstPersonDragonTiger.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">First Person Dragon Tiger</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 50K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="First-Person-Golden-Wealth-Baccarat-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="First Person Golden Wealth Baccarat" data-preview-type="1" data-game-id="22453" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/FirstPersonGoldenWealthBaccarat.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/FirstPersonGoldenWealthBaccarat.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">First Person Golden Wealth Baccarat</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                    <div data-href="First-Person-Lightning-Baccarat-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="First Person Lightning Baccarat" data-preview-type="1" data-game-id="22452" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/FirstPersonLightningBaccarat.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/FirstPersonLightningBaccarat.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">First Person Lightning Baccarat</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 2.5K</span>
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
                <div class="lca-card-wrapper lca-card-wrapper-50" style="opacity: 1;">
                    <div data-href="Baccarat-B-Evolution-Shared-Livecasino" class="js_dl_games js_game_info lca-card" data-name="Baccarat B" data-preview-type="1" data-game-id="22530" data-hasdemo="false" data-hasjackpot="false" data-bimage="" data-image="/img/Games/Evolution-Shared/BaccaratB.jpg">
                        <div class="lca-card-body-wrapper" onclick="giris();">
                            <img class="lca-card-body-img" src="/img/BaccaratB.jpg" alt="">
                            <div class="lca-card-body">
                                <div class="lca-card-header d-flex">
                                    <p class="m-0 flex-grow-1">Baccarat B</p>
                                    <div class="lca-card-flag-wrapper">
                    <span class="lca-card-flag en" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
                    </span>
                                        <span class="lca-card-flag ru" style="background-image: url(plat/prd/img/sprites/flags_sprite.png)">
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
                                    <span class="lca-limit-count no-rtl-needed">10 - 120K</span>
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
                <a href="#" class="ui-link">
          <span class="fixed_menu__icon ic_tvgames">
          </span>TV Oyunları</a>
                <a href="#" class="ui-link">
          <span class="fixed_menu__icon ic_virtualsport">
          </span>Sanal Sporlar</a>
                <a href="#" class="ui-link">
          <span class="fixed_menu__icon ic_casino">
          </span>Casino</a>
                <a href="#" class="ui-link">
          <span class="fixed_menu__icon ic_fastgames">
          </span>FastGames</a>
            </div>
        </div>
        <div class="fixed_menu__ul d-flex">
            <div class="menu_circle">
            </div>
            <a class="fixed_menu__li d-flex flexcol align-items-center justify-content-center js_dl_bottom_menu_items ui-link active" data-tabid="Main" id="js_dl_current">
        <span class="fixed_menu__icon ic_livecasino">
        </span>
                <span class="fixed_menu__text">Canlı Casino</span>
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
                <script src="assets/js/DMCABadgeHelper.min.js"></script>
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
            <a class="yandex_mail ui-link" href="cdn-cgi/l/email-protection.html#93f7f6e0e7f6f8d3f4e1f2fdf7e3f2e0fbf2f1f6e7bdf0fcfe" target="_blank" rel="noopener"></a>
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





<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/bootstrapper.min.js"></script>

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
<script src="assets/js/top-matches.min.js"></script>
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
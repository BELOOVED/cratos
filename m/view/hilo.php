<html>

<head>
    <link href="hilocssjs/mobile.css" rel="stylesheet">
    <link href="hilocssjs/rgscontainer.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="margin:0; padding:0; box-sizing:border-box">
<style>
    html, body {
        width: 100%;
        height: 100%;
        margin: 0;
        background-color: #000;
    }
</style>
<iframe src="https://cchhllpp.net?PartnerId=c627de75d8d5e3ede57cc5c3ff3c427d&culture=tr&mainDomain=grandpashabet1260.com&Mode=1&gameType=HiLo&isMobile=true&IsDemo=true" id="bogFrame" frameborder="0" allow="clipboard-read; clipboard-write" allowfullscreen="" style="overflow:hidden;height:100%;width:100%;background:#000">
</iframe>
<script type="text/javascript">
    window.addEventListener("message", (event) => {
        if(event.data.sender === "emwindow"){
            document.getElementById('bogFrame').contentWindow.postMessage(event.data, '*');
        }
    });

    var eventMethod = window.addEventListener
        ? "addEventListener"
        : "attachEvent";
    var eventer = window[eventMethod];
    var messageEvent = eventMethod === "attachEvent"
        ? "onmessage"
        : "message";
    eventer(messageEvent,
        function (e) {
            const { type, value, mode } = e.data;
            if (type === "GalaxsysHome") {
                window.location.href = "https://grandpashabet1260.com";
            } else if (type === "GalaxsysLogin") {
                if ("true" === 'true') {
                    window.location.href = "";
                } else {
                    window.parent.postMessage("BetongamesLogin", "*");
                    window.parent.postMessage({ gameName: "BetongamesLogin", type: "Login" }, "*");
                }
            } else if (type === "GalaxsysGame") {
                const gamesEnum = {
                    "betongameskeno10_2": 15543,
                    "betongameskeno8_2": 15542,
                    "betongamesblackjack": 11289,
                    "betongameskenoexpress": 10512,
                    "betongamespenalty": 6492,
                    "betongamesrocket": 5935,
                    "betongamessicbo": 5339,
                    "betongameshilo": 5236,
                    "betongamescrash": 2014,
                    "betongameskeno10": 2010,
                    "betongameskeno8": 19,
                    "betongamescashshow": 20786,
                    "betongamesgoldenra": 27201,
                    "betongamesmines": 32727,
                    "betongamesthimble": 32724,
                    "betongamesplinkoman": 32725
                }

                const gamesEnumNamed = {
                    "betongamespenalty": "Penalty",
                    "betongamesrocket": "Rocket",
                    "betongamessicbo": "SicBo",
                    "betongameshilo": "HiLo",
                    "betongamescrash": "Crash",
                    "betongameskeno8": "Keno8",
                    "betongameskeno8_2": "Keno8_2",
                    "betongameskeno10": "Keno10",
                    "betongameskeno10_2": "Keno10_2",
                    "betongamescashshow": "CashShow",
                    "betongamesblackjack": "BlackJack",
                    "betongamesgoldenra": "GoldenRA",
                    "betongamesmines": "Mines",
                    "betongamesthimble": "Thimble",
                    "betongamesplinkoman": "Plinkoman"
                }

                const str = window.location.href;
                if (str.includes("GamesLaunch")) {
                    const gameId = gamesEnum[value];
                    const lowerStr = str.toLowerCase();

                    let strArr = [];
                    if (str.includes("gameid")) {
                        strArr = str.split("gameid=");

                    } else if (str.includes("gameId")) {
                        strArr = str.split("gameId=");
                    } else if (str.includes("GameId")) {
                        strArr = str.split("GameId=");
                    }

                    const strFirst = strArr[0];
                    const strSecond = strArr[1].split("&");
                    strSecond[0] = gameId;
                    let strFull = `${strFirst}gameId=${strSecond.join("&")}`;

                    let playMode = null;
                    switch (mode) {
                        case 1:
                            playMode = "demo";
                            break;
                        case 2:
                            playMode = "real";
                            break;
                        case 3:
                            playMode = "lobby"
                            break;
                    }

                    if (strFull.indexOf("&playMode=demo") !== -1 || strFull.indexOf("&playMode=lobby") !== -1) {
                        strFull = strFull.replaceAll("&playMode=demo", "").replaceAll("&playMode=real", "").replaceAll("&playMode=lobby", "")
                        strFull += `&playMode=${playMode}`;
                    }

                    window.location.href = strFull;
                } else {
                    const initUrl = "https://cchhllpp.net?PartnerId=c627de75d8d5e3ede57cc5c3ff3c427d&culture=tr&mainDomain=grandpashabet1260.com&Mode=1";
                    document.getElementById("bogFrame").src = initUrl + `&gameKind=${gamesEnumNamed[value]}`;
                }

            }
        });
</script>
<div id="rgsWrapper" style="display: none;">
    <div id="rgsNotificationPopup">
        <div class="rgsPopupIcon">
            <img src="img/popup-icon.png">
        </div>
        <div class="rgsPopupTitle">Congratulations</div>
        <div class="rgsNotificationMessage">You have won Digitain Mega Jackpot</div>
        <div class="rgsNotificationPriceWrapper">
            <span class="price">1,113,317.99</span>
            <span class="currency">$</span>
        </div>
        <div class="rgsButtons">
            <button class="rgsClosePopup rgsCloseButton">Close</button>
            <button class="rgsClosePopup rgsKeepPlayingButton">Keep Playing</button>
        </div>
    </div>
</div>
</body>

</html>
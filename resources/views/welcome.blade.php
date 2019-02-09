<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{!! env('APP_NAME') !!}</title>

        <!-- vueJS! -->
        <script src="/js/vue.js"></script>
        <script src="/js/app.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="/img/yay-favicon.png"/>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            #top {
                border-bottom: 1px solid black;
                height: 7em;
            }

            #iconWrapper {
                max-width: 8em;
                float: left;
            }

            #topLeftLogo {
                width: 57%;
                margin: 0.75em 2em;
                border: 1.5px solid black;
                border-radius: 0.5em;
                padding: 0.25em;
            }

            #titleWrapper {
                float:left;
                margin-top: 1em;
                width: 67.5%;
                max-width: 67.5%;
            }

            #title {
                text-align: center;
            }

            #menuWrapper {
                float: right;
                width: 20%;
                margin-top: 2em;
                overflow-y: scroll;
            }

            #bottom {
                bottom: 0;
                position: fixed;
                width: 100%;
            }

            #copyrightNotice {
                margin-bottom: 1em;
                text-align: center;
            }

            #helpWrapper, #currencySwitchWrapper {
                border: 1px solid black;
                border-radius: 0.25em;
                width: 25%;
                float: left;
                margin-right: 1em;
                text-align: center;
                font-size: 2em;
            }

            .cp-button:hover {
                background-color: yellow;
            }

            #conversionWrapper {
                width: 100%;
                height: 40em;
            }

            #startingFrom {
                width: 39%;
                float: left;
            }

            #equalSign {
                width: 2%;
                float: left;
            }

            #exchangeTo {
                width: 39%;
                float: left;
            }

            .activity-block {
                text-align: center;

                border-radius: .125em;
                display: inline-block;
            }

            .activity-block > input {
                text-align: center;

                font-weight: 300;
                width: 30px;

                display: inline-block;
                vertical-align: middle;

                background-image: none;
                box-shadow: inset 0 0 0.125em 0 rgba(0,0,0,.125);
                box-sizing: content-box;
                -moz-box-sizing: content-box;
                min-width: 1em;
                -moz-appearance: textfield;
                -webkit-appearance: none;

                border: 1px solid #CCC;
                padding: .125em .25em;

                border-radius: .125em 0 0 .125em;

                font-size: 3em;
                height: 1.25em;
                line-height: 1.25;
                padding: .125em .25em;
            }

            .activity-block > button {
                border-width: .03125em;
                display: inline-block;
                vertical-align: middle;

                border-radius: 0 .125em .125em 0;
                margin-left: .125em;

                font-size: 3em;
                height: 1.55em;
                line-height: 1.25;
                padding: .125em .25em;

                font-weight: 300;
            }

            .arrow {
                font-size: 0.45em;
            }

            #inputLeft {
                float: right;
                margin-right: 2em;
            }

            #inputRight {
                float: left;
                margin-left: 2em;
            }

            #instructionsWrapper {
                height: 30em;
                text-align: center;
            }

            #pssLink, #iconWrapper, .cp-button, .clickable {
                cursor: pointer;
            }

            @media
            (min-width: 320px)
            and (max-width: 400px)
            {
                #conversionWrapper {
                    margin: 5.5em;
                    margin-top: 12em;
                    width: 79%;
                }

                #startingFrom {
                    width: 80%;
                    float: left;
                }

                #inputLeft {
                    float: left;
                    margin-left: 0;
                }

                #exchangeTo {
                    width: 80%;
                    float: left;
                }

                #inputRight {
                    float: left;
                    margin-left: 0;
                }

                #equalSign {
                    width: 50%;
                    float: left;
                    margin-left: 7em;
                }
            }

            @media
            (min-width: 401px)
            and (max-width: 1000px)
            {
                #conversionWrapper {
                    margin-left: 35%;
                    margin-top: 12em;
                    width: 65%;
                }

                #startingFrom {
                    width: 100%;
                    float: left;
                }

                #inputLeft {
                    float: left;
                    margin-left: 0;
                }

                #exchangeTo {
                    width: 100%;
                    float: left;
                }

                #inputRight {
                    float: left;
                    margin-left: 0;
                }

                #equalSign {
                    width: 76%;
                    float: left;
                    margin-left: 7em;
                }
            }

            @media
            (min-width: 320px)
            and (max-width: 690px)
            {
                #titleWrapper {
                    width: 60%;
                }

                #menuWrapper {
                    display: none;
                }
            }

            @media
            (min-width: 690px)
            and (max-width: 948px)
            {
                #titleWrapper {
                    width: 60.5% !important;
                }
            }

            @media
            (min-width: 948px)
            and (max-width: 1023px)
            {
                #titleWrapper {
                    width: 66.5% !important;
                }
            }

            /* iPhone X */
            @media only screen
            and (min-device-width : 320px)
            and (max-device-width : 812px)
            {
                #top {
                    height: 5em;
                }

                #titleWrapper {
                    width: 50% !important;
                    margin-top: 0;
                }

                #topLeftLogo {
                    width: 35%;
                    margin-left: 1em;
                }

                #menuWrapper {
                    margin-top: 1em;
                }

                #conversionWrapper {
                    margin-left: 20%;
                    margin-top: 25%;
                }
            }

            /* Try to get middle centered at most resos */
            @media
            (min-width: 1023px)
            {
                #startingFrom {
                    margin-top: 12em;
                }

                #exchangeTo {
                    margin-top: 12em;
                }


                #equalSign {
                    margin-top: 12em;
                }
            }

        </style>
    </head>
    <body id="app">
        <div id="content">
            <div id="top">
                <div id="iconWrapper" @click="toggleBurger()">
                    <img id="topLeftLogo" src="/img/yay-favicon.png" />
                </div>

                <div id="titleWrapper">
                    <div id="title">
                        <h2>Yay! Bitcoin</h2>
                    </div>
                </div>

                <div id="menuWrapper">
                    <div class="cp-button" id="currencySwitchWrapper" @click="toggleOptions()">
                        <div id="currencySwitchToggle">
                            <i class="fa fa-cog"></i>
                        </div>
                    </div>
                    <div class="cp-button" id="helpWrapper" @click="scrollToManual()">
                        <div id="helpToggle">
                            <i class="fa fa-question"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div id="middle">
                <div id="conversionWrapper">
                    <div id="startingFrom">
                        <div class="activity-block" id="inputLeft">
                            <input type="text" title="inputLeft" :style="{width: textboxLeftAuthWidth}" v-model="currencyAmtLeft" @keyup="autoUpdateValues()" @click="side = 'left'"/>
                            <button type="button" class="clickable" @click="toggleLeftCurrencies()">
                                @{{ buttonLeftCurrency }}
                                <sup class="arrow">
                                    <i class="fa fa-sort-desc"></i>
                                </sup>
                            </button>
                        </div>
                    </div>

                    <div class="equals-area" id="equalSign">
                        <div class="equals-block">
                            <h1> = </h1>
                        </div>
                    </div>

                    <div class="activity-block" id="exchangeTo">
                        <div class="activity-block" id="inputRight">
                            <input type="text" title="inputRight" :style="{width: textboxRightAuthWidth}" v-model="currencyAmtRight" @keyup="autoUpdateValues()" @click="side = 'right'"/>
                            <button type="button" class="clickable" @click="toggleRightCurrencies()">
                                @{{ buttonRightCurrency }}
                                <sup class="arrow">
                                    <i class="fa fa-sort-desc"></i>
                                </sup>
                            </button>
                        </div>
                    </div>
                </div>

                <div id="instructionsWrapper">
                    <h2> How To Use </h2>

                    <p> Coming Soon! </p>
                </div>

            </div>

            <div id="bottom">
                <div id="copyrightNotice">
                    <p>
                        <i class="fa fa-copyright"></i> <span>2019. <span id="pssLink" @click="sendTo('https://www.projectsaturnstudios.com')">Project Saturn Studios.</span> 1 BTC = $@{{ activeExchangeRate }}</span>
                    </p>
                </div>
            </div>
        </div>

        <script>
            let app = new Vue({
                el: '#content',
                data () {
                    return {
                        currencyAmtLeft: '0',
                        currencyAmtLeftSize: 30,
                        currencyAmtLeftLength: 1,

                        currencyAmtRight: '0',
                        currencyAmtRightLength: 30,
                        currencyAmtRightSize: 1,

                        buttonLeftCurrency: 'BTC',
                        buttonRightCurrency: 'USD',

                        activeExchange: 'bitstamp',
                        activeExchangeRate: 0,
                        side: 'left'
                    }
                },
                computed: {
                    textboxLeftAuthWidth: function() {
                        let result = this.currencyAmtLeftSize;

                        switch(this.currencyAmtLeft.toString().length)
                        {
                            case 0:
                                result = 30;
                                break;

                            case 1:
                                result = 30;
                                break;

                            case 2:
                                result = 60;
                                break;

                            default:
                                if(this.currencyAmtLeft.length > this.currencyAmtLeftLength) {
                                    result = result + (30 * (this.currencyAmtLeft.toString().length - this.currencyAmtLeftLength));
                                }
                                else {
                                    result = result - (30 * (this.currencyAmtLeftLength - this.currencyAmtLeft.toString().length));
                                }
                        }

                        this.currencyAmtLeftLength = this.currencyAmtLeft.toString().length;
                        this.currencyAmtLeftSize = result;

                        return result + 'px';
                    },
                    textboxRightAuthWidth: function() {
                        let result = this.currencyAmtRightSize;

                        switch(this.currencyAmtRight.toString().length)
                        {
                            case 0:
                            case 1:
                                result = 30;
                                break;

                            case 2:
                                result = 60;
                                break;

                            default:
                                if(this.currencyAmtRight.toString().length > this.currencyAmtRightLength) {
                                    result = result + (30 * (this.currencyAmtRight.toString().length - this.currencyAmtRightLength));
                                }
                                else {
                                    result = result - (30 * (this.currencyAmtRightLength - this.currencyAmtRight.toString().length));
                                }
                        }


                        this.currencyAmtRightLength = this.currencyAmtRight.toString().length;
                        this.currencyAmtRightSize = result;

                        return result + 'px';
                    }
                },
                methods: {
                    autoUpdateValues: function autoUpdateValues() {
                        if(this.side === 'left') {
                            let leftSideVal = this.currencyAmtLeft.toString();

                            if(leftSideVal.length > 1)
                            {
                                if (this.currencyAmtLeft[leftSideVal.length - 1] !== '.') {
                                    this.currencyAmtRight = parseFloat(parseFloat(this.currencyAmtLeft) * parseFloat(this.activeExchangeRate));
                                    this.currencyAmtRight = this.currencyAmtRight.toFixed(2).replace(/0+$/, "");

                                    if (this.currencyAmtRight[this.currencyAmtRight.length - 1] === '.') {
                                        this.currencyAmtRight = this.currencyAmtRight.slice(0, -1);
                                    }
                                }
                            }
                            else if(leftSideVal.length === 1) {
                                if (leftSideVal !== '.') {
                                    this.currencyAmtRight = parseFloat(parseFloat(this.currencyAmtLeft) * parseFloat(this.activeExchangeRate));
                                    this.currencyAmtRight = this.currencyAmtRight.toFixed(2).replace(/0+$/, "");

                                    if (this.currencyAmtRight[this.currencyAmtRight.length - 1] === '.') {
                                        this.currencyAmtRight = this.currencyAmtRight.slice(0, -1);
                                    }
                                }
                            }

                        }
                        else if(this.side === 'right') {
                            let rightSideVal = this.currencyAmtRight.toString();

                            if(rightSideVal.length > 1)
                            {
                                if (this.currencyAmtRight[this.currencyAmtRight.toString().length - 1] !== '.') {
                                    this.currencyAmtLeft = parseFloat(parseFloat(this.currencyAmtRight) / parseFloat(this.activeExchangeRate));
                                    this.currencyAmtLeft = this.currencyAmtLeft.toFixed(6).replace(/0+$/, "");

                                    if (this.currencyAmtLeft[this.currencyAmtLeft.length - 1] === '.') {
                                        this.currencyAmtLeft = this.currencyAmtLeft.slice(0, -1);
                                    }
                                }
                            }
                            else if(rightSideVal.length === 1) {
                                if (rightSideVal !== '.') {
                                    this.currencyAmtLeft = parseFloat(parseFloat(this.currencyAmtRight) / parseFloat(this.activeExchangeRate));
                                    this.currencyAmtLeft = this.currencyAmtLeft.toFixed(6).replace(/0+$/, "");

                                    if (this.currencyAmtLeft[this.currencyAmtLeft.length - 1] === '.') {
                                        this.currencyAmtLeft = this.currencyAmtLeft.slice(0, -1);
                                    }
                                }
                            }
                        }
                    },
                    adjustLeftAmt: function adjustLeftAmt() {
                        if(this.currencyAmtLeft === '') {
                            this.currencyAmtLeft = 0;
                        }
                        else {
                            if (this.currencyAmtLeft % 1 === 0) {
                                if (this.currencyAmtLeft[this.currencyAmtLeft.toString().length - 1] !== '.') {
                                    this.currencyAmtLeft = parseInt(this.currencyAmtLeft);
                                }
                            }
                            else {
                                this.currencyAmtLeft = parseFloat(this.currencyAmtLeft);
                            }
                        }

                        this.side = 'left';
                        this.callOutToExchangeForRates();
                    },
                    adjustRightAmt: function adjustRighttAmt() {
                        if(this.currencyAmtRight === '') {
                            this.currencyAmtRight = 0
                        } else {
                            if (this.currencyAmtRight % 1 === 0) {

                                if (this.currencyAmtRight[this.currencyAmtRight.toString().length - 1] !== '.') {
                                    this.currencyAmtRight = parseInt(this.currencyAmtRight);
                                }
                            }
                            else {
                                this.currencyAmtRight = parseFloat(this.currencyAmtRight);
                            }
                        }

                        this.side = 'right';
                        this.callOutToExchangeForRates();
                    },
                    callOutToExchangeForRates: function callOutToExchangeForRates() {
                        switch(this.activeExchange) {
                            case 'bitstamp':
                                this.getBitStampRates();
                                break;
                        }
                    },
                    getBitStampRates: function getBitStampRates() {
                        let _this = this;
                        let exchangeType = this.buttonLeftCurrency.toLowerCase() + this.buttonRightCurrency.toLowerCase();

                        $.ajax({

                            //url: 'https://www.bitstamp.net/api/v2/ticker/'+ exchangeType +'/',
                            url: '/api/get-bitstamp-rate?exchangeType='+ exchangeType +'/',
                            type: 'GET',
                            dataType: 'json',
                            success: function(data) {

                                _this.activeExchangeRate = parseFloat(data['last']);

                                _this.autoUpdateValues();

                                setTimeout(function () {
                                    _this.callOutToExchangeForRates();
                                }, 10000);


                            },
                            error: function(data) {
                                console.log('Hmmm error');
                            }
                        });

                    },
                    scrollToManual: function scrollToManual() {
                        $('html,body').animate({
                            scrollTop: $("#instructionsWrapper").offset().top
                        }, 'slow');
                    },
                    sendTo: function sendTo(url) {
                        window.location.href = url;
                    },
                    toggleBurger: function toggleBurger() {
                        alert('Menu Box Available Soon!')
                    },
                    toggleOptions: function callOptions() {
                        alert('Options Box Available Soon!')
                    },
                    toggleLeftCurrencies: function toggleLeftCurrencies() {
                        alert('Currency Selector Available Soon!')
                    },
                    toggleRightCurrencies: function toggleRightCurrencies() {
                        alert('Exchange To Currency Selector Available Soon!')
                    },
                },
                updated: function () {},
                mounted: function () {
                    console.log('Welcome to Yay! Bitcoin!');
                    this.currencyAmtLeft = 1;
                    this.currencyAmtRight = {!! $rate !!};
                    this.activeExchangeRate = this.currencyAmtRight.toFixed(2);
                    this.side = 'left';
                    this.callOutToExchangeForRates();
                }
            });
        </script>
    </body>
</html>

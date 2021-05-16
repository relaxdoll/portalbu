<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    {{--    <link rel="shortcut icon" href="/img/oneibis.png" type="image/x-icon">--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>AccessBV</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <link rel="stylesheet" href="{{ mix('css/landing.css') }}">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
          integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"
            integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>

        body {
            background-color: #383431;
        }

        a {
            text-decoration: none;
        }

        h2 {
            font-size: 1.5rem;
        }

        .row {
            --bs-gutter-x: 0;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(var(--bs-gutter-y) * -1);
            margin-right: calc(var(--bs-gutter-x) / -2);
            margin-left: calc(var(--bs-gutter-x) / -2);
        }

        .col-md-1-5 {
            flex: 0 0 auto;
            width: 12.5%;
        }

        .block-img {
            width: 100%;
            height: 350px;
        }

        .block .block-content {
            z-index: 2;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 2.5rem;
            position: absolute;
        }

        .block {
            height: 350px;
            position: relative;
            cursor: pointer;
            overflow: hidden;
        }

        .block:before {
            position: absolute;
            z-index: 1;
            background-color: rgba(0, 0, 0, .5);
            width: 100%;
            height: 100%;
            content: "";
            /*transition: all .2s ease-in-out;*/
        }

        .block .block-content .block-name {
            font-size: 2rem;
            color: #fff;
        }

        .block .block-content .block-teaser {
            font-size: 1rem;
            color: #fff;
        }

        .body-wrapper {
            color: #fff;
            background: #161413;
        }

        .button {
            display: inline-block;
            vertical-align: middle;
            margin: 0 0 1rem;
            padding: .85em 1em;
            border: 1px solid transparent;
            border-radius: 4px;
            transition: background-color .25s ease-out, color .25s ease-out;
            font-family: inherit;
            font-size: .9rem;
            -webkit-appearance: none;
            line-height: 1;
            text-align: center;
            cursor: pointer;
        }

        .button.primary, .button.primary.disabled, .button.primary.disabled:focus, .button.primary.disabled:hover, .button.primary[disabled], .button.primary[disabled]:focus, .button.primary[disabled]:hover {
            background-color: #b0002e;
            color: #fefefe;
        }

        .fade-enter-active, .fade-leave-active {
            transition: opacity .1s;
        }

        .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */
        {
            opacity: 0;
        }

        footer .footer-svg {
            min-width: 25px;
            height: 15px;
            padding: 10px;
            box-sizing: content-box;
            margin-left: 5px;
            cursor: pointer;
        }

        footer .footer-svg.linkedin {
            background-color: #0273b0;
        }

        footer .footer-svg.youtube {
            background-color: red;
        }

        footer .socials {
            text-align: right;
            flex-grow: 1;
        }

    </style>
</head>

<body id="skrollr-body">

<div id="app">
    {{--    <div v-if="modal" style="position: absolute; z-index: 3;left: 2.5%">--}}
    {{--        <div class="modal-dialog modal-lg">--}}
    {{--            <div class="modal-content" style="height: 95vh; width: 95vw; background-color: #312d2b">--}}
    {{--                <iframe width="560" height="315" src="https://www.youtube.com/embed/cVBwe9zmFNE" title="YouTube video player" frameborder="0"--}}
    {{--                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <header>
        <div style="background-color: #312d2b; padding: 36px">
            <img src="/images/logo.png" alt="AccessBV Logo" width="277.88" height="78">
        </div>
    </header>

    <section>
        <div class="row">
            <div v-for="(datum,index) in data" :key="index" class="col-sm-12 col-md-6 col-xl-4" style="color: white; padding: 0">
                <div @click="selectContent(datum, index)">
                    <div class="block">
                        <div class="block-content">
                            <span class="block-name">@{{ datum.name }}</span>
                            <span class="block-teaser">@{{ datum.teaser }}</span>
                        </div>
                        <img :src="datum.imgSrc"
                             alt="955e3166-c2e4-4f3d-a02c-946dc436e3fd.jpg" class="block-img">
                    </div>
                </div>
                <transition name="fade">
                    <div class="col-sm-12" v-if="datum.isSelect" :class="datum.isSelect ? 'body-wrapper' : ''">
                        <div>
                            <div style="padding: 2.5rem">
                                <h2>@{{ datum.name }}</h2>
                                <div style="max-width: 90rem; font-size: 13px"><p>@{{ datum.content1 }}</p>

                                    <p v-if="datum.content2" style="font-size: 13px">@{{ datum.content2 }}</p>
                                    <p v-if="datum.content2">&nbsp;</p>

                                    <p v-if="datum.content3" style="font-size: 13px">@{{ datum.content3 }}</p>
                                    <p v-if="datum.content3">&nbsp;</p>
                                </div>
                                <a v-if="datum.hasButton" :href="datum.buttonLink" class="button primary margin-0" target="_blank">@{{ datum.textOnButton }}</a>
                            </div>
                        </div>
                    </div>
                </transition>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/cVBwe9zmFNE?controls=0" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>


    <footer style="background-color: #312d2b; color: white; padding: 14.4px 36px; font-size: 14.4px;">
        <div class="row">
            <div class="col-sm-12 " :class="width > 600 ? 'col-md-1-5' : ''">
                &copy; 2021&nbsp;<a href="http://www.bureauveritas.com/commodities" target="_blank" style="color: white">Bureau Veritas</a>
            </div>
            <div class="col-sm-12" :class="width > 600 ? 'col-md-1-5' : ''">
                <a href="http://www.bureauveritas.com/terms_and_conditions" target="_blank" style="color: white">Terms &amp; conditions</a>
            </div>
            <div class="col-sm-12 " :class="width > 600 ? 'col-md-1-5' : ''">
                <a href="https://personaldataprotection.bureauveritas.com" target="_blank" style="color: white">GDPR policy</a>
            </div>
        </div>
        <div class="socials">
            <a href="https://www.linkedin.com/company/bureau-veritas-group/" target="_blank">
                <img class="footer-svg linkedin" src="/images/linkedin-in.svg" alt="">
            </a>
            {{--            <a href="https://www.youtube.com/watch?v=cVBwe9zmFNE&ab_channel=BureauVeritasGroup" target="_blank">--}}
            {{--                <img class="footer-svg youtube" src="/images/youtube.svg" alt="">--}}
            {{--            </a>--}}
            <a href="https://www.youtube.com/user/BureauVeritasGroup" target="_blank">
                <img class="footer-svg youtube" src="/images/youtube.svg" alt="">
            </a>
        </div>
    </footer>

</div>

</body>
<!--   core js files    -->
<script>
    new Vue({
        el: '#app',
        data: {
            select: 'container',
            bl_no: null,
            booking_no: null,
            container_no: null,
            loading: false,
            selectedContent: {
                imgSrc: 'https://accessbv.com/media/cache/image/uploads/blocks/955e3166-c2e4-4f3d-a02c-946dc436e3fd.jpg',
                name: 'Accessbv',
                teaser: 'Accessbv - Your Gateway To Inspection Data And Services',
                content1: 'Welcome to our brand new AccessBV Homepage.',
                content2: `AccessBV is Bureau Veritas' umbrella brand for various Customer Portals and our commitment to shape trust in delivering the data you need.
Whether you're a New or Existing Client - Our experts ensure that your assets are in good hands.`,
                content3: null,
                hasButton: false,
                textOnButton: null,
                buttonLink: null,
                isSelect: false,
            },
            data: [
                {
                    imgSrc: 'https://accessbv.com/media/cache/image/uploads/blocks/955e3166-c2e4-4f3d-a02c-946dc436e3fd.jpg',
                    name: 'Accessbv',
                    teaser: 'Accessbv - Your Gateway To Inspection Data And Services',
                    content1: 'Welcome to our brand new AccessBV Homepage.',
                    content2: `AccessBV is Bureau Veritas' umbrella brand for various Customer Portals and our commitment to shape trust in delivering the data you need.
Whether you're a New or Existing Client - Our experts ensure that your assets are in good hands.`,
                    content3: null,
                    hasButton: false,
                    textOnButton: null,
                    buttonLink: null,
                    isSelect: true,
                },
                {
                    imgSrc: '/images/inspection.jpg',
                    name: 'Inspection',
                    teaser: 'Inspection report online verification system',
                    content1: 'Inspection report online verification system',
                    content2: 'Our Directory of inspection reports enables you to verify the status of any BV issued management system or process certificate',
                    content3: null,
                    hasButton: true,
                    textOnButton: 'Inspection',
                    buttonLink: 'https://inspection-bureauveritas.com',
                    isSelect: false,
                },
                {
                    imgSrc: 'https://accessbv.com/media/cache/image/uploads/blocks/7527941d-3045-471c-97f5-30155d996e7c.jpg',
                    name: 'Food',
                    teaser: 'Our Food Test Data - Available For You!',
                    content1: `Food, beverages and water testing remains a vital part of any food manufacturing control and preventive strategy.
Bureau Veritas can deliver the analytical requirements of your business whether you are involved in food handling, manufacturing or beverages & water production, to name but a few.`,
                    content2: 'Visit our portal to View results and Invoices, or Track your samples. ',
                    content3: 'Interact with your suppliers and ensure the confomance of your Testing!',
                    hasButton: true,
                    textOnButton: 'Food.AccessBV.com',
                    buttonLink: 'https://food.accessbv.com',
                    isSelect: false,
                },
                {
                    imgSrc: 'https://accessbv.com/media/cache/image/uploads/blocks/23e99ddb-5e6c-4b44-b818-659505a6e2ba.jpg',
                    name: 'Trade',
                    teaser: 'Our Commodities Trade Portal - Cutting Edge Integration Technology And A Pleasant Front Page',
                    content1: 'Whether it\'s Oil and Gas, Metals and Minerals, or Agri-Commodity data you\'re looking for -  Our global output is available at your fingertipes. \n' +
                        'Log in and Start mining!',
                    content2: null,
                    content3: null,
                    hasButton: true,
                    textOnButton: 'Trade.AccessBV.com',
                    buttonLink: 'https://icp.accessbv.com/',
                    isSelect: false,
                },
                {
                    imgSrc: 'https://accessbv.com/media/cache/image/uploads/blocks/7585ab3a-f1b9-4626-9c65-93bac4850cd8.jpg',
                    name: 'Restart your Business With BV',
                    teaser: 'Suite Of Solutions',
                    content1: 'Bureau Veritas, a world leader in testing, inspection and certification (TIC), is offering a digital platform to support companies and public authorities in their health protocols and their commitment to transparency.',
                    content2: 'The platform includes a set of applications that enhances the "Restart Your Business with BV" suite of solutions. Launched by Bureau Veritas at the end of April, it meets the needs of companies getting ready to restart their business activities in the right sanitary conditions.',
                    content3: 'The platform includes operational assistance tools for companies who want to reassure stakeholders on their compliance with regulations and recommended protective measures and benefit from a label with online information for end-users and consumers.',
                    hasButton: true,
                    textOnButton: 'Restart your business with BV today!',
                    buttonLink: 'https://onboardwith.bureauveritas.com/',
                    isSelect: false,
                },
                {
                    imgSrc: 'https://accessbv.com/media/cache/image/uploads/blocks/a6696413-5b6a-40f7-bf71-a7b3474eb8d4.jpg',
                    name: 'Calibration',
                    teaser: 'The Calibration Company -  A Bureau Veritas Brand',
                    content1: 'The Calibration Company are experts at calibrating your measuring equipment. We operate in a state-of-the-art, ISO accredited calibration laboratory providing fast and accurate mass, length and temperature calibration services for your measuring equipment. Customers can monitor the status of their equipment on the customer portal, allowing for total tractability at every stage of the process.',
                    content2: null,
                    content3: null,
                    hasButton: true,
                    textOnButton: 'Visit The Calibration Company',
                    buttonLink: 'https://thecalibrationcompany.eu/index.php/about-the-calibration-company/',
                    isSelect: false,
                },
                {
                    imgSrc: 'https://accessbv.com/media/cache/image/uploads/blocks/edcb5571-f1ee-4237-b02d-f0a2bc9bf6fb.jpg',
                    name: 'Contact',
                    teaser: 'Contact Our Experts',
                    content1: 'Within the AccessBV portals, you can contact any of our job coordinators or offices, 24/7 \n' +
                        'Need additional information ?   send us an email , and we\'ll contact you as soon as possible.',
                    content2: null,
                    content3: null,
                    hasButton: true,
                    textOnButton: 'Contact us!',
                    buttonLink: 'mailto:Contact@AccessBV.com',
                    isSelect: false,
                },
            ],
            modal: true,
        },
        methods: {
            selectContent(data, index) {
                this.data.forEach((datum) => {
                    datum.isSelect = false;
                });
                this.data[index].isSelect = true;
                this.selectedContent = data;
            },
            submit(param) {
                if (this[param]) {
                    this.loading = true;
                    new Promise(function (resolve, reject) {
                        setTimeout(function () {
                            resolve('foo');
                        }, 2000);
                    })
                        .then(response => {
                            axios.post('/api/tracking/crud/search', {'tracking': this[param], 'column': param})
                                .then(response => {
                                    this.loading = false;
                                    console.log(response.data.data);
                                    if (!response.data.data) {
                                        swal("Error", "Incorrect Tracking Number!", "error");
                                    } else {
                                        window.location.href = "/container_tracking/" + response.data.data;
                                    }
                                    resolve(response.data);
                                })
                                .catch(error => {
                                    console.log(error);
                                    reject(error.response);
                                });
                        });
                }
            }
        },
        computed: {
            width: function () {
                return window.innerWidth > 0 ? window.innerWidth : screen.width
            }
        },
        created() {
        },
        mounted() {
        },
    })
</script>
<script src=" {{ mix('/js/landing.js') }}"></script>

</html>

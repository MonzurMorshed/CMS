<!DOCTYPE html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home &#8211; Events Organizer</title>
    <meta name='robots' content='max-image-preview:large' />
    <style>
        img:is([sizes="auto" i],
        [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "assets\/js\/wp-emoji-release.min.js"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <link rel='stylesheet' id='elementor-frontend-css' href='{{ asset('assets/css/frontend.min1c88.css') }}'
        media='all' />
    <link rel='stylesheet' href='{{ asset('assets/css/custom.css') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-post-377-css' href='{{ asset('assets/css/post-css/post-3778c60.css') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-post-381-css' href='{{ asset('assets/css/post-css/post-3818c60.css') }}'
        media='all' />
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='global-styles-inline-css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :root {
            --wp--style--global--content-size: 800px;
            --wp--style--global--wide-size: 1200px;
        }

        :where(body) {
            margin: 0;
        }

        .wp-site-blocks>.alignleft {
            float: left;
            margin-right: 2em;
        }

        .wp-site-blocks>.alignright {
            float: right;
            margin-left: 2em;
        }

        .wp-site-blocks>.aligncenter {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }

        :where(.wp-site-blocks)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :where(.wp-site-blocks)> :first-child {
            margin-block-start: 0;
        }

        :where(.wp-site-blocks)> :last-child {
            margin-block-end: 0;
        }

        :root {
            --wp--style--block-gap: 24px;
        }

        :root :where(.is-layout-flow)> :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-flow)> :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-flow)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained)> :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-constrained)> :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :root :where(.is-layout-flex) {
            gap: 24px;
        }

        :root :where(.is-layout-grid) {
            gap: 24px;
        }

        .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        body {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        a:where(:not(.wp-element-button)) {
            text-decoration: underline;
        }

        :root :where(.wp-element-button, .wp-block-button__link) {
            background-color: #32373c;
            border-width: 0;
            color: #fff;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            text-decoration: none;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='template-kit-export-css'
        href='{{ asset('assets/css/template-kit-export-public982a.css') }}' media='all' />
    <link rel='stylesheet' id='cute-alert-css' href='{{ asset('assets/lib/cute-alert/style2e46.css') }}'
        media='all' />
    <link rel='stylesheet' id='text-editor-style-css' href='{{ asset('assets/css/text-editor2e46.css') }}'
        media='all' />
    <link rel='stylesheet' id='hello-elementor-css' href='{{ asset('assets/css/style.mindeae.css') }}' media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css' href='{{ asset('assets/css//theme.mindeae.css') }}'
        media='all' />
    <link rel='stylesheet' id='hello-elementor-header-footer-css'
        href='{{ asset('assets/css//header-footer.mindeae.css') }}' media='all' />
    <link rel='stylesheet' id='elementor-post-28-css' href='{{ asset('assets/css/post-css/post-288c60.css') }}'
        media='all' />
    <link rel='stylesheet' id='e-animation-fadeInUp-css'
        href='{{ asset('assets/lib/animations/styles/fadeInUp.min1c88.css') }}' media='all' />
    <link rel='stylesheet' id='widget-heading-css' href='{{ asset('assets/css/widget-heading.min1c88.css') }}'
        media='all' />
    <link rel='stylesheet' id='widget-text-editor-css' href='{{ asset('assets/css/widget-text-editor.min1c88.css') }}'
        media='all' />
    <link rel='stylesheet' id='e-animation-float-css'
        href='{{ asset('assets/lib/animations/styles/e-animation-float.min1c88.css') }}' media='all' />
    <link rel='stylesheet' id='mediaelement-css' href='{{ asset('assets/css/mediaelementplayer-legacy.min1f61.css') }}'
        media='all' />
    <link rel='stylesheet' id='wp-mediaelement-css' href='{{ asset('assets/css/wp-mediaelement.mind1c0.css') }}'
        media='all' />
    <link rel='stylesheet' id='widget-spacer-css' href='{{ asset('assets/css/widget-spacer.min1c88.css') }}'
        media='all' />
    <link rel='stylesheet' id='e-animation-fadeInLeft-css'
        href='{{ asset('assets/lib/animations/styles/fadeInLeft.min1c88.css') }}' media='all' />
    <link rel='stylesheet' id='widget-image-css' href='{{ asset('assets/css/widget-image.min1c88.css') }}'
        media='all' />
    <link rel='stylesheet' id='widget-counter-css' href='{{ asset('assets/css/widget-counter.min1c88.css') }}'
        media='all' />
    <link rel='stylesheet' id='widget-icon-box-css' href='{{ asset('assets/css/widget-icon-box.min1c88.css') }}'
        media='all' />
    <link rel='stylesheet' id='widget-divider-css' href='{{ asset('assets/css/widget-divider.min1c88.css') }}'
        media='all' />
    <link rel='stylesheet' id='widget-icon-list-css' href='{{ asset('assets/css/widget-icon-list.min1c88.css') }}'
        media='all' />
    <link rel='stylesheet' id='elementor-post-60-css' href='{{ asset('assets/css/post-css/post-6063b1.css') }}'
        media='all' />
    <link rel='stylesheet' id='ekit-widget-styles-css' href='{{ asset('assets/css/widget-styles7433.css') }}'
        media='all' />
    <link rel='stylesheet' id='ekit-responsive-css' href='{{ asset('assets/css/responsive7433.css') }}'
        media='all' />
    <link rel='stylesheet' id='swiper-css' href='https://gajean.com/tkit/eveno/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Archivo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLibre+Franklin%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&display=auto'
        media='all' />

<link rel='stylesheet' id='widget-image-carousel-css' href='https://gajean.com/tkit/eveno/wp-content/plugins/elementor/assets/css/widget-image-carousel.min.css' media='all' />
<link rel='stylesheet' id='e-swiper-css' href='https://gajean.com/tkit/eveno/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css' media='all' />
    <link rel='stylesheet' id='elementor-icons-ekiticons-css' href='{{ asset('assets/css/ekiticons7433.css') }}'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="assets/js/jquery.minf43b.js" id="jquery-core-js"></script>
    <script src="assets/js/jquery-migrate.min5589.js" id="jquery-migrate-js"></script>
    <script src="assets/js/template-kit-export-public982a.js " id="template-kit-export-js"></script>
    <link rel="https://api.w.org/" href="https://gajean.com/tkit/eveno/wp-json/" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://gajean.com/tkit/eveno/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.7.2" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='https://gajean.com/tkit/eveno/?p=60' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://gajean.com/tkit/eveno/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgajean.com%2Ftkit%2Feveno%2Ftemplate-kit%2Fhome%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://gajean.com/tkit/eveno/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fgajean.com%2Ftkit%2Feveno%2Ftemplate-kit%2Fhome%2F&amp;format=xml" />
    <meta name="generator"
        content="Elementor 3.26.4; features: e_font_icon_svg, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    <!-- Production version -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body
    class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-60 wp-embed-responsive elementor-default elementor-template-full-width elementor-kit-28 elementor-page elementor-page-60">
    <div class="ekit-template-content-markup ekit-template-content-header ekit-template-content-theme-support">
        <div data-elementor-type="wp-post" data-elementor-id="377" class="elementor elementor-377">
            <div class="elementor-element elementor-element-279f6e4 e-flex e-con-boxed e-con e-parent"
                data-id="279f6e4" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-66a92c3 e-con-full e-flex e-con e-child"
                        data-id="66a92c3" data-element_type="container">
                        <div class="elementor-element elementor-element-5e48be3 e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex e-con e-child"
                            data-id="5e48be3" data-element_type="container">
                            <div class="elementor-element elementor-element-e1270db elementor-icon-list--layout-inline elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                data-id="e1270db" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items elementor-inline-items">
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <span class="elementor-icon-list-icon">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-envelope"
                                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                                    </path>
                                                </svg> </span>
                                            <span class="elementor-icon-list-text">Hello@Email.co</span>
                                        </li>
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <span class="elementor-icon-list-icon">
                                                <svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-alt"
                                                    viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
                                                    </path>
                                                </svg> </span>
                                            <span class="elementor-icon-list-text">+62 123 486 789</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-b252d21 e-con-full e-flex e-con e-child"
                            data-id="b252d21" data-element_type="container">
                            <div class="elementor-element elementor-element-7b1a9e5 e-grid-align-right e-grid-align-tablet-center elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                data-id="7b1a9e5" data-element_type="widget" data-widget_type="social-icons.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-animation-float elementor-repeater-item-2dd858e"
                                                target="_blank">
                                                <span class="elementor-screen-only">Facebook</span>
                                                <svg class="e-font-icon-svg e-fab-facebook" viewBox="0 0 512 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                                    </path>
                                                </svg> </a>
                                        </span>
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-float elementor-repeater-item-9db63e2"
                                                target="_blank">
                                                <span class="elementor-screen-only">Twitter</span>
                                                <svg class="e-font-icon-svg e-fab-twitter" viewBox="0 0 512 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                                                    </path>
                                                </svg> </a>
                                        </span>
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-animation-float elementor-repeater-item-7c68a19"
                                                target="_blank">
                                                <span class="elementor-screen-only">Youtube</span>
                                                <svg class="e-font-icon-svg e-fab-youtube" viewBox="0 0 576 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
                                                    </path>
                                                </svg> </a>
                                        </span>
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-pinterest elementor-animation-float elementor-repeater-item-5111efb"
                                                target="_blank">
                                                <span class="elementor-screen-only">Pinterest</span>
                                                <svg class="e-font-icon-svg e-fab-pinterest" viewBox="0 0 496 512"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z">
                                                    </path>
                                                </svg> </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-6149115 e-con-full e-flex e-con e-child"
                        data-id="6149115" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-element elementor-element-d992bd8 e-con-full e-flex e-con e-child"
                            data-id="d992bd8" data-element_type="container">
                            <div class="elementor-element elementor-element-ae6dc22 elementor-widget__width-initial elementor-widget elementor-widget-image"
                                data-id="ae6dc22" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img fetchpriority="high" width="486" height="105"
                                        src="assets/asset-contents/uploads/sites/2/2024/02/Eveno-Light.png"
                                        class="attachment-large size-large wp-image-21" alt=""
                                        srcset="https://gajean.com/tkit/eveno/wp-content/uploads/sites/2/2024/02/Eveno-Light.png 486w, https://gajean.com/tkit/eveno/wp-content/uploads/sites/2/2024/02/Eveno-Light-300x65.png 300w"
                                        sizes="(max-width: 486px) 100vw, 486px" />
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3b762e9 elementor-widget-tablet__width-initial elementor-widget elementor-widget-ekit-nav-menu"
                                data-id="3b762e9" data-element_type="widget"
                                data-widget_type="ekit-nav-menu.default">
                                <div class="elementor-widget-container">
                                    <nav class="ekit-wid-con ekit_menu_responsive_tablet" data-hamburger-icon=""
                                        data-hamburger-icon-type="icon" data-responsive-breakpoint="1024">
                                        <button class="elementskit-menu-hamburger elementskit-menu-toggler"
                                            type="button" aria-label="hamburger-icon">
                                            <span class="elementskit-menu-hamburger-icon"></span><span
                                                class="elementskit-menu-hamburger-icon"></span><span
                                                class="elementskit-menu-hamburger-icon"></span>
                                        </button>
                                        <div id="ekit-megamenu-menu-1"
                                            class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default ekit-nav-menu-one-page-no ekit-nav-dropdown-hover">
                                            <ul id="menu-menu-1"
                                                class="elementskit-navbar-nav elementskit-menu-po-center submenu-click-on-icon">
                                                <li id="menu-item-73"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-73 nav-item elementskit-mobile-builder-content active"
                                                    data-vertical-menu=750px><a href="/"
                                                        class="ekit-menu-nav-link active">Home</a></li>
                                                <li id="menu-item-74"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-74 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content"
                                                    data-vertical-menu=750px><a href="#"
                                                        class="ekit-menu-nav-link ekit-menu-dropdown-toggle">About<i
                                                            aria-hidden="true"
                                                            class="icon icon-plus elementskit-submenu-indicator"></i></a>
                                                    <ul class="elementskit-dropdown elementskit-submenu-panel">
                                                        <li id="menu-item-75"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-75 nav-item elementskit-mobile-builder-content"
                                                            data-vertical-menu=750px><a href="../about-us"
                                                                class=" dropdown-item">About Us</a>
                                                        <li id="menu-item-76"
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-76 nav-item elementskit-mobile-builder-content"
                                                            data-vertical-menu=750px><a href="#"
                                                                class=" dropdown-item">Our Team</a>
                                                    </ul>
                                                </li>
                                                <li id="menu-item-77"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-77 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content"
                                                    data-vertical-menu=750px><a href="#"
                                                        class="ekit-menu-nav-link ekit-menu-dropdown-toggle">Services<i
                                                            aria-hidden="true"
                                                            class="icon icon-plus elementskit-submenu-indicator"></i></a>
                                                    <!-- <ul class="elementskit-dropdown elementskit-submenu-panel">
 <li id="menu-item-78" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-78 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="../our-services/index.html" class=" dropdown-item">Our Services</a>
  <li id="menu-item-79" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-79 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="../detail-service/index.html" class=" dropdown-item">Detail Service</a>	<li id="menu-item-80" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-80 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="../our-pricing/index.html" class=" dropdown-item">Our Pricing</a></ul> -->
                                                </li>
                                                <li id="menu-item-81"
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-81 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content"
                                                    data-vertical-menu=750px><a href="#"
                                                        class="ekit-menu-nav-link ekit-menu-dropdown-toggle">Projects<i
                                                            aria-hidden="true"
                                                            class="icon icon-plus elementskit-submenu-indicator"></i></a>
                                                    <!-- <ul class="elementskit-dropdown elementskit-submenu-panel">
 <li id="menu-item-89" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-89 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="../our-projects/index.html" class=" dropdown-item">Our Projects</a>	<li id="menu-item-82" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-82 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="../detail-project/index.html" class=" dropdown-item">Detail Project</a></ul> -->
                                                </li>
                                                <!--<li id="menu-item-83" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-83 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content" data-vertical-menu=750px><a href="#" class="ekit-menu-nav-link ekit-menu-dropdown-toggle">Pages<i aria-hidden="true" class="icon icon-plus elementskit-submenu-indicator"></i></a>
<ul class="elementskit-dropdown elementskit-submenu-panel">
 <li id="menu-item-84" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-84 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="../contact-us/index.html" class=" dropdown-item">Contact Us</a>	<li id="menu-item-85" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-85 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="../faqs/index.html" class=" dropdown-item">FAQs</a>	<li id="menu-item-740" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-740 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="../reviews/index.html" class=" dropdown-item">Reviews</a>	<li id="menu-item-86" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-86 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="../404/index.html" class=" dropdown-item">404</a>	<li id="menu-item-87" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-87 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="../our-blog/index.html" class=" dropdown-item">Our Blog</a>	<li id="menu-item-88" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-88 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="../single-blog/index.html" class=" dropdown-item">Single Blog</a></ul>
</li>-->
                                            </ul>
                                            <div class="elementskit-nav-identity-panel"><a
                                                    class="elementskit-nav-logo" href="https://gajean.com/tkit/eveno"
                                                    target="" rel=""><img
                                                        src="assets/asset-contents/uploads/sites/2/2024/02/Eveno-Light.png"
                                                        title="Eveno Light" alt="Eveno Light"
                                                        decoding="async" /></a><button
                                                    class="elementskit-menu-close elementskit-menu-toggler"
                                                    type="button">X</button></div>
                                        </div>
                                        <div
                                            class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay">
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-aa6c367 e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex e-con e-child"
                            data-id="aa6c367" data-element_type="container">
                            <div class="elementor-element elementor-element-8825bc3 elementor-widget__width-auto elementor-tablet-align-justify elementor-widget-tablet__width-inherit elementor-widget elementor-widget-button"
                                data-id="8825bc3" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                            href="#">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Schedule Meet</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-1315026 elementor-widget__width-auto elementor-hidden-tablet elementor-hidden-mobile ekit-off-canvas-position-right elementor-widget elementor-widget-elementskit-header-offcanvas"
                                data-id="1315026" data-element_type="widget"
                                data-widget_type="elementskit-header-offcanvas.default">
                                <div class="elementor-widget-container">
                                    <div class="ekit-wid-con">
                                        <div class="ekit-offcanvas-toggle-wraper before">
                                            <a href="#" class="ekit_navSidebar-button ekit_offcanvas-sidebar"
                                                aria-label="offcanvas-menu">
                                                <i aria-hidden="true" class="icon icon-menu-11"></i> </a>
                                        </div>
                                        <!-- offset cart strart -->
                                        <!-- sidebar cart item -->
                                        <div class="ekit-sidebar-group info-group ekit-slide"
                                            data-settings="{&quot;disable_bodyscroll&quot;:&quot;&quot;}">
                                            <div class="ekit-overlay ekit-bg-black"></div>
                                            <div class="ekit-sidebar-widget">
                                                <div class="ekit_sidebar-widget-container">
                                                    <div class="ekit_widget-heading before">
                                                        <a href="#" class="ekit_close-side-widget"
                                                            aria-label="close-icon">

                                                            <svg aria-hidden="true"
                                                                class="e-font-icon-svg e-fas-times"
                                                                viewBox="0 0 352 512"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                    <div class="ekit_sidebar-textwidget">

                                                        <div class="widgetarea_warper widgetarea_warper_editable"
                                                            data-elementskit-widgetarea-key="1315026"
                                                            data-elementskit-widgetarea-index="99">
                                                            <div class="widgetarea_warper_edit"
                                                                data-elementskit-widgetarea-key="1315026"
                                                                data-elementskit-widgetarea-index="99">
                                                                <i class="eicon-edit" aria-hidden="true"></i>
                                                                <span>Edit Content</span>
                                                            </div>

                                                            <div class="ekit-widget-area-container">
                                                                <div data-elementor-type="wp-post"
                                                                    data-elementor-id="972"
                                                                    class="elementor elementor-972">
                                                                    <div class="elementor-element elementor-element-f1bf5fd e-con-full e-flex e-con e-parent"
                                                                        data-id="f1bf5fd"
                                                                        data-element_type="container">
                                                                        <div class="elementor-element elementor-element-b8382fe elementor-widget elementor-widget-heading"
                                                                            data-id="b8382fe"
                                                                            data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Contact Information</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-a35144b elementor-widget elementor-widget-heading"
                                                                            data-id="a35144b"
                                                                            data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h3
                                                                                    class="elementor-heading-title elementor-size-default">
                                                                                    Lets Meet With Us Whether you're
                                                                                    ready to start planning your next
                                                                                    event</h3>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-78a7ed3 elementor-widget elementor-widget-text-editor"
                                                                            data-id="78a7ed3"
                                                                            data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <p>Lorem ipsum dolor sit amet,
                                                                                    consectetur adipiscing elit. Ut elit
                                                                                    tellus, luctus nec ullamcorper
                                                                                    mattis, pulvinar dapibus leo.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="elementor-element elementor-element-add9acc e-con-full e-flex e-con e-child"
                                                                            data-id="add9acc"
                                                                            data-element_type="container">
                                                                            <div class="elementor-element elementor-element-d41f52c e-con-full e-flex e-con e-child"
                                                                                data-id="d41f52c"
                                                                                data-element_type="container">
                                                                                <div class="elementor-element elementor-element-7fea2a0 e-con-full e-flex e-con e-child"
                                                                                    data-id="7fea2a0"
                                                                                    data-element_type="container">
                                                                                    <div class="elementor-element elementor-element-39cf272 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                                                        data-id="39cf272"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="icon-box.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="elementor-icon-box-wrapper">

                                                                                                <div
                                                                                                    class="elementor-icon-box-icon">
                                                                                                    <span
                                                                                                        class="elementor-icon elementor-animation-">
                                                                                                        <i aria-hidden="true"
                                                                                                            class="icon icon-map-marker1"></i>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="elementor-icon-box-content">

                                                                                                    <h4
                                                                                                        class="elementor-icon-box-title">
                                                                                                        <span>
                                                                                                            Head Office
                                                                                                            Address
                                                                                                        </span>
                                                                                                    </h4>

                                                                                                    <p
                                                                                                        class="elementor-icon-box-description">
                                                                                                        Jakarta
                                                                                                        Indonesia
                                                                                                        Backstreet
                                                                                                        Number 123 ABC
                                                                                                    </p>

                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-d8cd253 e-con-full e-flex e-con e-child"
                                                                                    data-id="d8cd253"
                                                                                    data-element_type="container">
                                                                                    <div class="elementor-element elementor-element-b27f7ca elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                                                        data-id="b27f7ca"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="icon-box.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="elementor-icon-box-wrapper">

                                                                                                <div
                                                                                                    class="elementor-icon-box-icon">
                                                                                                    <span
                                                                                                        class="elementor-icon elementor-animation-">
                                                                                                        <i aria-hidden="true"
                                                                                                            class="icon icon-map"></i>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="elementor-icon-box-content">

                                                                                                    <h4
                                                                                                        class="elementor-icon-box-title">
                                                                                                        <span>
                                                                                                            Secondary
                                                                                                            Office
                                                                                                        </span>
                                                                                                    </h4>

                                                                                                    <p
                                                                                                        class="elementor-icon-box-description">
                                                                                                        Nggepeng Village
                                                                                                        Sidumukti Gresik
                                                                                                        United 61152
                                                                                                    </p>

                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="elementor-element elementor-element-874efdd e-con-full e-flex e-con e-child"
                                                                                data-id="874efdd"
                                                                                data-element_type="container">
                                                                                <div class="elementor-element elementor-element-17bbaa4 e-con-full e-flex e-con e-child"
                                                                                    data-id="17bbaa4"
                                                                                    data-element_type="container">
                                                                                    <div class="elementor-element elementor-element-afd0f27 elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                                                        data-id="afd0f27"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="icon-box.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="elementor-icon-box-wrapper">

                                                                                                <div
                                                                                                    class="elementor-icon-box-icon">
                                                                                                    <span
                                                                                                        class="elementor-icon elementor-animation-">
                                                                                                        <i aria-hidden="true"
                                                                                                            class="icon icon-email1"></i>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="elementor-icon-box-content">

                                                                                                    <h4
                                                                                                        class="elementor-icon-box-title">
                                                                                                        <span>
                                                                                                            Email
                                                                                                            Address
                                                                                                        </span>
                                                                                                    </h4>

                                                                                                    <p
                                                                                                        class="elementor-icon-box-description">
                                                                                                        Hello@Email.co
                                                                                                    </p>

                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-274ecf3 e-con-full e-flex e-con e-child"
                                                                                    data-id="274ecf3"
                                                                                    data-element_type="container">
                                                                                    <div class="elementor-element elementor-element-67b007d elementor-view-default elementor-position-top elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                                                                                        data-id="67b007d"
                                                                                        data-element_type="widget"
                                                                                        data-widget_type="icon-box.default">
                                                                                        <div
                                                                                            class="elementor-widget-container">
                                                                                            <div
                                                                                                class="elementor-icon-box-wrapper">

                                                                                                <div
                                                                                                    class="elementor-icon-box-icon">
                                                                                                    <span
                                                                                                        class="elementor-icon elementor-animation-">
                                                                                                        <i aria-hidden="true"
                                                                                                            class="icon icon-email1"></i>
                                                                                                    </span>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="elementor-icon-box-content">

                                                                                                    <h4
                                                                                                        class="elementor-icon-box-title">
                                                                                                        <span>
                                                                                                            Telephone
                                                                                                        </span>
                                                                                                    </h4>

                                                                                                    <p
                                                                                                        class="elementor-icon-box-description">
                                                                                                        +62 123 456 789
                                                                                                    </p>

                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- END sidebar widget item -->
                                        <!-- END offset cart strart -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

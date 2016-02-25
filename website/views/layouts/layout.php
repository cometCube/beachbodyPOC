<?php
$normalPrograms = $this->normalPrograms;
$premiumPrograms = $this->premiumPrograms;
$trainers = $this->trainers;
?>
<!DOCTYPE html>
<!-- saved from url=(0030)http://club.teambeachbody.com/ -->
<html class="wf-proximanova-i4-active wf-proximanova-i7-active wf-proximanova-n4-active wf-proximanova-n7-active wf-proximanovaalt-i6-active wf-proximanovaalt-n1-active wf-proximanovaalt-n3-active wf-proximanovaalt-n4-active wf-proximanovaalt-n6-active wf-proximanovaalt-n7-active wf-active" data-ember-extension="1"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Beachbody On Demand | homepage</title>
        <meta name="robots" content="NOINDEX, NOFOLLOW">
        <meta charset="utf-8"><script type="text/javascript" src="/website/static/f01a2a7fcc"></script><script src="/website/static/js/nr-852.min.js"></script><script type="text/javascript" src="/website/static/io.min.js"></script><script src="/website/static/js/beach-body.min.js"></script><script src="/website/static/utag.js" type="text/javascript" async=""></script><script type="text/javascript">window.NREUM || (NREUM = {}), __nr_require = function (t, e, n) {
              function r(n) {
                  if (!e[n]) {
                      var o = e[n] = {exports: {}};
                      t[n][0].call(o.exports, function (e) {
                          var o = t[n][1][e];
                          return r(o || e)
                      }, o, o.exports)
                  }
                  return e[n].exports
              }
              if ("function" == typeof __nr_require)
                  return __nr_require;
              for (var o = 0; o < n.length; o++)
                  r(n[o]);
              return r
          }({QJf3ax: [function (t, e) {
                      function n() {}
                      function r(t) {
                          function e(t) {
                              return t && t instanceof n ? t : t ? a(t, i, o) : o()
                          }
                          function c(n, r, o) {
                              t && t(n, r, o);
                              for (var i = e(o), a = f(n), c = a.length, u = 0; c > u; u++)
                                  a[u].apply(i, r);
                              return i
                          }
                          function u(t, e) {
                              p[t] = f(t).concat(e)
                          }
                          function f(t) {
                              return p[t] || []
                          }
                          function s() {
                              return r(c)
                          }
                          var p = {};
                          return{on: u, emit: c, create: s, listeners: f, context: e, _events: p}
                      }
                      function o() {
                          return new n
                      }
                      var i = "nr@context", a = t("gos");
                      e.exports = r()
                  }, {gos: "7eSDFh"}], ee: [function (t, e) {
                      e.exports = t("QJf3ax")
                  }, {}], 3: [function (t, e) {
                      function n(t) {
                          return function () {
                              r(t, [(new Date).getTime()].concat(i(arguments)))
                          }
                      }
                      var r = t("handle"), o = t(1), i = t(2);
                      "undefined" == typeof window.newrelic && (newrelic = window.NREUM);
                      var a = ["setPageViewName", "addPageAction", "setCustomAttribute", "finished", "addToTrace", "inlineHit", "noticeError"];
                      o(a, function (t, e) {
                          window.NREUM[e] = n("api-" + e)
                      }), e.exports = window.NREUM
                  }, {1: 12, 2: 13, handle: "D5DuLP"}], gos: [function (t, e) {
                      e.exports = t("7eSDFh")
                  }, {}], "7eSDFh": [function (t, e) {
                      function n(t, e, n) {
                          if (r.call(t, e))
                              return t[e];
                          var o = n();
                          if (Object.defineProperty && Object.keys)
                              try {
                                  return Object.defineProperty(t, e, {value: o, writable: !0, enumerable: !1}), o
                              } catch (i) {
                              }
                          return t[e] = o, o
                      }
                      var r = Object.prototype.hasOwnProperty;
                      e.exports = n
                  }, {}], D5DuLP: [function (t, e) {
                      function n(t, e, n) {
                          return r.listeners(t).length ? r.emit(t, e, n) : void(r.q && (r.q[t] || (r.q[t] = []), r.q[t].push(e)))
                      }
                      var r = t("ee").create();
                      e.exports = n, n.ee = r, r.q = {}
                  }, {ee: "QJf3ax"}], handle: [function (t, e) {
                      e.exports = t("D5DuLP")
                  }, {}], XL7HBI: [function (t, e) {
                      function n(t) {
                          var e = typeof t;
                          return!t || "object" !== e && "function" !== e ? -1 : t === window ? 0 : i(t, o, function () {
                              return r++
                          })
                      }
                      var r = 1, o = "nr@id", i = t("gos");
                      e.exports = n
                  }, {gos: "7eSDFh"}], id: [function (t, e) {
                      e.exports = t("XL7HBI")
                  }, {}], G9z0Bl: [function (t, e) {
                      function n() {
                          if (!v++) {
                              var t = l.info = NREUM.info, e = f.getElementsByTagName("script")[0];
                              if (t && t.licenseKey && t.applicationID && e) {
                                  c(p, function (e, n) {
                                      t[e] || (t[e] = n)
                                  });
                                  var n = "https" === s.split(":")[0] || t.sslForHttp;
                                  l.proto = n ? "https://" : "http://", a("mark", ["onload", i()]);
                                  var r = f.createElement("script");
                                  r.src = l.proto + t.agent, e.parentNode.insertBefore(r, e)
                              }
                          }
                      }
                      function r() {
                          "complete" === f.readyState && o()
                      }
                      function o() {
                          a("mark", ["domContent", i()])
                      }
                      function i() {
                          return(new Date).getTime()
                      }
                      var a = t("handle"), c = t(1), u = window, f = u.document;
                      t(2);
                      var s = ("" + location).split("?")[0], p = {beacon: "bam.nr-data.net", errorBeacon: "bam.nr-data.net", agent: "js-agent.newrelic.com/nr-852.min.js"}, d = window.XMLHttpRequest && XMLHttpRequest.prototype && XMLHttpRequest.prototype.addEventListener && !/CriOS/.test(navigator.userAgent), l = e.exports = {offset: i(), origin: s, features: {}, xhrWrappable: d};
                      f.addEventListener ? (f.addEventListener("DOMContentLoaded", o, !1), u.addEventListener("load", n, !1)) : (f.attachEvent("onreadystatechange", r), u.attachEvent("onload", n)), a("mark", ["firstbyte", i()]);
                      var v = 0
                  }, {1: 12, 2: 3, handle: "D5DuLP"}], loader: [function (t, e) {
                      e.exports = t("G9z0Bl")
                  }, {}], 12: [function (t, e) {
                      function n(t, e) {
                          var n = [], o = "", i = 0;
                          for (o in t)
                              r.call(t, o) && (n[i] = e(o, t[o]), i += 1);
                          return n
                      }
                      var r = Object.prototype.hasOwnProperty;
                      e.exports = n
                  }, {}], 13: [function (t, e) {
                      function n(t, e, n) {
                          e || (e = 0), "undefined" == typeof n && (n = t ? t.length : 0);
                          for (var r = -1, o = n - e || 0, i = Array(0 > o ? 0 : o); ++r < o; )
                              i[r] = t[e + r];
                          return i
                      }
                      e.exports = n
                  }, {}]}, {}, ["G9z0Bl"]);</script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="server" content="wppub01-dc2">
        <link rel="icon" type="image/png" href="http://club.teambeachbody.com/wp-content/themes/ripple/img/favicon_32.png">
        <link rel="apple-touch-icon" href="http://club.teambeachbody.com/wp-content/themes/ripple/img/touch_icon_ipad_retina.png">
        <link rel="apple-touch-icon" sizes="76x76" href="http://club.teambeachbody.com/wp-content/themes/ripple/img/touch_icon_ipad.png">
        <link rel="apple-touch-icon" sizes="120x120" href="http://club.teambeachbody.com/wp-content/themes/ripple/img/touch_icon_iphone_retina.png">
        <link rel="apple-touch-icon" sizes="152x152" href="http://club.teambeachbody.com/wp-content/themes/ripple/img/touch_icon_ipad_retina.png">
        <link rel="apple-touch-icon" sizes="180x180" href="http://club.teambeachbody.com/wp-content/themes/ripple/img/touch_icon_iphone.png">


        <!-- Begin Chromecast -->
        <link rel="stylesheet" href="/website/static/css/chromecast.css" type="text/css" media="screen">
        <!--script type="text/javascript"src="//player.theplatform.com/pdk/VSsHaC/tpPdkController.js"></script-->
        <script type="text/javascript" src="/website/static/js/bbCastUtility.js"></script>
        <script type="text/javascript" src="/website/static/js/cast_sender.js"></script>
        <script type="text/javascript" src="/website/static/js/SiteCastPlayer.js"></script>
        <!-- End Chromecast -->


        <script src="/website/static/js/dqd3ykf.js"></script>
        <style type="text/css">.tk-proxima-nova{font-family:"proxima-nova",sans-serif;}.tk-proxima-nova-alt{font-family:"proxima-nova-alt",sans-serif;}</style><link rel="stylesheet" href="/website/static/l" media="all"><script>try {
              Typekit.load();
          } catch (e) {
          }</script>

        <link rel="stylesheet" type="text/css" href="/website/static/css/style.css">
        <!-- <link rel="stylesheet" type="text/css" href="/website/static/css/style_v16.css"> -->
        <script src="chrome-extension://pkedcjkdefgpdelpbcmbmeomcjbeemfm/cast_sender.js"></script><script src="chrome-extension://fjhoaacokmgbjemoflkofnenfaiekifl/cast_sender.js"></script><script type="text/javascript" async="" charset="utf-8" src="/website/static/js/utag.1.js" id="utag_beachbody.bod-dom_1"></script><script type="text/javascript" async="" charset="utf-8" src="/website/static/js/utag.4.js" id="utag_beachbody.bod-dom_4"></script><script type="text/javascript" async="" charset="utf-8" src="/website/static/js/utag.5.js" id="utag_beachbody.bod-dom_5"></script><script src="/website/static/js/chartbeat.js"></script><script src="/website/static/js/jquery.mousewheel.min.js"></script><style type="text/css" media="print">.usabilla_live_button_container { display: none; }</style></head>

    <body class="homepage common-version"><div id="lightningjs-usabilla_live" style="display: none;"><div><iframe frameborder="0" id="lightningjs-frame-usabilla_live"></iframe></div></div>

        <script type="text/javascript">

                  var customPageTitle = 'Team Beachbody';
                  var utag_data = {
                      page_name: "homepage",
                      page_type: "homepage",
                      site_name: "bod",
                      site_section: "bod-dom",
                      page_group: "home",
                      page_subgroup: "",
                      logged_in_status: "true",
                      unlock_type: "",
                      customer_id: "31E66C34-C960-4EE9-8AC8-3D1505A4A116",
                      customer_email: "c707fd9b2e0b2bab3780cad2424403c500c665ec78c5829b7ba861b77b2bce81",
                      /*
                       page : {
                       category : {
                       primaryCategory : "homepage"        }
                       },
                       user : {
                       profile : {
                       profileInfo : {
                       profileID : "31E66C34-C960-4EE9-8AC8-3D1505A4A116",
                       email: "c707fd9b2e0b2bab3780cad2424403c500c665ec78c5829b7ba861b77b2bce81"
                       }
                       }
                       }
                       */
                  }

                  window.bbLoaders = [];

                  window.BBConstants = {
                      LOGIN_SUBMIT_URL: 'https://club.teambeachbody.com/login',
                      LOGIN_RECEIVE_URL: 'http://club.teambeachbody.com/cim/oampost.jsp?redirect_url=http%3A%2F%2F',
                      HTTP_REFERER: 'http://club.teambeachbody.com/programs/',
                      API_SERVER: 'api-club.teambeachbody.com'
                  };

        </script>

        <!-- Loading script asynchronously -->
        <script type="text/javascript">
            //var utag_data=[];
            (function (a, b, c, d) {
                a = '//tags.tiqcdn.com/utag/beachbody/bod-dom/prod/utag.js';
                b = document;c = 'script';d = b.createElement(c);d.src = a;d.type = 'text/java' + c;d.async = true;
                a = b.getElementsByTagName(c)[0];a.parentNode.insertBefore(d, a);
            })();
        </script>

        <?= $this->inc("/shared/header"); ?>

        <div class="module-banner white-bg clearfix" style="background:#f0f0f0">
            <div class="fixed-container"></div>
        </div>
        <div class="module-banner module-banner-announcement module-margin-bottom clearfix" style="display: none;">
            <div class="fixed-container">
                <div class="announcement-container active">
                    <div class="announcement-icon"> <img src="/website/static/announcement.png"></div><!--
                    --><div class="announcement-container">
                        <div class="announcement-title"></div>
                        <div class="announcement-text"></div>
                        <div></div>
                    </div>
                </div>
                <div class="toggle">
                    <img class="announcement-toggle" src="/website/static/up-arrow.png">
                </div>
            </div>
        </div><div class="container module-drawer clearfix widget-cdj-aud">
            <div id="bod-activity"></div>
            <div class="half-container-left module-drawer module-margin-bottom clearfix">
                <a href="http://club.teambeachbody.com/program/challenge-du-jour" class="module-title">Challenge Du Jour</a>
                <div class="cdj-module">
                    <a href="http://club.teambeachbody.com/video/MHC20305D04?15+Min+Leg+Hammer&amp;program=The+Master%27s+Hammer+and+Chisel&amp;content_type=challenge-du-jour" class="video-modal-btn" data-title="15 Min Leg Hammer" data-description="15 minutes is all you need to fire up your quads, hamstrings, glutes, and calves for maximum strength and power." data-program="The Master&#39;s Hammer and Chisel" data-duration="20m">
                        <div class="cdj-module-bg">
                            <img alt="Challenge Du Jour" src="http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/c_scale,h_223,w_569/web/cdj_default.png">
                        </div>
                        <div class="cdj-module-info">
                            <strong>02.23</strong>
                            <span>15 Min Leg Hammer</span>
                            <span>The Master's Hammer and Chisel</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="half-container-right module-drawer module-margin-bottom clearfix">
                <input type="hidden" id="activeUsersCount" value="343">
                <input type="hidden" id="Counter" value="4">
                <input type="hidden" id="totalUsersCount" value="2147">

                <a href="http://club.teambeachbody.com/#" class="module-title">Activity</a>
                <div class="bod-activity-wrapper">
                    <div class="bod-activity">

                        <div class="bod-left-container">

                            <div class="bod-left-content">
                                <div class="heading blue">Members Working Out</div>
                                <strong>Online Now!</strong>
                                <h2>
                                    <span class="numbers-with-commas" id="activeUsers">343</span>
                                </h2>
                            </div>

                            <div class="bod-left-content">
                                <div class="heading green">Peak Active Users</div>
                                <h2>
                                    <span class="numbers-with-commas" id="totalUsers">2,147</span>
                                </h2>
                            </div>

                        </div>

                        <div class="bod-right-container">
                            <div class="heading dark-b">Top 3 Programs</div>   
                            <ol id="topPrograms"><li>Hammer and Chisel</li><li>21 Day Fix</li><li>P90X3</li></ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            window.bbLoaders[window.bbLoaders.length] = function () {
                bb.audCounter('.numbers-with-commas');
            };
        </script>

        <div class="container module-drawer module-margin-bottom clearfix">

            <a class="module-title" href="http://club.teambeachbody.com/programs">Member Library</a>
            <a class="question-tooltip" href="javascript:void(0);">
                <span class="icon-question"></span>
                <span class="popover">
                    <span class="icon-question-circle"></span>
                    <p class="title">Member Library</p>
                    <p class="description">These are the <br>programs available to all Club members</p>
                </span>
            </a>

            <div class="slider-box loaded">
                <div class="bx-wrapper" style="max-width: 1170px; margin: 0px auto;">
                    <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 336px;">
                        <ul class="bxslider drawer-slider slider-cards" id="all_programs" style="width: 3315%; position: relative; transition-duration: 0s; transform: translate3d(-40px, 0px, 0px);">
                            <?php
                            foreach ($normalPrograms as $key => $value) {
                                ?>
                                <li class="drawer-item has-hovered-data" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
                                    <img class="img-card-responsive inited" data-src="<?= $value->getPimage(); ?>" src="<?= $value->getPimage(); ?>">
                                    <a href="http://club.teambeachbody.com/program/autumncalabreseexclusives"></a>

                                    <div class="metadata-box">
                                        <div class="metadata-cell">
                                            <a href="javascript:void(0);" class="btn-close-rollover-data"></a>
                                            <span class="icon-type" style="background: none;"><img src="<?= $value->getFimage(); ?>" alt="<?= $value->getPtype(); ?>"></span>
                                            <p class="type"><?= $value->getPtype(); ?></p>
                                            <span class="divider"></span>
                                            <p class="general-info"><span class="icon-clock"></span><?= $value->getFtimelabel(); ?></p>
                                            <p class="general-info"><?= $value->getFexpertlevel(); ?></p>
                                            <span class="divider"></span>
                                            <p class="info"></p>
                                            <a href="http://club.teambeachbody.com/program/autumncalabreseexclusives" class="link">LET'S GET STARTED</a>
                                        </div>
                                    </div>

                                </li>
                                <?
                                }
                                ?>
                            </ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev disabled" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>
                </div>
            </div>

            <script type="text/javascript">
                window.bbLoaders[window.bbLoaders.length] = function () {
                    var slideIdentifier = $('#all_programs');
                    bb.drawerSlider(slideIdentifier, {
                        type: "default",
                        hasPurchasedAllPrograms: false});
                };
            </script>


            <div class="container module-drawer module-margin-bottom clearfix">

                <a class="module-title" href="http://club.teambeachbody.com/premium-content">Premium Content</a>
                <a class="question-tooltip" href="javascript:void(0);">
                    <span class="icon-question"></span>
                    <span class="popover">
                        <span class="icon-question-circle"></span>
                        <p class="title">Premium Content</p>
                        <p class="description">New and upcoming programs<br>available for purchase</p>
                    </span>
                </a>

                <div class="slider-box loaded">
                    <div class="bx-wrapper" style="max-width: 1170px; margin: 0px auto;">
                        <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 336px;"><ul class="bxslider drawer-slider slider-cards" id="premium_programs" style="width: 1115%; position: relative; transition-duration: 0s; transform: translate3d(-40px, 0px, 0px);">
                                <?
                                foreach ($premiumPrograms as $key => $value) {
                                ?>
                                <li class="drawer-item has-hovered-data" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
                                    <img class="img-card-responsive inited" data-src="<?= $value->getPimage(); ?>" src="<?= $value->getPimage(); ?>">
                                    <div class="item-overlay premium">UNLOCK NOW</div>
                                    <a href="http://club.teambeachbody.com/program/BodyBeast"></a>

                                    <div class="metadata-box">
                                        <div class="metadata-cell">
                                            <a href="javascript:void(0);" class="btn-close-rollover-data"></a>
                                            <span class="icon-type" style="background: none;"><img src="<?= $value->getFimage(); ?>" alt="<?= $value->getPtype(); ?>"></span>
                                            <p class="type"><?= $value->getPtype(); ?></p>
                                            <span class="divider"></span>
                                            <p class="general-info"><span class="icon-clock"></span><?= $value->getFtimelabel(); ?></p>
                                            <p class="general-info"><?= $value->getFexpertlevel(); ?></p>
                                            <span class="divider"></span>
                                            <p class="info"></p>
                                            <a href="http://club.teambeachbody.com/program/BodyBeast" class="link">UNLOCK NOW</a>
                                        </div>
                                    </div>

                                </li>
                                <?php
                            }
                            ?>
                        </ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev disabled" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>
            </div>
        </div>

        <script type="text/javascript">
            window.bbLoaders[window.bbLoaders.length] = function () {
                var slideIdentifier = $('#premium_programs');
                bb.drawerSlider(slideIdentifier, {
                    type: "premium",
                    hasPurchasedAllPrograms: false});
            };
        </script>

        <div class="container module-drawer module-margin-bottom clearfix">

            <a href="http://club.teambeachbody.com/types" class="module-title">By Type</a>
            <!-- a class="question-tooltip" href="javascript:void(0);">
                <span class="icon-question"></span>
                <span class="popover">
                    <span class="icon-question-circle"></span>
                    <p class="title">By Type</p>
                    <p class="description">View the Member Library<br> by workout type</p>
                </span>
            </a -->
            <div class="slider-box loaded">
                <div class="bx-wrapper" style="max-width: 1170px; margin: 0px auto;"><div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 167px;"><ul class="bxslider drawer-type-b-slider" id="programType" style="width: 815%; position: relative; transition-duration: 0s; transform: translate3d(-40px, 0px, 0px);">
                            <li class="drawer-item" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
                                <a href="http://club.teambeachbody.com/types/cardio/">
                                    <div class="icon-box"><span class="icon-type" style=" background-image: url(http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1455039945/Icons/redesign/icon-cardio.png);"></span></div>
                                    <div class="text-box"><span>Cardio</span></div>
                                </a>
                            </li>
                            <li class="drawer-item" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
                                <a href="http://club.teambeachbody.com/types/muscle-building/">
                                    <div class="icon-box"><span class="icon-type" style=" background-image: url(http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1455039945/Icons/redesign/icon-musclebuilding.png);"></span></div>
                                    <div class="text-box"><span>Muscle Building</span></div>
                                </a>
                            </li>
                            <li class="drawer-item" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
                                <a href="http://club.teambeachbody.com/types/less-than-30-min/">
                                    <div class="icon-box"><span class="icon-type" style=" background-image: url(http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1455039945/Icons/redesign/icon-30mins.png);"></span></div>
                                    <div class="text-box"><span>Less than 30 min.</span></div>
                                </a>
                            </li>
                            <li class="drawer-item" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
                                <a href="http://club.teambeachbody.com/types/slim-tone/">
                                    <div class="icon-box"><span class="icon-type" style=" background-image: url(http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1455039945/Icons/redesign/icon-slim_tone.png);"></span></div>
                                    <div class="text-box"><span>Slim &amp; Tone</span></div>
                                </a>
                            </li>
                            <li class="drawer-item" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
                                <a href="http://club.teambeachbody.com/types/dance/">
                                    <div class="icon-box"><span class="icon-type" style=" background-image: url(http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1455039945/Icons/redesign/icon-dance.png);"></span></div>
                                    <div class="text-box"><span>Dance</span></div>
                                </a>
                            </li>
                            <li class="drawer-item" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
                                <a href="http://club.teambeachbody.com/types/low-impact-3/">
                                    <div class="icon-box"><span class="icon-type" style=" background-image: url(http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1455039945/Icons/redesign/icon-lowimpact.png);"></span></div>
                                    <div class="text-box"><span>Low Impact</span></div>
                                </a>
                            </li>
                        </ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev disabled" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>
            </div>
        </div>

        <script type="text/javascript">
            window.bbLoaders[window.bbLoaders.length] = function () {
                var slideIdentifier = $('#programType');
                bb.drawerSlider(slideIdentifier);
            };
        </script>
        <div class="container module-drawer clearfix">

            <a href="http://club.teambeachbody.com/trainers" class="module-title">By Trainer</a>

            <!-- a class="question-tooltip" href="javascript:void(0);">
                <span class="icon-question"></span>
                <span class="popover">
                    <span class="icon-question-circle"></span>
                    <p class="title">By Trainer</p>
                    <p class="description">View the Member Library<br> by Trainer</p>
                </span>
            </a -->
            <div class="slider-box loaded">
                <div class="bx-wrapper" style="max-width: 1170px; margin: 0px auto;">
                    <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 336px;">
                        <ul class="bxslider drawer-slider" id="trainers" style="width: 1515%; position: relative; transition-duration: 0s; transform: translate3d(-40px, 0px, 0px);">
                            <?php
                            foreach ($trainers as $key => $value) {
                                $trainerName = explode(' ', $value->getTname());
                                ?>
                                <li class="drawer-item" style="float: left; list-style: none; position: relative; width: 270px; margin-right: 30px;">
                                    <a href="http://club.teambeachbody.com/trainers/tony-horton/">
                                        <img class="img-card-responsive png-jpg inited" data-src="<?= $value->getTimgage(); ?>" src="<?= $value->getTimgage(); ?>">
                                        <div class="people-name">
                                            <div>
                                                <span class="name"><?= $trainerName[0]; ?></span>
                                                <br>
                                                <span class="surname"><?= $trainerName[1]; ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul></div><div class="bx-controls bx-has-controls-direction"><div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div></div></div>
            </div>
        </div>

        <script type="text/javascript">
            window.bbLoaders[window.bbLoaders.length] = function () {
                var slideIdentifier = $('#trainers');
                bb.drawerSlider(slideIdentifier);
            };
        </script>
        <div class="module-promo white-bg clearfix">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-33">
                        <a target="_blank" href="http://www.shakeology.com/?ICID=BOD_SHAKE_SHKJAR_BANNER">
                            <img src="http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1455230545/Shakeology/SHK_BottomPromo_Jar.jpg">
                        </a>
                    </div>
                    <div class="col-33">
                        <a target="_blank" href="http://teambeachbody.com/workout-routines/the-masters-hammer-chisel/?ICID=BOD_TBB_MHCLAUNCH_HERO">
                            <img src="http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1448387333/HammerChisel/MHC_BottomPromo_Launch_20151201.jpg">
                        </a>
                    </div>
                    <div class="col-33">
                        <a target="_blank" href="http://mybeachbodyperformance.com/">
                            <img src="http://imgclub.teambeachbody.com/club-teambeachbody/image/upload/v1435254142/BBPerformance/BB_Performance_BottomPromo_20150630.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        //Include footer
        <?= $this->inc("/shared/footer"); ?>
    </body></html>
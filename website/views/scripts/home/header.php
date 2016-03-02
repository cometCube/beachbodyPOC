<div class="exposeMask"></div><div class="module-header clearfix">
    <div class="container">
        <div class="nav-container">
            <a href="/"><div class="logo"></div></a>

            <ul class="desktop-nav">
                <li class="mobile-btn"></li>
                <li class="has-dropdown">
                
                    <a href="/programs" class="">Programs</a>
                    <ul class="dropdown">
                        <?php
                        $rootDoc = Document::getById(62);
                        $childDocs = $rootDoc->getChilds();
                        if (count($childDocs) > 0) {
                            foreach ($childDocs as $doc) {
                                if (!$doc->getPublished())
                                    continue;
                                if ($doc->getType() != "page" && $doc->getType() != "link")
                                    continue;

                                if ($doc->getType() == "page") {
                                    if (Site::isSiteRequest()) {
                                        $loc = $doc->getFullPath();
                                    } else {
                                        $loc = $doc->getRealFullpath();
                                    }
                                } elseif ($doc->getType() == "link") {
                                    $loc = $doc->getLink();
                                }
                                ?>
                                <li><a class="bordy" href="<?= $loc ?>">
                                <?= $doc->getName() ?>
                                    </a></li>
                                <?php
                            }
                        }
                        ?>	
                        <!--                        <li><a href="http://club.teambeachbody.com/programs/">Member Library</a></li>
                                                <li><a href="http://club.teambeachbody.com/premium-content/">Premium Content</a></li>
                                                <li><a href="http://club.teambeachbody.com/trainers/">By Trainer</a></li>
                                                <li><a href="http://club.teambeachbody.com/types/">By Type</a></li>
                                                <li><a href="http://club.teambeachbody.com/program/challenge-du-jour/">Challenge Du Jour</a></li>
                                                <li><a href="http://club.teambeachbody.com/program/master-trainers">The Master Trainers</a></li>-->
                    </ul>
                </li>
                <li class="">
                    <a target="_blank" href="https://faq.beachbody.com/app/answers/list/lob/team/kw/%23bbondemand/search/1" class="">Help</a>
                </li>
            </ul><div class="mobile-nav">
                <a href="javascript: void(0);" class="mobile-btn"></a>
                <ul class="mobile-dropdown">
                    <li class="inner-dropdown expanded">
                        <a href="javascript:void(0);" class="mobile-inner-btn">Programs</a>
                        <ul class="accordion-dropdown">
                            <li><a href="http://club.teambeachbody.com/programs">Member Library</a></li>
                            <li><a href="http://club.teambeachbody.com/premium-content/">Premium Content</a></li>
                            <li><a href="http://club.teambeachbody.com/trainers">By Trainer</a></li>
                            <li><a href="http://club.teambeachbody.com/types">By Type</a></li>
                            <li><a href="http://club.teambeachbody.com/program/challenge-du-jour/">CDJ</a></li>
                            <li><a href="http://club.teambeachbody.com/mastertrainers/">The Master Trainers</a></li>
                        </ul>
                    </li>
                    <li>
                        <a target="_blank" href="https://faq.beachbody.com/app/answers/list/lob/team/kw/%23bbondemand/search/1" class="Help ">Help</a>
                    </li>
                </ul>
            </div>
            <div class="desktop-sign-in-container has-dropdown">


                <a href="">
                    <span class="desktop-text Welcome, Vivek Test">Welcome, Vivek Test</span>
                    <span class="arrow-bottom"></span>
                </a>
                <ul class="dropdown">
                    <li><a href="https://auth.beachbody.com/oam/server/logout?end_url=https%3A%2F%2Fclub.teambeachbody.com/logout">Log Out</a></li>
                </ul>
            </div>
            <div class="mobile-sign-container">
                <a href="javascript:void(0)" class="mobile-sign-in-btn">
                    <span class="user-icon"></span>
                </a>


                <ul class="mobile-dropdown">
                    <li>
                        <a href="https://auth.beachbody.com/oam/server/logout?end_url=https%3A%2F%2Fclub.teambeachbody.com/logout" class="Log Out ">Log Out</a>
                    </li>

                </ul>
            </div>      
        </div>
    </div>
    <div class="content-shadow"></div></div>

<div class="registration-dialog-container"><div class="bod-dialog-container registration-dialog-dialog"><div class="overlay"></div><div class="dialog"><svg class="close-button" viewBox="0 -1 14 14" preserveAspectRatio="xMidYMid meet" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M11.1586246,0 L5.99970485,5.15866311 L0.841298392,0 L0,0.841298392 L5.15866311,5.9999615 L0,11.1588813 L0.841298392,11.999923 L5.99970485,6.84125989 L11.1586246,11.999923 L11.999923,11.1588813 L6.84125989,5.9999615 L11.9996664,0.841298392 L11.1586246,0 Z"></path></svg><div class="header"><h1>Register</h1></div><div class="content"><div class="gigya"></div><div class="or"><span>or</span></div><div class="native"><form autocomplete="off"><div class="bod-form-element bod-text-input-container dark-on-light register-dialog-email"><label for="register-dialog-email"><div class="input-wrapper"><input type="text" class="bod-text-input bod-text-input" id="register-dialog-email" name="emailAddress" placeholder="Email*" value=""></div><span class="title">Email*</span><span class="mark"><svg class="invalid-icon" viewBox="0 -1 14 14" preserveAspectRatio="xMidYMid meet" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M9.55775046,6.33042549 L12.5274681,3.36070785 C12.7160432,3.17225669 12.8102688,2.94326372 12.8102688,2.67385294 C12.8102688,2.40444216 12.7159193,2.17557318 12.5274681,1.98699803 L11.1537583,0.613164229 C10.9651831,0.424589081 10.7363141,0.330363497 10.4670273,0.330363497 C10.1974926,0.330363497 9.96862359,0.424589081 9.78004845,0.613164229 L6.81033081,3.58288186 L3.84061318,0.613164229 C3.65216201,0.424589081 3.42316905,0.330363497 3.15375827,0.330363497 C2.88447147,0.330363497 2.65547851,0.424589081 2.46690336,0.613164229 L1.09306955,1.98699803 C0.904618388,2.1754492 0.810268823,2.40444216 0.810268823,2.67385294 C0.810268823,2.94326372 0.904494407,3.17213271 1.09306955,3.36070785 L4.06278719,6.33042549 L1.09306955,9.30014312 C0.904618388,9.48871827 0.810268823,9.71758725 0.810268823,9.98699803 C0.810268823,10.2564088 0.904494407,10.4852778 1.09306955,10.6738529 L2.46690336,12.0475628 C2.65547851,12.2361379 2.88447147,12.3303635 3.15375827,12.3303635 C3.42316905,12.3303635 3.65203803,12.2360139 3.84061318,12.0475628 L6.81033081,9.07784513 L9.78017243,12.0475628 C9.96874758,12.2361379 10.1974926,12.3303635 10.4671513,12.3303635 C10.7364381,12.3303635 10.9654311,12.2360139 11.1538823,12.0475628 L12.5274681,10.6738529 C12.7160432,10.4854018 12.8102688,10.2564088 12.8102688,9.98699803 C12.8102688,9.71758725 12.7160432,9.48871827 12.5274681,9.30014312 L9.55775046,6.33042549 L9.55775046,6.33042549 Z"></path></svg><svg class="valid-icon" viewBox="0 0 13 10" preserveAspectRatio="xMidYMid meet" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12.5934946,2.05190074 L11.5405914,0.998997515 C11.4012366,0.859642676 11.2076882,0.782223321 11.0141398,0.782223321 C10.8205914,0.782223321 10.627043,0.859642676 10.4876882,0.998997515 L5.4089785,6.08544913 L3.13284947,3.80157816 C2.99349463,3.66222332 2.79994624,3.58480397 2.60639786,3.58480397 C2.41284947,3.58480397 2.21930108,3.66222332 2.07994624,3.80157816 L1.02704302,4.85448139 C0.887688178,4.99383622 0.810268823,5.18738461 0.810268823,5.380933 C0.810268823,5.57448139 0.887688178,5.76802977 1.02704302,5.90738461 L3.82962366,8.70996526 L4.88252689,9.76286848 C5.02188173,9.90222332 5.21543011,9.97964268 5.4089785,9.97964268 C5.60252689,9.97964268 5.79607527,9.90222332 5.93543011,9.76286848 L6.98833334,8.70996526 L12.5934946,3.10480397 C12.7328495,2.96544913 12.8102688,2.77190074 12.8102688,2.57835235 C12.8102688,2.38480397 12.7328495,2.19125558 12.5934946,2.05190074 Z"></path></svg></span></label></div><div class="bod-form-element bod-text-input-container dark-on-light password"><label for="register-dialog-password"><div class="input-wrapper"><input type="password" class="bod-text-input" id="register-dialog-password" name="password" placeholder="Create Password*" value=""><span class="question-mark-icon"><div class="bod-form-modal-mask" style="top: 7.5px; left: 20.05px;"></div><div class="bod-form-tool-tip-container dark-on-light" id="register-dialog-password-form-tool-tip" style="top: 7.5px; left: 20.05px;"><img src="/website/static/btn-close-white.png" class="close-btn-x"><span class="caret" style="top: -10px;"></span><div class="content"><p>Our requirements have changed. Password must be between 4-24 characters and must contain both uppercase &amp; lowercase letters.</p></div></div></span></div><span class="title">Create Password*</span><span class="mark"><svg class="invalid-icon" viewBox="0 -1 14 14" preserveAspectRatio="xMidYMid meet" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M9.55775046,6.33042549 L12.5274681,3.36070785 C12.7160432,3.17225669 12.8102688,2.94326372 12.8102688,2.67385294 C12.8102688,2.40444216 12.7159193,2.17557318 12.5274681,1.98699803 L11.1537583,0.613164229 C10.9651831,0.424589081 10.7363141,0.330363497 10.4670273,0.330363497 C10.1974926,0.330363497 9.96862359,0.424589081 9.78004845,0.613164229 L6.81033081,3.58288186 L3.84061318,0.613164229 C3.65216201,0.424589081 3.42316905,0.330363497 3.15375827,0.330363497 C2.88447147,0.330363497 2.65547851,0.424589081 2.46690336,0.613164229 L1.09306955,1.98699803 C0.904618388,2.1754492 0.810268823,2.40444216 0.810268823,2.67385294 C0.810268823,2.94326372 0.904494407,3.17213271 1.09306955,3.36070785 L4.06278719,6.33042549 L1.09306955,9.30014312 C0.904618388,9.48871827 0.810268823,9.71758725 0.810268823,9.98699803 C0.810268823,10.2564088 0.904494407,10.4852778 1.09306955,10.6738529 L2.46690336,12.0475628 C2.65547851,12.2361379 2.88447147,12.3303635 3.15375827,12.3303635 C3.42316905,12.3303635 3.65203803,12.2360139 3.84061318,12.0475628 L6.81033081,9.07784513 L9.78017243,12.0475628 C9.96874758,12.2361379 10.1974926,12.3303635 10.4671513,12.3303635 C10.7364381,12.3303635 10.9654311,12.2360139 11.1538823,12.0475628 L12.5274681,10.6738529 C12.7160432,10.4854018 12.8102688,10.2564088 12.8102688,9.98699803 C12.8102688,9.71758725 12.7160432,9.48871827 12.5274681,9.30014312 L9.55775046,6.33042549 L9.55775046,6.33042549 Z"></path></svg><svg class="valid-icon" viewBox="0 0 13 10" preserveAspectRatio="xMidYMid meet" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M12.5934946,2.05190074 L11.5405914,0.998997515 C11.4012366,0.859642676 11.2076882,0.782223321 11.0141398,0.782223321 C10.8205914,0.782223321 10.627043,0.859642676 10.4876882,0.998997515 L5.4089785,6.08544913 L3.13284947,3.80157816 C2.99349463,3.66222332 2.79994624,3.58480397 2.60639786,3.58480397 C2.41284947,3.58480397 2.21930108,3.66222332 2.07994624,3.80157816 L1.02704302,4.85448139 C0.887688178,4.99383622 0.810268823,5.18738461 0.810268823,5.380933 C0.810268823,5.57448139 0.887688178,5.76802977 1.02704302,5.90738461 L3.82962366,8.70996526 L4.88252689,9.76286848 C5.02188173,9.90222332 5.21543011,9.97964268 5.4089785,9.97964268 C5.60252689,9.97964268 5.79607527,9.90222332 5.93543011,9.76286848 L6.98833334,8.70996526 L12.5934946,3.10480397 C12.7328495,2.96544913 12.8102688,2.77190074 12.8102688,2.57835235 C12.8102688,2.38480397 12.7328495,2.19125558 12.5934946,2.05190074 Z"></path></svg></span></label><div class="bod-form-element bod-check-box-container dark-on-light"><input type="checkbox" class="" id="bb-guid-11" name="" value=""><label for="bb-guid-11"><svg class="" viewBox="-1 0 21 18" preserveAspectRatio="xMidYMid meet" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect stroke="#d6d6d6" fill-opacity="0.1" fill="#fff" x="0" y="2" width="15" height="15"></rect><path fill="#0be000" d="M18.7109677,2.56758961 L17.3070968,1.16371865 C17.1212903,0.977912195 16.8632258,0.874686389 16.6051613,0.874686389 C16.3470968,0.874686389 16.0890323,0.977912195 15.9032258,1.16371865 L9.1316129,7.94565413 L6.09677419,4.90049284 C5.91096774,4.71468639 5.65290323,4.61146058 5.39483871,4.61146058 C5.13677419,4.61146058 4.87870968,4.71468639 4.69290323,4.90049284 L3.28903226,6.30436381 C3.10322581,6.49017026 3,6.74823478 3,7.00629929 C3,7.26436381 3.10322581,7.52242832 3.28903226,7.70823478 L7.02580645,11.445009 L8.42967742,12.8488799 C8.61548387,13.0346864 8.87354839,13.1379122 9.1316129,13.1379122 C9.38967742,13.1379122 9.64774194,13.0346864 9.83354839,12.8488799 L11.2374194,11.445009 L18.7109677,3.97146058 C18.8967742,3.78565413 19,3.52758961 19,3.2695251 C19,3.01146058 18.8967742,2.75339607 18.7109677,2.56758961 Z"></path></g></svg>Show Password</label></div></div><div class="action-container"><button type="submit" class="bod-button form inactive">Get Started</button></div></form></div></div><div class="footer"><p>Already Have an Account? <a href="http://club.teambeachbody.com/sign-in">Sign in</a></p><p>UK Residents: please email <a href="mailto:customerservice@beachbody.co.uk" class="link">Customer Service</a><br>or call + 44 121 6208111</p></div></div></div></div>

<script type="text/javascript">
    window.bbLoaders.push(function () {
        bb.headerEvents('.module-header');

        var registrationDialog = new bb.RegistrationDialog('#registration-dialog', {});

        // Hijack link to /sign-up to show dialog instead
        $('a[href="/sign-up"]').on('click', function (e) {
            e.preventDefault();
            registrationDialog.show();
        });

    });
</script>
<script>

    var pageTitle = 'Team Beachbody';

</script>


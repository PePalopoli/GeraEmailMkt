<?php
$exibir_form = true;
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include_once "functions.php";
if ($_POST["iURLS"]) {
    //die(var_dump("entrou"));

    $urls_lista = explode(";", $_POST["iURLS"]);
    // die(var_dump($urls_lista));
    $total = count($urls_lista);
    $key = 0;
    $produtos = array();


    for ($i = 0; $i < $total; $i++) {

        // $key = $i;

        $url = str_replace("\n", "", $urls_lista[$i]);
        // var_dump($url);

        $preco_exibir = "";
        $name_exibir = "";
        $url_image = "";
        $id_produto = "";

        $produto = getProduto($urls_lista[$i], $preco_exibir, $name_exibir, $url_image, $id_produto);
        //die(var_dump($produto));
        $produtos[$i]["preco"] = str_replace("\"", "", $preco_exibir);
        $produtos[$i]["nome"] = $name_exibir;
        $produtos[$i]["image"] = $url_image;
        $produtos[$i]["id"] = $id_produto;
        $produtos[$i]["url_produto"] = $urls_lista[$i];
        $produtos[$i]["nome_tag"] = strtolower(str_replace(" ", "-", $name_exibir));
        $produtos[$i]["nome_tag"] = sanitizeString($produtos[$i]["nome_tag"]);
    }

    $exibir_form = false;
    // die(var_dump($produtos));


?>
    <!DOCTYPE html>
    <html lang="pt-BR">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="image_src" href="https://torratorra.vteximg.com.br/arquivos/ids/600339" />
    <meta name="description" content="30 ANOS DE HISTÓRIAA Lojas Torra se tornou uma rede varejista de moda com mais de 60 lojas, em 12 estados, confirmando cada dia mais a solidez da marca, com grande variedade de produtos e proporcionando uma experiência diferenciada de compra aos consumidores." />
    <link rel="shortcut icon" href="https://torratorra.vteximg.com.br/arquivos/torratorra-favicon.ico?v=637363884954530000" />
    <title>E-mail MKT Lojas Torra - Carrinho</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap');

        @media (prefere-color-scheme: dark) {

            /*Mostra conteúdo somente no modo escuro, como imagens */
            .dark-img {
                display: block !important;
                width: auto !important;
            }

            /*Oculta conteúdo somente no modo claro, como imagens*/
            .light-img {
                display: none;
                display: none !important;
            }

            /*Cor de fundo do modo escuro personalizado*/
            .darkmode {
                background-color: #272623 ! important;
            }

            /*Modo escuro personalizado Cores da fonte*/
            h1,
            h2,
            p,
            span,
            a,
            b {
                color: #ffffff ! important;
            }

            /* Modo escuro personalizado Cor do link de texto */
            .link {
                cor: #91ADD4 ! important;
            }

            .bg-white {
                background-color: #FFFFFF !important;
            }
        }

        #outlook a {
            padding: 0;
        }

        table td {
            border-collapse: collapse;
        }

        p {
            margin: 1em 0;
        }

        body {
            width: 100% !important;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            margin-top: 0;
            margin-right: 0;
            margin-bottom: 0;
            margin-left: 0;
            padding: 0;
        }

        #background_table {
            margin-top: 0;
            margin-right: 0;
            margin-bottom: 0;
            margin-left: 0;
            padding: 0;
            width: 100% !important;
            line-height: 100% !important;
        }

        img {
            display: block;
        }

        #Externalclass {
            width: 100%
        }

        #Externalclass * {
            width: 100%;
            text-height: 100%;
        }

        @media only screen and (max-device-width: 380px) {

            table:not(#null) #wrapper,
            table:not(#null) #second_col {
                width: 320px;
            }

            table:not(#null) #wrapper img {
                max-width: 100%;
            }

            table:not(#null) #menu_footer td,
            table:not(#null) #menu_footer td table {
                width: 320px !important;
                text-align: center;
            }

            table:not(#null) #hide,
            table:not(#bnull) #menu {
                display: none !important;
                font-size: 0;
                max-height: 0;
                line-height: 0;
                mso-hide: all;
                /* hide elements in Outlook 2007-2013 */
            }

            table:not(#null) #block {
                display: block;
            }

            table:not(#null) #menu-two a {
                font-size: 8px !important;
                font-weight: 700;
            }

            table:not(#null) #img-wth {
                width: 30px !important;
            }

            table:not(#null) #brand td {
                height: 90px !important;
            }

            table:not(#null) #brand img {
                width: 100px !important;
            }

            table:not(#null) #icons p {
                font-size: 10px !important;
            }
        }

        body {
            width: 100% !important;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            margin: 0 !important;
            padding: 0;
        }

        /* CSS Responsivo */
        @media only screen and (max-device-width: 380px) {
            .font-m {
                font-size: 10px !important;
            }

            .max_width {
                width: 320px !important;
            }

            .hide {
                display: none;
                font-size: 0;
                max-height: 0;
                line-height: 0;
                mso-hide: all;
            }

            .produto {
                display: block;
                text-align: center !important;
                width: 100% !important
            }

            .produto table {
                margin: 0 auto !important;
            }

            .icons-rodape {
                display: block;
                width: 100% !important
            }

            .icons-rodape p {
                text-align: left !important;
            }

            .icons-rodape img {
                width: 20px !important;
            }

            .ond-encont {
                width: 50%;
                display: inline-block;
                padding-bottom: 15px;
            }

            .titulo {
                font-size: 18px !important;
                line-height: 20px !important;
            }

            .menu_rodape {
                text-align: center;
                width: 320px !important;
            }

            #menu-two a {
                font-size: 8px !important;
                font-weight: 700;
            }

            #img-wth {
                width: 30px !important;
            }

            #brand td {
                height: 90px !important;
            }

            #brand img {
                width: 100px !important;
            }

            #icons p {
                font-size: 8px !important;
            }
        }
    </style>
    </head>

    <body bgcolor="#f5f5f5" style="width: 100% !important;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;margin-top: 0;margin-right: 0;margin-bottom: 0;margin-left: 0;padding: 0">
        <!--Inicio Background-->
        <table id="background_table" width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f5f5f5" style="margin-top: 0;margin-right: 0;margin-bottom: 0;margin-left: 0;padding: 0;width: 100% !important;line-height: 100% !important">
            <tr>
                <td style="border-collapse: collapse">
                    <!--Inicio Wrapper-->
                    <table id="wrapper" width="700" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#fff" class="darkmode" style="background-image: url(https://torratorra.vteximg.com.br/arquivos/ids/600338); background-repeat: repeat; background-color: #fff;">
                        <tr>
                            <td style="border-collapse: collapse">
                                <!--Inicio Visualização ou Descadastro-->
                                <table id="preheader" width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#ff5101">
                                    <tr>
                                        <td valign="middle" align="center" width="100%" height="20" style="border-collapse: collapse">
                                            <p style="margin: 0.5em 0;font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 11px;color: #fff"><a href="%%view_email_url%%" target="_blank" style="font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 11px;color: #fff">Ver e-mail online</a> |
                                                <a href="%%subscription_center_url%%" target="_blank" style="font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 11px;color: #fff">Descadastre-se</a>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                                <!--Final Visualização ou Descadastro-->
                                <!--Inicio Logo e Acesse aqui-->
                                <table id="brand" width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td align="center" valign="middle" width="22%" height="110" style="border-collapse: collapse">
                                            <a href="https://www.lojastorra.com.br?utm_source=salesforce&utm_medium=email&utm_campaign=<?php echo $_POST["iCampanha"]; ?>&utm_content=logo_topo" target="_blank" style="font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 11px;color: #666"><img src="https://torratorra.vteximg.com.br/arquivos/ids/600349" alt="TORRA" border="0" style="display: block" class="light-img" /></a>
                                        </td>
                                    </tr>
                                </table>
                                <!--Final Logo e Acesse aqui-->
                                <!--Linha Separadora-->
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#e5e4e4">
                                    <tr>
                                        <td height="1" style="border-collapse: collapse"></td>
                                    </tr>
                                </table>
                                <!--Menu-->
                                <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <tr>
                                        <td height="5" style="border-collapse: collapse;"></td>
                                    </tr>
                                </table>
                                <!--Espaço Separadora-->
                                <table width="100%" id="hide" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <tr>
                                        <td height="15" style="border-collapse: collapse;"></td>
                                    </tr>
                                </table>
                                <table id="menu-two" width="100%" border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td width="10%" align="center" style="border-collapse: collapse">
                                            <a href="https://www.lojastorra.com.br/feminino?O=OrderByReleaseDateDESC&utm_source=salesforce&utm_medium=email&utm_campaign=<?php echo $_POST["iCampanha"]; ?>&utm_content=menu_feminino" target="_blank" style="font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 12px;color: #666;text-decoration: none;">FEMININO</a>
                                        </td>
                                        <td width="10%" align="center" style="border-collapse: collapse">
                                            <a href="https://www.lojastorra.com.br/lingerie?O=OrderByReleaseDateDESC&utm_source=salesforce&utm_medium=email&utm_campaign=<?php echo $_POST["iCampanha"]; ?>&utm_content=menu_lingerie" target="_blank" style="font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 12px;color: #666;text-decoration: none">LINGERIE</a>
                                        </td>
                                        <td width="10%" align="center" style="border-collapse: collapse">
                                            <a href="https://www.lojastorra.com.br/masculino?O=OrderByReleaseDateDESC&utm_source=salesforce&utm_medium=email&utm_campaign=<?php echo $_POST["iCampanha"]; ?>&utm_content=menu_masculino" target="_blank" style="font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 12px;color: #666;text-decoration: none">MASCULINO</a>
                                        </td>
                                        <td width="10%" align="center" style="border-collapse: collapse">
                                            <a href="https://www.lojastorra.com.br/infantil?O=OrderByReleaseDateDESC&utm_source=salesforce&utm_medium=email&utm_campaign=<?php echo $_POST["iCampanha"]; ?>&utm_content=menu_infantil" target="_blank" style="font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 12px;color: #666;text-decoration: none">INFANTIL</a>
                                        </td>
                                        <td width="10%" align="center" style="border-collapse: collapse">
                                            <a href="https://www.lojastorra.com.br/calcados?O=OrderByReleaseDateDESC&utm_source=salesforce&utm_medium=email&utm_campaign=<?php echo $_POST["iCampanha"]; ?>&utm_content=menu_calcados" target="_blank" style="font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 12px;color: #666;text-decoration: none">CALÇADOS</a>
                                        </td>
                                        <td width="10%" align="center" style="border-collapse: collapse">
                                            <a href="https://www.lojastorra.com.br/acessorios?O=OrderByReleaseDateDESC&utm_source=salesforce&utm_medium=email&utm_campaign=<?php echo $_POST["iCampanha"]; ?>&utm_content=menu_acessorios" target="_blank" style="font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 12px;color: #666;text-decoration: none">ACESSÓRIOS</a>
                                        </td>
                                        <td width="10%" id="hide" align="center" style="border-collapse: collapse">
                                            <a href="https://www.lojastorra.com.br/casa?O=OrderByReleaseDateDESC&utm_source=salesforce&utm_medium=email&utm_campaign=<?php echo $_POST["iCampanha"]; ?>&utm_content=menu_casa" target="_blank" style="font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 12px;color: #666;text-decoration: none">CASA</a>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <tr>
                                        <td height="5" style="border-collapse: collapse;"></td>
                                    </tr>
                                </table>
                                <!--Espaço Separadora-->
                                <table id="hide" width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <tr>
                                        <td height="15" style="border-collapse: collapse;"></td>
                                    </tr>
                                </table>
                                <!--Banner Principal-->
                                <table cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                    <tr>
                                        <td style="border-collapse: collapse;">
                                            <a href="<?= $_POST["iUrlBanner1"] ?>&utm_source=salesforce&utm_medium=email&utm_campaign=<?php echo $_POST["iCampanha"]; ?>&utm_content=banner_principal" target="_blank">
                                                <img src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/5/<?php echo $_POST["iCampanha"]; ?>_banner1.jpg" alt="New College" width="700" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border-top-style: none; border-left-style: none; border-right-style: none; border-bottom-style: none; display: block;" />
                                                <!-- <img src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/4/torra_ofertas_relampago_0604_banner1.png" alt="New College" width="700" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border-top-style: none; border-left-style: none; border-right-style: none; border-bottom-style: none; display: block;"/> -->
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#fff">
                                    <tr>
                                        <td height="10" style="border-collapse: collapse" align="center">
                                            <p class="titulo" style="font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #171841;text-decoration: none; line-height: 20px">
                                                <?= $_POST["iTxtTransicao"] ?>
                                            </p>
                                        </td>
                                    </tr>
                                </table>



                                <!--Primeira Linha de Produto-->
                                <table class="max_width" width="100%" align="center" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff">






                                    <?
                                    for ($i = 0; $i < $total; $i++) {




                                    ?>






                                        <?
                                        $float_direction = "right";
                                        if ((($i + 1) % 2) == 1) {
                                        ?>
                                            <tr>
                                            <? } else {
                                            $float_direction = "left";
                                        } ?>

                                            <!-- ::::: Produto <?= ($i + 1) ?> ::::: -->
                                            <td class="produto" align="<?= $float_direction ?>">
                                                <table cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td height="20"></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1" bgcolor="#e6e6e6"></td>
                                                        <td bgcolor="#FFFFFF">
                                                            <table cellpadding="0" cellspacing="0">
                                                                <!-- Imagem do Produto -->
                                                                <tr>
                                                                    <td bgcolor="#ffffff">
                                                                        <table cellpadding="0" cellspacing="0">
                                                                            <tr>
                                                                                <td>
                                                                                    <a href="<?= $produtos[$i]["url_produto"] ?>?utm_source=salesforce&utm_medium=email&utm_campaign=<?php echo $_POST["iCampanha"]; ?>&utm_content=<?= $produtos[$i]["nome_tag"] ?>" target="_blank">
                                                                                        <img src="https://torratorra.vteximg.com.br/arquivos/ids/<?= $produtos[$i]["id"] ?>-290-365" alt="<?= $produtos[$i]["nome"] ?>" width="290" style="display:block;" />
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- Fim Imagem do Produto -->
                                                                <!-- Descrição Produto -->
                                                                <tr>
                                                                    <td bgcolor="#FFFFFF">
                                                                        <table width="290" cellpadding="12" cellspacing="0">
                                                                            <tr>
                                                                                <td width="100%" align="center" style="border-bottom:solid; border-bottom-color:#F5F5F5; border-bottom-width:1px;">
                                                                                    <p style="line-height: 16px; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 13px; font-weight: normal; color: #101245 !important; margin: 0; padding: 0;font-weight: bold;">
                                                                                        <strong><?= $produtos[$i]["nome"] ?></strong>
                                                                                    </p>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- Fim Descrição Produto -->
                                                                <!--Preço Produto-->
                                                                <tr>
                                                                    <td bgcolor="#FFFFFF">
                                                                        <table width="290" cellpadding="12" cellspacing="0">
                                                                            <tr>
                                                                                <td width="62%">
                                                                                    <p style="line-height:15px; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 11px; font-weight: normal; color: #101245 !important; margin: 0; padding: 0;text-align: left;">
                                                                                        <!-- De: -->
                                                                                        <!-- <span style="text-decoration:line-through;color: #101245;">De: R$<?= $produtos[$i]["preco"] ?></span> -->
                                                                                    </p>
                                                                                    <p style="line-height:15px; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 12px; font-weight: normal; color: #101245 !important; margin: 0; padding: 0;text-align: left;">
                                                                                        <!-- Por: --><strong style="color: #101245; font-size:16px;font-weight: bold;">Por: <span style="color: #d67340;">R$<?= $produtos[$i]["preco"] ?></span></strong><br /><!-- Por: -->
                                                                                    </p>
                                                                                    <p style="line-height:15px; font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 10px; font-weight: normal; color: #101245 !important; margin: 0; padding: 0;text-align: left;">
                                                                                        <!-- De: --><span style="color: #101245;">ou 10x de R$ 15,99 s/ juros</span>
                                                                                    </p>
                                                                                </td>
                                                                                <td width="38%" align="right">
                                                                                    <a href="<?= $produtos[$i]["url_produto"] ?>?utm_source=salesforce&utm_medium=email&utm_campaign=<?php echo $_POST["iCampanha"]; ?>&utm_content=<?= $produtos[$i]["nome_tag"] ?>" target="_blank" style="background-color: #37bc9b; color:#fff;font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-size: 14px; font-weight: 600; text-decoration: none;line-height:20px;padding-bottom: 5px;padding-left: 12px;padding-right: 12px;padding-top: 5px;border-radius: 3px">COMPRAR</a>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <!-- Fim Preço Produto-->
                                                                <tr>
                                                                    <td height="1" bgcolor="#b8b8b8"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="1" bgcolor="#c7c7c7"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="1" bgcolor="#e6e6e6"></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td width="1" bgcolor="#e6e6e6"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <!-- ::::: Fim >> Produto 1 ::::: -->









                                            <? if ((($i + 1) % 2) == 1) { ?>
                                                <!-- Espaçamento entre os produtos -->
                                                <td class="hide" width="40"></td>
                                                <!-- Fim Espaçamento entre os produtos -->
                                            <?
                                            } else {
                                            ?>
                                            </tr>
                                        <? } ?>



                                    <?
                                        //fim laço repetição produtos
                                    }

                                    ?>






















                                    <!-- <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#fff">
                          <tr>
                           <td height="15" style="border-collapse: collapse">
                                 <a href="https://www.lojastorra.com.br/busca?fq=H:1355&O=OrderByReleaseDateDESC&utm_source=salesforce&utm_medium=email&utm_campaign=<?php echo $_POST["iCampanha"]; ?>&utm_content=banner_2" target="_blank">
                                    <img src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/5/<?php echo $_POST["iCampanha"]; ?>_banner2.jpg" alt="banner_2" width="700" style="padding-top: 15px;"/>
                                 </a>
                              </td>
                          </tr>
                      </table> -->
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#fff">
                                        <tr>
                                            <td height="15" style="border-collapse: collapse">
                                                <a href="https://www.lojastorra.com.br?utm_source=salesforce&utm_medium=email&utm_campaign=<?php echo $_POST["iCampanha"]; ?>&utm_content=clique_e_retire" target="_blank">
                                                    <img src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/5/banner_cliqe_retire_torra_23062022_v3.png" alt="Clique e Retire" width="700" style="padding-top: 15px;" />
                                                </a>
                                            </td>
                                        </tr>
                                    </table>



                                    <!--Inicio Parte final-->
                                    <!-- <table cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                        <tr>
                           <td style="border-collapse: collapse;">
                              <a href="https://apps.apple.com/br/app/lojas-torra-compre-online/id1480245080" target="_blank">
                              <img src="https://torratorra.vteximg.com.br/arquivos/ids/600336" alt="Download Apple Store" width="350" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border-top-style: none; border-left-style: none; border-right-style: none; border-bottom-style: none; display: block;"/>
                              </a>
                           </td>
                           <td style="border-collapse: collapse;">
                              <a href="https://play.google.com/store/apps/details?id=br.com.app.torra&hl=pt_BR&gl=US" target="_blank">
                              <img src="https://torratorra.vteximg.com.br/arquivos/ids/600337" alt="Download Google Play" width="350" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border-top-style: none; border-left-style: none; border-right-style: none; border-bottom-style: none; display: block;"/>
                              </a>
                           </td>
                        </tr>
                     </table> -->

                                    <table id="icons" width="100%" border="0" cellpadding="0" cellspacing="15">
                                        <tr>
                                            <td width="35%" align="center" style="border-collapse: collapse">
                                                <img id="img-wth" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/5/rodape_email_icone1_23062022.png" alt="Entrega" width="50" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border-top-style: none; border-left-style: none; border-right-style: none; border-bottom-style: none; display: block;" />
                                                <p style="    letter-spacing: -1px;font-family: sofia-pro, sans-serif;font-size: 13px;color: #000;text-decoration: none;font-weight: 600;"><b style="font-weight: 800;text-transform: uppercase;">Baixe nosso app<br></b> <span id="hide">Compre online e com <br>segurança de onde estiver!</span></p>
                                            </td>
                                            <td width="15%" align="center" style="border-collapse: collapse">
                                                <a href="https://apps.apple.com/br/app/lojas-torra-compre-online/id1480245080" target="_blank">
                                                    <img id="img-wth" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/5/rodape_email_btn_ios_23062022_v2.png" alt="10X sem juros" width="80" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border-top-style: none; border-left-style: none; border-right-style: none; border-bottom-style: none; display: block;" />
                                                </a>
                                                <a href="https://play.google.com/store/apps/details?id=br.com.app.torra&hl=pt_BR&gl=US" target="_blank">
                                                    <img id="img-wth" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/5/rodape_email_btn_android_23062022_v2.png" alt="10X sem juros" width="80" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border-top-style: none; border-left-style: none; border-right-style: none; border-bottom-style: none; display: block;" />
                                                </a>
                                            </td>
                                            <td width="25%" align="center" style="border-collapse: collapse;border-left: 1px solid #ff5101;">
                                                <img id="img-wth" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/5/rodape_email_icone2_23062022.png" alt="Troca Facilitada" width="50" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border-top-style: none; border-left-style: none; border-right-style: none; border-bottom-style: none; display: block;" />
                                                <p style="    letter-spacing: -1px;font-family: sofia-pro, sans-serif;font-size: 13px;color: #000;text-decoration: none;font-weight: 600;"><b style="font-weight: 800;text-transform: uppercase;">Primeira <br> troca grátis</b><br><span id="hide">+ de 70 lojas pra <br> trocar.</span></p>
                                            </td>
                                            <td width="25%" align="center" style="border-collapse: collapse;border-left: 1px solid #ff5101;">
                                                <a target="_blank" href="https://www.lojastorra.com.br/encontre-uma-loja?utm_source=salesforce&utm_medium=email&utm_campaign=<?php echo $_POST["iCampanha"]; ?>&utm_content=encontre_loja" style="text-decoration: none;">
                                                    <img id="img-wth" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/5/rodape_email_icone3_23062022.png" alt="Compra Rápida" width="50" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border-top-style: none; border-left-style: none; border-right-style: none; border-bottom-style: none; display: block;" />
                                                    <p style="    letter-spacing: -1px;font-family: sofia-pro, sans-serif;font-size: 13px;color: #000;text-decoration: none;font-weight: 600;"><b style="font-weight: 800;text-transform: uppercase;">Encontre <br>uma loja</b><br><span id="hide">Busque a Loja Torra <br> mais próxima de você!</span></p>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>


                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#fff">
                                        <tr>
                                            <td height="15" style="border-collapse: collapse">
                                                <a href="https://www.cartaotorra.com.br/servicos/faca-o-seu?utm_source=salesforce&utm_medium=email&utm_campaign=<?php echo $_POST["iCampanha"]; ?>&utm_content=clique_e_retire" target="_blank">
                                                    <img src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/5/banner_cartao_torra_23062022_v1.png" alt="Clique e Retire" width="700" style="" />
                                                </a>
                                            </td>
                                        </tr>
                                    </table>



                                    <!--Separadora-->


                                    <!--Separadora-->

                                    <!--Separadora-->
                                    <table id="hide" width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" bgcolor="#fff">
                                        <tr>
                                            <td height="20" style="border-collapse: collapse;"></td>
                                        </tr>
                                    </table>


                                    <table id="preheader" width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="">
                                        <tr>
                                            <td>
                                                <table id="preheader" width="94%" border="0" cellpadding="0" cellspacing="0" bgcolor="#e6e6e6" align="center">
                                                    <tr>
                                                        <td align="center" style="border-collapse: collapse;display: flex;align-items: center;    justify-content: center;" width="100%">
                                                            <p style="    font-family: sofia-pro, sans-serif;color: #000;font-weight: 600;font-size: 14px;"><b>Acesse nossas redes sociais</b></p>

                                                            <a href="https://www.instagram.com/lojastorra/" target="_blank" style="font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 12px;color: #666;text-decoration: none"><img src="https://torratorra.vteximg.com.br/arquivos/ids/600345" alt="Instagram" width="19" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border-top-style: none; border-left-style: none; border-right-style: none; border-bottom-style: none; display: block;margin-left: 15px;" /></a>


                                                            <a href="https://www.facebook.com/LojasTorra/" target="_blank" style="font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 12px;color: #666;text-decoration: none"><img src="https://torratorra.vteximg.com.br/arquivos/ids/600344" alt="Facebook" width="11" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border-top-style: none; border-left-style: none; border-right-style: none; border-bottom-style: none; display: block;margin-left: 15px;" /></a>


                                                            <a href="https://www.youtube.com/channel/UCmR9GomJR7Cs-PTipnDdseg" target="_blank" style="font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 12px;color: #666;text-decoration: none"><img src="https://torratorra.vteximg.com.br/arquivos/ids/600346" alt="Linkedin" width="24" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border-top-style: none; border-left-style: none; border-right-style: none; border-bottom-style: none; display: block;margin-left: 15px;" /></a>


                                                            <a href="https://www.linkedin.com/company/lojastorra/" target="_blank" style="font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 12px;color: #666;text-decoration: none"><img src="https://torratorra.vteximg.com.br/arquivos/ids/600347" alt="Youtube" width="19" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border-top-style: none; border-left-style: none; border-right-style: none; border-bottom-style: none; display: block;margin-left: 15px;" /></a>




                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                    <!--Separadora-->
                                    <table id="hide" width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" bgcolor="#fff">
                                        <tr>
                                            <td height="20" style="border-collapse: collapse;"></td>
                                        </tr>
                                    </table>
                                    <!--Separadora-->

                                    <table id="wrapper" width="700" align="center" border="0" cellpadding="30" cellspacing="0" bgcolor="#fff">
                                        <tr>
                                            <td>

                                                <table id="preheader" width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#fff">
                                                    <tr>
                                                        <td>
                                                            <table id="preheader" width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#fff" align="left">
                                                                <tr>
                                                                    <td align="left" width="45%" style="border-collapse: collapse" class="icons-rodape">
                                                                        <p style="margin: 0.6em 0;font-family: sofia-pro, sans-serif;font-size: 11px;color: #000;line-height: 10px;line-height: 14px;letter-spacing: -1px;"><b style="font-weight: 900;"><span style="color: #ff5101;">SAC</span> - SERVIÇO DE ATENDIMENTO AO CLIENTE <br>Lojas Torra:</b> <span style="font-weight: 600;font-size: 12px;">0800-701-0316.</span></p>
                                                                    </td>
                                                                    <td align="left" width="45%" style="border-collapse: collapse" class="icons-rodape">
                                                                        <p style="margin: 0.6em 0;font-family: sofia-pro, sans-serif;font-size: 11px;color: #000;line-height: 10px;line-height: 14px;font-weight: 400;letter-spacing: -1px;"><b style="font-weight: 900;">CENTRAL DE RELACIONAMENTO <span style="color: #ff5101;">CARTÃO TORRA</span></b><span style="font-weight: 600;font-size: 12px;"> <br>Capitais e regiões metropolitanas: 4020 9766<br>
                                                                                Demais localidaes: 0800-60-86772</span>
                                                                        </p>
                                                                    </td>
                                                                    <td align="right" width="40%" style="border-collapse: collapse" class="icons-rodape">
                                                                        <img id="img-wth" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/5/logo_torra_rodape_23062022_v1.png" alt="Entrega" width="108" style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; border-top-style: none; border-left-style: none; border-right-style: none; border-bottom-style: none; display: block;" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="20" style="border-collapse: collapse;"></td>
                                                                </tr>
                                                            </table>
                                                            <!--Separadora com Linha-->
                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#fff">
                                                                <tr>
                                                                    <td height="1" style="border-collapse: collapse"></td>
                                                                </tr>
                                                            </table>

                                                            <table id="preheader" width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td valign="middle" align="center" width="100%" height="20" style="border-collapse: collapse">
                                                                        <p style="margin: 0.6em 0;font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 9px;color: #000; text-align: justify;font-weight: 700;line-height: 10px;">*Todas as condições do Cartão Torra estão sujeitas a aprovação de crédito. Em todas as compras realizadas com o Cartão Torra, independentemente do nº de parcelas, haverá incidência, em cada parcela, do Serviço de Processamento de Transações. Os planos de pagamento para compras realizadas nas lojas físicas são de 1 a 5 vezes sem juros e de 8 a 9 vezes fixas com juros, os planos com juros poderão ter incidência de IOF. Os planos de pagamento para as compras realizadas na loja virtual (www.lojastorra.com.br) ou App Torra são de até 10 vezes sem juros. Verifique o seu limite disponível e as condições gerais em uma de nossas lojas. Ofertas válidas até 29/06/2022 para compras realizadas no site ou app Torra ou enquanto durarem os estoques promocionais. Todas as condições estão sujeitas a alteração sem aviso prévio.</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="10" style="border-collapse: collapse;"></td>
                                                                </tr>

                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!--Começo Copyright-->
                                                <!-- <table id="copyright" width="100%" align="center" border="0" cellpadding="5" cellspacing="0" bgcolor="#0f1140">
                                 <tr>
                                    <td valign="middle" align="center" width="100%" height="20" style="border-collapse: collapse">
                                       <p style="margin: 0.6em 0;font-family: 'Open Sans', Arial, Helvetica, sans-serif;font-size: 11px;color: #fff; text-align: center;">Copyright © 2022 Lojas Torra, Todos os direitos reservados.<br>
                                          Magazine Torra Torra Ltda. | Av. Paulista, 417 | Bela Vista - São Paulo - SP | CEP 01311-000
                                       </p>
                                    </td>
                                 </tr>
                              </table> -->
                                                <!--Final Copyright-->
                                            </td>
                                        </tr>
                                    </table>
                                    <!--Separadora com Linha-->
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#ff4f00">
                                        <tr>
                                            <td height="5" style="border-collapse: collapse"></td>
                                        </tr>
                                    </table>
                                    <!--Final Wrapper-->
                            </td>
                        </tr>
                    </table>
                    <!--Final Background-->
    </body>

    </html>






















































<?
} else {
    //die(var_dump("não entrou"));  
}


?>
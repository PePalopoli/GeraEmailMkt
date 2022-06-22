<?php

if($_POST)
{
$url = $_POST["iURL"];
	// die(var_dump($url));
// $url = "https://www.lojastorra.com.br/jaqueta-jeans-masculina-plus-size-puidos-azul-23131000187/p";
// $url = "https://66.220.146.224/19165649929?fields=name";







// $page_content = file_get_contents($url);

// $dom_obj = new DOMDocument();
// $dom_obj->loadHTML($page_content);
// $meta_val = null;

// foreach($dom_obj->getElementsByTagName('meta') as $meta) {

// 	if($meta->getAttribute('property')=='og:image')
// 	{
// 		$meta_val = $meta->getAttribute('content');
// 	}
// }
// // die(var_dump($meta_val));

// print_r($meta_val);





























$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host: graph.facebook.com'));
$output = curl_exec($ch);
curl_close($ch); 

$pos_ini_image = strpos($output,"<meta property=\"og:image\" content=\"");
$head_img = substr($output, $pos_ini_image+35);
$pos_fim_image = strpos($head_img,"\" />");
// die(var_dump($pos_fim_image));
$image = substr($head_img, 0,$pos_fim_image);
$url_image = $image;
// die(var_dump($image));






$pos_ini_name = strpos($output,"<div class=\"fn productName  ");
$head = substr($output, $pos_ini_name);

$pos_ini2_name = strpos($head,"\">");
$pos_fim_name = strpos($head,"</div>");
$comprimnto_name = ($pos_fim_name-2) - $pos_ini2_name;

$name = substr($head, $pos_ini2_name+2,$comprimnto_name);

// die(var_dump($head));
// $pos_ini_preco = strpos($head,"___rc-p-dv-id\" type=\"hidden\" value=\"");
$pos_ini_preco = strpos($head,"<input")+101;
// die(var_dump($pos_ini_preco));
$head_preco = substr($head, $pos_ini_preco);
$pos_fim_preco = strpos($head_preco,"\" />");
// $comprimnto_preco = ($pos_fim_preco-2) - $pos_ini_preco;

// die(var_dump($head_preco));

$preco = substr($head_preco, 0,$pos_fim_preco);


$preco_exibir = $preco;
$name_exibir = $name;

// print_r($preco);
// print_r($name);


// die(var_dump($preco));
// die(var_dump($name));
// die(var_dump($output));

// $html = htmlentities(file_get_contents("https://www.lojastorra.com.br/jaqueta-jeans-masculina-plus-size-puidos-azul-23131000187/p"));
// $doc = new DOMDocument();
// $doc->loadHTML($html);
// $content = $doc->getElementsByTagName("textContent");
// die(var_dump($content));
// $h1 = $doc->getElementsByTagName("title");
// var_dump($h1);



?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <style>
         @import url("https://use.typekit.net/uxx4rbi.css");
      </style>
      <style type="text/css">
         ReadMsgBody{ width: 100%;}
         .ExternalClass {width: 100%;}
         .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;}
         body {-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;margin:0 !important;}
         p { margin: 1em 0;}
         table td { border-collapse: collapse;}
         img {outline:0;}
         a img {border:none;}
         @-ms-viewport{ width: device-width;}
      </style>
      <style type="text/css">
         @media only screen and (max-width: 480px) {
             .encontre-loja{width: 220px;height: auto;font-size: 18px;}
            img{width: 100% !important; height: 23px !important;}
            .redes-sociais .link img{width: 24px !important; height: auto;}
            .padding-full-desktop {padding: 0px 0px !important; }
            #img-produto{max-width: 50% !important;}
         .container {width: 100% !important;}
         .footer { width:auto !important; margin-left:0; }
         .mobile-hidden { display:none !important; }
         .logo { display:block !important; padding:0 !important; }
         img { max-width:100% !important; height:auto !important; max-height:auto !important;}
         .header img{max-width:100% !important;height:auto !important; max-height:auto !important; width: auto !important;}
         .photo img { width:100% !important; max-width:100% !important; height:auto !important;}
         .drop { display:block !important; width: 100% !important; float:left; clear:both;}
         .footerlogo { display:block !important; width: 100% !important; padding-top:15px; float:left; clear:both;}
         .nav4, .nav5, .nav6 { display: none !important; }
         .tableBlock {width:100% !important;}
         .responsive-td {width:100% !important; display:block !important; padding:0 !important; }
         .fluid, .fluid-centered {
         width: 100% !important;
         max-width: 100% !important;
         height: auto !important;
         margin-left: auto !important;
         margin-right: auto !important;
         }
         .fluid-centered {
         margin-left: auto !important;
         margin-right: auto !important;
         }
         /* MOBILE GLOBAL STYLES - DO NOT CHANGE */
         body { padding: 0px !important; font-size: 16px !important; line-height: 120% !important;}
         h1 { font-size: 22px !important; line-height: normal !important;}
         h2 { font-size: 20px !important; line-height: normal !important;}
         h3 { font-size: 18px !important; line-height: normal !important;}
         .buttonstyles {
         font-family:arial,helvetica,sans-serif !important;
         font-size: 16px !important;
         color: #FFFFFF !important;
         padding: 10px !important;
         }
         /* END OF MOBILE GLOBAL STYLES - DO NOT CHANGE */
         }
         @media only screen and (max-width: 640px) {
            img{width: 100% !important; height: 23px !important;}
            .redes-sociais .link img{width: 24px !important; height: auto;}
            .padding-full-desktop {padding: 0px 0px !important; }
            #img-produto{max-width: 50% !important;}
         .container { width:100% !important; }
         .mobile-hidden { display:none !important; }
         .logo { display:block !important; padding:0 !important; }
         .photo img { width:100% !important; height:auto !important;}
         .nav5, .nav6 { display: none !important;}
         .fluid, .fluid-centered {
         width: 100% !important;
         max-width: 100% !important;
         height: auto !important;
         margin-left: auto !important;
         margin-right: auto !important;
         }
         .fluid-centered {
         margin-left: auto !important;
         margin-right: auto !important;
         }
         }
      </style>
      <!--[if mso]>
      <style type="text/css">
         /* Begin Outlook Font Fix */
         body, table, td {
         font-family: Arial, Helvetica, sans-serif ;
         font-size:16px;
         color:#000000;
         line-height:1;
         }
         /* End Outlook Font Fix */
      </style>
      <![endif]-->
   </head>
   <body bgcolor="#ffffff" text="#000000" style="background-color: #ffffff; color: #000000; padding: 0px; -webkit-text-size-adjust:none; font-size: 16px; font-family:arial,helvetica,sans-serif;">
      <div style="font-size:0; line-height:0;">
         <custom name="opencounter" type="tracking">
         <custom name="usermatch" type="tracking" />
      </div>
      <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
         <tr>
            <td align="center" valign="top">
               <custom type="header"/>
            </td>
         </tr>
         <tr>
            <td align="center">
               <table cellspacing="0" cellpadding="0" border="0" width="600" class="container" align="center">
                  <tr>
                     <td>
                        <table class="tb_properties border_style" style="background-color:#FFFFFF;" cellspacing="0" cellpadding="0" bgcolor="#ffffff" width="100%">
                           <tr>
                              <td align="center" valign="top">
                                 <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tr>
                                       <!-- added padding here -->
                                       <td class="content_padding" style="">
                                          <!-- end of comment -->
                                          <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                             <tr>
                                                <!-- top slot -->
                                                <td align="center" class="header" valign="top">
                                                   <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                      <tbody>
                                                         <tr>
                                                            <td align="left" valign="top">
                                                               <table cellspacing="0" cellpadding="0" style="width:100%">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td class="responsive-td" valign="top" style="width: 100%;">
                                                                           <table cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%; " class="stylingblock-content-wrapper">
                                                                              <tr>
                                                                                 <td class="stylingblock-content-wrapper camarker-inner">
                                                                                    <table align="center" border="0" cellpadding="0" cellspacing="0">
                                                                                       <tr>
                                                                                          <td class="columnContainerCell" valign="top" style="mso-line-height-rule: exactly; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; word-break: break-word; vertical-align: top; text-align: right; font-size: 11px; line-height: 120%; font-family: Helvetica, Arial, sans-serif; color: #888888; padding-top: 9px; padding-left: 9px; padding-bottom: 9px; padding-right: 9px;">
                                                                                             <center><span style="font-family:arial,helvetica,sans-serif; font-size:11px;"><font color="#999999">Caso não esteja visualizando as imagens, <a href="%%view_email_url%%" style="" target="_blank">acesse aqui.</a></font></span></center>
                                                                                             <br> 
                                                                                          </td>
                                                                                       </tr>
                                                                                    </table>
                                                                                 </td>
                                                                              </tr>
                                                                           </table>
                                                                           
                                                                           <table cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%; " class="stylingblock-content-wrapper">
                                                                              <tr>
                                                                                 <td class="stylingblock-content-wrapper camarker-inner">
                                                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                                                       <tr>                                                                                          
                                                                                             <td align="center">
                                                                                                <a target="_blank" href="https://www.lojastorra.com.br?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=logo_topo">                                                                                             
                                                                                                   <img data-assetid="27942" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/3/readeer_logo_torra_reguas_2022_v3.png" alt="" width="650" style="display: block; padding: 0px; text-align: center; height: auto; width: 100%; border: 0px;">
                                                                                                </a>
                                                                                             </td>                                                                                          
                                                                                       </tr>
                                                                                    </table>
                                                                                 </td>
                                                                              </tr>
                                                                           </table>  


                                                                                                                               










                                                                           <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="margin-bottom: -25px;background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
                                                                              <tr>
                                                                                 <td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner">
                                                                                    <table cellspacing="0" cellpadding="0" style="width: 80%; margin-left: 10%;margin-right: 10%;">
                                                                                       <tr>
                                                                                          <td>
                                                                                             <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                                                                                <tr>
                                                                                                   <!-- <td valign="top" style="width: 25%; padding-right: 3px;"><img data-assetid="27942" src="btn_categoria_1.png" alt="" width="198" height="29" style="display: block; padding: 0px; text-align: center; height: 29px; width: auto; border: 0px;"></td> -->
                                                                                                   <td valign="top" style="width: 18%;"><a target="_blank" href="https://www.lojastorra.com.br/feminino?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=cabecalho_feminino"><img data-assetid="27942" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/3/reguas_2022_menu1_feminino_v2.png" alt="" width="87" height="34" style="min-height: 31px;display: block; padding: 0px; text-align: center; height: 34px; width: auto; border: 0px;margin-left: -1px;"></a></td>
                                                                                                   <td valign="top" style="width: 18%;"><a target="_blank" href="https://www.lojastorra.com.br/masculino?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=cabecalho_masculino"><img data-assetid="27942" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/3/reguas_2022_menu2_masculino.png" alt="" width="102" height="34" style="min-height: 31px;display: block; padding: 0px; text-align: center; height: 34px; width: auto; border: 0px;margin-left: -1px;"></a></td>
                                                                                                   <td valign="top" style="width: 18%;"><a target="_blank" href="https://www.lojastorra.com.br/infantil?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=cabecalho_infantil"><img data-assetid="27942" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/3/reguas_2022_menu3_infantil.png" alt="" width="84" height="34" style="min-height: 31px;display: block; padding: 0px; text-align: center; height: 34px; width: auto; border: 0px;margin-left: -1px;"></a></td>                                                                                                   
                                                                                                   <td valign="top" style="width: 18%;"><a target="_blank" href="https://www.lojastorra.com.br/casa?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=cabecalho_casa"><img data-assetid="27942" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/3/reguas_2022_menu4_casa.png" alt="" width="38" height="34" style="min-height: 31px;display: block; padding: 0px; text-align: center; height: 34px; width: auto; border: 0px;margin-left: -1px;"></a></td>
                                                                                                   <td valign="top" style="width: 18%;"><a target="_blank" href="https://www.cartaotorra.com.br/faca-o-seu?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=cabecalho_cartao_torra"><img data-assetid="27942" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/3/reguas_2022_menu5_cartao_v2.png" alt="" width="124" height="34" style="min-height: 31px;display: block; padding: 0px; text-align: center; height: 34px; width: auto; border: 0px;margin-left: -1px;"></a></td>
                                                                                                </tr>

                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </table>
                                                                                 </td>
                                                                              </tr>
                                                                           </table>                                                                           
                                                                        </td>
                                                                     </tr>                                                                     
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>








                                             <tr>
                                                <!-- slot with 2 columns -->
                                                <td align="center" valign="top">
                                                   <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                      <tbody>
                                                         <tr>
                                                            <td align="left" valign="top">
                                                               <table cellspacing="0" cellpadding="0" style="width:100%">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td class="responsive-td" valign="top" style="width: 33%;">
                                                                           <table cellpadding="0" cellspacing="0" width="100%" style="background-color: transparent; min-width: 100%; " class="slot-styling mobile-hidden">
                                                                              <tr>
                                                                                 <td style="padding: 0px; " class="slot-styling mobile-hidden camarker-inner"></td>
                                                                              </tr>
                                                                           </table>
                                                                        </td>
                                                                        <td class="responsive-td" valign="top" style="width: 67%;">
                                                                           <table cellpadding="0" cellspacing="0" width="100%" style="background-color: transparent; min-width: 100%; " class="slot-styling mobile-hidden">
                                                                              <tr>
                                                                                 <td style="padding: 0px; " class="slot-styling mobile-hidden camarker-inner"></td>
                                                                              </tr>
                                                                           </table>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>

                                             <tr>
                                                <!-- bottom 2 slot -->
                                                <td align="center" class="header" valign="top">
                                                   <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                      <tbody>
                                                         <tr>
                                                            <td align="left" valign="top">
                                                               <table cellspacing="0" cellpadding="0" style="width:100%">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td class="responsive-td" valign="top" style="width: 100%;">
                                                                           <table cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%; " class="stylingblock-content-wrapper">
                                                                              <tr>
                                                                                 <td class="stylingblock-content-wrapper camarker-inner">
                                                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                                                       <tr>
                                                                                          <td align="center">
                                                                                                <a href="https://www.lojastorra.com.br?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=banner_principal" target="_blank" title="" alias="" conversion="false" data-linkto="https://">
                                                                                                   <img data-assetid="27879" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/3/torra_1B_0301_1_banner1.png" alt="" height="423" width="650" style="display: block; padding: 0px; text-align: center; height: 423px; width: 650px; border: 0px;margin-bottom: 0px;margin-top: 15px;">
                                                                                                </a>
                                                                                             
                                                                                          </td>
                                                                                       </tr>
                                                                                    </table>
                                                                                 </td>
                                                                              </tr>
                                                                           </table>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>




                                             <tr>
                                                <!-- bottom 1 slot -->
                                                <td align="center" class="header" valign="top">
                                                   <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                      <tbody>
                                                         <tr>
                                                            <td align="left" valign="top">
                                                               <table cellspacing="0" cellpadding="0" style="width:100%;">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td class="responsive-td" valign="top" style="width: 100%;">
                                                                           <table cellpadding="0" cellspacing="0" width="100%" class="stylingblock-content-wrapper" style="min-width: 100%; ">
                                                                              <tr>
                                                                                 <td class="stylingblock-content-margin-cell padding-full-desktop" style="padding: 0px 10px; ">
                                                                                    <table cellpadding="0" cellspacing="0" width="100%" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">


                                                                                       <tr>
                                                                                          <td style="padding: 0px; background-color: #fff;" class="stylingblock-content-wrapper camarker-inner">
                                                                                             
                                                                                             

                                                                                             <div style="margin-top: 25px;margin-left: 5%;">
                                                                                                <br>
                                                                                                <span style="font-size:20px;"><b><span style="color:#ff5101;"><span style="font-family:sofia-Pro,Arial,Helvetica,sans-serif;">Ol&aacute;</span></span><span style="color:#ff5101;"><span style="font-family:sofia-Pro,Arial,Helvetica,sans-serif;">&nbsp;</span></span><span style="color:#ff5101;"><span style="font-family:sofia-Pro,Arial,Helvetica,sans-serif;">%%Nome%%,</span></span></b></span>
                                                                                                &nbsp;
                                                                                                &nbsp;
                                                                                             </div>
                                                                                             <div style="line-height: 120%; text-align: center;"></div>
                                                                                             <div style="    margin-left: 5%;margin-right: 5%;">
                                                                                                <p style="box-sizing: border-box; font-family: sofia-pro, sans-serif; font-style: normal; font-weight: 400; margin-top: 0px; margin-bottom: 1rem; orphans: 3; widows: 3; color: #000; letter-spacing: -1px; line-height: 120%;">
                                                                                                   <span style="font-size:20px;line-height: 22px;">
                                                                                                      <b style="box-sizing: border-box;font-family: sofia-pro, sans-serif;font-style: normal;font-weight: bold;"></b><br>                                                                                                   
                                                                                                      
                                                                                                      
                                                                                                      Tem oferta bombando com preços imperdíveis para compras online. Não fica parado aí não, clica e vem conferir agora mesmo!
                                                                                                       

                                                                                                        
                                                                                                   </span>
                                                                                                </p>

                                                                                                  


                                                                                                   
                                                                                             </div>
                                                                                          </td>
                                                                                       </tr>


                                                                                       
                                                                                       

                                                                                       <tr>
                                                                                          <td class="stylingblock-content-wrapper camarker-inner">
                                                                                             <table width="100%" cellspacing="0" cellpadding="0">
                                                                                                <tr style="background-color: #fff;">                                                                                                  
                                                                                                   <td class="responsive-td" valign="top" style="width: 50%;" align="center">
                                                                                                      <a href="<?=$url?>?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=blusa-flame-basica-branca" target="_blank" title="" alias="" conversion="false" data-linkto="https://" style="text-decoration: none; font-family: sofia-pro, sans-serif; width: 85%; display: inline-block; margin-bottom: 10px;">
                                                                                                         <div class="box-product">
                                                                                                            <div class="box-image" style=" height: 220px; overflow: hidden; border: 2px solid #f1f1f1; margin: 0 0 5px 0;">
                                                                                                               <img src="<?=$url_image?>" alt="" style="min-width: 100%; min-height: 100%; max-width: 100%;">
                                                                                                            </div>
                                                                                                            <div class="box-content" style="text-align: center; border: 2px solid #f1f1f1; text-transform: uppercase; padding: 20px 10px;">
                                                                                                               <h2 style="font-size: 16px;color: #37375b; text-transform: uppercase; font-weight: 900; margin: 0 0 5px 0;"><?=$name_exibir?></h2>
                                                                                                               <p style="font-size: 30px;color: #37375b; text-transform: uppercase; font-weight: 900; margin: 0 0 20px 0; line-height: 20px;"><?=$preco_exibir?></p>
                                                                                                               <p style="font-size: 18px;background-color: #37375b; padding: 4px 50px; color: #fff; display: inline-block; margin: 0;  font-weight: 900;">COMPRAR</p>
                                                                                                            </div>
                                                                                                         </div>
                                                                                                      </a> 
                                                                                                   </td>  
                                                                                                   <td class="responsive-td" valign="top" style="width: 50%;" align="center">
                                                                                                      <a href="<?=$url?>?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=blusa-flame-basica-branca" target="_blank" title="" alias="" conversion="false" data-linkto="https://" style="text-decoration: none; font-family: sofia-pro, sans-serif; width: 85%; display: inline-block; margin-bottom: 10px;">
                                                                                                         <div class="box-product">
                                                                                                            <div class="box-image" style=" height: 220px; overflow: hidden; border: 2px solid #f1f1f1; margin: 0 0 5px 0;">
                                                                                                               <img src="<?=$url_image?>" alt="" style="min-width: 100%; min-height: 100%; max-width: 100%;">
                                                                                                            </div>
                                                                                                            <div class="box-content" style="text-align: center; border: 2px solid #f1f1f1; text-transform: uppercase; padding: 20px 10px;">
                                                                                                               <h2 style="font-size: 16px;color: #37375b; text-transform: uppercase; font-weight: 900; margin: 0 0 5px 0;"><?=$name_exibir?></h2>
                                                                                                               <p style="font-size: 30px;color: #37375b; text-transform: uppercase; font-weight: 900; margin: 0 0 20px 0; line-height: 20px;"><?=$preco_exibir?></p>
                                                                                                               <p style="font-size: 18px;background-color: #37375b; padding: 4px 50px; color: #fff; display: inline-block; margin: 0;  font-weight: 900;">COMPRAR</p>
                                                                                                            </div>
                                                                                                         </div>
                                                                                                      </a> 
                                                                                                   </td>                                                                                                  
                                                                                                </tr>                                                                                                
                                                                                             </table>
                                                                                          </td>                                                                                                                                                                                   
                                                                                       </tr>


                                                                                       

                                                                                       

                                                                                       






                                                                                       

                                                                                       

                                                                                       



                                                                                        




                                                                                       

                                                                                       

                                                                                       
                                                                                          


                                                                                       

                                                                                       


                                                                                      
                                                                                       


                                                                                       <tr>
                                                                                          <td class="stylingblock-content-wrapper camarker-inner">
                                                                                             <table width="100%" cellspacing="0" cellpadding="0">
                                                                                                <tr style="background-color: #fff;">                                                                                                  
                                                                                                   <td class="responsive-td" valign="top" style="width: 100%;" align="center">
                                                                                                      <a href="https://www.lojastorra.com.br?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=direcionamento_loja" target="_blank" title="" alias="" conversion="false" data-linkto="https://">
                                                                                                      <img data-assetid="27879" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/3/reguas_2022_banner_vantagens.png" alt="" height="197" width="650" style="display: block; padding: 0px; text-align: center; height: 197px; width: 650px; border: 0px;margin-bottom: -1px;margin-top: 0px;"></a>
                                                                                                   </td>                                                                                                   
                                                                                                </tr>                                                                                                
                                                                                             </table>
                                                                                          </td>                                                                                                                                                                                   
                                                                                       </tr>
                                                                                       

                                                                                       


                                                                                       

                                                                                      

                                                                                       

                                                                                       

                                                                                       

                                                                                       

                                                                                         

                                                                                                                                                                          


                                                                                       


                                                                                     



                                                                                       




                                                                                      

                                                                                       


                                                                                       



























                                                                                       <tr>
                                                                                          <td class="stylingblock-content-wrapper camarker-inner">
                                                                                             <table width="100%" cellspacing="0" cellpadding="0">

                                                                                                
                                                                                                


                                                                                                
                                                                                                
                                                                                                
                                                                                                 

                                                                                       


                                                                                       
                                                                                        
                                                                                    </table>
                                                                                 </td>
                                                                              </tr>
                                                                           </table>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>


                                            



                                             


                                             <tr>
                                                <!-- bottom 2 slot -->
                                                <td align="center" class="header" valign="top">
                                                   <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                      <tbody>
                                                         <tr>
                                                            <td align="left" valign="top">
                                                               <table cellspacing="0" cellpadding="0" style="width:100%">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td class="responsive-td" valign="top" style="width: 100%;">
                                                                           <table cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%; " class="stylingblock-content-wrapper">
                                                                              <tr >
                                                                                 <td class="stylingblock-content-wrapper camarker-inner">
                                                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                                                    	<tr >
                                                                                          <td align="center">
                                                                                             
                                                                                             <img data-assetid="27879" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/3/reguas_2022_banner_banner_app_topo.png" alt="" height="156" width="650" style="display: block; padding: 0px; text-align: center; height: 156px; width: 650px; border: 0px;margin-top: 0px;margin-bottom: -1px;background-color: #fff;">
                                                                                          </td>
                                                                                       </tr>
                                                                                       <tr >
                                                                                          <td align="center">
                                                                                             <a href="https://play.google.com/store/apps/details?id=br.com.app.torra&utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=banner_app" target="_blank" title="" alias="" conversion="false" data-linkto="https://">
                                                                                             <img data-assetid="27879" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/3/reguas_2022_banner_app_android.png" alt="" height="58" width="650" style="display: block; padding: 0px; text-align: center; height: 58px; width: 650px; border: 0px;margin-top: 0px;margin-bottom: -1px;background-color: #fff;"></a> 
                                                                                          </td>
                                                                                       </tr>

                                                                                       <tr>
                                                                                          <td align="center">
                                                                                             <a href="https://apps.apple.com/br/app/lojas-torra-compre-online/id1480245080?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=banner_app" target="_blank" title="" alias="" conversion="false" data-linkto="https://">
                                                                                             <img data-assetid="27879" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/3/reguas_2022_banner_app_ios.png" alt="" height="58" width="650" style="display: block; padding: 0px; text-align: center; height: 58px; width: 650px; border: 0px;margin-top: 0px;margin-bottom: -10px;"></a> 
                                                                                          </td>
                                                                                       </tr>


                                                                                       


                                                                                       
                                                                                       
                                                                                    </table>
                                                                                 </td>
                                                                              </tr>
                                                                           </table>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>


                                             



                                             


                                             



                                             


                                             

                                             

                                             
                                             
                                             <tr>
                                                <!-- bottom 7 slot -->
                                                <td align="center" class="header" valign="top">
                                                   <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                      <tbody>
                                                         <tr>
                                                            <td align="left" valign="top">
                                                               <table cellspacing="0" cellpadding="0" style="width:100%">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td class="responsive-td" valign="top" style="width: 100%;">
                                                                           <table cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%; " class="stylingblock-content-wrapper">
                                                                              <tr>
                                                                                 <td class="stylingblock-content-wrapper camarker-inner">&nbsp; &nbsp; &nbsp;</td>
                                                                              </tr>
                                                                           </table>                                                                           
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>

                                             <tr>
                                                <!-- bottom 2 slot -->
                                                <td align="center" class="header" valign="top">
                                                   <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                      <tbody>
                                                         <tr>
                                                            <td align="left" valign="top">
                                                               <table cellspacing="0" cellpadding="0" style="width:100%">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td class="responsive-td" valign="top" style="width: 100%;">
                                                                           <table cellpadding="0" cellspacing="0" width="100%" style="margin: 0 auto; max-width: 650px; " class="stylingblock-content-wrapper">
                                                                              <tr>
                                                                                 <td class="stylingblock-content-wrapper camarker-inner">
                                                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                                                       <tr>
                                                                                          <td align="center">
                                                                                             
                                                                                             <img data-assetid="27879" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/3/reguas_2022_banner_logo_rodape.png" alt="" height="102" width="100%" style="display: block; padding: 0px; text-align: center; height: 102px; width: 100%; border: 0px;margin-bottom: -1px; margin-top: -10px;">
                                                                                          </td>
                                                                                       </tr>
                                                                                    </table>
                                                                                 </td>
                                                                              </tr>
                                                                           </table>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>




                                             







                                             <tr>
                                                <!-- bottom 8 slot -->
                                                <td align="center" class="header" valign="top">
                                                   <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%">
                                                      <tbody>
                                                         <tr>
                                                            <td align="left" valign="top">
                                                               <table cellspacing="0" cellpadding="0" style="width:100%">
                                                                  <tbody>
                                                                     <tr>
                                                                        <td class="responsive-td" valign="top" style="width: 100%;">
                                                                           <table cellpadding="0" cellspacing="0" width="100%" style="background-color: transparent; min-width: 100%; " class="slot-styling">
                                                                              <tr>
                                                                                 <td style="padding: 0px; " class="slot-styling camarker-inner">
                                                                                    <table cellpadding="0" cellspacing="0" width="100%" style="background-color: #37375b; max-width: 650px; margin: auto; " class="stylingblock-content-wrapper">
                                                                                       <tr>
                                                                                          <td style="padding: 10px; " class="stylingblock-content-wrapper camarker-inner">
                                                                                             <table cellspacing="0" cellpadding="0" style="width: 100%;">
                                                                                                <tr>
                                                                                                   <td>
                                                                                                      <table cellspacing="0" cellpadding="0" style="width: 100%;">




                                                                                                         <tr>
                                                                                                            <td valign="top" class="responsive-td" style="width: 48%; padding-right: 0px;">
                                                                                                               <table cellpadding="0" cellspacing="0" width="100%" class="stylingblock-content-wrapper" style="min-width: 100%; ">
                                                                                                                  <tr>
                                                                                                                     <td class="stylingblock-content-margin-cell" style="padding: 8px 0px 0px; ">
                                                                                                                        
                                                                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                                                                           <tr>
                                                                                                                              <td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
                                                                                                                              <div style="text-align: center;    margin-bottom: -25px;" class="redes-sociais">
                                                                                                                                 <br>
                                                                                                                                 <a target="_blank" class="link" href="https://www.lojastorra.com.br/encontre-uma-loja?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=encontrar_loja" style="text-decoration: none;">
                                                                                                                                    <img alt="" data-assetid="27994" height="32" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/2/torra_pin_localizacao.png" style="padding: 0px; text-align: center; height: 32px; width: 27px; border: 0px;" width="24">
                                                                                                                                      <p style="display: inline-block; color: #fff; font-weight: bold; text-align: left;">encontre <br/> uma loja</p>
                                                                                                                                    </a>
                                                                                                                                 &nbsp;
                                                                                                                                 &nbsp; 
                                                                                                                                 <a target="_blank" class="link"  href="https://www.lojastorra.com.br?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=link_lojas_torra_rodape"  style="text-decoration: none;"> 
                                                                                                                                    <img alt="" data-assetid="27995" height="32" src="https://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/2/torra_pin_bolsa.png" style="padding: 0px; text-align: center; border: 0px solid transparent; height: 32px; width: 27px;" width="22">
                                                                                                                                        <p style="display: inline-block; color: #fff; font-weight: bold; text-align: left;">acesse a  <br/>loja virtual</p>
                                                                                                                                    </a>
                                                                                                                                 &nbsp;
                                                                                                                                 &nbsp;                                                                                                                                 
                                                                                                                              </div>                                                                                                                              
                                                                                                                           </td>
                                                                                                                           </tr>
                                                                                                                        </table>

                                                                                                                        <table cellpadding="0" cellspacing="0" width="100%" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
                                                                                                                           <tr>
                                                                                                                              <td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
                                                                                                                                 <p style="text-align: center; line-height: 115%;">
                                                                                                                                    <span style="font-size:12px;    color: #FFF;"><span style="font-family:sofia-Pro,Arial,Helvetica,sans-serif;"><b>SAC - Servi&ccedil;o de Atendimento ao Cliente&nbsp;</b><br>
                                                                                                                                    <b>Lojas Torra:</b> (11) 5036-5500.</span></span>
                                                                                                                                 </p>
                                                                                                                              </td>
                                                                                                                           </tr>
                                                                                                                        </table>
                                                                                                                     </td>
                                                                                                                  </tr>
                                                                                                               </table>
                                                                                                            </td>
                                                                                                            <td valign="top" class="responsive-td" style="width: 52%; padding-left: 0px;">
                                                                                                               <table cellpadding="0" cellspacing="0" width="100%" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
                                                                                                                  <tr>
                                                                                                                     <td style="padding: 25px 0 0 0; " class="stylingblock-content-wrapper camarker-inner">
                                                                                                                        <div style="text-align: center;    margin-bottom: -25px;" class="redes-sociais">
                                                                                                                           <br>
                                                                                                                           <a target="_blank" class="link" href="https://instagram.com/lojastorra?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=redesocial_instagran" style="text-decoration: none;">
                                                                                                                              <img alt="" data-assetid="27994" height="23" src="http://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/1/logo_insta_rodape.png" style="padding: 0px; text-align: center; height: 23px; width: 24px; border: 0px;" width="24">
                                                                                                                           </a>
                                                                                                                           &nbsp;
                                                                                                                           &nbsp;
                                                                                                                           <a target="_blank" class="link"  href="https://www.facebook.com/LojasTorra?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=redesocial_facebook" style="text-decoration: none;">
                                                                                                                              <img alt="" data-assetid="27995" height="23" src="http://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/1/logo_face_rodape.png" style="padding: 0px; text-align: center; border: 0px solid transparent; height: 23px; width: 22px;" width="22">
                                                                                                                           </a>
                                                                                                                           &nbsp;
                                                                                                                           &nbsp;
                                                                                                                           <a target="_blank" class="link"  href="https://www.youtube.com/lojastorra?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=redesocial_youtube" style="text-decoration: none;">
                                                                                                                              <img alt="" data-assetid="27996" height="21" src="http://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/1/logo_youtube_rodape.png" style="padding: 0px; text-align: center; border: 0px solid transparent; height: 21px; width: 29px;" width="29">
                                                                                                                           </a>
                                                                                                                           &nbsp;
                                                                                                                           &nbsp;
                                                                                                                           <a target="_blank" class="link" href="https://www.linkedin.com/company/lojastorra?utm_source=salesforce&utm_medium=email&utm_campaign=torra_1B_0301_1&utm_content=redesocial_linkedin" style="text-decoration: none;">
                                                                                                                              <img alt="" data-assetid="27996" height="23" src="http://image.news.lojastorra.com.br/lib/fe43157175640478751772/m/1/logo_linkedin_rodape.png" style="padding: 0px; text-align: center; border: 0px solid transparent; height: 23px; width: 23px;" width="23">
                                                                                                                           </a>
                                                                                                                           <br>

                                                                                                                           &nbsp;
                                                                                                                        </div>
                                                                                                                     </td>
                                                                                                                  </tr>
                                                                                                               </table>
                                                                                                               <table cellpadding="0" cellspacing="0" width="100%" style="min-width: 100%; " class="stylingblock-content-wrapper">
                                                                                                                  <tr>
                                                                                                                     <td class="stylingblock-content-wrapper camarker-inner">
                                                                                                                        <p style="text-align: center; line-height: 115%;">
                                                                                                                           <span style="font-size:12px;     color: #FFF;"><span style="font-family:sofia-Pro,Arial,Helvetica,sans-serif;"><b>Central de Relacionamento Cart&atilde;o Torra&nbsp;</b><br>
                                                                                                                           Capitais e regi&otilde;es metropolitanas: 4020 9766&nbsp;<br>
                                                                                                                           Demais localidaes: 0800-60-86772</span></span>
                                                                                                                        </p>
                                                                                                                     </td>
                                                                                                                  </tr>
                                                                                                               </table>
                                                                                                            </td>
                                                                                                         </tr>
                                                                                                      </table>
                                                                                                   </td>
                                                                                                </tr>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </table>
                                                                                    <table cellpadding="0" cellspacing="0" width="100%" class="stylingblock-content-wrapper" style="max-width: 650px; margin: auto;  margin-top: -1px;">
                                                                                       <tr>
                                                                                          <td class="stylingblock-content-margin-cell" style="">
                                                                                             <table cellpadding="0" cellspacing="0" width="100%" style="background-color: #37375b; min-width: 100%; " class="stylingblock-content-wrapper">
                                                                                                <tr>
                                                                                                   <td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
                                                                                                      &nbsp;
                                                                                                      <div style="    margin-left: 2%;
    margin-right: 2%;">
                                                                                                         <span style="font-size:11px;"><span style="font-family:Arial,Helvetica,sans-serif;"><span style="color:#fff;">
                                                                                                         
                                                                                                            *Todas as condições do Cartão Torra estão sujeitas a aprovação de crédito. Em todas as compras realizadas com o Cartão Torra, independentemente do nº de parcelas, haverá incidência, em cada parcela, do Serviço de Processamento de Transações. Os planos de pagamento para compras realizadas nas lojas físicas são de 1 a 5 vezes sem juros e de 8 a 9 vezes fixas com juros, os planos com juros poderão ter incidência de IOF. Os planos de pagamento para as compras realizadas na loja virtual (www.lojastorra.com.br) ou App Torra são de até 10 vezes sem juros. Verifique o seu limite disponível e as condições gerais em uma de nossas lojas. Ofertas válidas até 31/01/2022 para compras realizadas no site ou app Torra ou enquanto durarem os estoques promocionais. Todas as condições estão sujeitas a alteração sem aviso prévio.
                                                                                                            


                                                                                                        </span></span></span>
                                                                                                      </div>
                                                                                                      <div style="text-align: justify;">
                                                                                                         &nbsp;
                                                                                                      </div>
                                                                                                   </td>
                                                                                                </tr>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </table>


                                                                                    <table cellpadding="0" cellspacing="0" width="100%" class="stylingblock-content-wrapper" style="max-width: 650px; margin: auto; margin-top: -1px;">
                                                                                       <tr>
                                                                                          <td class="stylingblock-content-margin-cell" style="">
                                                                                             <table cellpadding="0" cellspacing="0" width="100%" style="    min-height: 5px;background-color: #ff5101; min-width: 100%; " class="stylingblock-content-wrapper">
                                                                                                <tr>
                                                                                                   <td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
                                                                                                      
                                                                                                      <div style="    margin-left: 2%;margin-right: 2%;">
                                                                                                         <span style="font-size:11px;"><span style="font-family:Arial,Helvetica,sans-serif;"><span style="color:#fff;">
                                                                                                         
                                                                                                            </span></span></span>
                                                                                                      </div>
                                                                                                      
                                                                                                   </td>
                                                                                                </tr>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </table>





                                                                                    <table cellpadding="0" cellspacing="0" width="100%" class="stylingblock-content-wrapper" style="min-width: 100%; ">
                                                                                       <tr>
                                                                                          <td class="stylingblock-content-margin-cell" >
                                                                                             <table cellpadding="0" cellspacing="0" width="100%" style="background-color: transparent; min-width: 100%; " class="stylingblock-content-wrapper">
                                                                                                <tr>
                                                                                                   <td style="padding: 0px; " class="stylingblock-content-wrapper camarker-inner">
                                                                                                      <div style="line-height: 100%; text-align: center;">
                                                                                                         <span style="color:#464f6d;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:10px;">Enviado por <b>Lojas Torra</b><br>
                                                                                                         Magazine Torra Torra Ltda. | Av. Paulista, 417 | Bela Vista - S&atilde;o Paulo - SP | CEP 01311-000<br>
                                                                                                         Caso n&atilde;o queira mais receber nossos emails, </span></span></span><span style="color:#A9A9A9;"><span style="font-family:arial,helvetica,sans-serif;"><span style="font-size:10px;"><a alias="remova aqui." conversion="false" data-linkto="other" target="_blank" href="%%subscription_center_url%%" style="color:#808080;text-decoration:none;" title="remova aqui.">remova aqui.</a></span></span></span><br>
                                                                                                         &nbsp;
                                                                                                      </div>
                                                                                                   </td>
                                                                                                </tr>
                                                                                             </table>
                                                                                          </td>
                                                                                       </tr>
                                                                                    </table>
                                                                                 </td>
                                                                              </tr>
                                                                           </table>
                                                                        </td>
                                                                     </tr>
                                                                  </tbody>
                                                               </table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </td>
                                             </tr>
                                             
                                          </table>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                     </td>
                  </tr>
               </table>
            </td>
         </tr>
         <tr>
            <td valign="top">
               <custom type="footer" />
            </td>
         </tr>
      </table>
   </body>
</html>

<? }
	else
	{
?>
<form method="post" action="">
	<label>URL</label>
   TESTE 2
	<input type="text" name="iURL">
	<input type="submit" name="ENVIAR">
</form>
<?}?>
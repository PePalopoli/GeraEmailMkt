<?php

if($_POST)
{
$urls = explode("/p", $_POST["iURL"]);
die(var_dump($urls));
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





























// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
// // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Host: graph.facebook.com'));
// $output = curl_exec($ch);
// curl_close($ch); 

// $pos_ini_image = strpos($output,"<meta property=\"og:image\" content=\"");
// $head_img = substr($output, $pos_ini_image+35);
// $pos_fim_image = strpos($head_img,"\" />");
// // die(var_dump($pos_fim_image));
// $image = substr($head_img, 0,$pos_fim_image);
// $url_image = $image;
// // die(var_dump($image));






// $pos_ini_name = strpos($output,"<div class=\"fn productName  ");
// $head = substr($output, $pos_ini_name);

// $pos_ini2_name = strpos($head,"\">");
// $pos_fim_name = strpos($head,"</div>");
// $comprimnto_name = ($pos_fim_name-2) - $pos_ini2_name;

// $name = substr($head, $pos_ini2_name+2,$comprimnto_name);

// // die(var_dump($head));
// // $pos_ini_preco = strpos($head,"___rc-p-dv-id\" type=\"hidden\" value=\"");
// $pos_ini_preco = strpos($head,"<input")+101;
// // die(var_dump($pos_ini_preco));
// $head_preco = substr($head, $pos_ini_preco);
// $pos_fim_preco = strpos($head_preco,"\" />");
// // $comprimnto_preco = ($pos_fim_preco-2) - $pos_ini_preco;

// // die(var_dump($head_preco));

// $preco = substr($head_preco, 0,$pos_fim_preco);


// $preco_exibir = $preco;
// $name_exibir = $name;





?>



<? }
	else
	{
?>
<form method="post" action="">
	<label>URL</label>	
   <textarea id="iURL" name="iURL"
          rows="12" cols="50"></textarea>
	<input type="submit" name="ENVIAR">
</form>
<?}?>
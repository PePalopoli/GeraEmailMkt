<?



	function getProduto($url,&$preco_exibir,&$name_exibir,&$url_image,&$id_produto)
	{
			// var_dump($url);

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

			$id_produto = str_replace("https://torratorra.vteximg.com.br/arquivos/ids/", "", $image);
			$explod_id = explode("-400-400", $id_produto);
			$id_produto = $explod_id[0];






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

			return true;
	}





	function sanitizeString($str) {
	    $str = preg_replace('/[áàãâä]/ui', 'a', $str);
	    $str = preg_replace('/[éèêë]/ui', 'e', $str);
	    $str = preg_replace('/[íìîï]/ui', 'i', $str);
	    $str = preg_replace('/[óòõôö]/ui', 'o', $str);
	    $str = preg_replace('/[úùûü]/ui', 'u', $str);
	    $str = preg_replace('/[ç]/ui', 'c', $str);
	    // $str = preg_replace('/[,(),;:|!"#$%&/=?~^><ªº-]/', '_', $str);
	    $str = preg_replace('/[^a-z0-9]/i', '_', $str);
	    $str = preg_replace('/_+/', '_', $str); // ideia do Bacco :)
	    return $str;
	}

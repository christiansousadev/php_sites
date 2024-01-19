<?php

Class model_galeria_imagem extends model{

  ///////////////////////////////////////////////////////////////////////////////////
  //carrega todas as imagens de todas as galerias de uma categoria
  public function imagens_categoria($codigo){
    
    $imagens = array();

    $conexao = new mysql();
    $coisas_galeria = $conexao->Executar("SELECT codigo FROM galeriafoto WHERE grupo='$codigo' ORDER BY data desc");
    while($data_galeria = $coisas_galeria->fetch_object()){
      
      $conexao = new mysql();
      $coisas_ordem = $conexao->Executar("SELECT data FROM galeriafoto_imagem_ordem WHERE codigo='$data_galeria->codigo' ORDER BY id desc limit 1");
      $data_ordem = $coisas_ordem->fetch_object();
      
      if(isset($data_ordem->data)){

        $order = explode(',', $data_ordem->data);
              
        $n = 0;
        foreach($order as $key => $value){
                  
          $conexao = new mysql();
          $coisas_img = $conexao->Executar("SELECT imagem FROM galeriafoto_imagem WHERE id='$value' ");
          $data_img = $coisas_img->fetch_object();

          if(isset($data_img->imagem)){
                    
            $conexao = new mysql();
            $coisas_leg = $conexao->Executar("SELECT * FROM galeriafoto_imagem_legenda WHERE id_img='$value' ");
            $data_leg = $coisas_leg->fetch_object();

            if(isset($data_leg->legenda)){
              $legenda = $data_leg->legenda;
            } else {
              $legenda = "";
            }

            $imagens[$n]['imagem_g'] = PASTA_CLIENTE.'img_galeriafoto_g/'.$data_img->imagem;
            $imagens[$n]['imagem_p'] = PASTA_CLIENTE.'img_galeriafoto_p/'.$data_img->imagem;
            $imagens[$n]['legenda'] = $legenda;

          $n++;
          }

        }

      }

    }

    return $imagens;
  }


}
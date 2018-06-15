<div class="container">
    <div class="row">
      <?php
      $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]";
      
      $content = file_get_contents("{$url}/view/api/listar.php");
      $result  = json_decode($content, TRUE);
      
      if(is_array($result) && count($result)>0) {
        foreach ($result as $r) { 
          $valor = 'R$ '.number_format($r['valor'], 2, ',', '.');
          $id = strtolower(str_replace(' ','-',$r['nome']));
      ?>
      
          <div class="col-md-4 mt-5 text-center" id="<?= $id; ?>">
            <h1><?= $r['nome']; ?></h1>
            <div class="bg-danger p-3">
              <h2><?= $r['down']; ?></h2>
              <h3>mega</h3>
              <span class="descricao">
                <i class="fa fa-arrow-circle-down"></i> Download: <?= $r['down']; ?>M | 
                <i class="fa fa-arrow-circle-up"></i> Upload: <?= $r['up']; ?>M</span>
              <span class="valor text-warning"><?= $valor; ?></span>
              <button class="btn btn-block btn-warning mt-4"><i class="fa fa-thumbs-up"></i> ASSINE JÁ</button>
            </div>
          </div>
      
        <?php
          
        }
      }

      ?>
      
    </div>
  </div>
<?php include "header.php"; ?>

<div class="container mt-4">

<h1 class="text-center">Escola Estadual Presidente Dutra</h1>
<p class="lead text-center">
A Escola Presidente Dutra (EEPD) foi fundada há décadas com a missão de formar jovens 
através da educação integral, oferecendo cursos técnicos e propedêuticos. Ao longo dos anos, 
a escola se tornou referência em Belo Horizonte pela qualidade de ensino e pela formação cidadã.
</p>

<hr>

<h2 class="text-center">Galeria de Imagens</h2>

<?php
// ---------------- GERAR IMAGENS ALEATÓRIAS ----------------
// Coloque suas imagens (8 arquivos) na pasta /img/
// Edite os nomes conforme suas imagens reais
$imagens = [
    "img/Ds.jpg",
    "img/Eletro.jpg",
    "img/Ener.jpg",
    "img/Fab.jpg",
    "img/Info.jpg",
    "img/Logi.jpg",
    "img/Prop.jpg",
    "img/Seg.jpg"
];

// Embaralha a ordem das imagens
shuffle($imagens);
// ----------------------------------------------------------
?>

<!-- CARROSSEL -->
<div id="carouselRandom" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">

  <div class="carousel-inner">
    <?php
    $ativo = true;
    foreach($imagens as $img){
        echo '<div class="carousel-item '.($ativo ? "active" : "").'">
                <img src="'.$img.'" class="d-block w-100" alt="Imagem">
              </div>';
        $ativo = false;
    }
    ?>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselRandom" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselRandom" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

</div>

<?php include "footer.php"; ?>

<?php 
include "header.php"; 
include "conectar.php"; 


?>

<div class="container mt-4">
    <h1>Professores</h1>
    <p>Aqui futuramente você poderá cadastrar e listar professores.</p>

    <?php
    // ===============================
    // LISTAR PROFESSORES DO BANCO (AJUSTADO PARA O BANCO eepd)
    // ===============================

    /*
    $sql = "SELECT * FROM professores";
    $res = $con->query($sql);

    while($p = $res->fetch_assoc()){
        echo $p['nome'];
    }
    */
    ?>

    
    <!-- ====== TEXTO SOBRE OS PROFESSORES ====== -->
    <h2 class="mt-4">Excelência no Corpo Docente</h2>

    <p>
        Nosso corpo docente é formado por profissionais altamente qualificados, apaixonados por ensinar e comprometidos com a formação integral dos alunos. Cada professor traz para a sala de aula não apenas vasta experiência acadêmica, mas também vivência prática no mercado de trabalho, garantindo que o aprendizado seja atual, relevante e conectado às demandas reais das empresas e da sociedade.
    </p>

    <p>
        Nos cursos de <strong>Desenvolvimento de Sistemas</strong> e <strong>Informática</strong>, nossos docentes são especialistas em tecnologia, programação, redes e inovação digital. Eles acompanham de perto as transformações do setor e capacitam os estudantes para atuarem com segurança em um mercado dinâmico e em constante evolução.
    </p>

    <p>
        Já os professores dos cursos de <strong>Logística</strong> e <strong>Fabricação Mecânica</strong> possuem sólida experiência industrial, domínio de processos produtivos e visão estratégica das cadeias de suprimento. Com isso, os alunos recebem uma formação técnica precisa, moderna e totalmente alinhada às exigências das grandes indústrias e centros logísticos.
    </p>

    <p>
        No curso de <strong>Energia Renovável</strong>, contamos com profissionais que atuam diretamente na pesquisa e na implantação de soluções sustentáveis. Eles são referência na área e preparam os estudantes para atuarem em um segmento que cresce rapidamente e que tem grande impacto no futuro do planeta.
    </p>

    <p>
        Os docentes de <strong>Segurança do Trabalho</strong> são extremamente preparados e trazem consigo vasta experiência em ambientes industriais, normas regulamentadoras e prevenção de acidentes. Com uma abordagem prática e rigorosa, formam profissionais capazes de proteger vidas e promover ambientes de trabalho mais seguros.
    </p>

    <p>
        No setor de <strong>Propedêutica</strong>, nossos professores são reconhecidos pela didática exemplar e pela capacidade de desenvolver o raciocínio crítico dos estudantes, oferecendo uma base sólida para o aprendizado técnico e profissional.
    </p>

    <p>
        Por fim, os profissionais da área de <strong>Eletrônica</strong> são especialistas que dominam desde circuitos básicos até sistemas avançados. Eles guiam os alunos na compreensão da tecnologia que move o mundo moderno, estimulando inovação, criatividade e pensamento técnico de alto nível.
    </p>

    <p>
        <strong>Nosso compromisso é formar profissionais competentes, confiantes e preparados para transformar o futuro.</strong> Com professores que são referência em suas áreas, cada aluno recebe não apenas conhecimento, mas também inspiração para alcançar seus maiores sonhos.
    </p>
    <!-- ====== FIM DO TEXTO ====== -->

</div>

<?php include "footer.php"; ?>

<?php 
include "header.php"; 
include "conectar.php"; 

// GARANTE QUE O BANCO USADO É O eepd
mysqli_select_db($con, "eepd");
?>

<div class="container mt-4">
    <h1>Área dos Alunos</h1>
    <p>Aqui você poderá listar alunos, cadastrar e editar futuramente.</p>

    <?php
   
    ?>


    <!-- ====== TEXTO SOBRE OS ALUNOS ====== -->
    <h2 class="mt-4">Nossos Alunos: Orgulho da Presidente Dutra</h2>

    <p>
        Na Escola Estadual Presidente Dutra, em Belo Horizonte, acreditamos que o aluno é o centro de tudo. 
        Cada estudante que passa por aqui recebe não apenas uma educação de qualidade, mas uma formação completa, 
        que une teoria, prática e valores humanos. Nosso compromisso é preparar jovens e adultos para os desafios 
        da vida, para o mercado de trabalho e para o exercício pleno da cidadania.
    </p>

    <p>
        Os alunos contam com um ambiente estruturado e acolhedor, equipado com laboratórios de informática, 
        laboratório de ciências, biblioteca, quadra de esportes coberta e descoberta, refeitório e áreas de estudo — 
        tudo planejado para proporcionar as melhores condições de aprendizagem e desenvolvimento. 
    </p>

    <p>
        A escola oferece Ensino Médio e EJA, atendendo diferentes perfis de estudantes e garantindo que cada um 
        tenha a oportunidade de prosseguir seus estudos de forma flexível, respeitando suas necessidades e 
        projetos de vida.
    </p>

    <p>
        Ao longo dos anos, nossos alunos têm se destacado em avaliações escolares, projetos, atividades culturais 
        e esportivas. Muitos alcançam excelentes resultados em provas, processos seletivos e concursos, mostrando 
        que a combinação de esforço, apoio pedagógico e dedicação gera frutos reais e transforma vidas.
    </p>

    <p>
        Aqui, acreditamos que formação vai muito além das salas de aula. Estimulamos o pensamento crítico, 
        a criatividade, a responsabilidade e o trabalho em equipe. Nossos estudantes saem preparados para 
        enfrentar o futuro com confiança, iniciativa e determinação.
    </p>

    <p>
        <strong>
            Se você busca uma escola que realmente acredita no potencial dos seus alunos e trabalha todos os dias 
            para que eles alcancem seus sonhos, a Presidente Dutra é o lugar certo. Aqui, cada conquista do aluno 
            é uma vitória de toda a comunidade escolar.
        </strong>
    </p>
    <!-- ====== FIM DO TEXTO SOBRE ALUNOS ====== -->

</div>

<?php include "footer.php"; ?>

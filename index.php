<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu curiculo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php
        $nomeCompleto = "Lucas Pereira de Souza";
        $idade = 23;
        $fotoDePerfil = "imagens/perfil.jpg";
        ?>
        <div class="perfil">
            <img src="<?php echo $fotoDePerfil; ?>" alt="Foto de perfil">
            <h1><?php echo $nomeCompleto; ?></h1>
            <p>Idade: <?php echo $idade; ?></p>
        </div>

    </header>

    <section id="experiencia">
        <?php
        $experiencias = [
            [
                "empresa" => "",
                "cargo" => "",
                "periodo" => "",
                "descricao" => ""
            ],
        ];
        ?>
        <h2>Experiência Profissional</h2>
        <?php if (!empty($experiencias)): ?>
            <ul>
                <?php foreach ($experiencias as $experiencia): ?>
                    <li>
                        <h3><?php echo $experiencia['cargo']; ?></h3>
                        <h4><?php echo $experiencia['empresa']; ?></h4>
                        <p class="perildo"><?php echo $experiencia['periodo']; ?></p>
                        <p><?php echo $experiencia['descricao']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php else: ?>
                <p>sem experiencias Profissionais para mostar </p>
        <?php endif; ?>
    </section>

    <section id="cursos">
        <?php
            $cursos = [
                [
                    "nome" => "",
                    "instituicao"=> "",
                    "perildo"=> "",
                ],
            ];
        ?>
        <h2>Cursos e Formações</h2>
        <?php if(!empty($cursos)): ?>
            <ul>
                <?php foreach ($cursos as $curso): ?>
                    <li>
                        <h3><?php $curso['nome']; ?></h3>
                        <h4><?php echo $curso['instituicao']; ?></h4>
                        <p class="perildo"><?php echo $curso['perildo']; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php else: ?>
                <p>nem um cruso ou formaçao para mostar</p>
            <?php endif ; ?>
    </section>

    <section id="habilidades">
        <?php 
            $habilidades = [
                "PHP" => 0,
                "HTML" => 0,
                "CSS"=> 0,
                "JAVA SCRIPT"=> 0,
                "BANCO DE DADOS" => 0,
            ];
            $hobbies = [
                "HOBBY1"=> 0,
            ];

        ?>
        <h2>Habilidades</h2>
            <?php if(!empty($habilidades)): ?>
                <ul>
                    <?php foreach ($habilidades as $habilidade => $nivel): ?>
                        <li>
                            <?php echo $habilidade; ?>
                            <div class="barra-nivel">
                                <?php for($i = 0; $i < $nivel; $i++): ?>
                                    <samp class="preenchido"></samp>
                                <?php endfor; ?>

                                <?php for($i = $nivel; $i < 10; $i++): ?>
                                    <samp></samp>
                                <?php endfor; ?>

                                (<?php echo $nivel; ?>/10)
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>


        <h3>Hobbies</h3>
            <?php if(!empty($hobbies)): ?>
                <ul>
                    <?php foreach ($hobbies as $hobby => $interesse):?>
                        <li>
                            <?php echo $hobby; ?>
                            <div class="barra-nivel">
                                <?php for ($i=0; $i < $interesse ; $i++): ?>
                                    <span class="preenchido hobby"></span>
                                <?php endfor ?>

                                <?php for ($i= $interesse; $i < 10 ; $i++): ?>
                                    <span></span>
                                <?php endfor ?>
                                (<?php echo $interesse; ?>/10)

                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>


    </section>

    <footer>
        <p>₢ <?php echo date("Y") ?> Lucas</p>
    </footer>
</body>

</html>
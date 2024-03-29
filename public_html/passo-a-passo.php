<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise de Riscos</title>

    <link rel="stylesheet" href="./src/styles/globalStyle.css">
    <link rel="stylesheet" href="./src/styles/passo-a-passo.css">
</head>

<body>
    <div class="container">
        <div class="layout">
            <?php include('./src/components/header.html'); ?>
            <link rel="stylesheet" href="./src/styles/header.css">
            <?php include('./src/components/back-button.html'); ?>

            <div class="big-title">
                <h2 class="main-title">PASSO A PASSO</h2>
            </div>
            <span class='subtitle green-text-mark'>Siga este guia para desenvolver sua propria Análise de Riscos</span>
            <div class="horizontal-divider"></div>
            <div class="main-content">
                <div class="articles">
                    <div class="action-buttons">
                        <p class="align-left">UTILIZE NOSSA <strong style="color:var(--primary-color);">PLANILHA MODELO</strong> PARA SEGUIR AS INSTRUÇÕES:
                        </p>
                        <a href="./src/downloads/MODELO TECSEG - AR, PLANO DE AÇÃO.xlsx" class="modelo-excel">
                            <img src="./src/images/excel_icon.png" alt="">
                            <span>Baixe Nosso Modelo</span>
                        </a>
                    </div>
                    <div class="article">
                        <!-- <img src="./src/images/passo-a-passo2-removebg-preview.png" alt=""> -->
                        <dl class="default-text">
                            <dt>1º passo:</dt>
                            <dd>Avalie o local, situação, função ou atividade que pretende desenvolver a Análise de
                                Riscos e localize os riscos presentes.</dd>
                            <div class="list-image">
                                <img src="./src/images/tutorial/1passo.png" alt="" srcset="">
                            </div>
                            <dt>2º passo:</dt>
                            <dd>Aprofunde sua avaliação e descubra onde está a fonte potencial do risco, ou seja, o
                                perigo.</dd>
                            <div class="list-image">
                                <img src="./src/images/tutorial/2passo.png" alt="" srcset="">
                            </div>
                            <dt>3º passo:</dt>
                            <dd>Classifique os riscos (físico, químico, biológico, ergonômico e de acidentes)</dd>
                            <div class="list-image">
                                <img src="./src/images/tutorial/3passo.png" alt="" srcset="">
                            </div>
                            <dt>4º passo:</dt>
                            <dd>utilize a Matriz de riscos para calcular a probabilidade de acontecer o Risco e sua
                                severidade, caso ocorra.</dd>
                            <div class="list-image">
                                <img src="./src/images/tutorial/4passo.png" alt="" srcset="">
                            </div>
                        </dl>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
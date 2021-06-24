<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/index/account.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    
    <title>Account</title>
</head>

<body>

    <?php
    include "../view/header.php";
    ?>

    <section>
        <div class="section-background">
            <div class="header-sec">
                <div class="photo-background">
                    <div class="photo">
                        <div class="form-photo">
                            <img src="/public/img/user.png" alt="">
                        </div>
                    </div>
                    <div class="name">
                        <span>Nome</span>
                    </div>
                </div>
                <div class="info-background">
                    <div class="item-name">
                        <div class="name-primary">
                            <span>Reputação:</span>
                        </div>
                        <div class="name-secondary">
                            <span>Tempo:</span>
                        </div>
                        <div class="name-primary">
                            <span>Dinheiro:</span>
                        </div>
                        <div class="name-secondary">
                            <span>DDOS:</span>
                        </div>
                        <div class="name-primary">
                            <span>Bitcoin:</span>
                        </div>
                        <div class="name-secondary">
                            <span>Servidor:</span>
                        </div>
                    </div>
                    <div class="item-value">
                        <div class="value-primary">
                            <span>521</span>
                        </div>
                        <div class="value-secondary">
                            <span>15h</span>
                        </div>
                        <div class="value-primary">
                            <span>$15210,00</span>
                        </div>
                        <div class="value-secondary">
                            <span>150GB</span>
                        </div>
                        <div class="value-primary">
                            <span>1.15412315</span>
                        </div>
                        <div class="value-secondary">
                            <span>3</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-sec">
                <?php
                for ($i = 0; $i < 2; $i++) :
                ?>
                    <div class="VPS padding">
                        <div class="iccon">
                            <span class="iconify" data-icon="bx:bxs-server" data-inline="false"></span>
                        </div>
                        <div class="info">
                            <div class="info-title">
                                <span>1.1.1.1</span>
                            </div>
                            <div class="info-state">
                                <span class="state">Online</span>
                            </div>
                        </div>
                        <div class="date">
                            <div class="date-title">
                                <span>Vencimento</span>
                            </div>
                            <div class="date-info">
                                <span>10/06/2021</span>
                            </div>
                        </div>
                        <div class="IP">
                            <span>Alterar IP</span>
                        </div>
                        <div class="gerency">
                            <span>ENTRAR</span>
                        </div>
                        <div class="IP-gerency">
                            <div class="ip-number">
                                <span>1.1.1.1</span>
                            </div>
                            <div class="ip-price">
                                <span>500$</span>
                            </div>
                            <div class="ip-time">
                                <span>10m</span>
                            </div>
                            <div class="ip-trocarte">
                                <span>Trocar</span>
                            </div>
                        </div>
                    </div>
                <?php
                endfor;
                ?>
            </div>
        </div>
    </section>

    <?php
    include "../view/footer.php";
    ?>

</body>
<script src="/public/js/accounts.js"></script>
</html>
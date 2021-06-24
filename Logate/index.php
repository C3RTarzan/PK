<!DOCTYPE html>
<html lang="bt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/index/logate.css">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <title>Logate</title>
</head>

<body>
    <?php
        include "../view/header.php";
    ?>
    <section>
        <div class="logate">
            <div class="login">
                <div class="login-title">
                    <span>Logar</span>
                </div>
                <form action="" method="post">
                    <div class="input">
                        <input type="text" placeholder="User">
                        <input type="password" placeholder="Senha">
                    </div>
                    <div class="button">
                        <div class="button-register">
                            <span class="button-display">Registro</span>
                        </div>
                        <div class="button-login">
                            <button>Logar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="register">
                <div class="register-title">
                    <span>Registrar</span>
                </div>
                <form action="" method="post">
                    <div class="input">
                        <input type="email" placeholder="Email" autocomplete="email">
                        <input type="text" placeholder="User" autocomplete="username">
                        <input type="password" placeholder="Senha" autocomplete="new-password">
                        <input type="password" placeholder="Repetir Senhas" autocomplete="new-password">
                    </div>
                    <div class="button">
                        <div class="button-login">
                            <span class="button-display">Logar</span>
                        </div>
                        <div class="button-register">
                            <button>Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php
        include "../view/footer.php";
    ?>
</body>
<script src="/public/js/index.js"></script>
</html>
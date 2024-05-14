<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $defaultCssPath ?>">
    <title>Login</title>
</head>
<style>
    .main {
        height: 85%;
        width: 70%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .header {
        /* padding-left: 20%;
        padding-right: 20%; */
        text-align: center;
        color: white;
        height: 20%;
    }

    .form {
        height: 75%;
        background-color: #FEF;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        padding: 4%;
        width: 50%;
    }

    .form-row {
        height: 25%;
        display: flex;
        justify-content: center;
        align-self: center;
        width: 40%;
    }

    .input-group {
        display: flex;
        flex-direction: column;
        height: 100%;
    }
</style>

<body>
    <div class="main">
        <header class="header">
            <h1>Gerencie suas despesas de eletricidade e transforme seu consumo!</h1>
        </header>
        <form action="" class="form">
            <div class="form-row">
                <div class="input-group">
                    <label for="name">Email:</label>
                    <input type="email" id="name" required name="name">
                </div>
            </div>
            <div class="form-row">
                <div class="input-group">
                    <label for="name">Senha:</label>
                    <input type="password" id="name" required name="name">
                </div>
            </div>
            <div class="form-row" style="align-self: start;">
                <a href="?route=register" >Criar uma conta</a>
            </div>
            <div class="form-row" style="align-self: center;">
                <button class="btn-success">
                    Entrar
                </button>
            </div>
            
        </form>
    </div>
</body>

</html>
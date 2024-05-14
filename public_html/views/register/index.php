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
    }

    .form-row {
        height: 25%;
        display: flex;
    }

    .input-group {
        display: flex;
        flex-direction: column;
        width: 50%;
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
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="input-group">
                    <label for="name">Sobrenome:</label>
                    <input type="text" id="name" name="name">
                </div>
            </div>
            <div class="form-row">
                <div class="input-group">
                    <label for="name">Email:</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="input-group">
                    <label for="name">Cidade:</label>
                    <input type="text" id="name" name="name">
                </div>
            </div>
            <div class="form-row">
                <div class="input-group">
                    <label for="name">Senha:</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="input-group">
                    <label for="name">Confirmação da Senha:</label>
                    <input type="text" id="name" name="name">
                </div>
            </div>
            <div class="form-row" style="align-self: end;">
                <button class="btn-success">
                    Cadastrar
                </button>
            </div>
            
        </form>
    </div>
</body>

</html>
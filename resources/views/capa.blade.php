<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bowizo - Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #000; /* Fundo preto */
            color: #fff; /* Texto branco */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            display: flex;
            max-width: 900px;
            width: 100%;
            background: #1a1a1a; /* Preto suave para contraste */
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        .form-section {
            flex: 1;
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-section h1 {
            font-size: 36px;
            font-weight: bold;
            color: #00ff00; /* Verde */
            margin-bottom: 20px;
        }

        .form-section p {
            margin-bottom: 30px;
            font-size: 16px;
            color: #aaa;
        }

        .cada {
            margin-bottom: 20px;
        }

        .cada label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #fff;
        }

        .cada input {
            width: 100%;
            padding: 12px;
            font-size: 14px;
            border: 1px solid #333;
            border-radius: 8px;
            background: #1a1a1a;
            color: #fff;
            outline: none;
        }

        .cada input:focus {
            border-color: #00ff00;
            box-shadow: 0 0 5px rgba(0, 255, 0, 0.8);
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #00ff00;
            color: #000;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #00cc00;
        }

        .links {
            text-align: center;
            margin-top: 20px;
        }

        .links a {
            color: #00ff00;
            text-decoration: none;
            font-size: 14px;
        }

        .links a:hover {
            text-decoration: underline;
        }

        .logo-section {
            flex: 1;
            background: url({{asset('asset/logo12.png')}}) no-repeat center center; /* Substituir com o caminho do logo */
            background-size: contain;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column-reverse;
            }

            .logo-section {
                height: 150px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Seção do logo -->
        <div class="logo-section">
        </div>
        <!-- Seção do formulário -->
        <div class="form-section">
            <h1>Bem-vindo ao Bowizo</h1>
            <p>Conecte-se com seus amigos e explore o melhor conteúdo na Bowizo.</p>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="cada">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Digite seu email" required>
                </div>
                <div class="cada">
                    <label for="password">Senha</label>
                    <input type="password" name="password" placeholder="Digite sua senha" required>
                </div>
                <button type="submit">Entrar</button>
            </form>
            <div class="links">
                <p>Ainda não tem uma conta?</p>
                <a href="register">Registre-se</a>
            </div>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Loja de Poções – Baldur's Gate 3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: url('https://i.imgur.com/6hR1Yk2.jpeg'); /* textura BG3 */
            background-size: cover;
            background-attachment: fixed;
            color: #f2e6d8;
            font-family: 'Georgia', serif;
        }

        .bg-wood {
            background: rgba(50, 30, 20, 0.85);
            border: 2px solid #D4AF37;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0px 0px 20px #000;
        }

        .btn-bg3 {
            background: linear-gradient(to bottom, #6b3e14, #3d240c);
            border: 1px solid #D4AF37;
            color: #f8e6c8;
            font-weight: bold;
        }

        .btn-bg3:hover {
            background: linear-gradient(to bottom, #8c5320, #4e3010);
            color: white;
        }

        .item-card {
            background: rgba(80, 40, 20, 0.7);
            border: 2px solid #D4AF37;
            border-radius: 10px;
            padding: 15px;
            transition: 0.3s;
        }

        .item-card:hover {
            transform: scale(1.03);
            box-shadow: 0 0 12px #D4AF37;
        }

        .item-img {
            border: 2px solid #D4AF37;
            border-radius: 8px;
        }

        h1, h2, h3 {
            text-shadow: 2px 2px 8px #000;
        }
    </style>
</head>

<body>
    <div class="container py-4">
        <div class="bg-wood">
            @yield('conteudo')
        </div>
    </div>
</body>
</html>

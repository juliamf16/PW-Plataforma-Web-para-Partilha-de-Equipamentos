<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Partilha de Equipamentos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@600;700&family=Public+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="index.html">Partilha de Equipamentos</a>

        <nav class="main-nav" aria-label="Navegação principal">
            <ul>
                <li><a href="index.html" aria-current="page">Início</a></li>
                <li><a href="equipamentos.html">Equipamentos</a></li>
                <li><a href="reservas.html">Reservas</a></li>
                <li><a href="dashboard.html">Dashboard</a></li>
            </ul>
        </nav>

        <div class="auth">
            <a class="btn btn-ghost" href="login.html">Entrar</a>
            <a class="btn btn-primary" href="registar.html">Registar</a>
        </div>
    </div>
</header>

<main>
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-text">
                <h1>Precisa de um equipamento? Reserve em poucos passos.</h1>
                <p>Consulte o que está disponível, reserve para as datas de que precisa e acompanhe empréstimos e devoluções num só lugar.</p>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="equipamentos.html">Ver equipamentos</a>
                    <a class="btn btn-ghost" href="registar.html">Criar conta</a>
                </div>
            </div>

            <aside class="status-board" aria-label="Exemplo de disponibilidade">
                <h2>Disponível hoje</h2>
                <ul>
                    <li>
                        <span class="item-name">Portátil Dell Latitude</span>
                        <span class="chip chip-free">Livre</span>
                    </li>
                    <li>
                        <span class="item-name">Projetor Epson</span>
                        <span class="chip chip-loan">Emprestado até 02/11</span>
                    </li>
                    <li>
                        <span class="item-name">Câmara Canon EOS</span>
                        <span class="chip chip-free">Livre</span>
                    </li>
                    <li>
                        <span class="item-name">Kit Arduino</span>
                        <span class="chip chip-reserved">Reservado amanhã</span>
                    </li>
                </ul>
            </aside>
        </div>
    </section>

    <section class="steps">
        <div class="container">
            <h2>Como funciona</h2>
            <ol class="steps-list">
                <li>
                    <h3>Pesquise</h3>
                    <p>Procure pelo nome ou categoria e veja logo se o equipamento está livre.</p>
                </li>
                <li>
                    <h3>Reserve</h3>
                    <p>Escolha as datas e confirme a reserva. Pode consultá-la no seu dashboard.</p>
                </li>
                <li>
                    <h3>Devolva</h3>
                    <p>Entregue o equipamento no prazo e o estado fica atualizado para o próximo utilizador.</p>
                </li>
            </ol>
        </div>
    </section>
</main>

<footer class="site-footer">
    <div class="container footer-inner">
        <p>&copy; 2026 Partilha de Equipamentos. Todos os direitos reservados.</p>
        <a href="index.html">Página inicial</a>
    </div>
</footer>

</body>
</html>

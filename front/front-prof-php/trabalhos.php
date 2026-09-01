<?php
$page = 'trabalhos';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhos Orientados - Feira Tecnológica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body data-page="<?php echo $page; ?>">

    <main class="portal">

        <!-- MENU LATERAL -->
        <aside class="sidebar" aria-label="Navegação da área do professor">
            <a class="brand-lockup" href="dashboard.php" aria-label="Feira Tecnológica - página inicial">
                <span class="brand-emblem">MCM</span>
                <span class="brand-copy">
                    <strong>Feira Tecnológica</strong>
                    <span>ETEC Maria Cristina Medeiros</span>
                </span>
            </a>

            <p class="sidebar-label">Área do Professor</p>

            <nav class="side-nav" aria-label="Navegação principal">
                <button type="button" data-page="dashboard.php">
                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                        <path d="M5 4h14v16H5z"></path>
                        <path d="M8 4v4h8V4M8 13l2 2 4-4"></path>
                    </svg>
                    Avaliações Gerais
                </button>

                <button class="active" type="button" data-page="trabalhos.php">
                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                        <path d="M4 5h7v14H4zM13 5h7v14h-7z"></path>
                        <path d="M7 9h1M7 13h1M16 9h1M16 13h1"></path>
                    </svg>
                    Trabalhos Orientados
                </button>

                <button type="button" data-page="avisos.php">
                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                        <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9M10 21h4"></path>
                    </svg>
                    Avisos
                </button>

                <button type="button" data-page="perfil.php">
                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                        <circle cx="12" cy="8" r="4"></circle>
                        <path d="M4.5 21a7.5 7.5 0 0 1 15 0"></path>
                    </svg>
                    Perfil
                </button>
            </nav>

            <p class="sidebar-footer">Feira Tecnológica · 2026</p>
        </aside>

        <!-- CONTEÚDO PRINCIPAL -->
        <section class="content-column">
            <header class="topbar">
                <div>
                    <p class="eyebrow">TRABALHOS ORIENTADOS</p>
                    <h1>Projetos sob orientação</h1>
                    <p>Acompanhe detalhes, estandes e situação das avaliações.</p>
                </div>

                <button class="notification-button" type="button" data-notification="Sem novos avisos." aria-label="Ver avisos">
                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                        <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9M10 21h4"></path>
                    </svg>
                    <i class="notification-dot"></i>
                </button>
            </header>

            <div class="section-heading">
                <h2>Todos os projetos</h2>
                <a class="text-action" href="dashboard.php">Ver resumo</a>
            </div>

            <!-- TABELA RESPONSIVA -->
            <div class="project-list">
                <table class="project-table">
                    <caption class="screen-reader-only">Todos os projetos sob orientação</caption>
                    <thead>
                        <tr>
                            <th>Projeto</th>
                            <th>Curso</th>
                            <th>Turma</th>
                            <th>Estande</th>
                            <th>Status</th>
                            <th>Visualização</th>
                            <th>Edição</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="project-name">Farm Bot</td>
                            <td>Informática para Internet</td>
                            <td>3º</td>
                            <td>A-01</td>
                            <td><span class="status approved">Avaliado</span></td>
                            <td>
                                <a class="icon-button" href="projeto.php?projeto=farm-bot" aria-label="Ver Farm Bot">
                                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                                        <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                                        <circle cx="12" cy="12" r="2.5"></circle>
                                    </svg>
                                </a>
                            </td>
                            <td>
                                <a class="icon-button" href="avaliacao.php?projeto=farm-bot" aria-label="Editar Farm Bot">
                                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                                        <path d="m4 16-.8 4.8L8 20l11.5-11.5a2.1 2.1 0 0 0-3-3L5 17Z"></path>
                                        <path d="m14.5 7.5 2 2"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="project-name">Eco Filter</td>
                            <td>Recursos Humanos</td>
                            <td>2º</td>
                            <td>B-03</td>
                            <td><span class="status approved">Avaliado</span></td>
                            <td>
                                <a class="icon-button" href="projeto.php?projeto=eco-filter" aria-label="Ver Eco Filter">
                                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                                        <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                                        <circle cx="12" cy="12" r="2.5"></circle>
                                    </svg>
                                </a>
                            </td>
                            <td>
                                <a class="icon-button" href="avaliacao.php?projeto=eco-filter" aria-label="Editar Eco Filter">
                                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                                        <path d="m4 16-.8 4.8L8 20l11.5-11.5a2.1 2.1 0 0 0-3-3L5 17Z"></path>
                                        <path d="m14.5 7.5 2 2"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="project-name">App Recicla</td>
                            <td>Logística</td>
                            <td>3º</td>
                            <td>B-07</td>
                            <td><span class="status pending">Pendente</span></td>
                            <td>
                                <a class="icon-button" href="projeto.php?projeto=app-recicla" aria-label="Ver App Recicla">
                                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                                        <path d="M2 12s3.5-6 10-6 10 6 10 6-3.5 6-10 6S2 12 2 12Z"></path>
                                        <circle cx="12" cy="12" r="2.5"></circle>
                                    </svg>
                                </a>
                            </td>
                            <td>
                                <a class="icon-button" href="avaliacao.php?projeto=app-recicla" aria-label="Editar App Recicla">
                                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                                        <path d="m4 16-.8 4.8L8 20l11.5-11.5a2.1 2.1 0 0 0-3-3L5 17Z"></path>
                                        <path d="m14.5 7.5 2 2"></path>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- MENU MOBILE -->
        <nav class="mobile-nav" aria-label="Navegação móvel">
            <button type="button" data-page="dashboard.php">
                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                    <path d="M5 4h14v16H5z"></path>
                    <path d="M8 4v4h8V4M8 13l2 2 4-4"></path>
                </svg>
                <span>Avaliações</span>
            </button>

            <button class="active" type="button" data-page="trabalhos.php">
                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                    <path d="M4 5h7v14H4zM13 5h7v14h-7z"></path>
                </svg>
                <span>Orientados</span>
            </button>

            <button type="button" data-page="perfil.php">
                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                    <circle cx="12" cy="8" r="4"></circle>
                    <path d="M4.5 21a7.5 7.5 0 0 1 15 0"></path>
                </svg>
                <span>Perfil</span>
            </button>
        </nav>

    </main>

    <script src="script.js"></script>
</body>
</html>
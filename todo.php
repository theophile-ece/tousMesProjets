<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO List</title>
    <link rel="stylesheet" href="style/styles.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <header>
        <div class="titre-container">
            <h1>🏉 Au coeur du 14 🏉</h1>
            <img src="image/logo.webp" alt="Logo" class="logo">
        </div>
        <p class="intro">
            Organise tes tâches rugby avec une TODO list interactive.
        </p>
    </header>

    <?php include_once 'menu.php'; ?>
    

    <main class="todo-page">
        <section class="todo-card">
            <h2>Ma liste de tâches</h2>

            <div class="todo-controls">
                <input type="text" id="new-task" placeholder="Ajouter une tâche...">
                <button id="add-task">Ajouter</button>
            </div>

            <div class="todo-search">
                <input type="text" id="search-task" placeholder="Rechercher une tâche...">
            </div>

            <div class="todo-stats">
                <p>Total des missions : <span id="total-tasks">0</span></p>
                <p>À faire : <span id="remaining-tasks">0</span></p>
                <p>Terminées : <span id="done-tasks">0</span></p>
            </div>

            <ul id="task-list" class="task-list"></ul>
        </section>
    </main>

    <footer>
        <p>Site réalisé par Théophile Petit</p>
    </footer>

    <script src="js/todo.js"></script>
    <script src="js/jquery-site.js"></script>
</body>

</html>
<?php
$page = basename($_SERVER['PHP_SELF']);
?>

<nav>
    <div class="menu-burger">☰</div>

    <ul class="menu-navigation">

        <li>
            <a class="<?php if ($page == 'index.php')
                echo 'active'; ?>" href="index.php">
                Accueil
            </a>
        </li>

        <li>
            <a class="<?php if ($page == 'matchs.php')
                echo 'active'; ?>" href="matchs.php">
                Matchs à suivre
            </a>
        </li>

        <li>
            <a class="<?php if ($page == 'equipes.php')
                echo 'active'; ?>" href="equipes.php">
                Grandes équipes
            </a>
        </li>

        <li>
            <a class="<?php if ($page == 'debuter.php')
                echo 'active'; ?>" href="debuter.php">
                Commencer le rugby
            </a>
        </li>

        <li>
            <a class="<?php if ($page == 'todo.php')
                echo 'active'; ?>" href="todo.php">
                TODO List
            </a>
        </li>

        <li>
            <a class="<?php if ($page == 'get_envoie.php')
                echo 'active'; ?>" href="get_envoie.php">
                GET
            </a>
        </li>

        <li>
            <a class="<?php if ($page == 'login.php')
                echo 'active'; ?>" href="login.php">
                Login
            </a>
        </li>

    </ul>
</nav>
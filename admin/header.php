<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .admin-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        height: 100px;
        width: 100%;
        padding: 0 2rem;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: sticky;
        top: 0;
        z-index: 1000;
        display: flex;
        align-items: center;
    }

    .admin-header-container {
        max-width: 1400px;
        margin: 0 auto;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100%;
    }

    .admin-logo {
        font-size: 2rem;
        font-weight: bold;
        letter-spacing: 1px;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        height: 100%;
    }

    .admin-logo::before {
        content: "📊";
        font-size: 2.5rem;
    }

    .admin-nav-menu {
        display: flex;
        list-style: none;
        gap: 1.5rem;
        align-items: center;
        margin: 0;
        padding: 0;
        height: 100%;
    }

    .admin-nav-item {
        position: relative;
        height: 100%;
        display: flex;
        align-items: center;
    }

    .admin-nav-link {
        color: white;
        text-decoration: none;
        font-weight: 500;
        padding: 0.2rem 1.5rem;
        border-radius: 5px;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        height: 100%;
        font-size: 1.1rem;
    }

    .admin-nav-link:hover {
        background-color: rgba(255, 255, 255, 0.2);
        transform: translateY(-2px);
    }

    .admin-nav-link.active {
        background-color: rgba(255, 255, 255, 0.3);
    }

    @media (max-width: 768px) {
        .admin-header {
            height: auto;
            min-height: 40px;
            padding: 1rem;
        }

        .admin-header-container {
            flex-direction: column;
            gap: 1rem;
        }

        .admin-nav-menu {
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            height: auto;
        }

        .admin-nav-item {
            height: auto;
        }

        .admin-nav-link {
            height: auto;
            font-size: 1rem;
        }

        .admin-logo {
            font-size: 1.5rem;
            height: auto;
        }
    }
</style>
<header class="admin-header">
    <div class="admin-header-container">
        <div class="admin-logo">
            Technolab QUIZZ
        </div>
        <nav>
            <ul class="admin-nav-menu">
                <li class="admin-nav-item">
                    <a href="index.php" class="admin-nav-link">Tableau de bord</a>
                </li>
                <li class="admin-nav-item">
                    <a href="scores.php" class="admin-nav-link">Scores</a>
                </li>
                <li class="admin-nav-item">
                    <a href="questionnaire.php" class="admin-nav-link">Questionnaire</a>
                </li>
                <li class="admin-nav-item">
                    <a href="user.php" class="admin-nav-link">User</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
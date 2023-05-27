<header>
    <?php
    $username = $_SESSION["username"];
    echo "<span>Welcome, $username </span>"
    ?>
    <nav>
        <a href="index.php"> Home </a>
        <a href="contact.php"> Contact Us </a>
        <a href="about.php"> About Us </a>
        <form action="header.php" method="post">
            <input class="button-10" href="about.php" type="submit" value="Log out" name="logout">
        </form>
        <?php
        if (isset($_POST["logout"])) {
            unset($_SESSION["username"]);
            unset($_SESSION["password"]);
            session_destroy();
            header("Location: ./login.php");
        }
        ?>
    </nav>
</header>
<style>
    .button-10 {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 6px 14px;
        font-family: -apple-system, BlinkMacSystemFont, 'Roboto', sans-serif;
        border-radius: 6px;
        border: none;
        cursor: pointer;

        color: #fff;
        background: linear-gradient(180deg, #4B91F7 0%, #367AF6 100%);
        background-origin: border-box;
        box-shadow: 0px 0.5px 1.5px rgba(54, 122, 246, 0.25), inset 0px 0.8px 0px -0.25px rgba(255, 255, 255, 0.2);
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .button-10:focus {
        box-shadow: inset 0px 0.8px 0px -0.25px rgba(255, 255, 255, 0.2), 0px 0.5px 1.5px rgba(54, 122, 246, 0.25), 0px 0px 0px 3.5px rgba(58, 108, 217, 0.5);
        outline: 0;
    }

    header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 2rem 3rem 2rem 3rem;
        width: 95%;
        background-color: antiquewhite;
    }

    header span {
        font-size: x-large;
        font-weight: bold;
    }

    nav {
        display: flex;
        gap: 2rem;
        align-items: center;
    }

    a {
        color: black;
        font-size: medium;
        text-decoration: none;
        transition: all 150ms;
    }

    a:hover {
        opacity: 0.7;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style-contact.css">
    <?php
        require_once("header.php");
    ?>
    <title>Contact</title>
</head>
<body id="body">
    <main class="contact">
        <h2>Contactanos</h2>
        <form action="validar.php" method="post">
            <div>
                <input class="formContact" type="text" name="name" placeholder="Nombre:">
            </div>
            <div>
                <input class="formContact" type="email" name="email" placeholder="Email:">
            </div>
            <div>
                <textarea class="formContact mensaje" name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Escribe tu mensaje..."></textarea>
            </div>
            <div>
                <input class="bottonContact" type="submit">
            </div>
        </form>
    </main>
    
</body>
</html>
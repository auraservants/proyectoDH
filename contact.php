<?php include_once("head.php"); ?>
<?php include_once("header.php"); ?>
<main id="contact">
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
<?php include_once("footer.php"); ?>
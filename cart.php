<?php require_once("head.php")?>
<?php require_once("header.php")?>

<main class="cart">
    <section class="steps_cart">
        <div class="options_steps_cart">
            <p><a href="#">Compra</a></p>
        </div>
        <div class=line_steps_cart>
            <p>➤</p>
        </div>
        <div class="options_steps_cart">
            <p><a href="#">Pago</a></p>
        </div>
        <div class=line_steps_cart>
            <p>➤</p>
        </div>
        <div class="options_steps_cart">
            <p><a href="#">Entrega</a></p>
        </div>
    </section>
    <section class="buy_cart">
        <div class="detail_cart">
            <div class="title_products">
                <p class="name_cart">Productos</p>
                <p>Precio</p>
            </div>
            <div class="description_cart">
                <img class="img_products" src="" alt="product">
                <p class="detail_products">Descripción del producto</p>
                <p class="amount_products">$ ...</p>
                <p class="remove_products"><a href="#">✖</a></p>
            </div>
            <div class="description_cart">
                <img class="img_products" src="" alt="product">
                <p class="detail_products">Descripción del producto</p>
                <p class="amount_products">$ ...</p>
                <p class="remove_products"><a href="#">✖</a></p>
            </div>
            <div class="description_cart">
                <img class="img_products" src="" alt="product">
                <p class="detail_products">Descripción del producto</p>
                <p class="amount_products">$ ...</p>
                <p class="remove_products"><a href="#">✖</a></p>
            </div>
        </div>
        

        <div class="additional_cart">
            <form action="page.php" method="post">
                <div class="title_additional">
                    <p class="name_cart">Adicionales</p>
                    <p>Precio</p>
                </div>
                <div>
                    <div class="description_cart">
                        <label class="detail_additional" for="aceiteOliva">Aceite de Oliva</label>
                        <p class="amount_products">$...</p>
                        <div class="detail_aggregates">
                            <input id="aceiteOliva" type="checkbox" name="aceiteOliva" value="aceiteOliva">
                        </div>
                    </div>
                    <div class="description_cart">
                        <label class="detail_additional" for="limon">Limón</label>
                        <p class="amount_products">$...</p>
                        <div class="detail_aggregates">
                            <input id="limon" type="checkbox" name="limon" value="limon">
                        </div>
                    </div>
                    <div class="description_cart">
                        <label class="detail_additional" for="barbacoa">Barbacoa</label>
                        <p class="amount_products">$...</p>
                        <div class="detail_aggregates">
                            <input id="barbacoa" type="checkbox" name="barbacoa" value="barbacoa">
                        </div>
                    </div>
                    <div class="description_cart">
                        <label class="detail_additional" for="mayonesa">Mayonesa</label>
                        <p class="amount_products">$...</p>
                        <div class="detail_aggregates">
                            <input id="mayonesa" type="checkbox" name="mayonesa" value="mayonesa">
                        </div>
                    </div>
                    <div class="description_cart">
                        <label class="detail_additional" for="ketchup">ketchup</label>
                        <p class="amount_products">$...</p>
                        <div class="detail_aggregates">
                            <input id="ketchup" type="checkbox" name="ketchup" value="ketchup">
                        </div>
                    </div>
                    <div class="description_cart">
                        <label class="detail_additional" for="mostaza">Mostaza</label>
                        <p class="amount_products">$...</p>
                        <div class="detail_aggregates">
                            <input id="mostaza" type="checkbox" name="mostaza" value="mostaza">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section>
        <div class="envio_cart">
            <p><a href="#">Calcular envio</a></p>
        </div>
        <form class="cupon_cart" action="validar.php" method="post">
            <p>Canjear cupones</p>
            <input type="text" name="cupon" placeholder="Ingresá el código de tu cupón">
        </form>
        
    </section>

    <section class="buy_cart">
        
        <div class="page_cart">
            <div class="title_total">
                <p class="name_cart">Total</p>
                <p>$ ...</p>
            </div>
        </div>
        <div class="btn_cart">
			<input class= "btn_seguir" type="submit" value="Elegir más productos">
        </div>
        <div class="btn_cart">
            <input class="btn_finalizar" type="submit" value="Finalizar compra">
		</div>
        
    </section>
    
</main>

<?php require_once("footer.php")?>
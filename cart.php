<?php require_once("head.php")?>
<?php require_once("header.php")?>

<main class="cart">
    <section class="steps_cart">
        <div class="options_steps_cart">
            <a href="#"><img src="image/cart/steps-cart1.png" alt=""></a>
        </div>
        <div class=line_steps_cart>
        </div>
        <div class="options_steps_cart">
            <a href="#"><img src="image/cart/steps-cart2.png" alt=""></a>
        </div>
        <div class=line_steps_cart>
        </div>
        <div class="options_steps_cart">
            <a href="#"><img src="image/cart/steps-cart3.png" alt=""></a>
        </div>
    </section>
    <section class="buy_cart">
        <section class="container_buy_cart">
            <div class="detail_cart">
                <div class="title_products">
                    <p class="name_cart">Productos</p>
                    <p>Precio</p>
                </div>
                <div class="description_cart">
                    <div class="img_products"><img src="image/cart/product-cart1.png" alt="product"></div>
                    <p class="detail_products">Descripción del producto</p>
                    <p class="amount_products">$ ...</p>
                    <p class="remove_products"><a href="#"><img src="image/cart/remove-cart.png" alt=""></a></p>
                </div>
                <div class="description_cart">
                    <div class="img_products"><img src="image/cart/product-cart2.png" alt="product"></div>
                    <p class="detail_products">Descripción del producto</p>
                    <p class="amount_products">$ ...</p>
                    <p class="remove_products"><a href="#"><img src="image/cart/remove-cart.png" alt=""></a></p>
                </div>
                <div class="description_cart">
                    <div class="img_products"><img src="image/cart/product-cart1.png" alt="product"></div>
                    <p class="detail_products">Descripción del producto</p>
                    <p class="amount_products">$ ...</p>
                    <p class="remove_products"><a href="#"><img src="image/cart/remove-cart.png" alt=""></a></p>
                </div>
                <div class="description_cart">
                    <div class="img_products"><img src="image/cart/product-cart1.png" alt="product"></div>
                    <p class="detail_products">Descripción del producto</p>
                    <p class="amount_products">$ ...</p>
                    <p class="remove_products"><a href="#"><img src="image/cart/remove-cart.png" alt=""></a></p>
                </div>
            </div>
        
            <div class="additional_cart">
                <form action="page.php" method="post">
                    <div class="title_products">
                        <p class="name_cart">Productos</p>
                        <p>Precio</p>
                    </div>
                    <div class="description_cart">
                        <div class="img_products"></div>
                        <p class="detail_products">Descripción del producto</p>
                        <p class="amount_products">$ ...</p>
                        <p class="remove_products"><a href="#"><img src="image/cart/remove-cart.png" alt=""></a></p>
                    </div>
                    <div class="description_cart">
                        <div class="img_products"></div>
                        <p class="detail_products">Descripción del producto</p>
                        <p class="amount_products">$ ...</p>
                        <p class="remove_products"><a href="#"><img src="image/cart/remove-cart.png" alt=""></a></p>
                    </div>
                    <div class="description_cart">
                        <div class="img_products"></div>
                        <p class="detail_products">Descripción del producto</p>
                        <p class="amount_products">$ ...</p>
                        <p class="remove_products"><a href="#"><img src="image/cart/remove-cart.png" alt=""></a></p>
                    </div>
                    <div class="description_cart">
                        <div class="img_products"></div>
                        <p class="detail_products">Descripción del producto</p>
                        <p class="amount_products">$ ...</p>
                        <p class="remove_products"><a href="#"><img src="image/cart/remove-cart.png" alt=""></a></p>
                    </div>
                </form>
            </div>
        </section>

        <section class="container_options">
            <form class="cupon_cart" action="validar.php" method="post">
                <p>Ingresar Cupón</p>
                <input type="text" name="cupon" placeholder="Ingresá el código">
            </form>
            <form class="update_cart" action="validar.php" method="post">
                <input type="text" name="cupon" placeholder="Actualizar Carrito">
            </form>  
        </section>     
    </section>

    

    <section class="buy_btn_cart">
        
        <div class="page_cart">
            <p class="name_cart">Total</p>
            <input type="text">
    
        </div>
        <div class="btn_cart">
            <input class="btn btn--orange btn--large" type="submit" value="Finalizar compra">
		</div>
        
    </section>
    
</main>

<?php require_once("footer.php")?>
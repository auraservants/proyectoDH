@extends('layout')

@section('main')
<main class="cart">
    <section class="steps_cart">
        <div class="options_steps_cart">
            <a href="#"><img src="image/cart/steps-cart1.png" alt=""></a>
        </div>
        <div class=line_steps_cart>
        </div>
        <div class="options_steps_cart">
            <a href="#"><img src="image/cart/steps-cart2bw.png" alt=""></a>
        </div>
        <div class="line_steps_cart_checkout_bw">
        </div>
        <div class="options_steps_cart">
            <a href="#"><img src="image/cart/steps-cart3bw.png" alt=""></a>
        </div>
    </section>

    <section class="buy_cart">
        <section class="container_buy_cart">

            <div class="title_products">
                <p class="name_cart">Platos</p>
                <p>Precio</p>
            </div>
            <div class="description_cart">
                <div class="img_products"><img src="image/cart/product-cart1.png" alt="product"></div>
                <p class="detail_products">Descripción del plato</p>
                <p class="amount_products">$ ...</p>
                <p class="remove_products"><a href="#"><img src="image/cart/remove-cart.png" alt=""></a></p>
            </div>
            <div class="description_cart">
                <div class="img_products"><img src="image/cart/product-cart2.png" alt="product"></div>
                <p class="detail_products">Descripción del plato</p>
                <p class="amount_products">$ ...</p>
                <p class="remove_products"><a href="#"><img src="image/cart/remove-cart.png" alt=""></a></p>
            </div>
            <div class="description_cart">
                <div class="img_products"><img src="image/cart/product-cart1.png" alt="product"></div>
                <p class="detail_products">Descripción del plato</p>
                <p class="amount_products">$ ...</p>
                <p class="remove_products"><a href="#"><img src="image/cart/remove-cart.png" alt=""></a></p>
            </div>
            <div class="description_cart">
                <div class="img_products"><img src="image/cart/product-cart1.png" alt="product"></div>
                <p class="detail_products">Descripción del plato</p>
                <p class="amount_products">$ ...</p>
                <p class="remove_products"><a href="#"><img src="image/cart/remove-cart.png" alt=""></a></p>
            </div>

        </section>

        {{-- <section class="container_options">
            <form class="cupon_cart" action="validar.php" method="post">
                <p>Ingresar Cupón</p>
                <input type="text" name="cupon" placeholder="Ingresá el código">
            </form>
            <button type="submit" class="update_cart" value="">Actualizar Carrito</button>
        </section> --}}
    </section>



    <section class="buy_btn_cart">

        <div class="page_cart">
            <p class="total_cart">Total</p>
            <p class="bar_total_cart"></p>
        </div>

        <div class="btn_cart">
            <a href="/checkout" class="btn btn--orange btn--large">Finalizar compra</a>
		</div>

    </section>

</main>
@endsection

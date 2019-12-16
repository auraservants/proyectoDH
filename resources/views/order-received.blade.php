@extends('layout')

@section('main')
<main class="order-received">
        <section class="steps_cart">
                <div class="options_steps_cart">
                    <a href="#"><img src="image/cart/steps-cart1bw.png" alt=""></a>
                </div>
                <div class=line_steps_cart_bw>
                </div>
                <div class="options_steps_cart">
                    <a href="#"><img src="image/cart/steps-cart2bw.png" alt=""></a>
                </div>
                <div class="line_steps_cart_checkout">
                </div>
                <div class="options_steps_cart">
                    <a href="#"><img src="image/cart/steps-cart3.png" alt=""></a>
                </div>
            </section>


            <section class="buy_cart">
                    <p class="success_order_message">Gracias. Tu orden fue recibida.</p>
                    <ul class="success_order_details">
                            <li class="order_overview">
                                Numero de orden: <br>
                                <strong>2209</strong>
                            </li>
                            <li class="order_overview">
                                Fecha: <br>
                                <strong>15 de Diciembre, 2019</strong>
                            </li>
                            <li class="order_overview">
                                    Email: <br>
                                    <strong>auraservants@gmail.com</strong>
                                </li>
                            <li class="order_overview">
                                Total: <br>
                                <strong><span class="order-price-amount">$ 350</span></strong>
                            </li>
                            <li class="order_overview_payment">
                                    Metodo de pago: <br>
                                    <strong>Efectivo</strong>
                            </li>
                        </ul>

                    <section class="container_buy_cart">
                            <h2 class="order_details_title">Detalle de orden</h2>
                                    <ul class="success_order_details">
                                        <li class="order_overview_number">
                                            Numero de orden: <strong>2209</strong>
                                        </li>
                                        <li class="order_overview_date">
                                            Fecha: <strong>15 de Diciembre, 2019</strong>
                                        </li>
                                        <li class="order_overview_email">
                                                Email: <strong>auraservants@gmail.com</strong>
                                            </li>
                                        <li class="order_overview_total">
                                            Total: <strong><span class="order-price-amount">$ 350</span></strong>
                                        </li>
                                        <li class="order_overview_payment-method">
                                                Metodo de pago:	<strong>Efectivo</strong>
                                        </li>
                                    </ul>


                            <h2 class="order_details_title">Direccion de facturacion</h2>

                            <address>
                                 aura niño<br>
                                 manuel ugarte 2525<br>
                                 3b<br>
                                 Ciudad Autónoma de Buenos Aires<br>
                                 2525<br>
                                 Argentina
                                <p class="order_customer_cellphone">1123937260</p>
                                <p class="order_customer_email">auraservants@gmail.com</p>
                             </address>
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
                        {{-- <div class="btn_cart">
                            <a href="/checkout" class="btn btn--orange btn--large">Inicio</a>
                        </div> --}}

                </section>








@endsection

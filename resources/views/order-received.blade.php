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

                <section class="container_order_received">
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
                                1123937260
                                auraservants@gmail.com
                             </address>
                </section> 
            </section>
            <section class="buy_btn_cart">

            </section>
@endsection


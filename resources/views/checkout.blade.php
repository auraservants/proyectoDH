@extends('layout')

@section('main')
<main class="checkout">
        <section class="steps_cart">
                <div class="options_steps_cart">
                    <a href="#"><img src="image/cart/steps-cart1bw.png" alt=""></a>
                </div>
                <div class=line_steps_cart_bw>
                </div>
                <div class="options_steps_cart">
                    <a href="#"><img src="image/cart/steps-cart2.png" alt=""></a>
                </div>
                <div class="line_steps_cart_checkout">
                </div>
                <div class="options_steps_cart">
                    <a href="#"><img src="image/cart/steps-cart3bw.png" alt=""></a>
                </div>
            </section>

            <section class="checkout_cart">
                    <section class="container_checkout_cart">
                        <div class="billing">
                                <div class="row">
                                        <div class="col-75">
                                          <div class="container">
                                            <form action="/action_page.php">
                                              <div class="row">
                                                <div class="col-50">
                                                <h4 class="billing_title">Facturacion</h4>
                                                  <label for="fname"><i class="fa fa-user"></i> Nombre completo</label>
                                                  <input type="text" id="fname" name="firstname" placeholder="Nombre Apellido">
                                                  <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                                  <input type="text" id="email" name="email" placeholder="email@direccion.com">
                                                  <label for="adr"><i class="fas fa-map-marker-alt"></i> Barrio</label>
                                                  <input type="text" id="adr" name="neighborhood" placeholder="Barrio">
                                                  <label for="street"><i class="fas fa-street-view"></i> Calle</label>
                                                  <input type="text" id="street" name="street" placeholder="Calle">
                                                  <label for="streetnumber"><i class="fas fa-map-pin"></i> Numero/Altura</label>
                                                  <input type="text" id="streetnumber" name="streetnumber" placeholder="2525">

                                                  <div class="row">
                                                    <div class="col-50">
                                                      <label for="number">Piso/Casa</label>
                                                      <input type="text" id="floor" name="floor" placeholder="3">
                                                    </div>
                                                    <div class="col-50">
                                                      <label for="apartment">Apartamento</label>
                                                      <input type="text" id="apartment" name="apartment" placeholder="A">
                                                    </div>
                                                  </div>
                                                </div>

                                                <div class="col-50">
                                                  <h4 class="billing_title">Pago</h4>
                                                    <label>
                                                        <label for="paymentmet">Seleccione su metodo de pago</label>
                                                        <div class="col-50">
                                                                <input type="radio" name="payment-metod" value="cash" checked> Efectivo
                                                                <input type="radio" name="payment-metod" value="card"> Tarjeta
                                                        </div>
                                                        <br>
                                                        <br>

                                                  <label for="fname">Tarjetas validas</label>
                                                  <div class="icon-container">
                                                    <i class="fab fa-cc-visa" style="color:navy;"></i>
                                                    <i class="fab fa-cc-amex" style="color:blue;"></i>
                                                    <i class="fab fa-cc-mastercard" style="color:red;"></i>
                                                    <i class="fab fa-cc-discover" style="color:orange;"></i>
                                                  </div>
                                                  <label for="cname">Nombre de tarjeta</label>
                                                  <input type="text" id="cname" name="cardname" placeholder="Nombre Apellido ">
                                                  <label for="ccnum">Numero de tarjeta</label>
                                                  <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">

                                                  <div class="row">
                                                    <div class="col-50">
                                                      <label for="cvv">CVV</label>
                                                      <input type="text" id="cvv" name="cvv" placeholder="352">
                                                    </div>
                                                  </div>
                                                </div>

                                              </div>
                                              <label>
                                                <input type="checkbox" checked="checked" name="sameadr"> Direccion de envio igual a la de facturacion
                                              </label>

                        </div>
                    </section>

                    <section class="container_options">
                        <a href="/cart" class="btn_back_to_cart">Regresar al carrito</a>
                    </section>
            </section>

            <section class="buy_btn_cart">

                    {{-- <div class="page_cart">
                        {{-- <p class="total_cart">Total</p>
                        <p class="bar_total_cart"></p>
                    </div> --}}

                    <div class="btn_cart">
                        <a href="/order-received" class="btn btn--orange btn--large">Comprar</a>
                    </div>
                </section>





</main>
@endsection

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
                      <div class="checkout_column">
                            
                        <form class="form_checkout_cart" action="/action_page.php">                                                    
                            <div class="checkout_column_2">
                              <h4 class="billing_title">Facturacion</h4>
                                <label class="checkout_label" for="fname"><i class="fa fa-user"></i> Nombre completo</label>
                                <input type="text" class="checkout_input" id="nameCheckout" name="firstname" placeholder="Nombre Apellido">
                                <label class="checkout_label" for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" class="checkout_input" id="emailCheckout" name="email" placeholder="email@direccion.com">
                            </div>
                            
                            <div class="checkout_column_2">
                              <h4 class="billing_title">Pago</h4>
                              <label class="checkout_label" for="paymentmet">Seleccione su metodo de pago</label>
                            
                              <div class="checkout_column_2 checkout_checks">
                                  <input type="radio" class="checkout_input" id="cashCheckout" name="payment-metod" value="cash" checked> Efectivo
                                  <input type="radio" class="checkout_input" id="cardCheckout" name="payment-metod" value="card"> Tarjeta
                              </div>
                              <br>
                              <br>
                              <div class="cards__data">
                                <label class="checkout_label" for="fname">Tarjetas validas</label>
                                <div class="icon-container">
                                  <i class="fab fa-cc-visa" style="color:navy;"></i>
                                  <i class="fab fa-cc-amex" style="color:blue;"></i>
                                  <i class="fab fa-cc-mastercard" style="color:red;"></i>
                                  <i class="fab fa-cc-discover" style="color:orange;"></i>
                                </div>
                                <label class="checkout_label" for="cname">Nombre de tarjeta</label>
                                <input type="text" class="checkout_input" id="nameCardCheckout" name="cardname" placeholder="Nombre Apellido ">
                                <label class="checkout_label" for="ccnum">Numero de tarjeta</label>
                                <input type="text" class="checkout_input" id="numberCardCheckout" name="cardnumber" placeholder="1111-2222-3333-4444">

                                <div class="row_checkout">
                                  <div class="checkout_column_2">
                                    <label class="checkout_label" for="cvv">CVV</label>
                                    <input type="text" class="checkout_input" id="cvvCardCheckout" name="cvv" placeholder="352">
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                        </form>
                              
                        <label class="checkout_label">
                          <input type="checkbox" class="checkout_input" checked="checked" name="sameadr"> Direccion de envio igual a la de facturacion
                        </label>

                      </div>
                    </section>

                    <section class="container_options">
                        <a href="/cart" class="btn_back_to_cart">Regresar al carrito</a>
                    </section>
            </section>

          <section class="buy_btn_cart">
              <div class="btn_cart">
                  <a href="" class="btn_finishPurchase btn btn--orange btn--large">Pagar</a>
              </div>
          </section>
</main>
@endsection
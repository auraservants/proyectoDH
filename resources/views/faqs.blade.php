@extends('layout')

@section('main')
<main class="faqs">
  <div class="faqs__container__title">
    <div class="faqs__title">
      <h1>Cómo podemos ayudarte?</h1>
    </div>
    <div class="faqs__search">
      <button><img src="image/faqs/search.png" alt=""></button>
      <input type="text" placeholder="Describe tu pregunta">
    </div>
    <img class="photo__title" src="image/faqs/img-faqs1.png" alt="">
  </div>


  <div class="faqs__container">
    <div class="faqs__group">
      <div class="faqs__question">
        <p>¿Qué es Randfood?</p>
        <img src="image/faqs/point-faqs.png" alt="">
      </div>
      <div class="faqs__reply">
        <p>Servicio de comida rica y saludable, de muy alta calidad para comer donde quiera que estes, tenemos más de 5 años demostrandole a nuestros clientes que vale la pena elegirnos para satisfacer su apetito.</p>
      </div>
    </div>
    <div class="faqs__group">
      <div class="faqs__question">
        <p>¿Cómo usar Randfood?</p>
        <img src="image/faqs/point-faqs.png" alt="">
      </div>
      <div class="faqs__reply">
        <p>Primero debes crearte un usuario en la web, ingresar tus datos, y asi una vez ingresado en tu cuenta, podras ir a la pagina de Shops y seleccionar ingrediente por ingrediente hasta encontrar tu plato deseado, luego lo agregas al carrito , realizas el pago y recibes tu comida.</p>
      </div>
    </div>
    <div class="faqs__group">
      <div class="faqs__question">
        <p>¿Cómo funciona el método randfood?</p>
        <img src="image/faqs/point-faqs.png" alt="">
      </div>
      <div class="faqs__reply">
        <p>Es elegir ingrediente por ingrendiente logrando filtrar los platos que tengan esos ingredientes, una opción diferente y única de comer. Siempre asegurandote que pagarás por lo que te comerás.</p>
      </div>
    </div>
    <div class="faqs__group">
      <div class="faqs__question">
        <p>Facturación, pago y mi cuenta</p>
        <img src="image/faqs/point-faqs.png" alt="">
      </div>
      <div class="faqs__reply">
        <p>Debes agregar uno o varios platos al carrito, seleccionar tu direccion de entrega, y completar los datos de facturacion y luego elegir el metodo de pago. Una vez verificado tus datos procederas a hacer el checkout de tu pedido. </p>
      </div>
    </div>
    <div class="faqs__group">
      <div class="faqs__question">
        <p>Mi perfil, promociones y puntos Randfood</p>
        <img src="image/faqs/point-faqs.png" alt="">
      </div>
      <div class="faqs__reply">
        <p>En tu perfil puedes actualizar tu informacion, completar tu perfil, agregar diferentes direcciones para el envío, y ademas cuentas con promociones exclusivas y puntos randfood que se van a ir acumulando a medida que compres en nuestra tienda.</p>
      </div>
    </div>
    <div class="faqs__group">
      <div class="faqs__question">
        <p>¿Cuales son los métodos de pago?</p>
        <img src="image/faqs/point-faqs.png" alt="">
      </div>
      <div class="faqs__reply">
        <p>Nuestros medios de pago son efectivo a la hora de recibir tu pedido, y tarjetas Visa, MasterCard, Amex y Discover. </p>
      </div>
    </div>
    <div class="faqs__group">
      <div class="faqs__question">
        <p>¿Quién realiza la comida?</p>
        <img src="image/faqs/point-faqs.png" alt="">
      </div>
      <div class="faqs__reply">
        <p>Randfood posee un staff calificado tanto de Chefs como ayudantes de cocina, reconocidos en todo el país por su forma de percibir la comida y realizarla. Ellos son Germán Martitegui, Guillermo Calabrese, Guillermo Calabrese entre muchos más!.</p>
      </div>
    </div>
  </div>


</main>
@endsection

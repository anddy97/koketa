<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-3760857291646471-051907-b7216391184114d032ae5494e198afd9-761790929');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 50.00;
$preference->items = array($item);
$preference->save();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>procesar pago</title>
</head>
<body>
    


    <label class="mercadopago" for=""></label>



<script src="https://sdk.mercadopago.com/js/v2"></script>


<!-- curl -X POST -H"Content-Type: application/json" "https://api.mercadopago.com/users/test_user?access_token=TEST-1384107962268824-051411-349f502cc81c16abda9b8722a775704f-260458337" -d "{'site_id':'MLA'}"

comprador de prueba={"id":761791128,"nickname":"TT665717","password":"qatest5487","site_status":"active","email":"test_user_97708682@testuser.com"}


vendedor prueba= {"id":761790929,"nickname":"TEST1LRFOVAP","password":"qatest4203","site_status":"active","email":"test_user_76954730@testuser.com"} -->

          
<script>
// Agrega credenciales de SDK
  const mp = new MercadoPago('APP_USR-4b9c4f87-0da2-4e6c-9273-12597ac15da0', {
        locale: 'es-AR'
  });

  // Inicializa el checkout
  mp.checkout({
      preference: {
          id: "<?php echo $preference->id?>"
      },
      render: {
            container: '.mercadopago', // Indica dónde se mostrará el botón de pago
            label: 'Pagar', // Cambia el texto del botón de pago (opcional)
      }
});
</script>

</body>
</html>
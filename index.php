<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Онлайн Мотомагазин</title>
</head>

<body>
    <header>
        <div id="headerInside">
            <div>
                <a href="index.php"> <img id="logo" src="../images/logo.png" alt="logo"> </a>
            </div>
            <div id="companyName">Moto</div>
            <div id="navWrap">
                <a href="/">
                Главная
            </a>
                <a href="index.php?page=shop">
                Магазин
            </a>
            </div>
        </div>
    </header>

    <div id="content">
        <?php
    $goods = [
    [
    'id' => 1,
    'name' => 'Kawasaki',
    'desc' => 'Kawasaki Kawasaki Kawasaki Kawasaki Kawasaki ',
    'img' => '/images/goods/kawasaki.jpg',
    'price' => '2000$'
    ],
    [
 'id' => 2,
    'name' => 'Yamaha',
    'desc' => 'Yamaha Yamaha Yamaha Yamaha Yamaha Yamaha ',
    'img' => '/images/goods/yamaha.jpg',
    'price' => '1200$'
],
[ 
 'id' => 3,
    'name' => 'Suzuki',
    'desc' => 'Suzuki Suzuki Suzuki Suzuki Suzuki Suzuki ',
    'img' => '/images/goods/suzuki.jpg',
    'price' => '1400$'
],
[
'id' => 4,
    'name' => 'Honda ',
    'desc' => 'Honda Honda Honda Honda Honda Honda Honda ',
    'img' => '/images/goods/honda.jpg',
    'price' => '1600$'
    ],
];
    $page = $_GET['page'];
  if (!isset($page)) {
   require('templates/main.php');
} elseif ($page =='shop') {
    require('templates/shop.php');
} elseif ($page =='product') {
       $id = $_GET['id'];
        $good = [];
        foreach ($goods as $product) {
            if ($product['id'] == $id) {
                $good = $product;
                break;
            }
        }
        require('templates/openedProduct.php');
  }
?>

    </div>

    <footer>
        <div id="footerInside">

            <div id="contacts">
                <div class="contactWrap">
                    <img src="images/envelope.svg" class="contactIcon"> info@motoshop.ru
                </div>
                <div class="contactWrap">
                    <img src="images/phone-call.svg" class="contactIcon"> 8 800 555 00 00
                </div>
                <div class="contactWrap">
                    <img src="images/placeholder.svg" class="contactIcon"> Москва, пр-т Ленина, д. 1 офис 304
                </div>
            </div>

            <div id="footerNav">
                <a href="/">Главная</a>
                <a href="index.php?page=shop">Магазин</a>
            </div>

            <div id="social">
                <a target="_blank" href="https://vk.com/"><img class="socialItem" src="images/vk-social-logotype.svg"></a>
                <a target="_blank" href="https://plus.google.com"><img class="socialItem" src="images/google-plus-social-logotype.svg"></a>
                <a target="_blank" href="https://ru-ru.facebook.com"><img class="socialItem" src="images/facebook-logo.svg"></a>
            </div>

            <div id="copyrights">&copy; Moto</div>
        </div>
    </footer>

</body>

</html>

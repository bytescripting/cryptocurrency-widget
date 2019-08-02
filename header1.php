<?php include('init.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Currency - Header 1</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
        <div class="_currencyHeaderVersion">
          <?php
            foreach ($coins as $d) {
              if (array_search(strtolower($d->symbol), $alloweds)):
              $name = (isset($d->name) ? $d->name : (isset($d['name']) ? $d['name'] : ''));
              $priceChange = (isset($d->price_change) ? $d->price_change : null);
              $priceChange = (isset($d->price_change) ? $d->price_change : null);
          ?>
          <div class="item-container">
            <div class="_currencyItem">
              <img style="width: 20px; height: 20px;" src="icons/<?=strtolower($d->symbol); ?>.png" alt="<?=$d->name ?>">
              <span><?=$d->name ?></span>
              <div class="item-icon">
                <svg class="<?=(intval($d->price_change) < 0 ? 'down' : 'up') ?>" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 357 357" style="enable-background:new 0 0 357 357;" xml:space="preserve"><g><g id="play-arrow"><polygon points="38.25,0 38.25,357 318.75,178.5"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                </svg>
              </div>
              <div class="price">
                <div class="buy">
                  <span>Price</span>
                  <label>$<?=number_format($d->price_usd, 2, '.', '') ?></label>
                </div>
                <div class="sell">
                  <span>Change</span>
                  <label style="color: <?=(intval($d->price_change) < 0 ? '#c85151' : '#48bd7f') ?>"><?=$d->price_change ?>%</label>
                </div>
              </div>
            </div>
          </div>
          <?php endif; } ?>
        </div>
    </div>
  </body>
</html>

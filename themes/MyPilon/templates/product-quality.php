<?php
$product_quality_title = get_field('product_quality_title');
$product_quality_text = get_field('product_quality_text');
$product_quality_image = get_field('product_quality_image');
$product_quality_name = get_field('product_quality_name');
$product_quality_position = get_field('product_quality_position');
?>

<section id="product-quality">
    <div class="container">
        <div class="product-quality__block">
            <div class="product-quality__block-left">
              <?php if (!empty($product_quality_image)) : ?>
                  <div class="product-quality__block-left-image">
                      <img src="<?= $product_quality_image['url'] ?>" alt="">
                  </div>
                  <div class="product-quality__block-left-person">
                    <?php if (!empty($product_quality_name)) : ?>
                        <p class="product-quality__block-left-person-name">
                          <?= $product_quality_name ?? '' ?>
                    </p>
                    <?php endif; ?>
                    <?php if (!empty($product_quality_position)) : ?>
                        <p class="product-quality__block-left-person-position">
                          <?= $product_quality_position ?? '' ?>
                    </p>
                    <?php endif; ?>
                  </div>
              <?php endif; ?>
            </div>
            <div class="product-quality__block-right">
              <?php if (!empty($product_quality_title)) : ?>
                  <h2 class="product-quality__block-right-title">
                    <?= $product_quality_title ?? '' ?>
              </h2>
              <?php endif; ?>
              <?php if (!empty($product_quality_text)) : ?>
                  <div class="product-quality__block-right-text">
                    <?= $product_quality_text ?? '' ?>
              </div>
              <?php endif; ?>
            </div>
        </div>
    </div>
</section>
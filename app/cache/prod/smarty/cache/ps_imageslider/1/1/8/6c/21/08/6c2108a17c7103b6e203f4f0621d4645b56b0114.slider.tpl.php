<?php /*%%SmartyHeaderCode:135531990758340b38e23972-99452840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imageslider/views/templates/hook/slider.tpl',
      1 => 1479805148,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '135531990758340b38e23972-99452840',
  'variables' => 
  array (
    'homeslider' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58340b38e7ed05_07612462',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58340b38e7ed05_07612462')) {function content_58340b38e7ed05_07612462($_smarty_tpl) {?>
  <div id="carousel" data-ride="carousel" class="carousel slide hidden-sm-down" data-interval="5000" data-wrap="true" data-pause="hover">
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active">
          <figure>
            <img src="http://localhost/prestashop_1.7.0.0/modules/ps_imageslider/images/sample-1.jpg" alt="sample-1">
                          <figcaption class="caption">
                <h2 class="display-1 text-uppercase">Sample 1</h2>
                <div class="caption-description"><h2>EXCEPTEUR OCCAECAT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>
              </figcaption>
                      </figure>
        </li>
              <li class="carousel-item ">
          <figure>
            <img src="http://localhost/prestashop_1.7.0.0/modules/ps_imageslider/images/sample-2.jpg" alt="sample-2">
                          <figcaption class="caption">
                <h2 class="display-1 text-uppercase">Sample 2</h2>
                <div class="caption-description"><h2>EXCEPTEUR OCCAECAT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>
              </figcaption>
                      </figure>
        </li>
              <li class="carousel-item ">
          <figure>
            <img src="http://localhost/prestashop_1.7.0.0/modules/ps_imageslider/images/sample-3.jpg" alt="sample-3">
                          <figcaption class="caption">
                <h2 class="display-1 text-uppercase">Sample 3</h2>
                <div class="caption-description"><h2>EXCEPTEUR OCCAECAT</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tristique in tortor et dignissim. Quisque non tempor leo. Maecenas egestas sem elit</p></div>
              </figcaption>
                      </figure>
        </li>
          </ul>
    <div class="direction">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<?php }} ?>

<?php

/* __string_template__6024c91581be1a092b5fe37e34fe762d37901d3010e53bdd2ec1f56bdd9068a9 */
class __TwigTemplate_75fcc52d7447c82725dcf68190c6cea2f389017c82354d772de3e21557519836 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/staraddons/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/staraddons/img/app_icon.png\" />

<title>Produits • Staraddons</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'fr';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.0.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '31f2603aad4378054f76273503443259';
    var token_admin_orders = '2458fd870e9a847b9b046c34191b543a';
    var token_admin_customers = '61e513437ecd7b30edd69ffe9d588999';
    var token_admin_customer_threads = 'f059f17d493df46ce98bb037ac466611';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '5f62ee3580bb3452923104dbc5d31eb9';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/staraddons/admin560sfdxgf/index.php/module/catalog/recommended?_token=JOJrsNa-61COHMu17gdsY3kEHxMoJSw4WooDSPZIXic';
    var tab_modules_list = 'erpillicopresta,mobfirst,prestagiftvouchers,dmuassocprodcat';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/staraddons/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/staraddons/admin560sfdxgf/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/staraddons/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/staraddons/admin560sfdxgf/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/staraddons\\/admin560sfdxgf\\/\";
var baseDir = \"\\/staraddons\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
</script>
<script type=\"text/javascript\" src=\"/staraddons/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/staraddons/admin560sfdxgf/themes/new-theme/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/staraddons/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/staraddons/js/admin.js?v=1.7.0.1\"></script>
<script type=\"text/javascript\" src=\"/staraddons/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/staraddons/js/tools.js?v=1.7.0.1\"></script>
<script type=\"text/javascript\" src=\"/staraddons/admin560sfdxgf/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/staraddons/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/staraddons/admin560sfdxgf/themes/default/js/vendor/nv.d3.min.js\"></script>


  

";
        // line 71
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"adminproducts\">



<header>
  <nav class=\"main-header\">

    
    

    
    <a class=\"logo pull-left\" href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminDashboard&amp;token=52b5cad1fcf4c3781203c713fd0d1258\"></a>

    <div class=\"component pull-left\"><div class=\"ps-dropdown dropdown\">
  <span type=\"button\" id=\"quick-access\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <span class=\"selected-item\">Accès rapide</span> <i class=\"material-icons arrow-down\">keyboard_arrow_down</i>
  </span>
  <div class=\"ps-dropdown-menu dropdown-menu\" aria-labelledby=\"quick-access\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminOrders&amp;token=2458fd870e9a847b9b046c34191b543a\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=ae7ae436b4c3a61026a469cdc5ff7340\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/staraddons/admin560sfdxgf/index.php/product/new?token=e6938ab51f6e3e162f5a02808e61937c\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminCategories&amp;addcategory&amp;token=786a2c0e7c7902718d8b9cb413dc26b6\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <hr>
        <a
      class=\"dropdown-item js-quick-link\"
      data-rand=\"65\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/product/catalog?-61COHMu17gdsY3kEHxMoJSw4WooDSPZIXic\"
      data-post-link=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminQuickAccesses&token=08afd5410bff859191d2b828d0225cd2\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Produits - Liste\"
    >
      <i class=\"material-icons\">add_circle_outline</i>
      Ajouter cette page à l'Accès Rapide
    </a>
    <a class=\"dropdown-item\" href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminQuickAccesses&token=08afd5410bff859191d2b828d0225cd2\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
</div>
    <div class=\"component\">

<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form\"
      method=\"post\"
      action=\"/staraddons/admin560sfdxgf/index.php?controller=AdminSearch&amp;token=13163ffbcb3ab2991273efc16b8fe1e7\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input id=\"bo_query\" name=\"bo_query\" type=\"search\" class=\"form-control dropdown-form-search js-form-search\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" />
    <div class=\"input-group-addon\">
      <div class=\"dropdown\">
        <span class=\"dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
          Partout
        </span>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          <ul class=\"items-list js-items-list\">
            <li class=\"search-all search-option active\">
              <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\">
              <i class=\"material-icons\">search</i> Partout</a>
            </li>
            <hr>
            <li class=\"search-book search-option\">
              <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\">
                <i class=\"material-icons\">library_books</i> Catalogue
              </a>
            </li>
            <li class=\"search-customers-name search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\">
                <i class=\"material-icons\">group</i> Clients par nom
              </a>
            </li>
            <li class=\"search-customers-addresses search-option\">
              <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\">
                <i class=\"material-icons\">desktop_windows</i>Clients par adresse IP</a>
            </li>
            <li class=\"search-orders search-option\">
              <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\">
                <i class=\"material-icons\">credit_card</i> Commandes
              </a>
            </li>
            <li class=\"search-invoices search-option\">
              <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\">
                <i class=\"material-icons\">book</i></i> Factures
              </a>
            </li>
            <li class=\"search-carts search-option\">
              <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\">
                <i class=\"material-icons\">shopping_cart</i> Paniers
              </a>
            </li>
            <li class=\"search-modules search-option\">
              <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\">
                <i class=\"material-icons\">view_module</i> Modules
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"input-group-addon search-bar\">
      <button type=\"submit\">RECHERCHE<i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
  });
</script>
</div>


    <div class=\"component pull-md-right -norightmargin\"><div class=\"employee-dropdown dropdown\">
      <div class=\"img-circle person\" data-toggle=\"dropdown\">
      <i class=\"material-icons\">person</i>
    </div>
    <div class=\"dropdown-menu dropdown-menu-right p-a-1 m-r-2\">
    <div class=\"text-xs-center\">
      <img class=\"avatar img-circle\" src=\"http://profile.prestashop.com/louis.piresagier%40gmail.com.jpg\" /><br>
      Louis PIRES--AGIER
    </div>
    <hr>
    <a class=\"employee-link\" href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminEmployees&amp;token=5f62ee3580bb3452923104dbc5d31eb9&amp;id_employee=1&amp;updateemployee\" target=\"_blank\">
      <i class=\"material-icons\">settings_applications</i> Votre profil
    </a>
    <a class=\"employee-link m-t-1\" id=\"header_logout\" href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminLogin&amp;token=29084c326c576985864f9e0d2774ebab&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i> Déconnexion
    </a>
  </div>
</div>
</div>
          <div class=\"component pull-md-right\"><div class=\"notification-center dropdown\">
  <div class=\"notification dropdown-toggle\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count\">0</span>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous regardé vos <strong><a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminCarts&token=1ee09f587c3bc5a6eb7a09271e9bc4c5&action=filterOnlyAbandonedCarts\">paniers abandonnés</a></strong> ?<br>
              Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Avez-vous pensé à vendre sur les places de marché ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              C'est du temps libéré pour autre chose !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"pull-xs-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - s'inscrire <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
</div>
        <div class=\"component pull-md-right\">  <div class=\"shop-list\">
    <a class=\"link\" href=\"http://localhost/staraddons/\" target= \"_blank\">Staraddons</a>
  </div>
</div>
            

    

    
    
  </nav>
</header>

<nav class=\"nav-bar\">
  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\">
            <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminDashboard&amp;token=52b5cad1fcf4c3781203c713fd0d1258\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de Bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"3\">
                  <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminOrders&amp;token=2458fd870e9a847b9b046c34191b543a\" class=\"link\">
                    <i class=\"material-icons\">shopping_basket</i> <span>Commandes</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminOrders&amp;token=2458fd870e9a847b9b046c34191b543a\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminInvoices&amp;token=f3dd43cddf1ae5bed785af1a7a4b9619\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminSlip&amp;token=e74a607f994db10e60962e699f5fdea4\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminDeliverySlip&amp;token=79a239f495777d390d9fc01329bb8385\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminCarts&amp;token=1ee09f587c3bc5a6eb7a09271e9bc4c5\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone -active\" data-submenu=\"9\">
                  <a href=\"/staraddons/admin560sfdxgf/index.php/product/catalog?_token=JOJrsNa-61COHMu17gdsY3kEHxMoJSw4WooDSPZIXic\" class=\"link\">
                    <i class=\"material-icons\">store</i> <span>Catalogue</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\">
                              <a href=\"/staraddons/admin560sfdxgf/index.php/product/catalog?_token=JOJrsNa-61COHMu17gdsY3kEHxMoJSw4WooDSPZIXic\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminCategories&amp;token=786a2c0e7c7902718d8b9cb413dc26b6\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminTracking&amp;token=129dcb7a05672b95f9b3d0156bdb7d26\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminAttributesGroups&amp;token=7c15302a25bcfe7a14daa986ddd4c42f\" class=\"link\"> Attributs &amp; Caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminManufacturers&amp;token=0f675dde0ddaeb2236b279981bb1d2d8\" class=\"link\"> Marques &amp; Fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminAttachments&amp;token=4241429b43785b7d9c03059fb5ae5ac0\" class=\"link\"> Documents joints
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminCartRules&amp;token=ae7ae436b4c3a61026a469cdc5ff7340\" class=\"link\"> Promotions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"23\">
                  <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminCustomers&amp;token=61e513437ecd7b30edd69ffe9d588999\" class=\"link\">
                    <i class=\"material-icons\">account_circle</i> <span>Clients</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"24\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminCustomers&amp;token=61e513437ecd7b30edd69ffe9d588999\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminAddresses&amp;token=a2afaa582781af12f521bd5efd0a57bd\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"27\">
                  <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminCustomerThreads&amp;token=f059f17d493df46ce98bb037ac466611\" class=\"link\">
                    <i class=\"material-icons\">chat</i> <span>Service client</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"28\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminCustomerThreads&amp;token=f059f17d493df46ce98bb037ac466611\" class=\"link\"> Service client
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminOrderMessage&amp;token=cc49e8929d4d51ec8063e86992701abc\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminReturn&amp;token=a824006217442c6d579f05bf1518cdd8\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"31\">
                  <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminStats&amp;token=21d0cd1b7dca3d960e57dbd09a3c5c85\" class=\"link\">
                    <i class=\"material-icons\">assessment</i> <span>Statistiques</span>
                  </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"41\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"42\">
                  <a href=\"/staraddons/admin560sfdxgf/index.php/module/catalog?_token=JOJrsNa-61COHMu17gdsY3kEHxMoJSw4WooDSPZIXic\" class=\"link\">
                    <i class=\"material-icons\">extension</i> <span>Modules</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"43\">
                              <a href=\"/staraddons/admin560sfdxgf/index.php/module/catalog?_token=JOJrsNa-61COHMu17gdsY3kEHxMoJSw4WooDSPZIXic\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"45\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminAddonsCatalog&amp;token=18a67312ab7173153068223c0f5d763f\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"46\">
                  <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminThemes&amp;token=4338982ffff096be51b56d5653751c59\" class=\"link\">
                    <i class=\"material-icons\">desktop_mac</i> <span>Apparence</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"47\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminThemes&amp;token=4338982ffff096be51b56d5653751c59\" class=\"link\"> Thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminThemesCatalog&amp;token=4d0a93f86a50184a7232c32d6afacecd\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminCmsContent&amp;token=e919f3c7cf5cb29ba0ef0467e2266154\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminModulesPositions&amp;token=ddd961b38d4ce4333f7f0918b45ff4dc\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminImages&amp;token=1453a59ba324fe2f576f848ea4497853\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminLinkWidget&amp;token=39a163a3165c2efa2a9ab97784d42682\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"52\">
                  <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminCarriers&amp;token=c9457151d7374def76a281bae1507ba4\" class=\"link\">
                    <i class=\"material-icons\">local_shipping</i> <span>Transport</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminCarriers&amp;token=c9457151d7374def76a281bae1507ba4\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminShipping&amp;token=2f5368e63f4a642d3c4c96cd2c6d53b4\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"55\">
                  <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminPayment&amp;token=ac58eb95cc3cf9a569a0a71aa6f62026\" class=\"link\">
                    <i class=\"material-icons\">payment</i> <span>Paiement</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"56\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminPayment&amp;token=ac58eb95cc3cf9a569a0a71aa6f62026\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminPaymentPreferences&amp;token=a2bf71c4c92f2f3757c0d70ad597e682\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"58\">
                  <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminLocalization&amp;token=9fccc894fcc7477428033d4e7d34b7ae\" class=\"link\">
                    <i class=\"material-icons\">language</i> <span>International</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminLocalization&amp;token=9fccc894fcc7477428033d4e7d34b7ae\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminCountries&amp;token=d931777b086a00fdf2b817db36ce63f2\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminTaxes&amp;token=f21bcc999b483223f91113bc05f22fb0\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"71\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminTranslations&amp;token=879a6b867bb001015c54b62fb39a3daf\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"72\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                
                <li class=\"link-levelone \" data-submenu=\"73\">
                  <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminPreferences&amp;token=d2152b1ea01381ff47a047985d3d49de\" class=\"link\">
                    <i class=\"material-icons\">settings</i> <span>Paramètres de la boutique</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"74\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminPreferences&amp;token=d2152b1ea01381ff47a047985d3d49de\" class=\"link\"> Général
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"77\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminOrderPreferences&amp;token=b6da856445277669ec404997eea8ae2b\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"80\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminPPreferences&amp;token=8ebe41e239933e7f80c3e62b57e8a2c0\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminCustomerPreferences&amp;token=3f2289e8d368e255f494bd9ed39038a1\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminContacts&amp;token=974c5249b319f4dbb773504f68abd589\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminMeta&amp;token=a34972928230c4107d236b064864aaac\" class=\"link\"> Trafic
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminSearchConf&amp;token=bd5bf47b033feca611c4549a3f5fea8d\" class=\"link\"> Recherche
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                
                <li class=\"link-levelone \" data-submenu=\"95\">
                  <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminInformation&amp;token=b7861f04819422613f73e2fa2f598569\" class=\"link\">
                    <i class=\"material-icons\">settings_applications</i> <span>Paramètres avancés</span>
                  </a>
                                          <ul class=\"submenu\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminInformation&amp;token=b7861f04819422613f73e2fa2f598569\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminPerformance&amp;token=6f740fd8181297cffddccf73b4398e94\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"98\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminAdminPreferences&amp;token=00be599dee51d4d1f274eeddf24332fc\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminEmails&amp;token=72d9fd1bd2c032102271e5b846564f30\" class=\"link\"> Emails
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminImport&amp;token=a2964cddf32f02fad23478ec5b2bdcd8\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminEmployees&amp;token=5f62ee3580bb3452923104dbc5d31eb9\" class=\"link\"> Employés
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminRequestSql&amp;token=b2f5afbddfd9667b6d96f5852ea2ad0c\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminLogs&amp;token=50da80f9a0bf551872bfff644dd08b0c\" class=\"link\"> Log
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\">
                              <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminWebservice&amp;token=98f199fa1f7cecb1b1acf2452e21100f\" class=\"link\"> Service web
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>

  <span class=\"menu-collapse\">
    <i class=\"material-icons\">&#xE8EE;</i>
  </span>

  
<div class=\"onboarding-navbar\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Lancez votre boutique !
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Reprendre</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Quitter le tutoriel</a>
  </div>
</div>


</nav>


<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">

  
    <ol class=\"breadcrumb\">

              <li>
                      <a href=\"http://localhost/staraddons/admin560sfdxgf/index.php?controller=AdminCatalog&amp;token=2cba19429ab1ad1feb73b348be6b149a\">Catalogue</a>
                  </li>
      
              <li>
                      <a href=\"/staraddons/admin560sfdxgf/index.php/product/catalog?_token=JOJrsNa-61COHMu17gdsY3kEHxMoJSw4WooDSPZIXic\">Produits</a>
                  </li>
      
    </ol>
  

  
    <h2 class=\"title\">
      Produits    </h2>
  

  
    <div class=\"toolbar-icons\">
                                      
          <a
            class=\"m-b-2 m-r-1 btn btn-primary  pointer\"            id=\"page-header-desc-configuration-add\"
            href=\"/staraddons/admin560sfdxgf/index.php/product/new?_token=JOJrsNa-61COHMu17gdsY3kEHxMoJSw4WooDSPZIXic\"            title=\"Créer un nouveau produit : CTRL+P\"            data-toggle=\"tooltip\"
            data-placement=\"bottom\"          >
            <i class=\"material-icons\">add_circle_outline</i>
            <span class=\"title\">Nouveau produit</span>
          </a>
                            
        <a
          class=\"toolbar-button toolbar_btn\"
          id=\"page-header-desc-configuration-modules-list\"
          href=\"/staraddons/admin560sfdxgf/index.php/module/catalog?_token=JOJrsNa-61COHMu17gdsY3kEHxMoJSw4WooDSPZIXic\"          title=\"Modules et services recommandés\"
                  >
                      <i class=\"material-icons\">extension</i>
                    <span class=\"title\">Modules et services recommandés</span>
        </a>
            
                  <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\"
             title=\"Aide\"
             data-toggle=\"sidebar\"
             data-target=\"#right-sidebar\"
             data-url=\"/staraddons/admin560sfdxgf/index.php/common/sidebar/http%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminProducts%253Fversion%253D1.7.0.1%2526country%253Dfr/Aide?_token=JOJrsNa-61COHMu17gdsY3kEHxMoJSw4WooDSPZIXic\"
             id=\"product_form_open_help\"
          >
            <i class=\"material-icons\">help</i>
            <span class=\"title\">Aide</span>
          </a>
                  </div>
  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=louis.piresagier%40gmail.com&amp;firstname=Louis&amp;lastname=PIRES--AGIER&amp;website=http%3A%2F%2Flocalhost%2Fstaraddons%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/staraddons/admin560sfdxgf/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=louis.piresagier%40gmail.com&amp;firstname=Louis&amp;lastname=PIRES--AGIER&amp;website=http%3A%2F%2Flocalhost%2Fstaraddons%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>
    <div class=\"content-div \">

      

      
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.14285714286%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.7142857143%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.2857142857%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.2857142857%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.2857142857%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.2857142857%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continuer</button>
  <a class=\"onboarding-button-shut-down\">Passer le tutoriel</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){

    onBoarding = new OnBoarding(0, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"\\n<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Bienvenue chez vous !<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Bonjour ! Je m'appelle Preston et je suis l\\u00e0 pour vous faire visiter.<\\/p>\\n    <p>Vous d\\u00e9couvrirez les quelques \\u00e9tapes essentielles avant de lancer votre boutique :<br>\\n    Ajoutez votre premier produit, personnalisez votre boutique, param\\u00e9trer vos transporteurs et modes de paiement...<\\/p>\\n    <p>C'est parti !<\\/p>\\n  <\\/div>\\n  <div class=\\\"text-right text-md-right\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Plus tard<\\/button>\\n    <button class=\\\"btn btn-primary btn-lg with-spinner onboarding-button-next\\\">D\\u00e9marrer<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php?controller=AdminDashboard\"}]},{\"title\":\"Cr\\u00e9ons votre premier produit\",\"subtitle\":{\"1\":\"Que souhaitez-vous en dire ? Pensez \\u00e0 ce que vos clients aimeraient savoir \\u00e0 propos de ce produit.\",\"2\":\"Ajoutez un contenu clair et attrayant. Pas d'inqui\\u00e9tude, vous pourrez toujours le modifier apr\\u00e8s !\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Donnez un nom accrocheur \\u00e0 votre produit.\",\"options\":[\"savepoint\"],\"page\":[\"index.php\\/product\\/new\",\"index.php\\/product\\/form\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Renseignez les informations essentielles dans cet onglet. Les autres onglets vous permettront de g\\u00e9rer les options plus avanc\\u00e9es.\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Ajoutez une ou plusieurs images pour montrer votre produit sous son meilleur jour !\",\"page\":\"index.php\\/product\\/form\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Combien voulez-vous le vendre ?\",\"page\":\"index.php\\/product\\/form\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Bravo ! Vous venez de cr\\u00e9er votre premier produit. Pas mal, non ?\",\"page\":\"index.php\\/product\\/catalog\",\"selector\":\"#product_catalog_list table tr:last-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Donnez \\u00e0 votre boutique sa touche personnelle\",\"subtitle\":{\"1\":\"Qu'est-ce qui rend votre boutique si unique ? Comment voudriez-vous qu'elle soit ?\",\"2\":\"Personnalisez votre th\\u00e8me ou choisissez parmi les nombreux mod\\u00e8les de notre catalogue de th\\u00e8mes.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Commencez par ajouter votre propre logo ici !\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminThemes\",\"selector\":\"#js_theme_form_container .tab-content.panel .btn:first-child\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Si vous cherchez quelque chose de vraiment unique, consultez notre catalogue de th\\u00e8mes.\",\"page\":\"index.php?controller=AdminThemesCatalog\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Soyez pr\\u00eat \\u00e0 recevoir des paiements\",\"subtitle\":{\"1\":\"Comment souhaitez-vous \\u00eatre pay\\u00e9 par vos clients ?\",\"2\":\"Adaptez votre offre \\u00e0 votre march\\u00e9 : ajoutez les modes de paiement les plus populaires aupr\\u00e8s de vos clients !\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Ces modes de paiement sont d\\u00e9j\\u00e0 disponibles sur votre boutique.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Et vous pouvez en ajouter d'autres ici !\",\"page\":\"index.php?controller=AdminPayment\",\"selector\":\".panel:eq(1) table\",\"position\":\"left\"}]},{\"title\":\"Choisissez vos transporteurs\",\"subtitle\":{\"1\":\"Comment souhaitez-vous livrer vos produits ?\",\"2\":\"S\\u00e9lectionnez les transporteurs et mode de livraisons les plus adapt\\u00e9s \\u00e0 vos clients ! Ajoutez votre propret transporteur, ou utilisez un module pr\\u00e9-int\\u00e9gr\\u00e9.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Voici les m\\u00e9thodes de livraisons disponibles sur votre boutique aujourd'hui.\",\"options\":[\"savepoint\"],\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Vous pouvez proposer davantage d'options de livraison en param\\u00e9trant d'autres transporteurs\",\"page\":\"index.php?controller=AdminCarriers\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Am\\u00e9liorez votre boutique avec des modules\",\"subtitle\":{\"1\":\"Ajoutez de nouvelles fonctionnalit\\u00e9s et g\\u00e9rez-en de nombreuses autres gr\\u00e2ce aux modules.\",\"2\":\"Un module peut \\u00eatre d\\u00e9j\\u00e0 pr\\u00e9-install\\u00e9, gratuit \\u00e0 installer ou payant : parcourez notre s\\u00e9lection pour explorer vos possibilit\\u00e9s !\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"D\\u00e9couvrez notre s\\u00e9lection de module dans le premier onglet. Configurez vos modules dans le second, et soyez avertis de notifications dans le troisi\\u00e8me onglet.\",\"options\":[\"savepoint\"],\"page\":\"index.php\\/module\\/catalog\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"\\n<div id=\\\"onboarding-welcome\\\" class=\\\"modal-header\\\">\\n  <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n  <h2 class=\\\"text-center text-md-center\\\">\\u00c0 vous de jouer !<\\/h2>\\n  <p class=\\\"text-center text-md-center\\\">\\n    Vous avez vu l'essentiel, mais il y en a bien plus \\u00e0 d\\u00e9couvrir.<br \\/>\\n    Ces ressources vous aideront \\u00e0 aller plus loin :\\n  <\\/p>\\n  <div class=\\\"container-fluid\\\">\\n    <div class=\\\"row\\\">\\n      <div class=\\\"col-md-6 text-center text-md-center\\\">\\n        <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS16\\/Getting+Started\\\" target=\\\"_blank\\\">\\n          <i class=\\\"material-icons\\\">import_contacts<\\/i><br \\/>\\n          Guide de d\\u00e9marrage\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n          <i class=\\\"material-icons\\\">forum<\\/i><br \\/>\\n          Forum\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n          <i class=\\\"material-icons\\\">school<\\/i><br \\/>\\n          Formation\\n        <\\/a>\\n      <\\/div>\\n      <div class=\\\"col-md-6 text-center text-md-center\\\">\\n        <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n          <i class=\\\"material-icons\\\">videocam<\\/i><br \\/>\\n          Tutoriels Vid\\u00e9o\\n        <\\/a>\\n      <\\/div>\\n    <\\/div>\\n  <\\/div>\\n  <br \\/>\\n  <div class=\\\"text-center text-md-center\\\">\\n      <button class=\\\"btn btn-primary onboarding-button-next\\\">Je suis pr\\u00eat<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/product\\/catalog\"}]}]}, 1, baseDir+\"modules/welcome/welcome-api.php\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Vous êtes perdu ?</p>    <p>Pour continuer, cliquez ici :</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continuer</button>    </div>    <p>Pour quitter le tutoriel de façon définitive, cliquez ici :</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quitter le tutoriel de bienvenue</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Étape <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Suivant</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


      

      
      
      
      

      <div class=\"row \">
        <div class=\"col-xs-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>




  ";
        // line 1136
        $this->displayBlock('content_header', $context, $blocks);
        // line 1137
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1138
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1139
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1140
        echo "
        </div>
      </div>

    </div>

  
</div>


  <div id=\"footer\" class=\"bootstrap hide\">
<!--
  <div class=\"col-sm-2 hidden-xs\">
    <a href=\"http://www.prestashop.com/\" class=\"_blank\">PrestaShop&trade;</a>
    -
    <span id=\"footer-load-time\"><i class=\"icon-time\" title=\"Temps de chargement : \"></i> 0.546s</span>
  </div>

  <div class=\"col-sm-2 hidden-xs\">
    <div class=\"social-networks\">
      <a class=\"link-social link-twitter _blank\" href=\"https://twitter.com/PrestaShop\" title=\"Twitter\">
        <i class=\"icon-twitter\"></i>
      </a>
      <a class=\"link-social link-facebook _blank\" href=\"https://www.facebook.com/prestashop\" title=\"Facebook\">
        <i class=\"icon-facebook\"></i>
      </a>
      <a class=\"link-social link-github _blank\" href=\"https://www.prestashop.com/github\" title=\"Github\">
        <i class=\"icon-github\"></i>
      </a>
      <a class=\"link-social link-google _blank\" href=\"https://plus.google.com/+prestashop/\" title=\"Google\">
        <i class=\"icon-google-plus\"></i>
      </a>
    </div>
  </div>
  <div class=\"col-sm-5\">
    <div class=\"footer-contact\">
      <a href=\"http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-envelope\"></i>
        Contact
      </a>
      /&nbsp;
      <a href=\"http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-bug\"></i>
        Bug Tracker
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-comments\"></i>
        Forum
      </a>
      /&nbsp;
      <a href=\"http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-puzzle-piece\"></i>
        Addons
      </a>
      /&nbsp;
      <a href=\"http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-FR&amp;utm_content=download\" class=\"footer_link _blank\">
        <i class=\"icon-book\"></i>
        Formation
      </a>
                    <p>Questions • Renseignements • Formations :
          <strong>+33 (0)1.40.18.30.04</strong>
        </p>
          </div>
  </div>

  <div class=\"col-sm-3\">
    
  </div>

  <div id=\"go-top\" class=\"hide\"><i class=\"icon-arrow-up\"></i></div>
  -->
</div>



  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t
<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=louis.piresagier%40gmail.com&amp;firstname=Louis&amp;lastname=PIRES--AGIER&amp;website=http%3A%2F%2Flocalhost%2Fstaraddons%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/staraddons/admin560sfdxgf/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link pull-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=louis.piresagier%40gmail.com&amp;firstname=Louis&amp;lastname=PIRES--AGIER&amp;website=http%3A%2F%2Flocalhost%2Fstaraddons%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>
  </div>

";
        // line 1288
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 71
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1136
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1137
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1138
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1139
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1288
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__6024c91581be1a092b5fe37e34fe762d37901d3010e53bdd2ec1f56bdd9068a9";
    }

    public function getDebugInfo()
    {
        return array (  1367 => 1288,  1362 => 1139,  1357 => 1138,  1352 => 1137,  1347 => 1136,  1338 => 71,  1330 => 1288,  1180 => 1140,  1177 => 1139,  1174 => 1138,  1171 => 1137,  1169 => 1136,  100 => 71,  28 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}

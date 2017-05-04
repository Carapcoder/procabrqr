<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
      <div id="overlay"></div>

      <div id="top-ads-banner">
        <div class="img-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top-ads-banner.png" width="729" height="91" alt="Publicidade">
        </div>
      </div>

      <div class="container">
        <header class="top-bars">
          <div id="bar-main" class="bar main">
            <div id="mobile-search">
              <span></span>
            </div>

            <h1 class="logo">
              <a href="/" title="Quatro Rodas">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-quatro-rodas.png" alt="Logo Quatro Rodas" width="187" height="43">
              </a>
            </h1>

            <div id="mobile-button">
              <span></span>
              <span></span>
              <span></span>
            </div>

            <nav id="menu-primary">
              <ul>
                <li class="has-submenu">
                  <a href="/carros">Carros</a>

                  <nav>
                    <aside class="buttons">
                      <ul>
                        <li><a href="">Ver todos os carros</a></li>
                      </ul>
                    </aside>

                    <section class="submenu-list">
                      <ul>
                        <li><a href="">Chevrolet Onix</a></li>
                        <li><a href="">Chevrolet Cobalt</a></li>
                        <li><a href="">Citröen C3</a></li>
                        <li><a href="">Fiat Palio</a></li>
                        <li><a href="">Fiat Toro</a></li>
                        <li><a href="">Ford EcoSport</a></li>
                        <li><a href="">Ford New Fiesta</a></li>
                        <li><a href="">Honda Civic</a></li>
                        <li><a href="">Honda Fit</a></li>
                        <li><a href="">Hyundai HB20</a></li>
                        <li><a href="">Hyundai ix35</a></li>
                        <li><a href="">Jeep Renegade</a></li>
                        <li><a href="">Nissan March</a></li>
                        <li><a href="">Peugeot 208</a></li>
                        <li><a href="">Renault Duster Oroch</a></li>
                        <li><a href="">Renault Sandero</a></li>
                        <li><a href="">Toyota Corolla</a></li>
                        <li><a href="">Toyota Hilux</a></li>
                        <li><a href="">Volkswagen Gol</a></li>
                        <li><a href="">Volkswagen Jetta</a></li>
                      </ul>
                    </section>
                  </nav>
                </li>
                <li class="has-submenu">
                  <a href="">Testes</a>

                  <nav class="tests-images">
                    <aside class="links">
                      <ul>
                        <li class="active"><a href="">Ver tudo de testes</a></li>
                        <li><a href="">Comparativos</a></li>
                        <li><a href="">Impressões</a></li>
                        <li><a href="">Longa duração</a></li>
                        <li><a href="">Teste de pista</a></li>
                      </ul>
                    </aside>

                    <section class="tests">
                      <ul>
                        <li>
                          <a href="">
                            <div class="img-wrapper">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/ford-focus-fastback.png" width="218" height="124">
                            </div>
                            <span class="line1">Ford Focus Fastback</span>
                            <span class="line2">Titanium Plus</span>
                          </a>
                        </li>
                        <li>
                          <a href="">
                            <div class="img-wrapper">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/audi-a6-20-tfsi.png" width="286" height="161">
                            </div>
                            <span class="line1">Audi A6 2.0 TFSI</span>
                            <span class="line2"></span>
                          </a>
                        </li>
                        <li class="featured">
                          <a href="">
                            <span class="line1">Ford EcoSport 1.6 Powershift</span>
                            <span class="line2">EcoSport ganha motor 1.6 atrelado à transmissão automatizada de 6...</span>
                          </a>
                        </li>
                        <li>
                          <a href="">
                            <div class="img-wrapper">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/audi-q3-14.png" width="246" height="139">
                            </div>
                            <span class="line1">Audi Q3 1.4</span>
                            <span class="line2"></span>
                          </a>
                        </li>
                        <li>
                          <a href="">
                            <div class="img-wrapper">
                              <img src="<?php echo get_template_directory_uri(); ?>/images/bmw-420i-cabriolet.png" width="222" height="125">
                            </div>
                            <span class="line1">BMW 420i Cabriolet</span>
                            <span class="line2"></span>
                          </a>
                        </li>
                      </ul>
                    </section>
                  </nav>
                </li>
                <li class="has-submenu">
                  <a href="">Notícias</a>
                </li>
                <li class="has-submenu">
                  <a href="">Auto-serviço</a>
                </li>
                <li class="has-submenu">
                  <a href="">Guia de compras</a>
                </li>
                <li class="has-submenu">
                  <a href="">Tabela FIPE</a>
                </li>
                <li>
                  <a href="">Assine</a>
                </li>
              </ul>
            </nav>

            <div id="top-search">
              <form method="get">
                <input type="text" class="search-field" name="q" placeholder="PESQUISAR">
                <input type="image" class="search-icon" src="<?php echo get_template_directory_uri(); ?>/images/search.png">
              </form>
            </div>
          </div>

          <div class="bar featured hidden-md-down">
            <div class="title-featured">
              + Acessados
            </div>

            <nav id="menu-secondary">
              <ul>
                <li>
                  <a href="">Salão do automóvel</a>
                </li>
                <li>
                  <a href="">Renegade</a>
                </li>
                <li>
                  <a href="">Novo Sandeiro</a>
                </li>
                <li>
                  <a href="">Novo Fox</a>
                </li>
                <li>
                  <a href="">Novo KA</a>
                </li>
                <li>
                  <a href="">HB 20</a>
                </li>
                <li>
                  <a href="">Duster</a>
                </li>
                <li>
                  <a href="">Golf</a>
                </li>
                <li>
                  <a href="">Corolla</a>
                </li>
                <li>
                  <a href="">Civic</a>
                </li>
                <li>
                  <a href="">| A - Z |</a>
                </li>
              </ul>
            </nav>
          </div>
        </header>
      </div>
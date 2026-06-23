<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <script>
    window.dataLayer = window.dataLayer || [];

    window.__AB_TEST_NAME__ = "<?= esc($abTestName ?? 'elementus_lp') ?>";
    window.__AB_VARIANT__ = "<?= esc($abVariant ?? 'A') ?>";

    window.dataLayer.push({
      event: "ab_test_view",
      ab_test_name: window.__AB_TEST_NAME__,
      ab_variant: window.__AB_VARIANT__,
      page_path: window.location.pathname
    });
  </script>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5MNTCG3V');</script>
  <!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elementu's Corrimão — Especialistas em Corrimão e Guarda Corpo</title>
  <meta name="description" content="Há 18 anos sendo a escolha de arquitetos, construtoras e condomínios em todo o Rio Grande do Sul.">
  <link rel="icon" type="image/png" href="<?= base_url('assets/images/favicon.png') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url('css/') ?>style.css">
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5MNTCG3V"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->


  <section id="hero" style="position:relative; min-height:100vh; display:flex; flex-direction:column; justify-content:space-between; padding:64px 32px;">
    <div style="position:absolute;inset:0;z-index:0;">
      <img src="<?= base_url('assets/') ?>images/hero-bg.png" alt="" style="width:100%;height:100%;object-fit:cover;display:block;">
      <div style="position:absolute;inset:0;background:rgba(0,0,0,0.72);"></div>
    </div>

    <div style="position:relative;z-index:1;text-align:center;">
      <div style="display:inline-block;position:relative;width:220px;height:109px;overflow:hidden;">
        <img src="<?= base_url('assets/') ?>images/logo.png" alt="Elementu's" style="position:absolute;left:0;top:-50.6%;width:100%;height:202.22%;">
      </div>
    </div>

    <div class="container-xl px-3" style="position:relative;z-index:1;">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 text-center">
          <h1 style="font-weight:900;font-size:clamp(36px,5.5vw,66px);color:#fff;letter-spacing:-1.8px;line-height:0.9;margin-bottom:32px;">
            Especialistas em Corrimão e Guarda Corpo de alta qualidade
          </h1>

          <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
            <span class="badge-hero">
              <img src="<?= base_url('assets/') ?>icons/circle-check.svg" alt="">
              Assistência Vitalícia
            </span>
            <span class="badge-hero">
              <img src="<?= base_url('assets/') ?>icons/circle-check.svg" alt="">
              Entrega ágil e rigor técnico absoluto
            </span>
            <span class="badge-hero">
              <img src="<?= base_url('assets/') ?>icons/circle-check.svg" alt="">
              Inox certificado (304L e 316L)
            </span>
          </div>

          <p style="font-size:clamp(16px,1.5vw,20px);color:rgba(255,255,255,0.8);line-height:1.5;margin-bottom:32px;">
            Há 18 anos sendo a escolha de arquitetos, construtoras e condomínios em todo o Rio Grande do Sul.
          </p>

          <a href="#formulario" class="btn-primary-custom" onclick="trackABEvent('cta_click', { cta_name: 'solicitar_orcamento_gratis', section: 'hero', destination: 'formulario' })">
            SOLICITAR ORÇAMENTO GRÁTIS
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="produtos" style="background-color:var(--color-white);">
    <div class="section-py container-xl">
      <div class="row justify-content-center mb-5">
        <div class="col-12 text-center">
          <h2 class="section-title">Veja os tipos de Corrimãos e Guarda Corpos que projetamos</h2>
        </div>
      </div>

      <div class="row g-3 justify-content-center">
        <div class="col-6 col-lg-4">
          <div class="produto-card" data-bs-toggle="modal" data-bs-target="#modalOrcamento" onclick="trackABEvent('modal_open', { modal_name: 'orcamento', section: 'produtos', product_name: 'corporate' })">
            <img src="<?= base_url('assets/') ?>images/servicos/corporate.png" alt="Linha Corporate">
            <div class="produto-overlay"></div>
            <div class="produto-info">
              <div class="produto-nome">Corporate</div>
              <button class="btn-primary-custom produto-btn-orcamento" data-bs-toggle="modal" data-bs-target="#modalOrcamento">SOLICITE ORÇAMENTO</button>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="produto-card" data-bs-toggle="modal" data-bs-target="#modalOrcamento" onclick="trackABEvent('modal_open', { modal_name: 'orcamento', section: 'produtos', product_name: 'classic' })">
            <img src="<?= base_url('assets/') ?>images/servicos/classic.png" alt="Linha Classic">
            <div class="produto-overlay"></div>
            <div class="produto-info">
              <div class="produto-nome">Classic</div>
              <button class="btn-primary-custom produto-btn-orcamento" data-bs-toggle="modal" data-bs-target="#modalOrcamento">SOLICITE ORÇAMENTO</button>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="produto-card" data-bs-toggle="modal" data-bs-target="#modalOrcamento" onclick="trackABEvent('modal_open', { modal_name: 'orcamento', section: 'produtos', product_name: 'acessibilidade' })">
            <img src="<?= base_url('assets/') ?>images/servicos/acessibilidade.png" alt="Linha Acessível">
            <div class="produto-overlay"></div>
            <div class="produto-info">
              <div class="produto-nome">Acessibilidade</div>
              <button class="btn-primary-custom produto-btn-orcamento" data-bs-toggle="modal" data-bs-target="#modalOrcamento">SOLICITE ORÇAMENTO</button>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="produto-card" data-bs-toggle="modal" data-bs-target="#modalOrcamento" onclick="trackABEvent('modal_open', { modal_name: 'orcamento', section: 'produtos', product_name: 'steel_glass' })">
            <img src="<?= base_url('assets/') ?>images/servicos/steel-glass.png" alt="Steel Glass">
            <div class="produto-overlay"></div>
            <div class="produto-info">
              <div class="produto-nome">Steel Glass</div>
              <button class="btn-primary-custom produto-btn-orcamento" data-bs-toggle="modal" data-bs-target="#modalOrcamento">SOLICITE ORÇAMENTO</button>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="produto-card" data-bs-toggle="modal" data-bs-target="#modalOrcamento" onclick="trackABEvent('modal_open', { modal_name: 'orcamento', section: 'produtos', product_name: 'office' })">
            <img src="<?= base_url('assets/') ?>images/servicos/office.png" alt="Office">
            <div class="produto-overlay"></div>
            <div class="produto-info">
              <div class="produto-nome">Office</div>
              <button class="btn-primary-custom produto-btn-orcamento" data-bs-toggle="modal" data-bs-target="#modalOrcamento">SOLICITE ORÇAMENTO</button>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="produto-card" data-bs-toggle="modal" data-bs-target="#modalOrcamento" onclick="trackABEvent('modal_open', { modal_name: 'orcamento', section: 'produtos', product_name: 'steel_ocean' })">
            <img src="<?= base_url('assets/') ?>images/servicos/steel-ocean.png" alt="Steel Ocean">
            <div class="produto-overlay"></div>
            <div class="produto-info">
              <div class="produto-nome">Steel Ocean</div>
              <button class="btn-primary-custom produto-btn-orcamento" data-bs-toggle="modal" data-bs-target="#modalOrcamento">SOLICITE ORÇAMENTO</button>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="produto-card" data-bs-toggle="modal" data-bs-target="#modalOrcamento" onclick="trackABEvent('modal_open', { modal_name: 'orcamento', section: 'produtos', product_name: 'linha_especial' })">
            <img src="<?= base_url('assets/') ?>images/servicos/linha-especial.png" alt="Linha Especial">
            <div class="produto-overlay"></div>
            <div class="produto-info">
              <div class="produto-nome">Linha Especial</div>
              <button class="btn-primary-custom produto-btn-orcamento" data-bs-toggle="modal" data-bs-target="#modalOrcamento">SOLICITE ORÇAMENTO</button>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="produto-card" data-bs-toggle="modal" data-bs-target="#modalOrcamento" onclick="trackABEvent('modal_open', { modal_name: 'orcamento', section: 'produtos', product_name: 'steel_colors' })">
            <img src="<?= base_url('assets/') ?>images/servicos/steel-colors.png" alt="Steel Colors">
            <div class="produto-overlay"></div>
            <div class="produto-info">
              <div class="produto-nome">Steel Colors</div>
              <button class="btn-primary-custom produto-btn-orcamento" data-bs-toggle="modal" data-bs-target="#modalOrcamento">SOLICITE ORÇAMENTO</button>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="produto-card" data-bs-toggle="modal" data-bs-target="#modalOrcamento" onclick="trackABEvent('modal_open', { modal_name: 'orcamento', section: 'produtos', product_name: 'essential' })">
            <img src="<?= base_url('assets/') ?>images/servicos/essential.png" alt="Essential">
            <div class="produto-overlay"></div>
            <div class="produto-info">
              <div class="produto-nome">Essential</div>
              <button class="btn-primary-custom produto-btn-orcamento" data-bs-toggle="modal" data-bs-target="#modalOrcamento">SOLICITE ORÇAMENTO</button>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="produto-card" data-bs-toggle="modal" data-bs-target="#modalOrcamento" onclick="trackABEvent('modal_open', { modal_name: 'orcamento', section: 'produtos', product_name: 'guarda_corpo_infinity' })">
            <img src="<?= base_url('assets/') ?>images/infinity.jpeg" alt="Guarda Corpo Infinity">
            <div class="produto-overlay"></div>
            <div class="produto-info">
              <div class="produto-nome">Guarda Corpo Infinity</div>
              <button class="btn-primary-custom produto-btn-orcamento" data-bs-toggle="modal" data-bs-target="#modalOrcamento">SOLICITE ORÇAMENTO</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="stats" style="background-color:var(--color-bg-light);">
    <div class="section-py container-xl">
      <div class="row g-5 align-items-center">

        <div class="col-12 col-lg-6">
          <div class="mb-4">
            <div style="font-weight:900;font-size:clamp(48px,5vw,64px);color:var(--color-text);line-height:40px;">+8500</div>
            <div style="font-weight:900;font-size:clamp(18px,2vw,24px);color:var(--color-text);text-transform:uppercase;line-height:40px;">projetos em todo o Estado.</div>
          </div>

          <p style="font-size:18px;color:var(--color-text-secondary);line-height:1.5;margin-bottom:24px;">
            Atendemos capital, serra, litoral e interior com logística própria e equipe técnica especializada.
          </p>

          <div class="d-block d-lg-none mb-4">
            <a href="#formulario" style="display:block;border-radius:32px;box-shadow:var(--shadow-card-lg);">
              <div style="border-radius:32px;overflow:hidden;">
                <img src="<?= base_url('assets/') ?>images/mapa-rs-pins.png" alt="Projetos em todo o Rio Grande do Sul" style="width:100%;height:auto;display:block;">
              </div>
            </a>
          </div>

          <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6">
              <div class="gold-card">
                <img src="<?= base_url('assets/') ?>icons/shield-check.svg" alt="" class="icon mb-3">
                <div class="card-label">Matéria prima certificada. Assistência vitalícia.</div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="gold-card">
                <img src="<?= base_url('assets/') ?>icons/waves.svg" alt="" class="icon mb-3">
                <div class="card-label">Corrimão de alta pureza com certificado</div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="gold-card">
                <img src="<?= base_url('assets/') ?>icons/settings.svg" alt="" class="icon mb-3">
                <div class="card-label">Entrega de ART (Anotação de Responsabilidade Técnica)</div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="gold-card">
                <img src="<?= base_url('assets/') ?>icons/gavel.svg" alt="" class="icon mb-3">
                <div class="card-label">Conformidade total com NBR 9050 e 14718</div>
              </div>
            </div>
          </div>

          <div class="quote-block mb-4 d-none d-lg-block">
            Não somos uma metalúrgica comum.<br>
            Somos uma empresa focada em soluções em aço inox e vidro.
          </div>

          <a href="#formulario" class="btn-primary-custom d-block d-md-inline-block text-center" onclick="trackABEvent('cta_click', { cta_name: 'validar_projeto_conosco', section: 'stats', destination: 'formulario' })">VALIDAR PROJETO CONOSCO</a>
        </div>

        <div class="col-12 col-lg-6 d-none d-lg-block">
          <a href="#formulario" style="display:block;border-radius:32px;box-shadow:var(--shadow-card-lg);">
            <div style="border-radius:32px;overflow:hidden;">
              <img src="<?= base_url('assets/') ?>images/mapa-rs-pins.png" alt="Projetos em todo o Rio Grande do Sul" style="width:100%;height:auto;display:block;">
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>

  <section id="servicos" style="background-color:var(--color-bg-services);">
    <div class="section-py container-xl">
      <div class="row justify-content-center mb-4">
        <div class="col-12 col-lg-8 text-center">
          <h2 class="section-title mb-3">Veja nossos outros serviços</h2>
          <p class="section-subtitle text-start text-lg-center">Além dos corrimãos e guarda corpos, a Elementu's entrega soluções completas em Revestimentos de Elevadores, Grelhas e Calhas, Batedores de Carrinhos, Projetos Especiais, etc. Utilizamos a mesma metodologia de projeto técnico e assistência vitalícia em todos os nossos serviços, garantindo estética e segurança para o seu projeto.</p>
        </div>
      </div>

      <!-- Mobile carousel (hidden on desktop) -->
      <div id="servicosCarousel" class="carousel slide mb-5 d-block d-lg-none" data-bs-ride="false" data-bs-touch="true">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="#formulario" class="service-card">
              <img src="<?= base_url('assets/') ?>images/servico-elevadores.jpg" alt="Revestimentos de Elevadores" class="service-img">
              <div class="service-label">Revestimentos<br>de Elevadores</div>
            </a>
          </div>
          <div class="carousel-item">
            <a href="#formulario" class="service-card">
              <img src="<?= base_url('assets/') ?>images/servico-grelhas.png" alt="Grelhas e Calhas" class="service-img">
              <div class="service-label">Grelhas<br>e Calhas</div>
            </a>
          </div>
          <div class="carousel-item">
            <a href="#formulario" class="service-card">
              <img src="<?= base_url('assets/') ?>images/servico-batedores.png" alt="Batedores de Carrinhos" class="service-img">
              <div class="service-label">Batedores<br>de Carrinhos</div>
            </a>
          </div>
          <div class="carousel-item">
            <a href="#formulario" class="service-card">
              <img src="<?= base_url('assets/') ?>images/servico-projetos.png" alt="Projetos Especiais" class="service-img">
              <div class="service-label">Projetos<br>Especiais</div>
            </a>
          </div>
        </div>
        <div class="carousel-indicators" style="position:static; margin-top:12px;">
          <button type="button" data-bs-target="#servicosCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
          <button type="button" data-bs-target="#servicosCarousel" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#servicosCarousel" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#servicosCarousel" data-bs-slide-to="3"></button>
        </div>
        <div class="carousel-swipe-hint">
          <i class="fa-solid fa-hand-pointer"></i> arraste para ver mais
        </div>
      </div>

      <!-- Desktop grid (hidden on mobile) -->
      <div class="row g-4 mb-5 d-none d-lg-flex">
        <div class="col-12 col-sm-6 col-lg-3">
          <a href="#formulario" class="service-card">
            <img src="<?= base_url('assets/') ?>images/servico-elevadores.jpg" alt="Revestimentos de Elevadores" class="service-img">
            <div class="service-label">Revestimentos<br>de Elevadores</div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <a href="#formulario" class="service-card">
            <img src="<?= base_url('assets/') ?>images/servico-grelhas.png" alt="Grelhas e Calhas" class="service-img">
            <div class="service-label">Grelhas<br>e Calhas</div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <a href="#formulario" class="service-card">
            <img src="<?= base_url('assets/') ?>images/servico-batedores.png" alt="Batedores de Carrinhos" class="service-img">
            <div class="service-label">Batedores<br>de Carrinhos</div>
          </a>
        </div>
        <div class="col-12 col-sm-6 col-lg-3">
          <a href="#formulario" class="service-card">
            <img src="<?= base_url('assets/') ?>images/servico-projetos.png" alt="Projetos Especiais" class="service-img">
            <div class="service-label">Projetos<br>Especiais</div>
          </a>
        </div>
      </div>

      <div class="text-center">
        <a href="#formulario" class="btn-primary-custom" onclick="trackABEvent('cta_click', { cta_name: 'validar_projeto_conosco', section: 'servicos', destination: 'formulario' })">VALIDAR PROJETO CONOSCO</a>
      </div>
    </div>
  </section>

  <section id="processo" style="background-color:var(--color-white);">
    <div class="section-py container-xl">
      <div class="row justify-content-center mb-5">
        <div class="col-12 text-center">
          <h2 class="section-title mb-2">Processo de Engenharia Exclusiva</h2>
          <p class="section-subtitle">Do primeiro contato até a entrega do projeto</p>
        </div>
      </div>

      <!-- Mobile carousel (hidden on desktop) -->
      <div id="processoCarousel" class="carousel slide mb-5 d-block d-lg-none" data-bs-ride="false" data-bs-touch="true">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="process-step">
              <div class="step-number">1</div>
              <div class="step-title">Consultoria Especializada Gratuita</div>
              <p class="step-desc">Entendemos o fluxo do ambiente, exigências técnicas e estética desejada. Indicamos a liga ideal e o modelo mais adequado.</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="process-step">
              <div class="step-number">2</div>
              <div class="step-title">Medição Técnica no Local</div>
              <p class="step-desc">Um técnico especializado realiza medição presencial e análise estrutural.</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="process-step">
              <div class="step-number">3</div>
              <div class="step-title">Projeto Executivo</div>
              <p class="step-desc">Entregamos um projeto executivo antes da fabricação. Você visualiza exatamente como o produto ficará no ambiente.</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="process-step">
              <div class="step-number">4</div>
              <div class="step-title">Rigor Técnico e ART</div>
              <p class="step-desc">Cada projeto é acompanhado com grande rigor técnico e possui ART. Todos os projetos seguem as normas ABNT (NBR 9050 e NBR 14718).</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="process-step">
              <div class="step-number">5</div>
              <div class="step-title">Fabricação e Entrega</div>
              <p class="step-desc">Com equipes qualificadas e maquinários de ponta garantimos a execução perfeita e fiel ao cronograma da sua obra.</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="process-step">
              <div class="step-number">6</div>
              <div class="step-title">Compromisso Permanente</div>
              <p class="step-desc">Nosso cuidado não termina na instalação. Oferecemos 5 anos de garantia e Assistência Vitalícia para seu projeto.</p>
            </div>
          </div>
        </div>
        <div class="carousel-indicators" style="position:static; margin-top:12px;">
          <button type="button" data-bs-target="#processoCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
          <button type="button" data-bs-target="#processoCarousel" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#processoCarousel" data-bs-slide-to="2"></button>
          <button type="button" data-bs-target="#processoCarousel" data-bs-slide-to="3"></button>
          <button type="button" data-bs-target="#processoCarousel" data-bs-slide-to="4"></button>
          <button type="button" data-bs-target="#processoCarousel" data-bs-slide-to="5"></button>
        </div>
        <div class="carousel-swipe-hint">
          <i class="fa-solid fa-hand-pointer"></i> arraste para ver mais
        </div>
      </div>

      <!-- Desktop grid (hidden on mobile) -->
      <div class="row g-4 mb-5 d-none d-lg-flex">
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="process-step">
            <div class="step-number">1</div>
            <div class="step-title">Consultoria Especializada Gratuita</div>
            <p class="step-desc">Entendemos o fluxo do ambiente, exigências técnicas e estética desejada. Indicamos a liga ideal e o modelo mais adequado.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="process-step">
            <div class="step-number">2</div>
            <div class="step-title">Medição Técnica no Local</div>
            <p class="step-desc">Um técnico especializado realiza medição presencial e análise estrutural.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="process-step">
            <div class="step-number">3</div>
            <div class="step-title">Projeto Executivo</div>
            <p class="step-desc">Entregamos um projeto executivo antes da fabricação. Você visualiza exatamente como o produto ficará no ambiente.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="process-step">
            <div class="step-number">4</div>
            <div class="step-title">Rigor Técnico e ART</div>
            <p class="step-desc">Cada projeto é acompanhado com grande rigor técnico e possui ART. Todos os projetos seguem as normas ABNT (NBR 9050 e NBR 14718).</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="process-step">
            <div class="step-number">5</div>
            <div class="step-title">Fabricação e Entrega</div>
            <p class="step-desc">Com equipes qualificadas e maquinários de ponta garantimos a execução perfeita e fiel ao cronograma da sua obra.</p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="process-step">
            <div class="step-number">6</div>
            <div class="step-title">Compromisso Permanente</div>
            <p class="step-desc">Nosso cuidado não termina na instalação. Oferecemos 5 anos de garantia e Assistência Vitalícia para seu projeto.</p>
          </div>
        </div>
      </div>

      <div class="text-center">
        <a href="#formulario" class="btn-primary-custom" onclick="trackABEvent('cta_click', { cta_name: 'realizar_consultoria_para_o_projeto', section: 'processo', destination: 'formulario' })">REALIZAR CONSULTORIA PARA O PROJETO</a>
      </div>
    </div>
  </section>

  <section id="clientes" style="background-color:var(--color-bg-clients);">
    <div class="section-py container-xl">
      <div class="row justify-content-center mb-5">
        <div class="col-12 col-lg-8 text-center">
          <h2 class="section-title section-title-clientes mb-3">Quem exige o melhor do Corrimão e Guarda Corpo, escolhe Elementu's.</h2>
          <p class="section-subtitle">De grandes corporações a residências de alto padrão, somos referência em todo o Rio Grande do Sul.</p>
        </div>
      </div>

      <!-- Mobile carousel automático (hidden on desktop) -->
      <div id="logosCarousel" class="carousel slide mb-5 d-block d-lg-none" data-bs-ride="carousel" data-bs-interval="1200" data-bs-touch="true">
        <div class="carousel-inner text-center">
          <div class="carousel-item active">
            <img src="<?= base_url('assets/') ?>logos/renner.svg" alt="Lojas Renner" class="client-logo mx-auto" style="height:32px;">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/') ?>logos/santander.svg" alt="Santander" class="client-logo mx-auto" style="height:32px;">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/') ?>logos/melnick.svg" alt="Melnick" class="client-logo mx-auto" style="height:32px;">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/') ?>logos/renault.svg" alt="Renault" class="client-logo mx-auto" style="height:32px;">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/') ?>logos/hyundai.svg" alt="Hyundai" class="client-logo mx-auto" style="height:32px;">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/') ?>logos/poa-airport.svg" alt="Porto Alegre Airport" class="client-logo mx-auto" style="height:32px;">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('assets/') ?>logos/bourbon.svg" alt="Bourbon Shopping" class="client-logo mx-auto" style="height:32px;">
          </div>
        </div>
      </div>

      <!-- Desktop row (hidden on mobile) -->
      <div class="d-none d-lg-flex flex-wrap flex-md-nowrap justify-content-center align-items-center gap-4 gap-lg-5 mb-5">
        <img src="<?= base_url('assets/') ?>logos/renner.svg" alt="Lojas Renner" class="client-logo">
        <img src="<?= base_url('assets/') ?>logos/santander.svg" alt="Santander" class="client-logo">
        <img src="<?= base_url('assets/') ?>logos/melnick.svg" alt="Melnick" class="client-logo">
        <img src="<?= base_url('assets/') ?>logos/renault.svg" alt="Renault" class="client-logo">
        <img src="<?= base_url('assets/') ?>logos/hyundai.svg" alt="Hyundai" class="client-logo">
        <img src="<?= base_url('assets/') ?>logos/poa-airport.svg" alt="Porto Alegre Airport" class="client-logo">
        <img src="<?= base_url('assets/') ?>logos/bourbon.svg" alt="Bourbon Shopping" class="client-logo">
      </div>

      <!-- Mobile carousel (hidden on desktop) -->
      <div id="testimoniaisCarousel" class="carousel slide d-block d-lg-none" data-bs-ride="false" data-bs-touch="true">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="testimonial-card">
              <p class="testimonial-text">Elementu's é nossa parceira de longa data, possui ótimos produtos e soluções além de um ótimo atendimento e muita seriedade.</p>
              <div class="testimonial-name">Gustavo Pinho (Construtora Pinho)</div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial-card">
              <p class="testimonial-text">A Elementu's soube traduzir em uma peça todo efeito que queríamos neste projeto, com sua execução precisa com a qualidade que estávamos buscando.</p>
              <div class="testimonial-name">Liz Ribeiro (Arquiteta)</div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial-card">
              <p class="testimonial-text">A Elementu's com sua técnica e precisão confeccionou com primazia os corrimãos, proporcionando transparência e elegância ao nosso projeto como um todo.</p>
              <div class="testimonial-name">André Pacheco (Arquiteto)</div>
            </div>
          </div>
        </div>
        <div class="carousel-indicators" style="position:static; margin-top:12px;">
          <button type="button" data-bs-target="#testimoniaisCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
          <button type="button" data-bs-target="#testimoniaisCarousel" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#testimoniaisCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-swipe-hint">
          <i class="fa-solid fa-hand-pointer"></i> arraste para ver mais
        </div>
      </div>

      <!-- Desktop grid (hidden on mobile) -->
      <div class="row g-4 d-none d-lg-flex">
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="testimonial-card">
            <p class="testimonial-text">Elementu's é nossa parceira de longa data, possui ótimos produtos e soluções além de um ótimo atendimento e muita seriedade.</p>
            <div class="testimonial-name">Gustavo Pinho (Construtora Pinho)</div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="testimonial-card">
            <p class="testimonial-text">A Elementu's soube traduzir em uma peça todo efeito que queríamos neste projeto, com sua execução precisa com a qualidade que estávamos buscando.</p>
            <div class="testimonial-name">Liz Ribeiro (Arquiteta)</div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="testimonial-card">
            <p class="testimonial-text">A Elementu's com sua técnica e precisão confeccionou com primazia os corrimãos, proporcionando transparência e elegância ao nosso projeto como um todo.</p>
            <div class="testimonial-name">André Pacheco (Arquiteto)</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="formulario" style="background-color:var(--color-white);">
    <div class="section-py container-xl">
      <div class="form-section-wrapper">
        <div class="text-center mb-4">
          <h2 class="form-title mb-2">Solicite seu orçamento gratuito</h2>
          <p class="form-subtitle">Preencha os dados e entraremos em contato.</p>
        </div>

        <form action="/lead" method="POST" onsubmit="trackABEvent('lead_submit', { form_name: 'main_form', lead_channel: 'form', section: 'formulario' })">
          <?= csrf_field() ?>
          <input type="hidden" name="lead_tracking_id" class="lead-tracking-id">
          <input type="hidden" name="ab_test_name" value="<?= esc($abTestName ?? 'elementus_lp') ?>">
          <input type="hidden" name="ab_variant" value="<?= esc($abVariant ?? 'A') ?>">
          <input type="hidden" name="_redirect" value="/obrigado">

          <input type="hidden" name="email_sha256" class="email-sha256">
          <input type="hidden" name="phone_sha256" class="phone-sha256">
          <div class="row g-3 mb-3">
            <div class="col-12 col-md-6">
              <label for="nome">Nome*</label>
              <input type="text" id="nome" name="nome" class="form-control" placeholder="Seu nome completo" required>
            </div>
            <div class="col-12 col-md-6">
              <label for="celular">Celular*</label>
              <input type="tel" id="celular" name="celular" class="form-control" placeholder="(51) 99999-9999" required>
            </div>
            <div class="col-12 col-md-6">
              <label for="email">E-mail*</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="contato@empresa.com" required>
            </div>
            <div class="col-12 col-md-6">
              <label for="regiao">Região*</label>
              <select id="regiao" name="regiao" class="form-select" required>
                <option value="" disabled selected>Selecione uma opção</option>
                <option value="capital">Capital</option>
                <option value="serra">Serra Gaúcha</option>
                <option value="litoral">Litoral</option>
                <option value="interior">Interior</option>
              </select>
            </div>
            <div class="col-12">
              <label for="atuacao">Finalidade da Obra*</label>
              <select id="atuacao" name="atuacao" class="form-select" required>
                <option value="" disabled selected>Selecione uma opção</option>
                <option value="residencial">Residencial</option>
                <option value="comercial">Comercial</option>
                <option value="industrial">Industrial</option>
                <option value="construtora">Construtora / Incorporadora</option>
                <option value="arquiteto">Arquiteto / Designer</option>
                <option value="outro">Outro</option>
              </select>
            </div>
          </div>

          <div class="text-center mb-3">
            <button type="submit" class="btn-white-custom">REALIZAR CONSULTORIA PARA O PROJETO</button>
          </div>
          <p class="form-note">Respostas em até 30min via whatsapp</p>
        </form>
      </div>
    </div>
  </section>

  <section id="faq" style="background-color:var(--color-bg-light);">
    <div class="section-py container-xl">
      <div class="row g-5">
        <div class="col-12 col-lg-4">
          <h2 class="section-title mb-3">Perguntas Frequentes</h2>
          <div class="d-none d-lg-block">
            <p class="section-subtitle mb-4">Ainda com alguma dúvida? Fale agora com um dos nossos especialistas técnicos e receba uma orientação personalizada para o seu projeto.</p>
            <a href="https://api.whatsapp.com/send/?phone=5551989838077&text=Gostaria+de+realizar+um+or%C3%A7amento&type=phone_number&app_absent=0" target="_blank" rel="noopener" class="btn-primary-custom" onclick="trackABEvent('whatsapp_click', { cta_name: 'falar_com_especialista', section: 'faq' })">FALAR COM ESPECIALISTA</a>
          </div>
        </div>

        <div class="col-12 col-lg-8">
          <div class="d-flex flex-column gap-3">

            <div class="faq-item open">
              <div class="faq-header" role="button" aria-expanded="true">
                <span class="faq-question">A Elementu's atende a minha cidade?</span>
                <img src="<?= base_url('assets/') ?>icons/chevron-down.svg" alt="" class="faq-icon">
              </div>
              <div class="faq-body">
                Se ela fica no RS…Sim! Atendemos em todo o estado do Rio Grande do Sul. Possuímos logística própria e equipes de instalação preparadas para deslocamentos, garantindo o mesmo padrão de qualidade na capital, serra, litoral ou interior.
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-header" role="button" aria-expanded="false">
                <span class="faq-question">Como funciona o orçamento? Tem algum custo?</span>
                <img src="<?= base_url('assets/') ?>icons/chevron-down.svg" alt="" class="faq-icon">
              </div>
              <div class="faq-body">
                O orçamento é totalmente gratuito. Basta preencher o formulário ou entrar em contato via WhatsApp. Nossa equipe técnica analisará o seu projeto e retornará em até 30 minutos.
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-header" role="button" aria-expanded="false">
                <span class="faq-question">O material utilizado enferruja com o tempo?</span>
                <img src="<?= base_url('assets/') ?>icons/chevron-down.svg" alt="" class="faq-icon">
              </div>
              <div class="faq-body">
                Não. Trabalhamos exclusivamente com aço inox 304L e 316L, materiais com altíssima resistência à corrosão, mesmo em ambientes úmidos, litorâneos ou de alto tráfego.
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-header" role="button" aria-expanded="false">
                <span class="faq-question">O projeto segue as normas de segurança (ABNT)?</span>
                <img src="<?= base_url('assets/') ?>icons/chevron-down.svg" alt="" class="faq-icon">
              </div>
              <div class="faq-body">
                Sim. Todos os nossos projetos seguem rigorosamente as normas ABNT NBR 9050 e NBR 14718, e são acompanhados de ART (Anotação de Responsabilidade Técnica).
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-header" role="button" aria-expanded="false">
                <span class="faq-question">Vocês fazem projetos personalizados ou apenas modelos padrão?</span>
                <img src="<?= base_url('assets/') ?>icons/chevron-down.svg" alt="" class="faq-icon">
              </div>
              <div class="faq-body">
                Fazemos projetos 100% personalizados. Cada instalação passa por consultoria, medição técnica e projeto executivo antes da fabricação, garantindo que o resultado seja exatamente o que você precisa.
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-header" role="button" aria-expanded="false">
                <span class="faq-question">Qual é o prazo de entrega?</span>
                <img src="<?= base_url('assets/') ?>icons/chevron-down.svg" alt="" class="faq-icon">
              </div>
              <div class="faq-body">
                O prazo varia conforme a complexidade e o volume do projeto. Durante a consultoria, nossa equipe apresentará um cronograma detalhado e cumpriremos fielmente com o acordado.
              </div>
            </div>

          </div>

          <div class="d-block d-lg-none mt-4">
            <p class="section-subtitle mb-4">Ainda com alguma dúvida? Fale agora com um dos nossos especialistas técnicos e receba uma orientação personalizada para o seu projeto.</p>
            <a href="https://api.whatsapp.com/send/?phone=5551989838077&text=Gostaria+de+realizar+um+or%C3%A7amento&type=phone_number&app_absent=0" target="_blank" rel="noopener" class="btn-primary-custom" onclick="trackABEvent('whatsapp_click', { cta_name: 'falar_com_especialista', section: 'faq' })">FALAR COM ESPECIALISTA</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal Orçamento -->
  <div class="modal fade" id="modalOrcamento" tabindex="-1" aria-labelledby="modalOrcamentoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content" style="background:transparent;border:none;box-shadow:none;">
        <div class="form-section-wrapper" style="position:relative;max-width:100%;">
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar" style="position:absolute;top:16px;right:16px;z-index:1;"></button>
          <div class="text-center mb-4">
            <h2 class="form-title mb-2">Solicite seu orçamento gratuito</h2>
            <p class="form-subtitle">Preencha os dados e entraremos em contato.</p>
          </div>
          <form action="/lead" method="POST" onsubmit="trackABEvent('lead_submit', { form_name: 'modal_form', lead_channel: 'form', section: 'modal_orcamento' })">
            <?= csrf_field() ?>
            <input type="hidden" name="lead_tracking_id" class="lead-tracking-id">
            <input type="hidden" name="ab_test_name" value="<?= esc($abTestName ?? 'elementus_lp') ?>">
            <input type="hidden" name="ab_variant" value="<?= esc($abVariant ?? 'A') ?>">
            <input type="hidden" name="_redirect" value="/obrigado">

            <input type="hidden" name="email_sha256" class="email-sha256">
            <input type="hidden" name="phone_sha256" class="phone-sha256">
            <div class="row g-3 mb-3">
              <div class="col-12 col-md-6">
                <label for="modal_nome">Nome*</label>
                <input type="text" id="modal_nome" name="nome" class="form-control" placeholder="Seu nome completo" required>
              </div>
              <div class="col-12 col-md-6">
                <label for="modal_celular">Celular*</label>
                <input type="tel" id="modal_celular" name="celular" class="form-control" placeholder="(51) 99999-9999" required>
              </div>
              <div class="col-12 col-md-6">
                <label for="modal_email">E-mail*</label>
                <input type="email" id="modal_email" name="email" class="form-control" placeholder="contato@empresa.com" required>
              </div>
              <div class="col-12 col-md-6">
                <label for="modal_regiao">Região*</label>
                <select id="modal_regiao" name="regiao" class="form-select" required>
                  <option value="" disabled selected>Selecione uma opção</option>
                  <option value="capital">Capital</option>
                  <option value="serra">Serra Gaúcha</option>
                  <option value="litoral">Litoral</option>
                  <option value="interior">Interior</option>
                </select>
              </div>
              <div class="col-12">
                <label for="modal_atuacao">Finalidade da Obra*</label>
                <select id="modal_atuacao" name="atuacao" class="form-select" required>
                  <option value="" disabled selected>Selecione uma opção</option>
                  <option value="residencial">Residencial</option>
                  <option value="comercial">Comercial</option>
                  <option value="industrial">Industrial</option>
                  <option value="construtora">Construtora / Incorporadora</option>
                  <option value="arquiteto">Arquiteto / Designer</option>
                  <option value="outro">Outro</option>
                </select>
              </div>
            </div>
            <div class="text-center mb-3">
              <button type="submit" class="btn-white-custom">REALIZAR CONSULTORIA PARA O PROJETO</button>
            </div>
            <p class="form-note">Respostas em até 30min via whatsapp</p>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer style="background-color:var(--color-blue);">
    <div class="container-xl py-2">
      <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between gap-3">
        <img src="<?= base_url('assets/') ?>images/logo.png" alt="Elementu's" style="height:100px;width:auto;">
        <p style="font-family:var(--font-footer);font-size:12px;color:#fff;line-height:1.5;margin:0;">Copyright © 2026 Elementu's.</p>
      </div>
    </div>
  </footer>

  <a href="https://api.whatsapp.com/send/?phone=5551989838077&text=Gostaria+de+realizar+um+or%C3%A7amento&type=phone_number&app_absent=0" target="_blank" rel="noopener" class="btn-whatsapp-pulse" onclick="trackABEvent('whatsapp_click', { cta_name: 'whatsapp_float', section: 'floating_button' })">
    <i class="fab fa-whatsapp"></i>
  </a>

  <script>
    function getOrCreateLeadTrackingId() {
      const key = "elementus_lead_tracking_id";
      let id = localStorage.getItem(key);

      if (!id) {
        id = crypto.randomUUID ? crypto.randomUUID() : `${Date.now()}-${Math.random().toString(16).slice(2)}`;
        localStorage.setItem(key, id);
      }

      return id;
    }

    const leadTrackingId = getOrCreateLeadTrackingId();

    document.querySelectorAll(".lead-tracking-id").forEach((input) => {
      input.value = leadTrackingId;
    });

    function trackABEvent(eventName, params = {}) {
      window.dataLayer = window.dataLayer || [];

      const payload = {
        event: eventName,
        ab_test_name: window.__AB_TEST_NAME__ || "elementus_lp",
        ab_variant: window.__AB_VARIANT__ || "unknown",
        ...params
      };

      if (eventName === "lead_submit") {
        payload.lead_tracking_id = leadTrackingId;
      }

      window.dataLayer.push(payload);
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('js/') ?>main.js"></script>
</body>
</html>

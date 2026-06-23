<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <script>
    window.dataLayer = window.dataLayer || [];

    window.__AB_TEST_NAME__ = "<?= esc($abTestName ?? 'elementus_lp') ?>";
    window.__AB_VARIANT__ = "<?= esc($abVariant ?? 'B') ?>";

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


  <style>
    @media (max-width: 991px) {
      #hero { justify-content:flex-start !important; gap:40px; padding-top:48px !important; padding-bottom:48px !important; min-height:auto !important; }
    }
  </style>
  <section id="hero" style="position:relative; min-height:100vh; display:flex; flex-direction:column; justify-content:space-between; padding:64px 32px;">
    <div style="position:absolute;inset:0;z-index:0;">
      <img src="<?= base_url('assets/') ?>images/hero-bg-ppci.jpg" alt="" style="width:100%;height:100%;object-fit:cover;display:block;">
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
            Corrimão em Aço Inox com conformidade para o seu PPCI
          </h1>

          <p style="font-size:clamp(16px,1.5vw,20px);color:rgba(255,255,255,0.8);line-height:1.5;margin-bottom:32px;">
            Há 18 anos fabricando e instalando corrimãos para rotas de fuga, rampas e escadas de emergência no RS.
          </p>

          <div class="d-flex flex-wrap justify-content-center align-items-center gap-4 mb-5">
            <img src="<?= base_url('assets/') ?>logos/renner.svg" alt="Lojas Renner" style="height:16px;width:auto;filter:invert(1) brightness(2);opacity:0.85;">
            <img src="<?= base_url('assets/') ?>logos/santander.svg" alt="Santander" style="height:16px;width:auto;filter:invert(1) brightness(2);opacity:0.85;">
            <img src="<?= base_url('assets/') ?>logos/melnick.svg" alt="Melnick" style="height:28px;width:auto;filter:invert(1) brightness(2);opacity:0.85;">
            <img src="<?= base_url('assets/') ?>logos/renault.svg" alt="Renault" style="height:11px;width:auto;filter:invert(1) brightness(2);opacity:0.85;">
            <img src="<?= base_url('assets/') ?>logos/bourbon.svg" alt="Bourbon Shopping" style="height:30px;width:auto;filter:invert(1) brightness(2);opacity:0.85;">
          </div>

          <a href="#formulario" class="btn-primary-custom" onclick="trackABEvent('cta_click', { cta_name: 'solicitar_orcamento_gratis', section: 'hero', destination: 'formulario' })">
            SOLICITAR ORÇAMENTO GRÁTIS
          </a>
          <p style="font-size:13px;color:rgba(255,255,255,0.6);margin-top:12px;">Retornamos em até 30min via whatsapp</p>
        </div>
      </div>
    </div>
  </section>

  <section id="produtos" style="background-color:var(--color-white);">
    <div class="section-py container-xl">
      <div class="row justify-content-center mb-5">
        <div class="col-12 text-center">
          <h2 class="section-title">Veja os tipos de Corrimãos PPCI que projetamos</h2>
        </div>
      </div>

      <div class="row g-3 justify-content-center">
        <div class="col-6 col-lg-4">
          <div class="produto-card" data-bs-toggle="modal" data-bs-target="#modalOrcamento" onclick="trackABEvent('modal_open', { modal_name: 'orcamento', section: 'produtos', product_name: 'corporate' })">
            <img src="<?= base_url('assets/') ?>images/servicos/ppci-corporate.jpg" alt="Corporate" style="object-fit:cover;">
            <div class="produto-overlay"></div>
            <div class="produto-info">
              <div class="produto-nome">Corporate</div>
              <button class="btn-primary-custom produto-btn-orcamento" data-bs-toggle="modal" data-bs-target="#modalOrcamento">SOLICITE ORÇAMENTO</button>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="produto-card" data-bs-toggle="modal" data-bs-target="#modalOrcamento" onclick="trackABEvent('modal_open', { modal_name: 'orcamento', section: 'produtos', product_name: 'acessibilidade_ppci' })">
            <img src="<?= base_url('assets/') ?>images/servicos/acessibilidade.png" alt="Acessibilidade & PPCI" style="object-fit:cover;">
            <div class="produto-overlay"></div>
            <div class="produto-info">
              <div class="produto-nome">Acessibilidade & PPCI</div>
              <button class="btn-primary-custom produto-btn-orcamento" data-bs-toggle="modal" data-bs-target="#modalOrcamento">SOLICITE ORÇAMENTO</button>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="produto-card" data-bs-toggle="modal" data-bs-target="#modalOrcamento" onclick="trackABEvent('modal_open', { modal_name: 'orcamento', section: 'produtos', product_name: 'office' })">
            <img src="<?= base_url('assets/') ?>images/servicos/ppci-office.jpg" alt="Office" style="object-fit:cover;">
            <div class="produto-overlay"></div>
            <div class="produto-info">
              <div class="produto-nome">Office</div>
              <button class="btn-primary-custom produto-btn-orcamento" data-bs-toggle="modal" data-bs-target="#modalOrcamento">SOLICITE ORÇAMENTO</button>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="produto-card" data-bs-toggle="modal" data-bs-target="#modalOrcamento" onclick="trackABEvent('modal_open', { modal_name: 'orcamento', section: 'produtos', product_name: 'steel_ocean' })">
            <img src="<?= base_url('assets/') ?>images/servicos/steel-ocean.png" alt="Steel Ocean" style="object-fit:cover;">
            <div class="produto-overlay"></div>
            <div class="produto-info">
              <div class="produto-nome">Steel Ocean</div>
              <button class="btn-primary-custom produto-btn-orcamento" data-bs-toggle="modal" data-bs-target="#modalOrcamento">SOLICITE ORÇAMENTO</button>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="produto-card" data-bs-toggle="modal" data-bs-target="#modalOrcamento" onclick="trackABEvent('modal_open', { modal_name: 'orcamento', section: 'produtos', product_name: 'essential' })">
            <img src="<?= base_url('assets/') ?>images/servicos/essential.png" alt="Essential" style="object-fit:cover;object-position:center;">
            <div class="produto-overlay"></div>
            <div class="produto-info">
              <div class="produto-nome">Essential</div>
              <button class="btn-primary-custom produto-btn-orcamento" data-bs-toggle="modal" data-bs-target="#modalOrcamento">SOLICITE ORÇAMENTO</button>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-4">
          <div class="produto-card" data-bs-toggle="modal" data-bs-target="#modalOrcamento" onclick="trackABEvent('modal_open', { modal_name: 'orcamento', section: 'produtos', product_name: 'classic' })">
            <img src="<?= base_url('assets/') ?>images/servicos/ppci-classic.jpg" alt="Classic" style="object-fit:cover;">
            <div class="produto-overlay"></div>
            <div class="produto-info">
              <div class="produto-nome">Classic</div>
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
                <div class="card-label">Certificado de assistência vitalícia</div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="gold-card">
                <img src="<?= base_url('assets/') ?>icons/waves.svg" alt="" class="icon mb-3">
                <div class="card-label">Corrimão inox de alta pureza, com matéria prima certificada</div>
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
                <div class="card-label">Conformidade total com NBR 9050 e NBR 14718</div>
              </div>
            </div>
          </div>

          <div class="quote-block mb-4 d-none d-lg-block">
            Não somos uma metalúrgica comum.<br>
            Somos uma empresa focada em corrimãos PPCI em aço inox e vidro.
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


  <section style="background-color:#78001f;">
    <div class="section-py container-xl">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-8 text-center">
          <h2 style="font-weight:900;font-size:clamp(26px,3.5vw,42px);color:#fff;line-height:1.15;margin-bottom:28px;">
            Evite o risco de reprovações, multas ou atrasos na liberação do seu alvará.
          </h2>
          <p style="font-size:clamp(15px,1.4vw,18px);color:rgba(255,255,255,0.88);line-height:1.7;margin-bottom:36px;">
            Fabricamos e instalamos corrimãos PPCI em aço inox rigorosamente alinhados às normas NBR 9050 e 14718, com diâmetros exatos e entrega de ART <strong>assinada por engenheiro responsável</strong>. É a segurança técnica que a fiscalização exige e dentro do cronograma da sua obra.
          </p>
          <a href="#formulario" class="btn-white-custom" onclick="trackABEvent('cta_click', { cta_name: 'receber_orcamento_gratuito', section: 'risco_reprovacoes', destination: 'formulario' })">RECEBER ORÇAMENTO GRATUITO</a>
        </div>
      </div>
    </div>
  </section>

  <section id="clientes" style="background-color:var(--color-bg-clients);">
    <div class="section-py container-xl">
      <div class="row justify-content-center mb-5">
        <div class="col-12 col-lg-8 text-center">
          <h2 class="section-title section-title-clientes mb-3">Quem exige o melhor do Corrimão, escolhe Elementu's.</h2>
          <p class="section-subtitle">De grandes corporações a arquitetos, somos referência em todo o estado na entrega de Corrimãos PPCI.</p>
        </div>
      </div>

      <div style="max-width:640px;margin:0 auto;padding:0 56px;position:relative;">
      <div id="testimoniaisCarousel" class="carousel slide" data-bs-ride="false" data-bs-touch="true">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="testimonial-card">
              <div style="color:#cda03b;font-size:18px;margin-bottom:8px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
              <p class="testimonial-text" style="color:var(--color-text-secondary);">Elementu's é nossa parceira de longa data, possui ótimos produtos e soluções além de um ótimo atendimento e muita seriedade.</p>
              <div class="testimonial-name">Gustavo Pinho (Construtora Pinho)</div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial-card">
              <div style="color:#cda03b;font-size:18px;margin-bottom:8px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
              <p class="testimonial-text" style="color:var(--color-text-secondary);">A Elementu's soube traduzir em uma peça todo efeito que queríamos neste projeto, com sua execução precisa com a qualidade que estávamos buscando.</p>
              <div class="testimonial-name">Liz Ribeiro (Arquiteta)</div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="testimonial-card">
              <div style="color:#cda03b;font-size:18px;margin-bottom:8px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
              <p class="testimonial-text" style="color:var(--color-text-secondary);">A Elementu's com sua técnica e precisão confeccionou com primazia os corrimãos, proporcionando transparência e elegância ao nosso projeto como um todo.</p>
              <div class="testimonial-name">André Pacheco (Arquiteto)</div>
            </div>
          </div>
        </div>
        <div class="carousel-indicators" style="position:static; margin-top:12px;">
          <button type="button" data-bs-target="#testimoniaisCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
          <button type="button" data-bs-target="#testimoniaisCarousel" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#testimoniaisCarousel" data-bs-slide-to="2"></button>
        </div>
      </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#testimoniaisCarousel" data-bs-slide="prev" style="width:40px;height:40px;background:var(--color-primary);border-radius:50%;top:50%;transform:translateY(-50%);left:0;opacity:1;position:absolute;">
          <span class="carousel-control-prev-icon" style="width:16px;height:16px;"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimoniaisCarousel" data-bs-slide="next" style="width:40px;height:40px;background:var(--color-primary);border-radius:50%;top:50%;transform:translateY(-50%);right:0;opacity:1;position:absolute;">
          <span class="carousel-control-next-icon" style="width:16px;height:16px;"></span>
        </button>
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
          <input type="hidden" name="ab_variant" value="<?= esc($abVariant ?? 'B') ?>">
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
            <button type="submit" class="btn-white-custom">ENVIAR CONTATO</button>
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
            <a href="https://api.whatsapp.com/send/?phone=5551989838077&text=Gostaria+de+realizar+um+or%C3%A7amento&type=phone_number&app_absent=0" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:10px;background:#25d366;color:#fff;font-weight:700;font-size:15px;padding:14px 24px;border-radius:8px;text-decoration:none;letter-spacing:0.5px;" onclick="trackABEvent('whatsapp_click', { cta_name: 'falar_com_especialista', section: 'faq' })">
              <i class="fab fa-whatsapp" style="font-size:20px;"></i> FALAR COM ESPECIALISTA
            </a>
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
                O nosso primeiro atendimento é uma consultoria técnica gratuita. Analisamos o seu projeto ou necessidade e enviamos uma proposta detalhada. Para projetos aprovados, realizamos a visita técnica com medição milimétrica e análise local sem custos adicionais.
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-header" role="button" aria-expanded="false">
                <span class="faq-question">O material utilizado enferruja com o tempo?</span>
                <img src="<?= base_url('assets/') ?>icons/chevron-down.svg" alt="" class="faq-icon">
              </div>
              <div class="faq-body">
                Não. Utilizamos exclusivamente corrimão de Aço Inox das ligas 304L e 316L (esta última indicada para o litoral). São materiais de alta pureza e resistência à oxidação. Além disso, somos a única empresa a oferecer Assistência Vitalícia para garantir a integridade do seu investimento.
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-header" role="button" aria-expanded="false">
                <span class="faq-question">O projeto segue as normas de segurança (ABNT)?</span>
                <img src="<?= base_url('assets/') ?>icons/chevron-down.svg" alt="" class="faq-icon">
              </div>
              <div class="faq-body">
                Rigorosamente. Todos os nossos corrimãos e guarda-corpos são projetados e instalados conforme as normas NBR 9050 e NBR 14718. Além disso, entregamos a ART (Anotação de Responsabilidade Técnica), documento essencial para a regularização da sua obra ou condomínio.
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-header" role="button" aria-expanded="false">
                <span class="faq-question">Vocês fazem projetos personalizados ou apenas modelos padrão?</span>
                <img src="<?= base_url('assets/') ?>icons/chevron-down.svg" alt="" class="faq-icon">
              </div>
              <div class="faq-body">
                Cada projeto na Elementu's é único. Através do nosso processo de Molde 3D, você consegue visualizar exatamente como o corrimão ou guarda corpo ficará no seu espaço antes mesmo da fabricação começar. Fazemos desde designs minimalistas até estruturas corporativas complexas.
              </div>
            </div>

            <div class="faq-item">
              <div class="faq-header" role="button" aria-expanded="false">
                <span class="faq-question">Qual é o prazo de entrega?</span>
                <img src="<?= base_url('assets/') ?>icons/chevron-down.svg" alt="" class="faq-icon">
              </div>
              <div class="faq-body">
                O prazo varia conforme a complexidade do projeto, mas trabalhamos com cronogramas rígidos. Após a aprovação do projeto técnico, a nossa fabricação é otimizada para garantir que a instalação ocorra no momento certo da sua obra, sem atrasos.
              </div>
            </div>

          </div>

          <div class="d-block d-lg-none mt-4">
            <p class="section-subtitle mb-4">Ainda com alguma dúvida? Fale agora com um dos nossos especialistas técnicos e receba uma orientação personalizada para o seu projeto.</p>
            <a href="https://api.whatsapp.com/send/?phone=5551989838077&text=Gostaria+de+realizar+um+or%C3%A7amento&type=phone_number&app_absent=0" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:10px;background:#25d366;color:#fff;font-weight:700;font-size:15px;padding:14px 24px;border-radius:8px;text-decoration:none;letter-spacing:0.5px;" onclick="trackABEvent('whatsapp_click', { cta_name: 'falar_com_especialista', section: 'faq' })">
              <i class="fab fa-whatsapp" style="font-size:20px;"></i> FALAR COM ESPECIALISTA
            </a>
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
          <form action="/lead" method="POST" onsubmit="trackABEvent('lead_submit', { form_name: 'modal_orcamento', lead_channel: 'form', section: 'modal_orcamento' })">
            <?= csrf_field() ?>
            <input type="hidden" name="lead_tracking_id" class="lead-tracking-id">
            <input type="hidden" name="ab_test_name" value="<?= esc($abTestName ?? 'elementus_lp') ?>">
            <input type="hidden" name="ab_variant" value="<?= esc($abVariant ?? 'B') ?>">
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
              <button type="submit" class="btn-white-custom">ENVIAR CONTATO</button>
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

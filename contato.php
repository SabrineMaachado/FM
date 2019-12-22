<!doctype html>
<html lang=pt>

<head>
    <?php include_once 'head.php'; ?>
    <title>FMC Construções</title>
    <!-- <link rel=canonical href=https://FMC.com.br> -->
    <meta name=title content="Reforma & Construção | FMC Construção">
    <meta name=description content="Constução, Reforma, Hidraúlica, Eletrica">
    <meta name=keywords content="construção, manutenção, reforma, hidraúlica, elétrica, Pintura, reforma de casas, manutenção predial, manutenção de empresas">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

    <?php include_once 'header.php'; ?>
    <main class=container-fluid>
        <section class="row banner-container">
            <article class="col-12 topo-contato">
                <div class=bannercontato>
                    <h1 class=banner-title>Contato | FMC Construções</h1>
                    <h3 class=banner-description>Você sonha, nós construimos</h3>
                </div>
            </article>
        </section>
        <section class="row contato">
            <h2 class=col-12><strong>Entre em Contato e Solicite Seu Orçamento</strong></h2>
            <article class="col-12 contato-det col-md-5 contato-cotacao offset-md-2">
                <h4 id=cotacao-online-form>Orçamento Online</h4>
                <div class=contato-form-div>
                    <form action=https://FMCConstrucao.com/mensagem-enviada method=post><small>Envie seus dados e retornamos em breve!</small>
                        <br>
                        <label for=nome>Nome*</label>
                        <br>
                        <input id=nome name=nome placeholder=" Insira seu nome" required>
                        <br>
                        <label for=email>email*</label>
                        <br>
                        <input id=email name=email placeholder=" Insira seu email" required type=email>
                        <br>
                        <label for=tel>Telefone</label>
                        <br>
                        <input id=tel name=tel placeholder=" Insira seu DDD + telefone" type=number>
                        <br>
                        <input id=fonte name=fonte placeholder=" Google, Insta, Indicação...">
                        <br>
                        <label for=mensagem>Mensagem</label>
                        <br>
                        <textarea id=mensagem cols=30 name=mensagem placeholder=" Insira sua mensagem" resize=vertical rows=10></textarea>
                        <br>
                        <input type=submit value=Enviar>
                    </form>
                </div>
            </article>
            <article class="col-12 contato-det col-md-4 contato-dir">
                <h4>Entre em contato</h4>
                <div class=contatos><a href=tel:+5511985535388 rel=noreferrer target=_blank title="Ligar para FMC Construções"><i class="fab fa-whatsapp"></i> 11 985535388</a>
                    <br><a href="mailto:contato@FMCConstruçõesa.com.br?Subject=Contato%20via%20site" rel=noreferrer target=_blank title="Enviar email para FMC Construções"><i class="fa-envelope fas"></i> contato@FMCConstruções.com.br</a>
                </div>
                <h4>Siga @FMC_Construções</h4>
                <div><a href=https://www.instagram.com/FMC_Construções/ rel=noreferrer target=_blank title="Acessar Instagram da FMC Construções"><i class="fab fa-instagram"></i></a> <a href=https://facebook.com/pg/FMCConstruções/ rel=noreferrer target=_blank title="Acessar Facebook da FMC Construções"><i class="fab fa-facebook-square"></i></a>
                </div>
            </article><span class=clearfix></span>
        </section>
        <?php include_once 'categorias.php'; ?>
    </main>
    <?php include_once 'footer.php'; ?>
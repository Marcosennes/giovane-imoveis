<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Giovane Imóveis</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    @yield('css')

    <!-- =======================================================
  * Template Name: Vesperr - v4.3.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    {{-- Recaptcha --}}
    {{-- <script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script> --}}
    {!! htmlScriptTagJsApi(['lang' => 'pt-BR']) !!}
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<!--     <a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=5599111112222" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a> -->
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center" style="padding-bottom: 0px;">
    </header>
    <!-- End Header -->

    {{-- Conteúdo --}}
    <section id="view-conteudo" class="sectionmain" style="margin-top: 15px;">
        @yield('conteudo')
    </section>

    {{-- Footer --}}
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        <strong>Prefeitura de Maricá</strong>. Todos os direitos reservados
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
                        &copy; Desenvolvido por <a href="https://www.marica.rj.gov.br/">Subsecretaria de Governança e
                            Gestão de Tecnologia e Sistemas de Informação</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="{{ route('estagio.index') }}#intro" class="scrollto"><i
                                class="bi bi-house-fill" aria-hidden="true"></i></a></li></a>
                        <a href="{{ route('estagio.index') }}#about" class="scrollto">Sobre</a>
                        <a href="{{ route('estagio.index') }}#faq" class="scrollto">Perguntas Frequentes</a>
                        <a href="{{ route('documentos.politica') }}">Política de Privacidade</a>
                        {{-- <a href="{{ route('documentos.termo') }}">Termos de uso</a> --}}
                    </nav>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div class="cookies-container">
        <div class="cookies-content">
            <p>Utilizamos cookies e tecnologia para aprimorar sua experiência de navegação de acordo com a <a href="{{ route('documentos.politica') }}">Política de Privacidade</a>.</p>
            {{-- <div class="cookies-pref">
                <label><input type="checkbox" checked data-function="analytics">Análise de Uso</label>
                <label><input type="checkbox" checked data-function="marketing">Marketing</label>
            </div> --}}
            <button class="cookies-save">Permitir todos os cookies</button>
        </div>
    </div>
    <!-- Vendor JS Files -->

    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/jquery-ui.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    {{-- Utilizado para pegar a data atual --}}
    <script src="/assets/js/moment.js" type="text/javascript"></script>
    <script type="text/javascript" src="/jquery_mask/jquery.mask.min.js"></script>

    <!-- Cookies js -->
    <script src="/assets/js/cookies.js"></script>
    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>
</body>
@yield('js')

</html>

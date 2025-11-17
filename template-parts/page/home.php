<?php
$user = wp_get_current_user();
$user_id = get_current_user_id();
$nome = is_user_logged_in() ? $user->display_name : '';
$email = is_user_logged_in() ? $user->user_email : '';
$telefone = is_user_logged_in() ? get_field('telefone', 'user_' . $user_id) : '';

$args = array(
    'post_type' => 'templates-marmota',
    'posts_per_page' => -1
)
    ?>
<section class="text-center md:py-10 py-40 md:px-0 px-5 bg-light-orange md:min-h-screen h-auto flex items-start"
    data-aos="fade-down">
    <div class="w-full max-w-5xl mx-auto">
        <img src="<?php echo get_theme_image('logo-marmotinha-temp.png') ?>"
            class="w-20 mx-auto md:mb-20 md:mt-20 mb-10">
        <h1 class="md:text-5xl text-2xl font-medium text-black font-omnes font-semibold">Cê já comprou algo pela
            internet.</h1>
        <h2 class="md:text-5xl text-2xl font-normal text-black font-omnes font-semibold mb-2">Agora é a sua vez de
            vender!</h2>
        <p class="text-lg font-omnes text-black font-normal">toda oferta precisa de <b><span
                    class="text-marmota-orange">uma página clara,<span></span></b>
            persuasiva
            e focada na conversão.</p>
        <button type="button"
            class="mt-4 px-6 py-2 bg-marmota-orange border-4 border-black text-white rounded-full uppercase hover:scale-105 duration-500 transition-all cursor-pointer md:text-lg text-sm"
            act="#planos">QUERO
            UMA PÁGINA QUE VENDE!</button>
    </div>
</section>
<section
    class="w-[102%] bg-marmota-orange border-y-4 border-black relative -rotate-2 py-3 z-40 overflow-x-hidden max-w-[105%] md:-ml-5 -mt-5">
    <div x-data="{}" x-init="$nextTick(() => {
            let ul = $refs.logos;
            ul.insertAdjacentHTML('afterend', ul.outerHTML);
            ul.nextSibling.setAttribute('aria-hidden', 'true');
        })"
        class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)] z-20 top-9">
        <ul
            class="flex items-center justify-center lg:justify-start [&_li]:mx-2 [&_img]:max-w-none animate-infinite-scroll text-black font-poppins">
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
        </ul>
        <ul class="flex items-center justify-center lg:justify-start [&_li]:mx-2 [&_img]:max-w-none animate-infinite-scroll text-black font-poppins"
            aria-hidden="true">
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
        </ul>
        <ul class="flex items-center justify-center lg:justify-start [&_li]:mx-2 [&_img]:max-w-none animate-infinite-scroll text-black font-poppins"
            aria-hidden="true">
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
        </ul>
    </div>
</section>
<section class="w-[102%] bg-medium-orange rotate-2 py-4 -mt-16 overflow-x-hidden max-w-[105%] md:-ml-5 relative z-10">
    <div x-data="{}" x-init="$nextTick(() => {
            let ul = $refs.logos;
            ul.insertAdjacentHTML('afterend', ul.outerHTML);
            ul.nextSibling.setAttribute('aria-hidden', 'true');
        })"
        class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)] z-20 top-9">
        <ul
            class="flex items-center justify-center lg:justify-start [&_li]:mx-2 [&_img]:max-w-none animate-infinite-scroll-reverse text-black font-poppins">
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
        </ul>
        <ul class="flex items-center justify-center lg:justify-start [&_li]:mx-2 [&_img]:max-w-none animate-infinite-scroll-reverse text-black font-poppins"
            aria-hidden="true">
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
        </ul>
        <ul class="flex items-center justify-center lg:justify-start [&_li]:mx-2 [&_img]:max-w-none animate-infinite-scroll-reverse text-black font-poppins"
            aria-hidden="true">
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap font-black">
                    toda oferta precisa de uma página clara, persuasiva e focada na conversão.
                </span>
            </li>
            <li>
                <span class="whitespace-nowrap text-black">
                    •
                </span>
            </li>
        </ul>
    </div>
</section>
<section id="about" class="w-full py-10 bg-[#26282c] px-5 md:px-0 md:py-24 md:pb-24">
    <div class="max-w-5xl mx-auto flex md:flex-row flex-col-reverse md:gap-5">
        <div class="md:w-2/5 md:mb-0 mb-5 relative" data-aos="fade-left">
            <img src="<?php echo get_theme_image('template.png') ?>"
                class="w-4/5 md:right-0 h-[540px] absolute right-10">
        </div>
        <div class="md:w-3/5 md:pl-10 md:pr-32 md:pb-0 pb-10" data-aos="fade-right">
            <h2 class="text-4xl font-omnes font-normal mb-5 text-white">O que é uma<br> <b>Landing Page</b> e por<br>
                que isso
                importa?</h2>
            <p
                class="font-omnes mb-5 border-2 border-marmota-orange text-white rounded-full py-2 md:px-5 px-3 md:w-[86%] md:-ml-5">
                <b><span class="text-marmota-orange">Página de vendas</span></b> é uma estrutura pensada<br> para guiar
                o
                visitante até a decisão de compra.
            </p>
            <p class="font-omnes mb-5 font-light text-white w-[86%]">seja um curso, um serviço ou um produto, vender
                online sem uma página
                de vendas é tipo tentar vender de boca a boca na internet.</p>
            <p class="font-omnes font-bold text-white">vai no grito, mas não vai longe.</p>
        </div>
    </div>
</section>

<section class="w-full md:py-32 py-10 bg-light-orange pt-44">
    <div class="max-w-4xl mx-auto">
        <div class="w-full md:flex md:gap-10 md:mb-16 mb-5 justify-start md:px-0 px-5" data-aos="fade-right">
            <div class="md:w-[45%]">
                <h2 class="md:text-5xl text-3xl font-normal font-omnes md:text-left md:mb-0 mb-5">e por que <br><b>eu
                        deveria <br>ter uma?</b></h2>
            </div>
            <div class="md:w-[80%] w-full md:mt-2.5">
                <p class="mb-5 font-omnes md:text-2xl text-xl">cê já clicou num anúncio <br>e desistiu no meio porque a
                    <br>página
                    era confusa?
                </p>
                <p
                    class="font-omnes md:text-2xl text-xl bg-marmota-orange border-2 border-black text-white rounded-full md:w-4/5 px-5 pb-2 pt-1">
                    — por aqui, a gente não te deixa passar por isso!</p>
            </div>
        </div>
        <div class="w-full flex flex-col items-center justify-center px-5 md:px-0">
            <ul class="mt-4 space-y-2">
                <li class="flex items-center font-omnes font-bold gap-3 mb-5" data-aos="fade-up">
                    <span>
                        <img src="<?php echo get_theme_image('check.png') ?>" class="w-10">
                    </span>
                    <div class="w-full text-marmota-orange">
                        funciona direitinho em qualquer tela — do celular ao computador
                        <p class="font-normal font-omnes text-black">100% responsiva, adaptada pra todos os
                            dispositivos, sem erro de visualização.</p>
                    </div>
                </li>
                <li class="flex items-center font-omnes font-bold gap-3 mb-5" data-aos="fade-up">
                    <span>
                        <img src="<?php echo get_theme_image('check.png') ?>" class="w-10">
                    </span>
                    <div class="w-full text-marmota-orange">
                        navegação segura e confiável pra quem acessa sua página
                        <p class="font-normal font-omnes text-black">certificado SSL incluso, garantindo uma conexão
                            protegida e profissional.</p>
                    </div>
                </li>
                <li class="flex items-center font-omnes font-bold gap-3 mb-5" data-aos="fade-up">
                    <span>
                        <img src="<?php echo get_theme_image('check.png') ?>" class="w-10">
                    </span>
                    <div class="w-full text-marmota-orange">
                        pronta pra receber tráfego pago sem travar ou dar erro
                        <p class="font-normal font-omnes text-black">otimizada pra rodar bem em Google Ads, Facebook Ads
                            e outras estratégias de anúncios.</p>
                    </div>
                </li>
                <li class="flex items-center font-omnes font-bold gap-3 mb-5" data-aos="fade-up">
                    <span>
                        <img src="<?php echo get_theme_image('check.png') ?>" class="w-10">
                    </span>
                    <div class="w-full text-marmota-orange">
                        integrações que facilitam sua rotina e carregamento rápido
                        <p class="font-normal font-omnes text-black">compatível com ferramentas como WhatsApp, CRM e
                            automações de e-mail — e nada de páginas lentas que espantam o cliente.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="w-full md:py-20 py-10 bg-[#26282c]">
    <div class="max-w-5xl mx-auto">
        <div class="w-full flex gap-10 md:mb-16 mb-10 justify-center md:px-0 px-5" data-aos="fade-right">
            <div class="w-full mb-5">
                <h2 class="md:text-5xl text-3xl font-normal font-omnes text-white text-center">chegou até aqui, mas
                    ainda não
                    <br> sabe se é procê? <span class="text-marmota-orange font-semibold">prestenção:</span>
                </h2>
            </div>
        </div>
        <div class="w-full md:flex md:items-center md:justify-center mb-10">
            <div class="md:w-[31%] md:px-0 px-5 md:mb-0 mb-5">
                <div class="w-full border border-marmota-orange px-5 py-7 rounded-2xl" data-aos="fade-up">
                    <p class="font-normal font-omnes text-white">Perfeito para quem quer atrair clientes
                        <span class="text-marmota-orange font-bold">sem depender só de redes sociais.</span>
                    </p>
                </div>
            </div>
            <div class="md:w-[37%] md:px-0 px-5 md:mb-0 mb-5">
                <div class="w-full border border-marmota-orange px-5 py-[16px] rounded-2xl" data-aos="fade-up">
                    <p class="font-normal font-omnes text-white">Indicado para empreendedores, prestadores de serviço e
                        criadores de conteúdo que precisam de uma <span class="text-marmota-orange font-bold">estrutura
                            que apresente seus serviços/produtos.</span></p>
                </div>
            </div>
            <div class="md:w-[32%] md:px-0 px-5 md:mb-0 mb-5">
                <div class="w-full border border-marmota-orange px-5 py-7 rounded-2xl" data-aos="fade-up">
                    <p class="font-normal font-omnes text-white">Se você <span class="text-marmota-orange font-bold">já
                            investiu em tráfego pago e não viu resultado,</span> o problema pode estar na sua página.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center md:px-0 px-5">
            <button type="button"
                class="mt-4 px-6 py-2 bg-marmota-orange text-black font-semibold rounded-full hover:scale-105 duration-500 transition-all cursor-pointer md:text-base text-sm"
                act="#planos">Já
                entendi, quero criar minha página!</button>
        </div>
    </div>
</section>

<section class="w-full md:py-20 py-10 bg-marmota-orange">
    <div class="max-w-5xl mx-auto flex flex-col items-center text-center md:px-0 px-5">
        <h2 class="md:text-5xl text-3xl font-normal font-omnes text-center mb-8 leading-tight text-white"
            data-aos="fade-down">
            rápido e sem enrolação.<br>
            seu site pronto em <span class="text-black font-semibold">5 passos.</span>
        </h2>
        <ul class="mt-4 space-y-2 flex flex-col items-center w-full">
            <li class="flex md:items-center items-start md:flex-row flex-col font-omnes font-bold gap-4 md:w-2/3 mx-auto bg-light-orange border-black border md:px-10 px-3 pb-2 pt-1 rounded-xl w-4/5"
                data-aos="fade-up">
                <div class="md:w-[10%]">
                    <div class="w-full text-left ml-0.5">passo</div>
                    <span
                        class="w-12 h-8 flex items-center justify-center text-xl bg-marmota-orange text-white rounded-md">01</span>
                </div>
                <div class="text-left md:w-[92%] w-full">
                    Escolha seu modelo
                    <p class="font-normal font-omnes">Selecione entre os modelos apresentados.</p>
                </div>
            </li>
            <li class="flex md:items-center items-start md:flex-row flex-col font-omnes font-bold gap-4 md:w-2/3 mx-auto bg-light-orange border-black border md:px-10 px-3 pb-2 pt-1 rounded-xl w-4/5"
                data-aos="fade-up">
                <div class="md:w-[10%]">
                    <div class="w-full text-left ml-0.5">passo</div>
                    <span
                        class="w-12 h-8 flex items-center justify-center text-xl bg-marmota-orange text-white rounded-md">02</span>
                </div>
                <div class="text-left md:w-[92%] w-full">
                    Nos envie as informações
                    <p class="font-normal font-omnes">Se for um modelo personalizado, passamos um briefing rápido para
                        coletar os dados necessários.</p>
                </div>
            </li>
            <li class="flex md:items-center items-start md:flex-row flex-col font-omnes font-bold gap-4 md:w-2/3 mx-auto bg-light-orange border-black border md:px-10 px-3 pb-2 pt-1 rounded-xl w-4/5"
                data-aos="fade-up">
                <div class="md:w-[10%]">
                    <div class="w-full text-left ml-0.5">passo</div>
                    <span
                        class="w-12 h-8 flex items-center justify-center text-xl bg-marmota-orange text-white rounded-md">03</span>
                </div>
                <div class="text-left md:w-[92%] w-full">
                    Produção e ajustes
                    <p class="font-normal font-omnes">Criamos a estrutura da landing page completa.</p>
                </div>
            </li>
            <li class="flex md:items-center items-start md:flex-row flex-col font-omnes font-bold gap-4 md:w-2/3 mx-auto bg-light-orange border-black border md:px-10 px-3 pb-2 pt-1 rounded-xl w-4/5"
                data-aos="fade-up">
                <div class="md:w-[10%]">
                    <div class="w-full text-left ml-0.5">passo</div>
                    <span
                        class="w-12 h-8 flex items-center justify-center text-xl bg-marmota-orange text-white rounded-md">04</span>
                </div>
                <div class="text-left md:w-[92%] w-full">
                    Revisão e finalização
                    <p class="font-normal font-omnes">Cê recebe a versão pronta para aprovação.</p>
                </div>
            </li>
            <li class="flex md:items-center items-start md:flex-row flex-col font-omnes font-bold gap-4 md:w-2/3 mx-auto bg-light-orange border-black border md:px-10 px-3 pb-2 pt-1 rounded-xl w-4/5"
                data-aos="fade-up">
                <div class="md:w-[10%]">
                    <div class="w-full text-left ml-0.5">passo</div>
                    <span
                        class="w-12 h-8 flex items-center justify-center text-xl bg-marmota-orange text-white rounded-md">05</span>
                </div>
                <div class="text-left md:w-[92%] w-full">
                    Entrega e suporte
                    <p class="font-normal font-omnes">Tá no ar. Tá rodando. Tá vendendo. E se precisar, tamo junto.</p>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="w-full md:py-20 py-10 bg-light-orange">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-5xl font-normal font-omnes text-center mb-8 leading-tight" data-aos="fade-down">
            Conheça alguns de nossos modelos</b>
        </h2>
        <div class="w-full md:flex gap-3 md:px-0 px-5">
            <div class="md:w-1/5 w-full max-w-full max-h-full">
                <a href="https://demos.marmotastudiocriativo.com.br/template-1" target="_blank">
                    <img src="<?php echo get_theme_image('template-1.png') ?>"
                        class="w-full transition-all duration-500 hover:scale-105">
                </a>
            </div>
            <div class="md:w-1/5 w-full max-w-full max-h-full">
                <a href="https://demos.marmotastudiocriativo.com.br/template-2" target="_blank">
                    <img src="<?php echo get_theme_image('template-2.png') ?>"
                        class="w-full transition-all duration-500 hover:scale-105">
                </a>
            </div>
            <div class="md:w-1/5 w-full max-w-full max-h-full">
                <a href="https://demos.marmotastudiocriativo.com.br/template-3" target="_blank">
                    <img src="<?php echo get_theme_image('template-3.png') ?>"
                        class="w-full transition-all duration-500 hover:scale-105">
                </a>
            </div>
            <div class="md:w-1/5 w-full max-w-full max-h-full">
                <a href="https://demos.marmotastudiocriativo.com.br/template-4" target="_blank">
                    <img src="<?php echo get_theme_image('template-4.png') ?>"
                        class="w-full transition-all duration-500 hover:scale-105">
                </a>
            </div>
            <div class="md:w-1/5 w-full max-w-full max-h-full">
                <a href="https://demos.marmotastudiocriativo.com.br/template-5" target="_blank">
                    <img src="<?php echo get_theme_image('template-5.png') ?>"
                        class="w-full transition-all duration-500 hover:scale-105">
                </a>
            </div>
        </div>
    </div>
</section>

<section class="w-full md:py-20 py-10 bg-black" data-aos="zoom-in" id="planos">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-5xl font-normal font-omnes text-center mb-14 leading-tight text-white" data-aos="fade-down">
            Escolha o seu:</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-6 relative px-5 md:px-0">
            <div class="w-full max-w-sm md:mb-0 mb-5">
                <div class="w-full pt-6 bg-light-orange border border-gray-200 rounded-4xl shadow-md relative">
                    <div class="text-black border-b mx-5">
                        <h2 class="text-3xl font-bold text-marmota-orange font-omnes text-center mb-1">Vapt Vupt</h2>
                        <p class="text-sm font-light text-[#160603] font-omnes mb-5 text-center">Ideal para quem precisa
                            de uma
                            solução rápida e acessível.</p>
                    </div>
                    <ul role="list" class="space-y-3 my-6 px-5">
                        <li class="flex items-center">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal flex items-center leading-tight text-gray-500 dark:text-gray-400 ms-3">Template
                                pronto <button data-popover-target="popover-pronto" data-popover-placement="bottom-end"
                                    type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                        aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd"></path>
                                    </svg><span class="sr-only">Show information</span></button></span>
                            <div data-popover id="popover-pronto" role="tooltip"
                                class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 w-72 dark:bg-white dark:border-gray-600 dark:text-black">
                                <div class="p-3 space-y-2">
                                    <p class="text-black">Arquivo entregue pronto para uso, sem personalização ou
                                        edições
                                        posteriores da nossa equipe. cê recebe o material e faz os ajustes por conta
                                        própria.</p>
                                </div>
                                <div data-popper-arrow></div>
                            </div>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Integração
                                do seu domínio</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">De
                                acordo com LGPD</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">SSL
                                gratuito ilimitado</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Hospedagem
                                gratuita durante 1 ano</span>
                        </li>
                        <li class="flex line-through decoration-gray-500">
                            <svg class="shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Aviso de novos contatos
                                por
                                e-mail</span>
                        </li>
                        <li class="flex line-through decoration-gray-500">
                            <svg class="shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Instalação de Pixel/Tag
                                (FB/Google)</span>
                        </li>
                        <li class="flex line-through decoration-gray-500">
                            <svg class="shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Integração com e-mail
                                marketing</span>
                        </li>
                        <li class="flex line-through decoration-gray-500">
                            <svg class="shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Minify & Compress /
                                GZIP +
                                HTTP/2</span>
                        </li>
                        <li class="flex line-through decoration-gray-500">
                            <svg class="shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Design 100%
                                personalizado e
                                exclusivo</span>
                        </li>
                        <li class="flex line-through decoration-gray-500">
                            <svg class="shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Copy 100% personalizada
                                e
                                exclusiva </span>
                        </li>
                    </ul>
                    <div class="w-full bg-light-orange pt-5 pb-10 rounded-b-4xl px-5">
                        <div class="w-full flex gap-3 justify-center items-center border-t">
                            <div class="w-full flex flex-col items-center pt-2">
                                <p class="text-4xl font-omnes text-black font-bold">R$ 1100</p>
                                <p class="text-sm font-normal font-omnes text-left text-black">em até 6x sem juros</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex justify-center">
                        <?php if (is_user_logged_in()): ?>
                            <!-- <a
                            href="https://checkout.infinitepay.io/aline_laranjo?items=[{&quot;name&quot;:&quot;Vapt+Vupt&quot;,&quot;price&quot;:100000,&quot;quantity&quot;:1}]&redirect_url=https://marmota.devhouse.com.br/obrigado&customer_name=<?php #echo $nome ?>&customer_email=<?php #echo $email ?>&customer_cellphone=<?php #echo $telefone ?>" target="_blank">Escolher
                            este modelo</a> -->
                            <a href="<?php echo wc_get_cart_url(); ?>?add-to-cart=65"
                                class="w-2/3 mx-auto bg-marmota-orange border-4 border-black hover:scale-105 duration-500 transition-all text-black font-bold rounded-full text-[12px] px-5 py-2.5 uppercase cursor-pointer absolute -bottom-5">Escolher
                                este modelo</a>
                        <?php else: ?>
                            <button type="button"
                                class="modalBtn w-2/3 mx-auto bg-marmota-orange border-4 border-black hover:scale-105 duration-500 transition-all text-black font-bold rounded-full text-[12px] px-5 py-2.5 uppercase cursor-pointer absolute -bottom-5">Escolher
                                este modelo</button>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-sm md:mb-0 mb-5">
                <div class="w-full pt-6 bg-light-orange border border-gray-200 rounded-4xl shadow-md relative">
                    <div class="text-black border-b mx-5">
                        <h2 class="text-3xl font-bold text-marmota-orange font-omnes text-center mb-1">Pitaco</h2>
                        <p class="text-sm font-light text-[#160603] font-omnes mb-5 text-center">Para quem quer um
                            template
                            otimizado, mas ainda precisa de uma mãozinha.</p>
                    </div>
                    <ul role="list" class="space-y-3 my-6 px-5">
                        <li class="flex items-center">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal flex items-center leading-tight text-gray-500 dark:text-gray-400 ms-3">Template
                                <span
                                    class="before:absolute before:w-full relative before:h-0.5 before:bg-gray-500 before:content-[''] before:top-3 mx-[5px]">pronto</span>
                                editado<button data-popover-target="popover-editado" data-popover-placement="bottom-end"
                                    type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                        aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd"></path>
                                    </svg><span class="sr-only">Show information</span></button></span>
                            <div data-popover id="popover-editado" role="tooltip"
                                class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 w-72 dark:bg-white dark:border-gray-600 dark:text-black">
                                <div class="p-3 space-y-2">
                                    <p class="text-black">Uma página de vendas baseada em um template pré-definido,
                                        editada
                                        pela nossa equipe. A partir de um briefing, ajustamos a copy e o design para
                                        alinhar
                                        com a sua identidade visual. A estrutura base do template permanece a mesma.</p>
                                </div>
                                <div data-popper-arrow></div>
                            </div>
                        </li>
                        <li class="flex items-center">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Integração
                                do seu domínio</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">De
                                acordo com LGPD</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">SSL
                                gratuito ilimitado</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Hospedagem
                                gratuita durante 1 ano</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Aviso
                                de
                                novos contatos por e-mail</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Instalação
                                de Pixel/Tag (FB/Google)</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Integração
                                com e-mail marketing</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Minify
                                &
                                Compress / GZIP + HTTP/2</span>
                        </li>
                        <li class="flex line-through decoration-gray-500">
                            <svg class="shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Design 100%
                                personalizado e
                                exclusivo</span>
                        </li>
                        <li class="flex line-through decoration-gray-500">
                            <svg class="shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 ms-3">Copy 100% personalizada
                                e
                                exclusiva</span>
                        </li>
                    </ul>
                    <div class="w-full bg-light-orange pt-5 pb-10 rounded-b-4xl px-5">
                        <div class="w-full flex gap-3 justify-center items-center border-t">
                            <div class="w-full flex flex-col items-center pt-2">
                                <p class="text-4xl font-omnes text-black font-bold">R$ 2000</p>
                                <p class="text-sm font-normal font-omnes text-left text-black">em até 6x sem juros</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex justify-center">
                        <?php if (is_user_logged_in()): ?>
                            <!-- <a
                            href="https://checkout.infinitepay.io/aline_laranjo?items=[{&quot;name&quot;:&quot;Pitaco&quot;,&quot;price&quot;:180000,&quot;quantity&quot;:1}]&redirect_url=https://marmota.devhouse.com.br/obrigado&customer_name=<?php #echo $nome ?>&customer_email=<?php #echo $email ?>&customer_cellphone=<?php #echo $telefone ?>" target="_blank">Escolher
                            este modelo</a> -->
                            <a href="<?php echo wc_get_cart_url(); ?>?add-to-cart=109"
                                class="w-2/3 mx-auto bg-marmota-orange border-4 border-black hover:scale-105 duration-500 transition-all text-black font-bold rounded-full text-[12px] px-5 py-2.5 uppercase cursor-pointer absolute -bottom-5">Escolher
                                este modelo</a>
                        <?php else: ?>
                            <button type="button"
                                class="modalBtn w-2/3 mx-auto bg-marmota-orange border-4 border-black hover:scale-105 duration-500 transition-all text-black font-bold rounded-full text-[12px] px-5 py-2.5 uppercase cursor-pointer absolute -bottom-5">Escolher
                                este modelo</button>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-sm">
                <div class="w-full pt-6 bg-light-orange border border-gray-200 rounded-4xl shadow-md relative">
                    <div class="text-black border-b mx-5">
                        <h2 class="text-3xl font-bold text-marmota-orange font-omnes text-center mb-1">Sob medida</h2>
                        <p class="text-sm font-light text-[#160603] font-omnes mb-5 text-center">Para quem quer uma
                            página com a sua cara e aquele tchan.</p>
                    </div>
                    <ul role="list" class="space-y-3 my-6 px-5">
                        <li class="flex items-center">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal flex items-center leading-tight text-gray-500 dark:text-gray-400 ms-3">Template
                                <span
                                    class="before:absolute before:w-full relative before:h-0.5 before:bg-gray-500 before:content-[''] before:top-3 mx-[5px]">pronto</span>
                                personalizado<button data-popover-target="popover-personalizado"
                                    data-popover-placement="bottom-end" type="button"><svg
                                        class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500" aria-hidden="true"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                            clip-rule="evenodd"></path>
                                    </svg><span class="sr-only">Show information</span></button></span></span>
                            <div data-popover id="popover-personalizado" role="tooltip"
                                class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 w-72 dark:bg-white dark:border-gray-600 dark:text-black">
                                <div class="p-3 space-y-2">
                                    <p class="text-black">Uma landing page criada do zero, com texto, design e estrutura
                                        exclusivos. Desenvolvida e implementada no GreatPages para o seu uso.</p>
                                </div>
                                <div data-popper-arrow></div>
                            </div>
                        </li>
                        <li class="flex items-center">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Integração
                                do seu domínio</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">De
                                acordo com LGPD</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">SSL
                                gratuito ilimitado</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Hospedagem
                                gratuita durante 1 ano</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Aviso
                                de
                                novos contatos por e-mail</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Instalação
                                de Pixel/Tag (FB/Google)</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Integração
                                com e-mail marketing</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Minify
                                &
                                Compress / GZIP + HTTP/2</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span
                                class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Design
                                100% personalizado e exclusivo</span>
                        </li>
                        <li class="flex">
                            <svg class="shrink-0 w-4 h-4 text-marmota-orange dark:text-marmota-orange"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                            </svg>
                            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Copy
                                100% personalizada e exclusiva</span>
                        </li>
                    </ul>
                    <div class="w-full bg-light-orange pt-5 pb-10 rounded-b-4xl px-5">
                        <div class="w-full flex gap-3 justify-center items-center border-t">
                            <div class="w-full flex flex-col items-center pt-2">
                                <p class="text-4xl font-omnes text-black font-bold">R$ 3600</p>
                                <p class="text-sm font-normal font-omnes text-left text-black">em até 6x sem juros</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex justify-center">
                        <?php if (is_user_logged_in()): ?>
                            <a href="<?php echo wc_get_cart_url(); ?>?add-to-cart=111"
                                class="w-2/3 mx-auto bg-marmota-orange border-4 border-black hover:scale-105 duration-500 transition-all text-black font-bold rounded-full text-[12px] px-5 py-2.5 uppercase cursor-pointer absolute -bottom-5">Escolher
                                este modelo</a>
                        <?php else: ?>
                            <button type="button"
                                class="modalBtn w-2/3 mx-auto bg-marmota-orange border-4 border-black hover:scale-105 duration-500 transition-all text-black font-bold rounded-full text-[12px] px-5 py-2.5 uppercase cursor-pointer absolute -bottom-5">Escolher
                                este modelo</button>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-marmota-orange md:py-20 py-10 px-5 md:px-0">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-black text-4xl text-center font-omnes font-bold">Ficou com dúvidas?</h2>
        <p class="text-xl font-normal text-text text-white font-omnes mb-10 text-center">Aqui estão as respostas.</p>
        <div class="w-full">
            <div class="grid">
                <div class="accordion mb-5">
                    <details class="group relative">
                        <summary
                            class="flex justify-left px-5 items-center font-medium cursor-pointer list-none py-3 bg-light-orange border border-black  shadow-accordion rounded-full">
                            <span class="text-black m-0 text-sm md:text-xl font-semibold">Qual é a diferença
                                entre site e landing page?</span>
                            <span class="transition group-open:rotate-180 absolute right-5">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24" class="text-marmota-orange">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <div
                            class="group-open:animate-fadeIn mx-auto border border-solid  border-t-0 p-6 text-black bg-light-orange md:w-[95%] w-[90%]">
                            <p class="mb-8">Site é tipo um escritório virtual. Landing page é seu vendedor.
                                O site pode ser composto de uma única página ou um conjunto de páginas usado para
                                apresentar muitas informações (por exemplo: sobre a empresa, serviços ou produtos
                                oferecidos, clientes, localização, contato).
                                Já a landing page, é uma página criada estrategicamente com a única função de conversão
                                (seja ela compra, cadastro, entrar em contato, etc)</p>
                        </div>
                    </details>
                </div>
                <div class="accordion mb-5">
                    <details class="group relative">
                        <summary
                            class="flex justify-left px-5 items-center font-medium cursor-pointer list-none py-3 bg-light-orange border border-black  shadow-accordion rounded-full">
                            <span class="text-black m-0 text-sm md:text-xl font-semibold">Quais funcionalidades podem ser incluídas no site?</span>
                            <span class="transition group-open:rotate-180 absolute right-5">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24" class="text-marmota-orange">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <div
                            class="group-open:animate-fadeIn mx-auto border border-solid  border-t-0 p-6 text-black bg-light-orange md:w-[95%] w-[90%]">
                            <p class="mb-8">Botão do WhatsApp, Formulários, Integração com E-mail Marketing, Pixel do Facebook e Google Analytics.</p>
                        </div>
                    </details>
                </div>
                <div class="accordion mb-5">
                    <details class="group relative">
                        <summary
                            class="flex justify-left px-5 items-center font-medium cursor-pointer list-none py-3 bg-light-orange border border-black  shadow-accordion rounded-full">
                            <span class="text-black m-0 text-sm md:text-xl font-semibold">Meu site vai funcionar no smartphone e no computador?</span>
                            <span class="transition group-open:rotate-180 absolute right-5">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24" class="text-marmota-orange">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <div
                            class="group-open:animate-fadeIn mx-auto border border-solid  border-t-0 p-6 text-black bg-light-orange md:w-[95%] w-[90%]">
                            <p class="mb-8">Sua página vai rodar lisinha no celular, no PC e até no micro-ondas (se tivesse navegador).</p>
                        </div>
                    </details>
                </div>
                <div class="accordion mb-5">
                    <details class="group relative">
                        <summary
                            class="flex justify-left px-5 items-center font-medium cursor-pointer list-none py-3 bg-light-orange border border-black  shadow-accordion rounded-full">
                            <span class="text-black m-0 text-sm md:text-xl font-semibold">Quanto tempo leva para minha landing page ficar pronta?</span>
                            <span class="transition group-open:rotate-180 absolute right-5">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24" class="text-marmota-orange">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <div
                            class="group-open:animate-fadeIn mx-auto border border-solid  border-t-0 p-6 text-black bg-light-orange md:w-[95%] w-[90%]">
                            <p class="mb-8">O prazo varia conforme o modelo escolhido: Template pronto: entre 24hrs e 48hrs a partir da entrega do domínio. Intermediário: até 7 dias úteis, após a entrega do formulário. Premium: até 20 dias úteis, após a reunião de alinhamento, dependendo da complexidade.</p>
                        </div>
                    </details>
                </div>
                <div class="accordion mb-5">
                    <details class="group relative">
                        <summary
                            class="flex justify-left px-5 items-center font-medium cursor-pointer list-none py-3 bg-light-orange border border-black  shadow-accordion rounded-full">
                            <span class="text-black m-0 text-sm md:text-xl font-semibold">Posso fazer mudanças na minha landing page depois de pronta?</span>
                            <span class="transition group-open:rotate-180 absolute right-5">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24" class="text-marmota-orange">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <div
                            class="group-open:animate-fadeIn mx-auto border border-solid  border-t-0 p-6 text-black bg-light-orange md:w-[95%] w-[90%]">
                            <p class="mb-8">Sim! No modelo Molde Pronto, você edita sozinho. No Intermediário e Premium, oferecemos um período de ajustes após a entrega.</p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text-center md:py-20 py-10 flex items-center bg-light-orange" data-aos="fade-down">
    <div class="w-full max-w-5xl mx-auto px-5 md:px-0">
        <h2 class="md:text-5xl text-2xl font-semibold text-black font-omnes mb-3">Se seus clientes estão<br> na
            internet, sua oferta
            tem<br> que estar também.</h2>
        <p class="text-xl font-normal text-black font-omnes mb-2">A melhor hora para ter uma landing page foi ontem.
            <span class="font-bold text-marmota-orange">A segunda melhor é agora.</span>
        </p>
        <button type="button"
            class="mt-4 px-6 py-2 bg-transparent border font-bold border-marmota-orange text-marmota-orange rounded-full hover:scale-105 duration-500 transition-all cursor-pointer md:text-base text-sm"
            act="#planos">Garanta
            já a sua!</button>
    </div>
</section>
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
<section class="text-center md:py-10 py-40 md:px-0 px-5 bg-gray-200 md:min-h-screen h-auto flex items-center"
    data-aos="fade-down">
    <div class="w-full max-w-4xl mx-auto">
        <h1 class="md:text-5xl text-2xl font-normal text-custom-gray font-omnes">Cê já comprou algo pela internet.</h1>
        <h2 class="md:text-5xl text-2xl font-normal text-black font-omnes mb-2">Agora é a <b>sua vez</b> de vender.</h2>
        <p class="text-lg font-omnes text-black font-normal">toda oferta precisa <b>de uma página clara,</b>
            persuasiva
            e focada na conversão.</p>
        <button type="button"
            class="mt-4 px-6 py-2 bg-black text-white rounded-full uppercase hover:scale-105 duration-500 transition-all cursor-pointer md:text-base text-sm"
            act="#planos">QUERO
            UMA PÁGINA QUE VENDE!</button>
    </div>
</section>
<section class="w-full md:py-24 py-10">
    <div class="max-w-4xl mx-auto md:flex md:gap-5">
        <div class="md:w-1/2 w-full md:mb-0 mb-5" data-aos="fade-left">
            <img src="<?php echo get_theme_image('retangulo2.png') ?>" class="w-full h-[320px]">
        </div>
        <div class="md:w-1/2 w-full md:pl-10 md:px-0 px-5" data-aos="fade-right">
            <h2 class="text-4xl font-omnes font-normal mb-5">O que é uma<br> <b>Landing Page</b> e por<br> que isso
                importa?</h2>
            <p class="font-omnes mb-5 text-custom-gray"><b>Página de vendas</b> é uma estrutura pensada<br> para guiar o
                visitante até a decisão de compra.</p>
            <p class="font-omnes mb-5 font-light text-custom-gray">seja um curso, um serviço ou um produto, vender
                online sem uma página
                de vendas é tipo tentar vender de boca a boca na internet.</p>
            <p class="font-omnes font-bold text-black">vai no grito, mas não vai longe.</p>
        </div>
    </div>
</section>
<section class="w-full md:py-20 py-10">
    <div class="max-w-4xl mx-auto">
        <div class="w-full md:flex md:gap-10 mb-16 justify-center md:px-0 px-5" data-aos="fade-right">
            <div class="md:w-[30%] w-full">
                <h2 class="md:text-5xl text-3xl font-normal font-omnes md:text-right md:mb-0 mb-5">e por que <br><b>eu
                        deveria <br>ter uma?</b></h2>
            </div>
            <div class="md:w-[70%] w-full flex flex-col justify-end">
                <p class="mb-5 font-omnes md:text-2xl text-xl">cê já clicou num anúncio <br>e desistiu no meio porque a
                    <br>página
                    era confusa?
                </p>
                <p class="font-omnes md:text-2xl text-xl">— por aqui, a gente não te deixa passar por isso!</p>
            </div>
        </div>
        <div class="w-full flex flex-col items-center justify-center px-5 md:px-0">
            <div class="flex justify-center w-full">
                <ul class="mt-4 space-y-6 flex flex-col items-start max-w-3xl w-full px-4 md:ml-[150px]">
                    <li class="flex items-start font-omnes font-bold gap-5 mb-5" data-aos="fade-up">
                        <span class="shrink-0">
                            <img src="<?php echo get_theme_image('check.png') ?>" class="w-10">
                        </span>
                        <div>
                            100% otimizada
                            <p class="font-normal font-omnes">Sua página perfeita em qualquer dispositivo. Do celular ao desktop, sem erro.</p>
                        </div>
                    </li>
                    <li class="flex items-start font-omnes font-bold gap-5 mb-5" data-aos="fade-up">
                        <span class="shrink-0">
                            <img src="<?php echo get_theme_image('check.png') ?>" class="w-10">
                        </span>
                        <div>
                            Segurança garantida
                            <p class="font-normal font-omnes">Certificado SSL incluso, garantindo uma navegação segura e profissional.</p>
                        </div>
                    </li>
                    <li class="flex items-start font-omnes font-bold gap-5 mb-5" data-aos="fade-up">
                        <span class="shrink-0">
                            <img src="<?php echo get_theme_image('check.png') ?>" class="w-10">
                        </span>
                        <div>
                            Pronta para rodar anúncios
                            <p class="font-normal font-omnes">Otimizada para Google Ads, Facebook Ads e qualquer estratégia de tráfego pago.</p>
                        </div>
                    </li>
                    <li class="flex items-start font-omnes font-bold gap-5 mb-5" data-aos="fade-up">
                        <span class="shrink-0">
                            <img src="<?php echo get_theme_image('check.png') ?>" class="w-10">
                        </span>
                        <div>
                            Configuração e carregamento otimizados
                            <p class="font-normal font-omnes">Integração com ferramentas como WhatsApp, CRM e automação de e-mails, se necessário; e nada de páginas lentas que fazem seu cliente desistir!</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="w-full md:py-20 py-10">
    <div class="max-w-4xl mx-auto">
        <div class="w-full md:flex md:gap-10 md:items-center md:justify-center mb-10">
            <div class="md:w-1/3 w-full md:hidden block mb-10" data-aos="fade-left">
                <img src="<?php echo get_theme_image('retangulo2.png') ?>" class="w-full h-[320px]">
            </div>
            <div class="md:w-2/3 w-full md:px-0 px-5">
                <div class="w-full flex gap-10 md:mb-16 mb-10 justify-center md:px-0 px-5" data-aos="fade-right">
                    <div class="w-full">
                        <h2 class="md:text-4xl text-3xl font-normal font-omnes text-left">chegou até aqui, <br>mas ainda não
                            sabe se <br>é
                            procê? <b>Prestenção:</b></h2>
                    </div>
                </div>
                <ul class="mt-4 space-y-2">
                    <li class="flex items-center font-omnes font-bold gap-7 mb-5" data-aos="fade-up">
                        <span class="mr-2">
                            <img src="<?php echo get_theme_image('check.png') ?>" class="w-10">
                        </span>
                        <div class="w-full">
                            <p class="font-normal font-omnes">Perfeito para quem quer atrair clientes
                                sem depender só de redes sociais.</p>
                        </div>
                    </li>
                    <li class="flex items-center font-omnes font-bold gap-7 mb-5" data-aos="fade-up">
                        <span class="mr-2">
                            <img src="<?php echo get_theme_image('check.png') ?>" class="w-10">
                        </span>
                        <div class="w-full">
                            <p class="font-normal font-omnes">Se você já investiu em tráfego pago e não viu
                                resultado, o problema pode estar na sua página.</p>
                        </div>
                    </li>
                    <li class="flex items-center font-omnes font-bold gap-7 mb-5" data-aos="fade-up">
                        <span class="mr-2">
                            <img src="<?php echo get_theme_image('check.png') ?>" class="w-10">
                        </span>
                        <div class="w-full">
                            <p class="font-normal font-omnes">Indicado para empreendedores, prestadores de serviço e
                                criadores de
                                conteúdo que precisam de uma estrutura que apresente seus serviços/produtos</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="md:w-1/3 w-full md:block hidden" data-aos="fade-left">
                <img src="<?php echo get_theme_image('retangulo2.png') ?>" class="w-full h-[320px] md:h-full">
            </div>
        </div>
        <div class="w-full flex justify-center md:px-0 px-5">
            <button type="button"
                class="mt-4 px-6 py-2 bg-black text-white rounded-full uppercase hover:scale-105 duration-500 transition-all cursor-pointer md:text-base text-sm"
                act="#planos">Já
                entendi, quero criar minha página!</button>
        </div>
    </div>
</section>
<section class="w-full md:py-20 py-10">
    <div class="max-w-4xl mx-auto flex flex-col items-center text-center md:px-0 px-5">
        <h2 class="md:text-5xl text-3xl font-normal font-omnes text-center mb-8 leading-tight" data-aos="fade-down">
            rápido e sem enrolação.<br>
            seu site pronto em <b>5 passos.</b>
        </h2>
        <ul class="mt-4 space-y-6 flex flex-col items-center md:pl-36 w-full">
            <li class="flex items-center font-omnes font-bold gap-4 w-full" data-aos="fade-up">
                <div class="md:w-[8%] w-[15%]">
                    <span
                        class="w-10 h-10 flex items-center justify-center text-xl bg-black text-white rounded-full">1</span>
                </div>
                <div class="text-left md:w-[92%] w-[85%]">
                    Escolha seu modelo
                    <p class="font-normal font-omnes">Selecione entre os modelos apresentados.</p>
                </div>
            </li>
            <li class="flex items-center font-omnes font-bold gap-4 w-full" data-aos="fade-up">
                <div class="md:w-[8%] w-[15%]">
                    <span
                        class="w-10 h-10 flex items-center justify-center text-xl bg-black text-white rounded-full">2</span>
                </div>
                <div class="text-left md:w-[92%] w-[85%]">
                    Nos envie as informações
                    <p class="font-normal font-omnes md:w-2/3">Se for um modelo personalizado, passamos um briefing
                        rápido para
                        coletar os dados necessários.</p>
                </div>
            </li>
            <li class="flex items-center font-omnes font-bold gap-4 w-full" data-aos="fade-up">
                <div class="md:w-[8%] w-[15%]">
                    <span
                        class="w-10 h-10 flex items-center justify-center text-xl bg-black text-white rounded-full">3</span>
                </div>
                <div class="text-left md:w-[92%] w-[85%]">
                    Produção e ajustes
                    <p class="font-normal font-omnes">Criamos a estrutura da landing page completa.</p>
                </div>
            </li>
            <li class="flex items-center font-omnes font-bold gap-4 w-full" data-aos="fade-up">
                <div class="md:w-[8%] w-[15%]">
                    <span
                        class="w-10 h-10 flex items-center justify-center text-xl bg-black text-white rounded-full">4</span>
                </div>
                <div class="text-left md:w-[92%] w-[85%]">
                    Revisão e finalização
                    <p class="font-normal font-omnes">Cê recebe a versão pronta para aprovação.</p>
                </div>
            </li>
            <li class="flex items-center font-omnes font-bold gap-4 w-full" data-aos="fade-up">
                <div class="md:w-[8%] w-[15%]">
                    <span
                        class="w-10 h-10 flex items-center justify-center text-xl bg-black text-white rounded-full">5</span>
                </div>
                <div class="text-left md:w-[92%] w-[85%]">
                    Entrega e suporte
                    <p class="font-normal font-omnes">Tá no ar. Tá rodando. Tá vendendo. E se precisar, tamo junto.
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="w-full md:py-20 py-10">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-5xl font-normal font-omnes text-center mb-8 leading-tight" data-aos="fade-down">
            Conheça nossos modelos
        </h2>

        <?php
        // Recupera as categorias do post tipo "templates"
        $categories = get_terms(array(
            'taxonomy' => 'template_category_marmota',
            'orderby'  => 'name',
            'order'    => 'ASC',
            'hide_empty' => false,
        ));

        if ($categories) : ?>
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
                    <?php foreach ($categories as $category) : ?>
                        <li class="me-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg cursor-pointer" id="category-<?php echo $category->term_id; ?>-tab" data-tabs-target="#category-<?php echo $category->term_id; ?>" type="button" role="tab" aria-controls="category-<?php echo $category->term_id; ?>" aria-selected="false"><?php echo $category->name; ?></button>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div id="default-styled-tab-content">
                <?php foreach ($categories as $category) : ?>
                    <div class="hidden" id="category-<?php echo $category->term_id; ?>" role="tabpanel" aria-labelledby="category-<?php echo $category->term_id; ?>-tab">
                        <?php
                        // Recupera os posts associados a cada categoria
                        $args = array(
                            'post_type'      => 'templates_marmota',
                            'posts_per_page' => -1,
                            'tax_query'      => array(
                                array(
                                    'taxonomy' => 'template_category_marmota',
                                    'field'    => 'id',
                                    'terms'    => $category->term_id,
                                    'operator' => 'IN',
                                ),
                            ),
                        );

                        $query = new WP_Query($args);
                        ?>

                        <div class="flex gap-4">
                            <?php while ($query->have_posts()) : $query->the_post();
                                if (has_post_thumbnail()) :
                            ?>
                                    <div class="md:w-1/5 w-full">
                                        <a href="<?php echo get_field('url' , get_the_ID()) ?>" target="_blank">
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"
                                                class="w-full transition-all duration-500 hover:scale-105">
                                        </a>
                                    </div>
                            <?php
                                endif;
                            endwhile; ?>
                        </div>
                        <?php

                        wp_reset_postdata();
                        ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<section class="max-w-5xl mx-auto md:py-20 py-10" data-aos="zoom-in" id="planos">
    <h2 class="text-5xl font-normal font-omnes text-center mb-14 leading-tight" data-aos="fade-down">
        Escolha o seu:</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-6 relative px-5 md:px-0">
        <div class="w-full max-w-sm md:mb-0 mb-5">
            <div class="py-3 rounded-t-3xl w-4/5 mx-auto bg-black flex justify-center px-5 items-center">
                <h2 class="text-3xl font-bold text-white font-omnes text-center">Vapt Vupt</h2>
            </div>
            <div class="w-full pt-6 bg-white border border-gray-200 rounded-4xl shadow-md relative">
                <div class="text-black px-10">
                    <h2 class="text-sm font-light text-[#160603] font-omnes mb-5">Ideal para quem precisa de uma
                        solução rápida e acessível.</h2>
                </div>
                <ul role="list" class="space-y-3 my-6 px-10">
                    <li class="flex items-center">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
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
                            class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                            <div class="p-3 space-y-2">
                                <p class="text-black">Arquivo entregue pronto para uso, sem personalização ou edições
                                    posteriores da nossa equipe. cê recebe o material e faz os ajustes por conta
                                    própria.</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span
                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Integração
                            do seu domínio</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">De
                            acordo com LGPD</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">SSL
                            gratuito ilimitado</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
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
                        <span class="text-base font-normal leading-tight text-gray-500 ms-3">Aviso de novos contatos por
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
                        <span class="text-base font-normal leading-tight text-gray-500 ms-3">Minify & Compress / GZIP +
                            HTTP/2</span>
                    </li>
                    <li class="flex line-through decoration-gray-500">
                        <svg class="shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 ms-3">Design 100% personalizado e
                            exclusivo</span>
                    </li>
                    <li class="flex line-through decoration-gray-500">
                        <svg class="shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 ms-3">Copy 100% personalizada e
                            exclusiva </span>
                    </li>
                </ul>
                <div class="w-full bg-custom-gray pt-5 pb-12 rounded-b-4xl px-10">
                    <div class="w-full flex gap-3 justify-center items-center">
                        <div class="w-[30%]">
                            <h2 class="text-sm font-normal font-omnes text-left text-white">em até <br>6x de</h2>
                        </div>
                        <div class="w-[70%]">
                            <div class="w-full flex items-center">
                                <span class="text-4xl text-white font-omnes font-bold">R$</span>
                                <span class="text-4xl text-white font-omnes font-bold tracking-tight">173,33</span>
                            </div>
                            <p class="text-xs text-white">ou R$ 1000,00 à vista no Pix</p>
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-center">
                    <?php if (is_user_logged_in()): ?>
                        <!-- <a
                            href="https://checkout.infinitepay.io/aline_laranjo?items=[{&quot;name&quot;:&quot;Vapt+Vupt&quot;,&quot;price&quot;:100000,&quot;quantity&quot;:1}]&redirect_url=https://marmota.devhouse.com.br/obrigado&customer_name=<?php #echo $nome 
                                                                                                                                                                                                                                                        ?>&customer_email=<?php #echo $email 
                                                                                                                                                                                                                                                                            ?>&customer_cellphone=<?php #echo $telefone 
                                                                                                                                                                                                                                                                                                    ?>" target="_blank">Escolher
                            este modelo</a> -->
                        <a href="<?php echo wc_get_cart_url(); ?>?add-to-cart=65" class="w-2/3 mx-auto bg-black hover:scale-105 duration-500 transition-all text-white font-medium rounded-full text-sm px-5 py-2.5 uppercase cursor-pointer absolute -bottom-5">Escolher este modelo</a>
                    <?php else: ?>
                        <button type="button"
                            class="modalBtn w-2/3 mx-auto bg-black hover:scale-105 duration-500 transition-all text-white font-medium rounded-full text-sm px-5 py-2.5 uppercase cursor-pointer absolute -bottom-5">Escolher
                            este modelo</button>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="w-full max-w-sm md:mb-0 mb-5">
            <div class="py-3 rounded-t-3xl w-4/5 mx-auto bg-black flex justify-center px-5 items-center">
                <h2 class="text-3xl font-bold text-white font-omnes text-center">Pitaco</h2>
            </div>
            <div class="w-full pt-6 bg-white border border-gray-200 rounded-4xl shadow-md relative">
                <div class="text-black px-10">
                    <h2 class="text-sm font-light text-[#160603] font-omnes mb-5">Para quem quer um template
                        otimizado, mas ainda precisa de uma mãozinha.</h2>
                </div>
                <ul role="list" class="space-y-3 my-6 px-10">
                    <li class="flex items-center">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
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
                            class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                            <div class="p-3 space-y-2">
                                <p class="text-black">Uma página de vendas baseada em um template pré-definido, editada
                                    pela nossa equipe. A partir de um briefing, ajustamos a copy e o design para alinhar
                                    com a sua identidade visual. A estrutura base do template permanece a mesma.</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span
                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Integração
                            do seu domínio</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">De
                            acordo com LGPD</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">SSL
                            gratuito ilimitado</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span
                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Hospedagem
                            gratuita durante 1 ano</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Aviso de
                            novos contatos por e-mail</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span
                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Instalação
                            de Pixel/Tag (FB/Google)</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span
                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Integração
                            com e-mail marketing</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Minify &
                            Compress / GZIP + HTTP/2</span>
                    </li>
                    <li class="flex line-through decoration-gray-500">
                        <svg class="shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 ms-3">Design 100% personalizado e
                            exclusivo</span>
                    </li>
                    <li class="flex line-through decoration-gray-500">
                        <svg class="shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 ms-3">Copy 100% personalizada e
                            exclusiva</span>
                    </li>
                </ul>
                <div class="w-full bg-custom-gray pt-5 pb-12 rounded-b-4xl px-10">
                    <div class="w-full flex gap-3 justify-center items-center">
                        <div class="w-[30%]">
                            <h2 class="text-sm font-normal font-omnes text-left text-white">em até <br>6x de</h2>
                        </div>
                        <div class="w-[70%]">
                            <div class="w-full flex items-center">
                                <span class="text-4xl text-white font-omnes font-bold">R$</span>
                                <span class="text-4xl text-white font-omnes font-bold tracking-tight">311,66</span>
                            </div>
                            <p class="text-xs text-white">ou R$ 1800,00 à vista no Pix</p>
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-center">
                    <?php if (is_user_logged_in()): ?>
                        <!-- <a
                            href="https://checkout.infinitepay.io/aline_laranjo?items=[{&quot;name&quot;:&quot;Pitaco&quot;,&quot;price&quot;:180000,&quot;quantity&quot;:1}]&redirect_url=https://marmota.devhouse.com.br/obrigado&customer_name=<?php #echo $nome 
                                                                                                                                                                                                                                                    ?>&customer_email=<?php #echo $email 
                                                                                                                                                                                                                                                                        ?>&customer_cellphone=<?php #echo $telefone 
                                                                                                                                                                                                                                                                                                ?>" target="_blank">Escolher
                            este modelo</a> -->
                        <a href="<?php echo wc_get_cart_url(); ?>?add-to-cart=69" class="w-2/3 mx-auto bg-black hover:scale-105 duration-500 transition-all text-white font-medium rounded-full text-sm px-5 py-2.5 uppercase cursor-pointer absolute -bottom-5">Escolher este modelo</a>
                    <?php else: ?>
                        <button type="button"
                            class="modalBtn w-2/3 mx-auto bg-black hover:scale-105 duration-500 transition-all text-white font-medium rounded-full text-sm px-5 py-2.5 uppercase cursor-pointer absolute -bottom-5">Escolher
                            este modelo</button>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="w-full max-w-sm">
            <div class="py-3 rounded-t-3xl w-4/5 mx-auto bg-black flex justify-center px-5 items-center">
                <h2 class="text-3xl font-bold text-white font-omnes text-center">Sob medida</h2>
            </div>
            <div class="w-full pt-6 bg-white border border-gray-200 rounded-4xl shadow-md relative">
                <div class="text-black px-10">
                    <h2 class="text-sm font-light text-[#160603] font-omnes mb-5">Para quem quer uma página com a sua
                        cara e aquele tchan.</h2>
                </div>
                <ul role="list" class="space-y-3 my-6 px-10">
                    <li class="flex items-center">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
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
                            class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                            <div class="p-3 space-y-2">
                                <p class="text-black">Uma landing page criada do zero, com texto, design e estrutura
                                    exclusivos. Desenvolvida e implementada no GreatPages para o seu uso.</p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span
                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Integração
                            do seu domínio</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">De
                            acordo com LGPD</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">SSL
                            gratuito ilimitado</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span
                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Hospedagem
                            gratuita durante 1 ano</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Aviso de
                            novos contatos por e-mail</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span
                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Instalação
                            de Pixel/Tag (FB/Google)</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span
                            class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Integração
                            com e-mail marketing</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Minify &
                            Compress / GZIP + HTTP/2</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Design
                            100% personalizado e exclusivo</span>
                    </li>
                    <li class="flex">
                        <svg class="shrink-0 w-4 h-4 text-blue-700 dark:text-blue-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">Copy
                            100% personalizada e exclusiva</span>
                    </li>
                </ul>
                <div class="w-full bg-custom-gray pt-5 pb-12 rounded-b-4xl px-10">
                    <div class="w-full flex gap-3 justify-center items-center">
                        <div class="w-[30%]">
                            <h2 class="text-sm font-normal font-omnes text-left text-white">em até <br>6x de</h2>
                        </div>
                        <div class="w-[70%]">
                            <div class="w-full flex items-center">
                                <span class="text-4xl text-white font-omnes font-bold">R$</span>
                                <span class="text-4xl text-white font-omnes font-bold tracking-tight">605,00</span>
                            </div>
                            <p class="text-xs text-white">ou R$ 3500,00 à vista no Pix</p>
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-center">
                    <?php if (is_user_logged_in()): ?>
                        <!-- <a
                            href="https://checkout.infinitepay.io/aline_laranjo?items=[{&quot;name&quot;:&quot;Sob+medida&quot;,&quot;price&quot;:350000,&quot;quantity&quot;:1}]&redirect_url=https://marmota.devhouse.com.br/obrigado&customer_name=<?php #echo $nome ?>&customer_email=<?php #echo $email ?>&customer_cellphone=<?php #echo $telefone ?>" target="_blank">Escolher
                            este modelo</a> -->
                            <a href="<?php echo wc_get_cart_url(); ?>?add-to-cart=69" class="w-2/3 mx-auto bg-black hover:scale-105 duration-500 transition-all text-white font-medium rounded-full text-sm px-5 py-2.5 uppercase cursor-pointer absolute -bottom-5">Escolher este modelo</a>
                    <?php else: ?>
                        <button type="button"
                            class="modalBtn w-2/3 mx-auto bg-black hover:scale-105 duration-500 transition-all text-white font-medium rounded-full text-sm px-5 py-2.5 uppercase cursor-pointer absolute -bottom-5">Escolher
                            este modelo</button>
                    <?php endif ?>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="bg-white md:py-20 py-10 px-5 md:px-0">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-black text-4xl text-center font-medium">Ficou com dúvidas?</h2>
        <p class="text-xl font-normal text-custom-gray mb-10 text-center">Aqui estão as respostas.</p>
        <div class="w-full">
            <div class="grid">
                <div class="accordion mb-5">
                    <details class="group relative">
                        <summary
                            class="flex justify-left px-5 items-center font-medium cursor-pointer list-none py-3 bg-black shadow-accordion rounded-full">
                            <span class="text-white uppercase m-0 text-sm md:text-xl font-semibold">Como contratar meus
                                serviços</span>
                            <span class="transition group-open:rotate-180 absolute right-5">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24" class="text-white">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <div class="group-open:animate-fadeIn w-full border border-solid  border-t-0 p-6 text-black">
                            <p class="mb-8">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </details>
                </div>
                <div class="accordion mb-5">
                    <details class="group relative">
                        <summary
                            class="flex justify-left px-5 items-center font-medium cursor-pointer list-none py-3 bg-black shadow-accordion rounded-full">
                            <span class="text-white uppercase m-0 text-sm md:text-xl font-semibold">Como contratar meus
                                serviços</span>
                            <span class="transition group-open:rotate-180 absolute right-5">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24" class="text-white">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <div class="group-open:animate-fadeIn w-full border border-solid  border-t-0 p-6 text-black">
                            <p class="mb-8">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </details>
                </div>
                <div class="accordion mb-5">
                    <details class="group relative">
                        <summary
                            class="flex justify-left px-5 items-center font-medium cursor-pointer list-none py-3 bg-black shadow-accordion rounded-full">
                            <span class="text-white uppercase m-0 text-sm md:text-xl font-semibold">Como contratar meus
                                serviços</span>
                            <span class="transition group-open:rotate-180 absolute right-5">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24" class="text-white">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <div class="group-open:animate-fadeIn w-full border border-solid  border-t-0 p-6 text-black">
                            <p class="mb-8">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </details>
                </div>
                <div class="accordion mb-5">
                    <details class="group relative">
                        <summary
                            class="flex justify-left px-5 items-center font-medium cursor-pointer list-none py-3 bg-black shadow-accordion rounded-full">
                            <span class="text-white uppercase m-0 text-sm md:text-xl font-semibold">Como contratar meus
                                serviços</span>
                            <span class="transition group-open:rotate-180 absolute right-5">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24" class="text-white">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <div class="group-open:animate-fadeIn w-full border border-solid  border-t-0 p-6 text-black">
                            <p class="mb-8">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </details>
                </div>
                <div class="accordion mb-5">
                    <details class="group relative">
                        <summary
                            class="flex justify-left px-5 items-center font-medium cursor-pointer list-none py-3 bg-black shadow-accordion rounded-full">
                            <span class="text-white uppercase m-0 text-sm md:text-xl font-semibold">Como contratar meus
                                serviços</span>
                            <span class="transition group-open:rotate-180 absolute right-5">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24" class="text-white">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <div class="group-open:animate-fadeIn w-full border border-solid  border-t-0 p-6 text-black">
                            <p class="mb-8">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </details>
                </div>
                <div class="accordion mb-5">
                    <details class="group relative">
                        <summary
                            class="flex justify-left px-5 items-center font-medium cursor-pointer list-none py-3 bg-black shadow-accordion rounded-full">
                            <span class="text-white uppercase m-0 text-sm md:text-xl font-semibold">Como contratar meus
                                serviços</span>
                            <span class="transition group-open:rotate-180 absolute right-5">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    viewBox="0 0 24 24" width="24" class="text-white">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <div class="group-open:animate-fadeIn w-full border border-solid  border-t-0 p-6 text-black">
                            <p class="mb-8">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book. It
                                has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text-center md:py-20 py-10 flex items-center" data-aos="fade-down">
    <div class="w-full max-w-4xl mx-auto px-5 md:px-0">
        <h2 class="md:text-4xl text-2xl font-semibold text-black font-omnes mb-3">Se seus clientes estão<br> na
            internet, sua oferta
            tem<br> que estar também.</h2>
        <p class="text-xl font-normal text-black font-omnes mb-2">A melhor hora para ter uma landing page foi ontem.
            <b>A segunda melhor é agora.</b>
        </p>
        <button type="button"
            class="mt-4 px-6 py-2 bg-black text-white rounded-full uppercase hover:scale-105 duration-500 transition-all cursor-pointer md:text-base text-sm"
            act="#planos">Garanta
            já a sua!</button>
    </div>
</section>
</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="w-full bg-black py-10" role="contentinfo">
	<?php do_action('tailpress_footer'); ?>
	<div class="max-w-4xl mx-auto flex justify-center flex-col items-center">
		<h2 class="text-base text-white">Termos de Uso | Políticas de Privacidade | Políticas de Cookies</h2>
		<p class="text-base text-white">Marmota © - todos os direitos reservados.</p>
	</div>
	<div id="customModal"
		class="fixed inset-0 flex items-center justify-center h-screen w-full z-50 black-opacity-0.5 hidden md:px-0 px-5">
		<!-- <div class="bg-gradient-to-r from-black to-gray-800 p-6 rounded-lg shadow-lg w-lg relative"> -->
		<div class="bg-black py-6 px-8 shadow-lg w-lg relative rounded-2xl">
			<button id="closeModal"
				class="absolute top-2 right-2 text-white hover:text-white cursor-pointer">&times;</button>
			<h2 class="text-2xl font-semibold font-neue text-white mb-5">Faça login para adquirir um plano</h2>
			<p class="text-sm font-neue text-white"></p>
			<form class="max-w-full mx-auto hidden" id="loginForm">
				<div class="w-full mb-2">
					<div class="relative z-0 w-full mb-5 group">
						<input type="email" name="floating_login_email" id="floating_login_email"
							class="block py-2.5 w-full text-base text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white focus:outline-none focus:ring-0 focus:border-white peer px-5"
							placeholder=" " required />
						<label for="floating_login_email"
							class="peer-focus:font-medium absolute text-base text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 px-5 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
					</div>
					<div class="relative z-0 w-full mb-5 group">
						<input type="password" name="floating_login_password" id="floating_login_password"
							class="block py-2.5 w-full text-base text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white focus:outline-none focus:ring-0 focus:border-white peer px-5"
							placeholder=" " required />
						<label for="floating_login_password"
							class="peer-focus:font-medium absolute text-base text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 px-5 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Senha</label>
					</div>
					<div class="w-full mb-10 flex justify-end">
						<p class="text-sm text-white">Ainda não possui cadastro? <a href="#" id="registerModal">Registre-se</a></p>
					</div>
				</div>
				<button type="button" id="sendLogin"
					class="text-black bg-white focus:ring-4 focus:outline-none w-full font-medium rounded-lg text-base md:w-28 cursor-pointer px-5 py-2.5 text-center dark:bg-white dark:hover:bg-white dark:focus:ring-blue-800">Entrar</button>
			</form>
			<form class="max-w-full mx-auto" id="registerForm">
				<div class="w-full mb-2">
					<div class="relative z-0 w-full mb-5 group">
						<input type="text" name="register_name" id="register_name"
							class="block py-2.5 w-full text-base text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white focus:outline-none focus:ring-0 focus:border-white peer px-5"
							placeholder=" " required />
						<label for="register_name"
							class="peer-focus:font-medium absolute text-base text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 px-5 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nome
							completo</label>
					</div>
					<div class="relative z-0 w-full mb-5 group">
						<input type="email" name="register_email" id="register_email"
							class="block py-2.5 w-full text-base text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white focus:outline-none focus:ring-0 focus:border-white peer px-5"
							placeholder=" " required />
						<label for="register_email"
							class="peer-focus:font-medium absolute text-base text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 px-5 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
					</div>
					<div class="relative z-0 w-full mb-5 group">
						<input type="password" name="register_password" id="register_password"
							class="block py-2.5 w-full text-base text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white focus:outline-none focus:ring-0 focus:border-white peer px-5"
							placeholder=" " required />
						<label for="register_password"
							class="peer-focus:font-medium absolute text-base text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 px-5 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Senha</label>
					</div>
					<div class="relative z-0 w-full group">
						<input type="tel" name="register_telefone" id="register_telefone"
							class="block py-2.5 w-full text-base text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white focus:outline-none focus:ring-0 focus:border-white peer px-5"
							placeholder=" " required />
						<label for="register_telefone"
							class="peer-focus:font-medium absolute text-base text-white dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 px-5 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-focus:dark:text-white peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Telefone</label>
					</div>
				</div>
				<div class="w-full mb-10 flex justify-end">
					<p class="text-sm text-white">Já possui cadastro? <a href="#" id="loginModal">Faça login</a></p>
				</div>
				<button type="button" id="registerLeadWpp"
					class="text-black bg-white focus:ring-4 focus:outline-none w-full font-medium rounded-lg text-base md:w-28 cursor-pointer px-5 py-2.5 text-center dark:bg-white dark:hover:bg-white dark:focus:ring-blue-800">Registrar</button>
			</form>
		</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>
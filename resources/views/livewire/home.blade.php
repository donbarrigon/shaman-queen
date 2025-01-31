<div class="min-h-screen bg-slate-950">
    <!-- Navigation -->
    {{-- <nav class="bg-gray-900/80 backdrop-blur-sm fixed w-full z-50 border-b border-gray-800"> --}}
    <nav class="bg-neutral-900 backdrop-blur-sm fixed w-full z-50 border-b border-gray-800">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="text-3xl font-['Crimson_Text'] text-gray-200">
                    La Santa Muerte
                </div>
                
                <!-- Navigation Links -->
                <div class="flex items-center space-x-8">
                    <a href="#" class="text-gray-300 hover:text-red-700 transition-colors duration-300 font-medium">Inicio</a>
                    <a href="#" class="text-gray-300 hover:text-red-700 transition-colors duration-300 font-medium">Rituales</a>
                    <a href="#" class="text-gray-300 hover:text-red-700 transition-colors duration-300 font-medium">Servicios</a>
                    <a href="#" class="text-gray-300 hover:text-red-700 transition-colors duration-300 font-medium">Contacto</a>
                    
                    <!-- Profile Dropdown -->
                    <div class="relative group">
                        <div class="cursor-pointer">
                            <img src="/api/placeholder/40/40" alt="Profile" class="w-10 h-10 rounded-full border-2 border-red-900 group-hover:border-red-700 transition-colors duration-300">
                        </div>
                        <div class="absolute right-0 w-48 mt-2 bg-gray-900 border border-gray-800 rounded-md shadow-2xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800">Mi Perfil</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800">Configuración</a>
                                <div class="border-t border-gray-800"></div>
                                <a href="#" class="block px-4 py-2 text-sm text-red-500 hover:bg-gray-800">Cerrar Sesión</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div 
        style="background-image: url('{{ asset('storage/images/home15.jpeg') }}')" 
        class="bg-cover bg-center relative h-screen py-12 flex items-end justify-center"
    >
    <div class="w-full py-6 bg-gradient-to-r from-neutral-900/85 via-neutral-900 to-neutral-900/85">
        <div class="container mx-auto px-6"> <!-- Contenedor principal centrado -->

            <div class="flex lg:justify-center space-x-6 overflow-x-auto snap-x snap-mandatory"> <!-- Contenedor de scroll -->
                <!-- contenedores de los textos -->
                <div class="relative text-center px-3 min-w-[384px] max-w-96 snap-start flex flex-col justify-between min-h-44">
                    <h1 class="text-2xl font-['Cinzel_Decorative'] text-gray-200 mb-3">Guía Espiritual</h1>
                    <p class="text-xl text-gray-400 max-w-2xl mx-auto font-['Crimson_Text']">
                        Bienvenido a un espacio sagrado donde la sabiduría de los ancestros se une con tu camino espiritual. Soy guía espiritual y chamana, dedicada a ayudarte a encontrar claridad, equilibrio y sanación en tu vida.
                    </p>
                    <button class="mt-4 w-full bg-red-900/80 hover:bg-red-800 text-gray-200 py-2 rounded transition-colors duration-300">
                        Ver mas
                    </button>
                </div>
                
                <div class="relative text-center px-3 min-w-[384px] max-w-96 snap-start flex flex-col justify-between mim-h-44">
                    <h1 class="text-2xl font-['Cinzel_Decorative'] text-gray-200 mb-3">Servicios</h1>
                    <p class="text-xl text-gray-400 max-w-2xl mx-auto font-['Crimson_Text']">
                        A través de rituales ancestrales, lecturas de energía y conexión con los espíritus, te ofrezco herramientas para transformar tu realidad y desbloquear tu verdadero potencial.
                    </p>
                    <button class="mt-4 w-full bg-red-900/80 hover:bg-red-800 text-gray-200 py-2 rounded transition-colors duration-300">
                        Ir al chat
                    </button>
                </div>
                
                <div class="relative text-center px-3 min-w-[384px] max-w-96 snap-start flex flex-col justify-between min-h-44">
                    <h1 class="text-2xl font-['Cinzel_Decorative'] text-gray-200 mb-3">Consultas en vivo</h1>
                    <p class="text-xl text-gray-400 max-w-2xl mx-auto font-['Crimson_Text']">
                        ¿Listo para comenzar tu viaje? Hablame y déjame guiarte hacia la luz que ya llevas dentro.
                    </p>
                    <button class="mt-4 w-full bg-red-900/80 hover:bg-red-800 text-gray-200 py-2 rounded transition-colors duration-300">
                        Ir a servicios
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Cards Section -->
    <div class="container mx-auto px-6 py-24">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- Santa Muerte Description -->
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-lg border border-gray-800 hover:border-red-900 transition-colors duration-300">
                <h3 class="text-xl font-['Cinzel_Decorative'] text-gray-200 mb-4">La Santa Muerte</h3>
                <p class="text-gray-400 font-['Crimson_Text']">
                    Guardiana de las almas y protectora de los desamparados. Su poder ancestral guía a quienes buscan respuestas en la oscuridad.
                </p>
            </div>

            <!-- Testimonials -->
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-lg border border-gray-800 hover:border-red-900 transition-colors duration-300">
                <h3 class="text-xl font-['Cinzel_Decorative'] text-gray-200 mb-4">Testimonios</h3>
                <div class="space-y-4">
                    <blockquote class="text-gray-400 font-['Crimson_Text']">
                        "Su guía me ayudó a encontrar el camino cuando todo era oscuridad."
                        <footer class="text-gray-500 mt-1">— María R.</footer>
                    </blockquote>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="bg-gray-900/50 backdrop-blur-sm p-6 rounded-lg border border-gray-800 hover:border-red-900 transition-colors duration-300">
                <h3 class="text-xl font-['Cinzel_Decorative'] text-gray-200 mb-4">Contáctame</h3>
                <form class="space-y-4">
                    <input type="text" placeholder="Nombre" class="w-full bg-gray-800/50 border border-gray-700 rounded px-3 py-2 text-gray-300 focus:outline-none focus:border-red-900">
                    <input type="email" placeholder="Email" class="w-full bg-gray-800/50 border border-gray-700 rounded px-3 py-2 text-gray-300 focus:outline-none focus:border-red-900">
                    <button class="w-full bg-red-900/80 hover:bg-red-800 text-gray-200 py-2 rounded transition-colors duration-300">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-950 bg-[url('/ruta/imagen.jpg')] border-t border-gray-800">
        <div class="container mx-auto px-6 py-12">
            <div class="flex flex-col items-center">
                <div class="text-2xl font-['Cinzel_Decorative'] text-gray-200 mb-6">
                    La Santa Muerte
                </div>
                
                <!-- Social Links -->
                <div class="flex space-x-6 mb-8">
                    <a href="#" class="text-gray-400 hover:text-red-700 transition-colors duration-300">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-red-700 transition-colors duration-300">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-red-700 transition-colors duration-300">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>
                </div>

                <!-- Contact Info -->
                <div class="text-center">
                    <p class="text-gray-400 font-['Crimson_Text']">contacto@santamuerte.com</p>
                    <p class="text-gray-400 font-['Crimson_Text']">Tel: +52 (555) 555-5555</p>
                    <p class="text-gray-400 font-['Crimson_Text']">Ciudad de México, México</p>
                </div>
            </div>
        </div>
    </footer>
</div>
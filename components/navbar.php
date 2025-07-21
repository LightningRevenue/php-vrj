<?php
function renderNavbar() {
    // Get current page for active state
    $current_page = $_SERVER['REQUEST_URI'];
    ?>
    <nav class="bg-black text-white shadow-lg">
        <!-- Add Nunito font -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <h1 class="text-sm text-gray-500 font-nunito">Servicii Tarot | Dezlegare Blesteme si Farmece</h1>
                    <a href="/" class="flex items-center">
                        <span class="text-2xl font-bold font-nunito">✨ Tarot</span>
                    </a>                
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="text-white hover:text-red-500" onclick="toggleMobileMenu()">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>

                <!-- Desktop Center Menu -->
                <div class="hidden md:flex items-center justify-center flex-1 px-4 font-nunito">
                    <a href="/" class="mx-4 py-2 hover:text-red-500 transition-colors duration-200 <?php echo $current_page == '/' ? 'text-red-500' : ''; ?>">Dezlegare Farmece</a>
                    <a href="/servicii" class="mx-4 py-2 hover:text-red-500 transition-colors duration-200 <?php echo $current_page == '/servicii' ? 'text-red-500' : ''; ?>">Dezelegare Blesteme</a>
                    <a href="/despre" class="mx-4 py-2 hover:text-red-500 transition-colors duration-200 <?php echo $current_page == '/despre' ? 'text-red-500' : ''; ?>">Servicii Tarot</a>
                    <a href="/blog" class="mx-4 py-2 hover:text-red-500 transition-colors duration-200 <?php echo $current_page == '/blog' ? 'text-red-500' : ''; ?>">Tamaduitoare Bucuresti</a>
                </div>

                <!-- Contact Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="tel:+40768599488" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-full font-nunito transition-colors duration-200 flex items-center">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        +40 768 599 488
                    </a>
                    <a href="https://wa.me/40768599488" target="_blank" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-full font-nunito transition-colors duration-200 flex items-center">
                        <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        WhatsApp
                    </a>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden mt-4">
                <div class="flex flex-col space-y-4 font-nunito">
                    <a href="/" class="hover:text-red-500 transition-colors duration-200 <?php echo $current_page == '/' ? 'text-red-500' : ''; ?>">Dezlegare Farmece</a>
                    <a href="/servicii" class="hover:text-red-500 transition-colors duration-200 <?php echo $current_page == '/servicii' ? 'text-red-500' : ''; ?>">Dezelegare Blesteme</a>
                    <a href="/despre" class="hover:text-red-500 transition-colors duration-200 <?php echo $current_page == '/despre' ? 'text-red-500' : ''; ?>">Servicii Tarot</a>
                    <a href="/blog" class="hover:text-red-500 transition-colors duration-200 <?php echo $current_page == '/blog' ? 'text-red-500' : ''; ?>">Tamaduitoare Bucuresti</a>
                    <div class="flex flex-col space-y-2">
                        <a href="tel:+40768599488" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-full text-center transition-colors duration-200 flex items-center justify-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            +40 768 599 488
                        </a>
                        <a href="https://wa.me/40768599488" target="_blank" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-full text-center transition-colors duration-200 flex items-center justify-center">
                            <svg class="w-4 h-4 mr-2" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <style>
        .font-nunito {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <script>
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }
    </script>
    <?php
}
?>  
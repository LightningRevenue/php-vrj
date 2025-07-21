<?php
require_once 'components/navbar.php';
require_once 'components/footer.php';
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicii De Tarot | Vrăjitoarea Larisa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&amp;family=Nunito:wght@400;600;700&amp;display=swap" rel="stylesheet">
    <style>
        .font-playfair { font-family: 'Playfair Display', serif; }
        .font-nunito { font-family: 'Nunito', sans-serif; }
    </style>
</head>
<body class="min-h-screen flex flex-col bg-black text-white">
    <?php renderNavbar(); ?>

    <main class="flex-grow">
        <!-- Hero Section -->
        <section class="relative overflow-hidden">
            <div class="container mx-auto px-6 py-16 md:py-24">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <!-- Left Column - Text Content -->
                    <div class="z-10">
                        <h1 class="text-4xl md:text-5xl lg:text-5xl font-playfair font-bold mb-6">
                            <span class="text-red-600">Citire in Tarot</span> Ghidare Ezoterica
                        </h1>
                        <p class="text-lg md:text-xl font-nunito text-gray-300 mb-8">
                            Puterea mea vine din strămoși, din legătura cu forțele naturii și din darul divin pe care l-am moștenit. Am invatat sa citesc
                            viitorul oamenilor, fie el bun, sau rau, si reusesc sa te ghidez spre viata si situatia dorita.
                            <br><br>
                            <span class="text-red-600 font-bold text-2xl">Ghidare Ezoterica in Tarot </span>pentru intelegerea suferintelor si a viitorului.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="tel:+40 768 599 488" 
                               class="bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-full font-nunito transition-colors duration-200 flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                Sună Acum
                            </a>
                            <a href="https://wa.me/40768599488" 
                               target="_blank"
                               class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-full font-nunito transition-colors duration-200 flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                                WhatsApp
                            </a>
                        </div>
                    </div>
                    
                    <!-- Right Column - Image in Hero Section -->
                    <div class="relative h-full flex items-center justify-center">
                        <img src="assets/images/citire-in-tarot-magie-alba.jpg" alt="Vrăjitoarea Larisa" class="max-w-full max-h-[750px] object-contain rounded-lg shadow-2xl">
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class=" bg-black">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto text-center space-y-12">
                    <h2 class="text-4xl md:text-5xl font-playfair font-bold mb-12">
                        <span class="text-red-600">Citire in Tarot</span>
                        <br>
                        <span class="text-2xl md:text-3xl text-gray-300 mt-4 block">Prevestesc viitorul, si te ajut sa scapi de chinurile care vor veni</span>
                    </h2>

                    <div class="space-y-8 text-left">
                        <p class="text-xl md:text-2xl font-nunito text-gray-300 border-l-4 border-red-600 pl-6">
                            "Puterea mea vine din strămoși, din legătura cu forțele naturii și din darul divin pe care l-am moștenit. 
                            Sunt aici pentru a ajuta sufletele pierdute să își găsească drumul înapoi către lumină."
                        </p>

                        <div class="space-y-6 text-lg md:text-xl font-nunito text-gray-300">
                            <p>
                            Cărțile de tarot nu mint. Ele spun adevărul pe care sufletul tău îl știe, dar mintea ta refuză să-l accepte. 
                            Printr-un ritual autentic și vechi, învățat de la bunica mea — puternica Mama Omida — îți ofer ghidare, 
                            claritate și răspunsuri la întrebările care te frământă.
                            </p>

                            <p>
                                Experienta mea ma ajuta sa-ti ghidez spre viata si situatia dorita
                                <span class="text-red-600 font-semibold"> si sa-ti prevad viitorul</span> pentru a afla daca ai fost  sau nu 
                                tintit  de  magia  neagra.                        
                            </p>

                            <div class="grid md:grid-cols-2 gap-6 mt-8">
                                <div class="bg-black bg-opacity-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-red-600 mb-4">Specializări</h3>
                                    <ul class="space-y-2">
                                        <li>• Citire in Tarot</li>
                                        <li>• Prevestirea Gandului Rau</li>
                                        <li>• Vizualizarea Problemelor Viitoare</li>
                                        <li>• Ghidarea Spre Viata Dorita</li>
                                        <li>• Aducerea Stabilitatii Spirituale Inapoi In Viata Ta</li>
                                    </ul>
                                </div>

                                <div class="bg-black bg-opacity-50 p-6 rounded-lg">
                                    <h3 class="text-xl font-bold text-red-600 mb-4">Puterea Vindecării</h3>
                                    <ul class="space-y-2">
                                        <li>• Depresie și anxietate</li>
                                        <li>• Dependențe și vicii</li>
                                        <li>• Psoriazis și boli de piele</li>
                                        <li>• Probleme în dragoste</li>
                                        <li>• Blocaje financiare și profesionale</li>
                                    </ul>
                                </div>
                            </div>

                            <p class="mt-8">
                                Fiecare caz este tratat cu maximă seriozitate și discreție, folosind ritualuri personalizate 
                                și obiecte sfințite pentru a asigura rezultate rapide și de durată. 
                                <span class="text-red-600 font-semibold">VA GARANTEZ</span> eficiența 
                                ritualurilor mele prin puterea moștenită și legătura mea specială cu forțele divine.
                            </p>

                            <div class="text-center mt-24">
                                <p class="text-2xl font-playfair text-red-600 font-bold mb-4">
                                    Nu lăsa răul să îți controleze viața!
                                </p>
                                <p class="text-xl text-gray-300">
                                    Programează o consultație și descoperă calea către vindecare și eliberare spirituală.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Secțiunea de Verificare -->
        <div class="mt-24 bg-black bg-opacity-50 rounded-xl p-8">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Column - Text and Badges -->
                    <div class="space-y-8">
                        <h2 class="text-4xl md:text-4xl font-playfair font-bold">
                            <span class="text-white">Iti Prevad Viitorul, si te Ajut sa Alungi Blestemele</span> <br>
                        </h2>
                        
                        <!-- Badge Items -->
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 bg-red-600 rounded-full p-2">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-red-600">Servicii de Tarot</h3>
                                    <p class="text-gray-300">Practicantă a artelor ezoterice din copilărie, cu rezultate confirmate de sute de persoane mulțumite.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 bg-red-600 rounded-full p-2">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-red-600">Deznodarea Problemelor Viitoare, si Alungarea Blestemelor</h3>
                                    <p class="text-gray-300">Nepoata celebrei Mama Omida, păstrătoare a secretelor străvechi și a ritualurilor autentice, prin harul meu dezvalui probleme din viitorul tau, pentru a 
                                        te ajuta sa scapi de chinurile care vor veni.
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 bg-red-600 rounded-full p-2">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-red-600">Ritualuri de Vindecare</h3>
                                    <p class="text-gray-300">Rezolvare garantată a oricărui tip de problemă, prin harul meu vindec boli si scot argintul viu.</p>
                                </div>
                            </div>

                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 bg-red-600 rounded-full p-2">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-red-600">Dezlegare Farmece si Blesteme Pentru Persoanele Indurerate</h3>
                                    <p class="text-gray-300">Consultații și sedinte disponibile oricând, pentru orice tip de problema sau situatie.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Final CTA -->
                        <div class="mt-8">
                            <a href="tel:+40123456789" 
                               class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-full font-nunito transition-colors duration-200 text-xl">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                Sună Acum pentru Ajutor
                            </a>
                        </div>
                    </div>

                    <!-- Right Column - Image -->
                    <div class="relative">
                        <img src="assets/images/aducerea-inapoi-a-persoanei-iubite.jpg" alt="Vrăjitoarea Larisa" class="w-full max-h-[600px] object-contain rounded-lg shadow-2xl">
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <section class="py-20 bg-black">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto text-center space-y-12">
                    <!-- Ritual de Dezlegare -->
                    <div class="space-y-4">
                        <h2 class="text-4xl md:text-5xl font-playfair font-bold">
                        Ritual de<span class="text-red-600"> Dezlegare</span>
                        </h2>
                        <p class="text-xl md:text-2xl font-nunito text-gray-300">
                            Farmece • Blesteme • Argint Viu • Magie Neagră
                        </p>
                    </div>

                    <!-- Testimoniale Video -->
                    <div class="mt-24 space-y-8">
                        <h2 class="text-4xl md:text-5xl font-playfair font-bold">
                            <span class="text-white">Mărturii</span>
                            <span class="text-red-600">Video</span>
                        </h2>
                        <p class="text-xl md:text-2xl font-nunito text-gray-300 mb-12">
                            Ascultă poveștile reale ale celor care și-au găsit vindecarea
                        </p>

                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-[400px] lg:max-w-none mx-auto">
                            <!-- Video 1 -->
                            <div class="bg-black bg-opacity-50 p-4 rounded-lg">
                                <div class="relative" style="padding-bottom: 177.77%;">
                                    <iframe 
                                        class="absolute top-0 left-0 w-full h-full rounded-lg"
                                        src="https://www.youtube.com/embed/41fxlCO9k8k"
                                        title="Vrăjitoarea Larisa | Testimonial"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; web-share"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="mt-4 text-center">
                                    <h3 class="text-xl font-bold text-red-600">Singura Vrajitoare Reala din Romania</h3>
                                    <p class="text-gray-300">Rezultate Garantate</p>
                                </div>
                            </div>

                            <!-- Video 2 -->
                            <div class="bg-black bg-opacity-50 p-4 rounded-lg">
                                <div class="relative" style="padding-bottom: 177.77%;">
                                    <iframe 
                                        class="absolute top-0 left-0 w-full h-full rounded-lg"
                                        src="https://www.youtube.com/embed/IlUw1pHCkak"
                                        title="A Reusit Sa Mearga Dupa 24 De Ani De Stat La Pat"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; web-share"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="mt-4 text-center">
                                    <h3 class="text-xl font-bold text-red-600">A Reusit Sa Mearga Dupa 24 De Ani De Stat La Pat                                    </h3>
                                    <p class="text-gray-300">Rezolvare Boli Fizice</p>
                                </div>
                            </div>

                            <!-- Video 3 -->
                            <div class="bg-black bg-opacity-50 p-4 rounded-lg">
                                <div class="relative" style="padding-bottom: 177.77%;">
                                    <iframe 
                                        class="absolute top-0 left-0 w-full h-full rounded-lg"
                                        src="https://www.youtube.com/embed/o0x8-kGObfk"
                                        title="Vrăjitoarea Larisa | Testimonial"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; web-share"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="mt-4 text-center">
                                    <h3 class="text-xl font-bold text-red-600">Dezlegarea Farmecelor si Vindecarea Bolilor</h3>
                                    <p class="text-gray-300">Vrajitoarea Larisa</p>
                                </div>
                            </div>

                            <!-- Video 4 -->
                            <div class="bg-black bg-opacity-50 p-4 rounded-lg">
                                <div class="relative" style="padding-bottom: 177.77%;">
                                    <iframe 
                                        class="absolute top-0 left-0 w-full h-full rounded-lg"
                                        src="https://www.youtube.com/embed/3J0CAZhRJNc"
                                        title="I-am Adus Inapoi Persoana Iubita"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; web-share"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="mt-4 text-center">
                                    <h3 class="text-xl font-bold text-red-600">I-am Adus Persoana Iubita Inapoi</h3>
                                    <p class="text-gray-300">Rezultate Garantate</p>
                                </div>
                            </div>

                            <!-- Video 2 -->
                            <div class="bg-black bg-opacity-50 p-4 rounded-lg">
                                <div class="relative" style="padding-bottom: 177.77%;">
                                    <iframe 
                                        class="absolute top-0 left-0 w-full h-full rounded-lg"
                                        src="https://www.youtube.com/embed/a64tGIwQAKg"
                                        title="Dezlegarea Farmecelor si Aducerea Persoanei Iubite Inapoi"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; web-share"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="mt-4 text-center">
                                    <h3 class="text-xl font-bold text-red-600">Dezlegarea Farmecelor si Aducerea Persoanei Iubite Inapoi                                  </h3>
                                    <p class="text-gray-300">Aducerea Persoanei Iubite Inapoi</p>
                                </div>
                            </div>

                            <!-- Video 3 -->
                            <div class="bg-black bg-opacity-50 p-4 rounded-lg">
                                <div class="relative" style="padding-bottom: 177.77%;">
                                    <iframe 
                                        class="absolute top-0 left-0 w-full h-full rounded-lg"
                                        src="https://www.youtube.com/embed/DHCskrt7pCM"
                                        title="I-am Alungat Boala Grea | A Reusit Sa Mearga Din Nou"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; web-share"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                                <div class="mt-4 text-center">
                                    <h3 class="text-xl font-bold text-red-600">I-am Alungat Boala Grea | A Reusit Sa Mearga Din Nou</h3>
                                    <p class="text-gray-300">Vindecare Boli Grele</p>
                                </div>
                            </div>
                        </div>

                        <!-- Call to Action sub videoclipuri -->
                        <div class="mt-12 text-center">
                            <p class="text-2xl font-playfair text-gray-300 mb-6">
                                Alătură-te sutelor de persoane care și-au schimbat viața cu ajutorul
                                <span class="text-red-600 font-bold">Vrăjitoarei Larisa</span>
                            </p>
                            <a href="tel:+40123456789" 
                               class="inline-block bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-full font-nunito transition-colors duration-200 text-xl">
                                Programează o Consultație Gratuită
                            </a>
                        </div>
                    </div>

                    <!-- Testimoniale Text -->
        <section class="py-16 bg-black">
            <div class="container mx-auto px-6">
                <div class="max-w-5xl mx-auto">
                    <h2 class="text-4xl md:text-5xl font-playfair font-bold text-center mb-16">
                        <span class="text-white">Rezultate</span>
                        <span class="text-red-600"> Garantate</span>
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Testimonial 1 -->
                        <div class="bg-black/40 p-8 rounded-xl backdrop-blur border border-gray-800">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 rounded-full bg-red-600/20 flex items-center justify-center">
                                    <span class="text-2xl">M.D.</span>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-xl font-playfair text-red-600">Maria din Italia</h4>
                                    <p class="text-gray-400">Dezlegare farmece dragoste</p>
                                </div>
                            </div>
                            <p class="text-gray-300 font-nunito">
                                Eu aveam farmece rele pe mine si nu puteam sa dorm noaptea. Larisa ma ajutat cu ritual si acuma sunt bine, nu mai am probleme. Multumesc mult!
                            </p>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="bg-black/40 p-8 rounded-xl backdrop-blur border border-gray-800">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 rounded-full bg-red-600/20 flex items-center justify-center">
                                    <span class="text-2xl">I.P.</span>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-xl font-playfair text-red-600">Ion din Dortmund</h4>
                                    <p class="text-gray-400">Vindecare psoriazis și depresie</p>
                                </div>
                            </div>
                            <p class="text-gray-300 font-nunito">
                                Aveam pielea urata de psoriazis si eram tot timpul trist. Doamna Larisa ma vindecat cu vraji bune, acuma pielea e curata si ma simt fericit.
                            </p>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="bg-black/40 p-8 rounded-xl backdrop-blur border border-gray-800">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 rounded-full bg-red-600/20 flex items-center justify-center">
                                    <span class="text-2xl">A.M.</span>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-xl font-playfair text-red-600">Ana din Moldova</h4>
                                    <p class="text-gray-400">Aducere persoană iubită</p>
                                </div>
                            </div>
                            <p class="text-gray-300 font-nunito">
                                Barbatu meu plecase cu alta, eram suparata tare. Larisa facut farmec sa vina inapoi, si a venit in 5 zile. Acuma suntem impreuna iar, super!
                            </p>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="bg-black/40 p-8 rounded-xl backdrop-blur border border-gray-800">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 rounded-full bg-red-600/20 flex items-center justify-center">
                                    <span class="text-2xl">G.C.</span>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-xl font-playfair text-red-600">George din Constanța</h4>
                                    <p class="text-gray-400">Dezlegare blesteme pentru afaceri</p>
                                </div>
                            </div>
                            <p class="text-gray-300 font-nunito">
                                Afacerea mea mergea prost din cauza blestemelor. Larisa dezlegat tot, acuma am clienti multi si bani mai multi. Ea e cea mai buna!
                            </p>
                        </div>

                        <!-- Testimonial 5 -->
                        <div class="bg-black/40 p-8 rounded-xl backdrop-blur border border-gray-800">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 rounded-full bg-red-600/20 flex items-center justify-center">
                                    <span class="text-2xl">E.S.</span>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-xl font-playfair text-red-600">Elena din Londra</h4>
                                    <p class="text-gray-400">Scoatere argint viu</p>
                                </div>
                            </div>
                            <p class="text-gray-300 font-nunito">
                                Aveam argint viu in mine si ma durea tot corpul. Doamna Larisa scos afara cu ritual, acuma nu mai doare nimic. Multumesc frumos!
                            </p>
                        </div>

                        <!-- Testimonial 6 -->
                        <div class="bg-black/40 p-8 rounded-xl backdrop-blur border border-gray-800">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 rounded-full bg-red-600/20 flex items-center justify-center">
                                    <span class="text-2xl">V.T.</span>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-xl font-playfair text-red-600">Vasile din Timișoara</h4>
                                    <p class="text-gray-400">Vindecare anxietate</p>
                                </div>
                            </div>
                            <p class="text-gray-300 font-nunito">
                                Eram tot timpul speriat si nu puteam sa ies din casa. Larisa ma ajutat cu vraji, acuma sunt calm si ies afara. E minunata!
                            </p>
                        </div>

                        <!-- Testimonial 7 -->
                        <div class="bg-black/40 p-8 rounded-xl backdrop-blur border border-gray-800">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 rounded-full bg-red-600/20 flex items-center justify-center">
                                    <span class="text-2xl">C.R.</span>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-xl font-playfair text-red-600">Carmen din Franta</h4>
                                    <p class="text-gray-400">Spor la bani</p>
                                </div>
                            </div>
                            <p class="text-gray-300 font-nunito">
                                Nu aveam bani deloc, tot timpul saraca. Larisa facut ritual pentru spor, acuma am job bun si bani vin. Bravo ei!
                            </p>
                        </div>

                        <!-- Testimonial 8 -->
                        <div class="bg-black/40 p-8 rounded-xl backdrop-blur border border-gray-800">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 rounded-full bg-red-600/20 flex items-center justify-center">
                                    <span class="text-2xl">D.F.</span>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-xl font-playfair text-red-600">Dan din Brașov</h4>
                                    <p class="text-gray-400">Dezlegare magie neagră</p>
                                </div>
                            </div>
                            <p class="text-gray-300 font-nunito">
                                Cineva a pus magie neagra pe mine, eram bolnav rau. Larisa a dezlegat tot, acuma sunt sanatos si fericit. Ea e adevarata!
                            </p>
                        </div>
                    </div>

                    <!-- SEO Rich Snippet -->
                    <div class="mt-16 text-center space-y-4">
                        <p class="text-xl font-nunito text-gray-300">
                            Servicii garantate de <span class="text-red-600">dezlegare farmece</span>, 
                            <span class="text-white">tămăduire boli</span>, 
                            <span class="text-red-600">aducere persoană iubită</span>, 
                            <span class="text-white">vindecarea psoriazisului</span>, 
                            <span class="text-red-600">scoatere argint viu</span>, și 
                            <span class="text-white">dezlegare blesteme</span>.
                        </p>
                        <p class="text-lg font-nunito text-gray-400">
                            Cea mai puternică vrăjitoare din România | Nepoata Mamei Omida | Rezultate garantate în maxim 9 zile
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sectiunea de Incredere si Autenticitate -->
        <section class="py-16 bg-gradient-to-b from-black to-red-900/10">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-4xl md:text-5xl font-playfair font-bold text-center mb-12">
                        <span class="text-white">Atenție la</span>
                        <span class="text-red-600"> Înșelătorii</span>
                    </h2>
                    
                    <div class="bg-black/40 p-8 rounded-xl space-y-6 backdrop-blur">
                        <p class="text-xl font-nunito text-gray-300">
                            În ultima vreme, tot mai multe persoane care se pretind a fi vrăjitoare încearcă să profite de suferința și disperarea oamenilor. 
                            Aceste persoane <span class="text-red-600 font-semibold">nu au niciun dar</span> și folosesc tehnici de înșelătorie pentru a lua banii oamenilor 
                            aflați în situații dificile.
                        </p>

                        <div class="border-l-4 border-red-600 pl-6 my-8">
                            <p class="text-2xl font-playfair italic text-gray-300">
                                "Eu, Vrăjitoarea Larisa, sunt nepoata celebrei Mama Omida și <span class="text-red-600">garantez cu numele meu</span> 
                                că voi rezolva orice problemă, indiferent cât de grea ar părea."
                            </p>
                        </div>

                        <div class="space-y-4">
                            <h3 class="text-2xl font-playfair font-bold text-red-600">De ce să ai încredere în mine?</h3>
                            <ul class="space-y-4 text-lg text-gray-300">
                                <li class="flex items-start space-x-3">
                                    <svg class="w-6 h-6 text-red-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Moștenitoare directă a darului și secretelor Mamei Omida</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <svg class="w-6 h-6 text-red-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Peste 30 de ani de experiență în practicarea ritualurilor autentice</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <svg class="w-6 h-6 text-red-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Rezultate garantate și dovedite prin mărturiile video ale clienților mulțumiți</span>
                                </li>
                                <li class="flex items-start space-x-3">
                                    <svg class="w-6 h-6 text-red-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Practici sigure și testate, transmise din generație în generație</span>
                                </li>
                            </ul>
                        </div>

                        <p class="text-xl font-nunito text-gray-300 mt-8">
                            Nu vă lăsați păcăliți de false promisiuni! Contactați-mă pentru o consultație gratuită și 
                            veți simți <span class="text-red-600 font-semibold">diferența dintre un dar autentic și înșelătorie</span>.
                        </p>

                        <div class="mt-12 text-center">
                            <a href="tel:+40123456789" 
                               class="inline-block bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-full font-nunito transition-colors duration-200 text-xl">
                                Sună Acum pentru Consultație Gratuită
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                </div>
            </div>
        </section>

        <!-- Final Call to Action Section -->
        <section class="py-16 bg-black">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-4xl font-playfair font-bold mb-8">
                    <span class="text-red-600">Contactează-mă</span> Acum
                </h2>
                <p class="text-xl font-nunito text-gray-300 mb-8">
                    Sunt aici să te ajut. Nu ezita să mă contactezi pentru orice problemă spirituală sau nevoie de vindecare.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="tel:+40123456789" 
                       class="bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-full font-nunito transition-colors duration-200 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Sună Acum
                    </a>
                    <a href="https://wa.me/40123456789" 
                       target="_blank"
                       class="bg-green-600 hover:bg-green-700 text-white px-8 py-4 rounded-full font-nunito transition-colors duration-200 flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        WhatsApp
                    </a>
                </div>
            </div>
        </section>
    </main>

    <?php renderFooter(); ?>
</body>
</html> 
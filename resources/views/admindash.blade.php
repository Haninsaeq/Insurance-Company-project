<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Only keeping necessary custom styles, using Tailwind classes for colors */
        :root {
            --header-height: 4rem;
            --sidebar-width: 240px;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .animate-slide-down {
            animation: slideDown 0.5s ease-out;
        }

        .animate-fade-in {
            animation: fadeIn 0.5s ease-out;
        }

        .animate-slide-up {
            animation: slideUp 0.5s ease-out forwards;
        }
    </style>
</head>
<body class="bg-indigo-50 min-h-screen overflow-x-hidden">
    <div class="overlay fixed inset-0 bg-indigo-900/50 z-40 hidden opacity-0 transition-opacity duration-300"></div>
    
    <header class="fixed w-full bg-white text-indigo-800 z-50 shadow-lg animate-slide-down">
        <div class="max-w-7xl mx-auto px-4 py-2 flex items-center justify-between h-16">
            <button class="mobile-menu-button p-2 lg:hidden">
                <span class="material-icons-outlined text-2xl">menu</span>
            </button>
            <div class="text-xl font-bold text-blue-900">
                Admin<span class="text-indigo-800">Panel</span>
            </div>
      
        </div>
    </header>

    <div class="pt-16 max-w-7xl mx-auto flex">
            <div class="bg-white rounded-xl shadow-lg p-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                <a href="#" class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                    <span class="material-icons-outlined mr-2">face</span>
                    Profile
                    <span class="material-icons-outlined ml-auto">keyboard_arrow_right</span>
                </a>
                <a href="#" class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                    <span class="material-icons-outlined mr-2">settings</span>
                    Settings
                    <span class="material-icons-outlined ml-auto">keyboard_arrow_right</span>
                </a>
                <a href="#" class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                    <span class="material-icons-outlined mr-2">power_settings_new  <a href="/adminlogout">Log out</a></span>
                    
                   
                    <span class="material-icons-outlined ml-auto">keyboard_arrow_right</span>
                </a>
            </div>
        </aside>

        <main class="flex-1 p-4">
            <div class="flex flex-col lg:flex-row gap-4 mb-6">
                <div class="flex-1 bg-indigo-100 border border-indigo-200 rounded-xl p-6 animate-fade-in">
                    <h2 class="text-4xl md:text-5xl text-blue-900">
                        Welcome <br><strong>Comapnys</strong>
                    </h2>
                    <a href="/companies" class="inline-block mt-8 px-8 py-2 rounded-full text-xl font-bold text-white bg-blue-800 hover:bg-blue-900 transition-transform duration-300 hover:scale-105">
                        See our companies
                    </a>
                </div>

                <div class="flex-1 bg-blue-100 border border-blue-200 rounded-xl p-6 animate-fade-in">
                    <h2 class="text-4xl md:text-5xl text-blue-900">
                        Inbox <br><strong>23</strong>
                    </h2>
                    <a href="#" class="inline-block mt-8 px-8 py-2 rounded-full text-xl font-bold text-white bg-blue-800 hover:bg-blue-900 transition-transform duration-300 hover:scale-105">
                        See messages
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white rounded-xl shadow-lg p-6 h-64 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up" style="animation-delay: 0.1s">
                    <h3 class="text-xl font-bold text-indigo-800"><a href="/adminresponse">Messages</a></h3>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 h-64 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up" style="animation-delay: 0.2s">
                    <h3 class="text-xl font-bold text-indigo-800"><a href="/addinsurance">Add Insurance</a></h3>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-6 h-64 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up" style="animation-delay: 0.3s">
                    <h3 class="text-xl font-bold text-indigo-800"><a href="/removeinsurance"> Remove Insurance</a></h3>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Mobile menu functionality
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const sidebar = document.querySelector('.sidebar');
        const overlay = document.querySelector('.overlay');

        function toggleMobileMenu() {
            sidebar.classList.toggle('translate-x-0');
            overlay.classList.toggle('hidden');
            setTimeout(() => overlay.classList.toggle('opacity-0'), 0);
            document.body.style.overflow = sidebar.classList.contains('translate-x-0') ? 'hidden' : '';
        }

        mobileMenuButton.addEventListener('click', toggleMobileMenu);
        overlay.addEventListener('click', toggleMobileMenu);

        // Close mobile menu on window resize if open
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024 && sidebar.classList.contains('translate-x-0')) {
                toggleMobileMenu();
            }
        });

        // Notification animation
        const notificationIcon = document.querySelector('.material-icons-outlined:nth-child(2)');
        setInterval(() => {
            notificationIcon.classList.add('scale-110');
            setTimeout(() => notificationIcon.classList.remove('scale-110'), 200);
        }, 5000);
    </script>
</body>
</html>
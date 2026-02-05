<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Professional Portfolio | Ahmad Hasan Faqih')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800&family=Cormorant+Garamond:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        royal: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                            950: '#172554',
                        },
                        gold: {
                            50: '#fefce8',
                            100: '#fef9c3',
                            200: '#fef08a',
                            300: '#fde047',
                            400: '#facc15',
                            500: '#eab308',
                            600: '#ca8a04',
                            700: '#a16207',
                            800: '#854d0e',
                            900: '#713f12',
                        },
                        dark: {
                            900: '#0a0a0a',
                            800: '#1a1a1a',
                            700: '#2a2a2a',
                            600: '#3a3a3a',
                        }
                    },
                    fontFamily: {
                        'cinzel': ['Cinzel', 'serif'],
                        'cormorant': ['Cormorant Garamond', 'serif'],
                        'inter': ['Inter', 'sans-serif'],
                    },
                    backgroundImage: {
                        'royal-gradient': 'linear-gradient(135deg, #172554 0%, #1e3a8a 25%, #1d4ed8 50%, #2563eb 75%, #60a5fa 100%)',
                        'gold-gradient': 'linear-gradient(135deg, #fef08a 0%, #fde047 25%, #facc15 50%, #eab308 75%, #ca8a04 100%)',
                        'velvet-texture': "url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiPjxkZWZzPjxwYXR0ZXJuIGlkPSJ2ZWx2ZXQiIHBhdHRlcm5Vbml0cz0idXNlclNwYWNlT25Vc2UiIHdpZHRoPSIxMDAiIGhlaWdodD0iMTAwIiBwYXR0ZXJuVHJhbnNmb3JtPSJyb3RhdGUoNDUpIj48cmVjdCB3aWR0aD0iMiIgaGVpZ2h0PSIyIiBmaWxsPSIjZmZmIiBvcGFjaXR5PSIwLjAyIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI3ZlbHZldCkiLz48L3N2Zz4=')",
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'shimmer': 'shimmer 2s linear infinite',
                        'pulse-glow': 'pulseGlow 3s ease-in-out infinite',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'fade-in': 'fadeIn 0.5s ease-out',
                        'fade-in-up': 'fadeInUp 0.6s ease-out',
                        'bounce-slow': 'bounceSlow 2s infinite',
                        'spin-slow': 'spinSlow 20s linear infinite',
                        'crown-shine': 'crownShine 3s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        shimmer: {
                            '0%': { backgroundPosition: '-200% center' },
                            '100%': { backgroundPosition: '200% center' },
                        },
                        pulseGlow: {
                            '0%, 100%': { opacity: 1, boxShadow: '0 0 20px rgba(59, 130, 246, 0.5)' },
                            '50%': { opacity: 0.8, boxShadow: '0 0 40px rgba(59, 130, 246, 0.8)' },
                        },
                        slideUp: {
                            from: { transform: 'translateY(20px)', opacity: '0' },
                            to: { transform: 'translateY(0)', opacity: '1' },
                        },
                        fadeIn: {
                            from: { opacity: '0' },
                            to: { opacity: '1' },
                        },
                        fadeInUp: {
                            from: { opacity: '0', transform: 'translateY(30px)' },
                            to: { opacity: '1', transform: 'translateY(0)' },
                        },
                        bounceSlow: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        spinSlow: {
                            from: { transform: 'rotate(0deg)' },
                            to: { transform: 'rotate(360deg)' },
                        },
                        crownShine: {
                            '0%': { backgroundPosition: '0% center' },
                            '100%': { backgroundPosition: '200% center' },
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Royal Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: linear-gradient(to bottom, #0a0a0a, #1a1a1a);
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #3b82f6 0%, #eab308 50%, #3b82f6 100%);
            border-radius: 5px;
            border: 2px solid #1a1a1a;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #60a5fa 0%, #fde047 50%, #60a5fa 100%);
        }
        
        /* Royal Selection */
        ::selection {
            background: linear-gradient(135deg, #3b82f6, #eab308);
            color: #ffffff;
            text-shadow: 0 1px 2px rgba(0,0,0,0.5);
        }
        
        /* Royal Gradient Text */
        .royal-gradient-text {
            background: linear-gradient(135deg, #fde047 0%, #eab308 25%, #ca8a04 50%, #3b82f6 75%, #1d4ed8 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: crownShine 3s linear infinite;
        }
        
        /* Royal Glass Effect */
        .royal-glass {
            background: rgba(10, 10, 10, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(59, 130, 246, 0.3);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }
        
        /* Royal Border */
        .royal-border {
            border: 2px solid;
            border-image: linear-gradient(135deg, #3b82f6, #eab308, #3b82f6) 1;
        }
        
        /* Crown Decoration */
        .crown-decoration {
            position: relative;
        }
        
        .crown-decoration::before {
            content: '👑';
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 24px;
            opacity: 0.8;
            animation: bounceSlow 2s infinite;
        }
        
        /* Royal Pattern Background */
        .royal-pattern-bg {
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(234, 179, 8, 0.1) 0%, transparent 50%);
            background-size: 100% 100%;
        }
        
        /* Shimmer Effect */
        .shimmer-effect {
            background: linear-gradient(90deg, 
                transparent 0%, 
                rgba(255, 255, 255, 0.1) 50%, 
                transparent 100%);
            background-size: 200% 100%;
            animation: shimmer 2s linear infinite;
        }
        
        /* Royal Scroll Progress */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, #3b82f6, #eab308, #3b82f6);
            background-size: 200% 100%;
            z-index: 9999;
            transition: width 0.1s ease;
            animation: shimmer 3s linear infinite;
        }
        
        /* Royal Back to Top Button */
        .royal-back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #3b82f6, #eab308);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(59, 130, 246, 0.4);
            border: 2px solid rgba(234, 179, 8, 0.5);
        }
        
        .royal-back-to-top.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .royal-back-to-top:hover {
            transform: translateY(-5px) scale(1.1);
            box-shadow: 0 8px 30px rgba(59, 130, 246, 0.6);
            animation: pulseGlow 2s infinite;
        }
        
        /* Royal Cursor */
        .royal-cursor-dot {
            width: 8px;
            height: 8px;
            background: linear-gradient(135deg, #3b82f6, #eab308);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9999;
            transform: translate(-50%, -50%);
            transition: width 0.3s, height 0.3s;
        }
        
        .royal-cursor-outline {
            width: 40px;
            height: 40px;
            border: 2px solid rgba(59, 130, 246, 0.3);
            border-radius: 50%;
            position: fixed;
            pointer-events: none;
            z-index: 9998;
            transform: translate(-50%, -50%);
            transition: all 0.15s ease-out;
        }
        
        /* Page Loader */
        .royal-page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a1a 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        
        .royal-loader-spinner {
            width: 70px;
            height: 70px;
            border: 3px solid rgba(59, 130, 246, 0.1);
            border-top: 3px solid #3b82f6;
            border-right: 3px solid #eab308;
            border-radius: 50%;
            animation: spinSlow 1s linear infinite;
            margin: 0 auto 20px;
            position: relative;
        }
        
        .royal-loader-spinner::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border: 3px solid rgba(234, 179, 8, 0.1);
            border-radius: 50%;
        }
        
        /* Animation delays */
        .animation-delay-100 { animation-delay: 0.1s; }
        .animation-delay-200 { animation-delay: 0.2s; }
        .animation-delay-300 { animation-delay: 0.3s; }
        .animation-delay-400 { animation-delay: 0.4s; }
        .animation-delay-500 { animation-delay: 0.5s; }
        .animation-delay-600 { animation-delay: 0.6s; }
        .animation-delay-700 { animation-delay: 0.7s; }
        .animation-delay-800 { animation-delay: 0.8s; }
        .animation-delay-900 { animation-delay: 0.9s; }
        .animation-delay-1000 { animation-delay: 1s; }
        
        /* Floating particles */
        .floating-particle {
            position: absolute;
            background: linear-gradient(135deg, #3b82f6, #eab308);
            border-radius: 50%;
            animation: float 15s infinite linear;
        }
        
        /* Royal badge */
        .royal-badge {
            background: linear-gradient(135deg, #3b82f6, #eab308);
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
        }
    </style>
    
    @stack('styles')
</head>
<body class="font-cormorant bg-dark-900 text-gray-200 royal-pattern-bg">
    <!-- Page Loader -->
    <div class="royal-page-loader">
        <div class="loader-content text-center">
            <div class="royal-loader-spinner"></div>
            <p class="text-gold-300 font-cinzel text-lg mt-6 animate-pulse">Preparing Royal Portfolio...</p>
        </div>
    </div>
    
    <!-- Floating Particles -->
    <div class="particles-container fixed inset-0 pointer-events-none z-0">
        <!-- Particles will be generated by JS -->
    </div>
    
    <!-- Scroll Progress Bar -->
    <div class="scroll-progress"></div>
    
    <!-- Back to Top Button -->
    <div class="royal-back-to-top">
        <i class="fas fa-crown text-xl"></i>
    </div>
    
    <!-- Custom Cursor -->
    <div class="royal-cursor-dot"></div>
    <div class="royal-cursor-outline"></div>
    
    <!-- Royal Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 royal-glass py-4 transition-all duration-300 border-b border-royal-800/50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <!-- Royal Logo -->
                <a href="/" class="flex items-center space-x-3 group relative">
                    <div class="relative crown-decoration">
                        <div class="w-12 h-12 bg-gradient-to-br from-royal-700 via-gold-500 to-royal-600 rounded-xl flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-500 shadow-lg">
                            <i class="fas fa-crown text-white text-xl"></i>
                        </div>
                        <div class="absolute -inset-2 bg-gradient-to-r from-royal-600 to-gold-500 rounded-xl blur-lg opacity-0 group-hover:opacity-40 transition-opacity duration-500"></div>
                    </div>
                    <div>
                        <div class="text-2xl font-cinzel font-bold">
                            <span class="royal-gradient-text">Ahmad Hasan</span>
                        </div>
                        <div class="text-xs text-gold-400 font-medium tracking-wider">Royal Portfolio</div>
                    </div>
                </a>

                <!-- Desktop Menu - Royal Style -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#home" class="royal-nav-link group relative px-5 py-2.5 text-sm font-medium text-gray-300 hover:text-gold-300 transition-all duration-300 rounded-lg">
                        <i class="fas fa-crown mr-2 text-gold-500"></i>
                        Home
                        <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-royal-500 to-gold-500 group-hover:w-3/4 transition-all duration-300"></span>
                    </a>
                    <a href="#learning-path" class="royal-nav-link group relative px-5 py-2.5 text-sm font-medium text-gray-300 hover:text-gold-300 transition-all duration-300 rounded-lg">
                        <i class="fas fa-scroll mr-2 text-gold-500"></i>
                        Journey
                        <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-royal-500 to-gold-500 group-hover:w-3/4 transition-all duration-300"></span>
                    </a>
                    <a href="#experience" class="royal-nav-link group relative px-5 py-2.5 text-sm font-medium text-gray-300 hover:text-gold-300 transition-all duration-300 rounded-lg">
                        <i class="fas fa-chess-rook mr-2 text-gold-500"></i>
                        Experience
                        <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-royal-500 to-gold-500 group-hover:w-3/4 transition-all duration-300"></span>
                    </a>
                    <a href="#work-experience" class="royal-nav-link group relative px-5 py-2.5 text-sm font-medium text-gray-300 hover:text-gold-300 transition-all duration-300 rounded-lg">
                        <i class="fas fa-landmark mr-2 text-gold-500"></i>
                        Work
                        <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-royal-500 to-gold-500 group-hover:w-3/4 transition-all duration-300"></span>
                    </a>
                    <a href="#achievements" class="royal-nav-link group relative px-5 py-2.5 text-sm font-medium text-gray-300 hover:text-gold-300 transition-all duration-300 rounded-lg">
                        <i class="fas fa-trophy mr-2 text-gold-500"></i>
                        Achievements
                        <span class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-royal-500 to-gold-500 group-hover:w-3/4 transition-all duration-300"></span>
                    </a>
                    
                    <!-- Royal Theme Toggle -->
                    <button id="theme-toggle" class="p-3 rounded-xl royal-glass hover:bg-royal-800/50 transition-all duration-300 shadow-lg hover:shadow-xl group">
                        <svg id="theme-icon" class="w-5 h-5 text-gold-400 group-hover:text-gold-300 transition-transform duration-300 group-hover:rotate-180" fill="currentColor" viewBox="0 0 20 20">
                            <path id="sun-icon" class="hidden" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"></path>
                            <path id="moon-icon" d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu Button - Royal Style -->
                <button id="mobile-menu-button" class="md:hidden p-3 rounded-xl royal-glass hover:bg-royal-800/50 transition-all duration-300 shadow-lg">
                    <svg class="w-6 h-6 text-gold-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu - Royal Style -->
            <div id="mobile-menu" class="md:hidden hidden mt-4 space-y-2 animate-fade-in-up royal-glass rounded-xl p-4 border border-royal-700/50">
                <a href="#home" class="block px-4 py-3 text-gray-300 hover:text-gold-300 hover:bg-royal-800/30 rounded-lg transition-all duration-300 hover:pl-6 border-l-2 border-transparent hover:border-gold-500">
                    <i class="fas fa-crown mr-3 text-gold-500"></i>Home
                </a>
                <a href="#learning-path" class="block px-4 py-3 text-gray-300 hover:text-gold-300 hover:bg-royal-800/30 rounded-lg transition-all duration-300 hover:pl-6 border-l-2 border-transparent hover:border-gold-500">
                    <i class="fas fa-scroll mr-3 text-gold-500"></i>Journey
                </a>
                <a href="#experience" class="block px-4 py-3 text-gray-300 hover:text-gold-300 hover:bg-royal-800/30 rounded-lg transition-all duration-300 hover:pl-6 border-l-2 border-transparent hover:border-gold-500">
                    <i class="fas fa-chess-rook mr-3 text-gold-500"></i>Experience
                </a>
                <a href="#work-experience" class="block px-4 py-3 text-gray-300 hover:text-gold-300 hover:bg-royal-800/30 rounded-lg transition-all duration-300 hover:pl-6 border-l-2 border-transparent hover:border-gold-500">
                    <i class="fas fa-landmark mr-3 text-gold-500"></i>Work
                </a>
                <a href="#achievements" class="block px-4 py-3 text-gray-300 hover:text-gold-300 hover:bg-royal-800/30 rounded-lg transition-all duration-300 hover:pl-6 border-l-2 border-transparent hover:border-gold-500">
                    <i class="fas fa-trophy mr-3 text-gold-500"></i>Achievements
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Royal Footer -->
    <footer class="relative overflow-hidden bg-dark-900/95 border-t border-royal-800/50 mt-20 py-12">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTAgMGgxMDB2MTAwSDB6IiBmaWxsPSJub25lIi8+PHBhdGggZD0iTTUwIDIwYzE2LjU0IDAgMzAgMTMuNDYgMzAgMzBzLTEzLjQ2IDMwLTMwIDMwLTMwLTEzLjQ2LTMwLTMwIDEzLjQ2LTMwIDMwLTMwem0wIDIwYzUuNTMgMCAxMCA0LjQ3IDEwIDEwcy00LjQ3IDEwLTEwIDEwLTEwLTQuNDctMTAtMTAgNC40Ny0xMCAxMC0xMHoiIGZpbGw9IiMzQjgyRjYiIG9wYWNpdHk9Ii4xIi8+PC9zdmc+');"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <div class="relative inline-block mb-8">
                    <h2 class="text-4xl md:text-5xl font-cinzel font-bold animate-fade-in">
                        <span class="royal-gradient-text">For The Kingdom</span>
                    </h2>
                    <div class="absolute -top-2 left-1/2 transform -translate-x-1/2 text-gold-500 text-2xl">
                        <i class="fas fa-crown"></i>
                    </div>
                </div>
                
                <p class="text-gray-400 mb-8 max-w-2xl mx-auto text-lg leading-relaxed font-cormorant">
                    Building digital realms with precision and royal elegance. Let's create something legendary together.
                </p>
                
                <a href="mailto:ahmad.hasanaulia@example.com" 
                   class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-royal-700 via-royal-600 to-royal-700 text-white font-cinzel font-semibold rounded-xl hover:rounded-2xl transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl shadow-lg overflow-hidden">
                    <span class="relative z-10 flex items-center gap-3">
                        <i class="fas fa-scroll"></i>
                        Send Royal Decree
                        <i class="fas fa-arrow-right transform group-hover:translate-x-2 transition-transform duration-300"></i>
                    </span>
                    <div class="absolute inset-0 bg-gradient-to-r from-gold-600 to-royal-600 opacity-0 group-hover:opacity-100 transition-opacity duration-500 shimmer-effect"></div>
                </a>
                
                <div class="mt-12 pt-8 border-t border-royal-800/50">
                    <div class="flex justify-center space-x-6 mb-6">
                        <a href="https://github.com/ahmadhasan" class="royal-social-icon w-12 h-12 rounded-full royal-glass flex items-center justify-center hover:bg-gradient-to-r from-royal-600 to-gold-600 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1 border border-royal-700/50">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                        <a href="https://linkedin.com/in/ahmadhasan" class="royal-social-icon w-12 h-12 rounded-full royal-glass flex items-center justify-center hover:bg-gradient-to-r from-blue-600 to-cyan-500 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1 border border-royal-700/50">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="https://twitter.com/ahmadhasan" class="royal-social-icon w-12 h-12 rounded-full royal-glass flex items-center justify-center hover:bg-gradient-to-r from-sky-500 to-blue-400 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1 border border-royal-700/50">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="https://instagram.com/ahmadhasan" class="royal-social-icon w-12 h-12 rounded-full royal-glass flex items-center justify-center hover:bg-gradient-to-r from-purple-600 to-pink-500 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1 border border-royal-700/50">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                    
                    <p class="mt-6 text-gray-500 text-sm font-cinzel tracking-wider">
                        © <span class="text-gold-500">2024</span> Royal Portfolio of Ahmad Hasan Faqih Aulia. All rights reserved.
                    </p>
                    <p class="text-gray-600 text-xs mt-2 font-cormorant italic">
                        Crafted with royal precision and modern elegance
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Royal Scripts -->
    <script>
        // Page Loader
        window.addEventListener('load', function() {
            setTimeout(() => {
                document.querySelector('.royal-page-loader').classList.add('hidden');
                createRoyalParticles();
            }, 1200);
        });

        // Create Floating Particles
        function createRoyalParticles() {
            const container = document.querySelector('.particles-container');
            const colors = ['#3b82f6', '#eab308', '#2563eb', '#fde047'];
            
            for (let i = 0; i < 15; i++) {
                const particle = document.createElement('div');
                particle.classList.add('floating-particle');
                
                const size = Math.random() * 10 + 5;
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const duration = Math.random() * 20 + 10;
                const delay = Math.random() * 5;
                const color = colors[Math.floor(Math.random() * colors.length)];
                const blur = Math.random() * 10 + 5;
                
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                particle.style.background = color;
                particle.style.opacity = Math.random() * 0.3 + 0.1;
                particle.style.filter = `blur(${blur}px)`;
                particle.style.animationDelay = `${delay}s`;
                particle.style.animationDuration = `${duration}s`;
                
                container.appendChild(particle);
            }
        }

        // Mobile Menu Toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('animate-fade-in-up');
        });

        // Dark Mode Toggle - Royal Theme
        document.getElementById('theme-toggle').addEventListener('click', function() {
            const html = document.documentElement;
            const themeIcon = document.getElementById('theme-icon');
            const sunIcon = document.getElementById('sun-icon');
            const moonIcon = document.getElementById('moon-icon');
            
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                localStorage.theme = 'light';
                sunIcon.classList.add('hidden');
                moonIcon.classList.remove('hidden');
            } else {
                html.classList.add('dark');
                localStorage.theme = 'dark';
                sunIcon.classList.remove('hidden');
                moonIcon.classList.add('hidden');
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    document.getElementById('mobile-menu').classList.add('hidden');
                }
            });
        });

        // Initialize theme
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            document.getElementById('sun-icon').classList.remove('hidden');
            document.getElementById('moon-icon').classList.add('hidden');
        } else {
            document.documentElement.classList.remove('dark');
            document.getElementById('sun-icon').classList.add('hidden');
            document.getElementById('moon-icon').classList.remove('hidden');
        }
        
        // Active nav link on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('section[id]');
            const navLinks = document.querySelectorAll('.royal-nav-link');
            
            function setActiveLink() {
                let current = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    
                    if (window.scrollY >= (sectionTop - 100)) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                        link.classList.add('text-gold-300');
                        link.classList.add('bg-royal-800/30');
                    } else {
                        link.classList.remove('text-gold-300');
                        link.classList.remove('bg-royal-800/30');
                    }
                });
            }
            
            window.addEventListener('scroll', setActiveLink);
            setActiveLink(); // Initial call
        });

        // Scroll Progress Bar
        window.addEventListener('scroll', function() {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.querySelector('.scroll-progress').style.width = scrolled + '%';
        });

        // Back to Top Button
        const royalBackToTopButton = document.querySelector('.royal-back-to-top');
        
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                royalBackToTopButton.classList.add('visible');
            } else {
                royalBackToTopButton.classList.remove('visible');
            }
        });

        royalBackToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Royal Cursor
        const royalCursorDot = document.querySelector('.royal-cursor-dot');
        const royalCursorOutline = document.querySelector('.royal-cursor-outline');
        
        window.addEventListener('mousemove', function(e) {
            const posX = e.clientX;
            const posY = e.clientY;
            
            royalCursorDot.style.left = `${posX}px`;
            royalCursorDot.style.top = `${posY}px`;
            
            setTimeout(() => {
                royalCursorOutline.style.left = `${posX}px`;
                royalCursorOutline.style.top = `${posY}px`;
            }, 50);
        });

        // Cursor effects on interactive elements
        document.querySelectorAll('a, button, .royal-hoverable').forEach(elem => {
            elem.addEventListener('mouseenter', () => {
                royalCursorDot.style.width = '16px';
                royalCursorDot.style.height = '16px';
                royalCursorDot.style.background = 'linear-gradient(135deg, #60a5fa, #fde047)';
                royalCursorOutline.style.width = '60px';
                royalCursorOutline.style.height = '60px';
                royalCursorOutline.style.borderColor = 'rgba(234, 179, 8, 0.5)';
            });
            
            elem.addEventListener('mouseleave', () => {
                royalCursorDot.style.width = '8px';
                royalCursorDot.style.height = '8px';
                royalCursorDot.style.background = 'linear-gradient(135deg, #3b82f6, #eab308)';
                royalCursorOutline.style.width = '40px';
                royalCursorOutline.style.height = '40px';
                royalCursorOutline.style.borderColor = 'rgba(59, 130, 246, 0.3)';
            });
        });

        // Initialize scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Royal sound effect on click (optional)
        document.addEventListener('click', function(e) {
            if (e.target.closest('.royal-nav-link, .royal-back-to-top, .royal-social-icon')) {
                // Optional: Add subtle sound effect here
                console.log('Royal interaction!');
            }
        });

        // Add class to body for royal theme
        document.body.classList.add('royal-theme');
    </script>
    
    @stack('scripts')
</body>
</html>
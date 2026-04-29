<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adili Fashion Hub</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: '#d4a017',
                        deep: '#111827',
                        cream: '#fff7ed',
                        wine: '#7f1d1d'
                    },
                    animation: {
                        float: 'float 4s ease-in-out infinite',
                        marquee: 'marquee 22s linear infinite',
                        pulseSoft: 'pulseSoft 2.5s ease-in-out infinite',
                        slideGlow: 'slideGlow 3s ease-in-out infinite'
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-14px)' }
                        },
                        marquee: {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' }
                        },
                        pulseSoft: {
                            '0%, 100%': { transform: 'scale(1)', opacity: '1' },
                            '50%': { transform: 'scale(1.04)', opacity: '.9' }
                        },
                        slideGlow: {
                            '0%, 100%': { boxShadow: '0 0 0 rgba(212,160,23,0)' },
                            '50%': { boxShadow: '0 0 35px rgba(212,160,23,.35)' }
                        }
                    }
                }
            }
        };
    </script>

    <style>
        html { scroll-behavior: smooth; }
        body { font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .glass { background: rgba(255,255,255,.13); backdrop-filter: blur(18px); }
        .hero-pattern {
            background-image:
                radial-gradient(circle at top left, rgba(212,160,23,.32), transparent 28%),
                radial-gradient(circle at bottom right, rgba(127,29,29,.40), transparent 30%),
                linear-gradient(135deg, #0f172a, #1f2937 50%, #451a03);
        }
        .fashion-card:hover img { transform: scale(1.08); }
        .story-ring { background: linear-gradient(135deg, #facc15, #dc2626, #7c2d12); }
    </style>
</head>
<body class="bg-orange-50 text-slate-900">

    <!-- Floating WhatsApp -->
    <a href="https://wa.me/2348000000000?text=Hello%20Adili%20Fashion%20Hub%2C%20I%20want%20to%20make%20an%20outfit" class="fixed bottom-5 right-5 z-50 h-14 w-14 rounded-full bg-green-500 text-white shadow-2xl flex items-center justify-center text-2xl animate-pulseSoft">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Navbar -->
    <header class="fixed top-0 left-0 right-0 z-40 bg-slate-950/70 backdrop-blur-xl border-b border-white/10">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between text-white">
            <a href="#" class="flex items-center gap-3">
                <div class="h-10 w-10 rounded-2xl bg-gradient-to-br from-yellow-400 to-orange-700 flex items-center justify-center shadow-lg">
                    <i class="fas fa-shirt"></i>
                </div>
                <div>
                    <h1 class="font-black leading-none">Adili Fashion Hub</h1>
                    <p class="text-[10px] text-yellow-200 tracking-wider uppercase">Northern Elegance</p>
                </div>
            </a>

            <div class="hidden md:flex items-center gap-7 text-sm text-slate-200">
                <a href="#designs" class="hover:text-yellow-300">Designs</a>
                <a href="#categories" class="hover:text-yellow-300">Categories</a>
                <a href="#how" class="hover:text-yellow-300">How it works</a>
                <a href="#contact" class="hover:text-yellow-300">Contact</a>
            </div>

            <button id="menuBtn" class="md:hidden h-10 w-10 rounded-xl bg-white/10">
                <i class="fas fa-bars"></i>
            </button>
        </nav>
        <div id="mobileMenu" class="hidden md:hidden bg-slate-950 text-white px-6 pb-5 space-y-3 text-sm">
            <a href="#designs" class="block py-2">Designs</a>
            <a href="#categories" class="block py-2">Categories</a>
            <a href="#how" class="block py-2">How it works</a>
            <a href="#contact" class="block py-2">Contact</a>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero-pattern min-h-screen pt-28 pb-16 px-4 overflow-hidden relative text-white">
        <div class="absolute top-24 right-8 h-40 w-40 rounded-full bg-yellow-400/20 blur-3xl animate-float"></div>
        <div class="absolute bottom-20 left-10 h-52 w-52 rounded-full bg-red-500/20 blur-3xl animate-float"></div>

        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center relative z-10">
            <div>
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass border border-white/10 text-yellow-200 text-sm mb-6">
                    <i class="fas fa-star"></i>
                    Custom Hausa & Northern Nigerian Women Outfits
                </span>

                <h2 class="text-4xl sm:text-5xl lg:text-7xl font-black leading-tight">
                    Elegant styles made for your <span class="text-yellow-300">perfect fit</span>.
                </h2>

                <p class="mt-6 text-slate-200 text-lg max-w-xl leading-8">
                    Browse beautiful designs, choose your style, then contact us directly on WhatsApp for measurement, price, and delivery discussion.
                </p>

                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="#designs" class="px-7 py-4 rounded-2xl bg-yellow-400 text-slate-950 font-bold shadow-xl hover:bg-yellow-300 transition flex items-center justify-center gap-2">
                        View Designs <i class="fas fa-arrow-down"></i>
                    </a>
                    <a href="https://wa.me/2348000000000?text=Hello%20Adili%20Fashion%20Hub%2C%20I%20saw%20your%20fashion%20website" class="px-7 py-4 rounded-2xl bg-white/10 border border-white/20 font-bold hover:bg-white/20 transition flex items-center justify-center gap-2">
                        Chat on WhatsApp <i class="fab fa-whatsapp text-green-300"></i>
                    </a>
                </div>

                <div class="mt-10 grid grid-cols-3 gap-4 max-w-lg">
                    <div class="glass rounded-2xl p-4 border border-white/10">
                        <h3 class="text-2xl font-black">100+</h3>
                        <p class="text-xs text-slate-300">Design Ideas</p>
                    </div>
                    <div class="glass rounded-2xl p-4 border border-white/10">
                        <h3 class="text-2xl font-black">Custom</h3>
                        <p class="text-xs text-slate-300">Measurements</p>
                    </div>
                    <div class="glass rounded-2xl p-4 border border-white/10">
                        <h3 class="text-2xl font-black">Fast</h3>
                        <p class="text-xs text-slate-300">WhatsApp Order</p>
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -top-6 -left-6 h-28 w-28 rounded-full bg-yellow-400/30 blur-2xl"></div>
                <div class="relative rounded-[2rem] p-3 glass border border-white/10 shadow-2xl animate-slideGlow">
                    <img src="https://images.unsplash.com/photo-1594736797933-d0501ba2fe65?auto=format&fit=crop&w=900&q=80" class="h-[520px] w-full object-cover rounded-[1.5rem]" alt="Fashion model" />
                    <div class="absolute bottom-8 left-8 right-8 glass rounded-3xl p-5 border border-white/10">
                        <p class="text-sm text-yellow-200">Featured style</p>
                        <h3 class="text-2xl font-black">Royal Modest Gown</h3>
                        <p class="text-sm text-slate-200 mt-1">Perfect for events, Eid, dinner, and weddings.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Moving Promo Strip -->
    <section class="bg-slate-950 text-white py-4 overflow-hidden">
        <div class="flex w-max animate-marquee gap-10 text-sm font-bold tracking-wide">
            <span>✦ Custom Hausa Women Outfits</span><span>✦ Ankara Styles</span><span>✦ Lace Gowns</span><span>✦ Bridal Looks</span><span>✦ Modest Fashion</span><span>✦ WhatsApp Ordering</span>
            <span>✦ Custom Hausa Women Outfits</span><span>✦ Ankara Styles</span><span>✦ Lace Gowns</span><span>✦ Bridal Looks</span><span>✦ Modest Fashion</span><span>✦ WhatsApp Ordering</span>
        </div>
    </section>

    <!-- Story Slider -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex items-center justify-between mb-5">
            <div>
                <h2 class="text-2xl font-black">Latest Style Stories</h2>
                <p class="text-slate-500 text-sm">Swipe like Facebook Lite stories</p>
            </div>
            <div class="hidden sm:flex gap-2">
                <button onclick="scrollStories(-1)" class="h-10 w-10 rounded-full bg-white shadow"><i class="fas fa-arrow-left"></i></button>
                <button onclick="scrollStories(1)" class="h-10 w-10 rounded-full bg-white shadow"><i class="fas fa-arrow-right"></i></button>
            </div>
        </div>

        <div id="stories" class="hide-scrollbar flex gap-4 overflow-x-auto scroll-smooth pb-2">
            <script>
                const storyData = [
                    ['New', 'https://images.unsplash.com/photo-1617019114583-affb34d1b3cd?auto=format&fit=crop&w=300&q=80'],
                    ['Ankara', 'https://images.unsplash.com/photo-1596783074918-c84cb06531ca?auto=format&fit=crop&w=300&q=80'],
                    ['Wedding', 'https://images.unsplash.com/photo-1594736797933-d0501ba2fe65?auto=format&fit=crop&w=300&q=80'],
                    ['Hijab', 'https://images.unsplash.com/photo-1535643302794-19c3804b874b?auto=format&fit=crop&w=300&q=80'],
                    ['Lace', 'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?auto=format&fit=crop&w=300&q=80'],
                    ['Trending', 'https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&w=300&q=80'],
                    ['Casual', 'https://images.unsplash.com/photo-1496747611176-843222e1e57c?auto=format&fit=crop&w=300&q=80']
                ];
                document.currentScript.parentElement.innerHTML = storyData.map(item => `
                    <div class="min-w-[105px] text-center cursor-pointer group">
                        <div class="story-ring p-[3px] rounded-[1.7rem] shadow-lg group-hover:scale-105 transition">
                            <img src="${item[1]}" class="h-32 w-full rounded-[1.45rem] object-cover border-4 border-orange-50" alt="${item[0]}">
                        </div>
                        <p class="mt-2 text-xs font-bold">${item[0]}</p>
                    </div>
                `).join('');
            </script>
        </div>
    </section>

    <!-- Categories -->
    <section id="categories" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="text-center max-w-2xl mx-auto mb-10">
            <p class="text-gold font-bold uppercase text-sm tracking-widest">Fashion Categories</p>
            <h2 class="text-3xl sm:text-4xl font-black mt-2">Choose by occasion</h2>
            <p class="text-slate-500 mt-3">From simple modest outfits to premium event styles.</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
            <div class="rounded-3xl bg-white p-6 shadow hover:-translate-y-2 transition">
                <div class="h-12 w-12 rounded-2xl bg-orange-100 text-orange-700 flex items-center justify-center text-xl mb-5"><i class="fas fa-female"></i></div>
                <h3 class="font-black text-lg">Everyday Wear</h3>
                <p class="text-sm text-slate-500 mt-2">Comfortable, modest, and beautiful daily outfits.</p>
            </div>
            <div class="rounded-3xl bg-white p-6 shadow hover:-translate-y-2 transition">
                <div class="h-12 w-12 rounded-2xl bg-yellow-100 text-yellow-700 flex items-center justify-center text-xl mb-5"><i class="fas fa-crown"></i></div>
                <h3 class="font-black text-lg">Wedding Styles</h3>
                <p class="text-sm text-slate-500 mt-2">Elegant styles for brides, friends, and family events.</p>
            </div>
            <div class="rounded-3xl bg-white p-6 shadow hover:-translate-y-2 transition">
                <div class="h-12 w-12 rounded-2xl bg-red-100 text-red-700 flex items-center justify-center text-xl mb-5"><i class="fas fa-gem"></i></div>
                <h3 class="font-black text-lg">Luxury Lace</h3>
                <p class="text-sm text-slate-500 mt-2">Premium lace looks for important occasions.</p>
            </div>
            <div class="rounded-3xl bg-white p-6 shadow hover:-translate-y-2 transition">
                <div class="h-12 w-12 rounded-2xl bg-green-100 text-green-700 flex items-center justify-center text-xl mb-5"><i class="fas fa-moon"></i></div>
                <h3 class="font-black text-lg">Eid Collection</h3>
                <p class="text-sm text-slate-500 mt-2">Clean, classy, and celebration-ready outfits.</p>
            </div>
        </div>
    </section>

    <!-- Designs Gallery -->
    <section id="designs" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-8">
                <div>
                    <p class="text-gold font-bold uppercase text-sm tracking-widest">Popular Designs</p>
                    <h2 class="text-3xl sm:text-4xl font-black mt-2">Browse beautiful styles</h2>
                    <p class="text-slate-500 mt-3">Click any design to start a WhatsApp conversation.</p>
                </div>
                <div class="flex gap-2 overflow-x-auto hide-scrollbar pb-1">
                    <button class="filter-btn active px-5 py-2 rounded-full bg-slate-950 text-white text-sm" data-filter="all">All</button>
                    <button class="filter-btn px-5 py-2 rounded-full bg-slate-100 text-slate-700 text-sm" data-filter="ankara">Ankara</button>
                    <button class="filter-btn px-5 py-2 rounded-full bg-slate-100 text-slate-700 text-sm" data-filter="lace">Lace</button>
                    <button class="filter-btn px-5 py-2 rounded-full bg-slate-100 text-slate-700 text-sm" data-filter="wedding">Wedding</button>
                    <button class="filter-btn px-5 py-2 rounded-full bg-slate-100 text-slate-700 text-sm" data-filter="casual">Casual</button>
                </div>
            </div>

            <div id="gallery" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-7"></div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how" class="py-16 bg-orange-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <p class="text-gold font-bold uppercase text-sm tracking-widest">Simple Process</p>
                <h2 class="text-3xl sm:text-4xl font-black mt-2">How to order</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white rounded-3xl p-7 shadow relative overflow-hidden">
                    <span class="absolute -right-5 -top-5 text-8xl font-black text-orange-100">1</span>
                    <i class="fas fa-images text-3xl text-gold"></i>
                    <h3 class="font-black text-xl mt-5">Choose a design</h3>
                    <p class="text-slate-500 text-sm mt-2">Browse the catalogue and select the style you like.</p>
                </div>
                <div class="bg-white rounded-3xl p-7 shadow relative overflow-hidden">
                    <span class="absolute -right-5 -top-5 text-8xl font-black text-orange-100">2</span>
                    <i class="fab fa-whatsapp text-3xl text-green-500"></i>
                    <h3 class="font-black text-xl mt-5">Chat on WhatsApp</h3>
                    <p class="text-slate-500 text-sm mt-2">Send the design code and discuss size, fabric, and price.</p>
                </div>
                <div class="bg-white rounded-3xl p-7 shadow relative overflow-hidden">
                    <span class="absolute -right-5 -top-5 text-8xl font-black text-orange-100">3</span>
                    <i class="fas fa-truck-fast text-3xl text-wine"></i>
                    <h3 class="font-black text-xl mt-5">Sew & deliver</h3>
                    <p class="text-slate-500 text-sm mt-2">Your outfit is made according to your agreement.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-16 bg-slate-950 text-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-yellow-300 font-bold uppercase text-sm tracking-widest">Ready to sew?</p>
            <h2 class="text-3xl sm:text-5xl font-black mt-3">Let us make your next outfit beautiful.</h2>
            <p class="text-slate-300 mt-5 max-w-2xl mx-auto">Send your style idea, measurement, or selected design code on WhatsApp. We will reply with details.</p>
            <a href="https://wa.me/2348000000000?text=Hello%20Adili%20Fashion%20Hub%2C%20I%20want%20to%20make%20an%20outfit" class="inline-flex mt-8 px-8 py-4 rounded-2xl bg-green-500 hover:bg-green-400 text-white font-black shadow-xl items-center gap-3">
                <i class="fab fa-whatsapp text-2xl"></i> Contact on WhatsApp
            </a>
        </div>
    </section>

    <footer class="bg-slate-950 border-t border-white/10 text-slate-400 py-6 text-center text-sm">
        © <span id="year"></span> Adili Fashion Hub. All rights reserved.
    </footer>

    <script>
        const WHATSAPP_NUMBER = '2348000000000';

        const designs = [
            { id: 'AFH-001', title: 'Royal Ankara Gown', category: 'ankara', tag: 'Trending', img: 'https://images.unsplash.com/photo-1596783074918-c84cb06531ca?auto=format&fit=crop&w=700&q=80' },
            { id: 'AFH-002', title: 'Luxury Lace Style', category: 'lace', tag: 'Premium', img: 'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?auto=format&fit=crop&w=700&q=80' },
            { id: 'AFH-003', title: 'Elegant Wedding Look', category: 'wedding', tag: 'Wedding', img: 'https://images.unsplash.com/photo-1594736797933-d0501ba2fe65?auto=format&fit=crop&w=700&q=80' },
            { id: 'AFH-004', title: 'Simple Casual Gown', category: 'casual', tag: 'Casual', img: 'https://images.unsplash.com/photo-1496747611176-843222e1e57c?auto=format&fit=crop&w=700&q=80' },
            { id: 'AFH-005', title: 'Modest Event Dress', category: 'wedding', tag: 'Event', img: 'https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&w=700&q=80' },
            { id: 'AFH-006', title: 'Classy Hijab Outfit', category: 'lace', tag: 'Modest', img: 'https://images.unsplash.com/photo-1535643302794-19c3804b874b?auto=format&fit=crop&w=700&q=80' }
        ];

        const gallery = document.getElementById('gallery');

        function renderDesigns(filter = 'all') {
            const filtered = filter === 'all' ? designs : designs.filter(d => d.category === filter);
            gallery.innerHTML = filtered.map(d => {
                const msg = encodeURIComponent(`Hello Adili Fashion Hub, I am interested in this design: ${d.title} (${d.id}). Can I get more details?`);
                return `
                    <article class="fashion-card group bg-orange-50 rounded-[2rem] overflow-hidden shadow-lg hover:shadow-2xl transition duration-300" data-category="${d.category}">
                        <div class="relative h-80 overflow-hidden">
                            <img src="${d.img}" alt="${d.title}" class="h-full w-full object-cover transition duration-700">
                            <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-yellow-400 text-slate-950 text-xs font-black">${d.tag}</span>
                            <span class="absolute top-4 right-4 px-3 py-1 rounded-full bg-white/90 text-slate-900 text-xs font-black">${d.id}</span>
                        </div>
                        <div class="p-5">
                            <h3 class="font-black text-xl">${d.title}</h3>
                            <p class="text-sm text-slate-500 mt-2">Beautiful custom outfit. Send this style code on WhatsApp to discuss price and measurement.</p>
                            <a href="https://wa.me/${WHATSAPP_NUMBER}?text=${msg}" class="mt-5 w-full inline-flex items-center justify-center gap-2 px-5 py-3 rounded-2xl bg-slate-950 text-white font-bold hover:bg-green-600 transition">
                                <i class="fab fa-whatsapp"></i> Ask on WhatsApp
                            </a>
                        </div>
                    </article>
                `;
            }).join('');
        }

        renderDesigns();

        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.filter-btn').forEach(b => {
                    b.classList.remove('bg-slate-950', 'text-white');
                    b.classList.add('bg-slate-100', 'text-slate-700');
                });
                btn.classList.add('bg-slate-950', 'text-white');
                btn.classList.remove('bg-slate-100', 'text-slate-700');
                renderDesigns(btn.dataset.filter);
            });
        });

        function scrollStories(direction) {
            document.getElementById('stories').scrollBy({ left: direction * 280, behavior: 'smooth' });
        }

        document.getElementById('menuBtn').addEventListener('click', () => {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });

        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>
</html>

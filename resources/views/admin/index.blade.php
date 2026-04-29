<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adili Fashion Hub Admin</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#111827',
                        accent: '#d4a017',
                        cream: '#fff7ed',
                        wine: '#7f1d1d'
                    }
                }
            }
        };
    </script>

    <style>
        body { font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .sidebar-link.active { background: linear-gradient(135deg, #d4a017, #92400e); color: #111827; font-weight: 800; }
        .page-section { display: none; }
        .page-section.active { display: block; }
        .soft-card { box-shadow: 0 16px 45px rgba(15, 23, 42, .08); }
    </style>
</head>
<body class="bg-slate-100 text-slate-900">

    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside id="sidebar" class="fixed lg:static inset-y-0 left-0 z-50 w-72 bg-slate-950 text-white transform -translate-x-full lg:translate-x-0 transition-transform duration-300 flex flex-col">
            <div class="h-20 px-5 flex items-center gap-3 border-b border-white/10">
                <div class="h-12 w-12 rounded-2xl bg-gradient-to-br from-yellow-400 to-orange-700 flex items-center justify-center shadow-lg text-slate-950">
                    <i class="fas fa-shirt text-xl"></i>
                </div>
                <div>
                    <h1 class="font-black leading-tight">Adili Fashion Hub</h1>
                    <p class="text-[11px] text-yellow-300 uppercase tracking-wider">Admin Panel</p>
                </div>
            </div>

            <nav class="flex-1 px-4 py-5 space-y-2 overflow-y-auto hide-scrollbar">
                <button class="sidebar-link active w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm hover:bg-white/10 transition" data-page="dashboard">
                    <i class="fas fa-chart-line w-5"></i> Dashboard
                </button>
                <button class="sidebar-link w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm hover:bg-white/10 transition" data-page="styles">
                    <i class="fas fa-images w-5"></i> Styles / Designs
                </button>
                <button class="sidebar-link w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm hover:bg-white/10 transition" data-page="upload">
                    <i class="fas fa-cloud-arrow-up w-5"></i> Upload New Style
                </button>
                <button class="sidebar-link w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm hover:bg-white/10 transition" data-page="types">
                    <i class="fas fa-layer-group w-5"></i> Style Types
                </button>
                <button class="sidebar-link w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm hover:bg-white/10 transition" data-page="pricing">
                    <i class="fas fa-naira-sign w-5"></i> Pricing
                </button>
                <button class="sidebar-link w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm hover:bg-white/10 transition" data-page="socials">
                    <i class="fas fa-share-nodes w-5"></i> Social Accounts
                </button>
                <button class="sidebar-link w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm hover:bg-white/10 transition" data-page="admins">
                    <i class="fas fa-user-shield w-5"></i> Admin Users
                </button>
                <button class="sidebar-link w-full flex items-center gap-3 px-4 py-3 rounded-2xl text-sm hover:bg-white/10 transition" data-page="settings">
                    <i class="fas fa-gear w-5"></i> Settings
                </button>
            </nav>

            <div class="p-4 border-t border-white/10">
                <div class="bg-white/10 rounded-3xl p-4">
                    <p class="text-sm font-bold">Logged in as</p>
                    <p class="text-xs text-slate-300 mt-1">Super Admin</p>
                    <button class="mt-4 w-full py-2 rounded-2xl bg-red-500/20 text-red-200 text-sm hover:bg-red-500/30">
                        <i class="fas fa-right-from-bracket mr-2"></i> Logout
                    </button>
                </div>
            </div>
        </aside>

        <!-- Overlay -->
        <div id="overlay" class="fixed inset-0 bg-black/40 z-40 hidden lg:hidden"></div>

        <!-- Main -->
        <main class="flex-1 min-w-0">
            <!-- Topbar -->
            <header class="h-20 bg-white border-b border-slate-200 sticky top-0 z-30 px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <button id="openSidebar" class="lg:hidden h-11 w-11 rounded-2xl bg-slate-100 text-slate-700">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div>
                        <h2 id="pageTitle" class="text-xl font-black">Dashboard</h2>
                        <p class="text-xs text-slate-500">Manage designs, prices, social links and admins</p>
                    </div>
                </div>

                <div class="flex items-center gap-3">
                    <button class="hidden sm:flex px-4 py-2 rounded-2xl bg-slate-100 text-sm font-bold items-center gap-2">
                        <i class="fas fa-eye text-accent"></i> Preview Site
                    </button>
                    <button data-page-jump="upload" class="px-4 py-2 rounded-2xl bg-slate-950 text-white text-sm font-bold hover:bg-accent hover:text-slate-950 transition">
                        <i class="fas fa-plus mr-1"></i> Add Style
                    </button>
                </div>
            </header>

            <div class="p-4 sm:p-6 lg:p-8">
                <!-- Dashboard -->
                <section id="dashboard" class="page-section active">
                    <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-5">
                        <div class="bg-white rounded-3xl p-6 soft-card">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-slate-500">Total Styles</p>
                                    <h3 class="text-3xl font-black mt-2">126</h3>
                                </div>
                                <div class="h-12 w-12 rounded-2xl bg-yellow-100 text-yellow-700 flex items-center justify-center"><i class="fas fa-images"></i></div>
                            </div>
                            <p class="text-xs text-green-600 mt-4 font-bold"><i class="fas fa-arrow-up"></i> 12 new this month</p>
                        </div>

                        <div class="bg-white rounded-3xl p-6 soft-card">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-slate-500">Style Types</p>
                                    <h3 class="text-3xl font-black mt-2">8</h3>
                                </div>
                                <div class="h-12 w-12 rounded-2xl bg-orange-100 text-orange-700 flex items-center justify-center"><i class="fas fa-layer-group"></i></div>
                            </div>
                            <p class="text-xs text-slate-500 mt-4">Ankara, Lace, Wedding...</p>
                        </div>

                        <div class="bg-white rounded-3xl p-6 soft-card">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-slate-500">WhatsApp Clicks</p>
                                    <h3 class="text-3xl font-black mt-2">342</h3>
                                </div>
                                <div class="h-12 w-12 rounded-2xl bg-green-100 text-green-700 flex items-center justify-center"><i class="fab fa-whatsapp"></i></div>
                            </div>
                            <p class="text-xs text-green-600 mt-4 font-bold">Good conversion activity</p>
                        </div>

                        <div class="bg-white rounded-3xl p-6 soft-card">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-slate-500">Social Links</p>
                                    <h3 class="text-3xl font-black mt-2">5</h3>
                                </div>
                                <div class="h-12 w-12 rounded-2xl bg-blue-100 text-blue-700 flex items-center justify-center"><i class="fas fa-share-nodes"></i></div>
                            </div>
                            <p class="text-xs text-slate-500 mt-4">Facebook, Instagram, TikTok...</p>
                        </div>
                    </div>

                    <div class="grid xl:grid-cols-3 gap-6 mt-7">
                        <div class="xl:col-span-2 bg-white rounded-3xl p-6 soft-card">
                            <div class="flex items-center justify-between mb-5">
                                <h3 class="font-black text-lg">Recent Uploaded Styles</h3>
                                <button data-page-jump="styles" class="text-sm text-accent font-bold">View all</button>
                            </div>
                            <div class="overflow-x-auto hide-scrollbar">
                                <table class="w-full text-sm">
                                    <thead class="text-left text-slate-500 border-b">
                                        <tr>
                                            <th class="py-3">Style</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y">
                                        <tr>
                                            <td class="py-4 flex items-center gap-3"><img src="https://images.unsplash.com/photo-1596783074918-c84cb06531ca?auto=format&fit=crop&w=80&q=80" class="h-12 w-12 rounded-2xl object-cover"> AFH-001 Royal Ankara</td>
                                            <td>Ankara</td>
                                            <td>₦25,000</td>
                                            <td><span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-bold">Published</span></td>
                                            <td><button class="text-slate-400 hover:text-slate-900"><i class="fas fa-ellipsis"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="py-4 flex items-center gap-3"><img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?auto=format&fit=crop&w=80&q=80" class="h-12 w-12 rounded-2xl object-cover"> AFH-002 Luxury Lace</td>
                                            <td>Lace</td>
                                            <td>Negotiable</td>
                                            <td><span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs font-bold">Featured</span></td>
                                            <td><button class="text-slate-400 hover:text-slate-900"><i class="fas fa-ellipsis"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td class="py-4 flex items-center gap-3"><img src="https://images.unsplash.com/photo-1594736797933-d0501ba2fe65?auto=format&fit=crop&w=80&q=80" class="h-12 w-12 rounded-2xl object-cover"> AFH-003 Wedding Look</td>
                                            <td>Wedding</td>
                                            <td>₦45,000+</td>
                                            <td><span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-bold">Published</span></td>
                                            <td><button class="text-slate-400 hover:text-slate-900"><i class="fas fa-ellipsis"></i></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="bg-slate-950 rounded-3xl p-6 soft-card text-white relative overflow-hidden">
                            <div class="absolute -right-8 -top-8 h-32 w-32 bg-yellow-400/20 rounded-full blur-2xl"></div>
                            <h3 class="font-black text-lg relative">Quick Actions</h3>
                            <div class="mt-5 space-y-3 relative">
                                <button data-page-jump="upload" class="w-full bg-white/10 hover:bg-white/20 rounded-2xl p-4 text-left flex items-center gap-3">
                                    <i class="fas fa-plus text-yellow-300"></i> Upload new style
                                </button>
                                <button data-page-jump="types" class="w-full bg-white/10 hover:bg-white/20 rounded-2xl p-4 text-left flex items-center gap-3">
                                    <i class="fas fa-layer-group text-yellow-300"></i> Add style type
                                </button>
                                <button data-page-jump="socials" class="w-full bg-white/10 hover:bg-white/20 rounded-2xl p-4 text-left flex items-center gap-3">
                                    <i class="fas fa-share-nodes text-yellow-300"></i> Update social accounts
                                </button>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Styles -->
                <section id="styles" class="page-section">
                    <div class="bg-white rounded-3xl p-5 soft-card mb-6">
                        <div class="flex flex-col md:flex-row gap-4 md:items-center md:justify-between">
                            <div>
                                <h3 class="font-black text-xl">All Uploaded Styles</h3>
                                <p class="text-sm text-slate-500">Manage designs shown on the public landing page.</p>
                            </div>
                            <div class="flex gap-3">
                                <input type="search" placeholder="Search style code or name..." class="w-full md:w-72 rounded-2xl border border-slate-200 px-4 py-3 text-sm focus:outline-none focus:ring-4 focus:ring-yellow-100" />
                                <button data-page-jump="upload" class="px-5 py-3 rounded-2xl bg-slate-950 text-white text-sm font-bold whitespace-nowrap">Add New</button>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
                        <article class="bg-white rounded-3xl overflow-hidden soft-card">
                            <img src="https://images.unsplash.com/photo-1596783074918-c84cb06531ca?auto=format&fit=crop&w=800&q=80" class="h-64 w-full object-cover">
                            <div class="p-5">
                                <div class="flex items-start justify-between gap-3">
                                    <div>
                                        <span class="text-xs font-black text-accent">AFH-001</span>
                                        <h3 class="font-black text-lg">Royal Ankara Gown</h3>
                                        <p class="text-sm text-slate-500 mt-1">Type: Ankara</p>
                                    </div>
                                    <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-bold">Published</span>
                                </div>
                                <div class="mt-5 flex items-center justify-between">
                                    <p class="font-black">₦25,000</p>
                                    <div class="flex gap-2">
                                        <button class="h-10 w-10 rounded-xl bg-slate-100"><i class="fas fa-pen"></i></button>
                                        <button class="h-10 w-10 rounded-xl bg-red-50 text-red-600"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="bg-white rounded-3xl overflow-hidden soft-card">
                            <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?auto=format&fit=crop&w=800&q=80" class="h-64 w-full object-cover">
                            <div class="p-5">
                                <div class="flex items-start justify-between gap-3">
                                    <div>
                                        <span class="text-xs font-black text-accent">AFH-002</span>
                                        <h3 class="font-black text-lg">Luxury Lace Style</h3>
                                        <p class="text-sm text-slate-500 mt-1">Type: Lace</p>
                                    </div>
                                    <span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs font-bold">Featured</span>
                                </div>
                                <div class="mt-5 flex items-center justify-between">
                                    <p class="font-black">Negotiable</p>
                                    <div class="flex gap-2">
                                        <button class="h-10 w-10 rounded-xl bg-slate-100"><i class="fas fa-pen"></i></button>
                                        <button class="h-10 w-10 rounded-xl bg-red-50 text-red-600"><i class="fas fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="bg-white rounded-3xl overflow-hidden soft-card border-2 border-dashed border-slate-300 flex items-center justify-center min-h-[420px]">
                            <button data-page-jump="upload" class="text-center p-8">
                                <div class="h-16 w-16 rounded-3xl bg-yellow-100 text-yellow-700 flex items-center justify-center mx-auto text-2xl">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <h3 class="font-black mt-4">Upload New Style</h3>
                                <p class="text-sm text-slate-500 mt-2">Add more designs to your public catalogue.</p>
                            </button>
                        </article>
                    </div>
                </section>

                <!-- Upload -->
                <section id="upload" class="page-section">
                    <div class="grid xl:grid-cols-3 gap-6">
                        <form class="xl:col-span-2 bg-white rounded-3xl p-6 soft-card space-y-6">
                            <div>
                                <h3 class="font-black text-xl">Upload New Style</h3>
                                <p class="text-sm text-slate-500">This is the information customers will see on the landing page.</p>
                            </div>

                            <div class="grid md:grid-cols-2 gap-5">
                                <div>
                                    <label class="text-sm font-bold">Style Name</label>
                                    <input type="text" placeholder="e.g. Royal Ankara Gown" class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100" />
                                </div>
                                <div>
                                    <label class="text-sm font-bold">Style Code</label>
                                    <input type="text" placeholder="Auto: AFH-007" class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100" />
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-5">
                                <div>
                                    <label class="text-sm font-bold">Style Type</label>
                                    <select class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100">
                                        <option>Ankara</option>
                                        <option>Lace</option>
                                        <option>Wedding</option>
                                        <option>Casual</option>
                                        <option>Eid Collection</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="text-sm font-bold">Price Display</label>
                                    <select class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100">
                                        <option>Fixed price</option>
                                        <option>Starting from</option>
                                        <option>Negotiable</option>
                                        <option>Contact for price</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-5">
                                <div>
                                    <label class="text-sm font-bold">Amount</label>
                                    <div class="mt-2 relative">
                                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-500">₦</span>
                                        <input type="number" placeholder="25000" class="w-full rounded-2xl border border-slate-200 pl-9 pr-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100" />
                                    </div>
                                </div>
                                <div>
                                    <label class="text-sm font-bold">Status</label>
                                    <select class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100">
                                        <option>Published</option>
                                        <option>Draft</option>
                                        <option>Featured</option>
                                        <option>Hidden</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="text-sm font-bold">Description</label>
                                <textarea rows="4" placeholder="Short description of the design..." class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100"></textarea>
                            </div>

                            <div>
                                <label class="text-sm font-bold">Upload Style Images</label>
                                <div id="dropZone" class="mt-2 rounded-3xl border-2 border-dashed border-slate-300 bg-slate-50 p-8 text-center cursor-pointer hover:bg-yellow-50 hover:border-yellow-300 transition">
                                    <input id="imageInput" type="file" accept="image/*" multiple class="hidden" />
                                    <i class="fas fa-cloud-arrow-up text-4xl text-accent"></i>
                                    <h4 class="font-black mt-3">Drop images here or click to upload</h4>
                                    <p class="text-sm text-slate-500 mt-1">Recommended: clear front view, side view, and detail view.</p>
                                </div>
                                <div id="previewImages" class="grid grid-cols-3 sm:grid-cols-5 gap-3 mt-4"></div>
                            </div>

                            <div class="flex flex-col sm:flex-row gap-3 justify-end pt-3">
                                <button type="button" class="px-6 py-3 rounded-2xl bg-slate-100 font-bold">Save Draft</button>
                                <button type="button" class="px-6 py-3 rounded-2xl bg-slate-950 text-white font-bold hover:bg-accent hover:text-slate-950 transition">Publish Style</button>
                            </div>
                        </form>

                        <aside class="space-y-6">
                            <div class="bg-slate-950 text-white rounded-3xl p-6 soft-card">
                                <h3 class="font-black text-lg">Public Preview</h3>
                                <div class="mt-5 bg-white/10 rounded-3xl overflow-hidden">
                                    <div class="h-56 bg-white/10 flex items-center justify-center text-slate-400">
                                        <i class="fas fa-image text-5xl"></i>
                                    </div>
                                    <div class="p-4">
                                        <span class="text-xs text-yellow-300 font-bold">AFH-007</span>
                                        <h4 class="font-black mt-1">New Style Name</h4>
                                        <p class="text-sm text-slate-300 mt-2">This preview shows how it may appear on the landing page.</p>
                                        <button class="mt-4 w-full py-3 rounded-2xl bg-green-500 font-bold"><i class="fab fa-whatsapp mr-1"></i> Ask on WhatsApp</button>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-3xl p-6 soft-card">
                                <h3 class="font-black text-lg">Upload Tips</h3>
                                <ul class="mt-4 space-y-3 text-sm text-slate-600">
                                    <li><i class="fas fa-check text-green-600 mr-2"></i> Use bright, clear photos.</li>
                                    <li><i class="fas fa-check text-green-600 mr-2"></i> Add style code to every design.</li>
                                    <li><i class="fas fa-check text-green-600 mr-2"></i> Use “Negotiable” when price changes by fabric.</li>
                                    <li><i class="fas fa-check text-green-600 mr-2"></i> Mark your best styles as Featured.</li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </section>

                <!-- Types -->
                <section id="types" class="page-section">
                    <div class="grid lg:grid-cols-3 gap-6">
                        <form class="bg-white rounded-3xl p-6 soft-card space-y-5">
                            <div>
                                <h3 class="font-black text-xl">Add Style Type</h3>
                                <p class="text-sm text-slate-500">Examples: Ankara, Lace, Wedding, Eid.</p>
                            </div>
                            <div>
                                <label class="text-sm font-bold">Type Name</label>
                                <input type="text" placeholder="e.g. Bridal Wear" class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100" />
                            </div>
                            <div>
                                <label class="text-sm font-bold">Icon</label>
                                <select class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100">
                                    <option>fa-shirt</option>
                                    <option>fa-crown</option>
                                    <option>fa-gem</option>
                                    <option>fa-moon</option>
                                    <option>fa-female</option>
                                </select>
                            </div>
                            <div>
                                <label class="text-sm font-bold">Description</label>
                                <textarea rows="3" class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100"></textarea>
                            </div>
                            <button type="button" class="w-full py-3 rounded-2xl bg-slate-950 text-white font-bold">Save Type</button>
                        </form>

                        <div class="lg:col-span-2 bg-white rounded-3xl p-6 soft-card">
                            <h3 class="font-black text-xl mb-5">Existing Types</h3>
                            <div class="grid sm:grid-cols-2 gap-4">
                                <div class="border rounded-3xl p-5 flex items-center gap-4">
                                    <div class="h-12 w-12 rounded-2xl bg-yellow-100 text-yellow-700 flex items-center justify-center"><i class="fas fa-shirt"></i></div>
                                    <div class="flex-1"><h4 class="font-black">Ankara</h4><p class="text-xs text-slate-500">32 styles</p></div>
                                    <button class="text-slate-400"><i class="fas fa-pen"></i></button>
                                </div>
                                <div class="border rounded-3xl p-5 flex items-center gap-4">
                                    <div class="h-12 w-12 rounded-2xl bg-red-100 text-red-700 flex items-center justify-center"><i class="fas fa-gem"></i></div>
                                    <div class="flex-1"><h4 class="font-black">Lace</h4><p class="text-xs text-slate-500">18 styles</p></div>
                                    <button class="text-slate-400"><i class="fas fa-pen"></i></button>
                                </div>
                                <div class="border rounded-3xl p-5 flex items-center gap-4">
                                    <div class="h-12 w-12 rounded-2xl bg-orange-100 text-orange-700 flex items-center justify-center"><i class="fas fa-crown"></i></div>
                                    <div class="flex-1"><h4 class="font-black">Wedding</h4><p class="text-xs text-slate-500">12 styles</p></div>
                                    <button class="text-slate-400"><i class="fas fa-pen"></i></button>
                                </div>
                                <div class="border rounded-3xl p-5 flex items-center gap-4">
                                    <div class="h-12 w-12 rounded-2xl bg-green-100 text-green-700 flex items-center justify-center"><i class="fas fa-moon"></i></div>
                                    <div class="flex-1"><h4 class="font-black">Eid Collection</h4><p class="text-xs text-slate-500">24 styles</p></div>
                                    <button class="text-slate-400"><i class="fas fa-pen"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Pricing -->
                <section id="pricing" class="page-section">
                    <div class="bg-white rounded-3xl p-6 soft-card">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
                            <div>
                                <h3 class="font-black text-xl">Price Settings</h3>
                                <p class="text-sm text-slate-500">Control how prices appear to customers.</p>
                            </div>
                            <button class="px-5 py-3 rounded-2xl bg-slate-950 text-white font-bold">Add Price Rule</button>
                        </div>

                        <div class="overflow-x-auto hide-scrollbar">
                            <table class="w-full text-sm">
                                <thead class="text-left text-slate-500 border-b">
                                    <tr>
                                        <th class="py-3">Style Type</th>
                                        <th>Default Price</th>
                                        <th>Display Mode</th>
                                        <th>Negotiable?</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y">
                                    <tr>
                                        <td class="py-4 font-bold">Ankara</td>
                                        <td>₦25,000</td>
                                        <td>Starting from</td>
                                        <td><span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-bold">Yes</span></td>
                                        <td><button class="text-accent font-bold">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 font-bold">Lace</td>
                                        <td>₦45,000</td>
                                        <td>Contact for price</td>
                                        <td><span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-bold">Yes</span></td>
                                        <td><button class="text-accent font-bold">Edit</button></td>
                                    </tr>
                                    <tr>
                                        <td class="py-4 font-bold">Wedding</td>
                                        <td>₦80,000</td>
                                        <td>Starting from</td>
                                        <td><span class="px-3 py-1 rounded-full bg-yellow-100 text-yellow-700 text-xs font-bold">Depends</span></td>
                                        <td><button class="text-accent font-bold">Edit</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!-- Socials -->
                <section id="socials" class="page-section">
                    <form class="bg-white rounded-3xl p-6 soft-card max-w-4xl space-y-5">
                        <div>
                            <h3 class="font-black text-xl">Social Media Accounts</h3>
                            <p class="text-sm text-slate-500">These links can show on the public landing page.</p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-5">
                            <div>
                                <label class="text-sm font-bold"><i class="fab fa-facebook text-blue-600 mr-2"></i>Facebook Page</label>
                                <input type="url" placeholder="https://facebook.com/adilifashionhub" class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100" />
                            </div>
                            <div>
                                <label class="text-sm font-bold"><i class="fab fa-instagram text-pink-600 mr-2"></i>Instagram</label>
                                <input type="url" placeholder="https://instagram.com/adilifashionhub" class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100" />
                            </div>
                            <div>
                                <label class="text-sm font-bold"><i class="fab fa-tiktok mr-2"></i>TikTok</label>
                                <input type="url" placeholder="https://tiktok.com/@adilifashionhub" class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100" />
                            </div>
                            <div>
                                <label class="text-sm font-bold"><i class="fab fa-whatsapp text-green-600 mr-2"></i>WhatsApp Number</label>
                                <input type="text" placeholder="2348000000000" class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100" />
                            </div>
                            <div>
                                <label class="text-sm font-bold"><i class="fab fa-youtube text-red-600 mr-2"></i>YouTube</label>
                                <input type="url" placeholder="Optional YouTube link" class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100" />
                            </div>
                            <div>
                                <label class="text-sm font-bold"><i class="fas fa-location-dot text-orange-600 mr-2"></i>Business Location</label>
                                <input type="text" placeholder="Kano, Kaduna, Katsina, etc." class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100" />
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <button type="button" class="px-7 py-3 rounded-2xl bg-slate-950 text-white font-bold">Save Social Links</button>
                        </div>
                    </form>
                </section>

                <!-- Admins -->
                <section id="admins" class="page-section">
                    <div class="grid lg:grid-cols-3 gap-6">
                        <form class="bg-white rounded-3xl p-6 soft-card space-y-5">
                            <div>
                                <h3 class="font-black text-xl">Add Admin User</h3>
                                <p class="text-sm text-slate-500">Allow trusted people to upload styles.</p>
                            </div>
                            <div>
                                <label class="text-sm font-bold">Full Name</label>
                                <input type="text" class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100" />
                            </div>
                            <div>
                                <label class="text-sm font-bold">Email</label>
                                <input type="email" class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100" />
                            </div>
                            <div>
                                <label class="text-sm font-bold">Role</label>
                                <select class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100">
                                    <option>Uploader</option>
                                    <option>Manager</option>
                                    <option>Super Admin</option>
                                </select>
                            </div>
                            <button type="button" class="w-full py-3 rounded-2xl bg-slate-950 text-white font-bold">Create Admin</button>
                        </form>

                        <div class="lg:col-span-2 bg-white rounded-3xl p-6 soft-card">
                            <h3 class="font-black text-xl mb-5">Admin Users</h3>
                            <div class="space-y-3">
                                <div class="border rounded-3xl p-4 flex items-center gap-4">
                                    <div class="h-12 w-12 rounded-2xl bg-slate-950 text-white flex items-center justify-center font-black">A</div>
                                    <div class="flex-1"><h4 class="font-black">Adili Admin</h4><p class="text-xs text-slate-500">Super Admin</p></div>
                                    <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-bold">Active</span>
                                </div>
                                <div class="border rounded-3xl p-4 flex items-center gap-4">
                                    <div class="h-12 w-12 rounded-2xl bg-yellow-100 text-yellow-700 flex items-center justify-center font-black">U</div>
                                    <div class="flex-1"><h4 class="font-black">Style Uploader</h4><p class="text-xs text-slate-500">Can upload and edit styles</p></div>
                                    <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-bold">Active</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Settings -->
                <section id="settings" class="page-section">
                    <form class="bg-white rounded-3xl p-6 soft-card max-w-4xl space-y-5">
                        <div>
                            <h3 class="font-black text-xl">Site Settings</h3>
                            <p class="text-sm text-slate-500">General settings for the public site.</p>
                        </div>
                        <div>
                            <label class="text-sm font-bold">Business Name</label>
                            <input type="text" value="Adili Fashion Hub" class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100" />
                        </div>
                        <div>
                            <label class="text-sm font-bold">Landing Page Hero Text</label>
                            <textarea rows="3" class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100">Elegant styles made for your perfect fit.</textarea>
                        </div>
                        <div>
                            <label class="text-sm font-bold">Default WhatsApp Message</label>
                            <textarea rows="3" class="mt-2 w-full rounded-2xl border border-slate-200 px-4 py-3 focus:outline-none focus:ring-4 focus:ring-yellow-100">Hello Adili Fashion Hub, I saw your fashion website and I want to make an outfit.</textarea>
                        </div>
                        <button type="button" class="px-7 py-3 rounded-2xl bg-slate-950 text-white font-bold">Save Settings</button>
                    </form>
                </section>
            </div>
        </main>
    </div>

    <script>
        const links = document.querySelectorAll('.sidebar-link');
        const sections = document.querySelectorAll('.page-section');
        const pageTitle = document.getElementById('pageTitle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');

        const titles = {
            dashboard: 'Dashboard',
            styles: 'Styles / Designs',
            upload: 'Upload New Style',
            types: 'Style Types',
            pricing: 'Pricing',
            socials: 'Social Accounts',
            admins: 'Admin Users',
            settings: 'Settings'
        };

        function showPage(page) {
            sections.forEach(section => section.classList.remove('active'));
            document.getElementById(page).classList.add('active');
            links.forEach(link => link.classList.toggle('active', link.dataset.page === page));
            pageTitle.textContent = titles[page] || 'Dashboard';
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }

        links.forEach(link => {
            link.addEventListener('click', () => showPage(link.dataset.page));
        });

        document.querySelectorAll('[data-page-jump]').forEach(btn => {
            btn.addEventListener('click', () => showPage(btn.dataset.pageJump));
        });

        document.getElementById('openSidebar').addEventListener('click', () => {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        });

        overlay.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        });

        const dropZone = document.getElementById('dropZone');
        const imageInput = document.getElementById('imageInput');
        const previewImages = document.getElementById('previewImages');

        if (dropZone && imageInput) {
            dropZone.addEventListener('click', () => imageInput.click());
            imageInput.addEventListener('change', () => {
                previewImages.innerHTML = '';
                [...imageInput.files].forEach(file => {
                    const reader = new FileReader();
                    reader.onload = e => {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'h-24 w-full object-cover rounded-2xl border border-slate-200';
                        previewImages.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                });
            });
        }
    </script>
</body>
</html>

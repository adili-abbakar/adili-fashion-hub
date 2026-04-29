<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adili Admin Login</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <style>
        body {
            font-family: Inter, system-ui, sans-serif;
        }

        .bg-design {
            background: radial-gradient(circle at top left, rgba(212, 160, 23, .3), transparent 30%),
                radial-gradient(circle at bottom right, rgba(127, 29, 29, .4), transparent 35%),
                linear-gradient(135deg, #0f172a, #1f2937, #451a03);
        }
    </style>
</head>

<body class="bg-design min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md">

        <!-- Logo / Title -->
        <div class="text-center mb-8 text-white">
            <div
                class="h-16 w-16 mx-auto rounded-3xl bg-gradient-to-br from-yellow-400 to-orange-600 flex items-center justify-center shadow-xl text-slate-900 text-2xl mb-4">
                <i class="fas fa-shirt"></i>
            </div>
            <h1 class="text-3xl font-black">Adili Fashion Hub</h1>
            <p class="text-sm text-yellow-200">Admin Panel Login</p>
        </div>

        <!-- Login Card -->
        <div class="bg-white rounded-3xl shadow-2xl p-8">

            <h2 class="text-xl font-black text-center mb-6">Sign in to your account</h2>

            <form class="space-y-5">

                <!-- Email -->
                <div>
                    <label class="text-sm font-bold">Email Address</label>
                    <div class="relative mt-2">
                        <i class="fas fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                        <input type="email" placeholder="admin@email.com"
                            class="w-full pl-10 pr-4 py-3 rounded-2xl border border-slate-200 focus:outline-none focus:ring-4 focus:ring-yellow-100" />
                    </div>
                </div>

                <!-- Password -->
                <div>
                    <label class="text-sm font-bold">Password</label>
                    <div class="relative mt-2">
                        <i class="fas fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-slate-400"></i>
                        <input type="password" id="password" placeholder="••••••••"
                            class="w-full pl-10 pr-10 py-3 rounded-2xl border border-slate-200 focus:outline-none focus:ring-4 focus:ring-yellow-100" />
                        <button type="button" onclick="togglePassword()"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">
                            <i id="eyeIcon" class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <!-- Remember + Forgot -->
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" class="rounded border-slate-300">
                        Remember me
                    </label>
                    <a href="#" class="text-yellow-600 font-bold hover:underline">Forgot password?</a>
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full py-3 rounded-2xl bg-slate-950 text-white font-bold hover:bg-yellow-400 hover:text-slate-900 transition">
                    <i class="fas fa-right-to-bracket mr-2"></i>
                    Login
                </button>

            </form>

            <!-- Divider -->
            <div class="my-6 flex items-center gap-3">
                <div class="flex-1 h-px bg-slate-200"></div>
                <span class="text-xs text-slate-400">OR</span>
                <div class="flex-1 h-px bg-slate-200"></div>
            </div>

            <!-- Social Login (optional future) -->
            <div class="grid grid-cols-2 gap-3">
                <button class="py-2 rounded-2xl bg-slate-100 text-sm font-bold flex items-center justify-center gap-2">
                    <i class="fab fa-google"></i> Google
                </button>
                <button class="py-2 rounded-2xl bg-slate-100 text-sm font-bold flex items-center justify-center gap-2">
                    <i class="fab fa-facebook"></i> Facebook
                </button>
            </div>

        </div>

        <!-- Footer -->
        <p class="text-center text-xs text-slate-300 mt-6">© 2026 Adili Fashion Hub</p>

    </div>

    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            const icon = document.getElementById('eyeIcon');

            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>

</body>

</html>

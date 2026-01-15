<!DOCTYPE html>
<html lang="pt-br" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fernando Nogueira | Full Stack Engineer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .neon-shadow { box-shadow: 0 0 15px rgba(16, 185, 129, 0.2); }
        .neon-text { text-shadow: 0 0 10px rgba(16, 185, 129, 0.5); }
        .glass { background: rgba(15, 23, 42, 0.8); backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.1); }
        .bg-grid { background-image: radial-gradient(circle, rgba(16, 185, 129, 0.1) 1px, transparent 1px); background-size: 30px 30px; }
    </style>
</head>
<body class="bg-[#020617] text-slate-300 font-['Inter'] bg-grid">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

</body>
</html>
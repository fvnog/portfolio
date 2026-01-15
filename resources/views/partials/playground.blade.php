<section id="playground" class="py-24 bg-slate-950/50">
    <div class="max-w-5xl mx-auto px-6">
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">API Playground</h2>
            <p class="text-slate-400">Interaja com meus microserviços em tempo real.</p>
        </div>

        <div class="glass rounded-3xl overflow-hidden border border-white/5">
            <div class="bg-slate-900/80 p-4 border-b border-white/5 flex flex-wrap items-center justify-between gap-4">
                <div class="flex items-center gap-2">
                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                    <span class="ml-4 font-mono text-xs text-slate-500 tracking-widest uppercase">system_executor // root@portfolio</span>
                </div>
                
                <nav class="flex gap-1 bg-black/20 p-1 rounded-xl">
                    <button onclick="switchTab('json')" class="tab-btn active-tab" id="tab-json">JSON_CONV</button>
                    <button onclick="switchTab('wpp')" class="tab-btn" id="tab-wpp">WPP_API</button>
                    <button onclick="switchTab('img')" class="tab-btn" id="tab-img">IMG_PROC</button>
                    <button onclick="switchTab('weather')" class="tab-btn" id="tab-weather">WEATHER_SYNC</button>
                </nav>
            </div>

            <div class="p-8">
                <div id="content-json" class="tab-content">
                    <div class="grid gap-6">
                        <div>
                            <label class="block font-mono text-[10px] uppercase text-emerald-500 mb-2 font-bold tracking-tighter">Payload_Input (JSON)</label>
                            <textarea id="api-input" class="input-field h-40" placeholder='{"user": "Fernando", "role": "FullStack"}'></textarea>
                        </div>
                        <button onclick="execute('json')" class="btn-execute">RUN_TRANSFORMATION()</button>
                    </div>
                </div>

<div id="content-wpp" class="tab-content hidden">
    <div class="grid md:grid-cols-2 gap-6">
        <div class="space-y-4">
            <div>
                <label class="block font-mono text-[10px] uppercase text-blue-400 mb-2 font-bold">Seu WhatsApp (DDI + DDD + Numero)</label>
                <input type="text" id="wpp-number" class="input-field" placeholder="55319XXXXXXXX">
            </div>
            
            <div>
                <label class="block font-mono text-[10px] uppercase text-blue-400 mb-2 font-bold">Mensagem Personalizada</label>
                <textarea id="wpp-message" class="input-field h-24" placeholder="Fala Fernando, vi seu portfólio e queria falar sobre um projeto..."></textarea>
            </div>
        </div>
        <div class="glass border border-blue-500/20 rounded-2xl p-6 flex flex-col items-center justify-center text-center">
            <div class="w-16 h-16 bg-blue-500/20 rounded-full flex items-center justify-center mb-4">
                <i class="fab fa-whatsapp text-3xl text-blue-500 animate-pulse"></i>
            </div>
            <p class="text-sm text-slate-300 font-bold mb-2">INTEGRAÇÃO EVOLUTION API</p>
            <p class="text-xs text-slate-500 mb-6">Ao clicar, meu servidor Node.js processará o webhook e gerará o link de conversa direta.</p>
            <button onclick="execute('wpp')" class="btn-execute !border-blue-500 !text-blue-500 hover:!bg-blue-500 hover:!text-white">
                GENERATE_WPP_REQUEST()
            </button>
        </div>
    </div>
</div>

                <div id="content-img" class="tab-content hidden">
                    <div class="border-2 border-dashed border-slate-700 rounded-3xl p-12 text-center hover:border-emerald-500/50 transition cursor-pointer">
                        <i class="fas fa-cloud-upload-alt text-4xl text-slate-600 mb-4"></i>
                        <p class="text-slate-400">Arraste uma imagem para converter ou remover o fundo</p>
                        <p class="text-[10px] text-slate-600 mt-2">WEBP, PNG, JPG supported (Max 5MB)</p>
                    </div>
                </div>

                <div id="content-weather" class="tab-content hidden">
                    <div class="flex gap-4 mb-6">
                        <input type="text" id="city-input" class="input-field" placeholder="Ex: Ipatinga, MG">
                        <button onclick="execute('weather')" class="px-6 py-3 bg-slate-800 rounded-xl hover:bg-slate-700">FETCH</button>
                    </div>
                    <div id="weather-result" class="grid grid-cols-3 gap-4 hidden">
                        </div>
                </div>

                <div id="result-area" class="mt-8 hidden">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="h-[1px] bg-slate-800 flex-grow"></div>
                        <span class="font-mono text-[10px] text-slate-500 uppercase">Response_Output</span>
                        <div class="h-[1px] bg-slate-800 flex-grow"></div>
                    </div>
                    <pre class="bg-black/40 p-6 rounded-2xl border border-white/5 text-emerald-400 overflow-x-auto text-sm font-mono"><code id="api-output">Waiting for execution...</code></pre>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .tab-btn { @apply px-4 py-2 font-mono text-xs text-slate-500 rounded-lg hover:text-white transition; }
    .active-tab { @apply bg-emerald-500/10 text-emerald-500 border border-emerald-500/20; }
    .input-field { @apply w-full bg-slate-900/50 border border-slate-700 rounded-xl p-4 font-mono text-sm focus:border-emerald-500 outline-none text-emerald-400 transition; }
    .btn-execute { @apply w-full py-4 bg-transparent border border-emerald-500 text-emerald-500 hover:bg-emerald-500 hover:text-slate-950 transition font-black rounded-xl tracking-widest text-xs; }
</style>
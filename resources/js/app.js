import './bootstrap';


document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-y-0');
                entry.target.classList.remove('opacity-0', 'translate-y-10');
            }
        });
    });

    document.querySelectorAll('.glass').forEach((el) => {
        el.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-700');
        observer.observe(el);
    });
});

window.switchTab = function(tab) {
    // Esconder todos os conteúdos
    document.querySelectorAll('.tab-content').forEach(c => c.classList.add('hidden'));
    // Remover classe ativa de todos os botões
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active-tab'));
    
    // Mostrar a aba selecionada
    document.getElementById(`content-${tab}`).classList.remove('hidden');
    document.getElementById(`tab-${tab}`).classList.add('active-tab');
}

window.execute = async function(type) {
    const output = document.getElementById('api-output');
    const resultArea = document.getElementById('result-area');
    resultArea.classList.remove('hidden');
    output.textContent = "Processing dynamic request...";

    // Aqui faremos os fetches conforme o tipo
    if(type === 'json') {
        const content = document.getElementById('api-input').value;
        // Chamar sua rota /api/convert
    }
    
    if(type === 'wpp') {
        const num = document.getElementById('wpp-number').value;
        const msg = document.getElementById('wpp-message').value;
        output.textContent = `Queuing message to ${num} via Evolution API...`;
        // Chamar sua rota /api/whatsapp-test
    }
}

window.runConversion = async function() {
    const input = document.getElementById('api-input').value;
    const btn = document.getElementById('btn-run');
    const resultArea = document.getElementById('result-area');
    const output = document.getElementById('api-output');

    btn.innerText = 'PROCESING...';
    btn.disabled = true;

    try {
        const response = await fetch('/api/convert', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                content: input,
                format: 'json_to_php_array'
            })
        });

        const data = await response.json();
        
        resultArea.classList.remove('hidden');
        output.textContent = data.result;
        btn.innerText = 'EXECUTE_CONVERSION()';
        btn.disabled = false;
    } catch (error) {
        alert('Erro na API. Verifique se o servidor está rodando.');
        btn.innerText = 'ERROR_RETRY()';
        btn.disabled = false;
    }
}
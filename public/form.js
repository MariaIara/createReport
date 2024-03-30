function criarCaixaPersonalizada(event) {
    console.log("hello")
    // event.preventDefault()
    const inputNomeCompleto = document.getElementById("nomeCompleto").value;
    const nomeArray = inputNomeCompleto.split(" ");
    const primeiroNome = nomeArray[0];
    const caixaPersonalizada = document.getElementById("caixaPersonalizada");

    caixaPersonalizada.innerHTML += `<div class="bg-blue-400 rounded-xl flex items-center gap-2 text-white p-2"><span>${primeiroNome}</span> 
    <button onclick="#" class="bg-white/30 rounded-full h-4 p-1 pb-2 flex justify-center items-center">x</button>
    </div>`;
}

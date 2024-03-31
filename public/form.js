function criarCaixaPersonalizada(event) {
    // event.preventDefault()
    const inputNomeCompleto = document.getElementById("nomeCompleto").value;
    const nomeArray = inputNomeCompleto.split(" ");
    const primeiroNome = nomeArray[0];
    const caixaPersonalizada = document.getElementById("caixaPersonalizada");

    caixaPersonalizada.innerHTML += `<div class="bg-blue-400 rounded-xl flex-col gap-2 text-white p-2"><span>${primeiroNome}</span> 
    <button onclick="#" class="bg-white/30 rounded-full h-4 p-1 pb-2 flex justify-center items-center">x</button>
    </div>`;
}

function criarCaixaPersonalizada2(event) {
    // event.preventDefault()
    const inputPauta = document.getElementById("pauta").value;
    const pauta = inputPauta;
    const caixaPersonalizada2 = document.getElementById("caixaPersonalizada2");

    caixaPersonalizada2.innerHTML += `<div class="bg-green-400 rounded-xl flex columns-auto items-center gap-2 text-white p-2 mt-2 w-fit"><span>${pauta}</span> 
    <button onclick="#" class="bg-white/30 rounded-full h-4 p-1 pb-2 flex justify-center items-center">x</button>
    </div>`;
}

function criarCaixaPersonalizada3(event) {
    console.log("hello")
    // event.preventDefault()
    const inputEmail = document.getElementById("emailAddress").value;
    const emailAdress = inputEmail;
    const caixaPersonalizada3 = document.getElementById("caixaPersonalizada3");

    caixaPersonalizada3.innerHTML += `<div class="bg-blue-400 rounded-xl flex columns-auto items-center gap-2 text-white p-2 mt-2 w-fit"><span>${emailAdress}</span> 
    <button onclick="#" class="bg-white/30 rounded-full h-4 p-1 pb-2 flex justify-center items-center">x</button>
    </div>`;
}

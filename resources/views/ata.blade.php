@extends('main')

@section('content')
<div class="relative isolate overflow-hidden bg-white-900 py-16 sm:py-24 lg:py-6">
    <div class="mx-auto mb-50 max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-5xl py-24 sm:px-6 sm:py-16 lg:px-8">
            <div class="relative isolate overflow-hidden bg-white px-6 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-20 lg:px-24 lg:pt-0">
                <div class="mt-16 lg:mt-16">
                    <img class="w-[8rem] max-w-none rounded-md bg-white/5 ring-1 ring-white/10" src="{{asset('success.png')}}" alt="App screenshot" width="1824" height="1080">
                </div>
                <div class="mx-auto max-w-md text-center lg:mx-0 lg:flex-auto lg:py-16 lg:text-left">
                    <h2 class="text-3xl font-bold tracking-tight text-black sm:text-4xl">
                        Você acabou de gerar sua ata.
                    </h2>
                    <div class="mt-10 flex items-center justify-center gap-x-6 lg:justify-start">
                        <a href="#" class="flex justify-center items-center gap-2 rounded-md bg-green-200 px-12 py-4 text-sm font-semibold text-black shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                            Baixar PDF
                            <img class="w-[2rem] max-w-none rounded-md bg-white/5 ring-1 ring-white/10" src="{{asset('download.png')}}" alt="App screenshot" width="1824" height="1080">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="ml-40">
            <h2 class="text-4xl font-bold tracking-tight text-black sm:text-3xl">Chegou a hora de compartilhar com sua equipe.</h2>
            <label for="nomeCompleto" class="block text-sm font-normal mt-2 leading-6 text-gray-900 mb-2">Será enviada uma cópia da ata criada para cada email adicionado. <br> Clique em Adicionar ou pressione ENTER.</label>
            <form action="" class="mt-6 flex gap-x-4">
                <div class="w-[800px] flex items-center rounded-md border-0 bg-indigo-200 px-3.5 py-3 text-black shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 placeholder:text-gray-600" placeholder="Digite um e-mail">
                    <div id="caixaPersonalizada3"  class="gap-2 flex items-center"></div>
                    <input id="emailAddress" name="email" type="email" autocomplete="email" required class="w-40 rounded-md border-0 bg-transparent px-3.5 text-black w-full outline-none sm:text-sm sm:leading-6 placeholder:text-gray-600" placeholder="Digite um e-mail">
                </div>
                <button onclick="criarCaixaPersonalizada3()" type="button" class="flex-none rounded-md bg-indigo-500 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Adicionar</button>
            </form>
        </div>
    </div>

    <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
        <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#cbc436] to-[#42e43c] opacity-30" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
</div>

<script src="{{asset('form.js')}}"></script>
@endsection
@extends('main')

@section('content')
<form action="">
  <div class="space-y-12 px-64 py-16 sm:mx-32">
    <div class="border-b border-gray-900/10 pb-8">
      <h2 class="text-4xl font-semibold leading-10 text-indigo-600">ATA DA REUNIÃO</h2>
      <p class="mt-1 text-sm leading-6 text-gray-600">Agora é só preencher as informações e gerar sua ata. :) </p>

      <div class="border-t border-gray-900/10 mt-10 grid grid-cols-6 gap-x-6 gap-y-8">
        <div class="sm:col-span-4 mt-10">
          <label for="name" class="block text-sm font-medium leading-6 text-gray-900">
            Título
          </label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="título" id="name" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Título da reunião">
            </div>
          </div>
        </div>

        <div class="col-span-full">
          <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Data</label>
          <div class="block border-2 rounded-md bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 w-40 mt-2">
            <input type="date">
          </div>
        </div>

        <div class="flex center items-center space-x-2">
          <div>
            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Horário de Início</label>
            <input type="time" class="block border-2 rounded-md bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 w-40 mt-2">
          </div>
          <div>
            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Horário de Término</label>
            <input type="time" class="block border-2 rounded-md bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 w-40 mt-2">
          </div>
        </div>

        <div class="col-span-full">
          <label for="responsável" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Reunião convocada a pedido de:</label>
          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
            <input type="text" id="responsável" class="block flex-1 border-1 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Seu nome">
          </div>
          <p class="mt-3 text-sm leading-6 text-gray-600">Neste campo, você precisa informar o responsável pela reunião.</p>
        </div>

        <div class="col-span-full">
          <label for="nomeCompleto" class="block text-sm font-medium leading-6 text-gray-900 mb-2">Nome dos participantes:</label>
          <input type="text" id="nomeCompleto" placeholder="Digite o nome completo" class="border-2 py-1.5 pl-3 w-96 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
          <button onclick="criarCaixaPersonalizada()" type="button" class="bg-indigo-600 px-4 py-1.5 text-white rounded-sm">OK</button>
          <div id="caixaPersonalizada" class="flex items-center gap-2 mt-2"></div>
        </div>

        <div class="col-span-full">
          <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Resumo da reunião</label>
          <div class="mt-2">
            <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Aqui você pode descrever de forma resumida o assunto da sua reunião. Fique à vontade."></textarea>
          </div>
        </div>

        <div class="col-span-full">
          <label for="resumo" class="block text-sm font-medium leading-6 text-gray-900">Pautas:</label>
          <div class="mt-2">
            <input type="text" id="pauta" placeholder="Descreva os tópicos comentados na reunião. Para cada tópico, clique em Adicionar." class="border-2 py-1.5 pl-3 w-full text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
          </div>
          <button onclick="criarCaixaPersonalizada2()" type="button" class="bg-indigo-600 px-8 py-1.5 mt-2 text-white rounded-sm">Adicionar</button>
          <div id="caixaPersonalizada2" class="gap-2 mt-2"></div>
        </div>

        <div class="col-span-full">
          <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Demandas pendentes</label>
          <div class="mt-2">
            <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
          </div>
          <p class="mt-3 text-sm leading-6 text-gray-600">Descreva as demandas pendentes que foram citadas na reunião.</p>
        </div>

        <div class="col-span-full">
          <label for="decisões" class="block text-sm font-medium leading-6 text-gray-900">Tomadas de decisão</label>
          <div class="mt-2">
            <textarea id="decisões" name="about" rows="2" class="block w-full rounded-md border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Decidiram algo? Pode informar aqui."></textarea>
          </div>
        </div>

        <div class="col-span-full">
          <label for="agend" class="block text-sm font-medium leading-6 text-gray-900">Agendamento da próxima reunião</label>
          <div>
            <!-- <label for="agendamento" class="block text-sm font-medium leading-6 text-gray-900">Data</label> -->
            <div class="block border-2 rounded-md bg-transparent py-1.5 pl-6 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 w-60 mt-2">
              <input type="datetime-local">
            </div>
          </div>
        </div>

        <div class="col-span-full mb-0">
          <label for="nome" class="block text-sm font-medium leading-6 text-gray-900">Área destinada à assinatura do responsável pela ata</label>
          <div class="mt-2 flex items-center gap-x-3">
            <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
            </svg>
            <input type="text" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-normal w-96 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Seu nome"></input>
          </div>
        </div>

        <div class="col-span-full">
          <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Sua assinatura digital</label>
          <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
            <div class="text-center">
              <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
              </svg>
              <div class="mt-4 flex text-sm leading-6 text-gray-600">
                <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                  <span>Upload a file</span>
                  <input id="file-upload" name="file-upload" type="file" class="sr-only">
                </label>
                <p class="pl-1">or drag and drop</p>
              </div>
              <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
            </div>
          </div>
        </div>
      </div>


    </div>

    <div class="mt-0 flex items-center justify-end gap-x-6">
      <button type="button" class="text-lg font-semibold leading-6 text-gray-900">Voltar</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-lg font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><a href="./ata">Enviar</a></button>
    </div>
  </div>
  </div>
  </div>

</form>
<script src="{{asset('form.js')}}"></script>
@endsection
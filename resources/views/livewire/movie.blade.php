<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('title', ('Filme'))
    <wireui:scripts />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('styles')
    @stack('scripts')
    <livewire:styles/>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>
<body class="bg-slate-900">
<section class="menu-filme font-serif">
<div class="grid grid-rows-3 bg-slate-50 space-x-4 rounded-lg shadow shadow-slate-100">
  
      <!-- Image gallery -->
      <div class="row-span-3  m-8 lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
          <img src="{{$movie->capa}}" alt="">
      </div>
  
      <!-- Titulo -->
      <div class="grid grid-rows-3 grid-flow-col gap-4 max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
        <div class="row-span-3 col-span-2">
          <h1 class="text-5xl font-bold tracking-tight leading-none	 text-black">{{$movie->titulo}}</h1>

          <!-- Sinopse -->
          <div> 
            <p class="text-xl text-black">{{$movie->sinopse}}</p>
          </div>
        </div>
        
        <!-- informação -->
          <div class="grid grid-rows-1 ms-16" id="informacao">
            <h2 class="text-3xl	font-medium text-black	">Informações</h2>
  
              <div class="mt-1" >
                <ul role="list" class="list-disc space-y-2">

                  <li class="text-lg text-slate-800"> Data de Lançamento: <span class="text-lg text-black	">              
                  @php
                    $lanca = new DateTime($movie->lancamento);
                  @endphp
                  {{$lanca->format('d/m/Y')}} 
                  </span></li>
    
                  <li class="text-lg text-slate-800"> Gênero: <span class="text-lg text-black	">
                  @php
                    $gene = trim($movie->genero, '[]""');
                    $gene = strtr($gene, '"', " ");
                  @endphp
                  {{$gene}}  
                  </span></li>
    
                  <li class="text-lg text-slate-800"> Duração: <span class="text-lg text-black	"> 
                  @php
                    $dura = new DateTime($movie->duracao);
                  @endphp
                  {{$dura->format('H:i:s')}}
                  </span></li>
            
                  <li class="text-lg text-slate-800"> Classificação: <span class="text-lg text-black	">{{$movie->classificacao}}</span></li>
                </ul>
              </div>

          </div>
        </div>
</div>
</section>
</body>
</html>
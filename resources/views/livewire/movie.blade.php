@section('title', ('Filme'))

<div class="grid grid-rows-3 grid-flow-col gap-4">
    <div class="pt-6">
      <!-- Image gallery -->
      <div class="row-span-3 lg:max-w-6xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
            <img src="{{$movie->capa}}" alt="">
        </div>
  
      <!-- Titulo -->
      <div class="col-span-2 max-w-2xl px-4 pb-16 pt-10 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:px-8 lg:pb-24 lg:pt-16">
        <div >
          <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{$movie->titulo}}</h1>

          <!-- Sinopse -->
          <div> 
            <p class="text-base text-gray-900">{{$movie->sinopse}}</p>
          </div>
        </div>
        
        <!-- informação -->
          <div class="row-span-2 col-span-2">
            <h2 class="text-2x1 font-medium text-gray-900 sm:text-3xl">Informações</h2>
  
            <div class="mt-4">
              <ul role="list" class="list-disc space-y-2 pl-4 text-sm">

                <li class="text-gray-600"> Data de Lançamento: <span class="text-gray-900">              
                @php
                  $lanca = new DateTime($movie->lancamento);
                @endphp
                {{$lanca->format('d/m/Y')}} 
                </span></li>
  
                <li class="text-gray-600"> Gênero: <span class="text-gray-900">{{$movie->genero}}</span></li>
  
                <li class="text-gray-600"> Duração: <span class="text-gray-900"> 
                @php
                $dura = new DateTime($movie->duracao);
                @endphp
                {{$dura->format('H:i:s')}}
                </span></li>
                <!-- Classificação -->
                <li class="text-gray-600"><span class="text-gray-900">{{$movie->classificacao}}</span></li>
              </ul>
            </div>
          </div>
    </div>
</div>
</div>

@section('title', ('Lista de Filmes'))

    <table class="hover:table-auto">
        <thead>
          <tr>
            <th scope="col" id="th_titulo">Título</th>
            <th scope="col" id="th_lancamento">Lançamento</th>
            <th scope="col" id="th_duraçao">Duração</th>
            <th scope="col" id="th_genero">Gênero</th>
            <th scope="col" id="th_classificacao">Classificação</th>
            <th scope="col" id="th_sinopse">Sinopse</th>
            <th scope="col" id="th_data">Data de Adicionamento</th>
          </tr>
        </thead>
        <tbody>
          @foreach($filmes as $filme)
          <tr>
            <td id="td_titulo">{{$filme->titulo}}</td>

            <td id="td_lancamento">
              @php
                 $lanca = new DateTime($filme->lancamento);
              @endphp
              {{$lanca->format('d/m/Y')}}
            </td>

            <td id="td_duraçao">
              @php
                  $dura = new DateTime($filme->duracao);
              @endphp
              {{$dura->format('H:i:s')}}
            </td>

            <td id="td_genero">
              @php
                  $gene = trim($filme->genero, '[]""');
                  $gene = strtr($gene, '"', " ");
              @endphp
              {{$gene}}
            </td>
            <td id="td_classificacao">{{$filme->classificacao}}</td>

            <td id="td_sinopse">

              <a href="{{route('movie', $filme->id)}}"><i class="fa-solid fa-list"></i></a>
            </td>
            <!-- Enviar a sinopse para dashboard -->


            <td id="td_data">
              @php
                  $data =new DateTime($filme->created_at);
              @endphp
              {{$data->format('d/m/Y H:i:s')}}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

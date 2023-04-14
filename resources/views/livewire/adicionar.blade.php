@section('title', ('Adicionar Filmes'))

<form action="{{route('dados')}}" method="POST">
@csrf
    <x-input name='titulo' label="Título" placeholder="Título do Filme" />

    <x-input name='capa' class="!pl-[6.5rem]" label="Capa" placeholder="URL da Imagem" prefix="https://www." />

    <x-datetime-picker
    name='lancamento'
    label="Lançamento"
    without-time
    display-format="YYYY-MM-DD"
    placeholder="Ano de Lançamento"
    wire:model="normalPicker"
    />

    <x-time-picker 
        name='duracao'
        label="Duração"
        placeholder="Duração do Filme"
        format="24"
        interval="1"
        timezone
        wire:model.defer="timePicker"
    />

   <x-select
        name='genero'
        label="Gênero"
        placeholder="Selecionar Gênero"
        multiselect
        :options="['Ação', 'Aventura', 'Comédia', 'Comédia romântica', 'Dança', 'Documentário', 'Drama', 'Faroeste', 'Fantasia', 'Ficção científica', 'Mistério', 'Musical', 'Romance', 'Terror']"
        wire:model.defer="model"
    />

    <x-select
        name='classificacao'
        label="Classificação"
        placeholder="L"
        :options="['L', '10', '12', '14', '16', '18']"
        wire:model.defer="model"
    />

    <x-textarea name='sinopse' label="Sinopse" placeholder="Sinopse do Filme" />

    <div class="button">
        <input type="submit" value="Salvar" style="margin-top: 1rem">
    </div>
</form>



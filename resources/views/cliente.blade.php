<h1>Página do cliente</h1>

    @if (1 < 4)
        <p>Resposta verdadeira</p>
    @endif
    {{-- Comentário do blase --}}
        <p>{{$numero}}</p>
    @if ($numero > 0)
        <p>Número positivo</p>
    @elseif ($numero == 0)
        <p>Número nulo</p>
    @else
        <p>Número negativo</p>
    @endif
    <p>Exemplo do for</p>
    @for ($i = 0; $i < count($lanches); $i++)
        <p>{{$lanches[$i]}} - {{$i}} </p>
    @endfor
        <p>Exemplo do foreach</p>
    @foreach ($lanches as $lanche)
        <p>{{$loop->index}}</p>
        <p>{{$lanche}}</p>
    @endforeach
        <p>Exemplo do PHP</p>
    @php
        $nome = "Batata frita";
            echo $nome;
        @endphp 
    e;
    @endphp

<a href="/">Voltar para a home</a>
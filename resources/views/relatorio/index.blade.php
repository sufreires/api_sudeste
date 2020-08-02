<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sudeste Online</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container mt-5">
    <h2 class="text-center mb-3">Relatório de Relações</h2>

    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Produto</th>
            <th scope="col">Cultura</th>
            <th scope="col">Praga</th>
            <th scope="col">Dosagem</th>
        </tr>
        </thead>
        <tbody>

        @foreach($relatorio ?? '' as $dados)
            <tr>
                <th scope="row">{{ $dados->idr }}</th>
                <td>{{ $dados->prodnome }}</td>
                <td>{{ $dados->cnome }}</td>
                <td>{{ $dados->pnome }}</td>
                <td>{{ $dados->dosagem }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>


</body>

</html>

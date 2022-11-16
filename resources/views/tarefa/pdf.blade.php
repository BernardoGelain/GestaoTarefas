<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
          border: 1px solid black;
        }
        .titulo{
            border: 1px;
            background-color: gray;
            text-align: center;
            width: 100%;
            text-transform: uppercsase;
            font-weight: bold;
            margin-bottom: 25px;
        }
        .tabela {
            width: 100%;
        }
        .page-break {
        page-break-after: always;
}
    </style>
</head>
<body>

    <div class="titulo">Lista de Tarefas</div>


<table class="tabela">
    <thead>
        <tr>
        <th>ID</th>
        <th>Tarefa</th>
        <th>Data Limite Conclusão</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tarefas as $key => $tarefa)
        <tr>
            <td>{{  $tarefa->id  }}</td>
            <td>{{  $tarefa->tarefa  }}</td>
            <td>{{  date('d/m/Y', strtotime($tarefa->data_limite_conclusao))  }}</td>
        </tr>
        @endforeach
    </tbody>


</table>

</body>
</html>


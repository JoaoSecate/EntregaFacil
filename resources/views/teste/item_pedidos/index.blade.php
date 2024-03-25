<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens de Pedido</title>
</head>
<body>
    <h1>Lista de Itens de Pedido</h1>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Pedido</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
            <tbody>
            @foreach($item_pedidos as $itemPedido)
            <tr>
                <td>{{ $itemPedido->id }}</td>
                <td>{{ $itemPedido->produto->nome }}</td>
                <td>{{ $itemPedido->pedido->id }}</td>
                <td>{{ $itemPedido->quantidade }}</td>
                <td>
                    <!--
                    <a href="{{ route('item_pedidos.index') }}">Detalhes</a>
                    <a href="{{ route('item_pedidos.index') }}">Editar</a>
                     
                    <form action="{{ route('item_pedidos.index') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                    -->
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!--
    <a href="{{ route('item_pedidos.index') }}">Incluir Item de Pedido</a>
    -->
</body>
</html>

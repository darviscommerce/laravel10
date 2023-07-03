<div class="container">
    <h1 class="text-primary">{{ $item->title }}</h1>

    <table>
        <tr>
            <td>Van: </td>
            <td>{{ Carbon\Carbon::parse($item->from)->format('d-m-Y H:i') }}</td>
        </tr>
        <tr>
            <td>T/M: </td>
            <td>{{ Carbon\Carbon::parse($item->till)->format('d-m-Y H:i') }}</td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><a href="mailto:{{ $item->email }}">{{ $item->email }}</a></td>
        </tr>
        <tr>
            <td>Telefoon: </td>
            <td><a href="mailto:{{ $item->phone }}">{{ $item->phone }}</a></td>
        </tr>
        <tr>
            <td>Waar: </td>
            <td>{{ $item->address }}</td>
        </tr>
        <tr>
            <td>Inleiding: </td>
            <td>{{ $item->excerpt }}</td>
        </tr>
        <tr>
            <td>Omschrijving: </td>
            <td>{{ $item->content }}</td>
        </tr>
    </table>
</div>

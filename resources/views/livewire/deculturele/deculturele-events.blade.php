<div class="container">
    <h1 class="text-primary">Komende evenementen</h1>
    <table class="table table-sm table-hover">
        <thead>
            <tr>
                <th>Van</th>
                <th>T/M</th>
                <th>Titel</th>
                <th>Adres</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ Carbon\Carbon::parse($item->from)->format('d-m-Y H:i') }}</td>
                    <td>{{ Carbon\Carbon::parse($item->till)->format('d-m-Y H:i') }}</td>
                    <td><a href="{{ route('deculturele.event', ['input' => $item->slug]) }}">{{ $item->title }}</a>
                    </td>
                    <td>{{ $item->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

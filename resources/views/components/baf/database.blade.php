<div>
    <h3>{{ $title }}</h3>
    <div>
        <ul>
            @foreach ($databaseName as $value)
            <li><a href="{{ route('database',$value) }}">{{ $value }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
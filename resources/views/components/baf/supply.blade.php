<div d{{ $attributes }}>
    <h3>{{ $title }}</h3>
    <p>{{ $subTitle }}</p>
    {{-- <p>{{ $description }}</p> --}}
    <div >
        <table class="table">
            <thead>
                <tr>
                <th scope="col">SL No.</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">{{ $getData() }}</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                </tr>
                <tr>
                    @foreach ($details as $value)
                        <td>{{ $value }}</td>
                    @endforeach
                </tr>
               
            </tbody>
            </table>
    </div>
</div>
<hr>
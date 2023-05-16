<div>
    <h3>Database Name: {{ $dbName }}</h3>
    <h4>All Table of {{ $dbName }}:</h4>
    <div>
        
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Table Name</th>
                        <th scope="col">Action</th>
                        <th scope="col">Rows</th>
                        <th scope="col">Engine</th>
                        <th scope="col">Collation</th>
                        <th scope="col">Size</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($table as $value)
                            <tr class="">
                                <td>{{ $value->TABLE_NAME }}</td>
                                @php
                                    // $table=$dbName;
                                    // $info=['table'=>'d','dbname'=>$dbName];
                                    // $info=['table_name'=>$value->TABLE_NAME,'dbname'=>$dbName];
                                @endphp
                                {{-- <td><a href="{{ route('tabledetails',$dbname) }}" style="color:rgb(119, 0, 128)">Browse </a><a href=""> Structure</a></td> --}}
                                <td><a href="{{ route('tabledetails',[$value->TABLE_NAME,$dbName])}}" style="color:rgb(119, 0, 128)">Browse </a><a href="{{ route('columndetails',[$value->TABLE_NAME,$dbName])}}"> Structure</a></td>
                                <td>{{ $value->TABLE_ROWS }}</td>
                                <td>{{ $value->ENGINE }}</td>
                                <td>{{ $value->TABLE_COLLATION }}</td>
                                <td>Unknown</td>
                            </tr>
                        @endforeach
                    
                </tbody>
            </table>
        </div>
        
    </div>
</div>
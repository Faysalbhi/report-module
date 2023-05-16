<x-layouts.master>

  
  <div>
    <h3>Database Name: {{ $dbname }}</h3>
    <h4>Table Name: {{ $table }}</h4>
    <div>
        
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Column Name</th>
                        <th scope="col">Data Type</th>
                        <th scope="col">Null</th>
                        <th scope="col">Key</th>
                        <th scope="col">Default</th>
                        <th scope="col">Extra</th>
                    </tr>
                </thead>
                <tbody>
                      @foreach ($structure as $value)
                        <tr>
                          <td>{{ $value->Field }}</td>
                          <td>{{ $value->Type }}</td>
                          <td>{{ $value->Null }}</td>
                          <td>{{ $value->Key }}</td>
                          <td>{{ $value->Default }}</td>
                          <td>{{ $value->Extra }}</td>
                        </tr>
                      @endforeach

                    
                </tbody>
            </table>
        </div>
        
    </div>
</div>
  
</x-layouts.master>
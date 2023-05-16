<x-layouts.master>

  
  <h1>Table Details</h1>


  <div>
      <p>Database Name: {{ $dbname }}</p>
      <h4>Table Name : {{ $table }}</h4>
      <h4>{{ $table }} Details  : </h4>
      <div>
          
          <div class="table-responsive">
              <table class="table table-primary">
                  <thead>
                      <tr>
                          @foreach ($tabledetails as $value )
                              <td>SL No.</td>
                              @foreach ($value as $key=>$details )

                                <td>{{ $key}}</td>
                              
                              @endforeach
                              @php
                                  break;
                              @endphp
                          @endforeach
                      </tr>
                  </thead>
                  <tbody>
                          @foreach ($tabledetails as $value )
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                            @foreach ($value as $key=>$details )

                              <td>{{ $details }}</td>
                            @endforeach
                           </tr> 
                          @endforeach
                      
                  </tbody>
              </table>
          </div>
          
      </div>
  </div>


</x-layouts.master>
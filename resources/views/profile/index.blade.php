<x-layouts.master>
<!-- Vertical form modal -->
<div id="createModel" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create New User</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form action="{{ route('user.create') }}" method="post" >
       @csrf
        <div class="modal-body">
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6">
                <label>First name</label>
                <input type="text" placeholder="Ali" name="fname" class="form-control">
              </div>

              <div class="col-sm-6">
                <label>Last name</label>
                <input type="text" placeholder="Faysal" name="lname" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <label>Country</label>
                <input type="text" placeholder="Bangladesh" name="country" class="form-control">
              </div>

              
              <div class="col-sm-4">
                <label>City</label>
                <input type="text" placeholder="Munich" name="city" class="form-control">
              </div>

              <div class="col-sm-4">
                <label>Address </label>
                <input type="text" placeholder="building D, flat #67" name="address" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-sm-4">
                <label>ZIP code</label>
                <input type="text" placeholder="1031" name="zipcode" class="form-control">
              </div>

              <div class="col-sm-4">
                <label>Email</label>
                <input type="text" placeholder="eugene@kopyov.com" name="email" class="form-control">
              </div>

               <div class="col-sm-4">
                <label>Phone #</label>
                <input type="text" name="phone" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control">
              </div>

            </div>

            <div class="row my-2">
              <div class="col-sm-4">
                <label>Password #</label>
                <input type="password" name="password" placeholder="******"  class="form-control">
              </div>
            </div>
            


          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn bg-dark">Submit form</button>
          <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
  </div>
  <!-- /vertical form modal -->







<div class="card">
    <div class="card-header header-elements-inline">
      <h6 class="card-title">Search with  using  Filter</h6>
        <div class="header-elements">
          <div class="list-icons">
            <a class="list-icons-item" data-action="collapse"></a>
            <a class="list-icons-item" data-action="reload"></a>
            <a class="list-icons-item" data-action="remove"></a>
          </div>
        </div>
    </div>

      <div class="card-body">
        <form action="#" id="filterForm">
          <div class="form-group row">
            <div class="col-md-2">
                <input type="text" class="form-control" id="range" placeholder="Range">
            </div>

            <div class="col-md-2">
                <input type="text" class="form-control" id="type" placeholder="Type">
            </div>
            <div class="col-md-2">
                <input type="text" class="form-control" id="date" placeholder="Date">
            </div>
            
            <div class="col-md-2">
                <input type="text" class="form-control" id="status" placeholder="Status">
            </div>
            
            <div class="col-md-2">
                <button id="submitFilter" type="submit" class="btn btn-primary">Filter <i class="icon-paperplane ml-2"></i></button>
            </div>
          </div>
     </form>
   </div>

</div>


<div class="card">
    <div class="card-header header-elements-inline bg-dark">
      <h5 class="card-title">All User</h5>
      <div class="header-elements">
      <button id="createButton" class="btn btn-sm btn-light">+Add New</button>
        <div class="list-icons">
                  <a class="list-icons-item" data-action="collapse"></a>
                  <a class="list-icons-item" data-action="reload"></a>
                  <a class="list-icons-item" data-action="remove"></a>
                </div>
              </div>
    </div>

    <div class="card-body">
     

    <table class="table datatable-pagination">
      <thead>
        <tr>
          <th>Full Name</th>
          <th>Eamil</th>
          <th>Phone</th>
          <th>User Role</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>

      @foreach ($users as $user)
        
     
        <tr>
          <td>{{ $user->fname.' '.$user->lname }}</td>
          <td><a href="#">{{ $user->email }}</a></td>
          <td>{{ $user->phone }}</td>
          <td><span class="badge badge-success">{{ $user->profile->user_role }}</span></td>
          <td class="text-center">
            <div class="list-icons">
              <div class="dropdown">
                <a href="#" class="list-icons-item" data-toggle="dropdown">
                  <i class="icon-menu9"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                  <button   class="dropdown-item deletebtn" value="{{ $user->id }}"><i class="fa-light fa-trash"></i>Delete</button>
                  <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                  <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                  <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                </div>
              </div>
            </div>
          </td>
        </tr>
       @endforeach
      </tbody>
    </table>
  </div>





@push('script')
  <script>
    $(document).ready(function(){
      
      $('#submitFilter').click(function(){
          var range=$('#filterForm #range').val();
          var type=$('#filterForm #type').val();
          var date=$('#filterForm #date').val();
          var status=$('#filterForm #status').val();
          var data=[range,type,date,status];
          alert(data);

      })
    });
  </script>

  <script>
    $('document').ready(function(){
        $('#createButton').click(function(){
            $('#createModel').modal('show');
        });
    
    });


    $('.deletebtn').click(function(){
    
      var check=confirm("Are you sure? you Want to Delete this?");

      if(check){

            var user_id=$(this).val();

            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });

            $.ajax({
                type: "POST",
                url: 'deleteUser',
                data: {user_id},
                success:function(data){
                  console.log(data);
                }
                
              });


      }else{
        console.log("koiren na");
      }
    })
  </script>
@endpush

</x-layouts.master>


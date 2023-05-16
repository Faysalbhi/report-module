<x-layouts.master>
<!-- Vertical form modal -->
<div id="createModel" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create New Product</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <form action="{{ route('product.create') }}" method="post" >
       @csrf
        <div class="modal-body">
          <div class="form-group">
            <div class="row">
              <div class="col-sm-6">
                <label>Product name</label>
                <input type="text" placeholder="Ali" name="name" class="form-control">
              </div>

              <div class="col-sm-6">
                <label>Product Description </label>
                <input type="text" placeholder="Faysal" name="description" class="form-control">
              </div>
              
              <div class="col-sm-6">
                
                  <label>Select your state:</label>
                    <select name="category_id" id="" class="form-control">
                    @foreach($categories as $category)
                      <option value="{{ $category->name }}">{{ $category->name }}</option>
                    @endforeach  
                    </select>
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
      <h5 class="card-title">All Products</h5>
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
          <th>Product Name</th>
          <th>Description</th>
          <th>Category</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>

      @foreach ($products as $product)
        
     
        <tr>
          <td>{{ $product->name}}</td>
          <td><a href="#">{{ $product->name }}</a></td>
          <td><a href="#">{{ $product->category_name }}</a></td>
          <td class="text-center">
            <div class="list-icons">
              <div class="dropdown">
                <a href="#" class="list-icons-item" data-toggle="dropdown">
                  <i class="icon-menu9"></i>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                  <button   class="dropdown-item deletebtn" value="{{ $product->id }}"><i class="fa-light fa-trash"></i>Delete</button>
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

            var category_id=$(this).val();

            $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });

            $.ajax({
                type: "POST",
                url: 'deletecategory',
                data: {category_id},
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


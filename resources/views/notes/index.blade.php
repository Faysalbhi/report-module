<x-layouts.master>
<!-- Vertical form modal -->









<div class="card">
    <div class="card-header header-elements-inline bg-dark">
      <h5 class="card-title">SummerNotes</h5>
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
        <div class="row">

            <div class="col-lg-4">
                <div class="card bg-blue-400">
                    <div class="card-body">
                        <div class="d-flex">
                            <a  href="{{ route('summernotes') }}"><h3 class="font-weight-semibold text-white mb-0">Summer Notes</h3></a>
                            <div class="list-icons ml-auto">
                                <a class="list-icons-item" data-action="reload"></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card bg-blue-400">
                    <div class="card-body">
                        <div class="d-flex">
                            <a  href=""><h3 class="font-weight-semibold text-white mb-0">CK Edditor</h3></a>
                            <div class="list-icons ml-auto">
                                <a class="list-icons-item" data-action="reload"></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>


        </div>
    </div>
     

  </div>





@push('script')
  <script>
  
  </script>

  
@endpush

</x-layouts.master>


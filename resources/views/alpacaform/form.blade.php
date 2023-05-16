<x-layouts.master>

<div class="card col-md-6">
  <div class="card-header">
    Alpaca Form Input Filds
  </div>
  <div class="card-body">
    <div class="md-6 m-auto">
      <form action="{{ route('submitform') }}" method="POST">
        @csrf
        <input type="text" name="test">
        <div id="nameinput" ">

        </div>
        <div>
          <button type="submit" class="btn btn-sm">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>



@push('script')
  <script>
  // $('#nameinput').alpaca({
  //     schema:{
  //       type:"string",
  //     },
  //     options:{
  //       label:"enter your",
  //       name:"name",
  //       disallowEmptySpaces:true,
  //       focus:false,
  //     }
  // });

  $(document).ready(function(){
      $('#nameinput').alpaca({
        "schema":{
          "type":"object",
          "properties":{
            "input-name":{
                "type": "string",
                "title": "Name",
                "required": true,
                "maxLength": 30,
            },
          },
        
        },
        "options": {

              
              "fields": {
                  "input-name": {
                      "placeholder": "Enter Your Name",
                      "label":"User name",
                      "name":"name",
                      "disallowEmptySpaces":true,

                  },
              },
              // "form": {
              //     "buttons": {
              //       "submit": {
              //       "title": "Submit",
              //       "type":"submit",
              //       }
              //     }
              // },

        },
      });
   
  });

  </script>
@endpush
</x-layouts.master>
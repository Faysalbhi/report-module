<x-layouts.master>


<div class="card">
    <div class="card-header header-elements-inline bg-dark">
        <h5 class="card-title">Summernote Editor</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div id="newForm">
            <div id="name"></div>
            <div id="email"></div>
            <div id="summernote"></div>
            <div id="tinymce"></div>
        
        </div>
    </div>
    <hr>
    
    {{-- <form id="myForm"></form> --}}
</div>
@push('script')
<script>
$(document).ready(function(){
    $("#name").alpaca({

    "schema":{
    
        "type":"object",
        "properties":{
            "name":{
                "type":"string",
                "required":true,
                "title":"name",
                "focus":false
                }
            }
        },
    "options":{
        "fields":{
            "name":{
                "helper":"Enter Your",
                
            }
        }
    }
    });

    $('#email').alpaca({
        "schema":{
            "type":"object",
            "properties":{
            "email":{
                    "title":"Email",
                    "type":"string",
                    "required":true,
                    
                }
            }
    },
    "options":{
        "fields":{
            "email":{
                "focus":false,
                "helper":"Enter your Email",
                "disallowEmptySpaces":true,
                "type":"email"
                }
            }
        }
    });

    $("#summernote").alpaca({
        "schema":{
            "type":"object",
            "properties":{
                "summernote":{
                    "type":"string",
                    "title":"Notes",
                    "focus":false,
                }
            }
        },
        "options":{
            "fields":{
                "summernote":{
                    "type":"summernote",
                        "summernote": {
                            "toolbar": [
                                ['style', ['bold', 'italic', 'underline', 'clear']],
                                ['font', ['strikethrough', 'superscript', 'subscript']],
                                ['fontsize', ['fontsize']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['height', ['height']]
                            ],
                            "popover": {
                                "air": [
                                    ['color', ['color']],
                                    ['font', ['bold', 'underline', 'clear']]
                                ]
                            }
                        },

                }
            }
        
        }
    
    });

    $("#tinymce").alpaca({
        "schema":{
            "type":"object",
            "properties":{
                "tinymce":{
                    "type":"string",
                    "title":"Tiny MCE Notes",
                    "focus":false,
                }
            }
        },
        "options":{
            "fields":{
                "tinymce":{
                    "type":"tinymce",
                        

                }
            }
        
        }
    
    });
    

});
</script>
<script>
      tinymce.init({
        selector: '#tinymce'
      });
    </script>
<script>


$("# form").alpaca({
    "schema": {
        "title": "Create New User",
        "type": "object",
            "properties": {

                "name":{
                    "type":"string",
                    "required":true,
                    "maxLength":15,
                },
                
                "email":{
                    "type":"string",
                    "required":true,
                },
                "phone":{
                    "type":"string",
                    "maxLength":11,
                },
                "birthday": {
                    "type":"date",
                    "format": "date",
                    "required": true
                },
                "description": {
                    "type": "string",
                },
                

                "gender": {
                    "type": "string",
                    "enum": ["Male", "Female", "Others"],
                    "default": "Male",
                },
                "Courses": {
                    "type": "array",
                    "items": {
                        "type": "string",
                        "enum": ["Checkbox 1", "Checkbox 2", "Checkbox 3"]
                }
                },
                "selectSingle": {
                    "type": "string",
                    "enum": ["Select Single Option 1", "Select Single Option 2", "Select Single Option 3"],
                    "default": "Select Single Option 1"
                },
                "selectMultiple": {
                    "type": "array",
                    "items": {
                        "type": "string",
                        "enum": ["Select Multiple Option 1", "Select Multiple Option 2", "Select Multiple Option 3"]
                }
                },
                "selectDataList": {
                    "type": "string",
                    "enum": ["Datalist Option 1", "Datalist Option 2", "Datalist Option 3"],
                    "default": "Datalist Option 1"
                },
                "search": {
                    "type": "string",
                    "format": "search",
                    "default": ""
                }
            }
        },

        "options": {
            "fields": {
                "name":{
                    "label":"Name",
                    "helper":"Enter Your Name",
                    "focus":false
                    
                },
                "email":{
                    "type":"email",
                    "label":"Email",
                    "disallowEmptySpaces":true
                },
                "phone":{
                    "label":"Phone",
                    "type":"number",
                },
                 "birthday":{
                    "label":"Birth Day",
                    "type":"date",
                    "picker":{"format": "MM/DD/YYYY"},
                    "placeholder": "Please input your Birthday date",
                    "maskString": "99/99/9999"
                },

                "description": {
                    "type": "summernote",
                    "label":"Description",
                },
                "gender": {
                    "type": "radio",
                    "label":"Gender",
                    "none":false
                },
                "Courses": {
                    "type": "checkbox",
                    "label": "Courses",
                    "required":true
                },
                "selectSingle": {
                    "type": "select",
                    "label": "Select Single Item "
                },
                "selectMultiple": {
                    "type": "select",
                    "label": "Select Multiple",
                    "multiple": true
                },
                "selectDataList": {
                    "type": "select",
                    "label": "DataList",
                    // "optionLabels": ["Datalist Option 1", "Datalist Option 2", "Datalist Option 3"]
                },
                "search": {
                    "type": "search",
                    "label": "Search"
                }
        },
        "form":{
            "button":{
                "value":"Submit"
            }
        }
    }
});										
</script>



       



<script>

    let lang ={};
    lang.en ={
        "Birthday" : "BirthDay",
        "LocalDate" : "Local Date",
        "Month" : "Month",
        "Time" : "Time",
        "Week" : "Week"
    }
    lang.bn ={
        "Birthday" : "জন্মদিন",
        "LocalDate" : "স্থানীয় তারিখ",
        "Month" : "জন্মদিনের মাস",
        "Time" : "সময়",
        "Week" : "সপ্তাহ"
    }
    let activeLang = lang.bn;
    $(document).ready(function() {
        $("#myForm").alpaca({
            "schema":{
                "title":"Customer",
                "type":"object",
                    "properties":{
                        "birthday":{
                            "type":"date",
                            "format":"date",
                            "title":activeLang.Birthday,
                            "required":true
                        },
                        "datetime-local":{
                            "type":"string",
                            "format":"datetime-local",
                            "title":activeLang.LocalDate,
                            "required":true
                        },
                        "month":{
                            "type":"string",
                            "format":"month",
                            "title":activeLang.Month,
                            "required":true
                        },
                        "time":{
                            "type":"string",
                            "format":"time",
                            "title":activeLang.Time,
                            "required":true
                        },
                        "week":{
                            "type":"string",
                            "format":"week",
                            "title":activeLang.Week,
                            "required":true
                        }
                    }
                },
            "options": {
            "form": {
                "buttons": {
                    "submit": {
                    "title": "Submit"
                    }
            }
            },

            "fields": {
            "birthday": {
                "type": "date",
                "label": "Birthdate",
                "picker": 	{
                            "format": "MM/DD/YYYY"
                            },
                "placeholder": "Please input your Birthday date",
                "helper": "Please input your Birthday date",
                "maskString": "99/99/9999"
            },
            "datetime-local": {
                "type": "text",
                "placeholder": "Please input your datetime-local",
                "helper": "Please input your datetime-local",
                "maskString": "9999-99-99T99:99:99"
            },
            "month": {
                "type": "text",
                "placeholder": "Please input your Birthday month",
                "helper": "Please input your month",
                "maskString": "9999-99"
            },
            "time": {
                "type": "text",
                "placeholder": "Please input your Birthday time",
                "helper": "Please input your time",
                "maskString": "99:99:99"
            },
            "week": {
                "type": "text",
                "placeholder": "Please input your week",
                "helper": "Please input your week",
                "maskString": "9999-W99"
            }
            }
            }
        });

    });

    </script>
    
@endpush
  
</x-layouts.master>
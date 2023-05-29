<?php
In Controller:

1. load the Controller
2. define the global variables inside the constructor
3. create an index function
    create data array $data=[];
    error upload type variable = status msg = '';
    then return view('viewpath',data);

In Model:

1. Create a Model,
2. create a constructor
3. define the Database details that we use in our model like, $table

create a function called getRows($id){
    db->select
    db->from
    if(id){
        
    }
}
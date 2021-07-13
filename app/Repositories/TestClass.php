<?php

namespace App\Repositories;
use App\Models\Crud;
/**
 * Description of TestClass
 *
 * @author user
 */
class TestClass implements TestInterface {

    public function all(){ 
        return Crud::get();
        
    }

    public function get($id){ 
        return Crud::find($id);
        
    }

    public function store(array $data){
        return Crud::create($data);
        
            }

    public function update($id, array $data){ 
       return Crud::find($id)->update($data);
        
            }

    public function delete($id){ 
        return Crud::destroy($id);
            
            }
}

<?php 
namespace App\Repositories\Interfaces;

Interface ProductRepositoryInterface{

    public function all();

    public function store($request);
   
    public function show($id);
   
    public function edit($id);
    
    public function update($request,$id);
   
   
    
}
?>
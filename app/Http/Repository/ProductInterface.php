<?php

namespace App\Http\Repository;

interface Productinterface{

public function products();
public function create_products();
public function store_products($request);
public function edit_products($id);
public function update_products($request);
public function delete_products($id);


}
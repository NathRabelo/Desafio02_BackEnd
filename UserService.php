<?php

namespace App\Services;

    use   App\Models\User;

class UserServices
{
    //pegar dados user
    public function get($id = null)
    {
       if($id){
           return User::select($id);
       } else{
        return User::selectAll();
       }
    }

    //inserir dados user
    public function post()
    {
        
    }

    //alterar user
    public function update()
    {
        
    }

    //deletar user
    public function delete()
    {
        
    }
}
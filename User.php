<?php

class User
{
    private  string $Nom;
    private  string $Prenom;
    private string $Mail;
    private string $MotDePasse;
    private array $roles = [];

    private function getRoles() :array {
        return $this -> roles;
    }

    private function addRoles(string $roles) : void {
        $this -> roles[] = $roles;

    }
}
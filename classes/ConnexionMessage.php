<?php


class ConnexionMessages
{
    public const CONNEXION_IS_VALID = 1;
    public const INVALID_USER = 2;



    public static function getConnexionMessage(int $code): string
{
    switch ($code) {
        case ConnexionMessages::CONNEXION_IS_VALID:
            return "Successfully connected";
            break;
        case ConnexionMessages::INVALID_USER:
            return "Connexion failed";
            break;
        default:
            return "Please contact the app admin";
    }
}
}
// note pour plus tard, ce serait sympa de faire un peu d'héritage avec une classe enfant Erreur et une classe enfant Success
// également séparer les différentes erreurs possibles
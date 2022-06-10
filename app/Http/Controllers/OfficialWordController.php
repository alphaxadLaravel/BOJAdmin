<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;
use Firebase\Auth\Token\Exception\InvalidToken;
use Kreait\Firebase\Exception\Auth\RevokedIdToken;

class OfficialWordController extends Controller
{
    protected $auth, $database;

    public function __construct()
    {
        // dd("kakulu");

        $factory = (new Factory)
        ->withServiceAccount(__DIR__.'firebase_data.json')
        ->withDatabaseUri('https://bojadmin-48bfa-default-rtdb.firebaseio.com/');
        dd($factory);

        $this->auth = $factory->createAuth();
        $this->database = $factory->createDatabase();
    }

    public function store()
    {
        dd("kakulu");
        // before
        $ref = $this->database->getReference('demo')->getValue();
        dump($ref);

        // set data
        $ref = $this->database->getReference('demo')
        ->set([
            "demo" => [
                "benggala" => "galak",
                "sumatera" => "jinak"
            ]
        ]);

        // after
        $ref = $this->database->getReference('demo')->getValue();
        dump($ref);
    }
}

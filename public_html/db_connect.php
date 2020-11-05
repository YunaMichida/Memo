<?php

    require_once '../vendor/autoload.php';

    use Illuminate\Database\Capsule\Manager as Capsule;
    use Illuminate\Database\Eloquent\Model as Model;
    

    $db = new Capsule;
    $db->addConnection([
        'driver'    => 'mysql',
        'host'      => 'db',
        'database'  => 'memo',
        'username'  => 'user',
        'password'  => 'password'
    ]);

    $db->setAsGlobal();
    $db->bootEloquent();

    class Note extends Model {

    }

    class User extends Model {

    }
    class User_Note extends Model {    
        
        const UPDATED_AT = null;
        public $timestamps = false;

    }
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['fistname', 'surname', 'region', 'mail','message','date_','entity'];

    public function createContact($contact){
        return self::create([
            'firstname' => $contact->firstname,
            'surname' => $contact->surname,
            'region' => $contact->region,
            'mail' => $contact->mail,
            'messsage' => $contact->message,
            'date_' => $contact->data_,
            'entity' => $contact->entity
        ]);
    }
    public function getByfirstnameOrSurname($names){
        return  self::where('fistname', $names->firstname, 'and', 'surname',$names->lastname)->get();
    }
}

<?php

namespace App\Models\ressources;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'type_documents', 'date_creation', "document_path", 'creator'];
    public function getAllDocument(){
        return self::all();
    }
    public function createDocument($document){
        return self::create([
            'title' => $document->title,
            'description' => $document->description,
            'type_document' => $document->type_document,
            'date_creation'=> $document->date_creation,
            'document_path' => $document->document_path,
            'creator' => $document->creator
        ]);
    }
    public function getDocumentByDate($date){
        return self::where('date_creation', $date);
    }

    public function getDocumentByCreator($creator){
        return self::where('creator', $creator);
    }

    public function getDocumentById($id){
        return self::findOrfail($id);
    }

    public function updateDocument($document){
        $this->update([
            'title' => $document->title,
            'description' => $document->description,
            'type_document' => $document->type_document,
            'date_creation'=> $document->date_creation,
            'document_path' => $document->document_path,
            'creator' => $document->creator
        ]);
    }
}

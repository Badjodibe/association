<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ressources\Document;
use App\Resources\DocumentResource;

class DocumentController extends Controller
{
    //
    public function getAllDocuments(){
        $documents = Document::getAllDocuments();
        return DocumentResource($documents);
    }
    public function createDocument($documents){
        return Document::createDocument($documents);
    }
    public function getDocumentByDate($date){
        $documents = Document::getDocumentByDate($date);
        return DocumentResource($documents);
    }
    public function getDocumentByCreator($creator){
        $documents = Document::getDocumentByCreator();
        return DocumentResource($documents);
    }
    public function getDocumentById($id){
        $documents = Document::getDocumentById();
        return DocumentResource($documents);
    }
    public function updateDocument($document){
       return Document::updateDocument($document);
    }
}

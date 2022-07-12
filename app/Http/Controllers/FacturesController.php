<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\Facture;
use Illuminate\Http\Request;

class FacturesController extends Controller
{
    public function form_facture($id)
    {
        
        return view('factures.factures-form',['id_facture'=>$id]);
    }

    public function storeClient(Request $request)
    {
        

             $request->validate(

            [
                'price_ht' => 'numeric',
                'tva' => 'numeric',
                'date' => 'date',
                'id_facture' => 'numeric'
            ],
            [
                'price_ht.numeric' => 'Le prix invalide.',
                'tva.numeric' => 'La tva est invalide.',
                'date.date' => 'La date est invalide',

            ]
        );

        $new_price = $request->price_ht;
        $tva = $request->tva;
        $new_tva = $new_price * ($tva / 100);
        $new_priceTTC = $new_price + $new_tva;

        $number_rand = rand(0, 9) . rand(0, 9);

        $id_facture = $request->id_contact;

        // bon de numero

        $new_numero = $request->date . '-' . $id_facture . '-' . $number_rand;


        Facture::create([
            'prixHT' => $request->price_ht,
            'id_facture'=> $request->id_contact,
            'titre' => $request->titre,
            'tva' => $request->tva,
            'date' => $request->date,
            'numero_facture' => $new_numero,
            'prixttc' => $new_priceTTC

        ]);
        return view('factures.success-facture');
    }
}

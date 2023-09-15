<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /* Metodo che visualizza il form */
    
    public function form()
    {
        $title = 'Contatti';

        $text = 'Vuoi fare parte del nostro team? Scrivici ed analizzeremo la tua richiesta!';

        return view('pages.contatti', compact('title', 'text'));
    }

    public function save(Request $request)
    {
        // $request->all(); // restituisce array associativo con tutti i dati (chiave/valore) del form
        
        // $request->email; // contiene il valore del campo (del form) passato con name="email"

        // In questo punto del metodo effettueremo eventuali elaborazioni dei dati passati dal form

        // Qui invieremo una mail con i dati di contatto
        // Nella console lanciare php artisan make:mail ContactMail (nome a scelta, con maiuscola)

        $mail = new ContactMail($request->name, $request->email, $request->message);

        // il metodo render chiamato su un oggetto di tipo Mailable permette di visualizzare la preview della mail nel browser
        // return $mail->render();

        // Invio effettivo della mail
        Mail::to('admin@example.com')->send($mail);

        return redirect()->route('contatti')
                         ->with(['success' => 'Abbiamo ricevuto la tua richiesta. Ti risponderemo il prima possibile.']);

        session()->has('success');
        session('success');
        
    }
}

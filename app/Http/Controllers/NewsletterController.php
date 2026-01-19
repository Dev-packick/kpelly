<?php

namespace App\Http\Controllers;
use App\Http\Requests\NewsletterRequest;
use App\Mail\NewsletterEmail;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\TryCatch;

class NewsletterController extends Controller
{
    // Ajouter une newsletter
    // public function ajouter_newsletter(Newsletter $newsletters, NewsletterRequest $request)
    // {
    //     $existingEmail = Newsletter::where('email', $request->email)->first();

    //     if ($existingEmail) {
    //         return redirect()->back()->with('failure', 'Cet email est déjà enregistré.');
    //     }

    //     Newsletter::create([
    //         'email' => $request->email,
    //     ]);
    //         return redirect()->back()->with('success', 'votre email à bien été enregistré');
    // }


    // Ajouter une newsletter
    public function ajouter_newsletter(NewsletterRequest $request)
    {
        $existingEmail = Newsletter::where('email', $request->email)->first();

        if ($existingEmail) {
            return response()->json(['message' => 'Cet email est déjà enregistré.'], 422);
        }

        Newsletter::create([
            'email' => $request->email,
        ]);

        return response()->json(['message' => 'Votre email a bien été enregistré avec succès !']);
    }

    // Afficher une newsletter
    public function afficher_newsletter()
    {
        $abonnes = Newsletter::all();
        return view('Admin.newsletter', ['newsletter' => $abonnes]);
    }


    // Supprimer une newsletter
    public function delete_newsletter(Request $request, $id)
    {
        $abonnes = Newsletter::find($id);

        if ($abonnes) {
            $abonnes->delete(); // Supprime l'entrée de la base de données
            return back()->with('success', 'Newsletter supprimée avec succès.');
        }

        return back()->with('error', 'Newsletter introuvable.');
    }


    public function envoyer_newsletter(Request $request)
    {
        // Récupérer tous les abonnés
        $abonnes = Newsletter::all();

        // Si aucun abonné n'est trouvé, retourner un message
        if ($abonnes->isEmpty()) {
            return back()->with('error', 'Aucun abonné trouvé pour envoyer la newsletter.');
        }

        // Parcourir les abonnés et envoyer l'email
        foreach ($abonnes as $abonne) {
            // Envoi de l'email à chaque abonné
            Mail::to($abonne->email)->send(new NewsletterEmail());
        }

        return back()->with('success', 'Newsletter envoyée avec succès à tous les abonnés.');
    }

}

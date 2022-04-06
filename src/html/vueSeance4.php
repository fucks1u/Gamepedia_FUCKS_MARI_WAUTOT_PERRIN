<?php

namespace game\html;

class vueSeance4
{
    public function getQuestion1(){
        Account::where('email','=','admin@localhost.com')->delete();
        Account::where('email','=','ouinon@localhost.com')->delete();
        Account::where('email','=','nonoui@localhost.com')->delete();
        Comment::where('contenu','=','Ceci est un commentaire 1')->delete();
        Comment::where('contenu','=','Ceci est un commentaire 2')->delete();
        Comment::where('contenu','=','Ceci est un commentaire 3')->delete();
        $account1 = Account::create([
            'email' => 'admin@localhost.com',
            'nom' => 'admin',
            'prenom' => 'admin',
            'password' => 'admin',
            'adresse' => 'admin',
            'numero' => '0123456789',
            'dateNaissance' => '01/01/2000'
        ]);
        $account2 = Account::create([
            'email' => 'ouinon@localhost.com',
            'nom' => 'oui',
            'prenom' => 'non',
            'password' => 'oui',
            'adresse' => 'non',
            'numero' => '0123456789',
            'dateNaissance' => '01/01/2000'
        ]);
        $account3 = Account::create([
            'email' => 'nonoui@localhost.com',
            'nom' => 'non',
            'prenom' => 'oui',
            'password' => 'non',
            'adresse' => 'oui',
            'numero' => '0123456789',
            'dateNaissance' => '01/01/2000'
        ]);
        $comment1 = Comment::create([
            'contenu' => 'Ceci est un commentaire 1',
            'titre' => 'Ceci est un titre',
            'dateCreation' => date('Y-m-d H:i:s'),
            'dateUpdate' => date('Y-m-d H:i:s'),
            'IdJeu' => 12342,
            'email' => 'nonoui@localhost.com'
        ]);
        $comment2 = Comment::create([
            'contenu' => 'Ceci est un commentaire 2',
            'titre' => 'Ceci est un titre',
            'dateCreation' => date('Y-m-d H:i:s'),
            'dateUpdate' => date('Y-m-d H:i:s'),
            'IdJeu' => 12342,
            'email' => 'ouinon@localhost.com'
        ]);
        $comment3 = Comment::create([
            'contenu' => 'Ceci est un commentaire 3',
            'titre' => 'Ceci est un titre',
            'dateCreation' => date('Y-m-d H:i:s'),
            'dateUpdate' => date('Y-m-d H:i:s'),
            'IdJeu' => 12342,
            'email' => 'admin@localhost.com'
        ]);
        $comment1->save();
        $comment2->save();
        $comment3->save();
        $account1->save();
        $account2->save();
        $account3->save();
    }

    public function getQuestion2(){
        Account::where('email','=','admin@localhost.com')->delete();
        Account::where('email','=','ouinon@localhost.com')->delete();
        Account::where('email','=','nonoui@localhost.com')->delete();
        Comment::where('contenu','=','Ceci est un commentaire 1')->delete();
        Comment::where('contenu','=','Ceci est un commentaire 2')->delete();
        Comment::where('contenu','=','Ceci est un commentaire 3')->delete();
        $account1 = Account::create([
            'email' => 'admin@localhost.com',
            'nom' => 'admin',
            'prenom' => 'admin',
            'password' => 'admin',
            'adresse' => 'admin',
            'numero' => '0123456789',
            'dateNaissance' => '01/01/2000'
        ]);
        $account2 = Account::create([
            'email' => 'ouinon@localhost.com',
            'nom' => 'oui',
            'prenom' => 'non',
            'password' => 'oui',
            'adresse' => 'non',
            'numero' => '0123456789',
            'dateNaissance' => '01/01/2000'
        ]);
        $account3 = Account::create([
            'email' => 'nonoui@localhost.com',
            'nom' => 'non',
            'prenom' => 'oui',
            'password' => 'non',
            'adresse' => 'oui',
            'numero' => '0123456789',
            'dateNaissance' => '01/01/2000'
        ]);
        $comment1 = Comment::create([
            'contenu' => 'Ceci est un commentaire 1',
            'titre' => 'Ceci est un titre',
            'dateCreation' => date('Y-m-d H:i:s'),
            'dateUpdate' => date('Y-m-d H:i:s'),
            'IdJeu' => 12342,
            'email' => 'nonoui@localhost.com'
        ]);
        $comment2 = Comment::create([
            'contenu' => 'Ceci est un commentaire 2',
            'titre' => 'Ceci est un titre',
            'dateCreation' => date('Y-m-d H:i:s'),
            'dateUpdate' => date('Y-m-d H:i:s'),
            'IdJeu' => 12342,
            'email' => 'ouinon@localhost.com'
        ]);
        $comment3 = Comment::create([
            'contenu' => 'Ceci est un commentaire 3',
            'titre' => 'Ceci est un titre',
            'dateCreation' => date('Y-m-d H:i:s'),
            'dateUpdate' => date('Y-m-d H:i:s'),
            'IdJeu' => 12342,
            'email' => 'admin@localhost.com'
        ]);
        $comment1->save();
        $comment2->save();
        $comment3->save();
        $account1->save();
        $account2->save();
        $account3->save();
    }

}

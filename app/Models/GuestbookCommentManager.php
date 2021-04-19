<?php

namespace Project\Models;

class GuestbookCommentManager extends Manager{

    ///////FRONT

    // Page livre d'or
    public function guestbooks(){
        $bdd = $this->bdConnect();

        $req = $bdd->query("SELECT guestbooks.*, users.*, DATE_FORMAT(guestbooks.datecreatcomments, '%d/%m/%Y') AS datePublication FROM guestbooks, users WHERE guestbooks.idguestbooksusers = users.id ORDER BY guestbooks.id DESC");
        
        return $req;
    }




    ///////BACK
    
    // Page des commentaires du livre d'or de l'utilisateur USER
    public function affichageGuestbookComment($id){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("SELECT guestbooks.*, users.pseudo, DATE_FORMAT(guestbooks.datecreatcomments, '%d/%m/%Y') AS datePublication FROM guestbooks, users WHERE guestbooks.idguestbooksusers = users.id AND users.id = ? ORDER BY guestbooks.id DESC");
        $req->execute([$id]);

        $comments = $req->fetchAll();

        return $comments;


    }


    // Page des commentaires du livre d'or de l'utilisateur ADMIN
    public function affichageGuestbookCommentAdmin(){
        $bdd = $this->bdConnect();

        $req = $bdd->query("SELECT guestbooks.*, users.pseudo, DATE_FORMAT(guestbooks.datecreatcomments, '%d/%m/%Y %Hh%imin%ss') AS datePublication FROM guestbooks, users WHERE guestbooks.idguestbooksusers = users.id ORDER BY guestbooks.id DESC");

        $comments = $req->fetchAll();

        return $comments;
    }


    // Ajouter un commentaire dans le Guestbook
    public function createComment($comments, $is_user ){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare('INSERT INTO guestbooks(comments, idguestbooksusers) VALUE (?, ?)');
        $req->execute(array($comments, $is_user));

        return $req;
    }


    // Page éditer un commentaire dans le Guestbook
    public function editionComment($id_guestbooks){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("SELECT * FROM guestbooks WHERE id = ?");
        $req->execute(array($id_guestbooks));

        return $req;
    }


    // Editer le commentaire dans la page guestbookEditComment.php
    public function editComment($id_editComments, $edComments){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("UPDATE guestbooks SET comments = :comments WHERE id = :id");
        $req->execute([
            'id' => $id_editComments,
            'comments' => $edComments
        ]);

        return $req;
    }


    // Supprimer un commentaire du livre d'or
    public function deletComment($id){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("DELETE FROM guestbooks WHERE id = ?");
        $req->execute(array($id));

        return $req;
    }


}
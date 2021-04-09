<?php

namespace Project\Models;

class ArticleManager extends Manager{

    ///////FRONT

    // Pagination
    private $articlesParPage = 4;
    private $quantitePage = 1;

    public function nombreDePage(){
        $bdd = $this->bdConnect();

        $req = $bdd->query("SELECT COUNT(*) AS totalArticles FROM articles");
        $resultat = $req->fetch();
        $total = $resultat['totalArticles'];
        $nombreDePage = ceil($total / $this->articlesParPage);

        return $nombreDePage;
    }



    // Page actualités
    public function readArticles($quantitePage){

        // Pagination
        $this->quantitePage = $quantitePage;

        $bdd = $this->bdConnect();

        $req = $bdd->query("SELECT * FROM articles ORDER BY id DESC LIMIT " . $this->articlesParPage . " OFFSET " . ($this->quantitePage - 1) * $this->articlesParPage);
        // OFFSET sert à stopper le nombre d'article par page
   
        return $req;
    }


    // Page actualités - Single
    public function readArticlesSingle($id){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("SELECT articles.*, users.firstname  FROM articles, users WHERE articles.idarticlesusers = users.id AND articles.id = ?");
        $req->execute(array($id));

        return $req;
    }


    // Page Plan du site
    public function planDuSite(){
        $bdd = $this->bdConnect();

        $req = $bdd->query("SELECT * FROM articles ORDER BY id DESC");
   
        return $req;
    }




    ///////BACK
    
    // Page actualités de l'utilisateur ADMIN
    public function articlesAdmin(){
        $bdd = $this->bdConnect();

        $req = $bdd->query("SELECT articles.*, users.firstname  FROM articles, users WHERE articles.idarticlesusers = users.id ORDER BY articles.id DESC");

        return $req;
    }


    // Supprimer un article d'actualités ADMIN
    public function deletAdminArticle($id){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("DELETE FROM articles WHERE id = ?");
        $req->execute(array($id));

        return $req;
    }


    // Page éditer un article d'actualités ADMIN
    public function EditAdminArticle($id){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("SELECT * FROM articles WHERE id = ?");
        $req->execute(array($id));

        return $req;
    }


    // Editer un article d'actualités ADMIN
    public function updateAdminArticle($id, $title, $content, $description_articles){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("UPDATE articles SET title = :title, content = :content, description_articles = :description_articles WHERE id = :id");
        $req->execute([
            'id' => $id,
            'title' => $title,
            'content' => $content,
            'description_articles' => $description_articles
        ]);

        return $req;
    }


    // Ajouter un article d'actualités ADMIN
    public function createAdminArticle($title, $content, $description_articles, $id_user){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("INSERT INTO articles(title, content, description_articles, idarticlesusers) VALUE(?, ?, ?, ?)");
        $req->execute(array($title, $content, $description_articles, $id_user));

        return $req;
    }


    // Page Image articles d'actualités ADMIN
    public function articlesImgAdmin($id){
        $bdd = $this->bdConnect();

        $req = $bdd->prepare("SELECT * FROM articles WHERE id = ?");
        $req->execute(array($id));

        return $req;
    }


    // Editer une Image articles d'actualités ADMIN
    public function upImageArticle($id, $titre_img_articles, $target_file){ 
        $bdd = $this->bdConnect();
        
        $req = $bdd->prepare("UPDATE articles SET titre_img_articles = :titre_img_articles, image_articles = :image_articles WHERE id = :id");
        $req->execute([
            'id' => $id,
            'titre_img_articles' => $titre_img_articles,
            'image_articles' => $target_file
        ]);

        return $req;
    }



    
}
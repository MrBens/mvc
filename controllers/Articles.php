<?php

class Articles extends Controller{
    /**
     * Cette méthode affiche la liste des articles
     *
     * @return void
     */
    public function index(){
        // On instancie le modèle "Article"
        $this->loadModel('Article');

        // On stocke la liste des articles dans $articles
        $articles = $this->Article->getAll();

        // On envoie les données à la vue index
        $this->render('index', compact('articles'));
    }

    public function write(){
        $this->loadModel('Article');
        $this->render('write');
    }

    public function create()
    {
        $title =  $_POST['title'];
        $content = $_POST['content'];
        $autor =  $_POST['autor'];
        $slug = implode('-', explode(' ', $title));
        $this->loadModel('Article');
        $this->Article->createArticle($title, $content, $autor, $slug);
        header("Location: /articles");
        exit();
    }

    public function read(string $slug)
    {
        // On instancie le modèle "Article"
        $this->loadModel('Article');

        // On stocke l'article dans $article
        $article = $this->Article->findBy($slug);

        // On envoie les données à la vue lire
        $this->render('read', compact('article'));
    }

    public function modify(string $slug)
    {
        $this->loadModel('Article');
        $article = $this->Article->findBy($slug);
        $this->render('modify', compact('article'));
    }

    public function update(string $slug){
        $title =  $_POST['title'];
        $content = $_POST['content'];
        $newSlug = implode('-', explode(' ', $title));
        $this->loadModel('Article');
        $article = $this->Article->findBy($slug);
        $this->Article->updateArticle($article['id'],$title, $content, $newSlug);
        header("Location: /articles");
        exit();
        
    }

    public function delete(int $id){
        $this->loadModel('Article');
        $article = $this->Article->findBy(null, $id);
        $this->Article->deleteById($article['id']);
        header("Location: /articles");
        exit();
    }
}
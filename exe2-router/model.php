<?php
    // model
    
    function getPosts()
    {
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
        } catch( Exception $e ) {
            die( 'Erreur : '.$e->getMessage() );
        }

        $req = $bdd->query('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation_fr FROM billets ORDER BY date_creation DESC LIMIT 0, 5');

        return $req;
    }

    function getPost( $postId )
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }

        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    function getComments( $postId )
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
        }
        catch ( Exception $e )
        {
            die( 'Erreur : '.$e->getMessage() );
        }

        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    // Nouvelle fonction qui nous permet d'éviter de répéter du code
    function dbConnect()
    {
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=becode;charset=utf8', 'root', '');
            return $db;
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
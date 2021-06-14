<?php   

class Movie {
    public $id;
    public $title;
    public $year;
    public $actors = [];
    public $overview;
    public $poster;

    public function __construct($titolo, $anno, $attori, $recensione, $locandina)
    {
        $this->title = $titolo;
        $this->year = $anno;
        $this->actors = $attori;
        $this->overview = $recensione;
        $this->poster = $locandina;
    }

    public function renderFilm() {
        

        return "<h1>" . $this->title . "</h1>" . "<h2>" . $this->year . "</h2>" .
         "<p>" . $this->overview . "</p>" . "</br>" ."<img src= '$this->poster' >";

        
      }

    public function renderActors(){

        echo "<ul>";
        foreach ($this->actors as $actor) {
            echo "<li>" . $actor . "</li>";
        }
        echo "</ul>";

    }  

    
}



?>
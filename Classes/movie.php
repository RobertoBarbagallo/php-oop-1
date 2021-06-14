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
        

        return "<h1>" . $this->title . "</h1>" . "<h2>" . $this->year . "</h2>" . $this->renderActors() .
         "<p>" . $this->overview . "</p>" . "</br>" ."<img src= '$this->poster' >";

        
      }

    public function renderActors(){
        $r = "";
        $r.= "<ul>";
        foreach ($this->actors as $actor) {
            $r.="<li>" . $actor . "</li>";
        }
        $r.= "</ul>";

        return $r;

    }  

    
}



?>
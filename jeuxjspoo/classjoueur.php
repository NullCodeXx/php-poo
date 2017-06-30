<?php
    // Class joueurs
    class Joueurs{
        //Je passe mes proprieter en protected pour que mon soigneur y a acces, sinon c'est en private.
        protected $nom;
        protected $vie;
        protected $force;
        protected $defense;
        //Protected  : Class parent peuvent acceder a la proprieter.
        
        //####################################
        //####################################
        
        //Function construct qui servira a changer les valeurs de la class et le typer sert a arrondir les valeur.
        public function __construct(string $argunom, int $arguvie,int $arguforce, int $argudefense ) {
               $this->nom = $argunom;
               $this->vie = $arguvie;
               $this->force = $arguforce;
               $this->defense = $argudefense;
        }
        //####################################
        //####################################
        
        //Function display stats du player.
        public function genererHTML() {
            return 
            "<ul> "
            //La function genererstats est isoler dans sa function que je rappelle, parceque le contenue (li)
            //est suceptible de changer et que le conteneur (ul) ne change pas.
            . $this ->genererstats()
            . "</ul>";
        }
        
        //isoler dans sa propre function
        protected function genererstats():string {
            return  
            "<li>Nom : $this->nom</li>"
            . "<li>Vie : $this->vie</li>"
            . "<li>Force : $this->force</li>"
            . "<li>Defense : $this->defense</li> ";
        }
        //####################################
        //####################################
        
        //Function Attack qui attaquer > argucible
        /**
         * 
         * @param personnage $argucible /**entrer ajout d'une doc au dessus de la function qui lui concerne.
         * Pour le rappeler il faut : $this->att et il affichera la doc.
         */
        
        public function attack(Joueurs $argucible) {
            //On dit que la force moins la cible la defense contenus dans une variable.
            $degats = $this->force - $argucible->defense;
            //on verifie si les dégâts sont sont negatif ou egal a zero s'ils le sont on 
            //les passe a 1 pour eviter de soigner un perso qui a trop de defense.
            if( $degats <= 0) {
                $degats = 1;
            }
            //On dit que la vie seras inferieur ou égal aux degats.
            $argucible->vie -= $degats; 
        }
        ////Function Defense celui qui lancera l'instance def gagner 10
        public function defense() {
            $this->defense += 10; 
        }
        //Function Vie
        public function life() {
            $this->vie += 5; 
        }
        //####################################
        //####################################
        
        //Getter et Setter (recup et réunis).
        function getNom() {
            return $this->nom;
        }

        function getVie() {
            return $this->vie;
        }

        function getForce() {
            return $this->force;
        }

        function getDefense() {
            return $this->defense;
        }

        function setNom($nom) {
            $this->nom = $nom;
        }

        function setVie($vie) {
            $this->vie = $vie;
        }

        function setForce($force) {
            $this->force = $force;
        }

        function setDefense($defense) {
            $this->defense = $defense;
        }
    }
    //##################################
    //##################################
    

<?php
    class human {
        public $name;
        public $experience;
        public $education;
        public $skill;
        public $interest;
        public $awards; 
        public $references;
        public $contace;   
            
        function set_name($name){
        $this->name = $name;
        }
        function get_name(){
        return $this->name;
        }
        function set_experience($experience){
        $this->experience = $experience;
        }
        function get_experience(){
        return $this->experience;
        }
        function set_education($education){
        $this->education = $education;
        }  
        function get_education(){
        return $this->education;
        }  
        function set_skill($skill){
        $this->skill = $skill;
        }
        function get_skill(){
        return $this->skill;
        }
        function set_interest($interest){
        $this->interest = $interest;
        }
        function get_interest(){
        return $this->interest;
        }
        function set_awards($awards){
        $this->awards = $awards;
        }
        function get_awards(){
        return $this->awards;
        }
        function set_references($references){
        $this->references = $references;
        }
        function get_references(){
        return $this->references;
        }
        function set_contace($contace){
            $this->contace = $contace;
        }
        function get_contace(){
            return $this->contace;
        }
        
    }
?>
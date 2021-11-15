<?php
    class event
    {
        private $idevent;
        private $nomevent;
        private $lieuevent;
        private $dateevent;
		private $descripevent;

        function __construct($idevent, $nomevent, $lieuevent, $dateevent,$descripevent){
			$this->idevent=$idevent;
			$this->nomevent=$nomevent;
			$this->lieuevent=$lieuevent;
			$this->dateevent=$dateevent;
			$this->descripevent=$descripevent;
		            }

        function setidevent(string $idevent){
			$this->idevent=$idevent;
		}
        function setnomevent(string $nomevent){
			$this->nomevent=$nomevent;
		}
        function setlieuevent(string $lieuevent){
			$this->lieuevent=$lieuevent;
		}
        function setdateevent(string $dateevent){
			$this->dateevent=$dateevent;
		}
        function setdescripevent(string $descripevent){
			$this->descripevent=$descripevent;
		}
     

        function getidevent(){
			return $this->idevent;
		}
        function getnomevent(){
			return $this->nomevent;
		}
        function getlieuevent(){
			return $this->lieuevent;
		}
        function getdateevent(){
			return $this->dateevent;
		}
        function getdescripevent(){
			return $this->descripevent;
		}
     

        
    }
    

?>
<?php 

class View{
    static function Render($view, $data, $return=false){
        ob_start();
        require_once();
        $this->_view = ob_get_contents();
        ob_end_clean();

        if($return) return $this->_view;

        echo $
    }
}

?>
<?php
    /*
     * Template Class
     * Creates a template/view object
     */
class Template{
    // Patch to template
    protected $template;
    // Variables passed in
    protected $vars = array();

    /*
     * Class Constructor
     */
    public function __construct($template){
        $this->template = $template;
    }

    /*
     * Get template variables
     */
    public function __get($key){
        return $this->vars[$key];
    }

    /*
     * Set template variables
     */
    public function __set($key, $value){
        $this->vars[$key] = $value;
    }

    /*
    *convert object to string
     *
     * Some web servers (e.g. Apache) change the working directory of a script when calling the callback function.
     * You can change it back by e.g. chdir(dirname($_SERVER['SCRIPT_FILENAME'])) in the callback function.
    */
    public function __tostring(){
        extract($this->vars);
        chdir(dirname($this->template)); //chdir — Change directory, dirname — Returns a parent directory's path
        ob_start(); //Turn on output buffering

        include basename($this->template); //basename — Returns trailing name component of path, INCLUDE IN topic.php TEMPALTE

        return ob_get_clean(); //will silently discard the buffer contents
    }
}
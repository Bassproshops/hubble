<?PHP

namespace MVC;




class Router
{

    public $GETurl = [];
    public $POSTurl = [];




    public function get($url, $fn)
    {

        $this->GETurl[$url] = $fn;
    }

    public function post($url, $fn)
    {

        $this->POSTurl[$url] = $fn;
    }

    public function access()
    {
        $validUrl = ['/admin'];
        $actualUrl = $_SERVER['PATH_INFO'];
        

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            if (in_array($actualUrl, $validUrl)) {

                $fn = isset($this->GETurl[$actualUrl]) ? $this->GETurl[$actualUrl] : null;
            }
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {

            if (in_array($actualUrl, $validUrl)) {
                $fn = isset($this->POSTurl[$actualUrl]) ? $this->POSTurl[$actualUrl] : null;
            }
        }

        if(!is_null($fn) && isset($fn)){
            call_user_func($fn, $this);

        }
    }

    public function render($view, $array = []){
        ob_start(); 
            require_once "view/".$datos.".php";

        $content = ob_get_clean();
        require_once 'views/layout.php';
    }
}

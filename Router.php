<?PHP
namespace MVC;




class Router{

public $GETurl = [];
public $POSTurl = [];

public $validUrl= [];


public function get($url, $fn){

      $this->GETurl[$url] = $fn;

  


}

public function post($url, $fn){

    $this->POSTurl[$url] = $fn;


}

public function access(){
    $id = '';
    if($_SERVER['GET']){
        $id = $_GET;
        if(in_array($this->GETurl[$id], $this->validUrl)) {

            $fn = $this->GETurl[$id];

        }

    }elseif($_SERVER['POST']){
        $id = $_POST;


if(in_array($this->GETurl[$id],$this->validUrl)){
    $fn = $this->POSTurl[$id];

    }

}



}


}
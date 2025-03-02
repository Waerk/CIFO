<?php
class Session{
    
    
    
    public static function flash(
        string $categoria = 'message',  
        string $mensaje = ''            
        ){
            $_SESSION['flash_'.$categoria] = $mensaje;
    }
    
    
    
    
    public static function getFlash(
        string $categoria = 'message'  
        ):?string{
            
            
            $mensaje = $_SESSION['flash_'.$categoria] ?? NULL;
            
            
            if($mensaje)
                unset($_SESSION['flash_'.$categoria]);
                
                
                return $mensaje;
    }
    
    
    
    
    public static function success(string $mensaje){
        self::flash('success', $mensaje);
    }
    
    
    
    
    public static function warning(string $mensaje){
        self::flash('warning', $mensaje);
    }
    
    
    
   
    public static function error(string $mensaje){
        self::flash('error', $mensaje);
    }
    
    
    
   
    public static function set(
        string $name,    
        $value           
        ){
            $_SESSION[$name] = $value;
    }
    
    
    
    
    public static function get(string $name){
        return $_SESSION[$name] ?? NULL;
    }
    
    
    
   
    public static function all(){
        return $_SESSION;
    }
    
    
    
    
    public static function has(string $name):bool{
        return isset($_SESSION[$name]) ;
    }
    
    
    
  
    public static function forget(string $name){
        unset($_SESSION[$name]);
    }
    
    
    

    public static function clear(){
        $_SESSION = [];
    }
    
  
    public static function destroy(){
        
        self::clear();   
        
        $parametrosCookie = session_get_cookie_params();
        
        setcookie(              
            session_name(),                 
            '',                             
            time()-3600,                    
            $parametrosCookie['path'],      
            $parametrosCookie['domain'],    
            $parametrosCookie['secure'],    
            $parametrosCookie['httponly'],  
            );
        
        session_destroy();     
    }
}
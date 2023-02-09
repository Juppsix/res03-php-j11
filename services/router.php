<?php class Router 
{
    private UserController $uc;
    
    public function _construct()
    {
        $this->uc = new UserController();
        
    }
    public function checkRoute(string $route)
    {
        if ($route==="users")
        {
            $this->uc->index();
        }
        
        else if ($route==="user-create")
        {
            $this->uc->create();
        }
        else if ($route==="user-edit")
        {
            $this->uc->edit();
        }
        else 
        {
            $this->uc->index();
        }
    }
}
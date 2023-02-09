 <?php class UserController extends AbstractController {
 private UserManager $manager;
    
    private function _construct()
    {
        $this->uc = new UserController();
        
    }
    
    public function index() {
        $users = $this->manager->getAllusers
    }
 }
 
 
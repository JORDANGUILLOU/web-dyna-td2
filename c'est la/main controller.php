public function index() {}
    public function index() {
        $menu=$this->getMenu('Home');
        $messages=$this->dataProvider->getMessages();
        $content=nl2br($this->dataProvider->getPageContent('Home'));
        $this->loadView('MainController/index.html',compact('messages','content') + $menu);
    }
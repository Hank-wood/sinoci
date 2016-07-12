<?php

use App\Models\Site\ShowWelcome;
use App\Models\Site\LinkUserGuide;

class Welcome extends Controller {

    use ShowWelcome, LinkUserGuide;

    public function index () {
        $this->_output =
            $this->showWelcome();
    }

    public function guide () {
        // 验证访问权限
        if (is_dir(APPPATH.'public/user_guide'))
            return;

        $this->_output =
            $this->linkUserGuide();
    }

}

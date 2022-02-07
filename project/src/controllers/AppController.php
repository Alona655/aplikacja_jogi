<?php

class AppController {

    private $request;

    public function __construct()
    {
        $this->request = $_SERVER['REQUEST_METHOD'];
    }

    /**
     * @return bool
     */
    protected function isGet(): bool
    {
        return $this->request === 'GET';
    }

    /**
     * @return bool
     */
    protected function isPost(): bool
    {
        return $this->request === 'POST';
    }

    /**
     * @return array
     */
    protected function PostDataJson() : array
    {
        unset($_REQUEST['PHPSESSID']);
        return $_REQUEST;
    }

    /**
     * @param array $massage
     */
    public function returnInfo (array $massage)
    {
        echo json_encode($massage);
    }

    protected function render(string $template = null, array $variables = [])
    {
        session_start();
        $templatePath = 'public/views/'. $template.'.php';
        $output = 'File not found';

        if(file_exists($templatePath)){
            extract($variables);

            ob_start();
            include $templatePath;
            $output = ob_get_clean();
        }
        print $output;
    }
}
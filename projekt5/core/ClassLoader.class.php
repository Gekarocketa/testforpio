<?php
namespace core;

class ClassLoader {
    public $paths = array();

    public function __construct() {
        // Убираем регистрацию из конструктора
    }

    public function addPath($path) {
        $this->paths []= $path;
    }

    public function loadClass($class) {
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        foreach ($this->paths as $path) {
            $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
            $fileName = getConf()->root_path . $path . DIRECTORY_SEPARATOR . $class . '.class.php';
            if (is_readable($fileName)) {
                require_once $fileName;
                return; // Прекращаем поиск после нахождения класса
            }
        }
    }
}

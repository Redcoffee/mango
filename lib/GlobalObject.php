<?php
/**
 * @brief 전역 객체
 */
class GlobalObject {
    private static $instance = null;

    /**
     * @brief 싱글톤 객체 반환
     */
    public static function singleton() {
        if ( !self::$instance ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @brief __get
     * @param $name string
     * @return mixed
     */
    public function __get($name) {
        if ( $name == 'page' ) {
            return $this->page = new Page();
        }
    }
}
?>
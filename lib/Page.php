<?php
/**
 * @brief 페이지
 */
class Page {
    private $is_display = false;
    public $title; ///< <title>
    public $title_prefix; ///< <title> 접두사
    public $title_suffix; ///< <title> 접미사
    public $css = array(); ///< CSS
    public $js = array(); ///< JavaScript
    public $head = array(); ///< <head>
    public $header = array(); ///< header
    public $body = array(); ///< body
    public $footer = array(); ///< footer

    /**
     * @brief 생성자
     */
    function __construct() {
    }

    /**
     * @brief 출력
     */
    public function display() {
        extract($GLOBALS);

        if ( $this->is_display ) {
            return;
        } else {
            $this->is_display = true;
        }

        echo '<!DOCTYPE html><head>';
        echo '<meta charset="utf-8">';
        echo '<title>'
            .htmlspecialchars($this->title_prefix)
            .htmlspecialchars($this->title)
            .htmlspecialchars($this->title_suffix)
            .'</title>';

        foreach ( $this->css as $css ) {
            echo "<link rel=\"stylesheet\" href=\"{$css}\" />";
        }

        foreach ( $this->js as $js ) {
            echo "<script src=\"{$js}\"></script>";
        }

        foreach ( $this->head as $file ) {
            require $file;
        }

        echo '</head><body>';

        foreach ( $this->header as $file ) {
            require $file;
        }

        foreach ( $this->body as $file ) {
            require $file;
        }
    }

    /**
     * @brief 소멸자
     */
    function __destruct() {
        extract($GLOBALS);

        if ( !$this->is_display ) {
            return;
        }

        foreach ( $this->footer as $file ) {
            require $file;
        }

        echo '</body></html>';
    }
}
?>
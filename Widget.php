<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/**
 * 动作
 *
 * @package MyPlugin
 * @copyright Copyright (c) 2008 作者 (主页)
 * @license GNU General Public License 2.0
 */
class MyPlugin_Widget extends Typecho_Widget
{
    /**
     * 构造函数
     *
     * @access public
     * @param mixed $request request对象
     * @param mixed $response response对象
     * @param mixed $params 参数列表
     */
    public function __construct($request, $response, $params = NULL)
    {
        parent::__construct($request, $response, $params);
    }

    /**
     * execute function.
     *
     * @access public
     * @return void
     */
    public function execute(){}

    /**
     * 动作方法
     *
     * @access public
     * @return void
     */
    public function doSomething()
    {
        /** 提示信息 */
        // $this->widget('Widget_Notice')->set(_t('通知提示'), 'notice');
        // $this->widget('Widget_Notice')->set(_t('错误提示'), 'error');
        // $this->widget('Widget_Notice')->set(_t('成功提示'), 'success');
    }
}

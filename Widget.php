<?php

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

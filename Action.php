<?php

class MyPlugin_Action extends Typecho_Widget implements Widget_Interface_Do
{
    /**
     * 动作扩展方法
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

    /**
     * 绑定动作
     *
     * @access public
     * @return void
     */
    public function action()
    {
        // 进入权限设置
        $this->widget('Widget_User')->pass('administrator');

        // 绑定动作
        $this->on($this->request)->doSometing(); // url: /action/action-name
        $this->on($this->request->isPost())->doSometing(); // url: /action/action-name
        $this->on($this->request->isGet())->doSometing(); // url: /action/action-name
        $this->on($this->request->isAjax())->doSometing(); // url: /action/action-name
        $this->on($this->request->is('doSomething'))->doSomething(); // url: /action/action-name?doSomething
        $this->on($this->request->is('do=doSomething'))->doSomething(); // url: /action/action-name?do=doSomething
    }
}

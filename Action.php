<?php

namespace TypechoPlugin\Boilerplate;

use Typecho\Widget;
use Widget\ActionInterface;
use Widget\Notice;

if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}

/**
 * 动作
 *
 * @package Boilerplate
 * @copyright Copyright (c) 2008 作者 (主页)
 * @license GNU General Public License 2.0
 */
class Action extends Widget implements ActionInterface
{
    /**
     * 动作实现方法
     *
     * @access public
     * @return void
     */
    public function doSomething()
    {
        // echo '这是一个插件样板';

        /** 提示信息 */
        // $this->widget(Notice::class)->set(_t('通知提示'), 'notice');
        // $this->widget(Notice::class)->set(_t('错误提示'), 'error');
        // $this->widget(Widget\Notice::class)->set(_t('成功提示'), 'success');

        // $this->_config = parent::widget('Widget\Options')->plugin('Boilerplate');
        // parent::widget('TypechoPlugin\Boilerplate\Widget')->action();
        // $this->widget('TypechoPlugin\Boilerplate\Widget')->action();
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
        // $this->widget('Widget\User')->pass('administrator');

        // 绑定动作 /action/boilerplateAction
        // $this->on($this->request)->doSomething(); // url: /action/action-name
        // $this->on($this->request->isPost())->doSometing(); // url: /action/action-name
        $this->on($this->request->isGet())->doSomething(); // url: /action/action-name
        // $this->on($this->request->isAjax())->doSometing(); // url: /action/action-name
        // $this->on($this->request->is('doSomething'))->doSomething(); // url: /action/action-name?doSomething
        // $this->on($this->request->is('do=doSomething'))->doSomething(); // url: /action/action-name?do=doSomething
    }
}

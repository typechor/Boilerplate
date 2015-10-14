<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * typecho 插件制作样板
 *
 * @package MyPlugin
 * @author authorName
 * @version 1.0.0
 * @link http://typecho.org
 * @dependence 14.5.26-*
 */
class MyPlugin_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     *
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        // 版本支持检测
        // if (false == Typecho_Plugin::checkDependence(Typecho_Common::VERSION, '最小版本-最大版本')) {
        //     throw new Typecho_Plugin_Exception(_t('对不起, 您的程序版本不支持这个插件！'));
        // }

        // 接口
        Typecho_Plugin::factory('接口')->navBar_20 = array('MyPlugin_Plugin', '实现方法');

        Helper::addMenu('菜单名');
        Helper::addPanel('菜单索引', '文件名称', '面板标题', '面板副标题', '进入权限');
        Helper::addAction('动作名称', '动作类名');
        Helper::addRoute('路由名称', '路由路径 = /url/[path]', '组件名称', '组件动作 = NULL');
    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     *
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate()
    {
        Helper::removeRoute('路由名称');
        Helper::removeAction('动作名称');
        Helper::removePanel('菜单索引', '文件名称');
        Helper::removeMenu('菜单名');
    }

    /**
     * 获取插件配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form)
    {

        $text = new Typecho_Widget_Helper_Form_Element_Text('text', NULL, '默认值', _t('文本输入框'));
        $textarea = new Typecho_Widget_Helper_Form_Element_Textarea('textarea', NULL, '默认值', _t('多行文本输入框'));
        $password = new Typecho_Widget_Helper_Form_Element_Password('password', NULL, NULL, _t('密码输入框'));
        $radio = new Typecho_Widget_Helper_Form_Element_Radio('radio', array('选项值' => _t('选项说明')), '默认值', _t('单选框'));
        $checkbox = new Typecho_Widget_Helper_Form_Element_Checkbox('checkbox', array('选项值' => _t('选项说明')), '默认值', _t('多选框'));
        $select = new Typecho_Widget_Helper_Form_Element_Select('select', array('选项值' => _t('选项说明')), '默认值', _t('下拉选择框'));

        $form->addInput('配置名');
    }

    /**
     * 个人用户的配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}

    /**
     * 插件实现方法
     *
     * @access public
     * @return void
     */
    public static function doSomething()
    {
        // 实现代码
    }
}

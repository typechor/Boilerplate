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
        // 接口
        Typecho_Plugin::factory('接口')->navBar_20 = array('MyPlugin_Plugin', 'functionName');

        // 添加菜单
        Helper::addMenu('menuName');

        // 添加面板, 1 为菜单索引位置, administrator 为进入面板的权限
        Helper::addPanel(1, 'MyPlugin/panel.php', 'panelTitle', 'panelSubtitle', 'administrator');

        // 添加动作
        Helper::addAction('actionName', 'MyPlugin_ActionClassName');

        // 添加路由
        Helper::addRoute('routeName', '/myroute/route-path', 'MyPlugin_WidgetClassName', 'functionName');

        // 激活时返回的信息
        return _t('激活时返回的信息');
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
        Helper::removeRoute('routeName');
        Helper::removeAction('actionName');
        Helper::removePanel(1, 'MyPlugin/panel.php');
        Helper::removeMenu('menuName');
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
        // 文本输入框
        $text = new Typecho_Widget_Helper_Form_Element_Text('text', NULL, '默认值', _t('标题'), _t('提示文字'));

        // 多行文本输入框
        $textarea = new Typecho_Widget_Helper_Form_Element_Textarea('textarea', NULL, '默认值', _t('标题'), _t('提示文字'));

        // 密码输入框
        $password = new Typecho_Widget_Helper_Form_Element_Password('password', NULL, NULL, _t('标题'), _t('提示文字'));

        // 单选框
        $radio = new Typecho_Widget_Helper_Form_Element_Radio('radio',array(
            '选项值1' => _t('选项1说明'),
            '选项值2' => _t('选项2说明')),
        '默认值', _t('标题'), _t('提示文字'));

        // 多选框
        $checkbox = new Typecho_Widget_Helper_Form_Element_Checkbox('checkbox',array(
            '选项值1' => _t('选项1说明'),
            '选项值2' => _t('选项2说明')),
        '默认值', _t('标题'), _t('提示文字'));

        // 下拉选择框
        $select = new Typecho_Widget_Helper_Form_Element_Select('select',array(
            '选项值1' => _t('选项1说明'),
            '选项值2' => _t('选项2说明')),
        '默认值', _t('标题'), _t('提示文字'));

        /* 添加表单验证规则 */
        // $text->addRule('isInteger', _t('text必须是纯数字'));
        // $form->addInput($text->addRule('isInteger', _t('text必须是纯数字')));
        // $element->addRule('xssCheck', _t('请不要使用特殊字符'));
        // $password->addRule('required', _t('密码不可为空'));
        // $password->addRule('minLength', _t('为了保证账户安全, 请输入至少六位的密码'), 6);
        // $confirm->addRule('confirm', _t('两次输入的密码不一致'), 'password');
        // $url->addRule('url', _t('个人主页地址格式错误'));
        // $mail->addRule('required', _t('必须填写电子邮箱'));
        // $mail->addRule(array($this, 'mailExists'), _t('电子邮箱地址已经存在'));
        // $mail->addRule('email', _t('电子邮箱格式错误'));

        $form->addInput($text);
        $form->addInput($textarea);
        $form->addInput($password);
        $form->addInput($radio);
        $form->addInput($checkbox);
        $form->addInput($select);
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
        // 接口实现代码
    }
}

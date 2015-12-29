<?php

namespace light\Offline;

/**
 * catchAll action to display to user.
 *
 * ~~~
 *
 * public function actions()
 * {
 *     return [
 *         'offline' => [
 *             'class' => 'light\Offline\OfflineAction',
 *             'title' => '维护中',
 *             'description' => '服务器正在维护中, <br /> 请稍后访问',
 *             'weibo' => 'lichunqiang'
 *         ]
 *     ];
 * }
 *
 * ~~~
 *
 * config:
 *
 * ~~~
 * 'catchAll' => ['site/offline']
 * ~~~
 *
 */
class OfflineAction extends \yii\base\Action
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string Reason description
     */
    public $description;

    /**
     * @var string
     */
    public $weibo;

    public function run()
    {

        $this->controller->layout = false;
        $view = $this->controller->getView();

        return $view->renderFile(__DIR__ . '/view.php', [
            'title' => $this->title,
            'description' => $this->description,
            'weibo' => $this->weibo,
        ], $this->controller);
    }
}

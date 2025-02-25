<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2021 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

use humhub\modules\space\models\Membership;
use humhub\modules\space\models\Space;
use yii\helpers\Url;
use yii\web\View;

/* @var $this View */
/* @var $space Space */
/* @var $showMemberships bool */
?>

<?php if ($showMemberships): ?>
    <a href="#" class="fa fa-users" data-action-click="ui.modal.load"
       data-action-url="<?= Url::to(['/space/membership/members-list', 'container' => $space]) ?>">
        <span><?= Yii::$app->formatter->asShortInteger(Membership::getSpaceMembersQuery($space)->active()->visible()->count()) ?></span></a>
<?php endif; ?>

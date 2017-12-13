<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\Nav;

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-xs-12 col-sm-5 col-md-4">
<?php 
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'nav'],
        'items' => $menuItems,
    ]);
?>
</div>
<div class="col-xs-12 col-sm-7 col-md-8">
	<div class=""><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 items">
				<div id="bx_1847241719_80" class="news-item col-sm-6 service-item">
					<ul class="promote">
						<li><strong><a href="/services/systemi-okhrannoy-signalizatsii/">Охранная сигнализация</a></strong></li>
					</ul>
					<a href="/services/systemi-okhrannoy-signalizatsii/"><img border="0" style="float:left" title="Охранная сигнализация" alt="Охранная сигнализация" src="/upload/iblock/8df/okhrannaya_signalizatsiya.png" class="preview_picture service-picture col-lg-12 col-md-12 col-sm-12 col-xs-12"></a>
				</div>
								<div id="bx_1847241719_81" class="news-item col-sm-6 service-item">
					<ul class="promote">
						<li><strong><a href="/services/pozharnaya-signalizatsiya/">Пожарная сигнализация</a></strong></li>
					</ul>
					<a href="/services/pozharnaya-signalizatsiya/"><img border="0" style="float:left" title="Пожарная сигнализация" alt="Пожарная сигнализация" src="/upload/iblock/697/pozharnaya_signalizatsiya.png" class="preview_picture service-picture col-lg-12 col-md-12 col-sm-12 col-xs-12"></a>
				</div>
								<div id="bx_1847241719_84" class="news-item col-sm-6 service-item">
					<ul class="promote">
						<li><strong><a href="/services/trevozhnaya-signalizatsiya/">Тревожная сигнализация</a></strong></li>
					</ul>
					<a href="/services/trevozhnaya-signalizatsiya/"><img border="0" style="float:left" title="Тревожная сигнализация" alt="Тревожная сигнализация" src="/upload/iblock/73d/trevozhnaya_signalizatsiya.png" class="preview_picture service-picture col-lg-12 col-md-12 col-sm-12 col-xs-12"></a>
				</div>
								<div id="bx_1847241719_82" class="news-item col-sm-6 service-item">
					<ul class="promote">
						<li><strong><a href="/services/sistemy-videonablyudeniya/">Системы видеонаблюдения</a></strong></li>
					</ul>
					<a href="/services/sistemy-videonablyudeniya/"><img border="0" style="float:left" title="Системы видеонаблюдения" alt="Системы видеонаблюдения" src="/upload/iblock/f2b/sistemy_videonablyudeniya.png" class="preview_picture service-picture col-lg-12 col-md-12 col-sm-12 col-xs-12"></a>
				</div>
								<div id="bx_1847241719_83" class="news-item col-sm-6 service-item">
					<ul class="promote">
						<li><strong><a href="/services/skud/">Системы контроля и управления доступом (СКУД)</a></strong></li>
					</ul>
					<a href="/services/skud/"><img border="0" style="float:left" title="Системы контроля и управления доступом (СКУД)" alt="Системы контроля и управления доступом (СКУД)" src="/upload/iblock/823/skud.png" class="preview_picture service-picture col-lg-12 col-md-12 col-sm-12 col-xs-12"></a>
				</div>
								<div id="bx_1847241719_85" class="news-item col-sm-6 service-item">
					<ul class="promote">
						<li><strong><a href="/services/tekhnicheskoe-obsluzhivanie-okhrannykh-sistem/">Техническое обслуживание систем безопасности</a></strong></li>
					</ul>
					<a href="/services/tekhnicheskoe-obsluzhivanie-okhrannykh-sistem/"><img border="0" style="float:left" title="Техническое обслуживание систем безопасности" alt="Техническое обслуживание систем безопасности" src="/upload/iblock/573/tekhnicheskoe_obsluzhivanie.png" class="preview_picture service-picture col-lg-12 col-md-12 col-sm-12 col-xs-12"></a>
				</div>
								<div id="bx_1847241719_86" class="news-item col-sm-6 service-item">
					<ul class="promote">
						<li><strong><a href="/services/preduprezhdayushchie-nakleyki-okhranyaetsya-politsiey/">Предупреждающие наклейки «Охраняется полицией»</a></strong></li>
					</ul>
					<a href="/services/preduprezhdayushchie-nakleyki-okhranyaetsya-politsiey/"><img border="0" style="float:left" title="Предупреждающие наклейки «Охраняется полицией»" alt="Предупреждающие наклейки «Охраняется полицией»" src="/upload/iblock/10a/preduprezhdayushchie_nakleyki_okhranyaetsya_politsiey.png" class="preview_picture service-picture col-lg-12 col-md-12 col-sm-12 col-xs-12"></a>
				</div>
				</div>
<div style="clear: both;"></div></div>
<script>
function setEqualHeight(columns) {
var tallestcolumn = 0;
columns.each(function() {
	currentHeight = $(this).height();

	if(currentHeight > tallestcolumn){
		tallestcolumn = currentHeight;
	}
});
columns.height(tallestcolumn);
}
$(document).ready(function(){
	setEqualHeight($(".items .itemlist"));
});
</script><br style="clear:both;">
<p>
	ЗАО «Безопасность» осуществляет проектирование, монтажные работы и техническое обслуживание систем охранной, пожарной и охранно-пожарной сигнализации (в том числе подключение на пульты охраны с реагированием нарядов полиции), установку систем пожаротушения, видеонаблюдения, а также систем контроля и управления доступом.
</p>
<p>
	Так как компания существует на рынке более 5 лет и занимает одну из лидирующих позиций в своем сегменте, вы смело можете доверить нам безопасность своего жилища или бизнеса. Мы ценим наших клиентов и делаем все, чтобы Вам было комфортно работать с нами! Наши цены на установку охранного оборудования вас приятно удивят!
</p>
<p>
	<em>Итак, каков же алгоритм выполнения работ по приобретению и установке охранно-пожарных систем?</em>
</p>
<ul class="promote">
	<li><strong>Обследование объекта для установки охранного оборудования</strong></li>
</ul>
<p>
	Изучение технических особенностей объекта: площади, оснащаемой системой; планов помещений; высотой строений; схем коммуникаций и пр.
</p>
<ul class="promote">
	<li><strong>Проектирование охранных систем</strong></li>
</ul>
<p>
	На основе данных, которые были получены после проведения обследования составляется схема будущей системы безопасности, а также коммерческое предложение на охранное оборудование и проводимые работы.
</p>
<ul class="promote">
	<li><strong>Монтаж охранного оборудования</strong></li>
</ul>
<p>
	После заключения договора, в кратчайшие сроки, наши специалисты производят доставку оборудования. После чего осуществляется монтаж с последующим гарантийным обслуживанием.
</p>
<ul class="promote">
	<li><strong>Пуско-наладочные работы охранных систем</strong></li>
</ul>
<p>
	Данный этап очень важен. После монтажа, производятся установка и настройка программного обеспечения, специалисты проверяют качество соединения. Производится проверка функционирования каждого из элементов охранной системы.
</p>
<ul class="promote">
	<li><strong>Сдача работ, обучение</strong></li>
</ul>
<p>
	Это финальный этап, где обе стороны подписывают акт приемки-сдачи работ. Наши специалисты обучают заказчика основам эксплуатации оборудования.
</p>
<ul class="promote">
	<li><strong>Техническое обслуживание охранных систем</strong></li>
</ul>
<p>
	Независимо от условий эксплуатации, любая охранная система требует регулярного технического обслуживания. Ежемесячная процедура проверки оборудования позволяет содержать охранное оборудование в исправности, вовремя производить замену вышедших из строя комплектующих. Именно техническое обслуживание является залогом того, что охранная система не выйдет из строя в самый ответственный момент.
</p>
<p>
	Кроме того, у заказчика может появиться желание интегрировать в уже имеющуюся систему другие возможности. Например, добавить к охранно-пожарной сигнализации систему видеонаблюдения.
</p>
<p>
	Наши специалисты проводят работы по модернизации охранных систем, их гарантийного и технического обслуживания.
</p>
<p>
	<em>Мы всегда готовы сориентировать вас по функционалу оборудования и ценам на охранные системы!</em>
</p>	
</div>

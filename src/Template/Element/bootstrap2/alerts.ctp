<?php
// View
echo $this->Flash->render();

// Controller
$this->Session->setFlash(__('Alert notice message testing...'), 'alert', array(
	'plugin' => 'BoostCake',
));

$this->Session->setFlash(__('Alert success message testing...'), 'alert', array(
	'plugin' => 'BoostCake',
	'class' => 'alert-success'
));

$this->Session->setFlash(__('Alert error message testing...'), 'alert', array(
	'plugin' => 'BoostCake',
	'class' => 'alert-error'
));
?>
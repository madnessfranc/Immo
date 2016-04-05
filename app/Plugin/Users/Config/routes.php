<?php
Router::connect('/users', array('plugin' => 'users', 'controller' => 'users'));
Router::connect('/users/index/*', array('plugin' => 'users', 'controller' => 'users'));
Router::connect('/users/:action/*', array('plugin' => 'users', 'controller' => 'users'));
Router::connect('/users/dashboard/:username',array('plugin'=>'users','controller'=>'users','action'=>'dashboard'));
Router::connect('/users/favorites/:username',array('plugin'=>'users','controller'=>'users','action'=>'allfavorites'));
Router::connect('/users/uploads/:username',array('plugin'=>'users','controller'=>'users','action'=>'uploads'));
Router::connect('/users/editimage/:username',array('plugin'=>'users','controller'=>'users','action'=>'editimage'));
Router::connect('/users/editimageupload',array('plugin'=>'users','controller'=>'users','action'=>'editimageupload'));
Router::connect('/users/users/:action/*', array('plugin' => 'users', 'controller' => 'users'));
Router::connect('/login', array('plugin' => 'users', 'controller' => 'users', 'action' => 'login'));
Router::connect('/logout', array('plugin' => 'users', 'controller' => 'users', 'action' => 'logout'));
Router::connect('/register', array('plugin' => 'users', 'controller' => 'users', 'action' => 'add'));
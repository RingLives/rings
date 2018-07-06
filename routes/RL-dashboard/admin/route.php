<?php

Route::get('/admin/login',
			[
                'as'=>'admin_login',
                'uses'=>'RLdashboard\admin\HomeController@index'
            ]);

Route::get('rl/admin',function(){
	return view('RL-dashboard.home.index');
});
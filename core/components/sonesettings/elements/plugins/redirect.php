<?php
    if ($modx->event->name != "OnHandleRequest" || $modx->context->key == 'mgr') {
		return;
	}
    $uri = $_SERVER['REQUEST_URI'];
    if (substr($uri, -1) != '/' && $uri != '/' && !strpos($uri, '?')&& !strpos($uri, '.')) {
    	$url = $modx->getOption('site_url');
    	if(substr($url, -1)=='/'){
    		$url=substr($url, 0, -1);
    	}
    	$url .= $uri.'/';
    	$modx->sendRedirect($url,array('responseCode' => 'HTTP/1.1 301 Moved Permanently'));
    }
	
	if ($_SERVER['REQUEST_URI'] != '/') {
		$uri = strtok(substr($_SERVER['REQUEST_URI'], 1), '?');
		
		if ($uri == 'index.php') {
			$uri = intval(str_replace('/index.php?id=', '', $_SERVER['REQUEST_URI']));
			//не уверен, нужна ли здесь проверка на наличие ресурса, т.к. в случае отсутствия оного, событие должно перехватить OnPageNotFound
			
			if(empty($uri)) {
				$url = 1;
			}

			$modx->sendRedirect($modx->makeUrl($uri));
		}
	}
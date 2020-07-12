<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 2,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => '404',
    'longtitle' => '',
    'description' => '',
    'alias' => '404',
    'alias_visible' => 1,
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 1,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1594530314,
    'editedby' => 1,
    'editedon' => 1594531102,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1594530300,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => '404.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>404 - MODX Revolution</title>
        <base href="[[!++site_url]]" />
        <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" src="upload/favicon/favicon.png">
	</head>
	<body>
		<link rel="stylesheet" href="_/templates/temp/styles/css/style.css?ver=1594526919291">
		<div class="main-wrap">
			<header class="header">
				<div class="case">
					<div class="header__wrap row i-mid">
						<div class="header__logo"><a href=""><img src="upload/logo.png" alt=""></a></div>
						<div class="header__inner row i-mid nav">
							<div class="header__nav">
								<ul>
									<li><a href="/">О нас                 </a></li>
									<li><a href="how-to-work.html">Как мы работаем</a></li>
									<li><a href="news/">Новости</a></li>
								</ul>
							</div>
							<div class="header__email"><a href="mailto:Intfood@gmail.com">Intfood@gmail.com</a></div>
						</div>
						<div class="header__hum hum"><span></span><span></span><span></span></div>
					</div>
				</div>
			</header>
			<main class="main">

<div class="text page">
	<div class="case">
		<div class="text__wrap">
			<h1>404</h1>
			
		</div>
	</div>
</div>

            </main>
			<footer class="footer">
				<div class="case">
					<div class="footer__wrap row i-mid">
						<div class="footer__logo"><img src="upload/logo.png" alt=""></div>
						<div class="footer__copy">© 2020 Компания «Интернешнл фуд» производитель спортивного питания</div>
					</div>
				</div>
			</footer>
			[[!AjaxForm?
            	&snippet=`FormIt`
            	&form=`form-1`
            	&emailTpl=`formTpl`
            	&hooks=`email`
            	&emailSubject=`Новое сообщение с сайта`
            	&emailTo=`e5ash.bro@gmail.com`
            	&successMessage=`Сообщение успешно отправлено`
            ]]
            [[!AjaxForm?
            	&snippet=`FormIt`
            	&form=`form-2`
            	&emailTpl=`formTpl`
            	&hooks=`email`
            	&emailSubject=`Новое сообщение с сайта`
            	&emailTo=`e5ash.bro@gmail.com`
            	&successMessage=`Сообщение успешно отправлено`
            ]]
			
			
			
			<div class="popup --xxs" id="popup-thanks">
				<div class="popup__wrap">
					<div class="popup__inner">
						<div class="popup__title">Спасибо!</div>
						<div class="popup__text">Ваша заявка успешно отправлена.</div>
					</div>
				</div>
				<div class="popup__bg popup-close"></div>
			</div>
		</div>
		<script src="_/templates/temp/scripts/js/libs.js?ver=1594526919291"></script><script src="_/templates/temp/scripts/js/common.js?ver=1594526919291"></script>
	</body>
</html>',
    '_isForward' => true,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$head]]' => '<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>404 - MODX Revolution</title>
        <base href="[[!++site_url]]" />
        <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" src="upload/favicon/favicon.png">
	</head>
	<body>
		<link rel="stylesheet" href="_/templates/temp/styles/css/style.css?ver=1594526919291">
		<div class="main-wrap">
			<header class="header">
				<div class="case">
					<div class="header__wrap row i-mid">
						<div class="header__logo"><a href=""><img src="upload/logo.png" alt=""></a></div>
						<div class="header__inner row i-mid nav">
							<div class="header__nav">
								<ul>
									<li><a href="/">О нас                 </a></li>
									<li><a href="how-to-work.html">Как мы работаем</a></li>
									<li><a href="news/">Новости</a></li>
								</ul>
							</div>
							<div class="header__email"><a href="mailto:Intfood@gmail.com">Intfood@gmail.com</a></div>
						</div>
						<div class="header__hum hum"><span></span><span></span><span></span></div>
					</div>
				</div>
			</header>
			<main class="main">',
    '[[$foot]]' => '            </main>
			<footer class="footer">
				<div class="case">
					<div class="footer__wrap row i-mid">
						<div class="footer__logo"><img src="upload/logo.png" alt=""></div>
						<div class="footer__copy">© 2020 Компания «Интернешнл фуд» производитель спортивного питания</div>
					</div>
				</div>
			</footer>
			[[!AjaxForm?
            	&snippet=`FormIt`
            	&form=`form-1`
            	&emailTpl=`formTpl`
            	&hooks=`email`
            	&emailSubject=`Новое сообщение с сайта`
            	&emailTo=`e5ash.bro@gmail.com`
            	&successMessage=`Сообщение успешно отправлено`
            ]]
            [[!AjaxForm?
            	&snippet=`FormIt`
            	&form=`form-2`
            	&emailTpl=`formTpl`
            	&hooks=`email`
            	&emailSubject=`Новое сообщение с сайта`
            	&emailTo=`e5ash.bro@gmail.com`
            	&successMessage=`Сообщение успешно отправлено`
            ]]
			
			
			
			<div class="popup --xxs" id="popup-thanks">
				<div class="popup__wrap">
					<div class="popup__inner">
						<div class="popup__title">Спасибо!</div>
						<div class="popup__text">Ваша заявка успешно отправлена.</div>
					</div>
				</div>
				<div class="popup__bg popup-close"></div>
			</div>
		</div>
		<script src="_/templates/temp/scripts/js/libs.js?ver=1594526919291"></script><script src="_/templates/temp/scripts/js/common.js?ver=1594526919291"></script>
	</body>
</html>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>[[*pagetitle]] - [[++site_name]]</title>
        <base href="[[!++site_url]]" />
        <meta charset="[[++modx_charset]]" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" src="upload/favicon/favicon.png">
	</head>
	<body>
		<link rel="stylesheet" href="_/templates/temp/styles/css/style.css?ver=1594526919291">
		<div class="main-wrap">
			<header class="header">
				<div class="case">
					<div class="header__wrap row i-mid">
						<div class="header__logo"><a href=""><img src="upload/logo.png" alt=""></a></div>
						<div class="header__inner row i-mid nav">
							<div class="header__nav">
								<ul>
									<li><a href="[[~1]]">О нас                 </a></li>
									<li><a href="[[~4]]">Как мы работаем</a></li>
									<li><a href="[[~3]]">Новости</a></li>
								</ul>
							</div>
							<div class="header__email"><a href="mailto:Intfood@gmail.com">Intfood@gmail.com</a></div>
						</div>
						<div class="header__hum hum"><span></span><span></span><span></span></div>
					</div>
				</div>
			</header>
			<main class="main">',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>[[*pagetitle]] - [[++site_name]]</title>
        <base href="[[!++site_url]]" />
        <meta charset="[[++modx_charset]]" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" src="upload/favicon/favicon.png">
	</head>
	<body>
		<link rel="stylesheet" href="_/templates/temp/styles/css/style.css?ver=1594526919291">
		<div class="main-wrap">
			<header class="header">
				<div class="case">
					<div class="header__wrap row i-mid">
						<div class="header__logo"><a href=""><img src="upload/logo.png" alt=""></a></div>
						<div class="header__inner row i-mid nav">
							<div class="header__nav">
								<ul>
									<li><a href="[[~1]]">О нас                 </a></li>
									<li><a href="[[~4]]">Как мы работаем</a></li>
									<li><a href="[[~3]]">Новости</a></li>
								</ul>
							</div>
							<div class="header__email"><a href="mailto:Intfood@gmail.com">Intfood@gmail.com</a></div>
						</div>
						<div class="header__hum hum"><span></span><span></span><span></span></div>
					</div>
				</div>
			</header>
			<main class="main">',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'foot' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'foot',
          'description' => '',
          'editor_type' => 0,
          'category' => 2,
          'cache_type' => 0,
          'snippet' => '            </main>
			<footer class="footer">
				<div class="case">
					<div class="footer__wrap row i-mid">
						<div class="footer__logo"><img src="upload/logo.png" alt=""></div>
						<div class="footer__copy">© 2020 Компания «Интернешнл фуд» производитель спортивного питания</div>
					</div>
				</div>
			</footer>
			[[!AjaxForm?
            	&snippet=`FormIt`
            	&form=`form-1`
            	&emailTpl=`formTpl`
            	&hooks=`email`
            	&emailSubject=`Новое сообщение с сайта`
            	&emailTo=`e5ash.bro@gmail.com`
            	&successMessage=`Сообщение успешно отправлено`
            ]]
            [[!AjaxForm?
            	&snippet=`FormIt`
            	&form=`form-2`
            	&emailTpl=`formTpl`
            	&hooks=`email`
            	&emailSubject=`Новое сообщение с сайта`
            	&emailTo=`e5ash.bro@gmail.com`
            	&successMessage=`Сообщение успешно отправлено`
            ]]
			
			
			
			<div class="popup --xxs" id="popup-thanks">
				<div class="popup__wrap">
					<div class="popup__inner">
						<div class="popup__title">Спасибо!</div>
						<div class="popup__text">Ваша заявка успешно отправлена.</div>
					</div>
				</div>
				<div class="popup__bg popup-close"></div>
			</div>
		</div>
		<script src="_/templates/temp/scripts/js/libs.js?ver=1594526919291"></script><script src="_/templates/temp/scripts/js/common.js?ver=1594526919291"></script>
	</body>
</html>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '            </main>
			<footer class="footer">
				<div class="case">
					<div class="footer__wrap row i-mid">
						<div class="footer__logo"><img src="upload/logo.png" alt=""></div>
						<div class="footer__copy">© 2020 Компания «Интернешнл фуд» производитель спортивного питания</div>
					</div>
				</div>
			</footer>
			[[!AjaxForm?
            	&snippet=`FormIt`
            	&form=`form-1`
            	&emailTpl=`formTpl`
            	&hooks=`email`
            	&emailSubject=`Новое сообщение с сайта`
            	&emailTo=`e5ash.bro@gmail.com`
            	&successMessage=`Сообщение успешно отправлено`
            ]]
            [[!AjaxForm?
            	&snippet=`FormIt`
            	&form=`form-2`
            	&emailTpl=`formTpl`
            	&hooks=`email`
            	&emailSubject=`Новое сообщение с сайта`
            	&emailTo=`e5ash.bro@gmail.com`
            	&successMessage=`Сообщение успешно отправлено`
            ]]
			
			
			
			<div class="popup --xxs" id="popup-thanks">
				<div class="popup__wrap">
					<div class="popup__inner">
						<div class="popup__title">Спасибо!</div>
						<div class="popup__text">Ваша заявка успешно отправлена.</div>
					</div>
				</div>
				<div class="popup__bg popup-close"></div>
			</div>
		</div>
		<script src="_/templates/temp/scripts/js/libs.js?ver=1594526919291"></script><script src="_/templates/temp/scripts/js/common.js?ver=1594526919291"></script>
	</body>
</html>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'AjaxForm' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'AjaxForm',
          'description' => '',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */
/** @var AjaxForm $AjaxForm */
if (!$modx->loadClass(\'ajaxform\', MODX_CORE_PATH . \'components/ajaxform/model/ajaxform/\', false, true)) {
    return false;
}
$AjaxForm = new AjaxForm($modx, $scriptProperties);

$snippet = $modx->getOption(\'snippet\', $scriptProperties, \'FormIt\', true);
$tpl = $modx->getOption(\'form\', $scriptProperties, \'tpl.AjaxForm.example\', true);
$formSelector = $modx->getOption(\'formSelector\', $scriptProperties, \'ajax_form\', true);
$objectName = $modx->getOption(\'objectName\', $scriptProperties, \'AjaxForm\', true);
$AjaxForm->loadJsCss($objectName);

/** @var pdoTools $pdo */
if (class_exists(\'pdoTools\') && $pdo = $modx->getService(\'pdoTools\')) {
    $content = $pdo->getChunk($tpl, $scriptProperties);
} else {
    $content = $modx->getChunk($tpl, $scriptProperties);
}
if (empty($content)) {
    return $modx->lexicon(\'af_err_chunk_nf\', array(\'name\' => $tpl));
}

// Add selector to tag form
if (preg_match(\'#<form.*?class=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content, $matches)) {
    $classes = explode(\' \', $matches[1]);
    if (!in_array($formSelector, $classes)) {
        $classes[] = $formSelector;
        $classes = preg_replace(
            \'#class=(?:"|\\\')\' . $matches[1] . \'(?:"|\\\')#i\',
            \'class="\' . implode(\' \', $classes) . \'"\',
            $matches[0]
        );
        $content = str_ireplace($matches[0], $classes, $content);
    }
} else {
    $content = str_ireplace(\'<form\', \'<form class="\' . $formSelector . \'"\', $content);
}

// Add method = post
if (preg_match(\'#<form.*?method=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content)) {
    $content = preg_replace(\'#<form(.*?)method=(?:"|\\\')(.*?)(?:"|\\\')#i\', \'<form\\\\1method="post"\', $content);
} else {
    $content = str_ireplace(\'<form\', \'<form method="post"\', $content);
}

// Add action for form processing
$hash = md5(http_build_query($scriptProperties));
$action = \'<input type="hidden" name="af_action" value="\' . $hash . \'" />\';
if ((stripos($content, \'</form>\') !== false)) {
    if (preg_match(\'#<input.*?name=(?:"|\\\')af_action(?:"|\\\').*?>#i\', $content, $matches)) {
        $content = str_ireplace($matches[0], \'\', $content);
    }
    $content = str_ireplace(\'</form>\', "\\n\\t$action\\n</form>", $content);
}

// Save settings to user`s session
$_SESSION[\'AjaxForm\'][$hash] = $scriptProperties;

// Call snippet for preparation of form
$action = !empty($_REQUEST[\'af_action\'])
    ? $_REQUEST[\'af_action\']
    : $hash;

$AjaxForm->process($action, $_REQUEST);

// Return chunk
return $content;',
          'locked' => false,
          'properties' => 
          array (
            'form' => 
            array (
              'name' => 'form',
              'desc' => 'ajaxform_prop_form',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tpl.AjaxForm.example',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Чанк с формой для отправки.',
              'area_trans' => '',
            ),
            'snippet' => 
            array (
              'name' => 'snippet',
              'desc' => 'ajaxform_prop_snippet',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'FormIt',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Сниппет, который будет обрабатывать указанную форму.',
              'area_trans' => '',
            ),
            'frontend_css' => 
            array (
              'name' => 'frontend_css',
              'desc' => 'ajaxform_prop_frontend_css',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]css/default.css',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Файл с css стилями для подключения на фронтенде.',
              'area_trans' => '',
            ),
            'frontend_js' => 
            array (
              'name' => 'frontend_js',
              'desc' => 'ajaxform_prop_frontend_js',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]js/default.js',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Файл с javascript для подключения на фронтенде.',
              'area_trans' => '',
            ),
            'actionUrl' => 
            array (
              'name' => 'actionUrl',
              'desc' => 'ajaxform_prop_actionUrl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '[[+assetsUrl]]action.php',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Коннектор для обработки ajax запросов.',
              'area_trans' => '',
            ),
            'formSelector' => 
            array (
              'name' => 'formSelector',
              'desc' => 'ajaxform_prop_formSelector',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'ajax_form',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Имя CSS класса, который будеи использован как jQuery селектор для инициализации формы. По умолчанию "ajax_form".',
              'area_trans' => '',
            ),
            'objectName' => 
            array (
              'name' => 'objectName',
              'desc' => 'ajaxform_prop_objectName',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'AjaxForm',
              'lexicon' => 'ajaxform:properties',
              'area' => '',
              'desc_trans' => 'Имя объекта для инициализации в подключаемом javascript. По умолчанию "AjaxForm".',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/ajaxform/elements/snippets/snippet.ajaxform.php',
          'content' => '/** @var array $scriptProperties */
/** @var AjaxForm $AjaxForm */
if (!$modx->loadClass(\'ajaxform\', MODX_CORE_PATH . \'components/ajaxform/model/ajaxform/\', false, true)) {
    return false;
}
$AjaxForm = new AjaxForm($modx, $scriptProperties);

$snippet = $modx->getOption(\'snippet\', $scriptProperties, \'FormIt\', true);
$tpl = $modx->getOption(\'form\', $scriptProperties, \'tpl.AjaxForm.example\', true);
$formSelector = $modx->getOption(\'formSelector\', $scriptProperties, \'ajax_form\', true);
$objectName = $modx->getOption(\'objectName\', $scriptProperties, \'AjaxForm\', true);
$AjaxForm->loadJsCss($objectName);

/** @var pdoTools $pdo */
if (class_exists(\'pdoTools\') && $pdo = $modx->getService(\'pdoTools\')) {
    $content = $pdo->getChunk($tpl, $scriptProperties);
} else {
    $content = $modx->getChunk($tpl, $scriptProperties);
}
if (empty($content)) {
    return $modx->lexicon(\'af_err_chunk_nf\', array(\'name\' => $tpl));
}

// Add selector to tag form
if (preg_match(\'#<form.*?class=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content, $matches)) {
    $classes = explode(\' \', $matches[1]);
    if (!in_array($formSelector, $classes)) {
        $classes[] = $formSelector;
        $classes = preg_replace(
            \'#class=(?:"|\\\')\' . $matches[1] . \'(?:"|\\\')#i\',
            \'class="\' . implode(\' \', $classes) . \'"\',
            $matches[0]
        );
        $content = str_ireplace($matches[0], $classes, $content);
    }
} else {
    $content = str_ireplace(\'<form\', \'<form class="\' . $formSelector . \'"\', $content);
}

// Add method = post
if (preg_match(\'#<form.*?method=(?:"|\\\')(.*?)(?:"|\\\')#i\', $content)) {
    $content = preg_replace(\'#<form(.*?)method=(?:"|\\\')(.*?)(?:"|\\\')#i\', \'<form\\\\1method="post"\', $content);
} else {
    $content = str_ireplace(\'<form\', \'<form method="post"\', $content);
}

// Add action for form processing
$hash = md5(http_build_query($scriptProperties));
$action = \'<input type="hidden" name="af_action" value="\' . $hash . \'" />\';
if ((stripos($content, \'</form>\') !== false)) {
    if (preg_match(\'#<input.*?name=(?:"|\\\')af_action(?:"|\\\').*?>#i\', $content, $matches)) {
        $content = str_ireplace($matches[0], \'\', $content);
    }
    $content = str_ireplace(\'</form>\', "\\n\\t$action\\n</form>", $content);
}

// Save settings to user`s session
$_SESSION[\'AjaxForm\'][$hash] = $scriptProperties;

// Call snippet for preparation of form
$action = !empty($_REQUEST[\'af_action\'])
    ? $_REQUEST[\'af_action\']
    : $hash;

$AjaxForm->process($action, $_REQUEST);

// Return chunk
return $content;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);
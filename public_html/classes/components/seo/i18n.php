<?php

	/** Языковые константы для русской версии */
	$i18n = [
		'header-seo-seo' => 'Анализ позиций',
		'header-seo-megaindex' => 'Настройки системы MegaIndex',
		'perms-seo-seo' => 'SEO-функции',
		'perms-seo-guest' => 'Гостевые права',
		'perms-seo-config' => 'Права на работу с настройками',
		'perms-seo-delete' => 'Права на удаление сайта из Яндекс.Вебмастер',
		'header-seo-config' => 'Настройки SEO',
		'header-seo-links' => 'Анализ ссылок',
		'header-seo-getBrokenLinks' => 'Страницы с битыми ссылками',
		'header-seo-emptyMetaTags' => 'Страницы с незаполненными meta тегами',
		'header-seo-getSiteInfo' => 'Информация о сайте из Яндекс.Вебмастер',
		'label-seo-domain' => 'Домен',
		'option-seo-title' => 'Префикс для TITLE',
		'option-seo-default-title' => 'TITLE (по умолчанию)',
		'option-seo-keywords' => 'Keywords (по умолчанию)',
		'option-seo-description' => 'Description (по умолчанию)',
		'option-seo-is-case-sensitive' => 'Регистрозависимый URL',
		'option-seo-case-sensitive-status' => 'Способ обработки регистрозависимого URL',
		'option-seo-is-process-slashes' => 'Обрабатывать повторяющиеся слеши (/) в URL',
		'option-seo-process-slashes-status' => 'Способ обработки URL с повторяющимися слешами',
		'option-seo-add-id-to-alt-name' => 'Добавлять идентификатор страницы к alt-name дублирующих страниц',
		'option-delete-slashes-and-redirect' => 'Удалить повторяющиеся слеши и перейти на страницу',
		'option-redirect-to-not-found-page' => 'Открывать 404 страницу',
		'option-redirect-to-similar-url' => 'Перенаправлять на похожий существующий URL',
		'header-seo-domains' => 'SEO настройки доменов',
		'seo-site-settings' => 'Настройки для сайта',
		'label-site-address' => 'Адрес сайта',
		'label-site-analysis' => 'Анализ сайта',
		'label-button' => 'Проверить',
		'label-repeat' => 'Повторить',
		'label-results' => 'Результаты',
		'label-query' => 'Запрос',
		'label-yandex' => 'Яндекс',
		'label-google' => 'Google',
		'label-count' => 'Запросов в месяц',
		'label-wordstat' => 'Wordstat',
		'label-price' => 'Стоимость',
		'label-link-from' => 'На какой странице расположена ссылка',
		'label-link-to' => 'На какую страницу ведет ссылка',
		'label-tic-from' => 'тИЦ донора',
		'label-tic-to' => 'тИЦ акцептора',
		'label-link-anchor' => 'Анкор ссылки',
		'label-seo-noindex' => 'Сайт %s отсутствует в базе MegaIndex. Пожалуйста, зарегистрируйтесь и добавьте сайт на индексацию.',
		'label-error-megaindex-noinfo' => 'Данные отсутствуют',
		'label-error-megaindex-invalid-user' => 'Пользователь отсутствует в базе MegaIndex. Пожалуйста, зарегистрируйтесь и добавьте данные в <a href="%s/admin/seo/megaindex/">настройках модуля</a>.',
		'option-megaindex-login' => 'Логин в системе MegaIndex',
		'option-megaindex-password' => 'Пароль в системе MegaIndex',
		'error-invalid_answer' => 'Система Megaindex не отвечает. Пожалуйста, попробуйте повторить попытку позже.',
		'error-authorization-failed' => 'Неверный логин или пароль.',
		'error' => 'Ошибка: ',
		'error-data' => 'Ошибка: Некорректные данные',
		'header-seo-webmaster' => 'Яндекс.Вебмастер',
		'header-seo-yandex' => 'Настройки Яндекс.Вебмастер',
		'footer-webmaster-text' => 'Основано на данных ',
		'footer-webmaster-link' => 'Яндекс.Вебмастер',
		'option-token' => 'Ваш текущий токен: ',
		'option-code' => 'Введите код подтверждения',
		'link-code' => 'Получить код',
		'label-yes' => 'Да',
		'label-no' => 'Нет',
		'error-need-megaindex-registration' => 'Для использования модуля необходима регистрация на сайте <a href="http://www.megaindex.ru" target="_blank" title="">MegaIndex</a>. Зарегистрируйтесь на нём, затем впишите свой логин и пароль в <a href="/admin/seo/megaindex/" title="" >Настройках модуля</a>.',
		'label-link-address' => 'Адрес ссылки',
		'label-page-address' => 'Адрес страницы',
		'js-label-view-button' => 'Посмотреть источники',
		'label-error-links-not-found' => 'Источники данной ссылки не найдены, обратитесь в Службу Заботы за помощью.',
		'js-label-request-error' => 'Произошла ошибка выполнения запроса к серверу, пожалуйста, попробуйте позже.',
		'js-label-place-type-template' => 'В шаблоне: ',
		'js-label-place-type-object' => 'В объекте: ',
		'js-label-header-sources' => 'Битая ссылка была найдена:',
		'js-label-title-sources' => 'Источники битой ссылки',
		'js-confirm' => 'Ок',
		'label-button-find-bad-links' => 'Найти битые ссылки',
		'label-info-DesignTemplates' => 'Производится поиск ссылок в шаблонах дизайна...',
		'label-info-ObjectsFields' => 'Производится поиск ссылок в текстовых полях объектов...',
		'label-info-ObjectsNames' => 'Производится поиск ссылок в именах объектов...',
		'label-info-SitesUrls' => 'Производится поиск ссылок на страницах сайта...',
		'label-info-linksChecker' => 'Производится проверка ссылок...',
		'js-label-step-linksChecker' => 'check',
		'js-label-step-linksGrabber' => 'index',
		'js-label-bad-links-search-complete' => 'Поиск завершен',
		'js-label-close' => 'Закрыть',
		'js-label-interrupt' => 'Прервать',
		'js-label-bad-links-search' => 'Поиск битых ссылок',
		'js-label-bad-links-search-start-message' => 'Начинается поиск ссылок',
		'js-error-label-unknown-search-step-name' => 'Неизвестный шаг поиска',
		'label-error-seo-admin-not-implemented' => 'Не удалось задействовать административный функционал модуля "SEO"',
		'label-error-yandex-create-verify-file' => 'Не удалось создать файл подтверждения',
		'label-error-yandex-wrong-code' => 'Введен неверный код подтверждения',
		'label-error-yandex-web-master-invalid-token' => 'Сервис "Яндекс.Вебмастер" отклонил ваш токен. Проверьте, пожалуйста, актуальность <a href="%s/admin/seo/yandex/">токена</a>',
		'label-yandex-site-name' => 'Название',
		'label-yandex-site-address' => 'Адрес',
		'label-yandex-site-index-state' => 'Индексация',
		'label-yandex-site-verify-state' => 'Права',
		'label-yandex-site-verify-tic' => 'тИЦ',
		'label-yandex-site-map-added' => 'Карта сайта добавлена',
		'label-yandex-site-downloaded-count' => 'Загружено страниц',
		'label-yandex-site-excluded-count' => 'Исключено страниц',
		'label-yandex-site-searchable-count' => 'Страниц в поиске',
		'label-yandex-site-problems-count' => 'Количество проблем',
		'js-label-yandex-button-view' => 'Посмотреть подробную информацию',
		'js-label-yandex-button-add' => 'Добавить сайт в Яндекс.Вебмастер',
		'js-label-yandex-button-verify' => 'Подтвердить права',
		'js-label-yandex-button-add_site_map' => 'Добавить карту сайта в Яндекс.Вебмастер',
		'js-label-yandex-button-delete' => 'Удалить сайт из Яндекс.Вебмастер',
		'js-label-yandex-button-refresh' => 'Обновить данные',
		'label-yandex-site-status-NOT_ADDED' => 'Не добавлен в Яндекс.Вебмастер',
		'label-yandex-site-status-UNDEFINED' => 'Статус не определен',
		'label-yandex-site-status-NOT_INDEXED' => 'Не проиндексирован',
		'label-yandex-site-status-NOT_LOADED' => 'Не загружен',
		'label-yandex-site-status-OK' => 'Проиндексирован и загружен',
		'label-yandex-site-option-null-value' => 'Неизвестно',
		'label-yandex-verify-status-NONE' => 'Подтверждение не проводилось',
		'label-yandex-verify-status-VERIFIED' => 'Права подтверждены',
		'label-yandex-verify-status-IN_PROGRESS' => 'Идет подтверждение прав',
		'label-yandex-verify-status-VERIFICATION_FAILED' => 'Права не подтверждены',
		'label-yandex-verify-status-INTERNAL_ERROR' => 'Произошла ошибка',
		'label-yandex-external-links' => 'Внешние ссылки',
		'label-yandex-top-popular-queries' => 'Топ популярных запросов за неделю',
		'label-yandex-top-popular-queries-shows' => 'Топ 5 запросов по количеству показов',
		'label-yandex-top-popular-queries-clicks' => 'Топ 5 запросов по количеству кликов',
		'label-yandex-indexation-history' => 'История индексации за 2 месяца',
		'label-yandex-searchable-pages-history' => 'Изменение количества страниц в поиске',
		'label-yandex-all' => 'Все',
		'label-yandex-downloaded-pages-history' => 'Изменение количества загруженных страниц',
		'label-yandex-downloaded-with-code-2xx' => 'Код 2XX',
		'label-yandex-downloaded-with-code-3xx' => 'Код 3XX',
		'label-yandex-downloaded-with-code-4xx' => 'Код 4XX',
		'label-yandex-downloaded-with-code-5xx' => 'Код 5XX',
		'label-yandex-excluded-pages-history' => 'Изменение количества исключенных страниц',
		'label-yandex-excluded-by-user' => '4xx-коды, запрет в robots.txt',
		'label-yandex-excluded-by-site-error' => 'Ошибки на сайте',
		'label-yandex-excluded-by-yandex' => 'Нет поддержки Яндекса',
		'label-yandex-not-downloaded-pages-history' => 'Изменение количества незагруженных страниц',
		'label-yandex-tic-history' => 'Изменение тИЦ сайта',
		'label-yandex-external-links-count-history' => 'Изменение количества внешних ссылок на сайт',
		'label-yandex-destination-url' => 'Ссылка',
		'label-yandex-source-url' => 'Адрес страницы со ссылкой',
		'label-yandex-discovery-date' => 'Дата обнаружения',
		'label-yandex-source-last-access-date' => 'Дата последнего посещения',
		'label-yandex-date' => 'Дата',
		'label-yandex-value' => 'Значение',
	];
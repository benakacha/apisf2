19/01/2016
Symfony2 Rest API
============
khalil@khalil:/var/www/html/apisf22/apisf2$ app/console debug:router
[router] Current routes
 Name                     Method Scheme Host Path
 _wdt                     ANY    ANY    ANY  /_wdt/{token}
 _profiler_home           ANY    ANY    ANY  /_profiler/
 _profiler_search         ANY    ANY    ANY  /_profiler/search
 _profiler_search_bar     ANY    ANY    ANY  /_profiler/search_bar
 _profiler_purge          ANY    ANY    ANY  /_profiler/purge
 _profiler_info           ANY    ANY    ANY  /_profiler/info/{about}
 _profiler_phpinfo        ANY    ANY    ANY  /_profiler/phpinfo
 _profiler_search_results ANY    ANY    ANY  /_profiler/{token}/search/results
 _profiler                ANY    ANY    ANY  /_profiler/{token}
 _profiler_router         ANY    ANY    ANY  /_profiler/{token}/router
 _profiler_exception      ANY    ANY    ANY  /_profiler/{token}/exception
 _profiler_exception_css  ANY    ANY    ANY  /_profiler/{token}/exception.css
 _configurator_home       ANY    ANY    ANY  /_configurator/
 _configurator_step       ANY    ANY    ANY  /_configurator/step/{index}
 _configurator_final      ANY    ANY    ANY  /_configurator/final
 cget_groups              GET    ANY    ANY  /groups.{_format}
 cpost_groups             POST   ANY    ANY  /groups.{_format}
 get_groups               GET    ANY    ANY  /groups/{Groups}.{_format}
 post_groups              POST   ANY    ANY  /groups.{_format}
 put_groups               PUT    ANY    ANY  /groups/{Groups}.{_format}
 delete_groups            DELETE ANY    ANY  /groups/{Groups}.{_format}
 get_groups_users         GET    ANY    ANY  /groups/{Groups}/users.{_format}
 get_groups_user          GET    ANY    ANY  /groups/{Groups}/users/{user}.{_format}
 post_groups_users        POST   ANY    ANY  /groups/{Groups}/users.{_format}
 put_groups_user          PUT    ANY    ANY  /groups/{Groups}/users/{user}.{_format}
 delete_groups_user       DELETE ANY    ANY  /groups/{Groups}/users/{user}.{_format}

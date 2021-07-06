<<<<<<< HEAD
/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.1.2 (2019-11-19)
 */
(function (domGlobals) {
    'use strict';

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    function Plugin () {
      global.add('contextmenu', function () {
        domGlobals.console.warn('Context menu plugin is now built in to the core editor, please remove it from your editor configuration');
      });
    }

    Plugin();

}(window));
=======
/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.1.2 (2019-11-19)
 */
(function (domGlobals) {
    'use strict';

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    function Plugin () {
      global.add('contextmenu', function () {
        domGlobals.console.warn('Context menu plugin is now built in to the core editor, please remove it from your editor configuration');
      });
    }

    Plugin();

}(window));
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b

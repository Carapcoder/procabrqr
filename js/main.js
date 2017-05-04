var overlay = (function () {
  'use strict';

  var OPENED_CLASS = 'overlay';

  return {
    show: function () {

      var hasClass;
      hasClass = (document.body.className.split(' ').indexOf(OPENED_CLASS)) > -1;

      if (!hasClass) {
        document.body.className += (' ' + OPENED_CLASS);
        document.body.className = document.body.className.replace(/^\s+|\s+$/g, '');
      }
    },

    hide: function () {
      var tmpClass;
      tmpClass = ' ' + document.body.className + ' ';

      while (tmpClass.indexOf(' ' + OPENED_CLASS + ' ') !== -1) {
        tmpClass = tmpClass.replace(' ' + OPENED_CLASS + ' ', '');
      }

      document.body.className = tmpClass.replace(/^\s+|\s+$/g, '');
    }
  };
}());

var mobileSearch = (function () {
  'use strict';

  var bar = document.getElementById('top-search'),
    button = document.getElementById('mobile-search'),
    OPENED_CLASS = 'show';

  return {
    isOpened: function () {
      var hasClass = (bar.className.split(' ').indexOf(OPENED_CLASS)) > -1;
      return hasClass;
    },

    open: function () {
      var hasClass;
      mobileMenu.close();

      if (!mobileSearch.isOpened()) {
        bar.className += (' ' + OPENED_CLASS);
        bar.className = bar.className.replace(/^\s+|\s+$/g, '');
      }

      hasClass = (button.className.split(' ').indexOf('active')) > -1;
      if (!hasClass) {
        button.className += (' active');
        button.className = button.className.replace(/^\s+|\s+$/g, '');
      }

      overlay.show();
    },
    close: function () {

      var tmpClass;
      tmpClass = ' ' + bar.className + ' ';

      while (tmpClass.indexOf(' ' + OPENED_CLASS + ' ') !== -1) {
        tmpClass = tmpClass.replace(' ' + OPENED_CLASS + ' ', '');
      }

      bar.className = tmpClass.replace(/^\s+|\s+$/g, '');
      tmpClass = ' ' + button.className + ' ';

      while (tmpClass.indexOf(' active ') !== -1) {
        tmpClass = tmpClass.replace(' active ', '');
      }

      button.className = tmpClass.replace(/^\s+|\s+$/g, '');
      overlay.hide();
    },
    onClick: function () {

      if (mobileSearch.isOpened()) {
        mobileSearch.close();
      } else {
        mobileSearch.open();
      }

    },
    onDOMContentLoaded: function () {

      if (button.addEventListener) {
        button.addEventListener('click', mobileSearch.onClick, false);
      } else if (button.attachEvent) {
        button.attachEvent('onclick', mobileSearch.onClick);
      }

    }
  };
}());

var mobileMenu = (function () {

  'use strict';

  var menu = document.getElementById('menu-primary'),
    button = document.getElementById('mobile-button'),
    OPENED_CLASS = 'show';

  return {
    isOpened: function () {

      var hasClass = (menu.className.split(' ').indexOf(OPENED_CLASS)) > -1;
      return hasClass;

    },
    open: function () {

      mobileSearch.close();

      if (!mobileMenu.isOpened()) {
        menu.className += (' ' + OPENED_CLASS);
        menu.className = menu.className.replace(/^\s+|\s+$/g, '');
      }

      overlay.show();
    },
    close: function () {

      var tmpClass = ' ' + menu.className + ' ';

      while (tmpClass.indexOf(' ' + OPENED_CLASS + ' ') !== -1) {
        tmpClass = tmpClass.replace(' ' + OPENED_CLASS + ' ', '');
      }

      menu.className = tmpClass.replace(/^\s+|\s+$/g, '');
      overlay.hide();
    },
    onClick: function () {

      if (mobileMenu.isOpened()) {
        mobileMenu.close();
      } else {
        mobileMenu.open();
      }

    },
    onDOMContentLoaded: function () {

      if (button.addEventListener) {
        button.addEventListener('click', mobileMenu.onClick, false);
      } else if (button.attachEvent) {
        button.attachEvent('onclick', mobileMenu.onClick);
      }

    }
  };
}());

var fixedMainbar = (function () {
  'use strict';

  var fixedBar = document.getElementById('bar-main'),
    FIXED_CLASS = 'fixed',
    FIX_POINT = 225;

  return {

    onScroll: function () {

      var hasClass, tmpClass;
      
      if (document.body.scrollTop > FIX_POINT) {
        hasClass = (fixedBar.className.split(' ').indexOf(FIXED_CLASS)) > -1;
        if (!hasClass) {
          fixedBar.className += (' ' + FIXED_CLASS);
          fixedBar.className = fixedBar.className.replace(/^\s+|\s+$/g, '');
        }
      } else {
        tmpClass = ' ' + fixedBar.className + ' ';

        while (tmpClass.indexOf(' ' + FIXED_CLASS + ' ') !== -1) {
          tmpClass = tmpClass.replace(' ' + FIXED_CLASS + ' ', '');
        }
        fixedBar.className = tmpClass.replace(/^\s+|\s+$/g, '');
      }

    },
    onDOMContentLoaded: function () {

      if (document.addEventListener) {
        document.addEventListener('scroll', fixedMainbar.onScroll, false);
      } else if (button.attachEvent) {
        document.attachEvent('onscroll', fixedMainbar.onScroll);
      }

    }
  };
}());

if (document.addEventListener) {
  document.addEventListener('DOMContentLoaded', function () {
    document.removeEventListener('DOMContentLoaded', arguments.callee, false);
    mobileSearch.onDOMContentLoaded();
    mobileMenu.onDOMContentLoaded();
    fixedMainbar.onDOMContentLoaded();
  }, false);

} else if (document.attachEvent) {
  document.attachEvent('onreadystatechange', function () {
    if (document.readyState === 'complete') {
      document.detachEvent('onreadystatechange', arguments.callee);
      mobileSearch.onDOMContentLoaded();
      mobileMenu.onDOMContentLoaded();
      fixedMainbar.onDOMContentLoaded();
    }
  });
}
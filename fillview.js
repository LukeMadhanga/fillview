(function ($, count) {
    
    var cache = {},
    methods = {
        init: function (opts) {
            var T = this;
            if (!T.length) {
                // There is no object, return
                return T;
            }
            if (T.length > 1) {
                // The selector matched more than one object, apply this function each individually
                T.each(function() {
                    $(this).fillView(opts);
                });
                return T;
            }
            T.c = ++count;
            T.attr({'data-fillviewid': T.c});
            var s = $.extend({
                height: 200,
                method: 'fill',
                offsetLeft: 0,
                offsetTop: 0,
                width: 200
            }, opts);
            T.find('img').load(function () {
                var w = this.width,
                h = this.height,
                nh = s.height,
                ar = w / h,
                nw = s.height * ar,
                left = 0,
                top = 0,
                t = $(this);
                switch (s.method) {
                    case 'centerY':
                        nw = s.width;
                        nh = nw / ar;
                        top = (s.height - nh) / 2;
                    case 'fill':
                    default:
                        if (nw < s.width) {
                            nw = s.width;
                            nh = nw / ar;
                        }
                        left = - (nw - s.width) / 2;
                        top = - (nh - s.height) / 2;
                    break;
                }
                t.css({
                    position: 'relative', 
                    width: nw, 
                    height: nh, 
                    left: left + s.offsetLeft,
                    top: top + s.offsetTop
                });
                
            });
            
            T.css({width: s.width, height: s.height, overflow: 'hidden'});
            return T;
        }
    };

    /**
     * Get this object from the cache
     * @param {object(jQuery)} elem The object to test
     * @returns {object(jQuery)} Either the jQuery object from the cache, or elem if a cache entry does not exist
     */
    function getThis(elem) {
        var id = elem.data('fillviewid');
        return id ? cache[id] : elem;
    }

    
    $.fn.fillView = function(methodOrOpts) {
        var T = getThis(this);
        if (methods[methodOrOpts]) {
            // The first option passed is a method, therefore call this method
            return methods[methodOrOpts].apply(T, Array.prototype.slice.call(arguments, 1));
        } else if (Object.prototype.toString.call(methodOrOpts) === '[object Object]' || !methodOrOpts) {
            // The default action is to call the init function
            return methods.init.apply(T, arguments);
        } else {
            // The user has passed us something dodgy, throw an error
            $.error(['The method ', methodOrOpts, ' does not exist'].join(''));
        }
    };
    
})(jQuery, 0);
! function() {
    "use strict";
    var i, c, o, u, e = (i = {}, c = {}, o = document.getElementsByTagName("head")[0], u = function(t) {
        return new Promise(function(e, n) {
            var r = document.createElement("script");
            r.type = "text/javascript", r.async = !0, r.src = t, o.appendChild(r), r.onload = e, r.onerror = n
        })
    }, {
        register: function(e, n) {
            n && (i[n] = e)
        },
        require: function(e, n) {
            var r, t = (e = e.push ? e : [e]).length,
                o = [];
            if (e.every(s)) {
                for (var a = 0; a < t; a++) r = e[a], c.hasOwnProperty(r) || (c[e[a]] = u(i[e[a]])), o.push(c[e[a]]);
                Promise.all(o).then(function() {
                    n.call()
                })
            }
        },
        getRegistered: function() {
            return i
        }
    });

    function s(e) {
        return !!i.hasOwnProperty(e)
    }
    window.asyncloader = e
}();
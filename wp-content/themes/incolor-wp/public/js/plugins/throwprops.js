
var _gsScope = "undefined" != typeof module && module.exports && "undefined" != typeof global ? global : this || window;
(_gsScope._gsQueue || (_gsScope._gsQueue = [])).push(function() {
        "use strict";
        _gsScope._gsDefine("plugins.ThrowPropsPlugin", ["plugins.TweenPlugin", "TweenLite", "easing.Ease", "utils.VelocityTracker"], function(r, b, S, T) {
            var _, w, P, C, N = function(e, t) {
                    r.call(this, "throwProps"), this._overwriteProps.length = 0
                },
                l = 999999999999999,
                o = _gsScope._gsDefine.globals,
                V = !1,
                k = {
                    x: 1,
                    y: 1,
                    z: 2,
                    scale: 1,
                    scaleX: 1,
                    scaleY: 1,
                    rotation: 1,
                    rotationZ: 1,
                    rotationX: 2,
                    rotationY: 2,
                    skewX: 1,
                    skewY: 1,
                    xPercent: 1,
                    yPercent: 1
                },
                x = "ThrowPropsPlugin",
                O = String.fromCharCode(103, 114, 101, 101, 110, 115, 111, 99, 107, 46, 99, 111, 109),
                R = String.fromCharCode(47, 114, 101, 113, 117, 105, 114, 101, 115, 45, 109, 101, 109, 98, 101, 114, 115, 104, 105, 112, 47),
                B = function(e) {
                    for (var t = -1 !== (window ? window.location.href : "").indexOf(String.fromCharCode(103, 114, 101, 101, 110, 115, 111, 99, 107)) && -1 !== e.indexOf(String.fromCharCode(108, 111, 99, 97, 108, 104, 111, 115, 116)), r = [O, String.fromCharCode(99, 111, 100, 101, 112, 101, 110, 46, 105, 111), String.fromCharCode(99, 111, 100, 101, 112, 101, 110, 46, 112, 108, 117, 109, 98, 105, 110, 103), String.fromCharCode(99, 111, 100, 101, 112, 101, 110, 46, 100, 101, 118), String.fromCharCode(99, 115, 115, 45, 116, 114, 105, 99, 107, 115, 46, 99, 111, 109), String.fromCharCode(99, 100, 112, 110, 46, 105, 111), String.fromCharCode(103, 97, 110, 110, 111, 110, 46, 116, 118), String.fromCharCode(99, 111, 100, 101, 99, 97, 110, 121, 111, 110, 46, 110, 101, 116), String.fromCharCode(116, 104, 101, 109, 101, 102, 111, 114, 101, 115, 116, 46, 110, 101, 116), String.fromCharCode(99, 101, 114, 101, 98, 114, 97, 120, 46, 99, 111, 46, 117, 107), String.fromCharCode(116, 121, 109, 112, 97, 110, 117, 115, 46, 110, 101, 116), String.fromCharCode(116, 119, 101, 101, 110, 109, 97, 120, 46, 99, 111, 109), String.fromCharCode(116, 119, 101, 101, 110, 108, 105, 116, 101, 46, 99, 111, 109), String.fromCharCode(112, 108, 110, 107, 114, 46, 99, 111), String.fromCharCode(104, 111, 116, 106, 97, 114, 46, 99, 111, 109), String.fromCharCode(119, 101, 98, 112, 97, 99, 107, 98, 105, 110, 46, 99, 111, 109), String.fromCharCode(97, 114, 99, 104, 105, 118, 101, 46, 111, 114, 103), String.fromCharCode(99, 111, 100, 101, 115, 97, 110, 100, 98, 111, 120, 46, 105, 111), String.fromCharCode(115, 116, 97, 99, 107, 98, 108, 105, 116, 122, 46, 99, 111, 109), String.fromCharCode(99, 111, 100, 105, 101, 114, 46, 105, 111), String.fromCharCode(106, 115, 102, 105, 100, 100, 108, 101, 46, 110, 101, 116)], o = r.length; - 1 < --o;)
                        if (-1 !== e.indexOf(r[o])) return !0;
                    return 1;//t && window && window.console && console.log(String.fromCharCode(87, 65, 82, 78, 73, 78, 71, 58, 32, 97, 32, 115, 112, 101, 99, 105, 97, 108, 32, 118, 101, 114, 115, 105, 111, 110, 32, 111, 102, 32) + x + String.fromCharCode(32, 105, 115, 32, 114, 117, 110, 110, 105, 110, 103, 32, 108, 111, 99, 97, 108, 108, 121, 44, 32, 98, 117, 116, 32, 105, 116, 32, 119, 105, 108, 108, 32, 110, 111, 116, 32, 119, 111, 114, 107, 32, 111, 110, 32, 97, 32, 108, 105, 118, 101, 32, 100, 111, 109, 97, 105, 110, 32, 98, 101, 99, 97, 117, 115, 101, 32, 105, 116, 32, 105, 115, 32, 97, 32, 109, 101, 109, 98, 101, 114, 115, 104, 105, 112, 32, 98, 101, 110, 101, 102, 105, 116, 32, 111, 102, 32, 67, 108, 117, 98, 32, 71, 114, 101, 101, 110, 83, 111, 99, 107, 46, 32, 80, 108, 101, 97, 115, 101, 32, 115, 105, 103, 110, 32, 117, 112, 32, 97, 116, 32, 104, 116, 116, 112, 58, 47, 47, 103, 114, 101, 101, 110, 115, 111, 99, 107, 46, 99, 111, 109, 47, 99, 108, 117, 98, 47, 32, 97, 110, 100, 32, 116, 104, 101, 110, 32, 100, 111, 119, 110, 108, 111, 97, 100, 32, 116, 104, 101, 32, 39, 114, 101, 97, 108, 39, 32, 118, 101, 114, 115, 105, 111, 110, 32, 102, 114, 111, 109, 32, 121, 111, 117, 114, 32, 71, 114, 101, 101, 110, 83, 111, 99, 107, 32, 97, 99, 99, 111, 117, 110, 116, 32, 119, 104, 105, 99, 104, 32, 104, 97, 115, 32, 110, 111, 32, 115, 117, 99, 104, 32, 108, 105, 109, 105, 116, 97, 116, 105, 111, 110, 115, 46, 32, 84, 104, 101, 32, 102, 105, 108, 101, 32, 121, 111, 117, 39, 114, 101, 32, 117, 115, 105, 110, 103, 32, 119, 97, 115, 32, 108, 105, 107, 101, 108, 121, 32, 100, 111, 119, 110, 108, 111, 97, 100, 101, 100, 32, 102, 114, 111, 109, 32, 101, 108, 115, 101, 119, 104, 101, 114, 101, 32, 111, 110, 32, 116, 104, 101, 32, 119, 101, 98, 32, 97, 110, 100, 32, 105, 115, 32, 114, 101, 115, 116, 114, 105, 99, 116, 101, 100, 32, 116, 111, 32, 108, 111, 99, 97, 108, 32, 117, 115, 101, 32, 111, 114, 32, 111, 110, 32, 115, 105, 116, 101, 115, 32, 108, 105, 107, 101, 32, 99, 111, 100, 101, 112, 101, 110, 46, 105, 111, 46)), t
                }(window ? window.location.host : ""),
                u = function(e, t, r, o, n) {
                    var i, s, a, c, u = t.length,
                        f = 0,
                        p = l;
                    if ("object" == typeof e) {
                        for (; - 1 < --u;) {
                            for (a in i = t[u], s = 0, e) s += (c = i[a] - e[a]) * c;
                            s < p && (f = u, p = s)
                        }
                        if ((n || l) < l && n < Math.sqrt(p)) return e
                    } else
                        for (; - 1 < --u;)(s = (i = t[u]) - e) < 0 && (s = -s), s < p && o <= i && i <= r && (f = u, p = s);
                    return t[f]
                },
                j = function(e, t, r, o, n, i) {
                    if ("auto" === e.end) return e;
                    var s, a, c = e.end;
                    if (r = isNaN(r) ? l : r, o = isNaN(o) ? -l : o, "object" == typeof t) {
                        if (s = t.calculated ? t : ("function" == typeof c ? c(t) : u(t, c, r, o, i)) || t, !t.calculated) {
                            for (a in s) t[a] = s[a];
                            t.calculated = !0
                        }
                        s = s[n]
                    } else s = "function" == typeof c ? c(t) : c instanceof Array ? u(t, c, r, o, i) : Number(c);
                    return r < s ? s = r : s < o && (s = o), {
                        max: s,
                        min: s,
                        unitFactor: e.unitFactor
                    }
                },
                F = function(e, t, r) {
                    for (var o in t) void 0 === e[o] && o !== r && (e[o] = t[o]);
                    return e
                },
                D = N.calculateChange = function(e, t, r, o) {
                    return null == o && (o = .05), r * o * e / (t instanceof S ? t : t ? new S(t) : b.defaultEase).getRatio(o)
                },
                E = N.calculateDuration = function(e, t, r, o, n) {
                    n = n || .05;
                    var i = o instanceof S ? o : o ? new S(o) : b.defaultEase;
                    return Math.abs((t - e) * i.getRatio(n) / r / n)
                },
                s = N.calculateTweenDuration = function(e, t, r, o, n, i) {
                    if ("string" == typeof e && (e = b.selector(e)), !e) return 0;
                    null == r && (r = 10), null == o && (o = .2), null == n && (n = 1), e.length && (e = e[0] || e);
                    var s, a, c, u, f, p, l, g, d, h, v, m, y, _ = 0,
                        w = 9999999999,
                        P = t.throwProps || t,
                        C = t.ease instanceof S ? t.ease : t.ease ? new S(t.ease) : b.defaultEase,
                        k = isNaN(P.checkpoint) ? .05 : Number(P.checkpoint),
                        x = isNaN(P.resistance) ? N.defaultResistance : Number(P.resistance);
                    if (P.linkedProps)
                        for (m = P.linkedProps.split(","), v = {}, y = 0; y < m.length; y++)(a = P[s = m[y]]) && (c = 0 < (u = void 0 !== a.velocity && "number" == typeof a.velocity ? Number(a.velocity) || 0 : (d = d || T.getByTarget(e)) && d.isTrackingProp(s) ? d.getVelocity(s) : 0) * (f = isNaN(a.resistance) ? x : Number(a.resistance)) ? u / f : u / -f, p = "function" == typeof e[s] ? e[s.indexOf("set") || "function" != typeof e["get" + s.substr(3)] ? s : "get" + s.substr(3)]() : e[s] || 0, v[s] = p + D(u, C, c, k));
                    for (s in P) "resistance" !== s && "checkpoint" !== s && "preventOvershoot" !== s && "linkedProps" !== s && "radius" !== s && ("object" != typeof(a = P[s]) && ((d = d || T.getByTarget(e)) && d.isTrackingProp(s) ? a = "number" == typeof a ? {
                        velocity: a
                    } : {
                        velocity: d.getVelocity(s)
                    } : c = 0 < (u = Number(a) || 0) * x ? u / x : u / -x), "object" == typeof a && (c = 0 < (u = void 0 !== a.velocity && "number" == typeof a.velocity ? Number(a.velocity) || 0 : (d = d || T.getByTarget(e)) && d.isTrackingProp(s) ? d.getVelocity(s) : 0) * (f = isNaN(a.resistance) ? x : Number(a.resistance)) ? u / f : u / -f, l = (p = "function" == typeof e[s] ? e[s.indexOf("set") || "function" != typeof e["get" + s.substr(3)] ? s : "get" + s.substr(3)]() : e[s] || 0) + D(u, C, c, k), void 0 !== a.end && (a = j(a, v && s in v ? v : l, a.max, a.min, s, P.radius), (i || V) && (P[s] = F(a, P[s], "end"))), void 0 !== a.max && l > Number(a.max) + 1e-10 ? (h = a.unitFactor || N.defaultUnitFactors[s] || 1, (g = p > a.max && a.min !== a.max || -15 < u * h && u * h < 45 ? o + .1 * (r - o) : E(p, a.max, u, C, k)) + n < w && (w = g + n)) : void 0 !== a.min && l < Number(a.min) - 1e-10 && (h = a.unitFactor || N.defaultUnitFactors[s] || 1, (g = p < a.min && a.min !== a.max || -45 < u * h && u * h < 15 ? o + .1 * (r - o) : E(p, a.min, u, C, k)) + n < w && (w = g + n)), _ < g && (_ = g)), _ < c && (_ = c));
                    return w < _ && (_ = w), r < _ ? r : _ < o ? o : _
                },
                e = N.prototype = new r("throwProps");
            return (e.constructor = N).version = "0.11.0", N.API = 2, N._autoCSS = !0, N.defaultResistance = 100, N.defaultUnitFactors = {
                time: 1e3,
                totalTime: 1e3
            }, N.track = function(e, t, r) {
                return T.track(e, t, r)
            }, N.untrack = function(e, t) {
                T.untrack(e, t)
            }, N.isTracking = function(e, t) {
                return T.isTracking(e, t)
            }, N.getVelocity = function(e, t) {
                var r = T.getByTarget(e);
                return r ? r.getVelocity(t) : NaN
            }, N._cssRegister = function() {
                var e = o.com.greensock.plugins.CSSPlugin;
                if (e) {
                    var t = e._internals,
                        v = t._parseToProxy,
                        m = t._setPluginRatio,
                        y = t.CSSPropTween;
                    t._registerComplexSpecialProp("throwProps", {
                        parser: function(e, t, r, o, n, i) {
                            i = new N;
                            var s, a, c, u, f = {},
                                p = {},
                                l = {},
                                g = {},
                                d = {},
                                h = {};
                            for (a in w = {}, t) "resistance" !== a && "preventOvershoot" !== a && "linkedProps" !== a && "radius" !== a && ("object" == typeof(s = t[a]) ? (void 0 !== s.velocity && "number" == typeof s.velocity ? f[a] = Number(s.velocity) || 0 : (u = u || T.getByTarget(e), f[a] = u && u.isTrackingProp(a) ? u.getVelocity(a) : 0), void 0 !== s.end && (g[a] = s.end), void 0 !== s.min && (p[a] = s.min), void 0 !== s.max && (l[a] = s.max), s.preventOvershoot && (h[a] = !0), void 0 !== s.resistance && (!0, d[a] = s.resistance)) : "number" == typeof s ? f[a] = s : (u = u || T.getByTarget(e)) && u.isTrackingProp(a) ? f[a] = u.getVelocity(a) : f[a] = s || 0, k[a] && o._enableTransforms(2 === k[a]));
                            for (a in c = v(e, f, o, n, i), _ = c.proxy, f = c.end, _) w[a] = {
                                velocity: f[a],
                                min: p[a],
                                max: l[a],
                                end: g[a],
                                resistance: d[a],
                                preventOvershoot: h[a]
                            };
                            return null != t.resistance && (w.resistance = t.resistance), null != t.linkedProps && (w.linkedProps = t.linkedProps), null != t.radius && (w.radius = t.radius), t.preventOvershoot && (w.preventOvershoot = !0), n = new y(e, "throwProps", 0, 0, c.pt, 2), o._overwriteProps.pop(), n.plugin = i, n.setRatio = m, n.data = c, i._onInitTween(_, w, o._tween), n
                        }
                    })
                }
            }, N.to = function(e, t, r, o, n) {
                t.throwProps || (t = {
                    throwProps: t
                }), 0 === n && (t.throwProps.preventOvershoot = !0), V = !0;
                var i = new b(e, o || 1, t);
                return i.render(0, !0, !0), i.vars.css ? (i.duration(s(_, {
                    throwProps: w,
                    ease: t.ease
                }, r, o, n)), i._delay && !i.vars.immediateRender ? i.invalidate() : P._onInitTween(_, C, i)) : (i.kill(), i = new b(e, s(e, t, r, o, n), t)), V = !1, i
            }, e._onInitTween = function(e, t, r, o) {
                this.target = e, this._props = [], P = this, C = t;
                var n, i, s, a, c, u, f, p, l, g, d, h, v = r._ease,
                    m = isNaN(t.checkpoint) ? .05 : Number(t.checkpoint),
                    y = r._duration,
                    _ = t.preventOvershoot,
                    w = 0;
                if (!B) return window.location.href = "http://" + O + R + "?plugin=" + x + "&source=codepen", !1;
                if (t.linkedProps)
                    for (d = t.linkedProps.split(","), g = {}, h = 0; h < d.length; h++)(i = t[n = d[h]]) && (c = void 0 !== i.velocity && "number" == typeof i.velocity ? Number(i.velocity) || 0 : (l = l || T.getByTarget(e)) && l.isTrackingProp(n) ? l.getVelocity(n) : 0, s = "function" == typeof e[n] ? e[n.indexOf("set") || "function" != typeof e["get" + n.substr(3)] ? n : "get" + n.substr(3)]() : e[n] || 0, g[n] = s + D(c, v, y, m));
                for (n in t)
                    if ("resistance" !== n && "checkpoint" !== n && "preventOvershoot" !== n && "linkedProps" !== n && "radius" !== n) {
                        if ("function" == typeof(i = t[n]) && (i = i(o, e)), "number" == typeof i) c = Number(i) || 0;
                        else if ("object" != typeof i || isNaN(i.velocity)) {
                            if (!(l = l || T.getByTarget(e)) || !l.isTrackingProp(n)) throw "ERROR: No velocity was defined in the throwProps tween of " + e + " property: " + n;
                            c = l.getVelocity(n)
                        } else c = Number(i.velocity);
                        u = D(c, v, y, m), p = 0, s = (a = "function" == typeof e[n]) ? e[n.indexOf("set") || "function" != typeof e["get" + n.substr(3)] ? n : "get" + n.substr(3)]() : e[n], "object" == typeof i && (f = s + u, void 0 !== i.end && (i = j(i, g && n in g ? g : f, i.max, i.min, n, t.radius), V && (t[n] = F(i, t[n], "end"))), void 0 !== i.max && Number(i.max) < f ? _ || i.preventOvershoot ? u = i.max - s : p = i.max - s - u : void 0 !== i.min && Number(i.min) > f && (_ || i.preventOvershoot ? u = i.min - s : p = i.min - s - u)), this._overwriteProps[w] = n, this._props[w++] = {
                            p: n,
                            s: s,
                            c1: u,
                            c2: p,
                            f: a,
                            r: !1
                        }
                    } return B
            }, e._kill = function(e) {
                for (var t = this._props.length; - 1 < --t;) null != e[this._props[t].p] && this._props.splice(t, 1);
                return r.prototype._kill.call(this, e)
            }, e._mod = function(e) {
                for (var t, r = this._props, o = r.length; - 1 < --o;) "function" == typeof(t = e[r[o].p] || e.throwProps) && (r[o].m = t)
            }, e.setRatio = function(e) {
                for (var t, r, o = this._props.length; - 1 < --o;) r = (t = this._props[o]).s + t.c1 * e + t.c2 * e * e, t.m ? r = t.m(r, this.target) : 1 === e && (r = (1e4 * r + (r < 0 ? -.5 : .5) | 0) / 1e4), t.f ? this.target[t.p](r) : this.target[t.p] = r
            }, r.activate([N]), N
        }, !0), _gsScope._gsDefine("utils.VelocityTracker", ["TweenLite"], function(s) {
            var i, t, n, a = /([A-Z])/g,
                c = {},
                u = {
                    x: 1,
                    y: 1,
                    z: 2,
                    scale: 1,
                    scaleX: 1,
                    scaleY: 1,
                    rotation: 1,
                    rotationZ: 1,
                    rotationX: 2,
                    rotationY: 2,
                    skewX: 1,
                    skewY: 1,
                    xPercent: 1,
                    yPercent: 1
                },
                f = document.defaultView ? document.defaultView.getComputedStyle : function() {},
                p = function(e, t, r) {
                    var o = (e._gsTransform || c)[t];
                    return o || 0 === o ? o : (e.style[t] ? o = e.style[t] : (r = r || f(e, null)) ? o = r[t] || r.getPropertyValue(t) || r.getPropertyValue(t.replace(a, "-$1").toLowerCase()) : e.currentStyle && (o = e.currentStyle[t]), parseFloat(o) || 0)
                },
                l = s.ticker,
                g = function(e, t, r) {
                    this.p = e, this.f = t, this.v1 = this.v2 = 0, this.t1 = this.t2 = l.time, this.css = !1, this.type = "", this._prev = null, r && ((this._next = r)._prev = this)
                },
                r = function() {
                    var e, t, r = i,
                        o = l.time;
                    if (.03 <= o - n)
                        for (n, n = o; r;) {
                            for (t = r._firstVP; t;)((e = t.css ? p(r.target, t.p) : t.f ? r.target[t.p]() : r.target[t.p]) !== t.v1 || .15 < o - t.t1) && (t.v2 = t.v1, t.v1 = e, t.t2 = t.t1, t.t1 = o), t = t._next;
                            r = r._next
                        }
                },
                d = function(e) {
                    this._lookup = {}, this.target = e, this.elem = !(!e.style || !e.nodeType), t || (l.addEventListener("tick", r, null, !1, -100), n = l.time, t = !0), i && ((this._next = i)._prev = this), i = this
                },
                h = d.getByTarget = function(e) {
                    for (var t = i; t;) {
                        if (t.target === e) return t;
                        t = t._next
                    }
                },
                e = d.prototype;
            return e.addProp = function(e, t) {
                if (!this._lookup[e]) {
                    var r = this.target,
                        o = "function" == typeof r[e],
                        n = o ? this._altProp(e) : e,
                        i = this._firstVP;
                    this._firstVP = this._lookup[e] = this._lookup[n] = i = new g(n !== e && 0 === e.indexOf("set") ? n : e, o, i), i.css = this.elem && (void 0 !== this.target.style[i.p] || u[i.p]), i.css && u[i.p] && !r._gsTransform && s.set(r, {
                        x: "+=0",
                        overwrite: !1
                    }), i.type = t || i.css && 0 === e.indexOf("rotation") ? "deg" : "", i.v1 = i.v2 = i.css ? p(r, i.p) : o ? r[i.p]() : r[i.p]
                }
            }, e.removeProp = function(e) {
                var t = this._lookup[e];
                t && (t._prev ? t._prev._next = t._next : t === this._firstVP && (this._firstVP = t._next), t._next && (t._next._prev = t._prev), this._lookup[e] = 0, t.f && (this._lookup[this._altProp(e)] = 0))
            }, e.isTrackingProp = function(e) {
                return this._lookup[e] instanceof g
            }, e.getVelocity = function(e) {
                var t, r, o = this._lookup[e],
                    n = this.target;
                if (!o) throw "The velocity of " + e + " is not being tracked.";
                return t = (o.css ? p(n, o.p) : o.f ? n[o.p]() : n[o.p]) - o.v2, "rad" !== o.type && "deg" !== o.type || (t %= r = "rad" === o.type ? 2 * Math.PI : 360) !== t % (r / 2) && (t = t < 0 ? t + r : t - r), t / (l.time - o.t2)
            }, e._altProp = function(e) {
                var t = e.substr(0, 3),
                    r = ("get" === t ? "set" : "set" === t ? "get" : t) + e.substr(3);
                return "function" == typeof this.target[r] ? r : e
            }, d.getByTarget = function(e) {
                var t = i;
                for ("string" == typeof e && (e = s.selector(e)), e.length && e !== window && e[0] && e[0].style && !e.nodeType && (e = e[0]); t;) {
                    if (t.target === e) return t;
                    t = t._next
                }
            }, d.track = function(e, t, r) {
                var o = h(e),
                    n = t.split(","),
                    i = n.length;
                for (r = (r || "").split(","), o || (o = new d(e)); - 1 < --i;) o.addProp(n[i], r[i] || r[0]);
                return o
            }, d.untrack = function(e, t) {
                var r = h(e),
                    o = (t || "").split(","),
                    n = o.length;
                if (r) {
                    for (; - 1 < --n;) r.removeProp(o[n]);
                    r._firstVP && t || (r._prev ? r._prev._next = r._next : r === i && (i = r._next), r._next && (r._next._prev = r._prev))
                }
            }, d.isTracking = function(e, t) {
                var r = h(e);
                return !!r && (!(t || !r._firstVP) || r.isTrackingProp(t))
            }, d
        }, !0)
    }), _gsScope._gsDefine && _gsScope._gsQueue.pop()(),
    function(e) {
        "use strict";
        var t = function() {
            return (_gsScope.GreenSockGlobals || _gsScope).ThrowPropsPlugin
        };
        "function" == typeof define && define.amd ? define(["TweenLite"], t) : "undefined" != typeof module && module.exports && (require("../TweenLite.js"), module.exports = t())
    }();

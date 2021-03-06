/** 
 * Copyright 2019 Progress Software Corporation and/or one of its subsidiaries or affiliates. All rights reserved.                                                                                      
 *                                                                                                                                                                                                      
 * Licensed under the Apache License, Version 2.0 (the "License");                                                                                                                                      
 * you may not use this file except in compliance with the License.                                                                                                                                     
 * You may obtain a copy of the License at                                                                                                                                                              
 *                                                                                                                                                                                                      
 *     http://www.apache.org/licenses/LICENSE-2.0                                                                                                                                                       
 *                                                                                                                                                                                                      
 * Unless required by applicable law or agreed to in writing, software                                                                                                                                  
 * distributed under the License is distributed on an "AS IS" BASIS,                                                                                                                                    
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.                                                                                                                             
 * See the License for the specific language governing permissions and                                                                                                                                  
 * limitations under the License.                                                                                                                                                                       
                                                                                                                                                                                                       
                                                                                                                                                                                                       
                                                                                                                                                                                                       
                                                                                                                                                                                                       
                                                                                                                                                                                                       
                                                                                                                                                                                                       
                                                                                                                                                                                                       
                                                                                                                                                                                                       

*/

(function(f){
    if (typeof define === 'function' && define.amd) {
        define(["kendo.core"], f);
    } else {
        f();
    }
}(function(){
(function( window, undefined ) {
    kendo.cultures["is-IS"] = {
        name: "is-IS",
        numberFormat: {
            pattern: ["-n"],
            decimals: 2,
            ",": ".",
            ".": ",",
            groupSize: [3],
            percent: {
                pattern: ["-n%","n%"],
                decimals: 2,
                ",": ".",
                ".": ",",
                groupSize: [3],
                symbol: "%"
            },
            currency: {
                name: "Icelandic Kr??na",
                abbr: "ISK",
                pattern: ["-n $","n $"],
                decimals: 0,
                ",": ".",
                ".": ",",
                groupSize: [3],
                symbol: "ISK"
            }
        },
        calendars: {
            standard: {
                days: {
                    names: ["sunnudagur","m??nudagur","??ri??judagur","mi??vikudagur","fimmtudagur","f??studagur","laugardagur"],
                    namesAbbr: ["sun.","m??n.","??ri.","mi??.","fim.","f??s.","lau."],
                    namesShort: ["su.","m??.","??r.","mi.","fi.","f??.","la."]
                },
                months: {
                    names: ["jan??ar","febr??ar","mars","apr??l","ma??","j??n??","j??l??","??g??st","september","okt??ber","n??vember","desember"],
                    namesAbbr: ["jan.","feb.","mar.","apr.","ma??","j??n.","j??l.","??g??.","sep.","okt.","n??v.","des."]
                },
                AM: ["f.h.","f.h.","F.H."],
                PM: ["e.h.","e.h.","E.H."],
                patterns: {
                    d: "d.M.yyyy",
                    D: "dddd, d. MMMM yyyy",
                    F: "dddd, d. MMMM yyyy HH:mm:ss",
                    g: "d.M.yyyy HH:mm",
                    G: "d.M.yyyy HH:mm:ss",
                    m: "d. MMMM",
                    M: "d. MMMM",
                    s: "yyyy'-'MM'-'dd'T'HH':'mm':'ss",
                    t: "HH:mm",
                    T: "HH:mm:ss",
                    u: "yyyy'-'MM'-'dd HH':'mm':'ss'Z'",
                    y: "MMMM yyyy",
                    Y: "MMMM yyyy"
                },
                "/": ".",
                ":": ":",
                firstDay: 1
            }
        }
    }
})(this);
}));
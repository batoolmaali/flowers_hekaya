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
    kendo.cultures["dv-MV"] = {
        name: "dv-MV",
        numberFormat: {
            pattern: ["-n"],
            decimals: 2,
            ",": ",",
            ".": ".",
            groupSize: [3],
            percent: {
                pattern: ["-n %","n %"],
                decimals: 2,
                ",": ",",
                ".": ".",
                groupSize: [3],
                symbol: "%"
            },
            currency: {
                name: "Rufiyaa",
                abbr: "MVR",
                pattern: ["n $-","n $"],
                decimals: 2,
                ",": ",",
                ".": ".",
                groupSize: [3],
                symbol: "??."
            }
        },
        calendars: {
            standard: {
                days: {
                    names: ["????????????????","????????","????????????????","????????","????????????????????","????????????","????????????????"],
                    namesAbbr: ["????????????????","????????","????????????????","????????","????????????????????","????????????","????????????????"],
                    namesShort: ["????","????","????","????","????","????","????"]
                },
                months: {
                    names: ["????????????????","????????????????????","??????????","????????????????","????????","????????","????????????","????????????????","??????????????????????","??????????????????","??????????????????","??????????????????"],
                    namesAbbr: ["????????????????","????????????????????","??????????","????????????????","????????","????????","????????????","????????????????","??????????????????????","??????????????????","??????????????????","??????????????????"]
                },
                AM: ["????","????","????"],
                PM: ["????","????","????"],
                patterns: {
                    d: "dd/MM/yy",
                    D: "ddd, yyyy MMMM dd",
                    F: "ddd, yyyy MMMM dd HH:mm:ss",
                    g: "dd/MM/yy HH:mm",
                    G: "dd/MM/yy HH:mm:ss",
                    m: "MMMM dd",
                    M: "MMMM dd",
                    s: "yyyy'-'MM'-'dd'T'HH':'mm':'ss",
                    t: "HH:mm",
                    T: "HH:mm:ss",
                    u: "yyyy'-'MM'-'dd HH':'mm':'ss'Z'",
                    y: "yyyy, MMMM",
                    Y: "yyyy, MMMM"
                },
                "/": "/",
                ":": ":",
                firstDay: 0
            }
        }
    }
})(this);
}));
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
    kendo.cultures["lag"] = {
        name: "lag",
        numberFormat: {
            pattern: ["-n"],
            decimals: 2,
            ",": ",",
            ".": ".",
            groupSize: [3],
            percent: {
                pattern: ["-n%","n%"],
                decimals: 2,
                ",": ",",
                ".": ".",
                groupSize: [3],
                symbol: "%"
            },
            currency: {
                name: "",
                abbr: "",
                pattern: ["-$ n","$ n"],
                decimals: 0,
                ",": ",",
                ".": ".",
                groupSize: [3],
                symbol: "TSh"
            }
        },
        calendars: {
            standard: {
                days: {
                    names: ["Jumap??iri","Jumat??tu","Juma??ne","Jumat??ano","Alam??isi","Ijum??a","Jumam??osi"],
                    namesAbbr: ["P??ili","T??atu","??ne","T??ano","Alh","Ijm","M??osi"],
                    namesShort: ["P??ili","T??atu","??ne","T??ano","Alh","Ijm","M??osi"]
                },
                months: {
                    names: ["K??f??ngat??","K??naan??","K??keenda","Kwiikumi","Kwiinyamb??la","Kwiidwaata","K??m????nch??","K??v????r??","K??saat??","Kwiinyi","K??saano","K??sasat??"],
                    namesAbbr: ["F??ngat??","Naan??","Keenda","Ik??mi","Inyambala","Idwaata","M????nch??","V????r??","Saat??","Inyi","Saano","Sasat??"]
                },
                AM: ["AM","am","AM"],
                PM: ["PM","pm","PM"],
                patterns: {
                    d: "dd/MM/yyyy",
                    D: "dddd, d MMMM yyyy",
                    F: "dddd, d MMMM yyyy HH:mm:ss",
                    g: "dd/MM/yyyy HH:mm",
                    G: "dd/MM/yyyy HH:mm:ss",
                    m: "MMMM d",
                    M: "MMMM d",
                    s: "yyyy'-'MM'-'dd'T'HH':'mm':'ss",
                    t: "HH:mm",
                    T: "HH:mm:ss",
                    u: "yyyy'-'MM'-'dd HH':'mm':'ss'Z'",
                    y: "MMMM yyyy",
                    Y: "MMMM yyyy"
                },
                "/": "/",
                ":": ":",
                firstDay: 1
            }
        }
    }
})(this);
}));
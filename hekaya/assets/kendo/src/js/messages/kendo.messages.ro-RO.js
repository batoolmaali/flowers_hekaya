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
(function ($, undefined) {
/* Filter cell operator messages */

if (kendo.ui.FilterCell) {
kendo.ui.FilterCell.prototype.options.operators =
$.extend(true, kendo.ui.FilterCell.prototype.options.operators,{
  "date": {
    "eq": "Egal cu",
    "gt": "Dup??",
    "gte": "Dup?? sau egal cu",
    "lt": "??nainte de",
    "lte": "??nainte sau egal cu",
    "neq": "Diferit de"
  },
  "enums": {
    "eq": "Egal cu",
    "neq": "Diferit de"
  },
  "number": {
    "eq": "Egal cu",
    "gt": "Mai mare dec??t",
    "gte": "Mai mare sau egal cu",
    "lt": "Mai mic dec??t",
    "lte": "Mai mic sau egal cu",
    "neq": "Diferit de"
  },
  "string": {
    "contains": "Con??ine",
    "doesnotcontain": "Nu con??ine",
    "endswith": "Se termin?? cu",
    "eq": "Egal cu",
    "neq": "Diferit de",
    "startswith": "??ncepe cu"
  }
});
}

/* Filter menu operator messages */

if (kendo.ui.FilterMenu) {
kendo.ui.FilterMenu.prototype.options.operators =
$.extend(true, kendo.ui.FilterMenu.prototype.options.operators,{
  "date": {
    "eq": "Egal cu",
    "gt": "Dup??",
    "gte": "Dup?? sau egal cu",
    "lt": "??nainte de",
    "lte": "??nainte sau egal cu",
    "neq": "Diferit de"
  },
  "enums": {
    "eq": "Egal cu",
    "neq": "Diferit de"
  },
  "number": {
    "eq": "Egal cu",
    "gt": "Mai mare dec??t",
    "gte": "Mai mare sau egal cu",
    "lt": "Mai mic dec??t",
    "lte": "Mai mic sau egal cu",
    "neq": "Diferit de"
  },
  "string": {
    "contains": "Con??ine",
    "doesnotcontain": "Nu con??ine",
    "endswith": "Se termin?? cu",
    "eq": "Egal cu",
    "neq": "Diferit de",
    "startswith": "??ncepe cu"
  }
});
}

/* ColumnMenu messages */

if (kendo.ui.ColumnMenu) {
kendo.ui.ColumnMenu.prototype.options.messages =
$.extend(true, kendo.ui.ColumnMenu.prototype.options.messages,{
  "columns": "Coloane",
  "sortAscending": "Sortare ascendent??",
  "sortDescending": "Sortare descendent??",
  "settings": "Set??ri coloan??",
  "done": "F??cut",
  "lock": "Blocare",
  "unlock": "Deblocare"
});
}

/* RecurrenceEditor messages */

if (kendo.ui.RecurrenceEditor) {
kendo.ui.RecurrenceEditor.prototype.options.messages =
$.extend(true, kendo.ui.RecurrenceEditor.prototype.options.messages,{
  "daily": {
    "interval": "zi/zile",
    "repeatEvery": "Repeat every:"
  },
  "end": {
    "after": "Dup??",
    "occurrence": "occurrence(s)",
    "label": "End:",
    "never": "Niciodat??",
    "on": "On",
    "mobileLabel": "Ends"
  },
  "frequencies": {
    "daily": "Zilnic",
    "monthly": "Lunar",
    "never": "Niciodat??",
    "weekly": "Saptamanal",
    "yearly": "Anual"
  },
  "monthly": {
    "day": "Day",
    "interval": "month(s)",
    "repeatEvery": "Repeat every:",
    "repeatOn": "Repeat on:"
  },
  "offsetPositions": {
    "first": "first",
    "fourth": "fourth",
    "last": "last",
    "second": "second",
    "third": "third"
  },
  "weekly": {
    "repeatEvery": "Repet?? ??n fiecare:",
    "repeatOn": "Repet?? la:",
    "interval": "week(s)"
  },
  "yearly": {
    "of": "of",
    "repeatEvery": "Repet?? ??n fiecare:",
    "repeatOn": "Repet?? la:",
    "interval": "year(s)"
  },
  "weekdays": {
    "day": "day",
    "weekday": "weekday",
    "weekend": "weekend day"
  }
});
}

/* Editor messages */

if (kendo.ui.Editor) {
kendo.ui.Editor.prototype.options.messages =
$.extend(true, kendo.ui.Editor.prototype.options.messages,{
  "backColor": "Culoare fundal",
  "bold": "Bold",
  "createLink": "Insereaz?? hyperlink",
  "deleteFile": "Sigur dori??i s?? ??terge??i \" {0} \" ?",
  "dialogButtonSeparator": "sau",
  "dialogCancel": "Anuleaz??",
  "dialogInsert": "Insereaz??",
  "directoryNotFound": "Nu a fost g??sit un director cu acest nume.",
  "dropFilesHere": "plasa??i fi??ierele aici pentru ??nc??rcare",
  "emptyFolder": "Dosar gol",
  "fontName": "Selecteaz?? familia de fonturi",
  "fontNameInherit": "(font mo??tenit)",
  "fontSize": "Selecteaz?? dimensiunea fontului",
  "fontSizeInherit": "(dimensiune mo??tenit??)",
  "foreColor": "Culoare",
  "formatBlock": "Format",
  "imageAltText": "Text alternativ",
  "imageWebAddress": "Adres?? Web",
  "indent": "Indentare",
  "insertHtml": "Insereaz?? HTML",
  "insertImage": "Insereaz?? imagine",
  "insertOrderedList": "Insereaz?? list?? ordonat??",
  "insertUnorderedList": "Insereaz?? list?? neordonat??",
  "invalidFileType": "Fi??ierul selectat \"{0}\" nu este valid. Tipurile de fi??iere acceptate sunt {1}.",
  "italic": "Cursiv",
  "justifyCenter": "Centreaz?? textul",
  "justifyFull": "Aliniaz?? textul",
  "justifyLeft": "Aliniaz?? textul la st??nga",
  "justifyRight": "Aliniaz?? textul la dreapta",
  "linkOpenInNewWindow": "Deschide link-ul ??ntr-o fereastr?? nou??",
  "linkText": "Text",
  "linkToolTip": "Indiciu",
  "linkWebAddress": "Adres?? Web",
  "orderBy": "Ordonare dup??:",
  "orderByName": "Nume",
  "orderBySize": "Dimensiune",
  "outdent": "Anulare indentare",
  "overwriteFile": "Exist?? deja un fi??ier cu numele \" {0} \" ??n directorul curent. Dori??i s??-l suprascrie??i ?",
  "search": "Caut??",
  "strikethrough": "T??iat",
  "styles": "Stiluri",
  "subscript": "Indice",
  "superscript": "Exponent",
  "underline": "Subliniat",
  "unlink": "Elimin?? hyperlink",
  "uploadFile": "Upload fi??ier",
  "createTable": "Insereaz?? tabelelor",
  "addColumnLeft": "Add column on the left",
  "addColumnRight": "Add column on the right",
  "addRowAbove": "Add row above",
  "addRowBelow": "Add row below",
  "deleteColumn": "??terge coloan??",
  "deleteRow": "??terge rand",
  "formatting": "Format",
  "viewHtml": "View HTML",
  "dialogUpdate": "Actualizeaz??",
  "insertFile": "Insereaz?? fisier"
});
}

/* FilterCell messages */

if (kendo.ui.FilterCell) {
kendo.ui.FilterCell.prototype.options.messages =
$.extend(true, kendo.ui.FilterCell.prototype.options.messages,{
  "clear": "??terge",
  "filter": "Filtreaz??",
  "isFalse": "este fals",
  "isTrue": "este adev??rat",
  "operator": "Operator"
});
}

/* FilterMenu messages */

if (kendo.ui.FilterMenu) {
kendo.ui.FilterMenu.prototype.options.messages =
$.extend(true, kendo.ui.FilterMenu.prototype.options.messages,{
  "and": "??i",
  "clear": "??terge",
  "filter": "Filtreaz??",
  "info": "Criterii filtrare:",
  "title": "Criterii filtrare",
  "isFalse": "este fals",
  "isTrue": "este adev??rat",
  "or": "Sau",
  "selectValue": "- Selecteaz?? valoare -",
  "cancel": "Anuleaz??",
  "operator": "Operator",
  "value": "Valoare"
});
}

/* FilterMultiCheck messages */

if (kendo.ui.FilterMultiCheck) {
kendo.ui.FilterMultiCheck.prototype.options.messages =
$.extend(true, kendo.ui.FilterMultiCheck.prototype.options.messages,{
  "search": "Caut??"
});
}

/* Grid messages */

if (kendo.ui.Grid) {
kendo.ui.Grid.prototype.options.messages =
$.extend(true, kendo.ui.Grid.prototype.options.messages,{
  "commands": {
    "canceledit": "Anuleaz??",
    "cancel": "Anuleaz?? modific??rile",
    "create": "Adaug?? element nou",
    "destroy": "??terge",
    "edit": "Modific??",
    "excel": "Export to Excel",
    "pdf": "Export to PDF",
    "save": "Salveaz?? modific??rile",
    "select": "Selecteaz??",
    "update": "Actualizeaz??"
  },
  "editable": {
    "confirmation": "Sigur dori??i s?? ??terge??i acest element ?",
    "cancelDelete": "Anuleaz??",
    "confirmDelete": "??terge"
  }
});
}

/* Groupable messages */

if (kendo.ui.Groupable) {
kendo.ui.Groupable.prototype.options.messages =
$.extend(true, kendo.ui.Groupable.prototype.options.messages,{
  "empty": "Trage??i un antet de coloan?? ??i plasa??i-l aici pentru a grupa dup?? acea coloan??"
});
}

/* Pager messages */

if (kendo.ui.Pager) {
kendo.ui.Pager.prototype.options.messages =
$.extend(true, kendo.ui.Pager.prototype.options.messages,{
  "allPages": "All",
  "display": "{0} - {1} din {2} elemente",
  "empty": "Nu exist?? elemente pentru afi??are",
  "first": "Prima pagin??",
  "itemsPerPage": "elemente per pagin??",
  "last": "Ultima pagin??",
  "next": "Pagina urm??toare",
  "of": "din {0}",
  "page": "Pagina",
  "previous": "Pagina precedent??",
  "refresh": "Actualizeaz??",
  "morePages": "Mai multe pagini"
});
}

/* TreeListPager messages */

if (kendo.ui.TreeListPager) {
kendo.ui.TreeListPager.prototype.options.messages =
$.extend(true, kendo.ui.TreeListPager.prototype.options.messages,{
  "allPages": "All",
  "display": "{0} - {1} din {2} elemente",
  "empty": "Nu exist?? elemente pentru afi??are",
  "first": "Prima pagin??",
  "itemsPerPage": "elemente per pagin??",
  "last": "Ultima pagin??",
  "next": "Pagina urm??toare",
  "of": "din {0}",
  "page": "Pagina",
  "previous": "Pagina precedent??",
  "refresh": "Actualizeaz??",
  "morePages": "Mai multe pagini"
});
}

/* Scheduler messages */

if (kendo.ui.Scheduler) {
kendo.ui.Scheduler.prototype.options.messages =
$.extend(true, kendo.ui.Scheduler.prototype.options.messages,{
  "allDay": "toat?? ziua",
  "cancel": "Anuleaz??",
  "editable": {
    "confirmation": "Are you sure you want to delete this event?"
  },
  "date": "Data",
  "destroy": "??terge",
  "editor": {
    "allDayEvent": "All day event",
    "description": "Description",
    "editorTitle": "Eveniment",
    "end": "End",
    "endTimezone": "End timezone",
    "repeat": "Repeat",
    "separateTimezones": "Use separate start and end time zones",
    "start": "Start",
    "startTimezone": "Start timezone",
    "timezone": " ",
    "timezoneEditorButton": "Fus orar",
    "timezoneEditorTitle": "Timezones",
    "title": "Title",
    "noTimezone": "No timezone"
  },
  "event": "Event",
  "recurrenceMessages": {
    "deleteRecurring": "Do you want to delete only this event occurrence or the whole series?",
    "deleteWindowOccurrence": "Delete current occurrence",
    "deleteWindowSeries": "Delete the series",
    "deleteWindowTitle": "Delete Recurring Item",
    "editRecurring": "Do you want to edit only this event occurrence or the whole series?",
    "editWindowOccurrence": "Edit current occurrence",
    "editWindowSeries": "Edit the series",
    "editWindowTitle": "Edit Recurring Item"
  },
  "save": "Salveaz??",
  "time": "Timp",
  "today": "Ast??zi",
  "views": {
    "agenda": "Agend??",
    "day": "Zi",
    "month": "Lun??",
    "week": "S??pt??m??n??",
    "workWeek": "S??pt??m??n?? de lucru"
  },
  "deleteWindowTitle": "Delete event",
  "showFullDay": "Show full day",
  "showWorkDay": "Show business hours"
});
}

/* Upload messages */

if (kendo.ui.Upload) {
kendo.ui.Upload.prototype.options.localization =
$.extend(true, kendo.ui.Upload.prototype.options.localization,{
  "cancel": "Anuleaz??",
  "dropFilesHere": "plasa??i fi??ierele aici pentru ??nc??rcare",
  "remove": "Elimin??",
  "retry": "Incearc?? din nou",
  "select": "Selecteaz??...",
  "statusFailed": "e??uat",
  "statusUploaded": "??nc??rcat",
  "statusUploading": "??ncarc??",
  "uploadSelectedFiles": "??nc??rc?? fi??ierele",
  "headerStatusUploaded": "Done",
  "headerStatusUploading": "Uploading..."
});
}

/* Dialog */

if (kendo.ui.Dialog) {
kendo.ui.Dialog.prototype.options.messages =
$.extend(true, kendo.ui.Dialog.prototype.options.localization, {
  "close": "??nchide"
});
}

/* Alert */

if (kendo.ui.Alert) {
kendo.ui.Alert.prototype.options.messages =
$.extend(true, kendo.ui.Alert.prototype.options.localization, {
  "okText": "O.K"
});
}

/* Confirm */

if (kendo.ui.Confirm) {
kendo.ui.Confirm.prototype.options.messages =
$.extend(true, kendo.ui.Confirm.prototype.options.localization, {
  "okText": "O.K",
  "cancel": "Anuleaz??"
});
}

/* Prompt */
if (kendo.ui.Prompt) {
kendo.ui.Prompt.prototype.options.messages =
$.extend(true, kendo.ui.Prompt.prototype.options.localization, {
  "okText": "O.K",
  "cancel": "Anuleaz??"
});
}

})(window.kendo.jQuery);
}));
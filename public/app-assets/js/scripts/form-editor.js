(function (window, document, $) {
    'use strict';

    var Font = Quill.import('formats/font');
    Font.whitelist = ['sofia', 'slabo', 'roboto', 'inconsolata', 'ubuntu'];
    Quill.register(Font, true);

    // Найти все элементы с классом '.full-container .editor'
    var editorElements = document.querySelectorAll('.full-container .editor');

    // Инициализировать Quill-редакторы для каждого найденного элемента
    var editors = [];
    editorElements.forEach(function(element) {
        var editor = new Quill(element, {
            bounds: '.full-container .editor',
            modules: {
                'formula': true,
                'syntax': true,
                'toolbar': [
                    [{ 'font': [] }, { 'size': [] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'color': [] }, { 'background': [] }],
                    [{ 'script': 'super' }, { 'script': 'sub' }],
                    [{ 'header': '1' }, { 'header': '2' }, 'blockquote', 'code-block'],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }],
                    ['direction', { 'align': [] }],
                    ['link', 'image', 'video', 'formula'],
                    ['clean']
                ],
            },
            theme: 'snow'
        });

        // Добавить инициализированный редактор в массив editors
        editors.push(editor);
    });

    // add browser default class to quill select
    var quillSelect = $("select[class^='ql-'], input[data-link]");
    quillSelect.addClass("browser-default");

})(window, document, jQuery);

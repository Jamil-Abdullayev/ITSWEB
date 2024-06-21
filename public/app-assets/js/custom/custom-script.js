
//Benefits tabs start
 document.addEventListener('DOMContentLoaded', function() {
    const addTabButton = document.getElementById('addTab');
    const tabs = document.getElementById('tabs');
    const tabContents = document.getElementById('tabContentsInner');

    let tabCount = 1;

    addTabButton.addEventListener('click', function() {
        tabCount++;

        const tabId = `benefit${tabCount}-tab`;
        const contentId = `benefit${tabCount}`;

        // Create new tab
        const newTab = document.createElement('li');
        newTab.classList.add('tab');
        newTab.innerHTML = `
            <a class="display-flex align-items-center" id="${tabId}" href="#${contentId}">
               <span>New Block</span> <i class="material-icons mr-1 btn-remove-tab"  data-target="${tabId}" data-content="${contentId}">cancel</i>
            </a>
        `;
        tabs.appendChild(newTab);

        // Create new tab content
        const newContent = document.createElement('div');
        newContent.classList.add('col', 's12');
        newContent.id = contentId;
        newContent.innerHTML = `
<div class="row">
    <div class="col s12 m6">
        <div class="row">
            <div class="col s12 input-field">
                <input required id="benefits[${tabCount}][title_az]" name="benefits[${tabCount}][title_az]" type="text" class="validate" value="Test" data-error=".errorTxt2">
                <label for="benefits[${tabCount}][title_az]">Title AZ</label>
                <small class="errorTxt2"></small>
            </div>
            <div class="col s12 input-field">
                <input required id="benefits[${tabCount}][title_en]" name="benefits[${tabCount}][title_en]" type="text" class="validate" value="Test" data-error=".errorTxt3">
                <label for="benefits[${tabCount}][title_en]">Title EN</label>
                <small class="errorTxt3"></small>
            </div>
            <div class="col s12 input-field">
                <input required id="benefits[${tabCount}][title_ru]" name="benefits[${tabCount}][title_ru]" type="text" class="validate" value="Test" data-error=".errorTxt3">
                <label for="benefits[${tabCount}][title_ru]">Title RU</label>
                <small class="errorTxt3"></small>
            </div>
        </div>
    </div>

    <div class="col s12 m6">
        <div class="row">
            <div class="col s12 input-field">
                <input required id="benefits[${tabCount}][description_az]" name="benefits[${tabCount}][description_az]" type="text" class="validate" value="Test" data-error=".errorTxt2">
                <label for="benefits[${tabCount}][description_az]">Description AZ</label>
                <small class="errorTxt2"></small>
            </div>
            <div class="col s12 input-field">
                <input required id="benefits[${tabCount}][description_en]" name="benefits[${tabCount}][description_en]" type="text" class="validate" value="Test" data-error=".errorTxt3">
                <label for="benefits[${tabCount}][description_en]">Description EN</label>
                <small class="errorTxt3"></small>
            </div>
            <div class="col s12 input-field">
                <input required id="benefits[${tabCount}][description_ru]" name="benefits[${tabCount}][description_ru]" type="text" class="validate" value="Test" data-error=".errorTxt3">
                <label for="benefits[${tabCount}][description_ru]">Description RU</label>
                <small class="errorTxt3"></small>
            </div>
        </div>
    </div>
</div>

        `;
        tabContents.appendChild(newContent);

        // Reinitialize tabs
        M.Tabs.init(tabs);
    });

    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('btn-remove-tab')) {
            event.preventDefault(); // Prevent form submission
            const tabId = event.target.getAttribute('data-target');
            const contentId = event.target.getAttribute('data-content');

            // Remove tab
            document.getElementById(tabId).parentElement.remove();
            // Remove tab content
            document.getElementById(contentId).remove();

            // Reinitialize tabs
            M.Tabs.init(tabs);
        }
    });
});

//Benefits tabs end

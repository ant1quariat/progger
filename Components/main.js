const inputBox = document.querySelectorAll('input[class="form-group-input"]');
        
inputBox.forEach(function(elem) {

    let scopeID = elem.getAttribute('data-counter');
    let scopeBox = document.getElementById(scopeID);

    elem.addEventListener("input", onChangeScope);
    function onChangeScope(count) {
        scopeBox.textContent = count.target.value.length
    }

});
const buttonVis = document.querySelectorAll('a[class="form-pass-input-check"]');

buttonVis.forEach(function(btn) {

    btn.addEventListener('click', onPasswordCheck);

    function onPasswordCheck() {

        btn.classList.toggle('form-button-active');

        let inpID = btn.getAttribute('data-visibility');
        const inp = document.getElementById(inpID);
        
        if (inp.getAttribute('type') === "password") {
            inp.setAttribute('type', "text")
        } else {
            inp.setAttribute('type', "password")
        }
    }

});

const formBtn = document.getElementById('form-switch');

formBtn.addEventListener('click', function() {

    const elem = document.getElementById('forms');
    elem.classList.toggle('uns')

});


const selectEl = document.getElementById('select');
const selectBTN = document.getElementById('select-button');
const selectHd = document.getElementById('select-header');
const selectItems = document.querySelectorAll('.select-body-element');
const selectHeader = document.querySelector('.select-header-element');
const selectBody = document.getElementById('select-body');

selectHd.addEventListener('click', function(){

    selectBTN.classList.toggle('active')
    selectBody.classList.toggle('uns')

});

selectItems.forEach(function(items) {
    items.addEventListener('click', function() {

        selectHeader.textContent = items.textContent;

        selectBody.classList.toggle('uns')

        if( items.getAttribute('data-value') === "") {

            console.log('Сброс выбора')

        } else {

            console.log(items.getAttribute('data-value'));

        }

    })
});
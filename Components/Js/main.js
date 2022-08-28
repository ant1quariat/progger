class Stogage {
    constructor(name) {

      this.name = name;

      this.hash = {};

      let text = localStorage.getItem(this.name);
      if (text)
        this.hash = JSON.parse(text);

      this.save();

    }

    get(id) {

      return this.item.find(item => item.id === id)

    }

    add(id, data) {

      this.hash[id] = data;
      this.save();

    }

    del(id) {

      delete this.hash[id];
      this.save();

    }

    save() {

      this.list = Object.values(this.hash);

      const text = JSON.stringify(this.hash);

      localStorage.setItem(this.name, text);

    }
}

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

const themeSwitch = document.getElementById('theme-switch');
const themeAttr = document.querySelector('body');

themeSwitch.addEventListener('click', function() {
    if (themeAttr.getAttribute('theme') === "dark"){
        themeAttr.setAttribute('theme', "light")
    } else {
        themeAttr.setAttribute('theme', "dark")
    }
});


const cb = document.getElementById('check-1');

cb.addEventListener('change', function() {

    // if (localStorage.getItem('theme') === "dark"){
    //     themeAttr.setAttribute('theme', "dark")
    // } else {
    //     themeAttr.setAttribute('theme', "light")
    // }

    if (localStorage.getItem('theme') === "dark"){

        themeAttr.setAttribute('theme', "light");
        
        localStorage.setItem('theme', "light");

    } else {

        themeAttr.setAttribute('theme', "dark");

        localStorage.setItem('theme', "light");
    }
})


const checkbox_store = new Stogage('checkbox_store');

  checkbox_store.list.forEach(item => {

    if (item.state === "on"){
      return document.querySelector('#' + item.id).checked = item.state;

    }

    checkbox_store.del(item.id);

  });

  function changeHandler(event) {

    let id = event.currentTarget.id;
    let state = event.currentTarget.checked ? "on" : undefined;

    checkbox_store.add(id, {
        id: id,
        state: state
    });

  };

  document.querySelectorAll('.check').forEach(function (item) {
    
    item.addEventListener("change", changeHandler);

  });
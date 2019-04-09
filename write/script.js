'use strict'

class Dropdown {
  constructor(userOptions = {}) {
    this.defaultOptions = {
      dropdownButton: '.dropdown-button',
      dropdownContent: '.dropdown-content',
      showClass: 'show',
      activeClass: 'active',
    }
    
    this.options = this.extendDefaults(this.defaultOptions, userOptions)
    
    this.addEvents('click', document.querySelectorAll(this.options.dropdownButton), this.toggleDropdown.bind(this))
    this.addEvent('click', document, this.documentCloseDropdown.bind(this))
  }
  
  toggleDropdown(e) {
    const btn = e.target,
          dropdownContent = btn.parentElement.querySelectorAll(this.options.dropdownContent)[0]
    
    this.closeAllDropdown(dropdownContent)
    btn.classList.toggle(this.options.activeClass)
    btn.parentElement.querySelectorAll(this.options.dropdownContent)[0].classList.toggle(this.options.showClass)
    btn.parentElement.classList.toggle(this.options.activeClass)
  }
  
  documentCloseDropdown(e) {
    if (!e.target.matches(this.options.dropdownButton)) {
        this.closeAllDropdown()
    }
  }
  
  closeAllDropdown(skipDropdown=false) {
    const dropdowns = document.querySelectorAll(this.options.dropdownContent)
    Array.prototype.forEach.call(dropdowns, (dropdown) => {
      if(skipDropdown !== dropdown) {
        dropdown.parentElement.querySelectorAll(this.options.dropdownButton)[0].classList.remove(this.options.activeClass)
        dropdown.classList.remove(this.options.showClass)
        dropdown.parentElement.classList.remove(this.options.activeClass)
      }
    });
  }
  
  addEvents(eventName, elements, listener, useCapture=false) {
    Array.prototype.forEach.call(elements, (element) => {
      element.addEventListener(eventName, listener, useCapture)
    })
  }
  addEvent(eventName, element, listener, useCapture=false) {
    element.addEventListener(eventName, listener, useCapture)
  }
  
  extendDefaults(defaults, options) {
    let property
		for (property in options) {
			if (defaults.hasOwnProperty(property)) {
				defaults[property] = options[property]
			}
		}
		return defaults
  }
}

new Dropdown()
require('./bootstrap');
import Alpine from "alpinejs";

window.Alpine = Alpine;

//----------------------------------
// Some global Alpine data providers
//----------------------------------
document.addEventListener('alpine:init', () => {
  Alpine.data('dropdown', () => ({
    open: false,
    onButtonClick() {
      this.open = !this.open;
    },
    onClickAway(e) {
      if (this.open) {
        this.open = false;
      }
    }
  }))
})

// Finally start Alpine
Alpine.start();



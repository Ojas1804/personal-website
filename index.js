function toggleMobileMenu(menu) 
{
    menu.classList.toggle('open');
}


(function() {
    window.addEventListener('load', () => {
        AOS.init({
          duration: 800,
          easing: 'ease-in-out',
          once: true,
          mirror: false
        })
      });
    
    })()
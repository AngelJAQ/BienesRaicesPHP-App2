document.addEventListener('DOMContentLoaded', function(){
    
    eventListeners();

    darkMode();

});

function darkMode(){
    const botonDarkMode = document.querySelector('.dark-mode-boton');

    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    //console.log(prefiereDarkMode.matches);

    if (prefiereDarkMode.matches){
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function(){
        if (prefiereDarkMode.matches){
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });

    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode');
    });
}

function eventListeners(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar')
}
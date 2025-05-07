window.addEventListener('load', () => {

    const hamburgerButton = document.getElementById('mobile_menu_toggle');
    const mobileMenu = document.getElementById('mobile_menu');
    const headerLinks = document.querySelectorAll('.header_link');
    
    const toggleActive = (a, b) => {
        const params = [a, b];
        params.forEach(param => {
            param.toggleAttribute('active');
        });
    }
    
    hamburgerButton.addEventListener('click', () => {
        toggleActive(hamburgerButton, mobileMenu);
    });
    
    mobileMenu.addEventListener('click', () => {
        mobileMenu.toggleAttribute('active');
        hamburgerButton.toggleAttribute('active');
    });
    
    const removeActiveAttribute = (headerLinks) => {
        headerLinks.forEach(headerLink => {
            headerLink.removeAttribute('active');
        });
    }
    
    const linkToggle = (headerLinks) => {
        headerLinks.forEach(headerLink => {
            headerLink.addEventListener('click', (e) => {
                let clickedSection = e.currentTarget;
                if(clickedSection.getAttribute('data-header-link') == 'home') {
                    removeActiveAttribute(headerLinks);
                } else {
                    removeActiveAttribute(headerLinks);
                    clickedSection.setAttribute('active', true);
                }
            } )
        });
    };
    
    linkToggle(headerLinks);
    
    if(document.getElementById('about_me_button')){
        document.getElementById('about_me_button').addEventListener('click', () => {
            removeActiveAttribute(headerLinks);
            document.getElementById('about_link').setAttribute('active', true);
        })
    }
});
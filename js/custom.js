document.addEventListener("DOMContentLoaded", ready);

function ready() {
    if (window.screen.width <= 768) {
        new WOW().init();
    } else {
        wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset: 100, // default
            mobile: true, // default
            live: true // default
        })
        wow.init();
    }

    let links = document.querySelectorAll('.nav-link')
    links.forEach( item => {
        if (!item.classList.contains('dropdown-toggle')) {
            item.addEventListener('click', function() {
                let mobButtonArr = document.getElementsByClassName('navbar-toggler')
                let mobButton = mobButtonArr[0];
                let mainNav = document.getElementById('navbarSupportedContent')
                mobButton.classList.add('collapsed')
                mobButton.setAttribute('aria-expanded', 'false')
                mainNav.classList.remove('show')
            })
        }
    })

    // Move binotel classes from <li> to <a>
    let menuItems = document.querySelectorAll('.menu-item');
    if (menuItems) {
        let itemNumber = 0;
        menuItems.forEach( item => {
            let binotelClassEntry = 'binct-phone-number-';
            let classListChecker = item.classList.toString().includes(binotelClassEntry);

            if (classListChecker) {
                itemNumber += 1;
                let binotelClass = `${binotelClassEntry}${itemNumber}`;
                item.classList.remove(binotelClass);
                let link = item.children;
                link[0].classList.add(`${binotelClass}`);
            }
        })
    }

    // Move Binotel tooltip to right side
    function moveBinotelTooltip () {
        let binotelTooltip = document.querySelectorAll('.bingc-phone-button-tooltip-bottom-left')[0];
        binotelTooltip.classList.add('bingc-phone-button-tooltip-bottom-right');
        binotelTooltip.classList.remove('bingc-phone-button-tooltip-bottom-left');
    }
    setTimeout(moveBinotelTooltip, 3000);
    

    // Change Language toggler to UA/RU
    const parentLangLink = document.querySelector('.pll-parent-menu-item');
    const parentLangLinkName = parentLangLink.children[0].children[0];
    const ukraineLangLink = document.querySelector('.lang-item-uk'); 
    const orksLangLink = document.querySelector('.lang-item-ru'); 
    parentLangLinkName.innerHTML = 'UA';
    ukraineLangLink.children[0].children[0].innerHTML = 'UA';
    orksLangLink.children[0].children[0].innerHTML = 'RU';
    
    if (window.location.href.includes("ru")) {
        parentLangLinkName.innerHTML = 'RU'
    }
    
    // Show Extended Form in banner
    let bannerDiscountBtn = document.getElementsByClassName('js-btn-discount-banner')[0];
    let simpleBannerForm = document.getElementsByClassName('js-banner-form')[0];
    let discountBannerForm = document.getElementsByClassName('js-banner-form-extended')[0];
    let banner = document.getElementById('bannerSection');
    if (bannerDiscountBtn) {
        bannerDiscountBtn.addEventListener("click", ()=> {
            simpleBannerForm.classList.remove('d-md-inline-flex', 'flex-wrap'); 
            simpleBannerForm.classList.add('d-none');
            discountBannerForm.classList.remove('d-none');
            discountBannerForm.classList.add('d-md-inline-flex','flex-wrap','justify-content-md-between', 'd-block');
            banner.classList.add('discount-form-opened');
        });
    }
    

    // Show Extended Form in sidebar
    let sidebarDiscountBtn = document.getElementsByClassName('js-btn-discount-sidebar')[0];
    let simpleSidebarForm = document.getElementsByClassName('js-sidebar-form')[0];
    let discountSidebarForm = document.getElementsByClassName('js-sidebar-form-extended')[0];
    if (sidebarDiscountBtn) {
    sidebarDiscountBtn.addEventListener("click", ()=> {
        simpleSidebarForm.classList.remove('d-md-inline-flex', 'flex-wrap'); 
        simpleSidebarForm.classList.add('d-none');
        discountSidebarForm.classList.remove('d-none');
        discountSidebarForm.classList.add('d-md-inline-flex','flex-wrap','justify-content-md-between', 'd-block');
    });
    }


    // Define locale to fix styles depends on locale
    const currentUrlPathname = window.location.pathname;

    if (currentUrlPathname.toString().includes("/ru")) {
        let bodyElem = document.getElementsByTagName('body');
        bodyElem[0].classList.add('ru')
    }

    // Minimum date in DatePicker is today in format yyyy-mm-dd
    let todayDate = new Date().toISOString().slice(0, 10);
    let bannerDatePicker = document.getElementById('bannerDateExt');
    if (bannerDatePicker) {
        bannerDatePicker.setAttribute('min', todayDate);
    }
}
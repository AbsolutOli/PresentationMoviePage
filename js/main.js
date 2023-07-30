window.addEventListener('wheel', scrollItem);
window.addEventListener('touchstart', swipeItemStart);
window.addEventListener('touchend', swipeItemEnd);


const allPages = document.querySelectorAll('.main > *');
const allMenuStateBars = document.querySelectorAll('.menu-state-bar__list>*');
const menuItems = document.querySelectorAll('.menu__list .menu__link');

document.querySelector('.menu__list').addEventListener('click', menuClick);

let activePage = 0;
let previousPage;

let scrollTime = 0;
let scrollStep = 0;

function menuClick(event) {
    if (event.target.classList.contains('menu__link')) {
        event.preventDefault();

        menuItems.forEach((item, index) => {
            if (item === event.target) {
                menuClicklEvent(index);
            }
        })
    }
}

function menuClicklEvent(index) {
    previousPage = activePage;
    activePage = index;

    allPages[previousPage].classList.remove('active');
    allPages[activePage].classList.add('active');

    allMenuStateBars[previousPage].classList.remove('active');
    allMenuStateBars[activePage].classList.add('active');

    document.querySelector('.header__body').classList.toggle('active');
}

function scrollItem(event) {
    scrollTime++;
    if (scrollTime > 5) {
        scrollDirection(event);
    }
}

function scrollDirection(event) {
    if (event.deltaY > 0 && activePage < allPages.length - 1) {
        nextPage();
    } else if (event.deltaY < 0 && activePage > 0) {
        prevPage();
    }
    scrollTime = 0
}


let touchStart;

function swipeItemStart(event) {
    touchStart = event.changedTouches[0].clientY;
}

function swipeItemEnd(event) {
    let touchEnd = event.changedTouches[0].clientY
    if (Math.abs(touchStart - touchEnd) > (window.innerHeight / 3)) {
        if (touchEnd < touchStart && activePage < allPages.length - 1) {
            nextPage();
        } else if (touchEnd > touchStart && activePage > 0) {
            prevPage();
        }
    }
}

function nextPage() {
    previousPage = activePage;
    activePage++;
    //console.log(`previousPage: ${previousPage} \n activePage: ${activePage}`);
    allPages[previousPage].classList.remove('active');
    allPages[activePage].classList.add('active');

    allMenuStateBars[previousPage].classList.remove('active');
    allMenuStateBars[activePage].classList.add('active');


    if (scrollStep < 100 * 5) {
        scrollStep += 130;
    }
    document.querySelector('.menu-state-bar').scroll(scrollStep, 0);
}

function prevPage() {
    previousPage = activePage;
    activePage--
    allPages[previousPage].classList.remove('active');
    allPages[activePage].classList.add('active');

    allMenuStateBars[previousPage].classList.remove('active');
    allMenuStateBars[activePage].classList.add('active');



    if (scrollStep > 0) {
        scrollStep -= 130;
    }
    document.querySelector('.menu-state-bar').scroll(scrollStep, 0);
}
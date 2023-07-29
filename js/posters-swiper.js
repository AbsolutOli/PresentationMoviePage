document.querySelector('.slider-posters__button.__left').addEventListener('click', swipeHandler);
document.querySelector('.slider-posters__button.__right').addEventListener('click', swipeHandler);

const backgroundsPostersList = document.querySelectorAll('.posters__background>*');
const posterNumber = document.querySelector('.slider-posters__number');
const indicatorsPosterList = document.querySelectorAll('.slider-posters__indicators>*');
const postersPosterList = document.querySelectorAll('.slider-posters__content>*');

let activePostersSlide = 0;

function swipeHandler(event) {
    let prevSlide = activePostersSlide;

    if (event.target.closest('.__left')) {
        if (activePostersSlide === 0) {
            activePostersSlide = backgroundsPostersList.length - 1;
        } else {
            activePostersSlide--;
        }

        changeSlide(prevSlide, activePostersSlide);

    } else if (event.target.closest('.__right')) {
        if (activePostersSlide === backgroundsPostersList.length - 1) {
            activePostersSlide = 0;
        } else {
            activePostersSlide++;
        }

        changeSlide(prevSlide, activePostersSlide);
    }
}

function changeSlide(prevSlide, activePostersSlide) {
    backgroundsPostersList[prevSlide].classList.remove('active');
    backgroundsPostersList[activePostersSlide].classList.add('active');

    indicatorsPosterList[prevSlide].classList.remove('active');
    indicatorsPosterList[activePostersSlide].classList.add('active');

    posterNumber.innerHTML = (`0${activePostersSlide + 1}`);

    postersPosterList[prevSlide].classList.remove('active');
    postersPosterList[activePostersSlide].classList.add('active');

    if (activePostersSlide < postersPosterList.length - 1) {
        if (prevSlide === 4) {
            postersPosterList[activePostersSlide + 1].classList.add('next');
        } else {
            postersPosterList[prevSlide + 1].classList.remove('next');
            postersPosterList[activePostersSlide + 1].classList.add('next');
        }
    } else {
        postersPosterList[prevSlide + 1].classList.remove('next');
    }
}


document.querySelector('.slider-characters__button.__left').addEventListener('click', clickHandler);
document.querySelector('.slider-characters__button.__right').addEventListener('click', clickHandler);

const itemCharactersList = document.querySelectorAll('.slider-characters__content > *');
const backgroundsList = document.querySelectorAll('.characters__background > *');

let activeSlide = 0;

function clickHandler(event) {
    let prevSlide = activeSlide;;
    let nextSlide;
    // && activeSlide > 0
    // && activeSlide < itemCharactersList.length - 1
    if (event.target.closest('.__left')) {
        if (activeSlide === 0) {
            activeSlide = itemCharactersList.length - 1;
        } else {
            activeSlide--;
        }

        itemCharactersList[prevSlide].classList.remove('active');
        backgroundsList[prevSlide].classList.remove('active');

        itemCharactersList[activeSlide].classList.add('active');
        backgroundsList[activeSlide].classList.add('active');
    } else if (event.target.closest('.__right')) {
        if (activeSlide === itemCharactersList.length - 1) {
            activeSlide = 0;
        } else {
            activeSlide++;
        }

        itemCharactersList[prevSlide].classList.remove('active');
        backgroundsList[prevSlide].classList.remove('active');

        itemCharactersList[activeSlide].classList.add('active');
        backgroundsList[activeSlide].classList.add('active');
    }
}
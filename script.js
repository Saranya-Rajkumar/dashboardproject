const ratingInputs1 = document.querySelectorAll('#rating1 input');
const ratingText1 = document.getElementById('ratingText1');

const ratingInputs2 = document.querySelectorAll('#rating2 input');
const ratingText2 = document.getElementById('ratingText2');

const ratingInputs3 = document.querySelectorAll('#rating3 input');
const ratingText3 = document.getElementById('ratingText3');

const ratingInputs4 = document.querySelectorAll('#rating4 input');
const ratingText4 = document.getElementById('ratingText4');

const ratingInputs5 = document.querySelectorAll('#rating5 input');
const ratingText5 = document.getElementById('ratingText5');

const ratingInputs6 = document.querySelectorAll('#rating6 input');
const ratingText6 = document.getElementById('ratingText6');

const ratingInputs7 = document.querySelectorAll('#rating7 input');
const ratingText7 = document.getElementById('ratingText7');


ratingInputs1.forEach(input => {
    input.addEventListener('change', () => {
        const selectedRating = input.value;
        updateRatingText(selectedRating, ratingText1);
    });
});

ratingInputs2.forEach(input => {
    input.addEventListener('change', () => {
        const selectedRating = input.value;
        updateRatingText(selectedRating, ratingText2);
    });
});

ratingInputs3.forEach(input => {
    input.addEventListener('change', () => {
        const selectedRating = input.value;
        updateRatingText(selectedRating, ratingText3);
    });
});

ratingInputs4.forEach(input => {
    input.addEventListener('change', () => {
        const selectedRating = input.value;
        updateRatingText(selectedRating, ratingText4);
    });
});

ratingInputs5.forEach(input => {
    input.addEventListener('change', () => {
        const selectedRating = input.value;
        updateRatingText(selectedRating, ratingText5);
    });
});

ratingInputs6.forEach(input => {
    input.addEventListener('change', () => {
        const selectedRating = input.value;
        updateRatingText(selectedRating, ratingText6);
    });
});

ratingInputs7.forEach(input => {
    input.addEventListener('change', () => {
        const selectedRating = input.value;
        updateRatingText(selectedRating, ratingText7);
    });
});

function updateRatingText(selectedRating, ratingText) {
       if(selectedRating > 1){
        ratingText.textContent = selectedRating + " stars rating";
       } else {
            ratingText.textContent = selectedRating + " star rating";
        }
    }
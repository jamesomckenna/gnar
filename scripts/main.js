window.addEventListener("load", (event) => {
    console.log('Load Complete');


    // get every score row element
    var score_rows = document.getElementsByClassName("score-row");

    // loop all rows
    for (var i = 0; i < score_rows.length; i++) {
        // get counter elements
        let counter_add = score_rows[i].querySelector('.js-counter-add');
        let counter_sub = score_rows[i].querySelector('.js-counter-sub');
        let counter_value = score_rows[i].querySelector('.js-counter-value');

        // increase counter
        counter_add.addEventListener("click", (event) => {
            if(counter_value.dataset.value >= 99){
                return
            }
            counter_value.dataset.value = parseInt(counter_value.dataset.value) + 1;
            counter_value.textContent = counter_value.dataset.value;
        });

        // decrease counter
        counter_sub.addEventListener("click", (event) => {
            if(counter_value.dataset.value <= 0){
                return
            }
            counter_value.dataset.value-= 1;
            counter_value.textContent = counter_value.dataset.value;
        });
    }
});
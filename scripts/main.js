window.addEventListener("load", (event) => {
    console.log('Load Complete');



    /******* TABS *******/

    let tab_cat_links = document.getElementsByClassName("cat-tab");
    let tab_cat_contents = document.getElementsByClassName("cat-content");
    for (let i = 0; i < tab_cat_links.length; i++) {
        let tab_cat_link = tab_cat_links[i];

        tab_cat_link.addEventListener("click", (event) => {
            event.preventDefault();
            let active_content_id = tab_cat_link.dataset.contentId;
            let tab_cat_content_active = document.getElementById(active_content_id);

            for (let j = 0; j < tab_cat_contents.length; j++) {
                tab_cat_contents[j].style.display = "none";
            }

            for (let j = 0; j < tab_cat_links.length; j++) {
                tab_cat_links[j].classList.remove("active");
            }

            if(tab_cat_content_active !== null){
                tab_cat_content_active.style.display = "block";
            }
            tab_cat_link.classList.add("active");
        });  
    }



    /******* SCORING *******/

    // get every score row element
    let div_score_rows = document.getElementsByClassName("score-row");

    // loop all rows
    for (let i = 0; i < div_score_rows.length; i++) {
        // get counter elements
        let btn_counter_add = div_score_rows[i].querySelector('.js-counter-add');
        let btn_counter_sub = div_score_rows[i].querySelector('.js-counter-sub');
        let div_counter_value = div_score_rows[i].querySelector('.js-counter-value');

        // increase counter
        btn_counter_add.addEventListener("click", (event) => {
            event.preventDefault();
            if(div_counter_value.dataset.value >= 99){
                return
            }
            div_counter_value.dataset.value = parseInt(div_counter_value.dataset.value) + 1;
            div_counter_value.textContent = div_counter_value.dataset.value;
        });

        // decrease counter
        btn_counter_sub.addEventListener("click", (event) => {
            event.preventDefault();
            if(div_counter_value.dataset.value <= 0){
                return
            }
            div_counter_value.dataset.value-= 1;
            div_counter_value.textContent = div_counter_value.dataset.value;
        });
    }
});
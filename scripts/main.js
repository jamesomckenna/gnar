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

            if (tab_cat_content_active !== null) {
                tab_cat_content_active.style.display = "block";
            }
            tab_cat_link.classList.add("active");
        });
    }



    /******* SCORING *******/

    if (document.getElementById("add-points")) {
        console.log('Add points page loaded');

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
                if (div_counter_value.dataset.value >= 99) {
                    return
                }
                div_counter_value.dataset.value = parseInt(div_counter_value.dataset.value) + 1;
                div_counter_value.textContent = div_counter_value.dataset.value;
            });

            // decrease counter
            btn_counter_sub.addEventListener("click", (event) => {
                event.preventDefault();
                if (div_counter_value.dataset.value <= 0) {
                    return
                }
                div_counter_value.dataset.value -= 1;
                div_counter_value.textContent = div_counter_value.dataset.value;
            });
        }


        // Trick Tabs
        let tab_trick_links = document.getElementsByClassName("trick-tab");
        let tab_trick_contents = document.getElementsByClassName("trick-tab-content");
        for (let i = 0; i < tab_trick_links.length; i++) {
            let tab_trick_link = tab_trick_links[i];

            tab_trick_link.addEventListener("click", (event) => {
                event.preventDefault();
                let active_content_id = tab_trick_link.dataset.contentId;
                let tab_trick_content_active = document.getElementById(active_content_id);

                for (let j = 0; j < tab_trick_contents.length; j++) {
                    tab_trick_contents[j].style.display = "none";
                }

                for (let j = 0; j < tab_trick_links.length; j++) {
                    tab_trick_links[j].classList.remove("active");
                }

                if (tab_trick_content_active !== null) {
                    tab_trick_content_active.style.display = "flex";
                }
                tab_trick_link.classList.add("active");
            });
        }


        for (let i = 0; i < tab_cat_contents.length; i++) {
            let btn_difficulty_filters = tab_cat_contents[i].getElementsByClassName('difficulty-filter');
            let score_rows = tab_cat_contents[i].getElementsByClassName('score-row');

            for (let j = 0; j < btn_difficulty_filters.length; j++) {
                let btn_difficulty_filter = btn_difficulty_filters[j];

                btn_difficulty_filter.addEventListener("click", (event) => {
                    event.preventDefault();
                    let difficulty = btn_difficulty_filter.dataset.difficultyId;
                    
                    for (let k = 0; k < score_rows.length; k++) {
                        let score_row = score_rows[k];
                        if(score_row.dataset.difficulty == difficulty || difficulty == 'all'){
                            score_row.style.display = "flex";
                        } else {
                            score_row.style.display = "none";
                        }
                    }
                });
            }
        }
    }
});
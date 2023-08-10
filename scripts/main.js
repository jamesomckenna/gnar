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

        let div_score_rows = document.getElementsByClassName("score-row");
        let tab_trick_links = document.getElementsByClassName("trick-tab");
        let tab_trick_contents = document.getElementsByClassName("trick-tab-content");
        let tab_cat_contents = document.getElementsByClassName("cat-content");
        let tab_total_link = document.getElementById('tab-total-link');
        let total_score = document.getElementById('total-score');
        let list_score = document.getElementById('list-score');
        let submit_score = document.getElementById('submit-score');

        // Initialise score qty buttons for each score
        for (let i = 0; i < div_score_rows.length; i++) {
            // get counter elements
            let div_score_row = div_score_rows[i];
            let btn_counter_add = div_score_row.querySelector('.js-counter-add');
            let btn_counter_sub = div_score_row.querySelector('.js-counter-sub');
            let div_counter_value = div_score_row.querySelector('.js-counter-value');

            // increase counter
            btn_counter_add.addEventListener("click", (event) => {
                event.preventDefault();
                if (div_score_row.dataset.value >= 99) {
                    return
                }
                div_score_row.dataset.value = parseInt(div_score_row.dataset.value) + 1;
                div_counter_value.textContent = div_score_row.dataset.value;
            });

            // decrease counter
            btn_counter_sub.addEventListener("click", (event) => {
                event.preventDefault();
                if (div_score_row.dataset.value <= 0) {
                    return
                }
                div_score_row.dataset.value -= 1;
                div_counter_value.textContent = div_score_row.dataset.value;
            });
        }


        // Trick Tabs
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


        // Difficulty Tabs
        for (let i = 0; i < tab_cat_contents.length; i++) {
            let tab_cat_content = tab_cat_contents[i];
            let btn_difficulty_filters = tab_cat_content.getElementsByClassName('difficulty-filter');
            let score_rows = tab_cat_content.getElementsByClassName('score-row');

            for (let j = 0; j < btn_difficulty_filters.length; j++) {
                let btn_difficulty_filter = btn_difficulty_filters[j];

                btn_difficulty_filter.addEventListener("click", (event) => {
                    event.preventDefault();
                    let difficulty = btn_difficulty_filter.dataset.difficultyId;

                    for (let k = 0; k < score_rows.length; k++) {
                        let score_row = score_rows[k];
                        if (score_row.dataset.difficulty == difficulty || difficulty == 'all') {
                            score_row.style.display = "flex";
                        } else {
                            score_row.style.display = "none";
                        }
                    }
                });
            }
        }


        // Display total score
        tab_total_link.addEventListener("click", (event) => {
            let total_obj = calculateTotalScore();

            categorised_scores = {};

            total_obj.points_list.forEach((points) => {
                if (!(points.cat in categorised_scores)) {
                    categorised_scores[points.cat] = [];
                }
                categorised_scores[points.cat].push(points);
            });

            list_score.style.whiteSpace = 'pre';
            list_score.innerHTML = JSON.stringify(categorised_scores, null, 4);
            total_score.innerHTML = total_obj.points_total;
        });

        // Display total score
        submit_score.addEventListener("click", async (event) => {
            let total_obj = calculateTotalScore();
            let url = "api/save-score.php";

            const response = await fetch(url, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(total_obj),
            });
            if (response.status === 200) {
                console.log(await response.json());
            } else {
                console.log("error");
            }

        });

        // Calculate total score
        function calculateTotalScore() {
            let points_array = [];
            let points_total = 0;

            for (let i = 0; i < tab_cat_contents.length; i++) {
                let tab_cat_content = tab_cat_contents[i];
                let div_cat_score_rows = tab_cat_content.getElementsByClassName('score-row');

                for (let j = 0; j < div_cat_score_rows.length; j++) {
                    let div_cat_score_row = div_cat_score_rows[j];

                    if (div_cat_score_row.dataset.value > 0) {
                        let points = div_cat_score_row.dataset.points * div_cat_score_row.dataset.value;
                        points_total += points;
                        points_array.push({
                            "id": div_cat_score_row.dataset.id,
                            "name": div_cat_score_row.dataset.name,
                            "qty": div_cat_score_row.dataset.value,
                            "points": points,
                            "cat": tab_cat_content.dataset.name,
                        });
                    }
                }
            }

            return {
                points_list: points_array,
                points_total: points_total
            }
        }

    }
});